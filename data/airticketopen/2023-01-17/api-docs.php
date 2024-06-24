<?php return array (
  'version' => '1.0',
  'info' => 
  array (
    'style' => 'ROA',
    'product' => 'airticketOpen',
    'version' => '2023-01-17',
  ),
  'directories' => 
  array (
    0 => 
    array (
      'id' => 180765,
      'title' => 'Token凭证',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'GetToken',
      ),
    ),
    1 => 
    array (
      'id' => 180770,
      'title' => '正向',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'Search',
        1 => 'Enrich',
        2 => 'AncillarySuggest',
        3 => 'Pricing',
        4 => 'Book',
        5 => 'TicketingCheck',
        6 => 'Ticketing',
        7 => 'Cancel',
        8 => 'OrderDetail',
        9 => 'OrderList',
      ),
    ),
    2 => 
    array (
      'id' => 180787,
      'title' => '退票',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'RefundApply',
        1 => 'RefundDetailList',
        2 => 'RefundDetail',
      ),
    ),
    3 => 
    array (
      'id' => 180791,
      'title' => '改期',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'ChangeConfirm',
        1 => 'ChangeCancel',
        2 => 'ChangeDetailListOfBuyer',
        3 => 'ChangeDetail',
        4 => 'ChangeApply',
        5 => 'ChangeDetailListOfOrderNum',
      ),
    ),
    4 => 
    array (
      'id' => 180799,
      'title' => '航变',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'FlightChangeOfOrder',
      ),
    ),
    5 => 
    array (
      'id' => 182563,
      'title' => '其他',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'AccountFlowList',
        1 => 'FileUpload',
      ),
    ),
    6 => 
    array (
      'id' => 0,
      'title' => '其它',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'LuggageDirect',
        1 => 'TransitVisa',
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
    'GetToken' => 
    array (
      'summary' => '获取接口调用 token 凭证，token 有效期2小时。',
      'path' => '/airticket/v1/token',
      'methods' => 
      array (
        0 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'https',
        1 => 'http',
      ),
      'security' => 
      array (
        0 => 
        array (
          'rootTokenAuth' => 
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
          'name' => 'app_key',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'appKey',
            'description' => 'appKey',
            'type' => 'string',
            'required' => true,
            'example' => 'fu1bltcu3400iurywuri',
          ),
        ),
        1 => 
        array (
          'name' => 'app_secret',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'appSecret',
            'description' => 'appSecret',
            'type' => 'string',
            'required' => true,
            'example' => 'ZzQ3MW1mb3E1ODAwI2ldUjYlWUdJn5YI',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'headers' => 
          array (
          ),
          'schema' => 
          array (
            'title' => 'PopBaseRes<TokenInfoDTO, Object>',
            'description' => 'PopBaseRes<TokenInfoDTO, Object>',
            'type' => 'object',
            'properties' => 
            array (
              'status' => 
              array (
                'title' => 'http 请求成功，status 值均为 200',
                'description' => 'http 请求成功，status 值均为 200',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'error_code' => 
              array (
                'title' => '业务错误码',
                'description' => '业务错误码',
                'type' => 'string',
                'example' => 'null',
              ),
              'error_msg' => 
              array (
                'title' => '错误信息',
                'description' => '错误信息',
                'type' => 'string',
                'example' => 'null',
              ),
              'success' => 
              array (
                'title' => '是否正确',
                'description' => '是否正确',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'RequestId' => 
              array (
                'title' => '请求 RequestId',
                'description' => '请求 RequestId',
                'type' => 'string',
                'example' => '51593418-8C73-5E47-8BA8-3F1D4A00CC0B',
              ),
              'data' => 
              array (
                'title' => '正确处理返回数据',
                'description' => '正确处理返回数据',
                'type' => 'object',
                'properties' => 
                array (
                  'token' => 
                  array (
                    'title' => 'token',
                    'description' => 'token',
                    'type' => 'string',
                    'example' => 'eyJhbGciOiJSUzI1NiIsImtpZCI6InN1ZXpfa2V5aWQifQ.eyJqdGkiOiIyUlRjY0Ezc1puSndpYU11R1ctTkVRIiwiaWF0IjoxNjc3MTU1Njg3LCJleHAiOjE2NzcxNjI4ODcsIm5iZiI6MTY3NzE1NTYyN30.bd8qBedJ7R24NC8VpMtM4Ni5OR-Cc0utPiKSx8fjoj9taalt7zXBF8uIVTETw1N-Fx9reLflwVXrbDHky7ZKqlE5o_B5Bkx-crQKlJL-NzasEmNnuJNb5kmmbCy3mvIrQfo5Q5Y0ZaQ110pXK4qd1shRbklvuQXn8lPueJtNqo8VdIOAPGG_rPwOw2P767I0fyFHcome8FR4ST1UrwxeApNKMB_BkpCsUZLgpm9h9trhKbB-3qtk6UK1GKmfw6qlWpL3PQN7FAObNruS0r0CGh3Muc9PaGsuu8Xu5on21h9WmI7L0-jatZkS55p4PEerU56XpkwJfa35_hltKNTauu',
                  ),
                  'expire_time' => 
                  array (
                    'title' => 'token 剩余有效时间 单位秒',
                    'description' => 'token 剩余有效时间 单位秒',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '7200',
                  ),
                  'generate_time' => 
                  array (
                    'title' => 'token生成时间戳，秒级别',
                    'description' => 'token生成时间戳 秒级别',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1677055176',
                  ),
                ),
              ),
              'error_data' => 
              array (
                'title' => '错误处理携带数据',
                'description' => '错误处理携带数据',
                'type' => 'any',
                'example' => 'null',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"status\\": 200,\\n  \\"error_code\\": \\"null\\",\\n  \\"error_msg\\": \\"null\\",\\n  \\"success\\": true,\\n  \\"RequestId\\": \\"51593418-8C73-5E47-8BA8-3F1D4A00CC0B\\",\\n  \\"data\\": {\\n    \\"token\\": \\"eyJhbGciOiJSUzI1NiIsImtpZCI6InN1ZXpfa2V5aWQifQ.eyJqdGkiOiIyUlRjY0Ezc1puSndpYU11R1ctTkVRIiwiaWF0IjoxNjc3MTU1Njg3LCJleHAiOjE2NzcxNjI4ODcsIm5iZiI6MTY3NzE1NTYyN30.bd8qBedJ7R24NC8VpMtM4Ni5OR-Cc0utPiKSx8fjoj9taalt7zXBF8uIVTETw1N-Fx9reLflwVXrbDHky7ZKqlE5o_B5Bkx-crQKlJL-NzasEmNnuJNb5kmmbCy3mvIrQfo5Q5Y0ZaQ110pXK4qd1shRbklvuQXn8lPueJtNqo8VdIOAPGG_rPwOw2P767I0fyFHcome8FR4ST1UrwxeApNKMB_BkpCsUZLgpm9h9trhKbB-3qtk6UK1GKmfw6qlWpL3PQN7FAObNruS0r0CGh3Muc9PaGsuu8Xu5on21h9WmI7L0-jatZkS55p4PEerU56XpkwJfa35_hltKNTauu\\",\\n    \\"expire_time\\": 7200,\\n    \\"generate_time\\": 1677055176\\n  },\\n  \\"error_data\\": \\"null\\"\\n}","type":"json"}]',
      'title' => 'GetToken',
    ),
    'Search' => 
    array (
      'summary' => '搜索。',
      'path' => '/airticket/v1/trade/action-search',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'https',
        1 => 'http',
      ),
      'security' => 
      array (
        0 => 
        array (
          'accessTokenAuth' => 
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
          'name' => 'cabin_class',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '不填写默认为 ALL_CABIN。舱等 ALL_CABIN:不限舱等; Y:经济舱; FC:头等舱和商务舱; S:超级经济舱; YS:经济舱和超级经济舱; YSC:经济舱、超级经济舱和商务舱;',
            'description' => '舱等 ALL_CABIN:不限舱等; Y:经济舱; FC:头等舱和商务舱; S:超级经济舱; YS:经济舱和超级经济舱; YSC:经济舱、超级经济舱和商务舱;',
            'type' => 'string',
            'required' => false,
            'example' => 'ALL_CABIN',
          ),
        ),
        1 => 
        array (
          'name' => 'air_legs',
          'in' => 'formData',
          'style' => 'json',
          'schema' => 
          array (
            'title' => '行程数组',
            'description' => '行程数组',
            'type' => 'array',
            'items' => 
            array (
              'description' => '行程',
              'type' => 'object',
              'properties' => 
              array (
                'departure_city' => 
                array (
                  'title' => '出发城市三字码',
                  'description' => '出发城市三字码',
                  'type' => 'string',
                  'required' => true,
                  'example' => 'SHA',
                ),
                'arrival_city' => 
                array (
                  'title' => '到达城市三字码',
                  'description' => '到达城市三字码',
                  'type' => 'string',
                  'required' => true,
                  'example' => 'MFM',
                ),
                'departure_airport_list' => 
                array (
                  'title' => '出发机场三字码',
                  'description' => '出发机场三字码列表',
                  'type' => 'array',
                  'items' => 
                  array (
                    'description' => '出发机场三字码',
                    'type' => 'string',
                    'required' => false,
                    'example' => 'PVG',
                  ),
                  'required' => false,
                  'example' => 'PVG',
                ),
                'arrival_airport_list' => 
                array (
                  'title' => '到达机场三字码',
                  'description' => '到达机场三字码列表',
                  'type' => 'array',
                  'items' => 
                  array (
                    'description' => '到达机场三字码',
                    'type' => 'string',
                    'required' => false,
                    'example' => 'MFM',
                  ),
                  'required' => false,
                  'example' => 'MFM',
                ),
                'departure_date' => 
                array (
                  'title' => '起飞日期 (eg: yyyyMMdd)',
                  'description' => '起飞日期 (eg: yyyyMMdd)',
                  'type' => 'string',
                  'required' => true,
                  'example' => '20230310',
                ),
              ),
              'required' => false,
            ),
            'required' => true,
          ),
        ),
        2 => 
        array (
          'name' => 'adults',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '成人乘客数 1-9',
            'description' => '成人乘客数 1-9',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '2',
          ),
        ),
        3 => 
        array (
          'name' => 'children',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '儿童乘客数 0-9',
            'description' => '儿童乘客数 0-9',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        4 => 
        array (
          'name' => 'infants',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '婴儿乘客数 0-9',
            'description' => '婴儿乘客数 0-9',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        5 => 
        array (
          'name' => 'x-acs-airticket-access-token',
          'in' => 'header',
          'schema' => 
          array (
            'title' => 'access_token',
            'description' => 'access_token',
            'type' => 'string',
            'required' => true,
            'example' => 'eyJhbGciOiJSUzI1NiIsImtpZCI6InN1ZXpfa2V5aWQifQ.eyJqdGkiOiJCQldMaWIzN0VxbC0xMjhhR2N5elJ3IiwiaWF0IjoxNjc3MDY2NTAxLCJleHAiOjE2NzcwNzM3MDEsIm5iZiI6MTY3NzA2NjQ0MX0.AF0DxsZK4Edyg0C6ObRQFUo36R1VYrb5IYmak25TmL1OfR5RkIUc3PpqFuQKNLKXf5fOtVQaKjaexzwodVeWZQDKEG_RPt_Ybb99EnEm6vPKs6e3pWFbKiBq71WleLHhVrdFb4YPowRKjc7bG0jyGUxiQ2iXy0RWDj9tIjfI-KEdzNp5oVnX7j4p3H12DwQrRPmd1nz3BciAQNINvDpzqusuIUw8JXyLFCz838Y0NhwB1_bYZyctxRLSzrGZuI5rrWtItgupqMsOlJ3RNy1QrIbQ2g6nPmzl-atOqcQ4Nw0HeDLR8dhM1OsIcFLbKXBUtwXofflhzAQrkDxhwYiXii',
          ),
        ),
        6 => 
        array (
          'name' => 'x-acs-airticket-language',
          'in' => 'header',
          'schema' => 
          array (
            'title' => '多语言 默认取买家账号配置',
            'description' => '多语言 默认取买家账号配置',
            'type' => 'string',
            'required' => false,
            'example' => 'en_US',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'PopBaseRes<SearchRes, Object>',
            'description' => 'PopBaseRes<SearchRes, Object>',
            'type' => 'object',
            'properties' => 
            array (
              'status' => 
              array (
                'title' => 'http 请求成功，status 值均为 200',
                'description' => 'http 请求成功，status 值均为 200',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'error_code' => 
              array (
                'title' => '业务错误码',
                'description' => '业务错误码',
                'type' => 'string',
                'example' => 'null',
              ),
              'error_msg' => 
              array (
                'title' => '错误信息',
                'description' => '错误信息',
                'type' => 'string',
                'example' => 'null',
              ),
              'success' => 
              array (
                'title' => '是否正确',
                'description' => '是否正确',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'RequestId' => 
              array (
                'title' => '请求 RequestId',
                'description' => '请求 RequestId',
                'type' => 'string',
                'example' => '2236993B-7BE7-5F92-B179-21FF08570165',
              ),
              'data' => 
              array (
                'title' => '正确处理返回数据',
                'description' => '正确处理返回数据',
                'type' => 'object',
                'properties' => 
                array (
                  'solution_list' => 
                  array (
                    'title' => '搜索询价结果',
                    'description' => '搜索询价结果',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => 'solution',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'solution_id' => 
                        array (
                          'title' => 'solution_id',
                          'description' => 'solution_id',
                          'type' => 'string',
                          'example' => 'eJwz8DeySEo0NjQ01TU3TU7TNTFINNO1SE5O0jVKM0hKNjEwTElLNYwz0A32cNT1dfPVNTIwMjYwNjRQ8/A3NLI01Q0Ic0cRBwBVFxJJ',
                        ),
                        'adult_price' => 
                        array (
                          'title' => '成人单价',
                          'description' => '成人单价',
                          'type' => 'number',
                          'format' => 'double',
                          'example' => '600',
                        ),
                        'adult_tax' => 
                        array (
                          'title' => '成人税',
                          'description' => '成人税',
                          'type' => 'number',
                          'format' => 'double',
                          'example' => '11',
                        ),
                        'child_price' => 
                        array (
                          'title' => '儿童单价',
                          'description' => '儿童单价',
                          'type' => 'number',
                          'format' => 'double',
                          'example' => '500',
                        ),
                        'child_tax' => 
                        array (
                          'title' => '儿童税',
                          'description' => '儿童税',
                          'type' => 'number',
                          'format' => 'double',
                          'example' => '10',
                        ),
                        'infant_price' => 
                        array (
                          'title' => '婴儿单价',
                          'description' => '婴儿单价',
                          'type' => 'number',
                          'format' => 'double',
                          'example' => '400',
                        ),
                        'infant_tax' => 
                        array (
                          'title' => '婴儿税',
                          'description' => '婴儿税',
                          'type' => 'number',
                          'format' => 'double',
                          'example' => '9',
                        ),
                        'refund_ticket_coupon_description' => 
                        array (
                          'title' => '退票代金券说明',
                          'description' => '退票代金券说明',
                          'type' => 'string',
                          'example' => 'description',
                        ),
                        'product_type_description' => 
                        array (
                          'title' => '产品类型描述',
                          'description' => '产品类型描述',
                          'type' => 'string',
                          'example' => 'description',
                        ),
                        'journey_list' => 
                        array (
                          'title' => '行程',
                          'description' => '行程',
                          'type' => 'array',
                          'items' => 
                          array (
                            'description' => 'journey',
                            'type' => 'object',
                            'properties' => 
                            array (
                              'transfer_count' => 
                              array (
                                'title' => '中转次数',
                                'description' => '中转次数',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '0',
                              ),
                              'segment_list' => 
                              array (
                                'title' => '航段信息',
                                'description' => '航段信息',
                                'type' => 'array',
                                'items' => 
                                array (
                                  'description' => 'segment',
                                  'type' => 'object',
                                  'properties' => 
                                  array (
                                    'segment_id' => 
                                    array (
                                      'title' => '航段ID 组成格式:航班号+出发机场+达到机场+起飞日期（MMdd）',
                                      'description' => '航段ID 组成格式:航班号+出发机场+达到机场+起飞日期（MMdd）',
                                      'type' => 'string',
                                      'example' => 'HO1295-PVG-MFM-20230310',
                                    ),
                                    'departure_airport' => 
                                    array (
                                      'title' => '航班起飞机场三字码(大写)',
                                      'description' => '航班起飞机场三字码(大写)',
                                      'type' => 'string',
                                      'example' => 'PVG',
                                    ),
                                    'arrival_airport' => 
                                    array (
                                      'title' => '航班到达机场三字码(大写)',
                                      'description' => '航班到达机场三字码(大写)',
                                      'type' => 'string',
                                      'example' => 'MFM',
                                    ),
                                    'departure_city' => 
                                    array (
                                      'title' => '航班起飞城市三字码(大写)',
                                      'description' => '航班起飞城市三字码(大写)',
                                      'type' => 'string',
                                      'example' => 'SHA',
                                    ),
                                    'arrival_city' => 
                                    array (
                                      'title' => '航班到达城市三字码(大写)',
                                      'description' => '航班到达城市三字码(大写)',
                                      'type' => 'string',
                                      'example' => 'MFM',
                                    ),
                                    'marketing_flight_no' => 
                                    array (
                                      'title' => '市场方航班号(如：HO1295)',
                                      'description' => '市场方航班号(如：KA5809)',
                                      'type' => 'string',
                                      'example' => 'HO1295',
                                    ),
                                    'marketing_flight_no_int' => 
                                    array (
                                      'title' => '市场方数字航班号（如：1295）',
                                      'description' => '市场方数字航班号（如：5809）',
                                      'type' => 'integer',
                                      'format' => 'int32',
                                      'example' => '1259',
                                    ),
                                    'marketing_airline' => 
                                    array (
                                      'title' => '市场方航司(如：HO)',
                                      'description' => '市场方航司(如：KA)',
                                      'type' => 'string',
                                      'example' => 'HO',
                                    ),
                                    'operating_flight_no' => 
                                    array (
                                      'title' => '承运方航班号(如：CX601)',
                                      'description' => '承运方航班号(如：CX601)',
                                      'type' => 'string',
                                      'example' => 'HO1295',
                                    ),
                                    'operating_airline' => 
                                    array (
                                      'title' => '承运方航司(如：CX)',
                                      'description' => '承运方航司(如：CX)',
                                      'type' => 'string',
                                      'example' => 'HO',
                                    ),
                                    'departure_time' => 
                                    array (
                                      'title' => '航班起飞日期时间 字符串格式(yyyy-MM-dd HH:mm:ss)',
                                      'description' => '航班起飞日期时间 字符串格式(yyyy-MM-dd HH:mm:ss)',
                                      'type' => 'string',
                                      'example' => '2023-03-10 07:55:00',
                                    ),
                                    'arrival_time' => 
                                    array (
                                      'title' => '航班到达日期时间 字符串格式(yyyy-MM-dd HH:mm:ss)',
                                      'description' => '航班到达日期时间 字符串格式(yyyy-MM-dd HH:mm:ss)',
                                      'type' => 'string',
                                      'example' => '2023-03-10 10:40:00',
                                    ),
                                    'code_share' => 
                                    array (
                                      'title' => '是否为共享航班',
                                      'description' => '是否为共享航班',
                                      'type' => 'boolean',
                                      'example' => 'false',
                                    ),
                                    'departure_terminal' => 
                                    array (
                                      'title' => '航班出发航站楼',
                                      'description' => '航班出发航站楼',
                                      'type' => 'string',
                                      'example' => 'T2',
                                    ),
                                    'arrival_terminal' => 
                                    array (
                                      'title' => '航班到达航站楼',
                                      'description' => '航班到达航站楼',
                                      'type' => 'string',
                                      'example' => 'T1',
                                    ),
                                    'equip_type' => 
                                    array (
                                      'title' => '机型',
                                      'description' => '机型',
                                      'type' => 'string',
                                      'example' => '32Q',
                                    ),
                                    'cabin' => 
                                    array (
                                      'title' => '舱位',
                                      'description' => '舱位',
                                      'type' => 'string',
                                      'example' => 'V',
                                    ),
                                    'cabin_class' => 
                                    array (
                                      'title' => '舱等',
                                      'description' => '舱等',
                                      'type' => 'string',
                                      'example' => 'Y',
                                    ),
                                    'availability' => 
                                    array (
                                      'title' => '剩余座位数',
                                      'description' => '剩余座位数',
                                      'type' => 'string',
                                      'example' => '7',
                                    ),
                                    'stop_city_list' => 
                                    array (
                                      'title' => '经停城市列表，stopQuantity > 0 时有值，多个用逗号分割',
                                      'description' => '经停城市列表，stopQuantity > 0 时有值，多个用逗号分割',
                                      'type' => 'string',
                                      'example' => 'MFM,PVG',
                                    ),
                                    'stop_quantity' => 
                                    array (
                                      'title' => '经停城市数目',
                                      'description' => '经停城市数目',
                                      'type' => 'integer',
                                      'format' => 'int32',
                                      'example' => '0',
                                    ),
                                    'flight_duration' => 
                                    array (
                                      'title' => '飞行时间 单位：分钟',
                                      'description' => '飞行时间 单位：分钟',
                                      'type' => 'integer',
                                      'format' => 'int32',
                                      'example' => '165',
                                    ),
                                  ),
                                ),
                              ),
                            ),
                          ),
                        ),
                        'segment_baggage_mapping_list' => 
                        array (
                          'title' => '免费行李规则',
                          'description' => '免费行李规则',
                          'type' => 'array',
                          'items' => 
                          array (
                            'description' => '元素',
                            'type' => 'object',
                            'properties' => 
                            array (
                              'segment_id_list' => 
                              array (
                                'title' => '航段ID列表 这些航段ID使用同一个免费行李规则',
                                'description' => '航段ID列表 这些航段ID使用同一个免费行李规则',
                                'type' => 'array',
                                'items' => 
                                array (
                                  'description' => 'segment_id',
                                  'type' => 'string',
                                  'example' => 'HO1295-PVG-MFM-20230310',
                                ),
                              ),
                              'passenger_baggage_allowance_mapping' => 
                              array (
                                'title' => '乘客类型-免费行李额映射关系 key 取值描述 ADT:普通成人; CHD:儿童; INF:婴儿',
                                'description' => '乘客类型-免费行李额映射关系',
                                'type' => 'object',
                                'additionalProperties' => 
                                array (
                                  'type' => 'object',
                                  'properties' => 
                                  array (
                                    'baggage_amount' => 
                                    array (
                                      'title' => '托运行李件数',
                                      'description' => '托运行李件数',
                                      'type' => 'integer',
                                      'format' => 'int32',
                                      'example' => '1',
                                    ),
                                    'baggage_weight' => 
                                    array (
                                      'title' => '托运行李重量',
                                      'description' => '托运行李重量',
                                      'type' => 'integer',
                                      'format' => 'int32',
                                      'example' => '1',
                                    ),
                                    'baggage_weight_unit' => 
                                    array (
                                      'title' => '托运行李重量单位',
                                      'description' => '托运行李重量单位',
                                      'type' => 'string',
                                      'example' => 'kg',
                                    ),
                                    'is_all_weight' => 
                                    array (
                                      'title' => '是否所有托运行李重量',
                                      'description' => '是否所有托运行李重量',
                                      'type' => 'boolean',
                                      'example' => 'kg',
                                    ),
                                    'carry_on_amount' => 
                                    array (
                                      'title' => '手提行李件数',
                                      'description' => '手提行李件数',
                                      'type' => 'integer',
                                      'format' => 'int32',
                                      'example' => '1',
                                    ),
                                    'carry_on_weight' => 
                                    array (
                                      'title' => '手提行李重量',
                                      'description' => '手提行李重量',
                                      'type' => 'integer',
                                      'format' => 'int32',
                                      'example' => '1',
                                    ),
                                    'carry_on_weight_unit' => 
                                    array (
                                      'title' => '手提行李重量单位',
                                      'description' => '手提行李重量单位',
                                      'type' => 'string',
                                      'example' => 'kg',
                                    ),
                                    'is_all_carry_on_weight' => 
                                    array (
                                      'title' => '是否所有手提行李重量',
                                      'description' => '是否所有手提行李重量',
                                      'type' => 'boolean',
                                      'example' => 'true',
                                    ),
                                  ),
                                  'description' => '免费行李额',
                                ),
                              ),
                            ),
                          ),
                        ),
                        'segment_refund_change_rule_mapping_list' => 
                        array (
                          'title' => '退改签规则',
                          'description' => '退改签规则',
                          'type' => 'array',
                          'items' => 
                          array (
                            'description' => '元素',
                            'type' => 'object',
                            'properties' => 
                            array (
                              'segment_id_list' => 
                              array (
                                'title' => '航段ID列表 这些航段ID使用同一个退改签规则',
                                'description' => '航段ID列表 这些航段ID使用同一个退改签规则',
                                'type' => 'array',
                                'items' => 
                                array (
                                  'description' => 'segment_id',
                                  'type' => 'string',
                                  'example' => 'HO1295-PVG-MFM-20230310',
                                ),
                              ),
                              'refund_change_rule_map' => 
                              array (
                                'title' => '乘机人类型-退改签规则映射关系 key 取值描述 ADT:普通成人; CHD:儿童; INF:婴儿',
                                'description' => '乘机人类型-退改签规则映射关系',
                                'type' => 'object',
                                'additionalProperties' => 
                                array (
                                  'type' => 'object',
                                  'properties' => 
                                  array (
                                    'refund_rule_all_unused_list' => 
                                    array (
                                      'title' => '全程未使用退票规则',
                                      'description' => '全程未使用退票规则',
                                      'type' => 'array',
                                      'items' => 
                                      array (
                                        'type' => 'object',
                                        'properties' => 
                                        array (
                                          'type' => 
                                          array (
                                            'title' => '该退票规则适用航程使用类型 0:全程未使用; 1:部分未使用',
                                            'description' => '该退票规则适用航程使用类型 0:全程未使用; 1:部分未使用',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '0',
                                          ),
                                          'time_unit' => 
                                          array (
                                            'title' => '时间单位：day/hour',
                                            'description' => '时间单位：day/hour',
                                            'type' => 'string',
                                            'example' => 'hour',
                                          ),
                                          'rule_start_time' => 
                                          array (
                                            'title' => '该退票规则适用于的退票时间区间开始时间，单位（天/小时）',
                                            'description' => '该退票规则适用于的退票时间区间开始时间，单位（天/小时）',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '36',
                                          ),
                                          'rule_end_time' => 
                                          array (
                                            'title' => '该退票规则适用于的退票时间区间结束时间，单位（天/小时）',
                                            'description' => '该退票规则适用于的退票时间区间结束时间，单位（天/小时）',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '12',
                                          ),
                                          'can_refund' => 
                                          array (
                                            'title' => '起飞前X-Y小时(天) 可否退票',
                                            'description' => '起飞前X-Y小时(天) 可否退票',
                                            'type' => 'boolean',
                                            'example' => 'true',
                                          ),
                                          'refund_fee' => 
                                          array (
                                            'title' => '起飞前X-Y小时(天) 退票手续费',
                                            'description' => '起飞前X-Y小时(天) 退票手续费',
                                            'type' => 'number',
                                            'format' => 'double',
                                            'example' => '100',
                                          ),
                                          'can_return_all_tax' => 
                                          array (
                                            'title' => '起飞前X-Y小时(天) 是否全额退税',
                                            'description' => '起飞前X-Y小时(天) 是否全额退税',
                                            'type' => 'boolean',
                                            'example' => 'true',
                                          ),
                                          'return_part_tax_fee' => 
                                          array (
                                            'title' => '起飞前X-Y小时(天) 可部分退税金额',
                                            'description' => '起飞前X-Y小时(天) 可部分退税金额',
                                            'type' => 'number',
                                            'format' => 'double',
                                            'example' => '100',
                                          ),
                                        ),
                                        'description' => '元素',
                                      ),
                                    ),
                                    'refund_rule_part_unused_list' => 
                                    array (
                                      'title' => '部分未使用退票规则',
                                      'description' => '部分未使用退票规则',
                                      'type' => 'array',
                                      'items' => 
                                      array (
                                        'type' => 'object',
                                        'properties' => 
                                        array (
                                          'type' => 
                                          array (
                                            'title' => '该退票规则适用航程使用类型 0:全程未使用; 1:部分未使用',
                                            'description' => '该退票规则适用航程使用类型 0:全程未使用; 1:部分未使用',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '0',
                                          ),
                                          'time_unit' => 
                                          array (
                                            'title' => '时间单位：day/hour',
                                            'description' => '时间单位：day/hour',
                                            'type' => 'string',
                                            'example' => 'hour',
                                          ),
                                          'rule_start_time' => 
                                          array (
                                            'title' => '该退票规则适用于的退票时间区间开始时间，单位（天/小时）',
                                            'description' => '该退票规则适用于的退票时间区间开始时间，单位（天/小时）',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '36',
                                          ),
                                          'rule_end_time' => 
                                          array (
                                            'title' => '该退票规则适用于的退票时间区间结束时间，单位（天/小时）',
                                            'description' => '该退票规则适用于的退票时间区间结束时间，单位（天/小时）',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '12',
                                          ),
                                          'can_refund' => 
                                          array (
                                            'title' => '起飞前X-Y小时(天) 可否退票',
                                            'description' => '起飞前X-Y小时(天) 可否退票',
                                            'type' => 'boolean',
                                            'example' => 'true',
                                          ),
                                          'refund_fee' => 
                                          array (
                                            'title' => '起飞前X-Y小时(天) 退票手续费',
                                            'description' => '起飞前X-Y小时(天) 退票手续费',
                                            'type' => 'number',
                                            'format' => 'double',
                                            'example' => '200',
                                          ),
                                          'can_return_all_tax' => 
                                          array (
                                            'title' => '起飞前X-Y小时(天) 是否全额退税',
                                            'description' => '起飞前X-Y小时(天) 是否全额退税',
                                            'type' => 'boolean',
                                            'example' => 'true',
                                          ),
                                          'return_part_tax_fee' => 
                                          array (
                                            'title' => '起飞前X-Y小时(天) 可部分退税金额',
                                            'description' => '起飞前X-Y小时(天) 可部分退税金额',
                                            'type' => 'number',
                                            'format' => 'double',
                                            'example' => '20',
                                          ),
                                        ),
                                        'description' => '元素',
                                      ),
                                    ),
                                    'change_rule_in_unused_list' => 
                                    array (
                                      'title' => '回程未使用改签规则',
                                      'description' => '回程未使用改签规则',
                                      'type' => 'array',
                                      'items' => 
                                      array (
                                        'type' => 'object',
                                        'properties' => 
                                        array (
                                          'type' => 
                                          array (
                                            'title' => '该改签规则适用航程使用类型 2:去程未使用; 3:回程未使用',
                                            'description' => '该改签规则适用航程使用类型 2:去程未使用; 3:回程未使用',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '2',
                                          ),
                                          'time_unit' => 
                                          array (
                                            'title' => '时间单位：day/hour',
                                            'description' => '时间单位：day/hour',
                                            'type' => 'string',
                                            'example' => 'hour',
                                          ),
                                          'rule_start_time' => 
                                          array (
                                            'title' => '该退票规则适用于的退票时间区间开始时间，单位（天/小时）',
                                            'description' => '该退票规则适用于的退票时间区间开始时间，单位（天/小时）',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '36',
                                          ),
                                          'rule_end_time' => 
                                          array (
                                            'title' => '该退票规则适用于的退票时间区间结束时间，单位（天/小时）',
                                            'description' => '该退票规则适用于的退票时间区间结束时间，单位（天/小时）',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '12',
                                          ),
                                          'can_change' => 
                                          array (
                                            'title' => '起飞前X-Y小时(天) 可否可以改签',
                                            'description' => '起飞前X-Y小时(天) 可否可以改签',
                                            'type' => 'boolean',
                                            'example' => 'true',
                                          ),
                                          'change_fee' => 
                                          array (
                                            'title' => '起飞前X-Y小时(天) 改签费',
                                            'description' => '起飞前X-Y小时(天) 改签费',
                                            'type' => 'number',
                                            'format' => 'double',
                                            'example' => '200',
                                          ),
                                        ),
                                        'description' => '元素',
                                      ),
                                    ),
                                    'change_rule_out_unused_list' => 
                                    array (
                                      'title' => '去程未使用改签规则',
                                      'description' => '去程未使用改签规则',
                                      'type' => 'array',
                                      'items' => 
                                      array (
                                        'type' => 'object',
                                        'properties' => 
                                        array (
                                          'type' => 
                                          array (
                                            'title' => '该改签规则适用航程使用类型 2:去程未使用; 3:回程未使用',
                                            'description' => '该改签规则适用航程使用类型 2:去程未使用; 3:回程未使用',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '2',
                                          ),
                                          'time_unit' => 
                                          array (
                                            'title' => '时间单位：day/hour',
                                            'description' => '时间单位：day/hour',
                                            'type' => 'string',
                                            'example' => 'hour',
                                          ),
                                          'rule_start_time' => 
                                          array (
                                            'title' => '该退票规则适用于的退票时间区间开始时间，单位（天/小时）',
                                            'description' => '该退票规则适用于的退票时间区间开始时间，单位（天/小时）',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '36',
                                          ),
                                          'rule_end_time' => 
                                          array (
                                            'title' => '该退票规则适用于的退票时间区间结束时间，单位（天/小时）',
                                            'description' => '该退票规则适用于的退票时间区间结束时间，单位（天/小时）',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '12',
                                          ),
                                          'can_change' => 
                                          array (
                                            'title' => '起飞前X-Y小时(天) 可否可以改签',
                                            'description' => '起飞前X-Y小时(天) 可否可以改签',
                                            'type' => 'boolean',
                                            'example' => 'true',
                                          ),
                                          'change_fee' => 
                                          array (
                                            'title' => '起飞前X-Y小时(天) 改签费',
                                            'description' => '起飞前X-Y小时(天) 改签费',
                                            'type' => 'number',
                                            'format' => 'double',
                                            'example' => '200',
                                          ),
                                        ),
                                        'description' => '元素',
                                      ),
                                    ),
                                  ),
                                  'description' => '元素',
                                ),
                              ),
                            ),
                          ),
                        ),
                        'segment_baggage_check_in_info_list' => 
                        array (
                          'title' => '行李直挂规则',
                          'description' => '行李直挂规则',
                          'type' => 'array',
                          'items' => 
                          array (
                            'description' => '元素',
                            'type' => 'object',
                            'properties' => 
                            array (
                              'segment_id_list' => 
                              array (
                                'title' => '航段ID列表 这些航段ID使用同一个行李直挂规则',
                                'description' => '航段ID列表 这些航段ID使用同一个行李直挂规则',
                                'type' => 'array',
                                'items' => 
                                array (
                                  'description' => 'segment_id',
                                  'type' => 'string',
                                  'example' => 'HO1295-PVG-MFM-20230310
',
                                ),
                              ),
                              'luggage_direct_info_type' => 
                              array (
                                'title' => '行李直挂规则类型 1:航段之间行李直达; 2:航段之间行李重新托运; 3:经停城市行李直达; 4:经停城市行李重新托运',
                                'description' => '行李直挂规则类型 1:航段之间行李直达; 2:航段之间行李重新托运; 3:经停城市行李直达; 4:经停城市行李重新托运',
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
                ),
              ),
              'error_data' => 
              array (
                'title' => '错误处理携带数据',
                'description' => '错误处理携带数据',
                'type' => 'any',
                'example' => 'null',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"status\\": 200,\\n  \\"error_code\\": \\"null\\",\\n  \\"error_msg\\": \\"null\\",\\n  \\"success\\": true,\\n  \\"RequestId\\": \\"2236993B-7BE7-5F92-B179-21FF08570165\\",\\n  \\"data\\": {\\n    \\"solution_list\\": [\\n      {\\n        \\"solution_id\\": \\"eJwz8DeySEo0NjQ01TU3TU7TNTFINNO1SE5O0jVKM0hKNjEwTElLNYwz0A32cNT1dfPVNTIwMjYwNjRQ8/A3NLI01Q0Ic0cRBwBVFxJJ\\",\\n        \\"adult_price\\": 600,\\n        \\"adult_tax\\": 11,\\n        \\"child_price\\": 500,\\n        \\"child_tax\\": 10,\\n        \\"infant_price\\": 400,\\n        \\"infant_tax\\": 9,\\n        \\"refund_ticket_coupon_description\\": \\"description\\",\\n        \\"product_type_description\\": \\"description\\",\\n        \\"journey_list\\": [\\n          {\\n            \\"transfer_count\\": 0,\\n            \\"segment_list\\": [\\n              {\\n                \\"segment_id\\": \\"HO1295-PVG-MFM-20230310\\",\\n                \\"departure_airport\\": \\"PVG\\",\\n                \\"arrival_airport\\": \\"MFM\\",\\n                \\"departure_city\\": \\"SHA\\",\\n                \\"arrival_city\\": \\"MFM\\",\\n                \\"marketing_flight_no\\": \\"HO1295\\",\\n                \\"marketing_flight_no_int\\": 1259,\\n                \\"marketing_airline\\": \\"HO\\",\\n                \\"operating_flight_no\\": \\"HO1295\\",\\n                \\"operating_airline\\": \\"HO\\",\\n                \\"departure_time\\": \\"2023-03-10 07:55:00\\",\\n                \\"arrival_time\\": \\"2023-03-10 10:40:00\\",\\n                \\"code_share\\": false,\\n                \\"departure_terminal\\": \\"T2\\",\\n                \\"arrival_terminal\\": \\"T1\\",\\n                \\"equip_type\\": \\"32Q\\",\\n                \\"cabin\\": \\"V\\",\\n                \\"cabin_class\\": \\"Y\\",\\n                \\"availability\\": \\"7\\",\\n                \\"stop_city_list\\": \\"MFM,PVG\\",\\n                \\"stop_quantity\\": 0,\\n                \\"flight_duration\\": 165\\n              }\\n            ]\\n          }\\n        ],\\n        \\"segment_baggage_mapping_list\\": [\\n          {\\n            \\"segment_id_list\\": [\\n              \\"HO1295-PVG-MFM-20230310\\"\\n            ],\\n            \\"passenger_baggage_allowance_mapping\\": {\\n              \\"key\\": {\\n                \\"baggage_amount\\": 1,\\n                \\"baggage_weight\\": 1,\\n                \\"baggage_weight_unit\\": \\"kg\\",\\n                \\"is_all_weight\\": true,\\n                \\"carry_on_amount\\": 1,\\n                \\"carry_on_weight\\": 1,\\n                \\"carry_on_weight_unit\\": \\"kg\\",\\n                \\"is_all_carry_on_weight\\": true\\n              }\\n            }\\n          }\\n        ],\\n        \\"segment_refund_change_rule_mapping_list\\": [\\n          {\\n            \\"segment_id_list\\": [\\n              \\"HO1295-PVG-MFM-20230310\\"\\n            ],\\n            \\"refund_change_rule_map\\": {\\n              \\"key\\": {\\n                \\"refund_rule_all_unused_list\\": [\\n                  {\\n                    \\"type\\": 0,\\n                    \\"time_unit\\": \\"hour\\",\\n                    \\"rule_start_time\\": 36,\\n                    \\"rule_end_time\\": 12,\\n                    \\"can_refund\\": true,\\n                    \\"refund_fee\\": 100,\\n                    \\"can_return_all_tax\\": true,\\n                    \\"return_part_tax_fee\\": 100\\n                  }\\n                ],\\n                \\"refund_rule_part_unused_list\\": [\\n                  {\\n                    \\"type\\": 0,\\n                    \\"time_unit\\": \\"hour\\",\\n                    \\"rule_start_time\\": 36,\\n                    \\"rule_end_time\\": 12,\\n                    \\"can_refund\\": true,\\n                    \\"refund_fee\\": 200,\\n                    \\"can_return_all_tax\\": true,\\n                    \\"return_part_tax_fee\\": 20\\n                  }\\n                ],\\n                \\"change_rule_in_unused_list\\": [\\n                  {\\n                    \\"type\\": 2,\\n                    \\"time_unit\\": \\"hour\\",\\n                    \\"rule_start_time\\": 36,\\n                    \\"rule_end_time\\": 12,\\n                    \\"can_change\\": true,\\n                    \\"change_fee\\": 200\\n                  }\\n                ],\\n                \\"change_rule_out_unused_list\\": [\\n                  {\\n                    \\"type\\": 2,\\n                    \\"time_unit\\": \\"hour\\",\\n                    \\"rule_start_time\\": 36,\\n                    \\"rule_end_time\\": 12,\\n                    \\"can_change\\": true,\\n                    \\"change_fee\\": 200\\n                  }\\n                ]\\n              }\\n            }\\n          }\\n        ],\\n        \\"segment_baggage_check_in_info_list\\": [\\n          {\\n            \\"segment_id_list\\": [\\n              \\"HO1295-PVG-MFM-20230310\\\\n\\"\\n            ],\\n            \\"luggage_direct_info_type\\": 1\\n          }\\n        ]\\n      }\\n    ]\\n  },\\n  \\"error_data\\": \\"null\\"\\n}","type":"json"}]',
      'title' => 'Search',
    ),
    'Enrich' => 
    array (
      'summary' => '查到该行程更丰富的报价信息，还有免费行李、退改签、行李直挂规则。',
      'path' => '/airticket/v1/trade/action-enrich',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'https',
        1 => 'http',
      ),
      'security' => 
      array (
        0 => 
        array (
          'accessTokenAuth' => 
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
          'name' => 'solution_id',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => 'Search 返回的solution_id',
            'description' => 'Search 返回的solution_id',
            'type' => 'string',
            'required' => false,
            'example' => 'eJwz8DeySEo0NjQ01TU3TU7TNTFINNO1SE5O0jVKM0hKNjEwTElLNYwz0A32cNT1dfPVNTIwMjYwNjRQ8/A3NLI01Q0Ic0cRBwBVFxJJ',
          ),
        ),
        1 => 
        array (
          'name' => 'adults',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '成人乘客数 1-9',
            'description' => '成人乘客数 1-9',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        2 => 
        array (
          'name' => 'children',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '儿童乘客数 0-9',
            'description' => '儿童乘客数 0-9',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        3 => 
        array (
          'name' => 'infants',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '婴儿乘客数 0-9',
            'description' => '婴儿乘客数 0-9',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        4 => 
        array (
          'name' => 'cabin_class',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '不填写默认为 ALL_CABIN。舱等 ALL_CABIN:不限舱等; Y:经济舱; FC:头等舱和商务舱; S:超级经济舱; YS:经济舱和超级经济舱; YSC:经济舱、超级经济舱和商务舱;',
            'description' => '舱等 ALL_CABIN:不限舱等; Y:经济舱; FC:头等舱和商务舱; S:超级经济舱; YS:经济舱和超级经济舱; YSC:经济舱、超级经济舱和商务舱;',
            'type' => 'string',
            'required' => false,
            'example' => 'ALL_CABIN',
          ),
        ),
        5 => 
        array (
          'name' => 'journey_param_list',
          'in' => 'formData',
          'style' => 'json',
          'schema' => 
          array (
            'title' => '行程信息',
            'description' => '行程信息',
            'type' => 'array',
            'items' => 
            array (
              'description' => 'journey_param',
              'type' => 'object',
              'properties' => 
              array (
                'departure_city' => 
                array (
                  'title' => '起飞城市三字码(大写)',
                  'description' => '起飞城市三字码(大写)',
                  'type' => 'string',
                  'required' => true,
                  'example' => 'SHA',
                ),
                'arrival_city' => 
                array (
                  'title' => '到达城市三字码(大写)',
                  'description' => '到达城市三字码(大写)',
                  'type' => 'string',
                  'required' => true,
                  'example' => 'MFM',
                ),
                'departure_date' => 
                array (
                  'title' => '起飞日期(yyyyMMdd)',
                  'description' => '起飞日期(yyyyMMdd)',
                  'type' => 'string',
                  'required' => true,
                  'example' => '20230310',
                ),
                'segment_param_list' => 
                array (
                  'title' => '该程指定航段信息',
                  'description' => '该程指定航段信息',
                  'type' => 'array',
                  'items' => 
                  array (
                    'description' => '元素',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'departure_city' => 
                      array (
                        'title' => '航班起飞城市三字码(大写)',
                        'description' => '航班起飞城市三字码(大写)',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'SHA',
                      ),
                      'arrival_city' => 
                      array (
                        'title' => '航班到达城市三字码(大写)',
                        'description' => '航班到达城市三字码(大写)',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'MFM',
                      ),
                      'departure_airport' => 
                      array (
                        'title' => '航班起飞机场三字码(大写)',
                        'description' => '航班起飞机场三字码(大写)',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'PVG',
                      ),
                      'arrival_airport' => 
                      array (
                        'title' => '航班到达机场三字码(大写)',
                        'description' => '航班到达机场三字码(大写)',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'MFM',
                      ),
                      'departure_time' => 
                      array (
                        'title' => '字符串，航班起飞日期时间(yyyy-MM-dd HH:mm:ss)',
                        'description' => '字符串，航班起飞日期时间(yyyy-MM-dd HH:mm:ss)',
                        'type' => 'string',
                        'required' => true,
                        'example' => '2023-03-10 07:55:00
',
                      ),
                      'marketing_flight_no' => 
                      array (
                        'title' => '市场方航班号(如：KA5809)',
                        'description' => '市场方航班号(如：KA5809)',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'HO1295',
                      ),
                      'cabin' => 
                      array (
                        'title' => '舱位',
                        'description' => '舱位',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'V',
                      ),
                      'child_cabin' => 
                      array (
                        'title' => '儿童舱位',
                        'description' => '儿童舱位',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'E',
                      ),
                    ),
                    'required' => false,
                  ),
                  'required' => true,
                ),
              ),
              'required' => false,
            ),
            'required' => false,
          ),
        ),
        6 => 
        array (
          'name' => 'x-acs-airticket-access-token',
          'in' => 'header',
          'schema' => 
          array (
            'title' => 'access_token',
            'description' => 'access_token',
            'type' => 'string',
            'required' => true,
            'example' => 'eyJhbGciOiJSUzI1NiIsImtpZCI6InN1ZXpfa2V5aWQifQ.eyJqdGkiOiJCQldMaWIzN0VxbC0xMjhhR2N5elJ3IiwiaWF0IjoxNjc3MDY2NTAxLCJleHAiOjE2NzcwNzM3MDEsIm5iZiI6MTY3NzA2NjQ0MX0.AF0DxsZK4Edyg0C6ObRQFUo36R1VYrb5IYmak25TmL1OfR5RkIUc3PpqFuQKNLKXf5fOtVQaKjaexzwodVeWZQDKEG_RPt_Ybb99EnEm6vPKs6e3pWFbKiBq71WleLHhVrdFb4YPowRKjc7bG0jyGUxiQ2iXy0RWDj9tIjfI-KEdzNp5oVnX7j4p3H12DwQrRPmd1nz3BciAQNINvDpzqusuIUw8JXyLFCz838Y0NhwB1_bYZyctxRLSzrGZuI5rrWtItgupqMsOlJ3RNy1QrIbQ2g6nPmzl-atOqcQ4Nw0HeDLR8dhM1OsIcFLbKXBUtwXofflhzAQrkDxhwYiXii',
          ),
        ),
        7 => 
        array (
          'name' => 'x-acs-airticket-language',
          'in' => 'header',
          'schema' => 
          array (
            'title' => '多语言 默认取买家账号配置',
            'description' => '多语言 默认取买家账号配置',
            'type' => 'string',
            'required' => false,
            'example' => 'en_US
',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'PopBaseRes<EnrichRes, Object>',
            'description' => 'PopBaseRes<EnrichRes, Object>',
            'type' => 'object',
            'properties' => 
            array (
              'status' => 
              array (
                'title' => 'http 请求成功，status 值均为 200',
                'description' => 'http 请求成功，status 值均为 200',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'error_code' => 
              array (
                'title' => '业务错误码',
                'description' => '业务错误码',
                'type' => 'string',
                'example' => 'null',
              ),
              'error_msg' => 
              array (
                'title' => '错误信息',
                'description' => '错误信息',
                'type' => 'string',
                'example' => 'null',
              ),
              'success' => 
              array (
                'title' => '是否正确',
                'description' => '是否正确',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'RequestId' => 
              array (
                'title' => '请求 RequestId',
                'description' => '请求 RequestId',
                'type' => 'string',
                'example' => '51593418-8C73-5E47-8BA8-3F1D4A00CC0B',
              ),
              'data' => 
              array (
                'title' => '正确处理返回数据',
                'description' => '正确处理返回数据',
                'type' => 'object',
                'properties' => 
                array (
                  'solution_list' => 
                  array (
                    'title' => '搜索询价结果',
                    'description' => '搜索询价结果',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => 'solution',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'solution_id' => 
                        array (
                          'title' => 'solution_id',
                          'description' => 'solution_id',
                          'type' => 'string',
                          'example' => 'eJwz8DeySEo0NjQ01TU3TU7TNTFINNO1SE5O0jVKM0hKNjEwTElLNYwz0A32cNT1dfPVNTIwMjYwNjRQ8/A3NLI01Q0Ic0cRBwBVFxJJ',
                        ),
                        'adult_price' => 
                        array (
                          'title' => '成人单价',
                          'description' => '成人单价',
                          'type' => 'number',
                          'format' => 'double',
                          'example' => '500',
                        ),
                        'adult_tax' => 
                        array (
                          'title' => '成人税',
                          'description' => '成人税',
                          'type' => 'number',
                          'format' => 'double',
                          'example' => '100',
                        ),
                        'child_price' => 
                        array (
                          'title' => '儿童单价',
                          'description' => '儿童单价',
                          'type' => 'number',
                          'format' => 'double',
                          'example' => '100',
                        ),
                        'child_tax' => 
                        array (
                          'title' => '儿童税',
                          'description' => '儿童税',
                          'type' => 'number',
                          'format' => 'double',
                          'example' => '100',
                        ),
                        'infant_price' => 
                        array (
                          'title' => '婴儿单价',
                          'description' => '婴儿单价',
                          'type' => 'number',
                          'format' => 'double',
                          'example' => '500',
                        ),
                        'infant_tax' => 
                        array (
                          'title' => '婴儿税',
                          'description' => '婴儿税',
                          'type' => 'number',
                          'format' => 'double',
                          'example' => '100',
                        ),
                        'refund_ticket_coupon_description' => 
                        array (
                          'title' => '退票代金券说明',
                          'description' => '退票代金券说明',
                          'type' => 'string',
                          'example' => '""',
                        ),
                        'product_type_description' => 
                        array (
                          'title' => '产品类型描述',
                          'description' => '产品类型描述',
                          'type' => 'string',
                          'example' => '""',
                        ),
                        'journey_list' => 
                        array (
                          'title' => '行程',
                          'description' => '行程',
                          'type' => 'array',
                          'items' => 
                          array (
                            'description' => 'journey',
                            'type' => 'object',
                            'properties' => 
                            array (
                              'transfer_count' => 
                              array (
                                'title' => '中转次数',
                                'description' => '中转次数',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '0',
                              ),
                              'segment_list' => 
                              array (
                                'title' => '航段信息',
                                'description' => '航段信息',
                                'type' => 'array',
                                'items' => 
                                array (
                                  'description' => 'segment',
                                  'type' => 'object',
                                  'properties' => 
                                  array (
                                    'segment_id' => 
                                    array (
                                      'title' => '航段ID 组成格式:航班号+出发机场+达到机场+起飞日期（MMdd）',
                                      'description' => '航段ID 组成格式:航班号+出发机场+达到机场+起飞日期（MMdd）',
                                      'type' => 'string',
                                      'example' => 'HO1295-PVG-MFM-20230310',
                                    ),
                                    'departure_airport' => 
                                    array (
                                      'title' => '航班起飞机场三字码(大写)',
                                      'description' => '航班起飞机场三字码(大写)',
                                      'type' => 'string',
                                      'example' => 'PVG',
                                    ),
                                    'arrival_airport' => 
                                    array (
                                      'title' => '航班到达机场三字码(大写)',
                                      'description' => '航班到达机场三字码(大写)',
                                      'type' => 'string',
                                      'example' => 'MFM',
                                    ),
                                    'departure_city' => 
                                    array (
                                      'title' => '航班起飞城市三字码(大写)',
                                      'description' => '航班起飞城市三字码(大写)',
                                      'type' => 'string',
                                      'example' => 'SHA',
                                    ),
                                    'arrival_city' => 
                                    array (
                                      'title' => '航班到达城市三字码(大写)',
                                      'description' => '航班到达城市三字码(大写)',
                                      'type' => 'string',
                                      'example' => 'MFM',
                                    ),
                                    'marketing_flight_no' => 
                                    array (
                                      'title' => '市场方航班号(如：HO1295)',
                                      'description' => '市场方航班号(如：KA5809)',
                                      'type' => 'string',
                                      'example' => 'HO1295',
                                    ),
                                    'marketing_flight_no_int' => 
                                    array (
                                      'title' => '市场方数字航班号（如：1295）',
                                      'description' => '市场方数字航班号（如：5809）',
                                      'type' => 'integer',
                                      'format' => 'int32',
                                      'example' => '1295',
                                    ),
                                    'marketing_airline' => 
                                    array (
                                      'title' => '市场方航司(如：HO)',
                                      'description' => '市场方航司(如：KA)',
                                      'type' => 'string',
                                      'example' => 'HO',
                                    ),
                                    'operating_flight_no' => 
                                    array (
                                      'title' => '承运方航班号(如：CX601)',
                                      'description' => '承运方航班号(如：CX601)',
                                      'type' => 'string',
                                      'example' => 'HO1295',
                                    ),
                                    'operating_airline' => 
                                    array (
                                      'title' => '承运方航司(如：CX)',
                                      'description' => '承运方航司(如：CX)',
                                      'type' => 'string',
                                      'example' => 'HO',
                                    ),
                                    'departure_time' => 
                                    array (
                                      'title' => '航班起飞日期时间 字符串格式(yyyy-MM-dd HH:mm:ss)',
                                      'description' => '航班起飞日期时间 字符串格式(yyyy-MM-dd HH:mm:ss)',
                                      'type' => 'string',
                                      'example' => '2023-03-10 07:55:00',
                                    ),
                                    'arrival_time' => 
                                    array (
                                      'title' => '航班到达日期时间 字符串格式(yyyy-MM-dd HH:mm:ss)',
                                      'description' => '航班到达日期时间 字符串格式(yyyy-MM-dd HH:mm:ss)',
                                      'type' => 'string',
                                      'example' => '2023-03-10 10:40:00',
                                    ),
                                    'code_share' => 
                                    array (
                                      'title' => '是否为共享航班',
                                      'description' => '是否为共享航班',
                                      'type' => 'boolean',
                                      'example' => 'false',
                                    ),
                                    'departure_terminal' => 
                                    array (
                                      'title' => '航班出发航站楼',
                                      'description' => '航班出发航站楼',
                                      'type' => 'string',
                                      'example' => 'T2',
                                    ),
                                    'arrival_terminal' => 
                                    array (
                                      'title' => '航班到达航站楼',
                                      'description' => '航班到达航站楼',
                                      'type' => 'string',
                                      'example' => 'null',
                                    ),
                                    'equip_type' => 
                                    array (
                                      'title' => '机型',
                                      'description' => '机型',
                                      'type' => 'string',
                                      'example' => '32Q',
                                    ),
                                    'cabin' => 
                                    array (
                                      'title' => '舱位',
                                      'description' => '舱位',
                                      'type' => 'string',
                                      'example' => 'V',
                                    ),
                                    'cabin_class' => 
                                    array (
                                      'title' => '舱等',
                                      'description' => '舱等',
                                      'type' => 'string',
                                      'example' => 'Y',
                                    ),
                                    'availability' => 
                                    array (
                                      'title' => '剩余座位数',
                                      'description' => '剩余座位数',
                                      'type' => 'string',
                                      'example' => '7',
                                    ),
                                    'stop_city_list' => 
                                    array (
                                      'title' => '经停城市列表，stopQuantity > 0 时有值，多个用逗号分割',
                                      'description' => '经停城市列表，stopQuantity > 0 时有值，多个用逗号分割',
                                      'type' => 'string',
                                      'example' => '""',
                                    ),
                                    'stop_quantity' => 
                                    array (
                                      'title' => '经停城市数目',
                                      'description' => '经停城市数目',
                                      'type' => 'integer',
                                      'format' => 'int32',
                                      'example' => '0',
                                    ),
                                    'flight_duration' => 
                                    array (
                                      'title' => '飞行时间 单位：分钟',
                                      'description' => '飞行时间 单位：分钟',
                                      'type' => 'integer',
                                      'format' => 'int32',
                                      'example' => '165',
                                    ),
                                  ),
                                ),
                              ),
                            ),
                          ),
                        ),
                        'segment_baggage_mapping_list' => 
                        array (
                          'title' => '免费行李规则',
                          'description' => '免费行李规则',
                          'type' => 'array',
                          'items' => 
                          array (
                            'description' => 'segment\\_baggage\\_mapping',
                            'type' => 'object',
                            'properties' => 
                            array (
                              'segment_id_list' => 
                              array (
                                'title' => '航段ID列表 这些航段ID使用同一个免费行李规则',
                                'description' => '航段ID列表 这些航段ID使用同一个免费行李规则',
                                'type' => 'array',
                                'items' => 
                                array (
                                  'description' => 'segment_id',
                                  'type' => 'string',
                                  'example' => 'HO1295-PVG-MFM-20230310',
                                ),
                              ),
                              'passenger_baggage_allowance_mapping' => 
                              array (
                                'title' => '乘客类型-免费行李额映射关系',
                                'description' => '乘客类型-免费行李额映射关系',
                                'type' => 'object',
                                'additionalProperties' => 
                                array (
                                  'type' => 'object',
                                  'properties' => 
                                  array (
                                    'baggage_amount' => 
                                    array (
                                      'title' => '托运行李件数',
                                      'description' => '托运行李件数',
                                      'type' => 'integer',
                                      'format' => 'int32',
                                      'example' => '22',
                                    ),
                                    'baggage_weight' => 
                                    array (
                                      'title' => '托运行李重量',
                                      'description' => '托运行李重量',
                                      'type' => 'integer',
                                      'format' => 'int32',
                                      'example' => '2',
                                    ),
                                    'baggage_weight_unit' => 
                                    array (
                                      'title' => '托运行李重量单位',
                                      'description' => '托运行李重量单位',
                                      'type' => 'string',
                                      'example' => 'kg',
                                    ),
                                    'is_all_weight' => 
                                    array (
                                      'title' => '是否所有托运行李重量',
                                      'description' => '是否所有托运行李重量',
                                      'type' => 'boolean',
                                      'example' => 'true',
                                    ),
                                    'carry_on_amount' => 
                                    array (
                                      'title' => '手提行李件数',
                                      'description' => '手提行李件数',
                                      'type' => 'integer',
                                      'format' => 'int32',
                                      'example' => '1',
                                    ),
                                    'carry_on_weight' => 
                                    array (
                                      'title' => '手提行李重量',
                                      'description' => '手提行李重量',
                                      'type' => 'integer',
                                      'format' => 'int32',
                                      'example' => '2',
                                    ),
                                    'carry_on_weight_unit' => 
                                    array (
                                      'title' => '手提行李重量单位',
                                      'description' => '手提行李重量单位',
                                      'type' => 'string',
                                      'example' => 'kg',
                                    ),
                                    'is_all_carry_on_weight' => 
                                    array (
                                      'title' => '是否所有手提行李重量',
                                      'description' => '是否所有手提行李重量',
                                      'type' => 'boolean',
                                      'example' => 'true',
                                    ),
                                  ),
                                  'description' => '元素',
                                ),
                              ),
                            ),
                          ),
                        ),
                        'segment_refund_change_rule_mapping_list' => 
                        array (
                          'title' => '退改签规则',
                          'description' => '退改签规则',
                          'type' => 'array',
                          'items' => 
                          array (
                            'description' => '元素',
                            'type' => 'object',
                            'properties' => 
                            array (
                              'segment_id_list' => 
                              array (
                                'title' => '航段ID列表 这些航段ID使用同一个退改签规则',
                                'description' => '航段ID列表 这些航段ID使用同一个退改签规则',
                                'type' => 'array',
                                'items' => 
                                array (
                                  'description' => 'segment_id',
                                  'type' => 'string',
                                  'example' => 'HO1295-PVG-MFM-20230310',
                                ),
                              ),
                              'refund_change_rule_map' => 
                              array (
                                'title' => '乘机人类型-退改签规则映射关系',
                                'description' => '乘机人类型-退改签规则映射关系',
                                'type' => 'object',
                                'additionalProperties' => 
                                array (
                                  'type' => 'object',
                                  'properties' => 
                                  array (
                                    'refund_rule_all_unused_list' => 
                                    array (
                                      'title' => '全程未使用退票规则',
                                      'description' => '全程未使用退票规则',
                                      'type' => 'array',
                                      'items' => 
                                      array (
                                        'type' => 'object',
                                        'properties' => 
                                        array (
                                          'type' => 
                                          array (
                                            'title' => '该退票规则适用航程使用类型 0:全程未使用; 1:部分未使用',
                                            'description' => '该退票规则适用航程使用类型 0:全程未使用; 1:部分未使用',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '0',
                                          ),
                                          'time_unit' => 
                                          array (
                                            'title' => '时间单位：day/hour',
                                            'description' => '时间单位：day/hour',
                                            'type' => 'string',
                                            'example' => 'hour',
                                          ),
                                          'rule_start_time' => 
                                          array (
                                            'title' => '该退票规则适用于的退票时间区间开始时间，单位（天/小时）',
                                            'description' => '该退票规则适用于的退票时间区间开始时间，单位（天/小时）',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '36',
                                          ),
                                          'rule_end_time' => 
                                          array (
                                            'title' => '该退票规则适用于的退票时间区间结束时间，单位（天/小时）',
                                            'description' => '该退票规则适用于的退票时间区间结束时间，单位（天/小时）',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '12',
                                          ),
                                          'can_refund' => 
                                          array (
                                            'title' => '起飞前X-Y小时(天) 可否退票',
                                            'description' => '起飞前X-Y小时(天) 可否退票',
                                            'type' => 'boolean',
                                            'example' => 'true',
                                          ),
                                          'refund_fee' => 
                                          array (
                                            'title' => '起飞前X-Y小时(天) 退票手续费',
                                            'description' => '起飞前X-Y小时(天) 退票手续费',
                                            'type' => 'number',
                                            'format' => 'double',
                                            'example' => '20',
                                          ),
                                          'can_return_all_tax' => 
                                          array (
                                            'title' => '起飞前X-Y小时(天) 是否全额退税',
                                            'description' => '起飞前X-Y小时(天) 是否全额退税',
                                            'type' => 'boolean',
                                            'example' => 'true',
                                          ),
                                          'return_part_tax_fee' => 
                                          array (
                                            'title' => '起飞前X-Y小时(天) 可部分退税金额',
                                            'description' => '起飞前X-Y小时(天) 可部分退税金额',
                                            'type' => 'number',
                                            'format' => 'double',
                                            'example' => '20',
                                          ),
                                        ),
                                        'description' => '元素',
                                      ),
                                    ),
                                    'refund_rule_part_unused_list' => 
                                    array (
                                      'title' => '部分未使用退票规则',
                                      'description' => '部分未使用退票规则',
                                      'type' => 'array',
                                      'items' => 
                                      array (
                                        'type' => 'object',
                                        'properties' => 
                                        array (
                                          'type' => 
                                          array (
                                            'title' => '该退票规则适用航程使用类型 0:全程未使用; 1:部分未使用',
                                            'description' => '该退票规则适用航程使用类型 0:全程未使用; 1:部分未使用',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '1',
                                          ),
                                          'time_unit' => 
                                          array (
                                            'title' => '时间单位：day/hour',
                                            'description' => '时间单位：day/hour',
                                            'type' => 'string',
                                            'example' => 'hour',
                                          ),
                                          'rule_start_time' => 
                                          array (
                                            'title' => '该退票规则适用于的退票时间区间开始时间，单位（天/小时）',
                                            'description' => '该退票规则适用于的退票时间区间开始时间，单位（天/小时）',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '36',
                                          ),
                                          'rule_end_time' => 
                                          array (
                                            'title' => '该退票规则适用于的退票时间区间结束时间，单位（天/小时）',
                                            'description' => '该退票规则适用于的退票时间区间结束时间，单位（天/小时）',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '12',
                                          ),
                                          'can_refund' => 
                                          array (
                                            'title' => '起飞前X-Y小时(天) 可否退票',
                                            'description' => '起飞前X-Y小时(天) 可否退票',
                                            'type' => 'boolean',
                                            'example' => 'true',
                                          ),
                                          'refund_fee' => 
                                          array (
                                            'title' => '起飞前X-Y小时(天) 退票手续费',
                                            'description' => '起飞前X-Y小时(天) 退票手续费',
                                            'type' => 'number',
                                            'format' => 'double',
                                            'example' => '20',
                                          ),
                                          'can_return_all_tax' => 
                                          array (
                                            'title' => '起飞前X-Y小时(天) 是否全额退税',
                                            'description' => '起飞前X-Y小时(天) 是否全额退税',
                                            'type' => 'boolean',
                                            'example' => '30',
                                          ),
                                          'return_part_tax_fee' => 
                                          array (
                                            'title' => '起飞前X-Y小时(天) 可部分退税金额',
                                            'description' => '起飞前X-Y小时(天) 可部分退税金额',
                                            'type' => 'number',
                                            'format' => 'double',
                                            'example' => '20',
                                          ),
                                        ),
                                        'description' => '元素',
                                      ),
                                    ),
                                    'change_rule_in_unused_list' => 
                                    array (
                                      'title' => '回程未使用改签规则',
                                      'description' => '回程未使用改签规则',
                                      'type' => 'array',
                                      'items' => 
                                      array (
                                        'type' => 'object',
                                        'properties' => 
                                        array (
                                          'type' => 
                                          array (
                                            'title' => '该改签规则适用航程使用类型 2:去程未使用; 3:回程未使用',
                                            'description' => '该改签规则适用航程使用类型 2:去程未使用; 3:回程未使用',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '2',
                                          ),
                                          'time_unit' => 
                                          array (
                                            'title' => '时间单位：day/hour',
                                            'description' => '时间单位：day/hour',
                                            'type' => 'string',
                                            'example' => 'hour',
                                          ),
                                          'rule_start_time' => 
                                          array (
                                            'title' => '该退票规则适用于的退票时间区间开始时间，单位（天/小时）',
                                            'description' => '该退票规则适用于的退票时间区间开始时间，单位（天/小时）',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '36',
                                          ),
                                          'rule_end_time' => 
                                          array (
                                            'title' => '该退票规则适用于的退票时间区间结束时间，单位（天/小时）',
                                            'description' => '该退票规则适用于的退票时间区间结束时间，单位（天/小时）',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '12',
                                          ),
                                          'can_change' => 
                                          array (
                                            'title' => '起飞前X-Y小时(天) 可否可以改签',
                                            'description' => '起飞前X-Y小时(天) 可否可以改签',
                                            'type' => 'boolean',
                                            'example' => 'true',
                                          ),
                                          'change_fee' => 
                                          array (
                                            'title' => '起飞前X-Y小时(天) 改签费',
                                            'description' => '起飞前X-Y小时(天) 改签费',
                                            'type' => 'number',
                                            'format' => 'double',
                                            'example' => '20',
                                          ),
                                        ),
                                        'description' => '元素',
                                      ),
                                    ),
                                    'change_rule_out_unused_list' => 
                                    array (
                                      'title' => '去程未使用改签规则',
                                      'description' => '去程未使用改签规则',
                                      'type' => 'array',
                                      'items' => 
                                      array (
                                        'type' => 'object',
                                        'properties' => 
                                        array (
                                          'type' => 
                                          array (
                                            'title' => '该改签规则适用航程使用类型 2:去程未使用; 3:回程未使用',
                                            'description' => '该改签规则适用航程使用类型 2:去程未使用; 3:回程未使用',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '2',
                                          ),
                                          'time_unit' => 
                                          array (
                                            'title' => '时间单位：day/hour',
                                            'description' => '时间单位：day/hour',
                                            'type' => 'string',
                                            'example' => 'hour',
                                          ),
                                          'rule_start_time' => 
                                          array (
                                            'title' => '该退票规则适用于的退票时间区间开始时间，单位（天/小时）',
                                            'description' => '该退票规则适用于的退票时间区间开始时间，单位（天/小时）',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '36',
                                          ),
                                          'rule_end_time' => 
                                          array (
                                            'title' => '该退票规则适用于的退票时间区间结束时间，单位（天/小时）',
                                            'description' => '该退票规则适用于的退票时间区间结束时间，单位（天/小时）',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '12',
                                          ),
                                          'can_change' => 
                                          array (
                                            'title' => '起飞前X-Y小时(天) 可否可以改签',
                                            'description' => '起飞前X-Y小时(天) 可否可以改签',
                                            'type' => 'boolean',
                                            'example' => 'true',
                                          ),
                                          'change_fee' => 
                                          array (
                                            'title' => '起飞前X-Y小时(天) 改签费',
                                            'description' => '起飞前X-Y小时(天) 改签费',
                                            'type' => 'number',
                                            'format' => 'double',
                                            'example' => '10',
                                          ),
                                        ),
                                        'description' => '元素',
                                      ),
                                    ),
                                  ),
                                  'description' => '元素',
                                ),
                              ),
                            ),
                          ),
                        ),
                        'segment_baggage_check_in_info_list' => 
                        array (
                          'title' => '行李直挂规则',
                          'description' => '行李直挂规则',
                          'type' => 'array',
                          'items' => 
                          array (
                            'description' => '元素',
                            'type' => 'object',
                            'properties' => 
                            array (
                              'segment_id_list' => 
                              array (
                                'title' => '航段ID列表 这些航段ID使用同一个行李直挂规则',
                                'description' => '航段ID列表 这些航段ID使用同一个行李直挂规则',
                                'type' => 'array',
                                'items' => 
                                array (
                                  'description' => 'segment_id',
                                  'type' => 'string',
                                  'example' => 'HO1295-PVG-MFM-20230310',
                                ),
                              ),
                              'luggage_direct_info_type' => 
                              array (
                                'title' => '行李直挂规则类型 1:航段之间行李直达; 2:航段之间行李重新托运; 3:经停城市行李直达; 4:经停城市行李重新托运',
                                'description' => '行李直挂规则类型 1:航段之间行李直达; 2:航段之间行李重新托运; 3:经停城市行李直达; 4:经停城市行李重新托运',
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
                ),
              ),
              'error_data' => 
              array (
                'title' => '错误处理携带数据',
                'description' => '错误处理携带数据',
                'type' => 'any',
                'example' => 'null',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"status\\": 200,\\n  \\"error_code\\": \\"null\\",\\n  \\"error_msg\\": \\"null\\",\\n  \\"success\\": true,\\n  \\"RequestId\\": \\"51593418-8C73-5E47-8BA8-3F1D4A00CC0B\\",\\n  \\"data\\": {\\n    \\"solution_list\\": [\\n      {\\n        \\"solution_id\\": \\"eJwz8DeySEo0NjQ01TU3TU7TNTFINNO1SE5O0jVKM0hKNjEwTElLNYwz0A32cNT1dfPVNTIwMjYwNjRQ8/A3NLI01Q0Ic0cRBwBVFxJJ\\",\\n        \\"adult_price\\": 500,\\n        \\"adult_tax\\": 100,\\n        \\"child_price\\": 100,\\n        \\"child_tax\\": 100,\\n        \\"infant_price\\": 500,\\n        \\"infant_tax\\": 100,\\n        \\"refund_ticket_coupon_description\\": \\"\\\\\\"\\\\\\"\\",\\n        \\"product_type_description\\": \\"\\\\\\"\\\\\\"\\",\\n        \\"journey_list\\": [\\n          {\\n            \\"transfer_count\\": 0,\\n            \\"segment_list\\": [\\n              {\\n                \\"segment_id\\": \\"HO1295-PVG-MFM-20230310\\",\\n                \\"departure_airport\\": \\"PVG\\",\\n                \\"arrival_airport\\": \\"MFM\\",\\n                \\"departure_city\\": \\"SHA\\",\\n                \\"arrival_city\\": \\"MFM\\",\\n                \\"marketing_flight_no\\": \\"HO1295\\",\\n                \\"marketing_flight_no_int\\": 1295,\\n                \\"marketing_airline\\": \\"HO\\",\\n                \\"operating_flight_no\\": \\"HO1295\\",\\n                \\"operating_airline\\": \\"HO\\",\\n                \\"departure_time\\": \\"2023-03-10 07:55:00\\",\\n                \\"arrival_time\\": \\"2023-03-10 10:40:00\\",\\n                \\"code_share\\": false,\\n                \\"departure_terminal\\": \\"T2\\",\\n                \\"arrival_terminal\\": \\"null\\",\\n                \\"equip_type\\": \\"32Q\\",\\n                \\"cabin\\": \\"V\\",\\n                \\"cabin_class\\": \\"Y\\",\\n                \\"availability\\": \\"7\\",\\n                \\"stop_city_list\\": \\"\\\\\\"\\\\\\"\\",\\n                \\"stop_quantity\\": 0,\\n                \\"flight_duration\\": 165\\n              }\\n            ]\\n          }\\n        ],\\n        \\"segment_baggage_mapping_list\\": [\\n          {\\n            \\"segment_id_list\\": [\\n              \\"HO1295-PVG-MFM-20230310\\"\\n            ],\\n            \\"passenger_baggage_allowance_mapping\\": {\\n              \\"key\\": {\\n                \\"baggage_amount\\": 22,\\n                \\"baggage_weight\\": 2,\\n                \\"baggage_weight_unit\\": \\"kg\\",\\n                \\"is_all_weight\\": true,\\n                \\"carry_on_amount\\": 1,\\n                \\"carry_on_weight\\": 2,\\n                \\"carry_on_weight_unit\\": \\"kg\\",\\n                \\"is_all_carry_on_weight\\": true\\n              }\\n            }\\n          }\\n        ],\\n        \\"segment_refund_change_rule_mapping_list\\": [\\n          {\\n            \\"segment_id_list\\": [\\n              \\"HO1295-PVG-MFM-20230310\\"\\n            ],\\n            \\"refund_change_rule_map\\": {\\n              \\"key\\": {\\n                \\"refund_rule_all_unused_list\\": [\\n                  {\\n                    \\"type\\": 0,\\n                    \\"time_unit\\": \\"hour\\",\\n                    \\"rule_start_time\\": 36,\\n                    \\"rule_end_time\\": 12,\\n                    \\"can_refund\\": true,\\n                    \\"refund_fee\\": 20,\\n                    \\"can_return_all_tax\\": true,\\n                    \\"return_part_tax_fee\\": 20\\n                  }\\n                ],\\n                \\"refund_rule_part_unused_list\\": [\\n                  {\\n                    \\"type\\": 1,\\n                    \\"time_unit\\": \\"hour\\",\\n                    \\"rule_start_time\\": 36,\\n                    \\"rule_end_time\\": 12,\\n                    \\"can_refund\\": true,\\n                    \\"refund_fee\\": 20,\\n                    \\"can_return_all_tax\\": true,\\n                    \\"return_part_tax_fee\\": 20\\n                  }\\n                ],\\n                \\"change_rule_in_unused_list\\": [\\n                  {\\n                    \\"type\\": 2,\\n                    \\"time_unit\\": \\"hour\\",\\n                    \\"rule_start_time\\": 36,\\n                    \\"rule_end_time\\": 12,\\n                    \\"can_change\\": true,\\n                    \\"change_fee\\": 20\\n                  }\\n                ],\\n                \\"change_rule_out_unused_list\\": [\\n                  {\\n                    \\"type\\": 2,\\n                    \\"time_unit\\": \\"hour\\",\\n                    \\"rule_start_time\\": 36,\\n                    \\"rule_end_time\\": 12,\\n                    \\"can_change\\": true,\\n                    \\"change_fee\\": 10\\n                  }\\n                ]\\n              }\\n            }\\n          }\\n        ],\\n        \\"segment_baggage_check_in_info_list\\": [\\n          {\\n            \\"segment_id_list\\": [\\n              \\"HO1295-PVG-MFM-20230310\\"\\n            ],\\n            \\"luggage_direct_info_type\\": 1\\n          }\\n        ]\\n      }\\n    ]\\n  },\\n  \\"error_data\\": \\"null\\"\\n}","type":"json"}]',
      'title' => 'Enrich',
      'description' => '入参中 solution\\_id 和  journey\\_param\\_list 二选一，solution\\_id 需要从 Search 接口获取。',
    ),
    'AncillarySuggest' => 
    array (
      'summary' => '辅营推荐。',
      'path' => '/airticket/v1/ancillary/action-suggest',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'https',
        1 => 'http',
      ),
      'security' => 
      array (
        0 => 
        array (
          'accessTokenAuth' => 
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
          'name' => 'solution_id',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '机票 solution_id',
            'description' => '机票 solution_id',
            'type' => 'string',
            'required' => true,
            'example' => 'eJwz8DeySEo0NjQ01TU3TU7TNTFINNO1SE5O0jVKM0hKNjEwTElLNYwz0A32cNT1dfPVNTIwMjYwNjRQ8/A3NLI01Q0Ic0cRBwBVFxJJ
',
          ),
        ),
        1 => 
        array (
          'name' => 'x-acs-airticket-access-token',
          'in' => 'header',
          'schema' => 
          array (
            'title' => 'access_token',
            'description' => 'access_token',
            'type' => 'string',
            'required' => true,
            'example' => 'eyJhbGciOiJSUzI1NiIsImtpZCI6InN1ZXpfa2V5aWQifQ.eyJqdGkiOiJCQldMaWIzN0VxbC0xMjhhR2N5elJ3IiwiaWF0IjoxNjc3MDY2NTAxLCJleHAiOjE2NzcwNzM3MDEsIm5iZiI6MTY3NzA2NjQ0MX0.AF0DxsZK4Edyg0C6ObRQFUo36R1VYrb5IYmak25TmL1OfR5RkIUc3PpqFuQKNLKXf5fOtVQaKjaexzwodVeWZQDKEG_RPt_Ybb99EnEm6vPKs6e3pWFbKiBq71WleLHhVrdFb4YPowRKjc7bG0jyGUxiQ2iXy0RWDj9tIjfI-KEdzNp5oVnX7j4p3H12DwQrRPmd1nz3BciAQNINvDpzqusuIUw8JXyLFCz838Y0NhwB1_bYZyctxRLSzrGZuI5rrWtItgupqMsOlJ3RNy1QrIbQ2g6nPmzl-atOqcQ4Nw0HeDLR8dhM1OsIcFLbKXBUtwXofflhzAQrkDxhwYiXii',
          ),
        ),
        2 => 
        array (
          'name' => 'x-acs-airticket-language',
          'in' => 'header',
          'schema' => 
          array (
            'title' => '多语言 默认取买家账号配置',
            'description' => '多语言 默认取买家账号配置',
            'type' => 'string',
            'required' => false,
            'example' => 'en_US',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'PopBaseRes<AncillarySuggestRes, Object>',
            'description' => 'PopBaseRes<AncillarySuggestRes, Object>',
            'type' => 'object',
            'properties' => 
            array (
              'status' => 
              array (
                'title' => 'http 请求成功，status 值均为 200',
                'description' => 'http 请求成功，status 值均为 200',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'error_code' => 
              array (
                'title' => '业务错误码',
                'description' => '业务错误码',
                'type' => 'string',
                'example' => 'null',
              ),
              'error_msg' => 
              array (
                'title' => '错误信息',
                'description' => '错误信息',
                'type' => 'string',
                'example' => 'null',
              ),
              'success' => 
              array (
                'title' => '是否正确',
                'description' => '是否正确',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'RequestId' => 
              array (
                'title' => '请求 RequestId',
                'description' => '请求 RequestId',
                'type' => 'string',
                'example' => '51593418-8C73-5E47-8BA8-3F1D4A00CC0B',
              ),
              'data' => 
              array (
                'title' => '正确处理返回数据',
                'description' => '正确处理返回数据',
                'type' => 'object',
                'properties' => 
                array (
                  'solution_id' => 
                  array (
                    'title' => '机票 solution_id',
                    'description' => '机票 solution_id',
                    'type' => 'string',
                    'example' => 'eJwz8DeySEo0NjQ01TU3TU7TNTFINNO1SE5O0jVKM0hKNjEwTElLNYwz0A32cNT1dfPVNTIwMjYwNjRQ8/A3NLI01Q0Ic0cRBwBVFxJJ',
                  ),
                  'seg_ancillary_map_list' => 
                  array (
                    'title' => '机票-辅营映射关系',
                    'description' => '机票-辅营映射关系',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '元素',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'segment_id_list' => 
                        array (
                          'title' => '航段ID列表 这些航段使用同一个辅营',
                          'description' => '航段ID列表 这些航段使用同一个辅营',
                          'type' => 'array',
                          'items' => 
                          array (
                            'description' => 'segment_id',
                            'type' => 'string',
                            'example' => 'HO1295-PVG-MFM-20230310
',
                          ),
                        ),
                        'ancillary' => 
                        array (
                          'title' => '辅营产品',
                          'description' => '辅营产品',
                          'type' => 'object',
                          'properties' => 
                          array (
                            'ancillary_id' => 
                            array (
                              'title' => '辅营商品ID',
                              'description' => '辅营商品ID',
                              'type' => 'string',
                              'example' => 'eJwz8DeySEo0NjQ01TU3TU',
                            ),
                            'ancillary_type' => 
                            array (
                              'title' => '辅营产品类型 当前支持 4:付费行李',
                              'description' => '辅营产品类型 当前支持 4:付费行李',
                              'type' => 'integer',
                              'format' => 'int32',
                              'example' => '4',
                            ),
                            'baggage_ancillary' => 
                            array (
                              'title' => '行李辅营详情',
                              'description' => '行李辅营详情',
                              'type' => 'object',
                              'properties' => 
                              array (
                                'baggage_amount' => 
                                array (
                                  'title' => '行李件数 取值如：3、2、1、0、-2。 -2 表示计重',
                                  'description' => '行李件数 取值如：3、2、1、0、-2。 -2 表示计重',
                                  'type' => 'integer',
                                  'format' => 'int32',
                                  'example' => '0',
                                ),
                                'baggage_weight' => 
                                array (
                                  'title' => '行李重量，0-50。isAllWeght=true 时，表示所有件数总重量。',
                                  'description' => '行李重量，0-50。isAllWeght=true 时，表示所有件数总重量。',
                                  'type' => 'integer',
                                  'format' => 'int32',
                                  'example' => '0',
                                ),
                                'baggage_weight_unit' => 
                                array (
                                  'title' => '行李重量单位',
                                  'description' => '行李重量单位',
                                  'type' => 'string',
                                  'example' => 'KG',
                                ),
                                'is_all_weight' => 
                                array (
                                  'title' => '是否所有行李重量',
                                  'description' => '是否所有行李重量',
                                  'type' => 'boolean',
                                  'example' => 'true',
                                ),
                                'price' => 
                                array (
                                  'title' => '总价',
                                  'description' => '总价',
                                  'type' => 'number',
                                  'format' => 'double',
                                  'example' => '10.0',
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
              'error_data' => 
              array (
                'title' => '错误处理携带数据',
                'description' => '错误处理携带数据',
                'type' => 'any',
                'example' => 'null',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"status\\": 200,\\n  \\"error_code\\": \\"null\\",\\n  \\"error_msg\\": \\"null\\",\\n  \\"success\\": true,\\n  \\"RequestId\\": \\"51593418-8C73-5E47-8BA8-3F1D4A00CC0B\\",\\n  \\"data\\": {\\n    \\"solution_id\\": \\"eJwz8DeySEo0NjQ01TU3TU7TNTFINNO1SE5O0jVKM0hKNjEwTElLNYwz0A32cNT1dfPVNTIwMjYwNjRQ8/A3NLI01Q0Ic0cRBwBVFxJJ\\",\\n    \\"seg_ancillary_map_list\\": [\\n      {\\n        \\"segment_id_list\\": [\\n          \\"HO1295-PVG-MFM-20230310\\\\n\\"\\n        ],\\n        \\"ancillary\\": {\\n          \\"ancillary_id\\": \\"eJwz8DeySEo0NjQ01TU3TU\\",\\n          \\"ancillary_type\\": 4,\\n          \\"baggage_ancillary\\": {\\n            \\"baggage_amount\\": 0,\\n            \\"baggage_weight\\": 0,\\n            \\"baggage_weight_unit\\": \\"KG\\",\\n            \\"is_all_weight\\": true,\\n            \\"price\\": 10\\n          }\\n        }\\n      }\\n    ]\\n  },\\n  \\"error_data\\": \\"null\\"\\n}","type":"json"}]',
      'title' => 'AncillarySuggest',
    ),
    'Pricing' => 
    array (
      'summary' => '验座，验价。如果价格变动，开发者继续 Book 则是以变价后的价格下单；如果未变价，则以未变价的价格下单。',
      'path' => '/airticket/v1/trade/action-pricing',
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
          'accessTokenAuth' => 
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
          'name' => 'solution_id',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => 'solution_id',
            'description' => 'solution_id',
            'type' => 'string',
            'required' => true,
            'example' => 'eJwz8DeySEo0NjQ01TU3TU7TNTFINNO1SE5O0jVKM0hKNjEwTElLNYwz0A32cNT1dfPVNTIwMjYwNjRQ8/A3NLI01Q0Ic0cRBwBVFxJJ',
          ),
        ),
        1 => 
        array (
          'name' => 'x-acs-airticket-access-token',
          'in' => 'header',
          'schema' => 
          array (
            'title' => 'access_token',
            'description' => 'access_token',
            'type' => 'string',
            'required' => true,
            'example' => 'eyJhbGciOiJSUzI1NiIsImtpZCI6InN1ZXpfa2V5aWQifQ.eyJqdGkiOiJCQldMaWIzN0VxbC0xMjhhR2N5elJ3IiwiaWF0IjoxNjc3MDY2NTAxLCJleHAiOjE2NzcwNzM3MDEsIm5iZiI6MTY3NzA2NjQ0MX0.AF0DxsZK4Edyg0C6ObRQFUo36R1VYrb5IYmak25TmL1OfR5RkIUc3PpqFuQKNLKXf5fOtVQaKjaexzwodVeWZQDKEG_RPt_Ybb99EnEm6vPKs6e3pWFbKiBq71WleLHhVrdFb4YPowRKjc7bG0jyGUxiQ2iXy0RWDj9tIjfI-KEdzNp5oVnX7j4p3H12DwQrRPmd1nz3BciAQNINvDpzqusuIUw8JXyLFCz838Y0NhwB1_bYZyctxRLSzrGZuI5rrWtItgupqMsOlJ3RNy1QrIbQ2g6nPmzl-atOqcQ4Nw0HeDLR8dhM1OsIcFLbKXBUtwXofflhzAQrkDxhwYiXii',
          ),
        ),
        2 => 
        array (
          'name' => 'x-acs-airticket-language',
          'in' => 'header',
          'schema' => 
          array (
            'title' => '多语言 默认取买家账号配置',
            'description' => '多语言 默认取买家账号配置',
            'type' => 'string',
            'required' => false,
            'example' => 'en_US',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'PopBaseRes<PricingRes, Object>',
            'description' => 'PopBaseRes<PricingRes, Object>',
            'type' => 'object',
            'properties' => 
            array (
              'status' => 
              array (
                'title' => 'http 请求成功，status 值均为 200',
                'description' => 'http 请求成功，status 值均为 200',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'error_code' => 
              array (
                'title' => '业务错误码',
                'description' => '业务错误码',
                'type' => 'string',
                'example' => 'null',
              ),
              'error_msg' => 
              array (
                'title' => '错误信息',
                'description' => '错误信息',
                'type' => 'string',
                'example' => 'null',
              ),
              'success' => 
              array (
                'title' => '是否正确',
                'description' => '是否正确',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'RequestId' => 
              array (
                'title' => '请求 RequestId',
                'description' => '请求 RequestId',
                'type' => 'string',
                'example' => '51593418-8C73-5E47-8BA8-3F1D4A00CC0B',
              ),
              'data' => 
              array (
                'title' => '正确处理返回数据',
                'description' => '正确处理返回数据',
                'type' => 'object',
                'properties' => 
                array (
                  'solution' => 
                  array (
                    'title' => 'solution',
                    'description' => 'solution',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'solution_id' => 
                      array (
                        'title' => 'solution_id',
                        'description' => 'solution_id',
                        'type' => 'string',
                        'example' => 'eJwz8DeySEo0NjQ01TU3TU7TNTFINNO1SE5O0jVKM0hKNjEwTElLNYwz0A32cNT1dfPVNTIwMjYwNjRQ8/A3NLI01Q0Ic0cRBwBVFxJJ',
                      ),
                      'adult_price' => 
                      array (
                        'title' => '成人单价',
                        'description' => '成人单价',
                        'type' => 'number',
                        'format' => 'double',
                        'example' => '300',
                      ),
                      'adult_tax' => 
                      array (
                        'title' => '成人税',
                        'description' => '成人税',
                        'type' => 'number',
                        'format' => 'double',
                        'example' => '30',
                      ),
                      'child_price' => 
                      array (
                        'title' => '儿童单价',
                        'description' => '儿童单价',
                        'type' => 'number',
                        'format' => 'double',
                        'example' => '200',
                      ),
                      'child_tax' => 
                      array (
                        'title' => '儿童税',
                        'description' => '儿童税',
                        'type' => 'number',
                        'format' => 'double',
                        'example' => '20',
                      ),
                      'infant_price' => 
                      array (
                        'title' => '婴儿单价',
                        'description' => '婴儿单价',
                        'type' => 'number',
                        'format' => 'double',
                        'example' => '200',
                      ),
                      'infant_tax' => 
                      array (
                        'title' => '婴儿税',
                        'description' => '婴儿税',
                        'type' => 'number',
                        'format' => 'double',
                        'example' => '10',
                      ),
                      'refund_ticket_coupon_description' => 
                      array (
                        'title' => '退票代金券说明',
                        'description' => '退票代金券说明',
                        'type' => 'string',
                        'example' => 'description',
                      ),
                      'product_type_description' => 
                      array (
                        'title' => '产品类型描述',
                        'description' => '产品类型描述',
                        'type' => 'string',
                        'example' => 'description',
                      ),
                      'journey_list' => 
                      array (
                        'title' => '行程',
                        'description' => '行程',
                        'type' => 'array',
                        'items' => 
                        array (
                          'description' => 'journey',
                          'type' => 'object',
                          'properties' => 
                          array (
                            'transfer_count' => 
                            array (
                              'title' => '中转次数',
                              'description' => '中转次数',
                              'type' => 'integer',
                              'format' => 'int32',
                              'example' => '0',
                            ),
                            'segment_list' => 
                            array (
                              'title' => '航段信息',
                              'description' => '航段信息',
                              'type' => 'array',
                              'items' => 
                              array (
                                'description' => 'segment',
                                'type' => 'object',
                                'properties' => 
                                array (
                                  'segment_id' => 
                                  array (
                                    'title' => '航段ID 组成格式:航班号+出发机场+达到机场+起飞日期（MMdd）',
                                    'description' => '航段ID 组成格式:航班号+出发机场+达到机场+起飞日期（MMdd）',
                                    'type' => 'string',
                                    'example' => 'HO1295-PVG-MFM-20230310',
                                  ),
                                  'departure_airport' => 
                                  array (
                                    'title' => '航班起飞机场三字码(大写)',
                                    'description' => '航班起飞机场三字码(大写)',
                                    'type' => 'string',
                                    'example' => 'PVG',
                                  ),
                                  'arrival_airport' => 
                                  array (
                                    'title' => '航班到达机场三字码(大写)',
                                    'description' => '航班到达机场三字码(大写)',
                                    'type' => 'string',
                                    'example' => 'MFM',
                                  ),
                                  'departure_city' => 
                                  array (
                                    'title' => '航班起飞城市三字码(大写)',
                                    'description' => '航班起飞城市三字码(大写)',
                                    'type' => 'string',
                                    'example' => 'SHA',
                                  ),
                                  'arrival_city' => 
                                  array (
                                    'title' => '航班到达城市三字码(大写)',
                                    'description' => '航班到达城市三字码(大写)',
                                    'type' => 'string',
                                    'example' => 'MFM',
                                  ),
                                  'marketing_flight_no' => 
                                  array (
                                    'title' => '市场方航班号(如：HO1295)',
                                    'description' => '市场方航班号(如：KA5809)',
                                    'type' => 'string',
                                    'example' => 'HO1295',
                                  ),
                                  'marketing_flight_no_int' => 
                                  array (
                                    'title' => '市场方数字航班号（如：1295）',
                                    'description' => '市场方数字航班号（如：5809）',
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'example' => '1295',
                                  ),
                                  'marketing_airline' => 
                                  array (
                                    'title' => '市场方航司(如：HO)',
                                    'description' => '市场方航司(如：KA)',
                                    'type' => 'string',
                                    'example' => 'HO',
                                  ),
                                  'operating_flight_no' => 
                                  array (
                                    'title' => '承运方航班号(如：CX601)',
                                    'description' => '承运方航班号(如：CX601)',
                                    'type' => 'string',
                                    'example' => 'HO1295',
                                  ),
                                  'operating_airline' => 
                                  array (
                                    'title' => '承运方航司(如：CX)',
                                    'description' => '承运方航司(如：CX)',
                                    'type' => 'string',
                                    'example' => 'HO',
                                  ),
                                  'departure_time' => 
                                  array (
                                    'title' => '航班起飞日期时间 字符串格式(yyyy-MM-dd HH:mm:ss)',
                                    'description' => '航班起飞日期时间 字符串格式(yyyy-MM-dd HH:mm:ss)',
                                    'type' => 'string',
                                    'example' => '2023-03-10 07:55:00',
                                  ),
                                  'arrival_time' => 
                                  array (
                                    'title' => '航班到达日期时间 字符串格式(yyyy-MM-dd HH:mm:ss)',
                                    'description' => '航班到达日期时间 字符串格式(yyyy-MM-dd HH:mm:ss)',
                                    'type' => 'string',
                                    'example' => '2023-03-10 10:40:00',
                                  ),
                                  'code_share' => 
                                  array (
                                    'title' => '是否为共享航班',
                                    'description' => '是否为共享航班',
                                    'type' => 'boolean',
                                    'example' => 'false',
                                  ),
                                  'departure_terminal' => 
                                  array (
                                    'title' => '航班出发航站楼',
                                    'description' => '航班出发航站楼',
                                    'type' => 'string',
                                    'example' => 'T2',
                                  ),
                                  'arrival_terminal' => 
                                  array (
                                    'title' => '航班到达航站楼',
                                    'description' => '航班到达航站楼',
                                    'type' => 'string',
                                    'example' => 'T1',
                                  ),
                                  'equip_type' => 
                                  array (
                                    'title' => '机型',
                                    'description' => '机型',
                                    'type' => 'string',
                                    'example' => '32Q',
                                  ),
                                  'cabin' => 
                                  array (
                                    'title' => '舱位',
                                    'description' => '舱位',
                                    'type' => 'string',
                                    'example' => 'V',
                                  ),
                                  'cabin_class' => 
                                  array (
                                    'title' => '舱等',
                                    'description' => '舱等',
                                    'type' => 'string',
                                    'example' => 'ALL_CABIN',
                                  ),
                                  'availability' => 
                                  array (
                                    'title' => '剩余座位数,大于 9 用 A 表示',
                                    'description' => '剩余座位数',
                                    'type' => 'string',
                                    'example' => '7',
                                  ),
                                  'stop_city_list' => 
                                  array (
                                    'title' => '经停城市列表，stopQuantity > 0 时有值，多个用逗号分割',
                                    'description' => '经停城市列表，stopQuantity > 0 时有值，多个用逗号分割',
                                    'type' => 'string',
                                    'example' => '""',
                                  ),
                                  'stop_quantity' => 
                                  array (
                                    'title' => '经停城市数目',
                                    'description' => '经停城市数目',
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'example' => '0',
                                  ),
                                  'flight_duration' => 
                                  array (
                                    'title' => '飞行时间 单位：分钟',
                                    'description' => '飞行时间 单位：分钟',
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'example' => '165',
                                  ),
                                ),
                              ),
                            ),
                          ),
                        ),
                      ),
                      'segment_baggage_mapping_list' => 
                      array (
                        'title' => '免费行李规则',
                        'description' => '免费行李规则',
                        'type' => 'array',
                        'items' => 
                        array (
                          'description' => '元素',
                          'type' => 'object',
                          'properties' => 
                          array (
                            'segment_id_list' => 
                            array (
                              'title' => '航段ID列表 这些航段ID使用同一个免费行李规则',
                              'description' => '航段ID列表 这些航段ID使用同一个免费行李规则',
                              'type' => 'array',
                              'items' => 
                              array (
                                'description' => 'segment_id',
                                'type' => 'string',
                                'example' => 'HO1295-PVG-MFM-20230310
',
                              ),
                            ),
                            'passenger_baggage_allowance_mapping' => 
                            array (
                              'title' => '乘客类型-免费行李额映射关系 key 取值描述 ADT:普通成人; CHD:儿童; INF:婴儿',
                              'description' => '乘客类型-免费行李额映射关系',
                              'type' => 'object',
                              'additionalProperties' => 
                              array (
                                'type' => 'object',
                                'properties' => 
                                array (
                                  'baggage_amount' => 
                                  array (
                                    'title' => '托运行李件数',
                                    'description' => '托运行李件数',
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'example' => '1',
                                  ),
                                  'baggage_weight' => 
                                  array (
                                    'title' => '托运行李重量',
                                    'description' => '托运行李重量',
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'example' => '10',
                                  ),
                                  'baggage_weight_unit' => 
                                  array (
                                    'title' => '托运行李重量单位',
                                    'description' => '托运行李重量单位',
                                    'type' => 'string',
                                    'example' => 'kg',
                                  ),
                                  'is_all_weight' => 
                                  array (
                                    'title' => '是否所有托运行李重量',
                                    'description' => '是否所有托运行李重量',
                                    'type' => 'boolean',
                                    'example' => 'true',
                                  ),
                                  'carry_on_amount' => 
                                  array (
                                    'title' => '手提行李件数',
                                    'description' => '手提行李件数',
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'example' => '1',
                                  ),
                                  'carry_on_weight' => 
                                  array (
                                    'title' => '手提行李重量',
                                    'description' => '手提行李重量',
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'example' => '10',
                                  ),
                                  'carry_on_weight_unit' => 
                                  array (
                                    'title' => '手提行李重量单位',
                                    'description' => '手提行李重量单位',
                                    'type' => 'string',
                                    'example' => 'kg',
                                  ),
                                  'is_all_carry_on_weight' => 
                                  array (
                                    'title' => '是否所有手提行李重量',
                                    'description' => '是否所有手提行李重量',
                                    'type' => 'boolean',
                                    'example' => 'true',
                                  ),
                                ),
                                'description' => '元素',
                              ),
                            ),
                          ),
                        ),
                      ),
                      'segment_refund_change_rule_mapping_list' => 
                      array (
                        'title' => '退改签规则',
                        'description' => '退改签规则',
                        'type' => 'array',
                        'items' => 
                        array (
                          'description' => '元素',
                          'type' => 'object',
                          'properties' => 
                          array (
                            'segment_id_list' => 
                            array (
                              'title' => '航段ID列表 这些航段ID使用同一个退改签规则',
                              'description' => '航段ID列表 这些航段ID使用同一个退改签规则',
                              'type' => 'array',
                              'items' => 
                              array (
                                'description' => 'segment_id',
                                'type' => 'string',
                                'example' => 'HO1295-PVG-MFM-20230310',
                              ),
                            ),
                            'refund_change_rule_map' => 
                            array (
                              'title' => '乘机人类型-退改签规则映射关系 key 取值描述 ADT:普通成人; CHD:儿童; INF:婴儿',
                              'description' => '乘机人类型-退改签规则映射关系',
                              'type' => 'object',
                              'additionalProperties' => 
                              array (
                                'type' => 'object',
                                'properties' => 
                                array (
                                  'refund_rule_all_unused_list' => 
                                  array (
                                    'title' => '全程未使用退票规则',
                                    'description' => '全程未使用退票规则',
                                    'type' => 'array',
                                    'items' => 
                                    array (
                                      'type' => 'object',
                                      'properties' => 
                                      array (
                                        'type' => 
                                        array (
                                          'title' => '该退票规则适用航程使用类型 0:全程未使用; 1:部分未使用',
                                          'description' => '该退票规则适用航程使用类型 0:全程未使用; 1:部分未使用',
                                          'type' => 'integer',
                                          'format' => 'int32',
                                          'example' => '1',
                                        ),
                                        'time_unit' => 
                                        array (
                                          'title' => '时间单位：day/hour',
                                          'description' => '时间单位：day/hour',
                                          'type' => 'string',
                                          'example' => 'hour',
                                        ),
                                        'rule_start_time' => 
                                        array (
                                          'title' => '该退票规则适用于的退票时间区间开始时间，单位（天/小时）',
                                          'description' => '该退票规则适用于的退票时间区间开始时间，单位（天/小时）',
                                          'type' => 'integer',
                                          'format' => 'int32',
                                          'example' => '36',
                                        ),
                                        'rule_end_time' => 
                                        array (
                                          'title' => '该退票规则适用于的退票时间区间结束时间，单位（天/小时）',
                                          'description' => '该退票规则适用于的退票时间区间结束时间，单位（天/小时）',
                                          'type' => 'integer',
                                          'format' => 'int32',
                                          'example' => '12',
                                        ),
                                        'can_refund' => 
                                        array (
                                          'title' => '起飞前X-Y小时(天) 可否退票',
                                          'description' => '起飞前X-Y小时(天) 可否退票',
                                          'type' => 'boolean',
                                          'example' => 'true',
                                        ),
                                        'refund_fee' => 
                                        array (
                                          'title' => '起飞前X-Y小时(天) 退票手续费',
                                          'description' => '起飞前X-Y小时(天) 退票手续费',
                                          'type' => 'number',
                                          'format' => 'double',
                                          'example' => '10',
                                        ),
                                        'can_return_all_tax' => 
                                        array (
                                          'title' => '起飞前X-Y小时(天) 是否全额退税',
                                          'description' => '起飞前X-Y小时(天) 是否全额退税',
                                          'type' => 'boolean',
                                          'example' => 'true',
                                        ),
                                        'return_part_tax_fee' => 
                                        array (
                                          'title' => '起飞前X-Y小时(天) 可部分退税金额',
                                          'description' => '起飞前X-Y小时(天) 可部分退税金额',
                                          'type' => 'number',
                                          'format' => 'double',
                                          'example' => '10',
                                        ),
                                      ),
                                      'description' => '元素',
                                    ),
                                  ),
                                  'refund_rule_part_unused_list' => 
                                  array (
                                    'title' => '部分未使用退票规则',
                                    'description' => '部分未使用退票规则',
                                    'type' => 'array',
                                    'items' => 
                                    array (
                                      'type' => 'object',
                                      'properties' => 
                                      array (
                                        'type' => 
                                        array (
                                          'title' => '该退票规则适用航程使用类型 0:全程未使用; 1:部分未使用',
                                          'description' => '该退票规则适用航程使用类型 0:全程未使用; 1:部分未使用',
                                          'type' => 'integer',
                                          'format' => 'int32',
                                          'example' => '0',
                                        ),
                                        'time_unit' => 
                                        array (
                                          'title' => '时间单位：day/hour',
                                          'description' => '时间单位：day/hour',
                                          'type' => 'string',
                                          'example' => 'hour',
                                        ),
                                        'rule_start_time' => 
                                        array (
                                          'title' => '该退票规则适用于的退票时间区间开始时间，单位（天/小时）',
                                          'description' => '该退票规则适用于的退票时间区间开始时间，单位（天/小时）',
                                          'type' => 'integer',
                                          'format' => 'int32',
                                          'example' => '36',
                                        ),
                                        'rule_end_time' => 
                                        array (
                                          'title' => '该退票规则适用于的退票时间区间结束时间，单位（天/小时）',
                                          'description' => '该退票规则适用于的退票时间区间结束时间，单位（天/小时）',
                                          'type' => 'integer',
                                          'format' => 'int32',
                                          'example' => '12',
                                        ),
                                        'can_refund' => 
                                        array (
                                          'title' => '起飞前X-Y小时(天) 可否退票',
                                          'description' => '起飞前X-Y小时(天) 可否退票',
                                          'type' => 'boolean',
                                          'example' => 'true',
                                        ),
                                        'refund_fee' => 
                                        array (
                                          'title' => '起飞前X-Y小时(天) 退票手续费',
                                          'description' => '起飞前X-Y小时(天) 退票手续费',
                                          'type' => 'number',
                                          'format' => 'double',
                                          'example' => '20',
                                        ),
                                        'can_return_all_tax' => 
                                        array (
                                          'title' => '起飞前X-Y小时(天) 是否全额退税',
                                          'description' => '起飞前X-Y小时(天) 是否全额退税',
                                          'type' => 'boolean',
                                          'example' => 'false',
                                        ),
                                        'return_part_tax_fee' => 
                                        array (
                                          'title' => '起飞前X-Y小时(天) 可部分退税金额',
                                          'description' => '起飞前X-Y小时(天) 可部分退税金额',
                                          'type' => 'number',
                                          'format' => 'double',
                                          'example' => '30',
                                        ),
                                      ),
                                      'description' => '元素',
                                    ),
                                  ),
                                  'change_rule_in_unused_list' => 
                                  array (
                                    'title' => '回程未使用改签规则',
                                    'description' => '回程未使用改签规则',
                                    'type' => 'array',
                                    'items' => 
                                    array (
                                      'type' => 'object',
                                      'properties' => 
                                      array (
                                        'type' => 
                                        array (
                                          'title' => '该改签规则适用航程使用类型 2:去程未使用; 3:回程未使用',
                                          'description' => '该改签规则适用航程使用类型 2:去程未使用; 3:回程未使用',
                                          'type' => 'integer',
                                          'format' => 'int32',
                                          'example' => '2',
                                        ),
                                        'time_unit' => 
                                        array (
                                          'title' => '时间单位：day/hour',
                                          'description' => '时间单位：day/hour',
                                          'type' => 'string',
                                          'example' => 'hour',
                                        ),
                                        'rule_start_time' => 
                                        array (
                                          'title' => '该退票规则适用于的退票时间区间开始时间，单位（天/小时）',
                                          'description' => '该退票规则适用于的退票时间区间开始时间，单位（天/小时）',
                                          'type' => 'integer',
                                          'format' => 'int32',
                                          'example' => '36',
                                        ),
                                        'rule_end_time' => 
                                        array (
                                          'title' => '该退票规则适用于的退票时间区间结束时间，单位（天/小时）',
                                          'description' => '该退票规则适用于的退票时间区间结束时间，单位（天/小时）',
                                          'type' => 'integer',
                                          'format' => 'int32',
                                          'example' => '12',
                                        ),
                                        'can_change' => 
                                        array (
                                          'title' => '起飞前X-Y小时(天) 可否可以改签',
                                          'description' => '起飞前X-Y小时(天) 可否可以改签',
                                          'type' => 'boolean',
                                          'example' => 'true',
                                        ),
                                        'change_fee' => 
                                        array (
                                          'title' => '起飞前X-Y小时(天) 改签费',
                                          'description' => '起飞前X-Y小时(天) 改签费',
                                          'type' => 'number',
                                          'format' => 'double',
                                          'example' => '10',
                                        ),
                                      ),
                                      'description' => '元素',
                                    ),
                                  ),
                                  'change_rule_out_unused_list' => 
                                  array (
                                    'title' => '去程未使用改签规则',
                                    'description' => '去程未使用改签规则',
                                    'type' => 'array',
                                    'items' => 
                                    array (
                                      'type' => 'object',
                                      'properties' => 
                                      array (
                                        'type' => 
                                        array (
                                          'title' => '该改签规则适用航程使用类型 2:去程未使用; 3:回程未使用',
                                          'description' => '该改签规则适用航程使用类型 2:去程未使用; 3:回程未使用',
                                          'type' => 'integer',
                                          'format' => 'int32',
                                          'example' => '3',
                                        ),
                                        'time_unit' => 
                                        array (
                                          'title' => '时间单位：day/hour',
                                          'description' => '时间单位：day/hour',
                                          'type' => 'string',
                                          'example' => 'hour',
                                        ),
                                        'rule_start_time' => 
                                        array (
                                          'title' => '该退票规则适用于的退票时间区间开始时间，单位（天/小时）',
                                          'description' => '该退票规则适用于的退票时间区间开始时间，单位（天/小时）',
                                          'type' => 'integer',
                                          'format' => 'int32',
                                          'example' => '36',
                                        ),
                                        'rule_end_time' => 
                                        array (
                                          'title' => '该退票规则适用于的退票时间区间结束时间，单位（天/小时）',
                                          'description' => '该退票规则适用于的退票时间区间结束时间，单位（天/小时）',
                                          'type' => 'integer',
                                          'format' => 'int32',
                                          'example' => '12',
                                        ),
                                        'can_change' => 
                                        array (
                                          'title' => '起飞前X-Y小时(天) 可否可以改签',
                                          'description' => '起飞前X-Y小时(天) 可否可以改签',
                                          'type' => 'boolean',
                                          'example' => 'true',
                                        ),
                                        'change_fee' => 
                                        array (
                                          'title' => '起飞前X-Y小时(天) 改签费',
                                          'description' => '起飞前X-Y小时(天) 改签费',
                                          'type' => 'number',
                                          'format' => 'double',
                                          'example' => '10',
                                        ),
                                      ),
                                      'description' => '元素',
                                    ),
                                  ),
                                ),
                                'description' => '元素',
                              ),
                            ),
                          ),
                        ),
                      ),
                      'segment_baggage_check_in_info_list' => 
                      array (
                        'title' => '行李直挂规则',
                        'description' => '行李直挂规则',
                        'type' => 'array',
                        'items' => 
                        array (
                          'description' => '元素',
                          'type' => 'object',
                          'properties' => 
                          array (
                            'segment_id_list' => 
                            array (
                              'title' => '航段ID列表 这些航段ID使用同一个行李直挂规则',
                              'description' => '航段ID列表 这些航段ID使用同一个行李直挂规则',
                              'type' => 'array',
                              'items' => 
                              array (
                                'description' => 'segment_id',
                                'type' => 'string',
                                'example' => 'HO1295-PVG-MFM-20230310
',
                              ),
                            ),
                            'luggage_direct_info_type' => 
                            array (
                              'title' => '行李直挂规则类型 1:航段之间行李直达; 2:航段之间行李重新托运; 3:经停城市行李直达; 4:经停城市行李重新托运',
                              'description' => '行李直挂规则类型 1:航段之间行李直达; 2:航段之间行李重新托运; 3:经停城市行李直达; 4:经停城市行李重新托运',
                              'type' => 'integer',
                              'format' => 'int32',
                              'example' => '1',
                            ),
                          ),
                        ),
                      ),
                    ),
                  ),
                  'is_changed' => 
                  array (
                    'title' => '是否变价',
                    'description' => '是否变价',
                    'type' => 'boolean',
                    'example' => 'true',
                  ),
                  'original_price_info' => 
                  array (
                    'title' => '变价之前价格信息 isChanged = true 时，才有值',
                    'description' => '变价之前价格信息 isChanged = true 时，才有值',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'adult_tax' => 
                      array (
                        'title' => '成人税',
                        'description' => '成人税',
                        'type' => 'number',
                        'format' => 'double',
                        'example' => '20',
                      ),
                      'child_tax' => 
                      array (
                        'title' => '儿童税',
                        'description' => '儿童税',
                        'type' => 'number',
                        'format' => 'double',
                        'example' => '20',
                      ),
                      'infant_tax' => 
                      array (
                        'title' => '婴儿税',
                        'description' => '婴儿税',
                        'type' => 'number',
                        'format' => 'double',
                        'example' => '20',
                      ),
                      'adult_price' => 
                      array (
                        'title' => '成人单价',
                        'description' => '成人单价',
                        'type' => 'number',
                        'format' => 'double',
                        'example' => '200',
                      ),
                      'child_price' => 
                      array (
                        'title' => '儿童单价',
                        'description' => '儿童单价',
                        'type' => 'number',
                        'format' => 'double',
                        'example' => '200',
                      ),
                      'infant_price' => 
                      array (
                        'title' => '婴儿单价',
                        'description' => '婴儿单价',
                        'type' => 'number',
                        'format' => 'double',
                        'example' => '200',
                      ),
                    ),
                  ),
                  'changed_price_info' => 
                  array (
                    'title' => '变价之后价格信息 isChanged = true 时，才有值',
                    'description' => '变价之后价格信息',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'adult_tax' => 
                      array (
                        'title' => '成人税',
                        'description' => '成人税',
                        'type' => 'number',
                        'format' => 'double',
                        'example' => '10',
                      ),
                      'child_tax' => 
                      array (
                        'title' => '儿童税',
                        'description' => '儿童税',
                        'type' => 'number',
                        'format' => 'double',
                        'example' => '10',
                      ),
                      'infant_tax' => 
                      array (
                        'title' => '婴儿税',
                        'description' => '婴儿税',
                        'type' => 'number',
                        'format' => 'double',
                        'example' => '10',
                      ),
                      'adult_price' => 
                      array (
                        'title' => '成人单价',
                        'description' => '成人单价',
                        'type' => 'number',
                        'format' => 'double',
                        'example' => '100',
                      ),
                      'child_price' => 
                      array (
                        'title' => '儿童单价',
                        'description' => '儿童单价',
                        'type' => 'number',
                        'format' => 'double',
                        'example' => '100',
                      ),
                      'infant_price' => 
                      array (
                        'title' => '婴儿单价',
                        'description' => '婴儿单价',
                        'type' => 'number',
                        'format' => 'double',
                        'example' => '100',
                      ),
                    ),
                  ),
                  'remain_seats' => 
                  array (
                    'title' => '剩余座位数，A 表示大于9，0-9 代表具体数字',
                    'description' => '剩余座位数，A 表示大于9，0-9 代表具体数字',
                    'type' => 'string',
                    'example' => 'A',
                  ),
                ),
              ),
              'error_data' => 
              array (
                'title' => '错误处理携带数据',
                'description' => '错误处理携带数据',
                'type' => 'any',
                'example' => 'null',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"status\\": 200,\\n  \\"error_code\\": \\"null\\",\\n  \\"error_msg\\": \\"null\\",\\n  \\"success\\": true,\\n  \\"RequestId\\": \\"51593418-8C73-5E47-8BA8-3F1D4A00CC0B\\",\\n  \\"data\\": {\\n    \\"solution\\": {\\n      \\"solution_id\\": \\"eJwz8DeySEo0NjQ01TU3TU7TNTFINNO1SE5O0jVKM0hKNjEwTElLNYwz0A32cNT1dfPVNTIwMjYwNjRQ8/A3NLI01Q0Ic0cRBwBVFxJJ\\",\\n      \\"adult_price\\": 300,\\n      \\"adult_tax\\": 30,\\n      \\"child_price\\": 200,\\n      \\"child_tax\\": 20,\\n      \\"infant_price\\": 200,\\n      \\"infant_tax\\": 10,\\n      \\"refund_ticket_coupon_description\\": \\"description\\",\\n      \\"product_type_description\\": \\"description\\",\\n      \\"journey_list\\": [\\n        {\\n          \\"transfer_count\\": 0,\\n          \\"segment_list\\": [\\n            {\\n              \\"segment_id\\": \\"HO1295-PVG-MFM-20230310\\",\\n              \\"departure_airport\\": \\"PVG\\",\\n              \\"arrival_airport\\": \\"MFM\\",\\n              \\"departure_city\\": \\"SHA\\",\\n              \\"arrival_city\\": \\"MFM\\",\\n              \\"marketing_flight_no\\": \\"HO1295\\",\\n              \\"marketing_flight_no_int\\": 1295,\\n              \\"marketing_airline\\": \\"HO\\",\\n              \\"operating_flight_no\\": \\"HO1295\\",\\n              \\"operating_airline\\": \\"HO\\",\\n              \\"departure_time\\": \\"2023-03-10 07:55:00\\",\\n              \\"arrival_time\\": \\"2023-03-10 10:40:00\\",\\n              \\"code_share\\": false,\\n              \\"departure_terminal\\": \\"T2\\",\\n              \\"arrival_terminal\\": \\"T1\\",\\n              \\"equip_type\\": \\"32Q\\",\\n              \\"cabin\\": \\"V\\",\\n              \\"cabin_class\\": \\"ALL_CABIN\\",\\n              \\"availability\\": \\"7\\",\\n              \\"stop_city_list\\": \\"\\\\\\"\\\\\\"\\",\\n              \\"stop_quantity\\": 0,\\n              \\"flight_duration\\": 165\\n            }\\n          ]\\n        }\\n      ],\\n      \\"segment_baggage_mapping_list\\": [\\n        {\\n          \\"segment_id_list\\": [\\n            \\"HO1295-PVG-MFM-20230310\\\\n\\"\\n          ],\\n          \\"passenger_baggage_allowance_mapping\\": {\\n            \\"key\\": {\\n              \\"baggage_amount\\": 1,\\n              \\"baggage_weight\\": 10,\\n              \\"baggage_weight_unit\\": \\"kg\\",\\n              \\"is_all_weight\\": true,\\n              \\"carry_on_amount\\": 1,\\n              \\"carry_on_weight\\": 10,\\n              \\"carry_on_weight_unit\\": \\"kg\\",\\n              \\"is_all_carry_on_weight\\": true\\n            }\\n          }\\n        }\\n      ],\\n      \\"segment_refund_change_rule_mapping_list\\": [\\n        {\\n          \\"segment_id_list\\": [\\n            \\"HO1295-PVG-MFM-20230310\\"\\n          ],\\n          \\"refund_change_rule_map\\": {\\n            \\"key\\": {\\n              \\"refund_rule_all_unused_list\\": [\\n                {\\n                  \\"type\\": 1,\\n                  \\"time_unit\\": \\"hour\\",\\n                  \\"rule_start_time\\": 36,\\n                  \\"rule_end_time\\": 12,\\n                  \\"can_refund\\": true,\\n                  \\"refund_fee\\": 10,\\n                  \\"can_return_all_tax\\": true,\\n                  \\"return_part_tax_fee\\": 10\\n                }\\n              ],\\n              \\"refund_rule_part_unused_list\\": [\\n                {\\n                  \\"type\\": 0,\\n                  \\"time_unit\\": \\"hour\\",\\n                  \\"rule_start_time\\": 36,\\n                  \\"rule_end_time\\": 12,\\n                  \\"can_refund\\": true,\\n                  \\"refund_fee\\": 20,\\n                  \\"can_return_all_tax\\": false,\\n                  \\"return_part_tax_fee\\": 30\\n                }\\n              ],\\n              \\"change_rule_in_unused_list\\": [\\n                {\\n                  \\"type\\": 2,\\n                  \\"time_unit\\": \\"hour\\",\\n                  \\"rule_start_time\\": 36,\\n                  \\"rule_end_time\\": 12,\\n                  \\"can_change\\": true,\\n                  \\"change_fee\\": 10\\n                }\\n              ],\\n              \\"change_rule_out_unused_list\\": [\\n                {\\n                  \\"type\\": 3,\\n                  \\"time_unit\\": \\"hour\\",\\n                  \\"rule_start_time\\": 36,\\n                  \\"rule_end_time\\": 12,\\n                  \\"can_change\\": true,\\n                  \\"change_fee\\": 10\\n                }\\n              ]\\n            }\\n          }\\n        }\\n      ],\\n      \\"segment_baggage_check_in_info_list\\": [\\n        {\\n          \\"segment_id_list\\": [\\n            \\"HO1295-PVG-MFM-20230310\\\\n\\"\\n          ],\\n          \\"luggage_direct_info_type\\": 1\\n        }\\n      ]\\n    },\\n    \\"is_changed\\": true,\\n    \\"original_price_info\\": {\\n      \\"adult_tax\\": 20,\\n      \\"child_tax\\": 20,\\n      \\"infant_tax\\": 20,\\n      \\"adult_price\\": 200,\\n      \\"child_price\\": 200,\\n      \\"infant_price\\": 200\\n    },\\n    \\"changed_price_info\\": {\\n      \\"adult_tax\\": 10,\\n      \\"child_tax\\": 10,\\n      \\"infant_tax\\": 10,\\n      \\"adult_price\\": 100,\\n      \\"child_price\\": 100,\\n      \\"infant_price\\": 100\\n    },\\n    \\"remain_seats\\": \\"A\\"\\n  },\\n  \\"error_data\\": \\"null\\"\\n}","type":"json"}]',
      'title' => 'Pricing',
    ),
    'Book' => 
    array (
      'summary' => '预定生单。',
      'path' => '/airticket/v1/trade/action-book',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'https',
        1 => 'http',
      ),
      'security' => 
      array (
        0 => 
        array (
          'accessTokenAuth' => 
          array (
          ),
        ),
      ),
      'deprecated' => false,
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'solution_id',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => 'solution_id',
            'description' => 'solution_id',
            'type' => 'string',
            'required' => true,
            'example' => 'eJwz8DeySEo0NjQ01TU3TU7TNTFINNO1SE5O0jVKM0hKNjEwTElLNYwz0A32cNT1dfPVNTIwMjYwNjRQ8/A3NLI01Q0Ic0cRBwBVFxJJ',
          ),
        ),
        1 => 
        array (
          'name' => 'out_order_num',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '外部订单号',
            'description' => '外部订单号',
            'type' => 'string',
            'required' => true,
            'example' => 'x091-2023-0220-j-0001',
          ),
        ),
        2 => 
        array (
          'name' => 'contact',
          'in' => 'formData',
          'style' => 'json',
          'schema' => 
          array (
            'title' => '联系信息',
            'description' => '联系信息',
            'type' => 'object',
            'properties' => 
            array (
              'last_name' => 
              array (
                'title' => '姓',
                'description' => '姓',
                'type' => 'string',
                'required' => false,
                'example' => 'ZHANG',
              ),
              'first_name' => 
              array (
                'title' => '名',
                'description' => '名',
                'type' => 'string',
                'required' => false,
                'example' => 'SAN',
              ),
              'mobile_phone_num' => 
              array (
                'title' => '手机号',
                'description' => '手机号',
                'type' => 'string',
                'required' => false,
                'example' => '183******96',
              ),
              'mobile_country_code' => 
              array (
                'title' => '国家区位码',
                'description' => '国家区位码',
                'type' => 'string',
                'required' => false,
                'example' => '86',
              ),
              'email' => 
              array (
                'title' => '邮件地址',
                'description' => '邮件地址',
                'type' => 'string',
                'required' => false,
                'example' => 'gao******@gmail.com',
              ),
            ),
            'required' => true,
          ),
        ),
        3 => 
        array (
          'name' => 'passenger_list',
          'in' => 'formData',
          'style' => 'json',
          'schema' => 
          array (
            'title' => '乘机人列表',
            'description' => '乘机人列表',
            'type' => 'array',
            'items' => 
            array (
              'description' => 'passenger',
              'type' => 'object',
              'properties' => 
              array (
                'last_name' => 
                array (
                  'title' => '姓',
                  'description' => '姓',
                  'type' => 'string',
                  'required' => true,
                  'example' => 'ZHANG',
                ),
                'first_name' => 
                array (
                  'title' => '名',
                  'description' => '名',
                  'type' => 'string',
                  'required' => true,
                  'example' => 'SAN',
                ),
                'birthday' => 
                array (
                  'title' => '生日 yyyyMMdd',
                  'description' => '生日 yyyyMMdd',
                  'type' => 'string',
                  'required' => false,
                  'example' => '20200320',
                ),
                'type' => 
                array (
                  'title' => '乘客类型 0:通成人; 1:儿童; 8:婴儿',
                  'description' => '乘客类型 0:通成人; 1:儿童; 8:婴儿',
                  'type' => 'integer',
                  'format' => 'int32',
                  'required' => true,
                  'example' => '0',
                ),
                'mobile_phone_number' => 
                array (
                  'title' => '手机号',
                  'description' => '手机号',
                  'type' => 'string',
                  'required' => true,
                  'example' => '183******95',
                ),
                'mobile_country_code' => 
                array (
                  'title' => '手机号-国家码',
                  'description' => '手机号-国家码',
                  'type' => 'string',
                  'required' => true,
                  'example' => '86',
                ),
                'gender' => 
                array (
                  'title' => '性别 0:MALE; 1:FEMALE',
                  'description' => '性别 0:MALE; 1:FEMALE',
                  'type' => 'integer',
                  'format' => 'int32',
                  'required' => false,
                  'example' => '0',
                ),
                'nationality' => 
                array (
                  'title' => '国籍二字码',
                  'description' => '国籍，二字码',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'CN',
                ),
                'credential' => 
                array (
                  'title' => '证件',
                  'description' => '证件',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'cert_issue_place' => 
                    array (
                      'title' => '签发地，二字码',
                      'description' => '签发地，二字码',
                      'type' => 'string',
                      'required' => false,
                      'example' => 'CN',
                    ),
                    'credential_num' => 
                    array (
                      'title' => '证件号',
                      'description' => '证件号',
                      'type' => 'string',
                      'required' => false,
                      'example' => 'E1***5674',
                    ),
                    'expire_date' => 
                    array (
                      'title' => '证件过期时间',
                      'description' => '证件过期时间',
                      'type' => 'string',
                      'required' => false,
                      'example' => '20290101',
                    ),
                    'credential_type' => 
                    array (
                      'title' => '证件类型 0:身份证; 1:护照; 2:学生证; 3:军人证; 4:回乡证; 5:台胞证; 6:港澳通行证; 7:国际海员; 8:外国人永久居留证; 10:警官证; 11:士兵证; 12:台湾通行证; 13:入台证; 14:户口簿; 15:出生证明; 16:驾照; 17:港澳居民居住证; 18:台湾居民居住证; 19:无证件',
                      'description' => '证件类型 0:身份证; 1:护照; 2:学生证; 3:军人证; 4:回乡证; 5:台胞证; 6:港澳通行证; 7:国际海员; 8:外国人永久居留证; 10:警官证; 11:士兵证; 12:Taiwan通行证; 13:入台证; 14:户口簿; 15:出生证明; 16:驾照; 17:港澳居民居住证; 18:Taiwan居民居住证',
                      'type' => 'integer',
                      'format' => 'int32',
                      'required' => true,
                      'example' => '1',
                    ),
                  ),
                  'required' => false,
                ),
              ),
              'required' => false,
            ),
            'required' => true,
          ),
        ),
        4 => 
        array (
          'name' => 'passenger_ancillary_purchase_map_list',
          'in' => 'formData',
          'style' => 'json',
          'schema' => 
          array (
            'title' => '乘机人-辅营购买关系',
            'description' => '乘机人-辅营购买关系',
            'type' => 'array',
            'items' => 
            array (
              'description' => '元素',
              'type' => 'object',
              'properties' => 
              array (
                'passenger_list' => 
                array (
                  'title' => '购买统一辅营的乘机人列表',
                  'description' => '购买统一辅营的乘机人列表',
                  'type' => 'array',
                  'items' => 
                  array (
                    'description' => 'passenger',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'last_name' => 
                      array (
                        'title' => '姓',
                        'description' => '姓',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'ZHANG',
                      ),
                      'first_name' => 
                      array (
                        'title' => '名',
                        'description' => '名',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'SAN',
                      ),
                      'birthday' => 
                      array (
                        'title' => '生日 yyyyMMdd',
                        'description' => '生日 yyyyMMdd',
                        'type' => 'string',
                        'required' => false,
                        'example' => '20020320',
                      ),
                      'type' => 
                      array (
                        'title' => '乘客类型 0:通成人; 1:儿童; 8:婴儿',
                        'description' => '乘客类型 0:通成人; 1:儿童; 8:婴儿',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'example' => '0',
                      ),
                      'mobile_phone_number' => 
                      array (
                        'title' => '手机号',
                        'description' => '手机号',
                        'type' => 'string',
                        'required' => true,
                        'example' => '182******92',
                      ),
                      'mobile_country_code' => 
                      array (
                        'title' => '手机号-国家码',
                        'description' => '手机号-国家码',
                        'type' => 'string',
                        'required' => true,
                        'example' => '86',
                      ),
                      'gender' => 
                      array (
                        'title' => '性别 0:MALE; 1:FEMALE',
                        'description' => '性别 0:MALE; 1:FEMALE',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '1',
                      ),
                      'nationality' => 
                      array (
                        'title' => '国籍二字码',
                        'description' => '国籍',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'CN',
                      ),
                      'credential' => 
                      array (
                        'title' => '证件',
                        'description' => '证件',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'cert_issue_place' => 
                          array (
                            'title' => '签发地，二字码',
                            'description' => '签发地，二字码',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'CN',
                          ),
                          'credential_num' => 
                          array (
                            'title' => '证件号',
                            'description' => '证件号',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'E1***5673',
                          ),
                          'expire_date' => 
                          array (
                            'title' => '证件过期时间',
                            'description' => '证件过期时间',
                            'type' => 'string',
                            'required' => false,
                            'example' => '20290102',
                          ),
                          'credential_type' => 
                          array (
                            'title' => '证件类型 0:身份证; 1:护照; 2:学生证; 3:军人证; 4:回乡证; 5:台胞证; 6:港澳通行证; 7:国际海员; 8:外国人永久居留证; 10:警官证; 11:士兵证; 12:台湾通行证; 13:入台证; 14:户口簿; 15:出生证明; 16:驾照; 17:港澳居民居住证; 18:台湾居民居住证; 19:无证件',
                            'description' => '证件类型 0:身份证; 1:护照; 2:学生证; 3:军人证; 4:回乡证; 5:台胞证; 6:港澳通行证; 7:国际海员; 8:外国人永久居留证; 10:警官证; 11:士兵证; 12:Taiwan通行证; 13:入台证; 14:户口簿; 15:出生证明; 16:驾照; 17:港澳居民居住证; 18:Taiwan居民居住证',
                            'type' => 'integer',
                            'format' => 'int32',
                            'required' => true,
                            'example' => '1',
                          ),
                        ),
                        'required' => false,
                      ),
                    ),
                    'required' => false,
                  ),
                  'required' => false,
                ),
                'book_ancillary_req_item' => 
                array (
                  'title' => '辅营对象',
                  'description' => '生单入参辅营对象',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'ancillary_id' => 
                    array (
                      'title' => '辅营商品ID',
                      'description' => '辅营商品ID',
                      'type' => 'string',
                      'required' => false,
                      'example' => 'MDY2NTAxLCJleHAiOjE2NxNzM3MDEsIm5ix',
                    ),
                    'ancillary_type' => 
                    array (
                      'title' => '辅营产品类型 当前支持 4:付费行李',
                      'description' => '辅营产品类型 当前支持 4:付费行李，未来会扩展',
                      'type' => 'integer',
                      'format' => 'int32',
                      'required' => false,
                      'example' => '4',
                    ),
                  ),
                  'required' => false,
                ),
              ),
              'required' => false,
            ),
            'required' => false,
          ),
        ),
        5 => 
        array (
          'name' => 'x-acs-airticket-access-token',
          'in' => 'header',
          'schema' => 
          array (
            'title' => 'access_token',
            'description' => 'access_token',
            'type' => 'string',
            'required' => true,
            'example' => 'eyJhbGciOiJSUzI1NiIsImtpZCI6InN1ZXpfa2V5aWQifQ.eyJqdGkiOiJCQldMaWIzN0VxbC0xMjhhR2N5elJ3IiwiaWF0IjoxNjc3MDY2NTAxLCJleHAiOjE2NzcwNzM3MDEsIm5iZiI6MTY3NzA2NjQ0MX0.AF0DxsZK4Edyg0C6ObRQFUo36R1VYrb5IYmak25TmL1OfR5RkIUc3PpqFuQKNLKXf5fOtVQaKjaexzwodVeWZQDKEG_RPt_Ybb99EnEm6vPKs6e3pWFbKiBq71WleLHhVrdFb4YPowRKjc7bG0jyGUxiQ2iXy0RWDj9tIjfI-KEdzNp5oVnX7j4p3H12DwQrRPmd1nz3BciAQNINvDpzqusuIUw8JXyLFCz838Y0NhwB1_bYZyctxRLSzrGZuI5rrWtItgupqMsOlJ3RNy1QrIbQ2g6nPmzl-atOqcQ4Nw0HeDLR8dhM1OsIcFLbKXBUtwXofflhzAQrkDxhwYiXii',
          ),
        ),
        6 => 
        array (
          'name' => 'x-acs-airticket-language',
          'in' => 'header',
          'schema' => 
          array (
            'title' => '多语言 默认取买家账号配置',
            'description' => '多语言 默认取买家账号配置',
            'type' => 'string',
            'required' => false,
            'example' => 'en_US',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'PopBaseRes<BookRes, BookRes>',
            'description' => 'PopBaseRes<BookRes, Object>',
            'type' => 'object',
            'properties' => 
            array (
              'status' => 
              array (
                'title' => 'http 请求成功，status 值均为 200',
                'description' => 'http 请求成功，status 值均为 200',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'error_code' => 
              array (
                'title' => '业务错误码',
                'description' => '业务错误码',
                'type' => 'string',
                'example' => 'null',
              ),
              'error_msg' => 
              array (
                'title' => '错误信息',
                'description' => '错误信息',
                'type' => 'string',
                'example' => 'null',
              ),
              'success' => 
              array (
                'title' => '是否正确',
                'description' => '是否正确',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'RequestId' => 
              array (
                'title' => '请求 RequestId',
                'description' => '请求 RequestId',
                'type' => 'string',
                'example' => '51593418-8C73-5E47-8BA8-3F1D4A00CC0B',
              ),
              'data' => 
              array (
                'title' => '正确处理返回数据',
                'description' => '正确处理返回数据',
                'type' => 'object',
                'properties' => 
                array (
                  'order_list' => 
                  array (
                    'title' => '订单信息列表',
                    'description' => '订单信息列表',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '订单号列表',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'order_num' => 
                        array (
                          'title' => '订单号',
                          'description' => '订单号',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '4966***617111',
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'error_data' => 
              array (
                'title' => '错误处理携带数据',
                'description' => '错误处理携带数据',
                'type' => 'object',
                'properties' => 
                array (
                  'order_list' => 
                  array (
                    'title' => '订单信息列表',
                    'description' => '订单信息列表，相同入参重复 Book 时，若已经 Book 成功，会携带订单号返回。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '订单号列表',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'order_num' => 
                        array (
                          'title' => '订单号',
                          'description' => '订单号',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '4966***617111',
                        ),
                      ),
                    ),
                  ),
                ),
                'example' => 'null',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"status\\": 200,\\n  \\"error_code\\": \\"null\\",\\n  \\"error_msg\\": \\"null\\",\\n  \\"success\\": true,\\n  \\"RequestId\\": \\"51593418-8C73-5E47-8BA8-3F1D4A00CC0B\\",\\n  \\"data\\": {\\n    \\"order_list\\": [\\n      {\\n        \\"order_num\\": 0\\n      }\\n    ]\\n  },\\n  \\"error_data\\": {\\n    \\"order_list\\": [\\n      {\\n        \\"order_num\\": 0\\n      }\\n    ]\\n  }\\n}","type":"json"}]',
      'title' => 'Book',
    ),
    'TicketingCheck' => 
    array (
      'summary' => 'Ticketing 前检查，该接口是可选使用。',
      'path' => '/airticket/v1/trade/action-ticketing-check',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'https',
        1 => 'http',
      ),
      'security' => 
      array (
        0 => 
        array (
          'accessTokenAuth' => 
          array (
          ),
        ),
      ),
      'deprecated' => false,
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'order_num',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '订单号',
            'description' => '订单号',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'example' => '496***2617111',
          ),
        ),
        1 => 
        array (
          'name' => 'x-acs-airticket-access-token',
          'in' => 'header',
          'schema' => 
          array (
            'title' => 'access_token',
            'description' => 'access_token',
            'type' => 'string',
            'required' => true,
            'example' => 'eyJhbGciOiJSUzI1NiIsImtpZCI6InN1ZXpfa2V5aWQifQ.eyJqdGkiOiJCQldMaWIzN0VxbC0xMjhhR2N5elJ3IiwiaWF0IjoxNjc3MDY2NTAxLCJleHAiOjE2NzcwNzM3MDEsIm5iZiI6MTY3NzA2NjQ0MX0.AF0DxsZK4Edyg0C6ObRQFUo36R1VYrb5IYmak25TmL1OfR5RkIUc3PpqFuQKNLKXf5fOtVQaKjaexzwodVeWZQDKEG_RPt_Ybb99EnEm6vPKs6e3pWFbKiBq71WleLHhVrdFb4YPowRKjc7bG0jyGUxiQ2iXy0RWDj9tIjfI-KEdzNp5oVnX7j4p3H12DwQrRPmd1nz3BciAQNINvDpzqusuIUw8JXyLFCz838Y0NhwB1_bYZyctxRLSzrGZuI5rrWtItgupqMsOlJ3RNy1QrIbQ2g6nPmzl-atOqcQ4Nw0HeDLR8dhM1OsIcFLbKXBUtwXofflhzAQrkDxhwYiXii',
          ),
        ),
        2 => 
        array (
          'name' => 'x-acs-airticket-language',
          'in' => 'header',
          'schema' => 
          array (
            'title' => '多语言 默认取买家账号配置',
            'description' => '多语言 默认取买家账号配置',
            'type' => 'string',
            'required' => false,
            'example' => 'en_US',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'PopBaseRes<TicketingCheckRes, Object>',
            'description' => 'PopBaseRes<TicketingCheckRes, Object>',
            'type' => 'object',
            'properties' => 
            array (
              'status' => 
              array (
                'title' => 'http 请求成功，status 值均为 200',
                'description' => 'http 请求成功，status 值均为 200',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'error_code' => 
              array (
                'title' => '业务错误码',
                'description' => '业务错误码',
                'type' => 'string',
                'example' => 'null',
              ),
              'error_msg' => 
              array (
                'title' => '错误信息',
                'description' => '错误信息',
                'type' => 'string',
                'example' => 'null',
              ),
              'success' => 
              array (
                'title' => '是否正确',
                'description' => '是否正确',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'RequestId' => 
              array (
                'title' => '请求 RequestId',
                'description' => '请求 RequestId',
                'type' => 'string',
                'example' => '51593418-8C73-5E47-8BA8-3F1D4A00CC0B',
              ),
              'data' => 
              array (
                'title' => '正确处理返回数据',
                'description' => '正确处理返回数据',
                'type' => 'object',
                'properties' => 
                array (
                  'order_num' => 
                  array (
                    'title' => '订单号',
                    'description' => '订单号',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '496***2617111',
                  ),
                ),
              ),
              'error_data' => 
              array (
                'title' => '错误处理携带数据',
                'description' => '错误处理携带数据',
                'type' => 'any',
                'example' => 'null',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"status\\": 200,\\n  \\"error_code\\": \\"null\\",\\n  \\"error_msg\\": \\"null\\",\\n  \\"success\\": true,\\n  \\"RequestId\\": \\"51593418-8C73-5E47-8BA8-3F1D4A00CC0B\\",\\n  \\"data\\": {\\n    \\"order_num\\": 0\\n  },\\n  \\"error_data\\": \\"null\\"\\n}","type":"json"}]',
      'title' => 'TicketingCheck',
      'description' => 'Ticketing 前检查，该接口是可选使用。',
    ),
    'Ticketing' => 
    array (
      'summary' => '支付出票。',
      'path' => '/airticket/v1/trade/action-ticketing',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'https',
        1 => 'http',
      ),
      'security' => 
      array (
        0 => 
        array (
          'accessTokenAuth' => 
          array (
          ),
        ),
      ),
      'deprecated' => false,
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'order_num',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '订单号',
            'description' => '订单号',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'example' => '496***2617111',
          ),
        ),
        1 => 
        array (
          'name' => 'x-acs-airticket-access-token',
          'in' => 'header',
          'schema' => 
          array (
            'title' => 'access_token',
            'description' => 'access_token',
            'type' => 'string',
            'required' => true,
            'example' => 'eyJhbGciOiJSUzI1NiIsImtpZCI6InN1ZXpfa2V5aWQifQ.eyJqdGkiOiJCQldMaWIzN0VxbC0xMjhhR2N5elJ3IiwiaWF0IjoxNjc3MDY2NTAxLCJleHAiOjE2NzcwNzM3MDEsIm5iZiI6MTY3NzA2NjQ0MX0.AF0DxsZK4Edyg0C6ObRQFUo36R1VYrb5IYmak25TmL1OfR5RkIUc3PpqFuQKNLKXf5fOtVQaKjaexzwodVeWZQDKEG_RPt_Ybb99EnEm6vPKs6e3pWFbKiBq71WleLHhVrdFb4YPowRKjc7bG0jyGUxiQ2iXy0RWDj9tIjfI-KEdzNp5oVnX7j4p3H12DwQrRPmd1nz3BciAQNINvDpzqusuIUw8JXyLFCz838Y0NhwB1_bYZyctxRLSzrGZuI5rrWtItgupqMsOlJ3RNy1QrIbQ2g6nPmzl-atOqcQ4Nw0HeDLR8dhM1OsIcFLbKXBUtwXofflhzAQrkDxhwYiXii',
          ),
        ),
        2 => 
        array (
          'name' => 'x-acs-airticket-language',
          'in' => 'header',
          'schema' => 
          array (
            'title' => '多语言 默认取买家账号配置',
            'description' => '多语言 默认取买家账号配置',
            'type' => 'string',
            'required' => false,
            'example' => 'en_US',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'PopBaseRes<TicketingRes, Object>',
            'description' => 'PopBaseRes<TicketingRes, Object>',
            'type' => 'object',
            'properties' => 
            array (
              'status' => 
              array (
                'title' => 'http 请求成功，status 值均为 200',
                'description' => 'http 请求成功，status 值均为 200',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'error_code' => 
              array (
                'title' => '业务错误码',
                'description' => '业务错误码',
                'type' => 'string',
                'example' => 'null',
              ),
              'error_msg' => 
              array (
                'title' => '错误信息',
                'description' => '错误信息',
                'type' => 'string',
                'example' => 'null',
              ),
              'success' => 
              array (
                'title' => '是否正确',
                'description' => '是否正确',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'RequestId' => 
              array (
                'title' => '请求 RequestId',
                'description' => '请求 RequestId',
                'type' => 'string',
                'example' => '51593418-8C73-5E47-8BA8-3F1D4A00CC0B',
              ),
              'data' => 
              array (
                'title' => '正确处理返回数据',
                'description' => '正确处理返回数据',
                'type' => 'object',
                'properties' => 
                array (
                  'order_num' => 
                  array (
                    'title' => '订单号',
                    'description' => '订单号',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '496***2617111
',
                  ),
                  'transaction_no' => 
                  array (
                    'title' => '交易流水号',
                    'description' => '交易流水号',
                    'type' => 'string',
                    'example' => 'hkduendkd-2023-dj0',
                  ),
                ),
              ),
              'error_data' => 
              array (
                'title' => '错误处理携带数据',
                'description' => '错误处理携带数据',
                'type' => 'any',
                'example' => 'null',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"status\\": 200,\\n  \\"error_code\\": \\"null\\",\\n  \\"error_msg\\": \\"null\\",\\n  \\"success\\": true,\\n  \\"RequestId\\": \\"51593418-8C73-5E47-8BA8-3F1D4A00CC0B\\",\\n  \\"data\\": {\\n    \\"order_num\\": 0,\\n    \\"transaction_no\\": \\"hkduendkd-2023-dj0\\"\\n  },\\n  \\"error_data\\": \\"null\\"\\n}","type":"json"}]',
      'title' => 'Ticketing',
    ),
    'Cancel' => 
    array (
      'summary' => '未支付取消。',
      'path' => '/airticket/v1/trade/action-cancel',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'https',
        1 => 'http',
      ),
      'security' => 
      array (
        0 => 
        array (
          'accessTokenAuth' => 
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
          'name' => 'order_num',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '订单号',
            'description' => '订单号',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'example' => '496***2617111',
          ),
        ),
        1 => 
        array (
          'name' => 'x-acs-airticket-access-token',
          'in' => 'header',
          'schema' => 
          array (
            'title' => 'access_token',
            'description' => 'access_token',
            'type' => 'string',
            'required' => true,
            'example' => 'eyJhbGciOiJSUzI1NiIsImtpZCI6InN1ZXpfa2V5aWQifQ.eyJqdGkiOiJCQldMaWIzN0VxbC0xMjhhR2N5elJ3IiwiaWF0IjoxNjc3MDY2NTAxLCJleHAiOjE2NzcwNzM3MDEsIm5iZiI6MTY3NzA2NjQ0MX0.AF0DxsZK4Edyg0C6ObRQFUo36R1VYrb5IYmak25TmL1OfR5RkIUc3PpqFuQKNLKXf5fOtVQaKjaexzwodVeWZQDKEG_RPt_Ybb99EnEm6vPKs6e3pWFbKiBq71WleLHhVrdFb4YPowRKjc7bG0jyGUxiQ2iXy0RWDj9tIjfI-KEdzNp5oVnX7j4p3H12DwQrRPmd1nz3BciAQNINvDpzqusuIUw8JXyLFCz838Y0NhwB1_bYZyctxRLSzrGZuI5rrWtItgupqMsOlJ3RNy1QrIbQ2g6nPmzl-atOqcQ4Nw0HeDLR8dhM1OsIcFLbKXBUtwXofflhzAQrkDxhwYiXii',
          ),
        ),
        2 => 
        array (
          'name' => 'x-acs-airticket-language',
          'in' => 'header',
          'schema' => 
          array (
            'title' => '多语言 默认取买家账号配置',
            'description' => '多语言 默认取买家账号配置',
            'type' => 'string',
            'required' => false,
            'example' => 'en_US',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'PopBaseRes<CancelRes, Object>',
            'description' => 'PopBaseRes<CancelRes, Object>',
            'type' => 'object',
            'properties' => 
            array (
              'status' => 
              array (
                'title' => 'http 请求成功，status 值均为 200',
                'description' => 'http 请求成功，status 值均为 200',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'error_code' => 
              array (
                'title' => '业务错误码',
                'description' => '业务错误码',
                'type' => 'string',
                'example' => 'null',
              ),
              'error_msg' => 
              array (
                'title' => '错误信息',
                'description' => '错误信息',
                'type' => 'string',
                'example' => 'null',
              ),
              'success' => 
              array (
                'title' => '是否正确',
                'description' => '是否正确',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'RequestId' => 
              array (
                'title' => '请求 RequestId',
                'description' => '请求 RequestId',
                'type' => 'string',
                'example' => '51593418-8C73-5E47-8BA8-3F1D4A00CC0B',
              ),
              'data' => 
              array (
                'title' => '正确处理返回数据',
                'description' => '正确处理返回数据',
                'type' => 'object',
                'properties' => 
                array (
                  'order_num' => 
                  array (
                    'title' => '订单号',
                    'description' => '订单号',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '496***2617111
',
                  ),
                ),
              ),
              'error_data' => 
              array (
                'title' => '错误处理携带数据',
                'description' => '错误处理携带数据',
                'type' => 'any',
                'example' => 'null',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"status\\": 200,\\n  \\"error_code\\": \\"null\\",\\n  \\"error_msg\\": \\"null\\",\\n  \\"success\\": true,\\n  \\"RequestId\\": \\"51593418-8C73-5E47-8BA8-3F1D4A00CC0B\\",\\n  \\"data\\": {\\n    \\"order_num\\": 0\\n  },\\n  \\"error_data\\": \\"null\\"\\n}","type":"json"}]',
      'title' => 'Cancel',
    ),
    'OrderDetail' => 
    array (
      'summary' => '订单详情。',
      'path' => '/airticket/v1/trade/order-detail',
      'methods' => 
      array (
        0 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'https',
        1 => 'http',
      ),
      'security' => 
      array (
        0 => 
        array (
          'accessTokenAuth' => 
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
          'name' => 'order_num',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '订单号',
            'description' => '订单号',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '4966***617111',
          ),
        ),
        1 => 
        array (
          'name' => 'out_order_num',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '外部订单号',
            'description' => '外部订单号',
            'type' => 'string',
            'required' => false,
            'example' => 'x091-2023-0220-j-0001',
          ),
        ),
        2 => 
        array (
          'name' => 'x-acs-airticket-access-token',
          'in' => 'header',
          'schema' => 
          array (
            'title' => 'access_token',
            'description' => 'access_token',
            'type' => 'string',
            'required' => true,
            'example' => 'eyJhbGciOiJSUzI1NiIsImtpZCI6InN1ZXpfa2V5aWQifQ.eyJqdGkiOiJCQldMaWIzN0VxbC0xMjhhR2N5elJ3IiwiaWF0IjoxNjc3MDY2NTAxLCJleHAiOjE2NzcwNzM3MDEsIm5iZiI6MTY3NzA2NjQ0MX0.AF0DxsZK4Edyg0C6ObRQFUo36R1VYrb5IYmak25TmL1OfR5RkIUc3PpqFuQKNLKXf5fOtVQaKjaexzwodVeWZQDKEG_RPt_Ybb99EnEm6vPKs6e3pWFbKiBq71WleLHhVrdFb4YPowRKjc7bG0jyGUxiQ2iXy0RWDj9tIjfI-KEdzNp5oVnX7j4p3H12DwQrRPmd1nz3BciAQNINvDpzqusuIUw8JXyLFCz838Y0NhwB1_bYZyctxRLSzrGZuI5rrWtItgupqMsOlJ3RNy1QrIbQ2g6nPmzl-atOqcQ4Nw0HeDLR8dhM1OsIcFLbKXBUtwXofflhzAQrkDxhwYiXii',
          ),
        ),
        3 => 
        array (
          'name' => 'x-acs-airticket-language',
          'in' => 'header',
          'schema' => 
          array (
            'title' => '多语言 默认取买家账号配置',
            'description' => '多语言 默认取买家账号配置',
            'type' => 'string',
            'required' => false,
            'example' => 'en_US',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'PopBaseRes<OrderDetailRes, Object>',
            'description' => 'PopBaseRes<OrderDetailRes, Object>',
            'type' => 'object',
            'properties' => 
            array (
              'status' => 
              array (
                'title' => 'http 请求成功，status 值均为 200',
                'description' => 'http 请求成功，status 值均为 200',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'error_code' => 
              array (
                'title' => '业务错误码',
                'description' => '业务错误码',
                'type' => 'string',
                'example' => 'null',
              ),
              'error_msg' => 
              array (
                'title' => '错误信息',
                'description' => '错误信息',
                'type' => 'string',
                'example' => 'null',
              ),
              'success' => 
              array (
                'title' => '是否正确',
                'description' => '是否正确',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'RequestId' => 
              array (
                'title' => '请求 RequestId',
                'description' => '请求 RequestId',
                'type' => 'string',
                'example' => '51593418-8C73-5E47-8BA8-3F1D4A00CC0B',
              ),
              'data' => 
              array (
                'title' => '正确处理返回数据',
                'description' => '正确处理返回数据',
                'type' => 'object',
                'properties' => 
                array (
                  'refund_change_rule_map' => 
                  array (
                    'title' => '乘客类型-退改规则',
                    'description' => '乘客类型-退改规则',
                    'type' => 'object',
                    'additionalProperties' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'refund_rule_all_unused_list' => 
                        array (
                          'title' => '全程未使用退票规则',
                          'description' => '全程未使用退票规则',
                          'type' => 'array',
                          'items' => 
                          array (
                            'type' => 'object',
                            'properties' => 
                            array (
                              'type' => 
                              array (
                                'title' => '该退票规则适用航程使用类型 0:全程未使用; 1:部分未使用',
                                'description' => '该退票规则适用航程使用类型 0:全程未使用; 1:部分未使用',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '0',
                              ),
                              'time_unit' => 
                              array (
                                'title' => '时间单位：day/hour',
                                'description' => '时间单位：day/hour',
                                'type' => 'string',
                                'example' => 'hour',
                              ),
                              'rule_start_time' => 
                              array (
                                'title' => '该退票规则适用于的退票时间区间开始时间，单位（天/小时）',
                                'description' => '该退票规则适用于的退票时间区间开始时间，单位（天/小时）',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '36',
                              ),
                              'rule_end_time' => 
                              array (
                                'title' => '该退票规则适用于的退票时间区间结束时间，单位（天/小时）',
                                'description' => '该退票规则适用于的退票时间区间结束时间，单位（天/小时）',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '12',
                              ),
                              'can_refund' => 
                              array (
                                'title' => '起飞前X-Y小时(天) 可否退票',
                                'description' => '起飞前X-Y小时(天) 可否退票',
                                'type' => 'boolean',
                                'example' => 'true',
                              ),
                              'refund_fee' => 
                              array (
                                'title' => '起飞前X-Y小时(天) 退票手续费',
                                'description' => '起飞前X-Y小时(天) 退票手续费',
                                'type' => 'number',
                                'format' => 'double',
                                'example' => '200',
                              ),
                              'can_return_all_tax' => 
                              array (
                                'title' => '起飞前X-Y小时(天) 是否全额退税',
                                'description' => '起飞前X-Y小时(天) 是否全额退税',
                                'type' => 'boolean',
                                'example' => 'true',
                              ),
                              'return_part_tax_fee' => 
                              array (
                                'title' => '起飞前X-Y小时(天) 可部分退税金额',
                                'description' => '起飞前X-Y小时(天) 可部分退税金额',
                                'type' => 'number',
                                'format' => 'double',
                                'example' => '100',
                              ),
                            ),
                            'description' => '元素',
                          ),
                        ),
                        'refund_rule_part_unused_list' => 
                        array (
                          'title' => '部分未使用退票规则',
                          'description' => '部分未使用退票规则',
                          'type' => 'array',
                          'items' => 
                          array (
                            'type' => 'object',
                            'properties' => 
                            array (
                              'type' => 
                              array (
                                'title' => '该退票规则适用航程使用类型 0:全程未使用; 1:部分未使用',
                                'description' => '该退票规则适用航程使用类型 0:全程未使用; 1:部分未使用',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '0',
                              ),
                              'time_unit' => 
                              array (
                                'title' => '时间单位：day/hour',
                                'description' => '时间单位：day/hour',
                                'type' => 'string',
                                'example' => 'hour',
                              ),
                              'rule_start_time' => 
                              array (
                                'title' => '该退票规则适用于的退票时间区间开始时间，单位（天/小时）',
                                'description' => '该退票规则适用于的退票时间区间开始时间，单位（天/小时）',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '36',
                              ),
                              'rule_end_time' => 
                              array (
                                'title' => '该退票规则适用于的退票时间区间结束时间，单位（天/小时）',
                                'description' => '该退票规则适用于的退票时间区间结束时间，单位（天/小时）',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '12',
                              ),
                              'can_refund' => 
                              array (
                                'title' => '起飞前X-Y小时(天) 可否退票',
                                'description' => '起飞前X-Y小时(天) 可否退票',
                                'type' => 'boolean',
                                'example' => 'true',
                              ),
                              'refund_fee' => 
                              array (
                                'title' => '起飞前X-Y小时(天) 退票手续费',
                                'description' => '起飞前X-Y小时(天) 退票手续费',
                                'type' => 'number',
                                'format' => 'double',
                                'example' => '200',
                              ),
                              'can_return_all_tax' => 
                              array (
                                'title' => '起飞前X-Y小时(天) 是否全额退税',
                                'description' => '起飞前X-Y小时(天) 是否全额退税',
                                'type' => 'boolean',
                                'example' => 'true',
                              ),
                              'return_part_tax_fee' => 
                              array (
                                'title' => '起飞前X-Y小时(天) 可部分退税金额',
                                'description' => '起飞前X-Y小时(天) 可部分退税金额',
                                'type' => 'number',
                                'format' => 'double',
                                'example' => '100',
                              ),
                            ),
                            'description' => '元素',
                          ),
                        ),
                        'change_rule_in_unused_list' => 
                        array (
                          'title' => '回程未使用改签规则',
                          'description' => '回程未使用改签规则',
                          'type' => 'array',
                          'items' => 
                          array (
                            'type' => 'object',
                            'properties' => 
                            array (
                              'type' => 
                              array (
                                'title' => '该改签规则适用航程使用类型 2:去程未使用; 3:回程未使用',
                                'description' => '该改签规则适用航程使用类型 2:去程未使用; 3:回程未使用',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '2',
                              ),
                              'time_unit' => 
                              array (
                                'title' => '时间单位：day/hour',
                                'description' => '时间单位：day/hour',
                                'type' => 'string',
                                'example' => 'hour',
                              ),
                              'rule_start_time' => 
                              array (
                                'title' => '该退票规则适用于的退票时间区间开始时间，单位（天/小时）',
                                'description' => '该退票规则适用于的退票时间区间开始时间，单位（天/小时）',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '36',
                              ),
                              'rule_end_time' => 
                              array (
                                'title' => '该退票规则适用于的退票时间区间结束时间，单位（天/小时）',
                                'description' => '该退票规则适用于的退票时间区间结束时间，单位（天/小时）',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '12',
                              ),
                              'can_change' => 
                              array (
                                'title' => '起飞前X-Y小时(天) 可否可以改签',
                                'description' => '起飞前X-Y小时(天) 可否可以改签',
                                'type' => 'boolean',
                                'example' => 'true',
                              ),
                              'change_fee' => 
                              array (
                                'title' => '起飞前X-Y小时(天) 改签费',
                                'description' => '起飞前X-Y小时(天) 改签费',
                                'type' => 'number',
                                'format' => 'double',
                                'example' => '100',
                              ),
                            ),
                            'description' => '元素',
                          ),
                        ),
                        'change_rule_out_unused_list' => 
                        array (
                          'title' => '去程未使用改签规则',
                          'description' => '去程未使用改签规则',
                          'type' => 'array',
                          'items' => 
                          array (
                            'type' => 'object',
                            'properties' => 
                            array (
                              'type' => 
                              array (
                                'title' => '该改签规则适用航程使用类型 2:去程未使用; 3:回程未使用',
                                'description' => '该改签规则适用航程使用类型 2:去程未使用; 3:回程未使用',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '2',
                              ),
                              'time_unit' => 
                              array (
                                'title' => '时间单位：day/hour',
                                'description' => '时间单位：day/hour',
                                'type' => 'string',
                                'example' => 'hour',
                              ),
                              'rule_start_time' => 
                              array (
                                'title' => '该退票规则适用于的退票时间区间开始时间，单位（天/小时）',
                                'description' => '该退票规则适用于的退票时间区间开始时间，单位（天/小时）',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '36',
                              ),
                              'rule_end_time' => 
                              array (
                                'title' => '该退票规则适用于的退票时间区间结束时间，单位（天/小时）',
                                'description' => '该退票规则适用于的退票时间区间结束时间，单位（天/小时）',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '12',
                              ),
                              'can_change' => 
                              array (
                                'title' => '起飞前X-Y小时(天) 可否可以改签',
                                'description' => '起飞前X-Y小时(天) 可否可以改签',
                                'type' => 'boolean',
                                'example' => 'true',
                              ),
                              'change_fee' => 
                              array (
                                'title' => '起飞前X-Y小时(天) 改签费',
                                'description' => '起飞前X-Y小时(天) 改签费',
                                'type' => 'number',
                                'format' => 'double',
                                'example' => '100',
                              ),
                            ),
                            'description' => '元素',
                          ),
                        ),
                      ),
                      'description' => '元素',
                    ),
                  ),
                  'baggage_allowance_map' => 
                  array (
                    'title' => '乘客类型-行李规则',
                    'description' => '乘客类型-行李规则',
                    'type' => 'object',
                    'additionalProperties' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'baggage_amount' => 
                        array (
                          'title' => '托运行李件数',
                          'description' => '托运行李件数',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '1',
                        ),
                        'baggage_weight' => 
                        array (
                          'title' => '托运行李重量',
                          'description' => '托运行李重量',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '10',
                        ),
                        'baggage_weight_unit' => 
                        array (
                          'title' => '托运行李重量单位',
                          'description' => '托运行李重量单位',
                          'type' => 'string',
                          'example' => 'KG',
                        ),
                        'is_all_weight' => 
                        array (
                          'title' => '是否所有托运行李重量',
                          'description' => '是否所有托运行李重量',
                          'type' => 'boolean',
                          'example' => 'true',
                        ),
                        'carry_on_amount' => 
                        array (
                          'title' => '手提行李件数',
                          'description' => '手提行李件数',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '1',
                        ),
                        'carry_on_weight' => 
                        array (
                          'title' => '手提行李重量',
                          'description' => '手提行李重量',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '5',
                        ),
                        'carry_on_weight_unit' => 
                        array (
                          'title' => '手提行李重量单位',
                          'description' => '手提行李重量单位',
                          'type' => 'string',
                          'example' => 'KG',
                        ),
                        'is_all_carry_on_weight' => 
                        array (
                          'title' => '是否所有手提行李重量',
                          'description' => '是否所有手提行李重量',
                          'type' => 'boolean',
                          'example' => 'true',
                        ),
                      ),
                      'description' => '元素',
                    ),
                  ),
                  'solution' => 
                  array (
                    'title' => '航班信息',
                    'description' => '航班信息',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'solution_id' => 
                      array (
                        'title' => 'solution_id',
                        'description' => 'solution_id',
                        'type' => 'string',
                        'example' => 'eJwz8DeySEo0NjQ01TU3TUxxx',
                      ),
                      'adult_price' => 
                      array (
                        'title' => '成人单价',
                        'description' => '成人单价',
                        'type' => 'number',
                        'format' => 'double',
                        'example' => '300',
                      ),
                      'adult_tax' => 
                      array (
                        'title' => '成人税',
                        'description' => '成人税',
                        'type' => 'number',
                        'format' => 'double',
                        'example' => '30',
                      ),
                      'child_price' => 
                      array (
                        'title' => '儿童单价',
                        'description' => '儿童单价',
                        'type' => 'number',
                        'format' => 'double',
                        'example' => '200',
                      ),
                      'child_tax' => 
                      array (
                        'title' => '儿童税',
                        'description' => '儿童税',
                        'type' => 'number',
                        'format' => 'double',
                        'example' => '20',
                      ),
                      'infant_price' => 
                      array (
                        'title' => '婴儿单价',
                        'description' => '婴儿单价',
                        'type' => 'number',
                        'format' => 'double',
                        'example' => '100',
                      ),
                      'infant_tax' => 
                      array (
                        'title' => '婴儿税',
                        'description' => '婴儿税',
                        'type' => 'number',
                        'format' => 'double',
                        'example' => '10',
                      ),
                      'refund_ticket_coupon_description' => 
                      array (
                        'title' => '退票代金券说明',
                        'description' => '退票代金券说明',
                        'type' => 'string',
                        'example' => 'description',
                      ),
                      'product_type_description' => 
                      array (
                        'title' => '产品类型描述',
                        'description' => '产品类型描述',
                        'type' => 'string',
                        'example' => 'description',
                      ),
                      'journey_list' => 
                      array (
                        'title' => '行程',
                        'description' => '行程',
                        'type' => 'array',
                        'items' => 
                        array (
                          'description' => 'journey',
                          'type' => 'object',
                          'properties' => 
                          array (
                            'transfer_count' => 
                            array (
                              'title' => '中转次数',
                              'description' => '中转次数',
                              'type' => 'integer',
                              'format' => 'int32',
                              'example' => '0',
                            ),
                            'segment_list' => 
                            array (
                              'title' => '航段信息',
                              'description' => '航段信息',
                              'type' => 'array',
                              'items' => 
                              array (
                                'description' => 'segment',
                                'type' => 'object',
                                'properties' => 
                                array (
                                  'segment_id' => 
                                  array (
                                    'title' => '航段ID 组成格式:航班号+出发机场+达到机场+起飞日期（MMdd）',
                                    'description' => '航段ID 组成格式:航班号+出发机场+达到机场+起飞日期（MMdd）',
                                    'type' => 'string',
                                    'example' => 'HO1295-PVG-MFM-20230310
',
                                  ),
                                  'departure_airport' => 
                                  array (
                                    'title' => '航班起飞机场三字码(大写)',
                                    'description' => '航班起飞机场三字码(大写)',
                                    'type' => 'string',
                                    'example' => 'PVG',
                                  ),
                                  'arrival_airport' => 
                                  array (
                                    'title' => '航班到达机场三字码(大写)',
                                    'description' => '航班到达机场三字码(大写)',
                                    'type' => 'string',
                                    'example' => 'MFM',
                                  ),
                                  'departure_city' => 
                                  array (
                                    'title' => '航班起飞城市三字码(大写)',
                                    'description' => '航班起飞城市三字码(大写)',
                                    'type' => 'string',
                                    'example' => 'SHA',
                                  ),
                                  'arrival_city' => 
                                  array (
                                    'title' => '航班到达城市三字码(大写)',
                                    'description' => '航班到达城市三字码(大写)',
                                    'type' => 'string',
                                    'example' => 'MFM',
                                  ),
                                  'marketing_flight_no' => 
                                  array (
                                    'title' => '市场方航班号(如：HO1295)',
                                    'description' => '市场方航班号(如：HO1295)',
                                    'type' => 'string',
                                    'example' => 'HO1295',
                                  ),
                                  'marketing_flight_no_int' => 
                                  array (
                                    'title' => '市场方数字航班号（如：1295）',
                                    'description' => '市场方数字航班号（如：1295）',
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'example' => '1295',
                                  ),
                                  'marketing_airline' => 
                                  array (
                                    'title' => '市场方航司(如：HO)',
                                    'description' => '市场方航司(如：HO)',
                                    'type' => 'string',
                                    'example' => 'HO',
                                  ),
                                  'operating_flight_no' => 
                                  array (
                                    'title' => '承运方航班号(如：CX601)',
                                    'description' => '承运方航班号(如：CX601)',
                                    'type' => 'string',
                                    'example' => 'HO1295',
                                  ),
                                  'operating_airline' => 
                                  array (
                                    'title' => '承运方航司(如：CX)',
                                    'description' => '承运方航司(如：CX)',
                                    'type' => 'string',
                                    'example' => 'HO',
                                  ),
                                  'departure_time' => 
                                  array (
                                    'title' => '航班起飞日期时间 字符串格式(yyyy-MM-dd HH:mm:ss)',
                                    'description' => '航班起飞日期时间 字符串格式(yyyy-MM-dd HH:mm:ss)',
                                    'type' => 'string',
                                    'example' => '2023-03-10 07:55:00',
                                  ),
                                  'arrival_time' => 
                                  array (
                                    'title' => '航班到达日期时间 字符串格式(yyyy-MM-dd HH:mm:ss)',
                                    'description' => '航班到达日期时间 字符串格式(yyyy-MM-dd HH:mm:ss)',
                                    'type' => 'string',
                                    'example' => '2023-03-10 10:40:00',
                                  ),
                                  'code_share' => 
                                  array (
                                    'title' => '是否为共享航班',
                                    'description' => '是否为共享航班',
                                    'type' => 'boolean',
                                    'example' => 'false',
                                  ),
                                  'departure_terminal' => 
                                  array (
                                    'title' => '航班出发航站楼',
                                    'description' => '航班出发航站楼',
                                    'type' => 'string',
                                    'example' => 'T2',
                                  ),
                                  'arrival_terminal' => 
                                  array (
                                    'title' => '航班到达航站楼',
                                    'description' => '航班到达航站楼',
                                    'type' => 'string',
                                    'example' => 'T1',
                                  ),
                                  'equip_type' => 
                                  array (
                                    'title' => '机型',
                                    'description' => '机型',
                                    'type' => 'string',
                                    'example' => '32Q',
                                  ),
                                  'cabin' => 
                                  array (
                                    'title' => '舱位',
                                    'description' => '舱位',
                                    'type' => 'string',
                                    'example' => 'V',
                                  ),
                                  'cabin_class' => 
                                  array (
                                    'title' => '舱等',
                                    'description' => '舱等',
                                    'type' => 'string',
                                    'example' => 'Y',
                                  ),
                                  'availability' => 
                                  array (
                                    'title' => '剩余座位数,大于 9 用 A 表示',
                                    'description' => '剩余座位数',
                                    'type' => 'string',
                                    'example' => '7',
                                  ),
                                  'stop_city_list' => 
                                  array (
                                    'title' => '经停城市列表，stopQuantity > 0 时有值，多个用逗号分割',
                                    'description' => '经停城市列表，stopQuantity > 0 时有值，多个用逗号分割',
                                    'type' => 'string',
                                    'example' => 'SEL,HKG',
                                  ),
                                  'stop_quantity' => 
                                  array (
                                    'title' => '经停城市数目',
                                    'description' => '经停城市数目',
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'example' => '0',
                                  ),
                                  'flight_duration' => 
                                  array (
                                    'title' => '飞行时间 单位：分钟',
                                    'description' => '飞行时间 单位：分钟',
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'example' => '165',
                                  ),
                                ),
                              ),
                            ),
                          ),
                        ),
                      ),
                      'segment_baggage_mapping_list' => 
                      array (
                        'title' => '免费行李规则',
                        'description' => '免费行李规则',
                        'type' => 'array',
                        'items' => 
                        array (
                          'description' => '元素',
                          'type' => 'object',
                          'properties' => 
                          array (
                            'segment_id_list' => 
                            array (
                              'title' => '航段ID列表 这些航段ID使用同一个免费行李规则',
                              'description' => '航段ID列表 这些航段ID使用同一个免费行李规则',
                              'type' => 'array',
                              'items' => 
                              array (
                                'description' => 'segment_id',
                                'type' => 'string',
                                'example' => 'HO1295-PVG-MFM-20230310
',
                              ),
                            ),
                            'passenger_baggage_allowance_mapping' => 
                            array (
                              'title' => '乘客类型-免费行李额映射关系 key 取值描述 ADT:普通成人; CHD:儿童; INF:婴儿',
                              'description' => '乘客类型-免费行李额映射关系',
                              'type' => 'object',
                              'additionalProperties' => 
                              array (
                                'type' => 'object',
                                'properties' => 
                                array (
                                  'baggage_amount' => 
                                  array (
                                    'title' => '托运行李件数',
                                    'description' => '托运行李件数',
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'example' => '1',
                                  ),
                                  'baggage_weight' => 
                                  array (
                                    'title' => '托运行李重量',
                                    'description' => '托运行李重量',
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'example' => '10',
                                  ),
                                  'baggage_weight_unit' => 
                                  array (
                                    'title' => '托运行李重量单位',
                                    'description' => '托运行李重量单位',
                                    'type' => 'string',
                                    'example' => 'KG',
                                  ),
                                  'is_all_weight' => 
                                  array (
                                    'title' => '是否所有托运行李重量',
                                    'description' => '是否所有托运行李重量',
                                    'type' => 'boolean',
                                    'example' => 'true',
                                  ),
                                  'carry_on_amount' => 
                                  array (
                                    'title' => '手提行李件数',
                                    'description' => '手提行李件数',
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'example' => '1',
                                  ),
                                  'carry_on_weight' => 
                                  array (
                                    'title' => '手提行李重量',
                                    'description' => '手提行李重量',
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'example' => '5',
                                  ),
                                  'carry_on_weight_unit' => 
                                  array (
                                    'title' => '手提行李重量单位',
                                    'description' => '手提行李重量单位',
                                    'type' => 'string',
                                    'example' => 'KG',
                                  ),
                                  'is_all_carry_on_weight' => 
                                  array (
                                    'title' => '是否所有手提行李重量',
                                    'description' => '是否所有手提行李重量',
                                    'type' => 'boolean',
                                    'example' => 'true',
                                  ),
                                ),
                                'description' => '元素',
                              ),
                            ),
                          ),
                        ),
                      ),
                      'segment_refund_change_rule_mapping_list' => 
                      array (
                        'title' => '退改签规则',
                        'description' => '退改签规则',
                        'type' => 'array',
                        'items' => 
                        array (
                          'description' => '元素',
                          'type' => 'object',
                          'properties' => 
                          array (
                            'segment_id_list' => 
                            array (
                              'title' => '航段ID列表 这些航段ID使用同一个退改签规则',
                              'description' => '航段ID列表 这些航段ID使用同一个退改签规则',
                              'type' => 'array',
                              'items' => 
                              array (
                                'description' => 'segment_id',
                                'type' => 'string',
                                'example' => 'HO1295-PVG-MFM-20230310',
                              ),
                            ),
                            'refund_change_rule_map' => 
                            array (
                              'title' => '乘机人类型-退改签规则映射关系 key 取值描述 ADT:普通成人; CHD:儿童; INF:婴儿',
                              'description' => '乘机人类型-退改签规则映射关系',
                              'type' => 'object',
                              'additionalProperties' => 
                              array (
                                'type' => 'object',
                                'properties' => 
                                array (
                                  'refund_rule_all_unused_list' => 
                                  array (
                                    'title' => '全程未使用退票规则',
                                    'description' => '全程未使用退票规则',
                                    'type' => 'array',
                                    'items' => 
                                    array (
                                      'type' => 'object',
                                      'properties' => 
                                      array (
                                        'type' => 
                                        array (
                                          'title' => '该退票规则适用航程使用类型 0:全程未使用; 1:部分未使用',
                                          'description' => '该退票规则适用航程使用类型 0:全程未使用; 1:部分未使用',
                                          'type' => 'integer',
                                          'format' => 'int32',
                                          'example' => '0',
                                        ),
                                        'time_unit' => 
                                        array (
                                          'title' => '时间单位：day/hour',
                                          'description' => '时间单位：day/hour',
                                          'type' => 'string',
                                          'example' => 'hour',
                                        ),
                                        'rule_start_time' => 
                                        array (
                                          'title' => '该退票规则适用于的退票时间区间开始时间，单位（天/小时）',
                                          'description' => '该退票规则适用于的退票时间区间开始时间，单位（天/小时）',
                                          'type' => 'integer',
                                          'format' => 'int32',
                                          'example' => '36',
                                        ),
                                        'rule_end_time' => 
                                        array (
                                          'title' => '该退票规则适用于的退票时间区间结束时间，单位（天/小时）',
                                          'description' => '该退票规则适用于的退票时间区间结束时间，单位（天/小时）',
                                          'type' => 'integer',
                                          'format' => 'int32',
                                          'example' => '12',
                                        ),
                                        'can_refund' => 
                                        array (
                                          'title' => '起飞前X-Y小时(天) 可否退票',
                                          'description' => '起飞前X-Y小时(天) 可否退票',
                                          'type' => 'boolean',
                                          'example' => 'true',
                                        ),
                                        'refund_fee' => 
                                        array (
                                          'title' => '起飞前X-Y小时(天) 退票手续费',
                                          'description' => '起飞前X-Y小时(天) 退票手续费',
                                          'type' => 'number',
                                          'format' => 'double',
                                          'example' => '200',
                                        ),
                                        'can_return_all_tax' => 
                                        array (
                                          'title' => '起飞前X-Y小时(天) 是否全额退税',
                                          'description' => '起飞前X-Y小时(天) 是否全额退税',
                                          'type' => 'boolean',
                                          'example' => 'true',
                                        ),
                                        'return_part_tax_fee' => 
                                        array (
                                          'title' => '起飞前X-Y小时(天) 可部分退税金额',
                                          'description' => '起飞前X-Y小时(天) 可部分退税金额',
                                          'type' => 'number',
                                          'format' => 'double',
                                          'example' => '100',
                                        ),
                                      ),
                                      'description' => '元素',
                                    ),
                                  ),
                                  'refund_rule_part_unused_list' => 
                                  array (
                                    'title' => '部分未使用退票规则',
                                    'description' => '部分未使用退票规则',
                                    'type' => 'array',
                                    'items' => 
                                    array (
                                      'type' => 'object',
                                      'properties' => 
                                      array (
                                        'type' => 
                                        array (
                                          'title' => '该退票规则适用航程使用类型 0:全程未使用; 1:部分未使用',
                                          'description' => '该退票规则适用航程使用类型 0:全程未使用; 1:部分未使用',
                                          'type' => 'integer',
                                          'format' => 'int32',
                                          'example' => '0',
                                        ),
                                        'time_unit' => 
                                        array (
                                          'title' => '时间单位：day/hour',
                                          'description' => '时间单位：day/hour',
                                          'type' => 'string',
                                          'example' => 'hour',
                                        ),
                                        'rule_start_time' => 
                                        array (
                                          'title' => '该退票规则适用于的退票时间区间开始时间，单位（天/小时）',
                                          'description' => '该退票规则适用于的退票时间区间开始时间，单位（天/小时）',
                                          'type' => 'integer',
                                          'format' => 'int32',
                                          'example' => '36',
                                        ),
                                        'rule_end_time' => 
                                        array (
                                          'title' => '该退票规则适用于的退票时间区间结束时间，单位（天/小时）',
                                          'description' => '该退票规则适用于的退票时间区间结束时间，单位（天/小时）',
                                          'type' => 'integer',
                                          'format' => 'int32',
                                          'example' => '12',
                                        ),
                                        'can_refund' => 
                                        array (
                                          'title' => '起飞前X-Y小时(天) 可否退票',
                                          'description' => '起飞前X-Y小时(天) 可否退票',
                                          'type' => 'boolean',
                                          'example' => 'true',
                                        ),
                                        'refund_fee' => 
                                        array (
                                          'title' => '起飞前X-Y小时(天) 退票手续费',
                                          'description' => '起飞前X-Y小时(天) 退票手续费',
                                          'type' => 'number',
                                          'format' => 'double',
                                          'example' => '200',
                                        ),
                                        'can_return_all_tax' => 
                                        array (
                                          'title' => '起飞前X-Y小时(天) 是否全额退税',
                                          'description' => '起飞前X-Y小时(天) 是否全额退税',
                                          'type' => 'boolean',
                                          'example' => 'true',
                                        ),
                                        'return_part_tax_fee' => 
                                        array (
                                          'title' => '起飞前X-Y小时(天) 可部分退税金额',
                                          'description' => '起飞前X-Y小时(天) 可部分退税金额',
                                          'type' => 'number',
                                          'format' => 'double',
                                          'example' => '100',
                                        ),
                                      ),
                                      'description' => '元素',
                                    ),
                                  ),
                                  'change_rule_in_unused_list' => 
                                  array (
                                    'title' => '回程未使用改签规则',
                                    'description' => '回程未使用改签规则',
                                    'type' => 'array',
                                    'items' => 
                                    array (
                                      'type' => 'object',
                                      'properties' => 
                                      array (
                                        'type' => 
                                        array (
                                          'title' => '该改签规则适用航程使用类型 2:去程未使用; 3:回程未使用',
                                          'description' => '该改签规则适用航程使用类型 2:去程未使用; 3:回程未使用',
                                          'type' => 'integer',
                                          'format' => 'int32',
                                          'example' => '2',
                                        ),
                                        'time_unit' => 
                                        array (
                                          'title' => '时间单位：day/hour',
                                          'description' => '时间单位：day/hour',
                                          'type' => 'string',
                                          'example' => 'hour',
                                        ),
                                        'rule_start_time' => 
                                        array (
                                          'title' => '该退票规则适用于的退票时间区间开始时间，单位（天/小时）',
                                          'description' => '该退票规则适用于的退票时间区间开始时间，单位（天/小时）',
                                          'type' => 'integer',
                                          'format' => 'int32',
                                          'example' => '36',
                                        ),
                                        'rule_end_time' => 
                                        array (
                                          'title' => '该退票规则适用于的退票时间区间结束时间，单位（天/小时）',
                                          'description' => '该退票规则适用于的退票时间区间结束时间，单位（天/小时）',
                                          'type' => 'integer',
                                          'format' => 'int32',
                                          'example' => '12',
                                        ),
                                        'can_change' => 
                                        array (
                                          'title' => '起飞前X-Y小时(天) 可否可以改签',
                                          'description' => '起飞前X-Y小时(天) 可否可以改签',
                                          'type' => 'boolean',
                                          'example' => 'true',
                                        ),
                                        'change_fee' => 
                                        array (
                                          'title' => '起飞前X-Y小时(天) 改签费',
                                          'description' => '起飞前X-Y小时(天) 改签费',
                                          'type' => 'number',
                                          'format' => 'double',
                                          'example' => '100',
                                        ),
                                      ),
                                      'description' => '元素',
                                    ),
                                  ),
                                  'change_rule_out_unused_list' => 
                                  array (
                                    'title' => '去程未使用改签规则',
                                    'description' => '去程未使用改签规则',
                                    'type' => 'array',
                                    'items' => 
                                    array (
                                      'type' => 'object',
                                      'properties' => 
                                      array (
                                        'type' => 
                                        array (
                                          'title' => '该改签规则适用航程使用类型 2:去程未使用; 3:回程未使用',
                                          'description' => '该改签规则适用航程使用类型 2:去程未使用; 3:回程未使用',
                                          'type' => 'integer',
                                          'format' => 'int32',
                                          'example' => '2',
                                        ),
                                        'time_unit' => 
                                        array (
                                          'title' => '时间单位：day/hour',
                                          'description' => '时间单位：day/hour',
                                          'type' => 'string',
                                          'example' => 'hour',
                                        ),
                                        'rule_start_time' => 
                                        array (
                                          'title' => '该退票规则适用于的退票时间区间开始时间，单位（天/小时）',
                                          'description' => '该退票规则适用于的退票时间区间开始时间，单位（天/小时）',
                                          'type' => 'integer',
                                          'format' => 'int32',
                                          'example' => '36',
                                        ),
                                        'rule_end_time' => 
                                        array (
                                          'title' => '该退票规则适用于的退票时间区间结束时间，单位（天/小时）',
                                          'description' => '该退票规则适用于的退票时间区间结束时间，单位（天/小时）',
                                          'type' => 'integer',
                                          'format' => 'int32',
                                          'example' => '12',
                                        ),
                                        'can_change' => 
                                        array (
                                          'title' => '起飞前X-Y小时(天) 可否可以改签',
                                          'description' => '起飞前X-Y小时(天) 可否可以改签',
                                          'type' => 'boolean',
                                          'example' => 'true',
                                        ),
                                        'change_fee' => 
                                        array (
                                          'title' => '起飞前X-Y小时(天) 改签费',
                                          'description' => '起飞前X-Y小时(天) 改签费',
                                          'type' => 'number',
                                          'format' => 'double',
                                          'example' => '100',
                                        ),
                                      ),
                                      'description' => '元素',
                                    ),
                                  ),
                                ),
                                'description' => '元素',
                              ),
                            ),
                          ),
                        ),
                      ),
                      'segment_baggage_check_in_info_list' => 
                      array (
                        'title' => '行李直挂规则',
                        'description' => '行李直挂规则',
                        'type' => 'array',
                        'items' => 
                        array (
                          'description' => '元素',
                          'type' => 'object',
                          'properties' => 
                          array (
                            'segment_id_list' => 
                            array (
                              'title' => '航段ID列表 这些航段ID使用同一个行李直挂规则',
                              'description' => '航段ID列表 这些航段ID使用同一个行李直挂规则',
                              'type' => 'array',
                              'items' => 
                              array (
                                'description' => 'segment_id',
                                'type' => 'string',
                                'example' => 'HO1295-PVG-MFM-20230310
',
                              ),
                            ),
                            'luggage_direct_info_type' => 
                            array (
                              'title' => '行李直挂规则类型 1:航段之间行李直达; 2:航段之间行李重新托运; 3:经停城市行李直达; 4:经停城市行李重新托运',
                              'description' => '行李直挂规则类型 1:航段之间行李直达; 2:航段之间行李重新托运; 3:经停城市行李直达; 4:经停城市行李重新托运',
                              'type' => 'integer',
                              'format' => 'int32',
                              'example' => '1',
                            ),
                          ),
                        ),
                      ),
                    ),
                  ),
                  'flight_item_detail_list' => 
                  array (
                    'title' => '机票商品履约明细',
                    'description' => '机票商品履约明细',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '元素',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'passenger' => 
                        array (
                          'title' => '乘客信息',
                          'description' => '乘客信息',
                          'type' => 'object',
                          'properties' => 
                          array (
                            'last_name' => 
                            array (
                              'title' => '姓',
                              'description' => '姓',
                              'type' => 'string',
                              'example' => 'ZHANG',
                            ),
                            'first_name' => 
                            array (
                              'title' => '名',
                              'description' => '名',
                              'type' => 'string',
                              'example' => 'SAN',
                            ),
                            'birthday' => 
                            array (
                              'title' => '生日 yyyyMMdd',
                              'description' => '生日 yyyyMMdd',
                              'type' => 'string',
                              'example' => '20020301',
                            ),
                            'type' => 
                            array (
                              'title' => '乘客类型 0:通成人; 1:儿童; 8:婴儿',
                              'description' => '乘客类型 0:通成人; 1:儿童; 8:婴儿',
                              'type' => 'integer',
                              'format' => 'int32',
                              'example' => '0',
                            ),
                            'mobile_phone_number' => 
                            array (
                              'title' => '手机号',
                              'description' => '手机号',
                              'type' => 'string',
                              'example' => '183******96',
                            ),
                            'mobile_country_code' => 
                            array (
                              'title' => '手机号-国家码',
                              'description' => '手机号-国家码',
                              'type' => 'string',
                              'example' => '86',
                            ),
                            'gender' => 
                            array (
                              'title' => '性别 0:MALE; 1:FEMALE',
                              'description' => '性别 0:MALE; 1:FEMALE',
                              'type' => 'integer',
                              'format' => 'int32',
                              'example' => '0',
                            ),
                            'nationality' => 
                            array (
                              'title' => '国籍二字码',
                              'description' => '国籍二字码',
                              'type' => 'string',
                              'example' => 'CN',
                            ),
                            'credential' => 
                            array (
                              'title' => '证件',
                              'description' => '证件',
                              'type' => 'object',
                              'properties' => 
                              array (
                                'cert_issue_place' => 
                                array (
                                  'title' => '签发地，二字码',
                                  'description' => '签发地，二字码',
                                  'type' => 'string',
                                  'example' => 'CN',
                                ),
                                'credential_num' => 
                                array (
                                  'title' => '证件号',
                                  'description' => '证件号',
                                  'type' => 'string',
                                  'example' => 'E1***5674',
                                ),
                                'expire_date' => 
                                array (
                                  'title' => '证件过期时间',
                                  'description' => '证件过期时间',
                                  'type' => 'string',
                                  'example' => '20290101',
                                ),
                                'credential_type' => 
                                array (
                                  'title' => '证件类型 0:身份证; 1:护照; 2:学生证; 3:军人证; 4:回乡证; 5:台胞证; 6:港澳通行证; 7:国际海员; 8:外国人永久居留证; 10:警官证; 11:士兵证; 12:台湾通行证; 13:入台证; 14:户口簿; 15:出生证明; 16:驾照; 17:港澳居民居住证; 18:台湾居民居住证',
                                  'description' => '证件类型 0:身份证; 1:护照; 2:学生证; 3:军人证; 4:回乡证; 5:台胞证; 6:港澳通行证; 7:国际海员; 8:外国人永久居留证; 10:警官证; 11:士兵证; 12:Taiwan通行证; 13:入台证; 14:户口簿; 15:出生证明; 16:驾照; 17:港澳居民居住证; 18:Taiwan居民居住证',
                                  'type' => 'integer',
                                  'format' => 'int32',
                                  'example' => '1',
                                ),
                              ),
                            ),
                          ),
                        ),
                        'flight_price' => 
                        array (
                          'title' => '乘客价格信息',
                          'description' => '乘客价格信息',
                          'type' => 'object',
                          'properties' => 
                          array (
                            'sell_price' => 
                            array (
                              'title' => '销售价格 单位元',
                              'description' => '销售价格 单位元',
                              'type' => 'number',
                              'format' => 'double',
                              'example' => '300',
                            ),
                            'tax' => 
                            array (
                              'title' => '税费',
                              'description' => '税费',
                              'type' => 'number',
                              'format' => 'double',
                              'example' => '10',
                            ),
                          ),
                        ),
                        'flight_segment_cabin_relation' => 
                        array (
                          'title' => '航段舱位信息列表',
                          'description' => '航段舱位信息列表',
                          'type' => 'array',
                          'items' => 
                          array (
                            'description' => '元素',
                            'type' => 'object',
                            'properties' => 
                            array (
                              'segment_id' => 
                              array (
                                'title' => '航段ID',
                                'description' => '航段ID',
                                'type' => 'string',
                                'example' => 'HO1295-PVG-MFM-20230310',
                              ),
                              'cabin' => 
                              array (
                                'title' => '舱位',
                                'description' => '舱位',
                                'type' => 'string',
                                'example' => 'V',
                              ),
                              'cabin_quantity' => 
                              array (
                                'title' => '可售票量',
                                'description' => '可售票量',
                                'type' => 'string',
                                'example' => 'A',
                              ),
                              'cabin_class' => 
                              array (
                                'title' => '舱位等级',
                                'description' => '舱位等级',
                                'type' => 'string',
                                'example' => 'Y',
                              ),
                              'cabin_class_name' => 
                              array (
                                'title' => '舱位等级描述',
                                'description' => '舱位等级描述',
                                'type' => 'string',
                                'example' => 'economy class',
                              ),
                            ),
                          ),
                        ),
                        'ticket_nos' => 
                        array (
                          'title' => 'ticketNo 列表',
                          'description' => 'ticketNo 列表',
                          'type' => 'array',
                          'items' => 
                          array (
                            'description' => 'ticketNo',
                            'type' => 'string',
                            'example' => '784-0000000001',
                          ),
                        ),
                        'ticket_air_line' => 
                        array (
                          'title' => '出票航司，拼接可能有多个出票航司',
                          'description' => '出票航司，拼接可能有多个出票航司',
                          'type' => 'string',
                          'example' => 'HO',
                        ),
                        'c_pnr_list' => 
                        array (
                          'title' => 'cPnr 列表 cPnr 小编码; bPnr 大编码；对于廉航只有 cPnr',
                          'description' => 'cPnr 列表',
                          'type' => 'array',
                          'items' => 
                          array (
                            'description' => '元素',
                            'type' => 'string',
                            'example' => 'HY6P0A',
                          ),
                        ),
                        'b_pnr_list' => 
                        array (
                          'title' => 'bPnr 列表',
                          'description' => 'bPnr 列表',
                          'type' => 'array',
                          'items' => 
                          array (
                            'description' => '元素',
                            'type' => 'string',
                            'example' => 'HY6P0A',
                          ),
                        ),
                      ),
                    ),
                  ),
                  'ancillary_item_detail_list' => 
                  array (
                    'title' => '辅营商品履约明细',
                    'description' => '辅营商品履约明细',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '元素',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'passenger' => 
                        array (
                          'title' => '乘客信息',
                          'description' => '乘客信息',
                          'type' => 'object',
                          'properties' => 
                          array (
                            'last_name' => 
                            array (
                              'title' => '姓',
                              'description' => '姓',
                              'type' => 'string',
                              'example' => 'ZHANG',
                            ),
                            'first_name' => 
                            array (
                              'title' => '名',
                              'description' => '名',
                              'type' => 'string',
                              'example' => 'SAN',
                            ),
                            'birthday' => 
                            array (
                              'title' => '生日 yyyyMMdd',
                              'description' => '生日 yyyyMMdd',
                              'type' => 'string',
                              'example' => '20020301',
                            ),
                            'type' => 
                            array (
                              'title' => '乘客类型 0:通成人; 1:儿童; 8:婴儿',
                              'description' => '乘客类型 0:通成人; 1:儿童; 8:婴儿',
                              'type' => 'integer',
                              'format' => 'int32',
                              'example' => '0',
                            ),
                            'mobile_phone_number' => 
                            array (
                              'title' => '手机号',
                              'description' => '手机号',
                              'type' => 'string',
                              'example' => '183******96',
                            ),
                            'mobile_country_code' => 
                            array (
                              'title' => '手机号-国家码',
                              'description' => '手机号-国家码',
                              'type' => 'string',
                              'example' => '86',
                            ),
                            'gender' => 
                            array (
                              'title' => '性别 0:MALE; 1:FEMALE',
                              'description' => '性别 0:MALE; 1:FEMALE',
                              'type' => 'integer',
                              'format' => 'int32',
                              'example' => '0',
                            ),
                            'nationality' => 
                            array (
                              'title' => '国籍二字码',
                              'description' => '国籍二字码',
                              'type' => 'string',
                              'example' => 'CN',
                            ),
                            'credential' => 
                            array (
                              'title' => '证件',
                              'description' => '证件',
                              'type' => 'object',
                              'properties' => 
                              array (
                                'cert_issue_place' => 
                                array (
                                  'title' => '签发地，二字码',
                                  'description' => '签发地，二字码',
                                  'type' => 'string',
                                  'example' => 'CN',
                                ),
                                'credential_num' => 
                                array (
                                  'title' => '证件号',
                                  'description' => '证件号',
                                  'type' => 'string',
                                  'example' => 'E1***5674',
                                ),
                                'expire_date' => 
                                array (
                                  'title' => '证件过期时间',
                                  'description' => '证件过期时间',
                                  'type' => 'string',
                                  'example' => '20290101',
                                ),
                                'credential_type' => 
                                array (
                                  'title' => '证件类型 0:身份证; 1:护照; 2:学生证; 3:军人证; 4:回乡证; 5:台胞证; 6:港澳通行证; 7:国际海员; 8:外国人永久居留证; 10:警官证; 11:士兵证; 12:台湾通行证; 13:入台证; 14:户口簿; 15:出生证明; 16:驾照; 17:港澳居民居住证; 18:台湾居民居住证',
                                  'description' => '证件类型 0:身份证; 1:护照; 2:学生证; 3:军人证; 4:回乡证; 5:台胞证; 6:港澳通行证; 7:国际海员; 8:外国人永久居留证; 10:警官证; 11:士兵证; 12:Taiwan通行证; 13:入台证; 14:户口簿; 15:出生证明; 16:驾照; 17:港澳居民居住证; 18:Taiwan居民居住证',
                                  'type' => 'integer',
                                  'format' => 'int32',
                                  'example' => '1',
                                ),
                              ),
                            ),
                          ),
                        ),
                        'segment_id_list' => 
                        array (
                          'title' => '辅营商品适用的航段ID',
                          'description' => '辅营商品适用的航段ID',
                          'type' => 'array',
                          'items' => 
                          array (
                            'description' => 'segment_id',
                            'type' => 'string',
                            'example' => 'HO1295-PVG-MFM-20230310',
                          ),
                        ),
                        'ancillary' => 
                        array (
                          'title' => '辅营详细信息',
                          'description' => '辅营详细信息',
                          'type' => 'object',
                          'properties' => 
                          array (
                            'ancillary_id' => 
                            array (
                              'title' => '辅营商品ID',
                              'description' => '辅营商品ID',
                              'type' => 'string',
                              'example' => 'MDY2NTAxLCJleHAiOjE2NxNzM3MDEsIm5ix',
                            ),
                            'ancillary_type' => 
                            array (
                              'title' => '辅营产品类型 当前支持 4:付费行李',
                              'description' => '辅营产品类型 当前支持 4:付费行李',
                              'type' => 'integer',
                              'format' => 'int32',
                              'example' => '4',
                            ),
                            'baggage_ancillary' => 
                            array (
                              'title' => '行李辅营详情',
                              'type' => 'object',
                              'properties' => 
                              array (
                                'baggage_amount' => 
                                array (
                                  'title' => '行李件数 取值如：3、2、1、0、-2。 -2 表示计重',
                                  'type' => 'integer',
                                  'format' => 'int32',
                                  'example' => '0',
                                ),
                                'baggage_weight' => 
                                array (
                                  'title' => '行李重量，0-50。isAllWeght=true 时，表示所有件数总重量。',
                                  'type' => 'integer',
                                  'format' => 'int32',
                                  'example' => '0',
                                ),
                                'baggage_weight_unit' => 
                                array (
                                  'title' => '行李重量单位',
                                  'type' => 'string',
                                  'example' => 'KG',
                                ),
                                'is_all_weight' => 
                                array (
                                  'title' => '是否所有行李重量',
                                  'type' => 'boolean',
                                ),
                                'price' => 
                                array (
                                  'title' => '总价',
                                  'type' => 'number',
                                  'format' => 'double',
                                  'example' => '10.0',
                                ),
                              ),
                            ),
                          ),
                        ),
                      ),
                    ),
                  ),
                  'order_num' => 
                  array (
                    'title' => '订单号',
                    'description' => '订单号',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '4966***617111',
                  ),
                  'out_order_num' => 
                  array (
                    'title' => '外部订单号',
                    'description' => '外部订单号',
                    'type' => 'string',
                    'example' => 'x091-2023-0220-j-0001',
                  ),
                  'transaction_no' => 
                  array (
                    'title' => '资金交易流水号',
                    'description' => '资金交易流水号',
                    'type' => 'string',
                    'example' => 'hkduendkd-2023-dj0',
                  ),
                  'order_status' => 
                  array (
                    'title' => '订单状态 1:生单预定处理中; 2:生单预定成功; 3:订单已支付; 4:订单成功; 5:订单关闭',
                    'description' => '订单状态 1:生单预定处理中; 2:生单预定成功; 3:订单已支付; 4:订单成功; 5:订单关闭',
                    'type' => 'integer',
                    'example' => '4',
                    'format' => 'int32',
                  ),
                  'book_time' => 
                  array (
                    'title' => '预定时间(生单时间) 使用时间戳 13位',
                    'description' => '预定时间(生单时间) 使用时间戳 13位',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1677210784000',
                  ),
                  'succeed_time' => 
                  array (
                    'title' => '出票时间 使用时间戳 13位',
                    'description' => '出票时间 使用时间戳 13位',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1677210786000',
                  ),
                  'pay_time' => 
                  array (
                    'title' => '支付时间 使用时间戳 13位',
                    'description' => '支付时间 使用时间戳 13位',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1677210788000',
                  ),
                  'total_price' => 
                  array (
                    'title' => '订单总价(单位：元)',
                    'description' => '订单总价(单位：元)',
                    'type' => 'number',
                    'format' => 'double',
                    'example' => '3000',
                  ),
                  'real_pay_price' => 
                  array (
                    'title' => '实付金额(单位：元)',
                    'description' => '实付金额(单位：元)',
                    'type' => 'number',
                    'format' => 'double',
                    'example' => '3000',
                  ),
                  'promotion_price' => 
                  array (
                    'title' => '优惠金额(单位：元)',
                    'description' => '优惠金额(单位：元)',
                    'type' => 'number',
                    'format' => 'double',
                    'example' => '10',
                  ),
                  'passenger_list' => 
                  array (
                    'title' => '乘机人',
                    'description' => '乘机人',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '元素',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'last_name' => 
                        array (
                          'title' => '姓',
                          'description' => '姓',
                          'type' => 'string',
                          'example' => 'ZHANG',
                        ),
                        'first_name' => 
                        array (
                          'title' => '名',
                          'description' => '名',
                          'type' => 'string',
                          'example' => 'SAN',
                        ),
                        'birthday' => 
                        array (
                          'title' => '生日 yyyyMMdd',
                          'description' => '生日 yyyyMMdd',
                          'type' => 'string',
                          'example' => '20020301',
                        ),
                        'type' => 
                        array (
                          'title' => '乘客类型 0:通成人; 1:儿童; 8:婴儿',
                          'description' => '乘客类型 0:通成人; 1:儿童; 8:婴儿',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '0',
                        ),
                        'mobile_phone_number' => 
                        array (
                          'title' => '手机号',
                          'description' => '手机号',
                          'type' => 'string',
                          'example' => '183******96',
                        ),
                        'mobile_country_code' => 
                        array (
                          'title' => '手机号-国家码',
                          'description' => '手机号-国家码',
                          'type' => 'string',
                          'example' => '86',
                        ),
                        'gender' => 
                        array (
                          'title' => '性别 0:MALE; 1:FEMALE',
                          'description' => '性别 0:MALE; 1:FEMALE',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '0',
                        ),
                        'nationality' => 
                        array (
                          'title' => '国籍二字码',
                          'description' => '国籍二字码',
                          'type' => 'string',
                          'example' => 'CN',
                        ),
                        'credential' => 
                        array (
                          'title' => '证件',
                          'description' => '证件',
                          'type' => 'object',
                          'properties' => 
                          array (
                            'cert_issue_place' => 
                            array (
                              'title' => '签发地，二字码',
                              'description' => '签发地，二字码',
                              'type' => 'string',
                              'example' => 'CN',
                            ),
                            'credential_num' => 
                            array (
                              'title' => '证件号',
                              'description' => '证件号',
                              'type' => 'string',
                              'example' => 'E1***5674',
                            ),
                            'expire_date' => 
                            array (
                              'title' => '证件过期时间',
                              'description' => '证件过期时间',
                              'type' => 'string',
                              'example' => '20290101',
                            ),
                            'credential_type' => 
                            array (
                              'title' => '证件类型 0:身份证; 1:护照; 2:学生证; 3:军人证; 4:回乡证; 5:台胞证; 6:港澳通行证; 7:国际海员; 8:外国人永久居留证; 10:警官证; 11:士兵证; 12:台湾通行证; 13:入台证; 14:户口簿; 15:出生证明; 16:驾照; 17:港澳居民居住证; 18:台湾居民居住证',
                              'description' => '证件类型 0:身份证; 1:护照; 2:学生证; 3:军人证; 4:回乡证; 5:台胞证; 6:港澳通行证; 7:国际海员; 8:外国人永久居留证; 10:警官证; 11:士兵证; 12:Taiwan通行证; 13:入台证; 14:户口簿; 15:出生证明; 16:驾照; 17:港澳居民居住证; 18:Taiwan居民居住证',
                              'type' => 'integer',
                              'format' => 'int32',
                              'example' => '1',
                            ),
                          ),
                        ),
                      ),
                    ),
                  ),
                  'session_nick' => 
                  array (
                    'title' => '买家昵称',
                    'description' => '买家昵称',
                    'type' => 'string',
                    'example' => 'nick',
                  ),
                  'pay_status' => 
                  array (
                    'title' => '支付状态 0:支付处理中; 1:扣款成功; 2:已打款给卖家; 3:关闭交易',
                    'description' => '支付状态 0:支付处理中; 1:扣款成功; 2:已打款给卖家; 3:关闭交易',
                    'type' => 'integer',
                    'example' => '2',
                    'format' => 'int32',
                  ),
                ),
              ),
              'error_data' => 
              array (
                'title' => '错误处理携带数据',
                'description' => '错误处理携带数据',
                'type' => 'any',
                'example' => 'null',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"status\\": 200,\\n  \\"error_code\\": \\"null\\",\\n  \\"error_msg\\": \\"null\\",\\n  \\"success\\": true,\\n  \\"RequestId\\": \\"51593418-8C73-5E47-8BA8-3F1D4A00CC0B\\",\\n  \\"data\\": {\\n    \\"refund_change_rule_map\\": {\\n      \\"key\\": {\\n        \\"refund_rule_all_unused_list\\": [\\n          {\\n            \\"type\\": 0,\\n            \\"time_unit\\": \\"hour\\",\\n            \\"rule_start_time\\": 36,\\n            \\"rule_end_time\\": 12,\\n            \\"can_refund\\": true,\\n            \\"refund_fee\\": 200,\\n            \\"can_return_all_tax\\": true,\\n            \\"return_part_tax_fee\\": 100\\n          }\\n        ],\\n        \\"refund_rule_part_unused_list\\": [\\n          {\\n            \\"type\\": 0,\\n            \\"time_unit\\": \\"hour\\",\\n            \\"rule_start_time\\": 36,\\n            \\"rule_end_time\\": 12,\\n            \\"can_refund\\": true,\\n            \\"refund_fee\\": 200,\\n            \\"can_return_all_tax\\": true,\\n            \\"return_part_tax_fee\\": 100\\n          }\\n        ],\\n        \\"change_rule_in_unused_list\\": [\\n          {\\n            \\"type\\": 2,\\n            \\"time_unit\\": \\"hour\\",\\n            \\"rule_start_time\\": 36,\\n            \\"rule_end_time\\": 12,\\n            \\"can_change\\": true,\\n            \\"change_fee\\": 100\\n          }\\n        ],\\n        \\"change_rule_out_unused_list\\": [\\n          {\\n            \\"type\\": 2,\\n            \\"time_unit\\": \\"hour\\",\\n            \\"rule_start_time\\": 36,\\n            \\"rule_end_time\\": 12,\\n            \\"can_change\\": true,\\n            \\"change_fee\\": 100\\n          }\\n        ]\\n      }\\n    },\\n    \\"baggage_allowance_map\\": {\\n      \\"key\\": {\\n        \\"baggage_amount\\": 1,\\n        \\"baggage_weight\\": 10,\\n        \\"baggage_weight_unit\\": \\"KG\\",\\n        \\"is_all_weight\\": true,\\n        \\"carry_on_amount\\": 1,\\n        \\"carry_on_weight\\": 5,\\n        \\"carry_on_weight_unit\\": \\"KG\\",\\n        \\"is_all_carry_on_weight\\": true\\n      }\\n    },\\n    \\"solution\\": {\\n      \\"solution_id\\": \\"eJwz8DeySEo0NjQ01TU3TUxxx\\",\\n      \\"adult_price\\": 300,\\n      \\"adult_tax\\": 30,\\n      \\"child_price\\": 200,\\n      \\"child_tax\\": 20,\\n      \\"infant_price\\": 100,\\n      \\"infant_tax\\": 10,\\n      \\"refund_ticket_coupon_description\\": \\"description\\",\\n      \\"product_type_description\\": \\"description\\",\\n      \\"journey_list\\": [\\n        {\\n          \\"transfer_count\\": 0,\\n          \\"segment_list\\": [\\n            {\\n              \\"segment_id\\": \\"HO1295-PVG-MFM-20230310\\\\n\\",\\n              \\"departure_airport\\": \\"PVG\\",\\n              \\"arrival_airport\\": \\"MFM\\",\\n              \\"departure_city\\": \\"SHA\\",\\n              \\"arrival_city\\": \\"MFM\\",\\n              \\"marketing_flight_no\\": \\"HO1295\\",\\n              \\"marketing_flight_no_int\\": 1295,\\n              \\"marketing_airline\\": \\"HO\\",\\n              \\"operating_flight_no\\": \\"HO1295\\",\\n              \\"operating_airline\\": \\"HO\\",\\n              \\"departure_time\\": \\"2023-03-10 07:55:00\\",\\n              \\"arrival_time\\": \\"2023-03-10 10:40:00\\",\\n              \\"code_share\\": false,\\n              \\"departure_terminal\\": \\"T2\\",\\n              \\"arrival_terminal\\": \\"T1\\",\\n              \\"equip_type\\": \\"32Q\\",\\n              \\"cabin\\": \\"V\\",\\n              \\"cabin_class\\": \\"Y\\",\\n              \\"availability\\": \\"7\\",\\n              \\"stop_city_list\\": \\"SEL,HKG\\",\\n              \\"stop_quantity\\": 0,\\n              \\"flight_duration\\": 165\\n            }\\n          ]\\n        }\\n      ],\\n      \\"segment_baggage_mapping_list\\": [\\n        {\\n          \\"segment_id_list\\": [\\n            \\"HO1295-PVG-MFM-20230310\\\\n\\"\\n          ],\\n          \\"passenger_baggage_allowance_mapping\\": {\\n            \\"key\\": {\\n              \\"baggage_amount\\": 1,\\n              \\"baggage_weight\\": 10,\\n              \\"baggage_weight_unit\\": \\"KG\\",\\n              \\"is_all_weight\\": true,\\n              \\"carry_on_amount\\": 1,\\n              \\"carry_on_weight\\": 5,\\n              \\"carry_on_weight_unit\\": \\"KG\\",\\n              \\"is_all_carry_on_weight\\": true\\n            }\\n          }\\n        }\\n      ],\\n      \\"segment_refund_change_rule_mapping_list\\": [\\n        {\\n          \\"segment_id_list\\": [\\n            \\"HO1295-PVG-MFM-20230310\\"\\n          ],\\n          \\"refund_change_rule_map\\": {\\n            \\"key\\": {\\n              \\"refund_rule_all_unused_list\\": [\\n                {\\n                  \\"type\\": 0,\\n                  \\"time_unit\\": \\"hour\\",\\n                  \\"rule_start_time\\": 36,\\n                  \\"rule_end_time\\": 12,\\n                  \\"can_refund\\": true,\\n                  \\"refund_fee\\": 200,\\n                  \\"can_return_all_tax\\": true,\\n                  \\"return_part_tax_fee\\": 100\\n                }\\n              ],\\n              \\"refund_rule_part_unused_list\\": [\\n                {\\n                  \\"type\\": 0,\\n                  \\"time_unit\\": \\"hour\\",\\n                  \\"rule_start_time\\": 36,\\n                  \\"rule_end_time\\": 12,\\n                  \\"can_refund\\": true,\\n                  \\"refund_fee\\": 200,\\n                  \\"can_return_all_tax\\": true,\\n                  \\"return_part_tax_fee\\": 100\\n                }\\n              ],\\n              \\"change_rule_in_unused_list\\": [\\n                {\\n                  \\"type\\": 2,\\n                  \\"time_unit\\": \\"hour\\",\\n                  \\"rule_start_time\\": 36,\\n                  \\"rule_end_time\\": 12,\\n                  \\"can_change\\": true,\\n                  \\"change_fee\\": 100\\n                }\\n              ],\\n              \\"change_rule_out_unused_list\\": [\\n                {\\n                  \\"type\\": 2,\\n                  \\"time_unit\\": \\"hour\\",\\n                  \\"rule_start_time\\": 36,\\n                  \\"rule_end_time\\": 12,\\n                  \\"can_change\\": true,\\n                  \\"change_fee\\": 100\\n                }\\n              ]\\n            }\\n          }\\n        }\\n      ],\\n      \\"segment_baggage_check_in_info_list\\": [\\n        {\\n          \\"segment_id_list\\": [\\n            \\"HO1295-PVG-MFM-20230310\\\\n\\"\\n          ],\\n          \\"luggage_direct_info_type\\": 1\\n        }\\n      ]\\n    },\\n    \\"flight_item_detail_list\\": [\\n      {\\n        \\"passenger\\": {\\n          \\"last_name\\": \\"ZHANG\\",\\n          \\"first_name\\": \\"SAN\\",\\n          \\"birthday\\": \\"20020301\\",\\n          \\"type\\": 0,\\n          \\"mobile_phone_number\\": \\"183******96\\",\\n          \\"mobile_country_code\\": \\"86\\",\\n          \\"gender\\": 0,\\n          \\"nationality\\": \\"CN\\",\\n          \\"credential\\": {\\n            \\"cert_issue_place\\": \\"CN\\",\\n            \\"credential_num\\": \\"E1***5674\\",\\n            \\"expire_date\\": \\"20290101\\",\\n            \\"credential_type\\": 1\\n          }\\n        },\\n        \\"flight_price\\": {\\n          \\"sell_price\\": 300,\\n          \\"tax\\": 10\\n        },\\n        \\"flight_segment_cabin_relation\\": [\\n          {\\n            \\"segment_id\\": \\"HO1295-PVG-MFM-20230310\\",\\n            \\"cabin\\": \\"V\\",\\n            \\"cabin_quantity\\": \\"A\\",\\n            \\"cabin_class\\": \\"Y\\",\\n            \\"cabin_class_name\\": \\"economy class\\"\\n          }\\n        ],\\n        \\"ticket_nos\\": [\\n          \\"784-0000000001\\"\\n        ],\\n        \\"ticket_air_line\\": \\"HO\\",\\n        \\"c_pnr_list\\": [\\n          \\"HY6P0A\\"\\n        ],\\n        \\"b_pnr_list\\": [\\n          \\"HY6P0A\\"\\n        ]\\n      }\\n    ],\\n    \\"ancillary_item_detail_list\\": [\\n      {\\n        \\"passenger\\": {\\n          \\"last_name\\": \\"ZHANG\\",\\n          \\"first_name\\": \\"SAN\\",\\n          \\"birthday\\": \\"20020301\\",\\n          \\"type\\": 0,\\n          \\"mobile_phone_number\\": \\"183******96\\",\\n          \\"mobile_country_code\\": \\"86\\",\\n          \\"gender\\": 0,\\n          \\"nationality\\": \\"CN\\",\\n          \\"credential\\": {\\n            \\"cert_issue_place\\": \\"CN\\",\\n            \\"credential_num\\": \\"E1***5674\\",\\n            \\"expire_date\\": \\"20290101\\",\\n            \\"credential_type\\": 1\\n          }\\n        },\\n        \\"segment_id_list\\": [\\n          \\"HO1295-PVG-MFM-20230310\\"\\n        ],\\n        \\"ancillary\\": {\\n          \\"ancillary_id\\": \\"MDY2NTAxLCJleHAiOjE2NxNzM3MDEsIm5ix\\",\\n          \\"ancillary_type\\": 4,\\n          \\"ancillary_info\\": {\\n            \\"test\\": \\"test\\",\\n            \\"test2\\": 1\\n          }\\n        }\\n      }\\n    ],\\n    \\"order_num\\": 0,\\n    \\"out_order_num\\": \\"x091-2023-0220-j-0001\\",\\n    \\"transaction_no\\": \\"hkduendkd-2023-dj0\\",\\n    \\"order_status\\": \\"4\\",\\n    \\"book_time\\": 1677210784000,\\n    \\"succeed_time\\": 1677210786000,\\n    \\"pay_time\\": 1677210788000,\\n    \\"total_price\\": 3000,\\n    \\"real_pay_price\\": 3000,\\n    \\"promotion_price\\": 10,\\n    \\"passenger_list\\": [\\n      {\\n        \\"last_name\\": \\"ZHANG\\",\\n        \\"first_name\\": \\"SAN\\",\\n        \\"birthday\\": \\"20020301\\",\\n        \\"type\\": 0,\\n        \\"mobile_phone_number\\": \\"183******96\\",\\n        \\"mobile_country_code\\": \\"86\\",\\n        \\"gender\\": 0,\\n        \\"nationality\\": \\"CN\\",\\n        \\"credential\\": {\\n          \\"cert_issue_place\\": \\"CN\\",\\n          \\"credential_num\\": \\"E1***5674\\",\\n          \\"expire_date\\": \\"20290101\\",\\n          \\"credential_type\\": 1\\n        }\\n      }\\n    ],\\n    \\"session_nick\\": \\"nick\\",\\n    \\"pay_status\\": \\"2\\"\\n  },\\n  \\"error_data\\": \\"null\\"\\n}","type":"json"}]',
      'title' => 'OrderDetail',
    ),
    'OrderList' => 
    array (
      'summary' => '订单列表。',
      'path' => '/airticket/v1/trade/order-list',
      'methods' => 
      array (
        0 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'https',
        1 => 'http',
      ),
      'security' => 
      array (
        0 => 
        array (
          'accessTokenAuth' => 
          array (
          ),
        ),
      ),
      'deprecated' => false,
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'book_time_start',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '查询开始时间 13位时间戳',
            'description' => '查询开始时间 13位时间戳',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'example' => '1677229005000',
          ),
        ),
        1 => 
        array (
          'name' => 'book_time_end',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '查询结束时间 13位时间戳',
            'description' => '查询结束时间 13位时间戳',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'example' => '1677229006000',
          ),
        ),
        2 => 
        array (
          'name' => 'status',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '订单状态 1:生单预定处理中; 2:生单预定成功; 3:订单已支付; 4:订单成功; 5:订单关闭',
            'description' => '订单状态 1:生单预定处理中; 2:生单预定成功; 3:订单已支付; 4:订单成功; 5:订单关闭',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '4',
          ),
        ),
        3 => 
        array (
          'name' => 'page_index',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '页索引',
            'description' => '页索引',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        4 => 
        array (
          'name' => 'page_size',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '页大小',
            'description' => '页大小',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '20',
          ),
        ),
        5 => 
        array (
          'name' => 'x-acs-airticket-access-token',
          'in' => 'header',
          'schema' => 
          array (
            'title' => 'access_token',
            'description' => 'access_token',
            'type' => 'string',
            'required' => true,
            'example' => 'eyJhbGciOiJSUzI1NiIsImtpZCI6InN1ZXpfa2V5aWQifQ.eyJqdGkiOiJCQldMaWIzN0VxbC0xMjhhR2N5elJ3IiwiaWF0IjoxNjc3MDY2NTAxLCJleHAiOjE2NzcwNzM3MDEsIm5iZiI6MTY3NzA2NjQ0MX0.AF0DxsZK4Edyg0C6ObRQFUo36R1VYrb5IYmak25TmL1OfR5RkIUc3PpqFuQKNLKXf5fOtVQaKjaexzwodVeWZQDKEG_RPt_Ybb99EnEm6vPKs6e3pWFbKiBq71WleLHhVrdFb4YPowRKjc7bG0jyGUxiQ2iXy0RWDj9tIjfI-KEdzNp5oVnX7j4p3H12DwQrRPmd1nz3BciAQNINvDpzqusuIUw8JXyLFCz838Y0NhwB1_bYZyctxRLSzrGZuI5rrWtItgupqMsOlJ3RNy1QrIbQ2g6nPmzl-atOqcQ4Nw0HeDLR8dhM1OsIcFLbKXBUtwXofflhzAQrkDxhwYiXii',
          ),
        ),
        6 => 
        array (
          'name' => 'x-acs-airticket-language',
          'in' => 'header',
          'schema' => 
          array (
            'title' => '多语言 默认取买家账号配置',
            'description' => '多语言 默认取买家账号配置',
            'type' => 'string',
            'required' => false,
            'example' => 'en_US',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'PopBaseRes<PageData<BaseOrderDetailRes>, Object>',
            'description' => 'PopBaseRes<PageData<BaseOrderDetailRes>, Object>',
            'type' => 'object',
            'properties' => 
            array (
              'status' => 
              array (
                'title' => 'http 请求成功，status 值均为 200',
                'description' => 'http 请求成功，status 值均为 200',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'error_code' => 
              array (
                'title' => '业务错误码',
                'description' => '业务错误码',
                'type' => 'string',
                'example' => 'null',
              ),
              'error_msg' => 
              array (
                'title' => '错误信息',
                'description' => '错误信息',
                'type' => 'string',
                'example' => 'null',
              ),
              'success' => 
              array (
                'title' => '是否正确',
                'description' => '是否正确',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'RequestId' => 
              array (
                'title' => '请求 RequestId',
                'description' => '请求 RequestId',
                'type' => 'string',
                'example' => '51593418-8C73-5E47-8BA8-3F1D4A00CC0B',
              ),
              'data' => 
              array (
                'title' => '正确处理返回数据',
                'description' => '正确处理返回数据',
                'type' => 'object',
                'properties' => 
                array (
                  'list' => 
                  array (
                    'title' => '数据列表',
                    'description' => '数据列表',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '分页数据',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'order_num' => 
                        array (
                          'title' => '订单号',
                          'description' => '订单号',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '4966***617111',
                        ),
                        'out_order_num' => 
                        array (
                          'title' => '外部订单号',
                          'description' => '外部订单号',
                          'type' => 'string',
                          'example' => 'x091-2023-0220-j-0001',
                        ),
                        'transaction_no' => 
                        array (
                          'title' => '资金交易流水号',
                          'description' => '资金交易流水号',
                          'type' => 'string',
                          'example' => 'hkduendkd-2023-dj0',
                        ),
                        'order_status' => 
                        array (
                          'title' => '订单状态 1:生单预定处理中; 2:生单预定成功; 3:订单已支付; 4:订单成功; 5:订单关闭',
                          'description' => '订单状态 1:生单预定处理中; 2:生单预定成功; 3:订单已支付; 4:订单成功; 5:订单关闭',
                          'type' => 'string',
                          'example' => '4',
                        ),
                        'book_time' => 
                        array (
                          'title' => '预定时间(生单时间) 使用时间戳 13位',
                          'description' => '预定时间(生单时间) 使用时间戳 13位',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1677210784000',
                        ),
                        'succeed_time' => 
                        array (
                          'title' => '出票时间 使用时间戳 13位',
                          'description' => '出票时间 使用时间戳 13位',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1677210786000',
                        ),
                        'pay_time' => 
                        array (
                          'title' => '支付时间 使用时间戳 13位',
                          'description' => '支付时间 使用时间戳 13位',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1677210788000',
                        ),
                        'total_price' => 
                        array (
                          'title' => '订单总价(单位：元)',
                          'description' => '订单总价(单位：元)',
                          'type' => 'number',
                          'format' => 'double',
                          'example' => '3000',
                        ),
                        'real_pay_price' => 
                        array (
                          'title' => '实付金额(单位：元)',
                          'description' => '实付金额(单位：元)',
                          'type' => 'number',
                          'format' => 'double',
                          'example' => '3000',
                        ),
                        'promotion_price' => 
                        array (
                          'title' => '优惠金额(单位：元)',
                          'description' => '优惠金额(单位：元)',
                          'type' => 'number',
                          'format' => 'double',
                          'example' => '10',
                        ),
                        'passenger_list' => 
                        array (
                          'title' => '乘机人',
                          'description' => '乘机人',
                          'type' => 'array',
                          'items' => 
                          array (
                            'description' => '元素',
                            'type' => 'object',
                            'properties' => 
                            array (
                              'last_name' => 
                              array (
                                'title' => '姓',
                                'description' => '姓',
                                'type' => 'string',
                                'example' => 'ZHANG',
                              ),
                              'first_name' => 
                              array (
                                'title' => '名',
                                'description' => '名',
                                'type' => 'string',
                                'example' => 'SAN',
                              ),
                              'birthday' => 
                              array (
                                'title' => '生日 yyyyMMdd',
                                'description' => '生日 yyyyMMdd',
                                'type' => 'string',
                                'example' => '20020301',
                              ),
                              'type' => 
                              array (
                                'title' => '乘客类型 0:通成人; 1:儿童; 8:婴儿',
                                'description' => '乘客类型 0:通成人; 1:儿童; 8:婴儿',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '0',
                              ),
                              'mobile_phone_number' => 
                              array (
                                'title' => '手机号',
                                'description' => '手机号',
                                'type' => 'string',
                                'example' => '183******96',
                              ),
                              'mobile_country_code' => 
                              array (
                                'title' => '手机号-国家码',
                                'description' => '手机号-国家码',
                                'type' => 'string',
                                'example' => '86',
                              ),
                              'gender' => 
                              array (
                                'title' => '性别 0:MALE; 1:FEMALE',
                                'description' => '性别 0:MALE; 1:FEMALE',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '0',
                              ),
                              'nationality' => 
                              array (
                                'title' => '国籍二字码',
                                'description' => '国籍二字码',
                                'type' => 'string',
                                'example' => 'CN',
                              ),
                              'credential' => 
                              array (
                                'title' => '证件',
                                'description' => '证件',
                                'type' => 'object',
                                'properties' => 
                                array (
                                  'cert_issue_place' => 
                                  array (
                                    'title' => '签发地，二字码',
                                    'description' => '签发地，二字码',
                                    'type' => 'string',
                                    'example' => 'CN',
                                  ),
                                  'credential_num' => 
                                  array (
                                    'title' => '证件号',
                                    'description' => '证件号',
                                    'type' => 'string',
                                    'example' => 'E1***5674',
                                  ),
                                  'expire_date' => 
                                  array (
                                    'title' => '证件过期时间',
                                    'description' => '证件过期时间',
                                    'type' => 'string',
                                    'example' => '20290101',
                                  ),
                                  'credential_type' => 
                                  array (
                                    'title' => '证件类型 0:身份证; 1:护照; 2:学生证; 3:军人证; 4:回乡证; 5:台胞证; 6:港澳通行证; 7:国际海员; 8:外国人永久居留证; 10:警官证; 11:士兵证; 12:台湾通行证; 13:入台证; 14:户口簿; 15:出生证明; 16:驾照; 17:港澳居民居住证; 18:台湾居民居住证',
                                    'description' => '证件类型 0:身份证; 1:护照; 2:学生证; 3:军人证; 4:回乡证; 5:台胞证; 6:港澳通行证; 7:国际海员; 8:外国人永久居留证; 10:警官证; 11:士兵证; 12:Taiwan通行证; 13:入台证; 14:户口簿; 15:出生证明; 16:驾照; 17:港澳居民居住证; 18:Taiwan居民居住证',
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'example' => '1',
                                  ),
                                ),
                              ),
                            ),
                          ),
                        ),
                        'session_nick' => 
                        array (
                          'title' => '买家昵称',
                          'description' => '买家昵称',
                          'type' => 'string',
                          'example' => 'nick',
                        ),
                        'pay_status' => 
                        array (
                          'title' => '支付状态 0:支付处理中; 1:扣款成功; 2:已打款给卖家; 3:关闭交易',
                          'description' => '支付状态 0:支付处理中; 1:扣款成功; 2:已打款给卖家; 3:关闭交易',
                          'type' => 'string',
                          'example' => '2',
                        ),
                      ),
                    ),
                  ),
                  'pagination' => 
                  array (
                    'title' => '分页信息',
                    'description' => '分页信息',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'total_count' => 
                      array (
                        'title' => '总数量',
                        'description' => '总数量',
                        'type' => 'integer',
                        'format' => 'int32',
                        'example' => '5',
                      ),
                      'total_page' => 
                      array (
                        'title' => '共几页',
                        'description' => '共几页',
                        'type' => 'integer',
                        'format' => 'int32',
                        'example' => '1',
                      ),
                      'current_page' => 
                      array (
                        'title' => '当前第几页',
                        'description' => '当前第几页',
                        'type' => 'integer',
                        'format' => 'int32',
                        'example' => '1',
                      ),
                      'page_size' => 
                      array (
                        'title' => '每页数量',
                        'description' => '每页数量',
                        'type' => 'integer',
                        'format' => 'int32',
                        'example' => '10',
                      ),
                    ),
                  ),
                ),
              ),
              'error_data' => 
              array (
                'title' => '错误处理携带数据',
                'description' => '错误处理携带数据',
                'type' => 'any',
                'example' => 'null',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"status\\": 200,\\n  \\"error_code\\": \\"null\\",\\n  \\"error_msg\\": \\"null\\",\\n  \\"success\\": true,\\n  \\"RequestId\\": \\"51593418-8C73-5E47-8BA8-3F1D4A00CC0B\\",\\n  \\"data\\": {\\n    \\"list\\": [\\n      {\\n        \\"order_num\\": 0,\\n        \\"out_order_num\\": \\"x091-2023-0220-j-0001\\",\\n        \\"transaction_no\\": \\"hkduendkd-2023-dj0\\",\\n        \\"order_status\\": \\"4\\",\\n        \\"book_time\\": 1677210784000,\\n        \\"succeed_time\\": 1677210786000,\\n        \\"pay_time\\": 1677210788000,\\n        \\"total_price\\": 3000,\\n        \\"real_pay_price\\": 3000,\\n        \\"promotion_price\\": 10,\\n        \\"passenger_list\\": [\\n          {\\n            \\"last_name\\": \\"ZHANG\\",\\n            \\"first_name\\": \\"SAN\\",\\n            \\"birthday\\": \\"20020301\\",\\n            \\"type\\": 0,\\n            \\"mobile_phone_number\\": \\"183******96\\",\\n            \\"mobile_country_code\\": \\"86\\",\\n            \\"gender\\": 0,\\n            \\"nationality\\": \\"CN\\",\\n            \\"credential\\": {\\n              \\"cert_issue_place\\": \\"CN\\",\\n              \\"credential_num\\": \\"E1***5674\\",\\n              \\"expire_date\\": \\"20290101\\",\\n              \\"credential_type\\": 1\\n            }\\n          }\\n        ],\\n        \\"session_nick\\": \\"nick\\",\\n        \\"pay_status\\": \\"2\\"\\n      }\\n    ],\\n    \\"pagination\\": {\\n      \\"total_count\\": 5,\\n      \\"total_page\\": 1,\\n      \\"current_page\\": 1,\\n      \\"page_size\\": 10\\n    }\\n  },\\n  \\"error_data\\": \\"null\\"\\n}","type":"json"}]',
      'title' => 'OrderList',
    ),
    'RefundApply' => 
    array (
      'summary' => '退票申请。',
      'path' => '/airticket/v1/refund/action-apply',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'https',
        1 => 'http',
      ),
      'security' => 
      array (
        0 => 
        array (
          'accessTokenAuth' => 
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
          'name' => 'order_num',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '订单号',
            'description' => '订单号',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'example' => '4966***617111',
          ),
        ),
        1 => 
        array (
          'name' => 'refund_type',
          'in' => 'formData',
          'style' => 'json',
          'schema' => 
          array (
            'title' => '退票类型 非自愿退票申请，要上传附件',
            'description' => '退票类型 非自愿退票申请，要上传附件',
            'type' => 'object',
            'properties' => 
            array (
              'refund_type_id' => 
              array (
                'title' => '申请退票类型 0:自愿申请; 1:非自愿申请(不可抗力); 2:我要改变行程计划、我不想飞',
                'description' => '申请退票类型 2：自愿申请（我要改变行程计划/我不想飞）  5：非自愿，航班延误或取消、航班时刻变更等航司原因  6：非自愿，身体原因且有二级甲等医院<含>以上的医院证明   
（说明：不强制要求提供附件，但是非自愿最好都能够提供附件， 能够提高提退成功率）',
                'type' => 'integer',
                'format' => 'int32',
                'required' => true,
                'example' => '2',
              ),
              'file' => 
              array (
                'title' => '附件文件地址数组 先要用单独的文件上传接口上传文件得到文件地址',
                'description' => '附件文件地址数组 先要用单独的文件上传接口上传文件得到文件地址',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '元素',
                  'type' => 'string',
                  'required' => false,
                  'example' => '["xxx","zzz"]',
                ),
                'required' => false,
                'example' => '[xxx,yyy]',
              ),
              'remark' => 
              array (
                'title' => '备注',
                'description' => '备注',
                'type' => 'string',
                'required' => false,
                'example' => 'remark desc',
              ),
            ),
            'required' => true,
          ),
        ),
        2 => 
        array (
          'name' => 'refund_passenger_list',
          'in' => 'formData',
          'style' => 'json',
          'schema' => 
          array (
            'title' => '申请退票的乘机人列表',
            'description' => '申请退票的乘机人列表',
            'type' => 'array',
            'items' => 
            array (
              'description' => '元素',
              'type' => 'object',
              'properties' => 
              array (
                'first_name' => 
                array (
                  'title' => '乘机人名',
                  'description' => '乘机人名',
                  'type' => 'string',
                  'required' => true,
                  'example' => 'SAN',
                ),
                'last_name' => 
                array (
                  'title' => '乘机人姓',
                  'description' => '乘机人姓',
                  'type' => 'string',
                  'required' => true,
                  'example' => 'ZHANG',
                ),
                'document' => 
                array (
                  'title' => '证件号',
                  'description' => '证件号',
                  'type' => 'string',
                  'required' => false,
                  'example' => '411***********4411',
                ),
              ),
              'required' => false,
            ),
            'required' => true,
          ),
        ),
        3 => 
        array (
          'name' => 'refund_journeys',
          'in' => 'formData',
          'style' => 'json',
          'schema' => 
          array (
            'title' => '申请提退的行程',
            'description' => '申请提退的行程',
            'type' => 'array',
            'items' => 
            array (
              'description' => '元素',
              'type' => 'object',
              'properties' => 
              array (
                'segment_list' => 
                array (
                  'title' => '航段信息',
                  'description' => '航段信息',
                  'type' => 'array',
                  'items' => 
                  array (
                    'description' => 'segment',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'departure_airport' => 
                      array (
                        'title' => '航班起飞机场三字码(大写)',
                        'description' => '航班起飞机场三字码(大写)',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'PVG',
                      ),
                      'arrival_airport' => 
                      array (
                        'title' => '航班到达机场三字码(大写)',
                        'description' => '航班到达机场三字码(大写)',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'MFM',
                      ),
                      'departure_city' => 
                      array (
                        'title' => '航班起飞城市三字码(大写)',
                        'description' => '航班起飞城市三字码(大写)',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'SHA',
                      ),
                      'arrival_city' => 
                      array (
                        'title' => '航班到达城市三字码(大写)',
                        'description' => '航班到达城市三字码(大写)',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'MFM',
                      ),
                    ),
                    'required' => false,
                  ),
                  'required' => true,
                ),
              ),
              'required' => false,
            ),
            'required' => true,
          ),
        ),
        4 => 
        array (
          'name' => 'x-acs-airticket-access-token',
          'in' => 'header',
          'schema' => 
          array (
            'title' => 'access_token',
            'description' => 'access_token',
            'type' => 'string',
            'required' => true,
            'example' => 'eyJhbGciOiJSUzI1NiIsImtpZCI6InN1ZXpfa2V5aWQifQ.eyJqdGkiOiJCQldMaWIzN0VxbC0xMjhhR2N5elJ3IiwiaWF0IjoxNjc3MDY2NTAxLCJleHAiOjE2NzcwNzM3MDEsIm5iZiI6MTY3NzA2NjQ0MX0.AF0DxsZK4Edyg0C6ObRQFUo36R1VYrb5IYmak25TmL1OfR5RkIUc3PpqFuQKNLKXf5fOtVQaKjaexzwodVeWZQDKEG_RPt_Ybb99EnEm6vPKs6e3pWFbKiBq71WleLHhVrdFb4YPowRKjc7bG0jyGUxiQ2iXy0RWDj9tIjfI-KEdzNp5oVnX7j4p3H12DwQrRPmd1nz3BciAQNINvDpzqusuIUw8JXyLFCz838Y0NhwB1_bYZyctxRLSzrGZuI5rrWtItgupqMsOlJ3RNy1QrIbQ2g6nPmzl-atOqcQ4Nw0HeDLR8dhM1OsIcFLbKXBUtwXofflhzAQrkDxhwYiXii',
          ),
        ),
        5 => 
        array (
          'name' => 'x-acs-airticket-language',
          'in' => 'header',
          'schema' => 
          array (
            'title' => '多语言 默认取买家账号配置',
            'description' => '多语言 默认取买家账号配置',
            'type' => 'string',
            'required' => false,
            'example' => 'en_US',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'PopBaseRes<ApplyRefundRes, Object>',
            'description' => 'PopBaseRes<ApplyRefundRes, Object>',
            'type' => 'object',
            'properties' => 
            array (
              'status' => 
              array (
                'title' => 'http 请求成功，status 值均为 200',
                'description' => 'http 请求成功，status 值均为 200',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'error_code' => 
              array (
                'title' => '业务错误码',
                'description' => '业务错误码',
                'type' => 'string',
                'example' => 'null',
              ),
              'error_msg' => 
              array (
                'title' => '错误信息',
                'description' => '错误信息',
                'type' => 'string',
                'example' => 'null',
              ),
              'success' => 
              array (
                'title' => '是否正确',
                'description' => '是否正确',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'RequestId' => 
              array (
                'title' => '请求 RequestId',
                'description' => '请求 RequestId',
                'type' => 'string',
                'example' => '51593418-8C73-5E47-8BA8-3F1D4A00CC0B',
              ),
              'data' => 
              array (
                'title' => '正确处理返回数据',
                'description' => '正确处理返回数据',
                'type' => 'object',
                'properties' => 
                array (
                  'order_num' => 
                  array (
                    'title' => '订单号',
                    'description' => '订单号',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '4966***617111',
                  ),
                  'refund_results' => 
                  array (
                    'title' => '退票单申请结果列表',
                    'description' => '退票单申请结果列表',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '元素',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'refund_order_num' => 
                        array (
                          'title' => '退票单号',
                          'description' => '退票单号',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '4966***617202',
                        ),
                        'status' => 
                        array (
                          'title' => '退票单状态 0:退票单创建成功; 1:退票单创建失败',
                          'description' => '退票单状态 0:退票单创建成功; 1:退票单创建失败',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '0',
                        ),
                        'fail_reason' => 
                        array (
                          'title' => '退票申请失败原因',
                          'description' => '退票申请失败原因',
                          'type' => 'string',
                          'example' => 'desc reason',
                        ),
                        'refund_passengers' => 
                        array (
                          'title' => '该退票单下包含的退票乘机人列表',
                          'description' => '该退票单下包含的退票乘机人列表',
                          'type' => 'array',
                          'items' => 
                          array (
                            'description' => '元素',
                            'type' => 'object',
                            'properties' => 
                            array (
                              'first_name' => 
                              array (
                                'title' => '乘机人名',
                                'description' => '乘机人名',
                                'type' => 'string',
                                'example' => 'SAN',
                              ),
                              'last_name' => 
                              array (
                                'title' => '乘机人姓',
                                'description' => '乘机人姓',
                                'type' => 'string',
                                'example' => 'ZHANG',
                              ),
                              'document' => 
                              array (
                                'title' => '证件号',
                                'description' => '证件号',
                                'type' => 'string',
                                'example' => '411***********4411',
                              ),
                            ),
                          ),
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'error_data' => 
              array (
                'title' => '错误处理携带数据',
                'description' => '错误处理携带数据',
                'type' => 'any',
                'example' => 'null',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"status\\": 200,\\n  \\"error_code\\": \\"null\\",\\n  \\"error_msg\\": \\"null\\",\\n  \\"success\\": true,\\n  \\"RequestId\\": \\"51593418-8C73-5E47-8BA8-3F1D4A00CC0B\\",\\n  \\"data\\": {\\n    \\"order_num\\": 0,\\n    \\"refund_results\\": [\\n      {\\n        \\"refund_order_num\\": 0,\\n        \\"status\\": 0,\\n        \\"fail_reason\\": \\"desc reason\\",\\n        \\"refund_passengers\\": [\\n          {\\n            \\"first_name\\": \\"SAN\\",\\n            \\"last_name\\": \\"ZHANG\\",\\n            \\"document\\": \\"411***********4411\\"\\n          }\\n        ]\\n      }\\n    ]\\n  },\\n  \\"error_data\\": \\"null\\"\\n}","type":"json"}]',
      'title' => 'RefundApply',
    ),
    'RefundDetailList' => 
    array (
      'summary' => '退票单详情列表。',
      'path' => '/airticket/v1/refund/detail-list',
      'methods' => 
      array (
        0 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'https',
        1 => 'http',
      ),
      'security' => 
      array (
        0 => 
        array (
          'accessTokenAuth' => 
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
          'name' => 'order_num',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '订单号',
            'description' => '订单号',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '49884*****950',
          ),
        ),
        1 => 
        array (
          'name' => 'refund_create_begin_time',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '退票单创建开始时间，UTC时间戳',
            'description' => '退票单创建开始时间，UTC时间戳',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'example' => '1677229002000',
          ),
        ),
        2 => 
        array (
          'name' => 'refund_create_end_time',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '退票单创建结束时间，UTC时间戳',
            'description' => '退票单创建结束时间，UTC时间戳',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'example' => '1677229005000',
          ),
        ),
        3 => 
        array (
          'name' => 'page_index',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '页索引',
            'description' => '页索引',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        4 => 
        array (
          'name' => 'page_size',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '页大小',
            'description' => '页大小',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '20',
          ),
        ),
        5 => 
        array (
          'name' => 'x-acs-airticket-access-token',
          'in' => 'header',
          'schema' => 
          array (
            'title' => 'access_token',
            'description' => 'access_token',
            'type' => 'string',
            'required' => true,
            'example' => 'eyJhbGciOiJSUzI1NiIsImtpZCI6InN1ZXpfa2V5aWQifQ.eyJqdGkiOiJCQldMaWIzN0VxbC0xMjhhR2N5elJ3IiwiaWF0IjoxNjc3MDY2NTAxLCJleHAiOjE2NzcwNzM3MDEsIm5iZiI6MTY3NzA2NjQ0MX0.AF0DxsZK4Edyg0C6ObRQFUo36R1VYrb5IYmak25TmL1OfR5RkIUc3PpqFuQKNLKXf5fOtVQaKjaexzwodVeWZQDKEG_RPt_Ybb99EnEm6vPKs6e3pWFbKiBq71WleLHhVrdFb4YPowRKjc7bG0jyGUxiQ2iXy0RWDj9tIjfI-KEdzNp5oVnX7j4p3H12DwQrRPmd1nz3BciAQNINvDpzqusuIUw8JXyLFCz838Y0NhwB1_bYZyctxRLSzrGZuI5rrWtItgupqMsOlJ3RNy1QrIbQ2g6nPmzl-atOqcQ4Nw0HeDLR8dhM1OsIcFLbKXBUtwXofflhzAQrkDxhwYiXii',
          ),
        ),
        6 => 
        array (
          'name' => 'x-acs-airticket-language',
          'in' => 'header',
          'schema' => 
          array (
            'title' => '多语言 默认取买家账号配置',
            'description' => '多语言 默认取买家账号配置',
            'type' => 'string',
            'required' => false,
            'example' => 'en_US',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'PopBaseRes<PageData<RefundOrder>, Object>',
            'description' => 'PopBaseRes<PageData<RefundOrder>, Object>',
            'type' => 'object',
            'properties' => 
            array (
              'status' => 
              array (
                'title' => 'http 请求成功，status 值均为 200',
                'description' => 'http 请求成功，status 值均为 200',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'error_code' => 
              array (
                'title' => '业务错误码',
                'description' => '业务错误码',
                'type' => 'string',
                'example' => 'null',
              ),
              'error_msg' => 
              array (
                'title' => '错误信息',
                'description' => '错误信息',
                'type' => 'string',
                'example' => 'null',
              ),
              'success' => 
              array (
                'title' => '是否正确',
                'description' => '是否正确',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'RequestId' => 
              array (
                'title' => '请求 RequestId',
                'description' => '请求 RequestId',
                'type' => 'string',
                'example' => '51593418-8C73-5E47-8BA8-3F1D4A00CC0B',
              ),
              'data' => 
              array (
                'title' => '正确处理返回数据',
                'description' => '正确处理返回数据',
                'type' => 'object',
                'properties' => 
                array (
                  'list' => 
                  array (
                    'title' => '数据列表',
                    'description' => '数据列表',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '元素',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'refund_order_num' => 
                        array (
                          'title' => '退票单号',
                          'description' => '退票单号',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '49884*****950',
                        ),
                        'order_num' => 
                        array (
                          'title' => '订单号',
                          'description' => '订单号',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '49884*****2345',
                        ),
                        'refund_order_status' => 
                        array (
                          'title' => '退票单状态  0:申请退票; 1:退票受理中; 2:退票失败; 3:退票成功',
                          'description' => '退票单状态  0:申请退票; 1:退票受理中; 2:退票失败; 3:退票成功',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '1',
                        ),
                        'transaction_no' => 
                        array (
                          'title' => '交易流水号',
                          'description' => '交易流水号',
                          'type' => 'string',
                          'example' => '49884**tde-95za',
                        ),
                        'utc_create_time' => 
                        array (
                          'title' => '创建时间 UTC时间戳',
                          'description' => '创建时间 UTC时间戳',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1677229002000',
                        ),
                        'is_multi_refund' => 
                        array (
                          'title' => '是否是补退单',
                          'description' => '是否是补退单',
                          'type' => 'boolean',
                          'example' => 'true',
                        ),
                        'related_refund_order_num' => 
                        array (
                          'title' => '该补退单号关联的原单退票单号 补退单才会有，表示关联原单的退票单ID',
                          'description' => '该补退单号关联的原单退票单号 补退单才会有，表示关联原单的退票单ID',
                          'type' => 'string',
                          'example' => '49884*****2387',
                        ),
                      ),
                    ),
                  ),
                  'pagination' => 
                  array (
                    'title' => '分页信息',
                    'description' => '分页信息',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'total_count' => 
                      array (
                        'title' => '总数量',
                        'description' => '总数量',
                        'type' => 'integer',
                        'format' => 'int32',
                        'example' => '5',
                      ),
                      'total_page' => 
                      array (
                        'title' => '共几页',
                        'description' => '共几页',
                        'type' => 'integer',
                        'format' => 'int32',
                        'example' => '1',
                      ),
                      'current_page' => 
                      array (
                        'title' => '当前第几页',
                        'description' => '当前第几页',
                        'type' => 'integer',
                        'format' => 'int32',
                        'example' => '1',
                      ),
                      'page_size' => 
                      array (
                        'title' => '每页数量',
                        'description' => '每页数量',
                        'type' => 'integer',
                        'format' => 'int32',
                        'example' => '10',
                      ),
                    ),
                  ),
                ),
              ),
              'error_data' => 
              array (
                'title' => '错误处理携带数据',
                'description' => '错误处理携带数据',
                'type' => 'any',
                'example' => 'null',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"status\\": 200,\\n  \\"error_code\\": \\"null\\",\\n  \\"error_msg\\": \\"null\\",\\n  \\"success\\": true,\\n  \\"RequestId\\": \\"51593418-8C73-5E47-8BA8-3F1D4A00CC0B\\",\\n  \\"data\\": {\\n    \\"list\\": [\\n      {\\n        \\"refund_order_num\\": 0,\\n        \\"order_num\\": 0,\\n        \\"refund_order_status\\": 1,\\n        \\"transaction_no\\": \\"49884**tde-95za\\",\\n        \\"utc_create_time\\": 1677229002000,\\n        \\"is_multi_refund\\": true,\\n        \\"related_refund_order_num\\": \\"49884*****2387\\"\\n      }\\n    ],\\n    \\"pagination\\": {\\n      \\"total_count\\": 5,\\n      \\"total_page\\": 1,\\n      \\"current_page\\": 1,\\n      \\"page_size\\": 10\\n    }\\n  },\\n  \\"error_data\\": \\"null\\"\\n}","type":"json"}]',
      'title' => 'RefundDetailList',
    ),
    'RefundDetail' => 
    array (
      'summary' => '退票单详情。',
      'path' => '/airticket/v1/refund/detail',
      'methods' => 
      array (
        0 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'https',
        1 => 'http',
      ),
      'security' => 
      array (
        0 => 
        array (
          'accessTokenAuth' => 
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
          'name' => 'refund_order_num',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '退票单号',
            'description' => '退票单号',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'example' => '4966***617732',
          ),
        ),
        1 => 
        array (
          'name' => 'x-acs-airticket-access-token',
          'in' => 'header',
          'schema' => 
          array (
            'title' => 'access_token',
            'description' => 'access_token',
            'type' => 'string',
            'required' => true,
            'example' => 'eyJhbGciOiJSUzI1NiIsImtpZCI6InN1ZXpfa2V5aWQifQ.eyJqdGkiOiJCQldMaWIzN0VxbC0xMjhhR2N5elJ3IiwiaWF0IjoxNjc3MDY2NTAxLCJleHAiOjE2NzcwNzM3MDEsIm5iZiI6MTY3NzA2NjQ0MX0.AF0DxsZK4Edyg0C6ObRQFUo36R1VYrb5IYmak25TmL1OfR5RkIUc3PpqFuQKNLKXf5fOtVQaKjaexzwodVeWZQDKEG_RPt_Ybb99EnEm6vPKs6e3pWFbKiBq71WleLHhVrdFb4YPowRKjc7bG0jyGUxiQ2iXy0RWDj9tIjfI-KEdzNp5oVnX7j4p3H12DwQrRPmd1nz3BciAQNINvDpzqusuIUw8JXyLFCz838Y0NhwB1_bYZyctxRLSzrGZuI5rrWtItgupqMsOlJ3RNy1QrIbQ2g6nPmzl-atOqcQ4Nw0HeDLR8dhM1OsIcFLbKXBUtwXofflhzAQrkDxhwYiXii',
          ),
        ),
        2 => 
        array (
          'name' => 'x-acs-airticket-language',
          'in' => 'header',
          'schema' => 
          array (
            'title' => '多语言 默认取买家账号配置',
            'description' => '多语言 默认取买家账号配置',
            'type' => 'string',
            'required' => false,
            'example' => 'en_US',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'PopBaseRes<RefundOrderDetail, Object>',
            'description' => 'PopBaseRes<RefundOrderDetail, Object>',
            'type' => 'object',
            'properties' => 
            array (
              'status' => 
              array (
                'title' => 'http 请求成功，status 值均为 200',
                'description' => 'http 请求成功，status 值均为 200',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'error_code' => 
              array (
                'title' => '业务错误码',
                'description' => '业务错误码',
                'type' => 'string',
                'example' => 'null',
              ),
              'error_msg' => 
              array (
                'title' => '错误信息',
                'description' => '错误信息',
                'type' => 'string',
                'example' => 'null',
              ),
              'success' => 
              array (
                'title' => '是否正确',
                'description' => '是否正确',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'RequestId' => 
              array (
                'title' => '请求 RequestId',
                'type' => 'string',
                'example' => '51593418-8C73-5E47-8BA8-3F1D4A00CC0B',
              ),
              'data' => 
              array (
                'title' => '正确处理返回数据',
                'description' => '正确处理返回数据',
                'type' => 'object',
                'properties' => 
                array (
                  'refund_order_num' => 
                  array (
                    'title' => '退票单号',
                    'description' => '退票单号',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '4966***617654',
                  ),
                  'order_num' => 
                  array (
                    'title' => '订单号',
                    'description' => '订单号',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '4966***617111',
                  ),
                  'status' => 
                  array (
                    'title' => '退票单状态 0:申请退票; 1:退票受理中; 2:退票失败; 3:退票成功',
                    'description' => '退票单状态 0:申请退票; 1:退票受理中; 2:退票失败; 3:退票成功',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                  'refund_type' => 
                  array (
                    'title' => '申请退票类型 2:自愿申请; 5:航班延误或取消、航班时刻变更等航司原因; 6:身体原因且有二级甲等医院<含>以上的医院证明; 7:非自愿确定性应急引导; 100:非自愿非确定性应急',
                    'description' => '申请退票类型 2:自愿申请; 5:航班延误或取消、航班时刻变更等航司原因; 6:身体原因且有二级甲等医院<含>以上的医院证明; 7:非自愿确定性应急引导; 100:非自愿非确定性应急',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '5',
                  ),
                  'refund_reason' => 
                  array (
                    'title' => '提退原因',
                    'description' => '提退原因',
                    'type' => 'string',
                    'example' => 'desc reason',
                  ),
                  'refuse_reason' => 
                  array (
                    'title' => '提退拒绝原因',
                    'description' => '提退拒绝原因',
                    'type' => 'string',
                    'example' => 'refuse reason',
                  ),
                  'refund_attachment_urls' => 
                  array (
                    'title' => '病退附件url列表',
                    'description' => '病退附件url列表',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '元素',
                      'type' => 'string',
                      'example' => '["xxx","zzz"]',
                    ),
                    'example' => '[zzz,yyy]',
                  ),
                  'utc_create_time' => 
                  array (
                    'title' => '退票单创建时间, UTC时间戳',
                    'description' => '退票单创建时间, UTC时间戳',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1677229002000',
                  ),
                  'pay_success_utc_time' => 
                  array (
                    'title' => '实际退款时间 UTC时间戳',
                    'description' => '实际退款时间 UTC时间戳',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1677229005000',
                  ),
                  'transaction_no' => 
                  array (
                    'title' => '交易流水号',
                    'description' => '交易流水号',
                    'type' => 'string',
                    'example' => '1677229005000',
                  ),
                  'passenger_refund_details' => 
                  array (
                    'title' => '乘机人提退详情列表,乘机人纬度的提退信息',
                    'description' => '乘机人提退详情列表,乘机人纬度的提退信息',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '元素',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'passenger' => 
                        array (
                          'title' => '提退的乘机人信息',
                          'description' => '提退的乘机人信息',
                          'type' => 'object',
                          'properties' => 
                          array (
                            'first_name' => 
                            array (
                              'title' => '乘机人名',
                              'description' => '乘机人名',
                              'type' => 'string',
                              'example' => 'SAN',
                            ),
                            'last_name' => 
                            array (
                              'title' => '乘机人姓',
                              'description' => '乘机人姓',
                              'type' => 'string',
                              'example' => 'ZHANG',
                            ),
                            'document' => 
                            array (
                              'title' => '证件号',
                              'description' => '证件号',
                              'type' => 'string',
                              'example' => '411***********4411',
                            ),
                          ),
                        ),
                        'refund_fee' => 
                        array (
                          'title' => '退票费明细',
                          'description' => '退票费明细',
                          'type' => 'object',
                          'properties' => 
                          array (
                            'non_refundable_ticket_fee' => 
                            array (
                              'title' => '票不可退金额，即退票手续费',
                              'description' => '票不可退金额，即退票手续费',
                              'type' => 'number',
                              'format' => 'double',
                              'example' => '30',
                            ),
                            'non_refundable_tax_fee' => 
                            array (
                              'title' => '税不可退金额，即退税手续费',
                              'description' => '税不可退金额，即退税手续费',
                              'type' => 'number',
                              'format' => 'double',
                              'example' => '30',
                            ),
                            'already_used_total_fee' => 
                            array (
                              'title' => '已使用的机票总价格',
                              'description' => '已使用的机票总价格',
                              'type' => 'number',
                              'format' => 'double',
                              'example' => '30',
                            ),
                            'non_refundable_change_service_fee' => 
                            array (
                              'title' => '不可退改签手续费',
                              'description' => '不可退改签手续费',
                              'type' => 'number',
                              'format' => 'double',
                              'example' => '30',
                            ),
                            'non_refundable_change_upgrade_fee' => 
                            array (
                              'title' => '不可退升舱手续费',
                              'description' => '不可退升舱手续费',
                              'type' => 'number',
                              'format' => 'double',
                              'example' => '30',
                            ),
                            'refund_to_buyer_money' => 
                            array (
                              'title' => '原票可退给用户的金额(票价 + 税费  - 退票手续费 - 退税手续费 -  已使用的机票总价格 - 营销)',
                              'description' => '原票可退给用户的金额(票价 + 税费  - 退票手续费 - 退税手续费 -  已使用的机票总价格 - 营销)',
                              'type' => 'number',
                              'format' => 'double',
                              'example' => '30',
                            ),
                            'modify_refund_to_buyer_money' => 
                            array (
                              'title' => '改签退给用户的金额',
                              'description' => '改签退给用户的金额',
                              'type' => 'number',
                              'format' => 'double',
                              'example' => '30',
                            ),
                          ),
                        ),
                      ),
                    ),
                  ),
                  'contain_multi_refund' => 
                  array (
                    'title' => '是否含有补退',
                    'description' => '是否含有补退',
                    'type' => 'boolean',
                    'example' => 'false',
                  ),
                  'multi_refund_details' => 
                  array (
                    'title' => '首次退关联的补退详情列表',
                    'description' => '首次退关联的补退详情列表',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '元素',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'multi_refund_order_num' => 
                        array (
                          'title' => '补退单退票单号',
                          'description' => '补退单退票单号',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '498843***6950',
                        ),
                        'multi_refund_transaction_no' => 
                        array (
                          'title' => '补退单流水号',
                          'description' => '补退单流水号',
                          'type' => 'string',
                          'example' => '498843***6950',
                        ),
                        'passenger_multi_refund_details' => 
                        array (
                          'title' => '乘机人纬度的补退详情',
                          'description' => '乘机人纬度的补退详情',
                          'type' => 'array',
                          'items' => 
                          array (
                            'description' => '元素',
                            'type' => 'object',
                            'properties' => 
                            array (
                              'passenger' => 
                              array (
                                'title' => '提退的乘机人',
                                'description' => '提退的乘机人',
                                'type' => 'object',
                                'properties' => 
                                array (
                                  'first_name' => 
                                  array (
                                    'title' => '乘机人名',
                                    'description' => '乘机人名',
                                    'type' => 'string',
                                    'example' => 'SAN',
                                  ),
                                  'last_name' => 
                                  array (
                                    'title' => '乘机人姓',
                                    'description' => '乘机人姓',
                                    'type' => 'string',
                                    'example' => 'ZHANG',
                                  ),
                                  'document' => 
                                  array (
                                    'title' => '证件号',
                                    'description' => '证件号',
                                    'type' => 'string',
                                    'example' => '411***********4411',
                                  ),
                                ),
                              ),
                              'original_order_refund_fee' => 
                              array (
                                'title' => '原单补退的金额',
                                'description' => '原单补退的金额',
                                'type' => 'number',
                                'format' => 'double',
                                'example' => '30',
                              ),
                              'change_order_refund_fee' => 
                              array (
                                'title' => '改签单补退的金额',
                                'description' => '改签单补退的金额',
                                'type' => 'number',
                                'format' => 'double',
                                'example' => '30',
                              ),
                            ),
                          ),
                        ),
                      ),
                    ),
                  ),
                  'refund_journeys' => 
                  array (
                    'title' => '提退的行程',
                    'description' => '提退的行程',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '元素',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'transfer_count' => 
                        array (
                          'title' => '中转次数',
                          'description' => '中转次数',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '0',
                        ),
                        'segment_list' => 
                        array (
                          'title' => '航段信息',
                          'description' => '航段信息',
                          'type' => 'array',
                          'items' => 
                          array (
                            'description' => '元素',
                            'type' => 'object',
                            'properties' => 
                            array (
                              'segment_id' => 
                              array (
                                'title' => '航段ID 组成格式:航班号+出发机场+达到机场+起飞日期（MMdd）',
                                'description' => '航段ID 组成格式:航班号+出发机场+达到机场+起飞日期（MMdd）',
                                'type' => 'string',
                                'example' => 'HO1295-PVG-MFM-20230310
',
                              ),
                              'departure_airport' => 
                              array (
                                'title' => '航班起飞机场三字码(大写)',
                                'description' => '航班起飞机场三字码(大写)',
                                'type' => 'string',
                                'example' => 'PVG',
                              ),
                              'arrival_airport' => 
                              array (
                                'title' => '航班到达机场三字码(大写)',
                                'description' => '航班到达机场三字码(大写)',
                                'type' => 'string',
                                'example' => 'MFM',
                              ),
                              'departure_city' => 
                              array (
                                'title' => '航班起飞城市三字码(大写)',
                                'description' => '航班起飞城市三字码(大写)',
                                'type' => 'string',
                                'example' => 'SHA',
                              ),
                              'arrival_city' => 
                              array (
                                'title' => '航班到达城市三字码(大写)',
                                'description' => '航班到达城市三字码(大写)',
                                'type' => 'string',
                                'example' => 'MFM',
                              ),
                              'marketing_flight_no' => 
                              array (
                                'title' => '市场方航班号(如：HO1295)',
                                'description' => '市场方航班号(如：HO1295)',
                                'type' => 'string',
                                'example' => 'HO1295',
                              ),
                              'marketing_flight_no_int' => 
                              array (
                                'title' => '市场方数字航班号（如：1295）',
                                'description' => '市场方数字航班号（如：1295）',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1295',
                              ),
                              'marketing_airline' => 
                              array (
                                'title' => '市场方航司(如：HO)',
                                'description' => '市场方航司(如：HO)',
                                'type' => 'string',
                                'example' => 'HO',
                              ),
                              'operating_flight_no' => 
                              array (
                                'title' => '承运方航班号(如：CX601)',
                                'description' => '承运方航班号(如：CX601)',
                                'type' => 'string',
                                'example' => 'HO1295',
                              ),
                              'operating_airline' => 
                              array (
                                'title' => '承运方航司(如：CX)',
                                'description' => '承运方航司(如：CX)',
                                'type' => 'string',
                                'example' => 'HO',
                              ),
                              'departure_time' => 
                              array (
                                'title' => '航班起飞日期时间 字符串格式(yyyy-MM-dd HH:mm:ss)',
                                'description' => '航班起飞日期时间 字符串格式(yyyy-MM-dd HH:mm:ss)',
                                'type' => 'string',
                                'example' => '2023-03-10 07:55:00',
                              ),
                              'arrival_time' => 
                              array (
                                'title' => '航班到达日期时间 字符串格式(yyyy-MM-dd HH:mm:ss)',
                                'description' => '航班到达日期时间 字符串格式(yyyy-MM-dd HH:mm:ss)',
                                'type' => 'string',
                                'example' => '2023-03-10 10:40:00',
                              ),
                              'code_share' => 
                              array (
                                'title' => '是否为共享航班',
                                'description' => '是否为共享航班',
                                'type' => 'boolean',
                                'example' => 'false',
                              ),
                              'departure_terminal' => 
                              array (
                                'title' => '航班出发航站楼',
                                'description' => '航班出发航站楼',
                                'type' => 'string',
                                'example' => 'T2',
                              ),
                              'arrival_terminal' => 
                              array (
                                'title' => '航班到达航站楼',
                                'description' => '航班到达航站楼',
                                'type' => 'string',
                                'example' => 'T1',
                              ),
                              'equip_type' => 
                              array (
                                'title' => '机型',
                                'description' => '机型',
                                'type' => 'string',
                                'example' => '32Q',
                              ),
                              'cabin' => 
                              array (
                                'title' => '舱位',
                                'description' => '舱位',
                                'type' => 'string',
                                'example' => 'V',
                              ),
                              'cabin_class' => 
                              array (
                                'title' => '舱等',
                                'description' => '舱等',
                                'type' => 'string',
                                'example' => 'Y',
                              ),
                              'availability' => 
                              array (
                                'title' => '剩余座位数',
                                'description' => '剩余座位数',
                                'type' => 'string',
                                'example' => '7',
                              ),
                              'stop_city_list' => 
                              array (
                                'title' => '经停城市列表，stopQuantity > 0 时有值，多个用逗号分割',
                                'description' => '经停城市列表，stopQuantity > 0 时有值，多个用逗号分割',
                                'type' => 'string',
                                'example' => 'SEL,HKG',
                              ),
                              'stop_quantity' => 
                              array (
                                'title' => '经停城市数目',
                                'description' => '经停城市数目',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '0',
                              ),
                              'flight_duration' => 
                              array (
                                'title' => '飞行时间 单位：分钟',
                                'description' => '飞行时间 单位：分钟',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '165',
                              ),
                            ),
                          ),
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'error_data' => 
              array (
                'title' => '错误处理携带数据',
                'description' => '错误处理携带数据',
                'type' => 'any',
                'example' => 'null',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"status\\": 200,\\n  \\"error_code\\": \\"null\\",\\n  \\"error_msg\\": \\"null\\",\\n  \\"success\\": true,\\n  \\"request_id\\": \\"51593418-8C73-5E47-8BA8-3F1D4A00CC0B\\",\\n  \\"data\\": {\\n    \\"refund_order_num\\": 0,\\n    \\"order_num\\": 0,\\n    \\"status\\": 1,\\n    \\"refund_type\\": 5,\\n    \\"refund_reason\\": \\"desc reason\\",\\n    \\"refuse_reason\\": \\"refuse reason\\",\\n    \\"refund_attachment_urls\\": [\\n      \\"[\\\\\\"xxx\\\\\\",\\\\\\"zzz\\\\\\"]\\"\\n    ],\\n    \\"utc_create_time\\": 1677229002000,\\n    \\"pay_success_utc_time\\": 1677229005000,\\n    \\"transaction_no\\": \\"1677229005000\\",\\n    \\"passenger_refund_details\\": [\\n      {\\n        \\"passenger\\": {\\n          \\"first_name\\": \\"SAN\\",\\n          \\"last_name\\": \\"ZHANG\\",\\n          \\"document\\": \\"411***********4411\\"\\n        },\\n        \\"refund_fee\\": {\\n          \\"non_refundable_ticket_fee\\": 30,\\n          \\"non_refundable_tax_fee\\": 30,\\n          \\"already_used_total_fee\\": 30,\\n          \\"non_refundable_change_service_fee\\": 30,\\n          \\"non_refundable_change_upgrade_fee\\": 30,\\n          \\"refund_to_buyer_money\\": 30,\\n          \\"modify_refund_to_buyer_money\\": 30\\n        }\\n      }\\n    ],\\n    \\"contain_multi_refund\\": false,\\n    \\"multi_refund_details\\": [\\n      {\\n        \\"multi_refund_order_num\\": 0,\\n        \\"multi_refund_transaction_no\\": \\"498843***6950\\",\\n        \\"passenger_multi_refund_details\\": [\\n          {\\n            \\"passenger\\": {\\n              \\"first_name\\": \\"SAN\\",\\n              \\"last_name\\": \\"ZHANG\\",\\n              \\"document\\": \\"411***********4411\\"\\n            },\\n            \\"original_order_refund_fee\\": 30,\\n            \\"change_order_refund_fee\\": 30\\n          }\\n        ]\\n      }\\n    ],\\n    \\"refund_journeys\\": [\\n      {\\n        \\"transfer_count\\": 0,\\n        \\"segment_list\\": [\\n          {\\n            \\"segment_id\\": \\"HO1295-PVG-MFM-20230310\\\\n\\",\\n            \\"departure_airport\\": \\"PVG\\",\\n            \\"arrival_airport\\": \\"MFM\\",\\n            \\"departure_city\\": \\"SHA\\",\\n            \\"arrival_city\\": \\"MFM\\",\\n            \\"marketing_flight_no\\": \\"HO1295\\",\\n            \\"marketing_flight_no_int\\": 1295,\\n            \\"marketing_airline\\": \\"HO\\",\\n            \\"operating_flight_no\\": \\"HO1295\\",\\n            \\"operating_airline\\": \\"HO\\",\\n            \\"departure_time\\": \\"2023-03-10 07:55:00\\",\\n            \\"arrival_time\\": \\"2023-03-10 10:40:00\\",\\n            \\"code_share\\": false,\\n            \\"departure_terminal\\": \\"T2\\",\\n            \\"arrival_terminal\\": \\"T1\\",\\n            \\"equip_type\\": \\"32Q\\",\\n            \\"cabin\\": \\"V\\",\\n            \\"cabin_class\\": \\"Y\\",\\n            \\"availability\\": \\"7\\",\\n            \\"stop_city_list\\": \\"SEL,HKG\\",\\n            \\"stop_quantity\\": 0,\\n            \\"flight_duration\\": 165\\n          }\\n        ]\\n      }\\n    ]\\n  },\\n  \\"error_data\\": \\"null\\"\\n}","type":"json"}]',
      'title' => 'RefundDetail',
    ),
    'ChangeConfirm' => 
    array (
      'summary' => '确认改签。',
      'path' => '/airticket/v1/change/action-confirm',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'https',
        1 => 'http',
      ),
      'security' => 
      array (
        0 => 
        array (
          'accessTokenAuth' => 
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
          'name' => 'change_order_num',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '改签单号',
            'description' => '改签单号',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'example' => '4988430***950',
          ),
        ),
        1 => 
        array (
          'name' => 'x-acs-airticket-access-token',
          'in' => 'header',
          'schema' => 
          array (
            'title' => 'access_token',
            'description' => 'access_token',
            'type' => 'string',
            'required' => true,
            'example' => 'eyJhbGciOiJSUzI1NiIsImtpZCI6InN1ZXpfa2V5aWQifQ.eyJqdGkiOiJCQldMaWIzN0VxbC0xMjhhR2N5elJ3IiwiaWF0IjoxNjc3MDY2NTAxLCJleHAiOjE2NzcwNzM3MDEsIm5iZiI6MTY3NzA2NjQ0MX0.AF0DxsZK4Edyg0C6ObRQFUo36R1VYrb5IYmak25TmL1OfR5RkIUc3PpqFuQKNLKXf5fOtVQaKjaexzwodVeWZQDKEG_RPt_Ybb99EnEm6vPKs6e3pWFbKiBq71WleLHhVrdFb4YPowRKjc7bG0jyGUxiQ2iXy0RWDj9tIjfI-KEdzNp5oVnX7j4p3H12DwQrRPmd1nz3BciAQNINvDpzqusuIUw8JXyLFCz838Y0NhwB1_bYZyctxRLSzrGZuI5rrWtItgupqMsOlJ3RNy1QrIbQ2g6nPmzl-atOqcQ4Nw0HeDLR8dhM1OsIcFLbKXBUtwXofflhzAQrkDxhwYiXii',
          ),
        ),
        2 => 
        array (
          'name' => 'x-acs-airticket-language',
          'in' => 'header',
          'schema' => 
          array (
            'title' => '多语言 默认取买家账号配置',
            'description' => '多语言 默认取买家账号配置',
            'type' => 'string',
            'required' => false,
            'example' => 'en_US',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'PopBaseRes<ConfirmChangeRes, Object>',
            'description' => 'PopBaseRes<ConfirmChangeRes, Object>',
            'type' => 'object',
            'properties' => 
            array (
              'status' => 
              array (
                'title' => 'http 请求成功，status 值均为 200',
                'description' => 'http 请求成功，status 值均为 200',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'error_code' => 
              array (
                'title' => '业务错误码',
                'description' => '业务错误码',
                'type' => 'string',
                'example' => 'null',
              ),
              'error_msg' => 
              array (
                'title' => '错误信息',
                'description' => '错误信息',
                'type' => 'string',
                'example' => 'null',
              ),
              'success' => 
              array (
                'title' => '是否正确',
                'description' => '是否正确',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'RequestId' => 
              array (
                'title' => '请求 RequestId',
                'type' => 'string',
                'example' => '51593418-8C73-5E47-8BA8-3F1D4A00CC0B',
              ),
              'data' => 
              array (
                'title' => '正确处理返回数据',
                'description' => '正确处理返回数据',
                'type' => 'object',
                'properties' => 
                array (
                  'pay_amount' => 
                  array (
                    'title' => '改签支付金额',
                    'description' => '改签支付金额',
                    'type' => 'number',
                    'format' => 'double',
                    'example' => '30',
                  ),
                  'transaction_no' => 
                  array (
                    'title' => '改签支付流水号',
                    'description' => '改签支付流水号',
                    'type' => 'string',
                    'example' => 'hkduendkd-2023-dj0',
                  ),
                ),
              ),
              'error_data' => 
              array (
                'title' => '错误处理携带数据',
                'description' => '错误处理携带数据',
                'type' => 'any',
                'example' => 'null',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"status\\": 200,\\n  \\"error_code\\": \\"null\\",\\n  \\"error_msg\\": \\"null\\",\\n  \\"success\\": true,\\n  \\"request_id\\": \\"51593418-8C73-5E47-8BA8-3F1D4A00CC0B\\",\\n  \\"data\\": {\\n    \\"pay_amount\\": 30,\\n    \\"transaction_no\\": \\"hkduendkd-2023-dj0\\"\\n  },\\n  \\"error_data\\": \\"null\\"\\n}","type":"json"}]',
      'title' => 'ChangeConfirm',
    ),
    'ChangeCancel' => 
    array (
      'summary' => '取消改签。',
      'path' => '/airticket/v1/change/action-cancel',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'https',
        1 => 'http',
      ),
      'security' => 
      array (
        0 => 
        array (
          'accessTokenAuth' => 
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
          'name' => 'change_order_num',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '改签单号',
            'description' => '改签单号',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'example' => '4988430***950',
          ),
        ),
        1 => 
        array (
          'name' => 'x-acs-airticket-access-token',
          'in' => 'header',
          'schema' => 
          array (
            'title' => 'access_token',
            'description' => 'access_token',
            'type' => 'string',
            'required' => true,
            'example' => 'eyJhbGciOiJSUzI1NiIsImtpZCI6InN1ZXpfa2V5aWQifQ.eyJqdGkiOiJCQldMaWIzN0VxbC0xMjhhR2N5elJ3IiwiaWF0IjoxNjc3MDY2NTAxLCJleHAiOjE2NzcwNzM3MDEsIm5iZiI6MTY3NzA2NjQ0MX0.AF0DxsZK4Edyg0C6ObRQFUo36R1VYrb5IYmak25TmL1OfR5RkIUc3PpqFuQKNLKXf5fOtVQaKjaexzwodVeWZQDKEG_RPt_Ybb99EnEm6vPKs6e3pWFbKiBq71WleLHhVrdFb4YPowRKjc7bG0jyGUxiQ2iXy0RWDj9tIjfI-KEdzNp5oVnX7j4p3H12DwQrRPmd1nz3BciAQNINvDpzqusuIUw8JXyLFCz838Y0NhwB1_bYZyctxRLSzrGZuI5rrWtItgupqMsOlJ3RNy1QrIbQ2g6nPmzl-atOqcQ4Nw0HeDLR8dhM1OsIcFLbKXBUtwXofflhzAQrkDxhwYiXii',
          ),
        ),
        2 => 
        array (
          'name' => 'x-acs-airticket-language',
          'in' => 'header',
          'schema' => 
          array (
            'title' => '多语言 默认取买家账号配置',
            'description' => '多语言 默认取买家账号配置',
            'type' => 'string',
            'required' => false,
            'example' => 'en_US',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'PopBaseRes',
            'description' => 'PopBaseRes',
            'type' => 'object',
            'properties' => 
            array (
              'status' => 
              array (
                'title' => 'http 请求成功，status 值均为 200',
                'description' => 'http 请求成功，status 值均为 200',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'error_code' => 
              array (
                'title' => '业务错误码',
                'description' => '业务错误码',
                'type' => 'string',
                'example' => 'null',
              ),
              'error_msg' => 
              array (
                'title' => '错误信息',
                'description' => '错误信息',
                'type' => 'string',
                'example' => 'null',
              ),
              'success' => 
              array (
                'title' => '是否正确',
                'description' => '是否正确',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'RequestId' => 
              array (
                'title' => '请求 RequestId',
                'type' => 'string',
                'example' => '51593418-8C73-5E47-8BA8-3F1D4A00CC0B',
              ),
              'data' => 
              array (
                'title' => '正确处理返回数据',
                'description' => '正确处理返回数据',
                'type' => 'any',
                'example' => 'null',
              ),
              'error_data' => 
              array (
                'title' => '错误处理携带数据',
                'description' => '错误处理携带数据',
                'type' => 'any',
                'example' => 'null',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"status\\": 200,\\n  \\"error_code\\": \\"null\\",\\n  \\"error_msg\\": \\"null\\",\\n  \\"success\\": true,\\n  \\"request_id\\": \\"51593418-8C73-5E47-8BA8-3F1D4A00CC0B\\",\\n  \\"data\\": \\"null\\",\\n  \\"error_data\\": \\"null\\"\\n}","type":"json"}]',
      'title' => 'ChangeCancel',
    ),
    'ChangeDetailListOfBuyer' => 
    array (
      'summary' => '根据买家账号分页查询改签单简要信息列表。',
      'path' => '/airticket/v1/change/buyer/detail-list',
      'methods' => 
      array (
        0 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'https',
        1 => 'http',
      ),
      'security' => 
      array (
        0 => 
        array (
          'accessTokenAuth' => 
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
          'name' => 'utc_create_begin',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '改签单创建开始时间 UTC时间戳13位',
            'description' => '改签单创建开始时间 UTC时间戳13位',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1677415276000',
          ),
        ),
        1 => 
        array (
          'name' => 'utc_create_end',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '改签单创建结束时间 UTC时间戳13位',
            'description' => '改签单创建结束时间 UTC时间戳13位',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1677415279000',
          ),
        ),
        2 => 
        array (
          'name' => 'page_index',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '页索引',
            'description' => '页索引',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        3 => 
        array (
          'name' => 'page_size',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '页大小',
            'description' => '页大小',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '10',
          ),
        ),
        4 => 
        array (
          'name' => 'x-acs-airticket-access-token',
          'in' => 'header',
          'schema' => 
          array (
            'title' => 'access_token',
            'description' => 'access_token',
            'type' => 'string',
            'required' => true,
            'example' => 'eyJhbGciOiJSUzI1NiIsImtpZCI6InN1ZXpfa2V5aWQifQ.eyJqdGkiOiJCQldMaWIzN0VxbC0xMjhhR2N5elJ3IiwiaWF0IjoxNjc3MDY2NTAxLCJleHAiOjE2NzcwNzM3MDEsIm5iZiI6MTY3NzA2NjQ0MX0.AF0DxsZK4Edyg0C6ObRQFUo36R1VYrb5IYmak25TmL1OfR5RkIUc3PpqFuQKNLKXf5fOtVQaKjaexzwodVeWZQDKEG_RPt_Ybb99EnEm6vPKs6e3pWFbKiBq71WleLHhVrdFb4YPowRKjc7bG0jyGUxiQ2iXy0RWDj9tIjfI-KEdzNp5oVnX7j4p3H12DwQrRPmd1nz3BciAQNINvDpzqusuIUw8JXyLFCz838Y0NhwB1_bYZyctxRLSzrGZuI5rrWtItgupqMsOlJ3RNy1QrIbQ2g6nPmzl-atOqcQ4Nw0HeDLR8dhM1OsIcFLbKXBUtwXofflhzAQrkDxhwYiXii',
          ),
        ),
        5 => 
        array (
          'name' => 'x-acs-airticket-language',
          'in' => 'header',
          'schema' => 
          array (
            'title' => '多语言 默认取买家账号配置',
            'description' => '多语言 默认取买家账号配置',
            'type' => 'string',
            'required' => false,
            'example' => 'en_US',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'PopBaseRes<PageData<ChangeOrderSearchResult>, Object>',
            'description' => 'PopBaseRes<PageData<ChangeOrderSearchResult>, Object>',
            'type' => 'object',
            'properties' => 
            array (
              'status' => 
              array (
                'title' => 'http 请求成功，status 值均为 200',
                'description' => 'http 请求成功，status 值均为 200',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'error_code' => 
              array (
                'title' => '业务错误码',
                'description' => '业务错误码',
                'type' => 'string',
                'example' => 'null',
              ),
              'error_msg' => 
              array (
                'title' => '错误信息',
                'description' => '错误信息',
                'type' => 'string',
                'example' => 'null',
              ),
              'success' => 
              array (
                'title' => '是否正确',
                'description' => '是否正确',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'RequestId' => 
              array (
                'title' => '请求 RequestId',
                'type' => 'string',
                'example' => '51593418-8C73-5E47-8BA8-3F1D4A00CC0B',
              ),
              'data' => 
              array (
                'title' => '正确处理返回数据',
                'description' => '正确处理返回数据',
                'type' => 'object',
                'properties' => 
                array (
                  'list' => 
                  array (
                    'title' => '数据列表',
                    'description' => '数据列表',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '元素',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'change_order_num' => 
                        array (
                          'title' => '改签单号',
                          'description' => '改签单号',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '4988430***950',
                        ),
                        'order_num' => 
                        array (
                          'title' => '订单号',
                          'description' => '订单号',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '4988430***971',
                        ),
                        'order_status' => 
                        array (
                          'title' => '申请单状态 0:初始状态; 1:待支付; 2:付款成功; 3:改签成功; 4:改签关闭',
                          'description' => '申请单状态 0:初始状态; 1:待支付; 2:付款成功; 3:改签成功; 4:改签关闭',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '2',
                        ),
                        'pay_status' => 
                        array (
                          'title' => '支付状态 0:初始状态; 1:待支付; 2:支付成功; 3:转交易成功; 4:关闭已支付订单成功; 5:关闭未支付订单成功',
                          'description' => '支付状态 0:初始状态; 1:待支付; 2:支付成功; 3:转交易成功; 4:关闭已支付订单成功; 5:关闭未支付订单成功',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '2',
                        ),
                        'transaction_no' => 
                        array (
                          'title' => '交易流水号',
                          'description' => '交易流水号',
                          'type' => 'string',
                          'example' => 'hkduendkd-2023-dj0',
                        ),
                        'utc_create_time' => 
                        array (
                          'title' => '订单创建时间 UTC时间戳',
                          'description' => '订单创建时间 UTC时间戳',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1677415274000',
                        ),
                      ),
                    ),
                  ),
                  'pagination' => 
                  array (
                    'title' => '分页信息',
                    'description' => '分页信息',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'total_count' => 
                      array (
                        'title' => '总数量',
                        'description' => '总数量',
                        'type' => 'integer',
                        'format' => 'int32',
                        'example' => '5',
                      ),
                      'total_page' => 
                      array (
                        'title' => '共几页',
                        'description' => '共几页',
                        'type' => 'integer',
                        'format' => 'int32',
                        'example' => '1',
                      ),
                      'current_page' => 
                      array (
                        'title' => '当前第几页',
                        'description' => '当前第几页',
                        'type' => 'integer',
                        'format' => 'int32',
                        'example' => '1',
                      ),
                      'page_size' => 
                      array (
                        'title' => '每页数量',
                        'description' => '每页数量',
                        'type' => 'integer',
                        'format' => 'int32',
                        'example' => '10',
                      ),
                    ),
                  ),
                ),
              ),
              'error_data' => 
              array (
                'title' => '错误处理携带数据',
                'description' => '错误处理携带数据',
                'type' => 'any',
                'example' => 'null',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"status\\": 200,\\n  \\"error_code\\": \\"null\\",\\n  \\"error_msg\\": \\"null\\",\\n  \\"success\\": true,\\n  \\"request_id\\": \\"51593418-8C73-5E47-8BA8-3F1D4A00CC0B\\",\\n  \\"data\\": {\\n    \\"list\\": [\\n      {\\n        \\"change_order_num\\": 0,\\n        \\"order_num\\": 0,\\n        \\"order_status\\": 2,\\n        \\"pay_status\\": 2,\\n        \\"transaction_no\\": \\"hkduendkd-2023-dj0\\",\\n        \\"utc_create_time\\": 1677415274000\\n      }\\n    ],\\n    \\"pagination\\": {\\n      \\"total_count\\": 5,\\n      \\"total_page\\": 1,\\n      \\"current_page\\": 1,\\n      \\"page_size\\": 10\\n    }\\n  },\\n  \\"error_data\\": \\"null\\"\\n}","type":"json"}]',
      'title' => 'ChangeDetailListOfBuyer',
    ),
    'ChangeDetail' => 
    array (
      'summary' => '改签详情。',
      'path' => '/airticket/v1/change/detail',
      'methods' => 
      array (
        0 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'https',
        1 => 'http',
      ),
      'security' => 
      array (
        0 => 
        array (
          'accessTokenAuth' => 
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
          'name' => 'change_order_num',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '改签单号',
            'description' => '改签单号',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'example' => '4988430***950',
          ),
        ),
        1 => 
        array (
          'name' => 'x-acs-airticket-access-token',
          'in' => 'header',
          'schema' => 
          array (
            'title' => 'access_token',
            'description' => 'access_token',
            'type' => 'string',
            'required' => true,
            'example' => 'eyJhbGciOiJSUzI1NiIsImtpZCI6InN1ZXpfa2V5aWQifQ.eyJqdGkiOiJCQldMaWIzN0VxbC0xMjhhR2N5elJ3IiwiaWF0IjoxNjc3MDY2NTAxLCJleHAiOjE2NzcwNzM3MDEsIm5iZiI6MTY3NzA2NjQ0MX0.AF0DxsZK4Edyg0C6ObRQFUo36R1VYrb5IYmak25TmL1OfR5RkIUc3PpqFuQKNLKXf5fOtVQaKjaexzwodVeWZQDKEG_RPt_Ybb99EnEm6vPKs6e3pWFbKiBq71WleLHhVrdFb4YPowRKjc7bG0jyGUxiQ2iXy0RWDj9tIjfI-KEdzNp5oVnX7j4p3H12DwQrRPmd1nz3BciAQNINvDpzqusuIUw8JXyLFCz838Y0NhwB1_bYZyctxRLSzrGZuI5rrWtItgupqMsOlJ3RNy1QrIbQ2g6nPmzl-atOqcQ4Nw0HeDLR8dhM1OsIcFLbKXBUtwXofflhzAQrkDxhwYiXii',
          ),
        ),
        2 => 
        array (
          'name' => 'x-acs-airticket-language',
          'in' => 'header',
          'schema' => 
          array (
            'title' => '多语言 默认取买家账号配置',
            'description' => '多语言 默认取买家账号配置',
            'type' => 'string',
            'required' => false,
            'example' => 'en_US',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'PopBaseRes<ChangeOrderDetail, Object>',
            'description' => 'PopBaseRes<ChangeOrderDetail, Object>',
            'type' => 'object',
            'properties' => 
            array (
              'status' => 
              array (
                'title' => 'http 请求成功，status 值均为 200',
                'description' => 'http 请求成功，status 值均为 200',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'error_code' => 
              array (
                'title' => '业务错误码',
                'description' => '业务错误码',
                'type' => 'string',
                'example' => 'null',
              ),
              'error_msg' => 
              array (
                'title' => '错误信息',
                'description' => '错误信息',
                'type' => 'string',
                'example' => 'null',
              ),
              'success' => 
              array (
                'title' => '是否正确',
                'description' => '是否正确',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'RequestId' => 
              array (
                'title' => '请求 RequestId',
                'type' => 'string',
                'example' => '51593418-8C73-5E47-8BA8-3F1D4A00CC0B',
              ),
              'data' => 
              array (
                'title' => '正确处理返回数据',
                'description' => '正确处理返回数据',
                'type' => 'object',
                'properties' => 
                array (
                  'change_order_num' => 
                  array (
                    'title' => '改签单号',
                    'description' => '改签单号',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '4988430***950',
                  ),
                  'order_num' => 
                  array (
                    'title' => '订单号',
                    'description' => '订单号',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '5988430***541',
                  ),
                  'change_passengers' => 
                  array (
                    'title' => '改签的乘机人列表',
                    'description' => '改签的乘机人列表',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '元素',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'first_name' => 
                        array (
                          'title' => '乘机人名',
                          'description' => '乘机人名',
                          'type' => 'string',
                          'example' => 'SAN',
                        ),
                        'last_name' => 
                        array (
                          'title' => '乘机人姓',
                          'description' => '乘机人姓',
                          'type' => 'string',
                          'example' => 'ZHANG',
                        ),
                        'document' => 
                        array (
                          'title' => '证件号',
                          'description' => '证件号',
                          'type' => 'string',
                          'example' => '411***********4411',
                        ),
                      ),
                    ),
                  ),
                  'total_amount' => 
                  array (
                    'title' => '改签单支付总金额',
                    'description' => '改签单支付总金额',
                    'type' => 'number',
                    'format' => 'double',
                    'example' => '300',
                  ),
                  'order_status' => 
                  array (
                    'title' => '改签单状态 0:初始状态; 1:待支付; 2:付款成功; 3:改签成功; 4:改签关闭',
                    'description' => '改签单状态 0:初始状态; 1:待支付; 2:付款成功; 3:改签成功; 4:改签关闭',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '2',
                  ),
                  'close_reason' => 
                  array (
                    'title' => '改签关单原因',
                    'description' => '改签关单原因',
                    'type' => 'string',
                    'example' => 'reason desc',
                  ),
                  'transaction_no' => 
                  array (
                    'title' => '交易流水号',
                    'description' => '交易流水号',
                    'type' => 'string',
                    'example' => 'hkduendkd-2023-dj0',
                  ),
                  'change_reason_type' => 
                  array (
                    'title' => '改签原因类型 0:自愿改期; 1:航班变动/航班取消; 2:因疫情改签',
                    'description' => '改签原因类型 0:自愿改期; 1:航班变动/航班取消; 2:因疫情改签',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                  'create_utc_time' => 
                  array (
                    'title' => '改签单创建时间，UTC时间戳',
                    'description' => '改签单创建时间，UTC时间戳',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1677415276000',
                  ),
                  'last_confirm_utc_time' => 
                  array (
                    'title' => '买家最迟支付时间，UTC时间戳',
                    'description' => '买家最迟支付时间，UTC时间戳',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1677415278000',
                  ),
                  'pay_status' => 
                  array (
                    'title' => '支付状态 0:初始状态; 1:待支付; 2:支付成功; 3:转交易成功; 4:关闭已支付订单成功; 5:关闭未支付订单成功',
                    'description' => '支付状态 0:初始状态; 1:待支付; 2:支付成功; 3:转交易成功; 4:关闭已支付订单成功; 5:关闭未支付订单成功',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '2',
                  ),
                  'pay_success_utc_time' => 
                  array (
                    'title' => '买家支付成功时间，UTC时间戳',
                    'description' => '买家支付成功时间，UTC时间戳',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1677415255000',
                  ),
                  'close_utc_time' => 
                  array (
                    'title' => '订单关闭时间，UTC时间戳',
                    'description' => '订单关闭时间，UTC时间戳',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1677415244000',
                  ),
                  'contact' => 
                  array (
                    'title' => '改签联系人信息',
                    'description' => '改签联系人信息',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'mobile_country_code' => 
                      array (
                        'title' => '国家区位码',
                        'description' => '国家区位码',
                        'type' => 'string',
                        'example' => '86',
                      ),
                      'mobile_phone_num' => 
                      array (
                        'title' => '联系人用户手机号',
                        'description' => '联系人用户手机号',
                        'type' => 'string',
                        'example' => '183*****92',
                      ),
                      'email' => 
                      array (
                        'title' => '邮件地址',
                        'description' => '邮件地址',
                        'type' => 'string',
                        'example' => 'gao******@gmail.com',
                      ),
                    ),
                  ),
                  'original_journeys' => 
                  array (
                    'title' => '原始的行程',
                    'description' => '原始的行程',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '元素',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'transfer_count' => 
                        array (
                          'title' => '中转次数',
                          'description' => '中转次数',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '0',
                        ),
                        'segment_list' => 
                        array (
                          'title' => '航段信息',
                          'description' => '航段信息',
                          'type' => 'array',
                          'items' => 
                          array (
                            'description' => 'segment',
                            'type' => 'object',
                            'properties' => 
                            array (
                              'segment_id' => 
                              array (
                                'title' => '航段ID 组成格式:航班号+出发机场+达到机场+起飞日期（MMdd）',
                                'description' => '航段ID 组成格式:航班号+出发机场+达到机场+起飞日期（MMdd）',
                                'type' => 'string',
                                'example' => 'HO1295-PVG-MFM-20230310',
                              ),
                              'departure_airport' => 
                              array (
                                'title' => '航班起飞机场三字码(大写)',
                                'description' => '航班起飞机场三字码(大写)',
                                'type' => 'string',
                                'example' => 'PVG',
                              ),
                              'arrival_airport' => 
                              array (
                                'title' => '航班到达机场三字码(大写)',
                                'description' => '航班到达机场三字码(大写)',
                                'type' => 'string',
                                'example' => 'MFM',
                              ),
                              'departure_city' => 
                              array (
                                'title' => '航班起飞城市三字码(大写)',
                                'description' => '航班起飞城市三字码(大写)',
                                'type' => 'string',
                                'example' => 'SHA',
                              ),
                              'arrival_city' => 
                              array (
                                'title' => '航班到达城市三字码(大写)',
                                'description' => '航班到达城市三字码(大写)',
                                'type' => 'string',
                                'example' => 'MFM',
                              ),
                              'marketing_flight_no' => 
                              array (
                                'title' => '市场方航班号(如：HO1295)',
                                'description' => '市场方航班号(如：HO1295)',
                                'type' => 'string',
                                'example' => 'HO1295',
                              ),
                              'marketing_flight_no_int' => 
                              array (
                                'title' => '市场方数字航班号（如：1295）',
                                'description' => '市场方数字航班号（如：1295）',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1295',
                              ),
                              'marketing_airline' => 
                              array (
                                'title' => '市场方航司(如：HO)',
                                'description' => '市场方航司(如：HO)',
                                'type' => 'string',
                                'example' => 'HO',
                              ),
                              'operating_flight_no' => 
                              array (
                                'title' => '承运方航班号(如：CX601)',
                                'description' => '承运方航班号(如：CX601)',
                                'type' => 'string',
                                'example' => 'HO1295',
                              ),
                              'operating_airline' => 
                              array (
                                'title' => '承运方航司(如：CX)',
                                'description' => '承运方航司(如：CX)',
                                'type' => 'string',
                                'example' => 'HO',
                              ),
                              'departure_time' => 
                              array (
                                'title' => '航班起飞日期时间 字符串格式(yyyy-MM-dd HH:mm:ss)',
                                'description' => '航班起飞日期时间 字符串格式(yyyy-MM-dd HH:mm:ss)',
                                'type' => 'string',
                                'example' => '2023-03-10 07:55:00',
                              ),
                              'arrival_time' => 
                              array (
                                'title' => '航班到达日期时间 字符串格式(yyyy-MM-dd HH:mm:ss)',
                                'description' => '航班到达日期时间 字符串格式(yyyy-MM-dd HH:mm:ss)',
                                'type' => 'string',
                                'example' => '2023-03-10 10:40:00',
                              ),
                              'code_share' => 
                              array (
                                'title' => '是否为共享航班',
                                'description' => '是否为共享航班',
                                'type' => 'boolean',
                                'example' => 'false',
                              ),
                              'departure_terminal' => 
                              array (
                                'title' => '航班出发航站楼',
                                'description' => '航班出发航站楼',
                                'type' => 'string',
                                'example' => 'T2',
                              ),
                              'arrival_terminal' => 
                              array (
                                'title' => '航班到达航站楼',
                                'description' => '航班到达航站楼',
                                'type' => 'string',
                                'example' => 'T1',
                              ),
                              'equip_type' => 
                              array (
                                'title' => '机型',
                                'description' => '机型',
                                'type' => 'string',
                                'example' => '32Q',
                              ),
                              'cabin' => 
                              array (
                                'title' => '舱位',
                                'description' => '舱位',
                                'type' => 'string',
                                'example' => 'V',
                              ),
                              'cabin_class' => 
                              array (
                                'title' => '舱等',
                                'description' => '舱等',
                                'type' => 'string',
                                'example' => 'Y',
                              ),
                              'availability' => 
                              array (
                                'title' => '剩余座位数',
                                'description' => '剩余座位数',
                                'type' => 'string',
                                'example' => '7',
                              ),
                              'stop_city_list' => 
                              array (
                                'title' => '经停城市列表，stopQuantity > 0 时有值，多个用逗号分割',
                                'description' => '经停城市列表，stopQuantity > 0 时有值，多个用逗号分割',
                                'type' => 'string',
                                'example' => 'SEL,HKG',
                              ),
                              'stop_quantity' => 
                              array (
                                'title' => '经停城市数目',
                                'description' => '经停城市数目',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '0',
                              ),
                              'flight_duration' => 
                              array (
                                'title' => '飞行时间 单位：分钟',
                                'description' => '飞行时间 单位：分钟',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '165',
                              ),
                            ),
                          ),
                        ),
                      ),
                    ),
                  ),
                  'changed_journeys' => 
                  array (
                    'title' => '改签后的行程',
                    'description' => '改签后的行程',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '元素',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'transfer_count' => 
                        array (
                          'title' => '中转次数',
                          'description' => '中转次数',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '0',
                        ),
                        'segment_list' => 
                        array (
                          'title' => '航段信息',
                          'description' => '航段信息',
                          'type' => 'array',
                          'items' => 
                          array (
                            'description' => '元素',
                            'type' => 'object',
                            'properties' => 
                            array (
                              'segment_id' => 
                              array (
                                'title' => '航段ID 组成格式:航班号+出发机场+达到机场+起飞日期（MMdd）',
                                'description' => '航段ID 组成格式:航班号+出发机场+达到机场+起飞日期（MMdd）',
                                'type' => 'string',
                                'example' => 'HO1295-PVG-MFM-20230310',
                              ),
                              'departure_airport' => 
                              array (
                                'title' => '航班起飞机场三字码(大写)',
                                'description' => '航班起飞机场三字码(大写)',
                                'type' => 'string',
                                'example' => 'PVG',
                              ),
                              'arrival_airport' => 
                              array (
                                'title' => '航班到达机场三字码(大写)',
                                'description' => '航班到达机场三字码(大写)',
                                'type' => 'string',
                                'example' => 'MFM',
                              ),
                              'departure_city' => 
                              array (
                                'title' => '航班起飞城市三字码(大写)',
                                'description' => '航班起飞城市三字码(大写)',
                                'type' => 'string',
                                'example' => 'SHA',
                              ),
                              'arrival_city' => 
                              array (
                                'title' => '航班到达城市三字码(大写)',
                                'description' => '航班到达城市三字码(大写)',
                                'type' => 'string',
                                'example' => 'MFM',
                              ),
                              'marketing_flight_no' => 
                              array (
                                'title' => '市场方航班号(如：HO1295)',
                                'description' => '市场方航班号(如：HO1295)',
                                'type' => 'string',
                                'example' => 'HO1295',
                              ),
                              'marketing_flight_no_int' => 
                              array (
                                'title' => '市场方数字航班号（如：1295）',
                                'description' => '市场方数字航班号（如：1295）',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1295',
                              ),
                              'marketing_airline' => 
                              array (
                                'title' => '市场方航司(如：HO)',
                                'description' => '市场方航司(如：HO)',
                                'type' => 'string',
                                'example' => 'HO',
                              ),
                              'operating_flight_no' => 
                              array (
                                'title' => '承运方航班号(如：CX601)',
                                'description' => '承运方航班号(如：CX601)',
                                'type' => 'string',
                                'example' => 'HO1295',
                              ),
                              'operating_airline' => 
                              array (
                                'title' => '承运方航司(如：CX)',
                                'description' => '承运方航司(如：CX)',
                                'type' => 'string',
                                'example' => 'HO',
                              ),
                              'departure_time' => 
                              array (
                                'title' => '航班起飞日期时间 字符串格式(yyyy-MM-dd HH:mm:ss)',
                                'description' => '航班起飞日期时间 字符串格式(yyyy-MM-dd HH:mm:ss)',
                                'type' => 'string',
                                'example' => '2023-03-10 07:55:00',
                              ),
                              'arrival_time' => 
                              array (
                                'title' => '航班到达日期时间 字符串格式(yyyy-MM-dd HH:mm:ss)',
                                'description' => '航班到达日期时间 字符串格式(yyyy-MM-dd HH:mm:ss)',
                                'type' => 'string',
                                'example' => '2023-03-10 10:40:00',
                              ),
                              'code_share' => 
                              array (
                                'title' => '是否为共享航班',
                                'description' => '是否为共享航班',
                                'type' => 'boolean',
                                'example' => 'false',
                              ),
                              'departure_terminal' => 
                              array (
                                'title' => '航班出发航站楼',
                                'description' => '航班出发航站楼',
                                'type' => 'string',
                                'example' => 'T2',
                              ),
                              'arrival_terminal' => 
                              array (
                                'title' => '航班到达航站楼',
                                'description' => '航班到达航站楼',
                                'type' => 'string',
                                'example' => 'T1',
                              ),
                              'equip_type' => 
                              array (
                                'title' => '机型',
                                'description' => '机型',
                                'type' => 'string',
                                'example' => '32Q',
                              ),
                              'cabin' => 
                              array (
                                'title' => '舱位',
                                'description' => '舱位',
                                'type' => 'string',
                                'example' => 'V',
                              ),
                              'cabin_class' => 
                              array (
                                'title' => '舱等',
                                'description' => '舱等',
                                'type' => 'string',
                                'example' => 'Y',
                              ),
                              'availability' => 
                              array (
                                'title' => '剩余座位数',
                                'description' => '剩余座位数',
                                'type' => 'string',
                                'example' => '7',
                              ),
                              'stop_city_list' => 
                              array (
                                'title' => '经停城市列表，stopQuantity > 0 时有值，多个用逗号分割',
                                'description' => '经停城市列表，stopQuantity > 0 时有值，多个用逗号分割',
                                'type' => 'string',
                                'example' => 'SEL,HKG',
                              ),
                              'stop_quantity' => 
                              array (
                                'title' => '经停城市数目',
                                'description' => '经停城市数目',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '0',
                              ),
                              'flight_duration' => 
                              array (
                                'title' => '飞行时间 单位：分钟',
                                'description' => '飞行时间 单位：分钟',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '165',
                              ),
                            ),
                          ),
                        ),
                      ),
                    ),
                  ),
                  'last_journeys' => 
                  array (
                    'title' => '上一次改签的行程',
                    'description' => '上一次改签的行程',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '元素',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'transfer_count' => 
                        array (
                          'title' => '中转次数',
                          'description' => '中转次数',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '0',
                        ),
                        'segment_list' => 
                        array (
                          'title' => '航段信息',
                          'description' => '航段信息',
                          'type' => 'array',
                          'items' => 
                          array (
                            'description' => '元素',
                            'type' => 'object',
                            'properties' => 
                            array (
                              'segment_id' => 
                              array (
                                'title' => '航段ID 组成格式:航班号+出发机场+达到机场+起飞日期（MMdd）',
                                'description' => '航段ID 组成格式:航班号+出发机场+达到机场+起飞日期（MMdd）',
                                'type' => 'string',
                                'example' => 'HO1295-PVG-MFM-20230310',
                              ),
                              'departure_airport' => 
                              array (
                                'title' => '航班起飞机场三字码(大写)',
                                'description' => '航班起飞机场三字码(大写)',
                                'type' => 'string',
                                'example' => 'PVG',
                              ),
                              'arrival_airport' => 
                              array (
                                'title' => '航班到达机场三字码(大写)',
                                'description' => '航班到达机场三字码(大写)',
                                'type' => 'string',
                                'example' => 'MFM',
                              ),
                              'departure_city' => 
                              array (
                                'title' => '航班起飞城市三字码(大写)',
                                'description' => '航班起飞城市三字码(大写)',
                                'type' => 'string',
                                'example' => 'SHA',
                              ),
                              'arrival_city' => 
                              array (
                                'title' => '航班到达城市三字码(大写)',
                                'description' => '航班到达城市三字码(大写)',
                                'type' => 'string',
                                'example' => 'MFM',
                              ),
                              'marketing_flight_no' => 
                              array (
                                'title' => '市场方航班号(如：HO1295)',
                                'description' => '市场方航班号(如：HO1295)',
                                'type' => 'string',
                                'example' => 'HO1295',
                              ),
                              'marketing_flight_no_int' => 
                              array (
                                'title' => '市场方数字航班号（如：1295）',
                                'description' => '市场方数字航班号（如：1295）',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1295',
                              ),
                              'marketing_airline' => 
                              array (
                                'title' => '市场方航司(如：HO)',
                                'description' => '市场方航司(如：HO)',
                                'type' => 'string',
                                'example' => 'HO',
                              ),
                              'operating_flight_no' => 
                              array (
                                'title' => '承运方航班号(如：CX601)',
                                'description' => '承运方航班号(如：CX601)',
                                'type' => 'string',
                                'example' => 'HO1295',
                              ),
                              'operating_airline' => 
                              array (
                                'title' => '承运方航司(如：CX)',
                                'description' => '承运方航司(如：CX)',
                                'type' => 'string',
                                'example' => 'HO',
                              ),
                              'departure_time' => 
                              array (
                                'title' => '航班起飞日期时间 字符串格式(yyyy-MM-dd HH:mm:ss)',
                                'description' => '航班起飞日期时间 字符串格式(yyyy-MM-dd HH:mm:ss)',
                                'type' => 'string',
                                'example' => '2023-03-10 07:55:00',
                              ),
                              'arrival_time' => 
                              array (
                                'title' => '航班到达日期时间 字符串格式(yyyy-MM-dd HH:mm:ss)',
                                'description' => '航班到达日期时间 字符串格式(yyyy-MM-dd HH:mm:ss)',
                                'type' => 'string',
                                'example' => '2023-03-10 10:40:00',
                              ),
                              'code_share' => 
                              array (
                                'title' => '是否为共享航班',
                                'description' => '是否为共享航班',
                                'type' => 'boolean',
                                'example' => 'false',
                              ),
                              'departure_terminal' => 
                              array (
                                'title' => '航班出发航站楼',
                                'description' => '航班出发航站楼',
                                'type' => 'string',
                                'example' => 'T2',
                              ),
                              'arrival_terminal' => 
                              array (
                                'title' => '航班到达航站楼',
                                'description' => '航班到达航站楼',
                                'type' => 'string',
                                'example' => 'T1',
                              ),
                              'equip_type' => 
                              array (
                                'title' => '机型',
                                'description' => '机型',
                                'type' => 'string',
                                'example' => '32Q',
                              ),
                              'cabin' => 
                              array (
                                'title' => '舱位',
                                'description' => '舱位',
                                'type' => 'string',
                                'example' => 'V',
                              ),
                              'cabin_class' => 
                              array (
                                'title' => '舱等',
                                'description' => '舱等',
                                'type' => 'string',
                                'example' => 'Y',
                              ),
                              'availability' => 
                              array (
                                'title' => '剩余座位数',
                                'description' => '剩余座位数',
                                'type' => 'string',
                                'example' => '7',
                              ),
                              'stop_city_list' => 
                              array (
                                'title' => '经停城市列表，stopQuantity > 0 时有值，多个用逗号分割',
                                'description' => '经停城市列表，stopQuantity > 0 时有值，多个用逗号分割',
                                'type' => 'string',
                                'example' => 'SEL,HKG',
                              ),
                              'stop_quantity' => 
                              array (
                                'title' => '经停城市数目',
                                'description' => '经停城市数目',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '0',
                              ),
                              'flight_duration' => 
                              array (
                                'title' => '飞行时间 单位：分钟',
                                'description' => '飞行时间 单位：分钟',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '165',
                              ),
                            ),
                          ),
                        ),
                      ),
                    ),
                  ),
                  'change_fee_details' => 
                  array (
                    'title' => '改签费用明细 乘机人纬度',
                    'description' => '改签费用明细 乘机人纬度',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '元素',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'passenger' => 
                        array (
                          'title' => '改签的乘机人信息',
                          'description' => '改签的乘机人信息',
                          'type' => 'object',
                          'properties' => 
                          array (
                            'first_name' => 
                            array (
                              'title' => '乘机人名',
                              'description' => '乘机人名',
                              'type' => 'string',
                              'example' => 'SAN',
                            ),
                            'last_name' => 
                            array (
                              'title' => '乘机人姓',
                              'description' => '乘机人姓',
                              'type' => 'string',
                              'example' => 'ZHANG',
                            ),
                            'document' => 
                            array (
                              'title' => '证件号',
                              'description' => '证件号',
                              'type' => 'string',
                              'example' => '411***********4411',
                            ),
                          ),
                        ),
                        'change_fee' => 
                        array (
                          'title' => '乘机人的改签费明细',
                          'description' => '乘机人的改签费明细',
                          'type' => 'object',
                          'properties' => 
                          array (
                            'upgrade_fee' => 
                            array (
                              'title' => '升舱费',
                              'description' => '升舱费',
                              'type' => 'number',
                              'format' => 'double',
                              'example' => '30',
                            ),
                            'service_fee' => 
                            array (
                              'title' => '服务费(手续费)',
                              'description' => '服务费(手续费)',
                              'type' => 'number',
                              'format' => 'double',
                              'example' => '50',
                            ),
                            'tax_fee' => 
                            array (
                              'title' => '改签税费',
                              'description' => '改签税费',
                              'type' => 'number',
                              'format' => 'double',
                              'example' => '20',
                            ),
                          ),
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'error_data' => 
              array (
                'title' => '错误处理携带数据',
                'description' => '错误处理携带数据',
                'type' => 'any',
                'example' => 'null',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"status\\": 200,\\n  \\"error_code\\": \\"null\\",\\n  \\"error_msg\\": \\"null\\",\\n  \\"success\\": true,\\n  \\"request_id\\": \\"51593418-8C73-5E47-8BA8-3F1D4A00CC0B\\",\\n  \\"data\\": {\\n    \\"change_order_num\\": 0,\\n    \\"order_num\\": 0,\\n    \\"change_passengers\\": [\\n      {\\n        \\"first_name\\": \\"SAN\\",\\n        \\"last_name\\": \\"ZHANG\\",\\n        \\"document\\": \\"411***********4411\\"\\n      }\\n    ],\\n    \\"total_amount\\": 300,\\n    \\"order_status\\": 2,\\n    \\"close_reason\\": \\"reason desc\\",\\n    \\"transaction_no\\": \\"hkduendkd-2023-dj0\\",\\n    \\"change_reason_type\\": 1,\\n    \\"create_utc_time\\": 1677415276000,\\n    \\"last_confirm_utc_time\\": 1677415278000,\\n    \\"pay_status\\": 2,\\n    \\"pay_success_utc_time\\": 1677415255000,\\n    \\"close_utc_time\\": 1677415244000,\\n    \\"contact\\": {\\n      \\"mobile_country_code\\": \\"86\\",\\n      \\"mobile_phone_num\\": \\"183*****92\\",\\n      \\"email\\": \\"gao******@gmail.com\\"\\n    },\\n    \\"original_journeys\\": [\\n      {\\n        \\"transfer_count\\": 0,\\n        \\"segment_list\\": [\\n          {\\n            \\"segment_id\\": \\"HO1295-PVG-MFM-20230310\\",\\n            \\"departure_airport\\": \\"PVG\\",\\n            \\"arrival_airport\\": \\"MFM\\",\\n            \\"departure_city\\": \\"SHA\\",\\n            \\"arrival_city\\": \\"MFM\\",\\n            \\"marketing_flight_no\\": \\"HO1295\\",\\n            \\"marketing_flight_no_int\\": 1295,\\n            \\"marketing_airline\\": \\"HO\\",\\n            \\"operating_flight_no\\": \\"HO1295\\",\\n            \\"operating_airline\\": \\"HO\\",\\n            \\"departure_time\\": \\"2023-03-10 07:55:00\\",\\n            \\"arrival_time\\": \\"2023-03-10 10:40:00\\",\\n            \\"code_share\\": false,\\n            \\"departure_terminal\\": \\"T2\\",\\n            \\"arrival_terminal\\": \\"T1\\",\\n            \\"equip_type\\": \\"32Q\\",\\n            \\"cabin\\": \\"V\\",\\n            \\"cabin_class\\": \\"Y\\",\\n            \\"availability\\": \\"7\\",\\n            \\"stop_city_list\\": \\"SEL,HKG\\",\\n            \\"stop_quantity\\": 0,\\n            \\"flight_duration\\": 165\\n          }\\n        ]\\n      }\\n    ],\\n    \\"changed_journeys\\": [\\n      {\\n        \\"transfer_count\\": 0,\\n        \\"segment_list\\": [\\n          {\\n            \\"segment_id\\": \\"HO1295-PVG-MFM-20230310\\",\\n            \\"departure_airport\\": \\"PVG\\",\\n            \\"arrival_airport\\": \\"MFM\\",\\n            \\"departure_city\\": \\"SHA\\",\\n            \\"arrival_city\\": \\"MFM\\",\\n            \\"marketing_flight_no\\": \\"HO1295\\",\\n            \\"marketing_flight_no_int\\": 1295,\\n            \\"marketing_airline\\": \\"HO\\",\\n            \\"operating_flight_no\\": \\"HO1295\\",\\n            \\"operating_airline\\": \\"HO\\",\\n            \\"departure_time\\": \\"2023-03-10 07:55:00\\",\\n            \\"arrival_time\\": \\"2023-03-10 10:40:00\\",\\n            \\"code_share\\": false,\\n            \\"departure_terminal\\": \\"T2\\",\\n            \\"arrival_terminal\\": \\"T1\\",\\n            \\"equip_type\\": \\"32Q\\",\\n            \\"cabin\\": \\"V\\",\\n            \\"cabin_class\\": \\"Y\\",\\n            \\"availability\\": \\"7\\",\\n            \\"stop_city_list\\": \\"SEL,HKG\\",\\n            \\"stop_quantity\\": 0,\\n            \\"flight_duration\\": 165\\n          }\\n        ]\\n      }\\n    ],\\n    \\"last_journeys\\": [\\n      {\\n        \\"transfer_count\\": 0,\\n        \\"segment_list\\": [\\n          {\\n            \\"segment_id\\": \\"HO1295-PVG-MFM-20230310\\",\\n            \\"departure_airport\\": \\"PVG\\",\\n            \\"arrival_airport\\": \\"MFM\\",\\n            \\"departure_city\\": \\"SHA\\",\\n            \\"arrival_city\\": \\"MFM\\",\\n            \\"marketing_flight_no\\": \\"HO1295\\",\\n            \\"marketing_flight_no_int\\": 1295,\\n            \\"marketing_airline\\": \\"HO\\",\\n            \\"operating_flight_no\\": \\"HO1295\\",\\n            \\"operating_airline\\": \\"HO\\",\\n            \\"departure_time\\": \\"2023-03-10 07:55:00\\",\\n            \\"arrival_time\\": \\"2023-03-10 10:40:00\\",\\n            \\"code_share\\": false,\\n            \\"departure_terminal\\": \\"T2\\",\\n            \\"arrival_terminal\\": \\"T1\\",\\n            \\"equip_type\\": \\"32Q\\",\\n            \\"cabin\\": \\"V\\",\\n            \\"cabin_class\\": \\"Y\\",\\n            \\"availability\\": \\"7\\",\\n            \\"stop_city_list\\": \\"SEL,HKG\\",\\n            \\"stop_quantity\\": 0,\\n            \\"flight_duration\\": 165\\n          }\\n        ]\\n      }\\n    ],\\n    \\"change_fee_details\\": [\\n      {\\n        \\"passenger\\": {\\n          \\"first_name\\": \\"SAN\\",\\n          \\"last_name\\": \\"ZHANG\\",\\n          \\"document\\": \\"411***********4411\\"\\n        },\\n        \\"change_fee\\": {\\n          \\"upgrade_fee\\": 30,\\n          \\"service_fee\\": 50,\\n          \\"tax_fee\\": 20\\n        }\\n      }\\n    ]\\n  },\\n  \\"error_data\\": \\"null\\"\\n}","type":"json"}]',
      'title' => 'ChangeDetail',
    ),
    'ChangeApply' => 
    array (
      'summary' => '改签申请。',
      'path' => '/airticket/v1/change/action-apply',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'https',
        1 => 'http',
      ),
      'security' => 
      array (
        0 => 
        array (
          'accessTokenAuth' => 
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
          'name' => 'order_num',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '订单号',
            'description' => '订单号',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'example' => '4988430***950',
          ),
        ),
        1 => 
        array (
          'name' => 'type',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '改期类型0:自愿改期; 1:航班变动/航班取消',
            'description' => '改期类型0:自愿改期; 1:航班变动/航班取消',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'example' => '0',
          ),
        ),
        2 => 
        array (
          'name' => 'change_passenger_list',
          'in' => 'formData',
          'style' => 'json',
          'schema' => 
          array (
            'title' => '改签乘机人列表',
            'description' => '改签乘机人列表',
            'type' => 'array',
            'items' => 
            array (
              'description' => '元素',
              'type' => 'object',
              'properties' => 
              array (
                'first_name' => 
                array (
                  'title' => '乘机人名',
                  'description' => '乘机人名',
                  'type' => 'string',
                  'required' => true,
                  'example' => 'SAN',
                ),
                'last_name' => 
                array (
                  'title' => '乘机人姓',
                  'description' => '乘机人姓',
                  'type' => 'string',
                  'required' => true,
                  'example' => 'ZHANG',
                ),
                'document' => 
                array (
                  'title' => '证件号',
                  'description' => '证件号',
                  'type' => 'string',
                  'required' => false,
                  'example' => '411***********4411',
                ),
              ),
              'required' => false,
            ),
            'required' => true,
          ),
        ),
        3 => 
        array (
          'name' => 'changed_journeys',
          'in' => 'formData',
          'style' => 'json',
          'schema' => 
          array (
            'title' => '改签目标航程',
            'description' => '改签目标航程',
            'type' => 'array',
            'items' => 
            array (
              'description' => '元素',
              'type' => 'object',
              'properties' => 
              array (
                'segment_list' => 
                array (
                  'title' => '改签目标航段列表',
                  'description' => '改签目标航段列表',
                  'type' => 'array',
                  'items' => 
                  array (
                    'description' => '元素',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'departure_airport' => 
                      array (
                        'title' => '航班起飞机场三字码',
                        'description' => '航班起飞机场三字码',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'PVG',
                      ),
                      'arrival_airport' => 
                      array (
                        'title' => '航班到达机场三字码',
                        'description' => '航班到达机场三字码',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'MFM',
                      ),
                      'departure_city' => 
                      array (
                        'title' => '航班起飞城市三字码',
                        'description' => '航班起飞城市三字码',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'SHA',
                      ),
                      'arrival_city' => 
                      array (
                        'title' => '航班到达城市三字码',
                        'description' => '航班到达城市三字码',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'MFM',
                      ),
                      'departure_date' => 
                      array (
                        'title' => '起飞日期 (eg: yyyyMMdd)',
                        'description' => '起飞日期 (eg: yyyyMMdd)',
                        'type' => 'string',
                        'required' => true,
                        'example' => '20230320',
                      ),
                      'departure_time' => 
                      array (
                        'title' => '航班起飞日期，utc时间戳',
                        'description' => '航班起飞日期，utc时间戳',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '1677232998000',
                      ),
                      'arrive_time' => 
                      array (
                        'title' => '航班到达日期时间，utc时间戳',
                        'description' => '航班到达日期时间，utc时间戳',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '1677232999000',
                      ),
                      'departure_terminal' => 
                      array (
                        'title' => '航班出发航站楼',
                        'description' => '航班出发航站楼',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'T2',
                      ),
                      'arrive_terminal' => 
                      array (
                        'title' => '航班到达航站楼',
                        'description' => '航班到达航站楼',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'T1',
                      ),
                      'marketing_flight_no' => 
                      array (
                        'title' => '市场方航班号(如：KA5809)',
                        'description' => '市场方航班号(如：KA5809)',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'HO1295',
                      ),
                      'operating_flight_no' => 
                      array (
                        'title' => '承运方航班号(如：CX601)',
                        'description' => '承运方航班号(如：CX601)',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'HO1295',
                      ),
                      'code_share' => 
                      array (
                        'title' => '是否共享航班',
                        'description' => '是否共享航班',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                      ),
                    ),
                    'required' => false,
                  ),
                  'required' => false,
                ),
              ),
              'required' => false,
            ),
            'required' => true,
          ),
        ),
        4 => 
        array (
          'name' => 'contact',
          'in' => 'formData',
          'style' => 'json',
          'schema' => 
          array (
            'title' => '改签联系人信息',
            'description' => '改签联系人信息',
            'type' => 'object',
            'properties' => 
            array (
              'mobile_country_code' => 
              array (
                'title' => '国家区位码',
                'description' => '国家区位码',
                'type' => 'string',
                'required' => false,
                'example' => '86',
              ),
              'mobile_phone_num' => 
              array (
                'title' => '联系人用户手机号',
                'description' => '联系人用户手机号',
                'type' => 'string',
                'required' => false,
                'example' => '183*****92',
              ),
              'email' => 
              array (
                'title' => '邮件地址',
                'description' => '邮件地址',
                'type' => 'string',
                'required' => false,
                'example' => 'gao******@gmail.com',
              ),
            ),
            'required' => true,
          ),
        ),
        5 => 
        array (
          'name' => 'remark',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '买家备注',
            'description' => '买家备注',
            'type' => 'string',
            'required' => false,
            'example' => 'remark desc',
          ),
        ),
        6 => 
        array (
          'name' => 'x-acs-airticket-access-token',
          'in' => 'header',
          'schema' => 
          array (
            'title' => 'access_token',
            'description' => 'access_token',
            'type' => 'string',
            'required' => true,
            'example' => 'eyJhbGciOiJSUzI1NiIsImtpZCI6InN1ZXpfa2V5aWQifQ.eyJqdGkiOiJCQldMaWIzN0VxbC0xMjhhR2N5elJ3IiwiaWF0IjoxNjc3MDY2NTAxLCJleHAiOjE2NzcwNzM3MDEsIm5iZiI6MTY3NzA2NjQ0MX0.AF0DxsZK4Edyg0C6ObRQFUo36R1VYrb5IYmak25TmL1OfR5RkIUc3PpqFuQKNLKXf5fOtVQaKjaexzwodVeWZQDKEG_RPt_Ybb99EnEm6vPKs6e3pWFbKiBq71WleLHhVrdFb4YPowRKjc7bG0jyGUxiQ2iXy0RWDj9tIjfI-KEdzNp5oVnX7j4p3H12DwQrRPmd1nz3BciAQNINvDpzqusuIUw8JXyLFCz838Y0NhwB1_bYZyctxRLSzrGZuI5rrWtItgupqMsOlJ3RNy1QrIbQ2g6nPmzl-atOqcQ4Nw0HeDLR8dhM1OsIcFLbKXBUtwXofflhzAQrkDxhwYiXii',
          ),
        ),
        7 => 
        array (
          'name' => 'x-acs-airticket-language',
          'in' => 'header',
          'schema' => 
          array (
            'title' => '多语言 默认取买家账号配置',
            'description' => '多语言 默认取买家账号配置',
            'type' => 'string',
            'required' => false,
            'example' => 'en_US',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'PopBaseRes<ApplyChangeRes, Object>',
            'description' => 'PopBaseRes<ApplyChangeRes, Object>',
            'type' => 'object',
            'properties' => 
            array (
              'status' => 
              array (
                'title' => 'http 请求成功，status 值均为 200',
                'description' => 'http 请求成功，status 值均为 200',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'error_code' => 
              array (
                'title' => '业务错误码',
                'description' => '业务错误码',
                'type' => 'string',
                'example' => 'null',
              ),
              'error_msg' => 
              array (
                'title' => '错误信息',
                'description' => '错误信息',
                'type' => 'string',
                'example' => 'null',
              ),
              'success' => 
              array (
                'title' => '是否正确',
                'description' => '是否正确',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'RequestId' => 
              array (
                'title' => '请求 RequestId',
                'description' => '请求 RequestId',
                'type' => 'string',
                'example' => '51593418-8C73-5E47-8BA8-3F1D4A00CC0B',
              ),
              'data' => 
              array (
                'title' => '正确处理返回数据',
                'description' => '正确处理返回数据',
                'type' => 'object',
                'properties' => 
                array (
                  'order_num' => 
                  array (
                    'title' => '订单号',
                    'description' => '订单号',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '4988430***950',
                  ),
                  'change_orders' => 
                  array (
                    'title' => '改签单申请结果列表',
                    'description' => '改签单申请结果列表',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '元素',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'change_order_num' => 
                        array (
                          'title' => '改签单号',
                          'description' => '改签单号',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '49884*****950',
                        ),
                        'change_order_status' => 
                        array (
                          'title' => '改签单状态。 0:改签单创建成功; 5:改签单创建失败',
                          'description' => '改签单状态。 0:改签单创建成功; 5:改签单创建失败',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '0',
                        ),
                        'fail_reason' => 
                        array (
                          'title' => '改签单创建失败的原因',
                          'description' => '改签单创建失败的原因',
                          'type' => 'string',
                          'example' => 'desc reason',
                        ),
                        'passengers' => 
                        array (
                          'title' => '改签单乘机人信息',
                          'description' => '改签单乘机人信息',
                          'type' => 'array',
                          'items' => 
                          array (
                            'description' => '元素',
                            'type' => 'object',
                            'properties' => 
                            array (
                              'first_name' => 
                              array (
                                'title' => '乘机人名',
                                'description' => '乘机人名',
                                'type' => 'string',
                                'example' => 'SAN',
                              ),
                              'last_name' => 
                              array (
                                'title' => '乘机人姓',
                                'description' => '乘机人姓',
                                'type' => 'string',
                                'example' => 'ZHANG',
                              ),
                              'document' => 
                              array (
                                'title' => '证件号',
                                'description' => '证件号',
                                'type' => 'string',
                                'example' => '411***********4411',
                              ),
                            ),
                          ),
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'error_data' => 
              array (
                'title' => '错误处理携带数据',
                'description' => '错误处理携带数据',
                'type' => 'any',
                'example' => 'null',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"status\\": 200,\\n  \\"error_code\\": \\"null\\",\\n  \\"error_msg\\": \\"null\\",\\n  \\"success\\": true,\\n  \\"RequestId\\": \\"51593418-8C73-5E47-8BA8-3F1D4A00CC0B\\",\\n  \\"data\\": {\\n    \\"order_num\\": 0,\\n    \\"change_orders\\": [\\n      {\\n        \\"change_order_num\\": 0,\\n        \\"change_order_status\\": 0,\\n        \\"fail_reason\\": \\"desc reason\\",\\n        \\"passengers\\": [\\n          {\\n            \\"first_name\\": \\"SAN\\",\\n            \\"last_name\\": \\"ZHANG\\",\\n            \\"document\\": \\"411***********4411\\"\\n          }\\n        ]\\n      }\\n    ]\\n  },\\n  \\"error_data\\": \\"null\\"\\n}","type":"json"}]',
      'title' => 'ChangeApply',
    ),
    'ChangeDetailListOfOrderNum' => 
    array (
      'summary' => '根据正向订单号查询改签订单列表信息。',
      'path' => '/airticket/v1/change/order-num/detail-list',
      'methods' => 
      array (
        0 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'https',
        1 => 'http',
      ),
      'security' => 
      array (
        0 => 
        array (
          'accessTokenAuth' => 
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
          'name' => 'order_num',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '订单号',
            'description' => '订单号',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'example' => '4988430***700',
          ),
        ),
        1 => 
        array (
          'name' => 'page_index',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '页索引',
            'description' => '页索引',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        2 => 
        array (
          'name' => 'page_size',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '页大小',
            'description' => '页大小',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '20',
          ),
        ),
        3 => 
        array (
          'name' => 'x-acs-airticket-access-token',
          'in' => 'header',
          'schema' => 
          array (
            'title' => 'access_token',
            'description' => 'access_token',
            'type' => 'string',
            'required' => true,
            'example' => 'eyJhbGciOiJSUzI1NiIsImtpZCI6InN1ZXpfa2V5aWQifQ.eyJqdGkiOiJCQldMaWIzN0VxbC0xMjhhR2N5elJ3IiwiaWF0IjoxNjc3MDY2NTAxLCJleHAiOjE2NzcwNzM3MDEsIm5iZiI6MTY3NzA2NjQ0MX0.AF0DxsZK4Edyg0C6ObRQFUo36R1VYrb5IYmak25TmL1OfR5RkIUc3PpqFuQKNLKXf5fOtVQaKjaexzwodVeWZQDKEG_RPt_Ybb99EnEm6vPKs6e3pWFbKiBq71WleLHhVrdFb4YPowRKjc7bG0jyGUxiQ2iXy0RWDj9tIjfI-KEdzNp5oVnX7j4p3H12DwQrRPmd1nz3BciAQNINvDpzqusuIUw8JXyLFCz838Y0NhwB1_bYZyctxRLSzrGZuI5rrWtItgupqMsOlJ3RNy1QrIbQ2g6nPmzl-atOqcQ4Nw0HeDLR8dhM1OsIcFLbKXBUtwXofflhzAQrkDxhwYiXii',
          ),
        ),
        4 => 
        array (
          'name' => 'x-acs-airticket-language',
          'in' => 'header',
          'schema' => 
          array (
            'title' => '多语言 默认取买家账号配置',
            'description' => '多语言 默认取买家账号配置',
            'type' => 'string',
            'required' => false,
            'example' => 'en_US',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'PopBaseRes<PageData<ChangeOrderDetail>, Object>',
            'description' => 'PopBaseRes<PageData<ChangeOrderDetail>, Object>',
            'type' => 'object',
            'properties' => 
            array (
              'status' => 
              array (
                'title' => 'http 请求成功，status 值均为 200',
                'description' => 'http 请求成功，status 值均为 200',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'error_code' => 
              array (
                'title' => '业务错误码',
                'description' => '业务错误码',
                'type' => 'string',
                'example' => 'null',
              ),
              'error_msg' => 
              array (
                'title' => '错误信息',
                'description' => '错误信息',
                'type' => 'string',
                'example' => 'null',
              ),
              'success' => 
              array (
                'title' => '是否正确',
                'description' => '是否正确',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'RequestId' => 
              array (
                'title' => '请求 RequestId',
                'type' => 'string',
                'example' => '51593418-8C73-5E47-8BA8-3F1D4A00CC0B',
              ),
              'data' => 
              array (
                'title' => '正确处理返回数据',
                'description' => '正确处理返回数据',
                'type' => 'object',
                'properties' => 
                array (
                  'list' => 
                  array (
                    'title' => '数据列表',
                    'description' => '数据列表',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '元素',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'change_order_num' => 
                        array (
                          'title' => '改签单号',
                          'description' => '改签单号',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '4988430***950',
                        ),
                        'order_num' => 
                        array (
                          'title' => '订单号',
                          'description' => '订单号',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '5988430***541',
                        ),
                        'change_passengers' => 
                        array (
                          'title' => '改签的乘机人列表',
                          'description' => '改签的乘机人列表',
                          'type' => 'array',
                          'items' => 
                          array (
                            'description' => '元素',
                            'type' => 'object',
                            'properties' => 
                            array (
                              'first_name' => 
                              array (
                                'title' => '乘机人名',
                                'description' => '乘机人名',
                                'type' => 'string',
                                'example' => 'SAN',
                              ),
                              'last_name' => 
                              array (
                                'title' => '乘机人姓',
                                'description' => '乘机人姓',
                                'type' => 'string',
                                'example' => 'ZHANG',
                              ),
                              'document' => 
                              array (
                                'title' => '证件号',
                                'description' => '证件号',
                                'type' => 'string',
                                'example' => '411***********4411',
                              ),
                            ),
                          ),
                        ),
                        'total_amount' => 
                        array (
                          'title' => '改签单支付总金额',
                          'description' => '改签单支付总金额',
                          'type' => 'number',
                          'format' => 'double',
                          'example' => '300',
                        ),
                        'order_status' => 
                        array (
                          'title' => '改签单状态 0:初始状态; 1:待支付; 2:付款成功; 3:改签成功; 4:改签关闭',
                          'description' => '改签单状态 0:初始状态; 1:待支付; 2:付款成功; 3:改签成功; 4:改签关闭',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '2',
                        ),
                        'close_reason' => 
                        array (
                          'title' => '改签关单原因',
                          'description' => '改签关单原因',
                          'type' => 'string',
                          'example' => 'reason desc',
                        ),
                        'transaction_no' => 
                        array (
                          'title' => '交易流水号',
                          'description' => '交易流水号',
                          'type' => 'string',
                          'example' => 'hkduendkd-2023-dj0',
                        ),
                        'change_reason_type' => 
                        array (
                          'title' => '改签原因类型 0:自愿改期; 1:航班变动/航班取消; 2:因疫情改签',
                          'description' => '改签原因类型 0:自愿改期; 1:航班变动/航班取消; 2:因疫情改签',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '1',
                        ),
                        'create_utc_time' => 
                        array (
                          'title' => '改签单创建时间，UTC时间戳',
                          'description' => '改签单创建时间，UTC时间戳',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1677415276000',
                        ),
                        'last_confirm_utc_time' => 
                        array (
                          'title' => '买家最迟支付时间，UTC时间戳',
                          'description' => '买家最迟支付时间，UTC时间戳',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1677415278000',
                        ),
                        'pay_status' => 
                        array (
                          'title' => '支付状态 0:初始状态; 1:待支付; 2:支付成功; 3:转交易成功; 4:关闭已支付订单成功; 5:关闭未支付订单成功',
                          'description' => '支付状态 0:初始状态; 1:待支付; 2:支付成功; 3:转交易成功; 4:关闭已支付订单成功; 5:关闭未支付订单成功',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '2',
                        ),
                        'pay_success_utc_time' => 
                        array (
                          'title' => '买家支付成功时间，UTC时间戳',
                          'description' => '买家支付成功时间，UTC时间戳',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1677415255000',
                        ),
                        'close_utc_time' => 
                        array (
                          'title' => '订单关闭时间，UTC时间戳',
                          'description' => '订单关闭时间，UTC时间戳',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1677415244000',
                        ),
                        'contact' => 
                        array (
                          'title' => '改签联系人信息',
                          'description' => '改签联系人信息',
                          'type' => 'object',
                          'properties' => 
                          array (
                            'mobile_country_code' => 
                            array (
                              'title' => '国家区位码',
                              'description' => '国家区位码',
                              'type' => 'string',
                              'example' => '86',
                            ),
                            'mobile_phone_num' => 
                            array (
                              'title' => '联系人用户手机号',
                              'description' => '联系人用户手机号',
                              'type' => 'string',
                              'example' => '183*****92',
                            ),
                            'email' => 
                            array (
                              'title' => '邮件地址',
                              'description' => '邮件地址',
                              'type' => 'string',
                              'example' => 'gao******@gmail.com',
                            ),
                          ),
                        ),
                        'original_journeys' => 
                        array (
                          'title' => '原始的行程',
                          'description' => '原始的行程',
                          'type' => 'array',
                          'items' => 
                          array (
                            'description' => '元素',
                            'type' => 'object',
                            'properties' => 
                            array (
                              'transfer_count' => 
                              array (
                                'title' => '中转次数',
                                'description' => '中转次数',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '0',
                              ),
                              'segment_list' => 
                              array (
                                'title' => '航段信息',
                                'description' => '航段信息',
                                'type' => 'array',
                                'items' => 
                                array (
                                  'description' => '元素',
                                  'type' => 'object',
                                  'properties' => 
                                  array (
                                    'segment_id' => 
                                    array (
                                      'title' => '航段ID 组成格式:航班号+出发机场+达到机场+起飞日期（MMdd）',
                                      'description' => '航段ID 组成格式:航班号+出发机场+达到机场+起飞日期（MMdd）',
                                      'type' => 'string',
                                      'example' => 'HO1295-PVG-MFM-20230310',
                                    ),
                                    'departure_airport' => 
                                    array (
                                      'title' => '航班起飞机场三字码(大写)',
                                      'description' => '航班起飞机场三字码(大写)',
                                      'type' => 'string',
                                      'example' => 'PVG',
                                    ),
                                    'arrival_airport' => 
                                    array (
                                      'title' => '航班到达机场三字码(大写)',
                                      'description' => '航班到达机场三字码(大写)',
                                      'type' => 'string',
                                      'example' => 'MFM',
                                    ),
                                    'departure_city' => 
                                    array (
                                      'title' => '航班起飞城市三字码(大写)',
                                      'description' => '航班起飞城市三字码(大写)',
                                      'type' => 'string',
                                      'example' => 'SHA',
                                    ),
                                    'arrival_city' => 
                                    array (
                                      'title' => '航班到达城市三字码(大写)',
                                      'description' => '航班到达城市三字码(大写)',
                                      'type' => 'string',
                                      'example' => 'MFM',
                                    ),
                                    'marketing_flight_no' => 
                                    array (
                                      'title' => '市场方航班号(如：HO1295)',
                                      'description' => '市场方航班号(如：HO1295)',
                                      'type' => 'string',
                                      'example' => 'HO1295',
                                    ),
                                    'marketing_flight_no_int' => 
                                    array (
                                      'title' => '市场方数字航班号（如：1295）',
                                      'description' => '市场方数字航班号（如：1295）',
                                      'type' => 'integer',
                                      'format' => 'int32',
                                      'example' => '1295',
                                    ),
                                    'marketing_airline' => 
                                    array (
                                      'title' => '市场方航司(如：HO)',
                                      'description' => '市场方航司(如：HO)',
                                      'type' => 'string',
                                      'example' => 'HO',
                                    ),
                                    'operating_flight_no' => 
                                    array (
                                      'title' => '承运方航班号(如：CX601)',
                                      'description' => '承运方航班号(如：CX601)',
                                      'type' => 'string',
                                      'example' => 'HO1295',
                                    ),
                                    'operating_airline' => 
                                    array (
                                      'title' => '承运方航司(如：CX)',
                                      'description' => '承运方航司(如：CX)',
                                      'type' => 'string',
                                      'example' => 'HO',
                                    ),
                                    'departure_time' => 
                                    array (
                                      'title' => '航班起飞日期时间 字符串格式(yyyy-MM-dd HH:mm:ss)',
                                      'description' => '航班起飞日期时间 字符串格式(yyyy-MM-dd HH:mm:ss)',
                                      'type' => 'string',
                                      'example' => '2023-03-10 07:55:00',
                                    ),
                                    'arrival_time' => 
                                    array (
                                      'title' => '航班到达日期时间 字符串格式(yyyy-MM-dd HH:mm:ss)',
                                      'description' => '航班到达日期时间 字符串格式(yyyy-MM-dd HH:mm:ss)',
                                      'type' => 'string',
                                      'example' => '2023-03-10 10:40:00',
                                    ),
                                    'code_share' => 
                                    array (
                                      'title' => '是否为共享航班',
                                      'description' => '是否为共享航班',
                                      'type' => 'boolean',
                                      'example' => 'false',
                                    ),
                                    'departure_terminal' => 
                                    array (
                                      'title' => '航班出发航站楼',
                                      'description' => '航班出发航站楼',
                                      'type' => 'string',
                                      'example' => 'T2',
                                    ),
                                    'arrival_terminal' => 
                                    array (
                                      'title' => '航班到达航站楼',
                                      'description' => '航班到达航站楼',
                                      'type' => 'string',
                                      'example' => 'T1',
                                    ),
                                    'equip_type' => 
                                    array (
                                      'title' => '机型',
                                      'description' => '机型',
                                      'type' => 'string',
                                      'example' => '32Q',
                                    ),
                                    'cabin' => 
                                    array (
                                      'title' => '舱位',
                                      'description' => '舱位',
                                      'type' => 'string',
                                      'example' => 'V',
                                    ),
                                    'cabin_class' => 
                                    array (
                                      'title' => '舱等',
                                      'description' => '舱等',
                                      'type' => 'string',
                                      'example' => 'Y',
                                    ),
                                    'availability' => 
                                    array (
                                      'title' => '剩余座位数',
                                      'description' => '剩余座位数',
                                      'type' => 'string',
                                      'example' => '7',
                                    ),
                                    'stop_city_list' => 
                                    array (
                                      'title' => '经停城市列表，stopQuantity > 0 时有值，多个用逗号分割',
                                      'description' => '经停城市列表，stopQuantity > 0 时有值，多个用逗号分割',
                                      'type' => 'string',
                                      'example' => 'SEL,HKG',
                                    ),
                                    'stop_quantity' => 
                                    array (
                                      'title' => '经停城市数目',
                                      'description' => '经停城市数目',
                                      'type' => 'integer',
                                      'format' => 'int32',
                                      'example' => '0',
                                    ),
                                    'flight_duration' => 
                                    array (
                                      'title' => '飞行时间 单位：分钟',
                                      'description' => '飞行时间 单位：分钟',
                                      'type' => 'integer',
                                      'format' => 'int32',
                                      'example' => '165',
                                    ),
                                  ),
                                ),
                              ),
                            ),
                          ),
                        ),
                        'changed_journeys' => 
                        array (
                          'title' => '改签后的行程',
                          'description' => '改签后的行程',
                          'type' => 'array',
                          'items' => 
                          array (
                            'description' => '元素',
                            'type' => 'object',
                            'properties' => 
                            array (
                              'transfer_count' => 
                              array (
                                'title' => '中转次数',
                                'description' => '中转次数',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '0',
                              ),
                              'segment_list' => 
                              array (
                                'title' => '航段信息',
                                'description' => '航段信息',
                                'type' => 'array',
                                'items' => 
                                array (
                                  'description' => '元素',
                                  'type' => 'object',
                                  'properties' => 
                                  array (
                                    'segment_id' => 
                                    array (
                                      'title' => '航段ID 组成格式:航班号+出发机场+达到机场+起飞日期（MMdd）',
                                      'description' => '航段ID 组成格式:航班号+出发机场+达到机场+起飞日期（MMdd）',
                                      'type' => 'string',
                                      'example' => 'HO1295-PVG-MFM-20230310',
                                    ),
                                    'departure_airport' => 
                                    array (
                                      'title' => '航班起飞机场三字码(大写)',
                                      'description' => '航班起飞机场三字码(大写)',
                                      'type' => 'string',
                                      'example' => 'PVG',
                                    ),
                                    'arrival_airport' => 
                                    array (
                                      'title' => '航班到达机场三字码(大写)',
                                      'description' => '航班到达机场三字码(大写)',
                                      'type' => 'string',
                                      'example' => 'MFM',
                                    ),
                                    'departure_city' => 
                                    array (
                                      'title' => '航班起飞城市三字码(大写)',
                                      'description' => '航班起飞城市三字码(大写)',
                                      'type' => 'string',
                                      'example' => 'SHA',
                                    ),
                                    'arrival_city' => 
                                    array (
                                      'title' => '航班到达城市三字码(大写)',
                                      'description' => '航班到达城市三字码(大写)',
                                      'type' => 'string',
                                      'example' => 'MFM',
                                    ),
                                    'marketing_flight_no' => 
                                    array (
                                      'title' => '市场方航班号(如：HO1295)',
                                      'description' => '市场方航班号(如：HO1295)',
                                      'type' => 'string',
                                      'example' => 'HO1295',
                                    ),
                                    'marketing_flight_no_int' => 
                                    array (
                                      'title' => '市场方数字航班号（如：1295）',
                                      'description' => '市场方数字航班号（如：1295）',
                                      'type' => 'integer',
                                      'format' => 'int32',
                                      'example' => '1295',
                                    ),
                                    'marketing_airline' => 
                                    array (
                                      'title' => '市场方航司(如：HO)',
                                      'description' => '市场方航司(如：HO)',
                                      'type' => 'string',
                                      'example' => 'HO',
                                    ),
                                    'operating_flight_no' => 
                                    array (
                                      'title' => '承运方航班号(如：CX601)',
                                      'description' => '承运方航班号(如：CX601)',
                                      'type' => 'string',
                                      'example' => 'HO1295',
                                    ),
                                    'operating_airline' => 
                                    array (
                                      'title' => '承运方航司(如：CX)',
                                      'description' => '承运方航司(如：CX)',
                                      'type' => 'string',
                                      'example' => 'HO',
                                    ),
                                    'departure_time' => 
                                    array (
                                      'title' => '航班起飞日期时间 字符串格式(yyyy-MM-dd HH:mm:ss)',
                                      'description' => '航班起飞日期时间 字符串格式(yyyy-MM-dd HH:mm:ss)',
                                      'type' => 'string',
                                      'example' => '2023-03-10 07:55:00',
                                    ),
                                    'arrival_time' => 
                                    array (
                                      'title' => '航班到达日期时间 字符串格式(yyyy-MM-dd HH:mm:ss)',
                                      'description' => '航班到达日期时间 字符串格式(yyyy-MM-dd HH:mm:ss)',
                                      'type' => 'string',
                                      'example' => '2023-03-10 10:40:00',
                                    ),
                                    'code_share' => 
                                    array (
                                      'title' => '是否为共享航班',
                                      'description' => '是否为共享航班',
                                      'type' => 'boolean',
                                      'example' => 'false',
                                    ),
                                    'departure_terminal' => 
                                    array (
                                      'title' => '航班出发航站楼',
                                      'description' => '航班出发航站楼',
                                      'type' => 'string',
                                      'example' => 'T2',
                                    ),
                                    'arrival_terminal' => 
                                    array (
                                      'title' => '航班到达航站楼',
                                      'description' => '航班到达航站楼',
                                      'type' => 'string',
                                      'example' => 'T1',
                                    ),
                                    'equip_type' => 
                                    array (
                                      'title' => '机型',
                                      'description' => '机型',
                                      'type' => 'string',
                                      'example' => '32Q',
                                    ),
                                    'cabin' => 
                                    array (
                                      'title' => '舱位',
                                      'description' => '舱位',
                                      'type' => 'string',
                                      'example' => 'V',
                                    ),
                                    'cabin_class' => 
                                    array (
                                      'title' => '舱等',
                                      'description' => '舱等',
                                      'type' => 'string',
                                      'example' => 'Y',
                                    ),
                                    'availability' => 
                                    array (
                                      'title' => '剩余座位数',
                                      'description' => '剩余座位数',
                                      'type' => 'string',
                                      'example' => '7',
                                    ),
                                    'stop_city_list' => 
                                    array (
                                      'title' => '经停城市列表，stopQuantity > 0 时有值，多个用逗号分割',
                                      'description' => '经停城市列表，stopQuantity > 0 时有值，多个用逗号分割',
                                      'type' => 'string',
                                      'example' => 'SEL,HKG',
                                    ),
                                    'stop_quantity' => 
                                    array (
                                      'title' => '经停城市数目',
                                      'description' => '经停城市数目',
                                      'type' => 'integer',
                                      'format' => 'int32',
                                      'example' => '0',
                                    ),
                                    'flight_duration' => 
                                    array (
                                      'title' => '飞行时间 单位：分钟',
                                      'description' => '飞行时间 单位：分钟',
                                      'type' => 'integer',
                                      'format' => 'int32',
                                      'example' => '165',
                                    ),
                                  ),
                                ),
                              ),
                            ),
                          ),
                        ),
                        'last_journeys' => 
                        array (
                          'title' => '上一次改签的行程',
                          'description' => '上一次改签的行程',
                          'type' => 'array',
                          'items' => 
                          array (
                            'description' => '元素',
                            'type' => 'object',
                            'properties' => 
                            array (
                              'transfer_count' => 
                              array (
                                'title' => '中转次数',
                                'description' => '中转次数',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '0',
                              ),
                              'segment_list' => 
                              array (
                                'title' => '航段信息',
                                'description' => '航段信息',
                                'type' => 'array',
                                'items' => 
                                array (
                                  'description' => '元素',
                                  'type' => 'object',
                                  'properties' => 
                                  array (
                                    'segment_id' => 
                                    array (
                                      'title' => '航段ID 组成格式:航班号+出发机场+达到机场+起飞日期（MMdd）',
                                      'description' => '航段ID 组成格式:航班号+出发机场+达到机场+起飞日期（MMdd）',
                                      'type' => 'string',
                                      'example' => 'HO1295-PVG-MFM-20230310',
                                    ),
                                    'departure_airport' => 
                                    array (
                                      'title' => '航班起飞机场三字码(大写)',
                                      'description' => '航班起飞机场三字码(大写)',
                                      'type' => 'string',
                                      'example' => 'PVG',
                                    ),
                                    'arrival_airport' => 
                                    array (
                                      'title' => '航班到达机场三字码(大写)',
                                      'description' => '航班到达机场三字码(大写)',
                                      'type' => 'string',
                                      'example' => 'MFM',
                                    ),
                                    'departure_city' => 
                                    array (
                                      'title' => '航班起飞城市三字码(大写)',
                                      'description' => '航班起飞城市三字码(大写)',
                                      'type' => 'string',
                                      'example' => 'SHA',
                                    ),
                                    'arrival_city' => 
                                    array (
                                      'title' => '航班到达城市三字码(大写)',
                                      'description' => '航班到达城市三字码(大写)',
                                      'type' => 'string',
                                      'example' => 'MFM',
                                    ),
                                    'marketing_flight_no' => 
                                    array (
                                      'title' => '市场方航班号(如：HO1295)',
                                      'description' => '市场方航班号(如：HO1295)',
                                      'type' => 'string',
                                      'example' => 'HO1295',
                                    ),
                                    'marketing_flight_no_int' => 
                                    array (
                                      'title' => '市场方数字航班号（如：1295）',
                                      'description' => '市场方数字航班号（如：1295）',
                                      'type' => 'integer',
                                      'format' => 'int32',
                                      'example' => '1295',
                                    ),
                                    'marketing_airline' => 
                                    array (
                                      'title' => '市场方航司(如：HO)',
                                      'description' => '市场方航司(如：HO)',
                                      'type' => 'string',
                                      'example' => 'HO',
                                    ),
                                    'operating_flight_no' => 
                                    array (
                                      'title' => '承运方航班号(如：CX601)',
                                      'description' => '承运方航班号(如：CX601)',
                                      'type' => 'string',
                                      'example' => 'HO1295',
                                    ),
                                    'operating_airline' => 
                                    array (
                                      'title' => '承运方航司(如：CX)',
                                      'description' => '承运方航司(如：CX)',
                                      'type' => 'string',
                                      'example' => 'HO',
                                    ),
                                    'departure_time' => 
                                    array (
                                      'title' => '航班起飞日期时间 字符串格式(yyyy-MM-dd HH:mm:ss)',
                                      'description' => '航班起飞日期时间 字符串格式(yyyy-MM-dd HH:mm:ss)',
                                      'type' => 'string',
                                      'example' => '2023-03-10 07:55:00',
                                    ),
                                    'arrival_time' => 
                                    array (
                                      'title' => '航班到达日期时间 字符串格式(yyyy-MM-dd HH:mm:ss)',
                                      'description' => '航班到达日期时间 字符串格式(yyyy-MM-dd HH:mm:ss)',
                                      'type' => 'string',
                                      'example' => '2023-03-10 10:40:00',
                                    ),
                                    'code_share' => 
                                    array (
                                      'title' => '是否为共享航班',
                                      'description' => '是否为共享航班',
                                      'type' => 'boolean',
                                      'example' => 'false',
                                    ),
                                    'departure_terminal' => 
                                    array (
                                      'title' => '航班出发航站楼',
                                      'description' => '航班出发航站楼',
                                      'type' => 'string',
                                      'example' => 'T2',
                                    ),
                                    'arrival_terminal' => 
                                    array (
                                      'title' => '航班到达航站楼',
                                      'description' => '航班到达航站楼',
                                      'type' => 'string',
                                      'example' => 'T1',
                                    ),
                                    'equip_type' => 
                                    array (
                                      'title' => '机型',
                                      'description' => '机型',
                                      'type' => 'string',
                                      'example' => '32Q',
                                    ),
                                    'cabin' => 
                                    array (
                                      'title' => '舱位',
                                      'description' => '舱位',
                                      'type' => 'string',
                                      'example' => 'V',
                                    ),
                                    'cabin_class' => 
                                    array (
                                      'title' => '舱等',
                                      'description' => '舱等',
                                      'type' => 'string',
                                      'example' => 'Y',
                                    ),
                                    'availability' => 
                                    array (
                                      'title' => '剩余座位数',
                                      'description' => '剩余座位数',
                                      'type' => 'string',
                                      'example' => '7',
                                    ),
                                    'stop_city_list' => 
                                    array (
                                      'title' => '经停城市列表，stopQuantity > 0 时有值，多个用逗号分割',
                                      'description' => '经停城市列表，stopQuantity > 0 时有值，多个用逗号分割',
                                      'type' => 'string',
                                      'example' => 'SEL,HKG',
                                    ),
                                    'stop_quantity' => 
                                    array (
                                      'title' => '经停城市数目',
                                      'description' => '经停城市数目',
                                      'type' => 'integer',
                                      'format' => 'int32',
                                      'example' => '0',
                                    ),
                                    'flight_duration' => 
                                    array (
                                      'title' => '飞行时间 单位：分钟',
                                      'description' => '飞行时间 单位：分钟',
                                      'type' => 'integer',
                                      'format' => 'int32',
                                      'example' => '165',
                                    ),
                                  ),
                                ),
                              ),
                            ),
                          ),
                        ),
                        'change_fee_details' => 
                        array (
                          'title' => '改签费用明细 乘机人纬度',
                          'description' => '改签费用明细 乘机人纬度',
                          'type' => 'array',
                          'items' => 
                          array (
                            'description' => '元素',
                            'type' => 'object',
                            'properties' => 
                            array (
                              'passenger' => 
                              array (
                                'title' => '改签的乘机人信息',
                                'description' => '改签的乘机人信息',
                                'type' => 'object',
                                'properties' => 
                                array (
                                  'first_name' => 
                                  array (
                                    'title' => '乘机人名',
                                    'description' => '乘机人名',
                                    'type' => 'string',
                                    'example' => 'SAN',
                                  ),
                                  'last_name' => 
                                  array (
                                    'title' => '乘机人姓',
                                    'description' => '乘机人姓',
                                    'type' => 'string',
                                    'example' => 'ZHANG',
                                  ),
                                  'document' => 
                                  array (
                                    'title' => '证件号',
                                    'description' => '证件号',
                                    'type' => 'string',
                                    'example' => '411***********4411',
                                  ),
                                ),
                              ),
                              'change_fee' => 
                              array (
                                'title' => '乘机人的改签费明细',
                                'description' => '乘机人的改签费明细',
                                'type' => 'object',
                                'properties' => 
                                array (
                                  'upgrade_fee' => 
                                  array (
                                    'title' => '升舱费',
                                    'description' => '升舱费',
                                    'type' => 'number',
                                    'format' => 'double',
                                    'example' => '30',
                                  ),
                                  'service_fee' => 
                                  array (
                                    'title' => '服务费(手续费)',
                                    'description' => '服务费(手续费)',
                                    'type' => 'number',
                                    'format' => 'double',
                                    'example' => '50',
                                  ),
                                  'tax_fee' => 
                                  array (
                                    'title' => '改签税费',
                                    'description' => '改签税费',
                                    'type' => 'number',
                                    'format' => 'double',
                                    'example' => '20',
                                  ),
                                ),
                              ),
                            ),
                          ),
                        ),
                      ),
                    ),
                  ),
                  'pagination' => 
                  array (
                    'title' => '分页信息',
                    'description' => '分页信息',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'total_count' => 
                      array (
                        'title' => '总数量',
                        'description' => '总数量',
                        'type' => 'integer',
                        'format' => 'int32',
                        'example' => '5',
                      ),
                      'total_page' => 
                      array (
                        'title' => '共几页',
                        'description' => '共几页',
                        'type' => 'integer',
                        'format' => 'int32',
                        'example' => '1',
                      ),
                      'current_page' => 
                      array (
                        'title' => '当前第几页',
                        'description' => '当前第几页',
                        'type' => 'integer',
                        'format' => 'int32',
                        'example' => '1',
                      ),
                      'page_size' => 
                      array (
                        'title' => '每页数量',
                        'description' => '每页数量',
                        'type' => 'integer',
                        'format' => 'int32',
                        'example' => '10',
                      ),
                    ),
                  ),
                ),
              ),
              'error_data' => 
              array (
                'title' => '错误处理携带数据',
                'description' => '错误处理携带数据',
                'type' => 'any',
                'example' => 'null',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"status\\": 200,\\n  \\"error_code\\": \\"null\\",\\n  \\"error_msg\\": \\"null\\",\\n  \\"success\\": true,\\n  \\"request_id\\": \\"51593418-8C73-5E47-8BA8-3F1D4A00CC0B\\",\\n  \\"data\\": {\\n    \\"list\\": [\\n      {\\n        \\"change_order_num\\": 0,\\n        \\"order_num\\": 0,\\n        \\"change_passengers\\": [\\n          {\\n            \\"first_name\\": \\"SAN\\",\\n            \\"last_name\\": \\"ZHANG\\",\\n            \\"document\\": \\"411***********4411\\"\\n          }\\n        ],\\n        \\"total_amount\\": 300,\\n        \\"order_status\\": 2,\\n        \\"close_reason\\": \\"reason desc\\",\\n        \\"transaction_no\\": \\"hkduendkd-2023-dj0\\",\\n        \\"change_reason_type\\": 1,\\n        \\"create_utc_time\\": 1677415276000,\\n        \\"last_confirm_utc_time\\": 1677415278000,\\n        \\"pay_status\\": 2,\\n        \\"pay_success_utc_time\\": 1677415255000,\\n        \\"close_utc_time\\": 1677415244000,\\n        \\"contact\\": {\\n          \\"mobile_country_code\\": \\"86\\",\\n          \\"mobile_phone_num\\": \\"183*****92\\",\\n          \\"email\\": \\"gao******@gmail.com\\"\\n        },\\n        \\"original_journeys\\": [\\n          {\\n            \\"transfer_count\\": 0,\\n            \\"segment_list\\": [\\n              {\\n                \\"segment_id\\": \\"HO1295-PVG-MFM-20230310\\",\\n                \\"departure_airport\\": \\"PVG\\",\\n                \\"arrival_airport\\": \\"MFM\\",\\n                \\"departure_city\\": \\"SHA\\",\\n                \\"arrival_city\\": \\"MFM\\",\\n                \\"marketing_flight_no\\": \\"HO1295\\",\\n                \\"marketing_flight_no_int\\": 1295,\\n                \\"marketing_airline\\": \\"HO\\",\\n                \\"operating_flight_no\\": \\"HO1295\\",\\n                \\"operating_airline\\": \\"HO\\",\\n                \\"departure_time\\": \\"2023-03-10 07:55:00\\",\\n                \\"arrival_time\\": \\"2023-03-10 10:40:00\\",\\n                \\"code_share\\": false,\\n                \\"departure_terminal\\": \\"T2\\",\\n                \\"arrival_terminal\\": \\"T1\\",\\n                \\"equip_type\\": \\"32Q\\",\\n                \\"cabin\\": \\"V\\",\\n                \\"cabin_class\\": \\"Y\\",\\n                \\"availability\\": \\"7\\",\\n                \\"stop_city_list\\": \\"SEL,HKG\\",\\n                \\"stop_quantity\\": 0,\\n                \\"flight_duration\\": 165\\n              }\\n            ]\\n          }\\n        ],\\n        \\"changed_journeys\\": [\\n          {\\n            \\"transfer_count\\": 0,\\n            \\"segment_list\\": [\\n              {\\n                \\"segment_id\\": \\"HO1295-PVG-MFM-20230310\\",\\n                \\"departure_airport\\": \\"PVG\\",\\n                \\"arrival_airport\\": \\"MFM\\",\\n                \\"departure_city\\": \\"SHA\\",\\n                \\"arrival_city\\": \\"MFM\\",\\n                \\"marketing_flight_no\\": \\"HO1295\\",\\n                \\"marketing_flight_no_int\\": 1295,\\n                \\"marketing_airline\\": \\"HO\\",\\n                \\"operating_flight_no\\": \\"HO1295\\",\\n                \\"operating_airline\\": \\"HO\\",\\n                \\"departure_time\\": \\"2023-03-10 07:55:00\\",\\n                \\"arrival_time\\": \\"2023-03-10 10:40:00\\",\\n                \\"code_share\\": false,\\n                \\"departure_terminal\\": \\"T2\\",\\n                \\"arrival_terminal\\": \\"T1\\",\\n                \\"equip_type\\": \\"32Q\\",\\n                \\"cabin\\": \\"V\\",\\n                \\"cabin_class\\": \\"Y\\",\\n                \\"availability\\": \\"7\\",\\n                \\"stop_city_list\\": \\"SEL,HKG\\",\\n                \\"stop_quantity\\": 0,\\n                \\"flight_duration\\": 165\\n              }\\n            ]\\n          }\\n        ],\\n        \\"last_journeys\\": [\\n          {\\n            \\"transfer_count\\": 0,\\n            \\"segment_list\\": [\\n              {\\n                \\"segment_id\\": \\"HO1295-PVG-MFM-20230310\\",\\n                \\"departure_airport\\": \\"PVG\\",\\n                \\"arrival_airport\\": \\"MFM\\",\\n                \\"departure_city\\": \\"SHA\\",\\n                \\"arrival_city\\": \\"MFM\\",\\n                \\"marketing_flight_no\\": \\"HO1295\\",\\n                \\"marketing_flight_no_int\\": 1295,\\n                \\"marketing_airline\\": \\"HO\\",\\n                \\"operating_flight_no\\": \\"HO1295\\",\\n                \\"operating_airline\\": \\"HO\\",\\n                \\"departure_time\\": \\"2023-03-10 07:55:00\\",\\n                \\"arrival_time\\": \\"2023-03-10 10:40:00\\",\\n                \\"code_share\\": false,\\n                \\"departure_terminal\\": \\"T2\\",\\n                \\"arrival_terminal\\": \\"T1\\",\\n                \\"equip_type\\": \\"32Q\\",\\n                \\"cabin\\": \\"V\\",\\n                \\"cabin_class\\": \\"Y\\",\\n                \\"availability\\": \\"7\\",\\n                \\"stop_city_list\\": \\"SEL,HKG\\",\\n                \\"stop_quantity\\": 0,\\n                \\"flight_duration\\": 165\\n              }\\n            ]\\n          }\\n        ],\\n        \\"change_fee_details\\": [\\n          {\\n            \\"passenger\\": {\\n              \\"first_name\\": \\"SAN\\",\\n              \\"last_name\\": \\"ZHANG\\",\\n              \\"document\\": \\"411***********4411\\"\\n            },\\n            \\"change_fee\\": {\\n              \\"upgrade_fee\\": 30,\\n              \\"service_fee\\": 50,\\n              \\"tax_fee\\": 20\\n            }\\n          }\\n        ]\\n      }\\n    ],\\n    \\"pagination\\": {\\n      \\"total_count\\": 5,\\n      \\"total_page\\": 1,\\n      \\"current_page\\": 1,\\n      \\"page_size\\": 10\\n    }\\n  },\\n  \\"error_data\\": \\"null\\"\\n}","type":"json"}]',
      'title' => 'ChangeDetailListOfOrderNum',
    ),
    'FlightChangeOfOrder' => 
    array (
      'summary' => '订单号查询航变信息。',
      'path' => '/airticket/v1/flightchange/of-order',
      'methods' => 
      array (
        0 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'https',
        1 => 'http',
      ),
      'security' => 
      array (
        0 => 
        array (
          'accessTokenAuth' => 
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
          'name' => 'order_num',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '订单号',
            'description' => '订单号',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'example' => '4966***617111',
          ),
        ),
        1 => 
        array (
          'name' => 'x-acs-airticket-access-token',
          'in' => 'header',
          'schema' => 
          array (
            'title' => 'access_token',
            'description' => 'access_token',
            'type' => 'string',
            'required' => true,
            'example' => 'eyJhbGciOiJSUzI1NiIsImtpZCI6InN1ZXpfa2V5aWQifQ.eyJqdGkiOiJCQldMaWIzN0VxbC0xMjhhR2N5elJ3IiwiaWF0IjoxNjc3MDY2NTAxLCJleHAiOjE2NzcwNzM3MDEsIm5iZiI6MTY3NzA2NjQ0MX0.AF0DxsZK4Edyg0C6ObRQFUo36R1VYrb5IYmak25TmL1OfR5RkIUc3PpqFuQKNLKXf5fOtVQaKjaexzwodVeWZQDKEG_RPt_Ybb99EnEm6vPKs6e3pWFbKiBq71WleLHhVrdFb4YPowRKjc7bG0jyGUxiQ2iXy0RWDj9tIjfI-KEdzNp5oVnX7j4p3H12DwQrRPmd1nz3BciAQNINvDpzqusuIUw8JXyLFCz838Y0NhwB1_bYZyctxRLSzrGZuI5rrWtItgupqMsOlJ3RNy1QrIbQ2g6nPmzl-atOqcQ4Nw0HeDLR8dhM1OsIcFLbKXBUtwXofflhzAQrkDxhwYiXii',
          ),
        ),
        2 => 
        array (
          'name' => 'x-acs-airticket-language',
          'in' => 'header',
          'schema' => 
          array (
            'title' => '多语言 默认取买家账号配置',
            'description' => '多语言 默认取买家账号配置',
            'type' => 'string',
            'required' => false,
            'example' => 'en_US',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'PopBaseRes<List<FlightChangeOrderDTO>, Object>',
            'description' => 'PopBaseRes<List<FlightChangeOrderDTO>, Object>',
            'type' => 'object',
            'properties' => 
            array (
              'status' => 
              array (
                'title' => 'http 请求成功，status 值均为 200',
                'description' => 'http 请求成功，status 值均为 200',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'error_code' => 
              array (
                'title' => '业务错误码',
                'description' => '业务错误码',
                'type' => 'string',
                'example' => 'null',
              ),
              'error_msg' => 
              array (
                'title' => '错误信息',
                'description' => '错误信息',
                'type' => 'string',
                'example' => 'null',
              ),
              'success' => 
              array (
                'title' => '是否正确',
                'description' => '是否正确',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'RequestId' => 
              array (
                'title' => '请求 RequestId',
                'type' => 'string',
                'example' => '51593418-8C73-5E47-8BA8-3F1D4A00CC0B',
              ),
              'data' => 
              array (
                'title' => '正确处理返回数据',
                'description' => '正确处理返回数据',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '数据元素',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'flight_change_detail' => 
                    array (
                      'title' => '航变信息',
                      'description' => '航变信息',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'old_flight_no' => 
                        array (
                          'title' => '原航班号',
                          'description' => '原航班号',
                          'type' => 'string',
                          'example' => 'HO1295',
                        ),
                        'old_departure_airport' => 
                        array (
                          'title' => '原航班起飞机场三字码(大写)',
                          'description' => '原航班起飞机场三字码(大写)',
                          'type' => 'string',
                          'example' => 'PVG',
                        ),
                        'old_arrival_airport' => 
                        array (
                          'title' => '原航班到达机场三字码(大写)',
                          'description' => '原航班到达机场三字码(大写)',
                          'type' => 'string',
                          'example' => 'MFM',
                        ),
                        'old_departure_time' => 
                        array (
                          'title' => '原航班起飞日期时间 字符串格式(yyyy-MM-dd HH:mm:ss)',
                          'description' => '原航班起飞日期时间 字符串格式(yyyy-MM-dd HH:mm:ss)',
                          'type' => 'string',
                          'example' => '2023-02-01 12:01:00',
                        ),
                        'old_arrival_time' => 
                        array (
                          'title' => '原航班到达日期时间 字符串格式(yyyy-MM-dd HH:mm:ss)',
                          'description' => '原航班到达日期时间 字符串格式(yyyy-MM-dd HH:mm:ss)',
                          'type' => 'string',
                          'example' => '023-02-01 14:01:00',
                        ),
                        'new_flight_no' => 
                        array (
                          'title' => '新航班号',
                          'description' => '新航班号',
                          'type' => 'string',
                          'example' => 'HO1295',
                        ),
                        'new_departure_airport' => 
                        array (
                          'title' => '新航班起飞机场三字码(大写)',
                          'description' => '新航班起飞机场三字码(大写)',
                          'type' => 'string',
                          'example' => 'PVG',
                        ),
                        'new_arrival_airport' => 
                        array (
                          'title' => '新航班到达机场三字码(大写)',
                          'description' => '新航班到达机场三字码(大写)',
                          'type' => 'string',
                          'example' => 'MFM',
                        ),
                        'new_departure_time' => 
                        array (
                          'title' => '新航班起飞日期时间 字符串格式(yyyy-MM-dd HH:mm:ss)',
                          'description' => '新航班起飞日期时间 字符串格式(yyyy-MM-dd HH:mm:ss)',
                          'type' => 'string',
                          'example' => '2023-02-01 13:01:00',
                        ),
                        'new_arrival_time' => 
                        array (
                          'title' => '新航班到达日期时间 字符串格式(yyyy-MM-dd HH:mm:ss)',
                          'description' => '新航班到达日期时间 字符串格式(yyyy-MM-dd HH:mm:ss)',
                          'type' => 'string',
                          'example' => '2023-02-01 15:01:00',
                        ),
                        'change_time' => 
                        array (
                          'title' => '航变时间 字符串格式(yyyy-MM-dd HH:mm:ss)',
                          'description' => '航变时间 字符串格式(yyyy-MM-dd HH:mm:ss)',
                          'type' => 'string',
                          'example' => '2023-02-01 10:01:00',
                        ),
                        'change_type' => 
                        array (
                          'title' => '航变类型 1:取消; 2:变更',
                          'description' => '航变类型 1:取消; 2:变更',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '1',
                        ),
                        'change_reason' => 
                        array (
                          'title' => '航变原因',
                          'description' => '航变原因',
                          'type' => 'string',
                          'example' => '天气',
                        ),
                      ),
                    ),
                    'order_num' => 
                    array (
                      'title' => '订单号',
                      'description' => '订单号',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '4966***617111',
                    ),
                  ),
                ),
              ),
              'error_data' => 
              array (
                'title' => '错误处理携带数据',
                'description' => '错误处理携带数据',
                'type' => 'any',
                'example' => 'null',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"status\\": 200,\\n  \\"error_code\\": \\"null\\",\\n  \\"error_msg\\": \\"null\\",\\n  \\"success\\": true,\\n  \\"request_id\\": \\"51593418-8C73-5E47-8BA8-3F1D4A00CC0B\\",\\n  \\"data\\": [\\n    {\\n      \\"flight_change_detail\\": {\\n        \\"old_flight_no\\": \\"HO1295\\",\\n        \\"old_departure_airport\\": \\"PVG\\",\\n        \\"old_arrival_airport\\": \\"MFM\\",\\n        \\"old_departure_time\\": \\"2023-02-01 12:01:00\\",\\n        \\"old_arrival_time\\": \\"023-02-01 14:01:00\\",\\n        \\"new_flight_no\\": \\"HO1295\\",\\n        \\"new_departure_airport\\": \\"PVG\\",\\n        \\"new_arrival_airport\\": \\"MFM\\",\\n        \\"new_departure_time\\": \\"2023-02-01 13:01:00\\",\\n        \\"new_arrival_time\\": \\"2023-02-01 15:01:00\\",\\n        \\"change_time\\": \\"2023-02-01 10:01:00\\",\\n        \\"change_type\\": 1,\\n        \\"change_reason\\": \\"天气\\"\\n      },\\n      \\"order_num\\": 0\\n    }\\n  ],\\n  \\"error_data\\": \\"null\\"\\n}","type":"json"}]',
      'title' => 'FlightChangeOfOrder',
    ),
    'AccountFlowList' => 
    array (
      'summary' => '账号资金流水列表。',
      'path' => '/airticket/v1/account/flow-list',
      'methods' => 
      array (
        0 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'https',
        1 => 'http',
      ),
      'security' => 
      array (
        0 => 
        array (
          'accessTokenAuth' => 
          array (
          ),
        ),
      ),
      'deprecated' => false,
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'utc_begin_time',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '开始搜索时间戳具体生效到天，UTC 13位时间戳',
            'description' => '开始搜索时间戳具体生效到天，UTC 13位时间戳',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'example' => '1677427200000',
          ),
        ),
        1 => 
        array (
          'name' => 'day_num',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '搜索多少天 最大30天 取值范围[0,30]',
            'description' => '搜索多少天 最大30天 取值范围[0,30]',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'example' => '0',
          ),
        ),
        2 => 
        array (
          'name' => 'page_index',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '页索引',
            'description' => '页索引',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        3 => 
        array (
          'name' => 'page_size',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '页大小',
            'description' => '页大小',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '20',
          ),
        ),
        4 => 
        array (
          'name' => 'x-acs-airticket-access-token',
          'in' => 'header',
          'schema' => 
          array (
            'title' => 'access_token',
            'description' => 'access_token',
            'type' => 'string',
            'required' => true,
            'example' => 'eyJhbGciOiJSUzI1NiIsImtpZCI6InN1ZXpfa2V5aWQifQ.eyJqdGkiOiJCQldMaWIzN0VxbC0xMjhhR2N5elJ3IiwiaWF0IjoxNjc3MDY2NTAxLCJleHAiOjE2NzcwNzM3MDEsIm5iZiI6MTY3NzA2NjQ0MX0.AF0DxsZK4Edyg0C6ObRQFUo36R1VYrb5IYmak25TmL1OfR5RkIUc3PpqFuQKNLKXf5fOtVQaKjaexzwodVeWZQDKEG_RPt_Ybb99EnEm6vPKs6e3pWFbKiBq71WleLHhVrdFb4YPowRKjc7bG0jyGUxiQ2iXy0RWDj9tIjfI-KEdzNp5oVnX7j4p3H12DwQrRPmd1nz3BciAQNINvDpzqusuIUw8JXyLFCz838Y0NhwB1_bYZyctxRLSzrGZuI5rrWtItgupqMsOlJ3RNy1QrIbQ2g6nPmzl-atOqcQ4Nw0HeDLR8dhM1OsIcFLbKXBUtwXofflhzAQrkDxhwYiXii',
          ),
        ),
        5 => 
        array (
          'name' => 'x-acs-airticket-language',
          'in' => 'header',
          'schema' => 
          array (
            'title' => '多语言 默认取买家账号配置',
            'description' => '多语言 默认取买家账号配置',
            'type' => 'string',
            'required' => false,
            'example' => 'en_US',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'PopBaseRes<PageData<AccountFlow>, Object>',
            'description' => 'PopBaseRes<PageData<AccountFlow>, Object>',
            'type' => 'object',
            'properties' => 
            array (
              'status' => 
              array (
                'title' => 'http 请求成功，status 值均为 200',
                'description' => 'http 请求成功，status 值均为 200',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'error_code' => 
              array (
                'title' => '业务错误码',
                'description' => '业务错误码',
                'type' => 'string',
                'example' => 'null',
              ),
              'error_msg' => 
              array (
                'title' => '错误信息',
                'description' => '错误信息',
                'type' => 'string',
                'example' => 'null',
              ),
              'success' => 
              array (
                'title' => '是否正确',
                'description' => '是否正确',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'RequestId' => 
              array (
                'title' => '请求 RequestId',
                'description' => '请求 RequestId',
                'type' => 'string',
                'example' => '51593418-8C73-5E47-8BA8-3F1D4A00CC0B',
              ),
              'data' => 
              array (
                'title' => '正确处理返回数据',
                'description' => '正确处理返回数据',
                'type' => 'object',
                'properties' => 
                array (
                  'list' => 
                  array (
                    'title' => '数据列表',
                    'description' => '数据列表',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '元素',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'flow_id' => 
                        array (
                          'title' => '流水ID',
                          'description' => '流水ID',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1627239841225842666',
                        ),
                        'gmt_create' => 
                        array (
                          'title' => '创建时间',
                          'description' => '创建时间',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1676799185000',
                        ),
                        'gmt_modified' => 
                        array (
                          'title' => '修改时间',
                          'description' => '修改时间',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1676966530000',
                        ),
                        'op_type' => 
                        array (
                          'title' => '操作类型 详见BalanceOpTypeEnum， 1:付款; 2:退款; 3:充值',
                          'description' => '操作类型 1:付款; 2:退款; 3:充值',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '2',
                        ),
                        'op_amount' => 
                        array (
                          'title' => '操作金额(元)',
                          'description' => '操作金额(元)',
                          'type' => 'number',
                          'format' => 'double',
                          'example' => '950.5',
                        ),
                        'before_available_amount' => 
                        array (
                          'title' => '操作前可用余额(元)',
                          'description' => '操作前可用余额(元)',
                          'type' => 'number',
                          'format' => 'double',
                          'example' => '1950.5',
                        ),
                        'after_available_amount' => 
                        array (
                          'title' => '操作后可用余额(元)',
                          'description' => '操作后可用余额(元)',
                          'type' => 'number',
                          'format' => 'double',
                          'example' => '1000',
                        ),
                        'order_num' => 
                        array (
                          'title' => '正向订单号',
                          'description' => '正向订单号',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '4988430***971',
                        ),
                        'out_order_num' => 
                        array (
                          'title' => '正向外部订单号',
                          'description' => '正向外部订单号',
                          'type' => 'string',
                          'example' => '4988430***971',
                        ),
                        'change_order_num' => 
                        array (
                          'title' => '改签单号，如果是改签的流水，这个值不为空',
                          'description' => '改签单号，如果是改签的流水，这个值不为空',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '49880***971',
                        ),
                        'refund_order_num' => 
                        array (
                          'title' => '退票单号。如果是退款的流水，这个值不为空',
                          'description' => '退票单号。如果是退款的流水，这个值不为空',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '48430***971',
                        ),
                        'order_type' => 
                        array (
                          'title' => '订单类型',
                          'description' => '订单类型 0：正向交易 1：改签单支付 2：退款',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '1',
                        ),
                      ),
                    ),
                  ),
                  'pagination' => 
                  array (
                    'title' => '分页信息',
                    'description' => '分页信息',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'total_count' => 
                      array (
                        'title' => '总数量',
                        'description' => '总数量',
                        'type' => 'integer',
                        'format' => 'int32',
                        'example' => '5',
                      ),
                      'total_page' => 
                      array (
                        'title' => '共几页',
                        'description' => '共几页',
                        'type' => 'integer',
                        'format' => 'int32',
                        'example' => '1',
                      ),
                      'current_page' => 
                      array (
                        'title' => '当前第几页',
                        'description' => '当前第几页',
                        'type' => 'integer',
                        'format' => 'int32',
                        'example' => '1',
                      ),
                      'page_size' => 
                      array (
                        'title' => '每页数量',
                        'description' => '每页数量',
                        'type' => 'integer',
                        'format' => 'int32',
                        'example' => '10',
                      ),
                    ),
                  ),
                ),
              ),
              'error_data' => 
              array (
                'title' => '错误处理携带数据',
                'description' => '错误处理携带数据',
                'type' => 'any',
                'example' => 'null',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"status\\": 200,\\n  \\"error_code\\": \\"null\\",\\n  \\"error_msg\\": \\"null\\",\\n  \\"success\\": true,\\n  \\"RequestId\\": \\"51593418-8C73-5E47-8BA8-3F1D4A00CC0B\\",\\n  \\"data\\": {\\n    \\"list\\": [\\n      {\\n        \\"flow_id\\": 1627239841225842700,\\n        \\"gmt_create\\": 1676799185000,\\n        \\"gmt_modified\\": 1676966530000,\\n        \\"op_type\\": 2,\\n        \\"op_amount\\": 950.5,\\n        \\"before_available_amount\\": 1950.5,\\n        \\"after_available_amount\\": 1000,\\n        \\"order_num\\": 0,\\n        \\"out_order_num\\": \\"4988430***971\\",\\n        \\"change_order_num\\": 0,\\n        \\"refund_order_num\\": 0,\\n        \\"order_type\\": 1\\n      }\\n    ],\\n    \\"pagination\\": {\\n      \\"total_count\\": 5,\\n      \\"total_page\\": 1,\\n      \\"current_page\\": 1,\\n      \\"page_size\\": 10\\n    }\\n  },\\n  \\"error_data\\": \\"null\\"\\n}","type":"json"}]',
      'title' => 'AccountFlowList',
    ),
    'FileUpload' => 
    array (
      'summary' => '文件上传，限制只能传300KB以内大小。',
      'path' => '/airticket/v1/attachment/action-upload',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'https',
        1 => 'http',
      ),
      'security' => 
      array (
        0 => 
        array (
          'accessTokenAuth' => 
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
          'name' => 'order_num',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '正向订单号',
            'description' => '正向订单号',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'example' => '496***2617111',
          ),
        ),
        1 => 
        array (
          'name' => 'file_content',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '附件baseRs64字符串',
            'description' => '附件baseRs64字符串',
            'type' => 'string',
            'required' => true,
            'example' => '0r2LSuIsHlxEoGZcnGe34U1njBOR83Q4HNSvMDGrDPK5J71VjcGdRIWz2x3+tFxvQaduwHB46Z9K
dbIoDN8xPQ5PWlky8rKOPmAqSZfIRyPmAwvPvTJFwr8bRgHPPaq2VO8kHJ6jFIpJJ5I7Zqd1BjGS
SR/kULQZHsDDd2zgA9RRTsEQF2OSxFFFx2P/2Q==',
          ),
        ),
        2 => 
        array (
          'name' => 'x-acs-airticket-access-token',
          'in' => 'header',
          'schema' => 
          array (
            'title' => 'access_token',
            'description' => 'access_token',
            'type' => 'string',
            'required' => true,
            'example' => 'eyJhbGciOiJSUzI1NiIsImtpZCI6InN1ZXpfa2V5aWQifQ.eyJqdGkiOiJCQldMaWIzN0VxbC0xMjhhR2N5elJ3IiwiaWF0IjoxNjc3MDY2NTAxLCJleHAiOjE2NzcwNzM3MDEsIm5iZiI6MTY3NzA2NjQ0MX0.AF0DxsZK4Edyg0C6ObRQFUo36R1VYrb5IYmak25TmL1OfR5RkIUc3PpqFuQKNLKXf5fOtVQaKjaexzwodVeWZQDKEG_RPt_Ybb99EnEm6vPKs6e3pWFbKiBq71WleLHhVrdFb4YPowRKjc7bG0jyGUxiQ2iXy0RWDj9tIjfI-KEdzNp5oVnX7j4p3H12DwQrRPmd1nz3BciAQNINvDpzqusuIUw8JXyLFCz838Y0NhwB1_bYZyctxRLSzrGZuI5rrWtItgupqMsOlJ3RNy1QrIbQ2g6nPmzl-atOqcQ4Nw0HeDLR8dhM1OsIcFLbKXBUtwXofflhzAQrkDxhwYiXii',
          ),
        ),
        3 => 
        array (
          'name' => 'x-acs-airticket-language',
          'in' => 'header',
          'schema' => 
          array (
            'title' => '多语言 默认取买家账号配置',
            'description' => '多语言 默认取买家账号配置',
            'type' => 'string',
            'required' => false,
            'example' => 'en_US',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'PopBaseRes<UploadAttachmentRes, Object>',
            'description' => 'PopBaseRes<UploadAttachmentRes, Object>',
            'type' => 'object',
            'properties' => 
            array (
              'status' => 
              array (
                'title' => 'http 请求成功，status 值均为 200',
                'description' => 'http 请求成功，status 值均为 200',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'error_code' => 
              array (
                'title' => '业务错误码',
                'description' => '业务错误码',
                'type' => 'string',
                'example' => 'null',
              ),
              'error_msg' => 
              array (
                'title' => '错误信息',
                'description' => '错误信息',
                'type' => 'string',
                'example' => 'null',
              ),
              'success' => 
              array (
                'title' => '是否正确',
                'description' => '是否正确',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'RequestId' => 
              array (
                'title' => '请求 RequestId',
                'description' => '请求 RequestId',
                'type' => 'string',
                'example' => '51593418-8C73-5E47-8BA8-3F1D4A00CC0B',
              ),
              'data' => 
              array (
                'title' => '正确处理返回数据',
                'description' => '正确处理返回数据',
                'type' => 'object',
                'properties' => 
                array (
                  'uploaded_file_url' => 
                  array (
                    'title' => '上传后文件名称',
                    'description' => '上传后文件名称',
                    'type' => 'string',
                    'example' => 'https://fliggy-flight-jinghang-bucket.oss-cn-zhangjiakou.aliyuncs.com/suez/flight_suez_9a634376****47.jpeg',
                  ),
                ),
              ),
              'error_data' => 
              array (
                'title' => '错误处理携带数据',
                'description' => '错误处理携带数据',
                'type' => 'any',
                'example' => 'null',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"status\\": 200,\\n  \\"error_code\\": \\"null\\",\\n  \\"error_msg\\": \\"null\\",\\n  \\"success\\": true,\\n  \\"RequestId\\": \\"51593418-8C73-5E47-8BA8-3F1D4A00CC0B\\",\\n  \\"data\\": {\\n    \\"uploaded_file_url\\": \\"https://fliggy-flight-jinghang-bucket.oss-cn-zhangjiakou.aliyuncs.com/suez/flight_suez_9a634376****47.jpeg\\"\\n  },\\n  \\"error_data\\": \\"null\\"\\n}","type":"json"}]',
      'title' => 'FileUpload',
    ),
    'LuggageDirect' => 
    array (
      'summary' => '航程行李直挂。',
      'path' => '/airticket/v1/flight-data/luggage-direct',
      'methods' => 
      array (
        0 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'https',
        1 => 'http',
      ),
      'security' => 
      array (
        0 => 
        array (
          'accessTokenAuth' => 
          array (
          ),
        ),
      ),
      'deprecated' => false,
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'flight_segment_param_list',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'title' => '航段列表，列表中航段构成一个航程',
            'description' => '航段列表，列表中航段构成一个航程。size<=2。',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'departure_airport' => 
                array (
                  'title' => '出发机场三字码',
                  'description' => '出发机场三字码',
                  'type' => 'string',
                  'required' => true,
                  'example' => 'HGH',
                ),
                'arrival_airport' => 
                array (
                  'title' => '到达机场三字码',
                  'description' => '到达机场三字码',
                  'type' => 'string',
                  'required' => true,
                  'example' => 'SIN',
                ),
                'departure_terminal' => 
                array (
                  'title' => '出发航站楼',
                  'description' => '出发航站楼',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'T1',
                ),
                'arrival_terminal' => 
                array (
                  'title' => '到达航站楼',
                  'description' => '到达航站楼',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'T1',
                ),
                'departure_time' => 
                array (
                  'title' => '出发时间，13位时间戳',
                  'description' => '出发时间，13位时间戳',
                  'type' => 'integer',
                  'format' => 'int64',
                  'required' => true,
                  'example' => '1705285430445',
                ),
                'arrival_time' => 
                array (
                  'title' => '到达时间，13位时间戳',
                  'description' => '到达时间，13位时间戳',
                  'type' => 'integer',
                  'format' => 'int64',
                  'required' => true,
                  'example' => '1705285430445',
                ),
                'stop_city_list' => 
                array (
                  'title' => '经停城市三字码',
                  'description' => '经停城市三字码',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'SEL,HKG',
                ),
                'marketing_airline' => 
                array (
                  'title' => '市场方航司',
                  'description' => '市场方航司',
                  'type' => 'string',
                  'required' => true,
                  'example' => 'CZ',
                ),
                'operating_airline' => 
                array (
                  'title' => '承运方航司',
                  'description' => '承运方航司',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'CZ',
                ),
                'ticketing_airline' => 
                array (
                  'title' => '出票方航司',
                  'description' => '出票方航司',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'CZ',
                ),
                'marketing_flight_no' => 
                array (
                  'title' => '航班号',
                  'description' => '航班号',
                  'type' => 'string',
                  'required' => true,
                  'example' => 'CZ616',
                ),
                'code_share' => 
                array (
                  'title' => '是否共享',
                  'description' => '是否共享',
                  'type' => 'boolean',
                  'required' => true,
                  'example' => 'true',
                  'default' => 'false',
                ),
              ),
              'required' => false,
            ),
            'required' => false,
          ),
        ),
        1 => 
        array (
          'name' => 'x-acs-airticket-access-token',
          'in' => 'header',
          'schema' => 
          array (
            'title' => 'access_token',
            'description' => 'access_token',
            'type' => 'string',
            'required' => true,
            'example' => 'eyJhbGciOiJSUzI1NiIsImtpZCI6InN1ZXpfa2V5aWQifQ.eyJqdGkiOiJCQldMaWIzN0VxbC0xMjhhR2N5elJ3IiwiaWF0IjoxNjc3MDY2NTAxLCJleHAiOjE2NzcwNzM3MDEsIm5iZiI6MTY3NzA2NjQ0MX0.AF0DxsZK4Edyg0C6ObRQFUo36R1VYrb5IYmak25TmL1OfR5RkIUc3PpqFuQKNLKXf5fOtVQaKjaexzwodVeWZQDKEG_RPt_Ybb99EnEm6vPKs6e3pWFbKiBq71WleLHhVrdFb4YPowRKjc7bG0jyGUxiQ2iXy0RWDj9tIjfI-KEdzNp5oVnX7j4p3H12DwQrRPmd1nz3BciAQNINvDpzqusuIUw8JXyLFCz838Y0NhwB1_bYZyctxRLSzrGZuI5rrWtItgupqMsOlJ3RNy1QrIbQ2g6nPmzl-atOqcQ4Nw0HeDLR8dhM1OsIcFLbKXBUtwXofflhzAQrkDxhwYiXii',
          ),
        ),
        2 => 
        array (
          'name' => 'x-acs-airticket-language',
          'in' => 'header',
          'schema' => 
          array (
            'title' => '多语言 默认取买家账号配置',
            'description' => '多语言 默认取买家账号配置',
            'type' => 'string',
            'required' => false,
            'example' => 'en_US',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'PopBaseRes<List<LuggageDirect>, Object>',
            'description' => 'PopBaseRes<List<LuggageDirect>, Object>',
            'type' => 'object',
            'properties' => 
            array (
              'status' => 
              array (
                'title' => 'http 请求成功，status 值均为 200',
                'description' => 'http 请求成功，status 值均为 200',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'error_code' => 
              array (
                'title' => '业务错误码',
                'description' => '业务错误码',
                'type' => 'string',
                'example' => 'null',
              ),
              'error_msg' => 
              array (
                'title' => '错误信息',
                'description' => '错误信息',
                'type' => 'string',
                'example' => 'null',
              ),
              'success' => 
              array (
                'title' => '是否正确',
                'description' => '是否正确',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'RequestId' => 
              array (
                'title' => '请求 RequestId',
                'description' => '请求 RequestId',
                'type' => 'string',
                'example' => '51593418-8C73-5E47-8BA8-3F1D4A00CC0B',
              ),
              'data' => 
              array (
                'title' => '正确处理返回数据',
                'description' => '正确处理返回数据',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'city_code' => 
                    array (
                      'title' => '城市三字码',
                      'description' => '城市三字码',
                      'type' => 'string',
                      'example' => 'BJS',
                    ),
                    'direct_type' => 
                    array (
                      'title' => '行李直挂规则类型 1:航段之间行李直达; 2:航段之间行李重新托运; 3:经停城市行李直达; 4:经停城市行李重新托运',
                      'description' => '行李直挂规则类型 0:非行李直挂; 1:行李直挂',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '1',
                    ),
                  ),
                ),
              ),
              'error_data' => 
              array (
                'title' => '错误处理携带数据',
                'description' => '错误处理携带数据',
                'type' => 'any',
                'example' => 'null',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"status\\": 200,\\n  \\"error_code\\": \\"null\\",\\n  \\"error_msg\\": \\"null\\",\\n  \\"success\\": true,\\n  \\"RequestId\\": \\"51593418-8C73-5E47-8BA8-3F1D4A00CC0B\\",\\n  \\"data\\": [\\n    {\\n      \\"city_code\\": \\"BJS\\",\\n      \\"direct_type\\": 1\\n    }\\n  ],\\n  \\"error_data\\": \\"null\\"\\n}","type":"json"}]',
      'title' => 'LuggageDirect',
      'description' => '航程行李直挂信息查询，接口输入航程信息，返回该航程是否支持行李直挂。中转和经停场景，会涉及行李直挂。',
    ),
    'TransitVisa' => 
    array (
      'summary' => '航程过境签信息查询，接口输入航程信息，返回乘坐该航程是否存在过境签要求。只有中转/经停才是有效入参(中转/经停经过第三国)，当前支持的乘客默认为中国大陆旅客。',
      'path' => '/airticket/v1/flight-data/transit-visa',
      'methods' => 
      array (
        0 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'https',
        1 => 'http',
      ),
      'security' => 
      array (
        0 => 
        array (
          'accessTokenAuth' => 
          array (
          ),
        ),
      ),
      'deprecated' => false,
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'flight_segment_param_list',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'title' => '航段列表，列表中航段构成一个航程',
            'description' => '航段列表，列表中航段构成一个航程。size<=2。',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'departure_airport' => 
                array (
                  'title' => '出发机场三字码',
                  'description' => '出发机场三字码',
                  'type' => 'string',
                  'required' => true,
                  'example' => 'HGH',
                ),
                'arrival_airport' => 
                array (
                  'title' => '到达机场三字码',
                  'description' => '到达机场三字码',
                  'type' => 'string',
                  'required' => true,
                  'example' => 'SIN',
                ),
                'departure_terminal' => 
                array (
                  'title' => '出发航站楼',
                  'description' => '出发航站楼',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'T1',
                ),
                'arrival_terminal' => 
                array (
                  'title' => '到达航站楼',
                  'description' => '到达航站楼',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'T1',
                ),
                'departure_time' => 
                array (
                  'title' => '出发时间，13位时间戳',
                  'description' => '出发时间，13位时间戳',
                  'type' => 'integer',
                  'format' => 'int64',
                  'required' => true,
                  'example' => '1705285430445',
                ),
                'arrival_time' => 
                array (
                  'title' => '到达时间，13位时间戳',
                  'description' => '到达时间，13位时间戳',
                  'type' => 'integer',
                  'format' => 'int64',
                  'required' => true,
                  'example' => '1705285430445',
                ),
                'stop_city_list' => 
                array (
                  'title' => '经停城市三字码',
                  'description' => '经停城市三字码',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'SEL,HKG',
                ),
                'marketing_airline' => 
                array (
                  'title' => '市场方航司',
                  'description' => '市场方航司',
                  'type' => 'string',
                  'required' => true,
                  'example' => 'CZ',
                ),
                'operating_airline' => 
                array (
                  'title' => '承运方航司',
                  'description' => '承运方航司',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'CZ',
                ),
                'ticketing_airline' => 
                array (
                  'title' => '出票方航司',
                  'description' => '出票方航司',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'CZ',
                ),
                'marketing_flight_no' => 
                array (
                  'title' => '航班号',
                  'description' => '航班号',
                  'type' => 'string',
                  'required' => true,
                  'example' => 'CZ616',
                ),
                'code_share' => 
                array (
                  'title' => '是否共享',
                  'description' => '是否共享',
                  'type' => 'boolean',
                  'required' => true,
                  'example' => 'true',
                  'default' => 'false',
                ),
              ),
              'required' => false,
            ),
            'required' => false,
          ),
        ),
        1 => 
        array (
          'name' => 'x-acs-airticket-access-token',
          'in' => 'header',
          'schema' => 
          array (
            'title' => 'access_token',
            'description' => 'access_token',
            'type' => 'string',
            'required' => true,
            'example' => 'eyJhbGciOiJSUzI1NiIsImtpZCI6InN1ZXpfa2V5aWQifQ.eyJqdGkiOiJCQldMaWIzN0VxbC0xMjhhR2N5elJ3IiwiaWF0IjoxNjc3MDY2NTAxLCJleHAiOjE2NzcwNzM3MDEsIm5iZiI6MTY3NzA2NjQ0MX0.AF0DxsZK4Edyg0C6ObRQFUo36R1VYrb5IYmak25TmL1OfR5RkIUc3PpqFuQKNLKXf5fOtVQaKjaexzwodVeWZQDKEG_RPt_Ybb99EnEm6vPKs6e3pWFbKiBq71WleLHhVrdFb4YPowRKjc7bG0jyGUxiQ2iXy0RWDj9tIjfI-KEdzNp5oVnX7j4p3H12DwQrRPmd1nz3BciAQNINvDpzqusuIUw8JXyLFCz838Y0NhwB1_bYZyctxRLSzrGZuI5rrWtItgupqMsOlJ3RNy1QrIbQ2g6nPmzl-atOqcQ4Nw0HeDLR8dhM1OsIcFLbKXBUtwXofflhzAQrkDxhwYiXii',
          ),
        ),
        2 => 
        array (
          'name' => 'x-acs-airticket-language',
          'in' => 'header',
          'schema' => 
          array (
            'title' => '多语言 默认取买家账号配置',
            'description' => '多语言 默认取买家账号配置',
            'type' => 'string',
            'required' => false,
            'example' => 'en_US',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'PopBaseRes<List<VisaRemark>, Object>',
            'description' => 'PopBaseRes<List<VisaRemark>, Object>',
            'type' => 'object',
            'properties' => 
            array (
              'status' => 
              array (
                'title' => 'http 请求成功，status 值均为 200',
                'description' => 'http 请求成功，status 值均为 200',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'error_code' => 
              array (
                'title' => '业务错误码',
                'description' => '业务错误码',
                'type' => 'string',
                'example' => 'null',
              ),
              'error_msg' => 
              array (
                'title' => '错误信息',
                'description' => '错误信息',
                'type' => 'string',
                'example' => 'null',
              ),
              'success' => 
              array (
                'title' => '是否正确',
                'description' => '是否正确',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'RequestId' => 
              array (
                'title' => '请求 RequestId',
                'description' => '请求 RequestId',
                'type' => 'string',
                'example' => '51593418-8C73-5E47-8BA8-3F1D4A00CC0B',
              ),
              'data' => 
              array (
                'title' => '正确处理返回数据',
                'description' => '正确处理返回数据',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'city_code' => 
                    array (
                      'title' => '经停/中转城市三字码',
                      'description' => '经停/中转城市三字码',
                      'type' => 'string',
                      'example' => 'HGH',
                    ),
                    'visa_type' => 
                    array (
                      'title' => '过境签类型，0：无需过境签，1：需要过境签',
                      'description' => '过境签类型，0：无需过境签，1：需要过境签',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '1',
                    ),
                  ),
                ),
              ),
              'error_data' => 
              array (
                'title' => '错误处理携带数据',
                'description' => '错误处理携带数据',
                'type' => 'any',
                'example' => 'null',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"status\\": 200,\\n  \\"error_code\\": \\"null\\",\\n  \\"error_msg\\": \\"null\\",\\n  \\"success\\": true,\\n  \\"RequestId\\": \\"51593418-8C73-5E47-8BA8-3F1D4A00CC0B\\",\\n  \\"data\\": [\\n    {\\n      \\"city_code\\": \\"HGH\\",\\n      \\"visa_type\\": 1\\n    }\\n  ],\\n  \\"error_data\\": \\"null\\"\\n}","type":"json"}]',
      'title' => 'TransitVisa',
      'description' => '航程过境签信息查询，接口输入航程信息，返回乘坐该航程是否存在过境签要求。只有中转/经停才是有效入参(中转/经停经过第三国)，当前支持的乘客默认为中国大陆旅客。',
    ),
  ),
  'endpoints' => 
  array (
  ),
);
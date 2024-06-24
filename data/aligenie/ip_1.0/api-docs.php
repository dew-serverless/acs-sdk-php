<?php return array (
  'version' => '1.0',
  'info' => 
  array (
    'style' => 'AliGenie',
    'product' => 'AliGenie',
    'version' => 'ip_1.0',
  ),
  'directories' => 
  array (
    0 => 
    array (
      'id' => 172223,
      'title' => '管理后台API',
      'type' => 'directory',
      'children' => 
      array (
        0 => 
        array (
          'id' => 176686,
          'title' => '酒店管理',
          'type' => 'directory',
          'children' => 
          array (
            0 => 'GetRelationProductList',
            1 => 'CreateHotel',
            2 => 'UpdateHotel',
            3 => 'RemoveHotel',
            4 => 'ListHotelInfo',
            5 => 'ListHotels',
            6 => 'AuditHotel',
          ),
        ),
        1 => 
        array (
          'id' => 176687,
          'title' => '房间管理',
          'type' => 'directory',
          'children' => 
          array (
            0 => 'ListHotelRooms',
            1 => 'BatchAddHotelRoom',
            2 => 'BatchDeleteHotelRoom',
            3 => 'CheckoutWithAK',
            4 => 'QueryHotelRoomDetail',
          ),
        ),
        2 => 
        array (
          'id' => 176688,
          'title' => '客需服务',
          'type' => 'directory',
          'children' => 
          array (
            0 => 'ListSceneCategory',
            1 => 'ListDialogueTemplate',
            2 => 'InsertHotelSceneBookItem',
            3 => 'DeleteHotelSceneBookItem',
            4 => 'UpdateHotelSceneBookItem',
            5 => 'ListHotelSceneBookItems',
            6 => 'ListHotelSceneItems',
            7 => 'UpdateHotelSceneItem',
            8 => 'GetHotelSceneItemDetail',
            9 => 'InvokeRobotPush',
          ),
        ),
        3 => 
        array (
          'id' => 177617,
          'title' => '客控管理',
          'type' => 'directory',
          'children' => 
          array (
            0 => 'ImportHotelConfig',
            1 => 'ImportRoomControlDevices',
            2 => 'ImportRoomGenieScenes',
            3 => 'PageGetHotelRoomDevices',
            4 => 'QueryRoomControlDevices',
            5 => 'GetHotelRoomDevice',
            6 => 'ControlRoomDevice',
            7 => 'PushVoiceBoxCommands',
            8 => 'SyncDeviceStatusWithAk',
            9 => 'CreateRcuScene',
            10 => 'DeleteRcuScene',
            11 => 'UpdateRcuScene',
            12 => 'QuerySceneList',
            13 => 
            array (
              'id' => 183878,
              'title' => '红外设备管理',
              'type' => 'directory',
              'children' => 
              array (
                0 => 'ListAllProvinces',
                1 => 'ListCitiesByProvince',
                2 => 'ListSTBServiceProviders',
                3 => 'ListInfraredDeviceBrands',
                4 => 'ListInfraredRemoteControllers',
              ),
            ),
          ),
        ),
        4 => 
        array (
          'id' => 180467,
          'title' => '问答管理',
          'type' => 'directory',
          'children' => 
          array (
            0 => 'ListCustomQA',
            1 => 'AddCustomQA',
            2 => 'AddCustomQAV2',
            3 => 'UpdateCustomQA',
            4 => 'DeleteCustomQA',
            5 => 'GetBasicInfoQA',
            6 => 'UpdateBasicInfoQA',
            7 => 'ListServiceQA',
            8 => 'UpdateServiceQA',
          ),
        ),
        5 => 
        array (
          'id' => 177620,
          'title' => '定制配置',
          'type' => 'directory',
          'children' => 
          array (
            0 => 'AddCartoon',
            1 => 'GetCartoon',
            2 => 'DeleteCartoon',
            3 => 'GetHotelScreenSaverStyle',
            4 => 'AddOrUpdateHotelSetting',
            5 => 'GetHotelSetting',
            6 => 'DeleteHotelSetting',
          ),
        ),
        6 => 
        array (
          'id' => 176771,
          'title' => '欢迎语配置',
          'type' => 'directory',
          'children' => 
          array (
            0 => 'AddOrUpdateWelcomeText',
            1 => 'GetWelcomeTextAndMusic',
            2 => 'ResetWelcomeTextAndMusic',
            3 => 'PushWelcomeTextAndMusic',
            4 => 'PushWelcome',
          ),
        ),
        7 => 
        array (
          'id' => 176689,
          'title' => '消息模板',
          'type' => 'directory',
          'children' => 
          array (
            0 => 'AddMessageTemplate',
            1 => 'ListHotelMessageTemplate',
            2 => 'DeleteMessageTemplate',
            3 => 'UpdateMessageTemplate',
            4 => 'PushHotelMessage',
          ),
        ),
        8 => 
        array (
          'id' => 180476,
          'title' => '工单管理',
          'type' => 'directory',
          'children' => 
          array (
            0 => 'ListTickets',
            1 => 'UpdateTicket',
          ),
        ),
        9 => 
        array (
          'id' => 176690,
          'title' => '闹钟管理',
          'type' => 'directory',
          'children' => 
          array (
            0 => 'DeleteHotelAlarm',
            1 => 'ListHotelAlarm',
            2 => 'CreateHotelAlarm',
            3 => 'UpdateHotelAlarm',
          ),
        ),
        10 => 'ChildAccountAuth',
        11 => 'RemoveChildAccountAuth',
        12 => 
        array (
          'id' => 190022,
          'title' => 'pms',
          'type' => 'directory',
          'children' => 
          array (
            0 => 'PmsEventReport',
          ),
        ),
      ),
    ),
    1 => 
    array (
      'id' => 172229,
      'title' => '设备端使用API',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'QueryDeviceStatus',
        1 => 'ListHotelControlDevice',
        2 => 'DeviceControl',
        3 => 'ListHotelSceneItem',
        4 => 'ListHotelServiceCategory',
        5 => 'GetHotelOrderDetail',
        6 => 'ListHotelOrder',
        7 => 'SubmitHotelOrder',
        8 => 'GetHotelNotice',
        9 => 'GetHotelNoticeV2',
        10 => 'GetHotelHomeBackImageAndModes',
        11 => 'GetHotelSampleUtterances',
        12 => 'GetHotelScreenSaver',
        13 => 'RoomCheckOut',
        14 => 'GetHotelContacts',
        15 => 'GetHotelContactByNumber',
        16 => 'GetHotelContactByGenieDevice',
      ),
    ),
    2 => 
    array (
      'id' => 179237,
      'title' => '其他',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'AddOrUpdateScreenSaver',
        1 => 'AddOrUpdateDisPlayModes',
        2 => 'GetUnionId',
        3 => 'HotelQrBind',
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
    'GetRelationProductList' => 
    array (
      'summary' => '获得创建酒店使用的关联产品列表。',
      'path' => '/v1.0/ip/getRelationProductList',
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
          'AliGenie_Auth_SPI' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
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
            'title' => 'Result<List<ProductInfo>>',
            'description' => 'Result<List<ProductInfo>>',
            'type' => 'object',
            'properties' => 
            array (
              'StatusCode' => 
              array (
                'title' => '调用返回码，除约定的SUCCESS_CODE外，其余由服务提供者自定义',
                'description' => '调用返回码，除约定的SUCCESS_CODE外，其余由服务提供者自定义',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Result' => 
              array (
                'title' => '服务的实际返回结果',
                'description' => '服务的实际返回结果',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '返回的详细信息。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Name' => 
                    array (
                      'title' => '产品名称',
                      'description' => '产品名称',
                      'type' => 'string',
                      'example' => '橙蜂中控面板',
                    ),
                    'Pk' => 
                    array (
                      'title' => '产品pk',
                      'description' => '产品pk',
                      'type' => 'string',
                      'example' => 'jTOSl***l1odxImRw',
                    ),
                  ),
                ),
              ),
              'Message' => 
              array (
                'title' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                'description' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                'type' => 'string',
                'example' => 'success',
              ),
              'Extentions' => 
              array (
                'title' => '扩展字段',
                'description' => '扩展字段',
                'type' => 'object',
                'additionalProperties' => 
                array (
                  'type' => 'any',
                  'description' => '扩展信息',
                  'example' => 'any',
                ),
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '0EC7*726E',
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
            'errorCode' => 'InvalidParameter',
            'errorMessage' => 'The request parameter is invalid',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'ServerError',
            'errorMessage' => 'internal server error',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"StatusCode\\": 200,\\n  \\"Result\\": [\\n    {\\n      \\"Name\\": \\"橙蜂中控面板\\",\\n      \\"Pk\\": \\"jTOSl***l1odxImRw\\"\\n    }\\n  ],\\n  \\"Message\\": \\"success\\",\\n  \\"Extentions\\": {\\n    \\"key\\": \\"any\\"\\n  },\\n  \\"RequestId\\": \\"0EC7*726E\\"\\n}","type":"json"}]',
      'title' => '获得关联产品列表',
      'description' => '获得创建酒店使用的关联产品列表。',
    ),
    'CreateHotel' => 
    array (
      'summary' => '创建酒店接口。',
      'path' => '/v1.0/ip/createHotel',
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
          'AliGenie_Auth_SPI' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
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
          'name' => 'TbOpenId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '淘宝开放id',
            'description' => '淘宝授权登录后获得，当前登录的淘宝开放user id',
            'type' => 'string',
            'required' => true,
            'example' => 'AAEV***E3d3Z2ETwh',
          ),
        ),
        1 => 
        array (
          'name' => 'AppKey',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '开放平台appKey',
            'description' => '淘宝开放平台申请的用户淘宝授权登录的appKey',
            'type' => 'string',
            'required' => true,
            'example' => '333566791',
          ),
        ),
        2 => 
        array (
          'name' => 'HotelName',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '酒店名称',
            'description' => '酒店名称',
            'type' => 'string',
            'required' => true,
            'example' => '天奥酒店',
          ),
        ),
        3 => 
        array (
          'name' => 'Remark',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '备注',
            'description' => '备注',
            'type' => 'string',
            'required' => false,
            'example' => 'test',
          ),
        ),
        4 => 
        array (
          'name' => 'HotelAddress',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '酒店地址',
            'description' => '酒店地址',
            'type' => 'string',
            'required' => true,
            'example' => '浙江省杭州市xxxxxxxx',
          ),
        ),
        5 => 
        array (
          'name' => 'HotelEmail',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '酒店联系邮箱',
            'description' => '酒店联系邮箱',
            'type' => 'string',
            'required' => true,
            'example' => 'test@hotel.com',
          ),
        ),
        6 => 
        array (
          'name' => 'PhoneNumber',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '酒店联系电话',
            'description' => '酒店联系电话',
            'type' => 'string',
            'required' => true,
            'example' => '13xxxxxxxx',
          ),
        ),
        7 => 
        array (
          'name' => 'RelatedPk',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '关联产品',
            'description' => '关联产品Pk号',
            'type' => 'string',
            'required' => true,
            'example' => 'jTO****Rw',
          ),
        ),
        8 => 
        array (
          'name' => 'RelatedPks',
          'in' => 'formData',
          'style' => 'json',
          'schema' => 
          array (
            'title' => '酒店关联产品列表',
            'description' => '酒店关联产品列表',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'string',
              'required' => false,
            ),
            'required' => false,
          ),
        ),
        9 => 
        array (
          'name' => 'RoomNum',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '房间数',
            'description' => '房间数',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'example' => '100',
          ),
        ),
        10 => 
        array (
          'name' => 'EstOpenTime',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '预计开业时间：yyyy-MM-dd HH:mm:ss 格式字符串',
            'description' => '预计开业时间：yyyy-MM-dd HH:mm:ss 格式字符串',
            'type' => 'string',
            'required' => true,
            'example' => '2022-10-1 00:00:00',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Result<Boolean>',
            'description' => 'Result<Boolean>',
            'type' => 'object',
            'properties' => 
            array (
              'StatusCode' => 
              array (
                'title' => '调用返回码，除约定的SUCCESS_CODE外，其余由服务提供者自定义',
                'description' => '调用返回码，除约定的SUCCESS_CODE外，其余由服务提供者自定义',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Result' => 
              array (
                'title' => '酒店ID',
                'description' => '服务的实际返回结果，酒店ID',
                'type' => 'string',
                'example' => '5abfd9***2c38661',
              ),
              'Message' => 
              array (
                'title' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                'description' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                'type' => 'string',
                'example' => 'success',
              ),
              'Extentions' => 
              array (
                'title' => '扩展字段',
                'description' => '扩展字段',
                'type' => 'object',
                'additionalProperties' => 
                array (
                  'type' => 'any',
                  'description' => '扩展字段',
                ),
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '73C67BD9-175A-1324-8202-9FAABBB3E6FA',
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
            'errorCode' => 'InvalidParameter',
            'errorMessage' => 'The request parameter is invalid',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'ServerError',
            'errorMessage' => 'internal server error',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"StatusCode\\": 200,\\n  \\"Result\\": \\"5abfd9***2c38661\\",\\n  \\"Message\\": \\"success\\",\\n  \\"Extentions\\": {\\n    \\"key\\": \\"\\"\\n  },\\n  \\"RequestId\\": \\"73C67BD9-175A-1324-8202-9FAABBB3E6FA\\"\\n}","type":"json"}]',
      'title' => '创建酒店',
      'description' => '创建酒店接口。',
    ),
    'UpdateHotel' => 
    array (
      'summary' => '酒店信息修改。',
      'path' => '/v1.0/ip/updateHotel',
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
          'AliGenie_Auth_SPI' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
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
          'name' => 'TbOpenId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '淘宝开放id',
            'description' => '淘宝开放id',
            'type' => 'string',
            'required' => true,
            'example' => 'AAEVK***UE3d3Z2ETwh',
          ),
        ),
        1 => 
        array (
          'name' => 'AppKey',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '开放平台appKey',
            'description' => '开放平台appKey',
            'type' => 'string',
            'required' => true,
            'example' => '31342884',
          ),
        ),
        2 => 
        array (
          'name' => 'HotelId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '酒店ID',
            'description' => '酒店ID',
            'type' => 'string',
            'required' => true,
            'example' => 'e6dd44fd16084db8a60d69fd625d9f0f',
          ),
        ),
        3 => 
        array (
          'name' => 'HotelName',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '酒店名称',
            'description' => '酒店名称',
            'type' => 'string',
            'required' => false,
            'example' => '天奥酒店',
          ),
        ),
        4 => 
        array (
          'name' => 'Remark',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '备注',
            'description' => '备注',
            'type' => 'string',
            'required' => false,
            'example' => '测试',
          ),
        ),
        5 => 
        array (
          'name' => 'HotelAddress',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '酒店地址',
            'description' => '酒店地址',
            'type' => 'string',
            'required' => false,
            'example' => '浙江省杭州市xxxx',
          ),
        ),
        6 => 
        array (
          'name' => 'HotelEmail',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '酒店联系邮箱',
            'description' => '酒店联系邮箱',
            'type' => 'string',
            'required' => false,
            'example' => 'a*****@hotel.com',
          ),
        ),
        7 => 
        array (
          'name' => 'PhoneNumber',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '酒店联系电话',
            'description' => '酒店联系电话',
            'type' => 'string',
            'required' => false,
            'example' => '130***',
          ),
        ),
        8 => 
        array (
          'name' => 'RoomNum',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '房间数',
            'description' => '房间数',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '4',
          ),
        ),
        9 => 
        array (
          'name' => 'EstOpenTime',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '预计发布时间：yyyy-MM-dd HH:mm:ss格式字符串',
            'description' => '预计发布时间：yyyy-MM-dd HH:mm:ss格式字符串',
            'type' => 'string',
            'required' => false,
            'example' => '2022-02-22 00:00:00',
          ),
        ),
        10 => 
        array (
          'name' => 'RelatedPks',
          'in' => 'formData',
          'style' => 'json',
          'schema' => 
          array (
            'title' => '关联产品列表',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'string',
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
            'title' => 'Result<Boolean>',
            'description' => 'Result<Boolean>',
            'type' => 'object',
            'properties' => 
            array (
              'StatusCode' => 
              array (
                'title' => '调用返回码，除约定的SUCCESS_CODE外，其余由服务提供者自定义',
                'description' => '调用返回码，除约定的SUCCESS_CODE外，其余由服务提供者自定义',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Result' => 
              array (
                'title' => '服务的实际返回结果',
                'description' => '服务的实际返回结果',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Message' => 
              array (
                'title' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                'description' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                'type' => 'string',
                'example' => 'success',
              ),
              'Extentions' => 
              array (
                'title' => '扩展字段',
                'description' => '扩展字段',
                'type' => 'object',
                'additionalProperties' => 
                array (
                  'type' => 'any',
                  'description' => '扩展信息',
                ),
              ),
              'RequestId' => 
              array (
                'description' => 'The ID of the request. ',
                'type' => 'string',
                'example' => '46C53AEB-B19C-5C42-B32E-A726979C126F',
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
            'errorCode' => 'InvalidParameter',
            'errorMessage' => 'The request parameter is invalid',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'ServerError',
            'errorMessage' => 'internal server error',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"StatusCode\\": 200,\\n  \\"Result\\": true,\\n  \\"Message\\": \\"success\\",\\n  \\"Extentions\\": {\\n    \\"key\\": \\"\\"\\n  },\\n  \\"RequestId\\": \\"46C53AEB-B19C-5C42-B32E-A726979C126F\\"\\n}","type":"json"}]',
      'title' => '酒店信息修改',
    ),
    'RemoveHotel' => 
    array (
      'summary' => '删除酒店信息。',
      'path' => '/v1.0/ip/removeHotel',
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
          'AliGenie_Auth_SPI' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
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
          'name' => 'TbOpenId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '淘宝开放id',
            'description' => '淘宝开放id',
            'type' => 'string',
            'required' => true,
            'example' => 'AAEVK***UE3d3Z2ETwh',
          ),
        ),
        1 => 
        array (
          'name' => 'AppKey',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => 'appkey',
            'type' => 'string',
            'required' => true,
            'example' => '30193305',
          ),
        ),
        2 => 
        array (
          'name' => 'HotelId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '酒店id',
            'description' => '酒店id',
            'type' => 'string',
            'required' => true,
            'example' => 'e6dd44fd16084db8a60d69fd625d9f0f',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Result<Boolean>',
            'description' => 'Result<Boolean>',
            'type' => 'object',
            'properties' => 
            array (
              'StatusCode' => 
              array (
                'title' => '调用返回码，除约定的SUCCESS_CODE外，其余由服务提供者自定义',
                'description' => '调用返回码，除约定的SUCCESS_CODE外，其余由服务提供者自定义',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Result' => 
              array (
                'title' => '服务的实际返回结果',
                'description' => '服务的实际返回结果',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Message' => 
              array (
                'title' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                'description' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                'type' => 'string',
                'example' => 'success',
              ),
              'Extentions' => 
              array (
                'title' => '扩展字段',
                'description' => '扩展字段',
                'type' => 'object',
                'additionalProperties' => 
                array (
                  'type' => 'any',
                  'description' => '扩展信息',
                  'example' => '{}',
                ),
              ),
              'RequestId' => 
              array (
                'description' => 'The ID of the request.
',
                'type' => 'string',
                'example' => '73C67BD9-175A-1324-8202-9FAABBB3E6FA',
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
            'errorCode' => 'InvalidParameter',
            'errorMessage' => 'The request parameter is invalid',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'ServerError',
            'errorMessage' => 'internal server error',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"StatusCode\\": 200,\\n  \\"Result\\": true,\\n  \\"Message\\": \\"success\\",\\n  \\"Extentions\\": {\\n    \\"key\\": \\"{}\\"\\n  },\\n  \\"RequestId\\": \\"73C67BD9-175A-1324-8202-9FAABBB3E6FA\\"\\n}","type":"json"}]',
      'title' => '删除酒店',
      'description' => '删除酒店信息。',
    ),
    'ListHotelInfo' => 
    array (
      'summary' => '查询酒店列表信息，例如酒店名称、地址、授权账号等。',
      'path' => '/v1.0/ip/listHotelInfo',
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
          'AliGenie_Auth_SPI' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
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
            'title' => 'Result<List<HotelInfoResponse>>',
            'description' => 'Result<List<HotelInfoResponse>>',
            'type' => 'object',
            'properties' => 
            array (
              'StatusCode' => 
              array (
                'title' => '调用返回码，除约定的SUCCESS_CODE外，其余由服务提供者自定义',
                'description' => '调用返回码，除约定的SUCCESS_CODE外，其余由服务提供者自定义',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Result' => 
              array (
                'title' => '服务的实际返回结果',
                'description' => '服务的实际返回结果',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'HotelId' => 
                    array (
                      'description' => '酒店id',
                      'type' => 'string',
                      'example' => 'cf2446fc9d144c85aaee4f9ae20a96e7',
                    ),
                    'HotelName' => 
                    array (
                      'description' => '酒店名称',
                      'type' => 'string',
                      'example' => '酒店',
                    ),
                    'HotelAddress' => 
                    array (
                      'description' => '酒店地址',
                      'type' => 'string',
                      'example' => '浙江身杭州市',
                    ),
                    'AuthAccount' => 
                    array (
                      'type' => 'array',
                      'items' => 
                      array (
                        'type' => 'object',
                        'properties' => 
                        array (
                          'UserName' => 
                          array (
                            'title' => '授权子账号的账号名称',
                            'description' => '用户名称',
                            'type' => 'string',
                            'example' => 'leetest',
                          ),
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'Message' => 
              array (
                'title' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                'description' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                'type' => 'string',
              ),
              'Extentions' => 
              array (
                'title' => '扩展字段',
                'description' => '扩展字段',
                'type' => 'object',
                'additionalProperties' => 
                array (
                  'type' => 'any',
                ),
              ),
              'RequestId' => 
              array (
                'type' => 'string',
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
            'errorCode' => 'InvalidParameter',
            'errorMessage' => 'The request parameter is invalid',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'ServerError',
            'errorMessage' => 'internal server error',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"StatusCode\\": 200,\\n  \\"Result\\": [\\n    {\\n      \\"HotelId\\": \\"cf2446fc9d144c85aaee4f9ae20a96e7\\",\\n      \\"HotelName\\": \\"酒店\\",\\n      \\"HotelAddress\\": \\"浙江身杭州市\\",\\n      \\"AuthAccount\\": [\\n        {\\n          \\"UserName\\": \\"leetest\\"\\n        }\\n      ]\\n    }\\n  ],\\n  \\"Message\\": \\"\\",\\n  \\"Extentions\\": {\\n    \\"key\\": \\"\\"\\n  },\\n  \\"RequestId\\": \\"\\"\\n}","type":"json"}]',
      'title' => '查询酒店列表',
      'description' => '查询酒店列表信息，例如酒店名称、地址、授权账号等',
    ),
    'ListHotels' => 
    array (
      'summary' => '获取酒店列表（待审批/已拒绝/已通过），可细化至单个酒店',
      'path' => '/v1.0/ip/listHotels',
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
          'AliGenie_Auth_SPI' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
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
          'name' => 'Status',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '审批状态（0：待审批、1：通过、2：拒绝）',
            'description' => '审批状态（0：待审批、1：通过、2：拒绝）',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'docRequired' => true,
            'example' => '1',
          ),
        ),
        1 => 
        array (
          'name' => 'Page',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'title' => '分页参数',
            'description' => '分页参数',
            'type' => 'object',
            'properties' => 
            array (
              'PageNumber' => 
              array (
                'title' => '第几页',
                'description' => '第几页',
                'type' => 'integer',
                'format' => 'int32',
                'required' => true,
                'docRequired' => true,
                'example' => '1',
              ),
              'PageSize' => 
              array (
                'title' => '每页多少条数据',
                'description' => '每页多少条数据',
                'type' => 'integer',
                'format' => 'int32',
                'required' => true,
                'docRequired' => true,
                'example' => '10',
              ),
            ),
            'required' => true,
          ),
        ),
        2 => 
        array (
          'name' => 'HotelRequest',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '酒店相关信息',
            'type' => 'object',
            'properties' => 
            array (
              'HotelId' => 
              array (
                'description' => ' 酒店id',
                'type' => 'string',
                'required' => false,
                'example' => 'e02e9c59f35845979418df2ab409a4c4',
              ),
            ),
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
            'title' => 'Result<HotelListResp>',
            'description' => 'Result<HotelListResp>',
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'title' => '状态码',
                'description' => '状态码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Result' => 
              array (
                'title' => '服务的实际返回结果',
                'description' => '服务的实际返回结果',
                'type' => 'object',
                'properties' => 
                array (
                  'Page' => 
                  array (
                    'title' => '分页结果',
                    'description' => '分页结果',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'PageNumber' => 
                      array (
                        'title' => '第几页',
                        'description' => '第几页',
                        'type' => 'integer',
                        'format' => 'int32',
                        'example' => '1',
                      ),
                      'PageSize' => 
                      array (
                        'title' => '每页多少条',
                        'description' => '每页多少条',
                        'type' => 'integer',
                        'format' => 'int32',
                        'example' => '10',
                      ),
                      'Total' => 
                      array (
                        'title' => '共多少条数据',
                        'description' => '共多少条数据',
                        'type' => 'integer',
                        'format' => 'int32',
                        'example' => '23',
                      ),
                      'TotalPage' => 
                      array (
                        'title' => '共多少页',
                        'description' => '共多少页',
                        'type' => 'integer',
                        'format' => 'int32',
                        'example' => '3',
                      ),
                      'HasNext' => 
                      array (
                        'title' => '是否有下一页',
                        'description' => '是否有下一页',
                        'type' => 'boolean',
                        'example' => 'True',
                      ),
                    ),
                  ),
                  'HotelInfoList' => 
                  array (
                    'description' => '酒店信息列表',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '酒店信息列表',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'HotelId' => 
                        array (
                          'title' => '酒店ID',
                          'description' => '酒店ID',
                          'type' => 'string',
                          'example' => '73ab1b03018d4da69b5bef17095f569b',
                        ),
                        'HotelName' => 
                        array (
                          'title' => '酒店名称',
                          'description' => '酒店名称',
                          'type' => 'string',
                          'example' => '酒店名称',
                        ),
                        'CreateTime' => 
                        array (
                          'title' => '创建时间（long类型）',
                          'description' => '创建时间（long类型）',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1654568802000',
                        ),
                        'HotelAddress' => 
                        array (
                          'title' => '酒店地址',
                          'description' => '酒店地址',
                          'type' => 'string',
                          'example' => '酒店地址',
                        ),
                        'PhoneNumber' => 
                        array (
                          'title' => '联系方式',
                          'description' => '联系方式',
                          'type' => 'string',
                          'example' => '13312340987',
                        ),
                        'IndustryType' => 
                        array (
                          'title' => '行业类型',
                          'description' => '行业类型',
                          'type' => 'string',
                          'example' => '酒店',
                        ),
                        'RoomNum' => 
                        array (
                          'title' => '房间数',
                          'description' => '房间数',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '12',
                        ),
                        'RelatedProductName' => 
                        array (
                          'title' => '关联产品名称',
                          'description' => '关联产品名称',
                          'type' => 'string',
                          'example' => '测试产品',
                        ),
                        'AccountNames' => 
                        array (
                          'title' => '淘宝账号',
                          'description' => '淘宝账号',
                          'type' => 'array',
                          'items' => 
                          array (
                            'title' => '',
                            'description' => '账号名称',
                            'type' => 'string',
                            'example' => 'testAccount',
                          ),
                        ),
                        'Status' => 
                        array (
                          'title' => '状态（0：待审批、1：通过、2：拒绝）',
                          'description' => '状态（0：待审批、1：通过、2：拒绝）',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '1',
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'Message' => 
              array (
                'title' => '附加信息',
                'description' => '附加信息',
                'type' => 'string',
                'example' => 'success',
              ),
              'RequestId' => 
              array (
                'title' => 'RequestId',
                'description' => 'RequestId',
                'type' => 'string',
                'example' => '85789C64-3644-56C0-9C0F-D2E0ECC227EF',
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
            'errorCode' => 'InvalidParameter',
            'errorMessage' => 'The request parameter is invalid',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'ServerError',
            'errorMessage' => 'internal server error',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": 200,\\n  \\"Result\\": {\\n    \\"Page\\": {\\n      \\"PageNumber\\": 1,\\n      \\"PageSize\\": 10,\\n      \\"Total\\": 23,\\n      \\"TotalPage\\": 3,\\n      \\"HasNext\\": true\\n    },\\n    \\"HotelInfoList\\": [\\n      {\\n        \\"HotelId\\": \\"73ab1b03018d4da69b5bef17095f569b\\",\\n        \\"HotelName\\": \\"酒店名称\\",\\n        \\"CreateTime\\": 1654568802000,\\n        \\"HotelAddress\\": \\"酒店地址\\",\\n        \\"PhoneNumber\\": \\"13312340987\\",\\n        \\"IndustryType\\": \\"酒店\\",\\n        \\"RoomNum\\": 12,\\n        \\"RelatedProductName\\": \\"测试产品\\",\\n        \\"AccountNames\\": [\\n          \\"testAccount\\"\\n        ],\\n        \\"Status\\": 1\\n      }\\n    ]\\n  },\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"85789C64-3644-56C0-9C0F-D2E0ECC227EF\\"\\n}","type":"json"}]',
      'title' => '酒店列表',
    ),
    'AuditHotel' => 
    array (
      'summary' => '酒店审批。',
      'path' => '/v1.0/ip/auditHotel',
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
          'AliGenie_Auth_SPI' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
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
          'name' => 'AuditHotelReq',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'title' => '审批request',
            'description' => '审批request',
            'type' => 'object',
            'properties' => 
            array (
              'AuditOpinion' => 
              array (
                'title' => '审批意见',
                'description' => '审批意见',
                'type' => 'string',
                'required' => false,
                'example' => '同意',
              ),
              'Status' => 
              array (
                'title' => '审批状态（1：审核通过 2：审核不通过）',
                'description' => '审批状态（1：审核通过 2：审核不通过）',
                'type' => 'integer',
                'format' => 'int32',
                'required' => true,
                'docRequired' => true,
                'example' => '1',
              ),
              'HotelId' => 
              array (
                'title' => '酒店ID',
                'description' => '酒店ID',
                'type' => 'string',
                'required' => true,
                'docRequired' => true,
                'example' => '80d84ea8ed9e422fbad52715c8fc56f1',
              ),
            ),
            'required' => true,
            'docRequired' => true,
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Result<Boolean>',
            'description' => 'Result<Boolean>',
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'title' => '状态码',
                'description' => '状态码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Result' => 
              array (
                'title' => '服务的实际返回结果',
                'description' => '服务的实际返回结果',
                'type' => 'boolean',
              ),
              'Message' => 
              array (
                'title' => '附加信息',
                'description' => '附加信息',
                'type' => 'string',
              ),
              'RequestId' => 
              array (
                'title' => 'RequestId',
                'description' => 'RequestId',
                'type' => 'string',
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
            'errorCode' => 'InvalidParameter',
            'errorMessage' => 'The request parameter is invalid',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'ServerError',
            'errorMessage' => 'internal server error',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": 200,\\n  \\"Result\\": true,\\n  \\"Message\\": \\"\\",\\n  \\"RequestId\\": \\"\\"\\n}","type":"json"}]',
      'title' => '酒店审批',
    ),
    'ListHotelRooms' => 
    array (
      'summary' => '获取酒店房间，可细化至房间号',
      'path' => '/v1.0/ip/listHotelRooms',
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
          'AliGenie_Auth_SPI' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
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
          'name' => 'HotelId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '酒店ID',
            'description' => '酒店ID',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'e6dd44fd16084db8a60d69fd625d9f0f',
          ),
        ),
        1 => 
        array (
          'name' => 'HotelAdminRoom',
          'in' => 'formData',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '查询的附加信息',
            'type' => 'object',
            'properties' => 
            array (
              'RoomNo' => 
              array (
                'description' => '房间号',
                'type' => 'string',
                'required' => false,
                'example' => '1001',
              ),
            ),
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
            'title' => 'Result<List<HotelRoomResp>>',
            'description' => 'Result<List<HotelRoomResp>>',
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'title' => '状态码',
                'description' => '状态码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Result' => 
              array (
                'title' => '服务的实际返回结果',
                'description' => '服务的实际返回结果',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '服务返回的房间信息',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'HotelId' => 
                    array (
                      'title' => '酒店ID',
                      'description' => '酒店ID',
                      'type' => 'string',
                      'example' => 'e6dd44fd16084db8a60d69fd625d9f0f',
                    ),
                    'RoomNo' => 
                    array (
                      'title' => '房间号',
                      'description' => '房间号',
                      'type' => 'string',
                      'example' => '102',
                    ),
                  ),
                ),
              ),
              'Message' => 
              array (
                'title' => '附加信息',
                'description' => '附加信息',
                'type' => 'string',
                'example' => 'success',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => 'D75D971E-33E8-1C48-A4B7-5FA6CC386146',
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
            'errorCode' => 'InvalidParameter',
            'errorMessage' => 'The request parameter is invalid',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": 200,\\n  \\"Result\\": [\\n    {\\n      \\"HotelId\\": \\"e6dd44fd16084db8a60d69fd625d9f0f\\",\\n      \\"RoomNo\\": \\"102\\"\\n    }\\n  ],\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"D75D971E-33E8-1C48-A4B7-5FA6CC386146\\"\\n}","errorExample":""},{"type":"xml","example":"<ListHotelRoomsResponse>\\n    <Code>200</Code>\\n    <Result>\\n        <HotelId>e6dd44fd16084db8a60d69fd625d9f0f</HotelId>\\n        <RoomNo>102</RoomNo>\\n    </Result>\\n    <Message>success</Message>\\n    <RequestId>D75D971E-33E8-1C48-A4B7-5FA6CC386146</RequestId>\\n</ListHotelRoomsResponse>","errorExample":""}]',
      'title' => '查询酒店房间列表',
      'requestParamsDescription' => '如果要查询某个房间，则输入房间号
如果查询酒店的所有房间，不输入房间号',
      'responseParamsDescription' => '如果返回的结果为空，则说明没有本次想要查询的房间号',
      'extraInfo' => '如果出错请检查传入的参数是否正确',
    ),
    'BatchAddHotelRoom' => 
    array (
      'summary' => '批量创建酒店房间',
      'path' => '/v1.0/ip/batchAddHotelRoom',
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
          'AliGenie_Auth_SPI' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
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
          'name' => 'HotelId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '酒店ID',
            'description' => '酒店ID',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'e6dd44fd16084db8a60d69fd625d9f0f',
          ),
        ),
        1 => 
        array (
          'name' => 'RoomNoList',
          'in' => 'formData',
          'style' => 'simple',
          'schema' => 
          array (
            'title' => '房间号List',
            'description' => '房间号List（一次调用最多传入10个，否则会拦截）',
            'type' => 'array',
            'items' => 
            array (
              'title' => '房间号List',
              'description' => '房间号List（一次调用最多传入10个，否则会拦截）',
              'type' => 'string',
              'required' => true,
              'docRequired' => true,
              'example' => '["101","102"]',
            ),
            'required' => true,
            'docRequired' => true,
            'minItems' => 1,
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Result<Boolean>',
            'description' => 'Result<Boolean>',
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'title' => '状态码',
                'description' => '状态码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Result' => 
              array (
                'title' => '服务的实际返回结果',
                'description' => '服务的实际返回结果',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Message' => 
              array (
                'title' => '附加信息',
                'description' => '附加信息',
                'type' => 'string',
                'example' => 'success',
              ),
              'RequestId' => 
              array (
                'description' => '请求id',
                'type' => 'string',
                'example' => 'FAFCD152-4791-5F2F-B0BE-2DC06FD4F05B',
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
            'errorCode' => 'InvalidParameter',
            'errorMessage' => 'The request parameter is invalid',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": 200,\\n  \\"Result\\": true,\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"FAFCD152-4791-5F2F-B0BE-2DC06FD4F05B\\"\\n}","type":"json"}]',
      'title' => '批量创建酒店房间',
    ),
    'BatchDeleteHotelRoom' => 
    array (
      'summary' => '批量删除酒店房间',
      'path' => '/v1.0/ip/batchDeleteHotelRoom',
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
          'AliGenie_Auth_SPI' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
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
          'name' => 'HotelId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '酒店ID',
            'description' => '酒店ID',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'e6dd44fd16084db8a60d69fd625d9f0f',
          ),
        ),
        1 => 
        array (
          'name' => 'RoomNoList',
          'in' => 'formData',
          'style' => 'simple',
          'schema' => 
          array (
            'title' => '房间号List',
            'description' => '房间号List',
            'type' => 'array',
            'items' => 
            array (
              'title' => '房间号List',
              'description' => '房间号List',
              'type' => 'string',
              'required' => true,
              'docRequired' => true,
              'example' => '["1211","1212"]',
            ),
            'required' => true,
            'docRequired' => true,
            'minItems' => 1,
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Result<Boolean>',
            'description' => 'Result<Boolean>',
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'title' => '状态码',
                'description' => '状态码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Result' => 
              array (
                'title' => '服务的实际返回结果',
                'description' => '服务的实际返回结果',
                'type' => 'boolean',
              ),
              'Message' => 
              array (
                'title' => '附加信息',
                'description' => '附加信息',
                'type' => 'string',
                'example' => 'success',
              ),
              'RequestId' => 
              array (
                'type' => 'string',
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
            'errorCode' => 'InvalidParameter',
            'errorMessage' => 'The request parameter is invalid',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": 200,\\n  \\"Result\\": true,\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"\\"\\n}","type":"json"}]',
      'title' => '批量删除酒店房间',
    ),
    'CheckoutWithAK' => 
    array (
      'summary' => '退房，清理猫精设备上的定时类服务，例如闹钟、提醒，以及订单信息',
      'path' => '/v1.0/ip/checkoutWithAK',
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
          'AliGenie_Auth_SPI' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'deprecated' => false,
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'HotelId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '酒店id',
            'description' => '酒店id',
            'type' => 'string',
            'required' => true,
            'example' => 'a7***83',
          ),
        ),
        1 => 
        array (
          'name' => 'RoomNo',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '房间号',
            'description' => '房间号',
            'type' => 'string',
            'required' => true,
            'example' => '1211',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Result<Boolean>',
            'description' => 'Result<Boolean>',
            'type' => 'object',
            'properties' => 
            array (
              'StatusCode' => 
              array (
                'title' => '调用返回码，除约定的SUCCESS_CODE外，其余由服务提供者自定义',
                'description' => '调用返回码，200标识成功',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Result' => 
              array (
                'title' => '服务的实际返回结果',
                'description' => '服务的实际返回结果',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Message' => 
              array (
                'title' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                'description' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                'type' => 'string',
                'example' => 'success',
              ),
              'RequestId' => 
              array (
                'description' => '请求id',
                'type' => 'string',
                'example' => '73C6***E6FA',
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
            'errorCode' => 'InvalidParameter',
            'errorMessage' => 'The request parameter is invalid',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'ServerError',
            'errorMessage' => 'internal server error',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"StatusCode\\": 200,\\n  \\"Result\\": true,\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"73C6***E6FA\\"\\n}","type":"json"}]',
      'title' => '退房',
    ),
    'QueryHotelRoomDetail' => 
    array (
      'summary' => '房间详情查询，查询包含酒店信息、客控信息、猫精设备信息、客需信息等',
      'path' => '/v1.0/ip/queryHotelRoomDetail',
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
          'AliGenie_Auth_SPI' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'list',
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Mac',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '设备mac地址
注：在mac uuid sn全都输入的情况下 按照输入正确的内容查询 若全输入都是正确的 则 按照 uuid > mac > sn 优先级查询',
            'description' => '设备mac地址
注：若在mac uuid sn全都输入的情况下 按照输入正确的内容查询 若全输入都是正确的 则 按照 uuid > mac > sn 优先级查询
传入mac uuid sn其中一个 则酒店id和房间号可不传',
            'type' => 'string',
            'required' => false,
            'example' => '38:c8:**:**:f5:22',
          ),
        ),
        1 => 
        array (
          'name' => 'Uuid',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '设备uuid，可在App中查看
注：在mac uuid sn全都输入的情况下 按照输入正确的内容查询 若全输入都是正确的 则 按照 uuid > mac > sn 优先级查询',
            'description' => '设备uuid，可在App中查看
注：若在mac uuid sn全都输入的情况下 按照输入正确的内容查询 若全输入都是正确的 则 按照 uuid > mac > sn 优先级查询
传入mac uuid sn其中一个 则酒店id和房间号可不传',
            'type' => 'string',
            'required' => false,
            'example' => '588***96j5WU',
          ),
        ),
        2 => 
        array (
          'name' => 'HotelId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '酒店id
注：传入设备mac/sn/uuid 可不传酒店id 若都未传 则 酒店id必传',
            'description' => '酒店id
注：使用酒店id 房间号查询 查询优先级低于传入设备sn mac uuid，若sn mac uuid都未传 则酒店id必传',
            'type' => 'string',
            'required' => false,
            'example' => '520a0c0***5eb',
          ),
        ),
        3 => 
        array (
          'name' => 'RoomNo',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '房间号
注：传入设备mac/sn/uuid 可不传房间号 若都未传 则 房间号必传',
            'description' => '房间号
注：使用酒店id 房间号查询 查询优先级低于传入设备sn mac uuid，若sn mac uuid都未传 则房间号必传',
            'type' => 'string',
            'required' => false,
            'example' => '1211',
          ),
        ),
        4 => 
        array (
          'name' => 'Sn',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '设备sn信息
在mac uuid sn全都输入的情况下 按照输入正确的内容查询 若全输入都是正确的 则 按照 uuid > mac > sn 优先级查询',
            'description' => '设备sn信息
注：若在mac uuid sn全都输入的情况下 按照输入正确的内容查询 若全输入都是正确的 则 按照 uuid > mac > sn 优先级查询
传入mac uuid sn其中一个 则酒店id和房间号可不传',
            'type' => 'string',
            'required' => false,
            'example' => '280**28',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Result<HotelRoomDetail>',
            'description' => 'Result<HotelRoomDetail>',
            'type' => 'object',
            'properties' => 
            array (
              'StatusCode' => 
              array (
                'title' => '调用返回码，除约定的SUCCESS_CODE外，其余由服务提供者自定义',
                'description' => '调用返回码，除约定的SUCCESS_CODE外，其余由服务提供者自定义',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Result' => 
              array (
                'title' => '服务的实际返回结果',
                'description' => '服务的实际返回结果',
                'type' => 'object',
                'properties' => 
                array (
                  'HotelId' => 
                  array (
                    'title' => '酒店id',
                    'description' => '酒店id',
                    'type' => 'string',
                    'example' => 'a7***83',
                  ),
                  'HotelName' => 
                  array (
                    'title' => '酒店名称',
                    'description' => '酒店名称',
                    'type' => 'string',
                    'example' => 'xx酒店',
                  ),
                  'CreatorAccountName' => 
                  array (
                    'title' => '酒店创建者账号名称',
                    'description' => '酒店创建者账号名称',
                    'type' => 'string',
                    'example' => 'xx淘宝昵称',
                  ),
                  'ConnectType' => 
                  array (
                    'title' => '酒店链接类型，rcu/mesh',
                    'description' => '酒店连接类型，rcu/mesh',
                    'type' => 'string',
                    'example' => 'rcu',
                  ),
                  'RoomNo' => 
                  array (
                    'title' => '房间号',
                    'description' => '房间号',
                    'type' => 'string',
                    'example' => '2001',
                  ),
                  'RoomControlInfo' => 
                  array (
                    'title' => '客控信息',
                    'description' => '客控信息',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'TemplateId' => 
                      array (
                        'title' => '房型id',
                        'description' => '房型id',
                        'type' => 'integer',
                        'format' => 'int64',
                        'example' => '1170',
                      ),
                      'TemplateName' => 
                      array (
                        'title' => '房型名称',
                        'description' => '房型名称',
                        'type' => 'string',
                        'example' => '大床房',
                      ),
                      'AppId' => 
                      array (
                        'title' => '云云对接应用id',
                        'description' => '云云对接应用id',
                        'type' => 'integer',
                        'format' => 'int64',
                        'example' => '78',
                      ),
                      'AppName' => 
                      array (
                        'title' => '云云对接应用名称',
                        'description' => '云云对接应用名称',
                        'type' => 'string',
                        'example' => 'app',
                      ),
                      'RcuUrl' => 
                      array (
                        'title' => 'rcu云云调用链接',
                        'description' => 'rcu云云调用链接',
                        'type' => 'string',
                        'example' => 'http://www.xxx.com',
                      ),
                      'DeviceInfos' => 
                      array (
                        'title' => '客控设备信息列表',
                        'description' => '客控设备信息列表',
                        'type' => 'array',
                        'items' => 
                        array (
                          'title' => '客控设备信息',
                          'description' => '客控设备信息',
                          'type' => 'object',
                          'properties' => 
                          array (
                            'DeviceName' => 
                            array (
                              'title' => '设备别名',
                              'description' => '设备别名',
                              'type' => 'string',
                              'example' => '阅读灯',
                            ),
                            'CategoryId' => 
                            array (
                              'title' => '品类id',
                              'description' => '品类id',
                              'type' => 'integer',
                              'format' => 'int64',
                              'example' => '3',
                            ),
                            'CategoryEnName' => 
                            array (
                              'title' => '品类英文名',
                              'description' => '品类英文名',
                              'type' => 'string',
                              'example' => 'light',
                            ),
                            'CategoryName' => 
                            array (
                              'title' => '品类中文名',
                              'description' => '品类中文名',
                              'type' => 'string',
                              'example' => '灯',
                            ),
                            'LocationId' => 
                            array (
                              'title' => '位置id',
                              'description' => '位置id',
                              'type' => 'integer',
                              'format' => 'int64',
                              'example' => '1',
                            ),
                            'LocationEnName' => 
                            array (
                              'title' => '位置英文名',
                              'description' => '位置英文名',
                              'type' => 'string',
                              'example' => 'room',
                            ),
                            'LocationName' => 
                            array (
                              'title' => '位置中文名',
                              'description' => '位置中文名',
                              'type' => 'string',
                              'example' => '房间',
                            ),
                            'DeviceId' => 
                            array (
                              'title' => '设备唯一编号',
                              'description' => '设备唯一编号',
                              'type' => 'string',
                              'example' => 'readLight',
                            ),
                            'DeviceConnectType' => 
                            array (
                              'title' => '设备链接类型，rcu/mesh/红外',
                              'description' => '设备链接类型：
- rcu：云云对接
- mesh：本地直连
- infrared：红外对接',
                              'type' => 'string',
                              'example' => 'rcu',
                            ),
                            'ProductKey' => 
                            array (
                              'title' => 'mesh产品pk',
                              'description' => 'mesh产品pk',
                              'type' => 'string',
                              'example' => 'a1ueWGP6W2L',
                            ),
                            'DeviceCount' => 
                            array (
                              'title' => '设备数量',
                              'description' => '设备数量',
                              'type' => 'integer',
                              'format' => 'int32',
                              'example' => '4',
                            ),
                          ),
                        ),
                      ),
                    ),
                  ),
                  'AuthAccounts' => 
                  array (
                    'title' => '授权账号列表',
                    'description' => '授权账号列表',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'AccountName' => 
                        array (
                          'title' => '账号名称',
                          'description' => '账号名称',
                          'type' => 'string',
                          'example' => 'xx淘宝昵称',
                        ),
                        'AuthTime' => 
                        array (
                          'title' => '授权时间',
                          'description' => '授权时间',
                          'type' => 'string',
                          'example' => '2023-01-01 12:00:00',
                        ),
                      ),
                    ),
                  ),
                  'DeviceInfos' => 
                  array (
                    'title' => '猫精设备列表',
                    'description' => '猫精设备列表',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Uuid' => 
                        array (
                          'title' => '猫精设备唯一标识uuid',
                          'description' => '猫精设备唯一标识uuid',
                          'type' => 'string',
                          'example' => '41c95c18a0a643bcb58edf438877def5',
                        ),
                        'DeviceName' => 
                        array (
                          'title' => '设备名称',
                          'description' => '设备名称',
                          'type' => 'string',
                          'example' => 'IN糖酒店版',
                        ),
                        'OnlineStatus' => 
                        array (
                          'title' => '设备在线状态，1：在线，0：离线',
                          'description' => '设备在线状态，1：在线，0：离线',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '1',
                        ),
                        'Mac' => 
                        array (
                          'title' => '设备mac地址',
                          'description' => '设备mac地址',
                          'type' => 'string',
                          'example' => 'fa:03:23:58:c3:00',
                        ),
                        'Sn' => 
                        array (
                          'title' => '设备sn号',
                          'description' => '设备sn号',
                          'type' => 'string',
                          'example' => 'sag42dlz4qf',
                        ),
                        'FirmwareVersion' => 
                        array (
                          'title' => '设备固件版本',
                          'description' => '设备固件版本',
                          'type' => 'string',
                          'example' => '6.1.8-RS-20230425.1806',
                        ),
                        'ActiveTime' => 
                        array (
                          'title' => '设备激活时间',
                          'description' => '设备激活时间',
                          'type' => 'string',
                          'example' => '2023-01-01 12:00:00',
                        ),
                      ),
                    ),
                  ),
                  'RoomServiceInfo' => 
                  array (
                    'title' => '客需服务信息',
                    'description' => '客需服务信息',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'RoomServiceCnt' => 
                      array (
                        'title' => '已配置服务数量，如洗衣服务',
                        'description' => '已配置服务数量，如洗衣服务',
                        'type' => 'integer',
                        'format' => 'int32',
                        'example' => '12',
                      ),
                      'RepairServiceCnt' => 
                      array (
                        'title' => '已配置维修数量，如电视坏了',
                        'description' => '已配置维修数量，如电视坏了',
                        'type' => 'integer',
                        'format' => 'int32',
                        'example' => '10',
                      ),
                      'GoodsServiceCnt' => 
                      array (
                        'title' => '已配置物品数量，如我要包纸巾',
                        'description' => '已配置物品数量，如我要包纸巾',
                        'type' => 'integer',
                        'format' => 'int32',
                        'example' => '10',
                      ),
                      'BookServiceCnt' => 
                      array (
                        'title' => '已配置预定数量，如预定个spa',
                        'description' => '已配置预定数量，如预定个spa',
                        'type' => 'integer',
                        'format' => 'int32',
                        'example' => '0',
                      ),
                    ),
                  ),
                  'OtherService' => 
                  array (
                    'title' => '其他信息',
                    'description' => '其他信息',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'OpenCall' => 
                      array (
                        'title' => '是否开通通话',
                        'description' => '是否开通通话',
                        'type' => 'boolean',
                        'example' => 'false',
                      ),
                      'UnhandleTickets' => 
                      array (
                        'title' => '剩余未处理工单数',
                        'description' => '剩余未处理工单数',
                        'type' => 'integer',
                        'format' => 'int32',
                        'example' => '0',
                      ),
                    ),
                  ),
                ),
              ),
              'Message' => 
              array (
                'title' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                'description' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                'type' => 'string',
                'example' => 'success',
              ),
              'RequestId' => 
              array (
                'title' => '请求id',
                'description' => '请求id',
                'type' => 'string',
                'example' => '0EC7*726E',
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
            'errorCode' => 'InvalidParameter',
            'errorMessage' => 'The request parameter is invalid',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'ServerError',
            'errorMessage' => 'internal server error',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"StatusCode\\": 200,\\n  \\"Result\\": {\\n    \\"HotelId\\": \\"a7***83\\",\\n    \\"HotelName\\": \\"xx酒店\\",\\n    \\"CreatorAccountName\\": \\"xx淘宝昵称\\",\\n    \\"ConnectType\\": \\"rcu\\",\\n    \\"RoomNo\\": \\"2001\\",\\n    \\"RoomControlInfo\\": {\\n      \\"TemplateId\\": 1170,\\n      \\"TemplateName\\": \\"大床房\\",\\n      \\"AppId\\": 78,\\n      \\"AppName\\": \\"app\\",\\n      \\"RcuUrl\\": \\"http://www.xxx.com\\",\\n      \\"DeviceInfos\\": [\\n        {\\n          \\"DeviceName\\": \\"阅读灯\\",\\n          \\"CategoryId\\": 3,\\n          \\"CategoryEnName\\": \\"light\\",\\n          \\"CategoryName\\": \\"灯\\",\\n          \\"LocationId\\": 1,\\n          \\"LocationEnName\\": \\"room\\",\\n          \\"LocationName\\": \\"房间\\",\\n          \\"DeviceId\\": \\"readLight\\",\\n          \\"DeviceConnectType\\": \\"rcu\\",\\n          \\"ProductKey\\": \\"a1ueWGP6W2L\\",\\n          \\"DeviceCount\\": 4\\n        }\\n      ]\\n    },\\n    \\"AuthAccounts\\": [\\n      {\\n        \\"AccountName\\": \\"xx淘宝昵称\\",\\n        \\"AuthTime\\": \\"2023-01-01 12:00:00\\"\\n      }\\n    ],\\n    \\"DeviceInfos\\": [\\n      {\\n        \\"Uuid\\": \\"41c95c18a0a643bcb58edf438877def5\\",\\n        \\"DeviceName\\": \\"IN糖酒店版\\",\\n        \\"OnlineStatus\\": 1,\\n        \\"Mac\\": \\"fa:03:23:58:c3:00\\",\\n        \\"Sn\\": \\"sag42dlz4qf\\",\\n        \\"FirmwareVersion\\": \\"6.1.8-RS-20230425.1806\\",\\n        \\"ActiveTime\\": \\"2023-01-01 12:00:00\\"\\n      }\\n    ],\\n    \\"RoomServiceInfo\\": {\\n      \\"RoomServiceCnt\\": 12,\\n      \\"RepairServiceCnt\\": 10,\\n      \\"GoodsServiceCnt\\": 10,\\n      \\"BookServiceCnt\\": 0\\n    },\\n    \\"OtherService\\": {\\n      \\"OpenCall\\": false,\\n      \\"UnhandleTickets\\": 0\\n    }\\n  },\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"0EC7*726E\\"\\n}","type":"json"}]',
      'title' => '房间详情查询',
      'description' => '提供几类查询方式：
- 酒店id+房间号：查询酒店相关信息及房间下所有猫精设备信息
- 猫精设备uuid：查询单台猫精设备信息及该设备对应的酒店相关信息
- 猫精设备mac：查询单台猫精设备信息及该设备对应的酒店相关信息
- 猫精设备sn：查询单台猫精设备信息及该设备对应的酒店相关信息',
    ),
    'ListSceneCategory' => 
    array (
      'summary' => '酒店场景分类',
      'path' => '/v1.0/ip/listSceneCategory',
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
          'AliGenie_Auth_SPI' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
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
          'name' => 'HotelId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => 'hotelId',
            'description' => 'hotelId',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '80d84ea8ed9e422fbad52715c8fc56f1',
          ),
        ),
        1 => 
        array (
          'name' => 'Type',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '场景分类类型（物品GOODS/服务SERVICE/维修REPAIR）',
            'description' => '场景分类类型（物品GOODS/服务SERVICE/维修REPAIR）',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'REPAIR',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Result<List<String>>',
            'description' => 'Result<List<String>>',
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'title' => '状态码',
                'description' => '状态码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Result' => 
              array (
                'title' => '服务的实际返回结果',
                'description' => '服务的实际返回结果',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '分类名称',
                  'type' => 'string',
                  'example' => '[     "电器类",     "家具类",     "卫生间类"   ]',
                ),
              ),
              'Message' => 
              array (
                'title' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                'description' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                'type' => 'string',
                'example' => 'success',
              ),
              'RequestId' => 
              array (
                'title' => 'RequestId',
                'description' => 'RequestId',
                'type' => 'string',
                'example' => '0EC7*726E',
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
            'errorCode' => 'InvalidParameter',
            'errorMessage' => 'The request parameter is invalid',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'ServerError',
            'errorMessage' => 'internal server error',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": 200,\\n  \\"Result\\": [\\n    \\"[     \\\\\\"电器类\\\\\\",     \\\\\\"家具类\\\\\\",     \\\\\\"卫生间类\\\\\\"   ]\\"\\n  ],\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"0EC7*726E\\"\\n}","type":"json"}]',
      'title' => '酒店场景服务分类',
    ),
    'ListDialogueTemplate' => 
    array (
      'summary' => '酒店场景对话模板',
      'path' => '/v1.0/ip/listDialogueTemplate',
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
          'AliGenie_Auth_SPI' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
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
          'name' => 'HotelId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => 'hotelId',
            'description' => 'hotelId',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '80d84ea8ed9e422fbad52715c8fc56f1',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Result<List<DialogueTemplate>>',
            'description' => 'Result<List<DialogueTemplate>>',
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'title' => '状态码',
                'description' => '状态码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Result' => 
              array (
                'title' => '服务的实际返回结果',
                'description' => '服务的实际返回结果',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'TemplateId' => 
                    array (
                      'title' => '模板ID',
                      'description' => '模板ID',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '4',
                    ),
                    'TemplateName' => 
                    array (
                      'title' => '模板名称',
                      'description' => '模板名称',
                      'type' => 'string',
                      'example' => '物品多轮模板',
                    ),
                    'TemplateDetail' => 
                    array (
                      'title' => '模板详情（维修只有一轮对话）',
                      'description' => '模板详情（维修只有一轮对话）',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'FirstDialogueTemplate' => 
                        array (
                          'title' => '第一轮对话',
                          'description' => '第一轮对话',
                          'type' => 'object',
                          'properties' => 
                          array (
                            'ZeroPriceYesAnswer' => 
                            array (
                              'title' => '价格=0  && 肯定回答',
                              'description' => '价格=0  && 肯定回答',
                              'type' => 'string',
                              'example' => '好的，服务员会尽快送来。',
                            ),
                            'ZeroPriceNoAnswer' => 
                            array (
                              'title' => '价格=0  && 否定回答',
                              'description' => '价格=0  && 否定回答',
                              'type' => 'string',
                              'example' => '对不起，暂时不提供此物品。',
                            ),
                            'NonzeroPriceYesAnswer' => 
                            array (
                              'title' => '价格！=0  &&肯定回答',
                              'description' => '价格！=0  &&肯定回答',
                              'type' => 'string',
                              'example' => '${goodsName}${price}元，请问需要服务员送来吗？',
                            ),
                          ),
                        ),
                        'SecondDialogueTemplate' => 
                        array (
                          'title' => '第二轮对话',
                          'description' => '第二轮对话',
                          'type' => 'object',
                          'properties' => 
                          array (
                            'NonzeroPriceYesAnswer' => 
                            array (
                              'title' => '价格！=0  && 肯定回答',
                              'description' => '价格！=0  && 肯定回答',
                              'type' => 'string',
                              'example' => '好的，服务员会尽快送来${goodsName}',
                            ),
                            'NonzeroPriceNoAnswer' => 
                            array (
                              'title' => '价格！=0  && 否定回答',
                              'description' => '价格！=0  && 否定回答',
                              'type' => 'string',
                              'example' => '好的，已取消。',
                            ),
                          ),
                        ),
                      ),
                    ),
                    'Type' => 
                    array (
                      'title' => '模板类型',
                      'description' => '模板类型',
                      'type' => 'string',
                      'example' => 'GOODS',
                    ),
                  ),
                ),
              ),
              'Message' => 
              array (
                'title' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                'description' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                'type' => 'string',
                'example' => 'success',
              ),
              'RequestId' => 
              array (
                'title' => 'RequestId',
                'description' => 'RequestId',
                'type' => 'string',
                'example' => '0EC7*726E',
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
            'errorCode' => 'InvalidParameter',
            'errorMessage' => 'The request parameter is invalid',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'ServerError',
            'errorMessage' => 'internal server error',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": 200,\\n  \\"Result\\": [\\n    {\\n      \\"TemplateId\\": 4,\\n      \\"TemplateName\\": \\"物品多轮模板\\",\\n      \\"TemplateDetail\\": {\\n        \\"FirstDialogueTemplate\\": {\\n          \\"ZeroPriceYesAnswer\\": \\"好的，服务员会尽快送来。\\",\\n          \\"ZeroPriceNoAnswer\\": \\"对不起，暂时不提供此物品。\\",\\n          \\"NonzeroPriceYesAnswer\\": \\"${goodsName}${price}元，请问需要服务员送来吗？\\"\\n        },\\n        \\"SecondDialogueTemplate\\": {\\n          \\"NonzeroPriceYesAnswer\\": \\"好的，服务员会尽快送来${goodsName}\\",\\n          \\"NonzeroPriceNoAnswer\\": \\"好的，已取消。\\"\\n        }\\n      },\\n      \\"Type\\": \\"GOODS\\"\\n    }\\n  ],\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"0EC7*726E\\"\\n}","type":"json"}]',
      'title' => '酒店场景服务对话模板',
    ),
    'InsertHotelSceneBookItem' => 
    array (
      'summary' => '酒店场景预订新增',
      'path' => '/v1.0/ip/insertHotelSceneBookItem',
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
          'AliGenie_Auth_SPI' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
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
          'name' => 'HotelId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => 'hotelID',
            'description' => 'hotelID',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '80d84ea8ed9e422fbad52715c8fc56f1',
          ),
        ),
        1 => 
        array (
          'name' => 'AddHotelSceneItemReq',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'title' => 'addHotelSceneItemReq',
            'description' => 'addHotelSceneItemReq',
            'type' => 'object',
            'properties' => 
            array (
              'Type' => 
              array (
                'title' => '酒店场景预订类型（FOOD：餐饮、LEISURE：SPA休闲、CAR_SERVICE：打车）',
                'description' => '酒店场景预订类型（FOOD：餐饮、LEISURE：SPA休闲、CAR_SERVICE：打车）',
                'type' => 'string',
                'required' => true,
                'docRequired' => true,
                'example' => 'FOOD',
              ),
              'Name' => 
              array (
                'title' => '酒店场景预订item名称',
                'description' => '酒店场景预订item名称',
                'type' => 'string',
                'required' => true,
                'docRequired' => true,
                'example' => '青椒肉丝',
              ),
              'Price' => 
              array (
                'title' => '价格（单位：分）',
                'description' => '价格（单位：分）',
                'type' => 'integer',
                'format' => 'int64',
                'required' => true,
                'docRequired' => true,
                'example' => '1250',
              ),
              'Icon' => 
              array (
                'title' => 'icon',
                'description' => 'icon',
                'type' => 'string',
                'required' => true,
                'docRequired' => true,
                'example' => 'https://ailabs.alibabausercontent.com/platform/28d7a91e3c05db3855725fc39e0387e7/welcome_audios/aa918294b6ca3aa115c51135bf9b80cb/l9f996sq.png',
              ),
            ),
            'required' => true,
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Result<Boolean>',
            'description' => 'Result<Boolean>',
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'title' => '状态码',
                'description' => '状态码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Result' => 
              array (
                'title' => '服务的实际返回结果',
                'description' => '服务的实际返回结果',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Message' => 
              array (
                'title' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                'description' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                'type' => 'string',
                'example' => 'success',
              ),
              'RequestId' => 
              array (
                'title' => 'RequestId',
                'description' => 'RequestId',
                'type' => 'string',
                'example' => '36FB***80C2',
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
            'errorCode' => 'InvalidParameter',
            'errorMessage' => 'The request parameter is invalid',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'ServerError',
            'errorMessage' => 'internal server error',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": 200,\\n  \\"Result\\": true,\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"36FB***80C2\\"\\n}","type":"json"}]',
      'title' => '新增酒店预订服务项',
    ),
    'DeleteHotelSceneBookItem' => 
    array (
      'summary' => '酒店场景预订删除',
      'path' => '/v1.0/ip/deleteHotelSceneBookItem',
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
          'AliGenie_Auth_SPI' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
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
          'name' => 'HotelId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => 'hotelID',
            'description' => 'hotelID',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '80d84ea8ed9e422fbad52715c8fc56f1',
          ),
        ),
        1 => 
        array (
          'name' => 'Id',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '酒店场景预订itemID
 删除条件 id与名称必传一个',
            'description' => '酒店场景预订itemID',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'docRequired' => true,
            'example' => '11823',
          ),
        ),
        2 => 
        array (
          'name' => 'Name',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '名称 删除条件 id与名称必传一个',
            'description' => '名称 删除条件 id与名称必传一个',
            'type' => 'string',
            'required' => false,
            'example' => '棉签',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Result<Boolean>',
            'description' => 'Result<Boolean>',
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'title' => '状态码',
                'description' => '状态码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Result' => 
              array (
                'title' => '服务的实际返回结果',
                'description' => '服务的实际返回结果',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Message' => 
              array (
                'title' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                'description' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                'type' => 'string',
                'example' => 'success',
              ),
              'RequestId' => 
              array (
                'title' => 'RequestId',
                'description' => '请求id',
                'type' => 'string',
                'example' => '0EC7*726E',
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
            'errorCode' => 'InvalidParameter',
            'errorMessage' => 'The request parameter is invalid',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'ServerError',
            'errorMessage' => 'internal server error',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": 200,\\n  \\"Result\\": true,\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"0EC7*726E\\"\\n}","type":"json"}]',
      'title' => '删除酒店预订服务项',
    ),
    'UpdateHotelSceneBookItem' => 
    array (
      'summary' => '酒店场景预订编辑',
      'path' => '/v1.0/ip/updateHotelSceneBookItem',
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
          'AliGenie_Auth_SPI' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
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
          'name' => 'HotelId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => 'hotelID',
            'description' => 'hotelID',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '80d84ea8ed9e422fbad52715c8fc56f1',
          ),
        ),
        1 => 
        array (
          'name' => 'UpdateHotelSceneBookReq',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'title' => 'updateHotelSceneBookReq',
            'description' => 'updateHotelSceneBookReq',
            'type' => 'object',
            'properties' => 
            array (
              'Id' => 
              array (
                'title' => '酒店场景预订itemID
id与名称必须传其中一个',
                'description' => '酒店场景预订itemID',
                'type' => 'integer',
                'format' => 'int64',
                'required' => false,
                'docRequired' => true,
                'example' => '1',
              ),
              'Name' => 
              array (
                'title' => '名称 查询条件 id与名称必须传一个',
                'description' => '名称',
                'type' => 'string',
                'required' => false,
                'docRequired' => true,
                'example' => '青椒肉丝',
              ),
              'Icon' => 
              array (
                'title' => 'icon',
                'description' => 'icon',
                'type' => 'string',
                'required' => true,
                'docRequired' => true,
                'example' => 'https://ailabs.alibabausercontent.com/platform/28d7a91e3c05db3855725fc39e0387e7/welcome_audios/aa918294b6ca3aa115c51135bf9b80cb/l9f996sq.png',
              ),
              'Price' => 
              array (
                'title' => '价格（单位：分）',
                'description' => '价格（单位：分）',
                'type' => 'integer',
                'format' => 'int64',
                'required' => true,
                'docRequired' => true,
                'example' => '1250',
              ),
            ),
            'required' => true,
            'docRequired' => true,
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => '',
            'description' => '',
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'title' => '状态码',
                'description' => '状态码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Result' => 
              array (
                'title' => '服务的实际返回结果',
                'description' => '服务的实际返回结果',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Message' => 
              array (
                'title' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                'description' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                'type' => 'string',
                'example' => 'success',
              ),
              'RequestId' => 
              array (
                'title' => 'RequestId',
                'description' => '请求Id',
                'type' => 'string',
                'example' => '0EC7*726E',
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
            'errorCode' => 'InvalidParameter',
            'errorMessage' => 'The request parameter is invalid',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'ServerError',
            'errorMessage' => 'internal server error',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": 200,\\n  \\"Result\\": true,\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"0EC7*726E\\"\\n}","type":"json"}]',
      'title' => '编辑酒店场景预订',
    ),
    'ListHotelSceneBookItems' => 
    array (
      'summary' => '酒店场景预订列表（餐饮/SPA休闲/打车）',
      'path' => '/v1.0/ip/listHotelSceneBookItems',
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
          'AliGenie_Auth_SPI' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
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
          'name' => 'HotelId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => 'hotelID',
            'description' => 'hotelID',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '80d84ea8ed9e422fbad52715c8fc56f1',
          ),
        ),
        1 => 
        array (
          'name' => 'Type',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '酒店场景预订类型（FOOD：餐饮、LEISURE：SPA休闲、CAR_SERVICE：打车）',
            'description' => '酒店场景预订类型（FOOD：餐饮、LEISURE：SPA休闲、CAR_SERVICE：打车）',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'FOOD',
          ),
        ),
        2 => 
        array (
          'name' => 'Page',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'title' => '分页参数',
            'description' => '分页参数',
            'type' => 'object',
            'properties' => 
            array (
              'PageNumber' => 
              array (
                'title' => '第几页',
                'description' => '第几页',
                'type' => 'integer',
                'format' => 'int32',
                'required' => true,
                'docRequired' => true,
                'example' => '1',
              ),
              'PageSize' => 
              array (
                'title' => '每页多少条数据',
                'description' => '每页多少条数据',
                'type' => 'integer',
                'format' => 'int32',
                'required' => true,
                'docRequired' => true,
                'example' => '10',
              ),
            ),
            'required' => true,
            'docRequired' => true,
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Result<HotelSceneListResp>',
            'description' => 'Result<HotelSceneListResp>',
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'title' => '状态码',
                'description' => '状态码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Result' => 
              array (
                'title' => '服务的实际返回结果',
                'description' => '服务的实际返回结果',
                'type' => 'object',
                'properties' => 
                array (
                  'Page' => 
                  array (
                    'title' => '分页结果',
                    'description' => '分页结果',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'PageNumber' => 
                      array (
                        'title' => '第几页',
                        'description' => '第几页',
                        'type' => 'integer',
                        'format' => 'int32',
                        'example' => '1',
                      ),
                      'PageSize' => 
                      array (
                        'title' => '每页多少条数据',
                        'description' => '每页多少条数据',
                        'type' => 'integer',
                        'format' => 'int32',
                        'example' => '10',
                      ),
                      'Total' => 
                      array (
                        'title' => '共多少条数据',
                        'description' => '共多少条数据',
                        'type' => 'integer',
                        'format' => 'int32',
                        'example' => '23',
                      ),
                      'TotalPage' => 
                      array (
                        'title' => '共多少页',
                        'description' => '共多少页',
                        'type' => 'integer',
                        'format' => 'int32',
                        'example' => '3',
                      ),
                      'HasNext' => 
                      array (
                        'title' => '是否有下一页',
                        'description' => '是否有下一页',
                        'type' => 'boolean',
                        'example' => 'True',
                      ),
                    ),
                  ),
                  'SceneItemList' => 
                  array (
                    'description' => '预定项列表',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '预定项',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Type' => 
                        array (
                          'title' => '酒店场景预订类型（FOOD：餐饮、LEISURE：SPA休闲、CAR_SERVICE：打车）',
                          'description' => '酒店场景预订类型（FOOD：餐饮、LEISURE：SPA休闲、CAR_SERVICE：打车）',
                          'type' => 'string',
                          'example' => 'FOOD',
                        ),
                        'Id' => 
                        array (
                          'title' => '酒店场景预订itemID',
                          'description' => '酒店场景预订itemID',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '11824',
                        ),
                        'Name' => 
                        array (
                          'title' => '名称',
                          'description' => '名称',
                          'type' => 'string',
                          'example' => '青椒肉丝',
                        ),
                        'Status' => 
                        array (
                          'title' => '状态（已添加）',
                          'description' => '状态（已添加）',
                          'type' => 'string',
                          'example' => '已添加',
                        ),
                        'UpdateTime' => 
                        array (
                          'title' => '更新时间',
                          'description' => '更新时间',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1666161803',
                        ),
                        'Icon' => 
                        array (
                          'title' => '物品、服务、维修的图标',
                          'description' => '物品、服务、维修的图标',
                          'type' => 'string',
                          'example' => 'https://ailabs.alibabausercontent.com/platform/28d7a91e3c05db3855725fc39e0387e7/welcome_audios/aa918294b6ca3aa115c51135bf9b80cb/l9f996sq.png',
                        ),
                        'Price' => 
                        array (
                          'title' => '价格（单位：分）',
                          'description' => '价格（单位：分）',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1850',
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'Message' => 
              array (
                'title' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                'description' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                'type' => 'string',
                'example' => 'success',
              ),
              'RequestId' => 
              array (
                'title' => 'RequestId',
                'description' => '请求id',
                'type' => 'string',
                'example' => '0EC7*726E',
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
            'errorCode' => 'InvalidParameter',
            'errorMessage' => 'The request parameter is invalid',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'ServerError',
            'errorMessage' => 'internal server error',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": 200,\\n  \\"Result\\": {\\n    \\"Page\\": {\\n      \\"PageNumber\\": 1,\\n      \\"PageSize\\": 10,\\n      \\"Total\\": 23,\\n      \\"TotalPage\\": 3,\\n      \\"HasNext\\": true\\n    },\\n    \\"SceneItemList\\": [\\n      {\\n        \\"Type\\": \\"FOOD\\",\\n        \\"Id\\": 11824,\\n        \\"Name\\": \\"青椒肉丝\\",\\n        \\"Status\\": \\"已添加\\",\\n        \\"UpdateTime\\": 1666161803,\\n        \\"Icon\\": \\"https://ailabs.alibabausercontent.com/platform/28d7a91e3c05db3855725fc39e0387e7/welcome_audios/aa918294b6ca3aa115c51135bf9b80cb/l9f996sq.png\\",\\n        \\"Price\\": 1850\\n      }\\n    ]\\n  },\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"0EC7*726E\\"\\n}","type":"json"}]',
      'title' => '查询酒店预订列表',
    ),
    'ListHotelSceneItems' => 
    array (
      'summary' => '查询酒店场景服务（物品/服务/维修）',
      'path' => '/v1.0/ip/listHotelSceneItems',
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
          'AliGenie_Auth_SPI' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
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
          'name' => 'HotelId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => 'hotelID',
            'description' => 'hotelID',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '80d84ea8ed9e422fbad52715c8fc56f1',
          ),
        ),
        1 => 
        array (
          'name' => 'ListHotelSceneReq',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'title' => 'ListHotelSceneReq',
            'description' => 'ListHotelSceneReq',
            'type' => 'object',
            'properties' => 
            array (
              'Page' => 
              array (
                'title' => '分页参数',
                'description' => '分页参数',
                'type' => 'object',
                'properties' => 
                array (
                  'PageNumber' => 
                  array (
                    'description' => '页码',
                    'type' => 'integer',
                    'format' => 'int32',
                    'required' => true,
                    'docRequired' => true,
                    'example' => '1',
                  ),
                  'PageSize' => 
                  array (
                    'description' => '每页的大小，默认为10 ',
                    'type' => 'integer',
                    'format' => 'int32',
                    'required' => true,
                    'docRequired' => true,
                    'example' => '10',
                  ),
                ),
                'required' => true,
                'docRequired' => true,
              ),
              'Type' => 
              array (
                'title' => '酒店场景类型（物品GOODS/服务SERVICE/维修REPAIR）',
                'description' => '酒店场景服务类型（物品GOODS/服务SERVICE/维修REPAIR）',
                'type' => 'string',
                'required' => true,
                'docRequired' => true,
                'example' => 'GOODS',
              ),
              'Category' => 
              array (
                'title' => '酒店场景类型二级分类',
                'description' => '酒店场景服务类型二级分类',
                'type' => 'string',
                'required' => false,
                'example' => '客用品类',
              ),
              'Status' => 
              array (
                'title' => '是否添加',
                'description' => '是否添加',
                'type' => 'string',
                'required' => false,
                'example' => '已添加',
              ),
              'Keywords' => 
              array (
                'title' => '酒店场景名称',
                'description' => '酒店场景服务项名称',
                'type' => 'string',
                'required' => false,
                'example' => '棉签',
              ),
            ),
            'required' => true,
            'docRequired' => true,
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Result<HotelSceneListResp>',
            'description' => 'Result<HotelSceneListResp>',
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'title' => '状态码',
                'description' => '状态码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Result' => 
              array (
                'title' => '服务的实际返回结果',
                'description' => '服务的实际返回结果',
                'type' => 'object',
                'properties' => 
                array (
                  'Page' => 
                  array (
                    'title' => '分页结果',
                    'description' => '分页结果',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'PageNumber' => 
                      array (
                        'title' => '第几页',
                        'description' => '第几页',
                        'type' => 'integer',
                        'format' => 'int32',
                        'example' => '1',
                      ),
                      'PageSize' => 
                      array (
                        'title' => '每页多少条数据',
                        'description' => '每页多少条数据',
                        'type' => 'integer',
                        'format' => 'int32',
                        'example' => '10',
                      ),
                      'Total' => 
                      array (
                        'title' => '共多少条数据',
                        'description' => '共多少条数据',
                        'type' => 'integer',
                        'format' => 'int32',
                        'example' => '23',
                      ),
                      'TotalPage' => 
                      array (
                        'title' => '共多少页',
                        'description' => '共多少页',
                        'type' => 'integer',
                        'format' => 'int32',
                        'example' => '3',
                      ),
                      'HasNext' => 
                      array (
                        'title' => '是否有下一页',
                        'description' => '是否有下一页',
                        'type' => 'boolean',
                        'example' => 'False',
                      ),
                    ),
                  ),
                  'SceneItemList' => 
                  array (
                    'description' => '服务项列表',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '服务项',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Type' => 
                        array (
                          'title' => '酒店场景类型',
                          'description' => '酒店场景服务类型',
                          'type' => 'string',
                          'example' => 'GOODS',
                        ),
                        'Category' => 
                        array (
                          'title' => '酒店场景类型二级分类',
                          'description' => '酒店场景类型二级分类',
                          'type' => 'string',
                          'example' => '客用品类',
                        ),
                        'Id' => 
                        array (
                          'title' => 'id',
                          'description' => 'id',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '10336',
                        ),
                        'Name' => 
                        array (
                          'title' => '名称',
                          'description' => '名称',
                          'type' => 'string',
                          'example' => '棉签',
                        ),
                        'Status' => 
                        array (
                          'title' => '状态（已添加、未添加）',
                          'description' => '状态（已添加、未添加）',
                          'type' => 'string',
                          'example' => '已添加',
                        ),
                        'UpdateTime' => 
                        array (
                          'title' => '更新时间',
                          'description' => '更新时间',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1666163226',
                        ),
                        'Icon' => 
                        array (
                          'title' => '物品、服务、维修的图标',
                          'description' => '物品、服务、维修的图标',
                          'type' => 'string',
                          'example' => 'https://ailabsaicloudservice.alicdn.com/hotel/icon/jiudianmianban_fuwushangpintu/wupin/keyongpinlei/mianqian.png',
                        ),
                        'Price' => 
                        array (
                          'title' => '价格（单位：分，eg：160表示1.6元）',
                          'description' => '价格（单位：分，eg：160表示1.6元）',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '160',
                        ),
                        'DeliveryMethod' => 
                        array (
                          'title' => '物品配送方式 waiter 服务员  robot 机器人',
                          'description' => '物品配送方式 waiter 服务员  robot 机器人',
                          'type' => 'string',
                          'example' => 'robot',
                        ),
                        'RobotName' => 
                        array (
                          'title' => '机器人名称',
                          'description' => '机器人名称',
                          'type' => 'string',
                          'example' => '测试机器人',
                        ),
                        'PaymentMethod' => 
                        array (
                          'title' => '结算方式:room 房费结算  robot 机器人结算',
                          'description' => '结算方式:room 房费结算  robot 机器人结算',
                          'type' => 'string',
                          'example' => 'robot',
                        ),
                        'LimitSwitch' => 
                        array (
                          'title' => '是否限制数量:0或不传:不限制,1:限制',
                          'description' => '是否限制数量:0或不传:不限制,1:限制',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '1',
                        ),
                        'LimitNumber' => 
                        array (
                          'title' => '限制数量',
                          'description' => '限制数量',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '2',
                        ),
                        'BeyondLimitReply' => 
                        array (
                          'title' => '超限回复',
                          'description' => '超限回复',
                          'type' => 'string',
                          'example' => '顾客您好，该物品已超出酒店今日供应限制，请联系前台。',
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'Message' => 
              array (
                'title' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                'description' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                'type' => 'string',
                'example' => 'success',
              ),
              'RequestId' => 
              array (
                'title' => 'RequestId',
                'description' => '请求id',
                'type' => 'string',
                'example' => '0EC7*726E',
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
            'errorCode' => 'InvalidParameter',
            'errorMessage' => 'The request parameter is invalid',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'ServerError',
            'errorMessage' => 'internal server error',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": 200,\\n  \\"Result\\": {\\n    \\"Page\\": {\\n      \\"PageNumber\\": 1,\\n      \\"PageSize\\": 10,\\n      \\"Total\\": 23,\\n      \\"TotalPage\\": 3,\\n      \\"HasNext\\": true\\n    },\\n    \\"SceneItemList\\": [\\n      {\\n        \\"Type\\": \\"GOODS\\",\\n        \\"Category\\": \\"客用品类\\",\\n        \\"Id\\": 10336,\\n        \\"Name\\": \\"棉签\\",\\n        \\"Status\\": \\"已添加\\",\\n        \\"UpdateTime\\": 1666163226,\\n        \\"Icon\\": \\"https://ailabsaicloudservice.alicdn.com/hotel/icon/jiudianmianban_fuwushangpintu/wupin/keyongpinlei/mianqian.png\\",\\n        \\"Price\\": 160,\\n        \\"DeliveryMethod\\": \\"robot\\",\\n        \\"RobotName\\": \\"测试机器人\\",\\n        \\"PaymentMethod\\": \\"robot\\",\\n        \\"LimitSwitch\\": 1,\\n        \\"LimitNumber\\": 2,\\n        \\"BeyondLimitReply\\": \\"顾客您好，该物品已超出酒店今日供应限制，请联系前台。\\"\\n      }\\n    ]\\n  },\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"0EC7*726E\\"\\n}","type":"json"}]',
      'title' => '查询酒店场景服务',
    ),
    'UpdateHotelSceneItem' => 
    array (
      'summary' => '酒店场景修改（开启/关闭/编辑）',
      'path' => '/v1.0/ip/updateHotelSceneItem',
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
          'AliGenie_Auth_SPI' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
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
          'name' => 'HotelId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => 'hotelID',
            'description' => 'hotelID',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '80d84ea8ed9e422fbad52715c8fc56f1',
          ),
        ),
        1 => 
        array (
          'name' => 'UpdateHotelSceneOperateReq',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'title' => 'updateHotelSceneReq',
            'description' => 'updateHotelSceneReq',
            'type' => 'object',
            'properties' => 
            array (
              'OperateType' => 
              array (
                'title' => '操作类型（OPEN开启,CLOSE关闭,EDIT编辑）',
                'description' => '操作类型（OPEN开启,CLOSE关闭,EDIT编辑）',
                'type' => 'string',
                'required' => true,
                'docRequired' => true,
                'example' => 'OPEN',
              ),
              'IsUseTemplateAnswer' => 
              array (
                'title' => '是否使用模板回答（true/false）',
                'description' => '是否使用模板回答（true/false）',
                'type' => 'boolean',
                'required' => true,
                'docRequired' => true,
                'example' => 'true',
              ),
            ),
            'required' => true,
            'docRequired' => true,
          ),
        ),
        2 => 
        array (
          'name' => 'UpdateHotelSceneReq',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'title' => 'UpdateHotelSceneReq',
            'description' => 'UpdateHotelSceneReq',
            'type' => 'object',
            'properties' => 
            array (
              'Id' => 
              array (
                'title' => 'itemID',
                'description' => 'itemID',
                'type' => 'integer',
                'format' => 'int64',
                'required' => false,
                'docRequired' => true,
                'example' => '10337',
              ),
              'Name' => 
              array (
                'title' => '物品名称 id与name必传一个',
                'description' => '物品名称',
                'type' => 'string',
                'required' => false,
                'example' => '棉签',
              ),
              'Status' => 
              array (
                'title' => '状态（已添加/未添加）',
                'description' => '状态（已添加/未添加）',
                'type' => 'string',
                'required' => true,
                'docRequired' => true,
                'example' => '已添加',
              ),
              'Icon' => 
              array (
                'title' => 'icon',
                'description' => 'icon',
                'type' => 'string',
                'required' => true,
                'docRequired' => true,
                'example' => 'https://ailabsaicloudservice.alicdn.com/hotel/icon/jiudianmianban_fuwushangpintu/wupin/keyongpinlei/mianqian.png',
              ),
              'Price' => 
              array (
                'title' => '价格（单位：分）',
                'description' => '价格（单位：分）',
                'type' => 'integer',
                'format' => 'int64',
                'required' => true,
                'docRequired' => true,
                'example' => '165',
              ),
              'DialogueList' => 
              array (
                'title' => '对话List',
                'description' => '对话List',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '对话信息',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'ServiceId' => 
                    array (
                      'title' => 'itemId',
                      'description' => 'itemId',
                      'type' => 'string',
                      'required' => false,
                      'example' => '10337',
                    ),
                    'Process' => 
                    array (
                      'title' => '第几轮对话',
                      'description' => '第几轮对话',
                      'type' => 'integer',
                      'format' => 'int32',
                      'required' => false,
                      'example' => '0',
                    ),
                    'Question' => 
                    array (
                      'title' => '问题',
                      'description' => '问题',
                      'type' => 'string',
                      'required' => false,
                      'example' => '无',
                    ),
                    'YesAnswer' => 
                    array (
                      'title' => '肯定回答',
                      'description' => '肯定回答',
                      'type' => 'string',
                      'required' => false,
                      'example' => '纸巾1.5元，请问需要么？',
                    ),
                    'NoAnswer' => 
                    array (
                      'title' => '否定回答',
                      'description' => '否定回答',
                      'type' => 'string',
                      'required' => false,
                      'example' => '对不起，暂时不提供此物品',
                    ),
                    'YesAnswerTemplate' => 
                    array (
                      'title' => '肯定回答模板ID',
                      'description' => '肯定回答模板ID',
                      'type' => 'string',
                      'required' => false,
                      'example' => '4',
                    ),
                    'NoAnswerTemplate' => 
                    array (
                      'title' => '否定回答模板ID',
                      'description' => '否定回答模板ID',
                      'type' => 'string',
                      'required' => false,
                      'example' => '4',
                    ),
                    'DialogueId' => 
                    array (
                      'title' => '对话ID',
                      'description' => '对话ID',
                      'type' => 'string',
                      'required' => false,
                      'example' => '335',
                    ),
                  ),
                  'required' => false,
                ),
                'required' => true,
              ),
              'DeliveryMethod' => 
              array (
                'title' => '物品配送方式:waiter 服务员（默认）  robot 机器人',
                'description' => '物品配送方式:waiter 服务员  robot 机器人',
                'type' => 'string',
                'required' => false,
                'example' => 'robot',
              ),
              'RobotName' => 
              array (
                'title' => '机器人名称，物品配送方式为robot时必填',
                'description' => '机器人名称。',
                'type' => 'string',
                'required' => false,
                'example' => '测试机器人',
              ),
              'PaymentMethod' => 
              array (
                'title' => '结算方式:room 房费结算（默认）  robot 机器人结算',
                'description' => '结算方式:room 房费结算  robot 机器人结算',
                'type' => 'string',
                'required' => false,
                'example' => 'robot',
              ),
              'LimitSwitch' => 
              array (
                'title' => '是否限制数量:1:限制 其它不限制',
                'description' => '是否限量 1表示限制 0或空:不限',
                'type' => 'integer',
                'format' => 'int32',
                'required' => false,
                'example' => '1',
              ),
              'LimitNumber' => 
              array (
                'title' => '限制数量',
                'description' => '限制数量',
                'type' => 'integer',
                'format' => 'int64',
                'required' => false,
                'example' => '2',
              ),
              'BeyondLimitReply' => 
              array (
                'title' => '超限回复',
                'description' => '超限回复',
                'type' => 'string',
                'required' => false,
                'example' => '尊敬的客户您好，该物品今日已超出酒店供应数量，有需要请联系前台。',
              ),
            ),
            'required' => true,
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Result<Boolean>',
            'description' => 'Result<Boolean>',
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'title' => '状态码',
                'description' => '状态码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Result' => 
              array (
                'title' => '服务的实际返回结果',
                'description' => '服务的实际返回结果',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Message' => 
              array (
                'title' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                'description' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                'type' => 'string',
                'example' => 'success',
              ),
              'RequestId' => 
              array (
                'title' => 'RequestId',
                'description' => '请求id',
                'type' => 'string',
                'example' => '0D0C***67DB',
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
            'errorCode' => 'InvalidParameter',
            'errorMessage' => 'The request parameter is invalid',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'ServerError',
            'errorMessage' => 'internal server error',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": 200,\\n  \\"Result\\": true,\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"0D0C***67DB\\"\\n}","type":"json"}]',
      'title' => '编辑酒店场景服务',
      'description' => '- ***影响因素：***
> 
> - `1、价格是否=0；`
> - `2、是否使用模板；`
> - `3、新增/修改对话；`

- ***修改规则：***
> 
> 1. 1、价格是否为0元
>     - 等于0：dialogueList.size=1 &&  参数内容为process=0（一轮对话，免费服务）；
>     - 大于0：dialogueList.size=2 &&  参数内容为process=0 （一轮对话，付费服务，询问是否需要）+ process=1（二轮对话，对是否需要的回答）
> 2. 2、是否使用模板
    - "isUseTemplateAnswer": true/false
3. 3、新增/修改对话

1. ***新增对话：***
>  - 使用模板：yesAnswerTemplate' . "\0" . ' && noAnswerTemplate' . "\0" . ' && process' . "\0" . ' 不为null，其他为null；
> - 不使用模板：yesAnswer' . "\0" . '' . "\0" . ' && noAnswer' . "\0" . '' . "\0" . ' && process' . "\0" . ' 不为null，其他为null

 1. ***修改对话***

  >   - 使用模板：yesAnswerTemplate' . "\0" . ' && noAnswerTemplate' . "\0" . ' && process' . "\0" . ' && dialogueId' . "\0" . ' && serviceId' . "\0" . ' 不为null，其他为null；
   >  - 不使用模板：yesAnswer' . "\0" . '' . "\0" . ' && noAnswer' . "\0" . '' . "\0" . ' && process' . "\0" . ' && dialogueId' . "\0" . ' && serviceId' . "\0" . ' 不为null，其他为null',
      'extraInfo' => '|  <div style="width:250px">场景</div>   | 示例参数  |
|  ----  | ----  |
| 1、开启 && 0元 && 模板回答  | {"updateHotelSceneReq":{"icon":"xxx.png","dialogueList":[{"process":0,"noAnswerTemplate":"5","yesAnswerTemplate":"5"}],"price":0,"id":xxx,"status":"已添加"},"updateHotelSceneOperateReq":{"operateType":"OPEN","isUseTemplateAnswer":true},"hotelId":"****"} |
| 2、开启 && 0元 && 不使用模板  | {"updateHotelSceneReq":{"icon":"xxx.png","dialogueList":[{"process":0,"yesAnswer":"服务员马上给你送来！！！","noAnswer":"对不起没有这个物品！！！"}],"price":0,"id":xxx,"status":"已添加"},"updateHotelSceneOperateReq":{"operateType":"OPEN","isUseTemplateAnswer":false},"hotelId":"****"}  |
| 3、开启 && >0元 && 模板回答  |  {"updateHotelSceneReq":{"icon":"xxx.png","dialogueList":[{"process":0,"noAnswerTemplate":"5","yesAnswerTemplate":"5"},{"process":1,"noAnswerTemplate":"5","yesAnswerTemplate":"5"}],"price":33333,"id":xxx,"status":"已添加"},"updateHotelSceneOperateReq":{"operateType":"OPEN","isUseTemplateAnswer":true},"hotelId":"****"}  |
| 4、开启 && >0元 && 不使用模板  |  {"updateHotelSceneReq":{"icon":"xxx.png","dialogueList":[{"process":0,"yesAnswer":"XXX需要6元！！！","noAnswer":"对不起没有这个物品！！！"},{"process":1,"yesAnswer":"好得服务员给你尽快送来！！！","noAnswer":"好的已取消！！！"}],"price":33322,"id":xxx,"status":"已添加"},"updateHotelSceneOperateReq":{"operateType":"OPEN","isUseTemplateAnswer":false},"hotelId":"****"}  |
| 5、关闭  |  {"updateHotelSceneReq":{"icon":"xxx.png","dialogueList":[{"process":0,"noAnswerTemplate":"5","yesAnswerTemplate":"5"}],"price":0,"id":xxx,"status":"未添加"},"updateHotelSceneOperateReq":{"operateType":"CLOSE","isUseTemplateAnswer":true},"hotelId":"****"}  |
| 6、编辑 && 0元 **改为** >0元 && 模板回答  |  {"updateHotelSceneReq":{"icon":"xxx.png","dialogueList":[{"process":0,"noAnswerTemplate":"5","dialogueId":"xxx","yesAnswerTemplate":"5","serviceId":"166033"},{"process":1,"noAnswerTemplate":"5","yesAnswerTemplate":"5"}],"price":55656,"id":xxx,"status":"已添加"},"updateHotelSceneOperateReq":{"operateType":"EDIT","isUseTemplateAnswer":true},"hotelId":"****"}  |
| 7、编辑 && 0元 **改为** >0元 && 不使用模板  |  {"updateHotelSceneReq":{"icon":"xxx.png","dialogueList":[{"process":0,"yesAnswer":"XXX需要6元！！！","dialogueId":"xxx","noAnswer":"对不起没有这个物品！！！","serviceId":"166033"},{"process":1,"yesAnswer":"好得服务员给你尽快送来！！！","noAnswer":"好的已取消！！！"}],"price":3322,"id":xxx,"status":"已添加"},"updateHotelSceneOperateReq":{"operateType":"EDIT","isUseTemplateAnswer":false},"hotelId":"****"}  |
| 8、编辑 && 0元 && 模板回答  |  {"updateHotelSceneReq":{"icon":"xxx.png","dialogueList":[{"process":0,"noAnswerTemplate":"5","dialogueId":"xxx","yesAnswerTemplate":"5","serviceId":"166033"}],"price":0,"id":xxx,"status":"已添加"},"updateHotelSceneOperateReq":{"operateType":"EDIT","isUseTemplateAnswer":true},"hotelId":"****"}  |
| 9、编辑 && 0元 && 不使用模板  |  {"updateHotelSceneReq":{"icon":"xxx.png","dialogueList":[{"process":0,"noAnswerTemplate":"","yesAnswer":"服务员马上给你送来!!!!!!!!!","dialogueId":"xxx","noAnswer":"对不起没有这个物品","serviceId":"166033"}],"price":0,"id":xxx,"status":"已添加"},"updateHotelSceneOperateReq":{"operateType":"EDIT","isUseTemplateAnswer":false},"hotelId":"****"}  |
| 10、编辑 && >0元 **改为** 0元 && 模板回答  |  {"updateHotelSceneReq":{"icon":"xxx.png","dialogueList":[{"process":0,"noAnswerTemplate":"5","dialogueId":"xxx","yesAnswerTemplate":"5","serviceId":"166033"}],"price":0,"id":xxx,"status":"已添加"},"updateHotelSceneOperateReq":{"operateType":"EDIT","isUseTemplateAnswer":true},"hotelId":"****"}  |
| 11、编辑 && >0元 **改为** 0元 && 不使用模板  |  {"updateHotelSceneReq":{"icon":"xxx.png","dialogueList":[{"process":0,"yesAnswer":"服务员马上给你送来!!!!!!!!!","dialogueId":"xxx","noAnswer":"对不起没有这个物品!!!","serviceId":"166033"}],"price":0,"id":xxx,"status":"已添加"},"updateHotelSceneOperateReq":{"operateType":"EDIT","isUseTemplateAnswer":false},"hotelId":"****"}  |
| 12、编辑 && >0元 **改为** >0元 && 模板回答  |  {"updateHotelSceneReq":{"icon":"xxx.png","dialogueList":[{"process":0,"noAnswerTemplate":"5","dialogueId":"xxx","yesAnswerTemplate":"5","serviceId":"166033"},{"process":1,"noAnswerTemplate":"5","dialogueId":"xxx","yesAnswerTemplate":"5","serviceId":"166033"}],"price":5555,"id":xxx,"status":"已添加"},"updateHotelSceneOperateReq":{"operateType":"EDIT","isUseTemplateAnswer":true},"hotelId":"****"}  |
| 13、编辑 && >0元 **改为** >0元 && 不使用模板  |  {"updateHotelSceneReq":{"icon":"xxx.png","dialogueList":[{"process":0,"yesAnswer":"XXX需要6元！！！","dialogueId":"xxx","noAnswer":"对不起没有这个物品！！！","serviceId":"166033"},{"process":1,"yesAnswer":"好的服务员马上给你送来！！！！","dialogueId":"xxx","noAnswer":"好的已取消","serviceId":"166033"}],"price":5555,"id":xxx,"status":"已添加"},"updateHotelSceneOperateReq":{"operateType":"EDIT","isUseTemplateAnswer":false},"hotelId":"****"}  |',
    ),
    'GetHotelSceneItemDetail' => 
    array (
      'summary' => '酒店场景详情',
      'path' => '/v1.0/ip/getHotelSceneItemDetail',
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
          'AliGenie_Auth_SPI' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
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
          'name' => 'HotelId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => 'hotelID',
            'description' => 'hotelID',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '80d84ea8ed9e422fbad52715c8fc56f1',
          ),
        ),
        1 => 
        array (
          'name' => 'ItemId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '酒店场景itemID
id与物品名称必传其中一个',
            'description' => '酒店场景itemID',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'docRequired' => true,
            'example' => '10336',
          ),
        ),
        2 => 
        array (
          'name' => 'Name',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '物品名称
id与物品名称必传其中一个',
            'description' => '物品名称
id与物品名称必传其中一个',
            'type' => 'string',
            'required' => false,
            'example' => '棉签',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Result<HotelSceneDetailResp>',
            'description' => 'Result<HotelSceneDetailResp>',
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'title' => '状态码',
                'description' => '状态码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Result' => 
              array (
                'title' => '服务的实际返回结果',
                'description' => '服务的实际返回结果',
                'type' => 'object',
                'properties' => 
                array (
                  'DialogueList' => 
                  array (
                    'title' => '酒店场景item对话List',
                    'description' => '酒店场景item对话List',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'ServiceId' => 
                        array (
                          'title' => '酒店场景itemID',
                          'description' => '酒店场景itemID',
                          'type' => 'string',
                          'example' => '10336',
                        ),
                        'Process' => 
                        array (
                          'title' => '第几轮对话',
                          'description' => '第几轮对话',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '0',
                        ),
                        'Question' => 
                        array (
                          'title' => '问题',
                          'description' => '问题',
                          'type' => 'string',
                          'example' => '无',
                        ),
                        'YesAnswer' => 
                        array (
                          'title' => '肯定回答',
                          'description' => '肯定回答',
                          'type' => 'string',
                          'example' => '纸巾1.5元，请问需要么？',
                        ),
                        'NoAnswer' => 
                        array (
                          'title' => '否定回答',
                          'description' => '否定回答',
                          'type' => 'string',
                          'example' => '对不起，暂时不提供此物品',
                        ),
                        'YesAnswerTemplate' => 
                        array (
                          'title' => '肯定回答模板ID',
                          'description' => '肯定回答模板ID',
                          'type' => 'string',
                          'example' => '4',
                        ),
                        'NoAnswerTemplate' => 
                        array (
                          'title' => '否定回答模板ID',
                          'description' => '否定回答模板ID',
                          'type' => 'string',
                          'example' => '4',
                        ),
                        'DialogueId' => 
                        array (
                          'title' => '对话ID',
                          'description' => '对话ID',
                          'type' => 'string',
                          'example' => '336',
                        ),
                        'UpdateTime' => 
                        array (
                          'title' => '更新时间',
                          'description' => '更新时间',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1666164774',
                        ),
                        'CreateTime' => 
                        array (
                          'title' => '创建时间',
                          'description' => '创建时间',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1666164774',
                        ),
                      ),
                    ),
                  ),
                  'Type' => 
                  array (
                    'title' => '酒店场景类型',
                    'description' => '酒店场景类型',
                    'type' => 'string',
                    'example' => 'GOODS',
                  ),
                  'Category' => 
                  array (
                    'title' => '酒店场景类型二级分类',
                    'description' => '酒店场景类型二级分类',
                    'type' => 'string',
                    'example' => '客用品类',
                  ),
                  'Id' => 
                  array (
                    'title' => '酒店场景itemID',
                    'description' => '酒店场景itemID',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '10336',
                  ),
                  'Name' => 
                  array (
                    'title' => '名称',
                    'description' => '名称',
                    'type' => 'string',
                    'example' => '擦鞋布',
                  ),
                  'Status' => 
                  array (
                    'title' => '状态',
                    'description' => '状态',
                    'type' => 'string',
                    'example' => '已添加',
                  ),
                  'UpdateTime' => 
                  array (
                    'title' => '更新时间',
                    'description' => '更新时间',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1666168828',
                  ),
                  'Icon' => 
                  array (
                    'title' => '物品、服务、维修的图标',
                    'description' => '物品、服务、维修的图标',
                    'type' => 'string',
                    'example' => 'https://ailabsaicloudservice.alicdn.com/hotel/icon/jiudianmianban_fuwushangpintu/wupin/keyongpinlei/zhijin.png',
                  ),
                  'Price' => 
                  array (
                    'title' => '价格（单位：分）',
                    'description' => '价格（单位：分）',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '170',
                  ),
                ),
              ),
              'Message' => 
              array (
                'title' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                'description' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                'type' => 'string',
                'example' => 'success',
              ),
              'RequestId' => 
              array (
                'title' => 'RequestId',
                'description' => '请求id',
                'type' => 'string',
                'example' => '0EC7*726E',
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
            'errorCode' => 'InvalidParameter',
            'errorMessage' => 'The request parameter is invalid',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'ServerError',
            'errorMessage' => 'internal server error',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": 200,\\n  \\"Result\\": {\\n    \\"DialogueList\\": [\\n      {\\n        \\"ServiceId\\": \\"10336\\",\\n        \\"Process\\": 0,\\n        \\"Question\\": \\"无\\",\\n        \\"YesAnswer\\": \\"纸巾1.5元，请问需要么？\\",\\n        \\"NoAnswer\\": \\"对不起，暂时不提供此物品\\",\\n        \\"YesAnswerTemplate\\": \\"4\\",\\n        \\"NoAnswerTemplate\\": \\"4\\",\\n        \\"DialogueId\\": \\"336\\",\\n        \\"UpdateTime\\": 1666164774,\\n        \\"CreateTime\\": 1666164774\\n      }\\n    ],\\n    \\"Type\\": \\"GOODS\\",\\n    \\"Category\\": \\"客用品类\\",\\n    \\"Id\\": 10336,\\n    \\"Name\\": \\"擦鞋布\\",\\n    \\"Status\\": \\"已添加\\",\\n    \\"UpdateTime\\": 1666168828,\\n    \\"Icon\\": \\"https://ailabsaicloudservice.alicdn.com/hotel/icon/jiudianmianban_fuwushangpintu/wupin/keyongpinlei/zhijin.png\\",\\n    \\"Price\\": 170\\n  },\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"0EC7*726E\\"\\n}","type":"json"}]',
      'title' => '酒店场景详情',
    ),
    'InvokeRobotPush' => 
    array (
      'summary' => '推送机器人通知，可用于机器人送物的放与拿时候的通知',
      'path' => '/v1.0/ip/invokeRobotPush',
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
          'AliGenie_Auth_SPI' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'deprecated' => false,
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RoomNo',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '房间号',
            'description' => '房间号',
            'type' => 'string',
            'required' => true,
            'example' => '1211',
          ),
        ),
        1 => 
        array (
          'name' => 'HotelId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '酒店id',
            'description' => '酒店id',
            'type' => 'string',
            'required' => true,
            'example' => 'af7***536',
          ),
        ),
        2 => 
        array (
          'name' => 'PushType',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '推送类型，PUT：放东西、GET：拿东西',
            'description' => '推送类型，PUT：放东西、GET：拿东西',
            'type' => 'string',
            'required' => true,
            'example' => 'GET',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Result<Boolean>',
            'description' => 'Result<Boolean>',
            'type' => 'object',
            'properties' => 
            array (
              'StatusCode' => 
              array (
                'title' => '调用返回码，除约定的SUCCESS_CODE外，其余由服务提供者自定义',
                'description' => '调用返回码，200标识成功',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Result' => 
              array (
                'title' => '服务的实际返回结果',
                'description' => '服务的实际返回结果',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Message' => 
              array (
                'title' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                'description' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                'type' => 'string',
                'example' => 'success',
              ),
              'RequestId' => 
              array (
                'description' => '请求id',
                'type' => 'string',
                'example' => '73C6***E6FA',
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
            'errorCode' => 'InvalidParameter',
            'errorMessage' => 'The request parameter is invalid',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'ServerError',
            'errorMessage' => 'internal server error',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"StatusCode\\": 200,\\n  \\"Result\\": true,\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"73C6***E6FA\\"\\n}","type":"json"}]',
      'title' => '推送机器人通知',
    ),
    'ImportHotelConfig' => 
    array (
      'summary' => '批量导入酒店相关配置。',
      'path' => '/v1.0/ip/importHotelConfig',
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
          'AliGenie_Auth_SPI' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'deprecated' => false,
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'HotelId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '酒店id',
            'type' => 'string',
            'required' => true,
            'example' => 'a7***83',
          ),
        ),
        1 => 
        array (
          'name' => 'ImportHotelConfig',
          'in' => 'formData',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '导入配置',
            'type' => 'object',
            'properties' => 
            array (
              'RcuCustomScenes' => 
              array (
                'description' => 'RCU自定义场景',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'SceneId' => 
                    array (
                      'description' => '场景编码',
                      'type' => 'string',
                      'required' => true,
                      'example' => 'yoga',
                    ),
                    'Name' => 
                    array (
                      'description' => '场景名称',
                      'type' => 'string',
                      'required' => true,
                      'example' => '瑜伽模式',
                    ),
                    'Icon' => 
                    array (
                      'description' => '场景图标',
                      'type' => 'string',
                      'required' => false,
                      'example' => 'http://xxx.com/yyy.png',
                    ),
                    'Description' => 
                    array (
                      'description' => '场景描述',
                      'type' => 'string',
                      'required' => false,
                      'example' => '做瑜伽的酒店场景',
                    ),
                    'CorpusList' => 
                    array (
                      'description' => '触发语料列表',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '触发语料',
                        'type' => 'string',
                        'required' => true,
                        'example' => '打开瑜伽模式',
                      ),
                      'required' => true,
                    ),
                  ),
                  'required' => false,
                ),
                'required' => false,
              ),
            ),
            'required' => true,
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Result<Boolean>',
            'description' => 'Result<Boolean>',
            'type' => 'object',
            'properties' => 
            array (
              'StatusCode' => 
              array (
                'title' => '调用返回码，除约定的SUCCESS_CODE外，其余由服务提供者自定义',
                'description' => '调用返回码，除约定的SUCCESS_CODE外，其余由服务提供者自定义',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Result' => 
              array (
                'title' => '服务的实际返回结果',
                'description' => '服务的实际返回结果',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Message' => 
              array (
                'title' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                'description' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                'type' => 'string',
                'example' => 'success',
              ),
              'RequestId' => 
              array (
                'description' => '阿里云为该请求生成的唯一标识符。',
                'type' => 'string',
                'example' => '0EC7*726E',
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
            'errorCode' => 'InvalidParameter',
            'errorMessage' => 'The request parameter is invalid',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'ServerError',
            'errorMessage' => 'internal server error',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"StatusCode\\": 200,\\n  \\"Result\\": true,\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"0EC7*726E\\"\\n}","type":"json"}]',
      'title' => '批量导入酒店配置',
    ),
    'ImportRoomControlDevices' => 
    array (
      'summary' => '导入房间的客控设备列表',
      'path' => '/v1.0/ip/importRoomControlDevices',
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
          'AliGenie_Auth_SPI' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
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
          'name' => 'HotelId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '酒店id',
            'description' => '酒店id',
            'type' => 'string',
            'required' => true,
            'example' => 'vdgrefds',
          ),
        ),
        1 => 
        array (
          'name' => 'RoomNo',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '房间号',
            'description' => '房间号',
            'type' => 'string',
            'required' => true,
            'example' => '1211',
          ),
        ),
        2 => 
        array (
          'name' => 'LocationDevices',
          'in' => 'formData',
          'style' => 'json',
          'schema' => 
          array (
            'title' => '导入的位置、设备列表',
            'description' => '导入的位置、设备列表',
            'type' => 'array',
            'items' => 
            array (
              'description' => '位置信息及设备信息',
              'type' => 'object',
              'properties' => 
              array (
                'Location' => 
                array (
                  'description' => '位置信息',
                  'type' => 'string',
                  'required' => true,
                  'example' => 'room',
                ),
                'LocationName' => 
                array (
                  'description' => '位置名称',
                  'type' => 'string',
                  'required' => false,
                  'example' => '房间',
                ),
                'Devices' => 
                array (
                  'description' => '位置下的设备列表',
                  'type' => 'array',
                  'items' => 
                  array (
                    'description' => '设备信息',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'Name' => 
                      array (
                        'title' => '品类英文',
                        'description' => '设备类型，如

- light：灯
- aircondition：空调',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'light',
                      ),
                      'Number' => 
                      array (
                        'title' => '序列号
rcu试该参数必传',
                        'description' => '设备编号',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'night_light',
                      ),
                      'DeviceName' => 
                      array (
                        'title' => '设备名称',
                        'description' => '设备名称',
                        'type' => 'string',
                        'required' => true,
                        'example' => '小夜灯',
                      ),
                      'ConnectType' => 
                      array (
                        'title' => '设备连接类型：rcu、infrared、mesh
不填默认rcu',
                        'description' => '设备连接类型',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'infrared',
                      ),
                      'Brand' => 
                      array (
                        'title' => '品牌',
                        'description' => '品牌。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '百视通',
                      ),
                      'Province' => 
                      array (
                        'title' => '省份',
                        'description' => '省份',
                        'type' => 'string',
                        'required' => false,
                        'example' => '浙江省',
                      ),
                      'City' => 
                      array (
                        'title' => '城市',
                        'description' => '城市。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '杭州市',
                      ),
                      'ServiceProvider' => 
                      array (
                        'title' => '服务提供商',
                        'description' => '服务提供商',
                        'type' => 'string',
                        'required' => false,
                        'example' => '浙江华数',
                      ),
                      'InfraredIndex' => 
                      array (
                        'title' => '红外码库Index',
                        'description' => '红外码库index',
                        'type' => 'string',
                        'required' => false,
                        'example' => '1',
                      ),
                      'InfraredId' => 
                      array (
                        'title' => '红外码库id',
                        'description' => '红外码库id',
                        'type' => 'string',
                        'required' => false,
                        'example' => '1232',
                      ),
                      'InfraredVersion' => 
                      array (
                        'title' => '红外码库版本号',
                        'description' => '红外码库版本号',
                        'type' => 'string',
                        'required' => false,
                        'example' => '4.0',
                      ),
                      'MultiKeySwitchExt' => 
                      array (
                        'description' => '多键开关配置信息',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'SwitchList' => 
                          array (
                            'description' => '开关按键列表',
                            'type' => 'array',
                            'items' => 
                            array (
                              'description' => '内容',
                              'type' => 'object',
                              'properties' => 
                              array (
                                'DeviceIndex' => 
                                array (
                                  'title' => '设备序号',
                                  'description' => '设备序号',
                                  'type' => 'integer',
                                  'format' => 'int32',
                                  'required' => false,
                                  'example' => '0',
                                ),
                                'Category' => 
                                array (
                                  'title' => '关联的设备品类英文名',
                                  'description' => '关联的设备品类英文名',
                                  'type' => 'string',
                                  'required' => false,
                                  'example' => 'light',
                                ),
                                'Location' => 
                                array (
                                  'title' => '关联的设备位置英文',
                                  'description' => '关联的设备位置英文',
                                  'type' => 'string',
                                  'required' => false,
                                  'example' => 'room',
                                ),
                                'DeviceName' => 
                                array (
                                  'title' => '关联的设备别名',
                                  'description' => '关联的设备别名',
                                  'type' => 'string',
                                  'required' => false,
                                  'example' => '吧台灯',
                                ),
                                'AliasList' => 
                                array (
                                  'title' => '设备多别名列表',
                                  'description' => '子设备的别名列表',
                                  'type' => 'array',
                                  'items' => 
                                  array (
                                    'title' => '设备自定义别名',
                                    'description' => '设备别名',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => '左灯',
                                  ),
                                  'required' => false,
                                ),
                              ),
                              'required' => false,
                            ),
                            'required' => false,
                          ),
                        ),
                        'required' => false,
                      ),
                      'Dn' => 
                      array (
                        'title' => '设备dn码',
                        'description' => '设备dn信息',
                        'type' => 'string',
                        'required' => false,
                        'example' => '3c5****db98',
                      ),
                      'Pk' => 
                      array (
                        'title' => '设备pk',
                        'description' => '设备pk号',
                        'type' => 'string',
                        'required' => false,
                        'example' => '17****26',
                      ),
                      'AliasList' => 
                      array (
                        'title' => '设备多别名列表',
                        'description' => '设备别名列表',
                        'type' => 'array',
                        'items' => 
                        array (
                          'title' => '设备自定义别名',
                          'description' => '设备别名',
                          'type' => 'string',
                          'required' => false,
                          'example' => '夜灯',
                        ),
                        'required' => false,
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
        3 => 
        array (
          'name' => 'EnableInfraredDeviceImport',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '是否支持红外 true 支持红外设备 false 不支持红外设备',
            'description' => 'true：使用接口中传入的红外设备列表覆盖页面配置的红外设备；
false：忽略接口中传入的红外红外设备，保留平台页面配置的红外设备。
默认值为 false',
            'type' => 'string',
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
            'title' => 'Result<Integer>',
            'description' => 'Result<Integer>',
            'type' => 'object',
            'properties' => 
            array (
              'StatusCode' => 
              array (
                'title' => '调用返回码，除约定的SUCCESS_CODE外，其余由服务提供者自定义',
                'description' => '调用返回码，200标识成功',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Result' => 
              array (
                'title' => '服务的实际返回结果',
                'description' => '导入成功的设备数量',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '10',
              ),
              'Message' => 
              array (
                'title' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                'description' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                'type' => 'string',
                'example' => 'success',
              ),
              'Extentions' => 
              array (
                'title' => '扩展字段',
                'description' => '扩展字段',
                'type' => 'object',
                'additionalProperties' => 
                array (
                  'type' => 'any',
                  'example' => 'xxxx',
                  'description' => '扩展信息内容',
                ),
              ),
              'RequestId' => 
              array (
                'description' => '请求id',
                'type' => 'string',
                'example' => 'fdsfregtre',
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
            'errorCode' => 'InvalidParameter',
            'errorMessage' => 'The request parameter is invalid',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'ServerError',
            'errorMessage' => 'internal server error',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"StatusCode\\": 200,\\n  \\"Result\\": 10,\\n  \\"Message\\": \\"success\\",\\n  \\"Extentions\\": {\\n    \\"key\\": \\"xxxx\\"\\n  },\\n  \\"RequestId\\": \\"fdsfregtre\\"\\n}","type":"json"}]',
      'title' => '导入房间的客控设备列表',
      'description' => '批量导入房间被控设备至房间所对应的房型
><notice>暂时只支持纯rcu场景，支持的关联产品为：***方糖R酒店版、IN糖酒店版***></notice>',
    ),
    'ImportRoomGenieScenes' => 
    array (
      'summary' => '批量导入房间内智能智能场景列表。',
      'path' => '/v1.0/ip/importRoomGenieScenes',
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
          'AliGenie_Auth_SPI' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'deprecated' => false,
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'HotelId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '酒店id',
            'type' => 'string',
            'required' => true,
            'example' => 'a7a3***013',
          ),
        ),
        1 => 
        array (
          'name' => 'RoomNo',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '房间号',
            'type' => 'string',
            'required' => true,
            'example' => '1211',
          ),
        ),
        2 => 
        array (
          'name' => 'SceneList',
          'in' => 'formData',
          'style' => 'json',
          'schema' => 
          array (
            'title' => '场景列表',
            'description' => '场景列表',
            'type' => 'array',
            'items' => 
            array (
              'description' => '场景信息。',
              'type' => 'object',
              'properties' => 
              array (
                'SceneName' => 
                array (
                  'title' => '场景名称',
                  'description' => '场景名称',
                  'type' => 'string',
                  'required' => true,
                  'example' => '瑜伽模式',
                ),
                'Description' => 
                array (
                  'title' => '场景描述',
                  'description' => '场景描述',
                  'type' => 'string',
                  'required' => false,
                  'example' => '做瑜伽的模式',
                ),
                'Icon' => 
                array (
                  'title' => '场景图标',
                  'description' => '场景图标',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'http://xxx.com/yyy.png',
                ),
                'Display' => 
                array (
                  'title' => '是否在带屏侧显示',
                  'description' => '是否在带屏侧显示',
                  'type' => 'boolean',
                  'required' => true,
                  'example' => 'true',
                ),
                'TriggerLogical' => 
                array (
                  'title' => '场景触发逻辑(0:条件与,1:条件或)',
                  'description' => '场景触发逻辑(0:条件与,1:条件或)',
                  'type' => 'integer',
                  'format' => 'int32',
                  'required' => true,
                  'example' => '1',
                ),
                'Triggers' => 
                array (
                  'title' => '触发条件',
                  'description' => '触发条件列表',
                  'type' => 'array',
                  'items' => 
                  array (
                    'description' => '触发条件',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'Type' => 
                      array (
                        'title' => '触发类型',
                        'description' => '触发类型',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'example' => '1：语音触发
2：设备触发',
                      ),
                      'CorpusList' => 
                      array (
                        'title' => '触发语料',
                        'description' => '触发语料',
                        'type' => 'array',
                        'items' => 
                        array (
                          'description' => '触发语料',
                          'type' => 'string',
                          'required' => false,
                          'example' => '打开瑜伽模式',
                        ),
                        'required' => false,
                      ),
                      'Device' => 
                      array (
                        'description' => '触发设备',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'Category' => 
                          array (
                            'description' => '设备品类',
                            'type' => 'string',
                            'required' => true,
                            'example' => 'KeyCardSwitch',
                          ),
                          'DeviceNumber' => 
                          array (
                            'description' => '设备编号，即在天猫精灵行业管理平台房型客控品类设置下设备的序列号',
                            'type' => 'string',
                            'required' => true,
                            'example' => '3c5d2ab8f9ec',
                          ),
                          'DeviceIndex' => 
                          array (
                            'description' => '多键开关类设备的设备序号',
                            'type' => 'string',
                            'required' => false,
                            'example' => '0',
                          ),
                        ),
                        'required' => false,
                      ),
                      'AttributeValues' => 
                      array (
                        'description' => '设备触发属性',
                        'type' => 'array',
                        'items' => 
                        array (
                          'description' => '触发属性',
                          'type' => 'object',
                          'properties' => 
                          array (
                            'AttributeName' => 
                            array (
                              'description' => '属性名',
                              'type' => 'string',
                              'required' => true,
                              'example' => 'stateOfMagneticInduction',
                            ),
                            'AttributeValue' => 
                            array (
                              'description' => '属性值',
                              'type' => 'string',
                              'required' => true,
                              'example' => '1',
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
                'Actions' => 
                array (
                  'title' => '执行动作',
                  'description' => '执行动作列表',
                  'type' => 'array',
                  'items' => 
                  array (
                    'description' => '执行动作',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'Type' => 
                      array (
                        'title' => '动作类型',
                        'description' => '执行动作类型',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '1：设备控制
2：音箱播报',
                      ),
                      'Reply' => 
                      array (
                        'title' => '音箱回复内容',
                        'description' => '音箱回复内容',
                        'type' => 'string',
                        'required' => false,
                        'example' => '欢迎光临',
                      ),
                      'Device' => 
                      array (
                        'title' => '执行设备',
                        'description' => '执行设备',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'Category' => 
                          array (
                            'title' => '设备品类',
                            'description' => '设备品类',
                            'type' => 'string',
                            'required' => true,
                            'example' => 'light',
                          ),
                          'DeviceNumber' => 
                          array (
                            'title' => '设备编号',
                            'description' => '设备编号',
                            'type' => 'string',
                            'required' => true,
                            'example' => '3c5d2ab8f9ec',
                          ),
                          'DeviceIndex' => 
                          array (
                            'title' => '多键开关类设备，传入按键序号',
                            'description' => '多键开关类设备，传入按键序号',
                            'type' => 'integer',
                            'format' => 'int32',
                            'required' => false,
                            'example' => '0',
                          ),
                          'Type' => 
                          array (
                            'description' => '设备类型（已废弃）',
                            'type' => 'integer',
                            'format' => 'int32',
                            'required' => false,
                            'example' => '无需填写',
                          ),
                        ),
                        'required' => false,
                      ),
                      'AttributeValues' => 
                      array (
                        'title' => '设备目标属性',
                        'description' => '设备目标属性',
                        'type' => 'array',
                        'items' => 
                        array (
                          'description' => '目标属性',
                          'type' => 'object',
                          'properties' => 
                          array (
                            'AttributeName' => 
                            array (
                              'title' => '属性名',
                              'description' => '属性名',
                              'type' => 'string',
                              'required' => true,
                              'example' => 'powerstate',
                            ),
                            'AttributeValue' => 
                            array (
                              'title' => '属性值',
                              'description' => '属性值',
                              'type' => 'string',
                              'required' => true,
                              'example' => '1',
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
              'required' => false,
            ),
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
            'title' => 'Result<Boolean>',
            'description' => 'Result<Boolean>',
            'type' => 'object',
            'properties' => 
            array (
              'StatusCode' => 
              array (
                'title' => '调用返回码，除约定的SUCCESS_CODE外，其余由服务提供者自定义',
                'description' => '调用返回码，除约定的SUCCESS_CODE外，其余由服务提供者自定义',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Result' => 
              array (
                'title' => '服务的实际返回结果',
                'description' => '服务的实际返回结果',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Message' => 
              array (
                'title' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                'description' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                'type' => 'string',
                'example' => 'success',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '73C6***E6FA',
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
            'errorCode' => 'InvalidParameter',
            'errorMessage' => 'The request parameter is invalid',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'ServerError',
            'errorMessage' => 'internal server error',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"StatusCode\\": 200,\\n  \\"Result\\": true,\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"73C6***E6FA\\"\\n}","type":"json"}]',
      'title' => '导入房间内精灵智能场景',
    ),
    'PageGetHotelRoomDevices' => 
    array (
      'summary' => '根据酒店分页查询房间主控设备',
      'path' => '/v1.0/ip/pageGetHotelRoomDevices',
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
          'AliGenie_Auth_SPI' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'deprecated' => false,
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'HotelId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '酒店id',
            'description' => '酒店id',
            'type' => 'string',
            'required' => true,
            'example' => 'a7***83',
          ),
        ),
        1 => 
        array (
          'name' => 'PageNumber',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '页码',
            'description' => '页码',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'example' => '1',
          ),
        ),
        2 => 
        array (
          'name' => 'PageSize',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '分页大小',
            'description' => '分页大小，默认最大限制20',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
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
            'title' => 'PageResult<List<HotelDeviceInfo>>',
            'description' => 'PageResult<List<HotelDeviceInfo>>',
            'type' => 'object',
            'properties' => 
            array (
              'Page' => 
              array (
                'title' => '翻页参数',
                'description' => '翻页参数',
                'type' => 'object',
                'properties' => 
                array (
                  'PageNumber' => 
                  array (
                    'title' => '页码',
                    'description' => '页码',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                  'PageSize' => 
                  array (
                    'title' => '分页大小',
                    'description' => '分页大小',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '10',
                  ),
                  'Total' => 
                  array (
                    'title' => '总数',
                    'description' => '总数',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '5',
                  ),
                  'TotalPage' => 
                  array (
                    'title' => '总页数',
                    'description' => '总页数',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                  'Start' => 
                  array (
                    'title' => '起始序号',
                    'description' => '起始序号',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '0',
                  ),
                  'End' => 
                  array (
                    'title' => '末尾序号',
                    'description' => '末尾序号',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '4',
                  ),
                  'HasNext' => 
                  array (
                    'title' => '是否还有下一页',
                    'description' => '是否还有下一页',
                    'type' => 'boolean',
                    'example' => 'False',
                  ),
                ),
              ),
              'StatusCode' => 
              array (
                'title' => '调用返回码，除约定的200标识成功外，其余由服务提供者自定义',
                'description' => '调用返回码，除约定的200标识成功外，其余由服务提供者自定义',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Result' => 
              array (
                'title' => '服务的实际返回结果',
                'description' => '服务的实际返回结果',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Mac' => 
                    array (
                      'title' => '设备mac',
                      'description' => '设备mac',
                      'type' => 'string',
                      'example' => 'b4:xx:xx:xx:65:2b',
                    ),
                    'Sn' => 
                    array (
                      'title' => '设备sn',
                      'description' => '设备sn',
                      'type' => 'string',
                      'example' => '1200xxx048',
                    ),
                    'HotelId' => 
                    array (
                      'title' => '酒店id',
                      'description' => '酒店id',
                      'type' => 'string',
                      'example' => 'a7***83',
                    ),
                    'RoomNo' => 
                    array (
                      'title' => '房间号',
                      'description' => '房间号',
                      'type' => 'string',
                      'example' => '2001',
                    ),
                    'OnlineStatus' => 
                    array (
                      'title' => '设备在线状态，1：在线；0：离线',
                      'description' => '设备在线状态，1：在线；0：离线',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '1',
                    ),
                    'FirmwareVersion' => 
                    array (
                      'title' => '设备固件版本号',
                      'description' => '设备固件版本号',
                      'type' => 'string',
                      'example' => 'V21.10.00.313',
                    ),
                  ),
                ),
              ),
              'Message' => 
              array (
                'title' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                'description' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                'type' => 'string',
                'example' => 'success',
              ),
              'Extentions' => 
              array (
                'title' => '扩展字段',
                'description' => '扩展字段',
                'type' => 'object',
                'additionalProperties' => 
                array (
                  'type' => 'any',
                ),
              ),
              'RequestId' => 
              array (
                'title' => '请求参数',
                'description' => '请求参数',
                'type' => 'string',
                'example' => '4EFBDDF4-B19D-526C-8C3D-CD8AB51974EE',
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
            'errorCode' => 'InvalidParameter',
            'errorMessage' => 'The request parameter is invalid',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'ServerError',
            'errorMessage' => 'internal server error',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Page\\": {\\n    \\"PageNumber\\": 1,\\n    \\"PageSize\\": 10,\\n    \\"Total\\": 5,\\n    \\"TotalPage\\": 1,\\n    \\"Start\\": 0,\\n    \\"End\\": 4,\\n    \\"HasNext\\": true\\n  },\\n  \\"StatusCode\\": 200,\\n  \\"Result\\": [\\n    {\\n      \\"Mac\\": \\"b4:xx:xx:xx:65:2b\\",\\n      \\"Sn\\": \\"1200xxx048\\",\\n      \\"HotelId\\": \\"a7***83\\",\\n      \\"RoomNo\\": \\"2001\\",\\n      \\"OnlineStatus\\": 1,\\n      \\"FirmwareVersion\\": \\"V21.10.00.313\\"\\n    }\\n  ],\\n  \\"Message\\": \\"success\\",\\n  \\"Extentions\\": {\\n    \\"key\\": \\"\\"\\n  },\\n  \\"RequestId\\": \\"4EFBDDF4-B19D-526C-8C3D-CD8AB51974EE\\"\\n}","type":"json"}]',
      'title' => '根据酒店分页查询房间主控设备',
    ),
    'QueryRoomControlDevices' => 
    array (
      'summary' => '查询房间客控设备列表，不包含状态等信息',
      'path' => '/v1.0/ip/queryRoomControlDevices',
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
          'AliGenie_Auth_SPI' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
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
          'name' => 'HotelId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '酒店id',
            'type' => 'string',
            'required' => true,
            'example' => 'af7***536',
          ),
        ),
        1 => 
        array (
          'name' => 'RoomNo',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '房间号',
            'type' => 'string',
            'required' => true,
            'example' => '1211',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Result<List<ListHotelMessageTemplate>>',
            'description' => '返回结果对象',
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'title' => '调用返回码，除约定的SUCCESS_CODE外，其余由服务提供者自定义',
                'description' => '调用返回码，除约定的SUCCESS_CODE外，其余由服务提供者自定义',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Result' => 
              array (
                'title' => '服务的实际返回结果',
                'description' => '客控设备列表',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '设备信息',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Location' => 
                    array (
                      'description' => '位置信息，如room',
                      'type' => 'string',
                      'example' => 'room',
                    ),
                    'LocationName' => 
                    array (
                      'description' => '位置名称，如"房间"',
                      'type' => 'string',
                      'example' => '房间',
                    ),
                    'Devices' => 
                    array (
                      'description' => '设备列表',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '设备信息',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'Name' => 
                          array (
                            'description' => '设备类型，如

- light：灯
- aircondition：空调',
                            'type' => 'string',
                            'example' => 'light',
                          ),
                          'Number' => 
                          array (
                            'description' => '设备编号',
                            'type' => 'string',
                            'example' => 'night_light',
                          ),
                          'DeviceName' => 
                          array (
                            'description' => '设备名称，如"小夜灯"',
                            'type' => 'string',
                            'example' => '小夜灯',
                          ),
                          'ConnectType' => 
                          array (
                            'title' => '设备连接类型:rcu/infrared',
                            'description' => '设备连接类型',
                            'type' => 'string',
                            'example' => 'rcu:RCU设备
infrared:红外设备',
                          ),
                          'PK' => 
                          array (
                            'description' => 'Mesh设备三元组的 pid',
                            'type' => 'string',
                            'example' => '50255129',
                          ),
                          'DN' => 
                          array (
                            'description' => 'Mesh设备三元组的 deviceName',
                            'type' => 'string',
                            'example' => '3c5d2ab8f9ec',
                          ),
                          'DeviceStatus' => 
                          array (
                            'description' => '设备状态',
                            'type' => 'string',
                            'example' => '{"powerstate": "1"}',
                          ),
                          'AliasList' => 
                          array (
                            'description' => '设备别名列表',
                            'type' => 'array',
                            'items' => 
                            array (
                              'description' => '设备别名',
                              'type' => 'string',
                              'example' => '卫生间灯',
                            ),
                          ),
                          'MultiKeySwitchExt' => 
                          array (
                            'description' => '多键开关类设备信息',
                            'type' => 'object',
                            'properties' => 
                            array (
                              'SwitchList' => 
                              array (
                                'description' => '开关列表',
                                'type' => 'array',
                                'items' => 
                                array (
                                  'type' => 'object',
                                  'properties' => 
                                  array (
                                    'DeviceIndex' => 
                                    array (
                                      'description' => '多键开关类设备的设备序号',
                                      'type' => 'integer',
                                      'format' => 'int32',
                                      'example' => '1',
                                    ),
                                    'ElementCode' => 
                                    array (
                                      'description' => '多 element 设备对应的 elementCode',
                                      'type' => 'string',
                                      'example' => 'e2',
                                    ),
                                    'Category' => 
                                    array (
                                      'description' => '设备品类',
                                      'type' => 'string',
                                      'example' => 'light',
                                    ),
                                    'Location' => 
                                    array (
                                      'description' => '位置信息',
                                      'type' => 'string',
                                      'example' => 'room',
                                    ),
                                    'DeviceName' => 
                                    array (
                                      'description' => '设备别名',
                                      'type' => 'string',
                                      'example' => '廊灯',
                                    ),
                                    'DeviceStatus' => 
                                    array (
                                      'description' => '设备状态',
                                      'type' => 'string',
                                      'example' => '{
      "powerstate": "0"
}',
                                    ),
                                    'AliasList' => 
                                    array (
                                      'description' => '子设备的别名列表',
                                      'type' => 'array',
                                      'items' => 
                                      array (
                                        'description' => '设备别名',
                                        'type' => 'string',
                                        'example' => '卫生间灯',
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
                ),
              ),
              'Message' => 
              array (
                'title' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                'description' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                'type' => 'string',
                'example' => 'success',
              ),
              'RequestId' => 
              array (
                'description' => '请求id',
                'type' => 'string',
                'example' => 'fdsgfdscvre',
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
            'errorCode' => 'InvalidParameter',
            'errorMessage' => 'The request parameter is invalid',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": 200,\\n  \\"Result\\": [\\n    {\\n      \\"Location\\": \\"room\\",\\n      \\"LocationName\\": \\"房间\\",\\n      \\"Devices\\": [\\n        {\\n          \\"Name\\": \\"light\\",\\n          \\"Number\\": \\"night_light\\",\\n          \\"DeviceName\\": \\"小夜灯\\",\\n          \\"ConnectType\\": \\"rcu:RCU设备\\\\ninfrared:红外设备\\",\\n          \\"PK\\": \\"50255129\\",\\n          \\"DN\\": \\"3c5d2ab8f9ec\\",\\n          \\"DeviceStatus\\": \\"{\\\\\\"powerstate\\\\\\": \\\\\\"1\\\\\\"}\\",\\n          \\"AliasList\\": [\\n            \\"卫生间灯\\"\\n          ],\\n          \\"MultiKeySwitchExt\\": {\\n            \\"SwitchList\\": [\\n              {\\n                \\"DeviceIndex\\": 1,\\n                \\"ElementCode\\": \\"e2\\",\\n                \\"Category\\": \\"light\\",\\n                \\"Location\\": \\"room\\",\\n                \\"DeviceName\\": \\"廊灯\\",\\n                \\"DeviceStatus\\": \\"{\\\\n      \\\\\\"powerstate\\\\\\": \\\\\\"0\\\\\\"\\\\n}\\",\\n                \\"AliasList\\": [\\n                  \\"卫生间灯\\"\\n                ]\\n              }\\n            ]\\n          }\\n        }\\n      ]\\n    }\\n  ],\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"fdsgfdscvre\\"\\n}","type":"json"}]',
      'title' => '查询房间客控设备',
    ),
    'GetHotelRoomDevice' => 
    array (
      'summary' => '查询房间猫精设备信息，如设备mac、sn、在线状态等',
      'path' => '/v1.0/ip/getHotelRoomDevice',
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
          'AliGenie_Auth_SPI' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
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
          'name' => 'HotelId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '酒店id',
            'type' => 'string',
            'required' => true,
            'example' => 'af7***536',
          ),
        ),
        1 => 
        array (
          'name' => 'RoomNo',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '房间号',
            'type' => 'string',
            'required' => true,
            'example' => '1211',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Result<List<ListHotelMessageTemplate>>',
            'description' => '返回结果对象',
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'title' => '调用返回码，除约定的SUCCESS_CODE外，其余由服务提供者自定义',
                'description' => '调用返回码，200标识成功',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Result' => 
              array (
                'title' => '服务的实际返回结果',
                'description' => '猫精设备列表',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '猫精设备信息',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'HotelId' => 
                    array (
                      'description' => '酒店id',
                      'type' => 'string',
                      'example' => 'af7***536',
                    ),
                    'RoomNo' => 
                    array (
                      'description' => '房间号',
                      'type' => 'string',
                      'example' => '1211',
                    ),
                    'Mac' => 
                    array (
                      'description' => '设备mac信息',
                      'type' => 'string',
                      'example' => 'aa:aa:aa:aa:aa:aa',
                    ),
                    'Sn' => 
                    array (
                      'description' => '设备sn信息',
                      'type' => 'string',
                      'example' => 'dsfdsfrgreg',
                    ),
                    'OnlineStatus' => 
                    array (
                      'description' => '设备在线状态

- 1：在线
- 0：离线',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '1',
                    ),
                    'FirmwareVersion' => 
                    array (
                      'description' => '设备固件版本',
                      'type' => 'string',
                      'example' => '1.0.0-release',
                    ),
                  ),
                ),
              ),
              'Message' => 
              array (
                'title' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                'description' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                'type' => 'string',
                'example' => 'success',
              ),
              'RequestId' => 
              array (
                'description' => '请求id',
                'type' => 'string',
                'example' => 'vrehvuifdsgrts',
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
            'errorCode' => 'InvalidParameter',
            'errorMessage' => 'The request parameter is invalid',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": 200,\\n  \\"Result\\": [\\n    {\\n      \\"HotelId\\": \\"af7***536\\",\\n      \\"RoomNo\\": \\"1211\\",\\n      \\"Mac\\": \\"aa:aa:aa:aa:aa:aa\\",\\n      \\"Sn\\": \\"dsfdsfrgreg\\",\\n      \\"OnlineStatus\\": 1,\\n      \\"FirmwareVersion\\": \\"1.0.0-release\\"\\n    }\\n  ],\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"vrehvuifdsgrts\\"\\n}","type":"json"}]',
      'title' => '查询房间猫精设备信息',
    ),
    'ControlRoomDevice' => 
    array (
      'summary' => '酒店房间内红外或Mesh设备控制',
      'path' => '/v1.0/ip/controlRoomDevice',
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
          'AliGenie_Auth_SPI' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'deprecated' => false,
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'HotelId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '酒店id',
            'type' => 'string',
            'required' => true,
            'example' => 'a7***83',
          ),
        ),
        1 => 
        array (
          'name' => 'RoomNo',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '房间号',
            'type' => 'string',
            'required' => true,
            'example' => '1211',
          ),
        ),
        2 => 
        array (
          'name' => 'Cmd',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '指令类型',
            'type' => 'string',
            'required' => true,
            'example' => 'thing.attribute.set
thing.attribute.adjust',
          ),
        ),
        3 => 
        array (
          'name' => 'DeviceNumber',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '设备编号，即在天猫精灵行业管理平台房型客控品类设置下设备的序列号',
            'type' => 'string',
            'required' => true,
            'example' => 'INFRARED49122575595',
          ),
        ),
        4 => 
        array (
          'name' => 'DeviceIndex',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '多键开关类设备的设备序号',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '0',
          ),
        ),
        5 => 
        array (
          'name' => 'Properties',
          'in' => 'formData',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '属性信息。',
            'type' => 'object',
            'required' => true,
            'additionalProperties' => 
            array (
              'type' => 'string',
              'required' => true,
              'example' => '1',
              'description' => 'powerstate',
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
            'title' => 'Result<ControlResponse>',
            'description' => 'Result<ControlResponse>',
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'title' => '调用返回码，除约定的SUCCESS_CODE外，其余由服务提供者自定义',
                'description' => '调用返回码，除约定的SUCCESS_CODE外，其余由服务提供者自定义',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Result' => 
              array (
                'title' => '服务的实际返回结果',
                'description' => '服务的实际返回结果',
                'type' => 'object',
                'properties' => 
                array (
                  'Status' => 
                  array (
                    'description' => '控制结果码',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '200表示成功，其它为失败',
                  ),
                  'Message' => 
                  array (
                    'description' => '控制结果信息',
                    'type' => 'string',
                    'example' => 'success',
                  ),
                ),
              ),
              'Message' => 
              array (
                'title' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                'description' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                'type' => 'string',
                'example' => 'success',
              ),
              'RequestId' => 
              array (
                'title' => '请求id',
                'description' => '请求ID',
                'type' => 'string',
                'example' => '0EC7***726E',
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
            'errorCode' => 'InvalidParameter',
            'errorMessage' => 'The request parameter is invalid',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'ServerError',
            'errorMessage' => 'internal server error',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": 200,\\n  \\"Result\\": {\\n    \\"Status\\": 0,\\n    \\"Message\\": \\"success\\"\\n  },\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"0EC7***726E\\"\\n}","type":"json"}]',
      'title' => '控制房间客控设备',
      'requestParamsDescription' => '><notice>大部分红外设备电源开关是相同的按键码，可能会出现 powerstate 设置为1时，设备实际为关闭动作。></notice>

### 风扇
#### thing.attribute.set
- powerstate: 开关 
    - 0: 关闭
    - 1: 打开

### 空调
#### thing.attribute.set
- powerstate: 开关
    - 0: 关闭
    - 1: 打开
- windspeed: 风速
    - 0~3：风速0级至3级
- targetTemperature: 目标温度
    - 16~30：目标温度，单位摄氏度
- mode: 模式
    - 2：自动模式
    - 9：制冷模式
    - 10：制热模式
    - 12：送风模式
    - 13：除湿模式
    - 14：睡眠模式
    - 38：强效模式
    - 230：节能模式
    - 231：预热模式

### 电视类（电视、电视盒子、投影仪、机顶盒）
#### thing.attribute.set
- powerstate: 开关
    - 0: 关闭
    - 1: 打开
- channelNumber：频道号
    - 0~999: 频道号
- muteMode: 静音模式
    - 0：关闭静音模式
    - 1：打开静音模式

#### thing.attribute.adjust
- volume: 音量
    - 1: 音量加一
    - -1：音量减一',
    ),
    'PushVoiceBoxCommands' => 
    array (
      'summary' => '推送音箱指令',
      'path' => '/v1.0/ip/pushVoiceBoxCommands',
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
          'AliGenie_Auth_SPI' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'deprecated' => false,
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'HotelId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '酒店ID',
            'description' => '酒店ID',
            'type' => 'string',
            'required' => true,
            'example' => 'a4d9a9cfcdef4c39b2b1a9724eae906b',
          ),
        ),
        1 => 
        array (
          'name' => 'RoomNo',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '房间号',
            'description' => '房间号',
            'type' => 'string',
            'required' => true,
            'example' => '111',
          ),
        ),
        2 => 
        array (
          'name' => 'Commands',
          'in' => 'formData',
          'style' => 'json',
          'schema' => 
          array (
            'title' => '命令列表',
            'description' => '命令列表',
            'type' => 'array',
            'items' => 
            array (
              'title' => '',
              'type' => 'object',
              'properties' => 
              array (
                'CommandDomain' => 
                array (
                  'title' => '命名空间',
                  'description' => '命名空间',
                  'type' => 'string',
                  'required' => true,
                  'example' => 'AliGenie.Video.Control',
                ),
                'CommandName' => 
                array (
                  'title' => '指令名称',
                  'description' => '指令名称',
                  'type' => 'string',
                  'required' => true,
                  'example' => 'Pause',
                ),
                'Payload' => 
                array (
                  'title' => '指令参数',
                  'description' => '指令参数',
                  'type' => 'string',
                  'required' => false,
                  'enumValueTitles' => 
                  array (
                  ),
                  'example' => '可为空',
                ),
              ),
              'required' => true,
            ),
            'required' => true,
            'minItems' => 1,
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Result<Boolean>',
            'description' => 'Result<Boolean>',
            'type' => 'object',
            'properties' => 
            array (
              'StatusCode' => 
              array (
                'title' => '调用返回码，除约定的SUCCESS_CODE外，其余由服务提供者自定义',
                'description' => '调用返回码，除约定的SUCCESS_CODE外，其余由服务提供者自定义',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Code' => 
              array (
                'title' => '调用返回码 pop返回使用',
                'description' => '调用返回码 pop返回使用',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Result' => 
              array (
                'title' => '服务的实际返回结果',
                'description' => '服务的实际返回结果',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Message' => 
              array (
                'title' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                'description' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                'type' => 'string',
                'example' => 'null',
              ),
              'RequestId' => 
              array (
                'title' => '',
                'description' => '无',
                'type' => 'string',
                'example' => 'null',
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
            'errorCode' => 'InvalidParameter',
            'errorMessage' => 'The request parameter is invalid',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'ServerError',
            'errorMessage' => 'internal server error',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"StatusCode\\": 200,\\n  \\"Code\\": 200,\\n  \\"Result\\": true,\\n  \\"Message\\": \\"null\\",\\n  \\"RequestId\\": \\"null\\"\\n}","type":"json"}]',
      'title' => '推送音箱指令',
      'requestParamsDescription' => '**commands：**

当前支持的指令
|    /   |  commandDomain   | commandName  | payload  |
|  ----  |  ----  | ----  | ----  |
| 带屏设备暂停指令  | AliGenie.Video.Control  | Pause | 可为空 |
| 无屏设备暂停指令  | AliGenie.System.Control  | Pause  | 可为空 |
| 息屏指令  | AliGenie.Screen  | UnlitScreen  | 可为空 |
| 亮屏指令  | AliGenie.Screen  | LightScreen  | 可为空 |',
    ),
    'SyncDeviceStatusWithAk' => 
    array (
      'summary' => '用于云云RCU对接的客控设备状态同步至猫精侧，猫精侧存储状态信息或者通知设备端更新状态显示',
      'path' => '/v1.0/ip/syncDeviceStatusWithAk',
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
          'AliGenie_Auth_SPI' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'deprecated' => false,
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'HotelId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '酒店id',
            'description' => '酒店id',
            'type' => 'string',
            'required' => true,
            'example' => 'af7***536',
          ),
        ),
        1 => 
        array (
          'name' => 'RoomNo',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '房间号',
            'description' => '房间号',
            'type' => 'string',
            'required' => true,
            'example' => '1211',
          ),
        ),
        2 => 
        array (
          'name' => 'DeviceName',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '设备名称',
            'description' => '设备名称',
            'type' => 'string',
            'required' => false,
            'example' => '床头灯',
          ),
        ),
        3 => 
        array (
          'name' => 'Switch',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '开关值，0：关，1：开',
            'description' => '开关值，0：关，1：开',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'example' => '1',
          ),
        ),
        4 => 
        array (
          'name' => 'CategoryEnName',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '设备的品类英文名称',
            'description' => '设备的品类英文名称',
            'type' => 'string',
            'required' => true,
            'example' => 'light',
          ),
        ),
        5 => 
        array (
          'name' => 'CategoryCnName',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '设备的品类英文名称，选填',
            'description' => '设备的品类英文名称，选填',
            'type' => 'string',
            'required' => false,
            'example' => '灯',
          ),
        ),
        6 => 
        array (
          'name' => 'Number',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '设备序号',
            'description' => '设备序号',
            'type' => 'string',
            'required' => true,
            'example' => 'bedLight',
          ),
        ),
        7 => 
        array (
          'name' => 'Location',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '位置',
            'description' => '位置',
            'type' => 'string',
            'required' => true,
            'example' => 'room',
          ),
        ),
        8 => 
        array (
          'name' => 'LocationCnName',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '位置中文名称，选填',
            'description' => '位置中文名称，选填',
            'type' => 'string',
            'required' => false,
            'example' => '房间',
          ),
        ),
        9 => 
        array (
          'name' => 'mode',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '空调参数，例如制冷、制热模式',
            'description' => '空调模式
- auto：自动
- cold：制冷
- hot：制热',
            'type' => 'string',
            'required' => false,
            'example' => 'auto',
          ),
        ),
        10 => 
        array (
          'name' => 'fanSpeed',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '空调字段，风速',
            'description' => '空调风速，1,2,3分别对应低速、中速、高速',
            'type' => 'string',
            'required' => false,
            'example' => '3',
          ),
        ),
        11 => 
        array (
          'name' => 'temperature',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '空调字段，温度',
            'description' => '空调温度',
            'type' => 'string',
            'required' => false,
            'example' => '22',
          ),
        ),
        12 => 
        array (
          'name' => 'roomTemperature',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '空调字段，当前室温',
            'description' => '室温',
            'type' => 'string',
            'required' => false,
            'example' => '21',
          ),
        ),
        13 => 
        array (
          'name' => 'value',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '窗帘、纱帘字段，开合度',
            'description' => '窗帘开合度，仅窗帘品类使用',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '50',
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
            'title' => 'Result<Boolean>',
            'description' => 'Result<Boolean>',
            'type' => 'object',
            'properties' => 
            array (
              'StatusCode' => 
              array (
                'title' => '调用返回码，除约定的SUCCESS_CODE外，其余由服务提供者自定义',
                'description' => '调用返回码，200标识成功',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Result' => 
              array (
                'title' => '服务的实际返回结果',
                'description' => '服务的实际返回结果，是否成功',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Message' => 
              array (
                'title' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                'description' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                'type' => 'string',
                'example' => 'success',
              ),
              'requestId' => 
              array (
                'description' => '请求id
',
                'type' => 'string',
                'example' => 'F12B6147-5925-19E5-A3AD-E1EE1360F34E',
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
            'errorCode' => 'InvalidParameter',
            'errorMessage' => 'The request parameter is invalid',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'ServerError',
            'errorMessage' => 'internal server error',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"StatusCode\\": 200,\\n  \\"Result\\": true,\\n  \\"Message\\": \\"success\\",\\n  \\"requestId\\": \\"F12B6147-5925-19E5-A3AD-E1EE1360F34E\\"\\n}","type":"json"}]',
      'title' => '客控设备状态同步',
    ),
    'CreateRcuScene' => 
    array (
      'summary' => '创建rcu自定义场景',
      'path' => '/v1.0/ip/createRcuScene',
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
          'AliGenie_Auth_SPI' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'deprecated' => false,
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'HotelId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '酒店id',
            'description' => '酒店id',
            'type' => 'string',
            'required' => true,
            'example' => '520a0c0***5eb',
          ),
        ),
        1 => 
        array (
          'name' => 'SceneId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '场景编码',
            'description' => '场景编码',
            'type' => 'string',
            'required' => true,
            'example' => 'yoga',
          ),
        ),
        2 => 
        array (
          'name' => 'SceneRelationExtDTO',
          'in' => 'formData',
          'style' => 'json',
          'schema' => 
          array (
            'title' => '酒店RCU自定义场景',
            'description' => '酒店RCU自定义场景',
            'type' => 'object',
            'properties' => 
            array (
              'Name' => 
              array (
                'title' => '场景名称',
                'description' => '场景名称',
                'type' => 'string',
                'required' => true,
                'example' => '瑜伽模式',
              ),
              'Icon' => 
              array (
                'title' => '场景图标',
                'description' => '场景图标',
                'type' => 'string',
                'required' => true,
                'example' => 'https://ailabsaicloudservice.alicdn.com/hotel/icon/changjingmoshi/shuimian.png',
              ),
              'Description' => 
              array (
                'title' => '场景描述信息',
                'description' => '场景描述信息',
                'type' => 'string',
                'required' => true,
                'example' => '做瑜伽的酒店场景',
              ),
              'CorpusList' => 
              array (
                'title' => '触发语料',
                'description' => '触发语料(支持多语料，根据需求传递list 例：瑜伽模式、开始瑜伽)',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '触发语料',
                  'type' => 'string',
                  'required' => false,
                  'example' => '瑜伽模式',
                ),
                'required' => true,
              ),
            ),
            'required' => true,
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Result<Boolean>',
            'description' => 'Result<Boolean>',
            'type' => 'object',
            'properties' => 
            array (
              'StatusCode' => 
              array (
                'title' => '调用返回码，除约定的SUCCESS_CODE外，其余由服务提供者自定义',
                'description' => '调用返回码，除约定的SUCCESS_CODE外，其余由服务提供者自定义',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Result' => 
              array (
                'title' => '服务的实际返回结果',
                'description' => '服务的实际返回结果',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Message' => 
              array (
                'title' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                'description' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                'type' => 'string',
                'example' => 'success',
              ),
              'RequestId' => 
              array (
                'title' => '请求id',
                'description' => '请求id',
                'type' => 'string',
                'example' => '844BA5CE-E30A-53CB-8A11-DE1F344C846D',
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
            'errorCode' => 'InvalidParameter',
            'errorMessage' => 'The request parameter is invalid',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'ServerError',
            'errorMessage' => 'internal server error',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"StatusCode\\": 200,\\n  \\"Result\\": true,\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"844BA5CE-E30A-53CB-8A11-DE1F344C846D\\"\\n}","type":"json"}]',
      'title' => '创建rcu自定义场景',
      'description' => '创建rcu自定义场景，请根据请求参数完成创建',
    ),
    'DeleteRcuScene' => 
    array (
      'summary' => '删除酒店rcu自定义场景',
      'path' => '/v1.0/ip/deleteRcuScene',
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
          'AliGenie_Auth_SPI' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'deprecated' => false,
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'HotelId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '酒店id',
            'description' => '酒店id',
            'type' => 'string',
            'required' => true,
            'example' => 'a7a3***013',
          ),
        ),
        1 => 
        array (
          'name' => 'SceneId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '场景编码',
            'description' => '场景编码',
            'type' => 'string',
            'required' => true,
            'example' => 'yoga',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Result<Boolean>',
            'description' => 'Result<Boolean>',
            'type' => 'object',
            'properties' => 
            array (
              'StatusCode' => 
              array (
                'title' => '调用返回码，除约定的SUCCESS_CODE外，其余由服务提供者自定义',
                'description' => '调用返回码，除约定的SUCCESS_CODE外，其余由服务提供者自定义',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Result' => 
              array (
                'title' => '服务的实际返回结果',
                'description' => '服务的实际返回结果',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Message' => 
              array (
                'title' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                'description' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                'type' => 'string',
                'example' => 'success',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '4F61A7B7-409C-525D-AFDB-238A4E88925A',
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
            'errorCode' => 'InvalidParameter',
            'errorMessage' => 'The request parameter is invalid',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'ServerError',
            'errorMessage' => 'internal server error',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"StatusCode\\": 200,\\n  \\"Result\\": true,\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"4F61A7B7-409C-525D-AFDB-238A4E88925A\\"\\n}","type":"json"}]',
      'title' => '删除酒店rcu自定义场景',
      'description' => '删除酒店rcu自定义场景，请按照请求参数执行',
    ),
    'UpdateRcuScene' => 
    array (
      'summary' => '修改rcu自定义场景',
      'path' => '/v1.0/ip/updateRcuScene',
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
          'AliGenie_Auth_SPI' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'deprecated' => false,
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'HotelId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '酒店id',
            'description' => '酒店id',
            'type' => 'string',
            'required' => true,
            'example' => '520a0c0***5eb',
          ),
        ),
        1 => 
        array (
          'name' => 'SceneId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '场景编码',
            'description' => '场景编码',
            'type' => 'string',
            'required' => true,
            'example' => 'yoga',
          ),
        ),
        2 => 
        array (
          'name' => 'SceneRelationExtDTO',
          'in' => 'formData',
          'style' => 'json',
          'schema' => 
          array (
            'title' => '酒店RCU自定义场景',
            'description' => '酒店RCU自定义场景',
            'type' => 'object',
            'properties' => 
            array (
              'Name' => 
              array (
                'title' => '场景名称',
                'description' => '场景名称',
                'type' => 'string',
                'required' => false,
                'example' => '瑜伽模式',
              ),
              'Icon' => 
              array (
                'title' => '场景图标',
                'description' => '场景图标',
                'type' => 'string',
                'required' => false,
                'example' => 'https://ailabsaicloudservice.alicdn.com/hotel/icon/changjingmoshi/shuimian.png',
              ),
              'Description' => 
              array (
                'title' => '场景描述信息',
                'description' => '场景描述信息',
                'type' => 'string',
                'required' => false,
                'example' => '做做瑜伽',
              ),
              'CorpusList' => 
              array (
                'title' => '触发语料',
                'description' => '触发语料（支持多场景，根据需求传递list，会覆盖之前配的触发语料，若都需要配，修改时需都传 例：瑜伽模式、开始瑜伽）',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '触发语料',
                  'type' => 'string',
                  'required' => false,
                  'example' => '开始瑜伽',
                ),
                'required' => false,
              ),
            ),
            'required' => true,
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Result<Boolean>',
            'description' => 'Result<Boolean>',
            'type' => 'object',
            'properties' => 
            array (
              'StatusCode' => 
              array (
                'title' => '调用返回码，除约定的SUCCESS_CODE外，其余由服务提供者自定义',
                'description' => '调用返回码，除约定的SUCCESS_CODE外，其余由服务提供者自定义',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Result' => 
              array (
                'title' => '服务的实际返回结果',
                'description' => '服务的实际返回结果',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Message' => 
              array (
                'title' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                'description' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                'type' => 'string',
                'example' => 'success',
              ),
              'RequestId' => 
              array (
                'description' => '请求id',
                'type' => 'string',
                'example' => '3A680F3A-6672-5A47-AB28-12BBCD80C679',
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
            'errorCode' => 'InvalidParameter',
            'errorMessage' => 'The request parameter is invalid',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'ServerError',
            'errorMessage' => 'internal server error',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"StatusCode\\": 200,\\n  \\"Result\\": true,\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"3A680F3A-6672-5A47-AB28-12BBCD80C679\\"\\n}","type":"json"}]',
      'title' => '修改rcu自定义场景',
      'description' => '修改rcu自定义场景，请根据请求参数修改',
    ),
    'QuerySceneList' => 
    array (
      'summary' => '查询酒店场景列表',
      'path' => '/v1.0/ip/querySceneList',
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
          'AliGenie_Auth_SPI' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'deprecated' => false,
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'HotelId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '酒店id',
            'type' => 'string',
            'required' => true,
            'example' => 'af7***536',
          ),
        ),
        1 => 
        array (
          'name' => 'SceneTypes',
          'in' => 'formData',
          'style' => 'json',
          'schema' => 
          array (
            'title' => '场景集合传递（公共：common；自定义：custom）',
            'description' => '场景集合传递（公共：common；自定义：custom）',
            'type' => 'array',
            'items' => 
            array (
              'description' => 'common 或 custom',
              'type' => 'string',
              'required' => false,
              'example' => 'common',
            ),
            'required' => false,
          ),
        ),
        2 => 
        array (
          'name' => 'SceneStates',
          'in' => 'formData',
          'style' => 'json',
          'schema' => 
          array (
            'title' => '场景状态集合传递（1-已关联，0-未关联）',
            'description' => '场景状态集合传递（1-已关联，0-未关联）',
            'type' => 'array',
            'items' => 
            array (
              'description' => '0 或 1',
              'type' => 'integer',
              'format' => 'int32',
              'required' => false,
              'example' => '1',
            ),
            'required' => false,
          ),
        ),
        3 => 
        array (
          'name' => 'TemplateInfoIds',
          'in' => 'formData',
          'style' => 'json',
          'schema' => 
          array (
            'title' => '房型id',
            'description' => '房型id',
            'type' => 'array',
            'items' => 
            array (
              'description' => '房型id',
              'type' => 'string',
              'required' => false,
              'example' => '999',
            ),
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
            'title' => 'Result<List<HotelSceneWrapperResp>>',
            'description' => 'Result<List<HotelSceneWrapperResp>>',
            'type' => 'object',
            'properties' => 
            array (
              'StatusCode' => 
              array (
                'title' => '调用返回码，除约定的SUCCESS_CODE外，其余由服务提供者自定义',
                'description' => '调用返回码，除约定的SUCCESS_CODE外，其余由服务提供者自定义',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Results' => 
              array (
                'title' => '服务的实际返回结果',
                'description' => '服务的实际返回结果',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '结果列表。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'SceneId' => 
                    array (
                      'title' => '场景id',
                      'description' => '场景id',
                      'type' => 'string',
                      'example' => '73',
                    ),
                    'SceneName' => 
                    array (
                      'title' => '场景名称',
                      'description' => '场景名称',
                      'type' => 'string',
                      'example' => '睡眠模式',
                    ),
                    'Icon' => 
                    array (
                      'title' => '场景图标',
                      'description' => '场景图标',
                      'type' => 'string',
                      'example' => 'https://ailabsaicloudservice.alicdn.com/hotel/icon/changjingmoshi/shuimian.png',
                    ),
                    'SceneSource' => 
                    array (
                      'title' => '场景来源；场景来源；精灵（genie）、外部（external）',
                      'description' => '场景来源；场景来源；精灵（genie）、外部（external）',
                      'type' => 'string',
                      'example' => 'external',
                    ),
                    'SceneType' => 
                    array (
                      'title' => '场景类型：公共：common；自定义：custom',
                      'description' => '场景类型：公共：common；自定义：custom',
                      'type' => 'string',
                      'example' => 'common',
                    ),
                    'SceneState' => 
                    array (
                      'title' => '场景与房型的关联状态（1-已关联，0-未关联，-1-不可关联）',
                      'description' => '场景与房型的关联状态（1-已关联，0-未关联，-1-不可关联）',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '1',
                    ),
                    'UnavailableReason' => 
                    array (
                      'title' => '场景与房型的关联状态为-1（不可关联）的原因',
                      'description' => '场景与房型的关联状态为-1（不可关联）的原因',
                      'type' => 'string',
                      'example' => '不可关联',
                    ),
                    'TemplateInfoDTOList' => 
                    array (
                      'title' => '关联的房型',
                      'description' => '关联的房型',
                      'type' => 'array',
                      'items' => 
                      array (
                        'type' => 'object',
                        'properties' => 
                        array (
                          'Id' => 
                          array (
                            'title' => '房型id',
                            'description' => '房型id',
                            'type' => 'integer',
                            'format' => 'int64',
                            'example' => '6962',
                          ),
                          'Name' => 
                          array (
                            'title' => '房型名称',
                            'description' => '房型名称',
                            'type' => 'string',
                            'example' => '101',
                          ),
                          'Description' => 
                          array (
                            'title' => '描述',
                            'description' => '描述',
                            'type' => 'string',
                            'example' => '房型描述',
                          ),
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'Message' => 
              array (
                'title' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                'description' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                'type' => 'string',
                'example' => 'success',
              ),
              'RequestId' => 
              array (
                'title' => '请求id',
                'description' => '请求id',
                'type' => 'string',
                'example' => 'FAFCD152-4791-5F2F-B0BE-2DC06FD4F05B',
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
            'errorCode' => 'InvalidParameter',
            'errorMessage' => 'The request parameter is invalid',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'ServerError',
            'errorMessage' => 'internal server error',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"StatusCode\\": 200,\\n  \\"Results\\": [\\n    {\\n      \\"SceneId\\": \\"73\\",\\n      \\"SceneName\\": \\"睡眠模式\\",\\n      \\"Icon\\": \\"https://ailabsaicloudservice.alicdn.com/hotel/icon/changjingmoshi/shuimian.png\\",\\n      \\"SceneSource\\": \\"external\\",\\n      \\"SceneType\\": \\"common\\",\\n      \\"SceneState\\": 1,\\n      \\"UnavailableReason\\": \\"不可关联\\",\\n      \\"TemplateInfoDTOList\\": [\\n        {\\n          \\"Id\\": 6962,\\n          \\"Name\\": \\"101\\",\\n          \\"Description\\": \\"房型描述\\"\\n        }\\n      ]\\n    }\\n  ],\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"FAFCD152-4791-5F2F-B0BE-2DC06FD4F05B\\"\\n}","type":"json"}]',
      'title' => '查询酒店场景列表',
      'description' => '查询酒店场景列表，请根据请求参数查询',
    ),
    'ListAllProvinces' => 
    array (
      'summary' => '查询红外使用的省份信息',
      'path' => '/v1.0/ip/listAllProvinces',
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
          'AliGenie_Auth_SPI' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
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
            'title' => 'Result<List<String>>',
            'description' => 'Result<List<String>>',
            'type' => 'object',
            'properties' => 
            array (
              'StatusCode' => 
              array (
                'title' => '调用返回码，除约定的SUCCESS_CODE外，其余由服务提供者自定义',
                'description' => '调用返回码，除约定的SUCCESS_CODE外，其余由服务提供者自定义',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Result' => 
              array (
                'title' => '服务的实际返回结果',
                'description' => '服务的实际返回结果',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '服务的实际返回结果',
                  'type' => 'string',
                  'example' => '浙江省',
                ),
              ),
              'Message' => 
              array (
                'title' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                'description' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                'type' => 'string',
                'example' => 'success',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '00534880-4397-5134-B212-1030B7A37C27',
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
            'errorCode' => 'InvalidParameter',
            'errorMessage' => 'The request parameter is invalid',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'ServerError',
            'errorMessage' => 'internal server error',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"StatusCode\\": 200,\\n  \\"Result\\": [\\n    \\"浙江省\\"\\n  ],\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"00534880-4397-5134-B212-1030B7A37C27\\"\\n}","type":"json"}]',
      'title' => '查询省份',
      'description' => '查询红外使用的省份信息',
    ),
    'ListCitiesByProvince' => 
    array (
      'summary' => '根据省份查询红外使用的城市列表',
      'path' => '/v1.0/ip/listCitiesByProvince',
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
          'AliGenie_Auth_SPI' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'deprecated' => false,
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Province',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '省份',
            'description' => '省份',
            'type' => 'string',
            'required' => true,
            'example' => '北京市',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Result<List<String>>',
            'description' => 'Result<List<String>>',
            'type' => 'object',
            'properties' => 
            array (
              'StatusCode' => 
              array (
                'title' => '调用返回码，除约定的SUCCESS_CODE外，其余由服务提供者自定义',
                'description' => '调用返回码，除约定的SUCCESS_CODE外，其余由服务提供者自定义',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Result' => 
              array (
                'title' => '服务的实际返回结果',
                'description' => '服务的实际返回结果',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '信息列表',
                  'type' => 'string',
                  'example' => '北京市',
                ),
              ),
              'Message' => 
              array (
                'title' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                'description' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                'type' => 'string',
                'example' => 'success',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '860194F7-9593-50EA-8E53-BCEC0D325A00',
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
            'errorCode' => 'InvalidParameter',
            'errorMessage' => 'The request parameter is invalid',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'ServerError',
            'errorMessage' => 'internal server error',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"StatusCode\\": 200,\\n  \\"Result\\": [\\n    \\"北京市\\"\\n  ],\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"860194F7-9593-50EA-8E53-BCEC0D325A00\\"\\n}","type":"json"}]',
      'title' => '查询城市',
      'description' => '根据省份查询红外使用的城市列表',
    ),
    'ListSTBServiceProviders' => 
    array (
      'summary' => '查询服务提供商',
      'path' => '/v1.0/ip/listSTBServiceProviders',
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
          'AliGenie_Auth_SPI' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'deprecated' => false,
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Province',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '省份',
            'description' => '省份',
            'type' => 'string',
            'required' => true,
            'example' => '浙江省',
          ),
        ),
        1 => 
        array (
          'name' => 'City',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '城市',
            'description' => '城市',
            'type' => 'string',
            'required' => true,
            'example' => '杭州市',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Result<Map<String, List<String>>>',
            'description' => 'Result<Map<String, List<String>>>',
            'type' => 'object',
            'properties' => 
            array (
              'StatusCode' => 
              array (
                'title' => '调用返回码，除约定的SUCCESS_CODE外，其余由服务提供者自定义',
                'description' => '调用返回码，除约定的SUCCESS_CODE外，其余由服务提供者自定义',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Result' => 
              array (
                'title' => '服务的实际返回结果',
                'description' => '服务的实际返回结果',
                'type' => 'object',
                'additionalProperties' => 
                array (
                  'type' => 'array',
                  'items' => 
                  array (
                    'type' => 'string',
                    'description' => '返回内容',
                    'example' => '"Z":["浙江华数"]',
                  ),
                  'description' => '服务的实际返回结果',
                ),
              ),
              'Message' => 
              array (
                'title' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                'description' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                'type' => 'string',
                'example' => 'success',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '1036C376-7A37-5A73-BE8B-C6DB40107EC1',
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
            'errorCode' => 'InvalidParameter',
            'errorMessage' => 'The request parameter is invalid',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'ServerError',
            'errorMessage' => 'internal server error',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"StatusCode\\": 200,\\n  \\"Result\\": {\\n    \\"key\\": [\\n      \\"\\\\\\"Z\\\\\\":[\\\\\\"浙江华数\\\\\\"]\\"\\n    ]\\n  },\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"1036C376-7A37-5A73-BE8B-C6DB40107EC1\\"\\n}","type":"json"}]',
      'title' => '查询服务提供商',
    ),
    'ListInfraredDeviceBrands' => 
    array (
      'summary' => '查询红外品牌列表',
      'path' => '/v1.0/ip/listInfraredDeviceBrands',
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
          'AliGenie_Auth_SPI' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'deprecated' => false,
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Category',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '设备名称',
            'description' => '设备名称',
            'type' => 'string',
            'required' => true,
            'example' => '机顶盒',
          ),
        ),
        1 => 
        array (
          'name' => 'ServiceProvider',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '服务提供商（品类为机顶盒时必传）',
            'description' => '服务提供商（品类为机顶盒时必传）',
            'type' => 'string',
            'required' => false,
            'example' => '浙江省电信IPTV',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Result<Map<String, List<String>>>',
            'description' => 'Result<Map<String, List<String>>>',
            'type' => 'object',
            'properties' => 
            array (
              'StatusCode' => 
              array (
                'title' => '调用返回码，除约定的SUCCESS_CODE外，其余由服务提供者自定义',
                'description' => '调用返回码，除约定的SUCCESS_CODE外，其余由服务提供者自定义',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Result' => 
              array (
                'title' => '服务的实际返回结果',
                'description' => '服务的实际返回结果',
                'type' => 'object',
                'additionalProperties' => 
                array (
                  'type' => 'array',
                  'items' => 
                  array (
                    'type' => 'string',
                    'description' => '集合内容',
                    'example' => '"A":["Addsion", "Ambassador"]',
                  ),
                  'description' => '返回的详细信息列表。',
                ),
              ),
              'Message' => 
              array (
                'title' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                'description' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                'type' => 'string',
                'example' => 'success',
              ),
              'RequestId' => 
              array (
                'title' => '请求id',
                'description' => '请求id',
                'type' => 'string',
                'example' => '860194F7-9593-50EA-8E53-BCEC0D325A00',
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
            'errorCode' => 'InvalidParameter',
            'errorMessage' => 'The request parameter is invalid',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'ServerError',
            'errorMessage' => 'internal server error',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"StatusCode\\": 200,\\n  \\"Result\\": {\\n    \\"key\\": [\\n      \\"\\\\\\"A\\\\\\":[\\\\\\"Addsion\\\\\\", \\\\\\"Ambassador\\\\\\"]\\"\\n    ]\\n  },\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"860194F7-9593-50EA-8E53-BCEC0D325A00\\"\\n}","type":"json"}]',
      'title' => '查询红外品牌列表',
    ),
    'ListInfraredRemoteControllers' => 
    array (
      'summary' => '查询红外码库列表',
      'path' => '/v1.0/ip/listInfraredRemoteControllers',
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
          'AliGenie_Auth_SPI' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'deprecated' => false,
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'HotelId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '酒店ID',
            'type' => 'string',
            'required' => true,
            'example' => 'af7***536',
          ),
        ),
        1 => 
        array (
          'name' => 'Province',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '省份
品类为机顶盒时必传',
            'description' => '省份
品类为机顶盒时必传',
            'type' => 'string',
            'required' => false,
            'example' => '浙江省',
          ),
        ),
        2 => 
        array (
          'name' => 'City',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '城市
品类为机顶盒时必传',
            'description' => '城市
品类为机顶盒时必传',
            'type' => 'string',
            'required' => false,
            'example' => '杭州市',
          ),
        ),
        3 => 
        array (
          'name' => 'Category',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '品类',
            'description' => '品类',
            'type' => 'string',
            'required' => true,
            'example' => '机顶盒',
          ),
        ),
        4 => 
        array (
          'name' => 'Brand',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '品牌
品类非机顶盒必填，为机顶盒同时供应商为IPTV时必传',
            'description' => '品牌
品类非机顶盒必填，为机顶盒同时供应商为IPTV时必传',
            'type' => 'string',
            'required' => false,
            'example' => '奥图码',
          ),
        ),
        5 => 
        array (
          'name' => 'ServiceProvider',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '服务提供商
品类为机顶盒时必传',
            'description' => '服务提供商
品类为机顶盒时必传',
            'type' => 'string',
            'required' => false,
            'example' => '浙江省移动IPTV',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Result<List<InfraredControlCodeResp>>',
            'description' => 'Result<List<InfraredControlCodeResp>>',
            'type' => 'object',
            'properties' => 
            array (
              'StatusCode' => 
              array (
                'title' => '调用返回码，除约定的SUCCESS_CODE外，其余由服务提供者自定义',
                'description' => '调用返回码，除约定的SUCCESS_CODE外，其余由服务提供者自定义',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Result' => 
              array (
                'title' => '服务的实际返回结果',
                'description' => '服务的实际返回结果',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '服务的实际返回结果',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Index' => 
                    array (
                      'title' => '当前索引',
                      'description' => '当前索引',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '1',
                    ),
                    'Rid' => 
                    array (
                      'title' => '遥控器编号',
                      'description' => '遥控器编号',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '3747',
                    ),
                    'Version' => 
                    array (
                      'title' => '版本信息',
                      'description' => '版本信息',
                      'type' => 'string',
                      'example' => '4',
                    ),
                  ),
                ),
              ),
              'Message' => 
              array (
                'title' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                'description' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                'type' => 'string',
                'example' => 'success',
              ),
              'RequestId' => 
              array (
                'title' => '请求id',
                'description' => '请求id',
                'type' => 'string',
                'example' => '0C90A059-3653-5356-A78E-8A6BDA606155',
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
            'errorCode' => 'InvalidParameter',
            'errorMessage' => 'The request parameter is invalid',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'ServerError',
            'errorMessage' => 'internal server error',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"StatusCode\\": 200,\\n  \\"Result\\": [\\n    {\\n      \\"Index\\": 1,\\n      \\"Rid\\": 3747,\\n      \\"Version\\": \\"4\\"\\n    }\\n  ],\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"0C90A059-3653-5356-A78E-8A6BDA606155\\"\\n}","type":"json"}]',
      'title' => '查询红外码库列表',
    ),
    'ListCustomQA' => 
    array (
      'summary' => '自定义问答模块下的查询自定义问答列表功能。',
      'path' => '/v1.0/ip/listCustomQA',
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
          'AliGenie_Auth_SPI' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
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
          'name' => 'HotelId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '酒店id',
            'type' => 'string',
            'required' => true,
            'example' => '520a0c0***5eb',
          ),
        ),
        1 => 
        array (
          'name' => 'Keyword',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '关键字（用于模糊查询主问题、附属问题、回答、关键字）',
            'type' => 'string',
            'required' => false,
            'example' => '***',
          ),
        ),
        2 => 
        array (
          'name' => 'Page',
          'in' => 'formData',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '分页参数',
            'type' => 'object',
            'properties' => 
            array (
              'PageNumber' => 
              array (
                'title' => '页码',
                'description' => '页码',
                'type' => 'integer',
                'format' => 'int32',
                'required' => true,
                'example' => '1',
              ),
              'PageSize' => 
              array (
                'title' => '每页size大小',
                'description' => '每页size大小',
                'type' => 'integer',
                'format' => 'int32',
                'required' => true,
                'example' => '10',
              ),
            ),
            'required' => true,
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
            'title' => 'PageResult<List<QAInfoResponse>>',
            'description' => 'PageResult<List<QAInfoResponse>>',
            'type' => 'object',
            'properties' => 
            array (
              'Page' => 
              array (
                'title' => '翻页参数',
                'description' => '翻页参数',
                'type' => 'object',
                'properties' => 
                array (
                  'PageNumber' => 
                  array (
                    'title' => '页码',
                    'description' => '页码',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                  'PageSize' => 
                  array (
                    'title' => '每页size大小',
                    'description' => '每页size大小',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '10',
                  ),
                  'Total' => 
                  array (
                    'description' => '共多少条数据',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '21',
                  ),
                ),
              ),
              'StatusCode' => 
              array (
                'title' => '调用返回码，除约定的SUCCESS_CODE外，其余由服务提供者自定义',
                'description' => '调用返回码，除约定的SUCCESS_CODE外，其余由服务提供者自定义',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Result' => 
              array (
                'title' => '服务的实际返回结果',
                'description' => '服务的实际返回结果',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '返回结果',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'CustomQAId' => 
                    array (
                      'title' => 'qaID',
                      'description' => '自定义问答id',
                      'type' => 'string',
                      'example' => '111',
                    ),
                    'MajorQuestion' => 
                    array (
                      'title' => '主要问题',
                      'description' => '主问题',
                      'type' => 'string',
                      'example' => '***',
                    ),
                    'SupplementaryQuestion' => 
                    array (
                      'title' => '辅助问题',
                      'description' => '附属问题，多个用;隔开',
                      'type' => 'string',
                      'example' => '22;11',
                    ),
                    'Answers' => 
                    array (
                      'title' => '回答，多个回答用;隔开',
                      'description' => '回答，多个回答用;隔开',
                      'type' => 'string',
                      'example' => '22;11',
                    ),
                    'KeyWords' => 
                    array (
                      'title' => '关键字',
                      'description' => '关键字，多个用;隔开',
                      'type' => 'string',
                      'example' => '22;11',
                    ),
                    'HotelId' => 
                    array (
                      'title' => '酒店ID',
                      'description' => '酒店id',
                      'type' => 'string',
                      'example' => 'a7***83',
                    ),
                    'UpdateTime' => 
                    array (
                      'title' => '更新时间',
                      'description' => '更新时间',
                      'type' => 'string',
                      'example' => '2023-01-10 10:01:59',
                    ),
                    'CreateTime' => 
                    array (
                      'title' => '创建时间',
                      'description' => '创建时间',
                      'type' => 'string',
                      'example' => '2023-01-10 10:01:59',
                    ),
                    'Status' => 
                    array (
                      'title' => '状态：0，使用中， 1：删除',
                      'description' => '状态（0：使用中， 1：删除）',
                      'type' => 'integer',
                      'format' => 'int32',
                      'enumValueTitles' => 
                      array (
                        0 => '使用中',
                        1 => '删除',
                      ),
                      'example' => '0',
                    ),
                  ),
                ),
              ),
              'Message' => 
              array (
                'title' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                'description' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                'type' => 'string',
                'example' => 'success',
              ),
              'RequestId' => 
              array (
                'description' => '请求id',
                'type' => 'string',
                'example' => '0EC7***726E
',
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
            'errorCode' => 'InvalidParameter',
            'errorMessage' => 'The request parameter is invalid',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'ServerError',
            'errorMessage' => 'internal server error',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Page\\": {\\n    \\"PageNumber\\": 1,\\n    \\"PageSize\\": 10,\\n    \\"Total\\": 21\\n  },\\n  \\"StatusCode\\": 200,\\n  \\"Result\\": [\\n    {\\n      \\"CustomQAId\\": \\"111\\",\\n      \\"MajorQuestion\\": \\"***\\",\\n      \\"SupplementaryQuestion\\": \\"22;11\\",\\n      \\"Answers\\": \\"22;11\\",\\n      \\"KeyWords\\": \\"22;11\\",\\n      \\"HotelId\\": \\"a7***83\\",\\n      \\"UpdateTime\\": \\"2023-01-10 10:01:59\\",\\n      \\"CreateTime\\": \\"2023-01-10 10:01:59\\",\\n      \\"Status\\": 0\\n    }\\n  ],\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"0EC7***726E\\\\n\\"\\n}","type":"json"}]',
      'title' => '查询自定义问答列表',
    ),
    'AddCustomQA' => 
    array (
      'summary' => '自定义问答模块下的新增自定义问答功能。',
      'path' => '/v1.0/ip/addCustomQA',
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
          'AliGenie_Auth_SPI' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
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
          'name' => 'HotelId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '酒店id',
            'type' => 'string',
            'required' => true,
            'example' => 'a7a3***013',
          ),
        ),
        1 => 
        array (
          'name' => 'MajorQuestion',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '主问题',
            'type' => 'string',
            'required' => false,
            'example' => '***',
          ),
        ),
        2 => 
        array (
          'name' => 'SupplementaryQuestions',
          'in' => 'formData',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '附属问题列表',
            'type' => 'array',
            'items' => 
            array (
              'description' => '附属问题',
              'type' => 'string',
              'required' => false,
              'example' => '***',
            ),
            'required' => false,
          ),
        ),
        3 => 
        array (
          'name' => 'KeyWords',
          'in' => 'formData',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '关键字列表',
            'type' => 'array',
            'items' => 
            array (
              'description' => '关键字',
              'type' => 'string',
              'required' => false,
              'example' => '***',
            ),
            'required' => false,
          ),
        ),
        4 => 
        array (
          'name' => 'Answers',
          'in' => 'formData',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '回答列表',
            'type' => 'array',
            'items' => 
            array (
              'description' => '回答',
              'type' => 'string',
              'required' => false,
              'example' => '***',
            ),
            'required' => false,
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
            'title' => 'Result<Boolean>',
            'description' => 'Result<Boolean>',
            'type' => 'object',
            'properties' => 
            array (
              'StatusCode' => 
              array (
                'title' => '调用返回码，除约定的SUCCESS_CODE外，其余由服务提供者自定义',
                'description' => '调用返回码，除约定的SUCCESS_CODE外，其余由服务提供者自定义',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Result' => 
              array (
                'title' => '服务的实际返回结果',
                'description' => '服务的实际返回结果',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Message' => 
              array (
                'title' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                'description' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                'type' => 'string',
                'example' => 'success',
              ),
              'RequestId' => 
              array (
                'description' => '请求id',
                'type' => 'string',
                'example' => '0EC7***726E',
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
            'errorCode' => 'InvalidParameter',
            'errorMessage' => 'The request parameter is invalid',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'ServerError',
            'errorMessage' => 'internal server error',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"StatusCode\\": 200,\\n  \\"Result\\": true,\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"0EC7***726E\\"\\n}","type":"json"}]',
      'title' => '新增自定义问答',
    ),
    'AddCustomQAV2' => 
    array (
      'summary' => '添加自定义问答V2版本',
      'path' => '/v1.0/ip/addQAV2',
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
          'AliGenie_Auth_SPI' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'deprecated' => false,
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'HotelId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '酒店id',
            'type' => 'string',
            'required' => true,
            'example' => '520a0c0***5eb',
          ),
        ),
        1 => 
        array (
          'name' => 'MajorQuestion',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '主问题',
            'type' => 'string',
            'required' => false,
            'example' => '今天的天气怎么样',
          ),
        ),
        2 => 
        array (
          'name' => 'SupplementaryQuestions',
          'in' => 'formData',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '附属问题列表',
            'type' => 'array',
            'items' => 
            array (
              'description' => '附属问题列表',
              'type' => 'string',
              'required' => false,
              'example' => '室外温度多少',
            ),
            'required' => false,
          ),
        ),
        3 => 
        array (
          'name' => 'KeyWords',
          'in' => 'formData',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '关键字列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '关键字列表',
              'type' => 'string',
              'required' => false,
              'example' => '天气',
            ),
            'required' => false,
          ),
        ),
        4 => 
        array (
          'name' => 'Answers',
          'in' => 'formData',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '答案列表',
            'type' => 'array',
            'items' => 
            array (
              'description' => '答案列表',
              'type' => 'string',
              'required' => false,
              'example' => '你好,您可以再说一遍吗 不好意思我刚才没有听清',
            ),
            'required' => true,
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Result<QAInfoResponse>',
            'description' => 'Result<QAInfoResponse>',
            'type' => 'object',
            'properties' => 
            array (
              'StatusCode' => 
              array (
                'title' => '调用返回码，除约定的SUCCESS_CODE外，其余由服务提供者自定义',
                'description' => '调用返回码，除约定的SUCCESS_CODE外，其余由服务提供者自定义',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'FAFCD152-4791-5F2F-B0BE-2DC06FD4F05B',
              ),
              'Result' => 
              array (
                'title' => '服务的实际返回结果',
                'description' => '服务的实际返回结果',
                'type' => 'object',
                'properties' => 
                array (
                  'QaId' => 
                  array (
                    'title' => 'qaID',
                    'description' => 'qaID',
                    'type' => 'string',
                    'example' => '1',
                  ),
                  'MajorQuestion' => 
                  array (
                    'title' => '主要问题',
                    'description' => '主要问题',
                    'type' => 'string',
                    'example' => '今天天气怎么样',
                  ),
                  'SupplementaryQuestion' => 
                  array (
                    'title' => '辅助问题',
                    'description' => '辅助问题',
                    'type' => 'string',
                    'example' => '室外温度多少',
                  ),
                  'Answers' => 
                  array (
                    'title' => '回答，多个回答用;隔开',
                    'description' => '回答，多个回答用;隔开',
                    'type' => 'string',
                    'example' => '你好,您可以再说一遍吗 不好意思我刚才没有听清',
                  ),
                  'KeyWords' => 
                  array (
                    'title' => '关键字',
                    'description' => '关键字',
                    'type' => 'string',
                    'example' => '天气',
                  ),
                  'HotelId' => 
                  array (
                    'title' => '酒店ID',
                    'description' => '酒店ID',
                    'type' => 'string',
                    'example' => 'a7***83',
                  ),
                  'UpdateTime' => 
                  array (
                    'title' => '更新时间',
                    'description' => '更新时间',
                    'type' => 'string',
                    'example' => '2023-01-10 10:01:59',
                  ),
                  'CreateTime' => 
                  array (
                    'title' => '创建时间',
                    'description' => '创建时间',
                    'type' => 'string',
                    'example' => '2023-01-10 10:01:59',
                  ),
                  'Status' => 
                  array (
                    'title' => '状态：0，使用中， 1：删除',
                    'description' => '状态：0，使用中， 1：删除',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '0',
                  ),
                  'LastOperator' => 
                  array (
                    'title' => '最后操作人',
                    'description' => '最后操作人',
                    'type' => 'string',
                    'example' => '8xxx9',
                  ),
                ),
              ),
              'Message' => 
              array (
                'title' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                'description' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                'type' => 'string',
                'example' => 'success',
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
            'errorCode' => 'InvalidParameter',
            'errorMessage' => 'The request parameter is invalid',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'ServerError',
            'errorMessage' => 'internal server error',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"StatusCode\\": 200,\\n  \\"RequestId\\": \\"FAFCD152-4791-5F2F-B0BE-2DC06FD4F05B\\",\\n  \\"Result\\": {\\n    \\"QaId\\": \\"1\\",\\n    \\"MajorQuestion\\": \\"今天天气怎么样\\",\\n    \\"SupplementaryQuestion\\": \\"室外温度多少\\",\\n    \\"Answers\\": \\"你好,您可以再说一遍吗 不好意思我刚才没有听清\\",\\n    \\"KeyWords\\": \\"天气\\",\\n    \\"HotelId\\": \\"a7***83\\",\\n    \\"UpdateTime\\": \\"2023-01-10 10:01:59\\",\\n    \\"CreateTime\\": \\"2023-01-10 10:01:59\\",\\n    \\"Status\\": 0,\\n    \\"LastOperator\\": \\"8xxx9\\"\\n  },\\n  \\"Message\\": \\"success\\"\\n}","type":"json"}]',
      'title' => '新增自定义问答V2',
      'description' => '返回值有QAId
问答内容和答案是必填内容',
    ),
    'UpdateCustomQA' => 
    array (
      'summary' => '自定义问答模块下的修改自定义问答功能。',
      'path' => '/v1.0/ip/updateCustomQA',
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
          'AliGenie_Auth_SPI' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
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
          'name' => 'CustomQAId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '自定义问答id',
            'type' => 'string',
            'required' => true,
            'example' => '1',
          ),
        ),
        1 => 
        array (
          'name' => 'HotelId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '酒店id',
            'type' => 'string',
            'required' => true,
            'example' => 'af7***536',
          ),
        ),
        2 => 
        array (
          'name' => 'MajorQuestion',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '主问题',
            'type' => 'string',
            'required' => false,
            'example' => '***',
          ),
        ),
        3 => 
        array (
          'name' => 'SupplementaryQuestions',
          'in' => 'formData',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '附属问题列表',
            'type' => 'array',
            'items' => 
            array (
              'description' => '附属问题',
              'type' => 'string',
              'required' => false,
              'example' => '***',
            ),
            'required' => false,
          ),
        ),
        4 => 
        array (
          'name' => 'KeyWords',
          'in' => 'formData',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '关键字列表',
            'type' => 'array',
            'items' => 
            array (
              'description' => '关键字',
              'type' => 'string',
              'required' => false,
              'example' => '***',
            ),
            'required' => false,
          ),
        ),
        5 => 
        array (
          'name' => 'Answers',
          'in' => 'formData',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '回答列表',
            'type' => 'array',
            'items' => 
            array (
              'description' => '回答',
              'type' => 'string',
              'required' => false,
              'example' => '***',
            ),
            'required' => false,
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
            'title' => 'Result<Boolean>',
            'description' => 'Result<Boolean>',
            'type' => 'object',
            'properties' => 
            array (
              'StatusCode' => 
              array (
                'title' => '调用返回码，除约定的SUCCESS_CODE外，其余由服务提供者自定义',
                'description' => '调用返回码，除约定的SUCCESS_CODE外，其余由服务提供者自定义',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Result' => 
              array (
                'title' => '服务的实际返回结果',
                'description' => '服务的实际返回结果',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Message' => 
              array (
                'title' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                'description' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                'type' => 'string',
                'example' => 'success',
              ),
              'RequestId' => 
              array (
                'description' => '请求id',
                'type' => 'string',
                'example' => '73C6***BB3E6FA',
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
            'errorCode' => 'InvalidParameter',
            'errorMessage' => 'The request parameter is invalid',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'ServerError',
            'errorMessage' => 'internal server error',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"StatusCode\\": 200,\\n  \\"Result\\": true,\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"73C6***BB3E6FA\\"\\n}","type":"json"}]',
      'title' => '修改自定义问答',
    ),
    'DeleteCustomQA' => 
    array (
      'summary' => '自定义问答模块下的删除自定义问答功能。',
      'path' => '/v1.0/ip/deleteCustomQA',
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
          'AliGenie_Auth_SPI' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
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
          'name' => 'CustomQAIds',
          'in' => 'formData',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '自定义问答id列表',
            'type' => 'array',
            'items' => 
            array (
              'description' => '自定义问答id',
              'type' => 'string',
              'required' => false,
              'example' => '11',
            ),
            'required' => false,
          ),
        ),
        1 => 
        array (
          'name' => 'HotelId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '酒店ID',
            'type' => 'string',
            'required' => true,
            'example' => 'a7a3***013',
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
            'title' => 'Result<Boolean>',
            'description' => 'Result<Boolean>',
            'type' => 'object',
            'properties' => 
            array (
              'StatusCode' => 
              array (
                'title' => '调用返回码，除约定的SUCCESS_CODE外，其余由服务提供者自定义',
                'description' => '调用返回码，除约定的SUCCESS_CODE外，其余由服务提供者自定义',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Result' => 
              array (
                'title' => '服务的实际返回结果',
                'description' => '服务的实际返回结果',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Message' => 
              array (
                'title' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                'description' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                'type' => 'string',
                'example' => 'success',
              ),
              'RequestId' => 
              array (
                'description' => '请求id',
                'type' => 'string',
                'example' => '73C6***E6FA',
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
            'errorCode' => 'InvalidParameter',
            'errorMessage' => 'The request parameter is invalid',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'ServerError',
            'errorMessage' => 'internal server error',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"StatusCode\\": 200,\\n  \\"Result\\": true,\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"73C6***E6FA\\"\\n}","type":"json"}]',
      'title' => '删除自定义问答',
    ),
    'GetBasicInfoQA' => 
    array (
      'summary' => '通用问答模块下的获取基础信息问答功能。',
      'path' => '/v1.0/ip/getBasicInfoQA',
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
          'AliGenie_Auth_SPI' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
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
          'name' => 'HotelId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '酒店id',
            'description' => '酒店id',
            'type' => 'string',
            'required' => true,
            'example' => 'a7***83',
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
            'title' => 'Result<IntentionQATemplateResponse>',
            'description' => 'Result<IntentionQATemplateResponse>',
            'type' => 'object',
            'properties' => 
            array (
              'StatusCode' => 
              array (
                'title' => '调用返回码，除约定的SUCCESS_CODE外，其余由服务提供者自定义',
                'description' => '调用返回码，除约定的SUCCESS_CODE外，其余由服务提供者自定义',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Result' => 
              array (
                'title' => '服务的实际返回结果',
                'description' => '服务的实际返回结果',
                'type' => 'object',
                'properties' => 
                array (
                  'HotelAddress' => 
                  array (
                    'title' => '酒店地址',
                    'description' => '酒店地址',
                    'type' => 'string',
                    'example' => '杭州市***',
                  ),
                  'PhoneNumber' => 
                  array (
                    'title' => '前台电话',
                    'description' => '前台电话',
                    'type' => 'string',
                    'example' => '123***',
                  ),
                  'CheckInTime' => 
                  array (
                    'title' => '入住时间 格式xx:xx 时分',
                    'description' => '入住时间（格式xx:xx 时分）',
                    'type' => 'string',
                    'example' => '11:11',
                  ),
                  'CheckOutTime' => 
                  array (
                    'title' => '退房时间',
                    'description' => '退房时间（格式xx:xx 时分）',
                    'type' => 'string',
                    'example' => '11:11',
                  ),
                  'WifiName' => 
                  array (
                    'title' => 'wifi名称',
                    'description' => 'wifi名称',
                    'type' => 'string',
                    'example' => '名称***',
                  ),
                  'WifiPassword' => 
                  array (
                    'title' => 'wifi密码',
                    'description' => 'wifi密码',
                    'type' => 'string',
                    'example' => '密码***',
                  ),
                  'HotelMember' => 
                  array (
                    'title' => '酒店会员相关介绍',
                    'description' => '酒店会员相关介绍',
                    'type' => 'string',
                    'example' => '会员***
',
                  ),
                  'HotelService' => 
                  array (
                    'title' => '酒店特色服务相关介绍',
                    'description' => '酒店特色服务相关介绍',
                    'type' => 'string',
                    'example' => '服务***',
                  ),
                  'HotelIntroduction' => 
                  array (
                    'title' => '酒店介绍',
                    'description' => '酒店介绍',
                    'type' => 'string',
                    'example' => '酒店***',
                  ),
                  'ParkingPosition' => 
                  array (
                    'title' => '停车场位置',
                    'description' => '停车场位置',
                    'type' => 'string',
                    'example' => '杭州市***',
                  ),
                  'ParkingExpenses' => 
                  array (
                    'title' => '停车费用，免费停车/收费停车',
                    'description' => '停车费用（免费停车/收费停车）',
                    'type' => 'string',
                    'enumValueTitles' => 
                    array (
                      '收费停车' => '收费停车',
                      '免费停车' => '免费停车',
                    ),
                    'example' => '免费停车',
                    'enum' => 
                    array (
                    ),
                  ),
                ),
              ),
              'Message' => 
              array (
                'title' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                'description' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                'type' => 'string',
                'example' => 'success',
              ),
              'RequestId' => 
              array (
                'description' => '请求id',
                'type' => 'string',
                'example' => '0EC7***726E',
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
            'errorCode' => 'InvalidParameter',
            'errorMessage' => 'The request parameter is invalid',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'ServerError',
            'errorMessage' => 'internal server error',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"StatusCode\\": 200,\\n  \\"Result\\": {\\n    \\"HotelAddress\\": \\"杭州市***\\",\\n    \\"PhoneNumber\\": \\"123***\\",\\n    \\"CheckInTime\\": \\"11:11\\",\\n    \\"CheckOutTime\\": \\"11:11\\",\\n    \\"WifiName\\": \\"名称***\\",\\n    \\"WifiPassword\\": \\"密码***\\",\\n    \\"HotelMember\\": \\"会员***\\\\n\\",\\n    \\"HotelService\\": \\"服务***\\",\\n    \\"HotelIntroduction\\": \\"酒店***\\",\\n    \\"ParkingPosition\\": \\"杭州市***\\",\\n    \\"ParkingExpenses\\": \\"免费停车\\"\\n  },\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"0EC7***726E\\"\\n}","type":"json"}]',
      'title' => '获取基础信息问答',
    ),
    'UpdateBasicInfoQA' => 
    array (
      'summary' => '通用问答模块下的修改基础信息问答功能。',
      'path' => '/v1.0/ip/updateBasicInfoQA',
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
          'AliGenie_Auth_SPI' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
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
          'name' => 'HotelId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '酒店id',
            'type' => 'string',
            'required' => true,
            'example' => 'af7***536
',
          ),
        ),
        1 => 
        array (
          'name' => 'HotelAddress',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '酒店地址',
            'description' => '酒店地址',
            'type' => 'string',
            'required' => true,
            'example' => '浙江省杭州市xxxx',
          ),
        ),
        2 => 
        array (
          'name' => 'PhoneNumber',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '前台电话',
            'description' => '前台电话',
            'type' => 'string',
            'required' => true,
            'example' => '123***',
          ),
        ),
        3 => 
        array (
          'name' => 'CheckInTime',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '入住时间 格式xx:xx 时分',
            'description' => '入住时间（格式xx:xx 时分）',
            'type' => 'string',
            'required' => true,
            'example' => '11:11
',
          ),
        ),
        4 => 
        array (
          'name' => 'CheckOutTime',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '退房时间',
            'description' => '退房时间（格式xx:xx 时分）',
            'type' => 'string',
            'required' => true,
            'example' => '11:11',
          ),
        ),
        5 => 
        array (
          'name' => 'WifiName',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => 'wifi名称',
            'description' => 'wifi名称',
            'type' => 'string',
            'required' => true,
            'example' => '名称***',
          ),
        ),
        6 => 
        array (
          'name' => 'WifiPassword',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => 'wifi密码',
            'description' => 'wifi密码',
            'type' => 'string',
            'required' => true,
            'example' => '密码***',
          ),
        ),
        7 => 
        array (
          'name' => 'HotelMember',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '酒店会员相关介绍',
            'description' => '酒店会员相关介绍',
            'type' => 'string',
            'required' => false,
            'example' => '会员***',
          ),
        ),
        8 => 
        array (
          'name' => 'HotelService',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '酒店特色服务相关介绍',
            'description' => '酒店特色服务相关介绍',
            'type' => 'string',
            'required' => false,
            'example' => '服务***',
          ),
        ),
        9 => 
        array (
          'name' => 'HotelIntroduction',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '酒店介绍',
            'description' => '酒店介绍',
            'type' => 'string',
            'required' => false,
            'example' => '酒店***',
          ),
        ),
        10 => 
        array (
          'name' => 'ParkingPosition',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '停车场位置',
            'description' => '停车场位置',
            'type' => 'string',
            'required' => true,
            'example' => '杭州市xx',
          ),
        ),
        11 => 
        array (
          'name' => 'ParkingExpenses',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '停车费用，免费停车/收费停车',
            'description' => '停车费用（免费停车/收费停车）',
            'type' => 'string',
            'required' => true,
            'example' => '免费停车',
            'enum' => 
            array (
              0 => '免费停车',
              1 => '收费停车',
            ),
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
            'title' => 'Result<Boolean>',
            'description' => 'Result<Boolean>',
            'type' => 'object',
            'properties' => 
            array (
              'StatusCode' => 
              array (
                'title' => '调用返回码，除约定的SUCCESS_CODE外，其余由服务提供者自定义',
                'description' => '调用返回码，除约定的SUCCESS_CODE外，其余由服务提供者自定义',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Result' => 
              array (
                'title' => '服务的实际返回结果',
                'description' => '服务的实际返回结果',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Message' => 
              array (
                'title' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                'description' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                'type' => 'string',
                'example' => 'success',
              ),
              'RequestId' => 
              array (
                'description' => '请求id',
                'type' => 'string',
                'example' => '0EC7***726E
',
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
            'errorCode' => 'InvalidParameter',
            'errorMessage' => 'The request parameter is invalid',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'ServerError',
            'errorMessage' => 'internal server error',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"StatusCode\\": 200,\\n  \\"Result\\": true,\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"0EC7***726E\\\\n\\"\\n}","type":"json"}]',
      'title' => '修改基础信息问答',
    ),
    'ListServiceQA' => 
    array (
      'summary' => '通用问答模块下的查询服务设施问答列表功能。',
      'path' => '/v1.0/ip/listServiceQA',
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
          'AliGenie_Auth_SPI' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
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
          'name' => 'HotelId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '酒店id',
            'description' => '酒店id',
            'type' => 'string',
            'required' => true,
            'example' => 'a7***83',
          ),
        ),
        1 => 
        array (
          'name' => 'Active',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '是否激活',
            'description' => '是否启用（true：开启、false：关闭）',
            'type' => 'boolean',
            'required' => false,
            'enumValueTitles' => 
            array (
              'true' => '开启',
              'false' => '关闭',
            ),
            'example' => 'true',
          ),
        ),
        2 => 
        array (
          'name' => 'Keyword',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '关键字（用于模糊查询问题、例句、回答）',
            'type' => 'string',
            'required' => false,
            'example' => '***',
          ),
        ),
        3 => 
        array (
          'name' => 'Page',
          'in' => 'formData',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '分页参数',
            'type' => 'object',
            'properties' => 
            array (
              'PageNumber' => 
              array (
                'description' => '页码',
                'type' => 'integer',
                'format' => 'int32',
                'required' => false,
                'example' => '1',
              ),
              'PageSize' => 
              array (
                'description' => '每页多少条',
                'type' => 'integer',
                'format' => 'int32',
                'required' => false,
                'example' => '10',
              ),
            ),
            'required' => false,
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
            'title' => 'PageResult<List<IntentionQAResponse>>',
            'description' => 'PageResult<List<IntentionQAResponse>>',
            'type' => 'object',
            'properties' => 
            array (
              'Page' => 
              array (
                'title' => '翻页参数',
                'description' => '翻页参数',
                'type' => 'object',
                'properties' => 
                array (
                  'PageNumber' => 
                  array (
                    'title' => '页码',
                    'description' => '页码',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                  'PageSize' => 
                  array (
                    'title' => '每页size大小',
                    'description' => '每页size大小',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '10',
                  ),
                  'Total' => 
                  array (
                    'description' => '共多少条数据',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '12',
                  ),
                ),
              ),
              'StatusCode' => 
              array (
                'title' => '调用返回码，除约定的SUCCESS_CODE外，其余由服务提供者自定义',
                'description' => '调用返回码，除约定的SUCCESS_CODE外，其余由服务提供者自定义',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Result' => 
              array (
                'title' => '服务的实际返回结果',
                'description' => '服务的实际返回结果',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '返回结果',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'ServiceQAId' => 
                    array (
                      'title' => '通用问答信息',
                      'description' => '服务设施问答id',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1',
                    ),
                    'Question' => 
                    array (
                      'title' => '问题',
                      'description' => '问题',
                      'type' => 'string',
                      'example' => '测试文本
',
                    ),
                    'Answer' => 
                    array (
                      'title' => '答案',
                      'description' => '回答',
                      'type' => 'string',
                      'example' => '***',
                    ),
                    'GmtModified' => 
                    array (
                      'title' => '更新时间',
                      'description' => '更新时间',
                      'type' => 'string',
                      'example' => '2022-07-27 14:06:27
',
                    ),
                    'Active' => 
                    array (
                      'title' => '是否启用',
                      'description' => '是否启用（true：开启、false：关闭）',
                      'type' => 'boolean',
                      'example' => 'true',
                    ),
                    'Templates' => 
                    array (
                      'title' => '例句列表',
                      'description' => '例句列表',
                      'type' => 'string',
                      'example' => '酒店有提供送餐服务吗;酒店能送餐吗;酒店送餐怎么收费
',
                    ),
                  ),
                ),
              ),
              'Message' => 
              array (
                'title' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                'description' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                'type' => 'string',
                'example' => 'success',
              ),
              'RequestId' => 
              array (
                'description' => '请求id',
                'type' => 'string',
                'example' => '0EC7***726E',
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
            'errorCode' => 'InvalidParameter',
            'errorMessage' => 'The request parameter is invalid',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'ServerError',
            'errorMessage' => 'internal server error',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Page\\": {\\n    \\"PageNumber\\": 1,\\n    \\"PageSize\\": 10,\\n    \\"Total\\": 12\\n  },\\n  \\"StatusCode\\": 200,\\n  \\"Result\\": [\\n    {\\n      \\"ServiceQAId\\": 1,\\n      \\"Question\\": \\"测试文本\\\\n\\",\\n      \\"Answer\\": \\"***\\",\\n      \\"GmtModified\\": \\"2022-07-27 14:06:27\\\\n\\",\\n      \\"Active\\": true,\\n      \\"Templates\\": \\"酒店有提供送餐服务吗;酒店能送餐吗;酒店送餐怎么收费\\\\n\\"\\n    }\\n  ],\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"0EC7***726E\\"\\n}","type":"json"}]',
      'title' => '查询服务设施问答列表',
    ),
    'UpdateServiceQA' => 
    array (
      'summary' => '通用问答模块下的修改服务设施问答功能。',
      'path' => '/v1.0/ip/updateServiceQA',
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
          'AliGenie_Auth_SPI' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
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
          'name' => 'HotelId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '酒店id',
            'type' => 'string',
            'required' => true,
            'example' => 'af7***536',
          ),
        ),
        1 => 
        array (
          'name' => 'ServiceQAId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '通用问答信息',
            'description' => '服务设施问答id',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1',
          ),
        ),
        2 => 
        array (
          'name' => 'Answer',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '答案',
            'description' => '回答',
            'type' => 'string',
            'required' => false,
            'example' => '测试',
          ),
        ),
        3 => 
        array (
          'name' => 'isActive',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '是否启用',
            'description' => '是否启用（true：开启、false：关闭）',
            'type' => 'boolean',
            'required' => false,
            'enumValueTitles' => 
            array (
              'true' => '开启',
              'false' => '关闭',
            ),
            'example' => 'true',
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
            'title' => 'Result<Boolean>',
            'description' => 'Result<Boolean>',
            'type' => 'object',
            'properties' => 
            array (
              'StatusCode' => 
              array (
                'title' => '调用返回码，除约定的SUCCESS_CODE外，其余由服务提供者自定义',
                'description' => '调用返回码，除约定的SUCCESS_CODE外，其余由服务提供者自定义',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Result' => 
              array (
                'title' => '服务的实际返回结果',
                'description' => '服务的实际返回结果',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Message' => 
              array (
                'title' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                'description' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                'type' => 'string',
                'example' => 'success',
              ),
              'RequestId' => 
              array (
                'description' => '请求id',
                'type' => 'string',
                'example' => '73C67***6FA
',
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
            'errorCode' => 'InvalidParameter',
            'errorMessage' => 'The request parameter is invalid',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'ServerError',
            'errorMessage' => 'internal server error',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"StatusCode\\": 200,\\n  \\"Result\\": true,\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"73C67***6FA\\\\n\\"\\n}","type":"json"}]',
      'title' => '修改服务设施问答',
    ),
    'AddCartoon' => 
    array (
      'summary' => '增加或者编辑动画',
      'path' => '/v1.0/ip/addCartoon',
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
          'AliGenie_Auth_SPI' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
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
          'name' => 'HotelId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '酒店id',
            'description' => '酒店id',
            'type' => 'string',
            'required' => true,
            'example' => '520a0***eb',
          ),
        ),
        1 => 
        array (
          'name' => 'StartVideoUrl',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '开机动画url',
            'description' => '开机动画url',
            'type' => 'string',
            'required' => true,
            'example' => 'https://***.mp4',
          ),
        ),
        2 => 
        array (
          'name' => 'StartVideoMd5',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '开机动画md5',
            'description' => '开机动画md5',
            'type' => 'string',
            'required' => true,
            'example' => '40c804***697',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Result<Boolean>',
            'description' => 'Result<Boolean>',
            'type' => 'object',
            'properties' => 
            array (
              'StatusCode' => 
              array (
                'title' => '调用返回码，除约定的SUCCESS_CODE外，其余由服务提供者自定义',
                'description' => '调用返回码，除约定的SUCCESS_CODE外，其余由服务提供者自定义',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Result' => 
              array (
                'title' => '服务的实际返回结果',
                'description' => '服务的实际返回结果',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Message' => 
              array (
                'title' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                'description' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                'type' => 'string',
                'example' => 'success',
              ),
              'RequestId' => 
              array (
                'description' => '链路请求id',
                'type' => 'string',
                'example' => '0EC7*726E
',
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
            'errorCode' => 'InvalidParameter',
            'errorMessage' => 'The request parameter is invalid',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'ServerError',
            'errorMessage' => 'internal server error',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"StatusCode\\": 200,\\n  \\"Result\\": true,\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"0EC7*726E\\\\n\\"\\n}","type":"json"}]',
      'title' => '新增或者编辑动画',
      'description' => '请上传MP4格式视频⽂件编解码器：AAC，H.264，分辨率：1280*800,视频时⻓不超过10s，⽂件⼤⼩不超过10MB。上传开机动画文件，完成后下次开机重启两次后生效。',
    ),
    'GetCartoon' => 
    array (
      'summary' => '查询已设置的动画',
      'path' => '/v1.0/ip/getCartoon',
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
          'AliGenie_Auth_SPI' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'deprecated' => false,
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'HotelId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '酒店id',
            'description' => '酒店id',
            'type' => 'string',
            'required' => true,
            'example' => '520a0c0***5eb',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Result<HotelCartoonResponse>',
            'description' => 'Result<HotelCartoonResponse>',
            'type' => 'object',
            'properties' => 
            array (
              'StatusCode' => 
              array (
                'title' => '调用返回码，除约定的SUCCESS_CODE外，其余由服务提供者自定义',
                'description' => '调用返回码，除约定的SUCCESS_CODE外，其余由服务提供者自定义',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Result' => 
              array (
                'title' => '服务的实际返回结果',
                'description' => '服务的实际返回结果',
                'type' => 'object',
                'properties' => 
                array (
                  'StartVideoUrl' => 
                  array (
                    'title' => '开机启动视频',
                    'description' => '开机启动视频',
                    'type' => 'string',
                    'example' => '40c8***97',
                  ),
                  'StartVideoMd5' => 
                  array (
                    'title' => '开机视频md5',
                    'description' => '开机视频md5',
                    'type' => 'string',
                    'example' => 'https://ai***.mp4',
                  ),
                ),
              ),
              'Message' => 
              array (
                'title' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                'description' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                'type' => 'string',
                'example' => 'success',
              ),
              'RequestId' => 
              array (
                'description' => '请求requestId',
                'type' => 'string',
                'example' => '0EC7*726E
',
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
            'errorCode' => 'InvalidParameter',
            'errorMessage' => 'The request parameter is invalid',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'ServerError',
            'errorMessage' => 'internal server error',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"StatusCode\\": 200,\\n  \\"Result\\": {\\n    \\"StartVideoUrl\\": \\"40c8***97\\",\\n    \\"StartVideoMd5\\": \\"https://ai***.mp4\\"\\n  },\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"0EC7*726E\\\\n\\"\\n}","type":"json"}]',
      'title' => '查询已设置的动画',
      'description' => '查询已设置的动画',
    ),
    'DeleteCartoon' => 
    array (
      'summary' => '删除已设置动画',
      'path' => '/v1.0/ip/deleteCartoon',
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
          'AliGenie_Auth_SPI' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'deprecated' => false,
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'HotelId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => ' 酒店id',
            'description' => ' 酒店id',
            'type' => 'string',
            'required' => false,
            'example' => 'a7***83
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
            'title' => 'Result<Boolean>',
            'description' => 'Result<Boolean>',
            'type' => 'object',
            'properties' => 
            array (
              'StatusCode' => 
              array (
                'title' => '调用返回码，除约定的SUCCESS_CODE外，其余由服务提供者自定义',
                'description' => '调用返回码，除约定的SUCCESS_CODE外，其余由服务提供者自定义',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Result' => 
              array (
                'title' => '服务的实际返回结果',
                'description' => '服务的实际返回结果',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Message' => 
              array (
                'title' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                'description' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                'type' => 'string',
                'example' => 'success',
              ),
              'RequestId' => 
              array (
                'description' => '链路请求id',
                'type' => 'string',
                'example' => '0EC7*726E
',
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
            'errorCode' => 'InvalidParameter',
            'errorMessage' => 'The request parameter is invalid',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'ServerError',
            'errorMessage' => 'internal server error',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"StatusCode\\": 200,\\n  \\"Result\\": true,\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"0EC7*726E\\\\n\\"\\n}","type":"json"}]',
      'title' => '删除已设置动画',
      'description' => '删除已设置动画',
    ),
    'GetHotelScreenSaverStyle' => 
    array (
      'summary' => '查询酒店屏保背景的可选样式',
      'path' => '/v1.0/ip/getHotelScreenSaverStyle',
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
          'AliGenie_Auth_SPI' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'deprecated' => false,
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'HotelId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '酒店id',
            'type' => 'string',
            'required' => false,
            'example' => 'af7***536
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
            'title' => 'Result<List<HotelScreenSaverStyle>>',
            'description' => 'Result<List<HotelScreenSaverStyle>>',
            'type' => 'object',
            'properties' => 
            array (
              'StatusCode' => 
              array (
                'title' => '调用返回码，除约定的SUCCESS_CODE外，其余由服务提供者自定义',
                'description' => '调用返回码，除约定的SUCCESS_CODE外，其余由服务提供者自定义',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Result' => 
              array (
                'title' => '服务的实际返回结果',
                'description' => '服务的实际返回结果',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '服务的实际返回结果',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Code' => 
                    array (
                      'title' => '编码code',
                      'description' => '编码code',
                      'type' => 'string',
                      'example' => 'common-weather',
                    ),
                    'CnName' => 
                    array (
                      'title' => '中文名称',
                      'description' => '中文名称',
                      'type' => 'string',
                      'example' => '天气',
                    ),
                    'EnName' => 
                    array (
                      'title' => '英文名称',
                      'description' => '英文名称',
                      'type' => 'string',
                      'example' => 'common-weather',
                    ),
                    'PicUrl' => 
                    array (
                      'title' => '图片链接',
                      'description' => '图片链接',
                      'type' => 'string',
                      'example' => 'https://img.***.png',
                    ),
                  ),
                ),
              ),
              'Message' => 
              array (
                'title' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                'description' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                'type' => 'string',
                'example' => 'success',
              ),
              'RequestId' => 
              array (
                'title' => '请求id',
                'description' => '请求id',
                'type' => 'string',
                'example' => '73C67**6FA
',
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
            'errorCode' => 'InvalidParameter',
            'errorMessage' => 'The request parameter is invalid',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'ServerError',
            'errorMessage' => 'internal server error',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"StatusCode\\": 200,\\n  \\"Result\\": [\\n    {\\n      \\"Code\\": \\"common-weather\\",\\n      \\"CnName\\": \\"天气\\",\\n      \\"EnName\\": \\"common-weather\\",\\n      \\"PicUrl\\": \\"https://img.***.png\\"\\n    }\\n  ],\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"73C67**6FA\\\\n\\"\\n}","type":"json"}]',
      'title' => '查询酒店屏保背景的可选样式',
      'description' => '新增屏保的时候有个screenSaverStyle字段，要用这接口里查出来的code作为基本样式',
    ),
    'AddOrUpdateHotelSetting' => 
    array (
      'summary' => '新增或者更新酒店定制',
      'path' => '/v1.0/ip/addOrUpdateHotelSetting',
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
          'AliGenie_Auth_SPI' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'deprecated' => false,
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'HotelId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '酒店id',
            'description' => '酒店id',
            'type' => 'string',
            'required' => false,
            'example' => 'a7a3***013',
          ),
        ),
        1 => 
        array (
          'name' => 'SettingType',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '设置的类型，带屏展示模式（SCENE），
带屏屏保配置（SCREENSAVER），
带屏首页背景图（HOMEPAGE_PIC）
带屏酒店通知（NOTICE），
夜间模式（NIGHT_MODE）',
            'description' => '设置的类型，带屏展示模式（SCENE），
带屏屏保配置（SCREENSAVER），
带屏首页背景图（HOMEPAGE_PIC）
带屏酒店通知（NOTICE），
夜间模式（NIGHT_MODE）',
            'type' => 'string',
            'required' => false,
            'enumValueTitles' => 
            array (
              'NOTICE' => '带屏酒店通知',
              'NIGHT_MODE' => '夜间模式',
              'SCREENSAVER' => '带屏屏保配置',
              'SCENE' => '带屏展示模式',
              'HOMEPAGE_PIC' => '首页背景图',
            ),
            'example' => 'SCREENSAVER',
          ),
        ),
        2 => 
        array (
          'name' => 'Value',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '配置值',
            'description' => '首页背景图/酒店通知',
            'type' => 'string',
            'required' => false,
            'example' => '首页背景图-https://****.jpg    酒店通知-欢迎入住**酒店～～',
          ),
        ),
        3 => 
        array (
          'name' => 'HotelScreenSaver',
          'in' => 'formData',
          'style' => 'json',
          'schema' => 
          array (
            'title' => '屏保',
            'description' => '屏保',
            'type' => 'object',
            'properties' => 
            array (
              'ScreenSaverStyle' => 
              array (
                'title' => '屏保样式code',
                'description' => '屏保样式code',
                'type' => 'string',
                'required' => false,
                'example' => 'common-weather',
              ),
              'ScreenSaverPicUrl' => 
              array (
                'title' => '屏保图片',
                'description' => '屏保图片',
                'type' => 'string',
                'required' => false,
                'example' => 'https://a****jpg',
              ),
            ),
            'required' => false,
          ),
        ),
        4 => 
        array (
          'name' => 'HotelDeviceModeList',
          'in' => 'formData',
          'style' => 'json',
          'schema' => 
          array (
            'title' => '模式',
            'description' => '模式',
            'type' => 'array',
            'items' => 
            array (
              'description' => '参数值',
              'type' => 'string',
              'required' => false,
              'example' => 'sleep',
            ),
            'required' => false,
          ),
        ),
        5 => 
        array (
          'name' => 'NightMode',
          'in' => 'formData',
          'style' => 'json',
          'schema' => 
          array (
            'title' => '夜间模式',
            'description' => '夜间模式',
            'type' => 'object',
            'properties' => 
            array (
              'Enable' => 
              array (
                'title' => '启用、禁用',
                'description' => '启用、禁用',
                'type' => 'boolean',
                'required' => false,
                'example' => 'true',
              ),
              'Start' => 
              array (
                'title' => '开始时间',
                'description' => '开始时间',
                'type' => 'string',
                'required' => false,
                'example' => '7:00',
              ),
              'End' => 
              array (
                'title' => '结束时间',
                'description' => '结束时间',
                'type' => 'string',
                'required' => false,
                'example' => '22:00',
              ),
              'DefaultVolume' => 
              array (
                'title' => '夜间模式下的默认音量',
                'type' => 'string',
                'required' => false,
              ),
              'DefaultBright' => 
              array (
                'title' => '夜间模式下的默认亮度',
                'type' => 'string',
                'required' => false,
              ),
              'StandbyAction' => 
              array (
                'title' => '休眠时执行，息屏(screenoff)、屏保(screensaver)',
                'description' => '休眠时执行，息屏(screenoff)、屏保(screensaver)',
                'type' => 'string',
                'required' => false,
                'example' => 'screenoff',
              ),
            ),
            'required' => false,
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
            'title' => 'Result<Boolean>',
            'description' => 'Result<Boolean>',
            'type' => 'object',
            'properties' => 
            array (
              'StatusCode' => 
              array (
                'title' => '调用返回码，除约定的SUCCESS_CODE外，其余由服务提供者自定义',
                'description' => '调用返回码，除约定的SUCCESS_CODE外，其余由服务提供者自定义',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Result' => 
              array (
                'title' => '服务的实际返回结果',
                'description' => '服务的实际返回结果',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Message' => 
              array (
                'title' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                'description' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                'type' => 'string',
                'example' => 'success',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '0EC7*726E',
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
            'errorCode' => 'InvalidParameter',
            'errorMessage' => 'The request parameter is invalid',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'ServerError',
            'errorMessage' => 'internal server error',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"StatusCode\\": 200,\\n  \\"Result\\": true,\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"0EC7*726E\\"\\n}","type":"json"}]',
      'title' => '新增或者更新酒店定制',
      'description' => '> 根据入参settingType不同，可以新增或者修改不同的酒店定制配置
> - 首页背景-settingType="HOMEPAGE_PIC"
> - 屏保背景-settingType="SCREENSAVER"
> - 带屏展示模式-settingType="SCENE"
> - 带屏酒店通知-settingType="NOTICE"
> - 夜间模式-settingType="NIGHT_MODE"',
    ),
    'GetHotelSetting' => 
    array (
      'summary' => '查询酒店定制（包含屏保背景、首页背景等等）',
      'path' => '/v1.0/ip/getHotelSetting',
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
          'AliGenie_Auth_SPI' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'deprecated' => false,
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'HotelId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '酒店id',
            'description' => '酒店id',
            'type' => 'string',
            'required' => false,
            'example' => 'af7***536
',
          ),
        ),
        1 => 
        array (
          'name' => 'SettingType',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '设置的类型，带屏展示模式（SCENE），
带屏屏保配置（SCREENSAVER），
带屏首页背景图（HOMEPAGE_PIC）
带屏酒店通知（NOTICE），
夜间模式（NIGHT_MODE）',
            'description' => '设置的类型，带屏展示模式（SCENE），
带屏屏保配置（SCREENSAVER），
带屏首页背景图（HOMEPAGE_PIC）
带屏酒店通知（NOTICE），
夜间模式（NIGHT_MODE）',
            'type' => 'string',
            'required' => false,
            'enumValueTitles' => 
            array (
              'NOTICE' => '带屏酒店通知',
              'NIGHT_MODE' => '夜间模式',
              'SCREENSAVER' => '屏保背景',
              'SCENE' => '带屏展示模式',
              'HOMEPAGE_PIC' => '首页背景图',
            ),
            'example' => 'SCREENSAVER',
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
            'title' => 'Result<HotelSettingInfo>',
            'description' => 'Result<HotelSettingInfo>',
            'type' => 'object',
            'properties' => 
            array (
              'StatusCode' => 
              array (
                'title' => '调用返回码，除约定的SUCCESS_CODE外，其余由服务提供者自定义',
                'description' => '调用返回码，除约定的SUCCESS_CODE外，其余由服务提供者自定义',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Result' => 
              array (
                'title' => '服务的实际返回结果',
                'description' => '服务的实际返回结果',
                'type' => 'object',
                'properties' => 
                array (
                  'HotelId' => 
                  array (
                    'title' => '酒店id',
                    'description' => '酒店id',
                    'type' => 'string',
                    'example' => 'af7***536',
                  ),
                  'SettingType' => 
                  array (
                    'title' => '设置类型',
                    'description' => '设置类型',
                    'type' => 'string',
                    'enumValueTitles' => 
                    array (
                      'SCREENSAVER' => '屏保',
                      'HOMEPAGE_PIC' => '首页背景图',
                    ),
                    'example' => 'SCREENSAVER',
                  ),
                  'Value' => 
                  array (
                    'title' => '对应的值',
                    'description' => '首页背景图/酒店通知',
                    'type' => 'string',
                    'example' => '首页背景图-https://****.jpg    酒店通知-欢迎入住**酒店～～',
                  ),
                  'DeleteToken' => 
                  array (
                    'title' => '是否删除',
                    'description' => '是否删除',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '0',
                  ),
                  'ExtInfo' => 
                  array (
                    'title' => '扩展信息',
                    'description' => '扩展信息',
                    'type' => 'string',
                    'example' => '{}',
                  ),
                  'HotelScreenSaver' => 
                  array (
                    'title' => '屏保对象',
                    'description' => '屏保对象',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'ScreenSaverStyle' => 
                      array (
                        'title' => '屏保样式code',
                        'description' => '屏保样式code',
                        'type' => 'string',
                        'example' => 'common-weather',
                      ),
                      'ScreenSaverPicUrl' => 
                      array (
                        'title' => '屏保图片',
                        'description' => '屏保图片',
                        'type' => 'string',
                        'example' => 'https://a***png',
                      ),
                    ),
                  ),
                  'HotelDeviceModeList' => 
                  array (
                    'title' => '设备模式',
                    'description' => '设备模式',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '场景值',
                      'type' => 'string',
                      'example' => 'sweet',
                    ),
                  ),
                  'NightMode' => 
                  array (
                    'title' => '夜间模式',
                    'description' => '夜间模式',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'Enable' => 
                      array (
                        'title' => '启用、禁用',
                        'description' => '启用、禁用',
                        'type' => 'boolean',
                        'example' => 'true',
                      ),
                      'Start' => 
                      array (
                        'title' => '开始时间',
                        'description' => '开始时间',
                        'type' => 'string',
                        'example' => '07:00',
                      ),
                      'End' => 
                      array (
                        'title' => '结束时间',
                        'description' => '结束时间',
                        'type' => 'string',
                        'example' => '22:00',
                      ),
                      'DefaultVolume' => 
                      array (
                        'title' => '夜间模式下的默认音量',
                        'description' => '夜间模式下的默认音量',
                        'type' => 'string',
                      ),
                      'DefaultBright' => 
                      array (
                        'title' => '夜间模式下的默认亮度',
                        'description' => '夜间模式下的默认亮度',
                        'type' => 'string',
                      ),
                      'StandbyAction' => 
                      array (
                        'title' => '休眠时执行，息屏(screenoff)、屏保(screensaver)',
                        'description' => '休眠时执行，息屏(screenoff)、屏保(screensaver)',
                        'type' => 'string',
                        'example' => 'screenoff',
                      ),
                    ),
                  ),
                ),
              ),
              'Message' => 
              array (
                'title' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                'description' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                'type' => 'string',
                'example' => 'success',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'F7E2****B7C94',
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
            'errorCode' => 'InvalidParameter',
            'errorMessage' => 'The request parameter is invalid',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'ServerError',
            'errorMessage' => 'internal server error',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"StatusCode\\": 200,\\n  \\"Result\\": {\\n    \\"HotelId\\": \\"af7***536\\",\\n    \\"SettingType\\": \\"SCREENSAVER\\",\\n    \\"Value\\": \\"首页背景图-https://****.jpg    酒店通知-欢迎入住**酒店～～\\",\\n    \\"DeleteToken\\": 0,\\n    \\"ExtInfo\\": \\"{}\\",\\n    \\"HotelScreenSaver\\": {\\n      \\"ScreenSaverStyle\\": \\"common-weather\\",\\n      \\"ScreenSaverPicUrl\\": \\"https://a***png\\"\\n    },\\n    \\"HotelDeviceModeList\\": [\\n      \\"sweet\\"\\n    ],\\n    \\"NightMode\\": {\\n      \\"Enable\\": true,\\n      \\"Start\\": \\"07:00\\",\\n      \\"End\\": \\"22:00\\",\\n      \\"DefaultVolume\\": \\"\\",\\n      \\"DefaultBright\\": \\"\\",\\n      \\"StandbyAction\\": \\"screenoff\\"\\n    }\\n  },\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"F7E2****B7C94\\"\\n}","type":"json"}]',
      'title' => '查询酒店定制',
      'description' => '> 根据入参settingType不同，可以查询不同的酒店定制配置
> - 首页背景-settingType="HOMEPAGE_PIC"
> - 屏保背景-settingType="SCREENSAVER"
> - 带屏展示模式-settingType="SCENE"
> - 带屏酒店通知-settingType="NOTICE"
> - 夜间模式-settingType="NIGHT_MODE"',
    ),
    'DeleteHotelSetting' => 
    array (
      'summary' => '删除酒店定制 包含首页背景、屏保背景等等',
      'path' => '/v1.0/ip/deleteHotelSetting',
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
          'AliGenie_Auth_SPI' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'deprecated' => false,
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'HotelId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '酒店id',
            'description' => '酒店id',
            'type' => 'string',
            'required' => false,
            'example' => 'af7***536',
          ),
        ),
        1 => 
        array (
          'name' => 'SettingType',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '设置类型',
            'description' => '设置的类型，带屏展示模式（SCENE），
带屏屏保配置（SCREENSAVER）
带屏首页背景图（HOMEPAGE_PIC）
带屏酒店通知（NOTICE）
夜间模式（NIGHT_MODE）',
            'type' => 'string',
            'required' => false,
            'enumValueTitles' => 
            array (
              'NOTICE' => '带屏酒店通知',
              'NIGHT_MODE' => '夜间模式',
              'SCREENSAVER' => '屏保',
              'SCENE' => '带屏展示模式',
              'HOMEPAGE_PIC' => '首页背景图',
            ),
            'example' => 'SCREENSAVER',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Result<Boolean>',
            'description' => 'Result<Boolean>',
            'type' => 'object',
            'properties' => 
            array (
              'StatusCode' => 
              array (
                'title' => '调用返回码，除约定的SUCCESS_CODE外，其余由服务提供者自定义',
                'description' => '调用返回码，除约定的SUCCESS_CODE外，其余由服务提供者自定义',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Result' => 
              array (
                'title' => '服务的实际返回结果',
                'description' => '服务的实际返回结果',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Message' => 
              array (
                'title' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                'description' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                'type' => 'string',
                'example' => 'success',
              ),
              'RequestId' => 
              array (
                'description' => '请求链路id',
                'type' => 'string',
                'example' => '73C67****BB3E6FA',
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
            'errorCode' => 'InvalidParameter',
            'errorMessage' => 'The request parameter is invalid',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'ServerError',
            'errorMessage' => 'internal server error',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"StatusCode\\": 200,\\n  \\"Result\\": true,\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"73C67****BB3E6FA\\"\\n}","type":"json"}]',
      'title' => '删除酒店定制（屏保背景、首页背景等）',
      'description' => '> 根据入参settingType不同，可以删除不同的酒店定制配置
> - 如果是删除首页背景-settingType="HOMEPAGE_PIC"
> - 删除屏保背景-settingType="SCREENSAVER"
> - 带屏展示模式-settingType="SCENE"
> - 带屏酒店通知-settingType="NOTICE"
> - 夜间模式-settingType="NIGHT_MODE"',
    ),
    'AddOrUpdateWelcomeText' => 
    array (
      'summary' => '设置欢迎语配置',
      'path' => '/v1.0/ip/addOrUpdateWelcomeText',
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
          'AliGenie_Auth_SPI' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
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
          'name' => 'HotelId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '酒店id',
            'description' => '酒店id',
            'type' => 'string',
            'required' => true,
            'example' => 'af7***536',
          ),
        ),
        1 => 
        array (
          'name' => 'WelcomeText',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '欢迎语文本，建议150字以内',
            'description' => '欢迎语文本，150字以内',
            'type' => 'string',
            'required' => true,
            'example' => '尊贵的客人，您好，欢迎入住，我是您的房间智能助理，我可以播放音乐，控制空调、灯光等，也能提供酒店的各种服务，回答酒店相关问题。只需要唤醒后，就能和我开始互动，我的更多能力，可以参考我旁边的立牌使用哦，祝您在本酒店度过一段愉快的入住时光。',
          ),
        ),
        2 => 
        array (
          'name' => 'MusicUrl',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '背景音链接

上传要求：
1. 仅支持采样率16KHz、单声道 .wav格式的文件。（如果您的背景音不是wav格式，
可使用 ffmpeg将其转为wav格式：ffmpeg -i 输入音频 -acodec pcm_s16le -ac 1 -ar 16000 目标.wav）
2. 大小不超过2MB。
3.合成时长超出背景音时长时，背景音将循环合成播放。',
            'description' => '背景音链接

上传要求：
1. 仅支持采样率16KHz、单声道 .wav格式的文件。（如果您的背景音不是wav格式，
可使用 ffmpeg将其转为wav格式：ffmpeg -i 输入音频 -acodec pcm_s16le -ac 1 -ar 16000 目标.wav）
2. 大小不超过2MB。
3.合成时长超出背景音时长时，背景音将循环合成播放。',
            'type' => 'string',
            'required' => true,
            'example' => 'http://ailabsaicloudservice.alicdn.com/tmp/a.wav',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Result<Boolean>',
            'description' => 'Result<Boolean>',
            'type' => 'object',
            'properties' => 
            array (
              'StatusCode' => 
              array (
                'title' => '调用返回码，除约定的SUCCESS_CODE外，其余由服务提供者自定义',
                'description' => '调用返回码，200标识成功',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Result' => 
              array (
                'title' => '服务的实际返回结果',
                'description' => '服务的实际返回结果，这里标识添加或更新是否成功',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Message' => 
              array (
                'title' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                'description' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                'type' => 'string',
                'example' => 'success',
              ),
              'Extentions' => 
              array (
                'title' => '扩展字段',
                'description' => '扩展字段',
                'type' => 'object',
                'additionalProperties' => 
                array (
                  'type' => 'any',
                  'description' => '	
扩展信息',
                ),
              ),
              'RequestId' => 
              array (
                'description' => '请求id。',
                'type' => 'string',
                'example' => '0EC7*726E',
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
            'errorCode' => 'InvalidParameter',
            'errorMessage' => 'The request parameter is invalid',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'ServerError',
            'errorMessage' => 'internal server error',
          ),
        ),
      ),
      'staticInfo' => 
      array (
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"StatusCode\\": 200,\\n  \\"Result\\": true,\\n  \\"Message\\": \\"success\\",\\n  \\"Extentions\\": {\\n    \\"key\\": \\"\\"\\n  },\\n  \\"RequestId\\": \\"0EC7*726E\\"\\n}","type":"json"}]',
      'title' => '设置欢迎语配置',
      'description' => '欢迎语配置，包含播报的tts文本以及背景音：
- 播报文本：可配置成”欢迎入住${hotel}“，带占位符的方式，在推送是带上参数映射表替换对应的占位符
- 背景音链接：
    - 1. 仅支持采样率16KHz、单声道 .wav格式的文件。（如果您的背景音不是wav格式，
可使用 ffmpeg将其转为wav格式：ffmpeg -i 输入音频 -acodec pcm_s16le -ac 
    1 -ar 16000 目标.wav）
    - 2. 大小不超过2MB。
    - 3.合成时长超出背景音时长时，背景音将循环合成播放。',
    ),
    'GetWelcomeTextAndMusic' => 
    array (
      'summary' => '获取欢迎语配置',
      'path' => '/v1.0/ip/getWelcomeTextAndMusic',
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
          'AliGenie_Auth_SPI' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'deprecated' => false,
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'HotelId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '酒店 id',
            'description' => '酒店 id',
            'type' => 'string',
            'required' => true,
            'example' => 'a7a3***013',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Result<WelcomeResp>',
            'description' => 'Result<WelcomeResp>',
            'type' => 'object',
            'properties' => 
            array (
              'StatusCode' => 
              array (
                'title' => '调用返回码，除约定的SUCCESS_CODE外，其余由服务提供者自定义',
                'description' => '调用返回码，200标识成功',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Result' => 
              array (
                'title' => '服务的实际返回结果',
                'description' => '服务的实际返回结果',
                'type' => 'object',
                'properties' => 
                array (
                  'HotelId' => 
                  array (
                    'description' => '酒店id',
                    'type' => 'string',
                    'example' => 'a7***83',
                  ),
                  'Text' => 
                  array (
                    'description' => '欢迎语文本',
                    'type' => 'string',
                    'example' => '尊贵的客人，您好，欢迎入住，我是您的房间智能助理，我可以播放音乐，控制空调、灯光等，也能提供酒店的各种服务，回答酒店相关问题。只需要唤醒后，就能和我开始互动，我的更多能力，可以参考我旁边的立牌使用哦，祝您在本酒店度过一段愉快的入住时光。',
                  ),
                  'MusicUrl' => 
                  array (
                    'description' => '背景音链接',
                    'type' => 'string',
                    'example' => 'http://ailabsaicloudservice.alicdn.com/tmp/a.wav',
                  ),
                ),
              ),
              'Message' => 
              array (
                'title' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                'description' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                'type' => 'string',
                'example' => 'success',
              ),
              'Extentions' => 
              array (
                'title' => '扩展字段',
                'description' => '扩展字段',
                'type' => 'object',
                'additionalProperties' => 
                array (
                  'type' => 'any',
                  'description' => '扩展信息',
                ),
              ),
              'RequestId' => 
              array (
                'description' => '请求id',
                'type' => 'string',
                'example' => '0EC7*726E',
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
            'errorCode' => 'InvalidParameter',
            'errorMessage' => 'The request parameter is invalid',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'ServerError',
            'errorMessage' => 'internal server error',
          ),
        ),
      ),
      'staticInfo' => 
      array (
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"StatusCode\\": 200,\\n  \\"Result\\": {\\n    \\"HotelId\\": \\"a7***83\\",\\n    \\"Text\\": \\"尊贵的客人，您好，欢迎入住，我是您的房间智能助理，我可以播放音乐，控制空调、灯光等，也能提供酒店的各种服务，回答酒店相关问题。只需要唤醒后，就能和我开始互动，我的更多能力，可以参考我旁边的立牌使用哦，祝您在本酒店度过一段愉快的入住时光。\\",\\n    \\"MusicUrl\\": \\"http://ailabsaicloudservice.alicdn.com/tmp/a.wav\\"\\n  },\\n  \\"Message\\": \\"success\\",\\n  \\"Extentions\\": {\\n    \\"key\\": \\"\\"\\n  },\\n  \\"RequestId\\": \\"0EC7*726E\\"\\n}","type":"json"}]',
      'title' => '获取欢迎语配置',
      'description' => '获取欢迎语配置',
    ),
    'ResetWelcomeTextAndMusic' => 
    array (
      'summary' => '重置欢迎语配置',
      'path' => '/v1.0/ip/resetWelcomeTextAndMusic',
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
          'AliGenie_Auth_SPI' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
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
          'name' => 'HotelId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '酒店id',
            'description' => '酒店id',
            'type' => 'string',
            'required' => true,
            'example' => 'af7***536',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Result<Boolean>',
            'description' => 'Result<Boolean>',
            'type' => 'object',
            'properties' => 
            array (
              'StatusCode' => 
              array (
                'title' => '调用返回码，除约定的SUCCESS_CODE外，其余由服务提供者自定义',
                'description' => '调用返回码，200标识成功',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Result' => 
              array (
                'title' => '服务的实际返回结果',
                'description' => '服务的实际返回结果',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Message' => 
              array (
                'title' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                'description' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                'type' => 'string',
                'example' => 'success',
              ),
              'Extentions' => 
              array (
                'title' => '扩展字段',
                'description' => '扩展字段',
                'type' => 'object',
                'additionalProperties' => 
                array (
                  'type' => 'any',
                  'description' => '扩展信息',
                  'example' => ' ',
                ),
              ),
              'RequestId' => 
              array (
                'description' => '请求id',
                'type' => 'string',
                'example' => '0EC7*726E',
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
            'errorCode' => 'InvalidParameter',
            'errorMessage' => 'The request parameter is invalid',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'ServerError',
            'errorMessage' => 'internal server error',
          ),
        ),
      ),
      'staticInfo' => 
      array (
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"StatusCode\\": 200,\\n  \\"Result\\": true,\\n  \\"Message\\": \\"success\\",\\n  \\"Extentions\\": {\\n    \\"key\\": \\" \\"\\n  },\\n  \\"RequestId\\": \\"0EC7*726E\\"\\n}","type":"json"}]',
      'title' => '重置欢迎语配置',
      'description' => '重置欢迎语配置到默认的配置：
- 欢迎语文本：尊贵的客人，您好，欢迎入住，我是您的房间智能助理，我可以播放音乐，控制空调、灯光等，也能提供酒店的各种服务，回答酒店相关问题。只需要唤醒后，就能和我开始互动，我的更多能力，可以参考我旁边的立牌使用哦，祝您在本酒店度过一段愉快的入住时光。
- 背景音链接：http://ailabsaicloudservice.alicdn.com/tmp/a.wav',
    ),
    'PushWelcomeTextAndMusic' => 
    array (
      'summary' => '推送欢迎语播报',
      'path' => '/v1.0/ip/pushWelcomeTextAndMusic',
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
          'AliGenie_Auth_SPI' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'read',
      'deprecated' => false,
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'HotelId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '酒店id',
            'description' => '酒店id',
            'type' => 'string',
            'required' => true,
            'example' => 'af7***536',
          ),
        ),
        1 => 
        array (
          'name' => 'RoomNo',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '房间号',
            'description' => '房间号',
            'type' => 'string',
            'required' => true,
            'example' => '1211',
          ),
        ),
        2 => 
        array (
          'name' => 'TemplateVariable',
          'in' => 'formData',
          'style' => 'json',
          'schema' => 
          array (
            'title' => '参数映射表，例如欢迎语文本中的表达式：${hotelName} 可通过参数映射表的{"hotelName":"智慧酒店"}替换成“智慧酒店”',
            'description' => '参数映射表，例如欢迎语文本中的表达式：${hotelName} 可通过参数映射表的{"hotelName":"智慧酒店"}替换成“智慧酒店”',
            'type' => 'object',
            'required' => false,
            'additionalProperties' => 
            array (
              'type' => 'string',
              'description' => '映射参数，在欢迎语文本存在占位符时需要，例如hotelName',
              'example' => 'hotelName',
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
            'title' => 'Result<Boolean>',
            'description' => 'Result<Boolean>',
            'type' => 'object',
            'properties' => 
            array (
              'StatusCode' => 
              array (
                'title' => '调用返回码，除约定的SUCCESS_CODE外，其余由服务提供者自定义',
                'description' => '调用返回码，200标识为成功',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Result' => 
              array (
                'title' => '服务的实际返回结果',
                'description' => '服务的实际返回结果',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Message' => 
              array (
                'title' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                'description' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                'type' => 'string',
                'example' => 'success',
              ),
              'Extentions' => 
              array (
                'title' => '扩展字段',
                'description' => '扩展字段',
                'type' => 'object',
                'additionalProperties' => 
                array (
                  'type' => 'any',
                  'description' => '扩展信息',
                  'example' => ' ',
                ),
              ),
              'RequestId' => 
              array (
                'description' => '请求id。',
                'type' => 'string',
                'example' => 'F7E2****B7C94',
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
            'errorCode' => 'InvalidParameter',
            'errorMessage' => 'The request parameter is invalid',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'ServerError',
            'errorMessage' => 'internal server error',
          ),
        ),
      ),
      'staticInfo' => 
      array (
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"StatusCode\\": 200,\\n  \\"Result\\": true,\\n  \\"Message\\": \\"success\\",\\n  \\"Extentions\\": {\\n    \\"key\\": \\" \\"\\n  },\\n  \\"RequestId\\": \\"F7E2****B7C94\\"\\n}","type":"json"}]',
      'title' => '推送欢迎语播报',
      'description' => '推送欢迎语播报：
- 欢迎语文本：
    - 未配置欢迎语时会直接使用默认的：”尊贵的客人，您好，欢迎入住，我是您的房间智能助理，我可以播放音乐，控制空调、灯光等，也能提供酒店的各种服务，回答酒店相关问题。只需要唤醒后，就能和我开始互动，我的更多能力，可以参考我旁边的立牌使用哦，祝您在本酒店度过一段愉快的入住时光。“
    - 如欢迎语文本中的表达式：${hotelName} 可通过参数映射表的{"hotelName":"智慧酒店"}替换成“智慧酒店”

- 背景音链接：未配置时会使用默认的：http://ailabsaicloudservice.alicdn.com/tmp/a.wav',
    ),
    'PushWelcome' => 
    array (
      'summary' => '直接推送欢迎语',
      'path' => '/v1.0/ip/pushWelcome',
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
          'AliGenie_Auth_SPI' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'deprecated' => false,
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'HotelId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '酒店id',
            'type' => 'string',
            'required' => true,
            'example' => 'af7***536',
          ),
        ),
        1 => 
        array (
          'name' => 'WelcomeText',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '配置信息 欢迎语文本',
            'description' => '配置信息 欢迎语文本',
            'type' => 'string',
            'required' => true,
            'example' => '尊贵的客人，您好，欢迎入住，我是您的房间智能助理，我可以播放音乐，控制空调、灯光等，也能提供酒店的各种服务，回答酒店相关问题。只需要唤醒后，就能和我开始互动，我的更多能力，可以参考我旁边的立牌使用哦，祝您在本酒店度过一段愉快的入住时光。',
          ),
        ),
        2 => 
        array (
          'name' => 'WelcomeMusicUrl',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '配置信息 欢迎语音乐url',
            'description' => '配置信息 欢迎语音乐url',
            'type' => 'string',
            'required' => false,
            'example' => 'http://ailabsaicloudservice.alicdn.com/tmp/a.wav',
          ),
        ),
        3 => 
        array (
          'name' => 'RoomNo',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '欢迎语推送 房间号',
            'description' => '欢迎语推送 房间号',
            'type' => 'string',
            'required' => true,
            'example' => '1211',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Result<Boolean>',
            'description' => 'Result<Boolean>',
            'type' => 'object',
            'properties' => 
            array (
              'StatusCode' => 
              array (
                'title' => '调用返回码，除约定的SUCCESS_CODE外，其余由服务提供者自定义',
                'description' => '调用返回码，除约定的SUCCESS_CODE外，其余由服务提供者自定义',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Result' => 
              array (
                'title' => '服务的实际返回结果',
                'description' => '服务的实际返回结果',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Message' => 
              array (
                'title' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                'description' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                'type' => 'string',
                'example' => 'success',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '0EC7*726E',
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
            'errorCode' => 'InvalidParameter',
            'errorMessage' => 'The request parameter is invalid',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'ServerError',
            'errorMessage' => 'internal server error',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"StatusCode\\": 200,\\n  \\"Result\\": true,\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"0EC7*726E\\"\\n}","type":"json"}]',
      'title' => '直接推送欢迎语到房间设备',
    ),
    'AddMessageTemplate' => 
    array (
      'summary' => '添加酒店消息模板',
      'path' => '/v1.0/ip/addMessageTemplate',
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
          'AliGenie_Auth_SPI' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
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
          'name' => 'TemplateName',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '消息模板名称',
            'description' => '消息模板名称',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '测试模板',
          ),
        ),
        1 => 
        array (
          'name' => 'TemplateDetail',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '消息模板内容',
            'description' => '消息模板内容',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '这是${hotel}的一个测试模板',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Result<Long>',
            'description' => 'Result<Long>',
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'title' => '状态码',
                'description' => '状态码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Result' => 
              array (
                'title' => '消息模板ID',
                'description' => '消息模板ID',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '11',
              ),
              'Message' => 
              array (
                'title' => '附加信息',
                'description' => '附加信息',
                'type' => 'string',
                'example' => 'success',
              ),
              'RequestId' => 
              array (
                'type' => 'string',
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
            'errorCode' => 'InvalidParameter',
            'errorMessage' => 'The request parameter is invalid.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": 200,\\n  \\"Result\\": 11,\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"\\"\\n}","type":"json"}]',
      'title' => '添加酒店消息模板',
    ),
    'ListHotelMessageTemplate' => 
    array (
      'summary' => '获取酒店消息模板',
      'path' => '/v1.0/ip/listHotelMessageTemplate',
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
          'AliGenie_Auth_SPI' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
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
            'title' => 'Result<List<ListHotelMessageTemplate>>',
            'description' => 'Result<List<ListHotelMessageTemplate>>',
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'title' => '状态码',
                'description' => '状态码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Result' => 
              array (
                'title' => '服务的实际返回结果',
                'description' => '服务的实际返回结果',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'TemplateId' => 
                    array (
                      'title' => '消息模板ID',
                      'description' => '消息模板ID',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1',
                    ),
                    'TemplateDetail' => 
                    array (
                      'title' => '消息模板内容',
                      'description' => '消息模板内容',
                      'type' => 'string',
                      'example' => '这是${hotel}的一个测试模板',
                    ),
                    'TemplateName' => 
                    array (
                      'title' => '消息模板名称',
                      'description' => '消息模板名称',
                      'type' => 'string',
                      'example' => '测试模板',
                    ),
                    'AuditMark' => 
                    array (
                      'title' => '审核备注',
                      'description' => '审核备注',
                      'type' => 'string',
                      'example' => '不通过',
                    ),
                    'AuditStatus' => 
                    array (
                      'title' => '审核状态',
                      'description' => '审核状态',
                      'type' => 'string',
                      'example' => 'COMMIT',
                    ),
                  ),
                ),
              ),
              'Message' => 
              array (
                'title' => '附加信息',
                'description' => '附加信息',
                'type' => 'string',
                'example' => 'success',
              ),
              'RequestId' => 
              array (
                'type' => 'string',
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
            'errorCode' => 'InvalidParameter',
            'errorMessage' => 'The request parameter is invalid',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": 200,\\n  \\"Result\\": [\\n    {\\n      \\"TemplateId\\": 1,\\n      \\"TemplateDetail\\": \\"这是${hotel}的一个测试模板\\",\\n      \\"TemplateName\\": \\"测试模板\\",\\n      \\"AuditMark\\": \\"不通过\\",\\n      \\"AuditStatus\\": \\"COMMIT\\"\\n    }\\n  ],\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"\\"\\n}","type":"json"}]',
      'title' => '获取酒店消息模板',
    ),
    'DeleteMessageTemplate' => 
    array (
      'summary' => '删除消息通知模板',
      'path' => '/v1.0/ip/deleteMessageTemplate',
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
          'AliGenie_Auth_SPI' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'deprecated' => false,
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'TemplateId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '消息模板id',
            'description' => '消息模板id',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '234',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Result<Boolean>',
            'description' => 'Result<Boolean>',
            'type' => 'object',
            'properties' => 
            array (
              'StatusCode' => 
              array (
                'title' => '调用返回码，除约定的SUCCESS_CODE外，其余由服务提供者自定义',
                'description' => '调用返回码，除约定的SUCCESS_CODE外，其余由服务提供者自定义',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Result' => 
              array (
                'title' => '服务的实际返回结果',
                'description' => '服务的实际返回结果',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Message' => 
              array (
                'title' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                'description' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                'type' => 'string',
                'example' => 'success',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => 'F7E2****B7C94',
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
            'errorCode' => 'InvalidParameter',
            'errorMessage' => 'The request parameter is invalid',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'ServerError',
            'errorMessage' => 'internal server error',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"StatusCode\\": 200,\\n  \\"Result\\": true,\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"F7E2****B7C94\\"\\n}","type":"json"}]',
      'title' => '删除通知消息模板',
    ),
    'UpdateMessageTemplate' => 
    array (
      'summary' => '修改编辑消息通知模板',
      'path' => '/v1.0/ip/updateMessageTemplate',
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
          'AliGenie_Auth_SPI' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'deprecated' => false,
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'TemplateId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '模板主键id',
            'description' => '模板主键id',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'example' => '123123',
          ),
        ),
        1 => 
        array (
          'name' => 'TemplateName',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '模板名称',
            'description' => '模板名称',
            'type' => 'string',
            'required' => false,
            'example' => '测试一下',
          ),
        ),
        2 => 
        array (
          'name' => 'TemplateDetail',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '模板详情',
            'description' => '模板详情',
            'type' => 'string',
            'required' => false,
            'example' => '模板的详情',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Result<Boolean>',
            'description' => 'Result<Boolean>',
            'type' => 'object',
            'properties' => 
            array (
              'StatusCode' => 
              array (
                'title' => '调用返回码，除约定的SUCCESS_CODE外，其余由服务提供者自定义',
                'description' => '调用返回码，除约定的SUCCESS_CODE外，其余由服务提供者自定义',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Result' => 
              array (
                'title' => '服务的实际返回结果',
                'description' => '服务的实际返回结果',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Message' => 
              array (
                'title' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                'description' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                'type' => 'string',
                'example' => 'success',
              ),
              'RequestId' => 
              array (
                'title' => '返回的请求id',
                'description' => '返回的请求id',
                'type' => 'string',
                'example' => '43***881',
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
            'errorCode' => 'InvalidParameter',
            'errorMessage' => 'The request parameter is invalid',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'ServerError',
            'errorMessage' => 'internal server error',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"StatusCode\\": 200,\\n  \\"Result\\": true,\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"43***881\\"\\n}","type":"json"}]',
      'title' => '修改消息通知模板',
      'description' => '> 修改消息通知模板
> - 需要查询出模板的templateId 根据templateId然后修改其他参数',
    ),
    'PushHotelMessage' => 
    array (
      'summary' => '推送酒店消息',
      'path' => '/v1.0/ip/pushHotelMessage',
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
          'AliGenie_Auth_SPI' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'write',
      'deprecated' => false,
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'PushHotelMessageReq',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'title' => 'pushHotelMessageReq',
            'description' => 'pushHotelMessageReq',
            'type' => 'object',
            'properties' => 
            array (
              'TemplateId' => 
              array (
                'title' => '消息模板ID',
                'description' => '消息模板ID',
                'type' => 'integer',
                'format' => 'int64',
                'required' => true,
                'docRequired' => true,
                'example' => '1',
              ),
              'HotelId' => 
              array (
                'title' => '酒店ID',
                'description' => '酒店ID',
                'type' => 'string',
                'required' => true,
                'docRequired' => true,
                'example' => 'e6dd44fd16084db8a60d69fd625d9f0f',
              ),
              'RoomNo' => 
              array (
                'title' => '房间号',
                'description' => '房间号',
                'type' => 'string',
                'required' => true,
                'docRequired' => true,
                'example' => '102',
              ),
              'ParamMap' => 
              array (
                'title' => '消息内容参数Map',
                'description' => '消息内容参数Map',
                'type' => 'object',
                'required' => false,
                'additionalProperties' => 
                array (
                  'type' => 'string',
                  'example' => '{"hotel": "aaaa测试酒店"}',
                ),
              ),
            ),
            'required' => true,
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Result<Boolean>',
            'description' => 'Result<Boolean>',
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'title' => '状态码',
                'description' => '状态码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Result' => 
              array (
                'title' => '服务的实际返回结果',
                'description' => '服务的实际返回结果',
                'type' => 'boolean',
              ),
              'Message' => 
              array (
                'title' => '附加信息',
                'description' => '附加信息',
                'type' => 'string',
                'example' => 'success',
              ),
              'RequestId' => 
              array (
                'type' => 'string',
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
            'errorCode' => 'InvalidParameter',
            'errorMessage' => 'The request parameter is invalid',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": 200,\\n  \\"Result\\": true,\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"\\"\\n}","type":"json"}]',
      'title' => '推送酒店自定义消息',
    ),
    'ListTickets' => 
    array (
      'summary' => '查询工单列表。',
      'path' => '/v1.0/ip/listTickets',
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
          'AliGenie_Auth_SPI' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
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
          'name' => 'HotelId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '酒店id',
            'type' => 'string',
            'required' => true,
            'example' => 'af7***536',
          ),
        ),
        1 => 
        array (
          'name' => 'Page',
          'in' => 'formData',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '分页参数',
            'type' => 'object',
            'properties' => 
            array (
              'PageNumber' => 
              array (
                'title' => '页码',
                'description' => '页码',
                'type' => 'integer',
                'format' => 'int32',
                'required' => false,
                'example' => '1',
              ),
              'PageSize' => 
              array (
                'title' => '每页size大小',
                'description' => '每页size大小',
                'type' => 'integer',
                'format' => 'int32',
                'required' => false,
                'example' => '10',
              ),
            ),
            'required' => false,
          ),
        ),
        2 => 
        array (
          'name' => 'StartTime',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '开始时间，字符串格式：yyyy-mm-dd hh24:mm:ss。',
            'type' => 'string',
            'required' => false,
            'example' => '2022-04-08 09:39:00',
          ),
        ),
        3 => 
        array (
          'name' => 'EndTime',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '结束时间，字符串格式：yyyy-mm-dd hh24:mm:ss。',
            'type' => 'string',
            'required' => false,
            'example' => '2022-09-14 14:23:00',
          ),
        ),
        4 => 
        array (
          'name' => 'Status',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '状态：handled： 已处理, waiting：待处理, delayed：延迟处理',
            'type' => 'string',
            'required' => false,
            'enumValueTitles' => 
            array (
              'waiting' => '待处理',
              'handled' => '已处理',
              'delayed' => '延迟处理',
            ),
            'example' => 'waiting',
          ),
        ),
        5 => 
        array (
          'name' => 'RoomNo',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '房间号',
            'description' => '房间号',
            'type' => 'string',
            'required' => false,
            'example' => '1211',
          ),
        ),
        6 => 
        array (
          'name' => 'Type',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '类型',
            'description' => '类型1：""（全部） 2：酒店服务（酒店服务） 3：酒店维修（酒店维修）',
            'type' => 'string',
            'required' => false,
            'enumValueTitles' => 
            array (
              '""' => '全部',
              '酒店服务' => '酒店服务',
              '酒店维修' => '酒店维修',
            ),
            'example' => '""',
          ),
        ),
        7 => 
        array (
          'name' => 'IsNeedCallback',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '是否需要回电',
            'description' => '是否需要回电',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        8 => 
        array (
          'name' => 'IsNeedCharges',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '是否需要收费',
            'description' => '是否需要收费',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        9 => 
        array (
          'name' => 'SortField',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '排序字段',
            'description' => '排序字段',
            'type' => 'string',
            'required' => false,
            'example' => 'gmtCalled',
          ),
        ),
        10 => 
        array (
          'name' => 'IsDesc',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '是否为降序',
            'description' => '是否为降序',
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
          'headers' => 
          array (
          ),
          'schema' => 
          array (
            'title' => 'PageResult<List<LogInfoResponse>>',
            'description' => 'PageResult<List<LogInfoResponse>>',
            'type' => 'object',
            'properties' => 
            array (
              'Page' => 
              array (
                'title' => '翻页参数',
                'description' => '翻页参数',
                'type' => 'object',
                'properties' => 
                array (
                  'PageNumber' => 
                  array (
                    'title' => '页码',
                    'description' => '页码',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                  'PageSize' => 
                  array (
                    'title' => '每页size大小',
                    'description' => '每页size大小',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '10',
                  ),
                  'Total' => 
                  array (
                    'description' => '共多少条数据',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '5',
                  ),
                ),
              ),
              'StatusCode' => 
              array (
                'title' => '调用返回码，除约定的SUCCESS_CODE外，其余由服务提供者自定义',
                'description' => '调用返回码，除约定的SUCCESS_CODE外，其余由服务提供者自定义',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Result' => 
              array (
                'title' => '服务的实际返回结果',
                'description' => '服务的实际返回结果',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '服务的实际返回结果',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Id' => 
                    array (
                      'title' => '主键',
                      'description' => '主键',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '45',
                    ),
                    'GmtCreate' => 
                    array (
                      'title' => '创建时间',
                      'description' => '创建时间',
                      'type' => 'string',
                      'example' => '2023-01-09 00:00:00',
                    ),
                    'GmtModified' => 
                    array (
                      'title' => '修改时间',
                      'description' => '修改时间',
                      'type' => 'string',
                      'example' => '2023-01-09 00:00:00',
                    ),
                    'Dialogs' => 
                    array (
                      'title' => '单轮对话',
                      'description' => '单轮对话',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '对话',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'Question' => 
                          array (
                            'description' => '问题。',
                            'type' => 'string',
                            'example' => '我要1份***',
                          ),
                          'Answer' => 
                          array (
                            'description' => '答案。',
                            'type' => 'string',
                            'example' => '好的，服务员会尽快送来。',
                          ),
                        ),
                      ),
                    ),
                    'RoomNo' => 
                    array (
                      'title' => '房间号',
                      'description' => '房间号',
                      'type' => 'string',
                      'example' => '101',
                    ),
                    'Type' => 
                    array (
                      'title' => '类型',
                      'description' => '类型1：""（全部） 2：酒店服务（酒店服务） 3：酒店维修（酒店维修）',
                      'type' => 'string',
                      'enumValueTitles' => 
                      array (
                        '""' => '全部',
                        '酒店服务' => '酒店服务',
                        '酒店维修' => '酒店维修',
                      ),
                      'example' => '""',
                    ),
                    'IsNeedCallback' => 
                    array (
                      'title' => '是否需要回电',
                      'description' => '是否需要回电',
                      'type' => 'boolean',
                      'example' => 'false',
                    ),
                    'IsNeedCharges' => 
                    array (
                      'title' => '是否需要收费',
                      'description' => '是否需要收费',
                      'type' => 'boolean',
                      'example' => 'false',
                    ),
                    'IsAcceptedCharges' => 
                    array (
                      'title' => '客户是否接受收费',
                      'description' => '客户是否接受收费',
                      'type' => 'boolean',
                      'example' => 'false',
                    ),
                    'AssignedHandler' => 
                    array (
                      'title' => '指派人',
                      'description' => '指派人',
                      'type' => 'string',
                      'example' => '***',
                    ),
                    'Remark' => 
                    array (
                      'title' => '备注',
                      'description' => '备注',
                      'type' => 'string',
                      'example' => '***',
                    ),
                    'Status' => 
                    array (
                      'title' => '状态',
                      'description' => '状态：handled： 已处理, waiting：待处理, delayed：延迟处理',
                      'type' => 'string',
                      'enumValueTitles' => 
                      array (
                        'waiting' => '待处理',
                        'handled' => '已处理',
                        'delayed' => '延迟处理',
                      ),
                      'example' => 'waiting',
                    ),
                    'Operations' => 
                    array (
                      'title' => '操作',
                      'description' => '操作',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '键值对',
                        'type' => 'object',
                        'additionalProperties' => 
                        array (
                          'type' => 'any',
                          'description' => 'isOperable：是否可操作
nextStatus：下个状态
name：名称
currStatus：当前状态',
                          'example' => '"isOperable":true,
"nextStatus":"handled",
"name":"处理完成",
"currStatus":"delayed"',
                        ),
                      ),
                    ),
                    'IsDelayed' => 
                    array (
                      'title' => '是否延时处理',
                      'description' => '是否延时处理',
                      'type' => 'boolean',
                      'example' => 'true',
                    ),
                    'GmtDelayed' => 
                    array (
                      'title' => '延时处理时间',
                      'description' => '延时处理时间',
                      'type' => 'string',
                      'example' => '2023-01-09 00:00:00',
                    ),
                    'ChargesRemark' => 
                    array (
                      'title' => '收费信息备注',
                      'description' => '收费信息备注',
                      'type' => 'string',
                      'example' => '***',
                    ),
                    'CompleteRemark' => 
                    array (
                      'title' => '完成情况备注',
                      'description' => '完成情况备注',
                      'type' => 'string',
                      'example' => '***',
                    ),
                    'GmtCalled' => 
                    array (
                      'title' => '呼叫时间',
                      'description' => '呼叫时间',
                      'type' => 'string',
                      'example' => '2023-01-09 00:00:00',
                    ),
                    'GroupKey' => 
                    array (
                      'title' => '分组键',
                      'description' => '分组键，代表了一次对话或者一次下单操作，多轮对话使用一个groupkey，会自动合并成一条工单多条对话的形式',
                      'type' => 'string',
                      'example' => '2023***93975',
                    ),
                    'Action' => 
                    array (
                      'title' => '是否是操作',
                      'description' => '是否已操作',
                      'type' => 'boolean',
                      'example' => 'false',
                    ),
                  ),
                ),
              ),
              'Message' => 
              array (
                'title' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                'description' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                'type' => 'string',
                'example' => 'success',
              ),
              'RequestId' => 
              array (
                'description' => '请求id',
                'type' => 'string',
                'example' => '0EC7***726E',
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
            'errorCode' => 'InvalidParameter',
            'errorMessage' => 'The request parameter is invalid',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'ServerError',
            'errorMessage' => 'internal server error',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Page\\": {\\n    \\"PageNumber\\": 1,\\n    \\"PageSize\\": 10,\\n    \\"Total\\": 5\\n  },\\n  \\"StatusCode\\": 200,\\n  \\"Result\\": [\\n    {\\n      \\"Id\\": 45,\\n      \\"GmtCreate\\": \\"2023-01-09 00:00:00\\",\\n      \\"GmtModified\\": \\"2023-01-09 00:00:00\\",\\n      \\"Dialogs\\": [\\n        {\\n          \\"Question\\": \\"我要1份***\\",\\n          \\"Answer\\": \\"好的，服务员会尽快送来。\\"\\n        }\\n      ],\\n      \\"RoomNo\\": \\"101\\",\\n      \\"Type\\": \\"\\\\\\"\\\\\\"\\",\\n      \\"IsNeedCallback\\": false,\\n      \\"IsNeedCharges\\": false,\\n      \\"IsAcceptedCharges\\": false,\\n      \\"AssignedHandler\\": \\"***\\",\\n      \\"Remark\\": \\"***\\",\\n      \\"Status\\": \\"waiting\\",\\n      \\"Operations\\": [\\n        {\\n          \\"key\\": \\"\\\\\\"isOperable\\\\\\":true,\\\\n\\\\\\"nextStatus\\\\\\":\\\\\\"handled\\\\\\",\\\\n\\\\\\"name\\\\\\":\\\\\\"处理完成\\\\\\",\\\\n\\\\\\"currStatus\\\\\\":\\\\\\"delayed\\\\\\"\\"\\n        }\\n      ],\\n      \\"IsDelayed\\": true,\\n      \\"GmtDelayed\\": \\"2023-01-09 00:00:00\\",\\n      \\"ChargesRemark\\": \\"***\\",\\n      \\"CompleteRemark\\": \\"***\\",\\n      \\"GmtCalled\\": \\"2023-01-09 00:00:00\\",\\n      \\"GroupKey\\": \\"2023***93975\\",\\n      \\"Action\\": false\\n    }\\n  ],\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"0EC7***726E\\"\\n}","type":"json"}]',
      'title' => '查询工单列表',
    ),
    'UpdateTicket' => 
    array (
      'summary' => '修改工单。',
      'path' => '/v1.0/ip/updateTicket',
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
          'AliGenie_Auth_SPI' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
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
          'name' => 'HotelId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '酒店id',
            'type' => 'string',
            'required' => true,
            'example' => '520a0c0***5eb',
          ),
        ),
        1 => 
        array (
          'name' => 'Status',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '状态',
            'description' => '状态：handled： 已处理, waiting：待处理, delayed：延迟处理',
            'type' => 'string',
            'required' => true,
            'enumValueTitles' => 
            array (
              'waiting' => '待处理',
              'handled' => '已处理',
              'delayed' => '延迟处理',
            ),
            'example' => 'waiting',
          ),
        ),
        2 => 
        array (
          'name' => 'GroupKey',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '分组键',
            'description' => '分组键，代表了一次对话或者一次下单操作，多轮对话使用一个groupkey，会自动合并成一条工单多条对话的形式',
            'type' => 'string',
            'required' => true,
            'example' => '2023***93975',
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
            'title' => 'Result<Boolean>',
            'description' => 'Result<Boolean>',
            'type' => 'object',
            'properties' => 
            array (
              'StatusCode' => 
              array (
                'title' => '调用返回码，除约定的SUCCESS_CODE外，其余由服务提供者自定义',
                'description' => '调用返回码，除约定的SUCCESS_CODE外，其余由服务提供者自定义',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Result' => 
              array (
                'title' => '服务的实际返回结果',
                'description' => '服务的实际返回结果',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Message' => 
              array (
                'title' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                'description' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                'type' => 'string',
                'example' => 'success',
              ),
              'RequestId' => 
              array (
                'description' => '请求id',
                'type' => 'string',
                'example' => '0EC7***726E',
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
            'errorCode' => 'InvalidParameter',
            'errorMessage' => 'The request parameter is invalid',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'ServerError',
            'errorMessage' => 'internal server error',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"StatusCode\\": 200,\\n  \\"Result\\": true,\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"0EC7***726E\\"\\n}","type":"json"}]',
      'title' => '修改工单',
    ),
    'DeleteHotelAlarm' => 
    array (
      'summary' => '删除酒店闹钟，支持单个和批量删除',
      'path' => '/v1.0/ip/deleteHotelAlarm',
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
          'AliGenie_Auth_SPI' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
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
          'name' => 'HotelId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '酒店id',
            'type' => 'string',
            'required' => true,
            'example' => 'a7***83',
          ),
        ),
        1 => 
        array (
          'name' => 'Alarms',
          'in' => 'formData',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '闹钟信息',
            'type' => 'array',
            'items' => 
            array (
              'description' => '对象',
              'type' => 'object',
              'properties' => 
              array (
                'RoomNo' => 
                array (
                  'description' => '房间号',
                  'type' => 'string',
                  'required' => false,
                  'example' => '101',
                ),
                'AlarmId' => 
                array (
                  'description' => '闹钟id',
                  'type' => 'integer',
                  'format' => 'int64',
                  'required' => true,
                  'example' => '5029',
                ),
                'UserOpenId' => 
                array (
                  'description' => '开放用户Id',
                  'type' => 'string',
                  'required' => true,
                  'example' => 'mgw/k***HQd',
                ),
                'DeviceOpenId' => 
                array (
                  'description' => '开放设备id',
                  'type' => 'string',
                  'required' => true,
                  'example' => 'PvkB***TA==',
                ),
              ),
              'required' => false,
            ),
            'required' => true,
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Result<Integer>',
            'description' => 'Result<Integer>',
            'type' => 'object',
            'properties' => 
            array (
              'StatusCode' => 
              array (
                'title' => '调用返回码，除约定的SUCCESS_CODE外，其余由服务提供者自定义',
                'description' => '调用返回码，除约定的SUCCESS_CODE外，其余由服务提供者自定义',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Result' => 
              array (
                'title' => '服务的实际返回结果',
                'description' => '服务的实际返回结果',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'Message' => 
              array (
                'title' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                'description' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                'type' => 'string',
                'example' => 'xxx为空',
              ),
              'Extentions' => 
              array (
                'title' => '扩展字段',
                'description' => '扩展字段',
                'type' => 'object',
                'additionalProperties' => 
                array (
                  'type' => 'any',
                  'example' => '""',
                  'description' => '扩展内容',
                ),
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '43***881',
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
            'errorCode' => 'InvalidParameter',
            'errorMessage' => 'The request parameter is invalid',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'ServerError',
            'errorMessage' => 'internal server error',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"StatusCode\\": 200,\\n  \\"Result\\": 1,\\n  \\"Message\\": \\"xxx为空\\",\\n  \\"Extentions\\": {\\n    \\"key\\": \\"\\\\\\"\\\\\\"\\"\\n  },\\n  \\"RequestId\\": \\"43***881\\"\\n}","type":"json"}]',
      'title' => '删除酒店闹钟',
      'description' => '删除酒店闹钟，支持单个和批量删除。',
    ),
    'ListHotelAlarm' => 
    array (
      'summary' => '查询酒店闹钟信息',
      'path' => '/v1.0/ip/getHotelAlarmList',
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
          'AliGenie_Auth_SPI' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
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
          'name' => 'HotelId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '酒店id',
            'type' => 'string',
            'required' => false,
            'example' => 'a7a3***013',
          ),
        ),
        1 => 
        array (
          'name' => 'Rooms',
          'in' => 'formData',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '房间号',
            'type' => 'array',
            'items' => 
            array (
              'description' => '房间',
              'type' => 'string',
              'required' => false,
              'example' => '101',
            ),
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
            'title' => 'Result<List<HotelAlarmDetailResponse>>',
            'description' => 'Result<List<HotelAlarmDetailResponse>>',
            'type' => 'object',
            'properties' => 
            array (
              'StatusCode' => 
              array (
                'title' => '调用返回码，除约定的SUCCESS_CODE外，其余由服务提供者自定义',
                'description' => '调用返回码，除约定的SUCCESS_CODE外，其余由服务提供者自定义',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Result' => 
              array (
                'title' => '服务的实际返回结果',
                'description' => '服务的实际返回结果',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '对象',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'AlarmId' => 
                    array (
                      'title' => '闹钟id',
                      'description' => '闹钟id',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '5039',
                    ),
                    'UserOpenId' => 
                    array (
                      'title' => '用户Id',
                      'description' => '开放用户Id',
                      'type' => 'string',
                      'example' => 'mgw/k***HQd',
                    ),
                    'DeviceOpenId' => 
                    array (
                      'title' => 'uuid',
                      'description' => '开放设备id',
                      'type' => 'string',
                      'example' => 'PvkB****VVTA==',
                    ),
                    'ScheduleInfo' => 
                    array (
                      'title' => '设置的闹钟信息',
                      'description' => '设置的闹钟信息',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Type' => 
                        array (
                          'title' => 'ONCE, WEEKLY, STATUTORY_WORKING_DAY',
                          'description' => 'ONCE, WEEKLY',
                          'type' => 'string',
                          'example' => 'ONCE',
                        ),
                        'Once' => 
                        array (
                          'description' => '单次闹钟',
                          'type' => 'object',
                          'properties' => 
                          array (
                            'Year' => 
                            array (
                              'description' => '年',
                              'type' => 'integer',
                              'format' => 'int32',
                              'example' => '2022',
                            ),
                            'Month' => 
                            array (
                              'description' => '月',
                              'type' => 'integer',
                              'format' => 'int32',
                              'example' => '9',
                            ),
                            'Day' => 
                            array (
                              'description' => '日',
                              'type' => 'integer',
                              'format' => 'int32',
                              'example' => '20',
                            ),
                            'Hour' => 
                            array (
                              'description' => '时',
                              'type' => 'integer',
                              'format' => 'int32',
                              'example' => '10',
                            ),
                            'Minute' => 
                            array (
                              'description' => '分',
                              'type' => 'integer',
                              'format' => 'int32',
                              'example' => '30',
                            ),
                          ),
                        ),
                        'Weekly' => 
                        array (
                          'description' => '周循环：循环类型为WEEKLY时，该属性可用

',
                          'type' => 'object',
                          'properties' => 
                          array (
                            'DaysOfWeek' => 
                            array (
                              'description' => '周几触发集合',
                              'type' => 'array',
                              'items' => 
                              array (
                                'description' => '周几触发集合：数值在 1-7 之间，数字几则为对应的周几，如果是每天，则全部都填',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                              ),
                            ),
                            'Hour' => 
                            array (
                              'description' => '触发时间：时',
                              'type' => 'integer',
                              'format' => 'int32',
                              'example' => '10',
                            ),
                            'Minute' => 
                            array (
                              'description' => '触发时间：分',
                              'type' => 'integer',
                              'format' => 'int32',
                              'example' => '0',
                            ),
                          ),
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'Message' => 
              array (
                'title' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                'description' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                'type' => 'string',
                'example' => 'xx为空',
              ),
              'Extentions' => 
              array (
                'title' => '扩展字段',
                'description' => '扩展字段',
                'type' => 'object',
                'additionalProperties' => 
                array (
                  'type' => 'any',
                  'example' => '""',
                  'description' => '扩展内容',
                ),
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '43***881',
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
            'errorCode' => 'InvalidParameter',
            'errorMessage' => 'The request parameter is invalid',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'ServerError',
            'errorMessage' => 'internal server error',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"StatusCode\\": 200,\\n  \\"Result\\": [\\n    {\\n      \\"AlarmId\\": 5039,\\n      \\"UserOpenId\\": \\"mgw/k***HQd\\",\\n      \\"DeviceOpenId\\": \\"PvkB****VVTA==\\",\\n      \\"ScheduleInfo\\": {\\n        \\"Type\\": \\"ONCE\\",\\n        \\"Once\\": {\\n          \\"Year\\": 2022,\\n          \\"Month\\": 9,\\n          \\"Day\\": 20,\\n          \\"Hour\\": 10,\\n          \\"Minute\\": 30\\n        },\\n        \\"Weekly\\": {\\n          \\"DaysOfWeek\\": [\\n            1\\n          ],\\n          \\"Hour\\": 10,\\n          \\"Minute\\": 0\\n        }\\n      }\\n    }\\n  ],\\n  \\"Message\\": \\"xx为空\\",\\n  \\"Extentions\\": {\\n    \\"key\\": \\"\\\\\\"\\\\\\"\\"\\n  },\\n  \\"RequestId\\": \\"43***881\\"\\n}","type":"json"}]',
      'title' => '查询酒店闹钟信息列表',
      'description' => '查询酒店闹钟信息。',
    ),
    'CreateHotelAlarm' => 
    array (
      'summary' => '批量创建闹钟',
      'path' => '/v1.0/ip/createHotelAlarm',
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
          'AliGenie_Auth_SPI' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
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
          'name' => 'HotelId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '酒店Id',
            'type' => 'string',
            'required' => true,
            'example' => 'cf2446fc9d144c85aaee4f9ae20a96e7',
          ),
        ),
        1 => 
        array (
          'name' => 'Rooms',
          'in' => 'formData',
          'style' => 'json',
          'schema' => 
          array (
            'title' => '批量最多支持10个房间的闹钟设置，此处房间号请控制在10个以内',
            'description' => '批量最多支持10个房间的闹钟设置，此处房间号请控制在10个以内',
            'type' => 'array',
            'items' => 
            array (
              'description' => '房间号',
              'type' => 'string',
              'required' => false,
              'example' => '101',
            ),
            'required' => true,
          ),
        ),
        2 => 
        array (
          'name' => 'ScheduleInfo',
          'in' => 'formData',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '时间调度信息',
            'type' => 'object',
            'properties' => 
            array (
              'Type' => 
              array (
                'title' => 'ONCE, WEEKLY, STATUTORY_WORKING_DAY',
                'description' => 'ONCE, WEEKLY',
                'type' => 'string',
                'required' => true,
                'example' => '调度类型',
              ),
              'Once' => 
              array (
                'description' => '单次闹钟',
                'type' => 'object',
                'properties' => 
                array (
                  'Year' => 
                  array (
                    'description' => '年',
                    'type' => 'integer',
                    'format' => 'int32',
                    'required' => false,
                    'example' => '2022',
                  ),
                  'Month' => 
                  array (
                    'description' => '月',
                    'type' => 'integer',
                    'format' => 'int32',
                    'required' => false,
                    'example' => '9',
                  ),
                  'Day' => 
                  array (
                    'description' => '日',
                    'type' => 'integer',
                    'format' => 'int32',
                    'required' => false,
                    'example' => '20',
                  ),
                  'Hour' => 
                  array (
                    'description' => '时',
                    'type' => 'integer',
                    'format' => 'int32',
                    'required' => false,
                    'example' => '19',
                  ),
                  'Minute' => 
                  array (
                    'description' => '分',
                    'type' => 'integer',
                    'format' => 'int32',
                    'required' => false,
                    'example' => '30',
                  ),
                ),
                'required' => false,
              ),
              'Weekly' => 
              array (
                'description' => '周循环',
                'type' => 'object',
                'properties' => 
                array (
                  'DaysOfWeek' => 
                  array (
                    'description' => '周几触发',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '周几',
                      'type' => 'integer',
                      'format' => 'int32',
                      'required' => false,
                      'example' => '1',
                    ),
                    'required' => false,
                  ),
                  'Hour' => 
                  array (
                    'description' => '小时',
                    'type' => 'integer',
                    'format' => 'int32',
                    'required' => false,
                    'example' => '10',
                  ),
                  'Minute' => 
                  array (
                    'description' => '分',
                    'type' => 'integer',
                    'format' => 'int32',
                    'required' => false,
                    'example' => '30',
                  ),
                ),
                'required' => false,
              ),
            ),
            'required' => true,
          ),
        ),
        3 => 
        array (
          'name' => 'MusicType',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '目前支持 (DOU_YIN, JING_DIAN)',
            'description' => '目前支持 (DOU_YIN, JING_DIAN)',
            'type' => 'string',
            'required' => false,
            'example' => 'DOU_YIN',
            'enum' => 
            array (
              0 => 'DOU_YIN',
              1 => 'JING_DIAN',
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
            'title' => 'Result<List<HotelAlarmResponse>>',
            'description' => 'Result<List<HotelAlarmResponse>>',
            'type' => 'object',
            'properties' => 
            array (
              'StatusCode' => 
              array (
                'title' => '调用返回码，除约定的SUCCESS_CODE外，其余由服务提供者自定义',
                'description' => '调用返回码，除约定的SUCCESS_CODE外，其余由服务提供者自定义',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Result' => 
              array (
                'title' => '服务的实际返回结果',
                'description' => '服务的实际返回结果',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '返回结果',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'RoomNo' => 
                    array (
                      'description' => '房间号',
                      'type' => 'string',
                      'example' => '101',
                    ),
                    'AlarmId' => 
                    array (
                      'description' => '闹钟id',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '94',
                    ),
                    'DeviceOpenId' => 
                    array (
                      'description' => '开放设备id',
                      'type' => 'string',
                      'example' => 'Pvk***TA==',
                    ),
                    'UserOpenId' => 
                    array (
                      'description' => '开放用户id',
                      'type' => 'string',
                      'example' => 'mg***Qd',
                    ),
                    'FailMsg' => 
                    array (
                      'description' => '错误信息',
                      'type' => 'string',
                      'example' => '设备离线，闹钟创建失败',
                    ),
                  ),
                ),
              ),
              'Message' => 
              array (
                'title' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                'description' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                'type' => 'string',
                'example' => 'xx为空',
              ),
              'Extentions' => 
              array (
                'title' => '扩展字段',
                'description' => '扩展字段',
                'type' => 'object',
                'additionalProperties' => 
                array (
                  'type' => 'any',
                  'example' => '""',
                  'description' => '扩展内容',
                ),
              ),
              'RequestId' => 
              array (
                'description' => '请求id',
                'type' => 'string',
                'example' => '43***86881',
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
            'errorCode' => 'InvalidParameter',
            'errorMessage' => 'The request parameter is invalid',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'ServerError',
            'errorMessage' => 'internal server error',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"StatusCode\\": 200,\\n  \\"Result\\": [\\n    {\\n      \\"RoomNo\\": \\"101\\",\\n      \\"AlarmId\\": 94,\\n      \\"DeviceOpenId\\": \\"Pvk***TA==\\",\\n      \\"UserOpenId\\": \\"mg***Qd\\",\\n      \\"FailMsg\\": \\"设备离线，闹钟创建失败\\"\\n    }\\n  ],\\n  \\"Message\\": \\"xx为空\\",\\n  \\"Extentions\\": {\\n    \\"key\\": \\"\\\\\\"\\\\\\"\\"\\n  },\\n  \\"RequestId\\": \\"43***86881\\"\\n}","type":"json"}]',
      'title' => '创建酒店闹钟',
      'description' => '批量创建闹钟。',
    ),
    'UpdateHotelAlarm' => 
    array (
      'summary' => '修改酒店闹钟',
      'path' => '/v1.0/ip/updateHotelAlarm',
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
          'AliGenie_Auth_SPI' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
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
          'name' => 'HotelId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '酒店ID',
            'type' => 'string',
            'required' => true,
            'example' => 'a7a381a668bc485980bed3876a75e013',
          ),
        ),
        1 => 
        array (
          'name' => 'Alarms',
          'in' => 'formData',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '闹钟信息',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'RoomNo' => 
                array (
                  'description' => '房间号',
                  'type' => 'string',
                  'required' => false,
                  'example' => '101',
                ),
                'AlarmId' => 
                array (
                  'description' => '闹钟ID',
                  'type' => 'integer',
                  'format' => 'int64',
                  'required' => true,
                  'example' => '1234567',
                ),
                'UserOpenId' => 
                array (
                  'description' => '开放用户ID',
                  'type' => 'string',
                  'required' => true,
                  'example' => 'mgw/***dHQd',
                ),
                'DeviceOpenId' => 
                array (
                  'description' => '开放设备ID',
                  'type' => 'string',
                  'required' => true,
                  'example' => 'Pvk***VTA==',
                ),
              ),
              'required' => false,
            ),
            'required' => true,
          ),
        ),
        2 => 
        array (
          'name' => 'ScheduleInfo',
          'in' => 'formData',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '闹钟定时信息',
            'type' => 'object',
            'properties' => 
            array (
              'Type' => 
              array (
                'title' => 'ONCE, WEEKLY, STATUTORY_WORKING_DAY',
                'description' => 'ONCE, WEEKLY',
                'type' => 'string',
                'required' => false,
                'example' => 'ONCE',
              ),
              'Once' => 
              array (
                'description' => '一次',
                'type' => 'object',
                'properties' => 
                array (
                  'Year' => 
                  array (
                    'description' => '年',
                    'type' => 'integer',
                    'format' => 'int32',
                    'required' => false,
                    'example' => '2022',
                  ),
                  'Month' => 
                  array (
                    'description' => '月',
                    'type' => 'integer',
                    'format' => 'int32',
                    'required' => false,
                    'example' => '9',
                  ),
                  'Day' => 
                  array (
                    'description' => '日',
                    'type' => 'integer',
                    'format' => 'int32',
                    'required' => false,
                    'example' => '20',
                  ),
                  'Hour' => 
                  array (
                    'description' => '时',
                    'type' => 'integer',
                    'format' => 'int32',
                    'required' => false,
                    'example' => '10',
                  ),
                  'Minute' => 
                  array (
                    'description' => '分',
                    'type' => 'integer',
                    'format' => 'int32',
                    'required' => false,
                    'example' => '0',
                  ),
                ),
                'required' => false,
              ),
              'Weekly' => 
              array (
                'description' => '周循环：循环类型为WEEKLY时，该属性可用

',
                'type' => 'object',
                'properties' => 
                array (
                  'DaysOfWeek' => 
                  array (
                    'description' => '周几触发集合

',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '周几触发集合：数值在 1-7 之间，数字几则为对应的周几，如果是每天，则全部都填',
                      'type' => 'integer',
                      'format' => 'int32',
                      'required' => false,
                      'example' => '1',
                    ),
                    'required' => false,
                  ),
                  'Hour' => 
                  array (
                    'description' => '时',
                    'type' => 'integer',
                    'format' => 'int32',
                    'required' => false,
                    'example' => '10',
                  ),
                  'Minute' => 
                  array (
                    'description' => '分',
                    'type' => 'integer',
                    'format' => 'int32',
                    'required' => false,
                    'example' => '0',
                  ),
                ),
                'required' => false,
              ),
            ),
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
            'title' => 'Result<Integer>',
            'description' => 'Result<Integer>',
            'type' => 'object',
            'properties' => 
            array (
              'StatusCode' => 
              array (
                'title' => '调用返回码，除约定的SUCCESS_CODE外，其余由服务提供者自定义',
                'description' => '调用返回码，除约定的SUCCESS_CODE外，其余由服务提供者自定义',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Result' => 
              array (
                'title' => '服务的实际返回结果',
                'description' => '服务的实际返回结果',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'Message' => 
              array (
                'title' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                'description' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                'type' => 'string',
                'example' => 'success',
              ),
              'Extentions' => 
              array (
                'title' => '扩展字段',
                'description' => '扩展字段',
                'type' => 'object',
                'additionalProperties' => 
                array (
                  'type' => 'any',
                  'example' => '""',
                  'description' => '扩展内容',
                ),
              ),
              'RequestId' => 
              array (
                'description' => '请求id。',
                'type' => 'string',
                'example' => '73C67BD9-175A-1324-8202-9FAABBB3E6FA',
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
            'errorCode' => 'InvalidParameter',
            'errorMessage' => 'The request parameter is invalid',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'ServerError',
            'errorMessage' => 'internal server error',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"StatusCode\\": 200,\\n  \\"Result\\": 1,\\n  \\"Message\\": \\"success\\",\\n  \\"Extentions\\": {\\n    \\"key\\": \\"\\\\\\"\\\\\\"\\"\\n  },\\n  \\"RequestId\\": \\"73C67BD9-175A-1324-8202-9FAABBB3E6FA\\"\\n}","type":"json"}]',
      'title' => '修改酒店闹钟',
      'description' => '修改酒店闹钟。',
    ),
    'ChildAccountAuth' => 
    array (
      'summary' => '酒店子账号授权。',
      'path' => '/v1.0/ip/childAccountAuth',
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
          'AliGenie_Auth_SPI' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
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
          'name' => 'Account',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '淘宝账号名称',
            'description' => '淘宝账号名称',
            'type' => 'string',
            'required' => true,
            'example' => 'lee',
          ),
        ),
        1 => 
        array (
          'name' => 'TbOpenId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '淘宝开放id',
            'description' => '淘宝开放id',
            'type' => 'string',
            'required' => true,
            'example' => 'AAEV***E3d3Z2ETwh',
          ),
        ),
        2 => 
        array (
          'name' => 'AppKey',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '开放平台appKey',
            'description' => '开放平台appKey',
            'type' => 'string',
            'required' => true,
            'example' => '30471753',
          ),
        ),
        3 => 
        array (
          'name' => 'HotelId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '酒店ID',
            'type' => 'string',
            'required' => true,
            'example' => 'a7***83',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Result<Boolean>',
            'description' => 'Result<Boolean>',
            'type' => 'object',
            'properties' => 
            array (
              'StatusCode' => 
              array (
                'title' => '调用返回码，除约定的SUCCESS_CODE外，其余由服务提供者自定义',
                'description' => '调用返回码，除约定的SUCCESS_CODE外，其余由服务提供者自定义',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Result' => 
              array (
                'title' => '服务的实际返回结果',
                'description' => '服务的实际返回结果',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Message' => 
              array (
                'title' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                'description' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                'type' => 'string',
                'example' => 'success',
              ),
              'Extentions' => 
              array (
                'title' => '扩展字段',
                'description' => '扩展字段',
                'type' => 'object',
                'additionalProperties' => 
                array (
                  'type' => 'any',
                  'description' => '扩展字段',
                ),
              ),
              'RequestId' => 
              array (
                'description' => '请求id',
                'type' => 'string',
                'example' => '3DB51A10-327C-58D3-91DF-3A5A471C51E7',
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
            'errorCode' => 'InvalidParameter',
            'errorMessage' => 'The request parameter is invalid',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'ServerError',
            'errorMessage' => 'internal server error',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"StatusCode\\": 200,\\n  \\"Result\\": true,\\n  \\"Message\\": \\"success\\",\\n  \\"Extentions\\": {\\n    \\"key\\": \\"\\"\\n  },\\n  \\"RequestId\\": \\"3DB51A10-327C-58D3-91DF-3A5A471C51E7\\"\\n}","type":"json"}]',
      'title' => '子账号授权',
      'description' => '酒店子账号授权。',
    ),
    'RemoveChildAccountAuth' => 
    array (
      'summary' => '删除子账号授权',
      'path' => '/v1.0/ip/removeChildAccountAuth',
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
          'AliGenie_Auth_SPI' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
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
          'name' => 'TbOpenId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '授权人（平台登录用户）淘宝开放id',
            'description' => '授权人（平台登录用户）淘宝开放id',
            'type' => 'string',
            'required' => true,
            'example' => 'AAEV***E3d3Z2ETwh',
          ),
        ),
        1 => 
        array (
          'name' => 'AppKey',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => 'top开放平台appKey',
            'description' => 'top开放平台appKey',
            'type' => 'string',
            'required' => true,
            'example' => '30**53',
          ),
        ),
        2 => 
        array (
          'name' => 'ChildAccountName',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '被授权账号的淘宝账号名称',
            'description' => '被授权账号的淘宝账号名称',
            'type' => 'string',
            'required' => true,
            'example' => 'tbxxxx',
          ),
        ),
        3 => 
        array (
          'name' => 'HotelId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '酒店id',
            'description' => '酒店id',
            'type' => 'string',
            'required' => true,
            'example' => 'af7***536',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Result<Boolean>',
            'description' => 'Result<Boolean>',
            'type' => 'object',
            'properties' => 
            array (
              'StatusCode' => 
              array (
                'title' => '调用返回码，200标识为成功，非200详细见错误码表',
                'description' => '调用返回码，200标识为成功，非200详细见错误码表',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Result' => 
              array (
                'title' => '服务的实际返回结果',
                'description' => '服务的实际返回结果',
                'type' => 'boolean',
                'example' => 'True',
              ),
              'Message' => 
              array (
                'title' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                'description' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                'type' => 'string',
                'example' => 'success',
              ),
              'RequestId' => 
              array (
                'description' => '请求id',
                'type' => 'string',
                'example' => 'F12B***F34E',
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
            'errorCode' => 'InvalidParameter',
            'errorMessage' => 'The request parameter is invalid',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'ServerError',
            'errorMessage' => 'internal server error',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"StatusCode\\": 200,\\n  \\"Result\\": true,\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"F12B***F34E\\"\\n}","type":"json"}]',
      'title' => '删除子账号授权',
    ),
    'PmsEventReport' => 
    array (
      'summary' => 'pms事件上报',
      'path' => '/v1.0/ip/pmsEventReport',
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
          'AliGenie_Auth_SPI' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'deprecated' => false,
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Payload',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => 'pms事件上报内容',
            'type' => 'string',
            'required' => true,
            'example' => '{
  "eventId": "123342",
  "eventType": 2,
  "hotelId": "95fc******4f7b",
  "pmsPartnerName": "XX科技",
  "orderItemList": [
    {
      "orderItemId": "12345",
      "channelName": "飞猪",
      "checkinTime": "2023-04-15 12:03:20",
      "checkoutTime": "2023-04-16 11:12:04",
      "guests": [
        {
          "name": "张*",
          "familyName": "张",
          "phone": "187***0967",
          "email": "****@qq.com",
          "telephone": "0571-433**343",
          "gender": 1,
          "identityType": "idCard",
          "identityNo": "330**********3538"
        }
      ],
      "price": "318",
      "lastRoomNo": "119",
      "roomNo": "210",
      "roomTypeCode": "1023",
      "roomTypeName": "大床房",
      "status": 2
    }
  ]
}',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Result<Boolean>',
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'StatusCode' => 
              array (
                'title' => '调用返回码，除约定的SUCCESS_CODE外，其余由服务提供者自定义',
                'description' => '调用返回码，200标识成功',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Result' => 
              array (
                'title' => '服务的实际返回结果',
                'description' => '服务的实际返回结果',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Message' => 
              array (
                'title' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                'description' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                'type' => 'string',
                'example' => 'success',
              ),
              'RequestId' => 
              array (
                'description' => '请求id',
                'type' => 'string',
                'example' => '0EC7*726E',
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
            'errorCode' => 'InvalidParameter',
            'errorMessage' => 'The request parameter is invalid',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'ServerError',
            'errorMessage' => 'internal server error',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"StatusCode\\": 200,\\n  \\"Result\\": true,\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"0EC7*726E\\"\\n}","type":"json"}]',
      'title' => 'pms事件同步',
    ),
    'QueryDeviceStatus' => 
    array (
      'summary' => '查询客控设备状态，例如灯的开关状态，空调当前设定的温度等，也可查询部分模式的状态，例如勿扰模式(需ISV提前支持)',
      'path' => '/v1.0/ip/queryDeviceStatus',
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
          'AliGenie_Auth_SPI' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
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
          'name' => 'Payload',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '查询请求参数',
            'type' => 'object',
            'properties' => 
            array (
              'LocationDevices' => 
              array (
                'description' => '位置及设备信息列表',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '位置设备信息',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Location' => 
                    array (
                      'description' => '位置信息，如

- room：房间
- livingroom：客厅',
                      'type' => 'string',
                      'required' => false,
                      'example' => 'room',
                    ),
                    'DeviceNumber' => 
                    array (
                      'description' => '设备编号',
                      'type' => 'string',
                      'required' => false,
                      'example' => 'night_light',
                    ),
                    'DeviceType' => 
                    array (
                      'description' => '设备类型，如

- light：灯
- aircondition：空调',
                      'type' => 'string',
                      'required' => false,
                      'example' => 'light',
                    ),
                  ),
                  'required' => false,
                ),
                'required' => false,
              ),
              'UserId' => 
              array (
                'type' => 'string',
                'required' => true,
              ),
              'Properties' => 
              array (
                'description' => '额外信息，如模式相关数据',
                'type' => 'object',
                'required' => false,
                'additionalProperties' => 
                array (
                  'type' => 'string',
                  'example' => 'mode',
                  'description' => '例如模式等查询场景传参：
mode: dnd',
                ),
              ),
            ),
            'required' => false,
          ),
        ),
        1 => 
        array (
          'name' => 'UserInfo',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '用户标识信息',
            'type' => 'object',
            'properties' => 
            array (
              'EncodeType' => 
              array (
                'description' => '编码类型，此处填写 **HOTEL**。',
                'type' => 'string',
                'required' => true,
                'example' => 'HOTEL',
              ),
              'EncodeKey' => 
              array (
                'description' => '编码类型对应的值，此处填写该酒店应用ID。请在天猫精灵行业管理平台查看。',
                'type' => 'string',
                'required' => true,
                'example' => '123',
              ),
              'IdType' => 
              array (
                'description' => '用户Id的类型

- OPEN_ID：默认的用户ID标识。
- UNION_ID: 组织维度的用户ID标识，需要提前在开放平台申请组织。',
                'type' => 'string',
                'required' => true,
                'example' => 'OPEN_ID',
              ),
              'Id' => 
              array (
                'description' => '用户标识，设置为userOpenId或userUnionId。',
                'type' => 'string',
                'required' => true,
                'example' => 'rV/XSgPuxZjx/hN3iw8U+e8ou***lk1r43LWcVW6fvY1Rr4sEPFodpnA==',
              ),
              'OrganizationId' => 
              array (
                'description' => '组织ID，如果IdType为UNION_ID时必填。',
                'type' => 'string',
                'required' => false,
                'example' => '123',
              ),
            ),
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
            'title' => 'Result<List<HotelControlTemplateLocationCategoryResp>>',
            'description' => '返回结果对象',
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'title' => '调用返回码，除约定的SUCCESS_CODE外，其余由服务提供者自定义',
                'description' => '调用返回码，200表示成功',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Result' => 
              array (
                'title' => '服务的实际返回结果',
                'description' => '服务的实际返回结果',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '设备状态信息',
                  'type' => 'object',
                  'additionalProperties' => 
                  array (
                    'type' => 'string',
                    'example' => 'value',
                    'description' => '设备状态信息',
                  ),
                ),
              ),
              'Message' => 
              array (
                'title' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                'description' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                'type' => 'string',
                'example' => 'success',
              ),
              'RequestId' => 
              array (
                'description' => '请求id',
                'type' => 'string',
                'example' => 'fdsgrefds',
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
            'errorCode' => 'AliGenie.GetDeviceTag.InvalidParameter',
            'errorMessage' => 'The request parameter is invalid.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'AliGenie.Public.InternalError',
            'errorMessage' => 'An internal error occurred.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": 200,\\n  \\"Result\\": [\\n    {\\n      \\"key\\": \\"value\\"\\n    }\\n  ],\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"fdsgrefds\\"\\n}","type":"json"}]',
      'title' => '查询客控设备状态',
    ),
    'ListHotelControlDevice' => 
    array (
      'summary' => '酒店设备列表',
      'path' => '/v1.0/ip/listHotelControlDevice',
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
          'AliGenie_Auth_SPI' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
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
          'name' => 'UserInfo',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'EncodeType' => 
              array (
                'type' => 'string',
                'required' => true,
              ),
              'EncodeKey' => 
              array (
                'type' => 'string',
                'required' => true,
              ),
              'IdType' => 
              array (
                'type' => 'string',
                'required' => true,
              ),
              'Id' => 
              array (
                'type' => 'string',
                'required' => true,
              ),
              'OrganizationId' => 
              array (
                'type' => 'string',
              ),
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
            'title' => 'Result<List<HotelControlTemplateLocationCategoryResp>>',
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'title' => '调用返回码，除约定的SUCCESS_CODE外，其余由服务提供者自定义',
                'type' => 'integer',
                'format' => 'int32',
              ),
              'Result' => 
              array (
                'title' => '服务的实际返回结果',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'additionalProperties' => 
                  array (
                    'type' => 'string',
                  ),
                ),
              ),
              'Message' => 
              array (
                'title' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                'type' => 'string',
              ),
              'RequestId' => 
              array (
                'type' => 'string',
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
            'errorCode' => 'AliGenie.GetDeviceTag.InvalidParameter',
            'errorMessage' => 'The request parameter is invalid.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'AliGenie.Public.InternalError',
            'errorMessage' => 'An internal error occurred.',
          ),
        ),
      ),
      'responseDemo' => '',
    ),
    'DeviceControl' => 
    array (
      'summary' => '酒店客控设备控制，可控制例如灯、空调、窗帘等房间内的客控设备',
      'path' => '/v1.0/ip/deviceControl',
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
          'AliGenie_Auth_SPI' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
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
          'name' => 'Payload',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '业务参数',
            'type' => 'object',
            'properties' => 
            array (
              'UserId' => 
              array (
                'title' => '',
                'type' => 'string',
              ),
              'Location' => 
              array (
                'description' => '位置，例如room(房间)，livingroom(客厅)等',
                'type' => 'string',
                'required' => true,
                'example' => 'room',
                'title' => '位置，例如room(房间)，livingroom(客厅)等',
              ),
              'Category' => 
              array (
                'description' => '客控设备品类，例如aircondition(空调)，light(灯)等',
                'type' => 'string',
                'required' => true,
                'example' => 'aircondition',
                'title' => '客控设备品类，例如aircondition(空调)，light(灯)等',
              ),
              'Cmd' => 
              array (
                'description' => '指令名称，例如open，close，详细支持指令见酒店行业对接文档',
                'type' => 'string',
                'required' => true,
                'example' => 'open',
                'title' => '指令名称，例如open，close，详细支持指令见酒店行业对接文档',
              ),
              'Properties' => 
              array (
                'description' => '可选配置，执行部分指令时需要附加的参数，例如设置空调温度时，需要附加需要调到的温度值，详细参数见酒店行业对接文档',
                'type' => 'object',
                'required' => false,
                'additionalProperties' => 
                array (
                  'type' => 'string',
                  'example' => 'value',
                  'description' => '可选配置，执行部分指令时需要附加的参数，例如设置空调温度时，需要附加需要调到的温度值，详细参数见酒店行业对接文档',
                  'title' => '可选配置，执行部分指令时需要附加的参数，例如设置空调温度时，需要附加需要调到的温度值，详细参数见酒店行业对接文档',
                ),
                'title' => '可选配置，执行部分指令时需要附加的参数，例如设置空调温度时，需要附加需要调到的温度值，详细参数见酒店行业对接文档',
              ),
              'ExtendInfo' => 
              array (
                'description' => '扩展信息，预留字段',
                'type' => 'string',
                'required' => false,
                'example' => '{}',
                'title' => '扩展信息，预留字段',
              ),
              'DeviceNumber' => 
              array (
                'description' => '设备编号，即在天猫精灵行业管理平台房型客控品类设置下设备的序列号',
                'type' => 'string',
                'required' => true,
                'example' => 'air_condition',
                'title' => '设备编号，即在天猫精灵行业管理平台房型客控品类设置下设备的序列号',
              ),
            ),
            'required' => false,
            'title' => '业务参数',
          ),
        ),
        1 => 
        array (
          'name' => 'UserInfo',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '用户标识信息',
            'type' => 'object',
            'properties' => 
            array (
              'EncodeType' => 
              array (
                'description' => '编码类型，此处填写 **HOTEL**。',
                'type' => 'string',
                'required' => true,
                'example' => 'HOTEL',
                'title' => '编码类型，此处填写 **HOTEL**。',
              ),
              'EncodeKey' => 
              array (
                'description' => '编码类型对应的值，此处填写该酒店应用ID。请在天猫精灵行业管理平台查看。',
                'type' => 'string',
                'required' => true,
                'example' => '123',
                'title' => '编码类型对应的值，此处填写该酒店应用ID。请在天猫精灵行业管理平台查看。',
              ),
              'IdType' => 
              array (
                'description' => '用户Id的类型 
- OPEN_ID：默认的用户ID标识 
- UNION_ID: 组织维度的用户ID标识，在猫精技能应用开放平台申请过组织后才会有',
                'type' => 'string',
                'required' => true,
                'example' => 'OPEN_ID',
                'title' => '用户Id的类型

- OPEN_ID：默认的用户ID标识。
- UNION_ID: 组织维度的用户ID标识，需要提前在开放平台申请组织。',
              ),
              'Id' => 
              array (
                'description' => '用户标识，设置为userOpenId或userUnionId。',
                'type' => 'string',
                'required' => true,
                'example' => 'HOFF****my7Iw=',
                'title' => '用户标识，设置为userOpenId或userUnionId。',
              ),
              'OrganizationId' => 
              array (
                'description' => '组织ID，如果IdType为UNION_ID时必填',
                'type' => 'string',
                'required' => false,
                'example' => '1**2',
                'title' => '组织ID，如果IdType为UNION_ID时必填。',
              ),
            ),
            'required' => false,
            'title' => '用户标识信息',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => '返回结果对象',
            'description' => '返回结果对象',
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'title' => '调用返回码，200表示成功',
                'description' => '调用返回码，200表示成功',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Result' => 
              array (
                'title' => '服务的实际返回结果',
                'description' => '服务的实际返回结果',
                'type' => 'object',
                'properties' => 
                array (
                  'Status' => 
                  array (
                    'description' => '业务执行结果状态，200为执行成功',
                    'type' => 'string',
                    'example' => '200',
                    'title' => '业务执行结果状态，200为执行成功',
                  ),
                ),
              ),
              'Message' => 
              array (
                'title' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                'description' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                'type' => 'string',
                'example' => 'success',
              ),
              'RequestId' => 
              array (
                'description' => '请求id',
                'type' => 'string',
                'example' => '43***28C-A810-5***-8747-EC226A086881',
                'title' => '请求id',
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
            'errorCode' => 'AliGenie.GetDeviceTag.InvalidParameter',
            'errorMessage' => 'The request parameter is invalid.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": 200,\\n  \\"Result\\": {\\n    \\"Status\\": \\"200\\"\\n  },\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"43***28C-A810-5***-8747-EC226A086881\\"\\n}","errorExample":""},{"type":"xml","example":"<DeviceControlResponse>\\n    <Code>200</Code>\\n    <Result>\\n        <Status>200</Status>\\n    </Result>\\n    <Message>success</Message>\\n    <RequestId>43***28C-A810-5***-8747-EC226A086881</RequestId>\\n</DeviceControlResponse>","errorExample":""}]',
      'title' => '酒店客控-设备控制',
    ),
    'ListHotelSceneItem' => 
    array (
      'summary' => '查询酒店场景服务项列表，如物品服务的服务项列表',
      'path' => '/v1.0/ip/listHotelSceneItem',
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
          'AliGenie_Auth_SPI' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
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
          'name' => 'Payload',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'title' => '场景服务payload',
            'description' => '场景服务payload',
            'type' => 'object',
            'properties' => 
            array (
              'UserId' => 
              array (
                'title' => '用户ID',
                'type' => 'string',
                'required' => true,
                'docRequired' => true,
                'example' => '1345480696877233314',
              ),
              'Type' => 
              array (
                'title' => '场景服务分类',
                'description' => '场景服务分类',
                'type' => 'string',
                'required' => true,
                'docRequired' => true,
                'example' => 'GOODS',
              ),
            ),
            'required' => true,
            'docRequired' => true,
          ),
        ),
        1 => 
        array (
          'name' => 'UserInfo',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'title' => '用户信息',
            'description' => '用户信息',
            'type' => 'object',
            'properties' => 
            array (
              'EncodeType' => 
              array (
                'type' => 'string',
                'required' => true,
                'docRequired' => true,
                'example' => 'PROJECT_ID',
              ),
              'EncodeKey' => 
              array (
                'type' => 'string',
                'required' => true,
                'docRequired' => true,
                'example' => '1248494721591392955',
              ),
              'IdType' => 
              array (
                'type' => 'string',
                'required' => true,
                'docRequired' => true,
                'example' => 'OPEN_ID',
              ),
              'Id' => 
              array (
                'type' => 'string',
                'required' => true,
                'docRequired' => true,
                'example' => 'mFU6VtVU+pgA8lx6rYMo7SPl11t+8b+8ALrn10MIPEdpK/HI9wELAEppYhPI1cYRDa4og8AMjAEBZKbLUwFjFA==',
              ),
              'OrganizationId' => 
              array (
                'type' => 'string',
                'required' => false,
              ),
            ),
            'required' => true,
            'docRequired' => true,
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'PageResult<ListItemResponse>',
            'description' => 'PageResult<ListItemResponse>',
            'type' => 'object',
            'properties' => 
            array (
              'Page' => 
              array (
                'title' => '分页结果',
                'description' => '分页结果',
                'type' => 'object',
                'properties' => 
                array (
                  'PageNumber' => 
                  array (
                    'title' => '第几页',
                    'description' => '第几页',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                  'PageSize' => 
                  array (
                    'title' => '每页多少条',
                    'description' => '每页多少条',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '10',
                  ),
                  'Total' => 
                  array (
                    'title' => '共多少条数据',
                    'description' => '共多少条数据',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '12',
                  ),
                  'TotalPage' => 
                  array (
                    'title' => '共多少页',
                    'description' => '共多少页',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '6',
                  ),
                  'HasNext' => 
                  array (
                    'title' => '是否有下一页',
                    'description' => '是否有下一页',
                    'type' => 'boolean',
                  ),
                ),
              ),
              'Code' => 
              array (
                'title' => '状态码',
                'description' => '状态码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Result' => 
              array (
                'title' => '服务的实际返回结果',
                'description' => '服务的实际返回结果',
                'type' => 'object',
                'properties' => 
                array (
                  'SecondCategoryList' => 
                  array (
                    'title' => '服务分类list',
                    'description' => '服务分类list',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'SecondCategoryName' => 
                        array (
                          'title' => '分类名称',
                          'description' => '分类名称',
                          'type' => 'string',
                          'example' => '客用品类',
                        ),
                        'ItemList' => 
                        array (
                          'type' => 'array',
                          'items' => 
                          array (
                            'type' => 'object',
                            'properties' => 
                            array (
                              'Id' => 
                              array (
                                'title' => '物品ID',
                                'description' => '物品ID',
                                'type' => 'string',
                                'example' => '152860',
                              ),
                              'Type' => 
                              array (
                                'title' => '物品分类',
                                'description' => '物品分类',
                                'type' => 'string',
                                'example' => 'GOODS',
                              ),
                              'Category' => 
                              array (
                                'title' => '物品二级分类',
                                'description' => '物品二级分类',
                                'type' => 'string',
                                'example' => '客用品类',
                              ),
                              'Name' => 
                              array (
                                'title' => '物品名称',
                                'description' => '物品名称',
                                'type' => 'string',
                                'example' => '棉签',
                              ),
                              'Status' => 
                              array (
                                'title' => '物品状态',
                                'description' => '物品状态',
                                'type' => 'string',
                                'example' => '已添加',
                              ),
                              'Icon' => 
                              array (
                                'title' => '物品icon',
                                'description' => '物品icon',
                                'type' => 'string',
                                'example' => 'https://ailabsaicloudservice.alicdn.com/hotel/icon/jiudianmianban_fuwushangpintu/wupin/keyongpinlei/mianqian.png',
                              ),
                              'Price' => 
                              array (
                                'title' => '物品价格',
                                'description' => '物品价格',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '1',
                              ),
                              'ResidueLimit' => 
                              array (
                                'title' => '剩余下单数量
 -1表示 不限制 0表示无剩余下单量 >0为可下单的数量',
                                'description' => '剩余下单数量
 -1表示 不限制 0表示无剩余下单量 >0为可下单的数量',
                                'type' => 'integer',
                                'format' => 'int64',
                              ),
                            ),
                          ),
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'Message' => 
              array (
                'title' => '附加信息',
                'description' => '附加信息',
                'type' => 'string',
                'example' => 'success',
              ),
              'RequestId' => 
              array (
                'title' => '请求ID',
                'description' => '请求ID',
                'type' => 'string',
                'example' => 'CEADB586-51CB-1B6B-95BD-AB85A7A08E97',
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
            'errorCode' => 'AliGenie.GetDeviceTag.InvalidParameter',
            'errorMessage' => 'The request parameter is invalid.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'AliGenie.Public.InternalError',
            'errorMessage' => 'An internal error occurred.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Page\\": {\\n    \\"PageNumber\\": 1,\\n    \\"PageSize\\": 10,\\n    \\"Total\\": 12,\\n    \\"TotalPage\\": 6,\\n    \\"HasNext\\": true\\n  },\\n  \\"Code\\": 200,\\n  \\"Result\\": {\\n    \\"SecondCategoryList\\": [\\n      {\\n        \\"SecondCategoryName\\": \\"客用品类\\",\\n        \\"ItemList\\": [\\n          {\\n            \\"Id\\": \\"152860\\",\\n            \\"Type\\": \\"GOODS\\",\\n            \\"Category\\": \\"客用品类\\",\\n            \\"Name\\": \\"棉签\\",\\n            \\"Status\\": \\"已添加\\",\\n            \\"Icon\\": \\"https://ailabsaicloudservice.alicdn.com/hotel/icon/jiudianmianban_fuwushangpintu/wupin/keyongpinlei/mianqian.png\\",\\n            \\"Price\\": 1,\\n            \\"ResidueLimit\\": 0\\n          }\\n        ]\\n      }\\n    ]\\n  },\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"CEADB586-51CB-1B6B-95BD-AB85A7A08E97\\"\\n}","type":"json"}]',
      'title' => '查询酒店场景服务项列表',
      'description' => '查询酒店场景服务项列表，如物品服务的服务项列表',
    ),
    'ListHotelServiceCategory' => 
    array (
      'summary' => '获取酒店服务分类，例如酒店服务于酒店预定下的各个分类',
      'path' => '/v1.0/ip/listHotelServiceCategory',
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
          'AliGenie_Auth_SPI' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
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
          'name' => 'Payload',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'title' => '服务分类',
            'description' => '服务分类',
            'type' => 'object',
            'properties' => 
            array (
              'Type' => 
              array (
                'title' => '服务分类类型',
                'description' => '服务分类类型',
                'type' => 'string',
                'required' => true,
                'docRequired' => true,
                'example' => 'HOTEL_SERVICE',
              ),
            ),
            'required' => true,
            'docRequired' => true,
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Result<List<SceneServiceCategory>>',
            'description' => 'Result<List<SceneServiceCategory>>',
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'title' => '状态码',
                'description' => '状态码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Result' => 
              array (
                'title' => '服务的实际返回结果',
                'description' => '服务的实际返回结果',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Type' => 
                    array (
                      'title' => '服务分类类型',
                      'description' => '服务分类类型',
                      'type' => 'string',
                      'example' => 'HOTEL_SERVICE',
                    ),
                    'Code' => 
                    array (
                      'title' => '服务分类code',
                      'description' => '服务分类code',
                      'type' => 'string',
                      'example' => 'GOODS',
                    ),
                    'Name' => 
                    array (
                      'title' => '服务分类名称',
                      'description' => '服务分类名称',
                      'type' => 'string',
                      'example' => '物品添加',
                    ),
                    'Desc' => 
                    array (
                      'title' => '服务分类描述',
                      'description' => '服务分类描述',
                      'type' => 'string',
                      'example' => '生活及洗漱用品',
                    ),
                    'Icon' => 
                    array (
                      'title' => '服务分类icon',
                      'description' => '服务分类icon',
                      'type' => 'string',
                      'example' => 'https://ailabsaicloudservice.alicdn.com/hotel/icon/changjingfenlei/wupintianjia.png',
                    ),
                  ),
                ),
              ),
              'Message' => 
              array (
                'title' => '附加信息',
                'description' => '附加信息',
                'type' => 'string',
                'example' => 'success',
              ),
              'RequestId' => 
              array (
                'title' => '请求ID',
                'description' => '请求ID',
                'type' => 'string',
                'example' => '5373C821-65D2-1764-B9F9-951914937FF5',
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
            'errorCode' => 'AliGenie.GetDeviceTag.InvalidParameter',
            'errorMessage' => 'The request parameter is invalid.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'AliGenie.Public.InternalError',
            'errorMessage' => 'An internal error occurred.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": 200,\\n  \\"Result\\": [\\n    {\\n      \\"Type\\": \\"HOTEL_SERVICE\\",\\n      \\"Code\\": \\"GOODS\\",\\n      \\"Name\\": \\"物品添加\\",\\n      \\"Desc\\": \\"生活及洗漱用品\\",\\n      \\"Icon\\": \\"https://ailabsaicloudservice.alicdn.com/hotel/icon/changjingfenlei/wupintianjia.png\\"\\n    }\\n  ],\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"5373C821-65D2-1764-B9F9-951914937FF5\\"\\n}","type":"json"}]',
      'title' => '获取酒店服务分类',
      'description' => '获取酒店服务分类，例如酒店服务于酒店预定下的各个分类',
    ),
    'GetHotelOrderDetail' => 
    array (
      'summary' => '获取酒店订单详情，例如无屏、维修、餐饮等',
      'path' => '/v1.0/ip/getHotelOrderDetail',
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
          'AliGenie_Auth_SPI' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
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
          'name' => 'Payload',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'title' => '订单详情payload',
            'description' => '订单详情payload',
            'type' => 'object',
            'properties' => 
            array (
              'OrderNo' => 
              array (
                'title' => '订单号',
                'description' => '订单号',
                'type' => 'string',
                'required' => true,
                'docRequired' => true,
                'example' => '20220714150702000168270112410630',
              ),
            ),
            'required' => true,
            'docRequired' => true,
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Result<List<HotelOrderDetail>>',
            'description' => 'Result<List<HotelOrderDetail>>',
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'title' => '状态码',
                'description' => '状态码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Result' => 
              array (
                'title' => '服务的实际返回结果',
                'description' => '服务的实际返回结果',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Name' => 
                    array (
                      'title' => '物品名称',
                      'description' => '物品名称',
                      'type' => 'string',
                      'example' => '窗帘',
                    ),
                    'ApplyAmt' => 
                    array (
                      'title' => '物品金额',
                      'description' => '物品金额',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '200',
                    ),
                    'Quantity' => 
                    array (
                      'title' => '物品数量',
                      'description' => '物品数量',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1',
                    ),
                    'ItemUrl' => 
                    array (
                      'title' => '物品icon',
                      'description' => '物品icon',
                      'type' => 'string',
                      'example' => 'https://ailabsaicloudservice.alicdn.com/hotel/icon/jiudianmianban_fuwushangpintu/weixiu/dianqilei/chuanglian.png',
                    ),
                    'GmtCreate' => 
                    array (
                      'title' => '创建时间',
                      'description' => '创建时间',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1659952892000',
                    ),
                  ),
                ),
              ),
              'Message' => 
              array (
                'title' => '附加信息',
                'description' => '附加信息',
                'type' => 'string',
                'example' => 'success',
              ),
              'RequestId' => 
              array (
                'title' => '请求ID',
                'description' => '请求ID',
                'type' => 'string',
                'example' => '6F579407-13C4-1708-AFA2-B657BE5FE8F5',
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
            'errorCode' => 'AliGenie.GetDeviceTag.InvalidParameter',
            'errorMessage' => 'The request parameter is invalid.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'AliGenie.Public.InternalError',
            'errorMessage' => 'An internal error occurred.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": 200,\\n  \\"Result\\": [\\n    {\\n      \\"Name\\": \\"窗帘\\",\\n      \\"ApplyAmt\\": 200,\\n      \\"Quantity\\": 1,\\n      \\"ItemUrl\\": \\"https://ailabsaicloudservice.alicdn.com/hotel/icon/jiudianmianban_fuwushangpintu/weixiu/dianqilei/chuanglian.png\\",\\n      \\"GmtCreate\\": 1659952892000\\n    }\\n  ],\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"6F579407-13C4-1708-AFA2-B657BE5FE8F5\\"\\n}","type":"json"}]',
      'title' => '获取订单详情',
      'description' => '获取酒店订单详情，例如无屏、维修、餐饮等',
    ),
    'ListHotelOrder' => 
    array (
      'summary' => '查询设备上的订单列表',
      'path' => '/v1.0/ip/listHotelOrder',
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
          'AliGenie_Auth_SPI' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
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
          'name' => 'Payload',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'title' => '酒店订单列表payload',
            'description' => '酒店订单列表payload',
            'type' => 'object',
            'properties' => 
            array (
              'UserId' => 
              array (
                'title' => '用户ID',
                'type' => 'string',
                'required' => true,
                'docRequired' => true,
                'example' => '1345480696877233314',
              ),
              'Page' => 
              array (
                'title' => '分页参数',
                'description' => '分页参数',
                'type' => 'object',
                'properties' => 
                array (
                  'PageNumber' => 
                  array (
                    'title' => '第几页',
                    'description' => '第几页',
                    'type' => 'integer',
                    'format' => 'int64',
                    'required' => true,
                    'docRequired' => true,
                    'example' => '1',
                  ),
                  'PageSize' => 
                  array (
                    'title' => '每页多少条数据',
                    'description' => '每页多少条数据',
                    'type' => 'integer',
                    'format' => 'int64',
                    'required' => true,
                    'docRequired' => true,
                    'example' => '10',
                  ),
                ),
                'required' => true,
                'docRequired' => true,
              ),
            ),
            'required' => true,
            'docRequired' => true,
          ),
        ),
        1 => 
        array (
          'name' => 'UserInfo',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'title' => '用户信息',
            'description' => '用户信息',
            'type' => 'object',
            'properties' => 
            array (
              'EncodeType' => 
              array (
                'type' => 'string',
                'required' => true,
                'docRequired' => true,
                'example' => 'PROJECT_ID',
              ),
              'EncodeKey' => 
              array (
                'type' => 'string',
                'required' => true,
                'docRequired' => true,
                'example' => '1248494721591392955',
              ),
              'IdType' => 
              array (
                'type' => 'string',
                'required' => true,
                'docRequired' => true,
                'example' => 'OPEN_ID',
              ),
              'Id' => 
              array (
                'type' => 'string',
                'required' => true,
                'docRequired' => true,
                'example' => 'mFU6VtVU+pgA8lx6rYMo7SPl11t+8b+8ALrn10MIPEdpK/HI9wELAEppYhPI1cYRDa4og8AMjAEBZKbLUwFjFA==',
              ),
              'OrganizationId' => 
              array (
                'type' => 'string',
                'required' => false,
              ),
            ),
            'required' => true,
            'docRequired' => true,
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'PageResult<List<HotelOrderListResp>>',
            'description' => 'PageResult<List<HotelOrderListResp>>',
            'type' => 'object',
            'properties' => 
            array (
              'Page' => 
              array (
                'title' => '分页结果',
                'description' => '分页结果',
                'type' => 'object',
                'properties' => 
                array (
                  'PageNumber' => 
                  array (
                    'title' => '第几页',
                    'description' => '第几页',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                  'PageSize' => 
                  array (
                    'title' => '每页多少条数据',
                    'description' => '每页多少条数据',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '10',
                  ),
                  'Total' => 
                  array (
                    'title' => '共多少条数据',
                    'description' => '共多少条数据',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '21',
                  ),
                  'TotalPage' => 
                  array (
                    'title' => '共多少页',
                    'description' => '共多少页',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '7',
                  ),
                  'HasNext' => 
                  array (
                    'title' => '是否有下一页',
                    'description' => '是否有下一页',
                    'type' => 'boolean',
                  ),
                ),
              ),
              'Code' => 
              array (
                'title' => '状态码',
                'description' => '状态码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Result' => 
              array (
                'title' => '服务的实际返回结果',
                'description' => '服务的实际返回结果',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'RoomNo' => 
                    array (
                      'title' => '房间号',
                      'description' => '房间号',
                      'type' => 'string',
                      'example' => '2001',
                    ),
                    'OrderNo' => 
                    array (
                      'title' => '订单号',
                      'description' => '订单号',
                      'type' => 'string',
                      'example' => '20220808180132000114508555527711',
                    ),
                    'Quantity' => 
                    array (
                      'title' => '共多少个物品',
                      'description' => '共多少个物品',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '12',
                    ),
                    'ApplyAmt' => 
                    array (
                      'title' => '共需要多少钱',
                      'description' => '共需要多少钱',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '21.5',
                    ),
                    'Status' => 
                    array (
                      'title' => '订单状态',
                      'description' => '订单状态',
                      'type' => 'string',
                      'example' => 'INIT',
                    ),
                    'GmtCreate' => 
                    array (
                      'title' => '订单创建时间',
                      'description' => '订单创建时间',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1659952892000',
                    ),
                    'Type' => 
                    array (
                      'title' => '订单商品所属分类',
                      'description' => '订单商品所属分类',
                      'type' => 'string',
                      'example' => 'REPAIR',
                    ),
                    'TypeName' => 
                    array (
                      'title' => '订单物品所属分类名称',
                      'description' => '订单物品所属分类名称',
                      'type' => 'string',
                      'example' => '设备维修',
                    ),
                    'TypeIconUrl' => 
                    array (
                      'title' => '订单物品所属分类icon',
                      'description' => '订单物品所属分类icon',
                      'type' => 'string',
                      'example' => 'https://ailabsaicloudservice.alicdn.com/hotel/icon/changjingfenlei/shebeiweixiu.png',
                    ),
                  ),
                ),
              ),
              'Message' => 
              array (
                'title' => '附加信息',
                'description' => '附加信息',
                'type' => 'string',
                'example' => 'success',
              ),
              'RequestId' => 
              array (
                'title' => '请求ID',
                'description' => '请求ID',
                'type' => 'string',
                'example' => '07F61FDA-606F-10A0-8ED0-C6CE62710A48',
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
            'errorCode' => 'AliGenie.GetDeviceTag.InvalidParameter',
            'errorMessage' => 'The request parameter is invalid.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'AliGenie.Public.InternalError',
            'errorMessage' => 'An internal error occurred.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Page\\": {\\n    \\"PageNumber\\": 1,\\n    \\"PageSize\\": 10,\\n    \\"Total\\": 21,\\n    \\"TotalPage\\": 7,\\n    \\"HasNext\\": true\\n  },\\n  \\"Code\\": 200,\\n  \\"Result\\": [\\n    {\\n      \\"RoomNo\\": \\"2001\\",\\n      \\"OrderNo\\": \\"20220808180132000114508555527711\\",\\n      \\"Quantity\\": 12,\\n      \\"ApplyAmt\\": 21.5,\\n      \\"Status\\": \\"INIT\\",\\n      \\"GmtCreate\\": 1659952892000,\\n      \\"Type\\": \\"REPAIR\\",\\n      \\"TypeName\\": \\"设备维修\\",\\n      \\"TypeIconUrl\\": \\"https://ailabsaicloudservice.alicdn.com/hotel/icon/changjingfenlei/shebeiweixiu.png\\"\\n    }\\n  ],\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"07F61FDA-606F-10A0-8ED0-C6CE62710A48\\"\\n}","type":"json"}]',
      'title' => '查询订单',
      'description' => '查询设备上的订单列表',
    ),
    'SubmitHotelOrder' => 
    array (
      'summary' => '提交订单，例如物品、预定餐饮等订单的提交',
      'path' => '/v1.0/ip/submitHotelOrder',
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
          'AliGenie_Auth_SPI' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
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
          'name' => 'Payload',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'title' => '提交订单payload',
            'description' => '提交订单payload',
            'type' => 'object',
            'properties' => 
            array (
              'UserId' => 
              array (
                'title' => '用户ID',
                'type' => 'string',
                'required' => true,
                'docRequired' => true,
                'example' => '1345480696877233314',
              ),
              'Type' => 
              array (
                'title' => '物品所属分类',
                'description' => '物品所属分类',
                'type' => 'string',
                'required' => true,
                'docRequired' => true,
                'example' => 'GOODS',
              ),
              'ItemList' => 
              array (
                'title' => '物品list',
                'description' => '物品list',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '物品信息',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'ItemId' => 
                    array (
                      'title' => '物品ID',
                      'description' => '物品ID',
                      'type' => 'integer',
                      'format' => 'int64',
                      'required' => true,
                      'docRequired' => true,
                      'example' => '152860',
                    ),
                    'Quantity' => 
                    array (
                      'title' => '物品数量',
                      'description' => '物品数量',
                      'type' => 'integer',
                      'format' => 'int64',
                      'required' => true,
                      'docRequired' => true,
                      'example' => '2',
                    ),
                  ),
                  'required' => false,
                ),
                'required' => true,
              ),
            ),
            'required' => true,
            'docRequired' => true,
          ),
        ),
        1 => 
        array (
          'name' => 'UserInfo',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'title' => '用户信息',
            'description' => '用户信息',
            'type' => 'object',
            'properties' => 
            array (
              'EncodeType' => 
              array (
                'description' => '编码类型',
                'type' => 'string',
                'required' => true,
                'docRequired' => true,
                'example' => 'PROJECT_ID',
              ),
              'EncodeKey' => 
              array (
                'description' => '编码键',
                'type' => 'string',
                'required' => true,
                'docRequired' => true,
                'example' => '1248494721591392955',
              ),
              'IdType' => 
              array (
                'description' => 'id类型',
                'type' => 'string',
                'required' => true,
                'docRequired' => true,
                'example' => 'OPEN_ID',
              ),
              'Id' => 
              array (
                'description' => 'id',
                'type' => 'string',
                'required' => true,
                'docRequired' => true,
                'example' => 'mFU6VtVU+pgA8lx6rYMo7SPl11t+8b+8ALrn10MIPEdpK/HI9wELAEppYhPI1cYRDa4og8AMjAEBZKbLUwFjFA==',
              ),
              'OrganizationId' => 
              array (
                'description' => '组织id',
                'type' => 'string',
                'required' => false,
                'example' => '""',
              ),
            ),
            'required' => true,
            'docRequired' => true,
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Result<Boolean>',
            'description' => 'Result<Boolean>',
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'title' => '状态码',
                'description' => '状态码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Result' => 
              array (
                'title' => '订单号',
                'description' => '订单号',
                'type' => 'string',
                'example' => '20220809104752000114671478353329',
              ),
              'Message' => 
              array (
                'title' => '附加信息',
                'description' => '附加信息',
                'type' => 'string',
                'example' => 'success',
              ),
              'RequestId' => 
              array (
                'title' => '请求ID',
                'description' => '请求ID',
                'type' => 'string',
                'example' => 'CCCF2E86-D9B5-12A6-AD25-8A06933D2B0F',
              ),
              'StatusCode' => 
              array (
                'description' => '调用返回码，200标识成功',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
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
            'errorCode' => 'AliGenie.GetDeviceTag.InvalidParameter',
            'errorMessage' => 'The request parameter is invalid.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'AliGenie.Public.InternalError',
            'errorMessage' => 'An internal error occurred.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": 200,\\n  \\"Result\\": \\"20220809104752000114671478353329\\",\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"CCCF2E86-D9B5-12A6-AD25-8A06933D2B0F\\",\\n  \\"StatusCode\\": 200\\n}","type":"json"}]',
      'title' => '提交订单',
      'description' => '提交订单，例如物品、预定餐饮等订单的提交',
    ),
    'GetHotelNotice' => 
    array (
      'summary' => '获取酒店通知',
      'path' => '/v1.0/ip/getHotelNotice',
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
          'AliGenie_Auth_SPI' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
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
          'name' => 'UserInfo',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'title' => '用户信息',
            'description' => '用户信息',
            'type' => 'object',
            'properties' => 
            array (
              'EncodeType' => 
              array (
                'description' => '编码类型，此处填写PROJECT_ID。

',
                'type' => 'string',
                'required' => false,
                'example' => 'PROJECT_ID',
              ),
              'EncodeKey' => 
              array (
                'description' => '编码类型对应的值，此处填写该产品所在项目的Project ID。请在天猫精灵AI平台的控制台中查看。',
                'type' => 'string',
                'required' => false,
                'example' => '12**45',
              ),
              'IdType' => 
              array (
                'description' => '设备Id的类型 ：
OPENID：默认的设备ID标识。
UNIONID: 组织维度的设备ID标识，需要提前在开放平台申请组织。

',
                'type' => 'string',
                'required' => false,
                'example' => 'OPEN_ID',
              ),
              'Id' => 
              array (
                'description' => '用户标识，填写userOpenId或userUnionId的值。',
                'type' => 'string',
                'required' => false,
                'example' => 'DAFE****ce3ej=',
              ),
              'OrganizationId' => 
              array (
                'description' => '组织ID，如果IdType为UNION_ID时必填。

',
                'type' => 'string',
                'required' => false,
                'example' => '1',
              ),
            ),
            'required' => true,
            'docRequired' => true,
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Result<String>',
            'description' => 'Result<String>',
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'title' => '状态码',
                'description' => '状态码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Result' => 
              array (
                'title' => '服务的实际返回结果',
                'description' => '服务的实际返回结果',
                'type' => 'string',
                'example' => 'test notice...',
              ),
              'Message' => 
              array (
                'title' => '附加信息',
                'description' => '附加信息',
                'type' => 'string',
                'example' => 'success',
              ),
              'RequestId' => 
              array (
                'description' => 'RequestId',
                'type' => 'string',
                'example' => '73C67BD9-175A-1324-8202-9FAABBB3E6FA',
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
            'errorCode' => 'InvalidParameter',
            'errorMessage' => 'The request parameter is invalid',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": 200,\\n  \\"Result\\": \\"test notice...\\",\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"73C67BD9-175A-1324-8202-9FAABBB3E6FA\\"\\n}","type":"json"}]',
      'title' => '获取酒店通知',
    ),
    'GetHotelNoticeV2' => 
    array (
      'summary' => '获取酒店通知信息，包含通知标题和内容',
      'path' => '/v1.0/ip/getHotelNoticeV2',
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
          'AliGenie_Auth_SPI' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
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
          'name' => 'UserInfo',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'title' => '用户信息',
            'description' => '用户信息',
            'type' => 'object',
            'properties' => 
            array (
              'EncodeType' => 
              array (
                'description' => '编码类型，此处填写 HOTEL。',
                'type' => 'string',
                'required' => false,
                'example' => 'HOTEL',
              ),
              'EncodeKey' => 
              array (
                'description' => '编码类型对应的值，此处填写该酒店应用ID。请在天猫精灵行业管理平台查看。',
                'type' => 'string',
                'required' => false,
                'example' => '123',
              ),
              'IdType' => 
              array (
                'description' => '用户Id的类型
- OPEN_ID：默认的用户ID标识。
- UNION_ID: 组织维度的用户ID标识，需要提前在开放平台申请组织。',
                'type' => 'string',
                'required' => false,
                'example' => 'OPEN_ID',
              ),
              'Id' => 
              array (
                'description' => '用户标识，设置为userOpenId或userUnionId。',
                'type' => 'string',
                'required' => false,
                'example' => 'rV/XSgPuxZjx/hN3iw8U+e8ou***lk1r43LWcVW6fvY1Rr4sEPFodpnA==',
              ),
              'OrganizationId' => 
              array (
                'description' => '组织ID，如果IdType为UNION_ID时必填。',
                'type' => 'string',
                'required' => false,
                'example' => '123',
              ),
            ),
            'required' => true,
            'docRequired' => true,
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Result<HotelNotice>',
            'description' => 'Result<HotelNotice>',
            'type' => 'object',
            'properties' => 
            array (
              'StatusCode' => 
              array (
                'title' => '调用返回码，200标识成功',
                'description' => '调用返回码，200标识成功',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Result' => 
              array (
                'title' => '服务的实际返回结果',
                'description' => '服务的实际返回结果',
                'type' => 'object',
                'properties' => 
                array (
                  'HotelId' => 
                  array (
                    'title' => '酒店id',
                    'description' => '酒店id',
                    'type' => 'string',
                    'example' => 'a7***83',
                  ),
                  'Title' => 
                  array (
                    'title' => '酒店通知标题',
                    'description' => '酒店通知标题',
                    'type' => 'string',
                    'example' => '欢迎入住智能酒店',
                  ),
                  'Content' => 
                  array (
                    'title' => '酒店通知内容',
                    'description' => '酒店通知内容',
                    'type' => 'string',
                    'example' => '欢迎入住，我是您的智能语音助手',
                  ),
                ),
              ),
              'Message' => 
              array (
                'title' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                'description' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                'type' => 'string',
                'example' => 'success',
              ),
              'RequestId' => 
              array (
                'title' => '请求Id',
                'description' => '请求Id',
                'type' => 'string',
                'example' => '0D0C***67DB',
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
            'errorCode' => 'InvalidParameter',
            'errorMessage' => 'The request parameter is invalid',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'ServerError',
            'errorMessage' => 'internal server error',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"StatusCode\\": 200,\\n  \\"Result\\": {\\n    \\"HotelId\\": \\"a7***83\\",\\n    \\"Title\\": \\"欢迎入住智能酒店\\",\\n    \\"Content\\": \\"欢迎入住，我是您的智能语音助手\\"\\n  },\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"0D0C***67DB\\"\\n}","type":"json"}]',
      'title' => '获取酒店通知-包含标题',
    ),
    'GetHotelHomeBackImageAndModes' => 
    array (
      'summary' => '获取首页背景图和场景模式',
      'path' => '/v1.0/ip/getHotelHomeBackImageAndModes',
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
          'AliGenie_Auth_SPI' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
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
          'name' => 'UserInfo',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'title' => '用户信息',
            'type' => 'object',
            'properties' => 
            array (
              'EncodeType' => 
              array (
                'type' => 'string',
                'required' => true,
                'docRequired' => true,
                'example' => 'PROJECT_ID',
              ),
              'EncodeKey' => 
              array (
                'type' => 'string',
                'required' => true,
                'docRequired' => true,
                'example' => '1248494721591392955',
              ),
              'IdType' => 
              array (
                'type' => 'string',
                'required' => true,
                'docRequired' => true,
                'example' => 'OPEN_ID',
              ),
              'Id' => 
              array (
                'type' => 'string',
                'required' => true,
                'docRequired' => true,
                'example' => 'mFU6VtVU+pgA8lx6rYMo7SPl11t+8b+8ALrn10MIPEdpK/HI9wELAEppYhPI1cYRDa4og8AMjAEBZKbLUwFjFA==',
              ),
              'OrganizationId' => 
              array (
                'type' => 'string',
              ),
            ),
            'required' => true,
            'docRequired' => true,
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Result<HomePageBackImageAndModes>',
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'title' => '状态码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Result' => 
              array (
                'title' => '服务的实际返回结果',
                'type' => 'object',
                'properties' => 
                array (
                  'BackgroundImage' => 
                  array (
                    'title' => '背景图URL',
                    'type' => 'string',
                    'example' => 'https://ailabs.alibabausercontent.com/platform/3d4fe6d66ec49d9789635f66627f0339/welcome_audios/976210a6532150f49c2677a8b7dbc105/l6fspbhn.jpg',
                  ),
                  'HotelName' => 
                  array (
                    'title' => '酒店名称',
                    'type' => 'string',
                    'example' => '宣雍测试橙蜂酒店',
                  ),
                  'ModeList' => 
                  array (
                    'title' => '模式list',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Code' => 
                        array (
                          'title' => '模式code',
                          'type' => 'string',
                          'example' => 'romantic',
                        ),
                        'CnName' => 
                        array (
                          'title' => '模式名称',
                          'type' => 'string',
                          'example' => '浪漫模式',
                        ),
                        'Icon' => 
                        array (
                          'title' => '模式icon',
                          'type' => 'string',
                          'example' => 'https://ailabsaicloudservice.alicdn.com/hotel/icon/changjingmoshi/langman.png',
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'Message' => 
              array (
                'title' => '附加信息',
                'type' => 'string',
                'example' => 'success',
              ),
              'RequestId' => 
              array (
                'title' => '请求ID',
                'type' => 'string',
                'example' => '394450FC-9035-1B7C-8829-BC88832473FC',
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
            'errorCode' => '	AliGenie.GetDeviceTag.InvalidParameter',
            'errorMessage' => 'The request parameter is invalid.',
          ),
        ),
      ),
      'responseDemo' => '',
    ),
    'GetHotelSampleUtterances' => 
    array (
      'summary' => '获取推荐语料',
      'path' => '/v1.0/ip/getHotelSampleUtterances',
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
          'AliGenie_Auth_SPI' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
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
          'name' => 'UserInfo',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'EncodeType' => 
              array (
                'type' => 'string',
                'required' => true,
              ),
              'EncodeKey' => 
              array (
                'type' => 'string',
                'required' => true,
              ),
              'IdType' => 
              array (
                'type' => 'string',
                'required' => true,
              ),
              'Id' => 
              array (
                'type' => 'string',
                'required' => true,
              ),
              'OrganizationId' => 
              array (
                'type' => 'string',
              ),
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
            'title' => 'Result<List<HotelControlTemplateLocationCategoryResp>>',
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'title' => '调用返回码，除约定的SUCCESS_CODE外，其余由服务提供者自定义',
                'type' => 'integer',
                'format' => 'int32',
              ),
              'Result' => 
              array (
                'title' => '服务的实际返回结果',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'string',
                ),
              ),
              'Message' => 
              array (
                'title' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                'type' => 'string',
              ),
              'RequestId' => 
              array (
                'type' => 'string',
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
            'errorCode' => 'AliGenie.GetDeviceTag.InvalidParameter',
            'errorMessage' => 'The request parameter is invalid.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'AliGenie.Public.InternalError',
            'errorMessage' => 'An internal error occurred.',
          ),
        ),
      ),
      'responseDemo' => '',
    ),
    'GetHotelScreenSaver' => 
    array (
      'summary' => '获取屏保信息，如屏保样式等信息',
      'path' => '/v1.0/ip/getHotelScreenSaver',
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
          'AliGenie_Auth_SPI' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
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
          'name' => 'UserInfo',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'title' => '用户信息',
            'description' => '用户信息',
            'type' => 'object',
            'properties' => 
            array (
              'EncodeType' => 
              array (
                'type' => 'string',
                'required' => true,
                'docRequired' => true,
                'example' => 'PROJECT_ID',
              ),
              'EncodeKey' => 
              array (
                'type' => 'string',
                'required' => true,
                'docRequired' => true,
                'example' => '1248494721591392955',
              ),
              'IdType' => 
              array (
                'type' => 'string',
                'required' => true,
                'docRequired' => true,
                'example' => 'OPEN_ID',
              ),
              'Id' => 
              array (
                'type' => 'string',
                'required' => true,
                'docRequired' => true,
                'example' => 'mFU6VtVU+pgA8lx6rYMo7SPl11t+8b+8ALrn10MIPEdpK/HI9wELAEppYhPI1cYRDa4og8AMjAEBZKbLUwFjFA==',
              ),
              'OrganizationId' => 
              array (
                'type' => 'string',
                'required' => false,
              ),
            ),
            'required' => true,
            'docRequired' => true,
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Result<HotelScreenSaver>',
            'description' => 'Result<HotelScreenSaver>',
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'title' => '状态码',
                'description' => '状态码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Result' => 
              array (
                'title' => '服务的实际返回结果',
                'description' => '服务的实际返回结果',
                'type' => 'object',
                'properties' => 
                array (
                  'StyleCode' => 
                  array (
                    'title' => '屏保样式code',
                    'description' => '屏保样式code',
                    'type' => 'string',
                    'example' => 'common-weather',
                  ),
                  'PicUrl' => 
                  array (
                    'title' => '屏保图片',
                    'description' => '屏保图片',
                    'type' => 'string',
                    'example' => 'https://ailabs.alibabausercontent.com/platform/3d4fe6d66ec49d9789635f66627f0339/welcome_audios/976210a6532150f49c2677a8b7dbc105/l6fspbhd.jpg',
                  ),
                ),
              ),
              'Message' => 
              array (
                'title' => '附加信息',
                'description' => '附加信息',
                'type' => 'string',
                'example' => 'success',
              ),
              'RequestId' => 
              array (
                'title' => '请求ID',
                'description' => '请求ID',
                'type' => 'string',
                'example' => '5F0467E1-19F2-1757-B6D0-B79917BA2E81',
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
            'errorCode' => 'InvalidParameter',
            'errorMessage' => 'The request parameter is invalid.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": 200,\\n  \\"Result\\": {\\n    \\"StyleCode\\": \\"common-weather\\",\\n    \\"PicUrl\\": \\"https://ailabs.alibabausercontent.com/platform/3d4fe6d66ec49d9789635f66627f0339/welcome_audios/976210a6532150f49c2677a8b7dbc105/l6fspbhd.jpg\\"\\n  },\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"5F0467E1-19F2-1757-B6D0-B79917BA2E81\\"\\n}","type":"json"}]',
      'title' => '获取屏保信息',
      'description' => '获取屏保信息，如屏保样式等信息',
    ),
    'RoomCheckOut' => 
    array (
      'summary' => '设备面板点击退房，非正式退房，仅发送工单并给用户提示去前台退房',
      'path' => '/v1.0/ip/roomCheckOut',
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
          'AliGenie_Auth_SPI' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'create',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'UserInfo',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '用户标识信息',
            'type' => 'object',
            'properties' => 
            array (
              'EncodeType' => 
              array (
                'description' => '编码类型，此处填写 **HOTEL**。',
                'type' => 'string',
                'required' => true,
                'example' => 'HOTEL',
              ),
              'EncodeKey' => 
              array (
                'description' => '编码类型对应的值，此处填写该酒店应用ID。请在天猫精灵行业管理平台查看。',
                'type' => 'string',
                'required' => true,
                'example' => '123',
              ),
              'IdType' => 
              array (
                'description' => '用户Id的类型

- OPEN_ID：默认的用户ID标识。
- UNION_ID: 组织维度的用户ID标识，需要提前在开放平台申请组织。',
                'type' => 'string',
                'required' => true,
                'example' => 'OPEN_ID',
              ),
              'Id' => 
              array (
                'description' => '用户标识，设置为userOpenId或userUnionId。',
                'type' => 'string',
                'required' => true,
                'example' => 'rV/XSgPuxZjx/hN3iw8U+e8ou***lk1r43LWcVW6fvY1Rr4sEPFodpnA==',
              ),
              'OrganizationId' => 
              array (
                'description' => '组织ID，如果IdType为UNION_ID时必填。',
                'type' => 'string',
                'required' => false,
                'example' => '123',
              ),
            ),
            'required' => false,
          ),
        ),
        1 => 
        array (
          'name' => 'DeviceInfo',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '设备标识信息',
            'type' => 'object',
            'properties' => 
            array (
              'EncodeType' => 
              array (
                'description' => '编码类型，此处填写 **HOTEL**。',
                'type' => 'string',
                'required' => true,
                'example' => 'HOTEL',
              ),
              'EncodeKey' => 
              array (
                'description' => '编码类型对应的值，此处填写该酒店应用ID。请在天猫精灵行业管理平台查看。',
                'type' => 'string',
                'required' => true,
                'example' => '123',
              ),
              'IdType' => 
              array (
                'description' => '设备Id的类型

- OPEN_ID：默认的设备ID标识。
- UNION_ID: 组织维度的设备ID标识，需要提前在开放平台申请组织。',
                'type' => 'string',
                'required' => true,
                'example' => 'OPEN_ID',
              ),
              'Id' => 
              array (
                'description' => '用户标识，设置为deviceOpenId或deviceUnionId。',
                'type' => 'string',
                'required' => true,
                'example' => 'rV/XSgPuxZjx/hN3iw8U+e8ou***lk1r43LWcVW6fvY1Rr4sEPFodpnA==',
              ),
              'OrganizationId' => 
              array (
                'description' => '组织ID，如果IdType为UNION_ID时必填。',
                'type' => 'string',
                'required' => false,
                'example' => '123',
              ),
            ),
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
            'title' => 'Result<List<HotelControlTemplateLocationCategoryResp>>',
            'description' => '返回结果对象',
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'title' => '调用返回码，除约定的SUCCESS_CODE外，其余由服务提供者自定义',
                'description' => '调用返回码，200表示成功',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Result' => 
              array (
                'description' => '执行成功或失败',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Message' => 
              array (
                'title' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                'description' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                'type' => 'string',
                'example' => 'success',
              ),
              'RequestId' => 
              array (
                'description' => '请求id',
                'type' => 'string',
                'example' => 'dsvrevd',
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
            'errorCode' => 'AliGenie.GetDeviceTag.InvalidParameter',
            'errorMessage' => 'The request parameter is invalid.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'AliGenie.Public.InternalError',
            'errorMessage' => 'An internal error occurred.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": 200,\\n  \\"Result\\": true,\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"dsvrevd\\"\\n}","type":"json"}]',
      'title' => '退房',
    ),
    'GetHotelContacts' => 
    array (
      'summary' => '获取酒店联系人',
      'path' => '/v1.0/ip/getHotelContacts',
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
          'AliGenie_Auth_SPI' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'UserInfo',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '用户标识信息',
            'type' => 'object',
            'properties' => 
            array (
              'EncodeType' => 
              array (
                'description' => '编码类型，此处填写 HOTEL。',
                'type' => 'string',
                'required' => true,
                'example' => 'HOTEL',
              ),
              'EncodeKey' => 
              array (
                'description' => '编码类型对应的值，此处填写该酒店应用ID。请在天猫精灵行业管理平台查看。',
                'type' => 'string',
                'required' => true,
                'example' => '123',
              ),
              'IdType' => 
              array (
                'description' => '用户Id的类型
- OPEN_ID：默认的用户ID标识。
- UNION_ID: 组织维度的用户ID标识，需要提前在开放平台申请组织。',
                'type' => 'string',
                'required' => true,
                'example' => 'OPEN_ID',
              ),
              'Id' => 
              array (
                'description' => '用户标识，设置为userOpenId或userUnionId。',
                'type' => 'string',
                'required' => true,
                'example' => 'rV/XSgPuxZjx/hN3iw8U+e8ou***lk1r43LWcVW6fvY1Rr4sEPFodpnA==',
              ),
              'OrganizationId' => 
              array (
                'description' => '组织ID，如果IdType为UNION_ID时必填。',
                'type' => 'string',
                'required' => false,
                'example' => '123',
              ),
            ),
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
            'title' => 'Result<List<HotelCallContact>>',
            'description' => 'Result<List<HotelCallContact>>',
            'type' => 'object',
            'properties' => 
            array (
              'StatusCode' => 
              array (
                'title' => '调用返回码，200标识成功',
                'description' => '调用返回码，200标识成功',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Result' => 
              array (
                'title' => '服务的实际返回结果',
                'description' => '服务的实际返回结果',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '联系人信息',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'HotelId' => 
                    array (
                      'title' => '酒店id',
                      'description' => '酒店id',
                      'type' => 'string',
                      'example' => 'cf24***96e7',
                    ),
                    'Type' => 
                    array (
                      'title' => '联系人类型，device：设备，group：分组',
                      'description' => '联系人类型，device：设备，group：分组',
                      'type' => 'string',
                      'example' => 'group',
                    ),
                    'Uuid' => 
                    array (
                      'title' => '唯一标识',
                      'description' => '唯一标识',
                      'type' => 'string',
                      'example' => '0862***A809',
                    ),
                    'Number' => 
                    array (
                      'title' => '号码',
                      'description' => '号码',
                      'type' => 'string',
                      'example' => '101',
                    ),
                    'Name' => 
                    array (
                      'title' => '联系人名称',
                      'description' => '联系人名称',
                      'type' => 'string',
                      'example' => '前台',
                    ),
                    'Icon' => 
                    array (
                      'title' => '图标',
                      'description' => '图标',
                      'type' => 'string',
                      'example' => 'xxx.icon',
                    ),
                    'Status' => 
                    array (
                      'title' => '状态，1：可用，0：不可用',
                      'description' => '状态，1：可用，0：不可用',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '1',
                    ),
                    'ExpireAt' => 
                    array (
                      'title' => '失效时间',
                      'description' => '失效时间',
                      'type' => 'string',
                      'example' => '1649472283046',
                    ),
                  ),
                ),
              ),
              'Message' => 
              array (
                'title' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                'description' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                'type' => 'string',
                'example' => 'success',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '0EC7*726E',
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
            'errorCode' => 'InvalidParameter',
            'errorMessage' => 'The request parameter is invalid',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'ServerError',
            'errorMessage' => 'internal server error',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"StatusCode\\": 200,\\n  \\"Result\\": [\\n    {\\n      \\"HotelId\\": \\"cf24***96e7\\",\\n      \\"Type\\": \\"group\\",\\n      \\"Uuid\\": \\"0862***A809\\",\\n      \\"Number\\": \\"101\\",\\n      \\"Name\\": \\"前台\\",\\n      \\"Icon\\": \\"xxx.icon\\",\\n      \\"Status\\": 1,\\n      \\"ExpireAt\\": \\"1649472283046\\"\\n    }\\n  ],\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"0EC7*726E\\"\\n}","type":"json"}]',
      'title' => '获取酒店联系人',
    ),
    'GetHotelContactByNumber' => 
    array (
      'summary' => '根据号码查询联系人信息',
      'path' => '/v1.0/ip/getHotelContactByNumber',
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
          'AliGenie_Auth_SPI' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Number',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '号码',
            'description' => '号码，房间号或者部门自定义的号码',
            'type' => 'string',
            'required' => true,
            'example' => '101',
          ),
        ),
        1 => 
        array (
          'name' => 'UserInfo',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'title' => '用户信息',
            'description' => '用户信息',
            'type' => 'object',
            'properties' => 
            array (
              'EncodeType' => 
              array (
                'description' => '编码类型，此处填写 HOTEL。',
                'type' => 'string',
                'required' => true,
                'example' => 'HOTEL',
              ),
              'EncodeKey' => 
              array (
                'description' => '编码类型对应的值，此处填写该酒店应用ID。请在天猫精灵行业管理平台查看。',
                'type' => 'string',
                'required' => true,
                'example' => '123',
              ),
              'IdType' => 
              array (
                'description' => '用户Id的类型
- OPEN_ID：默认的用户ID标识。
- UNION_ID: 组织维度的用户ID标识，需要提前在开放平台申请组织。',
                'type' => 'string',
                'required' => true,
                'example' => 'OPEN_ID',
              ),
              'Id' => 
              array (
                'description' => '用户标识，设置为userOpenId或userUnionId。',
                'type' => 'string',
                'required' => true,
                'example' => 'rV/XSgPuxZjx/hN3iw8U+e8ou***lk1r43LWcVW6fvY1Rr4sEPFodpnA==',
              ),
              'OrganizationId' => 
              array (
                'description' => '组织ID，如果IdType为UNION_ID时必填。',
                'type' => 'string',
                'required' => false,
                'example' => '123',
              ),
            ),
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
            'title' => 'Result<HotelCallContact>',
            'description' => 'Result<HotelCallContact>',
            'type' => 'object',
            'properties' => 
            array (
              'StatusCode' => 
              array (
                'title' => '调用返回码，200标识成功',
                'description' => '调用返回码，200标识成功',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Result' => 
              array (
                'title' => '服务的实际返回结果',
                'description' => '服务的实际返回结果',
                'type' => 'object',
                'properties' => 
                array (
                  'HotelId' => 
                  array (
                    'title' => '酒店id',
                    'description' => '酒店id',
                    'type' => 'string',
                    'example' => 'a7***83',
                  ),
                  'Type' => 
                  array (
                    'title' => '联系人类型，device：设备，group：分组',
                    'description' => '联系人类型，device：设备，group：分组',
                    'type' => 'string',
                    'example' => 'group',
                  ),
                  'Uuid' => 
                  array (
                    'title' => '唯一标识',
                    'description' => '唯一标识',
                    'type' => 'string',
                    'example' => '2E57***D45F9',
                  ),
                  'Number' => 
                  array (
                    'title' => '号码',
                    'description' => '号码',
                    'type' => 'string',
                    'example' => '101',
                  ),
                  'Name' => 
                  array (
                    'title' => '联系人名称',
                    'description' => '联系人名称',
                    'type' => 'string',
                    'example' => '前台',
                  ),
                  'Icon' => 
                  array (
                    'title' => '图标',
                    'description' => '图标',
                    'type' => 'string',
                    'example' => 'xxx.icon',
                  ),
                  'Status' => 
                  array (
                    'title' => '状态，1：可用，0：不可用',
                    'description' => '状态，1：可用，0：不可用',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                  'ExpireAt' => 
                  array (
                    'title' => '失效时间',
                    'description' => '失效时间',
                    'type' => 'string',
                    'example' => '1649316479098',
                  ),
                ),
              ),
              'Message' => 
              array (
                'title' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                'description' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                'type' => 'string',
                'example' => 'success',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '0EC7*726E',
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
            'errorCode' => 'InvalidParameter',
            'errorMessage' => 'The request parameter is invalid',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'ServerError',
            'errorMessage' => 'internal server error',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"StatusCode\\": 200,\\n  \\"Result\\": {\\n    \\"HotelId\\": \\"a7***83\\",\\n    \\"Type\\": \\"group\\",\\n    \\"Uuid\\": \\"2E57***D45F9\\",\\n    \\"Number\\": \\"101\\",\\n    \\"Name\\": \\"前台\\",\\n    \\"Icon\\": \\"xxx.icon\\",\\n    \\"Status\\": 1,\\n    \\"ExpireAt\\": \\"1649316479098\\"\\n  },\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"0EC7*726E\\"\\n}","type":"json"}]',
      'title' => '根据号码查询联系人',
    ),
    'GetHotelContactByGenieDevice' => 
    array (
      'summary' => '获取当前设备的通话信息',
      'path' => '/v1.0/ip/getHotelContactByGenieDevice',
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
          'AliGenie_Auth_SPI' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'UserInfo',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '用户信息',
            'type' => 'object',
            'properties' => 
            array (
              'EncodeType' => 
              array (
                'title' => '编码类型，此处填写HOTEL。',
                'description' => '编码类型，此处填写HOTEL。',
                'type' => 'string',
                'required' => true,
                'example' => 'HOTEL',
              ),
              'EncodeKey' => 
              array (
                'title' => '编码类型对应的值，此处填写该酒店应用ID。请在天猫精灵行业管理平台查看。',
                'description' => '编码类型对应的值，此处填写该酒店应用ID。请在天猫精灵行业管理平台查看。',
                'type' => 'string',
                'required' => true,
                'example' => '12**45
',
              ),
              'IdType' => 
              array (
                'title' => '用户Id的类型

OPEN_ID：默认的用户ID标识。
UNION_ID: 组织维度的用户ID标识，需要提前在开放平台申请组织。',
                'description' => '用户Id的类型
- OPEN_ID：默认的用户ID标识。
- UNION_ID: 组织维度的用户ID标识，需要提前在开放平台申请组织。',
                'type' => 'string',
                'required' => true,
                'example' => 'OPEN_ID',
              ),
              'Id' => 
              array (
                'title' => '用户标识，设置为userOpenId或userUnionId。',
                'description' => '用户标识，设置为userOpenId或userUnionId。',
                'type' => 'string',
                'required' => true,
                'example' => 'rV/XSgPuxZjx/hN3iw8U+e8ou***lk1r43LWcVW6fvY1Rr4sEPFodpnA==',
              ),
              'OrganizationId' => 
              array (
                'title' => '组织ID，如果IdType为UNION_ID时必填。',
                'description' => '组织ID，如果IdType为UNION_ID时必填。',
                'type' => 'string',
                'required' => false,
                'example' => '1***2',
              ),
            ),
            'required' => false,
          ),
        ),
        1 => 
        array (
          'name' => 'DeviceInfo',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '设备信息',
            'type' => 'object',
            'properties' => 
            array (
              'EncodeType' => 
              array (
                'title' => '编码类型，此处填写HOTEL。',
                'description' => '编码类型，此处填写HOTEL。',
                'type' => 'string',
                'required' => true,
                'example' => 'HOTEL',
              ),
              'EncodeKey' => 
              array (
                'title' => '编码类型对应的值，此处填写该酒店应用ID。请在天猫精灵行业管理平台查看。',
                'description' => '编码类型对应的值，此处填写该酒店应用ID。请在天猫精灵行业管理平台查看。',
                'type' => 'string',
                'required' => true,
                'example' => '12**45',
              ),
              'IdType' => 
              array (
                'title' => '用户标识，设置为userOpenId或userUnionId。',
                'description' => '用户标识，设置为userOpenId或userUnionId。',
                'type' => 'string',
                'required' => true,
                'example' => 'OPEN_ID',
              ),
              'Id' => 
              array (
                'title' => '用户Id的类型

OPEN_ID：默认的用户ID标识。
UNION_ID: 组织维度的用户ID标识，需要提前在开放平台申请组织。',
                'description' => '用户Id的类型
- OPEN_ID：默认的用户ID标识。
- UNION_ID: 组织维度的用户ID标识，需要提前在开放平台申请组织。',
                'type' => 'string',
                'required' => true,
                'example' => 'rV/XSgPuxZjx/hN3iw8U+e8ou***lk1r43LWcVW6fvY1Rr4sEPFodpnA==',
              ),
              'OrganizationId' => 
              array (
                'title' => '组织ID，如果IdType为UNION_ID时必填。',
                'description' => '组织ID，如果IdType为UNION_ID时必填。',
                'type' => 'string',
                'required' => false,
                'example' => '1**2',
              ),
            ),
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
            'title' => 'Result<HotelCallContact>',
            'description' => 'Result<HotelCallContact>',
            'type' => 'object',
            'properties' => 
            array (
              'StatusCode' => 
              array (
                'title' => '调用返回码，除约定的SUCCESS_CODE外，其余由服务提供者自定义',
                'description' => '调用返回码，除约定的SUCCESS_CODE外，其余由服务提供者自定义',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Result' => 
              array (
                'title' => '服务的实际返回结果',
                'description' => '服务的实际返回结果',
                'type' => 'object',
                'properties' => 
                array (
                  'HotelId' => 
                  array (
                    'title' => '酒店id',
                    'description' => '酒店id',
                    'type' => 'string',
                    'example' => 'a7***83',
                  ),
                  'Type' => 
                  array (
                    'title' => '联系人类型，device：设备，group：分组',
                    'description' => '联系人类型，device：设备，group：分组',
                    'type' => 'string',
                    'example' => 'group',
                  ),
                  'Uuid' => 
                  array (
                    'title' => '唯一标识',
                    'description' => '唯一标识',
                    'type' => 'string',
                    'example' => '2E57***D45F9',
                  ),
                  'Number' => 
                  array (
                    'title' => '号码',
                    'description' => '号码',
                    'type' => 'string',
                    'example' => '101',
                  ),
                  'Name' => 
                  array (
                    'title' => '联系人名称',
                    'description' => '联系人名称',
                    'type' => 'string',
                    'example' => '前台',
                  ),
                  'Icon' => 
                  array (
                    'title' => '图标',
                    'description' => '图标',
                    'type' => 'string',
                    'example' => 'xxx.icon',
                  ),
                  'Status' => 
                  array (
                    'title' => '状态，1：可用，0：不可用',
                    'description' => '状态，1：可用，0：不可用',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                  'ExpireAt' => 
                  array (
                    'title' => '失效时间',
                    'description' => '失效时间',
                    'type' => 'string',
                    'example' => '1649472283046',
                  ),
                  'Id' => 
                  array (
                    'title' => '联系人id',
                    'description' => '联系人id',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1',
                  ),
                  'GmtCreate' => 
                  array (
                    'title' => '创建时间',
                    'description' => '创建时间',
                    'type' => 'string',
                    'example' => '2022-07-21 20:02:12',
                  ),
                  'GmtModified' => 
                  array (
                    'title' => '最后修改时间',
                    'description' => '最后修改时间',
                    'type' => 'string',
                    'example' => '2022-07-27 14:06:27
',
                  ),
                ),
              ),
              'Message' => 
              array (
                'title' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                'description' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                'type' => 'string',
                'example' => 'success',
              ),
              'RequestId' => 
              array (
                'title' => '请求id',
                'description' => '请求id',
                'type' => 'string',
                'example' => '73C6***E6FA',
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
            'errorCode' => 'InvalidParameter',
            'errorMessage' => 'The request parameter is invalid',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'ServerError',
            'errorMessage' => 'internal server error',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"StatusCode\\": 200,\\n  \\"Result\\": {\\n    \\"HotelId\\": \\"a7***83\\",\\n    \\"Type\\": \\"group\\",\\n    \\"Uuid\\": \\"2E57***D45F9\\",\\n    \\"Number\\": \\"101\\",\\n    \\"Name\\": \\"前台\\",\\n    \\"Icon\\": \\"xxx.icon\\",\\n    \\"Status\\": 1,\\n    \\"ExpireAt\\": \\"1649472283046\\",\\n    \\"Id\\": 1,\\n    \\"GmtCreate\\": \\"2022-07-21 20:02:12\\",\\n    \\"GmtModified\\": \\"2022-07-27 14:06:27\\\\n\\"\\n  },\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"73C6***E6FA\\"\\n}","type":"json"}]',
      'title' => '获取设备通话联系人信息',
    ),
    'AddOrUpdateScreenSaver' => 
    array (
      'summary' => '仅带屏猫精设备生效，设置带屏设备的屏保配置',
      'path' => '/v1.0/ip/addOrUpdateScreenSaver',
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
          'AliGenie_Auth_SPI' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'deprecated' => false,
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'HotelId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '酒店id',
            'description' => '酒店id',
            'type' => 'string',
            'required' => true,
            'example' => 'a7a3***013',
          ),
        ),
        1 => 
        array (
          'name' => 'HotelScreenSaver',
          'in' => 'formData',
          'style' => 'json',
          'schema' => 
          array (
            'title' => '屏保',
            'description' => '屏保',
            'type' => 'object',
            'properties' => 
            array (
              'ScreenSaverStyle' => 
              array (
                'title' => '屏保样式code',
                'description' => '屏保样式code',
                'type' => 'string',
                'required' => false,
                'example' => 'common-weather',
              ),
              'ScreenSaverPicUrl' => 
              array (
                'title' => '屏保图片',
                'description' => '屏保图片',
                'type' => 'string',
                'required' => false,
                'example' => 'xxx.png',
              ),
            ),
            'required' => true,
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Result<Boolean>',
            'description' => 'Result<Boolean>',
            'type' => 'object',
            'properties' => 
            array (
              'StatusCode' => 
              array (
                'title' => '调用返回码，除约定的SUCCESS_CODE外，其余由服务提供者自定义',
                'description' => '调用返回码，除约定的SUCCESS_CODE外，其余由服务提供者自定义',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Result' => 
              array (
                'title' => '服务的实际返回结果',
                'description' => '服务的实际返回结果',
                'type' => 'boolean',
                'example' => 'True',
              ),
              'Message' => 
              array (
                'title' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                'description' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                'type' => 'string',
                'example' => 'success',
              ),
              'RequestId' => 
              array (
                'description' => '请求id',
                'type' => 'string',
                'example' => '4EED***9661',
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
            'errorCode' => 'InvalidParameter',
            'errorMessage' => 'The request parameter is invalid',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'ServerError',
            'errorMessage' => 'internal server error',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"StatusCode\\": 200,\\n  \\"Result\\": true,\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"4EED***9661\\"\\n}","type":"json"}]',
      'title' => '设置屏保',
      'description' => '- 建议屏保背景图使用深色图片，以保证时间、天气等信息的显示效果',
    ),
    'AddOrUpdateDisPlayModes' => 
    array (
      'summary' => '仅带屏猫精设备生效，用于设置带屏设备上展示的模式列表',
      'path' => '/v1.0/ip/addOrUpdateDisPlayModes',
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
          'AliGenie_Auth_SPI' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'deprecated' => false,
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'HotelId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '酒店id',
            'description' => '酒店id',
            'type' => 'string',
            'required' => true,
            'example' => 'a7***83',
          ),
        ),
        1 => 
        array (
          'name' => 'HotelDeviceModeList',
          'in' => 'formData',
          'style' => 'json',
          'schema' => 
          array (
            'title' => '带屏设备展示的模式code列表',
            'description' => '带屏设备展示的模式code列表',
            'type' => 'array',
            'items' => 
            array (
              'description' => '模式编码',
              'type' => 'string',
              'required' => false,
              'example' => 'dndMode',
            ),
            'required' => true,
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Result<Boolean>',
            'description' => 'Result<Boolean>',
            'type' => 'object',
            'properties' => 
            array (
              'StatusCode' => 
              array (
                'title' => '调用返回码，除约定的SUCCESS_CODE外，其余由服务提供者自定义',
                'description' => '调用返回码，200标识成功',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Result' => 
              array (
                'title' => '服务的实际返回结果',
                'description' => '服务的实际返回结果',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Message' => 
              array (
                'title' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                'description' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                'type' => 'string',
                'example' => 'success',
              ),
              'RequestId' => 
              array (
                'description' => '请求id',
                'type' => 'string',
                'example' => '0EC7*726E',
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
            'errorCode' => 'InvalidParameter',
            'errorMessage' => 'The request parameter is invalid',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'ServerError',
            'errorMessage' => 'internal server error',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"StatusCode\\": 200,\\n  \\"Result\\": true,\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"0EC7*726E\\"\\n}","type":"json"}]',
      'title' => '设置带屏展示模式列表',
    ),
    'GetUnionId' => 
    array (
      'summary' => '使用open id换取跨域的union id',
      'path' => '/v1.0/ip/getUnionId',
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
          'AliGenie_Auth_SPI' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'deprecated' => false,
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'EncodeType',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '编码类型，从天猫精灵开放平台中获取',
            'description' => '编码类型，从天猫精灵开放平台中获取',
            'type' => 'string',
            'required' => true,
            'example' => 'HOTEL',
          ),
        ),
        1 => 
        array (
          'name' => 'EncodeKey',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '编码Key，从天猫精灵开放平台中获取',
            'description' => '编码Key，从天猫精灵开放平台中获取',
            'type' => 'string',
            'required' => true,
            'example' => '125****0946',
          ),
        ),
        2 => 
        array (
          'name' => 'IdType',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => 'open id类型，可为用户id或设备id；
USER_ID: 用户id
DEVICE_ID: 设备id',
            'description' => 'open id类型，可为用户id或设备id
- USER_ID: 用户id
- DEVICE_ID: 设备id',
            'type' => 'string',
            'required' => true,
            'example' => 'DEVICE_ID',
          ),
        ),
        3 => 
        array (
          'name' => 'Id',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => 'id类型对应的open id值',
            'description' => 'id类型对应的open id值',
            'type' => 'string',
            'required' => true,
            'example' => '62a319****abdc',
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
            'title' => 'Result<List<UnionInfo>>',
            'description' => 'Result<List<UnionInfo>>',
            'type' => 'object',
            'properties' => 
            array (
              'StatusCode' => 
              array (
                'title' => '调用返回码，除约定的SUCCESS_CODE外，其余由服务提供者自定义',
                'description' => '调用返回码，除约定的SUCCESS_CODE外，其余由服务提供者自定义',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Result' => 
              array (
                'title' => '服务的实际返回结果',
                'description' => '服务的实际返回结果',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'OrganizationId' => 
                    array (
                      'title' => '组织id，可在天猫精灵开放平台管理',
                      'description' => '组织id，可在天猫精灵开放平台管理',
                      'type' => 'string',
                      'example' => '4325***765',
                    ),
                    'UnionId' => 
                    array (
                      'title' => '请求参数的open id在该组织下的唯一id值',
                      'description' => '请求参数的open id在该组织下的唯一id值',
                      'type' => 'string',
                      'example' => '8bh2****8s8',
                    ),
                  ),
                ),
              ),
              'Message' => 
              array (
                'title' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                'description' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                'type' => 'string',
                'example' => 'success',
              ),
              'RequestId' => 
              array (
                'title' => '请求id',
                'description' => '请求id',
                'type' => 'string',
                'example' => '0EC7*726E',
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
            'errorCode' => 'InvalidParameter',
            'errorMessage' => 'The request parameter is invalid',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'ServerError',
            'errorMessage' => 'internal server error',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"StatusCode\\": 200,\\n  \\"Result\\": [\\n    {\\n      \\"OrganizationId\\": \\"4325***765\\",\\n      \\"UnionId\\": \\"8bh2****8s8\\"\\n    }\\n  ],\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"0EC7*726E\\"\\n}","type":"json"}]',
      'title' => '换取unionId',
      'description' => '当前天猫精灵开放体系下有多个域，例如天猫精灵AI平台、技能应用平台、行业开放平台，各个域的open信息自成闭环，而跨多域的请求交互需要先创建组织，并在组织下将各域的实体(例如酒店应用appid或者技能应用平台创建的应用)关联到组织下，关联后可以使用该接口根据酒店的open id换取到酒店所属组织下的union id，使用union id可在各域调用相应的接口
![](https://img.alicdn.com/imgextra/i3/O1CN01EVSThl1txqw0eFOIb_!!6000000005969-0-tps-1024-274.jpg)',
    ),
    'HotelQrBind' => 
    array (
      'summary' => '酒店带屏设备扫码绑定。',
      'path' => '/v1.0/ip/hotelQrBind',
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
          'AliGenie_Auth_SPI' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
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
          'name' => 'HotelId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '酒店ID',
            'description' => '酒店ID',
            'type' => 'string',
            'required' => true,
            'example' => 'a7***83',
          ),
        ),
        1 => 
        array (
          'name' => 'RoomNo',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '房间号',
            'description' => '房间号',
            'type' => 'string',
            'required' => true,
            'example' => '1211',
          ),
        ),
        2 => 
        array (
          'name' => 'Code',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '带屏设备绑定二维码中的code参数',
            'description' => '带屏设备绑定二维码中的code参数',
            'type' => 'string',
            'required' => true,
            'example' => 'freuisghrtiesnvfkdsvbfuidslnvfs',
          ),
        ),
        3 => 
        array (
          'name' => 'ClientId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '带屏设备绑定二维码中的clientId参数',
            'description' => '带屏设备绑定二维码中的clientId参数',
            'type' => 'string',
            'required' => true,
            'example' => 'xxxxxx',
          ),
        ),
        4 => 
        array (
          'name' => 'ExtInfo',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '额外信息jsonString',
            'description' => '额外信息jsonString',
            'type' => 'string',
            'required' => false,
            'example' => '{}',
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
            'title' => 'Result<UserAndDeviceInfo>',
            'description' => 'Result<UserAndDeviceInfo>',
            'type' => 'object',
            'properties' => 
            array (
              'StatusCode' => 
              array (
                'title' => '调用返回码，200标识为成功',
                'description' => '调用返回码，200标识为成功',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Result' => 
              array (
                'title' => '服务的实际返回结果',
                'description' => '服务的实际返回结果',
                'type' => 'object',
                'properties' => 
                array (
                  'OpenUserInfo' => 
                  array (
                    'title' => '开放用户信息',
                    'description' => '开放用户信息',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'EncodeType' => 
                      array (
                        'title' => '编码类型，从天猫精灵开放平台中获取',
                        'description' => '编码类型，从天猫精灵开放平台中获取',
                        'type' => 'string',
                        'example' => 'HOTEL',
                      ),
                      'EncodeKey' => 
                      array (
                        'title' => '编码Key，从天猫精灵开放平台中获取',
                        'description' => '编码Key，从天猫精灵开放平台中获取',
                        'type' => 'string',
                        'example' => '123',
                      ),
                      'IdType' => 
                      array (
                        'title' => '编码信息，从天猫精灵开放平台中获取',
                        'description' => '编码信息，从天猫精灵开放平台中获取',
                        'type' => 'string',
                        'example' => 'OPEN_ID',
                      ),
                      'Id' => 
                      array (
                        'title' => '用户唯一标识',
                        'description' => '用户唯一标识',
                        'type' => 'string',
                        'example' => 'xxxxxx',
                      ),
                      'OrganizationId' => 
                      array (
                        'title' => '组织ID，如果IdType为UNION_ID时返回',
                        'description' => '组织ID，如果IdType为UNION_ID时返回',
                        'type' => 'string',
                        'example' => 'aaaaaaaa',
                      ),
                    ),
                  ),
                  'OpenDeviceInfo' => 
                  array (
                    'title' => '开放设备信息',
                    'description' => '开放设备信息',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'EncodeType' => 
                      array (
                        'title' => '编码类型，从天猫精灵开放平台中获取',
                        'description' => '编码类型，从天猫精灵开放平台中获取',
                        'type' => 'string',
                        'example' => 'HOTEL',
                      ),
                      'EncodeKey' => 
                      array (
                        'title' => '编码Key，从天猫精灵开放平台中获取',
                        'description' => '编码Key，从天猫精灵开放平台中获取',
                        'type' => 'string',
                        'example' => '123',
                      ),
                      'IdType' => 
                      array (
                        'title' => '编码信息，从天猫精灵开放平台中获取',
                        'description' => '编码信息，从天猫精灵开放平台中获取',
                        'type' => 'string',
                        'example' => 'OPEN_ID',
                      ),
                      'Id' => 
                      array (
                        'title' => '设备唯一标识',
                        'description' => '设备唯一标识',
                        'type' => 'string',
                        'example' => 'xxxxxxx',
                      ),
                      'OrganizationId' => 
                      array (
                        'title' => '组织ID，如果IdType为UNION_ID时返回',
                        'description' => '组织ID，如果IdType为UNION_ID时返回',
                        'type' => 'string',
                        'example' => 'aaaaaaaa',
                      ),
                    ),
                  ),
                ),
              ),
              'Message' => 
              array (
                'title' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                'description' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                'type' => 'string',
                'example' => 'success',
              ),
              'RequestId' => 
              array (
                'title' => '请求id',
                'description' => '请求id',
                'type' => 'string',
                'example' => '73****9-175A-1324-8202-9FAAB*****A',
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
            'errorCode' => 'InvalidParameter',
            'errorMessage' => 'The request parameter is invalid',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'ServerError',
            'errorMessage' => 'internal server error',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"StatusCode\\": 200,\\n  \\"Result\\": {\\n    \\"OpenUserInfo\\": {\\n      \\"EncodeType\\": \\"HOTEL\\",\\n      \\"EncodeKey\\": \\"123\\",\\n      \\"IdType\\": \\"OPEN_ID\\",\\n      \\"Id\\": \\"xxxxxx\\",\\n      \\"OrganizationId\\": \\"aaaaaaaa\\"\\n    },\\n    \\"OpenDeviceInfo\\": {\\n      \\"EncodeType\\": \\"HOTEL\\",\\n      \\"EncodeKey\\": \\"123\\",\\n      \\"IdType\\": \\"OPEN_ID\\",\\n      \\"Id\\": \\"xxxxxxx\\",\\n      \\"OrganizationId\\": \\"aaaaaaaa\\"\\n    }\\n  },\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"73****9-175A-1324-8202-9FAAB*****A\\"\\n}","type":"json"}]',
      'title' => '酒店扫码绑定',
      'description' => '酒店带屏设备扫码绑定，可用于自建app管理设备',
    ),
  ),
  'endpoints' => 
  array (
    0 => 
    array (
      'regionId' => 'cn-zhangjiakou',
      'endpoint' => 'openapi.aligenie.com',
    ),
  ),
);
<?php return [
    'version' => '1.0',
    'info' => [
        'style' => 'AliGenie',
        'product' => 'AliGenie',
        'version' => 'ip_1.0',
    ],
    'directories' => [
        [
            'id' => 172223,
            'title' => '管理后台API',
            'type' => 'directory',
            'children' => [
                [
                    'id' => 176686,
                    'title' => '酒店管理',
                    'type' => 'directory',
                    'children' => [
                        'GetRelationProductList',
                        'CreateHotel',
                        'UpdateHotel',
                        'RemoveHotel',
                        'ListHotelInfo',
                        'ListHotels',
                        'AuditHotel',
                    ],
                ],
                [
                    'id' => 176687,
                    'title' => '房间管理',
                    'type' => 'directory',
                    'children' => [
                        'ListHotelRooms',
                        'BatchAddHotelRoom',
                        'BatchDeleteHotelRoom',
                        'CheckoutWithAK',
                        'QueryHotelRoomDetail',
                    ],
                ],
                [
                    'id' => 176688,
                    'title' => '客需服务',
                    'type' => 'directory',
                    'children' => [
                        'ListSceneCategory',
                        'ListDialogueTemplate',
                        'InsertHotelSceneBookItem',
                        'DeleteHotelSceneBookItem',
                        'UpdateHotelSceneBookItem',
                        'ListHotelSceneBookItems',
                        'ListHotelSceneItems',
                        'UpdateHotelSceneItem',
                        'GetHotelSceneItemDetail',
                        'InvokeRobotPush',
                    ],
                ],
                [
                    'id' => 177617,
                    'title' => '客控管理',
                    'type' => 'directory',
                    'children' => [
                        'ImportHotelConfig',
                        'ImportRoomControlDevices',
                        'ImportRoomGenieScenes',
                        'PageGetHotelRoomDevices',
                        'QueryRoomControlDevices',
                        'GetHotelRoomDevice',
                        'ControlRoomDevice',
                        'PushVoiceBoxCommands',
                        'SyncDeviceStatusWithAk',
                        'CreateRcuScene',
                        'DeleteRcuScene',
                        'UpdateRcuScene',
                        'QuerySceneList',
                        [
                            'id' => 183878,
                            'title' => '红外设备管理',
                            'type' => 'directory',
                            'children' => [
                                'ListAllProvinces',
                                'ListCitiesByProvince',
                                'ListSTBServiceProviders',
                                'ListInfraredDeviceBrands',
                                'ListInfraredRemoteControllers',
                            ],
                        ],
                    ],
                ],
                [
                    'id' => 180467,
                    'title' => '问答管理',
                    'type' => 'directory',
                    'children' => [
                        'ListCustomQA',
                        'AddCustomQA',
                        'AddCustomQAV2',
                        'UpdateCustomQA',
                        'DeleteCustomQA',
                        'GetBasicInfoQA',
                        'UpdateBasicInfoQA',
                        'ListServiceQA',
                        'UpdateServiceQA',
                    ],
                ],
                [
                    'id' => 177620,
                    'title' => '定制配置',
                    'type' => 'directory',
                    'children' => [
                        'AddCartoon',
                        'GetCartoon',
                        'DeleteCartoon',
                        'GetHotelScreenSaverStyle',
                        'AddOrUpdateHotelSetting',
                        'GetHotelSetting',
                        'DeleteHotelSetting',
                    ],
                ],
                [
                    'id' => 176771,
                    'title' => '欢迎语配置',
                    'type' => 'directory',
                    'children' => [
                        'AddOrUpdateWelcomeText',
                        'GetWelcomeTextAndMusic',
                        'ResetWelcomeTextAndMusic',
                        'PushWelcomeTextAndMusic',
                        'PushWelcome',
                    ],
                ],
                [
                    'id' => 176689,
                    'title' => '消息模板',
                    'type' => 'directory',
                    'children' => [
                        'AddMessageTemplate',
                        'ListHotelMessageTemplate',
                        'DeleteMessageTemplate',
                        'UpdateMessageTemplate',
                        'PushHotelMessage',
                    ],
                ],
                [
                    'id' => 180476,
                    'title' => '工单管理',
                    'type' => 'directory',
                    'children' => [
                        'ListTickets',
                        'UpdateTicket',
                    ],
                ],
                [
                    'id' => 176690,
                    'title' => '闹钟管理',
                    'type' => 'directory',
                    'children' => [
                        'DeleteHotelAlarm',
                        'ListHotelAlarm',
                        'CreateHotelAlarm',
                        'UpdateHotelAlarm',
                    ],
                ],
                'ChildAccountAuth',
                'RemoveChildAccountAuth',
                [
                    'id' => 190022,
                    'title' => 'pms',
                    'type' => 'directory',
                    'children' => [
                        'PmsEventReport',
                    ],
                ],
            ],
        ],
        [
            'id' => 172229,
            'title' => '设备端使用API',
            'type' => 'directory',
            'children' => [
                'QueryDeviceStatus',
                'ListHotelControlDevice',
                'DeviceControl',
                'ListHotelSceneItem',
                'ListHotelServiceCategory',
                'GetHotelOrderDetail',
                'ListHotelOrder',
                'SubmitHotelOrder',
                'GetHotelNotice',
                'GetHotelNoticeV2',
                'GetHotelHomeBackImageAndModes',
                'GetHotelSampleUtterances',
                'GetHotelScreenSaver',
                'RoomCheckOut',
                'GetHotelContacts',
                'GetHotelContactByNumber',
                'GetHotelContactByGenieDevice',
            ],
        ],
        [
            'id' => 179237,
            'title' => '其他',
            'type' => 'directory',
            'children' => [
                'AddOrUpdateScreenSaver',
                'AddOrUpdateDisPlayModes',
                'GetUnionId',
                'HotelQrBind',
            ],
        ],
    ],
    'components' => [
        'schemas' => [],
    ],
    'apis' => [
        'GetRelationProductList' => [
            'summary' => '获得创建酒店使用的关联产品列表。',
            'path' => '/v1.0/ip/getRelationProductList',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'https',
                'http',
            ],
            'security' => [
                [
                    'AliGenie_Auth_SPI' => [],
                ],
            ],
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Result<List<ProductInfo>>',
                        'description' => 'Result<List<ProductInfo>>',
                        'type' => 'object',
                        'properties' => [
                            'StatusCode' => [
                                'title' => '调用返回码，除约定的SUCCESS_CODE外，其余由服务提供者自定义',
                                'description' => '调用返回码，除约定的SUCCESS_CODE外，其余由服务提供者自定义',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'Result' => [
                                'title' => '服务的实际返回结果',
                                'description' => '服务的实际返回结果',
                                'type' => 'array',
                                'items' => [
                                    'description' => '返回的详细信息。',
                                    'type' => 'object',
                                    'properties' => [
                                        'Name' => [
                                            'title' => '产品名称',
                                            'description' => '产品名称',
                                            'type' => 'string',
                                            'example' => '橙蜂中控面板',
                                        ],
                                        'Pk' => [
                                            'title' => '产品pk',
                                            'description' => '产品pk',
                                            'type' => 'string',
                                            'example' => 'jTOSl***l1odxImRw',
                                        ],
                                    ],
                                ],
                            ],
                            'Message' => [
                                'title' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                                'description' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                            'Extentions' => [
                                'title' => '扩展字段',
                                'description' => '扩展字段',
                                'type' => 'object',
                                'additionalProperties' => [
                                    'type' => 'any',
                                    'description' => '扩展信息',
                                    'example' => 'any',
                                ],
                            ],
                            'RequestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '0EC7*726E',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidParameter',
                        'errorMessage' => 'The request parameter is invalid',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'ServerError',
                        'errorMessage' => 'internal server error',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"StatusCode\\": 200,\\n  \\"Result\\": [\\n    {\\n      \\"Name\\": \\"橙蜂中控面板\\",\\n      \\"Pk\\": \\"jTOSl***l1odxImRw\\"\\n    }\\n  ],\\n  \\"Message\\": \\"success\\",\\n  \\"Extentions\\": {\\n    \\"key\\": \\"any\\"\\n  },\\n  \\"RequestId\\": \\"0EC7*726E\\"\\n}","type":"json"}]',
            'title' => '获得关联产品列表',
            'description' => '获得创建酒店使用的关联产品列表。',
        ],
        'CreateHotel' => [
            'summary' => '创建酒店接口。',
            'path' => '/v1.0/ip/createHotel',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'https',
                'http',
            ],
            'security' => [
                [
                    'AliGenie_Auth_SPI' => [],
                ],
            ],
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'TbOpenId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '淘宝开放id',
                        'description' => '淘宝授权登录后获得，当前登录的淘宝开放user id',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'AAEV***E3d3Z2ETwh',
                    ],
                ],
                [
                    'name' => 'AppKey',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '开放平台appKey',
                        'description' => '淘宝开放平台申请的用户淘宝授权登录的appKey',
                        'type' => 'string',
                        'required' => true,
                        'example' => '333566791',
                    ],
                ],
                [
                    'name' => 'HotelName',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '酒店名称',
                        'description' => '酒店名称',
                        'type' => 'string',
                        'required' => true,
                        'example' => '天奥酒店',
                    ],
                ],
                [
                    'name' => 'Remark',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '备注',
                        'description' => '备注',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'test',
                    ],
                ],
                [
                    'name' => 'HotelAddress',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '酒店地址',
                        'description' => '酒店地址',
                        'type' => 'string',
                        'required' => true,
                        'example' => '浙江省杭州市xxxxxxxx',
                    ],
                ],
                [
                    'name' => 'HotelEmail',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '酒店联系邮箱',
                        'description' => '酒店联系邮箱',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'test@hotel.com',
                    ],
                ],
                [
                    'name' => 'PhoneNumber',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '酒店联系电话',
                        'description' => '酒店联系电话',
                        'type' => 'string',
                        'required' => true,
                        'example' => '13xxxxxxxx',
                    ],
                ],
                [
                    'name' => 'RelatedPk',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '关联产品',
                        'description' => '关联产品Pk号',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'jTO****Rw',
                    ],
                ],
                [
                    'name' => 'RelatedPks',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'title' => '酒店关联产品列表',
                        'description' => '酒店关联产品列表',
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                            'required' => false,
                        ],
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'RoomNum',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '房间数',
                        'description' => '房间数',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'example' => '100',
                    ],
                ],
                [
                    'name' => 'EstOpenTime',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '预计开业时间：yyyy-MM-dd HH:mm:ss 格式字符串',
                        'description' => '预计开业时间：yyyy-MM-dd HH:mm:ss 格式字符串',
                        'type' => 'string',
                        'required' => true,
                        'example' => '2022-10-1 00:00:00',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Result<Boolean>',
                        'description' => 'Result<Boolean>',
                        'type' => 'object',
                        'properties' => [
                            'StatusCode' => [
                                'title' => '调用返回码，除约定的SUCCESS_CODE外，其余由服务提供者自定义',
                                'description' => '调用返回码，除约定的SUCCESS_CODE外，其余由服务提供者自定义',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'Result' => [
                                'title' => '酒店ID',
                                'description' => '服务的实际返回结果，酒店ID',
                                'type' => 'string',
                                'example' => '5abfd9***2c38661',
                            ],
                            'Message' => [
                                'title' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                                'description' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                            'Extentions' => [
                                'title' => '扩展字段',
                                'description' => '扩展字段',
                                'type' => 'object',
                                'additionalProperties' => [
                                    'type' => 'any',
                                    'description' => '扩展字段',
                                ],
                            ],
                            'RequestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '73C67BD9-175A-1324-8202-9FAABBB3E6FA',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidParameter',
                        'errorMessage' => 'The request parameter is invalid',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'ServerError',
                        'errorMessage' => 'internal server error',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"StatusCode\\": 200,\\n  \\"Result\\": \\"5abfd9***2c38661\\",\\n  \\"Message\\": \\"success\\",\\n  \\"Extentions\\": {\\n    \\"key\\": \\"\\"\\n  },\\n  \\"RequestId\\": \\"73C67BD9-175A-1324-8202-9FAABBB3E6FA\\"\\n}","type":"json"}]',
            'title' => '创建酒店',
            'description' => '创建酒店接口。',
        ],
        'UpdateHotel' => [
            'summary' => '酒店信息修改。',
            'path' => '/v1.0/ip/updateHotel',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'https',
                'http',
            ],
            'security' => [
                [
                    'AliGenie_Auth_SPI' => [],
                ],
            ],
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'TbOpenId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '淘宝开放id',
                        'description' => '淘宝开放id',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'AAEVK***UE3d3Z2ETwh',
                    ],
                ],
                [
                    'name' => 'AppKey',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '开放平台appKey',
                        'description' => '开放平台appKey',
                        'type' => 'string',
                        'required' => true,
                        'example' => '31342884',
                    ],
                ],
                [
                    'name' => 'HotelId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '酒店ID',
                        'description' => '酒店ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'e6dd44fd16084db8a60d69fd625d9f0f',
                    ],
                ],
                [
                    'name' => 'HotelName',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '酒店名称',
                        'description' => '酒店名称',
                        'type' => 'string',
                        'required' => false,
                        'example' => '天奥酒店',
                    ],
                ],
                [
                    'name' => 'Remark',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '备注',
                        'description' => '备注',
                        'type' => 'string',
                        'required' => false,
                        'example' => '测试',
                    ],
                ],
                [
                    'name' => 'HotelAddress',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '酒店地址',
                        'description' => '酒店地址',
                        'type' => 'string',
                        'required' => false,
                        'example' => '浙江省杭州市xxxx',
                    ],
                ],
                [
                    'name' => 'HotelEmail',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '酒店联系邮箱',
                        'description' => '酒店联系邮箱',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'a*****@hotel.com',
                    ],
                ],
                [
                    'name' => 'PhoneNumber',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '酒店联系电话',
                        'description' => '酒店联系电话',
                        'type' => 'string',
                        'required' => false,
                        'example' => '130***',
                    ],
                ],
                [
                    'name' => 'RoomNum',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '房间数',
                        'description' => '房间数',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '4',
                    ],
                ],
                [
                    'name' => 'EstOpenTime',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '预计发布时间：yyyy-MM-dd HH:mm:ss格式字符串',
                        'description' => '预计发布时间：yyyy-MM-dd HH:mm:ss格式字符串',
                        'type' => 'string',
                        'required' => false,
                        'example' => '2022-02-22 00:00:00',
                    ],
                ],
                [
                    'name' => 'RelatedPks',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'title' => '关联产品列表',
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                        ],
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Result<Boolean>',
                        'description' => 'Result<Boolean>',
                        'type' => 'object',
                        'properties' => [
                            'StatusCode' => [
                                'title' => '调用返回码，除约定的SUCCESS_CODE外，其余由服务提供者自定义',
                                'description' => '调用返回码，除约定的SUCCESS_CODE外，其余由服务提供者自定义',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'Result' => [
                                'title' => '服务的实际返回结果',
                                'description' => '服务的实际返回结果',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'Message' => [
                                'title' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                                'description' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                            'Extentions' => [
                                'title' => '扩展字段',
                                'description' => '扩展字段',
                                'type' => 'object',
                                'additionalProperties' => [
                                    'type' => 'any',
                                    'description' => '扩展信息',
                                ],
                            ],
                            'RequestId' => [
                                'description' => 'The ID of the request. ',
                                'type' => 'string',
                                'example' => '46C53AEB-B19C-5C42-B32E-A726979C126F',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidParameter',
                        'errorMessage' => 'The request parameter is invalid',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'ServerError',
                        'errorMessage' => 'internal server error',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"StatusCode\\": 200,\\n  \\"Result\\": true,\\n  \\"Message\\": \\"success\\",\\n  \\"Extentions\\": {\\n    \\"key\\": \\"\\"\\n  },\\n  \\"RequestId\\": \\"46C53AEB-B19C-5C42-B32E-A726979C126F\\"\\n}","type":"json"}]',
            'title' => '酒店信息修改',
        ],
        'RemoveHotel' => [
            'summary' => '删除酒店信息。',
            'path' => '/v1.0/ip/removeHotel',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'https',
                'http',
            ],
            'security' => [
                [
                    'AliGenie_Auth_SPI' => [],
                ],
            ],
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'TbOpenId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '淘宝开放id',
                        'description' => '淘宝开放id',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'AAEVK***UE3d3Z2ETwh',
                    ],
                ],
                [
                    'name' => 'AppKey',
                    'in' => 'formData',
                    'schema' => [
                        'description' => 'appkey',
                        'type' => 'string',
                        'required' => true,
                        'example' => '30193305',
                    ],
                ],
                [
                    'name' => 'HotelId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '酒店id',
                        'description' => '酒店id',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'e6dd44fd16084db8a60d69fd625d9f0f',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Result<Boolean>',
                        'description' => 'Result<Boolean>',
                        'type' => 'object',
                        'properties' => [
                            'StatusCode' => [
                                'title' => '调用返回码，除约定的SUCCESS_CODE外，其余由服务提供者自定义',
                                'description' => '调用返回码，除约定的SUCCESS_CODE外，其余由服务提供者自定义',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'Result' => [
                                'title' => '服务的实际返回结果',
                                'description' => '服务的实际返回结果',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'Message' => [
                                'title' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                                'description' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                            'Extentions' => [
                                'title' => '扩展字段',
                                'description' => '扩展字段',
                                'type' => 'object',
                                'additionalProperties' => [
                                    'type' => 'any',
                                    'description' => '扩展信息',
                                    'example' => '{}',
                                ],
                            ],
                            'RequestId' => [
                                'description' => 'The ID of the request.'."\n",
                                'type' => 'string',
                                'example' => '73C67BD9-175A-1324-8202-9FAABBB3E6FA',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidParameter',
                        'errorMessage' => 'The request parameter is invalid',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'ServerError',
                        'errorMessage' => 'internal server error',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"StatusCode\\": 200,\\n  \\"Result\\": true,\\n  \\"Message\\": \\"success\\",\\n  \\"Extentions\\": {\\n    \\"key\\": \\"{}\\"\\n  },\\n  \\"RequestId\\": \\"73C67BD9-175A-1324-8202-9FAABBB3E6FA\\"\\n}","type":"json"}]',
            'title' => '删除酒店',
            'description' => '删除酒店信息。',
        ],
        'ListHotelInfo' => [
            'summary' => '查询酒店列表信息，例如酒店名称、地址、授权账号等。',
            'path' => '/v1.0/ip/listHotelInfo',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'https',
                'http',
            ],
            'security' => [
                [
                    'AliGenie_Auth_SPI' => [],
                ],
            ],
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Result<List<HotelInfoResponse>>',
                        'description' => 'Result<List<HotelInfoResponse>>',
                        'type' => 'object',
                        'properties' => [
                            'StatusCode' => [
                                'title' => '调用返回码，除约定的SUCCESS_CODE外，其余由服务提供者自定义',
                                'description' => '调用返回码，除约定的SUCCESS_CODE外，其余由服务提供者自定义',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'Result' => [
                                'title' => '服务的实际返回结果',
                                'description' => '服务的实际返回结果',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'HotelId' => [
                                            'description' => '酒店id',
                                            'type' => 'string',
                                            'example' => 'cf2446fc9d144c85aaee4f9ae20a96e7',
                                        ],
                                        'HotelName' => [
                                            'description' => '酒店名称',
                                            'type' => 'string',
                                            'example' => '酒店',
                                        ],
                                        'HotelAddress' => [
                                            'description' => '酒店地址',
                                            'type' => 'string',
                                            'example' => '浙江身杭州市',
                                        ],
                                        'AuthAccount' => [
                                            'type' => 'array',
                                            'items' => [
                                                'type' => 'object',
                                                'properties' => [
                                                    'UserName' => [
                                                        'title' => '授权子账号的账号名称',
                                                        'description' => '用户名称',
                                                        'type' => 'string',
                                                        'example' => 'leetest',
                                                    ],
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                            'Message' => [
                                'title' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                                'description' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                                'type' => 'string',
                            ],
                            'Extentions' => [
                                'title' => '扩展字段',
                                'description' => '扩展字段',
                                'type' => 'object',
                                'additionalProperties' => [
                                    'type' => 'any',
                                ],
                            ],
                            'RequestId' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidParameter',
                        'errorMessage' => 'The request parameter is invalid',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'ServerError',
                        'errorMessage' => 'internal server error',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"StatusCode\\": 200,\\n  \\"Result\\": [\\n    {\\n      \\"HotelId\\": \\"cf2446fc9d144c85aaee4f9ae20a96e7\\",\\n      \\"HotelName\\": \\"酒店\\",\\n      \\"HotelAddress\\": \\"浙江身杭州市\\",\\n      \\"AuthAccount\\": [\\n        {\\n          \\"UserName\\": \\"leetest\\"\\n        }\\n      ]\\n    }\\n  ],\\n  \\"Message\\": \\"\\",\\n  \\"Extentions\\": {\\n    \\"key\\": \\"\\"\\n  },\\n  \\"RequestId\\": \\"\\"\\n}","type":"json"}]',
            'title' => '查询酒店列表',
            'description' => '查询酒店列表信息，例如酒店名称、地址、授权账号等',
        ],
        'ListHotels' => [
            'summary' => '获取酒店列表（待审批/已拒绝/已通过），可细化至单个酒店',
            'path' => '/v1.0/ip/listHotels',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'https',
                'http',
            ],
            'security' => [
                [
                    'AliGenie_Auth_SPI' => [],
                ],
            ],
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'Status',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '审批状态（0：待审批、1：通过、2：拒绝）',
                        'description' => '审批状态（0：待审批、1：通过、2：拒绝）',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'Page',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'title' => '分页参数',
                        'description' => '分页参数',
                        'type' => 'object',
                        'properties' => [
                            'PageNumber' => [
                                'title' => '第几页',
                                'description' => '第几页',
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => true,
                                'docRequired' => true,
                                'example' => '1',
                            ],
                            'PageSize' => [
                                'title' => '每页多少条数据',
                                'description' => '每页多少条数据',
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => true,
                                'docRequired' => true,
                                'example' => '10',
                            ],
                        ],
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'HotelRequest',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'description' => '酒店相关信息',
                        'type' => 'object',
                        'properties' => [
                            'HotelId' => [
                                'description' => ' 酒店id',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'e02e9c59f35845979418df2ab409a4c4',
                            ],
                        ],
                        'required' => false,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Result<HotelListResp>',
                        'description' => 'Result<HotelListResp>',
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'title' => '状态码',
                                'description' => '状态码',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'Result' => [
                                'title' => '服务的实际返回结果',
                                'description' => '服务的实际返回结果',
                                'type' => 'object',
                                'properties' => [
                                    'Page' => [
                                        'title' => '分页结果',
                                        'description' => '分页结果',
                                        'type' => 'object',
                                        'properties' => [
                                            'PageNumber' => [
                                                'title' => '第几页',
                                                'description' => '第几页',
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'example' => '1',
                                            ],
                                            'PageSize' => [
                                                'title' => '每页多少条',
                                                'description' => '每页多少条',
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'example' => '10',
                                            ],
                                            'Total' => [
                                                'title' => '共多少条数据',
                                                'description' => '共多少条数据',
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'example' => '23',
                                            ],
                                            'TotalPage' => [
                                                'title' => '共多少页',
                                                'description' => '共多少页',
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'example' => '3',
                                            ],
                                            'HasNext' => [
                                                'title' => '是否有下一页',
                                                'description' => '是否有下一页',
                                                'type' => 'boolean',
                                                'example' => 'True',
                                            ],
                                        ],
                                    ],
                                    'HotelInfoList' => [
                                        'description' => '酒店信息列表',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '酒店信息列表',
                                            'type' => 'object',
                                            'properties' => [
                                                'HotelId' => [
                                                    'title' => '酒店ID',
                                                    'description' => '酒店ID',
                                                    'type' => 'string',
                                                    'example' => '73ab1b03018d4da69b5bef17095f569b',
                                                ],
                                                'HotelName' => [
                                                    'title' => '酒店名称',
                                                    'description' => '酒店名称',
                                                    'type' => 'string',
                                                    'example' => '酒店名称',
                                                ],
                                                'CreateTime' => [
                                                    'title' => '创建时间（long类型）',
                                                    'description' => '创建时间（long类型）',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '1654568802000',
                                                ],
                                                'HotelAddress' => [
                                                    'title' => '酒店地址',
                                                    'description' => '酒店地址',
                                                    'type' => 'string',
                                                    'example' => '酒店地址',
                                                ],
                                                'PhoneNumber' => [
                                                    'title' => '联系方式',
                                                    'description' => '联系方式',
                                                    'type' => 'string',
                                                    'example' => '13312340987',
                                                ],
                                                'IndustryType' => [
                                                    'title' => '行业类型',
                                                    'description' => '行业类型',
                                                    'type' => 'string',
                                                    'example' => '酒店',
                                                ],
                                                'RoomNum' => [
                                                    'title' => '房间数',
                                                    'description' => '房间数',
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                    'example' => '12',
                                                ],
                                                'RelatedProductName' => [
                                                    'title' => '关联产品名称',
                                                    'description' => '关联产品名称',
                                                    'type' => 'string',
                                                    'example' => '测试产品',
                                                ],
                                                'AccountNames' => [
                                                    'title' => '淘宝账号',
                                                    'description' => '淘宝账号',
                                                    'type' => 'array',
                                                    'items' => [
                                                        'title' => '',
                                                        'description' => '账号名称',
                                                        'type' => 'string',
                                                        'example' => 'testAccount',
                                                    ],
                                                ],
                                                'Status' => [
                                                    'title' => '状态（0：待审批、1：通过、2：拒绝）',
                                                    'description' => '状态（0：待审批、1：通过、2：拒绝）',
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                    'example' => '1',
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                            'Message' => [
                                'title' => '附加信息',
                                'description' => '附加信息',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                            'RequestId' => [
                                'title' => 'RequestId',
                                'description' => 'RequestId',
                                'type' => 'string',
                                'example' => '85789C64-3644-56C0-9C0F-D2E0ECC227EF',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidParameter',
                        'errorMessage' => 'The request parameter is invalid',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'ServerError',
                        'errorMessage' => 'internal server error',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": 200,\\n  \\"Result\\": {\\n    \\"Page\\": {\\n      \\"PageNumber\\": 1,\\n      \\"PageSize\\": 10,\\n      \\"Total\\": 23,\\n      \\"TotalPage\\": 3,\\n      \\"HasNext\\": true\\n    },\\n    \\"HotelInfoList\\": [\\n      {\\n        \\"HotelId\\": \\"73ab1b03018d4da69b5bef17095f569b\\",\\n        \\"HotelName\\": \\"酒店名称\\",\\n        \\"CreateTime\\": 1654568802000,\\n        \\"HotelAddress\\": \\"酒店地址\\",\\n        \\"PhoneNumber\\": \\"13312340987\\",\\n        \\"IndustryType\\": \\"酒店\\",\\n        \\"RoomNum\\": 12,\\n        \\"RelatedProductName\\": \\"测试产品\\",\\n        \\"AccountNames\\": [\\n          \\"testAccount\\"\\n        ],\\n        \\"Status\\": 1\\n      }\\n    ]\\n  },\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"85789C64-3644-56C0-9C0F-D2E0ECC227EF\\"\\n}","type":"json"}]',
            'title' => '酒店列表',
        ],
        'AuditHotel' => [
            'summary' => '酒店审批。',
            'path' => '/v1.0/ip/auditHotel',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'https',
                'http',
            ],
            'security' => [
                [
                    'AliGenie_Auth_SPI' => [],
                ],
            ],
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'operationType' => 'write',
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'AuditHotelReq',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'title' => '审批request',
                        'description' => '审批request',
                        'type' => 'object',
                        'properties' => [
                            'AuditOpinion' => [
                                'title' => '审批意见',
                                'description' => '审批意见',
                                'type' => 'string',
                                'required' => false,
                                'example' => '同意',
                            ],
                            'Status' => [
                                'title' => '审批状态（1：审核通过 2：审核不通过）',
                                'description' => '审批状态（1：审核通过 2：审核不通过）',
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => true,
                                'docRequired' => true,
                                'example' => '1',
                            ],
                            'HotelId' => [
                                'title' => '酒店ID',
                                'description' => '酒店ID',
                                'type' => 'string',
                                'required' => true,
                                'docRequired' => true,
                                'example' => '80d84ea8ed9e422fbad52715c8fc56f1',
                            ],
                        ],
                        'required' => true,
                        'docRequired' => true,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Result<Boolean>',
                        'description' => 'Result<Boolean>',
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'title' => '状态码',
                                'description' => '状态码',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'Result' => [
                                'title' => '服务的实际返回结果',
                                'description' => '服务的实际返回结果',
                                'type' => 'boolean',
                            ],
                            'Message' => [
                                'title' => '附加信息',
                                'description' => '附加信息',
                                'type' => 'string',
                            ],
                            'RequestId' => [
                                'title' => 'RequestId',
                                'description' => 'RequestId',
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidParameter',
                        'errorMessage' => 'The request parameter is invalid',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'ServerError',
                        'errorMessage' => 'internal server error',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": 200,\\n  \\"Result\\": true,\\n  \\"Message\\": \\"\\",\\n  \\"RequestId\\": \\"\\"\\n}","type":"json"}]',
            'title' => '酒店审批',
        ],
        'ListHotelRooms' => [
            'summary' => '获取酒店房间，可细化至房间号',
            'path' => '/v1.0/ip/listHotelRooms',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'https',
                'http',
            ],
            'security' => [
                [
                    'AliGenie_Auth_SPI' => [],
                ],
            ],
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'HotelId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '酒店ID',
                        'description' => '酒店ID',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'e6dd44fd16084db8a60d69fd625d9f0f',
                    ],
                ],
                [
                    'name' => 'HotelAdminRoom',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'description' => '查询的附加信息',
                        'type' => 'object',
                        'properties' => [
                            'RoomNo' => [
                                'description' => '房间号',
                                'type' => 'string',
                                'required' => false,
                                'example' => '1001',
                            ],
                        ],
                        'required' => false,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Result<List<HotelRoomResp>>',
                        'description' => 'Result<List<HotelRoomResp>>',
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'title' => '状态码',
                                'description' => '状态码',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'Result' => [
                                'title' => '服务的实际返回结果',
                                'description' => '服务的实际返回结果',
                                'type' => 'array',
                                'items' => [
                                    'description' => '服务返回的房间信息',
                                    'type' => 'object',
                                    'properties' => [
                                        'HotelId' => [
                                            'title' => '酒店ID',
                                            'description' => '酒店ID',
                                            'type' => 'string',
                                            'example' => 'e6dd44fd16084db8a60d69fd625d9f0f',
                                        ],
                                        'RoomNo' => [
                                            'title' => '房间号',
                                            'description' => '房间号',
                                            'type' => 'string',
                                            'example' => '102',
                                        ],
                                    ],
                                ],
                            ],
                            'Message' => [
                                'title' => '附加信息',
                                'description' => '附加信息',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                            'RequestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => 'D75D971E-33E8-1C48-A4B7-5FA6CC386146',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidParameter',
                        'errorMessage' => 'The request parameter is invalid',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": 200,\\n  \\"Result\\": [\\n    {\\n      \\"HotelId\\": \\"e6dd44fd16084db8a60d69fd625d9f0f\\",\\n      \\"RoomNo\\": \\"102\\"\\n    }\\n  ],\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"D75D971E-33E8-1C48-A4B7-5FA6CC386146\\"\\n}","errorExample":""},{"type":"xml","example":"<ListHotelRoomsResponse>\\n    <Code>200</Code>\\n    <Result>\\n        <HotelId>e6dd44fd16084db8a60d69fd625d9f0f</HotelId>\\n        <RoomNo>102</RoomNo>\\n    </Result>\\n    <Message>success</Message>\\n    <RequestId>D75D971E-33E8-1C48-A4B7-5FA6CC386146</RequestId>\\n</ListHotelRoomsResponse>","errorExample":""}]',
            'title' => '查询酒店房间列表',
            'requestParamsDescription' => '如果要查询某个房间，则输入房间号'."\n"
                .'如果查询酒店的所有房间，不输入房间号',
            'responseParamsDescription' => '如果返回的结果为空，则说明没有本次想要查询的房间号',
            'extraInfo' => '如果出错请检查传入的参数是否正确',
        ],
        'BatchAddHotelRoom' => [
            'summary' => '批量创建酒店房间',
            'path' => '/v1.0/ip/batchAddHotelRoom',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'AliGenie_Auth_SPI' => [],
                ],
            ],
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'operationType' => 'write',
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'HotelId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '酒店ID',
                        'description' => '酒店ID',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'e6dd44fd16084db8a60d69fd625d9f0f',
                    ],
                ],
                [
                    'name' => 'RoomNoList',
                    'in' => 'formData',
                    'style' => 'simple',
                    'schema' => [
                        'title' => '房间号List',
                        'description' => '房间号List（一次调用最多传入10个，否则会拦截）',
                        'type' => 'array',
                        'items' => [
                            'title' => '房间号List',
                            'description' => '房间号List（一次调用最多传入10个，否则会拦截）',
                            'type' => 'string',
                            'required' => true,
                            'docRequired' => true,
                            'example' => '["101","102"]',
                        ],
                        'required' => true,
                        'docRequired' => true,
                        'minItems' => 1,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Result<Boolean>',
                        'description' => 'Result<Boolean>',
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'title' => '状态码',
                                'description' => '状态码',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'Result' => [
                                'title' => '服务的实际返回结果',
                                'description' => '服务的实际返回结果',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'Message' => [
                                'title' => '附加信息',
                                'description' => '附加信息',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                            'RequestId' => [
                                'description' => '请求id',
                                'type' => 'string',
                                'example' => 'FAFCD152-4791-5F2F-B0BE-2DC06FD4F05B',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidParameter',
                        'errorMessage' => 'The request parameter is invalid',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": 200,\\n  \\"Result\\": true,\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"FAFCD152-4791-5F2F-B0BE-2DC06FD4F05B\\"\\n}","type":"json"}]',
            'title' => '批量创建酒店房间',
        ],
        'BatchDeleteHotelRoom' => [
            'summary' => '批量删除酒店房间',
            'path' => '/v1.0/ip/batchDeleteHotelRoom',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'AliGenie_Auth_SPI' => [],
                ],
            ],
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'operationType' => 'write',
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'HotelId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '酒店ID',
                        'description' => '酒店ID',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'e6dd44fd16084db8a60d69fd625d9f0f',
                    ],
                ],
                [
                    'name' => 'RoomNoList',
                    'in' => 'formData',
                    'style' => 'simple',
                    'schema' => [
                        'title' => '房间号List',
                        'description' => '房间号List',
                        'type' => 'array',
                        'items' => [
                            'title' => '房间号List',
                            'description' => '房间号List',
                            'type' => 'string',
                            'required' => true,
                            'docRequired' => true,
                            'example' => '["1211","1212"]',
                        ],
                        'required' => true,
                        'docRequired' => true,
                        'minItems' => 1,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Result<Boolean>',
                        'description' => 'Result<Boolean>',
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'title' => '状态码',
                                'description' => '状态码',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'Result' => [
                                'title' => '服务的实际返回结果',
                                'description' => '服务的实际返回结果',
                                'type' => 'boolean',
                            ],
                            'Message' => [
                                'title' => '附加信息',
                                'description' => '附加信息',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                            'RequestId' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidParameter',
                        'errorMessage' => 'The request parameter is invalid',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": 200,\\n  \\"Result\\": true,\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"\\"\\n}","type":"json"}]',
            'title' => '批量删除酒店房间',
        ],
        'CheckoutWithAK' => [
            'summary' => '退房，清理猫精设备上的定时类服务，例如闹钟、提醒，以及订单信息',
            'path' => '/v1.0/ip/checkoutWithAK',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'https',
                'http',
            ],
            'security' => [
                [
                    'AliGenie_Auth_SPI' => [],
                ],
            ],
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'HotelId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '酒店id',
                        'description' => '酒店id',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'a7***83',
                    ],
                ],
                [
                    'name' => 'RoomNo',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '房间号',
                        'description' => '房间号',
                        'type' => 'string',
                        'required' => true,
                        'example' => '1211',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Result<Boolean>',
                        'description' => 'Result<Boolean>',
                        'type' => 'object',
                        'properties' => [
                            'StatusCode' => [
                                'title' => '调用返回码，除约定的SUCCESS_CODE外，其余由服务提供者自定义',
                                'description' => '调用返回码，200标识成功',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'Result' => [
                                'title' => '服务的实际返回结果',
                                'description' => '服务的实际返回结果',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'Message' => [
                                'title' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                                'description' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                            'RequestId' => [
                                'description' => '请求id',
                                'type' => 'string',
                                'example' => '73C6***E6FA',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidParameter',
                        'errorMessage' => 'The request parameter is invalid',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'ServerError',
                        'errorMessage' => 'internal server error',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"StatusCode\\": 200,\\n  \\"Result\\": true,\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"73C6***E6FA\\"\\n}","type":"json"}]',
            'title' => '退房',
        ],
        'QueryHotelRoomDetail' => [
            'summary' => '房间详情查询，查询包含酒店信息、客控信息、猫精设备信息、客需信息等',
            'path' => '/v1.0/ip/queryHotelRoomDetail',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'https',
                'http',
            ],
            'security' => [
                [
                    'AliGenie_Auth_SPI' => [],
                ],
            ],
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'list',
                'riskType' => 'none',
                'chargeType' => 'free',
            ],
            'parameters' => [
                [
                    'name' => 'Mac',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '设备mac地址'."\n"
                            .'注：在mac uuid sn全都输入的情况下 按照输入正确的内容查询 若全输入都是正确的 则 按照 uuid > mac > sn 优先级查询',
                        'description' => '设备mac地址'."\n"
                            .'注：若在mac uuid sn全都输入的情况下 按照输入正确的内容查询 若全输入都是正确的 则 按照 uuid > mac > sn 优先级查询'."\n"
                            .'传入mac uuid sn其中一个 则酒店id和房间号可不传',
                        'type' => 'string',
                        'required' => false,
                        'example' => '38:c8:**:**:f5:22',
                    ],
                ],
                [
                    'name' => 'Uuid',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '设备uuid，可在App中查看'."\n"
                            .'注：在mac uuid sn全都输入的情况下 按照输入正确的内容查询 若全输入都是正确的 则 按照 uuid > mac > sn 优先级查询',
                        'description' => '设备uuid，可在App中查看'."\n"
                            .'注：若在mac uuid sn全都输入的情况下 按照输入正确的内容查询 若全输入都是正确的 则 按照 uuid > mac > sn 优先级查询'."\n"
                            .'传入mac uuid sn其中一个 则酒店id和房间号可不传',
                        'type' => 'string',
                        'required' => false,
                        'example' => '588***96j5WU',
                    ],
                ],
                [
                    'name' => 'HotelId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '酒店id'."\n"
                            .'注：传入设备mac/sn/uuid 可不传酒店id 若都未传 则 酒店id必传',
                        'description' => '酒店id'."\n"
                            .'注：使用酒店id 房间号查询 查询优先级低于传入设备sn mac uuid，若sn mac uuid都未传 则酒店id必传',
                        'type' => 'string',
                        'required' => false,
                        'example' => '520a0c0***5eb',
                    ],
                ],
                [
                    'name' => 'RoomNo',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '房间号'."\n"
                            .'注：传入设备mac/sn/uuid 可不传房间号 若都未传 则 房间号必传',
                        'description' => '房间号'."\n"
                            .'注：使用酒店id 房间号查询 查询优先级低于传入设备sn mac uuid，若sn mac uuid都未传 则房间号必传',
                        'type' => 'string',
                        'required' => false,
                        'example' => '1211',
                    ],
                ],
                [
                    'name' => 'Sn',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '设备sn信息'."\n"
                            .'在mac uuid sn全都输入的情况下 按照输入正确的内容查询 若全输入都是正确的 则 按照 uuid > mac > sn 优先级查询',
                        'description' => '设备sn信息'."\n"
                            .'注：若在mac uuid sn全都输入的情况下 按照输入正确的内容查询 若全输入都是正确的 则 按照 uuid > mac > sn 优先级查询'."\n"
                            .'传入mac uuid sn其中一个 则酒店id和房间号可不传',
                        'type' => 'string',
                        'required' => false,
                        'example' => '280**28',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Result<HotelRoomDetail>',
                        'description' => 'Result<HotelRoomDetail>',
                        'type' => 'object',
                        'properties' => [
                            'StatusCode' => [
                                'title' => '调用返回码，除约定的SUCCESS_CODE外，其余由服务提供者自定义',
                                'description' => '调用返回码，除约定的SUCCESS_CODE外，其余由服务提供者自定义',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'Result' => [
                                'title' => '服务的实际返回结果',
                                'description' => '服务的实际返回结果',
                                'type' => 'object',
                                'properties' => [
                                    'HotelId' => [
                                        'title' => '酒店id',
                                        'description' => '酒店id',
                                        'type' => 'string',
                                        'example' => 'a7***83',
                                    ],
                                    'HotelName' => [
                                        'title' => '酒店名称',
                                        'description' => '酒店名称',
                                        'type' => 'string',
                                        'example' => 'xx酒店',
                                    ],
                                    'CreatorAccountName' => [
                                        'title' => '酒店创建者账号名称',
                                        'description' => '酒店创建者账号名称',
                                        'type' => 'string',
                                        'example' => 'xx淘宝昵称',
                                    ],
                                    'ConnectType' => [
                                        'title' => '酒店链接类型，rcu/mesh',
                                        'description' => '酒店连接类型，rcu/mesh',
                                        'type' => 'string',
                                        'example' => 'rcu',
                                    ],
                                    'RoomNo' => [
                                        'title' => '房间号',
                                        'description' => '房间号',
                                        'type' => 'string',
                                        'example' => '2001',
                                    ],
                                    'RoomControlInfo' => [
                                        'title' => '客控信息',
                                        'description' => '客控信息',
                                        'type' => 'object',
                                        'properties' => [
                                            'TemplateId' => [
                                                'title' => '房型id',
                                                'description' => '房型id',
                                                'type' => 'integer',
                                                'format' => 'int64',
                                                'example' => '1170',
                                            ],
                                            'TemplateName' => [
                                                'title' => '房型名称',
                                                'description' => '房型名称',
                                                'type' => 'string',
                                                'example' => '大床房',
                                            ],
                                            'AppId' => [
                                                'title' => '云云对接应用id',
                                                'description' => '云云对接应用id',
                                                'type' => 'integer',
                                                'format' => 'int64',
                                                'example' => '78',
                                            ],
                                            'AppName' => [
                                                'title' => '云云对接应用名称',
                                                'description' => '云云对接应用名称',
                                                'type' => 'string',
                                                'example' => 'app',
                                            ],
                                            'RcuUrl' => [
                                                'title' => 'rcu云云调用链接',
                                                'description' => 'rcu云云调用链接',
                                                'type' => 'string',
                                                'example' => 'http://www.xxx.com',
                                            ],
                                            'DeviceInfos' => [
                                                'title' => '客控设备信息列表',
                                                'description' => '客控设备信息列表',
                                                'type' => 'array',
                                                'items' => [
                                                    'title' => '客控设备信息',
                                                    'description' => '客控设备信息',
                                                    'type' => 'object',
                                                    'properties' => [
                                                        'DeviceName' => [
                                                            'title' => '设备别名',
                                                            'description' => '设备别名',
                                                            'type' => 'string',
                                                            'example' => '阅读灯',
                                                        ],
                                                        'CategoryId' => [
                                                            'title' => '品类id',
                                                            'description' => '品类id',
                                                            'type' => 'integer',
                                                            'format' => 'int64',
                                                            'example' => '3',
                                                        ],
                                                        'CategoryEnName' => [
                                                            'title' => '品类英文名',
                                                            'description' => '品类英文名',
                                                            'type' => 'string',
                                                            'example' => 'light',
                                                        ],
                                                        'CategoryName' => [
                                                            'title' => '品类中文名',
                                                            'description' => '品类中文名',
                                                            'type' => 'string',
                                                            'example' => '灯',
                                                        ],
                                                        'LocationId' => [
                                                            'title' => '位置id',
                                                            'description' => '位置id',
                                                            'type' => 'integer',
                                                            'format' => 'int64',
                                                            'example' => '1',
                                                        ],
                                                        'LocationEnName' => [
                                                            'title' => '位置英文名',
                                                            'description' => '位置英文名',
                                                            'type' => 'string',
                                                            'example' => 'room',
                                                        ],
                                                        'LocationName' => [
                                                            'title' => '位置中文名',
                                                            'description' => '位置中文名',
                                                            'type' => 'string',
                                                            'example' => '房间',
                                                        ],
                                                        'DeviceId' => [
                                                            'title' => '设备唯一编号',
                                                            'description' => '设备唯一编号',
                                                            'type' => 'string',
                                                            'example' => 'readLight',
                                                        ],
                                                        'DeviceConnectType' => [
                                                            'title' => '设备链接类型，rcu/mesh/红外',
                                                            'description' => '设备链接类型：'."\n"
                                                                .'- rcu：云云对接'."\n"
                                                                .'- mesh：本地直连'."\n"
                                                                .'- infrared：红外对接',
                                                            'type' => 'string',
                                                            'example' => 'rcu',
                                                        ],
                                                        'ProductKey' => [
                                                            'title' => 'mesh产品pk',
                                                            'description' => 'mesh产品pk',
                                                            'type' => 'string',
                                                            'example' => 'a1ueWGP6W2L',
                                                        ],
                                                        'DeviceCount' => [
                                                            'title' => '设备数量',
                                                            'description' => '设备数量',
                                                            'type' => 'integer',
                                                            'format' => 'int32',
                                                            'example' => '4',
                                                        ],
                                                    ],
                                                ],
                                            ],
                                        ],
                                    ],
                                    'AuthAccounts' => [
                                        'title' => '授权账号列表',
                                        'description' => '授权账号列表',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'AccountName' => [
                                                    'title' => '账号名称',
                                                    'description' => '账号名称',
                                                    'type' => 'string',
                                                    'example' => 'xx淘宝昵称',
                                                ],
                                                'AuthTime' => [
                                                    'title' => '授权时间',
                                                    'description' => '授权时间',
                                                    'type' => 'string',
                                                    'example' => '2023-01-01 12:00:00',
                                                ],
                                            ],
                                        ],
                                    ],
                                    'DeviceInfos' => [
                                        'title' => '猫精设备列表',
                                        'description' => '猫精设备列表',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'Uuid' => [
                                                    'title' => '猫精设备唯一标识uuid',
                                                    'description' => '猫精设备唯一标识uuid',
                                                    'type' => 'string',
                                                    'example' => '41c95c18a0a643bcb58edf438877def5',
                                                ],
                                                'DeviceName' => [
                                                    'title' => '设备名称',
                                                    'description' => '设备名称',
                                                    'type' => 'string',
                                                    'example' => 'IN糖酒店版',
                                                ],
                                                'OnlineStatus' => [
                                                    'title' => '设备在线状态，1：在线，0：离线',
                                                    'description' => '设备在线状态，1：在线，0：离线',
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                    'example' => '1',
                                                ],
                                                'Mac' => [
                                                    'title' => '设备mac地址',
                                                    'description' => '设备mac地址',
                                                    'type' => 'string',
                                                    'example' => 'fa:03:23:58:c3:00',
                                                ],
                                                'Sn' => [
                                                    'title' => '设备sn号',
                                                    'description' => '设备sn号',
                                                    'type' => 'string',
                                                    'example' => 'sag42dlz4qf',
                                                ],
                                                'FirmwareVersion' => [
                                                    'title' => '设备固件版本',
                                                    'description' => '设备固件版本',
                                                    'type' => 'string',
                                                    'example' => '6.1.8-RS-20230425.1806',
                                                ],
                                                'ActiveTime' => [
                                                    'title' => '设备激活时间',
                                                    'description' => '设备激活时间',
                                                    'type' => 'string',
                                                    'example' => '2023-01-01 12:00:00',
                                                ],
                                            ],
                                        ],
                                    ],
                                    'RoomServiceInfo' => [
                                        'title' => '客需服务信息',
                                        'description' => '客需服务信息',
                                        'type' => 'object',
                                        'properties' => [
                                            'RoomServiceCnt' => [
                                                'title' => '已配置服务数量，如洗衣服务',
                                                'description' => '已配置服务数量，如洗衣服务',
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'example' => '12',
                                            ],
                                            'RepairServiceCnt' => [
                                                'title' => '已配置维修数量，如电视坏了',
                                                'description' => '已配置维修数量，如电视坏了',
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'example' => '10',
                                            ],
                                            'GoodsServiceCnt' => [
                                                'title' => '已配置物品数量，如我要包纸巾',
                                                'description' => '已配置物品数量，如我要包纸巾',
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'example' => '10',
                                            ],
                                            'BookServiceCnt' => [
                                                'title' => '已配置预定数量，如预定个spa',
                                                'description' => '已配置预定数量，如预定个spa',
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'example' => '0',
                                            ],
                                        ],
                                    ],
                                    'OtherService' => [
                                        'title' => '其他信息',
                                        'description' => '其他信息',
                                        'type' => 'object',
                                        'properties' => [
                                            'OpenCall' => [
                                                'title' => '是否开通通话',
                                                'description' => '是否开通通话',
                                                'type' => 'boolean',
                                                'example' => 'false',
                                            ],
                                            'UnhandleTickets' => [
                                                'title' => '剩余未处理工单数',
                                                'description' => '剩余未处理工单数',
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'example' => '0',
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                            'Message' => [
                                'title' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                                'description' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                            'RequestId' => [
                                'title' => '请求id',
                                'description' => '请求id',
                                'type' => 'string',
                                'example' => '0EC7*726E',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidParameter',
                        'errorMessage' => 'The request parameter is invalid',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'ServerError',
                        'errorMessage' => 'internal server error',
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"StatusCode\\": 200,\\n  \\"Result\\": {\\n    \\"HotelId\\": \\"a7***83\\",\\n    \\"HotelName\\": \\"xx酒店\\",\\n    \\"CreatorAccountName\\": \\"xx淘宝昵称\\",\\n    \\"ConnectType\\": \\"rcu\\",\\n    \\"RoomNo\\": \\"2001\\",\\n    \\"RoomControlInfo\\": {\\n      \\"TemplateId\\": 1170,\\n      \\"TemplateName\\": \\"大床房\\",\\n      \\"AppId\\": 78,\\n      \\"AppName\\": \\"app\\",\\n      \\"RcuUrl\\": \\"http://www.xxx.com\\",\\n      \\"DeviceInfos\\": [\\n        {\\n          \\"DeviceName\\": \\"阅读灯\\",\\n          \\"CategoryId\\": 3,\\n          \\"CategoryEnName\\": \\"light\\",\\n          \\"CategoryName\\": \\"灯\\",\\n          \\"LocationId\\": 1,\\n          \\"LocationEnName\\": \\"room\\",\\n          \\"LocationName\\": \\"房间\\",\\n          \\"DeviceId\\": \\"readLight\\",\\n          \\"DeviceConnectType\\": \\"rcu\\",\\n          \\"ProductKey\\": \\"a1ueWGP6W2L\\",\\n          \\"DeviceCount\\": 4\\n        }\\n      ]\\n    },\\n    \\"AuthAccounts\\": [\\n      {\\n        \\"AccountName\\": \\"xx淘宝昵称\\",\\n        \\"AuthTime\\": \\"2023-01-01 12:00:00\\"\\n      }\\n    ],\\n    \\"DeviceInfos\\": [\\n      {\\n        \\"Uuid\\": \\"41c95c18a0a643bcb58edf438877def5\\",\\n        \\"DeviceName\\": \\"IN糖酒店版\\",\\n        \\"OnlineStatus\\": 1,\\n        \\"Mac\\": \\"fa:03:23:58:c3:00\\",\\n        \\"Sn\\": \\"sag42dlz4qf\\",\\n        \\"FirmwareVersion\\": \\"6.1.8-RS-20230425.1806\\",\\n        \\"ActiveTime\\": \\"2023-01-01 12:00:00\\"\\n      }\\n    ],\\n    \\"RoomServiceInfo\\": {\\n      \\"RoomServiceCnt\\": 12,\\n      \\"RepairServiceCnt\\": 10,\\n      \\"GoodsServiceCnt\\": 10,\\n      \\"BookServiceCnt\\": 0\\n    },\\n    \\"OtherService\\": {\\n      \\"OpenCall\\": false,\\n      \\"UnhandleTickets\\": 0\\n    }\\n  },\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"0EC7*726E\\"\\n}","type":"json"}]',
            'title' => '房间详情查询',
            'description' => '提供几类查询方式：'."\n"
                .'- 酒店id+房间号：查询酒店相关信息及房间下所有猫精设备信息'."\n"
                .'- 猫精设备uuid：查询单台猫精设备信息及该设备对应的酒店相关信息'."\n"
                .'- 猫精设备mac：查询单台猫精设备信息及该设备对应的酒店相关信息'."\n"
                .'- 猫精设备sn：查询单台猫精设备信息及该设备对应的酒店相关信息',
        ],
        'ListSceneCategory' => [
            'summary' => '酒店场景分类',
            'path' => '/v1.0/ip/listSceneCategory',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'https',
                'http',
            ],
            'security' => [
                [
                    'AliGenie_Auth_SPI' => [],
                ],
            ],
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'HotelId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => 'hotelId',
                        'description' => 'hotelId',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '80d84ea8ed9e422fbad52715c8fc56f1',
                    ],
                ],
                [
                    'name' => 'Type',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '场景分类类型（物品GOODS/服务SERVICE/维修REPAIR）',
                        'description' => '场景分类类型（物品GOODS/服务SERVICE/维修REPAIR）',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'REPAIR',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Result<List<String>>',
                        'description' => 'Result<List<String>>',
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'title' => '状态码',
                                'description' => '状态码',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'Result' => [
                                'title' => '服务的实际返回结果',
                                'description' => '服务的实际返回结果',
                                'type' => 'array',
                                'items' => [
                                    'description' => '分类名称',
                                    'type' => 'string',
                                    'example' => '[     "电器类",     "家具类",     "卫生间类"   ]',
                                ],
                            ],
                            'Message' => [
                                'title' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                                'description' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                            'RequestId' => [
                                'title' => 'RequestId',
                                'description' => 'RequestId',
                                'type' => 'string',
                                'example' => '0EC7*726E',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidParameter',
                        'errorMessage' => 'The request parameter is invalid',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'ServerError',
                        'errorMessage' => 'internal server error',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": 200,\\n  \\"Result\\": [\\n    \\"[     \\\\\\"电器类\\\\\\",     \\\\\\"家具类\\\\\\",     \\\\\\"卫生间类\\\\\\"   ]\\"\\n  ],\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"0EC7*726E\\"\\n}","type":"json"}]',
            'title' => '酒店场景服务分类',
        ],
        'ListDialogueTemplate' => [
            'summary' => '酒店场景对话模板',
            'path' => '/v1.0/ip/listDialogueTemplate',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'https',
                'http',
            ],
            'security' => [
                [
                    'AliGenie_Auth_SPI' => [],
                ],
            ],
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'HotelId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => 'hotelId',
                        'description' => 'hotelId',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '80d84ea8ed9e422fbad52715c8fc56f1',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Result<List<DialogueTemplate>>',
                        'description' => 'Result<List<DialogueTemplate>>',
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'title' => '状态码',
                                'description' => '状态码',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'Result' => [
                                'title' => '服务的实际返回结果',
                                'description' => '服务的实际返回结果',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'TemplateId' => [
                                            'title' => '模板ID',
                                            'description' => '模板ID',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '4',
                                        ],
                                        'TemplateName' => [
                                            'title' => '模板名称',
                                            'description' => '模板名称',
                                            'type' => 'string',
                                            'example' => '物品多轮模板',
                                        ],
                                        'TemplateDetail' => [
                                            'title' => '模板详情（维修只有一轮对话）',
                                            'description' => '模板详情（维修只有一轮对话）',
                                            'type' => 'object',
                                            'properties' => [
                                                'FirstDialogueTemplate' => [
                                                    'title' => '第一轮对话',
                                                    'description' => '第一轮对话',
                                                    'type' => 'object',
                                                    'properties' => [
                                                        'ZeroPriceYesAnswer' => [
                                                            'title' => '价格=0  && 肯定回答',
                                                            'description' => '价格=0  && 肯定回答',
                                                            'type' => 'string',
                                                            'example' => '好的，服务员会尽快送来。',
                                                        ],
                                                        'ZeroPriceNoAnswer' => [
                                                            'title' => '价格=0  && 否定回答',
                                                            'description' => '价格=0  && 否定回答',
                                                            'type' => 'string',
                                                            'example' => '对不起，暂时不提供此物品。',
                                                        ],
                                                        'NonzeroPriceYesAnswer' => [
                                                            'title' => '价格！=0  &&肯定回答',
                                                            'description' => '价格！=0  &&肯定回答',
                                                            'type' => 'string',
                                                            'example' => '${goodsName}${price}元，请问需要服务员送来吗？',
                                                        ],
                                                    ],
                                                ],
                                                'SecondDialogueTemplate' => [
                                                    'title' => '第二轮对话',
                                                    'description' => '第二轮对话',
                                                    'type' => 'object',
                                                    'properties' => [
                                                        'NonzeroPriceYesAnswer' => [
                                                            'title' => '价格！=0  && 肯定回答',
                                                            'description' => '价格！=0  && 肯定回答',
                                                            'type' => 'string',
                                                            'example' => '好的，服务员会尽快送来${goodsName}',
                                                        ],
                                                        'NonzeroPriceNoAnswer' => [
                                                            'title' => '价格！=0  && 否定回答',
                                                            'description' => '价格！=0  && 否定回答',
                                                            'type' => 'string',
                                                            'example' => '好的，已取消。',
                                                        ],
                                                    ],
                                                ],
                                            ],
                                        ],
                                        'Type' => [
                                            'title' => '模板类型',
                                            'description' => '模板类型',
                                            'type' => 'string',
                                            'example' => 'GOODS',
                                        ],
                                    ],
                                ],
                            ],
                            'Message' => [
                                'title' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                                'description' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                            'RequestId' => [
                                'title' => 'RequestId',
                                'description' => 'RequestId',
                                'type' => 'string',
                                'example' => '0EC7*726E',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidParameter',
                        'errorMessage' => 'The request parameter is invalid',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'ServerError',
                        'errorMessage' => 'internal server error',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": 200,\\n  \\"Result\\": [\\n    {\\n      \\"TemplateId\\": 4,\\n      \\"TemplateName\\": \\"物品多轮模板\\",\\n      \\"TemplateDetail\\": {\\n        \\"FirstDialogueTemplate\\": {\\n          \\"ZeroPriceYesAnswer\\": \\"好的，服务员会尽快送来。\\",\\n          \\"ZeroPriceNoAnswer\\": \\"对不起，暂时不提供此物品。\\",\\n          \\"NonzeroPriceYesAnswer\\": \\"${goodsName}${price}元，请问需要服务员送来吗？\\"\\n        },\\n        \\"SecondDialogueTemplate\\": {\\n          \\"NonzeroPriceYesAnswer\\": \\"好的，服务员会尽快送来${goodsName}\\",\\n          \\"NonzeroPriceNoAnswer\\": \\"好的，已取消。\\"\\n        }\\n      },\\n      \\"Type\\": \\"GOODS\\"\\n    }\\n  ],\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"0EC7*726E\\"\\n}","type":"json"}]',
            'title' => '酒店场景服务对话模板',
        ],
        'InsertHotelSceneBookItem' => [
            'summary' => '酒店场景预订新增',
            'path' => '/v1.0/ip/insertHotelSceneBookItem',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'https',
                'http',
            ],
            'security' => [
                [
                    'AliGenie_Auth_SPI' => [],
                ],
            ],
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'operationType' => 'write',
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'HotelId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => 'hotelID',
                        'description' => 'hotelID',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '80d84ea8ed9e422fbad52715c8fc56f1',
                    ],
                ],
                [
                    'name' => 'AddHotelSceneItemReq',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'title' => 'addHotelSceneItemReq',
                        'description' => 'addHotelSceneItemReq',
                        'type' => 'object',
                        'properties' => [
                            'Type' => [
                                'title' => '酒店场景预订类型（FOOD：餐饮、LEISURE：SPA休闲、CAR_SERVICE：打车）',
                                'description' => '酒店场景预订类型（FOOD：餐饮、LEISURE：SPA休闲、CAR_SERVICE：打车）',
                                'type' => 'string',
                                'required' => true,
                                'docRequired' => true,
                                'example' => 'FOOD',
                            ],
                            'Name' => [
                                'title' => '酒店场景预订item名称',
                                'description' => '酒店场景预订item名称',
                                'type' => 'string',
                                'required' => true,
                                'docRequired' => true,
                                'example' => '青椒肉丝',
                            ],
                            'Price' => [
                                'title' => '价格（单位：分）',
                                'description' => '价格（单位：分）',
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => true,
                                'docRequired' => true,
                                'example' => '1250',
                            ],
                            'Icon' => [
                                'title' => 'icon',
                                'description' => 'icon',
                                'type' => 'string',
                                'required' => true,
                                'docRequired' => true,
                                'example' => 'https://ailabs.alibabausercontent.com/platform/28d7a91e3c05db3855725fc39e0387e7/welcome_audios/aa918294b6ca3aa115c51135bf9b80cb/l9f996sq.png',
                            ],
                        ],
                        'required' => true,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Result<Boolean>',
                        'description' => 'Result<Boolean>',
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'title' => '状态码',
                                'description' => '状态码',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'Result' => [
                                'title' => '服务的实际返回结果',
                                'description' => '服务的实际返回结果',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'Message' => [
                                'title' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                                'description' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                            'RequestId' => [
                                'title' => 'RequestId',
                                'description' => 'RequestId',
                                'type' => 'string',
                                'example' => '36FB***80C2',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidParameter',
                        'errorMessage' => 'The request parameter is invalid',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'ServerError',
                        'errorMessage' => 'internal server error',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": 200,\\n  \\"Result\\": true,\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"36FB***80C2\\"\\n}","type":"json"}]',
            'title' => '新增酒店预订服务项',
        ],
        'DeleteHotelSceneBookItem' => [
            'summary' => '酒店场景预订删除',
            'path' => '/v1.0/ip/deleteHotelSceneBookItem',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'https',
                'http',
            ],
            'security' => [
                [
                    'AliGenie_Auth_SPI' => [],
                ],
            ],
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'operationType' => 'write',
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'HotelId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => 'hotelID',
                        'description' => 'hotelID',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '80d84ea8ed9e422fbad52715c8fc56f1',
                    ],
                ],
                [
                    'name' => 'Id',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '酒店场景预订itemID'."\n"
                            .' 删除条件 id与名称必传一个',
                        'description' => '酒店场景预订itemID',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'docRequired' => true,
                        'example' => '11823',
                    ],
                ],
                [
                    'name' => 'Name',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '名称 删除条件 id与名称必传一个',
                        'description' => '名称 删除条件 id与名称必传一个',
                        'type' => 'string',
                        'required' => false,
                        'example' => '棉签',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Result<Boolean>',
                        'description' => 'Result<Boolean>',
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'title' => '状态码',
                                'description' => '状态码',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'Result' => [
                                'title' => '服务的实际返回结果',
                                'description' => '服务的实际返回结果',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'Message' => [
                                'title' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                                'description' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                            'RequestId' => [
                                'title' => 'RequestId',
                                'description' => '请求id',
                                'type' => 'string',
                                'example' => '0EC7*726E',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidParameter',
                        'errorMessage' => 'The request parameter is invalid',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'ServerError',
                        'errorMessage' => 'internal server error',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": 200,\\n  \\"Result\\": true,\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"0EC7*726E\\"\\n}","type":"json"}]',
            'title' => '删除酒店预订服务项',
        ],
        'UpdateHotelSceneBookItem' => [
            'summary' => '酒店场景预订编辑',
            'path' => '/v1.0/ip/updateHotelSceneBookItem',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'https',
                'http',
            ],
            'security' => [
                [
                    'AliGenie_Auth_SPI' => [],
                ],
            ],
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'operationType' => 'write',
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'HotelId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => 'hotelID',
                        'description' => 'hotelID',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '80d84ea8ed9e422fbad52715c8fc56f1',
                    ],
                ],
                [
                    'name' => 'UpdateHotelSceneBookReq',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'title' => 'updateHotelSceneBookReq',
                        'description' => 'updateHotelSceneBookReq',
                        'type' => 'object',
                        'properties' => [
                            'Id' => [
                                'title' => '酒店场景预订itemID'."\n"
                                    .'id与名称必须传其中一个',
                                'description' => '酒店场景预订itemID',
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                                'docRequired' => true,
                                'example' => '1',
                            ],
                            'Name' => [
                                'title' => '名称 查询条件 id与名称必须传一个',
                                'description' => '名称',
                                'type' => 'string',
                                'required' => false,
                                'docRequired' => true,
                                'example' => '青椒肉丝',
                            ],
                            'Icon' => [
                                'title' => 'icon',
                                'description' => 'icon',
                                'type' => 'string',
                                'required' => true,
                                'docRequired' => true,
                                'example' => 'https://ailabs.alibabausercontent.com/platform/28d7a91e3c05db3855725fc39e0387e7/welcome_audios/aa918294b6ca3aa115c51135bf9b80cb/l9f996sq.png',
                            ],
                            'Price' => [
                                'title' => '价格（单位：分）',
                                'description' => '价格（单位：分）',
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => true,
                                'docRequired' => true,
                                'example' => '1250',
                            ],
                        ],
                        'required' => true,
                        'docRequired' => true,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => '',
                        'description' => '',
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'title' => '状态码',
                                'description' => '状态码',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'Result' => [
                                'title' => '服务的实际返回结果',
                                'description' => '服务的实际返回结果',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'Message' => [
                                'title' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                                'description' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                            'RequestId' => [
                                'title' => 'RequestId',
                                'description' => '请求Id',
                                'type' => 'string',
                                'example' => '0EC7*726E',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidParameter',
                        'errorMessage' => 'The request parameter is invalid',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'ServerError',
                        'errorMessage' => 'internal server error',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": 200,\\n  \\"Result\\": true,\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"0EC7*726E\\"\\n}","type":"json"}]',
            'title' => '编辑酒店场景预订',
        ],
        'ListHotelSceneBookItems' => [
            'summary' => '酒店场景预订列表（餐饮/SPA休闲/打车）',
            'path' => '/v1.0/ip/listHotelSceneBookItems',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'https',
                'http',
            ],
            'security' => [
                [
                    'AliGenie_Auth_SPI' => [],
                ],
            ],
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'HotelId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => 'hotelID',
                        'description' => 'hotelID',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '80d84ea8ed9e422fbad52715c8fc56f1',
                    ],
                ],
                [
                    'name' => 'Type',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '酒店场景预订类型（FOOD：餐饮、LEISURE：SPA休闲、CAR_SERVICE：打车）',
                        'description' => '酒店场景预订类型（FOOD：餐饮、LEISURE：SPA休闲、CAR_SERVICE：打车）',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'FOOD',
                    ],
                ],
                [
                    'name' => 'Page',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'title' => '分页参数',
                        'description' => '分页参数',
                        'type' => 'object',
                        'properties' => [
                            'PageNumber' => [
                                'title' => '第几页',
                                'description' => '第几页',
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => true,
                                'docRequired' => true,
                                'example' => '1',
                            ],
                            'PageSize' => [
                                'title' => '每页多少条数据',
                                'description' => '每页多少条数据',
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => true,
                                'docRequired' => true,
                                'example' => '10',
                            ],
                        ],
                        'required' => true,
                        'docRequired' => true,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Result<HotelSceneListResp>',
                        'description' => 'Result<HotelSceneListResp>',
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'title' => '状态码',
                                'description' => '状态码',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'Result' => [
                                'title' => '服务的实际返回结果',
                                'description' => '服务的实际返回结果',
                                'type' => 'object',
                                'properties' => [
                                    'Page' => [
                                        'title' => '分页结果',
                                        'description' => '分页结果',
                                        'type' => 'object',
                                        'properties' => [
                                            'PageNumber' => [
                                                'title' => '第几页',
                                                'description' => '第几页',
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'example' => '1',
                                            ],
                                            'PageSize' => [
                                                'title' => '每页多少条数据',
                                                'description' => '每页多少条数据',
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'example' => '10',
                                            ],
                                            'Total' => [
                                                'title' => '共多少条数据',
                                                'description' => '共多少条数据',
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'example' => '23',
                                            ],
                                            'TotalPage' => [
                                                'title' => '共多少页',
                                                'description' => '共多少页',
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'example' => '3',
                                            ],
                                            'HasNext' => [
                                                'title' => '是否有下一页',
                                                'description' => '是否有下一页',
                                                'type' => 'boolean',
                                                'example' => 'True',
                                            ],
                                        ],
                                    ],
                                    'SceneItemList' => [
                                        'description' => '预定项列表',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '预定项',
                                            'type' => 'object',
                                            'properties' => [
                                                'Type' => [
                                                    'title' => '酒店场景预订类型（FOOD：餐饮、LEISURE：SPA休闲、CAR_SERVICE：打车）',
                                                    'description' => '酒店场景预订类型（FOOD：餐饮、LEISURE：SPA休闲、CAR_SERVICE：打车）',
                                                    'type' => 'string',
                                                    'example' => 'FOOD',
                                                ],
                                                'Id' => [
                                                    'title' => '酒店场景预订itemID',
                                                    'description' => '酒店场景预订itemID',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '11824',
                                                ],
                                                'Name' => [
                                                    'title' => '名称',
                                                    'description' => '名称',
                                                    'type' => 'string',
                                                    'example' => '青椒肉丝',
                                                ],
                                                'Status' => [
                                                    'title' => '状态（已添加）',
                                                    'description' => '状态（已添加）',
                                                    'type' => 'string',
                                                    'example' => '已添加',
                                                ],
                                                'UpdateTime' => [
                                                    'title' => '更新时间',
                                                    'description' => '更新时间',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '1666161803',
                                                ],
                                                'Icon' => [
                                                    'title' => '物品、服务、维修的图标',
                                                    'description' => '物品、服务、维修的图标',
                                                    'type' => 'string',
                                                    'example' => 'https://ailabs.alibabausercontent.com/platform/28d7a91e3c05db3855725fc39e0387e7/welcome_audios/aa918294b6ca3aa115c51135bf9b80cb/l9f996sq.png',
                                                ],
                                                'Price' => [
                                                    'title' => '价格（单位：分）',
                                                    'description' => '价格（单位：分）',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '1850',
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                            'Message' => [
                                'title' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                                'description' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                            'RequestId' => [
                                'title' => 'RequestId',
                                'description' => '请求id',
                                'type' => 'string',
                                'example' => '0EC7*726E',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidParameter',
                        'errorMessage' => 'The request parameter is invalid',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'ServerError',
                        'errorMessage' => 'internal server error',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": 200,\\n  \\"Result\\": {\\n    \\"Page\\": {\\n      \\"PageNumber\\": 1,\\n      \\"PageSize\\": 10,\\n      \\"Total\\": 23,\\n      \\"TotalPage\\": 3,\\n      \\"HasNext\\": true\\n    },\\n    \\"SceneItemList\\": [\\n      {\\n        \\"Type\\": \\"FOOD\\",\\n        \\"Id\\": 11824,\\n        \\"Name\\": \\"青椒肉丝\\",\\n        \\"Status\\": \\"已添加\\",\\n        \\"UpdateTime\\": 1666161803,\\n        \\"Icon\\": \\"https://ailabs.alibabausercontent.com/platform/28d7a91e3c05db3855725fc39e0387e7/welcome_audios/aa918294b6ca3aa115c51135bf9b80cb/l9f996sq.png\\",\\n        \\"Price\\": 1850\\n      }\\n    ]\\n  },\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"0EC7*726E\\"\\n}","type":"json"}]',
            'title' => '查询酒店预订列表',
        ],
        'ListHotelSceneItems' => [
            'summary' => '查询酒店场景服务（物品/服务/维修）',
            'path' => '/v1.0/ip/listHotelSceneItems',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'https',
                'http',
            ],
            'security' => [
                [
                    'AliGenie_Auth_SPI' => [],
                ],
            ],
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'HotelId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => 'hotelID',
                        'description' => 'hotelID',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '80d84ea8ed9e422fbad52715c8fc56f1',
                    ],
                ],
                [
                    'name' => 'ListHotelSceneReq',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'title' => 'ListHotelSceneReq',
                        'description' => 'ListHotelSceneReq',
                        'type' => 'object',
                        'properties' => [
                            'Page' => [
                                'title' => '分页参数',
                                'description' => '分页参数',
                                'type' => 'object',
                                'properties' => [
                                    'PageNumber' => [
                                        'description' => '页码',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'required' => true,
                                        'docRequired' => true,
                                        'example' => '1',
                                    ],
                                    'PageSize' => [
                                        'description' => '每页的大小，默认为10 ',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'required' => true,
                                        'docRequired' => true,
                                        'example' => '10',
                                    ],
                                ],
                                'required' => true,
                                'docRequired' => true,
                            ],
                            'Type' => [
                                'title' => '酒店场景类型（物品GOODS/服务SERVICE/维修REPAIR）',
                                'description' => '酒店场景服务类型（物品GOODS/服务SERVICE/维修REPAIR）',
                                'type' => 'string',
                                'required' => true,
                                'docRequired' => true,
                                'example' => 'GOODS',
                            ],
                            'Category' => [
                                'title' => '酒店场景类型二级分类',
                                'description' => '酒店场景服务类型二级分类',
                                'type' => 'string',
                                'required' => false,
                                'example' => '客用品类',
                            ],
                            'Status' => [
                                'title' => '是否添加',
                                'description' => '是否添加',
                                'type' => 'string',
                                'required' => false,
                                'example' => '已添加',
                            ],
                            'Keywords' => [
                                'title' => '酒店场景名称',
                                'description' => '酒店场景服务项名称',
                                'type' => 'string',
                                'required' => false,
                                'example' => '棉签',
                            ],
                        ],
                        'required' => true,
                        'docRequired' => true,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Result<HotelSceneListResp>',
                        'description' => 'Result<HotelSceneListResp>',
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'title' => '状态码',
                                'description' => '状态码',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'Result' => [
                                'title' => '服务的实际返回结果',
                                'description' => '服务的实际返回结果',
                                'type' => 'object',
                                'properties' => [
                                    'Page' => [
                                        'title' => '分页结果',
                                        'description' => '分页结果',
                                        'type' => 'object',
                                        'properties' => [
                                            'PageNumber' => [
                                                'title' => '第几页',
                                                'description' => '第几页',
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'example' => '1',
                                            ],
                                            'PageSize' => [
                                                'title' => '每页多少条数据',
                                                'description' => '每页多少条数据',
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'example' => '10',
                                            ],
                                            'Total' => [
                                                'title' => '共多少条数据',
                                                'description' => '共多少条数据',
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'example' => '23',
                                            ],
                                            'TotalPage' => [
                                                'title' => '共多少页',
                                                'description' => '共多少页',
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'example' => '3',
                                            ],
                                            'HasNext' => [
                                                'title' => '是否有下一页',
                                                'description' => '是否有下一页',
                                                'type' => 'boolean',
                                                'example' => 'False',
                                            ],
                                        ],
                                    ],
                                    'SceneItemList' => [
                                        'description' => '服务项列表',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '服务项',
                                            'type' => 'object',
                                            'properties' => [
                                                'Type' => [
                                                    'title' => '酒店场景类型',
                                                    'description' => '酒店场景服务类型',
                                                    'type' => 'string',
                                                    'example' => 'GOODS',
                                                ],
                                                'Category' => [
                                                    'title' => '酒店场景类型二级分类',
                                                    'description' => '酒店场景类型二级分类',
                                                    'type' => 'string',
                                                    'example' => '客用品类',
                                                ],
                                                'Id' => [
                                                    'title' => 'id',
                                                    'description' => 'id',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '10336',
                                                ],
                                                'Name' => [
                                                    'title' => '名称',
                                                    'description' => '名称',
                                                    'type' => 'string',
                                                    'example' => '棉签',
                                                ],
                                                'Status' => [
                                                    'title' => '状态（已添加、未添加）',
                                                    'description' => '状态（已添加、未添加）',
                                                    'type' => 'string',
                                                    'example' => '已添加',
                                                ],
                                                'UpdateTime' => [
                                                    'title' => '更新时间',
                                                    'description' => '更新时间',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '1666163226',
                                                ],
                                                'Icon' => [
                                                    'title' => '物品、服务、维修的图标',
                                                    'description' => '物品、服务、维修的图标',
                                                    'type' => 'string',
                                                    'example' => 'https://ailabsaicloudservice.alicdn.com/hotel/icon/jiudianmianban_fuwushangpintu/wupin/keyongpinlei/mianqian.png',
                                                ],
                                                'Price' => [
                                                    'title' => '价格（单位：分，eg：160表示1.6元）',
                                                    'description' => '价格（单位：分，eg：160表示1.6元）',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '160',
                                                ],
                                                'DeliveryMethod' => [
                                                    'title' => '物品配送方式 waiter 服务员  robot 机器人',
                                                    'description' => '物品配送方式 waiter 服务员  robot 机器人',
                                                    'type' => 'string',
                                                    'example' => 'robot',
                                                ],
                                                'RobotName' => [
                                                    'title' => '机器人名称',
                                                    'description' => '机器人名称',
                                                    'type' => 'string',
                                                    'example' => '测试机器人',
                                                ],
                                                'PaymentMethod' => [
                                                    'title' => '结算方式:room 房费结算  robot 机器人结算',
                                                    'description' => '结算方式:room 房费结算  robot 机器人结算',
                                                    'type' => 'string',
                                                    'example' => 'robot',
                                                ],
                                                'LimitSwitch' => [
                                                    'title' => '是否限制数量:0或不传:不限制,1:限制',
                                                    'description' => '是否限制数量:0或不传:不限制,1:限制',
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                    'example' => '1',
                                                ],
                                                'LimitNumber' => [
                                                    'title' => '限制数量',
                                                    'description' => '限制数量',
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                    'example' => '2',
                                                ],
                                                'BeyondLimitReply' => [
                                                    'title' => '超限回复',
                                                    'description' => '超限回复',
                                                    'type' => 'string',
                                                    'example' => '顾客您好，该物品已超出酒店今日供应限制，请联系前台。',
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                            'Message' => [
                                'title' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                                'description' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                            'RequestId' => [
                                'title' => 'RequestId',
                                'description' => '请求id',
                                'type' => 'string',
                                'example' => '0EC7*726E',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidParameter',
                        'errorMessage' => 'The request parameter is invalid',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'ServerError',
                        'errorMessage' => 'internal server error',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": 200,\\n  \\"Result\\": {\\n    \\"Page\\": {\\n      \\"PageNumber\\": 1,\\n      \\"PageSize\\": 10,\\n      \\"Total\\": 23,\\n      \\"TotalPage\\": 3,\\n      \\"HasNext\\": true\\n    },\\n    \\"SceneItemList\\": [\\n      {\\n        \\"Type\\": \\"GOODS\\",\\n        \\"Category\\": \\"客用品类\\",\\n        \\"Id\\": 10336,\\n        \\"Name\\": \\"棉签\\",\\n        \\"Status\\": \\"已添加\\",\\n        \\"UpdateTime\\": 1666163226,\\n        \\"Icon\\": \\"https://ailabsaicloudservice.alicdn.com/hotel/icon/jiudianmianban_fuwushangpintu/wupin/keyongpinlei/mianqian.png\\",\\n        \\"Price\\": 160,\\n        \\"DeliveryMethod\\": \\"robot\\",\\n        \\"RobotName\\": \\"测试机器人\\",\\n        \\"PaymentMethod\\": \\"robot\\",\\n        \\"LimitSwitch\\": 1,\\n        \\"LimitNumber\\": 2,\\n        \\"BeyondLimitReply\\": \\"顾客您好，该物品已超出酒店今日供应限制，请联系前台。\\"\\n      }\\n    ]\\n  },\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"0EC7*726E\\"\\n}","type":"json"}]',
            'title' => '查询酒店场景服务',
        ],
        'UpdateHotelSceneItem' => [
            'summary' => '酒店场景修改（开启/关闭/编辑）',
            'path' => '/v1.0/ip/updateHotelSceneItem',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'https',
                'http',
            ],
            'security' => [
                [
                    'AliGenie_Auth_SPI' => [],
                ],
            ],
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'operationType' => 'write',
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'HotelId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => 'hotelID',
                        'description' => 'hotelID',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '80d84ea8ed9e422fbad52715c8fc56f1',
                    ],
                ],
                [
                    'name' => 'UpdateHotelSceneOperateReq',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'title' => 'updateHotelSceneReq',
                        'description' => 'updateHotelSceneReq',
                        'type' => 'object',
                        'properties' => [
                            'OperateType' => [
                                'title' => '操作类型（OPEN开启,CLOSE关闭,EDIT编辑）',
                                'description' => '操作类型（OPEN开启,CLOSE关闭,EDIT编辑）',
                                'type' => 'string',
                                'required' => true,
                                'docRequired' => true,
                                'example' => 'OPEN',
                            ],
                            'IsUseTemplateAnswer' => [
                                'title' => '是否使用模板回答（true/false）',
                                'description' => '是否使用模板回答（true/false）',
                                'type' => 'boolean',
                                'required' => true,
                                'docRequired' => true,
                                'example' => 'true',
                            ],
                        ],
                        'required' => true,
                        'docRequired' => true,
                    ],
                ],
                [
                    'name' => 'UpdateHotelSceneReq',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'title' => 'UpdateHotelSceneReq',
                        'description' => 'UpdateHotelSceneReq',
                        'type' => 'object',
                        'properties' => [
                            'Id' => [
                                'title' => 'itemID',
                                'description' => 'itemID',
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                                'docRequired' => true,
                                'example' => '10337',
                            ],
                            'Name' => [
                                'title' => '物品名称 id与name必传一个',
                                'description' => '物品名称',
                                'type' => 'string',
                                'required' => false,
                                'example' => '棉签',
                            ],
                            'Status' => [
                                'title' => '状态（已添加/未添加）',
                                'description' => '状态（已添加/未添加）',
                                'type' => 'string',
                                'required' => true,
                                'docRequired' => true,
                                'example' => '已添加',
                            ],
                            'Icon' => [
                                'title' => 'icon',
                                'description' => 'icon',
                                'type' => 'string',
                                'required' => true,
                                'docRequired' => true,
                                'example' => 'https://ailabsaicloudservice.alicdn.com/hotel/icon/jiudianmianban_fuwushangpintu/wupin/keyongpinlei/mianqian.png',
                            ],
                            'Price' => [
                                'title' => '价格（单位：分）',
                                'description' => '价格（单位：分）',
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => true,
                                'docRequired' => true,
                                'example' => '165',
                            ],
                            'DialogueList' => [
                                'title' => '对话List',
                                'description' => '对话List',
                                'type' => 'array',
                                'items' => [
                                    'description' => '对话信息',
                                    'type' => 'object',
                                    'properties' => [
                                        'ServiceId' => [
                                            'title' => 'itemId',
                                            'description' => 'itemId',
                                            'type' => 'string',
                                            'required' => false,
                                            'example' => '10337',
                                        ],
                                        'Process' => [
                                            'title' => '第几轮对话',
                                            'description' => '第几轮对话',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'required' => false,
                                            'example' => '0',
                                        ],
                                        'Question' => [
                                            'title' => '问题',
                                            'description' => '问题',
                                            'type' => 'string',
                                            'required' => false,
                                            'example' => '无',
                                        ],
                                        'YesAnswer' => [
                                            'title' => '肯定回答',
                                            'description' => '肯定回答',
                                            'type' => 'string',
                                            'required' => false,
                                            'example' => '纸巾1.5元，请问需要么？',
                                        ],
                                        'NoAnswer' => [
                                            'title' => '否定回答',
                                            'description' => '否定回答',
                                            'type' => 'string',
                                            'required' => false,
                                            'example' => '对不起，暂时不提供此物品',
                                        ],
                                        'YesAnswerTemplate' => [
                                            'title' => '肯定回答模板ID',
                                            'description' => '肯定回答模板ID',
                                            'type' => 'string',
                                            'required' => false,
                                            'example' => '4',
                                        ],
                                        'NoAnswerTemplate' => [
                                            'title' => '否定回答模板ID',
                                            'description' => '否定回答模板ID',
                                            'type' => 'string',
                                            'required' => false,
                                            'example' => '4',
                                        ],
                                        'DialogueId' => [
                                            'title' => '对话ID',
                                            'description' => '对话ID',
                                            'type' => 'string',
                                            'required' => false,
                                            'example' => '335',
                                        ],
                                    ],
                                    'required' => false,
                                ],
                                'required' => true,
                            ],
                            'DeliveryMethod' => [
                                'title' => '物品配送方式:waiter 服务员（默认）  robot 机器人',
                                'description' => '物品配送方式:waiter 服务员  robot 机器人',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'robot',
                            ],
                            'RobotName' => [
                                'title' => '机器人名称，物品配送方式为robot时必填',
                                'description' => '机器人名称。',
                                'type' => 'string',
                                'required' => false,
                                'example' => '测试机器人',
                            ],
                            'PaymentMethod' => [
                                'title' => '结算方式:room 房费结算（默认）  robot 机器人结算',
                                'description' => '结算方式:room 房费结算  robot 机器人结算',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'robot',
                            ],
                            'LimitSwitch' => [
                                'title' => '是否限制数量:1:限制 其它不限制',
                                'description' => '是否限量 1表示限制 0或空:不限',
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                                'example' => '1',
                            ],
                            'LimitNumber' => [
                                'title' => '限制数量',
                                'description' => '限制数量',
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                                'example' => '2',
                            ],
                            'BeyondLimitReply' => [
                                'title' => '超限回复',
                                'description' => '超限回复',
                                'type' => 'string',
                                'required' => false,
                                'example' => '尊敬的客户您好，该物品今日已超出酒店供应数量，有需要请联系前台。',
                            ],
                        ],
                        'required' => true,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Result<Boolean>',
                        'description' => 'Result<Boolean>',
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'title' => '状态码',
                                'description' => '状态码',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'Result' => [
                                'title' => '服务的实际返回结果',
                                'description' => '服务的实际返回结果',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'Message' => [
                                'title' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                                'description' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                            'RequestId' => [
                                'title' => 'RequestId',
                                'description' => '请求id',
                                'type' => 'string',
                                'example' => '0D0C***67DB',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidParameter',
                        'errorMessage' => 'The request parameter is invalid',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'ServerError',
                        'errorMessage' => 'internal server error',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": 200,\\n  \\"Result\\": true,\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"0D0C***67DB\\"\\n}","type":"json"}]',
            'title' => '编辑酒店场景服务',
            'description' => '- ***影响因素：***'."\n"
                .'> '."\n"
                .'> - `1、价格是否=0；`'."\n"
                .'> - `2、是否使用模板；`'."\n"
                .'> - `3、新增/修改对话；`'."\n"
                ."\n"
                .'- ***修改规则：***'."\n"
                .'> '."\n"
                .'> 1. 1、价格是否为0元'."\n"
                .'>     - 等于0：dialogueList.size=1 &&  参数内容为process=0（一轮对话，免费服务）；'."\n"
                .'>     - 大于0：dialogueList.size=2 &&  参数内容为process=0 （一轮对话，付费服务，询问是否需要）+ process=1（二轮对话，对是否需要的回答）'."\n"
                .'> 2. 2、是否使用模板'."\n"
                .'    - "isUseTemplateAnswer": true/false'."\n"
                .'3. 3、新增/修改对话'."\n"
                ."\n"
                .'1. ***新增对话：***'."\n"
                .'>  - 使用模板：yesAnswerTemplate'."\0".' && noAnswerTemplate'."\0".' && process'."\0".' 不为null，其他为null；'."\n"
                .'> - 不使用模板：yesAnswer'."\0\0".' && noAnswer'."\0\0".' && process'."\0".' 不为null，其他为null'."\n"
                ."\n"
                .' 1. ***修改对话***'."\n"
                ."\n"
                .'  >   - 使用模板：yesAnswerTemplate'."\0".' && noAnswerTemplate'."\0".' && process'."\0".' && dialogueId'."\0".' && serviceId'."\0".' 不为null，其他为null；'."\n"
                .'   >  - 不使用模板：yesAnswer'."\0\0".' && noAnswer'."\0\0".' && process'."\0".' && dialogueId'."\0".' && serviceId'."\0".' 不为null，其他为null',
            'extraInfo' => '|  <div style="width:250px">场景</div>   | 示例参数  |'."\n"
                .'|  ----  | ----  |'."\n"
                .'| 1、开启 && 0元 && 模板回答  | {"updateHotelSceneReq":{"icon":"xxx.png","dialogueList":[{"process":0,"noAnswerTemplate":"5","yesAnswerTemplate":"5"}],"price":0,"id":xxx,"status":"已添加"},"updateHotelSceneOperateReq":{"operateType":"OPEN","isUseTemplateAnswer":true},"hotelId":"****"} |'."\n"
                .'| 2、开启 && 0元 && 不使用模板  | {"updateHotelSceneReq":{"icon":"xxx.png","dialogueList":[{"process":0,"yesAnswer":"服务员马上给你送来！！！","noAnswer":"对不起没有这个物品！！！"}],"price":0,"id":xxx,"status":"已添加"},"updateHotelSceneOperateReq":{"operateType":"OPEN","isUseTemplateAnswer":false},"hotelId":"****"}  |'."\n"
                .'| 3、开启 && >0元 && 模板回答  |  {"updateHotelSceneReq":{"icon":"xxx.png","dialogueList":[{"process":0,"noAnswerTemplate":"5","yesAnswerTemplate":"5"},{"process":1,"noAnswerTemplate":"5","yesAnswerTemplate":"5"}],"price":33333,"id":xxx,"status":"已添加"},"updateHotelSceneOperateReq":{"operateType":"OPEN","isUseTemplateAnswer":true},"hotelId":"****"}  |'."\n"
                .'| 4、开启 && >0元 && 不使用模板  |  {"updateHotelSceneReq":{"icon":"xxx.png","dialogueList":[{"process":0,"yesAnswer":"XXX需要6元！！！","noAnswer":"对不起没有这个物品！！！"},{"process":1,"yesAnswer":"好得服务员给你尽快送来！！！","noAnswer":"好的已取消！！！"}],"price":33322,"id":xxx,"status":"已添加"},"updateHotelSceneOperateReq":{"operateType":"OPEN","isUseTemplateAnswer":false},"hotelId":"****"}  |'."\n"
                .'| 5、关闭  |  {"updateHotelSceneReq":{"icon":"xxx.png","dialogueList":[{"process":0,"noAnswerTemplate":"5","yesAnswerTemplate":"5"}],"price":0,"id":xxx,"status":"未添加"},"updateHotelSceneOperateReq":{"operateType":"CLOSE","isUseTemplateAnswer":true},"hotelId":"****"}  |'."\n"
                .'| 6、编辑 && 0元 **改为** >0元 && 模板回答  |  {"updateHotelSceneReq":{"icon":"xxx.png","dialogueList":[{"process":0,"noAnswerTemplate":"5","dialogueId":"xxx","yesAnswerTemplate":"5","serviceId":"166033"},{"process":1,"noAnswerTemplate":"5","yesAnswerTemplate":"5"}],"price":55656,"id":xxx,"status":"已添加"},"updateHotelSceneOperateReq":{"operateType":"EDIT","isUseTemplateAnswer":true},"hotelId":"****"}  |'."\n"
                .'| 7、编辑 && 0元 **改为** >0元 && 不使用模板  |  {"updateHotelSceneReq":{"icon":"xxx.png","dialogueList":[{"process":0,"yesAnswer":"XXX需要6元！！！","dialogueId":"xxx","noAnswer":"对不起没有这个物品！！！","serviceId":"166033"},{"process":1,"yesAnswer":"好得服务员给你尽快送来！！！","noAnswer":"好的已取消！！！"}],"price":3322,"id":xxx,"status":"已添加"},"updateHotelSceneOperateReq":{"operateType":"EDIT","isUseTemplateAnswer":false},"hotelId":"****"}  |'."\n"
                .'| 8、编辑 && 0元 && 模板回答  |  {"updateHotelSceneReq":{"icon":"xxx.png","dialogueList":[{"process":0,"noAnswerTemplate":"5","dialogueId":"xxx","yesAnswerTemplate":"5","serviceId":"166033"}],"price":0,"id":xxx,"status":"已添加"},"updateHotelSceneOperateReq":{"operateType":"EDIT","isUseTemplateAnswer":true},"hotelId":"****"}  |'."\n"
                .'| 9、编辑 && 0元 && 不使用模板  |  {"updateHotelSceneReq":{"icon":"xxx.png","dialogueList":[{"process":0,"noAnswerTemplate":"","yesAnswer":"服务员马上给你送来!!!!!!!!!","dialogueId":"xxx","noAnswer":"对不起没有这个物品","serviceId":"166033"}],"price":0,"id":xxx,"status":"已添加"},"updateHotelSceneOperateReq":{"operateType":"EDIT","isUseTemplateAnswer":false},"hotelId":"****"}  |'."\n"
                .'| 10、编辑 && >0元 **改为** 0元 && 模板回答  |  {"updateHotelSceneReq":{"icon":"xxx.png","dialogueList":[{"process":0,"noAnswerTemplate":"5","dialogueId":"xxx","yesAnswerTemplate":"5","serviceId":"166033"}],"price":0,"id":xxx,"status":"已添加"},"updateHotelSceneOperateReq":{"operateType":"EDIT","isUseTemplateAnswer":true},"hotelId":"****"}  |'."\n"
                .'| 11、编辑 && >0元 **改为** 0元 && 不使用模板  |  {"updateHotelSceneReq":{"icon":"xxx.png","dialogueList":[{"process":0,"yesAnswer":"服务员马上给你送来!!!!!!!!!","dialogueId":"xxx","noAnswer":"对不起没有这个物品!!!","serviceId":"166033"}],"price":0,"id":xxx,"status":"已添加"},"updateHotelSceneOperateReq":{"operateType":"EDIT","isUseTemplateAnswer":false},"hotelId":"****"}  |'."\n"
                .'| 12、编辑 && >0元 **改为** >0元 && 模板回答  |  {"updateHotelSceneReq":{"icon":"xxx.png","dialogueList":[{"process":0,"noAnswerTemplate":"5","dialogueId":"xxx","yesAnswerTemplate":"5","serviceId":"166033"},{"process":1,"noAnswerTemplate":"5","dialogueId":"xxx","yesAnswerTemplate":"5","serviceId":"166033"}],"price":5555,"id":xxx,"status":"已添加"},"updateHotelSceneOperateReq":{"operateType":"EDIT","isUseTemplateAnswer":true},"hotelId":"****"}  |'."\n"
                .'| 13、编辑 && >0元 **改为** >0元 && 不使用模板  |  {"updateHotelSceneReq":{"icon":"xxx.png","dialogueList":[{"process":0,"yesAnswer":"XXX需要6元！！！","dialogueId":"xxx","noAnswer":"对不起没有这个物品！！！","serviceId":"166033"},{"process":1,"yesAnswer":"好的服务员马上给你送来！！！！","dialogueId":"xxx","noAnswer":"好的已取消","serviceId":"166033"}],"price":5555,"id":xxx,"status":"已添加"},"updateHotelSceneOperateReq":{"operateType":"EDIT","isUseTemplateAnswer":false},"hotelId":"****"}  |',
        ],
        'GetHotelSceneItemDetail' => [
            'summary' => '酒店场景详情',
            'path' => '/v1.0/ip/getHotelSceneItemDetail',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'https',
                'http',
            ],
            'security' => [
                [
                    'AliGenie_Auth_SPI' => [],
                ],
            ],
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'HotelId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => 'hotelID',
                        'description' => 'hotelID',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '80d84ea8ed9e422fbad52715c8fc56f1',
                    ],
                ],
                [
                    'name' => 'ItemId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '酒店场景itemID'."\n"
                            .'id与物品名称必传其中一个',
                        'description' => '酒店场景itemID',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'docRequired' => true,
                        'example' => '10336',
                    ],
                ],
                [
                    'name' => 'Name',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '物品名称'."\n"
                            .'id与物品名称必传其中一个',
                        'description' => '物品名称'."\n"
                            .'id与物品名称必传其中一个',
                        'type' => 'string',
                        'required' => false,
                        'example' => '棉签',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Result<HotelSceneDetailResp>',
                        'description' => 'Result<HotelSceneDetailResp>',
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'title' => '状态码',
                                'description' => '状态码',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'Result' => [
                                'title' => '服务的实际返回结果',
                                'description' => '服务的实际返回结果',
                                'type' => 'object',
                                'properties' => [
                                    'DialogueList' => [
                                        'title' => '酒店场景item对话List',
                                        'description' => '酒店场景item对话List',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'ServiceId' => [
                                                    'title' => '酒店场景itemID',
                                                    'description' => '酒店场景itemID',
                                                    'type' => 'string',
                                                    'example' => '10336',
                                                ],
                                                'Process' => [
                                                    'title' => '第几轮对话',
                                                    'description' => '第几轮对话',
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                    'example' => '0',
                                                ],
                                                'Question' => [
                                                    'title' => '问题',
                                                    'description' => '问题',
                                                    'type' => 'string',
                                                    'example' => '无',
                                                ],
                                                'YesAnswer' => [
                                                    'title' => '肯定回答',
                                                    'description' => '肯定回答',
                                                    'type' => 'string',
                                                    'example' => '纸巾1.5元，请问需要么？',
                                                ],
                                                'NoAnswer' => [
                                                    'title' => '否定回答',
                                                    'description' => '否定回答',
                                                    'type' => 'string',
                                                    'example' => '对不起，暂时不提供此物品',
                                                ],
                                                'YesAnswerTemplate' => [
                                                    'title' => '肯定回答模板ID',
                                                    'description' => '肯定回答模板ID',
                                                    'type' => 'string',
                                                    'example' => '4',
                                                ],
                                                'NoAnswerTemplate' => [
                                                    'title' => '否定回答模板ID',
                                                    'description' => '否定回答模板ID',
                                                    'type' => 'string',
                                                    'example' => '4',
                                                ],
                                                'DialogueId' => [
                                                    'title' => '对话ID',
                                                    'description' => '对话ID',
                                                    'type' => 'string',
                                                    'example' => '336',
                                                ],
                                                'UpdateTime' => [
                                                    'title' => '更新时间',
                                                    'description' => '更新时间',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '1666164774',
                                                ],
                                                'CreateTime' => [
                                                    'title' => '创建时间',
                                                    'description' => '创建时间',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '1666164774',
                                                ],
                                            ],
                                        ],
                                    ],
                                    'Type' => [
                                        'title' => '酒店场景类型',
                                        'description' => '酒店场景类型',
                                        'type' => 'string',
                                        'example' => 'GOODS',
                                    ],
                                    'Category' => [
                                        'title' => '酒店场景类型二级分类',
                                        'description' => '酒店场景类型二级分类',
                                        'type' => 'string',
                                        'example' => '客用品类',
                                    ],
                                    'Id' => [
                                        'title' => '酒店场景itemID',
                                        'description' => '酒店场景itemID',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '10336',
                                    ],
                                    'Name' => [
                                        'title' => '名称',
                                        'description' => '名称',
                                        'type' => 'string',
                                        'example' => '擦鞋布',
                                    ],
                                    'Status' => [
                                        'title' => '状态',
                                        'description' => '状态',
                                        'type' => 'string',
                                        'example' => '已添加',
                                    ],
                                    'UpdateTime' => [
                                        'title' => '更新时间',
                                        'description' => '更新时间',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '1666168828',
                                    ],
                                    'Icon' => [
                                        'title' => '物品、服务、维修的图标',
                                        'description' => '物品、服务、维修的图标',
                                        'type' => 'string',
                                        'example' => 'https://ailabsaicloudservice.alicdn.com/hotel/icon/jiudianmianban_fuwushangpintu/wupin/keyongpinlei/zhijin.png',
                                    ],
                                    'Price' => [
                                        'title' => '价格（单位：分）',
                                        'description' => '价格（单位：分）',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '170',
                                    ],
                                ],
                            ],
                            'Message' => [
                                'title' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                                'description' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                            'RequestId' => [
                                'title' => 'RequestId',
                                'description' => '请求id',
                                'type' => 'string',
                                'example' => '0EC7*726E',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidParameter',
                        'errorMessage' => 'The request parameter is invalid',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'ServerError',
                        'errorMessage' => 'internal server error',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": 200,\\n  \\"Result\\": {\\n    \\"DialogueList\\": [\\n      {\\n        \\"ServiceId\\": \\"10336\\",\\n        \\"Process\\": 0,\\n        \\"Question\\": \\"无\\",\\n        \\"YesAnswer\\": \\"纸巾1.5元，请问需要么？\\",\\n        \\"NoAnswer\\": \\"对不起，暂时不提供此物品\\",\\n        \\"YesAnswerTemplate\\": \\"4\\",\\n        \\"NoAnswerTemplate\\": \\"4\\",\\n        \\"DialogueId\\": \\"336\\",\\n        \\"UpdateTime\\": 1666164774,\\n        \\"CreateTime\\": 1666164774\\n      }\\n    ],\\n    \\"Type\\": \\"GOODS\\",\\n    \\"Category\\": \\"客用品类\\",\\n    \\"Id\\": 10336,\\n    \\"Name\\": \\"擦鞋布\\",\\n    \\"Status\\": \\"已添加\\",\\n    \\"UpdateTime\\": 1666168828,\\n    \\"Icon\\": \\"https://ailabsaicloudservice.alicdn.com/hotel/icon/jiudianmianban_fuwushangpintu/wupin/keyongpinlei/zhijin.png\\",\\n    \\"Price\\": 170\\n  },\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"0EC7*726E\\"\\n}","type":"json"}]',
            'title' => '酒店场景详情',
        ],
        'InvokeRobotPush' => [
            'summary' => '推送机器人通知，可用于机器人送物的放与拿时候的通知',
            'path' => '/v1.0/ip/invokeRobotPush',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'https',
                'http',
            ],
            'security' => [
                [
                    'AliGenie_Auth_SPI' => [],
                ],
            ],
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'RoomNo',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '房间号',
                        'description' => '房间号',
                        'type' => 'string',
                        'required' => true,
                        'example' => '1211',
                    ],
                ],
                [
                    'name' => 'HotelId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '酒店id',
                        'description' => '酒店id',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'af7***536',
                    ],
                ],
                [
                    'name' => 'PushType',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '推送类型，PUT：放东西、GET：拿东西',
                        'description' => '推送类型，PUT：放东西、GET：拿东西',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'GET',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Result<Boolean>',
                        'description' => 'Result<Boolean>',
                        'type' => 'object',
                        'properties' => [
                            'StatusCode' => [
                                'title' => '调用返回码，除约定的SUCCESS_CODE外，其余由服务提供者自定义',
                                'description' => '调用返回码，200标识成功',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'Result' => [
                                'title' => '服务的实际返回结果',
                                'description' => '服务的实际返回结果',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'Message' => [
                                'title' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                                'description' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                            'RequestId' => [
                                'description' => '请求id',
                                'type' => 'string',
                                'example' => '73C6***E6FA',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidParameter',
                        'errorMessage' => 'The request parameter is invalid',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'ServerError',
                        'errorMessage' => 'internal server error',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"StatusCode\\": 200,\\n  \\"Result\\": true,\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"73C6***E6FA\\"\\n}","type":"json"}]',
            'title' => '推送机器人通知',
        ],
        'ImportHotelConfig' => [
            'summary' => '批量导入酒店相关配置。',
            'path' => '/v1.0/ip/importHotelConfig',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'https',
                'http',
            ],
            'security' => [
                [
                    'AliGenie_Auth_SPI' => [],
                ],
            ],
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'HotelId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '酒店id',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'a7***83',
                    ],
                ],
                [
                    'name' => 'ImportHotelConfig',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'description' => '导入配置',
                        'type' => 'object',
                        'properties' => [
                            'RcuCustomScenes' => [
                                'description' => 'RCU自定义场景',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'SceneId' => [
                                            'description' => '场景编码',
                                            'type' => 'string',
                                            'required' => true,
                                            'example' => 'yoga',
                                        ],
                                        'Name' => [
                                            'description' => '场景名称',
                                            'type' => 'string',
                                            'required' => true,
                                            'example' => '瑜伽模式',
                                        ],
                                        'Icon' => [
                                            'description' => '场景图标',
                                            'type' => 'string',
                                            'required' => false,
                                            'example' => 'http://xxx.com/yyy.png',
                                        ],
                                        'Description' => [
                                            'description' => '场景描述',
                                            'type' => 'string',
                                            'required' => false,
                                            'example' => '做瑜伽的酒店场景',
                                        ],
                                        'CorpusList' => [
                                            'description' => '触发语料列表',
                                            'type' => 'array',
                                            'items' => [
                                                'description' => '触发语料',
                                                'type' => 'string',
                                                'required' => true,
                                                'example' => '打开瑜伽模式',
                                            ],
                                            'required' => true,
                                        ],
                                    ],
                                    'required' => false,
                                ],
                                'required' => false,
                            ],
                        ],
                        'required' => true,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Result<Boolean>',
                        'description' => 'Result<Boolean>',
                        'type' => 'object',
                        'properties' => [
                            'StatusCode' => [
                                'title' => '调用返回码，除约定的SUCCESS_CODE外，其余由服务提供者自定义',
                                'description' => '调用返回码，除约定的SUCCESS_CODE外，其余由服务提供者自定义',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'Result' => [
                                'title' => '服务的实际返回结果',
                                'description' => '服务的实际返回结果',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'Message' => [
                                'title' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                                'description' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                            'RequestId' => [
                                'description' => '阿里云为该请求生成的唯一标识符。',
                                'type' => 'string',
                                'example' => '0EC7*726E',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidParameter',
                        'errorMessage' => 'The request parameter is invalid',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'ServerError',
                        'errorMessage' => 'internal server error',
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"StatusCode\\": 200,\\n  \\"Result\\": true,\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"0EC7*726E\\"\\n}","type":"json"}]',
            'title' => '批量导入酒店配置',
        ],
        'ImportRoomControlDevices' => [
            'summary' => '导入房间的客控设备列表',
            'path' => '/v1.0/ip/importRoomControlDevices',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'https',
                'http',
            ],
            'security' => [
                [
                    'AliGenie_Auth_SPI' => [],
                ],
            ],
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'HotelId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '酒店id',
                        'description' => '酒店id',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'vdgrefds',
                    ],
                ],
                [
                    'name' => 'RoomNo',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '房间号',
                        'description' => '房间号',
                        'type' => 'string',
                        'required' => true,
                        'example' => '1211',
                    ],
                ],
                [
                    'name' => 'LocationDevices',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'title' => '导入的位置、设备列表',
                        'description' => '导入的位置、设备列表',
                        'type' => 'array',
                        'items' => [
                            'description' => '位置信息及设备信息',
                            'type' => 'object',
                            'properties' => [
                                'Location' => [
                                    'description' => '位置信息',
                                    'type' => 'string',
                                    'required' => true,
                                    'example' => 'room',
                                ],
                                'LocationName' => [
                                    'description' => '位置名称',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => '房间',
                                ],
                                'Devices' => [
                                    'description' => '位置下的设备列表',
                                    'type' => 'array',
                                    'items' => [
                                        'description' => '设备信息',
                                        'type' => 'object',
                                        'properties' => [
                                            'Name' => [
                                                'title' => '品类英文',
                                                'description' => '设备类型，如'."\n"
                                                    ."\n"
                                                    .'- light：灯'."\n"
                                                    .'- aircondition：空调',
                                                'type' => 'string',
                                                'required' => true,
                                                'example' => 'light',
                                            ],
                                            'Number' => [
                                                'title' => '序列号'."\n"
                                                    .'rcu试该参数必传',
                                                'description' => '设备编号',
                                                'type' => 'string',
                                                'required' => false,
                                                'example' => 'night_light',
                                            ],
                                            'DeviceName' => [
                                                'title' => '设备名称',
                                                'description' => '设备名称',
                                                'type' => 'string',
                                                'required' => true,
                                                'example' => '小夜灯',
                                            ],
                                            'ConnectType' => [
                                                'title' => '设备连接类型：rcu、infrared、mesh'."\n"
                                                    .'不填默认rcu',
                                                'description' => '设备连接类型',
                                                'type' => 'string',
                                                'required' => false,
                                                'example' => 'infrared',
                                            ],
                                            'Brand' => [
                                                'title' => '品牌',
                                                'description' => '品牌。',
                                                'type' => 'string',
                                                'required' => false,
                                                'example' => '百视通',
                                            ],
                                            'Province' => [
                                                'title' => '省份',
                                                'description' => '省份',
                                                'type' => 'string',
                                                'required' => false,
                                                'example' => '浙江省',
                                            ],
                                            'City' => [
                                                'title' => '城市',
                                                'description' => '城市。',
                                                'type' => 'string',
                                                'required' => false,
                                                'example' => '杭州市',
                                            ],
                                            'ServiceProvider' => [
                                                'title' => '服务提供商',
                                                'description' => '服务提供商',
                                                'type' => 'string',
                                                'required' => false,
                                                'example' => '浙江华数',
                                            ],
                                            'InfraredIndex' => [
                                                'title' => '红外码库Index',
                                                'description' => '红外码库index',
                                                'type' => 'string',
                                                'required' => false,
                                                'example' => '1',
                                            ],
                                            'InfraredId' => [
                                                'title' => '红外码库id',
                                                'description' => '红外码库id',
                                                'type' => 'string',
                                                'required' => false,
                                                'example' => '1232',
                                            ],
                                            'InfraredVersion' => [
                                                'title' => '红外码库版本号',
                                                'description' => '红外码库版本号',
                                                'type' => 'string',
                                                'required' => false,
                                                'example' => '4.0',
                                            ],
                                            'MultiKeySwitchExt' => [
                                                'description' => '多键开关配置信息',
                                                'type' => 'object',
                                                'properties' => [
                                                    'SwitchList' => [
                                                        'description' => '开关按键列表',
                                                        'type' => 'array',
                                                        'items' => [
                                                            'description' => '内容',
                                                            'type' => 'object',
                                                            'properties' => [
                                                                'DeviceIndex' => [
                                                                    'title' => '设备序号',
                                                                    'description' => '设备序号',
                                                                    'type' => 'integer',
                                                                    'format' => 'int32',
                                                                    'required' => false,
                                                                    'example' => '0',
                                                                ],
                                                                'Category' => [
                                                                    'title' => '关联的设备品类英文名',
                                                                    'description' => '关联的设备品类英文名',
                                                                    'type' => 'string',
                                                                    'required' => false,
                                                                    'example' => 'light',
                                                                ],
                                                                'Location' => [
                                                                    'title' => '关联的设备位置英文',
                                                                    'description' => '关联的设备位置英文',
                                                                    'type' => 'string',
                                                                    'required' => false,
                                                                    'example' => 'room',
                                                                ],
                                                                'DeviceName' => [
                                                                    'title' => '关联的设备别名',
                                                                    'description' => '关联的设备别名',
                                                                    'type' => 'string',
                                                                    'required' => false,
                                                                    'example' => '吧台灯',
                                                                ],
                                                                'AliasList' => [
                                                                    'title' => '设备多别名列表',
                                                                    'description' => '子设备的别名列表',
                                                                    'type' => 'array',
                                                                    'items' => [
                                                                        'title' => '设备自定义别名',
                                                                        'description' => '设备别名',
                                                                        'type' => 'string',
                                                                        'required' => false,
                                                                        'example' => '左灯',
                                                                    ],
                                                                    'required' => false,
                                                                ],
                                                            ],
                                                            'required' => false,
                                                        ],
                                                        'required' => false,
                                                    ],
                                                ],
                                                'required' => false,
                                            ],
                                            'Dn' => [
                                                'title' => '设备dn码',
                                                'description' => '设备dn信息',
                                                'type' => 'string',
                                                'required' => false,
                                                'example' => '3c5****db98',
                                            ],
                                            'Pk' => [
                                                'title' => '设备pk',
                                                'description' => '设备pk号',
                                                'type' => 'string',
                                                'required' => false,
                                                'example' => '17****26',
                                            ],
                                            'AliasList' => [
                                                'title' => '设备多别名列表',
                                                'description' => '设备别名列表',
                                                'type' => 'array',
                                                'items' => [
                                                    'title' => '设备自定义别名',
                                                    'description' => '设备别名',
                                                    'type' => 'string',
                                                    'required' => false,
                                                    'example' => '夜灯',
                                                ],
                                                'required' => false,
                                            ],
                                        ],
                                        'required' => false,
                                    ],
                                    'required' => false,
                                ],
                            ],
                            'required' => false,
                        ],
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'EnableInfraredDeviceImport',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '是否支持红外 true 支持红外设备 false 不支持红外设备',
                        'description' => 'true：使用接口中传入的红外设备列表覆盖页面配置的红外设备；'."\n"
                            .'false：忽略接口中传入的红外红外设备，保留平台页面配置的红外设备。'."\n"
                            .'默认值为 false',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'true',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Result<Integer>',
                        'description' => 'Result<Integer>',
                        'type' => 'object',
                        'properties' => [
                            'StatusCode' => [
                                'title' => '调用返回码，除约定的SUCCESS_CODE外，其余由服务提供者自定义',
                                'description' => '调用返回码，200标识成功',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'Result' => [
                                'title' => '服务的实际返回结果',
                                'description' => '导入成功的设备数量',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '10',
                            ],
                            'Message' => [
                                'title' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                                'description' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                            'Extentions' => [
                                'title' => '扩展字段',
                                'description' => '扩展字段',
                                'type' => 'object',
                                'additionalProperties' => [
                                    'type' => 'any',
                                    'example' => 'xxxx',
                                    'description' => '扩展信息内容',
                                ],
                            ],
                            'RequestId' => [
                                'description' => '请求id',
                                'type' => 'string',
                                'example' => 'fdsfregtre',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidParameter',
                        'errorMessage' => 'The request parameter is invalid',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'ServerError',
                        'errorMessage' => 'internal server error',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"StatusCode\\": 200,\\n  \\"Result\\": 10,\\n  \\"Message\\": \\"success\\",\\n  \\"Extentions\\": {\\n    \\"key\\": \\"xxxx\\"\\n  },\\n  \\"RequestId\\": \\"fdsfregtre\\"\\n}","type":"json"}]',
            'title' => '导入房间的客控设备列表',
            'description' => '批量导入房间被控设备至房间所对应的房型'."\n"
                .'><notice>暂时只支持纯rcu场景，支持的关联产品为：***方糖R酒店版、IN糖酒店版***></notice>',
        ],
        'ImportRoomGenieScenes' => [
            'summary' => '批量导入房间内智能智能场景列表。',
            'path' => '/v1.0/ip/importRoomGenieScenes',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'https',
                'http',
            ],
            'security' => [
                [
                    'AliGenie_Auth_SPI' => [],
                ],
            ],
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'HotelId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '酒店id',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'a7a3***013',
                    ],
                ],
                [
                    'name' => 'RoomNo',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '房间号',
                        'type' => 'string',
                        'required' => true,
                        'example' => '1211',
                    ],
                ],
                [
                    'name' => 'SceneList',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'title' => '场景列表',
                        'description' => '场景列表',
                        'type' => 'array',
                        'items' => [
                            'description' => '场景信息。',
                            'type' => 'object',
                            'properties' => [
                                'SceneName' => [
                                    'title' => '场景名称',
                                    'description' => '场景名称',
                                    'type' => 'string',
                                    'required' => true,
                                    'example' => '瑜伽模式',
                                ],
                                'Description' => [
                                    'title' => '场景描述',
                                    'description' => '场景描述',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => '做瑜伽的模式',
                                ],
                                'Icon' => [
                                    'title' => '场景图标',
                                    'description' => '场景图标',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'http://xxx.com/yyy.png',
                                ],
                                'Display' => [
                                    'title' => '是否在带屏侧显示',
                                    'description' => '是否在带屏侧显示',
                                    'type' => 'boolean',
                                    'required' => true,
                                    'example' => 'true',
                                ],
                                'TriggerLogical' => [
                                    'title' => '场景触发逻辑(0:条件与,1:条件或)',
                                    'description' => '场景触发逻辑(0:条件与,1:条件或)',
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => true,
                                    'example' => '1',
                                ],
                                'Triggers' => [
                                    'title' => '触发条件',
                                    'description' => '触发条件列表',
                                    'type' => 'array',
                                    'items' => [
                                        'description' => '触发条件',
                                        'type' => 'object',
                                        'properties' => [
                                            'Type' => [
                                                'title' => '触发类型',
                                                'description' => '触发类型',
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'required' => true,
                                                'example' => '1：语音触发'."\n"
                                                    .'2：设备触发',
                                            ],
                                            'CorpusList' => [
                                                'title' => '触发语料',
                                                'description' => '触发语料',
                                                'type' => 'array',
                                                'items' => [
                                                    'description' => '触发语料',
                                                    'type' => 'string',
                                                    'required' => false,
                                                    'example' => '打开瑜伽模式',
                                                ],
                                                'required' => false,
                                            ],
                                            'Device' => [
                                                'description' => '触发设备',
                                                'type' => 'object',
                                                'properties' => [
                                                    'Category' => [
                                                        'description' => '设备品类',
                                                        'type' => 'string',
                                                        'required' => true,
                                                        'example' => 'KeyCardSwitch',
                                                    ],
                                                    'DeviceNumber' => [
                                                        'description' => '设备编号，即在天猫精灵行业管理平台房型客控品类设置下设备的序列号',
                                                        'type' => 'string',
                                                        'required' => true,
                                                        'example' => '3c5d2ab8f9ec',
                                                    ],
                                                    'DeviceIndex' => [
                                                        'description' => '多键开关类设备的设备序号',
                                                        'type' => 'string',
                                                        'required' => false,
                                                        'example' => '0',
                                                    ],
                                                ],
                                                'required' => false,
                                            ],
                                            'AttributeValues' => [
                                                'description' => '设备触发属性',
                                                'type' => 'array',
                                                'items' => [
                                                    'description' => '触发属性',
                                                    'type' => 'object',
                                                    'properties' => [
                                                        'AttributeName' => [
                                                            'description' => '属性名',
                                                            'type' => 'string',
                                                            'required' => true,
                                                            'example' => 'stateOfMagneticInduction',
                                                        ],
                                                        'AttributeValue' => [
                                                            'description' => '属性值',
                                                            'type' => 'string',
                                                            'required' => true,
                                                            'example' => '1',
                                                        ],
                                                    ],
                                                    'required' => false,
                                                ],
                                                'required' => false,
                                            ],
                                        ],
                                        'required' => false,
                                    ],
                                    'required' => true,
                                ],
                                'Actions' => [
                                    'title' => '执行动作',
                                    'description' => '执行动作列表',
                                    'type' => 'array',
                                    'items' => [
                                        'description' => '执行动作',
                                        'type' => 'object',
                                        'properties' => [
                                            'Type' => [
                                                'title' => '动作类型',
                                                'description' => '执行动作类型',
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'required' => false,
                                                'example' => '1：设备控制'."\n"
                                                    .'2：音箱播报',
                                            ],
                                            'Reply' => [
                                                'title' => '音箱回复内容',
                                                'description' => '音箱回复内容',
                                                'type' => 'string',
                                                'required' => false,
                                                'example' => '欢迎光临',
                                            ],
                                            'Device' => [
                                                'title' => '执行设备',
                                                'description' => '执行设备',
                                                'type' => 'object',
                                                'properties' => [
                                                    'Category' => [
                                                        'title' => '设备品类',
                                                        'description' => '设备品类',
                                                        'type' => 'string',
                                                        'required' => true,
                                                        'example' => 'light',
                                                    ],
                                                    'DeviceNumber' => [
                                                        'title' => '设备编号',
                                                        'description' => '设备编号',
                                                        'type' => 'string',
                                                        'required' => true,
                                                        'example' => '3c5d2ab8f9ec',
                                                    ],
                                                    'DeviceIndex' => [
                                                        'title' => '多键开关类设备，传入按键序号',
                                                        'description' => '多键开关类设备，传入按键序号',
                                                        'type' => 'integer',
                                                        'format' => 'int32',
                                                        'required' => false,
                                                        'example' => '0',
                                                    ],
                                                    'Type' => [
                                                        'description' => '设备类型（已废弃）',
                                                        'type' => 'integer',
                                                        'format' => 'int32',
                                                        'required' => false,
                                                        'example' => '无需填写',
                                                    ],
                                                ],
                                                'required' => false,
                                            ],
                                            'AttributeValues' => [
                                                'title' => '设备目标属性',
                                                'description' => '设备目标属性',
                                                'type' => 'array',
                                                'items' => [
                                                    'description' => '目标属性',
                                                    'type' => 'object',
                                                    'properties' => [
                                                        'AttributeName' => [
                                                            'title' => '属性名',
                                                            'description' => '属性名',
                                                            'type' => 'string',
                                                            'required' => true,
                                                            'example' => 'powerstate',
                                                        ],
                                                        'AttributeValue' => [
                                                            'title' => '属性值',
                                                            'description' => '属性值',
                                                            'type' => 'string',
                                                            'required' => true,
                                                            'example' => '1',
                                                        ],
                                                    ],
                                                    'required' => false,
                                                ],
                                                'required' => false,
                                            ],
                                        ],
                                        'required' => false,
                                    ],
                                    'required' => true,
                                ],
                            ],
                            'required' => false,
                        ],
                        'required' => false,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Result<Boolean>',
                        'description' => 'Result<Boolean>',
                        'type' => 'object',
                        'properties' => [
                            'StatusCode' => [
                                'title' => '调用返回码，除约定的SUCCESS_CODE外，其余由服务提供者自定义',
                                'description' => '调用返回码，除约定的SUCCESS_CODE外，其余由服务提供者自定义',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'Result' => [
                                'title' => '服务的实际返回结果',
                                'description' => '服务的实际返回结果',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'Message' => [
                                'title' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                                'description' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                            'RequestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '73C6***E6FA',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidParameter',
                        'errorMessage' => 'The request parameter is invalid',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'ServerError',
                        'errorMessage' => 'internal server error',
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"StatusCode\\": 200,\\n  \\"Result\\": true,\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"73C6***E6FA\\"\\n}","type":"json"}]',
            'title' => '导入房间内精灵智能场景',
        ],
        'PageGetHotelRoomDevices' => [
            'summary' => '根据酒店分页查询房间主控设备',
            'path' => '/v1.0/ip/pageGetHotelRoomDevices',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'https',
                'http',
            ],
            'security' => [
                [
                    'AliGenie_Auth_SPI' => [],
                ],
            ],
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'HotelId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '酒店id',
                        'description' => '酒店id',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'a7***83',
                    ],
                ],
                [
                    'name' => 'PageNumber',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '页码',
                        'description' => '页码',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '分页大小',
                        'description' => '分页大小，默认最大限制20',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'example' => '10',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'PageResult<List<HotelDeviceInfo>>',
                        'description' => 'PageResult<List<HotelDeviceInfo>>',
                        'type' => 'object',
                        'properties' => [
                            'Page' => [
                                'title' => '翻页参数',
                                'description' => '翻页参数',
                                'type' => 'object',
                                'properties' => [
                                    'PageNumber' => [
                                        'title' => '页码',
                                        'description' => '页码',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '1',
                                    ],
                                    'PageSize' => [
                                        'title' => '分页大小',
                                        'description' => '分页大小',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '10',
                                    ],
                                    'Total' => [
                                        'title' => '总数',
                                        'description' => '总数',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '5',
                                    ],
                                    'TotalPage' => [
                                        'title' => '总页数',
                                        'description' => '总页数',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '1',
                                    ],
                                    'Start' => [
                                        'title' => '起始序号',
                                        'description' => '起始序号',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '0',
                                    ],
                                    'End' => [
                                        'title' => '末尾序号',
                                        'description' => '末尾序号',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '4',
                                    ],
                                    'HasNext' => [
                                        'title' => '是否还有下一页',
                                        'description' => '是否还有下一页',
                                        'type' => 'boolean',
                                        'example' => 'False',
                                    ],
                                ],
                            ],
                            'StatusCode' => [
                                'title' => '调用返回码，除约定的200标识成功外，其余由服务提供者自定义',
                                'description' => '调用返回码，除约定的200标识成功外，其余由服务提供者自定义',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'Result' => [
                                'title' => '服务的实际返回结果',
                                'description' => '服务的实际返回结果',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'Mac' => [
                                            'title' => '设备mac',
                                            'description' => '设备mac',
                                            'type' => 'string',
                                            'example' => 'b4:xx:xx:xx:65:2b',
                                        ],
                                        'Sn' => [
                                            'title' => '设备sn',
                                            'description' => '设备sn',
                                            'type' => 'string',
                                            'example' => '1200xxx048',
                                        ],
                                        'HotelId' => [
                                            'title' => '酒店id',
                                            'description' => '酒店id',
                                            'type' => 'string',
                                            'example' => 'a7***83',
                                        ],
                                        'RoomNo' => [
                                            'title' => '房间号',
                                            'description' => '房间号',
                                            'type' => 'string',
                                            'example' => '2001',
                                        ],
                                        'OnlineStatus' => [
                                            'title' => '设备在线状态，1：在线；0：离线',
                                            'description' => '设备在线状态，1：在线；0：离线',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '1',
                                        ],
                                        'FirmwareVersion' => [
                                            'title' => '设备固件版本号',
                                            'description' => '设备固件版本号',
                                            'type' => 'string',
                                            'example' => 'V21.10.00.313',
                                        ],
                                    ],
                                ],
                            ],
                            'Message' => [
                                'title' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                                'description' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                            'Extentions' => [
                                'title' => '扩展字段',
                                'description' => '扩展字段',
                                'type' => 'object',
                                'additionalProperties' => [
                                    'type' => 'any',
                                ],
                            ],
                            'RequestId' => [
                                'title' => '请求参数',
                                'description' => '请求参数',
                                'type' => 'string',
                                'example' => '4EFBDDF4-B19D-526C-8C3D-CD8AB51974EE',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidParameter',
                        'errorMessage' => 'The request parameter is invalid',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'ServerError',
                        'errorMessage' => 'internal server error',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Page\\": {\\n    \\"PageNumber\\": 1,\\n    \\"PageSize\\": 10,\\n    \\"Total\\": 5,\\n    \\"TotalPage\\": 1,\\n    \\"Start\\": 0,\\n    \\"End\\": 4,\\n    \\"HasNext\\": true\\n  },\\n  \\"StatusCode\\": 200,\\n  \\"Result\\": [\\n    {\\n      \\"Mac\\": \\"b4:xx:xx:xx:65:2b\\",\\n      \\"Sn\\": \\"1200xxx048\\",\\n      \\"HotelId\\": \\"a7***83\\",\\n      \\"RoomNo\\": \\"2001\\",\\n      \\"OnlineStatus\\": 1,\\n      \\"FirmwareVersion\\": \\"V21.10.00.313\\"\\n    }\\n  ],\\n  \\"Message\\": \\"success\\",\\n  \\"Extentions\\": {\\n    \\"key\\": \\"\\"\\n  },\\n  \\"RequestId\\": \\"4EFBDDF4-B19D-526C-8C3D-CD8AB51974EE\\"\\n}","type":"json"}]',
            'title' => '根据酒店分页查询房间主控设备',
        ],
        'QueryRoomControlDevices' => [
            'summary' => '查询房间客控设备列表，不包含状态等信息',
            'path' => '/v1.0/ip/queryRoomControlDevices',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'AliGenie_Auth_SPI' => [],
                ],
            ],
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'HotelId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '酒店id',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'af7***536',
                    ],
                ],
                [
                    'name' => 'RoomNo',
                    'in' => 'query',
                    'schema' => [
                        'description' => '房间号',
                        'type' => 'string',
                        'required' => true,
                        'example' => '1211',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Result<List<ListHotelMessageTemplate>>',
                        'description' => '返回结果对象',
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'title' => '调用返回码，除约定的SUCCESS_CODE外，其余由服务提供者自定义',
                                'description' => '调用返回码，除约定的SUCCESS_CODE外，其余由服务提供者自定义',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'Result' => [
                                'title' => '服务的实际返回结果',
                                'description' => '客控设备列表',
                                'type' => 'array',
                                'items' => [
                                    'description' => '设备信息',
                                    'type' => 'object',
                                    'properties' => [
                                        'Location' => [
                                            'description' => '位置信息，如room',
                                            'type' => 'string',
                                            'example' => 'room',
                                        ],
                                        'LocationName' => [
                                            'description' => '位置名称，如"房间"',
                                            'type' => 'string',
                                            'example' => '房间',
                                        ],
                                        'Devices' => [
                                            'description' => '设备列表',
                                            'type' => 'array',
                                            'items' => [
                                                'description' => '设备信息',
                                                'type' => 'object',
                                                'properties' => [
                                                    'Name' => [
                                                        'description' => '设备类型，如'."\n"
                                                            ."\n"
                                                            .'- light：灯'."\n"
                                                            .'- aircondition：空调',
                                                        'type' => 'string',
                                                        'example' => 'light',
                                                    ],
                                                    'Number' => [
                                                        'description' => '设备编号',
                                                        'type' => 'string',
                                                        'example' => 'night_light',
                                                    ],
                                                    'DeviceName' => [
                                                        'description' => '设备名称，如"小夜灯"',
                                                        'type' => 'string',
                                                        'example' => '小夜灯',
                                                    ],
                                                    'ConnectType' => [
                                                        'title' => '设备连接类型:rcu/infrared',
                                                        'description' => '设备连接类型',
                                                        'type' => 'string',
                                                        'example' => 'rcu:RCU设备'."\n"
                                                            .'infrared:红外设备',
                                                    ],
                                                    'PK' => [
                                                        'description' => 'Mesh设备三元组的 pid',
                                                        'type' => 'string',
                                                        'example' => '50255129',
                                                    ],
                                                    'DN' => [
                                                        'description' => 'Mesh设备三元组的 deviceName',
                                                        'type' => 'string',
                                                        'example' => '3c5d2ab8f9ec',
                                                    ],
                                                    'DeviceStatus' => [
                                                        'description' => '设备状态',
                                                        'type' => 'string',
                                                        'example' => '{"powerstate": "1"}',
                                                    ],
                                                    'AliasList' => [
                                                        'description' => '设备别名列表',
                                                        'type' => 'array',
                                                        'items' => [
                                                            'description' => '设备别名',
                                                            'type' => 'string',
                                                            'example' => '卫生间灯',
                                                        ],
                                                    ],
                                                    'MultiKeySwitchExt' => [
                                                        'description' => '多键开关类设备信息',
                                                        'type' => 'object',
                                                        'properties' => [
                                                            'SwitchList' => [
                                                                'description' => '开关列表',
                                                                'type' => 'array',
                                                                'items' => [
                                                                    'type' => 'object',
                                                                    'properties' => [
                                                                        'DeviceIndex' => [
                                                                            'description' => '多键开关类设备的设备序号',
                                                                            'type' => 'integer',
                                                                            'format' => 'int32',
                                                                            'example' => '1',
                                                                        ],
                                                                        'ElementCode' => [
                                                                            'description' => '多 element 设备对应的 elementCode',
                                                                            'type' => 'string',
                                                                            'example' => 'e2',
                                                                        ],
                                                                        'Category' => [
                                                                            'description' => '设备品类',
                                                                            'type' => 'string',
                                                                            'example' => 'light',
                                                                        ],
                                                                        'Location' => [
                                                                            'description' => '位置信息',
                                                                            'type' => 'string',
                                                                            'example' => 'room',
                                                                        ],
                                                                        'DeviceName' => [
                                                                            'description' => '设备别名',
                                                                            'type' => 'string',
                                                                            'example' => '廊灯',
                                                                        ],
                                                                        'DeviceStatus' => [
                                                                            'description' => '设备状态',
                                                                            'type' => 'string',
                                                                            'example' => '{'."\n"
                                                                                .'      "powerstate": "0"'."\n"
                                                                                .'}',
                                                                        ],
                                                                        'AliasList' => [
                                                                            'description' => '子设备的别名列表',
                                                                            'type' => 'array',
                                                                            'items' => [
                                                                                'description' => '设备别名',
                                                                                'type' => 'string',
                                                                                'example' => '卫生间灯',
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
                                    ],
                                ],
                            ],
                            'Message' => [
                                'title' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                                'description' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                            'RequestId' => [
                                'description' => '请求id',
                                'type' => 'string',
                                'example' => 'fdsgfdscvre',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidParameter',
                        'errorMessage' => 'The request parameter is invalid',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": 200,\\n  \\"Result\\": [\\n    {\\n      \\"Location\\": \\"room\\",\\n      \\"LocationName\\": \\"房间\\",\\n      \\"Devices\\": [\\n        {\\n          \\"Name\\": \\"light\\",\\n          \\"Number\\": \\"night_light\\",\\n          \\"DeviceName\\": \\"小夜灯\\",\\n          \\"ConnectType\\": \\"rcu:RCU设备\\\\ninfrared:红外设备\\",\\n          \\"PK\\": \\"50255129\\",\\n          \\"DN\\": \\"3c5d2ab8f9ec\\",\\n          \\"DeviceStatus\\": \\"{\\\\\\"powerstate\\\\\\": \\\\\\"1\\\\\\"}\\",\\n          \\"AliasList\\": [\\n            \\"卫生间灯\\"\\n          ],\\n          \\"MultiKeySwitchExt\\": {\\n            \\"SwitchList\\": [\\n              {\\n                \\"DeviceIndex\\": 1,\\n                \\"ElementCode\\": \\"e2\\",\\n                \\"Category\\": \\"light\\",\\n                \\"Location\\": \\"room\\",\\n                \\"DeviceName\\": \\"廊灯\\",\\n                \\"DeviceStatus\\": \\"{\\\\n      \\\\\\"powerstate\\\\\\": \\\\\\"0\\\\\\"\\\\n}\\",\\n                \\"AliasList\\": [\\n                  \\"卫生间灯\\"\\n                ]\\n              }\\n            ]\\n          }\\n        }\\n      ]\\n    }\\n  ],\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"fdsgfdscvre\\"\\n}","type":"json"}]',
            'title' => '查询房间客控设备',
        ],
        'GetHotelRoomDevice' => [
            'summary' => '查询房间猫精设备信息，如设备mac、sn、在线状态等',
            'path' => '/v1.0/ip/getHotelRoomDevice',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'AliGenie_Auth_SPI' => [],
                ],
            ],
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'HotelId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '酒店id',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'af7***536',
                    ],
                ],
                [
                    'name' => 'RoomNo',
                    'in' => 'query',
                    'schema' => [
                        'description' => '房间号',
                        'type' => 'string',
                        'required' => true,
                        'example' => '1211',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Result<List<ListHotelMessageTemplate>>',
                        'description' => '返回结果对象',
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'title' => '调用返回码，除约定的SUCCESS_CODE外，其余由服务提供者自定义',
                                'description' => '调用返回码，200标识成功',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'Result' => [
                                'title' => '服务的实际返回结果',
                                'description' => '猫精设备列表',
                                'type' => 'array',
                                'items' => [
                                    'description' => '猫精设备信息',
                                    'type' => 'object',
                                    'properties' => [
                                        'HotelId' => [
                                            'description' => '酒店id',
                                            'type' => 'string',
                                            'example' => 'af7***536',
                                        ],
                                        'RoomNo' => [
                                            'description' => '房间号',
                                            'type' => 'string',
                                            'example' => '1211',
                                        ],
                                        'Mac' => [
                                            'description' => '设备mac信息',
                                            'type' => 'string',
                                            'example' => 'aa:aa:aa:aa:aa:aa',
                                        ],
                                        'Sn' => [
                                            'description' => '设备sn信息',
                                            'type' => 'string',
                                            'example' => 'dsfdsfrgreg',
                                        ],
                                        'OnlineStatus' => [
                                            'description' => '设备在线状态'."\n"
                                                ."\n"
                                                .'- 1：在线'."\n"
                                                .'- 0：离线',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '1',
                                        ],
                                        'FirmwareVersion' => [
                                            'description' => '设备固件版本',
                                            'type' => 'string',
                                            'example' => '1.0.0-release',
                                        ],
                                    ],
                                ],
                            ],
                            'Message' => [
                                'title' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                                'description' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                            'RequestId' => [
                                'description' => '请求id',
                                'type' => 'string',
                                'example' => 'vrehvuifdsgrts',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidParameter',
                        'errorMessage' => 'The request parameter is invalid',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": 200,\\n  \\"Result\\": [\\n    {\\n      \\"HotelId\\": \\"af7***536\\",\\n      \\"RoomNo\\": \\"1211\\",\\n      \\"Mac\\": \\"aa:aa:aa:aa:aa:aa\\",\\n      \\"Sn\\": \\"dsfdsfrgreg\\",\\n      \\"OnlineStatus\\": 1,\\n      \\"FirmwareVersion\\": \\"1.0.0-release\\"\\n    }\\n  ],\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"vrehvuifdsgrts\\"\\n}","type":"json"}]',
            'title' => '查询房间猫精设备信息',
        ],
        'ControlRoomDevice' => [
            'summary' => '酒店房间内红外或Mesh设备控制',
            'path' => '/v1.0/ip/controlRoomDevice',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'https',
                'http',
            ],
            'security' => [
                [
                    'AliGenie_Auth_SPI' => [],
                ],
            ],
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'HotelId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '酒店id',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'a7***83',
                    ],
                ],
                [
                    'name' => 'RoomNo',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '房间号',
                        'type' => 'string',
                        'required' => true,
                        'example' => '1211',
                    ],
                ],
                [
                    'name' => 'Cmd',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '指令类型',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'thing.attribute.set'."\n"
                            .'thing.attribute.adjust',
                    ],
                ],
                [
                    'name' => 'DeviceNumber',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '设备编号，即在天猫精灵行业管理平台房型客控品类设置下设备的序列号',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'INFRARED49122575595',
                    ],
                ],
                [
                    'name' => 'DeviceIndex',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '多键开关类设备的设备序号',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '0',
                    ],
                ],
                [
                    'name' => 'Properties',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'description' => '属性信息。',
                        'type' => 'object',
                        'required' => true,
                        'additionalProperties' => [
                            'type' => 'string',
                            'required' => true,
                            'example' => '1',
                            'description' => 'powerstate',
                        ],
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Result<ControlResponse>',
                        'description' => 'Result<ControlResponse>',
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'title' => '调用返回码，除约定的SUCCESS_CODE外，其余由服务提供者自定义',
                                'description' => '调用返回码，除约定的SUCCESS_CODE外，其余由服务提供者自定义',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'Result' => [
                                'title' => '服务的实际返回结果',
                                'description' => '服务的实际返回结果',
                                'type' => 'object',
                                'properties' => [
                                    'Status' => [
                                        'description' => '控制结果码',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '200表示成功，其它为失败',
                                    ],
                                    'Message' => [
                                        'description' => '控制结果信息',
                                        'type' => 'string',
                                        'example' => 'success',
                                    ],
                                ],
                            ],
                            'Message' => [
                                'title' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                                'description' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                            'RequestId' => [
                                'title' => '请求id',
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '0EC7***726E',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidParameter',
                        'errorMessage' => 'The request parameter is invalid',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'ServerError',
                        'errorMessage' => 'internal server error',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": 200,\\n  \\"Result\\": {\\n    \\"Status\\": 0,\\n    \\"Message\\": \\"success\\"\\n  },\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"0EC7***726E\\"\\n}","type":"json"}]',
            'title' => '控制房间客控设备',
            'requestParamsDescription' => '><notice>大部分红外设备电源开关是相同的按键码，可能会出现 powerstate 设置为1时，设备实际为关闭动作。></notice>'."\n"
                ."\n"
                .'### 风扇'."\n"
                .'#### thing.attribute.set'."\n"
                .'- powerstate: 开关 '."\n"
                .'    - 0: 关闭'."\n"
                .'    - 1: 打开'."\n"
                ."\n"
                .'### 空调'."\n"
                .'#### thing.attribute.set'."\n"
                .'- powerstate: 开关'."\n"
                .'    - 0: 关闭'."\n"
                .'    - 1: 打开'."\n"
                .'- windspeed: 风速'."\n"
                .'    - 0~3：风速0级至3级'."\n"
                .'- targetTemperature: 目标温度'."\n"
                .'    - 16~30：目标温度，单位摄氏度'."\n"
                .'- mode: 模式'."\n"
                .'    - 2：自动模式'."\n"
                .'    - 9：制冷模式'."\n"
                .'    - 10：制热模式'."\n"
                .'    - 12：送风模式'."\n"
                .'    - 13：除湿模式'."\n"
                .'    - 14：睡眠模式'."\n"
                .'    - 38：强效模式'."\n"
                .'    - 230：节能模式'."\n"
                .'    - 231：预热模式'."\n"
                ."\n"
                .'### 电视类（电视、电视盒子、投影仪、机顶盒）'."\n"
                .'#### thing.attribute.set'."\n"
                .'- powerstate: 开关'."\n"
                .'    - 0: 关闭'."\n"
                .'    - 1: 打开'."\n"
                .'- channelNumber：频道号'."\n"
                .'    - 0~999: 频道号'."\n"
                .'- muteMode: 静音模式'."\n"
                .'    - 0：关闭静音模式'."\n"
                .'    - 1：打开静音模式'."\n"
                ."\n"
                .'#### thing.attribute.adjust'."\n"
                .'- volume: 音量'."\n"
                .'    - 1: 音量加一'."\n"
                .'    - -1：音量减一',
        ],
        'PushVoiceBoxCommands' => [
            'summary' => '推送音箱指令',
            'path' => '/v1.0/ip/pushVoiceBoxCommands',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'AliGenie_Auth_SPI' => [],
                ],
            ],
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'HotelId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '酒店ID',
                        'description' => '酒店ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'a4d9a9cfcdef4c39b2b1a9724eae906b',
                    ],
                ],
                [
                    'name' => 'RoomNo',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '房间号',
                        'description' => '房间号',
                        'type' => 'string',
                        'required' => true,
                        'example' => '111',
                    ],
                ],
                [
                    'name' => 'Commands',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'title' => '命令列表',
                        'description' => '命令列表',
                        'type' => 'array',
                        'items' => [
                            'title' => '',
                            'type' => 'object',
                            'properties' => [
                                'CommandDomain' => [
                                    'title' => '命名空间',
                                    'description' => '命名空间',
                                    'type' => 'string',
                                    'required' => true,
                                    'example' => 'AliGenie.Video.Control',
                                ],
                                'CommandName' => [
                                    'title' => '指令名称',
                                    'description' => '指令名称',
                                    'type' => 'string',
                                    'required' => true,
                                    'example' => 'Pause',
                                ],
                                'Payload' => [
                                    'title' => '指令参数',
                                    'description' => '指令参数',
                                    'type' => 'string',
                                    'required' => false,
                                    'enumValueTitles' => [],
                                    'example' => '可为空',
                                ],
                            ],
                            'required' => true,
                        ],
                        'required' => true,
                        'minItems' => 1,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Result<Boolean>',
                        'description' => 'Result<Boolean>',
                        'type' => 'object',
                        'properties' => [
                            'StatusCode' => [
                                'title' => '调用返回码，除约定的SUCCESS_CODE外，其余由服务提供者自定义',
                                'description' => '调用返回码，除约定的SUCCESS_CODE外，其余由服务提供者自定义',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'Code' => [
                                'title' => '调用返回码 pop返回使用',
                                'description' => '调用返回码 pop返回使用',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'Result' => [
                                'title' => '服务的实际返回结果',
                                'description' => '服务的实际返回结果',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'Message' => [
                                'title' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                                'description' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                                'type' => 'string',
                                'example' => 'null',
                            ],
                            'RequestId' => [
                                'title' => '',
                                'description' => '无',
                                'type' => 'string',
                                'example' => 'null',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidParameter',
                        'errorMessage' => 'The request parameter is invalid',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'ServerError',
                        'errorMessage' => 'internal server error',
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"StatusCode\\": 200,\\n  \\"Code\\": 200,\\n  \\"Result\\": true,\\n  \\"Message\\": \\"null\\",\\n  \\"RequestId\\": \\"null\\"\\n}","type":"json"}]',
            'title' => '推送音箱指令',
            'requestParamsDescription' => '**commands：**'."\n"
                ."\n"
                .'当前支持的指令'."\n"
                .'|    /   |  commandDomain   | commandName  | payload  |'."\n"
                .'|  ----  |  ----  | ----  | ----  |'."\n"
                .'| 带屏设备暂停指令  | AliGenie.Video.Control  | Pause | 可为空 |'."\n"
                .'| 无屏设备暂停指令  | AliGenie.System.Control  | Pause  | 可为空 |'."\n"
                .'| 息屏指令  | AliGenie.Screen  | UnlitScreen  | 可为空 |'."\n"
                .'| 亮屏指令  | AliGenie.Screen  | LightScreen  | 可为空 |',
        ],
        'SyncDeviceStatusWithAk' => [
            'summary' => '用于云云RCU对接的客控设备状态同步至猫精侧，猫精侧存储状态信息或者通知设备端更新状态显示',
            'path' => '/v1.0/ip/syncDeviceStatusWithAk',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'https',
                'http',
            ],
            'security' => [
                [
                    'AliGenie_Auth_SPI' => [],
                ],
            ],
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'HotelId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '酒店id',
                        'description' => '酒店id',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'af7***536',
                    ],
                ],
                [
                    'name' => 'RoomNo',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '房间号',
                        'description' => '房间号',
                        'type' => 'string',
                        'required' => true,
                        'example' => '1211',
                    ],
                ],
                [
                    'name' => 'DeviceName',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '设备名称',
                        'description' => '设备名称',
                        'type' => 'string',
                        'required' => false,
                        'example' => '床头灯',
                    ],
                ],
                [
                    'name' => 'Switch',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '开关值，0：关，1：开',
                        'description' => '开关值，0：关，1：开',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'CategoryEnName',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '设备的品类英文名称',
                        'description' => '设备的品类英文名称',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'light',
                    ],
                ],
                [
                    'name' => 'CategoryCnName',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '设备的品类英文名称，选填',
                        'description' => '设备的品类英文名称，选填',
                        'type' => 'string',
                        'required' => false,
                        'example' => '灯',
                    ],
                ],
                [
                    'name' => 'Number',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '设备序号',
                        'description' => '设备序号',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'bedLight',
                    ],
                ],
                [
                    'name' => 'Location',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '位置',
                        'description' => '位置',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'room',
                    ],
                ],
                [
                    'name' => 'LocationCnName',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '位置中文名称，选填',
                        'description' => '位置中文名称，选填',
                        'type' => 'string',
                        'required' => false,
                        'example' => '房间',
                    ],
                ],
                [
                    'name' => 'mode',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '空调参数，例如制冷、制热模式',
                        'description' => '空调模式'."\n"
                            .'- auto：自动'."\n"
                            .'- cold：制冷'."\n"
                            .'- hot：制热',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'auto',
                    ],
                ],
                [
                    'name' => 'fanSpeed',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '空调字段，风速',
                        'description' => '空调风速，1,2,3分别对应低速、中速、高速',
                        'type' => 'string',
                        'required' => false,
                        'example' => '3',
                    ],
                ],
                [
                    'name' => 'temperature',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '空调字段，温度',
                        'description' => '空调温度',
                        'type' => 'string',
                        'required' => false,
                        'example' => '22',
                    ],
                ],
                [
                    'name' => 'roomTemperature',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '空调字段，当前室温',
                        'description' => '室温',
                        'type' => 'string',
                        'required' => false,
                        'example' => '21',
                    ],
                ],
                [
                    'name' => 'value',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '窗帘、纱帘字段，开合度',
                        'description' => '窗帘开合度，仅窗帘品类使用',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '50',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'headers' => [],
                    'schema' => [
                        'title' => 'Result<Boolean>',
                        'description' => 'Result<Boolean>',
                        'type' => 'object',
                        'properties' => [
                            'StatusCode' => [
                                'title' => '调用返回码，除约定的SUCCESS_CODE外，其余由服务提供者自定义',
                                'description' => '调用返回码，200标识成功',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'Result' => [
                                'title' => '服务的实际返回结果',
                                'description' => '服务的实际返回结果，是否成功',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'Message' => [
                                'title' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                                'description' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                            'requestId' => [
                                'description' => '请求id'."\n",
                                'type' => 'string',
                                'example' => 'F12B6147-5925-19E5-A3AD-E1EE1360F34E',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidParameter',
                        'errorMessage' => 'The request parameter is invalid',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'ServerError',
                        'errorMessage' => 'internal server error',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"StatusCode\\": 200,\\n  \\"Result\\": true,\\n  \\"Message\\": \\"success\\",\\n  \\"requestId\\": \\"F12B6147-5925-19E5-A3AD-E1EE1360F34E\\"\\n}","type":"json"}]',
            'title' => '客控设备状态同步',
        ],
        'CreateRcuScene' => [
            'summary' => '创建rcu自定义场景',
            'path' => '/v1.0/ip/createRcuScene',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'https',
                'http',
            ],
            'security' => [
                [
                    'AliGenie_Auth_SPI' => [],
                ],
            ],
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'HotelId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '酒店id',
                        'description' => '酒店id',
                        'type' => 'string',
                        'required' => true,
                        'example' => '520a0c0***5eb',
                    ],
                ],
                [
                    'name' => 'SceneId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '场景编码',
                        'description' => '场景编码',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'yoga',
                    ],
                ],
                [
                    'name' => 'SceneRelationExtDTO',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'title' => '酒店RCU自定义场景',
                        'description' => '酒店RCU自定义场景',
                        'type' => 'object',
                        'properties' => [
                            'Name' => [
                                'title' => '场景名称',
                                'description' => '场景名称',
                                'type' => 'string',
                                'required' => true,
                                'example' => '瑜伽模式',
                            ],
                            'Icon' => [
                                'title' => '场景图标',
                                'description' => '场景图标',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'https://ailabsaicloudservice.alicdn.com/hotel/icon/changjingmoshi/shuimian.png',
                            ],
                            'Description' => [
                                'title' => '场景描述信息',
                                'description' => '场景描述信息',
                                'type' => 'string',
                                'required' => true,
                                'example' => '做瑜伽的酒店场景',
                            ],
                            'CorpusList' => [
                                'title' => '触发语料',
                                'description' => '触发语料(支持多语料，根据需求传递list 例：瑜伽模式、开始瑜伽)',
                                'type' => 'array',
                                'items' => [
                                    'description' => '触发语料',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => '瑜伽模式',
                                ],
                                'required' => true,
                            ],
                        ],
                        'required' => true,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Result<Boolean>',
                        'description' => 'Result<Boolean>',
                        'type' => 'object',
                        'properties' => [
                            'StatusCode' => [
                                'title' => '调用返回码，除约定的SUCCESS_CODE外，其余由服务提供者自定义',
                                'description' => '调用返回码，除约定的SUCCESS_CODE外，其余由服务提供者自定义',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'Result' => [
                                'title' => '服务的实际返回结果',
                                'description' => '服务的实际返回结果',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'Message' => [
                                'title' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                                'description' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                            'RequestId' => [
                                'title' => '请求id',
                                'description' => '请求id',
                                'type' => 'string',
                                'example' => '844BA5CE-E30A-53CB-8A11-DE1F344C846D',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidParameter',
                        'errorMessage' => 'The request parameter is invalid',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'ServerError',
                        'errorMessage' => 'internal server error',
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"StatusCode\\": 200,\\n  \\"Result\\": true,\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"844BA5CE-E30A-53CB-8A11-DE1F344C846D\\"\\n}","type":"json"}]',
            'title' => '创建rcu自定义场景',
            'description' => '创建rcu自定义场景，请根据请求参数完成创建',
        ],
        'DeleteRcuScene' => [
            'summary' => '删除酒店rcu自定义场景',
            'path' => '/v1.0/ip/deleteRcuScene',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'https',
                'http',
            ],
            'security' => [
                [
                    'AliGenie_Auth_SPI' => [],
                ],
            ],
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'HotelId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '酒店id',
                        'description' => '酒店id',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'a7a3***013',
                    ],
                ],
                [
                    'name' => 'SceneId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '场景编码',
                        'description' => '场景编码',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'yoga',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Result<Boolean>',
                        'description' => 'Result<Boolean>',
                        'type' => 'object',
                        'properties' => [
                            'StatusCode' => [
                                'title' => '调用返回码，除约定的SUCCESS_CODE外，其余由服务提供者自定义',
                                'description' => '调用返回码，除约定的SUCCESS_CODE外，其余由服务提供者自定义',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'Result' => [
                                'title' => '服务的实际返回结果',
                                'description' => '服务的实际返回结果',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'Message' => [
                                'title' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                                'description' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                            'RequestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '4F61A7B7-409C-525D-AFDB-238A4E88925A',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidParameter',
                        'errorMessage' => 'The request parameter is invalid',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'ServerError',
                        'errorMessage' => 'internal server error',
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"StatusCode\\": 200,\\n  \\"Result\\": true,\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"4F61A7B7-409C-525D-AFDB-238A4E88925A\\"\\n}","type":"json"}]',
            'title' => '删除酒店rcu自定义场景',
            'description' => '删除酒店rcu自定义场景，请按照请求参数执行',
        ],
        'UpdateRcuScene' => [
            'summary' => '修改rcu自定义场景',
            'path' => '/v1.0/ip/updateRcuScene',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'https',
                'http',
            ],
            'security' => [
                [
                    'AliGenie_Auth_SPI' => [],
                ],
            ],
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'HotelId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '酒店id',
                        'description' => '酒店id',
                        'type' => 'string',
                        'required' => true,
                        'example' => '520a0c0***5eb',
                    ],
                ],
                [
                    'name' => 'SceneId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '场景编码',
                        'description' => '场景编码',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'yoga',
                    ],
                ],
                [
                    'name' => 'SceneRelationExtDTO',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'title' => '酒店RCU自定义场景',
                        'description' => '酒店RCU自定义场景',
                        'type' => 'object',
                        'properties' => [
                            'Name' => [
                                'title' => '场景名称',
                                'description' => '场景名称',
                                'type' => 'string',
                                'required' => false,
                                'example' => '瑜伽模式',
                            ],
                            'Icon' => [
                                'title' => '场景图标',
                                'description' => '场景图标',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'https://ailabsaicloudservice.alicdn.com/hotel/icon/changjingmoshi/shuimian.png',
                            ],
                            'Description' => [
                                'title' => '场景描述信息',
                                'description' => '场景描述信息',
                                'type' => 'string',
                                'required' => false,
                                'example' => '做做瑜伽',
                            ],
                            'CorpusList' => [
                                'title' => '触发语料',
                                'description' => '触发语料（支持多场景，根据需求传递list，会覆盖之前配的触发语料，若都需要配，修改时需都传 例：瑜伽模式、开始瑜伽）',
                                'type' => 'array',
                                'items' => [
                                    'description' => '触发语料',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => '开始瑜伽',
                                ],
                                'required' => false,
                            ],
                        ],
                        'required' => true,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Result<Boolean>',
                        'description' => 'Result<Boolean>',
                        'type' => 'object',
                        'properties' => [
                            'StatusCode' => [
                                'title' => '调用返回码，除约定的SUCCESS_CODE外，其余由服务提供者自定义',
                                'description' => '调用返回码，除约定的SUCCESS_CODE外，其余由服务提供者自定义',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'Result' => [
                                'title' => '服务的实际返回结果',
                                'description' => '服务的实际返回结果',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'Message' => [
                                'title' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                                'description' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                            'RequestId' => [
                                'description' => '请求id',
                                'type' => 'string',
                                'example' => '3A680F3A-6672-5A47-AB28-12BBCD80C679',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidParameter',
                        'errorMessage' => 'The request parameter is invalid',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'ServerError',
                        'errorMessage' => 'internal server error',
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"StatusCode\\": 200,\\n  \\"Result\\": true,\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"3A680F3A-6672-5A47-AB28-12BBCD80C679\\"\\n}","type":"json"}]',
            'title' => '修改rcu自定义场景',
            'description' => '修改rcu自定义场景，请根据请求参数修改',
        ],
        'QuerySceneList' => [
            'summary' => '查询酒店场景列表',
            'path' => '/v1.0/ip/querySceneList',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'https',
                'http',
            ],
            'security' => [
                [
                    'AliGenie_Auth_SPI' => [],
                ],
            ],
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'HotelId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '酒店id',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'af7***536',
                    ],
                ],
                [
                    'name' => 'SceneTypes',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'title' => '场景集合传递（公共：common；自定义：custom）',
                        'description' => '场景集合传递（公共：common；自定义：custom）',
                        'type' => 'array',
                        'items' => [
                            'description' => 'common 或 custom',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'common',
                        ],
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'SceneStates',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'title' => '场景状态集合传递（1-已关联，0-未关联）',
                        'description' => '场景状态集合传递（1-已关联，0-未关联）',
                        'type' => 'array',
                        'items' => [
                            'description' => '0 或 1',
                            'type' => 'integer',
                            'format' => 'int32',
                            'required' => false,
                            'example' => '1',
                        ],
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'TemplateInfoIds',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'title' => '房型id',
                        'description' => '房型id',
                        'type' => 'array',
                        'items' => [
                            'description' => '房型id',
                            'type' => 'string',
                            'required' => false,
                            'example' => '999',
                        ],
                        'required' => false,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Result<List<HotelSceneWrapperResp>>',
                        'description' => 'Result<List<HotelSceneWrapperResp>>',
                        'type' => 'object',
                        'properties' => [
                            'StatusCode' => [
                                'title' => '调用返回码，除约定的SUCCESS_CODE外，其余由服务提供者自定义',
                                'description' => '调用返回码，除约定的SUCCESS_CODE外，其余由服务提供者自定义',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'Results' => [
                                'title' => '服务的实际返回结果',
                                'description' => '服务的实际返回结果',
                                'type' => 'array',
                                'items' => [
                                    'description' => '结果列表。',
                                    'type' => 'object',
                                    'properties' => [
                                        'SceneId' => [
                                            'title' => '场景id',
                                            'description' => '场景id',
                                            'type' => 'string',
                                            'example' => '73',
                                        ],
                                        'SceneName' => [
                                            'title' => '场景名称',
                                            'description' => '场景名称',
                                            'type' => 'string',
                                            'example' => '睡眠模式',
                                        ],
                                        'Icon' => [
                                            'title' => '场景图标',
                                            'description' => '场景图标',
                                            'type' => 'string',
                                            'example' => 'https://ailabsaicloudservice.alicdn.com/hotel/icon/changjingmoshi/shuimian.png',
                                        ],
                                        'SceneSource' => [
                                            'title' => '场景来源；场景来源；精灵（genie）、外部（external）',
                                            'description' => '场景来源；场景来源；精灵（genie）、外部（external）',
                                            'type' => 'string',
                                            'example' => 'external',
                                        ],
                                        'SceneType' => [
                                            'title' => '场景类型：公共：common；自定义：custom',
                                            'description' => '场景类型：公共：common；自定义：custom',
                                            'type' => 'string',
                                            'example' => 'common',
                                        ],
                                        'SceneState' => [
                                            'title' => '场景与房型的关联状态（1-已关联，0-未关联，-1-不可关联）',
                                            'description' => '场景与房型的关联状态（1-已关联，0-未关联，-1-不可关联）',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '1',
                                        ],
                                        'UnavailableReason' => [
                                            'title' => '场景与房型的关联状态为-1（不可关联）的原因',
                                            'description' => '场景与房型的关联状态为-1（不可关联）的原因',
                                            'type' => 'string',
                                            'example' => '不可关联',
                                        ],
                                        'TemplateInfoDTOList' => [
                                            'title' => '关联的房型',
                                            'description' => '关联的房型',
                                            'type' => 'array',
                                            'items' => [
                                                'type' => 'object',
                                                'properties' => [
                                                    'Id' => [
                                                        'title' => '房型id',
                                                        'description' => '房型id',
                                                        'type' => 'integer',
                                                        'format' => 'int64',
                                                        'example' => '6962',
                                                    ],
                                                    'Name' => [
                                                        'title' => '房型名称',
                                                        'description' => '房型名称',
                                                        'type' => 'string',
                                                        'example' => '101',
                                                    ],
                                                    'Description' => [
                                                        'title' => '描述',
                                                        'description' => '描述',
                                                        'type' => 'string',
                                                        'example' => '房型描述',
                                                    ],
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                            'Message' => [
                                'title' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                                'description' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                            'RequestId' => [
                                'title' => '请求id',
                                'description' => '请求id',
                                'type' => 'string',
                                'example' => 'FAFCD152-4791-5F2F-B0BE-2DC06FD4F05B',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidParameter',
                        'errorMessage' => 'The request parameter is invalid',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'ServerError',
                        'errorMessage' => 'internal server error',
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"StatusCode\\": 200,\\n  \\"Results\\": [\\n    {\\n      \\"SceneId\\": \\"73\\",\\n      \\"SceneName\\": \\"睡眠模式\\",\\n      \\"Icon\\": \\"https://ailabsaicloudservice.alicdn.com/hotel/icon/changjingmoshi/shuimian.png\\",\\n      \\"SceneSource\\": \\"external\\",\\n      \\"SceneType\\": \\"common\\",\\n      \\"SceneState\\": 1,\\n      \\"UnavailableReason\\": \\"不可关联\\",\\n      \\"TemplateInfoDTOList\\": [\\n        {\\n          \\"Id\\": 6962,\\n          \\"Name\\": \\"101\\",\\n          \\"Description\\": \\"房型描述\\"\\n        }\\n      ]\\n    }\\n  ],\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"FAFCD152-4791-5F2F-B0BE-2DC06FD4F05B\\"\\n}","type":"json"}]',
            'title' => '查询酒店场景列表',
            'description' => '查询酒店场景列表，请根据请求参数查询',
        ],
        'ListAllProvinces' => [
            'summary' => '查询红外使用的省份信息',
            'path' => '/v1.0/ip/listAllProvinces',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'https',
                'http',
            ],
            'security' => [
                [
                    'AliGenie_Auth_SPI' => [],
                ],
            ],
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Result<List<String>>',
                        'description' => 'Result<List<String>>',
                        'type' => 'object',
                        'properties' => [
                            'StatusCode' => [
                                'title' => '调用返回码，除约定的SUCCESS_CODE外，其余由服务提供者自定义',
                                'description' => '调用返回码，除约定的SUCCESS_CODE外，其余由服务提供者自定义',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'Result' => [
                                'title' => '服务的实际返回结果',
                                'description' => '服务的实际返回结果',
                                'type' => 'array',
                                'items' => [
                                    'description' => '服务的实际返回结果',
                                    'type' => 'string',
                                    'example' => '浙江省',
                                ],
                            ],
                            'Message' => [
                                'title' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                                'description' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                            'RequestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '00534880-4397-5134-B212-1030B7A37C27',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidParameter',
                        'errorMessage' => 'The request parameter is invalid',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'ServerError',
                        'errorMessage' => 'internal server error',
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"StatusCode\\": 200,\\n  \\"Result\\": [\\n    \\"浙江省\\"\\n  ],\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"00534880-4397-5134-B212-1030B7A37C27\\"\\n}","type":"json"}]',
            'title' => '查询省份',
            'description' => '查询红外使用的省份信息',
        ],
        'ListCitiesByProvince' => [
            'summary' => '根据省份查询红外使用的城市列表',
            'path' => '/v1.0/ip/listCitiesByProvince',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'https',
                'http',
            ],
            'security' => [
                [
                    'AliGenie_Auth_SPI' => [],
                ],
            ],
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'Province',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '省份',
                        'description' => '省份',
                        'type' => 'string',
                        'required' => true,
                        'example' => '北京市',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Result<List<String>>',
                        'description' => 'Result<List<String>>',
                        'type' => 'object',
                        'properties' => [
                            'StatusCode' => [
                                'title' => '调用返回码，除约定的SUCCESS_CODE外，其余由服务提供者自定义',
                                'description' => '调用返回码，除约定的SUCCESS_CODE外，其余由服务提供者自定义',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'Result' => [
                                'title' => '服务的实际返回结果',
                                'description' => '服务的实际返回结果',
                                'type' => 'array',
                                'items' => [
                                    'description' => '信息列表',
                                    'type' => 'string',
                                    'example' => '北京市',
                                ],
                            ],
                            'Message' => [
                                'title' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                                'description' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '860194F7-9593-50EA-8E53-BCEC0D325A00',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidParameter',
                        'errorMessage' => 'The request parameter is invalid',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'ServerError',
                        'errorMessage' => 'internal server error',
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"StatusCode\\": 200,\\n  \\"Result\\": [\\n    \\"北京市\\"\\n  ],\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"860194F7-9593-50EA-8E53-BCEC0D325A00\\"\\n}","type":"json"}]',
            'title' => '查询城市',
            'description' => '根据省份查询红外使用的城市列表',
        ],
        'ListSTBServiceProviders' => [
            'summary' => '查询服务提供商',
            'path' => '/v1.0/ip/listSTBServiceProviders',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'https',
                'http',
            ],
            'security' => [
                [
                    'AliGenie_Auth_SPI' => [],
                ],
            ],
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'Province',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '省份',
                        'description' => '省份',
                        'type' => 'string',
                        'required' => true,
                        'example' => '浙江省',
                    ],
                ],
                [
                    'name' => 'City',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '城市',
                        'description' => '城市',
                        'type' => 'string',
                        'required' => true,
                        'example' => '杭州市',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Result<Map<String, List<String>>>',
                        'description' => 'Result<Map<String, List<String>>>',
                        'type' => 'object',
                        'properties' => [
                            'StatusCode' => [
                                'title' => '调用返回码，除约定的SUCCESS_CODE外，其余由服务提供者自定义',
                                'description' => '调用返回码，除约定的SUCCESS_CODE外，其余由服务提供者自定义',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'Result' => [
                                'title' => '服务的实际返回结果',
                                'description' => '服务的实际返回结果',
                                'type' => 'object',
                                'additionalProperties' => [
                                    'type' => 'array',
                                    'items' => [
                                        'type' => 'string',
                                        'description' => '返回内容',
                                        'example' => '"Z":["浙江华数"]',
                                    ],
                                    'description' => '服务的实际返回结果',
                                ],
                            ],
                            'Message' => [
                                'title' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                                'description' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                            'RequestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '1036C376-7A37-5A73-BE8B-C6DB40107EC1',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidParameter',
                        'errorMessage' => 'The request parameter is invalid',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'ServerError',
                        'errorMessage' => 'internal server error',
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"StatusCode\\": 200,\\n  \\"Result\\": {\\n    \\"key\\": [\\n      \\"\\\\\\"Z\\\\\\":[\\\\\\"浙江华数\\\\\\"]\\"\\n    ]\\n  },\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"1036C376-7A37-5A73-BE8B-C6DB40107EC1\\"\\n}","type":"json"}]',
            'title' => '查询服务提供商',
        ],
        'ListInfraredDeviceBrands' => [
            'summary' => '查询红外品牌列表',
            'path' => '/v1.0/ip/listInfraredDeviceBrands',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'https',
                'http',
            ],
            'security' => [
                [
                    'AliGenie_Auth_SPI' => [],
                ],
            ],
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'Category',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '设备名称',
                        'description' => '设备名称',
                        'type' => 'string',
                        'required' => true,
                        'example' => '机顶盒',
                    ],
                ],
                [
                    'name' => 'ServiceProvider',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '服务提供商（品类为机顶盒时必传）',
                        'description' => '服务提供商（品类为机顶盒时必传）',
                        'type' => 'string',
                        'required' => false,
                        'example' => '浙江省电信IPTV',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Result<Map<String, List<String>>>',
                        'description' => 'Result<Map<String, List<String>>>',
                        'type' => 'object',
                        'properties' => [
                            'StatusCode' => [
                                'title' => '调用返回码，除约定的SUCCESS_CODE外，其余由服务提供者自定义',
                                'description' => '调用返回码，除约定的SUCCESS_CODE外，其余由服务提供者自定义',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'Result' => [
                                'title' => '服务的实际返回结果',
                                'description' => '服务的实际返回结果',
                                'type' => 'object',
                                'additionalProperties' => [
                                    'type' => 'array',
                                    'items' => [
                                        'type' => 'string',
                                        'description' => '集合内容',
                                        'example' => '"A":["Addsion", "Ambassador"]',
                                    ],
                                    'description' => '返回的详细信息列表。',
                                ],
                            ],
                            'Message' => [
                                'title' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                                'description' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                            'RequestId' => [
                                'title' => '请求id',
                                'description' => '请求id',
                                'type' => 'string',
                                'example' => '860194F7-9593-50EA-8E53-BCEC0D325A00',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidParameter',
                        'errorMessage' => 'The request parameter is invalid',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'ServerError',
                        'errorMessage' => 'internal server error',
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"StatusCode\\": 200,\\n  \\"Result\\": {\\n    \\"key\\": [\\n      \\"\\\\\\"A\\\\\\":[\\\\\\"Addsion\\\\\\", \\\\\\"Ambassador\\\\\\"]\\"\\n    ]\\n  },\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"860194F7-9593-50EA-8E53-BCEC0D325A00\\"\\n}","type":"json"}]',
            'title' => '查询红外品牌列表',
        ],
        'ListInfraredRemoteControllers' => [
            'summary' => '查询红外码库列表',
            'path' => '/v1.0/ip/listInfraredRemoteControllers',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'https',
                'http',
            ],
            'security' => [
                [
                    'AliGenie_Auth_SPI' => [],
                ],
            ],
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'HotelId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '酒店ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'af7***536',
                    ],
                ],
                [
                    'name' => 'Province',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '省份'."\n"
                            .'品类为机顶盒时必传',
                        'description' => '省份'."\n"
                            .'品类为机顶盒时必传',
                        'type' => 'string',
                        'required' => false,
                        'example' => '浙江省',
                    ],
                ],
                [
                    'name' => 'City',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '城市'."\n"
                            .'品类为机顶盒时必传',
                        'description' => '城市'."\n"
                            .'品类为机顶盒时必传',
                        'type' => 'string',
                        'required' => false,
                        'example' => '杭州市',
                    ],
                ],
                [
                    'name' => 'Category',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '品类',
                        'description' => '品类',
                        'type' => 'string',
                        'required' => true,
                        'example' => '机顶盒',
                    ],
                ],
                [
                    'name' => 'Brand',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '品牌'."\n"
                            .'品类非机顶盒必填，为机顶盒同时供应商为IPTV时必传',
                        'description' => '品牌'."\n"
                            .'品类非机顶盒必填，为机顶盒同时供应商为IPTV时必传',
                        'type' => 'string',
                        'required' => false,
                        'example' => '奥图码',
                    ],
                ],
                [
                    'name' => 'ServiceProvider',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '服务提供商'."\n"
                            .'品类为机顶盒时必传',
                        'description' => '服务提供商'."\n"
                            .'品类为机顶盒时必传',
                        'type' => 'string',
                        'required' => false,
                        'example' => '浙江省移动IPTV',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Result<List<InfraredControlCodeResp>>',
                        'description' => 'Result<List<InfraredControlCodeResp>>',
                        'type' => 'object',
                        'properties' => [
                            'StatusCode' => [
                                'title' => '调用返回码，除约定的SUCCESS_CODE外，其余由服务提供者自定义',
                                'description' => '调用返回码，除约定的SUCCESS_CODE外，其余由服务提供者自定义',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'Result' => [
                                'title' => '服务的实际返回结果',
                                'description' => '服务的实际返回结果',
                                'type' => 'array',
                                'items' => [
                                    'description' => '服务的实际返回结果',
                                    'type' => 'object',
                                    'properties' => [
                                        'Index' => [
                                            'title' => '当前索引',
                                            'description' => '当前索引',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '1',
                                        ],
                                        'Rid' => [
                                            'title' => '遥控器编号',
                                            'description' => '遥控器编号',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '3747',
                                        ],
                                        'Version' => [
                                            'title' => '版本信息',
                                            'description' => '版本信息',
                                            'type' => 'string',
                                            'example' => '4',
                                        ],
                                    ],
                                ],
                            ],
                            'Message' => [
                                'title' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                                'description' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                            'RequestId' => [
                                'title' => '请求id',
                                'description' => '请求id',
                                'type' => 'string',
                                'example' => '0C90A059-3653-5356-A78E-8A6BDA606155',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidParameter',
                        'errorMessage' => 'The request parameter is invalid',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'ServerError',
                        'errorMessage' => 'internal server error',
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"StatusCode\\": 200,\\n  \\"Result\\": [\\n    {\\n      \\"Index\\": 1,\\n      \\"Rid\\": 3747,\\n      \\"Version\\": \\"4\\"\\n    }\\n  ],\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"0C90A059-3653-5356-A78E-8A6BDA606155\\"\\n}","type":"json"}]',
            'title' => '查询红外码库列表',
        ],
        'ListCustomQA' => [
            'summary' => '自定义问答模块下的查询自定义问答列表功能。',
            'path' => '/v1.0/ip/listCustomQA',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'https',
                'http',
            ],
            'security' => [
                [
                    'AliGenie_Auth_SPI' => [],
                ],
            ],
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'HotelId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '酒店id',
                        'type' => 'string',
                        'required' => true,
                        'example' => '520a0c0***5eb',
                    ],
                ],
                [
                    'name' => 'Keyword',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '关键字（用于模糊查询主问题、附属问题、回答、关键字）',
                        'type' => 'string',
                        'required' => false,
                        'example' => '***',
                    ],
                ],
                [
                    'name' => 'Page',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'description' => '分页参数',
                        'type' => 'object',
                        'properties' => [
                            'PageNumber' => [
                                'title' => '页码',
                                'description' => '页码',
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => true,
                                'example' => '1',
                            ],
                            'PageSize' => [
                                'title' => '每页size大小',
                                'description' => '每页size大小',
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => true,
                                'example' => '10',
                            ],
                        ],
                        'required' => true,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'headers' => [],
                    'schema' => [
                        'title' => 'PageResult<List<QAInfoResponse>>',
                        'description' => 'PageResult<List<QAInfoResponse>>',
                        'type' => 'object',
                        'properties' => [
                            'Page' => [
                                'title' => '翻页参数',
                                'description' => '翻页参数',
                                'type' => 'object',
                                'properties' => [
                                    'PageNumber' => [
                                        'title' => '页码',
                                        'description' => '页码',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '1',
                                    ],
                                    'PageSize' => [
                                        'title' => '每页size大小',
                                        'description' => '每页size大小',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '10',
                                    ],
                                    'Total' => [
                                        'description' => '共多少条数据',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '21',
                                    ],
                                ],
                            ],
                            'StatusCode' => [
                                'title' => '调用返回码，除约定的SUCCESS_CODE外，其余由服务提供者自定义',
                                'description' => '调用返回码，除约定的SUCCESS_CODE外，其余由服务提供者自定义',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'Result' => [
                                'title' => '服务的实际返回结果',
                                'description' => '服务的实际返回结果',
                                'type' => 'array',
                                'items' => [
                                    'description' => '返回结果',
                                    'type' => 'object',
                                    'properties' => [
                                        'CustomQAId' => [
                                            'title' => 'qaID',
                                            'description' => '自定义问答id',
                                            'type' => 'string',
                                            'example' => '111',
                                        ],
                                        'MajorQuestion' => [
                                            'title' => '主要问题',
                                            'description' => '主问题',
                                            'type' => 'string',
                                            'example' => '***',
                                        ],
                                        'SupplementaryQuestion' => [
                                            'title' => '辅助问题',
                                            'description' => '附属问题，多个用;隔开',
                                            'type' => 'string',
                                            'example' => '22;11',
                                        ],
                                        'Answers' => [
                                            'title' => '回答，多个回答用;隔开',
                                            'description' => '回答，多个回答用;隔开',
                                            'type' => 'string',
                                            'example' => '22;11',
                                        ],
                                        'KeyWords' => [
                                            'title' => '关键字',
                                            'description' => '关键字，多个用;隔开',
                                            'type' => 'string',
                                            'example' => '22;11',
                                        ],
                                        'HotelId' => [
                                            'title' => '酒店ID',
                                            'description' => '酒店id',
                                            'type' => 'string',
                                            'example' => 'a7***83',
                                        ],
                                        'UpdateTime' => [
                                            'title' => '更新时间',
                                            'description' => '更新时间',
                                            'type' => 'string',
                                            'example' => '2023-01-10 10:01:59',
                                        ],
                                        'CreateTime' => [
                                            'title' => '创建时间',
                                            'description' => '创建时间',
                                            'type' => 'string',
                                            'example' => '2023-01-10 10:01:59',
                                        ],
                                        'Status' => [
                                            'title' => '状态：0，使用中， 1：删除',
                                            'description' => '状态（0：使用中， 1：删除）',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'enumValueTitles' => [
                                                '使用中',
                                                '删除',
                                            ],
                                            'example' => '0',
                                        ],
                                    ],
                                ],
                            ],
                            'Message' => [
                                'title' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                                'description' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                            'RequestId' => [
                                'description' => '请求id',
                                'type' => 'string',
                                'example' => '0EC7***726E'."\n",
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidParameter',
                        'errorMessage' => 'The request parameter is invalid',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'ServerError',
                        'errorMessage' => 'internal server error',
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Page\\": {\\n    \\"PageNumber\\": 1,\\n    \\"PageSize\\": 10,\\n    \\"Total\\": 21\\n  },\\n  \\"StatusCode\\": 200,\\n  \\"Result\\": [\\n    {\\n      \\"CustomQAId\\": \\"111\\",\\n      \\"MajorQuestion\\": \\"***\\",\\n      \\"SupplementaryQuestion\\": \\"22;11\\",\\n      \\"Answers\\": \\"22;11\\",\\n      \\"KeyWords\\": \\"22;11\\",\\n      \\"HotelId\\": \\"a7***83\\",\\n      \\"UpdateTime\\": \\"2023-01-10 10:01:59\\",\\n      \\"CreateTime\\": \\"2023-01-10 10:01:59\\",\\n      \\"Status\\": 0\\n    }\\n  ],\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"0EC7***726E\\\\n\\"\\n}","type":"json"}]',
            'title' => '查询自定义问答列表',
        ],
        'AddCustomQA' => [
            'summary' => '自定义问答模块下的新增自定义问答功能。',
            'path' => '/v1.0/ip/addCustomQA',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'https',
                'http',
            ],
            'security' => [
                [
                    'AliGenie_Auth_SPI' => [],
                ],
            ],
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'HotelId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '酒店id',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'a7a3***013',
                    ],
                ],
                [
                    'name' => 'MajorQuestion',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '主问题',
                        'type' => 'string',
                        'required' => false,
                        'example' => '***',
                    ],
                ],
                [
                    'name' => 'SupplementaryQuestions',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'description' => '附属问题列表',
                        'type' => 'array',
                        'items' => [
                            'description' => '附属问题',
                            'type' => 'string',
                            'required' => false,
                            'example' => '***',
                        ],
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'KeyWords',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'description' => '关键字列表',
                        'type' => 'array',
                        'items' => [
                            'description' => '关键字',
                            'type' => 'string',
                            'required' => false,
                            'example' => '***',
                        ],
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Answers',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'description' => '回答列表',
                        'type' => 'array',
                        'items' => [
                            'description' => '回答',
                            'type' => 'string',
                            'required' => false,
                            'example' => '***',
                        ],
                        'required' => false,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'headers' => [],
                    'schema' => [
                        'title' => 'Result<Boolean>',
                        'description' => 'Result<Boolean>',
                        'type' => 'object',
                        'properties' => [
                            'StatusCode' => [
                                'title' => '调用返回码，除约定的SUCCESS_CODE外，其余由服务提供者自定义',
                                'description' => '调用返回码，除约定的SUCCESS_CODE外，其余由服务提供者自定义',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'Result' => [
                                'title' => '服务的实际返回结果',
                                'description' => '服务的实际返回结果',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'Message' => [
                                'title' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                                'description' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                            'RequestId' => [
                                'description' => '请求id',
                                'type' => 'string',
                                'example' => '0EC7***726E',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidParameter',
                        'errorMessage' => 'The request parameter is invalid',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'ServerError',
                        'errorMessage' => 'internal server error',
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"StatusCode\\": 200,\\n  \\"Result\\": true,\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"0EC7***726E\\"\\n}","type":"json"}]',
            'title' => '新增自定义问答',
        ],
        'AddCustomQAV2' => [
            'summary' => '添加自定义问答V2版本',
            'path' => '/v1.0/ip/addQAV2',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'https',
                'http',
            ],
            'security' => [
                [
                    'AliGenie_Auth_SPI' => [],
                ],
            ],
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'HotelId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '酒店id',
                        'type' => 'string',
                        'required' => true,
                        'example' => '520a0c0***5eb',
                    ],
                ],
                [
                    'name' => 'MajorQuestion',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '主问题',
                        'type' => 'string',
                        'required' => false,
                        'example' => '今天的天气怎么样',
                    ],
                ],
                [
                    'name' => 'SupplementaryQuestions',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'description' => '附属问题列表',
                        'type' => 'array',
                        'items' => [
                            'description' => '附属问题列表',
                            'type' => 'string',
                            'required' => false,
                            'example' => '室外温度多少',
                        ],
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'KeyWords',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'description' => '关键字列表。',
                        'type' => 'array',
                        'items' => [
                            'description' => '关键字列表',
                            'type' => 'string',
                            'required' => false,
                            'example' => '天气',
                        ],
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Answers',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'description' => '答案列表',
                        'type' => 'array',
                        'items' => [
                            'description' => '答案列表',
                            'type' => 'string',
                            'required' => false,
                            'example' => '你好,您可以再说一遍吗 不好意思我刚才没有听清',
                        ],
                        'required' => true,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Result<QAInfoResponse>',
                        'description' => 'Result<QAInfoResponse>',
                        'type' => 'object',
                        'properties' => [
                            'StatusCode' => [
                                'title' => '调用返回码，除约定的SUCCESS_CODE外，其余由服务提供者自定义',
                                'description' => '调用返回码，除约定的SUCCESS_CODE外，其余由服务提供者自定义',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'FAFCD152-4791-5F2F-B0BE-2DC06FD4F05B',
                            ],
                            'Result' => [
                                'title' => '服务的实际返回结果',
                                'description' => '服务的实际返回结果',
                                'type' => 'object',
                                'properties' => [
                                    'QaId' => [
                                        'title' => 'qaID',
                                        'description' => 'qaID',
                                        'type' => 'string',
                                        'example' => '1',
                                    ],
                                    'MajorQuestion' => [
                                        'title' => '主要问题',
                                        'description' => '主要问题',
                                        'type' => 'string',
                                        'example' => '今天天气怎么样',
                                    ],
                                    'SupplementaryQuestion' => [
                                        'title' => '辅助问题',
                                        'description' => '辅助问题',
                                        'type' => 'string',
                                        'example' => '室外温度多少',
                                    ],
                                    'Answers' => [
                                        'title' => '回答，多个回答用;隔开',
                                        'description' => '回答，多个回答用;隔开',
                                        'type' => 'string',
                                        'example' => '你好,您可以再说一遍吗 不好意思我刚才没有听清',
                                    ],
                                    'KeyWords' => [
                                        'title' => '关键字',
                                        'description' => '关键字',
                                        'type' => 'string',
                                        'example' => '天气',
                                    ],
                                    'HotelId' => [
                                        'title' => '酒店ID',
                                        'description' => '酒店ID',
                                        'type' => 'string',
                                        'example' => 'a7***83',
                                    ],
                                    'UpdateTime' => [
                                        'title' => '更新时间',
                                        'description' => '更新时间',
                                        'type' => 'string',
                                        'example' => '2023-01-10 10:01:59',
                                    ],
                                    'CreateTime' => [
                                        'title' => '创建时间',
                                        'description' => '创建时间',
                                        'type' => 'string',
                                        'example' => '2023-01-10 10:01:59',
                                    ],
                                    'Status' => [
                                        'title' => '状态：0，使用中， 1：删除',
                                        'description' => '状态：0，使用中， 1：删除',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '0',
                                    ],
                                    'LastOperator' => [
                                        'title' => '最后操作人',
                                        'description' => '最后操作人',
                                        'type' => 'string',
                                        'example' => '8xxx9',
                                    ],
                                ],
                            ],
                            'Message' => [
                                'title' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                                'description' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidParameter',
                        'errorMessage' => 'The request parameter is invalid',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'ServerError',
                        'errorMessage' => 'internal server error',
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"StatusCode\\": 200,\\n  \\"RequestId\\": \\"FAFCD152-4791-5F2F-B0BE-2DC06FD4F05B\\",\\n  \\"Result\\": {\\n    \\"QaId\\": \\"1\\",\\n    \\"MajorQuestion\\": \\"今天天气怎么样\\",\\n    \\"SupplementaryQuestion\\": \\"室外温度多少\\",\\n    \\"Answers\\": \\"你好,您可以再说一遍吗 不好意思我刚才没有听清\\",\\n    \\"KeyWords\\": \\"天气\\",\\n    \\"HotelId\\": \\"a7***83\\",\\n    \\"UpdateTime\\": \\"2023-01-10 10:01:59\\",\\n    \\"CreateTime\\": \\"2023-01-10 10:01:59\\",\\n    \\"Status\\": 0,\\n    \\"LastOperator\\": \\"8xxx9\\"\\n  },\\n  \\"Message\\": \\"success\\"\\n}","type":"json"}]',
            'title' => '新增自定义问答V2',
            'description' => '返回值有QAId'."\n"
                .'问答内容和答案是必填内容',
        ],
        'UpdateCustomQA' => [
            'summary' => '自定义问答模块下的修改自定义问答功能。',
            'path' => '/v1.0/ip/updateCustomQA',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'https',
                'http',
            ],
            'security' => [
                [
                    'AliGenie_Auth_SPI' => [],
                ],
            ],
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'CustomQAId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '自定义问答id',
                        'type' => 'string',
                        'required' => true,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'HotelId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '酒店id',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'af7***536',
                    ],
                ],
                [
                    'name' => 'MajorQuestion',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '主问题',
                        'type' => 'string',
                        'required' => false,
                        'example' => '***',
                    ],
                ],
                [
                    'name' => 'SupplementaryQuestions',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'description' => '附属问题列表',
                        'type' => 'array',
                        'items' => [
                            'description' => '附属问题',
                            'type' => 'string',
                            'required' => false,
                            'example' => '***',
                        ],
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'KeyWords',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'description' => '关键字列表',
                        'type' => 'array',
                        'items' => [
                            'description' => '关键字',
                            'type' => 'string',
                            'required' => false,
                            'example' => '***',
                        ],
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Answers',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'description' => '回答列表',
                        'type' => 'array',
                        'items' => [
                            'description' => '回答',
                            'type' => 'string',
                            'required' => false,
                            'example' => '***',
                        ],
                        'required' => false,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'headers' => [],
                    'schema' => [
                        'title' => 'Result<Boolean>',
                        'description' => 'Result<Boolean>',
                        'type' => 'object',
                        'properties' => [
                            'StatusCode' => [
                                'title' => '调用返回码，除约定的SUCCESS_CODE外，其余由服务提供者自定义',
                                'description' => '调用返回码，除约定的SUCCESS_CODE外，其余由服务提供者自定义',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'Result' => [
                                'title' => '服务的实际返回结果',
                                'description' => '服务的实际返回结果',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'Message' => [
                                'title' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                                'description' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                            'RequestId' => [
                                'description' => '请求id',
                                'type' => 'string',
                                'example' => '73C6***BB3E6FA',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidParameter',
                        'errorMessage' => 'The request parameter is invalid',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'ServerError',
                        'errorMessage' => 'internal server error',
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"StatusCode\\": 200,\\n  \\"Result\\": true,\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"73C6***BB3E6FA\\"\\n}","type":"json"}]',
            'title' => '修改自定义问答',
        ],
        'DeleteCustomQA' => [
            'summary' => '自定义问答模块下的删除自定义问答功能。',
            'path' => '/v1.0/ip/deleteCustomQA',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'https',
                'http',
            ],
            'security' => [
                [
                    'AliGenie_Auth_SPI' => [],
                ],
            ],
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'CustomQAIds',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'description' => '自定义问答id列表',
                        'type' => 'array',
                        'items' => [
                            'description' => '自定义问答id',
                            'type' => 'string',
                            'required' => false,
                            'example' => '11',
                        ],
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'HotelId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '酒店ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'a7a3***013',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'headers' => [],
                    'schema' => [
                        'title' => 'Result<Boolean>',
                        'description' => 'Result<Boolean>',
                        'type' => 'object',
                        'properties' => [
                            'StatusCode' => [
                                'title' => '调用返回码，除约定的SUCCESS_CODE外，其余由服务提供者自定义',
                                'description' => '调用返回码，除约定的SUCCESS_CODE外，其余由服务提供者自定义',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'Result' => [
                                'title' => '服务的实际返回结果',
                                'description' => '服务的实际返回结果',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'Message' => [
                                'title' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                                'description' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                            'RequestId' => [
                                'description' => '请求id',
                                'type' => 'string',
                                'example' => '73C6***E6FA',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidParameter',
                        'errorMessage' => 'The request parameter is invalid',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'ServerError',
                        'errorMessage' => 'internal server error',
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"StatusCode\\": 200,\\n  \\"Result\\": true,\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"73C6***E6FA\\"\\n}","type":"json"}]',
            'title' => '删除自定义问答',
        ],
        'GetBasicInfoQA' => [
            'summary' => '通用问答模块下的获取基础信息问答功能。',
            'path' => '/v1.0/ip/getBasicInfoQA',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'https',
                'http',
            ],
            'security' => [
                [
                    'AliGenie_Auth_SPI' => [],
                ],
            ],
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'HotelId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '酒店id',
                        'description' => '酒店id',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'a7***83',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'headers' => [],
                    'schema' => [
                        'title' => 'Result<IntentionQATemplateResponse>',
                        'description' => 'Result<IntentionQATemplateResponse>',
                        'type' => 'object',
                        'properties' => [
                            'StatusCode' => [
                                'title' => '调用返回码，除约定的SUCCESS_CODE外，其余由服务提供者自定义',
                                'description' => '调用返回码，除约定的SUCCESS_CODE外，其余由服务提供者自定义',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'Result' => [
                                'title' => '服务的实际返回结果',
                                'description' => '服务的实际返回结果',
                                'type' => 'object',
                                'properties' => [
                                    'HotelAddress' => [
                                        'title' => '酒店地址',
                                        'description' => '酒店地址',
                                        'type' => 'string',
                                        'example' => '杭州市***',
                                    ],
                                    'PhoneNumber' => [
                                        'title' => '前台电话',
                                        'description' => '前台电话',
                                        'type' => 'string',
                                        'example' => '123***',
                                    ],
                                    'CheckInTime' => [
                                        'title' => '入住时间 格式xx:xx 时分',
                                        'description' => '入住时间（格式xx:xx 时分）',
                                        'type' => 'string',
                                        'example' => '11:11',
                                    ],
                                    'CheckOutTime' => [
                                        'title' => '退房时间',
                                        'description' => '退房时间（格式xx:xx 时分）',
                                        'type' => 'string',
                                        'example' => '11:11',
                                    ],
                                    'WifiName' => [
                                        'title' => 'wifi名称',
                                        'description' => 'wifi名称',
                                        'type' => 'string',
                                        'example' => '名称***',
                                    ],
                                    'WifiPassword' => [
                                        'title' => 'wifi密码',
                                        'description' => 'wifi密码',
                                        'type' => 'string',
                                        'example' => '密码***',
                                    ],
                                    'HotelMember' => [
                                        'title' => '酒店会员相关介绍',
                                        'description' => '酒店会员相关介绍',
                                        'type' => 'string',
                                        'example' => '会员***'."\n",
                                    ],
                                    'HotelService' => [
                                        'title' => '酒店特色服务相关介绍',
                                        'description' => '酒店特色服务相关介绍',
                                        'type' => 'string',
                                        'example' => '服务***',
                                    ],
                                    'HotelIntroduction' => [
                                        'title' => '酒店介绍',
                                        'description' => '酒店介绍',
                                        'type' => 'string',
                                        'example' => '酒店***',
                                    ],
                                    'ParkingPosition' => [
                                        'title' => '停车场位置',
                                        'description' => '停车场位置',
                                        'type' => 'string',
                                        'example' => '杭州市***',
                                    ],
                                    'ParkingExpenses' => [
                                        'title' => '停车费用，免费停车/收费停车',
                                        'description' => '停车费用（免费停车/收费停车）',
                                        'type' => 'string',
                                        'enumValueTitles' => [
                                            '收费停车' => '收费停车',
                                            '免费停车' => '免费停车',
                                        ],
                                        'example' => '免费停车',
                                        'enum' => [],
                                    ],
                                ],
                            ],
                            'Message' => [
                                'title' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                                'description' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                            'RequestId' => [
                                'description' => '请求id',
                                'type' => 'string',
                                'example' => '0EC7***726E',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidParameter',
                        'errorMessage' => 'The request parameter is invalid',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'ServerError',
                        'errorMessage' => 'internal server error',
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"StatusCode\\": 200,\\n  \\"Result\\": {\\n    \\"HotelAddress\\": \\"杭州市***\\",\\n    \\"PhoneNumber\\": \\"123***\\",\\n    \\"CheckInTime\\": \\"11:11\\",\\n    \\"CheckOutTime\\": \\"11:11\\",\\n    \\"WifiName\\": \\"名称***\\",\\n    \\"WifiPassword\\": \\"密码***\\",\\n    \\"HotelMember\\": \\"会员***\\\\n\\",\\n    \\"HotelService\\": \\"服务***\\",\\n    \\"HotelIntroduction\\": \\"酒店***\\",\\n    \\"ParkingPosition\\": \\"杭州市***\\",\\n    \\"ParkingExpenses\\": \\"免费停车\\"\\n  },\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"0EC7***726E\\"\\n}","type":"json"}]',
            'title' => '获取基础信息问答',
        ],
        'UpdateBasicInfoQA' => [
            'summary' => '通用问答模块下的修改基础信息问答功能。',
            'path' => '/v1.0/ip/updateBasicInfoQA',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'https',
                'http',
            ],
            'security' => [
                [
                    'AliGenie_Auth_SPI' => [],
                ],
            ],
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'HotelId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '酒店id',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'af7***536'."\n",
                    ],
                ],
                [
                    'name' => 'HotelAddress',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '酒店地址',
                        'description' => '酒店地址',
                        'type' => 'string',
                        'required' => true,
                        'example' => '浙江省杭州市xxxx',
                    ],
                ],
                [
                    'name' => 'PhoneNumber',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '前台电话',
                        'description' => '前台电话',
                        'type' => 'string',
                        'required' => true,
                        'example' => '123***',
                    ],
                ],
                [
                    'name' => 'CheckInTime',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '入住时间 格式xx:xx 时分',
                        'description' => '入住时间（格式xx:xx 时分）',
                        'type' => 'string',
                        'required' => true,
                        'example' => '11:11'."\n",
                    ],
                ],
                [
                    'name' => 'CheckOutTime',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '退房时间',
                        'description' => '退房时间（格式xx:xx 时分）',
                        'type' => 'string',
                        'required' => true,
                        'example' => '11:11',
                    ],
                ],
                [
                    'name' => 'WifiName',
                    'in' => 'formData',
                    'schema' => [
                        'title' => 'wifi名称',
                        'description' => 'wifi名称',
                        'type' => 'string',
                        'required' => true,
                        'example' => '名称***',
                    ],
                ],
                [
                    'name' => 'WifiPassword',
                    'in' => 'formData',
                    'schema' => [
                        'title' => 'wifi密码',
                        'description' => 'wifi密码',
                        'type' => 'string',
                        'required' => true,
                        'example' => '密码***',
                    ],
                ],
                [
                    'name' => 'HotelMember',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '酒店会员相关介绍',
                        'description' => '酒店会员相关介绍',
                        'type' => 'string',
                        'required' => false,
                        'example' => '会员***',
                    ],
                ],
                [
                    'name' => 'HotelService',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '酒店特色服务相关介绍',
                        'description' => '酒店特色服务相关介绍',
                        'type' => 'string',
                        'required' => false,
                        'example' => '服务***',
                    ],
                ],
                [
                    'name' => 'HotelIntroduction',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '酒店介绍',
                        'description' => '酒店介绍',
                        'type' => 'string',
                        'required' => false,
                        'example' => '酒店***',
                    ],
                ],
                [
                    'name' => 'ParkingPosition',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '停车场位置',
                        'description' => '停车场位置',
                        'type' => 'string',
                        'required' => true,
                        'example' => '杭州市xx',
                    ],
                ],
                [
                    'name' => 'ParkingExpenses',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '停车费用，免费停车/收费停车',
                        'description' => '停车费用（免费停车/收费停车）',
                        'type' => 'string',
                        'required' => true,
                        'example' => '免费停车',
                        'enum' => [
                            '免费停车',
                            '收费停车',
                        ],
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'headers' => [],
                    'schema' => [
                        'title' => 'Result<Boolean>',
                        'description' => 'Result<Boolean>',
                        'type' => 'object',
                        'properties' => [
                            'StatusCode' => [
                                'title' => '调用返回码，除约定的SUCCESS_CODE外，其余由服务提供者自定义',
                                'description' => '调用返回码，除约定的SUCCESS_CODE外，其余由服务提供者自定义',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'Result' => [
                                'title' => '服务的实际返回结果',
                                'description' => '服务的实际返回结果',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'Message' => [
                                'title' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                                'description' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                            'RequestId' => [
                                'description' => '请求id',
                                'type' => 'string',
                                'example' => '0EC7***726E'."\n",
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidParameter',
                        'errorMessage' => 'The request parameter is invalid',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'ServerError',
                        'errorMessage' => 'internal server error',
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"StatusCode\\": 200,\\n  \\"Result\\": true,\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"0EC7***726E\\\\n\\"\\n}","type":"json"}]',
            'title' => '修改基础信息问答',
        ],
        'ListServiceQA' => [
            'summary' => '通用问答模块下的查询服务设施问答列表功能。',
            'path' => '/v1.0/ip/listServiceQA',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'https',
                'http',
            ],
            'security' => [
                [
                    'AliGenie_Auth_SPI' => [],
                ],
            ],
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'HotelId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '酒店id',
                        'description' => '酒店id',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'a7***83',
                    ],
                ],
                [
                    'name' => 'Active',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '是否激活',
                        'description' => '是否启用（true：开启、false：关闭）',
                        'type' => 'boolean',
                        'required' => false,
                        'enumValueTitles' => [
                            'true' => '开启',
                            'false' => '关闭',
                        ],
                        'example' => 'true',
                    ],
                ],
                [
                    'name' => 'Keyword',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '关键字（用于模糊查询问题、例句、回答）',
                        'type' => 'string',
                        'required' => false,
                        'example' => '***',
                    ],
                ],
                [
                    'name' => 'Page',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'description' => '分页参数',
                        'type' => 'object',
                        'properties' => [
                            'PageNumber' => [
                                'description' => '页码',
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                                'example' => '1',
                            ],
                            'PageSize' => [
                                'description' => '每页多少条',
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                                'example' => '10',
                            ],
                        ],
                        'required' => false,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'headers' => [],
                    'schema' => [
                        'title' => 'PageResult<List<IntentionQAResponse>>',
                        'description' => 'PageResult<List<IntentionQAResponse>>',
                        'type' => 'object',
                        'properties' => [
                            'Page' => [
                                'title' => '翻页参数',
                                'description' => '翻页参数',
                                'type' => 'object',
                                'properties' => [
                                    'PageNumber' => [
                                        'title' => '页码',
                                        'description' => '页码',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '1',
                                    ],
                                    'PageSize' => [
                                        'title' => '每页size大小',
                                        'description' => '每页size大小',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '10',
                                    ],
                                    'Total' => [
                                        'description' => '共多少条数据',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '12',
                                    ],
                                ],
                            ],
                            'StatusCode' => [
                                'title' => '调用返回码，除约定的SUCCESS_CODE外，其余由服务提供者自定义',
                                'description' => '调用返回码，除约定的SUCCESS_CODE外，其余由服务提供者自定义',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'Result' => [
                                'title' => '服务的实际返回结果',
                                'description' => '服务的实际返回结果',
                                'type' => 'array',
                                'items' => [
                                    'description' => '返回结果',
                                    'type' => 'object',
                                    'properties' => [
                                        'ServiceQAId' => [
                                            'title' => '通用问答信息',
                                            'description' => '服务设施问答id',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1',
                                        ],
                                        'Question' => [
                                            'title' => '问题',
                                            'description' => '问题',
                                            'type' => 'string',
                                            'example' => '测试文本'."\n",
                                        ],
                                        'Answer' => [
                                            'title' => '答案',
                                            'description' => '回答',
                                            'type' => 'string',
                                            'example' => '***',
                                        ],
                                        'GmtModified' => [
                                            'title' => '更新时间',
                                            'description' => '更新时间',
                                            'type' => 'string',
                                            'example' => '2022-07-27 14:06:27'."\n",
                                        ],
                                        'Active' => [
                                            'title' => '是否启用',
                                            'description' => '是否启用（true：开启、false：关闭）',
                                            'type' => 'boolean',
                                            'example' => 'true',
                                        ],
                                        'Templates' => [
                                            'title' => '例句列表',
                                            'description' => '例句列表',
                                            'type' => 'string',
                                            'example' => '酒店有提供送餐服务吗;酒店能送餐吗;酒店送餐怎么收费'."\n",
                                        ],
                                    ],
                                ],
                            ],
                            'Message' => [
                                'title' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                                'description' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                            'RequestId' => [
                                'description' => '请求id',
                                'type' => 'string',
                                'example' => '0EC7***726E',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidParameter',
                        'errorMessage' => 'The request parameter is invalid',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'ServerError',
                        'errorMessage' => 'internal server error',
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Page\\": {\\n    \\"PageNumber\\": 1,\\n    \\"PageSize\\": 10,\\n    \\"Total\\": 12\\n  },\\n  \\"StatusCode\\": 200,\\n  \\"Result\\": [\\n    {\\n      \\"ServiceQAId\\": 1,\\n      \\"Question\\": \\"测试文本\\\\n\\",\\n      \\"Answer\\": \\"***\\",\\n      \\"GmtModified\\": \\"2022-07-27 14:06:27\\\\n\\",\\n      \\"Active\\": true,\\n      \\"Templates\\": \\"酒店有提供送餐服务吗;酒店能送餐吗;酒店送餐怎么收费\\\\n\\"\\n    }\\n  ],\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"0EC7***726E\\"\\n}","type":"json"}]',
            'title' => '查询服务设施问答列表',
        ],
        'UpdateServiceQA' => [
            'summary' => '通用问答模块下的修改服务设施问答功能。',
            'path' => '/v1.0/ip/updateServiceQA',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'https',
                'http',
            ],
            'security' => [
                [
                    'AliGenie_Auth_SPI' => [],
                ],
            ],
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'HotelId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '酒店id',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'af7***536',
                    ],
                ],
                [
                    'name' => 'ServiceQAId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '通用问答信息',
                        'description' => '服务设施问答id',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'Answer',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '答案',
                        'description' => '回答',
                        'type' => 'string',
                        'required' => false,
                        'example' => '测试',
                    ],
                ],
                [
                    'name' => 'isActive',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '是否启用',
                        'description' => '是否启用（true：开启、false：关闭）',
                        'type' => 'boolean',
                        'required' => false,
                        'enumValueTitles' => [
                            'true' => '开启',
                            'false' => '关闭',
                        ],
                        'example' => 'true',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'headers' => [],
                    'schema' => [
                        'title' => 'Result<Boolean>',
                        'description' => 'Result<Boolean>',
                        'type' => 'object',
                        'properties' => [
                            'StatusCode' => [
                                'title' => '调用返回码，除约定的SUCCESS_CODE外，其余由服务提供者自定义',
                                'description' => '调用返回码，除约定的SUCCESS_CODE外，其余由服务提供者自定义',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'Result' => [
                                'title' => '服务的实际返回结果',
                                'description' => '服务的实际返回结果',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'Message' => [
                                'title' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                                'description' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                            'RequestId' => [
                                'description' => '请求id',
                                'type' => 'string',
                                'example' => '73C67***6FA'."\n",
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidParameter',
                        'errorMessage' => 'The request parameter is invalid',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'ServerError',
                        'errorMessage' => 'internal server error',
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"StatusCode\\": 200,\\n  \\"Result\\": true,\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"73C67***6FA\\\\n\\"\\n}","type":"json"}]',
            'title' => '修改服务设施问答',
        ],
        'AddCartoon' => [
            'summary' => '增加或者编辑动画',
            'path' => '/v1.0/ip/addCartoon',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'https',
                'http',
            ],
            'security' => [
                [
                    'AliGenie_Auth_SPI' => [],
                ],
            ],
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'operationType' => 'write',
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'HotelId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '酒店id',
                        'description' => '酒店id',
                        'type' => 'string',
                        'required' => true,
                        'example' => '520a0***eb',
                    ],
                ],
                [
                    'name' => 'StartVideoUrl',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '开机动画url',
                        'description' => '开机动画url',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'https://***.mp4',
                    ],
                ],
                [
                    'name' => 'StartVideoMd5',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '开机动画md5',
                        'description' => '开机动画md5',
                        'type' => 'string',
                        'required' => true,
                        'example' => '40c804***697',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Result<Boolean>',
                        'description' => 'Result<Boolean>',
                        'type' => 'object',
                        'properties' => [
                            'StatusCode' => [
                                'title' => '调用返回码，除约定的SUCCESS_CODE外，其余由服务提供者自定义',
                                'description' => '调用返回码，除约定的SUCCESS_CODE外，其余由服务提供者自定义',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'Result' => [
                                'title' => '服务的实际返回结果',
                                'description' => '服务的实际返回结果',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'Message' => [
                                'title' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                                'description' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                            'RequestId' => [
                                'description' => '链路请求id',
                                'type' => 'string',
                                'example' => '0EC7*726E'."\n",
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidParameter',
                        'errorMessage' => 'The request parameter is invalid',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'ServerError',
                        'errorMessage' => 'internal server error',
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"StatusCode\\": 200,\\n  \\"Result\\": true,\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"0EC7*726E\\\\n\\"\\n}","type":"json"}]',
            'title' => '新增或者编辑动画',
            'description' => '请上传MP4格式视频⽂件编解码器：AAC，H.264，分辨率：1280*800,视频时⻓不超过10s，⽂件⼤⼩不超过10MB。上传开机动画文件，完成后下次开机重启两次后生效。',
        ],
        'GetCartoon' => [
            'summary' => '查询已设置的动画',
            'path' => '/v1.0/ip/getCartoon',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'https',
                'http',
            ],
            'security' => [
                [
                    'AliGenie_Auth_SPI' => [],
                ],
            ],
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'HotelId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '酒店id',
                        'description' => '酒店id',
                        'type' => 'string',
                        'required' => true,
                        'example' => '520a0c0***5eb',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Result<HotelCartoonResponse>',
                        'description' => 'Result<HotelCartoonResponse>',
                        'type' => 'object',
                        'properties' => [
                            'StatusCode' => [
                                'title' => '调用返回码，除约定的SUCCESS_CODE外，其余由服务提供者自定义',
                                'description' => '调用返回码，除约定的SUCCESS_CODE外，其余由服务提供者自定义',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'Result' => [
                                'title' => '服务的实际返回结果',
                                'description' => '服务的实际返回结果',
                                'type' => 'object',
                                'properties' => [
                                    'StartVideoUrl' => [
                                        'title' => '开机启动视频',
                                        'description' => '开机启动视频',
                                        'type' => 'string',
                                        'example' => '40c8***97',
                                    ],
                                    'StartVideoMd5' => [
                                        'title' => '开机视频md5',
                                        'description' => '开机视频md5',
                                        'type' => 'string',
                                        'example' => 'https://ai***.mp4',
                                    ],
                                ],
                            ],
                            'Message' => [
                                'title' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                                'description' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                            'RequestId' => [
                                'description' => '请求requestId',
                                'type' => 'string',
                                'example' => '0EC7*726E'."\n",
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidParameter',
                        'errorMessage' => 'The request parameter is invalid',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'ServerError',
                        'errorMessage' => 'internal server error',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"StatusCode\\": 200,\\n  \\"Result\\": {\\n    \\"StartVideoUrl\\": \\"40c8***97\\",\\n    \\"StartVideoMd5\\": \\"https://ai***.mp4\\"\\n  },\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"0EC7*726E\\\\n\\"\\n}","type":"json"}]',
            'title' => '查询已设置的动画',
            'description' => '查询已设置的动画',
        ],
        'DeleteCartoon' => [
            'summary' => '删除已设置动画',
            'path' => '/v1.0/ip/deleteCartoon',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'https',
                'http',
            ],
            'security' => [
                [
                    'AliGenie_Auth_SPI' => [],
                ],
            ],
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'HotelId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => ' 酒店id',
                        'description' => ' 酒店id',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'a7***83'."\n",
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Result<Boolean>',
                        'description' => 'Result<Boolean>',
                        'type' => 'object',
                        'properties' => [
                            'StatusCode' => [
                                'title' => '调用返回码，除约定的SUCCESS_CODE外，其余由服务提供者自定义',
                                'description' => '调用返回码，除约定的SUCCESS_CODE外，其余由服务提供者自定义',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'Result' => [
                                'title' => '服务的实际返回结果',
                                'description' => '服务的实际返回结果',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'Message' => [
                                'title' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                                'description' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                            'RequestId' => [
                                'description' => '链路请求id',
                                'type' => 'string',
                                'example' => '0EC7*726E'."\n",
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidParameter',
                        'errorMessage' => 'The request parameter is invalid',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'ServerError',
                        'errorMessage' => 'internal server error',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"StatusCode\\": 200,\\n  \\"Result\\": true,\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"0EC7*726E\\\\n\\"\\n}","type":"json"}]',
            'title' => '删除已设置动画',
            'description' => '删除已设置动画',
        ],
        'GetHotelScreenSaverStyle' => [
            'summary' => '查询酒店屏保背景的可选样式',
            'path' => '/v1.0/ip/getHotelScreenSaverStyle',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'https',
                'http',
            ],
            'security' => [
                [
                    'AliGenie_Auth_SPI' => [],
                ],
            ],
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'HotelId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '酒店id',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'af7***536'."\n",
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Result<List<HotelScreenSaverStyle>>',
                        'description' => 'Result<List<HotelScreenSaverStyle>>',
                        'type' => 'object',
                        'properties' => [
                            'StatusCode' => [
                                'title' => '调用返回码，除约定的SUCCESS_CODE外，其余由服务提供者自定义',
                                'description' => '调用返回码，除约定的SUCCESS_CODE外，其余由服务提供者自定义',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'Result' => [
                                'title' => '服务的实际返回结果',
                                'description' => '服务的实际返回结果',
                                'type' => 'array',
                                'items' => [
                                    'description' => '服务的实际返回结果',
                                    'type' => 'object',
                                    'properties' => [
                                        'Code' => [
                                            'title' => '编码code',
                                            'description' => '编码code',
                                            'type' => 'string',
                                            'example' => 'common-weather',
                                        ],
                                        'CnName' => [
                                            'title' => '中文名称',
                                            'description' => '中文名称',
                                            'type' => 'string',
                                            'example' => '天气',
                                        ],
                                        'EnName' => [
                                            'title' => '英文名称',
                                            'description' => '英文名称',
                                            'type' => 'string',
                                            'example' => 'common-weather',
                                        ],
                                        'PicUrl' => [
                                            'title' => '图片链接',
                                            'description' => '图片链接',
                                            'type' => 'string',
                                            'example' => 'https://img.***.png',
                                        ],
                                    ],
                                ],
                            ],
                            'Message' => [
                                'title' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                                'description' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                            'RequestId' => [
                                'title' => '请求id',
                                'description' => '请求id',
                                'type' => 'string',
                                'example' => '73C67**6FA'."\n",
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidParameter',
                        'errorMessage' => 'The request parameter is invalid',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'ServerError',
                        'errorMessage' => 'internal server error',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"StatusCode\\": 200,\\n  \\"Result\\": [\\n    {\\n      \\"Code\\": \\"common-weather\\",\\n      \\"CnName\\": \\"天气\\",\\n      \\"EnName\\": \\"common-weather\\",\\n      \\"PicUrl\\": \\"https://img.***.png\\"\\n    }\\n  ],\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"73C67**6FA\\\\n\\"\\n}","type":"json"}]',
            'title' => '查询酒店屏保背景的可选样式',
            'description' => '新增屏保的时候有个screenSaverStyle字段，要用这接口里查出来的code作为基本样式',
        ],
        'AddOrUpdateHotelSetting' => [
            'summary' => '新增或者更新酒店定制',
            'path' => '/v1.0/ip/addOrUpdateHotelSetting',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'https',
                'http',
            ],
            'security' => [
                [
                    'AliGenie_Auth_SPI' => [],
                ],
            ],
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'HotelId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '酒店id',
                        'description' => '酒店id',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'a7a3***013',
                    ],
                ],
                [
                    'name' => 'SettingType',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '设置的类型，带屏展示模式（SCENE），'."\n"
                            .'带屏屏保配置（SCREENSAVER），'."\n"
                            .'带屏首页背景图（HOMEPAGE_PIC）'."\n"
                            .'带屏酒店通知（NOTICE），'."\n"
                            .'夜间模式（NIGHT_MODE）',
                        'description' => '设置的类型，带屏展示模式（SCENE），'."\n"
                            .'带屏屏保配置（SCREENSAVER），'."\n"
                            .'带屏首页背景图（HOMEPAGE_PIC）'."\n"
                            .'带屏酒店通知（NOTICE），'."\n"
                            .'夜间模式（NIGHT_MODE）',
                        'type' => 'string',
                        'required' => false,
                        'enumValueTitles' => [
                            'NOTICE' => '带屏酒店通知',
                            'NIGHT_MODE' => '夜间模式',
                            'SCREENSAVER' => '带屏屏保配置',
                            'SCENE' => '带屏展示模式',
                            'HOMEPAGE_PIC' => '首页背景图',
                        ],
                        'example' => 'SCREENSAVER',
                    ],
                ],
                [
                    'name' => 'Value',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '配置值',
                        'description' => '首页背景图/酒店通知',
                        'type' => 'string',
                        'required' => false,
                        'example' => '首页背景图-https://****.jpg    酒店通知-欢迎入住**酒店～～',
                    ],
                ],
                [
                    'name' => 'HotelScreenSaver',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'title' => '屏保',
                        'description' => '屏保',
                        'type' => 'object',
                        'properties' => [
                            'ScreenSaverStyle' => [
                                'title' => '屏保样式code',
                                'description' => '屏保样式code',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'common-weather',
                            ],
                            'ScreenSaverPicUrl' => [
                                'title' => '屏保图片',
                                'description' => '屏保图片',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'https://a****jpg',
                            ],
                        ],
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'HotelDeviceModeList',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'title' => '模式',
                        'description' => '模式',
                        'type' => 'array',
                        'items' => [
                            'description' => '参数值',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'sleep',
                        ],
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'NightMode',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'title' => '夜间模式',
                        'description' => '夜间模式',
                        'type' => 'object',
                        'properties' => [
                            'Enable' => [
                                'title' => '启用、禁用',
                                'description' => '启用、禁用',
                                'type' => 'boolean',
                                'required' => false,
                                'example' => 'true',
                            ],
                            'Start' => [
                                'title' => '开始时间',
                                'description' => '开始时间',
                                'type' => 'string',
                                'required' => false,
                                'example' => '7:00',
                            ],
                            'End' => [
                                'title' => '结束时间',
                                'description' => '结束时间',
                                'type' => 'string',
                                'required' => false,
                                'example' => '22:00',
                            ],
                            'DefaultVolume' => [
                                'title' => '夜间模式下的默认音量',
                                'type' => 'string',
                                'required' => false,
                            ],
                            'DefaultBright' => [
                                'title' => '夜间模式下的默认亮度',
                                'type' => 'string',
                                'required' => false,
                            ],
                            'StandbyAction' => [
                                'title' => '休眠时执行，息屏(screenoff)、屏保(screensaver)',
                                'description' => '休眠时执行，息屏(screenoff)、屏保(screensaver)',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'screenoff',
                            ],
                        ],
                        'required' => false,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'headers' => [],
                    'schema' => [
                        'title' => 'Result<Boolean>',
                        'description' => 'Result<Boolean>',
                        'type' => 'object',
                        'properties' => [
                            'StatusCode' => [
                                'title' => '调用返回码，除约定的SUCCESS_CODE外，其余由服务提供者自定义',
                                'description' => '调用返回码，除约定的SUCCESS_CODE外，其余由服务提供者自定义',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'Result' => [
                                'title' => '服务的实际返回结果',
                                'description' => '服务的实际返回结果',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'Message' => [
                                'title' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                                'description' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                            'RequestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '0EC7*726E',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidParameter',
                        'errorMessage' => 'The request parameter is invalid',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'ServerError',
                        'errorMessage' => 'internal server error',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"StatusCode\\": 200,\\n  \\"Result\\": true,\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"0EC7*726E\\"\\n}","type":"json"}]',
            'title' => '新增或者更新酒店定制',
            'description' => '> 根据入参settingType不同，可以新增或者修改不同的酒店定制配置'."\n"
                .'> - 首页背景-settingType="HOMEPAGE_PIC"'."\n"
                .'> - 屏保背景-settingType="SCREENSAVER"'."\n"
                .'> - 带屏展示模式-settingType="SCENE"'."\n"
                .'> - 带屏酒店通知-settingType="NOTICE"'."\n"
                .'> - 夜间模式-settingType="NIGHT_MODE"',
        ],
        'GetHotelSetting' => [
            'summary' => '查询酒店定制（包含屏保背景、首页背景等等）',
            'path' => '/v1.0/ip/getHotelSetting',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'https',
                'http',
            ],
            'security' => [
                [
                    'AliGenie_Auth_SPI' => [],
                ],
            ],
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'HotelId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '酒店id',
                        'description' => '酒店id',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'af7***536'."\n",
                    ],
                ],
                [
                    'name' => 'SettingType',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '设置的类型，带屏展示模式（SCENE），'."\n"
                            .'带屏屏保配置（SCREENSAVER），'."\n"
                            .'带屏首页背景图（HOMEPAGE_PIC）'."\n"
                            .'带屏酒店通知（NOTICE），'."\n"
                            .'夜间模式（NIGHT_MODE）',
                        'description' => '设置的类型，带屏展示模式（SCENE），'."\n"
                            .'带屏屏保配置（SCREENSAVER），'."\n"
                            .'带屏首页背景图（HOMEPAGE_PIC）'."\n"
                            .'带屏酒店通知（NOTICE），'."\n"
                            .'夜间模式（NIGHT_MODE）',
                        'type' => 'string',
                        'required' => false,
                        'enumValueTitles' => [
                            'NOTICE' => '带屏酒店通知',
                            'NIGHT_MODE' => '夜间模式',
                            'SCREENSAVER' => '屏保背景',
                            'SCENE' => '带屏展示模式',
                            'HOMEPAGE_PIC' => '首页背景图',
                        ],
                        'example' => 'SCREENSAVER',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'headers' => [],
                    'schema' => [
                        'title' => 'Result<HotelSettingInfo>',
                        'description' => 'Result<HotelSettingInfo>',
                        'type' => 'object',
                        'properties' => [
                            'StatusCode' => [
                                'title' => '调用返回码，除约定的SUCCESS_CODE外，其余由服务提供者自定义',
                                'description' => '调用返回码，除约定的SUCCESS_CODE外，其余由服务提供者自定义',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'Result' => [
                                'title' => '服务的实际返回结果',
                                'description' => '服务的实际返回结果',
                                'type' => 'object',
                                'properties' => [
                                    'HotelId' => [
                                        'title' => '酒店id',
                                        'description' => '酒店id',
                                        'type' => 'string',
                                        'example' => 'af7***536',
                                    ],
                                    'SettingType' => [
                                        'title' => '设置类型',
                                        'description' => '设置类型',
                                        'type' => 'string',
                                        'enumValueTitles' => [
                                            'SCREENSAVER' => '屏保',
                                            'HOMEPAGE_PIC' => '首页背景图',
                                        ],
                                        'example' => 'SCREENSAVER',
                                    ],
                                    'Value' => [
                                        'title' => '对应的值',
                                        'description' => '首页背景图/酒店通知',
                                        'type' => 'string',
                                        'example' => '首页背景图-https://****.jpg    酒店通知-欢迎入住**酒店～～',
                                    ],
                                    'DeleteToken' => [
                                        'title' => '是否删除',
                                        'description' => '是否删除',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '0',
                                    ],
                                    'ExtInfo' => [
                                        'title' => '扩展信息',
                                        'description' => '扩展信息',
                                        'type' => 'string',
                                        'example' => '{}',
                                    ],
                                    'HotelScreenSaver' => [
                                        'title' => '屏保对象',
                                        'description' => '屏保对象',
                                        'type' => 'object',
                                        'properties' => [
                                            'ScreenSaverStyle' => [
                                                'title' => '屏保样式code',
                                                'description' => '屏保样式code',
                                                'type' => 'string',
                                                'example' => 'common-weather',
                                            ],
                                            'ScreenSaverPicUrl' => [
                                                'title' => '屏保图片',
                                                'description' => '屏保图片',
                                                'type' => 'string',
                                                'example' => 'https://a***png',
                                            ],
                                        ],
                                    ],
                                    'HotelDeviceModeList' => [
                                        'title' => '设备模式',
                                        'description' => '设备模式',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '场景值',
                                            'type' => 'string',
                                            'example' => 'sweet',
                                        ],
                                    ],
                                    'NightMode' => [
                                        'title' => '夜间模式',
                                        'description' => '夜间模式',
                                        'type' => 'object',
                                        'properties' => [
                                            'Enable' => [
                                                'title' => '启用、禁用',
                                                'description' => '启用、禁用',
                                                'type' => 'boolean',
                                                'example' => 'true',
                                            ],
                                            'Start' => [
                                                'title' => '开始时间',
                                                'description' => '开始时间',
                                                'type' => 'string',
                                                'example' => '07:00',
                                            ],
                                            'End' => [
                                                'title' => '结束时间',
                                                'description' => '结束时间',
                                                'type' => 'string',
                                                'example' => '22:00',
                                            ],
                                            'DefaultVolume' => [
                                                'title' => '夜间模式下的默认音量',
                                                'description' => '夜间模式下的默认音量',
                                                'type' => 'string',
                                            ],
                                            'DefaultBright' => [
                                                'title' => '夜间模式下的默认亮度',
                                                'description' => '夜间模式下的默认亮度',
                                                'type' => 'string',
                                            ],
                                            'StandbyAction' => [
                                                'title' => '休眠时执行，息屏(screenoff)、屏保(screensaver)',
                                                'description' => '休眠时执行，息屏(screenoff)、屏保(screensaver)',
                                                'type' => 'string',
                                                'example' => 'screenoff',
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                            'Message' => [
                                'title' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                                'description' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'F7E2****B7C94',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidParameter',
                        'errorMessage' => 'The request parameter is invalid',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'ServerError',
                        'errorMessage' => 'internal server error',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"StatusCode\\": 200,\\n  \\"Result\\": {\\n    \\"HotelId\\": \\"af7***536\\",\\n    \\"SettingType\\": \\"SCREENSAVER\\",\\n    \\"Value\\": \\"首页背景图-https://****.jpg    酒店通知-欢迎入住**酒店～～\\",\\n    \\"DeleteToken\\": 0,\\n    \\"ExtInfo\\": \\"{}\\",\\n    \\"HotelScreenSaver\\": {\\n      \\"ScreenSaverStyle\\": \\"common-weather\\",\\n      \\"ScreenSaverPicUrl\\": \\"https://a***png\\"\\n    },\\n    \\"HotelDeviceModeList\\": [\\n      \\"sweet\\"\\n    ],\\n    \\"NightMode\\": {\\n      \\"Enable\\": true,\\n      \\"Start\\": \\"07:00\\",\\n      \\"End\\": \\"22:00\\",\\n      \\"DefaultVolume\\": \\"\\",\\n      \\"DefaultBright\\": \\"\\",\\n      \\"StandbyAction\\": \\"screenoff\\"\\n    }\\n  },\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"F7E2****B7C94\\"\\n}","type":"json"}]',
            'title' => '查询酒店定制',
            'description' => '> 根据入参settingType不同，可以查询不同的酒店定制配置'."\n"
                .'> - 首页背景-settingType="HOMEPAGE_PIC"'."\n"
                .'> - 屏保背景-settingType="SCREENSAVER"'."\n"
                .'> - 带屏展示模式-settingType="SCENE"'."\n"
                .'> - 带屏酒店通知-settingType="NOTICE"'."\n"
                .'> - 夜间模式-settingType="NIGHT_MODE"',
        ],
        'DeleteHotelSetting' => [
            'summary' => '删除酒店定制 包含首页背景、屏保背景等等',
            'path' => '/v1.0/ip/deleteHotelSetting',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'https',
                'http',
            ],
            'security' => [
                [
                    'AliGenie_Auth_SPI' => [],
                ],
            ],
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'HotelId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '酒店id',
                        'description' => '酒店id',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'af7***536',
                    ],
                ],
                [
                    'name' => 'SettingType',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '设置类型',
                        'description' => '设置的类型，带屏展示模式（SCENE），'."\n"
                            .'带屏屏保配置（SCREENSAVER）'."\n"
                            .'带屏首页背景图（HOMEPAGE_PIC）'."\n"
                            .'带屏酒店通知（NOTICE）'."\n"
                            .'夜间模式（NIGHT_MODE）',
                        'type' => 'string',
                        'required' => false,
                        'enumValueTitles' => [
                            'NOTICE' => '带屏酒店通知',
                            'NIGHT_MODE' => '夜间模式',
                            'SCREENSAVER' => '屏保',
                            'SCENE' => '带屏展示模式',
                            'HOMEPAGE_PIC' => '首页背景图',
                        ],
                        'example' => 'SCREENSAVER',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Result<Boolean>',
                        'description' => 'Result<Boolean>',
                        'type' => 'object',
                        'properties' => [
                            'StatusCode' => [
                                'title' => '调用返回码，除约定的SUCCESS_CODE外，其余由服务提供者自定义',
                                'description' => '调用返回码，除约定的SUCCESS_CODE外，其余由服务提供者自定义',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'Result' => [
                                'title' => '服务的实际返回结果',
                                'description' => '服务的实际返回结果',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'Message' => [
                                'title' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                                'description' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                            'RequestId' => [
                                'description' => '请求链路id',
                                'type' => 'string',
                                'example' => '73C67****BB3E6FA',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidParameter',
                        'errorMessage' => 'The request parameter is invalid',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'ServerError',
                        'errorMessage' => 'internal server error',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"StatusCode\\": 200,\\n  \\"Result\\": true,\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"73C67****BB3E6FA\\"\\n}","type":"json"}]',
            'title' => '删除酒店定制（屏保背景、首页背景等）',
            'description' => '> 根据入参settingType不同，可以删除不同的酒店定制配置'."\n"
                .'> - 如果是删除首页背景-settingType="HOMEPAGE_PIC"'."\n"
                .'> - 删除屏保背景-settingType="SCREENSAVER"'."\n"
                .'> - 带屏展示模式-settingType="SCENE"'."\n"
                .'> - 带屏酒店通知-settingType="NOTICE"'."\n"
                .'> - 夜间模式-settingType="NIGHT_MODE"',
        ],
        'AddOrUpdateWelcomeText' => [
            'summary' => '设置欢迎语配置',
            'path' => '/v1.0/ip/addOrUpdateWelcomeText',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'https',
                'http',
            ],
            'security' => [
                [
                    'AliGenie_Auth_SPI' => [],
                ],
            ],
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'operationType' => 'write',
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'HotelId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '酒店id',
                        'description' => '酒店id',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'af7***536',
                    ],
                ],
                [
                    'name' => 'WelcomeText',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '欢迎语文本，建议150字以内',
                        'description' => '欢迎语文本，150字以内',
                        'type' => 'string',
                        'required' => true,
                        'example' => '尊贵的客人，您好，欢迎入住，我是您的房间智能助理，我可以播放音乐，控制空调、灯光等，也能提供酒店的各种服务，回答酒店相关问题。只需要唤醒后，就能和我开始互动，我的更多能力，可以参考我旁边的立牌使用哦，祝您在本酒店度过一段愉快的入住时光。',
                    ],
                ],
                [
                    'name' => 'MusicUrl',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '背景音链接'."\n"
                            ."\n"
                            .'上传要求：'."\n"
                            .'1. 仅支持采样率16KHz、单声道 .wav格式的文件。（如果您的背景音不是wav格式，'."\n"
                            .'可使用 ffmpeg将其转为wav格式：ffmpeg -i 输入音频 -acodec pcm_s16le -ac 1 -ar 16000 目标.wav）'."\n"
                            .'2. 大小不超过2MB。'."\n"
                            .'3.合成时长超出背景音时长时，背景音将循环合成播放。',
                        'description' => '背景音链接'."\n"
                            ."\n"
                            .'上传要求：'."\n"
                            .'1. 仅支持采样率16KHz、单声道 .wav格式的文件。（如果您的背景音不是wav格式，'."\n"
                            .'可使用 ffmpeg将其转为wav格式：ffmpeg -i 输入音频 -acodec pcm_s16le -ac 1 -ar 16000 目标.wav）'."\n"
                            .'2. 大小不超过2MB。'."\n"
                            .'3.合成时长超出背景音时长时，背景音将循环合成播放。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'http://ailabsaicloudservice.alicdn.com/tmp/a.wav',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Result<Boolean>',
                        'description' => 'Result<Boolean>',
                        'type' => 'object',
                        'properties' => [
                            'StatusCode' => [
                                'title' => '调用返回码，除约定的SUCCESS_CODE外，其余由服务提供者自定义',
                                'description' => '调用返回码，200标识成功',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'Result' => [
                                'title' => '服务的实际返回结果',
                                'description' => '服务的实际返回结果，这里标识添加或更新是否成功',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'Message' => [
                                'title' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                                'description' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                            'Extentions' => [
                                'title' => '扩展字段',
                                'description' => '扩展字段',
                                'type' => 'object',
                                'additionalProperties' => [
                                    'type' => 'any',
                                    'description' => '	'."\n"
                                        .'扩展信息',
                                ],
                            ],
                            'RequestId' => [
                                'description' => '请求id。',
                                'type' => 'string',
                                'example' => '0EC7*726E',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidParameter',
                        'errorMessage' => 'The request parameter is invalid',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'ServerError',
                        'errorMessage' => 'internal server error',
                    ],
                ],
            ],
            'staticInfo' => [],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"StatusCode\\": 200,\\n  \\"Result\\": true,\\n  \\"Message\\": \\"success\\",\\n  \\"Extentions\\": {\\n    \\"key\\": \\"\\"\\n  },\\n  \\"RequestId\\": \\"0EC7*726E\\"\\n}","type":"json"}]',
            'title' => '设置欢迎语配置',
            'description' => '欢迎语配置，包含播报的tts文本以及背景音：'."\n"
                .'- 播报文本：可配置成”欢迎入住${hotel}“，带占位符的方式，在推送是带上参数映射表替换对应的占位符'."\n"
                .'- 背景音链接：'."\n"
                .'    - 1. 仅支持采样率16KHz、单声道 .wav格式的文件。（如果您的背景音不是wav格式，'."\n"
                .'可使用 ffmpeg将其转为wav格式：ffmpeg -i 输入音频 -acodec pcm_s16le -ac '."\n"
                .'    1 -ar 16000 目标.wav）'."\n"
                .'    - 2. 大小不超过2MB。'."\n"
                .'    - 3.合成时长超出背景音时长时，背景音将循环合成播放。',
        ],
        'GetWelcomeTextAndMusic' => [
            'summary' => '获取欢迎语配置',
            'path' => '/v1.0/ip/getWelcomeTextAndMusic',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'https',
                'http',
            ],
            'security' => [
                [
                    'AliGenie_Auth_SPI' => [],
                ],
            ],
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'HotelId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '酒店 id',
                        'description' => '酒店 id',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'a7a3***013',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Result<WelcomeResp>',
                        'description' => 'Result<WelcomeResp>',
                        'type' => 'object',
                        'properties' => [
                            'StatusCode' => [
                                'title' => '调用返回码，除约定的SUCCESS_CODE外，其余由服务提供者自定义',
                                'description' => '调用返回码，200标识成功',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'Result' => [
                                'title' => '服务的实际返回结果',
                                'description' => '服务的实际返回结果',
                                'type' => 'object',
                                'properties' => [
                                    'HotelId' => [
                                        'description' => '酒店id',
                                        'type' => 'string',
                                        'example' => 'a7***83',
                                    ],
                                    'Text' => [
                                        'description' => '欢迎语文本',
                                        'type' => 'string',
                                        'example' => '尊贵的客人，您好，欢迎入住，我是您的房间智能助理，我可以播放音乐，控制空调、灯光等，也能提供酒店的各种服务，回答酒店相关问题。只需要唤醒后，就能和我开始互动，我的更多能力，可以参考我旁边的立牌使用哦，祝您在本酒店度过一段愉快的入住时光。',
                                    ],
                                    'MusicUrl' => [
                                        'description' => '背景音链接',
                                        'type' => 'string',
                                        'example' => 'http://ailabsaicloudservice.alicdn.com/tmp/a.wav',
                                    ],
                                ],
                            ],
                            'Message' => [
                                'title' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                                'description' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                            'Extentions' => [
                                'title' => '扩展字段',
                                'description' => '扩展字段',
                                'type' => 'object',
                                'additionalProperties' => [
                                    'type' => 'any',
                                    'description' => '扩展信息',
                                ],
                            ],
                            'RequestId' => [
                                'description' => '请求id',
                                'type' => 'string',
                                'example' => '0EC7*726E',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidParameter',
                        'errorMessage' => 'The request parameter is invalid',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'ServerError',
                        'errorMessage' => 'internal server error',
                    ],
                ],
            ],
            'staticInfo' => [],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"StatusCode\\": 200,\\n  \\"Result\\": {\\n    \\"HotelId\\": \\"a7***83\\",\\n    \\"Text\\": \\"尊贵的客人，您好，欢迎入住，我是您的房间智能助理，我可以播放音乐，控制空调、灯光等，也能提供酒店的各种服务，回答酒店相关问题。只需要唤醒后，就能和我开始互动，我的更多能力，可以参考我旁边的立牌使用哦，祝您在本酒店度过一段愉快的入住时光。\\",\\n    \\"MusicUrl\\": \\"http://ailabsaicloudservice.alicdn.com/tmp/a.wav\\"\\n  },\\n  \\"Message\\": \\"success\\",\\n  \\"Extentions\\": {\\n    \\"key\\": \\"\\"\\n  },\\n  \\"RequestId\\": \\"0EC7*726E\\"\\n}","type":"json"}]',
            'title' => '获取欢迎语配置',
            'description' => '获取欢迎语配置',
        ],
        'ResetWelcomeTextAndMusic' => [
            'summary' => '重置欢迎语配置',
            'path' => '/v1.0/ip/resetWelcomeTextAndMusic',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'https',
                'http',
            ],
            'security' => [
                [
                    'AliGenie_Auth_SPI' => [],
                ],
            ],
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'operationType' => 'write',
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'HotelId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '酒店id',
                        'description' => '酒店id',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'af7***536',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Result<Boolean>',
                        'description' => 'Result<Boolean>',
                        'type' => 'object',
                        'properties' => [
                            'StatusCode' => [
                                'title' => '调用返回码，除约定的SUCCESS_CODE外，其余由服务提供者自定义',
                                'description' => '调用返回码，200标识成功',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'Result' => [
                                'title' => '服务的实际返回结果',
                                'description' => '服务的实际返回结果',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'Message' => [
                                'title' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                                'description' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                            'Extentions' => [
                                'title' => '扩展字段',
                                'description' => '扩展字段',
                                'type' => 'object',
                                'additionalProperties' => [
                                    'type' => 'any',
                                    'description' => '扩展信息',
                                    'example' => ' ',
                                ],
                            ],
                            'RequestId' => [
                                'description' => '请求id',
                                'type' => 'string',
                                'example' => '0EC7*726E',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidParameter',
                        'errorMessage' => 'The request parameter is invalid',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'ServerError',
                        'errorMessage' => 'internal server error',
                    ],
                ],
            ],
            'staticInfo' => [],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"StatusCode\\": 200,\\n  \\"Result\\": true,\\n  \\"Message\\": \\"success\\",\\n  \\"Extentions\\": {\\n    \\"key\\": \\" \\"\\n  },\\n  \\"RequestId\\": \\"0EC7*726E\\"\\n}","type":"json"}]',
            'title' => '重置欢迎语配置',
            'description' => '重置欢迎语配置到默认的配置：'."\n"
                .'- 欢迎语文本：尊贵的客人，您好，欢迎入住，我是您的房间智能助理，我可以播放音乐，控制空调、灯光等，也能提供酒店的各种服务，回答酒店相关问题。只需要唤醒后，就能和我开始互动，我的更多能力，可以参考我旁边的立牌使用哦，祝您在本酒店度过一段愉快的入住时光。'."\n"
                .'- 背景音链接：http://ailabsaicloudservice.alicdn.com/tmp/a.wav',
        ],
        'PushWelcomeTextAndMusic' => [
            'summary' => '推送欢迎语播报',
            'path' => '/v1.0/ip/pushWelcomeTextAndMusic',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'https',
                'http',
            ],
            'security' => [
                [
                    'AliGenie_Auth_SPI' => [],
                ],
            ],
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'operationType' => 'read',
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'HotelId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '酒店id',
                        'description' => '酒店id',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'af7***536',
                    ],
                ],
                [
                    'name' => 'RoomNo',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '房间号',
                        'description' => '房间号',
                        'type' => 'string',
                        'required' => true,
                        'example' => '1211',
                    ],
                ],
                [
                    'name' => 'TemplateVariable',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'title' => '参数映射表，例如欢迎语文本中的表达式：${hotelName} 可通过参数映射表的{"hotelName":"智慧酒店"}替换成“智慧酒店”',
                        'description' => '参数映射表，例如欢迎语文本中的表达式：${hotelName} 可通过参数映射表的{"hotelName":"智慧酒店"}替换成“智慧酒店”',
                        'type' => 'object',
                        'required' => false,
                        'additionalProperties' => [
                            'type' => 'string',
                            'description' => '映射参数，在欢迎语文本存在占位符时需要，例如hotelName',
                            'example' => 'hotelName',
                        ],
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Result<Boolean>',
                        'description' => 'Result<Boolean>',
                        'type' => 'object',
                        'properties' => [
                            'StatusCode' => [
                                'title' => '调用返回码，除约定的SUCCESS_CODE外，其余由服务提供者自定义',
                                'description' => '调用返回码，200标识为成功',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'Result' => [
                                'title' => '服务的实际返回结果',
                                'description' => '服务的实际返回结果',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'Message' => [
                                'title' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                                'description' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                            'Extentions' => [
                                'title' => '扩展字段',
                                'description' => '扩展字段',
                                'type' => 'object',
                                'additionalProperties' => [
                                    'type' => 'any',
                                    'description' => '扩展信息',
                                    'example' => ' ',
                                ],
                            ],
                            'RequestId' => [
                                'description' => '请求id。',
                                'type' => 'string',
                                'example' => 'F7E2****B7C94',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidParameter',
                        'errorMessage' => 'The request parameter is invalid',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'ServerError',
                        'errorMessage' => 'internal server error',
                    ],
                ],
            ],
            'staticInfo' => [],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"StatusCode\\": 200,\\n  \\"Result\\": true,\\n  \\"Message\\": \\"success\\",\\n  \\"Extentions\\": {\\n    \\"key\\": \\" \\"\\n  },\\n  \\"RequestId\\": \\"F7E2****B7C94\\"\\n}","type":"json"}]',
            'title' => '推送欢迎语播报',
            'description' => '推送欢迎语播报：'."\n"
                .'- 欢迎语文本：'."\n"
                .'    - 未配置欢迎语时会直接使用默认的：”尊贵的客人，您好，欢迎入住，我是您的房间智能助理，我可以播放音乐，控制空调、灯光等，也能提供酒店的各种服务，回答酒店相关问题。只需要唤醒后，就能和我开始互动，我的更多能力，可以参考我旁边的立牌使用哦，祝您在本酒店度过一段愉快的入住时光。“'."\n"
                .'    - 如欢迎语文本中的表达式：${hotelName} 可通过参数映射表的{"hotelName":"智慧酒店"}替换成“智慧酒店”'."\n"
                ."\n"
                .'- 背景音链接：未配置时会使用默认的：http://ailabsaicloudservice.alicdn.com/tmp/a.wav',
        ],
        'PushWelcome' => [
            'summary' => '直接推送欢迎语',
            'path' => '/v1.0/ip/pushWelcome',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'https',
                'http',
            ],
            'security' => [
                [
                    'AliGenie_Auth_SPI' => [],
                ],
            ],
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'HotelId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '酒店id',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'af7***536',
                    ],
                ],
                [
                    'name' => 'WelcomeText',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '配置信息 欢迎语文本',
                        'description' => '配置信息 欢迎语文本',
                        'type' => 'string',
                        'required' => true,
                        'example' => '尊贵的客人，您好，欢迎入住，我是您的房间智能助理，我可以播放音乐，控制空调、灯光等，也能提供酒店的各种服务，回答酒店相关问题。只需要唤醒后，就能和我开始互动，我的更多能力，可以参考我旁边的立牌使用哦，祝您在本酒店度过一段愉快的入住时光。',
                    ],
                ],
                [
                    'name' => 'WelcomeMusicUrl',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '配置信息 欢迎语音乐url',
                        'description' => '配置信息 欢迎语音乐url',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'http://ailabsaicloudservice.alicdn.com/tmp/a.wav',
                    ],
                ],
                [
                    'name' => 'RoomNo',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '欢迎语推送 房间号',
                        'description' => '欢迎语推送 房间号',
                        'type' => 'string',
                        'required' => true,
                        'example' => '1211',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Result<Boolean>',
                        'description' => 'Result<Boolean>',
                        'type' => 'object',
                        'properties' => [
                            'StatusCode' => [
                                'title' => '调用返回码，除约定的SUCCESS_CODE外，其余由服务提供者自定义',
                                'description' => '调用返回码，除约定的SUCCESS_CODE外，其余由服务提供者自定义',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'Result' => [
                                'title' => '服务的实际返回结果',
                                'description' => '服务的实际返回结果',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'Message' => [
                                'title' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                                'description' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                            'RequestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '0EC7*726E',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidParameter',
                        'errorMessage' => 'The request parameter is invalid',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'ServerError',
                        'errorMessage' => 'internal server error',
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"StatusCode\\": 200,\\n  \\"Result\\": true,\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"0EC7*726E\\"\\n}","type":"json"}]',
            'title' => '直接推送欢迎语到房间设备',
        ],
        'AddMessageTemplate' => [
            'summary' => '添加酒店消息模板',
            'path' => '/v1.0/ip/addMessageTemplate',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'https',
                'http',
            ],
            'security' => [
                [
                    'AliGenie_Auth_SPI' => [],
                ],
            ],
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'operationType' => 'write',
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'TemplateName',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '消息模板名称',
                        'description' => '消息模板名称',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '测试模板',
                    ],
                ],
                [
                    'name' => 'TemplateDetail',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '消息模板内容',
                        'description' => '消息模板内容',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '这是${hotel}的一个测试模板',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Result<Long>',
                        'description' => 'Result<Long>',
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'title' => '状态码',
                                'description' => '状态码',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'Result' => [
                                'title' => '消息模板ID',
                                'description' => '消息模板ID',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '11',
                            ],
                            'Message' => [
                                'title' => '附加信息',
                                'description' => '附加信息',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                            'RequestId' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidParameter',
                        'errorMessage' => 'The request parameter is invalid.',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": 200,\\n  \\"Result\\": 11,\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"\\"\\n}","type":"json"}]',
            'title' => '添加酒店消息模板',
        ],
        'ListHotelMessageTemplate' => [
            'summary' => '获取酒店消息模板',
            'path' => '/v1.0/ip/listHotelMessageTemplate',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'AliGenie_Auth_SPI' => [],
                ],
            ],
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Result<List<ListHotelMessageTemplate>>',
                        'description' => 'Result<List<ListHotelMessageTemplate>>',
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'title' => '状态码',
                                'description' => '状态码',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'Result' => [
                                'title' => '服务的实际返回结果',
                                'description' => '服务的实际返回结果',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'TemplateId' => [
                                            'title' => '消息模板ID',
                                            'description' => '消息模板ID',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1',
                                        ],
                                        'TemplateDetail' => [
                                            'title' => '消息模板内容',
                                            'description' => '消息模板内容',
                                            'type' => 'string',
                                            'example' => '这是${hotel}的一个测试模板',
                                        ],
                                        'TemplateName' => [
                                            'title' => '消息模板名称',
                                            'description' => '消息模板名称',
                                            'type' => 'string',
                                            'example' => '测试模板',
                                        ],
                                        'AuditMark' => [
                                            'title' => '审核备注',
                                            'description' => '审核备注',
                                            'type' => 'string',
                                            'example' => '不通过',
                                        ],
                                        'AuditStatus' => [
                                            'title' => '审核状态',
                                            'description' => '审核状态',
                                            'type' => 'string',
                                            'example' => 'COMMIT',
                                        ],
                                    ],
                                ],
                            ],
                            'Message' => [
                                'title' => '附加信息',
                                'description' => '附加信息',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                            'RequestId' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidParameter',
                        'errorMessage' => 'The request parameter is invalid',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": 200,\\n  \\"Result\\": [\\n    {\\n      \\"TemplateId\\": 1,\\n      \\"TemplateDetail\\": \\"这是${hotel}的一个测试模板\\",\\n      \\"TemplateName\\": \\"测试模板\\",\\n      \\"AuditMark\\": \\"不通过\\",\\n      \\"AuditStatus\\": \\"COMMIT\\"\\n    }\\n  ],\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"\\"\\n}","type":"json"}]',
            'title' => '获取酒店消息模板',
        ],
        'DeleteMessageTemplate' => [
            'summary' => '删除消息通知模板',
            'path' => '/v1.0/ip/deleteMessageTemplate',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'https',
                'http',
            ],
            'security' => [
                [
                    'AliGenie_Auth_SPI' => [],
                ],
            ],
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'TemplateId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '消息模板id',
                        'description' => '消息模板id',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '234',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Result<Boolean>',
                        'description' => 'Result<Boolean>',
                        'type' => 'object',
                        'properties' => [
                            'StatusCode' => [
                                'title' => '调用返回码，除约定的SUCCESS_CODE外，其余由服务提供者自定义',
                                'description' => '调用返回码，除约定的SUCCESS_CODE外，其余由服务提供者自定义',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'Result' => [
                                'title' => '服务的实际返回结果',
                                'description' => '服务的实际返回结果',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'Message' => [
                                'title' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                                'description' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                            'RequestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => 'F7E2****B7C94',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidParameter',
                        'errorMessage' => 'The request parameter is invalid',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'ServerError',
                        'errorMessage' => 'internal server error',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"StatusCode\\": 200,\\n  \\"Result\\": true,\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"F7E2****B7C94\\"\\n}","type":"json"}]',
            'title' => '删除通知消息模板',
        ],
        'UpdateMessageTemplate' => [
            'summary' => '修改编辑消息通知模板',
            'path' => '/v1.0/ip/updateMessageTemplate',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'https',
                'http',
            ],
            'security' => [
                [
                    'AliGenie_Auth_SPI' => [],
                ],
            ],
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'TemplateId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '模板主键id',
                        'description' => '模板主键id',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '123123',
                    ],
                ],
                [
                    'name' => 'TemplateName',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '模板名称',
                        'description' => '模板名称',
                        'type' => 'string',
                        'required' => false,
                        'example' => '测试一下',
                    ],
                ],
                [
                    'name' => 'TemplateDetail',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '模板详情',
                        'description' => '模板详情',
                        'type' => 'string',
                        'required' => false,
                        'example' => '模板的详情',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Result<Boolean>',
                        'description' => 'Result<Boolean>',
                        'type' => 'object',
                        'properties' => [
                            'StatusCode' => [
                                'title' => '调用返回码，除约定的SUCCESS_CODE外，其余由服务提供者自定义',
                                'description' => '调用返回码，除约定的SUCCESS_CODE外，其余由服务提供者自定义',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'Result' => [
                                'title' => '服务的实际返回结果',
                                'description' => '服务的实际返回结果',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'Message' => [
                                'title' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                                'description' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                            'RequestId' => [
                                'title' => '返回的请求id',
                                'description' => '返回的请求id',
                                'type' => 'string',
                                'example' => '43***881',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidParameter',
                        'errorMessage' => 'The request parameter is invalid',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'ServerError',
                        'errorMessage' => 'internal server error',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"StatusCode\\": 200,\\n  \\"Result\\": true,\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"43***881\\"\\n}","type":"json"}]',
            'title' => '修改消息通知模板',
            'description' => '> 修改消息通知模板'."\n"
                .'> - 需要查询出模板的templateId 根据templateId然后修改其他参数',
        ],
        'PushHotelMessage' => [
            'summary' => '推送酒店消息',
            'path' => '/v1.0/ip/pushHotelMessage',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'AliGenie_Auth_SPI' => [],
                ],
            ],
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'operationType' => 'write',
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'PushHotelMessageReq',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'title' => 'pushHotelMessageReq',
                        'description' => 'pushHotelMessageReq',
                        'type' => 'object',
                        'properties' => [
                            'TemplateId' => [
                                'title' => '消息模板ID',
                                'description' => '消息模板ID',
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => true,
                                'docRequired' => true,
                                'example' => '1',
                            ],
                            'HotelId' => [
                                'title' => '酒店ID',
                                'description' => '酒店ID',
                                'type' => 'string',
                                'required' => true,
                                'docRequired' => true,
                                'example' => 'e6dd44fd16084db8a60d69fd625d9f0f',
                            ],
                            'RoomNo' => [
                                'title' => '房间号',
                                'description' => '房间号',
                                'type' => 'string',
                                'required' => true,
                                'docRequired' => true,
                                'example' => '102',
                            ],
                            'ParamMap' => [
                                'title' => '消息内容参数Map',
                                'description' => '消息内容参数Map',
                                'type' => 'object',
                                'required' => false,
                                'additionalProperties' => [
                                    'type' => 'string',
                                    'example' => '{"hotel": "aaaa测试酒店"}',
                                ],
                            ],
                        ],
                        'required' => true,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Result<Boolean>',
                        'description' => 'Result<Boolean>',
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'title' => '状态码',
                                'description' => '状态码',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'Result' => [
                                'title' => '服务的实际返回结果',
                                'description' => '服务的实际返回结果',
                                'type' => 'boolean',
                            ],
                            'Message' => [
                                'title' => '附加信息',
                                'description' => '附加信息',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                            'RequestId' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidParameter',
                        'errorMessage' => 'The request parameter is invalid',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": 200,\\n  \\"Result\\": true,\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"\\"\\n}","type":"json"}]',
            'title' => '推送酒店自定义消息',
        ],
        'ListTickets' => [
            'summary' => '查询工单列表。',
            'path' => '/v1.0/ip/listTickets',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'https',
                'http',
            ],
            'security' => [
                [
                    'AliGenie_Auth_SPI' => [],
                ],
            ],
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'HotelId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '酒店id',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'af7***536',
                    ],
                ],
                [
                    'name' => 'Page',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'description' => '分页参数',
                        'type' => 'object',
                        'properties' => [
                            'PageNumber' => [
                                'title' => '页码',
                                'description' => '页码',
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                                'example' => '1',
                            ],
                            'PageSize' => [
                                'title' => '每页size大小',
                                'description' => '每页size大小',
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                                'example' => '10',
                            ],
                        ],
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'StartTime',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '开始时间，字符串格式：yyyy-mm-dd hh24:mm:ss。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '2022-04-08 09:39:00',
                    ],
                ],
                [
                    'name' => 'EndTime',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '结束时间，字符串格式：yyyy-mm-dd hh24:mm:ss。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '2022-09-14 14:23:00',
                    ],
                ],
                [
                    'name' => 'Status',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '状态：handled： 已处理, waiting：待处理, delayed：延迟处理',
                        'type' => 'string',
                        'required' => false,
                        'enumValueTitles' => [
                            'waiting' => '待处理',
                            'handled' => '已处理',
                            'delayed' => '延迟处理',
                        ],
                        'example' => 'waiting',
                    ],
                ],
                [
                    'name' => 'RoomNo',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '房间号',
                        'description' => '房间号',
                        'type' => 'string',
                        'required' => false,
                        'example' => '1211',
                    ],
                ],
                [
                    'name' => 'Type',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '类型',
                        'description' => '类型1：""（全部） 2：酒店服务（酒店服务） 3：酒店维修（酒店维修）',
                        'type' => 'string',
                        'required' => false,
                        'enumValueTitles' => [
                            '""' => '全部',
                            '酒店服务' => '酒店服务',
                            '酒店维修' => '酒店维修',
                        ],
                        'example' => '""',
                    ],
                ],
                [
                    'name' => 'IsNeedCallback',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '是否需要回电',
                        'description' => '是否需要回电',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                    ],
                ],
                [
                    'name' => 'IsNeedCharges',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '是否需要收费',
                        'description' => '是否需要收费',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                    ],
                ],
                [
                    'name' => 'SortField',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '排序字段',
                        'description' => '排序字段',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'gmtCalled',
                    ],
                ],
                [
                    'name' => 'IsDesc',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '是否为降序',
                        'description' => '是否为降序',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'headers' => [],
                    'schema' => [
                        'title' => 'PageResult<List<LogInfoResponse>>',
                        'description' => 'PageResult<List<LogInfoResponse>>',
                        'type' => 'object',
                        'properties' => [
                            'Page' => [
                                'title' => '翻页参数',
                                'description' => '翻页参数',
                                'type' => 'object',
                                'properties' => [
                                    'PageNumber' => [
                                        'title' => '页码',
                                        'description' => '页码',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '1',
                                    ],
                                    'PageSize' => [
                                        'title' => '每页size大小',
                                        'description' => '每页size大小',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '10',
                                    ],
                                    'Total' => [
                                        'description' => '共多少条数据',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '5',
                                    ],
                                ],
                            ],
                            'StatusCode' => [
                                'title' => '调用返回码，除约定的SUCCESS_CODE外，其余由服务提供者自定义',
                                'description' => '调用返回码，除约定的SUCCESS_CODE外，其余由服务提供者自定义',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'Result' => [
                                'title' => '服务的实际返回结果',
                                'description' => '服务的实际返回结果',
                                'type' => 'array',
                                'items' => [
                                    'description' => '服务的实际返回结果',
                                    'type' => 'object',
                                    'properties' => [
                                        'Id' => [
                                            'title' => '主键',
                                            'description' => '主键',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '45',
                                        ],
                                        'GmtCreate' => [
                                            'title' => '创建时间',
                                            'description' => '创建时间',
                                            'type' => 'string',
                                            'example' => '2023-01-09 00:00:00',
                                        ],
                                        'GmtModified' => [
                                            'title' => '修改时间',
                                            'description' => '修改时间',
                                            'type' => 'string',
                                            'example' => '2023-01-09 00:00:00',
                                        ],
                                        'Dialogs' => [
                                            'title' => '单轮对话',
                                            'description' => '单轮对话',
                                            'type' => 'array',
                                            'items' => [
                                                'description' => '对话',
                                                'type' => 'object',
                                                'properties' => [
                                                    'Question' => [
                                                        'description' => '问题。',
                                                        'type' => 'string',
                                                        'example' => '我要1份***',
                                                    ],
                                                    'Answer' => [
                                                        'description' => '答案。',
                                                        'type' => 'string',
                                                        'example' => '好的，服务员会尽快送来。',
                                                    ],
                                                ],
                                            ],
                                        ],
                                        'RoomNo' => [
                                            'title' => '房间号',
                                            'description' => '房间号',
                                            'type' => 'string',
                                            'example' => '101',
                                        ],
                                        'Type' => [
                                            'title' => '类型',
                                            'description' => '类型1：""（全部） 2：酒店服务（酒店服务） 3：酒店维修（酒店维修）',
                                            'type' => 'string',
                                            'enumValueTitles' => [
                                                '""' => '全部',
                                                '酒店服务' => '酒店服务',
                                                '酒店维修' => '酒店维修',
                                            ],
                                            'example' => '""',
                                        ],
                                        'IsNeedCallback' => [
                                            'title' => '是否需要回电',
                                            'description' => '是否需要回电',
                                            'type' => 'boolean',
                                            'example' => 'false',
                                        ],
                                        'IsNeedCharges' => [
                                            'title' => '是否需要收费',
                                            'description' => '是否需要收费',
                                            'type' => 'boolean',
                                            'example' => 'false',
                                        ],
                                        'IsAcceptedCharges' => [
                                            'title' => '客户是否接受收费',
                                            'description' => '客户是否接受收费',
                                            'type' => 'boolean',
                                            'example' => 'false',
                                        ],
                                        'AssignedHandler' => [
                                            'title' => '指派人',
                                            'description' => '指派人',
                                            'type' => 'string',
                                            'example' => '***',
                                        ],
                                        'Remark' => [
                                            'title' => '备注',
                                            'description' => '备注',
                                            'type' => 'string',
                                            'example' => '***',
                                        ],
                                        'Status' => [
                                            'title' => '状态',
                                            'description' => '状态：handled： 已处理, waiting：待处理, delayed：延迟处理',
                                            'type' => 'string',
                                            'enumValueTitles' => [
                                                'waiting' => '待处理',
                                                'handled' => '已处理',
                                                'delayed' => '延迟处理',
                                            ],
                                            'example' => 'waiting',
                                        ],
                                        'Operations' => [
                                            'title' => '操作',
                                            'description' => '操作',
                                            'type' => 'array',
                                            'items' => [
                                                'description' => '键值对',
                                                'type' => 'object',
                                                'additionalProperties' => [
                                                    'type' => 'any',
                                                    'description' => 'isOperable：是否可操作'."\n"
                                                        .'nextStatus：下个状态'."\n"
                                                        .'name：名称'."\n"
                                                        .'currStatus：当前状态',
                                                    'example' => '"isOperable":true,'."\n"
                                                        .'"nextStatus":"handled",'."\n"
                                                        .'"name":"处理完成",'."\n"
                                                        .'"currStatus":"delayed"',
                                                ],
                                            ],
                                        ],
                                        'IsDelayed' => [
                                            'title' => '是否延时处理',
                                            'description' => '是否延时处理',
                                            'type' => 'boolean',
                                            'example' => 'true',
                                        ],
                                        'GmtDelayed' => [
                                            'title' => '延时处理时间',
                                            'description' => '延时处理时间',
                                            'type' => 'string',
                                            'example' => '2023-01-09 00:00:00',
                                        ],
                                        'ChargesRemark' => [
                                            'title' => '收费信息备注',
                                            'description' => '收费信息备注',
                                            'type' => 'string',
                                            'example' => '***',
                                        ],
                                        'CompleteRemark' => [
                                            'title' => '完成情况备注',
                                            'description' => '完成情况备注',
                                            'type' => 'string',
                                            'example' => '***',
                                        ],
                                        'GmtCalled' => [
                                            'title' => '呼叫时间',
                                            'description' => '呼叫时间',
                                            'type' => 'string',
                                            'example' => '2023-01-09 00:00:00',
                                        ],
                                        'GroupKey' => [
                                            'title' => '分组键',
                                            'description' => '分组键，代表了一次对话或者一次下单操作，多轮对话使用一个groupkey，会自动合并成一条工单多条对话的形式',
                                            'type' => 'string',
                                            'example' => '2023***93975',
                                        ],
                                        'Action' => [
                                            'title' => '是否是操作',
                                            'description' => '是否已操作',
                                            'type' => 'boolean',
                                            'example' => 'false',
                                        ],
                                    ],
                                ],
                            ],
                            'Message' => [
                                'title' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                                'description' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                            'RequestId' => [
                                'description' => '请求id',
                                'type' => 'string',
                                'example' => '0EC7***726E',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidParameter',
                        'errorMessage' => 'The request parameter is invalid',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'ServerError',
                        'errorMessage' => 'internal server error',
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Page\\": {\\n    \\"PageNumber\\": 1,\\n    \\"PageSize\\": 10,\\n    \\"Total\\": 5\\n  },\\n  \\"StatusCode\\": 200,\\n  \\"Result\\": [\\n    {\\n      \\"Id\\": 45,\\n      \\"GmtCreate\\": \\"2023-01-09 00:00:00\\",\\n      \\"GmtModified\\": \\"2023-01-09 00:00:00\\",\\n      \\"Dialogs\\": [\\n        {\\n          \\"Question\\": \\"我要1份***\\",\\n          \\"Answer\\": \\"好的，服务员会尽快送来。\\"\\n        }\\n      ],\\n      \\"RoomNo\\": \\"101\\",\\n      \\"Type\\": \\"\\\\\\"\\\\\\"\\",\\n      \\"IsNeedCallback\\": false,\\n      \\"IsNeedCharges\\": false,\\n      \\"IsAcceptedCharges\\": false,\\n      \\"AssignedHandler\\": \\"***\\",\\n      \\"Remark\\": \\"***\\",\\n      \\"Status\\": \\"waiting\\",\\n      \\"Operations\\": [\\n        {\\n          \\"key\\": \\"\\\\\\"isOperable\\\\\\":true,\\\\n\\\\\\"nextStatus\\\\\\":\\\\\\"handled\\\\\\",\\\\n\\\\\\"name\\\\\\":\\\\\\"处理完成\\\\\\",\\\\n\\\\\\"currStatus\\\\\\":\\\\\\"delayed\\\\\\"\\"\\n        }\\n      ],\\n      \\"IsDelayed\\": true,\\n      \\"GmtDelayed\\": \\"2023-01-09 00:00:00\\",\\n      \\"ChargesRemark\\": \\"***\\",\\n      \\"CompleteRemark\\": \\"***\\",\\n      \\"GmtCalled\\": \\"2023-01-09 00:00:00\\",\\n      \\"GroupKey\\": \\"2023***93975\\",\\n      \\"Action\\": false\\n    }\\n  ],\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"0EC7***726E\\"\\n}","type":"json"}]',
            'title' => '查询工单列表',
        ],
        'UpdateTicket' => [
            'summary' => '修改工单。',
            'path' => '/v1.0/ip/updateTicket',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'https',
                'http',
            ],
            'security' => [
                [
                    'AliGenie_Auth_SPI' => [],
                ],
            ],
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'HotelId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '酒店id',
                        'type' => 'string',
                        'required' => true,
                        'example' => '520a0c0***5eb',
                    ],
                ],
                [
                    'name' => 'Status',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '状态',
                        'description' => '状态：handled： 已处理, waiting：待处理, delayed：延迟处理',
                        'type' => 'string',
                        'required' => true,
                        'enumValueTitles' => [
                            'waiting' => '待处理',
                            'handled' => '已处理',
                            'delayed' => '延迟处理',
                        ],
                        'example' => 'waiting',
                    ],
                ],
                [
                    'name' => 'GroupKey',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '分组键',
                        'description' => '分组键，代表了一次对话或者一次下单操作，多轮对话使用一个groupkey，会自动合并成一条工单多条对话的形式',
                        'type' => 'string',
                        'required' => true,
                        'example' => '2023***93975',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'headers' => [],
                    'schema' => [
                        'title' => 'Result<Boolean>',
                        'description' => 'Result<Boolean>',
                        'type' => 'object',
                        'properties' => [
                            'StatusCode' => [
                                'title' => '调用返回码，除约定的SUCCESS_CODE外，其余由服务提供者自定义',
                                'description' => '调用返回码，除约定的SUCCESS_CODE外，其余由服务提供者自定义',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'Result' => [
                                'title' => '服务的实际返回结果',
                                'description' => '服务的实际返回结果',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'Message' => [
                                'title' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                                'description' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                            'RequestId' => [
                                'description' => '请求id',
                                'type' => 'string',
                                'example' => '0EC7***726E',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidParameter',
                        'errorMessage' => 'The request parameter is invalid',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'ServerError',
                        'errorMessage' => 'internal server error',
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"StatusCode\\": 200,\\n  \\"Result\\": true,\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"0EC7***726E\\"\\n}","type":"json"}]',
            'title' => '修改工单',
        ],
        'DeleteHotelAlarm' => [
            'summary' => '删除酒店闹钟，支持单个和批量删除',
            'path' => '/v1.0/ip/deleteHotelAlarm',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'https',
                'http',
            ],
            'security' => [
                [
                    'AliGenie_Auth_SPI' => [],
                ],
            ],
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'operationType' => 'write',
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'HotelId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '酒店id',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'a7***83',
                    ],
                ],
                [
                    'name' => 'Alarms',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'description' => '闹钟信息',
                        'type' => 'array',
                        'items' => [
                            'description' => '对象',
                            'type' => 'object',
                            'properties' => [
                                'RoomNo' => [
                                    'description' => '房间号',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => '101',
                                ],
                                'AlarmId' => [
                                    'description' => '闹钟id',
                                    'type' => 'integer',
                                    'format' => 'int64',
                                    'required' => true,
                                    'example' => '5029',
                                ],
                                'UserOpenId' => [
                                    'description' => '开放用户Id',
                                    'type' => 'string',
                                    'required' => true,
                                    'example' => 'mgw/k***HQd',
                                ],
                                'DeviceOpenId' => [
                                    'description' => '开放设备id',
                                    'type' => 'string',
                                    'required' => true,
                                    'example' => 'PvkB***TA==',
                                ],
                            ],
                            'required' => false,
                        ],
                        'required' => true,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Result<Integer>',
                        'description' => 'Result<Integer>',
                        'type' => 'object',
                        'properties' => [
                            'StatusCode' => [
                                'title' => '调用返回码，除约定的SUCCESS_CODE外，其余由服务提供者自定义',
                                'description' => '调用返回码，除约定的SUCCESS_CODE外，其余由服务提供者自定义',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'Result' => [
                                'title' => '服务的实际返回结果',
                                'description' => '服务的实际返回结果',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'Message' => [
                                'title' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                                'description' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                                'type' => 'string',
                                'example' => 'xxx为空',
                            ],
                            'Extentions' => [
                                'title' => '扩展字段',
                                'description' => '扩展字段',
                                'type' => 'object',
                                'additionalProperties' => [
                                    'type' => 'any',
                                    'example' => '""',
                                    'description' => '扩展内容',
                                ],
                            ],
                            'RequestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '43***881',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidParameter',
                        'errorMessage' => 'The request parameter is invalid',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'ServerError',
                        'errorMessage' => 'internal server error',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"StatusCode\\": 200,\\n  \\"Result\\": 1,\\n  \\"Message\\": \\"xxx为空\\",\\n  \\"Extentions\\": {\\n    \\"key\\": \\"\\\\\\"\\\\\\"\\"\\n  },\\n  \\"RequestId\\": \\"43***881\\"\\n}","type":"json"}]',
            'title' => '删除酒店闹钟',
            'description' => '删除酒店闹钟，支持单个和批量删除。',
        ],
        'ListHotelAlarm' => [
            'summary' => '查询酒店闹钟信息',
            'path' => '/v1.0/ip/getHotelAlarmList',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'https',
                'http',
            ],
            'security' => [
                [
                    'AliGenie_Auth_SPI' => [],
                ],
            ],
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'HotelId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '酒店id',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'a7a3***013',
                    ],
                ],
                [
                    'name' => 'Rooms',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'description' => '房间号',
                        'type' => 'array',
                        'items' => [
                            'description' => '房间',
                            'type' => 'string',
                            'required' => false,
                            'example' => '101',
                        ],
                        'required' => false,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Result<List<HotelAlarmDetailResponse>>',
                        'description' => 'Result<List<HotelAlarmDetailResponse>>',
                        'type' => 'object',
                        'properties' => [
                            'StatusCode' => [
                                'title' => '调用返回码，除约定的SUCCESS_CODE外，其余由服务提供者自定义',
                                'description' => '调用返回码，除约定的SUCCESS_CODE外，其余由服务提供者自定义',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'Result' => [
                                'title' => '服务的实际返回结果',
                                'description' => '服务的实际返回结果',
                                'type' => 'array',
                                'items' => [
                                    'description' => '对象',
                                    'type' => 'object',
                                    'properties' => [
                                        'AlarmId' => [
                                            'title' => '闹钟id',
                                            'description' => '闹钟id',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '5039',
                                        ],
                                        'UserOpenId' => [
                                            'title' => '用户Id',
                                            'description' => '开放用户Id',
                                            'type' => 'string',
                                            'example' => 'mgw/k***HQd',
                                        ],
                                        'DeviceOpenId' => [
                                            'title' => 'uuid',
                                            'description' => '开放设备id',
                                            'type' => 'string',
                                            'example' => 'PvkB****VVTA==',
                                        ],
                                        'ScheduleInfo' => [
                                            'title' => '设置的闹钟信息',
                                            'description' => '设置的闹钟信息',
                                            'type' => 'object',
                                            'properties' => [
                                                'Type' => [
                                                    'title' => 'ONCE, WEEKLY, STATUTORY_WORKING_DAY',
                                                    'description' => 'ONCE, WEEKLY',
                                                    'type' => 'string',
                                                    'example' => 'ONCE',
                                                ],
                                                'Once' => [
                                                    'description' => '单次闹钟',
                                                    'type' => 'object',
                                                    'properties' => [
                                                        'Year' => [
                                                            'description' => '年',
                                                            'type' => 'integer',
                                                            'format' => 'int32',
                                                            'example' => '2022',
                                                        ],
                                                        'Month' => [
                                                            'description' => '月',
                                                            'type' => 'integer',
                                                            'format' => 'int32',
                                                            'example' => '9',
                                                        ],
                                                        'Day' => [
                                                            'description' => '日',
                                                            'type' => 'integer',
                                                            'format' => 'int32',
                                                            'example' => '20',
                                                        ],
                                                        'Hour' => [
                                                            'description' => '时',
                                                            'type' => 'integer',
                                                            'format' => 'int32',
                                                            'example' => '10',
                                                        ],
                                                        'Minute' => [
                                                            'description' => '分',
                                                            'type' => 'integer',
                                                            'format' => 'int32',
                                                            'example' => '30',
                                                        ],
                                                    ],
                                                ],
                                                'Weekly' => [
                                                    'description' => '周循环：循环类型为WEEKLY时，该属性可用'."\n"
                                                        ."\n",
                                                    'type' => 'object',
                                                    'properties' => [
                                                        'DaysOfWeek' => [
                                                            'description' => '周几触发集合',
                                                            'type' => 'array',
                                                            'items' => [
                                                                'description' => '周几触发集合：数值在 1-7 之间，数字几则为对应的周几，如果是每天，则全部都填',
                                                                'type' => 'integer',
                                                                'format' => 'int32',
                                                                'example' => '1',
                                                            ],
                                                        ],
                                                        'Hour' => [
                                                            'description' => '触发时间：时',
                                                            'type' => 'integer',
                                                            'format' => 'int32',
                                                            'example' => '10',
                                                        ],
                                                        'Minute' => [
                                                            'description' => '触发时间：分',
                                                            'type' => 'integer',
                                                            'format' => 'int32',
                                                            'example' => '0',
                                                        ],
                                                    ],
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                            'Message' => [
                                'title' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                                'description' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                                'type' => 'string',
                                'example' => 'xx为空',
                            ],
                            'Extentions' => [
                                'title' => '扩展字段',
                                'description' => '扩展字段',
                                'type' => 'object',
                                'additionalProperties' => [
                                    'type' => 'any',
                                    'example' => '""',
                                    'description' => '扩展内容',
                                ],
                            ],
                            'RequestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '43***881',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidParameter',
                        'errorMessage' => 'The request parameter is invalid',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'ServerError',
                        'errorMessage' => 'internal server error',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"StatusCode\\": 200,\\n  \\"Result\\": [\\n    {\\n      \\"AlarmId\\": 5039,\\n      \\"UserOpenId\\": \\"mgw/k***HQd\\",\\n      \\"DeviceOpenId\\": \\"PvkB****VVTA==\\",\\n      \\"ScheduleInfo\\": {\\n        \\"Type\\": \\"ONCE\\",\\n        \\"Once\\": {\\n          \\"Year\\": 2022,\\n          \\"Month\\": 9,\\n          \\"Day\\": 20,\\n          \\"Hour\\": 10,\\n          \\"Minute\\": 30\\n        },\\n        \\"Weekly\\": {\\n          \\"DaysOfWeek\\": [\\n            1\\n          ],\\n          \\"Hour\\": 10,\\n          \\"Minute\\": 0\\n        }\\n      }\\n    }\\n  ],\\n  \\"Message\\": \\"xx为空\\",\\n  \\"Extentions\\": {\\n    \\"key\\": \\"\\\\\\"\\\\\\"\\"\\n  },\\n  \\"RequestId\\": \\"43***881\\"\\n}","type":"json"}]',
            'title' => '查询酒店闹钟信息列表',
            'description' => '查询酒店闹钟信息。',
        ],
        'CreateHotelAlarm' => [
            'summary' => '批量创建闹钟',
            'path' => '/v1.0/ip/createHotelAlarm',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'https',
                'http',
            ],
            'security' => [
                [
                    'AliGenie_Auth_SPI' => [],
                ],
            ],
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'HotelId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '酒店Id',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cf2446fc9d144c85aaee4f9ae20a96e7',
                    ],
                ],
                [
                    'name' => 'Rooms',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'title' => '批量最多支持10个房间的闹钟设置，此处房间号请控制在10个以内',
                        'description' => '批量最多支持10个房间的闹钟设置，此处房间号请控制在10个以内',
                        'type' => 'array',
                        'items' => [
                            'description' => '房间号',
                            'type' => 'string',
                            'required' => false,
                            'example' => '101',
                        ],
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ScheduleInfo',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'description' => '时间调度信息',
                        'type' => 'object',
                        'properties' => [
                            'Type' => [
                                'title' => 'ONCE, WEEKLY, STATUTORY_WORKING_DAY',
                                'description' => 'ONCE, WEEKLY',
                                'type' => 'string',
                                'required' => true,
                                'example' => '调度类型',
                            ],
                            'Once' => [
                                'description' => '单次闹钟',
                                'type' => 'object',
                                'properties' => [
                                    'Year' => [
                                        'description' => '年',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'required' => false,
                                        'example' => '2022',
                                    ],
                                    'Month' => [
                                        'description' => '月',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'required' => false,
                                        'example' => '9',
                                    ],
                                    'Day' => [
                                        'description' => '日',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'required' => false,
                                        'example' => '20',
                                    ],
                                    'Hour' => [
                                        'description' => '时',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'required' => false,
                                        'example' => '19',
                                    ],
                                    'Minute' => [
                                        'description' => '分',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'required' => false,
                                        'example' => '30',
                                    ],
                                ],
                                'required' => false,
                            ],
                            'Weekly' => [
                                'description' => '周循环',
                                'type' => 'object',
                                'properties' => [
                                    'DaysOfWeek' => [
                                        'description' => '周几触发',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '周几',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'required' => false,
                                            'example' => '1',
                                        ],
                                        'required' => false,
                                    ],
                                    'Hour' => [
                                        'description' => '小时',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'required' => false,
                                        'example' => '10',
                                    ],
                                    'Minute' => [
                                        'description' => '分',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'required' => false,
                                        'example' => '30',
                                    ],
                                ],
                                'required' => false,
                            ],
                        ],
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'MusicType',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '目前支持 (DOU_YIN, JING_DIAN)',
                        'description' => '目前支持 (DOU_YIN, JING_DIAN)',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'DOU_YIN',
                        'enum' => [
                            'DOU_YIN',
                            'JING_DIAN',
                        ],
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Result<List<HotelAlarmResponse>>',
                        'description' => 'Result<List<HotelAlarmResponse>>',
                        'type' => 'object',
                        'properties' => [
                            'StatusCode' => [
                                'title' => '调用返回码，除约定的SUCCESS_CODE外，其余由服务提供者自定义',
                                'description' => '调用返回码，除约定的SUCCESS_CODE外，其余由服务提供者自定义',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'Result' => [
                                'title' => '服务的实际返回结果',
                                'description' => '服务的实际返回结果',
                                'type' => 'array',
                                'items' => [
                                    'description' => '返回结果',
                                    'type' => 'object',
                                    'properties' => [
                                        'RoomNo' => [
                                            'description' => '房间号',
                                            'type' => 'string',
                                            'example' => '101',
                                        ],
                                        'AlarmId' => [
                                            'description' => '闹钟id',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '94',
                                        ],
                                        'DeviceOpenId' => [
                                            'description' => '开放设备id',
                                            'type' => 'string',
                                            'example' => 'Pvk***TA==',
                                        ],
                                        'UserOpenId' => [
                                            'description' => '开放用户id',
                                            'type' => 'string',
                                            'example' => 'mg***Qd',
                                        ],
                                        'FailMsg' => [
                                            'description' => '错误信息',
                                            'type' => 'string',
                                            'example' => '设备离线，闹钟创建失败',
                                        ],
                                    ],
                                ],
                            ],
                            'Message' => [
                                'title' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                                'description' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                                'type' => 'string',
                                'example' => 'xx为空',
                            ],
                            'Extentions' => [
                                'title' => '扩展字段',
                                'description' => '扩展字段',
                                'type' => 'object',
                                'additionalProperties' => [
                                    'type' => 'any',
                                    'example' => '""',
                                    'description' => '扩展内容',
                                ],
                            ],
                            'RequestId' => [
                                'description' => '请求id',
                                'type' => 'string',
                                'example' => '43***86881',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidParameter',
                        'errorMessage' => 'The request parameter is invalid',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'ServerError',
                        'errorMessage' => 'internal server error',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"StatusCode\\": 200,\\n  \\"Result\\": [\\n    {\\n      \\"RoomNo\\": \\"101\\",\\n      \\"AlarmId\\": 94,\\n      \\"DeviceOpenId\\": \\"Pvk***TA==\\",\\n      \\"UserOpenId\\": \\"mg***Qd\\",\\n      \\"FailMsg\\": \\"设备离线，闹钟创建失败\\"\\n    }\\n  ],\\n  \\"Message\\": \\"xx为空\\",\\n  \\"Extentions\\": {\\n    \\"key\\": \\"\\\\\\"\\\\\\"\\"\\n  },\\n  \\"RequestId\\": \\"43***86881\\"\\n}","type":"json"}]',
            'title' => '创建酒店闹钟',
            'description' => '批量创建闹钟。',
        ],
        'UpdateHotelAlarm' => [
            'summary' => '修改酒店闹钟',
            'path' => '/v1.0/ip/updateHotelAlarm',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'https',
                'http',
            ],
            'security' => [
                [
                    'AliGenie_Auth_SPI' => [],
                ],
            ],
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'operationType' => 'write',
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'HotelId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '酒店ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'a7a381a668bc485980bed3876a75e013',
                    ],
                ],
                [
                    'name' => 'Alarms',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'description' => '闹钟信息',
                        'type' => 'array',
                        'items' => [
                            'type' => 'object',
                            'properties' => [
                                'RoomNo' => [
                                    'description' => '房间号',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => '101',
                                ],
                                'AlarmId' => [
                                    'description' => '闹钟ID',
                                    'type' => 'integer',
                                    'format' => 'int64',
                                    'required' => true,
                                    'example' => '1234567',
                                ],
                                'UserOpenId' => [
                                    'description' => '开放用户ID',
                                    'type' => 'string',
                                    'required' => true,
                                    'example' => 'mgw/***dHQd',
                                ],
                                'DeviceOpenId' => [
                                    'description' => '开放设备ID',
                                    'type' => 'string',
                                    'required' => true,
                                    'example' => 'Pvk***VTA==',
                                ],
                            ],
                            'required' => false,
                        ],
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ScheduleInfo',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'description' => '闹钟定时信息',
                        'type' => 'object',
                        'properties' => [
                            'Type' => [
                                'title' => 'ONCE, WEEKLY, STATUTORY_WORKING_DAY',
                                'description' => 'ONCE, WEEKLY',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'ONCE',
                            ],
                            'Once' => [
                                'description' => '一次',
                                'type' => 'object',
                                'properties' => [
                                    'Year' => [
                                        'description' => '年',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'required' => false,
                                        'example' => '2022',
                                    ],
                                    'Month' => [
                                        'description' => '月',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'required' => false,
                                        'example' => '9',
                                    ],
                                    'Day' => [
                                        'description' => '日',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'required' => false,
                                        'example' => '20',
                                    ],
                                    'Hour' => [
                                        'description' => '时',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'required' => false,
                                        'example' => '10',
                                    ],
                                    'Minute' => [
                                        'description' => '分',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'required' => false,
                                        'example' => '0',
                                    ],
                                ],
                                'required' => false,
                            ],
                            'Weekly' => [
                                'description' => '周循环：循环类型为WEEKLY时，该属性可用'."\n"
                                    ."\n",
                                'type' => 'object',
                                'properties' => [
                                    'DaysOfWeek' => [
                                        'description' => '周几触发集合'."\n"
                                            ."\n",
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '周几触发集合：数值在 1-7 之间，数字几则为对应的周几，如果是每天，则全部都填',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'required' => false,
                                            'example' => '1',
                                        ],
                                        'required' => false,
                                    ],
                                    'Hour' => [
                                        'description' => '时',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'required' => false,
                                        'example' => '10',
                                    ],
                                    'Minute' => [
                                        'description' => '分',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'required' => false,
                                        'example' => '0',
                                    ],
                                ],
                                'required' => false,
                            ],
                        ],
                        'required' => false,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Result<Integer>',
                        'description' => 'Result<Integer>',
                        'type' => 'object',
                        'properties' => [
                            'StatusCode' => [
                                'title' => '调用返回码，除约定的SUCCESS_CODE外，其余由服务提供者自定义',
                                'description' => '调用返回码，除约定的SUCCESS_CODE外，其余由服务提供者自定义',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'Result' => [
                                'title' => '服务的实际返回结果',
                                'description' => '服务的实际返回结果',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'Message' => [
                                'title' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                                'description' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                            'Extentions' => [
                                'title' => '扩展字段',
                                'description' => '扩展字段',
                                'type' => 'object',
                                'additionalProperties' => [
                                    'type' => 'any',
                                    'example' => '""',
                                    'description' => '扩展内容',
                                ],
                            ],
                            'RequestId' => [
                                'description' => '请求id。',
                                'type' => 'string',
                                'example' => '73C67BD9-175A-1324-8202-9FAABBB3E6FA',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidParameter',
                        'errorMessage' => 'The request parameter is invalid',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'ServerError',
                        'errorMessage' => 'internal server error',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"StatusCode\\": 200,\\n  \\"Result\\": 1,\\n  \\"Message\\": \\"success\\",\\n  \\"Extentions\\": {\\n    \\"key\\": \\"\\\\\\"\\\\\\"\\"\\n  },\\n  \\"RequestId\\": \\"73C67BD9-175A-1324-8202-9FAABBB3E6FA\\"\\n}","type":"json"}]',
            'title' => '修改酒店闹钟',
            'description' => '修改酒店闹钟。',
        ],
        'ChildAccountAuth' => [
            'summary' => '酒店子账号授权。',
            'path' => '/v1.0/ip/childAccountAuth',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'https',
                'http',
            ],
            'security' => [
                [
                    'AliGenie_Auth_SPI' => [],
                ],
            ],
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'create',
            ],
            'parameters' => [
                [
                    'name' => 'Account',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '淘宝账号名称',
                        'description' => '淘宝账号名称',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'lee',
                    ],
                ],
                [
                    'name' => 'TbOpenId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '淘宝开放id',
                        'description' => '淘宝开放id',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'AAEV***E3d3Z2ETwh',
                    ],
                ],
                [
                    'name' => 'AppKey',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '开放平台appKey',
                        'description' => '开放平台appKey',
                        'type' => 'string',
                        'required' => true,
                        'example' => '30471753',
                    ],
                ],
                [
                    'name' => 'HotelId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '酒店ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'a7***83',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Result<Boolean>',
                        'description' => 'Result<Boolean>',
                        'type' => 'object',
                        'properties' => [
                            'StatusCode' => [
                                'title' => '调用返回码，除约定的SUCCESS_CODE外，其余由服务提供者自定义',
                                'description' => '调用返回码，除约定的SUCCESS_CODE外，其余由服务提供者自定义',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'Result' => [
                                'title' => '服务的实际返回结果',
                                'description' => '服务的实际返回结果',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'Message' => [
                                'title' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                                'description' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                            'Extentions' => [
                                'title' => '扩展字段',
                                'description' => '扩展字段',
                                'type' => 'object',
                                'additionalProperties' => [
                                    'type' => 'any',
                                    'description' => '扩展字段',
                                ],
                            ],
                            'RequestId' => [
                                'description' => '请求id',
                                'type' => 'string',
                                'example' => '3DB51A10-327C-58D3-91DF-3A5A471C51E7',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidParameter',
                        'errorMessage' => 'The request parameter is invalid',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'ServerError',
                        'errorMessage' => 'internal server error',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"StatusCode\\": 200,\\n  \\"Result\\": true,\\n  \\"Message\\": \\"success\\",\\n  \\"Extentions\\": {\\n    \\"key\\": \\"\\"\\n  },\\n  \\"RequestId\\": \\"3DB51A10-327C-58D3-91DF-3A5A471C51E7\\"\\n}","type":"json"}]',
            'title' => '子账号授权',
            'description' => '酒店子账号授权。',
        ],
        'RemoveChildAccountAuth' => [
            'summary' => '删除子账号授权',
            'path' => '/v1.0/ip/removeChildAccountAuth',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'https',
                'http',
            ],
            'security' => [
                [
                    'AliGenie_Auth_SPI' => [],
                ],
            ],
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'operationType' => 'write',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'delete',
            ],
            'parameters' => [
                [
                    'name' => 'TbOpenId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '授权人（平台登录用户）淘宝开放id',
                        'description' => '授权人（平台登录用户）淘宝开放id',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'AAEV***E3d3Z2ETwh',
                    ],
                ],
                [
                    'name' => 'AppKey',
                    'in' => 'formData',
                    'schema' => [
                        'title' => 'top开放平台appKey',
                        'description' => 'top开放平台appKey',
                        'type' => 'string',
                        'required' => true,
                        'example' => '30**53',
                    ],
                ],
                [
                    'name' => 'ChildAccountName',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '被授权账号的淘宝账号名称',
                        'description' => '被授权账号的淘宝账号名称',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'tbxxxx',
                    ],
                ],
                [
                    'name' => 'HotelId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '酒店id',
                        'description' => '酒店id',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'af7***536',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Result<Boolean>',
                        'description' => 'Result<Boolean>',
                        'type' => 'object',
                        'properties' => [
                            'StatusCode' => [
                                'title' => '调用返回码，200标识为成功，非200详细见错误码表',
                                'description' => '调用返回码，200标识为成功，非200详细见错误码表',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'Result' => [
                                'title' => '服务的实际返回结果',
                                'description' => '服务的实际返回结果',
                                'type' => 'boolean',
                                'example' => 'True',
                            ],
                            'Message' => [
                                'title' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                                'description' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                            'RequestId' => [
                                'description' => '请求id',
                                'type' => 'string',
                                'example' => 'F12B***F34E',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidParameter',
                        'errorMessage' => 'The request parameter is invalid',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'ServerError',
                        'errorMessage' => 'internal server error',
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"StatusCode\\": 200,\\n  \\"Result\\": true,\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"F12B***F34E\\"\\n}","type":"json"}]',
            'title' => '删除子账号授权',
        ],
        'PmsEventReport' => [
            'summary' => 'pms事件上报',
            'path' => '/v1.0/ip/pmsEventReport',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'AliGenie_Auth_SPI' => [],
                ],
            ],
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'Payload',
                    'in' => 'formData',
                    'schema' => [
                        'description' => 'pms事件上报内容',
                        'type' => 'string',
                        'required' => true,
                        'example' => '{'."\n"
                            .'  "eventId": "123342",'."\n"
                            .'  "eventType": 2,'."\n"
                            .'  "hotelId": "95fc******4f7b",'."\n"
                            .'  "pmsPartnerName": "XX科技",'."\n"
                            .'  "orderItemList": ['."\n"
                            .'    {'."\n"
                            .'      "orderItemId": "12345",'."\n"
                            .'      "channelName": "飞猪",'."\n"
                            .'      "checkinTime": "2023-04-15 12:03:20",'."\n"
                            .'      "checkoutTime": "2023-04-16 11:12:04",'."\n"
                            .'      "guests": ['."\n"
                            .'        {'."\n"
                            .'          "name": "张*",'."\n"
                            .'          "familyName": "张",'."\n"
                            .'          "phone": "187***0967",'."\n"
                            .'          "email": "****@qq.com",'."\n"
                            .'          "telephone": "0571-433**343",'."\n"
                            .'          "gender": 1,'."\n"
                            .'          "identityType": "idCard",'."\n"
                            .'          "identityNo": "330**********3538"'."\n"
                            .'        }'."\n"
                            .'      ],'."\n"
                            .'      "price": "318",'."\n"
                            .'      "lastRoomNo": "119",'."\n"
                            .'      "roomNo": "210",'."\n"
                            .'      "roomTypeCode": "1023",'."\n"
                            .'      "roomTypeName": "大床房",'."\n"
                            .'      "status": 2'."\n"
                            .'    }'."\n"
                            .'  ]'."\n"
                            .'}',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Result<Boolean>',
                        'description' => 'Schema of Response',
                        'type' => 'object',
                        'properties' => [
                            'StatusCode' => [
                                'title' => '调用返回码，除约定的SUCCESS_CODE外，其余由服务提供者自定义',
                                'description' => '调用返回码，200标识成功',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'Result' => [
                                'title' => '服务的实际返回结果',
                                'description' => '服务的实际返回结果',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'Message' => [
                                'title' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                                'description' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                            'RequestId' => [
                                'description' => '请求id',
                                'type' => 'string',
                                'example' => '0EC7*726E',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidParameter',
                        'errorMessage' => 'The request parameter is invalid',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'ServerError',
                        'errorMessage' => 'internal server error',
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"StatusCode\\": 200,\\n  \\"Result\\": true,\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"0EC7*726E\\"\\n}","type":"json"}]',
            'title' => 'pms事件同步',
        ],
        'QueryDeviceStatus' => [
            'summary' => '查询客控设备状态，例如灯的开关状态，空调当前设定的温度等，也可查询部分模式的状态，例如勿扰模式(需ISV提前支持)',
            'path' => '/v1.0/ip/queryDeviceStatus',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'https',
                'http',
            ],
            'security' => [
                [
                    'AliGenie_Auth_SPI' => [],
                ],
            ],
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'Payload',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'description' => '查询请求参数',
                        'type' => 'object',
                        'properties' => [
                            'LocationDevices' => [
                                'description' => '位置及设备信息列表',
                                'type' => 'array',
                                'items' => [
                                    'description' => '位置设备信息',
                                    'type' => 'object',
                                    'properties' => [
                                        'Location' => [
                                            'description' => '位置信息，如'."\n"
                                                ."\n"
                                                .'- room：房间'."\n"
                                                .'- livingroom：客厅',
                                            'type' => 'string',
                                            'required' => false,
                                            'example' => 'room',
                                        ],
                                        'DeviceNumber' => [
                                            'description' => '设备编号',
                                            'type' => 'string',
                                            'required' => false,
                                            'example' => 'night_light',
                                        ],
                                        'DeviceType' => [
                                            'description' => '设备类型，如'."\n"
                                                ."\n"
                                                .'- light：灯'."\n"
                                                .'- aircondition：空调',
                                            'type' => 'string',
                                            'required' => false,
                                            'example' => 'light',
                                        ],
                                    ],
                                    'required' => false,
                                ],
                                'required' => false,
                            ],
                            'UserId' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'Properties' => [
                                'description' => '额外信息，如模式相关数据',
                                'type' => 'object',
                                'required' => false,
                                'additionalProperties' => [
                                    'type' => 'string',
                                    'example' => 'mode',
                                    'description' => '例如模式等查询场景传参：'."\n"
                                        .'mode: dnd',
                                ],
                            ],
                        ],
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'UserInfo',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'description' => '用户标识信息',
                        'type' => 'object',
                        'properties' => [
                            'EncodeType' => [
                                'description' => '编码类型，此处填写 **HOTEL**。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'HOTEL',
                            ],
                            'EncodeKey' => [
                                'description' => '编码类型对应的值，此处填写该酒店应用ID。请在天猫精灵行业管理平台查看。',
                                'type' => 'string',
                                'required' => true,
                                'example' => '123',
                            ],
                            'IdType' => [
                                'description' => '用户Id的类型'."\n"
                                    ."\n"
                                    .'- OPEN_ID：默认的用户ID标识。'."\n"
                                    .'- UNION_ID: 组织维度的用户ID标识，需要提前在开放平台申请组织。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'OPEN_ID',
                            ],
                            'Id' => [
                                'description' => '用户标识，设置为userOpenId或userUnionId。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'rV/XSgPuxZjx/hN3iw8U+e8ou***lk1r43LWcVW6fvY1Rr4sEPFodpnA==',
                            ],
                            'OrganizationId' => [
                                'description' => '组织ID，如果IdType为UNION_ID时必填。',
                                'type' => 'string',
                                'required' => false,
                                'example' => '123',
                            ],
                        ],
                        'required' => false,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Result<List<HotelControlTemplateLocationCategoryResp>>',
                        'description' => '返回结果对象',
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'title' => '调用返回码，除约定的SUCCESS_CODE外，其余由服务提供者自定义',
                                'description' => '调用返回码，200表示成功',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'Result' => [
                                'title' => '服务的实际返回结果',
                                'description' => '服务的实际返回结果',
                                'type' => 'array',
                                'items' => [
                                    'description' => '设备状态信息',
                                    'type' => 'object',
                                    'additionalProperties' => [
                                        'type' => 'string',
                                        'example' => 'value',
                                        'description' => '设备状态信息',
                                    ],
                                ],
                            ],
                            'Message' => [
                                'title' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                                'description' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                            'RequestId' => [
                                'description' => '请求id',
                                'type' => 'string',
                                'example' => 'fdsgrefds',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'AliGenie.GetDeviceTag.InvalidParameter',
                        'errorMessage' => 'The request parameter is invalid.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'AliGenie.Public.InternalError',
                        'errorMessage' => 'An internal error occurred.',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": 200,\\n  \\"Result\\": [\\n    {\\n      \\"key\\": \\"value\\"\\n    }\\n  ],\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"fdsgrefds\\"\\n}","type":"json"}]',
            'title' => '查询客控设备状态',
        ],
        'ListHotelControlDevice' => [
            'summary' => '酒店设备列表',
            'path' => '/v1.0/ip/listHotelControlDevice',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'https',
                'http',
            ],
            'security' => [
                [
                    'AliGenie_Auth_SPI' => [],
                ],
            ],
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'UserInfo',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'EncodeType' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'EncodeKey' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'IdType' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'Id' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'OrganizationId' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Result<List<HotelControlTemplateLocationCategoryResp>>',
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'title' => '调用返回码，除约定的SUCCESS_CODE外，其余由服务提供者自定义',
                                'type' => 'integer',
                                'format' => 'int32',
                            ],
                            'Result' => [
                                'title' => '服务的实际返回结果',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'additionalProperties' => [
                                        'type' => 'string',
                                    ],
                                ],
                            ],
                            'Message' => [
                                'title' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                                'type' => 'string',
                            ],
                            'RequestId' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'AliGenie.GetDeviceTag.InvalidParameter',
                        'errorMessage' => 'The request parameter is invalid.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'AliGenie.Public.InternalError',
                        'errorMessage' => 'An internal error occurred.',
                    ],
                ],
            ],
            'responseDemo' => '',
        ],
        'DeviceControl' => [
            'summary' => '酒店客控设备控制，可控制例如灯、空调、窗帘等房间内的客控设备',
            'path' => '/v1.0/ip/deviceControl',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'https',
                'http',
            ],
            'security' => [
                [
                    'AliGenie_Auth_SPI' => [],
                ],
            ],
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'Payload',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'description' => '业务参数',
                        'type' => 'object',
                        'properties' => [
                            'UserId' => [
                                'title' => '',
                                'type' => 'string',
                            ],
                            'Location' => [
                                'description' => '位置，例如room(房间)，livingroom(客厅)等',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'room',
                                'title' => '位置，例如room(房间)，livingroom(客厅)等',
                            ],
                            'Category' => [
                                'description' => '客控设备品类，例如aircondition(空调)，light(灯)等',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'aircondition',
                                'title' => '客控设备品类，例如aircondition(空调)，light(灯)等',
                            ],
                            'Cmd' => [
                                'description' => '指令名称，例如open，close，详细支持指令见酒店行业对接文档',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'open',
                                'title' => '指令名称，例如open，close，详细支持指令见酒店行业对接文档',
                            ],
                            'Properties' => [
                                'description' => '可选配置，执行部分指令时需要附加的参数，例如设置空调温度时，需要附加需要调到的温度值，详细参数见酒店行业对接文档',
                                'type' => 'object',
                                'required' => false,
                                'additionalProperties' => [
                                    'type' => 'string',
                                    'example' => 'value',
                                    'description' => '可选配置，执行部分指令时需要附加的参数，例如设置空调温度时，需要附加需要调到的温度值，详细参数见酒店行业对接文档',
                                    'title' => '可选配置，执行部分指令时需要附加的参数，例如设置空调温度时，需要附加需要调到的温度值，详细参数见酒店行业对接文档',
                                ],
                                'title' => '可选配置，执行部分指令时需要附加的参数，例如设置空调温度时，需要附加需要调到的温度值，详细参数见酒店行业对接文档',
                            ],
                            'ExtendInfo' => [
                                'description' => '扩展信息，预留字段',
                                'type' => 'string',
                                'required' => false,
                                'example' => '{}',
                                'title' => '扩展信息，预留字段',
                            ],
                            'DeviceNumber' => [
                                'description' => '设备编号，即在天猫精灵行业管理平台房型客控品类设置下设备的序列号',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'air_condition',
                                'title' => '设备编号，即在天猫精灵行业管理平台房型客控品类设置下设备的序列号',
                            ],
                        ],
                        'required' => false,
                        'title' => '业务参数',
                    ],
                ],
                [
                    'name' => 'UserInfo',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'description' => '用户标识信息',
                        'type' => 'object',
                        'properties' => [
                            'EncodeType' => [
                                'description' => '编码类型，此处填写 **HOTEL**。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'HOTEL',
                                'title' => '编码类型，此处填写 **HOTEL**。',
                            ],
                            'EncodeKey' => [
                                'description' => '编码类型对应的值，此处填写该酒店应用ID。请在天猫精灵行业管理平台查看。',
                                'type' => 'string',
                                'required' => true,
                                'example' => '123',
                                'title' => '编码类型对应的值，此处填写该酒店应用ID。请在天猫精灵行业管理平台查看。',
                            ],
                            'IdType' => [
                                'description' => '用户Id的类型 '."\n"
                                    .'- OPEN_ID：默认的用户ID标识 '."\n"
                                    .'- UNION_ID: 组织维度的用户ID标识，在猫精技能应用开放平台申请过组织后才会有',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'OPEN_ID',
                                'title' => '用户Id的类型'."\n"
                                    ."\n"
                                    .'- OPEN_ID：默认的用户ID标识。'."\n"
                                    .'- UNION_ID: 组织维度的用户ID标识，需要提前在开放平台申请组织。',
                            ],
                            'Id' => [
                                'description' => '用户标识，设置为userOpenId或userUnionId。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'HOFF****my7Iw=',
                                'title' => '用户标识，设置为userOpenId或userUnionId。',
                            ],
                            'OrganizationId' => [
                                'description' => '组织ID，如果IdType为UNION_ID时必填',
                                'type' => 'string',
                                'required' => false,
                                'example' => '1**2',
                                'title' => '组织ID，如果IdType为UNION_ID时必填。',
                            ],
                        ],
                        'required' => false,
                        'title' => '用户标识信息',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => '返回结果对象',
                        'description' => '返回结果对象',
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'title' => '调用返回码，200表示成功',
                                'description' => '调用返回码，200表示成功',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'Result' => [
                                'title' => '服务的实际返回结果',
                                'description' => '服务的实际返回结果',
                                'type' => 'object',
                                'properties' => [
                                    'Status' => [
                                        'description' => '业务执行结果状态，200为执行成功',
                                        'type' => 'string',
                                        'example' => '200',
                                        'title' => '业务执行结果状态，200为执行成功',
                                    ],
                                ],
                            ],
                            'Message' => [
                                'title' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                                'description' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                            'RequestId' => [
                                'description' => '请求id',
                                'type' => 'string',
                                'example' => '43***28C-A810-5***-8747-EC226A086881',
                                'title' => '请求id',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'AliGenie.GetDeviceTag.InvalidParameter',
                        'errorMessage' => 'The request parameter is invalid.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": 200,\\n  \\"Result\\": {\\n    \\"Status\\": \\"200\\"\\n  },\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"43***28C-A810-5***-8747-EC226A086881\\"\\n}","errorExample":""},{"type":"xml","example":"<DeviceControlResponse>\\n    <Code>200</Code>\\n    <Result>\\n        <Status>200</Status>\\n    </Result>\\n    <Message>success</Message>\\n    <RequestId>43***28C-A810-5***-8747-EC226A086881</RequestId>\\n</DeviceControlResponse>","errorExample":""}]',
            'title' => '酒店客控-设备控制',
        ],
        'ListHotelSceneItem' => [
            'summary' => '查询酒店场景服务项列表，如物品服务的服务项列表',
            'path' => '/v1.0/ip/listHotelSceneItem',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'https',
                'http',
            ],
            'security' => [
                [
                    'AliGenie_Auth_SPI' => [],
                ],
            ],
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'Payload',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'title' => '场景服务payload',
                        'description' => '场景服务payload',
                        'type' => 'object',
                        'properties' => [
                            'UserId' => [
                                'title' => '用户ID',
                                'type' => 'string',
                                'required' => true,
                                'docRequired' => true,
                                'example' => '1345480696877233314',
                            ],
                            'Type' => [
                                'title' => '场景服务分类',
                                'description' => '场景服务分类',
                                'type' => 'string',
                                'required' => true,
                                'docRequired' => true,
                                'example' => 'GOODS',
                            ],
                        ],
                        'required' => true,
                        'docRequired' => true,
                    ],
                ],
                [
                    'name' => 'UserInfo',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'title' => '用户信息',
                        'description' => '用户信息',
                        'type' => 'object',
                        'properties' => [
                            'EncodeType' => [
                                'type' => 'string',
                                'required' => true,
                                'docRequired' => true,
                                'example' => 'PROJECT_ID',
                            ],
                            'EncodeKey' => [
                                'type' => 'string',
                                'required' => true,
                                'docRequired' => true,
                                'example' => '1248494721591392955',
                            ],
                            'IdType' => [
                                'type' => 'string',
                                'required' => true,
                                'docRequired' => true,
                                'example' => 'OPEN_ID',
                            ],
                            'Id' => [
                                'type' => 'string',
                                'required' => true,
                                'docRequired' => true,
                                'example' => 'mFU6VtVU+pgA8lx6rYMo7SPl11t+8b+8ALrn10MIPEdpK/HI9wELAEppYhPI1cYRDa4og8AMjAEBZKbLUwFjFA==',
                            ],
                            'OrganizationId' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                        'required' => true,
                        'docRequired' => true,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'PageResult<ListItemResponse>',
                        'description' => 'PageResult<ListItemResponse>',
                        'type' => 'object',
                        'properties' => [
                            'Page' => [
                                'title' => '分页结果',
                                'description' => '分页结果',
                                'type' => 'object',
                                'properties' => [
                                    'PageNumber' => [
                                        'title' => '第几页',
                                        'description' => '第几页',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '1',
                                    ],
                                    'PageSize' => [
                                        'title' => '每页多少条',
                                        'description' => '每页多少条',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '10',
                                    ],
                                    'Total' => [
                                        'title' => '共多少条数据',
                                        'description' => '共多少条数据',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '12',
                                    ],
                                    'TotalPage' => [
                                        'title' => '共多少页',
                                        'description' => '共多少页',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '6',
                                    ],
                                    'HasNext' => [
                                        'title' => '是否有下一页',
                                        'description' => '是否有下一页',
                                        'type' => 'boolean',
                                    ],
                                ],
                            ],
                            'Code' => [
                                'title' => '状态码',
                                'description' => '状态码',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'Result' => [
                                'title' => '服务的实际返回结果',
                                'description' => '服务的实际返回结果',
                                'type' => 'object',
                                'properties' => [
                                    'SecondCategoryList' => [
                                        'title' => '服务分类list',
                                        'description' => '服务分类list',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'SecondCategoryName' => [
                                                    'title' => '分类名称',
                                                    'description' => '分类名称',
                                                    'type' => 'string',
                                                    'example' => '客用品类',
                                                ],
                                                'ItemList' => [
                                                    'type' => 'array',
                                                    'items' => [
                                                        'type' => 'object',
                                                        'properties' => [
                                                            'Id' => [
                                                                'title' => '物品ID',
                                                                'description' => '物品ID',
                                                                'type' => 'string',
                                                                'example' => '152860',
                                                            ],
                                                            'Type' => [
                                                                'title' => '物品分类',
                                                                'description' => '物品分类',
                                                                'type' => 'string',
                                                                'example' => 'GOODS',
                                                            ],
                                                            'Category' => [
                                                                'title' => '物品二级分类',
                                                                'description' => '物品二级分类',
                                                                'type' => 'string',
                                                                'example' => '客用品类',
                                                            ],
                                                            'Name' => [
                                                                'title' => '物品名称',
                                                                'description' => '物品名称',
                                                                'type' => 'string',
                                                                'example' => '棉签',
                                                            ],
                                                            'Status' => [
                                                                'title' => '物品状态',
                                                                'description' => '物品状态',
                                                                'type' => 'string',
                                                                'example' => '已添加',
                                                            ],
                                                            'Icon' => [
                                                                'title' => '物品icon',
                                                                'description' => '物品icon',
                                                                'type' => 'string',
                                                                'example' => 'https://ailabsaicloudservice.alicdn.com/hotel/icon/jiudianmianban_fuwushangpintu/wupin/keyongpinlei/mianqian.png',
                                                            ],
                                                            'Price' => [
                                                                'title' => '物品价格',
                                                                'description' => '物品价格',
                                                                'type' => 'integer',
                                                                'format' => 'int64',
                                                                'example' => '1',
                                                            ],
                                                            'ResidueLimit' => [
                                                                'title' => '剩余下单数量'."\n"
                                                                    .' -1表示 不限制 0表示无剩余下单量 >0为可下单的数量',
                                                                'description' => '剩余下单数量'."\n"
                                                                    .' -1表示 不限制 0表示无剩余下单量 >0为可下单的数量',
                                                                'type' => 'integer',
                                                                'format' => 'int64',
                                                            ],
                                                        ],
                                                    ],
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                            'Message' => [
                                'title' => '附加信息',
                                'description' => '附加信息',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                            'RequestId' => [
                                'title' => '请求ID',
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => 'CEADB586-51CB-1B6B-95BD-AB85A7A08E97',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'AliGenie.GetDeviceTag.InvalidParameter',
                        'errorMessage' => 'The request parameter is invalid.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'AliGenie.Public.InternalError',
                        'errorMessage' => 'An internal error occurred.',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Page\\": {\\n    \\"PageNumber\\": 1,\\n    \\"PageSize\\": 10,\\n    \\"Total\\": 12,\\n    \\"TotalPage\\": 6,\\n    \\"HasNext\\": true\\n  },\\n  \\"Code\\": 200,\\n  \\"Result\\": {\\n    \\"SecondCategoryList\\": [\\n      {\\n        \\"SecondCategoryName\\": \\"客用品类\\",\\n        \\"ItemList\\": [\\n          {\\n            \\"Id\\": \\"152860\\",\\n            \\"Type\\": \\"GOODS\\",\\n            \\"Category\\": \\"客用品类\\",\\n            \\"Name\\": \\"棉签\\",\\n            \\"Status\\": \\"已添加\\",\\n            \\"Icon\\": \\"https://ailabsaicloudservice.alicdn.com/hotel/icon/jiudianmianban_fuwushangpintu/wupin/keyongpinlei/mianqian.png\\",\\n            \\"Price\\": 1,\\n            \\"ResidueLimit\\": 0\\n          }\\n        ]\\n      }\\n    ]\\n  },\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"CEADB586-51CB-1B6B-95BD-AB85A7A08E97\\"\\n}","type":"json"}]',
            'title' => '查询酒店场景服务项列表',
            'description' => '查询酒店场景服务项列表，如物品服务的服务项列表',
        ],
        'ListHotelServiceCategory' => [
            'summary' => '获取酒店服务分类，例如酒店服务于酒店预定下的各个分类',
            'path' => '/v1.0/ip/listHotelServiceCategory',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'https',
                'http',
            ],
            'security' => [
                [
                    'AliGenie_Auth_SPI' => [],
                ],
            ],
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'Payload',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'title' => '服务分类',
                        'description' => '服务分类',
                        'type' => 'object',
                        'properties' => [
                            'Type' => [
                                'title' => '服务分类类型',
                                'description' => '服务分类类型',
                                'type' => 'string',
                                'required' => true,
                                'docRequired' => true,
                                'example' => 'HOTEL_SERVICE',
                            ],
                        ],
                        'required' => true,
                        'docRequired' => true,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Result<List<SceneServiceCategory>>',
                        'description' => 'Result<List<SceneServiceCategory>>',
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'title' => '状态码',
                                'description' => '状态码',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'Result' => [
                                'title' => '服务的实际返回结果',
                                'description' => '服务的实际返回结果',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'Type' => [
                                            'title' => '服务分类类型',
                                            'description' => '服务分类类型',
                                            'type' => 'string',
                                            'example' => 'HOTEL_SERVICE',
                                        ],
                                        'Code' => [
                                            'title' => '服务分类code',
                                            'description' => '服务分类code',
                                            'type' => 'string',
                                            'example' => 'GOODS',
                                        ],
                                        'Name' => [
                                            'title' => '服务分类名称',
                                            'description' => '服务分类名称',
                                            'type' => 'string',
                                            'example' => '物品添加',
                                        ],
                                        'Desc' => [
                                            'title' => '服务分类描述',
                                            'description' => '服务分类描述',
                                            'type' => 'string',
                                            'example' => '生活及洗漱用品',
                                        ],
                                        'Icon' => [
                                            'title' => '服务分类icon',
                                            'description' => '服务分类icon',
                                            'type' => 'string',
                                            'example' => 'https://ailabsaicloudservice.alicdn.com/hotel/icon/changjingfenlei/wupintianjia.png',
                                        ],
                                    ],
                                ],
                            ],
                            'Message' => [
                                'title' => '附加信息',
                                'description' => '附加信息',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                            'RequestId' => [
                                'title' => '请求ID',
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '5373C821-65D2-1764-B9F9-951914937FF5',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'AliGenie.GetDeviceTag.InvalidParameter',
                        'errorMessage' => 'The request parameter is invalid.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'AliGenie.Public.InternalError',
                        'errorMessage' => 'An internal error occurred.',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": 200,\\n  \\"Result\\": [\\n    {\\n      \\"Type\\": \\"HOTEL_SERVICE\\",\\n      \\"Code\\": \\"GOODS\\",\\n      \\"Name\\": \\"物品添加\\",\\n      \\"Desc\\": \\"生活及洗漱用品\\",\\n      \\"Icon\\": \\"https://ailabsaicloudservice.alicdn.com/hotel/icon/changjingfenlei/wupintianjia.png\\"\\n    }\\n  ],\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"5373C821-65D2-1764-B9F9-951914937FF5\\"\\n}","type":"json"}]',
            'title' => '获取酒店服务分类',
            'description' => '获取酒店服务分类，例如酒店服务于酒店预定下的各个分类',
        ],
        'GetHotelOrderDetail' => [
            'summary' => '获取酒店订单详情，例如无屏、维修、餐饮等',
            'path' => '/v1.0/ip/getHotelOrderDetail',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'AliGenie_Auth_SPI' => [],
                ],
            ],
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'Payload',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'title' => '订单详情payload',
                        'description' => '订单详情payload',
                        'type' => 'object',
                        'properties' => [
                            'OrderNo' => [
                                'title' => '订单号',
                                'description' => '订单号',
                                'type' => 'string',
                                'required' => true,
                                'docRequired' => true,
                                'example' => '20220714150702000168270112410630',
                            ],
                        ],
                        'required' => true,
                        'docRequired' => true,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Result<List<HotelOrderDetail>>',
                        'description' => 'Result<List<HotelOrderDetail>>',
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'title' => '状态码',
                                'description' => '状态码',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'Result' => [
                                'title' => '服务的实际返回结果',
                                'description' => '服务的实际返回结果',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'Name' => [
                                            'title' => '物品名称',
                                            'description' => '物品名称',
                                            'type' => 'string',
                                            'example' => '窗帘',
                                        ],
                                        'ApplyAmt' => [
                                            'title' => '物品金额',
                                            'description' => '物品金额',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '200',
                                        ],
                                        'Quantity' => [
                                            'title' => '物品数量',
                                            'description' => '物品数量',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1',
                                        ],
                                        'ItemUrl' => [
                                            'title' => '物品icon',
                                            'description' => '物品icon',
                                            'type' => 'string',
                                            'example' => 'https://ailabsaicloudservice.alicdn.com/hotel/icon/jiudianmianban_fuwushangpintu/weixiu/dianqilei/chuanglian.png',
                                        ],
                                        'GmtCreate' => [
                                            'title' => '创建时间',
                                            'description' => '创建时间',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1659952892000',
                                        ],
                                    ],
                                ],
                            ],
                            'Message' => [
                                'title' => '附加信息',
                                'description' => '附加信息',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                            'RequestId' => [
                                'title' => '请求ID',
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '6F579407-13C4-1708-AFA2-B657BE5FE8F5',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'AliGenie.GetDeviceTag.InvalidParameter',
                        'errorMessage' => 'The request parameter is invalid.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'AliGenie.Public.InternalError',
                        'errorMessage' => 'An internal error occurred.',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": 200,\\n  \\"Result\\": [\\n    {\\n      \\"Name\\": \\"窗帘\\",\\n      \\"ApplyAmt\\": 200,\\n      \\"Quantity\\": 1,\\n      \\"ItemUrl\\": \\"https://ailabsaicloudservice.alicdn.com/hotel/icon/jiudianmianban_fuwushangpintu/weixiu/dianqilei/chuanglian.png\\",\\n      \\"GmtCreate\\": 1659952892000\\n    }\\n  ],\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"6F579407-13C4-1708-AFA2-B657BE5FE8F5\\"\\n}","type":"json"}]',
            'title' => '获取订单详情',
            'description' => '获取酒店订单详情，例如无屏、维修、餐饮等',
        ],
        'ListHotelOrder' => [
            'summary' => '查询设备上的订单列表',
            'path' => '/v1.0/ip/listHotelOrder',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'AliGenie_Auth_SPI' => [],
                ],
            ],
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'Payload',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'title' => '酒店订单列表payload',
                        'description' => '酒店订单列表payload',
                        'type' => 'object',
                        'properties' => [
                            'UserId' => [
                                'title' => '用户ID',
                                'type' => 'string',
                                'required' => true,
                                'docRequired' => true,
                                'example' => '1345480696877233314',
                            ],
                            'Page' => [
                                'title' => '分页参数',
                                'description' => '分页参数',
                                'type' => 'object',
                                'properties' => [
                                    'PageNumber' => [
                                        'title' => '第几页',
                                        'description' => '第几页',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'required' => true,
                                        'docRequired' => true,
                                        'example' => '1',
                                    ],
                                    'PageSize' => [
                                        'title' => '每页多少条数据',
                                        'description' => '每页多少条数据',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'required' => true,
                                        'docRequired' => true,
                                        'example' => '10',
                                    ],
                                ],
                                'required' => true,
                                'docRequired' => true,
                            ],
                        ],
                        'required' => true,
                        'docRequired' => true,
                    ],
                ],
                [
                    'name' => 'UserInfo',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'title' => '用户信息',
                        'description' => '用户信息',
                        'type' => 'object',
                        'properties' => [
                            'EncodeType' => [
                                'type' => 'string',
                                'required' => true,
                                'docRequired' => true,
                                'example' => 'PROJECT_ID',
                            ],
                            'EncodeKey' => [
                                'type' => 'string',
                                'required' => true,
                                'docRequired' => true,
                                'example' => '1248494721591392955',
                            ],
                            'IdType' => [
                                'type' => 'string',
                                'required' => true,
                                'docRequired' => true,
                                'example' => 'OPEN_ID',
                            ],
                            'Id' => [
                                'type' => 'string',
                                'required' => true,
                                'docRequired' => true,
                                'example' => 'mFU6VtVU+pgA8lx6rYMo7SPl11t+8b+8ALrn10MIPEdpK/HI9wELAEppYhPI1cYRDa4og8AMjAEBZKbLUwFjFA==',
                            ],
                            'OrganizationId' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                        'required' => true,
                        'docRequired' => true,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'PageResult<List<HotelOrderListResp>>',
                        'description' => 'PageResult<List<HotelOrderListResp>>',
                        'type' => 'object',
                        'properties' => [
                            'Page' => [
                                'title' => '分页结果',
                                'description' => '分页结果',
                                'type' => 'object',
                                'properties' => [
                                    'PageNumber' => [
                                        'title' => '第几页',
                                        'description' => '第几页',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '1',
                                    ],
                                    'PageSize' => [
                                        'title' => '每页多少条数据',
                                        'description' => '每页多少条数据',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '10',
                                    ],
                                    'Total' => [
                                        'title' => '共多少条数据',
                                        'description' => '共多少条数据',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '21',
                                    ],
                                    'TotalPage' => [
                                        'title' => '共多少页',
                                        'description' => '共多少页',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '7',
                                    ],
                                    'HasNext' => [
                                        'title' => '是否有下一页',
                                        'description' => '是否有下一页',
                                        'type' => 'boolean',
                                    ],
                                ],
                            ],
                            'Code' => [
                                'title' => '状态码',
                                'description' => '状态码',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'Result' => [
                                'title' => '服务的实际返回结果',
                                'description' => '服务的实际返回结果',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'RoomNo' => [
                                            'title' => '房间号',
                                            'description' => '房间号',
                                            'type' => 'string',
                                            'example' => '2001',
                                        ],
                                        'OrderNo' => [
                                            'title' => '订单号',
                                            'description' => '订单号',
                                            'type' => 'string',
                                            'example' => '20220808180132000114508555527711',
                                        ],
                                        'Quantity' => [
                                            'title' => '共多少个物品',
                                            'description' => '共多少个物品',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '12',
                                        ],
                                        'ApplyAmt' => [
                                            'title' => '共需要多少钱',
                                            'description' => '共需要多少钱',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '21.5',
                                        ],
                                        'Status' => [
                                            'title' => '订单状态',
                                            'description' => '订单状态',
                                            'type' => 'string',
                                            'example' => 'INIT',
                                        ],
                                        'GmtCreate' => [
                                            'title' => '订单创建时间',
                                            'description' => '订单创建时间',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1659952892000',
                                        ],
                                        'Type' => [
                                            'title' => '订单商品所属分类',
                                            'description' => '订单商品所属分类',
                                            'type' => 'string',
                                            'example' => 'REPAIR',
                                        ],
                                        'TypeName' => [
                                            'title' => '订单物品所属分类名称',
                                            'description' => '订单物品所属分类名称',
                                            'type' => 'string',
                                            'example' => '设备维修',
                                        ],
                                        'TypeIconUrl' => [
                                            'title' => '订单物品所属分类icon',
                                            'description' => '订单物品所属分类icon',
                                            'type' => 'string',
                                            'example' => 'https://ailabsaicloudservice.alicdn.com/hotel/icon/changjingfenlei/shebeiweixiu.png',
                                        ],
                                    ],
                                ],
                            ],
                            'Message' => [
                                'title' => '附加信息',
                                'description' => '附加信息',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                            'RequestId' => [
                                'title' => '请求ID',
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '07F61FDA-606F-10A0-8ED0-C6CE62710A48',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'AliGenie.GetDeviceTag.InvalidParameter',
                        'errorMessage' => 'The request parameter is invalid.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'AliGenie.Public.InternalError',
                        'errorMessage' => 'An internal error occurred.',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Page\\": {\\n    \\"PageNumber\\": 1,\\n    \\"PageSize\\": 10,\\n    \\"Total\\": 21,\\n    \\"TotalPage\\": 7,\\n    \\"HasNext\\": true\\n  },\\n  \\"Code\\": 200,\\n  \\"Result\\": [\\n    {\\n      \\"RoomNo\\": \\"2001\\",\\n      \\"OrderNo\\": \\"20220808180132000114508555527711\\",\\n      \\"Quantity\\": 12,\\n      \\"ApplyAmt\\": 21.5,\\n      \\"Status\\": \\"INIT\\",\\n      \\"GmtCreate\\": 1659952892000,\\n      \\"Type\\": \\"REPAIR\\",\\n      \\"TypeName\\": \\"设备维修\\",\\n      \\"TypeIconUrl\\": \\"https://ailabsaicloudservice.alicdn.com/hotel/icon/changjingfenlei/shebeiweixiu.png\\"\\n    }\\n  ],\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"07F61FDA-606F-10A0-8ED0-C6CE62710A48\\"\\n}","type":"json"}]',
            'title' => '查询订单',
            'description' => '查询设备上的订单列表',
        ],
        'SubmitHotelOrder' => [
            'summary' => '提交订单，例如物品、预定餐饮等订单的提交',
            'path' => '/v1.0/ip/submitHotelOrder',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'AliGenie_Auth_SPI' => [],
                ],
            ],
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'operationType' => 'write',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'create',
            ],
            'parameters' => [
                [
                    'name' => 'Payload',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'title' => '提交订单payload',
                        'description' => '提交订单payload',
                        'type' => 'object',
                        'properties' => [
                            'UserId' => [
                                'title' => '用户ID',
                                'type' => 'string',
                                'required' => true,
                                'docRequired' => true,
                                'example' => '1345480696877233314',
                            ],
                            'Type' => [
                                'title' => '物品所属分类',
                                'description' => '物品所属分类',
                                'type' => 'string',
                                'required' => true,
                                'docRequired' => true,
                                'example' => 'GOODS',
                            ],
                            'ItemList' => [
                                'title' => '物品list',
                                'description' => '物品list',
                                'type' => 'array',
                                'items' => [
                                    'description' => '物品信息',
                                    'type' => 'object',
                                    'properties' => [
                                        'ItemId' => [
                                            'title' => '物品ID',
                                            'description' => '物品ID',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'required' => true,
                                            'docRequired' => true,
                                            'example' => '152860',
                                        ],
                                        'Quantity' => [
                                            'title' => '物品数量',
                                            'description' => '物品数量',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'required' => true,
                                            'docRequired' => true,
                                            'example' => '2',
                                        ],
                                    ],
                                    'required' => false,
                                ],
                                'required' => true,
                            ],
                        ],
                        'required' => true,
                        'docRequired' => true,
                    ],
                ],
                [
                    'name' => 'UserInfo',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'title' => '用户信息',
                        'description' => '用户信息',
                        'type' => 'object',
                        'properties' => [
                            'EncodeType' => [
                                'description' => '编码类型',
                                'type' => 'string',
                                'required' => true,
                                'docRequired' => true,
                                'example' => 'PROJECT_ID',
                            ],
                            'EncodeKey' => [
                                'description' => '编码键',
                                'type' => 'string',
                                'required' => true,
                                'docRequired' => true,
                                'example' => '1248494721591392955',
                            ],
                            'IdType' => [
                                'description' => 'id类型',
                                'type' => 'string',
                                'required' => true,
                                'docRequired' => true,
                                'example' => 'OPEN_ID',
                            ],
                            'Id' => [
                                'description' => 'id',
                                'type' => 'string',
                                'required' => true,
                                'docRequired' => true,
                                'example' => 'mFU6VtVU+pgA8lx6rYMo7SPl11t+8b+8ALrn10MIPEdpK/HI9wELAEppYhPI1cYRDa4og8AMjAEBZKbLUwFjFA==',
                            ],
                            'OrganizationId' => [
                                'description' => '组织id',
                                'type' => 'string',
                                'required' => false,
                                'example' => '""',
                            ],
                        ],
                        'required' => true,
                        'docRequired' => true,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Result<Boolean>',
                        'description' => 'Result<Boolean>',
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'title' => '状态码',
                                'description' => '状态码',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'Result' => [
                                'title' => '订单号',
                                'description' => '订单号',
                                'type' => 'string',
                                'example' => '20220809104752000114671478353329',
                            ],
                            'Message' => [
                                'title' => '附加信息',
                                'description' => '附加信息',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                            'RequestId' => [
                                'title' => '请求ID',
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => 'CCCF2E86-D9B5-12A6-AD25-8A06933D2B0F',
                            ],
                            'StatusCode' => [
                                'description' => '调用返回码，200标识成功',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'AliGenie.GetDeviceTag.InvalidParameter',
                        'errorMessage' => 'The request parameter is invalid.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'AliGenie.Public.InternalError',
                        'errorMessage' => 'An internal error occurred.',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": 200,\\n  \\"Result\\": \\"20220809104752000114671478353329\\",\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"CCCF2E86-D9B5-12A6-AD25-8A06933D2B0F\\",\\n  \\"StatusCode\\": 200\\n}","type":"json"}]',
            'title' => '提交订单',
            'description' => '提交订单，例如物品、预定餐饮等订单的提交',
        ],
        'GetHotelNotice' => [
            'summary' => '获取酒店通知',
            'path' => '/v1.0/ip/getHotelNotice',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'https',
                'http',
            ],
            'security' => [
                [
                    'AliGenie_Auth_SPI' => [],
                ],
            ],
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'UserInfo',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'title' => '用户信息',
                        'description' => '用户信息',
                        'type' => 'object',
                        'properties' => [
                            'EncodeType' => [
                                'description' => '编码类型，此处填写PROJECT_ID。'."\n"
                                    ."\n",
                                'type' => 'string',
                                'required' => false,
                                'example' => 'PROJECT_ID',
                            ],
                            'EncodeKey' => [
                                'description' => '编码类型对应的值，此处填写该产品所在项目的Project ID。请在天猫精灵AI平台的控制台中查看。',
                                'type' => 'string',
                                'required' => false,
                                'example' => '12**45',
                            ],
                            'IdType' => [
                                'description' => '设备Id的类型 ：'."\n"
                                    .'OPENID：默认的设备ID标识。'."\n"
                                    .'UNIONID: 组织维度的设备ID标识，需要提前在开放平台申请组织。'."\n"
                                    ."\n",
                                'type' => 'string',
                                'required' => false,
                                'example' => 'OPEN_ID',
                            ],
                            'Id' => [
                                'description' => '用户标识，填写userOpenId或userUnionId的值。',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'DAFE****ce3ej=',
                            ],
                            'OrganizationId' => [
                                'description' => '组织ID，如果IdType为UNION_ID时必填。'."\n"
                                    ."\n",
                                'type' => 'string',
                                'required' => false,
                                'example' => '1',
                            ],
                        ],
                        'required' => true,
                        'docRequired' => true,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Result<String>',
                        'description' => 'Result<String>',
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'title' => '状态码',
                                'description' => '状态码',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'Result' => [
                                'title' => '服务的实际返回结果',
                                'description' => '服务的实际返回结果',
                                'type' => 'string',
                                'example' => 'test notice...',
                            ],
                            'Message' => [
                                'title' => '附加信息',
                                'description' => '附加信息',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                            'RequestId' => [
                                'description' => 'RequestId',
                                'type' => 'string',
                                'example' => '73C67BD9-175A-1324-8202-9FAABBB3E6FA',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidParameter',
                        'errorMessage' => 'The request parameter is invalid',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": 200,\\n  \\"Result\\": \\"test notice...\\",\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"73C67BD9-175A-1324-8202-9FAABBB3E6FA\\"\\n}","type":"json"}]',
            'title' => '获取酒店通知',
        ],
        'GetHotelNoticeV2' => [
            'summary' => '获取酒店通知信息，包含通知标题和内容',
            'path' => '/v1.0/ip/getHotelNoticeV2',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'https',
                'http',
            ],
            'security' => [
                [
                    'AliGenie_Auth_SPI' => [],
                ],
            ],
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'UserInfo',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'title' => '用户信息',
                        'description' => '用户信息',
                        'type' => 'object',
                        'properties' => [
                            'EncodeType' => [
                                'description' => '编码类型，此处填写 HOTEL。',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'HOTEL',
                            ],
                            'EncodeKey' => [
                                'description' => '编码类型对应的值，此处填写该酒店应用ID。请在天猫精灵行业管理平台查看。',
                                'type' => 'string',
                                'required' => false,
                                'example' => '123',
                            ],
                            'IdType' => [
                                'description' => '用户Id的类型'."\n"
                                    .'- OPEN_ID：默认的用户ID标识。'."\n"
                                    .'- UNION_ID: 组织维度的用户ID标识，需要提前在开放平台申请组织。',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'OPEN_ID',
                            ],
                            'Id' => [
                                'description' => '用户标识，设置为userOpenId或userUnionId。',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'rV/XSgPuxZjx/hN3iw8U+e8ou***lk1r43LWcVW6fvY1Rr4sEPFodpnA==',
                            ],
                            'OrganizationId' => [
                                'description' => '组织ID，如果IdType为UNION_ID时必填。',
                                'type' => 'string',
                                'required' => false,
                                'example' => '123',
                            ],
                        ],
                        'required' => true,
                        'docRequired' => true,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Result<HotelNotice>',
                        'description' => 'Result<HotelNotice>',
                        'type' => 'object',
                        'properties' => [
                            'StatusCode' => [
                                'title' => '调用返回码，200标识成功',
                                'description' => '调用返回码，200标识成功',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'Result' => [
                                'title' => '服务的实际返回结果',
                                'description' => '服务的实际返回结果',
                                'type' => 'object',
                                'properties' => [
                                    'HotelId' => [
                                        'title' => '酒店id',
                                        'description' => '酒店id',
                                        'type' => 'string',
                                        'example' => 'a7***83',
                                    ],
                                    'Title' => [
                                        'title' => '酒店通知标题',
                                        'description' => '酒店通知标题',
                                        'type' => 'string',
                                        'example' => '欢迎入住智能酒店',
                                    ],
                                    'Content' => [
                                        'title' => '酒店通知内容',
                                        'description' => '酒店通知内容',
                                        'type' => 'string',
                                        'example' => '欢迎入住，我是您的智能语音助手',
                                    ],
                                ],
                            ],
                            'Message' => [
                                'title' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                                'description' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                            'RequestId' => [
                                'title' => '请求Id',
                                'description' => '请求Id',
                                'type' => 'string',
                                'example' => '0D0C***67DB',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidParameter',
                        'errorMessage' => 'The request parameter is invalid',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'ServerError',
                        'errorMessage' => 'internal server error',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"StatusCode\\": 200,\\n  \\"Result\\": {\\n    \\"HotelId\\": \\"a7***83\\",\\n    \\"Title\\": \\"欢迎入住智能酒店\\",\\n    \\"Content\\": \\"欢迎入住，我是您的智能语音助手\\"\\n  },\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"0D0C***67DB\\"\\n}","type":"json"}]',
            'title' => '获取酒店通知-包含标题',
        ],
        'GetHotelHomeBackImageAndModes' => [
            'summary' => '获取首页背景图和场景模式',
            'path' => '/v1.0/ip/getHotelHomeBackImageAndModes',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'https',
                'http',
            ],
            'security' => [
                [
                    'AliGenie_Auth_SPI' => [],
                ],
            ],
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'UserInfo',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'title' => '用户信息',
                        'type' => 'object',
                        'properties' => [
                            'EncodeType' => [
                                'type' => 'string',
                                'required' => true,
                                'docRequired' => true,
                                'example' => 'PROJECT_ID',
                            ],
                            'EncodeKey' => [
                                'type' => 'string',
                                'required' => true,
                                'docRequired' => true,
                                'example' => '1248494721591392955',
                            ],
                            'IdType' => [
                                'type' => 'string',
                                'required' => true,
                                'docRequired' => true,
                                'example' => 'OPEN_ID',
                            ],
                            'Id' => [
                                'type' => 'string',
                                'required' => true,
                                'docRequired' => true,
                                'example' => 'mFU6VtVU+pgA8lx6rYMo7SPl11t+8b+8ALrn10MIPEdpK/HI9wELAEppYhPI1cYRDa4og8AMjAEBZKbLUwFjFA==',
                            ],
                            'OrganizationId' => [
                                'type' => 'string',
                            ],
                        ],
                        'required' => true,
                        'docRequired' => true,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Result<HomePageBackImageAndModes>',
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'title' => '状态码',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'Result' => [
                                'title' => '服务的实际返回结果',
                                'type' => 'object',
                                'properties' => [
                                    'BackgroundImage' => [
                                        'title' => '背景图URL',
                                        'type' => 'string',
                                        'example' => 'https://ailabs.alibabausercontent.com/platform/3d4fe6d66ec49d9789635f66627f0339/welcome_audios/976210a6532150f49c2677a8b7dbc105/l6fspbhn.jpg',
                                    ],
                                    'HotelName' => [
                                        'title' => '酒店名称',
                                        'type' => 'string',
                                        'example' => '宣雍测试橙蜂酒店',
                                    ],
                                    'ModeList' => [
                                        'title' => '模式list',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'Code' => [
                                                    'title' => '模式code',
                                                    'type' => 'string',
                                                    'example' => 'romantic',
                                                ],
                                                'CnName' => [
                                                    'title' => '模式名称',
                                                    'type' => 'string',
                                                    'example' => '浪漫模式',
                                                ],
                                                'Icon' => [
                                                    'title' => '模式icon',
                                                    'type' => 'string',
                                                    'example' => 'https://ailabsaicloudservice.alicdn.com/hotel/icon/changjingmoshi/langman.png',
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                            'Message' => [
                                'title' => '附加信息',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                            'RequestId' => [
                                'title' => '请求ID',
                                'type' => 'string',
                                'example' => '394450FC-9035-1B7C-8829-BC88832473FC',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => '	AliGenie.GetDeviceTag.InvalidParameter',
                        'errorMessage' => 'The request parameter is invalid.',
                    ],
                ],
            ],
            'responseDemo' => '',
        ],
        'GetHotelSampleUtterances' => [
            'summary' => '获取推荐语料',
            'path' => '/v1.0/ip/getHotelSampleUtterances',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'https',
                'http',
            ],
            'security' => [
                [
                    'AliGenie_Auth_SPI' => [],
                ],
            ],
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'UserInfo',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'EncodeType' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'EncodeKey' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'IdType' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'Id' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'OrganizationId' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Result<List<HotelControlTemplateLocationCategoryResp>>',
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'title' => '调用返回码，除约定的SUCCESS_CODE外，其余由服务提供者自定义',
                                'type' => 'integer',
                                'format' => 'int32',
                            ],
                            'Result' => [
                                'title' => '服务的实际返回结果',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'string',
                                ],
                            ],
                            'Message' => [
                                'title' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                                'type' => 'string',
                            ],
                            'RequestId' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'AliGenie.GetDeviceTag.InvalidParameter',
                        'errorMessage' => 'The request parameter is invalid.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'AliGenie.Public.InternalError',
                        'errorMessage' => 'An internal error occurred.',
                    ],
                ],
            ],
            'responseDemo' => '',
        ],
        'GetHotelScreenSaver' => [
            'summary' => '获取屏保信息，如屏保样式等信息',
            'path' => '/v1.0/ip/getHotelScreenSaver',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'https',
                'http',
            ],
            'security' => [
                [
                    'AliGenie_Auth_SPI' => [],
                ],
            ],
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'UserInfo',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'title' => '用户信息',
                        'description' => '用户信息',
                        'type' => 'object',
                        'properties' => [
                            'EncodeType' => [
                                'type' => 'string',
                                'required' => true,
                                'docRequired' => true,
                                'example' => 'PROJECT_ID',
                            ],
                            'EncodeKey' => [
                                'type' => 'string',
                                'required' => true,
                                'docRequired' => true,
                                'example' => '1248494721591392955',
                            ],
                            'IdType' => [
                                'type' => 'string',
                                'required' => true,
                                'docRequired' => true,
                                'example' => 'OPEN_ID',
                            ],
                            'Id' => [
                                'type' => 'string',
                                'required' => true,
                                'docRequired' => true,
                                'example' => 'mFU6VtVU+pgA8lx6rYMo7SPl11t+8b+8ALrn10MIPEdpK/HI9wELAEppYhPI1cYRDa4og8AMjAEBZKbLUwFjFA==',
                            ],
                            'OrganizationId' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                        'required' => true,
                        'docRequired' => true,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Result<HotelScreenSaver>',
                        'description' => 'Result<HotelScreenSaver>',
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'title' => '状态码',
                                'description' => '状态码',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'Result' => [
                                'title' => '服务的实际返回结果',
                                'description' => '服务的实际返回结果',
                                'type' => 'object',
                                'properties' => [
                                    'StyleCode' => [
                                        'title' => '屏保样式code',
                                        'description' => '屏保样式code',
                                        'type' => 'string',
                                        'example' => 'common-weather',
                                    ],
                                    'PicUrl' => [
                                        'title' => '屏保图片',
                                        'description' => '屏保图片',
                                        'type' => 'string',
                                        'example' => 'https://ailabs.alibabausercontent.com/platform/3d4fe6d66ec49d9789635f66627f0339/welcome_audios/976210a6532150f49c2677a8b7dbc105/l6fspbhd.jpg',
                                    ],
                                ],
                            ],
                            'Message' => [
                                'title' => '附加信息',
                                'description' => '附加信息',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                            'RequestId' => [
                                'title' => '请求ID',
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '5F0467E1-19F2-1757-B6D0-B79917BA2E81',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidParameter',
                        'errorMessage' => 'The request parameter is invalid.',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": 200,\\n  \\"Result\\": {\\n    \\"StyleCode\\": \\"common-weather\\",\\n    \\"PicUrl\\": \\"https://ailabs.alibabausercontent.com/platform/3d4fe6d66ec49d9789635f66627f0339/welcome_audios/976210a6532150f49c2677a8b7dbc105/l6fspbhd.jpg\\"\\n  },\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"5F0467E1-19F2-1757-B6D0-B79917BA2E81\\"\\n}","type":"json"}]',
            'title' => '获取屏保信息',
            'description' => '获取屏保信息，如屏保样式等信息',
        ],
        'RoomCheckOut' => [
            'summary' => '设备面板点击退房，非正式退房，仅发送工单并给用户提示去前台退房',
            'path' => '/v1.0/ip/roomCheckOut',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'https',
                'http',
            ],
            'security' => [
                [
                    'AliGenie_Auth_SPI' => [],
                ],
            ],
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'create',
            ],
            'parameters' => [
                [
                    'name' => 'UserInfo',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'description' => '用户标识信息',
                        'type' => 'object',
                        'properties' => [
                            'EncodeType' => [
                                'description' => '编码类型，此处填写 **HOTEL**。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'HOTEL',
                            ],
                            'EncodeKey' => [
                                'description' => '编码类型对应的值，此处填写该酒店应用ID。请在天猫精灵行业管理平台查看。',
                                'type' => 'string',
                                'required' => true,
                                'example' => '123',
                            ],
                            'IdType' => [
                                'description' => '用户Id的类型'."\n"
                                    ."\n"
                                    .'- OPEN_ID：默认的用户ID标识。'."\n"
                                    .'- UNION_ID: 组织维度的用户ID标识，需要提前在开放平台申请组织。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'OPEN_ID',
                            ],
                            'Id' => [
                                'description' => '用户标识，设置为userOpenId或userUnionId。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'rV/XSgPuxZjx/hN3iw8U+e8ou***lk1r43LWcVW6fvY1Rr4sEPFodpnA==',
                            ],
                            'OrganizationId' => [
                                'description' => '组织ID，如果IdType为UNION_ID时必填。',
                                'type' => 'string',
                                'required' => false,
                                'example' => '123',
                            ],
                        ],
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'DeviceInfo',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'description' => '设备标识信息',
                        'type' => 'object',
                        'properties' => [
                            'EncodeType' => [
                                'description' => '编码类型，此处填写 **HOTEL**。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'HOTEL',
                            ],
                            'EncodeKey' => [
                                'description' => '编码类型对应的值，此处填写该酒店应用ID。请在天猫精灵行业管理平台查看。',
                                'type' => 'string',
                                'required' => true,
                                'example' => '123',
                            ],
                            'IdType' => [
                                'description' => '设备Id的类型'."\n"
                                    ."\n"
                                    .'- OPEN_ID：默认的设备ID标识。'."\n"
                                    .'- UNION_ID: 组织维度的设备ID标识，需要提前在开放平台申请组织。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'OPEN_ID',
                            ],
                            'Id' => [
                                'description' => '用户标识，设置为deviceOpenId或deviceUnionId。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'rV/XSgPuxZjx/hN3iw8U+e8ou***lk1r43LWcVW6fvY1Rr4sEPFodpnA==',
                            ],
                            'OrganizationId' => [
                                'description' => '组织ID，如果IdType为UNION_ID时必填。',
                                'type' => 'string',
                                'required' => false,
                                'example' => '123',
                            ],
                        ],
                        'required' => false,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Result<List<HotelControlTemplateLocationCategoryResp>>',
                        'description' => '返回结果对象',
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'title' => '调用返回码，除约定的SUCCESS_CODE外，其余由服务提供者自定义',
                                'description' => '调用返回码，200表示成功',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'Result' => [
                                'description' => '执行成功或失败',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'Message' => [
                                'title' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                                'description' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                            'RequestId' => [
                                'description' => '请求id',
                                'type' => 'string',
                                'example' => 'dsvrevd',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'AliGenie.GetDeviceTag.InvalidParameter',
                        'errorMessage' => 'The request parameter is invalid.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'AliGenie.Public.InternalError',
                        'errorMessage' => 'An internal error occurred.',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": 200,\\n  \\"Result\\": true,\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"dsvrevd\\"\\n}","type":"json"}]',
            'title' => '退房',
        ],
        'GetHotelContacts' => [
            'summary' => '获取酒店联系人',
            'path' => '/v1.0/ip/getHotelContacts',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'https',
                'http',
            ],
            'security' => [
                [
                    'AliGenie_Auth_SPI' => [],
                ],
            ],
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'UserInfo',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'description' => '用户标识信息',
                        'type' => 'object',
                        'properties' => [
                            'EncodeType' => [
                                'description' => '编码类型，此处填写 HOTEL。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'HOTEL',
                            ],
                            'EncodeKey' => [
                                'description' => '编码类型对应的值，此处填写该酒店应用ID。请在天猫精灵行业管理平台查看。',
                                'type' => 'string',
                                'required' => true,
                                'example' => '123',
                            ],
                            'IdType' => [
                                'description' => '用户Id的类型'."\n"
                                    .'- OPEN_ID：默认的用户ID标识。'."\n"
                                    .'- UNION_ID: 组织维度的用户ID标识，需要提前在开放平台申请组织。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'OPEN_ID',
                            ],
                            'Id' => [
                                'description' => '用户标识，设置为userOpenId或userUnionId。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'rV/XSgPuxZjx/hN3iw8U+e8ou***lk1r43LWcVW6fvY1Rr4sEPFodpnA==',
                            ],
                            'OrganizationId' => [
                                'description' => '组织ID，如果IdType为UNION_ID时必填。',
                                'type' => 'string',
                                'required' => false,
                                'example' => '123',
                            ],
                        ],
                        'required' => false,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Result<List<HotelCallContact>>',
                        'description' => 'Result<List<HotelCallContact>>',
                        'type' => 'object',
                        'properties' => [
                            'StatusCode' => [
                                'title' => '调用返回码，200标识成功',
                                'description' => '调用返回码，200标识成功',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'Result' => [
                                'title' => '服务的实际返回结果',
                                'description' => '服务的实际返回结果',
                                'type' => 'array',
                                'items' => [
                                    'description' => '联系人信息',
                                    'type' => 'object',
                                    'properties' => [
                                        'HotelId' => [
                                            'title' => '酒店id',
                                            'description' => '酒店id',
                                            'type' => 'string',
                                            'example' => 'cf24***96e7',
                                        ],
                                        'Type' => [
                                            'title' => '联系人类型，device：设备，group：分组',
                                            'description' => '联系人类型，device：设备，group：分组',
                                            'type' => 'string',
                                            'example' => 'group',
                                        ],
                                        'Uuid' => [
                                            'title' => '唯一标识',
                                            'description' => '唯一标识',
                                            'type' => 'string',
                                            'example' => '0862***A809',
                                        ],
                                        'Number' => [
                                            'title' => '号码',
                                            'description' => '号码',
                                            'type' => 'string',
                                            'example' => '101',
                                        ],
                                        'Name' => [
                                            'title' => '联系人名称',
                                            'description' => '联系人名称',
                                            'type' => 'string',
                                            'example' => '前台',
                                        ],
                                        'Icon' => [
                                            'title' => '图标',
                                            'description' => '图标',
                                            'type' => 'string',
                                            'example' => 'xxx.icon',
                                        ],
                                        'Status' => [
                                            'title' => '状态，1：可用，0：不可用',
                                            'description' => '状态，1：可用，0：不可用',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '1',
                                        ],
                                        'ExpireAt' => [
                                            'title' => '失效时间',
                                            'description' => '失效时间',
                                            'type' => 'string',
                                            'example' => '1649472283046',
                                        ],
                                    ],
                                ],
                            ],
                            'Message' => [
                                'title' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                                'description' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                            'RequestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '0EC7*726E',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidParameter',
                        'errorMessage' => 'The request parameter is invalid',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'ServerError',
                        'errorMessage' => 'internal server error',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"StatusCode\\": 200,\\n  \\"Result\\": [\\n    {\\n      \\"HotelId\\": \\"cf24***96e7\\",\\n      \\"Type\\": \\"group\\",\\n      \\"Uuid\\": \\"0862***A809\\",\\n      \\"Number\\": \\"101\\",\\n      \\"Name\\": \\"前台\\",\\n      \\"Icon\\": \\"xxx.icon\\",\\n      \\"Status\\": 1,\\n      \\"ExpireAt\\": \\"1649472283046\\"\\n    }\\n  ],\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"0EC7*726E\\"\\n}","type":"json"}]',
            'title' => '获取酒店联系人',
        ],
        'GetHotelContactByNumber' => [
            'summary' => '根据号码查询联系人信息',
            'path' => '/v1.0/ip/getHotelContactByNumber',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'https',
                'http',
            ],
            'security' => [
                [
                    'AliGenie_Auth_SPI' => [],
                ],
            ],
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'Number',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '号码',
                        'description' => '号码，房间号或者部门自定义的号码',
                        'type' => 'string',
                        'required' => true,
                        'example' => '101',
                    ],
                ],
                [
                    'name' => 'UserInfo',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'title' => '用户信息',
                        'description' => '用户信息',
                        'type' => 'object',
                        'properties' => [
                            'EncodeType' => [
                                'description' => '编码类型，此处填写 HOTEL。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'HOTEL',
                            ],
                            'EncodeKey' => [
                                'description' => '编码类型对应的值，此处填写该酒店应用ID。请在天猫精灵行业管理平台查看。',
                                'type' => 'string',
                                'required' => true,
                                'example' => '123',
                            ],
                            'IdType' => [
                                'description' => '用户Id的类型'."\n"
                                    .'- OPEN_ID：默认的用户ID标识。'."\n"
                                    .'- UNION_ID: 组织维度的用户ID标识，需要提前在开放平台申请组织。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'OPEN_ID',
                            ],
                            'Id' => [
                                'description' => '用户标识，设置为userOpenId或userUnionId。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'rV/XSgPuxZjx/hN3iw8U+e8ou***lk1r43LWcVW6fvY1Rr4sEPFodpnA==',
                            ],
                            'OrganizationId' => [
                                'description' => '组织ID，如果IdType为UNION_ID时必填。',
                                'type' => 'string',
                                'required' => false,
                                'example' => '123',
                            ],
                        ],
                        'required' => false,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Result<HotelCallContact>',
                        'description' => 'Result<HotelCallContact>',
                        'type' => 'object',
                        'properties' => [
                            'StatusCode' => [
                                'title' => '调用返回码，200标识成功',
                                'description' => '调用返回码，200标识成功',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'Result' => [
                                'title' => '服务的实际返回结果',
                                'description' => '服务的实际返回结果',
                                'type' => 'object',
                                'properties' => [
                                    'HotelId' => [
                                        'title' => '酒店id',
                                        'description' => '酒店id',
                                        'type' => 'string',
                                        'example' => 'a7***83',
                                    ],
                                    'Type' => [
                                        'title' => '联系人类型，device：设备，group：分组',
                                        'description' => '联系人类型，device：设备，group：分组',
                                        'type' => 'string',
                                        'example' => 'group',
                                    ],
                                    'Uuid' => [
                                        'title' => '唯一标识',
                                        'description' => '唯一标识',
                                        'type' => 'string',
                                        'example' => '2E57***D45F9',
                                    ],
                                    'Number' => [
                                        'title' => '号码',
                                        'description' => '号码',
                                        'type' => 'string',
                                        'example' => '101',
                                    ],
                                    'Name' => [
                                        'title' => '联系人名称',
                                        'description' => '联系人名称',
                                        'type' => 'string',
                                        'example' => '前台',
                                    ],
                                    'Icon' => [
                                        'title' => '图标',
                                        'description' => '图标',
                                        'type' => 'string',
                                        'example' => 'xxx.icon',
                                    ],
                                    'Status' => [
                                        'title' => '状态，1：可用，0：不可用',
                                        'description' => '状态，1：可用，0：不可用',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '1',
                                    ],
                                    'ExpireAt' => [
                                        'title' => '失效时间',
                                        'description' => '失效时间',
                                        'type' => 'string',
                                        'example' => '1649316479098',
                                    ],
                                ],
                            ],
                            'Message' => [
                                'title' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                                'description' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '0EC7*726E',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidParameter',
                        'errorMessage' => 'The request parameter is invalid',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'ServerError',
                        'errorMessage' => 'internal server error',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"StatusCode\\": 200,\\n  \\"Result\\": {\\n    \\"HotelId\\": \\"a7***83\\",\\n    \\"Type\\": \\"group\\",\\n    \\"Uuid\\": \\"2E57***D45F9\\",\\n    \\"Number\\": \\"101\\",\\n    \\"Name\\": \\"前台\\",\\n    \\"Icon\\": \\"xxx.icon\\",\\n    \\"Status\\": 1,\\n    \\"ExpireAt\\": \\"1649316479098\\"\\n  },\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"0EC7*726E\\"\\n}","type":"json"}]',
            'title' => '根据号码查询联系人',
        ],
        'GetHotelContactByGenieDevice' => [
            'summary' => '获取当前设备的通话信息',
            'path' => '/v1.0/ip/getHotelContactByGenieDevice',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'https',
                'http',
            ],
            'security' => [
                [
                    'AliGenie_Auth_SPI' => [],
                ],
            ],
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'UserInfo',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'description' => '用户信息',
                        'type' => 'object',
                        'properties' => [
                            'EncodeType' => [
                                'title' => '编码类型，此处填写HOTEL。',
                                'description' => '编码类型，此处填写HOTEL。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'HOTEL',
                            ],
                            'EncodeKey' => [
                                'title' => '编码类型对应的值，此处填写该酒店应用ID。请在天猫精灵行业管理平台查看。',
                                'description' => '编码类型对应的值，此处填写该酒店应用ID。请在天猫精灵行业管理平台查看。',
                                'type' => 'string',
                                'required' => true,
                                'example' => '12**45'."\n",
                            ],
                            'IdType' => [
                                'title' => '用户Id的类型'."\n"
                                    ."\n"
                                    .'OPEN_ID：默认的用户ID标识。'."\n"
                                    .'UNION_ID: 组织维度的用户ID标识，需要提前在开放平台申请组织。',
                                'description' => '用户Id的类型'."\n"
                                    .'- OPEN_ID：默认的用户ID标识。'."\n"
                                    .'- UNION_ID: 组织维度的用户ID标识，需要提前在开放平台申请组织。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'OPEN_ID',
                            ],
                            'Id' => [
                                'title' => '用户标识，设置为userOpenId或userUnionId。',
                                'description' => '用户标识，设置为userOpenId或userUnionId。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'rV/XSgPuxZjx/hN3iw8U+e8ou***lk1r43LWcVW6fvY1Rr4sEPFodpnA==',
                            ],
                            'OrganizationId' => [
                                'title' => '组织ID，如果IdType为UNION_ID时必填。',
                                'description' => '组织ID，如果IdType为UNION_ID时必填。',
                                'type' => 'string',
                                'required' => false,
                                'example' => '1***2',
                            ],
                        ],
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'DeviceInfo',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'description' => '设备信息',
                        'type' => 'object',
                        'properties' => [
                            'EncodeType' => [
                                'title' => '编码类型，此处填写HOTEL。',
                                'description' => '编码类型，此处填写HOTEL。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'HOTEL',
                            ],
                            'EncodeKey' => [
                                'title' => '编码类型对应的值，此处填写该酒店应用ID。请在天猫精灵行业管理平台查看。',
                                'description' => '编码类型对应的值，此处填写该酒店应用ID。请在天猫精灵行业管理平台查看。',
                                'type' => 'string',
                                'required' => true,
                                'example' => '12**45',
                            ],
                            'IdType' => [
                                'title' => '用户标识，设置为userOpenId或userUnionId。',
                                'description' => '用户标识，设置为userOpenId或userUnionId。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'OPEN_ID',
                            ],
                            'Id' => [
                                'title' => '用户Id的类型'."\n"
                                    ."\n"
                                    .'OPEN_ID：默认的用户ID标识。'."\n"
                                    .'UNION_ID: 组织维度的用户ID标识，需要提前在开放平台申请组织。',
                                'description' => '用户Id的类型'."\n"
                                    .'- OPEN_ID：默认的用户ID标识。'."\n"
                                    .'- UNION_ID: 组织维度的用户ID标识，需要提前在开放平台申请组织。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'rV/XSgPuxZjx/hN3iw8U+e8ou***lk1r43LWcVW6fvY1Rr4sEPFodpnA==',
                            ],
                            'OrganizationId' => [
                                'title' => '组织ID，如果IdType为UNION_ID时必填。',
                                'description' => '组织ID，如果IdType为UNION_ID时必填。',
                                'type' => 'string',
                                'required' => false,
                                'example' => '1**2',
                            ],
                        ],
                        'required' => false,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Result<HotelCallContact>',
                        'description' => 'Result<HotelCallContact>',
                        'type' => 'object',
                        'properties' => [
                            'StatusCode' => [
                                'title' => '调用返回码，除约定的SUCCESS_CODE外，其余由服务提供者自定义',
                                'description' => '调用返回码，除约定的SUCCESS_CODE外，其余由服务提供者自定义',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'Result' => [
                                'title' => '服务的实际返回结果',
                                'description' => '服务的实际返回结果',
                                'type' => 'object',
                                'properties' => [
                                    'HotelId' => [
                                        'title' => '酒店id',
                                        'description' => '酒店id',
                                        'type' => 'string',
                                        'example' => 'a7***83',
                                    ],
                                    'Type' => [
                                        'title' => '联系人类型，device：设备，group：分组',
                                        'description' => '联系人类型，device：设备，group：分组',
                                        'type' => 'string',
                                        'example' => 'group',
                                    ],
                                    'Uuid' => [
                                        'title' => '唯一标识',
                                        'description' => '唯一标识',
                                        'type' => 'string',
                                        'example' => '2E57***D45F9',
                                    ],
                                    'Number' => [
                                        'title' => '号码',
                                        'description' => '号码',
                                        'type' => 'string',
                                        'example' => '101',
                                    ],
                                    'Name' => [
                                        'title' => '联系人名称',
                                        'description' => '联系人名称',
                                        'type' => 'string',
                                        'example' => '前台',
                                    ],
                                    'Icon' => [
                                        'title' => '图标',
                                        'description' => '图标',
                                        'type' => 'string',
                                        'example' => 'xxx.icon',
                                    ],
                                    'Status' => [
                                        'title' => '状态，1：可用，0：不可用',
                                        'description' => '状态，1：可用，0：不可用',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '1',
                                    ],
                                    'ExpireAt' => [
                                        'title' => '失效时间',
                                        'description' => '失效时间',
                                        'type' => 'string',
                                        'example' => '1649472283046',
                                    ],
                                    'Id' => [
                                        'title' => '联系人id',
                                        'description' => '联系人id',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '1',
                                    ],
                                    'GmtCreate' => [
                                        'title' => '创建时间',
                                        'description' => '创建时间',
                                        'type' => 'string',
                                        'example' => '2022-07-21 20:02:12',
                                    ],
                                    'GmtModified' => [
                                        'title' => '最后修改时间',
                                        'description' => '最后修改时间',
                                        'type' => 'string',
                                        'example' => '2022-07-27 14:06:27'."\n",
                                    ],
                                ],
                            ],
                            'Message' => [
                                'title' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                                'description' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                            'RequestId' => [
                                'title' => '请求id',
                                'description' => '请求id',
                                'type' => 'string',
                                'example' => '73C6***E6FA',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidParameter',
                        'errorMessage' => 'The request parameter is invalid',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'ServerError',
                        'errorMessage' => 'internal server error',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"StatusCode\\": 200,\\n  \\"Result\\": {\\n    \\"HotelId\\": \\"a7***83\\",\\n    \\"Type\\": \\"group\\",\\n    \\"Uuid\\": \\"2E57***D45F9\\",\\n    \\"Number\\": \\"101\\",\\n    \\"Name\\": \\"前台\\",\\n    \\"Icon\\": \\"xxx.icon\\",\\n    \\"Status\\": 1,\\n    \\"ExpireAt\\": \\"1649472283046\\",\\n    \\"Id\\": 1,\\n    \\"GmtCreate\\": \\"2022-07-21 20:02:12\\",\\n    \\"GmtModified\\": \\"2022-07-27 14:06:27\\\\n\\"\\n  },\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"73C6***E6FA\\"\\n}","type":"json"}]',
            'title' => '获取设备通话联系人信息',
        ],
        'AddOrUpdateScreenSaver' => [
            'summary' => '仅带屏猫精设备生效，设置带屏设备的屏保配置',
            'path' => '/v1.0/ip/addOrUpdateScreenSaver',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'https',
                'http',
            ],
            'security' => [
                [
                    'AliGenie_Auth_SPI' => [],
                ],
            ],
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'HotelId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '酒店id',
                        'description' => '酒店id',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'a7a3***013',
                    ],
                ],
                [
                    'name' => 'HotelScreenSaver',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'title' => '屏保',
                        'description' => '屏保',
                        'type' => 'object',
                        'properties' => [
                            'ScreenSaverStyle' => [
                                'title' => '屏保样式code',
                                'description' => '屏保样式code',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'common-weather',
                            ],
                            'ScreenSaverPicUrl' => [
                                'title' => '屏保图片',
                                'description' => '屏保图片',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'xxx.png',
                            ],
                        ],
                        'required' => true,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Result<Boolean>',
                        'description' => 'Result<Boolean>',
                        'type' => 'object',
                        'properties' => [
                            'StatusCode' => [
                                'title' => '调用返回码，除约定的SUCCESS_CODE外，其余由服务提供者自定义',
                                'description' => '调用返回码，除约定的SUCCESS_CODE外，其余由服务提供者自定义',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'Result' => [
                                'title' => '服务的实际返回结果',
                                'description' => '服务的实际返回结果',
                                'type' => 'boolean',
                                'example' => 'True',
                            ],
                            'Message' => [
                                'title' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                                'description' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                            'RequestId' => [
                                'description' => '请求id',
                                'type' => 'string',
                                'example' => '4EED***9661',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidParameter',
                        'errorMessage' => 'The request parameter is invalid',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'ServerError',
                        'errorMessage' => 'internal server error',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"StatusCode\\": 200,\\n  \\"Result\\": true,\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"4EED***9661\\"\\n}","type":"json"}]',
            'title' => '设置屏保',
            'description' => '- 建议屏保背景图使用深色图片，以保证时间、天气等信息的显示效果',
        ],
        'AddOrUpdateDisPlayModes' => [
            'summary' => '仅带屏猫精设备生效，用于设置带屏设备上展示的模式列表',
            'path' => '/v1.0/ip/addOrUpdateDisPlayModes',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'https',
                'http',
            ],
            'security' => [
                [
                    'AliGenie_Auth_SPI' => [],
                ],
            ],
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'HotelId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '酒店id',
                        'description' => '酒店id',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'a7***83',
                    ],
                ],
                [
                    'name' => 'HotelDeviceModeList',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'title' => '带屏设备展示的模式code列表',
                        'description' => '带屏设备展示的模式code列表',
                        'type' => 'array',
                        'items' => [
                            'description' => '模式编码',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'dndMode',
                        ],
                        'required' => true,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Result<Boolean>',
                        'description' => 'Result<Boolean>',
                        'type' => 'object',
                        'properties' => [
                            'StatusCode' => [
                                'title' => '调用返回码，除约定的SUCCESS_CODE外，其余由服务提供者自定义',
                                'description' => '调用返回码，200标识成功',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'Result' => [
                                'title' => '服务的实际返回结果',
                                'description' => '服务的实际返回结果',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'Message' => [
                                'title' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                                'description' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                            'RequestId' => [
                                'description' => '请求id',
                                'type' => 'string',
                                'example' => '0EC7*726E',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidParameter',
                        'errorMessage' => 'The request parameter is invalid',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'ServerError',
                        'errorMessage' => 'internal server error',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"StatusCode\\": 200,\\n  \\"Result\\": true,\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"0EC7*726E\\"\\n}","type":"json"}]',
            'title' => '设置带屏展示模式列表',
        ],
        'GetUnionId' => [
            'summary' => '使用open id换取跨域的union id',
            'path' => '/v1.0/ip/getUnionId',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'https',
                'http',
            ],
            'security' => [
                [
                    'AliGenie_Auth_SPI' => [],
                ],
            ],
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'EncodeType',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '编码类型，从天猫精灵开放平台中获取',
                        'description' => '编码类型，从天猫精灵开放平台中获取',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'HOTEL',
                    ],
                ],
                [
                    'name' => 'EncodeKey',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '编码Key，从天猫精灵开放平台中获取',
                        'description' => '编码Key，从天猫精灵开放平台中获取',
                        'type' => 'string',
                        'required' => true,
                        'example' => '125****0946',
                    ],
                ],
                [
                    'name' => 'IdType',
                    'in' => 'formData',
                    'schema' => [
                        'title' => 'open id类型，可为用户id或设备id；'."\n"
                            .'USER_ID: 用户id'."\n"
                            .'DEVICE_ID: 设备id',
                        'description' => 'open id类型，可为用户id或设备id'."\n"
                            .'- USER_ID: 用户id'."\n"
                            .'- DEVICE_ID: 设备id',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'DEVICE_ID',
                    ],
                ],
                [
                    'name' => 'Id',
                    'in' => 'formData',
                    'schema' => [
                        'title' => 'id类型对应的open id值',
                        'description' => 'id类型对应的open id值',
                        'type' => 'string',
                        'required' => true,
                        'example' => '62a319****abdc',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'headers' => [],
                    'schema' => [
                        'title' => 'Result<List<UnionInfo>>',
                        'description' => 'Result<List<UnionInfo>>',
                        'type' => 'object',
                        'properties' => [
                            'StatusCode' => [
                                'title' => '调用返回码，除约定的SUCCESS_CODE外，其余由服务提供者自定义',
                                'description' => '调用返回码，除约定的SUCCESS_CODE外，其余由服务提供者自定义',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'Result' => [
                                'title' => '服务的实际返回结果',
                                'description' => '服务的实际返回结果',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'OrganizationId' => [
                                            'title' => '组织id，可在天猫精灵开放平台管理',
                                            'description' => '组织id，可在天猫精灵开放平台管理',
                                            'type' => 'string',
                                            'example' => '4325***765',
                                        ],
                                        'UnionId' => [
                                            'title' => '请求参数的open id在该组织下的唯一id值',
                                            'description' => '请求参数的open id在该组织下的唯一id值',
                                            'type' => 'string',
                                            'example' => '8bh2****8s8',
                                        ],
                                    ],
                                ],
                            ],
                            'Message' => [
                                'title' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                                'description' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                            'RequestId' => [
                                'title' => '请求id',
                                'description' => '请求id',
                                'type' => 'string',
                                'example' => '0EC7*726E',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidParameter',
                        'errorMessage' => 'The request parameter is invalid',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'ServerError',
                        'errorMessage' => 'internal server error',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"StatusCode\\": 200,\\n  \\"Result\\": [\\n    {\\n      \\"OrganizationId\\": \\"4325***765\\",\\n      \\"UnionId\\": \\"8bh2****8s8\\"\\n    }\\n  ],\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"0EC7*726E\\"\\n}","type":"json"}]',
            'title' => '换取unionId',
            'description' => '当前天猫精灵开放体系下有多个域，例如天猫精灵AI平台、技能应用平台、行业开放平台，各个域的open信息自成闭环，而跨多域的请求交互需要先创建组织，并在组织下将各域的实体(例如酒店应用appid或者技能应用平台创建的应用)关联到组织下，关联后可以使用该接口根据酒店的open id换取到酒店所属组织下的union id，使用union id可在各域调用相应的接口'."\n"
                .'![](https://img.alicdn.com/imgextra/i3/O1CN01EVSThl1txqw0eFOIb_!!6000000005969-0-tps-1024-274.jpg)',
        ],
        'HotelQrBind' => [
            'summary' => '酒店带屏设备扫码绑定。',
            'path' => '/v1.0/ip/hotelQrBind',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'https',
                'http',
            ],
            'security' => [
                [
                    'AliGenie_Auth_SPI' => [],
                ],
            ],
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'HotelId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '酒店ID',
                        'description' => '酒店ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'a7***83',
                    ],
                ],
                [
                    'name' => 'RoomNo',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '房间号',
                        'description' => '房间号',
                        'type' => 'string',
                        'required' => true,
                        'example' => '1211',
                    ],
                ],
                [
                    'name' => 'Code',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '带屏设备绑定二维码中的code参数',
                        'description' => '带屏设备绑定二维码中的code参数',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'freuisghrtiesnvfkdsvbfuidslnvfs',
                    ],
                ],
                [
                    'name' => 'ClientId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '带屏设备绑定二维码中的clientId参数',
                        'description' => '带屏设备绑定二维码中的clientId参数',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'xxxxxx',
                    ],
                ],
                [
                    'name' => 'ExtInfo',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '额外信息jsonString',
                        'description' => '额外信息jsonString',
                        'type' => 'string',
                        'required' => false,
                        'example' => '{}',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'headers' => [],
                    'schema' => [
                        'title' => 'Result<UserAndDeviceInfo>',
                        'description' => 'Result<UserAndDeviceInfo>',
                        'type' => 'object',
                        'properties' => [
                            'StatusCode' => [
                                'title' => '调用返回码，200标识为成功',
                                'description' => '调用返回码，200标识为成功',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'Result' => [
                                'title' => '服务的实际返回结果',
                                'description' => '服务的实际返回结果',
                                'type' => 'object',
                                'properties' => [
                                    'OpenUserInfo' => [
                                        'title' => '开放用户信息',
                                        'description' => '开放用户信息',
                                        'type' => 'object',
                                        'properties' => [
                                            'EncodeType' => [
                                                'title' => '编码类型，从天猫精灵开放平台中获取',
                                                'description' => '编码类型，从天猫精灵开放平台中获取',
                                                'type' => 'string',
                                                'example' => 'HOTEL',
                                            ],
                                            'EncodeKey' => [
                                                'title' => '编码Key，从天猫精灵开放平台中获取',
                                                'description' => '编码Key，从天猫精灵开放平台中获取',
                                                'type' => 'string',
                                                'example' => '123',
                                            ],
                                            'IdType' => [
                                                'title' => '编码信息，从天猫精灵开放平台中获取',
                                                'description' => '编码信息，从天猫精灵开放平台中获取',
                                                'type' => 'string',
                                                'example' => 'OPEN_ID',
                                            ],
                                            'Id' => [
                                                'title' => '用户唯一标识',
                                                'description' => '用户唯一标识',
                                                'type' => 'string',
                                                'example' => 'xxxxxx',
                                            ],
                                            'OrganizationId' => [
                                                'title' => '组织ID，如果IdType为UNION_ID时返回',
                                                'description' => '组织ID，如果IdType为UNION_ID时返回',
                                                'type' => 'string',
                                                'example' => 'aaaaaaaa',
                                            ],
                                        ],
                                    ],
                                    'OpenDeviceInfo' => [
                                        'title' => '开放设备信息',
                                        'description' => '开放设备信息',
                                        'type' => 'object',
                                        'properties' => [
                                            'EncodeType' => [
                                                'title' => '编码类型，从天猫精灵开放平台中获取',
                                                'description' => '编码类型，从天猫精灵开放平台中获取',
                                                'type' => 'string',
                                                'example' => 'HOTEL',
                                            ],
                                            'EncodeKey' => [
                                                'title' => '编码Key，从天猫精灵开放平台中获取',
                                                'description' => '编码Key，从天猫精灵开放平台中获取',
                                                'type' => 'string',
                                                'example' => '123',
                                            ],
                                            'IdType' => [
                                                'title' => '编码信息，从天猫精灵开放平台中获取',
                                                'description' => '编码信息，从天猫精灵开放平台中获取',
                                                'type' => 'string',
                                                'example' => 'OPEN_ID',
                                            ],
                                            'Id' => [
                                                'title' => '设备唯一标识',
                                                'description' => '设备唯一标识',
                                                'type' => 'string',
                                                'example' => 'xxxxxxx',
                                            ],
                                            'OrganizationId' => [
                                                'title' => '组织ID，如果IdType为UNION_ID时返回',
                                                'description' => '组织ID，如果IdType为UNION_ID时返回',
                                                'type' => 'string',
                                                'example' => 'aaaaaaaa',
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                            'Message' => [
                                'title' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                                'description' => '附加信息，典型应用场景是对失败调用进行简述，方便调用方定位问题',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                            'RequestId' => [
                                'title' => '请求id',
                                'description' => '请求id',
                                'type' => 'string',
                                'example' => '73****9-175A-1324-8202-9FAAB*****A',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidParameter',
                        'errorMessage' => 'The request parameter is invalid',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'ServerError',
                        'errorMessage' => 'internal server error',
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"StatusCode\\": 200,\\n  \\"Result\\": {\\n    \\"OpenUserInfo\\": {\\n      \\"EncodeType\\": \\"HOTEL\\",\\n      \\"EncodeKey\\": \\"123\\",\\n      \\"IdType\\": \\"OPEN_ID\\",\\n      \\"Id\\": \\"xxxxxx\\",\\n      \\"OrganizationId\\": \\"aaaaaaaa\\"\\n    },\\n    \\"OpenDeviceInfo\\": {\\n      \\"EncodeType\\": \\"HOTEL\\",\\n      \\"EncodeKey\\": \\"123\\",\\n      \\"IdType\\": \\"OPEN_ID\\",\\n      \\"Id\\": \\"xxxxxxx\\",\\n      \\"OrganizationId\\": \\"aaaaaaaa\\"\\n    }\\n  },\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"73****9-175A-1324-8202-9FAAB*****A\\"\\n}","type":"json"}]',
            'title' => '酒店扫码绑定',
            'description' => '酒店带屏设备扫码绑定，可用于自建app管理设备',
        ],
    ],
    'endpoints' => [
        [
            'regionId' => 'cn-zhangjiakou',
            'endpoint' => 'openapi.aligenie.com',
        ],
    ],
];
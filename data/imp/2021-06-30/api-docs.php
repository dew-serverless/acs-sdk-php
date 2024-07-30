<?php return [
    'version' => '1.0',
    'info' => [
        'style' => 'RPC',
        'product' => 'imp',
        'version' => '2021-06-30',
    ],
    'directories' => [
        [
            'id' => 121844,
            'title' => '长连接',
            'type' => 'directory',
            'children' => [
                'GetAuthToken',
            ],
        ],
        [
            'id' => 121852,
            'title' => '直播',
            'type' => 'directory',
            'children' => [
                [
                    'id' => 167587,
                    'title' => '获取直播列表',
                    'type' => 'directory',
                    'children' => [
                        'ListLiveRooms',
                        'ListLiveRoomsById',
                    ],
                ],
                [
                    'id' => 167586,
                    'title' => '直播数据统计',
                    'type' => 'directory',
                    'children' => [
                        'GetLiveRoomStatistics',
                        'GetLiveRoomUserStatistics',
                    ],
                ],
                [
                    'id' => 169037,
                    'title' => '直播录制',
                    'type' => 'directory',
                    'children' => [
                        'GetLiveRecord',
                        'CreateLiveRecordSliceFile',
                        'ListLiveFiles',
                        'DeleteLiveFilesById',
                    ],
                ],
                'CreateLiveRoom',
                'DeleteLiveRoom',
                'PublishLiveRoom',
                'UpdateLiveRoom',
                'StopLiveRoom',
                'GetLiveRoom',
            ],
        ],
        [
            'id' => 121846,
            'title' => '课堂',
            'type' => 'directory',
            'children' => [
                'CreateClass',
                'DeleteClass',
                'StopClass',
                'UpdateClass',
                'GetClassDetail',
                'ListClasses',
                'GetClassRecord',
                'UpdateShareScreenLayout',
            ],
        ],
        [
            'id' => 121863,
            'title' => '房间',
            'type' => 'directory',
            'children' => [
                'CreateRoom',
                'DeleteRoom',
                'UpdateRoom',
                'KickRoomUser',
                'SetUserAdmin',
                'CancelUserAdmin',
                'GetRoom',
                'ListRooms',
                'ListRoomUsers',
            ],
        ],
        [
            'id' => 121870,
            'title' => '消息',
            'type' => 'directory',
            'children' => [
                [
                    'id' => 167432,
                    'title' => '敏感词',
                    'type' => 'directory',
                    'children' => [
                        'CreateSensitiveWord',
                        'DeleteSensitiveWord',
                        'ListSensitiveWord',
                    ],
                ],
                [
                    'id' => 167433,
                    'title' => '禁言',
                    'type' => 'directory',
                    'children' => [
                        'CancelBanAllComment',
                        'CancelBanComment',
                        'BanAllComment',
                        'BanComment',
                    ],
                ],
                [
                    'id' => 167434,
                    'title' => '消息管理',
                    'type' => 'directory',
                    'children' => [
                        'SendCustomMessageToAll',
                        'SendCustomMessageToUsers',
                        'SendComment',
                        'DeleteComment',
                        'ListComments',
                        'DeleteCommentByCreatorId',
                    ],
                ],
            ],
        ],
        [
            'id' => 121880,
            'title' => '连麦',
            'type' => 'directory',
            'children' => [
                'DeleteConference',
                'RemoveMember',
                'GetConference',
                'ListConferenceUsers',
            ],
        ],
        [
            'id' => 121893,
            'title' => '低代码服务',
            'type' => 'directory',
            'children' => [
                'GetStandardRoomJumpUrl',
            ],
        ],
        [
            'id' => 167286,
            'title' => '用量查询',
            'type' => 'directory',
            'children' => [
                'DescribeMeterImpWatchLiveTimeByLiveId',
                'DescribeMeterImpPlayBackTimeByLiveId',
            ],
        ],
        [
            'id' => 121914,
            'title' => '直播(旧)',
            'type' => 'directory',
            'children' => [
                'CreateLive',
                'DeleteLive',
                'PublishLive',
                'UpdateLive',
                'StopLive',
                'GetLive',
            ],
        ],
    ],
    'components' => [
        'schemas' => [
            'AssetsAuditAssetResponse' => [
                'title' => '审核Asset响应消息',
                'type' => 'object',
                'properties' => [
                    'RequestId' => [
                        'title' => '请求ID',
                        'type' => 'string',
                    ],
                    'Status' => [
                        'title' => '响应状态',
                        'required' => false,
                        '$ref' => '#/components/schemas/RpcStatus',
                    ],
                ],
            ],
            'AssetsCreateAssetResponse' => [
                'title' => '创建Asset响应消息',
                'type' => 'object',
                'properties' => [
                    'RequestId' => [
                        'title' => '请求ID',
                        'type' => 'string',
                    ],
                    'Status' => [
                        'title' => '响应状态',
                        '$ref' => '#/components/schemas/RpcStatus',
                    ],
                    'Asset' => [
                        'title' => '资产信息',
                        'required' => false,
                        '$ref' => '#/components/schemas/CommonAsset',
                    ],
                ],
            ],
            'AssetsDeleteAssetResponse' => [
                'title' => '删除Asset响应消息',
                'type' => 'object',
                'properties' => [
                    'RequestId' => [
                        'title' => '请求ID',
                        'type' => 'string',
                    ],
                    'Status' => [
                        'title' => '响应状态',
                        'required' => false,
                        '$ref' => '#/components/schemas/RpcStatus',
                    ],
                    'Asset' => [
                        'title' => '资产信息',
                        'required' => false,
                        '$ref' => '#/components/schemas/CommonAsset',
                    ],
                ],
            ],
            'AssetsGetAssetResponse' => [
                'title' => '获取Asset响应消息',
                'type' => 'object',
                'properties' => [
                    'RequestId' => [
                        'title' => '请求ID',
                        'type' => 'string',
                    ],
                    'Status' => [
                        'title' => '响应状态',
                        'required' => false,
                        '$ref' => '#/components/schemas/RpcStatus',
                    ],
                    'Asset' => [
                        'title' => 'Asset',
                        'required' => false,
                        '$ref' => '#/components/schemas/CommonAsset',
                    ],
                ],
            ],
            'AssetsListAssetsRequest' => [
                'title' => 'ListAsset请求消息',
                'type' => 'object',
                'properties' => [
                    'Params' => [
                        'title' => '参数',
                        'type' => 'string',
                        'required' => false,
                    ],
                    'NextToken' => [
                        'title' => '分页Token Optional.',
                        'type' => 'string',
                        'required' => false,
                    ],
                    'AppId' => [
                        'title' => 'AppId',
                        'type' => 'string',
                        'required' => false,
                    ],
                    'Topic' => [
                        'title' => '订阅Topic',
                        'type' => 'string',
                        'required' => false,
                    ],
                    'FieldMask' => [
                        'title' => 'Optional. Used to specify a subset of fields that should be'."\n"
                            .'returned by a get operation or modified by an update operation.',
                        'type' => 'string',
                        'required' => false,
                    ],
                    'MaxResults' => [
                        'title' => '每页显示个数，最大支持20，参数为空默认显示个数为10。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
            ],
            'AssetsListAssetsResponse' => [
                'title' => 'ListAssetsResponse',
                'type' => 'object',
                'properties' => [
                    'Status' => [
                        'title' => '响应状态',
                        'required' => false,
                        '$ref' => '#/components/schemas/RpcStatus',
                    ],
                    'NextToken' => [
                        'title' => '分页Token',
                        'type' => 'string',
                        'required' => false,
                    ],
                    'Assets' => [
                        'title' => 'Asset列表',
                        'type' => 'array',
                        'items' => [
                            'required' => false,
                            '$ref' => '#/components/schemas/CommonAsset',
                        ],
                        'required' => false,
                    ],
                    'RequestId' => [
                        'title' => '请求ID',
                        'type' => 'string',
                    ],
                ],
            ],
            'AssetsUpdateAssetResponse' => [
                'title' => '更新Asset响应消息',
                'type' => 'object',
                'properties' => [
                    'RequestId' => [
                        'title' => '请求ID',
                        'type' => 'string',
                    ],
                    'Status' => [
                        'title' => '响应状态',
                        'required' => false,
                        '$ref' => '#/components/schemas/RpcStatus',
                    ],
                    'Asset' => [
                        'title' => '资产信息',
                        'required' => false,
                        '$ref' => '#/components/schemas/CommonAsset',
                    ],
                ],
            ],
            'CommonAddress' => [
                'title' => '通讯地址',
                'type' => 'object',
                'properties' => [
                    'Zip' => [
                        'title' => 'zip',
                        'type' => 'string',
                        'required' => false,
                    ],
                    'Country' => [
                        'title' => '国家',
                        'type' => 'string',
                        'required' => false,
                    ],
                    'City' => [
                        'title' => '城市',
                        'type' => 'string',
                        'required' => false,
                    ],
                    'Address' => [
                        'title' => '地址',
                        'type' => 'string',
                        'required' => false,
                    ],
                    'State' => [
                        'title' => '区域',
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
            'CommonAsset' => [
                'title' => '资产',
                'type' => 'object',
                'properties' => [
                    'Id' => [
                        'title' => '资产ID',
                        'type' => 'string',
                        'required' => false,
                    ],
                    'AppId' => [
                        'title' => '应用ID',
                        'type' => 'string',
                        'required' => false,
                    ],
                    'Status' => [
                        'title' => '资产状态',
                        'required' => false,
                        '$ref' => '#/components/schemas/CommonAssetStatus',
                    ],
                    'Title' => [
                        'title' => '标题',
                        'type' => 'string',
                        'required' => false,
                    ],
                    'Synopsis' => [
                        'title' => '概要',
                        'type' => 'string',
                        'required' => false,
                    ],
                    'Description' => [
                        'title' => '资产描述',
                        'type' => 'string',
                        'required' => false,
                    ],
                    'CreatedAt' => [
                        'title' => '创建时间',
                        'type' => 'string',
                        'required' => false,
                    ],
                    'UpdatedAt' => [
                        'title' => '更新时间',
                        'type' => 'string',
                        'required' => false,
                    ],
                    'Images' => [
                        'title' => '图像资源',
                        'type' => 'array',
                        'items' => [
                            'required' => false,
                            '$ref' => '#/components/schemas/CommonMediaResource',
                        ],
                        'required' => false,
                    ],
                    'Videos' => [
                        'title' => '视频资源',
                        'type' => 'array',
                        'items' => [
                            'required' => false,
                            '$ref' => '#/components/schemas/CommonMediaResource',
                        ],
                        'required' => false,
                    ],
                    'Author' => [
                        'title' => '作者',
                        'type' => 'string',
                        'required' => false,
                    ],
                    'Source' => [
                        'title' => '资产来源',
                        'required' => false,
                        '$ref' => '#/components/schemas/CommonAssetSource',
                    ],
                    'AuditStatus' => [
                        'title' => '审核状态',
                        'required' => false,
                        '$ref' => '#/components/schemas/CommonAuditStatus',
                    ],
                    'Labels' => [
                        'title' => '定义Label， eg:type:advertise 支持广告类型的label',
                        'type' => 'object',
                        'required' => false,
                    ],
                    'Tags' => [
                        'title' => '标签',
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                            'required' => false,
                        ],
                        'required' => false,
                    ],
                    'Address' => [
                        'title' => '行政区域地址',
                        'required' => false,
                        '$ref' => '#/components/schemas/CommonAddress',
                    ],
                    'Location' => [
                        'title' => '经纬度地理位置',
                        'required' => false,
                        '$ref' => '#/components/schemas/TypeLatLng',
                    ],
                    'Extends' => [
                        'title' => '扩展字段',
                        'type' => 'object',
                        'required' => false,
                    ],
                ],
            ],
            'CommonAssetSource' => [
                'title' => '内容发布来源',
                'type' => 'string',
                'properties' => [],
                'default' => 'PGC',
                'enum' => [
                    'PGC',
                    'UGC',
                    'OGC',
                    'PUGC',
                    'MGC',
                    'MCN',
                ],
            ],
            'CommonAssetStatus' => [
                'title' => '资产状态',
                'type' => 'string',
                'properties' => [],
                'default' => 'Blank',
                'enum' => [
                    'Blank',
                    'Normal',
                    'Abnormal',
                    'Transcoding',
                    'Auditing',
                ],
            ],
            'CommonAuditStatus' => [
                'title' => '审核状态',
                'type' => 'string',
                'properties' => [],
                'default' => 'Unpublish',
                'enum' => [
                    'Unpublish',
                    'Publich',
                ],
            ],
            'CommonMediaResource' => [
                'title' => '媒体资源属性',
                'type' => 'object',
                'properties' => [
                    'Sha1' => [
                        'title' => 'media sha1',
                        'type' => 'string',
                        'required' => false,
                    ],
                    'Id' => [
                        'title' => 'media id',
                        'type' => 'string',
                        'required' => false,
                    ],
                    'Format' => [
                        'title' => 'media format',
                        'type' => 'string',
                        'required' => false,
                    ],
                    'Url' => [
                        'title' => 'resource url',
                        'type' => 'string',
                        'required' => false,
                    ],
                    'Size' => [
                        'title' => 'media size',
                        'type' => 'string',
                        'format' => 'int64',
                        'required' => false,
                    ],
                    'Name' => [
                        'title' => 'name',
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
            'CommonSimpleAsset' => [
                'title' => '简要资产',
                'type' => 'object',
                'properties' => [
                    'Id' => [
                        'title' => '资产ID',
                        'type' => 'string',
                        'required' => false,
                    ],
                    'AppId' => [
                        'title' => '应用ID',
                        'type' => 'string',
                        'required' => false,
                    ],
                    'Status' => [
                        'title' => '资产状态',
                        'required' => false,
                        '$ref' => '#/components/schemas/CommonAssetStatus',
                    ],
                    'Title' => [
                        'title' => '标题',
                        'type' => 'string',
                        'required' => false,
                    ],
                    'Synopsis' => [
                        'title' => '概要',
                        'type' => 'string',
                        'required' => false,
                    ],
                    'Description' => [
                        'title' => '资产描述',
                        'type' => 'string',
                        'required' => false,
                    ],
                    'Image' => [
                        'title' => '图像资源',
                        'required' => false,
                        '$ref' => '#/components/schemas/CommonMediaResource',
                    ],
                    'Video' => [
                        'title' => '视频资源',
                        'required' => false,
                        '$ref' => '#/components/schemas/CommonMediaResource',
                    ],
                    'Author' => [
                        'title' => '作者',
                        'type' => 'string',
                        'required' => false,
                    ],
                    'Source' => [
                        'title' => '资产来源',
                        'required' => false,
                        '$ref' => '#/components/schemas/CommonAssetSource',
                    ],
                    'AuditStatus' => [
                        'title' => '审核状态',
                        'required' => false,
                        '$ref' => '#/components/schemas/CommonAuditStatus',
                    ],
                    'Labels' => [
                        'title' => '定义Label， eg:type:advertise 支持广告类型的label',
                        'type' => 'object',
                        'required' => false,
                    ],
                    'Tags' => [
                        'title' => '标签',
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                            'required' => false,
                        ],
                        'required' => false,
                    ],
                    'Address' => [
                        'title' => '行政区域地址',
                        'required' => false,
                        '$ref' => '#/components/schemas/CommonAddress',
                    ],
                    'Location' => [
                        'title' => '经纬度地理位置',
                        'required' => false,
                        '$ref' => '#/components/schemas/TypeLatLng',
                    ],
                    'Extends' => [
                        'title' => '扩展字段',
                        'type' => 'object',
                        'required' => false,
                    ],
                ],
            ],
            'RpcStatus' => [
                'title' => 'google.rpc.Status',
                'description' => '错误模型',
                'type' => 'object',
                'properties' => [
                    'Code' => [
                        'title' => '错误码',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                    'Message' => [
                        'title' => '错误消息',
                        'type' => 'string',
                    ],
                    'Detail' => [
                        'title' => '错误详情',
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
            'TypeLatLng' => [
                'description' => 'An object that represents a latitude/longitude pair. This is expressed as a'."\n"
                    .'pair of doubles to represent degrees latitude and degrees longitude. Unless'."\n"
                    .'specified otherwise, this must conform to the'."\n"
                    .'<a href="http://www.unoosa.org/pdf/icg/2012/template/WGS_84.pdf">WGS84'."\n"
                    .'standard</a>. Values must be within normalized ranges.',
                'type' => 'object',
                'properties' => [
                    'Longitude' => [
                        'title' => 'The longitude in degrees. It must be in the range [-180.0, +180.0].',
                        'type' => 'number',
                        'format' => 'double',
                        'required' => false,
                    ],
                    'Latitude' => [
                        'title' => 'The latitude in degrees. It must be in the range [-90.0, +90.0].',
                        'type' => 'number',
                        'format' => 'double',
                        'required' => false,
                    ],
                ],
            ],
        ],
    ],
    'apis' => [
        'GetAuthToken' => [
            'summary' => '调用GetAuthToken获取长连接建连Token，客户端可以用此Token通过LWP协议和各个原子能力进行长连接通信。',
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
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'AppId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '用户的应用ID，在控制台创建应用时生成',
                        'description' => '用户的应用ID，在控制台创建应用时生成。包含小写字母、数字，长度为6个字符。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '7m***q',
                    ],
                ],
                [
                    'name' => 'AppKey',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '终端设备类型,通过控制台创建和查询',
                        'description' => '通过控制台创建和查询。小写英文和数字，长度32个字符。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '06***9c',
                    ],
                ],
                [
                    'name' => 'UserId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '用户UserId,在AppId下单独唯一',
                        'description' => '用户UserId，用户自定义，在AppId下单独唯一。小写英文、数字、下划线（_）和小数点（.）组成，最大长度32个字符。不同的用户需要使用不同的UserId。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'as****hs',
                    ],
                ],
                [
                    'name' => 'DeviceId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '终端设备ID',
                        'description' => '终端设备ID，唯一代表一个用户终端设备，用户自定义。小写英文、数字、下划线（_）和短横线（-）组成，最大长度64个字符。不同终端设备需要使用不同的DeviceId，建议从终端设备获取并传入给服务端。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'a494caec-***-695ef345db77',
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
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'FE22D613-D3C6-4A58-87CA-F21FC85AA08E',
                            ],
                            'Result' => [
                                'description' => '获取Token的参数返回结果。',
                                'type' => 'object',
                                'properties' => [
                                    'AccessToken' => [
                                        'title' => '用于长连接建连的token',
                                        'description' => '用于长连接建连的Token。',
                                        'type' => 'string',
                                        'example' => 'oauth_cloud_key:***-b0YY5Gy6Q',
                                    ],
                                    'RefreshToken' => [
                                        'title' => '更新Token，若AccessToken过期，则可以使用RefreshToken再次获取新Token',
                                        'description' => '更新Token，若AccessToken过期，则可以使用RefreshToken再次获取新Token。',
                                        'type' => 'string',
                                        'example' => 'oauth_cloud_key:****-Q62xggOTdgk3gw=',
                                    ],
                                    'AccessTokenExpiredTime' => [
                                        'title' => '登录token过期时间(毫秒)',
                                        'description' => '登录Token过期时间，单位：毫秒。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '86400000',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"FE22D613-D3C6-4A58-87CA-F21FC85AA08E\\",\\n  \\"Result\\": {\\n    \\"AccessToken\\": \\"oauth_cloud_key:***-b0YY5Gy6Q\\",\\n    \\"RefreshToken\\": \\"oauth_cloud_key:****-Q62xggOTdgk3gw=\\",\\n    \\"AccessTokenExpiredTime\\": 86400000\\n  }\\n}","errorExample":""},{"type":"xml","example":"<GetAuthTokenResponse>\\n    <RequestId>FE22D613-D3C6-4A58-87CA-F21FC85AA08E</RequestId>\\n    <Result>\\n        <AccessToken>oauth_cloud_key:***-b0YY5Gy6Q</AccessToken>\\n        <RefreshToken>oauth_cloud_key:****-Q62xggOTdgk3gw=</RefreshToken>\\n        <AccessTokenExpiredTime>86400000</AccessTokenExpiredTime>\\n    </Result>\\n</GetAuthTokenResponse>","errorExample":""}]',
            'title' => '获取长连接建连Token',
            'description' => '该接口一般使用流程是客户端获取UserId、DeviceId信息，然后传入到服务端，服务端使用该接口获取鉴权Token，并返回给客户端。不同的用户需要使用不同的UserId，不同的终端设备需要使用不同的DeviceId。',
        ],
        'ListLiveRooms' => [
            'summary' => '调用ListLiveRooms分页查询直播信息。',
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
            'systemTags' => [
                'operationType' => 'list',
            ],
            'parameters' => [
                [
                    'name' => 'AppId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '应用唯一标识，由6位小写字母、数字组成。',
                        'description' => '用户的应用ID，在控制台创建应用时生成。包含小写字母、数字，长度为6个字符。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '7m***q',
                    ],
                ],
                [
                    'name' => 'Status',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '直播状态，0-在播 1-下播，不传则返回所有直播。',
                        'description' => '直播状态。取值：'."\n"
                            .'* **0**：已创建，未开始直播。'."\n"
                            .'* **1**：直播中。'."\n"
                            .'* **2**：直播结束。'."\n"
                            .'* **3或空**：所有状态。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '3',
                    ],
                ],
                [
                    'name' => 'PageNumber',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '查询页码，从1开始，传空默认查询第1页。',
                        'description' => '查询页码，从1开始，参数为空默认查询第1页。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '每页显示个数，最大支持50，参数为空默认显示个数为10。',
                        'description' => '每页显示个数，最大支持50，参数为空默认显示个数为10。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '10',
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
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'FE22D613-D3C6-4A58-87CA-F21FC85AA08E',
                            ],
                            'Result' => [
                                'title' => '创建场景化直播返回的结果。',
                                'description' => '分页查询直播信息返回的结果。',
                                'type' => 'object',
                                'properties' => [
                                    'TotalCount' => [
                                        'title' => '直播总数。',
                                        'description' => '直播总数。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '100',
                                    ],
                                    'PageTotal' => [
                                        'title' => '直播总页数。',
                                        'description' => '直播总页数。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '10',
                                    ],
                                    'HasMore' => [
                                        'title' => '是否还有下一页。',
                                        'description' => '是否还有下一页。',
                                        'type' => 'boolean',
                                        'example' => 'true',
                                    ],
                                    'LiveList' => [
                                        'title' => '直播列表信息。',
                                        'description' => '直播列表信息。',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'AppId' => [
                                                    'title' => '应用ID。',
                                                    'description' => '用户的应用ID，在控制台创建应用时生成。包含小写字母、数字，长度为6个字符。',
                                                    'type' => 'string',
                                                    'example' => '7m***q',
                                                ],
                                                'LiveId' => [
                                                    'title' => '直播ID。',
                                                    'description' => '直播的唯一标识ID。',
                                                    'type' => 'string',
                                                    'example' => 'b7f2****ebb3',
                                                ],
                                                'Status' => [
                                                    'title' => '直播状态，0-在播 1-下播。',
                                                    'description' => '直播状态。取值：'."\n"
                                                        .'* **0**：已创建，未开始直播。'."\n"
                                                        .'* **1**：直播中。'."\n"
                                                        .'* **2**：直播结束。',
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                    'example' => '1',
                                                ],
                                                'RoomId' => [
                                                    'title' => '房间ID。',
                                                    'description' => '房间的唯一标识。',
                                                    'type' => 'string',
                                                    'example' => 'AE35-****-T95F',
                                                ],
                                                'ChatId' => [
                                                    'title' => '聊天ID。',
                                                    'description' => '弹幕的唯一标识。',
                                                    'type' => 'string',
                                                    'example' => '09***f8',
                                                ],
                                                'Title' => [
                                                    'title' => '标题。',
                                                    'description' => '直播标题。',
                                                    'type' => 'string',
                                                    'example' => 'Title001',
                                                ],
                                                'Notice' => [
                                                    'title' => '公告。',
                                                    'description' => '直播公告。',
                                                    'type' => 'string',
                                                    'example' => 'Notice001',
                                                ],
                                                'CoverUrl' => [
                                                    'title' => '封面。',
                                                    'description' => '直播封面。',
                                                    'type' => 'string',
                                                    'example' => 'http://***.png',
                                                ],
                                                'AnchorId' => [
                                                    'title' => '主播ID。',
                                                    'description' => '主播ID。',
                                                    'type' => 'string',
                                                    'example' => 'as****hs',
                                                ],
                                                'Uv' => [
                                                    'title' => '访问用户数。',
                                                    'description' => '访问用户数，同个访客多次访问直播间仅计算一个UV。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '100',
                                                ],
                                                'Extension' => [
                                                    'title' => '直播拓展字段。',
                                                    'description' => '直播拓展字段。',
                                                    'type' => 'object',
                                                    'additionalProperties' => [
                                                        'type' => 'string',
                                                        'example' => 'test001',
                                                        'description' => '直播拓展信息。',
                                                    ],
                                                ],
                                                'AnchorNick' => [
                                                    'title' => '主播昵称。',
                                                    'description' => '主播昵称。',
                                                    'type' => 'string',
                                                    'example' => 'User001',
                                                ],
                                                'Pv' => [
                                                    'title' => '访问用户人次。',
                                                    'description' => '访问用户人次，访客对同一直播间的多次访问，PV累加。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '200',
                                                ],
                                                'OnlineCount' => [
                                                    'title' => '在线用户数。',
                                                    'description' => '在线用户数。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '50',
                                                ],
                                                'CreateTime' => [
                                                    'title' => '直播的创建时间。单位为ms。',
                                                    'description' => '直播的创建时间。单位为ms。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '1624259500000',
                                                ],
                                                'StartTime' => [
                                                    'title' => '直播的开始时间。单位为ms。',
                                                    'description' => '直播的开始时间。单位为ms。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '1624259600000',
                                                ],
                                                'EndTime' => [
                                                    'title' => '直播的结束时间。单位为ms。',
                                                    'description' => '直播的结束时间。单位为ms。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '1624259800000',
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
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"FE22D613-D3C6-4A58-87CA-F21FC85AA08E\\",\\n  \\"Result\\": {\\n    \\"TotalCount\\": 100,\\n    \\"PageTotal\\": 10,\\n    \\"HasMore\\": true,\\n    \\"LiveList\\": [\\n      {\\n        \\"AppId\\": \\"7m***q\\",\\n        \\"LiveId\\": \\"b7f2****ebb3\\",\\n        \\"Status\\": 1,\\n        \\"RoomId\\": \\"AE35-****-T95F\\",\\n        \\"ChatId\\": \\"09***f8\\",\\n        \\"Title\\": \\"Title001\\",\\n        \\"Notice\\": \\"Notice001\\",\\n        \\"CoverUrl\\": \\"http://***.png\\",\\n        \\"AnchorId\\": \\"as****hs\\",\\n        \\"Uv\\": 100,\\n        \\"Extension\\": {\\n          \\"key\\": \\"test001\\"\\n        },\\n        \\"AnchorNick\\": \\"User001\\",\\n        \\"Pv\\": 200,\\n        \\"OnlineCount\\": 50,\\n        \\"CreateTime\\": 1624259500000,\\n        \\"StartTime\\": 1624259600000,\\n        \\"EndTime\\": 1624259800000\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<ListLiveRoomsResponse>\\n    <RequestId>FE22D613-D3C6-4A58-87CA-F21FC85AA08E</RequestId>\\n    <Result>\\n        <TotalCount>100</TotalCount>\\n        <PageTotal>10</PageTotal>\\n        <HasMore>true</HasMore>\\n        <LiveList>\\n            <AppId>7m***q</AppId>\\n            <LiveId>b7f2****ebb3</LiveId>\\n            <Status>1</Status>\\n            <RoomId>AE35-****-T95F</RoomId>\\n            <ChatId>09***f8</ChatId>\\n            <Title>Title001</Title>\\n            <Notice>Notice001</Notice>\\n            <CoverUrl>http://***.png</CoverUrl>\\n            <AnchorId>as****hs</AnchorId>\\n            <Uv>100</Uv>\\n            <Extension>\\n                <key>test001</key>\\n            </Extension>\\n            <AnchorNick>User001</AnchorNick>\\n            <Pv>200</Pv>\\n            <OnlineCount>50</OnlineCount>\\n        </LiveList>\\n    </Result>\\n</ListLiveRoomsResponse>","errorExample":""}]',
            'title' => '批量查询直播信息',
        ],
        'ListLiveRoomsById' => [
            'summary' => '调用ListLiveRoomsById根据传入的直播ID批量查询指定的直播信息。',
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
            'systemTags' => [
                'operationType' => 'list',
            ],
            'parameters' => [
                [
                    'name' => 'AppId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '应用唯一标识，由6位小写字母、数字组成。',
                        'description' => '用户的应用ID，在控制台创建应用时生成。包含小写字母、数字，长度为6个字符。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '7m***q',
                    ],
                ],
                [
                    'name' => 'LiveIdList',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'title' => '直播ID列表。',
                        'description' => '直播ID列表。',
                        'type' => 'array',
                        'items' => [
                            'description' => '直播ID。数量最大为20。',
                            'type' => 'string',
                            'required' => false,
                            'example' => '["b7f2****ebb3"]',
                        ],
                        'required' => true,
                        'example' => '0',
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
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'FE22D613-D3C6-4A58-87CA-F21FC85AA08E',
                            ],
                            'Result' => [
                                'title' => '创建场景化直播返回的结果。',
                                'description' => '批量查询直播信息返回的结果。',
                                'type' => 'object',
                                'properties' => [
                                    'LiveList' => [
                                        'title' => '直播列表信息。',
                                        'description' => '直播列表信息。',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'AppId' => [
                                                    'title' => '应用ID。',
                                                    'description' => '用户的应用ID，在控制台创建应用时生成。包含小写字母、数字，长度为6个字符。',
                                                    'type' => 'string',
                                                    'example' => '7m***q',
                                                ],
                                                'LiveId' => [
                                                    'title' => '直播ID。',
                                                    'description' => '直播ID。',
                                                    'type' => 'string',
                                                    'example' => 'b7f2****ebb3',
                                                ],
                                                'Status' => [
                                                    'title' => '直播状态，0-在播 1-下播。',
                                                    'description' => '直播状态。取值：'."\n"
                                                        .'* **0**：已创建，未开始直播。'."\n"
                                                        .'* **1**：直播中。'."\n"
                                                        .'* **2**：直播结束。',
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                    'example' => '1',
                                                ],
                                                'RoomId' => [
                                                    'title' => '房间ID。',
                                                    'description' => '房间ID。',
                                                    'type' => 'string',
                                                    'example' => 'AE35-****-T95F',
                                                ],
                                                'ChatId' => [
                                                    'title' => '聊天ID。',
                                                    'description' => '弹幕ID。',
                                                    'type' => 'string',
                                                    'example' => '09***f8',
                                                ],
                                                'Title' => [
                                                    'title' => '标题。',
                                                    'description' => '直播标题。',
                                                    'type' => 'string',
                                                    'example' => 'Title001',
                                                ],
                                                'Notice' => [
                                                    'title' => '公告。',
                                                    'description' => '直播公告。',
                                                    'type' => 'string',
                                                    'example' => 'Notice001',
                                                ],
                                                'CoverUrl' => [
                                                    'title' => '封面。',
                                                    'description' => '直播封面。',
                                                    'type' => 'string',
                                                    'example' => 'http://***.png',
                                                ],
                                                'AnchorId' => [
                                                    'title' => '主播ID。',
                                                    'description' => '主播ID。',
                                                    'type' => 'string',
                                                    'example' => 'as****hs',
                                                ],
                                                'Uv' => [
                                                    'title' => '访问用户数。',
                                                    'description' => '访问用户数，同个访客多次访问直播间仅计算一个UV。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '100',
                                                ],
                                                'Extension' => [
                                                    'title' => '直播拓展字段。',
                                                    'description' => '直播拓展字段。',
                                                    'type' => 'object',
                                                    'additionalProperties' => [
                                                        'type' => 'string',
                                                        'example' => 'test001',
                                                        'description' => '直播拓展信息。',
                                                    ],
                                                ],
                                                'AnchorNick' => [
                                                    'title' => '主播昵称。',
                                                    'description' => '主播昵称。',
                                                    'type' => 'string',
                                                    'example' => 'User001',
                                                ],
                                                'Pv' => [
                                                    'title' => '访问用户人次。',
                                                    'description' => '访问用户人次，访客对同一直播间的多次访问，PV累加。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '200',
                                                ],
                                                'OnlineCount' => [
                                                    'title' => '在线用户数。',
                                                    'description' => '在线用户数。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '50',
                                                ],
                                                'CreateTime' => [
                                                    'title' => '直播的创建时间。单位为ms。',
                                                    'description' => '直播的创建时间。单位为ms。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '1624259500000',
                                                ],
                                                'StartTime' => [
                                                    'title' => '直播的开始时间。单位为ms。',
                                                    'description' => '直播的开始时间。单位为ms。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '1624259500000',
                                                ],
                                                'EndTime' => [
                                                    'title' => '直播的结束时间。单位为ms。',
                                                    'description' => '直播的结束时间。单位为ms。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '1624259500000',
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
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"FE22D613-D3C6-4A58-87CA-F21FC85AA08E\\",\\n  \\"Result\\": {\\n    \\"LiveList\\": [\\n      {\\n        \\"AppId\\": \\"7m***q\\",\\n        \\"LiveId\\": \\"b7f2****ebb3\\",\\n        \\"Status\\": 1,\\n        \\"RoomId\\": \\"AE35-****-T95F\\",\\n        \\"ChatId\\": \\"09***f8\\",\\n        \\"Title\\": \\"Title001\\",\\n        \\"Notice\\": \\"Notice001\\",\\n        \\"CoverUrl\\": \\"http://***.png\\",\\n        \\"AnchorId\\": \\"as****hs\\",\\n        \\"Uv\\": 100,\\n        \\"Extension\\": {\\n          \\"key\\": \\"test001\\"\\n        },\\n        \\"AnchorNick\\": \\"User001\\",\\n        \\"Pv\\": 200,\\n        \\"OnlineCount\\": 50,\\n        \\"CreateTime\\": 1624259500000,\\n        \\"StartTime\\": 1624259500000,\\n        \\"EndTime\\": 1624259500000\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<ListLiveRoomsByIdResponse>\\n    <RequestId>FE22D613-D3C6-4A58-87CA-F21FC85AA08E</RequestId>\\n    <Result>\\n        <LiveList>\\n            <AppId>7m***q</AppId>\\n            <LiveId>b7f2****ebb3</LiveId>\\n            <Status>1</Status>\\n            <RoomId>AE35-****-T95F</RoomId>\\n            <ChatId>09***f8</ChatId>\\n            <Title>RoomTitle001</Title>\\n            <Notice>RoomNotice001</Notice>\\n            <CoverUrl>http://***.png</CoverUrl>\\n            <AnchorId>as****hs</AnchorId>\\n            <Uv>100</Uv>\\n            <Extension>\\n                <key>test001</key>\\n            </Extension>\\n            <AnchorNick>User001</AnchorNick>\\n            <Pv>200</Pv>\\n            <OnlineCount>50</OnlineCount>\\n        </LiveList>\\n    </Result>\\n</ListLiveRoomsByIdResponse>","errorExample":""}]',
            'title' => '根据直播ID批量查询直播信息',
            'description' => '> 调用本接口最多可查询20条直播信息。',
        ],
        'GetLiveRoomStatistics' => [
            'summary' => '调用GetLiveRoomStatistics查询与指定直播相关的数据统计信息。后续计划迁入新方案，不推荐使用。',
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
                    'name' => 'AppId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '应用唯一标识，由6位小写字母、数字组成。',
                        'description' => '用户的应用ID，在控制台创建应用时生成。包含小写字母、数字，长度为6个字符。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '7m***q',
                    ],
                ],
                [
                    'name' => 'LiveId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '直播ID。',
                        'description' => '直播资源的唯一标识ID。'."\n",
                        'type' => 'string',
                        'required' => true,
                        'example' => 'b7f2****ebb3',
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
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'FE22D613-D3C6-4A58-87CA-F21FC85AA08E',
                            ],
                            'Result' => [
                                'title' => '创建场景化直播返回的结果。',
                                'description' => '查询直播统计数据返回的结果。',
                                'type' => 'object',
                                'properties' => [
                                    'LiveId' => [
                                        'title' => '直播ID。',
                                        'description' => '直播资源的唯一标识ID。'."\n",
                                        'type' => 'string',
                                        'example' => 'b7f2****ebb3',
                                    ],
                                    'Status' => [
                                        'title' => '直播状态，0-已创建 1-直播中 2-已关闭。',
                                        'description' => '直播状态。取值：'."\n"
                                            .'* **0**：已创建，未开始直播。'."\n"
                                            .'* **1**：直播中。'."\n"
                                            .'* **2**：直播结束。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '1',
                                    ],
                                    'Uv' => [
                                        'title' => '访问用户数。',
                                        'description' => '访问用户数，同个访客多次访问直播间仅计算一个UV。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '100',
                                    ],
                                    'Pv' => [
                                        'title' => '访问用户人次。',
                                        'description' => '访问用户人次，访客对同一直播间的多次访问，PV累加。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '200',
                                    ],
                                    'MessageCount' => [
                                        'title' => '互动消息数。',
                                        'description' => '互动消息数。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '500',
                                    ],
                                    'StartTime' => [
                                        'title' => '直播开始时间，单位：毫秒。',
                                        'description' => '直播开始时间，单位：毫秒。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '1624259500000',
                                    ],
                                    'EndTime' => [
                                        'title' => '直播结束时间，单位：毫秒。',
                                        'description' => '直播结束时间，单位：毫秒。直播结束后生成。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '1624259500000',
                                    ],
                                    'WatchLiveTime' => [
                                        'title' => '总观看时长，单位：毫秒。',
                                        'description' => '所有用户总观看时长，单位：毫秒。在直播中可获取该信息，数据延迟时间为几分钟；在2022.6.24 00:00:00之前创建的直播，需要在直播结束后生成。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '10000000',
                                    ],
                                    'LikeCount' => [
                                        'title' => '点赞数。',
                                        'description' => '点赞数。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '100',
                                    ],
                                    'OnlineCount' => [
                                        'title' => '在线用户数。',
                                        'description' => '在线用户数。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '50',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"FE22D613-D3C6-4A58-87CA-F21FC85AA08E\\",\\n  \\"Result\\": {\\n    \\"LiveId\\": \\"b7f2****ebb3\\",\\n    \\"Status\\": 1,\\n    \\"Uv\\": 100,\\n    \\"Pv\\": 200,\\n    \\"MessageCount\\": 500,\\n    \\"StartTime\\": 1624259500000,\\n    \\"EndTime\\": 1624259500000,\\n    \\"WatchLiveTime\\": 10000000,\\n    \\"LikeCount\\": 100,\\n    \\"OnlineCount\\": 50\\n  }\\n}","errorExample":""},{"type":"xml","example":"<GetLiveRoomStatisticsResponse>\\n    <RequestId>FE22D613-D3C6-4A58-87CA-F21FC85AA08E</RequestId>\\n    <Result>\\n        <LiveId>b7f2****ebb3</LiveId>\\n        <Status>1</Status>\\n        <Uv>100</Uv>\\n        <Pv>200</Pv>\\n        <MessageCount>500</MessageCount>\\n        <StartTime>1624259500000</StartTime>\\n        <EndTime>1624259500000</EndTime>\\n        <WatchLiveTime>10000000</WatchLiveTime>\\n        <LikeCount>100</LikeCount>\\n        <OnlineCount>50</OnlineCount>\\n    </Result>\\n</GetLiveRoomStatisticsResponse>","errorExample":""}]',
            'title' => '查询直播统计数据',
        ],
        'GetLiveRoomUserStatistics' => [
            'summary' => '调用GetLiveRoomUserStatistics分页查询与指定直播相关的用户观看数据。后续计划迁入新方案，不推荐使用。',
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
                    'name' => 'AppId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '应用唯一标识，由6位小写字母、数字组成。',
                        'description' => '用户的应用ID，在控制台创建应用时生成。包含小写字母、数字，长度为6个字符。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '7m***q',
                    ],
                ],
                [
                    'name' => 'LiveId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '直播ID。',
                        'description' => '直播资源的唯一标识ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'b7f2****ebb3',
                    ],
                ],
                [
                    'name' => 'PageNumber',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '查询页码，从1开始，传空默认查询第1页。',
                        'description' => '查询页码，从1开始，参数为空默认查询第1页。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '每页显示个数，最大支持50，参数为空默认显示个数为10。',
                        'description' => '每页显示个数，最大支持50，参数为空默认显示个数为10。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '25',
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
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'FE22D613-D3C6-4A58-87CA-F21FC85AA08E',
                            ],
                            'Result' => [
                                'title' => '创建场景化直播返回的结果。',
                                'description' => '分页查询直播用户数据统计的结果。',
                                'type' => 'object',
                                'properties' => [
                                    'LiveId' => [
                                        'title' => '直播ID。',
                                        'description' => '直播资源的唯一标识ID。',
                                        'type' => 'string',
                                        'example' => 'b7f2****ebb3',
                                    ],
                                    'TotalCount' => [
                                        'title' => '用户总数',
                                        'description' => '观看用户总数。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '100',
                                    ],
                                    'PageTotal' => [
                                        'title' => '用户总页数。',
                                        'description' => '观看用户总页数。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '10',
                                    ],
                                    'HasMore' => [
                                        'title' => '是否还有下一页。',
                                        'description' => '是否还有下一页。',
                                        'type' => 'boolean',
                                        'example' => 'true',
                                    ],
                                    'UserStatisticsList' => [
                                        'title' => '用户观看数据列表。',
                                        'description' => '用户观看数据列表。',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'UserId' => [
                                                    'title' => '用户ID。',
                                                    'description' => '用户ID。',
                                                    'type' => 'string',
                                                    'example' => 'User001',
                                                ],
                                                'WatchLiveTime' => [
                                                    'title' => '观看时长，单位：毫秒。',
                                                    'description' => '观看时长，单位：毫秒。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '100000',
                                                ],
                                                'CommentCount' => [
                                                    'description' => '该用户发送的弹幕消息数量。',
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                    'example' => '100',
                                                ],
                                                'LikeCount' => [
                                                    'description' => '该用户的点赞数量。',
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                    'example' => '100',
                                                ],
                                            ],
                                        ],
                                        'example' => '10000000',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"FE22D613-D3C6-4A58-87CA-F21FC85AA08E\\",\\n  \\"Result\\": {\\n    \\"LiveId\\": \\"b7f2****ebb3\\",\\n    \\"TotalCount\\": 100,\\n    \\"PageTotal\\": 10,\\n    \\"HasMore\\": true,\\n    \\"UserStatisticsList\\": [\\n      {\\n        \\"UserId\\": \\"User001\\",\\n        \\"WatchLiveTime\\": 100000,\\n        \\"CommentCount\\": 100,\\n        \\"LikeCount\\": 100\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<GetLiveRoomUserStatisticsResponse>\\n    <RequestId>FE22D613-D3C6-4A58-87CA-F21FC85AA08E</RequestId>\\n    <Result>\\n        <LiveId>b7f2****ebb3</LiveId>\\n        <TotalCount>100</TotalCount>\\n        <PageTotal>10</PageTotal>\\n        <HasMore>true</HasMore>\\n        <UserStatisticsList>\\n            <UserId>User001</UserId>\\n            <WatchLiveTime>100000</WatchLiveTime>\\n            <CommentCount>100</CommentCount>\\n            <LikeCount>100</LikeCount>\\n        </UserStatisticsList>\\n    </Result>\\n</GetLiveRoomUserStatisticsResponse>","errorExample":""}]',
            'title' => '分页查询直播用户数据统计',
            'description' => '观众的直播观看时长是用户观看时长的累加（包括多次观看，多设备观看），如果最终计算结果大于直播总时长，会按照直播总时长记录。',
        ],
        'GetLiveRecord' => [
            'summary' => '调用GetLiveRecord获取直播录制信息。可用于直播结束后获取回放地址，如果直播未结束，结果为空。',
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
                    'name' => 'AppId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '应用唯一标识，由6位小写字母、数字组成。',
                        'description' => '应用唯一标识，由6位小写字母、数字组成，由控制台创建后获取。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'lq****cu',
                    ],
                ],
                [
                    'name' => 'LiveId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '直播唯一标识，由调用CreateLiveRoom返回。',
                        'description' => '直播唯一标识，由调用CreateLiveRoom返回。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'AE35****T95F',
                    ],
                ],
                [
                    'name' => 'UserId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '操作人用户ID。',
                        'description' => '操作人用户ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '34**29',
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
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => 'Id of the request',
                                'type' => 'string',
                                'example' => 'FE22D613-D3C6-4A58-87CA-F21FC85AA08F',
                            ],
                            'Result' => [
                                'title' => 'API请求的返回结果结构体。',
                                'description' => 'API请求的返回结果结构体。',
                                'type' => 'object',
                                'properties' => [
                                    'PlaybackUrlMap' => [
                                        'description' => '回放地址集合。key值代表回放视频类型，取值m3u8, mp4, flv，当前仅提供m3u8类型。',
                                        'type' => 'object',
                                        'additionalProperties' => [
                                            'type' => 'array',
                                            'items' => [
                                                'type' => 'string',
                                                'example' => 'http://demo.aliyundoc.com/live/b7f29c02-****-40fd-****-e8d06a8aebb3.m3u8?auth_key=1627522726-0-0-******e620b363d4cf8a8e3',
                                                'description' => '回放URL。',
                                            ],
                                            'description' => '地址列表。',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"FE22D613-D3C6-4A58-87CA-F21FC85AA08F\\",\\n  \\"Result\\": {\\n    \\"PlaybackUrlMap\\": {\\n      \\"key\\": [\\n        \\"http://demo.aliyundoc.com/live/b7f29c02-****-40fd-****-e8d06a8aebb3.m3u8?auth_key=1627522726-0-0-******e620b363d4cf8a8e3\\"\\n      ]\\n    }\\n  }\\n}","errorExample":""},{"type":"xml","example":"<GetLiveRecordResponse>\\n    <RequestId>FE22D613-D3C6-4A58-87CA-F21FC85AA08E</RequestId>\\n    <Result>\\n        <PlaybackUrlMap>\\n            <m3u8>http://***.aliyundoc.nm/***8fc5-***f8****.webm?****77650&amp;***xzSQU***</m3u8>\\n        </PlaybackUrlMap>\\n    </Result>\\n</GetLiveRecordResponse>","errorExample":""}]',
            'title' => '获取直播录制信息',
        ],
        'CreateLiveRecordSliceFile' => [
            'summary' => '调用CreateLiveRecordSliceFile创建直播录制片段文件。',
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
                    'name' => 'AppId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '应用唯一标识，由6位小写字母、数字组成。',
                        'description' => '应用唯一标识，由6位小写字母、数字组成。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'lq****cu',
                    ],
                ],
                [
                    'name' => 'LiveId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '直播ID。',
                        'description' => '直播ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'AE35****T95F',
                    ],
                ],
                [
                    'name' => 'StartTime',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '片段开始时间，时间戳，单位为毫秒。',
                        'description' => '片段开始时间，时间戳，单位为毫秒。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '1577836800000',
                    ],
                ],
                [
                    'name' => 'EndTime',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '片段结束时间，时间戳，单位为毫秒。',
                        'description' => '片段结束时间，时间戳，单位为毫秒。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '1577836800000',
                    ],
                ],
                [
                    'name' => 'FileName',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '自定义文件名称。',
                        'description' => '自定义文件名称。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'sliceFile',
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
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'ER52****O9CA',
                            ],
                            'Result' => [
                                'title' => '创建场景化直播返回的结果。',
                                'description' => '创建场景化直播返回的结果。',
                                'type' => 'object',
                                'properties' => [
                                    'SliceRecordUrl' => [
                                        'title' => '片段录制文件的地址。',
                                        'description' => '片段录制文件的地址。',
                                        'type' => 'string',
                                        'example' => 'http://demo-app-playback.com/**.m3u8?auth_key=1627522726-0-0-******e620b363d4cf8a8e3',
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
                        'errorCode' => 'Invalid.Live.RecordContentExceed',
                        'errorMessage' => 'The record content between StartTime and EndTime is exceeded, please narrow down the range.',
                    ],
                    [
                        'errorCode' => 'Invalid.Live.RecordContentTooShort',
                        'errorMessage' => 'The record time between StartTime and EndTime is too short, please enlarger the range.',
                    ],
                    [
                        'errorCode' => 'Invalid.Live.RecordEndTimeMismatch',
                        'errorMessage' => 'Specified end time does not math the specified start time.',
                    ],
                    [
                        'errorCode' => 'Invalid.Live.RecordInvalidBucket',
                        'errorMessage' => 'The oss bucket is invalid.',
                    ],
                    [
                        'errorCode' => 'Invalid.Live.RecordLiveNotFound',
                        'errorMessage' => 'The live is not found.',
                    ],
                    [
                        'errorCode' => 'Invalid.Live.RecordLiveStreamNotFound',
                        'errorMessage' => 'The live stream info is not found.',
                    ],
                    [
                        'errorCode' => 'Invalid.Live.RecordNoContent',
                        'errorMessage' => 'The record has no content, please check the live record toggle.',
                    ],
                    [
                        'errorCode' => 'Invalid.Live.RecordPlaybackDomainNotFound',
                        'errorMessage' => 'The record playback domain is not found, please open the liveRecordToggle in imp console and config playback domain.',
                    ],
                    [
                        'errorCode' => 'Invalid.Live.WrongRecordOssConfig',
                        'errorMessage' => 'Specified oss config is wrong.',
                    ],
                    [
                        'errorCode' => 'Invalid.Scene.LiveNotExist',
                        'errorMessage' => 'The live record does not exist. Please check again.',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"ER52****O9CA\\",\\n  \\"Result\\": {\\n    \\"SliceRecordUrl\\": \\"http://demo-app-playback.com/**.m3u8?auth_key=1627522726-0-0-******e620b363d4cf8a8e3\\"\\n  }\\n}","type":"json"}]',
            'title' => '创建直播录制片段文件',
        ],
        'ListLiveFiles' => [
            'summary' => '调用ListLiveFiles获取直播录制文件列表信息。',
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
                    'name' => 'AppId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '应用ID。',
                        'description' => '应用ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'lq**xy',
                    ],
                ],
                [
                    'name' => 'LiveId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '直播ID。',
                        'description' => '直播ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'acbder-**-34uh',
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
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => 'Id of the request',
                                'type' => 'string',
                                'example' => 'FE22D613-D3C6-4A58-87CA-F21FC85AA08E',
                            ],
                            'Result' => [
                                'title' => '返回结果。',
                                'description' => '返回结果。',
                                'type' => 'object',
                                'properties' => [
                                    'FileList' => [
                                        'title' => '文件列表。',
                                        'description' => '文件列表。',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'FileName' => [
                                                    'title' => '文件名称。',
                                                    'description' => '文件名称。',
                                                    'type' => 'string',
                                                    'example' => '12345/**/1.ts',
                                                ],
                                                'Url' => [
                                                    'title' => '文件下载地址。',
                                                    'description' => '文件下载地址，有效期为7天。',
                                                    'type' => 'string',
                                                    'example' => 'https://aliyundoc.com/live/b7f29c02-****-40fd-****-e8d06a8aebb3/1.ts',
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
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"FE22D613-D3C6-4A58-87CA-F21FC85AA08E\\",\\n  \\"Result\\": {\\n    \\"FileList\\": [\\n      {\\n        \\"FileName\\": \\"12345/**/1.ts\\",\\n        \\"Url\\": \\"https://aliyundoc.com/live/b7f29c02-****-40fd-****-e8d06a8aebb3/1.ts\\"\\n      }\\n    ]\\n  }\\n}","type":"json"}]',
            'title' => '获取直播录制文件列表',
            'description' => '该接口适用于2022年2月18号之后开通低代码音视频工厂的客户，且适用于开启了直播录制功能，有录制文件生成的场景。',
        ],
        'DeleteLiveFilesById' => [
            'summary' => '调用DeleteLiveFilesById接口删除该直播的录制文件。',
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
                    'name' => 'AppId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '应用ID。',
                        'description' => '应用ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'lq**xy',
                    ],
                ],
                [
                    'name' => 'LiveId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '直播ID。',
                        'description' => '直播ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'acbder-**-34uh',
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
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => 'Id of the request',
                                'type' => 'string',
                                'example' => 'FE22D613-D3C6-4A58-87CA-F21FC85AA08E',
                            ],
                            'Result' => [
                                'title' => '返回结果。',
                                'description' => '返回结果。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"FE22D613-D3C6-4A58-87CA-F21FC85AA08E\\",\\n  \\"Result\\": true\\n}","type":"json"}]',
            'title' => '根据直播ID删除该直播的录制文件',
            'description' => '该接口适用于2022年2月18号之后开通低代码音视频工厂的客户，且适用于开启了直播录制功能，有录制文件生成的场景。',
        ],
        'CreateLiveRoom' => [
            'summary' => '调用CreateLiveRoom创建状态为未开播的新直播。',
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
            'systemTags' => [
                'operationType' => 'create',
            ],
            'parameters' => [
                [
                    'name' => 'AppId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '应用唯一标识，由6位小写字母、数字组成。',
                        'description' => '用户的应用ID，在控制台创建应用时生成。包含小写字母、数字，长度为6个字符。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '7m***q',
                    ],
                ],
                [
                    'name' => 'Title',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '标题，支持中英文，最大长度32位。',
                        'description' => '直播标题，支持中英文，最大长度32位。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'Title001',
                    ],
                ],
                [
                    'name' => 'Notice',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '公告，支持中英文，最大长度256位。',
                        'description' => '直播公告，支持中英文，最大长度256位。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Notice001',
                    ],
                ],
                [
                    'name' => 'CoverUrl',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '封面，支持图片地址链接格式',
                        'description' => '直播封面，支持图片地址链接格式，最大长度256位。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'http://***.png',
                    ],
                ],
                [
                    'name' => 'Extension',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'title' => '拓展字段，按需传递，需要额外记录的房间属性。最大支持4096个字节。',
                        'description' => '拓展字段，按需传递，需要额外记录的直播属性。最大长度4096位。',
                        'type' => 'object',
                        'required' => false,
                        'additionalProperties' => [
                            'type' => 'string',
                            'required' => false,
                            'example' => 'test001',
                        ],
                        'example' => 'AE35****T95F',
                    ],
                ],
                [
                    'name' => 'AnchorId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '主播id，仅支持英文和数字，最大长度36位。',
                        'description' => '主播ID，仅支持英文和数字，最大长度36位。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'as****hs',
                    ],
                ],
                [
                    'name' => 'AnchorNick',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '主播昵称。',
                        'description' => '主播昵称，支持中英文，最大长度32位。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'User001',
                    ],
                ],
                [
                    'name' => 'UserId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '操作人ID。',
                        'description' => '操作人ID，仅支持英文和数字，最大长度36位。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'as****hs',
                    ],
                ],
                [
                    'name' => 'EnableLinkMic',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '是否开启连麦。',
                        'description' => '是否开启连麦功能，默认为false。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
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
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'FE22D613-D3C6-4A58-87CA-F21FC85AA08E',
                            ],
                            'Result' => [
                                'title' => '创建场景化直播返回的结果。',
                                'description' => '创建直播返回的结果。',
                                'type' => 'object',
                                'properties' => [
                                    'AppId' => [
                                        'title' => '应用ID。',
                                        'description' => '用户的应用ID，在控制台创建应用时生成。包含小写字母、数字，长度为6个字符。',
                                        'type' => 'string',
                                        'example' => '7m***q',
                                    ],
                                    'RoomId' => [
                                        'title' => '房间ID。',
                                        'description' => '房间的唯一标识ID。用于进出房间等相关接口的使用。',
                                        'type' => 'string',
                                        'example' => 'AE35-****-T95F',
                                    ],
                                    'LiveId' => [
                                        'title' => '直播ID。',
                                        'description' => '直播的唯一标识ID。',
                                        'type' => 'string',
                                        'example' => 'b7f2****ebb3',
                                    ],
                                    'ChatId' => [
                                        'title' => '聊天ID。',
                                        'description' => '弹幕的唯一标识。用户发送消息等相关接口的使用。',
                                        'type' => 'string',
                                        'example' => '09***f8',
                                    ],
                                    'Title' => [
                                        'title' => '标题。',
                                        'description' => '直播标题。',
                                        'type' => 'string',
                                        'example' => 'Title001',
                                    ],
                                    'Notice' => [
                                        'title' => '公告。',
                                        'description' => '直播公告。',
                                        'type' => 'string',
                                        'example' => 'Notice001',
                                    ],
                                    'CoverUrl' => [
                                        'title' => '封面。',
                                        'description' => '直播封面。',
                                        'type' => 'string',
                                        'example' => 'http://***.png',
                                    ],
                                    'AnchorId' => [
                                        'title' => '主播ID。',
                                        'description' => '主播ID。',
                                        'type' => 'string',
                                        'example' => 'as****hs',
                                    ],
                                    'PlaybackUrl' => [
                                        'title' => '直播回放地址。',
                                        'description' => '直播回放地址。直播开始时生成，直播结束后可以观看。',
                                        'type' => 'string',
                                        'example' => 'http://demo-app-playback.com/live/b7f29c02-****-40fd-****-e8d06a8aebb3.m3u8?auth_key=1627522726-0-0-******e620b363d4cf8a8e3',
                                    ],
                                    'PushUrl' => [
                                        'title' => '直播推流地址。',
                                        'description' => '直播推流地址。',
                                        'type' => 'string',
                                        'example' => 'rtmp://demo-app-push.com/live/e620****a8e3?auth_key=e620****a8e3',
                                    ],
                                    'LiveUrl' => [
                                        'title' => '直播拉流地址。',
                                        'description' => '直播播流地址。',
                                        'type' => 'string',
                                        'example' => 'http://demo-app-live.com/live/b7f29c02-****-40fd-****-e8d06a8aebb3.flv?auth_key=1627522726-0-0-******e620b363d4cf8a8e3',
                                    ],
                                    'PluginInstanceInfoList' => [
                                        'title' => '活跃插件列表。',
                                        'description' => '活跃插件列表。',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'PluginType' => [
                                                    'title' => '插件唯一标识，取值：live-直播，wb-白板，chat-聊天，rtc。',
                                                    'description' => '插件唯一标识，取值：'."\n"
                                                        .'- **live**：直播。'."\n"
                                                        .'- **wb**：白板。'."\n"
                                                        .'- **chat**：聊天。'."\n"
                                                        .'- **rtc**：音视频通信。',
                                                    'type' => 'string',
                                                    'example' => 'live',
                                                ],
                                                'PluginId' => [
                                                    'title' => '插件实例唯一标识。',
                                                    'description' => '插件实例唯一标识。',
                                                    'type' => 'string',
                                                    'example' => 'HASU-****-ASHD',
                                                ],
                                                'CreateTime' => [
                                                    'title' => '插件实例创建时间戳，单位：毫秒。',
                                                    'description' => '插件实例创建时间戳，单位：毫秒。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '1624589848000',
                                                ],
                                                'Extension' => [
                                                    'title' => '插件拓展字段。',
                                                    'description' => '插件拓展字段。',
                                                    'type' => 'object',
                                                    'additionalProperties' => [
                                                        'type' => 'string',
                                                        'example' => 'test001',
                                                        'description' => '插件拓展信息。',
                                                    ],
                                                ],
                                            ],
                                        ],
                                    ],
                                    'Extension' => [
                                        'title' => '直播拓展字段。',
                                        'description' => '直播拓展字段。',
                                        'type' => 'object',
                                        'additionalProperties' => [
                                            'type' => 'string',
                                            'example' => 'test001',
                                            'description' => '直播拓展信息。',
                                        ],
                                    ],
                                    'AnchorNick' => [
                                        'title' => '主播昵称。',
                                        'description' => '主播昵称。',
                                        'type' => 'string',
                                        'example' => 'User001',
                                    ],
                                    'HlsUrl' => [
                                        'title' => '原画HLS播放地址。',
                                        'description' => '原画HLS播放地址。',
                                        'type' => 'string',
                                        'example' => 'http://demo-app-live.com/live/b7f29c02-****-40fd-****-e8d06a8aebb3.m3u8?auth_key=1627522726-0-0-******e620b363d4cf8a8e3',
                                    ],
                                    'ArtcInfo' => [
                                        'title' => 'RTS低延迟播流信息。',
                                        'description' => 'RTS低延迟播流信息。',
                                        'type' => 'object',
                                        'properties' => [
                                            'ArtcUrl' => [
                                                'title' => 'RTS原码流地址，推荐移动端使用。',
                                                'description' => 'RTS原码流地址，推荐移动端使用。',
                                                'type' => 'string',
                                                'example' => 'artc://demo-app-live.com/live/b7f29c02-****-40fd-****-e8d06a8aebb3?auth_key=1627522726-0-0-******e620b363d4cf8a8e3',
                                            ],
                                            'ArtcH5Url' => [
                                                'title' => 'RTS转码流地址，推荐web端使用。',
                                                'description' => 'RTS转码流地址，推荐Web端使用。',
                                                'type' => 'string',
                                                'example' => 'artc://demo-app-live.com/live/b7f29c02-****-40fd-****-e8d06a8aebb3_origin-RTS?auth_key=1627522726-0-0-******e620b363d4cf8a8e3',
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
                        'errorCode' => 'Invalid.Live.ConfigNotFound',
                        'errorMessage' => 'The live push domain and pull domain config not found.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"FE22D613-D3C6-4A58-87CA-F21FC85AA08E\\",\\n  \\"Result\\": {\\n    \\"AppId\\": \\"7m***q\\",\\n    \\"RoomId\\": \\"AE35-****-T95F\\",\\n    \\"LiveId\\": \\"b7f2****ebb3\\",\\n    \\"ChatId\\": \\"09***f8\\",\\n    \\"Title\\": \\"Title001\\",\\n    \\"Notice\\": \\"Notice001\\",\\n    \\"CoverUrl\\": \\"http://***.png\\",\\n    \\"AnchorId\\": \\"as****hs\\",\\n    \\"PlaybackUrl\\": \\"http://demo-app-playback.com/live/b7f29c02-****-40fd-****-e8d06a8aebb3.m3u8?auth_key=1627522726-0-0-******e620b363d4cf8a8e3\\",\\n    \\"PushUrl\\": \\"rtmp://demo-app-push.com/live/e620****a8e3?auth_key=e620****a8e3\\",\\n    \\"LiveUrl\\": \\"http://demo-app-live.com/live/b7f29c02-****-40fd-****-e8d06a8aebb3.flv?auth_key=1627522726-0-0-******e620b363d4cf8a8e3\\",\\n    \\"PluginInstanceInfoList\\": [\\n      {\\n        \\"PluginType\\": \\"live\\",\\n        \\"PluginId\\": \\"HASU-****-ASHD\\",\\n        \\"CreateTime\\": 1624589848000,\\n        \\"Extension\\": {\\n          \\"key\\": \\"test001\\"\\n        }\\n      }\\n    ],\\n    \\"Extension\\": {\\n      \\"key\\": \\"test001\\"\\n    },\\n    \\"AnchorNick\\": \\"User001\\",\\n    \\"HlsUrl\\": \\"http://demo-app-live.com/live/b7f29c02-****-40fd-****-e8d06a8aebb3.m3u8?auth_key=1627522726-0-0-******e620b363d4cf8a8e3\\",\\n    \\"ArtcInfo\\": {\\n      \\"ArtcUrl\\": \\"artc://demo-app-live.com/live/b7f29c02-****-40fd-****-e8d06a8aebb3?auth_key=1627522726-0-0-******e620b363d4cf8a8e3\\",\\n      \\"ArtcH5Url\\": \\"artc://demo-app-live.com/live/b7f29c02-****-40fd-****-e8d06a8aebb3_origin-RTS?auth_key=1627522726-0-0-******e620b363d4cf8a8e3\\"\\n    }\\n  }\\n}","errorExample":""},{"type":"xml","example":"<CreateLiveRoomResponse>\\n    <RequestId>FE22D613-D3C6-4A58-87CA-F21FC85AA08E</RequestId>\\n    <Result>\\n        <AppId>7m***q</AppId>\\n        <RoomId>AE35-****-T95F</RoomId>\\n        <LiveId>b7f2****ebb3</LiveId>\\n        <ChatId>09***f8</ChatId>\\n        <Title>Title001</Title>\\n        <Notice>Notice001</Notice>\\n        <CoverUrl>http://***.png</CoverUrl>\\n        <AnchorId>as****hs</AnchorId>\\n        <PlaybackUrl>http://demo-app-playback.com/live/b7f29c02-****-40fd-****-e8d06a8aebb3.m3u8?auth_key=1627522726-0-0-******e620b363d4cf8a8e3</PlaybackUrl>\\n        <PushUrl>rtmp://demo-app-push.com/live/e620****a8e3?auth_key=e620****a8e3</PushUrl>\\n        <LiveUrl>http://demo-app-live.com/live/b7f29c02-****-40fd-****-e8d06a8aebb3.flv?auth_key=1627522726-0-0-******e620b363d4cf8a8e3</LiveUrl>\\n        <PluginInstanceInfoList>\\n            <PluginType>live</PluginType>\\n            <PluginId>HASU-****-ASHD</PluginId>\\n            <CreateTime>1624589848000</CreateTime>\\n            <Extension>\\n                <key>test001</key>\\n            </Extension>\\n        </PluginInstanceInfoList>\\n        <Extension>\\n            <key>test001</key>\\n        </Extension>\\n        <AnchorNick>User001</AnchorNick>\\n        <HlsUrl>http://demo-app-live.com/live/b7f29c02-****-40fd-****-e8d06a8aebb3.m3u8?auth_key=1627522726-0-0-******e620b363d4cf8a8e3</HlsUrl>\\n        <ArtcInfo>\\n            <ArtcUrl>artc://demo-app-live.com/live/b7f29c02-****-40fd-****-e8d06a8aebb3?auth_key=1627522726-0-0-******e620b363d4cf8a8e3</ArtcUrl>\\n            <ArtcH5Url>artc://demo-app-live.com/live/b7f29c02-****-40fd-****-e8d06a8aebb3_origin-RTS?auth_key=1627522726-0-0-******e620b363d4cf8a8e3</ArtcH5Url>\\n        </ArtcInfo>\\n    </Result>\\n</CreateLiveRoomResponse>","errorExample":""}]',
            'title' => '创建直播',
            'description' => '低代码音频工厂问题咨询、支持服务，可搜索钉钉群号10570030108入群咨询专家。',
        ],
        'DeleteLiveRoom' => [
            'summary' => '调用DeleteLiveRoom删除直播记录。',
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
            'systemTags' => [
                'operationType' => 'delete',
            ],
            'parameters' => [
                [
                    'name' => 'AppId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '应用唯一标识，由6位小写字母、数字组成。',
                        'description' => '用户的应用ID，在控制台创建应用时生成。包含小写字母、数字，长度为6个字符。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '7m***q',
                    ],
                ],
                [
                    'name' => 'LiveId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '直播ID。',
                        'description' => '直播的唯一标识ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'b7f2****ebb3',
                    ],
                ],
                [
                    'name' => 'UserId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '操作人ID。',
                        'description' => '操作人ID，仅支持英文和数字，最大长度36位。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'as****hs',
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
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'FE22D613-D3C6-4A58-87CA-F21FC85AA08E',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'Forbidden.Scene.LiveStillStreaming',
                        'errorMessage' => 'Live is still streaming and cannot be deleted.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"FE22D613-D3C6-4A58-87CA-F21FC85AA08E\\"\\n}","errorExample":""},{"type":"xml","example":"<DeleteLiveRoomResponse>\\n    <RequestId>FE22D613-D3C6-4A58-87CA-F21FC85AA08E</RequestId>\\n</DeleteLiveRoomResponse>","errorExample":""}]',
            'title' => '删除直播',
        ],
        'PublishLiveRoom' => [
            'summary' => '调用PublishLiveRoom发布直播，将直播状态转变为直播中，并获取推拉流地址。',
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
            'systemTags' => [
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'AppId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '应用唯一标识，由6位小写字母、数字组成。',
                        'description' => '用户的应用ID，在控制台创建应用时生成。包含小写字母、数字，长度为6个字符。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '7m***q',
                    ],
                ],
                [
                    'name' => 'LiveId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '直播ID。',
                        'description' => '直播的唯一标识ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'b7f2****ebb3',
                    ],
                ],
                [
                    'name' => 'UserId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '操作人ID。',
                        'description' => '操作人ID，仅支持英文和数字，最大长度36位。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'as****hs',
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
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'FE22D613-D3C6-4A58-87CA-F21FC85AA08E',
                            ],
                            'Result' => [
                                'title' => '创建场景化直播返回的结果。',
                                'description' => '创建场景化直播返回的结果。',
                                'type' => 'object',
                                'properties' => [
                                    'LiveId' => [
                                        'title' => '直播ID。',
                                        'description' => '直播ID。',
                                        'type' => 'string',
                                        'example' => 'b7f2****ebb3',
                                    ],
                                    'LiveUrl' => [
                                        'title' => '直播拉流地址。',
                                        'description' => '直播播流地址。',
                                        'type' => 'string',
                                        'example' => 'http://demo-app-live.com/live/b7f29c02-****-40fd-****-e8d06a8aebb3.flv?auth_key=1627522726-0-0-******e620b363d4cf8a8e3',
                                    ],
                                    'PushUrl' => [
                                        'title' => '直播推流地址。',
                                        'description' => '直播推流地址。',
                                        'type' => 'string',
                                        'example' => 'rtmp://demo-app-push.com/live/b7f29c02-****-40fd-****-e8d06a8aebb3?auth_key=1627522726-0-0-******e620b363d4cf8a8e3',
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
                        'errorCode' => 'Invalid.Live.StatusNotMatch',
                        'errorMessage' => 'The live status not match.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"FE22D613-D3C6-4A58-87CA-F21FC85AA08E\\",\\n  \\"Result\\": {\\n    \\"LiveId\\": \\"b7f2****ebb3\\",\\n    \\"LiveUrl\\": \\"http://demo-app-live.com/live/b7f29c02-****-40fd-****-e8d06a8aebb3.flv?auth_key=1627522726-0-0-******e620b363d4cf8a8e3\\",\\n    \\"PushUrl\\": \\"rtmp://demo-app-push.com/live/b7f29c02-****-40fd-****-e8d06a8aebb3?auth_key=1627522726-0-0-******e620b363d4cf8a8e3\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<PublishLiveRoomResponse>\\n    <RequestId>ER52****O9CA</RequestId>\\n    <Result>\\n        <LiveId>b7f2****ebb3</LiveId>\\n        <LiveUrl>http://demo-app-live.com/live/b7f29c02-****-40fd-****-e8d06a8aebb3.flv?auth_key=1627522726-0-0-******e620b363d4cf8a8e3</LiveUrl>\\n        <PushUrl>rtmp://demo-app-push.com/live/b7f29c02-****-40fd-****-e8d06a8aebb3?auth_key=1627522726-0-0-******e620b363d4cf8a8e3</PushUrl>\\n    </Result>\\n</PublishLiveRoomResponse>","errorExample":""}]',
            'title' => '发布直播',
        ],
        'UpdateLiveRoom' => [
            'summary' => '调用UpdateLiveRoom更新指定直播相关信息。',
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
            'systemTags' => [
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'AppId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '应用唯一标识，由6位小写字母、数字组成。',
                        'description' => '用户的应用ID，在控制台创建应用时生成。包含小写字母、数字，长度为6个字符。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '7m***q',
                    ],
                ],
                [
                    'name' => 'Title',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '标题，支持中英文，最大长度32位。',
                        'description' => '直播标题，支持中英文，最大长度32位。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Title001',
                    ],
                ],
                [
                    'name' => 'Notice',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '公告，支持中英文，最大长度256位。',
                        'description' => '直播公告，支持中英文，最大长度256位。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Notice001',
                    ],
                ],
                [
                    'name' => 'CoverUrl',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '封面，支持图片地址链接格式',
                        'description' => '直播封面，支持图片地址链接格式，最大长度256位。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'http://***.png',
                    ],
                ],
                [
                    'name' => 'Extension',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'title' => '拓展字段，按需传递，需要额外记录的房间属性。',
                        'description' => '拓展字段，按需传递，需要额外记录的房间属性。',
                        'type' => 'object',
                        'required' => false,
                        'additionalProperties' => [
                            'type' => 'string',
                            'required' => false,
                            'example' => 'test001',
                        ],
                        'example' => 'AE35****T95F',
                    ],
                ],
                [
                    'name' => 'AnchorId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '主播id，仅支持英文和数字，最大长度36位。',
                        'description' => '主播ID，仅支持英文和数字，最大长度36位。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'as****hs',
                    ],
                ],
                [
                    'name' => 'AnchorNick',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '主播昵称。',
                        'description' => '主播昵称，支持中英文，最大长度32位。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'User001',
                    ],
                ],
                [
                    'name' => 'UserId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '操作人ID。',
                        'description' => '操作人ID，仅支持英文和数字，最大长度36位。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'user001',
                    ],
                ],
                [
                    'name' => 'LiveId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '直播ID。',
                        'description' => '直播的唯一标识ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'b7f2****ebb3',
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
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'FE22D613-D3C6-4A58-87CA-F21FC85AA08E',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"FE22D613-D3C6-4A58-87CA-F21FC85AA08E\\"\\n}","errorExample":""},{"type":"xml","example":"<UpdateLiveRoomResponse>\\n    <RequestId>FE22D613-D3C6-4A58-87CA-F21FC85AA08E</RequestId>\\n</UpdateLiveRoomResponse>","errorExample":""}]',
            'title' => '更新直播信息',
        ],
        'StopLiveRoom' => [
            'summary' => '调用StopLiveRoom停止指定直播，直播状态改变为直播结束。',
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
            'systemTags' => [
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'AppId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '应用唯一标识，由6位小写字母、数字组成。',
                        'description' => '用户的应用ID，在控制台创建应用时生成。包含小写字母、数字，长度为6个字符。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '7m***q',
                    ],
                ],
                [
                    'name' => 'LiveId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '直播ID。',
                        'description' => '直播的唯一标识ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'b7f2****ebb3',
                    ],
                ],
                [
                    'name' => 'UserId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '操作人ID。',
                        'description' => '操作人ID，仅支持英文和数字，最大长度36位。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'as****hs',
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
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'FE22D613-D3C6-4A58-87CA-F21FC85AA08E',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                403 => [
                    [
                        'errorCode' => 'Forbidden.Live.PermissionDenied',
                        'errorMessage' => 'The permission is denied.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"FE22D613-D3C6-4A58-87CA-F21FC85AA08E\\"\\n}","errorExample":""},{"type":"xml","example":"<StopLiveRoomResponse>\\n    <RequestId>FE22D613-D3C6-4A58-87CA-F21FC85AA08E</RequestId>\\n</StopLiveRoomResponse>","errorExample":""}]',
            'title' => '停止直播',
        ],
        'GetLiveRoom' => [
            'summary' => '调用GetLiveRoom查询指定直播相关信息。',
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
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'AppId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '应用唯一标识，由6位小写字母、数字组成。',
                        'description' => '用户的应用ID，在控制台创建应用时生成。包含小写字母、数字，长度为6个字符。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '7m***q',
                    ],
                ],
                [
                    'name' => 'LiveId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '直播ID。',
                        'description' => '直播的唯一标识ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'b7f2****ebb3',
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
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'FE22D613-D3C6-4A58-87CA-F21FC85AA08E',
                            ],
                            'Result' => [
                                'title' => '创建场景化直播返回的结果。',
                                'description' => '查询直播详情返回的结果。',
                                'type' => 'object',
                                'properties' => [
                                    'AppId' => [
                                        'title' => '应用ID。',
                                        'description' => '用户的应用ID，在控制台创建应用时生成。包含小写字母、数字，长度为6个字符。',
                                        'type' => 'string',
                                        'example' => '7m***q',
                                    ],
                                    'LiveId' => [
                                        'title' => '直播ID。',
                                        'description' => '直播的唯一标识ID。',
                                        'type' => 'string',
                                        'example' => 'b7f2****ebb3',
                                    ],
                                    'Status' => [
                                        'title' => '直播状态，0-在播 1-下播。',
                                        'description' => '直播状态。取值：'."\n"
                                            .'* **0**：已创建，未开始直播。'."\n"
                                            .'* **1**：直播中。'."\n"
                                            .'* **2**：直播结束。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '1',
                                    ],
                                    'RoomId' => [
                                        'title' => '房间ID。',
                                        'description' => '房间的唯一标识ID。',
                                        'type' => 'string',
                                        'example' => 'AE35-****-T95F',
                                    ],
                                    'ChatId' => [
                                        'title' => '聊天ID。',
                                        'description' => '弹幕的唯一标识。',
                                        'type' => 'string',
                                        'example' => '09***f8',
                                    ],
                                    'Title' => [
                                        'title' => '标题。',
                                        'description' => '直播标题。',
                                        'type' => 'string',
                                        'example' => 'Title001',
                                    ],
                                    'Notice' => [
                                        'title' => '公告。',
                                        'description' => '直播公告。',
                                        'type' => 'string',
                                        'example' => 'Notice001',
                                    ],
                                    'CoverUrl' => [
                                        'title' => '封面。',
                                        'description' => '直播封面。',
                                        'type' => 'string',
                                        'example' => 'http://***.png',
                                    ],
                                    'AnchorId' => [
                                        'title' => '主播ID。',
                                        'description' => '主播ID。',
                                        'type' => 'string',
                                        'example' => 'as****hs',
                                    ],
                                    'Uv' => [
                                        'title' => '访问用户数。',
                                        'description' => '访问用户数，同个访客多次访问直播间仅计算一个UV。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '100',
                                    ],
                                    'OnlineCount' => [
                                        'title' => '在线用户数。',
                                        'description' => '在线用户数。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '50',
                                    ],
                                    'PlaybackUrl' => [
                                        'title' => '直播回放地址。',
                                        'description' => '直播回放地址。直播开始时生成，直播结束后可以观看。',
                                        'type' => 'string',
                                        'example' => 'http://demo-app-playback.com/live/b7f29c02-****-40fd-****-e8d06a8aebb3.m3u8?auth_key=1627522726-0-0-******e620b363d4cf8a8e3',
                                    ],
                                    'PlaybackUrlHttps' => [
                                        'title' => 'https协议的直播回放地址',
                                        'description' => 'https协议的直播回放地址。',
                                        'type' => 'string',
                                        'example' => 'https://demo-app-playback.com/live/b7f29c02-****-40fd-****-e8d06a8aebb3.m3u8?auth_key=1627522726-0-0-******e620b363d4cf8a8e3',
                                    ],
                                    'CreateTime' => [
                                        'title' => '直播创建时间，单位：毫秒。',
                                        'description' => '直播创建时间，单位：毫秒。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '1624259500000',
                                    ],
                                    'EndTime' => [
                                        'title' => '直播结束时间，单位：毫秒。',
                                        'description' => '直播结束时间，单位：毫秒。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '1624259500000',
                                    ],
                                    'PushUrl' => [
                                        'title' => '直播推流地址。',
                                        'description' => '直播推流地址。',
                                        'type' => 'string',
                                        'example' => 'rtmp://demo-app-push.com/live/b7f29c02-****-40fd-****-e8d06a8aebb3?auth_key=1627522726-0-0-******e620b363d4cf8a8e3',
                                    ],
                                    'LiveUrl' => [
                                        'title' => '直播拉流地址。',
                                        'description' => '直播播流地址。',
                                        'type' => 'string',
                                        'example' => 'http://demo-app-live.com/live/b7f29c02-****-40fd-****-e8d06a8aebb3.flv?auth_key=1627522726-0-0-******e620b363d4cf8a8e3',
                                    ],
                                    'LiveUrlHttps' => [
                                        'title' => 'https协议的直播拉流地址。',
                                        'description' => 'https协议的直播拉流地址。',
                                        'type' => 'string',
                                        'example' => 'https://demo-app-live.com/live/b7f29c02-****-40fd-****-e8d06a8aebb3.flv?auth_key=1627522726-0-0-******e620b363d4cf8a8e3',
                                    ],
                                    'PluginInstanceInfoList' => [
                                        'title' => '活跃插件列表。',
                                        'description' => '活跃插件列表。',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'PluginType' => [
                                                    'title' => '插件唯一标识，取值：live-直播，wb-白板，chat-聊天，rtc。',
                                                    'description' => '插件唯一标识，取值：'."\n"
                                                        .'- **live**：直播。'."\n"
                                                        .'- **wb**：白板。'."\n"
                                                        .'- **chat**：聊天。'."\n"
                                                        .'- **rtc**：音视频通信。',
                                                    'type' => 'string',
                                                    'example' => 'live',
                                                ],
                                                'PluginId' => [
                                                    'title' => '插件实例唯一标识。',
                                                    'description' => '插件实例唯一标识。',
                                                    'type' => 'string',
                                                    'example' => 'HASU-****-ASHD',
                                                ],
                                                'CreateTime' => [
                                                    'title' => '插件实例创建时间戳，单位：毫秒。',
                                                    'description' => '插件实例创建时间戳，单位：毫秒。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '1624589848000',
                                                ],
                                                'Extension' => [
                                                    'title' => '插件拓展字段。',
                                                    'description' => '插件拓展字段。',
                                                    'type' => 'object',
                                                    'additionalProperties' => [
                                                        'type' => 'string',
                                                        'example' => 'test001',
                                                        'description' => '插件拓展信息。',
                                                    ],
                                                ],
                                            ],
                                        ],
                                    ],
                                    'Extension' => [
                                        'title' => '直播拓展字段。',
                                        'description' => '直播拓展字段。',
                                        'type' => 'object',
                                        'additionalProperties' => [
                                            'type' => 'string',
                                            'example' => 'test001',
                                            'description' => '直播拓展信息。',
                                        ],
                                    ],
                                    'Pv' => [
                                        'title' => '访问用户人次。',
                                        'description' => '访问用户人次，访客对同一直播间的多次访问，PV累加。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '200',
                                    ],
                                    'AnchorNick' => [
                                        'title' => '主播昵称',
                                        'description' => '主播昵称。',
                                        'type' => 'string',
                                        'example' => 'User001',
                                    ],
                                    'StartTime' => [
                                        'title' => '直播开始时间，单位：毫秒。',
                                        'description' => '直播开始时间，单位：毫秒。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '1624259500000',
                                    ],
                                    'HlsUrl' => [
                                        'title' => '原画HLS播放地址。',
                                        'description' => '原画HLS播放地址。',
                                        'type' => 'string',
                                        'example' => 'http://demo-app-live.com/live/b7f29c02-****-40fd-****-e8d06a8aebb3.m3u8?auth_key=1627522726-0-0-******e620b363d4cf8a8e3',
                                    ],
                                    'HlsUrlHttps' => [
                                        'title' => 'https协议的原画HLS播放地址。',
                                        'description' => 'https协议的原画HLS播放地址。',
                                        'type' => 'string',
                                        'example' => 'https://demo-app-live.com/live/b7f29c02-****-40fd-****-e8d06a8aebb3.m3u8?auth_key=1627522726-0-0-******e620b363d4cf8a8e3',
                                    ],
                                    'RtmpUrl' => [
                                        'title' => 'rtmp协议的播放地址',
                                        'description' => 'rtmp协议的播放地址。',
                                        'type' => 'string',
                                        'example' => 'rtmp://demo-app-live.com/live/b7f29c02-****-40fd-****-e8d06a8aebb3?auth_key=1627522726-0-0-******e620b363d4cf8a8e3',
                                    ],
                                    'ArtcInfo' => [
                                        'title' => 'RTS低延迟播流信息。',
                                        'description' => 'RTS低延迟播流信息。',
                                        'type' => 'object',
                                        'properties' => [
                                            'ArtcUrl' => [
                                                'title' => 'RTS原码流地址，推荐移动端使用。',
                                                'description' => 'RTS原码流地址，推荐移动端使用。',
                                                'type' => 'string',
                                                'example' => 'artc://demo-app-live.com/live/b7f29c02-****-40fd-****-e8d06a8aebb3?auth_key=1627522726-0-0-******e620b363d4cf8a8e3',
                                            ],
                                            'ArtcH5Url' => [
                                                'title' => 'RTS转码流地址，推荐web端使用。',
                                                'description' => 'RTS转码流地址，推荐Web端使用。',
                                                'type' => 'string',
                                                'example' => 'artc://demo-app-live.com/live/b7f29c02-****-40fd-****-e8d06a8aebb3_origin-RTS?auth_key=1627522726-0-0-******e620b363d4cf8a8e3',
                                            ],
                                        ],
                                    ],
                                    'EnableLinkMic' => [
                                        'title' => '是否开启连麦。',
                                        'description' => '是否开启连麦。',
                                        'type' => 'boolean',
                                        'example' => 'true:开启连麦。false:未开启连麦。',
                                    ],
                                    'ConfId' => [
                                        'title' => '连麦会议唯一标识。',
                                        'description' => '连麦会议唯一标识。',
                                        'type' => 'string',
                                        'example' => 'fb0f-****-4cb1',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"FE22D613-D3C6-4A58-87CA-F21FC85AA08E\\",\\n  \\"Result\\": {\\n    \\"AppId\\": \\"7m***q\\",\\n    \\"LiveId\\": \\"b7f2****ebb3\\",\\n    \\"Status\\": 1,\\n    \\"RoomId\\": \\"AE35-****-T95F\\",\\n    \\"ChatId\\": \\"09***f8\\",\\n    \\"Title\\": \\"Title001\\",\\n    \\"Notice\\": \\"Notice001\\",\\n    \\"CoverUrl\\": \\"http://***.png\\",\\n    \\"AnchorId\\": \\"as****hs\\",\\n    \\"Uv\\": 100,\\n    \\"OnlineCount\\": 50,\\n    \\"PlaybackUrl\\": \\"http://demo-app-playback.com/live/b7f29c02-****-40fd-****-e8d06a8aebb3.m3u8?auth_key=1627522726-0-0-******e620b363d4cf8a8e3\\",\\n    \\"PlaybackUrlHttps\\": \\"https://demo-app-playback.com/live/b7f29c02-****-40fd-****-e8d06a8aebb3.m3u8?auth_key=1627522726-0-0-******e620b363d4cf8a8e3\\",\\n    \\"CreateTime\\": 1624259500000,\\n    \\"EndTime\\": 1624259500000,\\n    \\"PushUrl\\": \\"rtmp://demo-app-push.com/live/b7f29c02-****-40fd-****-e8d06a8aebb3?auth_key=1627522726-0-0-******e620b363d4cf8a8e3\\",\\n    \\"LiveUrl\\": \\"http://demo-app-live.com/live/b7f29c02-****-40fd-****-e8d06a8aebb3.flv?auth_key=1627522726-0-0-******e620b363d4cf8a8e3\\",\\n    \\"LiveUrlHttps\\": \\"https://demo-app-live.com/live/b7f29c02-****-40fd-****-e8d06a8aebb3.flv?auth_key=1627522726-0-0-******e620b363d4cf8a8e3\\",\\n    \\"PluginInstanceInfoList\\": [\\n      {\\n        \\"PluginType\\": \\"live\\",\\n        \\"PluginId\\": \\"HASU-****-ASHD\\",\\n        \\"CreateTime\\": 1624589848000,\\n        \\"Extension\\": {\\n          \\"key\\": \\"test001\\"\\n        }\\n      }\\n    ],\\n    \\"Extension\\": {\\n      \\"key\\": \\"test001\\"\\n    },\\n    \\"Pv\\": 200,\\n    \\"AnchorNick\\": \\"User001\\",\\n    \\"StartTime\\": 1624259500000,\\n    \\"HlsUrl\\": \\"http://demo-app-live.com/live/b7f29c02-****-40fd-****-e8d06a8aebb3.m3u8?auth_key=1627522726-0-0-******e620b363d4cf8a8e3\\",\\n    \\"HlsUrlHttps\\": \\"https://demo-app-live.com/live/b7f29c02-****-40fd-****-e8d06a8aebb3.m3u8?auth_key=1627522726-0-0-******e620b363d4cf8a8e3\\",\\n    \\"RtmpUrl\\": \\"rtmp://demo-app-live.com/live/b7f29c02-****-40fd-****-e8d06a8aebb3?auth_key=1627522726-0-0-******e620b363d4cf8a8e3\\",\\n    \\"ArtcInfo\\": {\\n      \\"ArtcUrl\\": \\"artc://demo-app-live.com/live/b7f29c02-****-40fd-****-e8d06a8aebb3?auth_key=1627522726-0-0-******e620b363d4cf8a8e3\\",\\n      \\"ArtcH5Url\\": \\"artc://demo-app-live.com/live/b7f29c02-****-40fd-****-e8d06a8aebb3_origin-RTS?auth_key=1627522726-0-0-******e620b363d4cf8a8e3\\"\\n    },\\n    \\"EnableLinkMic\\": true,\\n    \\"ConfId\\": \\"fb0f-****-4cb1\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<GetLiveRoomResponse>\\n    <RequestId>FE22D613-D3C6-4A58-87CA-F21FC85AA08E</RequestId>\\n    <Result>\\n        <AppId>7m***q</AppId>\\n        <LiveId>b7f2****ebb3</LiveId>\\n        <Status>1</Status>\\n        <RoomId>AE35-****-T95F</RoomId>\\n        <ChatId>09***f8</ChatId>\\n        <Title>Title001</Title>\\n        <Notice>Notice001</Notice>\\n        <CoverUrl>http://***.png</CoverUrl>\\n        <AnchorId>as****hs</AnchorId>\\n        <Uv>100</Uv>\\n        <OnlineCount>50</OnlineCount>\\n        <PlaybackUrl>http://demo-app-playback.com/live/b7f29c02-****-40fd-****-e8d06a8aebb3.m3u8?auth_key=1627522726-0-0-******e620b363d4cf8a8e3</PlaybackUrl>\\n        <PlaybackUrlHttps>https://demo-app-playback.com/live/b7f29c02-****-40fd-****-e8d06a8aebb3.m3u8?auth_key=1627522726-0-0-******e620b363d4cf8a8e3</PlaybackUrlHttps>\\n        <CreateTime>1624259500000</CreateTime>\\n        <EndTime>1624259500000</EndTime>\\n        <PushUrl>rtmp://demo-app-push.com/live/b7f29c02-****-40fd-****-e8d06a8aebb3?auth_key=1627522726-0-0-******e620b363d4cf8a8e3</PushUrl>\\n        <LiveUrl>http://demo-app-live.com/live/b7f29c02-****-40fd-****-e8d06a8aebb3.flv?auth_key=1627522726-0-0-******e620b363d4cf8a8e3</LiveUrl>\\n        <LiveUrlHttps>https://demo-app-live.com/live/b7f29c02-****-40fd-****-e8d06a8aebb3.flv?auth_key=1627522726-0-0-******e620b363d4cf8a8e3</LiveUrlHttps>\\n        <PluginInstanceInfoList>\\n            <PluginType>live</PluginType>\\n            <PluginId>HASU-****-ASHD</PluginId>\\n            <CreateTime>1624589848000</CreateTime>\\n            <Extension>\\n                <key>test001</key>\\n            </Extension>\\n        </PluginInstanceInfoList>\\n        <Extension>\\n            <key>test001</key>\\n        </Extension>\\n        <Pv>200</Pv>\\n        <AnchorNick>User001</AnchorNick>\\n        <StartTime>1624259500000</StartTime>\\n        <HlsUrl>http://demo-app-live.com/live/b7f29c02-****-40fd-****-e8d06a8aebb3.m3u8?auth_key=1627522726-0-0-******e620b363d4cf8a8e3</HlsUrl>\\n        <HlsUrlHttps>https://demo-app-live.com/live/b7f29c02-****-40fd-****-e8d06a8aebb3.m3u8?auth_key=1627522726-0-0-******e620b363d4cf8a8e3</HlsUrlHttps>\\n        <RtmpUrl>rtmp://demo-app-live.com/live/b7f29c02-****-40fd-****-e8d06a8aebb3?auth_key=1627522726-0-0-******e620b363d4cf8a8e3</RtmpUrl>\\n        <ArtcInfo>\\n            <ArtcUrl>artc://demo-app-live.com/live/b7f29c02-****-40fd-****-e8d06a8aebb3?auth_key=1627522726-0-0-******e620b363d4cf8a8e3</ArtcUrl>\\n            <ArtcH5Url>artc://demo-app-live.com/live/b7f29c02-****-40fd-****-e8d06a8aebb3_origin-RTS?auth_key=1627522726-0-0-******e620b363d4cf8a8e3</ArtcH5Url>\\n        </ArtcInfo>\\n    </Result>\\n</GetLiveRoomResponse>","errorExample":""}]',
            'title' => '查询直播详情',
        ],
        'CreateClass' => [
            'summary' => '调用CreateClass创建课程。可用于学生上课，职场培训等场景，包含连麦、直播、白板、聊天等功能。',
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
            'systemTags' => [
                'operationType' => 'create',
            ],
            'parameters' => [
                [
                    'name' => 'AppId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '应用唯一标识，由6位小写字母、数字组成。',
                        'description' => '用户的应用ID，在控制台创建应用时生成。包含小写字母、数字，长度为6个字符。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '7m***q',
                    ],
                ],
                [
                    'name' => 'Title',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '课堂标题',
                        'description' => '课程标题，支持中英文，最大长度32个字符。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'ClassTitle001',
                    ],
                ],
                [
                    'name' => 'CreateUserId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '创建人用户ID。',
                        'description' => '创建人用户ID，仅支持英文和数字，最大长度36个字符。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'as****hs',
                    ],
                ],
                [
                    'name' => 'CreateNickname',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '创建人用户昵称。',
                        'description' => '创建人用户昵称，支持中英文，最大长度32个字符。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'nickname001',
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
                            'RequestId' => [
                                'title' => '请求ID。',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'FE22D613-D3C6-4A58-87CA-F21FC85AA08E',
                            ],
                            'Result' => [
                                'title' => 'API请求的返回结果结构体。',
                                'description' => '创建课程的返回结果。',
                                'type' => 'object',
                                'properties' => [
                                    'ClassId' => [
                                        'title' => '课堂唯一标识。',
                                        'description' => '课程唯一标识。',
                                        'type' => 'string',
                                        'example' => 'A55-****-Y34O',
                                    ],
                                    'Title' => [
                                        'title' => '课堂标题。',
                                        'description' => '课程标题。',
                                        'type' => 'string',
                                        'example' => 'PPT制作培训',
                                    ],
                                    'CreateUserId' => [
                                        'title' => '创建人ID。',
                                        'description' => '创建人用户ID。',
                                        'type' => 'string',
                                        'example' => '34***45',
                                    ],
                                    'CreateNickname' => [
                                        'title' => '创建人昵称。',
                                        'description' => '创建人昵称。',
                                        'type' => 'string',
                                        'example' => '随风',
                                    ],
                                    'Status' => [
                                        'title' => '课堂状态，0:未开始 1:上课中 2:已下课。',
                                        'description' => '课程状态。取值：'."\n"
                                            .'- 0：未开始'."\n"
                                            .'- 1：上课中'."\n"
                                            .'- 2：已下课。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '2',
                                    ],
                                    'RoomId' => [
                                        'title' => '房间ID',
                                        'description' => '房间ID。可用于查询房间详情信息，和端上SDK接入时作为参数传入。',
                                        'type' => 'string',
                                        'example' => 'AE35-****-T95F',
                                    ],
                                    'LiveId' => [
                                        'title' => '直播的唯一标识ID。',
                                        'description' => '直播ID。可用于查询直播详情，和端上调用直播相关接口时作为参数传入。',
                                        'type' => 'string',
                                        'example' => 'b7f2****ebb3',
                                    ],
                                    'ConfId' => [
                                        'title' => '连麦会议唯一标识。',
                                        'description' => '连麦会议ID。可用于RTC入会，获取会议详情。',
                                        'type' => 'string',
                                        'example' => 'fb0f-****-4cb1',
                                    ],
                                    'WhiteboardId' => [
                                        'title' => '白板ID',
                                        'description' => '白板ID。可用于查询白板信息，和端上接入白板SDK时作为参数传入。',
                                        'type' => 'string',
                                        'example' => 'fgej**2',
                                    ],
                                    'WhiteboardRecordId' => [
                                        'title' => '白板录制ID',
                                        'description' => '白板录制记录ID。可用于端上获取白板录制内容并播放。',
                                        'type' => 'string',
                                        'example' => 'eofg**rt',
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
                        'errorCode' => 'Invalid.Live.ConfigNotFound',
                        'errorMessage' => 'The live push domain and pull domain config not found.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"FE22D613-D3C6-4A58-87CA-F21FC85AA08E\\",\\n  \\"Result\\": {\\n    \\"ClassId\\": \\"A55-****-Y34O\\",\\n    \\"Title\\": \\"PPT制作培训\\",\\n    \\"CreateUserId\\": \\"34***45\\",\\n    \\"CreateNickname\\": \\"随风\\",\\n    \\"Status\\": 2,\\n    \\"RoomId\\": \\"AE35-****-T95F\\",\\n    \\"LiveId\\": \\"b7f2****ebb3\\",\\n    \\"ConfId\\": \\"fb0f-****-4cb1\\",\\n    \\"WhiteboardId\\": \\"fgej**2\\",\\n    \\"WhiteboardRecordId\\": \\"eofg**rt\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<CreateClassResponse>\\n    <RequestId>FE22D613-D3C6-4A58-87CA-F21FC85AA08E</RequestId>\\n    <Result>\\n        <ClassId>A55-****-Y34O</ClassId>\\n        <Title>PPT制作培训</Title>\\n        <CreateUserId>34***45</CreateUserId>\\n        <CreateNickname>随风</CreateNickname>\\n        <Status>2</Status>\\n        <RoomId>AE35-****-T95F</RoomId>\\n        <LiveId>b7f2****ebb3</LiveId>\\n        <ConfId>fb0f-****-4cb1</ConfId>\\n        <WhiteboardId>fgej**2</WhiteboardId>\\n        <WhiteboardRecordId>eofg**rt</WhiteboardRecordId>\\n    </Result>\\n</CreateClassResponse>","errorExample":""}]',
            'title' => '创建课程',
        ],
        'DeleteClass' => [
            'summary' => '调用DeleteClass删除课程。',
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
            'systemTags' => [
                'operationType' => 'delete',
            ],
            'parameters' => [
                [
                    'name' => 'AppId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '应用唯一标识，由6位小写字母、数字组成。',
                        'description' => '用户的应用ID，在控制台创建应用时生成。包含小写字母、数字，长度为6个字符。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '7m***q',
                    ],
                ],
                [
                    'name' => 'ClassId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '课堂唯一标识。',
                        'description' => '课程唯一标识。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'A55-****-Y34O',
                    ],
                ],
                [
                    'name' => 'UserId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '操作人用户ID，仅支持中英文数字，下划线，中划线，1~36个字符。',
                        'description' => '操作人用户ID，仅支持中英文数字，下划线（_），中划线（-），长度为1~36个字符。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'as****hs',
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
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'FE22D613-D3C6-4A58-87CA-F21FC85AA08E',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"FE22D613-D3C6-4A58-87CA-F21FC85AA08E\\"\\n}","errorExample":""},{"type":"xml","example":"<DeleteClassResponse>\\n    <RequestId>FE22D613-D3C6-4A58-87CA-F21FC85AA08E</RequestId>\\n</DeleteClassResponse>","errorExample":""}]',
            'title' => '删除课程',
        ],
        'StopClass' => [
            'summary' => '调用StopClass执行结束课程动作，会修改课程状态为已下课。',
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
            'systemTags' => [
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'AppId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '应用唯一标识，由6位小写字母、数字组成。',
                        'description' => '用户的应用ID，在控制台创建应用时生成。包含小写字母、数字，长度为6个字符。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '7m***q',
                    ],
                ],
                [
                    'name' => 'ClassId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '课堂唯一标识。',
                        'description' => '课程唯一标识。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'A55-****-Y34O',
                    ],
                ],
                [
                    'name' => 'UserId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '操作者用户ID。',
                        'description' => '操作者用户ID，仅支持英文和数字，最大长度36个字符。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'as****hs',
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
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'FE22D613-D3C6-4A58-87CA-F21FC85AA08E',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"FE22D613-D3C6-4A58-87CA-F21FC85AA08E\\"\\n}","errorExample":""},{"type":"xml","example":"<StopClassResponse>\\n    <RequestId>FE22D613-D3C6-4A58-87CA-F21FC85AA08E</RequestId>\\n</StopClassResponse>","errorExample":""}]',
            'title' => '结束课程',
        ],
        'UpdateClass' => [
            'summary' => '调用UpdateClass更新课程。',
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
            'systemTags' => [
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'AppId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '应用唯一标识，由6位小写字母、数字组成。',
                        'description' => '用户的应用ID，在控制台创建应用时生成。包含小写字母、数字，长度为6个字符。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '7m***q',
                    ],
                ],
                [
                    'name' => 'ClassId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '课堂唯一标识。',
                        'description' => '课程唯一标识。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'A55-****-Y34O',
                    ],
                ],
                [
                    'name' => 'Title',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '课堂标题，1~32个字符。',
                        'description' => '课程标题，支持中英文，最大长度32个字符。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ClassTitle001',
                    ],
                ],
                [
                    'name' => 'CreateUserId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '创建人用户ID，仅支持中英文数字，下划线，中划线，1~36个字符。',
                        'description' => '创建人用户ID，仅支持英文和数字，最大长度36个字符。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'as****hs',
                    ],
                ],
                [
                    'name' => 'CreateNickname',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '创建人用户昵称，1~32个字符。',
                        'description' => '创建人用户昵称，支持中英文，最大长度32个字符。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'nickname001',
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
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'FE22D613-D3C6-4A58-87CA-F21FC85AA08E',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"FE22D613-D3C6-4A58-87CA-F21FC85AA08E\\"\\n}","errorExample":""},{"type":"xml","example":"<UpdateClassResponse>\\n    <RequestId>FE22D613-D3C6-4A58-87CA-F21FC85AA08E</RequestId>\\n</UpdateClassResponse>","errorExample":""}]',
            'title' => '更新课程',
        ],
        'GetClassDetail' => [
            'summary' => '调用GetClassDetail获取课程详情。可用于查询课程状态，以及相关联的直播，连麦，白板等ID信息。通过这些ID，可进一步查询对应的直播，连麦，白板的详情。',
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
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'AppId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '应用唯一标识，由6位小写字母、数字组成。',
                        'description' => '用户的应用ID，在控制台创建应用时生成。包含小写字母、数字，长度为6个字符。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '7m***q',
                    ],
                ],
                [
                    'name' => 'ClassId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '课堂唯一标识，由调用CreateClass返回。',
                        'description' => '课程唯一标识，由调用CreateClass返回。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'A55-****-Y34O',
                    ],
                ],
                [
                    'name' => 'UserId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '操作人用户ID。',
                        'description' => '操作人用户ID，仅支持英文字母和数字，长度最多36个字符。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'as****hs',
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
                            'RequestId' => [
                                'title' => '请求ID。',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'FE22D613-D3C6-4A58-87CA-F21FC85AA08E',
                            ],
                            'Result' => [
                                'title' => 'API请求的返回结果结构体。',
                                'description' => '获取课堂详情的返回结果。',
                                'type' => 'object',
                                'properties' => [
                                    'ClassId' => [
                                        'title' => '课堂唯一标识，由调用CreateClass返回。',
                                        'description' => '课程唯一标识。',
                                        'type' => 'string',
                                        'example' => 'A55-****-Y34O',
                                    ],
                                    'Title' => [
                                        'title' => '课堂标题。',
                                        'description' => '课程标题，支持中英文，最大长度32个字符。',
                                        'type' => 'string',
                                        'example' => 'ClassTitle001',
                                    ],
                                    'CreateUserId' => [
                                        'title' => '创建人ID。',
                                        'description' => '创建人用户ID，仅支持英文和数字，最大长度36个字符。',
                                        'type' => 'string',
                                        'example' => 'as****hs',
                                    ],
                                    'CreateNickname' => [
                                        'title' => '创建人昵称。',
                                        'description' => '创建人用户昵称，支持中英文，最大长度32个字符。',
                                        'type' => 'string',
                                        'example' => 'nickname001',
                                    ],
                                    'Status' => [
                                        'title' => '课堂状态，0:未开始 1:上课中 2:已下课。',
                                        'description' => '课程状态。取值：'."\n"
                                            .'- 0：未开始'."\n"
                                            .'- 1：上课中'."\n"
                                            .'- 2：已下课。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '2',
                                    ],
                                    'StartTime' => [
                                        'title' => '开始上课时间戳，毫秒。',
                                        'description' => '开始上课时间戳，单位：毫秒。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '1632794405000',
                                    ],
                                    'EndTime' => [
                                        'title' => '下课时间戳，毫秒。',
                                        'description' => '下课时间戳，单位：毫秒。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '1632797405000',
                                    ],
                                    'RoomId' => [
                                        'title' => '房间ID',
                                        'description' => '房间ID。可用于查询房间详情信息，和端上SDK接入时作为参数传入。',
                                        'type' => 'string',
                                        'example' => 'AE35-****-T95F',
                                    ],
                                    'LiveId' => [
                                        'title' => '直播的唯一标识ID。',
                                        'description' => '直播ID。可用于查询直播详情，和端上调用直播相关接口时作为参数传入。',
                                        'type' => 'string',
                                        'example' => 'b7f2****ebb3',
                                    ],
                                    'ConfId' => [
                                        'title' => '连麦会议唯一标识。',
                                        'description' => '连麦会议ID。可用于RTC入会，获取会议详情。',
                                        'type' => 'string',
                                        'example' => 'fb0f-****-4cb1',
                                    ],
                                    'WhiteboardId' => [
                                        'title' => '白板ID',
                                        'description' => '白板ID。可用于查询白板信息，和端上接入白板SDK时作为参数传入。',
                                        'type' => 'string',
                                        'example' => 'fgej**2',
                                    ],
                                    'WhiteboardRecordId' => [
                                        'title' => '白板录制ID',
                                        'description' => '白板录制ID。可用于端上获取白板录制内容并播放。',
                                        'type' => 'string',
                                        'example' => 'eofg**rt',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"FE22D613-D3C6-4A58-87CA-F21FC85AA08E\\",\\n  \\"Result\\": {\\n    \\"ClassId\\": \\"A55-****-Y34O\\",\\n    \\"Title\\": \\"ClassTitle001\\",\\n    \\"CreateUserId\\": \\"as****hs\\",\\n    \\"CreateNickname\\": \\"nickname001\\",\\n    \\"Status\\": 2,\\n    \\"StartTime\\": 1632794405000,\\n    \\"EndTime\\": 1632797405000,\\n    \\"RoomId\\": \\"AE35-****-T95F\\",\\n    \\"LiveId\\": \\"b7f2****ebb3\\",\\n    \\"ConfId\\": \\"fb0f-****-4cb1\\",\\n    \\"WhiteboardId\\": \\"fgej**2\\",\\n    \\"WhiteboardRecordId\\": \\"eofg**rt\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<GetClassDetailResponse>\\n    <RequestId>FE22D613-D3C6-4A58-87CA-F21FC85AA08E</RequestId>\\n    <Result>\\n        <ClassId>A55-****-Y34O</ClassId>\\n        <Title>ClassTitle001</Title>\\n        <CreateUserId>as****hs</CreateUserId>\\n        <CreateNickname>nickname001</CreateNickname>\\n        <Status>2</Status>\\n        <StartTime>1632794405000</StartTime>\\n        <EndTime>1632797405000</EndTime>\\n        <RoomId>AE35-****-T95F</RoomId>\\n        <LiveId>b7f2****ebb3</LiveId>\\n        <ConfId>fb0f-****-4cb1</ConfId>\\n        <WhiteboardId>fgej**2</WhiteboardId>\\n        <WhiteboardRecordId>eofg**rt</WhiteboardRecordId>\\n    </Result>\\n</GetClassDetailResponse>","errorExample":""}]',
            'title' => '获取课程详情',
        ],
        'ListClasses' => [
            'summary' => '调用ListClasses获取课程列表。可基于应用ID和课程状态，分页查询应用对应的所有课程列表。',
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
                    'name' => 'AppId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '应用唯一标识，由6位小写字母、数字组成。',
                        'description' => '应用唯一标识，由6位小写字母、数字组成。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'lq****cu',
                    ],
                ],
                [
                    'name' => 'Status',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '课程状态，0-未开课 1-上课中 2-已下课，不传则返回所有课程。',
                        'description' => '课程状态'."\n"
                            ."\n"
                            .'- 0-未开课 '."\n"
                            .'- 1-上课中 '."\n"
                            .'- 2-已下课'."\n"
                            .'- 不传则返回所有课程。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '2',
                    ],
                ],
                [
                    'name' => 'PageNumber',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '查询页码，从1开始，传空默认查询第1页。',
                        'description' => '查询页码，从1开始，传空默认查询第1页。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '每页显示个数，最大支持50，参数为空默认显示个数为10。',
                        'description' => '每页显示个数，最大支持50，参数为空默认显示个数为10。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '25',
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
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => 'Id of the request',
                                'type' => 'string',
                                'example' => 'ER52****O9CA',
                            ],
                            'Result' => [
                                'title' => '创建课程返回的结果。',
                                'description' => '查询课程列表返回的结果。',
                                'type' => 'object',
                                'properties' => [
                                    'TotalCount' => [
                                        'title' => '课程总数。',
                                        'description' => '课程总数。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '1000',
                                    ],
                                    'PageTotal' => [
                                        'title' => '课程总页数。',
                                        'description' => '课程总页数。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '100',
                                    ],
                                    'HasMore' => [
                                        'title' => '是否还有下一页。',
                                        'description' => '是否还有下一页。',
                                        'type' => 'boolean',
                                        'example' => 'true',
                                    ],
                                    'ClassList' => [
                                        'title' => '课程列表信息。',
                                        'description' => '课程列表信息。',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'ClassId' => [
                                                    'title' => '课堂唯一标识，由调用CreateClass返回。',
                                                    'description' => '课程唯一标识。',
                                                    'type' => 'string',
                                                    'example' => 'AE35****T95F',
                                                ],
                                                'Title' => [
                                                    'title' => '课堂标题。',
                                                    'description' => '课程标题，支持中英文，最大长度32个字符。',
                                                    'type' => 'string',
                                                    'example' => 'PPT制作培训',
                                                ],
                                                'CreateUserId' => [
                                                    'title' => '创建人ID。',
                                                    'description' => '创建人用户ID，仅支持英文和数字，最大长度36个字符。',
                                                    'type' => 'string',
                                                    'example' => '34***45',
                                                ],
                                                'CreateNickname' => [
                                                    'title' => '创建人昵称。',
                                                    'description' => '创建人用户昵称，支持中英文，最大长度32个字符。',
                                                    'type' => 'string',
                                                    'example' => '随风',
                                                ],
                                                'Status' => [
                                                    'title' => '课堂状态，0:未开始 1:上课中 2:已下课。',
                                                    'description' => '课堂状态'."\n"
                                                        ."\n"
                                                        .'- 0:未开始 '."\n"
                                                        .'- 1:上课中 '."\n"
                                                        .'- 2:已下课。',
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                    'example' => '2',
                                                ],
                                                'StartTime' => [
                                                    'title' => '开始上课时间戳，毫秒。',
                                                    'description' => '开始上课时间戳，单位：毫秒。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '16****450',
                                                ],
                                                'EndTime' => [
                                                    'title' => '下课时间戳，毫秒。',
                                                    'description' => '下课时间戳，单位：毫秒。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '16****950',
                                                ],
                                                'RoomId' => [
                                                    'title' => '房间ID',
                                                    'description' => '房间ID。可用于查询房间详情信息，和端上SDK接入时作为参数传入。',
                                                    'type' => 'string',
                                                    'example' => 'AE35-****-T95F',
                                                ],
                                                'LiveId' => [
                                                    'title' => '直播的唯一标识ID。',
                                                    'description' => '直播ID。可用于查询直播详情，和端上调用直播相关接口时作为参数传入。',
                                                    'type' => 'string',
                                                    'example' => 'b7f2****ebb3',
                                                ],
                                                'ConfId' => [
                                                    'title' => '连麦会议唯一标识。',
                                                    'description' => '连麦会议ID。可用于RTC入会，获取会议详情。',
                                                    'type' => 'string',
                                                    'example' => 'fb0f-****-4cb1',
                                                ],
                                                'WhiteboardId' => [
                                                    'title' => '白板ID',
                                                    'description' => '白板ID。可用于查询白板信息，和端上接入白板SDK时作为参数传入。',
                                                    'type' => 'string',
                                                    'example' => 'fgej**2',
                                                ],
                                                'WhiteboardRecordId' => [
                                                    'title' => '白板录制ID',
                                                    'description' => '白板录制ID。可用于端上获取白板录制内容并播放。',
                                                    'type' => 'string',
                                                    'example' => 'eofg**rt',
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
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"ER52****O9CA\\",\\n  \\"Result\\": {\\n    \\"TotalCount\\": 1000,\\n    \\"PageTotal\\": 100,\\n    \\"HasMore\\": true,\\n    \\"ClassList\\": [\\n      {\\n        \\"ClassId\\": \\"AE35****T95F\\",\\n        \\"Title\\": \\"PPT制作培训\\",\\n        \\"CreateUserId\\": \\"34***45\\",\\n        \\"CreateNickname\\": \\"随风\\",\\n        \\"Status\\": 2,\\n        \\"StartTime\\": 0,\\n        \\"EndTime\\": 0,\\n        \\"RoomId\\": \\"AE35-****-T95F\\",\\n        \\"LiveId\\": \\"b7f2****ebb3\\",\\n        \\"ConfId\\": \\"fb0f-****-4cb1\\",\\n        \\"WhiteboardId\\": \\"fgej**2\\",\\n        \\"WhiteboardRecordId\\": \\"eofg**rt\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<ListClassesResponse>\\n    <RequestId>ER52****O9CA</RequestId>\\n    <Result>\\n        <TotalCount>1000</TotalCount>\\n        <PageTotal>100</PageTotal>\\n        <HasMore>true</HasMore>\\n        <ClassList>\\n            <ClassId>AE35****T95F</ClassId>\\n            <Title>PPT制作培训</Title>\\n            <CreateUserId>34***45</CreateUserId>\\n            <CreateNickname>随风</CreateNickname>\\n            <Status>2</Status>\\n            <RoomId>AE35-****-T95F</RoomId>\\n            <LiveId>b7f2****ebb3</LiveId>\\n            <ConfId>fb0f-****-4cb1</ConfId>\\n            <WhiteboardId>fgej**2</WhiteboardId>\\n            <WhiteboardRecordId>eofg**rt</WhiteboardRecordId>\\n        </ClassList>\\n    </Result>\\n</ListClassesResponse>","errorExample":""}]',
            'title' => '获取课程列表',
        ],
        'GetClassRecord' => [
            'summary' => '调用GetClassRecord获取课程录制信息。可用于课程结束后获取回放地址，如果课程未结束，结果为空。',
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
                    'name' => 'AppId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '应用唯一标识，由6位小写字母、数字组成。',
                        'description' => '用户的应用ID，在控制台创建应用时生成。包含小写字母、数字，长度为6个字符。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'lq****cu',
                    ],
                ],
                [
                    'name' => 'ClassId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '课程唯一标识，由调用CreateClass返回。',
                        'description' => '课程唯一标识，由调用CreateClass返回。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'AE35****T95F',
                    ],
                ],
                [
                    'name' => 'UserId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '操作人用户ID。',
                        'description' => '操作人用户ID，仅支持英文字母和数字，长度最多36个字符。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '34**29',
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
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'FE22D613-D3C6-4A58-87CA-F21FC85AA08E',
                            ],
                            'Result' => [
                                'title' => 'API请求的返回结果结构体。',
                                'description' => 'API请求的返回结果结构体。',
                                'type' => 'object',
                                'properties' => [
                                    'PlaybackUrlMap' => [
                                        'description' => '回放地址集合。key值代表回放视频类型，取值m3u8, mp4, flv，当前仅提供m3u8类型。',
                                        'type' => 'object',
                                        'additionalProperties' => [
                                            'type' => 'array',
                                            'items' => [
                                                'type' => 'string',
                                                'example' => 'http://***.aliyuncs.com/***8fc5-***f8****.webm?****77650&***xzSQU***',
                                                'description' => '回放URL。',
                                            ],
                                            'description' => '地址列表。',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"FE22D613-D3C6-4A58-87CA-F21FC85AA08E\\",\\n  \\"Result\\": {\\n    \\"PlaybackUrlMap\\": {\\n      \\"key\\": [\\n        \\"http://***.aliyuncs.com/***8fc5-***f8****.webm?****77650&***xzSQU***\\"\\n      ]\\n    }\\n  }\\n}","errorExample":""},{"type":"xml","example":"<GetClassRecordResponse>\\n    <RequestId>FE22D613-D3C6-4A58-87CA-F21FC85AA08E</RequestId>\\n    <Result>\\n        <PlaybackUrlMap>\\n            <m3u8>http://***.aliyuncs.com/***8fc5-***f8****.webm?****77650&amp;***xzSQU***</m3u8>\\n        </PlaybackUrlMap>\\n    </Result>\\n</GetClassRecordResponse>","errorExample":""}]',
            'title' => '获取课程录制信息',
        ],
        'UpdateShareScreenLayout' => [
            'summary' => '调用UpdateShareScreenLayout更新共享屏幕布局。可用于课堂场景，直播画面中共享屏幕画面叠加老师摄像头画面。',
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
                    'name' => 'AppId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '应用唯一标识，由6位小写字母、数字组成。',
                        'description' => '应用唯一标识，由6位小写字母、数字组成。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'lq****cu',
                    ],
                ],
                [
                    'name' => 'ClassId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '课堂唯一标识，由调用CreateClass返回。',
                        'description' => '课堂唯一标识，由调用CreateClass返回。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'AE35****T95F',
                    ],
                ],
                [
                    'name' => 'EnableOverlay',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '是否开启叠加老师画面',
                        'description' => '是否开启叠加老师画面',
                        'type' => 'boolean',
                        'required' => true,
                        'example' => 'true',
                    ],
                ],
                [
                    'name' => 'OverlayX',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '叠加画面X坐标，归一化为1',
                        'description' => '叠加画面X坐标，起点为左上角，归一化为1',
                        'type' => 'number',
                        'format' => 'float',
                        'required' => false,
                        'example' => '0.7576',
                    ],
                ],
                [
                    'name' => 'OverlayY',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '叠加画面Y坐标，归一化为1',
                        'description' => '叠加画面Y坐标，起点为左上角，归一化为1',
                        'type' => 'number',
                        'format' => 'float',
                        'required' => false,
                        'example' => '0.7576',
                    ],
                ],
                [
                    'name' => 'OverlayWidth',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '叠加画面宽度，归一化为1',
                        'description' => '叠加画面宽度，归一化为1',
                        'type' => 'number',
                        'format' => 'float',
                        'required' => false,
                        'example' => '0.2361',
                    ],
                ],
                [
                    'name' => 'OverlayHeight',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '叠加画面高度，归一化为1',
                        'description' => '叠加画面高度，归一化为1',
                        'type' => 'number',
                        'format' => 'float',
                        'required' => false,
                        'example' => '0.2361',
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
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'FE22D613-D3C6-4A58-87CA-F21FC85AA08E',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"FE22D613-D3C6-4A58-87CA-F21FC85AA08E\\"\\n}","errorExample":""},{"type":"xml","example":"<UpdateShareScreenLayoutResponse>\\n    <RequestId>FE22D613-D3C6-4A58-87CA-F21FC85AA08E</RequestId>\\n</UpdateShareScreenLayoutResponse>","errorExample":""}]',
            'title' => '更新共享屏幕布局',
        ],
        'CreateRoom' => [
            'summary' => '调用CreateRoom创建一个房间，用户可以在房间内使用直播、白板、音视频通信等功能。',
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
            'systemTags' => [
                'operationType' => 'create',
            ],
            'parameters' => [
                [
                    'name' => 'AppId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '应用唯一标识，由6位小写字母、数字组成。',
                        'description' => '应用唯一标识，可以包含小写字母、数字，长度为6个字符。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '7m***q',
                    ],
                ],
                [
                    'name' => 'TemplateId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '房间模板唯一标识，当前支持的取值：default，传空默认为default。',
                        'description' => '模板ID。取值：'."\n"
                            ."\n"
                            .'- **default**：默认。'."\n"
                            ."\n"
                            .'传空值，则默认为**default**。'."\n",
                        'type' => 'string',
                        'required' => false,
                        'example' => 'default',
                    ],
                ],
                [
                    'name' => 'RoomId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '房间唯一标识，由字母、数字、符号.和-组成，最大长度36位，传空则随机生成一个房间id。',
                        'description' => '房间ID，最大长度36个字符，传空值，则随机生成一个房间ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'AE35-****-T95F',
                    ],
                ],
                [
                    'name' => 'Title',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '房间标题，支持中英文，最大长度32位。',
                        'description' => '房间标题，支持中英文和数字，最大长度32个字符。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'RoomTitle001',
                    ],
                ],
                [
                    'name' => 'Notice',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '房间公告，支持中英文，最大长度256位。',
                        'description' => '房间公告，支持中英文和数字以及常用符号，最大长度256个字符。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'RoomNotice001',
                    ],
                ],
                [
                    'name' => 'RoomOwnerId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '房主用户id，仅支持英文和数字，最大长度36位。',
                        'description' => '房主ID，仅支持英文和数字，最大长度36个字符。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'as****hs',
                    ],
                ],
                [
                    'name' => 'Extension',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'title' => '拓展字段，按需传递，需要额外记录的房间属性。',
                        'description' => '拓展字段，按需传递，需要额外记录的房间属性。所有字段键-值长度总和不超过2048字节。',
                        'type' => 'object',
                        'required' => false,
                        'additionalProperties' => [
                            'type' => 'string',
                            'required' => false,
                            'example' => 'test001',
                        ],
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
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'FE22D613-D3C6-4A58-87CA-F21FC85AA08E',
                            ],
                            'Result' => [
                                'title' => 'API请求的返回结果结构体。',
                                'description' => '创建房间的返回结果。',
                                'type' => 'object',
                                'properties' => [
                                    'RoomId' => [
                                        'title' => '房间id',
                                        'description' => '房间ID。',
                                        'type' => 'string',
                                        'example' => 'AE35-****-T95F',
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
                        'errorCode' => 'InvalidRoomId.Room.AlreadyExist',
                        'errorMessage' => 'Room is already exist.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"FE22D613-D3C6-4A58-87CA-F21FC85AA08E\\",\\n  \\"Result\\": {\\n    \\"RoomId\\": \\"AE35-****-T95F\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<CreateRoomResponse>\\n    <RequestId>FE22D613-D3C6-4A58-87CA-F21FC85AA08E</RequestId>\\n    <Result>\\n        <RoomId>AE35-****-T95F</RoomId>\\n    </Result>\\n</CreateRoomResponse>","errorExample":""}]',
            'title' => '创建房间',
        ],
        'DeleteRoom' => [
            'summary' => '调用DeleteRoom删除指定房间，删除后房间无法继续使用。',
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
            'systemTags' => [
                'operationType' => 'delete',
            ],
            'parameters' => [
                [
                    'name' => 'AppId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '应用唯一标识，由6位小写字母、数字组成。',
                        'description' => '应用唯一标识，可以包含小写字母、数字，长度为6个字符。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '7m***q',
                    ],
                ],
                [
                    'name' => 'RoomId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '房间唯一标识，由字母、数字、符号.和-组成，最大长度36位。',
                        'description' => '房间ID，由字母、数字、下划线（_）和小数点（.）组成，最大长度36个字符。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'AE35-****-T95F',
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
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'FE22D613-D3C6-4A58-87CA-F21FC85AA08E',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidRoomId.Room.NotExist',
                        'errorMessage' => 'Room does not exist.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"FE22D613-D3C6-4A58-87CA-F21FC85AA08E\\"\\n}","errorExample":""},{"type":"xml","example":"<DeleteRoomResponse>\\n    <RequestId>FE22D613-D3C6-4A58-87CA-F21FC85AA08E</RequestId>\\n</DeleteRoomResponse>","errorExample":""}]',
            'title' => '删除房间',
        ],
        'UpdateRoom' => [
            'summary' => '调用UpdateRoom更新房间所有可修改信息。',
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
            'systemTags' => [
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'AppId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '应用唯一标识，由6位小写字母、数字组成。',
                        'description' => '应用唯一标识，可以包含小写字母、数字，长度为6个字符。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '7m***q',
                    ],
                ],
                [
                    'name' => 'RoomId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '房间唯一标识。',
                        'description' => '房间ID，可以包含英文字母、数字、下划线（_）和小数点（.），最大长度36个字符。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'AE35-****-T95F',
                    ],
                ],
                [
                    'name' => 'Title',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '房间标题，支持中英文，最大长度32位。',
                        'description' => '房间标题，支持中英文，最大长度32个字符。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'RoomTitle001',
                    ],
                ],
                [
                    'name' => 'Notice',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '房间公告，支持中英文，最大长度256位。',
                        'description' => '房间公告，支持中英文，最大长度256个字符。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'RoomNotice001',
                    ],
                ],
                [
                    'name' => 'RoomOwnerId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '房主用户id，仅支持英文和数字，最大长度36位。',
                        'description' => '房主ID，仅支持英文和数字，最大长度36个字符。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'as****hs',
                    ],
                ],
                [
                    'name' => 'Extension',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'title' => '拓展字段，按需传递，需要额外记录的房间属性。',
                        'description' => '拓展字段，按需传递，需要额外记录的房间属性。',
                        'type' => 'object',
                        'required' => false,
                        'additionalProperties' => [
                            'type' => 'string',
                            'required' => false,
                            'example' => 'test001',
                        ],
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
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'FE22D613-D3C6-4A58-87CA-F21FC85AA08E',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidRoomId.Room.NotExist',
                        'errorMessage' => 'Room does not exist.',
                    ],
                    [
                        'errorCode' => 'Forbidden.Room.Deleted',
                        'errorMessage' => 'Room has been deleted.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"FE22D613-D3C6-4A58-87CA-F21FC85AA08E\\"\\n}","errorExample":""},{"type":"xml","example":"<UpdateRoomResponse>\\n    <RequestId>FE22D613-D3C6-4A58-87CA-F21FC85AA08E</RequestId>\\n</UpdateRoomResponse>","errorExample":""}]',
            'title' => '更新房间信息',
        ],
        'KickRoomUser' => [
            'summary' => '调用KickRoomUser接口，实现对房间内某特定用户实施踢出房间操作。',
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
            'systemTags' => [
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'AppId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '应用唯一标识，由6位小写字母、数字组成。',
                        'description' => '应用唯一标识，由6位小写字母、数字组成。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '7m***q',
                    ],
                ],
                [
                    'name' => 'RoomId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '房间唯一标识，由字母、数字、符号.和-组成，最大长度36位，传空则随机生成一个房间id。',
                        'description' => '房间的唯一标识，在调用CreateRoom时返回。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'AE35****T95F',
                    ],
                ],
                [
                    'name' => 'UserId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '操作人的用户ID，用于表示谁执行了踢人操作。',
                        'description' => '操作人的用户ID，用于表示谁执行了踢人操作。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'as****hs',
                    ],
                ],
                [
                    'name' => 'KickUser',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '被踢出房间的用户ID。',
                        'description' => '被踢出房间的用户ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'er****h',
                    ],
                ],
                [
                    'name' => 'BlockTime',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '踢出房间时长，有效时间内不能再次进入房间，单位：秒。'."\n"
                            ."\n"
                            .'- 如果不填写该字段，默认踢出300秒。'."\n"
                            ."\n"
                            .'- 传0表示永久踢出房间。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '300',
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
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'FE22D613-D3C6-4A58-87CA-F21FC85AA08E',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"FE22D613-D3C6-4A58-87CA-F21FC85AA08E\\"\\n}","errorExample":""},{"type":"xml","example":"<KickRoomUserResponse>\\n    <RequestId>FE22D613-D3C6-4A58-87CA-F21FC85AA08E</RequestId>\\n</KickRoomUserResponse>","errorExample":""}]',
            'title' => '踢出房间用户',
        ],
        'SetUserAdmin' => [
            'summary' => '调用SetUserAdmin接口，设置房间内某特定用户为管理员。',
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
            'systemTags' => [
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'AppId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '应用唯一标识，由6位小写字母、数字组成。',
                        'description' => '应用唯一标识，由6位小写字母、数字组成。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '7m***q',
                    ],
                ],
                [
                    'name' => 'RoomId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '房间唯一标识，由字母、数字、符号.和-组成，最大长度36位。',
                        'description' => '房间的唯一标识，在调用CreateRoom时返回。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'AE35****T95F',
                    ],
                ],
                [
                    'name' => 'UserId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '用户ID',
                        'description' => '被设置为管理员的用户ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'er****h',
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
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'FE22D613-D3C6-4A58-87CA-F21FC85AA08E',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'Forbidden.Room.AdminNumberOverLimit',
                        'errorMessage' => 'Room admin number exceeds limit.',
                    ],
                    [
                        'errorCode' => 'Forbidden.Room.OwnerCannotBeAdmin',
                        'errorMessage' => 'Room owner cannot be admin.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"FE22D613-D3C6-4A58-87CA-F21FC85AA08E\\"\\n}","errorExample":""},{"type":"xml","example":"<SetUserAdminResponse>\\n    <RequestId>FE22D613-D3C6-4A58-87CA-F21FC85AA08E</RequestId>\\n</SetUserAdminResponse>","errorExample":""}]',
            'title' => '设置用户管理员',
            'description' => '房主不能被操作。单房间管理员数量上限5人。管理员拥有踢人、禁言/取消禁言、修改房间信息的权限。',
        ],
        'CancelUserAdmin' => [
            'summary' => '调用CancelUserAdmin接口，取消房间内某特定用户管理员身份，变成普通观众。',
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
            'systemTags' => [
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'AppId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '应用唯一标识，由6位小写字母、数字组成。',
                        'description' => '应用唯一标识，由6位小写字母、数字组成。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '7m***q',
                    ],
                ],
                [
                    'name' => 'RoomId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '房间唯一标识，由字母、数字、符号.和-组成，最大长度36位。',
                        'description' => '房间的唯一标识，在调用CreateRoom时返回。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'AE35****T95F',
                    ],
                ],
                [
                    'name' => 'UserId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '用户ID',
                        'description' => '被取消管理员的用户ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'er****h',
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
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'FE22D613-D3C6-4A58-87CA-F21FC85AA08E',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"FE22D613-D3C6-4A58-87CA-F21FC85AA08E\\"\\n}","errorExample":""},{"type":"xml","example":"<CancelUserAdminResponse>\\n    <RequestId>FE22D613-D3C6-4A58-87CA-F21FC85AA08E</RequestId>\\n</CancelUserAdminResponse>","errorExample":""}]',
            'title' => '取消用户管理员',
            'description' => '房主不能被操作。如果用户不存在或者已经是普通用户，默认返回成功。',
        ],
        'GetRoom' => [
            'summary' => '调用GetRoom查询指定房间信息，包含房间信息和使用中的原子能力信息。',
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
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'AppId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '应用唯一标识，由6位小写字母、数字组成。',
                        'description' => '应用唯一标识，可以包含小写字母、数字，长度为6个字符。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '7m***q',
                    ],
                ],
                [
                    'name' => 'RoomId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '房间唯一标识，由字母、数字、符号.和-组成，最大长度36位。',
                        'description' => '房间ID，由字母、数字、小数点（.）和短横线（-）组成，最大长度36个字符。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'AE35-****-T95F',
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
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'FE22D613-D3C6-4A58-87CA-F21FC85AA08E',
                            ],
                            'Result' => [
                                'title' => '查询房间信息返回结果。',
                                'description' => '查询房间的返回结果。',
                                'type' => 'object',
                                'properties' => [
                                    'RoomInfo' => [
                                        'title' => '房间信息。',
                                        'description' => '房间信息。',
                                        'type' => 'object',
                                        'properties' => [
                                            'RoomId' => [
                                                'title' => '房间唯一标识。',
                                                'description' => '房间唯一标识。',
                                                'type' => 'string',
                                                'example' => 'AE35-****-T95F',
                                            ],
                                            'Title' => [
                                                'title' => '房间标题。',
                                                'description' => '房间标题。',
                                                'type' => 'string',
                                                'example' => 'RoomTitle001',
                                            ],
                                            'CreateTime' => [
                                                'title' => '房间创建时间戳，单位：毫秒。',
                                                'description' => '房间创建时间戳，单位：毫秒。',
                                                'type' => 'integer',
                                                'format' => 'int64',
                                                'example' => '1624589848000',
                                            ],
                                            'Notice' => [
                                                'title' => '房间公告。',
                                                'description' => '房间公告。',
                                                'type' => 'string',
                                                'example' => 'RoomNotice001',
                                            ],
                                            'RoomOwnerId' => [
                                                'title' => '房主用户id。',
                                                'description' => '房主用户ID。',
                                                'type' => 'string',
                                                'example' => 'as****hs',
                                            ],
                                            'Uv' => [
                                                'title' => '访问用户数。',
                                                'description' => '访问用户数。',
                                                'type' => 'integer',
                                                'format' => 'int64',
                                                'example' => '100',
                                            ],
                                            'OnlineCount' => [
                                                'title' => '在线用户数。',
                                                'description' => '在线用户数。',
                                                'type' => 'integer',
                                                'format' => 'int64',
                                                'example' => '50',
                                            ],
                                            'PluginInstanceInfoList' => [
                                                'title' => '活跃插件列表。',
                                                'description' => '活跃插件列表。',
                                                'type' => 'array',
                                                'items' => [
                                                    'type' => 'object',
                                                    'properties' => [
                                                        'PluginType' => [
                                                            'title' => '插件唯一标识，取值：live-直播，wb-白板，chat-聊天，rtc。',
                                                            'description' => '插件唯一标识，取值：'."\n"
                                                                .'- **live**：直播。'."\n"
                                                                .'- **wb**：白板。'."\n"
                                                                .'- **chat**：聊天。'."\n"
                                                                .'- **RTC**：音视频通信。',
                                                            'type' => 'string',
                                                            'example' => 'live',
                                                        ],
                                                        'PluginId' => [
                                                            'title' => '插件实例唯一标识。',
                                                            'description' => '插件实例唯一标识。',
                                                            'type' => 'string',
                                                            'example' => 'HASU-****-ASHD',
                                                        ],
                                                        'CreateTime' => [
                                                            'title' => '插件实例创建时间戳，单位：毫秒。',
                                                            'description' => '插件实例创建时间戳，单位：毫秒。',
                                                            'type' => 'integer',
                                                            'format' => 'int64',
                                                            'example' => '1624589848000',
                                                        ],
                                                        'Extension' => [
                                                            'title' => '插件拓展字段。',
                                                            'description' => '插件拓展字段。',
                                                            'type' => 'object',
                                                            'additionalProperties' => [
                                                                'type' => 'string',
                                                                'description' => '插件拓展信息。',
                                                                'example' => 'test001',
                                                            ],
                                                        ],
                                                    ],
                                                ],
                                            ],
                                            'AppId' => [
                                                'title' => '应用唯一标识，由6位小写字母、数字组成。',
                                                'description' => '应用唯一标识，可以包含小写字母、数字，长度为6个字符。',
                                                'type' => 'string',
                                                'example' => 'lq****cu',
                                            ],
                                            'TemplateId' => [
                                                'title' => '创建房间使用的模板id。',
                                                'description' => '创建房间使用的模板ID。',
                                                'type' => 'string',
                                                'example' => 'default',
                                            ],
                                            'Extension' => [
                                                'title' => '房间拓展字段。',
                                                'description' => '房间拓展字段。',
                                                'type' => 'object',
                                                'additionalProperties' => [
                                                    'type' => 'string',
                                                    'example' => 'test001',
                                                    'description' => '房间拓展信息。',
                                                ],
                                            ],
                                            'Pv' => [
                                                'title' => '访问用户人次。',
                                                'description' => '访问用户人次。',
                                                'type' => 'integer',
                                                'format' => 'int64',
                                                'example' => '200',
                                            ],
                                            'AdminIdList' => [
                                                'title' => '管理员ID列表。',
                                                'description' => '管理员ID列表。',
                                                'type' => 'array',
                                                'items' => [
                                                    'description' => '管理员ID。',
                                                    'type' => 'string',
                                                    'example' => 'as****hs',
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
                        'errorCode' => 'InvalidRoomId.Room.NotExist',
                        'errorMessage' => 'Room does not exist.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"FE22D613-D3C6-4A58-87CA-F21FC85AA08E\\",\\n  \\"Result\\": {\\n    \\"RoomInfo\\": {\\n      \\"RoomId\\": \\"AE35-****-T95F\\",\\n      \\"Title\\": \\"RoomTitle001\\",\\n      \\"CreateTime\\": 1624589848000,\\n      \\"Notice\\": \\"RoomNotice001\\",\\n      \\"RoomOwnerId\\": \\"as****hs\\",\\n      \\"Uv\\": 100,\\n      \\"OnlineCount\\": 50,\\n      \\"PluginInstanceInfoList\\": [\\n        {\\n          \\"PluginType\\": \\"live\\",\\n          \\"PluginId\\": \\"HASU-****-ASHD\\",\\n          \\"CreateTime\\": 1624589848000,\\n          \\"Extension\\": {\\n            \\"key\\": \\"test001\\"\\n          }\\n        }\\n      ],\\n      \\"AppId\\": \\"lq****cu\\",\\n      \\"TemplateId\\": \\"default\\",\\n      \\"Extension\\": {\\n        \\"key\\": \\"test001\\"\\n      },\\n      \\"Pv\\": 200,\\n      \\"AdminIdList\\": [\\n        \\"as****hs\\"\\n      ]\\n    }\\n  }\\n}","errorExample":""},{"type":"xml","example":"<GetRoomResponse>\\n    <RequestId>FE22D613-D3C6-4A58-87CA-F21FC85AA08E</RequestId>\\n    <Result>\\n        <RoomInfo>\\n            <RoomId>AE35-****-T95F</RoomId>\\n            <Title>RoomTitle001</Title>\\n            <CreateTime>1624589848000</CreateTime>\\n            <Notice>RoomNotice001</Notice>\\n            <RoomOwnerId>as****hs</RoomOwnerId>\\n            <Uv>100</Uv>\\n            <OnlineCount>50</OnlineCount>\\n            <PluginInstanceInfoList>\\n                <PluginType>live</PluginType>\\n                <PluginId>HASU-****-ASHD</PluginId>\\n                <CreateTime>1624589848000</CreateTime>\\n                <Extension>\\n                    <key>test001</key>\\n                </Extension>\\n            </PluginInstanceInfoList>\\n            <AppId>lq****cu</AppId>\\n            <TemplateId>default</TemplateId>\\n            <Extension>\\n                <key>test001</key>\\n            </Extension>\\n            <Pv>200</Pv>\\n            <AdminIdList>as****hs</AdminIdList>\\n        </RoomInfo>\\n    </Result>\\n</GetRoomResponse>","errorExample":""}]',
            'title' => '查询房间详情',
        ],
        'ListRooms' => [
            'summary' => '调用ListRooms查询应用下的房间列表，包含每个房间的信息和正在使用的原子能力信息。',
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
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'AppId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '应用唯一标识，由6位小写字母、数字组成。',
                        'description' => '应用唯一标识，可以包含小写字母、数字，长度为6个字符。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '7m***q',
                    ],
                ],
                [
                    'name' => 'PageNumber',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '查询页码，从1开始，传空默认查询第1页。',
                        'description' => '查询页码，从1开始，参数为空默认查询第1页。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'minimum' => '1',
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '每页显示个数，最大支持50，参数为空默认显示个数为10。',
                        'description' => '每页显示个数，最大支持50，参数为空默认显示个数为10。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'maximum' => '50',
                        'exclusiveMaximum' => false,
                        'minimum' => '1',
                        'example' => '10',
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
                            'RequestId' => [
                                'title' => '请求ID。',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'FE22D613-D3C6-4A58-87CA-F21FC85AA08E',
                            ],
                            'Result' => [
                                'title' => 'API请求的返回结果结构体。',
                                'description' => '查询房间列表的返回结果。',
                                'type' => 'object',
                                'properties' => [
                                    'TotalCount' => [
                                        'title' => '该应用的房间总数。',
                                        'description' => '房间总数。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '1000',
                                    ],
                                    'PageTotal' => [
                                        'title' => '该应用的房间总页数。',
                                        'description' => '房间列表总页数。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '100',
                                    ],
                                    'HasMore' => [
                                        'title' => '是否还有下一页房间列表。',
                                        'description' => '是否还有下一页。',
                                        'type' => 'boolean',
                                        'example' => 'true',
                                    ],
                                    'RoomInfoList' => [
                                        'title' => '房间列表信息。',
                                        'description' => '房间列表。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '房间对象。',
                                            'type' => 'object',
                                            'properties' => [
                                                'RoomId' => [
                                                    'title' => '房间唯一标识。',
                                                    'description' => '房间ID，由字母、数字、小数点（.）和短横线（-）组成，最大长度36个字符。',
                                                    'type' => 'string',
                                                    'example' => 'AE35-****-T95F',
                                                ],
                                                'Title' => [
                                                    'title' => '房间标题。',
                                                    'description' => '房间标题。',
                                                    'type' => 'string',
                                                    'example' => 'RoomTitle001',
                                                ],
                                                'RoomOwnerId' => [
                                                    'title' => '房主用户id。',
                                                    'description' => '房主ID。',
                                                    'type' => 'string',
                                                    'example' => 'as****hs',
                                                ],
                                                'Notice' => [
                                                    'title' => '房间公告。',
                                                    'description' => '房间公告。',
                                                    'type' => 'string',
                                                    'example' => 'RoomNotice001',
                                                ],
                                                'Uv' => [
                                                    'title' => '用户访问数。',
                                                    'description' => '用户访问数。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '100',
                                                ],
                                                'OnlineCount' => [
                                                    'title' => '用户在线数。',
                                                    'description' => '用户在线数。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '50',
                                                ],
                                                'PluginInstanceInfoList' => [
                                                    'title' => '活跃插件列表。',
                                                    'description' => '活跃插件列表。',
                                                    'type' => 'array',
                                                    'items' => [
                                                        'description' => '活跃插件对象。',
                                                        'type' => 'object',
                                                        'properties' => [
                                                            'PluginType' => [
                                                                'title' => '插件唯一标识，取值：live-直播，wb-白板，chat-聊天，rtc。',
                                                                'description' => '插件类型。取值：'."\n"
                                                                    .'- **live**：直播。'."\n"
                                                                    .'- **chat**：聊天。'."\n"
                                                                    .'- **rtc**：实时音视频通讯。'."\n"
                                                                    .'- **wb**：白板。',
                                                                'type' => 'string',
                                                                'example' => 'live',
                                                            ],
                                                            'PluginId' => [
                                                                'title' => '插件实例唯一标识。',
                                                                'description' => '插件实例ID。',
                                                                'type' => 'string',
                                                                'example' => 'H63U-****-AS7D',
                                                            ],
                                                            'CreateTime' => [
                                                                'title' => '插件实例创建时间戳，单位：毫秒。',
                                                                'description' => '插件实例创建时间戳，单位：毫秒。',
                                                                'type' => 'integer',
                                                                'format' => 'int64',
                                                                'example' => '1624589848000',
                                                            ],
                                                            'Extension' => [
                                                                'title' => '插件拓展字段。',
                                                                'description' => '插件拓展字段。',
                                                                'type' => 'object',
                                                                'additionalProperties' => [
                                                                    'type' => 'string',
                                                                    'description' => '拓展字段值。',
                                                                    'example' => 'test001',
                                                                ],
                                                            ],
                                                        ],
                                                    ],
                                                ],
                                                'CreateTime' => [
                                                    'title' => '房间创建时间戳，单位：毫秒。',
                                                    'description' => '房间创建时间戳。',
                                                    'type' => 'string',
                                                    'example' => '1624589848000',
                                                ],
                                                'AppId' => [
                                                    'title' => '应用唯一标识，由6位小写字母、数字组成。',
                                                    'description' => '应用唯一标识，可以包含小写字母、数字，长度为6个字符。',
                                                    'type' => 'string',
                                                    'example' => '7m***q',
                                                ],
                                                'TemplateId' => [
                                                    'title' => '创建房间使用的模板id。',
                                                    'description' => '创建房间使用的模板ID。',
                                                    'type' => 'string',
                                                    'example' => 'default',
                                                ],
                                                'Extension' => [
                                                    'title' => '房间拓展字段。',
                                                    'description' => '房间拓展字段。',
                                                    'type' => 'object',
                                                    'additionalProperties' => [
                                                        'type' => 'string',
                                                        'description' => '拓展字段值。',
                                                        'example' => 'test001',
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
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'Forbidden.Room.InvalidPageNumber',
                        'errorMessage' => 'PageNumber is invalid.',
                    ],
                    [
                        'errorCode' => 'Forbidden.Room.InvalidPageSize',
                        'errorMessage' => 'PageSize exceeds maximum limit.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"FE22D613-D3C6-4A58-87CA-F21FC85AA08E\\",\\n  \\"Result\\": {\\n    \\"TotalCount\\": 1000,\\n    \\"PageTotal\\": 100,\\n    \\"HasMore\\": true,\\n    \\"RoomInfoList\\": [\\n      {\\n        \\"RoomId\\": \\"AE35-****-T95F\\",\\n        \\"Title\\": \\"RoomTitle001\\",\\n        \\"RoomOwnerId\\": \\"as****hs\\",\\n        \\"Notice\\": \\"RoomNotice001\\",\\n        \\"Uv\\": 100,\\n        \\"OnlineCount\\": 50,\\n        \\"PluginInstanceInfoList\\": [\\n          {\\n            \\"PluginType\\": \\"live\\",\\n            \\"PluginId\\": \\"H63U-****-AS7D\\",\\n            \\"CreateTime\\": 1624589848000,\\n            \\"Extension\\": {\\n              \\"key\\": \\"test001\\"\\n            }\\n          }\\n        ],\\n        \\"CreateTime\\": \\"1624589848000\\",\\n        \\"AppId\\": \\"7m***q\\",\\n        \\"TemplateId\\": \\"default\\",\\n        \\"Extension\\": {\\n          \\"key\\": \\"test001\\"\\n        }\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<ListRoomsResponse>\\n    <RequestId>FE22D613-D3C6-4A58-87CA-F21FC85AA08E</RequestId>\\n    <Result>\\n        <TotalCount>1000</TotalCount>\\n        <PageTotal>100</PageTotal>\\n        <HasMore>true</HasMore>\\n        <RoomInfoList>\\n            <RoomId>AE35-****-T95F</RoomId>\\n            <Title>RoomTitle001</Title>\\n            <RoomOwnerId>as****hs</RoomOwnerId>\\n            <Notice>RoomNotice001</Notice>\\n            <Uv>100</Uv>\\n            <OnlineCount>50</OnlineCount>\\n            <PluginInstanceInfoList>\\n                <PluginType>live</PluginType>\\n                <PluginId>H63U-****-AS7D</PluginId>\\n                <CreateTime>1624589848000</CreateTime>\\n                <Extension>\\n                    <key>test001</key>\\n                </Extension>\\n            </PluginInstanceInfoList>\\n            <CreateTime>1624589848000</CreateTime>\\n            <AppId>7m***q</AppId>\\n            <TemplateId>default</TemplateId>\\n            <Extension>\\n                <key>test001</key>\\n            </Extension>\\n        </RoomInfoList>\\n    </Result>\\n</ListRoomsResponse>","errorExample":""}]',
            'title' => '查询房间列表',
        ],
        'ListRoomUsers' => [
            'summary' => '调用ListRoomUsers分页查询房间内的实时用户列表。',
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
                    'name' => 'AppId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '应用唯一标识，由6位小写字母、数字组成。',
                        'description' => '用户的应用ID，在控制台创建应用时生成。包含小写字母、数字，长度为6个字符。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '7m***q',
                    ],
                ],
                [
                    'name' => 'PageNumber',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '查询页码，从1开始，传空默认查询第1页。',
                        'description' => '查询页码，从1开始，传空默认查询第1页。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'minimum' => '1',
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '每页显示个数，最大支持50，参数为空默认显示个数为10。',
                        'description' => '每页显示个数，最大支持100，参数为空默认显示个数为50。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'maximum' => '50',
                        'exclusiveMaximum' => false,
                        'minimum' => '1',
                        'example' => '10',
                    ],
                ],
                [
                    'name' => 'RoomId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '房间ID，最大长度36个字符。',
                        'description' => '房间ID，由字母、数字、下划线（_）和小数点（.）组成，最大长度36个字符。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'AE35-****-T95F',
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
                            'RequestId' => [
                                'title' => '请求ID。',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'FE22D613-D3C6-4A58-87CA-F21FC85AA08E',
                            ],
                            'Result' => [
                                'title' => 'API请求的返回结果结构体。',
                                'description' => '分页查询房间用户列表返回的结果。',
                                'type' => 'object',
                                'properties' => [
                                    'TotalCount' => [
                                        'title' => '该房间的用户总数。',
                                        'description' => '房间内的用户总数。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '1000',
                                    ],
                                    'PageTotal' => [
                                        'title' => '该房间的用户总页数。',
                                        'description' => '房间内的用户总页数。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '100',
                                    ],
                                    'HasMore' => [
                                        'title' => '是否还有下一页用户列表。',
                                        'description' => '是否还有下一页用户列表。',
                                        'type' => 'boolean',
                                        'example' => 'true',
                                    ],
                                    'RoomUserList' => [
                                        'title' => '房间用户列表信息。',
                                        'description' => '房间用户列表信息。',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'UserId' => [
                                                    'title' => '用户唯一标识。',
                                                    'description' => '用户唯一标识。',
                                                    'type' => 'string',
                                                    'example' => 'as****hs',
                                                ],
                                                'Nick' => [
                                                    'title' => '用户昵称。',
                                                    'description' => '用户昵称。',
                                                    'type' => 'string',
                                                    'example' => 'User001',
                                                ],
                                                'Extension' => [
                                                    'title' => '用户拓展字段。',
                                                    'description' => '用户扩展字段。',
                                                    'type' => 'object',
                                                    'additionalProperties' => [
                                                        'type' => 'string',
                                                        'example' => 'test001',
                                                        'description' => '用户扩展信息。',
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
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"FE22D613-D3C6-4A58-87CA-F21FC85AA08E\\",\\n  \\"Result\\": {\\n    \\"TotalCount\\": 1000,\\n    \\"PageTotal\\": 100,\\n    \\"HasMore\\": true,\\n    \\"RoomUserList\\": [\\n      {\\n        \\"UserId\\": \\"as****hs\\",\\n        \\"Nick\\": \\"User001\\",\\n        \\"Extension\\": {\\n          \\"key\\": \\"test001\\"\\n        }\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<ListRoomUsersResponse>\\n    <RequestId>FE22D613-D3C6-4A58-87CA-F21FC85AA08E</RequestId>\\n    <Result>\\n        <TotalCount>1000</TotalCount>\\n        <PageTotal>100</PageTotal>\\n        <HasMore>true</HasMore>\\n        <RoomUserList>\\n            <UserId>as****hs</UserId>\\n            <Nick>User001</Nick>\\n            <Extension>\\n                <key>test001</key>\\n            </Extension>\\n        </RoomUserList>\\n    </Result>\\n</ListRoomUsersResponse>","errorExample":""}]',
            'title' => '查询房间用户列表',
        ],
        'CreateSensitiveWord' => [
            'summary' => '自定义敏感词。',
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
                    'name' => 'AppId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '用户的应用ID，在控制台创建应用时生成。包含小写字母、数字，长度为6个字符。',
                        'description' => '用户的应用ID，在控制台创建应用时生成。包含小写字母、数字，长度为6个字符。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '7m***q',
                    ],
                ],
                [
                    'name' => 'WordList',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'description' => '敏感词列表，敏感词支持中文、字母数字，暂不支持英文敏感词，一次最多可以创建100个敏感词，单个敏感词的长度不得超过20个字符。',
                        'type' => 'array',
                        'items' => [
                            'description' => '需要添加的敏感词。敏感词支持中文、字母数字，暂不支持英文敏感词，一次最多可以创建100个敏感词，单个敏感词的长度不得超过20个字符。',
                            'type' => 'string',
                            'required' => true,
                            'example' => '测试敏感词',
                        ],
                        'required' => true,
                        'docRequired' => false,
                        'maxItems' => 100,
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
                            'RequestId' => [
                                'title' => '请求ID。',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'FE22D613-D3C6-4A58-87CA-F21FC85AA08E',
                            ],
                            'Result' => [
                                'title' => '调用发送直播间弹幕的返回结果。',
                                'description' => '调用创建敏感词的返回结果。',
                                'type' => 'object',
                                'properties' => [
                                    'Success' => [
                                        'description' => '调用是否成功。',
                                        'type' => 'boolean',
                                        'example' => 'true',
                                    ],
                                ],
                                'example' => '0io**Fs6Q384',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidAppId.Error',
                        'errorMessage' => 'The specified AppId is invalid.',
                    ],
                    [
                        'errorCode' => 'Forbidden.SensitiveWordCount.ExceedLimit',
                        'errorMessage' => 'The total count of sensitive word exceeds the limit.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"FE22D613-D3C6-4A58-87CA-F21FC85AA08E\\",\\n  \\"Result\\": {\\n    \\"Success\\": true\\n  }\\n}","errorExample":""},{"type":"xml","example":"<CreateSensitiveWordResponse>\\n    <RequestId>ER52****O9CA</RequestId>\\n    <Result>\\n        <Success>true</Success>\\n    </Result>\\n</CreateSensitiveWordResponse>","errorExample":""}]',
            'title' => '自定义敏感词',
            'description' => '## QPS限制'."\n"
                .'该接口的QPS限制为单用户10次/秒。'."\n"
                ."\n"
                .'## 使用限制'."\n"
                .'单个应用下最多可以自定义1000个敏感词。'."\n",
        ],
        'DeleteSensitiveWord' => [
            'summary' => '调用DeleteSensitiveWord删除敏感词。',
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
                    'name' => 'AppId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '弹幕发送者的用户ID，最大长度不超过32个字节。',
                        'description' => '用户的应用ID，在控制台创建应用时生成。包含小写字母、数字，长度为6个字符。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '7m***q',
                    ],
                ],
                [
                    'name' => 'WordList',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'description' => '要删除敏感词列表。仅有被创建过的敏感词才会被正确删除。',
                        'type' => 'array',
                        'items' => [
                            'description' => '需要删除的敏感词。',
                            'type' => 'string',
                            'required' => false,
                            'example' => '测试敏感词',
                        ],
                        'required' => false,
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
                            'RequestId' => [
                                'title' => '请求ID。',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'FE22D613-D3C6-4A58-87CA-F21FC85AA08E',
                            ],
                            'Result' => [
                                'title' => '调用发送直播间弹幕的返回结果。',
                                'description' => '调用删除敏感词的返回结果。',
                                'type' => 'object',
                                'properties' => [
                                    'Success' => [
                                        'description' => '调用是否成功。',
                                        'type' => 'boolean',
                                        'example' => 'true',
                                    ],
                                ],
                                'example' => '0io**Fs6Q384',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"FE22D613-D3C6-4A58-87CA-F21FC85AA08E\\",\\n  \\"Result\\": {\\n    \\"Success\\": true\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DeleteSensitiveWordResponse>\\n    <RequestId>FE22D613-D3C6-4A58-87CA-F21FC85AA08E</RequestId>\\n    <Result>\\n        <Success>true</Success>\\n    </Result>\\n</DeleteSensitiveWordResponse>","errorExample":""}]',
            'title' => '删除敏感词',
            'description' => '## QPS限制'."\n"
                .'该接口的QPS限制为单用户10次/秒。',
        ],
        'ListSensitiveWord' => [
            'summary' => '调用ListSensitiveWord查询敏感词。',
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
                    'name' => 'AppId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '弹幕发送者的用户ID，最大长度不超过32个字节。',
                        'description' => '用户的应用ID，在控制台创建应用时生成。包含小写字母、数字，长度为6个字符。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '7m***q',
                    ],
                ],
                [
                    'name' => 'PageNum',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '分页查询的当前页，从1开始，每次分页查询时递增加1。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'minimum' => '1',
                        'example' => '1',
                        'default' => '1',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '单次分页查询的大小。如果不填，默认为100，如果超过100，则被限制为100。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'maximum' => '100',
                        'minimum' => '1',
                        'example' => '100',
                        'default' => '100',
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
                            'RequestId' => [
                                'title' => '请求ID。',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'FE22D613-D3C6-4A58-87CA-F21FC85AA08E',
                            ],
                            'Result' => [
                                'title' => '调用发送直播间弹幕的返回结果。',
                                'description' => '调用查询敏感词的返回结果。',
                                'type' => 'object',
                                'properties' => [
                                    'WordList' => [
                                        'description' => '敏感词的列表。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '示例敏感词。',
                                            'type' => 'string',
                                            'example' => '测试敏感词',
                                        ],
                                    ],
                                    'TotalCount' => [
                                        'description' => '总共添加的敏感词总数。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '100',
                                    ],
                                ],
                                'example' => '0io**Fs6Q384',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidAppId.Error',
                        'errorMessage' => 'The specified AppId is invalid.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"FE22D613-D3C6-4A58-87CA-F21FC85AA08E\\",\\n  \\"Result\\": {\\n    \\"WordList\\": [\\n      \\"测试敏感词\\"\\n    ],\\n    \\"TotalCount\\": 100\\n  }\\n}","errorExample":""},{"type":"xml","example":"<ListSensitiveWordResponse>\\n    <RequestId>FE22D613-D3C6-4A58-87CA-F21FC85AA08E</RequestId>\\n    <Result>\\n        <WordList>测试敏感词</WordList>\\n        <TotalCount>100</TotalCount>\\n    </Result>\\n</ListSensitiveWordResponse>","errorExample":""}]',
            'title' => '查询敏感词',
            'description' => '## QPS限制'."\n"
                .'该接口的QPS限制为单用户10次/秒。',
        ],
        'CancelBanAllComment' => [
            'summary' => '调用CancelBanAllComment接口，取消房间内全员禁言的限制。',
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'AppId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '应用唯一标识，由6位小写字母、数字组成。',
                        'description' => '用户的应用ID，在控制台创建应用时生成。包含小写字母、数字，长度为6个字符。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '7m***q',
                    ],
                ],
                [
                    'name' => 'RoomId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '房间唯一标识，由调用CreateRoom返回。',
                        'description' => '房间的唯一标识，在调用CreateRoom时返回。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'AE35****T95F',
                    ],
                ],
                [
                    'name' => 'UserId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '用户在房间内的唯一标识',
                        'description' => '操作人的用户ID，用于表示谁执行了取消全员禁言操作。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'as****hs',
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
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'FE22D613-D3C6-4A58-87CA-F21FC85AA08E',
                            ],
                            'Result' => [
                                'title' => '操作成功标识',
                                'description' => '获取取消全员禁言的调用结果。true表示取消全员禁言成功，false表示取消全员禁言失败。',
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
                        'errorCode' => 'Forbidden.Chat.NoPermissionToOperate',
                        'errorMessage' => 'The user has no permission to operate.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"FE22D613-D3C6-4A58-87CA-F21FC85AA08E\\",\\n  \\"Result\\": true\\n}","errorExample":""},{"type":"xml","example":"<CancelBanAllCommentResponse>\\n    <RequestId>FE22D613-D3C6-4A58-87CA-F21FC85AA08E</RequestId>\\n    <Result>true</Result>\\n</CancelBanAllCommentResponse>","errorExample":""}]',
            'title' => '取消全员禁言',
            'extraInfo' => '检查用户是否有权限取消全员禁言，若无权限则报错误Forbidden.Comment.NoPermissionToOperate。',
        ],
        'CancelBanComment' => [
            'summary' => '调用CancelBanComment接口，取消对房间内某特定用户的禁言。',
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
                    'name' => 'AppId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '应用唯一标识，由6位小写字母、数字组成。',
                        'description' => '用户的应用ID，在控制台创建应用时生成。包含小写字母、数字，长度为6个字符。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '7m***q',
                    ],
                ],
                [
                    'name' => 'RoomId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '房间唯一标识，由调用CreateRoom返回。',
                        'description' => '房间的唯一标识，在调用CreateRoom时返回。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'AE35****T95F',
                    ],
                ],
                [
                    'name' => 'UserId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '用户在房间内的唯一标识',
                        'description' => '操作人的用户ID，用于表示谁执行了取消禁言的操作。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'as****hs',
                    ],
                ],
                [
                    'name' => 'BanCommentUser',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '取消禁言的用户唯一标识',
                        'description' => '被取消禁言的用户ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'er****h',
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
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'FE22D613-D3C6-4A58-87CA-F21FC85AA08E',
                            ],
                            'Result' => [
                                'title' => '操作成功标识',
                                'description' => '调用CancelBanComment的返回结果。true代表取消禁言成功，false代表取消禁言失败。',
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
                        'errorCode' => 'Forbidden.Chat.NoPermissionToOperate',
                        'errorMessage' => 'The user has no permission to operate.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"FE22D613-D3C6-4A58-87CA-F21FC85AA08E\\",\\n  \\"Result\\": true\\n}","errorExample":""},{"type":"xml","example":"<CancelBanCommentResponse>\\n    <RequestId>FE22D613-D3C6-4A58-87CA-F21FC85AA08E</RequestId>\\n    <Result>true</Result>\\n</CancelBanCommentResponse>","errorExample":""}]',
            'title' => '取消禁言',
            'extraInfo' => '该接口仅限拥有取消禁言权限的用户调用，否则报错Forbidden.Comment.NoPermissionToOperate。',
        ],
        'BanAllComment' => [
            'summary' => '调用BanAllComment接口，禁言房间内所有用户。',
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'AppId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '应用唯一标识，由6位小写字母、数字组成。',
                        'description' => '用户的应用ID，在控制台创建应用时生成。包含小写字母、数字，长度为6个字符。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '7m***q',
                    ],
                ],
                [
                    'name' => 'RoomId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '房间唯一标识，由调用CreateRoom返回。',
                        'description' => '房间的唯一标识，在调用CreateRoom时返回。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'AE35****T95F',
                    ],
                ],
                [
                    'name' => 'UserId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '用户在房间内的唯一标识',
                        'description' => '操作人的用户ID，用于表示谁执行了全员禁言操作。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'as****hs',
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
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'FE22D613-D3C6-4A58-87CA-F21FC85AA08E',
                            ],
                            'Result' => [
                                'title' => '操作成功标识',
                                'description' => '获取全员禁言的调用结果。',
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
                        'errorCode' => 'Forbidden.Chat.NoPermissionToOperate',
                        'errorMessage' => 'The user has no permission to operate.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"FE22D613-D3C6-4A58-87CA-F21FC85AA08E\\",\\n  \\"Result\\": true\\n}","errorExample":""},{"type":"xml","example":"<BanAllCommentResponse>\\n    <RequestId>FE22D613-D3C6-4A58-87CA-F21FC85AA08E</RequestId>\\n    <Result>true</Result>\\n</BanAllCommentResponse>","errorExample":""}]',
            'title' => '全员禁言',
            'extraInfo' => '检查用户是否有权限禁言全员，若无权限则报错误Forbidden.Comment.NoPermissionToOperate。',
        ],
        'BanComment' => [
            'summary' => '调用BanComment接口，实现对房间内某特定用户实施禁言操作。',
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'AppId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '应用唯一标识，由6位小写字母、数字组成。',
                        'description' => '用户的应用ID，在控制台创建应用时生成。包含小写字母、数字，长度为6个字符。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '7m***q',
                    ],
                ],
                [
                    'name' => 'RoomId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '房间唯一标识，由调用CreateRoom返回。',
                        'description' => '房间的唯一标识，在调用CreateRoom时返回。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'AE35****T95F',
                    ],
                ],
                [
                    'name' => 'UserId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '用户在房间内的唯一标识',
                        'description' => '操作人的用户ID，用于表示谁执行了禁言操作。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'as****hs',
                    ],
                ],
                [
                    'name' => 'BanCommentUser',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '被禁言的用户在房间内的唯一标识',
                        'description' => '被禁言的用户ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'er****h',
                    ],
                ],
                [
                    'name' => 'BanCommentTime',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '禁言时长（秒）',
                        'description' => '禁言时长，单位：秒。'."\n"
                            ."\n"
                            .'- 如果不填写该字段，默认禁言30秒。'."\n"
                            ."\n"
                            .'- 传0表示永久禁言。'."\n"
                            ."\n"
                            .'- 最大值不得超过24小时，如果超过，会被限制为24小时。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '30',
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
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'FE22D613-D3C6-4A58-87CA-F21FC85AA08E',
                            ],
                            'Result' => [
                                'title' => '操作是否成功',
                                'description' => '获取禁言操作调用结果，true代表禁言成功，false代表禁言失败。',
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
                        'errorCode' => 'Forbidden.Chat.NoPermissionToOperate',
                        'errorMessage' => 'The user has no permission to operate.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"FE22D613-D3C6-4A58-87CA-F21FC85AA08E\\",\\n  \\"Result\\": true\\n}","errorExample":""},{"type":"xml","example":"<BanCommentResponse>\\n    <RequestId>FE22D613-D3C6-4A58-87CA-F21FC85AA08E</RequestId>\\n    <Result>true</Result>\\n</BanCommentResponse>","errorExample":""}]',
            'title' => '禁言',
            'extraInfo' => '该接口仅限拥有禁言权限的用户调用，否则报错Forbidden.Comment.NoPermissionToOperate。',
        ],
        'SendCustomMessageToAll' => [
            'summary' => '调用SendCustomMessageToAll向房间中全部在线成员发送自定义消息。',
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
                    'name' => 'AppId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '应用唯一标识，由6位小写字母、数字组成。',
                        'description' => '用户的应用ID，在控制台创建应用时生成。包含小写字母、数字，长度为6个字符。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '7m***q',
                    ],
                ],
                [
                    'name' => 'RoomId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '房间唯一标识，由调用CreateRoom返回。',
                        'description' => '房间的唯一标识，在调用CreateRoom时返回。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'AE35-****-T95F',
                    ],
                ],
                [
                    'name' => 'Body',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '消息体内容。',
                        'description' => '自定义消息体的内容，大小不超过2048个字节。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'Hello, World',
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
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'FE22D613-D3C6-4A58-87CA-F21FC85AA08E',
                            ],
                            'Result' => [
                                'title' => 'API请求的返回结果结构体。',
                                'description' => '调用发送自定义消息的返回结果。',
                                'type' => 'object',
                                'properties' => [
                                    'MessageId' => [
                                        'title' => '消息的唯一ID标识。由数字、大小写字母组成，长度不超过20。',
                                        'description' => '自定义消息的唯一ID标识。由数字、大小写字母组成，最大长度20个字符。',
                                        'type' => 'string',
                                        'example' => '0io**Fs6Q384',
                                    ],
                                ],
                                'example' => '0io**Fs6Q384',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"FE22D613-D3C6-4A58-87CA-F21FC85AA08E\\",\\n  \\"Result\\": {\\n    \\"MessageId\\": \\"0io**Fs6Q384\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<SendCustomMessageToAllResponse>\\n    <RequestId>FE22D613-D3C6-4A58-87CA-F21FC85AA08E</RequestId>\\n    <Result>\\n        <MessageId>0io**Fs6Q384</MessageId>\\n    </Result>\\n</SendCustomMessageToAllResponse>","errorExample":""}]',
            'title' => '发送自定义消息',
        ],
        'SendCustomMessageToUsers' => [
            'summary' => '调用SendCustomMessageToUsers向房间中的指定成员发送自定义消息。',
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
                    'name' => 'AppId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '应用唯一标识，由6位小写字母、数字组成。',
                        'description' => '用户的应用ID，在控制台创建应用时生成。包含小写字母、数字，长度为6个字符。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '7m***q',
                    ],
                ],
                [
                    'name' => 'RoomId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '房间唯一标识，由调用CreateRoom返回。',
                        'description' => '房间的唯一标识，在调用CreateRoom时返回。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'AE35-****-T95F',
                    ],
                ],
                [
                    'name' => 'Body',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '消息体内容。',
                        'description' => '自定义消息体的内容，大小不超过2048个字节。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'Hello, World',
                    ],
                ],
                [
                    'name' => 'ReceiverList',
                    'in' => 'formData',
                    'style' => 'flat',
                    'schema' => [
                        'title' => '消息指定的接收人ID列表。',
                        'description' => '自定义消息的接收人用户ID列表，最大长度不超过100。',
                        'type' => 'array',
                        'items' => [
                            'description' => '自定义消息的接收人用户ID列表。最多可输入100个用户ID。',
                            'type' => 'string',
                            'required' => true,
                            'example' => '["34**29"]',
                        ],
                        'required' => true,
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
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'FE22D613-D3C6-4A58-87CA-F21FC85AA08E',
                            ],
                            'Result' => [
                                'title' => 'API请求的返回结果结构体。',
                                'description' => '调用指定房间成员发送自定义消息的返回结果。',
                                'type' => 'object',
                                'properties' => [
                                    'MessageId' => [
                                        'title' => '消息的唯一ID标识。由数字、大小写字母组成，长度不超过20。',
                                        'description' => '自定义消息的唯一ID标识。由数字、大小写字母组成，最大长度20个字符。',
                                        'type' => 'string',
                                        'example' => '0io**Fs6Q384',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"FE22D613-D3C6-4A58-87CA-F21FC85AA08E\\",\\n  \\"Result\\": {\\n    \\"MessageId\\": \\"0io**Fs6Q384\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<SendCustomMessageToUsersResponse>\\n    <RequestId>FE22D613-D3C6-4A58-87CA-F21FC85AA08E</RequestId>\\n    <Result>\\n        <MessageId>0io**Fs6Q384</MessageId>\\n    </Result>\\n</SendCustomMessageToUsersResponse>","errorExample":""}]',
            'title' => '指定房间成员发送自定义消息',
        ],
        'SendComment' => [
            'summary' => '调用SendComment发送弹幕消息，该弹幕消息会推送给房间内所有在线人员。',
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
                    'name' => 'AppId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '应用唯一标识，可以包含小写字母、数字，长度为6个字符。',
                        'description' => '用户的应用ID，在控制台创建应用时生成。包含小写字母、数字，长度为6个字符。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '7m***q',
                    ],
                ],
                [
                    'name' => 'RoomId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '直播间唯一标识，在调用CreateRoom返回。',
                        'description' => '房间的唯一标识，在调用CreateRoom时返回。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'AE35****T95F',
                    ],
                ],
                [
                    'name' => 'SenderId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '弹幕发送者的用户ID，最大长度不超过32个字节。',
                        'description' => '弹幕消息发送者的用户ID，最大长度不超过32个字节。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '62**59',
                    ],
                ],
                [
                    'name' => 'SenderNick',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '弹幕消息发送者的昵称。',
                        'description' => '弹幕消息的发送者昵称，最大长度不得超过128个字节。如果为空，则采用弹幕消息发送者的用户ID在进入房间时注册的昵称。如果对应昵称仍然为空，则显示为空。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Tom',
                    ],
                ],
                [
                    'name' => 'Content',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '发送的文本内容。最大的长度不超过256个字节。',
                        'description' => '弹幕消息的内容。最大的长度不超过256个字节。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'Hello, World',
                    ],
                ],
                [
                    'name' => 'Extension',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'title' => '扩展字段，服务端仅做透传。',
                        'description' => '扩展字段，key-value形式，服务端会把拓展字段信息一并推送到客户端。',
                        'type' => 'object',
                        'required' => false,
                        'additionalProperties' => [
                            'type' => 'string',
                            'example' => 'value',
                        ],
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
                            'RequestId' => [
                                'title' => '请求ID。',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'FE22D613-D3C6-4A58-87CA-F21FC85AA08E',
                            ],
                            'Result' => [
                                'title' => '调用发送直播间弹幕的返回结果。',
                                'description' => '调用发送房间弹幕消息的返回结果。',
                                'type' => 'object',
                                'properties' => [
                                    'CommentVO' => [
                                        'title' => '返回的弹幕数据模型。',
                                        'description' => '返回的弹幕消息数据模型。',
                                        'type' => 'object',
                                        'properties' => [
                                            'CommentId' => [
                                                'title' => '弹幕的唯一ID。',
                                                'description' => '弹幕消息的唯一ID。',
                                                'type' => 'string',
                                                'example' => '09***f8',
                                            ],
                                            'SenderId' => [
                                                'title' => '弹幕的发送者ID标识。',
                                                'description' => '弹幕消息发送者的用户ID。',
                                                'type' => 'string',
                                                'example' => '62**59',
                                            ],
                                            'SenderNick' => [
                                                'title' => '弹幕发送者的昵称。',
                                                'description' => '弹幕消息发送者的昵称。',
                                                'type' => 'string',
                                                'example' => 'Tom',
                                            ],
                                            'CreateAt' => [
                                                'title' => '弹幕的创建时间，Unix时间戳，单位：毫秒。',
                                                'description' => '弹幕消息的创建时间，Unix时间戳，单位：毫秒。',
                                                'type' => 'integer',
                                                'format' => 'int64',
                                                'example' => '1628438400000',
                                            ],
                                            'Content' => [
                                                'title' => '弹幕的内容。',
                                                'description' => '弹幕消息的内容。',
                                                'type' => 'string',
                                                'example' => 'Hello,World',
                                            ],
                                            'Extension' => [
                                                'title' => '扩展字段。',
                                                'description' => '扩展字段，key-value形式，其值等同于请求时传递的Extension参数。',
                                                'type' => 'object',
                                                'additionalProperties' => [
                                                    'type' => 'string',
                                                    'example' => 'value',
                                                    'description' => '扩展字段key-value键值对中，value的示例值。',
                                                ],
                                            ],
                                        ],
                                        'example' => '0io**Fs6Q384',
                                    ],
                                ],
                                'example' => '0io**Fs6Q384',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'Forbidden.Chat.HasBeenBanned',
                        'errorMessage' => 'The user is banned from posting a comment.',
                    ],
                    [
                        'errorCode' => 'Forbidden.Chat.SendCommentFrequencyLimited',
                        'errorMessage' => 'The frequency of SendComment for this user is limited.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"FE22D613-D3C6-4A58-87CA-F21FC85AA08E\\",\\n  \\"Result\\": {\\n    \\"CommentVO\\": {\\n      \\"CommentId\\": \\"09***f8\\",\\n      \\"SenderId\\": \\"62**59\\",\\n      \\"SenderNick\\": \\"Tom\\",\\n      \\"CreateAt\\": 1628438400000,\\n      \\"Content\\": \\"Hello,World\\",\\n      \\"Extension\\": {\\n        \\"key\\": \\"value\\"\\n      }\\n    }\\n  }\\n}","errorExample":""},{"type":"xml","example":"<SendCommentResponse>\\n    <RequestId>FE22D613-D3C6-4A58-87CA-F21FC85AA08E</RequestId>\\n    <Result>\\n        <CommentVO>\\n            <CommentId>09***f8</CommentId>\\n            <SenderId>62**59</SenderId>\\n            <SenderNick>Tom</SenderNick>\\n            <CreateAt>1628438400000</CreateAt>\\n            <Content>Hello,World</Content>\\n            <Extension>\\n                <key>value</key>\\n            </Extension>\\n        </CommentVO>\\n    </Result>\\n</SendCommentResponse>","errorExample":""}]',
            'title' => '发送弹幕消息',
        ],
        'DeleteComment' => [
            'summary' => '调用DeleteComment删除弹幕消息。',
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
                    'name' => 'AppId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '应用唯一标识，可以包含小写字母、数字，长度为6个字符。',
                        'description' => '用户的应用ID，在控制台创建应用时生成。包含小写字母、数字，长度为6个字符。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '7m***q',
                    ],
                ],
                [
                    'name' => 'RoomId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '直播间唯一标识，在调用CreateRoom返回。',
                        'description' => '房间的唯一标识，在调用CreateRoom时返回。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'AE35****T95F',
                    ],
                ],
                [
                    'name' => 'UserId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '删除的操作人ID。',
                        'description' => '操作人的用户ID，用于表示谁执行了删除弹幕消息的操作。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'as****hs',
                    ],
                ],
                [
                    'name' => 'CommentIdList',
                    'in' => 'formData',
                    'style' => 'flat',
                    'schema' => [
                        'title' => '需要删除的弹幕id列表',
                        'description' => '需要删除的弹幕消息ID的列表。列表的最大长度不得超过100。',
                        'type' => 'array',
                        'items' => [
                            'description' => '弹幕消息ID，在调用SendComment时返回。',
                            'type' => 'string',
                            'required' => true,
                            'example' => '09***f8',
                        ],
                        'required' => true,
                        'example' => 'Hello, World',
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
                            'RequestId' => [
                                'title' => '请求ID。',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'FE22D613-D3C6-4A58-87CA-F21FC85AA08E',
                            ],
                            'Result' => [
                                'title' => '调用删除直播间弹幕的返回结果。',
                                'description' => '调用删除房间弹幕消息的返回结果。',
                                'type' => 'object',
                                'properties' => [
                                    'DeleteResult' => [
                                        'title' => '删除的结果',
                                        'description' => '删除的结果。其中true表示删除成功，false表示删除失败。',
                                        'type' => 'boolean',
                                        'example' => 'true',
                                    ],
                                ],
                                'example' => '0io**Fs6Q384',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"FE22D613-D3C6-4A58-87CA-F21FC85AA08E\\",\\n  \\"Result\\": {\\n    \\"DeleteResult\\": true\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DeleteCommentResponse>\\n    <RequestId>FE22D613-D3C6-4A58-87CA-F21FC85AA08E</RequestId>\\n    <Result>\\n        <DeleteResult>true</DeleteResult>\\n    </Result>\\n</DeleteCommentResponse>","errorExample":""}]',
            'title' => '删除弹幕消息',
        ],
        'ListComments' => [
            'summary' => '调用ListComments批量查询弹幕消息。',
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
                    'name' => 'AppId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '用户的应用ID，在控制台创建应用时生成。包含小写字母、数字，长度为6个字符。',
                        'description' => '用户的应用ID，在控制台创建应用时生成。包含小写字母、数字，长度为6个字符。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '7m***q',
                    ],
                ],
                [
                    'name' => 'RoomId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '房间的唯一标识，在调用CreateRoom时返回。',
                        'description' => '房间的唯一标识，在调用CreateRoom时返回。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'AE35****T95F',
                    ],
                ],
                [
                    'name' => 'UserId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '操作人用户ID，表示谁执行了查询弹幕消息列表的操作。',
                        'description' => '操作人用户ID，表示谁执行了批量查询弹幕消息的操作。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '62**59',
                    ],
                ],
                [
                    'name' => 'CreatorId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '弹幕创建者ID。',
                        'description' => '弹幕的创建者ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '10**13',
                    ],
                ],
                [
                    'name' => 'PageNum',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '查询弹幕消息列表的分页页数。应该从1开始，每次分页拉取时递增。',
                        'description' => '批量查询弹幕消息的分页页数。要求从1开始，每次分页拉取时递增加1。',
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
                        'title' => '查询弹幕消息列表的分页大小。最小不得小于1，最大不得超过100。如果超过100，会被截断为前100条。',
                        'description' => '批量查询弹幕消息的分页大小。最小不得小于1，最大不得超过100。如果超过100，会被截断为前100条。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'example' => '50',
                    ],
                ],
                [
                    'name' => 'SortType',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '查询弹幕消息列表的排序方式。取值仅限0和1，其中0表示按照弹幕消息创建时间递增的顺序拉取，1表示按照弹幕消息创建时间递减的时间拉取。',
                        'description' => '批量查询弹幕消息的排序方式。取值仅限0和1。'."\n"
                            ."\n"
                            .'- **0**：按照弹幕消息创建时间递减的顺序查询。'."\n"
                            ."\n"
                            .'- **1**：按照弹幕消息创建时间递增的顺序查询。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'example' => '0',
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
                            'RequestId' => [
                                'title' => '请求ID。',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'ER52****O9CA',
                            ],
                            'Result' => [
                                'title' => '调用查询弹幕消息列表的返回结果。',
                                'description' => '调用批量查询弹幕消息的返回结果。',
                                'type' => 'object',
                                'properties' => [
                                    'CommentVOList' => [
                                        'title' => '弹幕消息列表。',
                                        'description' => '弹幕消息列表。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '弹幕消息信息。',
                                            'type' => 'object',
                                            'properties' => [
                                                'AppId' => [
                                                    'title' => '应用ID。',
                                                    'description' => '应用ID。',
                                                    'type' => 'string',
                                                    'example' => '7m***q',
                                                ],
                                                'RoomId' => [
                                                    'title' => '房间ID。',
                                                    'description' => '房间ID。',
                                                    'type' => 'string',
                                                    'example' => 'AE35****T95F',
                                                ],
                                                'CommentId' => [
                                                    'title' => '弹幕消息的唯一ID标识。',
                                                    'description' => '弹幕消息的唯一ID标识。',
                                                    'type' => 'string',
                                                    'example' => '09***f8',
                                                ],
                                                'SenderId' => [
                                                    'title' => '弹幕消息的发送者ID标识。',
                                                    'description' => '弹幕消息的发送者ID标识。',
                                                    'type' => 'string',
                                                    'example' => '62**59',
                                                ],
                                                'SenderNick' => [
                                                    'title' => '弹幕消息发送者的昵称。',
                                                    'description' => '弹幕消息发送者的昵称。',
                                                    'type' => 'string',
                                                    'example' => 'Tom',
                                                ],
                                                'CreateAt' => [
                                                    'title' => '弹幕消息的创建时间，Unix时间戳，单位：毫秒。',
                                                    'description' => '弹幕消息的创建时间，Unix时间戳，单位：毫秒。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '1628438400000',
                                                ],
                                                'Content' => [
                                                    'title' => '弹幕消息的内容。',
                                                    'description' => '弹幕消息的内容。',
                                                    'type' => 'string',
                                                    'example' => 'Hello,World',
                                                ],
                                                'Extension' => [
                                                    'title' => '扩展字段。',
                                                    'description' => '扩展字段。',
                                                    'type' => 'object',
                                                    'additionalProperties' => [
                                                        'type' => 'string',
                                                        'example' => 'value',
                                                        'description' => '扩展字段。',
                                                    ],
                                                ],
                                            ],
                                        ],
                                    ],
                                    'HasMore' => [
                                        'title' => '是否还有下一页数据。true表示还有，false表示没有。',
                                        'description' => '是否还有下一页数据。true表示还有，false表示没有。',
                                        'type' => 'boolean',
                                        'example' => 'true',
                                    ],
                                    'TotalCount' => [
                                        'title' => '弹幕消息的总数。',
                                        'description' => '批量查询弹幕消息的总数。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '100',
                                    ],
                                    'PageTotal' => [
                                        'title' => '分页查询弹幕消息列表的总页数。',
                                        'description' => '分页查询弹幕消息列表的总页数。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '2',
                                    ],
                                ],
                                'example' => '0io**Fs6Q384',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"ER52****O9CA\\",\\n  \\"Result\\": {\\n    \\"CommentVOList\\": [\\n      {\\n        \\"AppId\\": \\"7m***q\\",\\n        \\"RoomId\\": \\"AE35****T95F\\",\\n        \\"CommentId\\": \\"09***f8\\",\\n        \\"SenderId\\": \\"62**59\\",\\n        \\"SenderNick\\": \\"Tom\\",\\n        \\"CreateAt\\": 1628438400000,\\n        \\"Content\\": \\"Hello,World\\",\\n        \\"Extension\\": {\\n          \\"key\\": \\"value\\"\\n        }\\n      }\\n    ],\\n    \\"HasMore\\": true,\\n    \\"TotalCount\\": 100,\\n    \\"PageTotal\\": 2\\n  }\\n}","errorExample":""},{"type":"xml","example":"<ListCommentsResponse>\\n    <RequestId>ER52****O9CA</RequestId>\\n    <Result>\\n        <CommentVOList>\\n            <AppId>7m***q</AppId>\\n            <RoomId>AE35****T95F</RoomId>\\n            <CommentId>09***f8</CommentId>\\n            <SenderId>62**59</SenderId>\\n            <SenderNick>Tom</SenderNick>\\n            <CreateAt>1628438400000</CreateAt>\\n            <Content>Hello,World</Content>\\n            <Extension>\\n                <key>value</key>\\n            </Extension>\\n        </CommentVOList>\\n        <HasMore>true</HasMore>\\n        <TotalCount>100</TotalCount>\\n        <PageTotal>2</PageTotal>\\n    </Result>\\n</ListCommentsResponse>","errorExample":""}]',
            'title' => '批量查询弹幕消息',
        ],
        'DeleteCommentByCreatorId' => [
            'summary' => '调用DeleteCommentByCreatorId根据创建者ID批量删除弹幕。',
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
                    'name' => 'AppId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '应用唯一标识，可以包含小写字母、数字，长度为6个字符。',
                        'description' => '应用唯一标识，可以包含小写字母、数字，长度为6个字符。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '7m***q',
                    ],
                ],
                [
                    'name' => 'RoomId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '直播间唯一标识，在调用CreateRoom返回。',
                        'description' => '直播间唯一标识，在调用CreateRoom返回。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'AE35****T95F',
                    ],
                ],
                [
                    'name' => 'UserId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '删除的操作人ID。',
                        'description' => '删除的操作人ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '62**59',
                    ],
                ],
                [
                    'name' => 'CreatorId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '弹幕的创建者ID。',
                        'description' => '弹幕的创建者ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '12**86',
                    ],
                ],
                [
                    'name' => 'CommentIdList',
                    'in' => 'formData',
                    'style' => 'flat',
                    'schema' => [
                        'title' => '需要删除的弹幕id列表',
                        'description' => '需要删除的弹幕消息ID的列表，为当前创建者下的弹幕ID列表。列表的最大长度不得超过100。该参数为空时，删除操作将异步执行。',
                        'type' => 'array',
                        'items' => [
                            'description' => '弹幕ID。',
                            'type' => 'string',
                            'required' => false,
                            'example' => '09***f8',
                        ],
                        'required' => false,
                        'example' => 'Hello, World',
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
                            'RequestId' => [
                                'title' => '请求ID。',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'ER52****O9CA',
                            ],
                            'Result' => [
                                'title' => '调用删除直播间弹幕的返回结果。',
                                'description' => '调用删除直播间弹幕的返回结果。',
                                'type' => 'object',
                                'properties' => [
                                    'DeleteResult' => [
                                        'title' => '删除的结果',
                                        'description' => '删除的结果。',
                                        'type' => 'boolean',
                                        'example' => 'true',
                                    ],
                                ],
                                'example' => '0io**Fs6Q384',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"ER52****O9CA\\",\\n  \\"Result\\": {\\n    \\"DeleteResult\\": true\\n  }\\n}","type":"json"}]',
            'title' => '根据创建者ID批量删除弹幕',
        ],
        'DeleteConference' => [
            'summary' => '调用DeleteConference结束连麦。一般用于管理后台结束，或长时间未退出时的强制结束。',
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
                    'name' => 'AppId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '租户名',
                        'description' => '用户的应用ID，在控制台创建应用时生成。包含小写字母、数字，长度为6个字符。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '7m***q',
                    ],
                ],
                [
                    'name' => 'RoomId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '房间ID，最大长度36位',
                        'description' => '房间ID，由创建房间接口返回。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'AE35-****-T95F',
                    ],
                ],
                [
                    'name' => 'UserId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '创建会议用户ID',
                        'description' => '操作者用户ID，仅支持英文和数字，最大长度36个字符。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'as****hs',
                    ],
                ],
                [
                    'name' => 'ConferenceId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '会议资源的唯一标识ID',
                        'description' => '连麦资源的唯一标识ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'fb0f-****-4cb1',
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
                            'RequestId' => [
                                'title' => '请求ID',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '16A96B9A-****-CB92E68F4CD8',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidConferenceId.Rtc.DataNotExist',
                        'errorMessage' => 'The specified parameter conferenceId does not exist in our records.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"16A96B9A-****-CB92E68F4CD8\\"\\n}","errorExample":""},{"type":"xml","example":"<DeleteConferenceResponse>\\n    <RequestId>16A96B9A-****-CB92E68F4CD8</RequestId>\\n</DeleteConferenceResponse>","errorExample":""}]',
            'title' => '结束连麦',
        ],
        'RemoveMember' => [
            'summary' => '调用RemoveMember将指定用户从连麦中踢出。',
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
                'operationType' => 'delete',
            ],
            'parameters' => [
                [
                    'name' => 'ConferenceId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '会议唯一标识',
                        'description' => '连麦唯一标识。由字母、数字和短横线（-）组成，长度为36个字符。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'fb0f-****-4cb1',
                    ],
                ],
                [
                    'name' => 'ToUserId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '被邀请用户ID',
                        'description' => '被踢者用户ID，在AppId下单独唯一。英文字母、数字、下划线（_）、短横线（-）、小数点（.）和@组成。长度为1到36个字符。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '45***9',
                    ],
                ],
                [
                    'name' => 'FromUserId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '邀请者用户ID',
                        'description' => '踢人者用户ID，在AppId下单独唯一。英文字母、数字、下划线（_）、短横线（-）、小数点（.）和@组成。长度为1到36个字符。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '23***7',
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
                            'RequestId' => [
                                'title' => '请求ID',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'FE22D613-D3C6-4A58-87CA-F21FC85AA08E',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                403 => [
                    [
                        'errorCode' => 'Forbidden.Rtc.UserNoPermission',
                        'errorMessage' => 'The user is not authorized to operate on the specified resource.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"FE22D613-D3C6-4A58-87CA-F21FC85AA08E\\"\\n}","errorExample":""},{"type":"xml","example":"<RemoveMemberResponse>\\n    <RequestId>FE22D613-D3C6-4A58-87CA-F21FC85AA08E</RequestId>\\n</RemoveMemberResponse>","errorExample":""}]',
            'title' => '踢人',
        ],
        'GetConference' => [
            'summary' => '调用GetConference查询指定连麦信息，包含连麦标题和连麦状态。也可查询连麦结束后的录制地址。',
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
                    'name' => 'ConferenceId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '会议资源唯一标识。',
                        'description' => '连麦唯一标识。由字母、数字和短横线（-）组成，长度为36个字符。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'fb0f-****-4cb1',
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
                            'RequestId' => [
                                'title' => '请求ID',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'FE22D613-D3C6-4A58-87CA-F21FC85AA08E',
                            ],
                            'Result' => [
                                'title' => '返回结果',
                                'description' => '返回结果。',
                                'type' => 'object',
                                'properties' => [
                                    'ConferenceId' => [
                                        'title' => '会议资源唯一标识。',
                                        'description' => '连麦唯一标识，由调用CreateConference返回。由字母、数字和短横线（-）组成，长度为36个字符。',
                                        'type' => 'string',
                                        'example' => 'fb0f-****-4cb1',
                                    ],
                                    'Title' => [
                                        'title' => '会议标题。',
                                        'description' => '会议标题，支持中英文，最大长度128个字符。',
                                        'type' => 'string',
                                        'example' => 'This is a Title',
                                    ],
                                    'Status' => [
                                        'title' => '会议状态。',
                                        'description' => '状态。取值：'."\n"
                                            .'- **Init**：未开始。 '."\n"
                                            .'- **Start**：连麦中。'."\n"
                                            .'- **End**：连麦结束。',
                                        'type' => 'string',
                                        'example' => 'Init',
                                    ],
                                    'RoomId' => [
                                        'title' => '房间ID。',
                                        'description' => '房间唯一标识，最大长度36个字符。',
                                        'type' => 'string',
                                        'example' => 'AE35-****-T95F',
                                    ],
                                    'UserId' => [
                                        'title' => '创建会议用户。',
                                        'description' => '创建连麦的用户，在AppId下单独唯一。英文字母、数字、下划线（_）、短横线（-）、小数点（.）和@组成。长度为1到36个字符。',
                                        'type' => 'string',
                                        'example' => 'as****hs',
                                    ],
                                    'AppId' => [
                                        'title' => '租户名',
                                        'description' => '应用唯一标识，可以包含小写字母、数字，长度为6个字符。',
                                        'type' => 'string',
                                        'example' => '7m***q',
                                    ],
                                    'CreateTime' => [
                                        'title' => '会议创建时间戳，单位：毫秒。',
                                        'description' => '连麦创建时间戳，单位：毫秒。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '1624589848000',
                                    ],
                                    'PlaybackUrl' => [
                                        'title' => '录制回放地址，m3u8格式，会议结束后10秒才会生成。',
                                        'description' => '录制回放地址，m3u8格式，连麦结束后10秒才会生成。',
                                        'type' => 'string',
                                        'example' => 'http://xxxx.com/b7f29c02-****-40fd-****-e8d06a8aebb3_merged.m3u8?auth_key=1627522726-0-0-******e620b363d4cf8a8e3',
                                    ],
                                ],
                                'example' => 'true',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"FE22D613-D3C6-4A58-87CA-F21FC85AA08E\\",\\n  \\"Result\\": {\\n    \\"ConferenceId\\": \\"fb0f-****-4cb1\\",\\n    \\"Title\\": \\"This is a Title\\",\\n    \\"Status\\": \\"Init\\",\\n    \\"RoomId\\": \\"AE35-****-T95F\\",\\n    \\"UserId\\": \\"as****hs\\",\\n    \\"AppId\\": \\"7m***q\\",\\n    \\"CreateTime\\": 1624589848000,\\n    \\"PlaybackUrl\\": \\"http://xxxx.com/b7f29c02-****-40fd-****-e8d06a8aebb3_merged.m3u8?auth_key=1627522726-0-0-******e620b363d4cf8a8e3\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<GetConferenceResponse>\\n    <RequestId>FE22D613-D3C6-4A58-87CA-F21FC85AA08E</RequestId>\\n    <Result>\\n        <ConferenceId>fb0f-****-4cb1</ConferenceId>\\n        <Title>This is a Title</Title>\\n        <Status>Init</Status>\\n        <RoomId>AE35-****-T95F</RoomId>\\n        <UserId>as****hs</UserId>\\n        <AppId>7m***q</AppId>\\n        <CreateTime>1624589848000</CreateTime>\\n        <PlaybackUrl>http://xxxx.com/b7f29c02-****-40fd-****-e8d06a8aebb3_merged.m3u8?auth_key=1627522726-0-0-******e620b363d4cf8a8e3</PlaybackUrl>\\n    </Result>\\n</GetConferenceResponse>","errorExample":""}]',
            'title' => '查询连麦详情',
        ],
        'ListConferenceUsers' => [
            'summary' => '调用ListConferenceUsers分页查询连麦用户信息。',
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
                    'name' => 'ConferenceId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '会议唯一标识符',
                        'description' => '连麦唯一标识。由字母、数字和短横线（-）组成，长度为36个字符。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'fb0f-****-4cb1',
                    ],
                ],
                [
                    'name' => 'PageNumber',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '查询页码，从第1页开始。',
                        'description' => '查询页码，从第1页开始。',
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
                        'title' => '每页显示个数，最大显示个数为100。',
                        'description' => '每页显示个数，最大支持100。',
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
                        'title' => 'Schema of Response',
                        'description' => 'Schema of Response',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => '请求ID',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'FE22D613-D3C6-4A58-87CA-F21FC85AA08E',
                            ],
                            'Result' => [
                                'title' => '返回结果',
                                'description' => '分页查询连麦用户信息的返回结果。',
                                'type' => 'object',
                                'properties' => [
                                    'ConferenceUserList' => [
                                        'title' => '会议用户列表。',
                                        'description' => '连麦用户列表。',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'UserId' => [
                                                    'title' => '用户ID。',
                                                    'description' => '用户ID。',
                                                    'type' => 'string',
                                                    'example' => '4*****9',
                                                ],
                                                'Status' => [
                                                    'title' => '用户状态。',
                                                    'description' => '用户状态。取值：'."\n"
                                                        ."\n"
                                                        .'- **Init**：初始状态。'."\n"
                                                        ."\n"
                                                        .'- **OnJoining**：呼叫中。'."\n"
                                                        ."\n"
                                                        .'- **Active**：连麦中。'."\n"
                                                        ."\n"
                                                        .'- **JoinFail**：连麦失败。'."\n"
                                                        ."\n"
                                                        .'- **Kicked**：被踢出。'."\n"
                                                        ."\n"
                                                        .'- **Leave**：离开连麦。'."\n",
                                                    'type' => 'string',
                                                    'example' => 'active',
                                                ],
                                            ],
                                        ],
                                        'example' => 'myApp',
                                    ],
                                    'HasMore' => [
                                        'title' => '是否还有数据',
                                        'description' => '是否还有数据。',
                                        'type' => 'boolean',
                                        'example' => 'true',
                                    ],
                                    'TotalCount' => [
                                        'title' => '总条目数',
                                        'description' => '总条目数。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '100',
                                    ],
                                    'PageTotal' => [
                                        'title' => '总页数',
                                        'description' => '总页数。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '100',
                                    ],
                                ],
                                'example' => 'true',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"FE22D613-D3C6-4A58-87CA-F21FC85AA08E\\",\\n  \\"Result\\": {\\n    \\"ConferenceUserList\\": [\\n      {\\n        \\"UserId\\": \\"4*****9\\",\\n        \\"Status\\": \\"active\\"\\n      }\\n    ],\\n    \\"HasMore\\": true,\\n    \\"TotalCount\\": 100,\\n    \\"PageTotal\\": 100\\n  }\\n}","errorExample":""},{"type":"xml","example":"<ListConferenceUsersResponse>\\n    <RequestId>FE22D613-D3C6-4A58-87CA-F21FC85AA08E</RequestId>\\n    <Result>\\n        <ConferenceUserList>\\n            <UserId>4*****9</UserId>\\n            <Status>active</Status>\\n        </ConferenceUserList>\\n        <HasMore>true</HasMore>\\n        <TotalCount>100</TotalCount>\\n        <PageTotal>100</PageTotal>\\n    </Result>\\n</ListConferenceUsersResponse>","errorExample":""}]',
            'title' => '查询连麦用户列表',
        ],
        'GetStandardRoomJumpUrl' => [
            'summary' => '调用GetStandardRoomJumpUrl获取低代码服务跳转链接。',
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
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'AppId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '用户的应用ID，在控制台创建应用时生成',
                        'description' => '用户的应用ID，在控制台创建应用时生成。包含小写字母、数字，长度为6个字符。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '7m***q',
                    ],
                ],
                [
                    'name' => 'UserId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '用户UserId,在AppId下单独唯一',
                        'description' => '用户UserId，在AppId下单独唯一。小写英文、数字、下划线（_）和小数点（.）组成，最大长度32个字符。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'as****hs',
                    ],
                ],
                [
                    'name' => 'AppKey',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '终端设备类型,通过控制台创建和查询',
                        'description' => '终端设备类型，通过控制台创建和查询。小写英文和数字，长度32个字符。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '06***9c',
                    ],
                ],
                [
                    'name' => 'Platform',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '平台：win, mac, android, ios, web',
                        'description' => '选择获取链接的平台类型。取值：'."\n"
                            ."\n"
                            .'- win：Windows端。'."\n"
                            ."\n"
                            .'- web： Web端。'."\n"
                            .'- mac：Mac端。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'web',
                    ],
                ],
                [
                    'name' => 'BizType',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '业务类型：互动直播live，互动课堂class',
                        'description' => '业务场景类型。取值：'."\n"
                            ."\n"
                            .'- live：互动直播。'."\n"
                            ."\n"
                            .'- class：互动课堂。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'live',
                    ],
                ],
                [
                    'name' => 'BizId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '资源ID：根据业务类型来定，比如直播ID，课堂ID等',
                        'description' => '资源ID。根据业务场景类型来定：'."\n"
                            ."\n"
                            .'- 互动直播场景传入直播ID(LiveId)。'."\n"
                            .'- 互动课堂场景传入课程ID(ClassId)。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'b7f2-****-ebb3',
                    ],
                ],
                [
                    'name' => 'UserNick',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '用户昵称',
                        'description' => '用户用于显示的昵称，英文大小写字母、汉字、数字、下划线（_）、短横线（-）、小数点（.）和@组成。长度为1到36个字符。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'James',
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
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '16A96B9A-****-CB92E68F4CD8',
                            ],
                            'Result' => [
                                'description' => '调用获取低代码服务跳转链接的接口返回结果。',
                                'type' => 'object',
                                'properties' => [
                                    'StandardRoomJumpUrl' => [
                                        'title' => '样板间跳转协议地址',
                                        'description' => '低代码服务跳转协议地址。',
                                        'type' => 'string',
                                        'example' => 'http://xxx.com/standard_live?appId=l***u&userId=jm6&userAuthSession=0c179505-6d14-**-88a888d849ec&roomId=b807bd2a-**-96e1-c5753f13a5eb&appKey=63***3d&callback=https%3A%2F%2Fxxx.com%2Fapi%2Flogin%2FcheckUserAuthSession',
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
                        'errorCode' => 'InvalidParameter.StandardRoom.LowCodeDomainNotConfig',
                        'errorMessage' => 'This app is not configured with a low-code domain name.',
                    ],
                    [
                        'errorCode' => 'InvalidAppId.StandardRoom.CnameNotConfig',
                        'errorMessage' => 'The low-code integration service does not have a CNAME configured.',
                    ],
                    [
                        'errorCode' => 'InvalidParameter.StandardRoom.AppKeyNotMatch',
                        'errorMessage' => 'The parameter AppId and the parameter AppKey do not match.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"16A96B9A-****-CB92E68F4CD8\\",\\n  \\"Result\\": {\\n    \\"StandardRoomJumpUrl\\": \\"http://xxx.com/standard_live?appId=l***u&userId=jm6&userAuthSession=0c179505-6d14-**-88a888d849ec&roomId=b807bd2a-**-96e1-c5753f13a5eb&appKey=63***3d&callback=https%3A%2F%2Fxxx.com%2Fapi%2Flogin%2FcheckUserAuthSession\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<GetStandardRoomJumpUrlResponse>\\n    <RequestId>16A96B9A-****-CB92E68F4CD8</RequestId>\\n    <Result>\\n        <StandardRoomJumpUrl>http://xxx.com/standard_live?appId=l***u&amp;userId=jm6&amp;userAuthSession=0c179505-6d14-**-88a888d849ec&amp;roomId=b807bd2a-**-96e1-c5753f13a5eb&amp;appKey=63***3d&amp;callback=https%3A%2F%2Fxxx.com%2Fapi%2Flogin%2FcheckUserAuthSession</StandardRoomJumpUrl>\\n    </Result>\\n</GetStandardRoomJumpUrlResponse>","errorExample":""}]',
            'title' => '获取低代码服务跳转链接',
        ],
        'DescribeMeterImpWatchLiveTimeByLiveId' => [
            'methods' => [
                'get',
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
                    'name' => 'AppId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '用户的应用ID，在控制台创建应用时生成。包含小写字母、数字，长度为6个字符。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '7m***q',
                    ],
                ],
                [
                    'name' => 'LiveId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '直播资源的唯一标识ID，传空值时，系统自动生成36位随机UUID字符串。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'b7f2****ebb3',
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
                            'RequestId' => [
                                'title' => 'Id',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'FE22D613-D3C6-4A58-87CA-F21FC85AA08E',
                            ],
                            'Data' => [
                                'description' => '查询观看时长返回结果。',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'WatchTimeInLatency' => [
                                            'description' => '普通延迟观看时长，如采用rtmp、flv、hls等协议观看，单位分钟。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '32',
                                        ],
                                        'WatchTimeInLowLatency' => [
                                            'description' => '低延迟观看时长，如rts，单位分钟。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '43',
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
                        'errorCode' => 'Meter.ParamError',
                        'errorMessage' => 'Param Error:%s,Please Check Again.',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => 'Meter.AuthError',
                        'errorMessage' => 'Authentication Failed,Please Try Again.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'Meter.ServerInternalError',
                        'errorMessage' => 'The Request Processing Has Failed Due To Some Unknown Error.',
                    ],
                    [
                        'errorCode' => 'Meter.DataSourceQueryError',
                        'errorMessage' => 'Data Source Error:%s,Please Try Again.',
                    ],
                ],
                502 => [
                    [
                        'errorCode' => 'Meter.ReadyTsError',
                        'errorMessage' => 'Get ReadyTs Failed,Please Try Again.',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"FE22D613-D3C6-4A58-87CA-F21FC85AA08E\\",\\n  \\"Data\\": [\\n    {\\n      \\"WatchTimeInLatency\\": 32,\\n      \\"WatchTimeInLowLatency\\": 43\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '根据直播唯一标识查看观看时长',
            'summary' => '调用DescribeMeterImpWatchLiveTimeByLiveId查看观看时长相关数据，包含普通延迟观看时长，低延迟观看时长。',
            'description' => '根据直播资源的唯一标识ID查询普通延迟观看时长，低延迟观看时长。',
        ],
        'DescribeMeterImpPlayBackTimeByLiveId' => [
            'methods' => [
                'get',
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
                    'name' => 'AppId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '用户的应用ID，在控制台创建应用时生成。包含小写字母、数字，长度为6个字符。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '7m***q',
                    ],
                ],
                [
                    'name' => 'LiveId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '直播资源的唯一标识ID，传空值时，系统自动生成36位随机UUID字符串。'."\n"
                            ."\n",
                        'type' => 'string',
                        'required' => true,
                        'example' => 'b7f2****ebb3',
                    ],
                ],
                [
                    'name' => 'StartTs',
                    'in' => 'query',
                    'schema' => [
                        'description' => '查询的开始时间，使用UNIX时间戳表示，单位：秒。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '1632153600',
                    ],
                ],
                [
                    'name' => 'EndTs',
                    'in' => 'query',
                    'schema' => [
                        'description' => '查询的结束时间，使用UNIX时间戳表示，单位：秒。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '1637302350',
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
                            'RequestId' => [
                                'title' => 'Id',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'FE22D613-D3C6-4A58-87CA-F21FC85AA08E',
                            ],
                            'Data' => [
                                'description' => '查询回看时长返回结果。',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'WatchTime' => [
                                            'description' => '回看时长，单位分钟。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '32',
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
                        'errorCode' => 'Meter.ParamError',
                        'errorMessage' => 'Param Error:%s,Please Check Again.',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => 'Meter.AuthError',
                        'errorMessage' => 'Authentication Failed,Please Try Again.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'Meter.ServerInternalError',
                        'errorMessage' => 'The Request Processing Has Failed Due To Some Unknown Error.',
                    ],
                    [
                        'errorCode' => 'Meter.DataSourceQueryError',
                        'errorMessage' => 'Data Source Error:%s,Please Try Again.',
                    ],
                ],
                502 => [
                    [
                        'errorCode' => 'Meter.ReadyTsError',
                        'errorMessage' => 'Get ReadyTs Failed,Please Try Again.',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"FE22D613-D3C6-4A58-87CA-F21FC85AA08E\\",\\n  \\"Data\\": [\\n    {\\n      \\"WatchTime\\": 32\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '查询指定直播资源的回看时长',
            'summary' => '调用DescribeMeterImpPlayBackTimeByLiveId查询指定直播资源的回看时长。',
            'description' => '根据时间范围和直播资源唯一标识ID获取回放时长。',
            'requestParamsDescription' => '最大查询范围31天，可查询3个月内的数据。',
        ],
        'CreateLive' => [
            'summary' => '创建状态为未开播的新直播。',
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
            'systemTags' => [
                'operationType' => 'create',
            ],
            'parameters' => [
                [
                    'name' => 'AppId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '应用唯一标识，可以包含小写字母、数字，长度为6个字符。',
                        'description' => '应用唯一标识，可以包含小写字母、数字，长度为6个字符。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '7m***q',
                    ],
                ],
                [
                    'name' => 'RoomId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '房间ID，最大长度36个字符，传空值，则随机生成一个房间ID。',
                        'description' => '房间唯一标识，最大长度36个字符。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'AE35-****-T95F',
                    ],
                ],
                [
                    'name' => 'UserId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '创建直播用户。',
                        'description' => '创建直播用户，在AppId下单独唯一。小写英文、数字、下划线（_）和小数点（.）组成，最大长度32个字符。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'as****hs',
                    ],
                ],
                [
                    'name' => 'LiveId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '直播资源的唯一标识ID，缺省时系统自动生成36位随机uuid字符串。',
                        'description' => '直播资源的唯一标识ID，传空值时，系统自动生成36位随机UUID字符串。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'b7f2****ebb3',
                    ],
                ],
                [
                    'name' => 'Title',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '直播标题，支持中英文，最大长度256位。',
                        'description' => '直播标题，支持中英文，最大长度256个字符。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'This is a title.',
                    ],
                ],
                [
                    'name' => 'Introduction',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '直播简介，支持中英文，最大长度2048位。',
                        'description' => '直播简介，支持中英文，最大长度2048个字符。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'This is an intro.',
                    ],
                ],
                [
                    'name' => 'AnchorId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '主播ID，支持中英文，最大长度128位，缺省时主播为当前创建直播用户。',
                        'description' => '主播ID，支持中英文，最大长度128个字符。传空值时，主播为当前创建直播用户。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'as****hs',
                    ],
                ],
                [
                    'name' => 'CodeLevel',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '直播推流码率，缺省时默认为3。取值：  -1：流畅lld。 1：标清lsd。 2：高清lhd。 3：超清lud。',
                        'description' => '直播推流码率，缺省时默认为3。取值：'."\n"
                            .'* **-1**：流畅lld。'."\n"
                            .'* **1**：标清lsd。'."\n"
                            .'* **2**：高清lhd。'."\n"
                            .'* **3**：超清lud。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '3',
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
                            'RequestId' => [
                                'title' => '请求ID。',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'FE22D613-D3C6-4A58-87CA-F21FC85AA08E',
                            ],
                            'Result' => [
                                'description' => '创建直播的返回结果。',
                                'type' => 'object',
                                'properties' => [
                                    'LiveId' => [
                                        'title' => '直播的唯一标识ID。',
                                        'description' => '直播的唯一标识ID。',
                                        'type' => 'string',
                                        'example' => 'b7f2****ebb3',
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
                        'errorCode' => 'Forbidden.Room.LiveAlreadyExist',
                        'errorMessage' => 'The live instance already exists.',
                    ],
                    [
                        'errorCode' => 'Invalid.Live.ConfigNotFound',
                        'errorMessage' => 'The live push domain and pull domain config not found.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"FE22D613-D3C6-4A58-87CA-F21FC85AA08E\\",\\n  \\"Result\\": {\\n    \\"LiveId\\": \\"b7f2****ebb3\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<CreateLiveResponse>\\n    <RequestId>FE22D613-D3C6-4A58-87CA-F21FC85AA08E</RequestId>\\n    <Result>\\n        <LiveId>b7f2****ebb3</LiveId>\\n    </Result>\\n    </CreateLiveResponse>","errorExample":""}]',
            'title' => '创建直播',
        ],
        'DeleteLive' => [
            'summary' => '删除直播记录。',
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
                    'name' => 'LiveId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '直播资源的唯一标识ID',
                        'description' => '直播资源的唯一标识ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'b7f2****ebb3',
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
                            'RequestId' => [
                                'title' => '请求ID',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'FE22D613-D3C6-4A58-87CA-F21FC85AA08E',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidLiveId.Live.NotFound',
                        'errorMessage' => 'The live broadcast does not exist.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"FE22D613-D3C6-4A58-87CA-F21FC85AA08E\\"\\n}","errorExample":""},{"type":"xml","example":"<DeleteLiveResponse>\\n    <RequestId>FE22D613-D3C6-4A58-87CA-F21FC85AA08E</RequestId>\\n    </DeleteLiveResponse>","errorExample":""}]',
            'title' => '删除直播',
        ],
        'PublishLive' => [
            'summary' => '发布直播，将直播状态转变为直播中，并获取推拉流地址。',
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
            'systemTags' => [
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'LiveId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '直播资源的唯一标识ID',
                        'description' => '直播资源的唯一标识ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'b7f2****ebb3',
                    ],
                ],
                [
                    'name' => 'UserId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '当前用户Id',
                        'description' => '用户UserId，在AppId下单独唯一。小写英文、数字、下划线（_）和小数点（.）组成，最大长度32个字符。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'as****hs',
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
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'FE22D613-D3C6-4A58-87CA-F21FC85AA08E',
                            ],
                            'Result' => [
                                'description' => '发布直播的返回结果。',
                                'type' => 'object',
                                'properties' => [
                                    'LiveId' => [
                                        'title' => '直播资源的唯一标识ID',
                                        'description' => '直播资源的唯一标识ID。',
                                        'type' => 'string',
                                        'example' => 'b7f2****ebb3',
                                    ],
                                    'AnchorId' => [
                                        'title' => '主播ID',
                                        'description' => '主播ID。',
                                        'type' => 'string',
                                        'example' => 'as****hs',
                                    ],
                                    'Status' => [
                                        'title' => '直播状态：Created-已创建未开播，Living-直播中，End-直播结束',
                                        'description' => '直播状态。类型为字符串，取值：'."\n"
                                            .'* **1**：直播中。',
                                        'type' => 'string',
                                        'example' => '1',
                                    ],
                                    'PushUrl' => [
                                        'title' => '直播推流地址',
                                        'description' => '直播推流地址。',
                                        'type' => 'string',
                                        'example' => 'rtmp://demo-app-push.com/live/b7f2****ebb3?auth_key=e620****a8e3',
                                    ],
                                    'LiveUrl' => [
                                        'title' => '直播拉流地址',
                                        'description' => '直播拉流地址。',
                                        'type' => 'string',
                                        'example' => 'http://demo-app-live.com/live/b7f2****ebb3.flv?auth_key=e620****a8e3',
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
                        'errorCode' => 'InvalidLiveId.Live.NotFound',
                        'errorMessage' => 'The live broadcast does not exist.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"FE22D613-D3C6-4A58-87CA-F21FC85AA08E\\",\\n  \\"Result\\": {\\n    \\"LiveId\\": \\"b7f2****ebb3\\",\\n    \\"AnchorId\\": \\"as****hs\\",\\n    \\"Status\\": \\"1\\",\\n    \\"PushUrl\\": \\"rtmp://demo-app-push.com/live/b7f2****ebb3?auth_key=e620****a8e3\\",\\n    \\"LiveUrl\\": \\"http://demo-app-live.com/live/b7f2****ebb3.flv?auth_key=e620****a8e3\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<PublishLiveResponse>\\n    <RequestId>FE22D613-D3C6-4A58-87CA-F21FC85AA08E</RequestId>\\n    <Result>\\n        <LiveId>b7f2****ebb3</LiveId>\\n        <AnchorId>as****hs</AnchorId>\\n        <Status>1</Status>\\n        <PushUrl>rtmp://demo-app-push.com/live/b7f2****ebb3?auth_key=e620****a8e3</PushUrl>\\n        <LiveUrl>http://demo-app-live.com/live/b7f2****ebb3.flv?auth_key=e620****a8e3</LiveUrl>\\n    </Result>\\n</PublishLiveResponse>","errorExample":""}]',
            'title' => '发布直播',
        ],
        'UpdateLive' => [
            'summary' => '更新指定直播相关信息。',
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
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'LiveId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '直播资源的唯一标识ID',
                        'description' => '直播资源的唯一标识ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'b7f2****ebb3',
                    ],
                ],
                [
                    'name' => 'Title',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '直播标题，支持中英文，最大长度256位',
                        'description' => '直播标题，支持中英文，最大长度256个字符。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'This is a title.',
                    ],
                ],
                [
                    'name' => 'Introduction',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '直播简介，支持中英文，最大长度2048位',
                        'description' => '直播简介，支持中英文，最大长度2048个字符。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'This is an introduction.',
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
                            'RequestId' => [
                                'title' => '请求ID',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'FE22D613-D3C6-4A58-87CA-F21FC85AA08E',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidLiveId.Live.NotFound',
                        'errorMessage' => 'The live broadcast does not exist.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"FE22D613-D3C6-4A58-87CA-F21FC85AA08E\\"\\n}","errorExample":""},{"type":"xml","example":"<UpdateLiveResponse>\\n    <RequestId>FE22D613-D3C6-4A58-87CA-F21FC85AA08E</RequestId>\\n    </UpdateLiveResponse>","errorExample":""}]',
            'title' => '更新直播信息',
        ],
        'StopLive' => [
            'summary' => '停止指定直播，直播状态改变为直播结束。',
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
            'systemTags' => [
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'AppId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '租户名',
                        'description' => '应用唯一标识，可以包含小写字母、数字，长度为6个字符。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '7m***q',
                    ],
                ],
                [
                    'name' => 'RoomId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '房间ID，最大长度36位',
                        'description' => '房间ID，支持英文和数字，最大长度36个字符。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'AE35-****-T95F',
                    ],
                ],
                [
                    'name' => 'UserId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '创建直播用户ID',
                        'description' => '创建直播的UserId，在AppId下单独唯一。小写英文、数字、下划线（_）和小数点（.）组成，最大长度32个字符。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'as****hs',
                    ],
                ],
                [
                    'name' => 'LiveId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '直播资源的唯一标识ID',
                        'description' => '直播资源的唯一标识ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'b7f2****ebb3',
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
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'FE22D613-D3C6-4A58-87CA-F21FC85AA08E',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidLiveId.Live.NotFound',
                        'errorMessage' => 'The live broadcast does not exist.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"FE22D613-D3C6-4A58-87CA-F21FC85AA08E\\"\\n}","errorExample":""},{"type":"xml","example":"<StopLiveResponse>\\n    <RequestId>FE22D613-D3C6-4A58-87CA-F21FC85AA08E</RequestId>\\n    </StopLiveResponse>","errorExample":""}]',
            'title' => '停止直播',
        ],
        'GetLive' => [
            'summary' => '查询与指定直播相关联的信息。',
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
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'LiveId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '直播资源的唯一标识ID',
                        'description' => '直播资源的唯一标识ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'b7f2****ebb3',
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
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'FE22D613-D3C6-4A58-87CA-F21FC85AA08E',
                            ],
                            'Result' => [
                                'description' => '查询直播详情的返回结果。',
                                'type' => 'object',
                                'properties' => [
                                    'AnchorId' => [
                                        'title' => '主播ID',
                                        'description' => '主播ID。',
                                        'type' => 'string',
                                        'example' => 'as****hs',
                                    ],
                                    'LiveId' => [
                                        'title' => '直播资源的唯一标识ID',
                                        'description' => '直播资源的唯一标识ID。',
                                        'type' => 'string',
                                        'example' => 'b7f2****ebb3',
                                    ],
                                    'Title' => [
                                        'title' => '直播标题',
                                        'description' => '直播标题。',
                                        'type' => 'string',
                                        'example' => 'This is a title.',
                                    ],
                                    'PlaybackUrl' => [
                                        'title' => '直播回放地址',
                                        'description' => '直播回放地址。直播开始时生成，直播结束后可以观看。',
                                        'type' => 'string',
                                        'example' => 'http://demo-app-playback.com/live/b7f2****ebb3.m3u8?auth_key=e620****a8e3',
                                    ],
                                    'CreateTime' => [
                                        'title' => '直播创建时间（毫秒ms）',
                                        'description' => '直播创建时间，单位：毫秒。直播开始后生成。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '1624259500000',
                                    ],
                                    'EndTime' => [
                                        'title' => '直播结束时间（毫秒ms）',
                                        'description' => '直播结束时间，单位：毫秒。直播结束后生成。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '1624259500000',
                                    ],
                                    'Duration' => [
                                        'title' => '直播持续时间（毫秒ms）',
                                        'description' => '直播持续时间，单位：毫秒。直播结束后生成。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '10000',
                                    ],
                                    'PushUrl' => [
                                        'title' => '直播推流地址',
                                        'description' => '直播推流地址。',
                                        'type' => 'string',
                                        'example' => 'rtmp://demo-app-push.com/live/e620****a8e3?auth_key=e620****a8e3',
                                    ],
                                    'LiveUrl' => [
                                        'title' => '直播拉流地址',
                                        'description' => '直播拉流地址。',
                                        'type' => 'string',
                                        'example' => 'http://demo-app-live.com/live/e620****a8e3.flv?auth_key=e620****a8e3',
                                    ],
                                    'Status' => [
                                        'title' => '直播状态：Created-已创建，未开播，Living-直播中，End-直播结束',
                                        'description' => '直播状态。取值：'."\n"
                                            .'* **Created**：已创建，未开始直播。'."\n"
                                            .'* **Living**：直播中。'."\n"
                                            .'* **End**：直播结束。',
                                        'type' => 'string',
                                        'example' => 'Created',
                                    ],
                                    'Introduction' => [
                                        'title' => '直播简介',
                                        'description' => '直播简介。',
                                        'type' => 'string',
                                        'example' => 'This is an introduction.',
                                    ],
                                    'RoomId' => [
                                        'title' => '房间id',
                                        'description' => '房间ID。',
                                        'type' => 'string',
                                        'example' => 'AE35-****-T95F',
                                    ],
                                    'AppId' => [
                                        'title' => '租户名',
                                        'description' => '租户名。',
                                        'type' => 'string',
                                        'example' => '7m***q',
                                    ],
                                    'UserId' => [
                                        'title' => '创建直播用户',
                                        'description' => '创建直播用户。',
                                        'type' => 'string',
                                        'example' => 'as****hs',
                                    ],
                                    'CodeLevel' => [
                                        'title' => '直播推送分辨率 -1:lld 1:lsd 2:lhd 3:lud',
                                        'description' => '直播推流码率。取值：'."\n"
                                            .'* **-1**：流畅，分辨率：宽度自适应，高度：360；编码格式：H.264。'."\n"
                                            .'* **1**：标清，分辨率：宽度自适应，高度：432；编码格式：H.264。'."\n"
                                            .'* **2**：高清，分辨率：宽度自适应，高度：648；编码格式：H.264。'."\n"
                                            .'* **3**：超清，分辨率：宽度自适应，高度：1080；编码格式：H.264。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '1',
                                    ],
                                    'PlayUrlInfoList' => [
                                        'title' => '多分辨率多协议播放信息',
                                        'description' => '多分辨率多协议播放信息。',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'CodeLevel' => [
                                                    'title' => '直播拉取分辨率 -1:lld 1:lsd 2:lhd 3:lud',
                                                    'description' => '直播推流码率。取值：'."\n"
                                                        .'* **-1**：流畅，分辨率：宽度自适应，高度：360；编码格式：H.264。'."\n"
                                                        .'* **1**：标清，分辨率：宽度自适应，高度：432；编码格式：H.264。'."\n"
                                                        .'* **2**：高清，分辨率：宽度自适应，高度：648；编码格式：H.264。'."\n"
                                                        .'* **3**：超清，分辨率：宽度自适应，高度：1080；编码格式：H.264。',
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                    'example' => '1',
                                                ],
                                                'FlvUrl' => [
                                                    'title' => 'flv拉流地址',
                                                    'description' => 'FLV拉流地址。',
                                                    'type' => 'string',
                                                    'example' => 'http://demo-app-live.com/live/b7f2****ebb3.flv?auth_key=e620****a8e3',
                                                ],
                                                'HlsUrl' => [
                                                    'title' => 'hls拉流地址',
                                                    'description' => 'HLS拉流地址。',
                                                    'type' => 'string',
                                                    'example' => 'http://demo-app-live.com/live/b7f2****ebb3.m3u8?auth_key=e620****a8e3',
                                                ],
                                                'RtmpUrl' => [
                                                    'title' => 'rtmp拉流地址',
                                                    'description' => 'RTMP拉流地址。',
                                                    'type' => 'string',
                                                    'example' => 'rtmp://demo-app-live.com/live/b7f2****ebb3?auth_key=e620****a8e3',
                                                ],
                                            ],
                                        ],
                                    ],
                                    'CoverUrl' => [
                                        'title' => '封面图片',
                                        'description' => '封面图片。',
                                        'type' => 'string',
                                        'example' => 'http://demo-app-live.com/live/b7f29c02-****-40fd-****-e8d06a8aebb3.png',
                                    ],
                                    'UserDefineField' => [
                                        'title' => '用户自定义数据存储',
                                        'description' => '用户自定义数据存储。',
                                        'type' => 'string',
                                        'example' => '{"selfData":"example"}',
                                    ],
                                    'HlsUrl' => [
                                        'title' => 'hls播放地址',
                                        'description' => '原画HLS播放地址。',
                                        'type' => 'string',
                                        'example' => 'http://demo-app-live.com/live/b7f29c02-****-40fd-****-e8d06a8aebb3.m3u8?auth_key=1627522726-0-0-******e620b363d4cf8a8e3',
                                    ],
                                    'ArtcInfo' => [
                                        'title' => 'rts播流信息',
                                        'description' => 'RTS低延迟播流信息。',
                                        'type' => 'object',
                                        'properties' => [
                                            'ArtcUrl' => [
                                                'title' => '源码地址',
                                                'description' => 'RTS原码流地址，推荐移动端使用。',
                                                'type' => 'string',
                                                'example' => 'artc://demo-app-live.com/live/b7f29c02-****-40fd-****-e8d06a8aebb3?auth_key=1627522726-0-0-******e620b363d4cf8a8e3',
                                            ],
                                            'ArtcH5Url' => [
                                                'title' => '原画转码地址',
                                                'description' => 'RTS转码流地址，推荐web端使用。',
                                                'type' => 'string',
                                                'example' => 'artc://demo-app-live.com/live/b7f29c02-****-40fd-****-e8d06a8aebb3_origin-RTS?auth_key=1627522726-0-0-******e620b363d4cf8a8e3',
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"FE22D613-D3C6-4A58-87CA-F21FC85AA08E\\",\\n  \\"Result\\": {\\n    \\"AnchorId\\": \\"as****hs\\",\\n    \\"LiveId\\": \\"b7f2****ebb3\\",\\n    \\"Title\\": \\"This is a title.\\",\\n    \\"PlaybackUrl\\": \\"http://demo-app-playback.com/live/b7f2****ebb3.m3u8?auth_key=e620****a8e3\\",\\n    \\"CreateTime\\": 1624259500000,\\n    \\"EndTime\\": 1624259500000,\\n    \\"Duration\\": 10000,\\n    \\"PushUrl\\": \\"rtmp://demo-app-push.com/live/e620****a8e3?auth_key=e620****a8e3\\",\\n    \\"LiveUrl\\": \\"http://demo-app-live.com/live/e620****a8e3.flv?auth_key=e620****a8e3\\",\\n    \\"Status\\": \\"Created\\",\\n    \\"Introduction\\": \\"This is an introduction.\\",\\n    \\"RoomId\\": \\"AE35-****-T95F\\",\\n    \\"AppId\\": \\"7m***q\\",\\n    \\"UserId\\": \\"as****hs\\",\\n    \\"CodeLevel\\": 1,\\n    \\"PlayUrlInfoList\\": [\\n      {\\n        \\"CodeLevel\\": 1,\\n        \\"FlvUrl\\": \\"http://demo-app-live.com/live/b7f2****ebb3.flv?auth_key=e620****a8e3\\",\\n        \\"HlsUrl\\": \\"http://demo-app-live.com/live/b7f2****ebb3.m3u8?auth_key=e620****a8e3\\",\\n        \\"RtmpUrl\\": \\"rtmp://demo-app-live.com/live/b7f2****ebb3?auth_key=e620****a8e3\\"\\n      }\\n    ],\\n    \\"CoverUrl\\": \\"http://demo-app-live.com/live/b7f29c02-****-40fd-****-e8d06a8aebb3.png\\",\\n    \\"UserDefineField\\": \\"{\\\\\\"selfData\\\\\\":\\\\\\"example\\\\\\"}\\",\\n    \\"HlsUrl\\": \\"http://demo-app-live.com/live/b7f29c02-****-40fd-****-e8d06a8aebb3.m3u8?auth_key=1627522726-0-0-******e620b363d4cf8a8e3\\",\\n    \\"ArtcInfo\\": {\\n      \\"ArtcUrl\\": \\"artc://demo-app-live.com/live/b7f29c02-****-40fd-****-e8d06a8aebb3?auth_key=1627522726-0-0-******e620b363d4cf8a8e3\\",\\n      \\"ArtcH5Url\\": \\"artc://demo-app-live.com/live/b7f29c02-****-40fd-****-e8d06a8aebb3_origin-RTS?auth_key=1627522726-0-0-******e620b363d4cf8a8e3\\"\\n    }\\n  }\\n}","errorExample":""},{"type":"xml","example":"<GetLiveResponse>\\n    <RequestId>FE22D613-D3C6-4A58-87CA-F21FC85AA08E</RequestId>\\n    <Result>\\n        <AnchorId>as****hs</AnchorId>\\n        <LiveId>b7f2****ebb3</LiveId>\\n        <Title>This is a title.</Title>\\n        <PlaybackUrl>http://demo-app-playback.com/live/b7f2****ebb3.m3u8?auth_key=e620****a8e3</PlaybackUrl>\\n        <CreateTime>1624259500000</CreateTime>\\n        <EndTime>1624259500000</EndTime>\\n        <Duration>10000</Duration>\\n        <PushUrl>rtmp://demo-app-push.com/live/e620****a8e3?auth_key=e620****a8e3</PushUrl>\\n        <LiveUrl>http://demo-app-live.com/live/e620****a8e3.flv?auth_key=e620****a8e3</LiveUrl>\\n        <Status>Created</Status>\\n        <Introduction>This is an introduction.</Introduction>\\n        <RoomId>AE35-****-T95F</RoomId>\\n        <AppId>7m***q</AppId>\\n        <UserId>as****hs</UserId>\\n        <CodeLevel>1</CodeLevel>\\n        <PlayUrlInfoList>\\n            <CodeLevel>1</CodeLevel>\\n            <FlvUrl>http://demo-app-live.com/live/b7f2****ebb3.flv?auth_key=e620****a8e3</FlvUrl>\\n            <HlsUrl>http://demo-app-live.com/live/b7f2****ebb3.m3u8?auth_key=e620****a8e3</HlsUrl>\\n            <RtmpUrl>rtmp://demo-app-live.com/live/b7f2****ebb3?auth_key=e620****a8e3</RtmpUrl>\\n        </PlayUrlInfoList>\\n    </Result>\\n    </GetLiveResponse>","errorExample":""}]',
            'title' => '查询直播详情',
        ],
    ],
    'endpoints' => [
        [
            'regionId' => 'cn-hangzhou',
            'endpoint' => 'imp.aliyuncs.com',
        ],
    ],
];
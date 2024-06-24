<?php return array (
  'version' => '1.0',
  'info' => 
  array (
    'style' => 'RPC',
    'product' => 'imp',
    'version' => '2021-06-30',
  ),
  'directories' => 
  array (
    0 => 
    array (
      'id' => 121844,
      'title' => '长连接',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'GetAuthToken',
      ),
    ),
    1 => 
    array (
      'id' => 121852,
      'title' => '直播',
      'type' => 'directory',
      'children' => 
      array (
        0 => 
        array (
          'id' => 167587,
          'title' => '获取直播列表',
          'type' => 'directory',
          'children' => 
          array (
            0 => 'ListLiveRooms',
            1 => 'ListLiveRoomsById',
          ),
        ),
        1 => 
        array (
          'id' => 167586,
          'title' => '直播数据统计',
          'type' => 'directory',
          'children' => 
          array (
            0 => 'GetLiveRoomStatistics',
            1 => 'GetLiveRoomUserStatistics',
          ),
        ),
        2 => 
        array (
          'id' => 169037,
          'title' => '直播录制',
          'type' => 'directory',
          'children' => 
          array (
            0 => 'GetLiveRecord',
            1 => 'CreateLiveRecordSliceFile',
            2 => 'ListLiveFiles',
            3 => 'DeleteLiveFilesById',
          ),
        ),
        3 => 'CreateLiveRoom',
        4 => 'DeleteLiveRoom',
        5 => 'PublishLiveRoom',
        6 => 'UpdateLiveRoom',
        7 => 'StopLiveRoom',
        8 => 'GetLiveRoom',
      ),
    ),
    2 => 
    array (
      'id' => 121846,
      'title' => '课堂',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateClass',
        1 => 'DeleteClass',
        2 => 'StopClass',
        3 => 'UpdateClass',
        4 => 'GetClassDetail',
        5 => 'ListClasses',
        6 => 'GetClassRecord',
        7 => 'UpdateShareScreenLayout',
      ),
    ),
    3 => 
    array (
      'id' => 121863,
      'title' => '房间',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateRoom',
        1 => 'DeleteRoom',
        2 => 'UpdateRoom',
        3 => 'KickRoomUser',
        4 => 'SetUserAdmin',
        5 => 'CancelUserAdmin',
        6 => 'GetRoom',
        7 => 'ListRooms',
        8 => 'ListRoomUsers',
      ),
    ),
    4 => 
    array (
      'id' => 121870,
      'title' => '消息',
      'type' => 'directory',
      'children' => 
      array (
        0 => 
        array (
          'id' => 167432,
          'title' => '敏感词',
          'type' => 'directory',
          'children' => 
          array (
            0 => 'CreateSensitiveWord',
            1 => 'DeleteSensitiveWord',
            2 => 'ListSensitiveWord',
          ),
        ),
        1 => 
        array (
          'id' => 167433,
          'title' => '禁言',
          'type' => 'directory',
          'children' => 
          array (
            0 => 'CancelBanAllComment',
            1 => 'CancelBanComment',
            2 => 'BanAllComment',
            3 => 'BanComment',
          ),
        ),
        2 => 
        array (
          'id' => 167434,
          'title' => '消息管理',
          'type' => 'directory',
          'children' => 
          array (
            0 => 'SendCustomMessageToAll',
            1 => 'SendCustomMessageToUsers',
            2 => 'SendComment',
            3 => 'DeleteComment',
            4 => 'ListComments',
            5 => 'DeleteCommentByCreatorId',
          ),
        ),
      ),
    ),
    5 => 
    array (
      'id' => 121880,
      'title' => '连麦',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'DeleteConference',
        1 => 'RemoveMember',
        2 => 'GetConference',
        3 => 'ListConferenceUsers',
      ),
    ),
    6 => 
    array (
      'id' => 121893,
      'title' => '低代码服务',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'GetStandardRoomJumpUrl',
      ),
    ),
    7 => 
    array (
      'id' => 167286,
      'title' => '用量查询',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'DescribeMeterImpWatchLiveTimeByLiveId',
        1 => 'DescribeMeterImpPlayBackTimeByLiveId',
      ),
    ),
    8 => 
    array (
      'id' => 121914,
      'title' => '直播(旧)',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateLive',
        1 => 'DeleteLive',
        2 => 'PublishLive',
        3 => 'UpdateLive',
        4 => 'StopLive',
        5 => 'GetLive',
      ),
    ),
  ),
  'components' => 
  array (
    'schemas' => 
    array (
      'AssetsAuditAssetResponse' => 
      array (
        'title' => '审核Asset响应消息',
        'type' => 'object',
        'properties' => 
        array (
          'RequestId' => 
          array (
            'title' => '请求ID',
            'type' => 'string',
          ),
          'Status' => 
          array (
            'title' => '响应状态',
            'required' => false,
            '$ref' => '#/components/schemas/RpcStatus',
          ),
        ),
      ),
      'AssetsCreateAssetResponse' => 
      array (
        'title' => '创建Asset响应消息',
        'type' => 'object',
        'properties' => 
        array (
          'RequestId' => 
          array (
            'title' => '请求ID',
            'type' => 'string',
          ),
          'Status' => 
          array (
            'title' => '响应状态',
            '$ref' => '#/components/schemas/RpcStatus',
          ),
          'Asset' => 
          array (
            'title' => '资产信息',
            'required' => false,
            '$ref' => '#/components/schemas/CommonAsset',
          ),
        ),
      ),
      'AssetsDeleteAssetResponse' => 
      array (
        'title' => '删除Asset响应消息',
        'type' => 'object',
        'properties' => 
        array (
          'RequestId' => 
          array (
            'title' => '请求ID',
            'type' => 'string',
          ),
          'Status' => 
          array (
            'title' => '响应状态',
            'required' => false,
            '$ref' => '#/components/schemas/RpcStatus',
          ),
          'Asset' => 
          array (
            'title' => '资产信息',
            'required' => false,
            '$ref' => '#/components/schemas/CommonAsset',
          ),
        ),
      ),
      'AssetsGetAssetResponse' => 
      array (
        'title' => '获取Asset响应消息',
        'type' => 'object',
        'properties' => 
        array (
          'RequestId' => 
          array (
            'title' => '请求ID',
            'type' => 'string',
          ),
          'Status' => 
          array (
            'title' => '响应状态',
            'required' => false,
            '$ref' => '#/components/schemas/RpcStatus',
          ),
          'Asset' => 
          array (
            'title' => 'Asset',
            'required' => false,
            '$ref' => '#/components/schemas/CommonAsset',
          ),
        ),
      ),
      'AssetsListAssetsRequest' => 
      array (
        'title' => 'ListAsset请求消息',
        'type' => 'object',
        'properties' => 
        array (
          'Params' => 
          array (
            'title' => '参数',
            'type' => 'string',
            'required' => false,
          ),
          'NextToken' => 
          array (
            'title' => '分页Token Optional.',
            'type' => 'string',
            'required' => false,
          ),
          'AppId' => 
          array (
            'title' => 'AppId',
            'type' => 'string',
            'required' => false,
          ),
          'Topic' => 
          array (
            'title' => '订阅Topic',
            'type' => 'string',
            'required' => false,
          ),
          'FieldMask' => 
          array (
            'title' => 'Optional. Used to specify a subset of fields that should be
returned by a get operation or modified by an update operation.',
            'type' => 'string',
            'required' => false,
          ),
          'MaxResults' => 
          array (
            'title' => '每页显示个数，最大支持20，参数为空默认显示个数为10。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
          ),
        ),
      ),
      'AssetsListAssetsResponse' => 
      array (
        'title' => 'ListAssetsResponse',
        'type' => 'object',
        'properties' => 
        array (
          'Status' => 
          array (
            'title' => '响应状态',
            'required' => false,
            '$ref' => '#/components/schemas/RpcStatus',
          ),
          'NextToken' => 
          array (
            'title' => '分页Token',
            'type' => 'string',
            'required' => false,
          ),
          'Assets' => 
          array (
            'title' => 'Asset列表',
            'type' => 'array',
            'items' => 
            array (
              'required' => false,
              '$ref' => '#/components/schemas/CommonAsset',
            ),
            'required' => false,
          ),
          'RequestId' => 
          array (
            'title' => '请求ID',
            'type' => 'string',
          ),
        ),
      ),
      'AssetsUpdateAssetResponse' => 
      array (
        'title' => '更新Asset响应消息',
        'type' => 'object',
        'properties' => 
        array (
          'RequestId' => 
          array (
            'title' => '请求ID',
            'type' => 'string',
          ),
          'Status' => 
          array (
            'title' => '响应状态',
            'required' => false,
            '$ref' => '#/components/schemas/RpcStatus',
          ),
          'Asset' => 
          array (
            'title' => '资产信息',
            'required' => false,
            '$ref' => '#/components/schemas/CommonAsset',
          ),
        ),
      ),
      'CommonAddress' => 
      array (
        'title' => '通讯地址',
        'type' => 'object',
        'properties' => 
        array (
          'Zip' => 
          array (
            'title' => 'zip',
            'type' => 'string',
            'required' => false,
          ),
          'Country' => 
          array (
            'title' => '国家',
            'type' => 'string',
            'required' => false,
          ),
          'City' => 
          array (
            'title' => '城市',
            'type' => 'string',
            'required' => false,
          ),
          'Address' => 
          array (
            'title' => '地址',
            'type' => 'string',
            'required' => false,
          ),
          'State' => 
          array (
            'title' => '区域',
            'type' => 'string',
            'required' => false,
          ),
        ),
      ),
      'CommonAsset' => 
      array (
        'title' => '资产',
        'type' => 'object',
        'properties' => 
        array (
          'Id' => 
          array (
            'title' => '资产ID',
            'type' => 'string',
            'required' => false,
          ),
          'AppId' => 
          array (
            'title' => '应用ID',
            'type' => 'string',
            'required' => false,
          ),
          'Status' => 
          array (
            'title' => '资产状态',
            'required' => false,
            '$ref' => '#/components/schemas/CommonAssetStatus',
          ),
          'Title' => 
          array (
            'title' => '标题',
            'type' => 'string',
            'required' => false,
          ),
          'Synopsis' => 
          array (
            'title' => '概要',
            'type' => 'string',
            'required' => false,
          ),
          'Description' => 
          array (
            'title' => '资产描述',
            'type' => 'string',
            'required' => false,
          ),
          'CreatedAt' => 
          array (
            'title' => '创建时间',
            'type' => 'string',
            'required' => false,
          ),
          'UpdatedAt' => 
          array (
            'title' => '更新时间',
            'type' => 'string',
            'required' => false,
          ),
          'Images' => 
          array (
            'title' => '图像资源',
            'type' => 'array',
            'items' => 
            array (
              'required' => false,
              '$ref' => '#/components/schemas/CommonMediaResource',
            ),
            'required' => false,
          ),
          'Videos' => 
          array (
            'title' => '视频资源',
            'type' => 'array',
            'items' => 
            array (
              'required' => false,
              '$ref' => '#/components/schemas/CommonMediaResource',
            ),
            'required' => false,
          ),
          'Author' => 
          array (
            'title' => '作者',
            'type' => 'string',
            'required' => false,
          ),
          'Source' => 
          array (
            'title' => '资产来源',
            'required' => false,
            '$ref' => '#/components/schemas/CommonAssetSource',
          ),
          'AuditStatus' => 
          array (
            'title' => '审核状态',
            'required' => false,
            '$ref' => '#/components/schemas/CommonAuditStatus',
          ),
          'Labels' => 
          array (
            'title' => '定义Label， eg:type:advertise 支持广告类型的label',
            'type' => 'object',
            'required' => false,
          ),
          'Tags' => 
          array (
            'title' => '标签',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'string',
              'required' => false,
            ),
            'required' => false,
          ),
          'Address' => 
          array (
            'title' => '行政区域地址',
            'required' => false,
            '$ref' => '#/components/schemas/CommonAddress',
          ),
          'Location' => 
          array (
            'title' => '经纬度地理位置',
            'required' => false,
            '$ref' => '#/components/schemas/TypeLatLng',
          ),
          'Extends' => 
          array (
            'title' => '扩展字段',
            'type' => 'object',
            'required' => false,
          ),
        ),
      ),
      'CommonAssetSource' => 
      array (
        'title' => '内容发布来源',
        'type' => 'string',
        'properties' => 
        array (
        ),
        'default' => 'PGC',
        'enum' => 
        array (
          0 => 'PGC',
          1 => 'UGC',
          2 => 'OGC',
          3 => 'PUGC',
          4 => 'MGC',
          5 => 'MCN',
        ),
      ),
      'CommonAssetStatus' => 
      array (
        'title' => '资产状态',
        'type' => 'string',
        'properties' => 
        array (
        ),
        'default' => 'Blank',
        'enum' => 
        array (
          0 => 'Blank',
          1 => 'Normal',
          2 => 'Abnormal',
          3 => 'Transcoding',
          4 => 'Auditing',
        ),
      ),
      'CommonAuditStatus' => 
      array (
        'title' => '审核状态',
        'type' => 'string',
        'properties' => 
        array (
        ),
        'default' => 'Unpublish',
        'enum' => 
        array (
          0 => 'Unpublish',
          1 => 'Publich',
        ),
      ),
      'CommonMediaResource' => 
      array (
        'title' => '媒体资源属性',
        'type' => 'object',
        'properties' => 
        array (
          'Sha1' => 
          array (
            'title' => 'media sha1',
            'type' => 'string',
            'required' => false,
          ),
          'Id' => 
          array (
            'title' => 'media id',
            'type' => 'string',
            'required' => false,
          ),
          'Format' => 
          array (
            'title' => 'media format',
            'type' => 'string',
            'required' => false,
          ),
          'Url' => 
          array (
            'title' => 'resource url',
            'type' => 'string',
            'required' => false,
          ),
          'Size' => 
          array (
            'title' => 'media size',
            'type' => 'string',
            'format' => 'int64',
            'required' => false,
          ),
          'Name' => 
          array (
            'title' => 'name',
            'type' => 'string',
            'required' => false,
          ),
        ),
      ),
      'CommonSimpleAsset' => 
      array (
        'title' => '简要资产',
        'type' => 'object',
        'properties' => 
        array (
          'Id' => 
          array (
            'title' => '资产ID',
            'type' => 'string',
            'required' => false,
          ),
          'AppId' => 
          array (
            'title' => '应用ID',
            'type' => 'string',
            'required' => false,
          ),
          'Status' => 
          array (
            'title' => '资产状态',
            'required' => false,
            '$ref' => '#/components/schemas/CommonAssetStatus',
          ),
          'Title' => 
          array (
            'title' => '标题',
            'type' => 'string',
            'required' => false,
          ),
          'Synopsis' => 
          array (
            'title' => '概要',
            'type' => 'string',
            'required' => false,
          ),
          'Description' => 
          array (
            'title' => '资产描述',
            'type' => 'string',
            'required' => false,
          ),
          'Image' => 
          array (
            'title' => '图像资源',
            'required' => false,
            '$ref' => '#/components/schemas/CommonMediaResource',
          ),
          'Video' => 
          array (
            'title' => '视频资源',
            'required' => false,
            '$ref' => '#/components/schemas/CommonMediaResource',
          ),
          'Author' => 
          array (
            'title' => '作者',
            'type' => 'string',
            'required' => false,
          ),
          'Source' => 
          array (
            'title' => '资产来源',
            'required' => false,
            '$ref' => '#/components/schemas/CommonAssetSource',
          ),
          'AuditStatus' => 
          array (
            'title' => '审核状态',
            'required' => false,
            '$ref' => '#/components/schemas/CommonAuditStatus',
          ),
          'Labels' => 
          array (
            'title' => '定义Label， eg:type:advertise 支持广告类型的label',
            'type' => 'object',
            'required' => false,
          ),
          'Tags' => 
          array (
            'title' => '标签',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'string',
              'required' => false,
            ),
            'required' => false,
          ),
          'Address' => 
          array (
            'title' => '行政区域地址',
            'required' => false,
            '$ref' => '#/components/schemas/CommonAddress',
          ),
          'Location' => 
          array (
            'title' => '经纬度地理位置',
            'required' => false,
            '$ref' => '#/components/schemas/TypeLatLng',
          ),
          'Extends' => 
          array (
            'title' => '扩展字段',
            'type' => 'object',
            'required' => false,
          ),
        ),
      ),
      'RpcStatus' => 
      array (
        'title' => 'google.rpc.Status',
        'description' => '错误模型',
        'type' => 'object',
        'properties' => 
        array (
          'Code' => 
          array (
            'title' => '错误码',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
          ),
          'Message' => 
          array (
            'title' => '错误消息',
            'type' => 'string',
          ),
          'Detail' => 
          array (
            'title' => '错误详情',
            'type' => 'string',
            'required' => false,
          ),
        ),
      ),
      'TypeLatLng' => 
      array (
        'description' => 'An object that represents a latitude/longitude pair. This is expressed as a
pair of doubles to represent degrees latitude and degrees longitude. Unless
specified otherwise, this must conform to the
<a href="http://www.unoosa.org/pdf/icg/2012/template/WGS_84.pdf">WGS84
standard</a>. Values must be within normalized ranges.',
        'type' => 'object',
        'properties' => 
        array (
          'Longitude' => 
          array (
            'title' => 'The longitude in degrees. It must be in the range [-180.0, +180.0].',
            'type' => 'number',
            'format' => 'double',
            'required' => false,
          ),
          'Latitude' => 
          array (
            'title' => 'The latitude in degrees. It must be in the range [-90.0, +90.0].',
            'type' => 'number',
            'format' => 'double',
            'required' => false,
          ),
        ),
      ),
    ),
  ),
  'apis' => 
  array (
    'GetAuthToken' => 
    array (
      'summary' => '调用GetAuthToken获取长连接建连Token，客户端可以用此Token通过LWP协议和各个原子能力进行长连接通信。',
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
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'AppId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '用户的应用ID，在控制台创建应用时生成',
            'description' => '用户的应用ID，在控制台创建应用时生成。包含小写字母、数字，长度为6个字符。',
            'type' => 'string',
            'required' => true,
            'example' => '7m***q',
          ),
        ),
        1 => 
        array (
          'name' => 'AppKey',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '终端设备类型,通过控制台创建和查询',
            'description' => '通过控制台创建和查询。小写英文和数字，长度32个字符。',
            'type' => 'string',
            'required' => true,
            'example' => '06***9c',
          ),
        ),
        2 => 
        array (
          'name' => 'UserId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '用户UserId,在AppId下单独唯一',
            'description' => '用户UserId，用户自定义，在AppId下单独唯一。小写英文、数字、下划线（_）和小数点（.）组成，最大长度32个字符。不同的用户需要使用不同的UserId。',
            'type' => 'string',
            'required' => true,
            'example' => 'as****hs',
          ),
        ),
        3 => 
        array (
          'name' => 'DeviceId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '终端设备ID',
            'description' => '终端设备ID，唯一代表一个用户终端设备，用户自定义。小写英文、数字、下划线（_）和短横线（-）组成，最大长度64个字符。不同终端设备需要使用不同的DeviceId，建议从终端设备获取并传入给服务端。',
            'type' => 'string',
            'required' => true,
            'example' => 'a494caec-***-695ef345db77',
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
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'FE22D613-D3C6-4A58-87CA-F21FC85AA08E',
              ),
              'Result' => 
              array (
                'description' => '获取Token的参数返回结果。',
                'type' => 'object',
                'properties' => 
                array (
                  'AccessToken' => 
                  array (
                    'title' => '用于长连接建连的token',
                    'description' => '用于长连接建连的Token。',
                    'type' => 'string',
                    'example' => 'oauth_cloud_key:***-b0YY5Gy6Q',
                  ),
                  'RefreshToken' => 
                  array (
                    'title' => '更新Token，若AccessToken过期，则可以使用RefreshToken再次获取新Token',
                    'description' => '更新Token，若AccessToken过期，则可以使用RefreshToken再次获取新Token。',
                    'type' => 'string',
                    'example' => 'oauth_cloud_key:****-Q62xggOTdgk3gw=',
                  ),
                  'AccessTokenExpiredTime' => 
                  array (
                    'title' => '登录token过期时间(毫秒)',
                    'description' => '登录Token过期时间，单位：毫秒。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '86400000',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"FE22D613-D3C6-4A58-87CA-F21FC85AA08E\\",\\n  \\"Result\\": {\\n    \\"AccessToken\\": \\"oauth_cloud_key:***-b0YY5Gy6Q\\",\\n    \\"RefreshToken\\": \\"oauth_cloud_key:****-Q62xggOTdgk3gw=\\",\\n    \\"AccessTokenExpiredTime\\": 86400000\\n  }\\n}","errorExample":""},{"type":"xml","example":"<GetAuthTokenResponse>\\n    <RequestId>FE22D613-D3C6-4A58-87CA-F21FC85AA08E</RequestId>\\n    <Result>\\n        <AccessToken>oauth_cloud_key:***-b0YY5Gy6Q</AccessToken>\\n        <RefreshToken>oauth_cloud_key:****-Q62xggOTdgk3gw=</RefreshToken>\\n        <AccessTokenExpiredTime>86400000</AccessTokenExpiredTime>\\n    </Result>\\n</GetAuthTokenResponse>","errorExample":""}]',
      'title' => '获取长连接建连Token',
      'description' => '该接口一般使用流程是客户端获取UserId、DeviceId信息，然后传入到服务端，服务端使用该接口获取鉴权Token，并返回给客户端。不同的用户需要使用不同的UserId，不同的终端设备需要使用不同的DeviceId。',
    ),
    'ListLiveRooms' => 
    array (
      'summary' => '调用ListLiveRooms分页查询直播信息。',
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
        'operationType' => 'list',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'AppId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '应用唯一标识，由6位小写字母、数字组成。',
            'description' => '用户的应用ID，在控制台创建应用时生成。包含小写字母、数字，长度为6个字符。',
            'type' => 'string',
            'required' => true,
            'example' => '7m***q',
          ),
        ),
        1 => 
        array (
          'name' => 'Status',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '直播状态，0-在播 1-下播，不传则返回所有直播。',
            'description' => '直播状态。取值：
* **0**：已创建，未开始直播。
* **1**：直播中。
* **2**：直播结束。
* **3或空**：所有状态。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '3',
          ),
        ),
        2 => 
        array (
          'name' => 'PageNumber',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '查询页码，从1开始，传空默认查询第1页。',
            'description' => '查询页码，从1开始，参数为空默认查询第1页。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        3 => 
        array (
          'name' => 'PageSize',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '每页显示个数，最大支持50，参数为空默认显示个数为10。',
            'description' => '每页显示个数，最大支持50，参数为空默认显示个数为10。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
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
            'title' => 'Schema of Response',
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'FE22D613-D3C6-4A58-87CA-F21FC85AA08E',
              ),
              'Result' => 
              array (
                'title' => '创建场景化直播返回的结果。',
                'description' => '分页查询直播信息返回的结果。',
                'type' => 'object',
                'properties' => 
                array (
                  'TotalCount' => 
                  array (
                    'title' => '直播总数。',
                    'description' => '直播总数。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '100',
                  ),
                  'PageTotal' => 
                  array (
                    'title' => '直播总页数。',
                    'description' => '直播总页数。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '10',
                  ),
                  'HasMore' => 
                  array (
                    'title' => '是否还有下一页。',
                    'description' => '是否还有下一页。',
                    'type' => 'boolean',
                    'example' => 'true',
                  ),
                  'LiveList' => 
                  array (
                    'title' => '直播列表信息。',
                    'description' => '直播列表信息。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'AppId' => 
                        array (
                          'title' => '应用ID。',
                          'description' => '用户的应用ID，在控制台创建应用时生成。包含小写字母、数字，长度为6个字符。',
                          'type' => 'string',
                          'example' => '7m***q',
                        ),
                        'LiveId' => 
                        array (
                          'title' => '直播ID。',
                          'description' => '直播的唯一标识ID。',
                          'type' => 'string',
                          'example' => 'b7f2****ebb3',
                        ),
                        'Status' => 
                        array (
                          'title' => '直播状态，0-在播 1-下播。',
                          'description' => '直播状态。取值：
* **0**：已创建，未开始直播。
* **1**：直播中。
* **2**：直播结束。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '1',
                        ),
                        'RoomId' => 
                        array (
                          'title' => '房间ID。',
                          'description' => '房间的唯一标识。',
                          'type' => 'string',
                          'example' => 'AE35-****-T95F',
                        ),
                        'ChatId' => 
                        array (
                          'title' => '聊天ID。',
                          'description' => '弹幕的唯一标识。',
                          'type' => 'string',
                          'example' => '09***f8',
                        ),
                        'Title' => 
                        array (
                          'title' => '标题。',
                          'description' => '直播标题。',
                          'type' => 'string',
                          'example' => 'Title001',
                        ),
                        'Notice' => 
                        array (
                          'title' => '公告。',
                          'description' => '直播公告。',
                          'type' => 'string',
                          'example' => 'Notice001',
                        ),
                        'CoverUrl' => 
                        array (
                          'title' => '封面。',
                          'description' => '直播封面。',
                          'type' => 'string',
                          'example' => 'http://***.png',
                        ),
                        'AnchorId' => 
                        array (
                          'title' => '主播ID。',
                          'description' => '主播ID。',
                          'type' => 'string',
                          'example' => 'as****hs',
                        ),
                        'Uv' => 
                        array (
                          'title' => '访问用户数。',
                          'description' => '访问用户数，同个访客多次访问直播间仅计算一个UV。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '100',
                        ),
                        'Extension' => 
                        array (
                          'title' => '直播拓展字段。',
                          'description' => '直播拓展字段。',
                          'type' => 'object',
                          'additionalProperties' => 
                          array (
                            'type' => 'string',
                            'example' => 'test001',
                            'description' => '直播拓展信息。',
                          ),
                        ),
                        'AnchorNick' => 
                        array (
                          'title' => '主播昵称。',
                          'description' => '主播昵称。',
                          'type' => 'string',
                          'example' => 'User001',
                        ),
                        'Pv' => 
                        array (
                          'title' => '访问用户人次。',
                          'description' => '访问用户人次，访客对同一直播间的多次访问，PV累加。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '200',
                        ),
                        'OnlineCount' => 
                        array (
                          'title' => '在线用户数。',
                          'description' => '在线用户数。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '50',
                        ),
                        'CreateTime' => 
                        array (
                          'title' => '直播的创建时间。单位为ms。',
                          'description' => '直播的创建时间。单位为ms。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1624259500000',
                        ),
                        'StartTime' => 
                        array (
                          'title' => '直播的开始时间。单位为ms。',
                          'description' => '直播的开始时间。单位为ms。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1624259600000',
                        ),
                        'EndTime' => 
                        array (
                          'title' => '直播的结束时间。单位为ms。',
                          'description' => '直播的结束时间。单位为ms。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1624259800000',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"FE22D613-D3C6-4A58-87CA-F21FC85AA08E\\",\\n  \\"Result\\": {\\n    \\"TotalCount\\": 100,\\n    \\"PageTotal\\": 10,\\n    \\"HasMore\\": true,\\n    \\"LiveList\\": [\\n      {\\n        \\"AppId\\": \\"7m***q\\",\\n        \\"LiveId\\": \\"b7f2****ebb3\\",\\n        \\"Status\\": 1,\\n        \\"RoomId\\": \\"AE35-****-T95F\\",\\n        \\"ChatId\\": \\"09***f8\\",\\n        \\"Title\\": \\"Title001\\",\\n        \\"Notice\\": \\"Notice001\\",\\n        \\"CoverUrl\\": \\"http://***.png\\",\\n        \\"AnchorId\\": \\"as****hs\\",\\n        \\"Uv\\": 100,\\n        \\"Extension\\": {\\n          \\"key\\": \\"test001\\"\\n        },\\n        \\"AnchorNick\\": \\"User001\\",\\n        \\"Pv\\": 200,\\n        \\"OnlineCount\\": 50,\\n        \\"CreateTime\\": 1624259500000,\\n        \\"StartTime\\": 1624259600000,\\n        \\"EndTime\\": 1624259800000\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<ListLiveRoomsResponse>\\n    <RequestId>FE22D613-D3C6-4A58-87CA-F21FC85AA08E</RequestId>\\n    <Result>\\n        <TotalCount>100</TotalCount>\\n        <PageTotal>10</PageTotal>\\n        <HasMore>true</HasMore>\\n        <LiveList>\\n            <AppId>7m***q</AppId>\\n            <LiveId>b7f2****ebb3</LiveId>\\n            <Status>1</Status>\\n            <RoomId>AE35-****-T95F</RoomId>\\n            <ChatId>09***f8</ChatId>\\n            <Title>Title001</Title>\\n            <Notice>Notice001</Notice>\\n            <CoverUrl>http://***.png</CoverUrl>\\n            <AnchorId>as****hs</AnchorId>\\n            <Uv>100</Uv>\\n            <Extension>\\n                <key>test001</key>\\n            </Extension>\\n            <AnchorNick>User001</AnchorNick>\\n            <Pv>200</Pv>\\n            <OnlineCount>50</OnlineCount>\\n        </LiveList>\\n    </Result>\\n</ListLiveRoomsResponse>","errorExample":""}]',
      'title' => '批量查询直播信息',
    ),
    'ListLiveRoomsById' => 
    array (
      'summary' => '调用ListLiveRoomsById根据传入的直播ID批量查询指定的直播信息。',
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
        'operationType' => 'list',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'AppId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '应用唯一标识，由6位小写字母、数字组成。',
            'description' => '用户的应用ID，在控制台创建应用时生成。包含小写字母、数字，长度为6个字符。',
            'type' => 'string',
            'required' => true,
            'example' => '7m***q',
          ),
        ),
        1 => 
        array (
          'name' => 'LiveIdList',
          'in' => 'formData',
          'style' => 'json',
          'schema' => 
          array (
            'title' => '直播ID列表。',
            'description' => '直播ID列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '直播ID。数量最大为20。',
              'type' => 'string',
              'required' => false,
              'example' => '["b7f2****ebb3"]',
            ),
            'required' => true,
            'example' => '0',
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
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'FE22D613-D3C6-4A58-87CA-F21FC85AA08E',
              ),
              'Result' => 
              array (
                'title' => '创建场景化直播返回的结果。',
                'description' => '批量查询直播信息返回的结果。',
                'type' => 'object',
                'properties' => 
                array (
                  'LiveList' => 
                  array (
                    'title' => '直播列表信息。',
                    'description' => '直播列表信息。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'AppId' => 
                        array (
                          'title' => '应用ID。',
                          'description' => '用户的应用ID，在控制台创建应用时生成。包含小写字母、数字，长度为6个字符。',
                          'type' => 'string',
                          'example' => '7m***q',
                        ),
                        'LiveId' => 
                        array (
                          'title' => '直播ID。',
                          'description' => '直播ID。',
                          'type' => 'string',
                          'example' => 'b7f2****ebb3',
                        ),
                        'Status' => 
                        array (
                          'title' => '直播状态，0-在播 1-下播。',
                          'description' => '直播状态。取值：
* **0**：已创建，未开始直播。
* **1**：直播中。
* **2**：直播结束。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '1',
                        ),
                        'RoomId' => 
                        array (
                          'title' => '房间ID。',
                          'description' => '房间ID。',
                          'type' => 'string',
                          'example' => 'AE35-****-T95F',
                        ),
                        'ChatId' => 
                        array (
                          'title' => '聊天ID。',
                          'description' => '弹幕ID。',
                          'type' => 'string',
                          'example' => '09***f8',
                        ),
                        'Title' => 
                        array (
                          'title' => '标题。',
                          'description' => '直播标题。',
                          'type' => 'string',
                          'example' => 'Title001',
                        ),
                        'Notice' => 
                        array (
                          'title' => '公告。',
                          'description' => '直播公告。',
                          'type' => 'string',
                          'example' => 'Notice001',
                        ),
                        'CoverUrl' => 
                        array (
                          'title' => '封面。',
                          'description' => '直播封面。',
                          'type' => 'string',
                          'example' => 'http://***.png',
                        ),
                        'AnchorId' => 
                        array (
                          'title' => '主播ID。',
                          'description' => '主播ID。',
                          'type' => 'string',
                          'example' => 'as****hs',
                        ),
                        'Uv' => 
                        array (
                          'title' => '访问用户数。',
                          'description' => '访问用户数，同个访客多次访问直播间仅计算一个UV。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '100',
                        ),
                        'Extension' => 
                        array (
                          'title' => '直播拓展字段。',
                          'description' => '直播拓展字段。',
                          'type' => 'object',
                          'additionalProperties' => 
                          array (
                            'type' => 'string',
                            'example' => 'test001',
                            'description' => '直播拓展信息。',
                          ),
                        ),
                        'AnchorNick' => 
                        array (
                          'title' => '主播昵称。',
                          'description' => '主播昵称。',
                          'type' => 'string',
                          'example' => 'User001',
                        ),
                        'Pv' => 
                        array (
                          'title' => '访问用户人次。',
                          'description' => '访问用户人次，访客对同一直播间的多次访问，PV累加。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '200',
                        ),
                        'OnlineCount' => 
                        array (
                          'title' => '在线用户数。',
                          'description' => '在线用户数。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '50',
                        ),
                        'CreateTime' => 
                        array (
                          'title' => '直播的创建时间。单位为ms。',
                          'description' => '直播的创建时间。单位为ms。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1624259500000',
                        ),
                        'StartTime' => 
                        array (
                          'title' => '直播的开始时间。单位为ms。',
                          'description' => '直播的开始时间。单位为ms。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1624259500000',
                        ),
                        'EndTime' => 
                        array (
                          'title' => '直播的结束时间。单位为ms。',
                          'description' => '直播的结束时间。单位为ms。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1624259500000',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"FE22D613-D3C6-4A58-87CA-F21FC85AA08E\\",\\n  \\"Result\\": {\\n    \\"LiveList\\": [\\n      {\\n        \\"AppId\\": \\"7m***q\\",\\n        \\"LiveId\\": \\"b7f2****ebb3\\",\\n        \\"Status\\": 1,\\n        \\"RoomId\\": \\"AE35-****-T95F\\",\\n        \\"ChatId\\": \\"09***f8\\",\\n        \\"Title\\": \\"Title001\\",\\n        \\"Notice\\": \\"Notice001\\",\\n        \\"CoverUrl\\": \\"http://***.png\\",\\n        \\"AnchorId\\": \\"as****hs\\",\\n        \\"Uv\\": 100,\\n        \\"Extension\\": {\\n          \\"key\\": \\"test001\\"\\n        },\\n        \\"AnchorNick\\": \\"User001\\",\\n        \\"Pv\\": 200,\\n        \\"OnlineCount\\": 50,\\n        \\"CreateTime\\": 1624259500000,\\n        \\"StartTime\\": 1624259500000,\\n        \\"EndTime\\": 1624259500000\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<ListLiveRoomsByIdResponse>\\n    <RequestId>FE22D613-D3C6-4A58-87CA-F21FC85AA08E</RequestId>\\n    <Result>\\n        <LiveList>\\n            <AppId>7m***q</AppId>\\n            <LiveId>b7f2****ebb3</LiveId>\\n            <Status>1</Status>\\n            <RoomId>AE35-****-T95F</RoomId>\\n            <ChatId>09***f8</ChatId>\\n            <Title>RoomTitle001</Title>\\n            <Notice>RoomNotice001</Notice>\\n            <CoverUrl>http://***.png</CoverUrl>\\n            <AnchorId>as****hs</AnchorId>\\n            <Uv>100</Uv>\\n            <Extension>\\n                <key>test001</key>\\n            </Extension>\\n            <AnchorNick>User001</AnchorNick>\\n            <Pv>200</Pv>\\n            <OnlineCount>50</OnlineCount>\\n        </LiveList>\\n    </Result>\\n</ListLiveRoomsByIdResponse>","errorExample":""}]',
      'title' => '根据直播ID批量查询直播信息',
      'description' => '> 调用本接口最多可查询20条直播信息。',
    ),
    'GetLiveRoomStatistics' => 
    array (
      'summary' => '调用GetLiveRoomStatistics查询与指定直播相关的数据统计信息。后续计划迁入新方案，不推荐使用。',
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
          'name' => 'AppId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '应用唯一标识，由6位小写字母、数字组成。',
            'description' => '用户的应用ID，在控制台创建应用时生成。包含小写字母、数字，长度为6个字符。',
            'type' => 'string',
            'required' => true,
            'example' => '7m***q',
          ),
        ),
        1 => 
        array (
          'name' => 'LiveId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '直播ID。',
            'description' => '直播资源的唯一标识ID。
',
            'type' => 'string',
            'required' => true,
            'example' => 'b7f2****ebb3',
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
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'FE22D613-D3C6-4A58-87CA-F21FC85AA08E',
              ),
              'Result' => 
              array (
                'title' => '创建场景化直播返回的结果。',
                'description' => '查询直播统计数据返回的结果。',
                'type' => 'object',
                'properties' => 
                array (
                  'LiveId' => 
                  array (
                    'title' => '直播ID。',
                    'description' => '直播资源的唯一标识ID。
',
                    'type' => 'string',
                    'example' => 'b7f2****ebb3',
                  ),
                  'Status' => 
                  array (
                    'title' => '直播状态，0-已创建 1-直播中 2-已关闭。',
                    'description' => '直播状态。取值：
* **0**：已创建，未开始直播。
* **1**：直播中。
* **2**：直播结束。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                  'Uv' => 
                  array (
                    'title' => '访问用户数。',
                    'description' => '访问用户数，同个访客多次访问直播间仅计算一个UV。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '100',
                  ),
                  'Pv' => 
                  array (
                    'title' => '访问用户人次。',
                    'description' => '访问用户人次，访客对同一直播间的多次访问，PV累加。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '200',
                  ),
                  'MessageCount' => 
                  array (
                    'title' => '互动消息数。',
                    'description' => '互动消息数。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '500',
                  ),
                  'StartTime' => 
                  array (
                    'title' => '直播开始时间，单位：毫秒。',
                    'description' => '直播开始时间，单位：毫秒。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1624259500000',
                  ),
                  'EndTime' => 
                  array (
                    'title' => '直播结束时间，单位：毫秒。',
                    'description' => '直播结束时间，单位：毫秒。直播结束后生成。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1624259500000',
                  ),
                  'WatchLiveTime' => 
                  array (
                    'title' => '总观看时长，单位：毫秒。',
                    'description' => '所有用户总观看时长，单位：毫秒。在直播中可获取该信息，数据延迟时间为几分钟；在2022.6.24 00:00:00之前创建的直播，需要在直播结束后生成。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '10000000',
                  ),
                  'LikeCount' => 
                  array (
                    'title' => '点赞数。',
                    'description' => '点赞数。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '100',
                  ),
                  'OnlineCount' => 
                  array (
                    'title' => '在线用户数。',
                    'description' => '在线用户数。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '50',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"FE22D613-D3C6-4A58-87CA-F21FC85AA08E\\",\\n  \\"Result\\": {\\n    \\"LiveId\\": \\"b7f2****ebb3\\",\\n    \\"Status\\": 1,\\n    \\"Uv\\": 100,\\n    \\"Pv\\": 200,\\n    \\"MessageCount\\": 500,\\n    \\"StartTime\\": 1624259500000,\\n    \\"EndTime\\": 1624259500000,\\n    \\"WatchLiveTime\\": 10000000,\\n    \\"LikeCount\\": 100,\\n    \\"OnlineCount\\": 50\\n  }\\n}","errorExample":""},{"type":"xml","example":"<GetLiveRoomStatisticsResponse>\\n    <RequestId>FE22D613-D3C6-4A58-87CA-F21FC85AA08E</RequestId>\\n    <Result>\\n        <LiveId>b7f2****ebb3</LiveId>\\n        <Status>1</Status>\\n        <Uv>100</Uv>\\n        <Pv>200</Pv>\\n        <MessageCount>500</MessageCount>\\n        <StartTime>1624259500000</StartTime>\\n        <EndTime>1624259500000</EndTime>\\n        <WatchLiveTime>10000000</WatchLiveTime>\\n        <LikeCount>100</LikeCount>\\n        <OnlineCount>50</OnlineCount>\\n    </Result>\\n</GetLiveRoomStatisticsResponse>","errorExample":""}]',
      'title' => '查询直播统计数据',
    ),
    'GetLiveRoomUserStatistics' => 
    array (
      'summary' => '调用GetLiveRoomUserStatistics分页查询与指定直播相关的用户观看数据。后续计划迁入新方案，不推荐使用。',
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
          'name' => 'AppId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '应用唯一标识，由6位小写字母、数字组成。',
            'description' => '用户的应用ID，在控制台创建应用时生成。包含小写字母、数字，长度为6个字符。',
            'type' => 'string',
            'required' => true,
            'example' => '7m***q',
          ),
        ),
        1 => 
        array (
          'name' => 'LiveId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '直播ID。',
            'description' => '直播资源的唯一标识ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'b7f2****ebb3',
          ),
        ),
        2 => 
        array (
          'name' => 'PageNumber',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '查询页码，从1开始，传空默认查询第1页。',
            'description' => '查询页码，从1开始，参数为空默认查询第1页。',
            'type' => 'string',
            'required' => false,
            'example' => '1',
          ),
        ),
        3 => 
        array (
          'name' => 'PageSize',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '每页显示个数，最大支持50，参数为空默认显示个数为10。',
            'description' => '每页显示个数，最大支持50，参数为空默认显示个数为10。',
            'type' => 'string',
            'required' => false,
            'example' => '25',
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
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'FE22D613-D3C6-4A58-87CA-F21FC85AA08E',
              ),
              'Result' => 
              array (
                'title' => '创建场景化直播返回的结果。',
                'description' => '分页查询直播用户数据统计的结果。',
                'type' => 'object',
                'properties' => 
                array (
                  'LiveId' => 
                  array (
                    'title' => '直播ID。',
                    'description' => '直播资源的唯一标识ID。',
                    'type' => 'string',
                    'example' => 'b7f2****ebb3',
                  ),
                  'TotalCount' => 
                  array (
                    'title' => '用户总数',
                    'description' => '观看用户总数。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '100',
                  ),
                  'PageTotal' => 
                  array (
                    'title' => '用户总页数。',
                    'description' => '观看用户总页数。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '10',
                  ),
                  'HasMore' => 
                  array (
                    'title' => '是否还有下一页。',
                    'description' => '是否还有下一页。',
                    'type' => 'boolean',
                    'example' => 'true',
                  ),
                  'UserStatisticsList' => 
                  array (
                    'title' => '用户观看数据列表。',
                    'description' => '用户观看数据列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'UserId' => 
                        array (
                          'title' => '用户ID。',
                          'description' => '用户ID。',
                          'type' => 'string',
                          'example' => 'User001',
                        ),
                        'WatchLiveTime' => 
                        array (
                          'title' => '观看时长，单位：毫秒。',
                          'description' => '观看时长，单位：毫秒。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '100000',
                        ),
                        'CommentCount' => 
                        array (
                          'description' => '该用户发送的弹幕消息数量。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '100',
                        ),
                        'LikeCount' => 
                        array (
                          'description' => '该用户的点赞数量。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '100',
                        ),
                      ),
                    ),
                    'example' => '10000000',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"FE22D613-D3C6-4A58-87CA-F21FC85AA08E\\",\\n  \\"Result\\": {\\n    \\"LiveId\\": \\"b7f2****ebb3\\",\\n    \\"TotalCount\\": 100,\\n    \\"PageTotal\\": 10,\\n    \\"HasMore\\": true,\\n    \\"UserStatisticsList\\": [\\n      {\\n        \\"UserId\\": \\"User001\\",\\n        \\"WatchLiveTime\\": 100000,\\n        \\"CommentCount\\": 100,\\n        \\"LikeCount\\": 100\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<GetLiveRoomUserStatisticsResponse>\\n    <RequestId>FE22D613-D3C6-4A58-87CA-F21FC85AA08E</RequestId>\\n    <Result>\\n        <LiveId>b7f2****ebb3</LiveId>\\n        <TotalCount>100</TotalCount>\\n        <PageTotal>10</PageTotal>\\n        <HasMore>true</HasMore>\\n        <UserStatisticsList>\\n            <UserId>User001</UserId>\\n            <WatchLiveTime>100000</WatchLiveTime>\\n            <CommentCount>100</CommentCount>\\n            <LikeCount>100</LikeCount>\\n        </UserStatisticsList>\\n    </Result>\\n</GetLiveRoomUserStatisticsResponse>","errorExample":""}]',
      'title' => '分页查询直播用户数据统计',
      'description' => '观众的直播观看时长是用户观看时长的累加（包括多次观看，多设备观看），如果最终计算结果大于直播总时长，会按照直播总时长记录。',
    ),
    'GetLiveRecord' => 
    array (
      'summary' => '调用GetLiveRecord获取直播录制信息。可用于直播结束后获取回放地址，如果直播未结束，结果为空。',
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
          'name' => 'AppId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '应用唯一标识，由6位小写字母、数字组成。',
            'description' => '应用唯一标识，由6位小写字母、数字组成，由控制台创建后获取。',
            'type' => 'string',
            'required' => true,
            'example' => 'lq****cu',
          ),
        ),
        1 => 
        array (
          'name' => 'LiveId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '直播唯一标识，由调用CreateLiveRoom返回。',
            'description' => '直播唯一标识，由调用CreateLiveRoom返回。',
            'type' => 'string',
            'required' => true,
            'example' => 'AE35****T95F',
          ),
        ),
        2 => 
        array (
          'name' => 'UserId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '操作人用户ID。',
            'description' => '操作人用户ID。',
            'type' => 'string',
            'required' => false,
            'example' => '34**29',
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
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => 'Id of the request',
                'type' => 'string',
                'example' => 'FE22D613-D3C6-4A58-87CA-F21FC85AA08F',
              ),
              'Result' => 
              array (
                'title' => 'API请求的返回结果结构体。',
                'description' => 'API请求的返回结果结构体。',
                'type' => 'object',
                'properties' => 
                array (
                  'PlaybackUrlMap' => 
                  array (
                    'description' => '回放地址集合。key值代表回放视频类型，取值m3u8, mp4, flv，当前仅提供m3u8类型。',
                    'type' => 'object',
                    'additionalProperties' => 
                    array (
                      'type' => 'array',
                      'items' => 
                      array (
                        'type' => 'string',
                        'example' => 'http://demo.aliyundoc.com/live/b7f29c02-****-40fd-****-e8d06a8aebb3.m3u8?auth_key=1627522726-0-0-******e620b363d4cf8a8e3',
                        'description' => '回放URL。',
                      ),
                      'description' => '地址列表。',
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"FE22D613-D3C6-4A58-87CA-F21FC85AA08F\\",\\n  \\"Result\\": {\\n    \\"PlaybackUrlMap\\": {\\n      \\"key\\": [\\n        \\"http://demo.aliyundoc.com/live/b7f29c02-****-40fd-****-e8d06a8aebb3.m3u8?auth_key=1627522726-0-0-******e620b363d4cf8a8e3\\"\\n      ]\\n    }\\n  }\\n}","errorExample":""},{"type":"xml","example":"<GetLiveRecordResponse>\\n    <RequestId>FE22D613-D3C6-4A58-87CA-F21FC85AA08E</RequestId>\\n    <Result>\\n        <PlaybackUrlMap>\\n            <m3u8>http://***.aliyundoc.nm/***8fc5-***f8****.webm?****77650&amp;***xzSQU***</m3u8>\\n        </PlaybackUrlMap>\\n    </Result>\\n</GetLiveRecordResponse>","errorExample":""}]',
      'title' => '获取直播录制信息',
    ),
    'CreateLiveRecordSliceFile' => 
    array (
      'summary' => '调用CreateLiveRecordSliceFile创建直播录制片段文件。',
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
          'name' => 'AppId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '应用唯一标识，由6位小写字母、数字组成。',
            'description' => '应用唯一标识，由6位小写字母、数字组成。',
            'type' => 'string',
            'required' => true,
            'example' => 'lq****cu',
          ),
        ),
        1 => 
        array (
          'name' => 'LiveId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '直播ID。',
            'description' => '直播ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'AE35****T95F',
          ),
        ),
        2 => 
        array (
          'name' => 'StartTime',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '片段开始时间，时间戳，单位为毫秒。',
            'description' => '片段开始时间，时间戳，单位为毫秒。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'example' => '1577836800000',
          ),
        ),
        3 => 
        array (
          'name' => 'EndTime',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '片段结束时间，时间戳，单位为毫秒。',
            'description' => '片段结束时间，时间戳，单位为毫秒。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'example' => '1577836800000',
          ),
        ),
        4 => 
        array (
          'name' => 'FileName',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '自定义文件名称。',
            'description' => '自定义文件名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'sliceFile',
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
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'ER52****O9CA',
              ),
              'Result' => 
              array (
                'title' => '创建场景化直播返回的结果。',
                'description' => '创建场景化直播返回的结果。',
                'type' => 'object',
                'properties' => 
                array (
                  'SliceRecordUrl' => 
                  array (
                    'title' => '片段录制文件的地址。',
                    'description' => '片段录制文件的地址。',
                    'type' => 'string',
                    'example' => 'http://demo-app-playback.com/**.m3u8?auth_key=1627522726-0-0-******e620b363d4cf8a8e3',
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
            'errorCode' => 'Invalid.Live.RecordContentExceed',
            'errorMessage' => 'The record content between StartTime and EndTime is exceeded, please narrow down the range.',
          ),
          1 => 
          array (
            'errorCode' => 'Invalid.Live.RecordContentTooShort',
            'errorMessage' => 'The record time between StartTime and EndTime is too short, please enlarger the range.',
          ),
          2 => 
          array (
            'errorCode' => 'Invalid.Live.RecordEndTimeMismatch',
            'errorMessage' => 'Specified end time does not math the specified start time.',
          ),
          3 => 
          array (
            'errorCode' => 'Invalid.Live.RecordInvalidBucket',
            'errorMessage' => 'The oss bucket is invalid.',
          ),
          4 => 
          array (
            'errorCode' => 'Invalid.Live.RecordLiveNotFound',
            'errorMessage' => 'The live is not found.',
          ),
          5 => 
          array (
            'errorCode' => 'Invalid.Live.RecordLiveStreamNotFound',
            'errorMessage' => 'The live stream info is not found.',
          ),
          6 => 
          array (
            'errorCode' => 'Invalid.Live.RecordNoContent',
            'errorMessage' => 'The record has no content, please check the live record toggle.',
          ),
          7 => 
          array (
            'errorCode' => 'Invalid.Live.RecordPlaybackDomainNotFound',
            'errorMessage' => 'The record playback domain is not found, please open the liveRecordToggle in imp console and config playback domain.',
          ),
          8 => 
          array (
            'errorCode' => 'Invalid.Live.WrongRecordOssConfig',
            'errorMessage' => 'Specified oss config is wrong.',
          ),
          9 => 
          array (
            'errorCode' => 'Invalid.Scene.LiveNotExist',
            'errorMessage' => 'The live record does not exist. Please check again.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"ER52****O9CA\\",\\n  \\"Result\\": {\\n    \\"SliceRecordUrl\\": \\"http://demo-app-playback.com/**.m3u8?auth_key=1627522726-0-0-******e620b363d4cf8a8e3\\"\\n  }\\n}","type":"json"}]',
      'title' => '创建直播录制片段文件',
    ),
    'ListLiveFiles' => 
    array (
      'summary' => '调用ListLiveFiles获取直播录制文件列表信息。',
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
          'name' => 'AppId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '应用ID。',
            'description' => '应用ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'lq**xy',
          ),
        ),
        1 => 
        array (
          'name' => 'LiveId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '直播ID。',
            'description' => '直播ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'acbder-**-34uh',
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
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => 'Id of the request',
                'type' => 'string',
                'example' => 'FE22D613-D3C6-4A58-87CA-F21FC85AA08E',
              ),
              'Result' => 
              array (
                'title' => '返回结果。',
                'description' => '返回结果。',
                'type' => 'object',
                'properties' => 
                array (
                  'FileList' => 
                  array (
                    'title' => '文件列表。',
                    'description' => '文件列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'FileName' => 
                        array (
                          'title' => '文件名称。',
                          'description' => '文件名称。',
                          'type' => 'string',
                          'example' => '12345/**/1.ts',
                        ),
                        'Url' => 
                        array (
                          'title' => '文件下载地址。',
                          'description' => '文件下载地址，有效期为7天。',
                          'type' => 'string',
                          'example' => 'https://aliyundoc.com/live/b7f29c02-****-40fd-****-e8d06a8aebb3/1.ts',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"FE22D613-D3C6-4A58-87CA-F21FC85AA08E\\",\\n  \\"Result\\": {\\n    \\"FileList\\": [\\n      {\\n        \\"FileName\\": \\"12345/**/1.ts\\",\\n        \\"Url\\": \\"https://aliyundoc.com/live/b7f29c02-****-40fd-****-e8d06a8aebb3/1.ts\\"\\n      }\\n    ]\\n  }\\n}","type":"json"}]',
      'title' => '获取直播录制文件列表',
      'description' => '该接口适用于2022年2月18号之后开通低代码音视频工厂的客户，且适用于开启了直播录制功能，有录制文件生成的场景。',
    ),
    'DeleteLiveFilesById' => 
    array (
      'summary' => '调用DeleteLiveFilesById接口删除该直播的录制文件。',
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
          'name' => 'AppId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '应用ID。',
            'description' => '应用ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'lq**xy',
          ),
        ),
        1 => 
        array (
          'name' => 'LiveId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '直播ID。',
            'description' => '直播ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'acbder-**-34uh',
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
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => 'Id of the request',
                'type' => 'string',
                'example' => 'FE22D613-D3C6-4A58-87CA-F21FC85AA08E',
              ),
              'Result' => 
              array (
                'title' => '返回结果。',
                'description' => '返回结果。',
                'type' => 'boolean',
                'example' => 'true',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"FE22D613-D3C6-4A58-87CA-F21FC85AA08E\\",\\n  \\"Result\\": true\\n}","type":"json"}]',
      'title' => '根据直播ID删除该直播的录制文件',
      'description' => '该接口适用于2022年2月18号之后开通低代码音视频工厂的客户，且适用于开启了直播录制功能，有录制文件生成的场景。',
    ),
    'CreateLiveRoom' => 
    array (
      'summary' => '调用CreateLiveRoom创建状态为未开播的新直播。',
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
        'operationType' => 'create',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'AppId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '应用唯一标识，由6位小写字母、数字组成。',
            'description' => '用户的应用ID，在控制台创建应用时生成。包含小写字母、数字，长度为6个字符。',
            'type' => 'string',
            'required' => true,
            'example' => '7m***q',
          ),
        ),
        1 => 
        array (
          'name' => 'Title',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '标题，支持中英文，最大长度32位。',
            'description' => '直播标题，支持中英文，最大长度32位。',
            'type' => 'string',
            'required' => true,
            'example' => 'Title001',
          ),
        ),
        2 => 
        array (
          'name' => 'Notice',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '公告，支持中英文，最大长度256位。',
            'description' => '直播公告，支持中英文，最大长度256位。',
            'type' => 'string',
            'required' => false,
            'example' => 'Notice001',
          ),
        ),
        3 => 
        array (
          'name' => 'CoverUrl',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '封面，支持图片地址链接格式',
            'description' => '直播封面，支持图片地址链接格式，最大长度256位。',
            'type' => 'string',
            'required' => false,
            'example' => 'http://***.png',
          ),
        ),
        4 => 
        array (
          'name' => 'Extension',
          'in' => 'formData',
          'style' => 'json',
          'schema' => 
          array (
            'title' => '拓展字段，按需传递，需要额外记录的房间属性。最大支持4096个字节。',
            'description' => '拓展字段，按需传递，需要额外记录的直播属性。最大长度4096位。',
            'type' => 'object',
            'required' => false,
            'additionalProperties' => 
            array (
              'type' => 'string',
              'required' => false,
              'example' => 'test001',
            ),
            'example' => 'AE35****T95F',
          ),
        ),
        5 => 
        array (
          'name' => 'AnchorId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '主播id，仅支持英文和数字，最大长度36位。',
            'description' => '主播ID，仅支持英文和数字，最大长度36位。',
            'type' => 'string',
            'required' => true,
            'example' => 'as****hs',
          ),
        ),
        6 => 
        array (
          'name' => 'AnchorNick',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '主播昵称。',
            'description' => '主播昵称，支持中英文，最大长度32位。',
            'type' => 'string',
            'required' => false,
            'example' => 'User001',
          ),
        ),
        7 => 
        array (
          'name' => 'UserId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '操作人ID。',
            'description' => '操作人ID，仅支持英文和数字，最大长度36位。',
            'type' => 'string',
            'required' => false,
            'example' => 'as****hs',
          ),
        ),
        8 => 
        array (
          'name' => 'EnableLinkMic',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '是否开启连麦。',
            'description' => '是否开启连麦功能，默认为false。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
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
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'FE22D613-D3C6-4A58-87CA-F21FC85AA08E',
              ),
              'Result' => 
              array (
                'title' => '创建场景化直播返回的结果。',
                'description' => '创建直播返回的结果。',
                'type' => 'object',
                'properties' => 
                array (
                  'AppId' => 
                  array (
                    'title' => '应用ID。',
                    'description' => '用户的应用ID，在控制台创建应用时生成。包含小写字母、数字，长度为6个字符。',
                    'type' => 'string',
                    'example' => '7m***q',
                  ),
                  'RoomId' => 
                  array (
                    'title' => '房间ID。',
                    'description' => '房间的唯一标识ID。用于进出房间等相关接口的使用。',
                    'type' => 'string',
                    'example' => 'AE35-****-T95F',
                  ),
                  'LiveId' => 
                  array (
                    'title' => '直播ID。',
                    'description' => '直播的唯一标识ID。',
                    'type' => 'string',
                    'example' => 'b7f2****ebb3',
                  ),
                  'ChatId' => 
                  array (
                    'title' => '聊天ID。',
                    'description' => '弹幕的唯一标识。用户发送消息等相关接口的使用。',
                    'type' => 'string',
                    'example' => '09***f8',
                  ),
                  'Title' => 
                  array (
                    'title' => '标题。',
                    'description' => '直播标题。',
                    'type' => 'string',
                    'example' => 'Title001',
                  ),
                  'Notice' => 
                  array (
                    'title' => '公告。',
                    'description' => '直播公告。',
                    'type' => 'string',
                    'example' => 'Notice001',
                  ),
                  'CoverUrl' => 
                  array (
                    'title' => '封面。',
                    'description' => '直播封面。',
                    'type' => 'string',
                    'example' => 'http://***.png',
                  ),
                  'AnchorId' => 
                  array (
                    'title' => '主播ID。',
                    'description' => '主播ID。',
                    'type' => 'string',
                    'example' => 'as****hs',
                  ),
                  'PlaybackUrl' => 
                  array (
                    'title' => '直播回放地址。',
                    'description' => '直播回放地址。直播开始时生成，直播结束后可以观看。',
                    'type' => 'string',
                    'example' => 'http://demo-app-playback.com/live/b7f29c02-****-40fd-****-e8d06a8aebb3.m3u8?auth_key=1627522726-0-0-******e620b363d4cf8a8e3',
                  ),
                  'PushUrl' => 
                  array (
                    'title' => '直播推流地址。',
                    'description' => '直播推流地址。',
                    'type' => 'string',
                    'example' => 'rtmp://demo-app-push.com/live/e620****a8e3?auth_key=e620****a8e3',
                  ),
                  'LiveUrl' => 
                  array (
                    'title' => '直播拉流地址。',
                    'description' => '直播播流地址。',
                    'type' => 'string',
                    'example' => 'http://demo-app-live.com/live/b7f29c02-****-40fd-****-e8d06a8aebb3.flv?auth_key=1627522726-0-0-******e620b363d4cf8a8e3',
                  ),
                  'PluginInstanceInfoList' => 
                  array (
                    'title' => '活跃插件列表。',
                    'description' => '活跃插件列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'PluginType' => 
                        array (
                          'title' => '插件唯一标识，取值：live-直播，wb-白板，chat-聊天，rtc。',
                          'description' => '插件唯一标识，取值：
- **live**：直播。
- **wb**：白板。
- **chat**：聊天。
- **rtc**：音视频通信。',
                          'type' => 'string',
                          'example' => 'live',
                        ),
                        'PluginId' => 
                        array (
                          'title' => '插件实例唯一标识。',
                          'description' => '插件实例唯一标识。',
                          'type' => 'string',
                          'example' => 'HASU-****-ASHD',
                        ),
                        'CreateTime' => 
                        array (
                          'title' => '插件实例创建时间戳，单位：毫秒。',
                          'description' => '插件实例创建时间戳，单位：毫秒。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1624589848000',
                        ),
                        'Extension' => 
                        array (
                          'title' => '插件拓展字段。',
                          'description' => '插件拓展字段。',
                          'type' => 'object',
                          'additionalProperties' => 
                          array (
                            'type' => 'string',
                            'example' => 'test001',
                            'description' => '插件拓展信息。',
                          ),
                        ),
                      ),
                    ),
                  ),
                  'Extension' => 
                  array (
                    'title' => '直播拓展字段。',
                    'description' => '直播拓展字段。',
                    'type' => 'object',
                    'additionalProperties' => 
                    array (
                      'type' => 'string',
                      'example' => 'test001',
                      'description' => '直播拓展信息。',
                    ),
                  ),
                  'AnchorNick' => 
                  array (
                    'title' => '主播昵称。',
                    'description' => '主播昵称。',
                    'type' => 'string',
                    'example' => 'User001',
                  ),
                  'HlsUrl' => 
                  array (
                    'title' => '原画HLS播放地址。',
                    'description' => '原画HLS播放地址。',
                    'type' => 'string',
                    'example' => 'http://demo-app-live.com/live/b7f29c02-****-40fd-****-e8d06a8aebb3.m3u8?auth_key=1627522726-0-0-******e620b363d4cf8a8e3',
                  ),
                  'ArtcInfo' => 
                  array (
                    'title' => 'RTS低延迟播流信息。',
                    'description' => 'RTS低延迟播流信息。',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'ArtcUrl' => 
                      array (
                        'title' => 'RTS原码流地址，推荐移动端使用。',
                        'description' => 'RTS原码流地址，推荐移动端使用。',
                        'type' => 'string',
                        'example' => 'artc://demo-app-live.com/live/b7f29c02-****-40fd-****-e8d06a8aebb3?auth_key=1627522726-0-0-******e620b363d4cf8a8e3',
                      ),
                      'ArtcH5Url' => 
                      array (
                        'title' => 'RTS转码流地址，推荐web端使用。',
                        'description' => 'RTS转码流地址，推荐Web端使用。',
                        'type' => 'string',
                        'example' => 'artc://demo-app-live.com/live/b7f29c02-****-40fd-****-e8d06a8aebb3_origin-RTS?auth_key=1627522726-0-0-******e620b363d4cf8a8e3',
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
            'errorCode' => 'Invalid.Live.ConfigNotFound',
            'errorMessage' => 'The live push domain and pull domain config not found.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"FE22D613-D3C6-4A58-87CA-F21FC85AA08E\\",\\n  \\"Result\\": {\\n    \\"AppId\\": \\"7m***q\\",\\n    \\"RoomId\\": \\"AE35-****-T95F\\",\\n    \\"LiveId\\": \\"b7f2****ebb3\\",\\n    \\"ChatId\\": \\"09***f8\\",\\n    \\"Title\\": \\"Title001\\",\\n    \\"Notice\\": \\"Notice001\\",\\n    \\"CoverUrl\\": \\"http://***.png\\",\\n    \\"AnchorId\\": \\"as****hs\\",\\n    \\"PlaybackUrl\\": \\"http://demo-app-playback.com/live/b7f29c02-****-40fd-****-e8d06a8aebb3.m3u8?auth_key=1627522726-0-0-******e620b363d4cf8a8e3\\",\\n    \\"PushUrl\\": \\"rtmp://demo-app-push.com/live/e620****a8e3?auth_key=e620****a8e3\\",\\n    \\"LiveUrl\\": \\"http://demo-app-live.com/live/b7f29c02-****-40fd-****-e8d06a8aebb3.flv?auth_key=1627522726-0-0-******e620b363d4cf8a8e3\\",\\n    \\"PluginInstanceInfoList\\": [\\n      {\\n        \\"PluginType\\": \\"live\\",\\n        \\"PluginId\\": \\"HASU-****-ASHD\\",\\n        \\"CreateTime\\": 1624589848000,\\n        \\"Extension\\": {\\n          \\"key\\": \\"test001\\"\\n        }\\n      }\\n    ],\\n    \\"Extension\\": {\\n      \\"key\\": \\"test001\\"\\n    },\\n    \\"AnchorNick\\": \\"User001\\",\\n    \\"HlsUrl\\": \\"http://demo-app-live.com/live/b7f29c02-****-40fd-****-e8d06a8aebb3.m3u8?auth_key=1627522726-0-0-******e620b363d4cf8a8e3\\",\\n    \\"ArtcInfo\\": {\\n      \\"ArtcUrl\\": \\"artc://demo-app-live.com/live/b7f29c02-****-40fd-****-e8d06a8aebb3?auth_key=1627522726-0-0-******e620b363d4cf8a8e3\\",\\n      \\"ArtcH5Url\\": \\"artc://demo-app-live.com/live/b7f29c02-****-40fd-****-e8d06a8aebb3_origin-RTS?auth_key=1627522726-0-0-******e620b363d4cf8a8e3\\"\\n    }\\n  }\\n}","errorExample":""},{"type":"xml","example":"<CreateLiveRoomResponse>\\n    <RequestId>FE22D613-D3C6-4A58-87CA-F21FC85AA08E</RequestId>\\n    <Result>\\n        <AppId>7m***q</AppId>\\n        <RoomId>AE35-****-T95F</RoomId>\\n        <LiveId>b7f2****ebb3</LiveId>\\n        <ChatId>09***f8</ChatId>\\n        <Title>Title001</Title>\\n        <Notice>Notice001</Notice>\\n        <CoverUrl>http://***.png</CoverUrl>\\n        <AnchorId>as****hs</AnchorId>\\n        <PlaybackUrl>http://demo-app-playback.com/live/b7f29c02-****-40fd-****-e8d06a8aebb3.m3u8?auth_key=1627522726-0-0-******e620b363d4cf8a8e3</PlaybackUrl>\\n        <PushUrl>rtmp://demo-app-push.com/live/e620****a8e3?auth_key=e620****a8e3</PushUrl>\\n        <LiveUrl>http://demo-app-live.com/live/b7f29c02-****-40fd-****-e8d06a8aebb3.flv?auth_key=1627522726-0-0-******e620b363d4cf8a8e3</LiveUrl>\\n        <PluginInstanceInfoList>\\n            <PluginType>live</PluginType>\\n            <PluginId>HASU-****-ASHD</PluginId>\\n            <CreateTime>1624589848000</CreateTime>\\n            <Extension>\\n                <key>test001</key>\\n            </Extension>\\n        </PluginInstanceInfoList>\\n        <Extension>\\n            <key>test001</key>\\n        </Extension>\\n        <AnchorNick>User001</AnchorNick>\\n        <HlsUrl>http://demo-app-live.com/live/b7f29c02-****-40fd-****-e8d06a8aebb3.m3u8?auth_key=1627522726-0-0-******e620b363d4cf8a8e3</HlsUrl>\\n        <ArtcInfo>\\n            <ArtcUrl>artc://demo-app-live.com/live/b7f29c02-****-40fd-****-e8d06a8aebb3?auth_key=1627522726-0-0-******e620b363d4cf8a8e3</ArtcUrl>\\n            <ArtcH5Url>artc://demo-app-live.com/live/b7f29c02-****-40fd-****-e8d06a8aebb3_origin-RTS?auth_key=1627522726-0-0-******e620b363d4cf8a8e3</ArtcH5Url>\\n        </ArtcInfo>\\n    </Result>\\n</CreateLiveRoomResponse>","errorExample":""}]',
      'title' => '创建直播',
      'description' => '低代码音频工厂问题咨询、支持服务，可搜索钉钉群号10570030108入群咨询专家。',
    ),
    'DeleteLiveRoom' => 
    array (
      'summary' => '调用DeleteLiveRoom删除直播记录。',
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
        'operationType' => 'delete',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'AppId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '应用唯一标识，由6位小写字母、数字组成。',
            'description' => '用户的应用ID，在控制台创建应用时生成。包含小写字母、数字，长度为6个字符。',
            'type' => 'string',
            'required' => true,
            'example' => '7m***q',
          ),
        ),
        1 => 
        array (
          'name' => 'LiveId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '直播ID。',
            'description' => '直播的唯一标识ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'b7f2****ebb3',
          ),
        ),
        2 => 
        array (
          'name' => 'UserId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '操作人ID。',
            'description' => '操作人ID，仅支持英文和数字，最大长度36位。',
            'type' => 'string',
            'required' => false,
            'example' => 'as****hs',
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
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'FE22D613-D3C6-4A58-87CA-F21FC85AA08E',
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
            'errorCode' => 'Forbidden.Scene.LiveStillStreaming',
            'errorMessage' => 'Live is still streaming and cannot be deleted.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"FE22D613-D3C6-4A58-87CA-F21FC85AA08E\\"\\n}","errorExample":""},{"type":"xml","example":"<DeleteLiveRoomResponse>\\n    <RequestId>FE22D613-D3C6-4A58-87CA-F21FC85AA08E</RequestId>\\n</DeleteLiveRoomResponse>","errorExample":""}]',
      'title' => '删除直播',
    ),
    'PublishLiveRoom' => 
    array (
      'summary' => '调用PublishLiveRoom发布直播，将直播状态转变为直播中，并获取推拉流地址。',
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
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'AppId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '应用唯一标识，由6位小写字母、数字组成。',
            'description' => '用户的应用ID，在控制台创建应用时生成。包含小写字母、数字，长度为6个字符。',
            'type' => 'string',
            'required' => true,
            'example' => '7m***q',
          ),
        ),
        1 => 
        array (
          'name' => 'LiveId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '直播ID。',
            'description' => '直播的唯一标识ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'b7f2****ebb3',
          ),
        ),
        2 => 
        array (
          'name' => 'UserId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '操作人ID。',
            'description' => '操作人ID，仅支持英文和数字，最大长度36位。',
            'type' => 'string',
            'required' => false,
            'example' => 'as****hs',
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
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'FE22D613-D3C6-4A58-87CA-F21FC85AA08E',
              ),
              'Result' => 
              array (
                'title' => '创建场景化直播返回的结果。',
                'description' => '创建场景化直播返回的结果。',
                'type' => 'object',
                'properties' => 
                array (
                  'LiveId' => 
                  array (
                    'title' => '直播ID。',
                    'description' => '直播ID。',
                    'type' => 'string',
                    'example' => 'b7f2****ebb3',
                  ),
                  'LiveUrl' => 
                  array (
                    'title' => '直播拉流地址。',
                    'description' => '直播播流地址。',
                    'type' => 'string',
                    'example' => 'http://demo-app-live.com/live/b7f29c02-****-40fd-****-e8d06a8aebb3.flv?auth_key=1627522726-0-0-******e620b363d4cf8a8e3',
                  ),
                  'PushUrl' => 
                  array (
                    'title' => '直播推流地址。',
                    'description' => '直播推流地址。',
                    'type' => 'string',
                    'example' => 'rtmp://demo-app-push.com/live/b7f29c02-****-40fd-****-e8d06a8aebb3?auth_key=1627522726-0-0-******e620b363d4cf8a8e3',
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
            'errorCode' => 'Invalid.Live.StatusNotMatch',
            'errorMessage' => 'The live status not match.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"FE22D613-D3C6-4A58-87CA-F21FC85AA08E\\",\\n  \\"Result\\": {\\n    \\"LiveId\\": \\"b7f2****ebb3\\",\\n    \\"LiveUrl\\": \\"http://demo-app-live.com/live/b7f29c02-****-40fd-****-e8d06a8aebb3.flv?auth_key=1627522726-0-0-******e620b363d4cf8a8e3\\",\\n    \\"PushUrl\\": \\"rtmp://demo-app-push.com/live/b7f29c02-****-40fd-****-e8d06a8aebb3?auth_key=1627522726-0-0-******e620b363d4cf8a8e3\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<PublishLiveRoomResponse>\\n    <RequestId>ER52****O9CA</RequestId>\\n    <Result>\\n        <LiveId>b7f2****ebb3</LiveId>\\n        <LiveUrl>http://demo-app-live.com/live/b7f29c02-****-40fd-****-e8d06a8aebb3.flv?auth_key=1627522726-0-0-******e620b363d4cf8a8e3</LiveUrl>\\n        <PushUrl>rtmp://demo-app-push.com/live/b7f29c02-****-40fd-****-e8d06a8aebb3?auth_key=1627522726-0-0-******e620b363d4cf8a8e3</PushUrl>\\n    </Result>\\n</PublishLiveRoomResponse>","errorExample":""}]',
      'title' => '发布直播',
    ),
    'UpdateLiveRoom' => 
    array (
      'summary' => '调用UpdateLiveRoom更新指定直播相关信息。',
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
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'AppId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '应用唯一标识，由6位小写字母、数字组成。',
            'description' => '用户的应用ID，在控制台创建应用时生成。包含小写字母、数字，长度为6个字符。',
            'type' => 'string',
            'required' => true,
            'example' => '7m***q',
          ),
        ),
        1 => 
        array (
          'name' => 'Title',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '标题，支持中英文，最大长度32位。',
            'description' => '直播标题，支持中英文，最大长度32位。',
            'type' => 'string',
            'required' => false,
            'example' => 'Title001',
          ),
        ),
        2 => 
        array (
          'name' => 'Notice',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '公告，支持中英文，最大长度256位。',
            'description' => '直播公告，支持中英文，最大长度256位。',
            'type' => 'string',
            'required' => false,
            'example' => 'Notice001',
          ),
        ),
        3 => 
        array (
          'name' => 'CoverUrl',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '封面，支持图片地址链接格式',
            'description' => '直播封面，支持图片地址链接格式，最大长度256位。',
            'type' => 'string',
            'required' => false,
            'example' => 'http://***.png',
          ),
        ),
        4 => 
        array (
          'name' => 'Extension',
          'in' => 'formData',
          'style' => 'json',
          'schema' => 
          array (
            'title' => '拓展字段，按需传递，需要额外记录的房间属性。',
            'description' => '拓展字段，按需传递，需要额外记录的房间属性。',
            'type' => 'object',
            'required' => false,
            'additionalProperties' => 
            array (
              'type' => 'string',
              'required' => false,
              'example' => 'test001',
            ),
            'example' => 'AE35****T95F',
          ),
        ),
        5 => 
        array (
          'name' => 'AnchorId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '主播id，仅支持英文和数字，最大长度36位。',
            'description' => '主播ID，仅支持英文和数字，最大长度36位。',
            'type' => 'string',
            'required' => false,
            'example' => 'as****hs',
          ),
        ),
        6 => 
        array (
          'name' => 'AnchorNick',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '主播昵称。',
            'description' => '主播昵称，支持中英文，最大长度32位。',
            'type' => 'string',
            'required' => false,
            'example' => 'User001',
          ),
        ),
        7 => 
        array (
          'name' => 'UserId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '操作人ID。',
            'description' => '操作人ID，仅支持英文和数字，最大长度36位。',
            'type' => 'string',
            'required' => false,
            'example' => 'user001',
          ),
        ),
        8 => 
        array (
          'name' => 'LiveId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '直播ID。',
            'description' => '直播的唯一标识ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'b7f2****ebb3',
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
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'FE22D613-D3C6-4A58-87CA-F21FC85AA08E',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"FE22D613-D3C6-4A58-87CA-F21FC85AA08E\\"\\n}","errorExample":""},{"type":"xml","example":"<UpdateLiveRoomResponse>\\n    <RequestId>FE22D613-D3C6-4A58-87CA-F21FC85AA08E</RequestId>\\n</UpdateLiveRoomResponse>","errorExample":""}]',
      'title' => '更新直播信息',
    ),
    'StopLiveRoom' => 
    array (
      'summary' => '调用StopLiveRoom停止指定直播，直播状态改变为直播结束。',
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
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'AppId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '应用唯一标识，由6位小写字母、数字组成。',
            'description' => '用户的应用ID，在控制台创建应用时生成。包含小写字母、数字，长度为6个字符。',
            'type' => 'string',
            'required' => true,
            'example' => '7m***q',
          ),
        ),
        1 => 
        array (
          'name' => 'LiveId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '直播ID。',
            'description' => '直播的唯一标识ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'b7f2****ebb3',
          ),
        ),
        2 => 
        array (
          'name' => 'UserId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '操作人ID。',
            'description' => '操作人ID，仅支持英文和数字，最大长度36位。',
            'type' => 'string',
            'required' => false,
            'example' => 'as****hs',
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
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'FE22D613-D3C6-4A58-87CA-F21FC85AA08E',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'Forbidden.Live.PermissionDenied',
            'errorMessage' => 'The permission is denied.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"FE22D613-D3C6-4A58-87CA-F21FC85AA08E\\"\\n}","errorExample":""},{"type":"xml","example":"<StopLiveRoomResponse>\\n    <RequestId>FE22D613-D3C6-4A58-87CA-F21FC85AA08E</RequestId>\\n</StopLiveRoomResponse>","errorExample":""}]',
      'title' => '停止直播',
    ),
    'GetLiveRoom' => 
    array (
      'summary' => '调用GetLiveRoom查询指定直播相关信息。',
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
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'AppId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '应用唯一标识，由6位小写字母、数字组成。',
            'description' => '用户的应用ID，在控制台创建应用时生成。包含小写字母、数字，长度为6个字符。',
            'type' => 'string',
            'required' => true,
            'example' => '7m***q',
          ),
        ),
        1 => 
        array (
          'name' => 'LiveId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '直播ID。',
            'description' => '直播的唯一标识ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'b7f2****ebb3',
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
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'FE22D613-D3C6-4A58-87CA-F21FC85AA08E',
              ),
              'Result' => 
              array (
                'title' => '创建场景化直播返回的结果。',
                'description' => '查询直播详情返回的结果。',
                'type' => 'object',
                'properties' => 
                array (
                  'AppId' => 
                  array (
                    'title' => '应用ID。',
                    'description' => '用户的应用ID，在控制台创建应用时生成。包含小写字母、数字，长度为6个字符。',
                    'type' => 'string',
                    'example' => '7m***q',
                  ),
                  'LiveId' => 
                  array (
                    'title' => '直播ID。',
                    'description' => '直播的唯一标识ID。',
                    'type' => 'string',
                    'example' => 'b7f2****ebb3',
                  ),
                  'Status' => 
                  array (
                    'title' => '直播状态，0-在播 1-下播。',
                    'description' => '直播状态。取值：
* **0**：已创建，未开始直播。
* **1**：直播中。
* **2**：直播结束。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                  'RoomId' => 
                  array (
                    'title' => '房间ID。',
                    'description' => '房间的唯一标识ID。',
                    'type' => 'string',
                    'example' => 'AE35-****-T95F',
                  ),
                  'ChatId' => 
                  array (
                    'title' => '聊天ID。',
                    'description' => '弹幕的唯一标识。',
                    'type' => 'string',
                    'example' => '09***f8',
                  ),
                  'Title' => 
                  array (
                    'title' => '标题。',
                    'description' => '直播标题。',
                    'type' => 'string',
                    'example' => 'Title001',
                  ),
                  'Notice' => 
                  array (
                    'title' => '公告。',
                    'description' => '直播公告。',
                    'type' => 'string',
                    'example' => 'Notice001',
                  ),
                  'CoverUrl' => 
                  array (
                    'title' => '封面。',
                    'description' => '直播封面。',
                    'type' => 'string',
                    'example' => 'http://***.png',
                  ),
                  'AnchorId' => 
                  array (
                    'title' => '主播ID。',
                    'description' => '主播ID。',
                    'type' => 'string',
                    'example' => 'as****hs',
                  ),
                  'Uv' => 
                  array (
                    'title' => '访问用户数。',
                    'description' => '访问用户数，同个访客多次访问直播间仅计算一个UV。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '100',
                  ),
                  'OnlineCount' => 
                  array (
                    'title' => '在线用户数。',
                    'description' => '在线用户数。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '50',
                  ),
                  'PlaybackUrl' => 
                  array (
                    'title' => '直播回放地址。',
                    'description' => '直播回放地址。直播开始时生成，直播结束后可以观看。',
                    'type' => 'string',
                    'example' => 'http://demo-app-playback.com/live/b7f29c02-****-40fd-****-e8d06a8aebb3.m3u8?auth_key=1627522726-0-0-******e620b363d4cf8a8e3',
                  ),
                  'PlaybackUrlHttps' => 
                  array (
                    'title' => 'https协议的直播回放地址',
                    'description' => 'https协议的直播回放地址。',
                    'type' => 'string',
                    'example' => 'https://demo-app-playback.com/live/b7f29c02-****-40fd-****-e8d06a8aebb3.m3u8?auth_key=1627522726-0-0-******e620b363d4cf8a8e3',
                  ),
                  'CreateTime' => 
                  array (
                    'title' => '直播创建时间，单位：毫秒。',
                    'description' => '直播创建时间，单位：毫秒。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1624259500000',
                  ),
                  'EndTime' => 
                  array (
                    'title' => '直播结束时间，单位：毫秒。',
                    'description' => '直播结束时间，单位：毫秒。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1624259500000',
                  ),
                  'PushUrl' => 
                  array (
                    'title' => '直播推流地址。',
                    'description' => '直播推流地址。',
                    'type' => 'string',
                    'example' => 'rtmp://demo-app-push.com/live/b7f29c02-****-40fd-****-e8d06a8aebb3?auth_key=1627522726-0-0-******e620b363d4cf8a8e3',
                  ),
                  'LiveUrl' => 
                  array (
                    'title' => '直播拉流地址。',
                    'description' => '直播播流地址。',
                    'type' => 'string',
                    'example' => 'http://demo-app-live.com/live/b7f29c02-****-40fd-****-e8d06a8aebb3.flv?auth_key=1627522726-0-0-******e620b363d4cf8a8e3',
                  ),
                  'LiveUrlHttps' => 
                  array (
                    'title' => 'https协议的直播拉流地址。',
                    'description' => 'https协议的直播拉流地址。',
                    'type' => 'string',
                    'example' => 'https://demo-app-live.com/live/b7f29c02-****-40fd-****-e8d06a8aebb3.flv?auth_key=1627522726-0-0-******e620b363d4cf8a8e3',
                  ),
                  'PluginInstanceInfoList' => 
                  array (
                    'title' => '活跃插件列表。',
                    'description' => '活跃插件列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'PluginType' => 
                        array (
                          'title' => '插件唯一标识，取值：live-直播，wb-白板，chat-聊天，rtc。',
                          'description' => '插件唯一标识，取值：
- **live**：直播。
- **wb**：白板。
- **chat**：聊天。
- **rtc**：音视频通信。',
                          'type' => 'string',
                          'example' => 'live',
                        ),
                        'PluginId' => 
                        array (
                          'title' => '插件实例唯一标识。',
                          'description' => '插件实例唯一标识。',
                          'type' => 'string',
                          'example' => 'HASU-****-ASHD',
                        ),
                        'CreateTime' => 
                        array (
                          'title' => '插件实例创建时间戳，单位：毫秒。',
                          'description' => '插件实例创建时间戳，单位：毫秒。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1624589848000',
                        ),
                        'Extension' => 
                        array (
                          'title' => '插件拓展字段。',
                          'description' => '插件拓展字段。',
                          'type' => 'object',
                          'additionalProperties' => 
                          array (
                            'type' => 'string',
                            'example' => 'test001',
                            'description' => '插件拓展信息。',
                          ),
                        ),
                      ),
                    ),
                  ),
                  'Extension' => 
                  array (
                    'title' => '直播拓展字段。',
                    'description' => '直播拓展字段。',
                    'type' => 'object',
                    'additionalProperties' => 
                    array (
                      'type' => 'string',
                      'example' => 'test001',
                      'description' => '直播拓展信息。',
                    ),
                  ),
                  'Pv' => 
                  array (
                    'title' => '访问用户人次。',
                    'description' => '访问用户人次，访客对同一直播间的多次访问，PV累加。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '200',
                  ),
                  'AnchorNick' => 
                  array (
                    'title' => '主播昵称',
                    'description' => '主播昵称。',
                    'type' => 'string',
                    'example' => 'User001',
                  ),
                  'StartTime' => 
                  array (
                    'title' => '直播开始时间，单位：毫秒。',
                    'description' => '直播开始时间，单位：毫秒。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1624259500000',
                  ),
                  'HlsUrl' => 
                  array (
                    'title' => '原画HLS播放地址。',
                    'description' => '原画HLS播放地址。',
                    'type' => 'string',
                    'example' => 'http://demo-app-live.com/live/b7f29c02-****-40fd-****-e8d06a8aebb3.m3u8?auth_key=1627522726-0-0-******e620b363d4cf8a8e3',
                  ),
                  'HlsUrlHttps' => 
                  array (
                    'title' => 'https协议的原画HLS播放地址。',
                    'description' => 'https协议的原画HLS播放地址。',
                    'type' => 'string',
                    'example' => 'https://demo-app-live.com/live/b7f29c02-****-40fd-****-e8d06a8aebb3.m3u8?auth_key=1627522726-0-0-******e620b363d4cf8a8e3',
                  ),
                  'RtmpUrl' => 
                  array (
                    'title' => 'rtmp协议的播放地址',
                    'description' => 'rtmp协议的播放地址。',
                    'type' => 'string',
                    'example' => 'rtmp://demo-app-live.com/live/b7f29c02-****-40fd-****-e8d06a8aebb3?auth_key=1627522726-0-0-******e620b363d4cf8a8e3',
                  ),
                  'ArtcInfo' => 
                  array (
                    'title' => 'RTS低延迟播流信息。',
                    'description' => 'RTS低延迟播流信息。',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'ArtcUrl' => 
                      array (
                        'title' => 'RTS原码流地址，推荐移动端使用。',
                        'description' => 'RTS原码流地址，推荐移动端使用。',
                        'type' => 'string',
                        'example' => 'artc://demo-app-live.com/live/b7f29c02-****-40fd-****-e8d06a8aebb3?auth_key=1627522726-0-0-******e620b363d4cf8a8e3',
                      ),
                      'ArtcH5Url' => 
                      array (
                        'title' => 'RTS转码流地址，推荐web端使用。',
                        'description' => 'RTS转码流地址，推荐Web端使用。',
                        'type' => 'string',
                        'example' => 'artc://demo-app-live.com/live/b7f29c02-****-40fd-****-e8d06a8aebb3_origin-RTS?auth_key=1627522726-0-0-******e620b363d4cf8a8e3',
                      ),
                    ),
                  ),
                  'EnableLinkMic' => 
                  array (
                    'title' => '是否开启连麦。',
                    'description' => '是否开启连麦。',
                    'type' => 'boolean',
                    'example' => 'true:开启连麦。false:未开启连麦。',
                  ),
                  'ConfId' => 
                  array (
                    'title' => '连麦会议唯一标识。',
                    'description' => '连麦会议唯一标识。',
                    'type' => 'string',
                    'example' => 'fb0f-****-4cb1',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"FE22D613-D3C6-4A58-87CA-F21FC85AA08E\\",\\n  \\"Result\\": {\\n    \\"AppId\\": \\"7m***q\\",\\n    \\"LiveId\\": \\"b7f2****ebb3\\",\\n    \\"Status\\": 1,\\n    \\"RoomId\\": \\"AE35-****-T95F\\",\\n    \\"ChatId\\": \\"09***f8\\",\\n    \\"Title\\": \\"Title001\\",\\n    \\"Notice\\": \\"Notice001\\",\\n    \\"CoverUrl\\": \\"http://***.png\\",\\n    \\"AnchorId\\": \\"as****hs\\",\\n    \\"Uv\\": 100,\\n    \\"OnlineCount\\": 50,\\n    \\"PlaybackUrl\\": \\"http://demo-app-playback.com/live/b7f29c02-****-40fd-****-e8d06a8aebb3.m3u8?auth_key=1627522726-0-0-******e620b363d4cf8a8e3\\",\\n    \\"PlaybackUrlHttps\\": \\"https://demo-app-playback.com/live/b7f29c02-****-40fd-****-e8d06a8aebb3.m3u8?auth_key=1627522726-0-0-******e620b363d4cf8a8e3\\",\\n    \\"CreateTime\\": 1624259500000,\\n    \\"EndTime\\": 1624259500000,\\n    \\"PushUrl\\": \\"rtmp://demo-app-push.com/live/b7f29c02-****-40fd-****-e8d06a8aebb3?auth_key=1627522726-0-0-******e620b363d4cf8a8e3\\",\\n    \\"LiveUrl\\": \\"http://demo-app-live.com/live/b7f29c02-****-40fd-****-e8d06a8aebb3.flv?auth_key=1627522726-0-0-******e620b363d4cf8a8e3\\",\\n    \\"LiveUrlHttps\\": \\"https://demo-app-live.com/live/b7f29c02-****-40fd-****-e8d06a8aebb3.flv?auth_key=1627522726-0-0-******e620b363d4cf8a8e3\\",\\n    \\"PluginInstanceInfoList\\": [\\n      {\\n        \\"PluginType\\": \\"live\\",\\n        \\"PluginId\\": \\"HASU-****-ASHD\\",\\n        \\"CreateTime\\": 1624589848000,\\n        \\"Extension\\": {\\n          \\"key\\": \\"test001\\"\\n        }\\n      }\\n    ],\\n    \\"Extension\\": {\\n      \\"key\\": \\"test001\\"\\n    },\\n    \\"Pv\\": 200,\\n    \\"AnchorNick\\": \\"User001\\",\\n    \\"StartTime\\": 1624259500000,\\n    \\"HlsUrl\\": \\"http://demo-app-live.com/live/b7f29c02-****-40fd-****-e8d06a8aebb3.m3u8?auth_key=1627522726-0-0-******e620b363d4cf8a8e3\\",\\n    \\"HlsUrlHttps\\": \\"https://demo-app-live.com/live/b7f29c02-****-40fd-****-e8d06a8aebb3.m3u8?auth_key=1627522726-0-0-******e620b363d4cf8a8e3\\",\\n    \\"RtmpUrl\\": \\"rtmp://demo-app-live.com/live/b7f29c02-****-40fd-****-e8d06a8aebb3?auth_key=1627522726-0-0-******e620b363d4cf8a8e3\\",\\n    \\"ArtcInfo\\": {\\n      \\"ArtcUrl\\": \\"artc://demo-app-live.com/live/b7f29c02-****-40fd-****-e8d06a8aebb3?auth_key=1627522726-0-0-******e620b363d4cf8a8e3\\",\\n      \\"ArtcH5Url\\": \\"artc://demo-app-live.com/live/b7f29c02-****-40fd-****-e8d06a8aebb3_origin-RTS?auth_key=1627522726-0-0-******e620b363d4cf8a8e3\\"\\n    },\\n    \\"EnableLinkMic\\": true,\\n    \\"ConfId\\": \\"fb0f-****-4cb1\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<GetLiveRoomResponse>\\n    <RequestId>FE22D613-D3C6-4A58-87CA-F21FC85AA08E</RequestId>\\n    <Result>\\n        <AppId>7m***q</AppId>\\n        <LiveId>b7f2****ebb3</LiveId>\\n        <Status>1</Status>\\n        <RoomId>AE35-****-T95F</RoomId>\\n        <ChatId>09***f8</ChatId>\\n        <Title>Title001</Title>\\n        <Notice>Notice001</Notice>\\n        <CoverUrl>http://***.png</CoverUrl>\\n        <AnchorId>as****hs</AnchorId>\\n        <Uv>100</Uv>\\n        <OnlineCount>50</OnlineCount>\\n        <PlaybackUrl>http://demo-app-playback.com/live/b7f29c02-****-40fd-****-e8d06a8aebb3.m3u8?auth_key=1627522726-0-0-******e620b363d4cf8a8e3</PlaybackUrl>\\n        <PlaybackUrlHttps>https://demo-app-playback.com/live/b7f29c02-****-40fd-****-e8d06a8aebb3.m3u8?auth_key=1627522726-0-0-******e620b363d4cf8a8e3</PlaybackUrlHttps>\\n        <CreateTime>1624259500000</CreateTime>\\n        <EndTime>1624259500000</EndTime>\\n        <PushUrl>rtmp://demo-app-push.com/live/b7f29c02-****-40fd-****-e8d06a8aebb3?auth_key=1627522726-0-0-******e620b363d4cf8a8e3</PushUrl>\\n        <LiveUrl>http://demo-app-live.com/live/b7f29c02-****-40fd-****-e8d06a8aebb3.flv?auth_key=1627522726-0-0-******e620b363d4cf8a8e3</LiveUrl>\\n        <LiveUrlHttps>https://demo-app-live.com/live/b7f29c02-****-40fd-****-e8d06a8aebb3.flv?auth_key=1627522726-0-0-******e620b363d4cf8a8e3</LiveUrlHttps>\\n        <PluginInstanceInfoList>\\n            <PluginType>live</PluginType>\\n            <PluginId>HASU-****-ASHD</PluginId>\\n            <CreateTime>1624589848000</CreateTime>\\n            <Extension>\\n                <key>test001</key>\\n            </Extension>\\n        </PluginInstanceInfoList>\\n        <Extension>\\n            <key>test001</key>\\n        </Extension>\\n        <Pv>200</Pv>\\n        <AnchorNick>User001</AnchorNick>\\n        <StartTime>1624259500000</StartTime>\\n        <HlsUrl>http://demo-app-live.com/live/b7f29c02-****-40fd-****-e8d06a8aebb3.m3u8?auth_key=1627522726-0-0-******e620b363d4cf8a8e3</HlsUrl>\\n        <HlsUrlHttps>https://demo-app-live.com/live/b7f29c02-****-40fd-****-e8d06a8aebb3.m3u8?auth_key=1627522726-0-0-******e620b363d4cf8a8e3</HlsUrlHttps>\\n        <RtmpUrl>rtmp://demo-app-live.com/live/b7f29c02-****-40fd-****-e8d06a8aebb3?auth_key=1627522726-0-0-******e620b363d4cf8a8e3</RtmpUrl>\\n        <ArtcInfo>\\n            <ArtcUrl>artc://demo-app-live.com/live/b7f29c02-****-40fd-****-e8d06a8aebb3?auth_key=1627522726-0-0-******e620b363d4cf8a8e3</ArtcUrl>\\n            <ArtcH5Url>artc://demo-app-live.com/live/b7f29c02-****-40fd-****-e8d06a8aebb3_origin-RTS?auth_key=1627522726-0-0-******e620b363d4cf8a8e3</ArtcH5Url>\\n        </ArtcInfo>\\n    </Result>\\n</GetLiveRoomResponse>","errorExample":""}]',
      'title' => '查询直播详情',
    ),
    'CreateClass' => 
    array (
      'summary' => '调用CreateClass创建课程。可用于学生上课，职场培训等场景，包含连麦、直播、白板、聊天等功能。',
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
        'operationType' => 'create',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'AppId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '应用唯一标识，由6位小写字母、数字组成。',
            'description' => '用户的应用ID，在控制台创建应用时生成。包含小写字母、数字，长度为6个字符。',
            'type' => 'string',
            'required' => true,
            'example' => '7m***q',
          ),
        ),
        1 => 
        array (
          'name' => 'Title',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '课堂标题',
            'description' => '课程标题，支持中英文，最大长度32个字符。',
            'type' => 'string',
            'required' => true,
            'example' => 'ClassTitle001',
          ),
        ),
        2 => 
        array (
          'name' => 'CreateUserId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '创建人用户ID。',
            'description' => '创建人用户ID，仅支持英文和数字，最大长度36个字符。',
            'type' => 'string',
            'required' => true,
            'example' => 'as****hs',
          ),
        ),
        3 => 
        array (
          'name' => 'CreateNickname',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '创建人用户昵称。',
            'description' => '创建人用户昵称，支持中英文，最大长度32个字符。',
            'type' => 'string',
            'required' => true,
            'example' => 'nickname001',
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
              'RequestId' => 
              array (
                'title' => '请求ID。',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'FE22D613-D3C6-4A58-87CA-F21FC85AA08E',
              ),
              'Result' => 
              array (
                'title' => 'API请求的返回结果结构体。',
                'description' => '创建课程的返回结果。',
                'type' => 'object',
                'properties' => 
                array (
                  'ClassId' => 
                  array (
                    'title' => '课堂唯一标识。',
                    'description' => '课程唯一标识。',
                    'type' => 'string',
                    'example' => 'A55-****-Y34O',
                  ),
                  'Title' => 
                  array (
                    'title' => '课堂标题。',
                    'description' => '课程标题。',
                    'type' => 'string',
                    'example' => 'PPT制作培训',
                  ),
                  'CreateUserId' => 
                  array (
                    'title' => '创建人ID。',
                    'description' => '创建人用户ID。',
                    'type' => 'string',
                    'example' => '34***45',
                  ),
                  'CreateNickname' => 
                  array (
                    'title' => '创建人昵称。',
                    'description' => '创建人昵称。',
                    'type' => 'string',
                    'example' => '随风',
                  ),
                  'Status' => 
                  array (
                    'title' => '课堂状态，0:未开始 1:上课中 2:已下课。',
                    'description' => '课程状态。取值：
- 0：未开始
- 1：上课中
- 2：已下课。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '2',
                  ),
                  'RoomId' => 
                  array (
                    'title' => '房间ID',
                    'description' => '房间ID。可用于查询房间详情信息，和端上SDK接入时作为参数传入。',
                    'type' => 'string',
                    'example' => 'AE35-****-T95F',
                  ),
                  'LiveId' => 
                  array (
                    'title' => '直播的唯一标识ID。',
                    'description' => '直播ID。可用于查询直播详情，和端上调用直播相关接口时作为参数传入。',
                    'type' => 'string',
                    'example' => 'b7f2****ebb3',
                  ),
                  'ConfId' => 
                  array (
                    'title' => '连麦会议唯一标识。',
                    'description' => '连麦会议ID。可用于RTC入会，获取会议详情。',
                    'type' => 'string',
                    'example' => 'fb0f-****-4cb1',
                  ),
                  'WhiteboardId' => 
                  array (
                    'title' => '白板ID',
                    'description' => '白板ID。可用于查询白板信息，和端上接入白板SDK时作为参数传入。',
                    'type' => 'string',
                    'example' => 'fgej**2',
                  ),
                  'WhiteboardRecordId' => 
                  array (
                    'title' => '白板录制ID',
                    'description' => '白板录制记录ID。可用于端上获取白板录制内容并播放。',
                    'type' => 'string',
                    'example' => 'eofg**rt',
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
            'errorCode' => 'Invalid.Live.ConfigNotFound',
            'errorMessage' => 'The live push domain and pull domain config not found.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"FE22D613-D3C6-4A58-87CA-F21FC85AA08E\\",\\n  \\"Result\\": {\\n    \\"ClassId\\": \\"A55-****-Y34O\\",\\n    \\"Title\\": \\"PPT制作培训\\",\\n    \\"CreateUserId\\": \\"34***45\\",\\n    \\"CreateNickname\\": \\"随风\\",\\n    \\"Status\\": 2,\\n    \\"RoomId\\": \\"AE35-****-T95F\\",\\n    \\"LiveId\\": \\"b7f2****ebb3\\",\\n    \\"ConfId\\": \\"fb0f-****-4cb1\\",\\n    \\"WhiteboardId\\": \\"fgej**2\\",\\n    \\"WhiteboardRecordId\\": \\"eofg**rt\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<CreateClassResponse>\\n    <RequestId>FE22D613-D3C6-4A58-87CA-F21FC85AA08E</RequestId>\\n    <Result>\\n        <ClassId>A55-****-Y34O</ClassId>\\n        <Title>PPT制作培训</Title>\\n        <CreateUserId>34***45</CreateUserId>\\n        <CreateNickname>随风</CreateNickname>\\n        <Status>2</Status>\\n        <RoomId>AE35-****-T95F</RoomId>\\n        <LiveId>b7f2****ebb3</LiveId>\\n        <ConfId>fb0f-****-4cb1</ConfId>\\n        <WhiteboardId>fgej**2</WhiteboardId>\\n        <WhiteboardRecordId>eofg**rt</WhiteboardRecordId>\\n    </Result>\\n</CreateClassResponse>","errorExample":""}]',
      'title' => '创建课程',
    ),
    'DeleteClass' => 
    array (
      'summary' => '调用DeleteClass删除课程。',
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
        'operationType' => 'delete',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'AppId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '应用唯一标识，由6位小写字母、数字组成。',
            'description' => '用户的应用ID，在控制台创建应用时生成。包含小写字母、数字，长度为6个字符。',
            'type' => 'string',
            'required' => true,
            'example' => '7m***q',
          ),
        ),
        1 => 
        array (
          'name' => 'ClassId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '课堂唯一标识。',
            'description' => '课程唯一标识。',
            'type' => 'string',
            'required' => true,
            'example' => 'A55-****-Y34O',
          ),
        ),
        2 => 
        array (
          'name' => 'UserId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '操作人用户ID，仅支持中英文数字，下划线，中划线，1~36个字符。',
            'description' => '操作人用户ID，仅支持中英文数字，下划线（_），中划线（-），长度为1~36个字符。',
            'type' => 'string',
            'required' => false,
            'example' => 'as****hs',
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
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'FE22D613-D3C6-4A58-87CA-F21FC85AA08E',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"FE22D613-D3C6-4A58-87CA-F21FC85AA08E\\"\\n}","errorExample":""},{"type":"xml","example":"<DeleteClassResponse>\\n    <RequestId>FE22D613-D3C6-4A58-87CA-F21FC85AA08E</RequestId>\\n</DeleteClassResponse>","errorExample":""}]',
      'title' => '删除课程',
    ),
    'StopClass' => 
    array (
      'summary' => '调用StopClass执行结束课程动作，会修改课程状态为已下课。',
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
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'AppId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '应用唯一标识，由6位小写字母、数字组成。',
            'description' => '用户的应用ID，在控制台创建应用时生成。包含小写字母、数字，长度为6个字符。',
            'type' => 'string',
            'required' => true,
            'example' => '7m***q',
          ),
        ),
        1 => 
        array (
          'name' => 'ClassId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '课堂唯一标识。',
            'description' => '课程唯一标识。',
            'type' => 'string',
            'required' => true,
            'example' => 'A55-****-Y34O',
          ),
        ),
        2 => 
        array (
          'name' => 'UserId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '操作者用户ID。',
            'description' => '操作者用户ID，仅支持英文和数字，最大长度36个字符。',
            'type' => 'string',
            'required' => false,
            'example' => 'as****hs',
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
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'FE22D613-D3C6-4A58-87CA-F21FC85AA08E',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"FE22D613-D3C6-4A58-87CA-F21FC85AA08E\\"\\n}","errorExample":""},{"type":"xml","example":"<StopClassResponse>\\n    <RequestId>FE22D613-D3C6-4A58-87CA-F21FC85AA08E</RequestId>\\n</StopClassResponse>","errorExample":""}]',
      'title' => '结束课程',
    ),
    'UpdateClass' => 
    array (
      'summary' => '调用UpdateClass更新课程。',
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
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'AppId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '应用唯一标识，由6位小写字母、数字组成。',
            'description' => '用户的应用ID，在控制台创建应用时生成。包含小写字母、数字，长度为6个字符。',
            'type' => 'string',
            'required' => true,
            'example' => '7m***q',
          ),
        ),
        1 => 
        array (
          'name' => 'ClassId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '课堂唯一标识。',
            'description' => '课程唯一标识。',
            'type' => 'string',
            'required' => true,
            'example' => 'A55-****-Y34O',
          ),
        ),
        2 => 
        array (
          'name' => 'Title',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '课堂标题，1~32个字符。',
            'description' => '课程标题，支持中英文，最大长度32个字符。',
            'type' => 'string',
            'required' => false,
            'example' => 'ClassTitle001',
          ),
        ),
        3 => 
        array (
          'name' => 'CreateUserId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '创建人用户ID，仅支持中英文数字，下划线，中划线，1~36个字符。',
            'description' => '创建人用户ID，仅支持英文和数字，最大长度36个字符。',
            'type' => 'string',
            'required' => false,
            'example' => 'as****hs',
          ),
        ),
        4 => 
        array (
          'name' => 'CreateNickname',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '创建人用户昵称，1~32个字符。',
            'description' => '创建人用户昵称，支持中英文，最大长度32个字符。',
            'type' => 'string',
            'required' => false,
            'example' => 'nickname001',
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
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'FE22D613-D3C6-4A58-87CA-F21FC85AA08E',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"FE22D613-D3C6-4A58-87CA-F21FC85AA08E\\"\\n}","errorExample":""},{"type":"xml","example":"<UpdateClassResponse>\\n    <RequestId>FE22D613-D3C6-4A58-87CA-F21FC85AA08E</RequestId>\\n</UpdateClassResponse>","errorExample":""}]',
      'title' => '更新课程',
    ),
    'GetClassDetail' => 
    array (
      'summary' => '调用GetClassDetail获取课程详情。可用于查询课程状态，以及相关联的直播，连麦，白板等ID信息。通过这些ID，可进一步查询对应的直播，连麦，白板的详情。',
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
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'AppId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '应用唯一标识，由6位小写字母、数字组成。',
            'description' => '用户的应用ID，在控制台创建应用时生成。包含小写字母、数字，长度为6个字符。',
            'type' => 'string',
            'required' => true,
            'example' => '7m***q',
          ),
        ),
        1 => 
        array (
          'name' => 'ClassId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '课堂唯一标识，由调用CreateClass返回。',
            'description' => '课程唯一标识，由调用CreateClass返回。',
            'type' => 'string',
            'required' => true,
            'example' => 'A55-****-Y34O',
          ),
        ),
        2 => 
        array (
          'name' => 'UserId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '操作人用户ID。',
            'description' => '操作人用户ID，仅支持英文字母和数字，长度最多36个字符。',
            'type' => 'string',
            'required' => false,
            'example' => 'as****hs',
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
              'RequestId' => 
              array (
                'title' => '请求ID。',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'FE22D613-D3C6-4A58-87CA-F21FC85AA08E',
              ),
              'Result' => 
              array (
                'title' => 'API请求的返回结果结构体。',
                'description' => '获取课堂详情的返回结果。',
                'type' => 'object',
                'properties' => 
                array (
                  'ClassId' => 
                  array (
                    'title' => '课堂唯一标识，由调用CreateClass返回。',
                    'description' => '课程唯一标识。',
                    'type' => 'string',
                    'example' => 'A55-****-Y34O',
                  ),
                  'Title' => 
                  array (
                    'title' => '课堂标题。',
                    'description' => '课程标题，支持中英文，最大长度32个字符。',
                    'type' => 'string',
                    'example' => 'ClassTitle001',
                  ),
                  'CreateUserId' => 
                  array (
                    'title' => '创建人ID。',
                    'description' => '创建人用户ID，仅支持英文和数字，最大长度36个字符。',
                    'type' => 'string',
                    'example' => 'as****hs',
                  ),
                  'CreateNickname' => 
                  array (
                    'title' => '创建人昵称。',
                    'description' => '创建人用户昵称，支持中英文，最大长度32个字符。',
                    'type' => 'string',
                    'example' => 'nickname001',
                  ),
                  'Status' => 
                  array (
                    'title' => '课堂状态，0:未开始 1:上课中 2:已下课。',
                    'description' => '课程状态。取值：
- 0：未开始
- 1：上课中
- 2：已下课。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '2',
                  ),
                  'StartTime' => 
                  array (
                    'title' => '开始上课时间戳，毫秒。',
                    'description' => '开始上课时间戳，单位：毫秒。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1632794405000',
                  ),
                  'EndTime' => 
                  array (
                    'title' => '下课时间戳，毫秒。',
                    'description' => '下课时间戳，单位：毫秒。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1632797405000',
                  ),
                  'RoomId' => 
                  array (
                    'title' => '房间ID',
                    'description' => '房间ID。可用于查询房间详情信息，和端上SDK接入时作为参数传入。',
                    'type' => 'string',
                    'example' => 'AE35-****-T95F',
                  ),
                  'LiveId' => 
                  array (
                    'title' => '直播的唯一标识ID。',
                    'description' => '直播ID。可用于查询直播详情，和端上调用直播相关接口时作为参数传入。',
                    'type' => 'string',
                    'example' => 'b7f2****ebb3',
                  ),
                  'ConfId' => 
                  array (
                    'title' => '连麦会议唯一标识。',
                    'description' => '连麦会议ID。可用于RTC入会，获取会议详情。',
                    'type' => 'string',
                    'example' => 'fb0f-****-4cb1',
                  ),
                  'WhiteboardId' => 
                  array (
                    'title' => '白板ID',
                    'description' => '白板ID。可用于查询白板信息，和端上接入白板SDK时作为参数传入。',
                    'type' => 'string',
                    'example' => 'fgej**2',
                  ),
                  'WhiteboardRecordId' => 
                  array (
                    'title' => '白板录制ID',
                    'description' => '白板录制ID。可用于端上获取白板录制内容并播放。',
                    'type' => 'string',
                    'example' => 'eofg**rt',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"FE22D613-D3C6-4A58-87CA-F21FC85AA08E\\",\\n  \\"Result\\": {\\n    \\"ClassId\\": \\"A55-****-Y34O\\",\\n    \\"Title\\": \\"ClassTitle001\\",\\n    \\"CreateUserId\\": \\"as****hs\\",\\n    \\"CreateNickname\\": \\"nickname001\\",\\n    \\"Status\\": 2,\\n    \\"StartTime\\": 1632794405000,\\n    \\"EndTime\\": 1632797405000,\\n    \\"RoomId\\": \\"AE35-****-T95F\\",\\n    \\"LiveId\\": \\"b7f2****ebb3\\",\\n    \\"ConfId\\": \\"fb0f-****-4cb1\\",\\n    \\"WhiteboardId\\": \\"fgej**2\\",\\n    \\"WhiteboardRecordId\\": \\"eofg**rt\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<GetClassDetailResponse>\\n    <RequestId>FE22D613-D3C6-4A58-87CA-F21FC85AA08E</RequestId>\\n    <Result>\\n        <ClassId>A55-****-Y34O</ClassId>\\n        <Title>ClassTitle001</Title>\\n        <CreateUserId>as****hs</CreateUserId>\\n        <CreateNickname>nickname001</CreateNickname>\\n        <Status>2</Status>\\n        <StartTime>1632794405000</StartTime>\\n        <EndTime>1632797405000</EndTime>\\n        <RoomId>AE35-****-T95F</RoomId>\\n        <LiveId>b7f2****ebb3</LiveId>\\n        <ConfId>fb0f-****-4cb1</ConfId>\\n        <WhiteboardId>fgej**2</WhiteboardId>\\n        <WhiteboardRecordId>eofg**rt</WhiteboardRecordId>\\n    </Result>\\n</GetClassDetailResponse>","errorExample":""}]',
      'title' => '获取课程详情',
    ),
    'ListClasses' => 
    array (
      'summary' => '调用ListClasses获取课程列表。可基于应用ID和课程状态，分页查询应用对应的所有课程列表。',
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
          'name' => 'AppId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '应用唯一标识，由6位小写字母、数字组成。',
            'description' => '应用唯一标识，由6位小写字母、数字组成。',
            'type' => 'string',
            'required' => true,
            'example' => 'lq****cu',
          ),
        ),
        1 => 
        array (
          'name' => 'Status',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '课程状态，0-未开课 1-上课中 2-已下课，不传则返回所有课程。',
            'description' => '课程状态

- 0-未开课 
- 1-上课中 
- 2-已下课
- 不传则返回所有课程。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '2',
          ),
        ),
        2 => 
        array (
          'name' => 'PageNumber',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '查询页码，从1开始，传空默认查询第1页。',
            'description' => '查询页码，从1开始，传空默认查询第1页。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        3 => 
        array (
          'name' => 'PageSize',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '每页显示个数，最大支持50，参数为空默认显示个数为10。',
            'description' => '每页显示个数，最大支持50，参数为空默认显示个数为10。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '25',
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
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => 'Id of the request',
                'type' => 'string',
                'example' => 'ER52****O9CA',
              ),
              'Result' => 
              array (
                'title' => '创建课程返回的结果。',
                'description' => '查询课程列表返回的结果。',
                'type' => 'object',
                'properties' => 
                array (
                  'TotalCount' => 
                  array (
                    'title' => '课程总数。',
                    'description' => '课程总数。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1000',
                  ),
                  'PageTotal' => 
                  array (
                    'title' => '课程总页数。',
                    'description' => '课程总页数。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '100',
                  ),
                  'HasMore' => 
                  array (
                    'title' => '是否还有下一页。',
                    'description' => '是否还有下一页。',
                    'type' => 'boolean',
                    'example' => 'true',
                  ),
                  'ClassList' => 
                  array (
                    'title' => '课程列表信息。',
                    'description' => '课程列表信息。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'ClassId' => 
                        array (
                          'title' => '课堂唯一标识，由调用CreateClass返回。',
                          'description' => '课程唯一标识。',
                          'type' => 'string',
                          'example' => 'AE35****T95F',
                        ),
                        'Title' => 
                        array (
                          'title' => '课堂标题。',
                          'description' => '课程标题，支持中英文，最大长度32个字符。',
                          'type' => 'string',
                          'example' => 'PPT制作培训',
                        ),
                        'CreateUserId' => 
                        array (
                          'title' => '创建人ID。',
                          'description' => '创建人用户ID，仅支持英文和数字，最大长度36个字符。',
                          'type' => 'string',
                          'example' => '34***45',
                        ),
                        'CreateNickname' => 
                        array (
                          'title' => '创建人昵称。',
                          'description' => '创建人用户昵称，支持中英文，最大长度32个字符。',
                          'type' => 'string',
                          'example' => '随风',
                        ),
                        'Status' => 
                        array (
                          'title' => '课堂状态，0:未开始 1:上课中 2:已下课。',
                          'description' => '课堂状态

- 0:未开始 
- 1:上课中 
- 2:已下课。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '2',
                        ),
                        'StartTime' => 
                        array (
                          'title' => '开始上课时间戳，毫秒。',
                          'description' => '开始上课时间戳，单位：毫秒。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '16****450',
                        ),
                        'EndTime' => 
                        array (
                          'title' => '下课时间戳，毫秒。',
                          'description' => '下课时间戳，单位：毫秒。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '16****950',
                        ),
                        'RoomId' => 
                        array (
                          'title' => '房间ID',
                          'description' => '房间ID。可用于查询房间详情信息，和端上SDK接入时作为参数传入。',
                          'type' => 'string',
                          'example' => 'AE35-****-T95F',
                        ),
                        'LiveId' => 
                        array (
                          'title' => '直播的唯一标识ID。',
                          'description' => '直播ID。可用于查询直播详情，和端上调用直播相关接口时作为参数传入。',
                          'type' => 'string',
                          'example' => 'b7f2****ebb3',
                        ),
                        'ConfId' => 
                        array (
                          'title' => '连麦会议唯一标识。',
                          'description' => '连麦会议ID。可用于RTC入会，获取会议详情。',
                          'type' => 'string',
                          'example' => 'fb0f-****-4cb1',
                        ),
                        'WhiteboardId' => 
                        array (
                          'title' => '白板ID',
                          'description' => '白板ID。可用于查询白板信息，和端上接入白板SDK时作为参数传入。',
                          'type' => 'string',
                          'example' => 'fgej**2',
                        ),
                        'WhiteboardRecordId' => 
                        array (
                          'title' => '白板录制ID',
                          'description' => '白板录制ID。可用于端上获取白板录制内容并播放。',
                          'type' => 'string',
                          'example' => 'eofg**rt',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"ER52****O9CA\\",\\n  \\"Result\\": {\\n    \\"TotalCount\\": 1000,\\n    \\"PageTotal\\": 100,\\n    \\"HasMore\\": true,\\n    \\"ClassList\\": [\\n      {\\n        \\"ClassId\\": \\"AE35****T95F\\",\\n        \\"Title\\": \\"PPT制作培训\\",\\n        \\"CreateUserId\\": \\"34***45\\",\\n        \\"CreateNickname\\": \\"随风\\",\\n        \\"Status\\": 2,\\n        \\"StartTime\\": 0,\\n        \\"EndTime\\": 0,\\n        \\"RoomId\\": \\"AE35-****-T95F\\",\\n        \\"LiveId\\": \\"b7f2****ebb3\\",\\n        \\"ConfId\\": \\"fb0f-****-4cb1\\",\\n        \\"WhiteboardId\\": \\"fgej**2\\",\\n        \\"WhiteboardRecordId\\": \\"eofg**rt\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<ListClassesResponse>\\n    <RequestId>ER52****O9CA</RequestId>\\n    <Result>\\n        <TotalCount>1000</TotalCount>\\n        <PageTotal>100</PageTotal>\\n        <HasMore>true</HasMore>\\n        <ClassList>\\n            <ClassId>AE35****T95F</ClassId>\\n            <Title>PPT制作培训</Title>\\n            <CreateUserId>34***45</CreateUserId>\\n            <CreateNickname>随风</CreateNickname>\\n            <Status>2</Status>\\n            <RoomId>AE35-****-T95F</RoomId>\\n            <LiveId>b7f2****ebb3</LiveId>\\n            <ConfId>fb0f-****-4cb1</ConfId>\\n            <WhiteboardId>fgej**2</WhiteboardId>\\n            <WhiteboardRecordId>eofg**rt</WhiteboardRecordId>\\n        </ClassList>\\n    </Result>\\n</ListClassesResponse>","errorExample":""}]',
      'title' => '获取课程列表',
    ),
    'GetClassRecord' => 
    array (
      'summary' => '调用GetClassRecord获取课程录制信息。可用于课程结束后获取回放地址，如果课程未结束，结果为空。',
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
          'name' => 'AppId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '应用唯一标识，由6位小写字母、数字组成。',
            'description' => '用户的应用ID，在控制台创建应用时生成。包含小写字母、数字，长度为6个字符。',
            'type' => 'string',
            'required' => true,
            'example' => 'lq****cu',
          ),
        ),
        1 => 
        array (
          'name' => 'ClassId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '课程唯一标识，由调用CreateClass返回。',
            'description' => '课程唯一标识，由调用CreateClass返回。',
            'type' => 'string',
            'required' => true,
            'example' => 'AE35****T95F',
          ),
        ),
        2 => 
        array (
          'name' => 'UserId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '操作人用户ID。',
            'description' => '操作人用户ID，仅支持英文字母和数字，长度最多36个字符。',
            'type' => 'string',
            'required' => false,
            'example' => '34**29',
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
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'FE22D613-D3C6-4A58-87CA-F21FC85AA08E',
              ),
              'Result' => 
              array (
                'title' => 'API请求的返回结果结构体。',
                'description' => 'API请求的返回结果结构体。',
                'type' => 'object',
                'properties' => 
                array (
                  'PlaybackUrlMap' => 
                  array (
                    'description' => '回放地址集合。key值代表回放视频类型，取值m3u8, mp4, flv，当前仅提供m3u8类型。',
                    'type' => 'object',
                    'additionalProperties' => 
                    array (
                      'type' => 'array',
                      'items' => 
                      array (
                        'type' => 'string',
                        'example' => 'http://***.aliyuncs.com/***8fc5-***f8****.webm?****77650&***xzSQU***',
                        'description' => '回放URL。',
                      ),
                      'description' => '地址列表。',
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"FE22D613-D3C6-4A58-87CA-F21FC85AA08E\\",\\n  \\"Result\\": {\\n    \\"PlaybackUrlMap\\": {\\n      \\"key\\": [\\n        \\"http://***.aliyuncs.com/***8fc5-***f8****.webm?****77650&***xzSQU***\\"\\n      ]\\n    }\\n  }\\n}","errorExample":""},{"type":"xml","example":"<GetClassRecordResponse>\\n    <RequestId>FE22D613-D3C6-4A58-87CA-F21FC85AA08E</RequestId>\\n    <Result>\\n        <PlaybackUrlMap>\\n            <m3u8>http://***.aliyuncs.com/***8fc5-***f8****.webm?****77650&amp;***xzSQU***</m3u8>\\n        </PlaybackUrlMap>\\n    </Result>\\n</GetClassRecordResponse>","errorExample":""}]',
      'title' => '获取课程录制信息',
    ),
    'UpdateShareScreenLayout' => 
    array (
      'summary' => '调用UpdateShareScreenLayout更新共享屏幕布局。可用于课堂场景，直播画面中共享屏幕画面叠加老师摄像头画面。',
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
          'name' => 'AppId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '应用唯一标识，由6位小写字母、数字组成。',
            'description' => '应用唯一标识，由6位小写字母、数字组成。',
            'type' => 'string',
            'required' => true,
            'example' => 'lq****cu',
          ),
        ),
        1 => 
        array (
          'name' => 'ClassId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '课堂唯一标识，由调用CreateClass返回。',
            'description' => '课堂唯一标识，由调用CreateClass返回。',
            'type' => 'string',
            'required' => true,
            'example' => 'AE35****T95F',
          ),
        ),
        2 => 
        array (
          'name' => 'EnableOverlay',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '是否开启叠加老师画面',
            'description' => '是否开启叠加老师画面',
            'type' => 'boolean',
            'required' => true,
            'example' => 'true',
          ),
        ),
        3 => 
        array (
          'name' => 'OverlayX',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '叠加画面X坐标，归一化为1',
            'description' => '叠加画面X坐标，起点为左上角，归一化为1',
            'type' => 'number',
            'format' => 'float',
            'required' => false,
            'example' => '0.7576',
          ),
        ),
        4 => 
        array (
          'name' => 'OverlayY',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '叠加画面Y坐标，归一化为1',
            'description' => '叠加画面Y坐标，起点为左上角，归一化为1',
            'type' => 'number',
            'format' => 'float',
            'required' => false,
            'example' => '0.7576',
          ),
        ),
        5 => 
        array (
          'name' => 'OverlayWidth',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '叠加画面宽度，归一化为1',
            'description' => '叠加画面宽度，归一化为1',
            'type' => 'number',
            'format' => 'float',
            'required' => false,
            'example' => '0.2361',
          ),
        ),
        6 => 
        array (
          'name' => 'OverlayHeight',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '叠加画面高度，归一化为1',
            'description' => '叠加画面高度，归一化为1',
            'type' => 'number',
            'format' => 'float',
            'required' => false,
            'example' => '0.2361',
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
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'FE22D613-D3C6-4A58-87CA-F21FC85AA08E',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"FE22D613-D3C6-4A58-87CA-F21FC85AA08E\\"\\n}","errorExample":""},{"type":"xml","example":"<UpdateShareScreenLayoutResponse>\\n    <RequestId>FE22D613-D3C6-4A58-87CA-F21FC85AA08E</RequestId>\\n</UpdateShareScreenLayoutResponse>","errorExample":""}]',
      'title' => '更新共享屏幕布局',
    ),
    'CreateRoom' => 
    array (
      'summary' => '调用CreateRoom创建一个房间，用户可以在房间内使用直播、白板、音视频通信等功能。',
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
        'operationType' => 'create',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'AppId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '应用唯一标识，由6位小写字母、数字组成。',
            'description' => '应用唯一标识，可以包含小写字母、数字，长度为6个字符。',
            'type' => 'string',
            'required' => true,
            'example' => '7m***q',
          ),
        ),
        1 => 
        array (
          'name' => 'TemplateId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '房间模板唯一标识，当前支持的取值：default，传空默认为default。',
            'description' => '模板ID。取值：

- **default**：默认。

传空值，则默认为**default**。
',
            'type' => 'string',
            'required' => false,
            'example' => 'default',
          ),
        ),
        2 => 
        array (
          'name' => 'RoomId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '房间唯一标识，由字母、数字、符号.和-组成，最大长度36位，传空则随机生成一个房间id。',
            'description' => '房间ID，最大长度36个字符，传空值，则随机生成一个房间ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'AE35-****-T95F',
          ),
        ),
        3 => 
        array (
          'name' => 'Title',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '房间标题，支持中英文，最大长度32位。',
            'description' => '房间标题，支持中英文和数字，最大长度32个字符。',
            'type' => 'string',
            'required' => true,
            'example' => 'RoomTitle001',
          ),
        ),
        4 => 
        array (
          'name' => 'Notice',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '房间公告，支持中英文，最大长度256位。',
            'description' => '房间公告，支持中英文和数字以及常用符号，最大长度256个字符。',
            'type' => 'string',
            'required' => false,
            'example' => 'RoomNotice001',
          ),
        ),
        5 => 
        array (
          'name' => 'RoomOwnerId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '房主用户id，仅支持英文和数字，最大长度36位。',
            'description' => '房主ID，仅支持英文和数字，最大长度36个字符。',
            'type' => 'string',
            'required' => true,
            'example' => 'as****hs',
          ),
        ),
        6 => 
        array (
          'name' => 'Extension',
          'in' => 'formData',
          'style' => 'json',
          'schema' => 
          array (
            'title' => '拓展字段，按需传递，需要额外记录的房间属性。',
            'description' => '拓展字段，按需传递，需要额外记录的房间属性。所有字段键-值长度总和不超过2048字节。',
            'type' => 'object',
            'required' => false,
            'additionalProperties' => 
            array (
              'type' => 'string',
              'required' => false,
              'example' => 'test001',
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
            'title' => 'Schema of Response',
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'FE22D613-D3C6-4A58-87CA-F21FC85AA08E',
              ),
              'Result' => 
              array (
                'title' => 'API请求的返回结果结构体。',
                'description' => '创建房间的返回结果。',
                'type' => 'object',
                'properties' => 
                array (
                  'RoomId' => 
                  array (
                    'title' => '房间id',
                    'description' => '房间ID。',
                    'type' => 'string',
                    'example' => 'AE35-****-T95F',
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
            'errorCode' => 'InvalidRoomId.Room.AlreadyExist',
            'errorMessage' => 'Room is already exist.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"FE22D613-D3C6-4A58-87CA-F21FC85AA08E\\",\\n  \\"Result\\": {\\n    \\"RoomId\\": \\"AE35-****-T95F\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<CreateRoomResponse>\\n    <RequestId>FE22D613-D3C6-4A58-87CA-F21FC85AA08E</RequestId>\\n    <Result>\\n        <RoomId>AE35-****-T95F</RoomId>\\n    </Result>\\n</CreateRoomResponse>","errorExample":""}]',
      'title' => '创建房间',
    ),
    'DeleteRoom' => 
    array (
      'summary' => '调用DeleteRoom删除指定房间，删除后房间无法继续使用。',
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
        'operationType' => 'delete',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'AppId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '应用唯一标识，由6位小写字母、数字组成。',
            'description' => '应用唯一标识，可以包含小写字母、数字，长度为6个字符。',
            'type' => 'string',
            'required' => true,
            'example' => '7m***q',
          ),
        ),
        1 => 
        array (
          'name' => 'RoomId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '房间唯一标识，由字母、数字、符号.和-组成，最大长度36位。',
            'description' => '房间ID，由字母、数字、下划线（_）和小数点（.）组成，最大长度36个字符。',
            'type' => 'string',
            'required' => true,
            'example' => 'AE35-****-T95F',
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
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'FE22D613-D3C6-4A58-87CA-F21FC85AA08E',
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
            'errorCode' => 'InvalidRoomId.Room.NotExist',
            'errorMessage' => 'Room does not exist.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"FE22D613-D3C6-4A58-87CA-F21FC85AA08E\\"\\n}","errorExample":""},{"type":"xml","example":"<DeleteRoomResponse>\\n    <RequestId>FE22D613-D3C6-4A58-87CA-F21FC85AA08E</RequestId>\\n</DeleteRoomResponse>","errorExample":""}]',
      'title' => '删除房间',
    ),
    'UpdateRoom' => 
    array (
      'summary' => '调用UpdateRoom更新房间所有可修改信息。',
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
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'AppId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '应用唯一标识，由6位小写字母、数字组成。',
            'description' => '应用唯一标识，可以包含小写字母、数字，长度为6个字符。',
            'type' => 'string',
            'required' => true,
            'example' => '7m***q',
          ),
        ),
        1 => 
        array (
          'name' => 'RoomId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '房间唯一标识。',
            'description' => '房间ID，可以包含英文字母、数字、下划线（_）和小数点（.），最大长度36个字符。',
            'type' => 'string',
            'required' => true,
            'example' => 'AE35-****-T95F',
          ),
        ),
        2 => 
        array (
          'name' => 'Title',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '房间标题，支持中英文，最大长度32位。',
            'description' => '房间标题，支持中英文，最大长度32个字符。',
            'type' => 'string',
            'required' => false,
            'example' => 'RoomTitle001',
          ),
        ),
        3 => 
        array (
          'name' => 'Notice',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '房间公告，支持中英文，最大长度256位。',
            'description' => '房间公告，支持中英文，最大长度256个字符。',
            'type' => 'string',
            'required' => false,
            'example' => 'RoomNotice001',
          ),
        ),
        4 => 
        array (
          'name' => 'RoomOwnerId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '房主用户id，仅支持英文和数字，最大长度36位。',
            'description' => '房主ID，仅支持英文和数字，最大长度36个字符。',
            'type' => 'string',
            'required' => false,
            'example' => 'as****hs',
          ),
        ),
        5 => 
        array (
          'name' => 'Extension',
          'in' => 'formData',
          'style' => 'json',
          'schema' => 
          array (
            'title' => '拓展字段，按需传递，需要额外记录的房间属性。',
            'description' => '拓展字段，按需传递，需要额外记录的房间属性。',
            'type' => 'object',
            'required' => false,
            'additionalProperties' => 
            array (
              'type' => 'string',
              'required' => false,
              'example' => 'test001',
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
            'title' => 'Schema of Response',
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'FE22D613-D3C6-4A58-87CA-F21FC85AA08E',
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
            'errorCode' => 'InvalidRoomId.Room.NotExist',
            'errorMessage' => 'Room does not exist.',
          ),
          1 => 
          array (
            'errorCode' => 'Forbidden.Room.Deleted',
            'errorMessage' => 'Room has been deleted.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"FE22D613-D3C6-4A58-87CA-F21FC85AA08E\\"\\n}","errorExample":""},{"type":"xml","example":"<UpdateRoomResponse>\\n    <RequestId>FE22D613-D3C6-4A58-87CA-F21FC85AA08E</RequestId>\\n</UpdateRoomResponse>","errorExample":""}]',
      'title' => '更新房间信息',
    ),
    'KickRoomUser' => 
    array (
      'summary' => '调用KickRoomUser接口，实现对房间内某特定用户实施踢出房间操作。',
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
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'AppId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '应用唯一标识，由6位小写字母、数字组成。',
            'description' => '应用唯一标识，由6位小写字母、数字组成。',
            'type' => 'string',
            'required' => true,
            'example' => '7m***q',
          ),
        ),
        1 => 
        array (
          'name' => 'RoomId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '房间唯一标识，由字母、数字、符号.和-组成，最大长度36位，传空则随机生成一个房间id。',
            'description' => '房间的唯一标识，在调用CreateRoom时返回。',
            'type' => 'string',
            'required' => true,
            'example' => 'AE35****T95F',
          ),
        ),
        2 => 
        array (
          'name' => 'UserId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '操作人的用户ID，用于表示谁执行了踢人操作。',
            'description' => '操作人的用户ID，用于表示谁执行了踢人操作。',
            'type' => 'string',
            'required' => true,
            'example' => 'as****hs',
          ),
        ),
        3 => 
        array (
          'name' => 'KickUser',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '被踢出房间的用户ID。',
            'description' => '被踢出房间的用户ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'er****h',
          ),
        ),
        4 => 
        array (
          'name' => 'BlockTime',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '踢出房间时长，有效时间内不能再次进入房间，单位：秒。

- 如果不填写该字段，默认踢出300秒。

- 传0表示永久踢出房间。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '300',
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
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'FE22D613-D3C6-4A58-87CA-F21FC85AA08E',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"FE22D613-D3C6-4A58-87CA-F21FC85AA08E\\"\\n}","errorExample":""},{"type":"xml","example":"<KickRoomUserResponse>\\n    <RequestId>FE22D613-D3C6-4A58-87CA-F21FC85AA08E</RequestId>\\n</KickRoomUserResponse>","errorExample":""}]',
      'title' => '踢出房间用户',
    ),
    'SetUserAdmin' => 
    array (
      'summary' => '调用SetUserAdmin接口，设置房间内某特定用户为管理员。',
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
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'AppId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '应用唯一标识，由6位小写字母、数字组成。',
            'description' => '应用唯一标识，由6位小写字母、数字组成。',
            'type' => 'string',
            'required' => true,
            'example' => '7m***q',
          ),
        ),
        1 => 
        array (
          'name' => 'RoomId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '房间唯一标识，由字母、数字、符号.和-组成，最大长度36位。',
            'description' => '房间的唯一标识，在调用CreateRoom时返回。',
            'type' => 'string',
            'required' => true,
            'example' => 'AE35****T95F',
          ),
        ),
        2 => 
        array (
          'name' => 'UserId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '用户ID',
            'description' => '被设置为管理员的用户ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'er****h',
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
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'FE22D613-D3C6-4A58-87CA-F21FC85AA08E',
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
            'errorCode' => 'Forbidden.Room.AdminNumberOverLimit',
            'errorMessage' => 'Room admin number exceeds limit.',
          ),
          1 => 
          array (
            'errorCode' => 'Forbidden.Room.OwnerCannotBeAdmin',
            'errorMessage' => 'Room owner cannot be admin.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"FE22D613-D3C6-4A58-87CA-F21FC85AA08E\\"\\n}","errorExample":""},{"type":"xml","example":"<SetUserAdminResponse>\\n    <RequestId>FE22D613-D3C6-4A58-87CA-F21FC85AA08E</RequestId>\\n</SetUserAdminResponse>","errorExample":""}]',
      'title' => '设置用户管理员',
      'description' => '房主不能被操作。单房间管理员数量上限5人。管理员拥有踢人、禁言/取消禁言、修改房间信息的权限。',
    ),
    'CancelUserAdmin' => 
    array (
      'summary' => '调用CancelUserAdmin接口，取消房间内某特定用户管理员身份，变成普通观众。',
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
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'AppId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '应用唯一标识，由6位小写字母、数字组成。',
            'description' => '应用唯一标识，由6位小写字母、数字组成。',
            'type' => 'string',
            'required' => true,
            'example' => '7m***q',
          ),
        ),
        1 => 
        array (
          'name' => 'RoomId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '房间唯一标识，由字母、数字、符号.和-组成，最大长度36位。',
            'description' => '房间的唯一标识，在调用CreateRoom时返回。',
            'type' => 'string',
            'required' => true,
            'example' => 'AE35****T95F',
          ),
        ),
        2 => 
        array (
          'name' => 'UserId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '用户ID',
            'description' => '被取消管理员的用户ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'er****h',
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
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'FE22D613-D3C6-4A58-87CA-F21FC85AA08E',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"FE22D613-D3C6-4A58-87CA-F21FC85AA08E\\"\\n}","errorExample":""},{"type":"xml","example":"<CancelUserAdminResponse>\\n    <RequestId>FE22D613-D3C6-4A58-87CA-F21FC85AA08E</RequestId>\\n</CancelUserAdminResponse>","errorExample":""}]',
      'title' => '取消用户管理员',
      'description' => '房主不能被操作。如果用户不存在或者已经是普通用户，默认返回成功。',
    ),
    'GetRoom' => 
    array (
      'summary' => '调用GetRoom查询指定房间信息，包含房间信息和使用中的原子能力信息。',
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
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'AppId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '应用唯一标识，由6位小写字母、数字组成。',
            'description' => '应用唯一标识，可以包含小写字母、数字，长度为6个字符。',
            'type' => 'string',
            'required' => true,
            'example' => '7m***q',
          ),
        ),
        1 => 
        array (
          'name' => 'RoomId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '房间唯一标识，由字母、数字、符号.和-组成，最大长度36位。',
            'description' => '房间ID，由字母、数字、小数点（.）和短横线（-）组成，最大长度36个字符。',
            'type' => 'string',
            'required' => true,
            'example' => 'AE35-****-T95F',
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
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'FE22D613-D3C6-4A58-87CA-F21FC85AA08E',
              ),
              'Result' => 
              array (
                'title' => '查询房间信息返回结果。',
                'description' => '查询房间的返回结果。',
                'type' => 'object',
                'properties' => 
                array (
                  'RoomInfo' => 
                  array (
                    'title' => '房间信息。',
                    'description' => '房间信息。',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'RoomId' => 
                      array (
                        'title' => '房间唯一标识。',
                        'description' => '房间唯一标识。',
                        'type' => 'string',
                        'example' => 'AE35-****-T95F',
                      ),
                      'Title' => 
                      array (
                        'title' => '房间标题。',
                        'description' => '房间标题。',
                        'type' => 'string',
                        'example' => 'RoomTitle001',
                      ),
                      'CreateTime' => 
                      array (
                        'title' => '房间创建时间戳，单位：毫秒。',
                        'description' => '房间创建时间戳，单位：毫秒。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'example' => '1624589848000',
                      ),
                      'Notice' => 
                      array (
                        'title' => '房间公告。',
                        'description' => '房间公告。',
                        'type' => 'string',
                        'example' => 'RoomNotice001',
                      ),
                      'RoomOwnerId' => 
                      array (
                        'title' => '房主用户id。',
                        'description' => '房主用户ID。',
                        'type' => 'string',
                        'example' => 'as****hs',
                      ),
                      'Uv' => 
                      array (
                        'title' => '访问用户数。',
                        'description' => '访问用户数。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'example' => '100',
                      ),
                      'OnlineCount' => 
                      array (
                        'title' => '在线用户数。',
                        'description' => '在线用户数。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'example' => '50',
                      ),
                      'PluginInstanceInfoList' => 
                      array (
                        'title' => '活跃插件列表。',
                        'description' => '活跃插件列表。',
                        'type' => 'array',
                        'items' => 
                        array (
                          'type' => 'object',
                          'properties' => 
                          array (
                            'PluginType' => 
                            array (
                              'title' => '插件唯一标识，取值：live-直播，wb-白板，chat-聊天，rtc。',
                              'description' => '插件唯一标识，取值：
- **live**：直播。
- **wb**：白板。
- **chat**：聊天。
- **RTC**：音视频通信。',
                              'type' => 'string',
                              'example' => 'live',
                            ),
                            'PluginId' => 
                            array (
                              'title' => '插件实例唯一标识。',
                              'description' => '插件实例唯一标识。',
                              'type' => 'string',
                              'example' => 'HASU-****-ASHD',
                            ),
                            'CreateTime' => 
                            array (
                              'title' => '插件实例创建时间戳，单位：毫秒。',
                              'description' => '插件实例创建时间戳，单位：毫秒。',
                              'type' => 'integer',
                              'format' => 'int64',
                              'example' => '1624589848000',
                            ),
                            'Extension' => 
                            array (
                              'title' => '插件拓展字段。',
                              'description' => '插件拓展字段。',
                              'type' => 'object',
                              'additionalProperties' => 
                              array (
                                'type' => 'string',
                                'description' => '插件拓展信息。',
                                'example' => 'test001',
                              ),
                            ),
                          ),
                        ),
                      ),
                      'AppId' => 
                      array (
                        'title' => '应用唯一标识，由6位小写字母、数字组成。',
                        'description' => '应用唯一标识，可以包含小写字母、数字，长度为6个字符。',
                        'type' => 'string',
                        'example' => 'lq****cu',
                      ),
                      'TemplateId' => 
                      array (
                        'title' => '创建房间使用的模板id。',
                        'description' => '创建房间使用的模板ID。',
                        'type' => 'string',
                        'example' => 'default',
                      ),
                      'Extension' => 
                      array (
                        'title' => '房间拓展字段。',
                        'description' => '房间拓展字段。',
                        'type' => 'object',
                        'additionalProperties' => 
                        array (
                          'type' => 'string',
                          'example' => 'test001',
                          'description' => '房间拓展信息。',
                        ),
                      ),
                      'Pv' => 
                      array (
                        'title' => '访问用户人次。',
                        'description' => '访问用户人次。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'example' => '200',
                      ),
                      'AdminIdList' => 
                      array (
                        'title' => '管理员ID列表。',
                        'description' => '管理员ID列表。',
                        'type' => 'array',
                        'items' => 
                        array (
                          'description' => '管理员ID。',
                          'type' => 'string',
                          'example' => 'as****hs',
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
            'errorCode' => 'InvalidRoomId.Room.NotExist',
            'errorMessage' => 'Room does not exist.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"FE22D613-D3C6-4A58-87CA-F21FC85AA08E\\",\\n  \\"Result\\": {\\n    \\"RoomInfo\\": {\\n      \\"RoomId\\": \\"AE35-****-T95F\\",\\n      \\"Title\\": \\"RoomTitle001\\",\\n      \\"CreateTime\\": 1624589848000,\\n      \\"Notice\\": \\"RoomNotice001\\",\\n      \\"RoomOwnerId\\": \\"as****hs\\",\\n      \\"Uv\\": 100,\\n      \\"OnlineCount\\": 50,\\n      \\"PluginInstanceInfoList\\": [\\n        {\\n          \\"PluginType\\": \\"live\\",\\n          \\"PluginId\\": \\"HASU-****-ASHD\\",\\n          \\"CreateTime\\": 1624589848000,\\n          \\"Extension\\": {\\n            \\"key\\": \\"test001\\"\\n          }\\n        }\\n      ],\\n      \\"AppId\\": \\"lq****cu\\",\\n      \\"TemplateId\\": \\"default\\",\\n      \\"Extension\\": {\\n        \\"key\\": \\"test001\\"\\n      },\\n      \\"Pv\\": 200,\\n      \\"AdminIdList\\": [\\n        \\"as****hs\\"\\n      ]\\n    }\\n  }\\n}","errorExample":""},{"type":"xml","example":"<GetRoomResponse>\\n    <RequestId>FE22D613-D3C6-4A58-87CA-F21FC85AA08E</RequestId>\\n    <Result>\\n        <RoomInfo>\\n            <RoomId>AE35-****-T95F</RoomId>\\n            <Title>RoomTitle001</Title>\\n            <CreateTime>1624589848000</CreateTime>\\n            <Notice>RoomNotice001</Notice>\\n            <RoomOwnerId>as****hs</RoomOwnerId>\\n            <Uv>100</Uv>\\n            <OnlineCount>50</OnlineCount>\\n            <PluginInstanceInfoList>\\n                <PluginType>live</PluginType>\\n                <PluginId>HASU-****-ASHD</PluginId>\\n                <CreateTime>1624589848000</CreateTime>\\n                <Extension>\\n                    <key>test001</key>\\n                </Extension>\\n            </PluginInstanceInfoList>\\n            <AppId>lq****cu</AppId>\\n            <TemplateId>default</TemplateId>\\n            <Extension>\\n                <key>test001</key>\\n            </Extension>\\n            <Pv>200</Pv>\\n            <AdminIdList>as****hs</AdminIdList>\\n        </RoomInfo>\\n    </Result>\\n</GetRoomResponse>","errorExample":""}]',
      'title' => '查询房间详情',
    ),
    'ListRooms' => 
    array (
      'summary' => '调用ListRooms查询应用下的房间列表，包含每个房间的信息和正在使用的原子能力信息。',
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
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'AppId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '应用唯一标识，由6位小写字母、数字组成。',
            'description' => '应用唯一标识，可以包含小写字母、数字，长度为6个字符。',
            'type' => 'string',
            'required' => true,
            'example' => '7m***q',
          ),
        ),
        1 => 
        array (
          'name' => 'PageNumber',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '查询页码，从1开始，传空默认查询第1页。',
            'description' => '查询页码，从1开始，参数为空默认查询第1页。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'minimum' => '1',
            'example' => '1',
          ),
        ),
        2 => 
        array (
          'name' => 'PageSize',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '每页显示个数，最大支持50，参数为空默认显示个数为10。',
            'description' => '每页显示个数，最大支持50，参数为空默认显示个数为10。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '50',
            'exclusiveMaximum' => false,
            'minimum' => '1',
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
            'title' => 'Schema of Response',
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => '请求ID。',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'FE22D613-D3C6-4A58-87CA-F21FC85AA08E',
              ),
              'Result' => 
              array (
                'title' => 'API请求的返回结果结构体。',
                'description' => '查询房间列表的返回结果。',
                'type' => 'object',
                'properties' => 
                array (
                  'TotalCount' => 
                  array (
                    'title' => '该应用的房间总数。',
                    'description' => '房间总数。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1000',
                  ),
                  'PageTotal' => 
                  array (
                    'title' => '该应用的房间总页数。',
                    'description' => '房间列表总页数。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '100',
                  ),
                  'HasMore' => 
                  array (
                    'title' => '是否还有下一页房间列表。',
                    'description' => '是否还有下一页。',
                    'type' => 'boolean',
                    'example' => 'true',
                  ),
                  'RoomInfoList' => 
                  array (
                    'title' => '房间列表信息。',
                    'description' => '房间列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '房间对象。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'RoomId' => 
                        array (
                          'title' => '房间唯一标识。',
                          'description' => '房间ID，由字母、数字、小数点（.）和短横线（-）组成，最大长度36个字符。',
                          'type' => 'string',
                          'example' => 'AE35-****-T95F',
                        ),
                        'Title' => 
                        array (
                          'title' => '房间标题。',
                          'description' => '房间标题。',
                          'type' => 'string',
                          'example' => 'RoomTitle001',
                        ),
                        'RoomOwnerId' => 
                        array (
                          'title' => '房主用户id。',
                          'description' => '房主ID。',
                          'type' => 'string',
                          'example' => 'as****hs',
                        ),
                        'Notice' => 
                        array (
                          'title' => '房间公告。',
                          'description' => '房间公告。',
                          'type' => 'string',
                          'example' => 'RoomNotice001',
                        ),
                        'Uv' => 
                        array (
                          'title' => '用户访问数。',
                          'description' => '用户访问数。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '100',
                        ),
                        'OnlineCount' => 
                        array (
                          'title' => '用户在线数。',
                          'description' => '用户在线数。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '50',
                        ),
                        'PluginInstanceInfoList' => 
                        array (
                          'title' => '活跃插件列表。',
                          'description' => '活跃插件列表。',
                          'type' => 'array',
                          'items' => 
                          array (
                            'description' => '活跃插件对象。',
                            'type' => 'object',
                            'properties' => 
                            array (
                              'PluginType' => 
                              array (
                                'title' => '插件唯一标识，取值：live-直播，wb-白板，chat-聊天，rtc。',
                                'description' => '插件类型。取值：
- **live**：直播。
- **chat**：聊天。
- **rtc**：实时音视频通讯。
- **wb**：白板。',
                                'type' => 'string',
                                'example' => 'live',
                              ),
                              'PluginId' => 
                              array (
                                'title' => '插件实例唯一标识。',
                                'description' => '插件实例ID。',
                                'type' => 'string',
                                'example' => 'H63U-****-AS7D',
                              ),
                              'CreateTime' => 
                              array (
                                'title' => '插件实例创建时间戳，单位：毫秒。',
                                'description' => '插件实例创建时间戳，单位：毫秒。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '1624589848000',
                              ),
                              'Extension' => 
                              array (
                                'title' => '插件拓展字段。',
                                'description' => '插件拓展字段。',
                                'type' => 'object',
                                'additionalProperties' => 
                                array (
                                  'type' => 'string',
                                  'description' => '拓展字段值。',
                                  'example' => 'test001',
                                ),
                              ),
                            ),
                          ),
                        ),
                        'CreateTime' => 
                        array (
                          'title' => '房间创建时间戳，单位：毫秒。',
                          'description' => '房间创建时间戳。',
                          'type' => 'string',
                          'example' => '1624589848000',
                        ),
                        'AppId' => 
                        array (
                          'title' => '应用唯一标识，由6位小写字母、数字组成。',
                          'description' => '应用唯一标识，可以包含小写字母、数字，长度为6个字符。',
                          'type' => 'string',
                          'example' => '7m***q',
                        ),
                        'TemplateId' => 
                        array (
                          'title' => '创建房间使用的模板id。',
                          'description' => '创建房间使用的模板ID。',
                          'type' => 'string',
                          'example' => 'default',
                        ),
                        'Extension' => 
                        array (
                          'title' => '房间拓展字段。',
                          'description' => '房间拓展字段。',
                          'type' => 'object',
                          'additionalProperties' => 
                          array (
                            'type' => 'string',
                            'description' => '拓展字段值。',
                            'example' => 'test001',
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
      'errorCodes' => 
      array (
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'Forbidden.Room.InvalidPageNumber',
            'errorMessage' => 'PageNumber is invalid.',
          ),
          1 => 
          array (
            'errorCode' => 'Forbidden.Room.InvalidPageSize',
            'errorMessage' => 'PageSize exceeds maximum limit.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"FE22D613-D3C6-4A58-87CA-F21FC85AA08E\\",\\n  \\"Result\\": {\\n    \\"TotalCount\\": 1000,\\n    \\"PageTotal\\": 100,\\n    \\"HasMore\\": true,\\n    \\"RoomInfoList\\": [\\n      {\\n        \\"RoomId\\": \\"AE35-****-T95F\\",\\n        \\"Title\\": \\"RoomTitle001\\",\\n        \\"RoomOwnerId\\": \\"as****hs\\",\\n        \\"Notice\\": \\"RoomNotice001\\",\\n        \\"Uv\\": 100,\\n        \\"OnlineCount\\": 50,\\n        \\"PluginInstanceInfoList\\": [\\n          {\\n            \\"PluginType\\": \\"live\\",\\n            \\"PluginId\\": \\"H63U-****-AS7D\\",\\n            \\"CreateTime\\": 1624589848000,\\n            \\"Extension\\": {\\n              \\"key\\": \\"test001\\"\\n            }\\n          }\\n        ],\\n        \\"CreateTime\\": \\"1624589848000\\",\\n        \\"AppId\\": \\"7m***q\\",\\n        \\"TemplateId\\": \\"default\\",\\n        \\"Extension\\": {\\n          \\"key\\": \\"test001\\"\\n        }\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<ListRoomsResponse>\\n    <RequestId>FE22D613-D3C6-4A58-87CA-F21FC85AA08E</RequestId>\\n    <Result>\\n        <TotalCount>1000</TotalCount>\\n        <PageTotal>100</PageTotal>\\n        <HasMore>true</HasMore>\\n        <RoomInfoList>\\n            <RoomId>AE35-****-T95F</RoomId>\\n            <Title>RoomTitle001</Title>\\n            <RoomOwnerId>as****hs</RoomOwnerId>\\n            <Notice>RoomNotice001</Notice>\\n            <Uv>100</Uv>\\n            <OnlineCount>50</OnlineCount>\\n            <PluginInstanceInfoList>\\n                <PluginType>live</PluginType>\\n                <PluginId>H63U-****-AS7D</PluginId>\\n                <CreateTime>1624589848000</CreateTime>\\n                <Extension>\\n                    <key>test001</key>\\n                </Extension>\\n            </PluginInstanceInfoList>\\n            <CreateTime>1624589848000</CreateTime>\\n            <AppId>7m***q</AppId>\\n            <TemplateId>default</TemplateId>\\n            <Extension>\\n                <key>test001</key>\\n            </Extension>\\n        </RoomInfoList>\\n    </Result>\\n</ListRoomsResponse>","errorExample":""}]',
      'title' => '查询房间列表',
    ),
    'ListRoomUsers' => 
    array (
      'summary' => '调用ListRoomUsers分页查询房间内的实时用户列表。',
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
          'name' => 'AppId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '应用唯一标识，由6位小写字母、数字组成。',
            'description' => '用户的应用ID，在控制台创建应用时生成。包含小写字母、数字，长度为6个字符。',
            'type' => 'string',
            'required' => true,
            'example' => '7m***q',
          ),
        ),
        1 => 
        array (
          'name' => 'PageNumber',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '查询页码，从1开始，传空默认查询第1页。',
            'description' => '查询页码，从1开始，传空默认查询第1页。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'minimum' => '1',
            'example' => '1',
          ),
        ),
        2 => 
        array (
          'name' => 'PageSize',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '每页显示个数，最大支持50，参数为空默认显示个数为10。',
            'description' => '每页显示个数，最大支持100，参数为空默认显示个数为50。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '50',
            'exclusiveMaximum' => false,
            'minimum' => '1',
            'example' => '10',
          ),
        ),
        3 => 
        array (
          'name' => 'RoomId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '房间ID，最大长度36个字符。',
            'description' => '房间ID，由字母、数字、下划线（_）和小数点（.）组成，最大长度36个字符。',
            'type' => 'string',
            'required' => true,
            'example' => 'AE35-****-T95F',
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
              'RequestId' => 
              array (
                'title' => '请求ID。',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'FE22D613-D3C6-4A58-87CA-F21FC85AA08E',
              ),
              'Result' => 
              array (
                'title' => 'API请求的返回结果结构体。',
                'description' => '分页查询房间用户列表返回的结果。',
                'type' => 'object',
                'properties' => 
                array (
                  'TotalCount' => 
                  array (
                    'title' => '该房间的用户总数。',
                    'description' => '房间内的用户总数。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1000',
                  ),
                  'PageTotal' => 
                  array (
                    'title' => '该房间的用户总页数。',
                    'description' => '房间内的用户总页数。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '100',
                  ),
                  'HasMore' => 
                  array (
                    'title' => '是否还有下一页用户列表。',
                    'description' => '是否还有下一页用户列表。',
                    'type' => 'boolean',
                    'example' => 'true',
                  ),
                  'RoomUserList' => 
                  array (
                    'title' => '房间用户列表信息。',
                    'description' => '房间用户列表信息。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'UserId' => 
                        array (
                          'title' => '用户唯一标识。',
                          'description' => '用户唯一标识。',
                          'type' => 'string',
                          'example' => 'as****hs',
                        ),
                        'Nick' => 
                        array (
                          'title' => '用户昵称。',
                          'description' => '用户昵称。',
                          'type' => 'string',
                          'example' => 'User001',
                        ),
                        'Extension' => 
                        array (
                          'title' => '用户拓展字段。',
                          'description' => '用户扩展字段。',
                          'type' => 'object',
                          'additionalProperties' => 
                          array (
                            'type' => 'string',
                            'example' => 'test001',
                            'description' => '用户扩展信息。',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"FE22D613-D3C6-4A58-87CA-F21FC85AA08E\\",\\n  \\"Result\\": {\\n    \\"TotalCount\\": 1000,\\n    \\"PageTotal\\": 100,\\n    \\"HasMore\\": true,\\n    \\"RoomUserList\\": [\\n      {\\n        \\"UserId\\": \\"as****hs\\",\\n        \\"Nick\\": \\"User001\\",\\n        \\"Extension\\": {\\n          \\"key\\": \\"test001\\"\\n        }\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<ListRoomUsersResponse>\\n    <RequestId>FE22D613-D3C6-4A58-87CA-F21FC85AA08E</RequestId>\\n    <Result>\\n        <TotalCount>1000</TotalCount>\\n        <PageTotal>100</PageTotal>\\n        <HasMore>true</HasMore>\\n        <RoomUserList>\\n            <UserId>as****hs</UserId>\\n            <Nick>User001</Nick>\\n            <Extension>\\n                <key>test001</key>\\n            </Extension>\\n        </RoomUserList>\\n    </Result>\\n</ListRoomUsersResponse>","errorExample":""}]',
      'title' => '查询房间用户列表',
    ),
    'CreateSensitiveWord' => 
    array (
      'summary' => '自定义敏感词。',
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
          'name' => 'AppId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '用户的应用ID，在控制台创建应用时生成。包含小写字母、数字，长度为6个字符。',
            'description' => '用户的应用ID，在控制台创建应用时生成。包含小写字母、数字，长度为6个字符。',
            'type' => 'string',
            'required' => true,
            'example' => '7m***q',
          ),
        ),
        1 => 
        array (
          'name' => 'WordList',
          'in' => 'formData',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '敏感词列表，敏感词支持中文、字母数字，暂不支持英文敏感词，一次最多可以创建100个敏感词，单个敏感词的长度不得超过20个字符。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '需要添加的敏感词。敏感词支持中文、字母数字，暂不支持英文敏感词，一次最多可以创建100个敏感词，单个敏感词的长度不得超过20个字符。',
              'type' => 'string',
              'required' => true,
              'example' => '测试敏感词',
            ),
            'required' => true,
            'docRequired' => false,
            'maxItems' => 100,
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
              'RequestId' => 
              array (
                'title' => '请求ID。',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'FE22D613-D3C6-4A58-87CA-F21FC85AA08E',
              ),
              'Result' => 
              array (
                'title' => '调用发送直播间弹幕的返回结果。',
                'description' => '调用创建敏感词的返回结果。',
                'type' => 'object',
                'properties' => 
                array (
                  'Success' => 
                  array (
                    'description' => '调用是否成功。',
                    'type' => 'boolean',
                    'example' => 'true',
                  ),
                ),
                'example' => '0io**Fs6Q384',
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
            'errorCode' => 'InvalidAppId.Error',
            'errorMessage' => 'The specified AppId is invalid.',
          ),
          1 => 
          array (
            'errorCode' => 'Forbidden.SensitiveWordCount.ExceedLimit',
            'errorMessage' => 'The total count of sensitive word exceeds the limit.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"FE22D613-D3C6-4A58-87CA-F21FC85AA08E\\",\\n  \\"Result\\": {\\n    \\"Success\\": true\\n  }\\n}","errorExample":""},{"type":"xml","example":"<CreateSensitiveWordResponse>\\n    <RequestId>ER52****O9CA</RequestId>\\n    <Result>\\n        <Success>true</Success>\\n    </Result>\\n</CreateSensitiveWordResponse>","errorExample":""}]',
      'title' => '自定义敏感词',
      'description' => '## QPS限制
该接口的QPS限制为单用户10次/秒。

## 使用限制
单个应用下最多可以自定义1000个敏感词。
',
    ),
    'DeleteSensitiveWord' => 
    array (
      'summary' => '调用DeleteSensitiveWord删除敏感词。',
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
          'name' => 'AppId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '弹幕发送者的用户ID，最大长度不超过32个字节。',
            'description' => '用户的应用ID，在控制台创建应用时生成。包含小写字母、数字，长度为6个字符。',
            'type' => 'string',
            'required' => true,
            'example' => '7m***q',
          ),
        ),
        1 => 
        array (
          'name' => 'WordList',
          'in' => 'formData',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '要删除敏感词列表。仅有被创建过的敏感词才会被正确删除。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '需要删除的敏感词。',
              'type' => 'string',
              'required' => false,
              'example' => '测试敏感词',
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
            'title' => 'Schema of Response',
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => '请求ID。',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'FE22D613-D3C6-4A58-87CA-F21FC85AA08E',
              ),
              'Result' => 
              array (
                'title' => '调用发送直播间弹幕的返回结果。',
                'description' => '调用删除敏感词的返回结果。',
                'type' => 'object',
                'properties' => 
                array (
                  'Success' => 
                  array (
                    'description' => '调用是否成功。',
                    'type' => 'boolean',
                    'example' => 'true',
                  ),
                ),
                'example' => '0io**Fs6Q384',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"FE22D613-D3C6-4A58-87CA-F21FC85AA08E\\",\\n  \\"Result\\": {\\n    \\"Success\\": true\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DeleteSensitiveWordResponse>\\n    <RequestId>FE22D613-D3C6-4A58-87CA-F21FC85AA08E</RequestId>\\n    <Result>\\n        <Success>true</Success>\\n    </Result>\\n</DeleteSensitiveWordResponse>","errorExample":""}]',
      'title' => '删除敏感词',
      'description' => '## QPS限制
该接口的QPS限制为单用户10次/秒。',
    ),
    'ListSensitiveWord' => 
    array (
      'summary' => '调用ListSensitiveWord查询敏感词。',
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
          'name' => 'AppId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '弹幕发送者的用户ID，最大长度不超过32个字节。',
            'description' => '用户的应用ID，在控制台创建应用时生成。包含小写字母、数字，长度为6个字符。',
            'type' => 'string',
            'required' => true,
            'example' => '7m***q',
          ),
        ),
        1 => 
        array (
          'name' => 'PageNum',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '分页查询的当前页，从1开始，每次分页查询时递增加1。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'minimum' => '1',
            'example' => '1',
            'default' => '1',
          ),
        ),
        2 => 
        array (
          'name' => 'PageSize',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '单次分页查询的大小。如果不填，默认为100，如果超过100，则被限制为100。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '100',
            'minimum' => '1',
            'example' => '100',
            'default' => '100',
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
              'RequestId' => 
              array (
                'title' => '请求ID。',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'FE22D613-D3C6-4A58-87CA-F21FC85AA08E',
              ),
              'Result' => 
              array (
                'title' => '调用发送直播间弹幕的返回结果。',
                'description' => '调用查询敏感词的返回结果。',
                'type' => 'object',
                'properties' => 
                array (
                  'WordList' => 
                  array (
                    'description' => '敏感词的列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '示例敏感词。',
                      'type' => 'string',
                      'example' => '测试敏感词',
                    ),
                  ),
                  'TotalCount' => 
                  array (
                    'description' => '总共添加的敏感词总数。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '100',
                  ),
                ),
                'example' => '0io**Fs6Q384',
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
            'errorCode' => 'InvalidAppId.Error',
            'errorMessage' => 'The specified AppId is invalid.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"FE22D613-D3C6-4A58-87CA-F21FC85AA08E\\",\\n  \\"Result\\": {\\n    \\"WordList\\": [\\n      \\"测试敏感词\\"\\n    ],\\n    \\"TotalCount\\": 100\\n  }\\n}","errorExample":""},{"type":"xml","example":"<ListSensitiveWordResponse>\\n    <RequestId>FE22D613-D3C6-4A58-87CA-F21FC85AA08E</RequestId>\\n    <Result>\\n        <WordList>测试敏感词</WordList>\\n        <TotalCount>100</TotalCount>\\n    </Result>\\n</ListSensitiveWordResponse>","errorExample":""}]',
      'title' => '查询敏感词',
      'description' => '## QPS限制
该接口的QPS限制为单用户10次/秒。',
    ),
    'CancelBanAllComment' => 
    array (
      'summary' => '调用CancelBanAllComment接口，取消房间内全员禁言的限制。',
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'AppId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '应用唯一标识，由6位小写字母、数字组成。',
            'description' => '用户的应用ID，在控制台创建应用时生成。包含小写字母、数字，长度为6个字符。',
            'type' => 'string',
            'required' => true,
            'example' => '7m***q',
          ),
        ),
        1 => 
        array (
          'name' => 'RoomId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '房间唯一标识，由调用CreateRoom返回。',
            'description' => '房间的唯一标识，在调用CreateRoom时返回。',
            'type' => 'string',
            'required' => true,
            'example' => 'AE35****T95F',
          ),
        ),
        2 => 
        array (
          'name' => 'UserId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '用户在房间内的唯一标识',
            'description' => '操作人的用户ID，用于表示谁执行了取消全员禁言操作。',
            'type' => 'string',
            'required' => true,
            'example' => 'as****hs',
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
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'FE22D613-D3C6-4A58-87CA-F21FC85AA08E',
              ),
              'Result' => 
              array (
                'title' => '操作成功标识',
                'description' => '获取取消全员禁言的调用结果。true表示取消全员禁言成功，false表示取消全员禁言失败。',
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
            'errorCode' => 'Forbidden.Chat.NoPermissionToOperate',
            'errorMessage' => 'The user has no permission to operate.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"FE22D613-D3C6-4A58-87CA-F21FC85AA08E\\",\\n  \\"Result\\": true\\n}","errorExample":""},{"type":"xml","example":"<CancelBanAllCommentResponse>\\n    <RequestId>FE22D613-D3C6-4A58-87CA-F21FC85AA08E</RequestId>\\n    <Result>true</Result>\\n</CancelBanAllCommentResponse>","errorExample":""}]',
      'title' => '取消全员禁言',
      'extraInfo' => '检查用户是否有权限取消全员禁言，若无权限则报错误Forbidden.Comment.NoPermissionToOperate。',
    ),
    'CancelBanComment' => 
    array (
      'summary' => '调用CancelBanComment接口，取消对房间内某特定用户的禁言。',
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
          'name' => 'AppId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '应用唯一标识，由6位小写字母、数字组成。',
            'description' => '用户的应用ID，在控制台创建应用时生成。包含小写字母、数字，长度为6个字符。',
            'type' => 'string',
            'required' => true,
            'example' => '7m***q',
          ),
        ),
        1 => 
        array (
          'name' => 'RoomId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '房间唯一标识，由调用CreateRoom返回。',
            'description' => '房间的唯一标识，在调用CreateRoom时返回。',
            'type' => 'string',
            'required' => true,
            'example' => 'AE35****T95F',
          ),
        ),
        2 => 
        array (
          'name' => 'UserId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '用户在房间内的唯一标识',
            'description' => '操作人的用户ID，用于表示谁执行了取消禁言的操作。',
            'type' => 'string',
            'required' => true,
            'example' => 'as****hs',
          ),
        ),
        3 => 
        array (
          'name' => 'BanCommentUser',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '取消禁言的用户唯一标识',
            'description' => '被取消禁言的用户ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'er****h',
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
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'FE22D613-D3C6-4A58-87CA-F21FC85AA08E',
              ),
              'Result' => 
              array (
                'title' => '操作成功标识',
                'description' => '调用CancelBanComment的返回结果。true代表取消禁言成功，false代表取消禁言失败。',
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
            'errorCode' => 'Forbidden.Chat.NoPermissionToOperate',
            'errorMessage' => 'The user has no permission to operate.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"FE22D613-D3C6-4A58-87CA-F21FC85AA08E\\",\\n  \\"Result\\": true\\n}","errorExample":""},{"type":"xml","example":"<CancelBanCommentResponse>\\n    <RequestId>FE22D613-D3C6-4A58-87CA-F21FC85AA08E</RequestId>\\n    <Result>true</Result>\\n</CancelBanCommentResponse>","errorExample":""}]',
      'title' => '取消禁言',
      'extraInfo' => '该接口仅限拥有取消禁言权限的用户调用，否则报错Forbidden.Comment.NoPermissionToOperate。',
    ),
    'BanAllComment' => 
    array (
      'summary' => '调用BanAllComment接口，禁言房间内所有用户。',
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'AppId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '应用唯一标识，由6位小写字母、数字组成。',
            'description' => '用户的应用ID，在控制台创建应用时生成。包含小写字母、数字，长度为6个字符。',
            'type' => 'string',
            'required' => true,
            'example' => '7m***q',
          ),
        ),
        1 => 
        array (
          'name' => 'RoomId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '房间唯一标识，由调用CreateRoom返回。',
            'description' => '房间的唯一标识，在调用CreateRoom时返回。',
            'type' => 'string',
            'required' => true,
            'example' => 'AE35****T95F',
          ),
        ),
        2 => 
        array (
          'name' => 'UserId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '用户在房间内的唯一标识',
            'description' => '操作人的用户ID，用于表示谁执行了全员禁言操作。',
            'type' => 'string',
            'required' => true,
            'example' => 'as****hs',
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
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'FE22D613-D3C6-4A58-87CA-F21FC85AA08E',
              ),
              'Result' => 
              array (
                'title' => '操作成功标识',
                'description' => '获取全员禁言的调用结果。',
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
            'errorCode' => 'Forbidden.Chat.NoPermissionToOperate',
            'errorMessage' => 'The user has no permission to operate.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"FE22D613-D3C6-4A58-87CA-F21FC85AA08E\\",\\n  \\"Result\\": true\\n}","errorExample":""},{"type":"xml","example":"<BanAllCommentResponse>\\n    <RequestId>FE22D613-D3C6-4A58-87CA-F21FC85AA08E</RequestId>\\n    <Result>true</Result>\\n</BanAllCommentResponse>","errorExample":""}]',
      'title' => '全员禁言',
      'extraInfo' => '检查用户是否有权限禁言全员，若无权限则报错误Forbidden.Comment.NoPermissionToOperate。',
    ),
    'BanComment' => 
    array (
      'summary' => '调用BanComment接口，实现对房间内某特定用户实施禁言操作。',
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'AppId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '应用唯一标识，由6位小写字母、数字组成。',
            'description' => '用户的应用ID，在控制台创建应用时生成。包含小写字母、数字，长度为6个字符。',
            'type' => 'string',
            'required' => true,
            'example' => '7m***q',
          ),
        ),
        1 => 
        array (
          'name' => 'RoomId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '房间唯一标识，由调用CreateRoom返回。',
            'description' => '房间的唯一标识，在调用CreateRoom时返回。',
            'type' => 'string',
            'required' => true,
            'example' => 'AE35****T95F',
          ),
        ),
        2 => 
        array (
          'name' => 'UserId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '用户在房间内的唯一标识',
            'description' => '操作人的用户ID，用于表示谁执行了禁言操作。',
            'type' => 'string',
            'required' => true,
            'example' => 'as****hs',
          ),
        ),
        3 => 
        array (
          'name' => 'BanCommentUser',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '被禁言的用户在房间内的唯一标识',
            'description' => '被禁言的用户ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'er****h',
          ),
        ),
        4 => 
        array (
          'name' => 'BanCommentTime',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '禁言时长（秒）',
            'description' => '禁言时长，单位：秒。

- 如果不填写该字段，默认禁言30秒。

- 传0表示永久禁言。

- 最大值不得超过24小时，如果超过，会被限制为24小时。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '30',
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
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'FE22D613-D3C6-4A58-87CA-F21FC85AA08E',
              ),
              'Result' => 
              array (
                'title' => '操作是否成功',
                'description' => '获取禁言操作调用结果，true代表禁言成功，false代表禁言失败。',
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
            'errorCode' => 'Forbidden.Chat.NoPermissionToOperate',
            'errorMessage' => 'The user has no permission to operate.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"FE22D613-D3C6-4A58-87CA-F21FC85AA08E\\",\\n  \\"Result\\": true\\n}","errorExample":""},{"type":"xml","example":"<BanCommentResponse>\\n    <RequestId>FE22D613-D3C6-4A58-87CA-F21FC85AA08E</RequestId>\\n    <Result>true</Result>\\n</BanCommentResponse>","errorExample":""}]',
      'title' => '禁言',
      'extraInfo' => '该接口仅限拥有禁言权限的用户调用，否则报错Forbidden.Comment.NoPermissionToOperate。',
    ),
    'SendCustomMessageToAll' => 
    array (
      'summary' => '调用SendCustomMessageToAll向房间中全部在线成员发送自定义消息。',
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
          'name' => 'AppId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '应用唯一标识，由6位小写字母、数字组成。',
            'description' => '用户的应用ID，在控制台创建应用时生成。包含小写字母、数字，长度为6个字符。',
            'type' => 'string',
            'required' => true,
            'example' => '7m***q',
          ),
        ),
        1 => 
        array (
          'name' => 'RoomId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '房间唯一标识，由调用CreateRoom返回。',
            'description' => '房间的唯一标识，在调用CreateRoom时返回。',
            'type' => 'string',
            'required' => true,
            'example' => 'AE35-****-T95F',
          ),
        ),
        2 => 
        array (
          'name' => 'Body',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '消息体内容。',
            'description' => '自定义消息体的内容，大小不超过2048个字节。',
            'type' => 'string',
            'required' => true,
            'example' => 'Hello, World',
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
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'FE22D613-D3C6-4A58-87CA-F21FC85AA08E',
              ),
              'Result' => 
              array (
                'title' => 'API请求的返回结果结构体。',
                'description' => '调用发送自定义消息的返回结果。',
                'type' => 'object',
                'properties' => 
                array (
                  'MessageId' => 
                  array (
                    'title' => '消息的唯一ID标识。由数字、大小写字母组成，长度不超过20。',
                    'description' => '自定义消息的唯一ID标识。由数字、大小写字母组成，最大长度20个字符。',
                    'type' => 'string',
                    'example' => '0io**Fs6Q384',
                  ),
                ),
                'example' => '0io**Fs6Q384',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"FE22D613-D3C6-4A58-87CA-F21FC85AA08E\\",\\n  \\"Result\\": {\\n    \\"MessageId\\": \\"0io**Fs6Q384\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<SendCustomMessageToAllResponse>\\n    <RequestId>FE22D613-D3C6-4A58-87CA-F21FC85AA08E</RequestId>\\n    <Result>\\n        <MessageId>0io**Fs6Q384</MessageId>\\n    </Result>\\n</SendCustomMessageToAllResponse>","errorExample":""}]',
      'title' => '发送自定义消息',
    ),
    'SendCustomMessageToUsers' => 
    array (
      'summary' => '调用SendCustomMessageToUsers向房间中的指定成员发送自定义消息。',
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
          'name' => 'AppId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '应用唯一标识，由6位小写字母、数字组成。',
            'description' => '用户的应用ID，在控制台创建应用时生成。包含小写字母、数字，长度为6个字符。',
            'type' => 'string',
            'required' => true,
            'example' => '7m***q',
          ),
        ),
        1 => 
        array (
          'name' => 'RoomId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '房间唯一标识，由调用CreateRoom返回。',
            'description' => '房间的唯一标识，在调用CreateRoom时返回。',
            'type' => 'string',
            'required' => true,
            'example' => 'AE35-****-T95F',
          ),
        ),
        2 => 
        array (
          'name' => 'Body',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '消息体内容。',
            'description' => '自定义消息体的内容，大小不超过2048个字节。',
            'type' => 'string',
            'required' => true,
            'example' => 'Hello, World',
          ),
        ),
        3 => 
        array (
          'name' => 'ReceiverList',
          'in' => 'formData',
          'style' => 'flat',
          'schema' => 
          array (
            'title' => '消息指定的接收人ID列表。',
            'description' => '自定义消息的接收人用户ID列表，最大长度不超过100。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '自定义消息的接收人用户ID列表。最多可输入100个用户ID。',
              'type' => 'string',
              'required' => true,
              'example' => '["34**29"]',
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
            'title' => 'Schema of Response',
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'FE22D613-D3C6-4A58-87CA-F21FC85AA08E',
              ),
              'Result' => 
              array (
                'title' => 'API请求的返回结果结构体。',
                'description' => '调用指定房间成员发送自定义消息的返回结果。',
                'type' => 'object',
                'properties' => 
                array (
                  'MessageId' => 
                  array (
                    'title' => '消息的唯一ID标识。由数字、大小写字母组成，长度不超过20。',
                    'description' => '自定义消息的唯一ID标识。由数字、大小写字母组成，最大长度20个字符。',
                    'type' => 'string',
                    'example' => '0io**Fs6Q384',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"FE22D613-D3C6-4A58-87CA-F21FC85AA08E\\",\\n  \\"Result\\": {\\n    \\"MessageId\\": \\"0io**Fs6Q384\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<SendCustomMessageToUsersResponse>\\n    <RequestId>FE22D613-D3C6-4A58-87CA-F21FC85AA08E</RequestId>\\n    <Result>\\n        <MessageId>0io**Fs6Q384</MessageId>\\n    </Result>\\n</SendCustomMessageToUsersResponse>","errorExample":""}]',
      'title' => '指定房间成员发送自定义消息',
    ),
    'SendComment' => 
    array (
      'summary' => '调用SendComment发送弹幕消息，该弹幕消息会推送给房间内所有在线人员。',
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
          'name' => 'AppId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '应用唯一标识，可以包含小写字母、数字，长度为6个字符。',
            'description' => '用户的应用ID，在控制台创建应用时生成。包含小写字母、数字，长度为6个字符。',
            'type' => 'string',
            'required' => true,
            'example' => '7m***q',
          ),
        ),
        1 => 
        array (
          'name' => 'RoomId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '直播间唯一标识，在调用CreateRoom返回。',
            'description' => '房间的唯一标识，在调用CreateRoom时返回。',
            'type' => 'string',
            'required' => true,
            'example' => 'AE35****T95F',
          ),
        ),
        2 => 
        array (
          'name' => 'SenderId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '弹幕发送者的用户ID，最大长度不超过32个字节。',
            'description' => '弹幕消息发送者的用户ID，最大长度不超过32个字节。',
            'type' => 'string',
            'required' => true,
            'example' => '62**59',
          ),
        ),
        3 => 
        array (
          'name' => 'SenderNick',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '弹幕消息发送者的昵称。',
            'description' => '弹幕消息的发送者昵称，最大长度不得超过128个字节。如果为空，则采用弹幕消息发送者的用户ID在进入房间时注册的昵称。如果对应昵称仍然为空，则显示为空。',
            'type' => 'string',
            'required' => false,
            'example' => 'Tom',
          ),
        ),
        4 => 
        array (
          'name' => 'Content',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '发送的文本内容。最大的长度不超过256个字节。',
            'description' => '弹幕消息的内容。最大的长度不超过256个字节。',
            'type' => 'string',
            'required' => true,
            'example' => 'Hello, World',
          ),
        ),
        5 => 
        array (
          'name' => 'Extension',
          'in' => 'formData',
          'style' => 'json',
          'schema' => 
          array (
            'title' => '扩展字段，服务端仅做透传。',
            'description' => '扩展字段，key-value形式，服务端会把拓展字段信息一并推送到客户端。',
            'type' => 'object',
            'required' => false,
            'additionalProperties' => 
            array (
              'type' => 'string',
              'example' => 'value',
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
            'title' => 'Schema of Response',
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => '请求ID。',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'FE22D613-D3C6-4A58-87CA-F21FC85AA08E',
              ),
              'Result' => 
              array (
                'title' => '调用发送直播间弹幕的返回结果。',
                'description' => '调用发送房间弹幕消息的返回结果。',
                'type' => 'object',
                'properties' => 
                array (
                  'CommentVO' => 
                  array (
                    'title' => '返回的弹幕数据模型。',
                    'description' => '返回的弹幕消息数据模型。',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'CommentId' => 
                      array (
                        'title' => '弹幕的唯一ID。',
                        'description' => '弹幕消息的唯一ID。',
                        'type' => 'string',
                        'example' => '09***f8',
                      ),
                      'SenderId' => 
                      array (
                        'title' => '弹幕的发送者ID标识。',
                        'description' => '弹幕消息发送者的用户ID。',
                        'type' => 'string',
                        'example' => '62**59',
                      ),
                      'SenderNick' => 
                      array (
                        'title' => '弹幕发送者的昵称。',
                        'description' => '弹幕消息发送者的昵称。',
                        'type' => 'string',
                        'example' => 'Tom',
                      ),
                      'CreateAt' => 
                      array (
                        'title' => '弹幕的创建时间，Unix时间戳，单位：毫秒。',
                        'description' => '弹幕消息的创建时间，Unix时间戳，单位：毫秒。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'example' => '1628438400000',
                      ),
                      'Content' => 
                      array (
                        'title' => '弹幕的内容。',
                        'description' => '弹幕消息的内容。',
                        'type' => 'string',
                        'example' => 'Hello,World',
                      ),
                      'Extension' => 
                      array (
                        'title' => '扩展字段。',
                        'description' => '扩展字段，key-value形式，其值等同于请求时传递的Extension参数。',
                        'type' => 'object',
                        'additionalProperties' => 
                        array (
                          'type' => 'string',
                          'example' => 'value',
                          'description' => '扩展字段key-value键值对中，value的示例值。',
                        ),
                      ),
                    ),
                    'example' => '0io**Fs6Q384',
                  ),
                ),
                'example' => '0io**Fs6Q384',
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
            'errorCode' => 'Forbidden.Chat.HasBeenBanned',
            'errorMessage' => 'The user is banned from posting a comment.',
          ),
          1 => 
          array (
            'errorCode' => 'Forbidden.Chat.SendCommentFrequencyLimited',
            'errorMessage' => 'The frequency of SendComment for this user is limited.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"FE22D613-D3C6-4A58-87CA-F21FC85AA08E\\",\\n  \\"Result\\": {\\n    \\"CommentVO\\": {\\n      \\"CommentId\\": \\"09***f8\\",\\n      \\"SenderId\\": \\"62**59\\",\\n      \\"SenderNick\\": \\"Tom\\",\\n      \\"CreateAt\\": 1628438400000,\\n      \\"Content\\": \\"Hello,World\\",\\n      \\"Extension\\": {\\n        \\"key\\": \\"value\\"\\n      }\\n    }\\n  }\\n}","errorExample":""},{"type":"xml","example":"<SendCommentResponse>\\n    <RequestId>FE22D613-D3C6-4A58-87CA-F21FC85AA08E</RequestId>\\n    <Result>\\n        <CommentVO>\\n            <CommentId>09***f8</CommentId>\\n            <SenderId>62**59</SenderId>\\n            <SenderNick>Tom</SenderNick>\\n            <CreateAt>1628438400000</CreateAt>\\n            <Content>Hello,World</Content>\\n            <Extension>\\n                <key>value</key>\\n            </Extension>\\n        </CommentVO>\\n    </Result>\\n</SendCommentResponse>","errorExample":""}]',
      'title' => '发送弹幕消息',
    ),
    'DeleteComment' => 
    array (
      'summary' => '调用DeleteComment删除弹幕消息。',
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
          'name' => 'AppId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '应用唯一标识，可以包含小写字母、数字，长度为6个字符。',
            'description' => '用户的应用ID，在控制台创建应用时生成。包含小写字母、数字，长度为6个字符。',
            'type' => 'string',
            'required' => true,
            'example' => '7m***q',
          ),
        ),
        1 => 
        array (
          'name' => 'RoomId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '直播间唯一标识，在调用CreateRoom返回。',
            'description' => '房间的唯一标识，在调用CreateRoom时返回。',
            'type' => 'string',
            'required' => true,
            'example' => 'AE35****T95F',
          ),
        ),
        2 => 
        array (
          'name' => 'UserId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '删除的操作人ID。',
            'description' => '操作人的用户ID，用于表示谁执行了删除弹幕消息的操作。',
            'type' => 'string',
            'required' => true,
            'example' => 'as****hs',
          ),
        ),
        3 => 
        array (
          'name' => 'CommentIdList',
          'in' => 'formData',
          'style' => 'flat',
          'schema' => 
          array (
            'title' => '需要删除的弹幕id列表',
            'description' => '需要删除的弹幕消息ID的列表。列表的最大长度不得超过100。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '弹幕消息ID，在调用SendComment时返回。',
              'type' => 'string',
              'required' => true,
              'example' => '09***f8',
            ),
            'required' => true,
            'example' => 'Hello, World',
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
              'RequestId' => 
              array (
                'title' => '请求ID。',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'FE22D613-D3C6-4A58-87CA-F21FC85AA08E',
              ),
              'Result' => 
              array (
                'title' => '调用删除直播间弹幕的返回结果。',
                'description' => '调用删除房间弹幕消息的返回结果。',
                'type' => 'object',
                'properties' => 
                array (
                  'DeleteResult' => 
                  array (
                    'title' => '删除的结果',
                    'description' => '删除的结果。其中true表示删除成功，false表示删除失败。',
                    'type' => 'boolean',
                    'example' => 'true',
                  ),
                ),
                'example' => '0io**Fs6Q384',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"FE22D613-D3C6-4A58-87CA-F21FC85AA08E\\",\\n  \\"Result\\": {\\n    \\"DeleteResult\\": true\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DeleteCommentResponse>\\n    <RequestId>FE22D613-D3C6-4A58-87CA-F21FC85AA08E</RequestId>\\n    <Result>\\n        <DeleteResult>true</DeleteResult>\\n    </Result>\\n</DeleteCommentResponse>","errorExample":""}]',
      'title' => '删除弹幕消息',
    ),
    'ListComments' => 
    array (
      'summary' => '调用ListComments批量查询弹幕消息。',
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
          'name' => 'AppId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '用户的应用ID，在控制台创建应用时生成。包含小写字母、数字，长度为6个字符。',
            'description' => '用户的应用ID，在控制台创建应用时生成。包含小写字母、数字，长度为6个字符。',
            'type' => 'string',
            'required' => true,
            'example' => '7m***q',
          ),
        ),
        1 => 
        array (
          'name' => 'RoomId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '房间的唯一标识，在调用CreateRoom时返回。',
            'description' => '房间的唯一标识，在调用CreateRoom时返回。',
            'type' => 'string',
            'required' => true,
            'example' => 'AE35****T95F',
          ),
        ),
        2 => 
        array (
          'name' => 'UserId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '操作人用户ID，表示谁执行了查询弹幕消息列表的操作。',
            'description' => '操作人用户ID，表示谁执行了批量查询弹幕消息的操作。',
            'type' => 'string',
            'required' => false,
            'example' => '62**59',
          ),
        ),
        3 => 
        array (
          'name' => 'CreatorId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '弹幕创建者ID。',
            'description' => '弹幕的创建者ID。',
            'type' => 'string',
            'required' => false,
            'example' => '10**13',
          ),
        ),
        4 => 
        array (
          'name' => 'PageNum',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '查询弹幕消息列表的分页页数。应该从1开始，每次分页拉取时递增。',
            'description' => '批量查询弹幕消息的分页页数。要求从1开始，每次分页拉取时递增加1。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'example' => '1',
          ),
        ),
        5 => 
        array (
          'name' => 'PageSize',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '查询弹幕消息列表的分页大小。最小不得小于1，最大不得超过100。如果超过100，会被截断为前100条。',
            'description' => '批量查询弹幕消息的分页大小。最小不得小于1，最大不得超过100。如果超过100，会被截断为前100条。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'example' => '50',
          ),
        ),
        6 => 
        array (
          'name' => 'SortType',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '查询弹幕消息列表的排序方式。取值仅限0和1，其中0表示按照弹幕消息创建时间递增的顺序拉取，1表示按照弹幕消息创建时间递减的时间拉取。',
            'description' => '批量查询弹幕消息的排序方式。取值仅限0和1。

- **0**：按照弹幕消息创建时间递减的顺序查询。

- **1**：按照弹幕消息创建时间递增的顺序查询。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'example' => '0',
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
              'RequestId' => 
              array (
                'title' => '请求ID。',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'ER52****O9CA',
              ),
              'Result' => 
              array (
                'title' => '调用查询弹幕消息列表的返回结果。',
                'description' => '调用批量查询弹幕消息的返回结果。',
                'type' => 'object',
                'properties' => 
                array (
                  'CommentVOList' => 
                  array (
                    'title' => '弹幕消息列表。',
                    'description' => '弹幕消息列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '弹幕消息信息。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'AppId' => 
                        array (
                          'title' => '应用ID。',
                          'description' => '应用ID。',
                          'type' => 'string',
                          'example' => '7m***q',
                        ),
                        'RoomId' => 
                        array (
                          'title' => '房间ID。',
                          'description' => '房间ID。',
                          'type' => 'string',
                          'example' => 'AE35****T95F',
                        ),
                        'CommentId' => 
                        array (
                          'title' => '弹幕消息的唯一ID标识。',
                          'description' => '弹幕消息的唯一ID标识。',
                          'type' => 'string',
                          'example' => '09***f8',
                        ),
                        'SenderId' => 
                        array (
                          'title' => '弹幕消息的发送者ID标识。',
                          'description' => '弹幕消息的发送者ID标识。',
                          'type' => 'string',
                          'example' => '62**59',
                        ),
                        'SenderNick' => 
                        array (
                          'title' => '弹幕消息发送者的昵称。',
                          'description' => '弹幕消息发送者的昵称。',
                          'type' => 'string',
                          'example' => 'Tom',
                        ),
                        'CreateAt' => 
                        array (
                          'title' => '弹幕消息的创建时间，Unix时间戳，单位：毫秒。',
                          'description' => '弹幕消息的创建时间，Unix时间戳，单位：毫秒。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1628438400000',
                        ),
                        'Content' => 
                        array (
                          'title' => '弹幕消息的内容。',
                          'description' => '弹幕消息的内容。',
                          'type' => 'string',
                          'example' => 'Hello,World',
                        ),
                        'Extension' => 
                        array (
                          'title' => '扩展字段。',
                          'description' => '扩展字段。',
                          'type' => 'object',
                          'additionalProperties' => 
                          array (
                            'type' => 'string',
                            'example' => 'value',
                            'description' => '扩展字段。',
                          ),
                        ),
                      ),
                    ),
                  ),
                  'HasMore' => 
                  array (
                    'title' => '是否还有下一页数据。true表示还有，false表示没有。',
                    'description' => '是否还有下一页数据。true表示还有，false表示没有。',
                    'type' => 'boolean',
                    'example' => 'true',
                  ),
                  'TotalCount' => 
                  array (
                    'title' => '弹幕消息的总数。',
                    'description' => '批量查询弹幕消息的总数。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '100',
                  ),
                  'PageTotal' => 
                  array (
                    'title' => '分页查询弹幕消息列表的总页数。',
                    'description' => '分页查询弹幕消息列表的总页数。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '2',
                  ),
                ),
                'example' => '0io**Fs6Q384',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"ER52****O9CA\\",\\n  \\"Result\\": {\\n    \\"CommentVOList\\": [\\n      {\\n        \\"AppId\\": \\"7m***q\\",\\n        \\"RoomId\\": \\"AE35****T95F\\",\\n        \\"CommentId\\": \\"09***f8\\",\\n        \\"SenderId\\": \\"62**59\\",\\n        \\"SenderNick\\": \\"Tom\\",\\n        \\"CreateAt\\": 1628438400000,\\n        \\"Content\\": \\"Hello,World\\",\\n        \\"Extension\\": {\\n          \\"key\\": \\"value\\"\\n        }\\n      }\\n    ],\\n    \\"HasMore\\": true,\\n    \\"TotalCount\\": 100,\\n    \\"PageTotal\\": 2\\n  }\\n}","errorExample":""},{"type":"xml","example":"<ListCommentsResponse>\\n    <RequestId>ER52****O9CA</RequestId>\\n    <Result>\\n        <CommentVOList>\\n            <AppId>7m***q</AppId>\\n            <RoomId>AE35****T95F</RoomId>\\n            <CommentId>09***f8</CommentId>\\n            <SenderId>62**59</SenderId>\\n            <SenderNick>Tom</SenderNick>\\n            <CreateAt>1628438400000</CreateAt>\\n            <Content>Hello,World</Content>\\n            <Extension>\\n                <key>value</key>\\n            </Extension>\\n        </CommentVOList>\\n        <HasMore>true</HasMore>\\n        <TotalCount>100</TotalCount>\\n        <PageTotal>2</PageTotal>\\n    </Result>\\n</ListCommentsResponse>","errorExample":""}]',
      'title' => '批量查询弹幕消息',
    ),
    'DeleteCommentByCreatorId' => 
    array (
      'summary' => '调用DeleteCommentByCreatorId根据创建者ID批量删除弹幕。',
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
          'name' => 'AppId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '应用唯一标识，可以包含小写字母、数字，长度为6个字符。',
            'description' => '应用唯一标识，可以包含小写字母、数字，长度为6个字符。',
            'type' => 'string',
            'required' => true,
            'example' => '7m***q',
          ),
        ),
        1 => 
        array (
          'name' => 'RoomId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '直播间唯一标识，在调用CreateRoom返回。',
            'description' => '直播间唯一标识，在调用CreateRoom返回。',
            'type' => 'string',
            'required' => true,
            'example' => 'AE35****T95F',
          ),
        ),
        2 => 
        array (
          'name' => 'UserId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '删除的操作人ID。',
            'description' => '删除的操作人ID。',
            'type' => 'string',
            'required' => true,
            'example' => '62**59',
          ),
        ),
        3 => 
        array (
          'name' => 'CreatorId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '弹幕的创建者ID。',
            'description' => '弹幕的创建者ID。',
            'type' => 'string',
            'required' => true,
            'example' => '12**86',
          ),
        ),
        4 => 
        array (
          'name' => 'CommentIdList',
          'in' => 'formData',
          'style' => 'flat',
          'schema' => 
          array (
            'title' => '需要删除的弹幕id列表',
            'description' => '需要删除的弹幕消息ID的列表，为当前创建者下的弹幕ID列表。列表的最大长度不得超过100。该参数为空时，删除操作将异步执行。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '弹幕ID。',
              'type' => 'string',
              'required' => false,
              'example' => '09***f8',
            ),
            'required' => false,
            'example' => 'Hello, World',
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
              'RequestId' => 
              array (
                'title' => '请求ID。',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'ER52****O9CA',
              ),
              'Result' => 
              array (
                'title' => '调用删除直播间弹幕的返回结果。',
                'description' => '调用删除直播间弹幕的返回结果。',
                'type' => 'object',
                'properties' => 
                array (
                  'DeleteResult' => 
                  array (
                    'title' => '删除的结果',
                    'description' => '删除的结果。',
                    'type' => 'boolean',
                    'example' => 'true',
                  ),
                ),
                'example' => '0io**Fs6Q384',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"ER52****O9CA\\",\\n  \\"Result\\": {\\n    \\"DeleteResult\\": true\\n  }\\n}","type":"json"}]',
      'title' => '根据创建者ID批量删除弹幕',
    ),
    'DeleteConference' => 
    array (
      'summary' => '调用DeleteConference结束连麦。一般用于管理后台结束，或长时间未退出时的强制结束。',
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
          'name' => 'AppId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '租户名',
            'description' => '用户的应用ID，在控制台创建应用时生成。包含小写字母、数字，长度为6个字符。',
            'type' => 'string',
            'required' => true,
            'example' => '7m***q',
          ),
        ),
        1 => 
        array (
          'name' => 'RoomId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '房间ID，最大长度36位',
            'description' => '房间ID，由创建房间接口返回。',
            'type' => 'string',
            'required' => true,
            'example' => 'AE35-****-T95F',
          ),
        ),
        2 => 
        array (
          'name' => 'UserId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '创建会议用户ID',
            'description' => '操作者用户ID，仅支持英文和数字，最大长度36个字符。',
            'type' => 'string',
            'required' => true,
            'example' => 'as****hs',
          ),
        ),
        3 => 
        array (
          'name' => 'ConferenceId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '会议资源的唯一标识ID',
            'description' => '连麦资源的唯一标识ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'fb0f-****-4cb1',
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
              'RequestId' => 
              array (
                'title' => '请求ID',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '16A96B9A-****-CB92E68F4CD8',
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
            'errorCode' => 'InvalidConferenceId.Rtc.DataNotExist',
            'errorMessage' => 'The specified parameter conferenceId does not exist in our records.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"16A96B9A-****-CB92E68F4CD8\\"\\n}","errorExample":""},{"type":"xml","example":"<DeleteConferenceResponse>\\n    <RequestId>16A96B9A-****-CB92E68F4CD8</RequestId>\\n</DeleteConferenceResponse>","errorExample":""}]',
      'title' => '结束连麦',
    ),
    'RemoveMember' => 
    array (
      'summary' => '调用RemoveMember将指定用户从连麦中踢出。',
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
        'operationType' => 'delete',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ConferenceId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '会议唯一标识',
            'description' => '连麦唯一标识。由字母、数字和短横线（-）组成，长度为36个字符。',
            'type' => 'string',
            'required' => true,
            'example' => 'fb0f-****-4cb1',
          ),
        ),
        1 => 
        array (
          'name' => 'ToUserId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '被邀请用户ID',
            'description' => '被踢者用户ID，在AppId下单独唯一。英文字母、数字、下划线（_）、短横线（-）、小数点（.）和@组成。长度为1到36个字符。',
            'type' => 'string',
            'required' => true,
            'example' => '45***9',
          ),
        ),
        2 => 
        array (
          'name' => 'FromUserId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '邀请者用户ID',
            'description' => '踢人者用户ID，在AppId下单独唯一。英文字母、数字、下划线（_）、短横线（-）、小数点（.）和@组成。长度为1到36个字符。',
            'type' => 'string',
            'required' => true,
            'example' => '23***7',
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
              'RequestId' => 
              array (
                'title' => '请求ID',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'FE22D613-D3C6-4A58-87CA-F21FC85AA08E',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'Forbidden.Rtc.UserNoPermission',
            'errorMessage' => 'The user is not authorized to operate on the specified resource.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"FE22D613-D3C6-4A58-87CA-F21FC85AA08E\\"\\n}","errorExample":""},{"type":"xml","example":"<RemoveMemberResponse>\\n    <RequestId>FE22D613-D3C6-4A58-87CA-F21FC85AA08E</RequestId>\\n</RemoveMemberResponse>","errorExample":""}]',
      'title' => '踢人',
    ),
    'GetConference' => 
    array (
      'summary' => '调用GetConference查询指定连麦信息，包含连麦标题和连麦状态。也可查询连麦结束后的录制地址。',
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
          'name' => 'ConferenceId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '会议资源唯一标识。',
            'description' => '连麦唯一标识。由字母、数字和短横线（-）组成，长度为36个字符。',
            'type' => 'string',
            'required' => true,
            'example' => 'fb0f-****-4cb1',
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
              'RequestId' => 
              array (
                'title' => '请求ID',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'FE22D613-D3C6-4A58-87CA-F21FC85AA08E',
              ),
              'Result' => 
              array (
                'title' => '返回结果',
                'description' => '返回结果。',
                'type' => 'object',
                'properties' => 
                array (
                  'ConferenceId' => 
                  array (
                    'title' => '会议资源唯一标识。',
                    'description' => '连麦唯一标识，由调用CreateConference返回。由字母、数字和短横线（-）组成，长度为36个字符。',
                    'type' => 'string',
                    'example' => 'fb0f-****-4cb1',
                  ),
                  'Title' => 
                  array (
                    'title' => '会议标题。',
                    'description' => '会议标题，支持中英文，最大长度128个字符。',
                    'type' => 'string',
                    'example' => 'This is a Title',
                  ),
                  'Status' => 
                  array (
                    'title' => '会议状态。',
                    'description' => '状态。取值：
- **Init**：未开始。 
- **Start**：连麦中。
- **End**：连麦结束。',
                    'type' => 'string',
                    'example' => 'Init',
                  ),
                  'RoomId' => 
                  array (
                    'title' => '房间ID。',
                    'description' => '房间唯一标识，最大长度36个字符。',
                    'type' => 'string',
                    'example' => 'AE35-****-T95F',
                  ),
                  'UserId' => 
                  array (
                    'title' => '创建会议用户。',
                    'description' => '创建连麦的用户，在AppId下单独唯一。英文字母、数字、下划线（_）、短横线（-）、小数点（.）和@组成。长度为1到36个字符。',
                    'type' => 'string',
                    'example' => 'as****hs',
                  ),
                  'AppId' => 
                  array (
                    'title' => '租户名',
                    'description' => '应用唯一标识，可以包含小写字母、数字，长度为6个字符。',
                    'type' => 'string',
                    'example' => '7m***q',
                  ),
                  'CreateTime' => 
                  array (
                    'title' => '会议创建时间戳，单位：毫秒。',
                    'description' => '连麦创建时间戳，单位：毫秒。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1624589848000',
                  ),
                  'PlaybackUrl' => 
                  array (
                    'title' => '录制回放地址，m3u8格式，会议结束后10秒才会生成。',
                    'description' => '录制回放地址，m3u8格式，连麦结束后10秒才会生成。',
                    'type' => 'string',
                    'example' => 'http://xxxx.com/b7f29c02-****-40fd-****-e8d06a8aebb3_merged.m3u8?auth_key=1627522726-0-0-******e620b363d4cf8a8e3',
                  ),
                ),
                'example' => 'true',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"FE22D613-D3C6-4A58-87CA-F21FC85AA08E\\",\\n  \\"Result\\": {\\n    \\"ConferenceId\\": \\"fb0f-****-4cb1\\",\\n    \\"Title\\": \\"This is a Title\\",\\n    \\"Status\\": \\"Init\\",\\n    \\"RoomId\\": \\"AE35-****-T95F\\",\\n    \\"UserId\\": \\"as****hs\\",\\n    \\"AppId\\": \\"7m***q\\",\\n    \\"CreateTime\\": 1624589848000,\\n    \\"PlaybackUrl\\": \\"http://xxxx.com/b7f29c02-****-40fd-****-e8d06a8aebb3_merged.m3u8?auth_key=1627522726-0-0-******e620b363d4cf8a8e3\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<GetConferenceResponse>\\n    <RequestId>FE22D613-D3C6-4A58-87CA-F21FC85AA08E</RequestId>\\n    <Result>\\n        <ConferenceId>fb0f-****-4cb1</ConferenceId>\\n        <Title>This is a Title</Title>\\n        <Status>Init</Status>\\n        <RoomId>AE35-****-T95F</RoomId>\\n        <UserId>as****hs</UserId>\\n        <AppId>7m***q</AppId>\\n        <CreateTime>1624589848000</CreateTime>\\n        <PlaybackUrl>http://xxxx.com/b7f29c02-****-40fd-****-e8d06a8aebb3_merged.m3u8?auth_key=1627522726-0-0-******e620b363d4cf8a8e3</PlaybackUrl>\\n    </Result>\\n</GetConferenceResponse>","errorExample":""}]',
      'title' => '查询连麦详情',
    ),
    'ListConferenceUsers' => 
    array (
      'summary' => '调用ListConferenceUsers分页查询连麦用户信息。',
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
          'name' => 'ConferenceId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '会议唯一标识符',
            'description' => '连麦唯一标识。由字母、数字和短横线（-）组成，长度为36个字符。',
            'type' => 'string',
            'required' => true,
            'example' => 'fb0f-****-4cb1',
          ),
        ),
        1 => 
        array (
          'name' => 'PageNumber',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '查询页码，从第1页开始。',
            'description' => '查询页码，从第1页开始。',
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
            'title' => '每页显示个数，最大显示个数为100。',
            'description' => '每页显示个数，最大支持100。',
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
            'title' => 'Schema of Response',
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => '请求ID',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'FE22D613-D3C6-4A58-87CA-F21FC85AA08E',
              ),
              'Result' => 
              array (
                'title' => '返回结果',
                'description' => '分页查询连麦用户信息的返回结果。',
                'type' => 'object',
                'properties' => 
                array (
                  'ConferenceUserList' => 
                  array (
                    'title' => '会议用户列表。',
                    'description' => '连麦用户列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'UserId' => 
                        array (
                          'title' => '用户ID。',
                          'description' => '用户ID。',
                          'type' => 'string',
                          'example' => '4*****9',
                        ),
                        'Status' => 
                        array (
                          'title' => '用户状态。',
                          'description' => '用户状态。取值：

- **Init**：初始状态。

- **OnJoining**：呼叫中。

- **Active**：连麦中。

- **JoinFail**：连麦失败。

- **Kicked**：被踢出。

- **Leave**：离开连麦。
',
                          'type' => 'string',
                          'example' => 'active',
                        ),
                      ),
                    ),
                    'example' => 'myApp',
                  ),
                  'HasMore' => 
                  array (
                    'title' => '是否还有数据',
                    'description' => '是否还有数据。',
                    'type' => 'boolean',
                    'example' => 'true',
                  ),
                  'TotalCount' => 
                  array (
                    'title' => '总条目数',
                    'description' => '总条目数。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '100',
                  ),
                  'PageTotal' => 
                  array (
                    'title' => '总页数',
                    'description' => '总页数。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '100',
                  ),
                ),
                'example' => 'true',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"FE22D613-D3C6-4A58-87CA-F21FC85AA08E\\",\\n  \\"Result\\": {\\n    \\"ConferenceUserList\\": [\\n      {\\n        \\"UserId\\": \\"4*****9\\",\\n        \\"Status\\": \\"active\\"\\n      }\\n    ],\\n    \\"HasMore\\": true,\\n    \\"TotalCount\\": 100,\\n    \\"PageTotal\\": 100\\n  }\\n}","errorExample":""},{"type":"xml","example":"<ListConferenceUsersResponse>\\n    <RequestId>FE22D613-D3C6-4A58-87CA-F21FC85AA08E</RequestId>\\n    <Result>\\n        <ConferenceUserList>\\n            <UserId>4*****9</UserId>\\n            <Status>active</Status>\\n        </ConferenceUserList>\\n        <HasMore>true</HasMore>\\n        <TotalCount>100</TotalCount>\\n        <PageTotal>100</PageTotal>\\n    </Result>\\n</ListConferenceUsersResponse>","errorExample":""}]',
      'title' => '查询连麦用户列表',
    ),
    'GetStandardRoomJumpUrl' => 
    array (
      'summary' => '调用GetStandardRoomJumpUrl获取低代码服务跳转链接。',
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
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'AppId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '用户的应用ID，在控制台创建应用时生成',
            'description' => '用户的应用ID，在控制台创建应用时生成。包含小写字母、数字，长度为6个字符。',
            'type' => 'string',
            'required' => true,
            'example' => '7m***q',
          ),
        ),
        1 => 
        array (
          'name' => 'UserId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '用户UserId,在AppId下单独唯一',
            'description' => '用户UserId，在AppId下单独唯一。小写英文、数字、下划线（_）和小数点（.）组成，最大长度32个字符。',
            'type' => 'string',
            'required' => true,
            'example' => 'as****hs',
          ),
        ),
        2 => 
        array (
          'name' => 'AppKey',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '终端设备类型,通过控制台创建和查询',
            'description' => '终端设备类型，通过控制台创建和查询。小写英文和数字，长度32个字符。',
            'type' => 'string',
            'required' => true,
            'example' => '06***9c',
          ),
        ),
        3 => 
        array (
          'name' => 'Platform',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '平台：win, mac, android, ios, web',
            'description' => '选择获取链接的平台类型。取值：

- win：Windows端。

- web： Web端。
- mac：Mac端。',
            'type' => 'string',
            'required' => true,
            'example' => 'web',
          ),
        ),
        4 => 
        array (
          'name' => 'BizType',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '业务类型：互动直播live，互动课堂class',
            'description' => '业务场景类型。取值：

- live：互动直播。

- class：互动课堂。',
            'type' => 'string',
            'required' => true,
            'example' => 'live',
          ),
        ),
        5 => 
        array (
          'name' => 'BizId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '资源ID：根据业务类型来定，比如直播ID，课堂ID等',
            'description' => '资源ID。根据业务场景类型来定：

- 互动直播场景传入直播ID(LiveId)。
- 互动课堂场景传入课程ID(ClassId)。',
            'type' => 'string',
            'required' => true,
            'example' => 'b7f2-****-ebb3',
          ),
        ),
        6 => 
        array (
          'name' => 'UserNick',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '用户昵称',
            'description' => '用户用于显示的昵称，英文大小写字母、汉字、数字、下划线（_）、短横线（-）、小数点（.）和@组成。长度为1到36个字符。',
            'type' => 'string',
            'required' => true,
            'example' => 'James',
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
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '16A96B9A-****-CB92E68F4CD8',
              ),
              'Result' => 
              array (
                'description' => '调用获取低代码服务跳转链接的接口返回结果。',
                'type' => 'object',
                'properties' => 
                array (
                  'StandardRoomJumpUrl' => 
                  array (
                    'title' => '样板间跳转协议地址',
                    'description' => '低代码服务跳转协议地址。',
                    'type' => 'string',
                    'example' => 'http://xxx.com/standard_live?appId=l***u&userId=jm6&userAuthSession=0c179505-6d14-**-88a888d849ec&roomId=b807bd2a-**-96e1-c5753f13a5eb&appKey=63***3d&callback=https%3A%2F%2Fxxx.com%2Fapi%2Flogin%2FcheckUserAuthSession',
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
            'errorCode' => 'InvalidParameter.StandardRoom.LowCodeDomainNotConfig',
            'errorMessage' => 'This app is not configured with a low-code domain name.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidAppId.StandardRoom.CnameNotConfig',
            'errorMessage' => 'The low-code integration service does not have a CNAME configured.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidParameter.StandardRoom.AppKeyNotMatch',
            'errorMessage' => 'The parameter AppId and the parameter AppKey do not match.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"16A96B9A-****-CB92E68F4CD8\\",\\n  \\"Result\\": {\\n    \\"StandardRoomJumpUrl\\": \\"http://xxx.com/standard_live?appId=l***u&userId=jm6&userAuthSession=0c179505-6d14-**-88a888d849ec&roomId=b807bd2a-**-96e1-c5753f13a5eb&appKey=63***3d&callback=https%3A%2F%2Fxxx.com%2Fapi%2Flogin%2FcheckUserAuthSession\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<GetStandardRoomJumpUrlResponse>\\n    <RequestId>16A96B9A-****-CB92E68F4CD8</RequestId>\\n    <Result>\\n        <StandardRoomJumpUrl>http://xxx.com/standard_live?appId=l***u&amp;userId=jm6&amp;userAuthSession=0c179505-6d14-**-88a888d849ec&amp;roomId=b807bd2a-**-96e1-c5753f13a5eb&amp;appKey=63***3d&amp;callback=https%3A%2F%2Fxxx.com%2Fapi%2Flogin%2FcheckUserAuthSession</StandardRoomJumpUrl>\\n    </Result>\\n</GetStandardRoomJumpUrlResponse>","errorExample":""}]',
      'title' => '获取低代码服务跳转链接',
    ),
    'DescribeMeterImpWatchLiveTimeByLiveId' => 
    array (
      'methods' => 
      array (
        0 => 'get',
        1 => 'post',
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
          'name' => 'AppId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用户的应用ID，在控制台创建应用时生成。包含小写字母、数字，长度为6个字符。',
            'type' => 'string',
            'required' => true,
            'example' => '7m***q',
          ),
        ),
        1 => 
        array (
          'name' => 'LiveId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '直播资源的唯一标识ID，传空值时，系统自动生成36位随机UUID字符串。',
            'type' => 'string',
            'required' => true,
            'example' => 'b7f2****ebb3',
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
              'RequestId' => 
              array (
                'title' => 'Id',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'FE22D613-D3C6-4A58-87CA-F21FC85AA08E',
              ),
              'Data' => 
              array (
                'description' => '查询观看时长返回结果。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'WatchTimeInLatency' => 
                    array (
                      'description' => '普通延迟观看时长，如采用rtmp、flv、hls等协议观看，单位分钟。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '32',
                    ),
                    'WatchTimeInLowLatency' => 
                    array (
                      'description' => '低延迟观看时长，如rts，单位分钟。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '43',
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
            'errorCode' => 'Meter.ParamError',
            'errorMessage' => 'Param Error:%s,Please Check Again.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'Meter.AuthError',
            'errorMessage' => 'Authentication Failed,Please Try Again.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'Meter.ServerInternalError',
            'errorMessage' => 'The Request Processing Has Failed Due To Some Unknown Error.',
          ),
          1 => 
          array (
            'errorCode' => 'Meter.DataSourceQueryError',
            'errorMessage' => 'Data Source Error:%s,Please Try Again.',
          ),
        ),
        502 => 
        array (
          0 => 
          array (
            'errorCode' => 'Meter.ReadyTsError',
            'errorMessage' => 'Get ReadyTs Failed,Please Try Again.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"FE22D613-D3C6-4A58-87CA-F21FC85AA08E\\",\\n  \\"Data\\": [\\n    {\\n      \\"WatchTimeInLatency\\": 32,\\n      \\"WatchTimeInLowLatency\\": 43\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '根据直播唯一标识查看观看时长',
      'summary' => '调用DescribeMeterImpWatchLiveTimeByLiveId查看观看时长相关数据，包含普通延迟观看时长，低延迟观看时长。',
      'description' => '根据直播资源的唯一标识ID查询普通延迟观看时长，低延迟观看时长。',
    ),
    'DescribeMeterImpPlayBackTimeByLiveId' => 
    array (
      'methods' => 
      array (
        0 => 'get',
        1 => 'post',
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
          'name' => 'AppId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用户的应用ID，在控制台创建应用时生成。包含小写字母、数字，长度为6个字符。',
            'type' => 'string',
            'required' => true,
            'example' => '7m***q',
          ),
        ),
        1 => 
        array (
          'name' => 'LiveId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '直播资源的唯一标识ID，传空值时，系统自动生成36位随机UUID字符串。

',
            'type' => 'string',
            'required' => true,
            'example' => 'b7f2****ebb3',
          ),
        ),
        2 => 
        array (
          'name' => 'StartTs',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询的开始时间，使用UNIX时间戳表示，单位：秒。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'example' => '1632153600',
          ),
        ),
        3 => 
        array (
          'name' => 'EndTs',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询的结束时间，使用UNIX时间戳表示，单位：秒。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'example' => '1637302350',
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
              'RequestId' => 
              array (
                'title' => 'Id',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'FE22D613-D3C6-4A58-87CA-F21FC85AA08E',
              ),
              'Data' => 
              array (
                'description' => '查询回看时长返回结果。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'WatchTime' => 
                    array (
                      'description' => '回看时长，单位分钟。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '32',
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
            'errorCode' => 'Meter.ParamError',
            'errorMessage' => 'Param Error:%s,Please Check Again.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'Meter.AuthError',
            'errorMessage' => 'Authentication Failed,Please Try Again.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'Meter.ServerInternalError',
            'errorMessage' => 'The Request Processing Has Failed Due To Some Unknown Error.',
          ),
          1 => 
          array (
            'errorCode' => 'Meter.DataSourceQueryError',
            'errorMessage' => 'Data Source Error:%s,Please Try Again.',
          ),
        ),
        502 => 
        array (
          0 => 
          array (
            'errorCode' => 'Meter.ReadyTsError',
            'errorMessage' => 'Get ReadyTs Failed,Please Try Again.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"FE22D613-D3C6-4A58-87CA-F21FC85AA08E\\",\\n  \\"Data\\": [\\n    {\\n      \\"WatchTime\\": 32\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '查询指定直播资源的回看时长',
      'summary' => '调用DescribeMeterImpPlayBackTimeByLiveId查询指定直播资源的回看时长。',
      'description' => '根据时间范围和直播资源唯一标识ID获取回放时长。',
      'requestParamsDescription' => '最大查询范围31天，可查询3个月内的数据。',
    ),
    'CreateLive' => 
    array (
      'summary' => '创建状态为未开播的新直播。',
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
        'operationType' => 'create',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'AppId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '应用唯一标识，可以包含小写字母、数字，长度为6个字符。',
            'description' => '应用唯一标识，可以包含小写字母、数字，长度为6个字符。',
            'type' => 'string',
            'required' => true,
            'example' => '7m***q',
          ),
        ),
        1 => 
        array (
          'name' => 'RoomId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '房间ID，最大长度36个字符，传空值，则随机生成一个房间ID。',
            'description' => '房间唯一标识，最大长度36个字符。',
            'type' => 'string',
            'required' => true,
            'example' => 'AE35-****-T95F',
          ),
        ),
        2 => 
        array (
          'name' => 'UserId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '创建直播用户。',
            'description' => '创建直播用户，在AppId下单独唯一。小写英文、数字、下划线（_）和小数点（.）组成，最大长度32个字符。',
            'type' => 'string',
            'required' => true,
            'example' => 'as****hs',
          ),
        ),
        3 => 
        array (
          'name' => 'LiveId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '直播资源的唯一标识ID，缺省时系统自动生成36位随机uuid字符串。',
            'description' => '直播资源的唯一标识ID，传空值时，系统自动生成36位随机UUID字符串。',
            'type' => 'string',
            'required' => false,
            'example' => 'b7f2****ebb3',
          ),
        ),
        4 => 
        array (
          'name' => 'Title',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '直播标题，支持中英文，最大长度256位。',
            'description' => '直播标题，支持中英文，最大长度256个字符。',
            'type' => 'string',
            'required' => false,
            'example' => 'This is a title.',
          ),
        ),
        5 => 
        array (
          'name' => 'Introduction',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '直播简介，支持中英文，最大长度2048位。',
            'description' => '直播简介，支持中英文，最大长度2048个字符。',
            'type' => 'string',
            'required' => false,
            'example' => 'This is an intro.',
          ),
        ),
        6 => 
        array (
          'name' => 'AnchorId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '主播ID，支持中英文，最大长度128位，缺省时主播为当前创建直播用户。',
            'description' => '主播ID，支持中英文，最大长度128个字符。传空值时，主播为当前创建直播用户。',
            'type' => 'string',
            'required' => false,
            'example' => 'as****hs',
          ),
        ),
        7 => 
        array (
          'name' => 'CodeLevel',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '直播推流码率，缺省时默认为3。取值：  -1：流畅lld。 1：标清lsd。 2：高清lhd。 3：超清lud。',
            'description' => '直播推流码率，缺省时默认为3。取值：
* **-1**：流畅lld。
* **1**：标清lsd。
* **2**：高清lhd。
* **3**：超清lud。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '3',
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
              'RequestId' => 
              array (
                'title' => '请求ID。',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'FE22D613-D3C6-4A58-87CA-F21FC85AA08E',
              ),
              'Result' => 
              array (
                'description' => '创建直播的返回结果。',
                'type' => 'object',
                'properties' => 
                array (
                  'LiveId' => 
                  array (
                    'title' => '直播的唯一标识ID。',
                    'description' => '直播的唯一标识ID。',
                    'type' => 'string',
                    'example' => 'b7f2****ebb3',
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
            'errorCode' => 'Forbidden.Room.LiveAlreadyExist',
            'errorMessage' => 'The live instance already exists.',
          ),
          1 => 
          array (
            'errorCode' => 'Invalid.Live.ConfigNotFound',
            'errorMessage' => 'The live push domain and pull domain config not found.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"FE22D613-D3C6-4A58-87CA-F21FC85AA08E\\",\\n  \\"Result\\": {\\n    \\"LiveId\\": \\"b7f2****ebb3\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<CreateLiveResponse>\\n    <RequestId>FE22D613-D3C6-4A58-87CA-F21FC85AA08E</RequestId>\\n    <Result>\\n        <LiveId>b7f2****ebb3</LiveId>\\n    </Result>\\n    </CreateLiveResponse>","errorExample":""}]',
      'title' => '创建直播',
    ),
    'DeleteLive' => 
    array (
      'summary' => '删除直播记录。',
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
          'name' => 'LiveId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '直播资源的唯一标识ID',
            'description' => '直播资源的唯一标识ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'b7f2****ebb3',
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
              'RequestId' => 
              array (
                'title' => '请求ID',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'FE22D613-D3C6-4A58-87CA-F21FC85AA08E',
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
            'errorCode' => 'InvalidLiveId.Live.NotFound',
            'errorMessage' => 'The live broadcast does not exist.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"FE22D613-D3C6-4A58-87CA-F21FC85AA08E\\"\\n}","errorExample":""},{"type":"xml","example":"<DeleteLiveResponse>\\n    <RequestId>FE22D613-D3C6-4A58-87CA-F21FC85AA08E</RequestId>\\n    </DeleteLiveResponse>","errorExample":""}]',
      'title' => '删除直播',
    ),
    'PublishLive' => 
    array (
      'summary' => '发布直播，将直播状态转变为直播中，并获取推拉流地址。',
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
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'LiveId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '直播资源的唯一标识ID',
            'description' => '直播资源的唯一标识ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'b7f2****ebb3',
          ),
        ),
        1 => 
        array (
          'name' => 'UserId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '当前用户Id',
            'description' => '用户UserId，在AppId下单独唯一。小写英文、数字、下划线（_）和小数点（.）组成，最大长度32个字符。',
            'type' => 'string',
            'required' => true,
            'example' => 'as****hs',
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
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'FE22D613-D3C6-4A58-87CA-F21FC85AA08E',
              ),
              'Result' => 
              array (
                'description' => '发布直播的返回结果。',
                'type' => 'object',
                'properties' => 
                array (
                  'LiveId' => 
                  array (
                    'title' => '直播资源的唯一标识ID',
                    'description' => '直播资源的唯一标识ID。',
                    'type' => 'string',
                    'example' => 'b7f2****ebb3',
                  ),
                  'AnchorId' => 
                  array (
                    'title' => '主播ID',
                    'description' => '主播ID。',
                    'type' => 'string',
                    'example' => 'as****hs',
                  ),
                  'Status' => 
                  array (
                    'title' => '直播状态：Created-已创建未开播，Living-直播中，End-直播结束',
                    'description' => '直播状态。类型为字符串，取值：
* **1**：直播中。',
                    'type' => 'string',
                    'example' => '1',
                  ),
                  'PushUrl' => 
                  array (
                    'title' => '直播推流地址',
                    'description' => '直播推流地址。',
                    'type' => 'string',
                    'example' => 'rtmp://demo-app-push.com/live/b7f2****ebb3?auth_key=e620****a8e3',
                  ),
                  'LiveUrl' => 
                  array (
                    'title' => '直播拉流地址',
                    'description' => '直播拉流地址。',
                    'type' => 'string',
                    'example' => 'http://demo-app-live.com/live/b7f2****ebb3.flv?auth_key=e620****a8e3',
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
            'errorCode' => 'InvalidLiveId.Live.NotFound',
            'errorMessage' => 'The live broadcast does not exist.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"FE22D613-D3C6-4A58-87CA-F21FC85AA08E\\",\\n  \\"Result\\": {\\n    \\"LiveId\\": \\"b7f2****ebb3\\",\\n    \\"AnchorId\\": \\"as****hs\\",\\n    \\"Status\\": \\"1\\",\\n    \\"PushUrl\\": \\"rtmp://demo-app-push.com/live/b7f2****ebb3?auth_key=e620****a8e3\\",\\n    \\"LiveUrl\\": \\"http://demo-app-live.com/live/b7f2****ebb3.flv?auth_key=e620****a8e3\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<PublishLiveResponse>\\n    <RequestId>FE22D613-D3C6-4A58-87CA-F21FC85AA08E</RequestId>\\n    <Result>\\n        <LiveId>b7f2****ebb3</LiveId>\\n        <AnchorId>as****hs</AnchorId>\\n        <Status>1</Status>\\n        <PushUrl>rtmp://demo-app-push.com/live/b7f2****ebb3?auth_key=e620****a8e3</PushUrl>\\n        <LiveUrl>http://demo-app-live.com/live/b7f2****ebb3.flv?auth_key=e620****a8e3</LiveUrl>\\n    </Result>\\n</PublishLiveResponse>","errorExample":""}]',
      'title' => '发布直播',
    ),
    'UpdateLive' => 
    array (
      'summary' => '更新指定直播相关信息。',
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
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'LiveId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '直播资源的唯一标识ID',
            'description' => '直播资源的唯一标识ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'b7f2****ebb3',
          ),
        ),
        1 => 
        array (
          'name' => 'Title',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '直播标题，支持中英文，最大长度256位',
            'description' => '直播标题，支持中英文，最大长度256个字符。',
            'type' => 'string',
            'required' => false,
            'example' => 'This is a title.',
          ),
        ),
        2 => 
        array (
          'name' => 'Introduction',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '直播简介，支持中英文，最大长度2048位',
            'description' => '直播简介，支持中英文，最大长度2048个字符。',
            'type' => 'string',
            'required' => false,
            'example' => 'This is an introduction.',
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
              'RequestId' => 
              array (
                'title' => '请求ID',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'FE22D613-D3C6-4A58-87CA-F21FC85AA08E',
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
            'errorCode' => 'InvalidLiveId.Live.NotFound',
            'errorMessage' => 'The live broadcast does not exist.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"FE22D613-D3C6-4A58-87CA-F21FC85AA08E\\"\\n}","errorExample":""},{"type":"xml","example":"<UpdateLiveResponse>\\n    <RequestId>FE22D613-D3C6-4A58-87CA-F21FC85AA08E</RequestId>\\n    </UpdateLiveResponse>","errorExample":""}]',
      'title' => '更新直播信息',
    ),
    'StopLive' => 
    array (
      'summary' => '停止指定直播，直播状态改变为直播结束。',
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
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'AppId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '租户名',
            'description' => '应用唯一标识，可以包含小写字母、数字，长度为6个字符。',
            'type' => 'string',
            'required' => true,
            'example' => '7m***q',
          ),
        ),
        1 => 
        array (
          'name' => 'RoomId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '房间ID，最大长度36位',
            'description' => '房间ID，支持英文和数字，最大长度36个字符。',
            'type' => 'string',
            'required' => true,
            'example' => 'AE35-****-T95F',
          ),
        ),
        2 => 
        array (
          'name' => 'UserId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '创建直播用户ID',
            'description' => '创建直播的UserId，在AppId下单独唯一。小写英文、数字、下划线（_）和小数点（.）组成，最大长度32个字符。',
            'type' => 'string',
            'required' => true,
            'example' => 'as****hs',
          ),
        ),
        3 => 
        array (
          'name' => 'LiveId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '直播资源的唯一标识ID',
            'description' => '直播资源的唯一标识ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'b7f2****ebb3',
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
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'FE22D613-D3C6-4A58-87CA-F21FC85AA08E',
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
            'errorCode' => 'InvalidLiveId.Live.NotFound',
            'errorMessage' => 'The live broadcast does not exist.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"FE22D613-D3C6-4A58-87CA-F21FC85AA08E\\"\\n}","errorExample":""},{"type":"xml","example":"<StopLiveResponse>\\n    <RequestId>FE22D613-D3C6-4A58-87CA-F21FC85AA08E</RequestId>\\n    </StopLiveResponse>","errorExample":""}]',
      'title' => '停止直播',
    ),
    'GetLive' => 
    array (
      'summary' => '查询与指定直播相关联的信息。',
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
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'LiveId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '直播资源的唯一标识ID',
            'description' => '直播资源的唯一标识ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'b7f2****ebb3',
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
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'FE22D613-D3C6-4A58-87CA-F21FC85AA08E',
              ),
              'Result' => 
              array (
                'description' => '查询直播详情的返回结果。',
                'type' => 'object',
                'properties' => 
                array (
                  'AnchorId' => 
                  array (
                    'title' => '主播ID',
                    'description' => '主播ID。',
                    'type' => 'string',
                    'example' => 'as****hs',
                  ),
                  'LiveId' => 
                  array (
                    'title' => '直播资源的唯一标识ID',
                    'description' => '直播资源的唯一标识ID。',
                    'type' => 'string',
                    'example' => 'b7f2****ebb3',
                  ),
                  'Title' => 
                  array (
                    'title' => '直播标题',
                    'description' => '直播标题。',
                    'type' => 'string',
                    'example' => 'This is a title.',
                  ),
                  'PlaybackUrl' => 
                  array (
                    'title' => '直播回放地址',
                    'description' => '直播回放地址。直播开始时生成，直播结束后可以观看。',
                    'type' => 'string',
                    'example' => 'http://demo-app-playback.com/live/b7f2****ebb3.m3u8?auth_key=e620****a8e3',
                  ),
                  'CreateTime' => 
                  array (
                    'title' => '直播创建时间（毫秒ms）',
                    'description' => '直播创建时间，单位：毫秒。直播开始后生成。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1624259500000',
                  ),
                  'EndTime' => 
                  array (
                    'title' => '直播结束时间（毫秒ms）',
                    'description' => '直播结束时间，单位：毫秒。直播结束后生成。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1624259500000',
                  ),
                  'Duration' => 
                  array (
                    'title' => '直播持续时间（毫秒ms）',
                    'description' => '直播持续时间，单位：毫秒。直播结束后生成。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '10000',
                  ),
                  'PushUrl' => 
                  array (
                    'title' => '直播推流地址',
                    'description' => '直播推流地址。',
                    'type' => 'string',
                    'example' => 'rtmp://demo-app-push.com/live/e620****a8e3?auth_key=e620****a8e3',
                  ),
                  'LiveUrl' => 
                  array (
                    'title' => '直播拉流地址',
                    'description' => '直播拉流地址。',
                    'type' => 'string',
                    'example' => 'http://demo-app-live.com/live/e620****a8e3.flv?auth_key=e620****a8e3',
                  ),
                  'Status' => 
                  array (
                    'title' => '直播状态：Created-已创建，未开播，Living-直播中，End-直播结束',
                    'description' => '直播状态。取值：
* **Created**：已创建，未开始直播。
* **Living**：直播中。
* **End**：直播结束。',
                    'type' => 'string',
                    'example' => 'Created',
                  ),
                  'Introduction' => 
                  array (
                    'title' => '直播简介',
                    'description' => '直播简介。',
                    'type' => 'string',
                    'example' => 'This is an introduction.',
                  ),
                  'RoomId' => 
                  array (
                    'title' => '房间id',
                    'description' => '房间ID。',
                    'type' => 'string',
                    'example' => 'AE35-****-T95F',
                  ),
                  'AppId' => 
                  array (
                    'title' => '租户名',
                    'description' => '租户名。',
                    'type' => 'string',
                    'example' => '7m***q',
                  ),
                  'UserId' => 
                  array (
                    'title' => '创建直播用户',
                    'description' => '创建直播用户。',
                    'type' => 'string',
                    'example' => 'as****hs',
                  ),
                  'CodeLevel' => 
                  array (
                    'title' => '直播推送分辨率 -1:lld 1:lsd 2:lhd 3:lud',
                    'description' => '直播推流码率。取值：
* **-1**：流畅，分辨率：宽度自适应，高度：360；编码格式：H.264。
* **1**：标清，分辨率：宽度自适应，高度：432；编码格式：H.264。
* **2**：高清，分辨率：宽度自适应，高度：648；编码格式：H.264。
* **3**：超清，分辨率：宽度自适应，高度：1080；编码格式：H.264。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                  'PlayUrlInfoList' => 
                  array (
                    'title' => '多分辨率多协议播放信息',
                    'description' => '多分辨率多协议播放信息。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'CodeLevel' => 
                        array (
                          'title' => '直播拉取分辨率 -1:lld 1:lsd 2:lhd 3:lud',
                          'description' => '直播推流码率。取值：
* **-1**：流畅，分辨率：宽度自适应，高度：360；编码格式：H.264。
* **1**：标清，分辨率：宽度自适应，高度：432；编码格式：H.264。
* **2**：高清，分辨率：宽度自适应，高度：648；编码格式：H.264。
* **3**：超清，分辨率：宽度自适应，高度：1080；编码格式：H.264。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '1',
                        ),
                        'FlvUrl' => 
                        array (
                          'title' => 'flv拉流地址',
                          'description' => 'FLV拉流地址。',
                          'type' => 'string',
                          'example' => 'http://demo-app-live.com/live/b7f2****ebb3.flv?auth_key=e620****a8e3',
                        ),
                        'HlsUrl' => 
                        array (
                          'title' => 'hls拉流地址',
                          'description' => 'HLS拉流地址。',
                          'type' => 'string',
                          'example' => 'http://demo-app-live.com/live/b7f2****ebb3.m3u8?auth_key=e620****a8e3',
                        ),
                        'RtmpUrl' => 
                        array (
                          'title' => 'rtmp拉流地址',
                          'description' => 'RTMP拉流地址。',
                          'type' => 'string',
                          'example' => 'rtmp://demo-app-live.com/live/b7f2****ebb3?auth_key=e620****a8e3',
                        ),
                      ),
                    ),
                  ),
                  'CoverUrl' => 
                  array (
                    'title' => '封面图片',
                    'description' => '封面图片。',
                    'type' => 'string',
                    'example' => 'http://demo-app-live.com/live/b7f29c02-****-40fd-****-e8d06a8aebb3.png',
                  ),
                  'UserDefineField' => 
                  array (
                    'title' => '用户自定义数据存储',
                    'description' => '用户自定义数据存储。',
                    'type' => 'string',
                    'example' => '{"selfData":"example"}',
                  ),
                  'HlsUrl' => 
                  array (
                    'title' => 'hls播放地址',
                    'description' => '原画HLS播放地址。',
                    'type' => 'string',
                    'example' => 'http://demo-app-live.com/live/b7f29c02-****-40fd-****-e8d06a8aebb3.m3u8?auth_key=1627522726-0-0-******e620b363d4cf8a8e3',
                  ),
                  'ArtcInfo' => 
                  array (
                    'title' => 'rts播流信息',
                    'description' => 'RTS低延迟播流信息。',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'ArtcUrl' => 
                      array (
                        'title' => '源码地址',
                        'description' => 'RTS原码流地址，推荐移动端使用。',
                        'type' => 'string',
                        'example' => 'artc://demo-app-live.com/live/b7f29c02-****-40fd-****-e8d06a8aebb3?auth_key=1627522726-0-0-******e620b363d4cf8a8e3',
                      ),
                      'ArtcH5Url' => 
                      array (
                        'title' => '原画转码地址',
                        'description' => 'RTS转码流地址，推荐web端使用。',
                        'type' => 'string',
                        'example' => 'artc://demo-app-live.com/live/b7f29c02-****-40fd-****-e8d06a8aebb3_origin-RTS?auth_key=1627522726-0-0-******e620b363d4cf8a8e3',
                      ),
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"FE22D613-D3C6-4A58-87CA-F21FC85AA08E\\",\\n  \\"Result\\": {\\n    \\"AnchorId\\": \\"as****hs\\",\\n    \\"LiveId\\": \\"b7f2****ebb3\\",\\n    \\"Title\\": \\"This is a title.\\",\\n    \\"PlaybackUrl\\": \\"http://demo-app-playback.com/live/b7f2****ebb3.m3u8?auth_key=e620****a8e3\\",\\n    \\"CreateTime\\": 1624259500000,\\n    \\"EndTime\\": 1624259500000,\\n    \\"Duration\\": 10000,\\n    \\"PushUrl\\": \\"rtmp://demo-app-push.com/live/e620****a8e3?auth_key=e620****a8e3\\",\\n    \\"LiveUrl\\": \\"http://demo-app-live.com/live/e620****a8e3.flv?auth_key=e620****a8e3\\",\\n    \\"Status\\": \\"Created\\",\\n    \\"Introduction\\": \\"This is an introduction.\\",\\n    \\"RoomId\\": \\"AE35-****-T95F\\",\\n    \\"AppId\\": \\"7m***q\\",\\n    \\"UserId\\": \\"as****hs\\",\\n    \\"CodeLevel\\": 1,\\n    \\"PlayUrlInfoList\\": [\\n      {\\n        \\"CodeLevel\\": 1,\\n        \\"FlvUrl\\": \\"http://demo-app-live.com/live/b7f2****ebb3.flv?auth_key=e620****a8e3\\",\\n        \\"HlsUrl\\": \\"http://demo-app-live.com/live/b7f2****ebb3.m3u8?auth_key=e620****a8e3\\",\\n        \\"RtmpUrl\\": \\"rtmp://demo-app-live.com/live/b7f2****ebb3?auth_key=e620****a8e3\\"\\n      }\\n    ],\\n    \\"CoverUrl\\": \\"http://demo-app-live.com/live/b7f29c02-****-40fd-****-e8d06a8aebb3.png\\",\\n    \\"UserDefineField\\": \\"{\\\\\\"selfData\\\\\\":\\\\\\"example\\\\\\"}\\",\\n    \\"HlsUrl\\": \\"http://demo-app-live.com/live/b7f29c02-****-40fd-****-e8d06a8aebb3.m3u8?auth_key=1627522726-0-0-******e620b363d4cf8a8e3\\",\\n    \\"ArtcInfo\\": {\\n      \\"ArtcUrl\\": \\"artc://demo-app-live.com/live/b7f29c02-****-40fd-****-e8d06a8aebb3?auth_key=1627522726-0-0-******e620b363d4cf8a8e3\\",\\n      \\"ArtcH5Url\\": \\"artc://demo-app-live.com/live/b7f29c02-****-40fd-****-e8d06a8aebb3_origin-RTS?auth_key=1627522726-0-0-******e620b363d4cf8a8e3\\"\\n    }\\n  }\\n}","errorExample":""},{"type":"xml","example":"<GetLiveResponse>\\n    <RequestId>FE22D613-D3C6-4A58-87CA-F21FC85AA08E</RequestId>\\n    <Result>\\n        <AnchorId>as****hs</AnchorId>\\n        <LiveId>b7f2****ebb3</LiveId>\\n        <Title>This is a title.</Title>\\n        <PlaybackUrl>http://demo-app-playback.com/live/b7f2****ebb3.m3u8?auth_key=e620****a8e3</PlaybackUrl>\\n        <CreateTime>1624259500000</CreateTime>\\n        <EndTime>1624259500000</EndTime>\\n        <Duration>10000</Duration>\\n        <PushUrl>rtmp://demo-app-push.com/live/e620****a8e3?auth_key=e620****a8e3</PushUrl>\\n        <LiveUrl>http://demo-app-live.com/live/e620****a8e3.flv?auth_key=e620****a8e3</LiveUrl>\\n        <Status>Created</Status>\\n        <Introduction>This is an introduction.</Introduction>\\n        <RoomId>AE35-****-T95F</RoomId>\\n        <AppId>7m***q</AppId>\\n        <UserId>as****hs</UserId>\\n        <CodeLevel>1</CodeLevel>\\n        <PlayUrlInfoList>\\n            <CodeLevel>1</CodeLevel>\\n            <FlvUrl>http://demo-app-live.com/live/b7f2****ebb3.flv?auth_key=e620****a8e3</FlvUrl>\\n            <HlsUrl>http://demo-app-live.com/live/b7f2****ebb3.m3u8?auth_key=e620****a8e3</HlsUrl>\\n            <RtmpUrl>rtmp://demo-app-live.com/live/b7f2****ebb3?auth_key=e620****a8e3</RtmpUrl>\\n        </PlayUrlInfoList>\\n    </Result>\\n    </GetLiveResponse>","errorExample":""}]',
      'title' => '查询直播详情',
    ),
  ),
  'endpoints' => 
  array (
    0 => 
    array (
      'regionId' => 'cn-hangzhou',
      'endpoint' => 'imp.aliyuncs.com',
    ),
  ),
);
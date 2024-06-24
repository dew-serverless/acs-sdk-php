<?php return array (
  'version' => '1.0',
  'info' => 
  array (
    'style' => 'PDS',
    'product' => 'pds',
    'version' => '2022-03-01',
  ),
  'directories' => 
  array (
    0 => 
    array (
      'id' => 181654,
      'title' => 'Domain管理',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateDomain',
        1 => 'GetDomain',
        2 => 'UpdateDomain',
        3 => 'ListDomains',
        4 => 'SearchDomains',
        5 => 'DeleteDomain',
      ),
    ),
    1 => 
    array (
      'id' => 165270,
      'title' => '认证与授权',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'Authorize',
        1 => 'Token',
      ),
    ),
    2 => 
    array (
      'id' => 163808,
      'title' => '账号管理',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'GetLinkInfoByUserId',
        1 => 'LinkAccount',
        2 => 'GetLinkInfo',
        3 => 'UnLinkAccount',
      ),
    ),
    3 => 
    array (
      'id' => 165207,
      'title' => '群组管理',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateGroup',
        1 => 'UpdateGroup',
        2 => 'GetGroup',
        3 => 'ListGroup',
        4 => 'DeleteGroup',
        5 => 'AddGroupMember',
        6 => 'RemoveGroupMember',
        7 => 'ListGroupMember',
      ),
    ),
    4 => 
    array (
      'id' => 163812,
      'title' => '用户管理',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateUser',
        1 => 'ImportUser',
        2 => 'UpdateUser',
        3 => 'GetUser',
        4 => 'ListUser',
        5 => 'SearchUser',
        6 => 'DeleteUser',
      ),
    ),
    5 => 
    array (
      'id' => 163815,
      'title' => '空间管理',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateDrive',
        1 => 'UpdateDrive',
        2 => 'GetDrive',
        3 => 'ListDrive',
        4 => 'GetDefaultDrive',
        5 => 'ListMyDrives',
        6 => 'SearchDrive',
        7 => 'DeleteDrive',
      ),
    ),
    6 => 
    array (
      'id' => 163817,
      'title' => '文件管理',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateFile',
        1 => 'DeleteFile',
        2 => 'UpdateFile',
        3 => 'SearchFile',
        4 => 'ListFile',
        5 => 'GetFile',
        6 => 'DownloadFile',
        7 => 'GetUploadUrl',
        8 => 'ListUploadedParts',
        9 => 'CompleteFile',
        10 => 'MoveFile',
        11 => 'CopyFile',
        12 => 'GetDownloadUrl',
        13 => 'FilePutUserTags',
        14 => 'FileDeleteUserTags',
      ),
    ),
    7 => 
    array (
      'id' => 168925,
      'title' => '文件多版本管理',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'DeleteRevision',
        1 => 'UpdateRevision',
        2 => 'RestoreRevision',
        3 => 'ListRevision',
        4 => 'GetRevision',
      ),
    ),
    8 => 
    array (
      'id' => 165276,
      'title' => '增量处理',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'ScanFile',
        1 => 'ListDelta',
        2 => 'DeltaGetLastCursor',
      ),
    ),
    9 => 
    array (
      'id' => 164951,
      'title' => '权限管理',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'ListReceivedFile',
        1 => 'ListMyGroupDrive',
        2 => 'FileRemovePermission',
        3 => 'FileAddPermission',
        4 => 'FileListPermission',
        5 => 'ListAssignment',
        6 => 'AssignRole',
        7 => 'CancelAssignRole',
      ),
    ),
    10 => 
    array (
      'id' => 164958,
      'title' => '分享管理',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateShareLink',
        1 => 'UpdateShareLink',
        2 => 'SearchShareLink',
        3 => 'CancelShareLink',
        4 => 'ListShareLink',
        5 => 'GetShareLink',
        6 => 'GetShareLinkByAnonymous',
        7 => 'GetShareLinkToken',
      ),
    ),
    11 => 
    array (
      'id' => 164964,
      'title' => '回收站管理',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'TrashFile',
        1 => 'ClearRecyclebin',
        2 => 'ListRecyclebin',
        3 => 'RestoreFile',
      ),
    ),
    12 => 
    array (
      'id' => 163810,
      'title' => '图像AI管理',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'UpdateFacegroup',
        1 => 'ListTags',
        2 => 'ListAddressGroups',
        3 => 'ListFacegroups',
        4 => 'SearchAddressGroups',
        5 => 'RemoveFaceGroupFile',
        6 => 'CreateStory',
        7 => 'CreateCustomizedStory',
        8 => 'SearchStories',
        9 => 'GetStory',
        10 => 'UpdateStory',
        11 => 'DeleteStory',
        12 => 'AddStoryFiles',
        13 => 'RemoveStoryFiles',
        14 => 'CreateSimilarImageClusterTask',
        15 => 'GetTaskStatus',
        16 => 'SearchSimilarImageClusters',
      ),
    ),
    13 => 
    array (
      'id' => 165162,
      'title' => '任务管理',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'GetAsyncTask',
      ),
    ),
    14 => 
    array (
      'id' => 166916,
      'title' => '在线视频预览',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'GetVideoPreviewPlayMeta',
        1 => 'GetVideoPreviewPlayInfo',
      ),
    ),
    15 => 
    array (
      'id' => 182149,
      'title' => '权益管理',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateIdentityToBenefitPkgMapping',
        1 => 'UpdateIdentityToBenefitPkgMapping',
        2 => 'GetIdentityToBenefitPkgMapping',
        3 => 'ListIdentityToBenefitPkgMapping',
      ),
    ),
    16 => 
    array (
      'id' => 182158,
      'title' => '内容安全管理',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'InvestigateFile',
        1 => 'CsiGetFileInfo',
      ),
    ),
    17 => 
    array (
      'id' => 172104,
      'title' => '其他',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'Batch',
        1 => 'GetDomainQuota',
        2 => 'GroupUpdateName',
      ),
    ),
    18 => 
    array (
      'id' => 0,
      'title' => '其它',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'InnerSignIn',
        1 => 'SelectDomain',
      ),
    ),
  ),
  'components' => 
  array (
    'schemas' => 
    array (
      'AccountAccessTokenResponse' => 
      array (
        'title' => '账号 access token 的相应',
        'description' => '账号 access token 的相应结构',
        'type' => 'object',
        'properties' => 
        array (
          'access_token' => 
          array (
            'title' => '访问凭证',
            'type' => 'string',
          ),
          'refresh_token' => 
          array (
            'title' => '刷新凭证',
            'type' => 'string',
          ),
          'expires_in' => 
          array (
            'title' => '凭证有效期',
            'type' => 'integer',
            'format' => 'int64',
          ),
          'token_type' => 
          array (
            'title' => '凭证类型',
            'type' => 'string',
          ),
          'user_id' => 
          array (
            'title' => '用户ID',
            'type' => 'string',
          ),
          'user_name' => 
          array (
            'title' => '用户名',
            'type' => 'string',
          ),
          'avatar' => 
          array (
            'title' => '用户头像',
            'type' => 'string',
          ),
          'nick_name' => 
          array (
            'title' => '用户昵称',
            'type' => 'string',
          ),
          'default_drive_id' => 
          array (
            'title' => '用户默认空间ID',
            'type' => 'string',
          ),
          'role' => 
          array (
            'title' => '用户角色',
            'type' => 'string',
          ),
          'status' => 
          array (
            'title' => '用户状态',
            'type' => 'string',
          ),
          'expire_time' => 
          array (
            'title' => '凭证过期时间',
            'type' => 'string',
          ),
          'is_first_login' => 
          array (
            'title' => '是否首次登录',
            'type' => 'boolean',
          ),
          'device_id' => 
          array (
            'title' => '登录设备ID',
            'type' => 'string',
          ),
          'device_name' => 
          array (
            'title' => '登录设备名称',
            'type' => 'string',
          ),
          'domain_id' => 
          array (
            'title' => '域ID',
            'type' => 'string',
          ),
          'default_sbox_drive_id' => 
          array (
            'title' => '默认保险箱空间 ID',
            'type' => 'string',
          ),
          'state' => 
          array (
            'title' => '临时权限，用于登录成功后设置密码',
            'type' => 'string',
          ),
          'exist_link' => 
          array (
            'title' => '当前用户已存在的登录方式',
            'type' => 'array',
            'items' => 
            array (
              '$ref' => '#/components/schemas/LinkInfo',
            ),
          ),
          'need_link' => 
          array (
            'title' => '是否需要引用',
            'type' => 'boolean',
          ),
          'user_data' => 
          array (
            'title' => '用户自定义数据，格式为json，可用于配置项、少量临时数据等存储，不超过1K',
            'type' => 'object',
            'additionalProperties' => 
            array (
              'type' => 'string',
            ),
          ),
          'pin_setup' => 
          array (
            'title' => '用户的数据密码是否设置过',
            'type' => 'boolean',
          ),
          'need_rp_verify' => 
          array (
            'title' => '用户是否需要进行的实人认证',
            'type' => 'boolean',
          ),
          'path_status' => 
          array (
            'title' => '用户 path 开启状',
            'type' => 'string',
          ),
        ),
      ),
      'AccountLinkInfo' => 
      array (
        'title' => 'A short description of struct',
        'description' => '用户绑定的账号信息',
        'type' => 'object',
        'properties' => 
        array (
          'domain_id' => 
          array (
            'title' => '域ID',
            'description' => '域ID',
            'type' => 'string',
            'example' => 'bj1',
          ),
          'authentication_type' => 
          array (
            'title' => '账号类型',
            'description' => '账号类型

- mobile：手机号

- email：邮箱

- ding：钉钉

- ram：阿里云RAM子账号

- wechat：企业微信

- ldap：LDAP账号

- custom：自定义账号',
            'type' => 'string',
            'example' => 'mobile',
          ),
          'identity' => 
          array (
            'title' => '账号唯一标识',
            'description' => '账号唯一标识',
            'type' => 'string',
            'example' => '136***000',
          ),
          'extra' => 
          array (
            'title' => '账号附加信息',
            'description' => '账号附加信息，当账号类型为手机号时，此字段表示国家编码，比如中国大陆为86，当前只有手机号才返回此字段',
            'type' => 'string',
            'example' => '86',
          ),
          'user_id' => 
          array (
            'title' => '账号对应的用户ID',
            'description' => '账号对应的用户ID',
            'type' => 'string',
            'example' => '00016a587b62b50003deea299a4f5b50',
          ),
          'created_at' => 
          array (
            'title' => '账号创建时间',
            'description' => '账号创建时间，从1970年1月1日0点到现在的毫秒时间戳',
            'type' => 'integer',
            'format' => 'int64',
            'example' => '1639762579768',
          ),
          'display_name' => 
          array (
            'title' => '账号显示名',
            'description' => '账号显示名，用于界面上展示的名称，比如LDAP账号唯一标识为uid，但是展示给用户看的可以选择工号或其他信息',
            'type' => 'string',
            'example' => '001',
          ),
        ),
      ),
      'Activity' => 
      array (
        'title' => 'A short description of struct',
        'description' => '最近活动',
        'type' => 'object',
        'properties' => 
        array (
          'drive_id' => 
          array (
            'title' => '空间 id',
            'type' => 'string',
          ),
          'activity_id' => 
          array (
            'title' => '活动 id',
            'type' => 'string',
          ),
          'user_id' => 
          array (
            'title' => '用户 id',
            'type' => 'string',
          ),
          'device' => 
          array (
            'title' => '设备名',
            'type' => 'string',
          ),
          'event_type' => 
          array (
            'title' => '事件类型',
            'type' => 'integer',
            'format' => 'int32',
          ),
          'latest_event_time' => 
          array (
            'title' => '最近事件时间',
            'type' => 'string',
          ),
          'resource_category' => 
          array (
            'title' => '资源类型',
            'type' => 'integer',
            'format' => 'int32',
          ),
          'resource_list' => 
          array (
            'title' => '资源列表',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'object',
            ),
          ),
          'total_resource_count' => 
          array (
            'title' => '资源总数',
            'type' => 'integer',
            'format' => 'int64',
          ),
        ),
      ),
      'Address' => 
      array (
        'title' => '地点',
        'description' => '地点',
        'type' => 'object',
        'properties' => 
        array (
          'country' => 
          array (
            'title' => '国家或地区',
            'description' => '国家或地区',
            'type' => 'string',
            'example' => '中国',
          ),
          'province' => 
          array (
            'title' => '省',
            'description' => '省',
            'type' => 'string',
            'example' => '浙江省',
          ),
          'city' => 
          array (
            'title' => '城市',
            'description' => '城市',
            'type' => 'string',
            'example' => '杭州市',
          ),
          'district' => 
          array (
            'title' => '区',
            'description' => '区',
            'type' => 'string',
            'example' => '余杭区',
          ),
          'township' => 
          array (
            'title' => '街道',
            'description' => '街道',
            'type' => 'string',
            'example' => '文一西路',
          ),
        ),
      ),
      'AddressGroup' => 
      array (
        'title' => '地点分组',
        'description' => '地点分组',
        'type' => 'object',
        'properties' => 
        array (
          'name' => 
          array (
            'title' => '地点名称',
            'description' => '地点名称',
            'type' => 'string',
          ),
          'location' => 
          array (
            'title' => '经纬度',
            'description' => '经纬度',
            'type' => 'string',
            'example' => '30.12231,120.1212',
          ),
          'count' => 
          array (
            'title' => '地点数量',
            'description' => '地点分组内文件数量',
            'type' => 'integer',
            'format' => 'int64',
            'example' => '10',
          ),
          'cover_url' => 
          array (
            'title' => '地点封面图片地址',
            'description' => '地点封面图片地址',
            'type' => 'string',
          ),
          'cover_file_id' => 
          array (
            'title' => '地点封面图片文件ID',
            'description' => '地点封面图片文件ID',
            'type' => 'string',
          ),
          'address_detail' => 
          array (
            'title' => '地点详细信息',
            'description' => '地点详细信息',
            '$ref' => '#/components/schemas/Address',
          ),
        ),
      ),
      'Aggregation' => 
      array (
        'title' => 'A short description of struct',
        'type' => 'object',
        'properties' => 
        array (
          'field' => 
          array (
            'title' => '字段',
            'type' => 'string',
            'format' => 'byte',
          ),
          'operation' => 
          array (
            'title' => '操作',
            'type' => 'string',
            'format' => 'byte',
          ),
          'value' => 
          array (
            'title' => '值',
            'type' => 'number',
            'format' => 'double',
          ),
          'groups' => 
          array (
            'title' => '组',
            'type' => 'array',
            'items' => 
            array (
              'required' => false,
              '$ref' => '#/components/schemas/AggregationsGroup',
            ),
          ),
        ),
      ),
      'AggregationsGroup' => 
      array (
        'title' => 'A short description of struct',
        'type' => 'object',
        'properties' => 
        array (
          'count' => 
          array (
            'title' => '计数',
            'type' => 'integer',
            'format' => 'int64',
          ),
          'value' => 
          array (
            'title' => '值',
            'type' => 'string',
            'format' => 'byte',
          ),
        ),
      ),
      'Album' => 
      array (
        'title' => 'A short description of struct',
        'type' => 'object',
        'properties' => 
        array (
          'album_id' => 
          array (
            'title' => 'album_id',
            'type' => 'string',
          ),
          'owner' => 
          array (
            'title' => 'owner',
            'type' => 'string',
          ),
          'name' => 
          array (
            'title' => 'name',
            'type' => 'string',
          ),
          'description' => 
          array (
            'title' => 'description',
            'type' => 'string',
          ),
          'created_at' => 
          array (
            'title' => 'created_at',
            'type' => 'string',
          ),
          'updated_at' => 
          array (
            'title' => 'updated_at',
            'type' => 'string',
          ),
          'user_tags' => 
          array (
            'title' => 'user_tags',
            'type' => 'object',
            'additionalProperties' => 
            array (
              'type' => 'string',
            ),
          ),
          'file_count' => 
          array (
            'title' => 'file_count',
            'type' => 'integer',
            'format' => 'int64',
          ),
          'cover_file' => 
          array (
            'title' => 'cover_file',
            '$ref' => '#/components/schemas/File',
          ),
          'base_face_file' => 
          array (
            'title' => 'base_face_file',
            '$ref' => '#/components/schemas/File',
          ),
          'base_face_group_id' => 
          array (
            'title' => 'base_face_group_id',
            'type' => 'string',
          ),
        ),
      ),
      'AlbumFile' => 
      array (
        'title' => 'A short description of struct',
        'type' => 'object',
        'properties' => 
        array (
          'album_id' => 
          array (
            'title' => '相册 ID',
            'type' => 'string',
          ),
          'joined_at' => 
          array (
            'title' => '加入相册的时间戳',
            'type' => 'integer',
            'format' => 'int64',
          ),
          'domain_id' => 
          array (
            'title' => '域 ID',
            'type' => 'string',
          ),
          'drive_id' => 
          array (
            'title' => '空间 ID',
            'type' => 'string',
          ),
          'file_id' => 
          array (
            'title' => '文件 ID',
            'type' => 'string',
          ),
          'name' => 
          array (
            'title' => '文件名',
            'type' => 'string',
          ),
          'type' => 
          array (
            'title' => '文件类型',
            'type' => 'string',
          ),
          'content_type' => 
          array (
            'title' => '内容类型',
            'type' => 'string',
          ),
          'created_at' => 
          array (
            'title' => '创建时间',
            'type' => 'string',
          ),
          'updated_at' => 
          array (
            'title' => '更新时间',
            'type' => 'string',
          ),
          'description' => 
          array (
            'title' => '描述',
            'type' => 'string',
          ),
          'transhed_at' => 
          array (
            'title' => '放入回收站时间',
            'type' => 'string',
          ),
          'file_extension' => 
          array (
            'title' => '文件后缀',
            'type' => 'string',
          ),
          'mime_type' => 
          array (
            'title' => 'MIME 类型',
            'type' => 'string',
          ),
          'hidden' => 
          array (
            'title' => '是否隐藏',
            'type' => 'boolean',
          ),
          'size' => 
          array (
            'title' => '大小',
            'type' => 'integer',
            'format' => 'int64',
          ),
          'starred' => 
          array (
            'title' => '是否收藏',
            'type' => 'boolean',
          ),
          'status' => 
          array (
            'title' => '状态',
            'type' => 'string',
          ),
          'user_meta' => 
          array (
            'title' => '自定义元数据',
            'type' => 'string',
          ),
          'labels' => 
          array (
            'title' => '标签',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'string',
            ),
          ),
          'upload_id' => 
          array (
            'title' => '上传 ID',
            'type' => 'string',
          ),
          'parent_file_id' => 
          array (
            'title' => '父文件 ID',
            'type' => 'string',
          ),
          'crc64_hash' => 
          array (
            'title' => 'crc64',
            'type' => 'string',
          ),
          'content_hash' => 
          array (
            'title' => '内容哈希',
            'type' => 'string',
          ),
          'content_hash_name' => 
          array (
            'title' => '内容哈希算法',
            'type' => 'string',
          ),
          'download_url' => 
          array (
            'title' => '下载地址',
            'type' => 'string',
          ),
          'thumbnail' => 
          array (
            'title' => '缩略图地址',
            'type' => 'string',
          ),
          'category' => 
          array (
            'title' => '文件分类',
            'type' => 'string',
          ),
          'local_created_at' => 
          array (
            'title' => '本地创建时间',
            'type' => 'string',
          ),
          'local_modified_at' => 
          array (
            'title' => '本地修改时间',
            'type' => 'string',
          ),
          'revision_id' => 
          array (
            'title' => '版本 ID',
            'type' => 'string',
          ),
          'investigation_info' => 
          array (
            'title' => '审核信息',
            '$ref' => '#/components/schemas/InvestigationInfo',
          ),
          'thumbnail_urls' => 
          array (
            'title' => '多尺度缩略图地址',
            'type' => 'object',
            'additionalProperties' => 
            array (
              'type' => 'string',
            ),
          ),
          'image_media_metadata' => 
          array (
            'title' => '图片信息。仅开启增值服务图片处理功能有效。',
            '$ref' => '#/components/schemas/ImageMediaMetadata',
          ),
          'ex_fields_info' => 
          array (
            'title' => '自定义扩展信息',
            'type' => 'object',
            'additionalProperties' => 
            array (
              'type' => 'any',
            ),
          ),
          'object_uri' => 
          array (
            'title' => '内容对象的uri',
            'type' => 'string',
          ),
        ),
      ),
      'App' => 
      array (
        'title' => 'app',
        'type' => 'object',
        'properties' => 
        array (
          'app_id' => 
          array (
            'title' => 'app_id',
            'type' => 'string',
          ),
          'app_name' => 
          array (
            'title' => 'app_name',
            'type' => 'string',
          ),
          'description' => 
          array (
            'title' => 'description',
            'type' => 'string',
          ),
          'redirect_uri' => 
          array (
            'title' => 'redirect_uri',
            'type' => 'string',
          ),
          'scope' => 
          array (
            'title' => 'scope',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'string',
            ),
          ),
          'app_secret' => 
          array (
            'title' => 'app_secret',
            'type' => 'string',
          ),
          'created_at' => 
          array (
            'title' => 'created_at',
            'type' => 'string',
          ),
          'updated_at' => 
          array (
            'title' => 'updated_at',
            'type' => 'string',
          ),
          'logo' => 
          array (
            'title' => 'logo',
            'type' => 'string',
          ),
          'type' => 
          array (
            'title' => 'type',
            'type' => 'string',
          ),
          'provider' => 
          array (
            'title' => 'provider',
            'type' => 'string',
          ),
          'stage' => 
          array (
            'title' => 'stage',
            'type' => 'string',
          ),
        ),
      ),
      'AppAccessStrategy' => 
      array (
        'title' => 'App访问策略',
        'description' => 'App访问策略',
        'type' => 'object',
        'properties' => 
        array (
          'effect' => 
          array (
            'title' => 'App 访问策略',
            'description' => '全局 App 访问策略
* allow 表示允许所有 app 来访问该 domain
* deny 表示拒绝所有 app 来访问该 domain（默认）


建议配置：
1. 全局访问策略 effect 设置为 deny
2. 允许部分 app ID 来访问，设置 except_app_id_list 为 ["appid1", "appid2"]',
            'type' => 'string',
            'enumValueTitles' => 
            array (
              'allow' => '允许',
              'deny' => '拒绝',
            ),
            'example' => 'deny',
          ),
          'except_app_id_list' => 
          array (
            'title' => '白名单或黑名单AppID列表',
            'description' => '例外的 app ID 列表

 * 当全局策略 effect 为 allow 时，表示全局允许所有的 app 来访问 domain，但是处于 except_app_id_list 列表的 app 则禁止访问 domain。
 * 当全局策略 effect 为 deny 时，表示全局禁止所有的 app 来访问 domain，但是处于 except_app_id_list 列表的 app 则允许访问 domain。',
            'type' => 'array',
            'items' => 
            array (
              'description' => 'appID',
              'type' => 'string',
              'example' => '8ovxCTRUDdbpVWBP',
            ),
          ),
        ),
      ),
      'ArchiveFilesConfigResponse' => 
      array (
        'title' => 'ArchiveFilesConfigResponse',
        'type' => 'object',
        'properties' => 
        array (
          'enabled' => 
          array (
            'title' => 'enabled',
            'type' => 'boolean',
          ),
          'version' => 
          array (
            'title' => 'version',
            'type' => 'string',
          ),
        ),
      ),
      'AuditLog' => 
      array (
        'title' => '审计日志',
        'description' => '审计日志',
        'type' => 'object',
        'properties' => 
        array (
          'log_id' => 
          array (
            'title' => '日志id',
            'type' => 'string',
          ),
          'acted_at' => 
          array (
            'title' => '操作时间',
            'type' => 'string',
          ),
          'actor_id' => 
          array (
            'title' => '操作者id',
            'type' => 'string',
          ),
          'actor_type' => 
          array (
            'title' => '操作者类型',
            'type' => 'string',
          ),
          'actor_name' => 
          array (
            'title' => '操作者名称',
            'type' => 'string',
          ),
          'action_category' => 
          array (
            'title' => '操作分类',
            'type' => 'string',
          ),
          'action_type' => 
          array (
            'title' => '操作类型',
            'type' => 'string',
          ),
          'object_id' => 
          array (
            'title' => '对象id',
            'type' => 'string',
          ),
          'object_name' => 
          array (
            'title' => '对象名',
            'type' => 'string',
          ),
          'file_path_type' => 
          array (
            'title' => '文件空间类型',
            'type' => 'string',
          ),
          'detail' => 
          array (
            'title' => '日志详情',
            '$ref' => '#/components/schemas/AuditLogDetail',
          ),
          'client_ip' => 
          array (
            'title' => '客户端IP',
            'type' => 'string',
          ),
          'client_type' => 
          array (
            'title' => '客户端类型',
            'type' => 'string',
          ),
          'client_version' => 
          array (
            'title' => '客户端版本',
            'type' => 'string',
          ),
          'client_device' => 
          array (
            'title' => '客户端设备',
            'type' => 'string',
          ),
        ),
      ),
      'AuditLogDetail' => 
      array (
        'title' => '审计日志详情',
        'description' => '审计日志详情',
        'type' => 'object',
        'properties' => 
        array (
          'file_log_detail' => 
          array (
            '$ref' => '#/components/schemas/FileLogDetail',
          ),
          'user_log_detail' => 
          array (
            '$ref' => '#/components/schemas/UserLogDetail',
          ),
          'drive_log_detail' => 
          array (
            '$ref' => '#/components/schemas/DriveLogDetail',
          ),
        ),
      ),
      'BaseAlbumFileOperationResult' => 
      array (
        'title' => 'A short description of struct',
        'description' => '相册文件操作结果',
        'type' => 'object',
        'properties' => 
        array (
          'file' => 
          array (
            'title' => '文件源信息',
            '$ref' => '#/components/schemas/CommonFileItem',
          ),
          'is_succeed' => 
          array (
            'title' => '操作是否成功',
            'type' => 'boolean',
          ),
          'error_code' => 
          array (
            'title' => '操作失败的错误码',
            'type' => 'string',
          ),
          'error_message' => 
          array (
            'title' => '操作失败的错误原因',
            'type' => 'string',
          ),
        ),
      ),
      'BaseAssignmentResponse' => 
      array (
        'title' => 'A short description of struct',
        'type' => 'object',
        'properties' => 
        array (
          'domain_id' => 
          array (
            'title' => 'domain_id',
            'type' => 'string',
          ),
          'identity' => 
          array (
            '$ref' => '#/components/schemas/Identity',
          ),
          'role_id' => 
          array (
            'title' => 'role_id',
            'type' => 'string',
          ),
          'manage_resource_type' => 
          array (
            'title' => 'manage_resource_type',
            'type' => 'string',
          ),
          'manage_resource_id' => 
          array (
            'title' => 'manage_resource_id',
            'type' => 'string',
          ),
          'associated_role_tag_id' => 
          array (
            'title' => 'associated_role_tag_id',
            'type' => 'string',
          ),
          'creator' => 
          array (
            'title' => 'creator',
            'type' => 'string',
          ),
          'created_at' => 
          array (
            'title' => 'created_at',
            'type' => 'string',
          ),
          'updated_at' => 
          array (
            'title' => 'updated_at',
            'type' => 'string',
          ),
          'disinherit_sub_group' => 
          array (
            'title' => 'disinherit_sub_group',
            'type' => 'boolean',
          ),
        ),
      ),
      'BaseDomainResponse' => 
      array (
        'title' => 'base domain 信息',
        'description' => 'Domain 基础信息',
        'type' => 'object',
        'properties' => 
        array (
          'parent_domain_id' => 
          array (
            'title' => 'parent_domain_id string 父 domain id，如果存在，表示该 domain为子 domain domain_id string domain id',
            'type' => 'string',
          ),
          'domain_id' => 
          array (
            'title' => 'domain id',
            'type' => 'string',
          ),
          'domain_name' => 
          array (
            'title' => '域名称',
            'type' => 'string',
          ),
          'description' => 
          array (
            'title' => '描述',
            'type' => 'string',
          ),
          'init_drive_enable' => 
          array (
            'title' => '否开通默认网盘。为true则所有用户在第一次登录后都默认分配一个网盘。默认false',
            'type' => 'boolean',
          ),
          'init_drive_size' => 
          array (
            'title' => 'init_drive_enable==true时必选。 默认网盘的大小, 单位：Bytes。为0则表示不限大小。默认为0',
            'type' => 'integer',
            'format' => 'int64',
          ),
          'updated_at' => 
          array (
            'title' => '最后修改时间，ISO格式，如: 2019-04-08T07:05:18.825Z',
            'type' => 'string',
          ),
          'created_at' => 
          array (
            'title' => '创建时间，ISO格式， 如：2019-03-28T13:03:29.298Z',
            'type' => 'string',
          ),
          'size_quota' => 
          array (
            'title' => '容量配额',
            'type' => 'integer',
            'format' => 'int64',
          ),
          'size_quota_used' => 
          array (
            'title' => '容量配额使用空间',
            'type' => 'integer',
            'format' => 'int64',
          ),
          'status' => 
          array (
            'title' => 'domain状态：创建中，正常，已过期',
            'type' => 'integer',
            'format' => 'int64',
          ),
          'used_size' => 
          array (
            'title' => '逻辑空间使用量，单位为字节',
            'type' => 'integer',
            'format' => 'int64',
          ),
          'published_app_access_strategy' => 
          array (
            'title' => 'App 访问策略',
            '$ref' => '#/components/schemas/AppAccessStrategy',
          ),
          'share_link_enabled' => 
          array (
            'title' => '是否允许创建分享链接，默认为 false',
            'type' => 'boolean',
          ),
        ),
      ),
      'BaseDriveResponse' => 
      array (
        'title' => 'A short description of struct',
        'type' => 'object',
        'properties' => 
        array (
          'domain_id' => 
          array (
            'title' => 'Domain ID',
            'type' => 'string',
            'example' => 'hz999',
          ),
          'drive_id' => 
          array (
            'title' => 'Drive ID',
            'type' => 'string',
            'example' => '123',
          ),
          'drive_name' => 
          array (
            'title' => 'Drive 名称',
            'type' => 'string',
            'example' => 'ccpdrive',
          ),
          'description' => 
          array (
            'title' => 'Drive 备注信息',
            'type' => 'string',
            'example' => 'ccp team drive',
          ),
          'creator' => 
          array (
            'title' => 'Drive 创建者',
            'type' => 'string',
            'example' => 'ccp',
          ),
          'owner' => 
          array (
            'title' => 'Drive 所有者',
            'type' => 'string',
            'example' => 'ccp',
          ),
          'owner_type' => 
          array (
            'title' => 'Drive 所有者类型',
            'type' => 'string',
            'example' => 'user',
          ),
          'drive_type' => 
          array (
            'title' => 'Drive 类型',
            'type' => 'string',
            'example' => 'normal',
          ),
          'status' => 
          array (
            'title' => 'Drive 状态',
            'type' => 'string',
            'example' => 'enabled',
          ),
          'used_size' => 
          array (
            'title' => 'Drive 空间已使用量',
            'type' => 'integer',
            'format' => 'int64',
            'example' => '1024',
          ),
          'total_size' => 
          array (
            'title' => 'Drive 空间总量',
            'type' => 'integer',
            'format' => 'int64',
            'example' => '102400',
          ),
          'store_id' => 
          array (
            'title' => '存储 ID, domain的PathType为OSSPath时返回',
            'type' => 'string',
            'example' => '123',
          ),
          'relative_path' => 
          array (
            'title' => 'relative_path',
            'type' => 'string',
          ),
          'encrypt_mode' => 
          array (
            'title' => 'encrypt_mode',
            'type' => 'string',
          ),
          'encrypt_data_access' => 
          array (
            'title' => 'encrypt_data_access',
            'type' => 'boolean',
          ),
          'action_list' => 
          array (
            'title' => 'action_list',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'string',
            ),
          ),
          'created_at' => 
          array (
            'title' => 'created_at',
            'type' => 'string',
          ),
          'updated_at' => 
          array (
            'title' => 'updated_at',
            'type' => 'string',
          ),
          'permission' => 
          array (
            'title' => 'permission',
            'type' => 'object',
            'additionalProperties' => 
            array (
              '$ref' => '#/components/schemas/IDPermission',
            ),
          ),
          'is_handover' => 
          array (
            'title' => '是否为交接的drive',
            'type' => 'boolean',
          ),
          'category' => 
          array (
            'title' => 'category',
            'type' => 'string',
          ),
          'path_status' => 
          array (
            'title' => 'path_status',
            'type' => 'string',
          ),
          'delta_enabled' => 
          array (
            'title' => '是否开启了delta',
            'type' => 'boolean',
          ),
        ),
      ),
      'BaseGroupResponse' => 
      array (
        'title' => 'A short description of struct',
        'type' => 'object',
        'properties' => 
        array (
          'domain_id' => 
          array (
            'title' => 'domain id',
            'type' => 'string',
            'example' => 'bj123',
          ),
          'group_id' => 
          array (
            'title' => 'group id',
            'type' => 'string',
            'example' => 'b38b5681bd964950ad8bc0f8ea504793',
          ),
          'group_name' => 
          array (
            'title' => 'group name',
            'type' => 'string',
            'example' => 'name-111',
          ),
          'description' => 
          array (
            'title' => 'description',
            'type' => 'string',
            'example' => 'desc-111',
          ),
          'created_at' => 
          array (
            'title' => 'created_at',
            'type' => 'integer',
            'format' => 'int64',
            'example' => '111111',
          ),
          'updated_at' => 
          array (
            'title' => 'updated_at',
            'type' => 'string',
            'example' => '111111',
          ),
          'creator' => 
          array (
            'title' => 'creator',
            'type' => 'string',
            'example' => 'system',
          ),
          'permission' => 
          array (
            'title' => 'permission',
            'type' => 'object',
            'additionalProperties' => 
            array (
              '$ref' => '#/components/schemas/IDPermission',
            ),
          ),
          'is_sync' => 
          array (
            'title' => 'is_sync',
            'type' => 'boolean',
          ),
        ),
      ),
      'BaseRoleMemberResponse' => 
      array (
        'title' => 'A short description of struct',
        'type' => 'object',
        'properties' => 
        array (
          'domain_id' => 
          array (
            'title' => 'domain_id',
            'type' => 'string',
          ),
          'identity' => 
          array (
            '$ref' => '#/components/schemas/Identity',
          ),
          'identity_name' => 
          array (
            'title' => 'identity_name',
            'type' => 'string',
          ),
          'creator' => 
          array (
            'title' => 'creator',
            'type' => 'string',
          ),
          'created_at' => 
          array (
            'title' => 'created_at',
            'type' => 'string',
          ),
          'is_admin' => 
          array (
            'title' => 'is_admin',
            'type' => 'boolean',
          ),
          'assignment_list' => 
          array (
            'title' => 'assignment_list',
            'type' => 'array',
            'items' => 
            array (
              '$ref' => '#/components/schemas/BaseAssignmentResponse',
            ),
          ),
          'subdomain_id' => 
          array (
            'title' => 'subdomain_id',
            'type' => 'string',
          ),
        ),
      ),
      'BaseUserResponse' => 
      array (
        'title' => 'A short description of struct',
        'type' => 'object',
        'properties' => 
        array (
          'domain_id' => 
          array (
            'title' => 'Domain ID',
            'type' => 'string',
            'example' => 'hz999',
          ),
          'user_id' => 
          array (
            'title' => '用户 ID',
            'type' => 'string',
            'example' => 'ccpuserid',
          ),
          'avatar' => 
          array (
            'title' => '头像',
            'type' => 'string',
            'example' => 'http://a.b.c/ccp.jpg',
          ),
          'created_at' => 
          array (
            'title' => '用户创建时间',
            'type' => 'string',
            'example' => '1567407718386',
          ),
          'updated_at' => 
          array (
            'title' => '用户修改时间',
            'type' => 'string',
            'example' => '1567407718386',
          ),
          'email' => 
          array (
            'title' => '邮箱',
            'type' => 'string',
            'example' => '123@ccp.com',
          ),
          'nick_name' => 
          array (
            'title' => '昵称',
            'type' => 'string',
            'example' => 'abc',
          ),
          'phone' => 
          array (
            'title' => '电话',
            'type' => 'string',
            'example' => '13700000000',
          ),
          'phone_region' => 
          array (
            'title' => '国家编码',
            'type' => 'string',
          ),
          'role' => 
          array (
            'title' => '角色',
            'type' => 'string',
            'example' => 'user',
          ),
          'status' => 
          array (
            'title' => '用户状态',
            'type' => 'string',
            'example' => 'enabled',
          ),
          'user_name' => 
          array (
            'title' => '用户名称',
            'type' => 'string',
            'example' => 'name',
          ),
          'description' => 
          array (
            'title' => '用户备注信息',
            'type' => 'string',
            'example' => 'ccp team user',
          ),
          'default_drive_id' => 
          array (
            'title' => '默认 Drive ID',
            'type' => 'string',
            'example' => '123',
          ),
          'user_data' => 
          array (
            'title' => '用户自定义数据，格式为json，可用于配置项、少量临时数据等存储，不超过1K',
            'type' => 'object',
            'additionalProperties' => 
            array (
              'type' => 'any',
            ),
          ),
          'deny_change_password_by_self' => 
          array (
            'title' => '禁止用户自行修改密码',
            'type' => 'boolean',
          ),
          'need_change_password_next_login' => 
          array (
            'title' => '下次登录强制修改密码',
            'type' => 'boolean',
          ),
          'creator' => 
          array (
            'title' => 'creator',
            'type' => 'string',
            'example' => 'system',
          ),
          'expired_at' => 
          array (
            'title' => '用户过期时间',
            'type' => 'integer',
            'format' => 'int64',
            'example' => '0',
          ),
          'permission' => 
          array (
            'title' => 'permission',
            'type' => 'object',
            'additionalProperties' => 
            array (
              '$ref' => '#/components/schemas/IDPermission',
            ),
          ),
          'is_sync' => 
          array (
            'title' => 'is_sync',
            'type' => 'boolean',
          ),
          'default_location' => 
          array (
            'title' => 'default_location',
            'type' => 'string',
          ),
          'last_login_time' => 
          array (
            'title' => 'last_login_time',
            'type' => 'integer',
            'format' => 'int64',
          ),
          'path_status' => 
          array (
            'title' => 'path 开启状态',
            'type' => 'string',
          ),
        ),
      ),
      'BenefitPkgDeliveryInfo' => 
      array (
        'title' => 'A short description of struct',
        'description' => '权益包下发信息',
        'type' => 'object',
        'properties' => 
        array (
          'amount' => 
          array (
            'title' => '权益包下发的数量',
            'description' => '权益包下发的数量',
            'type' => 'integer',
            'format' => 'int64',
            'example' => '1',
          ),
          'is_permanent' => 
          array (
            'title' => '是否永久有效',
            'description' => '是否永久有效',
            'type' => 'boolean',
            'example' => 'false',
          ),
          'expire_time' => 
          array (
            'title' => '权益包下发的超期时间',
            'description' => '权益包下发的超期时间

is_permanent为false时，返回有效值',
            'type' => 'string',
            'example' => '2019-08-20T06:51:27.292Z',
          ),
          'created_at' => 
          array (
            'title' => '权益包下发的创建时间',
            'description' => '权益包下发的创建时间',
            'type' => 'string',
            'example' => '2019-08-20T06:51:27.292Z',
          ),
        ),
      ),
      'CNameStatus' => 
      array (
        'title' => 'A short description of struct',
        'type' => 'object',
        'properties' => 
        array (
          'bingding_state' => 
          array (
            'title' => 'binding_state',
            'type' => 'string',
            'example' => 'BINDING/BOUND',
          ),
          'legal_state' => 
          array (
            'title' => 'legal_state',
            'type' => 'string',
            'example' => 'NORMAL/ABNORMAL',
          ),
          'remark' => 
          array (
            'title' => 'remark',
            'type' => 'string',
            'example' => 'beian',
          ),
        ),
      ),
      'CdnFileDownloadCallbackInfo' => 
      array (
        'title' => 'CDN下载回调',
        'description' => 'CDN文件下载回调',
        'type' => 'object',
        'properties' => 
        array (
          'bucket' => 
          array (
            'title' => 'bucket名称',
            'type' => 'string',
            'required' => true,
            'example' => 'ccp-bj1-bj-1234',
          ),
          'object' => 
          array (
            'title' => 'oss key',
            'type' => 'string',
            'required' => true,
          ),
          'httpHeader.range' => 
          array (
            'title' => '下载范围',
            'type' => 'string',
            'example' => 'bytes=0-1024',
          ),
          'domain_id' => 
          array (
            'title' => 'domain id',
            'type' => 'string',
            'required' => true,
          ),
          'user_id' => 
          array (
            'title' => '用户id',
            'type' => 'string',
            'required' => true,
          ),
          'drive_id' => 
          array (
            'title' => 'drive id',
            'type' => 'string',
            'required' => true,
          ),
          'file_id' => 
          array (
            'title' => '文件id',
            'type' => 'string',
            'required' => true,
          ),
          'token' => 
          array (
            'title' => '访问token',
            'type' => 'string',
            'required' => true,
            'example' => 'md5.Sum([]byte(fmt.Sprintf("%v%v%v%v%v%v...%v", 		req.Object, req.Range, req.DomainID, req.DriveID, req.UserID, req.FileID, req.Expire)))',
          ),
          'expire' => 
          array (
            'title' => 'unix超时时间',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
          ),
        ),
        'required' => true,
      ),
      'CertInfo' => 
      array (
        'title' => 'A short description of struct',
        'type' => 'object',
        'properties' => 
        array (
          'cert_name' => 
          array (
            'title' => 'cert_name',
            'type' => 'string',
            'example' => 'xxx',
          ),
          'cert_body' => 
          array (
            'title' => 'cert_body',
            'type' => 'string',
            'example' => 'xxx',
          ),
          'cert_privatekey' => 
          array (
            'title' => 'cert_privatekey',
            'type' => 'string',
            'example' => 'xxx',
          ),
        ),
      ),
      'ClearRecycleBinItem' => 
      array (
        'title' => 'A short description of struct',
        'type' => 'object',
        'properties' => 
        array (
          'domain_id' => 
          array (
            'title' => 'domain_id',
            'type' => 'string',
          ),
          'drive_id' => 
          array (
            'title' => 'drive_id',
            'type' => 'string',
          ),
          'task_id' => 
          array (
            'title' => 'task_id',
            'type' => 'string',
          ),
          'async_task_id' => 
          array (
            'title' => 'async_task_id',
            'type' => 'string',
          ),
        ),
      ),
      'CommonFileItem' => 
      array (
        'title' => 'A short description of struct',
        'type' => 'object',
        'properties' => 
        array (
          'file_id' => 
          array (
            'title' => 'file_id',
            'type' => 'string',
          ),
          'drive_id' => 
          array (
            'title' => 'drive_id',
            'type' => 'string',
          ),
          'revision_id' => 
          array (
            'title' => 'revision_id',
            'type' => 'string',
          ),
        ),
      ),
      'CssCreateOrderParam' => 
      array (
        'title' => '创建订单/询价参数',
        'description' => '创建订单/询价参',
        'type' => 'object',
        'properties' => 
        array (
          'buyerId' => 
          array (
            'title' => '购买用户ID（aliuid',
            'type' => 'integer',
            'format' => 'int64',
          ),
          'childId' => 
          array (
            'title' => '子用户ID（childid',
            'type' => 'integer',
            'format' => 'int64',
          ),
          'userId' => 
          array (
            'title' => '使用者ID（aliuid',
            'type' => 'integer',
            'format' => 'int64',
          ),
          'payerId' => 
          array (
            'title' => '支付者ID（aliuid）',
            'type' => 'integer',
            'format' => 'int64',
          ),
          'bid' => 
          array (
            'title' => 'bid',
            'type' => 'string',
          ),
          'requestId' => 
          array (
            'title' => '选填。用于全程跟踪请求用途',
            'type' => 'string',
          ),
          'token' => 
          array (
            'title' => '选填。用于幂等性校验，客户端设置',
            'type' => 'string',
          ),
          'fromApp' => 
          array (
            'title' => '必须。调用方应用名',
            'type' => 'string',
          ),
          'skipChannel' => 
          array (
            'title' => '必须。渠道是否跳过调用',
            'type' => 'boolean',
          ),
          'createrNick' => 
          array (
            'title' => '选填。 如果是后台小二创建的订单，则设置此参数',
            'type' => 'string',
          ),
          'memo' => 
          array (
            'title' => '选填。订单备注',
            'type' => 'string',
          ),
          'agentId' => 
          array (
            'title' => '选填。订购来源(如阿里妈妈alimama_cps)',
            'type' => 'string',
          ),
          'commodities' => 
          array (
            'title' => '必填。 购买的商品对象列表',
            'type' => 'array',
            'items' => 
            array (
              '$ref' => '#/components/schemas/CssInstanceCommodity',
            ),
          ),
          'promotionCode' => 
          array (
            'title' => '选填， 推荐码',
            'type' => 'string',
          ),
          'planGroupId' => 
          array (
            'title' => '套餐组id',
            'type' => 'integer',
            'format' => 'int64',
          ),
          'planId' => 
          array (
            'title' => '套餐id',
            'type' => 'integer',
            'format' => 'int64',
          ),
          'planInstanceId' => 
          array (
            'title' => '套餐实例id, 由套餐driver为套餐购买生成的实例id',
            'type' => 'string',
          ),
          'cssAuthRequestParam' => 
          array (
            'title' => '选填，鉴权参数',
            'type' => 'any',
          ),
          'language' => 
          array (
            'title' => '选填，语言',
            'type' => 'string',
          ),
          'promotionInputParam' => 
          array (
            'title' => '调用者传入的优惠可选项',
            'type' => 'any',
          ),
          'orderOrigin' => 
          array (
            'title' => '订单来源（可选，可为null)',
            'type' => 'string',
          ),
          'marketType' => 
          array (
            'title' => '相关判断 用这个Long型的',
            'type' => 'integer',
            'format' => 'int64',
          ),
          'umidToken' => 
          array (
            'title' => 'umidToken 选填',
            'type' => 'string',
          ),
          'cilentIp' => 
          array (
            'title' => '客户 IP，选填',
            'type' => 'string',
          ),
          'orderParams' => 
          array (
            'title' => '选填。公共的订购参数',
            'type' => 'object',
            'additionalProperties' => 
            array (
              'type' => 'string',
            ),
          ),
          'autoPay' => 
          array (
            'title' => '订单是否自动支付，默认不自动支付',
            'type' => 'boolean',
          ),
          'autoUseCoupon' => 
          array (
            'title' => '自动支付的时候，是否自动使用代金券',
            'type' => 'boolean',
          ),
          'transientAccess' => 
          array (
            'title' => '临时 AK',
            'type' => 'any',
          ),
          'certificate' => 
          array (
            'title' => 'receipt',
            'type' => 'string',
          ),
        ),
      ),
      'CssInstanceCommodity' => 
      array (
        'title' => '购买的商品对象',
        'description' => '购买的商品对象',
        'type' => 'object',
        'properties' => 
        array (
          'planItemId' => 
          array (
            'title' => '选填。如果是套餐订单，套餐项id必填',
            'type' => 'integer',
            'format' => 'int64',
          ),
          'commodityCode' => 
          array (
            'title' => '必填。商品code',
            'type' => 'string',
            'required' => false,
          ),
          'specCode' => 
          array (
            'title' => '必填。规格code 阿里云官网商品,commodityCode与specCode相同。 云市场及镜像市场的商品,commodityCode与specCode不同。',
            'type' => 'string',
            'required' => false,
          ),
          'duration' => 
          array (
            'title' => '必填。订购的周期数量',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
          ),
          'pricingCycle' => 
          array (
            'title' => '必填。订购的周期单位,年：Year，月：Month，日：Day，时：Hour',
            'type' => 'string',
            'required' => false,
          ),
          'quantity' => 
          array (
            'title' => '必填，订购实例数量',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
          ),
          'orderType' => 
          array (
            'title' => '新购 :BUY,续费:RENEW,升级:UPGRADE,试用:TRIAL',
            'type' => 'string',
          ),
          'chargeType' => 
          array (
            'title' => '必填。付费类型：预付费:PREPAY-，后付费:POSTPAY',
            'type' => 'string',
          ),
          'refundSpecCode' => 
          array (
            'title' => '选填。需要退款的商品CODE，目前用于增量带宽和转换订单的退订;',
            'type' => 'string',
          ),
          'components' => 
          array (
            'title' => '必填。订购模块集合',
            'type' => 'array',
            'items' => 
            array (
              '$ref' => '#/components/schemas/CssInstanceComponent',
            ),
          ),
          'orderParams' => 
          array (
            'title' => '选填。订购参数(需要订单系统透传的参数)',
            'type' => 'object',
            'additionalProperties' => 
            array (
              'type' => 'string',
            ),
          ),
          'instanceId' => 
          array (
            'title' => '必填。实例ID，新购，续费，升级类型订单必填,格式为：JSON.toJSONString(List instanceIds)',
            'type' => 'string',
          ),
          'activityId' => 
          array (
            'title' => '选填。 购买对象参与的活动id',
            'type' => 'integer',
            'format' => 'int64',
          ),
          'isFree' => 
          array (
            'title' => '选填。是否免费，默认不免费 (如试用和补偿续费订单)',
            'type' => 'boolean',
          ),
          'isSyncToSubscription' => 
          array (
            'title' => '选填。是否同步转订购，默认异步',
            'type' => 'boolean',
          ),
          'isPrePayPostCharge' => 
          array (
            'title' => '选填。是否预付费后付款订单，默认不是',
            'type' => 'boolean',
          ),
          'isRenewChange' => 
          array (
            'title' => '选填。是否续费变配订单，默认不是。',
            'type' => 'boolean',
          ),
          'specifyStartDate' => 
          array (
            'title' => '选填。指定开始时间,单位：ms。',
            'type' => 'integer',
            'format' => 'int64',
          ),
          'specUpgradeOriginSpecCodes' => 
          array (
            'title' => '跨规格升级 原规格Code列表（一个新购，一个续费变配，，这个时候来跨规格升级就需要是一个list',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'string',
            ),
          ),
          'upgradeInquireFinancialValue' => 
          array (
            'title' => '升级是否询剩余财务价值（true：调用汇金取剩余财务价值，false：询差价）默认询财务价值',
            'type' => 'boolean',
          ),
          'aliyunProduceCode' => 
          array (
            'title' => '阿里云生产标识',
            'type' => 'string',
          ),
          'redeemOrderType' => 
          array (
            'title' => '提货券订单类型，提货券订单传入，默认为',
            'type' => 'string',
          ),
          'redeemNoList' => 
          array (
            'title' => '提货券券号列表，用于在新购和兑换的时候传入对应的提货券',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'string',
            ),
          ),
        ),
      ),
      'CssInstanceComponent' => 
      array (
        'title' => '订购模块',
        'description' => '订购模块',
        'type' => 'object',
        'properties' => 
        array (
          'componentCode' => 
          array (
            'title' => '配件 code',
            'type' => 'string',
          ),
          'componentName' => 
          array (
            'title' => '配件名称',
            'type' => 'string',
          ),
          'globalKey' => 
          array (
            'title' => '多语言key 根据统一的规则生成',
            'type' => 'string',
          ),
          'tag' => 
          array (
            'title' => '标记，必填。磁盘ID，新购，续费，升级类型订单必填,格式为：JSON.toJSONString(List tags) 并严格按照instanceId的顺序填写。',
            'type' => 'string',
          ),
          'instanceProperty' => 
          array (
            'title' => '模块属性信息',
            'type' => 'array',
            'items' => 
            array (
              '$ref' => '#/components/schemas/CssInstanceProperty',
            ),
          ),
          'moduleAttrStatus' => 
          array (
            'title' => '表达此次配件的状态， 1:新增，2:变更，3:无变化; 请严格参照此状态进行赋值',
            'type' => 'integer',
            'format' => 'int64',
          ),
        ),
      ),
      'CssInstanceProperty' => 
      array (
        'title' => '模块属性',
        'description' => '模块属性',
        'type' => 'object',
        'properties' => 
        array (
          'name' => 
          array (
            'title' => '属性名称',
            'type' => 'string',
          ),
          'code' => 
          array (
            'title' => '属性代码',
            'type' => 'string',
          ),
          'value' => 
          array (
            'title' => '属性值',
            'type' => 'string',
          ),
          'unit' => 
          array (
            'title' => '单位',
            'type' => 'string',
          ),
          'globalKey' => 
          array (
            'title' => '多语言翻译的key',
            'type' => 'string',
          ),
        ),
      ),
      'CssProduce' => 
      array (
        'title' => '下单回调',
        'description' => 'common buy 下单回调',
        'type' => 'object',
        'properties' => 
        array (
          'buyerId' => 
          array (
            'title' => '购买用户ID（aliuid',
            'type' => 'integer',
            'format' => 'int64',
          ),
          'childId' => 
          array (
            'title' => '子用户ID（childid）',
            'type' => 'integer',
            'format' => 'int64',
          ),
          'userId' => 
          array (
            'title' => '使用者ID（aliuid',
            'type' => 'integer',
            'format' => 'int64',
          ),
          'payerId' => 
          array (
            'title' => '支付者ID（aliuid）',
            'type' => 'integer',
            'format' => 'int64',
          ),
          'bid' => 
          array (
            'title' => 'bid',
            'type' => 'string',
          ),
          'requestId' => 
          array (
            'title' => '选填。用于全程跟踪请求用途',
            'type' => 'string',
          ),
          'token' => 
          array (
            'title' => '选填。用于幂等性校验，客户端设置',
            'type' => 'string',
          ),
          'fromApp' => 
          array (
            'title' => '必须。调用方应用名',
            'type' => 'string',
          ),
          'skipChannel' => 
          array (
            'title' => '必须。渠道是否跳过调用',
            'type' => 'boolean',
          ),
          'orderId' => 
          array (
            'title' => '订单号',
            'type' => 'integer',
            'format' => 'int64',
          ),
          'purchases' => 
          array (
            'title' => '商品列表',
            'type' => 'array',
            'items' => 
            array (
              '$ref' => '#/components/schemas/CssPurchase',
            ),
          ),
        ),
      ),
      'CssPurchase' => 
      array (
        'title' => '商品',
        'description' => '商品',
        'type' => 'object',
        'properties' => 
        array (
          'commodityCode' => 
          array (
            'title' => '商品code',
            'type' => 'string',
          ),
          'chargeType' => 
          array (
            'title' => '付费类型：预付费:PREPAY-，后付费:POSTPAY',
            'type' => 'string',
          ),
          'startDate' => 
          array (
            'title' => '开始时间',
            'type' => 'integer',
            'format' => 'int64',
          ),
          'endDate' => 
          array (
            'title' => '过期时间',
            'type' => 'integer',
            'format' => 'int64',
          ),
          'gmtCreate' => 
          array (
            'title' => 'xxx',
            'type' => 'integer',
            'format' => 'int64',
          ),
          'instanceComponents' => 
          array (
            'title' => '订购模块集合',
            'type' => 'array',
            'items' => 
            array (
              '$ref' => '#/components/schemas/CssInstanceComponent',
            ),
          ),
          'purchaseParams' => 
          array (
            'title' => '参数',
            'type' => 'object',
            'additionalProperties' => 
            array (
              'type' => 'string',
            ),
          ),
          'instanceId' => 
          array (
            'title' => '必填。实例ID，新购，续费，升级类型订单必填,格式为：JSON.toJSONString(List instanceIds);',
            'type' => 'string',
          ),
          'orderType' => 
          array (
            'title' => '新购 :BUY,续费:RENEW,升级:UPGRADE,试用:TRIAL',
            'type' => 'string',
          ),
        ),
      ),
      'CustomSideLinkConfig' => 
      array (
        'title' => 'CustomSideLinkConfig',
        'type' => 'object',
        'properties' => 
        array (
          'icon' => 
          array (
            'title' => 'icon',
            'type' => 'string',
          ),
          'text' => 
          array (
            'title' => 'text',
            'type' => 'string',
          ),
          'link' => 
          array (
            'title' => 'link',
            'type' => 'string',
          ),
        ),
      ),
      'DataCName' => 
      array (
        'title' => 'A short description of struct',
        'type' => 'object',
        'properties' => 
        array (
          'location' => 
          array (
            'title' => 'location',
            'type' => 'string',
          ),
          'store_id' => 
          array (
            'title' => '存储id',
            'type' => 'string',
          ),
          'cname' => 
          array (
            'title' => 'cname',
            'type' => 'string',
          ),
          'cert_name' => 
          array (
            'title' => 'cert_name',
            'type' => 'string',
          ),
          'cert_expire_time' => 
          array (
            'title' => 'cert_expire_time',
            'type' => 'integer',
            'format' => 'int64',
          ),
          'cname_type' => 
          array (
            'title' => 'cname_type',
            'type' => 'string',
          ),
        ),
      ),
      'Domain' => 
      array (
        'title' => 'domain 信息',
        'description' => '基础 domain 信息',
        'type' => 'object',
        'properties' => 
        array (
          'parent_domain_id' => 
          array (
            'title' => 'parent_domain_id string 父 domain id，如果存在，表示该 domain为子 domain domain_id string domain id',
            'description' => '父 domain ID，如果存在，表示子 domain，否则表示普通 domain',
            'type' => 'string',
            'example' => 'bj1',
          ),
          'domain_id' => 
          array (
            'title' => 'domain id',
            'description' => 'domain ID',
            'type' => 'string',
            'example' => 'bj2',
          ),
          'domain_name' => 
          array (
            'title' => '域名称',
            'description' => 'domain 名称',
            'type' => 'string',
            'example' => 'pdsdomain',
          ),
          'description' => 
          array (
            'title' => '描述',
            'description' => 'domain 描述',
            'type' => 'string',
            'example' => 'my domain',
          ),
          'init_drive_enable' => 
          array (
            'title' => '否开通默认网盘。为true则所有用户在第一次登录后都默认分配一个网盘。默认false',
            'description' => '否开通默认网盘。为true则所有用户在第一次登录后都默认分配一个网盘。默认false',
            'type' => 'boolean',
            'example' => 'true',
          ),
          'init_drive_size' => 
          array (
            'title' => 'init_drive_enable==true时必选。 默认网盘的大小, 单位：Bytes。为0则表示不限大小。默认为0',
            'description' => 'init\\_drive\\_enable 为true时必选。 创建用户时，默认网盘的大小，单位：Bytes。
默认为 0，此时创建的 drive 大小为0，不可以上传文件，如果需要初始化 drive， 请设置该值。
-1则表示不限大小。',
            'type' => 'integer',
            'format' => 'int64',
            'example' => '1073741824',
          ),
          'updated_at' => 
          array (
            'title' => '最后修改时间，ISO格式，如: 2019-04-08T07:05:18.825Z',
            'description' => '最后修改时间，ISO格式，如: 2019-04-08T07:05:18.825Z',
            'type' => 'string',
            'example' => '2019-08-20T06:51:27.292Z',
          ),
          'created_at' => 
          array (
            'title' => '创建时间，ISO格式， 如：2019-03-28T13:03:29.298Z',
            'description' => '创建时间，ISO格式， 如：2019-03-28T13:03:29.298Z',
            'type' => 'string',
            'example' => '2019-08-20T06:51:27.292Z',
          ),
          'size_quota' => 
          array (
            'title' => '容量配额',
            'description' => '容量配额，表示 domain 下所有 drive 的总quota 大小，0 表示不限制',
            'type' => 'integer',
            'format' => 'int64',
            'example' => '1099511627776',
          ),
          'size_quota_used' => 
          array (
            'title' => '容量配额使用空间',
            'description' => '所有 drive 的 quota 容量配额使用空间',
            'type' => 'integer',
            'format' => 'int64',
            'example' => '1099511627776',
          ),
          'user_count_quota' => 
          array (
            'title' => '用户数配额',
            'description' => '用户数配额',
            'type' => 'integer',
            'format' => 'int64',
            'example' => '50',
          ),
          'status' => 
          array (
            'title' => 'domain状态：创建中，正常，已过期',
            'description' => 'domain状态：
1：正常
2：创建中
6：已过期',
            'type' => 'integer',
            'format' => 'int64',
            'example' => '1',
          ),
          'used_size' => 
          array (
            'title' => '逻辑空间使用量，单位为字节',
            'description' => '逻辑空间使用量，单位为字节',
            'type' => 'integer',
            'format' => 'int64',
            'example' => '1099511627776',
          ),
          'published_app_access_strategy' => 
          array (
            'title' => 'App 访问策略',
            'description' => 'App 访问策略',
            '$ref' => '#/components/schemas/AppAccessStrategy',
          ),
          'sharable' => 
          array (
            'title' => '是否开启共享',
            'description' => '是否开启共享',
            'type' => 'boolean',
          ),
          'data_hash_name' => 
          array (
            'title' => 'domain hash type',
            'description' => 'domain hash type',
            'type' => 'string',
          ),
        ),
      ),
      'DomainAppConfig' => 
      array (
        'title' => 'A short description of struct',
        'type' => 'object',
        'properties' => 
        array (
          'same_name_file_upload_mode' => 
          array (
            'title' => 'same_name_file_upload_mode',
            'type' => 'string',
          ),
          'web_client_download_mode' => 
          array (
            'title' => 'web_client_download_mode',
            'type' => 'string',
          ),
          'single_file_upload_size_limit' => 
          array (
            'title' => 'single_file_upload_size_limit',
            'type' => 'integer',
            'format' => 'int64',
          ),
          'allow_upload_file_category_list' => 
          array (
            'title' => 'allow_upload_file_category_list',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'string',
            ),
          ),
          'allow_upload_custom_file_ext_list' => 
          array (
            'title' => 'allow_upload_custom_file_ext_list',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'string',
            ),
          ),
        ),
      ),
      'DomainBuildClientConfig' => 
      array (
        'title' => 'DomainBuildClient',
        'type' => 'object',
        'properties' => 
        array (
          'name' => 
          array (
            'title' => 'name',
            'type' => 'string',
          ),
          'copyright' => 
          array (
            'title' => 'copyright',
            'type' => 'string',
          ),
        ),
      ),
      'DomainEndpoints' => 
      array (
        'title' => 'A short description of struct',
        'type' => 'object',
        'properties' => 
        array (
        ),
      ),
      'DomainSeniorConfig' => 
      array (
        'title' => 'DomainSeniorConfig',
        'type' => 'object',
        'properties' => 
        array (
          'home_page_bg_image_url' => 
          array (
            'title' => 'home_page_bg_image_url',
            'type' => 'string',
          ),
          'home_page_slogan' => 
          array (
            'title' => 'home_page_slogan',
            'type' => 'string',
          ),
          'home_page_footer' => 
          array (
            'title' => 'home_page_footer',
            'type' => 'string',
          ),
          'home_page_footer2' => 
          array (
            'title' => 'home_page_footer2',
            'type' => 'string',
          ),
          'csp_frame_ancestors' => 
          array (
            'title' => 'csp_frame_ancestors',
            'type' => 'string',
          ),
          'referer_enable' => 
          array (
            'title' => 'referer_enable',
            'type' => 'boolean',
          ),
          'wx_txt_list' => 
          array (
            '$ref' => '#/components/schemas/WxTrustedDomainConfig',
          ),
          'custom_login_appid' => 
          array (
            'title' => 'custom_login_appid',
            'type' => 'string',
          ),
          'custom_login_url' => 
          array (
            'title' => 'custom_login_url',
            'type' => 'string',
          ),
          'custom_logout_url' => 
          array (
            'title' => 'custom_logout_url',
            'type' => 'string',
          ),
          'custom_side_link_list' => 
          array (
            'title' => 'custom_side_link_list',
            'type' => 'array',
            'items' => 
            array (
              '$ref' => '#/components/schemas/CustomSideLinkConfig',
            ),
          ),
          'client_download_enable' => 
          array (
            'title' => 'client_download_enable',
            'type' => 'boolean',
          ),
        ),
      ),
      'Drive' => 
      array (
        'title' => 'A short description of struct',
        'description' => '空间',
        'type' => 'object',
        'properties' => 
        array (
          'domain_id' => 
          array (
            'title' => '域id',
            'description' => '域id',
            'type' => 'string',
            'example' => 'bj1',
          ),
          'drive_id' => 
          array (
            'title' => '空间id',
            'description' => '空间id',
            'type' => 'string',
            'example' => '1',
          ),
          'drive_name' => 
          array (
            'title' => '空间名称',
            'description' => '空间名称',
            'type' => 'string',
            'example' => 'drv1',
          ),
          'description' => 
          array (
            'title' => '描述',
            'description' => '描述',
            'type' => 'string',
            'example' => 'vipdrive',
          ),
          'owner' => 
          array (
            'title' => '归属者',
            'description' => '归属者',
            'type' => 'string',
            'example' => 'c9b7a5aa04d14ae3867fdc886fa01da4',
          ),
          'owner_type' => 
          array (
            'title' => '归属者类型',
            'description' => '归属者类型',
            'type' => 'string',
            'example' => 'user',
          ),
          'drive_type' => 
          array (
            'title' => '空间类型',
            'description' => '空间类型',
            'type' => 'string',
            'example' => 'normal',
          ),
          'status' => 
          array (
            'title' => '状态',
            'description' => '状态

1. enabled 表示该空间可使用
2. disabled 表示该空间不可用',
            'type' => 'string',
            'example' => 'enabled',
          ),
          'used_size' => 
          array (
            'title' => '使用空间大小',
            'description' => '使用空间大小，单位为字节',
            'type' => 'integer',
            'format' => 'int64',
            'example' => '20480',
          ),
          'total_size' => 
          array (
            'title' => '总空间大小',
            'description' => '总空间大小，单位为字节',
            'type' => 'integer',
            'format' => 'int64',
            'example' => '204800',
          ),
          'created_at' => 
          array (
            'title' => '创建时间',
            'description' => '创建时间',
            'type' => 'string',
            'example' => '2019-08-20T06:51:27.292Z',
          ),
          'creator' => 
          array (
            'title' => '创建者',
            'description' => '创建者',
            'type' => 'string',
            'example' => 'c9b7a5aa04d14ae3867fdc886fa01da4',
          ),
        ),
      ),
      'DriveLogDetail' => 
      array (
        'title' => 'drive日志详情',
        'description' => 'drive日志详情',
        'type' => 'object',
        'properties' => 
        array (
          'name' => 
          array (
            'title' => '名称',
            'type' => 'string',
          ),
          'total_size' => 
          array (
            'title' => '总大小',
            'type' => 'integer',
            'format' => 'int64',
          ),
          'owner_id' => 
          array (
            'title' => '归属人id',
            'type' => 'string',
          ),
          'owner_name' => 
          array (
            'title' => '归属人的名称',
            'type' => 'string',
          ),
          'owner_type' => 
          array (
            'title' => '归属人的类别',
            'type' => 'string',
          ),
          'update_to' => 
          array (
            'title' => '更新后的设置',
            'type' => 'object',
            'properties' => 
            array (
              'name' => 
              array (
                'title' => '名称',
                'type' => 'string',
              ),
              'total_size' => 
              array (
                'title' => '总大小',
                'type' => 'integer',
                'format' => 'int64',
              ),
              'owner_id' => 
              array (
                'title' => '归属人id',
                'type' => 'string',
              ),
              'owner_name' => 
              array (
                'title' => '归属人的名称',
                'type' => 'string',
              ),
              'owner_type' => 
              array (
                'title' => '归属人的类别',
                'type' => 'string',
              ),
            ),
          ),
          'force_delete' => 
          array (
            'title' => '是否强制删除',
            'type' => 'boolean',
          ),
          'handover_owner_name' => 
          array (
            'title' => '交接人的名称',
            'type' => 'string',
          ),
        ),
      ),
      'ExternalMultiFileRevisionConfig' => 
      array (
        'title' => 'A short description of struct',
        'type' => 'object',
        'properties' => 
        array (
          'revision_merge_enabled' => 
          array (
            'title' => 'revision_merge_enabled',
            'type' => 'boolean',
          ),
          'revision_count' => 
          array (
            'title' => 'revision_count',
            'type' => 'integer',
            'format' => 'int64',
          ),
          'revision_recycle_period' => 
          array (
            'title' => 'revision_recycle_period',
            'type' => 'integer',
            'format' => 'int64',
          ),
        ),
      ),
      'FaceGroup' => 
      array (
        'title' => '人脸分组',
        'description' => '人脸分组',
        'type' => 'object',
        'properties' => 
        array (
          'group_id' => 
          array (
            'title' => '人脸分组ID',
            'description' => '人脸分组ID',
            'type' => 'string',
            'example' => 'Cluster-ae6e3472-999e-410b-b54e-cd5dba****',
          ),
          'group_name' => 
          array (
            'title' => '人脸分组名称',
            'description' => '人脸分组名称',
            'type' => 'string',
            'example' => 'name',
          ),
          'image_count' => 
          array (
            'title' => '照片数量',
            'description' => '人脸分组内照片数量',
            'type' => 'integer',
            'format' => 'int64',
            'example' => '10',
          ),
          'created_at' => 
          array (
            'title' => '人脸分组生成时间。格式 RFC3339',
            'description' => '人脸分组生成时间',
            'type' => 'string',
            'example' => '2022-01-14T10:10:52.83948013+08:00',
          ),
          'updated_at' => 
          array (
            'title' => '人脸分组修改时间。格式 RFC3339',
            'description' => '人脸分组修改时间',
            'type' => 'string',
            'example' => '2022-01-14T10:10:52.83948013+08:00',
          ),
          'group_cover_url' => 
          array (
            'title' => '人脸分组封面头像地址',
            'description' => '人脸分组封面头像地址',
            'type' => 'string',
            'example' => 'https://xxx',
          ),
          'group_cover_file_id' => 
          array (
            'title' => '人脸分组封面文件ID',
            'description' => '人脸分组封面文件ID',
            'type' => 'string',
            'example' => '6549c959640fbd517c9b4d93b3b36aecc45xxxxx',
          ),
          'group_cover_width' => 
          array (
            'title' => '人脸分组封面图片宽',
            'description' => '人脸分组封面图片宽',
            'type' => 'integer',
            'format' => 'int64',
            'example' => '1920',
          ),
          'group_cover_height' => 
          array (
            'title' => '人脸分组封面图片高',
            'description' => '人脸分组封面图片高',
            'type' => 'integer',
            'format' => 'int64',
            'example' => '1080',
          ),
          'group_cover_face_boundary' => 
          array (
            'title' => '人脸分组封面图片边框',
            'description' => '人脸分组封面图片边框',
            'type' => 'object',
            'properties' => 
            array (
              'Width' => 
              array (
                'title' => '宽，单位像素',
                'description' => '宽，单位像素',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Height' => 
              array (
                'title' => '高， 单位像素',
                'description' => '高， 单位像素',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '300',
              ),
              'Top' => 
              array (
                'title' => '距离照片顶部的距离，单位像素',
                'description' => '距离照片顶部的距离，单位像素',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '30',
              ),
              'Left' => 
              array (
                'title' => '距离照片左边框的距离，单位像素',
                'description' => '距离照片左边框的距离，单位像素',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '10',
              ),
            ),
          ),
          'remarks' => 
          array (
            'title' => '备注',
            'description' => '备注',
            'type' => 'string',
          ),
        ),
      ),
      'FaceThumbnail' => 
      array (
        'title' => '人脸缩略图信息。仅开启增值服务图片处理功能有效。',
        'description' => '人脸缩略图信息。仅开启增值服务图片处理功能有效。',
        'type' => 'object',
        'properties' => 
        array (
          'face_id' => 
          array (
            'title' => '人脸 id。',
            'description' => '人脸 id。',
            'type' => 'string',
            'example' => 'a9a66a86-73dd-4c95-8b79-1d8a49db5226',
          ),
          'face_group_id' => 
          array (
            'title' => '人脸所属分组 id。',
            'description' => '人脸所属分组 id。

包含如下特定 id：

- figure-cluster-id-independent：该人脸暂无合适的分组，后续在数据集中新增图片后进行人脸聚类操作时，该人脸可能被分入组中。

- figure-cluster-id-unavailable：该人脸暂未进行过聚类操作，即在数据集中新增图片后，未进行人脸聚类。',
            'type' => 'string',
            'example' => 'Cluster-e3b7fb52-22b3-44f2-9746-8c1804bd6af0',
          ),
          'face_thumbnail' => 
          array (
            'title' => '人脸缩略图。',
            'description' => '人脸缩略图。',
            'type' => 'string',
            'deprecated' => true,
            'example' => 'https://pds-domain.region.aliyuncs.com/QieGeH98%2F1001%2F63e5e551ee621482ab934a0687c6cda75fc07864%2F642a8a40c00f1ad379df421694713ee65170f09b?security-token=CAIS%2BgF1q6Ft5B2yfSjIr5bjHPCNnrdR8aSaSW7woVlmVd1Bt5HorDz2IHpPfHdoBe0btvU%2BlWxX6fwZlq5rR4QAXlDfNSyFeX20qFHPWZHInuDox55m4cTXNAr%2BIhr%2F29CoEIedZdjBe%2FCrRknZnytou9XTfimjWFrXWv%2Fgy%2BQQDLItUxK%2FcCBNCfpPOwJms7V6D3bKMuu3OROY6Qi5TmgQ41En1DIlt%2FXuk5DCtkqB12eXkLFF%2B97DRbG%2FdNRpMZtFVNO44fd7bKKp0lQLsUMSqv8q0fEcqGaW4o7CWQJLnzyCMvvJ9OVDFyN0aKEnH7J%2Bq%2FzxhTPrMnpkSlacGoABPMvZ8rSESUEP96Vbf%2Bk0JRg9Qb1MnaIJqWAgo8K6K0UP1CtqL2zrUtugpKKDHOYiKbq2O0S5yLUPVX5vBHqEi%2FFc7i6ZnHCMcXLJs4rKDKwRBEhovUXXlklq2q43OSVtLrXkBy9Xs1ers%2FhJhcxpNA0Vl3EWfJxa2BTylEdnLOQ%3D&x-oss-access-key-id=STS.NUVWJ9shpFfqKHAEY3YRmXTCN&x-oss-expires=1686455451&x-oss-process=image%2Fcrop%2Cx_1128%2Cy_1211%2Cw_914%2Ch_914%2Fformat%2Cjpg&x-oss-signature=jmhOz91Tww1ciMEwadDiioU7d93FDiBNr8s8mHyMqW0%3D&x-oss-signature-version=OSS2',
          ),
        ),
      ),
      'File' => 
      array (
        'title' => 'file 详情',
        'description' => '文件',
        'type' => 'object',
        'properties' => 
        array (
          'domain_id' => 
          array (
            'title' => '域id',
            'description' => '域id',
            'type' => 'string',
            'example' => 'bj1',
          ),
          'drive_id' => 
          array (
            'title' => '空间id',
            'description' => '空间id',
            'type' => 'string',
            'example' => '1',
          ),
          'file_id' => 
          array (
            'title' => '文件id',
            'description' => '文件id',
            'type' => 'string',
            'example' => '5d79206586bb5dd69fb34c349282718146c55da7',
          ),
          'name' => 
          array (
            'title' => '名称',
            'description' => '名称',
            'type' => 'string',
            'example' => '1.mov',
          ),
          'type' => 
          array (
            'title' => '类型',
            'description' => '类型',
            'type' => 'string',
            'enumValueTitles' => 
            array (
              'file' => '文件',
              'folder' => '文件夹',
            ),
            'example' => 'file',
          ),
          'content_type' => 
          array (
            'title' => '内容类型',
            'description' => '内容类型',
            'type' => 'string',
            'example' => 'application/json',
          ),
          'created_at' => 
          array (
            'title' => '创建时间',
            'description' => '创建时间',
            'type' => 'string',
            'example' => '2019-08-20T06:51:27.292Z',
          ),
          'updated_at' => 
          array (
            'title' => '修改时间',
            'description' => '修改时间',
            'type' => 'string',
            'example' => '2019-08-20T06:51:27.292Z',
          ),
          'description' => 
          array (
            'title' => '描述',
            'description' => '描述',
            'type' => 'string',
            'example' => 'image file',
          ),
          'trashed_at' => 
          array (
            'title' => '放入回收站时间',
            'description' => '放入回收站时间',
            'type' => 'string',
            'example' => '2019-08-20T06:51:27.292Z',
          ),
          'file_extension' => 
          array (
            'title' => '文件扩展',
            'description' => '文件扩展名',
            'type' => 'string',
            'example' => 'txt',
          ),
          'hidden' => 
          array (
            'title' => '是否隐藏',
            'description' => '是否隐藏',
            'type' => 'boolean',
            'example' => 'false',
          ),
          'size' => 
          array (
            'title' => '大小',
            'description' => '大小',
            'type' => 'integer',
            'format' => 'int64',
            'example' => '1024',
          ),
          'starred' => 
          array (
            'title' => '是否收藏',
            'description' => '是否收藏',
            'type' => 'boolean',
            'example' => 'false',
          ),
          'status' => 
          array (
            'title' => '状态',
            'description' => '状态，只有available的文件和目录才是可以被访问的，如果文件处于uploading状态，GetFile会返回文件不存在, ListFile也不会返回uploading状态的文件',
            'type' => 'string',
            'enumValueTitles' => 
            array (
              'available' => 'available',
              'uploading' => 'uploading',
            ),
            'example' => 'available',
          ),
          'labels' => 
          array (
            'title' => '标签',
            'description' => '标签',
            'type' => 'array',
            'items' => 
            array (
              'description' => '标签',
              'type' => 'string',
              'example' => '["label1:1", "label2:2"]',
            ),
            'example' => '["label1:1", "label2:2"]',
          ),
          'upload_id' => 
          array (
            'title' => '上传id',
            'description' => '上传id',
            'type' => 'string',
            'example' => 'C9DCFE5A82644AC7A02DB74C30C934A6',
          ),
          'parent_file_id' => 
          array (
            'title' => '父文件夹id',
            'description' => '父文件夹id',
            'type' => 'string',
            'example' => '3d5b846942cf94fa72324c8a4bda34e81da635a',
          ),
          'crc64_hash' => 
          array (
            'title' => 'crc64',
            'description' => 'crc64',
            'type' => 'string',
            'example' => '3574582125365864471',
          ),
          'content_hash' => 
          array (
            'title' => '内容hash',
            'description' => '内容hash',
            'type' => 'string',
            'example' => 'EA4942AA8761213890A5C386F88E6464D2C31CA3',
          ),
          'content_hash_name' => 
          array (
            'title' => '内容hash算法名',
            'description' => '内容hash算法名，当前hash 算法支持sha1',
            'type' => 'string',
            'enumValueTitles' => 
            array (
              'sha1' => 'sha1',
            ),
            'example' => 'sha1',
          ),
          'download_url' => 
          array (
            'title' => '下载链接',
            'description' => '下载链接， 下载链接默认有效期是 15 分钟，如果 url 过期，可以通过 GetFile 进行获取',
            'type' => 'string',
            'example' => 'https://data.aliyunpds.com/hz22%2F5d5b986facbec311ef844c25954f96821497b383%2F5d5b986f955410dd991646bb87c6b4e899eff525?Expires=xxx&OSSAccessKeyId=xxx&Signature=xxx',
          ),
          'thumbnail' => 
          array (
            'title' => '缩略图地址',
            'description' => '缩略图地址（已废弃，推荐使用thumbnail\\_urls）',
            'type' => 'string',
            'example' => 'https://data.aliyunpds.com/hz22%2F5d5b986facbec311ef844c25954f96821497b383%2F5d5b986f955410dd991646bb87c6b4e899eff525?Expires=xxx&OSSAccessKeyId=xxx&Signature=xxx',
          ),
          'category' => 
          array (
            'title' => '分类',
            'description' => '分类， pds 会根据文件的后缀名和 mime-type 对文件进行分类，主要分类有 doc, image, audio, video',
            'type' => 'string',
            'enumValueTitles' => 
            array (
              'image' => 'image',
              'doc' => 'doc',
              'audio' => 'audio',
              'video' => 'video',
            ),
            'example' => 'image',
          ),
          'local_created_at' => 
          array (
            'title' => '文件本地创建时间',
            'description' => '文件本地创建时间, 本地创建时间是指文件在上传时刻的本地时间，主要帮助客户端识别本地上传时间',
            'type' => 'string',
            'example' => '2019-08-20T06:51:27.292Z',
          ),
          'local_modified_at' => 
          array (
            'title' => '文件本地修改时间',
            'description' => '文件本地修改时间，文件本地更新时间, 本地更新时间是指文件在上传时刻的本地时间，主要帮助客户端识别本地更新时间',
            'type' => 'string',
            'example' => '2019-08-20T06:51:27.292Z',
          ),
          'revision_id' => 
          array (
            'title' => '版本id',
            'description' => '版本id， 当相同file-id 文件覆盖上传时， 会有新的revision_id 产生',
            'type' => 'string',
            'example' => '5d5b846942cf94fa72324c14a4bda34e81da635d',
          ),
          'thumbnail_urls' => 
          array (
            'title' => '返回的缩略图信息',
            'description' => '返回的缩略图信息，与入参thumbnail\\_processes中传入的key对应。',
            'type' => 'object',
            'additionalProperties' => 
            array (
              'description' => '返回的缩略图信息，与入参thumbnail\\_processes中传入的key对应。',
              'type' => 'string',
              'required' => false,
              'example' => '"128X128": "https://url1", "800X800": "url2"',
            ),
          ),
          'image_media_metadata' => 
          array (
            'title' => '图片信息。仅开启增值服务图片处理功能有效。',
            'description' => '图片信息。仅开启增值服务图片处理功能有效。',
            '$ref' => '#/components/schemas/ImageMediaMetadata',
          ),
          'user_tags' => 
          array (
            'title' => '用户自定义标签',
            'description' => '用户自定义标签',
            'type' => 'object',
            'additionalProperties' => 
            array (
              'description' => '用户自定义标签',
              'type' => 'string',
              'example' => '"k1":"v1", "k2","v2"',
            ),
          ),
          'video_media_metadata' => 
          array (
            'title' => '音视频信息',
            'description' => '音视频信息',
            '$ref' => '#/components/schemas/VideoMediaMetadata',
          ),
        ),
      ),
      'FileDownloadCallbackInfo' => 
      array (
        'title' => '文件下载回调',
        'description' => '文件下载回调',
        'type' => 'object',
        'properties' => 
        array (
          'bucket' => 
          array (
            'title' => 'bucket名称',
            'type' => 'string',
            'required' => true,
            'example' => 'ccp-bj1-bj-1234',
          ),
          'object' => 
          array (
            'title' => 'oss key',
            'type' => 'string',
            'required' => true,
          ),
          'httpHeader.range' => 
          array (
            'title' => '下载范围',
            'type' => 'string',
            'example' => 'bytes=0-1024',
          ),
          'domain_id' => 
          array (
            'title' => 'domain id',
            'type' => 'string',
            'required' => true,
          ),
          'user_id' => 
          array (
            'title' => '用户id',
            'type' => 'string',
            'required' => true,
          ),
          'drive_id' => 
          array (
            'title' => 'drive id',
            'type' => 'string',
            'required' => true,
          ),
          'file_id' => 
          array (
            'title' => '文件id',
            'type' => 'string',
            'required' => true,
          ),
        ),
        'required' => false,
      ),
      'FileLogDetail' => 
      array (
        'title' => '文件日志详情',
        'description' => '文件日志详情',
        'type' => 'object',
        'properties' => 
        array (
          'type' => 
          array (
            'title' => '类型',
            'type' => 'string',
          ),
          'parent_path' => 
          array (
            'title' => '父目录路径',
            'type' => 'string',
          ),
          'new_name' => 
          array (
            'title' => '新文件名',
            'type' => 'string',
          ),
          'to_parent_path_type' => 
          array (
            'title' => '目标目录类型',
            'type' => 'string',
          ),
          'to_parent_path' => 
          array (
            'title' => '目标目录路径',
            'type' => 'string',
          ),
          'size' => 
          array (
            'title' => '大小',
            'type' => 'integer',
            'format' => 'int64',
          ),
          'decompress_file_list' => 
          array (
            'title' => '解压文件列表',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'string',
              'example' => '解压文件',
            ),
          ),
          'rev_version' => 
          array (
            'title' => '文件版本',
            'type' => 'integer',
            'format' => 'int64',
          ),
          'revision_id' => 
          array (
            'title' => '版本id',
            'type' => 'string',
          ),
        ),
      ),
      'FilePermissionMember' => 
      array (
        'title' => 'A short description of struct',
        'description' => 'A short description of struct',
        'type' => 'object',
        'properties' => 
        array (
          'identity' => 
          array (
            'title' => '授权对象',
            'description' => '被授权对象，可以是用户或群组',
            '$ref' => '#/components/schemas/Identity',
          ),
          'role_id' => 
          array (
            'title' => '授予的角色ID',
            'description' => '目前支持两种方式设置权限，一种是通过指定角色设置权限，另一种是自定义操作权限，此字段用于指定角色设置权限，与action\\_list互斥，当两个字段同时设置时，以此字段为准

目前支持：

SystemFileOwner（文件协同）

SystemFileDownloader（下载者）

SystemFileEditor（编辑者）

SystemFileEditorWithoutDelete（无删除编辑者）

SystemFileEditorWithoutShareLink（无分享编辑者）

SystemFileMetaViewer（可见列表）

SystemFileUploader（上传者）、SystemFileUploaderAndDownloader（上传/下载者）

SystemFileDownloaderWithShareLink（下载/分享者）

SystemFileUploaderAndDownloaderWithShareLink（上传/下载/分享者）

SystemFileUploaderAndViewer（预览/上传者）

SystemFileUploaderWithShareLink（上传/分享者）

SystemFileViewer（预览者）',
            'type' => 'string',
            'example' => 'SystemFileDownloader',
          ),
          'expire_time' => 
          array (
            'title' => '过期时间',
            'description' => '此授权过期的时间， 从1970年1月1日0点到目标时间的毫秒数， 永久有效可以设置为系统预定义的一个值：4775500800000',
            'type' => 'integer',
            'format' => 'int64',
            'example' => '1633598085642',
          ),
          'disinherit_sub_group' => 
          array (
            'title' => '是否禁用子用户组继承此权限',
            'description' => '是否禁用子群组下的用户继承此权限，举个例子，比如有/group1/group2， user1在group1下， user2在group2下。给group1授权时，此字段设置为true，则只有user1有权限，user2没有权限',
            'type' => 'boolean',
            'example' => 'false',
          ),
          'action_list' => 
          array (
            'title' => '授予的操作权限列表',
            'description' => '目前支持两种方式设置权限，一种是通过指定角色设置权限，另一种是自定义操作权限，此字段用于自定义操作权限，与role\\_id互斥，当两个字段同时设置时，以role\\_id字段为准，设置action\\_list字段时系统会自动生成一个临时role\\_id，取消授权可以通过临时role\\_id来取消',
            'type' => 'array',
            'items' => 
            array (
              'description' => '
自定义操作权限：
- FILE.VISIBLE: 可见
- FILE.PREVIEW: 可预览
- FILE.MOVE: 可移动
- FILE.DELETE: 可删除
- FILE.COPY: 可复制
- FILE.CREATE: 可创建
- FILE.DOWNLOAD: 可下载
- FILE.SHARELINK: 可分享
- FILE.UPDATE: 可更新
- FILE.LIST: 可列举',
              'type' => 'string',
              'example' => 'FILE.CREATE',
            ),
            'required' => false,
          ),
        ),
      ),
      'FileStreamInfo' => 
      array (
        'title' => 'A short description of struct',
        'description' => '文件流信息',
        'type' => 'object',
        'properties' => 
        array (
          'size' => 
          array (
            'title' => '大小',
            'type' => 'integer',
            'format' => 'int64',
          ),
          'content_hash' => 
          array (
            'title' => '内容hash',
            'type' => 'string',
          ),
          'content_hash_name' => 
          array (
            'title' => '内容hash名',
            'type' => 'string',
          ),
          'proof_code' => 
          array (
            'title' => '挑战码',
            'type' => 'string',
          ),
          'proof_version' => 
          array (
            'title' => '挑战算法版本',
            'type' => 'string',
          ),
          'pre_hash' => 
          array (
            'title' => '预秒传',
            'type' => 'string',
          ),
          'content_md5' => 
          array (
            'title' => '内容md5',
            'type' => 'string',
          ),
          'part_info_list' => 
          array (
            'title' => '分段信息',
            '$ref' => '#/components/schemas/UploadPartInfo',
          ),
        ),
      ),
      'GetOfficeEditUrlOption' => 
      array (
        'title' => 'A short description of struct',
        'description' => '文档编辑选项',
        'type' => 'object',
        'properties' => 
        array (
          'copy' => 
          array (
            'title' => '是否允许复制内容，不传递该参数默认允许复制',
            'type' => 'boolean',
          ),
          'readonly' => 
          array (
            'title' => '预览模式，不传递该参数默认是预览模式',
            'type' => 'boolean',
          ),
          'print' => 
          array (
            'title' => '是否允许打印内容，不传递该参数默认禁止打印',
            'type' => 'boolean',
          ),
        ),
      ),
      'GetOfficeEditUrlWatermark' => 
      array (
        'title' => 'A short description of struct',
        'description' => '在线编辑水印配置',
        'type' => 'object',
        'properties' => 
        array (
          'type' => 
          array (
            'title' => '水印类型。0：无水印，1：文字水印。',
            'type' => 'integer',
            'format' => 'int32',
          ),
          'value' => 
          array (
            'title' => '文字水印的文字。当WatermarkType设置为1时，才能设置此参数',
            'type' => 'string',
          ),
          'fillstyle' => 
          array (
            'title' => '文字水印的透明度，默认值为rgba(192,192,192,0.6)。',
            'type' => 'string',
          ),
          'font' => 
          array (
            'title' => '文字水印的字体，默认值为bold 20px Serif',
            'type' => 'string',
          ),
          'rotate' => 
          array (
            'title' => '文字水印的旋转度，单位为弧度。',
            'type' => 'number',
            'format' => 'double',
          ),
          'horizontal' => 
          array (
            'title' => '文字水印水平间距，单位为px。',
            'type' => 'integer',
            'format' => 'int64',
          ),
          'vertical' => 
          array (
            'title' => '文字水印垂直间距，单位为px。',
            'type' => 'integer',
            'format' => 'int64',
          ),
        ),
      ),
      'GetOfficePreviewUrlOption' => 
      array (
        'title' => 'A short description of struct',
        'description' => '文档预览控制选项',
        'type' => 'object',
        'properties' => 
        array (
          'copy' => 
          array (
            'title' => '是否允许复制内容，不传递该参数默认允许复制',
            'type' => 'boolean',
          ),
          'print' => 
          array (
            'title' => '是否允许打印内容，不传递该参数默认禁止打印',
            'type' => 'boolean',
          ),
        ),
      ),
      'Group' => 
      array (
        'title' => 'A short description of struct',
        'description' => 'group',
        'type' => 'object',
        'properties' => 
        array (
          'domain_id' => 
          array (
            'title' => '域ID',
            'description' => '域ID',
            'type' => 'string',
            'example' => 'bj1',
          ),
          'group_id' => 
          array (
            'title' => '用户组ID',
            'description' => '群组ID',
            'type' => 'string',
            'example' => 'b45c0c0c373c41ec9ebb5c85a025a08f',
          ),
          'group_name' => 
          array (
            'title' => '用户组名',
            'description' => '群组名称',
            'type' => 'string',
            'example' => 'test group',
          ),
          'description' => 
          array (
            'title' => '描述',
            'description' => '描述',
            'type' => 'string',
            'example' => 'created by system',
          ),
          'created_at' => 
          array (
            'title' => '创建时间',
            'description' => '创建时间，从1970年1月1日0点到当前的毫秒时间戳',
            'type' => 'integer',
            'format' => 'int64',
            'example' => '1670573504600',
          ),
          'updated_at' => 
          array (
            'title' => '更新时间',
            'description' => '更新时间，从1970年1月1日0点到当前的毫秒时间戳',
            'type' => 'integer',
            'format' => 'int64',
            'example' => '1670573504600',
          ),
          'creator' => 
          array (
            'title' => '创建者',
            'description' => '创建者ID',
            'type' => 'string',
            'example' => 'c9b7a5aa04d14ae3867fdc886fa01da4',
          ),
        ),
      ),
      'IDPermission' => 
      array (
        'title' => 'A short description of struct',
        'type' => 'object',
        'properties' => 
        array (
          'permission' => 
          array (
            '$ref' => '#/components/schemas/Permission',
          ),
          'disinherit_sub_group' => 
          array (
            'title' => 'DisinheritSubGroup',
            'type' => 'boolean',
          ),
          'expire_time' => 
          array (
            'title' => 'ExpireTime',
            'type' => 'integer',
            'format' => 'int64',
          ),
          'roles' => 
          array (
            'title' => 'Roles',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'string',
            ),
          ),
        ),
      ),
      'Identity' => 
      array (
        'title' => 'A short description of struct',
        'description' => '可授权对象，表示一个用户或者一个群组',
        'type' => 'object',
        'properties' => 
        array (
          'identity_type' => 
          array (
            'title' => '类型',
            'description' => '对象类型
- IT_User：表示用户类型
- IT_Group：表示群组类型',
            'type' => 'string',
            'example' => 'IT_User',
          ),
          'identity_id' => 
          array (
            'title' => 'ID',
            'description' => '用户ID或者群组ID',
            'type' => 'string',
            'example' => '16435bdf934248b788b7b3771ee9a3dw',
          ),
        ),
      ),
      'IdentityToBenefitPkgMapping' => 
      array (
        'title' => 'A short description of struct',
        'description' => '实体的权益包关联信息',
        'type' => 'object',
        'properties' => 
        array (
          'identity_type' => 
          array (
            'title' => '实体的类型',
            'description' => '实体的类型',
            'type' => 'string',
            'example' => 'user',
          ),
          'identity_id' => 
          array (
            'title' => '实体的唯一标识',
            'description' => '实体的标识ID',
            'type' => 'string',
            'example' => 'user123',
          ),
          'benefit_pkg_owner_id' => 
          array (
            'title' => '权益包的所有者ID',
            'description' => '权益包的所有者ID',
            'type' => 'string',
            'example' => 'bj1',
          ),
          'benefit_pkg_id' => 
          array (
            'title' => '权益包的唯一标识',
            'description' => '权益包的标识ID',
            'type' => 'string',
            'example' => '40cb7794c9294',
          ),
          'benefit_pkg_type' => 
          array (
            'title' => '权益包的类型',
            'description' => '权益包的类型

有效值：

user_identity：用户等级权益包

user_resource：用户资源权益包',
            'type' => 'string',
            'example' => 'user_identity',
          ),
          'benefit_pkg_name' => 
          array (
            'title' => '权益包的名称',
            'description' => '权益包的名称',
            'type' => 'string',
            'example' => '高级会员',
          ),
          'benefit_pkg_priority' => 
          array (
            'title' => '权益包的优先级',
            'description' => '权益包的优先级

用户等级权益包返回的优先级，数字越小，优先级越高。',
            'type' => 'integer',
            'format' => 'int64',
            'example' => '1',
          ),
          'benefit_pkg_computation_rule' => 
          array (
            'title' => '权益包内权益的计算规则',
            'description' => '权益包内权益的计算规则

用户等级权益包，返回为空，只根据优先级priority计算生效权益的quota。

用户资源权益包，可以返回空值或非空值。返回非空时，该权益包用于追加计算其它权益包中已存在权益的配额，限于quota型权益。如：一个用户等级权益包中已经包含10G用户存储容量，可以再定义一个或多个用户资源权益包，用于给某些用户增加额外的存储容量。

支持的追加计算规则包括：

sum：多个权益包中有相同权益，进行累加

max：多个权益包中有相同权益，取max值

min：多个权益包中有相同权益，取min值',
            'type' => 'string',
            'example' => 'sum',
          ),
          'delivery_info_list' => 
          array (
            'title' => '权益包的下发信息',
            'description' => '权益包的下发信息列表',
            'type' => 'array',
            'items' => 
            array (
              '$ref' => '#/components/schemas/BenefitPkgDeliveryInfo',
            ),
          ),
          'created_at' => 
          array (
            'title' => '实体权益包关联的创建时间',
            'description' => '实体和权益包关联的创建时间',
            'type' => 'string',
            'example' => '2019-08-20T06:51:27.292Z',
          ),
          'updated_at' => 
          array (
            'title' => '实体权益包关联的更新时间',
            'description' => '实体和权益包关联的更新时间',
            'type' => 'string',
            'example' => '2019-08-20T06:51:27.292Z',
          ),
        ),
      ),
      'ImageMediaMetadata' => 
      array (
        'title' => '图片信息。仅开启增值服务图片处理功能有效。',
        'description' => '图片元数据。仅当开启增值服务图片处理功能有效。',
        'type' => 'object',
        'properties' => 
        array (
          'time' => 
          array (
            'title' => '拍摄时间，RFC3339 格式。',
            'description' => '拍摄时间，RFC3339 格式。',
            'type' => 'string',
            'example' => '2006-01-02T15:04:05.000Z07:00',
          ),
          'width' => 
          array (
            'title' => '图片宽度，单位为像素（px）。',
            'description' => '宽度，单位为像素。',
            'type' => 'integer',
            'format' => 'int64',
            'example' => '1024',
          ),
          'height' => 
          array (
            'title' => '图片高度，单位为像素（px）。',
            'description' => '高度，单位为像素。',
            'type' => 'integer',
            'format' => 'int64',
            'example' => '1024',
          ),
          'location' => 
          array (
            'title' => 'GPS 经纬度信息。',
            'description' => '地理经纬度信息。',
            'type' => 'string',
            'example' => '30.185453,120.218522',
          ),
          'country' => 
          array (
            'title' => '国家或地区。',
            'description' => '国家或地区。',
            'type' => 'string',
            'enumValueTitles' => 
            array (
            ),
            'example' => 'China',
          ),
          'province' => 
          array (
            'title' => '省。',
            'description' => '省。',
            'type' => 'string',
            'example' => 'Zhejiang',
          ),
          'city' => 
          array (
            'title' => '城市。',
            'description' => '城市。',
            'type' => 'string',
            'example' => 'Hangzhou',
          ),
          'district' => 
          array (
            'title' => '区。',
            'description' => '区。',
            'type' => 'string',
            'example' => 'Xihu',
          ),
          'township' => 
          array (
            'title' => '街道。',
            'description' => '街道。',
            'type' => 'string',
            'example' => 'Xihu',
          ),
          'address_line' => 
          array (
            'title' => '完整地址。',
            'description' => '完整地址。',
            'type' => 'string',
            'example' => 'Zhejiang hangzhou xihu',
          ),
          'image_tags' => 
          array (
            'title' => '图片标签详情列表',
            'description' => '图片标签详情列表',
            'type' => 'array',
            'items' => 
            array (
              'description' => '系统标签',
              '$ref' => '#/components/schemas/SystemTag',
            ),
          ),
          'faces_thumbnail' => 
          array (
            'title' => '人脸缩略图列表。',
            'description' => '人脸缩略图列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '人脸缩略图',
              '$ref' => '#/components/schemas/FaceThumbnail',
            ),
          ),
          'exif' => 
          array (
            'title' => '图片EXIF信息。',
            'description' => '图片EXIF信息。',
            'type' => 'string',
            'example' => '{"Compression":{"value":"6"},"DateTime":{"value":"2020:08:19 17:11:11"}}',
          ),
          'image_quality' => 
          array (
            'title' => '图片评分信息。',
            'description' => '图片评分信息。',
            '$ref' => '#/components/schemas/ImageQuality',
          ),
        ),
      ),
      'ImageProcess' => 
      array (
        'title' => 'A short description of struct',
        'description' => '图片处理规则',
        'type' => 'object',
        'properties' => 
        array (
          'image_thumbnail_process' => 
          array (
            'title' => '图片类型文件的缩略图规则',
            'description' => '图片类型文件的缩略图规则，参考OSS的图片处理规则。默认为：image/resize,m\\_fill,h\\_128,w\\_128,limit\\_0',
            'type' => 'string',
            'example' => 'image/resize,m_fill,h_128,w_128,limit_0',
          ),
          'video_thumbnail_process' => 
          array (
            'title' => '视频类型文件的缩略图规则',
            'description' => '视频类型文件的缩略图规则，参考OSS的视频截帧处理规则。默认为：video/snapshot,t\\_1000,f\\_jpg,w\\_0,h\\_0,m\\_fast,ar\\_auto',
            'type' => 'string',
            'example' => 'video/snapshot,t_1000,f_jpg,w_0,h_0,m_fast,ar_auto',
          ),
          'office_thumbnail_process' => 
          array (
            'title' => '文档类型文件的缩略图规则',
            'description' => '文档类型文件的缩略图规则，文档类型的文件会选择文档中一页的截图作为原图，此参数是基于该截图来做处理。默认为：image/resize,m\\_fill,h\\_128,w\\_128,limit\\_0',
            'type' => 'string',
            'example' => 'image/resize,m_fill,h_128,w_128,limit_0',
          ),
        ),
      ),
      'ImageQuality' => 
      array (
        'title' => '图片评分详情。仅开启增值服务图片处理功能有效。',
        'type' => 'object',
        'properties' => 
        array (
          'overall_score' => 
          array (
            'title' => '图片整体质量评分。该评分为 AI 自动评估，主要以主观美学为准，受到构图、亮度、对比度、色彩、清晰度等多方面因素影响。  范围 0-1，越高则质量越好。',
            'type' => 'number',
            'format' => 'double',
            'example' => '0.736',
          ),
        ),
      ),
      'ImageTag' => 
      array (
        'title' => '标签信息',
        'description' => '标签信息',
        'type' => 'object',
        'properties' => 
        array (
          'name' => 
          array (
            'title' => '名称',
            'description' => '名称',
            'type' => 'string',
            'example' => '动物',
          ),
          'count' => 
          array (
            'title' => '数量',
            'description' => '分组内文件数量',
            'type' => 'integer',
            'format' => 'int64',
            'example' => '1',
          ),
          'cover_url' => 
          array (
            'title' => '标签封面图片地址',
            'description' => '标签封面图片地址',
            'type' => 'string',
            'example' => 'https://data.aliyunpds.com/hz22%2F5d5b986facbec311ef844c25954f96821497b383%2F5d5b986f955410dd991646bb87c6b4e899eff525?Expires=xxx&OSSAccessKeyId=xxx&Signature=xxx',
          ),
          'cover_file_id' => 
          array (
            'title' => '封面文件id',
            'description' => '封面文件id',
            'type' => 'string',
            'example' => '5d79206586bb5dd69fb34c349282718146c55da7',
          ),
          'cover_file_category' => 
          array (
            'title' => '封面文件分类',
            'description' => '封面文件分类',
            'type' => 'string',
            'example' => 'image',
          ),
          'cover_tag_confidence' => 
          array (
            'title' => '封面标签置信度。取值范围为 0（表示置信度最低）~1（表示置信度最高）。',
            'description' => '封面标签置信度',
            'type' => 'number',
            'format' => 'float',
            'example' => '1',
          ),
          'cover_overall_score' => 
          array (
            'title' => '封面评分。该评分为 AI 自动评估，主要以主观美学为准，受到构图、亮度、对比度、色彩、清晰度等多方面因素影响。  范围 0-1，越高则质量越好。',
            'description' => '封面评分',
            'type' => 'number',
            'format' => 'float',
            'example' => '0.736',
          ),
        ),
      ),
      'Int64Range' => 
      array (
        'title' => 'A short description of struct',
        'type' => 'object',
        'properties' => 
        array (
          'from' => 
          array (
            'title' => '起始',
            'type' => 'integer',
            'format' => 'int64',
          ),
          'to' => 
          array (
            'title' => '结束',
            'type' => 'integer',
            'format' => 'int64',
          ),
        ),
      ),
      'InvestigationInfo' => 
      array (
        'title' => 'A short description of struct',
        'description' => 'A short description of struct',
        'type' => 'object',
        'properties' => 
        array (
          'status' => 
          array (
            'title' => '审核状态',
            'description' => '审核状态',
            'type' => 'integer',
            'format' => 'int64',
            'enumValueTitles' => 
            array (
              0 => '未审核',
              1 => '不支持审核',
              2 => '审核失败',
              3 => '审核中',
              4 => '审核成功',
              5 => '被处罚接口调用',
            ),
            'example' => '4',
          ),
          'suggestion' => 
          array (
            'title' => '审核建议执行的操作',
            'description' => '审核建议执行的操作',
            'type' => 'string',
            'enumValueTitles' => 
            array (
              'pass' => '结果正常',
              'block' => '结果违规，建议进行限制',
            ),
            'example' => 'block',
          ),
          'video_detail' => 
          array (
            'title' => '视频审核信息',
            'description' => '视频审核信息',
            'type' => 'object',
            'properties' => 
            array (
              'block_frames' => 
              array (
                'title' => '违规帧信息',
                'description' => '违规帧信息',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'rate' => 
                    array (
                      'title' => '置信度',
                      'description' => '置信度。取值范围0～100。',
                      'type' => 'number',
                      'format' => 'double',
                      'example' => '99.1',
                    ),
                    'offset' => 
                    array (
                      'title' => '截帧距离片头的时间（秒）',
                      'description' => '截帧距离片头的时间（秒）',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '3',
                    ),
                    'label' => 
                    array (
                      'title' => '检测结果分类',
                      'description' => '检测结果分类',
                      'type' => 'string',
                      'example' => 'porn',
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'JWTPayload' => 
      array (
        'type' => 'object',
        'properties' => 
        array (
          'auto_create' => 
          array (
            'title' => '扩展字段，是否自动创建用户',
            'type' => 'boolean',
          ),
          'sub_type' => 
          array (
            'title' => '扩展字段，表示账号类型，目前支持填 user、service，此处填user，则sub为userID，签发普通用户accessToken。 此处填service，则sub为domainID，签发domain服务账号accessToken(超级管理员权限)',
            'type' => 'string',
          ),
          'iss' => 
          array (
            'title' => '控制台申请的JWT App ID',
            'type' => 'string',
          ),
          'sub' => 
          array (
            'title' => '待授权的UserID或者DomainID',
            'type' => 'string',
          ),
          'aud' => 
          array (
            'title' => 'DomainID',
            'type' => 'string',
          ),
          'jti' => 
          array (
            'title' => '应用生成JWT的唯一标识，长度16-128位，推荐使用uuid即可',
            'type' => 'string',
          ),
          'exp' => 
          array (
            'title' => 'JWT过期时间, Unix Time，单位秒，生效时间和过期时间不能超过15分钟。为防止客户端和服务器时间不一致，此时间建议设置为当前时间加5分钟。',
            'type' => 'integer',
            'format' => 'int64',
          ),
          'iat' => 
          array (
            'title' => '签发时间，Unix Time，单位秒，在此时间之前无法使用，如：1577682075',
            'type' => 'integer',
            'format' => 'int64',
          ),
          'nbf' => 
          array (
            'title' => '生效时间，Unix Time，单位秒，不指定则默认为当前时间。生效时间和过期时间不能超过15分钟。 为防止客户端和服务器时间不一致，此时间建议设置为当前时间减5分钟，或者不设置。',
            'type' => 'integer',
            'format' => 'int64',
          ),
        ),
      ),
      'LinkInfo' => 
      array (
        'title' => 'A short description of struct',
        'description' => '用户登录信息',
        'type' => 'object',
        'properties' => 
        array (
          'type' => 
          array (
            'title' => '当前用户已存在的登录方式',
            'type' => 'string',
          ),
          'identity' => 
          array (
            'title' => '当前用户已存在的登录标识',
            'type' => 'string',
          ),
          'extra' => 
          array (
            'title' => '额外的信息，比如type为mobile时，此字段为国家编号，不填默认86',
            'type' => 'string',
          ),
        ),
      ),
      'LocationDateCluster' => 
      array (
        'title' => '时空聚类详情',
        'type' => 'object',
        'properties' => 
        array (
          'drive_id' => 
          array (
            'title' => '空间 id。',
            'type' => 'string',
          ),
          'cluster_id' => 
          array (
            'title' => '聚类 id。',
            'type' => 'string',
          ),
          'title' => 
          array (
            'title' => '聚类标题。',
            'type' => 'string',
          ),
          'level' => 
          array (
            'title' => '聚类的行政级别。',
            'type' => 'string',
            'enum' => 
            array (
              0 => 'country',
              1 => 'province',
              2 => 'city',
              3 => 'district',
              4 => 'township',
            ),
          ),
          'address' => 
          array (
            'title' => '地址信息。',
            '$ref' => '#/components/schemas/Address',
          ),
          'start_time' => 
          array (
            'title' => '聚类开始时间。RFC3339。',
            'type' => 'string',
          ),
          'end_time' => 
          array (
            'title' => '聚类结束时间。RFC3339。',
            'type' => 'string',
          ),
          'created_at' => 
          array (
            'title' => '聚类创建时间。RFC3339。',
            'type' => 'string',
          ),
          'updated_at' => 
          array (
            'title' => '聚类更新时间。RFC3339。',
            'type' => 'string',
          ),
          'custom_labels' => 
          array (
            'title' => '自定义标签。',
            'type' => 'object',
            'additionalProperties' => 
            array (
              'type' => 'string',
            ),
          ),
        ),
      ),
      'Membership' => 
      array (
        'title' => 'A short description of struct',
        'type' => 'object',
        'properties' => 
        array (
          'domain_id' => 
          array (
            'title' => '域id',
            'type' => 'string',
          ),
          'group_id' => 
          array (
            'title' => '组id',
            'type' => 'string',
          ),
          'sub_group_id' => 
          array (
            'title' => '子组id',
            'type' => 'string',
          ),
          'user_id' => 
          array (
            'title' => '用户id',
            'type' => 'string',
          ),
          'member_type' => 
          array (
            'title' => '成员类型',
            'type' => 'string',
          ),
          'member_role' => 
          array (
            'title' => '成员角色',
            'type' => 'string',
          ),
          'description' => 
          array (
            'title' => '描述',
            'type' => 'string',
          ),
          'created_at' => 
          array (
            'title' => '创建时间',
            'type' => 'integer',
            'format' => 'int64',
          ),
          'updated_at' => 
          array (
            'title' => '更新时间',
            'type' => 'integer',
            'format' => 'int64',
          ),
          'creator' => 
          array (
            'title' => '创建者',
            'type' => 'string',
          ),
        ),
      ),
      'NameCheckResult' => 
      array (
        'title' => 'A short description of struct',
        'type' => 'object',
        'properties' => 
        array (
          'exist_file_id' => 
          array (
            'title' => 'exist file id',
            'type' => 'string',
          ),
          'exist_file_type' => 
          array (
            'title' => 'exist file type',
            'type' => 'string',
          ),
        ),
      ),
      'OfficeEditConfig' => 
      array (
        'title' => 'OfficeEditConfig',
        'type' => 'object',
        'properties' => 
        array (
          'enabled' => 
          array (
            'title' => 'enabled',
            'type' => 'boolean',
          ),
        ),
      ),
      'OfficePreviewConfig' => 
      array (
        'title' => 'OfficePreviewConfig',
        'type' => 'object',
        'properties' => 
        array (
          'enabled' => 
          array (
            'title' => 'enabled',
            'type' => 'boolean',
          ),
        ),
      ),
      'Permission' => 
      array (
        'title' => 'A short description of struct',
        'description' => '权限',
        'type' => 'object',
        'properties' => 
        array (
          'collection' => 
          array (
            'title' => '权限集',
            'description' => '权限集，设置全局权限时设置为global，其他场景默认为空',
            'type' => 'string',
            'example' => 'global',
          ),
          'resource_type' => 
          array (
            'title' => '资源类型',
            'description' => '资源类型，文件类型资源为RT\\_File',
            'type' => 'string',
            'example' => 'RT_File',
          ),
          'resource' => 
          array (
            'title' => '资源',
            'description' => '资源ID',
            'type' => 'string',
            'example' => 'fa212***',
          ),
          'identity_type' => 
          array (
            'title' => '授予对象类型',
            'description' => '授予对象类型，当前支持IT\\_User、IT\\_Group、IT\\_Role',
            'type' => 'string',
            'example' => 'IT_User',
          ),
          'identity_id' => 
          array (
            'title' => '授予对象ID',
            'description' => '授予对象ID',
            'type' => 'string',
            'example' => 'af22***',
          ),
          'action_list' => 
          array (
            'title' => '操作列表',
            'description' => '操作列表',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'action' => 
                array (
                  'title' => '操作',
                  'description' => '具体操作，比如FILE.ALL',
                  'type' => 'string',
                  'example' => 'FILE.ALL',
                ),
              ),
            ),
          ),
          'effect' => 
          array (
            'title' => '作用',
            'description' => '作用，可填allow、deny',
            'type' => 'string',
            'example' => 'deny',
          ),
          'created_at' => 
          array (
            'title' => '创建时间',
            'description' => '创建时间，格式毫秒时间戳',
            'type' => 'integer',
            'format' => 'int64',
            'example' => '1703648502811',
          ),
          'updated_at' => 
          array (
            'title' => '修改时间',
            'description' => '修改时间，格式毫秒时间戳',
            'type' => 'integer',
            'format' => 'int64',
            'example' => '1703648502811',
          ),
          'condition' => 
          array (
            'title' => '条件',
            'description' => '条件',
            '$ref' => '#/components/schemas/PermissionCondition',
          ),
          'user_tags' => 
          array (
            'title' => '自定义标签',
            'description' => '自定义标签',
            'type' => 'array',
            'items' => 
            array (
              'description' => '自定义标签字符串',
              'type' => 'string',
              'example' => 'user1',
            ),
          ),
        ),
      ),
      'PermissionCondition' => 
      array (
        'title' => 'permission condition',
        'description' => '条件',
        'type' => 'object',
        'properties' => 
        array (
          'ip_equals' => 
          array (
            'title' => 'ip在里面',
            'description' => 'IP地址条件，当IP等于以下列表中其中一个时，此条件成立',
            'type' => 'object',
            'properties' => 
            array (
              'client_ip' => 
              array (
                'title' => 'ip',
                'description' => '客户端IP地址',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '具体的IP地址',
                  'type' => 'string',
                  'example' => '192.168.1.1',
                ),
              ),
            ),
          ),
          'ip_not_equals' => 
          array (
            'title' => 'ip不在里面',
            'description' => 'IP地址条件，当IP不等于以下列表中任意一个时，此条件成立',
            'type' => 'object',
            'properties' => 
            array (
              'client_ip' => 
              array (
                'title' => 'ip',
                'description' => '客户端IP地址',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '具体的IP地址',
                  'type' => 'string',
                  'example' => '192.168.1.1',
                ),
              ),
            ),
          ),
          'string_like' => 
          array (
            'title' => 'vpc_id在里面',
            'description' => '字符串匹配条件，当传入字符串等于以下列表中其中一个时，此条件成立',
            'type' => 'object',
            'properties' => 
            array (
              'vpc_id' => 
              array (
                'title' => 'vpc_id',
                'description' => '客户端所在的vpcID作为字符串匹配条件',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '具体VpcID',
                  'type' => 'string',
                  'example' => 'vpc-xxx',
                ),
              ),
            ),
          ),
          'string_not_like' => 
          array (
            'title' => 'vpc_id不在里面',
            'description' => '字符串匹配条件，当传入字符串不等于以下列表中任意一个时，此条件成立',
            'type' => 'object',
            'properties' => 
            array (
              'vpc_id' => 
              array (
                'title' => 'vpi_id',
                'description' => '客户端所在的vpcID作为字符串匹配条件',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '具体VpcID',
                  'type' => 'string',
                  'example' => 'vpc-xxx',
                ),
              ),
            ),
          ),
        ),
      ),
      'RecycleBinConfig' => 
      array (
        'title' => 'A short description of struct',
        'type' => 'object',
        'properties' => 
        array (
          'auto_delete_enabled' => 
          array (
            'title' => 'auto_delete_enabled',
            'type' => 'boolean',
          ),
          'auto_delete_keep_second' => 
          array (
            'title' => 'auto_delete_keep_second',
            'type' => 'integer',
            'format' => 'int32',
          ),
          'delete_trash_normal_file_disabled' => 
          array (
            'title' => 'delete_trash_normal_file_disabled',
            'type' => 'boolean',
          ),
        ),
      ),
      'RefundNoticeParam' => 
      array (
        'title' => 'A short description of struct',
        'description' => '退款通知参数',
        'type' => 'object',
        'properties' => 
        array (
          'refundType' => 
          array (
            'title' => '退款类型',
            'type' => 'string',
          ),
          'orderIds' => 
          array (
            'title' => '订单号列表',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'integer',
              'format' => 'int64',
            ),
          ),
          'instanceId' => 
          array (
            'title' => '实例 id',
            'type' => 'string',
          ),
          'commodityCode' => 
          array (
            'title' => '商品 code',
            'type' => 'string',
          ),
          'aliyunProduceCode' => 
          array (
            'title' => '阿里云产品 code',
            'type' => 'string',
          ),
          'aliuid' => 
          array (
            'title' => '阿里云用户 id',
            'type' => 'integer',
            'format' => 'int64',
          ),
          'newExpireTime' => 
          array (
            'title' => '过期时间',
            'type' => 'any',
          ),
          'refundParamMap' => 
          array (
            'title' => '退款参数',
            'type' => 'object',
            'additionalProperties' => 
            array (
              'type' => 'string',
            ),
          ),
        ),
      ),
      'Revision' => 
      array (
        'title' => 'A short description of struct',
        'description' => '版本',
        'type' => 'object',
        'properties' => 
        array (
          'domain_id' => 
          array (
            'title' => '域id',
            'description' => '域id',
            'type' => 'string',
            'example' => 'bj1',
          ),
          'drive_id' => 
          array (
            'title' => '空间id',
            'description' => '空间id',
            'type' => 'string',
            'example' => '1',
          ),
          'file_id' => 
          array (
            'title' => '文件id',
            'description' => '文件id',
            'type' => 'string',
            'example' => '9520943DC264',
          ),
          'revision_id' => 
          array (
            'title' => '版本id',
            'description' => '版本id',
            'type' => 'string',
            'example' => '40CB7794C929',
          ),
          'revision_name' => 
          array (
            'title' => '版本名',
            'description' => '版本名',
            'type' => 'string',
            'example' => '1.mov',
          ),
          'revision_version' => 
          array (
            'title' => '版本号',
            'description' => '版本号',
            'type' => 'integer',
            'format' => 'int64',
            'example' => '1',
          ),
          'size' => 
          array (
            'title' => '版本大小',
            'description' => '版本大小',
            'type' => 'integer',
            'format' => 'int64',
            'example' => '1024',
          ),
          'file_extension' => 
          array (
            'title' => '扩展名',
            'description' => '扩展名',
            'type' => 'string',
            'example' => 'mov',
          ),
          'created_at' => 
          array (
            'title' => '创建时间',
            'description' => '创建时间',
            'type' => 'string',
            'example' => '2019-08-20T06:51:27.292Z',
          ),
          'updated_at' => 
          array (
            'title' => '修改时间',
            'description' => '修改时间',
            'type' => 'string',
            'example' => '2019-08-20T06:51:27.292Z',
          ),
          'keep_forever' => 
          array (
            'title' => '是否永久保留',
            'description' => '是否永久保留',
            'type' => 'boolean',
            'example' => 'false',
          ),
          'revision_description' => 
          array (
            'title' => '版本描述',
            'description' => '版本描述',
            'type' => 'string',
            'example' => 'aaa',
          ),
          'is_latest_version' => 
          array (
            'title' => '是否为最新版本',
            'description' => '是否为最新版本',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
          'crc64_hash' => 
          array (
            'title' => 'crc64',
            'description' => 'crc64',
            'type' => 'string',
            'example' => '3574582125365864471',
          ),
          'content_hash' => 
          array (
            'title' => '内容hash',
            'description' => '内容hash',
            'type' => 'string',
            'example' => 'EA4942AA8761213890A5C386F88E6464D2C31CA3',
          ),
          'content_hash_name' => 
          array (
            'title' => '内容hash算法名',
            'description' => '内容hash算法名',
            'type' => 'string',
            'example' => 'sha1',
          ),
          'thumbnail' => 
          array (
            'title' => '缩略图地址',
            'description' => '缩略图地址',
            'type' => 'string',
            'required' => false,
            'example' => 'https://data.aliyunpds.com/hz22%2F5d5b986facbec311ef844c25954f96821497b383%2F5d5b986f955410dd991646bb87c6b4e899eff525?Expires=xxx&OSSAccessKeyId=xxx&Signature=xxx
',
          ),
          'url' => 
          array (
            'title' => '预览地址',
            'description' => '预览地址',
            'type' => 'string',
            'example' => 'https://data.aliyunpds.com/hz22%2F5d5b986facbec311ef844c25954f96821497b383%2F5d5b986f955410dd991646bb87c6b4e899eff525?Expires=xxx&OSSAccessKeyId=xxx&Signature=xxx
',
          ),
          'download_url' => 
          array (
            'title' => '下载地址',
            'description' => '下载地址，ListRevision不返回该字段，GetRevision, UpdateRevision, RestoreRevision返回该字段。',
            'type' => 'string',
            'example' => 'https://data.aliyunpds.com/hz22%2F5d5b986facbec311ef844c25954f96821497b383%2F5d5b986f955410dd991646bb87c6b4e899eff525?Expires=xxx&OSSAccessKeyId=xxx&Signature=xxx
',
          ),
          'creator_id' => 
          array (
            'title' => '创建者ID',
            'description' => '创建者ID',
            'type' => 'string',
          ),
          'creator_name' => 
          array (
            'title' => '创建者名称',
            'description' => '创建者名称',
            'type' => 'string',
          ),
        ),
      ),
      'Role' => 
      array (
        'title' => '角色',
        'description' => '角色',
        'type' => 'object',
        'properties' => 
        array (
          'role_id' => 
          array (
            'title' => '角色ID',
            'description' => '角色ID',
            'type' => 'string',
            'example' => 'f2a***',
          ),
          'name' => 
          array (
            'title' => '角色名',
            'description' => '角色名',
            'type' => 'string',
            'example' => '文件预览者',
          ),
          'description' => 
          array (
            'title' => '角色描述',
            'description' => '角色描述',
            'type' => 'string',
            'example' => '拥有预览文件权限',
          ),
          'manage_resource_type' => 
          array (
            'title' => '管理的资源类型',
            'description' => '管理的资源类型，目前支持RT\\_File',
            'type' => 'string',
            'example' => 'RT_File',
          ),
          'creator' => 
          array (
            'title' => '创建者',
            'description' => '创建者ID',
            'type' => 'string',
            'example' => 'a23***',
          ),
          'created_at' => 
          array (
            'title' => '创建时间',
            'description' => '创建时间，格式毫秒时间戳',
            'type' => 'integer',
            'format' => 'int64',
            'example' => '1703648502811',
          ),
          'updated_at' => 
          array (
            'title' => '上次更新时间',
            'description' => '上次更新时间，格式毫秒时间戳',
            'type' => 'integer',
            'format' => 'int64',
            'example' => '1703648502811',
          ),
          'permissions' => 
          array (
            'title' => '权限列表',
            'description' => '权限列表',
            'type' => 'array',
            'items' => 
            array (
              'description' => '权限项',
              '$ref' => '#/components/schemas/Permission',
            ),
          ),
          'status' => 
          array (
            'title' => '状态',
            'description' => '状态',
            'type' => 'string',
            'example' => 'enabled',
          ),
        ),
      ),
      'SearchFromThirdPartyItem' => 
      array (
        'title' => 'SearchFromThirdPartyItem',
        'type' => 'object',
        'properties' => 
        array (
          'authentication_type' => 
          array (
            'title' => 'authentication_type',
            'type' => 'string',
          ),
          'identity' => 
          array (
            'title' => 'identity',
            'type' => 'string',
          ),
          'extra' => 
          array (
            'title' => 'extra',
            'type' => 'string',
          ),
          'others' => 
          array (
            'title' => 'others',
            'type' => 'object',
            'additionalProperties' => 
            array (
              'type' => 'any',
            ),
          ),
        ),
      ),
      'ShareLink' => 
      array (
        'title' => '分享',
        'description' => '分享',
        'type' => 'object',
        'properties' => 
        array (
          'share_id' => 
          array (
            'title' => '分享id',
            'description' => '分享id',
            'type' => 'string',
            'example' => '7JQX1FswpQ8',
          ),
          'share_pwd' => 
          array (
            'title' => '分享密码',
            'description' => '提取码，0-64个字符。长度0表示没有提取码。',
            'type' => 'string',
            'example' => 'abcF123x',
          ),
          'drive_id' => 
          array (
            'title' => '空间id',
            'description' => '空间id',
            'type' => 'string',
            'example' => '1',
          ),
          'file_id_list' => 
          array (
            'title' => '分享父路径文件id列表',
            'description' => '分享父路径文件id列表',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'string',
              'example' => '["xx"]',
            ),
            'example' => '["520b217f13adf4fc24f2191991b1664ce045b393"]',
          ),
          'expiration' => 
          array (
            'title' => '到期时间',
            'description' => '失效时间点。
RFC3339格式，比如："2020-06-28T11:33:00.000+08:00"。
永久有效：""',
            'type' => 'string',
            'example' => '2020-06-28T11:33:00.000+08:00',
          ),
          'expired' => 
          array (
            'title' => '是否过期',
            'description' => '是否过期',
            'type' => 'boolean',
            'example' => 'false',
          ),
          'created_at' => 
          array (
            'title' => '创建时间',
            'description' => '创建时间',
            'type' => 'string',
            'example' => '2019-08-20T06:51:27.292Z',
          ),
          'updated_at' => 
          array (
            'title' => '修改时间',
            'description' => '修改时间',
            'type' => 'string',
            'example' => '2019-08-20T06:51:27.292Z',
          ),
          'description' => 
          array (
            'title' => '描述',
            'description' => '描述',
            'type' => 'string',
            'example' => 'videos',
          ),
          'share_name' => 
          array (
            'title' => '分享名称',
            'description' => '分享名，默认使用第一个文件名',
            'type' => 'string',
            'example' => 'video-1.MP4',
          ),
          'creator' => 
          array (
            'title' => '创建者',
            'description' => '创建者',
            'type' => 'string',
            'example' => 'c9b7a5aa04d14ae3867fdc886fa01da4',
          ),
          'status' => 
          array (
            'title' => '状态',
            'description' => '状态。
枚举值如下：
- disabled（已取消）
- enabled（有效）',
            'type' => 'string',
            'enumValueTitles' => 
            array (
              'disabled' => '已取消',
              'enabled' => '有效',
            ),
            'example' => 'enabled',
          ),
          'preview_count' => 
          array (
            'title' => '预览次数',
            'description' => '预览次数',
            'type' => 'integer',
            'format' => 'int64',
            'example' => '10',
          ),
          'save_count' => 
          array (
            'title' => '转存次数',
            'description' => '转存次数',
            'type' => 'integer',
            'format' => 'int64',
            'example' => '2',
          ),
          'download_count' => 
          array (
            'title' => '下载次数',
            'description' => '下载次数',
            'type' => 'integer',
            'format' => 'int64',
            'example' => '5',
          ),
          'report_count' => 
          array (
            'title' => '被举报次数',
            'description' => '被举报次数',
            'type' => 'integer',
            'format' => 'int64',
            'example' => '0',
          ),
          'video_preview_count' => 
          array (
            'title' => '音视频播放次数',
            'description' => '音视频播放次数',
            'type' => 'integer',
            'format' => 'int64',
            'example' => '1',
          ),
          'access_count' => 
          array (
            'title' => '访问次数',
            'description' => '访问次数',
            'type' => 'integer',
            'format' => 'int64',
            'example' => '4',
          ),
          'disable_preview' => 
          array (
            'title' => '禁止预览分享中的文件',
            'description' => '禁止预览分享中的文件',
            'type' => 'boolean',
            'example' => 'false',
          ),
          'disable_save' => 
          array (
            'title' => '禁止转存分享中的文件',
            'description' => '禁止转存分享中的文件',
            'type' => 'boolean',
            'example' => 'false',
          ),
          'disable_download' => 
          array (
            'title' => '禁止下载分享中的文件',
            'description' => '禁止下载分享中的文件',
            'type' => 'boolean',
            'example' => 'false',
          ),
          'preview_limit' => 
          array (
            'title' => '分享预览次数限制',
            'description' => '分享预览次数限制',
            'type' => 'integer',
            'format' => 'int64',
            'example' => '100',
          ),
          'save_limit' => 
          array (
            'title' => '分享转存次数限制',
            'description' => '分享转存次数限制',
            'type' => 'integer',
            'format' => 'int64',
            'example' => '100',
          ),
          'download_limit' => 
          array (
            'title' => '分享下载次数限制',
            'description' => '分享下载次数限制',
            'type' => 'integer',
            'format' => 'int64',
            'example' => '100',
          ),
          'share_all_files' => 
          array (
            'title' => '是否分享整个drive中的文件',
            'description' => '是否分享整个drive中的文件',
            'type' => 'boolean',
            'example' => 'true',
          ),
          'save_download_limit' => 
          array (
            'title' => '分享转存和下载次数总和限制',
            'description' => '分享转存和下载次数总和限制',
            'type' => 'integer',
            'format' => 'int64',
          ),
        ),
      ),
      'ShareLinkConfig' => 
      array (
        'title' => 'ShareLinkConfig',
        'type' => 'object',
        'properties' => 
        array (
          'enable_share_link_office_edit' => 
          array (
            'title' => 'enable_share_link_office_edit',
            'type' => 'boolean',
          ),
        ),
      ),
      'ShareLinkDetail' => 
      array (
        'title' => 'ShareLinkDetail',
        'type' => 'object',
        'properties' => 
        array (
          'enable_office_editable' => 
          array (
            'title' => 'enable_office_editable',
            'type' => 'boolean',
          ),
        ),
      ),
      'SimpleQuery' => 
      array (
        'title' => 'A short description of struct',
        'type' => 'object',
        'properties' => 
        array (
          'field' => 
          array (
            'title' => '字段',
            'type' => 'string',
            'format' => 'byte',
          ),
          'operation' => 
          array (
            'title' => '操作',
            'type' => 'string',
            'format' => 'byte',
          ),
          'sub_queries' => 
          array (
            'title' => '查询条件',
            'type' => 'array',
            'items' => 
            array (
              '$ref' => '#/components/schemas/SimpleQuery',
            ),
          ),
          'value' => 
          array (
            'title' => '值',
            'type' => 'string',
            'format' => 'byte',
          ),
        ),
      ),
      'SimpleStreamInfo' => 
      array (
        'title' => 'SimpleStreamInfo',
        'description' => '数据流信息',
        'type' => 'object',
        'properties' => 
        array (
          'crc64_hash' => 
          array (
            'title' => 'crc64_hash',
            'type' => 'string',
          ),
          'size' => 
          array (
            'title' => 'size',
            'type' => 'integer',
            'format' => 'int64',
          ),
          'content_hash' => 
          array (
            'title' => 'content_hash',
            'type' => 'string',
          ),
          'content_hash_name' => 
          array (
            'title' => 'content_hash_name',
            'type' => 'string',
          ),
          'download_url' => 
          array (
            'title' => 'download_url',
            'type' => 'string',
          ),
          'url' => 
          array (
            'title' => 'url',
            'type' => 'string',
          ),
          'thumbnail' => 
          array (
            'title' => 'thumbnail',
            'type' => 'string',
          ),
        ),
      ),
      'Story' => 
      array (
        'title' => 'A short description of struct',
        'description' => '故事',
        'type' => 'object',
        'properties' => 
        array (
          'story_id' => 
          array (
            'title' => '故事 id',
            'description' => '故事 id',
            'type' => 'string',
            'example' => '9132e0d8-fe92-4e56-86c3-f5f112308003',
          ),
          'story_type' => 
          array (
            'title' => '故事类型',
            'description' => '故事类型。
由用户创建时指定，见 [CreateStory](~~2367602~~) 和 [CreateCustomizedStory](~~2369338~~)。',
            'type' => 'string',
            'example' => 'PeopleMemory',
          ),
          'story_sub_type' => 
          array (
            'title' => '故事子类型',
            'description' => '故事子类型。
由用户创建时指定，见 [CreateStory](~~2367602~~) 和 [CreateCustomizedStory](~~2369338~~)。',
            'type' => 'string',
            'example' => 'Solo',
          ),
          'story_name' => 
          array (
            'title' => '故事名称',
            'description' => '故事名称',
            'type' => 'string',
            'example' => 'test_name',
          ),
          'story_start_time' => 
          array (
            'title' => '故事开始时间',
            'description' => '故事开始时间。时间格式为 RFC3339。',
            'type' => 'string',
            'example' => '2021-01-14T10:17:18.102700407+08:00',
          ),
          'story_end_time' => 
          array (
            'title' => '故事结束时间',
            'description' => '故事结束时间。时间格式为 RFC3339。',
            'type' => 'string',
            'example' => '2022-01-14T10:17:18.102700407+08:00',
          ),
          'created_at' => 
          array (
            'title' => '故事创建时间',
            'description' => '故事创建时间。时间格式为 RFC3339。',
            'type' => 'string',
            'example' => '2022-01-14T10:17:18.102700407+08:00',
          ),
          'updated_at' => 
          array (
            'title' => '故事更新时间',
            'description' => '故事更新时间。时间格式为 RFC3339。',
            'type' => 'string',
            'example' => '2022-01-14T10:17:18.102700407+08:00',
          ),
          'face_group_ids' => 
          array (
            'title' => '人脸分组列表',
            'description' => '人脸分组列表。
仅为人物故事类型时有值，其他故事类型或自定义故事无值。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '人脸分组 id',
              'type' => 'string',
              'example' => 'Cluster-be377f73-3502-433c-8309-a01e659c128c',
            ),
          ),
          'cover_file_id' => 
          array (
            'title' => '故事封面文件 id',
            'description' => '故事封面文件 id',
            'type' => 'string',
            'example' => '63e5e4340f76cb3ead5f40f68163f0f967c1a7bf',
          ),
          'cover_file_thumbnail_url' => 
          array (
            'title' => '故事封面文件缩略图',
            'description' => '故事封面文件缩略图',
            'type' => 'string',
            'example' => 'https://pds-domain-bucket.oss-cn-hangzhou.aliyuncs.com/Bh1HqdAs%2F1001%2F642a88c26f99cad589904fc8a6b2db6021c6601f%2F642a88c29391c47f221e49e88a21fa9b0a9e5063?security-token=CAIS%2BgF1q6Ft5B2yfSjIr5eGE8nGtYZ59bSnbUODlmsjTttVhpbFpjz2IHpPfHdoBe0btvU%2BlWxX6fwZlq5rR4QAXlDfNXD6XXO2qFHPWZHInuDox55m4cTXNAr%2BIhr%2F29CoEIedZdjBe%2FCrRknZnytou9XTfimjWFrXWv%2Fgy%2BQQDLItUxK%2FcCBNCfpPOwJms7V6D3bKMuu3OROY6Qi5TmgQ41En1DIlt%2FXuk5DCtkqB12eXkLFF%2B97DRbG%2FdNRpMZtFVNO44fd7bKKp0lQLsUMSqv8q0fEcqGaW4o7CWQJLnzyCMvvJ9OVDFyN0aKEnH7J%2Bq%2FzxhTPrMnpkSlacGoABVgD3mIAeUoDYKTJrFTPdmAPIrlUUQ1HZstB0ZVHvYByygr3oeitG9FEQ8lcfaZYJOtWRchdgH8tsSwHj2jI1vMeAiLHgbW98SPA3yfN8OR1kLW73uq3LAvekc9Qldz33YTM4JA5MNJzR8x5O6Oe4rY5OMSSVU5F%2Ffr8bJZD%2FXMM%3D&x-oss-access-key-id=STS.NT3XsrXYXBvLoe2rkvBTyiSnD&x-oss-expires=1685966251&x-oss-process=image%2Fresize%2Cw_500&x-oss-signature=XimW6haBxYktKg4cstMfpd%2F2LSoMibj6A%2B7ZqBJcSbQ%3D&x-oss-signature-version=OSS2',
          ),
          'story_file_list' => 
          array (
            'title' => '故事文件列表',
            'description' => '故事文件列表',
            'type' => 'array',
            'items' => 
            array (
              'description' => '文件信息',
              '$ref' => '#/components/schemas/File',
            ),
          ),
          'custom_labels' => 
          array (
            'title' => '自定义标签',
            'description' => '自定义标签。
用户根据自身业务标记相关的键值对，可用于 FindStories 检索。',
            'type' => 'object',
            'additionalProperties' => 
            array (
              'description' => '自定义标签',
              'type' => 'any',
              'example' => 'value',
            ),
          ),
        ),
      ),
      'SystemTag' => 
      array (
        'title' => '标签详细信息。仅开启增值服务图片处理功能有效。',
        'description' => '系统AI处理标签。仅当开启增值服务图片处理功能有效。',
        'type' => 'object',
        'properties' => 
        array (
          'confidence' => 
          array (
            'title' => '标签置信度，取值范围为 0（表示置信度最低）~1（表示置信度最高）。',
            'description' => '标签置信度，取值范围为 0（表示置信度最低）~1（表示置信度最高）。',
            'type' => 'number',
            'format' => 'float',
            'example' => '0.98',
          ),
          'parent_name' => 
          array (
            'title' => '标签父标签。',
            'description' => '标签的父标签名称。',
            'type' => 'string',
            'example' => 'sport',
          ),
          'name' => 
          array (
            'title' => '标签名。',
            'description' => '标签名称。',
            'type' => 'string',
            'example' => 'basketball',
          ),
          'tag_level' => 
          array (
            'title' => '标签层级，取之范围大于等于 1。',
            'description' => '标签层级，取值范围大于等于 1。',
            'type' => 'integer',
            'format' => 'int32',
            'example' => '3',
          ),
          'centric_score' => 
          array (
            'title' => '标签的中心值分数，指该标签在图片中是否为主体，取值范围为 0~1。',
            'description' => '标签的中心值分数，指该标签在图片中是否为主体，取值范围为 0（主体比重最小）~1（主体比重最大）。',
            'type' => 'number',
            'format' => 'float',
            'example' => '0.877',
          ),
        ),
      ),
      'TimeRange' => 
      array (
        'title' => '时间范围',
        'type' => 'object',
        'properties' => 
        array (
          'start' => 
          array (
            'title' => '起始时间。格式 RFC3339。',
            'type' => 'string',
          ),
          'end' => 
          array (
            'title' => '结束时间。格式 RFC3339。',
            'type' => 'string',
          ),
        ),
      ),
      'Token' => 
      array (
        'title' => 'A short description of struct',
        'description' => '认证成功后返回的对象，包含access_token和refresh_token还有基础用户信息',
        'type' => 'object',
        'properties' => 
        array (
          'access_token' => 
          array (
            'title' => '访问凭证',
            'description' => '访问凭证',
            'type' => 'string',
            'example' => 'eyJhbGciOiJSUzI1NiIsInR5cCI6IkpXVCJ9.eyJ1c2VySWQiOiJjOWI3YTVhYTA0ZDE0YWUzODY3ZmRjODg2ZmEwMWRhNCIsImN1c3RvbUpzb24iOiJ7XCJjbGllbnRJZFwiOlwiMjVkelgzdmJZcWt0Vnh5WFwiLFwiZG9tYWluSWRcIjpcImJqMjlcIixcInNjb3BlXCI6W1wiRFJJVkUuQUxMXCIsXCJTSEFSRS5BTExcIixcIkZJTEUuQUxMXCIsXCJVU0VSLkFMTFwiLFwiVklFVy5BTExcIixcIlNUT1JBR0UuQUxMXCIsXCJTVE9SQUdFRklMRS5MSVNUXCIsXCJCQVRDSFwiLFwiT0FVVEguQUxMXCIsXCJJTUFHRS5BTExcIixcIklOVklURS5BTExcIixcIkFDQ09VTlQuQUxMXCJdLFwicm9sZVwiOlwidXNlclwiLFwicmVmXCI6XCJodHRwczovL3d3dy5hbGl5dW5kcml2ZS5jb20vXCIsXCJkZXZpY2VfaWRcIjpcImIyODIwNWU1YzU5NzRjY2JiODI3MDNiNjhkYjhjNDUxXCJ9IiwiZXhwIjoxNjQ4NjE0NDkzLCJpYXQiOjE2NDg2MDcyMzN9.d3HVLvv_LFw2QhPrhvjH_kICWQJX9sKKt7NjQEqI_xE2JO_b7D8rPsFTZz93PLvZ7MhCmudTjGImUpd-ehFnI4Go-1S7BGaKaHFILvP-sWy18Wpikowjxx9mSbzBM_cO6D1LI-kyYhXKWHgVdADfVIPniTDA7-ffhUpi7cAebEs',
          ),
          'refresh_token' => 
          array (
            'title' => '刷新凭证',
            'description' => '刷新凭证',
            'type' => 'string',
            'example' => '060e78d36afb4879b51e4264e9541c16',
          ),
          'expires_in' => 
          array (
            'title' => '凭证有效期',
            'description' => '凭证有效期',
            'type' => 'integer',
            'format' => 'int64',
            'example' => '3600',
          ),
          'token_type' => 
          array (
            'title' => '凭证类型',
            'description' => '凭证类型',
            'type' => 'string',
            'enumValueTitles' => 
            array (
              'Bearer' => 'Bearer',
            ),
            'example' => 'Bearer',
          ),
          'user_id' => 
          array (
            'title' => '用户ID',
            'description' => '用户ID',
            'type' => 'string',
            'example' => 'DING-xxxxx',
          ),
          'user_name' => 
          array (
            'title' => '用户名',
            'description' => '用户名',
            'type' => 'string',
            'example' => 'pdsuser',
          ),
          'avatar' => 
          array (
            'title' => '用户头像',
            'description' => '用户头像',
            'type' => 'string',
            'example' => 'aliyunpds.com/a.jpg',
          ),
          'nick_name' => 
          array (
            'title' => '用户昵称',
            'description' => '用户昵称',
            'type' => 'string',
            'example' => 'pdsuser',
          ),
          'default_drive_id' => 
          array (
            'title' => '用户默认空间ID',
            'description' => '用户默认空间ID',
            'type' => 'string',
            'example' => '1',
          ),
          'role' => 
          array (
            'title' => '用户角色',
            'description' => '用户角色',
            'type' => 'string',
            'example' => 'admin',
          ),
          'status' => 
          array (
            'title' => '用户状态',
            'description' => '用户状态',
            'type' => 'string',
            'example' => 'enabled',
          ),
          'expire_time' => 
          array (
            'title' => '凭证过期时间',
            'description' => '凭证过期时间',
            'type' => 'string',
            'example' => '2019-09-01T06:57:48.813Z',
          ),
          'is_first_login' => 
          array (
            'title' => '是否首次登录',
            'description' => '是否首次登录',
            'type' => 'boolean',
            'example' => 'false',
          ),
          'device_id' => 
          array (
            'title' => '登录设备ID',
            'description' => '通过oauth device flow绑定的设备id',
            'type' => 'string',
            'example' => '8574ecc3d4904dc095cc49202e74db94',
          ),
          'device_name' => 
          array (
            'title' => '登录设备名称',
            'description' => '通过oauth device flow绑定的设备名',
            'type' => 'string',
            'example' => '4683C25F',
          ),
          'domain_id' => 
          array (
            'title' => '域ID',
            'description' => '域ID',
            'type' => 'string',
            'example' => 'bj1',
          ),
        ),
      ),
      'UncompressConfigResponse' => 
      array (
        'title' => 'UncompressConfigResponse',
        'type' => 'object',
        'properties' => 
        array (
          'enabled' => 
          array (
            'title' => 'enabled',
            'type' => 'boolean',
          ),
          'version' => 
          array (
            'title' => 'version',
            'type' => 'string',
          ),
        ),
      ),
      'UncompressedFileInfo' => 
      array (
        'title' => 'A short description of struct',
        'description' => '解压文件信息',
        'type' => 'object',
        'properties' => 
        array (
          'drive_id' => 
          array (
            'title' => '网盘id',
            'type' => 'string',
          ),
          'file_id' => 
          array (
            'title' => '文件id',
            'type' => 'string',
          ),
          'is_folder' => 
          array (
            'title' => '是否为文件夹',
            'type' => 'boolean',
          ),
          'name' => 
          array (
            'title' => '文件名',
            'type' => 'string',
          ),
          'size' => 
          array (
            'title' => '文件大小',
            'type' => 'integer',
            'format' => 'int64',
          ),
          'updated_at' => 
          array (
            'title' => '更新时间',
            'type' => 'integer',
            'format' => 'int64',
          ),
          'items' => 
          array (
            'title' => '子文件',
            'type' => 'array',
            'items' => 
            array (
              '$ref' => '#/components/schemas/UncompressedFileInfo',
            ),
          ),
        ),
      ),
      'UploadFormInfo' => 
      array (
        'title' => 'A short description of struct',
        'description' => '表单上传信息',
        'type' => 'object',
        'properties' => 
        array (
          'bucket_name' => 
          array (
            'title' => 'bucket name',
            'type' => 'string',
          ),
          'oss_end_point' => 
          array (
            'title' => 'oss 地址',
            'type' => 'string',
          ),
          'object_key' => 
          array (
            'title' => 'oss object key',
            'type' => 'string',
          ),
          'oss_access_key_id' => 
          array (
            'title' => '上传的 access id',
            'type' => 'string',
          ),
          'oss_security_token' => 
          array (
            'title' => '上传的 sts token',
            'type' => 'string',
          ),
          'policy' => 
          array (
            'title' => '上传策略',
            'type' => 'string',
          ),
          'signature' => 
          array (
            'title' => '上传签名',
            'type' => 'string',
          ),
          'endpoint' => 
          array (
            'title' => '数据存储地址',
            'type' => 'string',
          ),
          'form_data' => 
          array (
            'title' => '表单上传信息',
            'type' => 'object',
            'additionalProperties' => 
            array (
              'type' => 'string',
            ),
          ),
        ),
      ),
      'UploadPartInfo' => 
      array (
        'title' => '分段信息',
        'description' => '分段信息',
        'type' => 'object',
        'properties' => 
        array (
          'part_number' => 
          array (
            'title' => '段编号',
            'description' => '段编号',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'example' => '1',
          ),
          'part_size' => 
          array (
            'title' => '分段大小',
            'description' => '此字段已废弃，请勿使用。',
            'type' => 'integer',
            'format' => 'int64',
            'example' => '1024',
          ),
          'upload_url' => 
          array (
            'title' => '上传地址',
            'description' => '上传地址，默认有效时间15分钟，如果链接超时，需要重新调用GetUploadUrl进行获取',
            'type' => 'string',
            'required' => true,
            'example' => 'https://data.aliyunpds.com/xxx/xxx?Expires=xxx&OSSAccessKeyId=xxx&Signature=xxx&partNumber=1&uploadId=0CC175B9C0F1B6A831C399E269772661',
          ),
          'internal_upload_url' => 
          array (
            'title' => '内网上传地址',
            'description' => '内网上传地址，用于vpc网络内部访问',
            'type' => 'string',
            'example' => 'https://data-vpc.aliyunpds.com/xxx/xxx?Expires=xxx&OSSAccessKeyId=xxx&Signature=xxx&partNumber=1&uploadId=0CC175B9C0F1B6A831C399E269772661',
          ),
          'etag' => 
          array (
            'title' => 'etag',
            'description' => '此字段已废弃，请勿使用。',
            'type' => 'string',
            'example' => '"0CC175B9C0F1B6A831C399E269772661"',
          ),
          'parallel_sha1_ctx' => 
          array (
            'title' => '上一个分段的sha1上下文',
            'description' => '上一个分段的sha1上下文，该字段只在多分片并发上传的模式下有效',
            'type' => 'object',
            'properties' => 
            array (
              'h' => 
              array (
                'title' => '上一个数据块SHA1的第1-5个32位变量',
                'description' => '上一个数据块SHA1的第1-5个32位变量，该字段只在多分片并发上传的模式下有效',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'integer',
                  'format' => 'int64',
                ),
              ),
              'part_offset' => 
              array (
                'title' => '到上一个数据块为止的总长度，字节，需要为64的倍数',
                'description' => '到上一个数据块为止的总长度，字节，需要为64的倍数，该字段只在多分片并发上传的模式下有效',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '10240',
              ),
            ),
          ),
          'parallel_sha256_ctx' => 
          array (
            'title' => '上一个分段的sha256上下文',
            'description' => '上一个分段的sha256上下文',
            'type' => 'object',
            'properties' => 
            array (
              'h' => 
              array (
                'title' => '上一个数据块SHA256的第1-8个32位变量',
                'description' => '上一个数据块SHA256的第1-8个32位变量',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'integer',
                  'format' => 'int64',
                ),
              ),
              'part_offset' => 
              array (
                'title' => '到上一个数据块为止的总长度，字节，需要为64的倍数',
                'description' => '到上一个数据块为止的总长度，字节，需要为64的倍数',
                'type' => 'integer',
                'format' => 'int64',
              ),
            ),
          ),
        ),
      ),
      'User' => 
      array (
        'title' => '用户',
        'description' => '用户',
        'type' => 'object',
        'properties' => 
        array (
          'domain_id' => 
          array (
            'title' => '域id',
            'description' => '域id',
            'type' => 'string',
            'example' => 'bj1',
          ),
          'user_id' => 
          array (
            'title' => '用户id',
            'description' => '用户id',
            'type' => 'string',
            'example' => 'c9b7a5aa04d14ae3867fdc886fa01da4',
          ),
          'avatar' => 
          array (
            'title' => '头像',
            'description' => '头像',
            'type' => 'string',
            'example' => 'http://aa.com/1.jpg',
          ),
          'created_at' => 
          array (
            'title' => '创建时间',
            'description' => '创建时间，格林威治时间1970年01月01日00时00分00秒起至现在的毫秒数',
            'type' => 'integer',
            'format' => 'int64',
            'example' => '1639762579768',
          ),
          'updated_at' => 
          array (
            'title' => '修改时间',
            'description' => '修改时间，格林威治时间1970年01月01日00时00分00秒起至现在的毫秒数',
            'type' => 'integer',
            'format' => 'int64',
            'example' => '1639762579768',
          ),
          'email' => 
          array (
            'title' => '邮箱',
            'description' => '邮箱',
            'type' => 'string',
            'example' => 'a@aliyunpds.com',
          ),
          'nick_name' => 
          array (
            'title' => '昵称',
            'description' => '昵称',
            'type' => 'string',
            'example' => '001',
          ),
          'phone' => 
          array (
            'title' => '手机号',
            'description' => '手机号',
            'type' => 'string',
            'example' => '13900001111',
          ),
          'role' => 
          array (
            'title' => '角色',
            'description' => '角色

- superadmin（超级管理员）

- admin（管理员）

- user（普通用户）',
            'type' => 'string',
            'enumValueTitles' => 
            array (
              'superadmin' => '超级管理员',
              'admin' => '管理员',
              'user' => '普通用户',
            ),
            'example' => 'user',
          ),
          'status' => 
          array (
            'title' => '状态',
            'description' => '状态

- disabled（禁止）

- enabled（使能）',
            'type' => 'string',
            'enumValueTitles' => 
            array (
              'disabled' => '禁止',
              'enabled' => '使能',
            ),
            'example' => 'enabled',
          ),
          'user_name' => 
          array (
            'title' => '用户名',
            'description' => '用户名',
            'type' => 'string',
            'example' => 'pds',
          ),
          'description' => 
          array (
            'title' => '描述',
            'description' => '描述',
            'type' => 'string',
            'example' => 'vipuser',
          ),
          'default_drive_id' => 
          array (
            'title' => '缺省空间id',
            'description' => '缺省空间id',
            'type' => 'string',
            'example' => '1',
          ),
          'user_data' => 
          array (
            'title' => '用户自定义数据',
            'description' => '用户自定义数据',
            'type' => 'object',
            'additionalProperties' => 
            array (
              'type' => 'string',
            ),
          ),
          'creator' => 
          array (
            'title' => '创建者',
            'description' => '创建者',
            'type' => 'string',
            'example' => 'user1',
          ),
        ),
      ),
      'UserExtraItem' => 
      array (
        'title' => 'A short description of struct',
        'type' => 'object',
        'properties' => 
        array (
          'domain_id' => 
          array (
            'title' => 'Domain ID',
            'type' => 'string',
            'example' => 'hz999',
          ),
          'user_id' => 
          array (
            'title' => '用户 ID',
            'type' => 'string',
            'example' => 'ccpuserid',
          ),
          'avatar' => 
          array (
            'title' => '头像',
            'type' => 'string',
            'example' => 'http://a.b.c/ccp.jpg',
          ),
          'created_at' => 
          array (
            'title' => '用户创建时间',
            'type' => 'string',
            'example' => '1567407718386',
          ),
          'updated_at' => 
          array (
            'title' => '用户修改时间',
            'type' => 'string',
            'example' => '1567407718386',
          ),
          'email' => 
          array (
            'title' => '邮箱',
            'type' => 'string',
            'example' => '123@ccp.com',
          ),
          'nick_name' => 
          array (
            'title' => '昵称',
            'type' => 'string',
            'example' => 'abc',
          ),
          'phone' => 
          array (
            'title' => '电话',
            'type' => 'string',
            'example' => '13700000000',
          ),
          'phone_region' => 
          array (
            'title' => '国家编码',
            'type' => 'string',
          ),
          'role' => 
          array (
            'title' => '角色',
            'type' => 'string',
            'example' => 'user',
          ),
          'status' => 
          array (
            'title' => '用户状态',
            'type' => 'string',
            'example' => 'enabled',
          ),
          'user_name' => 
          array (
            'title' => '用户名称',
            'type' => 'string',
            'example' => 'name',
          ),
          'description' => 
          array (
            'title' => '用户备注信息',
            'type' => 'string',
            'example' => 'ccp team user',
          ),
          'default_drive_id' => 
          array (
            'title' => '默认 Drive ID',
            'type' => 'string',
            'example' => '123',
          ),
          'user_data' => 
          array (
            'title' => '用户自定义数据，格式为json，可用于配置项、少量临时数据等存储，不超过1K',
            'type' => 'object',
            'additionalProperties' => 
            array (
              'type' => 'any',
            ),
          ),
          'deny_change_password_by_self' => 
          array (
            'title' => '禁止用户自行修改密码',
            'type' => 'boolean',
          ),
          'need_change_password_next_login' => 
          array (
            'title' => '下次登录强制修改密码',
            'type' => 'boolean',
          ),
          'creator' => 
          array (
            'title' => 'creator',
            'type' => 'string',
            'example' => 'system',
          ),
          'expired_at' => 
          array (
            'title' => '用户过期时间',
            'type' => 'integer',
            'format' => 'int64',
            'example' => '0',
          ),
          'permission' => 
          array (
            'title' => 'permission',
            'type' => 'object',
            'additionalProperties' => 
            array (
              '$ref' => '#/components/schemas/IDPermission',
            ),
          ),
          'is_sync' => 
          array (
            'title' => 'is_sync',
            'type' => 'boolean',
          ),
          'default_location' => 
          array (
            'title' => 'default_location',
            'type' => 'string',
          ),
          'last_login_time' => 
          array (
            'title' => 'last_login_time',
            'type' => 'integer',
            'format' => 'int64',
          ),
          'path_status' => 
          array (
            'title' => 'path 开启状态',
            'type' => 'string',
          ),
          'default_drive' => 
          array (
            '$ref' => '#/components/schemas/BaseDriveResponse',
          ),
          'parent_group' => 
          array (
            'title' => 'parent_group',
            'type' => 'array',
            'items' => 
            array (
              '$ref' => '#/components/schemas/BaseDriveResponse',
            ),
          ),
          'account' => 
          array (
            'title' => 'account',
            'type' => 'array',
            'items' => 
            array (
              '$ref' => '#/components/schemas/AccountLinkInfo',
            ),
          ),
        ),
      ),
      'UserLogDetail' => 
      array (
        'title' => '用户日志详情',
        'description' => '用户日志详情',
        'type' => 'object',
        'properties' => 
        array (
          'phone' => 
          array (
            'title' => '手机号',
            'type' => 'string',
          ),
          'email' => 
          array (
            'title' => '邮箱',
            'type' => 'string',
          ),
          'name' => 
          array (
            'title' => '用户名',
            'type' => 'string',
          ),
          'role_id' => 
          array (
            'title' => '角色类型',
            'type' => 'string',
          ),
          'expired_at' => 
          array (
            'title' => '过期时间',
            'type' => 'integer',
            'format' => 'int64',
          ),
          'update_to' => 
          array (
            'title' => '更新后的用户详情',
            'type' => 'object',
            'properties' => 
            array (
              'phone' => 
              array (
                'title' => '手机号',
                'type' => 'string',
              ),
              'email' => 
              array (
                'title' => '邮箱',
                'type' => 'string',
              ),
              'name' => 
              array (
                'title' => '用户名',
                'type' => 'string',
              ),
              'role_id' => 
              array (
                'title' => '角色类型',
                'type' => 'string',
              ),
              'expired_at' => 
              array (
                'title' => '过期时间',
                'type' => 'integer',
                'format' => 'int64',
              ),
            ),
          ),
        ),
      ),
      'UserTag' => 
      array (
        'title' => 'A short description of struct',
        'description' => '用户 tag',
        'type' => 'object',
        'properties' => 
        array (
          'key' => 
          array (
            'title' => 'key',
            'description' => 'key，不能为空，不能包含 #。单个元素中的 key 和 value 总长度不能超过 2000 字节',
            'type' => 'string',
            'required' => true,
            'example' => 'topic',
          ),
          'Value' => 
          array (
            'title' => 'value',
            'description' => 'value，不能包含 #。单个元素中的 key 和 value 总长度不能超过 2000 字节',
            'type' => 'string',
            'required' => true,
            'example' => 'travel',
          ),
        ),
      ),
      'VideoMediaAudioStream' => 
      array (
        'title' => '音频流信息。仅开启增值服务图片处理功能或视频转码功能有效。',
        'description' => '音频流信息。仅开启增值服务图片处理功能或视频转码功能有效。',
        'type' => 'object',
        'properties' => 
        array (
          'duration' => 
          array (
            'title' => '音频时长，单位为秒（s）。',
            'description' => '音频时长，单位为秒（s）。',
            'type' => 'string',
            'example' => '7704.573000',
          ),
          'bit_rate' => 
          array (
            'title' => '音频比特率，单位为比特每秒（bps）。',
            'description' => '音频比特率，单位为比特每秒（bps）。',
            'type' => 'string',
            'example' => '129280',
          ),
          'code_name' => 
          array (
            'title' => '音频编码模式。',
            'description' => '音频编码模式。',
            'type' => 'string',
            'example' => 'aac',
          ),
        ),
      ),
      'VideoMediaMetadata' => 
      array (
        'title' => '音视频信息。仅开启增值服务图片处理功能或视频转码功能有效。',
        'description' => '视频元数据',
        'type' => 'object',
        'properties' => 
        array (
          'width' => 
          array (
            'title' => '视频画面宽度，单位为像素（px）。',
            'description' => '视频画面宽度，单位为像素（px）。',
            'type' => 'integer',
            'format' => 'int64',
            'example' => '1920',
          ),
          'height' => 
          array (
            'title' => '视频画面高度，单位为像素（px）。',
            'description' => '视频画面高度，单位为像素（px）。',
            'type' => 'integer',
            'format' => 'int64',
            'example' => '1080',
          ),
          'video_media_video_stream' => 
          array (
            'title' => '视频流源信息。',
            'description' => '视频流源信息。',
            'type' => 'array',
            'items' => 
            array (
              '$ref' => '#/components/schemas/VideoMediaVideoStream',
            ),
          ),
          'video_media_audio_stream' => 
          array (
            'title' => '音频流源信息。',
            'description' => '音频流源信息。',
            'type' => 'array',
            'items' => 
            array (
              '$ref' => '#/components/schemas/VideoMediaAudioStream',
            ),
          ),
        ),
      ),
      'VideoMediaVideoStream' => 
      array (
        'title' => '视频流信息。仅开启增值服务图片处理功能或视频转码功能有效。',
        'description' => '视频流信息。仅开启增值服务图片处理功能或视频转码功能有效。',
        'type' => 'object',
        'properties' => 
        array (
          'duration' => 
          array (
            'title' => '视频流持续时长，单位为秒（s）。',
            'description' => '视频流持续时长，单位为秒（s）。',
            'type' => 'string',
            'example' => '22.88',
          ),
          'bitrate' => 
          array (
            'title' => '视频流比特率，单位为比特率每秒（bps）。',
            'description' => '视频流比特率，单位为比特率每秒（bps）。',
            'type' => 'string',
            'example' => '108420',
          ),
          'code_name' => 
          array (
            'title' => '视频编码模式。',
            'description' => '视频编码模式。',
            'type' => 'string',
            'example' => 'h264',
          ),
          'frame_count' => 
          array (
            'title' => '视频帧数。',
            'description' => '视频帧数。',
            'type' => 'string',
            'example' => '90',
          ),
        ),
      ),
      'VideoPreviewPlayInfo' => 
      array (
        'title' => '播放信息',
        'description' => '播放信息',
        'type' => 'object',
        'properties' => 
        array (
          'category' => 
          array (
            'title' => '所属分类',
            'description' => '所属分类',
            'type' => 'string',
            'example' => 'live_transcoding',
          ),
          'meta' => 
          array (
            'title' => '视频元信息',
            'description' => '视频元信息',
            'type' => 'object',
            'properties' => 
            array (
              'duration' => 
              array (
                'title' => '视频长度',
                'description' => '视频长度',
                'type' => 'number',
                'format' => 'double',
              ),
              'width' => 
              array (
                'title' => '视频宽度',
                'description' => '视频宽度',
                'type' => 'integer',
                'format' => 'int64',
              ),
              'height' => 
              array (
                'title' => '视频高度',
                'description' => '视频高度',
                'type' => 'integer',
                'format' => 'int64',
              ),
            ),
          ),
          'live_transcoding_task_list' => 
          array (
            'title' => '播放信息',
            'description' => '播放信息',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'template_id' => 
                array (
                  'title' => '模板id',
                  'description' => '模板id',
                  'type' => 'string',
                ),
                'status' => 
                array (
                  'title' => '状态',
                  'description' => '状态。
枚举值如下：
- finished, 索引完成，可以获取到url
- running, 正在索引，请稍等片刻重试
- failed, 转码失败，请检查是否媒体文件，如果有疑问请联系客服',
                  'type' => 'string',
                ),
                'url' => 
                array (
                  'title' => '播放地址',
                  'description' => '播放地址',
                  'type' => 'string',
                ),
                'keep_original_resolution' => 
                array (
                  'title' => '是否保持原分辨率',
                  'description' => '是否保持原分辨率',
                  'type' => 'boolean',
                ),
              ),
            ),
          ),
          'offline_video_transcoding_list' => 
          array (
            'title' => '离线转码播放信息',
            'description' => '离线转码播放信息',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'template_id' => 
                array (
                  'title' => '模板 ID',
                  'description' => '模板 ID',
                  'type' => 'string',
                ),
                'status' => 
                array (
                  'title' => '任务状态',
                  'description' => '任务状态',
                  'type' => 'string',
                ),
                'keep_original_resolution' => 
                array (
                  'title' => '转码视频是否和源视频同分辨率',
                  'description' => '转码视频是否和源视频同分辨率',
                  'type' => 'boolean',
                ),
                'url' => 
                array (
                  'title' => '播放地址',
                  'description' => '播放地址',
                  'type' => 'string',
                ),
              ),
            ),
          ),
        ),
      ),
      'VideoPreviewPlayMeta' => 
      array (
        'title' => '播放元信息',
        'description' => '播放元信息',
        'type' => 'object',
        'properties' => 
        array (
          'meta' => 
          array (
            'title' => '视频元信息',
            'description' => '视频元信息',
            'type' => 'object',
            'properties' => 
            array (
              'duration' => 
              array (
                'title' => '视频长度',
                'description' => '视频长度',
                'type' => 'number',
                'format' => 'double',
                'example' => '10',
              ),
              'width' => 
              array (
                'title' => '视频宽度',
                'description' => '视频宽度',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '1280',
              ),
              'height' => 
              array (
                'title' => '视频高度',
                'description' => '视频高度',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '720',
              ),
            ),
          ),
          'live_transcoding_task_list' => 
          array (
            'title' => '边转边播任务状态',
            'description' => '边转边播任务状态',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'template_id' => 
                array (
                  'title' => '模板id',
                  'description' => '模板id',
                  'type' => 'string',
                  'example' => '264_720p',
                ),
                'status' => 
                array (
                  'title' => '状态。 枚举值如下：  finished, 索引完成，可以获取到url running, 正在索引，请稍等片刻重试 failed, 转码失败，请检查是否媒体文件，如果有疑问请联系客服',
                  'description' => '状态。
枚举值如下：
- finished, 索引完成，可以获取到url
- running, 正在索引，请稍等片刻重试
- failed, 转码失败，请检查是否媒体文件，如果有疑问请联系客服',
                  'type' => 'string',
                ),
                'keep_original_resolution' => 
                array (
                  'title' => '是否保持原分辨率',
                  'description' => '是否保持原分辨率',
                  'type' => 'boolean',
                ),
              ),
            ),
          ),
          'category' => 
          array (
            'title' => '所属分类',
            'description' => '所属分类',
            'type' => 'string',
            'example' => 'live_transcoding',
          ),
        ),
      ),
      'View' => 
      array (
        'title' => 'view 详情',
        'type' => 'object',
        'properties' => 
        array (
          'view_id' => 
          array (
            'title' => 'view id',
            'type' => 'string',
          ),
          'category' => 
          array (
            'title' => '类型',
            'type' => 'string',
          ),
          'owner' => 
          array (
            'title' => '所有者',
            'type' => 'string',
          ),
          'name' => 
          array (
            'title' => '名称',
            'type' => 'string',
          ),
          'description' => 
          array (
            'title' => '描述',
            'type' => 'string',
          ),
          'created_at' => 
          array (
            'title' => '创建时间',
            'type' => 'string',
          ),
          'updated_at' => 
          array (
            'title' => '更新时间',
            'type' => 'string',
          ),
          'file_count' => 
          array (
            'title' => '所添加文件数量',
            'type' => 'integer',
            'format' => 'int64',
          ),
          'ex_fields_info' => 
          array (
            'title' => '额外属性',
            'type' => 'object',
          ),
        ),
      ),
      'ViewFile' => 
      array (
        'title' => 'view file 详情',
        'type' => 'object',
        'properties' => 
        array (
          'domain_id' => 
          array (
            'title' => '域id',
            'type' => 'string',
          ),
          'drive_id' => 
          array (
            'title' => '空间id',
            'type' => 'string',
          ),
          'file_id' => 
          array (
            'title' => '文件id',
            'type' => 'string',
          ),
          'name' => 
          array (
            'title' => '名称',
            'type' => 'string',
          ),
          'type' => 
          array (
            'title' => '类型',
            'type' => 'string',
          ),
          'content_type' => 
          array (
            'title' => '内容类型',
            'type' => 'string',
          ),
          'created_at' => 
          array (
            'title' => '创建时间',
            'type' => 'string',
          ),
          'updated_at' => 
          array (
            'title' => '修改时间',
            'type' => 'string',
          ),
          'description' => 
          array (
            'title' => '描述',
            'type' => 'string',
          ),
          'trashed_at' => 
          array (
            'title' => '放入回收站时间',
            'type' => 'string',
          ),
          'file_extension' => 
          array (
            'title' => '文件扩展',
            'type' => 'string',
          ),
          'hidden' => 
          array (
            'title' => '是否隐藏',
            'type' => 'boolean',
          ),
          'size' => 
          array (
            'title' => '大小',
            'type' => 'integer',
            'format' => 'int64',
          ),
          'starred' => 
          array (
            'title' => '是否收藏',
            'type' => 'boolean',
          ),
          'status' => 
          array (
            'title' => '状态',
            'type' => 'string',
          ),
          'labels' => 
          array (
            'title' => '标签',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'string',
            ),
          ),
          'upload_id' => 
          array (
            'title' => '上传id',
            'type' => 'string',
          ),
          'parent_file_id' => 
          array (
            'title' => '父文件夹id',
            'type' => 'string',
          ),
          'crc64_hash' => 
          array (
            'title' => 'crc64',
            'type' => 'string',
          ),
          'content_hash' => 
          array (
            'title' => '内容hash',
            'type' => 'string',
          ),
          'content_hash_name' => 
          array (
            'title' => '内容hash算法名',
            'type' => 'string',
          ),
          'download_url' => 
          array (
            'title' => '下载链接',
            'type' => 'string',
          ),
          'thumbnail' => 
          array (
            'title' => '缩略图地址',
            'type' => 'string',
          ),
          'category' => 
          array (
            'title' => '分类',
            'type' => 'string',
          ),
          'local_created_at' => 
          array (
            'title' => '文件本地创建时间',
            'type' => 'string',
          ),
          'local_modified_at' => 
          array (
            'title' => '文件本地修改时间',
            'type' => 'string',
          ),
          'revision_id' => 
          array (
            'title' => '版本id',
            'type' => 'string',
          ),
          'investigation_info' => 
          array (
            'title' => '审核信息',
            'type' => 'object',
            'properties' => 
            array (
              'status' => 
              array (
                'title' => '审核状态',
                'type' => 'integer',
                'format' => 'int64',
              ),
              'suggestion' => 
              array (
                'title' => '审核建议执行的操作',
                'type' => 'string',
              ),
            ),
          ),
          'thumbnail_urls' => 
          array (
            'title' => '返回的缩略图信息',
            'type' => 'object',
            'additionalProperties' => 
            array (
              'type' => 'string',
              'required' => false,
            ),
          ),
          'view_id' => 
          array (
            'title' => 'view id',
            'type' => 'string',
          ),
          'joined_at' => 
          array (
            'title' => '加入 view 时间',
            'type' => 'integer',
            'format' => 'int64',
          ),
          'file_revision_id' => 
          array (
            'title' => '文件版本号',
            'type' => 'string',
          ),
          'fields' => 
          array (
            'title' => 'view 相关属性',
            'type' => 'object',
          ),
        ),
      ),
      'WatermarkEnableConfig' => 
      array (
        'title' => 'WatermarkEnableConfig',
        'type' => 'object',
        'properties' => 
        array (
          'enable_doc_preview' => 
          array (
            'title' => 'enable_doc_preview',
            'type' => 'boolean',
          ),
          'display_access_user_name' => 
          array (
            'title' => 'display_access_user_name',
            'type' => 'boolean',
          ),
          'display_shareLink_creator_name' => 
          array (
            'title' => 'display_shareLink_creator_name',
            'type' => 'boolean',
          ),
          'display_custom_text' => 
          array (
            'title' => 'display_custom_text',
            'type' => 'string',
          ),
        ),
      ),
      'WxTrustedDomainConfig' => 
      array (
        'title' => 'WxTrustedDomainConfig',
        'type' => 'object',
        'properties' => 
        array (
          'name' => 
          array (
            'title' => 'name',
            'type' => 'string',
          ),
          'content' => 
          array (
            'title' => 'content',
            'type' => 'string',
          ),
          'show' => 
          array (
            'title' => 'show',
            'type' => 'boolean',
          ),
        ),
      ),
    ),
  ),
  'apis' => 
  array (
    'CreateDomain' => 
    array (
      'summary' => '创建 domain。',
      'path' => '/v2/domain/create',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'tags' => 
      array (
        0 => 'admin',
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
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '请求体参数。',
            'type' => 'object',
            'properties' => 
            array (
              'parent_domain_id' => 
              array (
                'description' => '父 domain id
如果需要创建子 domain，可以设置该值，一般情况下不需要创建。
如果需要针对 PDS 做二次运营，可以联系 PDS 官网客服进行咨询。',
                'type' => 'string',
                'required' => false,
                'example' => 'bj1',
              ),
              'domain_name' => 
              array (
                'description' => 'domain 名称',
                'type' => 'string',
                'required' => true,
                'example' => '你好企业网盘',
              ),
              'description' => 
              array (
                'description' => 'domain 描述',
                'type' => 'string',
                'required' => false,
                'example' => '你好企业网盘开发环境',
              ),
              'init_drive_enable' => 
              array (
                'description' => '是否开通默认网盘。为true则所有用户在第一次登录后都默认分配一个网盘。默认false',
                'type' => 'boolean',
                'required' => false,
                'example' => 'true',
              ),
              'init_drive_size' => 
              array (
                'description' => 'init\\_drive\\_enable 为true时必选。 创建用户时，默认网盘的大小，单位：Bytes。
默认为 0，此时创建的 drive 大小为0，不可以上传文件，如果需要初始化 drive， 请设置该值。
-1则表示不限大小。',
                'type' => 'integer',
                'format' => 'int64',
                'required' => false,
                'example' => '1073741824',
              ),
              'user_count_quota' => 
              array (
                'description' => '用户数配额，表示该 domain 允许创建的用户数量，为0表示不限制',
                'type' => 'integer',
                'format' => 'int64',
                'required' => false,
                'example' => '50',
              ),
              'size_quota' => 
              array (
                'description' => '容量配额，表示 domain 下所有 drive 的总quota 大小，0 表示不限制',
                'type' => 'integer',
                'format' => 'int64',
                'required' => false,
                'example' => '1099511627776',
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
            'description' => '创建的域信息',
            '$ref' => '#/components/schemas/Domain',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"parent_domain_id\\": \\"\\",\\n  \\"domain_id\\": \\"\\",\\n  \\"domain_name\\": \\"\\",\\n  \\"description\\": \\"\\",\\n  \\"init_drive_enable\\": true,\\n  \\"init_drive_size\\": 0,\\n  \\"updated_at\\": \\"\\",\\n  \\"created_at\\": \\"\\",\\n  \\"size_quota\\": 0,\\n  \\"size_quota_used\\": 0,\\n  \\"user_count_quota\\": 0,\\n  \\"status\\": 0,\\n  \\"used_size\\": 0,\\n  \\"published_app_access_strategy\\": {\\n    \\"effect\\": \\"\\",\\n    \\"except_app_id_list\\": [\\n      \\"\\"\\n    ]\\n  },\\n  \\"watermark_config\\": {\\n    \\"enable_doc_preview\\": true,\\n    \\"display_access_user_name\\": true,\\n    \\"display_shareLink_creator_name\\": true,\\n    \\"display_custom_text\\": \\"\\"\\n  },\\n  \\"auth_config\\": {\\n    \\"key\\": {\\n      \\"enable\\": true,\\n      \\"app_id\\": \\"\\",\\n      \\"app_secret\\": \\"\\",\\n      \\"endpoint\\": \\"\\",\\n      \\"enterprise_id\\": \\"\\",\\n      \\"white_list_enable\\": true,\\n      \\"ldap_config\\": {\\n        \\"version\\": \\"\\",\\n        \\"host\\": \\"\\",\\n        \\"port\\": 0,\\n        \\"uid\\": \\"\\",\\n        \\"admin_dn\\": \\"\\",\\n        \\"global_uid\\": \\"\\",\\n        \\"admin_password\\": \\"\\",\\n        \\"base_dn\\": \\"\\",\\n        \\"display_name_key\\": \\"\\",\\n        \\"type\\": \\"\\",\\n        \\"sync_config\\": {\\n          \\"enabled\\": true,\\n          \\"group_object_class\\": \\"\\",\\n          \\"group_filter\\": \\"\\",\\n          \\"user_object_class\\": \\"\\",\\n          \\"user_filter\\": \\"\\",\\n          \\"cron\\": \\"\\"\\n        }\\n      },\\n      \\"ding_sync_config\\": {\\n        \\"enabled\\": true,\\n        \\"cron\\": \\"\\"\\n      },\\n      \\"we_chat_sync_config\\": {\\n        \\"enabled\\": true,\\n        \\"tag_id\\": \\"\\",\\n        \\"cron\\": \\"\\"\\n      }\\n    }\\n  },\\n  \\"sharable\\": true,\\n  \\"ali_owner_id\\": \\"\\",\\n  \\"archive_files_config\\": {\\n    \\"enabled\\": true,\\n    \\"version\\": \\"\\"\\n  },\\n  \\"uncompress_config\\": {\\n    \\"enabled\\": true,\\n    \\"version\\": \\"\\"\\n  },\\n  \\"multi_revision_config\\": {\\n    \\"revision_merge_enabled\\": true,\\n    \\"revision_count\\": 0,\\n    \\"revision_recycle_period\\": 0\\n  },\\n  \\"app_config\\": {\\n    \\"same_name_file_upload_mode\\": \\"\\",\\n    \\"web_client_download_mode\\": \\"\\",\\n    \\"single_file_upload_size_limit\\": 0,\\n    \\"allow_upload_file_category_list\\": [\\n      \\"\\"\\n    ],\\n    \\"allow_upload_custom_file_ext_list\\": [\\n      \\"\\"\\n    ]\\n  },\\n  \\"recycle_bin_config\\": {\\n    \\"auto_delete_enabled\\": true,\\n    \\"auto_delete_keep_second\\": 0,\\n    \\"delete_trash_normal_file_disabled\\": true\\n  },\\n  \\"office_preview_config\\": {\\n    \\"enabled\\": true\\n  },\\n  \\"office_edit_config\\": {\\n    \\"enabled\\": true\\n  },\\n  \\"share_link_detail\\": {\\n    \\"enable_office_editable\\": true\\n  },\\n  \\"endpoints\\": {\\n    \\"api_endpoint\\": \\"\\",\\n    \\"api_vpc_endpoint\\": \\"\\",\\n    \\"app_endpoint\\": \\"\\",\\n    \\"auth_endpoint\\": \\"\\",\\n    \\"mgmt_endpoint\\": \\"\\",\\n    \\"web_office_endpoint_list\\": \\"\\",\\n    \\"store_list\\": [\\n      {\\n        \\"store_id\\": \\"\\",\\n        \\"type\\": \\"\\",\\n        \\"bucket\\": \\"\\",\\n        \\"base_path\\": \\"\\",\\n        \\"role_arn\\": \\"\\",\\n        \\"ownership\\": \\"\\",\\n        \\"location\\": \\"\\",\\n        \\"public_endpoint\\": \\"\\",\\n        \\"vpc_endpoint\\": \\"\\",\\n        \\"acc_endpoint\\": \\"\\",\\n        \\"acc_oversea_endpoint\\": \\"\\",\\n        \\"cdn_endpoint\\": \\"\\",\\n        \\"endpoint\\": \\"\\"\\n      }\\n    ],\\n    \\"va_store_list\\": [\\n      {\\n        \\"store_id\\": \\"\\",\\n        \\"type\\": \\"\\",\\n        \\"bucket\\": \\"\\",\\n        \\"base_path\\": \\"\\",\\n        \\"role_arn\\": \\"\\",\\n        \\"ownership\\": \\"\\",\\n        \\"location\\": \\"\\",\\n        \\"public_endpoint\\": \\"\\",\\n        \\"vpc_endpoint\\": \\"\\",\\n        \\"acc_endpoint\\": \\"\\",\\n        \\"acc_oversea_endpoint\\": \\"\\",\\n        \\"cdn_endpoint\\": \\"\\",\\n        \\"endpoint\\": \\"\\"\\n      }\\n    ]\\n  },\\n  \\"data_hash_name\\": \\"\\"\\n}","type":"json"}]',
      'title' => '创建Domain',
      'description' => '如果您需要基于 PDS 做二次运营，并想针对您的租户做一些细粒度控制，此时可以使用 PDS 的父子 Domain 功能。
详情：请联系官方钉钉群进行咨询：23146118',
    ),
    'GetDomain' => 
    array (
      'summary' => '获取 domain',
      'path' => '/v2/domain/get',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'tags' => 
      array (
        0 => 'admin',
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
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '请求参数。',
            'type' => 'object',
            'properties' => 
            array (
              'domain_id' => 
              array (
                'description' => 'domain id',
                'type' => 'string',
                'required' => true,
                'example' => 'bj1',
              ),
              'get_quota_used' => 
              array (
                'description' => '是否需要获取domain的已用quota，默认为false。当domain容量配额size_quota大于0时，传true可获取domain已用容量配额。',
                'type' => 'boolean',
                'required' => false,
                'example' => 'true',
              ),
              'fields' => 
              array (
                'description' => '需要获取的 domain 属性字段，英文逗号分隔，为空代表不获取任何枚举字段',
                'type' => 'string',
                'required' => false,
                'example' => 'file_category',
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
            'description' => 'domain 信息',
            '$ref' => '#/components/schemas/Domain',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"parent_domain_id\\": \\"\\",\\n  \\"domain_id\\": \\"\\",\\n  \\"domain_name\\": \\"\\",\\n  \\"description\\": \\"\\",\\n  \\"init_drive_enable\\": true,\\n  \\"init_drive_size\\": 0,\\n  \\"updated_at\\": \\"\\",\\n  \\"created_at\\": \\"\\",\\n  \\"size_quota\\": 0,\\n  \\"size_quota_used\\": 0,\\n  \\"user_count_quota\\": 0,\\n  \\"status\\": 0,\\n  \\"used_size\\": 0,\\n  \\"published_app_access_strategy\\": {\\n    \\"effect\\": \\"\\",\\n    \\"except_app_id_list\\": [\\n      \\"\\"\\n    ]\\n  },\\n  \\"watermark_config\\": {\\n    \\"enable_doc_preview\\": true,\\n    \\"display_access_user_name\\": true,\\n    \\"display_shareLink_creator_name\\": true,\\n    \\"display_custom_text\\": \\"\\"\\n  },\\n  \\"auth_config\\": {\\n    \\"key\\": {\\n      \\"enable\\": true,\\n      \\"app_id\\": \\"\\",\\n      \\"app_secret\\": \\"\\",\\n      \\"endpoint\\": \\"\\",\\n      \\"enterprise_id\\": \\"\\",\\n      \\"white_list_enable\\": true,\\n      \\"ldap_config\\": {\\n        \\"version\\": \\"\\",\\n        \\"host\\": \\"\\",\\n        \\"port\\": 0,\\n        \\"uid\\": \\"\\",\\n        \\"admin_dn\\": \\"\\",\\n        \\"global_uid\\": \\"\\",\\n        \\"admin_password\\": \\"\\",\\n        \\"base_dn\\": \\"\\",\\n        \\"display_name_key\\": \\"\\",\\n        \\"type\\": \\"\\",\\n        \\"sync_config\\": {\\n          \\"enabled\\": true,\\n          \\"group_object_class\\": \\"\\",\\n          \\"group_filter\\": \\"\\",\\n          \\"user_object_class\\": \\"\\",\\n          \\"user_filter\\": \\"\\",\\n          \\"cron\\": \\"\\"\\n        }\\n      },\\n      \\"ding_sync_config\\": {\\n        \\"enabled\\": true,\\n        \\"cron\\": \\"\\"\\n      },\\n      \\"we_chat_sync_config\\": {\\n        \\"enabled\\": true,\\n        \\"tag_id\\": \\"\\",\\n        \\"cron\\": \\"\\"\\n      }\\n    }\\n  },\\n  \\"sharable\\": true,\\n  \\"ali_owner_id\\": \\"\\",\\n  \\"archive_files_config\\": {\\n    \\"enabled\\": true,\\n    \\"version\\": \\"\\"\\n  },\\n  \\"uncompress_config\\": {\\n    \\"enabled\\": true,\\n    \\"version\\": \\"\\"\\n  },\\n  \\"multi_revision_config\\": {\\n    \\"revision_merge_enabled\\": true,\\n    \\"revision_count\\": 0,\\n    \\"revision_recycle_period\\": 0\\n  },\\n  \\"app_config\\": {\\n    \\"same_name_file_upload_mode\\": \\"\\",\\n    \\"web_client_download_mode\\": \\"\\",\\n    \\"single_file_upload_size_limit\\": 0,\\n    \\"allow_upload_file_category_list\\": [\\n      \\"\\"\\n    ],\\n    \\"allow_upload_custom_file_ext_list\\": [\\n      \\"\\"\\n    ]\\n  },\\n  \\"recycle_bin_config\\": {\\n    \\"auto_delete_enabled\\": true,\\n    \\"auto_delete_keep_second\\": 0,\\n    \\"delete_trash_normal_file_disabled\\": true\\n  },\\n  \\"office_preview_config\\": {\\n    \\"enabled\\": true\\n  },\\n  \\"office_edit_config\\": {\\n    \\"enabled\\": true\\n  },\\n  \\"share_link_detail\\": {\\n    \\"enable_office_editable\\": true\\n  },\\n  \\"endpoints\\": {\\n    \\"api_endpoint\\": \\"\\",\\n    \\"api_vpc_endpoint\\": \\"\\",\\n    \\"app_endpoint\\": \\"\\",\\n    \\"auth_endpoint\\": \\"\\",\\n    \\"mgmt_endpoint\\": \\"\\",\\n    \\"web_office_endpoint_list\\": \\"\\",\\n    \\"store_list\\": [\\n      {\\n        \\"store_id\\": \\"\\",\\n        \\"type\\": \\"\\",\\n        \\"bucket\\": \\"\\",\\n        \\"base_path\\": \\"\\",\\n        \\"role_arn\\": \\"\\",\\n        \\"ownership\\": \\"\\",\\n        \\"location\\": \\"\\",\\n        \\"public_endpoint\\": \\"\\",\\n        \\"vpc_endpoint\\": \\"\\",\\n        \\"acc_endpoint\\": \\"\\",\\n        \\"acc_oversea_endpoint\\": \\"\\",\\n        \\"cdn_endpoint\\": \\"\\",\\n        \\"endpoint\\": \\"\\"\\n      }\\n    ],\\n    \\"va_store_list\\": [\\n      {\\n        \\"store_id\\": \\"\\",\\n        \\"type\\": \\"\\",\\n        \\"bucket\\": \\"\\",\\n        \\"base_path\\": \\"\\",\\n        \\"role_arn\\": \\"\\",\\n        \\"ownership\\": \\"\\",\\n        \\"location\\": \\"\\",\\n        \\"public_endpoint\\": \\"\\",\\n        \\"vpc_endpoint\\": \\"\\",\\n        \\"acc_endpoint\\": \\"\\",\\n        \\"acc_oversea_endpoint\\": \\"\\",\\n        \\"cdn_endpoint\\": \\"\\",\\n        \\"endpoint\\": \\"\\"\\n      }\\n    ]\\n  },\\n  \\"data_hash_name\\": \\"\\"\\n}","type":"json"}]',
      'title' => '获取Domain',
    ),
    'UpdateDomain' => 
    array (
      'summary' => '更新 domain。',
      'path' => '/v2/domain/update',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'tags' => 
      array (
        0 => 'admin',
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
        'operationType' => 'update',
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '请求体。',
            'type' => 'object',
            'properties' => 
            array (
              'domain_id' => 
              array (
                'description' => 'domain id',
                'type' => 'string',
                'required' => true,
                'example' => 'bj1',
              ),
              'domain_name' => 
              array (
                'description' => 'domain 名称',
                'type' => 'string',
                'required' => false,
                'example' => '你好企业网盘',
              ),
              'description' => 
              array (
                'description' => 'domain 描述',
                'type' => 'string',
                'required' => false,
                'example' => '你好企业网盘调试环境',
              ),
              'init_drive_enable' => 
              array (
                'description' => '是否开通默认网盘。为true则所有用户在第一次登录后都默认分配一个网盘。默认false',
                'type' => 'boolean',
                'required' => false,
                'example' => 'true',
              ),
              'init_drive_size' => 
              array (
                'description' => 'init\\_drive\\_enable 为true时必选。 创建用户时，默认网盘的大小，单位：Bytes。
默认为 0，此时创建的 drive 大小为0，不可以上传文件，如果需要初始化 drive， 请设置该值。
-1则表示不限大小。',
                'type' => 'integer',
                'format' => 'int64',
                'required' => false,
                'example' => '1073741824',
              ),
              'user_count_quota' => 
              array (
                'description' => 'domain 总用户数限制',
                'type' => 'integer',
                'format' => 'int64',
                'required' => false,
                'example' => '50',
              ),
              'size_quota' => 
              array (
                'description' => '容量配额，表示 domain 下所有 drive 的总quota 大小，0 表示不限制',
                'type' => 'integer',
                'format' => 'int64',
                'required' => false,
                'example' => '1099511627776',
              ),
              'published_app_access_strategy' => 
              array (
                'description' => 'App 访问策略',
                'required' => false,
                '$ref' => '#/components/schemas/AppAccessStrategy',
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
            'description' => '更新后的 domain 信息',
            '$ref' => '#/components/schemas/Domain',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"parent_domain_id\\": \\"\\",\\n  \\"domain_id\\": \\"\\",\\n  \\"domain_name\\": \\"\\",\\n  \\"description\\": \\"\\",\\n  \\"init_drive_enable\\": true,\\n  \\"init_drive_size\\": 0,\\n  \\"updated_at\\": \\"\\",\\n  \\"created_at\\": \\"\\",\\n  \\"size_quota\\": 0,\\n  \\"size_quota_used\\": 0,\\n  \\"user_count_quota\\": 0,\\n  \\"status\\": 0,\\n  \\"used_size\\": 0,\\n  \\"published_app_access_strategy\\": {\\n    \\"effect\\": \\"\\",\\n    \\"except_app_id_list\\": [\\n      \\"\\"\\n    ]\\n  },\\n  \\"watermark_config\\": {\\n    \\"enable_doc_preview\\": true,\\n    \\"display_access_user_name\\": true,\\n    \\"display_shareLink_creator_name\\": true,\\n    \\"display_custom_text\\": \\"\\"\\n  },\\n  \\"auth_config\\": {\\n    \\"key\\": {\\n      \\"enable\\": true,\\n      \\"app_id\\": \\"\\",\\n      \\"app_secret\\": \\"\\",\\n      \\"endpoint\\": \\"\\",\\n      \\"enterprise_id\\": \\"\\",\\n      \\"white_list_enable\\": true,\\n      \\"ldap_config\\": {\\n        \\"version\\": \\"\\",\\n        \\"host\\": \\"\\",\\n        \\"port\\": 0,\\n        \\"uid\\": \\"\\",\\n        \\"admin_dn\\": \\"\\",\\n        \\"global_uid\\": \\"\\",\\n        \\"admin_password\\": \\"\\",\\n        \\"base_dn\\": \\"\\",\\n        \\"display_name_key\\": \\"\\",\\n        \\"type\\": \\"\\",\\n        \\"sync_config\\": {\\n          \\"enabled\\": true,\\n          \\"group_object_class\\": \\"\\",\\n          \\"group_filter\\": \\"\\",\\n          \\"user_object_class\\": \\"\\",\\n          \\"user_filter\\": \\"\\",\\n          \\"cron\\": \\"\\"\\n        }\\n      },\\n      \\"ding_sync_config\\": {\\n        \\"enabled\\": true,\\n        \\"cron\\": \\"\\"\\n      },\\n      \\"we_chat_sync_config\\": {\\n        \\"enabled\\": true,\\n        \\"tag_id\\": \\"\\",\\n        \\"cron\\": \\"\\"\\n      }\\n    }\\n  },\\n  \\"sharable\\": true,\\n  \\"ali_owner_id\\": \\"\\",\\n  \\"archive_files_config\\": {\\n    \\"enabled\\": true,\\n    \\"version\\": \\"\\"\\n  },\\n  \\"uncompress_config\\": {\\n    \\"enabled\\": true,\\n    \\"version\\": \\"\\"\\n  },\\n  \\"multi_revision_config\\": {\\n    \\"revision_merge_enabled\\": true,\\n    \\"revision_count\\": 0,\\n    \\"revision_recycle_period\\": 0\\n  },\\n  \\"app_config\\": {\\n    \\"same_name_file_upload_mode\\": \\"\\",\\n    \\"web_client_download_mode\\": \\"\\",\\n    \\"single_file_upload_size_limit\\": 0,\\n    \\"allow_upload_file_category_list\\": [\\n      \\"\\"\\n    ],\\n    \\"allow_upload_custom_file_ext_list\\": [\\n      \\"\\"\\n    ]\\n  },\\n  \\"recycle_bin_config\\": {\\n    \\"auto_delete_enabled\\": true,\\n    \\"auto_delete_keep_second\\": 0,\\n    \\"delete_trash_normal_file_disabled\\": true\\n  },\\n  \\"office_preview_config\\": {\\n    \\"enabled\\": true\\n  },\\n  \\"office_edit_config\\": {\\n    \\"enabled\\": true\\n  },\\n  \\"share_link_detail\\": {\\n    \\"enable_office_editable\\": true\\n  },\\n  \\"endpoints\\": {\\n    \\"api_endpoint\\": \\"\\",\\n    \\"api_vpc_endpoint\\": \\"\\",\\n    \\"app_endpoint\\": \\"\\",\\n    \\"auth_endpoint\\": \\"\\",\\n    \\"mgmt_endpoint\\": \\"\\",\\n    \\"web_office_endpoint_list\\": \\"\\",\\n    \\"store_list\\": [\\n      {\\n        \\"store_id\\": \\"\\",\\n        \\"type\\": \\"\\",\\n        \\"bucket\\": \\"\\",\\n        \\"base_path\\": \\"\\",\\n        \\"role_arn\\": \\"\\",\\n        \\"ownership\\": \\"\\",\\n        \\"location\\": \\"\\",\\n        \\"public_endpoint\\": \\"\\",\\n        \\"vpc_endpoint\\": \\"\\",\\n        \\"acc_endpoint\\": \\"\\",\\n        \\"acc_oversea_endpoint\\": \\"\\",\\n        \\"cdn_endpoint\\": \\"\\",\\n        \\"endpoint\\": \\"\\"\\n      }\\n    ],\\n    \\"va_store_list\\": [\\n      {\\n        \\"store_id\\": \\"\\",\\n        \\"type\\": \\"\\",\\n        \\"bucket\\": \\"\\",\\n        \\"base_path\\": \\"\\",\\n        \\"role_arn\\": \\"\\",\\n        \\"ownership\\": \\"\\",\\n        \\"location\\": \\"\\",\\n        \\"public_endpoint\\": \\"\\",\\n        \\"vpc_endpoint\\": \\"\\",\\n        \\"acc_endpoint\\": \\"\\",\\n        \\"acc_oversea_endpoint\\": \\"\\",\\n        \\"cdn_endpoint\\": \\"\\",\\n        \\"endpoint\\": \\"\\"\\n      }\\n    ]\\n  },\\n  \\"data_hash_name\\": \\"\\"\\n}","type":"json"}]',
      'title' => '更新Domain',
    ),
    'ListDomains' => 
    array (
      'summary' => '列举 domain',
      'path' => '/v2/domain/list',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'tags' => 
      array (
        0 => 'admin',
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
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '请求体参数。',
            'type' => 'object',
            'properties' => 
            array (
              'parent_domain_id' => 
              array (
                'description' => '父 domain id',
                'type' => 'string',
                'required' => false,
                'example' => 'bj1',
              ),
              'marker' => 
              array (
                'description' => '分页 marker，"" 表示从头开始。该接口会返回 next\\_marker，可将 next\\_marker 设置该值来遍历所有 domain 信息',
                'type' => 'string',
                'required' => false,
                'example' => 'NWQ1Yjk4YmI1ZDRlYmU1Y2E0YWE0NmJhYWJmODBhNDQ2NzhlMTRhMg',
              ),
              'limit' => 
              array (
                'description' => '本次分页获取的数量，默认 50，不可超过 100',
                'type' => 'integer',
                'format' => 'int64',
                'required' => false,
                'example' => '60',
              ),
              'service_code' => 
              array (
                'type' => 'string',
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
            'description' => '返回的 domain 列表',
            'type' => 'object',
            'properties' => 
            array (
              'items' => 
              array (
                'description' => '返回的 domain 列表',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '单个 domain 信息',
                  '$ref' => '#/components/schemas/Domain',
                ),
              ),
              'next_marker' => 
              array (
                'description' => '用作下次遍历的 marker',
                'type' => 'string',
                'example' => 'NWQ1Yjk4YmI1ZDRlYmU1Y2E0YWE0NmJhYWJmODBhNDQ2NzhlMTRhMg',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"items\\": [\\n    {\\n      \\"parent_domain_id\\": \\"\\",\\n      \\"domain_id\\": \\"\\",\\n      \\"domain_name\\": \\"\\",\\n      \\"description\\": \\"\\",\\n      \\"init_drive_enable\\": true,\\n      \\"init_drive_size\\": 0,\\n      \\"updated_at\\": \\"\\",\\n      \\"created_at\\": \\"\\",\\n      \\"size_quota\\": 0,\\n      \\"size_quota_used\\": 0,\\n      \\"user_count_quota\\": 0,\\n      \\"status\\": 0,\\n      \\"used_size\\": 0,\\n      \\"published_app_access_strategy\\": {\\n        \\"effect\\": \\"\\",\\n        \\"except_app_id_list\\": [\\n          \\"\\"\\n        ]\\n      },\\n      \\"watermark_config\\": {\\n        \\"enable_doc_preview\\": true,\\n        \\"display_access_user_name\\": true,\\n        \\"display_shareLink_creator_name\\": true,\\n        \\"display_custom_text\\": \\"\\"\\n      },\\n      \\"auth_config\\": {\\n        \\"key\\": {\\n          \\"enable\\": true,\\n          \\"app_id\\": \\"\\",\\n          \\"app_secret\\": \\"\\",\\n          \\"endpoint\\": \\"\\",\\n          \\"enterprise_id\\": \\"\\",\\n          \\"white_list_enable\\": true,\\n          \\"ldap_config\\": {\\n            \\"version\\": \\"\\",\\n            \\"host\\": \\"\\",\\n            \\"port\\": 0,\\n            \\"uid\\": \\"\\",\\n            \\"admin_dn\\": \\"\\",\\n            \\"global_uid\\": \\"\\",\\n            \\"admin_password\\": \\"\\",\\n            \\"base_dn\\": \\"\\",\\n            \\"display_name_key\\": \\"\\",\\n            \\"type\\": \\"\\",\\n            \\"sync_config\\": {\\n              \\"enabled\\": true,\\n              \\"group_object_class\\": \\"\\",\\n              \\"group_filter\\": \\"\\",\\n              \\"user_object_class\\": \\"\\",\\n              \\"user_filter\\": \\"\\",\\n              \\"cron\\": \\"\\"\\n            }\\n          },\\n          \\"ding_sync_config\\": {\\n            \\"enabled\\": true,\\n            \\"cron\\": \\"\\"\\n          },\\n          \\"we_chat_sync_config\\": {\\n            \\"enabled\\": true,\\n            \\"tag_id\\": \\"\\",\\n            \\"cron\\": \\"\\"\\n          }\\n        }\\n      },\\n      \\"sharable\\": true,\\n      \\"ali_owner_id\\": \\"\\",\\n      \\"archive_files_config\\": {\\n        \\"enabled\\": true,\\n        \\"version\\": \\"\\"\\n      },\\n      \\"uncompress_config\\": {\\n        \\"enabled\\": true,\\n        \\"version\\": \\"\\"\\n      },\\n      \\"multi_revision_config\\": {\\n        \\"revision_merge_enabled\\": true,\\n        \\"revision_count\\": 0,\\n        \\"revision_recycle_period\\": 0\\n      },\\n      \\"app_config\\": {\\n        \\"same_name_file_upload_mode\\": \\"\\",\\n        \\"web_client_download_mode\\": \\"\\",\\n        \\"single_file_upload_size_limit\\": 0,\\n        \\"allow_upload_file_category_list\\": [\\n          \\"\\"\\n        ],\\n        \\"allow_upload_custom_file_ext_list\\": [\\n          \\"\\"\\n        ]\\n      },\\n      \\"recycle_bin_config\\": {\\n        \\"auto_delete_enabled\\": true,\\n        \\"auto_delete_keep_second\\": 0,\\n        \\"delete_trash_normal_file_disabled\\": true\\n      },\\n      \\"office_preview_config\\": {\\n        \\"enabled\\": true\\n      },\\n      \\"office_edit_config\\": {\\n        \\"enabled\\": true\\n      },\\n      \\"share_link_detail\\": {\\n        \\"enable_office_editable\\": true\\n      },\\n      \\"endpoints\\": {\\n        \\"api_endpoint\\": \\"\\",\\n        \\"api_vpc_endpoint\\": \\"\\",\\n        \\"app_endpoint\\": \\"\\",\\n        \\"auth_endpoint\\": \\"\\",\\n        \\"mgmt_endpoint\\": \\"\\",\\n        \\"web_office_endpoint_list\\": \\"\\",\\n        \\"store_list\\": [\\n          {\\n            \\"store_id\\": \\"\\",\\n            \\"type\\": \\"\\",\\n            \\"bucket\\": \\"\\",\\n            \\"base_path\\": \\"\\",\\n            \\"role_arn\\": \\"\\",\\n            \\"ownership\\": \\"\\",\\n            \\"location\\": \\"\\",\\n            \\"public_endpoint\\": \\"\\",\\n            \\"vpc_endpoint\\": \\"\\",\\n            \\"acc_endpoint\\": \\"\\",\\n            \\"acc_oversea_endpoint\\": \\"\\",\\n            \\"cdn_endpoint\\": \\"\\",\\n            \\"endpoint\\": \\"\\"\\n          }\\n        ],\\n        \\"va_store_list\\": [\\n          {\\n            \\"store_id\\": \\"\\",\\n            \\"type\\": \\"\\",\\n            \\"bucket\\": \\"\\",\\n            \\"base_path\\": \\"\\",\\n            \\"role_arn\\": \\"\\",\\n            \\"ownership\\": \\"\\",\\n            \\"location\\": \\"\\",\\n            \\"public_endpoint\\": \\"\\",\\n            \\"vpc_endpoint\\": \\"\\",\\n            \\"acc_endpoint\\": \\"\\",\\n            \\"acc_oversea_endpoint\\": \\"\\",\\n            \\"cdn_endpoint\\": \\"\\",\\n            \\"endpoint\\": \\"\\"\\n          }\\n        ]\\n      },\\n      \\"data_hash_name\\": \\"\\"\\n    }\\n  ],\\n  \\"next_marker\\": \\"NWQ1Yjk4YmI1ZDRlYmU1Y2E0YWE0NmJhYWJmODBhNDQ2NzhlMTRhMg\\"\\n}","type":"json"}]',
      'title' => '列举Domain',
    ),
    'SearchDomains' => 
    array (
      'summary' => '搜索 domain',
      'path' => '/v2/domain/search',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'tags' => 
      array (
        0 => 'admin',
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
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '请求body',
            'type' => 'object',
            'properties' => 
            array (
              'name' => 
              array (
                'description' => '要搜索的 domain 名称，支持模糊搜索',
                'type' => 'string',
                'required' => false,
                'example' => '你好网盘',
              ),
              'marker' => 
              array (
                'description' => '设定结果从marker之后按字母排序的第一个开始返回。如果不设定，则从头开始返回数据。
<br>默认值：无',
                'type' => 'string',
                'required' => false,
                'example' => 'NWQ1Yjk4YmI1ZDRlYmU1Y2E0YWE0NmJhYWJmODBhNDQ2NzhlMTRhMg',
              ),
              'limit' => 
              array (
                'description' => '限定此次返回资源的数量，取值范围\\[0,100\\]，默认100

返回结果可以小于指定的数量，但不能多于指定的数量。',
                'type' => 'integer',
                'format' => 'int64',
                'required' => false,
                'example' => '50',
              ),
              'order_by' => 
              array (
                'description' => '排序规则，当前仅支持：
created_at，创建时间',
                'type' => 'string',
                'required' => false,
                'example' => 'created_at',
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
            'description' => 'domain 列表以及遍历 marker',
            'type' => 'object',
            'properties' => 
            array (
              'items' => 
              array (
                'description' => '搜索命中的 domain 列表',
                'type' => 'array',
                'items' => 
                array (
                  'description' => 'domain 信息',
                  '$ref' => '#/components/schemas/Domain',
                ),
              ),
              'next_marker' => 
              array (
                'description' => '用作下次遍历的 marker',
                'type' => 'string',
                'example' => 'NWQ1Yjk4YmI1ZDRlYmU1Y2E0YWE0NmJhYWJmODBhNDQ2NzhlMTRhMg',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"items\\": [\\n    {\\n      \\"parent_domain_id\\": \\"\\",\\n      \\"domain_id\\": \\"\\",\\n      \\"domain_name\\": \\"\\",\\n      \\"description\\": \\"\\",\\n      \\"init_drive_enable\\": true,\\n      \\"init_drive_size\\": 0,\\n      \\"updated_at\\": \\"\\",\\n      \\"created_at\\": \\"\\",\\n      \\"size_quota\\": 0,\\n      \\"size_quota_used\\": 0,\\n      \\"user_count_quota\\": 0,\\n      \\"status\\": 0,\\n      \\"used_size\\": 0,\\n      \\"published_app_access_strategy\\": {\\n        \\"effect\\": \\"\\",\\n        \\"except_app_id_list\\": [\\n          \\"\\"\\n        ]\\n      },\\n      \\"watermark_config\\": {\\n        \\"enable_doc_preview\\": true,\\n        \\"display_access_user_name\\": true,\\n        \\"display_shareLink_creator_name\\": true,\\n        \\"display_custom_text\\": \\"\\"\\n      },\\n      \\"auth_config\\": {\\n        \\"key\\": {\\n          \\"enable\\": true,\\n          \\"app_id\\": \\"\\",\\n          \\"app_secret\\": \\"\\",\\n          \\"endpoint\\": \\"\\",\\n          \\"enterprise_id\\": \\"\\",\\n          \\"white_list_enable\\": true,\\n          \\"ldap_config\\": {\\n            \\"version\\": \\"\\",\\n            \\"host\\": \\"\\",\\n            \\"port\\": 0,\\n            \\"uid\\": \\"\\",\\n            \\"admin_dn\\": \\"\\",\\n            \\"global_uid\\": \\"\\",\\n            \\"admin_password\\": \\"\\",\\n            \\"base_dn\\": \\"\\",\\n            \\"display_name_key\\": \\"\\",\\n            \\"type\\": \\"\\",\\n            \\"sync_config\\": {\\n              \\"enabled\\": true,\\n              \\"group_object_class\\": \\"\\",\\n              \\"group_filter\\": \\"\\",\\n              \\"user_object_class\\": \\"\\",\\n              \\"user_filter\\": \\"\\",\\n              \\"cron\\": \\"\\"\\n            }\\n          },\\n          \\"ding_sync_config\\": {\\n            \\"enabled\\": true,\\n            \\"cron\\": \\"\\"\\n          },\\n          \\"we_chat_sync_config\\": {\\n            \\"enabled\\": true,\\n            \\"tag_id\\": \\"\\",\\n            \\"cron\\": \\"\\"\\n          }\\n        }\\n      },\\n      \\"sharable\\": true,\\n      \\"ali_owner_id\\": \\"\\",\\n      \\"archive_files_config\\": {\\n        \\"enabled\\": true,\\n        \\"version\\": \\"\\"\\n      },\\n      \\"uncompress_config\\": {\\n        \\"enabled\\": true,\\n        \\"version\\": \\"\\"\\n      },\\n      \\"multi_revision_config\\": {\\n        \\"revision_merge_enabled\\": true,\\n        \\"revision_count\\": 0,\\n        \\"revision_recycle_period\\": 0\\n      },\\n      \\"app_config\\": {\\n        \\"same_name_file_upload_mode\\": \\"\\",\\n        \\"web_client_download_mode\\": \\"\\",\\n        \\"single_file_upload_size_limit\\": 0,\\n        \\"allow_upload_file_category_list\\": [\\n          \\"\\"\\n        ],\\n        \\"allow_upload_custom_file_ext_list\\": [\\n          \\"\\"\\n        ]\\n      },\\n      \\"recycle_bin_config\\": {\\n        \\"auto_delete_enabled\\": true,\\n        \\"auto_delete_keep_second\\": 0,\\n        \\"delete_trash_normal_file_disabled\\": true\\n      },\\n      \\"office_preview_config\\": {\\n        \\"enabled\\": true\\n      },\\n      \\"office_edit_config\\": {\\n        \\"enabled\\": true\\n      },\\n      \\"share_link_detail\\": {\\n        \\"enable_office_editable\\": true\\n      },\\n      \\"endpoints\\": {\\n        \\"api_endpoint\\": \\"\\",\\n        \\"api_vpc_endpoint\\": \\"\\",\\n        \\"app_endpoint\\": \\"\\",\\n        \\"auth_endpoint\\": \\"\\",\\n        \\"mgmt_endpoint\\": \\"\\",\\n        \\"web_office_endpoint_list\\": \\"\\",\\n        \\"store_list\\": [\\n          {\\n            \\"store_id\\": \\"\\",\\n            \\"type\\": \\"\\",\\n            \\"bucket\\": \\"\\",\\n            \\"base_path\\": \\"\\",\\n            \\"role_arn\\": \\"\\",\\n            \\"ownership\\": \\"\\",\\n            \\"location\\": \\"\\",\\n            \\"public_endpoint\\": \\"\\",\\n            \\"vpc_endpoint\\": \\"\\",\\n            \\"acc_endpoint\\": \\"\\",\\n            \\"acc_oversea_endpoint\\": \\"\\",\\n            \\"cdn_endpoint\\": \\"\\",\\n            \\"endpoint\\": \\"\\"\\n          }\\n        ],\\n        \\"va_store_list\\": [\\n          {\\n            \\"store_id\\": \\"\\",\\n            \\"type\\": \\"\\",\\n            \\"bucket\\": \\"\\",\\n            \\"base_path\\": \\"\\",\\n            \\"role_arn\\": \\"\\",\\n            \\"ownership\\": \\"\\",\\n            \\"location\\": \\"\\",\\n            \\"public_endpoint\\": \\"\\",\\n            \\"vpc_endpoint\\": \\"\\",\\n            \\"acc_endpoint\\": \\"\\",\\n            \\"acc_oversea_endpoint\\": \\"\\",\\n            \\"cdn_endpoint\\": \\"\\",\\n            \\"endpoint\\": \\"\\"\\n          }\\n        ]\\n      },\\n      \\"data_hash_name\\": \\"\\"\\n    }\\n  ],\\n  \\"next_marker\\": \\"NWQ1Yjk4YmI1ZDRlYmU1Y2E0YWE0NmJhYWJmODBhNDQ2NzhlMTRhMg\\"\\n}","type":"json"}]',
      'title' => '搜索Domain',
    ),
    'DeleteDomain' => 
    array (
      'summary' => '删除 domain',
      'path' => '/v2/domain/delete',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'https',
        1 => 'http',
      ),
      'tags' => 
      array (
        0 => 'admin',
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
        'riskType' => 'high',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '请求体参数。',
            'type' => 'object',
            'properties' => 
            array (
              'domain_id' => 
              array (
                'description' => 'domain id',
                'type' => 'string',
                'required' => false,
                'example' => 'bj1',
              ),
            ),
            'required' => false,
          ),
        ),
      ),
      'responses' => 
      array (
        204 => 
        array (
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{}","type":"json"}]',
      'title' => '删除Domain',
    ),
    'Authorize' => 
    array (
      'summary' => 'OAuth2.0请求授权。',
      'path' => '/v2/oauth/authorize',
      'methods' => 
      array (
        0 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'https',
      ),
      'tags' => 
      array (
        0 => 'api',
      ),
      'security' => 
      array (
        0 => 
        array (
          'Anonymous' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
        0 => 'application/x-www-form-urlencoded',
      ),
      'produces' => 
      array (
        0 => 'application/octet-stream',
      ),
      'deprecated' => false,
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'domain_id',
          'in' => 'host',
          'schema' => 
          array (
            'type' => 'string',
            'required' => true,
          ),
        ),
        1 => 
        array (
          'name' => 'client_id',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '创建App时返回的AppID',
            'type' => 'string',
            'required' => true,
            'example' => '47eUHhrzgWBvlLWj',
          ),
        ),
        2 => 
        array (
          'name' => 'redirect_uri',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '回调地址（创建App时填写的回调地址）',
            'type' => 'string',
            'required' => true,
            'example' => 'https://www.aliyunpds.com/sign/callback',
          ),
        ),
        3 => 
        array (
          'name' => 'scope',
          'in' => 'query',
          'style' => 'simple',
          'schema' => 
          array (
            'description' => '申请的权限列表, 默认为所有权限',
            'type' => 'array',
            'items' => 
            array (
              'description' => '当前仅支持获取App的所有权限，可以传all或者不传此参数',
              'type' => 'string',
              'required' => false,
              'example' => 'all',
            ),
            'required' => false,
          ),
        ),
        4 => 
        array (
          'name' => 'response_type',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '返回类型, 只能填写code',
            'type' => 'string',
            'required' => true,
            'example' => 'code',
          ),
        ),
        5 => 
        array (
          'name' => 'state',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用户自定义字段，会在请求授权成功后的callback带回',
            'type' => 'string',
            'required' => false,
            'example' => 'customdata',
          ),
        ),
        6 => 
        array (
          'name' => 'login_type',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '认证方式，目前支持以下取值：

- default （PDS提供的默认登录页面，集成了所有登录方式）

- ding （PC钉钉扫码登录）

- ding\\_sns （手机钉钉账号密码登录）

- ram （阿里云子账号登录）

- wechat（企业微信扫码登录）

- wechat\\_app（企业微信内免登）',
            'type' => 'string',
            'required' => true,
            'example' => 'default',
          ),
        ),
        7 => 
        array (
          'name' => 'hide_consent',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否隐藏同意页面',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
          ),
        ),
      ),
      'responses' => 
      array (
        302 => 
        array (
          'headers' => 
          array (
            'location' => 
            array (
              'schema' => 
              array (
                'title' => '重定向的登陆页地址，用户需要在此页面完成认证',
                'type' => 'string',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{}","type":"json"}]',
      'title' => 'OAuth请求授权',
      'description' => '<props="china">详细使用方法参考用户指南：[用户指南链接](https://help.aliyun.com/document_detail/175894.html)。</props>

<props="intl">详细使用方法参考用户指南：[用户指南链接](https://www.alibabacloud.com/help/zh/pds/latest/oauth2-for-web-server-app?spm=a2c63.p38356.0.0.4cce4fccEyosuB)。</props>',
    ),
    'Token' => 
    array (
      'summary' => 'OAuth2.0授权流程的获取访问令牌。',
      'path' => '/v2/oauth/token',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'https',
      ),
      'tags' => 
      array (
        0 => 'api',
      ),
      'security' => 
      array (
        0 => 
        array (
          'Anonymous' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
        0 => 'application/x-www-form-urlencoded',
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
          'name' => 'domain_id',
          'in' => 'host',
          'schema' => 
          array (
            'type' => 'string',
            'required' => true,
          ),
        ),
        1 => 
        array (
          'name' => 'grant_type',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '授权类型，有以下取值：

authorization\\_code （通过认证完成后获取的code来换取token）

refresh\\_token（通过上次授权获取的refresh_token来获取token）

urn:ietf:params:oauth:grant-type:jwt-bearer（通过JWT方式获取token）',
            'type' => 'string',
            'required' => true,
            'example' => 'refresh_token',
          ),
        ),
        2 => 
        array (
          'name' => 'code',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '认证完成后回调地址中携带的code，当grant\\_type为authorization\\_code时，此参数必传

',
            'type' => 'string',
            'required' => false,
            'example' => '0045157fa8e24f4f9a0d9e3ff158c1e0',
          ),
        ),
        3 => 
        array (
          'name' => 'redirect_uri',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '填写发起authorize时传入的redirect\\_uri，当grant\\_type为authorization\\_code时必填

',
            'type' => 'string',
            'required' => false,
            'example' => 'https://aliyun.com/pds
',
          ),
        ),
        4 => 
        array (
          'name' => 'client_id',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '在阿里云PDS控制台申请的App对应的ID

',
            'type' => 'string',
            'required' => true,
            'example' => '1Zu***flH',
          ),
        ),
        5 => 
        array (
          'name' => 'client_secret',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '在阿里云PDS控制台申请的App对应的Secret，WebServer类型的App必填此参数

',
            'type' => 'string',
            'required' => false,
            'example' => '80D***3i5
',
          ),
        ),
        6 => 
        array (
          'name' => 'refresh_token',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '用于刷新Token的令牌，当grant\\_type为refresh\\_token时此参数必传

',
            'type' => 'string',
            'required' => false,
            'example' => '399623e13353490391266c7d48a13ed1',
          ),
        ),
        7 => 
        array (
          'name' => 'assertion',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '通过JWT私钥签名的字符串，里面包含待授权的用户信息和授权参数，结构参考JWTPayload。当grant_type为urn:ietf:params:oauth:grant-type:jwt-bearer时此参数必填。

',
            'type' => 'string',
            'required' => false,
            'example' => 'ey***asd
',
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
            'description' => '访问令牌信息',
            '$ref' => '#/components/schemas/Token',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"access_token\\": \\"\\",\\n  \\"refresh_token\\": \\"\\",\\n  \\"expires_in\\": 0,\\n  \\"token_type\\": \\"\\",\\n  \\"user_id\\": \\"\\",\\n  \\"user_name\\": \\"\\",\\n  \\"avatar\\": \\"\\",\\n  \\"nick_name\\": \\"\\",\\n  \\"default_drive_id\\": \\"\\",\\n  \\"role\\": \\"\\",\\n  \\"status\\": \\"\\",\\n  \\"expire_time\\": \\"\\",\\n  \\"is_first_login\\": true,\\n  \\"device_id\\": \\"\\",\\n  \\"device_name\\": \\"\\",\\n  \\"domain_id\\": \\"\\"\\n}","type":"json"}]',
      'title' => '获取访问令牌',
      'description' => '<props="china">详细使用方法参考用户指南：[用户指南链接](https://help.aliyun.com/document_detail/175894.html)。</props>

<props="china">JWT方式登录参考文档：[JWT登录链接](https://help.aliyun.com/document_detail/175893.html)。</props>

<props="intl">详细使用方法参考用户指南：[用户指南链接](https://www.alibabacloud.com/help/zh/pds/latest/oauth2-for-web-server-app?spm=a2c63.p38356.0.0.267148fbJdRB0P)。</props>

<props="intl">JWT方式登录参考文档：[JWT登录链接](https://www.alibabacloud.com/help/zh/pds/latest/jwt-application?spm=a2c63.p38356.0.0.45ab5f06NnPJqj)。</props>',
    ),
    'GetLinkInfoByUserId' => 
    array (
      'summary' => '根据用户ID获取账号信息。',
      'path' => '/v2/account/get_link_info_by_user_id',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'https',
      ),
      'tags' => 
      array (
        0 => 'api',
      ),
      'security' => 
      array (
        0 => 
        array (
          'BearerToken' => 
          array (
          ),
        ),
        1 => 
        array (
          'AK' => 
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
          'name' => 'domain_id',
          'in' => 'host',
          'schema' => 
          array (
            'type' => 'string',
            'required' => true,
          ),
        ),
        1 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '请求体参数。',
            'type' => 'object',
            'properties' => 
            array (
              'user_id' => 
              array (
                'description' => '待查询的UserID',
                'type' => 'string',
                'required' => false,
                'example' => 'xxx',
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
            'title' => 'Schema of Response',
            'description' => '返回结构体',
            'type' => 'object',
            'properties' => 
            array (
              'items' => 
              array (
                'title' => 'items',
                'description' => '用户账号信息列表',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '用户账号信息',
                  '$ref' => '#/components/schemas/AccountLinkInfo',
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"items\\": [\\n    {\\n      \\"domain_id\\": \\"\\",\\n      \\"authentication_type\\": \\"\\",\\n      \\"identity\\": \\"\\",\\n      \\"extra\\": \\"\\",\\n      \\"user_id\\": \\"\\",\\n      \\"created_at\\": 0,\\n      \\"display_name\\": \\"\\"\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '根据用户ID获取账号信息',
    ),
    'LinkAccount' => 
    array (
      'summary' => '绑定账号。',
      'path' => '/v2/account/link',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'https',
      ),
      'tags' => 
      array (
        0 => 'api',
      ),
      'security' => 
      array (
        0 => 
        array (
          'BearerToken' => 
          array (
          ),
        ),
        1 => 
        array (
          'AK' => 
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
          'name' => 'domain_id',
          'in' => 'host',
          'schema' => 
          array (
            'type' => 'string',
            'required' => true,
          ),
        ),
        1 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '请求体参数。',
            'type' => 'object',
            'properties' => 
            array (
              'user_id' => 
              array (
                'description' => '待绑定的UserID',
                'type' => 'string',
                'required' => true,
                'example' => 'xxx',
              ),
              'type' => 
              array (
                'description' => '账号类型

- mobile：手机号

- email：邮箱

- ding：钉钉

- ram：阿里云RAM子账号

- wechat：企业微信

- ldap：LDAP账号

- custom：自定义账号',
                'type' => 'string',
                'required' => true,
                'example' => 'ding',
              ),
              'identity' => 
              array (
                'description' => '账号的唯一标识，比如手机号',
                'type' => 'string',
                'required' => true,
                'example' => 'eyy***',
              ),
              'extra' => 
              array (
                'description' => '账号唯一标识的附加信息，比如当账号为手机号时，此字段填手机的区域编码，比如中国大陆为86，不填写默认为86',
                'type' => 'string',
                'required' => false,
                'example' => '86',
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
            'description' => '返回用户的授权Token信息',
            '$ref' => '#/components/schemas/Token',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"access_token\\": \\"\\",\\n  \\"refresh_token\\": \\"\\",\\n  \\"expires_in\\": 0,\\n  \\"token_type\\": \\"\\",\\n  \\"user_id\\": \\"\\",\\n  \\"user_name\\": \\"\\",\\n  \\"avatar\\": \\"\\",\\n  \\"nick_name\\": \\"\\",\\n  \\"default_drive_id\\": \\"\\",\\n  \\"role\\": \\"\\",\\n  \\"status\\": \\"\\",\\n  \\"expire_time\\": \\"\\",\\n  \\"is_first_login\\": true,\\n  \\"device_id\\": \\"\\",\\n  \\"device_name\\": \\"\\",\\n  \\"domain_id\\": \\"\\"\\n}","type":"json"}]',
      'title' => '绑定账号',
    ),
    'GetLinkInfo' => 
    array (
      'summary' => '获取账号信息。',
      'path' => '/v2/account/get_link_info',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'https',
      ),
      'tags' => 
      array (
        0 => 'api',
      ),
      'security' => 
      array (
        0 => 
        array (
          'BearerToken' => 
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
          'name' => 'domain_id',
          'in' => 'host',
          'schema' => 
          array (
            'type' => 'string',
            'required' => true,
          ),
        ),
        1 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '请求体参数。',
            'type' => 'object',
            'properties' => 
            array (
              'type' => 
              array (
                'description' => '账号类型

- mobile：手机号

- email：邮箱

- ding：钉钉

- ram：阿里云RAM子账号

- wechat：企业微信

- ldap：LDAP账号

- custom：自定义账号',
                'type' => 'string',
                'required' => true,
                'example' => 'mobile',
              ),
              'identity' => 
              array (
                'description' => '账号的唯一标识，比如手机号',
                'type' => 'string',
                'required' => true,
                'example' => '130***',
              ),
              'extra' => 
              array (
                'description' => '账号唯一标识的附加信息，比如当账号为手机号时，此字段填手机的区域编码。',
                'type' => 'string',
                'required' => false,
                'example' => '1',
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
            'description' => '返回用户账号信息',
            '$ref' => '#/components/schemas/AccountLinkInfo',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"domain_id\\": \\"\\",\\n  \\"authentication_type\\": \\"\\",\\n  \\"identity\\": \\"\\",\\n  \\"extra\\": \\"\\",\\n  \\"user_id\\": \\"\\",\\n  \\"created_at\\": 0,\\n  \\"display_name\\": \\"\\"\\n}","type":"json"}]',
      'title' => '获取账号信息',
    ),
    'UnLinkAccount' => 
    array (
      'summary' => '取消账号绑定。',
      'path' => '/v2/account/unlink',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'https',
      ),
      'tags' => 
      array (
        0 => 'api',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
        1 => 
        array (
          'BearerToken' => 
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
        'operationType' => 'none',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'domain_id',
          'in' => 'host',
          'schema' => 
          array (
            'title' => 'A short description of struct',
            'description' => 'A short description of struct',
            'type' => 'string',
            'required' => true,
          ),
        ),
        1 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '请求体',
            'type' => 'object',
            'properties' => 
            array (
              'user_id' => 
              array (
                'description' => '用户标识',
                'type' => 'string',
                'required' => true,
                'example' => 'uid1',
              ),
              'type' => 
              array (
                'description' => '账号类型

mobile：手机号

email：邮箱

ding：钉钉

ram：阿里云RAM子账号

wechat：企业微信

ldap：LDAP账号

custom：自定义账号',
                'type' => 'string',
                'required' => true,
                'example' => 'mobile',
              ),
              'identity' => 
              array (
                'description' => '账号的唯一标识，比如手机号',
                'type' => 'string',
                'required' => true,
                'example' => '139****
',
              ),
              'extra' => 
              array (
                'description' => '账号唯一标识的附加信息，比如当账号为手机号时，此字段填手机的区域编码，比如中国大陆为86，不填写默认为86',
                'type' => 'string',
                'required' => false,
                'example' => '1',
              ),
            ),
            'required' => false,
          ),
        ),
      ),
      'responses' => 
      array (
        204 => 
        array (
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{}","type":"json"}]',
      'title' => '取消账号关联',
    ),
    'CreateGroup' => 
    array (
      'summary' => '创建群组。',
      'path' => '/v2/group/create',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'https',
      ),
      'tags' => 
      array (
        0 => 'api',
      ),
      'security' => 
      array (
        0 => 
        array (
          'BearerToken' => 
          array (
          ),
        ),
        1 => 
        array (
          'AK' => 
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
          'name' => 'domain_id',
          'in' => 'host',
          'schema' => 
          array (
            'type' => 'string',
            'required' => true,
          ),
        ),
        1 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '请求体参数。',
            'type' => 'object',
            'properties' => 
            array (
              'group_name' => 
              array (
                'description' => '群组名，长度1～128个字符',
                'type' => 'string',
                'required' => true,
                'example' => 'test group',
              ),
              'description' => 
              array (
                'description' => '描述信息，长度0～1024个字符',
                'type' => 'string',
                'required' => false,
                'example' => 'test group description',
              ),
              'is_root' => 
              array (
                'description' => '是否是根群组，根群组不能加入其他任何群组，一般用于组织架构的顶层组织',
                'type' => 'boolean',
                'required' => false,
                'example' => 'false',
              ),
              'parent_group_id' => 
              array (
                'description' => '需要加入的父群组ID，传入此字段时，创建完群组后，系统会将此群组自动加入到指定的父群组',
                'type' => 'string',
                'required' => false,
                'example' => '2e43ec8427dd45f19431b7504649a1b3',
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
            'description' => '新创建的群组信息',
            '$ref' => '#/components/schemas/Group',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"domain_id\\": \\"\\",\\n  \\"group_id\\": \\"\\",\\n  \\"group_name\\": \\"\\",\\n  \\"description\\": \\"\\",\\n  \\"created_at\\": 0,\\n  \\"updated_at\\": 0,\\n  \\"creator\\": \\"\\",\\n  \\"is_sync\\": true\\n}","type":"json"}]',
      'title' => '创建群组',
    ),
    'UpdateGroup' => 
    array (
      'summary' => '根据群组id定位到指定的群组，并修改群组信息。',
      'path' => '/v2/group/update',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'https',
      ),
      'tags' => 
      array (
        0 => 'api',
      ),
      'security' => 
      array (
        0 => 
        array (
          'BearerToken' => 
          array (
          ),
        ),
        1 => 
        array (
          'AK' => 
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
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'domain_id',
          'in' => 'host',
          'schema' => 
          array (
            'type' => 'string',
            'required' => true,
          ),
        ),
        1 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '请求体参数。',
            'type' => 'object',
            'properties' => 
            array (
              'group_id' => 
              array (
                'description' => '待修改的群组ID',
                'type' => 'string',
                'required' => true,
                'example' => '2e43ec8427dd45f19431b7504649a1b4',
              ),
              'group_name' => 
              array (
                'description' => '修改后的群组名称',
                'type' => 'string',
                'required' => false,
                'example' => 'test group',
              ),
              'description' => 
              array (
                'description' => '修改后的描述',
                'type' => 'string',
                'required' => false,
                'example' => 'test group description',
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
            'description' => '修改后的群组信息',
            '$ref' => '#/components/schemas/Group',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"domain_id\\": \\"\\",\\n  \\"group_id\\": \\"\\",\\n  \\"group_name\\": \\"\\",\\n  \\"description\\": \\"\\",\\n  \\"created_at\\": 0,\\n  \\"updated_at\\": 0,\\n  \\"creator\\": \\"\\",\\n  \\"is_sync\\": true\\n}","type":"json"}]',
      'title' => '修改群组信息',
    ),
    'GetGroup' => 
    array (
      'summary' => '获取群组信息。',
      'path' => '/v2/group/get',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'https',
      ),
      'tags' => 
      array (
        0 => 'api',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
        1 => 
        array (
          'BearerToken' => 
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
          'name' => 'domain_id',
          'in' => 'host',
          'schema' => 
          array (
            'type' => 'string',
            'required' => true,
          ),
        ),
        1 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '请求参数。',
            'type' => 'object',
            'properties' => 
            array (
              'group_id' => 
              array (
                'description' => '待获取的群组ID',
                'type' => 'string',
                'required' => true,
                'example' => '2e43ec8427dd45f19431b7504649a1b1',
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
            'description' => '群组信息',
            '$ref' => '#/components/schemas/Group',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"domain_id\\": \\"\\",\\n  \\"group_id\\": \\"\\",\\n  \\"group_name\\": \\"\\",\\n  \\"description\\": \\"\\",\\n  \\"created_at\\": 0,\\n  \\"updated_at\\": 0,\\n  \\"creator\\": \\"\\",\\n  \\"is_sync\\": true\\n}","type":"json"}]',
      'title' => '获取群组信息',
    ),
    'ListGroup' => 
    array (
      'summary' => '列举群组。',
      'path' => '/v2/group/list',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'https',
      ),
      'tags' => 
      array (
        0 => 'api',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
        1 => 
        array (
          'BearerToken' => 
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
          'name' => 'domain_id',
          'in' => 'host',
          'schema' => 
          array (
            'type' => 'string',
            'required' => true,
          ),
        ),
        1 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '请求体参数',
            'type' => 'object',
            'properties' => 
            array (
              'limit' => 
              array (
                'description' => '限定此次返回资源的数量。如果不设定，默认返回100，最大不能超过100。',
                'type' => 'integer',
                'format' => 'int32',
                'required' => false,
                'example' => '100',
              ),
              'marker' => 
              array (
                'description' => '设定结果从marker之后按字母排序的第一个开始返回。如果不设定，则从头开始返回数据。 默认值：无',
                'type' => 'string',
                'required' => false,
                'example' => 'NWQ1Yjk4YmI1ZDRlYmU1Y2E0YWE0NmJhYWJmODBhNDQ2NzhlMTRhMg',
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
            'title' => 'Schema of Response',
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'items' => 
              array (
                'description' => '群组列表',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '群组信息',
                  '$ref' => '#/components/schemas/Group',
                ),
              ),
              'next_marker' => 
              array (
                'description' => '下一页起始资源标识符, 最后一页该值为空。',
                'type' => 'string',
                'example' => 'NWQ1Yjk4YmI1ZDRlYmU1Y2E0YWE0NmJhYWJmODBhNDQ2NzhlMTRhMg',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"items\\": [\\n    {\\n      \\"domain_id\\": \\"\\",\\n      \\"group_id\\": \\"\\",\\n      \\"group_name\\": \\"\\",\\n      \\"description\\": \\"\\",\\n      \\"created_at\\": 0,\\n      \\"updated_at\\": 0,\\n      \\"creator\\": \\"\\",\\n      \\"is_sync\\": true\\n    }\\n  ],\\n  \\"next_marker\\": \\"NWQ1Yjk4YmI1ZDRlYmU1Y2E0YWE0NmJhYWJmODBhNDQ2NzhlMTRhMg\\"\\n}","type":"json"}]',
      'title' => '列举群组',
    ),
    'DeleteGroup' => 
    array (
      'summary' => '删除群组接口， 在删除群组前，需保证群组下没有其他群组或用户，否则会导致删除失败。',
      'path' => '/v2/group/delete',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'https',
      ),
      'tags' => 
      array (
        0 => 'api',
      ),
      'security' => 
      array (
        0 => 
        array (
          'BearerToken' => 
          array (
          ),
        ),
        1 => 
        array (
          'AK' => 
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
          'name' => 'domain_id',
          'in' => 'host',
          'schema' => 
          array (
            'type' => 'string',
            'required' => true,
          ),
        ),
        1 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '请求体参数。',
            'type' => 'object',
            'properties' => 
            array (
              'group_id' => 
              array (
                'description' => '待删除的群组ID',
                'type' => 'string',
                'required' => true,
                'example' => 'g123',
              ),
            ),
            'required' => false,
          ),
        ),
      ),
      'responses' => 
      array (
        204 => 
        array (
          'schema' => 
          array (
            'title' => 'Schema of Response',
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{}","type":"json"}]',
      'title' => '删除群组',
    ),
    'AddGroupMember' => 
    array (
      'summary' => '添加成员到群组。',
      'path' => '/v2/group/add_member',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'https',
      ),
      'tags' => 
      array (
        0 => 'api',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
        1 => 
        array (
          'BearerToken' => 
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
          'name' => 'domain_id',
          'in' => 'host',
          'schema' => 
          array (
            'title' => 'A short description of struct',
            'description' => 'A short description of struct',
            'type' => 'string',
            'required' => true,
          ),
        ),
        1 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '请求体参数。',
            'type' => 'object',
            'properties' => 
            array (
              'group_id' => 
              array (
                'description' => '目标群组ID，表示将成员添加到目标群组下',
                'type' => 'string',
                'required' => true,
                'example' => '3e5***2c2',
              ),
              'member_type' => 
              array (
                'description' => '成员类型，当前只能添加用户，群组可以在创建时直接选择加入的父群组

- user（用户）


注意：群组只能作为一个群组的成员，不能同时成为多个群组的成员。 用户可以同时成为多个群组的成员',
                'type' => 'string',
                'required' => true,
                'example' => 'user',
              ),
              'member_id' => 
              array (
                'description' => '成员ID， 当member\\_type为user时，此字段填对应的userID。 ',
                'type' => 'string',
                'required' => true,
                'example' => '2e4***1b1',
              ),
            ),
            'required' => false,
          ),
        ),
      ),
      'responses' => 
      array (
        204 => 
        array (
          'headers' => 
          array (
          ),
          'schema' => 
          array (
            'title' => 'Schema of Response',
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{}","type":"json"}]',
      'title' => '添加群组成员',
    ),
    'RemoveGroupMember' => 
    array (
      'summary' => '从群组移除成员。',
      'path' => '/v2/group/remove_member',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'https',
      ),
      'tags' => 
      array (
        0 => 'api',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
        1 => 
        array (
          'BearerToken' => 
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
          'name' => 'domain_id',
          'in' => 'host',
          'schema' => 
          array (
            'title' => 'A short description of struct',
            'description' => 'A short description of struct',
            'type' => 'string',
            'required' => true,
          ),
        ),
        1 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '请求体参数。',
            'type' => 'object',
            'properties' => 
            array (
              'group_id' => 
              array (
                'description' => '目标群组ID，表示从哪个群组下移除成员',
                'type' => 'string',
                'required' => true,
                'example' => '3e5***2c2',
              ),
              'member_type' => 
              array (
                'description' => '成员类型，当前只能移除用户，群组移除可以通过删除群组完成

- user（用户）

注意：群组只能作为一个群组的成员，不能同时成为多个群组的成员。 用户可以同时成为多个群组的成员',
                'type' => 'string',
                'required' => true,
                'example' => 'user',
              ),
              'member_id' => 
              array (
                'description' => '成员ID， 当member\\_type为user时，此字段填对应的userID。
',
                'type' => 'string',
                'required' => true,
                'example' => '2e4***1b1',
              ),
            ),
            'required' => false,
          ),
        ),
      ),
      'responses' => 
      array (
        204 => 
        array (
          'headers' => 
          array (
          ),
          'schema' => 
          array (
            'title' => 'Schema of Response',
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{}","type":"json"}]',
      'title' => '移除群组成员',
    ),
    'ListGroupMember' => 
    array (
      'summary' => '列举团队成员。',
      'path' => '/v2/group/list_member',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'https',
      ),
      'tags' => 
      array (
        0 => 'api',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
        1 => 
        array (
          'BearerToken' => 
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
          'name' => 'domain_id',
          'in' => 'host',
          'schema' => 
          array (
            'title' => 'A short description of struct',
            'description' => 'A short description of struct',
            'type' => 'string',
            'required' => false,
          ),
        ),
        1 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'allowEmptyValue' => true,
          'style' => 'json',
          'schema' => 
          array (
            'description' => '请求体参数。',
            'type' => 'object',
            'properties' => 
            array (
              'group_id' => 
              array (
                'description' => '目标群组ID，表示将列举哪个群组下的成员',
                'type' => 'string',
                'required' => true,
                'example' => '3e5***2c2',
              ),
              'member_type' => 
              array (
                'description' => '列举的成员类型，不传则两种都返回

- user（用户）

- group（群组）

注意：群组只能作为一个群组的成员，不能同时成为多个群组的成员。 用户可以同时成为多个群组的成员',
                'type' => 'string',
                'required' => false,
                'example' => 'user',
              ),
              'limit' => 
              array (
                'description' => '限定此次返回资源的数量，取值范围[1,100]。
返回结果可以小于指定的数量，但不能多于指定的数量。
<br>默认值：100',
                'type' => 'integer',
                'format' => 'int32',
                'required' => false,
                'example' => '50',
              ),
              'marker' => 
              array (
                'description' => '设定结果从marker之后按字母排序的第一个开始返回。如果不设定，则从头开始返回数据。
<br>默认值：无',
                'type' => 'string',
                'required' => false,
                'example' => 'NWQ1Yjk4YmI1ZDRlYmU1Y2E0YWE0NmJhYWJmODBhNDQ2NzhlMTRhMg',
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
            'title' => 'Schema of Response',
            'description' => '返回的结构体',
            'type' => 'object',
            'properties' => 
            array (
              'user_items' => 
              array (
                'description' => '用户列表',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '用户信息',
                  '$ref' => '#/components/schemas/User',
                ),
              ),
              'group_items' => 
              array (
                'description' => '群组列表',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '群组信息',
                  '$ref' => '#/components/schemas/Group',
                ),
              ),
              'next_marker' => 
              array (
                'description' => '下一页起始资源标识符, 最后一页该值为空。',
                'type' => 'string',
                'example' => 'NWQ1Yjk4YmI1ZDRlYmU1Y2E0YWE0NmJhYWJmODBhNDQ2NzhlMTRhM1',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"user_items\\": [\\n    {\\n      \\"domain_id\\": \\"\\",\\n      \\"user_id\\": \\"\\",\\n      \\"avatar\\": \\"\\",\\n      \\"created_at\\": 0,\\n      \\"updated_at\\": 0,\\n      \\"email\\": \\"\\",\\n      \\"nick_name\\": \\"\\",\\n      \\"phone\\": \\"\\",\\n      \\"role\\": \\"\\",\\n      \\"status\\": \\"\\",\\n      \\"user_name\\": \\"\\",\\n      \\"description\\": \\"\\",\\n      \\"default_drive_id\\": \\"\\",\\n      \\"user_data\\": {\\n        \\"key\\": \\"\\"\\n      },\\n      \\"creator\\": \\"\\",\\n      \\"punishments\\": [\\n        {\\n          \\"punish_flag\\": 0,\\n          \\"starts_at\\": \\"\\",\\n          \\"ends_at\\": \\"\\",\\n          \\"impermanent\\": true\\n        }\\n      ],\\n      \\"is_sync\\": true\\n    }\\n  ],\\n  \\"group_items\\": [\\n    {\\n      \\"domain_id\\": \\"\\",\\n      \\"group_id\\": \\"\\",\\n      \\"group_name\\": \\"\\",\\n      \\"description\\": \\"\\",\\n      \\"created_at\\": 0,\\n      \\"updated_at\\": 0,\\n      \\"creator\\": \\"\\",\\n      \\"is_sync\\": true\\n    }\\n  ],\\n  \\"next_marker\\": \\"NWQ1Yjk4YmI1ZDRlYmU1Y2E0YWE0NmJhYWJmODBhNDQ2NzhlMTRhM1\\"\\n}","type":"json"}]',
      'title' => '列举群组成员',
    ),
    'CreateUser' => 
    array (
      'summary' => '创建用户。',
      'path' => '/v2/user/create',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'https',
        1 => 'http',
      ),
      'tags' => 
      array (
        0 => 'api',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
        1 => 
        array (
          'BearerToken' => 
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
          'name' => 'domain_id',
          'in' => 'host',
          'schema' => 
          array (
            'type' => 'string',
            'required' => true,
          ),
        ),
        1 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '请求体参数。',
            'type' => 'object',
            'properties' => 
            array (
              'user_id' => 
              array (
                'title' => '用户id',
                'description' => '用户id，最长64字符，不能包含字符#',
                'type' => 'string',
                'required' => true,
                'example' => 'pdsuserid1',
                'maxLength' => 1024,
                'minLength' => 1,
              ),
              'nick_name' => 
              array (
                'title' => '用户昵称',
                'description' => '用户昵称，最长128字符',
                'type' => 'string',
                'required' => false,
                'example' => 'pdsuer',
                'maxLength' => 128,
                'minLength' => 0,
              ),
              'status' => 
              array (
                'title' => '用户状态',
                'description' => '用户状态，默认为enabled

- enabled（正常）

- disabled（禁止登录）',
                'type' => 'string',
                'required' => false,
                'example' => 'enabled',
                'default' => 'enabled',
                'enum' => 
                array (
                  0 => 'enabled',
                  1 => 'disabled',
                ),
              ),
              'role' => 
              array (
                'title' => '角色',
                'description' => '角色，默认为user

- superadmin（超级管理员）

- admin（管理员）

- user（普通用户）

如果当前domain支持subdomain。还可以支持 "subdomain\\_super_admin", "subdomain\\_admin”。',
                'type' => 'string',
                'required' => false,
                'enumValueTitles' => 
                array (
                  'subdomain_super_admin' => 'subdomain超级管理员',
                  'subdomain_admin' => 'subdomain管理员',
                  'superadmin' => '超级管理员',
                  'admin' => '管理员',
                  'user' => '普通用户',
                ),
                'example' => 'user',
                'default' => 'user',
                'enum' => 
                array (
                  0 => 'user',
                  1 => 'admin',
                  2 => 'superadmin',
                  3 => 'subdomain_admin',
                  4 => 'subdomain_super_admin',
                ),
              ),
              'avatar' => 
              array (
                'title' => '头像地址',
                'description' => '头像地址

http形式时，以http:// 或https:// 作为前缀，参数长度最长4KB

data形式时，以data://作为前缀，base64编码，参数长度最长300KB',
                'type' => 'string',
                'required' => false,
                'example' => 'http://a.b.c/pds.jpg',
              ),
              'phone' => 
              array (
                'title' => '电话',
                'description' => '电话',
                'type' => 'string',
                'required' => false,
                'example' => '13900001111',
              ),
              'email' => 
              array (
                'title' => '邮箱地址',
                'description' => '邮箱地址',
                'type' => 'string',
                'required' => false,
                'example' => '123@pds.com',
              ),
              'user_data' => 
              array (
                'description' => '用户自定义数据，最长1024字符',
                'type' => 'object',
                'required' => false,
                'additionalProperties' => 
                array (
                  'type' => 'any',
                ),
                'example' => 'md',
              ),
              'group_info_list' => 
              array (
                'description' => '群组信息',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'group_id' => 
                    array (
                      'description' => '群组id',
                      'type' => 'string',
                      'required' => false,
                      'example' => 'g123',
                    ),
                  ),
                  'required' => false,
                ),
                'required' => false,
              ),
              'user_name' => 
              array (
                'title' => '用户名',
                'description' => '用户名，最长128字符',
                'type' => 'string',
                'required' => false,
                'example' => 'pdsusername',
                'maxLength' => 128,
                'minLength' => 0,
              ),
              'description' => 
              array (
                'title' => '用户描述',
                'description' => '用户描述，最长1024字符',
                'type' => 'string',
                'required' => false,
                'example' => 'VIP用户',
                'maxLength' => 1024,
                'minLength' => 0,
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
            'title' => 'Schema of Response',
            'description' => '返回信息',
            'type' => 'object',
            'properties' => 
            array (
              'domain_id' => 
              array (
                'title' => '域id',
                'description' => '域id',
                'type' => 'string',
                'example' => 'bj1',
              ),
              'user_id' => 
              array (
                'title' => '用户id',
                'description' => '用户id',
                'type' => 'string',
                'example' => 'dingding_abc001',
              ),
              'avatar' => 
              array (
                'title' => '头像地址',
                'description' => '头像地址',
                'type' => 'string',
                'example' => 'http://aa.com/1.jpg',
              ),
              'created_at' => 
              array (
                'description' => '创建时间，格林威治时间1970年01月01日00时00分00秒起至现在的毫秒数',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '1639762579768',
              ),
              'updated_at' => 
              array (
                'description' => '修改时间，格林威治时间1970年01月01日00时00分00秒起至现在的毫秒数',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '1639762579768',
              ),
              'nick_name' => 
              array (
                'title' => '昵称',
                'description' => '昵称',
                'type' => 'string',
                'example' => '001',
              ),
              'user_name' => 
              array (
                'title' => '用户名',
                'description' => '用户名',
                'type' => 'string',
                'example' => 'pds',
              ),
              'phone' => 
              array (
                'title' => '电话',
                'description' => '电话',
                'type' => 'string',
                'example' => '13900001111',
              ),
              'email' => 
              array (
                'title' => '邮箱地址',
                'description' => '邮箱地址',
                'type' => 'string',
                'example' => 'a@a.com',
              ),
              'role' => 
              array (
                'title' => '角色',
                'description' => '角色

- superadmin（超级管理员）

- admin（管理员）

- user（普通用户）',
                'type' => 'string',
                'enumValueTitles' => 
                array (
                  'superadmin' => '超级管理员',
                  'admin' => '管理员',
                  'user' => '普通用户',
                ),
                'example' => 'admin',
              ),
              'status' => 
              array (
                'title' => '状态',
                'description' => '状态

- disabled（禁止）

- enabled（使能）',
                'type' => 'string',
                'enumValueTitles' => 
                array (
                  'disabled' => '禁止',
                  'enabled' => '使能',
                ),
                'example' => 'enabled',
              ),
              'description' => 
              array (
                'title' => '描述',
                'description' => '描述',
                'type' => 'string',
                'example' => 'vipuser',
              ),
              'default_drive_id' => 
              array (
                'title' => '缺省空间id',
                'description' => '缺省空间id',
                'type' => 'string',
                'example' => '1',
              ),
              'user_data' => 
              array (
                'description' => '用户自定义数据',
                'type' => 'object',
                'additionalProperties' => 
                array (
                  'type' => 'any',
                  'example' => 'dog',
                  'description' => '自定义项',
                ),
              ),
              'creator' => 
              array (
                'title' => '创建者',
                'description' => '创建者',
                'type' => 'string',
                'example' => 'user1',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"domain_id\\": \\"bj1\\",\\n  \\"user_id\\": \\"dingding_abc001\\",\\n  \\"avatar\\": \\"http://aa.com/1.jpg\\",\\n  \\"created_at\\": 1639762579768,\\n  \\"updated_at\\": 1639762579768,\\n  \\"nick_name\\": \\"001\\",\\n  \\"user_name\\": \\"pds\\",\\n  \\"phone\\": \\"13900001111\\",\\n  \\"email\\": \\"a@a.com\\",\\n  \\"role\\": \\"admin\\",\\n  \\"status\\": \\"enabled\\",\\n  \\"description\\": \\"vipuser\\",\\n  \\"default_drive_id\\": \\"1\\",\\n  \\"user_data\\": {\\n    \\"key\\": \\"dog\\"\\n  },\\n  \\"creator\\": \\"user1\\"\\n}","type":"json"}]',
      'title' => '创建用户',
    ),
    'ImportUser' => 
    array (
      'summary' => '导入用户。',
      'path' => '/v2/user/import',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'https',
      ),
      'tags' => 
      array (
        0 => 'api',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
        1 => 
        array (
          'BearerToken' => 
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
          'name' => 'domain_id',
          'in' => 'host',
          'schema' => 
          array (
            'type' => 'string',
            'required' => true,
          ),
        ),
        1 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '请求体参数。',
            'type' => 'object',
            'properties' => 
            array (
              'authentication_type' => 
              array (
                'description' => '认证类型

- mobile：手机号

- email：邮箱

- ding：钉钉

- ram：阿里云RAM子账号

- wechat：企业微信

- ldap：LDAP账号

- custom：自定义账号',
                'type' => 'string',
                'required' => true,
                'example' => 'mobile',
              ),
              'identity' => 
              array (
                'description' => '唯一身份标识',
                'type' => 'string',
                'required' => true,
                'example' => '130****',
              ),
              'authentication_display_name' => 
              array (
                'description' => '认证方式的显示名称',
                'type' => 'string',
                'required' => false,
                'example' => '10000',
              ),
              'extra' => 
              array (
                'description' => '额外信息

authentication\\_type为mobile时，此字段为国家编号，不填默认86。',
                'type' => 'string',
                'required' => false,
                'example' => '1',
              ),
              'nick_name' => 
              array (
                'description' => '昵称',
                'type' => 'string',
                'required' => true,
                'example' => 'pdsuer',
              ),
              'auto_create_drive' => 
              array (
                'description' => '自动创建空间',
                'type' => 'boolean',
                'required' => false,
                'example' => 'false',
              ),
              'drive_total_size' => 
              array (
                'description' => '空间大小，不能小于-1，-1表示无限制',
                'type' => 'integer',
                'format' => 'int64',
                'required' => false,
                'example' => '10240',
              ),
              'parent_group_id' => 
              array (
                'description' => '加入到的分组id',
                'type' => 'string',
                'required' => false,
                'example' => 'g12',
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
            'description' => '用户信息',
            '$ref' => '#/components/schemas/User',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"domain_id\\": \\"\\",\\n  \\"user_id\\": \\"\\",\\n  \\"avatar\\": \\"\\",\\n  \\"created_at\\": 0,\\n  \\"updated_at\\": 0,\\n  \\"email\\": \\"\\",\\n  \\"nick_name\\": \\"\\",\\n  \\"phone\\": \\"\\",\\n  \\"role\\": \\"\\",\\n  \\"status\\": \\"\\",\\n  \\"user_name\\": \\"\\",\\n  \\"description\\": \\"\\",\\n  \\"default_drive_id\\": \\"\\",\\n  \\"user_data\\": {\\n    \\"key\\": \\"\\"\\n  },\\n  \\"creator\\": \\"\\",\\n  \\"punishments\\": [\\n    {\\n      \\"punish_flag\\": 0,\\n      \\"starts_at\\": \\"\\",\\n      \\"ends_at\\": \\"\\",\\n      \\"impermanent\\": true\\n    }\\n  ],\\n  \\"is_sync\\": true\\n}","type":"json"}]',
      'title' => '导入用户',
    ),
    'UpdateUser' => 
    array (
      'summary' => '修改用户信息。',
      'path' => '/v2/user/update',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'https',
      ),
      'tags' => 
      array (
        0 => 'api',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
        1 => 
        array (
          'BearerToken' => 
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
          'name' => 'domain_id',
          'in' => 'host',
          'schema' => 
          array (
            'type' => 'string',
            'required' => true,
          ),
        ),
        1 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '请求体参数。',
            'type' => 'object',
            'properties' => 
            array (
              'user_id' => 
              array (
                'description' => '用户id，最长64字符，不能包含字符#',
                'type' => 'string',
                'required' => true,
                'example' => 'c9b7a5aa04d14ae3867fdc886fa01da4',
                'maxLength' => 1024,
                'minLength' => 1,
              ),
              'nick_name' => 
              array (
                'description' => '用户昵称，最长128字符',
                'type' => 'string',
                'required' => false,
                'example' => 'pdsuer',
                'maxLength' => 128,
                'minLength' => 0,
              ),
              'status' => 
              array (
                'description' => '用户状态

- disabled（禁止）

- enabled（使能）',
                'type' => 'string',
                'required' => false,
                'enumValueTitles' => 
                array (
                  'disabled' => '禁止',
                  'enabled' => '使能',
                ),
                'example' => 'enabled',
                'enum' => 
                array (
                  0 => 'enabled',
                  1 => 'disabled',
                ),
              ),
              'role' => 
              array (
                'description' => '角色

- superadmin（超级管理员）

- admin（管理员）

- user（普通用户）',
                'type' => 'string',
                'required' => false,
                'enumValueTitles' => 
                array (
                  'superadmin' => '超级管理员',
                  'admin' => '管理员',
                  'user' => '普通用户',
                ),
                'example' => 'user',
                'enum' => 
                array (
                  0 => 'user',
                  1 => 'admin',
                  2 => 'superadmin',
                  3 => 'subdomain_admin',
                  4 => 'subdomain_super_admin',
                ),
              ),
              'avatar' => 
              array (
                'description' => '头像地址

http形式时，以http:// 或https:// 作为前缀，参数长度最长4KB

data形式时，以data://作为前缀，base64编码，参数长度最长300KB',
                'type' => 'string',
                'required' => false,
                'example' => 'http://a.b.c/pds.jpg',
              ),
              'description' => 
              array (
                'description' => '描述信息，最长1024字符',
                'type' => 'string',
                'required' => false,
                'example' => 'vip用户',
                'maxLength' => 1024,
                'minLength' => 0,
              ),
              'phone' => 
              array (
                'description' => '手机号',
                'type' => 'string',
                'required' => false,
                'example' => '13900001111',
              ),
              'email' => 
              array (
                'description' => '邮箱',
                'type' => 'string',
                'required' => false,
                'example' => 'a@aliyunpds.com',
              ),
              'user_data' => 
              array (
                'description' => '用户自定义数据，最长1024字符',
                'type' => 'object',
                'required' => false,
                'additionalProperties' => 
                array (
                  'type' => 'string',
                  'example' => 'test',
                  'description' => '用户自定义数据',
                ),
              ),
              'group_info_list' => 
              array (
                'description' => '群组信息列表',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '群组信息',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'group_id' => 
                    array (
                      'description' => '群组id',
                      'type' => 'string',
                      'required' => false,
                      'example' => 'g123',
                    ),
                  ),
                  'required' => false,
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
            'description' => '用户信息',
            '$ref' => '#/components/schemas/User',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"domain_id\\": \\"\\",\\n  \\"user_id\\": \\"\\",\\n  \\"avatar\\": \\"\\",\\n  \\"created_at\\": 0,\\n  \\"updated_at\\": 0,\\n  \\"email\\": \\"\\",\\n  \\"nick_name\\": \\"\\",\\n  \\"phone\\": \\"\\",\\n  \\"role\\": \\"\\",\\n  \\"status\\": \\"\\",\\n  \\"user_name\\": \\"\\",\\n  \\"description\\": \\"\\",\\n  \\"default_drive_id\\": \\"\\",\\n  \\"user_data\\": {\\n    \\"key\\": \\"\\"\\n  },\\n  \\"creator\\": \\"\\",\\n  \\"punishments\\": [\\n    {\\n      \\"punish_flag\\": 0,\\n      \\"starts_at\\": \\"\\",\\n      \\"ends_at\\": \\"\\",\\n      \\"impermanent\\": true\\n    }\\n  ],\\n  \\"is_sync\\": true\\n}","type":"json"}]',
      'title' => '修改用户信息',
    ),
    'GetUser' => 
    array (
      'summary' => '获取用户信息。',
      'path' => '/v2/user/get',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'https',
      ),
      'tags' => 
      array (
        0 => 'api',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
        1 => 
        array (
          'BearerToken' => 
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
          'name' => 'domain_id',
          'in' => 'host',
          'schema' => 
          array (
            'type' => 'string',
            'required' => true,
          ),
        ),
        1 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '请求体参数。',
            'type' => 'object',
            'properties' => 
            array (
              'user_id' => 
              array (
                'description' => '用户id。
使用AK方式访问时，该项必传；使用AccessToken方式访问时，该项不填写，取自己的用户信息。',
                'type' => 'string',
                'required' => false,
                'example' => 'c9b7a5aa04d14ae3867fdc886fa01da4',
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
            'description' => '用户信息',
            '$ref' => '#/components/schemas/User',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"domain_id\\": \\"\\",\\n  \\"user_id\\": \\"\\",\\n  \\"avatar\\": \\"\\",\\n  \\"created_at\\": 0,\\n  \\"updated_at\\": 0,\\n  \\"email\\": \\"\\",\\n  \\"nick_name\\": \\"\\",\\n  \\"phone\\": \\"\\",\\n  \\"role\\": \\"\\",\\n  \\"status\\": \\"\\",\\n  \\"user_name\\": \\"\\",\\n  \\"description\\": \\"\\",\\n  \\"default_drive_id\\": \\"\\",\\n  \\"user_data\\": {\\n    \\"key\\": \\"\\"\\n  },\\n  \\"creator\\": \\"\\",\\n  \\"punishments\\": [\\n    {\\n      \\"punish_flag\\": 0,\\n      \\"starts_at\\": \\"\\",\\n      \\"ends_at\\": \\"\\",\\n      \\"impermanent\\": true\\n    }\\n  ],\\n  \\"is_sync\\": true\\n}","type":"json"}]',
      'title' => '获取用户信息',
    ),
    'ListUser' => 
    array (
      'summary' => '列举用户。',
      'path' => '/v2/user/list',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'https',
      ),
      'tags' => 
      array (
        0 => 'api',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
        1 => 
        array (
          'BearerToken' => 
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
          'name' => 'domain_id',
          'in' => 'host',
          'schema' => 
          array (
            'type' => 'string',
            'required' => true,
          ),
        ),
        1 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '请求体参数。',
            'type' => 'object',
            'properties' => 
            array (
              'marker' => 
              array (
                'description' => '设定结果从marker之后按字母排序的第一个开始返回。如果不设定，则从头开始返回数据。
默认值：无',
                'type' => 'string',
                'required' => false,
                'example' => 'NWQ1Yjk4YmI1ZDRlYmU1Y2E0YWE0NmJhYWJmODBhNDQ2NzhlMTRhMg',
              ),
              'limit' => 
              array (
                'description' => '查询数量，取值范围：1~100。默认值100',
                'type' => 'integer',
                'format' => 'int32',
                'required' => false,
                'example' => '100',
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
            'title' => 'Schema of Response',
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'next_marker' => 
              array (
                'title' => 'Id of the request',
                'description' => '下一页起始资源标识符, 最后一页该值为空',
                'type' => 'string',
                'example' => 'NWQ1Yjk4YmI1ZDRlYmU1Y2E0YWE0NmJhYWJmODBhNDQ2NzhlMTRhMg',
              ),
              'items' => 
              array (
                'description' => '用户信息列表',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '用户信息',
                  '$ref' => '#/components/schemas/User',
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"next_marker\\": \\"NWQ1Yjk4YmI1ZDRlYmU1Y2E0YWE0NmJhYWJmODBhNDQ2NzhlMTRhMg\\",\\n  \\"items\\": [\\n    {\\n      \\"domain_id\\": \\"\\",\\n      \\"user_id\\": \\"\\",\\n      \\"avatar\\": \\"\\",\\n      \\"created_at\\": 0,\\n      \\"updated_at\\": 0,\\n      \\"email\\": \\"\\",\\n      \\"nick_name\\": \\"\\",\\n      \\"phone\\": \\"\\",\\n      \\"role\\": \\"\\",\\n      \\"status\\": \\"\\",\\n      \\"user_name\\": \\"\\",\\n      \\"description\\": \\"\\",\\n      \\"default_drive_id\\": \\"\\",\\n      \\"user_data\\": {\\n        \\"key\\": \\"\\"\\n      },\\n      \\"creator\\": \\"\\",\\n      \\"punishments\\": [\\n        {\\n          \\"punish_flag\\": 0,\\n          \\"starts_at\\": \\"\\",\\n          \\"ends_at\\": \\"\\",\\n          \\"impermanent\\": true\\n        }\\n      ],\\n      \\"is_sync\\": true\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '列举用户',
    ),
    'SearchUser' => 
    array (
      'summary' => '搜索用户。',
      'path' => '/v2/user/search',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'https',
      ),
      'tags' => 
      array (
        0 => 'api',
      ),
      'security' => 
      array (
        0 => 
        array (
          'BearerToken' => 
          array (
          ),
        ),
        1 => 
        array (
          'AK' => 
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
          'name' => 'domain_id',
          'in' => 'host',
          'schema' => 
          array (
            'type' => 'string',
            'required' => true,
          ),
        ),
        1 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '请求body',
            'type' => 'object',
            'properties' => 
            array (
              'nick_name' => 
              array (
                'description' => '用户昵称，最长128字符',
                'type' => 'string',
                'required' => false,
                'example' => 'pdsuer',
                'maxLength' => 128,
                'minLength' => 0,
              ),
              'nick_name_for_fuzzy' => 
              array (
                'description' => '昵称-模糊搜索，最长128字符',
                'type' => 'string',
                'required' => false,
                'example' => 'la',
                'maxLength' => 128,
                'minLength' => 0,
              ),
              'user_name' => 
              array (
                'description' => '用户名称，最长128字符',
                'type' => 'string',
                'required' => false,
                'example' => 'pds',
                'maxLength' => 128,
                'minLength' => 0,
              ),
              'phone' => 
              array (
                'description' => '手机号',
                'type' => 'string',
                'required' => false,
                'example' => '13900001111',
              ),
              'email' => 
              array (
                'description' => '邮箱地址',
                'type' => 'string',
                'required' => false,
                'example' => '123@pds.com',
              ),
              'status' => 
              array (
                'description' => '用户状态

- disabled（禁止）

- enabled（使能）',
                'type' => 'string',
                'required' => false,
                'enumValueTitles' => 
                array (
                  'disabled' => '禁止',
                  'enabled' => '使能',
                ),
                'example' => 'enabled',
              ),
              'role' => 
              array (
                'description' => '角色

- superadmin（超级管理员）

- admin（管理员）

- user（用户）',
                'type' => 'string',
                'required' => false,
                'enumValueTitles' => 
                array (
                  'superadmin' => '超级管理员',
                  'admin' => '管理员',
                  'user' => '用户',
                ),
                'example' => 'user',
              ),
              'marker' => 
              array (
                'description' => '设定结果从marker之后按字母排序的第一个开始返回。如果不设定，则从头开始返回数据。
<br>默认值：无',
                'type' => 'string',
                'required' => false,
                'example' => 'NWQ1Yjk4YmI1ZDRlYmU1Y2E0YWE0NmJhYWJmODBhNDQ2NzhlMTRhMg',
              ),
              'limit' => 
              array (
                'description' => '限定此次返回资源的数量，取值范围为[1,100]，默认返回100',
                'type' => 'integer',
                'format' => 'int32',
                'required' => false,
                'example' => '100',
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
            'title' => 'Schema of Response',
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'next_marker' => 
              array (
                'title' => 'Id of the request',
                'description' => '下一页起始资源标识符, 最后一页该值为空',
                'type' => 'string',
                'example' => 'NWQ1Yjk4YmI1ZDRlYmU1Y2E0YWE0NmJhYWJmODBhNDQ2NzhlMTRhMg',
              ),
              'items' => 
              array (
                'description' => '用户信息列表',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '用户信息',
                  '$ref' => '#/components/schemas/User',
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"next_marker\\": \\"NWQ1Yjk4YmI1ZDRlYmU1Y2E0YWE0NmJhYWJmODBhNDQ2NzhlMTRhMg\\",\\n  \\"items\\": [\\n    {\\n      \\"domain_id\\": \\"\\",\\n      \\"user_id\\": \\"\\",\\n      \\"avatar\\": \\"\\",\\n      \\"created_at\\": 0,\\n      \\"updated_at\\": 0,\\n      \\"email\\": \\"\\",\\n      \\"nick_name\\": \\"\\",\\n      \\"phone\\": \\"\\",\\n      \\"role\\": \\"\\",\\n      \\"status\\": \\"\\",\\n      \\"user_name\\": \\"\\",\\n      \\"description\\": \\"\\",\\n      \\"default_drive_id\\": \\"\\",\\n      \\"user_data\\": {\\n        \\"key\\": \\"\\"\\n      },\\n      \\"creator\\": \\"\\",\\n      \\"punishments\\": [\\n        {\\n          \\"punish_flag\\": 0,\\n          \\"starts_at\\": \\"\\",\\n          \\"ends_at\\": \\"\\",\\n          \\"impermanent\\": true\\n        }\\n      ],\\n      \\"is_sync\\": true\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '搜索用户',
    ),
    'DeleteUser' => 
    array (
      'summary' => '删除用户。',
      'path' => '/v2/user/delete',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'https',
      ),
      'tags' => 
      array (
        0 => 'api',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
        1 => 
        array (
          'BearerToken' => 
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
          'name' => 'domain_id',
          'in' => 'host',
          'schema' => 
          array (
            'type' => 'string',
            'required' => true,
          ),
        ),
        1 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '请求体参数。',
            'type' => 'object',
            'properties' => 
            array (
              'user_id' => 
              array (
                'description' => '用户id',
                'type' => 'string',
                'required' => true,
                'example' => 'c9b7a5aa04d14ae3867fdc886fa01da4',
              ),
            ),
            'required' => true,
          ),
        ),
      ),
      'responses' => 
      array (
        204 => 
        array (
          'headers' => 
          array (
          ),
          'schema' => 
          array (
            'title' => 'Schema of Response',
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{}","type":"json"}]',
      'title' => '删除用户',
    ),
    'CreateDrive' => 
    array (
      'summary' => '创建空间。',
      'path' => '/v2/drive/create',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'tags' => 
      array (
        0 => 'api',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
        1 => 
        array (
          'BearerToken' => 
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
        'operationType' => 'create',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'domain_id',
          'in' => 'host',
          'schema' => 
          array (
            'type' => 'string',
            'required' => true,
          ),
        ),
        1 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '请求体。',
            'type' => 'object',
            'properties' => 
            array (
              'drive_name' => 
              array (
                'description' => '空间名称，最长 128 字符',
                'type' => 'string',
                'required' => true,
                'example' => '我的个人空间',
                'maxLength' => 1024,
                'minLength' => 1,
              ),
              'owner' => 
              array (
                'description' => '归属者',
                'type' => 'string',
                'required' => true,
                'example' => '3b3d7245c159488da17d081ad6c64687',
              ),
              'owner_type' => 
              array (
                'description' => '归属者类型，可选值如下：

user：用户
group：团队',
                'type' => 'string',
                'required' => true,
                'enumValueTitles' => 
                array (
                  'user' => 'user',
                  'group' => 'group',
                ),
                'example' => 'user',
                'enum' => 
                array (
                  0 => 'user',
                  1 => 'group',
                ),
              ),
              'description' => 
              array (
                'description' => '描述信息，最长 1024 字符',
                'type' => 'string',
                'required' => false,
                'example' => 'vip空间',
                'maxLength' => 1024,
              ),
              'drive_type' => 
              array (
                'description' => '空间类型，当前只支持 normal',
                'type' => 'string',
                'required' => false,
                'enumValueTitles' => 
                array (
                  'normal' => 'normal',
                ),
                'example' => 'normal',
                'default' => 'normal',
                'enum' => 
                array (
                ),
              ),
              'status' => 
              array (
                'description' => '状态，可选值如下：

enabled：可用
disabled：禁用

默认为 enabled',
                'type' => 'string',
                'required' => false,
                'enumValueTitles' => 
                array (
                  'disabled' => 'disabled',
                  'enabled' => 'enabled',
                ),
                'example' => 'enabled',
                'default' => 'enabled',
                'enum' => 
                array (
                  0 => 'enabled',
                  1 => 'disabled',
                ),
              ),
              'total_size' => 
              array (
                'description' => '总大小，单位为字节，默认不限大小',
                'type' => 'integer',
                'format' => 'int64',
                'required' => false,
                'example' => '1024',
              ),
              'default' => 
              array (
                'description' => '是否是默认空间，默认为 false',
                'type' => 'boolean',
                'required' => false,
                'example' => 'true',
                'default' => 'false',
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
            'title' => 'Schema of Response',
            'description' => '返回信息',
            'type' => 'object',
            'properties' => 
            array (
              'domain_id' => 
              array (
                'title' => 'Id of the request',
                'description' => '域id',
                'type' => 'string',
                'example' => 'bj1',
              ),
              'drive_id' => 
              array (
                'description' => '空间id',
                'type' => 'string',
                'example' => '1',
              ),
              'drive_name' => 
              array (
                'type' => 'string',
              ),
              'description' => 
              array (
                'type' => 'string',
              ),
              'owner' => 
              array (
                'type' => 'string',
              ),
              'owner_type' => 
              array (
                'type' => 'string',
              ),
              'drive_type' => 
              array (
                'type' => 'string',
              ),
              'used_size' => 
              array (
                'type' => 'integer',
                'format' => 'int64',
              ),
              'total_size' => 
              array (
                'type' => 'integer',
                'format' => 'int64',
              ),
              'creator' => 
              array (
                'type' => 'string',
              ),
              'created_at' => 
              array (
                'type' => 'string',
              ),
              'status' => 
              array (
                'type' => 'string',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"domain_id\\": \\"bj1\\",\\n  \\"drive_id\\": \\"1\\",\\n  \\"drive_name\\": \\"\\",\\n  \\"description\\": \\"\\",\\n  \\"owner\\": \\"\\",\\n  \\"owner_type\\": \\"\\",\\n  \\"drive_type\\": \\"\\",\\n  \\"used_size\\": 0,\\n  \\"total_size\\": 0,\\n  \\"creator\\": \\"\\",\\n  \\"created_at\\": \\"\\",\\n  \\"status\\": \\"\\"\\n}","type":"json"}]',
      'title' => '创建空间',
    ),
    'UpdateDrive' => 
    array (
      'summary' => '修改空间信息。',
      'path' => '/v2/drive/update',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'https',
      ),
      'tags' => 
      array (
        0 => 'api',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
        1 => 
        array (
          'BearerToken' => 
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
          'name' => 'domain_id',
          'in' => 'host',
          'schema' => 
          array (
            'type' => 'string',
            'required' => true,
          ),
        ),
        1 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '请求体',
            'type' => 'object',
            'properties' => 
            array (
              'drive_id' => 
              array (
                'description' => '空间 id',
                'type' => 'string',
                'required' => true,
                'example' => '1',
              ),
              'drive_name' => 
              array (
                'description' => '空间名称，最长 128 字符',
                'type' => 'string',
                'required' => false,
                'example' => '我的个人空间',
                'maxLength' => 128,
              ),
              'description' => 
              array (
                'description' => '描述，最长 1024 字符',
                'type' => 'string',
                'required' => false,
                'example' => 'vip空间',
                'maxLength' => 1024,
              ),
              'status' => 
              array (
                'description' => '空间状态，可选值如下：

enabled：可用
disabled：禁用',
                'type' => 'string',
                'required' => false,
                'enumValueTitles' => 
                array (
                  'disabled' => '禁止',
                  'enabled' => '使能',
                ),
                'example' => 'enabled',
                'enum' => 
                array (
                  0 => 'enabled',
                  1 => 'disabled',
                ),
              ),
              'total_size' => 
              array (
                'description' => '总大小，单位为字节，不限制大小时填 -1',
                'type' => 'integer',
                'format' => 'int64',
                'required' => false,
                'example' => '10240',
              ),
              'owner' => 
              array (
                'description' => '归属者
注意，当前只允许通过 ak 来修改个人 drive 的所有者。',
                'type' => 'string',
                'required' => false,
                'example' => 'user1',
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
            'description' => 'Schema of Response',
            '$ref' => '#/components/schemas/Drive',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"domain_id\\": \\"\\",\\n  \\"drive_id\\": \\"\\",\\n  \\"drive_name\\": \\"\\",\\n  \\"description\\": \\"\\",\\n  \\"owner\\": \\"\\",\\n  \\"owner_type\\": \\"\\",\\n  \\"drive_type\\": \\"\\",\\n  \\"status\\": \\"\\",\\n  \\"used_size\\": 0,\\n  \\"total_size\\": 0,\\n  \\"created_at\\": \\"\\",\\n  \\"creator\\": \\"\\"\\n}","type":"json"}]',
      'title' => '修改空间信息',
    ),
    'GetDrive' => 
    array (
      'summary' => '获取空间信息。',
      'path' => '/v2/drive/get',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'https',
      ),
      'tags' => 
      array (
        0 => 'api',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
        1 => 
        array (
          'BearerToken' => 
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
          'name' => 'domain_id',
          'in' => 'host',
          'schema' => 
          array (
            'type' => 'string',
            'required' => true,
          ),
        ),
        1 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '请求体参数。',
            'type' => 'object',
            'properties' => 
            array (
              'drive_id' => 
              array (
                'description' => '空间 id',
                'type' => 'string',
                'required' => true,
                'example' => '1',
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
            'description' => 'Schema of Response',
            '$ref' => '#/components/schemas/Drive',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"domain_id\\": \\"\\",\\n  \\"drive_id\\": \\"\\",\\n  \\"drive_name\\": \\"\\",\\n  \\"description\\": \\"\\",\\n  \\"owner\\": \\"\\",\\n  \\"owner_type\\": \\"\\",\\n  \\"drive_type\\": \\"\\",\\n  \\"status\\": \\"\\",\\n  \\"used_size\\": 0,\\n  \\"total_size\\": 0,\\n  \\"created_at\\": \\"\\",\\n  \\"creator\\": \\"\\"\\n}","type":"json"}]',
      'title' => '获取空间信息',
    ),
    'ListDrive' => 
    array (
      'summary' => '列举空间。',
      'path' => '/v2/drive/list',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'https',
      ),
      'tags' => 
      array (
        0 => 'api',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
        1 => 
        array (
          'BearerToken' => 
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
          'name' => 'domain_id',
          'in' => 'host',
          'schema' => 
          array (
            'type' => 'string',
            'required' => true,
          ),
        ),
        1 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '请求体参数。',
            'type' => 'object',
            'properties' => 
            array (
              'limit' => 
              array (
                'description' => '限定此次返回资源的数量，范围为 [1,100]，默认返回100',
                'type' => 'integer',
                'format' => 'int32',
                'required' => false,
                'maximum' => '100',
                'minimum' => '0',
                'exclusiveMinimum' => true,
                'example' => '100',
                'default' => '100',
              ),
              'marker' => 
              array (
                'description' => '设定结果从marker之后按字母排序的第一个开始返回。如果不设定，则从头开始返回数据。
默认值：无',
                'type' => 'string',
                'required' => false,
                'example' => 'NWQ1Yjk4YmI1ZDRlYmU1Y2E0YWE0NmJhYWJmODBhNDQ2NzhlMTRhMg',
              ),
              'owner' => 
              array (
                'description' => '归属者，不设置时返回所有 drive',
                'type' => 'string',
                'required' => false,
                'example' => 'c9b7a5aa04d14ae3867fdc886fa01da4',
              ),
              'owner_type' => 
              array (
                'description' => '归属者类型，可选值如下：

user：用户
group：团队

默认返回所有归属者类型的 drive',
                'type' => 'string',
                'required' => false,
                'example' => 'user',
                'enum' => 
                array (
                  0 => 'user',
                  1 => 'group',
                ),
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
            'title' => 'Schema of Response',
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'items' => 
              array (
                'description' => '空间信息列表',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '空间信息',
                  '$ref' => '#/components/schemas/Drive',
                ),
              ),
              'next_marker' => 
              array (
                'description' => '下一页起始资源标识符, 最后一页该值为空。',
                'type' => 'string',
                'example' => 'NWQ1Yjk4YmI1ZDRlYmU1Y2E0YWE0NmJhYWJmODBhNDQ2NzhlMTRhMg',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"items\\": [\\n    {\\n      \\"domain_id\\": \\"\\",\\n      \\"drive_id\\": \\"\\",\\n      \\"drive_name\\": \\"\\",\\n      \\"description\\": \\"\\",\\n      \\"owner\\": \\"\\",\\n      \\"owner_type\\": \\"\\",\\n      \\"drive_type\\": \\"\\",\\n      \\"status\\": \\"\\",\\n      \\"used_size\\": 0,\\n      \\"total_size\\": 0,\\n      \\"created_at\\": \\"\\",\\n      \\"creator\\": \\"\\"\\n    }\\n  ],\\n  \\"next_marker\\": \\"NWQ1Yjk4YmI1ZDRlYmU1Y2E0YWE0NmJhYWJmODBhNDQ2NzhlMTRhMg\\"\\n}","type":"json"}]',
      'title' => '列举空间',
    ),
    'GetDefaultDrive' => 
    array (
      'summary' => '获取指定用户的缺省空间。',
      'path' => '/v2/drive/get_default_drive',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'https',
      ),
      'tags' => 
      array (
        0 => 'api',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
        1 => 
        array (
          'BearerToken' => 
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
          'name' => 'domain_id',
          'in' => 'host',
          'schema' => 
          array (
            'type' => 'string',
            'required' => true,
          ),
        ),
        1 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '请求体参数。',
            'type' => 'object',
            'properties' => 
            array (
              'user_id' => 
              array (
                'description' => '用户 id，AK 访问时必填，AccessToken 访问时可选（默认取 AccessToken 关联的用户 id）',
                'type' => 'string',
                'required' => false,
                'example' => 'c9b7a5aa04d14ae3867fdc886fa01da4',
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
            'description' => 'Schema of Response',
            '$ref' => '#/components/schemas/Drive',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"domain_id\\": \\"\\",\\n  \\"drive_id\\": \\"\\",\\n  \\"drive_name\\": \\"\\",\\n  \\"description\\": \\"\\",\\n  \\"owner\\": \\"\\",\\n  \\"owner_type\\": \\"\\",\\n  \\"drive_type\\": \\"\\",\\n  \\"status\\": \\"\\",\\n  \\"used_size\\": 0,\\n  \\"total_size\\": 0,\\n  \\"created_at\\": \\"\\",\\n  \\"creator\\": \\"\\"\\n}","type":"json"}]',
      'title' => '获取缺省空间',
    ),
    'ListMyDrives' => 
    array (
      'summary' => '列举登录用户自己的空间列表。',
      'path' => '/v2/drive/list_my_drives',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
        1 => 
        array (
          'BearerToken' => 
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
          'name' => 'domain_id',
          'in' => 'host',
          'schema' => 
          array (
            'type' => 'string',
            'required' => true,
          ),
        ),
        1 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '请求体参数。',
            'type' => 'object',
            'properties' => 
            array (
              'limit' => 
              array (
                'description' => '限制返回的数量。默认为100，取值范围：1~100。',
                'type' => 'integer',
                'format' => 'int32',
                'required' => false,
                'maximum' => '100',
                'minimum' => '0',
                'exclusiveMinimum' => true,
                'example' => '100',
                'default' => '100',
              ),
              'marker' => 
              array (
                'description' => '设定结果从marker之后按字母排序的第一个开始返回。如果不设定，则从头开始返回数据。
默认值：无',
                'type' => 'string',
                'required' => false,
                'example' => 'NWQ1Yjk4YmI1ZDRlYmU1Y2E0YWE0NmJhYWJmODBhNDQ2NzhlMTRhMg
',
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
            'title' => 'Schema of Response',
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'items' => 
              array (
                'description' => '空间信息列表',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '空间信息',
                  '$ref' => '#/components/schemas/Drive',
                ),
              ),
              'next_marker' => 
              array (
                'description' => '下一页起始资源标识符, 最后一页该值为空。',
                'type' => 'string',
                'example' => 'NWQ1Yjk4YmI1ZDRlYmU1Y2E0YWE0NmJhYWJmODBhNDQ2NzhlMTRhMg',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"items\\": [\\n    {\\n      \\"domain_id\\": \\"\\",\\n      \\"drive_id\\": \\"\\",\\n      \\"drive_name\\": \\"\\",\\n      \\"description\\": \\"\\",\\n      \\"owner\\": \\"\\",\\n      \\"owner_type\\": \\"\\",\\n      \\"drive_type\\": \\"\\",\\n      \\"status\\": \\"\\",\\n      \\"used_size\\": 0,\\n      \\"total_size\\": 0,\\n      \\"created_at\\": \\"\\",\\n      \\"creator\\": \\"\\"\\n    }\\n  ],\\n  \\"next_marker\\": \\"NWQ1Yjk4YmI1ZDRlYmU1Y2E0YWE0NmJhYWJmODBhNDQ2NzhlMTRhMg\\"\\n}","type":"json"}]',
      'title' => '列举我的空间',
    ),
    'SearchDrive' => 
    array (
      'summary' => '搜索空间。',
      'path' => '/v2/drive/search',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'https',
      ),
      'tags' => 
      array (
        0 => 'api',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
        1 => 
        array (
          'BearerToken' => 
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
          'name' => 'domain_id',
          'in' => 'host',
          'schema' => 
          array (
            'type' => 'string',
            'required' => true,
          ),
        ),
        1 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '请求体参数。',
            'type' => 'object',
            'properties' => 
            array (
              'drive_name' => 
              array (
                'description' => '空间名称',
                'type' => 'string',
                'required' => false,
                'example' => '我的个人空间',
              ),
              'limit' => 
              array (
                'description' => '异步调用的返回个数。默认返回100个，取值范围\\[1,100]。',
                'type' => 'integer',
                'format' => 'int32',
                'required' => false,
                'maximum' => '100',
                'minimum' => '0',
                'exclusiveMinimum' => true,
                'example' => '100',
                'default' => '100',
              ),
              'marker' => 
              array (
                'description' => '设定结果从marker之后按字母排序的第一个开始返回。如果不设定，则从头开始返回数据。
<br>默认值：无',
                'type' => 'string',
                'required' => false,
                'example' => 'NWQ1Yjk4YmI1ZDRlYmU1Y2E0YWE0NmJhYWJmODBhNDQ2NzhlMTRhMg',
              ),
              'owner' => 
              array (
                'description' => '归属者',
                'type' => 'string',
                'required' => false,
                'example' => 'c9b7a5aa04d14ae3867fdc886fa01da4',
              ),
              'owner_type' => 
              array (
                'description' => '归属者类型，可选值如下：

user：用户
group：团队',
                'type' => 'string',
                'required' => false,
                'example' => 'user',
                'enum' => 
                array (
                  0 => 'user',
                  1 => 'group',
                ),
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
            'title' => 'Schema of Response',
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'items' => 
              array (
                'description' => '空间信息列表',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '空间信息',
                  '$ref' => '#/components/schemas/Drive',
                ),
              ),
              'next_marker' => 
              array (
                'description' => '下一页起始资源标识符, 最后一页该值为空。',
                'type' => 'string',
                'example' => 'NWQ1Yjk4YmI1ZDRlYmU1Y2E0YWE0NmJhYWJmODBhNDQ2NzhlMTRhMg',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"items\\": [\\n    {\\n      \\"domain_id\\": \\"\\",\\n      \\"drive_id\\": \\"\\",\\n      \\"drive_name\\": \\"\\",\\n      \\"description\\": \\"\\",\\n      \\"owner\\": \\"\\",\\n      \\"owner_type\\": \\"\\",\\n      \\"drive_type\\": \\"\\",\\n      \\"status\\": \\"\\",\\n      \\"used_size\\": 0,\\n      \\"total_size\\": 0,\\n      \\"created_at\\": \\"\\",\\n      \\"creator\\": \\"\\"\\n    }\\n  ],\\n  \\"next_marker\\": \\"NWQ1Yjk4YmI1ZDRlYmU1Y2E0YWE0NmJhYWJmODBhNDQ2NzhlMTRhMg\\"\\n}","type":"json"}]',
      'title' => '搜索空间',
    ),
    'DeleteDrive' => 
    array (
      'summary' => '删除空间。',
      'path' => '/v2/drive/delete',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'https',
      ),
      'tags' => 
      array (
        0 => 'api',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
        1 => 
        array (
          'BearerToken' => 
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
          'name' => 'domain_id',
          'in' => 'host',
          'schema' => 
          array (
            'type' => 'string',
            'required' => true,
          ),
        ),
        1 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '请求体参数。',
            'type' => 'object',
            'properties' => 
            array (
              'drive_id' => 
              array (
                'description' => '空间id',
                'type' => 'string',
                'required' => true,
                'example' => '1',
              ),
            ),
            'required' => false,
          ),
        ),
      ),
      'responses' => 
      array (
        204 => 
        array (
          'schema' => 
          array (
            'title' => 'Schema of Response',
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{}","type":"json"}]',
      'title' => '删除空间',
    ),
    'CreateFile' => 
    array (
      'summary' => '创建文件或文件夹。',
      'path' => '/v2/file/create',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'https',
      ),
      'tags' => 
      array (
        0 => 'api',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
        1 => 
        array (
          'BearerToken' => 
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
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'domain_id',
          'in' => 'host',
          'schema' => 
          array (
            'type' => 'string',
            'required' => true,
          ),
        ),
        1 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '请求体参数。',
            'type' => 'object',
            'properties' => 
            array (
              'name' => 
              array (
                'title' => '文件或文件夹名称',
                'description' => '文件名称，按照 utf8 编码最长 1024 字节，不能以 / 结尾',
                'type' => 'string',
                'required' => true,
                'example' => 'a.txt',
                'maxLength' => 1024,
                'minLength' => 1,
              ),
              'type' => 
              array (
                'title' => '类型',
                'description' => '文件类型，可选值如下：

file：文件
folder：文件夹',
                'type' => 'string',
                'required' => true,
                'example' => 'file',
                'enum' => 
                array (
                  0 => 'file',
                  1 => 'folder',
                ),
              ),
              'parent_file_id' => 
              array (
                'title' => '父文件夹id',
                'description' => '父目录id，上传到根目录时填写 root',
                'type' => 'string',
                'required' => true,
                'example' => 'fileid1',
              ),
              'drive_id' => 
              array (
                'title' => '用户空间id',
                'description' => '空间 id，除通过分享链接上传之外，必填',
                'type' => 'string',
                'required' => false,
                'example' => '1',
                'pattern' => '^[0-9]*$',
              ),
              'share_id' => 
              array (
                'title' => '共享id',
                'description' => '分享 id，当通过分享链接上传时必填',
                'type' => 'string',
                'required' => false,
                'example' => '7JQX1FswpQ8',
              ),
              'size' => 
              array (
                'title' => '文件大小',
                'description' => '文件大小，单位为 byte。',
                'type' => 'integer',
                'format' => 'int64',
                'required' => false,
                'example' => '1024',
              ),
              'content_type' => 
              array (
                'title' => '文件类型',
                'description' => '文件内容类型，默认值 application/oct-stream<props="china">，常见的 content_type 可以参考 OSS [《如何设置Content-Type（MIME）？》](https://help.aliyun.com/document_detail/39522.htm?spm=a2c4g.11186623.0.0.5a0b7dbb1TPnWF#concept-5041)。</props>',
                'type' => 'string',
                'required' => false,
                'example' => 'application/json',
              ),
              'part_info_list' => 
              array (
                'description' => '分片信息列表，最多 10000 个分片，当不填时，默认返回 1 个分片',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '分片信息',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'part_number' => 
                    array (
                      'description' => '分片序列号，从 1 开始',
                      'type' => 'integer',
                      'format' => 'int32',
                      'required' => false,
                      'example' => '1',
                    ),
                    'parallel_sha1_ctx' => 
                    array (
                      'description' => '该分片前所有数据的SHA1上下文，该字段只在多分片并发上传的模式下有效',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'h' => 
                        array (
                          'description' => '该分片前所有数据的SHA1上下文的第1-5个32位变量，该字段只在多分片并发上传的模式下有效',
                          'type' => 'array',
                          'items' => 
                          array (
                            'description' => '该分片前所有数据的SHA1上下文的第1-5个32位变量',
                            'type' => 'integer',
                            'format' => 'int64',
                            'required' => false,
                            'example' => '1',
                          ),
                          'required' => false,
                        ),
                        'part_offset' => 
                        array (
                          'description' => '到上一个数据块为止的总长度，字节，需要为64的倍数，该字段只在多分片并发上传的模式下有效',
                          'type' => 'integer',
                          'format' => 'int64',
                          'required' => false,
                          'example' => '10240',
                        ),
                      ),
                      'required' => false,
                    ),
                    'content_md5' => 
                    array (
                      'description' => '分片的 MD5, 需要在上传分片时校验分片的MD5时填写。',
                      'type' => 'string',
                      'deprecated' => false,
                      'required' => false,
                      'example' => 'ASKJDJSKDJJSJDJS',
                    ),
                  ),
                  'required' => false,
                ),
                'required' => false,
              ),
              'user_tags' => 
              array (
                'title' => '用户打标',
                'description' => '用户自定义 tag，最多 1000 个 tag',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '用户自定义 tag',
                  'required' => false,
                  '$ref' => '#/components/schemas/UserTag',
                ),
                'required' => false,
              ),
              'hidden' => 
              array (
                'description' => '是否隐藏，默认不隐藏',
                'type' => 'boolean',
                'required' => false,
                'example' => 'false',
                'default' => 'false',
              ),
              'description' => 
              array (
                'title' => '描述信息',
                'description' => '文件描述信息，最长 1024 字符，默认为空',
                'type' => 'string',
                'required' => false,
                'example' => '团队文件',
                'maxLength' => 1024,
              ),
              'content_hash' => 
              array (
                'title' => '内容hash',
                'description' => '文件内容 hash 值，需要根据 content_hash_name 指定的算法计算',
                'type' => 'string',
                'required' => false,
                'example' => '7C4A8D09CA3762AF61E59520943DC26494F8941B',
              ),
              'content_hash_name' => 
              array (
                'title' => '内容hash算法名',
                'description' => '文件内容hash算法名，当前只支持 sha1',
                'type' => 'string',
                'required' => false,
                'example' => 'sha1',
                'enum' => 
                array (
                  0 => 'sha1',
                ),
              ),
              'pre_hash' => 
              array (
                'description' => '使用预秒传功能时填写，为文件前1KB sha1值，当远端没有匹配上时，客户端无需再计算文件完整 sha1 去尝试秒传。',
                'type' => 'string',
                'required' => false,
                'example' => '7C4A8D09CA3762AF61E59520943DC26494F89411',
              ),
              'check_name_mode' => 
              array (
                'title' => '重命名模式',
                'description' => '同名文件处理模式，可选值如下：

ignore：允许同名文件；

auto_rename：当发现同名文件是，云端自动重命名，默认为追加当前时间点，如 xxx _20060102_150405；

refuse：当云端存在同名文件时，拒绝创建新文件，返回客户端已存在同名文件的详细信息。

默认为 ignore',
                'type' => 'string',
                'required' => false,
                'enumValueTitles' => 
                array (
                  'refuse' => 'refuse',
                  'auto_rename' => 'auto_rename',
                  'ignore' => 'ignore',
                ),
                'example' => 'ignore',
                'enum' => 
                array (
                  0 => 'ignore',
                  1 => 'auto_rename',
                  2 => 'refuse',
                ),
              ),
              'file_id' => 
              array (
                'title' => '文件id',
                'description' => '文件id，覆盖写时必填',
                'type' => 'string',
                'required' => false,
                'example' => '9520943DC264',
              ),
              'local_created_at' => 
              array (
                'title' => '文件本地创建时间',
                'description' => '文件本地创建时间，默认为空，格式为：yyyy-MM-ddTHH:mm:ssZ，采用 UTC +0 时区',
                'type' => 'string',
                'required' => false,
                'example' => '2019-08-20T06:51:27.292Z',
              ),
              'local_modified_at' => 
              array (
                'title' => '本地文件修改时间',
                'description' => '文件本地修改时间，默认为空，格式为：yyyy-MM-ddTHH:mm:ssZ，采用 UTC +0 时区',
                'type' => 'string',
                'required' => false,
                'example' => '2019-08-20T06:51:27.292Z',
              ),
              'image_media_metadata' => 
              array (
                'description' => '客户端指定的图片信息',
                'required' => false,
                '$ref' => '#/components/schemas/ImageMediaMetadata',
              ),
              'video_media_metadata' => 
              array (
                'description' => '客户端指定的视频信息',
                'required' => false,
                '$ref' => '#/components/schemas/VideoMediaMetadata',
              ),
              'parallel_upload' => 
              array (
                'description' => '是否开启并行上传分片功能',
                'type' => 'boolean',
                'required' => false,
                'example' => 'true',
                'default' => 'false',
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
            'title' => 'Schema of Response',
            'description' => '返回信息',
            'type' => 'object',
            'properties' => 
            array (
              'parent_file_id' => 
              array (
                'title' => '父目录文件id',
                'description' => '父目录id',
                'type' => 'string',
                'example' => 'fileid5',
              ),
              'part_info_list' => 
              array (
                'title' => '分段信息',
                'description' => '分段信息列表',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '分段信息',
                  '$ref' => '#/components/schemas/UploadPartInfo',
                ),
              ),
              'upload_id' => 
              array (
                'title' => '上传id',
                'description' => '上传id',
                'type' => 'string',
                'example' => 'uploadid1',
              ),
              'rapid_upload' => 
              array (
                'title' => '是否已经秒传',
                'description' => '是否已经秒传',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'type' => 
              array (
                'description' => '文件类型',
                'type' => 'string',
                'example' => 'file',
              ),
              'file_id' => 
              array (
                'title' => '文件id',
                'description' => '文件id',
                'type' => 'string',
                'example' => 'fileid1',
              ),
              'domain_id' => 
              array (
                'title' => '域id',
                'description' => '域id',
                'type' => 'string',
                'example' => 'bj1',
              ),
              'drive_id' => 
              array (
                'title' => '空间id',
                'description' => '空间id',
                'type' => 'string',
                'example' => '1',
              ),
              'file_name' => 
              array (
                'title' => '文件名',
                'description' => '文件名',
                'type' => 'string',
                'example' => 'a.txt',
              ),
              'status' => 
              array (
                'title' => '文件状态',
                'description' => '文件状态',
                'type' => 'string',
                'example' => 'uploading',
              ),
              'exist' => 
              array (
                'title' => '文件是否存在',
                'description' => '文件是否存在',
                'type' => 'boolean',
                'example' => 'false',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"parent_file_id\\": \\"fileid5\\",\\n  \\"part_info_list\\": [\\n    {\\n      \\"part_number\\": 1,\\n      \\"part_size\\": 1024,\\n      \\"upload_url\\": \\"\\",\\n      \\"internal_upload_url\\": \\"\\",\\n      \\"etag\\": \\"0CC175B9C0F1B6A831C399E269772661\\",\\n      \\"parallel_sha1_ctx\\": {\\n        \\"h\\": [\\n          0\\n        ],\\n        \\"part_offset\\": 0\\n      },\\n      \\"upload_form_info\\": {\\n        \\"bucket_name\\": \\"\\",\\n        \\"oss_end_point\\": \\"\\",\\n        \\"object_key\\": \\"\\",\\n        \\"oss_access_key_id\\": \\"\\",\\n        \\"oss_security_token\\": \\"\\",\\n        \\"policy\\": \\"\\",\\n        \\"signature\\": \\"\\",\\n        \\"endpoint\\": \\"\\",\\n        \\"form_data\\": {\\n          \\"key\\": \\"\\"\\n        }\\n      },\\n      \\"internal_upload_form_info\\": {\\n        \\"bucket_name\\": \\"\\",\\n        \\"oss_end_point\\": \\"\\",\\n        \\"object_key\\": \\"\\",\\n        \\"oss_access_key_id\\": \\"\\",\\n        \\"oss_security_token\\": \\"\\",\\n        \\"policy\\": \\"\\",\\n        \\"signature\\": \\"\\",\\n        \\"endpoint\\": \\"\\",\\n        \\"form_data\\": {\\n          \\"key\\": \\"\\"\\n        }\\n      },\\n      \\"signature_info\\": {\\n        \\"auth_type\\": \\"\\",\\n        \\"signature\\": \\"\\",\\n        \\"sts_token\\": \\"\\"\\n      },\\n      \\"parallel_sha256_ctx\\": {\\n        \\"h\\": [\\n          0\\n        ],\\n        \\"part_offset\\": 0\\n      }\\n    }\\n  ],\\n  \\"upload_id\\": \\"uploadid1\\",\\n  \\"rapid_upload\\": true,\\n  \\"type\\": \\"file\\",\\n  \\"file_id\\": \\"fileid1\\",\\n  \\"domain_id\\": \\"bj1\\",\\n  \\"drive_id\\": \\"1\\",\\n  \\"file_name\\": \\"a.txt\\",\\n  \\"status\\": \\"uploading\\",\\n  \\"exist\\": false\\n}","type":"json"}]',
      'title' => '创建文件或文件夹',
      'description' => '<props="china">文件创建使用方法参考最佳实践：[文件上传](~~175888~~)。</props>',
    ),
    'DeleteFile' => 
    array (
      'summary' => '删除文件或文件夹。',
      'path' => '/v2/file/delete',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'https',
      ),
      'tags' => 
      array (
        0 => 'api',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
        1 => 
        array (
          'BearerToken' => 
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
        'riskType' => 'high',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'domain_id',
          'in' => 'host',
          'schema' => 
          array (
            'type' => 'string',
            'required' => true,
          ),
        ),
        1 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '请求体参数。',
            'type' => 'object',
            'properties' => 
            array (
              'drive_id' => 
              array (
                'title' => 'drive id 如果要删除drive下的文件时，drive_id时必需的参数',
                'description' => '空间id',
                'type' => 'string',
                'required' => true,
                'example' => '1',
                'pattern' => '^[0-9]*$',
              ),
              'file_id' => 
              array (
                'title' => 'file_id是文件的唯一标识，删除文件或者目录时必须指定file_id',
                'description' => '文件或文件夹id',
                'type' => 'string',
                'required' => true,
                'example' => '9520943DC264',
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
            'type' => 'object',
            'properties' => 
            array (
              'domain_id' => 
              array (
                'description' => '域id',
                'type' => 'string',
                'example' => 'bj1',
              ),
              'drive_id' => 
              array (
                'description' => '空间id',
                'type' => 'string',
                'example' => '1',
              ),
              'file_id' => 
              array (
                'description' => '文件id',
                'type' => 'string',
                'example' => '9520943DC264',
              ),
              'async_task_id' => 
              array (
                'description' => '异步任务id，只有异步处理的场景才会返回。后续可以调用 [GetAsyncTask](~~440456~~)，传递异步任务 id，获取任务信息。',
                'type' => 'string',
                'example' => '000e89fb-cf8f-11e9-8ab4-b6e980803a3b',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"domain_id\\": \\"bj1\\",\\n  \\"drive_id\\": \\"1\\",\\n  \\"file_id\\": \\"9520943DC264\\",\\n  \\"async_task_id\\": \\"000e89fb-cf8f-11e9-8ab4-b6e980803a3b\\"\\n}","type":"json"}]',
      'title' => '删除文件或文件夹',
    ),
    'UpdateFile' => 
    array (
      'summary' => '修改文件信息，非数据。',
      'path' => '/v2/file/update',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'https',
      ),
      'tags' => 
      array (
        0 => 'api',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
        1 => 
        array (
          'BearerToken' => 
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
        'operationType' => 'update',
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'domain_id',
          'in' => 'host',
          'schema' => 
          array (
            'type' => 'string',
            'required' => true,
          ),
        ),
        1 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '请求体参数。',
            'type' => 'object',
            'properties' => 
            array (
              'drive_id' => 
              array (
                'description' => '空间 id',
                'type' => 'string',
                'required' => true,
                'example' => '1',
              ),
              'file_id' => 
              array (
                'description' => '文件 id',
                'type' => 'string',
                'required' => true,
                'example' => '9520943DC264',
              ),
              'name' => 
              array (
                'description' => '文件名称，按照 utf8 编码规则最长 1024 字节',
                'type' => 'string',
                'required' => false,
                'example' => 'a.jpg',
                'maxLength' => 102,
                'minLength' => 1,
              ),
              'description' => 
              array (
                'description' => '文件描述信息，最长 1024 字符',
                'type' => 'string',
                'required' => false,
                'example' => 'VIP用户',
                'maxLength' => 1024,
              ),
              'labels' => 
              array (
                'description' => '标签列表，最多 100 个标签',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '标签，最长 128 字符',
                  'type' => 'string',
                  'required' => false,
                  'example' => '动物',
                ),
                'required' => false,
                'maxItems' => 100,
              ),
              'check_name_mode' => 
              array (
                'description' => '同名文件处理模式，可选值如下：

ignore：允许同名文件；

auto_rename：当发现同名文件时，云端自动重命名，默认为追加当前时间点，如 xxx\\_20060102\\_150405；

refuse：当云端存在同名文件时，拒绝创建新文件，返回客户端已存在同名文件的详细信息。

默认为 ignore',
                'type' => 'string',
                'required' => false,
                'enumValueTitles' => 
                array (
                  'refuse' => 'refuse',
                  'auto_rename' => 'auto_rename',
                  'ignore' => 'ignore',
                ),
                'example' => 'ignore',
                'enum' => 
                array (
                  0 => 'ignore',
                  1 => 'auto_rename',
                  2 => 'refuse',
                ),
              ),
              'local_modified_at' => 
              array (
                'description' => '文件本地修改时间，格式为：yyyy-MM-ddTHH:mm:ssZ，采用 UTC +0 时区',
                'type' => 'string',
                'required' => false,
                'example' => '2019-08-20T06:51:27.292Z',
              ),
              'hidden' => 
              array (
                'description' => '是否隐藏',
                'type' => 'boolean',
                'required' => false,
                'example' => 'true',
              ),
              'starred' => 
              array (
                'description' => '是否收藏',
                'type' => 'boolean',
                'required' => false,
                'example' => 'true',
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
            'description' => '文件信息',
            '$ref' => '#/components/schemas/File',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"domain_id\\": \\"\\",\\n  \\"drive_id\\": \\"\\",\\n  \\"file_id\\": \\"\\",\\n  \\"name\\": \\"\\",\\n  \\"type\\": \\"\\",\\n  \\"content_type\\": \\"\\",\\n  \\"created_at\\": \\"\\",\\n  \\"updated_at\\": \\"\\",\\n  \\"description\\": \\"\\",\\n  \\"trashed_at\\": \\"\\",\\n  \\"file_extension\\": \\"\\",\\n  \\"mime_type\\": \\"\\",\\n  \\"mime_extension\\": \\"\\",\\n  \\"hidden\\": true,\\n  \\"size\\": 0,\\n  \\"starred\\": true,\\n  \\"status\\": \\"\\",\\n  \\"user_meta\\": \\"\\",\\n  \\"labels\\": [\\n    \\"\\"\\n  ],\\n  \\"upload_id\\": \\"\\",\\n  \\"parent_file_id\\": \\"\\",\\n  \\"crc64_hash\\": \\"\\",\\n  \\"content_hash\\": \\"\\",\\n  \\"content_hash_name\\": \\"\\",\\n  \\"download_url\\": \\"\\",\\n  \\"thumbnail\\": \\"\\",\\n  \\"category\\": \\"\\",\\n  \\"local_created_at\\": \\"\\",\\n  \\"local_modified_at\\": \\"\\",\\n  \\"revision_id\\": \\"\\",\\n  \\"investigation_info\\": {\\n    \\"status\\": 0,\\n    \\"suggestion\\": \\"\\"\\n  },\\n  \\"thumbnail_urls\\": {\\n    \\"key\\": \\"\\"\\n  },\\n  \\"image_media_metadata\\": {\\n    \\"time\\": \\"2006-01-02T15:04:05.000Z07:00\\",\\n    \\"width\\": 1920,\\n    \\"height\\": 1080,\\n    \\"location\\": \\"30.185453,120.218522\\",\\n    \\"country\\": \\"中国\\",\\n    \\"province\\": \\"浙江省\\",\\n    \\"city\\": \\"杭州市\\",\\n    \\"district\\": \\"滨江区\\",\\n    \\"township\\": \\"西兴街道\\",\\n    \\"address_line\\": \\"浙江省杭州市滨江区西兴街道江陵路\\",\\n    \\"image_tags\\": [\\n      {\\n        \\"confidence\\": 0.98,\\n        \\"parent_name\\": \\"运动\\",\\n        \\"name\\": \\"篮球\\",\\n        \\"tag_level\\": 3,\\n        \\"source\\": \\"一起打篮球\\",\\n        \\"centric_score\\": 0.877\\n      }\\n    ],\\n    \\"faces\\": \\"[{\\\\\\"FaceId\\\\\\":\\\\\\"a9a66a86-73dd-4c95-8b79-1d8a49db5226\\\\\\",\\\\\\"GroupId\\\\\\":\\\\\\"Cluster-e3b7fb52-22b3-44f2-9746-8c1804bd6af0\\\\\\",\\\\\\"FaceConfidence\\\\\\":0.999,\\\\\\"Age\\\\\\":13,\\\\\\"AgeConfidence\\\\\\":4,\\\\\\"Gender\\\\\\":\\\\\\"female\\\\\\",\\\\\\"GenderConfidence\\\\\\":1,\\\\\\"Emotion\\\\\\":\\\\\\"none\\\\\\",\\\\\\"EmotionConfidence\\\\\\":0.672,\\\\\\"FaceAttributes\\\\\\":{\\\\\\"Mask\\\\\\":\\\\\\"none\\\\\\",\\\\\\"MaskConfidence\\\\\\":0.894,\\\\\\"Beard\\\\\\":\\\\\\"none\\\\\\",\\\\\\"BeardConfidence\\\\\\":0.997,\\\\\\"Glasses\\\\\\":\\\\\\"none\\\\\\",\\\\\\"GlassesConfidence\\\\\\":0.999,\\\\\\"Mouth\\\\\\":\\\\\\"close\\\\\\",\\\\\\"MouthConfidence\\\\\\":0.937,\\\\\\"Hat\\\\\\":\\\\\\"none\\\\\\",\\\\\\"HatConfidence\\\\\\":0.998,\\\\\\"HeadPose\\\\\\":{\\\\\\"Pitch\\\\\\":10.684,\\\\\\"Roll\\\\\\":-10.707,\\\\\\"Yaw\\\\\\":-20.094},\\\\\\"FaceBoundary\\\\\\":{\\\\\\"Width\\\\\\":457,\\\\\\"Height\\\\\\":687,\\\\\\"Top\\\\\\":1324,\\\\\\"Left\\\\\\":1356}}}]\\",\\n    \\"faces_thumbnail\\": [\\n      {\\n        \\"face_id\\": \\"a9a66a86-73dd-4c95-8b79-1d8a49db5226\\",\\n        \\"face_group_id\\": \\"Cluster-e3b7fb52-22b3-44f2-9746-8c1804bd6af0\\",\\n        \\"face_thumbnail\\": \\"https://pds-domain.region.aliyuncs.com/QieGeH98%2F1001%2F63e5e551ee621482ab934a0687c6cda75fc07864%2F642a8a40c00f1ad379df421694713ee65170f09b?security-token=CAIS%2BgF1q6Ft5B2yfSjIr5bjHPCNnrdR8aSaSW7woVlmVd1Bt5HorDz2IHpPfHdoBe0btvU%2BlWxX6fwZlq5rR4QAXlDfNSyFeX20qFHPWZHInuDox55m4cTXNAr%2BIhr%2F29CoEIedZdjBe%2FCrRknZnytou9XTfimjWFrXWv%2Fgy%2BQQDLItUxK%2FcCBNCfpPOwJms7V6D3bKMuu3OROY6Qi5TmgQ41En1DIlt%2FXuk5DCtkqB12eXkLFF%2B97DRbG%2FdNRpMZtFVNO44fd7bKKp0lQLsUMSqv8q0fEcqGaW4o7CWQJLnzyCMvvJ9OVDFyN0aKEnH7J%2Bq%2FzxhTPrMnpkSlacGoABPMvZ8rSESUEP96Vbf%2Bk0JRg9Qb1MnaIJqWAgo8K6K0UP1CtqL2zrUtugpKKDHOYiKbq2O0S5yLUPVX5vBHqEi%2FFc7i6ZnHCMcXLJs4rKDKwRBEhovUXXlklq2q43OSVtLrXkBy9Xs1ers%2FhJhcxpNA0Vl3EWfJxa2BTylEdnLOQ%3D&x-oss-access-key-id=STS.NUVWJ9shpFfqKHAEY3YRmXTCN&x-oss-expires=1686455451&x-oss-process=image%2Fcrop%2Cx_1128%2Cy_1211%2Cw_914%2Ch_914%2Fformat%2Cjpg&x-oss-signature=jmhOz91Tww1ciMEwadDiioU7d93FDiBNr8s8mHyMqW0%3D&x-oss-signature-version=OSS2\\"\\n      }\\n    ],\\n    \\"exif\\": \\"{\\\\\\"Compression\\\\\\":{\\\\\\"value\\\\\\":\\\\\\"6\\\\\\"},\\\\\\"DateTime\\\\\\":{\\\\\\"value\\\\\\":\\\\\\"2020:08:19 17:11:11\\\\\\"}}\\",\\n    \\"image_quality\\": {\\n      \\"overall_score\\": 0.736\\n    }\\n  },\\n  \\"ex_fields_info\\": {\\n    \\"key\\": \\"\\"\\n  },\\n  \\"content_uri\\": \\"\\",\\n  \\"streams_info\\": {\\n    \\"key\\": {\\n      \\"crc64_hash\\": \\"\\",\\n      \\"size\\": 0,\\n      \\"content_hash\\": \\"\\",\\n      \\"content_hash_name\\": \\"\\",\\n      \\"download_url\\": \\"\\",\\n      \\"url\\": \\"\\",\\n      \\"thumbnail\\": \\"\\"\\n    }\\n  },\\n  \\"user_tags\\": {\\n    \\"key\\": \\"\\"\\n  },\\n  \\"revision_version\\": 0,\\n  \\"video_media_metadata\\": {\\n    \\"time\\": \\"2006-01-02T15:04:05.000Z07:00\\",\\n    \\"width\\": 1920,\\n    \\"height\\": 1080,\\n    \\"location\\": \\"30.185453,120.218522\\",\\n    \\"country\\": \\"中国\\",\\n    \\"province\\": \\"浙江省\\",\\n    \\"city\\": \\"杭州市\\",\\n    \\"district\\": \\"滨江区\\",\\n    \\"township\\": \\"西兴街道\\",\\n    \\"address_line\\": \\"浙江省杭州市滨江区西兴街道江陵路\\",\\n    \\"video_media_video_stream\\": [\\n      {\\n        \\"duration\\": \\"22.88\\",\\n        \\"bitrate\\": \\"108420\\",\\n        \\"code_name\\": \\"h264\\",\\n        \\"frame_count\\": \\"90\\"\\n      }\\n    ],\\n    \\"video_media_audio_stream\\": [\\n      {\\n        \\"duration\\": \\"7704.573000\\",\\n        \\"bit_rate\\": \\"129280\\",\\n        \\"code_name\\": \\"aac\\"\\n      }\\n    ]\\n  },\\n  \\"punish_flag\\": 0,\\n  \\"id_path\\": \\"\\",\\n  \\"name_path\\": \\"\\",\\n  \\"creator_type\\": \\"\\",\\n  \\"creator_id\\": \\"\\",\\n  \\"creator_name\\": \\"\\",\\n  \\"last_modifier_type\\": \\"\\",\\n  \\"last_modifier_id\\": \\"\\",\\n  \\"last_modifier_name\\": \\"\\",\\n  \\"dir_size_info\\": {\\n    \\"dir_count\\": 0,\\n    \\"file_count\\": 0\\n  },\\n  \\"trashed\\": true\\n}","type":"json"}]',
      'title' => '修改文件信息',
    ),
    'SearchFile' => 
    array (
      'summary' => '搜索文件。',
      'path' => '/v2/file/search',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'https',
      ),
      'tags' => 
      array (
        0 => 'api',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
        1 => 
        array (
          'BearerToken' => 
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
        'operationType' => 'list',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'domain_id',
          'in' => 'host',
          'schema' => 
          array (
            'type' => 'string',
            'required' => true,
          ),
        ),
        1 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '请求体参数。',
            'type' => 'object',
            'properties' => 
            array (
              'drive_id' => 
              array (
                'description' => '空间 id',
                'type' => 'string',
                'required' => false,
                'example' => '1',
              ),
              'query' => 
              array (
                'description' => '搜索条件，可以根据文件名或目录名模糊查询，最长 4096 字符',
                'type' => 'string',
                'required' => true,
                'example' => 'name="123"',
                'maxLength' => 4096,
              ),
              'order_by' => 
              array (
                'description' => '排序字段，默认根据 created_at 排序，可选值如下：
- created\\_at：根据创建时间排序
- updated\\_at：根据更新时间排序
- size：根据文件大小排序
- name：根据文件名排序


排序方向，可选值如下：
- ASC代表正序
- DESC代表逆序


order\\_by语法为：字段名+空格+ASC/DESC，如果多个字段排序则需要用逗号隔开，前面的规则优先级高。如：
- 按名称正序：name ASC
- 按创建时间逆序： created_at DESC
- 先按创建时间逆序，如果创建时间相同，则按名称正序：created_at DESC,name ASC',
                'type' => 'string',
                'required' => false,
                'enumValueTitles' => 
                array (
                ),
                'example' => 'name ASC',
                'enum' => 
                array (
                  0 => 'name',
                  1 => 'type',
                  2 => 'created_at',
                  3 => 'updated_at',
                  4 => 'size',
                  5 => 'image_time',
                  6 => 'last_access_at',
                  7 => 'custom_type',
                  8 => 'custom_field_1',
                  9 => 'custom_field_2',
                  10 => 'image_overall_score',
                ),
              ),
              'limit' => 
              array (
                'description' => '限定此次返回资源的数量，取值范围\\[1,100\\]。

返回结果可以小于指定的数量，但不能多于指定的数量。',
                'type' => 'integer',
                'format' => 'int32',
                'required' => false,
                'maximum' => '100',
                'minimum' => '1',
                'example' => '50',
                'default' => '50',
              ),
              'marker' => 
              array (
                'description' => '设定结果从marker之后按字母排序的第一个开始返回。如果不设定，则从头开始返回数据。
<br>默认值：无',
                'type' => 'string',
                'required' => false,
                'example' => 'NWQ1Yjk4YmI1ZDRlYmU1Y2E0YWE0NmJhYWJmODBhNDQ2NzhlMTRhMg',
              ),
              'return_total_count' => 
              array (
                'description' => '是否返回检索到的文件总数。',
                'type' => 'boolean',
                'required' => false,
                'example' => 'true',
              ),
              'fields' => 
              array (
                'type' => 'string',
                'deprecated' => true,
                'required' => false,
                'example' => 'url,thumbnail',
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
            'title' => 'Schema of Response',
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'items' => 
              array (
                'description' => '文件信息列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '文件信息',
                  '$ref' => '#/components/schemas/File',
                ),
              ),
              'next_marker' => 
              array (
                'description' => '下一页起始资源标识符, 最后一页该值为空。',
                'type' => 'string',
                'example' => 'NWQ1Yjk4YmI1ZDRlYmU1Y2E0YWE0NmJhYWJmODBhNDQ2NzhlMTRhMg',
              ),
              'total_count' => 
              array (
                'description' => '命中的文件总数',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '1022',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"items\\": [\\n    {\\n      \\"domain_id\\": \\"\\",\\n      \\"drive_id\\": \\"\\",\\n      \\"file_id\\": \\"\\",\\n      \\"name\\": \\"\\",\\n      \\"type\\": \\"\\",\\n      \\"content_type\\": \\"\\",\\n      \\"created_at\\": \\"\\",\\n      \\"updated_at\\": \\"\\",\\n      \\"description\\": \\"\\",\\n      \\"trashed_at\\": \\"\\",\\n      \\"file_extension\\": \\"\\",\\n      \\"mime_type\\": \\"\\",\\n      \\"mime_extension\\": \\"\\",\\n      \\"hidden\\": true,\\n      \\"size\\": 0,\\n      \\"starred\\": true,\\n      \\"status\\": \\"\\",\\n      \\"user_meta\\": \\"\\",\\n      \\"labels\\": [\\n        \\"\\"\\n      ],\\n      \\"upload_id\\": \\"\\",\\n      \\"parent_file_id\\": \\"\\",\\n      \\"crc64_hash\\": \\"\\",\\n      \\"content_hash\\": \\"\\",\\n      \\"content_hash_name\\": \\"\\",\\n      \\"download_url\\": \\"\\",\\n      \\"thumbnail\\": \\"\\",\\n      \\"category\\": \\"\\",\\n      \\"local_created_at\\": \\"\\",\\n      \\"local_modified_at\\": \\"\\",\\n      \\"revision_id\\": \\"\\",\\n      \\"investigation_info\\": {\\n        \\"status\\": 0,\\n        \\"suggestion\\": \\"\\"\\n      },\\n      \\"thumbnail_urls\\": {\\n        \\"key\\": \\"\\"\\n      },\\n      \\"image_media_metadata\\": {\\n        \\"time\\": \\"2006-01-02T15:04:05.000Z07:00\\",\\n        \\"width\\": 1920,\\n        \\"height\\": 1080,\\n        \\"location\\": \\"30.185453,120.218522\\",\\n        \\"country\\": \\"中国\\",\\n        \\"province\\": \\"浙江省\\",\\n        \\"city\\": \\"杭州市\\",\\n        \\"district\\": \\"滨江区\\",\\n        \\"township\\": \\"西兴街道\\",\\n        \\"address_line\\": \\"浙江省杭州市滨江区西兴街道江陵路\\",\\n        \\"image_tags\\": [\\n          {\\n            \\"confidence\\": 0.98,\\n            \\"parent_name\\": \\"运动\\",\\n            \\"name\\": \\"篮球\\",\\n            \\"tag_level\\": 3,\\n            \\"source\\": \\"一起打篮球\\",\\n            \\"centric_score\\": 0.877\\n          }\\n        ],\\n        \\"faces\\": \\"[{\\\\\\"FaceId\\\\\\":\\\\\\"a9a66a86-73dd-4c95-8b79-1d8a49db5226\\\\\\",\\\\\\"GroupId\\\\\\":\\\\\\"Cluster-e3b7fb52-22b3-44f2-9746-8c1804bd6af0\\\\\\",\\\\\\"FaceConfidence\\\\\\":0.999,\\\\\\"Age\\\\\\":13,\\\\\\"AgeConfidence\\\\\\":4,\\\\\\"Gender\\\\\\":\\\\\\"female\\\\\\",\\\\\\"GenderConfidence\\\\\\":1,\\\\\\"Emotion\\\\\\":\\\\\\"none\\\\\\",\\\\\\"EmotionConfidence\\\\\\":0.672,\\\\\\"FaceAttributes\\\\\\":{\\\\\\"Mask\\\\\\":\\\\\\"none\\\\\\",\\\\\\"MaskConfidence\\\\\\":0.894,\\\\\\"Beard\\\\\\":\\\\\\"none\\\\\\",\\\\\\"BeardConfidence\\\\\\":0.997,\\\\\\"Glasses\\\\\\":\\\\\\"none\\\\\\",\\\\\\"GlassesConfidence\\\\\\":0.999,\\\\\\"Mouth\\\\\\":\\\\\\"close\\\\\\",\\\\\\"MouthConfidence\\\\\\":0.937,\\\\\\"Hat\\\\\\":\\\\\\"none\\\\\\",\\\\\\"HatConfidence\\\\\\":0.998,\\\\\\"HeadPose\\\\\\":{\\\\\\"Pitch\\\\\\":10.684,\\\\\\"Roll\\\\\\":-10.707,\\\\\\"Yaw\\\\\\":-20.094},\\\\\\"FaceBoundary\\\\\\":{\\\\\\"Width\\\\\\":457,\\\\\\"Height\\\\\\":687,\\\\\\"Top\\\\\\":1324,\\\\\\"Left\\\\\\":1356}}}]\\",\\n        \\"faces_thumbnail\\": [\\n          {\\n            \\"face_id\\": \\"a9a66a86-73dd-4c95-8b79-1d8a49db5226\\",\\n            \\"face_group_id\\": \\"Cluster-e3b7fb52-22b3-44f2-9746-8c1804bd6af0\\",\\n            \\"face_thumbnail\\": \\"https://pds-domain.region.aliyuncs.com/QieGeH98%2F1001%2F63e5e551ee621482ab934a0687c6cda75fc07864%2F642a8a40c00f1ad379df421694713ee65170f09b?security-token=CAIS%2BgF1q6Ft5B2yfSjIr5bjHPCNnrdR8aSaSW7woVlmVd1Bt5HorDz2IHpPfHdoBe0btvU%2BlWxX6fwZlq5rR4QAXlDfNSyFeX20qFHPWZHInuDox55m4cTXNAr%2BIhr%2F29CoEIedZdjBe%2FCrRknZnytou9XTfimjWFrXWv%2Fgy%2BQQDLItUxK%2FcCBNCfpPOwJms7V6D3bKMuu3OROY6Qi5TmgQ41En1DIlt%2FXuk5DCtkqB12eXkLFF%2B97DRbG%2FdNRpMZtFVNO44fd7bKKp0lQLsUMSqv8q0fEcqGaW4o7CWQJLnzyCMvvJ9OVDFyN0aKEnH7J%2Bq%2FzxhTPrMnpkSlacGoABPMvZ8rSESUEP96Vbf%2Bk0JRg9Qb1MnaIJqWAgo8K6K0UP1CtqL2zrUtugpKKDHOYiKbq2O0S5yLUPVX5vBHqEi%2FFc7i6ZnHCMcXLJs4rKDKwRBEhovUXXlklq2q43OSVtLrXkBy9Xs1ers%2FhJhcxpNA0Vl3EWfJxa2BTylEdnLOQ%3D&x-oss-access-key-id=STS.NUVWJ9shpFfqKHAEY3YRmXTCN&x-oss-expires=1686455451&x-oss-process=image%2Fcrop%2Cx_1128%2Cy_1211%2Cw_914%2Ch_914%2Fformat%2Cjpg&x-oss-signature=jmhOz91Tww1ciMEwadDiioU7d93FDiBNr8s8mHyMqW0%3D&x-oss-signature-version=OSS2\\"\\n          }\\n        ],\\n        \\"exif\\": \\"{\\\\\\"Compression\\\\\\":{\\\\\\"value\\\\\\":\\\\\\"6\\\\\\"},\\\\\\"DateTime\\\\\\":{\\\\\\"value\\\\\\":\\\\\\"2020:08:19 17:11:11\\\\\\"}}\\",\\n        \\"image_quality\\": {\\n          \\"overall_score\\": 0.736\\n        }\\n      },\\n      \\"ex_fields_info\\": {\\n        \\"key\\": \\"\\"\\n      },\\n      \\"content_uri\\": \\"\\",\\n      \\"streams_info\\": {\\n        \\"key\\": {\\n          \\"crc64_hash\\": \\"\\",\\n          \\"size\\": 0,\\n          \\"content_hash\\": \\"\\",\\n          \\"content_hash_name\\": \\"\\",\\n          \\"download_url\\": \\"\\",\\n          \\"url\\": \\"\\",\\n          \\"thumbnail\\": \\"\\"\\n        }\\n      },\\n      \\"user_tags\\": {\\n        \\"key\\": \\"\\"\\n      },\\n      \\"revision_version\\": 0,\\n      \\"video_media_metadata\\": {\\n        \\"time\\": \\"2006-01-02T15:04:05.000Z07:00\\",\\n        \\"width\\": 1920,\\n        \\"height\\": 1080,\\n        \\"location\\": \\"30.185453,120.218522\\",\\n        \\"country\\": \\"中国\\",\\n        \\"province\\": \\"浙江省\\",\\n        \\"city\\": \\"杭州市\\",\\n        \\"district\\": \\"滨江区\\",\\n        \\"township\\": \\"西兴街道\\",\\n        \\"address_line\\": \\"浙江省杭州市滨江区西兴街道江陵路\\",\\n        \\"video_media_video_stream\\": [\\n          {\\n            \\"duration\\": \\"22.88\\",\\n            \\"bitrate\\": \\"108420\\",\\n            \\"code_name\\": \\"h264\\",\\n            \\"frame_count\\": \\"90\\"\\n          }\\n        ],\\n        \\"video_media_audio_stream\\": [\\n          {\\n            \\"duration\\": \\"7704.573000\\",\\n            \\"bit_rate\\": \\"129280\\",\\n            \\"code_name\\": \\"aac\\"\\n          }\\n        ]\\n      },\\n      \\"punish_flag\\": 0,\\n      \\"id_path\\": \\"\\",\\n      \\"name_path\\": \\"\\",\\n      \\"creator_type\\": \\"\\",\\n      \\"creator_id\\": \\"\\",\\n      \\"creator_name\\": \\"\\",\\n      \\"last_modifier_type\\": \\"\\",\\n      \\"last_modifier_id\\": \\"\\",\\n      \\"last_modifier_name\\": \\"\\",\\n      \\"dir_size_info\\": {\\n        \\"dir_count\\": 0,\\n        \\"file_count\\": 0\\n      },\\n      \\"trashed\\": true\\n    }\\n  ],\\n  \\"next_marker\\": \\"NWQ1Yjk4YmI1ZDRlYmU1Y2E0YWE0NmJhYWJmODBhNDQ2NzhlMTRhMg\\",\\n  \\"total_count\\": 1022\\n}","type":"json"}]',
      'title' => '搜索文件',
      'description' => '<props="china">最佳实践可参考：[搜索文件](https://help.aliyun.com/document_detail/175890.html)。</props>',
    ),
    'ListFile' => 
    array (
      'summary' => '直接文件夹下列举文件和文件夹。',
      'path' => '/v2/file/list',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'https',
      ),
      'tags' => 
      array (
        0 => 'api',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
        1 => 
        array (
          'BearerToken' => 
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
          'name' => 'domain_id',
          'in' => 'host',
          'schema' => 
          array (
            'type' => 'string',
            'required' => true,
          ),
        ),
        1 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '请求体参数。',
            'type' => 'object',
            'properties' => 
            array (
              'share_id' => 
              array (
                'description' => '分享id。
如果通过分享操作文件，请携带`x-share-token` header鉴权并传递此字段，此时`drive_id`无效。否则请使用`aksk`或者`access_token`方式鉴权，并传递`drive_id`字段。
`share_id`和`drive_id`两者必须有一个字段赋值。',
                'type' => 'string',
                'required' => false,
                'example' => '7JQX1FswpQ8',
              ),
              'drive_id' => 
              array (
                'description' => '空间 id。',
                'type' => 'string',
                'required' => false,
                'example' => '1',
              ),
              'parent_file_id' => 
              array (
                'description' => '父文件夹 id，当父文件为根目录时，填写 root',
                'type' => 'string',
                'required' => true,
                'example' => 'root',
              ),
              'limit' => 
              array (
                'description' => '限定此次返回资源的数量，取值范围\\[1,100\\]。

返回结果可以小于指定的数量，但不能多于指定的数量。',
                'type' => 'integer',
                'format' => 'int32',
                'required' => false,
                'example' => '50',
              ),
              'marker' => 
              array (
                'description' => '设定结果从marker之后按字母排序的第一个开始返回。如果不设定，则从头开始返回数据。
<br>默认值：无',
                'type' => 'string',
                'required' => false,
                'example' => 'NWQ1Yjk4YmI1ZDRlYmU1Y2E0YWE0NmJhYWJmODBhNDQ2NzhlMTRhMg',
              ),
              'status' => 
              array (
                'description' => '文件状态，可选字段如下：

available：只返回正常文件
uploading：只返回上传中文件

默认只返回 available 状态文件',
                'type' => 'string',
                'required' => false,
                'enumValueTitles' => 
                array (
                  'available' => '正常',
                  'uploading' => '上传中',
                ),
                'example' => 'available',
                'enum' => 
                array (
                  0 => 'uploading',
                  1 => 'available',
                ),
              ),
              'order_by' => 
              array (
                'description' => '排序字段，可选值如下：

created\\_at：根据创建时间排序
updated\\_at：根据更新时间排序
size：根据文件大小排序
name：根据文件名排序

默认根据 created_at 排序',
                'type' => 'string',
                'required' => false,
                'enumValueTitles' => 
                array (
                  'updated_at' => '修改时间',
                  'size' => '大小',
                  'name' => '名称',
                  'created_at' => '创建时间',
                ),
                'example' => 'updated_at',
              ),
              'order_direction' => 
              array (
                'description' => '排序方向，可选字段为：

ASC：正序
DESC：倒序

默认值为ASC',
                'type' => 'string',
                'required' => false,
                'enumValueTitles' => 
                array (
                  'ASC' => '正序',
                  'DESC' => '倒序',
                ),
                'example' => 'ASC',
                'enum' => 
                array (
                  0 => 'ASC',
                  1 => 'DESC',
                ),
              ),
              'category' => 
              array (
                'description' => '文件分类，可选字段如下：

app：安装包
zip：压缩包
image：图片
doc：文档
video：视频
audio：音频
others：其他

默认返回所有分类文件',
                'type' => 'string',
                'required' => false,
                'enumValueTitles' => 
                array (
                  'app' => 'app',
                  'zip' => 'zip',
                  'image' => 'image',
                  'doc' => 'doc',
                  'video' => 'video',
                  'audio' => 'audio',
                  'others' => 'others',
                ),
                'example' => 'image',
                'enum' => 
                array (
                  0 => 'image',
                  1 => 'video',
                  2 => 'audio',
                  3 => 'doc',
                  4 => 'app',
                  5 => 'zip',
                  6 => 'others',
                ),
              ),
              'type' => 
              array (
                'description' => '文件类型，可选字段如下：

file：只返回文件
folder：只返回文件夹

默认返回所有类型文件',
                'type' => 'string',
                'required' => false,
                'enumValueTitles' => 
                array (
                  'file' => '文件',
                  'folder' => '文件夹',
                ),
                'example' => 'file',
                'enum' => 
                array (
                  0 => 'file',
                  1 => 'folder',
                ),
              ),
              'fields' => 
              array (
                'description' => '筛选返回字段：

1. 当填 * 时，返回文件所有字段（必须在请求中填写的除外）；
2. 当只需要特定字段时，可填写为：url、exif、cropping\\_suggestion、characteristic\\_hash、video\\_metadata、video\\_preview_metadata，当需要多个字段时，以逗号 , 分割，如 url, exif;
3. 必须填写investigation_info字符串，才会在响应中返回investigation_info字段。

默认返回所有字段（必须进行填写的除外）',
                'type' => 'string',
                'required' => false,
                'example' => '*',
              ),
              'thumbnail_processes' => 
              array (
                'description' => '缩略图配置，可一次性返回最多5个缩略图，map的key可以自定义，返回时按key返回对应的缩略图链接',
                'type' => 'object',
                'required' => false,
                'additionalProperties' => 
                array (
                  '$ref' => '#/components/schemas/ImageProcess',
                  'description' => '定义图片、视频、文档的缩略图处理规则',
                ),
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
            'title' => 'Schema of Response',
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'items' => 
              array (
                'description' => '文件列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '文件信息',
                  '$ref' => '#/components/schemas/File',
                ),
              ),
              'next_marker' => 
              array (
                'description' => '下一页起始资源标识符, 最后一页该值为空。',
                'type' => 'string',
                'example' => 'NWQ1Yjk4YmI1ZDRlYmU1Y2E0YWE0NmJhYWJmODBhNDQ2NzhlMTRhMg',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"items\\": [\\n    {\\n      \\"domain_id\\": \\"\\",\\n      \\"drive_id\\": \\"\\",\\n      \\"file_id\\": \\"\\",\\n      \\"name\\": \\"\\",\\n      \\"type\\": \\"\\",\\n      \\"content_type\\": \\"\\",\\n      \\"created_at\\": \\"\\",\\n      \\"updated_at\\": \\"\\",\\n      \\"description\\": \\"\\",\\n      \\"trashed_at\\": \\"\\",\\n      \\"file_extension\\": \\"\\",\\n      \\"mime_type\\": \\"\\",\\n      \\"mime_extension\\": \\"\\",\\n      \\"hidden\\": true,\\n      \\"size\\": 0,\\n      \\"starred\\": true,\\n      \\"status\\": \\"\\",\\n      \\"user_meta\\": \\"\\",\\n      \\"labels\\": [\\n        \\"\\"\\n      ],\\n      \\"upload_id\\": \\"\\",\\n      \\"parent_file_id\\": \\"\\",\\n      \\"crc64_hash\\": \\"\\",\\n      \\"content_hash\\": \\"\\",\\n      \\"content_hash_name\\": \\"\\",\\n      \\"download_url\\": \\"\\",\\n      \\"thumbnail\\": \\"\\",\\n      \\"category\\": \\"\\",\\n      \\"local_created_at\\": \\"\\",\\n      \\"local_modified_at\\": \\"\\",\\n      \\"revision_id\\": \\"\\",\\n      \\"investigation_info\\": {\\n        \\"status\\": 0,\\n        \\"suggestion\\": \\"\\"\\n      },\\n      \\"thumbnail_urls\\": {\\n        \\"key\\": \\"\\"\\n      },\\n      \\"image_media_metadata\\": {\\n        \\"time\\": \\"2006-01-02T15:04:05.000Z07:00\\",\\n        \\"width\\": 1920,\\n        \\"height\\": 1080,\\n        \\"location\\": \\"30.185453,120.218522\\",\\n        \\"country\\": \\"中国\\",\\n        \\"province\\": \\"浙江省\\",\\n        \\"city\\": \\"杭州市\\",\\n        \\"district\\": \\"滨江区\\",\\n        \\"township\\": \\"西兴街道\\",\\n        \\"address_line\\": \\"浙江省杭州市滨江区西兴街道江陵路\\",\\n        \\"image_tags\\": [\\n          {\\n            \\"confidence\\": 0.98,\\n            \\"parent_name\\": \\"运动\\",\\n            \\"name\\": \\"篮球\\",\\n            \\"tag_level\\": 3,\\n            \\"source\\": \\"一起打篮球\\",\\n            \\"centric_score\\": 0.877\\n          }\\n        ],\\n        \\"faces\\": \\"[{\\\\\\"FaceId\\\\\\":\\\\\\"a9a66a86-73dd-4c95-8b79-1d8a49db5226\\\\\\",\\\\\\"GroupId\\\\\\":\\\\\\"Cluster-e3b7fb52-22b3-44f2-9746-8c1804bd6af0\\\\\\",\\\\\\"FaceConfidence\\\\\\":0.999,\\\\\\"Age\\\\\\":13,\\\\\\"AgeConfidence\\\\\\":4,\\\\\\"Gender\\\\\\":\\\\\\"female\\\\\\",\\\\\\"GenderConfidence\\\\\\":1,\\\\\\"Emotion\\\\\\":\\\\\\"none\\\\\\",\\\\\\"EmotionConfidence\\\\\\":0.672,\\\\\\"FaceAttributes\\\\\\":{\\\\\\"Mask\\\\\\":\\\\\\"none\\\\\\",\\\\\\"MaskConfidence\\\\\\":0.894,\\\\\\"Beard\\\\\\":\\\\\\"none\\\\\\",\\\\\\"BeardConfidence\\\\\\":0.997,\\\\\\"Glasses\\\\\\":\\\\\\"none\\\\\\",\\\\\\"GlassesConfidence\\\\\\":0.999,\\\\\\"Mouth\\\\\\":\\\\\\"close\\\\\\",\\\\\\"MouthConfidence\\\\\\":0.937,\\\\\\"Hat\\\\\\":\\\\\\"none\\\\\\",\\\\\\"HatConfidence\\\\\\":0.998,\\\\\\"HeadPose\\\\\\":{\\\\\\"Pitch\\\\\\":10.684,\\\\\\"Roll\\\\\\":-10.707,\\\\\\"Yaw\\\\\\":-20.094},\\\\\\"FaceBoundary\\\\\\":{\\\\\\"Width\\\\\\":457,\\\\\\"Height\\\\\\":687,\\\\\\"Top\\\\\\":1324,\\\\\\"Left\\\\\\":1356}}}]\\",\\n        \\"faces_thumbnail\\": [\\n          {\\n            \\"face_id\\": \\"a9a66a86-73dd-4c95-8b79-1d8a49db5226\\",\\n            \\"face_group_id\\": \\"Cluster-e3b7fb52-22b3-44f2-9746-8c1804bd6af0\\",\\n            \\"face_thumbnail\\": \\"https://pds-domain.region.aliyuncs.com/QieGeH98%2F1001%2F63e5e551ee621482ab934a0687c6cda75fc07864%2F642a8a40c00f1ad379df421694713ee65170f09b?security-token=CAIS%2BgF1q6Ft5B2yfSjIr5bjHPCNnrdR8aSaSW7woVlmVd1Bt5HorDz2IHpPfHdoBe0btvU%2BlWxX6fwZlq5rR4QAXlDfNSyFeX20qFHPWZHInuDox55m4cTXNAr%2BIhr%2F29CoEIedZdjBe%2FCrRknZnytou9XTfimjWFrXWv%2Fgy%2BQQDLItUxK%2FcCBNCfpPOwJms7V6D3bKMuu3OROY6Qi5TmgQ41En1DIlt%2FXuk5DCtkqB12eXkLFF%2B97DRbG%2FdNRpMZtFVNO44fd7bKKp0lQLsUMSqv8q0fEcqGaW4o7CWQJLnzyCMvvJ9OVDFyN0aKEnH7J%2Bq%2FzxhTPrMnpkSlacGoABPMvZ8rSESUEP96Vbf%2Bk0JRg9Qb1MnaIJqWAgo8K6K0UP1CtqL2zrUtugpKKDHOYiKbq2O0S5yLUPVX5vBHqEi%2FFc7i6ZnHCMcXLJs4rKDKwRBEhovUXXlklq2q43OSVtLrXkBy9Xs1ers%2FhJhcxpNA0Vl3EWfJxa2BTylEdnLOQ%3D&x-oss-access-key-id=STS.NUVWJ9shpFfqKHAEY3YRmXTCN&x-oss-expires=1686455451&x-oss-process=image%2Fcrop%2Cx_1128%2Cy_1211%2Cw_914%2Ch_914%2Fformat%2Cjpg&x-oss-signature=jmhOz91Tww1ciMEwadDiioU7d93FDiBNr8s8mHyMqW0%3D&x-oss-signature-version=OSS2\\"\\n          }\\n        ],\\n        \\"exif\\": \\"{\\\\\\"Compression\\\\\\":{\\\\\\"value\\\\\\":\\\\\\"6\\\\\\"},\\\\\\"DateTime\\\\\\":{\\\\\\"value\\\\\\":\\\\\\"2020:08:19 17:11:11\\\\\\"}}\\",\\n        \\"image_quality\\": {\\n          \\"overall_score\\": 0.736\\n        }\\n      },\\n      \\"ex_fields_info\\": {\\n        \\"key\\": \\"\\"\\n      },\\n      \\"content_uri\\": \\"\\",\\n      \\"streams_info\\": {\\n        \\"key\\": {\\n          \\"crc64_hash\\": \\"\\",\\n          \\"size\\": 0,\\n          \\"content_hash\\": \\"\\",\\n          \\"content_hash_name\\": \\"\\",\\n          \\"download_url\\": \\"\\",\\n          \\"url\\": \\"\\",\\n          \\"thumbnail\\": \\"\\"\\n        }\\n      },\\n      \\"user_tags\\": {\\n        \\"key\\": \\"\\"\\n      },\\n      \\"revision_version\\": 0,\\n      \\"video_media_metadata\\": {\\n        \\"time\\": \\"2006-01-02T15:04:05.000Z07:00\\",\\n        \\"width\\": 1920,\\n        \\"height\\": 1080,\\n        \\"location\\": \\"30.185453,120.218522\\",\\n        \\"country\\": \\"中国\\",\\n        \\"province\\": \\"浙江省\\",\\n        \\"city\\": \\"杭州市\\",\\n        \\"district\\": \\"滨江区\\",\\n        \\"township\\": \\"西兴街道\\",\\n        \\"address_line\\": \\"浙江省杭州市滨江区西兴街道江陵路\\",\\n        \\"video_media_video_stream\\": [\\n          {\\n            \\"duration\\": \\"22.88\\",\\n            \\"bitrate\\": \\"108420\\",\\n            \\"code_name\\": \\"h264\\",\\n            \\"frame_count\\": \\"90\\"\\n          }\\n        ],\\n        \\"video_media_audio_stream\\": [\\n          {\\n            \\"duration\\": \\"7704.573000\\",\\n            \\"bit_rate\\": \\"129280\\",\\n            \\"code_name\\": \\"aac\\"\\n          }\\n        ]\\n      },\\n      \\"punish_flag\\": 0,\\n      \\"id_path\\": \\"\\",\\n      \\"name_path\\": \\"\\",\\n      \\"creator_type\\": \\"\\",\\n      \\"creator_id\\": \\"\\",\\n      \\"creator_name\\": \\"\\",\\n      \\"last_modifier_type\\": \\"\\",\\n      \\"last_modifier_id\\": \\"\\",\\n      \\"last_modifier_name\\": \\"\\",\\n      \\"dir_size_info\\": {\\n        \\"dir_count\\": 0,\\n        \\"file_count\\": 0\\n      },\\n      \\"trashed\\": true\\n    }\\n  ],\\n  \\"next_marker\\": \\"NWQ1Yjk4YmI1ZDRlYmU1Y2E0YWE0NmJhYWJmODBhNDQ2NzhlMTRhMg\\"\\n}","type":"json"}]',
      'title' => '列举文件',
    ),
    'GetFile' => 
    array (
      'summary' => '获取文件详情。',
      'path' => '/v2/file/get',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'https',
      ),
      'tags' => 
      array (
        0 => 'api',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
        1 => 
        array (
          'BearerToken' => 
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
          'name' => 'domain_id',
          'in' => 'host',
          'schema' => 
          array (
            'type' => 'string',
            'required' => true,
          ),
        ),
        1 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '请求体参数。',
            'type' => 'object',
            'properties' => 
            array (
              'drive_id' => 
              array (
                'description' => '空间 id',
                'type' => 'string',
                'required' => false,
                'example' => '1',
              ),
              'file_id' => 
              array (
                'description' => '文件 id',
                'type' => 'string',
                'required' => true,
                'example' => '9520943DC264',
              ),
              'url_expire_sec' => 
              array (
                'description' => '过期时间，单位为秒，取值范围为：[10,14400] 秒',
                'type' => 'integer',
                'format' => 'int32',
                'required' => false,
                'maximum' => '14400',
                'minimum' => '10',
                'example' => '100',
              ),
              'fields' => 
              array (
                'description' => '筛选返回字段：

1. 当填 * 时，返回文件所有字段（必须在请求中填写的除外）；
2. 当只需要特定字段时，可填写为：url、thumbnail、exif、cropping\\_suggestion、characteristic\\_hash、video\\_metadata、video\\_preview_metadata，当需要多个字段时，以逗号 , 分割，如 url,thumbnail；
3. 必须填写investigation_info字符串，才会在响应中返回investigation_info字段。

默认返回所有字段（必须进行填写的除外）',
                'type' => 'string',
                'required' => false,
                'example' => '*',
              ),
              'thumbnail_processes' => 
              array (
                'description' => '缩略图配置，可一次性返回最多5个缩略图，map的key可以自定义，返回时按key返回对应的缩略图链接',
                'type' => 'object',
                'required' => false,
                'additionalProperties' => 
                array (
                  '$ref' => '#/components/schemas/ImageProcess',
                  'description' => '定义图片、视频、文档的缩略图处理规则',
                ),
              ),
              'share_id' => 
              array (
                'description' => '分享id。
如果通过分享操作文件，请携带`x-share-token` header鉴权并传递此字段，此时`drive_id`无效。否则请使用`aksk`或者`access_token`方式鉴权，并传递`drive_id`字段。
`share_id`和`drive_id`两者必须有一个字段赋值。',
                'type' => 'string',
                'required' => false,
                'example' => '7JQX1FswpQ8',
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
            'description' => 'Schema of Response',
            '$ref' => '#/components/schemas/File',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"domain_id\\": \\"\\",\\n  \\"drive_id\\": \\"\\",\\n  \\"file_id\\": \\"\\",\\n  \\"name\\": \\"\\",\\n  \\"type\\": \\"\\",\\n  \\"content_type\\": \\"\\",\\n  \\"created_at\\": \\"\\",\\n  \\"updated_at\\": \\"\\",\\n  \\"description\\": \\"\\",\\n  \\"trashed_at\\": \\"\\",\\n  \\"file_extension\\": \\"\\",\\n  \\"mime_type\\": \\"\\",\\n  \\"mime_extension\\": \\"\\",\\n  \\"hidden\\": true,\\n  \\"size\\": 0,\\n  \\"starred\\": true,\\n  \\"status\\": \\"\\",\\n  \\"user_meta\\": \\"\\",\\n  \\"labels\\": [\\n    \\"\\"\\n  ],\\n  \\"upload_id\\": \\"\\",\\n  \\"parent_file_id\\": \\"\\",\\n  \\"crc64_hash\\": \\"\\",\\n  \\"content_hash\\": \\"\\",\\n  \\"content_hash_name\\": \\"\\",\\n  \\"download_url\\": \\"\\",\\n  \\"thumbnail\\": \\"\\",\\n  \\"category\\": \\"\\",\\n  \\"local_created_at\\": \\"\\",\\n  \\"local_modified_at\\": \\"\\",\\n  \\"revision_id\\": \\"\\",\\n  \\"investigation_info\\": {\\n    \\"status\\": 0,\\n    \\"suggestion\\": \\"\\"\\n  },\\n  \\"thumbnail_urls\\": {\\n    \\"key\\": \\"\\"\\n  },\\n  \\"image_media_metadata\\": {\\n    \\"time\\": \\"2006-01-02T15:04:05.000Z07:00\\",\\n    \\"width\\": 1920,\\n    \\"height\\": 1080,\\n    \\"location\\": \\"30.185453,120.218522\\",\\n    \\"country\\": \\"中国\\",\\n    \\"province\\": \\"浙江省\\",\\n    \\"city\\": \\"杭州市\\",\\n    \\"district\\": \\"滨江区\\",\\n    \\"township\\": \\"西兴街道\\",\\n    \\"address_line\\": \\"浙江省杭州市滨江区西兴街道江陵路\\",\\n    \\"image_tags\\": [\\n      {\\n        \\"confidence\\": 0.98,\\n        \\"parent_name\\": \\"运动\\",\\n        \\"name\\": \\"篮球\\",\\n        \\"tag_level\\": 3,\\n        \\"source\\": \\"一起打篮球\\",\\n        \\"centric_score\\": 0.877\\n      }\\n    ],\\n    \\"faces\\": \\"[{\\\\\\"FaceId\\\\\\":\\\\\\"a9a66a86-73dd-4c95-8b79-1d8a49db5226\\\\\\",\\\\\\"GroupId\\\\\\":\\\\\\"Cluster-e3b7fb52-22b3-44f2-9746-8c1804bd6af0\\\\\\",\\\\\\"FaceConfidence\\\\\\":0.999,\\\\\\"Age\\\\\\":13,\\\\\\"AgeConfidence\\\\\\":4,\\\\\\"Gender\\\\\\":\\\\\\"female\\\\\\",\\\\\\"GenderConfidence\\\\\\":1,\\\\\\"Emotion\\\\\\":\\\\\\"none\\\\\\",\\\\\\"EmotionConfidence\\\\\\":0.672,\\\\\\"FaceAttributes\\\\\\":{\\\\\\"Mask\\\\\\":\\\\\\"none\\\\\\",\\\\\\"MaskConfidence\\\\\\":0.894,\\\\\\"Beard\\\\\\":\\\\\\"none\\\\\\",\\\\\\"BeardConfidence\\\\\\":0.997,\\\\\\"Glasses\\\\\\":\\\\\\"none\\\\\\",\\\\\\"GlassesConfidence\\\\\\":0.999,\\\\\\"Mouth\\\\\\":\\\\\\"close\\\\\\",\\\\\\"MouthConfidence\\\\\\":0.937,\\\\\\"Hat\\\\\\":\\\\\\"none\\\\\\",\\\\\\"HatConfidence\\\\\\":0.998,\\\\\\"HeadPose\\\\\\":{\\\\\\"Pitch\\\\\\":10.684,\\\\\\"Roll\\\\\\":-10.707,\\\\\\"Yaw\\\\\\":-20.094},\\\\\\"FaceBoundary\\\\\\":{\\\\\\"Width\\\\\\":457,\\\\\\"Height\\\\\\":687,\\\\\\"Top\\\\\\":1324,\\\\\\"Left\\\\\\":1356}}}]\\",\\n    \\"faces_thumbnail\\": [\\n      {\\n        \\"face_id\\": \\"a9a66a86-73dd-4c95-8b79-1d8a49db5226\\",\\n        \\"face_group_id\\": \\"Cluster-e3b7fb52-22b3-44f2-9746-8c1804bd6af0\\",\\n        \\"face_thumbnail\\": \\"https://pds-domain.region.aliyuncs.com/QieGeH98%2F1001%2F63e5e551ee621482ab934a0687c6cda75fc07864%2F642a8a40c00f1ad379df421694713ee65170f09b?security-token=CAIS%2BgF1q6Ft5B2yfSjIr5bjHPCNnrdR8aSaSW7woVlmVd1Bt5HorDz2IHpPfHdoBe0btvU%2BlWxX6fwZlq5rR4QAXlDfNSyFeX20qFHPWZHInuDox55m4cTXNAr%2BIhr%2F29CoEIedZdjBe%2FCrRknZnytou9XTfimjWFrXWv%2Fgy%2BQQDLItUxK%2FcCBNCfpPOwJms7V6D3bKMuu3OROY6Qi5TmgQ41En1DIlt%2FXuk5DCtkqB12eXkLFF%2B97DRbG%2FdNRpMZtFVNO44fd7bKKp0lQLsUMSqv8q0fEcqGaW4o7CWQJLnzyCMvvJ9OVDFyN0aKEnH7J%2Bq%2FzxhTPrMnpkSlacGoABPMvZ8rSESUEP96Vbf%2Bk0JRg9Qb1MnaIJqWAgo8K6K0UP1CtqL2zrUtugpKKDHOYiKbq2O0S5yLUPVX5vBHqEi%2FFc7i6ZnHCMcXLJs4rKDKwRBEhovUXXlklq2q43OSVtLrXkBy9Xs1ers%2FhJhcxpNA0Vl3EWfJxa2BTylEdnLOQ%3D&x-oss-access-key-id=STS.NUVWJ9shpFfqKHAEY3YRmXTCN&x-oss-expires=1686455451&x-oss-process=image%2Fcrop%2Cx_1128%2Cy_1211%2Cw_914%2Ch_914%2Fformat%2Cjpg&x-oss-signature=jmhOz91Tww1ciMEwadDiioU7d93FDiBNr8s8mHyMqW0%3D&x-oss-signature-version=OSS2\\"\\n      }\\n    ],\\n    \\"exif\\": \\"{\\\\\\"Compression\\\\\\":{\\\\\\"value\\\\\\":\\\\\\"6\\\\\\"},\\\\\\"DateTime\\\\\\":{\\\\\\"value\\\\\\":\\\\\\"2020:08:19 17:11:11\\\\\\"}}\\",\\n    \\"image_quality\\": {\\n      \\"overall_score\\": 0.736\\n    }\\n  },\\n  \\"ex_fields_info\\": {\\n    \\"key\\": \\"\\"\\n  },\\n  \\"content_uri\\": \\"\\",\\n  \\"streams_info\\": {\\n    \\"key\\": {\\n      \\"crc64_hash\\": \\"\\",\\n      \\"size\\": 0,\\n      \\"content_hash\\": \\"\\",\\n      \\"content_hash_name\\": \\"\\",\\n      \\"download_url\\": \\"\\",\\n      \\"url\\": \\"\\",\\n      \\"thumbnail\\": \\"\\"\\n    }\\n  },\\n  \\"user_tags\\": {\\n    \\"key\\": \\"\\"\\n  },\\n  \\"revision_version\\": 0,\\n  \\"video_media_metadata\\": {\\n    \\"time\\": \\"2006-01-02T15:04:05.000Z07:00\\",\\n    \\"width\\": 1920,\\n    \\"height\\": 1080,\\n    \\"location\\": \\"30.185453,120.218522\\",\\n    \\"country\\": \\"中国\\",\\n    \\"province\\": \\"浙江省\\",\\n    \\"city\\": \\"杭州市\\",\\n    \\"district\\": \\"滨江区\\",\\n    \\"township\\": \\"西兴街道\\",\\n    \\"address_line\\": \\"浙江省杭州市滨江区西兴街道江陵路\\",\\n    \\"video_media_video_stream\\": [\\n      {\\n        \\"duration\\": \\"22.88\\",\\n        \\"bitrate\\": \\"108420\\",\\n        \\"code_name\\": \\"h264\\",\\n        \\"frame_count\\": \\"90\\"\\n      }\\n    ],\\n    \\"video_media_audio_stream\\": [\\n      {\\n        \\"duration\\": \\"7704.573000\\",\\n        \\"bit_rate\\": \\"129280\\",\\n        \\"code_name\\": \\"aac\\"\\n      }\\n    ]\\n  },\\n  \\"punish_flag\\": 0,\\n  \\"id_path\\": \\"\\",\\n  \\"name_path\\": \\"\\",\\n  \\"creator_type\\": \\"\\",\\n  \\"creator_id\\": \\"\\",\\n  \\"creator_name\\": \\"\\",\\n  \\"last_modifier_type\\": \\"\\",\\n  \\"last_modifier_id\\": \\"\\",\\n  \\"last_modifier_name\\": \\"\\",\\n  \\"dir_size_info\\": {\\n    \\"dir_count\\": 0,\\n    \\"file_count\\": 0\\n  },\\n  \\"trashed\\": true\\n}","type":"json"}]',
      'title' => '获取文件详情',
    ),
    'DownloadFile' => 
    array (
      'summary' => '下载文件。',
      'path' => '/v2/file/download',
      'methods' => 
      array (
        0 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'https',
        1 => 'http',
      ),
      'tags' => 
      array (
        0 => 'api',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
        1 => 
        array (
          'BearerToken' => 
          array (
          ),
        ),
      ),
      'consumes' => 
      array (
        0 => 'application/x-www-form-urlencoded',
      ),
      'produces' => 
      array (
        0 => 'application/octet-stream',
      ),
      'deprecated' => false,
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'domain_id',
          'in' => 'host',
          'schema' => 
          array (
            'type' => 'string',
            'required' => true,
          ),
        ),
        1 => 
        array (
          'name' => 'share_id',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分享id。 如果通过分享操作文件，请携带`x-share-token header`鉴权并传递此字段，此时`drive_id`无效。否则请使用`aksk`或者`access_token`方式鉴权，并传递`drive_id`字段。 `share_id`和`drive_id`两者必须有一个字段赋值。',
            'type' => 'string',
            'required' => false,
            'example' => '7JQX1FswpQ8',
          ),
        ),
        2 => 
        array (
          'name' => 'drive_id',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '空间id',
            'type' => 'string',
            'required' => false,
            'example' => '1',
          ),
        ),
        3 => 
        array (
          'name' => 'file_id',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '文件id',
            'type' => 'string',
            'required' => true,
            'example' => '9520943DC264',
          ),
        ),
        4 => 
        array (
          'name' => 'image_thumbnail_process',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '图片处理样式，设置后会跳转至处理后的缩略图地址',
            'type' => 'string',
            'required' => false,
            'example' => 'image/resize,m_fill,h_128,w_128,limit_0',
          ),
        ),
        5 => 
        array (
          'name' => 'video_thumbnail_process',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '视频处理样式，设置后会跳转至处理后的缩略图地址',
            'type' => 'string',
            'required' => false,
            'example' => 'video/snapshot,t_7000,f_jpg,w_800,h_600,m_fast',
          ),
        ),
        6 => 
        array (
          'name' => 'office_thumbnail_process',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '文档处理样式，设置后会跳转至处理后的缩略图地址',
            'type' => 'string',
            'required' => false,
            'example' => 'image/resize,m_lfit,w_256,limit_0/format,jpg|image/format,webp',
          ),
        ),
      ),
      'responses' => 
      array (
        302 => 
        array (
          'headers' => 
          array (
            'location' => 
            array (
              'schema' => 
              array (
                'title' => '下载地址',
                'type' => 'string',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{}","type":"json"}]',
      'title' => '下载文件',
      'description' => '<props="china">最佳实践可参考：[文件下载](~~175889~~)。</props>',
    ),
    'GetUploadUrl' => 
    array (
      'summary' => '获取上传地址。',
      'path' => '/v2/file/get_upload_url',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'https',
      ),
      'tags' => 
      array (
        0 => 'api',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
        1 => 
        array (
          'BearerToken' => 
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
          'name' => 'domain_id',
          'in' => 'host',
          'schema' => 
          array (
            'type' => 'string',
            'required' => true,
          ),
        ),
        1 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '请求体参数。',
            'type' => 'object',
            'properties' => 
            array (
              'drive_id' => 
              array (
                'description' => '空间 id',
                'type' => 'string',
                'required' => true,
                'example' => '1',
              ),
              'share_id' => 
              array (
                'description' => '分享id',
                'type' => 'string',
                'required' => false,
                'example' => '7JQX1FswpQ8',
              ),
              'file_id' => 
              array (
                'description' => '文件id',
                'type' => 'string',
                'required' => true,
                'example' => '5d5b846942cf94fa72324c14a4bda34e81da635d',
              ),
              'upload_id' => 
              array (
                'description' => '上传 id',
                'type' => 'string',
                'required' => true,
                'example' => '10166D06127B413BA1EC8ABB1144D111',
              ),
              'part_info_list' => 
              array (
                'description' => '分片信息列表',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '分片信息',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'part_number' => 
                    array (
                      'description' => '段编号',
                      'type' => 'integer',
                      'format' => 'int32',
                      'required' => false,
                      'example' => '1',
                    ),
                    'parallel_sha1_ctx' => 
                    array (
                      'description' => '该分片前所有数据的SHA1上下文，该字段只在多分片并发上传的模式下有效',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'h' => 
                        array (
                          'description' => '该分片前所有数据的SHA1上下文的第1-5个32位变量，该字段只在多分片并发上传的模式下有效',
                          'type' => 'array',
                          'items' => 
                          array (
                            'description' => '该分片前所有数据的SHA1上下文的第1-5个32位变量',
                            'type' => 'integer',
                            'format' => 'int64',
                            'required' => false,
                            'example' => '1',
                          ),
                          'required' => false,
                        ),
                        'part_offset' => 
                        array (
                          'description' => '到上一个数据块为止的总长度，字节，需要为64的倍数，该字段只在多分片并发上传的模式下有效',
                          'type' => 'integer',
                          'format' => 'int64',
                          'required' => false,
                          'example' => '10240',
                        ),
                      ),
                      'required' => false,
                    ),
                    'content_md5' => 
                    array (
                      'type' => 'string',
                      'required' => false,
                    ),
                    'content_type' => 
                    array (
                      'type' => 'string',
                      'required' => false,
                    ),
                    'parallel_sha256_ctx' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'h' => 
                        array (
                          'type' => 'array',
                          'items' => 
                          array (
                            'type' => 'integer',
                            'format' => 'int64',
                            'required' => false,
                          ),
                          'required' => false,
                        ),
                        'part_offset' => 
                        array (
                          'type' => 'integer',
                          'format' => 'int64',
                          'required' => false,
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
              'domain_id' => 
              array (
                'title' => 'Id of the request',
                'description' => '域id',
                'type' => 'string',
                'example' => 'bj1',
              ),
              'drive_id' => 
              array (
                'description' => '空间id',
                'type' => 'string',
                'example' => '1',
              ),
              'file_id' => 
              array (
                'description' => '文件id',
                'type' => 'string',
                'example' => '5d5b846942cf94fa72324c14a4bda34e81da635d',
              ),
              'upload_id' => 
              array (
                'description' => '上传id',
                'type' => 'string',
                'example' => '10166D06127B413BA1EC8ABB1144D111',
              ),
              'create_at' => 
              array (
                'description' => '创建时间',
                'type' => 'string',
                'example' => '2019-09-11T16:34:36.977Z',
              ),
              'part_info_list' => 
              array (
                'description' => '分段信息列表',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '分段信息',
                  '$ref' => '#/components/schemas/UploadPartInfo',
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"domain_id\\": \\"bj1\\",\\n  \\"drive_id\\": \\"1\\",\\n  \\"file_id\\": \\"5d5b846942cf94fa72324c14a4bda34e81da635d\\",\\n  \\"upload_id\\": \\"10166D06127B413BA1EC8ABB1144D111\\",\\n  \\"create_at\\": \\"2019-09-11T16:34:36.977Z\\",\\n  \\"part_info_list\\": [\\n    {\\n      \\"part_number\\": 1,\\n      \\"part_size\\": 1024,\\n      \\"upload_url\\": \\"\\",\\n      \\"internal_upload_url\\": \\"\\",\\n      \\"etag\\": \\"0CC175B9C0F1B6A831C399E269772661\\",\\n      \\"parallel_sha1_ctx\\": {\\n        \\"h\\": [\\n          0\\n        ],\\n        \\"part_offset\\": 0\\n      },\\n      \\"upload_form_info\\": {\\n        \\"bucket_name\\": \\"\\",\\n        \\"oss_end_point\\": \\"\\",\\n        \\"object_key\\": \\"\\",\\n        \\"oss_access_key_id\\": \\"\\",\\n        \\"oss_security_token\\": \\"\\",\\n        \\"policy\\": \\"\\",\\n        \\"signature\\": \\"\\",\\n        \\"endpoint\\": \\"\\",\\n        \\"form_data\\": {\\n          \\"key\\": \\"\\"\\n        }\\n      },\\n      \\"internal_upload_form_info\\": {\\n        \\"bucket_name\\": \\"\\",\\n        \\"oss_end_point\\": \\"\\",\\n        \\"object_key\\": \\"\\",\\n        \\"oss_access_key_id\\": \\"\\",\\n        \\"oss_security_token\\": \\"\\",\\n        \\"policy\\": \\"\\",\\n        \\"signature\\": \\"\\",\\n        \\"endpoint\\": \\"\\",\\n        \\"form_data\\": {\\n          \\"key\\": \\"\\"\\n        }\\n      },\\n      \\"signature_info\\": {\\n        \\"auth_type\\": \\"\\",\\n        \\"signature\\": \\"\\",\\n        \\"sts_token\\": \\"\\"\\n      },\\n      \\"parallel_sha256_ctx\\": {\\n        \\"h\\": [\\n          0\\n        ],\\n        \\"part_offset\\": 0\\n      }\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '获取上传地址',
    ),
    'ListUploadedParts' => 
    array (
      'summary' => '列举已上传成功的多段。',
      'path' => '/v2/file/list_uploaded_parts',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'https',
      ),
      'tags' => 
      array (
        0 => 'api',
      ),
      'security' => 
      array (
        0 => 
        array (
          'BearerToken' => 
          array (
          ),
        ),
        1 => 
        array (
          'AK' => 
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
          'name' => 'domain_id',
          'in' => 'host',
          'schema' => 
          array (
            'type' => 'string',
            'required' => true,
          ),
        ),
        1 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '请求体参数。',
            'type' => 'object',
            'properties' => 
            array (
              'part_number_marker' => 
              array (
                'description' => '设定结果从marker之后按字母排序的第一个开始返回。如果不设定，则从头开始返回数据。 默认值：无

',
                'type' => 'integer',
                'format' => 'int32',
                'required' => false,
                'example' => 'NWQ1Yjk4YmI1ZDRlYmU1Y2E0YWE0NmJhYWJmODBhNDQ2NzhlMTRhMg',
              ),
              'limit' => 
              array (
                'description' => '限定此次返回资源的数量。如果不设定，默认返回100，最大不能超过100。',
                'type' => 'integer',
                'format' => 'int32',
                'required' => false,
                'example' => '100',
              ),
              'upload_id' => 
              array (
                'description' => '上传id',
                'type' => 'string',
                'required' => true,
                'example' => '00166D06127B413BA1EC8ABB1144D101',
              ),
              'file_id' => 
              array (
                'description' => '文件id',
                'type' => 'string',
                'required' => true,
                'example' => '322fb07b975f4b0ae1b543fe8475eee4c19eb2b2',
              ),
              'drive_id' => 
              array (
                'description' => '空间 id，除根据分享链接上传之外的其他场景，必填',
                'type' => 'string',
                'required' => false,
                'example' => '1',
              ),
              'share_id' => 
              array (
                'description' => '分享 id，当根据分享链接上传时必填',
                'type' => 'string',
                'required' => false,
                'example' => '7JQX1FswpQ8',
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
            'title' => 'Schema of Response',
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'file_id' => 
              array (
                'title' => 'Id of the request',
                'description' => '文件id',
                'type' => 'string',
                'example' => '322fb07b975f4b0ae1b543fe8475eee4c19eb2b2',
              ),
              'upload_id' => 
              array (
                'description' => '上传id',
                'type' => 'string',
                'example' => '00166D06127B413BA1EC8ABB1144D101',
              ),
              'uploaded_parts' => 
              array (
                'description' => '分段信息列表',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '分段信息',
                  '$ref' => '#/components/schemas/UploadPartInfo',
                ),
              ),
              'next_part_number_marker' => 
              array (
                'description' => '下一页起始资源标识符, 最后一页该值为空。',
                'type' => 'string',
                'example' => 'NWQ1Yjk4YmI1ZDRlYmU1Y2E0YWE0NmJhYWJmODBhNDQ2NzhlMTRhMg',
              ),
              'parallel_upload' => 
              array (
                'description' => '是否并行上传',
                'type' => 'boolean',
                'example' => 'false',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"file_id\\": \\"322fb07b975f4b0ae1b543fe8475eee4c19eb2b2\\",\\n  \\"upload_id\\": \\"00166D06127B413BA1EC8ABB1144D101\\",\\n  \\"uploaded_parts\\": [\\n    {\\n      \\"part_number\\": 1,\\n      \\"part_size\\": 1024,\\n      \\"upload_url\\": \\"\\",\\n      \\"internal_upload_url\\": \\"\\",\\n      \\"etag\\": \\"0CC175B9C0F1B6A831C399E269772661\\",\\n      \\"parallel_sha1_ctx\\": {\\n        \\"h\\": [\\n          0\\n        ],\\n        \\"part_offset\\": 0\\n      },\\n      \\"upload_form_info\\": {\\n        \\"bucket_name\\": \\"\\",\\n        \\"oss_end_point\\": \\"\\",\\n        \\"object_key\\": \\"\\",\\n        \\"oss_access_key_id\\": \\"\\",\\n        \\"oss_security_token\\": \\"\\",\\n        \\"policy\\": \\"\\",\\n        \\"signature\\": \\"\\",\\n        \\"endpoint\\": \\"\\",\\n        \\"form_data\\": {\\n          \\"key\\": \\"\\"\\n        }\\n      },\\n      \\"internal_upload_form_info\\": {\\n        \\"bucket_name\\": \\"\\",\\n        \\"oss_end_point\\": \\"\\",\\n        \\"object_key\\": \\"\\",\\n        \\"oss_access_key_id\\": \\"\\",\\n        \\"oss_security_token\\": \\"\\",\\n        \\"policy\\": \\"\\",\\n        \\"signature\\": \\"\\",\\n        \\"endpoint\\": \\"\\",\\n        \\"form_data\\": {\\n          \\"key\\": \\"\\"\\n        }\\n      },\\n      \\"signature_info\\": {\\n        \\"auth_type\\": \\"\\",\\n        \\"signature\\": \\"\\",\\n        \\"sts_token\\": \\"\\"\\n      },\\n      \\"parallel_sha256_ctx\\": {\\n        \\"h\\": [\\n          0\\n        ],\\n        \\"part_offset\\": 0\\n      }\\n    }\\n  ],\\n  \\"next_part_number_marker\\": \\"NWQ1Yjk4YmI1ZDRlYmU1Y2E0YWE0NmJhYWJmODBhNDQ2NzhlMTRhMg\\",\\n  \\"parallel_upload\\": false\\n}","type":"json"}]',
      'title' => '列举已上传分片',
    ),
    'CompleteFile' => 
    array (
      'summary' => '完成文件上传。',
      'path' => '/v2/file/complete',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'https',
      ),
      'tags' => 
      array (
        0 => 'api',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
        1 => 
        array (
          'BearerToken' => 
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
          'name' => 'domain_id',
          'in' => 'host',
          'schema' => 
          array (
            'type' => 'string',
            'required' => true,
          ),
        ),
        1 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '请求体参数。',
            'type' => 'object',
            'properties' => 
            array (
              'drive_id' => 
              array (
                'description' => '空间id',
                'type' => 'string',
                'required' => true,
                'example' => '1',
              ),
              'upload_id' => 
              array (
                'description' => '上传id',
                'type' => 'string',
                'required' => true,
                'example' => 'C9DCFE5A82644AC7A02DB74C30C934A6',
              ),
              'file_id' => 
              array (
                'description' => '文件id',
                'type' => 'string',
                'required' => true,
                'example' => '9520943DC264',
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
            'description' => '文件信息',
            '$ref' => '#/components/schemas/File',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"domain_id\\": \\"\\",\\n  \\"drive_id\\": \\"\\",\\n  \\"file_id\\": \\"\\",\\n  \\"name\\": \\"\\",\\n  \\"type\\": \\"\\",\\n  \\"content_type\\": \\"\\",\\n  \\"created_at\\": \\"\\",\\n  \\"updated_at\\": \\"\\",\\n  \\"description\\": \\"\\",\\n  \\"trashed_at\\": \\"\\",\\n  \\"file_extension\\": \\"\\",\\n  \\"mime_type\\": \\"\\",\\n  \\"mime_extension\\": \\"\\",\\n  \\"hidden\\": true,\\n  \\"size\\": 0,\\n  \\"starred\\": true,\\n  \\"status\\": \\"\\",\\n  \\"user_meta\\": \\"\\",\\n  \\"labels\\": [\\n    \\"\\"\\n  ],\\n  \\"upload_id\\": \\"\\",\\n  \\"parent_file_id\\": \\"\\",\\n  \\"crc64_hash\\": \\"\\",\\n  \\"content_hash\\": \\"\\",\\n  \\"content_hash_name\\": \\"\\",\\n  \\"download_url\\": \\"\\",\\n  \\"thumbnail\\": \\"\\",\\n  \\"category\\": \\"\\",\\n  \\"local_created_at\\": \\"\\",\\n  \\"local_modified_at\\": \\"\\",\\n  \\"revision_id\\": \\"\\",\\n  \\"investigation_info\\": {\\n    \\"status\\": 0,\\n    \\"suggestion\\": \\"\\"\\n  },\\n  \\"thumbnail_urls\\": {\\n    \\"key\\": \\"\\"\\n  },\\n  \\"image_media_metadata\\": {\\n    \\"time\\": \\"2006-01-02T15:04:05.000Z07:00\\",\\n    \\"width\\": 1920,\\n    \\"height\\": 1080,\\n    \\"location\\": \\"30.185453,120.218522\\",\\n    \\"country\\": \\"中国\\",\\n    \\"province\\": \\"浙江省\\",\\n    \\"city\\": \\"杭州市\\",\\n    \\"district\\": \\"滨江区\\",\\n    \\"township\\": \\"西兴街道\\",\\n    \\"address_line\\": \\"浙江省杭州市滨江区西兴街道江陵路\\",\\n    \\"image_tags\\": [\\n      {\\n        \\"confidence\\": 0.98,\\n        \\"parent_name\\": \\"运动\\",\\n        \\"name\\": \\"篮球\\",\\n        \\"tag_level\\": 3,\\n        \\"source\\": \\"一起打篮球\\",\\n        \\"centric_score\\": 0.877\\n      }\\n    ],\\n    \\"faces\\": \\"[{\\\\\\"FaceId\\\\\\":\\\\\\"a9a66a86-73dd-4c95-8b79-1d8a49db5226\\\\\\",\\\\\\"GroupId\\\\\\":\\\\\\"Cluster-e3b7fb52-22b3-44f2-9746-8c1804bd6af0\\\\\\",\\\\\\"FaceConfidence\\\\\\":0.999,\\\\\\"Age\\\\\\":13,\\\\\\"AgeConfidence\\\\\\":4,\\\\\\"Gender\\\\\\":\\\\\\"female\\\\\\",\\\\\\"GenderConfidence\\\\\\":1,\\\\\\"Emotion\\\\\\":\\\\\\"none\\\\\\",\\\\\\"EmotionConfidence\\\\\\":0.672,\\\\\\"FaceAttributes\\\\\\":{\\\\\\"Mask\\\\\\":\\\\\\"none\\\\\\",\\\\\\"MaskConfidence\\\\\\":0.894,\\\\\\"Beard\\\\\\":\\\\\\"none\\\\\\",\\\\\\"BeardConfidence\\\\\\":0.997,\\\\\\"Glasses\\\\\\":\\\\\\"none\\\\\\",\\\\\\"GlassesConfidence\\\\\\":0.999,\\\\\\"Mouth\\\\\\":\\\\\\"close\\\\\\",\\\\\\"MouthConfidence\\\\\\":0.937,\\\\\\"Hat\\\\\\":\\\\\\"none\\\\\\",\\\\\\"HatConfidence\\\\\\":0.998,\\\\\\"HeadPose\\\\\\":{\\\\\\"Pitch\\\\\\":10.684,\\\\\\"Roll\\\\\\":-10.707,\\\\\\"Yaw\\\\\\":-20.094},\\\\\\"FaceBoundary\\\\\\":{\\\\\\"Width\\\\\\":457,\\\\\\"Height\\\\\\":687,\\\\\\"Top\\\\\\":1324,\\\\\\"Left\\\\\\":1356}}}]\\",\\n    \\"faces_thumbnail\\": [\\n      {\\n        \\"face_id\\": \\"a9a66a86-73dd-4c95-8b79-1d8a49db5226\\",\\n        \\"face_group_id\\": \\"Cluster-e3b7fb52-22b3-44f2-9746-8c1804bd6af0\\",\\n        \\"face_thumbnail\\": \\"https://pds-domain.region.aliyuncs.com/QieGeH98%2F1001%2F63e5e551ee621482ab934a0687c6cda75fc07864%2F642a8a40c00f1ad379df421694713ee65170f09b?security-token=CAIS%2BgF1q6Ft5B2yfSjIr5bjHPCNnrdR8aSaSW7woVlmVd1Bt5HorDz2IHpPfHdoBe0btvU%2BlWxX6fwZlq5rR4QAXlDfNSyFeX20qFHPWZHInuDox55m4cTXNAr%2BIhr%2F29CoEIedZdjBe%2FCrRknZnytou9XTfimjWFrXWv%2Fgy%2BQQDLItUxK%2FcCBNCfpPOwJms7V6D3bKMuu3OROY6Qi5TmgQ41En1DIlt%2FXuk5DCtkqB12eXkLFF%2B97DRbG%2FdNRpMZtFVNO44fd7bKKp0lQLsUMSqv8q0fEcqGaW4o7CWQJLnzyCMvvJ9OVDFyN0aKEnH7J%2Bq%2FzxhTPrMnpkSlacGoABPMvZ8rSESUEP96Vbf%2Bk0JRg9Qb1MnaIJqWAgo8K6K0UP1CtqL2zrUtugpKKDHOYiKbq2O0S5yLUPVX5vBHqEi%2FFc7i6ZnHCMcXLJs4rKDKwRBEhovUXXlklq2q43OSVtLrXkBy9Xs1ers%2FhJhcxpNA0Vl3EWfJxa2BTylEdnLOQ%3D&x-oss-access-key-id=STS.NUVWJ9shpFfqKHAEY3YRmXTCN&x-oss-expires=1686455451&x-oss-process=image%2Fcrop%2Cx_1128%2Cy_1211%2Cw_914%2Ch_914%2Fformat%2Cjpg&x-oss-signature=jmhOz91Tww1ciMEwadDiioU7d93FDiBNr8s8mHyMqW0%3D&x-oss-signature-version=OSS2\\"\\n      }\\n    ],\\n    \\"exif\\": \\"{\\\\\\"Compression\\\\\\":{\\\\\\"value\\\\\\":\\\\\\"6\\\\\\"},\\\\\\"DateTime\\\\\\":{\\\\\\"value\\\\\\":\\\\\\"2020:08:19 17:11:11\\\\\\"}}\\",\\n    \\"image_quality\\": {\\n      \\"overall_score\\": 0.736\\n    }\\n  },\\n  \\"ex_fields_info\\": {\\n    \\"key\\": \\"\\"\\n  },\\n  \\"content_uri\\": \\"\\",\\n  \\"streams_info\\": {\\n    \\"key\\": {\\n      \\"crc64_hash\\": \\"\\",\\n      \\"size\\": 0,\\n      \\"content_hash\\": \\"\\",\\n      \\"content_hash_name\\": \\"\\",\\n      \\"download_url\\": \\"\\",\\n      \\"url\\": \\"\\",\\n      \\"thumbnail\\": \\"\\"\\n    }\\n  },\\n  \\"user_tags\\": {\\n    \\"key\\": \\"\\"\\n  },\\n  \\"revision_version\\": 0,\\n  \\"video_media_metadata\\": {\\n    \\"time\\": \\"2006-01-02T15:04:05.000Z07:00\\",\\n    \\"width\\": 1920,\\n    \\"height\\": 1080,\\n    \\"location\\": \\"30.185453,120.218522\\",\\n    \\"country\\": \\"中国\\",\\n    \\"province\\": \\"浙江省\\",\\n    \\"city\\": \\"杭州市\\",\\n    \\"district\\": \\"滨江区\\",\\n    \\"township\\": \\"西兴街道\\",\\n    \\"address_line\\": \\"浙江省杭州市滨江区西兴街道江陵路\\",\\n    \\"video_media_video_stream\\": [\\n      {\\n        \\"duration\\": \\"22.88\\",\\n        \\"bitrate\\": \\"108420\\",\\n        \\"code_name\\": \\"h264\\",\\n        \\"frame_count\\": \\"90\\"\\n      }\\n    ],\\n    \\"video_media_audio_stream\\": [\\n      {\\n        \\"duration\\": \\"7704.573000\\",\\n        \\"bit_rate\\": \\"129280\\",\\n        \\"code_name\\": \\"aac\\"\\n      }\\n    ]\\n  },\\n  \\"punish_flag\\": 0,\\n  \\"id_path\\": \\"\\",\\n  \\"name_path\\": \\"\\",\\n  \\"creator_type\\": \\"\\",\\n  \\"creator_id\\": \\"\\",\\n  \\"creator_name\\": \\"\\",\\n  \\"last_modifier_type\\": \\"\\",\\n  \\"last_modifier_id\\": \\"\\",\\n  \\"last_modifier_name\\": \\"\\",\\n  \\"dir_size_info\\": {\\n    \\"dir_count\\": 0,\\n    \\"file_count\\": 0\\n  },\\n  \\"trashed\\": true\\n}","type":"json"}]',
      'title' => '完成文件上传',
      'description' => '使用方法参考最佳实践：[文件上传](~~175889~~)。',
    ),
    'MoveFile' => 
    array (
      'summary' => '移动文件或文件夹。',
      'path' => '/v2/file/move',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'https',
      ),
      'tags' => 
      array (
        0 => 'api',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
        1 => 
        array (
          'BearerToken' => 
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
        'operationType' => 'update',
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'domain_id',
          'in' => 'host',
          'schema' => 
          array (
            'type' => 'string',
            'required' => true,
          ),
        ),
        1 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '请求体参数。',
            'type' => 'object',
            'properties' => 
            array (
              'drive_id' => 
              array (
                'description' => '空间 id',
                'type' => 'string',
                'required' => true,
                'example' => '1',
              ),
              'file_id' => 
              array (
                'description' => '文件 id',
                'type' => 'string',
                'required' => true,
                'example' => '9520943DC264',
              ),
              'to_parent_file_id' => 
              array (
                'description' => '目的父文件夹 id，当移入根目录时，填 root',
                'type' => 'string',
                'required' => true,
                'example' => '6520943DC261',
              ),
              'check_name_mode' => 
              array (
                'description' => '同名文件处理模式，可选值如下：

ignore：允许同名文件；

auto\\_rename：当发现同名文件是，云端自动重命名，默认为追加当前时间点，如 xxx\\_20060102\\_150405；

refuse：当云端存在同名文件时，拒绝创建新文件，返回客户端已存在同名文件的详细信息。

默认为 ignore
',
                'type' => 'string',
                'required' => false,
                'example' => 'ignore',
                'enum' => 
                array (
                  0 => 'ignore',
                  1 => 'auto_rename',
                  2 => 'refuse',
                ),
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
            'title' => 'Schema of Response',
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'domain_id' => 
              array (
                'title' => 'Id of the request',
                'description' => '域id',
                'type' => 'string',
                'example' => 'bj1',
              ),
              'drive_id' => 
              array (
                'description' => '空间id',
                'type' => 'string',
                'example' => '1',
              ),
              'file_id' => 
              array (
                'description' => '文件id',
                'type' => 'string',
                'example' => 'fileid1',
              ),
              'async_task_id' => 
              array (
                'description' => '异步任务id。

如果返回为空字符串，表示直接移动成功。

如果返回非空字符串，表示需要经过异步处理。调用GetAsyncTask，传递异步任务id，获取任务信息。',
                'type' => 'string',
                'example' => '23ebd1a24dba4166b1527add476ef2866051b4d5del106',
              ),
              'exist' => 
              array (
                'description' => '文件是否已存在',
                'type' => 'boolean',
                'example' => 'false',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"domain_id\\": \\"bj1\\",\\n  \\"drive_id\\": \\"1\\",\\n  \\"file_id\\": \\"fileid1\\",\\n  \\"async_task_id\\": \\"23ebd1a24dba4166b1527add476ef2866051b4d5del106\\",\\n  \\"exist\\": false\\n}","type":"json"}]',
      'title' => '移动文件或文件夹',
    ),
    'CopyFile' => 
    array (
      'summary' => '拷贝文件或目录。',
      'path' => '/v2/file/copy',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'https',
      ),
      'tags' => 
      array (
        0 => 'api',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
        1 => 
        array (
          'BearerToken' => 
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
          'name' => 'domain_id',
          'in' => 'host',
          'schema' => 
          array (
            'type' => 'string',
            'required' => true,
          ),
        ),
        1 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '请求体参数。',
            'type' => 'object',
            'properties' => 
            array (
              'share_id' => 
              array (
                'description' => '分享id。
如果通过分享操作文件，请携带`x-share-token` header鉴权并传递此字段，此时`drive_id`无效。否则请使用`aksk`或者`access_token`方式鉴权，并传递`drive_id`字段。
`share_id`和`drive_id`两者必须有一个字段赋值。',
                'type' => 'string',
                'required' => false,
                'example' => '7JQX1FswpQ8',
              ),
              'drive_id' => 
              array (
                'description' => '空间 id',
                'type' => 'string',
                'required' => false,
                'example' => '1',
              ),
              'file_id' => 
              array (
                'description' => '文件或文件夹 id',
                'type' => 'string',
                'required' => true,
                'example' => '4221bf6e6ab43c255edc4463bf3a6f5f5d317406',
              ),
              'to_drive_id' => 
              array (
                'description' => '拷贝到的空间id。
默认值同drive_id。',
                'type' => 'string',
                'required' => false,
                'example' => '1',
              ),
              'to_parent_file_id' => 
              array (
                'description' => '目的父文件夹 id，当复制进根目录时，填 root',
                'type' => 'string',
                'required' => true,
                'example' => '6520943DC261',
              ),
              'auto_rename' => 
              array (
                'description' => '当目标文件夹下存在同名文件时，是否自动重命名，默认为 false',
                'type' => 'boolean',
                'required' => false,
                'example' => 'true',
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
            'type' => 'object',
            'properties' => 
            array (
              'domain_id' => 
              array (
                'description' => '域id',
                'type' => 'string',
                'example' => 'bj1',
              ),
              'drive_id' => 
              array (
                'description' => '空间id',
                'type' => 'string',
                'example' => '1',
              ),
              'file_id' => 
              array (
                'description' => '复制后的新文件或文件夹 id',
                'type' => 'string',
                'example' => '4221bf6e6ab43a255edc4463bffa6f5f5d317401',
              ),
              'async_task_id' => 
              array (
                'description' => '异步任务id。

当复制的是文件时，不返回该字段；当复制的是文件夹时，为后台异步复制，会返回该字段，调用GetAsyncTask，传递异步任务id，获取任务信息。',
                'type' => 'string',
                'example' => '000e89fb-cf8f-11e9-8ab4-b6e980803a3b',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"domain_id\\": \\"bj1\\",\\n  \\"drive_id\\": \\"1\\",\\n  \\"file_id\\": \\"4221bf6e6ab43a255edc4463bffa6f5f5d317401\\",\\n  \\"async_task_id\\": \\"000e89fb-cf8f-11e9-8ab4-b6e980803a3b\\"\\n}","type":"json"}]',
      'title' => '复制文件或文件夹',
    ),
    'GetDownloadUrl' => 
    array (
      'summary' => '获取文件下载地址。',
      'path' => '/v2/file/get_download_url',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'https',
      ),
      'tags' => 
      array (
        0 => 'api',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
        1 => 
        array (
          'BearerToken' => 
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
          'name' => 'domain_id',
          'in' => 'host',
          'schema' => 
          array (
            'type' => 'string',
            'required' => true,
          ),
        ),
        1 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '请求体参数。',
            'type' => 'object',
            'properties' => 
            array (
              'share_id' => 
              array (
                'description' => '分享id。
如果通过分享操作文件，请携带`x-share-token` header鉴权并传递此字段，此时`drive_id`无效。否则请使用`aksk`或者`access_token`方式鉴权，并传递`drive_id`字段。
`share_id`和`drive_id`两者必须有一个字段赋值。',
                'type' => 'string',
                'required' => false,
                'example' => '7JQX1FswpQ8',
              ),
              'drive_id' => 
              array (
                'description' => '空间 id',
                'type' => 'string',
                'required' => false,
                'example' => '1',
              ),
              'file_id' => 
              array (
                'description' => '文件 id',
                'type' => 'string',
                'required' => true,
                'example' => '9520943DC264',
              ),
              'file_name' => 
              array (
                'description' => '文件名，最长 1024 字符',
                'type' => 'string',
                'required' => false,
                'example' => '1.txt',
                'maxLength' => 1024,
                'minLength' => 1,
              ),
              'expire_sec' => 
              array (
                'description' => '下载地址过期时间，单位为秒，最长 115200 秒，默认为 900 秒',
                'type' => 'integer',
                'format' => 'int32',
                'required' => false,
                'maximum' => '115200',
                'minimum' => '1',
                'example' => '100',
                'default' => '900',
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
            'title' => 'Schema of Response',
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'url' => 
              array (
                'title' => 'Id of the request',
                'description' => '公网下载地址',
                'type' => 'string',
                'example' => 'https://data.aliyunpds.com/hz22%2F5d79219b0aa9a7c995a94a96993ba3205cd91c5a%2F5d79219bf3261a5d38744da0834ed489b677a27a?Expires=xxxOSSAccessKeyId=xxx&Signature=xxx&response-content-disposition=attachment%3Bfilename%3DtBiZAoJPC2c8b13450eda4292b7f5f8010618e078.txt',
              ),
              'internal_url' => 
              array (
                'description' => 'vpc内下载地址',
                'type' => 'string',
                'example' => 'https://data-vpc.aliyunpds.com/hz22%2F5d79219b0aa9a7c995a94a96993ba3205cd91c5a%2F5d79219bf3261a5d38744da0834ed489b677a27a?Expires=xxxOSSAccessKeyId=xxx&Signature=xxx&response-content-disposition=attachment%3Bfilename%3DtBiZAoJPC2c8b13450eda4292b7f5f8010618e078.txt',
              ),
              'cdn_url' => 
              array (
                'description' => 'cdn下载地址。',
                'type' => 'string',
                'example' => 'https://data-cdn.aliyunpds.com/hz22%2F5d79219b0aa9a7c995a94a96993ba3205cd91c5a%2F5d79219bf3261a5d38744da0834ed489b677a27a?Expires=xxxOSSAccessKeyId=xxx&Signature=xxx&response-content-disposition=attachment%3Bfilename%3DtBiZAoJPC2c8b13450eda4292b7f5f8010618e078.txt',
              ),
              'expiration' => 
              array (
                'description' => '下载链接的过期时间。',
                'type' => 'string',
                'example' => '2022-01-02T15:04:05.999Z07:00',
              ),
              'size' => 
              array (
                'description' => '文件大小，单位：byte。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '10',
              ),
              'crc64_hash' => 
              array (
                'description' => 'crc64值',
                'type' => 'string',
                'example' => '5498595269368962671',
              ),
              'content_hash' => 
              array (
                'description' => '文件内容hash',
                'type' => 'string',
                'example' => 'EA4942AA8761213890A5C386F88E6464D2C31CA1',
              ),
              'content_hash_name' => 
              array (
                'description' => '文件内容hash算法名',
                'type' => 'string',
                'example' => 'sha1',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"url\\": \\"https://data.aliyunpds.com/hz22%2F5d79219b0aa9a7c995a94a96993ba3205cd91c5a%2F5d79219bf3261a5d38744da0834ed489b677a27a?Expires=xxxOSSAccessKeyId=xxx&Signature=xxx&response-content-disposition=attachment%3Bfilename%3DtBiZAoJPC2c8b13450eda4292b7f5f8010618e078.txt\\",\\n  \\"internal_url\\": \\"https://data-vpc.aliyunpds.com/hz22%2F5d79219b0aa9a7c995a94a96993ba3205cd91c5a%2F5d79219bf3261a5d38744da0834ed489b677a27a?Expires=xxxOSSAccessKeyId=xxx&Signature=xxx&response-content-disposition=attachment%3Bfilename%3DtBiZAoJPC2c8b13450eda4292b7f5f8010618e078.txt\\",\\n  \\"cdn_url\\": \\"https://data-cdn.aliyunpds.com/hz22%2F5d79219b0aa9a7c995a94a96993ba3205cd91c5a%2F5d79219bf3261a5d38744da0834ed489b677a27a?Expires=xxxOSSAccessKeyId=xxx&Signature=xxx&response-content-disposition=attachment%3Bfilename%3DtBiZAoJPC2c8b13450eda4292b7f5f8010618e078.txt\\",\\n  \\"expiration\\": \\"2022-01-02T15:04:05.999Z07:00\\",\\n  \\"size\\": 10,\\n  \\"crc64_hash\\": \\"5498595269368962671\\",\\n  \\"content_hash\\": \\"EA4942AA8761213890A5C386F88E6464D2C31CA1\\",\\n  \\"content_hash_name\\": \\"sha1\\"\\n}","type":"json"}]',
      'title' => '获取文件下载地址',
    ),
    'FilePutUserTags' => 
    array (
      'summary' => '对文件添加自定义标签。',
      'path' => '/v2/file/put_usertags',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'https',
      ),
      'tags' => 
      array (
        0 => 'api',
      ),
      'security' => 
      array (
        0 => 
        array (
          'BearerToken' => 
          array (
          ),
        ),
        1 => 
        array (
          'AK' => 
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
          'name' => 'domain_id',
          'in' => 'host',
          'schema' => 
          array (
            'type' => 'string',
            'required' => true,
          ),
        ),
        1 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '请求体参数。',
            'type' => 'object',
            'properties' => 
            array (
              'drive_id' => 
              array (
                'description' => '空间 id',
                'type' => 'string',
                'required' => true,
                'example' => '1',
              ),
              'file_id' => 
              array (
                'description' => '文件 id',
                'type' => 'string',
                'required' => true,
                'example' => '9520943DC264',
              ),
              'user_tags' => 
              array (
                'description' => '待添加的标签列表。
数组不能为空，且数量上限为 1000。
数组中不能存在同名标签。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '标签名和标签值的长度之和不能超过 2000 字节。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'key' => 
                    array (
                      'description' => '标签名。
不能为空，且不能含有 # 字符。',
                      'type' => 'string',
                      'required' => true,
                      'example' => 'tag',
                      'pattern' => '^[^#]+$',
                    ),
                    'value' => 
                    array (
                      'description' => '标签值。
不能含有 # 字符。',
                      'type' => 'string',
                      'required' => false,
                      'example' => 'value',
                      'pattern' => '^[^#]+$',
                    ),
                  ),
                  'required' => true,
                ),
                'required' => true,
                'maxItems' => 1000,
                'minItems' => 1,
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
            'title' => 'Schema of Response',
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'file_id' => 
              array (
                'title' => 'Id of the request',
                'description' => '文件 id',
                'type' => 'string',
                'required' => true,
                'example' => '9520943DC264',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"file_id\\": \\"9520943DC264\\"\\n}","type":"json"}]',
      'title' => '添加文件自定义标签',
      'description' => '此接口为增量更新操作：

- 若此次请求中存在同名标签则会覆盖之前的值

- 若标签不存在则新增

- 历史非同名标签不受影响。',
    ),
    'FileDeleteUserTags' => 
    array (
      'summary' => '删除文件自定义标签。',
      'path' => '/v2/file/delete_usertags',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'https',
      ),
      'tags' => 
      array (
        0 => 'api',
      ),
      'security' => 
      array (
        0 => 
        array (
          'BearerToken' => 
          array (
          ),
        ),
        1 => 
        array (
          'AK' => 
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
          'name' => 'domain_id',
          'in' => 'host',
          'schema' => 
          array (
            'type' => 'string',
            'required' => true,
          ),
        ),
        1 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '请求体参数。',
            'type' => 'object',
            'properties' => 
            array (
              'drive_id' => 
              array (
                'description' => '空间 id',
                'type' => 'string',
                'required' => true,
                'example' => '1',
              ),
              'file_id' => 
              array (
                'description' => '文件 id',
                'type' => 'string',
                'required' => true,
                'example' => '9520943DC264',
              ),
              'key_list' => 
              array (
                'description' => '待删除的标签列表。
数组不能为空，且数量上限为 1000。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '标签名。
不能带有 # 字符。',
                  'type' => 'string',
                  'required' => true,
                  'example' => 'tag',
                  'pattern' => '^[^#]+$',
                ),
                'required' => true,
                'maxItems' => 1000,
                'minItems' => 1,
              ),
            ),
            'required' => false,
          ),
        ),
      ),
      'responses' => 
      array (
        204 => 
        array (
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{}","type":"json"}]',
      'title' => '删除文件自定义标签',
    ),
    'DeleteRevision' => 
    array (
      'summary' => '删除历史版本，不支持删除最新版本。',
      'path' => '/v2/file/revision/delete',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'https',
      ),
      'tags' => 
      array (
        0 => 'api',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
        1 => 
        array (
          'BearerToken' => 
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
          'name' => 'domain_id',
          'in' => 'host',
          'schema' => 
          array (
            'title' => 'A short description of struct',
            'description' => 'A short description of struct',
            'type' => 'string',
            'required' => true,
          ),
        ),
        1 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '请求体参数。',
            'type' => 'object',
            'properties' => 
            array (
              'drive_id' => 
              array (
                'description' => '空间 id',
                'type' => 'string',
                'required' => true,
                'example' => '1',
              ),
              'file_id' => 
              array (
                'description' => '文件 id',
                'type' => 'string',
                'required' => true,
                'example' => '9520943DC264',
              ),
              'revision_id' => 
              array (
                'description' => '版本 id',
                'type' => 'string',
                'required' => true,
                'example' => '40CB7794C929',
              ),
            ),
            'required' => false,
          ),
        ),
      ),
      'responses' => 
      array (
        204 => 
        array (
          'schema' => 
          array (
            'title' => 'Schema of Response',
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{}","type":"json"}]',
      'title' => '删除历史版本',
    ),
    'UpdateRevision' => 
    array (
      'summary' => '更新版本信息，设置版本为永久保留，或者添加版本描述信息。支持将一个文件的最多50个版本设置为永久保留。',
      'path' => '/v2/file/revision/update',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'https',
      ),
      'tags' => 
      array (
        0 => 'api',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
        1 => 
        array (
          'BearerToken' => 
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
          'name' => 'domain_id',
          'in' => 'host',
          'schema' => 
          array (
            'title' => 'A short description of struct',
            'description' => 'A short description of struct',
            'type' => 'string',
            'required' => true,
          ),
        ),
        1 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '请求体参数。',
            'type' => 'object',
            'properties' => 
            array (
              'drive_id' => 
              array (
                'description' => '空间 id',
                'type' => 'string',
                'required' => true,
                'example' => '1',
              ),
              'file_id' => 
              array (
                'description' => '文件 id',
                'type' => 'string',
                'required' => true,
                'example' => '9520943DC264',
              ),
              'revision_id' => 
              array (
                'description' => '版本 id',
                'type' => 'string',
                'required' => true,
                'example' => '40CB7794C929',
              ),
              'keep_forever' => 
              array (
                'description' => '是否永久保留

默认不传递该参数，表示不修改版本的永久保留属性。',
                'type' => 'boolean',
                'required' => false,
                'example' => 'true',
              ),
              'revision_description' => 
              array (
                'description' => '版本描述信息，最长1024字符

默认不传递该参数，表示不修改版本的版本描述信息。',
                'type' => 'string',
                'required' => false,
                'example' => 'aaa',
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
            'description' => '版本信息',
            '$ref' => '#/components/schemas/Revision',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"domain_id\\": \\"\\",\\n  \\"drive_id\\": \\"\\",\\n  \\"file_id\\": \\"\\",\\n  \\"revision_id\\": \\"\\",\\n  \\"revision_name\\": \\"\\",\\n  \\"revision_version\\": 0,\\n  \\"size\\": 0,\\n  \\"file_extension\\": \\"\\",\\n  \\"created_at\\": \\"\\",\\n  \\"updated_at\\": \\"\\",\\n  \\"keep_forever\\": true,\\n  \\"revision_description\\": \\"\\",\\n  \\"is_latest_version\\": true,\\n  \\"crc64_hash\\": \\"\\",\\n  \\"content_hash\\": \\"\\",\\n  \\"content_hash_name\\": \\"\\",\\n  \\"thumbnail\\": \\"\\",\\n  \\"url\\": \\"\\",\\n  \\"download_url\\": \\"\\",\\n  \\"creator_type\\": \\"\\",\\n  \\"creator_id\\": \\"\\",\\n  \\"creator_name\\": \\"\\"\\n}","type":"json"}]',
      'title' => '更新版本信息',
    ),
    'RestoreRevision' => 
    array (
      'summary' => '将文件的某个历史版本，还原为文件的最新版本，还原时生成一个新版本，被还原的版本不变。不支持还原最新版本。',
      'path' => '/v2/file/revision/restore',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'https',
      ),
      'tags' => 
      array (
        0 => 'api',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
        1 => 
        array (
          'BearerToken' => 
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
          'name' => 'domain_id',
          'in' => 'host',
          'schema' => 
          array (
            'title' => 'A short description of struct',
            'description' => 'A short description of struct',
            'type' => 'string',
            'required' => true,
          ),
        ),
        1 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '请求体参数。',
            'type' => 'object',
            'properties' => 
            array (
              'drive_id' => 
              array (
                'description' => '空间 id',
                'type' => 'string',
                'required' => true,
                'example' => '1',
              ),
              'file_id' => 
              array (
                'description' => '文件 id',
                'type' => 'string',
                'required' => true,
                'example' => '9520943DC264',
              ),
              'revision_id' => 
              array (
                'description' => '版本 id',
                'type' => 'string',
                'required' => true,
                'example' => '40CB7794C929',
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
            'description' => '版本信息',
            '$ref' => '#/components/schemas/Revision',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"domain_id\\": \\"\\",\\n  \\"drive_id\\": \\"\\",\\n  \\"file_id\\": \\"\\",\\n  \\"revision_id\\": \\"\\",\\n  \\"revision_name\\": \\"\\",\\n  \\"revision_version\\": 0,\\n  \\"size\\": 0,\\n  \\"file_extension\\": \\"\\",\\n  \\"created_at\\": \\"\\",\\n  \\"updated_at\\": \\"\\",\\n  \\"keep_forever\\": true,\\n  \\"revision_description\\": \\"\\",\\n  \\"is_latest_version\\": true,\\n  \\"crc64_hash\\": \\"\\",\\n  \\"content_hash\\": \\"\\",\\n  \\"content_hash_name\\": \\"\\",\\n  \\"thumbnail\\": \\"\\",\\n  \\"url\\": \\"\\",\\n  \\"download_url\\": \\"\\",\\n  \\"creator_type\\": \\"\\",\\n  \\"creator_id\\": \\"\\",\\n  \\"creator_name\\": \\"\\"\\n}","type":"json"}]',
      'title' => '还原历史版本',
    ),
    'ListRevision' => 
    array (
      'summary' => '列举版本信息。',
      'path' => '/v2/file/revision/list',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'https',
      ),
      'tags' => 
      array (
        0 => 'api',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
        1 => 
        array (
          'BearerToken' => 
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
          'name' => 'domain_id',
          'in' => 'host',
          'schema' => 
          array (
            'title' => 'A short description of struct',
            'description' => 'A short description of struct',
            'type' => 'string',
            'required' => true,
          ),
        ),
        1 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '请求体参数。',
            'type' => 'object',
            'properties' => 
            array (
              'drive_id' => 
              array (
                'description' => '空间 id',
                'type' => 'string',
                'required' => true,
                'example' => '1',
              ),
              'file_id' => 
              array (
                'description' => '文件 id',
                'type' => 'string',
                'required' => true,
                'example' => '9520943DC264',
              ),
              'marker' => 
              array (
                'description' => '设定结果从marker之后按字母排序的第一个开始返回。如果不设定，则从头开始返回数据。

默认值：无',
                'type' => 'string',
                'required' => false,
                'example' => '40CB7794C929',
              ),
              'limit' => 
              array (
                'description' => '限定此次返回资源的数量，取值范围\\[1,100\\]。

默认值为50

返回结果可以小于指定的数量，但不能多于指定的数量。',
                'type' => 'integer',
                'format' => 'int64',
                'required' => false,
                'maximum' => '200',
                'minimum' => '1',
                'example' => '100',
              ),
              'fields' => 
              array (
                'description' => '筛选返回字段

默认为空。当填 * 时，返回所有字段，会比为空时多返回创建者名称。',
                'type' => 'string',
                'required' => false,
                'example' => '*',
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
            'title' => 'Schema of Response',
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'items' => 
              array (
                'description' => '版本信息数组',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '版本信息',
                  '$ref' => '#/components/schemas/Revision',
                ),
              ),
              'next_marker' => 
              array (
                'description' => '下一页起始资源标识符, 最后一页该值为空',
                'type' => 'string',
                'example' => 'NWQ1Yjk4YmI1ZDRlYmU1Y2E0YWE0NmJhYWJmODBhNDQ2NzhlMTRhMg',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"items\\": [\\n    {\\n      \\"domain_id\\": \\"\\",\\n      \\"drive_id\\": \\"\\",\\n      \\"file_id\\": \\"\\",\\n      \\"revision_id\\": \\"\\",\\n      \\"revision_name\\": \\"\\",\\n      \\"revision_version\\": 0,\\n      \\"size\\": 0,\\n      \\"file_extension\\": \\"\\",\\n      \\"created_at\\": \\"\\",\\n      \\"updated_at\\": \\"\\",\\n      \\"keep_forever\\": true,\\n      \\"revision_description\\": \\"\\",\\n      \\"is_latest_version\\": true,\\n      \\"crc64_hash\\": \\"\\",\\n      \\"content_hash\\": \\"\\",\\n      \\"content_hash_name\\": \\"\\",\\n      \\"thumbnail\\": \\"\\",\\n      \\"url\\": \\"\\",\\n      \\"download_url\\": \\"\\",\\n      \\"creator_type\\": \\"\\",\\n      \\"creator_id\\": \\"\\",\\n      \\"creator_name\\": \\"\\"\\n    }\\n  ],\\n  \\"next_marker\\": \\"NWQ1Yjk4YmI1ZDRlYmU1Y2E0YWE0NmJhYWJmODBhNDQ2NzhlMTRhMg\\"\\n}","type":"json"}]',
      'title' => '列举版本',
    ),
    'GetRevision' => 
    array (
      'summary' => '获取版本详情。',
      'path' => '/v2/file/revision/get',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'https',
      ),
      'tags' => 
      array (
        0 => 'api',
      ),
      'security' => 
      array (
        0 => 
        array (
          'BearerToken' => 
          array (
          ),
        ),
        1 => 
        array (
          'AK' => 
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
          'name' => 'domain_id',
          'in' => 'host',
          'schema' => 
          array (
            'title' => 'A short description of struct',
            'description' => 'A short description of struct',
            'type' => 'string',
            'required' => true,
          ),
        ),
        1 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '请求体参数。',
            'type' => 'object',
            'properties' => 
            array (
              'drive_id' => 
              array (
                'description' => '空间 id',
                'type' => 'string',
                'required' => true,
                'example' => '1',
              ),
              'file_id' => 
              array (
                'description' => '文件 id',
                'type' => 'string',
                'required' => true,
                'example' => '9520943DC264',
              ),
              'revision_id' => 
              array (
                'description' => '版本 id',
                'type' => 'string',
                'required' => true,
                'example' => '40CB7794C929',
              ),
              'url_expire_sec' => 
              array (
                'description' => '过期时间，单位为秒，最短 10 秒，最长 86400 秒

默认15分钟。',
                'type' => 'integer',
                'format' => 'int64',
                'required' => false,
                'example' => '900',
              ),
              'fields' => 
              array (
                'description' => '筛选返回字段

默认为空。当填 * 时，返回所有字段，会比为空时多返回创建者名称',
                'type' => 'string',
                'required' => false,
                'example' => '*',
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
            'description' => '版本信息',
            '$ref' => '#/components/schemas/Revision',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"domain_id\\": \\"\\",\\n  \\"drive_id\\": \\"\\",\\n  \\"file_id\\": \\"\\",\\n  \\"revision_id\\": \\"\\",\\n  \\"revision_name\\": \\"\\",\\n  \\"revision_version\\": 0,\\n  \\"size\\": 0,\\n  \\"file_extension\\": \\"\\",\\n  \\"created_at\\": \\"\\",\\n  \\"updated_at\\": \\"\\",\\n  \\"keep_forever\\": true,\\n  \\"revision_description\\": \\"\\",\\n  \\"is_latest_version\\": true,\\n  \\"crc64_hash\\": \\"\\",\\n  \\"content_hash\\": \\"\\",\\n  \\"content_hash_name\\": \\"\\",\\n  \\"thumbnail\\": \\"\\",\\n  \\"url\\": \\"\\",\\n  \\"download_url\\": \\"\\",\\n  \\"creator_type\\": \\"\\",\\n  \\"creator_id\\": \\"\\",\\n  \\"creator_name\\": \\"\\"\\n}","type":"json"}]',
      'title' => '获取版本信息',
    ),
    'ScanFile' => 
    array (
      'summary' => '扫描文件。',
      'path' => '/v2/file/scan',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'https',
      ),
      'tags' => 
      array (
        0 => 'api',
      ),
      'security' => 
      array (
        0 => 
        array (
          'BearerToken' => 
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
          'name' => 'domain_id',
          'in' => 'host',
          'schema' => 
          array (
            'type' => 'string',
            'required' => true,
          ),
        ),
        1 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '请求体',
            'type' => 'object',
            'properties' => 
            array (
              'drive_id' => 
              array (
                'description' => '空间id',
                'type' => 'string',
                'required' => true,
                'example' => '1',
              ),
              'limit' => 
              array (
                'description' => '限定此次返回资源的数量，取值范围\\[1,100\\]。

返回结果可以小于指定的数量，但不能多于指定的数量。',
                'type' => 'integer',
                'format' => 'int32',
                'required' => false,
                'maximum' => '100',
                'minimum' => '1',
                'example' => '50',
                'default' => '50',
              ),
              'marker' => 
              array (
                'description' => '设定结果从marker之后按字母排序的第一个开始返回。如果不设定，则从头开始返回数据。
<br>默认值：无',
                'type' => 'string',
                'required' => false,
                'example' => 'NWQ1Yjk4YmI1ZDRlYmU1Y2E0YWE0NmJhYWJmODBhNDQ2NzhlMTRhMg',
              ),
              'fields' => 
              array (
                'title' => 'scan file 想要获取的文件属性，
1. 如果想要获取所有属性使用‘*’，
 2.不传默认返回以下属性：
      file_id, drive_id, parent_file_id, type,
      created_at, updated_at, file_extention, size, starred, status,deleting, category, permissions
   3 用户也可以指定属性进行返回，多个属性之间用，隔开
       
',
                'description' => 'scan file 想要获取的文件属性，
-  如果想要获取所有属性使用‘*’，
- 不传默认返回以下属性：
      - file_id, 
      - drive_id, 
       - parent_file_id, 
       - type, 
       - created_at, 
       - updated_at, 
       - file_extention, 
       - size, 
       - starred, 
       - status,
       - category, 
       - permissions
- 用户也可以指定属性进行返回，多个属性之间用\',\'隔开',
                'type' => 'string',
                'required' => false,
                'example' => '*',
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
            'title' => 'Schema of Response',
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'items' => 
              array (
                'description' => '文件列表',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '文件信息',
                  '$ref' => '#/components/schemas/File',
                ),
              ),
              'next_marker' => 
              array (
                'description' => '下一页起始资源标识符, 最后一页该值为空。',
                'type' => 'string',
                'example' => 'NWQ1Yjk4YmI1ZDRlYmU1Y2E0YWE0NmJhYWJmODBhNDQ2NzhlMTRhMg',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"items\\": [\\n    {\\n      \\"domain_id\\": \\"\\",\\n      \\"drive_id\\": \\"\\",\\n      \\"file_id\\": \\"\\",\\n      \\"name\\": \\"\\",\\n      \\"type\\": \\"\\",\\n      \\"content_type\\": \\"\\",\\n      \\"created_at\\": \\"\\",\\n      \\"updated_at\\": \\"\\",\\n      \\"description\\": \\"\\",\\n      \\"trashed_at\\": \\"\\",\\n      \\"file_extension\\": \\"\\",\\n      \\"mime_type\\": \\"\\",\\n      \\"mime_extension\\": \\"\\",\\n      \\"hidden\\": true,\\n      \\"size\\": 0,\\n      \\"starred\\": true,\\n      \\"status\\": \\"\\",\\n      \\"user_meta\\": \\"\\",\\n      \\"labels\\": [\\n        \\"\\"\\n      ],\\n      \\"upload_id\\": \\"\\",\\n      \\"parent_file_id\\": \\"\\",\\n      \\"crc64_hash\\": \\"\\",\\n      \\"content_hash\\": \\"\\",\\n      \\"content_hash_name\\": \\"\\",\\n      \\"download_url\\": \\"\\",\\n      \\"thumbnail\\": \\"\\",\\n      \\"category\\": \\"\\",\\n      \\"local_created_at\\": \\"\\",\\n      \\"local_modified_at\\": \\"\\",\\n      \\"revision_id\\": \\"\\",\\n      \\"investigation_info\\": {\\n        \\"status\\": 0,\\n        \\"suggestion\\": \\"\\"\\n      },\\n      \\"thumbnail_urls\\": {\\n        \\"key\\": \\"\\"\\n      },\\n      \\"image_media_metadata\\": {\\n        \\"time\\": \\"2006-01-02T15:04:05.000Z07:00\\",\\n        \\"width\\": 1920,\\n        \\"height\\": 1080,\\n        \\"location\\": \\"30.185453,120.218522\\",\\n        \\"country\\": \\"中国\\",\\n        \\"province\\": \\"浙江省\\",\\n        \\"city\\": \\"杭州市\\",\\n        \\"district\\": \\"滨江区\\",\\n        \\"township\\": \\"西兴街道\\",\\n        \\"address_line\\": \\"浙江省杭州市滨江区西兴街道江陵路\\",\\n        \\"image_tags\\": [\\n          {\\n            \\"confidence\\": 0.98,\\n            \\"parent_name\\": \\"运动\\",\\n            \\"name\\": \\"篮球\\",\\n            \\"tag_level\\": 3,\\n            \\"source\\": \\"一起打篮球\\",\\n            \\"centric_score\\": 0.877\\n          }\\n        ],\\n        \\"faces\\": \\"[{\\\\\\"FaceId\\\\\\":\\\\\\"a9a66a86-73dd-4c95-8b79-1d8a49db5226\\\\\\",\\\\\\"GroupId\\\\\\":\\\\\\"Cluster-e3b7fb52-22b3-44f2-9746-8c1804bd6af0\\\\\\",\\\\\\"FaceConfidence\\\\\\":0.999,\\\\\\"Age\\\\\\":13,\\\\\\"AgeConfidence\\\\\\":4,\\\\\\"Gender\\\\\\":\\\\\\"female\\\\\\",\\\\\\"GenderConfidence\\\\\\":1,\\\\\\"Emotion\\\\\\":\\\\\\"none\\\\\\",\\\\\\"EmotionConfidence\\\\\\":0.672,\\\\\\"FaceAttributes\\\\\\":{\\\\\\"Mask\\\\\\":\\\\\\"none\\\\\\",\\\\\\"MaskConfidence\\\\\\":0.894,\\\\\\"Beard\\\\\\":\\\\\\"none\\\\\\",\\\\\\"BeardConfidence\\\\\\":0.997,\\\\\\"Glasses\\\\\\":\\\\\\"none\\\\\\",\\\\\\"GlassesConfidence\\\\\\":0.999,\\\\\\"Mouth\\\\\\":\\\\\\"close\\\\\\",\\\\\\"MouthConfidence\\\\\\":0.937,\\\\\\"Hat\\\\\\":\\\\\\"none\\\\\\",\\\\\\"HatConfidence\\\\\\":0.998,\\\\\\"HeadPose\\\\\\":{\\\\\\"Pitch\\\\\\":10.684,\\\\\\"Roll\\\\\\":-10.707,\\\\\\"Yaw\\\\\\":-20.094},\\\\\\"FaceBoundary\\\\\\":{\\\\\\"Width\\\\\\":457,\\\\\\"Height\\\\\\":687,\\\\\\"Top\\\\\\":1324,\\\\\\"Left\\\\\\":1356}}}]\\",\\n        \\"faces_thumbnail\\": [\\n          {\\n            \\"face_id\\": \\"a9a66a86-73dd-4c95-8b79-1d8a49db5226\\",\\n            \\"face_group_id\\": \\"Cluster-e3b7fb52-22b3-44f2-9746-8c1804bd6af0\\",\\n            \\"face_thumbnail\\": \\"https://pds-domain.region.aliyuncs.com/QieGeH98%2F1001%2F63e5e551ee621482ab934a0687c6cda75fc07864%2F642a8a40c00f1ad379df421694713ee65170f09b?security-token=CAIS%2BgF1q6Ft5B2yfSjIr5bjHPCNnrdR8aSaSW7woVlmVd1Bt5HorDz2IHpPfHdoBe0btvU%2BlWxX6fwZlq5rR4QAXlDfNSyFeX20qFHPWZHInuDox55m4cTXNAr%2BIhr%2F29CoEIedZdjBe%2FCrRknZnytou9XTfimjWFrXWv%2Fgy%2BQQDLItUxK%2FcCBNCfpPOwJms7V6D3bKMuu3OROY6Qi5TmgQ41En1DIlt%2FXuk5DCtkqB12eXkLFF%2B97DRbG%2FdNRpMZtFVNO44fd7bKKp0lQLsUMSqv8q0fEcqGaW4o7CWQJLnzyCMvvJ9OVDFyN0aKEnH7J%2Bq%2FzxhTPrMnpkSlacGoABPMvZ8rSESUEP96Vbf%2Bk0JRg9Qb1MnaIJqWAgo8K6K0UP1CtqL2zrUtugpKKDHOYiKbq2O0S5yLUPVX5vBHqEi%2FFc7i6ZnHCMcXLJs4rKDKwRBEhovUXXlklq2q43OSVtLrXkBy9Xs1ers%2FhJhcxpNA0Vl3EWfJxa2BTylEdnLOQ%3D&x-oss-access-key-id=STS.NUVWJ9shpFfqKHAEY3YRmXTCN&x-oss-expires=1686455451&x-oss-process=image%2Fcrop%2Cx_1128%2Cy_1211%2Cw_914%2Ch_914%2Fformat%2Cjpg&x-oss-signature=jmhOz91Tww1ciMEwadDiioU7d93FDiBNr8s8mHyMqW0%3D&x-oss-signature-version=OSS2\\"\\n          }\\n        ],\\n        \\"exif\\": \\"{\\\\\\"Compression\\\\\\":{\\\\\\"value\\\\\\":\\\\\\"6\\\\\\"},\\\\\\"DateTime\\\\\\":{\\\\\\"value\\\\\\":\\\\\\"2020:08:19 17:11:11\\\\\\"}}\\",\\n        \\"image_quality\\": {\\n          \\"overall_score\\": 0.736\\n        }\\n      },\\n      \\"ex_fields_info\\": {\\n        \\"key\\": \\"\\"\\n      },\\n      \\"content_uri\\": \\"\\",\\n      \\"streams_info\\": {\\n        \\"key\\": {\\n          \\"crc64_hash\\": \\"\\",\\n          \\"size\\": 0,\\n          \\"content_hash\\": \\"\\",\\n          \\"content_hash_name\\": \\"\\",\\n          \\"download_url\\": \\"\\",\\n          \\"url\\": \\"\\",\\n          \\"thumbnail\\": \\"\\"\\n        }\\n      },\\n      \\"user_tags\\": {\\n        \\"key\\": \\"\\"\\n      },\\n      \\"revision_version\\": 0,\\n      \\"video_media_metadata\\": {\\n        \\"time\\": \\"2006-01-02T15:04:05.000Z07:00\\",\\n        \\"width\\": 1920,\\n        \\"height\\": 1080,\\n        \\"location\\": \\"30.185453,120.218522\\",\\n        \\"country\\": \\"中国\\",\\n        \\"province\\": \\"浙江省\\",\\n        \\"city\\": \\"杭州市\\",\\n        \\"district\\": \\"滨江区\\",\\n        \\"township\\": \\"西兴街道\\",\\n        \\"address_line\\": \\"浙江省杭州市滨江区西兴街道江陵路\\",\\n        \\"video_media_video_stream\\": [\\n          {\\n            \\"duration\\": \\"22.88\\",\\n            \\"bitrate\\": \\"108420\\",\\n            \\"code_name\\": \\"h264\\",\\n            \\"frame_count\\": \\"90\\"\\n          }\\n        ],\\n        \\"video_media_audio_stream\\": [\\n          {\\n            \\"duration\\": \\"7704.573000\\",\\n            \\"bit_rate\\": \\"129280\\",\\n            \\"code_name\\": \\"aac\\"\\n          }\\n        ]\\n      },\\n      \\"punish_flag\\": 0,\\n      \\"id_path\\": \\"\\",\\n      \\"name_path\\": \\"\\",\\n      \\"creator_type\\": \\"\\",\\n      \\"creator_id\\": \\"\\",\\n      \\"creator_name\\": \\"\\",\\n      \\"last_modifier_type\\": \\"\\",\\n      \\"last_modifier_id\\": \\"\\",\\n      \\"last_modifier_name\\": \\"\\",\\n      \\"dir_size_info\\": {\\n        \\"dir_count\\": 0,\\n        \\"file_count\\": 0\\n      },\\n      \\"trashed\\": true\\n    }\\n  ],\\n  \\"next_marker\\": \\"NWQ1Yjk4YmI1ZDRlYmU1Y2E0YWE0NmJhYWJmODBhNDQ2NzhlMTRhMg\\"\\n}","type":"json"}]',
      'title' => '扫描文件',
    ),
    'ListDelta' => 
    array (
      'summary' => '列举增量信息。',
      'path' => '/v2/file/list_delta',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'https',
      ),
      'tags' => 
      array (
        0 => 'api',
      ),
      'security' => 
      array (
        0 => 
        array (
          'BearerToken' => 
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
          'name' => 'domain_id',
          'in' => 'host',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
          ),
        ),
        1 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '请求body',
            'type' => 'object',
            'properties' => 
            array (
              'drive_id' => 
              array (
                'title' => '云端Drive id
',
                'description' => '空间id',
                'type' => 'string',
                'required' => true,
                'example' => '1',
              ),
              'sync_root_id' => 
              array (
                'title' => '如果是同步目录的增量信息，必须设置同步目录对应的云端根目录',
                'description' => '同步文件夹根节点文件id',
                'type' => 'string',
                'required' => false,
                'example' => '622fb09598ae66777c7040109a16f49381f6abe1',
              ),
              'cursor' => 
              array (
                'title' => '增量信息的起始游标',
                'description' => '游标',
                'type' => 'string',
                'required' => false,
                'example' => 'NWQ1Yjk4YmI1ZDRlYmU1Y2E0YWE0NmJhYWJmODBhNDQ2NzhlMTRhMg',
              ),
              'limit' => 
              array (
                'title' => '获取增量信息的条数限制',
                'description' => '限定此次返回资源的数量，取值范围\\[0,100\\]，默认值为 100。

返回结果可以小于指定的数量，但不能多于指定的数量。',
                'type' => 'integer',
                'format' => 'int32',
                'required' => false,
                'example' => '50',
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
            'title' => 'Schema of Response',
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'items' => 
              array (
                'description' => '增量信息列表',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'file_id' => 
                    array (
                      'title' => '文件唯一id',
                      'description' => '文件id',
                      'type' => 'string',
                      'example' => '122fb09598ae66777c7040109a16f49381f6abe2',
                    ),
                    'op' => 
                    array (
                      'title' => '文件操作，主要包括',
                      'description' => '执行的操作。具体包括以下操作：
- create
- overwrite
- delete
- update
- move
-  trash
-  restore
- rename',
                      'type' => 'string',
                      'enumValueTitles' => 
                      array (
                      ),
                      'example' => 'create',
                    ),
                    'file' => 
                    array (
                      'description' => '涉及的文件信息',
                      '$ref' => '#/components/schemas/File',
                    ),
                  ),
                ),
              ),
              'has_more' => 
              array (
                'description' => '是否还有更多信息。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'cursor' => 
              array (
                'description' => '游标',
                'type' => 'string',
                'example' => '1WQ1Yjk4YmI1ZDRlYmU1Y2E0YWE0NmJhYWJmODBhNDQ2NzhlMTRhMg',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"items\\": [\\n    {\\n      \\"file_id\\": \\"122fb09598ae66777c7040109a16f49381f6abe2\\",\\n      \\"op\\": \\"create\\",\\n      \\"file\\": {\\n        \\"domain_id\\": \\"\\",\\n        \\"drive_id\\": \\"\\",\\n        \\"file_id\\": \\"\\",\\n        \\"name\\": \\"\\",\\n        \\"type\\": \\"\\",\\n        \\"content_type\\": \\"\\",\\n        \\"created_at\\": \\"\\",\\n        \\"updated_at\\": \\"\\",\\n        \\"description\\": \\"\\",\\n        \\"trashed_at\\": \\"\\",\\n        \\"file_extension\\": \\"\\",\\n        \\"mime_type\\": \\"\\",\\n        \\"mime_extension\\": \\"\\",\\n        \\"hidden\\": true,\\n        \\"size\\": 0,\\n        \\"starred\\": true,\\n        \\"status\\": \\"\\",\\n        \\"user_meta\\": \\"\\",\\n        \\"labels\\": [\\n          \\"\\"\\n        ],\\n        \\"upload_id\\": \\"\\",\\n        \\"parent_file_id\\": \\"\\",\\n        \\"crc64_hash\\": \\"\\",\\n        \\"content_hash\\": \\"\\",\\n        \\"content_hash_name\\": \\"\\",\\n        \\"download_url\\": \\"\\",\\n        \\"thumbnail\\": \\"\\",\\n        \\"category\\": \\"\\",\\n        \\"local_created_at\\": \\"\\",\\n        \\"local_modified_at\\": \\"\\",\\n        \\"revision_id\\": \\"\\",\\n        \\"investigation_info\\": {\\n          \\"status\\": 0,\\n          \\"suggestion\\": \\"\\"\\n        },\\n        \\"thumbnail_urls\\": {\\n          \\"key\\": \\"\\"\\n        },\\n        \\"image_media_metadata\\": {\\n          \\"time\\": \\"2006-01-02T15:04:05.000Z07:00\\",\\n          \\"width\\": 1920,\\n          \\"height\\": 1080,\\n          \\"location\\": \\"30.185453,120.218522\\",\\n          \\"country\\": \\"中国\\",\\n          \\"province\\": \\"浙江省\\",\\n          \\"city\\": \\"杭州市\\",\\n          \\"district\\": \\"滨江区\\",\\n          \\"township\\": \\"西兴街道\\",\\n          \\"address_line\\": \\"浙江省杭州市滨江区西兴街道江陵路\\",\\n          \\"image_tags\\": [\\n            {\\n              \\"confidence\\": 0.98,\\n              \\"parent_name\\": \\"运动\\",\\n              \\"name\\": \\"篮球\\",\\n              \\"tag_level\\": 3,\\n              \\"source\\": \\"一起打篮球\\",\\n              \\"centric_score\\": 0.877\\n            }\\n          ],\\n          \\"faces\\": \\"[{\\\\\\"FaceId\\\\\\":\\\\\\"a9a66a86-73dd-4c95-8b79-1d8a49db5226\\\\\\",\\\\\\"GroupId\\\\\\":\\\\\\"Cluster-e3b7fb52-22b3-44f2-9746-8c1804bd6af0\\\\\\",\\\\\\"FaceConfidence\\\\\\":0.999,\\\\\\"Age\\\\\\":13,\\\\\\"AgeConfidence\\\\\\":4,\\\\\\"Gender\\\\\\":\\\\\\"female\\\\\\",\\\\\\"GenderConfidence\\\\\\":1,\\\\\\"Emotion\\\\\\":\\\\\\"none\\\\\\",\\\\\\"EmotionConfidence\\\\\\":0.672,\\\\\\"FaceAttributes\\\\\\":{\\\\\\"Mask\\\\\\":\\\\\\"none\\\\\\",\\\\\\"MaskConfidence\\\\\\":0.894,\\\\\\"Beard\\\\\\":\\\\\\"none\\\\\\",\\\\\\"BeardConfidence\\\\\\":0.997,\\\\\\"Glasses\\\\\\":\\\\\\"none\\\\\\",\\\\\\"GlassesConfidence\\\\\\":0.999,\\\\\\"Mouth\\\\\\":\\\\\\"close\\\\\\",\\\\\\"MouthConfidence\\\\\\":0.937,\\\\\\"Hat\\\\\\":\\\\\\"none\\\\\\",\\\\\\"HatConfidence\\\\\\":0.998,\\\\\\"HeadPose\\\\\\":{\\\\\\"Pitch\\\\\\":10.684,\\\\\\"Roll\\\\\\":-10.707,\\\\\\"Yaw\\\\\\":-20.094},\\\\\\"FaceBoundary\\\\\\":{\\\\\\"Width\\\\\\":457,\\\\\\"Height\\\\\\":687,\\\\\\"Top\\\\\\":1324,\\\\\\"Left\\\\\\":1356}}}]\\",\\n          \\"faces_thumbnail\\": [\\n            {\\n              \\"face_id\\": \\"a9a66a86-73dd-4c95-8b79-1d8a49db5226\\",\\n              \\"face_group_id\\": \\"Cluster-e3b7fb52-22b3-44f2-9746-8c1804bd6af0\\",\\n              \\"face_thumbnail\\": \\"https://pds-domain.region.aliyuncs.com/QieGeH98%2F1001%2F63e5e551ee621482ab934a0687c6cda75fc07864%2F642a8a40c00f1ad379df421694713ee65170f09b?security-token=CAIS%2BgF1q6Ft5B2yfSjIr5bjHPCNnrdR8aSaSW7woVlmVd1Bt5HorDz2IHpPfHdoBe0btvU%2BlWxX6fwZlq5rR4QAXlDfNSyFeX20qFHPWZHInuDox55m4cTXNAr%2BIhr%2F29CoEIedZdjBe%2FCrRknZnytou9XTfimjWFrXWv%2Fgy%2BQQDLItUxK%2FcCBNCfpPOwJms7V6D3bKMuu3OROY6Qi5TmgQ41En1DIlt%2FXuk5DCtkqB12eXkLFF%2B97DRbG%2FdNRpMZtFVNO44fd7bKKp0lQLsUMSqv8q0fEcqGaW4o7CWQJLnzyCMvvJ9OVDFyN0aKEnH7J%2Bq%2FzxhTPrMnpkSlacGoABPMvZ8rSESUEP96Vbf%2Bk0JRg9Qb1MnaIJqWAgo8K6K0UP1CtqL2zrUtugpKKDHOYiKbq2O0S5yLUPVX5vBHqEi%2FFc7i6ZnHCMcXLJs4rKDKwRBEhovUXXlklq2q43OSVtLrXkBy9Xs1ers%2FhJhcxpNA0Vl3EWfJxa2BTylEdnLOQ%3D&x-oss-access-key-id=STS.NUVWJ9shpFfqKHAEY3YRmXTCN&x-oss-expires=1686455451&x-oss-process=image%2Fcrop%2Cx_1128%2Cy_1211%2Cw_914%2Ch_914%2Fformat%2Cjpg&x-oss-signature=jmhOz91Tww1ciMEwadDiioU7d93FDiBNr8s8mHyMqW0%3D&x-oss-signature-version=OSS2\\"\\n            }\\n          ],\\n          \\"exif\\": \\"{\\\\\\"Compression\\\\\\":{\\\\\\"value\\\\\\":\\\\\\"6\\\\\\"},\\\\\\"DateTime\\\\\\":{\\\\\\"value\\\\\\":\\\\\\"2020:08:19 17:11:11\\\\\\"}}\\",\\n          \\"image_quality\\": {\\n            \\"overall_score\\": 0.736\\n          }\\n        },\\n        \\"ex_fields_info\\": {\\n          \\"key\\": \\"\\"\\n        },\\n        \\"content_uri\\": \\"\\",\\n        \\"streams_info\\": {\\n          \\"key\\": {\\n            \\"crc64_hash\\": \\"\\",\\n            \\"size\\": 0,\\n            \\"content_hash\\": \\"\\",\\n            \\"content_hash_name\\": \\"\\",\\n            \\"download_url\\": \\"\\",\\n            \\"url\\": \\"\\",\\n            \\"thumbnail\\": \\"\\"\\n          }\\n        },\\n        \\"user_tags\\": {\\n          \\"key\\": \\"\\"\\n        },\\n        \\"revision_version\\": 0,\\n        \\"video_media_metadata\\": {\\n          \\"time\\": \\"2006-01-02T15:04:05.000Z07:00\\",\\n          \\"width\\": 1920,\\n          \\"height\\": 1080,\\n          \\"location\\": \\"30.185453,120.218522\\",\\n          \\"country\\": \\"中国\\",\\n          \\"province\\": \\"浙江省\\",\\n          \\"city\\": \\"杭州市\\",\\n          \\"district\\": \\"滨江区\\",\\n          \\"township\\": \\"西兴街道\\",\\n          \\"address_line\\": \\"浙江省杭州市滨江区西兴街道江陵路\\",\\n          \\"video_media_video_stream\\": [\\n            {\\n              \\"duration\\": \\"22.88\\",\\n              \\"bitrate\\": \\"108420\\",\\n              \\"code_name\\": \\"h264\\",\\n              \\"frame_count\\": \\"90\\"\\n            }\\n          ],\\n          \\"video_media_audio_stream\\": [\\n            {\\n              \\"duration\\": \\"7704.573000\\",\\n              \\"bit_rate\\": \\"129280\\",\\n              \\"code_name\\": \\"aac\\"\\n            }\\n          ]\\n        },\\n        \\"punish_flag\\": 0,\\n        \\"id_path\\": \\"\\",\\n        \\"name_path\\": \\"\\",\\n        \\"creator_type\\": \\"\\",\\n        \\"creator_id\\": \\"\\",\\n        \\"creator_name\\": \\"\\",\\n        \\"last_modifier_type\\": \\"\\",\\n        \\"last_modifier_id\\": \\"\\",\\n        \\"last_modifier_name\\": \\"\\",\\n        \\"dir_size_info\\": {\\n          \\"dir_count\\": 0,\\n          \\"file_count\\": 0\\n        },\\n        \\"trashed\\": true\\n      }\\n    }\\n  ],\\n  \\"has_more\\": true,\\n  \\"cursor\\": \\"1WQ1Yjk4YmI1ZDRlYmU1Y2E0YWE0NmJhYWJmODBhNDQ2NzhlMTRhMg\\"\\n}","errorExample":""},{"type":"xml","example":"<ListDeltaResponse>\\n    <items>\\n        <file_id>122fb09598ae66777c7040109a16f49381f6abe2</file_id>\\n        <op>create</op>\\n        <file/>\\n    </items>\\n    <has_more>true</has_more>\\n    <cursor>1WQ1Yjk4YmI1ZDRlYmU1Y2E0YWE0NmJhYWJmODBhNDQ2NzhlMTRhMg</cursor>\\n</ListDeltaResponse>","errorExample":""}]',
      'title' => '列举增量信息',
    ),
    'DeltaGetLastCursor' => 
    array (
      'summary' => '获取增量操作游标。',
      'path' => '/v2/file/get_last_cursor',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'https',
      ),
      'tags' => 
      array (
        0 => 'api',
      ),
      'security' => 
      array (
        0 => 
        array (
          'BearerToken' => 
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
          'name' => 'domain_id',
          'in' => 'host',
          'schema' => 
          array (
            'type' => 'string',
            'required' => true,
          ),
        ),
        1 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '请求体参数。',
            'type' => 'object',
            'properties' => 
            array (
              'drive_id' => 
              array (
                'title' => '云端 drive id',
                'description' => '空间id',
                'type' => 'string',
                'required' => true,
                'example' => '1',
              ),
              'sync_root_id' => 
              array (
                'title' => '同步目录的对应的云端跟目录',
                'description' => '同步文件夹根节点文件id',
                'type' => 'string',
                'required' => false,
                'example' => '622fb09598ae66777c7040109a16f49381f6abe1',
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
            'title' => 'Schema of Response',
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'cursor' => 
              array (
                'title' => '当前增量变化的最新游标',
                'description' => '指定drive或者指定同步目录下增量信息的最新游标',
                'type' => 'string',
                'example' => 'NWQ1Yjk4YmI1ZDRlYmU1Y2E0YWE0NmJhYWJmODBhNDQ2NzhlMTRhMg',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"cursor\\": \\"NWQ1Yjk4YmI1ZDRlYmU1Y2E0YWE0NmJhYWJmODBhNDQ2NzhlMTRhMg\\"\\n}","type":"json"}]',
      'title' => '获取增量操作游标',
    ),
    'ListReceivedFile' => 
    array (
      'summary' => '收到的共享， 可通过此接口获取到从个人空间授权给此用户的文件列表。',
      'path' => '/v2/file/list_received_file',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'https',
      ),
      'tags' => 
      array (
        0 => 'api',
      ),
      'security' => 
      array (
        0 => 
        array (
          'BearerToken' => 
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
          'name' => 'domain_id',
          'in' => 'host',
          'schema' => 
          array (
            'type' => 'string',
            'required' => true,
          ),
        ),
        1 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '请求体参数。',
            'type' => 'object',
            'properties' => 
            array (
              'limit' => 
              array (
                'description' => '限定此次返回资源的数量。如果不设定，默认返回100，最大不能超过100。',
                'type' => 'integer',
                'format' => 'int32',
                'required' => false,
                'example' => '100',
              ),
              'marker' => 
              array (
                'description' => '设置此字段后，数据会从上次返回的位置开始继续返回。如果不设定，则从头开始返回数据。 默认值：无',
                'type' => 'string',
                'required' => false,
                'example' => 'eym***',
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
            'title' => 'Schema of Response',
            'description' => '返回结构体。',
            'type' => 'object',
            'properties' => 
            array (
              'items' => 
              array (
                'description' => '返回的文件列表',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '返回的文件信息',
                  'example' => ' ',
                  '$ref' => '#/components/schemas/File',
                ),
              ),
              'next_marker' => 
              array (
                'description' => '本次返回记录的断点，可用于下次继续查询',
                'type' => 'string',
                'example' => 'eym***',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"items\\": [\\n    {\\n      \\"domain_id\\": \\"\\",\\n      \\"drive_id\\": \\"\\",\\n      \\"file_id\\": \\"\\",\\n      \\"name\\": \\"\\",\\n      \\"type\\": \\"\\",\\n      \\"content_type\\": \\"\\",\\n      \\"created_at\\": \\"\\",\\n      \\"updated_at\\": \\"\\",\\n      \\"description\\": \\"\\",\\n      \\"trashed_at\\": \\"\\",\\n      \\"file_extension\\": \\"\\",\\n      \\"mime_type\\": \\"\\",\\n      \\"mime_extension\\": \\"\\",\\n      \\"hidden\\": true,\\n      \\"size\\": 0,\\n      \\"starred\\": true,\\n      \\"status\\": \\"\\",\\n      \\"user_meta\\": \\"\\",\\n      \\"labels\\": [\\n        \\"\\"\\n      ],\\n      \\"upload_id\\": \\"\\",\\n      \\"parent_file_id\\": \\"\\",\\n      \\"crc64_hash\\": \\"\\",\\n      \\"content_hash\\": \\"\\",\\n      \\"content_hash_name\\": \\"\\",\\n      \\"download_url\\": \\"\\",\\n      \\"thumbnail\\": \\"\\",\\n      \\"category\\": \\"\\",\\n      \\"local_created_at\\": \\"\\",\\n      \\"local_modified_at\\": \\"\\",\\n      \\"revision_id\\": \\"\\",\\n      \\"investigation_info\\": {\\n        \\"status\\": 0,\\n        \\"suggestion\\": \\"\\"\\n      },\\n      \\"thumbnail_urls\\": {\\n        \\"key\\": \\"\\"\\n      },\\n      \\"image_media_metadata\\": {\\n        \\"time\\": \\"2006-01-02T15:04:05.000Z07:00\\",\\n        \\"width\\": 1920,\\n        \\"height\\": 1080,\\n        \\"location\\": \\"30.185453,120.218522\\",\\n        \\"country\\": \\"中国\\",\\n        \\"province\\": \\"浙江省\\",\\n        \\"city\\": \\"杭州市\\",\\n        \\"district\\": \\"滨江区\\",\\n        \\"township\\": \\"西兴街道\\",\\n        \\"address_line\\": \\"浙江省杭州市滨江区西兴街道江陵路\\",\\n        \\"image_tags\\": [\\n          {\\n            \\"confidence\\": 0.98,\\n            \\"parent_name\\": \\"运动\\",\\n            \\"name\\": \\"篮球\\",\\n            \\"tag_level\\": 3,\\n            \\"source\\": \\"一起打篮球\\",\\n            \\"centric_score\\": 0.877\\n          }\\n        ],\\n        \\"faces\\": \\"[{\\\\\\"FaceId\\\\\\":\\\\\\"a9a66a86-73dd-4c95-8b79-1d8a49db5226\\\\\\",\\\\\\"GroupId\\\\\\":\\\\\\"Cluster-e3b7fb52-22b3-44f2-9746-8c1804bd6af0\\\\\\",\\\\\\"FaceConfidence\\\\\\":0.999,\\\\\\"Age\\\\\\":13,\\\\\\"AgeConfidence\\\\\\":4,\\\\\\"Gender\\\\\\":\\\\\\"female\\\\\\",\\\\\\"GenderConfidence\\\\\\":1,\\\\\\"Emotion\\\\\\":\\\\\\"none\\\\\\",\\\\\\"EmotionConfidence\\\\\\":0.672,\\\\\\"FaceAttributes\\\\\\":{\\\\\\"Mask\\\\\\":\\\\\\"none\\\\\\",\\\\\\"MaskConfidence\\\\\\":0.894,\\\\\\"Beard\\\\\\":\\\\\\"none\\\\\\",\\\\\\"BeardConfidence\\\\\\":0.997,\\\\\\"Glasses\\\\\\":\\\\\\"none\\\\\\",\\\\\\"GlassesConfidence\\\\\\":0.999,\\\\\\"Mouth\\\\\\":\\\\\\"close\\\\\\",\\\\\\"MouthConfidence\\\\\\":0.937,\\\\\\"Hat\\\\\\":\\\\\\"none\\\\\\",\\\\\\"HatConfidence\\\\\\":0.998,\\\\\\"HeadPose\\\\\\":{\\\\\\"Pitch\\\\\\":10.684,\\\\\\"Roll\\\\\\":-10.707,\\\\\\"Yaw\\\\\\":-20.094},\\\\\\"FaceBoundary\\\\\\":{\\\\\\"Width\\\\\\":457,\\\\\\"Height\\\\\\":687,\\\\\\"Top\\\\\\":1324,\\\\\\"Left\\\\\\":1356}}}]\\",\\n        \\"faces_thumbnail\\": [\\n          {\\n            \\"face_id\\": \\"a9a66a86-73dd-4c95-8b79-1d8a49db5226\\",\\n            \\"face_group_id\\": \\"Cluster-e3b7fb52-22b3-44f2-9746-8c1804bd6af0\\",\\n            \\"face_thumbnail\\": \\"https://pds-domain.region.aliyuncs.com/QieGeH98%2F1001%2F63e5e551ee621482ab934a0687c6cda75fc07864%2F642a8a40c00f1ad379df421694713ee65170f09b?security-token=CAIS%2BgF1q6Ft5B2yfSjIr5bjHPCNnrdR8aSaSW7woVlmVd1Bt5HorDz2IHpPfHdoBe0btvU%2BlWxX6fwZlq5rR4QAXlDfNSyFeX20qFHPWZHInuDox55m4cTXNAr%2BIhr%2F29CoEIedZdjBe%2FCrRknZnytou9XTfimjWFrXWv%2Fgy%2BQQDLItUxK%2FcCBNCfpPOwJms7V6D3bKMuu3OROY6Qi5TmgQ41En1DIlt%2FXuk5DCtkqB12eXkLFF%2B97DRbG%2FdNRpMZtFVNO44fd7bKKp0lQLsUMSqv8q0fEcqGaW4o7CWQJLnzyCMvvJ9OVDFyN0aKEnH7J%2Bq%2FzxhTPrMnpkSlacGoABPMvZ8rSESUEP96Vbf%2Bk0JRg9Qb1MnaIJqWAgo8K6K0UP1CtqL2zrUtugpKKDHOYiKbq2O0S5yLUPVX5vBHqEi%2FFc7i6ZnHCMcXLJs4rKDKwRBEhovUXXlklq2q43OSVtLrXkBy9Xs1ers%2FhJhcxpNA0Vl3EWfJxa2BTylEdnLOQ%3D&x-oss-access-key-id=STS.NUVWJ9shpFfqKHAEY3YRmXTCN&x-oss-expires=1686455451&x-oss-process=image%2Fcrop%2Cx_1128%2Cy_1211%2Cw_914%2Ch_914%2Fformat%2Cjpg&x-oss-signature=jmhOz91Tww1ciMEwadDiioU7d93FDiBNr8s8mHyMqW0%3D&x-oss-signature-version=OSS2\\"\\n          }\\n        ],\\n        \\"exif\\": \\"{\\\\\\"Compression\\\\\\":{\\\\\\"value\\\\\\":\\\\\\"6\\\\\\"},\\\\\\"DateTime\\\\\\":{\\\\\\"value\\\\\\":\\\\\\"2020:08:19 17:11:11\\\\\\"}}\\",\\n        \\"image_quality\\": {\\n          \\"overall_score\\": 0.736\\n        }\\n      },\\n      \\"ex_fields_info\\": {\\n        \\"key\\": \\"\\"\\n      },\\n      \\"content_uri\\": \\"\\",\\n      \\"streams_info\\": {\\n        \\"key\\": {\\n          \\"crc64_hash\\": \\"\\",\\n          \\"size\\": 0,\\n          \\"content_hash\\": \\"\\",\\n          \\"content_hash_name\\": \\"\\",\\n          \\"download_url\\": \\"\\",\\n          \\"url\\": \\"\\",\\n          \\"thumbnail\\": \\"\\"\\n        }\\n      },\\n      \\"user_tags\\": {\\n        \\"key\\": \\"\\"\\n      },\\n      \\"revision_version\\": 0,\\n      \\"video_media_metadata\\": {\\n        \\"time\\": \\"2006-01-02T15:04:05.000Z07:00\\",\\n        \\"width\\": 1920,\\n        \\"height\\": 1080,\\n        \\"location\\": \\"30.185453,120.218522\\",\\n        \\"country\\": \\"中国\\",\\n        \\"province\\": \\"浙江省\\",\\n        \\"city\\": \\"杭州市\\",\\n        \\"district\\": \\"滨江区\\",\\n        \\"township\\": \\"西兴街道\\",\\n        \\"address_line\\": \\"浙江省杭州市滨江区西兴街道江陵路\\",\\n        \\"video_media_video_stream\\": [\\n          {\\n            \\"duration\\": \\"22.88\\",\\n            \\"bitrate\\": \\"108420\\",\\n            \\"code_name\\": \\"h264\\",\\n            \\"frame_count\\": \\"90\\"\\n          }\\n        ],\\n        \\"video_media_audio_stream\\": [\\n          {\\n            \\"duration\\": \\"7704.573000\\",\\n            \\"bit_rate\\": \\"129280\\",\\n            \\"code_name\\": \\"aac\\"\\n          }\\n        ]\\n      },\\n      \\"punish_flag\\": 0,\\n      \\"id_path\\": \\"\\",\\n      \\"name_path\\": \\"\\",\\n      \\"creator_type\\": \\"\\",\\n      \\"creator_id\\": \\"\\",\\n      \\"creator_name\\": \\"\\",\\n      \\"last_modifier_type\\": \\"\\",\\n      \\"last_modifier_id\\": \\"\\",\\n      \\"last_modifier_name\\": \\"\\",\\n      \\"dir_size_info\\": {\\n        \\"dir_count\\": 0,\\n        \\"file_count\\": 0\\n      },\\n      \\"trashed\\": true\\n    }\\n  ],\\n  \\"next_marker\\": \\"eym***\\"\\n}","type":"json"}]',
      'title' => '收到的共享文件夹列表',
    ),
    'ListMyGroupDrive' => 
    array (
      'summary' => '列举被授权的团队空间列表。',
      'path' => '/v2/drive/list_my_group_drive',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'https',
      ),
      'tags' => 
      array (
        0 => 'api',
      ),
      'security' => 
      array (
        0 => 
        array (
          'BearerToken' => 
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'domain_id',
          'in' => 'host',
          'schema' => 
          array (
            'title' => 'A short description of struct',
            'description' => 'A short description of struct',
            'type' => 'string',
            'required' => false,
          ),
        ),
        1 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'allowEmptyValue' => true,
          'style' => 'json',
          'schema' => 
          array (
            'description' => '请求体参数。',
            'type' => 'object',
            'properties' => 
            array (
              'limit' => 
              array (
                'description' => '限定此次返回资源的数量。如果不设定，默认返回100，最大不能超过100。',
                'type' => 'integer',
                'format' => 'int32',
                'required' => false,
                'example' => '100',
              ),
              'marker' => 
              array (
                'description' => '设置此字段后，数据会从上次返回的位置开始继续返回。如果不设定，则从头开始返回数据。 默认值：无',
                'type' => 'string',
                'required' => false,
                'example' => 'NWQ1Yjk4YmI1ZDRlYmU1Y2E0YWE0NmJhYWJmODBhNDQ2NzhlMTRhMg',
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
            'title' => 'Schema of Response',
            'description' => '返回结构体。',
            'type' => 'object',
            'properties' => 
            array (
              'items' => 
              array (
                'description' => '返回的空间信息列表',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '返回的空间信息',
                  '$ref' => '#/components/schemas/Drive',
                ),
              ),
              'next_marker' => 
              array (
                'description' => '下一页起始资源标识符, 最后一页该值为空。',
                'type' => 'string',
                'example' => 'NWQ1Yjk4YmI1ZDRlYmU1Y2E0YWE0NmJhYWJmODBhNDQ2NzhlMTRhMg',
              ),
              'root_group_drive' => 
              array (
                '$ref' => '#/components/schemas/Drive',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"items\\": [\\n    {\\n      \\"domain_id\\": \\"\\",\\n      \\"drive_id\\": \\"\\",\\n      \\"drive_name\\": \\"\\",\\n      \\"description\\": \\"\\",\\n      \\"owner\\": \\"\\",\\n      \\"owner_type\\": \\"\\",\\n      \\"drive_type\\": \\"\\",\\n      \\"status\\": \\"\\",\\n      \\"used_size\\": 0,\\n      \\"total_size\\": 0,\\n      \\"created_at\\": \\"\\",\\n      \\"creator\\": \\"\\"\\n    }\\n  ],\\n  \\"next_marker\\": \\"NWQ1Yjk4YmI1ZDRlYmU1Y2E0YWE0NmJhYWJmODBhNDQ2NzhlMTRhMg\\",\\n  \\"root_group_drive\\": {\\n    \\"domain_id\\": \\"\\",\\n    \\"drive_id\\": \\"\\",\\n    \\"drive_name\\": \\"\\",\\n    \\"description\\": \\"\\",\\n    \\"owner\\": \\"\\",\\n    \\"owner_type\\": \\"\\",\\n    \\"drive_type\\": \\"\\",\\n    \\"status\\": \\"\\",\\n    \\"used_size\\": 0,\\n    \\"total_size\\": 0,\\n    \\"created_at\\": \\"\\",\\n    \\"creator\\": \\"\\"\\n  }\\n}","type":"json"}]',
      'title' => '收到的授权团队空间列表',
    ),
    'FileRemovePermission' => 
    array (
      'summary' => '取消文件共享授权。',
      'path' => '/v2/file/remove_permission',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'https',
      ),
      'tags' => 
      array (
        0 => 'api',
      ),
      'security' => 
      array (
        0 => 
        array (
          'BearerToken' => 
          array (
          ),
        ),
        1 => 
        array (
          'AK' => 
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
          'name' => 'domain_id',
          'in' => 'host',
          'schema' => 
          array (
            'type' => 'string',
            'required' => true,
          ),
        ),
        1 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '请求体参数。',
            'type' => 'object',
            'properties' => 
            array (
              'drive_id' => 
              array (
                'description' => '空间id',
                'type' => 'string',
                'required' => true,
                'example' => '1',
              ),
              'file_id' => 
              array (
                'description' => '文件id',
                'type' => 'string',
                'required' => true,
                'example' => '4221bf6e6ab43c255edc4463bf3a6f5f5d317406',
              ),
              'member_list' => 
              array (
                'description' => '共享的用户对象集合',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'identity' => 
                    array (
                      'description' => '可授权对象，表示一个用户或者一个群组',
                      'required' => true,
                      '$ref' => '#/components/schemas/Identity',
                    ),
                    'role_id' => 
                    array (
                      'description' => '目前支持两种方式设置权限，一种是通过指定角色设置权限，另一种是自定义操作权限，此字段用于指定角色设置权限，与action\\_list互斥，当两个字段同时设置时，以此字段为准

目前支持：

SystemFileOwner（文件协同）

SystemFileDownloader（下载者）

SystemFileEditor（编辑者）

SystemFileEditorWithoutDelete（无删除编辑者）

SystemFileEditorWithoutShareLink（无分享编辑者）

SystemFileMetaViewer（可见列表）

SystemFileUploader（上传者）、SystemFileUploaderAndDownloader（上传/下载者）

SystemFileDownloaderWithShareLink（下载/分享者）

SystemFileUploaderAndDownloaderWithShareLink（上传/下载/分享者）

SystemFileUploaderAndViewer（预览/上传者）

SystemFileUploaderWithShareLink（上传/分享者）

SystemFileViewer（预览者）',
                      'type' => 'string',
                      'required' => true,
                      'example' => 'SystemFileDownloader',
                    ),
                  ),
                  'required' => true,
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
        204 => 
        array (
          'headers' => 
          array (
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{}","type":"json"}]',
      'title' => '取消文件共享授权',
    ),
    'FileAddPermission' => 
    array (
      'summary' => '文件共享授权给用户或组。每个Drive下的共享授权记录最多不能超过1000条',
      'path' => '/v2/file/add_permission',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'https',
      ),
      'tags' => 
      array (
        0 => 'api',
      ),
      'security' => 
      array (
        0 => 
        array (
          'BearerToken' => 
          array (
          ),
        ),
        1 => 
        array (
          'AK' => 
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
          'name' => 'domain_id',
          'in' => 'host',
          'schema' => 
          array (
            'type' => 'string',
            'required' => true,
          ),
        ),
        1 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '请求体参数。',
            'type' => 'object',
            'properties' => 
            array (
              'drive_id' => 
              array (
                'description' => '空间id',
                'type' => 'string',
                'required' => true,
                'example' => '1',
              ),
              'file_id' => 
              array (
                'description' => '文件夹id， 当授权整个团队空间时，此字段填root。 个人空间共享不支持填root',
                'type' => 'string',
                'required' => true,
                'example' => '4221bf6e6ab43c255edc4463bf3a6f5f5d317406',
              ),
              'member_list' => 
              array (
                'description' => '被授权的成员列表',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '授权信息',
                  'required' => false,
                  '$ref' => '#/components/schemas/FilePermissionMember',
                ),
                'required' => true,
              ),
            ),
            'required' => false,
          ),
        ),
      ),
      'responses' => 
      array (
        204 => 
        array (
          'headers' => 
          array (
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{}","type":"json"}]',
      'title' => '文件共享授权给用户或组',
    ),
    'FileListPermission' => 
    array (
      'summary' => '列举文件的共享或授权记录。',
      'path' => '/v2/file/list_permission',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'https',
      ),
      'tags' => 
      array (
        0 => 'api',
      ),
      'security' => 
      array (
        0 => 
        array (
          'BearerToken' => 
          array (
          ),
        ),
        1 => 
        array (
          'AK' => 
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
          'name' => 'domain_id',
          'in' => 'host',
          'schema' => 
          array (
            'type' => 'string',
            'required' => true,
          ),
        ),
        1 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '请求体参数。',
            'type' => 'object',
            'properties' => 
            array (
              'drive_id' => 
              array (
                'description' => '空间id',
                'type' => 'string',
                'required' => false,
                'example' => '1',
              ),
              'file_id' => 
              array (
                'description' => '文件id',
                'type' => 'string',
                'required' => false,
                'example' => '4221bf6e6ab43a255edc4463bffa6f5f5d317401',
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
            'description' => '文件权限信息列表',
            'type' => 'array',
            'items' => 
            array (
              'description' => '文件权限信息',
              '$ref' => '#/components/schemas/FilePermissionMember',
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"[\\n  {\\n    \\"identity\\": {\\n      \\"identity_type\\": \\"IT_User\\",\\n      \\"identity_id\\": \\"\\"\\n    },\\n    \\"role_id\\": \\"\\",\\n    \\"expire_time\\": 0,\\n    \\"disinherit_sub_group\\": true,\\n    \\"action_list\\": [\\n      \\"\\"\\n    ]\\n  }\\n]","type":"json"}]',
      'title' => '列举文件的共享或授权记录',
    ),
    'ListAssignment' => 
    array (
      'summary' => '列举已分配的角色列表，比如可通过团队ID获取团队管理员角色列表。',
      'path' => '/v2/role/list_assignment',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'https',
      ),
      'tags' => 
      array (
        0 => 'api',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
        1 => 
        array (
          'BearerToken' => 
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
          'name' => 'domain_id',
          'in' => 'host',
          'schema' => 
          array (
            'title' => 'A short description of struct',
            'description' => 'A short description of struct',
            'type' => 'string',
            'required' => false,
          ),
        ),
        1 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'allowEmptyValue' => true,
          'style' => 'json',
          'schema' => 
          array (
            'description' => '请求体参数。',
            'type' => 'object',
            'properties' => 
            array (
              'manage_resource_type' => 
              array (
                'description' => '管理的资源类型，当前仅支持： RT\\_Group，查询某群组的管理员授权列表',
                'type' => 'string',
                'required' => false,
                'example' => 'RT_Group',
              ),
              'manage_resource_id' => 
              array (
                'description' => '管理的资源ID，比如群组的ID',
                'type' => 'string',
                'required' => false,
                'example' => '105***b82',
              ),
              'marker' => 
              array (
                'description' => '设定结果从marker之后按字母排序的第一个开始返回。如果不设定，则从头开始返回数据。
默认值：无',
                'type' => 'string',
                'required' => false,
                'example' => 'NWQ1Yjk4YmI1ZDRlYmU1Y2E0YWE0NmJhYWJmODBhNDQ2NzhlMTRhMg',
              ),
              'limit' => 
              array (
                'description' => '限定此次返回资源的数量，取值范围\\[1,100\\]。

返回结果可以小于指定的数量，但不能多于指定的数量。',
                'type' => 'integer',
                'format' => 'int32',
                'required' => false,
                'example' => '50',
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
            'title' => 'Schema of Response',
            'description' => '返回的结构体',
            'type' => 'object',
            'properties' => 
            array (
              'assignment_list' => 
              array (
                'description' => '授权信息列表',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'domain_id' => 
                    array (
                      'description' => '域id',
                      'type' => 'string',
                      'example' => 'hz1',
                    ),
                    'identity' => 
                    array (
                      'description' => '被授权的对象，表示一个用户或者一个群组',
                      '$ref' => '#/components/schemas/Identity',
                    ),
                    'role_id' => 
                    array (
                      'description' => '被授权的角色ID',
                      'type' => 'string',
                      'example' => 'SystemGroupAdmin',
                    ),
                    'manage_resource_type' => 
                    array (
                      'description' => '管理的资源类型，比如： RT_Group，表示群组类型',
                      'type' => 'string',
                      'example' => 'RT_Group',
                    ),
                    'manage_resource_id' => 
                    array (
                      'description' => '管理的资源ID，比如群组的ID',
                      'type' => 'string',
                      'example' => '105***b82',
                    ),
                    'creator' => 
                    array (
                      'description' => '创建者ID',
                      'type' => 'string',
                      'example' => '216***c83',
                    ),
                    'created_at' => 
                    array (
                      'description' => '创建时间，从1970年1月1日0点到当前的毫秒时间戳',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1622682267564',
                    ),
                  ),
                ),
              ),
              'next_marker' => 
              array (
                'description' => '下一页起始资源标识符, 最后一页该值为空。',
                'type' => 'string',
                'example' => 'NWQ1Yjk4YmI1ZDRlYmU1Y2E0YWE0NmJhYWJmODBhNDQ2NzhlMTRhMg',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"assignment_list\\": [\\n    {\\n      \\"domain_id\\": \\"hz1\\",\\n      \\"identity\\": {\\n        \\"identity_type\\": \\"IT_User\\",\\n        \\"identity_id\\": \\"\\"\\n      },\\n      \\"role_id\\": \\"SystemGroupAdmin\\",\\n      \\"manage_resource_type\\": \\"RT_Group\\",\\n      \\"manage_resource_id\\": \\"105***b82\\",\\n      \\"creator\\": \\"216***c83\\",\\n      \\"created_at\\": 1622682267564\\n    }\\n  ],\\n  \\"next_marker\\": \\"NWQ1Yjk4YmI1ZDRlYmU1Y2E0YWE0NmJhYWJmODBhNDQ2NzhlMTRhMg\\"\\n}","type":"json"}]',
      'title' => '列举已分配的角色列表',
    ),
    'AssignRole' => 
    array (
      'summary' => '当前支持将用户设置为团队管理员角色。',
      'path' => '/v2/role/assign',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'https',
      ),
      'tags' => 
      array (
        0 => 'api',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
        1 => 
        array (
          'BearerToken' => 
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
        'operationType' => 'none',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'domain_id',
          'in' => 'host',
          'schema' => 
          array (
            'title' => 'A short description of struct',
            'description' => 'A short description of struct',
            'type' => 'string',
            'required' => false,
          ),
        ),
        1 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'identity' => 
              array (
                'description' => '唯一身份标识，当前仅支持设置某个用户作为团队管理员',
                'required' => true,
                '$ref' => '#/components/schemas/Identity',
              ),
              'role_id' => 
              array (
                'description' => '给用户分配的角色ID，当前仅支持填：SystemGroupAdmin（团队管理员）',
                'type' => 'string',
                'required' => true,
                'example' => 'SystemGroupAdmin',
              ),
              'manage_resource_type' => 
              array (
                'description' => '管理的资源类型，当前仅支持：RT_Group（团队）',
                'type' => 'string',
                'required' => true,
                'example' => 'RT_Group',
              ),
              'manage_resource_id' => 
              array (
                'description' => '管理的资源ID，当前仅支持填Group ID。',
                'type' => 'string',
                'required' => true,
                'example' => '105***b82',
              ),
            ),
            'required' => false,
          ),
        ),
      ),
      'responses' => 
      array (
        204 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{}","type":"json"}]',
      'title' => '分配角色',
      'description' => '当前支持将用户设置为团队管理员角色。',
    ),
    'CancelAssignRole' => 
    array (
      'summary' => '当前仅支持取消团队管理员角色。',
      'path' => '/v2/role/cancel_assign',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'https',
      ),
      'tags' => 
      array (
        0 => 'api',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
        1 => 
        array (
          'BearerToken' => 
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
        'operationType' => 'none',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'domain_id',
          'in' => 'host',
          'schema' => 
          array (
            'title' => 'A short description of struct',
            'description' => 'A short description of struct',
            'type' => 'string',
            'required' => false,
          ),
        ),
        1 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'identity' => 
              array (
                'description' => '唯一身份标识，当前仅支持取消用户的角色',
                'required' => true,
                '$ref' => '#/components/schemas/Identity',
              ),
              'role_id' => 
              array (
                'description' => '取消用户已分配的角色ID，当前仅支持填：SystemGroupAdmin（团队管理员）',
                'type' => 'string',
                'required' => true,
                'example' => 'SystemGroupAdmin',
              ),
              'manage_resource_type' => 
              array (
                'description' => '被取消角色管理的资源类型，当前仅支持：RT_Group（团队）',
                'type' => 'string',
                'required' => true,
                'example' => 'RT_Group',
              ),
              'manage_resource_id' => 
              array (
                'description' => '被取消角色管理的资源ID，当前仅支持填Group ID',
                'type' => 'string',
                'required' => true,
                'example' => '105***b82',
              ),
            ),
            'required' => false,
          ),
        ),
      ),
      'responses' => 
      array (
        204 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{}","type":"json"}]',
      'title' => '取消分配的角色',
      'description' => '当前仅支持取消团队管理员角色。',
    ),
    'CreateShareLink' => 
    array (
      'summary' => '创建分享。',
      'path' => '/v2/share_link/create',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'https',
      ),
      'tags' => 
      array (
        0 => 'api',
      ),
      'security' => 
      array (
        0 => 
        array (
          'BearerToken' => 
          array (
          ),
        ),
        1 => 
        array (
          'AK' => 
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
        'operationType' => 'create',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'domain_id',
          'in' => 'host',
          'schema' => 
          array (
            'type' => 'string',
            'required' => true,
          ),
        ),
        1 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '请求体参数。',
            'type' => 'object',
            'properties' => 
            array (
              'drive_id' => 
              array (
                'description' => '空间id',
                'type' => 'string',
                'required' => true,
                'example' => '1',
              ),
              'share_all_files' => 
              array (
                'description' => '是否分享整个drive中的文件',
                'type' => 'boolean',
                'required' => false,
                'example' => 'true',
              ),
              'file_id_list' => 
              array (
                'description' => '分享父路径文件id列表。
父路径文件个数范围[1, 100]。
如果`share_all_files=true`，那么此字段无效，否则必须要填写',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '分享父路径文件id',
                  'type' => 'string',
                  'required' => false,
                  'example' => '9520943DC264',
                ),
                'required' => false,
                'example' => '["520b217f13adf4fc24f2191991b1664ce045b393"]',
              ),
              'user_id' => 
              array (
                'description' => '用户id',
                'type' => 'string',
                'required' => false,
                'example' => 'u123',
              ),
              'share_pwd' => 
              array (
                'description' => '提取码。
提取码长度范围[0, 64]字节
不设置或者设置为空表示无提取码，在获取分享令牌的时候也不用设置提取码参数。
要求使用ASCII可见字符。',
                'type' => 'string',
                'required' => false,
                'example' => 'abcF123x',
              ),
              'expiration' => 
              array (
                'description' => '失效时间点。
RFC3339格式，比如："2020-06-28T11:33:00.000+08:00"。
当expiration取值""时，表示永久有效',
                'type' => 'string',
                'required' => false,
                'example' => '2020-06-28T11:33:00.000+08:00',
              ),
              'description' => 
              array (
                'description' => '分享描述。
长度范围[0, 1024]字符',
                'type' => 'string',
                'required' => false,
                'example' => '百家讲坛合集',
              ),
              'share_name' => 
              array (
                'description' => '分享名。
如果未设置，默认使用file\\_id\\_list中的第一个id对应的文件名。
长度范围[0, 128]字符',
                'type' => 'string',
                'required' => false,
                'example' => '百家讲坛-1.MP4',
              ),
              'disable_preview' => 
              array (
                'description' => '禁止预览分享中的文件',
                'type' => 'boolean',
                'required' => false,
                'example' => 'false',
              ),
              'disable_save' => 
              array (
                'description' => '禁止转存分享中的文件',
                'type' => 'boolean',
                'required' => false,
                'example' => 'false',
              ),
              'disable_download' => 
              array (
                'description' => '禁止下载分享中的文件',
                'type' => 'boolean',
                'required' => false,
                'example' => 'false',
              ),
              'preview_limit' => 
              array (
                'description' => '分享预览次数限制。
次数要求>=0。
次数0表示不限制',
                'type' => 'integer',
                'format' => 'int64',
                'required' => false,
                'example' => '100',
              ),
              'save_limit' => 
              array (
                'description' => '分享转存次数限制。
次数要求>=0。
次数0表示不限制',
                'type' => 'integer',
                'format' => 'int64',
                'required' => false,
                'example' => '100',
              ),
              'download_limit' => 
              array (
                'description' => '分享下载次数限制。
次数要求>=0。
次数0表示不限制',
                'type' => 'integer',
                'format' => 'int64',
                'required' => false,
                'example' => '100',
              ),
              'creatable' => 
              array (
                'description' => '允许在分享中的文件夹中创建文件；creatable为true时，需要同时传creatable_file_id_list参数',
                'type' => 'boolean',
                'required' => false,
                'example' => 'true',
              ),
              'creatable_file_id_list' => 
              array (
                'description' => '允许上传的文件夹file id列表',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '文件夹file id',
                  'type' => 'string',
                  'required' => false,
                  'example' => '9520943DC264',
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
            'description' => '返回信息',
            '$ref' => '#/components/schemas/ShareLink',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"share_id\\": \\"\\",\\n  \\"share_pwd\\": \\"\\",\\n  \\"drive_id\\": \\"\\",\\n  \\"file_id_list\\": [\\n    \\"\\"\\n  ],\\n  \\"expiration\\": \\"\\",\\n  \\"expired\\": true,\\n  \\"created_at\\": \\"\\",\\n  \\"updated_at\\": \\"\\",\\n  \\"description\\": \\"\\",\\n  \\"share_name\\": \\"\\",\\n  \\"creator\\": \\"\\",\\n  \\"status\\": \\"\\",\\n  \\"preview_count\\": 0,\\n  \\"save_count\\": 0,\\n  \\"download_count\\": 0,\\n  \\"report_count\\": 0,\\n  \\"video_preview_count\\": 0,\\n  \\"access_count\\": 0,\\n  \\"disable_preview\\": true,\\n  \\"disable_save\\": true,\\n  \\"disable_download\\": true,\\n  \\"preview_limit\\": 0,\\n  \\"save_limit\\": 0,\\n  \\"download_limit\\": 0,\\n  \\"require_login\\": true,\\n  \\"share_all_files\\": true,\\n  \\"share_msg\\": \\"\\",\\n  \\"save_download_limit\\": 0\\n}","type":"json"}]',
      'title' => '创建分享',
      'description' => '分享又称之为文件分享，是一个文件视图容器，通过其可将用户空间中的一个或多个文件暴露给匿名用户访问，匿名用户在分享权限的约束下访问其中的文件。',
    ),
    'UpdateShareLink' => 
    array (
      'summary' => '修改分享。',
      'path' => '/v2/share_link/update',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'https',
      ),
      'tags' => 
      array (
        0 => 'api',
      ),
      'security' => 
      array (
        0 => 
        array (
          'BearerToken' => 
          array (
          ),
        ),
        1 => 
        array (
          'AK' => 
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
          'name' => 'domain_id',
          'in' => 'host',
          'schema' => 
          array (
            'type' => 'string',
            'required' => true,
          ),
        ),
        1 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '请求体。',
            'type' => 'object',
            'properties' => 
            array (
              'share_id' => 
              array (
                'description' => '分享id',
                'type' => 'string',
                'required' => true,
                'example' => '7JQX1FswpQ8',
              ),
              'share_pwd' => 
              array (
                'description' => '提取码。
提取码长度范围[0, 64]。
长度0表示提取码是""
',
                'type' => 'string',
                'required' => false,
                'example' => 'abcF123x',
              ),
              'expiration' => 
              array (
                'description' => '失效时间点。
RFC3339格式，比如："2020-06-28T11:33:00.000+08:00"。
""表示永久有效
',
                'type' => 'string',
                'required' => false,
                'example' => '2020-06-28T11:33:00.000+08:00',
              ),
              'description' => 
              array (
                'description' => '描述。
长度范围[0, 1024]
',
                'type' => 'string',
                'required' => false,
                'example' => '百家讲坛全集',
              ),
              'share_name' => 
              array (
                'description' => '分享名。
默认使用第一个文件名。
长度范围[0, 128]',
                'type' => 'string',
                'required' => false,
                'example' => '百家讲坛-1.mp4',
              ),
              'status' => 
              array (
                'description' => '分享状态。
枚举值如下：
- disabled（已取消）
- enabled（有效）',
                'type' => 'string',
                'required' => false,
                'enumValueTitles' => 
                array (
                  'disabled' => '已取消',
                  'enabled' => '有效',
                ),
                'example' => 'enabled',
              ),
              'preview_count' => 
              array (
                'description' => '预览次数。
次数要求>=0',
                'type' => 'integer',
                'format' => 'int64',
                'required' => false,
                'example' => '3',
              ),
              'save_count' => 
              array (
                'description' => '转存次数。
次数要求>=0
',
                'type' => 'integer',
                'format' => 'int64',
                'required' => false,
                'example' => '5',
              ),
              'download_count' => 
              array (
                'description' => '下载次数。
次数要求>=0
',
                'type' => 'integer',
                'format' => 'int64',
                'required' => false,
                'example' => '30',
              ),
              'report_count' => 
              array (
                'description' => '举报次数。
次数要求>=0
',
                'type' => 'integer',
                'format' => 'int64',
                'required' => false,
                'example' => '1',
              ),
              'video_preview_count' => 
              array (
                'description' => '视频预览次数。
次数要求>=0
',
                'type' => 'integer',
                'format' => 'int64',
                'required' => false,
                'example' => '100',
              ),
              'disable_preview' => 
              array (
                'description' => '禁止预览',
                'type' => 'boolean',
                'required' => false,
                'example' => 'false',
              ),
              'disable_save' => 
              array (
                'description' => '禁止转存',
                'type' => 'boolean',
                'required' => false,
                'example' => 'false',
              ),
              'disable_download' => 
              array (
                'description' => '禁止下载',
                'type' => 'boolean',
                'required' => false,
                'example' => 'false',
              ),
              'preview_limit' => 
              array (
                'description' => '分享预览次数限制。
次数要求>=0。
次数0表示不限制
',
                'type' => 'integer',
                'format' => 'int64',
                'required' => false,
                'example' => '100',
              ),
              'save_limit' => 
              array (
                'description' => '分享转存次数限制。
次数要求>=0。
次数0表示不限制
',
                'type' => 'integer',
                'format' => 'int64',
                'required' => false,
                'example' => '100',
              ),
              'download_limit' => 
              array (
                'description' => '分享下载次数限制。
次数要求>=0。
次数0表示不限制
',
                'type' => 'integer',
                'format' => 'int64',
                'required' => false,
                'example' => '100',
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
            'description' => '返回信息',
            '$ref' => '#/components/schemas/ShareLink',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"share_id\\": \\"\\",\\n  \\"share_pwd\\": \\"\\",\\n  \\"drive_id\\": \\"\\",\\n  \\"file_id_list\\": [\\n    \\"\\"\\n  ],\\n  \\"expiration\\": \\"\\",\\n  \\"expired\\": true,\\n  \\"created_at\\": \\"\\",\\n  \\"updated_at\\": \\"\\",\\n  \\"description\\": \\"\\",\\n  \\"share_name\\": \\"\\",\\n  \\"creator\\": \\"\\",\\n  \\"status\\": \\"\\",\\n  \\"preview_count\\": 0,\\n  \\"save_count\\": 0,\\n  \\"download_count\\": 0,\\n  \\"report_count\\": 0,\\n  \\"video_preview_count\\": 0,\\n  \\"access_count\\": 0,\\n  \\"disable_preview\\": true,\\n  \\"disable_save\\": true,\\n  \\"disable_download\\": true,\\n  \\"preview_limit\\": 0,\\n  \\"save_limit\\": 0,\\n  \\"download_limit\\": 0,\\n  \\"require_login\\": true,\\n  \\"share_all_files\\": true,\\n  \\"share_msg\\": \\"\\",\\n  \\"save_download_limit\\": 0\\n}","type":"json"}]',
      'title' => '修改分享',
    ),
    'SearchShareLink' => 
    array (
      'summary' => '搜索分享。',
      'path' => '/v2/share_link/search',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'https',
      ),
      'tags' => 
      array (
        0 => 'api',
      ),
      'security' => 
      array (
        0 => 
        array (
          'BearerToken' => 
          array (
          ),
        ),
        1 => 
        array (
          'AK' => 
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
          'name' => 'domain_id',
          'in' => 'host',
          'schema' => 
          array (
            'type' => 'string',
            'required' => true,
          ),
        ),
        1 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '请求体参数。',
            'type' => 'object',
            'properties' => 
            array (
              'limit' => 
              array (
                'description' => '限定此次返回资源的数量，取值范围\\[1,100\\]。如果没有填写，默认取值100。

返回结果可以小于指定的数量，但不能多于指定的数量。',
                'type' => 'integer',
                'format' => 'int32',
                'required' => false,
                'example' => '50',
              ),
              'marker' => 
              array (
                'description' => '设定结果从marker之后按字母排序的第一个开始返回。如果不设定，则从头开始返回数据。
<br>默认值：无',
                'type' => 'string',
                'required' => false,
                'example' => 'NWQ1Yjk4YmI1ZDRlYmU1Y2E0YWE0NmJhYWJmODBhNDQ2NzhlMTRhMg',
              ),
              'return_total_count' => 
              array (
                'description' => '是否返回搜到到的总记录数',
                'type' => 'boolean',
                'required' => false,
                'example' => 'false',
              ),
              'order_by' => 
              array (
                'description' => '排序字段。
默认按照创建时间倒序排列。
枚举值如下：
- share_name（分享名称）
- updated_at（修改时间）
- description（描述）
- created_at（创建时间）
',
                'type' => 'string',
                'required' => false,
                'enumValueTitles' => 
                array (
                  'share_name' => '分享名称',
                  'updated_at' => '修改时间',
                  'description' => '描述',
                  'created_at' => '创建时间',
                ),
                'example' => 'created_at',
              ),
              'order_direction' => 
              array (
                'description' => '排序方式。
如果是排序字段是created\\_at或者updated\\_at，则默认是倒序，其他排序字段默认是升序。
枚举值如下：
- ASC（升序）
- DESC（降序）',
                'type' => 'string',
                'required' => false,
                'enumValueTitles' => 
                array (
                  'ASC' => '升序',
                  'DESC' => '降序',
                ),
                'example' => 'ASC',
              ),
              'creators' => 
              array (
                'description' => '分享创建者（user_id）
1）如果不指定, 那么会根据用户本身的权限进行查询
1.1 网盘管理员/超管：所有成员
1.2 团队管理员：团队成员
1.3 普通用户：自身

2）如果指定, 那么只能指定那些有权限的成员, 参考1）',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '分享创建者',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'c9b7a5aa04d14ae3867fdc886fa01da4',
                ),
                'required' => false,
              ),
              'query' => 
              array (
                'description' => '查询条件
1）支持字段：
1.1 created\\_at 创建时间
1.2 updated\\_at 更新时间
1.3 share\\_name\\_for\\_fuzzy 分享名, 支持模糊匹配（match）
1.4 status 分享状态, 
枚举值 enabled（分享中）/disabled（已取消）
1.5 expired\\_time 超时时间
永不过期：expired\\_time=\'1970-01-01T00:00:00\', 返回的expiration=""
expired_time<\'1970-01-02T00:00:00\'系统保留使用,不表示具体时间',
                'type' => 'string',
                'required' => false,
                'example' => 'created_at>=\'2022-01-18T02:50:00\' and created_at<\'2022-01-19T09:45:28\' and share_name_for_fuzzy match \'HD.mp4\' and status in [\'enabled\', \'disabled\'] and expired_time=\'1970-01-01T00:00:00\'',
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
            'title' => 'Schema of Response',
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'items' => 
              array (
                'description' => '分享列表',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '分享',
                  '$ref' => '#/components/schemas/ShareLink',
                ),
              ),
              'next_marker' => 
              array (
                'description' => '下次起始点',
                'type' => 'string',
                'example' => 'NWQ1Yjk4YmI1ZDRlYmU1Y2E0YWE0NmJhYWJmODBhNDQ2NzhlMTRhMg',
              ),
              'total_count' => 
              array (
                'description' => '总数量',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '101',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"items\\": [\\n    {\\n      \\"share_id\\": \\"\\",\\n      \\"share_pwd\\": \\"\\",\\n      \\"drive_id\\": \\"\\",\\n      \\"file_id_list\\": [\\n        \\"\\"\\n      ],\\n      \\"expiration\\": \\"\\",\\n      \\"expired\\": true,\\n      \\"created_at\\": \\"\\",\\n      \\"updated_at\\": \\"\\",\\n      \\"description\\": \\"\\",\\n      \\"share_name\\": \\"\\",\\n      \\"creator\\": \\"\\",\\n      \\"status\\": \\"\\",\\n      \\"preview_count\\": 0,\\n      \\"save_count\\": 0,\\n      \\"download_count\\": 0,\\n      \\"report_count\\": 0,\\n      \\"video_preview_count\\": 0,\\n      \\"access_count\\": 0,\\n      \\"disable_preview\\": true,\\n      \\"disable_save\\": true,\\n      \\"disable_download\\": true,\\n      \\"preview_limit\\": 0,\\n      \\"save_limit\\": 0,\\n      \\"download_limit\\": 0,\\n      \\"require_login\\": true,\\n      \\"share_all_files\\": true,\\n      \\"share_msg\\": \\"\\",\\n      \\"save_download_limit\\": 0\\n    }\\n  ],\\n  \\"next_marker\\": \\"NWQ1Yjk4YmI1ZDRlYmU1Y2E0YWE0NmJhYWJmODBhNDQ2NzhlMTRhMg\\",\\n  \\"total_count\\": 101\\n}","type":"json"}]',
      'title' => '搜索分享',
    ),
    'CancelShareLink' => 
    array (
      'summary' => '删除分享。',
      'path' => '/v2/share_link/cancel',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'https',
      ),
      'tags' => 
      array (
        0 => 'api',
      ),
      'security' => 
      array (
        0 => 
        array (
          'BearerToken' => 
          array (
          ),
        ),
        1 => 
        array (
          'AK' => 
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
          'name' => 'domain_id',
          'in' => 'host',
          'schema' => 
          array (
            'type' => 'string',
            'required' => true,
          ),
        ),
        1 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '请求体参数。',
            'type' => 'object',
            'properties' => 
            array (
              'share_id' => 
              array (
                'description' => '分享id',
                'type' => 'string',
                'required' => true,
                'example' => '7JQX1FswpQ8',
              ),
            ),
            'required' => false,
          ),
        ),
      ),
      'responses' => 
      array (
        204 => 
        array (
          'schema' => 
          array (
            'title' => 'Schema of Response',
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              '_' => 
              array (
                'title' => 'Id of the request',
                'description' => 'Id of the request',
                'type' => 'string',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{}","type":"json"}]',
      'title' => '取消分享',
    ),
    'ListShareLink' => 
    array (
      'summary' => '列举分享。',
      'path' => '/v2/share_link/list',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'https',
      ),
      'tags' => 
      array (
        0 => 'api',
      ),
      'security' => 
      array (
        0 => 
        array (
          'BearerToken' => 
          array (
          ),
        ),
        1 => 
        array (
          'AK' => 
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
          'name' => 'domain_id',
          'in' => 'host',
          'schema' => 
          array (
            'type' => 'string',
            'required' => true,
          ),
        ),
        1 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '请求体参数。',
            'type' => 'object',
            'properties' => 
            array (
              'creator' => 
              array (
                'description' => '创建者',
                'type' => 'string',
                'required' => false,
                'example' => 'c9b7a5aa04d14ae3867fdc886fa01da4',
              ),
              'limit' => 
              array (
                'description' => '限定此次返回资源的数量，取值范围\\[0,100\\]。

返回结果可以小于指定的数量，但不能多于指定的数量。',
                'type' => 'integer',
                'format' => 'int32',
                'required' => false,
                'example' => '50',
              ),
              'marker' => 
              array (
                'description' => '设定结果从marker之后按字母排序的第一个开始返回。如果不设定，则从头开始返回数据。
<br>默认值：无',
                'type' => 'string',
                'required' => false,
                'example' => 'NWQ1Yjk4YmI1ZDRlYmU1Y2E0YWE0NmJhYWJmODBhNDQ2NzhlMTRhMg',
              ),
              'order_by' => 
              array (
                'description' => '排序字段。
默认按照创建时间倒序排列。
枚举值如下：
- share_name（分享名称）
- updated_at（分享修改时间）
- description（分享描述）
- created_at（分享创建时间）',
                'type' => 'string',
                'required' => false,
                'enumValueTitles' => 
                array (
                  'share_name' => '分享名称',
                  'updated_at' => '分享修改时间',
                  'description' => '分享描述',
                  'created_at' => '分享创建时间',
                ),
                'example' => 'share_name',
              ),
              'order_direction' => 
              array (
                'description' => '排序方式。
如果是排序字段是created_at或者updated_at，则默认是倒序，其他排序字段默认是升序。
枚举值如下：
- ASC（升序）
- DESC（降序）',
                'type' => 'string',
                'required' => false,
                'enumValueTitles' => 
                array (
                  'ASC' => '升序',
                  'DESC' => '降序',
                ),
                'example' => 'ASC',
              ),
              'include_cancelled' => 
              array (
                'description' => '是否包含已取消的分享',
                'type' => 'boolean',
                'required' => false,
                'example' => 'true',
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
            'title' => 'Schema of Response',
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'items' => 
              array (
                'description' => '结果对象。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '分享信息',
                  '$ref' => '#/components/schemas/ShareLink',
                ),
              ),
              'next_marker' => 
              array (
                'description' => '下一页起始资源标识符, 最后一页该值为空。',
                'type' => 'string',
                'example' => 'NWQ1Yjk4YmI1ZDRlYmU1Y2E0YWE0NmJhYWJmODBhNDQ2NzhlMTRhMg',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"items\\": [\\n    {\\n      \\"share_id\\": \\"\\",\\n      \\"share_pwd\\": \\"\\",\\n      \\"drive_id\\": \\"\\",\\n      \\"file_id_list\\": [\\n        \\"\\"\\n      ],\\n      \\"expiration\\": \\"\\",\\n      \\"expired\\": true,\\n      \\"created_at\\": \\"\\",\\n      \\"updated_at\\": \\"\\",\\n      \\"description\\": \\"\\",\\n      \\"share_name\\": \\"\\",\\n      \\"creator\\": \\"\\",\\n      \\"status\\": \\"\\",\\n      \\"preview_count\\": 0,\\n      \\"save_count\\": 0,\\n      \\"download_count\\": 0,\\n      \\"report_count\\": 0,\\n      \\"video_preview_count\\": 0,\\n      \\"access_count\\": 0,\\n      \\"disable_preview\\": true,\\n      \\"disable_save\\": true,\\n      \\"disable_download\\": true,\\n      \\"preview_limit\\": 0,\\n      \\"save_limit\\": 0,\\n      \\"download_limit\\": 0,\\n      \\"require_login\\": true,\\n      \\"share_all_files\\": true,\\n      \\"share_msg\\": \\"\\",\\n      \\"save_download_limit\\": 0\\n    }\\n  ],\\n  \\"next_marker\\": \\"NWQ1Yjk4YmI1ZDRlYmU1Y2E0YWE0NmJhYWJmODBhNDQ2NzhlMTRhMg\\"\\n}","type":"json"}]',
      'title' => '列举分享',
      'description' => 'Deprecated, 请使用分享SearchShareLink代替此接口。',
    ),
    'GetShareLink' => 
    array (
      'summary' => '获取分享信息。',
      'path' => '/v2/share_link/get',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'https',
      ),
      'tags' => 
      array (
        0 => 'api',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
        1 => 
        array (
          'BearerToken' => 
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
          'name' => 'domain_id',
          'in' => 'host',
          'schema' => 
          array (
            'type' => 'string',
            'required' => true,
          ),
        ),
        1 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '请求体参数。',
            'type' => 'object',
            'properties' => 
            array (
              'share_id' => 
              array (
                'description' => '分享id',
                'type' => 'string',
                'required' => true,
                'example' => '7JQX1FswpQ8',
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
            'description' => '返回信息',
            '$ref' => '#/components/schemas/ShareLink',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"share_id\\": \\"\\",\\n  \\"share_pwd\\": \\"\\",\\n  \\"drive_id\\": \\"\\",\\n  \\"file_id_list\\": [\\n    \\"\\"\\n  ],\\n  \\"expiration\\": \\"\\",\\n  \\"expired\\": true,\\n  \\"created_at\\": \\"\\",\\n  \\"updated_at\\": \\"\\",\\n  \\"description\\": \\"\\",\\n  \\"share_name\\": \\"\\",\\n  \\"creator\\": \\"\\",\\n  \\"status\\": \\"\\",\\n  \\"preview_count\\": 0,\\n  \\"save_count\\": 0,\\n  \\"download_count\\": 0,\\n  \\"report_count\\": 0,\\n  \\"video_preview_count\\": 0,\\n  \\"access_count\\": 0,\\n  \\"disable_preview\\": true,\\n  \\"disable_save\\": true,\\n  \\"disable_download\\": true,\\n  \\"preview_limit\\": 0,\\n  \\"save_limit\\": 0,\\n  \\"download_limit\\": 0,\\n  \\"require_login\\": true,\\n  \\"share_all_files\\": true,\\n  \\"share_msg\\": \\"\\",\\n  \\"save_download_limit\\": 0\\n}","type":"json"}]',
      'title' => '获取分享信息',
    ),
    'GetShareLinkByAnonymous' => 
    array (
      'summary' => '匿名查看分享信息。',
      'path' => '/v2/share_link/get_by_anonymous',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'https',
      ),
      'tags' => 
      array (
        0 => 'api',
      ),
      'security' => 
      array (
        0 => 
        array (
          'Anonymous' => 
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
          'name' => 'domain_id',
          'in' => 'host',
          'schema' => 
          array (
            'type' => 'string',
            'required' => true,
          ),
        ),
        1 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '请求体参数。',
            'type' => 'object',
            'properties' => 
            array (
              'share_id' => 
              array (
                'description' => '分享id',
                'type' => 'string',
                'required' => true,
                'example' => '7JQX1FswpQ8',
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
            'description' => '返回信息',
            'type' => 'object',
            'properties' => 
            array (
              'creator_id' => 
              array (
                'description' => '创建者id',
                'type' => 'string',
                'example' => 'c9b7a5aa04d14ae3867fdc886fa01da4',
              ),
              'creator_name' => 
              array (
                'description' => '创建者名字（已脱敏）',
                'type' => 'string',
                'example' => 'AB***CD',
              ),
              'creator_phone' => 
              array (
                'description' => '创建者手机号（已脱敏）',
                'type' => 'string',
                'example' => '136****00',
              ),
              'expiration' => 
              array (
                'description' => '过期时间',
                'type' => 'string',
                'example' => '2020-08-20T06:51:27.292Z',
              ),
              'updated_at' => 
              array (
                'description' => '修改时间',
                'type' => 'string',
                'example' => '2019-08-20T06:51:27.292Z',
              ),
              'avatar' => 
              array (
                'description' => '创建者头像',
                'type' => 'string',
                'example' => 'https://aliyunpds.com/a.jpg',
              ),
              'share_name' => 
              array (
                'description' => '分享名称',
                'type' => 'string',
                'example' => '百家讲坛-1.MP4',
              ),
              'preview_count' => 
              array (
                'description' => '预览次数',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '80',
              ),
              'save_count' => 
              array (
                'description' => '转存次数',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '2',
              ),
              'download_count' => 
              array (
                'description' => '下载次数',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '50',
              ),
              'report_count' => 
              array (
                'description' => '被举报次数',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '0',
              ),
              'video_preview_count' => 
              array (
                'description' => '视频预览次数',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '5',
              ),
              'access_count' => 
              array (
                'description' => '访问次数',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '30',
              ),
              'disable_preview' => 
              array (
                'description' => '禁止预览',
                'type' => 'boolean',
                'example' => 'false',
              ),
              'disable_save' => 
              array (
                'description' => '禁止转存',
                'type' => 'boolean',
                'example' => 'false',
              ),
              'disable_download' => 
              array (
                'description' => '禁止下载',
                'type' => 'boolean',
                'example' => 'false',
              ),
              'preview_limit' => 
              array (
                'description' => '预览次数限制',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '100',
              ),
              'save_limit' => 
              array (
                'description' => '转存次数限制',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '100',
              ),
              'download_limit' => 
              array (
                'description' => '下载次数限制',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '100',
              ),
              'save_download_limit' => 
              array (
                'description' => '转存和下载总次数限制',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '200',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"creator_id\\": \\"c9b7a5aa04d14ae3867fdc886fa01da4\\",\\n  \\"creator_name\\": \\"AB***CD\\",\\n  \\"creator_phone\\": \\"136****00\\",\\n  \\"expiration\\": \\"2020-08-20T06:51:27.292Z\\",\\n  \\"updated_at\\": \\"2019-08-20T06:51:27.292Z\\",\\n  \\"avatar\\": \\"https://aliyunpds.com/a.jpg\\",\\n  \\"share_name\\": \\"百家讲坛-1.MP4\\",\\n  \\"preview_count\\": 80,\\n  \\"save_count\\": 2,\\n  \\"download_count\\": 50,\\n  \\"report_count\\": 0,\\n  \\"video_preview_count\\": 5,\\n  \\"access_count\\": 30,\\n  \\"disable_preview\\": false,\\n  \\"disable_save\\": false,\\n  \\"disable_download\\": false,\\n  \\"preview_limit\\": 100,\\n  \\"save_limit\\": 100,\\n  \\"download_limit\\": 100,\\n  \\"save_download_limit\\": 200\\n}","type":"json"}]',
      'title' => '匿名查看分享信息',
    ),
    'GetShareLinkToken' => 
    array (
      'summary' => '匿名获取分享令牌。',
      'path' => '/v2/share_link/get_share_token',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'https',
      ),
      'tags' => 
      array (
        0 => 'api',
      ),
      'security' => 
      array (
        0 => 
        array (
          'Anonymous' => 
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
          'name' => 'domain_id',
          'in' => 'host',
          'schema' => 
          array (
            'type' => 'string',
            'required' => true,
          ),
        ),
        1 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '请求体参数。',
            'type' => 'object',
            'properties' => 
            array (
              'share_id' => 
              array (
                'description' => '分享id',
                'type' => 'string',
                'required' => true,
                'example' => '7JQX1FswpQ8',
              ),
              'share_pwd' => 
              array (
                'description' => '提取码',
                'type' => 'string',
                'required' => false,
                'example' => 'abcF123x',
              ),
              'expire_sec' => 
              array (
                'description' => '令牌有效时长。参数合法范围是(0, 7200]；参数为0或缺省时默认7200秒。',
                'type' => 'integer',
                'format' => 'int32',
                'required' => false,
                'example' => '7200',
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
            'title' => 'Schema of Response',
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'share_token' => 
              array (
                'title' => 'Id of the request',
                'description' => 'jwt格式的令牌',
                'type' => 'string',
                'example' => 'eyJhbGciOiJSUzI1NiIsInR5cCI6IkpXVCJ9.eyJ1c2VySWQiOiJjOWI3YTVhYTA0ZDE0YWUzODY3ZmRjODg2ZmEwMWRhNCIsImN1c3RvbUpzb24iOiJ7XCJjbGllbnRJZFwiOlwiMjVkelgzdmJZcWt0Vnh5WFwiLFwiZG9tYWluSWRcIjpcImJqMjlcIixcInNjb3BlXCI6W1wiRFJJVkUuQUxMXCIsXCJTSEFSRS5BTExcIixcIkZJTEUuQUxMXCIsXCJVU0VSLkFMTFwiLFwiVklFVy5BTExcIixcIlNUT1JBR0UuQUxMXCIsXCJTVE9SQUdFRklMRS5MSVNUXCIsXCJCQVRDSFwiLFwiT0FVVEguQUxMXCIsXCJJTUFHRS5BTExcIixcIklOVklURS5BTExcIixcIkFDQ09VTlQuQUxMXCJdLFwicm9sZVwiOlwidXNlclwiLFwicmVmXCI6XCJodHRwczovL3d3dy5hbGl5dW5kcml2ZS5jb20vXCIsXCJkZXZpY2VfaWRcIjpcImIyODIwNWU1YzU5NzRjY2JiODI3MDNiNjhkYjhjNDUxXCJ9IiwiZXhwIjoxNjQ4NjE0NDkzLCJpYXQiOjE2NDg2MDcyMzN9.d3HVLvv_LFw2QhPrhvjH_kICWQJX9sKKt7NjQEqI_xE2JO_b7D8rPsFTZz93PLvZ7MhCmudTjGImUpd-ehFnI4Go-1S7BGaKaHFILvP-sWy18Wpikowjxx9mSbzBM_cO6D1LI-kyYhXKWHgVdADfVIPniTDA7-ffhUpi7cAebEs',
              ),
              'expires_in' => 
              array (
                'description' => '多长时间失效，比如7200秒（2个小时）',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '7200',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"share_token\\": \\"eyJhbGciOiJSUzI1NiIsInR5cCI6IkpXVCJ9.eyJ1c2VySWQiOiJjOWI3YTVhYTA0ZDE0YWUzODY3ZmRjODg2ZmEwMWRhNCIsImN1c3RvbUpzb24iOiJ7XCJjbGllbnRJZFwiOlwiMjVkelgzdmJZcWt0Vnh5WFwiLFwiZG9tYWluSWRcIjpcImJqMjlcIixcInNjb3BlXCI6W1wiRFJJVkUuQUxMXCIsXCJTSEFSRS5BTExcIixcIkZJTEUuQUxMXCIsXCJVU0VSLkFMTFwiLFwiVklFVy5BTExcIixcIlNUT1JBR0UuQUxMXCIsXCJTVE9SQUdFRklMRS5MSVNUXCIsXCJCQVRDSFwiLFwiT0FVVEguQUxMXCIsXCJJTUFHRS5BTExcIixcIklOVklURS5BTExcIixcIkFDQ09VTlQuQUxMXCJdLFwicm9sZVwiOlwidXNlclwiLFwicmVmXCI6XCJodHRwczovL3d3dy5hbGl5dW5kcml2ZS5jb20vXCIsXCJkZXZpY2VfaWRcIjpcImIyODIwNWU1YzU5NzRjY2JiODI3MDNiNjhkYjhjNDUxXCJ9IiwiZXhwIjoxNjQ4NjE0NDkzLCJpYXQiOjE2NDg2MDcyMzN9.d3HVLvv_LFw2QhPrhvjH_kICWQJX9sKKt7NjQEqI_xE2JO_b7D8rPsFTZz93PLvZ7MhCmudTjGImUpd-ehFnI4Go-1S7BGaKaHFILvP-sWy18Wpikowjxx9mSbzBM_cO6D1LI-kyYhXKWHgVdADfVIPniTDA7-ffhUpi7cAebEs\\",\\n  \\"expires_in\\": 7200\\n}","type":"json"}]',
      'title' => '获取分享令牌',
      'description' => '文件分享中文件访问流程要求必须先获取share token，即使此分享的share_pwd=""(非私密分享)。',
    ),
    'TrashFile' => 
    array (
      'summary' => '文件或文件夹放入回收站。',
      'path' => '/v2/recyclebin/trash',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'https',
      ),
      'tags' => 
      array (
        0 => 'api',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
        1 => 
        array (
          'BearerToken' => 
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
        'operationType' => 'update',
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'domain_id',
          'in' => 'host',
          'schema' => 
          array (
            'type' => 'string',
            'required' => true,
          ),
        ),
        1 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '请求体参数。',
            'type' => 'object',
            'properties' => 
            array (
              'drive_id' => 
              array (
                'description' => '空间ID',
                'type' => 'string',
                'required' => true,
                'example' => '1',
              ),
              'file_id' => 
              array (
                'description' => '文件或文件夹ID',
                'type' => 'string',
                'required' => true,
                'example' => '4221bf6e6ab43c255edc4463bf3a6f5f5d317406',
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
            'title' => 'Schema of Response',
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'domain_id' => 
              array (
                'title' => 'Id of the request',
                'description' => '域ID',
                'type' => 'string',
                'example' => 'bj1',
              ),
              'drive_id' => 
              array (
                'description' => '空间ID',
                'type' => 'string',
                'example' => '1',
              ),
              'file_id' => 
              array (
                'description' => '文件或文件夹ID',
                'type' => 'string',
                'example' => '4221bf6e6ab43c255edc4463bf3a6f5f5d317406',
              ),
              'async_task_id' => 
              array (
                'description' => '异步任务ID

如果返回为空字符串，表示直接放入回收站成功。

如果返回非空字符串，表示需要经过异步处理。调用GetAsyncTask，传递异步任务ID，获取任务信息。',
                'type' => 'string',
                'example' => '13ebd3a24dba4166b1527add676ef2866051b4d5dele16',
              ),
            ),
          ),
        ),
        204 => 
        array (
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"domain_id\\": \\"bj1\\",\\n  \\"drive_id\\": \\"1\\",\\n  \\"file_id\\": \\"4221bf6e6ab43c255edc4463bf3a6f5f5d317406\\",\\n  \\"async_task_id\\": \\"13ebd3a24dba4166b1527add676ef2866051b4d5dele16\\"\\n}","type":"json"}]',
      'title' => '放入回收站',
    ),
    'ClearRecyclebin' => 
    array (
      'summary' => '清空回收站中所有文件和文件夹。',
      'path' => '/v2/recyclebin/clear',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'https',
      ),
      'tags' => 
      array (
        0 => 'api',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
        1 => 
        array (
          'BearerToken' => 
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
          'name' => 'domain_id',
          'in' => 'host',
          'schema' => 
          array (
            'type' => 'string',
            'required' => true,
          ),
        ),
        1 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '请求体参数。',
            'type' => 'object',
            'properties' => 
            array (
              'drive_id' => 
              array (
                'description' => '空间ID',
                'type' => 'string',
                'required' => false,
                'example' => '1',
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
            'title' => 'Schema of Response',
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'domain_id' => 
              array (
                'title' => 'Id of the request',
                'description' => '域ID',
                'type' => 'string',
                'example' => 'bj1',
              ),
              'drive_id' => 
              array (
                'description' => '空间ID',
                'type' => 'string',
                'example' => '1',
              ),
              'async_task_id' => 
              array (
                'description' => '异步任务ID

调用GetAsyncTask，传递异步任务ID，获取任务信息',
                'type' => 'string',
                'example' => '13ebd3a24dba4166b1527add676ef2866051b4d5dele16',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"domain_id\\": \\"bj1\\",\\n  \\"drive_id\\": \\"1\\",\\n  \\"async_task_id\\": \\"13ebd3a24dba4166b1527add676ef2866051b4d5dele16\\"\\n}","type":"json"}]',
      'title' => '清空回收站',
    ),
    'ListRecyclebin' => 
    array (
      'summary' => '列举回收站。',
      'path' => '/v2/recyclebin/list',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'https',
      ),
      'tags' => 
      array (
        0 => 'api',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
        1 => 
        array (
          'BearerToken' => 
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
          'name' => 'domain_id',
          'in' => 'host',
          'schema' => 
          array (
            'type' => 'string',
            'required' => true,
          ),
        ),
        1 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '请求体参数。',
            'type' => 'object',
            'properties' => 
            array (
              'drive_id' => 
              array (
                'description' => '空间ID',
                'type' => 'string',
                'required' => true,
                'example' => '1',
              ),
              'marker' => 
              array (
                'description' => '设定结果从marker之后按字母排序的第一个开始返回。如果不设定，则从头开始返回数据。
默认值：无',
                'type' => 'string',
                'required' => false,
                'example' => 'NWQ1Yjk4YmI1ZDRlYmU1Y2E0YWE0NmJhYWJmODBhNDQ2NzhlMTRhMg',
              ),
              'limit' => 
              array (
                'description' => '限定此次返回资源的数量，取值范围\\[1,200\\]，缺省50。

返回结果可以小于指定的数量，但不能多于指定的数量。',
                'type' => 'integer',
                'format' => 'int32',
                'required' => false,
                'example' => '50',
              ),
              'fields' => 
              array (
                'description' => '筛选返回字段：

1\\. 当填 * 时，返回文件所有字段；

2\\. 当填空值或不填时，返回的信息不包含文件创建者、文件修改者、用户自定义标签等字段

默认为空值，只返回部分字段。',
                'type' => 'string',
                'required' => false,
                'example' => '*',
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
            'title' => 'Schema of Response',
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'items' => 
              array (
                'description' => '回收站中的文件和文件夹列表',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '文件或文件夹信息',
                  '$ref' => '#/components/schemas/File',
                ),
              ),
              'next_marker' => 
              array (
                'description' => '下一页起始资源标识符, 最后一页该值为空',
                'type' => 'string',
                'example' => 'NWQ1Yjk4YmI1ZDRlYmU1Y2E0YWE0NmJhYWJmODBhNDQ2NzhlMTRhM1',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"items\\": [\\n    {\\n      \\"domain_id\\": \\"\\",\\n      \\"drive_id\\": \\"\\",\\n      \\"file_id\\": \\"\\",\\n      \\"name\\": \\"\\",\\n      \\"type\\": \\"\\",\\n      \\"content_type\\": \\"\\",\\n      \\"created_at\\": \\"\\",\\n      \\"updated_at\\": \\"\\",\\n      \\"description\\": \\"\\",\\n      \\"trashed_at\\": \\"\\",\\n      \\"file_extension\\": \\"\\",\\n      \\"mime_type\\": \\"\\",\\n      \\"mime_extension\\": \\"\\",\\n      \\"hidden\\": true,\\n      \\"size\\": 0,\\n      \\"starred\\": true,\\n      \\"status\\": \\"\\",\\n      \\"user_meta\\": \\"\\",\\n      \\"labels\\": [\\n        \\"\\"\\n      ],\\n      \\"upload_id\\": \\"\\",\\n      \\"parent_file_id\\": \\"\\",\\n      \\"crc64_hash\\": \\"\\",\\n      \\"content_hash\\": \\"\\",\\n      \\"content_hash_name\\": \\"\\",\\n      \\"download_url\\": \\"\\",\\n      \\"thumbnail\\": \\"\\",\\n      \\"category\\": \\"\\",\\n      \\"local_created_at\\": \\"\\",\\n      \\"local_modified_at\\": \\"\\",\\n      \\"revision_id\\": \\"\\",\\n      \\"investigation_info\\": {\\n        \\"status\\": 0,\\n        \\"suggestion\\": \\"\\"\\n      },\\n      \\"thumbnail_urls\\": {\\n        \\"key\\": \\"\\"\\n      },\\n      \\"image_media_metadata\\": {\\n        \\"time\\": \\"2006-01-02T15:04:05.000Z07:00\\",\\n        \\"width\\": 1920,\\n        \\"height\\": 1080,\\n        \\"location\\": \\"30.185453,120.218522\\",\\n        \\"country\\": \\"中国\\",\\n        \\"province\\": \\"浙江省\\",\\n        \\"city\\": \\"杭州市\\",\\n        \\"district\\": \\"滨江区\\",\\n        \\"township\\": \\"西兴街道\\",\\n        \\"address_line\\": \\"浙江省杭州市滨江区西兴街道江陵路\\",\\n        \\"image_tags\\": [\\n          {\\n            \\"confidence\\": 0.98,\\n            \\"parent_name\\": \\"运动\\",\\n            \\"name\\": \\"篮球\\",\\n            \\"tag_level\\": 3,\\n            \\"source\\": \\"一起打篮球\\",\\n            \\"centric_score\\": 0.877\\n          }\\n        ],\\n        \\"faces\\": \\"[{\\\\\\"FaceId\\\\\\":\\\\\\"a9a66a86-73dd-4c95-8b79-1d8a49db5226\\\\\\",\\\\\\"GroupId\\\\\\":\\\\\\"Cluster-e3b7fb52-22b3-44f2-9746-8c1804bd6af0\\\\\\",\\\\\\"FaceConfidence\\\\\\":0.999,\\\\\\"Age\\\\\\":13,\\\\\\"AgeConfidence\\\\\\":4,\\\\\\"Gender\\\\\\":\\\\\\"female\\\\\\",\\\\\\"GenderConfidence\\\\\\":1,\\\\\\"Emotion\\\\\\":\\\\\\"none\\\\\\",\\\\\\"EmotionConfidence\\\\\\":0.672,\\\\\\"FaceAttributes\\\\\\":{\\\\\\"Mask\\\\\\":\\\\\\"none\\\\\\",\\\\\\"MaskConfidence\\\\\\":0.894,\\\\\\"Beard\\\\\\":\\\\\\"none\\\\\\",\\\\\\"BeardConfidence\\\\\\":0.997,\\\\\\"Glasses\\\\\\":\\\\\\"none\\\\\\",\\\\\\"GlassesConfidence\\\\\\":0.999,\\\\\\"Mouth\\\\\\":\\\\\\"close\\\\\\",\\\\\\"MouthConfidence\\\\\\":0.937,\\\\\\"Hat\\\\\\":\\\\\\"none\\\\\\",\\\\\\"HatConfidence\\\\\\":0.998,\\\\\\"HeadPose\\\\\\":{\\\\\\"Pitch\\\\\\":10.684,\\\\\\"Roll\\\\\\":-10.707,\\\\\\"Yaw\\\\\\":-20.094},\\\\\\"FaceBoundary\\\\\\":{\\\\\\"Width\\\\\\":457,\\\\\\"Height\\\\\\":687,\\\\\\"Top\\\\\\":1324,\\\\\\"Left\\\\\\":1356}}}]\\",\\n        \\"faces_thumbnail\\": [\\n          {\\n            \\"face_id\\": \\"a9a66a86-73dd-4c95-8b79-1d8a49db5226\\",\\n            \\"face_group_id\\": \\"Cluster-e3b7fb52-22b3-44f2-9746-8c1804bd6af0\\",\\n            \\"face_thumbnail\\": \\"https://pds-domain.region.aliyuncs.com/QieGeH98%2F1001%2F63e5e551ee621482ab934a0687c6cda75fc07864%2F642a8a40c00f1ad379df421694713ee65170f09b?security-token=CAIS%2BgF1q6Ft5B2yfSjIr5bjHPCNnrdR8aSaSW7woVlmVd1Bt5HorDz2IHpPfHdoBe0btvU%2BlWxX6fwZlq5rR4QAXlDfNSyFeX20qFHPWZHInuDox55m4cTXNAr%2BIhr%2F29CoEIedZdjBe%2FCrRknZnytou9XTfimjWFrXWv%2Fgy%2BQQDLItUxK%2FcCBNCfpPOwJms7V6D3bKMuu3OROY6Qi5TmgQ41En1DIlt%2FXuk5DCtkqB12eXkLFF%2B97DRbG%2FdNRpMZtFVNO44fd7bKKp0lQLsUMSqv8q0fEcqGaW4o7CWQJLnzyCMvvJ9OVDFyN0aKEnH7J%2Bq%2FzxhTPrMnpkSlacGoABPMvZ8rSESUEP96Vbf%2Bk0JRg9Qb1MnaIJqWAgo8K6K0UP1CtqL2zrUtugpKKDHOYiKbq2O0S5yLUPVX5vBHqEi%2FFc7i6ZnHCMcXLJs4rKDKwRBEhovUXXlklq2q43OSVtLrXkBy9Xs1ers%2FhJhcxpNA0Vl3EWfJxa2BTylEdnLOQ%3D&x-oss-access-key-id=STS.NUVWJ9shpFfqKHAEY3YRmXTCN&x-oss-expires=1686455451&x-oss-process=image%2Fcrop%2Cx_1128%2Cy_1211%2Cw_914%2Ch_914%2Fformat%2Cjpg&x-oss-signature=jmhOz91Tww1ciMEwadDiioU7d93FDiBNr8s8mHyMqW0%3D&x-oss-signature-version=OSS2\\"\\n          }\\n        ],\\n        \\"exif\\": \\"{\\\\\\"Compression\\\\\\":{\\\\\\"value\\\\\\":\\\\\\"6\\\\\\"},\\\\\\"DateTime\\\\\\":{\\\\\\"value\\\\\\":\\\\\\"2020:08:19 17:11:11\\\\\\"}}\\",\\n        \\"image_quality\\": {\\n          \\"overall_score\\": 0.736\\n        }\\n      },\\n      \\"ex_fields_info\\": {\\n        \\"key\\": \\"\\"\\n      },\\n      \\"content_uri\\": \\"\\",\\n      \\"streams_info\\": {\\n        \\"key\\": {\\n          \\"crc64_hash\\": \\"\\",\\n          \\"size\\": 0,\\n          \\"content_hash\\": \\"\\",\\n          \\"content_hash_name\\": \\"\\",\\n          \\"download_url\\": \\"\\",\\n          \\"url\\": \\"\\",\\n          \\"thumbnail\\": \\"\\"\\n        }\\n      },\\n      \\"user_tags\\": {\\n        \\"key\\": \\"\\"\\n      },\\n      \\"revision_version\\": 0,\\n      \\"video_media_metadata\\": {\\n        \\"time\\": \\"2006-01-02T15:04:05.000Z07:00\\",\\n        \\"width\\": 1920,\\n        \\"height\\": 1080,\\n        \\"location\\": \\"30.185453,120.218522\\",\\n        \\"country\\": \\"中国\\",\\n        \\"province\\": \\"浙江省\\",\\n        \\"city\\": \\"杭州市\\",\\n        \\"district\\": \\"滨江区\\",\\n        \\"township\\": \\"西兴街道\\",\\n        \\"address_line\\": \\"浙江省杭州市滨江区西兴街道江陵路\\",\\n        \\"video_media_video_stream\\": [\\n          {\\n            \\"duration\\": \\"22.88\\",\\n            \\"bitrate\\": \\"108420\\",\\n            \\"code_name\\": \\"h264\\",\\n            \\"frame_count\\": \\"90\\"\\n          }\\n        ],\\n        \\"video_media_audio_stream\\": [\\n          {\\n            \\"duration\\": \\"7704.573000\\",\\n            \\"bit_rate\\": \\"129280\\",\\n            \\"code_name\\": \\"aac\\"\\n          }\\n        ]\\n      },\\n      \\"punish_flag\\": 0,\\n      \\"id_path\\": \\"\\",\\n      \\"name_path\\": \\"\\",\\n      \\"creator_type\\": \\"\\",\\n      \\"creator_id\\": \\"\\",\\n      \\"creator_name\\": \\"\\",\\n      \\"last_modifier_type\\": \\"\\",\\n      \\"last_modifier_id\\": \\"\\",\\n      \\"last_modifier_name\\": \\"\\",\\n      \\"dir_size_info\\": {\\n        \\"dir_count\\": 0,\\n        \\"file_count\\": 0\\n      },\\n      \\"trashed\\": true\\n    }\\n  ],\\n  \\"next_marker\\": \\"NWQ1Yjk4YmI1ZDRlYmU1Y2E0YWE0NmJhYWJmODBhNDQ2NzhlMTRhM1\\"\\n}","type":"json"}]',
      'title' => '列举回收站',
    ),
    'RestoreFile' => 
    array (
      'summary' => '从回收站恢复文件或文件夹。',
      'path' => '/v2/recyclebin/restore',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'https',
      ),
      'tags' => 
      array (
        0 => 'api',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
        1 => 
        array (
          'BearerToken' => 
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
          'name' => 'domain_id',
          'in' => 'host',
          'schema' => 
          array (
            'type' => 'string',
            'required' => true,
          ),
        ),
        1 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '请求体参数。',
            'type' => 'object',
            'properties' => 
            array (
              'drive_id' => 
              array (
                'description' => '空间ID',
                'type' => 'string',
                'required' => true,
                'example' => '1',
              ),
              'file_id' => 
              array (
                'description' => '文件或文件夹ID',
                'type' => 'string',
                'required' => true,
                'example' => '4221bf6e6ab43a255edc4463bffa6f5f5d317401',
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
            'title' => 'Schema of Response',
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'domain_id' => 
              array (
                'title' => 'Id of the request',
                'description' => '域ID',
                'type' => 'string',
                'example' => 'bj1',
              ),
              'drive_id' => 
              array (
                'description' => '空间ID',
                'type' => 'string',
                'example' => '1',
              ),
              'file_id' => 
              array (
                'description' => '文件或文件夹ID',
                'type' => 'string',
                'example' => '4221bf6e6ab43a255edc4463bffa6f5f5d317401',
              ),
              'async_task_id' => 
              array (
                'description' => '异步任务ID

如果是恢复文件，返回空字符串，说明不需要异步处理，已处理成功。

如果是恢复文件夹，返回非空字符串，说明需要经过异步处理恢复。调用GetAsyncTask，传递异步任务ID，获取任务信息。',
                'type' => 'string',
                'example' => '4221bf6e6ab43c255edc4463bf3a6f5f5d317406',
              ),
            ),
          ),
        ),
        204 => 
        array (
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"domain_id\\": \\"bj1\\",\\n  \\"drive_id\\": \\"1\\",\\n  \\"file_id\\": \\"4221bf6e6ab43a255edc4463bffa6f5f5d317401\\",\\n  \\"async_task_id\\": \\"4221bf6e6ab43c255edc4463bf3a6f5f5d317406\\"\\n}","type":"json"}]',
      'title' => '恢复文件或文件夹',
    ),
    'UpdateFacegroup' => 
    array (
      'summary' => '更新人脸分组信息。',
      'path' => '/v2/image/update_facegroup_info',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'https',
      ),
      'tags' => 
      array (
        0 => 'api',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
        1 => 
        array (
          'BearerToken' => 
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
          'name' => 'domain_id',
          'in' => 'host',
          'schema' => 
          array (
            'type' => 'string',
            'required' => true,
          ),
        ),
        1 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '请求体参数。',
            'type' => 'object',
            'properties' => 
            array (
              'drive_id' => 
              array (
                'description' => '空间id',
                'type' => 'string',
                'required' => true,
                'example' => '1',
              ),
              'group_id' => 
              array (
                'description' => '人脸分组id, 通过列举人脸分组接口返回的结果中获取',
                'type' => 'string',
                'required' => true,
                'example' => 'group-abc',
              ),
              'group_name' => 
              array (
                'description' => '人脸分组名称，长度最大128字符',
                'type' => 'string',
                'required' => false,
                'example' => '张三人脸',
                'maxLength' => 128,
                'minLength' => 1,
              ),
              'group_cover_face_id' => 
              array (
                'description' => '人脸分组封面人脸ID, 通过文件接口file/get,file/list,file/search的返回结果**ImageMediaMetadata**字段中进行获取

',
                'type' => 'string',
                'required' => false,
                'example' => 'face1',
              ),
              'remarks' => 
              array (
                'description' => '备注，长度最大128字符',
                'type' => 'string',
                'required' => false,
                'example' => '张三',
                'maxLength' => 128,
                'minLength' => 1,
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
            'title' => 'Schema of Response',
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'drive_id' => 
              array (
                'title' => 'Id of the request',
                'description' => '空间ID',
                'type' => 'string',
                'example' => '1',
              ),
              'group_id' => 
              array (
                'description' => '分组ID',
                'type' => 'string',
                'example' => 'group-abc',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"drive_id\\": \\"1\\",\\n  \\"group_id\\": \\"group-abc\\"\\n}","type":"json"}]',
      'title' => '更新人脸分组信息',
    ),
    'ListTags' => 
    array (
      'summary' => '列举标签分组。',
      'path' => '/v2/image/list_tags',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'https',
        1 => 'http',
      ),
      'tags' => 
      array (
        0 => 'api',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
        1 => 
        array (
          'BearerToken' => 
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
          'name' => 'domain_id',
          'in' => 'host',
          'schema' => 
          array (
            'type' => 'string',
            'required' => true,
          ),
        ),
        1 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '请求体参数。',
            'type' => 'object',
            'properties' => 
            array (
              'drive_id' => 
              array (
                'description' => '空间id',
                'type' => 'string',
                'required' => true,
                'example' => '1',
              ),
              'image_thumbnail_process' => 
              array (
                'description' => '图片缩略图处理',
                'type' => 'string',
                'required' => false,
                'example' => 'image/resize,w_200',
              ),
              'video_thumbnail_process' => 
              array (
                'description' => '视频缩略图处理',
                'type' => 'string',
                'required' => false,
                'example' => 'video/snapshot,t_7000,f_jpg,w_800,h_600,m_fast',
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
            'type' => 'object',
            'properties' => 
            array (
              'tags' => 
              array (
                'description' => '分组列表',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '标签信息',
                  '$ref' => '#/components/schemas/ImageTag',
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"tags\\": [\\n    {\\n      \\"name\\": \\"动物\\",\\n      \\"count\\": 10,\\n      \\"cover_url\\": \\"https://data.aliyunpds.com/hz22%2F5d5b986facbec311ef844c25954f96821497b383%2F5d5b986f955410dd991646bb87c6b4e899eff525?Expires=xxx&OSSAccessKeyId=xxx&Signature=xxx\\",\\n      \\"cover_file_id\\": \\"5d79206586bb5dd69fb34c349282718146c55da7\\",\\n      \\"cover_file_category\\": \\"image\\",\\n      \\"cover_tag_confidence\\": 1,\\n      \\"cover_overall_score\\": 0.736\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '列举标签分组',
      'description' => '标签分组接口结果是一次性返回指定的drive内聚合的结果，按照分组内照片数取前top2000个返回。',
    ),
    'ListAddressGroups' => 
    array (
      'summary' => '列举地点聚类。',
      'path' => '/v2/image/list_address_groups',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'https',
      ),
      'tags' => 
      array (
        0 => 'api',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
        1 => 
        array (
          'BearerToken' => 
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
          'name' => 'domain_id',
          'in' => 'host',
          'schema' => 
          array (
            'type' => 'string',
            'required' => true,
          ),
        ),
        1 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '请求体参数。',
            'type' => 'object',
            'properties' => 
            array (
              'drive_id' => 
              array (
                'description' => '空间id',
                'type' => 'string',
                'required' => true,
                'example' => '1',
              ),
              'limit' => 
              array (
                'description' => '限定此次返回资源的数量。如果不设定，默认返回100，最大不能超过100。',
                'type' => 'integer',
                'format' => 'int32',
                'required' => false,
                'example' => '100',
              ),
              'marker' => 
              array (
                'description' => '设定结果从marker之后按字母排序的第一个开始返回。如果不设定，则从头开始返回数据。
默认值：无',
                'type' => 'string',
                'required' => false,
                'example' => 'NWQ1Yjk4YmI1ZDRlYmU1Y2E0YWE0NmJhYWJmODBhNDQ2NzhlMTRhMg',
              ),
              'image_thumbnail_process' => 
              array (
                'description' => '图片缩略图处理样式',
                'type' => 'string',
                'required' => false,
                'example' => 'image/resize,w_200',
              ),
              'video_thumbnail_process' => 
              array (
                'description' => '视频缩略图处理样式',
                'type' => 'string',
                'required' => false,
                'example' => 'video_thumbnail_process',
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
            'title' => 'Schema of Response',
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'items' => 
              array (
                'description' => '地点聚类列表',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '地点聚类',
                  '$ref' => '#/components/schemas/AddressGroup',
                ),
              ),
              'next_marker' => 
              array (
                'description' => '下一页起始资源标识符, 最后一页该值为空。',
                'type' => 'string',
                'example' => 'NWQ1Yjk4YmI1ZDRlYmU1Y2E0YWE0NmJhYWJmODBhNDQ2NzhlMTRhMg',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"items\\": [\\n    {\\n      \\"name\\": \\"\\",\\n      \\"location\\": \\"\\",\\n      \\"count\\": 0,\\n      \\"cover_url\\": \\"\\",\\n      \\"cover_file_id\\": \\"\\",\\n      \\"address_detail\\": {\\n        \\"country\\": \\"中国\\",\\n        \\"province\\": \\"浙江省\\",\\n        \\"city\\": \\"杭州市\\",\\n        \\"district\\": \\"余杭区\\",\\n        \\"township\\": \\"文一西路\\"\\n      }\\n    }\\n  ],\\n  \\"next_marker\\": \\"NWQ1Yjk4YmI1ZDRlYmU1Y2E0YWE0NmJhYWJmODBhNDQ2NzhlMTRhMg\\"\\n}","type":"json"}]',
      'title' => '列举地点聚类',
    ),
    'ListFacegroups' => 
    array (
      'summary' => '列举人脸分组。',
      'path' => '/v2/image/list_facegroups',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'https',
      ),
      'tags' => 
      array (
        0 => 'api',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
        1 => 
        array (
          'BearerToken' => 
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
          'name' => 'domain_id',
          'in' => 'host',
          'schema' => 
          array (
            'type' => 'string',
            'required' => true,
          ),
        ),
        1 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '请求体参数。',
            'type' => 'object',
            'properties' => 
            array (
              'drive_id' => 
              array (
                'description' => '空间id',
                'type' => 'string',
                'required' => true,
                'example' => '1',
              ),
              'remarks' => 
              array (
                'description' => '查询过滤使用， 长度最大128字符，采用的是精确匹配过滤',
                'type' => 'string',
                'required' => false,
                'example' => '张三',
                'maxLength' => 128,
                'minLength' => 1,
              ),
              'limit' => 
              array (
                'description' => 'limit值，n的取值范围：1~100, 默认100。',
                'type' => 'integer',
                'format' => 'int32',
                'required' => false,
                'example' => '100',
              ),
              'marker' => 
              array (
                'description' => '设定结果从marker之后按字母排序的第一个开始返回。如果不设定，则从头开始返回数据。
默认值：无',
                'type' => 'string',
                'required' => false,
                'example' => 'NWQ1Yjk4YmI1ZDRlYmU1Y2E0YWE0NmJhYWJmODBhNDQ2NzhlMTRhMg',
              ),
              'return_total_count' => 
              array (
                'description' => '是否返回搜到的文件总数',
                'type' => 'boolean',
                'required' => false,
                'example' => 'false',
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
            'type' => 'object',
            'properties' => 
            array (
              'items' => 
              array (
                'description' => '人脸分组列表',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '人脸分组',
                  '$ref' => '#/components/schemas/FaceGroup',
                ),
              ),
              'next_marker' => 
              array (
                'description' => '下一页起始资源标识符, 最后一页该值为空。',
                'type' => 'string',
                'example' => 'NWQ1Yjk4YmI1ZDRlYmU1Y2E0YWE0NmJhYWJmODBhNDQ2NzhlMTRhMg',
              ),
              'total_count' => 
              array (
                'description' => '命中的文件总数',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '30',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"items\\": [\\n    {\\n      \\"group_id\\": \\"Cluster-ae6e3472-999e-410b-b54e-cd5dba****\\",\\n      \\"group_name\\": \\"name\\",\\n      \\"image_count\\": 10,\\n      \\"created_at\\": \\"2022-01-14T10:10:52.83948013+08:00\\",\\n      \\"updated_at\\": \\"2022-01-14T10:10:52.83948013+08:00\\",\\n      \\"group_cover_url\\": \\"https://xxx\\",\\n      \\"group_cover_file_id\\": \\"6549c959640fbd517c9b4d93b3b36aecc45xxxxx\\",\\n      \\"group_cover_width\\": 1920,\\n      \\"group_cover_height\\": 1080,\\n      \\"group_cover_face_boundary\\": {\\n        \\"Width\\": 200,\\n        \\"Height\\": 300,\\n        \\"Top\\": 30,\\n        \\"Left\\": 10\\n      },\\n      \\"remarks\\": \\"\\",\\n      \\"remarks_array\\": [\\n        \\"\\"\\n      ]\\n    }\\n  ],\\n  \\"next_marker\\": \\"NWQ1Yjk4YmI1ZDRlYmU1Y2E0YWE0NmJhYWJmODBhNDQ2NzhlMTRhMg\\",\\n  \\"total_count\\": 30\\n}","type":"json"}]',
      'title' => '列举人脸分组',
    ),
    'SearchAddressGroups' => 
    array (
      'summary' => '根据地点列表查询地点聚类。',
      'path' => '/v2/image/search_address_groups',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'https',
      ),
      'tags' => 
      array (
        0 => 'api',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
        1 => 
        array (
          'BearerToken' => 
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
          'name' => 'domain_id',
          'in' => 'host',
          'schema' => 
          array (
            'type' => 'string',
            'required' => true,
          ),
        ),
        1 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '请求体参数。',
            'type' => 'object',
            'properties' => 
            array (
              'drive_id' => 
              array (
                'description' => '空间id',
                'type' => 'string',
                'required' => true,
                'example' => '1',
              ),
              'tl_geo_point' => 
              array (
                'description' => '矩形的左顶点位置（维度，经度）',
                'type' => 'string',
                'required' => false,
                'example' => '39.121,101.2121',
              ),
              'br_geo_point' => 
              array (
                'description' => '矩形的右底点位置（维度，经度）',
                'type' => 'string',
                'required' => false,
                'example' => '40.121,105.2121',
              ),
              'address_level' => 
              array (
                'description' => '查询的地点级别',
                'type' => 'string',
                'required' => false,
                'enumValueTitles' => 
                array (
                  'country' => 'country',
                  'province' => 'province',
                  'city' => 'city',
                  'district' => 'district',
                  'township' => 'township',
                ),
                'example' => 'city 
一共有5个值可选：如下所示
- country
- province
- city
- district
- township',
              ),
              'address_names' => 
              array (
                'description' => '地点列表',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '地点列表, 数组内个数最多10个， 内部的值需要与address_level 级别对应，
该参数与上边tl_geo_point和br_geo_point参数互斥，二者选其一',
                  'type' => 'string',
                  'required' => false,
                  'example' => '["杭州市","北京市"]',
                ),
                'required' => false,
                'maxItems' => 10,
                'minItems' => 1,
              ),
              'image_thumbnail_process' => 
              array (
                'description' => '图片缩略图处理样式',
                'type' => 'string',
                'required' => false,
                'example' => 'image/resize,w_200',
              ),
              'video_thumbnail_process' => 
              array (
                'description' => '视频缩略图处理样式',
                'type' => 'string',
                'required' => false,
                'example' => 'video/snapshot,t_7000,f_jpg,w_800,h_600,m_fast',
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
            'title' => 'Schema of Response',
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'items' => 
              array (
                'description' => '地点聚类列表',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '地点聚类',
                  '$ref' => '#/components/schemas/AddressGroup',
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"items\\": [\\n    {\\n      \\"name\\": \\"\\",\\n      \\"location\\": \\"\\",\\n      \\"count\\": 0,\\n      \\"cover_url\\": \\"\\",\\n      \\"cover_file_id\\": \\"\\",\\n      \\"address_detail\\": {\\n        \\"country\\": \\"中国\\",\\n        \\"province\\": \\"浙江省\\",\\n        \\"city\\": \\"杭州市\\",\\n        \\"district\\": \\"余杭区\\",\\n        \\"township\\": \\"文一西路\\"\\n      }\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '根据地点列表查询地点聚类',
    ),
    'RemoveFaceGroupFile' => 
    array (
      'summary' => '删除人脸分组中的文件。',
      'path' => '/v2/albums/unassign_facegroup_item',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'https',
      ),
      'tags' => 
      array (
        0 => 'api',
      ),
      'security' => 
      array (
        0 => 
        array (
          'BearerToken' => 
          array (
          ),
        ),
        1 => 
        array (
          'AK' => 
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
          'name' => 'domain_id',
          'in' => 'host',
          'schema' => 
          array (
            'type' => 'string',
            'required' => true,
          ),
        ),
        1 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '请求体参数。',
            'type' => 'object',
            'properties' => 
            array (
              'drive_id' => 
              array (
                'description' => '空间id',
                'type' => 'string',
                'required' => true,
                'example' => '123',
              ),
              'face_group_id' => 
              array (
                'description' => '人脸分组 id',
                'type' => 'string',
                'required' => true,
                'example' => 'Cluster-abc',
              ),
              'file_id' => 
              array (
                'description' => '需要被移除人脸分组的文件id',
                'type' => 'string',
                'required' => true,
                'example' => 'abcd',
              ),
            ),
            'required' => false,
          ),
        ),
      ),
      'responses' => 
      array (
        204 => 
        array (
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{}","type":"json"}]',
      'title' => '删除人脸分组文件',
    ),
    'CreateStory' => 
    array (
      'summary' => '创建推荐故事。
PDS 会根据请求参数中的故事类型和时间范围筛选 drive 空间下的图片和视频，将符合条件的图片、视频加入该故事的文件列表。
若没有符合条件的图片、视频，则会创建空故事。',
      'path' => '/v2/image/create_story',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'https',
      ),
      'tags' => 
      array (
        0 => 'api',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
        1 => 
        array (
          'BearerToken' => 
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
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'domain_id',
          'in' => 'host',
          'schema' => 
          array (
            'type' => 'string',
            'required' => true,
          ),
        ),
        1 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '请求体',
            'type' => 'object',
            'properties' => 
            array (
              'drive_id' => 
              array (
                'description' => '空间 id',
                'type' => 'string',
                'required' => true,
                'example' => '1',
              ),
              'story_id' => 
              array (
                'description' => '故事 id。由用户指定。',
                'type' => 'string',
                'required' => false,
                'example' => '9132e0d8-fe92-4e56-86c3-f5f112308003',
              ),
              'story_type' => 
              array (
                'description' => '故事类型',
                'type' => 'string',
                'required' => true,
                'enumValueTitles' => 
                array (
                  'PeopleMemory' => '人物故事',
                  'TagMemory' => '标签故事',
                  'TimeMemory' => '时光故事',
                  'TravelMemory' => '旅行故事',
                ),
                'example' => 'TagMemory',
                'enum' => 
                array (
                  0 => 'TimeMemory',
                  1 => 'PeopleMemory',
                  2 => 'TagMemory',
                  3 => 'TravelMemory',
                ),
              ),
              'story_sub_type' => 
              array (
                'description' => '故事子类型。其值取决于故事类型，详情可见请求参数补充说明。',
                'type' => 'string',
                'required' => false,
                'example' => 'Food',
              ),
              'story_name' => 
              array (
                'description' => '故事名称。
长度不超过 1024 个字节。',
                'type' => 'string',
                'required' => false,
                'example' => '美食',
              ),
              'story_start_time' => 
              array (
                'description' => '创建故事照片或视频的开始时间。RFC3339。',
                'type' => 'string',
                'required' => false,
                'example' => '2016-12-30T16:00:00Z',
              ),
              'story_end_time' => 
              array (
                'description' => '创建故事照片或视频的结束时间。RFC3339。',
                'type' => 'string',
                'required' => false,
                'example' => '2022-12-30T16:00:00Z',
              ),
              'min_image_count' => 
              array (
                'description' => '创建故事照片或视频文件最小个数。
须大于 0，小于等于 max\\_image\\_count，空值默认为 1。',
                'type' => 'integer',
                'format' => 'int64',
                'required' => false,
                'minimum' => '1',
                'example' => '1',
                'default' => '1',
              ),
              'max_image_count' => 
              array (
                'description' => '创建故事照片或视频文件最大个数。
须小于等于 100，大于等于 min\\_image\\_count，空值默认 30。',
                'type' => 'integer',
                'format' => 'int64',
                'required' => false,
                'maximum' => '100',
                'example' => '30',
                'default' => '30',
              ),
              'custom_labels' => 
              array (
                'description' => '自定义标签。
标签数量不能超过 20 个。',
                'type' => 'object',
                'deprecated' => true,
                'required' => false,
                'additionalProperties' => 
                array (
                  'type' => 'string',
                  'example' => 'label_value',
                  'description' => '自定义标签',
                ),
              ),
              'address' => 
              array (
                'description' => '地址信息',
                'required' => false,
                '$ref' => '#/components/schemas/Address',
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
            'title' => 'Schema of Response',
            'description' => '返回参数',
            'type' => 'object',
            'properties' => 
            array (
              'drive_id' => 
              array (
                'description' => '空间 id',
                'type' => 'string',
                'example' => '1',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"drive_id\\": \\"1\\"\\n}","type":"json"}]',
      'title' => '创建推荐故事',
      'description' => '**请确保在使用该接口前，已充分了解 PDS 的收费方式和[价格](~~425220~~)**。

使用此功能须开通增值服务图片处理功能。故事相关接口限时免费。

用户创建故事时可自己指定故事 id：
- 若指定故事 id：
    - 若故事 id 不存在，则使用该 id 创建新故事；
    - 若故事 id 存在，则会根据新条件生成故事并覆盖更新该故事；
- 若不指定 id，则会由 PDS 生成故事 id。


> 
> - 该接口为异步接口，用户创建推荐故事后需要等待一定时间生成该故事。用户可以通过 GetStory 接口或者 FindStories 接口去查询创建故事的进度。',
      'requestParamsDescription' => '### 故事类型

- TimeMemory：时光故事

- PeopleMemory：人物故事

- TagMemory：标签故事

- TravelMemory：旅行故事

### 故事子类型

TimeMemory：空

PeopleMemory：

- Solo：人物故事，单人故事。搜索数据集里人脸数目最多的人物，根据已做过的人脸聚类的结果生成人物故事，可支持通过时间参数StoryStartTime和StoryEndTime传入时间间隔，即在某段时间间隔内，照片数量最多的人物为候选人物，不会关注是否已有该人物的故事生成

TagMemory：

- Food：美食标签故事

- Pet：宠物标签故事

- PetDog：宠物狗标签故事

- PetCat：宠物猫标签故事

- Scenery：风景标签故事

TravelMemory：空',
    ),
    'CreateCustomizedStory' => 
    array (
      'summary' => '创建自定义故事。
区别于推荐故事，自定义故事下面的文件列表由用户指定。',
      'path' => '/v2/image/create_customized_story',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'https',
      ),
      'tags' => 
      array (
        0 => 'api',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
        1 => 
        array (
          'BearerToken' => 
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
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'domain_id',
          'in' => 'host',
          'schema' => 
          array (
            'type' => 'string',
            'required' => true,
          ),
        ),
        1 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '请求体',
            'type' => 'object',
            'properties' => 
            array (
              'drive_id' => 
              array (
                'description' => '空间 id',
                'type' => 'string',
                'required' => true,
                'example' => '1',
              ),
              'story_type' => 
              array (
                'description' => '故事类型。由用户自定义。',
                'type' => 'string',
                'required' => true,
                'example' => 'user_created',
              ),
              'story_sub_type' => 
              array (
                'description' => '故事子类型。由用户自定义。',
                'type' => 'string',
                'required' => true,
                'example' => 'user_created',
              ),
              'story_name' => 
              array (
                'description' => '故事名称。
长度不能超过 1024 字节。',
                'type' => 'string',
                'required' => true,
                'example' => 'test_name',
              ),
              'story_cover' => 
              array (
                'description' => '故事封面。该封面必须在故事文件列表中。',
                'type' => 'object',
                'properties' => 
                array (
                  'file_id' => 
                  array (
                    'description' => '文件 id',
                    'type' => 'string',
                    'required' => true,
                    'example' => '63e5e4340f76cb3ead5f40f68163f0f967c1a7bf',
                  ),
                  'revision_id' => 
                  array (
                    'description' => '文件版本 id',
                    'type' => 'string',
                    'required' => false,
                    'example' => '642a88d4aff041ee68fd4fc89beb80e1119da343',
                  ),
                ),
                'required' => true,
              ),
              'story_files' => 
              array (
                'description' => '故事文件列表',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'file_id' => 
                    array (
                      'description' => '文件 id',
                      'type' => 'string',
                      'required' => true,
                      'example' => '63e5e4340f76cb3ead5f40f68163f0f967c1a7bf',
                    ),
                    'revision_id' => 
                    array (
                      'description' => '文件版本 id',
                      'type' => 'string',
                      'required' => false,
                      'example' => '642a88d4aff041ee68fd4fc89beb80e1119da343',
                    ),
                  ),
                  'required' => false,
                ),
                'required' => true,
                'minItems' => 1,
              ),
              'custom_labels' => 
              array (
                'description' => '自定义标签。
标签数量不能超过 20 个。',
                'type' => 'object',
                'deprecated' => true,
                'required' => false,
                'additionalProperties' => 
                array (
                  'type' => 'string',
                  'example' => 'label_value',
                  'description' => '自定义标签',
                ),
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
            'title' => 'Schema of Response',
            'description' => '返回参数',
            'type' => 'object',
            'properties' => 
            array (
              'drive_id' => 
              array (
                'description' => '空间 id',
                'type' => 'string',
                'example' => '1',
              ),
              'story_id' => 
              array (
                'description' => '故事 id',
                'type' => 'string',
                'example' => '9132e0d8-fe92-4e56-86c3-f5f112308003',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"drive_id\\": \\"1\\",\\n  \\"story_id\\": \\"9132e0d8-fe92-4e56-86c3-f5f112308003\\"\\n}","type":"json"}]',
      'title' => '创建自定义故事',
      'description' => '**请确保在使用该接口前，已充分了解 PDS 的收费方式和[价格](~~425220~~)**。

使用此功能须开通增值服务图片处理功能。故事相关接口限时免费。

用户通过传入指定文件列表创建自定义故事。其中故事类型和故事子类型用户可自定义，不再有约束。

><notice>通过该接口指定故事封面时，该封面文件必须存在于故事列表中，否则会返回错误。></notice>
><notice>自定义故事列表中的文件类型只能为图片。></notice>',
    ),
    'SearchStories' => 
    array (
      'summary' => '根据用户指定的条件，查询指定 drive 空间下的故事列表。',
      'path' => '/v2/image/find_stories',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'https',
      ),
      'tags' => 
      array (
        0 => 'api',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
        1 => 
        array (
          'BearerToken' => 
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
          'name' => 'domain_id',
          'in' => 'host',
          'schema' => 
          array (
            'type' => 'string',
            'required' => true,
          ),
        ),
        1 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '请求参数',
            'type' => 'object',
            'properties' => 
            array (
              'drive_id' => 
              array (
                'description' => '空间 id',
                'type' => 'string',
                'required' => true,
                'example' => '1',
              ),
              'story_id' => 
              array (
                'description' => '故事 id',
                'type' => 'string',
                'required' => false,
                'example' => '9132e0d8-fe92-4e56-86c3-f5f112308003',
              ),
              'story_type' => 
              array (
                'description' => '故事类型。由用户创建时指定。',
                'type' => 'string',
                'required' => false,
                'example' => 'PeopleMemory',
              ),
              'story_name' => 
              array (
                'description' => '故事名称。
长度不超过 1024 字节。',
                'type' => 'string',
                'required' => false,
                'example' => '美食',
              ),
              'story_start_time_range' => 
              array (
                'description' => '创建故事照片或视频的开始时间范围',
                'type' => 'object',
                'properties' => 
                array (
                  'start' => 
                  array (
                    'description' => '起始时间。时间格式为 RFC3339。',
                    'type' => 'string',
                    'required' => false,
                    'example' => '2016-12-31T00:00:00+08:00',
                  ),
                  'end' => 
                  array (
                    'description' => '结束时间。时间格式为 RFC3339。',
                    'type' => 'string',
                    'required' => false,
                    'example' => '2022-12-31T00:00:00+08:00',
                  ),
                ),
                'required' => false,
              ),
              'story_end_time_range' => 
              array (
                'description' => '创建故事照片或视频的结束时间范围',
                'type' => 'object',
                'properties' => 
                array (
                  'start' => 
                  array (
                    'description' => '起始时间。时间格式为 RFC3339。',
                    'type' => 'string',
                    'required' => false,
                    'example' => '2016-12-31T00:00:00+08:00',
                  ),
                  'end' => 
                  array (
                    'description' => '结束时间。时间格式为 RFC3339。',
                    'type' => 'string',
                    'required' => false,
                    'example' => '2022-12-31T00:00:00+08:00',
                  ),
                ),
                'required' => false,
              ),
              'create_time_range' => 
              array (
                'description' => '创建故事时间范围',
                'type' => 'object',
                'properties' => 
                array (
                  'start' => 
                  array (
                    'description' => '起始时间。时间格式为 RFC3339。',
                    'type' => 'string',
                    'required' => false,
                    'example' => '2016-12-31T00:00:00+08:00',
                  ),
                  'end' => 
                  array (
                    'description' => '结束时间。时间格式为 RFC3339。',
                    'type' => 'string',
                    'required' => false,
                    'example' => '2022-12-31T00:00:00+08:00',
                  ),
                ),
                'required' => false,
              ),
              'face_group_ids' => 
              array (
                'description' => '人脸分组列表。
查询人物故事时使用。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '人脸分组 id',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'Cluster-be377f73-3502-433c-8309-a01e659c128c',
                ),
                'required' => false,
              ),
              'custom_labels' => 
              array (
                'description' => '自定义标签。
可查询多个字段，使用 "," 分隔。',
                'type' => 'string',
                'deprecated' => true,
                'required' => false,
                'example' => 'key1=value1,key2!=value2',
              ),
              'with_empty_stories' => 
              array (
                'description' => '是否返回空故事。默认 false。',
                'type' => 'boolean',
                'required' => false,
                'example' => 'false',
              ),
              'marker' => 
              array (
                'description' => '查询的起始位置。若为空则表示从头开始查询。',
                'type' => 'string',
                'required' => false,
                'example' => 'NWQ1Yjk4YmI1ZDODBhNDQ2Nzhl***',
              ),
              'limit' => 
              array (
                'description' => '限定此次返回资源的数量，取值范围\\[1,100\\]。
默认 100。
返回结果可以小于指定的数量，但不能多于指定的数量。',
                'type' => 'integer',
                'format' => 'int64',
                'required' => false,
                'example' => '100',
                'default' => '100',
              ),
              'sort' => 
              array (
                'description' => '排序字段',
                'type' => 'string',
                'required' => false,
                'enumValueTitles' => 
                array (
                  'StoryName' => '按故事名称排序',
                  'StoryEndTime' => '按故事结束时间排序',
                  'CreateTime' => '按故事创建时间排序',
                  'StoryStartTime' => '按故事开始时间排序',
                ),
                'example' => 'CreateTime',
                'enum' => 
                array (
                  0 => 'CreateTime',
                  1 => 'StoryName',
                  2 => 'StoryStartTime',
                  3 => 'StoryEndTime',
                ),
              ),
              'order' => 
              array (
                'description' => '排序方式',
                'type' => 'string',
                'required' => false,
                'enumValueTitles' => 
                array (
                  'asc' => '升序',
                  'desc' => '降序',
                ),
                'example' => 'desc',
                'enum' => 
                array (
                  0 => 'asc',
                  1 => 'desc',
                ),
              ),
              'cover_image_thumbnail_process' => 
              array (
                'description' => '图片封面缩略图控制参数',
                'type' => 'string',
                'deprecated' => true,
                'required' => false,
                'example' => 'image/resize,m_fill,h_128,w_128,limit_0/format,jpg',
              ),
              'cover_video_thumbnail_process' => 
              array (
                'description' => '视频封面缩略图控制参数',
                'type' => 'string',
                'deprecated' => true,
                'required' => false,
                'example' => 'video/snapshot,t_1000,f_jpg,w_0,h_0,m_fast,ar_auto',
              ),
              'url_expire_sec' => 
              array (
                'description' => '缩略图过期时间。单位为秒，最短 10 秒，最长 86400 秒。',
                'type' => 'integer',
                'format' => 'int64',
                'deprecated' => true,
                'required' => false,
                'maximum' => '86400',
                'minimum' => '10',
                'example' => '900',
                'default' => '900',
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
            'title' => 'Schema of Response',
            'description' => '返回参数',
            'type' => 'object',
            'properties' => 
            array (
              'items' => 
              array (
                'description' => '故事列表',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '故事详情',
                  '$ref' => '#/components/schemas/Story',
                ),
              ),
              'next_marker' => 
              array (
                'description' => '下次查询位置',
                'type' => 'string',
                'example' => 'Yjk4YmI1ZDRlYmU1Y2E0YWE0NmJ***',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"items\\": [\\n    {\\n      \\"story_id\\": \\"\\",\\n      \\"story_type\\": \\"\\",\\n      \\"story_sub_type\\": \\"\\",\\n      \\"story_name\\": \\"\\",\\n      \\"story_start_time\\": \\"\\",\\n      \\"story_end_time\\": \\"\\",\\n      \\"created_at\\": \\"\\",\\n      \\"updated_at\\": \\"\\",\\n      \\"face_group_ids\\": [\\n        \\"\\"\\n      ],\\n      \\"cover_file_id\\": \\"\\",\\n      \\"cover_file_thumbnail_url\\": \\"\\",\\n      \\"story_file_list\\": [\\n        {\\n          \\"domain_id\\": \\"\\",\\n          \\"drive_id\\": \\"\\",\\n          \\"file_id\\": \\"\\",\\n          \\"name\\": \\"\\",\\n          \\"type\\": \\"\\",\\n          \\"content_type\\": \\"\\",\\n          \\"created_at\\": \\"\\",\\n          \\"updated_at\\": \\"\\",\\n          \\"description\\": \\"\\",\\n          \\"trashed_at\\": \\"\\",\\n          \\"file_extension\\": \\"\\",\\n          \\"mime_type\\": \\"\\",\\n          \\"mime_extension\\": \\"\\",\\n          \\"hidden\\": true,\\n          \\"size\\": 0,\\n          \\"starred\\": true,\\n          \\"status\\": \\"\\",\\n          \\"user_meta\\": \\"\\",\\n          \\"labels\\": [\\n            \\"\\"\\n          ],\\n          \\"upload_id\\": \\"\\",\\n          \\"parent_file_id\\": \\"\\",\\n          \\"crc64_hash\\": \\"\\",\\n          \\"content_hash\\": \\"\\",\\n          \\"content_hash_name\\": \\"\\",\\n          \\"download_url\\": \\"\\",\\n          \\"thumbnail\\": \\"\\",\\n          \\"category\\": \\"\\",\\n          \\"local_created_at\\": \\"\\",\\n          \\"local_modified_at\\": \\"\\",\\n          \\"revision_id\\": \\"\\",\\n          \\"investigation_info\\": {\\n            \\"status\\": 0,\\n            \\"suggestion\\": \\"\\"\\n          },\\n          \\"thumbnail_urls\\": {\\n            \\"key\\": \\"\\"\\n          },\\n          \\"image_media_metadata\\": {\\n            \\"time\\": \\"2006-01-02T15:04:05.000Z07:00\\",\\n            \\"width\\": 1920,\\n            \\"height\\": 1080,\\n            \\"location\\": \\"30.185453,120.218522\\",\\n            \\"country\\": \\"中国\\",\\n            \\"province\\": \\"浙江省\\",\\n            \\"city\\": \\"杭州市\\",\\n            \\"district\\": \\"滨江区\\",\\n            \\"township\\": \\"西兴街道\\",\\n            \\"address_line\\": \\"浙江省杭州市滨江区西兴街道江陵路\\",\\n            \\"image_tags\\": [\\n              {\\n                \\"confidence\\": 0.98,\\n                \\"parent_name\\": \\"运动\\",\\n                \\"name\\": \\"篮球\\",\\n                \\"tag_level\\": 3,\\n                \\"source\\": \\"一起打篮球\\",\\n                \\"centric_score\\": 0.877\\n              }\\n            ],\\n            \\"faces\\": \\"[{\\\\\\"FaceId\\\\\\":\\\\\\"a9a66a86-73dd-4c95-8b79-1d8a49db5226\\\\\\",\\\\\\"GroupId\\\\\\":\\\\\\"Cluster-e3b7fb52-22b3-44f2-9746-8c1804bd6af0\\\\\\",\\\\\\"FaceConfidence\\\\\\":0.999,\\\\\\"Age\\\\\\":13,\\\\\\"AgeConfidence\\\\\\":4,\\\\\\"Gender\\\\\\":\\\\\\"female\\\\\\",\\\\\\"GenderConfidence\\\\\\":1,\\\\\\"Emotion\\\\\\":\\\\\\"none\\\\\\",\\\\\\"EmotionConfidence\\\\\\":0.672,\\\\\\"FaceAttributes\\\\\\":{\\\\\\"Mask\\\\\\":\\\\\\"none\\\\\\",\\\\\\"MaskConfidence\\\\\\":0.894,\\\\\\"Beard\\\\\\":\\\\\\"none\\\\\\",\\\\\\"BeardConfidence\\\\\\":0.997,\\\\\\"Glasses\\\\\\":\\\\\\"none\\\\\\",\\\\\\"GlassesConfidence\\\\\\":0.999,\\\\\\"Mouth\\\\\\":\\\\\\"close\\\\\\",\\\\\\"MouthConfidence\\\\\\":0.937,\\\\\\"Hat\\\\\\":\\\\\\"none\\\\\\",\\\\\\"HatConfidence\\\\\\":0.998,\\\\\\"HeadPose\\\\\\":{\\\\\\"Pitch\\\\\\":10.684,\\\\\\"Roll\\\\\\":-10.707,\\\\\\"Yaw\\\\\\":-20.094},\\\\\\"FaceBoundary\\\\\\":{\\\\\\"Width\\\\\\":457,\\\\\\"Height\\\\\\":687,\\\\\\"Top\\\\\\":1324,\\\\\\"Left\\\\\\":1356}}}]\\",\\n            \\"faces_thumbnail\\": [\\n              {\\n                \\"face_id\\": \\"a9a66a86-73dd-4c95-8b79-1d8a49db5226\\",\\n                \\"face_group_id\\": \\"Cluster-e3b7fb52-22b3-44f2-9746-8c1804bd6af0\\",\\n                \\"face_thumbnail\\": \\"https://pds-domain.region.aliyuncs.com/QieGeH98%2F1001%2F63e5e551ee621482ab934a0687c6cda75fc07864%2F642a8a40c00f1ad379df421694713ee65170f09b?security-token=CAIS%2BgF1q6Ft5B2yfSjIr5bjHPCNnrdR8aSaSW7woVlmVd1Bt5HorDz2IHpPfHdoBe0btvU%2BlWxX6fwZlq5rR4QAXlDfNSyFeX20qFHPWZHInuDox55m4cTXNAr%2BIhr%2F29CoEIedZdjBe%2FCrRknZnytou9XTfimjWFrXWv%2Fgy%2BQQDLItUxK%2FcCBNCfpPOwJms7V6D3bKMuu3OROY6Qi5TmgQ41En1DIlt%2FXuk5DCtkqB12eXkLFF%2B97DRbG%2FdNRpMZtFVNO44fd7bKKp0lQLsUMSqv8q0fEcqGaW4o7CWQJLnzyCMvvJ9OVDFyN0aKEnH7J%2Bq%2FzxhTPrMnpkSlacGoABPMvZ8rSESUEP96Vbf%2Bk0JRg9Qb1MnaIJqWAgo8K6K0UP1CtqL2zrUtugpKKDHOYiKbq2O0S5yLUPVX5vBHqEi%2FFc7i6ZnHCMcXLJs4rKDKwRBEhovUXXlklq2q43OSVtLrXkBy9Xs1ers%2FhJhcxpNA0Vl3EWfJxa2BTylEdnLOQ%3D&x-oss-access-key-id=STS.NUVWJ9shpFfqKHAEY3YRmXTCN&x-oss-expires=1686455451&x-oss-process=image%2Fcrop%2Cx_1128%2Cy_1211%2Cw_914%2Ch_914%2Fformat%2Cjpg&x-oss-signature=jmhOz91Tww1ciMEwadDiioU7d93FDiBNr8s8mHyMqW0%3D&x-oss-signature-version=OSS2\\"\\n              }\\n            ],\\n            \\"exif\\": \\"{\\\\\\"Compression\\\\\\":{\\\\\\"value\\\\\\":\\\\\\"6\\\\\\"},\\\\\\"DateTime\\\\\\":{\\\\\\"value\\\\\\":\\\\\\"2020:08:19 17:11:11\\\\\\"}}\\",\\n            \\"image_quality\\": {\\n              \\"overall_score\\": 0.736\\n            }\\n          },\\n          \\"ex_fields_info\\": {\\n            \\"key\\": \\"\\"\\n          },\\n          \\"content_uri\\": \\"\\",\\n          \\"streams_info\\": {\\n            \\"key\\": {\\n              \\"crc64_hash\\": \\"\\",\\n              \\"size\\": 0,\\n              \\"content_hash\\": \\"\\",\\n              \\"content_hash_name\\": \\"\\",\\n              \\"download_url\\": \\"\\",\\n              \\"url\\": \\"\\",\\n              \\"thumbnail\\": \\"\\"\\n            }\\n          },\\n          \\"user_tags\\": {\\n            \\"key\\": \\"\\"\\n          },\\n          \\"revision_version\\": 0,\\n          \\"video_media_metadata\\": {\\n            \\"time\\": \\"2006-01-02T15:04:05.000Z07:00\\",\\n            \\"width\\": 1920,\\n            \\"height\\": 1080,\\n            \\"location\\": \\"30.185453,120.218522\\",\\n            \\"country\\": \\"中国\\",\\n            \\"province\\": \\"浙江省\\",\\n            \\"city\\": \\"杭州市\\",\\n            \\"district\\": \\"滨江区\\",\\n            \\"township\\": \\"西兴街道\\",\\n            \\"address_line\\": \\"浙江省杭州市滨江区西兴街道江陵路\\",\\n            \\"video_media_video_stream\\": [\\n              {\\n                \\"duration\\": \\"22.88\\",\\n                \\"bitrate\\": \\"108420\\",\\n                \\"code_name\\": \\"h264\\",\\n                \\"frame_count\\": \\"90\\"\\n              }\\n            ],\\n            \\"video_media_audio_stream\\": [\\n              {\\n                \\"duration\\": \\"7704.573000\\",\\n                \\"bit_rate\\": \\"129280\\",\\n                \\"code_name\\": \\"aac\\"\\n              }\\n            ]\\n          },\\n          \\"punish_flag\\": 0,\\n          \\"id_path\\": \\"\\",\\n          \\"name_path\\": \\"\\",\\n          \\"creator_type\\": \\"\\",\\n          \\"creator_id\\": \\"\\",\\n          \\"creator_name\\": \\"\\",\\n          \\"last_modifier_type\\": \\"\\",\\n          \\"last_modifier_id\\": \\"\\",\\n          \\"last_modifier_name\\": \\"\\",\\n          \\"dir_size_info\\": {\\n            \\"dir_count\\": 0,\\n            \\"file_count\\": 0\\n          },\\n          \\"trashed\\": true\\n        }\\n      ],\\n      \\"custom_id\\": \\"\\",\\n      \\"custom_labels\\": {\\n        \\"key\\": \\"\\"\\n      }\\n    }\\n  ],\\n  \\"next_marker\\": \\"Yjk4YmI1ZDRlYmU1Y2E0YWE0NmJ***\\"\\n}","type":"json"}]',
      'title' => '查询故事列表',
      'description' => '**请确保在使用该接口前，已充分了解 PDS 的收费方式和[价格](~~425220~~)**。

使用此功能须开通增值服务图片处理功能。

使用查询故事列表前，需要用户调用 CreateStory 或 CreateCustomizedStory 接口创建故事，否则返回空列表。',
    ),
    'GetStory' => 
    array (
      'summary' => '获取指定故事详情，包含封面、文件列表等。',
      'path' => '/v2/image/get_story',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'https',
      ),
      'tags' => 
      array (
        0 => 'api',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
        1 => 
        array (
          'BearerToken' => 
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
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'domain_id',
          'in' => 'host',
          'schema' => 
          array (
            'type' => 'string',
            'required' => true,
          ),
        ),
        1 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '请求体参数',
            'type' => 'object',
            'properties' => 
            array (
              'drive_id' => 
              array (
                'description' => '空间 id',
                'type' => 'string',
                'required' => true,
                'example' => '1',
              ),
              'story_id' => 
              array (
                'description' => '故事 id',
                'type' => 'string',
                'required' => true,
                'example' => '9132e0d8-fe92-4e56-86c3-f5f112308003',
              ),
              'cover_image_thumbnail_process' => 
              array (
                'description' => '图片封面缩略图控制参数',
                'type' => 'string',
                'deprecated' => true,
                'required' => false,
                'example' => 'image/resize,m_fill,h_128,w_128,limit_0/format,jpg',
              ),
              'cover_video_thumbnail_process' => 
              array (
                'description' => '视频封面缩略图控制参数',
                'type' => 'string',
                'deprecated' => true,
                'required' => false,
                'example' => 'video/snapshot,t_1000,f_jpg,w_0,h_0,m_fast,ar_auto',
              ),
              'image_url_process' => 
              array (
                'description' => '故事文件图片 url 控制参数',
                'type' => 'string',
                'deprecated' => true,
                'required' => false,
                'example' => 'image/resize,m_fill,h_128,w_128,limit_0/format,jpg',
              ),
              'image_thumbnail_process' => 
              array (
                'description' => '故事文件图片缩略图控制参数',
                'type' => 'string',
                'deprecated' => true,
                'required' => false,
                'example' => 'image/resize,m_fill,h_128,w_128,limit_0/format,jpg',
              ),
              'video_thumbnail_process' => 
              array (
                'description' => '故事文件视频缩略图控制参数',
                'type' => 'string',
                'deprecated' => true,
                'required' => false,
                'example' => 'video/snapshot,t_1000,f_jpg,w_0,h_0,m_fast,ar_auto',
              ),
              'url_expire_sec' => 
              array (
                'description' => '缩略图过期时间。单位为秒，最短 10 秒，最长 86400 秒

默认15分钟。',
                'type' => 'integer',
                'format' => 'int64',
                'deprecated' => true,
                'required' => false,
                'maximum' => '86400',
                'minimum' => '10',
                'example' => '900',
                'default' => '900',
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
            'description' => '故事详情',
            '$ref' => '#/components/schemas/Story',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"story_id\\": \\"\\",\\n  \\"story_type\\": \\"\\",\\n  \\"story_sub_type\\": \\"\\",\\n  \\"story_name\\": \\"\\",\\n  \\"story_start_time\\": \\"\\",\\n  \\"story_end_time\\": \\"\\",\\n  \\"created_at\\": \\"\\",\\n  \\"updated_at\\": \\"\\",\\n  \\"face_group_ids\\": [\\n    \\"\\"\\n  ],\\n  \\"cover_file_id\\": \\"\\",\\n  \\"cover_file_thumbnail_url\\": \\"\\",\\n  \\"story_file_list\\": [\\n    {\\n      \\"domain_id\\": \\"\\",\\n      \\"drive_id\\": \\"\\",\\n      \\"file_id\\": \\"\\",\\n      \\"name\\": \\"\\",\\n      \\"type\\": \\"\\",\\n      \\"content_type\\": \\"\\",\\n      \\"created_at\\": \\"\\",\\n      \\"updated_at\\": \\"\\",\\n      \\"description\\": \\"\\",\\n      \\"trashed_at\\": \\"\\",\\n      \\"file_extension\\": \\"\\",\\n      \\"mime_type\\": \\"\\",\\n      \\"mime_extension\\": \\"\\",\\n      \\"hidden\\": true,\\n      \\"size\\": 0,\\n      \\"starred\\": true,\\n      \\"status\\": \\"\\",\\n      \\"user_meta\\": \\"\\",\\n      \\"labels\\": [\\n        \\"\\"\\n      ],\\n      \\"upload_id\\": \\"\\",\\n      \\"parent_file_id\\": \\"\\",\\n      \\"crc64_hash\\": \\"\\",\\n      \\"content_hash\\": \\"\\",\\n      \\"content_hash_name\\": \\"\\",\\n      \\"download_url\\": \\"\\",\\n      \\"thumbnail\\": \\"\\",\\n      \\"category\\": \\"\\",\\n      \\"local_created_at\\": \\"\\",\\n      \\"local_modified_at\\": \\"\\",\\n      \\"revision_id\\": \\"\\",\\n      \\"investigation_info\\": {\\n        \\"status\\": 0,\\n        \\"suggestion\\": \\"\\"\\n      },\\n      \\"thumbnail_urls\\": {\\n        \\"key\\": \\"\\"\\n      },\\n      \\"image_media_metadata\\": {\\n        \\"time\\": \\"2006-01-02T15:04:05.000Z07:00\\",\\n        \\"width\\": 1920,\\n        \\"height\\": 1080,\\n        \\"location\\": \\"30.185453,120.218522\\",\\n        \\"country\\": \\"中国\\",\\n        \\"province\\": \\"浙江省\\",\\n        \\"city\\": \\"杭州市\\",\\n        \\"district\\": \\"滨江区\\",\\n        \\"township\\": \\"西兴街道\\",\\n        \\"address_line\\": \\"浙江省杭州市滨江区西兴街道江陵路\\",\\n        \\"image_tags\\": [\\n          {\\n            \\"confidence\\": 0.98,\\n            \\"parent_name\\": \\"运动\\",\\n            \\"name\\": \\"篮球\\",\\n            \\"tag_level\\": 3,\\n            \\"source\\": \\"一起打篮球\\",\\n            \\"centric_score\\": 0.877\\n          }\\n        ],\\n        \\"faces\\": \\"[{\\\\\\"FaceId\\\\\\":\\\\\\"a9a66a86-73dd-4c95-8b79-1d8a49db5226\\\\\\",\\\\\\"GroupId\\\\\\":\\\\\\"Cluster-e3b7fb52-22b3-44f2-9746-8c1804bd6af0\\\\\\",\\\\\\"FaceConfidence\\\\\\":0.999,\\\\\\"Age\\\\\\":13,\\\\\\"AgeConfidence\\\\\\":4,\\\\\\"Gender\\\\\\":\\\\\\"female\\\\\\",\\\\\\"GenderConfidence\\\\\\":1,\\\\\\"Emotion\\\\\\":\\\\\\"none\\\\\\",\\\\\\"EmotionConfidence\\\\\\":0.672,\\\\\\"FaceAttributes\\\\\\":{\\\\\\"Mask\\\\\\":\\\\\\"none\\\\\\",\\\\\\"MaskConfidence\\\\\\":0.894,\\\\\\"Beard\\\\\\":\\\\\\"none\\\\\\",\\\\\\"BeardConfidence\\\\\\":0.997,\\\\\\"Glasses\\\\\\":\\\\\\"none\\\\\\",\\\\\\"GlassesConfidence\\\\\\":0.999,\\\\\\"Mouth\\\\\\":\\\\\\"close\\\\\\",\\\\\\"MouthConfidence\\\\\\":0.937,\\\\\\"Hat\\\\\\":\\\\\\"none\\\\\\",\\\\\\"HatConfidence\\\\\\":0.998,\\\\\\"HeadPose\\\\\\":{\\\\\\"Pitch\\\\\\":10.684,\\\\\\"Roll\\\\\\":-10.707,\\\\\\"Yaw\\\\\\":-20.094},\\\\\\"FaceBoundary\\\\\\":{\\\\\\"Width\\\\\\":457,\\\\\\"Height\\\\\\":687,\\\\\\"Top\\\\\\":1324,\\\\\\"Left\\\\\\":1356}}}]\\",\\n        \\"faces_thumbnail\\": [\\n          {\\n            \\"face_id\\": \\"a9a66a86-73dd-4c95-8b79-1d8a49db5226\\",\\n            \\"face_group_id\\": \\"Cluster-e3b7fb52-22b3-44f2-9746-8c1804bd6af0\\",\\n            \\"face_thumbnail\\": \\"https://pds-domain.region.aliyuncs.com/QieGeH98%2F1001%2F63e5e551ee621482ab934a0687c6cda75fc07864%2F642a8a40c00f1ad379df421694713ee65170f09b?security-token=CAIS%2BgF1q6Ft5B2yfSjIr5bjHPCNnrdR8aSaSW7woVlmVd1Bt5HorDz2IHpPfHdoBe0btvU%2BlWxX6fwZlq5rR4QAXlDfNSyFeX20qFHPWZHInuDox55m4cTXNAr%2BIhr%2F29CoEIedZdjBe%2FCrRknZnytou9XTfimjWFrXWv%2Fgy%2BQQDLItUxK%2FcCBNCfpPOwJms7V6D3bKMuu3OROY6Qi5TmgQ41En1DIlt%2FXuk5DCtkqB12eXkLFF%2B97DRbG%2FdNRpMZtFVNO44fd7bKKp0lQLsUMSqv8q0fEcqGaW4o7CWQJLnzyCMvvJ9OVDFyN0aKEnH7J%2Bq%2FzxhTPrMnpkSlacGoABPMvZ8rSESUEP96Vbf%2Bk0JRg9Qb1MnaIJqWAgo8K6K0UP1CtqL2zrUtugpKKDHOYiKbq2O0S5yLUPVX5vBHqEi%2FFc7i6ZnHCMcXLJs4rKDKwRBEhovUXXlklq2q43OSVtLrXkBy9Xs1ers%2FhJhcxpNA0Vl3EWfJxa2BTylEdnLOQ%3D&x-oss-access-key-id=STS.NUVWJ9shpFfqKHAEY3YRmXTCN&x-oss-expires=1686455451&x-oss-process=image%2Fcrop%2Cx_1128%2Cy_1211%2Cw_914%2Ch_914%2Fformat%2Cjpg&x-oss-signature=jmhOz91Tww1ciMEwadDiioU7d93FDiBNr8s8mHyMqW0%3D&x-oss-signature-version=OSS2\\"\\n          }\\n        ],\\n        \\"exif\\": \\"{\\\\\\"Compression\\\\\\":{\\\\\\"value\\\\\\":\\\\\\"6\\\\\\"},\\\\\\"DateTime\\\\\\":{\\\\\\"value\\\\\\":\\\\\\"2020:08:19 17:11:11\\\\\\"}}\\",\\n        \\"image_quality\\": {\\n          \\"overall_score\\": 0.736\\n        }\\n      },\\n      \\"ex_fields_info\\": {\\n        \\"key\\": \\"\\"\\n      },\\n      \\"content_uri\\": \\"\\",\\n      \\"streams_info\\": {\\n        \\"key\\": {\\n          \\"crc64_hash\\": \\"\\",\\n          \\"size\\": 0,\\n          \\"content_hash\\": \\"\\",\\n          \\"content_hash_name\\": \\"\\",\\n          \\"download_url\\": \\"\\",\\n          \\"url\\": \\"\\",\\n          \\"thumbnail\\": \\"\\"\\n        }\\n      },\\n      \\"user_tags\\": {\\n        \\"key\\": \\"\\"\\n      },\\n      \\"revision_version\\": 0,\\n      \\"video_media_metadata\\": {\\n        \\"time\\": \\"2006-01-02T15:04:05.000Z07:00\\",\\n        \\"width\\": 1920,\\n        \\"height\\": 1080,\\n        \\"location\\": \\"30.185453,120.218522\\",\\n        \\"country\\": \\"中国\\",\\n        \\"province\\": \\"浙江省\\",\\n        \\"city\\": \\"杭州市\\",\\n        \\"district\\": \\"滨江区\\",\\n        \\"township\\": \\"西兴街道\\",\\n        \\"address_line\\": \\"浙江省杭州市滨江区西兴街道江陵路\\",\\n        \\"video_media_video_stream\\": [\\n          {\\n            \\"duration\\": \\"22.88\\",\\n            \\"bitrate\\": \\"108420\\",\\n            \\"code_name\\": \\"h264\\",\\n            \\"frame_count\\": \\"90\\"\\n          }\\n        ],\\n        \\"video_media_audio_stream\\": [\\n          {\\n            \\"duration\\": \\"7704.573000\\",\\n            \\"bit_rate\\": \\"129280\\",\\n            \\"code_name\\": \\"aac\\"\\n          }\\n        ]\\n      },\\n      \\"punish_flag\\": 0,\\n      \\"id_path\\": \\"\\",\\n      \\"name_path\\": \\"\\",\\n      \\"creator_type\\": \\"\\",\\n      \\"creator_id\\": \\"\\",\\n      \\"creator_name\\": \\"\\",\\n      \\"last_modifier_type\\": \\"\\",\\n      \\"last_modifier_id\\": \\"\\",\\n      \\"last_modifier_name\\": \\"\\",\\n      \\"dir_size_info\\": {\\n        \\"dir_count\\": 0,\\n        \\"file_count\\": 0\\n      },\\n      \\"trashed\\": true\\n    }\\n  ],\\n  \\"custom_id\\": \\"\\",\\n  \\"custom_labels\\": {\\n    \\"key\\": \\"\\"\\n  }\\n}","type":"json"}]',
      'title' => '获取故事详情',
      'description' => '**请确保在使用该接口前，已充分了解 PDS 的收费方式和[价格](~~425220~~)**。

使用此功能须开通增值服务图片处理功能。

用户传入指定故事的 id，以获取该故事的详情。',
    ),
    'UpdateStory' => 
    array (
      'summary' => '更新指定故事的信息，包含名称、标签、自定义 id、封面等。',
      'path' => '/v2/image/update_story',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'https',
      ),
      'tags' => 
      array (
        0 => 'api',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
        1 => 
        array (
          'BearerToken' => 
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
        'operationType' => 'update',
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'domain_id',
          'in' => 'host',
          'schema' => 
          array (
            'type' => 'string',
            'required' => true,
          ),
        ),
        1 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '请求体参数',
            'type' => 'object',
            'properties' => 
            array (
              'drive_id' => 
              array (
                'description' => '空间 id',
                'type' => 'string',
                'required' => true,
                'example' => '1',
              ),
              'story_id' => 
              array (
                'description' => '故事 id',
                'type' => 'string',
                'required' => true,
                'example' => '9132e0d8-fe92-4e56-86c3-f5f112308003',
              ),
              'story_name' => 
              array (
                'description' => '故事名称。
长度不超过 1024 字节。',
                'type' => 'string',
                'required' => false,
                'example' => 'name1',
              ),
              'custom_labels' => 
              array (
                'description' => '自定义标签。
标签数不超过 20 个。',
                'type' => 'object',
                'deprecated' => true,
                'required' => false,
                'additionalProperties' => 
                array (
                  'type' => 'string',
                  'example' => 'label_value',
                  'description' => '自定义标签',
                ),
              ),
              'cover' => 
              array (
                'description' => '故事封面',
                'type' => 'object',
                'properties' => 
                array (
                  'file_id' => 
                  array (
                    'description' => '文件 id',
                    'type' => 'string',
                    'required' => false,
                    'example' => '63e5e4340f76cb3ead5f40f68163f0f967c1a7bf',
                  ),
                  'revision_id' => 
                  array (
                    'description' => '版本 id',
                    'type' => 'string',
                    'required' => false,
                    'example' => '642a88dd06e49d9c0a14411ebae606f70edd9a59',
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
            'title' => 'Schema of Response',
            'description' => '返回参数',
            'type' => 'object',
            'properties' => 
            array (
              'drive_id' => 
              array (
                'description' => '空间 id',
                'type' => 'string',
                'example' => '1',
              ),
              'story_id' => 
              array (
                'description' => '故事 id',
                'type' => 'string',
                'example' => '9132e0d8-fe92-4e56-86c3-f5f112308003',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"drive_id\\": \\"1\\",\\n  \\"story_id\\": \\"9132e0d8-fe92-4e56-86c3-f5f112308003\\"\\n}","type":"json"}]',
      'title' => '更新故事',
      'description' => '**请确保在使用该接口前，已充分了解 PDS 的收费方式和[价格](~~425220~~)**。

使用此功能须开通增值服务图片处理功能。',
    ),
    'DeleteStory' => 
    array (
      'summary' => '删除指定故事。',
      'path' => '/v2/image/delete_story',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'https',
      ),
      'tags' => 
      array (
        0 => 'api',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
        1 => 
        array (
          'BearerToken' => 
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
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'domain_id',
          'in' => 'host',
          'schema' => 
          array (
            'type' => 'string',
            'required' => true,
          ),
        ),
        1 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '请求数据',
            'type' => 'object',
            'properties' => 
            array (
              'drive_id' => 
              array (
                'description' => '空间 id',
                'type' => 'string',
                'required' => true,
                'example' => '1',
              ),
              'story_id' => 
              array (
                'description' => '故事 id',
                'type' => 'string',
                'required' => true,
                'example' => '9132e0d8-fe92-4e56-86c3-f5f112308003',
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
            'title' => 'Schema of Response',
            'description' => '返回参数',
            'type' => 'object',
            'properties' => 
            array (
              'drive_id' => 
              array (
                'description' => '空间 id',
                'type' => 'string',
                'example' => '1',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"drive_id\\": \\"1\\"\\n}","type":"json"}]',
      'title' => '删除故事',
      'description' => '**请确保在使用该接口前，已充分了解 PDS 的收费方式和[价格](~~425220~~)**。

使用此功能须开通增值服务图片处理功能。',
    ),
    'AddStoryFiles' => 
    array (
      'summary' => '给指定故事添加文件。',
      'path' => '/v2/image/add_story_files',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'https',
      ),
      'tags' => 
      array (
        0 => 'api',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
        1 => 
        array (
          'BearerToken' => 
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
        'operationType' => 'update',
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'domain_id',
          'in' => 'host',
          'schema' => 
          array (
            'type' => 'string',
            'required' => true,
          ),
        ),
        1 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '请求体参数',
            'type' => 'object',
            'properties' => 
            array (
              'drive_id' => 
              array (
                'description' => '空间 id',
                'type' => 'string',
                'required' => true,
                'example' => '1',
              ),
              'story_id' => 
              array (
                'description' => '故事 id',
                'type' => 'string',
                'required' => true,
                'example' => '9132e0d8-fe92-4e56-86c3-f5f112308003',
              ),
              'files' => 
              array (
                'description' => '文件列表',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '文件信息',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'file_id' => 
                    array (
                      'description' => '文件 id',
                      'type' => 'string',
                      'required' => true,
                      'example' => '63e5e4340f76cb3ead5f40f68163f0f967c1a7bf',
                    ),
                    'revision_id' => 
                    array (
                      'description' => '版本 id',
                      'type' => 'string',
                      'required' => false,
                      'example' => '642a88dd06e49d9c0a14411ebae606f70edd9a59',
                    ),
                  ),
                  'required' => false,
                ),
                'required' => false,
                'maxItems' => 100,
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
            'title' => 'Schema of Response',
            'description' => '返回参数',
            'type' => 'object',
            'properties' => 
            array (
              'drive_id' => 
              array (
                'description' => '空间 id',
                'type' => 'string',
                'example' => '1',
              ),
              'story_id' => 
              array (
                'description' => '故事 id',
                'type' => 'string',
                'example' => '9132e0d8-fe92-4e56-86c3-f5f112308003',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"drive_id\\": \\"1\\",\\n  \\"story_id\\": \\"9132e0d8-fe92-4e56-86c3-f5f112308003\\"\\n}","type":"json"}]',
      'title' => '故事中添加文件',
      'description' => '**请确保在使用该接口前，已充分了解 PDS 的收费方式和[价格](~~425220~~)**。

使用此功能须开通增值服务图片处理功能。

用户在创建故事后，可以手动给指定故事添加想要的文件。',
    ),
    'RemoveStoryFiles' => 
    array (
      'summary' => '移除指定故事中的文件。',
      'path' => '/v2/image/remove_story_files',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'https',
      ),
      'tags' => 
      array (
        0 => 'api',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
        1 => 
        array (
          'BearerToken' => 
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
        'operationType' => 'update',
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'domain_id',
          'in' => 'host',
          'schema' => 
          array (
            'type' => 'string',
            'required' => true,
          ),
        ),
        1 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '请求体参数',
            'type' => 'object',
            'properties' => 
            array (
              'drive_id' => 
              array (
                'description' => '空间 id',
                'type' => 'string',
                'required' => true,
                'example' => '1',
              ),
              'story_id' => 
              array (
                'description' => '故事 id',
                'type' => 'string',
                'required' => true,
                'example' => '9132e0d8-fe92-4e56-86c3-f5f112308003',
              ),
              'files' => 
              array (
                'description' => '文件列表',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '文件信息',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'file_id' => 
                    array (
                      'description' => '文件 id',
                      'type' => 'string',
                      'required' => true,
                      'example' => '63e5e4340f76cb3ead5f40f68163f0f967c1a7bf',
                    ),
                    'revision_id' => 
                    array (
                      'description' => '版本 id',
                      'type' => 'string',
                      'required' => false,
                      'example' => '642a88dd06e49d9c0a14411ebae606f70edd9a59',
                    ),
                  ),
                  'required' => false,
                ),
                'required' => false,
                'maxItems' => 100,
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
            'title' => 'Schema of Response',
            'description' => '返回参数',
            'type' => 'object',
            'properties' => 
            array (
              'drive_id' => 
              array (
                'description' => '空间 id',
                'type' => 'string',
                'example' => '1',
              ),
              'story_id' => 
              array (
                'description' => '故事 id',
                'type' => 'string',
                'example' => '9132e0d8-fe92-4e56-86c3-f5f112308003',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"drive_id\\": \\"1\\",\\n  \\"story_id\\": \\"9132e0d8-fe92-4e56-86c3-f5f112308003\\"\\n}","type":"json"}]',
      'title' => '故事中移除文件',
      'description' => '**请确保在使用该接口前，已充分了解 PDS 的收费方式和[价格](~~425220~~)**。

使用此功能须开通增值服务图片处理功能。

用户在创建故事后，可以根据需求移除故事中不需要的文件。',
    ),
    'CreateSimilarImageClusterTask' => 
    array (
      'summary' => '用户可以发起创建相似图片聚类任务，该任务会将指定 drive 空间下相似的图片聚类在一起。',
      'path' => '/v2/image/create_similar_image_cluster_task',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'https',
      ),
      'tags' => 
      array (
        0 => 'api',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
        1 => 
        array (
          'BearerToken' => 
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
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'domain_id',
          'in' => 'host',
          'schema' => 
          array (
            'type' => 'string',
            'required' => true,
          ),
        ),
        1 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '请求体',
            'type' => 'object',
            'properties' => 
            array (
              'drive_id' => 
              array (
                'description' => '空间 id',
                'type' => 'string',
                'required' => true,
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
            'description' => '返回参数',
            'type' => 'object',
            'properties' => 
            array (
              'task_id' => 
              array (
                'description' => '任务 id',
                'type' => 'string',
                'example' => 'i:SimilarImageClustering-b67d53e7-2fe8-460f-9b95-1e93636923eb',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"task_id\\": \\"i:SimilarImageClustering-b67d53e7-2fe8-460f-9b95-1e93636923eb\\"\\n}","type":"json"}]',
      'title' => '创建相似图片聚类任务',
      'description' => '**请确保在使用该接口前，已充分了解 PDS 的收费方式和[价格](~~425220~~)**。

使用此功能须开通增值服务图片处理功能，此功能目前限时免费。

使用步骤：

- 创建相似图片聚类任务
- 通过 GetTaskStatus 接口查询相似图片聚类任务是否执行完成
- 通过 SearchSimilarImageClusters 接口获取相似图片聚类结果

同一 drive 同一时刻只能有一个相似图片聚类任务运行，若上一任务未结束，再次调用相似图片聚类任务会返回失败。',
    ),
    'GetTaskStatus' => 
    array (
      'summary' => '查询增值服务异步任务执行状态。
目前支持的接口有：CreateSimilarImageClusterTask。',
      'path' => '/v2/image/get_task_status',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'https',
      ),
      'tags' => 
      array (
        0 => 'api',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
        1 => 
        array (
          'BearerToken' => 
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
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'domain_id',
          'in' => 'host',
          'schema' => 
          array (
            'type' => 'string',
            'required' => true,
          ),
        ),
        1 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '请求体参数',
            'type' => 'object',
            'properties' => 
            array (
              'drive_id' => 
              array (
                'description' => '空间 id',
                'type' => 'string',
                'required' => true,
                'example' => '1',
              ),
              'task_id' => 
              array (
                'description' => '任务 id',
                'type' => 'string',
                'required' => true,
                'example' => 'i:SimilarImageClustering-b67d53e7-2fe8-460f-9b95-1e93636923eb',
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
            'title' => 'Schema of Response',
            'description' => '返回参数',
            'type' => 'object',
            'properties' => 
            array (
              'status' => 
              array (
                'description' => '任务状态',
                'type' => 'string',
                'required' => false,
                'enumValueTitles' => 
                array (
                  'running' => '运行中',
                  'failed' => '失败',
                  'succeeded' => '成功',
                ),
                'example' => 'running',
                'enum' => 
                array (
                  0 => 'running',
                  1 => 'succeeded',
                  2 => 'failed',
                ),
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"status\\": \\"running\\"\\n}","type":"json"}]',
      'title' => '查询任务状态',
      'description' => '**请确保在使用该接口前，已充分了解 PDS 的收费方式和[价格](~~425220~~)**。

使用此功能须开通增值服务图片处理功能。

该接口旨在查询增值服务异步任务状态，调用该接口前需先创建增值服务异步任务，如 CreateSimilarImageClusterTask，拿到 task id，再查询任务运行状态，判断该任务是否运行成功。',
    ),
    'SearchSimilarImageClusters' => 
    array (
      'summary' => '获取指定 drive 空间下的相似图片。',
      'path' => '/v2/image/query_similar_image_clusters',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'https',
      ),
      'tags' => 
      array (
        0 => 'api',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
        1 => 
        array (
          'BearerToken' => 
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
          'name' => 'domain_id',
          'in' => 'host',
          'schema' => 
          array (
            'type' => 'string',
            'required' => true,
          ),
        ),
        1 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '请求参数',
            'type' => 'object',
            'properties' => 
            array (
              'drive_id' => 
              array (
                'description' => '空间 id',
                'type' => 'string',
                'required' => true,
                'example' => '1',
              ),
              'marker' => 
              array (
                'description' => '分页标记，从指定位置查询结果。若为空则表示从头开始查询。',
                'type' => 'string',
                'required' => false,
                'example' => 'YWRzX3VzZXJfcHJvZmlsZV9je1bnQh***',
              ),
              'limit' => 
              array (
                'description' => '限定此次返回结果的数量，取值范围\\[1,100\\]，默认50。
返回结果可以小于指定的数量，但不能多于指定的数量。',
                'type' => 'integer',
                'format' => 'int64',
                'required' => false,
                'maximum' => '100',
                'minimum' => '0',
                'example' => '50',
                'default' => '50',
              ),
              'order' => 
              array (
                'description' => '排序顺序',
                'type' => 'string',
                'required' => false,
                'enumValueTitles' => 
                array (
                  'asc' => '升序',
                  'desc' => '降序',
                ),
                'example' => 'desc',
                'default' => 'desc',
                'enum' => 
                array (
                  0 => 'desc',
                  1 => 'asc',
                ),
              ),
              'image_thumbnail_process' => 
              array (
                'description' => '图片缩略图处理样式',
                'type' => 'string',
                'deprecated' => true,
                'required' => false,
                'example' => 'image/resize,m_fill,h_128,w_128,limit_0/format,jpg',
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
            'title' => 'Schema of Response',
            'description' => '返回参数',
            'type' => 'object',
            'properties' => 
            array (
              'similar_image_clusters' => 
              array (
                'description' => '相似图片聚类列表',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '相似图片聚类详情',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'files' => 
                    array (
                      'description' => '相似图片列表',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '文件详情',
                        '$ref' => '#/components/schemas/File',
                      ),
                    ),
                  ),
                ),
              ),
              'next_marker' => 
              array (
                'description' => '用作下次遍历的 marker',
                'type' => 'string',
                'example' => 'NWQ1Yjk4YmI1ZDRlYmU1Y2E0YWE0***',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"similar_image_clusters\\": [\\n    {\\n      \\"files\\": [\\n        {\\n          \\"domain_id\\": \\"\\",\\n          \\"drive_id\\": \\"\\",\\n          \\"file_id\\": \\"\\",\\n          \\"name\\": \\"\\",\\n          \\"type\\": \\"\\",\\n          \\"content_type\\": \\"\\",\\n          \\"created_at\\": \\"\\",\\n          \\"updated_at\\": \\"\\",\\n          \\"description\\": \\"\\",\\n          \\"trashed_at\\": \\"\\",\\n          \\"file_extension\\": \\"\\",\\n          \\"mime_type\\": \\"\\",\\n          \\"mime_extension\\": \\"\\",\\n          \\"hidden\\": true,\\n          \\"size\\": 0,\\n          \\"starred\\": true,\\n          \\"status\\": \\"\\",\\n          \\"user_meta\\": \\"\\",\\n          \\"labels\\": [\\n            \\"\\"\\n          ],\\n          \\"upload_id\\": \\"\\",\\n          \\"parent_file_id\\": \\"\\",\\n          \\"crc64_hash\\": \\"\\",\\n          \\"content_hash\\": \\"\\",\\n          \\"content_hash_name\\": \\"\\",\\n          \\"download_url\\": \\"\\",\\n          \\"thumbnail\\": \\"\\",\\n          \\"category\\": \\"\\",\\n          \\"local_created_at\\": \\"\\",\\n          \\"local_modified_at\\": \\"\\",\\n          \\"revision_id\\": \\"\\",\\n          \\"investigation_info\\": {\\n            \\"status\\": 0,\\n            \\"suggestion\\": \\"\\"\\n          },\\n          \\"thumbnail_urls\\": {\\n            \\"key\\": \\"\\"\\n          },\\n          \\"image_media_metadata\\": {\\n            \\"time\\": \\"2006-01-02T15:04:05.000Z07:00\\",\\n            \\"width\\": 1920,\\n            \\"height\\": 1080,\\n            \\"location\\": \\"30.185453,120.218522\\",\\n            \\"country\\": \\"中国\\",\\n            \\"province\\": \\"浙江省\\",\\n            \\"city\\": \\"杭州市\\",\\n            \\"district\\": \\"滨江区\\",\\n            \\"township\\": \\"西兴街道\\",\\n            \\"address_line\\": \\"浙江省杭州市滨江区西兴街道江陵路\\",\\n            \\"image_tags\\": [\\n              {\\n                \\"confidence\\": 0.98,\\n                \\"parent_name\\": \\"运动\\",\\n                \\"name\\": \\"篮球\\",\\n                \\"tag_level\\": 3,\\n                \\"source\\": \\"一起打篮球\\",\\n                \\"centric_score\\": 0.877\\n              }\\n            ],\\n            \\"faces\\": \\"[{\\\\\\"FaceId\\\\\\":\\\\\\"a9a66a86-73dd-4c95-8b79-1d8a49db5226\\\\\\",\\\\\\"GroupId\\\\\\":\\\\\\"Cluster-e3b7fb52-22b3-44f2-9746-8c1804bd6af0\\\\\\",\\\\\\"FaceConfidence\\\\\\":0.999,\\\\\\"Age\\\\\\":13,\\\\\\"AgeConfidence\\\\\\":4,\\\\\\"Gender\\\\\\":\\\\\\"female\\\\\\",\\\\\\"GenderConfidence\\\\\\":1,\\\\\\"Emotion\\\\\\":\\\\\\"none\\\\\\",\\\\\\"EmotionConfidence\\\\\\":0.672,\\\\\\"FaceAttributes\\\\\\":{\\\\\\"Mask\\\\\\":\\\\\\"none\\\\\\",\\\\\\"MaskConfidence\\\\\\":0.894,\\\\\\"Beard\\\\\\":\\\\\\"none\\\\\\",\\\\\\"BeardConfidence\\\\\\":0.997,\\\\\\"Glasses\\\\\\":\\\\\\"none\\\\\\",\\\\\\"GlassesConfidence\\\\\\":0.999,\\\\\\"Mouth\\\\\\":\\\\\\"close\\\\\\",\\\\\\"MouthConfidence\\\\\\":0.937,\\\\\\"Hat\\\\\\":\\\\\\"none\\\\\\",\\\\\\"HatConfidence\\\\\\":0.998,\\\\\\"HeadPose\\\\\\":{\\\\\\"Pitch\\\\\\":10.684,\\\\\\"Roll\\\\\\":-10.707,\\\\\\"Yaw\\\\\\":-20.094},\\\\\\"FaceBoundary\\\\\\":{\\\\\\"Width\\\\\\":457,\\\\\\"Height\\\\\\":687,\\\\\\"Top\\\\\\":1324,\\\\\\"Left\\\\\\":1356}}}]\\",\\n            \\"faces_thumbnail\\": [\\n              {\\n                \\"face_id\\": \\"a9a66a86-73dd-4c95-8b79-1d8a49db5226\\",\\n                \\"face_group_id\\": \\"Cluster-e3b7fb52-22b3-44f2-9746-8c1804bd6af0\\",\\n                \\"face_thumbnail\\": \\"https://pds-domain.region.aliyuncs.com/QieGeH98%2F1001%2F63e5e551ee621482ab934a0687c6cda75fc07864%2F642a8a40c00f1ad379df421694713ee65170f09b?security-token=CAIS%2BgF1q6Ft5B2yfSjIr5bjHPCNnrdR8aSaSW7woVlmVd1Bt5HorDz2IHpPfHdoBe0btvU%2BlWxX6fwZlq5rR4QAXlDfNSyFeX20qFHPWZHInuDox55m4cTXNAr%2BIhr%2F29CoEIedZdjBe%2FCrRknZnytou9XTfimjWFrXWv%2Fgy%2BQQDLItUxK%2FcCBNCfpPOwJms7V6D3bKMuu3OROY6Qi5TmgQ41En1DIlt%2FXuk5DCtkqB12eXkLFF%2B97DRbG%2FdNRpMZtFVNO44fd7bKKp0lQLsUMSqv8q0fEcqGaW4o7CWQJLnzyCMvvJ9OVDFyN0aKEnH7J%2Bq%2FzxhTPrMnpkSlacGoABPMvZ8rSESUEP96Vbf%2Bk0JRg9Qb1MnaIJqWAgo8K6K0UP1CtqL2zrUtugpKKDHOYiKbq2O0S5yLUPVX5vBHqEi%2FFc7i6ZnHCMcXLJs4rKDKwRBEhovUXXlklq2q43OSVtLrXkBy9Xs1ers%2FhJhcxpNA0Vl3EWfJxa2BTylEdnLOQ%3D&x-oss-access-key-id=STS.NUVWJ9shpFfqKHAEY3YRmXTCN&x-oss-expires=1686455451&x-oss-process=image%2Fcrop%2Cx_1128%2Cy_1211%2Cw_914%2Ch_914%2Fformat%2Cjpg&x-oss-signature=jmhOz91Tww1ciMEwadDiioU7d93FDiBNr8s8mHyMqW0%3D&x-oss-signature-version=OSS2\\"\\n              }\\n            ],\\n            \\"exif\\": \\"{\\\\\\"Compression\\\\\\":{\\\\\\"value\\\\\\":\\\\\\"6\\\\\\"},\\\\\\"DateTime\\\\\\":{\\\\\\"value\\\\\\":\\\\\\"2020:08:19 17:11:11\\\\\\"}}\\",\\n            \\"image_quality\\": {\\n              \\"overall_score\\": 0.736\\n            }\\n          },\\n          \\"ex_fields_info\\": {\\n            \\"key\\": \\"\\"\\n          },\\n          \\"content_uri\\": \\"\\",\\n          \\"streams_info\\": {\\n            \\"key\\": {\\n              \\"crc64_hash\\": \\"\\",\\n              \\"size\\": 0,\\n              \\"content_hash\\": \\"\\",\\n              \\"content_hash_name\\": \\"\\",\\n              \\"download_url\\": \\"\\",\\n              \\"url\\": \\"\\",\\n              \\"thumbnail\\": \\"\\"\\n            }\\n          },\\n          \\"user_tags\\": {\\n            \\"key\\": \\"\\"\\n          },\\n          \\"revision_version\\": 0,\\n          \\"video_media_metadata\\": {\\n            \\"time\\": \\"2006-01-02T15:04:05.000Z07:00\\",\\n            \\"width\\": 1920,\\n            \\"height\\": 1080,\\n            \\"location\\": \\"30.185453,120.218522\\",\\n            \\"country\\": \\"中国\\",\\n            \\"province\\": \\"浙江省\\",\\n            \\"city\\": \\"杭州市\\",\\n            \\"district\\": \\"滨江区\\",\\n            \\"township\\": \\"西兴街道\\",\\n            \\"address_line\\": \\"浙江省杭州市滨江区西兴街道江陵路\\",\\n            \\"video_media_video_stream\\": [\\n              {\\n                \\"duration\\": \\"22.88\\",\\n                \\"bitrate\\": \\"108420\\",\\n                \\"code_name\\": \\"h264\\",\\n                \\"frame_count\\": \\"90\\"\\n              }\\n            ],\\n            \\"video_media_audio_stream\\": [\\n              {\\n                \\"duration\\": \\"7704.573000\\",\\n                \\"bit_rate\\": \\"129280\\",\\n                \\"code_name\\": \\"aac\\"\\n              }\\n            ]\\n          },\\n          \\"punish_flag\\": 0,\\n          \\"id_path\\": \\"\\",\\n          \\"name_path\\": \\"\\",\\n          \\"creator_type\\": \\"\\",\\n          \\"creator_id\\": \\"\\",\\n          \\"creator_name\\": \\"\\",\\n          \\"last_modifier_type\\": \\"\\",\\n          \\"last_modifier_id\\": \\"\\",\\n          \\"last_modifier_name\\": \\"\\",\\n          \\"dir_size_info\\": {\\n            \\"dir_count\\": 0,\\n            \\"file_count\\": 0\\n          },\\n          \\"trashed\\": true\\n        }\\n      ]\\n    }\\n  ],\\n  \\"next_marker\\": \\"NWQ1Yjk4YmI1ZDRlYmU1Y2E0YWE0***\\"\\n}","type":"json"}]',
      'title' => '查询相似图片聚类结果',
      'description' => '**请确保在使用该接口前，已充分了解 PDS 的收费方式和[价格](~~425220~~)**。

使用此功能须开通增值服务图片处理功能。

查询相似图片聚类结果前，需调用 CreateSimilarImageClusterTask 接口创建相似图片聚类任务，拿到 task_id，通过 GetTaskStatus 接口查询该聚类任务是否成功。待聚类任务成功后，再通过 SearchSimilarImageClusters 接口获取相似图片结果。

><notice>
- 未执行聚类任务调用该接口返回空列表。
- 相似图片聚类任务是增量更新聚类结果。若本次聚类任务未完成，则返回上一次聚类结果。
></notice>',
    ),
    'GetAsyncTask' => 
    array (
      'summary' => '获取异步任务信息。',
      'path' => '/v2/async_task/get',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'https',
      ),
      'tags' => 
      array (
        0 => 'api',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
        1 => 
        array (
          'BearerToken' => 
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
          'name' => 'domain_id',
          'in' => 'host',
          'schema' => 
          array (
            'type' => 'string',
            'required' => true,
          ),
        ),
        1 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '请求体。',
            'type' => 'object',
            'properties' => 
            array (
              'async_task_id' => 
              array (
                'description' => '异步任务id',
                'type' => 'string',
                'required' => true,
                'example' => '000e89fb-cf8f-11e9-8ab4-b6e980803a3b',
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
            'title' => 'Schema of Response',
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'async_task_id' => 
              array (
                'title' => 'Id of the request',
                'description' => '异步任务id',
                'type' => 'string',
                'example' => '000e89fb-cf8f-11e9-8ab4-b6e980803a3b',
              ),
              'status' => 
              array (
                'description' => '<warning>已废弃（推荐使用state字段替代）</warning>

任务状态

- Failed（失败）

- Running（运行中）

- PartialSucceed（部分成功）

- Succeed（成功）',
                'type' => 'string',
                'enumValueTitles' => 
                array (
                  'Failed' => '失败',
                  'Running' => '运行中',
                  'PartialSucceed' => '部分成功',
                  'Succeed' => '成功',
                ),
                'example' => 'Succeed',
              ),
              'state' => 
              array (
                'description' => '任务状态

- Failed（失败）

- Running（运行中）

- PartialSucceed（部分成功）

- Succeed（成功）',
                'type' => 'string',
                'example' => 'Succeed',
              ),
              'message' => 
              array (
                'description' => '<warning>已废弃（推荐使用error_message字段替代）</warning>
异步任务错误信息',
                'type' => 'string',
                'example' => 'The request has been failed due to some unknown error. Please try again later.',
              ),
              'err_code' => 
              array (
                'description' => '<warning>已废弃（推荐使用error_code字段替代）</warning>
异步任务错误码',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '404',
              ),
              'total_process' => 
              array (
                'description' => '异步任务需处理总量，如服务端打包下载需打包的文件量',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '1000',
              ),
              'consumed_process' => 
              array (
                'description' => '异步任务已处理总量，如服务端打包下载已打包的文件量',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '100',
              ),
              'url' => 
              array (
                'description' => '异步任务生成数据的下载地址，如服务端打包下载任务生成下载地址',
                'type' => 'string',
                'example' => 'https://data.aliyunpds.com/hz22%2F5d5b986facbec311ef844c25954f96821497b383%2F5d5b986f955410dd991646bb87c6b4e899eff525?Expires=xxx&OSSAccessKeyId=xxx&Signature=xxx',
              ),
              'error_code' => 
              array (
                'description' => '任务错误码',
                'type' => 'string',
                'example' => 'InternalError',
              ),
              'error_message' => 
              array (
                'description' => '任务错误信息',
                'type' => 'string',
                'example' => 'The request has been failed due to some unknown error. Please try again later.',
              ),
              'uncompress_file_list' => 
              array (
                'description' => '解压文件信息列表',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '解压文件信息',
                  '$ref' => '#/components/schemas/UncompressedFileInfo',
                ),
              ),
              'category' => 
              array (
                'description' => '任务自定义类别',
                'type' => 'string',
                'example' => 'album',
              ),
              'created_at' => 
              array (
                'description' => '任务创建时间，ISO格式， 如：2019-03-28T13:03:29.298Z',
                'type' => 'string',
                'example' => '2019-08-20T06:51:27.292Z',
              ),
              'started_at' => 
              array (
                'description' => '任务开始时间，ISO格式， 如：2019-03-28T13:03:29.298Z',
                'type' => 'string',
                'example' => '2019-08-20T06:51:27.292Z',
              ),
              'finished_at' => 
              array (
                'description' => '任务完成时间，ISO格式， 如：2019-03-28T13:03:29.298Z',
                'type' => 'string',
                'example' => '2019-08-20T06:51:27.292Z',
              ),
              'skipped_process' => 
              array (
                'type' => 'integer',
                'format' => 'int64',
              ),
              'failed_process' => 
              array (
                'type' => 'integer',
                'format' => 'int64',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"async_task_id\\": \\"000e89fb-cf8f-11e9-8ab4-b6e980803a3b\\",\\n  \\"status\\": \\"Succeed\\",\\n  \\"state\\": \\"Succeed\\",\\n  \\"message\\": \\"The request has been failed due to some unknown error. Please try again later.\\",\\n  \\"err_code\\": 404,\\n  \\"total_process\\": 1000,\\n  \\"consumed_process\\": 100,\\n  \\"url\\": \\"https://data.aliyunpds.com/hz22%2F5d5b986facbec311ef844c25954f96821497b383%2F5d5b986f955410dd991646bb87c6b4e899eff525?Expires=xxx&OSSAccessKeyId=xxx&Signature=xxx\\",\\n  \\"error_code\\": \\"InternalError\\",\\n  \\"error_message\\": \\"The request has been failed due to some unknown error. Please try again later.\\",\\n  \\"uncompress_file_list\\": [\\n    {\\n      \\"drive_id\\": \\"\\",\\n      \\"file_id\\": \\"\\",\\n      \\"is_folder\\": true,\\n      \\"name\\": \\"\\",\\n      \\"size\\": 0,\\n      \\"updated_at\\": 0,\\n      \\"items\\": [\\n        {\\n          \\"drive_id\\": \\"\\",\\n          \\"file_id\\": \\"\\",\\n          \\"is_folder\\": true,\\n          \\"name\\": \\"\\",\\n          \\"size\\": 0,\\n          \\"updated_at\\": 0,\\n          \\"items\\": [\\n            {\\n              \\"drive_id\\": \\"\\",\\n              \\"file_id\\": \\"\\",\\n              \\"is_folder\\": true,\\n              \\"name\\": \\"\\",\\n              \\"size\\": 0,\\n              \\"updated_at\\": 0,\\n              \\"items\\": []\\n            }\\n          ]\\n        }\\n      ]\\n    }\\n  ],\\n  \\"category\\": \\"album\\",\\n  \\"created_at\\": \\"2019-08-20T06:51:27.292Z\\",\\n  \\"started_at\\": \\"2019-08-20T06:51:27.292Z\\",\\n  \\"finished_at\\": \\"2019-08-20T06:51:27.292Z\\",\\n  \\"skipped_process\\": 0,\\n  \\"failed_process\\": 0\\n}","type":"json"}]',
      'title' => '获取异步任务信息',
    ),
    'GetVideoPreviewPlayMeta' => 
    array (
      'summary' => '获取视频播放元信息。',
      'path' => '/v2/file/get_video_preview_play_meta',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'https',
      ),
      'tags' => 
      array (
        0 => 'api',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
        1 => 
        array (
          'BearerToken' => 
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
          'name' => 'domain_id',
          'in' => 'host',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
          ),
        ),
        1 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '请求体参数。',
            'type' => 'object',
            'properties' => 
            array (
              'share_id' => 
              array (
                'description' => '分享id。
如果通过分享操作文件，请携带`x-share-token` header鉴权并传递此字段，此时`drive_id`无效。否则请使用`aksk`或者`access_token`方式鉴权，并传递`drive_id`字段。
`share_id`和`drive_id`两者必须有一个字段赋值。',
                'type' => 'string',
                'required' => false,
                'example' => '7JQX1FswpQ8',
              ),
              'drive_id' => 
              array (
                'description' => '空间id',
                'type' => 'string',
                'required' => false,
                'example' => '1',
              ),
              'file_id' => 
              array (
                'description' => '文件id',
                'type' => 'string',
                'required' => true,
                'example' => '9520943DC264',
              ),
              'category' => 
              array (
                'description' => '所属分类。
需要开通对应的转码功能，枚举如下：
- live_transcoding（live边转边播）
- quick_video（quick边转边播）
- offline_audio（离线音频转码）
- offline_video（离线视频转码）',
                'type' => 'string',
                'required' => true,
                'example' => 'live_transcoding',
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
            'title' => 'Schema of Response',
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'domain_id' => 
              array (
                'title' => 'Id of the request',
                'description' => '域id',
                'type' => 'string',
                'example' => 'bj1',
              ),
              'share_id' => 
              array (
                'description' => '分享id',
                'type' => 'string',
                'example' => '7JQX1FswpQ8',
              ),
              'drive_id' => 
              array (
                'description' => '空间id',
                'type' => 'string',
                'example' => '1',
              ),
              'file_id' => 
              array (
                'description' => '文件id',
                'type' => 'string',
                'example' => 'fileid1',
              ),
              'video_preview_play_meta' => 
              array (
                'description' => '播放元信息',
                '$ref' => '#/components/schemas/VideoPreviewPlayMeta',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"domain_id\\": \\"bj1\\",\\n  \\"share_id\\": \\"7JQX1FswpQ8\\",\\n  \\"drive_id\\": \\"1\\",\\n  \\"file_id\\": \\"fileid1\\",\\n  \\"video_preview_play_meta\\": {\\n    \\"meta\\": {\\n      \\"duration\\": 10,\\n      \\"width\\": 1280,\\n      \\"height\\": 720\\n    },\\n    \\"live_transcoding_task_list\\": [\\n      {\\n        \\"template_id\\": \\"264_720p\\",\\n        \\"status\\": \\"\\",\\n        \\"keep_original_resolution\\": true\\n      }\\n    ],\\n    \\"category\\": \\"live_transcoding\\"\\n  }\\n}","type":"json"}]',
      'title' => '获取视频播放元信息',
      'description' => '<props="china">详细请参考最佳实践文档: [在线预览视频](~~427477~~)。</props>',
    ),
    'GetVideoPreviewPlayInfo' => 
    array (
      'summary' => '获取视频播放信息。',
      'path' => '/v2/file/get_video_preview_play_info',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'https',
      ),
      'tags' => 
      array (
        0 => 'api',
      ),
      'security' => 
      array (
        0 => 
        array (
          'BearerToken' => 
          array (
          ),
        ),
        1 => 
        array (
          'AK' => 
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
          'name' => 'domain_id',
          'in' => 'host',
          'schema' => 
          array (
            'type' => 'string',
            'required' => true,
          ),
        ),
        1 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '请求体参数。',
            'type' => 'object',
            'properties' => 
            array (
              'share_id' => 
              array (
                'description' => '分享id。
如果通过分享操作文件，请携带`x-share-token` header鉴权并传递此字段，此时`drive_id`无效。否则请使用`aksk`或者`access_token`方式鉴权，并传递`drive_id`字段。
`share_id`和`drive_id`两者必须有一个字段赋值。',
                'type' => 'string',
                'required' => false,
                'example' => '7JQX1FswpQ8',
              ),
              'drive_id' => 
              array (
                'description' => '空间id',
                'type' => 'string',
                'required' => false,
                'example' => '1',
              ),
              'file_id' => 
              array (
                'description' => '文件id',
                'type' => 'string',
                'required' => true,
                'example' => '9520943DC264',
              ),
              'category' => 
              array (
                'description' => '所属分类。
需要开通对应的转码功能，枚举如下：
- live_transcoding（live边转边播）
- quick_video（quick边转边播）
- offline_audio（离线音频转码）
- offline_video（离线视频转码）',
                'type' => 'string',
                'required' => true,
                'enumValueTitles' => 
                array (
                  'live_transcoding' => '在线视频边转边播',
                ),
                'example' => 'live_transcoding',
              ),
              'template_id' => 
              array (
                'description' => '清晰度模板id。
填空表示取所有可用清晰度模板',
                'type' => 'string',
                'required' => false,
                'example' => '264_480p',
              ),
              'get_without_url' => 
              array (
                'description' => '是否不获取播放url。
如果填true，只会获取转码元信息，并不会触发ts转码，返回的信息中没有播放url。否则会返回播放url，如果此template_id的视频还未转码，后台将触发器转码。
转码会产生对应的增值服务费用',
                'type' => 'boolean',
                'required' => false,
                'example' => 'true',
              ),
              'url_expire_sec' => 
              array (
                'description' => 'url超时时间，单位：秒。
默认15分钟，最大4小时。',
                'type' => 'integer',
                'format' => 'int64',
                'required' => false,
                'example' => '3600',
              ),
              'get_master_url' => 
              array (
                'description' => '是否获取 master m3u8 的 url，仅在 category = quick_video 时有效',
                'type' => 'boolean',
                'required' => false,
                'example' => 'false',
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
            'title' => 'Schema of Response',
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'domain_id' => 
              array (
                'description' => '域id',
                'type' => 'string',
                'example' => 'bj1',
              ),
              'share_id' => 
              array (
                'title' => 'Id of the request',
                'description' => '分享id',
                'type' => 'string',
                'example' => '7JQX1FswpQ8',
              ),
              'drive_id' => 
              array (
                'description' => '空间id',
                'type' => 'string',
                'example' => '1',
              ),
              'file_id' => 
              array (
                'description' => '文件id',
                'type' => 'string',
                'example' => 'fileid1',
              ),
              'video_preview_play_info' => 
              array (
                'description' => '播放信息',
                '$ref' => '#/components/schemas/VideoPreviewPlayInfo',
              ),
              'code' => 
              array (
                'description' => '错误码',
                'type' => 'string',
                'example' => 'VideoPreviewWaitAndRetry',
              ),
              'message' => 
              array (
                'description' => '错误信息',
                'type' => 'string',
                'example' => 'media is transcoding, please wait and retry.',
              ),
              'master_url' => 
              array (
                'description' => 'master m3u8 的 url',
                'type' => 'string',
                'example' => 'https://pds-xxx-valueadd.oss-xxx.aliyuncs.com/qv/xxx/master.m3u8',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"domain_id\\": \\"bj1\\",\\n  \\"share_id\\": \\"7JQX1FswpQ8\\",\\n  \\"drive_id\\": \\"1\\",\\n  \\"file_id\\": \\"fileid1\\",\\n  \\"video_preview_play_info\\": {\\n    \\"category\\": \\"live_transcoding\\",\\n    \\"meta\\": {\\n      \\"duration\\": 0,\\n      \\"width\\": 0,\\n      \\"height\\": 0\\n    },\\n    \\"live_transcoding_task_list\\": [\\n      {\\n        \\"template_id\\": \\"\\",\\n        \\"status\\": \\"\\",\\n        \\"url\\": \\"\\",\\n        \\"keep_original_resolution\\": true\\n      }\\n    ],\\n    \\"quick_video_list\\": [\\n      {\\n        \\"template_id\\": \\"\\",\\n        \\"status\\": \\"\\",\\n        \\"url\\": \\"\\"\\n      }\\n    ],\\n    \\"offline_video_transcoding_list\\": [\\n      {\\n        \\"template_id\\": \\"\\",\\n        \\"status\\": \\"\\",\\n        \\"keep_original_resolution\\": true,\\n        \\"url\\": \\"\\"\\n      }\\n    ]\\n  },\\n  \\"code\\": \\"VideoPreviewWaitAndRetry\\",\\n  \\"message\\": \\"media is transcoding, please wait and retry.\\",\\n  \\"master_url\\": \\"https://pds-xxx-valueadd.oss-xxx.aliyuncs.com/qv/xxx/master.m3u8\\"\\n}","type":"json"}]',
      'title' => '获取视频播放信息',
      'description' => '<props="china">详细请参考最佳实践文档：[在线预览视频](~~427477~~)。</props>',
    ),
    'CreateIdentityToBenefitPkgMapping' => 
    array (
      'summary' => '创建实体和权益包关联，可用于给用户绑定权益包。',
      'path' => '/v2/benefit/identity_to_benefit_pkg_mapping/create',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'https',
        1 => 'http',
      ),
      'tags' => 
      array (
        0 => 'api',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
        1 => 
        array (
          'BearerToken' => 
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
          'name' => 'domain_id',
          'in' => 'host',
          'schema' => 
          array (
            'type' => 'string',
            'required' => true,
          ),
        ),
        1 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '请求体参数',
            'type' => 'object',
            'properties' => 
            array (
              'identity_type' => 
              array (
                'description' => '实体的类型

管理用户权益时，传user',
                'type' => 'string',
                'required' => true,
                'example' => 'user',
                'enum' => 
                array (
                  0 => 'user',
                ),
              ),
              'identity_id' => 
              array (
                'description' => '实体的唯一标识

管理用户权益时，传user_id',
                'type' => 'string',
                'required' => true,
                'example' => 'user123',
              ),
              'benefit_pkg_id' => 
              array (
                'description' => '权益包的唯一标识',
                'type' => 'string',
                'required' => true,
                'example' => '40cb7794c9294',
              ),
              'amount' => 
              array (
                'description' => '权益包数量

对资源类权益包生效，非必填参数，默认为1',
                'type' => 'integer',
                'format' => 'int64',
                'required' => false,
                'example' => '1',
              ),
              'expire_time' => 
              array (
                'description' => '权益包超期时间的时间戳，格林威治时间1970年01月01日00时00分00秒起至现在的毫秒数

默认永不过期',
                'type' => 'integer',
                'format' => 'int64',
                'required' => false,
                'example' => '1633167071000',
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
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{}","type":"json"}]',
      'title' => '创建实体和权益包关联',
      'description' => '如果您需要基于PDS做面向大量用户的二次运营，可以基于权益对用户可使用的功能和配额进行控制。 详情请联系官方钉钉群进行咨询：23146118',
    ),
    'UpdateIdentityToBenefitPkgMapping' => 
    array (
      'summary' => '更新实体和权益包关联，可用于给用户绑定权益包。',
      'path' => '/v2/benefit/identity_to_benefit_pkg_mapping/update',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'https',
        1 => 'http',
      ),
      'tags' => 
      array (
        0 => 'api',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
        1 => 
        array (
          'BearerToken' => 
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
          'name' => 'domain_id',
          'in' => 'host',
          'schema' => 
          array (
            'type' => 'string',
            'required' => true,
          ),
        ),
        1 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '请求体参数',
            'type' => 'object',
            'properties' => 
            array (
              'identity_type' => 
              array (
                'description' => '实体的类型
管理用户权益，传user',
                'type' => 'string',
                'required' => true,
                'example' => 'user',
                'enum' => 
                array (
                  0 => 'user',
                ),
              ),
              'identity_id' => 
              array (
                'description' => '实体的唯一标识

管理用户权益时，传user_id',
                'type' => 'string',
                'required' => true,
                'example' => 'user123',
              ),
              'benefit_pkg_id' => 
              array (
                'description' => '权益包的唯一标识',
                'type' => 'string',
                'required' => true,
                'example' => '40cb7794c9294',
              ),
              'amount' => 
              array (
                'description' => '权益包数量

对资源类权益包生效，非必填参数，默认为1',
                'type' => 'integer',
                'format' => 'int64',
                'required' => false,
                'example' => '1',
              ),
              'expire_time' => 
              array (
                'description' => '权益包超期时间的时间戳，格林威治时间1970年01月01日00时00分00秒起至现在的毫秒数

默认永不过期',
                'type' => 'integer',
                'format' => 'int64',
                'required' => false,
                'example' => '1633167071000',
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
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{}","type":"json"}]',
      'title' => '更新实体和权益包关联',
    ),
    'GetIdentityToBenefitPkgMapping' => 
    array (
      'summary' => '获取实体和权益包关联，可用于获取用户绑定的权益包。',
      'path' => '/v2/benefit/identity_to_benefit_pkg_mapping/get',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'https',
        1 => 'http',
      ),
      'tags' => 
      array (
        0 => 'api',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
        1 => 
        array (
          'BearerToken' => 
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
          'name' => 'domain_id',
          'in' => 'host',
          'schema' => 
          array (
            'type' => 'string',
            'required' => true,
          ),
        ),
        1 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '请求体参数',
            'type' => 'object',
            'properties' => 
            array (
              'identity_type' => 
              array (
                'description' => '实体的类型
管理用户权益，传user',
                'type' => 'string',
                'required' => true,
                'example' => 'user',
                'enum' => 
                array (
                  0 => 'user',
                ),
              ),
              'identity_id' => 
              array (
                'description' => '实体的唯一标识

管理用户权益时，传user_id',
                'type' => 'string',
                'required' => true,
                'example' => 'user123',
              ),
              'benefit_pkg_id' => 
              array (
                'description' => '权益包的唯一标识',
                'type' => 'string',
                'required' => true,
                'example' => '40cb7794c9294',
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
            'description' => '实体绑定的权益包信息',
            '$ref' => '#/components/schemas/IdentityToBenefitPkgMapping',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"identity_type\\": \\"\\",\\n  \\"identity_id\\": \\"\\",\\n  \\"benefit_pkg_owner_id\\": \\"\\",\\n  \\"benefit_pkg_id\\": \\"\\",\\n  \\"benefit_pkg_type\\": \\"\\",\\n  \\"benefit_pkg_name\\": \\"\\",\\n  \\"benefit_pkg_priority\\": 0,\\n  \\"benefit_pkg_computation_rule\\": \\"\\",\\n  \\"delivery_info_list\\": [\\n    {\\n      \\"amount\\": 0,\\n      \\"is_permanent\\": true,\\n      \\"expire_time\\": \\"\\",\\n      \\"created_at\\": \\"\\"\\n    }\\n  ],\\n  \\"created_at\\": \\"\\",\\n  \\"updated_at\\": \\"\\"\\n}","type":"json"}]',
      'title' => '获取实体和权益包关联',
    ),
    'ListIdentityToBenefitPkgMapping' => 
    array (
      'summary' => '列举实体和权益包关联，可用于获取用户绑定的权益包列表。',
      'path' => '/v2/benefit/identity_to_benefit_pkg_mapping/list',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'https',
        1 => 'http',
      ),
      'tags' => 
      array (
        0 => 'api',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
        1 => 
        array (
          'BearerToken' => 
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
          'name' => 'domain_id',
          'in' => 'host',
          'schema' => 
          array (
            'type' => 'string',
            'required' => true,
          ),
        ),
        1 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '请求体参数',
            'type' => 'object',
            'properties' => 
            array (
              'identity_type' => 
              array (
                'description' => '实体的类型
管理用户权益，传user',
                'type' => 'string',
                'required' => true,
                'example' => 'user',
                'enum' => 
                array (
                  0 => 'user',
                ),
              ),
              'identity_id' => 
              array (
                'description' => '实体的唯一标识

管理用户权益时，传user_id',
                'type' => 'string',
                'required' => true,
                'example' => 'user123',
              ),
              'include_expired' => 
              array (
                'description' => '是否返回已经超期的权益包，默认为false',
                'type' => 'boolean',
                'required' => false,
                'example' => 'false',
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
            'type' => 'object',
            'properties' => 
            array (
              'items' => 
              array (
                'description' => '实体绑定的权益包信息列表',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '实体绑定的权益包信息',
                  '$ref' => '#/components/schemas/IdentityToBenefitPkgMapping',
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"items\\": [\\n    {\\n      \\"identity_type\\": \\"\\",\\n      \\"identity_id\\": \\"\\",\\n      \\"benefit_pkg_owner_id\\": \\"\\",\\n      \\"benefit_pkg_id\\": \\"\\",\\n      \\"benefit_pkg_type\\": \\"\\",\\n      \\"benefit_pkg_name\\": \\"\\",\\n      \\"benefit_pkg_priority\\": 0,\\n      \\"benefit_pkg_computation_rule\\": \\"\\",\\n      \\"delivery_info_list\\": [\\n        {\\n          \\"amount\\": 0,\\n          \\"is_permanent\\": true,\\n          \\"expire_time\\": \\"\\",\\n          \\"created_at\\": \\"\\"\\n        }\\n      ],\\n      \\"created_at\\": \\"\\",\\n      \\"updated_at\\": \\"\\"\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '列举实体和权益包关联',
    ),
    'InvestigateFile' => 
    array (
      'summary' => '将未经审核的文件送审。',
      'path' => '/v2/csi/investigate_file',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'tags' => 
      array (
        0 => 'api',
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
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'domain_id',
          'in' => 'host',
          'schema' => 
          array (
            'type' => 'string',
            'required' => true,
          ),
        ),
        1 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '请求体。',
            'type' => 'object',
            'properties' => 
            array (
              'drive_file_ids' => 
              array (
                'description' => '空间和文件ID的组合，至多5个。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'drive_id' => 
                    array (
                      'description' => '空间ID',
                      'type' => 'string',
                      'required' => true,
                      'example' => '1',
                    ),
                    'file_id' => 
                    array (
                      'description' => '文件ID',
                      'type' => 'string',
                      'required' => true,
                      'example' => '9520943DC264',
                    ),
                  ),
                  'required' => false,
                ),
                'required' => true,
              ),
              'recursive' => 
              array (
                'type' => 'boolean',
                'required' => false,
              ),
              'user_data' => 
              array (
                'type' => 'string',
                'required' => false,
              ),
              'policy' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'first_product_name' => 
                  array (
                    'type' => 'string',
                    'required' => false,
                  ),
                  'mtee_code' => 
                  array (
                    'type' => 'string',
                    'required' => false,
                  ),
                  'provider' => 
                  array (
                    'type' => 'string',
                    'required' => false,
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
        202 => 
        array (
          'schema' => 
          array (
            'title' => 'Schema of Response',
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{}","type":"json"}]',
      'title' => '审核文件',
      'description' => '可对图片和视频（不含音频）进行审核。动图、长图的截帧/切割频率为1，最多100张；视频的截帧频率为3秒，最多1500帧。审核结果可以通过列举文件、获取文件详情和获取文件内容安全详情接口查询以及使用事件通知功能推送。请勿使用此接口集中的批量送审文件，以免受资源限制导致审核失败。',
    ),
    'CsiGetFileInfo' => 
    array (
      'summary' => '获取文件的内容安全详情。',
      'path' => '/v2/csi/get_file_info',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'https',
        1 => 'http',
      ),
      'tags' => 
      array (
        0 => 'api',
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
          'name' => 'domain_id',
          'in' => 'host',
          'schema' => 
          array (
            'type' => 'string',
            'required' => true,
          ),
        ),
        1 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '请求体参数。',
            'type' => 'object',
            'properties' => 
            array (
              'drive_id' => 
              array (
                'description' => '空间 id',
                'type' => 'string',
                'required' => true,
                'example' => '1',
              ),
              'file_id' => 
              array (
                'description' => '文件id',
                'type' => 'string',
                'required' => true,
                'example' => '9520943DC264',
              ),
              'url_expire_sec' => 
              array (
                'description' => '可选填下载链接过期时间，单位为秒，取值范围为：[10,14400] 秒。
填写此字段时提供下载链接，默认不提供下载链接。',
                'type' => 'integer',
                'format' => 'int32',
                'required' => false,
                'maximum' => '14400',
                'minimum' => '10',
                'example' => '100',
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
            'type' => 'object',
            'properties' => 
            array (
              'investigation_info' => 
              array (
                'description' => '审核信息',
                '$ref' => '#/components/schemas/InvestigationInfo',
              ),
              'url' => 
              array (
                'description' => '文件下载链接',
                'type' => 'string',
                'example' => 'https://data.aliyunpds.com/hz22%2F5d5b986facbec311ef844c25954f96821497b383%2F5d5b986f955410dd991646bb87c6b4e899eff525?Expires=xxx&OSSAccessKeyId=xxx&Signature=xxx',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"investigation_info\\": {\\n    \\"status\\": 0,\\n    \\"suggestion\\": \\"\\",\\n    \\"video_detail\\": {\\n      \\"block_frames\\": [\\n        {\\n          \\"rate\\": 0,\\n          \\"offset\\": 0,\\n          \\"label\\": \\"\\"\\n        }\\n      ]\\n    }\\n  },\\n  \\"url\\": \\"https://data.aliyunpds.com/hz22%2F5d5b986facbec311ef844c25954f96821497b383%2F5d5b986f955410dd991646bb87c6b4e899eff525?Expires=xxx&OSSAccessKeyId=xxx&Signature=xxx\\"\\n}","type":"json"}]',
      'title' => '获取文件内容安全详情',
    ),
    'Batch' => 
    array (
      'summary' => '支持批量调用部分API，提升调用效率。',
      'path' => '/v2/batch',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'https',
      ),
      'tags' => 
      array (
        0 => 'api',
      ),
      'security' => 
      array (
        0 => 
        array (
          'BearerToken' => 
          array (
          ),
        ),
        1 => 
        array (
          'AK' => 
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
        'operationType' => 'none',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'domain_id',
          'in' => 'host',
          'schema' => 
          array (
            'type' => 'string',
            'required' => true,
          ),
        ),
        1 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '请求体参数。',
            'type' => 'object',
            'properties' => 
            array (
              'resource' => 
              array (
                'description' => '请求的资源，支持的资源类型包括：

- file（文件）
- drive（个人/团队云盘）
- user（用户）
- group（群组）
- membership（群组成员）
- share\\_link（分享）
- async\\_task（异步任务）',
                'type' => 'string',
                'required' => true,
                'enumValueTitles' => 
                array (
                  'share_link' => '分享',
                  'file' => '文件',
                  'async_task' => '异步任务',
                  'membership' => '群组成员',
                  'drive' => '个人/团队云盘',
                  'user' => '用户',
                  'group' => '群组',
                ),
                'example' => 'file',
              ),
              'requests' => 
              array (
                'description' => '子请求合集

子请求的数量，有效范围是[1,00]',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '一个子请求内容',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'id' => 
                    array (
                      'description' => '子请求 id，用于request 和 response关联， 不允许重复',
                      'type' => 'string',
                      'required' => true,
                      'example' => '93433894994ad2e1',
                    ),
                    'method' => 
                    array (
                      'description' => '子请求的方法，支持：

- POST
- GET
- PUT
- DELETE
- HEAD
',
                      'type' => 'string',
                      'required' => true,
                      'enumValueTitles' => 
                      array (
                        'HEAD' => 'HEAD',
                        'DELETE' => 'DELETE',
                        'POST' => 'POST',
                        'GET' => 'GET',
                        'PUT' => 'PUT',
                      ),
                      'example' => 'POST',
                    ),
                    'url' => 
                    array (
                      'description' => 'url 子请求的api path路径， 支持：

- /file/get（获取文件详情）
- /file/update（修改文件信息）
- /file/search（搜索文件）
- /file/copy（复制文件或文件夹）
- /file/move（移动文件或文件夹）
- /file/delete（删除文件或文件夹）
- /file/get_download_url（获取文件下载地址）
- /file/get_share_link_download_url（获取分享下载地址）
- /recyclebin/trash（放入回收站）
- /recyclebin/restore（恢复文件或文件夹）
- /file/put_usertags（设置用户标签）
- /file/delete_usertags（删除用户标签）
- /drive/get（获取空间信息）
- /user/get（获取用户信息）
- /group/get（获取群组信息）
- /share_link/create（创建分享）
- /share_link/update（修改分享）
- /share_link/cancel（取消分享）
- /share_link/list（列举分享）
- /share_link/get（获取分享信息）
- /share_link/get_share_token（获取分享令牌）
- /async_task/get（获取异步任务信息）',
                      'type' => 'string',
                      'required' => true,
                      'enumValueTitles' => 
                      array (
                        '/file/copy' => '复制文件或文件夹',
                        '/file/get_share_link_download_url' => '获取分享下载地址',
                        '/file/move' => '移动文件或文件夹',
                        '/share_link/create' => '创建分享',
                        '/share_link/update' => '修改分享',
                        '/async_task/get' => '获取异步任务信息',
                        '/drive/get' => '获取空间信息',
                        '/group/get' => '获取群组信息',
                        '/share_link/list' => '列举分享',
                        '/file/delete' => '删除文件或文件夹',
                        '/share_link/get' => '获取分享信息',
                        '/file/get' => '获取文件详情',
                        '/file/get_download_url' => '获取文件下载地址',
                        '/recyclebin/restore' => '恢复文件或文件夹',
                        '/file/update' => '修改文件信息',
                        '/recyclebin/trash' => '放入回收站',
                        '/file/search' => '搜索文件',
                        '/user/get' => '获取用户信息',
                        '/share_link/get_share_token' => '获取分享令牌',
                        '/share_link/cancel' => '取消分享',
                      ),
                      'example' => '/file/get',
                    ),
                    'body' => 
                    array (
                      'description' => '子请求的请求参数JSON字符串，可参考相应子请求API文档

当指定了body必须传headers："Content-Type" 对应的类型，目前子请求入参是"application/json"',
                      'type' => 'object',
                      'required' => false,
                      'additionalProperties' => 
                      array (
                        'type' => 'any',
                        'description' => '子请求的请求body',
                        'example' => '{"domain_id":"1","drive_id":"1"}',
                      ),
                    ),
                    'headers' => 
                    array (
                      'description' => '子请求的请求头，表示body传入数据的类型',
                      'type' => 'object',
                      'required' => false,
                      'additionalProperties' => 
                      array (
                        'type' => 'string',
                        'description' => '子请求的请求headers',
                        'example' => '{"Content-Type":"application/json"}',
                      ),
                    ),
                  ),
                  'required' => false,
                ),
                'required' => true,
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
            'title' => 'Schema of Response',
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'responses' => 
              array (
                'description' => '子请求的响应合集',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '一个子请求响应内容',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'id' => 
                    array (
                      'description' => '子请求 id，和request进行关联',
                      'type' => 'string',
                      'example' => '93433894994ad2e1',
                    ),
                    'status' => 
                    array (
                      'description' => '子请求的返回状态码，可参考相应子请求API文档',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '200',
                    ),
                    'body' => 
                    array (
                      'description' => '子请求的响应结果，可参考相应子请求API文档',
                      'type' => 'object',
                      'additionalProperties' => 
                      array (
                        'type' => 'any',
                        'description' => '子请求的响应body',
                        'example' => '{"domain_id":"1","drive_id":"1","file_id":"9520943DC264"}',
                      ),
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"responses\\": [\\n    {\\n      \\"id\\": \\"93433894994ad2e1\\",\\n      \\"status\\": 200,\\n      \\"body\\": {\\n        \\"key\\": \\"{\\\\\\"domain_id\\\\\\":\\\\\\"1\\\\\\",\\\\\\"drive_id\\\\\\":\\\\\\"1\\\\\\",\\\\\\"file_id\\\\\\":\\\\\\"9520943DC264\\\\\\"}\\"\\n      }\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '批量调用API',
    ),
    'GetDomainQuota' => 
    array (
      'summary' => '获取domain限额',
      'path' => '/v2/domain/get_quota',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'tags' => 
      array (
        0 => 'admin',
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
        'riskType' => 'none',
        'chargeType' => 'free',
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
            'type' => 'object',
            'properties' => 
            array (
              'size_quota' => 
              array (
                'type' => 'integer',
                'format' => 'int64',
              ),
              'size_used' => 
              array (
                'type' => 'integer',
                'format' => 'int64',
              ),
              'user_count_quota' => 
              array (
                'type' => 'integer',
                'format' => 'int64',
              ),
              'user_count_used' => 
              array (
                'type' => 'integer',
                'format' => 'int64',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
    ),
    'GroupUpdateName' => 
    array (
      'summary' => '更新用户组名字',
      'path' => '/v2/group/update_name',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'https',
      ),
      'tags' => 
      array (
        0 => 'api',
      ),
      'security' => 
      array (
        0 => 
        array (
          'BearerToken' => 
          array (
          ),
        ),
        1 => 
        array (
          'AK' => 
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
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'domain_id',
          'in' => 'host',
          'schema' => 
          array (
            'type' => 'string',
            'required' => true,
          ),
        ),
        1 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'group_id' => 
              array (
                'type' => 'string',
                'required' => true,
              ),
              'name' => 
              array (
                'type' => 'string',
              ),
            ),
          ),
        ),
      ),
      'responses' => 
      array (
        204 => 
        array (
          'schema' => 
          array (
            '$ref' => '#/components/schemas/BaseGroupResponse',
          ),
        ),
      ),
    ),
    'InnerSignIn' => 
    array (
      'summary' => '企业短信验证码登录',
      'path' => '/v2/account/sign_in',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'tags' => 
      array (
        0 => 'api',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
        1 => 
        array (
          'BearerToken' => 
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
        'operationType' => 'create',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'phone_number' => 
              array (
                'type' => 'string',
                'required' => false,
              ),
              'phone_region' => 
              array (
                'type' => 'string',
                'required' => false,
              ),
              'email' => 
              array (
                'type' => 'string',
                'required' => false,
              ),
              'sign_in_type' => 
              array (
                'type' => 'string',
                'required' => false,
              ),
              'sms_code_id' => 
              array (
                'type' => 'string',
                'maxLength' => 1024,
              ),
              'sms_code' => 
              array (
                'type' => 'string',
                'maxLength' => 1024,
              ),
              'user_name' => 
              array (
                'type' => 'string',
                'maxLength' => 1024,
              ),
              'password' => 
              array (
                'type' => 'string',
                'maxLength' => 1024,
              ),
              'key_pair_id' => 
              array (
                'type' => 'string',
                'maxLength' => 1024,
              ),
              'remarks' => 
              array (
                'type' => 'string',
                'maxLength' => 1024,
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
            'title' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'goto' => 
              array (
                'type' => 'string',
              ),
            ),
          ),
        ),
      ),
    ),
    'SelectDomain' => 
    array (
      'summary' => '企业登录选择domain',
      'path' => '/v2/account/select_domain',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'tags' => 
      array (
        0 => 'api',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
        1 => 
        array (
          'BearerToken' => 
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
        'operationType' => 'none',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'domain_id' => 
              array (
                'type' => 'string',
                'maxLength' => 1024,
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
            'title' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'goto' => 
              array (
                'type' => 'string',
              ),
            ),
          ),
        ),
      ),
    ),
  ),
  'endpoints' => 
  array (
    0 => 
    array (
      'regionId' => 'cn-beijing',
      'endpoint' => 'cn-beijing.admin.aliyunpds.com',
    ),
    1 => 
    array (
      'regionId' => 'cn-zhangjiakou',
      'endpoint' => 'cn-zhangjiakou.admin.aliyunpds.com',
    ),
    2 => 
    array (
      'regionId' => 'cn-hangzhou',
      'endpoint' => 'cn-hangzhou.admin.aliyunpds.com',
    ),
    3 => 
    array (
      'regionId' => 'cn-shanghai',
      'endpoint' => 'cn-shanghai.admin.aliyunpds.com',
    ),
    4 => 
    array (
      'regionId' => 'cn-shenzhen',
      'endpoint' => 'cn-shenzhen.admin.aliyunpds.com',
    ),
  ),
);
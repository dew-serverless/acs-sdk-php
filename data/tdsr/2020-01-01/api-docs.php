<?php return array (
  'version' => '1.0',
  'info' => 
  array (
    'style' => 'RPC',
    'product' => 'tdsr',
    'version' => '2020-01-01',
  ),
  'directories' => 
  array (
    0 => 
    array (
      'id' => 77266,
      'title' => '场景',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'AddScene',
        1 => 'DropScene',
        2 => 'ScenePublish',
        3 => 'UpdateScene',
        4 => 'DetailScene',
        5 => 'ListScene',
      ),
    ),
    1 => 
    array (
      'id' => 77275,
      'title' => '子场景',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'AddSubScene',
        1 => 'DropSubScene',
        2 => 'UpdateSubScene',
        3 => 'DetailSubScene',
        4 => 'ListSubScene',
      ),
    ),
    2 => 
    array (
      'id' => 77281,
      'title' => '项目',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'AddProject',
        1 => 'DropProject',
        2 => 'UpdateProject',
        3 => 'DetailProject',
        4 => 'ListProject',
      ),
    ),
    3 => 
    array (
      'id' => 77291,
      'title' => '马赛克',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'AddMosaics',
      ),
    ),
    4 => 
    array (
      'id' => 0,
      'title' => '其它',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'GetHotspotConfig',
        1 => 'GetHotspotTag',
        2 => 'GetWindowConfig',
        3 => 'PublishHotspot',
        4 => 'SaveHotspotConfig',
        5 => 'SaveHotspotTag',
        6 => 'TempPreviewStatus',
        7 => 'GetSingleConnData',
        8 => 'GetTaskStatus',
        9 => 'RectVertical',
        10 => 'GetLayoutData',
        11 => 'TempPreview',
        12 => 'LabelBuild',
        13 => 'GetOssPolicy',
        14 => 'PredictionWallLine',
        15 => 'GetSceneBuildTaskStatus',
        16 => 'UpdateConnData',
        17 => 'PredImage',
        18 => 'GetRectifyImage',
        19 => 'GetOriginLayoutData',
        20 => 'RectifyImage',
        21 => 'LinkImage',
        22 => 'OptimizeRightAngle',
        23 => 'GetConnData',
        24 => 'UpdateLayoutData',
        25 => 'GetSubSceneTaskStatus',
        26 => 'PublishScene',
        27 => 'AddRelativePosition',
        28 => 'GetScenePreviewInfo',
        29 => 'GetHotspotSceneData',
        30 => 'RecoveryOriginImage',
        31 => 'RollbackSubScene',
        32 => 'PublishStatus',
        33 => 'AddRoomPlan',
        34 => 'GetScenePreviewData',
        35 => 'CheckUserProperty',
        36 => 'GetScenePreviewResource',
        37 => 'GetPackSceneTaskStatus',
        38 => 'GetScenePackUrl',
        39 => 'PackScene',
        40 => 'GetCopySceneTaskStatus',
        41 => 'UpdateSubSceneSeq',
        42 => 'CopyScene',
        43 => 'GetSourcePackStatus',
        44 => 'PackSource',
        45 => 'SaveHotspotTagList',
        46 => 'SaveModelConfig',
        47 => 'CreateUploadPolicy',
        48 => 'PublishHotspotConfig',
        49 => 'AddHotspotFile',
        50 => 'SaveMinimap',
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
    'AddScene' => 
    array (
      'summary' => '创建特定类型的主场景。',
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
          'name' => 'Type',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '场景类型 3D模型：MODEL_3D  全景图片：PIC  全景视频：VIDEO 混合：MIX',
            'description' => '场景类型 3D模型：MODEL_3D  全景图片：PIC  全景视频：VIDEO 混合：MIX',
            'type' => 'string',
            'required' => true,
            'example' => 'MODEL_3D',
            'enum' => 
            array (
              0 => 'MODEL_3D',
              1 => 'PIC',
              2 => 'VIDEO',
              3 => 'MIX',
            ),
          ),
        ),
        1 => 
        array (
          'name' => 'Name',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '场景名称',
            'description' => '场景名称',
            'type' => 'string',
            'required' => true,
            'example' => '场景A',
          ),
        ),
        2 => 
        array (
          'name' => 'ProjectId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '项目ID',
            'description' => '项目ID',
            'type' => 'string',
            'required' => true,
            'minimum' => '1',
            'example' => '1234****',
          ),
        ),
        3 => 
        array (
          'name' => 'CustomerUid',
          'in' => 'query',
          'allowEmptyValue' => true,
          'schema' => 
          array (
            'description' => '业务方UID',
            'type' => 'string',
            'required' => false,
            'example' => '2345****',
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
              'RequestId' => 
              array (
                'title' => '请求ID，与入参requestId对应',
                'description' => '请求ID，与入参requestId对应',
                'type' => 'string',
                'example' => '4F882EA7-3A1D-0113-94E4-70162C4B***',
              ),
              'Code' => 
              array (
                'title' => '返回码',
                'description' => '返回码',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '200',
              ),
              'Success' => 
              array (
                'title' => '是否请求成功',
                'description' => '是否请求成功',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Message' => 
              array (
                'title' => '错误消息',
                'description' => '错误消息',
                'type' => 'string',
                'example' => 'success',
              ),
              'Id' => 
              array (
                'title' => '场景ID',
                'description' => '场景ID',
                'type' => 'string',
                'example' => '2345****',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"4F882EA7-3A1D-0113-94E4-70162C4B***\\",\\n  \\"Code\\": 200,\\n  \\"Success\\": true,\\n  \\"Message\\": \\"success\\",\\n  \\"Id\\": \\"2345****\\"\\n}","errorExample":""},{"type":"xml","example":"<AddSceneResponse>\\n    <RequestId>4F882EA7-3A1D-0113-94E4-70162C4B***</RequestId>\\n    <Code>200</Code>\\n    <Success>true</Success>\\n    <Message>success</Message>\\n    <Id>2345****</Id>\\n</AddSceneResponse>","errorExample":""}]',
      'title' => '创建主场景',
    ),
    'DropScene' => 
    array (
      'summary' => '删除指定主场景。',
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
          'name' => 'Id',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '主场景id',
            'description' => '主场景ID',
            'type' => 'string',
            'required' => true,
            'example' => '1234***',
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
              'RequestId' => 
              array (
                'title' => '请求ID，与入参requestId对应',
                'description' => '请求ID，与入参requestId对应',
                'type' => 'string',
                'example' => '4F882EA7-3A1D-0113-94E4-70162C4****',
              ),
              'Code' => 
              array (
                'title' => '返回码',
                'description' => '返回码',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '200',
              ),
              'Success' => 
              array (
                'title' => '是否请求成功',
                'description' => '是否请求成功',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Message' => 
              array (
                'title' => '错误消息',
                'description' => '错误消息',
                'type' => 'string',
                'example' => 'success',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"4F882EA7-3A1D-0113-94E4-70162C4****\\",\\n  \\"Code\\": 200,\\n  \\"Success\\": true,\\n  \\"Message\\": \\"success\\"\\n}","errorExample":""},{"type":"xml","example":"<DropSceneResponse>\\n    <RequestId>4F882EA7-3A1D-0113-94E4-70162C4****</RequestId>\\n    <Code>200</Code>\\n    <Success>true</Success>\\n    <Message>success</Message>\\n</DropSceneResponse>","errorExample":""}]',
      'title' => '删除主场景',
    ),
    'ScenePublish' => 
    array (
      'summary' => '发布',
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
      ),
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'SceneId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '场景ID',
            'type' => 'string',
            'required' => true,
            'example' => '1',
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
              'RequestId' => 
              array (
                'title' => '请求ID，与入参requestId对应',
                'type' => 'string',
                'example' => '344794c32937474a9c59eb1309366493',
              ),
              'Code' => 
              array (
                'title' => '返回码',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '200',
              ),
              'Success' => 
              array (
                'title' => '是否请求成功',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Message' => 
              array (
                'title' => '错误消息',
                'type' => 'string',
                'example' => 'success',
              ),
              'PreviewUrl' => 
              array (
                'title' => '预览链接',
                'type' => 'string',
                'example' => 'https://lyj.aliyun.com/xxx',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '',
    ),
    'UpdateScene' => 
    array (
      'summary' => '更新场景信息名称。',
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
          'name' => 'Id',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '场景Id',
            'description' => '场景ID',
            'type' => 'string',
            'required' => true,
            'example' => '1234****',
          ),
        ),
        1 => 
        array (
          'name' => 'Name',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '场景名称',
            'description' => '场景名称',
            'type' => 'string',
            'required' => true,
            'example' => '场景A',
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
              'RequestId' => 
              array (
                'title' => '请求ID，与入参requestId对应',
                'description' => '请求ID，与入参requestId对应',
                'type' => 'string',
                'example' => '4F882EA7-3A1D-0113-94E4-70162C4B***',
              ),
              'Code' => 
              array (
                'title' => '返回码',
                'description' => '返回码',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '200',
              ),
              'Success' => 
              array (
                'title' => '是否请求成功',
                'description' => '是否请求成功',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Message' => 
              array (
                'title' => '错误消息',
                'description' => '错误消息',
                'type' => 'string',
                'example' => 'success',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"4F882EA7-3A1D-0113-94E4-70162C4B***\\",\\n  \\"Code\\": 200,\\n  \\"Success\\": true,\\n  \\"Message\\": \\"success\\"\\n}","errorExample":""},{"type":"xml","example":"<UpdateSceneResponse>\\n    <RequestId>4F882EA7-3A1D-0113-94E4-70162C4B***</RequestId>\\n    <Code>200</Code>\\n    <Success>true</Success>\\n    <Message>success</Message>\\n</UpdateSceneResponse>","errorExample":""}]',
      'title' => '更新场景名称',
    ),
    'DetailScene' => 
    array (
      'summary' => '获取指定主场景信息。',
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
          'name' => 'Id',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '场景Id',
            'description' => '场景ID',
            'type' => 'string',
            'required' => true,
            'example' => '1234***',
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
              'RequestId' => 
              array (
                'title' => '请求ID，与入参requestId对应',
                'description' => '请求ID，与入参requestId对应',
                'type' => 'string',
                'example' => '344794c32937474a9c59eb130936****',
              ),
              'Code' => 
              array (
                'title' => '返回码',
                'description' => '返回码',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '200',
              ),
              'Success' => 
              array (
                'title' => '是否请求成功',
                'description' => '是否请求成功',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Message' => 
              array (
                'title' => '错误消息',
                'description' => '错误消息',
                'type' => 'string',
                'example' => 'success',
              ),
              'Id' => 
              array (
                'title' => '主场景Id',
                'description' => '主场景ID',
                'type' => 'string',
                'example' => '1234***',
              ),
              'Name' => 
              array (
                'title' => '场景名称',
                'description' => '场景名称',
                'type' => 'string',
                'example' => '场景A',
              ),
              'Type' => 
              array (
                'title' => '场景类型',
                'description' => '场景类型',
                'type' => 'string',
                'example' => '场景类型 3D模型：MODEL_3D 全景图片：PIC 全景视频：VIDEO',
              ),
              'SubSceneNum' => 
              array (
                'title' => '子场景数',
                'description' => '子场景数',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '20',
              ),
              'SourceNum' => 
              array (
                'title' => '资源数',
                'description' => '资源数',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '20',
              ),
              'Published' => 
              array (
                'title' => '是否已发布 true：已发布：false：未发布',
                'description' => '是否已发布 true：已发布：false：未发布',
                'type' => 'boolean',
                'example' => 'false',
              ),
              'GmtCreate' => 
              array (
                'title' => '创建时间',
                'description' => '创建时间',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '1621236933677',
              ),
              'GmtModified' => 
              array (
                'title' => '最后修改时间',
                'description' => '最后修改时间',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '1621236933677',
              ),
              'PreviewToken' => 
              array (
                'title' => '预览Token',
                'description' => '预览Token',
                'type' => 'string',
                'example' => 'd989623696ab4f87a80b8d5b0b0****',
              ),
              'CoverUrl' => 
              array (
                'title' => '封面地址',
                'description' => '封面地址（模型）',
                'type' => 'string',
                'example' => 'www.example.com/xxx/xxx.jpg',
              ),
              'Status' => 
              array (
                'title' => '场景状态，init：初始化，published：已发布，publishing：发布中，copying：复制中，making：制作中，publishable：构建成功，makeFailed：制作失败',
                'description' => '场景状态，init：初始化，published：已发布，publishing：发布中，copying：复制中，making：制作中，publishable：构建成功，makeFailed：制作失败',
                'type' => 'string',
                'example' => 'init',
              ),
              'StatusName' => 
              array (
                'title' => '状态名称',
                'description' => '状态名称',
                'type' => 'string',
                'example' => '初始化',
              ),
              'Captures' => 
              array (
                'title' => '实勘图列表',
                'description' => '实勘图列表',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Url' => 
                    array (
                      'title' => '实勘图url',
                      'description' => '实勘图url',
                      'type' => 'string',
                      'example' => 'http://www.aliyun.com/test1.jpg',
                    ),
                    'Title' => 
                    array (
                      'title' => '图片名称',
                      'description' => '图片名称',
                      'type' => 'string',
                      'example' => '图片名称',
                    ),
                  ),
                ),
              ),
              'FloorPlans' => 
              array (
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'FloorLabel' => 
                    array (
                      'title' => '楼层索引',
                      'description' => '楼层索引',
                      'type' => 'string',
                    ),
                    'FloorName' => 
                    array (
                      'title' => '楼层名称',
                      'description' => '楼层名称',
                      'type' => 'string',
                    ),
                    'ColorMapUrl' => 
                    array (
                      'title' => '彩色图地址',
                      'description' => '彩色图地址',
                      'type' => 'string',
                    ),
                    'MiniMapUrl' => 
                    array (
                      'title' => '黑白图地址',
                      'description' => '黑白图地址',
                      'type' => 'string',
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"344794c32937474a9c59eb130936****\\",\\n  \\"Code\\": 200,\\n  \\"Success\\": true,\\n  \\"Message\\": \\"success\\",\\n  \\"Id\\": \\"1234***\\",\\n  \\"Name\\": \\"场景A\\",\\n  \\"Type\\": \\"场景类型 3D模型：MODEL_3D 全景图片：PIC 全景视频：VIDEO\\",\\n  \\"SubSceneNum\\": 20,\\n  \\"SourceNum\\": 20,\\n  \\"Published\\": false,\\n  \\"GmtCreate\\": 1621236933677,\\n  \\"GmtModified\\": 1621236933677,\\n  \\"PreviewToken\\": \\"d989623696ab4f87a80b8d5b0b0****\\",\\n  \\"CoverUrl\\": \\"www.example.com/xxx/xxx.jpg\\",\\n  \\"Status\\": \\"init\\",\\n  \\"StatusName\\": \\"初始化\\",\\n  \\"Captures\\": [\\n    {\\n      \\"Url\\": \\"http://www.aliyun.com/test1.jpg\\",\\n      \\"Title\\": \\"图片名称\\"\\n    }\\n  ],\\n  \\"FloorPlans\\": [\\n    {\\n      \\"FloorLabel\\": \\"\\",\\n      \\"FloorName\\": \\"\\",\\n      \\"ColorMapUrl\\": \\"\\",\\n      \\"MiniMapUrl\\": \\"\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<DetailSceneResponse>\\n    <RequestId>344794c32937474a9c59eb130936****</RequestId>\\n    <Code>200</Code>\\n    <Success>true</Success>\\n    <Message>success</Message>\\n    <Id>1234***</Id>\\n    <Name>场景A</Name>\\n    <Type>场景类型 3D模型：MODEL_3D 全景图片：PIC 全景视频：VIDEO</Type>\\n    <SubSceneNum>20</SubSceneNum>\\n    <SourceNum>20</SourceNum>\\n    <Published>false</Published>\\n    <GmtCreate>1621236933677</GmtCreate>\\n    <GmtModified>1621236933677</GmtModified>\\n    <PreviewToken>d989623696ab4f87a80b8d5b0b0****</PreviewToken>\\n    <CoverUrl>www.example.com/xxx/xxx.jpg</CoverUrl>\\n    <Status>init</Status>\\n    <StatusName>初始化</StatusName>\\n    <Captures>\\n        <Url>http://www.aliyun.com/test1.jpg</Url>\\n        <Title>图片名称</Title>\\n    </Captures>\\n</DetailSceneResponse>","errorExample":""}]',
      'title' => '查看场景详情',
    ),
    'ListScene' => 
    array (
      'summary' => '获取指定项目下的所有主场景列表。',
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
          'name' => 'Name',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '主场景名称',
            'description' => '主场景名称',
            'type' => 'string',
            'required' => false,
            'example' => '场景A',
          ),
        ),
        1 => 
        array (
          'name' => 'ProjectId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '所有项目Id',
            'description' => '所有项目ID',
            'type' => 'string',
            'required' => true,
            'example' => '1234****',
          ),
        ),
        2 => 
        array (
          'name' => 'PageNum',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '当前页',
            'description' => '页码',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'example' => '1',
          ),
        ),
        3 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '页长',
            'description' => '页长',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'example' => '20',
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
              'RequestId' => 
              array (
                'title' => '请求ID，与入参requestId对应',
                'description' => '请求ID，与入参requestId对应',
                'type' => 'string',
                'example' => '4F882EA7-3A1D-0113-94E4-70162C4B***',
              ),
              'Code' => 
              array (
                'title' => '返回码',
                'description' => '返回码',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '200',
              ),
              'Success' => 
              array (
                'title' => '是否请求成功',
                'description' => '是否请求成功',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Message' => 
              array (
                'title' => '错误消息',
                'description' => '错误消息',
                'type' => 'string',
                'example' => 'success',
              ),
              'HasNext' => 
              array (
                'title' => '是否有下一页',
                'description' => '是否有下一页',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'CurrentPage' => 
              array (
                'title' => '当前页',
                'description' => '当前页',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '1',
              ),
              'TotalPage' => 
              array (
                'title' => '总页数',
                'description' => '总页数',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '5',
              ),
              'Count' => 
              array (
                'title' => '数据总数',
                'description' => '数据总数',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '100',
              ),
              'List' => 
              array (
                'title' => '主场景数据',
                'description' => '主场景数据',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Id' => 
                    array (
                      'title' => '主场景Id',
                      'description' => '主场景ID',
                      'type' => 'string',
                      'example' => '1234****',
                    ),
                    'Name' => 
                    array (
                      'title' => '场景名称',
                      'description' => '场景名称',
                      'type' => 'string',
                      'example' => '场景A',
                    ),
                    'Type' => 
                    array (
                      'title' => '场景类型 3D模型：MODEL_3D  全景图片：PIC  全景视频：VIDEO',
                      'description' => '场景类型',
                      'type' => 'string',
                      'example' => 'MODEL_3D',
                    ),
                    'SubSceneNum' => 
                    array (
                      'title' => '子场景数',
                      'description' => '子场景数',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '20',
                    ),
                    'SourceNum' => 
                    array (
                      'title' => '资源数',
                      'description' => '资源数',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '20',
                    ),
                    'Published' => 
                    array (
                      'title' => '是否已发布 true：已发布：false：未发布',
                      'description' => '是否已发布 true：已发布：false：未发布',
                      'type' => 'boolean',
                      'example' => 'false',
                    ),
                    'GmtCreate' => 
                    array (
                      'title' => '创建时间',
                      'description' => '创建时间',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1621236933677',
                    ),
                    'GmtModified' => 
                    array (
                      'title' => '最后修改时间',
                      'description' => '最后修改时间',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1621236933677',
                    ),
                    'PreviewToken' => 
                    array (
                      'title' => '预览Token',
                      'description' => '预览Token',
                      'type' => 'string',
                      'example' => 'd989623696ab4f87a80b8d5b0b00****',
                    ),
                    'CoverUrl' => 
                    array (
                      'title' => '封面地址',
                      'description' => '封面地址（模型）',
                      'type' => 'string',
                      'example' => 'www.example.com/xxxx/xxx.jpg',
                    ),
                    'Status' => 
                    array (
                      'title' => '场景状态，init：初始化，published：已发布，publishing：发布中，copying：复制中，making：制作中，publishable：构建成功，makeFailed：制作失败',
                      'description' => '场景状态，init：初始化，published：已发布，publishing：发布中，copying：复制中，making：制作中，publishable：构建成功，makeFailed：制作失败',
                      'type' => 'string',
                      'example' => 'init',
                    ),
                    'StatusName' => 
                    array (
                      'title' => '状态名称',
                      'description' => '状态名称',
                      'type' => 'string',
                      'example' => '初始化',
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"4F882EA7-3A1D-0113-94E4-70162C4B***\\",\\n  \\"Code\\": 200,\\n  \\"Success\\": true,\\n  \\"Message\\": \\"success\\",\\n  \\"HasNext\\": true,\\n  \\"CurrentPage\\": 1,\\n  \\"TotalPage\\": 5,\\n  \\"Count\\": 100,\\n  \\"List\\": [\\n    {\\n      \\"Id\\": \\"1234****\\",\\n      \\"Name\\": \\"场景A\\",\\n      \\"Type\\": \\"MODEL_3D\\",\\n      \\"SubSceneNum\\": 20,\\n      \\"SourceNum\\": 20,\\n      \\"Published\\": false,\\n      \\"GmtCreate\\": 1621236933677,\\n      \\"GmtModified\\": 1621236933677,\\n      \\"PreviewToken\\": \\"d989623696ab4f87a80b8d5b0b00****\\",\\n      \\"CoverUrl\\": \\"www.example.com/xxxx/xxx.jpg\\",\\n      \\"Status\\": \\"init\\",\\n      \\"StatusName\\": \\"初始化\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<ListSceneResponse>\\n    <RequestId>4F882EA7-3A1D-0113-94E4-70162C4B***</RequestId>\\n    <Code>200</Code>\\n    <Success>true</Success>\\n    <Message>success</Message>\\n    <HasNext>true</HasNext>\\n    <CurrentPage>1</CurrentPage>\\n    <TotalPage>5</TotalPage>\\n    <Count>100</Count>\\n    <List>\\n        <Id>1234****</Id>\\n        <Name>场景A</Name>\\n        <Type>MODEL_3D</Type>\\n        <SubSceneNum>20</SubSceneNum>\\n        <SourceNum>20</SourceNum>\\n        <Published>false</Published>\\n        <GmtCreate>1621236933677</GmtCreate>\\n        <GmtModified>1621236933677</GmtModified>\\n        <PreviewToken>d989623696ab4f87a80b8d5b0b00****</PreviewToken>\\n        <CoverUrl>www.example.com/xxxx/xxx.jpg</CoverUrl>\\n        <Status>init</Status>\\n        <StatusName>初始化</StatusName>\\n    </List>\\n</ListSceneResponse>","errorExample":""}]',
      'title' => '分页查看场景列表',
    ),
    'AddSubScene' => 
    array (
      'summary' => '在指定的主场景下添加新的子场景。',
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
          'name' => 'SceneId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '场景ID',
            'description' => '场景ID',
            'type' => 'string',
            'required' => true,
            'example' => '1234****',
          ),
        ),
        1 => 
        array (
          'name' => 'Name',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '子场景名称',
            'description' => '子场景名称（长度为1~20个字符）',
            'type' => 'string',
            'required' => true,
            'example' => '子场景A',
          ),
        ),
        2 => 
        array (
          'name' => 'UploadType',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '类型 图片：IMAGE 视频：VIDEO',
            'description' => '上传类型 图片：IMAGE 视频：VIDEO',
            'type' => 'string',
            'required' => false,
            'example' => 'IMAGE',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '响应',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => '请求ID，与入参requestId对应',
                'description' => '请求ID，与入参requestId对应',
                'type' => 'string',
                'example' => '4F882EA7-3A1D-0113-94E4-70162C4****',
              ),
              'Code' => 
              array (
                'title' => '返回码',
                'description' => '返回码',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '200',
              ),
              'Success' => 
              array (
                'title' => '是否请求成功',
                'description' => '是否请求成功',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Message' => 
              array (
                'title' => '错误消息',
                'description' => '错误消息',
                'type' => 'string',
                'example' => 'success',
              ),
              'Id' => 
              array (
                'title' => '子场景ID',
                'description' => '子场景ID',
                'type' => 'string',
                'example' => '234****',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"4F882EA7-3A1D-0113-94E4-70162C4****\\",\\n  \\"Code\\": 200,\\n  \\"Success\\": true,\\n  \\"Message\\": \\"success\\",\\n  \\"Id\\": \\"234****\\"\\n}","errorExample":""},{"type":"xml","example":"<AddSubSceneResponse>\\n    <RequestId>4F882EA7-3A1D-0113-94E4-70162C4****</RequestId>\\n    <Code>200</Code>\\n    <Success>true</Success>\\n    <Message>success</Message>\\n    <Id>234****</Id>\\n</AddSubSceneResponse>","errorExample":""}]',
      'title' => '创建子场景',
    ),
    'DropSubScene' => 
    array (
      'summary' => '删除指定子场景。',
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
          'name' => 'Id',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '子场景ID',
            'description' => '子场景ID',
            'type' => 'string',
            'required' => true,
            'example' => '1234****',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '响应',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => '请求ID，与入参requestId对应',
                'description' => '请求ID，与入参requestId对应',
                'type' => 'string',
                'example' => '4F882EA7-3A1D-0113-94E4-70162C4****',
              ),
              'Code' => 
              array (
                'title' => '返回码',
                'description' => '返回码',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '200',
              ),
              'Success' => 
              array (
                'title' => '是否请求成功',
                'description' => '是否请求成功',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Message' => 
              array (
                'title' => '错误消息',
                'description' => '错误消息',
                'type' => 'string',
                'example' => 'success',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"4F882EA7-3A1D-0113-94E4-70162C4****\\",\\n  \\"Code\\": 200,\\n  \\"Success\\": true,\\n  \\"Message\\": \\"success\\"\\n}","errorExample":""},{"type":"xml","example":"<DropSubSceneResponse>\\n    <RequestId>4F882EA7-3A1D-0113-94E4-70162C4****</RequestId>\\n    <Code>200</Code>\\n    <Success>true</Success>\\n    <Message>success</Message>\\n</DropSubSceneResponse>","errorExample":""}]',
      'title' => '删除子场景',
    ),
    'UpdateSubScene' => 
    array (
      'summary' => '更新指定的子场景信息。',
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
      ),
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Id',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '子场景ID',
            'description' => '子场景ID',
            'type' => 'string',
            'required' => true,
            'example' => '1234****',
          ),
        ),
        1 => 
        array (
          'name' => 'Name',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '子场景名称',
            'description' => '子场景名称（规则：^[0-9a-zA-Z_\\-\\u4e00-\\u9fa5]{1,20}$）',
            'type' => 'string',
            'required' => false,
            'example' => '客厅',
          ),
        ),
        2 => 
        array (
          'name' => 'ViewPoint',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'title' => '视角坐标，目前支持3元坐标，4元坐标，例如：[0.94005,0.13397,-0.3136,0.782992]',
            'description' => '视角坐标，目前支持3元坐标，4元坐标，例如：[0.94005,0.13397,-0.3136,0.782992]',
            'type' => 'array',
            'items' => 
            array (
              'title' => '浮点数',
              'description' => '视角坐标，例如：[0.94005,0.13397,-0.3136,0.782992]',
              'type' => 'number',
              'format' => 'double',
              'required' => false,
              'example' => '0.94005',
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
              'RequestId' => 
              array (
                'title' => '请求ID，与入参requestId对应',
                'description' => '请求ID，与入参requestId对应',
                'type' => 'string',
                'example' => '4F882EA7-3A1D-0113-94E4-70162C4****',
              ),
              'Code' => 
              array (
                'title' => '返回码',
                'description' => '返回码',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '200',
              ),
              'Success' => 
              array (
                'title' => '是否请求成功',
                'description' => '是否请求成功',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Message' => 
              array (
                'title' => '错误消息',
                'description' => '错误消息',
                'type' => 'string',
                'example' => 'success',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"4F882EA7-3A1D-0113-94E4-70162C4****\\",\\n  \\"Code\\": 200,\\n  \\"Success\\": true,\\n  \\"Message\\": \\"success\\"\\n}","errorExample":""},{"type":"xml","example":"<UpdateSubSceneResponse>\\n    <RequestId>4F882EA7-3A1D-0113-94E4-70162C4****</RequestId>\\n    <Code>200</Code>\\n    <Success>true</Success>\\n    <Message>success</Message>\\n</UpdateSubSceneResponse>","errorExample":""}]',
      'title' => '更新子场景名称',
    ),
    'DetailSubScene' => 
    array (
      'summary' => '查看子场景信息。',
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
          'name' => 'Id',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '子场景ID',
            'description' => '子场景ID（加密ID）',
            'type' => 'string',
            'required' => true,
            'example' => 'F79siXLsJsVVca8Yp4fgPA==',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '响应',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => '请求ID，与入参requestId对应',
                'description' => '请求ID，与入参requestId对应',
                'type' => 'string',
                'example' => '4F882EA7-3A1D-0113-94E4-70162C4****',
              ),
              'Code' => 
              array (
                'title' => '返回码',
                'description' => '返回码',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '200',
              ),
              'Success' => 
              array (
                'title' => '是否请求成功',
                'description' => '是否请求成功',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Message' => 
              array (
                'title' => '错误消息',
                'description' => '错误消息',
                'type' => 'string',
                'example' => 'success',
              ),
              'Id' => 
              array (
                'title' => '子场景id',
                'description' => '子场景id（加密ID）',
                'type' => 'string',
                'example' => '1234***',
              ),
              'Name' => 
              array (
                'title' => '子场景名称',
                'description' => '子场景名称',
                'type' => 'string',
                'example' => '子场景A',
              ),
              'ResourceId' => 
              array (
                'title' => '图片ID/视频ID',
                'description' => '图片ID/视频ID（加密ID）',
                'type' => 'string',
                'example' => '1234***',
              ),
              'Url' => 
              array (
                'title' => '图片路径/视频路径',
                'description' => '图片路径/视频路径',
                'type' => 'string',
                'example' => 'https://image-demo.oss-cn-hangzhou.aliyuncs.com/****.jpg',
              ),
              'CoverUrl' => 
              array (
                'title' => '图片路径/视频封面路径',
                'description' => '图片路径/视频封面路径',
                'type' => 'string',
                'example' => 'https://image-demo.oss-cn-hangzhou.aliyuncs.com/****.jpg',
              ),
              'Status' => 
              array (
                'title' => '子场景状态',
                'description' => '子场景状态 1.未重建 2.中间模型重建中 3.中间模型重建完成 4.待重建 5.服务商重建中 6.服务商重建完成 7.已发布 8.发布中',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '1',
              ),
              'GmtCreate' => 
              array (
                'title' => '创建时间',
                'description' => '创建时间',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '1621236933677',
              ),
              'GmtModified' => 
              array (
                'title' => '最后修改时间',
                'description' => '最后修改时间',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '1621236933677',
              ),
              'CubemapPath' => 
              array (
                'title' => '切图路径',
                'description' => '切图路径',
                'type' => 'string',
                'example' => 'https://image-demo.oss-cn-hangzhou.aliyuncs.com/cubemap/****',
              ),
              'OriginUrl' => 
              array (
                'title' => '原图路径',
                'description' => '原图路径',
                'type' => 'string',
                'example' => 'http://www.aliyun.com/test.jpg',
              ),
              'ImageUrl' => 
              array (
                'title' => '矫正后图的路径',
                'description' => '矫正后图的路径',
                'type' => 'string',
                'example' => 'http://www.aliyun.com/test1.jpg',
              ),
              'LayoutData' => 
              array (
                'title' => '墙线标注数据',
                'description' => '墙线标注数据',
                'type' => 'string',
                'example' => '{}',
              ),
              'Type' => 
              array (
                'title' => '资源类型，IMAGE：图片，VIDEO：视频',
                'description' => '资源类型',
                'type' => 'string',
                'example' => 'IMAGE',
              ),
              'Position' => 
              array (
                'title' => '视角',
                'description' => '视角坐标',
                'type' => 'string',
                'example' => '[-0.8928,-0.21467,0.39603]',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"4F882EA7-3A1D-0113-94E4-70162C4****\\",\\n  \\"Code\\": 200,\\n  \\"Success\\": true,\\n  \\"Message\\": \\"success\\",\\n  \\"Id\\": \\"1234***\\",\\n  \\"Name\\": \\"子场景A\\",\\n  \\"ResourceId\\": \\"1234***\\",\\n  \\"Url\\": \\"https://image-demo.oss-cn-hangzhou.aliyuncs.com/****.jpg\\",\\n  \\"CoverUrl\\": \\"https://image-demo.oss-cn-hangzhou.aliyuncs.com/****.jpg\\",\\n  \\"Status\\": 1,\\n  \\"GmtCreate\\": 1621236933677,\\n  \\"GmtModified\\": 1621236933677,\\n  \\"CubemapPath\\": \\"https://image-demo.oss-cn-hangzhou.aliyuncs.com/cubemap/****\\",\\n  \\"OriginUrl\\": \\"http://www.aliyun.com/test.jpg\\",\\n  \\"ImageUrl\\": \\"http://www.aliyun.com/test1.jpg\\",\\n  \\"LayoutData\\": \\"{}\\",\\n  \\"Type\\": \\"IMAGE\\",\\n  \\"Position\\": \\"[-0.8928,-0.21467,0.39603]\\"\\n}","errorExample":""},{"type":"xml","example":"<DetailSubSceneResponse>\\n    <RequestId>4F882EA7-3A1D-0113-94E4-70162C4****</RequestId>\\n    <Code>200</Code>\\n    <Success>true</Success>\\n    <Message>success</Message>\\n    <Id>1234***</Id>\\n    <Name>子场景A</Name>\\n    <ResourceId>1234***</ResourceId>\\n    <Url>https://image-demo.oss-cn-hangzhou.aliyuncs.com/****.jpg</Url>\\n    <CoverUrl>https://image-demo.oss-cn-hangzhou.aliyuncs.com/****.jpg</CoverUrl>\\n    <Status>1</Status>\\n    <GmtCreate>1621236933677</GmtCreate>\\n    <GmtModified>1621236933677</GmtModified>\\n    <CubemapPath>https://image-demo.oss-cn-hangzhou.aliyuncs.com/cubemap/****</CubemapPath>\\n    <OriginUrl>http://www.aliyun.com/test.jpg</OriginUrl>\\n    <ImageUrl>http://www.aliyun.com/test1.jpg</ImageUrl>\\n    <LayoutData>{}</LayoutData>\\n    <Type>IMAGE</Type>\\n    <Position>[-0.8928,-0.21467,0.39603]</Position>\\n</DetailSubSceneResponse>","errorExample":""}]',
      'title' => '查看子场景信息',
    ),
    'ListSubScene' => 
    array (
      'summary' => '分页查看子场景列表。',
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
          'name' => 'SceneId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '场景ID',
            'description' => '场景ID（加密ID）',
            'type' => 'string',
            'required' => true,
            'example' => 'L2omaCMmQZZkEg4pE****',
          ),
        ),
        1 => 
        array (
          'name' => 'PageNum',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '页码',
            'description' => '页码',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'minimum' => '1',
            'example' => '1',
          ),
        ),
        2 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '页长',
            'description' => '页长',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'minimum' => '1',
            'example' => '20',
          ),
        ),
        3 => 
        array (
          'name' => 'ShowLayoutData',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否返回标注数据',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
          ),
        ),
        4 => 
        array (
          'name' => 'SortField',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '排序字段，默认：NAME（名称），SEQUENCE（自定义排序）',
            'description' => '排序字段，默认：NAME（名称），SEQUENCE（自定义序列）',
            'type' => 'string',
            'required' => false,
            'example' => 'NAME',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '响应',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => '请求ID，与入参requestId对应',
                'description' => '请求ID，与入参requestId对应',
                'type' => 'string',
                'example' => '4F882EA7-3A1D-0113-94E4-70162C4****',
              ),
              'Code' => 
              array (
                'title' => '返回码',
                'description' => '返回码',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '200',
              ),
              'Success' => 
              array (
                'title' => '是否请求成功',
                'description' => '是否请求成功',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Message' => 
              array (
                'title' => '错误消息',
                'description' => '错误消息',
                'type' => 'string',
                'example' => 'success',
              ),
              'HasNext' => 
              array (
                'title' => '是否有下一页',
                'description' => '是否有下一页',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'CurrentPage' => 
              array (
                'title' => '当前页',
                'description' => '当前页',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '1',
              ),
              'TotalPage' => 
              array (
                'title' => '总页数',
                'description' => '总页数',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '5',
              ),
              'Count' => 
              array (
                'title' => '数据总条数',
                'description' => '数据总条数',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '100',
              ),
              'List' => 
              array (
                'title' => '子场景列表集',
                'description' => '子场景列表集',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Id' => 
                    array (
                      'title' => '子场景ID',
                      'description' => '子场景ID（加密ID）',
                      'type' => 'string',
                      'example' => 'xsfwsddd==',
                    ),
                    'Name' => 
                    array (
                      'title' => '子场景名称',
                      'description' => '子场景名称',
                      'type' => 'string',
                      'example' => '子场景A',
                    ),
                    'ResourceId' => 
                    array (
                      'title' => '图片ID/视频ID',
                      'description' => '图片ID/视频ID（加密ID）',
                      'type' => 'string',
                      'example' => '2345****',
                    ),
                    'Url' => 
                    array (
                      'title' => '图片路径/视频路径',
                      'description' => '图片路径/视频路径',
                      'type' => 'string',
                      'example' => 'https:/image-demo.oss-cn-hangzhou.aliyuncs.com/****.jpg',
                    ),
                    'CoverUrl' => 
                    array (
                      'title' => '图片路径/视频封面路径',
                      'description' => '图片路径/视频封面路径',
                      'type' => 'string',
                      'example' => 'https:/image-demo.oss-cn-hangzhou.aliyuncs.com/****.jpg',
                    ),
                    'Status' => 
                    array (
                      'title' => '子场景状态 1.未重建，      * 2.中间模型重建中，      * 3.中间模型重建完成，      * 4.待重建，      * 5.服务商重建中，      * 6.服务商重建完成，      * 7.已发布      * 8.发布中',
                      'description' => '子场景状态 1.未重建 2.中间模型重建中 3.中间模型重建完成 4.待重建 5.服务商重建中 6.服务商重建完成 7.已发布 8.发布中',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1',
                    ),
                    'GmtCreate' => 
                    array (
                      'title' => '创建时间',
                      'description' => '创建时间',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1621236933677',
                    ),
                    'GmtModified' => 
                    array (
                      'title' => '最后修改时间',
                      'description' => '最后修改时间',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1621236933677',
                    ),
                    'ResourceName' => 
                    array (
                      'title' => '资源名称',
                      'description' => '资源名称（有两种：jpg/mp4）
',
                      'type' => 'string',
                      'example' => 'xxxx.jpg',
                    ),
                    'CubemapPath' => 
                    array (
                      'title' => '切图的路径',
                      'description' => '切图的路径（注意：有两种格式）
1、****/pano_src
2、****/cubemap',
                      'type' => 'string',
                      'example' => '****/pano_src',
                    ),
                    'Deleted' => 
                    array (
                      'title' => '是否删除',
                      'description' => '是否删除',
                      'type' => 'boolean',
                      'example' => 'true',
                    ),
                    'OriginUrl' => 
                    array (
                      'title' => '原图地址',
                      'description' => '原图地址',
                      'type' => 'string',
                      'example' => 'https:/image-demo.oss-cn-hangzhou.aliyuncs.com/****.jpg',
                    ),
                    'BaseImageUrl' => 
                    array (
                      'title' => '2k基准图路径',
                      'description' => '2k基准图路径',
                      'type' => 'string',
                      'example' => 'https:/image-demo.oss-cn-hangzhou.aliyuncs.com/****.jpg',
                    ),
                    'LayoutData' => 
                    array (
                      'title' => '标注数据',
                      'description' => '标注数据',
                      'type' => 'string',
                      'example' => '{}',
                    ),
                    'Type' => 
                    array (
                      'title' => '上传资源类型',
                      'description' => '上传资源类型（IMAGE、VIDEO）',
                      'type' => 'string',
                      'example' => 'IMAGE',
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"4F882EA7-3A1D-0113-94E4-70162C4****\\",\\n  \\"Code\\": 200,\\n  \\"Success\\": true,\\n  \\"Message\\": \\"success\\",\\n  \\"HasNext\\": true,\\n  \\"CurrentPage\\": 1,\\n  \\"TotalPage\\": 5,\\n  \\"Count\\": 100,\\n  \\"List\\": [\\n    {\\n      \\"Id\\": \\"xsfwsddd==\\",\\n      \\"Name\\": \\"子场景A\\",\\n      \\"ResourceId\\": \\"2345****\\",\\n      \\"Url\\": \\"https:/image-demo.oss-cn-hangzhou.aliyuncs.com/****.jpg\\",\\n      \\"CoverUrl\\": \\"https:/image-demo.oss-cn-hangzhou.aliyuncs.com/****.jpg\\",\\n      \\"Status\\": 1,\\n      \\"GmtCreate\\": 1621236933677,\\n      \\"GmtModified\\": 1621236933677,\\n      \\"ResourceName\\": \\"xxxx.jpg\\",\\n      \\"CubemapPath\\": \\"****/pano_src\\",\\n      \\"Deleted\\": true,\\n      \\"OriginUrl\\": \\"https:/image-demo.oss-cn-hangzhou.aliyuncs.com/****.jpg\\",\\n      \\"BaseImageUrl\\": \\"https:/image-demo.oss-cn-hangzhou.aliyuncs.com/****.jpg\\",\\n      \\"LayoutData\\": \\"{}\\",\\n      \\"Type\\": \\"IMAGE\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<ListSubSceneResponse>\\n    <RequestId>4F882EA7-3A1D-0113-94E4-70162C4****</RequestId>\\n    <Code>200</Code>\\n    <Success>true</Success>\\n    <Message>success</Message>\\n    <HasNext>true</HasNext>\\n    <CurrentPage>1</CurrentPage>\\n    <TotalPage>5</TotalPage>\\n    <Count>100</Count>\\n    <List>\\n        <Id>xsfwsddd==</Id>\\n        <Name>子场景A</Name>\\n        <ResourceId>2345****</ResourceId>\\n        <Url>https:/image-demo.oss-cn-hangzhou.aliyuncs.com/****.jpg</Url>\\n        <CoverUrl>https:/image-demo.oss-cn-hangzhou.aliyuncs.com/****.jpg</CoverUrl>\\n        <Status>1</Status>\\n        <GmtCreate>1621236933677</GmtCreate>\\n        <GmtModified>1621236933677</GmtModified>\\n        <ResourceName>xxxx.jpg</ResourceName>\\n        <CubemapPath>****/pano_src</CubemapPath>\\n        <Deleted>true</Deleted>\\n        <OriginUrl>https:/image-demo.oss-cn-hangzhou.aliyuncs.com/****.jpg</OriginUrl>\\n        <BaseImageUrl>https:/image-demo.oss-cn-hangzhou.aliyuncs.com/****.jpg</BaseImageUrl>\\n        <LayoutData>{}</LayoutData>\\n        <Type>IMAGE</Type>\\n    </List>\\n</ListSubSceneResponse>","errorExample":""}]',
      'title' => '分页查看子场景列表',
    ),
    'AddProject' => 
    array (
      'summary' => '创建一个新项目。',
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
          'name' => 'BusinessId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '业务id',
            'description' => '业务id,默认取值5（未归属项目），无特殊需求不要填写此参数',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '5432****',
          ),
        ),
        1 => 
        array (
          'name' => 'Name',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '项目名称',
            'description' => '项目名称',
            'type' => 'string',
            'required' => true,
            'example' => '项目A',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '响应',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => '请求ID，与入参requestId对应',
                'description' => '请求ID，与入参requestId对应',
                'type' => 'string',
                'example' => '344794c32937474a9c59eb130936****',
              ),
              'Code' => 
              array (
                'title' => '返回码',
                'description' => '返回码',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '200',
              ),
              'Success' => 
              array (
                'title' => '是否请求成功',
                'description' => '是否请求成功',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Message' => 
              array (
                'title' => '错误消息',
                'description' => '错误消息',
                'type' => 'string',
                'example' => 'success',
              ),
              'Id' => 
              array (
                'title' => '项目ID',
                'description' => '项目ID',
                'type' => 'string',
                'example' => '1234****',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"344794c32937474a9c59eb130936****\\",\\n  \\"Code\\": 200,\\n  \\"Success\\": true,\\n  \\"Message\\": \\"success\\",\\n  \\"Id\\": \\"1234****\\"\\n}","errorExample":""},{"type":"xml","example":"<AddProjectResponse>\\n    <RequestId>344794c32937474a9c59eb130936****</RequestId>\\n    <Code>200</Code>\\n    <Success>true</Success>\\n    <Message>success</Message>\\n    <Id>1234****</Id>\\n</AddProjectResponse>","errorExample":""}]',
      'title' => '创建新项目',
    ),
    'DropProject' => 
    array (
      'summary' => '删除已有项目，项目下存在已发布场景的不支持删除。',
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
      ),
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'delete',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ProjectId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '项目ID',
            'description' => '项目ID',
            'type' => 'string',
            'required' => true,
            'example' => '3242****',
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
              'RequestId' => 
              array (
                'title' => '请求ID与入参中requestId对应',
                'description' => '请求ID与入参中requestId对应',
                'type' => 'string',
                'example' => '4F882EA7-3A1D-0113-94E4-70162C4B***',
              ),
              'Code' => 
              array (
                'title' => '返回码',
                'description' => '返回码',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '200',
              ),
              'Success' => 
              array (
                'title' => '是否请求成功',
                'description' => '是否请求成功',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Message' => 
              array (
                'title' => '错误消息',
                'description' => '错误消息',
                'type' => 'string',
                'example' => 'success',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"4F882EA7-3A1D-0113-94E4-70162C4B***\\",\\n  \\"Code\\": 200,\\n  \\"Success\\": true,\\n  \\"Message\\": \\"success\\"\\n}","errorExample":""},{"type":"xml","example":"<DropProjectResponse>\\n    <RequestId>4F882EA7-3A1D-0113-94E4-70162C4B***</RequestId>\\n    <Code>200</Code>\\n    <Success>true</Success>\\n    <Message>success</Message>\\n</DropProjectResponse>","errorExample":""}]',
      'title' => '删除项目',
    ),
    'UpdateProject' => 
    array (
      'summary' => '更新指定的项目信息。',
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
      ),
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Id',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '项目id',
            'description' => '项目ID',
            'type' => 'string',
            'required' => true,
            'example' => '1234****',
          ),
        ),
        1 => 
        array (
          'name' => 'Name',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '项目名称',
            'description' => '项目名称',
            'type' => 'string',
            'required' => false,
            'example' => '项目A',
          ),
        ),
        2 => 
        array (
          'name' => 'BusinessId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '业务Id',
            'description' => '业务ID',
            'type' => 'string',
            'required' => false,
            'example' => '5432****',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '响应',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => '请求ID，与入参requestId对应',
                'description' => '请求ID，与入参requestId对应',
                'type' => 'string',
                'example' => '4F882EA7-3A1D-0113-94E4-70162C4B***',
              ),
              'Code' => 
              array (
                'title' => '返回码',
                'description' => '返回码',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '200',
              ),
              'Success' => 
              array (
                'title' => '是否请求成功',
                'description' => '是否请求成功',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Message' => 
              array (
                'title' => '错误消息',
                'description' => '错误消息',
                'type' => 'string',
                'example' => 'success',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"4F882EA7-3A1D-0113-94E4-70162C4B***\\",\\n  \\"Code\\": 200,\\n  \\"Success\\": true,\\n  \\"Message\\": \\"success\\"\\n}","errorExample":""},{"type":"xml","example":"<UpdateProjectResponse>\\n    <RequestId>4F882EA7-3A1D-0113-94E4-70162C4B***</RequestId>\\n    <Code>200</Code>\\n    <Success>true</Success>\\n    <Message>success</Message>\\n</UpdateProjectResponse>","errorExample":""}]',
      'title' => '更新项目名称',
    ),
    'DetailProject' => 
    array (
      'summary' => '查询项目基本信息。',
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
          'name' => 'Id',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '项目Id',
            'description' => '项目ID',
            'type' => 'string',
            'required' => true,
            'example' => '1234****',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '响应',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => '请求ID，与入参requestId对应',
                'description' => '请求ID，与入参requestId对应',
                'type' => 'string',
                'example' => '4F882EA7-3A1D-0113-94E4-70162C4B***',
              ),
              'Code' => 
              array (
                'title' => '返回码',
                'description' => '返回码',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '200',
              ),
              'Success' => 
              array (
                'title' => '是否请求成功',
                'description' => '是否请求成功',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Message' => 
              array (
                'title' => '错误消息',
                'description' => '错误消息',
                'type' => 'string',
                'example' => 'success',
              ),
              'Id' => 
              array (
                'title' => '项目ID',
                'description' => '项目ID',
                'type' => 'string',
                'example' => '1234****',
              ),
              'Name' => 
              array (
                'title' => '项目名称',
                'description' => '项目名称',
                'type' => 'string',
                'example' => '项目A',
              ),
              'BusinessId' => 
              array (
                'title' => '业务ID',
                'description' => '业务ID',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '5244****',
              ),
              'BusinessName' => 
              array (
                'title' => '业务名称',
                'description' => '业务名称',
                'type' => 'string',
                'example' => '默认',
              ),
              'GmtCreate' => 
              array (
                'title' => '创建时间',
                'description' => '创建时间',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '1621236933677',
              ),
              'GmtModified' => 
              array (
                'title' => '最后修改时间',
                'description' => '最后修改时间',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '1621236933677',
              ),
              'Token' => 
              array (
                'title' => 'Token',
                'description' => 'Token',
                'type' => 'string',
                'example' => 'd989623696ab4f87a80b8d5b0b00****',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"4F882EA7-3A1D-0113-94E4-70162C4B***\\",\\n  \\"Code\\": 200,\\n  \\"Success\\": true,\\n  \\"Message\\": \\"success\\",\\n  \\"Id\\": \\"1234****\\",\\n  \\"Name\\": \\"项目A\\",\\n  \\"BusinessId\\": 0,\\n  \\"BusinessName\\": \\"默认\\",\\n  \\"GmtCreate\\": 1621236933677,\\n  \\"GmtModified\\": 1621236933677,\\n  \\"Token\\": \\"d989623696ab4f87a80b8d5b0b00****\\"\\n}","errorExample":""},{"type":"xml","example":"<DetailProjectResponse>\\n    <RequestId>4F882EA7-3A1D-0113-94E4-70162C4B***</RequestId>\\n    <Code>200</Code>\\n    <Success>true</Success>\\n    <Message>success</Message>\\n    <Id>1234****</Id>\\n    <Name>项目A</Name>\\n    <BusinessName>默认</BusinessName>\\n    <GmtCreate>1621236933677</GmtCreate>\\n    <GmtModified>1621236933677</GmtModified>\\n    <Token>d989623696ab4f87a80b8d5b0b00****</Token>\\n</DetailProjectResponse>","errorExample":""}]',
      'title' => '查询项目信息',
    ),
    'ListProject' => 
    array (
      'summary' => '分页获取所有项目列表。',
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
          'name' => 'PageNum',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '页码',
            'description' => '页码',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'docRequired' => false,
            'minimum' => '1',
            'example' => '1',
          ),
        ),
        1 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '页长',
            'description' => '页长',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'docRequired' => true,
            'maximum' => '1000',
            'minimum' => '1',
            'example' => '20',
          ),
        ),
        2 => 
        array (
          'name' => 'Name',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '项目名称（使用name%搜索）',
            'description' => '项目名称（使用name%搜索）',
            'type' => 'string',
            'required' => false,
            'example' => '项目A',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '响应',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => '请求ID，与入参requestId对应',
                'description' => '请求ID，与入参requestId对应',
                'type' => 'string',
                'example' => '4F882EA7-3A1D-0113-94E4-70162C4B***',
              ),
              'Code' => 
              array (
                'title' => '返回码',
                'description' => '返回码',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '200',
              ),
              'Success' => 
              array (
                'title' => '是否请求成功',
                'description' => '是否请求成功',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Message' => 
              array (
                'title' => '错误消息',
                'description' => '错误消息',
                'type' => 'string',
                'example' => 'success',
              ),
              'HasNext' => 
              array (
                'title' => '是否有下一页',
                'description' => '是否有下一页',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'CurrentPage' => 
              array (
                'title' => '当前页',
                'description' => '当前页',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '1',
              ),
              'TotalPage' => 
              array (
                'title' => '总页数',
                'description' => '总页数',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '5',
              ),
              'Count' => 
              array (
                'title' => 'count',
                'description' => 'count',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '100',
              ),
              'List' => 
              array (
                'title' => '项目数据',
                'description' => '项目数据',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Id' => 
                    array (
                      'title' => '项目ID',
                      'description' => '项目ID',
                      'type' => 'string',
                      'example' => '1234****',
                    ),
                    'Name' => 
                    array (
                      'title' => '项目名称',
                      'description' => '项目名称',
                      'type' => 'string',
                      'example' => '项目A',
                    ),
                    'BusinessId' => 
                    array (
                      'title' => '业务ID',
                      'description' => '业务ID',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '5244****',
                    ),
                    'BusinessName' => 
                    array (
                      'title' => '业务名称',
                      'description' => '业务名称',
                      'type' => 'string',
                      'example' => '默认',
                    ),
                    'CreateTime' => 
                    array (
                      'title' => '创建时间',
                      'description' => '创建时间',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '123123',
                    ),
                    'ModifiedTime' => 
                    array (
                      'title' => '最后修改时间',
                      'description' => '最后修改时间',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '123214',
                    ),
                    'Token' => 
                    array (
                      'title' => 'Token',
                      'description' => 'Token',
                      'type' => 'string',
                      'example' => 'd989623696ab4f87a80b8d5b0b0****',
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"4F882EA7-3A1D-0113-94E4-70162C4B***\\",\\n  \\"Code\\": 200,\\n  \\"Success\\": true,\\n  \\"Message\\": \\"success\\",\\n  \\"HasNext\\": true,\\n  \\"CurrentPage\\": 1,\\n  \\"TotalPage\\": 5,\\n  \\"Count\\": 100,\\n  \\"List\\": [\\n    {\\n      \\"Id\\": \\"1234****\\",\\n      \\"Name\\": \\"项目A\\",\\n      \\"BusinessId\\": 0,\\n      \\"BusinessName\\": \\"默认\\",\\n      \\"CreateTime\\": 123123,\\n      \\"ModifiedTime\\": 123214,\\n      \\"Token\\": \\"d989623696ab4f87a80b8d5b0b0****\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<ListProjectResponse>\\n    <RequestId>4F882EA7-3A1D-0113-94E4-70162C4B***</RequestId>\\n    <Code>200</Code>\\n    <Success>true</Success>\\n    <Message>success</Message>\\n    <HasNext>true</HasNext>\\n    <CurrentPage>1</CurrentPage>\\n    <TotalPage>5</TotalPage>\\n    <Count>100</Count>\\n    <List>\\n        <Id>1234****</Id>\\n        <Name>项目A</Name>\\n        <BusinessName>默认</BusinessName>\\n        <CreateTime>123123</CreateTime>\\n        <ModifiedTime>123214</ModifiedTime>\\n        <Token>d989623696ab4f87a80b8d5b0b0****</Token>\\n    </List>\\n</ListProjectResponse>","errorExample":""}]',
      'title' => '分页查询项目列表',
    ),
    'AddMosaics' => 
    array (
      'summary' => '自定义区域打马赛克。',
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
          'name' => 'SubSceneId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '子场景ID',
            'description' => '子场景ID',
            'type' => 'string',
            'required' => true,
            'example' => 'skjjskjk****',
          ),
        ),
        1 => 
        array (
          'name' => 'MarkPosition',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '马赛克位置数据',
            'description' => '马赛克位置数据',
            'type' => 'string',
            'required' => true,
            'example' => '[{"x": 504,"y": 450,"w": 256,"h": 153}]',
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
              'RequestId' => 
              array (
                'title' => '请求ID，与入参requestId对应',
                'description' => '请求ID，与入参requestId对应',
                'type' => 'string',
                'example' => '3BCAD49D-2AC1-13EB-AC19-8C7A46C****',
              ),
              'Code' => 
              array (
                'title' => '返回码',
                'description' => '返回码',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '200',
              ),
              'Success' => 
              array (
                'title' => '是否请求成功',
                'description' => '是否请求成功',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Message' => 
              array (
                'title' => '错误消息',
                'description' => '错误消息',
                'type' => 'string',
                'example' => 'SUCCESS',
              ),
              'TaskId' => 
              array (
                'title' => '任务ID',
                'description' => '任务ID',
                'type' => 'string',
                'example' => 'OvFuuwhfoAX8uIpxC/GJ****',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"3BCAD49D-2AC1-13EB-AC19-8C7A46C****\\",\\n  \\"Code\\": 200,\\n  \\"Success\\": true,\\n  \\"Message\\": \\"SUCCESS\\",\\n  \\"TaskId\\": \\"OvFuuwhfoAX8uIpxC/GJ****\\"\\n}","errorExample":""},{"type":"xml","example":"<AddMosaicsResponse>\\n    <RequestId>3BCAD49D-2AC1-13EB-AC19-8C7A46C****</RequestId>\\n    <Code>200</Code>\\n    <Success>true</Success>\\n    <Message>SUCCESS</Message>\\n    <TaskId>OvFuuwhfoAX8uIpxC/GJ****</TaskId>\\n</AddMosaicsResponse>","errorExample":""}]',
      'title' => '添加马赛克',
    ),
    'GetHotspotConfig' => 
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
        1 => 
        array (
          'APP' => 
          array (
          ),
        ),
        2 => 
        array (
          'PrivateKey' => 
          array (
          ),
        ),
        3 => 
        array (
          'BearerToken' => 
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
          'name' => 'PreviewToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '预览token',
            'type' => 'string',
            'required' => true,
            'example' => '344794c32937474a9c59eb130936****',
          ),
        ),
        1 => 
        array (
          'name' => 'Type',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '0 未发布， 1 已发布',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'example' => '0',
          ),
        ),
        2 => 
        array (
          'name' => 'Enabled',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否开启自用资源访问（需要在发布场景之前开启）',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true/false',
          ),
        ),
        3 => 
        array (
          'name' => 'Domain',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '自定义OSS域名（可为CDN域名）',
            'type' => 'string',
            'required' => false,
            'example' => 'www.aliyundoc.com',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '响应',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => '请求ID，与入参requestId对应',
                'description' => '请求ID',
                'type' => 'string',
                'example' => '4F882EA7-3A1D-0113-94E4-70162C4B***',
              ),
              'Code' => 
              array (
                'title' => '返回码',
                'description' => '返回码',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '200',
              ),
              'Success' => 
              array (
                'title' => '是否请求成功',
                'description' => '请求是否成功',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Message' => 
              array (
                'title' => '错误消息',
                'description' => '错误消息',
                'type' => 'string',
                'example' => 'success',
              ),
              'Data' => 
              array (
                'description' => '热点配置信息',
                'type' => 'string',
                'example' => 'config',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"4F882EA7-3A1D-0113-94E4-70162C4B***\\",\\n  \\"Code\\": 200,\\n  \\"Success\\": true,\\n  \\"Message\\": \\"success\\",\\n  \\"Data\\": \\"config\\"\\n}","errorExample":""},{"type":"xml","example":"<GetHotspotConfigResponse>\\n    <RequestId>4F882EA7-3A1D-0113-94E4-70162C4B***</RequestId>\\n    <Code>200</Code>\\n    <Success>true</Success>\\n    <Message>success</Message>\\n    <Data>config</Data>\\n</GetHotspotConfigResponse>","errorExample":""}]',
      'title' => '查询热点标注配置',
      'summary' => '查询热点标注配置,后处理时使用。',
    ),
    'GetHotspotTag' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
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
        1 => 
        array (
          'APP' => 
          array (
          ),
        ),
        2 => 
        array (
          'PrivateKey' => 
          array (
          ),
        ),
        3 => 
        array (
          'BearerToken' => 
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
          'name' => 'PreviewToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '预览token',
            'type' => 'string',
            'required' => false,
            'example' => '344794c32937474a9c59eb130936****',
          ),
        ),
        1 => 
        array (
          'name' => 'SubSceneUuid',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '子场景Uid
',
            'type' => 'string',
            'required' => false,
            'example' => '123456',
          ),
        ),
        2 => 
        array (
          'name' => 'Type',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '类型0：未发布。1：已发布',
            'type' => 'string',
            'required' => false,
            'example' => '1',
          ),
        ),
        3 => 
        array (
          'name' => 'Enabled',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否开启自用资源访问',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true/false',
          ),
        ),
        4 => 
        array (
          'name' => 'Domain',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '自定义OSS域名（可为CDN域名）',
            'type' => 'string',
            'required' => false,
            'example' => 'www.aliyundoc.com',
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
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '4F882EA7-3A1D-0113-94E4-70162C4B***',
              ),
              'ObjectString' => 
              array (
                'description' => '热点信息字符串',
                'type' => 'string',
                'example' => '"{}"',
              ),
              'Data' => 
              array (
                'description' => '热点信息',
                'type' => 'string',
                'example' => '{"watermarkImg":[],"enabledTitleTag":0}',
              ),
              'ErrMessage' => 
              array (
                'description' => '错误消息',
                'type' => 'string',
                'example' => 'success',
              ),
              'Success' => 
              array (
                'description' => '请求是否成功',
                'type' => 'boolean',
                'example' => 'true',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"4F882EA7-3A1D-0113-94E4-70162C4B***\\",\\n  \\"ObjectString\\": \\"\\\\\\"{}\\\\\\"\\",\\n  \\"Data\\": \\"{\\\\\\"watermarkImg\\\\\\":[],\\\\\\"enabledTitleTag\\\\\\":0}\\",\\n  \\"ErrMessage\\": \\"success\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<GetHotspotTagResponse>\\n    <RequestId>4F882EA7-3A1D-0113-94E4-70162C4B***</RequestId>\\n    <ObjectString>\\"{}\\"</ObjectString>\\n    <Data>json数据</Data>\\n    <ErrMessage>success</ErrMessage>\\n    <Success>true</Success>\\n</GetHotspotTagResponse>","errorExample":""}]',
      'title' => '获取热点标注信息',
      'summary' => '获取热点标注信息，后处理时使用。',
    ),
    'GetWindowConfig' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
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
        1 => 
        array (
          'APP' => 
          array (
          ),
        ),
        2 => 
        array (
          'PrivateKey' => 
          array (
          ),
        ),
        3 => 
        array (
          'BearerToken' => 
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
          'name' => 'PreviewToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '预览token',
            'type' => 'string',
            'required' => false,
            'example' => '5dc5c2dd927e45039dadb312384b****',
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
              'Data' => 
              array (
                'description' => '返回数据
',
                'type' => 'object',
                'example' => '2345****',
              ),
              'ObjectString' => 
              array (
                'description' => '配置信息JSON字符串',
                'type' => 'string',
                'example' => '"{}"',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '4F882EA7-3A1D-0113-94E4-70162C4****',
              ),
              'Success' => 
              array (
                'description' => '是否请求成功',
                'type' => 'boolean',
                'example' => 'success',
              ),
              'ErrMessage' => 
              array (
                'description' => '错误信息
',
                'type' => 'string',
                'example' => '错误信息',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidParameter',
            'errorMessage' => 'The specified parameter is invalid. For more information, see Signature Mechanism.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Data\\": {\\n    \\"test\\": \\"test\\",\\n    \\"test2\\": 1\\n  },\\n  \\"ObjectString\\": \\"\\\\\\"{}\\\\\\"\\",\\n  \\"RequestId\\": \\"4F882EA7-3A1D-0113-94E4-70162C4****\\",\\n  \\"Success\\": true,\\n  \\"ErrMessage\\": \\"错误信息\\"\\n}","errorExample":""},{"type":"xml","example":"<GetWindowConfigResponse>\\n    <ObjectString>json字符串</ObjectString>\\n    <RequestId>4F882EA7-3A1D-0113-94E4-70162C4****</RequestId>\\n    <Success>false</Success>\\n    <ErrMessage>错误信息</ErrMessage>\\n</GetWindowConfigResponse>","errorExample":""}]',
      'title' => '获取系统配置信息',
      'summary' => '获取系统配置信息，预览、后处理时使用。',
    ),
    'PublishHotspot' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
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
        1 => 
        array (
          'APP' => 
          array (
          ),
        ),
        2 => 
        array (
          'PrivateKey' => 
          array (
          ),
        ),
        3 => 
        array (
          'BearerToken' => 
          array (
          ),
        ),
      ),
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'none',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ParamTag',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '热点标签数据',
            'type' => 'string',
            'required' => false,
            'example' => 'json字符串',
          ),
        ),
        1 => 
        array (
          'name' => 'SubSceneUuid',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '子场景ID',
            'type' => 'string',
            'required' => false,
            'example' => '2345****',
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
              'Data' => 
              array (
                'description' => '请求结果',
                'type' => 'object',
                'example' => '2345****',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '4F882EA7-3A1D-0113-94E4-70162C4****',
              ),
              'Success' => 
              array (
                'description' => '是否成功',
                'type' => 'boolean',
                'example' => 'success',
              ),
              'ErrMessage' => 
              array (
                'description' => '错误信息
',
                'type' => 'string',
                'example' => '错误信息',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidParameter',
            'errorMessage' => 'The specified parameter is invalid. For more information, see Signature Mechanism.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Data\\": {\\n    \\"test\\": \\"test\\",\\n    \\"test2\\": 1\\n  },\\n  \\"RequestId\\": \\"4F882EA7-3A1D-0113-94E4-70162C4****\\",\\n  \\"Success\\": true,\\n  \\"ErrMessage\\": \\"错误信息\\"\\n}","errorExample":""},{"type":"xml","example":"<PublishHotspotResponse>\\n    <RequestId>4F882EA7-3A1D-0113-94E4-70162C4****</RequestId>\\n    <Success>false</Success>\\n    <ErrMessage>错误信息</ErrMessage>\\n</PublishHotspotResponse>","errorExample":""}]',
      'title' => '发布热点信息',
      'summary' => '发布热点信息。',
    ),
    'SaveHotspotConfig' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
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
        1 => 
        array (
          'APP' => 
          array (
          ),
        ),
        2 => 
        array (
          'PrivateKey' => 
          array (
          ),
        ),
        3 => 
        array (
          'BearerToken' => 
          array (
          ),
        ),
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
          'name' => 'ParamTag',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '配置信息',
            'type' => 'string',
            'required' => false,
            'example' => '{enabledTitleTag: 0, watermarkImg: []}',
          ),
        ),
        1 => 
        array (
          'name' => 'PreviewToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '预览token',
            'type' => 'string',
            'required' => false,
            'example' => '5dc5c2dd927e45039dadb312384b****',
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
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '4F882EA7-3A1D-0113-94E4-70162C4****',
              ),
              'Success' => 
              array (
                'description' => '是否成功',
                'type' => 'boolean',
                'example' => 'success',
              ),
              'ErrMessage' => 
              array (
                'description' => '错误信息',
                'type' => 'string',
                'example' => '错误信息',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidParameter',
            'errorMessage' => 'The specified parameter is invalid. For more information, see Signature Mechanism.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"4F882EA7-3A1D-0113-94E4-70162C4****\\",\\n  \\"Success\\": true,\\n  \\"ErrMessage\\": \\"错误信息\\"\\n}","errorExample":""},{"type":"xml","example":"<SaveHotspotConfigResponse>\\n    <RequestId>4F882EA7-3A1D-0113-94E4-70162C4****</RequestId>\\n    <Success>false</Success>\\n    <ErrMessage>错误信息</ErrMessage>\\n</SaveHotspotConfigResponse>","errorExample":""}]',
      'title' => '保存热点标注配置',
      'summary' => '保存热点标注配置，后处理时使用。',
    ),
    'SaveHotspotTag' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
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
        1 => 
        array (
          'APP' => 
          array (
          ),
        ),
        2 => 
        array (
          'PrivateKey' => 
          array (
          ),
        ),
        3 => 
        array (
          'BearerToken' => 
          array (
          ),
        ),
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
          'name' => 'ParamTag',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '热点标签数据',
            'type' => 'string',
            'required' => false,
            'example' => 'json字符串',
          ),
        ),
        1 => 
        array (
          'name' => 'SubSceneUuid',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '子场景ID',
            'type' => 'string',
            'required' => false,
            'example' => '2345****',
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
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '4F882EA7-3A1D-0113-94E4-70162C4****',
              ),
              'Success' => 
              array (
                'description' => '是否请求成功',
                'type' => 'boolean',
                'example' => 'success',
              ),
              'ErrMessage' => 
              array (
                'description' => '错误信息',
                'type' => 'string',
                'example' => '错误信息',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidParameter',
            'errorMessage' => 'The specified parameter is invalid. For more information, see Signature Mechanism.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"4F882EA7-3A1D-0113-94E4-70162C4****\\",\\n  \\"Success\\": true,\\n  \\"ErrMessage\\": \\"错误信息\\"\\n}","errorExample":""},{"type":"xml","example":"<SaveHotspotTagResponse>\\n    <RequestId>4F882EA7-3A1D-0113-94E4-70162C4****</RequestId>\\n    <Success>false</Success>\\n    <ErrMessage>错误信息</ErrMessage>\\n</SaveHotspotTagResponse>","errorExample":""}]',
      'title' => '保存热点标注信息',
      'summary' => '保存热点标注信息，后处理时使用。',
    ),
    'TempPreviewStatus' => 
    array (
      'summary' => '查询预览任务状态，调用TempPreview后可以使用此接口查看任务状态，当任务结束后才可以使用预览链接进行预览，需要在调用TempPreview接口后10分钟之内调用。',
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
          'name' => 'SceneId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '任务ID',
            'description' => '场景ID',
            'type' => 'string',
            'required' => true,
            'example' => 'm+0cmndEGjg9pv/hy4jh****',
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
              'RequestId' => 
              array (
                'title' => '请求ID，与入参requestId对应',
                'description' => '请求ID，与入参requestId对应',
                'type' => 'string',
                'example' => '4F882EA7-3A1D-0113-94E4-70162C4****',
              ),
              'Code' => 
              array (
                'title' => '返回码',
                'description' => '返回码',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '200',
              ),
              'Success' => 
              array (
                'title' => '是否请求成功',
                'description' => '是否请求成功',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Message' => 
              array (
                'title' => '错误消息',
                'description' => '错误消息',
                'type' => 'string',
                'example' => 'success',
              ),
              'Status' => 
              array (
                'title' => '状态标识',
                'description' => 'processing：处理中 succeed：成功 failed：失败',
                'type' => 'string',
                'example' => 'processing',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"4F882EA7-3A1D-0113-94E4-70162C4****\\",\\n  \\"Code\\": 200,\\n  \\"Success\\": true,\\n  \\"Message\\": \\"success\\",\\n  \\"Status\\": \\"processing\\"\\n}","errorExample":""},{"type":"xml","example":"<TempPreviewStatusResponse>\\n    <RequestId>4F882EA7-3A1D-0113-94E4-70162C4****</RequestId>\\n    <Code>200</Code>\\n    <Success>true</Success>\\n    <Message>success</Message>\\n    <Status>processing</Status>\\n</TempPreviewStatusResponse>","errorExample":""}]',
      'title' => '查询预览任务状态',
      'description' => '当预览任务成功结束后才可以使用预览链接进行预览，使用[预览](https://help.aliyun.com/document_detail/254008.html)接口发起预览任务后10分钟内可使用此接口获取预览任务状态。',
    ),
    'GetSingleConnData' => 
    array (
      'summary' => '获取单图的关联信息。',
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
          'name' => 'SubSceneId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '子场景ID',
            'description' => '子场景ID',
            'type' => 'string',
            'required' => true,
            'minimum' => '1',
            'example' => '1234****',
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
              'RequestId' => 
              array (
                'title' => '请求ID，与入参requestId对应',
                'description' => '请求ID，与入参requestId对应',
                'type' => 'string',
                'example' => '4F882EA7-3A1D-0113-94E4-70162C4****',
              ),
              'Code' => 
              array (
                'title' => '返回码',
                'description' => '返回码',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '200',
              ),
              'Success' => 
              array (
                'title' => '是否请求成功',
                'description' => '是否请求成功',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Message' => 
              array (
                'title' => '错误消息',
                'description' => '错误消息',
                'type' => 'string',
                'example' => 'success',
              ),
              'Version' => 
              array (
                'title' => '版本',
                'description' => '版本',
                'type' => 'string',
                'example' => '2.1',
              ),
              'List' => 
              array (
                'title' => '关联信息',
                'description' => '关联信息',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Id' => 
                    array (
                      'title' => 'ID',
                      'description' => 'ID',
                      'type' => 'string',
                      'example' => '1#234@abc',
                    ),
                    'MapId' => 
                    array (
                      'title' => '关联ID',
                      'description' => '关联ID',
                      'type' => 'string',
                      'example' => '1#567#def',
                    ),
                    'Type' => 
                    array (
                      'title' => 'outer:外关联 inner：内关联 stair：楼梯关联',
                      'description' => 'outer：外关联 inner：内关联 stair：楼梯关联',
                      'type' => 'string',
                      'example' => 'outer',
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"4F882EA7-3A1D-0113-94E4-70162C4****\\",\\n  \\"Code\\": 200,\\n  \\"Success\\": true,\\n  \\"Message\\": \\"success\\",\\n  \\"Version\\": \\"2.1\\",\\n  \\"List\\": [\\n    {\\n      \\"Id\\": \\"1#234@abc\\",\\n      \\"MapId\\": \\"1#567#def\\",\\n      \\"Type\\": \\"outer\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<GetSingleConnDataResponse>\\n    <RequestId>4F882EA7-3A1D-0113-94E4-70162C4****</RequestId>\\n    <Code>200</Code>\\n    <Success>true</Success>\\n    <Message>success</Message>\\n    <Version>2.1</Version>\\n    <List>\\n        <Id>1#234@abc</Id>\\n        <MapId>1#567#def</MapId>\\n        <Type>outer</Type>\\n    </List>\\n</GetSingleConnDataResponse>","errorExample":""}]',
      'title' => '获取单图的关联信息',
    ),
    'GetTaskStatus' => 
    array (
      'summary' => '查询任务状态，可以查询所有类型任务状态。',
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
          'name' => 'TaskId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '任务ID',
            'description' => '任务ID',
            'type' => 'string',
            'required' => true,
            'example' => '1234****',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '响应',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => '请求ID，与入参requestId对应',
                'description' => '请求ID，与入参requestId对应',
                'type' => 'string',
                'example' => '4F882EA7-3A1D-0113-94E4-70162C4****',
              ),
              'Code' => 
              array (
                'title' => '返回码',
                'description' => '返回码',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '200',
              ),
              'Success' => 
              array (
                'title' => '是否请求成功',
                'description' => '是否请求成功',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Message' => 
              array (
                'title' => '错误消息',
                'description' => '错误消息',
                'type' => 'string',
                'example' => 'success',
              ),
              'Status' => 
              array (
                'title' => '未开始 :init 处理中 : processing    失败 :failure   完成 :succeed  取消 :canceled',
                'description' => '未开始 :init 处理中 : processing    失败 :failed   完成 :succeed  取消 :canceled',
                'type' => 'string',
                'example' => 'init',
              ),
              'Type' => 
              array (
                'title' => '墙线预测: wall_line 切图: cut_image   重建: build  直角优化：right_angle_optimization  其他：other',
                'description' => '墙线预测：wall_line 切图：cut_image 重建：build 直角优化：right_angle_optimization 其他：other	',
                'type' => 'string',
                'example' => 'wallline',
              ),
              'ErrorCode' => 
              array (
                'title' => '任务执行失败错误码',
                'description' => '任务执行失败错误码',
                'type' => 'string',
                'example' => '2001',
              ),
              'ErrorMsg' => 
              array (
                'title' => '任务执行失败错误消息',
                'description' => '任务执行失败错误消息',
                'type' => 'string',
                'example' => '未检测到墙线',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"4F882EA7-3A1D-0113-94E4-70162C4****\\",\\n  \\"Code\\": 200,\\n  \\"Success\\": true,\\n  \\"Message\\": \\"success\\",\\n  \\"Status\\": \\"init\\",\\n  \\"Type\\": \\"wallline\\",\\n  \\"ErrorCode\\": \\"2001\\",\\n  \\"ErrorMsg\\": \\"未检测到墙线\\"\\n}","errorExample":""},{"type":"xml","example":"<GetTaskStatusResponse>\\n    <RequestId>4F882EA7-3A1D-0113-94E4-70162C4****</RequestId>\\n    <Code>200</Code>\\n    <Success>true</Success>\\n    <Message>success</Message>\\n    <Status>init</Status>\\n    <Type>wallline</Type>\\n    <ErrorCode>2001</ErrorCode>\\n    <ErrorMsg>未检测到墙线</ErrorMsg>\\n</GetTaskStatusResponse>","errorExample":""}]',
      'title' => '查询任务状态',
    ),
    'RectVertical' => 
    array (
      'summary' => '对指定子场景下的图片进行垂直矫正，矫正后会删除该子场景关联关系。',
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
      ),
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'none',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'SubSceneId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '子场景ID',
            'description' => '子场景ID',
            'type' => 'string',
            'required' => true,
            'example' => '1234****',
          ),
        ),
        1 => 
        array (
          'name' => 'VerticalRect',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '矫正数据',
            'description' => '矫正数据',
            'type' => 'string',
            'required' => true,
            'example' => '{"844946777965268992":[[0.42418407210144654,0.33625107620738004,0.42620819117478337,0.635753199572695],[0.5158627587152769,0.3071978991900134,0.5177513758740194,0.6312118011104786],[0.582693212445534,0.3733969265933281,0.5807612760319687,0.6139402811250833]]}',
          ),
        ),
        2 => 
        array (
          'name' => 'DetectDoor',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '是否开启门预测',
            'description' => '是否开启门预测',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
          ),
        ),
        3 => 
        array (
          'name' => 'CountDetectDoor',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '需要预测的门的数量',
            'description' => '需要预测的门的数量,DetectDoor为true时生效',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '2',
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
              'RequestId' => 
              array (
                'title' => '请求ID，与入参requestId对应',
                'description' => '请求ID，与入参requestId对应',
                'type' => 'string',
                'example' => '4F882EA7-3A1D-0113-94E4-70162C4****',
              ),
              'Code' => 
              array (
                'title' => '返回码',
                'description' => '返回码',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '200',
              ),
              'Success' => 
              array (
                'title' => '是否请求成功',
                'description' => '是否请求成功',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Message' => 
              array (
                'title' => '错误消息',
                'description' => '错误消息',
                'type' => 'string',
                'example' => 'success',
              ),
              'TaskId' => 
              array (
                'title' => '错误消息',
                'description' => '任务ID',
                'type' => 'string',
                'example' => 'syuwoiewyieiyy****',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"4F882EA7-3A1D-0113-94E4-70162C4****\\",\\n  \\"Code\\": 200,\\n  \\"Success\\": true,\\n  \\"Message\\": \\"success\\",\\n  \\"TaskId\\": \\"syuwoiewyieiyy****\\"\\n}","errorExample":""},{"type":"xml","example":"<RectVerticalResponse>\\n    <RequestId>4F882EA7-3A1D-0113-94E4-70162C4****</RequestId>\\n    <Code>200</Code>\\n    <Success>true</Success>\\n    <Message>success</Message>\\n    <TaskId>syuwoiewyieiyy****</TaskId>\\n</RectVerticalResponse>","errorExample":""}]',
      'title' => '垂直矫正',
    ),
    'GetLayoutData' => 
    array (
      'summary' => '获取最新标注信息，标注时使用。',
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
          'name' => 'SubSceneId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '子场景ID',
            'description' => '子场景ID',
            'type' => 'string',
            'required' => true,
            'example' => '1234****',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '响应',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => '请求ID，与入参requestId对应',
                'description' => '请求ID，与入参requestId对应',
                'type' => 'string',
                'example' => '4F882EA7-3A1D-0113-94E4-70162C4****',
              ),
              'Code' => 
              array (
                'title' => '返回码',
                'description' => '返回码',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '200',
              ),
              'Success' => 
              array (
                'title' => '是否请求成功',
                'description' => '是否请求成功',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Message' => 
              array (
                'title' => '错误消息',
                'description' => '错误消息',
                'type' => 'string',
                'example' => 'success',
              ),
              'Data' => 
              array (
                'title' => '标注信息',
                'description' => '标注信息',
                'type' => 'string',
                'example' => '{}',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"4F882EA7-3A1D-0113-94E4-70162C4****\\",\\n  \\"Code\\": 200,\\n  \\"Success\\": true,\\n  \\"Message\\": \\"success\\",\\n  \\"Data\\": \\"{}\\"\\n}","errorExample":""},{"type":"xml","example":"<GetLayoutDataResponse>\\n    <RequestId>4F882EA7-3A1D-0113-94E4-70162C4****</RequestId>\\n    <Code>200</Code>\\n    <Success>true</Success>\\n    <Message>success</Message>\\n    <Data>{}</Data>\\n</GetLayoutDataResponse>","errorExample":""}]',
      'title' => '获取最新标注信息',
    ),
    'TempPreview' => 
    array (
      'summary' => '重建后可以调用此预览接口获取预览链接。',
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
      ),
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'none',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'SceneId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '场景ID',
            'description' => '主场景ID',
            'type' => 'string',
            'required' => true,
            'example' => 'm+0cmndEGjg9pv/hy4jh****',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '响应',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => '请求ID，与入参requestId对应',
                'description' => '请求ID，与入参requestId对应',
                'type' => 'string',
                'example' => '4F882EA7-3A1D-0113-94E4-70162C4****',
              ),
              'Code' => 
              array (
                'title' => '返回码',
                'description' => '返回码',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '200',
              ),
              'Success' => 
              array (
                'title' => '是否请求成功',
                'description' => '是否请求成功',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Message' => 
              array (
                'title' => '错误消息',
                'description' => '错误消息',
                'type' => 'string',
                'example' => 'success',
              ),
              'PreviewUrl' => 
              array (
                'title' => '预览链接',
                'description' => '临时预览链接，12小时内有效',
                'type' => 'string',
                'example' => 'https://preview-lyj.aliyuncs.com/preview/temp/xxx****',
              ),
              'SceneId' => 
              array (
                'title' => '场景ID',
                'description' => '场景ID',
                'type' => 'string',
                'example' => 'm+0cmndEGjg9pv/hy4jh****',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"4F882EA7-3A1D-0113-94E4-70162C4****\\",\\n  \\"Code\\": 200,\\n  \\"Success\\": true,\\n  \\"Message\\": \\"success\\",\\n  \\"PreviewUrl\\": \\"https://preview-lyj.aliyuncs.com/preview/temp/xxx****\\",\\n  \\"SceneId\\": \\"m+0cmndEGjg9pv/hy4jh****\\"\\n}","errorExample":""},{"type":"xml","example":"<TempPreviewResponse>\\n    <RequestId>4F882EA7-3A1D-0113-94E4-70162C4****</RequestId>\\n    <Code>200</Code>\\n    <Success>true</Success>\\n    <Message>success</Message>\\n    <PreviewUrl>https://preview-lyj.aliyuncs.com/preview/temp/xxx****</PreviewUrl>\\n    <SceneId>m+0cmndEGjg9pv/hy4jh****</SceneId>\\n</TempPreviewResponse>","errorExample":""}]',
      'title' => '预览',
    ),
    'LabelBuild' => 
    array (
      'summary' => '3D模型重建。',
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
      ),
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'none',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'SceneId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '场景ID',
            'description' => '场景ID',
            'type' => 'string',
            'required' => true,
            'example' => '1234****',
          ),
        ),
        1 => 
        array (
          'name' => 'Mode',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '重建模式：MANUAL：手动（云端），默认，SEMI_AUTOMATIC：半自动（移动端）',
            'description' => 'MANUAL（手动）：仅限使用标注工具重建时使用此参数（默认调用参数）；
SEMI_AUTOMATIC（自动）：仅限基于App端进行自动化建模时使用；',
            'type' => 'string',
            'required' => false,
            'example' => 'MANUAL（手动）/SEMI_AUTOMATIC（自动）',
          ),
        ),
        2 => 
        array (
          'name' => 'WallHeight',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '墙高，默认0不设置，范围200-1000. 单位cm',
            'description' => '墙高，默认0不设置，范围200-1000. 单位cm',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '0',
          ),
        ),
        3 => 
        array (
          'name' => 'OptimizeWallWidth',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '墙宽优化，OFF:关闭（默认） NORMAL：标准 ENHANCED：加强',
            'description' => '墙宽优化，OFF：关闭（默认） NORMAL：标准 ENHANCED：加强',
            'type' => 'string',
            'required' => false,
            'example' => 'OFF',
          ),
        ),
        4 => 
        array (
          'name' => 'ModelStyle',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '模型效果 PATCH：切片模型（默认） DEPTH：深度模型 VIRTUAL：虚拟模型 MOBILE：移动重建模型',
            'description' => '模型效果 PATCH：切片模型（默认） DEPTH：深度模型 ',
            'type' => 'string',
            'required' => false,
            'example' => 'PATCH',
          ),
        ),
        5 => 
        array (
          'name' => 'PlanStyle',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '户型图，DEFAULT（默认），STANDARD（标准）',
            'description' => '户型图，DEFAULT（默认），STANDARD（标准）',
            'type' => 'string',
            'required' => false,
            'example' => 'DEFAULT',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '响应',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => '请求ID，与入参requestId对应',
                'description' => '请求ID，与入参requestId对应',
                'type' => 'string',
                'example' => '4F882EA7-3A1D-0113-94E4-70162C4****',
              ),
              'Code' => 
              array (
                'title' => '返回码',
                'description' => '返回码',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '200',
              ),
              'Success' => 
              array (
                'title' => '是否请求成功',
                'description' => '是否请求成功',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Message' => 
              array (
                'title' => '错误消息',
                'description' => '错误消息',
                'type' => 'string',
                'example' => 'success',
              ),
              'TaskId' => 
              array (
                'title' => '重建任务ID',
                'description' => '重建任务ID',
                'type' => 'string',
                'example' => '234****',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"4F882EA7-3A1D-0113-94E4-70162C4****\\",\\n  \\"Code\\": 200,\\n  \\"Success\\": true,\\n  \\"Message\\": \\"success\\",\\n  \\"TaskId\\": \\"234****\\"\\n}","errorExample":""},{"type":"xml","example":"<LabelBuildResponse>\\n    <RequestId>4F882EA7-3A1D-0113-94E4-70162C4****</RequestId>\\n    <Code>200</Code>\\n    <Success>true</Success>\\n    <Message>success</Message>\\n    <TaskId>234****</TaskId>\\n</LabelBuildResponse>","errorExample":""}]',
      'title' => '模型重建',
    ),
    'GetOssPolicy' => 
    array (
      'summary' => '获取oss授权，获取授权后使用OSS SDK往指定路径上传图片或视频文件，上传完后直接调用LinkImage接口往子场景中添加图片。',
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
          'name' => 'SubSceneId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '子场景ID',
            'description' => '子场景ID',
            'type' => 'string',
            'required' => true,
            'example' => '1234****',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '响应',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => '请求ID，与入参requestId对应',
                'description' => '请求ID，与入参requestId对应',
                'type' => 'string',
                'example' => '4F882EA7-3A1D-0113-94E4-70162C4****',
              ),
              'Code' => 
              array (
                'title' => '返回码',
                'description' => '返回码',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '200',
              ),
              'Success' => 
              array (
                'title' => '是否请求成功',
                'description' => '是否请求成功',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Message' => 
              array (
                'title' => '错误消息',
                'description' => '错误消息',
                'type' => 'string',
                'example' => 'success',
              ),
              'AccessId' => 
              array (
                'title' => 'accessId',
                'description' => 'accessId，OSS SDK上传时参数，对应OSSAccessKeyId',
                'type' => 'string',
                'example' => 'abc',
              ),
              'Policy' => 
              array (
                'title' => '授权',
                'description' => '授权，OSS SDK上传时参数，对应policy',
                'type' => 'string',
                'example' => 'def',
              ),
              'Signature' => 
              array (
                'title' => '签名',
                'description' => '签名，OSS SDK上传时参数，对应signature',
                'type' => 'string',
                'example' => 'ghi',
              ),
              'Dir' => 
              array (
                'title' => '授权路径',
                'description' => '授权路径，OSS SDK上传时参数，需要拼接文件名后使用， ${DIR}/xxx.jpg对应key',
                'type' => 'string',
                'example' => '123/',
              ),
              'Host' => 
              array (
                'title' => '上传地址',
                'description' => '上传地址, OSS SDK上传时的请求地址',
                'type' => 'string',
                'example' => 'oss.aliyun.com',
              ),
              'Expire' => 
              array (
                'title' => '授权失效时间(s)',
                'description' => '授权失效时间(s)，可以判断授权是否在有效期内，失效后授权不可用',
                'type' => 'string',
                'example' => '60',
              ),
              'Callback' => 
              array (
                'title' => '上传回调',
                'description' => '上传回调，保留字段，目前未使用',
                'type' => 'string',
                'example' => '""',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"4F882EA7-3A1D-0113-94E4-70162C4****\\",\\n  \\"Code\\": 200,\\n  \\"Success\\": true,\\n  \\"Message\\": \\"success\\",\\n  \\"AccessId\\": \\"abc\\",\\n  \\"Policy\\": \\"def\\",\\n  \\"Signature\\": \\"ghi\\",\\n  \\"Dir\\": \\"123/\\",\\n  \\"Host\\": \\"oss.aliyun.com\\",\\n  \\"Expire\\": \\"60\\",\\n  \\"Callback\\": \\"\\\\\\"\\\\\\"\\"\\n}","errorExample":""},{"type":"xml","example":"<GetOssPolicyResponse>\\n    <RequestId>4F882EA7-3A1D-0113-94E4-70162C4****</RequestId>\\n    <Code>200</Code>\\n    <Success>true</Success>\\n    <Message>success</Message>\\n    <AccessId>abc</AccessId>\\n    <Policy>def</Policy>\\n    <Signature>ghi</Signature>\\n    <Dir>123/</Dir>\\n    <Host>oss.aliyun.com</Host>\\n    <Expire>60</Expire>\\n    <Callback>\\"\\"</Callback>\\n</GetOssPolicyResponse>","errorExample":""}]',
      'title' => '获取OSS授权',
      'description' => '获取上传凭据后请参考[服务端签名后直传](https://help.aliyun.com/document_detail/31926.html)流程上传文件，上传后调用[关联图片到子场景](https://help.aliyun.com/document_detail/254024.html)接口关联图片到子场景。',
    ),
    'PredictionWallLine' => 
    array (
      'summary' => '墙线预测，返回taskId以及subsceneId，可以根据taskId查询任务状态，任务结束后可以根据subsceneId查询具体墙线数据。',
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
      ),
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'none',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Url',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '图片地址',
            'description' => '图片地址',
            'type' => 'string',
            'required' => true,
            'example' => 'https://www.aliyundoc.com/****.jpg',
          ),
        ),
        1 => 
        array (
          'name' => 'CameraHeight',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '相机高度 单位 cm',
            'description' => '相机高度单位 cm',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '160',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '响应',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => '请求ID，与入参requestId对应',
                'description' => '请求ID，与入参requestId对应',
                'type' => 'string',
                'example' => '4F882EA7-3A1D-0113-94E4-70162C4****',
              ),
              'Code' => 
              array (
                'title' => '返回码',
                'description' => '返回码',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '200',
              ),
              'Success' => 
              array (
                'title' => '是否请求成功',
                'description' => '是否请求成功',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Message' => 
              array (
                'title' => '错误消息',
                'description' => '错误消息',
                'type' => 'string',
                'example' => 'success',
              ),
              'TaskId' => 
              array (
                'title' => '任务ID',
                'description' => '任务ID',
                'type' => 'string',
                'example' => '1234****',
              ),
              'SubSceneId' => 
              array (
                'title' => '子场景ID',
                'description' => '子场景ID',
                'type' => 'string',
                'example' => '2345****',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"4F882EA7-3A1D-0113-94E4-70162C4****\\",\\n  \\"Code\\": 200,\\n  \\"Success\\": true,\\n  \\"Message\\": \\"success\\",\\n  \\"TaskId\\": \\"1234****\\",\\n  \\"SubSceneId\\": \\"2345****\\"\\n}","errorExample":""},{"type":"xml","example":"<PredictionWallLineResponse>\\n    <RequestId>4F882EA7-3A1D-0113-94E4-70162C4****</RequestId>\\n    <Code>200</Code>\\n    <Success>true</Success>\\n    <Message>success</Message>\\n    <TaskId>1234****</TaskId>\\n    <SubSceneId>2345****</SubSceneId>\\n</PredictionWallLineResponse>","errorExample":""}]',
      'title' => '墙线预测',
    ),
    'GetSceneBuildTaskStatus' => 
    array (
      'summary' => '查询场景重建任务状态。',
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
          'name' => 'SceneId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '场景ID',
            'description' => '场景ID',
            'type' => 'string',
            'required' => true,
            'example' => 'm+0cmndEGjg9pv/hy4jh****',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '响应',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => '请求ID，与入参requestId对应',
                'description' => '请求ID，与入参requestId对应',
                'type' => 'string',
                'example' => '4F882EA7-3A1D-0113-94E4-70162C4****',
              ),
              'Code' => 
              array (
                'title' => '返回码',
                'description' => '返回码',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '200',
              ),
              'Success' => 
              array (
                'title' => '是否请求成功',
                'description' => '是否请求成功',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Message' => 
              array (
                'title' => '错误消息',
                'description' => '错误消息',
                'type' => 'string',
                'example' => 'success',
              ),
              'SceneId' => 
              array (
                'title' => '场景ID',
                'description' => '场景ID',
                'type' => 'string',
                'example' => 'm+0cmndEGjg9pv/hy4jh****',
              ),
              'Status' => 
              array (
                'title' => '未开始  init 处理中 失败     failed   processing  完成     succeed 取消     canceled',
                'description' => '未开始：init； 处理中：processing； 失败：failed；完成：succeed； 取消：canceled；',
                'type' => 'string',
                'example' => 'failed',
              ),
              'ErrorCode' => 
              array (
                'title' => '任务失败错误码',
                'description' => '任务失败错误码',
                'type' => 'string',
                'example' => '2001',
              ),
              'ErrorMsg' => 
              array (
                'title' => '任务失败错误消息',
                'description' => '任务失败错误消息',
                'type' => 'string',
                'example' => '墙线数量少于4',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"4F882EA7-3A1D-0113-94E4-70162C4****\\",\\n  \\"Code\\": 200,\\n  \\"Success\\": true,\\n  \\"Message\\": \\"success\\",\\n  \\"SceneId\\": \\"m+0cmndEGjg9pv/hy4jh****\\",\\n  \\"Status\\": \\"failed\\",\\n  \\"ErrorCode\\": \\"2001\\",\\n  \\"ErrorMsg\\": \\"墙线数量少于4\\"\\n}","errorExample":""},{"type":"xml","example":"<GetSceneBuildTaskStatusResponse>\\n    <RequestId>4F882EA7-3A1D-0113-94E4-70162C4****</RequestId>\\n    <Code>200</Code>\\n    <Success>true</Success>\\n    <Message>success</Message>\\n    <SceneId>m+0cmndEGjg9pv/hy4jh****</SceneId>\\n    <Status>failed</Status>\\n    <ErrorCode>2001</ErrorCode>\\n    <ErrorMsg>墙线数量少于4</ErrorMsg>\\n</GetSceneBuildTaskStatusResponse>","errorExample":""}]',
      'title' => '查询场景重建任务状态',
    ),
    'UpdateConnData' => 
    array (
      'summary' => '更新关联信息，标注时使用，保存最新关联数据。',
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
      ),
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'SceneId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '场景ID',
            'description' => '场景ID',
            'type' => 'string',
            'required' => true,
            'example' => '1234****',
          ),
        ),
        1 => 
        array (
          'name' => 'ConnData',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '关联数据',
            'description' => '关联数据',
            'type' => 'string',
            'required' => true,
            'example' => '{}',
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
              'RequestId' => 
              array (
                'title' => '请求ID，与入参requestId对应',
                'description' => '请求ID，与入参requestId对应',
                'type' => 'string',
                'example' => '4F882EA7-3A1D-0113-94E4-70162C4****',
              ),
              'Code' => 
              array (
                'title' => '返回码',
                'description' => '返回码',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '200',
              ),
              'Success' => 
              array (
                'title' => '是否请求成功',
                'description' => '是否请求成功',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Message' => 
              array (
                'title' => '错误消息',
                'description' => '错误消息',
                'type' => 'string',
                'example' => 'success',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"4F882EA7-3A1D-0113-94E4-70162C4****\\",\\n  \\"Code\\": 200,\\n  \\"Success\\": true,\\n  \\"Message\\": \\"success\\"\\n}","errorExample":""},{"type":"xml","example":"<UpdateConnDataResponse>\\n    <RequestId>4F882EA7-3A1D-0113-94E4-70162C4****</RequestId>\\n    <Code>200</Code>\\n    <Success>true</Success>\\n    <Message>success</Message>\\n</UpdateConnDataResponse>","errorExample":""}]',
      'title' => '更新关联信息',
    ),
    'PredImage' => 
    array (
      'summary' => '图片预处理，包括垂直矫正、墙线预测、门预测，自动门预测与切图失败时可使用此接口发起重试。',
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
      ),
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'none',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'SubSceneId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '子场景ID',
            'description' => '子场景ID',
            'type' => 'string',
            'required' => true,
            'minimum' => '1',
            'example' => '2345****',
          ),
        ),
        1 => 
        array (
          'name' => 'DetectDoor',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '是否门预测',
            'description' => '是否门预测',
            'type' => 'boolean',
            'required' => true,
            'example' => 'true',
          ),
        ),
        2 => 
        array (
          'name' => 'CountDetectDoor',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '门数量(DetectDoor为false时，可为0)',
            'description' => '门数量',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'maximum' => '10',
            'exclusiveMaximum' => false,
            'minimum' => '1',
            'exclusiveMinimum' => false,
            'example' => '2',
          ),
        ),
        3 => 
        array (
          'name' => 'CorrectVertical',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '是否垂直矫正',
            'description' => '是否垂直矫正',
            'type' => 'boolean',
            'required' => true,
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
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => '请求ID，与入参requestId对应',
                'description' => '请求ID，与入参requestId对应',
                'type' => 'string',
                'example' => '4F882EA7-3A1D-0113-94E4-70162C4****',
              ),
              'Code' => 
              array (
                'title' => '返回码',
                'description' => '返回码',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '200',
              ),
              'Success' => 
              array (
                'title' => '是否请求成功',
                'description' => '是否请求成功',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Message' => 
              array (
                'title' => '错误消息',
                'description' => '错误消息',
                'type' => 'string',
                'example' => 'success',
              ),
              'TaskId' => 
              array (
                'title' => '任务ID',
                'description' => '任务ID',
                'type' => 'string',
                'example' => '1234****',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"4F882EA7-3A1D-0113-94E4-70162C4****\\",\\n  \\"Code\\": 200,\\n  \\"Success\\": true,\\n  \\"Message\\": \\"success\\",\\n  \\"TaskId\\": \\"1234****\\"\\n}","errorExample":""},{"type":"xml","example":"<PredImageResponse>\\n    <RequestId>4F882EA7-3A1D-0113-94E4-70162C4****</RequestId>\\n    <Code>200</Code>\\n    <Success>true</Success>\\n    <Message>success</Message>\\n    <TaskId>1234****</TaskId>\\n</PredImageResponse>","errorExample":""}]',
      'title' => '图片预处理',
    ),
    'GetRectifyImage' => 
    array (
      'summary' => '获取垂直矫正后的图片。',
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
          'name' => 'SubSceneId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '子场景ID',
            'description' => '子场景ID',
            'type' => 'string',
            'required' => true,
            'example' => '1234****',
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
              'RequestId' => 
              array (
                'title' => '请求ID，与入参requestId对应',
                'description' => '请求ID，与入参requestId对应',
                'type' => 'string',
                'example' => '4F882EA7-3A1D-0113-94E4-70162C4****',
              ),
              'Code' => 
              array (
                'title' => '返回码',
                'description' => '返回码',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '200',
              ),
              'Success' => 
              array (
                'title' => '是否请求成功',
                'description' => '是否请求成功',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Message' => 
              array (
                'title' => '错误消息',
                'description' => '错误消息',
                'type' => 'string',
                'example' => 'success',
              ),
              'Url' => 
              array (
                'title' => '图片地址',
                'description' => '图片地址',
                'type' => 'string',
                'example' => 'https://image-demo.oss-cn-hangzhou.aliyuncs.com/****.jpg',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"4F882EA7-3A1D-0113-94E4-70162C4****\\",\\n  \\"Code\\": 200,\\n  \\"Success\\": true,\\n  \\"Message\\": \\"success\\",\\n  \\"Url\\": \\"https://image-demo.oss-cn-hangzhou.aliyuncs.com/****.jpg\\"\\n}","errorExample":""},{"type":"xml","example":"<GetRectifyImageResponse>\\n    <RequestId>4F882EA7-3A1D-0113-94E4-70162C4****</RequestId>\\n    <Code>200</Code>\\n    <Success>true</Success>\\n    <Message>success</Message>\\n    <Url>https://image-demo.oss-cn-hangzhou.aliyuncs.com/****.jpg</Url>\\n</GetRectifyImageResponse>","errorExample":""}]',
      'title' => '获取矫正后图片',
    ),
    'GetOriginLayoutData' => 
    array (
      'summary' => '获取原始标注信息，可以配合更新标注信息接口使用来还原标注信息。',
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
          'name' => 'SubSceneId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '子场景ID',
            'description' => '子场景ID',
            'type' => 'string',
            'required' => true,
            'example' => '1234****',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '响应',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => '请求ID，与入参requestId对应',
                'description' => '请求ID，与入参requestId对应',
                'type' => 'string',
                'example' => '4F882EA7-3A1D-0113-94E4-70162C4****',
              ),
              'Code' => 
              array (
                'title' => '返回码',
                'description' => '返回码',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '200',
              ),
              'Success' => 
              array (
                'title' => '是否请求成功',
                'description' => '是否请求成功',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Message' => 
              array (
                'title' => '错误消息',
                'description' => '错误消息',
                'type' => 'string',
                'example' => 'success',
              ),
              'Data' => 
              array (
                'title' => '标注数据',
                'description' => '标注数据',
                'type' => 'string',
                'example' => '{}',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"4F882EA7-3A1D-0113-94E4-70162C4****\\",\\n  \\"Code\\": 200,\\n  \\"Success\\": true,\\n  \\"Message\\": \\"success\\",\\n  \\"Data\\": \\"{}\\"\\n}","errorExample":""},{"type":"xml","example":"<GetOriginLayoutDataResponse>\\n    <RequestId>4F882EA7-3A1D-0113-94E4-70162C4****</RequestId>\\n    <Code>200</Code>\\n    <Success>true</Success>\\n    <Message>success</Message>\\n    <Data>{}</Data>\\n</GetOriginLayoutDataResponse>","errorExample":""}]',
      'title' => '获取原始标注信息',
    ),
    'RectifyImage' => 
    array (
      'summary' => '对输入图片进行垂直矫正。',
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
      ),
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'none',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Url',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '图片地址',
            'description' => '图片地址',
            'type' => 'string',
            'required' => true,
            'example' => 'https://www.aliyundoc.com/****.jpg',
          ),
        ),
        1 => 
        array (
          'name' => 'CameraHeight',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '相机高度 单位 cm',
            'description' => '相机高度单位 cm',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '160',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '响应',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => '请求ID，与入参requestId对应',
                'description' => '请求ID，与入参requestId对应',
                'type' => 'string',
                'example' => '4F882EA7-3A1D-0113-94E4-70162C4****',
              ),
              'Code' => 
              array (
                'title' => '返回码',
                'description' => '返回码',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '200',
              ),
              'Success' => 
              array (
                'title' => '是否请求成功',
                'description' => '是否请求成功',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Message' => 
              array (
                'title' => '错误消息',
                'description' => '错误消息',
                'type' => 'string',
                'example' => 'success',
              ),
              'TaskId' => 
              array (
                'title' => '任务ID',
                'description' => '任务ID',
                'type' => 'string',
                'example' => '1234****',
              ),
              'SubSceneId' => 
              array (
                'title' => '子场景ID',
                'description' => '子场景ID',
                'type' => 'string',
                'example' => '2345****',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"4F882EA7-3A1D-0113-94E4-70162C4****\\",\\n  \\"Code\\": 200,\\n  \\"Success\\": true,\\n  \\"Message\\": \\"success\\",\\n  \\"TaskId\\": \\"1234****\\",\\n  \\"SubSceneId\\": \\"2345****\\"\\n}","errorExample":""},{"type":"xml","example":"<RectifyImageResponse>\\n    <RequestId>4F882EA7-3A1D-0113-94E4-70162C4****</RequestId>\\n    <Code>200</Code>\\n    <Success>true</Success>\\n    <Message>success</Message>\\n    <TaskId>1234****</TaskId>\\n    <SubSceneId>2345****</SubSceneId>\\n</RectifyImageResponse>","errorExample":""}]',
      'title' => '图片矫正',
    ),
    'LinkImage' => 
    array (
      'summary' => '关联图片或视频到子场景，目前一个子场景只能关联一张图片或者一个视频。',
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
      ),
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'none',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'SubSceneId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '子场景ID',
            'description' => '子场景ID',
            'type' => 'string',
            'required' => true,
            'example' => '1234****',
          ),
        ),
        1 => 
        array (
          'name' => 'FileName',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '图片或者视频名称xxx.jpg',
            'description' => '图片或者视频名称（****.jpg/****.mp4）',
            'type' => 'string',
            'required' => true,
            'example' => '****.jpg',
          ),
        ),
        2 => 
        array (
          'name' => 'CameraHeight',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '相机高度 单位 cm',
            'description' => '相机高度单位 cm',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '160',
          ),
        ),
        3 => 
        array (
          'name' => 'Platform',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '平台标识，默认PC',
            'description' => '平台标识：PC/MOBILE，默认为PC',
            'type' => 'string',
            'required' => false,
            'example' => 'PC',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '响应',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => '请求ID，与入参requestId对应',
                'description' => '请求ID，与入参requestId对应',
                'type' => 'string',
                'example' => '4F882EA7-3A1D-0113-94E4-70162C4****',
              ),
              'Code' => 
              array (
                'title' => '返回码',
                'description' => '返回码',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '200',
              ),
              'Success' => 
              array (
                'title' => '是否请求成功',
                'description' => '是否请求成功',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Message' => 
              array (
                'title' => '错误消息',
                'description' => '错误消息',
                'type' => 'string',
                'example' => 'success',
              ),
              'ResourceId' => 
              array (
                'title' => '图片/视频ID',
                'description' => '图片/视频ID',
                'type' => 'string',
                'example' => '234****',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"4F882EA7-3A1D-0113-94E4-70162C4****\\",\\n  \\"Code\\": 200,\\n  \\"Success\\": true,\\n  \\"Message\\": \\"success\\",\\n  \\"ResourceId\\": \\"234****\\"\\n}","errorExample":""},{"type":"xml","example":"<LinkImageResponse>\\n    <RequestId>4F882EA7-3A1D-0113-94E4-70162C4****</RequestId>\\n    <Code>200</Code>\\n    <Success>true</Success>\\n    <Message>success</Message>\\n    <ResourceId>234****</ResourceId>\\n</LinkImageResponse>","errorExample":""}]',
      'title' => '关联图片到子场景',
    ),
    'OptimizeRightAngle' => 
    array (
      'summary' => '将墙交汇处优化为直角。',
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
      ),
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'none',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'SubSceneId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '子场景ID',
            'description' => '子场景ID',
            'type' => 'string',
            'required' => true,
            'example' => '1234****',
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
              'RequestId' => 
              array (
                'title' => '请求ID，与入参requestId对应',
                'description' => '请求ID，与入参requestId对应',
                'type' => 'string',
                'example' => '4F882EA7-3A1D-0113-94E4-70162C4****',
              ),
              'Code' => 
              array (
                'title' => '返回码',
                'description' => '返回码',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '200',
              ),
              'Success' => 
              array (
                'title' => '是否请求成功',
                'description' => '是否请求成功',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Message' => 
              array (
                'title' => '错误消息',
                'description' => '错误消息',
                'type' => 'string',
                'example' => 'success',
              ),
              'TaskId' => 
              array (
                'title' => '任务ID',
                'description' => '任务ID',
                'type' => 'string',
                'example' => '2345****',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"4F882EA7-3A1D-0113-94E4-70162C4****\\",\\n  \\"Code\\": 200,\\n  \\"Success\\": true,\\n  \\"Message\\": \\"success\\",\\n  \\"TaskId\\": \\"2345****\\"\\n}","errorExample":""},{"type":"xml","example":"<OptimizeRightAngleResponse>\\n    <RequestId>4F882EA7-3A1D-0113-94E4-70162C4****</RequestId>\\n    <Code>200</Code>\\n    <Success>true</Success>\\n    <Message>success</Message>\\n    <TaskId>2345****</TaskId>\\n</OptimizeRightAngleResponse>","errorExample":""}]',
      'title' => '直角优化',
    ),
    'GetConnData' => 
    array (
      'summary' => '获取关联信息，标注时使用。',
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
          'name' => 'SceneId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '场景ID',
            'description' => '场景ID',
            'type' => 'string',
            'required' => true,
            'example' => '1234****',
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
                'example' => '4F882EA7-3A1D-0113-94E4-70162C4****',
              ),
              'Code' => 
              array (
                'title' => '返回码',
                'description' => '返回码',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '200',
              ),
              'Success' => 
              array (
                'title' => '是否请求成功',
                'description' => '是否请求成功',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Message' => 
              array (
                'title' => '错误消息',
                'description' => '错误消息',
                'type' => 'string',
                'example' => 'success',
              ),
              'Version' => 
              array (
                'title' => '版本',
                'description' => '版本',
                'type' => 'string',
                'example' => '2.1',
              ),
              'Extend' => 
              array (
                'title' => '扩展信息',
                'description' => '扩展信息',
                'type' => 'string',
                'example' => '{}',
              ),
              'List' => 
              array (
                'title' => '关联信息',
                'description' => '关联信息',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Id' => 
                    array (
                      'title' => 'ID',
                      'description' => 'ID',
                      'type' => 'string',
                      'example' => '1#234#abc',
                    ),
                    'MapId' => 
                    array (
                      'title' => '关联的ID',
                      'description' => '关联的ID',
                      'type' => 'string',
                      'example' => '1#456#def',
                    ),
                    'Type' => 
                    array (
                      'title' => 'outer:外关联 inner：内关联 stair：楼梯关联',
                      'description' => 'outer：外关联 inner：内关联 stair：楼梯关联',
                      'type' => 'string',
                      'example' => 'outer',
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"4F882EA7-3A1D-0113-94E4-70162C4****\\",\\n  \\"Code\\": 200,\\n  \\"Success\\": true,\\n  \\"Message\\": \\"success\\",\\n  \\"Version\\": \\"2.1\\",\\n  \\"Extend\\": \\"{}\\",\\n  \\"List\\": [\\n    {\\n      \\"Id\\": \\"1#234#abc\\",\\n      \\"MapId\\": \\"1#456#def\\",\\n      \\"Type\\": \\"outer\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<GetConnDataResponse>\\n    <RequestId>4F882EA7-3A1D-0113-94E4-70162C4****</RequestId>\\n    <Code>200</Code>\\n    <Success>true</Success>\\n    <Message>success</Message>\\n    <Version>2.1</Version>\\n    <Extend>{}</Extend>\\n    <List>\\n        <Id>1#234#abc</Id>\\n        <MapId>1#456#def</MapId>\\n        <Type>outer</Type>\\n    </List>\\n</GetConnDataResponse>","errorExample":""}]',
      'title' => '获取关联信息',
    ),
    'UpdateLayoutData' => 
    array (
      'summary' => '更新标注信息，标注后可以使用此接口保存标注信息。',
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
      ),
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'SubSceneId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '子场景ID',
            'description' => '子场景ID',
            'type' => 'string',
            'required' => true,
            'example' => '1234****',
          ),
        ),
        1 => 
        array (
          'name' => 'LayoutData',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '标注数据',
            'description' => '标注数据',
            'type' => 'string',
            'required' => true,
            'example' => '{}',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '响应',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => '请求ID，与入参requestId对应',
                'description' => '请求ID，与入参requestId对应',
                'type' => 'string',
                'example' => '4F882EA7-3A1D-0113-94E4-70162C4****',
              ),
              'Code' => 
              array (
                'title' => '返回码',
                'description' => '返回码',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '200',
              ),
              'Success' => 
              array (
                'title' => '是否请求成功',
                'description' => '是否请求成功',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Message' => 
              array (
                'title' => '错误消息',
                'description' => '错误消息',
                'type' => 'string',
                'example' => 'success',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"4F882EA7-3A1D-0113-94E4-70162C4****\\",\\n  \\"Code\\": 200,\\n  \\"Success\\": true,\\n  \\"Message\\": \\"success\\"\\n}","errorExample":""},{"type":"xml","example":"<UpdateLayoutDataResponse>\\n    <RequestId>4F882EA7-3A1D-0113-94E4-70162C4****</RequestId>\\n    <Code>200</Code>\\n    <Success>true</Success>\\n    <Message>success</Message>\\n</UpdateLayoutDataResponse>","errorExample":""}]',
      'title' => '更新标注信息',
    ),
    'GetSubSceneTaskStatus' => 
    array (
      'summary' => '子场景的预处理及切图状态。',
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
          'name' => 'SubSceneId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '子场景ID',
            'description' => '子场景ID',
            'type' => 'string',
            'required' => true,
            'example' => '1234****',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '响应',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => '请求ID，与入参requestId对应',
                'description' => '请求ID，与入参requestId对应',
                'type' => 'string',
                'example' => '4F882EA7-3A1D-0113-94E4-70162C4****',
              ),
              'Code' => 
              array (
                'title' => '返回码',
                'description' => '返回码',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '200',
              ),
              'Success' => 
              array (
                'title' => '是否请求成功',
                'description' => '是否请求成功',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Message' => 
              array (
                'title' => '错误消息',
                'description' => '错误消息',
                'type' => 'string',
                'example' => 'success',
              ),
              'List' => 
              array (
                'title' => '任务信息',
                'description' => '任务信息',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Id' => 
                    array (
                      'title' => '任务ID',
                      'description' => '任务ID',
                      'type' => 'string',
                      'example' => '4638****',
                    ),
                    'SceneId' => 
                    array (
                      'title' => '场景ID',
                      'description' => '场景ID',
                      'type' => 'string',
                      'example' => '2345****',
                    ),
                    'SubSceneId' => 
                    array (
                      'title' => '子场景ID',
                      'description' => '子场景ID',
                      'type' => 'string',
                      'example' => '3456***',
                    ),
                    'Status' => 
                    array (
                      'title' => '未开始  init 处理中   processing   失败     failure  完成     succeed  取消     canceled',
                      'description' => '未开始  init 处理中   processing   失败     failure  完成     succeed  取消     canceled',
                      'type' => 'string',
                      'example' => 'init',
                    ),
                    'Type' => 
                    array (
                      'title' => '墙线预测: wall_line   切图: cut_image 重建: build  直角优化：right_angle_optimization 其他：other',
                      'description' => '墙线预测：wall_line 切图：cut_image 重建：build 直角优化：right_angle_optimization 其他：other	',
                      'type' => 'string',
                      'example' => 'cutimage',
                    ),
                    'ErrorCode' => 
                    array (
                      'title' => '任务失败错误码',
                      'description' => '任务失败错误码',
                      'type' => 'string',
                      'example' => '2001',
                    ),
                    'ErrorMsg' => 
                    array (
                      'title' => '任务失败错误信息',
                      'description' => '任务失败错误信息',
                      'type' => 'string',
                      'example' => '异常信息',
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"4F882EA7-3A1D-0113-94E4-70162C4****\\",\\n  \\"Code\\": 200,\\n  \\"Success\\": true,\\n  \\"Message\\": \\"success\\",\\n  \\"List\\": [\\n    {\\n      \\"Id\\": \\"4638****\\",\\n      \\"SceneId\\": \\"2345****\\",\\n      \\"SubSceneId\\": \\"3456***\\",\\n      \\"Status\\": \\"init\\",\\n      \\"Type\\": \\"cutimage\\",\\n      \\"ErrorCode\\": \\"2001\\",\\n      \\"ErrorMsg\\": \\"异常信息\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<GetSubSceneTaskStatusResponse>\\n    <RequestId>4F882EA7-3A1D-0113-94E4-70162C4****</RequestId>\\n    <Code>200</Code>\\n    <Success>true</Success>\\n    <Message>success</Message>\\n    <List>\\n        <Id>4638****</Id>\\n        <SceneId>2345****</SceneId>\\n        <SubSceneId>3456***</SubSceneId>\\n        <Status>init</Status>\\n        <Type>cutimage</Type>\\n        <ErrorCode>2001</ErrorCode>\\n        <ErrorMsg>异常信息</ErrorMsg>\\n    </List>\\n</GetSubSceneTaskStatusResponse>","errorExample":""}]',
      'title' => '查看子场景预处理及切图状态',
    ),
    'PublishScene' => 
    array (
      'summary' => '场景发布。',
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
      ),
      'operationType' => 'write',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'none',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'SceneId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '场景ID',
            'description' => '场景ID',
            'type' => 'string',
            'required' => true,
            'example' => 'm+0cmndEGjg9pv/hy4jh****',
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
              'RequestId' => 
              array (
                'title' => '请求ID，与入参requestId对应',
                'description' => '请求ID，与入参requestId对应',
                'type' => 'string',
                'example' => '4F882EA7-3A1D-0113-94E4-70162C4****',
              ),
              'Code' => 
              array (
                'title' => '返回码',
                'description' => '返回码',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '200',
              ),
              'Success' => 
              array (
                'title' => '是否请求成功',
                'description' => '是否请求成功',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Message' => 
              array (
                'title' => '错误消息',
                'description' => '错误消息',
                'type' => 'string',
                'example' => 'success',
              ),
              'PreviewUrl' => 
              array (
                'title' => '预览链接',
                'description' => '正式预览链接 ',
                'type' => 'string',
                'example' => 'preview-lyj.aliyuncs.com/preview/xxx****',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"4F882EA7-3A1D-0113-94E4-70162C4****\\",\\n  \\"Code\\": 200,\\n  \\"Success\\": true,\\n  \\"Message\\": \\"success\\",\\n  \\"PreviewUrl\\": \\"preview-lyj.aliyuncs.com/preview/xxx****\\"\\n}","errorExample":""},{"type":"xml","example":"<PublishSceneResponse>\\n    <RequestId>4F882EA7-3A1D-0113-94E4-70162C4****</RequestId>\\n    <Code>200</Code>\\n    <Success>true</Success>\\n    <Message>success</Message>\\n    <PreviewUrl>preview-lyj.aliyuncs.com/preview/xxx****</PreviewUrl>\\n</PublishSceneResponse>","errorExample":""}]',
      'title' => '场景发布',
      'description' => '请确保在使用该接口前，已充分了解临云镜产品的收费方式和[价格](https://help.aliyun.com/document_detail/159646.html)。',
    ),
    'AddRelativePosition' => 
    array (
      'summary' => '提交子场景间相对位置。',
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
      ),
      'operationType' => 'read',
      'deprecated' => true,
      'systemTags' => 
      array (
        'operationType' => 'create',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'SceneId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '场景ID',
            'description' => '场景ID',
            'type' => 'string',
            'required' => true,
            'example' => '1234****',
          ),
        ),
        1 => 
        array (
          'name' => 'RelativePosition',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '相对位置信息',
            'description' => '相对位置信息',
            'type' => 'string',
            'required' => true,
            'example' => '{"key"："value"}',
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
              'RequestId' => 
              array (
                'title' => '请求ID，与入参requestId对应',
                'description' => '请求ID，与入参requestId对应',
                'type' => 'string',
                'example' => '4F882EA7-3A1D-0113-94E4-70162C4****',
              ),
              'Code' => 
              array (
                'title' => '返回码',
                'description' => '返回码',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '200',
              ),
              'Success' => 
              array (
                'title' => '是否请求成功',
                'description' => '是否请求成功',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Message' => 
              array (
                'title' => '错误消息',
                'description' => '错误消息',
                'type' => 'string',
                'example' => 'success',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'noSubstitutionReason' => '无替代API，历史原因导致该API被标记为弃用。',
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"4F882EA7-3A1D-0113-94E4-70162C4****\\",\\n  \\"Code\\": 200,\\n  \\"Success\\": true,\\n  \\"Message\\": \\"success\\"\\n}","errorExample":""},{"type":"xml","example":"<AddRelativePositionResponse>\\n    <RequestId>4F882EA7-3A1D-0113-94E4-70162C4****</RequestId>\\n    <Code>200</Code>\\n    <Success>true</Success>\\n    <Message>success</Message>\\n</AddRelativePositionResponse>","errorExample":""}]',
      'title' => '相对位置提交',
    ),
    'GetScenePreviewInfo' => 
    array (
      'summary' => '获取场景模型点位信息。',
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
          'name' => 'ModelToken',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '模型token',
            'description' => '模型token',
            'type' => 'string',
            'required' => true,
            'example' => 'A.e.RQJRPYGIJJQP****',
          ),
        ),
        1 => 
        array (
          'name' => 'Domain',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '自定义oss域名（可为cdn域名）',
            'description' => '自定义OSS域名（可为CDN域名）',
            'type' => 'string',
            'required' => false,
            'example' => 'www.aliyundoc.com',
          ),
        ),
        2 => 
        array (
          'name' => 'Enabled',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '是否开启自用资源访问',
            'description' => '是否开启自用资源访问',
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
                'example' => '4F882EA7-3A1D-0113-94E4-70162C4****',
              ),
              'Code' => 
              array (
                'title' => '返回码',
                'description' => '返回码',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '0：成功，其他：失败',
              ),
              'Success' => 
              array (
                'title' => '是否请求成功',
                'description' => '是否请求成功',
                'type' => 'boolean',
                'example' => 'true/false',
              ),
              'Message' => 
              array (
                'title' => '错误消息',
                'description' => '错误消息',
                'type' => 'string',
                'example' => 'xxxxx',
              ),
              'Data' => 
              array (
                'description' => '业务数据',
                'type' => 'object',
                'properties' => 
                array (
                  'PanoList' => 
                  array (
                    'title' => 'html转译后的预览数据',
                    'description' => 'html转译后的预览数据',
                    'type' => 'string',
                    'example' => '一串转译数据',
                  ),
                  'ModelPath' => 
                  array (
                    'title' => '模型地址',
                    'description' => '模型地址',
                    'type' => 'string',
                    'example' => 'https://www.aliyundoc.com/sgm/A.e.QRQRLWYEHIUEYLYW/A.e.QRQRLWYEHIUEYLYW****.sgm',
                  ),
                  'TextureModelPath' => 
                  array (
                    'title' => '模型的贴图路径',
                    'description' => '模型的贴图路径',
                    'type' => 'string',
                    'example' => 'https:/www.aliyundoc.com/sgm/A.e.QRQRLWYEHIUEYLYW****/model_texture/',
                  ),
                  'TexturePanoPath' => 
                  array (
                    'title' => '漫游后预览图片路径',
                    'description' => '漫游后预览图片路径',
                    'type' => 'string',
                    'example' => 'https://www.aliyundoc.com/sgm/A.e.QRQRLWYEHIUEYLYW****/pano_texture/',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"4F882EA7-3A1D-0113-94E4-70162C4****\\",\\n  \\"Code\\": 0,\\n  \\"Success\\": true,\\n  \\"Message\\": \\"xxxxx\\",\\n  \\"Data\\": {\\n    \\"PanoList\\": \\"一串转译数据\\",\\n    \\"ModelPath\\": \\"https://www.aliyundoc.com/sgm/A.e.QRQRLWYEHIUEYLYW/A.e.QRQRLWYEHIUEYLYW****.sgm\\",\\n    \\"TextureModelPath\\": \\"https:/www.aliyundoc.com/sgm/A.e.QRQRLWYEHIUEYLYW****/model_texture/\\",\\n    \\"TexturePanoPath\\": \\"https://www.aliyundoc.com/sgm/A.e.QRQRLWYEHIUEYLYW****/pano_texture/\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<GetScenePreviewInfoResponse>\\n    <RequestId>4F882EA7-3A1D-0113-94E4-70162C4****</RequestId>\\n    <Success>false</Success>\\n    <Message>xxxxx</Message>\\n    <Data>\\n        <PanoList>一串转译数据</PanoList>\\n        <ModelPath>https://www.aliyundoc.com/sgm/A.e.QRQRLWYEHIUEYLYW/A.e.QRQRLWYEHIUEYLYW****.sgm</ModelPath>\\n        <TextureModelPath>https:/www.aliyundoc.com/sgm/A.e.QRQRLWYEHIUEYLYW****/model_texture/</TextureModelPath>\\n        <TexturePanoPath>https://www.aliyundoc.com/sgm/A.e.QRQRLWYEHIUEYLYW****/pano_texture/</TexturePanoPath>\\n    </Data>\\n</GetScenePreviewInfoResponse>","errorExample":""}]',
      'title' => '获取场景模型点位信息',
    ),
    'GetHotspotSceneData' => 
    array (
      'summary' => '根据预览token查询场景模型预览数据。',
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
          'name' => 'PreviewToken',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '预览token',
            'description' => '预览token',
            'type' => 'string',
            'required' => true,
            'example' => '344794c32937474a9c59eb130936****',
          ),
        ),
        1 => 
        array (
          'name' => 'Type',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '0 未发布， 1 已发布',
            'description' => '0 未发布， 1 已发布',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'maximum' => '1',
            'minimum' => '0',
            'example' => '0',
          ),
        ),
        2 => 
        array (
          'name' => 'Domain',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '自定义oss域名（可为cdn域名）',
            'description' => '自定义OSS域名（可为CDN域名）',
            'type' => 'string',
            'required' => false,
            'example' => 'www.aliyundoc.com',
          ),
        ),
        3 => 
        array (
          'name' => 'Enabled',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '是否开启自用资源访问',
            'description' => '是否开启自用资源访问',
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
                'example' => 'A8CD0AD9-8A92-455A-A984-A7E4B76****',
              ),
              'Code' => 
              array (
                'title' => '返回码',
                'description' => '返回码',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '200',
              ),
              'Success' => 
              array (
                'title' => '是否请求成功',
                'description' => '是否请求成功',
                'type' => 'boolean',
                'example' => 'true/false',
              ),
              'Message' => 
              array (
                'title' => '错误消息',
                'description' => '错误消息',
                'type' => 'string',
                'example' => 'xxxxx',
              ),
              'Data' => 
              array (
                'description' => '业务数据',
                'type' => 'object',
                'properties' => 
                array (
                  'SceneType' => 
                  array (
                    'title' => '3D模型：MODEL_3D 全景图片：PIC 全景视频：VIDEO',
                    'description' => '3D模型：MODEL_3D 全景图片：PIC 全景视频：VIDEO',
                    'type' => 'string',
                    'example' => 'MODEL_3D',
                  ),
                  'PreviewToken' => 
                  array (
                    'title' => '预览token',
                    'description' => '预览token',
                    'type' => 'string',
                    'example' => '344794c32937474a9c59eb130936****',
                  ),
                  'PreviewData' => 
                  array (
                    'title' => 'html转译后的预览数据，包含图片、子场景ID等信息',
                    'description' => 'html转译后的预览数据，包含图片、子场景ID等信息',
                    'type' => 'string',
                    'example' => '一串转译数据',
                  ),
                  'ModelToken' => 
                  array (
                    'title' => '模型token（sgm token）',
                    'description' => '模型token（sgm token）',
                    'type' => 'string',
                    'example' => 'A.e.QRQRLWYEHIUE****',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"A8CD0AD9-8A92-455A-A984-A7E4B76****\\",\\n  \\"Code\\": 200,\\n  \\"Success\\": true,\\n  \\"Message\\": \\"xxxxx\\",\\n  \\"Data\\": {\\n    \\"SceneType\\": \\"MODEL_3D\\",\\n    \\"PreviewToken\\": \\"344794c32937474a9c59eb130936****\\",\\n    \\"PreviewData\\": \\"一串转译数据\\",\\n    \\"ModelToken\\": \\"A.e.QRQRLWYEHIUE****\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<GetHotspotSceneDataResponse>\\n    <RequestId>A8CD0AD9-8A92-455A-A984-A7E4B76****</RequestId>\\n    <Success>false</Success>\\n    <Message>xxxxx</Message>\\n    <Data>\\n        <SceneType>MODEL_3D</SceneType>\\n        <PreviewToken>a888a26557174524b5558d65aab****</PreviewToken>\\n        <PreviewData>一串转译数据</PreviewData>\\n        <ModelToken>A.e.QRQRLWYEHIU****</ModelToken>\\n    </Data>\\n</GetHotspotSceneDataResponse>","errorExample":""}]',
      'title' => '获取场景模型预览数据',
    ),
    'RecoveryOriginImage' => 
    array (
      'summary' => '该接口用于打马赛克图片的重置恢复。',
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
      ),
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'none',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'SubSceneId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '子场景ID',
            'description' => '子场景ID',
            'type' => 'string',
            'required' => true,
            'example' => 'skjjskjk****',
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
              'RequestId' => 
              array (
                'title' => '请求ID，与入参requestId对应',
                'description' => '请求ID，与入参requestId对应',
                'type' => 'string',
                'example' => '3BCAD49D-2AC1-13EB-AC19-8C7A46CF****',
              ),
              'Code' => 
              array (
                'title' => '返回码',
                'description' => '返回码',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '200',
              ),
              'Success' => 
              array (
                'title' => '是否请求成功',
                'description' => '是否请求成功',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Message' => 
              array (
                'title' => '错误消息',
                'description' => '错误消息',
                'type' => 'string',
                'example' => 'SUCCESS',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"3BCAD49D-2AC1-13EB-AC19-8C7A46CF****\\",\\n  \\"Code\\": 200,\\n  \\"Success\\": true,\\n  \\"Message\\": \\"SUCCESS\\"\\n}","errorExample":""},{"type":"xml","example":"<RecoveryOriginImageResponse>\\n    <RequestId>3BCAD49D-2AC1-13EB-AC19-8C7A46CF****</RequestId>\\n    <Code>200</Code>\\n    <Success>true</Success>\\n    <Message>SUCCESS</Message>\\n</RecoveryOriginImageResponse>","errorExample":""}]',
      'title' => '恢复原图',
    ),
    'RollbackSubScene' => 
    array (
      'summary' => '用于全景类型场景中已删除的子场景的恢复。',
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
      ),
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'none',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Id',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '子场景ID',
            'description' => '子场景ID',
            'type' => 'string',
            'required' => true,
            'example' => 'skjjskjk****',
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
              'RequestId' => 
              array (
                'title' => '请求ID，与入参requestId对应',
                'description' => '请求ID，与入参requestId对应',
                'type' => 'string',
                'example' => '3BCAD49D-2AC1-13EB-AC19-8C7A46CF****',
              ),
              'Code' => 
              array (
                'title' => '返回码',
                'description' => '返回码',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '200',
              ),
              'Success' => 
              array (
                'title' => '是否请求成功',
                'description' => '是否请求成功',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Message' => 
              array (
                'title' => '错误消息',
                'description' => '错误消息',
                'type' => 'string',
                'example' => 'sucess',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"3BCAD49D-2AC1-13EB-AC19-8C7A46CF****\\",\\n  \\"Code\\": 200,\\n  \\"Success\\": true,\\n  \\"Message\\": \\"sucess\\"\\n}","errorExample":""},{"type":"xml","example":"<RollbackSubSceneResponse>\\n    <RequestId>3BCAD49D-2AC1-13EB-AC19-8C7A46CF****</RequestId>\\n    <Code>200</Code>\\n    <Success>true</Success>\\n    <Message>sucess</Message>\\n</RollbackSubSceneResponse>","errorExample":""}]',
      'title' => '回滚子场景',
    ),
    'PublishStatus' => 
    array (
      'summary' => '查询发布状态。',
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
          'name' => 'SceneId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '场景ID',
            'description' => '场景ID',
            'type' => 'string',
            'required' => true,
            'example' => 'm+0cmndEGjg9pv/hy4jh****',
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
              'RequestId' => 
              array (
                'title' => '请求ID，与入参requestId对应',
                'description' => '请求ID，与入参requestId对应',
                'type' => 'string',
                'example' => '344794c32937474a9c59eb130936****',
              ),
              'Code' => 
              array (
                'title' => '返回码',
                'description' => '返回码',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '200',
              ),
              'Success' => 
              array (
                'title' => '是否请求成功',
                'description' => '是否请求成功',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Message' => 
              array (
                'title' => '错误消息',
                'description' => '错误消息',
                'type' => 'string',
                'example' => 'success',
              ),
              'Status' => 
              array (
                'title' => '任务运行状态',
                'description' => '场景发布状态，processing：处理中 succeed：成功 failed：失败',
                'type' => 'string',
                'example' => 'succeed',
              ),
              'SyncStatus' => 
              array (
                'title' => '文件同步状态',
                'description' => '文件同步状态，processing：处理中 succeed：成功 failed：失败',
                'type' => 'string',
                'example' => 'succeed',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"344794c32937474a9c59eb130936****\\",\\n  \\"Code\\": 200,\\n  \\"Success\\": true,\\n  \\"Message\\": \\"success\\",\\n  \\"Status\\": \\"succeed\\",\\n  \\"SyncStatus\\": \\"succeed\\"\\n}","errorExample":""},{"type":"xml","example":"<PublishStatusResponse>\\n    <RequestId>344794c32937474a9c59eb130936****</RequestId>\\n    <Code>200</Code>\\n    <Success>true</Success>\\n    <Message>success</Message>\\n    <Status>succeed</Status>\\n    <SyncStatus>succeed</SyncStatus>\\n</PublishStatusResponse>","errorExample":""}]',
      'title' => '查询发布状态',
    ),
    'AddRoomPlan' => 
    array (
      'summary' => '通过移动端算法处理会生成相应的房屋数据，将该数据上传至云端后，可通过云端算法模块进行三维模型重建。',
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
          'name' => 'SceneId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '场景ID',
            'description' => '场景ID',
            'type' => 'string',
            'required' => true,
            'example' => '1234****',
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
              'RequestId' => 
              array (
                'title' => '请求ID，与入参requestId对应',
                'description' => '请求ID，与入参requestId对应',
                'type' => 'string',
                'example' => '4F882EA7-3A1D-0113-94E4-70162C4****',
              ),
              'Code' => 
              array (
                'title' => '返回码',
                'description' => '返回码',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '200',
              ),
              'Success' => 
              array (
                'title' => '是否请求成功',
                'description' => '是否请求成功',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Message' => 
              array (
                'title' => '错误消息',
                'description' => '错误消息',
                'type' => 'string',
                'example' => 'success',
              ),
              'Data' => 
              array (
                'title' => '文件上传凭据',
                'description' => '文件上传凭据',
                'type' => 'object',
                'properties' => 
                array (
                  'AccessId' => 
                  array (
                    'title' => 'accessId',
                    'description' => 'accessId，OSS SDK上传时参数，对应OSSAccessKeyId',
                    'type' => 'string',
                    'example' => 'LTAI5t9kjkiudsnsu****',
                  ),
                  'Policy' => 
                  array (
                    'title' => '授权',
                    'description' => '授权，OSS SDK上传时参数，对应policy',
                    'type' => 'string',
                    'example' => 'eyJleHBpcmF0aW9uIjoiMjAy****',
                  ),
                  'Signature' => 
                  array (
                    'title' => '签名',
                    'description' => '签名，OSS SDK上传时参数，对应signature',
                    'type' => 'string',
                    'example' => 'ngEWGzttc3v2gJWCxEEt****',
                  ),
                  'Dir' => 
                  array (
                    'title' => '授权路径',
                    'description' => '授权路径，OSS SDK上传时参数，需要拼接文件名后使用， ${DIR}/xxx.jpg对应key',
                    'type' => 'string',
                    'example' => '123/',
                  ),
                  'Host' => 
                  array (
                    'title' => '上传地址',
                    'description' => '上传地址, OSS SDK上传时的请求地址',
                    'type' => 'string',
                    'example' => 'oss.aliyun.com',
                  ),
                  'Expire' => 
                  array (
                    'title' => '授权失效时间(s)',
                    'description' => '授权失效时间(s)，可以判断授权是否在有效期内，失效后授权不可用',
                    'type' => 'string',
                    'example' => '1640315897',
                  ),
                  'Callback' => 
                  array (
                    'title' => '上传回调',
                    'description' => '上传回调，保留字段，目前未使用',
                    'type' => 'string',
                    'example' => '""',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"4F882EA7-3A1D-0113-94E4-70162C4****\\",\\n  \\"Code\\": 200,\\n  \\"Success\\": true,\\n  \\"Message\\": \\"success\\",\\n  \\"Data\\": {\\n    \\"AccessId\\": \\"LTAI5t9kjkiudsnsu****\\",\\n    \\"Policy\\": \\"eyJleHBpcmF0aW9uIjoiMjAy****\\",\\n    \\"Signature\\": \\"ngEWGzttc3v2gJWCxEEt****\\",\\n    \\"Dir\\": \\"123/\\",\\n    \\"Host\\": \\"oss.aliyun.com\\",\\n    \\"Expire\\": \\"1640315897\\",\\n    \\"Callback\\": \\"\\\\\\"\\\\\\"\\"\\n  }\\n}","type":"json"}]',
      'title' => '房屋数据提交',
    ),
    'GetScenePreviewData' => 
    array (
      'summary' => '场景预览数据，用于模型渲染。',
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
          'name' => 'PreviewToken',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '预览token',
            'description' => '预览token',
            'type' => 'string',
            'required' => true,
            'example' => '2735913e96da44ea8c86f8e777c8****',
          ),
        ),
        1 => 
        array (
          'name' => 'Domain',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '自定义oss域名（可为cdn域名）',
            'description' => '自定义oss域名（可为cdn域名）',
            'type' => 'string',
            'required' => false,
            'example' => 'www.example.com',
          ),
        ),
        2 => 
        array (
          'name' => 'Enabled',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '是否开启自用资源访问（默认false）',
            'description' => '是否开启自用资源访问（默认false）',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true/false',
          ),
        ),
        3 => 
        array (
          'name' => 'ShowTag',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '是否返回热点数据（默认false）',
            'description' => '是否返回热点数据（默认false）',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true/false',
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
                'example' => 'A8CD0AD9-8A92-455A-A984-A7E4B76FF387',
              ),
              'Code' => 
              array (
                'title' => '返回码',
                'description' => '返回码',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '0：成功，其他：失败',
              ),
              'Success' => 
              array (
                'title' => '是否请求成功',
                'description' => '是否请求成功',
                'type' => 'boolean',
                'example' => 'true/false',
              ),
              'Message' => 
              array (
                'title' => '错误消息',
                'description' => '错误消息',
                'type' => 'string',
                'example' => 'xxxxx',
              ),
              'Data' => 
              array (
                'description' => '响应数据',
                'type' => 'object',
                'properties' => 
                array (
                  'Model' => 
                  array (
                    'title' => '模型数据',
                    'description' => '模型数据',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'PanoList' => 
                      array (
                        'title' => '点位数据',
                        'description' => '点位数据',
                        'type' => 'array',
                        'items' => 
                        array (
                          'description' => '模型场景数据',
                          'type' => 'object',
                          'properties' => 
                          array (
                            'Id' => 
                            array (
                              'title' => '点位ID',
                              'description' => '点位ID',
                              'type' => 'string',
                              'example' => '1****',
                            ),
                            'RawName' => 
                            array (
                              'title' => '一个名称，无实际意义',
                              'description' => '一个名称，无实际意义',
                              'type' => 'string',
                              'example' => 'location_93132801658010****',
                            ),
                            'FloorIdx' => 
                            array (
                              'title' => '楼层号',
                              'description' => '楼层号',
                              'type' => 'string',
                              'example' => '1****',
                            ),
                            'RoomIdx' => 
                            array (
                              'title' => '房间号',
                              'description' => '房间号',
                              'type' => 'string',
                              'example' => '1****',
                            ),
                            'Enabled' => 
                            array (
                              'title' => '当前点位是否渲染，false不渲染，场景无法跳转',
                              'description' => '当前点位是否渲染，false不渲染，场景无法跳转',
                              'type' => 'boolean',
                              'example' => 'true/false',
                            ),
                            'Token' => 
                            array (
                              'title' => 'token',
                              'description' => 'token',
                              'type' => 'string',
                              'example' => 'sIPGWRGLJHEIQE****',
                            ),
                            'Resource' => 
                            array (
                              'title' => '全景贴图路径',
                              'description' => '全景贴图路径',
                              'type' => 'string',
                              'example' => 'sgm/A.e.EOGTOEGYOOI****/pano_texture/multi/0/%s.jpg',
                            ),
                            'VirtualId' => 
                            array (
                              'title' => '图片虚拟ID',
                              'description' => '图片虚拟ID',
                              'type' => 'string',
                              'example' => '93132801658010****',
                            ),
                            'VirtualName' => 
                            array (
                              'title' => '图片名称',
                              'description' => '图片名称',
                              'type' => 'string',
                              'example' => '卧室',
                            ),
                            'MainImage' => 
                            array (
                              'title' => '单房间多图情况下，是否为主图，默认true',
                              'description' => '单房间多图情况下，是否为主图，默认true',
                              'type' => 'boolean',
                              'example' => 'true/false',
                            ),
                            'SubSceneId' => 
                            array (
                              'title' => '子场景ID',
                              'description' => '子场景ID',
                              'type' => 'string',
                              'example' => 'a7RqCd3kLMgglmn****',
                            ),
                            'CurRoomPicList' => 
                            array (
                              'title' => '当前房间的所有点位',
                              'description' => '当前房间的所有点位',
                              'type' => 'array',
                              'items' => 
                              array (
                                'description' => '点位ID',
                                'type' => 'string',
                                'example' => '1****',
                              ),
                            ),
                            'Neighbours' => 
                            array (
                              'title' => '当前房间邻近可视的点位id',
                              'description' => '当前房间邻近可视的点位id',
                              'type' => 'array',
                              'items' => 
                              array (
                                'description' => '点位ID',
                                'type' => 'string',
                                'example' => '1****',
                              ),
                            ),
                            'Position' => 
                            array (
                              'title' => '位置数据',
                              'description' => '位置数据',
                              'type' => 'object',
                              'properties' => 
                              array (
                                'Viewpoint' => 
                                array (
                                  'title' => '当前子场景名标签在场景中的坐标',
                                  'description' => '当前子场景名标签在场景中的坐标',
                                  'type' => 'array',
                                  'items' => 
                                  array (
                                    'description' => '坐标',
                                    'type' => 'number',
                                    'format' => 'double',
                                    'example' => '1.8893****',
                                  ),
                                ),
                                'Spot' => 
                                array (
                                  'title' => '当前点位在场景中的坐标',
                                  'description' => '当前点位在场景中的坐标',
                                  'type' => 'array',
                                  'items' => 
                                  array (
                                    'description' => '坐标',
                                    'type' => 'number',
                                    'format' => 'double',
                                    'example' => '0.23493****',
                                  ),
                                ),
                                'Rotation' => 
                                array (
                                  'title' => '当前点位在场景中的旋转四元素',
                                  'description' => '当前点位在场景中的旋转四元素',
                                  'type' => 'array',
                                  'items' => 
                                  array (
                                    'description' => '坐标',
                                    'type' => 'number',
                                    'format' => 'double',
                                    'example' => '1.234893****',
                                  ),
                                ),
                              ),
                            ),
                          ),
                        ),
                      ),
                      'ModelPath' => 
                      array (
                        'title' => '模型地址',
                        'description' => '模型地址',
                        'type' => 'string',
                        'example' => 'https://www.example.com/sgm/A.e.EOGTOE****/A.e.EOGTOE****.sgm',
                      ),
                      'TextureModelPath' => 
                      array (
                        'title' => '模型的贴图路径',
                        'description' => '模型的贴图路径',
                        'type' => 'string',
                        'example' => 'https://www.example.com/sgm/A.e.EOGTOE****/model_texture/',
                      ),
                      'TexturePanoPath' => 
                      array (
                        'title' => '漫游后预览图片路径',
                        'description' => '漫游后预览图片路径',
                        'type' => 'string',
                        'example' => 'https://www.example.com/sgm/A.e.EOGTOE****/pano_texture/',
                      ),
                    ),
                  ),
                  'Tags' => 
                  array (
                    'title' => '热点数据',
                    'description' => '热点数据',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '热点数据',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Id' => 
                        array (
                          'title' => '标签ID',
                          'description' => '标签ID',
                          'type' => 'string',
                          'example' => '1****',
                        ),
                        'Type' => 
                        array (
                          'title' => '热点类型',
                          'description' => '热点类型（TEXT | IMAGE | VIDEO | LINK | SCENESLINK）',
                          'type' => 'string',
                          'example' => 'IMAGE',
                        ),
                        'Position' => 
                        array (
                          'title' => '坐标',
                          'description' => '坐标',
                          'type' => 'array',
                          'items' => 
                          array (
                            'description' => '坐标',
                            'type' => 'number',
                            'format' => 'double',
                            'example' => '1.0033',
                          ),
                        ),
                        'PositionPanoCube' => 
                        array (
                          'description' => '坐标',
                          'type' => 'array',
                          'items' => 
                          array (
                            'description' => '坐标',
                            'type' => 'number',
                            'format' => 'double',
                            'example' => '1.0033',
                          ),
                        ),
                        'Config' => 
                        array (
                          'title' => '配置',
                          'description' => '配置',
                          'type' => 'object',
                          'properties' => 
                          array (
                            'Title' => 
                            array (
                              'title' => '标题',
                              'description' => '标题',
                              'type' => 'string',
                              'example' => '标题',
                            ),
                            'Content' => 
                            array (
                              'title' => '内容',
                              'description' => '内容',
                              'type' => 'string',
                              'example' => '内容',
                            ),
                            'BackgroundColor' => 
                            array (
                              'title' => '背景色',
                              'description' => '背景色',
                              'type' => 'string',
                              'example' => '#00000',
                            ),
                            'PanoId' => 
                            array (
                              'title' => '点位ID',
                              'description' => '点位ID',
                              'type' => 'string',
                              'example' => '1****',
                            ),
                            'Video' => 
                            array (
                              'title' => '视频链接',
                              'description' => '视频链接',
                              'type' => 'string',
                              'example' => 'http://www.example.com/****.mp4',
                            ),
                            'Link' => 
                            array (
                              'title' => '超链接',
                              'description' => '超链接',
                              'type' => 'string',
                              'example' => 'http://www.example.com/***',
                            ),
                            'SceneId' => 
                            array (
                              'title' => '场景ID',
                              'description' => '场景ID',
                              'type' => 'integer',
                              'format' => 'int64',
                              'example' => '323****',
                            ),
                            'Position' => 
                            array (
                              'title' => '坐标',
                              'description' => '坐标',
                              'type' => 'array',
                              'items' => 
                              array (
                                'description' => '坐标',
                                'type' => 'number',
                                'format' => 'double',
                                'example' => '-1.323****',
                              ),
                            ),
                            'PositionPanoCube' => 
                            array (
                              'description' => '坐标',
                              'type' => 'array',
                              'items' => 
                              array (
                                'description' => '坐标',
                                'type' => 'number',
                                'format' => 'double',
                                'example' => '1.323****',
                              ),
                            ),
                            'Images' => 
                            array (
                              'title' => '图片链接',
                              'description' => '图片链接',
                              'type' => 'array',
                              'items' => 
                              array (
                                'description' => '链接',
                                'type' => 'string',
                                'example' => 'http://www.example.com/****.jpg',
                              ),
                            ),
                            'ButtonConfig' => 
                            array (
                              'title' => '按钮配置',
                              'description' => '按钮配置',
                              'type' => 'object',
                              'properties' => 
                              array (
                                'Type' => 
                                array (
                                  'description' => '按钮类型',
                                  'type' => 'string',
                                  'example' => 'CLICK_CHECK',
                                ),
                                'CustomText' => 
                                array (
                                  'description' => '按钮内容',
                                  'type' => 'string',
                                  'example' => '点击查看',
                                ),
                              ),
                            ),
                            'FormSelectImgType' => 
                            array (
                              'description' => '内容类型，支持默认(default)，小标(point)，壁纸(mural)',
                              'type' => 'string',
                              'example' => 'default',
                            ),
                            'IsTagVisibleBy3d' => 
                            array (
                              'title' => '是否在鸟瞰模式下显示',
                              'description' => '是否在鸟瞰模式下显示',
                              'type' => 'boolean',
                              'example' => 'true/false',
                            ),
                            'FormJumpType' => 
                            array (
                              'description' => 'type为SCENESLINK时生效，背景图的大小',
                              'type' => 'boolean',
                              'example' => 'true/false',
                            ),
                            'FormImgSize' => 
                            array (
                              'description' => 'type为SCENESLINK时生效，背景图的大小',
                              'type' => 'array',
                              'items' => 
                              array (
                                'description' => '大小',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '1****',
                              ),
                            ),
                            'RelatedPanoIds' => 
                            array (
                              'description' => '当前热点所在房间的所有点位id
',
                              'type' => 'array',
                              'items' => 
                              array (
                                'description' => '点位ID',
                                'type' => 'string',
                                'example' => '1****',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"A8CD0AD9-8A92-455A-A984-A7E4B76FF387\\",\\n  \\"Code\\": 0,\\n  \\"Success\\": true,\\n  \\"Message\\": \\"xxxxx\\",\\n  \\"Data\\": {\\n    \\"Model\\": {\\n      \\"PanoList\\": [\\n        {\\n          \\"Id\\": \\"1****\\",\\n          \\"RawName\\": \\"location_93132801658010****\\",\\n          \\"FloorIdx\\": \\"1****\\",\\n          \\"RoomIdx\\": \\"1****\\",\\n          \\"Enabled\\": true,\\n          \\"Token\\": \\"sIPGWRGLJHEIQE****\\",\\n          \\"Resource\\": \\"sgm/A.e.EOGTOEGYOOI****/pano_texture/multi/0/%s.jpg\\",\\n          \\"VirtualId\\": \\"93132801658010****\\",\\n          \\"VirtualName\\": \\"卧室\\",\\n          \\"MainImage\\": true,\\n          \\"SubSceneId\\": \\"a7RqCd3kLMgglmn****\\",\\n          \\"CurRoomPicList\\": [\\n            \\"1****\\"\\n          ],\\n          \\"Neighbours\\": [\\n            \\"1****\\"\\n          ],\\n          \\"Position\\": {\\n            \\"Viewpoint\\": [\\n              0\\n            ],\\n            \\"Spot\\": [\\n              0\\n            ],\\n            \\"Rotation\\": [\\n              0\\n            ]\\n          }\\n        }\\n      ],\\n      \\"ModelPath\\": \\"https://www.example.com/sgm/A.e.EOGTOE****/A.e.EOGTOE****.sgm\\",\\n      \\"TextureModelPath\\": \\"https://www.example.com/sgm/A.e.EOGTOE****/model_texture/\\",\\n      \\"TexturePanoPath\\": \\"https://www.example.com/sgm/A.e.EOGTOE****/pano_texture/\\"\\n    },\\n    \\"Tags\\": [\\n      {\\n        \\"Id\\": \\"1****\\",\\n        \\"Type\\": \\"IMAGE\\",\\n        \\"Position\\": [\\n          1.0033\\n        ],\\n        \\"PositionPanoCube\\": [\\n          1.0033\\n        ],\\n        \\"Config\\": {\\n          \\"Title\\": \\"标题\\",\\n          \\"Content\\": \\"内容\\",\\n          \\"BackgroundColor\\": \\"#00000\\",\\n          \\"PanoId\\": \\"1****\\",\\n          \\"Video\\": \\"http://www.example.com/****.mp4\\",\\n          \\"Link\\": \\"http://www.example.com/***\\",\\n          \\"SceneId\\": 0,\\n          \\"Position\\": [\\n            0\\n          ],\\n          \\"PositionPanoCube\\": [\\n            0\\n          ],\\n          \\"Images\\": [\\n            \\"http://www.example.com/****.jpg\\"\\n          ],\\n          \\"ButtonConfig\\": {\\n            \\"Type\\": \\"CLICK_CHECK\\",\\n            \\"CustomText\\": \\"点击查看\\"\\n          },\\n          \\"FormSelectImgType\\": \\"default\\",\\n          \\"IsTagVisibleBy3d\\": true,\\n          \\"FormJumpType\\": true,\\n          \\"FormImgSize\\": [\\n            0\\n          ],\\n          \\"RelatedPanoIds\\": [\\n            \\"1****\\"\\n          ]\\n        }\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<GetScenePreviewDataResponse>\\n    <RequestId>A8CD0AD9-8A92-455A-A984-A7E4B76FF387</RequestId>\\n    <Success>false</Success>\\n    <Message>xxxxx</Message>\\n    <Data>\\n        <Model>\\n            <PanoList>\\n                <Id>1****</Id>\\n                <RawName>location_93132801658010****</RawName>\\n                <FloorIdx>1****</FloorIdx>\\n                <RoomIdx>1****</RoomIdx>\\n                <Enabled>false</Enabled>\\n                <Token>sIPGWRGLJHEIQE****</Token>\\n                <Resource>sgm/A.e.EOGTOEGYOOI****/pano_texture/multi/0/%s.jpg</Resource>\\n                <VirtualId>93132801658010****</VirtualId>\\n                <VirtualName>卧室</VirtualName>\\n                <MainImage>false</MainImage>\\n                <SubSceneId>a7RqCd3kLMgglmn****</SubSceneId>\\n                <CurRoomPicList>1****</CurRoomPicList>\\n                <Neighbours>1****</Neighbours>\\n                <Position>\\n                </Position>\\n            </PanoList>\\n            <ModelPath>https://www.example.com/sgm/A.e.EOGTOE****/A.e.EOGTOE****.sgm</ModelPath>\\n            <TextureModelPath>https://www.example.com/sgm/A.e.EOGTOE****/model_texture/</TextureModelPath>\\n            <TexturePanoPath>https://www.example.com/sgm/A.e.EOGTOE****/pano_texture/</TexturePanoPath>\\n        </Model>\\n        <Tags>\\n            <Id>1****</Id>\\n            <Type>IMAGE</Type>\\n            <Position>1.0033</Position>\\n            <PositionPanoCube>1.0033</PositionPanoCube>\\n            <Config>\\n                <Title>标题</Title>\\n                <Content>内容</Content>\\n                <BackgroundColor>#00000</BackgroundColor>\\n                <PanoId>1****</PanoId>\\n                <Video>http://www.example.com/****.mp4</Video>\\n                <Link>http://www.example.com/***</Link>\\n                <Images>http://www.example.com/****.jpg</Images>\\n                <ButtonConfig>\\n                    <Type>CLICK_CHECK</Type>\\n                    <CustomText>点击查看</CustomText>\\n                </ButtonConfig>\\n                <FormSelectImgType>default</FormSelectImgType>\\n                <IsTagVisibleBy3d>false</IsTagVisibleBy3d>\\n                <FormJumpType>false</FormJumpType>\\n                <RelatedPanoIds>1****</RelatedPanoIds>\\n            </Config>\\n        </Tags>\\n    </Data>\\n</GetScenePreviewDataResponse>","errorExample":""}]',
      'title' => '场景预览数据',
    ),
    'CheckUserProperty' => 
    array (
      'summary' => '检查用户是否具有指定业务属性。',
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
      ),
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'none',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Uid',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '用户uid',
            'description' => '用户uid',
            'type' => 'string',
            'required' => true,
            'example' => '2345****',
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
              'RequestId' => 
              array (
                'title' => '请求ID，与入参requestId对应',
                'description' => '请求ID，与入参requestId对应',
                'type' => 'string',
                'example' => '344794c32937474a9c59eb1309366493',
              ),
              'Code' => 
              array (
                'title' => '返回码',
                'description' => '返回码',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '200',
              ),
              'Success' => 
              array (
                'title' => '是否请求成功',
                'description' => '是否请求成功',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Message' => 
              array (
                'title' => '错误消息',
                'description' => '错误消息',
                'type' => 'string',
                'example' => 'success',
              ),
              'Match' => 
              array (
                'title' => '用户属性是否匹配',
                'description' => '指定UID是否具有阿里拍卖业务属性标记',
                'type' => 'boolean',
                'example' => 'true',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"344794c32937474a9c59eb1309366493\\",\\n  \\"Code\\": 200,\\n  \\"Success\\": true,\\n  \\"Message\\": \\"success\\",\\n  \\"Match\\": true\\n}","errorExample":""},{"type":"xml","example":"<CheckUserPropertyResponse>\\n    <RequestId>344794c32937474a9c59eb1309366493</RequestId>\\n    <Code>200</Code>\\n    <Success>true</Success>\\n    <Message>success</Message>\\n    <Match>true</Match>\\n</CheckUserPropertyResponse>","errorExample":""}]',
      'title' => '检查用户业务属性',
    ),
    'GetScenePreviewResource' => 
    array (
      'summary' => '用于模型类场景的预览。',
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
          'name' => 'PreviewToken',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '预览token',
            'description' => '预览token',
            'type' => 'string',
            'required' => true,
            'example' => '2deb941b3e1****',
          ),
        ),
        1 => 
        array (
          'name' => 'Draft',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '是否草稿预览',
            'description' => 'true/false，是否草稿预览，默认：false，用于热点添加后的预览',
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
                'description' => 'Id of the request',
                'type' => 'string',
                'example' => 'A8CD0AD9-8A92-455A-A984-A7E4B76*****',
              ),
              'Code' => 
              array (
                'title' => '返回码',
                'description' => '返回码',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '0：成功，其他：失败',
              ),
              'Success' => 
              array (
                'title' => '是否请求成功',
                'description' => '是否请求成功',
                'type' => 'boolean',
                'example' => 'true/false',
              ),
              'Message' => 
              array (
                'title' => '错误消息',
                'description' => '错误消息',
                'type' => 'string',
                'example' => 'xxxxx',
              ),
              'Data' => 
              array (
                'title' => '模型数据',
                'description' => '返回数据',
                'type' => 'object',
                'properties' => 
                array (
                  'Version' => 
                  array (
                    'title' => '版本',
                    'description' => '引擎版本',
                    'type' => 'string',
                    'example' => '1.0',
                  ),
                  'Name' => 
                  array (
                    'title' => '模型名称',
                    'description' => '场景名称',
                    'type' => 'string',
                    'example' => '场景-Example',
                  ),
                  'ResourceDirectory' => 
                  array (
                    'title' => '资源路径',
                    'description' => '模型资源',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'RootPath' => 
                      array (
                        'title' => '模型路径',
                        'description' => '模型所在路径',
                        'type' => 'string',
                        'example' => 'A.e.YKPYuuYuituy****',
                      ),
                      'OrthomapConfig' => 
                      array (
                        'title' => '小地图数据文件路径',
                        'description' => '小地图配置文件',
                        'type' => 'string',
                        'example' => 'orthomap/orthomap.json',
                      ),
                      'ModelConfig' => 
                      array (
                        'title' => '模型配置路径',
                        'description' => '模型配置文件',
                        'type' => 'string',
                        'example' => 'config.json',
                      ),
                      'HotspotTagConfig' => 
                      array (
                        'title' => '热点文件路径',
                        'description' => '热点文件路径',
                        'type' => 'string',
                        'example' => 'hotspotTag.json',
                      ),
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"A8CD0AD9-8A92-455A-A984-A7E4B76*****\\",\\n  \\"Code\\": 0,\\n  \\"Success\\": true,\\n  \\"Message\\": \\"xxxxx\\",\\n  \\"Data\\": {\\n    \\"Version\\": \\"1.0\\",\\n    \\"Name\\": \\"场景-Example\\",\\n    \\"ResourceDirectory\\": {\\n      \\"RootPath\\": \\"A.e.YKPYuuYuituy****\\",\\n      \\"OrthomapConfig\\": \\"orthomap/orthomap.json\\",\\n      \\"ModelConfig\\": \\"config.json\\",\\n      \\"HotspotTagConfig\\": \\"hotspotTag.json\\"\\n    }\\n  }\\n}","errorExample":""},{"type":"xml","example":"<GetScenePreviewResourceResponse>\\n    <RequestId>A8CD0AD9-8A92-455A-A984-A7E4B76*****</RequestId>\\n    <Success>false</Success>\\n    <Message>xxxxx</Message>\\n    <Data>\\n        <Version>1.0</Version>\\n        <Name>场景-Example</Name>\\n        <ResourceDirectory>\\n            <RootPath>A.e.YKPYuuYuituy****</RootPath>\\n            <OrthomapConfig>orthomap/orthomap.json</OrthomapConfig>\\n            <ModelConfig>config.json</ModelConfig>\\n            <HotspotTagConfig>hotspotTag.json</HotspotTagConfig>\\n        </ResourceDirectory>\\n    </Data>\\n</GetScenePreviewResourceResponse>","errorExample":""}]',
      'title' => '场景预览数据',
    ),
    'GetPackSceneTaskStatus' => 
    array (
      'summary' => '获取场景数据打包状态。',
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
          'name' => 'TaskId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '任务ID',
            'description' => '任务ID',
            'type' => 'string',
            'required' => true,
            'example' => 'hjsyuyiuwe7wehg****',
          ),
        ),
        1 => 
        array (
          'name' => 'Type',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '操作类型：download（下载），sync（同步）',
            'description' => '操作类型：download（下载），sync（同步）',
            'type' => 'string',
            'required' => true,
            'example' => 'download',
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
            'description' => '响应',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID',
                'type' => 'string',
                'example' => 'A8CD0AD9-8A92-455A-A984-A7E4B****',
              ),
              'Code' => 
              array (
                'title' => '返回码',
                'description' => '200：成功，其他：失败',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '200',
              ),
              'Success' => 
              array (
                'title' => '是否请求成功',
                'description' => '是否请求成功',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Message' => 
              array (
                'title' => '错误消息',
                'description' => '错误消息',
                'type' => 'string',
                'example' => 'xxxxx',
              ),
              'Data' => 
              array (
                'description' => '返回数据',
                'type' => 'object',
                'properties' => 
                array (
                  'Status' => 
                  array (
                    'title' => '任务状态',
                    'description' => '状态：处理中 : processing 失败 :failed 完成 :succeed',
                    'type' => 'string',
                    'example' => 'succeed',
                  ),
                  'Progress' => 
                  array (
                    'title' => '任务进度',
                    'description' => '进度百分比',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '100',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"A8CD0AD9-8A92-455A-A984-A7E4B****\\",\\n  \\"Code\\": 200,\\n  \\"Success\\": true,\\n  \\"Message\\": \\"xxxxx\\",\\n  \\"Data\\": {\\n    \\"Status\\": \\"succeed\\",\\n    \\"Progress\\": 100\\n  }\\n}","errorExample":""},{"type":"xml","example":"<GetPackSceneTaskStatusResponse>\\n    <RequestId>A8CD0AD9-8A92-455A-A984-A7E4B****</RequestId>\\n    <Code>200</Code>\\n    <Success>true</Success>\\n    <Message>xxxxx</Message>\\n    <Data>\\n        <Status>succeed</Status>\\n        <Progress>100</Progress>\\n    </Data>\\n</GetPackSceneTaskStatusResponse>","errorExample":""}]',
      'title' => '获取场景数据打包状态',
    ),
    'GetScenePackUrl' => 
    array (
      'summary' => '用于调用PackScene接口后，获取数据包地址，以便于下载。',
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
          'name' => 'SceneId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '场景ID',
            'description' => '场景ID',
            'type' => 'string',
            'required' => true,
            'example' => 'L2omaCMmQZZkEg4p****',
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
            'description' => '响应',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID',
                'type' => 'string',
                'example' => 'A8CD0AD9-8A92-455A-A984-A7E4B76****',
              ),
              'Code' => 
              array (
                'title' => '返回码',
                'description' => '200：成功，其他：失败',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '200',
              ),
              'Success' => 
              array (
                'title' => '是否请求成功',
                'description' => '是否请求成功',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Message' => 
              array (
                'title' => '错误消息',
                'description' => '错误消息',
                'type' => 'string',
                'example' => 'xxxxx',
              ),
              'Data' => 
              array (
                'description' => '返回数据',
                'type' => 'object',
                'properties' => 
                array (
                  'Url' => 
                  array (
                    'title' => '打包文件地址',
                    'description' => '打包文件地址',
                    'type' => 'string',
                    'example' => 'www.example.com/preview/24714a7****/****.zip',
                  ),
                  'Expire' => 
                  array (
                    'title' => '失效日期',
                    'description' => '失效日期',
                    'type' => 'string',
                    'example' => '2022-05-17 11:00:17',
                  ),
                  'Valid' => 
                  array (
                    'title' => '是否有效',
                    'description' => '是否有效',
                    'type' => 'boolean',
                    'example' => 'true',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"A8CD0AD9-8A92-455A-A984-A7E4B76****\\",\\n  \\"Code\\": 200,\\n  \\"Success\\": true,\\n  \\"Message\\": \\"xxxxx\\",\\n  \\"Data\\": {\\n    \\"Url\\": \\"www.example.com/preview/24714a7****/****.zip\\",\\n    \\"Expire\\": \\"2022-05-17 11:00:17\\",\\n    \\"Valid\\": true\\n  }\\n}","errorExample":""},{"type":"xml","example":"<GetScenePackUrlResponse>\\n    <RequestId>A8CD0AD9-8A92-455A-A984-A7E4B76****</RequestId>\\n    <Code>200</Code>\\n    <Success>true</Success>\\n    <Message>xxxxx</Message>\\n    <Data>\\n        <Url>www.example.com/preview/24714a7****/****.zip</Url>\\n        <Expire>2022-05-17 11:00:17</Expire>\\n        <Valid>true</Valid>\\n    </Data>\\n</GetScenePackUrlResponse>","errorExample":""}]',
      'title' => '获取场景打包文件地址',
    ),
    'PackScene' => 
    array (
      'summary' => '打包场景数据，入参type为download可下载到本地，入参type为sync可可同步到自己的阿里云oss（前提是自己已开通）。',
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
        'operationType' => 'none',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'SceneId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '场景ID',
            'description' => '场景ID',
            'type' => 'string',
            'required' => true,
            'example' => 'L2omaCMmQZZkEg4p****',
          ),
        ),
        1 => 
        array (
          'name' => 'Type',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '操作类型：download（下载），sync（同步）',
            'description' => '操作类型：download（下载），sync（同步）',
            'type' => 'string',
            'required' => true,
            'example' => 'download',
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
            'description' => '响应',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID',
                'type' => 'string',
                'example' => 'A8CD0AD9-8A92-455A-A984-A7E4B76****',
              ),
              'Code' => 
              array (
                'title' => '返回码',
                'description' => '200：成功，其他：失败',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '200',
              ),
              'Success' => 
              array (
                'title' => '是否请求成功',
                'description' => '是否请求成功',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Message' => 
              array (
                'title' => '错误消息',
                'description' => '错误消息',
                'type' => 'string',
                'example' => 'xxxxx',
              ),
              'Data' => 
              array (
                'description' => '返回数据',
                'type' => 'object',
                'properties' => 
                array (
                  'TaskId' => 
                  array (
                    'title' => '任务ID',
                    'description' => '任务ID',
                    'type' => 'string',
                    'example' => 'hjsyuyiuwe7wehg****',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"A8CD0AD9-8A92-455A-A984-A7E4B76****\\",\\n  \\"Code\\": 200,\\n  \\"Success\\": true,\\n  \\"Message\\": \\"xxxxx\\",\\n  \\"Data\\": {\\n    \\"TaskId\\": \\"hjsyuyiuwe7wehg****\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<PackSceneResponse>\\n    <RequestId>A8CD0AD9-8A92-455A-A984-A7E4B76****</RequestId>\\n    <Code>200</Code>\\n    <Success>true</Success>\\n    <Message>xxxxx</Message>\\n    <Data>\\n        <TaskId>hjsyuyiuwe7wehg****</TaskId>\\n    </Data>\\n</PackSceneResponse>","errorExample":""}]',
      'title' => '场景数据打包',
    ),
    'GetCopySceneTaskStatus' => 
    array (
      'summary' => '查询复制场景任务状态。',
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
          'name' => 'TaskId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '任务ID',
            'description' => '任务ID',
            'type' => 'string',
            'required' => true,
            'example' => 'yuywey****',
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
            'description' => '响应',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID',
                'type' => 'string',
                'example' => 'A8CD0AD9-8A92-455A-A984-A7E4****',
              ),
              'Code' => 
              array (
                'title' => '返回码',
                'description' => '返回码，200：成功，其他：失败',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '200',
              ),
              'Success' => 
              array (
                'title' => '是否请求成功',
                'description' => '是否请求成功',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Message' => 
              array (
                'title' => '错误消息',
                'description' => '错误消息',
                'type' => 'string',
                'example' => 'xxxxx',
              ),
              'Data' => 
              array (
                'description' => '返回数据',
                'type' => 'object',
                'properties' => 
                array (
                  'Status' => 
                  array (
                    'title' => '任务状态',
                    'description' => '状态：处理中 : processing 失败 :failed 完成 :succeed',
                    'type' => 'string',
                    'example' => 'succeed',
                  ),
                  'Progress' => 
                  array (
                    'title' => '任务进度',
                    'description' => '进度百分比',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '100',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"A8CD0AD9-8A92-455A-A984-A7E4****\\",\\n  \\"Code\\": 200,\\n  \\"Success\\": true,\\n  \\"Message\\": \\"xxxxx\\",\\n  \\"Data\\": {\\n    \\"Status\\": \\"succeed\\",\\n    \\"Progress\\": 100\\n  }\\n}","errorExample":""},{"type":"xml","example":"<GetCopySceneTaskStatusResponse>\\n    <RequestId>A8CD0AD9-8A92-455A-A984-A7E4****</RequestId>\\n    <Code>200</Code>\\n    <Success>true</Success>\\n    <Message>xxxxx</Message>\\n    <Data>\\n        <Status>succeed</Status>\\n        <Progress>100</Progress>\\n    </Data>\\n</GetCopySceneTaskStatusResponse>","errorExample":""}]',
      'title' => '查询复制场景任务状态',
    ),
    'UpdateSubSceneSeq' => 
    array (
      'summary' => '此接口用于预览页面中子场景的顺序。',
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
      ),
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'SceneId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '子场景ID',
            'description' => '子场景ID',
            'type' => 'string',
            'required' => true,
            'example' => 'sgyuyewyew****',
          ),
        ),
        1 => 
        array (
          'name' => 'SortSubSceneIds',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '用于排序的子场景ID数组',
            'type' => 'array',
            'items' => 
            array (
              'description' => '子场景ID',
              'type' => 'string',
              'required' => false,
              'example' => 'hjsiiqw****',
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
            'description' => '响应',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => '请求ID，与入参requestId对应',
                'description' => '请求ID，与入参requestId对应',
                'type' => 'string',
                'example' => '344794c32937474a9c59eb13093****',
              ),
              'Code' => 
              array (
                'title' => '返回码',
                'description' => '返回码',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '200',
              ),
              'Success' => 
              array (
                'title' => '是否请求成功',
                'description' => '是否请求成功',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Message' => 
              array (
                'title' => '错误消息',
                'description' => '错误消息',
                'type' => 'string',
                'example' => 'success',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"344794c32937474a9c59eb13093****\\",\\n  \\"Code\\": 200,\\n  \\"Success\\": true,\\n  \\"Message\\": \\"success\\"\\n}","errorExample":""},{"type":"xml","example":"<UpdateSubSceneSeqResponse>\\n    <RequestId>344794c32937474a9c59eb13093****</RequestId>\\n    <Code>200</Code>\\n    <Success>true</Success>\\n    <Message>success</Message>\\n</UpdateSubSceneSeqResponse>","errorExample":""}]',
      'title' => '更新子场景顺序',
    ),
    'CopyScene' => 
    array (
      'summary' => '可以把原来的场景复制一份。',
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
      ),
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'none',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'SceneId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '场景Id',
            'description' => '场景Id',
            'type' => 'string',
            'required' => true,
            'example' => 'sgyuyewyew****',
          ),
        ),
        1 => 
        array (
          'name' => 'SceneName',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '新场景名称',
            'description' => '新场景名称',
            'type' => 'string',
            'required' => true,
            'example' => '场景A',
          ),
        ),
        2 => 
        array (
          'name' => 'ProjectId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '复制到的项目Id，默认为空，复制到当前场景所在的项目',
            'description' => '复制到的项目Id，默认为空，复制到当前场景所在的项目',
            'type' => 'string',
            'required' => false,
            'example' => 'opwuoieywtyqw****',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '响应',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => '请求ID，与入参requestId对应',
                'description' => '请求ID',
                'type' => 'string',
                'example' => '4F882EA7-3A1D-0113-94E4-70162C4B***',
              ),
              'Code' => 
              array (
                'title' => '返回码',
                'description' => '返回码，200：成功，其他：失败',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '200',
              ),
              'Success' => 
              array (
                'title' => '是否请求成功',
                'description' => '是否请求成功',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Message' => 
              array (
                'title' => '错误消息',
                'description' => '错误消息',
                'type' => 'string',
                'example' => 'success',
              ),
              'Data' => 
              array (
                'description' => '返回数据',
                'type' => 'object',
                'properties' => 
                array (
                  'TaskId' => 
                  array (
                    'title' => '任务ID',
                    'description' => '任务ID',
                    'type' => 'string',
                    'example' => 'yuywey****',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"4F882EA7-3A1D-0113-94E4-70162C4B***\\",\\n  \\"Code\\": 200,\\n  \\"Success\\": true,\\n  \\"Message\\": \\"success\\",\\n  \\"Data\\": {\\n    \\"TaskId\\": \\"yuywey****\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<CopySceneResponse>\\n    <RequestId>4F882EA7-3A1D-0113-94E4-70162C4B***</RequestId>\\n    <Code>200</Code>\\n    <Success>true</Success>\\n    <Message>success</Message>\\n    <Data>\\n        <TaskId>yuywey****</TaskId>\\n    </Data>\\n</CopySceneResponse>","errorExample":""}]',
      'title' => '复制场景',
    ),
    'GetSourcePackStatus' => 
    array (
      'summary' => '获取全景图文件打包状态。',
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
          'name' => 'TaskId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '任务ID',
            'description' => '任务ID',
            'type' => 'string',
            'required' => true,
            'example' => 'hjsyuyiuwe7wehg****',
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
            'description' => '响应',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID',
                'type' => 'string',
                'example' => 'A8CD0AD9-8A92-455A-A984-A7E4B76****',
              ),
              'Code' => 
              array (
                'title' => '返回码',
                'description' => '200：成功，其他：失败',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '200',
              ),
              'Success' => 
              array (
                'title' => '是否请求成功',
                'description' => '是否请求成功',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Message' => 
              array (
                'title' => '错误消息',
                'description' => '错误消息',
                'type' => 'string',
                'example' => 'xxxxx',
              ),
              'Data' => 
              array (
                'description' => '返回数据',
                'type' => 'object',
                'properties' => 
                array (
                  'Status' => 
                  array (
                    'title' => '任务状态',
                    'description' => '状态：处理中 : processing 失败 :failed 完成 :succeed',
                    'type' => 'string',
                    'example' => 'succeed',
                  ),
                  'Progress' => 
                  array (
                    'title' => '任务进度',
                    'description' => '进度百分比',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '100',
                  ),
                ),
              ),
              'Url' => 
              array (
                'title' => '压缩包的地址',
                'description' => '压缩包的地址',
                'type' => 'string',
                'example' => 'www.example.com/preview/24714a7****/****.zip',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"A8CD0AD9-8A92-455A-A984-A7E4B76****\\",\\n  \\"Code\\": 200,\\n  \\"Success\\": true,\\n  \\"Message\\": \\"xxxxx\\",\\n  \\"Data\\": {\\n    \\"Status\\": \\"succeed\\",\\n    \\"Progress\\": 100\\n  },\\n  \\"Url\\": \\"www.example.com/preview/24714a7****/****.zip\\"\\n}","errorExample":""},{"type":"xml","example":"<GetSourcePackStatusResponse>\\n    <RequestId>A8CD0AD9-8A92-455A-A984-A7E4B76FF387</RequestId>\\n    <Code>200</Code>\\n    <Success>true</Success>\\n    <Message>xxxxx</Message>\\n    <Data>\\n        <Status>succeed</Status>\\n        <Progress>100</Progress>\\n    </Data>\\n    <Url>www.example.com/preview/24714a7****/****.zip</Url>\\n</GetSourcePackStatusResponse>","errorExample":""}]',
      'title' => '获取全景图文件打包状态',
    ),
    'PackSource' => 
    array (
      'summary' => '获取3D模型类型下所有全景图片。',
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
        'operationType' => 'none',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'SceneId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '场景ID',
            'description' => '场景ID',
            'type' => 'string',
            'required' => true,
            'example' => 'L2omaCMmQZZkEg4p****',
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
            'description' => '响应',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID',
                'type' => 'string',
                'example' => 'A8CD0AD9-8A92-455A-A984-A7E4B76F****',
              ),
              'Code' => 
              array (
                'title' => '返回码',
                'description' => '200：成功，其他：失败',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '200',
              ),
              'Success' => 
              array (
                'title' => '是否请求成功',
                'description' => '是否请求成功',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Message' => 
              array (
                'title' => '错误消息',
                'description' => '错误消息',
                'type' => 'string',
                'example' => 'xxxxx',
              ),
              'Data' => 
              array (
                'description' => '返回数据',
                'type' => 'object',
                'properties' => 
                array (
                  'TaskId' => 
                  array (
                    'title' => '任务ID',
                    'description' => '任务ID',
                    'type' => 'string',
                    'example' => 'hjsyuyiuwe7wehg****',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"A8CD0AD9-8A92-455A-A984-A7E4B76F****\\",\\n  \\"Code\\": 200,\\n  \\"Success\\": true,\\n  \\"Message\\": \\"xxxxx\\",\\n  \\"Data\\": {\\n    \\"TaskId\\": \\"hjsyuyiuwe7wehg****\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<PackSourceResponse>\\n    <RequestId>A8CD0AD9-8A92-455A-A984-A7E4B76F****</RequestId>\\n    <Code>200</Code>\\n    <Success>true</Success>\\n    <Message>xxxxx</Message>\\n    <Data>\\n        <TaskId>hjsyuyiuwe7wehg****</TaskId>\\n    </Data>\\n</PackSourceResponse>","errorExample":""}]',
      'title' => '获取全景图文件',
    ),
    'SaveHotspotTagList' => 
    array (
      'summary' => '保存热点数据。',
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
          'name' => 'SceneId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '场景Id',
            'description' => '场景Id',
            'type' => 'string',
            'required' => true,
            'example' => 'tqwiuwetwet****',
          ),
        ),
        1 => 
        array (
          'name' => 'HotspotListJson',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '热点数据，json字符串数组',
            'description' => '热点数据，json字符串数组',
            'type' => 'string',
            'required' => true,
            'example' => '[{}]',
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
              'RequestId' => 
              array (
                'title' => '请求ID，与入参requestId对应',
                'description' => '请求ID，与入参requestId对应',
                'type' => 'string',
                'example' => 'B28A2ECB-AB29-1E01****',
              ),
              'Code' => 
              array (
                'title' => '返回码',
                'description' => '返回码',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '200',
              ),
              'Success' => 
              array (
                'title' => '是否请求成功',
                'description' => '是否请求成功',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Message' => 
              array (
                'title' => '错误消息',
                'description' => '错误消息',
                'type' => 'string',
                'example' => 'success',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"B28A2ECB-AB29-1E01****\\",\\n  \\"Code\\": 200,\\n  \\"Success\\": true,\\n  \\"Message\\": \\"success\\"\\n}","errorExample":""},{"type":"xml","example":"<SaveHotspotTagListResponse>\\n    <RequestId>B28A2ECB-AB29-1E01****</RequestId>\\n    <Code>200</Code>\\n    <Success>true</Success>\\n    <Message>success</Message>\\n</SaveHotspotTagListResponse>","errorExample":""}]',
      'title' => '保存热点数据',
      'requestParamsDescription' => 'HotspotListJson字段为json字符串数组，具体格式参照前端引擎。',
    ),
    'SaveModelConfig' => 
    array (
      'summary' => '保存模型配置。',
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
          'name' => 'Data',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '模型配置，json字符串',
            'description' => '模型配置，json字符串',
            'type' => 'string',
            'required' => true,
            'example' => '{}',
          ),
        ),
        1 => 
        array (
          'name' => 'SceneId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '场景ID',
            'description' => '场景ID',
            'type' => 'string',
            'required' => true,
            'example' => 'iyweyteyue****',
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
              'RequestId' => 
              array (
                'title' => '请求ID，与入参requestId对应',
                'description' => '请求ID，与入参requestId对应',
                'type' => 'string',
                'example' => 'B28A2ECB-AB29-1E01****',
              ),
              'Code' => 
              array (
                'title' => '返回码',
                'description' => '返回码',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '200',
              ),
              'Success' => 
              array (
                'title' => '是否请求成功',
                'description' => '是否请求成功',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Message' => 
              array (
                'title' => '错误消息',
                'description' => '错误消息',
                'type' => 'string',
                'example' => 'SUCCESS',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"B28A2ECB-AB29-1E01****\\",\\n  \\"Code\\": 200,\\n  \\"Success\\": true,\\n  \\"Message\\": \\"SUCCESS\\"\\n}","errorExample":""},{"type":"xml","example":"<SaveModelConfigResponse>\\n    <RequestId>B28A2ECB-AB29-1E01****</RequestId>\\n    <Code>200</Code>\\n    <Success>true</Success>\\n    <Message>SUCCESS</Message>\\n</SaveModelConfigResponse>","errorExample":""}]',
      'title' => '保存模型配置',
    ),
    'CreateUploadPolicy' => 
    array (
      'summary' => '获取上传凭据。',
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
          'name' => 'Type',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '上传类型，值为：scene（场景）、subScene（子场景）、rooms（rooms文件）、hotspot（后处理相关）',
            'description' => '上传类型，值为：scene（场景）、subScene（子场景）、hotspot（后处理相关）',
            'type' => 'string',
            'required' => true,
            'example' => 'scene',
          ),
        ),
        1 => 
        array (
          'name' => 'Option',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '不同类型对应的参数',
            'description' => '不同类型对应的参数',
            'type' => 'string',
            'required' => true,
            'example' => '{}',
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
              'RequestId' => 
              array (
                'title' => '请求ID，与入参requestId对应',
                'description' => '请求ID，与入参requestId对应',
                'type' => 'string',
                'example' => 'B28A2ECB-AB29-1E01****',
              ),
              'Code' => 
              array (
                'title' => '返回码',
                'description' => '返回码',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '200',
              ),
              'Success' => 
              array (
                'title' => '是否请求成功',
                'description' => '是否请求成功',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Message' => 
              array (
                'title' => '错误消息',
                'description' => '错误消息',
                'type' => 'string',
                'example' => 'SUCCESS',
              ),
              'Data' => 
              array (
                'description' => '返回数据',
                'type' => 'object',
                'properties' => 
                array (
                  'AccessId' => 
                  array (
                    'title' => 'accessId',
                    'description' => 'accessId',
                    'type' => 'string',
                    'example' => 'LTAI5t9k9****',
                  ),
                  'Policy' => 
                  array (
                    'title' => '授权',
                    'description' => '授权',
                    'type' => 'string',
                    'example' => 'eyJleHBpcmF0aW9uIjoiMj****',
                  ),
                  'Signature' => 
                  array (
                    'title' => '签名',
                    'description' => '签名',
                    'type' => 'string',
                    'example' => 'KdnPJFIG25SM****',
                  ),
                  'Dir' => 
                  array (
                    'title' => '授权路径',
                    'description' => '授权路径',
                    'type' => 'string',
                    'example' => 'dir/',
                  ),
                  'Host' => 
                  array (
                    'title' => '上传地址',
                    'description' => '上传地址',
                    'type' => 'string',
                    'example' => 'oss.aliyun.com',
                  ),
                  'Expire' => 
                  array (
                    'title' => '授权失效时间(s)',
                    'description' => '授权失效时间(s)',
                    'type' => 'string',
                    'example' => '1658812297',
                  ),
                  'Callback' => 
                  array (
                    'title' => '上传回调',
                    'description' => '上传回调',
                    'type' => 'string',
                    'example' => '""',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"B28A2ECB-AB29-1E01****\\",\\n  \\"Code\\": 200,\\n  \\"Success\\": true,\\n  \\"Message\\": \\"SUCCESS\\",\\n  \\"Data\\": {\\n    \\"AccessId\\": \\"LTAI5t9k9****\\",\\n    \\"Policy\\": \\"eyJleHBpcmF0aW9uIjoiMj****\\",\\n    \\"Signature\\": \\"KdnPJFIG25SM****\\",\\n    \\"Dir\\": \\"dir/\\",\\n    \\"Host\\": \\"oss.aliyun.com\\",\\n    \\"Expire\\": \\"1658812297\\",\\n    \\"Callback\\": \\"\\\\\\"\\\\\\"\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<CreateUploadPolicyResponse>\\n    <RequestId>B28A2ECB-AB29-1E01****</RequestId>\\n    <Code>200</Code>\\n    <Success>true</Success>\\n    <Message>SUCCESS</Message>\\n    <Data>\\n        <AccessId>LTAI5t9k9****</AccessId>\\n        <Policy>eyJleHBpcmF0aW9uIjoiMj****</Policy>\\n        <Signature>KdnPJFIG25SM****</Signature>\\n        <Dir>dir/</Dir>\\n        <Host>oss.aliyun.com</Host>\\n        <Expire>1658812297</Expire>\\n        <Callback>\\"\\"</Callback>\\n    </Data>\\n</CreateUploadPolicyResponse>","errorExample":""}]',
      'title' => '获取上传凭据',
      'requestParamsDescription' => '- 上传场景数据包  
 ```type: "scene", option: { "sceneld": "Td6HbmTJ****", "modelStyle":"PATCH" } ```   
说明：modelStyle取 PATCH（2.5D模型）DEPTH（深度模型）
- 上传子场景  
``` type: "subScene", option: { "subSceneld": "AZK5wcg****" }```
- 上传热点资源  
 ```type: "hotspot", option: { "sceneld": "Td6HbmTJ****" "type": "IMAGE" } ```   
说明：option中的type可以取IMAGE、 VIDEO、AUDIO、ICON  ',
    ),
    'PublishHotspotConfig' => 
    array (
      'summary' => '发布热点配置。',
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
      ),
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'none',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'SceneId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '场景Id',
            'description' => '场景Id',
            'type' => 'string',
            'required' => true,
            'example' => 'rteyauiiuw****',
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
              'RequestId' => 
              array (
                'title' => '请求ID，与入参requestId对应',
                'description' => '请求ID，与入参requestId对应',
                'type' => 'string',
                'example' => 'B28A2ECB-AB29-1E01****',
              ),
              'Code' => 
              array (
                'title' => '返回码',
                'description' => '返回码',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '200',
              ),
              'Success' => 
              array (
                'title' => '是否请求成功',
                'description' => '是否请求成功',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Message' => 
              array (
                'title' => '错误消息',
                'description' => '错误消息',
                'type' => 'string',
                'example' => 'success',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"B28A2ECB-AB29-1E01****\\",\\n  \\"Code\\": 200,\\n  \\"Success\\": true,\\n  \\"Message\\": \\"success\\"\\n}","errorExample":""},{"type":"xml","example":"<PublishHotspotConfigResponse>\\n    <RequestId>B28A2ECB-AB29-1E01****</RequestId>\\n    <Code>200</Code>\\n    <Success>true</Success>\\n    <Message>success</Message>\\n</PublishHotspotConfigResponse>","errorExample":""}]',
      'title' => '发布热点配置',
    ),
    'AddHotspotFile' => 
    array (
      'summary' => '保存模型文件',
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
          'name' => 'SceneId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '场景Id',
            'type' => 'string',
            'required' => true,
            'example' => '1',
          ),
        ),
        1 => 
        array (
          'name' => 'FileName',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '文件名',
            'type' => 'string',
            'required' => true,
          ),
        ),
        2 => 
        array (
          'name' => 'Type',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '文件类型',
            'type' => 'string',
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
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => '请求ID，与入参requestId对应',
                'type' => 'string',
              ),
              'Code' => 
              array (
                'title' => '返回码',
                'type' => 'integer',
                'format' => 'int64',
              ),
              'Success' => 
              array (
                'title' => '是否请求成功',
                'type' => 'boolean',
              ),
              'Message' => 
              array (
                'title' => '错误消息',
                'type' => 'string',
              ),
              'Data' => 
              array (
                'type' => 'object',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '',
    ),
    'SaveMinimap' => 
    array (
      'summary' => '保存小地图数据',
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
          'name' => 'SceneId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '场景ID',
            'type' => 'string',
            'required' => true,
          ),
        ),
        1 => 
        array (
          'name' => 'Data',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '小地图数据，json字符串',
            'type' => 'string',
            'required' => true,
            'example' => '1',
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
              'RequestId' => 
              array (
                'title' => '请求ID，与入参requestId对应',
                'type' => 'string',
              ),
              'Code' => 
              array (
                'title' => '返回码',
                'type' => 'integer',
                'format' => 'int64',
              ),
              'Success' => 
              array (
                'title' => '是否请求成功',
                'type' => 'boolean',
              ),
              'Message' => 
              array (
                'title' => '错误消息',
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
      'regionId' => 'cn-hangzhou',
      'endpoint' => 'lyj.cn-hangzhou.aliyuncs.com',
    ),
  ),
);
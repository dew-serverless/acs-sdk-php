<?php return array (
  'version' => '1.0',
  'info' => 
  array (
    'style' => 'RPC',
    'product' => 'imm',
    'version' => '2020-09-30',
  ),
  'directories' => 
  array (
    0 => 
    array (
      'id' => 178523,
      'title' => '服务地域',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'ListRegions',
      ),
    ),
    1 => 
    array (
      'id' => 178609,
      'title' => '项目管理',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateProject',
        1 => 'UpdateProject',
        2 => 'GetProject',
        3 => 'ListProjects',
        4 => 'DeleteProject',
      ),
    ),
    2 => 
    array (
      'id' => 178610,
      'title' => '元数据管理',
      'type' => 'directory',
      'children' => 
      array (
        0 => 
        array (
          'id' => 178611,
          'title' => '数据集管理',
          'type' => 'directory',
          'children' => 
          array (
            0 => 'CreateDataset',
            1 => 'UpdateDataset',
            2 => 'GetDataset',
            3 => 'ListDatasets',
            4 => 'DeleteDataset',
          ),
        ),
        1 => 
        array (
          'id' => 178612,
          'title' => '元数据索引',
          'type' => 'directory',
          'children' => 
          array (
            0 => 'IndexFileMeta',
            1 => 'BatchIndexFileMeta',
            2 => 'UpdateFileMeta',
            3 => 'BatchUpdateFileMeta',
            4 => 'GetFileMeta',
            5 => 'BatchGetFileMeta',
            6 => 'DeleteFileMeta',
            7 => 'BatchDeleteFileMeta',
          ),
        ),
        2 => 
        array (
          'id' => 178699,
          'title' => '查询与统计',
          'type' => 'directory',
          'children' => 
          array (
            0 => 'SimpleQuery',
            1 => 'SemanticQuery',
            2 => 'FuzzyQuery',
          ),
        ),
        3 => 
        array (
          'id' => 178700,
          'title' => '智能管理',
          'type' => 'directory',
          'children' => 
          array (
            0 => 
            array (
              'id' => 178701,
              'title' => '人脸聚类',
              'type' => 'directory',
              'children' => 
              array (
                0 => 'CreateFigureClusteringTask',
                1 => 'CreateFigureClustersMergingTask',
                2 => 'GetFigureCluster',
                3 => 'QueryFigureClusters',
                4 => 'BatchGetFigureCluster',
                5 => 'UpdateFigureCluster',
                6 => 'SearchImageFigureCluster',
                7 => 'CreateFacesSearchingTask',
              ),
            ),
            1 => 
            array (
              'id' => 178702,
              'title' => '时空聚类',
              'type' => 'directory',
              'children' => 
              array (
                0 => 'CreateLocationDateClusteringTask',
                1 => 'QueryLocationDateClusters',
                2 => 'UpdateLocationDateCluster',
                3 => 'DeleteLocationDateCluster',
              ),
            ),
            2 => 
            array (
              'id' => 178703,
              'title' => '故事',
              'type' => 'directory',
              'children' => 
              array (
                0 => 'CreateStory',
                1 => 'QueryStories',
                2 => 'GetStory',
                3 => 'CreateCustomizedStory',
                4 => 'UpdateStory',
                5 => 'AddStoryFiles',
                6 => 'RemoveStoryFiles',
                7 => 'DeleteStory',
              ),
            ),
            3 => 
            array (
              'id' => 181692,
              'title' => '图片聚类',
              'type' => 'directory',
              'children' => 
              array (
                0 => 'CreateSimilarImageClusteringTask',
                1 => 'QuerySimilarImageClusters',
              ),
            ),
          ),
        ),
        4 => 
        array (
          'id' => 178704,
          'title' => '数据绑定',
          'type' => 'directory',
          'children' => 
          array (
            0 => 'CreateBinding',
            1 => 'GetBinding',
            2 => 'ListBindings',
            3 => 'DeleteBinding',
            4 => 'AttachOSSBucket',
            5 => 'DetachOSSBucket',
            6 => 'GetOSSBucketAttachment',
          ),
        ),
      ),
    ),
    3 => 
    array (
      'id' => 178705,
      'title' => '图片处理',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'EncodeBlindWatermark',
        1 => 'CreateDecodeBlindWatermarkTask',
        2 => 'GetDecodeBlindWatermarkResult',
        3 => 'DetectImageLabels',
        4 => 'DetectImageScore',
        5 => 'DetectImageCodes',
        6 => 'DetectImageFaces',
        7 => 'DetectImageCropping',
        8 => 'AddImageMosaic',
        9 => 'CreateImageToPDFTask',
        10 => 'CreateImageSplicingTask',
        11 => 'CompareImageFaces',
        12 => 'DetectImageBodies',
        13 => 'DetectImageCars',
      ),
    ),
    4 => 
    array (
      'id' => 178706,
      'title' => '媒体处理',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateMediaConvertTask',
        1 => 'DetectMediaMeta',
        2 => 'CreateVideoLabelClassificationTask',
        3 => 'GetVideoLabelClassificationResult',
        4 => 'GenerateVideoPlaylist',
      ),
    ),
    5 => 
    array (
      'id' => 178707,
      'title' => '文档处理',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'GenerateWebofficeToken',
        1 => 'RefreshWebofficeToken',
        2 => 'CreateOfficeConversionTask',
        3 => 'ExtractDocumentText',
      ),
    ),
    6 => 
    array (
      'id' => 178708,
      'title' => '文件处理',
      'type' => 'directory',
      'children' => 
      array (
        0 => 
        array (
          'id' => 178709,
          'title' => '压缩解压',
          'type' => 'directory',
          'children' => 
          array (
            0 => 'CreateFileCompressionTask',
            1 => 'CreateArchiveFileInspectionTask',
            2 => 'CreateFileUncompressionTask',
          ),
        ),
        1 => 
        array (
          'id' => 178710,
          'title' => '点云压缩',
          'type' => 'directory',
          'children' => 
          array (
            0 => 'CreateCompressPointCloudTask',
          ),
        ),
      ),
    ),
    7 => 
    array (
      'id' => 178711,
      'title' => '内容安全',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'DetectTextAnomaly',
        1 => 'CreateImageModerationTask',
        2 => 'CreateVideoModerationTask',
        3 => 'GetImageModerationResult',
        4 => 'GetVideoModerationResult',
      ),
    ),
    8 => 
    array (
      'id' => 178712,
      'title' => '任务管理',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'GetTask',
        1 => 'ListTasks',
        2 => 
        array (
          'id' => 178931,
          'title' => '触发器',
          'type' => 'directory',
          'children' => 
          array (
            0 => 'CreateTrigger',
            1 => 'SuspendTrigger',
            2 => 'ResumeTrigger',
            3 => 'UpdateTrigger',
            4 => 'GetTrigger',
            5 => 'ListTriggers',
            6 => 'DeleteTrigger',
          ),
        ),
        3 => 
        array (
          'id' => 180710,
          'title' => '批处理',
          'type' => 'directory',
          'children' => 
          array (
            0 => 'CreateBatch',
            1 => 'SuspendBatch',
            2 => 'ResumeBatch',
            3 => 'UpdateBatch',
            4 => 'ListBatches',
            5 => 'GetBatch',
            6 => 'DeleteBatch',
          ),
        ),
      ),
    ),
    9 => 
    array (
      'id' => 189442,
      'title' => '其他',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'DetectImageTexts',
      ),
    ),
  ),
  'components' => 
  array (
    'schemas' => 
    array (
      'Address' => 
      array (
        'title' => 'A short description of struct',
        'description' => '地址信息',
        'type' => 'object',
        'properties' => 
        array (
          'Language' => 
          array (
            'title' => 'Language',
            'type' => 'string',
          ),
          'AddressLine' => 
          array (
            'title' => 'AddressLine',
            'type' => 'string',
          ),
          'Country' => 
          array (
            'title' => 'Country',
            'type' => 'string',
          ),
          'Province' => 
          array (
            'title' => 'Province',
            'type' => 'string',
          ),
          'City' => 
          array (
            'title' => 'City',
            'type' => 'string',
          ),
          'District' => 
          array (
            'title' => 'District',
            'type' => 'string',
          ),
          'Township' => 
          array (
            'title' => 'Township',
            'type' => 'string',
          ),
        ),
      ),
      'AddressForStory' => 
      array (
        'title' => 'A short description of struct',
        'description' => '应用于 Story 的 Address 对象',
        'type' => 'object',
        'properties' => 
        array (
          'Country' => 
          array (
            'title' => '国家',
            'type' => 'string',
          ),
          'Province' => 
          array (
            'title' => '省',
            'type' => 'string',
          ),
          'City' => 
          array (
            'title' => '城市',
            'type' => 'string',
          ),
          'District' => 
          array (
            'title' => '地区',
            'type' => 'string',
          ),
          'Township' => 
          array (
            'title' => '乡镇',
            'type' => 'string',
          ),
        ),
      ),
      'AlgorithmDefinition' => 
      array (
        'title' => '算法定义结构体',
        'type' => 'object',
        'properties' => 
        array (
          'Description' => 
          array (
            'title' => '描述信息',
            'type' => 'string',
            'example' => 'test',
          ),
          'OwnerId' => 
          array (
            'title' => '阿里云账号ID',
            'type' => 'string',
            'example' => 'user1',
          ),
          'ProjectName' => 
          array (
            'title' => '项目名称',
            'type' => 'string',
            'example' => 'traningtest',
          ),
          'CreateTime' => 
          array (
            'title' => '创建时间',
            'type' => 'string',
            'example' => '2023-05-31T10:19:40.572325888+08:00',
          ),
          'UpdateTime' => 
          array (
            'title' => '更新时间',
            'type' => 'string',
            'example' => '2023-05-31T10:19:40.572325888+08:00',
          ),
          'TrainingSpecification' => 
          array (
            'title' => '模型训练参数',
            '$ref' => '#/components/schemas/TrainingSpecification',
          ),
          'AlgorithmDefinitionId' => 
          array (
            'title' => '算法定义ID',
            'type' => 'string',
            'example' => '8fc6e718-8d19-495f-a510-bcee3c598588',
          ),
          'Name' => 
          array (
            'title' => '算法名称',
            'type' => 'string',
            'example' => 'algoName',
          ),
          'CustomLabels' => 
          array (
            'title' => '自定义标签',
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
        ),
      ),
      'App' => 
      array (
        'title' => 'App',
        'type' => 'object',
        'properties' => 
        array (
          'AppDescription' => 
          array (
            'title' => 'AppDescription',
            'type' => 'string',
          ),
          'AppId' => 
          array (
            'title' => 'AppId',
            'type' => 'string',
          ),
          'PackageName' => 
          array (
            'title' => 'PackageName',
            'type' => 'string',
          ),
          'AppType' => 
          array (
            'title' => 'AppType',
            'type' => 'integer',
            'format' => 'int64',
          ),
          'EnglishName' => 
          array (
            'title' => 'EnglishName',
            'type' => 'string',
          ),
          'AppName' => 
          array (
            'title' => 'AppName',
            'type' => 'string',
          ),
          'AppRegion' => 
          array (
            'title' => 'AppRegion',
            'type' => 'integer',
            'format' => 'int64',
          ),
          'OwnerId' => 
          array (
            'title' => 'OwnerId',
            'type' => 'string',
          ),
          'AppKey' => 
          array (
            'title' => 'AppKey',
            'type' => 'string',
          ),
        ),
      ),
      'AssumeRoleChain' => 
      array (
        'title' => '链式授权',
        'description' => '链式授权',
        'type' => 'object',
        'properties' => 
        array (
          'Policy' => 
          array (
            'title' => '当前用户 policy',
            'type' => 'string',
          ),
          'Chain' => 
          array (
            'title' => '链式授权节点',
            'type' => 'array',
            'items' => 
            array (
              '$ref' => '#/components/schemas/AssumeRoleChainNode',
            ),
          ),
        ),
      ),
      'AssumeRoleChainNode' => 
      array (
        'title' => '链式授权节点',
        'description' => '链式授权节点',
        'type' => 'object',
        'properties' => 
        array (
          'Type' => 
          array (
            'title' => '账号类型，普通账号填 user，服务账号填 service',
            'type' => 'string',
            'required' => true,
            'example' => 'user',
          ),
          'OwnerId' => 
          array (
            'title' => '账号id',
            'type' => 'string',
            'required' => true,
            'example' => '1023210024677934',
          ),
          'Role' => 
          array (
            'title' => '授权角色名',
            'type' => 'string',
            'required' => true,
            'example' => 'test-role',
          ),
        ),
      ),
      'AudioStream' => 
      array (
        'title' => 'A short description of struct',
        'description' => '音频流',
        'type' => 'object',
        'properties' => 
        array (
          'Index' => 
          array (
            'title' => 'Index',
            'type' => 'integer',
            'format' => 'int64',
          ),
          'Language' => 
          array (
            'title' => 'Language',
            'type' => 'string',
          ),
          'CodecName' => 
          array (
            'title' => 'CodecName',
            'type' => 'string',
          ),
          'CodecLongName' => 
          array (
            'title' => 'CodecLongName',
            'type' => 'string',
          ),
          'CodecTimeBase' => 
          array (
            'title' => 'CodecTimeBase',
            'type' => 'string',
          ),
          'CodecTagString' => 
          array (
            'title' => 'CodecTagString',
            'type' => 'string',
          ),
          'CodecTag' => 
          array (
            'title' => 'CodecTag',
            'type' => 'string',
          ),
          'TimeBase' => 
          array (
            'title' => 'TimeBase',
            'type' => 'string',
          ),
          'StartTime' => 
          array (
            'title' => 'StartTime',
            'type' => 'number',
            'format' => 'double',
          ),
          'Duration' => 
          array (
            'title' => 'Duration',
            'type' => 'number',
            'format' => 'double',
          ),
          'Bitrate' => 
          array (
            'title' => 'Bitrate',
            'type' => 'integer',
            'format' => 'int64',
          ),
          'FrameCount' => 
          array (
            'title' => 'FrameCount',
            'type' => 'integer',
            'format' => 'int64',
          ),
          'Lyric' => 
          array (
            'title' => 'Lyric',
            'type' => 'string',
          ),
          'SampleFormat' => 
          array (
            'title' => 'SampleFormat',
            'type' => 'string',
          ),
          'SampleRate' => 
          array (
            'title' => 'SampleRate',
            'type' => 'integer',
            'format' => 'int64',
          ),
          'Channels' => 
          array (
            'title' => 'Channels',
            'type' => 'integer',
            'format' => 'int64',
          ),
          'ChannelLayout' => 
          array (
            'title' => 'ChannelLayout',
            'type' => 'string',
          ),
        ),
      ),
      'Binding' => 
      array (
        'title' => 'A short description of struct',
        'description' => '绑定',
        'type' => 'object',
        'properties' => 
        array (
          'ProjectName' => 
          array (
            'title' => 'ProjectName',
            'type' => 'string',
          ),
          'DatasetName' => 
          array (
            'title' => 'DatasetName',
            'type' => 'string',
          ),
          'URI' => 
          array (
            'title' => 'URI',
            'type' => 'string',
          ),
          'State' => 
          array (
            'title' => 'State',
            'type' => 'string',
          ),
          'Phase' => 
          array (
            'title' => 'Phase',
            'type' => 'string',
          ),
          'CreateTime' => 
          array (
            'title' => 'CreateTime',
            'type' => 'string',
          ),
          'UpdateTime' => 
          array (
            'title' => 'UpdateTime',
            'type' => 'string',
          ),
          'Reason' => 
          array (
            'title' => 'Reason',
            'type' => 'string',
          ),
        ),
      ),
      'Body' => 
      array (
        'title' => 'A short description of struct',
        'description' => '人体框',
        'type' => 'object',
        'properties' => 
        array (
          'Confidence' => 
          array (
            'title' => 'Confidence',
            'type' => 'number',
            'format' => 'float',
          ),
          'Boundary' => 
          array (
            'title' => 'Boundary',
            '$ref' => '#/components/schemas/Boundary',
          ),
        ),
      ),
      'Boundary' => 
      array (
        'title' => 'A short description of struct',
        'description' => '边界',
        'type' => 'object',
        'properties' => 
        array (
          'Width' => 
          array (
            'title' => 'Width',
            'type' => 'integer',
            'format' => 'int64',
          ),
          'Height' => 
          array (
            'title' => 'Height',
            'type' => 'integer',
            'format' => 'int64',
          ),
          'Left' => 
          array (
            'title' => 'Left',
            'type' => 'integer',
            'format' => 'int64',
          ),
          'Top' => 
          array (
            'title' => 'Top',
            'type' => 'integer',
            'format' => 'int64',
          ),
          'Polygon' => 
          array (
            'title' => '多边形的坐标列表',
            'type' => 'array',
            'items' => 
            array (
              '$ref' => '#/components/schemas/PointInt64',
            ),
          ),
        ),
      ),
      'Car' => 
      array (
        'title' => 'A short description of struct',
        'description' => '车',
        'type' => 'object',
        'properties' => 
        array (
          'LicensePlates' => 
          array (
            'title' => '车牌',
            'type' => 'array',
            'items' => 
            array (
              '$ref' => '#/components/schemas/LicensePlate',
            ),
          ),
          'CarType' => 
          array (
            'title' => '车辆类型',
            'type' => 'string',
          ),
          'CarTypeConfidence' => 
          array (
            'title' => '车辆类型置信度',
            'type' => 'number',
            'format' => 'double',
          ),
          'CarColor' => 
          array (
            'title' => '车辆颜色',
            'type' => 'string',
          ),
          'CarColorConfidence' => 
          array (
            'title' => '车辆颜色置信度',
            'type' => 'number',
            'format' => 'double',
          ),
          'Boundary' => 
          array (
            'title' => '车辆裁剪框',
            '$ref' => '#/components/schemas/Boundary',
          ),
          'Confidence' => 
          array (
            'title' => '车辆置信度',
            'type' => 'number',
            'format' => 'double',
          ),
        ),
      ),
      'ClusterForReq' => 
      array (
        'title' => 'A short description of struct',
        'type' => 'object',
        'properties' => 
        array (
          'ObjectId' => 
          array (
            'title' => 'ObjectId',
            'type' => 'string',
          ),
          'CustomId' => 
          array (
            'title' => 'CustomId',
            'type' => 'string',
          ),
          'CustomLabels' => 
          array (
            'title' => 'CustomLabels',
            'type' => 'object',
          ),
          'Name' => 
          array (
            'title' => 'Name',
            'type' => 'string',
          ),
          'Cover' => 
          array (
            'title' => 'Cover',
            'type' => 'object',
            'properties' => 
            array (
              'Figures' => 
              array (
                'title' => 'Figures',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'FigureId' => 
                    array (
                      'title' => 'FigureId',
                      'type' => 'string',
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'Codes' => 
      array (
        'title' => 'A short description of struct',
        'description' => '图片中各种码检测',
        'type' => 'object',
        'properties' => 
        array (
          'Content' => 
          array (
            'title' => 'Content',
            'type' => 'string',
          ),
          'Confidence' => 
          array (
            'title' => 'Confidence',
            'type' => 'number',
            'format' => 'float',
          ),
          'Boundary' => 
          array (
            'title' => 'Boundary',
            '$ref' => '#/components/schemas/Boundary',
          ),
          'Type' => 
          array (
            'title' => 'Type',
            'type' => 'string',
          ),
        ),
      ),
      'CredentialConfig' => 
      array (
        'title' => '链式授权配置',
        'description' => '链式授权配置',
        'type' => 'object',
        'properties' => 
        array (
          'ServiceRole' => 
          array (
            'title' => '服务角色',
            'type' => 'string',
          ),
          'Policy' => 
          array (
            'title' => '权限策略',
            'type' => 'string',
          ),
          'Chain' => 
          array (
            'title' => '授权链',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'AssumeRoleFor' => 
                array (
                  'title' => '授权对象',
                  'type' => 'string',
                ),
                'Role' => 
                array (
                  'title' => '授权角色',
                  'type' => 'string',
                ),
                'RoleType' => 
                array (
                  'title' => '授权方类型',
                  'type' => 'string',
                ),
              ),
            ),
          ),
        ),
      ),
      'CroppingSuggestion' => 
      array (
        'title' => 'A short description of struct',
        'description' => '裁剪建议',
        'type' => 'object',
        'properties' => 
        array (
          'AspectRatio' => 
          array (
            'title' => 'AspectRatio',
            'type' => 'string',
          ),
          'Confidence' => 
          array (
            'title' => 'Confidence',
            'type' => 'number',
            'format' => 'float',
          ),
          'Boundary' => 
          array (
            'title' => 'Boundary',
            '$ref' => '#/components/schemas/Boundary',
          ),
        ),
      ),
      'CustomParams' => 
      array (
        'title' => '模型训练自定义参数信息',
        'type' => 'object',
        'properties' => 
        array (
          'Properties' => 
          array (
            'title' => '属性列表',
            'type' => 'array',
            'items' => 
            array (
              '$ref' => '#/components/schemas/Property',
            ),
          ),
          'Name' => 
          array (
            'title' => '参数名称',
            'type' => 'string',
            'example' => 'Normalize',
          ),
        ),
      ),
      'DataIngestion' => 
      array (
        'title' => 'A short description of struct',
        'description' => '一个数据接入实例',
        'type' => 'object',
        'properties' => 
        array (
          'Id' => 
          array (
            'title' => '数据接入唯一标识',
            'type' => 'string',
          ),
          'Input' => 
          array (
            'title' => '数据源信息',
            '$ref' => '#/components/schemas/Input',
          ),
          'Actions' => 
          array (
            'title' => '运行模板',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'Name' => 
                array (
                  'title' => '动作名称',
                  'type' => 'string',
                ),
                'Parameters' => 
                array (
                  'title' => '动作参数',
                  'type' => 'array',
                  'items' => 
                  array (
                    'type' => 'string',
                  ),
                ),
                'FastFailPolicy' => 
                array (
                  'title' => '数据处理快速失败的策略配置',
                  '$ref' => '#/components/schemas/FastFailPolicy',
                ),
              ),
            ),
          ),
          'Notification' => 
          array (
            'title' => '通知地址',
            'type' => 'object',
            'properties' => 
            array (
              'Endpoint' => 
              array (
                'title' => 'MNS 地址',
                'type' => 'string',
              ),
              'Topic' => 
              array (
                'title' => 'MNS 主题',
                'type' => 'string',
              ),
              'MNS' => 
              array (
                'title' => 'MNS',
                '$ref' => '#/components/schemas/MNS',
              ),
              'RocketMQ' => 
              array (
                'title' => 'RocketMQ',
                '$ref' => '#/components/schemas/RocketMQ',
              ),
            ),
          ),
          'Statistic' => 
          array (
            'title' => '统计信息',
            'type' => 'object',
            'properties' => 
            array (
              'SubmitSuccess' => 
              array (
                'title' => '提交成功个数',
                'type' => 'integer',
                'format' => 'int64',
              ),
              'SubmitFailure' => 
              array (
                'title' => '提交失败个数',
                'type' => 'integer',
                'format' => 'int64',
              ),
              'SkipFiles' => 
              array (
                'title' => '跳过文件个数',
                'type' => 'integer',
                'format' => 'int64',
              ),
            ),
          ),
          'State' => 
          array (
            'title' => '任务执行状态',
            'type' => 'string',
          ),
          'Marker' => 
          array (
            'title' => '任务执行进度',
            'type' => 'string',
          ),
          'CreateTime' => 
          array (
            'title' => '任务创建时间',
            'type' => 'string',
          ),
          'UpdateTime' => 
          array (
            'title' => '任务更新时间',
            'type' => 'string',
          ),
          'Tags' => 
          array (
            'title' => '标签',
            'type' => 'object',
          ),
          'Error' => 
          array (
            'title' => '错误信息',
            'type' => 'string',
          ),
          'Phase' => 
          array (
            'title' => '扫描阶段',
            'type' => 'string',
            'example' => 'IncrementalScanning',
          ),
          'ServiceRole' => 
          array (
            'title' => '服务授权角色',
            'type' => 'string',
            'example' => 'AliyunIMMBatchTriggerRole',
          ),
        ),
      ),
      'Dataset' => 
      array (
        'title' => '媒体集结构体',
        'description' => '媒体集',
        'type' => 'object',
        'properties' => 
        array (
          'ProjectName' => 
          array (
            'title' => '项目名称',
            'type' => 'string',
          ),
          'DatasetName' => 
          array (
            'title' => '媒体集名称',
            'type' => 'string',
          ),
          'TemplateId' => 
          array (
            'title' => '模板Id',
            'type' => 'string',
          ),
          'CreateTime' => 
          array (
            'title' => '创建时间',
            'type' => 'string',
          ),
          'UpdateTime' => 
          array (
            'title' => '更新时间',
            'type' => 'string',
          ),
          'Description' => 
          array (
            'title' => '描述',
            'type' => 'string',
          ),
          'DatasetMaxBindCount' => 
          array (
            'title' => '媒体集最大绑定数',
            'type' => 'integer',
            'format' => 'int64',
          ),
          'DatasetMaxFileCount' => 
          array (
            'title' => '媒体集最多文件数量',
            'type' => 'integer',
            'format' => 'int64',
          ),
          'DatasetMaxEntityCount' => 
          array (
            'title' => '媒体集最多实体数量',
            'type' => 'integer',
            'format' => 'int64',
          ),
          'DatasetMaxRelationCount' => 
          array (
            'title' => '媒体集最多关系数量',
            'type' => 'integer',
            'format' => 'int64',
          ),
          'DatasetMaxTotalFileSize' => 
          array (
            'title' => '媒体集最大文件总大小',
            'type' => 'integer',
            'format' => 'int64',
          ),
          'BindCount' => 
          array (
            'title' => '媒体集当前绑定数',
            'type' => 'integer',
            'format' => 'int64',
          ),
          'FileCount' => 
          array (
            'title' => '媒体集当前文件数',
            'type' => 'integer',
            'format' => 'int64',
          ),
          'TotalFileSize' => 
          array (
            'title' => '媒体集当前文件总大小',
            'type' => 'integer',
            'format' => 'int64',
          ),
        ),
      ),
      'Element' => 
      array (
        'title' => 'A short description of struct',
        'description' => '文档分析生成的元素',
        'type' => 'object',
        'properties' => 
        array (
          'ElementContents' => 
          array (
            'title' => '元素内容列表',
            'type' => 'array',
            'items' => 
            array (
              '$ref' => '#/components/schemas/ElementContent',
            ),
          ),
        ),
      ),
      'ElementContent' => 
      array (
        'title' => 'A short description of struct',
        'description' => '文档分析生成的元素的内容',
        'type' => 'object',
        'properties' => 
        array (
          'Type' => 
          array (
            'title' => '元素内容的类型',
            'type' => 'string',
          ),
          'Content' => 
          array (
            'title' => '元素内容正文',
            'type' => 'string',
          ),
          'URL' => 
          array (
            'title' => '元素内容的链接',
            'type' => 'string',
          ),
        ),
      ),
      'FastFailPolicy' => 
      array (
        'title' => '快速失败策略结构体',
        'type' => 'object',
        'properties' => 
        array (
          'Action' => 
          array (
            'title' => '失败执行策略',
            'type' => 'string',
            'example' => 'abort',
          ),
        ),
      ),
      'Figure' => 
      array (
        'title' => 'A short description of struct',
        'description' => 'figure',
        'type' => 'object',
        'properties' => 
        array (
          'FigureId' => 
          array (
            'title' => 'FigureId',
            'type' => 'string',
          ),
          'FigureConfidence' => 
          array (
            'title' => 'FigureConfidence',
            'type' => 'number',
            'format' => 'float',
          ),
          'FigureClusterId' => 
          array (
            'title' => 'FigureClusterId',
            'type' => 'string',
          ),
          'FigureClusterConfidence' => 
          array (
            'title' => 'FigureClusterConfidence',
            'type' => 'number',
            'format' => 'float',
          ),
          'FigureType' => 
          array (
            'title' => 'FigureType',
            'type' => 'string',
          ),
          'Age' => 
          array (
            'title' => 'Age',
            'type' => 'integer',
            'format' => 'int64',
          ),
          'AgeSD' => 
          array (
            'title' => 'AgeSD',
            'type' => 'number',
            'format' => 'float',
          ),
          'Gender' => 
          array (
            'title' => 'Gender',
            'type' => 'string',
          ),
          'GenderConfidence' => 
          array (
            'title' => 'GenderConfidence',
            'type' => 'number',
            'format' => 'float',
          ),
          'Emotion' => 
          array (
            'title' => 'Emotion',
            'type' => 'string',
          ),
          'EmotionConfidence' => 
          array (
            'title' => 'EmotionConfidence',
            'type' => 'number',
            'format' => 'float',
          ),
          'FaceQuality' => 
          array (
            'title' => 'FaceQuality',
            'type' => 'number',
            'format' => 'float',
          ),
          'Boundary' => 
          array (
            'title' => 'Boundary',
            '$ref' => '#/components/schemas/Boundary',
          ),
          'Mouth' => 
          array (
            'title' => 'Mouth',
            'type' => 'string',
          ),
          'MouthConfidence' => 
          array (
            'title' => 'MouthConfidence',
            'type' => 'number',
            'format' => 'float',
          ),
          'Beard' => 
          array (
            'title' => 'Beard',
            'type' => 'string',
          ),
          'BeardConfidence' => 
          array (
            'title' => 'BeardConfidence',
            'type' => 'number',
            'format' => 'float',
          ),
          'Hat' => 
          array (
            'title' => 'Hat',
            'type' => 'string',
          ),
          'HatConfidence' => 
          array (
            'title' => 'HatConfidence',
            'type' => 'number',
            'format' => 'float',
          ),
          'Mask' => 
          array (
            'title' => 'Mask',
            'type' => 'string',
          ),
          'MaskConfidence' => 
          array (
            'title' => 'MaskConfidence',
            'type' => 'number',
            'format' => 'float',
          ),
          'Glasses' => 
          array (
            'title' => 'Glasses',
            'type' => 'string',
          ),
          'GlassesConfidence' => 
          array (
            'title' => 'GlassesConfidence',
            'type' => 'number',
            'format' => 'float',
          ),
          'Sharpness' => 
          array (
            'title' => 'Sharpness',
            'type' => 'number',
            'format' => 'float',
          ),
          'Attractive' => 
          array (
            'title' => 'Attractive',
            'type' => 'number',
            'format' => 'float',
          ),
          'HeadPose' => 
          array (
            '$ref' => '#/components/schemas/HeadPose',
          ),
        ),
      ),
      'FigureCluster' => 
      array (
        'title' => 'A short description of struct',
        'type' => 'object',
        'properties' => 
        array (
          'OwnerId' => 
          array (
            'title' => 'OwnerId',
            'type' => 'string',
          ),
          'ProjectName' => 
          array (
            'title' => 'ProjectName',
            'type' => 'string',
          ),
          'DatasetName' => 
          array (
            'title' => 'DatasetName',
            'type' => 'string',
          ),
          'ObjectType' => 
          array (
            'title' => 'ObjectType',
            'type' => 'string',
          ),
          'ObjectId' => 
          array (
            'title' => 'ObjectId',
            'type' => 'string',
          ),
          'UpdateTime' => 
          array (
            'title' => 'UpdateTime',
            'type' => 'string',
          ),
          'CreateTime' => 
          array (
            'title' => 'CreateTime',
            'type' => 'string',
          ),
          'Name' => 
          array (
            'title' => 'Name',
            'type' => 'string',
          ),
          'Gender' => 
          array (
            'title' => 'Gender',
            'type' => 'string',
          ),
          'FaceCount' => 
          array (
            'title' => 'FaceCount',
            'type' => 'integer',
            'format' => 'int64',
          ),
          'ImageCount' => 
          array (
            'title' => 'ImageCount',
            'type' => 'integer',
            'format' => 'int64',
          ),
          'VideoCount' => 
          array (
            'title' => 'VideoCount',
            'type' => 'integer',
            'format' => 'int64',
          ),
          'AverageAge' => 
          array (
            'title' => 'AverageAge',
            'type' => 'number',
            'format' => 'float',
          ),
          'MinAge' => 
          array (
            'title' => 'MinAge',
            'type' => 'number',
            'format' => 'float',
          ),
          'MaxAge' => 
          array (
            'title' => 'MaxAge',
            'type' => 'number',
            'format' => 'float',
          ),
          'Cover' => 
          array (
            'title' => 'Cover',
            '$ref' => '#/components/schemas/File',
          ),
          'CustomId' => 
          array (
            'title' => 'CustomId',
            'type' => 'string',
          ),
          'CustomLabels' => 
          array (
            'title' => 'CustomLabels',
            'type' => 'object',
          ),
          'MetaLockVersion' => 
          array (
            'title' => 'MetaLockVersion',
            'type' => 'integer',
            'format' => 'int64',
          ),
        ),
      ),
      'FigureClusterForReq' => 
      array (
        'title' => 'A short description of struct',
        'type' => 'object',
        'properties' => 
        array (
          'ObjectId' => 
          array (
            'title' => 'ObjectId',
            'type' => 'string',
          ),
          'Name' => 
          array (
            'title' => 'Name',
            'type' => 'string',
          ),
          'Cover' => 
          array (
            'title' => 'Cover',
            'type' => 'object',
            'properties' => 
            array (
              'Figures' => 
              array (
                'title' => 'Figures',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'FigureId' => 
                    array (
                      'title' => 'FigureId',
                      'type' => 'string',
                    ),
                  ),
                ),
              ),
            ),
          ),
          'CustomId' => 
          array (
            'title' => 'CustomId',
            'type' => 'string',
          ),
          'CustomLabels' => 
          array (
            'title' => 'CustomLabels',
            'type' => 'object',
          ),
          'MetaLockVersion' => 
          array (
            'title' => 'MetaLockVersion',
            'type' => 'integer',
            'format' => 'int64',
          ),
        ),
      ),
      'File' => 
      array (
        'title' => 'A short description of struct',
        'description' => '文件',
        'type' => 'object',
        'properties' => 
        array (
          'OwnerId' => 
          array (
            'title' => 'OwnerId',
            'type' => 'string',
          ),
          'ProjectName' => 
          array (
            'title' => 'ProjectName',
            'type' => 'string',
          ),
          'DatasetName' => 
          array (
            'title' => 'DatasetName',
            'type' => 'string',
          ),
          'ObjectType' => 
          array (
            'title' => 'ObjectType',
            'type' => 'string',
          ),
          'ObjectId' => 
          array (
            'title' => 'ObjectId',
            'type' => 'string',
          ),
          'UpdateTime' => 
          array (
            'title' => 'UpdateTime',
            'type' => 'string',
          ),
          'CreateTime' => 
          array (
            'title' => 'CreateTime',
            'type' => 'string',
          ),
          'URI' => 
          array (
            'title' => 'URI',
            'type' => 'string',
          ),
          'OSSURI' => 
          array (
            'title' => 'OSSURI',
            'type' => 'string',
          ),
          'Filename' => 
          array (
            'title' => 'Filename',
            'type' => 'string',
          ),
          'MediaType' => 
          array (
            'title' => 'MediaType',
            'type' => 'string',
          ),
          'ContentType' => 
          array (
            'title' => 'ContentType',
            'type' => 'string',
          ),
          'Size' => 
          array (
            'title' => 'Size',
            'type' => 'integer',
            'format' => 'int64',
          ),
          'FileHash' => 
          array (
            'title' => 'FileHash',
            'type' => 'string',
          ),
          'FileModifiedTime' => 
          array (
            'title' => 'FileModifiedTime',
            'type' => 'string',
          ),
          'FileCreateTime' => 
          array (
            'title' => 'FileCreateTime',
            'type' => 'string',
          ),
          'FileAccessTime' => 
          array (
            'title' => 'FileAccessTime',
            'type' => 'string',
          ),
          'ProduceTime' => 
          array (
            'title' => 'ProduceTime',
            'type' => 'string',
          ),
          'LatLong' => 
          array (
            'title' => 'LatLong',
            'type' => 'string',
          ),
          'Timezone' => 
          array (
            'title' => 'Timezone',
            'type' => 'string',
          ),
          'Addresses' => 
          array (
            'title' => 'Addresses',
            'type' => 'array',
            'items' => 
            array (
              '$ref' => '#/components/schemas/Address',
            ),
          ),
          'TravelClusterId' => 
          array (
            'title' => 'TravelClusterId',
            'type' => 'string',
          ),
          'Orientation' => 
          array (
            'title' => 'Orientation',
            'type' => 'integer',
            'format' => 'int64',
          ),
          'Figures' => 
          array (
            'title' => 'Figures',
            'type' => 'array',
            'items' => 
            array (
              '$ref' => '#/components/schemas/Figure',
            ),
          ),
          'FigureCount' => 
          array (
            'title' => 'FigureCount',
            'type' => 'integer',
            'format' => 'int64',
          ),
          'Labels' => 
          array (
            'title' => 'Labels',
            'type' => 'array',
            'items' => 
            array (
              '$ref' => '#/components/schemas/Label',
            ),
          ),
          'Title' => 
          array (
            'title' => 'Title',
            'type' => 'string',
          ),
          'ImageWidth' => 
          array (
            'title' => 'ImageWidth',
            'type' => 'integer',
            'format' => 'int64',
          ),
          'ImageHeight' => 
          array (
            'title' => 'ImageHeight',
            'type' => 'integer',
            'format' => 'int64',
          ),
          'EXIF' => 
          array (
            'title' => 'EXIF',
            'type' => 'string',
          ),
          'ImageScore' => 
          array (
            '$ref' => '#/components/schemas/ImageScore',
          ),
          'CroppingSuggestions' => 
          array (
            'title' => 'CroppingSuggestions',
            'type' => 'array',
            'items' => 
            array (
              '$ref' => '#/components/schemas/CroppingSuggestion',
            ),
          ),
          'OCRContents' => 
          array (
            'title' => 'OCRContents',
            'type' => 'array',
            'items' => 
            array (
              '$ref' => '#/components/schemas/OCRContents',
            ),
          ),
          'VideoWidth' => 
          array (
            'title' => 'VideoWidth',
            'type' => 'integer',
            'format' => 'int64',
          ),
          'VideoHeight' => 
          array (
            'title' => 'VideoHeight',
            'type' => 'integer',
            'format' => 'int64',
          ),
          'VideoStreams' => 
          array (
            'title' => 'VideoStreams',
            'type' => 'array',
            'items' => 
            array (
              '$ref' => '#/components/schemas/VideoStream',
            ),
          ),
          'Subtitles' => 
          array (
            'title' => 'Subtitles',
            'type' => 'array',
            'items' => 
            array (
              '$ref' => '#/components/schemas/SubtitleStream',
            ),
          ),
          'AudioStreams' => 
          array (
            'title' => 'AudioStreams',
            'type' => 'array',
            'items' => 
            array (
              '$ref' => '#/components/schemas/AudioStream',
            ),
          ),
          'Artist' => 
          array (
            'title' => 'Artist',
            'type' => 'string',
          ),
          'AlbumArtist' => 
          array (
            'title' => 'AlbumArtist',
            'type' => 'string',
          ),
          'AudioCovers' => 
          array (
            'title' => 'AudioCovers',
            'type' => 'array',
            'items' => 
            array (
              '$ref' => '#/components/schemas/Image',
            ),
          ),
          'Composer' => 
          array (
            'title' => 'Composer',
            'type' => 'string',
          ),
          'Performer' => 
          array (
            'title' => 'Performer',
            'type' => 'string',
          ),
          'Language' => 
          array (
            'title' => 'Language',
            'type' => 'string',
          ),
          'Album' => 
          array (
            'title' => 'Album',
            'type' => 'string',
          ),
          'PageCount' => 
          array (
            'title' => 'PageCount',
            'type' => 'integer',
            'format' => 'int64',
          ),
          'ETag' => 
          array (
            'title' => 'ETag',
            'type' => 'string',
          ),
          'CacheControl' => 
          array (
            'title' => 'CacheControl',
            'type' => 'string',
          ),
          'ContentDisposition' => 
          array (
            'title' => 'ContentDisposition',
            'type' => 'string',
          ),
          'ContentEncoding' => 
          array (
            'title' => 'ContentEncoding',
            'type' => 'string',
          ),
          'ContentLanguage' => 
          array (
            'title' => 'ContentLanguage',
            'type' => 'string',
          ),
          'AccessControlAllowOrigin' => 
          array (
            'title' => 'AccessControlAllowOrigin',
            'type' => 'string',
          ),
          'AccessControlRequestMethod' => 
          array (
            'title' => 'AccessControlRequestMethod',
            'type' => 'string',
          ),
          'ServerSideEncryptionCustomerAlgorithm' => 
          array (
            'title' => 'ServerSideEncryptionCustomerAlgorithm',
            'type' => 'string',
          ),
          'ServerSideEncryption' => 
          array (
            'title' => 'ServerSideEncryption',
            'type' => 'string',
          ),
          'ServerSideDataEncryption' => 
          array (
            'title' => 'ServerSideDataEncryption',
            'type' => 'string',
          ),
          'ServerSideEncryptionKeyId' => 
          array (
            'title' => 'ServerSideEncryptionKeyId',
            'type' => 'string',
          ),
          'OSSStorageClass' => 
          array (
            'title' => 'OSSStorageClass',
            'type' => 'string',
          ),
          'OSSCRC64' => 
          array (
            'title' => 'OSSCRC64',
            'type' => 'string',
          ),
          'ObjectACL' => 
          array (
            'title' => 'ObjectACL',
            'type' => 'string',
          ),
          'ContentMd5' => 
          array (
            'title' => 'ContentMd5',
            'type' => 'string',
          ),
          'OSSUserMeta' => 
          array (
            'title' => 'OSSUserMeta',
            'type' => 'object',
          ),
          'OSSTaggingCount' => 
          array (
            'title' => 'OSSTaggingCount',
            'type' => 'integer',
            'format' => 'int64',
          ),
          'OSSTagging' => 
          array (
            'title' => 'OSSTagging',
            'type' => 'object',
          ),
          'OSSExpiration' => 
          array (
            'title' => 'OSSExpiration',
            'type' => 'string',
          ),
          'OSSVersionId' => 
          array (
            'title' => 'OSSVersionId',
            'type' => 'string',
          ),
          'OSSDeleteMarker' => 
          array (
            'title' => 'OSSDeleteMarker',
            'type' => 'string',
          ),
          'OSSObjectType' => 
          array (
            'title' => 'OSSObjectType',
            'type' => 'string',
          ),
          'CustomId' => 
          array (
            'title' => 'CustomId',
            'type' => 'string',
          ),
          'CustomLabels' => 
          array (
            'title' => 'CustomLabels',
            'type' => 'object',
          ),
          'StreamCount' => 
          array (
            'title' => 'StreamCount',
            'type' => 'integer',
            'format' => 'int64',
          ),
          'ProgramCount' => 
          array (
            'title' => 'ProgramCount',
            'type' => 'integer',
            'format' => 'int64',
          ),
          'FormatName' => 
          array (
            'title' => 'FormatName',
            'type' => 'string',
          ),
          'FormatLongName' => 
          array (
            'title' => 'FormatLongName',
            'type' => 'string',
          ),
          'StartTime' => 
          array (
            'title' => 'StartTime',
            'type' => 'number',
            'format' => 'double',
          ),
          'Bitrate' => 
          array (
            'title' => 'Bitrate',
            'type' => 'integer',
            'format' => 'int64',
          ),
          'Duration' => 
          array (
            'title' => 'Duration',
            'type' => 'number',
            'format' => 'double',
          ),
          'SemanticTypes' => 
          array (
            'title' => 'SemanticTypes',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'string',
            ),
          ),
          'Elements' => 
          array (
            'title' => 'Elements',
            'type' => 'array',
            'items' => 
            array (
              '$ref' => '#/components/schemas/Element',
            ),
          ),
          'OCRTexts' => 
          array (
            'title' => 'OCRTexts',
            'type' => 'string',
          ),
        ),
      ),
      'HeadPose' => 
      array (
        'title' => 'A short description of struct',
        'description' => '头部姿势',
        'type' => 'object',
        'properties' => 
        array (
          'Pitch' => 
          array (
            'title' => 'Pitch',
            'type' => 'number',
            'format' => 'float',
          ),
          'Roll' => 
          array (
            'title' => 'Roll',
            'type' => 'number',
            'format' => 'float',
          ),
          'Yaw' => 
          array (
            'title' => 'Yaw',
            'type' => 'number',
            'format' => 'float',
          ),
        ),
      ),
      'Hyperparameters' => 
      array (
        'title' => '模型训练运行超参数信息',
        'type' => 'object',
        'properties' => 
        array (
          'BatchSize' => 
          array (
            'title' => '训练BatchSize',
            'type' => 'integer',
            'format' => 'int64',
            'example' => '32',
          ),
          'InputSize' => 
          array (
            'title' => '图像大小, 数组内宽和高',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'integer',
              'format' => 'int64',
              'example' => '640',
            ),
            'required' => true,
          ),
          'Schedule' => 
          array (
            '$ref' => '#/components/schemas/Schedule',
          ),
          'MaxEpoch' => 
          array (
            'title' => '总的训练迭代epoch轮数',
            'type' => 'integer',
            'format' => 'int64',
            'example' => '10',
          ),
          'Evaluator' => 
          array (
            'required' => true,
            '$ref' => '#/components/schemas/CustomParams',
          ),
          'DataLoaderWorkers' => 
          array (
            'title' => '读取训练数据线程数',
            'type' => 'integer',
            'format' => 'int64',
            'example' => '4',
          ),
          'Optimization' => 
          array (
            '$ref' => '#/components/schemas/Optimization',
          ),
          'BackupInterval' => 
          array (
            'title' => '保存模型配置频率，1表示每过一遍训练数据保存一次',
            'type' => 'integer',
            'format' => 'int64',
            'example' => '1',
          ),
        ),
      ),
      'Image' => 
      array (
        'title' => 'A short description of struct',
        'description' => '图片',
        'type' => 'object',
        'properties' => 
        array (
          'ImageWidth' => 
          array (
            'title' => 'ImageWidth',
            'type' => 'integer',
            'format' => 'int64',
          ),
          'ImageHeight' => 
          array (
            'title' => 'ImageHeight',
            'type' => 'integer',
            'format' => 'int64',
          ),
          'EXIF' => 
          array (
            'title' => 'EXIF',
            'type' => 'string',
          ),
          'ImageScore' => 
          array (
            '$ref' => '#/components/schemas/ImageScore',
          ),
          'CroppingSuggestions' => 
          array (
            'title' => 'CroppingSuggestions',
            'type' => 'array',
            'items' => 
            array (
              '$ref' => '#/components/schemas/CroppingSuggestion',
            ),
          ),
          'OCRContents' => 
          array (
            'title' => 'OCRContents',
            'type' => 'array',
            'items' => 
            array (
              '$ref' => '#/components/schemas/OCRContents',
            ),
          ),
        ),
      ),
      'ImageScore' => 
      array (
        'title' => 'A short description of struct',
        'description' => '图片分数',
        'type' => 'object',
        'properties' => 
        array (
          'OverallQualityScore' => 
          array (
            'title' => 'OverallQualityScore',
            'type' => 'number',
            'format' => 'float',
          ),
        ),
      ),
      'Input' => 
      array (
        'title' => 'A short description of struct',
        'description' => '数据接入的输入配置',
        'type' => 'object',
        'properties' => 
        array (
          'OSS' => 
          array (
            '$ref' => '#/components/schemas/InputOSS',
          ),
        ),
      ),
      'InputFile' => 
      array (
        'title' => 'A short description of struct',
        'type' => 'object',
        'properties' => 
        array (
          'URI' => 
          array (
            'title' => 'URI',
            'type' => 'string',
          ),
          'CustomId' => 
          array (
            'title' => 'CustomId',
            'type' => 'string',
          ),
          'CustomLabels' => 
          array (
            'title' => 'CustomLabels',
            'type' => 'object',
          ),
          'FileHash' => 
          array (
            'title' => 'FileHash',
            'type' => 'string',
          ),
          'OSSURI' => 
          array (
            'title' => 'OSSURI',
            'type' => 'string',
          ),
          'MediaType' => 
          array (
            'title' => 'MediaType',
            'type' => 'string',
          ),
          'ContentType' => 
          array (
            'title' => 'ContentType',
            'type' => 'string',
          ),
          'Figures' => 
          array (
            'title' => 'Figures',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'FigureId' => 
                array (
                  'title' => 'FigureId',
                  'type' => 'string',
                ),
                'FigureClusterId' => 
                array (
                  'title' => 'FigureClusterId',
                  'type' => 'string',
                ),
                'FigureType' => 
                array (
                  'title' => 'FigureType',
                  'type' => 'string',
                ),
              ),
            ),
          ),
          'LatLong' => 
          array (
            'title' => 'LatLong',
            'type' => 'string',
          ),
          'ProduceTime' => 
          array (
            'title' => 'ProduceTime',
            'type' => 'string',
          ),
          'Title' => 
          array (
            'title' => 'Title',
            'type' => 'string',
          ),
          'Artist' => 
          array (
            'title' => 'Artist',
            'type' => 'string',
          ),
          'AlbumArtist' => 
          array (
            'title' => 'AlbumArtist',
            'type' => 'string',
          ),
          'Composer' => 
          array (
            'title' => 'Composer',
            'type' => 'string',
          ),
          'Performer' => 
          array (
            'title' => 'Performer',
            'type' => 'string',
          ),
          'Album' => 
          array (
            'title' => 'Album',
            'type' => 'string',
          ),
          'Labels' => 
          array (
            'title' => 'Labels',
            'type' => 'array',
            'items' => 
            array (
              '$ref' => '#/components/schemas/Label',
            ),
          ),
          'Addresses' => 
          array (
            'title' => 'Addresses',
            'type' => 'array',
            'items' => 
            array (
              '$ref' => '#/components/schemas/Address',
            ),
          ),
        ),
      ),
      'InputOSS' => 
      array (
        'title' => 'A short description of struct',
        'description' => '数据接入的 OSS 输入配置',
        'type' => 'object',
        'properties' => 
        array (
          'Bucket' => 
          array (
            'title' => 'OSS Bucket 名字',
            'type' => 'string',
            'required' => true,
          ),
          'Prefix' => 
          array (
            'title' => '对象 Key 的前缀',
            'type' => 'string',
          ),
          'MatchExpressions' => 
          array (
            'title' => '过滤表达式',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'string',
            ),
          ),
        ),
      ),
      'KdtreeOption' => 
      array (
        'title' => 'KdtreeOption',
        'description' => 'KdtreeOption',
        'type' => 'object',
        'properties' => 
        array (
          'CompressionLevel' => 
          array (
            'title' => 'CompressionLevel',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '10',
            'minimum' => '0',
          ),
          'QuantizationBits' => 
          array (
            'title' => 'QuantizationBits',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '31',
            'minimum' => '0',
          ),
          'LibraryName' => 
          array (
            'title' => 'LibraryName',
            'type' => 'string',
            'example' => 'draco',
            'default' => 'draco',
            'enum' => 
            array (
              0 => 'draco',
            ),
          ),
        ),
      ),
      'KeyValuePair' => 
      array (
        'title' => 'A short description of struct',
        'type' => 'object',
        'properties' => 
        array (
          'Key' => 
          array (
            'title' => '键',
            'type' => 'string',
          ),
          'Value' => 
          array (
            'title' => '值',
            'type' => 'string',
          ),
        ),
      ),
      'Label' => 
      array (
        'title' => 'A short description of struct',
        'description' => '标签',
        'type' => 'object',
        'properties' => 
        array (
          'Language' => 
          array (
            'title' => 'Language',
            'type' => 'string',
          ),
          'LabelName' => 
          array (
            'title' => 'LabelName',
            'type' => 'string',
          ),
          'LabelLevel' => 
          array (
            'title' => 'LabelLevel',
            'type' => 'integer',
            'format' => 'int64',
          ),
          'LabelConfidence' => 
          array (
            'title' => 'LabelConfidence',
            'type' => 'number',
            'format' => 'float',
          ),
          'ParentLabelName' => 
          array (
            'title' => 'ParentLabelName',
            'type' => 'string',
          ),
          'CentricScore' => 
          array (
            'title' => 'CentricScore',
            'type' => 'number',
            'format' => 'float',
          ),
        ),
      ),
      'LicensePlate' => 
      array (
        'title' => 'A short description of struct',
        'description' => '车牌',
        'type' => 'object',
        'properties' => 
        array (
          'Content' => 
          array (
            'title' => '车牌号',
            'type' => 'string',
            'example' => '川A0123',
          ),
          'Boundary' => 
          array (
            'title' => '车牌裁剪框',
            '$ref' => '#/components/schemas/Boundary',
          ),
          'Confidence' => 
          array (
            'title' => '置信度',
            'type' => 'number',
            'format' => 'double',
          ),
        ),
      ),
      'LocationDateCluster' => 
      array (
        'title' => '时空聚类对象',
        'description' => '时空聚类对象',
        'type' => 'object',
        'properties' => 
        array (
          'Title' => 
          array (
            'title' => '标题',
            'type' => 'string',
          ),
          'LocationDateClusterLevel' => 
          array (
            'title' => '级别',
            'type' => 'string',
          ),
          'LocationDateClusterStartTime' => 
          array (
            'title' => '开始时间',
            'type' => 'string',
          ),
          'LocationDateClusterEndTime' => 
          array (
            'title' => '结束时间',
            'type' => 'string',
          ),
          'Addresses' => 
          array (
            'title' => '地址',
            'type' => 'array',
            'items' => 
            array (
              '$ref' => '#/components/schemas/Address',
            ),
          ),
          'ObjectId' => 
          array (
            'title' => '唯一ID',
            'type' => 'string',
          ),
          'UpdateTime' => 
          array (
            'title' => '更新时间',
            'type' => 'string',
          ),
          'CreateTime' => 
          array (
            'title' => '创建时间',
            'type' => 'string',
          ),
          'CustomId' => 
          array (
            'title' => '自定义ID',
            'type' => 'string',
          ),
          'CustomLabels' => 
          array (
            'title' => '自定义标签',
            'type' => 'object',
          ),
        ),
      ),
      'MNS' => 
      array (
        'title' => 'A short description of struct',
        'description' => 'MNS消息通知结构体',
        'type' => 'object',
        'properties' => 
        array (
          'TopicName' => 
          array (
            'title' => 'TopicName',
            'type' => 'string',
          ),
        ),
      ),
      'Message' => 
      array (
        'title' => '智能助手消息',
        'type' => 'object',
        'properties' => 
        array (
          'CreateTime' => 
          array (
            'title' => '时间',
            'type' => 'string',
          ),
          'Regenerate' => 
          array (
            'title' => '是否为重新生成的答案',
            'type' => 'boolean',
          ),
          'Score' => 
          array (
            'title' => '打分',
            'type' => 'number',
            'format' => 'double',
          ),
          'AssistantType' => 
          array (
            'title' => '助手类型',
            'type' => 'string',
          ),
          'DatasetName' => 
          array (
            'title' => '问答引用的数据集',
            'type' => 'string',
          ),
          'SourceURI' => 
          array (
            'title' => '问答来源文件地址',
            'type' => 'string',
          ),
          'Topic' => 
          array (
            'title' => '问题主题',
            'type' => 'string',
          ),
          'Content' => 
          array (
            'title' => '问题内容',
            'type' => 'string',
          ),
          'Language' => 
          array (
            'title' => '回答语言',
            'type' => 'string',
          ),
          'Tone' => 
          array (
            'title' => '回答语气',
            'type' => 'string',
          ),
          'Reply' => 
          array (
            'title' => '回答',
            'type' => 'string',
          ),
          'Suggestion' => 
          array (
            'title' => '合规检测结果',
            'type' => 'string',
          ),
        ),
      ),
      'MetaData' => 
      array (
        'title' => '模型基本信息',
        'type' => 'object',
        'properties' => 
        array (
          'Identifier' => 
          array (
            'title' => '模型类别标识',
            'type' => 'string',
            'example' => 'detection',
          ),
          'Version' => 
          array (
            'title' => '模型版本',
            'type' => 'string',
            'example' => 'v1',
          ),
          'Provider' => 
          array (
            'title' => '模型提供者',
            'type' => 'string',
            'example' => 'imm',
          ),
        ),
      ),
      'ModelSpecification' => 
      array (
        'title' => '模型详细规格信息',
        'type' => 'object',
        'properties' => 
        array (
          'MetaData' => 
          array (
            'required' => true,
            '$ref' => '#/components/schemas/MetaData',
          ),
          'Spec' => 
          array (
            'required' => true,
            '$ref' => '#/components/schemas/Spec',
          ),
        ),
      ),
      'Notification' => 
      array (
        'description' => '消息通知结构体',
        'type' => 'object',
        'properties' => 
        array (
          'MNS' => 
          array (
            'title' => 'MNS',
            '$ref' => '#/components/schemas/MNS',
          ),
          'RocketMQ' => 
          array (
            'title' => 'RocketMQ',
            '$ref' => '#/components/schemas/RocketMQ',
          ),
          'ExtendedMessageURI' => 
          array (
            'title' => 'ExtendedMessageURI',
            'type' => 'string',
          ),
        ),
      ),
      'OCRContents' => 
      array (
        'title' => 'A short description of struct',
        'description' => 'OCR内容',
        'type' => 'object',
        'properties' => 
        array (
          'Language' => 
          array (
            'title' => 'Language',
            'type' => 'string',
          ),
          'Contents' => 
          array (
            'title' => 'Contents',
            'type' => 'string',
          ),
          'Confidence' => 
          array (
            'title' => 'Confidence',
            'type' => 'number',
            'format' => 'float',
          ),
          'Boundary' => 
          array (
            'title' => 'Boundary',
            '$ref' => '#/components/schemas/Boundary',
          ),
        ),
      ),
      'OctreeOption' => 
      array (
        'title' => 'OctreeOption',
        'description' => 'OctreeOption',
        'type' => 'object',
        'properties' => 
        array (
          'PointResolution' => 
          array (
            'title' => 'PointResolution',
            'type' => 'number',
            'format' => 'double',
            'maximum' => '1',
            'minimum' => '0',
            'example' => '0.01',
            'default' => '0.01',
          ),
          'OctreeResolution' => 
          array (
            'title' => 'OctreeResolution',
            'type' => 'number',
            'format' => 'double',
            'maximum' => '1',
            'minimum' => '0',
            'example' => '0.01',
            'default' => '0.01',
          ),
          'DoVoxelGridDownDownSampling' => 
          array (
            'title' => 'DoVoxelGridDownDownSampling',
            'type' => 'boolean',
            'example' => 'false',
            'default' => 'false',
          ),
          'LibraryName' => 
          array (
            'title' => 'LibraryName',
            'type' => 'string',
            'example' => 'pcl',
            'default' => 'pcl',
            'enum' => 
            array (
              0 => 'pcl',
            ),
          ),
        ),
      ),
      'Optimization' => 
      array (
        'title' => '优化算法信息',
        'type' => 'object',
        'properties' => 
        array (
          'LearningRate' => 
          array (
            'title' => '初始学习率',
            'type' => 'number',
            'format' => 'float',
            'example' => '0.01',
          ),
          'Optimizer' => 
          array (
            'title' => '优化方法',
            'type' => 'string',
            'example' => 'SGD',
          ),
        ),
      ),
      'PointInt64' => 
      array (
        'title' => '点坐标',
        'description' => '点坐标',
        'type' => 'object',
        'properties' => 
        array (
          'X' => 
          array (
            'title' => '横坐标X',
            'type' => 'integer',
            'format' => 'int64',
          ),
          'Y' => 
          array (
            'title' => '纵坐标Y',
            'type' => 'integer',
            'format' => 'int64',
          ),
        ),
      ),
      'Project' => 
      array (
        'title' => '项目结构体',
        'description' => '项目',
        'type' => 'object',
        'properties' => 
        array (
          'ProjectName' => 
          array (
            'title' => '项目名称',
            'type' => 'string',
          ),
          'ServiceRole' => 
          array (
            'title' => '服务角色',
            'type' => 'string',
          ),
          'TemplateId' => 
          array (
            'title' => '模板Id',
            'type' => 'string',
          ),
          'CreateTime' => 
          array (
            'title' => '创建时间',
            'type' => 'string',
          ),
          'UpdateTime' => 
          array (
            'title' => '更新时间',
            'type' => 'string',
          ),
          'Description' => 
          array (
            'title' => '描述',
            'type' => 'string',
          ),
          'ProjectQueriesPerSecond' => 
          array (
            'title' => '项目QPS',
            'type' => 'integer',
            'format' => 'int64',
          ),
          'EngineConcurrency' => 
          array (
            'title' => '项目最大并发数',
            'type' => 'integer',
            'format' => 'int64',
          ),
          'ProjectMaxDatasetCount' => 
          array (
            'title' => '项目最多媒体集数量',
            'type' => 'integer',
            'format' => 'int64',
          ),
          'DatasetMaxBindCount' => 
          array (
            'title' => '项目最多绑定数',
            'type' => 'integer',
            'format' => 'int64',
          ),
          'DatasetMaxFileCount' => 
          array (
            'title' => '项目最多文件数',
            'type' => 'integer',
            'format' => 'int64',
          ),
          'DatasetMaxEntityCount' => 
          array (
            'title' => '项目最多实体数',
            'type' => 'integer',
            'format' => 'int64',
          ),
          'DatasetMaxRelationCount' => 
          array (
            'title' => '项目最多关系数',
            'type' => 'integer',
            'format' => 'int64',
          ),
          'DatasetMaxTotalFileSize' => 
          array (
            'title' => '项目最大文件总大小',
            'type' => 'integer',
            'format' => 'int64',
          ),
          'DatasetCount' => 
          array (
            'title' => '项目当前媒体集数',
            'type' => 'integer',
            'format' => 'int64',
          ),
          'FileCount' => 
          array (
            'title' => '项目当前文件数',
            'type' => 'integer',
            'format' => 'int64',
          ),
          'TotalFileSize' => 
          array (
            'title' => '项目当前文件总大小',
            'type' => 'integer',
            'format' => 'int64',
          ),
          'Tags' => 
          array (
            'title' => '标签',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'TagKey' => 
                array (
                  'title' => 'TagKey',
                  'type' => 'string',
                ),
                'TagValue' => 
                array (
                  'title' => 'TagValue',
                  'type' => 'string',
                ),
              ),
            ),
          ),
        ),
      ),
      'Property' => 
      array (
        'title' => '属性信息',
        'type' => 'object',
        'properties' => 
        array (
          'ItemsType' => 
          array (
            'title' => '如果字段ValueType类型是array, 则需要指定内部的子项类型，枚举值有:  float 、integer、string',
            'type' => 'string',
            'example' => 'float',
          ),
          'ValueType' => 
          array (
            'title' => '属性类型, 枚举值有：float、integer、string、array',
            'type' => 'string',
            'example' => 'array',
          ),
          'Value' => 
          array (
            'title' => '属性值',
            'type' => 'string',
            'example' => '[40, 80, 160, 320]',
          ),
          'Name' => 
          array (
            'title' => '属性名称',
            'type' => 'string',
            'example' => 'channels',
          ),
        ),
      ),
      'RegionType' => 
      array (
        'title' => 'RegionType',
        'description' => '地区描述',
        'type' => 'object',
        'properties' => 
        array (
          'RegionId' => 
          array (
            'title' => 'RegionId',
            'type' => 'string',
          ),
          'LocalName' => 
          array (
            'title' => 'LocalName',
            'type' => 'string',
          ),
        ),
      ),
      'Resource' => 
      array (
        'title' => '执行资源配置信息',
        'type' => 'object',
        'properties' => 
        array (
          'ECSInstance' => 
          array (
            'title' => 'ECS实例',
            'type' => 'string',
            'example' => 'ecs.gn5i-c2g1.large',
          ),
          'CPU' => 
          array (
            'title' => 'CPU核心数 范围4~96',
            'type' => 'integer',
            'format' => 'int64',
            'example' => '2',
          ),
          'GPUNum' => 
          array (
            'title' => 'GPU个数',
            'type' => 'integer',
            'format' => 'int64',
            'example' => '1',
          ),
          'Name' => 
          array (
            'title' => '展示文案',
            'type' => 'string',
            'example' => 'string	ecs.gn5i-c2g1.large-2vCPU-8GB-1*NVIDIA_P4',
          ),
          'RAM' => 
          array (
            'title' => '内存大小（单位G）30~736',
            'type' => 'integer',
            'format' => 'int64',
            'example' => '8',
          ),
          'GPUModel' => 
          array (
            'title' => 'GPU型号',
            'type' => 'string',
            'example' => 'string	NVIDIA_P4',
          ),
        ),
      ),
      'RocketMQ' => 
      array (
        'title' => 'A short description of struct',
        'description' => 'RocketMQ消息通知结构体',
        'type' => 'object',
        'properties' => 
        array (
          'TopicName' => 
          array (
            'title' => 'TopicName',
            'type' => 'string',
          ),
          'InstanceId' => 
          array (
            'title' => 'InstanceId',
            'type' => 'string',
          ),
        ),
      ),
      'Row' => 
      array (
        'title' => 'A short description of struct',
        'description' => '索引文件时的参数struct',
        'type' => 'object',
        'properties' => 
        array (
          'URI' => 
          array (
            'title' => 'URI',
            'type' => 'string',
          ),
          'CustomLabels' => 
          array (
            'title' => 'CustomLabels',
            'type' => 'array',
            'items' => 
            array (
              '$ref' => '#/components/schemas/KeyValuePair',
            ),
          ),
        ),
      ),
      'Runtime' => 
      array (
        'title' => '模型训练运行时信息',
        'type' => 'object',
        'properties' => 
        array (
          'Hyperparameters' => 
          array (
            'required' => true,
            '$ref' => '#/components/schemas/Hyperparameters',
          ),
          'Resource' => 
          array (
            'required' => true,
            '$ref' => '#/components/schemas/Resource',
          ),
        ),
      ),
      'Schedule' => 
      array (
        'title' => '学习率变化策略',
        'type' => 'object',
        'properties' => 
        array (
          'Gamma' => 
          array (
            'title' => 'lr衰减率,仅当选择StepLR策略时生效',
            'type' => 'number',
            'format' => 'float',
            'example' => '0.97',
          ),
          'StepSize' => 
          array (
            'title' => 'lr衰减间隔的epoch数量,仅当选择StepLR策略时生效',
            'type' => 'integer',
            'format' => 'int64',
            'example' => '1',
          ),
          'LRScheduler' => 
          array (
            'title' => '学习率调整策略',
            'type' => 'string',
            'example' => 'StepLR',
          ),
        ),
      ),
      'SimilarImage' => 
      array (
        'title' => 'A short description of struct',
        'description' => '相似图片',
        'type' => 'object',
        'properties' => 
        array (
          'URI' => 
          array (
            'title' => '图片URI',
            'type' => 'string',
          ),
          'ImageScore' => 
          array (
            'title' => '美学分数',
            'type' => 'number',
            'format' => 'double',
          ),
        ),
      ),
      'SimilarImageCluster' => 
      array (
        'title' => 'A short description of struct',
        'description' => '相似图片聚类',
        'type' => 'object',
        'properties' => 
        array (
          'ObjectId' => 
          array (
            'title' => '唯一ID',
            'type' => 'string',
          ),
          'UpdateTime' => 
          array (
            'title' => '更新时间',
            'type' => 'string',
          ),
          'CreateTime' => 
          array (
            'title' => '结束时间',
            'type' => 'string',
          ),
          'CustomLabels' => 
          array (
            'title' => '自定义标签',
            'type' => 'object',
          ),
          'Files' => 
          array (
            'title' => '相似图片文件',
            'type' => 'array',
            'items' => 
            array (
              '$ref' => '#/components/schemas/SimilarImage',
            ),
          ),
        ),
      ),
      'SimpleQuery' => 
      array (
        'title' => 'SimpleQuery 简单查询所用到的查询结构体',
        'description' => '简单查询所用到的查询结构体。',
        'type' => 'object',
        'properties' => 
        array (
          'Field' => 
          array (
            'title' => '需要查询的字段名',
            'type' => 'string',
          ),
          'Value' => 
          array (
            'title' => '需要查询的字段值',
            'type' => 'string',
          ),
          'Operation' => 
          array (
            'title' => '运算符',
            'type' => 'string',
            'example' => 'eq / gt / gte / lt / lte / match / prefix / and / or / not',
          ),
          'SubQueries' => 
          array (
            'title' => '由 SimpleQuery 结构体组成的子查询数组',
            'type' => 'array',
            'items' => 
            array (
              '$ref' => '#/components/schemas/SimpleQuery',
            ),
          ),
        ),
      ),
      'Spec' => 
      array (
        'title' => '模型规格信息',
        'type' => 'object',
        'properties' => 
        array (
          'Backbone' => 
          array (
            '$ref' => '#/components/schemas/CustomParams',
          ),
          'ClassNum' => 
          array (
            'title' => '最后一层输出的类别数量',
            'type' => 'integer',
            'format' => 'int64',
            'example' => '10',
          ),
          'Head' => 
          array (
            '$ref' => '#/components/schemas/CustomParams',
          ),
          'Loss' => 
          array (
            '$ref' => '#/components/schemas/CustomParams',
          ),
          'InputChannel' => 
          array (
            'title' => '3',
            'type' => 'integer',
            'format' => 'int64',
            'example' => '3',
          ),
          'Name' => 
          array (
            'title' => '模型名称，根绝模型类别，可选择名称不同',
            'type' => 'string',
            'required' => true,
            'example' => 'ClsResNet',
          ),
          'Neck' => 
          array (
            '$ref' => '#/components/schemas/CustomParams',
          ),
          'NumLandmarks' => 
          array (
            'title' => '人脸标定点，一般为5, 当做人脸检测时才需要',
            'type' => 'integer',
            'format' => 'int64',
            'example' => '5',
          ),
          'PretrainedPath' => 
          array (
            'title' => '预训练模型地址',
            'type' => 'string',
            'example' => 'oss://bucket/abc/xxx.json',
          ),
        ),
      ),
      'Story' => 
      array (
        'title' => 'A short description of struct',
        'type' => 'object',
        'properties' => 
        array (
          'OwnerId' => 
          array (
            'title' => 'OwnerId',
            'type' => 'string',
          ),
          'ProjectName' => 
          array (
            'title' => 'ProjectName',
            'type' => 'string',
          ),
          'DatasetName' => 
          array (
            'title' => 'DatasetName',
            'type' => 'string',
          ),
          'ObjectId' => 
          array (
            'title' => 'ObjectId',
            'type' => 'string',
          ),
          'ObjectType' => 
          array (
            'title' => 'ObjectType',
            'type' => 'string',
          ),
          'UpdateTime' => 
          array (
            'title' => 'UpdateTime',
            'type' => 'string',
          ),
          'CreateTime' => 
          array (
            'title' => 'CreateTime',
            'type' => 'string',
          ),
          'StoryName' => 
          array (
            'title' => 'StoryName',
            'type' => 'string',
          ),
          'StoryType' => 
          array (
            'title' => 'StoryType',
            'type' => 'string',
          ),
          'StorySubType' => 
          array (
            'title' => 'StorySubType',
            'type' => 'string',
          ),
          'StoryStartTime' => 
          array (
            'title' => 'StoryStartTime',
            'type' => 'string',
          ),
          'StoryEndTime' => 
          array (
            'title' => 'StoryEndTime',
            'type' => 'string',
          ),
          'Files' => 
          array (
            'title' => 'Files',
            'type' => 'array',
            'items' => 
            array (
              '$ref' => '#/components/schemas/File',
            ),
          ),
          'Cover' => 
          array (
            '$ref' => '#/components/schemas/File',
          ),
          'FigureClusterIds' => 
          array (
            'title' => 'FigureClusterIds',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'string',
            ),
          ),
          'CustomId' => 
          array (
            'title' => 'CustomId',
            'type' => 'string',
          ),
          'CustomLabels' => 
          array (
            'title' => 'CustomLabels',
            'type' => 'object',
            'required' => false,
          ),
          'Addresses' => 
          array (
            'title' => 'Addresses',
            'type' => 'array',
            'items' => 
            array (
              '$ref' => '#/components/schemas/Address',
            ),
          ),
        ),
      ),
      'SubtitleStream' => 
      array (
        'title' => 'A short description of struct',
        'description' => '标题流',
        'type' => 'object',
        'properties' => 
        array (
          'Index' => 
          array (
            'title' => 'Index',
            'type' => 'integer',
            'format' => 'int64',
          ),
          'Language' => 
          array (
            'title' => 'Language',
            'type' => 'string',
          ),
          'CodecName' => 
          array (
            'title' => 'CodecName',
            'type' => 'string',
          ),
          'CodecLongName' => 
          array (
            'title' => 'CodecLongName',
            'type' => 'string',
          ),
          'CodecTagString' => 
          array (
            'title' => 'CodecTagString',
            'type' => 'string',
          ),
          'CodecTag' => 
          array (
            'title' => 'CodecTag',
            'type' => 'string',
          ),
          'StartTime' => 
          array (
            'title' => 'StartTime',
            'type' => 'number',
            'format' => 'double',
          ),
          'Duration' => 
          array (
            'title' => 'Duration',
            'type' => 'number',
            'format' => 'double',
          ),
          'Bitrate' => 
          array (
            'title' => 'Bitrate',
            'type' => 'integer',
            'format' => 'int64',
          ),
          'Content' => 
          array (
            'title' => 'Content',
            'type' => 'string',
          ),
          'Width' => 
          array (
            'title' => 'Width',
            'type' => 'integer',
            'format' => 'int64',
          ),
          'Height' => 
          array (
            'title' => 'Height',
            'type' => 'integer',
            'format' => 'int64',
          ),
        ),
      ),
      'TargetAudio' => 
      array (
        'title' => 'Audio Struct',
        'description' => 'MediaConvert Target Audio',
        'type' => 'object',
        'properties' => 
        array (
          'DisableAudio' => 
          array (
            'title' => 'DisableAudio',
            'type' => 'boolean',
          ),
          'Stream' => 
          array (
            'title' => 'Stream',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'integer',
              'format' => 'int64',
            ),
          ),
          'TranscodeAudio' => 
          array (
            'title' => 'TranscodeAudio',
            'type' => 'object',
            'properties' => 
            array (
              'Codec' => 
              array (
                'title' => 'Codec',
                'type' => 'string',
              ),
              'BitrateOption' => 
              array (
                'title' => 'BitrateOption',
                'type' => 'string',
              ),
              'Bitrate' => 
              array (
                'title' => 'Bitrate',
                'type' => 'integer',
                'format' => 'int32',
              ),
              'Quality' => 
              array (
                'title' => 'Quality',
                'type' => 'integer',
                'format' => 'int32',
              ),
              'SampleRateOption' => 
              array (
                'title' => 'SampleRateOption',
                'type' => 'string',
              ),
              'SampleRate' => 
              array (
                'title' => 'SampleRate',
                'type' => 'integer',
                'format' => 'int32',
              ),
              'Channel' => 
              array (
                'title' => 'Channel',
                'type' => 'integer',
                'format' => 'int32',
              ),
            ),
          ),
          'FilterAudio' => 
          array (
            'title' => 'FilterAudio',
            'type' => 'object',
            'properties' => 
            array (
              'Mixing' => 
              array (
                'title' => 'Mixing',
                'type' => 'boolean',
              ),
            ),
          ),
        ),
      ),
      'TargetImage' => 
      array (
        'title' => 'Image Struct',
        'description' => 'MediaConvert Target Image',
        'type' => 'object',
        'properties' => 
        array (
          'Sprites' => 
          array (
            'title' => 'Sprites',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'URI' => 
                array (
                  'title' => 'URI',
                  'type' => 'string',
                  'required' => true,
                ),
                'Format' => 
                array (
                  'title' => 'Format',
                  'type' => 'string',
                  'required' => true,
                ),
                'StartTime' => 
                array (
                  'title' => 'StartTime',
                  'type' => 'number',
                  'format' => 'double',
                ),
                'Interval' => 
                array (
                  'title' => 'Interval',
                  'type' => 'number',
                  'format' => 'double',
                  'required' => false,
                ),
                'Number' => 
                array (
                  'title' => 'Number',
                  'type' => 'integer',
                  'format' => 'int32',
                ),
                'ScaleWidth' => 
                array (
                  'title' => 'ScaleWidth',
                  'type' => 'number',
                  'format' => 'float',
                ),
                'ScaleHeight' => 
                array (
                  'title' => 'ScaleHeight',
                  'type' => 'number',
                  'format' => 'float',
                ),
                'TileWidth' => 
                array (
                  'title' => 'TileWidth',
                  'type' => 'integer',
                  'format' => 'int32',
                ),
                'TileHeight' => 
                array (
                  'title' => 'TileHeight',
                  'type' => 'integer',
                  'format' => 'int32',
                ),
                'Pad' => 
                array (
                  'title' => 'Pad',
                  'type' => 'integer',
                  'format' => 'int32',
                ),
                'Margin' => 
                array (
                  'title' => 'Margin',
                  'type' => 'integer',
                  'format' => 'int32',
                ),
                'ScaleType' => 
                array (
                  'title' => 'ScaleType',
                  'type' => 'string',
                ),
              ),
            ),
          ),
          'Snapshots' => 
          array (
            'title' => 'Snapshots',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'URI' => 
                array (
                  'title' => 'URI',
                  'type' => 'string',
                  'required' => true,
                ),
                'Format' => 
                array (
                  'title' => 'Format',
                  'type' => 'string',
                  'required' => true,
                ),
                'StartTime' => 
                array (
                  'title' => 'StartTime',
                  'type' => 'number',
                  'format' => 'double',
                ),
                'Interval' => 
                array (
                  'title' => 'Interval',
                  'type' => 'number',
                  'format' => 'double',
                  'required' => false,
                ),
                'Number' => 
                array (
                  'title' => 'Number',
                  'type' => 'integer',
                  'format' => 'int32',
                ),
                'Width' => 
                array (
                  'title' => 'Width',
                  'type' => 'number',
                  'format' => 'double',
                ),
                'Height' => 
                array (
                  'title' => 'Height',
                  'type' => 'number',
                  'format' => 'double',
                ),
                'ScaleType' => 
                array (
                  'title' => 'ScaleType',
                  'type' => 'string',
                ),
              ),
            ),
          ),
          'Animations' => 
          array (
            'title' => 'Animations',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'URI' => 
                array (
                  'title' => 'URI',
                  'type' => 'string',
                  'required' => true,
                ),
                'Format' => 
                array (
                  'title' => 'Format',
                  'type' => 'string',
                  'required' => true,
                ),
                'FrameRate' => 
                array (
                  'title' => 'FrameRate',
                  'type' => 'number',
                  'format' => 'double',
                ),
                'StartTime' => 
                array (
                  'title' => 'StartTime',
                  'type' => 'number',
                  'format' => 'double',
                ),
                'Interval' => 
                array (
                  'title' => 'Interval',
                  'type' => 'number',
                  'format' => 'double',
                  'required' => false,
                ),
                'Number' => 
                array (
                  'title' => 'Number',
                  'type' => 'integer',
                  'format' => 'int32',
                ),
                'Width' => 
                array (
                  'title' => 'Width',
                  'type' => 'number',
                  'format' => 'double',
                ),
                'Height' => 
                array (
                  'title' => 'Height',
                  'type' => 'number',
                  'format' => 'double',
                ),
                'ScaleType' => 
                array (
                  'title' => 'ScaleType',
                  'type' => 'string',
                ),
              ),
            ),
          ),
        ),
      ),
      'TargetSubtitle' => 
      array (
        'title' => 'Subtitle Struct',
        'description' => 'MediaConvert Target Subtitle',
        'type' => 'object',
        'properties' => 
        array (
          'DisableSubtitle' => 
          array (
            'title' => 'DisableSubtitle',
            'type' => 'boolean',
          ),
          'Stream' => 
          array (
            'title' => 'Stream',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'integer',
              'format' => 'int32',
            ),
          ),
          'ExtractSubtitle' => 
          array (
            'title' => 'ExtractSubtitle',
            'type' => 'object',
            'properties' => 
            array (
              'URI' => 
              array (
                'title' => 'URI',
                'type' => 'string',
              ),
              'Format' => 
              array (
                'title' => 'Format',
                'type' => 'string',
              ),
            ),
          ),
        ),
      ),
      'TargetVideo' => 
      array (
        'title' => 'Video Struct',
        'description' => 'MediaConvert Target Video',
        'type' => 'object',
        'properties' => 
        array (
          'DisableVideo' => 
          array (
            'title' => 'DisableVideo',
            'type' => 'boolean',
          ),
          'Stream' => 
          array (
            'title' => 'Stream',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'integer',
              'format' => 'int32',
            ),
          ),
          'TranscodeVideo' => 
          array (
            'title' => 'TranscodeVideo',
            'type' => 'object',
            'properties' => 
            array (
              'Codec' => 
              array (
                'title' => 'Codec',
                'type' => 'string',
              ),
              'PixelFormat' => 
              array (
                'title' => 'PixelFormat',
                'type' => 'string',
              ),
              'FrameRateOption' => 
              array (
                'title' => 'FrameRateOption',
                'type' => 'string',
              ),
              'FrameRate' => 
              array (
                'title' => 'FrameRate',
                'type' => 'number',
                'format' => 'float',
              ),
              'ResolutionOption' => 
              array (
                'title' => 'ResolutionOption',
                'type' => 'string',
              ),
              'Resolution' => 
              array (
                'title' => 'Resolution',
                'type' => 'string',
              ),
              'AdaptiveResolutionDirection' => 
              array (
                'title' => 'AdaptiveResolutionDirection',
                'type' => 'boolean',
              ),
              'ScaleType' => 
              array (
                'title' => 'ScaleType',
                'type' => 'string',
              ),
              'Rotation' => 
              array (
                'title' => 'Rotation',
                'type' => 'integer',
                'format' => 'int32',
              ),
              'BitrateOption' => 
              array (
                'title' => 'BitrateOption',
                'type' => 'string',
              ),
              'Bitrate' => 
              array (
                'title' => 'Bitrate',
                'type' => 'integer',
                'format' => 'int32',
              ),
              'GOPSize' => 
              array (
                'title' => 'GOPSize',
                'type' => 'integer',
                'format' => 'int32',
              ),
              'CRF' => 
              array (
                'title' => 'CRF',
                'type' => 'number',
                'format' => 'float',
              ),
              'BufferSize' => 
              array (
                'title' => 'BufferSize',
                'type' => 'integer',
                'format' => 'int32',
              ),
              'MaxBitrate' => 
              array (
                'title' => 'MaxBitrate',
                'type' => 'integer',
                'format' => 'int32',
              ),
              'BFrames' => 
              array (
                'title' => 'BFrames',
                'type' => 'integer',
                'format' => 'int32',
              ),
              'Refs' => 
              array (
                'title' => 'Refs',
                'type' => 'integer',
                'format' => 'int32',
              ),
            ),
          ),
          'FilterVideo' => 
          array (
            'title' => 'FilterVideo',
            'type' => 'object',
            'properties' => 
            array (
              'Watermarks' => 
              array (
                'title' => 'Watermarks',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Type' => 
                    array (
                      'title' => 'Type',
                      'type' => 'string',
                    ),
                    'Dx' => 
                    array (
                      'title' => 'Dx',
                      'type' => 'number',
                      'format' => 'float',
                    ),
                    'Dy' => 
                    array (
                      'title' => 'Dy',
                      'type' => 'number',
                      'format' => 'float',
                    ),
                    'StartTime' => 
                    array (
                      'title' => 'StartTime',
                      'type' => 'number',
                      'format' => 'double',
                    ),
                    'Duration' => 
                    array (
                      'title' => 'Duration',
                      'type' => 'number',
                      'format' => 'double',
                    ),
                    'ReferPos' => 
                    array (
                      'title' => 'ReferPos',
                      'type' => 'string',
                    ),
                    'Content' => 
                    array (
                      'title' => 'Content',
                      'type' => 'string',
                    ),
                    'FontName' => 
                    array (
                      'title' => 'FontName',
                      'type' => 'string',
                    ),
                    'FontSize' => 
                    array (
                      'title' => 'FontSize',
                      'type' => 'integer',
                      'format' => 'int32',
                    ),
                    'FontColor' => 
                    array (
                      'title' => 'FontColor',
                      'type' => 'string',
                    ),
                    'FontApha' => 
                    array (
                      'title' => 'FontApha',
                      'type' => 'number',
                      'format' => 'float',
                    ),
                    'BorderWidth' => 
                    array (
                      'title' => 'BorderWidth',
                      'type' => 'integer',
                      'format' => 'int32',
                    ),
                    'BorderColor' => 
                    array (
                      'title' => 'BorderColor',
                      'type' => 'string',
                    ),
                    'URI' => 
                    array (
                      'title' => 'URI',
                      'type' => 'string',
                    ),
                    'Width' => 
                    array (
                      'title' => 'Width',
                      'type' => 'number',
                      'format' => 'float',
                    ),
                    'Height' => 
                    array (
                      'title' => 'Height',
                      'type' => 'number',
                      'format' => 'float',
                    ),
                  ),
                ),
              ),
              'Delogos' => 
              array (
                'title' => 'Delogos',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'StartTime' => 
                    array (
                      'title' => 'StartTime',
                      'type' => 'number',
                      'format' => 'double',
                    ),
                    'Duration' => 
                    array (
                      'title' => 'Duration',
                      'type' => 'number',
                      'format' => 'double',
                    ),
                    'Dx' => 
                    array (
                      'title' => 'Dx',
                      'type' => 'number',
                      'format' => 'float',
                    ),
                    'Dy' => 
                    array (
                      'title' => 'Dy',
                      'type' => 'number',
                      'format' => 'float',
                    ),
                    'Width' => 
                    array (
                      'title' => 'Width',
                      'type' => 'number',
                      'format' => 'float',
                    ),
                    'Height' => 
                    array (
                      'title' => 'Height',
                      'type' => 'number',
                      'format' => 'float',
                    ),
                    'ReferPos' => 
                    array (
                      'title' => 'ReferPos',
                      'type' => 'string',
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'TaskInfo' => 
      array (
        'title' => '任务信息',
        'description' => '任务信息',
        'type' => 'object',
        'properties' => 
        array (
          'Status' => 
          array (
            'title' => '任务状态',
            'type' => 'string',
          ),
          'Code' => 
          array (
            'title' => '错误码',
            'type' => 'string',
          ),
          'Message' => 
          array (
            'title' => '错误消息',
            'type' => 'string',
          ),
          'StartTime' => 
          array (
            'title' => '任务开始时间',
            'type' => 'string',
          ),
          'EndTime' => 
          array (
            'title' => '任务结束时间',
            'type' => 'string',
          ),
          'UserData' => 
          array (
            'title' => '用户自定义信息',
            'type' => 'string',
          ),
          'TaskType' => 
          array (
            'title' => '任务类型',
            'type' => 'string',
          ),
          'TaskId' => 
          array (
            'title' => '任务唯一ID',
            'type' => 'string',
          ),
          'Tags' => 
          array (
            'title' => '标签',
            'type' => 'object',
          ),
          'TaskRequestDefinition' => 
          array (
            'title' => 'task信息',
            'type' => 'string',
          ),
          'Progress' => 
          array (
            'title' => '任务进度',
            'type' => 'integer',
            'format' => 'int32',
          ),
        ),
      ),
      'TimeRange' => 
      array (
        'title' => 'A short description of struct',
        'description' => '时间范围',
        'type' => 'object',
        'properties' => 
        array (
          'Start' => 
          array (
            'title' => 'start time',
            'type' => 'string',
          ),
          'End' => 
          array (
            'title' => 'end time',
            'type' => 'string',
          ),
        ),
      ),
      'TrainingSpecification' => 
      array (
        'title' => 'x',
        'type' => 'object',
        'properties' => 
        array (
          'ValidationSourceURI' => 
          array (
            'title' => '评估数据集地址，和ValidationSplit参数2选1',
            'type' => 'string',
            'example' => 'oss://imm-alg-dataset-bj/cifar10/test_index.json',
          ),
          'Runtime' => 
          array (
            'required' => true,
            '$ref' => '#/components/schemas/Runtime',
          ),
          'Endpoint' => 
          array (
            'title' => '数据集存储endpoint',
            'type' => 'string',
            'required' => true,
          ),
          'ModelSpecification' => 
          array (
            'required' => true,
            '$ref' => '#/components/schemas/ModelSpecification',
          ),
          'DatasetName' => 
          array (
            'title' => '数据集名称',
            'type' => 'string',
          ),
          'SourceURI' => 
          array (
            'title' => '数据集地址',
            'type' => 'string',
            'required' => true,
            'example' => 'oss://imm-alg-dataset-bj/cifar10/test_index.json',
          ),
          'Transforms' => 
          array (
            'title' => '数据集本地预处理参数',
            'type' => 'array',
            'items' => 
            array (
              '$ref' => '#/components/schemas/CustomParams',
            ),
          ),
          'ValidationSplit' => 
          array (
            'title' => '切分训练数据集比例作为评估数据集，和ValidationSourceURI参数2选1',
            'type' => 'number',
            'format' => 'float',
            'example' => '0.95',
          ),
          'TargetURI' => 
          array (
            'title' => '模型数据存储路径，当前只支持oss',
            'type' => 'string',
            'required' => true,
            'example' => 'oss://imm-alg-dataset-bj/model_training_test/',
          ),
        ),
      ),
      'TrimPolicy' => 
      array (
        'title' => '文档转换表格瘦身参数',
        'description' => '文档转换表格瘦身参数',
        'type' => 'object',
        'properties' => 
        array (
          'DisableDeleteEmptyCell' => 
          array (
            'title' => '禁止删除所有空单元格',
            'type' => 'boolean',
          ),
          'DisableDeleteRepeatedStyle' => 
          array (
            'title' => '禁止删除所有重复样式',
            'type' => 'boolean',
          ),
          'DisableDeleteUnusedShape' => 
          array (
            'title' => '禁止删除没有使用的Shape',
            'type' => 'boolean',
          ),
          'DisableDeleteUnusedPicture' => 
          array (
            'title' => '禁止删除未使用的单元格图片',
            'type' => 'boolean',
          ),
        ),
      ),
      'VideoStream' => 
      array (
        'title' => 'A short description of struct',
        'description' => '视频流',
        'type' => 'object',
        'properties' => 
        array (
          'Index' => 
          array (
            'title' => 'Index',
            'type' => 'integer',
            'format' => 'int64',
          ),
          'Language' => 
          array (
            'title' => 'Language',
            'type' => 'string',
          ),
          'CodecName' => 
          array (
            'title' => 'CodecName',
            'type' => 'string',
          ),
          'CodecLongName' => 
          array (
            'title' => 'CodecLongName',
            'type' => 'string',
          ),
          'Profile' => 
          array (
            'title' => 'Profile',
            'type' => 'string',
          ),
          'CodecTimeBase' => 
          array (
            'title' => 'CodecTimeBase',
            'type' => 'string',
          ),
          'CodecTagString' => 
          array (
            'title' => 'CodecTagString',
            'type' => 'string',
          ),
          'CodecTag' => 
          array (
            'title' => 'CodecTag',
            'type' => 'string',
          ),
          'Width' => 
          array (
            'title' => 'Width',
            'type' => 'integer',
            'format' => 'int64',
          ),
          'Height' => 
          array (
            'title' => 'Height',
            'type' => 'integer',
            'format' => 'int64',
          ),
          'HasBFrames' => 
          array (
            'title' => 'HasBFrames',
            'type' => 'integer',
            'format' => 'int64',
          ),
          'SampleAspectRatio' => 
          array (
            'title' => 'SampleAspectRatio',
            'type' => 'string',
          ),
          'DisplayAspectRatio' => 
          array (
            'title' => 'DisplayAspectRatio',
            'type' => 'string',
          ),
          'PixelFormat' => 
          array (
            'title' => 'PixelFormat',
            'type' => 'string',
          ),
          'Level' => 
          array (
            'title' => 'Level',
            'type' => 'integer',
            'format' => 'int64',
          ),
          'FrameRate' => 
          array (
            'title' => 'FrameRate',
            'type' => 'string',
          ),
          'AverageFrameRate' => 
          array (
            'title' => 'AverageFrameRate',
            'type' => 'string',
          ),
          'TimeBase' => 
          array (
            'title' => 'TimeBase',
            'type' => 'string',
          ),
          'StartTime' => 
          array (
            'title' => 'StartTime',
            'type' => 'number',
            'format' => 'double',
          ),
          'Duration' => 
          array (
            'title' => 'Duration',
            'type' => 'number',
            'format' => 'double',
          ),
          'Bitrate' => 
          array (
            'title' => 'Bitrate',
            'type' => 'integer',
            'format' => 'int64',
          ),
          'FrameCount' => 
          array (
            'title' => 'FrameCount',
            'type' => 'integer',
            'format' => 'int64',
          ),
          'Rotate' => 
          array (
            'title' => 'Rotate',
            'type' => 'string',
          ),
          'BitDepth' => 
          array (
            'title' => 'BitDepth',
            'type' => 'integer',
            'format' => 'int64',
          ),
          'ColorSpace' => 
          array (
            'title' => 'ColorSpace',
            'type' => 'string',
          ),
          'ColorRange' => 
          array (
            'title' => 'ColorRange',
            'type' => 'string',
          ),
          'ColorTransfer' => 
          array (
            'title' => 'ColorTransfer',
            'type' => 'string',
          ),
          'ColorPrimaries' => 
          array (
            'title' => 'ColorPrimaries',
            'type' => 'string',
          ),
        ),
      ),
      'WebofficePermission' => 
      array (
        'title' => 'Weboffice 用户权限',
        'description' => 'Weboffice 用户权限',
        'type' => 'object',
        'properties' => 
        array (
          'Rename' => 
          array (
            'title' => '重命名',
            'type' => 'boolean',
          ),
          'Readonly' => 
          array (
            'title' => '只读模式',
            'type' => 'boolean',
          ),
          'History' => 
          array (
            'title' => '查看历史版本',
            'type' => 'boolean',
          ),
          'Print' => 
          array (
            'title' => '打印',
            'type' => 'boolean',
          ),
          'Export' => 
          array (
            'title' => '导出',
            'type' => 'boolean',
          ),
          'Copy' => 
          array (
            'title' => '拷贝',
            'type' => 'boolean',
          ),
        ),
      ),
      'WebofficeUser' => 
      array (
        'title' => 'Weboffice 用户',
        'description' => 'Weboffice 用户',
        'type' => 'object',
        'properties' => 
        array (
          'Id' => 
          array (
            'title' => 'Id',
            'type' => 'string',
          ),
          'Name' => 
          array (
            'title' => '名字',
            'type' => 'string',
          ),
          'Avatar' => 
          array (
            'title' => '头像',
            'type' => 'string',
          ),
        ),
      ),
      'WebofficeWatermark' => 
      array (
        'title' => 'Weboffice 水印',
        'description' => 'Weboffice 水印',
        'type' => 'object',
        'properties' => 
        array (
          'Type' => 
          array (
            'title' => '水印类型，目前仅支持文字水印，0: 无水印；1: 文字水印',
            'type' => 'integer',
            'format' => 'int64',
          ),
          'Value' => 
          array (
            'title' => '水印文字',
            'type' => 'string',
          ),
          'Rotate' => 
          array (
            'title' => '旋转角度',
            'type' => 'number',
            'format' => 'float',
          ),
          'Vertical' => 
          array (
            'title' => '垂直间距',
            'type' => 'integer',
            'format' => 'int64',
          ),
          'Horizontal' => 
          array (
            'title' => '水平间距',
            'type' => 'integer',
            'format' => 'int64',
          ),
          'Font' => 
          array (
            'title' => '字体样式',
            'type' => 'string',
            'example' => 'bold 20px Serif',
          ),
          'FillStyle' => 
          array (
            'title' => '字体颜色',
            'type' => 'string',
            'example' => 'rgba(192, 192, 192, 0.6)',
          ),
        ),
      ),
    ),
  ),
  'apis' => 
  array (
    'ListRegions' => 
    array (
      'summary' => '查询支持IMM服务的Region列表信息，包括Region和对应语言的描述信息。',
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
        'operationType' => 'list',
        'riskType' => 'none',
        'abilityTreeCode' => '143479',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREimmKH590Y',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'AcceptLanguage',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '语言类型。取值范围如下：
- zh-CN ：中文
- en-US ：英文
- ja ：日语',
            'type' => 'string',
            'required' => true,
            'enumValueTitles' => 
            array (
            ),
            'example' => 'zh-CN',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => '响应结构体',
            'description' => '响应结构体',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'RequestId',
                'description' => '接口请求ID。',
                'type' => 'string',
                'example' => '7F7D235C-76FF-4B65-800C-8238AE3F****',
              ),
              'Regions' => 
              array (
                'description' => 'Region列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => 'Region结构信息。',
                  'enumValueTitles' => 
                  array (
                  ),
                  '$ref' => '#/components/schemas/RegionType',
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"7F7D235C-76FF-4B65-800C-8238AE3F****\\",\\n  \\"Regions\\": [\\n    {\\n      \\"RegionId\\": \\"\\",\\n      \\"LocalName\\": \\"\\"\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '查询支持IMM服务的Region列表',
    ),
    'CreateProject' => 
    array (
      'summary' => '创建一个项目（Project）。',
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
      'operationType' => 'write',
      'systemTags' => 
      array (
        'operationType' => 'create',
        'abilityTreeCode' => '436',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREimmKH590Y',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ProjectName',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '项目名称',
            'description' => '项目名称。命名规则如下：

- 长度为1~128字符。

- 只能包含英文字母，数字，短划线（-）和下划线（_）。

- 必须以英文字母或下划线（_）开头。',
            'type' => 'string',
            'required' => true,
            'example' => 'test-project',
          ),
        ),
        1 => 
        array (
          'name' => 'Description',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '项目描述信息。长度为1~256个英文或中文字符，默认值为空。',
            'type' => 'string',
            'required' => false,
            'enumValueTitles' => 
            array (
            ),
            'example' => 'immtest',
          ),
        ),
        2 => 
        array (
          'name' => 'ServiceRole',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '服务角色，授权给IMM服务以访问其他云资源（例如OSS）的权限，默认值为`AliyunIMMDefaultRole`。

如果要自定义服务角色，您可以通过RAM控制台创建普通服务角色并为角色授权。具体操作，请分别参见[创建普通服务角色](~~116800~~)和[为角色授权](~~116147~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'AliyunIMMDefaultRole',
          ),
        ),
        3 => 
        array (
          'name' => 'TemplateId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '工作流模板ID，默认值为空。更多信息，请参见[工作流模板与算子](~~466304~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'Official:AllFunction',
          ),
        ),
        4 => 
        array (
          'name' => 'ProjectMaxDatasetCount',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '项目中数据集的最大个数。取值范围为1~1000000000，默认值为1000000000。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1000000000',
          ),
        ),
        5 => 
        array (
          'name' => 'DatasetMaxBindCount',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '每个数据集绑定的最大个数。取值范围为1~10，默认值为10。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '10',
          ),
        ),
        6 => 
        array (
          'name' => 'DatasetMaxFileCount',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '每个数据集中文件的最大个数。取值范围为1~100000000，默认值为10000000000。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '100000000',
          ),
        ),
        7 => 
        array (
          'name' => 'DatasetMaxEntityCount',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '每个数据集中元数据实体的最大个数，默认值为10000000000。
>当前该配置仅为预留，使用中并不做实际限制。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '10000000000',
          ),
        ),
        8 => 
        array (
          'name' => 'DatasetMaxRelationCount',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '每个数据集中元数据关系的最大个数，默认值为100000000000。
>当前该配置仅为预留，使用中并不做实际限制。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '100000000000',
          ),
        ),
        9 => 
        array (
          'name' => 'DatasetMaxTotalFileSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '每个数据集中文件总大小的最大值，超过限制后无法再添加索引。单位为字节，默认值为90000000000000000。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '90000000000000000',
          ),
        ),
        10 => 
        array (
          'name' => 'Tag',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '标签列表',
            'type' => 'array',
            'items' => 
            array (
              'description' => '标签信息',
              'type' => 'object',
              'properties' => 
              array (
                'Key' => 
                array (
                  'description' => '标签键',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'TestKey',
                ),
                'Value' => 
                array (
                  'description' => '标签值',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'TestValue',
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
            'title' => '响应结构体',
            'description' => '响应结构体',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => '本次请求的唯一 ID',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '7F7D235C-76FF-4B65-800C-8238AE3F****',
              ),
              'Project' => 
              array (
                'description' => '项目信息。详细内容请单击Project查看。',
                '$ref' => '#/components/schemas/Project',
              ),
            ),
          ),
        ),
        500 => 
        array (
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"7F7D235C-76FF-4B65-800C-8238AE3F****\\",\\n  \\"Project\\": {\\n    \\"ProjectName\\": \\"\\",\\n    \\"ServiceRole\\": \\"\\",\\n    \\"TemplateId\\": \\"\\",\\n    \\"CreateTime\\": \\"\\",\\n    \\"UpdateTime\\": \\"\\",\\n    \\"Description\\": \\"\\",\\n    \\"ProjectQueriesPerSecond\\": 0,\\n    \\"EngineConcurrency\\": 0,\\n    \\"ProjectMaxDatasetCount\\": 0,\\n    \\"DatasetMaxBindCount\\": 0,\\n    \\"DatasetMaxFileCount\\": 0,\\n    \\"DatasetMaxEntityCount\\": 0,\\n    \\"DatasetMaxRelationCount\\": 0,\\n    \\"DatasetMaxTotalFileSize\\": 0,\\n    \\"DatasetCount\\": 0,\\n    \\"FileCount\\": 0,\\n    \\"TotalFileSize\\": 0,\\n    \\"Tags\\": [\\n      {\\n        \\"TagKey\\": \\"\\",\\n        \\"TagValue\\": \\"\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '创建项目',
      'description' => '* 项目名称在同一个Region下唯一。
* 创建的项目个数存在限制，默认最多创建5个项目，扩容请填写工单或使用钉钉搜索钉钉群号31690030817加入钉钉群进行申请。
* 创建项目后，您可以继续创建智能媒体管理的其他资源：
    + [创建数据集](~~478160~~)
    + [创建触发器](~~479912~~)
    + [创建批处理任务](~~606694~~)
    + [创建绑定任务](~~478202~~)',
    ),
    'UpdateProject' => 
    array (
      'summary' => '更新一个已创建项目（Project）的信息。',
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
      'operationType' => 'write',
      'systemTags' => 
      array (
        'operationType' => 'update',
        'abilityTreeCode' => '495',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREimmKH590Y',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ProjectName',
          'in' => 'query',
          'allowEmptyValue' => false,
          'schema' => 
          array (
            'title' => '项目名称',
            'description' => '项目名称，获取方式请参见[创建项目](~~478153~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'test-project',
          ),
        ),
        1 => 
        array (
          'name' => 'ServiceRole',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '服务角色',
            'description' => '服务角色，授权给IMM服务以访问其他云资源（例如OSS）的权限。

如果要自定义服务角色，您可以通过RAM控制台创建普通服务角色并为角色授权。具体操作，请分别参见[创建普通服务角色](~~116800~~)和[为角色授权](~~116147~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'AliyunIMMDefaultRole',
          ),
        ),
        2 => 
        array (
          'name' => 'Description',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '项目描述',
            'description' => '项目描述信息。长度为1~256个英文或中文字符。',
            'type' => 'string',
            'required' => false,
            'example' => 'immtest',
          ),
        ),
        3 => 
        array (
          'name' => 'TemplateId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '模板Id',
            'description' => '工作流模板ID。更多信息，请参见[工作流模板与算子](~~466304~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'AliyunIMMDefaultRole',
          ),
        ),
        4 => 
        array (
          'name' => 'ProjectMaxDatasetCount',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '项目最多媒体集数',
            'description' => '项目中数据集的最大个数。取值范围为1~1000000000。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1000000000',
          ),
        ),
        5 => 
        array (
          'name' => 'DatasetMaxBindCount',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '媒体集最多绑定数',
            'description' => '每个数据集绑定的最大个数。取值范围为1~10。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '10',
          ),
        ),
        6 => 
        array (
          'name' => 'DatasetMaxFileCount',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '媒体集最多文件数',
            'description' => '每个数据集中文件的最大个数。取值范围为1~100000000。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '100000000',
          ),
        ),
        7 => 
        array (
          'name' => 'DatasetMaxEntityCount',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '媒体集最多实体数',
            'description' => '每个数据集中元数据实体的最大个数。
>预留参数，使用中并不做实际限制。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '10000000000',
          ),
        ),
        8 => 
        array (
          'name' => 'DatasetMaxRelationCount',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '媒体集最多关系数',
            'description' => '每个数据集中元数据关系的最大个数。
>预留参数，使用中并不做实际限制。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '100000000000',
          ),
        ),
        9 => 
        array (
          'name' => 'DatasetMaxTotalFileSize',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '媒体集最大文件总大小',
            'description' => '每个数据集中文件总大小的最大值，超过限制后无法再添加索引。单位为字节。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '90000000000000000',
          ),
        ),
        10 => 
        array (
          'name' => 'Tag',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '标签列表',
            'type' => 'array',
            'items' => 
            array (
              'description' => '标签信息',
              'type' => 'object',
              'properties' => 
              array (
                'Key' => 
                array (
                  'description' => '标签键',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'TestKey',
                ),
                'Value' => 
                array (
                  'description' => '标签值',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'TestValue',
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
            'title' => '响应结构体',
            'description' => '响应结构体',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => '请求ID',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'D33C3574-4093-448E-86E7-15BE2BD3****',
              ),
              'Project' => 
              array (
                'description' => '项目信息。详细内容请单击Project查看。',
                '$ref' => '#/components/schemas/Project',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"D33C3574-4093-448E-86E7-15BE2BD3****\\",\\n  \\"Project\\": {\\n    \\"ProjectName\\": \\"\\",\\n    \\"ServiceRole\\": \\"\\",\\n    \\"TemplateId\\": \\"\\",\\n    \\"CreateTime\\": \\"\\",\\n    \\"UpdateTime\\": \\"\\",\\n    \\"Description\\": \\"\\",\\n    \\"ProjectQueriesPerSecond\\": 0,\\n    \\"EngineConcurrency\\": 0,\\n    \\"ProjectMaxDatasetCount\\": 0,\\n    \\"DatasetMaxBindCount\\": 0,\\n    \\"DatasetMaxFileCount\\": 0,\\n    \\"DatasetMaxEntityCount\\": 0,\\n    \\"DatasetMaxRelationCount\\": 0,\\n    \\"DatasetMaxTotalFileSize\\": 0,\\n    \\"DatasetCount\\": 0,\\n    \\"FileCount\\": 0,\\n    \\"TotalFileSize\\": 0,\\n    \\"Tags\\": [\\n      {\\n        \\"TagKey\\": \\"\\",\\n        \\"TagValue\\": \\"\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '更新项目',
      'description' => '- 更新项目信息时，确保项目已经创建成功，创建项目请参考请求参数描述。
- 更新项目信息时，只需填充需要更新的字段，未填充的字段不会变更。
- 项目更新成功不会立即生效，需要等待至多5分钟的时间。',
    ),
    'GetProject' => 
    array (
      'summary' => '查询指定项目（Project）的信息，包含基础信息，数据集（Dataset）和文件相关的统计信息等。',
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
      'systemTags' => 
      array (
        'operationType' => 'get',
        'abilityTreeCode' => '450',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREimmKH590Y',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ProjectName',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '项目名称',
            'description' => '项目名称。获取方式请参见[创建项目](~~478153~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'test-project',
          ),
        ),
        1 => 
        array (
          'name' => 'WithStatistics',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '是否获取详细信息',
            'description' => '是否需要进行文件统计。默认值false，不需要进行文档统计。

- 需要进行文件统计。返回Project结构体中的FileCount和TotalFileSize真实有效。

- 不需要进行文件统计。返回Project结构体中的FileCount和TotalFileSize可能不正确也可能都为0。',
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
            'title' => '响应结构体',
            'description' => '响应结构体。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'RequestId',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '5A022F78-B9A8-4ACC-BB6B-B3597553',
              ),
              'Project' => 
              array (
                'description' => '项目信息。',
                '$ref' => '#/components/schemas/Project',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"5A022F78-B9A8-4ACC-BB6B-B3597553\\",\\n  \\"Project\\": {\\n    \\"ProjectName\\": \\"\\",\\n    \\"ServiceRole\\": \\"\\",\\n    \\"TemplateId\\": \\"\\",\\n    \\"CreateTime\\": \\"\\",\\n    \\"UpdateTime\\": \\"\\",\\n    \\"Description\\": \\"\\",\\n    \\"ProjectQueriesPerSecond\\": 0,\\n    \\"EngineConcurrency\\": 0,\\n    \\"ProjectMaxDatasetCount\\": 0,\\n    \\"DatasetMaxBindCount\\": 0,\\n    \\"DatasetMaxFileCount\\": 0,\\n    \\"DatasetMaxEntityCount\\": 0,\\n    \\"DatasetMaxRelationCount\\": 0,\\n    \\"DatasetMaxTotalFileSize\\": 0,\\n    \\"DatasetCount\\": 0,\\n    \\"FileCount\\": 0,\\n    \\"TotalFileSize\\": 0,\\n    \\"Tags\\": [\\n      {\\n        \\"TagKey\\": \\"\\",\\n        \\"TagValue\\": \\"\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '查询项目信息',
      'description' => '查询项目信息支持实时获取文件统计信息，通过参数配置开启，详情请见请求参数一栏。',
    ),
    'ListProjects' => 
    array (
      'summary' => '查询所有项目（Project）的信息，包含基础信息，数据集（Dataset）和文件相关的统计信息等。',
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
        'operationType' => 'list',
        'abilityTreeCode' => '763',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREimmKH590Y',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'MaxResults',
          'in' => 'query',
          'allowEmptyValue' => false,
          'schema' => 
          array (
            'title' => '返回结果的最大个数',
            'description' => '返回项目的最大个数，取值范围为0~200。不设置此参数或者设置为0时，则默认值为100。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '100',
          ),
        ),
        1 => 
        array (
          'name' => 'NextToken',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '当总结果个数大于MaxResults时，用于翻页的token',
            'description' => '查询凭证（Token），取值为上一次API调用返回的NextToken参数值。从NextToken开始按字典序返回项目信息列表。第一次调用此接口时，设置为空。',
            'type' => 'string',
            'required' => false,
            'example' => 'MTIzNDU2Nzg6aW1tdGVzdDAx',
          ),
        ),
        2 => 
        array (
          'name' => 'Prefix',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '列出包含某前缀的project',
            'description' => '列出指定前缀的项目，长度限制为0~128字符。',
            'type' => 'string',
            'required' => false,
            'example' => 'immtest',
          ),
        ),
        3 => 
        array (
          'name' => 'Tag',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '标签列表',
            'type' => 'array',
            'items' => 
            array (
              'description' => '标签信息',
              'type' => 'object',
              'properties' => 
              array (
                'Key' => 
                array (
                  'description' => '标签键',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'TestKey',
                ),
                'Value' => 
                array (
                  'description' => '标签值',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'TestValue',
                ),
              ),
              'required' => false,
            ),
            'required' => false,
            'maxItems' => 20,
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
            'description' => '响应结构体。',
            'type' => 'object',
            'properties' => 
            array (
              'NextToken' => 
              array (
                'title' => '当总结果个数大于MaxResults时，用于翻页的token',
                'description' => '当预期返回的项目总数大于设置的MaxResults时，将作为查询后续页的凭证。只有当项目未全部返回时，此参数才有值。',
                'type' => 'string',
                'example' => 'MTIzNDU2Nzg6aW1tdGVzdDAx',
              ),
              'Projects' => 
              array (
                'title' => '由ProjectItem组成的数组',
                'description' => '由Project组成的数组格式，返回Project的信息。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '项目信息。',
                  '$ref' => '#/components/schemas/Project',
                ),
              ),
              'RequestId' => 
              array (
                'title' => '本次请求的唯一 ID',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '4A7A2D0E-D8B8-4DA0-8127-EB32C660',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"NextToken\\": \\"MTIzNDU2Nzg6aW1tdGVzdDAx\\",\\n  \\"Projects\\": [\\n    {\\n      \\"ProjectName\\": \\"\\",\\n      \\"ServiceRole\\": \\"\\",\\n      \\"TemplateId\\": \\"\\",\\n      \\"CreateTime\\": \\"\\",\\n      \\"UpdateTime\\": \\"\\",\\n      \\"Description\\": \\"\\",\\n      \\"ProjectQueriesPerSecond\\": 0,\\n      \\"EngineConcurrency\\": 0,\\n      \\"ProjectMaxDatasetCount\\": 0,\\n      \\"DatasetMaxBindCount\\": 0,\\n      \\"DatasetMaxFileCount\\": 0,\\n      \\"DatasetMaxEntityCount\\": 0,\\n      \\"DatasetMaxRelationCount\\": 0,\\n      \\"DatasetMaxTotalFileSize\\": 0,\\n      \\"DatasetCount\\": 0,\\n      \\"FileCount\\": 0,\\n      \\"TotalFileSize\\": 0,\\n      \\"Tags\\": [\\n        {\\n          \\"TagKey\\": \\"\\",\\n          \\"TagValue\\": \\"\\"\\n        }\\n      ]\\n    }\\n  ],\\n  \\"RequestId\\": \\"4A7A2D0E-D8B8-4DA0-8127-EB32C660\\"\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '查询所有项目信息',
      'description' => '支持分页查看返回数据：分页查询首页时，仅需设置MaxResults以限制返回信息的条目数，返回结果中的NextToken将作为查询后续页的凭证。查询后续页时，将NextToken参数设置为上一次返回结果中获取到的NextToken作为查询凭证，并设置MaxResults限制返回条目数。',
    ),
    'DeleteProject' => 
    array (
      'summary' => '删除指定项目（Project）。',
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
      'operationType' => 'write',
      'systemTags' => 
      array (
        'operationType' => 'delete',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ProjectName',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '项目名称',
            'description' => '项目名称。获取方式请参见[创建项目](~~478153~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'immtest',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => '响应结构体',
            'description' => '响应结构体。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => '本次请求的唯一 ID',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'FEDC9B1F-30F2-4C1F-8ED2-B7860187****',
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
            'errorCode' => 'StatusConflict',
            'errorMessage' => 'Message: cannot delete when sub resoures exist',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"FEDC9B1F-30F2-4C1F-8ED2-B7860187****\\"\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '删除项目',
      'description' => '- 删除项目前，请确保已删除该项目中的所有资源：数据集（Dataset），绑定关系（Binding），批处理任务（Batch），触发器（Trigger）等。分别参考：[删除数据集](~~478164~~)，[删除绑定任务](~~478205~~)，[删除批处理任务](~~479918~~)，[删除触发器](~~479915~~)。

- 项目删除后，项目所使用的资源都被回收，相关数据全部丢失且不可恢复。',
    ),
    'CreateDataset' => 
    array (
      'summary' => '创建一个数据集（Dataset）。',
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
      'operationType' => 'write',
      'systemTags' => 
      array (
        'operationType' => 'create',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ProjectName',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '项目名称',
            'description' => '项目名称，获取方式请参见[创建项目](~~478153~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'test-project',
          ),
        ),
        1 => 
        array (
          'name' => 'DatasetName',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '数据集名称',
            'description' => '数据集名称，同一个Project下唯一。命名规则如下：
- 长度为1~128字符。
- 只能包含英文字母，数字，短划线（-）和下划线（_）。
- 必须以英文字母和下划线（_）开头。',
            'type' => 'string',
            'required' => true,
            'example' => 'dataset001',
          ),
        ),
        2 => 
        array (
          'name' => 'Description',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '对数据集的描述',
            'description' => '数据集描述信息。长度为1~256个英文或中文字符，默认值为空。',
            'type' => 'string',
            'required' => false,
            'example' => 'immtest',
          ),
        ),
        3 => 
        array (
          'name' => 'TemplateId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '模板Id',
            'description' => '工作流模板ID。更多信息，请参见[工作流模板与算子](~~466304~~)，默认值为空。',
            'type' => 'string',
            'required' => false,
            'example' => 'Official:AllFunction',
          ),
        ),
        4 => 
        array (
          'name' => 'DatasetMaxBindCount',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '媒体集最多帮定数',
            'description' => '每个数据集绑定的最大个数。取值范围为1~10，默认值为10。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '10',
          ),
        ),
        5 => 
        array (
          'name' => 'DatasetMaxFileCount',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '媒体集最多文件数',
            'description' => '每个数据集中文件的最大个数。取值范围为1~100000000，默认值为100000000。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '100000000',
          ),
        ),
        6 => 
        array (
          'name' => 'DatasetMaxEntityCount',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '媒体集最多实体数',
            'description' => '每个数据集中元数据实体的最大个数。默认值为10000000000。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '10000000000',
          ),
        ),
        7 => 
        array (
          'name' => 'DatasetMaxRelationCount',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '媒体集最多关系数',
            'description' => '每个数据集中元数据关系的最大个数。默认值为100000000000。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '100000000000',
          ),
        ),
        8 => 
        array (
          'name' => 'DatasetMaxTotalFileSize',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '媒体集最大文件总大小',
            'description' => '每个数据集中文件总大小的最大值，超过限制后无法再添加索引。默认值为90000000000000000，单位为字节。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '90000000000000000',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => '响应结构体',
            'description' => '响应结构体',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => '请求 ID',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '6D74B3A9-5AC0-49F9-914D-E01589D3****',
              ),
              'Dataset' => 
              array (
                'description' => '数据集信息。',
                '$ref' => '#/components/schemas/Dataset',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"6D74B3A9-5AC0-49F9-914D-E01589D3****\\",\\n  \\"Dataset\\": {\\n    \\"ProjectName\\": \\"\\",\\n    \\"DatasetName\\": \\"\\",\\n    \\"TemplateId\\": \\"\\",\\n    \\"CreateTime\\": \\"\\",\\n    \\"UpdateTime\\": \\"\\",\\n    \\"Description\\": \\"\\",\\n    \\"DatasetMaxBindCount\\": 0,\\n    \\"DatasetMaxFileCount\\": 0,\\n    \\"DatasetMaxEntityCount\\": 0,\\n    \\"DatasetMaxRelationCount\\": 0,\\n    \\"DatasetMaxTotalFileSize\\": 0,\\n    \\"BindCount\\": 0,\\n    \\"FileCount\\": 0,\\n    \\"TotalFileSize\\": 0,\\n    \\"ClusterType\\": \\"\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '创建数据集',
      'description' => '- **请确保在使用该接口前，已充分了解智能媒体管理产品的收费方式和[价格](~~477042~~)**。
- 数据集名称在同一个项目（[Project](~~478153~~)）唯一。
- 创建的数据集个数存在限制，该个数限制可以通过[GetProjcet](~~478155~~)查询。
- 创建数据集后，您可以通过[IndexFileMeta](~~478166~~)建立文件元信息索引，实现多元化的[数据检索与统计](~~2402363~~)和[智能管理](~~2402365~~)。',
    ),
    'UpdateDataset' => 
    array (
      'summary' => '更新一个数据集（Dataset）的信息。',
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
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ProjectName',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '项目名称',
            'description' => '项目名称，获取方式请参见[创建项目](~~478153~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'test-project',
          ),
        ),
        1 => 
        array (
          'name' => 'DatasetName',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '媒体集名称',
            'description' => '数据集名称, 获取方式请参见[创建数据集](~~478160~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'test-dataset',
          ),
        ),
        2 => 
        array (
          'name' => 'Description',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '描述',
            'description' => '数据集描述信息。',
            'type' => 'string',
            'required' => false,
            'example' => 'immtest',
          ),
        ),
        3 => 
        array (
          'name' => 'TemplateId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '模板Id',
            'description' => '工作流模板ID。更多信息，请参见[工作流模板与算子](~~466304~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'Official:AllFunction',
          ),
        ),
        4 => 
        array (
          'name' => 'DatasetMaxBindCount',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '媒体集最多绑定数',
            'description' => '每个数据集绑定的最大个数。取值范围为1~10。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '10',
          ),
        ),
        5 => 
        array (
          'name' => 'DatasetMaxFileCount',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '媒体集最多文件数',
            'description' => '每个数据集中文件的最大个数。取值范围为1~100000000。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '100000000',
          ),
        ),
        6 => 
        array (
          'name' => 'DatasetMaxEntityCount',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '媒体集最多实体数',
            'description' => '每个数据集中元数据实体（包括数据文件、文件关系、聚类分组等）的最大个数，最大取值为2^63-1。
>预留参数，使用中并不做实际限制。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '10000000000',
          ),
        ),
        7 => 
        array (
          'name' => 'DatasetMaxRelationCount',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '媒体集最多关系数',
            'description' => '每个数据集中元数据关系的最大个数，最大取值为2^63-1。
>预留参数，使用中并不做实际限制。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '100000000000',
          ),
        ),
        8 => 
        array (
          'name' => 'DatasetMaxTotalFileSize',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '媒体集最大文件总大小',
            'description' => '每个数据集中文件总大小的最大值，超过限制后无法再添加索引，最大取值为2^63-1，单位为字节。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '90000000000000000',
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
            'description' => '响应结构体',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '45234D4A-A3E3-4B23-AACA-8D897514****',
              ),
              'Dataset' => 
              array (
                'description' => '数据集。',
                '$ref' => '#/components/schemas/Dataset',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"45234D4A-A3E3-4B23-AACA-8D897514****\\",\\n  \\"Dataset\\": {\\n    \\"ProjectName\\": \\"\\",\\n    \\"DatasetName\\": \\"\\",\\n    \\"TemplateId\\": \\"\\",\\n    \\"CreateTime\\": \\"\\",\\n    \\"UpdateTime\\": \\"\\",\\n    \\"Description\\": \\"\\",\\n    \\"DatasetMaxBindCount\\": 0,\\n    \\"DatasetMaxFileCount\\": 0,\\n    \\"DatasetMaxEntityCount\\": 0,\\n    \\"DatasetMaxRelationCount\\": 0,\\n    \\"DatasetMaxTotalFileSize\\": 0,\\n    \\"BindCount\\": 0,\\n    \\"FileCount\\": 0,\\n    \\"TotalFileSize\\": 0,\\n    \\"ClusterType\\": \\"\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '更新数据集',
      'description' => '- **请确保在使用该接口前，已充分了解智能媒体管理产品的收费方式和[价格](~~477042~~)**。

- 更新数据集信息时，确保数据集已经创建成功，创建数据集请参考请求参数描述。
- 更新数据集信息时，只需填充需要更新的字段，未填充的字段不会变更。
- 数据集更新成功不会立即生效，需要等待至多5分钟的时间。',
    ),
    'GetDataset' => 
    array (
      'summary' => '查询一个数据集的信息。',
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
      'systemTags' => 
      array (
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ProjectName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '项目名称，获取方式请参见[创建项目](~~478153~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'immtest',
          ),
        ),
        1 => 
        array (
          'name' => 'DatasetName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据集名称, 获取方式请参见[创建数据集](~~478160~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'dataset001',
          ),
        ),
        2 => 
        array (
          'name' => 'WithStatistics',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否需要进行文件统计。默认值false，不需要进行文档统计。

- 需要进行文件统计。返回Dataset结构体中的FileCount和TotalFileSize真实有效。

- 不需要进行文件统计。返回Dataset结构体中的FileCount和TotalFileSize可能不正确也可能都为0。',
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
            'description' => '响应结构体',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '6D74B3A9-5AC0-49F9-914D-E01589D3****',
              ),
              'Dataset' => 
              array (
                'description' => '数据集。',
                '$ref' => '#/components/schemas/Dataset',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"6D74B3A9-5AC0-49F9-914D-E01589D3****\\",\\n  \\"Dataset\\": {\\n    \\"ProjectName\\": \\"\\",\\n    \\"DatasetName\\": \\"\\",\\n    \\"TemplateId\\": \\"\\",\\n    \\"CreateTime\\": \\"\\",\\n    \\"UpdateTime\\": \\"\\",\\n    \\"Description\\": \\"\\",\\n    \\"DatasetMaxBindCount\\": 0,\\n    \\"DatasetMaxFileCount\\": 0,\\n    \\"DatasetMaxEntityCount\\": 0,\\n    \\"DatasetMaxRelationCount\\": 0,\\n    \\"DatasetMaxTotalFileSize\\": 0,\\n    \\"BindCount\\": 0,\\n    \\"FileCount\\": 0,\\n    \\"TotalFileSize\\": 0,\\n    \\"ClusterType\\": \\"\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '查询数据集信息',
      'description' => '- **请确保在使用该接口前，已充分了解智能媒体管理产品的收费方式和[价格](~~477042~~)**。

- 查询数据集信息支持实时获取文件统计信息，通过参数配置开启，详情请见请求参数一栏。',
    ),
    'ListDatasets' => 
    array (
      'summary' => '获取数据集列表，支持通过数据集名称前缀查询列表。',
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
      'systemTags' => 
      array (
        'operationType' => 'list',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ProjectName',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '项目名称',
            'description' => '项目名称，获取方式请参见[创建项目](~~478153~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'test-project',
          ),
        ),
        1 => 
        array (
          'name' => 'MaxResults',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '返回最大个数',
            'description' => '返回数据集的最大个数，取值范围为0~200。

不设置此参数或者设置为0时，则默认值为100。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1',
          ),
        ),
        2 => 
        array (
          'name' => 'NextToken',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '当总结果个数大于MaxResults时，用于翻页的token',
            'description' => '翻页标记。

当文件总数大于设置的MaxResults时，用于翻页的Token。从NextToken开始按字典序返回文件信息列表。

> 在一次查询中首次调用此接口时，将此值设置为空。',
            'type' => 'string',
            'required' => false,
            'example' => '12345678:immtest:dataset002',
          ),
        ),
        3 => 
        array (
          'name' => 'Prefix',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据集名称前缀。',
            'type' => 'string',
            'required' => false,
            'example' => 'dataset',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => '返回结构体',
            'description' => '响应结构体。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'FEEDE356-C928-4A36-951A-6EB5A592****',
              ),
              'NextToken' => 
              array (
                'description' => '翻页标记。当任务列表总数大于设置的MaxResults时，用于翻页的Token。符合条件的任务列表未全部返回时，此参数才有值。

下一次列出任务列表时将此值作为NextToken传入，将后续的任务列表返回。',
                'type' => 'string',
                'example' => '12345678:immtest:dataset002',
              ),
              'Datasets' => 
              array (
                'title' => 'Datasets',
                'description' => '数据集信息列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '数据集。',
                  '$ref' => '#/components/schemas/Dataset',
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"FEEDE356-C928-4A36-951A-6EB5A592****\\",\\n  \\"NextToken\\": \\"12345678:immtest:dataset002\\",\\n  \\"Datasets\\": [\\n    {\\n      \\"ProjectName\\": \\"\\",\\n      \\"DatasetName\\": \\"\\",\\n      \\"TemplateId\\": \\"\\",\\n      \\"CreateTime\\": \\"\\",\\n      \\"UpdateTime\\": \\"\\",\\n      \\"Description\\": \\"\\",\\n      \\"DatasetMaxBindCount\\": 0,\\n      \\"DatasetMaxFileCount\\": 0,\\n      \\"DatasetMaxEntityCount\\": 0,\\n      \\"DatasetMaxRelationCount\\": 0,\\n      \\"DatasetMaxTotalFileSize\\": 0,\\n      \\"BindCount\\": 0,\\n      \\"FileCount\\": 0,\\n      \\"TotalFileSize\\": 0,\\n      \\"ClusterType\\": \\"\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '列出数据集',
    ),
    'DeleteDataset' => 
    array (
      'summary' => '删除一个数据集（Dataset）。',
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
      'systemTags' => 
      array (
        'operationType' => 'delete',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ProjectName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '项目名称，获取方式请参见[创建项目](~~478153~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'immtest',
          ),
        ),
        1 => 
        array (
          'name' => 'DatasetName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据集名称，获取方式请参见[创建数据集](~~478160~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'dataset001',
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
            'description' => '响应结构体',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'EC564B8B-BA5C-4499-B196-D9B9E76E****',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"EC564B8B-BA5C-4499-B196-D9B9E76E****\\"\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '删除数据集',
      'description' => '- 删除[数据集](~~478257~~)前，请确保已删除数据集中所有[已建立的索引文件](~~477173~~)，删除索引文件的方法可参见[DeleteFileMeta](~~478172~~)、[BatchDeleteFileMeta](~~478173~~)。
- 删除[数据集](~~478257~~)前，请确保已解绑数据集和OSS Bucket的绑定关系，解除绑定的方法可参见[DeleteBinding](~~478205~~)。即使设置[DeleteBinding](~~478205~~)的请求参数``Cleanup``为``true``时仍不会删除手动添加的索引文件，此时仍需使用[DeleteFileMeta](~~478172~~)、[BatchDeleteFileMeta](~~478173~~)手动删除索引文件，自动建立与手动建立索引文件的区别可参见[建立元数据索引](~~477173~~)。',
    ),
    'IndexFileMeta' => 
    array (
      'summary' => '对输入的文件进行数据处理如标签识别、人脸检测、地点检测等，将提取的文件元信息建立索引，支持用户在一个数据集内多样化的数据检索。',
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
      'operationType' => 'write',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'create',
        'riskType' => 'none',
        'chargeType' => 'paid',
        'abilityTreeCode' => '32774',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREimmSZD9WY',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ProjectName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '项目名称，获取方式请参见[创建项目](~~478153~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'test-project',
          ),
        ),
        1 => 
        array (
          'name' => 'DatasetName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据集名称, 获取方式请参见[创建数据集](~~478160~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'test-dataset',
          ),
        ),
        2 => 
        array (
          'name' => 'File',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '需要索引的文件，格式为JSON。请参考结构体定义。',
            'required' => true,
            '$ref' => '#/components/schemas/InputFile',
          ),
        ),
        3 => 
        array (
          'name' => 'UserData',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
          ),
        ),
        4 => 
        array (
          'name' => 'Notification',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '消息通知配置，详细内容请点击Notification查看，异步通知消息格式请参见[异步通知消息格式](~~471456~~)元数据索引一栏。',
            'required' => false,
            '$ref' => '#/components/schemas/Notification',
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
            'description' => '响应结构体。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '6E93D6C9-5AC0-49F9-914D-E02678D3****',
              ),
              'EventId' => 
              array (
                'description' => '事件ID。',
                'type' => 'string',
                'example' => '30F-1D8FxFzDXKJH9YQdve4CjR****',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'asynchronous',
        'callback' => 'imm::2020-09-30::GetFileMeta',
        'callbackInterval' => 10000,
        'maxCallbackTimes' => 3,
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"6E93D6C9-5AC0-49F9-914D-E02678D3****\\",\\n  \\"EventId\\": \\"30F-1D8FxFzDXKJH9YQdve4CjR****\\"\\n}","type":"json"}]',
      'title' => '文件元信息建立索引',
      'description' => '- **请确保在使用该接口前，已充分了解智能媒体管理产品的收费方式和[价格](~~477042~~)**。
- 文件元信息建立索引数据处理支持列表请参见[工作流模板与算子](~~466304~~)。
- 文件元信息建立索引有文件总数量和文件总大小限制，请参考[使用限制说明](~~475569~~)中数据集限制部分, 关于数据集创建请参考参数说明。
- 文件元信息建立索引支持地域列表请参考[使用限制说明](~~475569~~)中各地域支持的功能，数据集与索引部分。
- 文件元信息建立索引后，您可以通过[简单查询](~~478175~~)进行数据检索，其他检索能力请见[查询与统计](~~2402363~~)，还可以通过[创建人脸聚类](~~478180~~)产生人脸分组，其他聚类能力请见[智能管理](~~2402365~~)。

> 
> - 该接口为异步操作，在您提交请求后，需要一定时间对您提交的文件进行处理，处理完成后才会将元数据存储到数据集内。该过程视[工作流模板与算子](~~466304~~)不同、文件内容不同，需要数秒到数分钟甚至更久。您可以通过[消息订阅](~~603317~~)能力接收任务完成通知。',
    ),
    'BatchIndexFileMeta' => 
    array (
      'summary' => '批量索引文件元信息，对输入的文件进行数据处理如标签识别、人脸检测、地点检测等，并将文件元信息索引到数据集内，支持多样化的数据检索。',
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
        'operationType' => 'create',
        'riskType' => 'none',
        'chargeType' => 'paid',
        'abilityTreeCode' => '33174',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREimmSZD9WY',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ProjectName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '项目名称，获取方式请参见[创建项目](~~478153~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'test-project',
          ),
        ),
        1 => 
        array (
          'name' => 'DatasetName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据集名称, 获取方式请参见[创建数据集](~~478160~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'test-dataset',
          ),
        ),
        2 => 
        array (
          'name' => 'Files',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => 'OSS文件列表。以JSON格式的数组表示，最大支持100个。',
            'type' => 'array',
            'items' => 
            array (
              'description' => 'OSS文件的结构体。',
              'required' => false,
              '$ref' => '#/components/schemas/InputFile',
            ),
            'required' => true,
          ),
        ),
        3 => 
        array (
          'name' => 'UserData',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
          ),
        ),
        4 => 
        array (
          'name' => 'Notification',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '消息通知配置，详细内容请点击Notification查看，异步通知消息格式请参见[异步通知消息格式](~~471456~~)元数据索引一栏。',
            'required' => false,
            '$ref' => '#/components/schemas/Notification',
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
            'description' => '响应结构体。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '8F93E6D9-5AC0-49F9-914D-E02678A3****',
              ),
              'EventId' => 
              array (
                'description' => '事件ID。',
                'type' => 'string',
                'example' => '387-1DAPFFZplUZhuCuhnB6I9H****',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'asynchronous',
        'callback' => 'imm::2020-09-30::BatchGetFileMeta',
        'callbackInterval' => 10000,
        'maxCallbackTimes' => 3,
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"8F93E6D9-5AC0-49F9-914D-E02678A3****\\",\\n  \\"EventId\\": \\"387-1DAPFFZplUZhuCuhnB6I9H****\\"\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '批量文件元信息建立索引',
      'description' => '- **请确保在使用该接口前，已充分了解智能媒体管理产品的收费方式和[价格](~~477042~~)**。
- 数据处理支持列表请参见[工作流定义](~~466304~~)。
- 索引文件有文件总数量和文件总大小限制，请参考[使用限制说明](~~475569~~)中数据集限制部分, 关于数据集创建请参考参数说明。
- 索引文件支持地域列表请参考[使用限制说明](~~475569~~)中各地域支持的功能，数据集与索引部分。',
    ),
    'UpdateFileMeta' => 
    array (
      'summary' => '更新数据集内已索引的文件的部分元数据。',
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
      'operationType' => 'write',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'update',
        'riskType' => 'none',
        'chargeType' => 'paid',
        'abilityTreeCode' => '33172',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREimmSZD9WY',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ProjectName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '项目名称，获取方式请参见[创建项目](~~478153~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'test-project',
          ),
        ),
        1 => 
        array (
          'name' => 'DatasetName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据集名称，获取方式请参见[创建数据集](~~478160~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'test-dataset',
          ),
        ),
        2 => 
        array (
          'name' => 'File',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '需要更新元数据的文件及要更新的信息，格式为JSON。',
            'required' => true,
            '$ref' => '#/components/schemas/InputFile',
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
            'description' => '响应结构体。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '6D53E6C9-5AC0-48F9-825F-D02678E3****',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"6D53E6C9-5AC0-48F9-825F-D02678E3****\\"\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '更新文件元数据',
      'description' => '- **请确保在使用该接口前，已充分了解智能媒体管理产品的收费方式和[价格](~~477042~~)**。
- 并非所有的元数据都允许您自定义更新。当前您可以更新其CustomLabels、CustomId、Figures人脸信息等字段，具体请参考请求参数一节。',
    ),
    'BatchUpdateFileMeta' => 
    array (
      'summary' => '更新批量数据集内已索引的文件的部分元数据。',
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
      'operationType' => 'write',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'update',
        'riskType' => 'none',
        'chargeType' => 'paid',
        'abilityTreeCode' => '33177',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREimmSZD9WY',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ProjectName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '项目名称，获取方式请参见[创建项目](~~478153~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'test-project',
          ),
        ),
        1 => 
        array (
          'name' => 'DatasetName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据集名称，获取方式请参见[创建数据集](~~478160~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'test-dataset',
          ),
        ),
        2 => 
        array (
          'name' => 'Files',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '需要更新的元数据列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '需要更新元数据的文件及要更新的信息，格式为JSON。',
              'required' => false,
              '$ref' => '#/components/schemas/InputFile',
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
            'description' => '响应结构体。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'F5BF215E-3237-0852-B9C6-F233D44A****',
              ),
              'Files' => 
              array (
                'description' => '本次更新的文件列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '文件对象。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'URI' => 
                    array (
                      'description' => '文件地址。',
                      'type' => 'string',
                      'example' => 'oss://examplebucket/example.jpg',
                    ),
                    'Success' => 
                    array (
                      'description' => '更新是否成功。',
                      'type' => 'boolean',
                      'enumValueTitles' => 
                      array (
                        'true' => 'true',
                        'false' => 'false',
                      ),
                      'example' => 'false',
                    ),
                    'Message' => 
                    array (
                      'description' => '当参数Success返回false时，返回的错误信息。',
                      'type' => 'string',
                      'example' => '*error.OpError : InvalidArgument | Index KV count exceeded, should be no more than 100.',
                    ),
                  ),
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"F5BF215E-3237-0852-B9C6-F233D44A****\\",\\n  \\"Files\\": [\\n    {\\n      \\"URI\\": \\"oss://examplebucket/example.jpg\\",\\n      \\"Success\\": false,\\n      \\"Message\\": \\"*error.OpError : InvalidArgument | Index KV count exceeded, should be no more than 100.\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '批量更新文件元信息',
      'description' => '- **请确保在使用该接口前，已充分了解智能媒体管理产品的收费方式和[价格](~~477042~~)**。
- 并非所有的元数据都允许您自定义更新。当前您可以更新其CustomLabels、CustomId、Figures人脸信息等字段，具体请参考请求参数一节。',
    ),
    'GetFileMeta' => 
    array (
      'summary' => '获取数据集内已完成索引的文件的元数据。',
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
      'systemTags' => 
      array (
        'operationType' => 'get',
        'abilityTreeCode' => '32848',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREimmSZD9WY',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ProjectName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '项目名称，获取方式请参见[创建项目](~~478153~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'test-project',
          ),
        ),
        1 => 
        array (
          'name' => 'DatasetName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据集名称，获取方式请参见[创建数据集](~~478160~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'test-dataset',
          ),
        ),
        2 => 
        array (
          'name' => 'URI',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '文件的URI，需确保该文件已经**完成索引**。

OSS地址规则为oss://${Bucket}/${Object}，其中`${Bucket}`为和当前项目处于同一区域(Region)的OSS Bucket名称，`${Object}`为包含文件扩展名的文件完整路径。

PDS地址规则为pds://domains/${domain}/drives/${drive}/files/${file}/revisions/${revision}。',
            'type' => 'string',
            'required' => true,
            'enumValueTitles' => 
            array (
            ),
            'example' => 'oss://test-bucket/test-object',
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
            'description' => '响应结构体。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '7F84C6D9-5AC0-49F9-914D-F02678E3****',
              ),
              'Files' => 
              array (
                'title' => 'File list.',
                'description' => '文件元数据。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '文件元数据的结构体。实际返回的数据可能并不包含该结构体的所有属性，这和您索引该文件时选用的[工作流模板配置](~~466304~~)以及文件本身的内容有关。',
                  '$ref' => '#/components/schemas/File',
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"7F84C6D9-5AC0-49F9-914D-F02678E3****\\",\\n  \\"Files\\": [\\n    {\\n      \\"OwnerId\\": \\"\\",\\n      \\"ProjectName\\": \\"\\",\\n      \\"DatasetName\\": \\"\\",\\n      \\"ObjectType\\": \\"\\",\\n      \\"ObjectId\\": \\"\\",\\n      \\"UpdateTime\\": \\"\\",\\n      \\"CreateTime\\": \\"\\",\\n      \\"URI\\": \\"\\",\\n      \\"OSSURI\\": \\"\\",\\n      \\"Filename\\": \\"\\",\\n      \\"MediaType\\": \\"\\",\\n      \\"ContentType\\": \\"\\",\\n      \\"Size\\": 0,\\n      \\"FileHash\\": \\"\\",\\n      \\"FileModifiedTime\\": \\"\\",\\n      \\"FileCreateTime\\": \\"\\",\\n      \\"FileAccessTime\\": \\"\\",\\n      \\"ProduceTime\\": \\"\\",\\n      \\"LatLong\\": \\"\\",\\n      \\"Timezone\\": \\"\\",\\n      \\"Addresses\\": [\\n        {\\n          \\"Language\\": \\"\\",\\n          \\"AddressLine\\": \\"\\",\\n          \\"Country\\": \\"\\",\\n          \\"Province\\": \\"\\",\\n          \\"City\\": \\"\\",\\n          \\"District\\": \\"\\",\\n          \\"Township\\": \\"\\"\\n        }\\n      ],\\n      \\"TravelClusterId\\": \\"\\",\\n      \\"Orientation\\": 0,\\n      \\"Figures\\": [\\n        {\\n          \\"FigureId\\": \\"\\",\\n          \\"FigureConfidence\\": 0,\\n          \\"FigureClusterId\\": \\"\\",\\n          \\"FigureClusterConfidence\\": 0,\\n          \\"FigureType\\": \\"\\",\\n          \\"Age\\": 0,\\n          \\"AgeSD\\": 0,\\n          \\"Gender\\": \\"\\",\\n          \\"GenderConfidence\\": 0,\\n          \\"Emotion\\": \\"\\",\\n          \\"EmotionConfidence\\": 0,\\n          \\"FaceQuality\\": 0,\\n          \\"Boundary\\": {\\n            \\"Width\\": 0,\\n            \\"Height\\": 0,\\n            \\"Left\\": 0,\\n            \\"Top\\": 0,\\n            \\"Polygon\\": [\\n              {\\n                \\"X\\": 0,\\n                \\"Y\\": 0\\n              }\\n            ]\\n          },\\n          \\"Mouth\\": \\"\\",\\n          \\"MouthConfidence\\": 0,\\n          \\"Beard\\": \\"\\",\\n          \\"BeardConfidence\\": 0,\\n          \\"Hat\\": \\"\\",\\n          \\"HatConfidence\\": 0,\\n          \\"Mask\\": \\"\\",\\n          \\"MaskConfidence\\": 0,\\n          \\"Glasses\\": \\"\\",\\n          \\"GlassesConfidence\\": 0,\\n          \\"Sharpness\\": 0,\\n          \\"Attractive\\": 0,\\n          \\"HeadPose\\": {\\n            \\"Pitch\\": 0,\\n            \\"Roll\\": 0,\\n            \\"Yaw\\": 0\\n          }\\n        }\\n      ],\\n      \\"FigureCount\\": 0,\\n      \\"Labels\\": [\\n        {\\n          \\"Language\\": \\"\\",\\n          \\"LabelName\\": \\"\\",\\n          \\"LabelLevel\\": 0,\\n          \\"LabelConfidence\\": 0,\\n          \\"ParentLabelName\\": \\"\\",\\n          \\"CentricScore\\": 0\\n        }\\n      ],\\n      \\"Title\\": \\"\\",\\n      \\"ImageWidth\\": 0,\\n      \\"ImageHeight\\": 0,\\n      \\"EXIF\\": \\"\\",\\n      \\"ImageScore\\": {\\n        \\"OverallQualityScore\\": 0\\n      },\\n      \\"CroppingSuggestions\\": [\\n        {\\n          \\"AspectRatio\\": \\"\\",\\n          \\"Confidence\\": 0,\\n          \\"Boundary\\": {\\n            \\"Width\\": 0,\\n            \\"Height\\": 0,\\n            \\"Left\\": 0,\\n            \\"Top\\": 0,\\n            \\"Polygon\\": [\\n              {\\n                \\"X\\": 0,\\n                \\"Y\\": 0\\n              }\\n            ]\\n          }\\n        }\\n      ],\\n      \\"OCRContents\\": [\\n        {\\n          \\"Language\\": \\"\\",\\n          \\"Contents\\": \\"\\",\\n          \\"Confidence\\": 0,\\n          \\"Boundary\\": {\\n            \\"Width\\": 0,\\n            \\"Height\\": 0,\\n            \\"Left\\": 0,\\n            \\"Top\\": 0,\\n            \\"Polygon\\": [\\n              {\\n                \\"X\\": 0,\\n                \\"Y\\": 0\\n              }\\n            ]\\n          }\\n        }\\n      ],\\n      \\"VideoWidth\\": 0,\\n      \\"VideoHeight\\": 0,\\n      \\"VideoStreams\\": [\\n        {\\n          \\"Index\\": 0,\\n          \\"Language\\": \\"\\",\\n          \\"CodecName\\": \\"\\",\\n          \\"CodecLongName\\": \\"\\",\\n          \\"Profile\\": \\"\\",\\n          \\"CodecTimeBase\\": \\"\\",\\n          \\"CodecTagString\\": \\"\\",\\n          \\"CodecTag\\": \\"\\",\\n          \\"Width\\": 0,\\n          \\"Height\\": 0,\\n          \\"HasBFrames\\": 0,\\n          \\"SampleAspectRatio\\": \\"\\",\\n          \\"DisplayAspectRatio\\": \\"\\",\\n          \\"PixelFormat\\": \\"\\",\\n          \\"Level\\": 0,\\n          \\"FrameRate\\": \\"\\",\\n          \\"AverageFrameRate\\": \\"\\",\\n          \\"TimeBase\\": \\"\\",\\n          \\"StartTime\\": 0,\\n          \\"Duration\\": 0,\\n          \\"Bitrate\\": 0,\\n          \\"FrameCount\\": 0,\\n          \\"Rotate\\": \\"\\",\\n          \\"BitDepth\\": 0,\\n          \\"ColorSpace\\": \\"\\",\\n          \\"ColorRange\\": \\"\\",\\n          \\"ColorTransfer\\": \\"\\",\\n          \\"ColorPrimaries\\": \\"\\"\\n        }\\n      ],\\n      \\"Subtitles\\": [\\n        {\\n          \\"Index\\": 0,\\n          \\"Language\\": \\"\\",\\n          \\"CodecName\\": \\"\\",\\n          \\"CodecLongName\\": \\"\\",\\n          \\"CodecTagString\\": \\"\\",\\n          \\"CodecTag\\": \\"\\",\\n          \\"StartTime\\": 0,\\n          \\"Duration\\": 0,\\n          \\"Bitrate\\": 0,\\n          \\"Content\\": \\"\\",\\n          \\"Width\\": 0,\\n          \\"Height\\": 0\\n        }\\n      ],\\n      \\"AudioStreams\\": [\\n        {\\n          \\"Index\\": 0,\\n          \\"Language\\": \\"\\",\\n          \\"CodecName\\": \\"\\",\\n          \\"CodecLongName\\": \\"\\",\\n          \\"CodecTimeBase\\": \\"\\",\\n          \\"CodecTagString\\": \\"\\",\\n          \\"CodecTag\\": \\"\\",\\n          \\"TimeBase\\": \\"\\",\\n          \\"StartTime\\": 0,\\n          \\"Duration\\": 0,\\n          \\"Bitrate\\": 0,\\n          \\"FrameCount\\": 0,\\n          \\"Lyric\\": \\"\\",\\n          \\"SampleFormat\\": \\"\\",\\n          \\"SampleRate\\": 0,\\n          \\"Channels\\": 0,\\n          \\"ChannelLayout\\": \\"\\"\\n        }\\n      ],\\n      \\"Artist\\": \\"\\",\\n      \\"AlbumArtist\\": \\"\\",\\n      \\"AudioCovers\\": [\\n        {\\n          \\"ImageWidth\\": 0,\\n          \\"ImageHeight\\": 0,\\n          \\"EXIF\\": \\"\\",\\n          \\"ImageScore\\": {\\n            \\"OverallQualityScore\\": 0\\n          },\\n          \\"CroppingSuggestions\\": [\\n            {\\n              \\"AspectRatio\\": \\"\\",\\n              \\"Confidence\\": 0\\n            }\\n          ],\\n          \\"OCRContents\\": [\\n            {\\n              \\"Language\\": \\"\\",\\n              \\"Contents\\": \\"\\",\\n              \\"Confidence\\": 0\\n            }\\n          ]\\n        }\\n      ],\\n      \\"Composer\\": \\"\\",\\n      \\"Performer\\": \\"\\",\\n      \\"Language\\": \\"\\",\\n      \\"Album\\": \\"\\",\\n      \\"PageCount\\": 0,\\n      \\"ETag\\": \\"\\",\\n      \\"CacheControl\\": \\"\\",\\n      \\"ContentDisposition\\": \\"\\",\\n      \\"ContentEncoding\\": \\"\\",\\n      \\"ContentLanguage\\": \\"\\",\\n      \\"AccessControlAllowOrigin\\": \\"\\",\\n      \\"AccessControlRequestMethod\\": \\"\\",\\n      \\"ServerSideEncryptionCustomerAlgorithm\\": \\"\\",\\n      \\"ServerSideEncryption\\": \\"\\",\\n      \\"ServerSideDataEncryption\\": \\"\\",\\n      \\"ServerSideEncryptionKeyId\\": \\"\\",\\n      \\"OSSStorageClass\\": \\"\\",\\n      \\"OSSCRC64\\": \\"\\",\\n      \\"ObjectACL\\": \\"\\",\\n      \\"ContentMd5\\": \\"\\",\\n      \\"OSSUserMeta\\": {\\n        \\"test\\": \\"test\\",\\n        \\"test2\\": 1\\n      },\\n      \\"OSSTaggingCount\\": 0,\\n      \\"OSSTagging\\": {\\n        \\"test\\": \\"test\\",\\n        \\"test2\\": 1\\n      },\\n      \\"OSSExpiration\\": \\"\\",\\n      \\"OSSVersionId\\": \\"\\",\\n      \\"OSSDeleteMarker\\": \\"\\",\\n      \\"OSSObjectType\\": \\"\\",\\n      \\"CustomId\\": \\"\\",\\n      \\"CustomLabels\\": {\\n        \\"test\\": \\"test\\",\\n        \\"test2\\": 1\\n      },\\n      \\"StreamCount\\": 0,\\n      \\"ProgramCount\\": 0,\\n      \\"FormatName\\": \\"\\",\\n      \\"FormatLongName\\": \\"\\",\\n      \\"StartTime\\": 0,\\n      \\"Bitrate\\": 0,\\n      \\"Duration\\": 0,\\n      \\"SemanticSimilarity\\": 0,\\n      \\"SemanticTypes\\": [\\n        \\"\\"\\n      ],\\n      \\"Elements\\": [\\n        {\\n          \\"ElementContents\\": [\\n            {\\n              \\"Type\\": \\"\\",\\n              \\"Content\\": \\"\\",\\n              \\"URL\\": \\"\\"\\n            }\\n          ]\\n        }\\n      ],\\n      \\"OCRTexts\\": \\"\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '获取文件元数据',
      'description' => '- **请确保在使用该接口前，已充分了解智能媒体管理产品的收费方式和[价格](~~477042~~)**。

- 调用该接口前，请确保您已通过绑定方式（[CreateBinding](~~478202~~)）或者主动索引（[IndexFileMeta](~~478166~~)或者[BatchIndexFileMeta](~~478167~~)）方式将文件索引到数据集（Dataset）中。

- 返回结果仅为示例，根据[工作流模板配置](~~466304~~)不同，获取到的文件元数据信息的类别和包含的内容均有可能与示例不同。如果有疑问，请使用钉钉搜索钉钉群号31690030817加入钉钉群进行反馈。',
    ),
    'BatchGetFileMeta' => 
    array (
      'summary' => '批量获取数据集内已完成索引的文件的元数据。',
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
        'operationType' => 'get',
        'riskType' => 'none',
        'chargeType' => 'paid',
        'abilityTreeCode' => '33178',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREimmSZD9WY',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ProjectName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '项目名称，获取方式请参见[创建项目](~~478153~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'test-project',
          ),
        ),
        1 => 
        array (
          'name' => 'DatasetName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据集名称，获取方式请参见[创建数据集](~~478160~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'test-dataset',
          ),
        ),
        2 => 
        array (
          'name' => 'URIs',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '文件的URI列表，最大支持100个。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '文件的URI。

OSS地址规则为oss://${Bucket}/${Object}，其中`${Bucket}`为和当前项目处于同一区域(Region)的OSS Bucket名称，`${Object}`为包含文件扩展名的文件完整路径。

PDS地址规则为pds://domains/${domain}/drives/${drive}/files/${file}/revisions/${revision}。',
              'type' => 'string',
              'required' => false,
              'example' => 'oss://test-bucket/test-object',
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
            'description' => '响应结构体。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '7F84C6D9-5AC0-49F9-914D-F02678E3****',
              ),
              'Files' => 
              array (
                'description' => '文件元数据。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '文件元数据的结构体。实际返回的数据可能并不包含该结构体的所有属性，这和您索引该文件时选用的[工作流模板配置](~~466304~~)以及文件本身的内容有关。',
                  '$ref' => '#/components/schemas/File',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"7F84C6D9-5AC0-49F9-914D-F02678E3****\\",\\n  \\"Files\\": [\\n    {\\n      \\"OwnerId\\": \\"\\",\\n      \\"ProjectName\\": \\"\\",\\n      \\"DatasetName\\": \\"\\",\\n      \\"ObjectType\\": \\"\\",\\n      \\"ObjectId\\": \\"\\",\\n      \\"UpdateTime\\": \\"\\",\\n      \\"CreateTime\\": \\"\\",\\n      \\"URI\\": \\"\\",\\n      \\"OSSURI\\": \\"\\",\\n      \\"Filename\\": \\"\\",\\n      \\"MediaType\\": \\"\\",\\n      \\"ContentType\\": \\"\\",\\n      \\"Size\\": 0,\\n      \\"FileHash\\": \\"\\",\\n      \\"FileModifiedTime\\": \\"\\",\\n      \\"FileCreateTime\\": \\"\\",\\n      \\"FileAccessTime\\": \\"\\",\\n      \\"ProduceTime\\": \\"\\",\\n      \\"LatLong\\": \\"\\",\\n      \\"Timezone\\": \\"\\",\\n      \\"Addresses\\": [\\n        {\\n          \\"Language\\": \\"\\",\\n          \\"AddressLine\\": \\"\\",\\n          \\"Country\\": \\"\\",\\n          \\"Province\\": \\"\\",\\n          \\"City\\": \\"\\",\\n          \\"District\\": \\"\\",\\n          \\"Township\\": \\"\\"\\n        }\\n      ],\\n      \\"TravelClusterId\\": \\"\\",\\n      \\"Orientation\\": 0,\\n      \\"Figures\\": [\\n        {\\n          \\"FigureId\\": \\"\\",\\n          \\"FigureConfidence\\": 0,\\n          \\"FigureClusterId\\": \\"\\",\\n          \\"FigureClusterConfidence\\": 0,\\n          \\"FigureType\\": \\"\\",\\n          \\"Age\\": 0,\\n          \\"AgeSD\\": 0,\\n          \\"Gender\\": \\"\\",\\n          \\"GenderConfidence\\": 0,\\n          \\"Emotion\\": \\"\\",\\n          \\"EmotionConfidence\\": 0,\\n          \\"FaceQuality\\": 0,\\n          \\"Boundary\\": {\\n            \\"Width\\": 0,\\n            \\"Height\\": 0,\\n            \\"Left\\": 0,\\n            \\"Top\\": 0,\\n            \\"Polygon\\": [\\n              {\\n                \\"X\\": 0,\\n                \\"Y\\": 0\\n              }\\n            ]\\n          },\\n          \\"Mouth\\": \\"\\",\\n          \\"MouthConfidence\\": 0,\\n          \\"Beard\\": \\"\\",\\n          \\"BeardConfidence\\": 0,\\n          \\"Hat\\": \\"\\",\\n          \\"HatConfidence\\": 0,\\n          \\"Mask\\": \\"\\",\\n          \\"MaskConfidence\\": 0,\\n          \\"Glasses\\": \\"\\",\\n          \\"GlassesConfidence\\": 0,\\n          \\"Sharpness\\": 0,\\n          \\"Attractive\\": 0,\\n          \\"HeadPose\\": {\\n            \\"Pitch\\": 0,\\n            \\"Roll\\": 0,\\n            \\"Yaw\\": 0\\n          }\\n        }\\n      ],\\n      \\"FigureCount\\": 0,\\n      \\"Labels\\": [\\n        {\\n          \\"Language\\": \\"\\",\\n          \\"LabelName\\": \\"\\",\\n          \\"LabelLevel\\": 0,\\n          \\"LabelConfidence\\": 0,\\n          \\"ParentLabelName\\": \\"\\",\\n          \\"CentricScore\\": 0\\n        }\\n      ],\\n      \\"Title\\": \\"\\",\\n      \\"ImageWidth\\": 0,\\n      \\"ImageHeight\\": 0,\\n      \\"EXIF\\": \\"\\",\\n      \\"ImageScore\\": {\\n        \\"OverallQualityScore\\": 0\\n      },\\n      \\"CroppingSuggestions\\": [\\n        {\\n          \\"AspectRatio\\": \\"\\",\\n          \\"Confidence\\": 0,\\n          \\"Boundary\\": {\\n            \\"Width\\": 0,\\n            \\"Height\\": 0,\\n            \\"Left\\": 0,\\n            \\"Top\\": 0,\\n            \\"Polygon\\": [\\n              {\\n                \\"X\\": 0,\\n                \\"Y\\": 0\\n              }\\n            ]\\n          }\\n        }\\n      ],\\n      \\"OCRContents\\": [\\n        {\\n          \\"Language\\": \\"\\",\\n          \\"Contents\\": \\"\\",\\n          \\"Confidence\\": 0,\\n          \\"Boundary\\": {\\n            \\"Width\\": 0,\\n            \\"Height\\": 0,\\n            \\"Left\\": 0,\\n            \\"Top\\": 0,\\n            \\"Polygon\\": [\\n              {\\n                \\"X\\": 0,\\n                \\"Y\\": 0\\n              }\\n            ]\\n          }\\n        }\\n      ],\\n      \\"VideoWidth\\": 0,\\n      \\"VideoHeight\\": 0,\\n      \\"VideoStreams\\": [\\n        {\\n          \\"Index\\": 0,\\n          \\"Language\\": \\"\\",\\n          \\"CodecName\\": \\"\\",\\n          \\"CodecLongName\\": \\"\\",\\n          \\"Profile\\": \\"\\",\\n          \\"CodecTimeBase\\": \\"\\",\\n          \\"CodecTagString\\": \\"\\",\\n          \\"CodecTag\\": \\"\\",\\n          \\"Width\\": 0,\\n          \\"Height\\": 0,\\n          \\"HasBFrames\\": 0,\\n          \\"SampleAspectRatio\\": \\"\\",\\n          \\"DisplayAspectRatio\\": \\"\\",\\n          \\"PixelFormat\\": \\"\\",\\n          \\"Level\\": 0,\\n          \\"FrameRate\\": \\"\\",\\n          \\"AverageFrameRate\\": \\"\\",\\n          \\"TimeBase\\": \\"\\",\\n          \\"StartTime\\": 0,\\n          \\"Duration\\": 0,\\n          \\"Bitrate\\": 0,\\n          \\"FrameCount\\": 0,\\n          \\"Rotate\\": \\"\\",\\n          \\"BitDepth\\": 0,\\n          \\"ColorSpace\\": \\"\\",\\n          \\"ColorRange\\": \\"\\",\\n          \\"ColorTransfer\\": \\"\\",\\n          \\"ColorPrimaries\\": \\"\\"\\n        }\\n      ],\\n      \\"Subtitles\\": [\\n        {\\n          \\"Index\\": 0,\\n          \\"Language\\": \\"\\",\\n          \\"CodecName\\": \\"\\",\\n          \\"CodecLongName\\": \\"\\",\\n          \\"CodecTagString\\": \\"\\",\\n          \\"CodecTag\\": \\"\\",\\n          \\"StartTime\\": 0,\\n          \\"Duration\\": 0,\\n          \\"Bitrate\\": 0,\\n          \\"Content\\": \\"\\",\\n          \\"Width\\": 0,\\n          \\"Height\\": 0\\n        }\\n      ],\\n      \\"AudioStreams\\": [\\n        {\\n          \\"Index\\": 0,\\n          \\"Language\\": \\"\\",\\n          \\"CodecName\\": \\"\\",\\n          \\"CodecLongName\\": \\"\\",\\n          \\"CodecTimeBase\\": \\"\\",\\n          \\"CodecTagString\\": \\"\\",\\n          \\"CodecTag\\": \\"\\",\\n          \\"TimeBase\\": \\"\\",\\n          \\"StartTime\\": 0,\\n          \\"Duration\\": 0,\\n          \\"Bitrate\\": 0,\\n          \\"FrameCount\\": 0,\\n          \\"Lyric\\": \\"\\",\\n          \\"SampleFormat\\": \\"\\",\\n          \\"SampleRate\\": 0,\\n          \\"Channels\\": 0,\\n          \\"ChannelLayout\\": \\"\\"\\n        }\\n      ],\\n      \\"Artist\\": \\"\\",\\n      \\"AlbumArtist\\": \\"\\",\\n      \\"AudioCovers\\": [\\n        {\\n          \\"ImageWidth\\": 0,\\n          \\"ImageHeight\\": 0,\\n          \\"EXIF\\": \\"\\",\\n          \\"ImageScore\\": {\\n            \\"OverallQualityScore\\": 0\\n          },\\n          \\"CroppingSuggestions\\": [\\n            {\\n              \\"AspectRatio\\": \\"\\",\\n              \\"Confidence\\": 0\\n            }\\n          ],\\n          \\"OCRContents\\": [\\n            {\\n              \\"Language\\": \\"\\",\\n              \\"Contents\\": \\"\\",\\n              \\"Confidence\\": 0\\n            }\\n          ]\\n        }\\n      ],\\n      \\"Composer\\": \\"\\",\\n      \\"Performer\\": \\"\\",\\n      \\"Language\\": \\"\\",\\n      \\"Album\\": \\"\\",\\n      \\"PageCount\\": 0,\\n      \\"ETag\\": \\"\\",\\n      \\"CacheControl\\": \\"\\",\\n      \\"ContentDisposition\\": \\"\\",\\n      \\"ContentEncoding\\": \\"\\",\\n      \\"ContentLanguage\\": \\"\\",\\n      \\"AccessControlAllowOrigin\\": \\"\\",\\n      \\"AccessControlRequestMethod\\": \\"\\",\\n      \\"ServerSideEncryptionCustomerAlgorithm\\": \\"\\",\\n      \\"ServerSideEncryption\\": \\"\\",\\n      \\"ServerSideDataEncryption\\": \\"\\",\\n      \\"ServerSideEncryptionKeyId\\": \\"\\",\\n      \\"OSSStorageClass\\": \\"\\",\\n      \\"OSSCRC64\\": \\"\\",\\n      \\"ObjectACL\\": \\"\\",\\n      \\"ContentMd5\\": \\"\\",\\n      \\"OSSUserMeta\\": {\\n        \\"test\\": \\"test\\",\\n        \\"test2\\": 1\\n      },\\n      \\"OSSTaggingCount\\": 0,\\n      \\"OSSTagging\\": {\\n        \\"test\\": \\"test\\",\\n        \\"test2\\": 1\\n      },\\n      \\"OSSExpiration\\": \\"\\",\\n      \\"OSSVersionId\\": \\"\\",\\n      \\"OSSDeleteMarker\\": \\"\\",\\n      \\"OSSObjectType\\": \\"\\",\\n      \\"CustomId\\": \\"\\",\\n      \\"CustomLabels\\": {\\n        \\"test\\": \\"test\\",\\n        \\"test2\\": 1\\n      },\\n      \\"StreamCount\\": 0,\\n      \\"ProgramCount\\": 0,\\n      \\"FormatName\\": \\"\\",\\n      \\"FormatLongName\\": \\"\\",\\n      \\"StartTime\\": 0,\\n      \\"Bitrate\\": 0,\\n      \\"Duration\\": 0,\\n      \\"SemanticSimilarity\\": 0,\\n      \\"SemanticTypes\\": [\\n        \\"\\"\\n      ],\\n      \\"Elements\\": [\\n        {\\n          \\"ElementContents\\": [\\n            {\\n              \\"Type\\": \\"\\",\\n              \\"Content\\": \\"\\",\\n              \\"URL\\": \\"\\"\\n            }\\n          ]\\n        }\\n      ],\\n      \\"OCRTexts\\": \\"\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '批量获取文件元数据',
      'description' => '- **请确保在使用该接口前，已充分了解智能媒体管理产品的收费方式和[价格](~~477042~~)**。

- 调用该接口前，请确保您已通过绑定方式（[CreateBinding](~~478202~~)）或者主动索引（[IndexFileMeta](~~478166~~)或者[BatchIndexFileMeta](~~478167~~)）方式将文件索引到数据集（Dataset）中。

- 返回结果仅为示例，根据[工作流模板配置](~~466304~~)不同，获取到的文件元数据信息的类别和包含的内容均有可能与示例不同。如果有疑问，请使用钉钉搜索钉钉群号31690030817加入钉钉群进行反馈。',
    ),
    'DeleteFileMeta' => 
    array (
      'summary' => '从数据集内删除文件的元信息。',
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
      'operationType' => 'write',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'delete',
        'abilityTreeCode' => '33169',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREimmSZD9WY',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ProjectName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '项目名称，获取方式请参见[创建项目](~~478153~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'test-project',
          ),
        ),
        1 => 
        array (
          'name' => 'DatasetName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据集名称，获取方式请参见[创建数据集](~~478160~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'test-datset',
          ),
        ),
        2 => 
        array (
          'name' => 'URI',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '文件的URI。

OSS地址规则为oss://${Bucket}/${Object}，其中`${Bucket}`为和当前项目处于同一区域(Region)的OSS Bucket名称，`${Object}`为包含文件扩展名的文件完整路径。

PDS地址规则为pds://domains/${domain}/drives/${drive}/files/${file}/revisions/${revision}。',
            'type' => 'string',
            'required' => true,
            'example' => 'oss://test-bucket/test-object',
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
            'description' => '响应结构体。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '7F82D6C9-5AC0-49F9-914D-F02678F3****',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"7F82D6C9-5AC0-49F9-914D-F02678F3****\\"\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '删除文件元信息',
      'description' => '- **请确保在使用该接口前，已充分了解智能媒体管理产品的收费方式和[价格](~~477042~~)**。
- 无论该文件的元信息是否在数据集内存在，均会返回删除成功。

> - 删除数据集内的元数据**不会**导致您存储在OSS/PDS上的文件被删除。如您同时需要删除文件本身，请使用OSS/PDS提供的接口进行操作。
- 删除文件元数据时，对应的人脸聚类分组信息、故事等（如有）会对应发生变化，时空聚类不会发生变化。',
    ),
    'BatchDeleteFileMeta' => 
    array (
      'summary' => '批量从数据集内删除文件的元信息。',
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
      'systemTags' => 
      array (
        'operationType' => 'delete',
        'abilityTreeCode' => '33176',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREimmSZD9WY',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ProjectName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '项目名称，获取方式请参见[创建项目](~~478153~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'test-project',
          ),
        ),
        1 => 
        array (
          'name' => 'DatasetName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据集名称，获取方式请参见[创建数据集](~~478160~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'test-dataset',
          ),
        ),
        2 => 
        array (
          'name' => 'URIs',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => 'OSS文件列表，最大支持100个。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '文件的URI。

OSS地址规则为oss://${Bucket}/${Object}，其中`${Bucket}`为和当前项目处于同一区域(Region)的OSS Bucket名称，`${Object}`为包含文件扩展名的文件完整路径。

PDS地址规则为pds://domains/${domain}/drives/${drive}/files/${file}/revisions/${revision}。',
              'type' => 'string',
              'required' => false,
              'example' => 'oss://test-bucket/test-object',
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
            'description' => '响应结构体。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '3A82F6C9-5AC0-38F9-914F-F02623B3****',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"3A82F6C9-5AC0-38F9-914F-F02623B3****\\"\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '批量删除文件元信息',
      'description' => '- **请确保在使用该接口前，已充分了解智能媒体管理产品的收费方式和[价格](~~477042~~)**。
- 无论该文件的元信息是否在数据集内存在，均会返回删除成功。

> - 删除数据集内的元数据**不会**导致您存储在OSS/PDS上的文件被删除。如您同时需要删除文件本身，请使用OSS/PDS提供的接口进行操作。
- 删除文件元数据时，对应的人脸聚类分组信息、故事等（如有）会对应发生变化，时空聚类不会发生变化。',
    ),
    'SimpleQuery' => 
    array (
      'summary' => '查询和统计数据集内文件，支持逻辑关系表达方式。',
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
        'operationType' => 'list',
        'abilityTreeCode' => '4489',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREimmDN11M0',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'NextToken',
          'in' => 'query',
          'allowEmptyValue' => true,
          'schema' => 
          array (
            'title' => '标记当前开始读取的位置，置空表示从头开始',
            'description' => '当文件总数大于设置的MaxResults时，用于翻页的token。

从NextToken开始按字典序返回文件信息列表。

第一次调用此接口时，设置为空。',
            'type' => 'string',
            'required' => false,
            'example' => 'MTIzNDU2Nzg6aW1tdGVzdDpleGFtcGxlYnVja2V0OmRhdGFzZXQwMDE6b3NzOi8vZXhhbXBsZWJ1Y2tldC9zYW1wbGVvYmplY3QxLmpwZw==',
          ),
        ),
        1 => 
        array (
          'name' => 'MaxResults',
          'in' => 'query',
          'allowEmptyValue' => true,
          'schema' => 
          array (
            'title' => '本次读取的最大数据记录数量',
            'description' => '- 不传Aggregations参数查询文件时，表示返回文件的最大个数，取值范围为0~100。

- 传Aggregations参数进行聚合统计时，表示返回分组的最大个数，取值范围为0~2000。

- 不设置此参数或者设置为0时，则默认值为100。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '10',
          ),
        ),
        2 => 
        array (
          'name' => 'ProjectName',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '项目名称',
            'description' => '项目名称，获取方式请参见[创建项目](~~478153~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'test-project',
          ),
        ),
        3 => 
        array (
          'name' => 'DatasetName',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'Dataset 名称',
            'description' => '数据集名称，获取方式请参见[创建数据集](~~478160~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'test-dataset',
          ),
        ),
        4 => 
        array (
          'name' => 'Query',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '简单查询条件。请点击左侧链接查看详情。',
            'required' => false,
            '$ref' => '#/components/schemas/SimpleQuery',
          ),
        ),
        5 => 
        array (
          'name' => 'Sort',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '排序方式，默认 DESC',
            'description' => '排序字段列表。请参考[字段和操作符的支持列表](~~252856~~)。
> - 多个排序字段可使用半角逗号（,）分隔，例如：Size,Filename。
> - 最多可设置5个排序字段。
> - 排序字段顺序即为排序优先级顺序。',
            'type' => 'string',
            'required' => false,
            'example' => 'Size,Filename',
          ),
        ),
        6 => 
        array (
          'name' => 'Order',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '排序字段',
            'description' => '排序字段的排序方式。取值如下：

- asc：升序

- desc（默认）：降序
>- 多个排序方式可使用半角逗号（,）分隔，例如：asc,desc。
> - 排序方式不可多于排序字段，即参数Order的元素数量需小于等于参数Sort的元素数量。例如Sort取值为Size,Filename时，Order可取值为desc或asc。
> - 排序方式少于排序字段时，未排序的字段默认取值asc。例如Sort取值为Size,Filename，Order取值为asc时，Filename默认排序方式为asc，即升序排列。',
            'type' => 'string',
            'required' => false,
            'example' => 'asc,desc',
          ),
        ),
        7 => 
        array (
          'name' => 'Aggregations',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'title' => '聚合字段',
            'description' => '聚合字段信息列表。
><notice>当您使用聚合查询时，仅返回聚合结果，不再返回匹配到的元信息列表。></notice>',
            'type' => 'array',
            'items' => 
            array (
              'description' => '聚合字段信息的结构体。',
              'type' => 'object',
              'properties' => 
              array (
                'Field' => 
                array (
                  'title' => '聚合字段的字段名',
                  'description' => '字段名称。关于支持的字段，请参见[字段和操作符的支持列表](~~252856~~)。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'Size',
                ),
                'Operation' => 
                array (
                  'title' => '聚合字段的聚合操作符',
                  'description' => '聚合字段的操作符。',
                  'type' => 'string',
                  'required' => false,
                  'enumValueTitles' => 
                  array (
                    'average' => '平均数',
                    'min' => '最小值',
                    'max' => '最大值',
                    'count' => '计数',
                    'distinct' => '去重计数',
                    'sum' => '求和',
                    'group' => '分组计数，按照分组计数结果从高到低排序',
                  ),
                  'example' => 'sum',
                ),
              ),
              'required' => false,
            ),
            'required' => false,
          ),
        ),
        8 => 
        array (
          'name' => 'WithFields',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'title' => '仅返回哪些字段',
            'description' => '仅返回特定字段的值，而不是全部已有的元信息字段。可用于降低返回的结构体大小。

不填或留空则返回所有字段。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '需要返回字段的字段名。支持[File](~~478261~~)中列举支持的字段名。',
              'type' => 'string',
              'required' => false,
              'example' => 'Filename',
            ),
            'required' => false,
          ),
        ),
        9 => 
        array (
          'name' => 'WithoutTotalHits',
          'in' => 'query',
          'allowEmptyValue' => true,
          'schema' => 
          array (
            'description' => '是否返回命中记录总数
- true 不返回TotalHits字段
- false 返回TotalHits字段',
            'type' => 'boolean',
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
            'description' => '响应结构体。',
            'type' => 'object',
            'properties' => 
            array (
              'NextToken' => 
              array (
                'title' => '表示当前调用返回读取到的位置，空代表数据已经读取完毕',
                'description' => '当文件总数大于设置的MaxResults时，用于翻页的token。

下一次列出文件信息时以此值为NextToken，将未返回的结果返回。

当文件未全部返回时，此参数才有值。',
                'type' => 'string',
                'required' => true,
                'example' => 'MTIzNDU2Nzg6aW1tdGVzdDpleGFtcGxlYnVja2V0OmRhdGFzZXQwMDE6b3NzOi8vZXhhbXBsZWJ1Y2tldC9zYW1wbGVvYmplY3QxLmpwZw==',
              ),
              'RequestId' => 
              array (
                'title' => '本次请求的唯一 Id',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '2C5C1E0F-D8B8-4DA0-8127-EC32C771****',
              ),
              'Files' => 
              array (
                'title' => '文件列表',
                'description' => '文件信息列表。仅在请求的Aggregations为空时返回。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '文件信息的结构体。',
                  '$ref' => '#/components/schemas/File',
                ),
              ),
              'Aggregations' => 
              array (
                'title' => '聚合字段的字段名',
                'description' => '聚合字段信息列表。仅在请求的Aggregations不为空时返回。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '聚合字段信息结构体。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Field' => 
                    array (
                      'title' => '聚合字段名',
                      'description' => '聚合字段名称。',
                      'type' => 'string',
                      'example' => 'Size',
                    ),
                    'Operation' => 
                    array (
                      'title' => '聚合字段的聚合操作符',
                      'description' => '聚合字段的聚合操作符。',
                      'type' => 'string',
                      'example' => 'sum',
                    ),
                    'Value' => 
                    array (
                      'description' => '聚合的统计结果。',
                      'type' => 'number',
                      'format' => 'double',
                      'example' => '200',
                    ),
                    'Groups' => 
                    array (
                      'title' => '分组聚合的结果',
                      'description' => '分组聚合的结果列表。仅在请求的Aggregations中存在group类型的Operation时才会返回。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '分组聚合的结果。',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'Value' => 
                          array (
                            'title' => '分组聚合的值',
                            'description' => '分组聚合的值。',
                            'type' => 'string',
                            'example' => '100',
                          ),
                          'Count' => 
                          array (
                            'title' => '分组聚合的计数',
                            'description' => '分组聚合的总个数。',
                            'type' => 'integer',
                            'format' => 'int64',
                            'example' => '5',
                          ),
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'TotalHits' => 
              array (
                'description' => '命中的记录数。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '10',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"NextToken\\": \\"MTIzNDU2Nzg6aW1tdGVzdDpleGFtcGxlYnVja2V0OmRhdGFzZXQwMDE6b3NzOi8vZXhhbXBsZWJ1Y2tldC9zYW1wbGVvYmplY3QxLmpwZw==\\",\\n  \\"RequestId\\": \\"2C5C1E0F-D8B8-4DA0-8127-EC32C771****\\",\\n  \\"Files\\": [\\n    {\\n      \\"OwnerId\\": \\"\\",\\n      \\"ProjectName\\": \\"\\",\\n      \\"DatasetName\\": \\"\\",\\n      \\"ObjectType\\": \\"\\",\\n      \\"ObjectId\\": \\"\\",\\n      \\"UpdateTime\\": \\"\\",\\n      \\"CreateTime\\": \\"\\",\\n      \\"URI\\": \\"\\",\\n      \\"OSSURI\\": \\"\\",\\n      \\"Filename\\": \\"\\",\\n      \\"MediaType\\": \\"\\",\\n      \\"ContentType\\": \\"\\",\\n      \\"Size\\": 0,\\n      \\"FileHash\\": \\"\\",\\n      \\"FileModifiedTime\\": \\"\\",\\n      \\"FileCreateTime\\": \\"\\",\\n      \\"FileAccessTime\\": \\"\\",\\n      \\"ProduceTime\\": \\"\\",\\n      \\"LatLong\\": \\"\\",\\n      \\"Timezone\\": \\"\\",\\n      \\"Addresses\\": [\\n        {\\n          \\"Language\\": \\"\\",\\n          \\"AddressLine\\": \\"\\",\\n          \\"Country\\": \\"\\",\\n          \\"Province\\": \\"\\",\\n          \\"City\\": \\"\\",\\n          \\"District\\": \\"\\",\\n          \\"Township\\": \\"\\"\\n        }\\n      ],\\n      \\"TravelClusterId\\": \\"\\",\\n      \\"Orientation\\": 0,\\n      \\"Figures\\": [\\n        {\\n          \\"FigureId\\": \\"\\",\\n          \\"FigureConfidence\\": 0,\\n          \\"FigureClusterId\\": \\"\\",\\n          \\"FigureClusterConfidence\\": 0,\\n          \\"FigureType\\": \\"\\",\\n          \\"Age\\": 0,\\n          \\"AgeSD\\": 0,\\n          \\"Gender\\": \\"\\",\\n          \\"GenderConfidence\\": 0,\\n          \\"Emotion\\": \\"\\",\\n          \\"EmotionConfidence\\": 0,\\n          \\"FaceQuality\\": 0,\\n          \\"Boundary\\": {\\n            \\"Width\\": 0,\\n            \\"Height\\": 0,\\n            \\"Left\\": 0,\\n            \\"Top\\": 0,\\n            \\"Polygon\\": [\\n              {\\n                \\"X\\": 0,\\n                \\"Y\\": 0\\n              }\\n            ]\\n          },\\n          \\"Mouth\\": \\"\\",\\n          \\"MouthConfidence\\": 0,\\n          \\"Beard\\": \\"\\",\\n          \\"BeardConfidence\\": 0,\\n          \\"Hat\\": \\"\\",\\n          \\"HatConfidence\\": 0,\\n          \\"Mask\\": \\"\\",\\n          \\"MaskConfidence\\": 0,\\n          \\"Glasses\\": \\"\\",\\n          \\"GlassesConfidence\\": 0,\\n          \\"Sharpness\\": 0,\\n          \\"Attractive\\": 0,\\n          \\"HeadPose\\": {\\n            \\"Pitch\\": 0,\\n            \\"Roll\\": 0,\\n            \\"Yaw\\": 0\\n          }\\n        }\\n      ],\\n      \\"FigureCount\\": 0,\\n      \\"Labels\\": [\\n        {\\n          \\"Language\\": \\"\\",\\n          \\"LabelName\\": \\"\\",\\n          \\"LabelLevel\\": 0,\\n          \\"LabelConfidence\\": 0,\\n          \\"ParentLabelName\\": \\"\\",\\n          \\"CentricScore\\": 0\\n        }\\n      ],\\n      \\"Title\\": \\"\\",\\n      \\"ImageWidth\\": 0,\\n      \\"ImageHeight\\": 0,\\n      \\"EXIF\\": \\"\\",\\n      \\"ImageScore\\": {\\n        \\"OverallQualityScore\\": 0\\n      },\\n      \\"CroppingSuggestions\\": [\\n        {\\n          \\"AspectRatio\\": \\"\\",\\n          \\"Confidence\\": 0,\\n          \\"Boundary\\": {\\n            \\"Width\\": 0,\\n            \\"Height\\": 0,\\n            \\"Left\\": 0,\\n            \\"Top\\": 0,\\n            \\"Polygon\\": [\\n              {\\n                \\"X\\": 0,\\n                \\"Y\\": 0\\n              }\\n            ]\\n          }\\n        }\\n      ],\\n      \\"OCRContents\\": [\\n        {\\n          \\"Language\\": \\"\\",\\n          \\"Contents\\": \\"\\",\\n          \\"Confidence\\": 0,\\n          \\"Boundary\\": {\\n            \\"Width\\": 0,\\n            \\"Height\\": 0,\\n            \\"Left\\": 0,\\n            \\"Top\\": 0,\\n            \\"Polygon\\": [\\n              {\\n                \\"X\\": 0,\\n                \\"Y\\": 0\\n              }\\n            ]\\n          }\\n        }\\n      ],\\n      \\"VideoWidth\\": 0,\\n      \\"VideoHeight\\": 0,\\n      \\"VideoStreams\\": [\\n        {\\n          \\"Index\\": 0,\\n          \\"Language\\": \\"\\",\\n          \\"CodecName\\": \\"\\",\\n          \\"CodecLongName\\": \\"\\",\\n          \\"Profile\\": \\"\\",\\n          \\"CodecTimeBase\\": \\"\\",\\n          \\"CodecTagString\\": \\"\\",\\n          \\"CodecTag\\": \\"\\",\\n          \\"Width\\": 0,\\n          \\"Height\\": 0,\\n          \\"HasBFrames\\": 0,\\n          \\"SampleAspectRatio\\": \\"\\",\\n          \\"DisplayAspectRatio\\": \\"\\",\\n          \\"PixelFormat\\": \\"\\",\\n          \\"Level\\": 0,\\n          \\"FrameRate\\": \\"\\",\\n          \\"AverageFrameRate\\": \\"\\",\\n          \\"TimeBase\\": \\"\\",\\n          \\"StartTime\\": 0,\\n          \\"Duration\\": 0,\\n          \\"Bitrate\\": 0,\\n          \\"FrameCount\\": 0,\\n          \\"Rotate\\": \\"\\",\\n          \\"BitDepth\\": 0,\\n          \\"ColorSpace\\": \\"\\",\\n          \\"ColorRange\\": \\"\\",\\n          \\"ColorTransfer\\": \\"\\",\\n          \\"ColorPrimaries\\": \\"\\"\\n        }\\n      ],\\n      \\"Subtitles\\": [\\n        {\\n          \\"Index\\": 0,\\n          \\"Language\\": \\"\\",\\n          \\"CodecName\\": \\"\\",\\n          \\"CodecLongName\\": \\"\\",\\n          \\"CodecTagString\\": \\"\\",\\n          \\"CodecTag\\": \\"\\",\\n          \\"StartTime\\": 0,\\n          \\"Duration\\": 0,\\n          \\"Bitrate\\": 0,\\n          \\"Content\\": \\"\\",\\n          \\"Width\\": 0,\\n          \\"Height\\": 0\\n        }\\n      ],\\n      \\"AudioStreams\\": [\\n        {\\n          \\"Index\\": 0,\\n          \\"Language\\": \\"\\",\\n          \\"CodecName\\": \\"\\",\\n          \\"CodecLongName\\": \\"\\",\\n          \\"CodecTimeBase\\": \\"\\",\\n          \\"CodecTagString\\": \\"\\",\\n          \\"CodecTag\\": \\"\\",\\n          \\"TimeBase\\": \\"\\",\\n          \\"StartTime\\": 0,\\n          \\"Duration\\": 0,\\n          \\"Bitrate\\": 0,\\n          \\"FrameCount\\": 0,\\n          \\"Lyric\\": \\"\\",\\n          \\"SampleFormat\\": \\"\\",\\n          \\"SampleRate\\": 0,\\n          \\"Channels\\": 0,\\n          \\"ChannelLayout\\": \\"\\"\\n        }\\n      ],\\n      \\"Artist\\": \\"\\",\\n      \\"AlbumArtist\\": \\"\\",\\n      \\"AudioCovers\\": [\\n        {\\n          \\"ImageWidth\\": 0,\\n          \\"ImageHeight\\": 0,\\n          \\"EXIF\\": \\"\\",\\n          \\"ImageScore\\": {\\n            \\"OverallQualityScore\\": 0\\n          },\\n          \\"CroppingSuggestions\\": [\\n            {\\n              \\"AspectRatio\\": \\"\\",\\n              \\"Confidence\\": 0\\n            }\\n          ],\\n          \\"OCRContents\\": [\\n            {\\n              \\"Language\\": \\"\\",\\n              \\"Contents\\": \\"\\",\\n              \\"Confidence\\": 0\\n            }\\n          ]\\n        }\\n      ],\\n      \\"Composer\\": \\"\\",\\n      \\"Performer\\": \\"\\",\\n      \\"Language\\": \\"\\",\\n      \\"Album\\": \\"\\",\\n      \\"PageCount\\": 0,\\n      \\"ETag\\": \\"\\",\\n      \\"CacheControl\\": \\"\\",\\n      \\"ContentDisposition\\": \\"\\",\\n      \\"ContentEncoding\\": \\"\\",\\n      \\"ContentLanguage\\": \\"\\",\\n      \\"AccessControlAllowOrigin\\": \\"\\",\\n      \\"AccessControlRequestMethod\\": \\"\\",\\n      \\"ServerSideEncryptionCustomerAlgorithm\\": \\"\\",\\n      \\"ServerSideEncryption\\": \\"\\",\\n      \\"ServerSideDataEncryption\\": \\"\\",\\n      \\"ServerSideEncryptionKeyId\\": \\"\\",\\n      \\"OSSStorageClass\\": \\"\\",\\n      \\"OSSCRC64\\": \\"\\",\\n      \\"ObjectACL\\": \\"\\",\\n      \\"ContentMd5\\": \\"\\",\\n      \\"OSSUserMeta\\": {\\n        \\"test\\": \\"test\\",\\n        \\"test2\\": 1\\n      },\\n      \\"OSSTaggingCount\\": 0,\\n      \\"OSSTagging\\": {\\n        \\"test\\": \\"test\\",\\n        \\"test2\\": 1\\n      },\\n      \\"OSSExpiration\\": \\"\\",\\n      \\"OSSVersionId\\": \\"\\",\\n      \\"OSSDeleteMarker\\": \\"\\",\\n      \\"OSSObjectType\\": \\"\\",\\n      \\"CustomId\\": \\"\\",\\n      \\"CustomLabels\\": {\\n        \\"test\\": \\"test\\",\\n        \\"test2\\": 1\\n      },\\n      \\"StreamCount\\": 0,\\n      \\"ProgramCount\\": 0,\\n      \\"FormatName\\": \\"\\",\\n      \\"FormatLongName\\": \\"\\",\\n      \\"StartTime\\": 0,\\n      \\"Bitrate\\": 0,\\n      \\"Duration\\": 0,\\n      \\"SemanticSimilarity\\": 0,\\n      \\"SemanticTypes\\": [\\n        \\"\\"\\n      ],\\n      \\"Elements\\": [\\n        {\\n          \\"ElementContents\\": [\\n            {\\n              \\"Type\\": \\"\\",\\n              \\"Content\\": \\"\\",\\n              \\"URL\\": \\"\\"\\n            }\\n          ]\\n        }\\n      ],\\n      \\"OCRTexts\\": \\"\\"\\n    }\\n  ],\\n  \\"Aggregations\\": [\\n    {\\n      \\"Field\\": \\"Size\\",\\n      \\"Operation\\": \\"sum\\",\\n      \\"Value\\": 200,\\n      \\"Groups\\": [\\n        {\\n          \\"Value\\": \\"100\\",\\n          \\"Count\\": 5\\n        }\\n      ]\\n    }\\n  ],\\n  \\"TotalHits\\": 10\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '简单查询',
      'description' => '- **请确保在使用该接口前，已充分了解智能媒体管理产品的收费方式和[价格](~~477042~~)**。

- 调用该接口前，请确保您已通过绑定方式（[CreateBinding](~~478202~~)）或者主动索引（[IndexFileMeta](~~478166~~)或者[BatchIndexFileMeta](~~478167~~)）方式将文件索引到数据集（Dataset）中。

- 返回结果仅为示例，根据[工作流模板配置](~~466304~~)不同，获取到的文件元数据信息的类别和包含的内容均有可能与示例不同。如果有疑问，请使用钉钉搜索钉钉群号31690030817加入钉钉群进行反馈。

**使用限制**

- 每次查询最多返回100个文件信息。

- 每次查询最多返回2000条聚合统计信息。

- 子查询条件最大支持设置100个。

- 子查询嵌套深度最多支持5层。

**查询条件示例**
- 如果要搜索JPEG格式的图片且图片尺寸大于1000像素，则Query填写示例如下：
```
{
  "SubQueries":[
    {
      "Field":"ContentType",
      "Value": "image/jpeg",
      "Operation":"eq"
    },         
    {
      "Field":"ImageWidth",
      "Value":"1000",
      "Operation":"gt"
    }
  ],
  "Operation":"and"
}
```
- 如果要搜索`oss://examplebucket/path/`中所有包含`电视`或`音响`标签的文件且该文件的大小大于10 MB，则Query填写示例如下：

> 这里`电视`和`音响`是同一个文件的不同标签，在`Labels`字段中以两个独立对象的方式存在，请注意和下一个例子的区别。

```
{
  "SubQueries": [
    {
      "Field": "URI",
      "Value": "oss://examplebucket/path/",
      "Operation": "prefix"
    },
    {
      "Field": "Size",
      "Value": "1048576",
      "Operation": "gt"
    },
    {
      "SubQueries": [
        {
          "Field": "Labels.LabelName",
          "Value": "电视",
          "Operation": "eq"
        },
        {
          "Field": "Labels.LabelName",
          "Value": "音响",
          "Operation": "eq"
        }
      ],
      "Operation": "or"
    }
  ],
  "Operation": "and"
}
        
```
- 如果要排除人脸信息中有一个36岁以上的男性的文件，则Query填写示例如下：

> 和上一个例子不同的是，这里要求某一个人脸同时满足36岁以上、男性两个条件，这和一张图片中有多个人脸，其中某个是男性，而其中另一个是36岁以上这个需求是不同的。在该请求中，需要使用`nested`查询实现条件在同一个元素内同时满足的限制。

```
{
	"Operation": "not",
	"SubQueries": [{
		"Operation": "nested",
		"SubQueries": [{
			"Operation": "and",
			"SubQueries": [{
				"Field": "Figures.Age",
				"Operation": "gt",
				"Value": "36"
			}, {
				"Field": "Figures.Gender",
				"Operation": "eq",
				"Value": "male"
			}]
		}]
	}]
}
```

- 如果要搜索JPEG格式的图片且图片存在自定义标签和系统标签，则Query填写示例如下：
```
{
  "SubQueries":[
    {
      "Field":"ContentType",
      "Value": "image/jpeg",
      "Operation":"eq"
    },         
    {
      "Field":"CustomLabels.test",
      "Operation":"exist"
    },         
    {
      "Field":"Labels.LabelName",
      "Operation":"exist"
    }
  ],
  "Operation":"and"
}
```

结合以上搜索条件，您还可以通过聚合操作实现不同数据的统计和分析，例如计算符合搜索条件的所有文件的大小总和、数量、平均值或者最值，统计所有符合搜索条件图片的尺寸分布情况。

更多查询用例，请参见[查询文件信息](~~477174~~)。',
    ),
    'SemanticQuery' => 
    array (
      'summary' => '通过输入自然语言，对数据集内的元数据进行基于语义的查询搜索。',
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
        'operationType' => 'list',
        'abilityTreeCode' => '103885',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREimmDN11M0',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'NextToken',
          'in' => 'query',
          'allowEmptyValue' => true,
          'schema' => 
          array (
            'title' => '标记当前开始读取的位置，置空表示从头开始',
            'description' => '目前不再提供该参数。',
            'type' => 'string',
            'required' => false,
          ),
        ),
        1 => 
        array (
          'name' => 'MaxResults',
          'in' => 'query',
          'allowEmptyValue' => true,
          'schema' => 
          array (
            'title' => '本次读取的最大数据记录数量',
            'description' => '本次读取的最大数据记录数量。范围(0,1000]。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '20',
          ),
        ),
        2 => 
        array (
          'name' => 'ProjectName',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '项目名称',
            'description' => '项目名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'test-project',
          ),
        ),
        3 => 
        array (
          'name' => 'DatasetName',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'Dataset 名称',
            'description' => '数据集名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'test-dataset',
          ),
        ),
        4 => 
        array (
          'name' => 'Query',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '需要搜索的内容，使用自然语言描述',
            'description' => '需要进行语义搜索的内容。',
            'type' => 'string',
            'required' => true,
            'example' => '2021年4月杭州的风景',
          ),
        ),
        5 => 
        array (
          'name' => 'WithFields',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '仅返回特定字段的值，而不是全部已有的元信息字段。可用于降低返回的结构体大小。

不填或留空则返回所有字段。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '仅返回特定字段的值，而不是全部已有的元信息字段。可用于降低返回的结构体大小。

不填或留空则返回所有字段。',
              'type' => 'string',
              'required' => false,
              'example' => '["URI", "Filename"]',
            ),
            'required' => false,
          ),
        ),
        6 => 
        array (
          'name' => 'MediaTypes',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '搜索的媒体类型。如留空则默认值为：

["image"]',
            'type' => 'array',
            'items' => 
            array (
              'description' => '枚举值，当前仅支持：

image',
              'type' => 'string',
              'required' => false,
              'example' => '["image"]',
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
                'title' => '本次请求的唯一 Id',
                'description' => '当次请求的Request ID。',
                'type' => 'string',
                'example' => '2C5C1E0F-D8B8-4DA0-8127-EC32C771****',
              ),
              'Files' => 
              array (
                'title' => '文件列表',
                'description' => '文件列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '文件信息。',
                  '$ref' => '#/components/schemas/File',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"2C5C1E0F-D8B8-4DA0-8127-EC32C771****\\",\\n  \\"Files\\": [\\n    {\\n      \\"OwnerId\\": \\"\\",\\n      \\"ProjectName\\": \\"\\",\\n      \\"DatasetName\\": \\"\\",\\n      \\"ObjectType\\": \\"\\",\\n      \\"ObjectId\\": \\"\\",\\n      \\"UpdateTime\\": \\"\\",\\n      \\"CreateTime\\": \\"\\",\\n      \\"URI\\": \\"\\",\\n      \\"OSSURI\\": \\"\\",\\n      \\"Filename\\": \\"\\",\\n      \\"MediaType\\": \\"\\",\\n      \\"ContentType\\": \\"\\",\\n      \\"Size\\": 0,\\n      \\"FileHash\\": \\"\\",\\n      \\"FileModifiedTime\\": \\"\\",\\n      \\"FileCreateTime\\": \\"\\",\\n      \\"FileAccessTime\\": \\"\\",\\n      \\"ProduceTime\\": \\"\\",\\n      \\"LatLong\\": \\"\\",\\n      \\"Timezone\\": \\"\\",\\n      \\"Addresses\\": [\\n        {\\n          \\"Language\\": \\"\\",\\n          \\"AddressLine\\": \\"\\",\\n          \\"Country\\": \\"\\",\\n          \\"Province\\": \\"\\",\\n          \\"City\\": \\"\\",\\n          \\"District\\": \\"\\",\\n          \\"Township\\": \\"\\"\\n        }\\n      ],\\n      \\"TravelClusterId\\": \\"\\",\\n      \\"Orientation\\": 0,\\n      \\"Figures\\": [\\n        {\\n          \\"FigureId\\": \\"\\",\\n          \\"FigureConfidence\\": 0,\\n          \\"FigureClusterId\\": \\"\\",\\n          \\"FigureClusterConfidence\\": 0,\\n          \\"FigureType\\": \\"\\",\\n          \\"Age\\": 0,\\n          \\"AgeSD\\": 0,\\n          \\"Gender\\": \\"\\",\\n          \\"GenderConfidence\\": 0,\\n          \\"Emotion\\": \\"\\",\\n          \\"EmotionConfidence\\": 0,\\n          \\"FaceQuality\\": 0,\\n          \\"Boundary\\": {\\n            \\"Width\\": 0,\\n            \\"Height\\": 0,\\n            \\"Left\\": 0,\\n            \\"Top\\": 0,\\n            \\"Polygon\\": [\\n              {\\n                \\"X\\": 0,\\n                \\"Y\\": 0\\n              }\\n            ]\\n          },\\n          \\"Mouth\\": \\"\\",\\n          \\"MouthConfidence\\": 0,\\n          \\"Beard\\": \\"\\",\\n          \\"BeardConfidence\\": 0,\\n          \\"Hat\\": \\"\\",\\n          \\"HatConfidence\\": 0,\\n          \\"Mask\\": \\"\\",\\n          \\"MaskConfidence\\": 0,\\n          \\"Glasses\\": \\"\\",\\n          \\"GlassesConfidence\\": 0,\\n          \\"Sharpness\\": 0,\\n          \\"Attractive\\": 0,\\n          \\"HeadPose\\": {\\n            \\"Pitch\\": 0,\\n            \\"Roll\\": 0,\\n            \\"Yaw\\": 0\\n          }\\n        }\\n      ],\\n      \\"FigureCount\\": 0,\\n      \\"Labels\\": [\\n        {\\n          \\"Language\\": \\"\\",\\n          \\"LabelName\\": \\"\\",\\n          \\"LabelLevel\\": 0,\\n          \\"LabelConfidence\\": 0,\\n          \\"ParentLabelName\\": \\"\\",\\n          \\"CentricScore\\": 0\\n        }\\n      ],\\n      \\"Title\\": \\"\\",\\n      \\"ImageWidth\\": 0,\\n      \\"ImageHeight\\": 0,\\n      \\"EXIF\\": \\"\\",\\n      \\"ImageScore\\": {\\n        \\"OverallQualityScore\\": 0\\n      },\\n      \\"CroppingSuggestions\\": [\\n        {\\n          \\"AspectRatio\\": \\"\\",\\n          \\"Confidence\\": 0,\\n          \\"Boundary\\": {\\n            \\"Width\\": 0,\\n            \\"Height\\": 0,\\n            \\"Left\\": 0,\\n            \\"Top\\": 0,\\n            \\"Polygon\\": [\\n              {\\n                \\"X\\": 0,\\n                \\"Y\\": 0\\n              }\\n            ]\\n          }\\n        }\\n      ],\\n      \\"OCRContents\\": [\\n        {\\n          \\"Language\\": \\"\\",\\n          \\"Contents\\": \\"\\",\\n          \\"Confidence\\": 0,\\n          \\"Boundary\\": {\\n            \\"Width\\": 0,\\n            \\"Height\\": 0,\\n            \\"Left\\": 0,\\n            \\"Top\\": 0,\\n            \\"Polygon\\": [\\n              {\\n                \\"X\\": 0,\\n                \\"Y\\": 0\\n              }\\n            ]\\n          }\\n        }\\n      ],\\n      \\"VideoWidth\\": 0,\\n      \\"VideoHeight\\": 0,\\n      \\"VideoStreams\\": [\\n        {\\n          \\"Index\\": 0,\\n          \\"Language\\": \\"\\",\\n          \\"CodecName\\": \\"\\",\\n          \\"CodecLongName\\": \\"\\",\\n          \\"Profile\\": \\"\\",\\n          \\"CodecTimeBase\\": \\"\\",\\n          \\"CodecTagString\\": \\"\\",\\n          \\"CodecTag\\": \\"\\",\\n          \\"Width\\": 0,\\n          \\"Height\\": 0,\\n          \\"HasBFrames\\": 0,\\n          \\"SampleAspectRatio\\": \\"\\",\\n          \\"DisplayAspectRatio\\": \\"\\",\\n          \\"PixelFormat\\": \\"\\",\\n          \\"Level\\": 0,\\n          \\"FrameRate\\": \\"\\",\\n          \\"AverageFrameRate\\": \\"\\",\\n          \\"TimeBase\\": \\"\\",\\n          \\"StartTime\\": 0,\\n          \\"Duration\\": 0,\\n          \\"Bitrate\\": 0,\\n          \\"FrameCount\\": 0,\\n          \\"Rotate\\": \\"\\",\\n          \\"BitDepth\\": 0,\\n          \\"ColorSpace\\": \\"\\",\\n          \\"ColorRange\\": \\"\\",\\n          \\"ColorTransfer\\": \\"\\",\\n          \\"ColorPrimaries\\": \\"\\"\\n        }\\n      ],\\n      \\"Subtitles\\": [\\n        {\\n          \\"Index\\": 0,\\n          \\"Language\\": \\"\\",\\n          \\"CodecName\\": \\"\\",\\n          \\"CodecLongName\\": \\"\\",\\n          \\"CodecTagString\\": \\"\\",\\n          \\"CodecTag\\": \\"\\",\\n          \\"StartTime\\": 0,\\n          \\"Duration\\": 0,\\n          \\"Bitrate\\": 0,\\n          \\"Content\\": \\"\\",\\n          \\"Width\\": 0,\\n          \\"Height\\": 0\\n        }\\n      ],\\n      \\"AudioStreams\\": [\\n        {\\n          \\"Index\\": 0,\\n          \\"Language\\": \\"\\",\\n          \\"CodecName\\": \\"\\",\\n          \\"CodecLongName\\": \\"\\",\\n          \\"CodecTimeBase\\": \\"\\",\\n          \\"CodecTagString\\": \\"\\",\\n          \\"CodecTag\\": \\"\\",\\n          \\"TimeBase\\": \\"\\",\\n          \\"StartTime\\": 0,\\n          \\"Duration\\": 0,\\n          \\"Bitrate\\": 0,\\n          \\"FrameCount\\": 0,\\n          \\"Lyric\\": \\"\\",\\n          \\"SampleFormat\\": \\"\\",\\n          \\"SampleRate\\": 0,\\n          \\"Channels\\": 0,\\n          \\"ChannelLayout\\": \\"\\"\\n        }\\n      ],\\n      \\"Artist\\": \\"\\",\\n      \\"AlbumArtist\\": \\"\\",\\n      \\"AudioCovers\\": [\\n        {\\n          \\"ImageWidth\\": 0,\\n          \\"ImageHeight\\": 0,\\n          \\"EXIF\\": \\"\\",\\n          \\"ImageScore\\": {\\n            \\"OverallQualityScore\\": 0\\n          },\\n          \\"CroppingSuggestions\\": [\\n            {\\n              \\"AspectRatio\\": \\"\\",\\n              \\"Confidence\\": 0\\n            }\\n          ],\\n          \\"OCRContents\\": [\\n            {\\n              \\"Language\\": \\"\\",\\n              \\"Contents\\": \\"\\",\\n              \\"Confidence\\": 0\\n            }\\n          ]\\n        }\\n      ],\\n      \\"Composer\\": \\"\\",\\n      \\"Performer\\": \\"\\",\\n      \\"Language\\": \\"\\",\\n      \\"Album\\": \\"\\",\\n      \\"PageCount\\": 0,\\n      \\"ETag\\": \\"\\",\\n      \\"CacheControl\\": \\"\\",\\n      \\"ContentDisposition\\": \\"\\",\\n      \\"ContentEncoding\\": \\"\\",\\n      \\"ContentLanguage\\": \\"\\",\\n      \\"AccessControlAllowOrigin\\": \\"\\",\\n      \\"AccessControlRequestMethod\\": \\"\\",\\n      \\"ServerSideEncryptionCustomerAlgorithm\\": \\"\\",\\n      \\"ServerSideEncryption\\": \\"\\",\\n      \\"ServerSideDataEncryption\\": \\"\\",\\n      \\"ServerSideEncryptionKeyId\\": \\"\\",\\n      \\"OSSStorageClass\\": \\"\\",\\n      \\"OSSCRC64\\": \\"\\",\\n      \\"ObjectACL\\": \\"\\",\\n      \\"ContentMd5\\": \\"\\",\\n      \\"OSSUserMeta\\": {\\n        \\"test\\": \\"test\\",\\n        \\"test2\\": 1\\n      },\\n      \\"OSSTaggingCount\\": 0,\\n      \\"OSSTagging\\": {\\n        \\"test\\": \\"test\\",\\n        \\"test2\\": 1\\n      },\\n      \\"OSSExpiration\\": \\"\\",\\n      \\"OSSVersionId\\": \\"\\",\\n      \\"OSSDeleteMarker\\": \\"\\",\\n      \\"OSSObjectType\\": \\"\\",\\n      \\"CustomId\\": \\"\\",\\n      \\"CustomLabels\\": {\\n        \\"test\\": \\"test\\",\\n        \\"test2\\": 1\\n      },\\n      \\"StreamCount\\": 0,\\n      \\"ProgramCount\\": 0,\\n      \\"FormatName\\": \\"\\",\\n      \\"FormatLongName\\": \\"\\",\\n      \\"StartTime\\": 0,\\n      \\"Bitrate\\": 0,\\n      \\"Duration\\": 0,\\n      \\"SemanticSimilarity\\": 0,\\n      \\"SemanticTypes\\": [\\n        \\"\\"\\n      ],\\n      \\"Elements\\": [\\n        {\\n          \\"ElementContents\\": [\\n            {\\n              \\"Type\\": \\"\\",\\n              \\"Content\\": \\"\\",\\n              \\"URL\\": \\"\\"\\n            }\\n          ]\\n        }\\n      ],\\n      \\"OCRTexts\\": \\"\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '自然语言查询',
      'description' => '### 注意事项

- **请确保在使用该接口前，已充分了解智能媒体管理产品的收费方式和[价格](~~477042~~)**。该接口每次请求，会产生语义理解费用和查询费用两种计费项各一次。

- 调用该接口前，请确保您已通过绑定方式（[CreateBinding](~~478202~~)）或者主动索引（[IndexFileMeta](~~478166~~)或者[BatchIndexFileMeta](~~478167~~)）方式将文件索引到数据集（Dataset）中。

- 返回结果仅为示例，根据[工作流模板配置](~~466304~~)不同，获取到的文件元数据信息的类别和包含的内容均有可能与示例不同。如果有疑问，请使用钉钉搜索钉钉群号21714099加入钉钉群进行反馈。

### 使用限制

- 每次查询最多返回1000个文件信息。

- 不支持翻页查询。

- 自然语言理解不保证完全准确。

### 使用方式

使用自然语言关键词对数据集内的文件进行搜索查询。目前支持理解的关键信息包括标签（Labels.LabelName）、时间（ProduceTime）和地点（Address.AddressLine）等。例如，以`2023年杭州的风景`为条件进行查询，会被智能拆分为如下三个条件，并查找出同时满足这些条件的文件：

 - ProduceTime：2023年1月1日零点起到2023年12月31日结束止

- Address.AddressLine：包含`杭州`关键词

- Labels.LabelName：包含`风景`标签

配合[工作流模板配置](~~466304~~)，当模板中包含`ImageEmbeddingExtraction`算子时，该搜索请求会提供基于图片内容的搜索，即您输入的`Query`内容会同时被理解为图片内包含的内容，从而实现对图片的智能检索。',
    ),
    'FuzzyQuery' => 
    array (
      'summary' => '查询所有已提取的文件元数据（包含文件名、标签、路径、自定义标签、文本等字段），只要文件元数据中有一个字段的值匹配指定字符串，该文件的元数据就会被返回。',
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
        'operationType' => 'list',
        'abilityTreeCode' => '8960',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREimmDN11M0',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'NextToken',
          'in' => 'query',
          'allowEmptyValue' => true,
          'schema' => 
          array (
            'title' => '标记当前开始读取的位置，置空表示从头开始',
            'description' => '当文件总数大于设置的MaxResults时，用于翻页的Token。

从NextToken开始按字典序返回文件信息列表。

第一次调用此接口时，设置为空。',
            'type' => 'string',
            'required' => false,
            'example' => 'MTIzNDU2Nzg6aW1tdGVzdDpleGFtcGxlYnVja2V0OmRhdGFzZXQwMDE6b3NzOi8vZXhhbXBsZWJ1Y2tldC9zYW1wbGVvYmplY3QxLmpwZw==',
          ),
        ),
        1 => 
        array (
          'name' => 'MaxResults',
          'in' => 'query',
          'allowEmptyValue' => true,
          'schema' => 
          array (
            'title' => '本次读取的最大数据记录数量',
            'description' => '返回文件的最大个数，取值范围为0~200。

不设置此参数或者将此参数设置为0时，默认值为100。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1',
          ),
        ),
        2 => 
        array (
          'name' => 'ProjectName',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '项目名称',
            'description' => '项目名称，获取方式请参见[创建项目](~~478153~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'test-project',
          ),
        ),
        3 => 
        array (
          'name' => 'DatasetName',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'Dataset 名称',
            'description' => '数据集名称，获取方式请参见[创建数据集](~~478160~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'test-dataset',
          ),
        ),
        4 => 
        array (
          'name' => 'Query',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '用于搜索的字符串',
            'description' => '用于查询的字符串。不超过1MB。',
            'type' => 'string',
            'required' => true,
            'example' => '阿里云',
          ),
        ),
        5 => 
        array (
          'name' => 'Sort',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '排序字段列表。请参考[字段和操作符的支持列表](~~252856~~)。

- 多个排序字段可使用半角逗号（,）分隔，例如`Size,Filename`。

- 最多可设置5个排序字段。

- 排序字段顺序即为排序优先级顺序。',
            'type' => 'string',
            'required' => false,
            'example' => 'Size,Filename',
          ),
        ),
        6 => 
        array (
          'name' => 'Order',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '排序字段的排序方式。可取值如下：

- asc：升序

- desc（默认）：降序

> - 多个排序方式可使用半角逗号（,）分隔，例如：asc,desc。
> - 排序方式不可多于排序字段，即参数Order的元素数量需小于等于参数Sort的元素数量。例如Sort取值为Size,Filename时，Order可取值desc或asc。
> -  排序方式少于排序字段时，未排序的字段默认取值asc。例如Sort取值为Size,Filename，Order取值为asc时，Filename默认排序方式为asc，即升序排列。',
            'type' => 'string',
            'required' => false,
            'example' => 'asc,desc',
          ),
        ),
        7 => 
        array (
          'name' => 'WithFields',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '仅返回特定字段的值，而不是全部已有的元信息字段。可用于降低返回的结构体大小。

不填或留空则返回所有字段。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '仅返回特定字段的值，而不是全部已有的元信息字段。可用于降低返回的结构体大小。

不填或留空则返回所有字段。',
              'type' => 'string',
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
            'title' => 'Schema of Response',
            'description' => '响应结构体。',
            'type' => 'object',
            'properties' => 
            array (
              'NextToken' => 
              array (
                'title' => '表示当前调用返回读取到的位置，空代表数据已经读取完毕',
                'description' => '当文件总数大于设置的MaxResults时，用于翻页的Token。

下一次列出文件信息时以此值为NextToken，将未返回的结果返回。

当文件未全部返回时，此参数才有值。',
                'type' => 'string',
                'required' => true,
                'example' => 'MTIzNDU2Nzg6aW1tdGVzdDpleGFtcGxlYnVja2V0OmRhdGFzZXQwMDE6b3NzOi8vZXhhbXBsZWJ1Y2tldC9zYW1wbGVvYmplY3QxLmpwZw==',
              ),
              'RequestId' => 
              array (
                'title' => '本次请求的唯一 Id',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '1B3D5E0A-D8B8-4DA0-8127-ED32C851****',
              ),
              'Files' => 
              array (
                'description' => '文件信息列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '文件信息。',
                  '$ref' => '#/components/schemas/File',
                ),
              ),
              'TotalHits' => 
              array (
                'description' => '命中的记录数。',
                'type' => 'integer',
                'format' => 'int64',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"NextToken\\": \\"MTIzNDU2Nzg6aW1tdGVzdDpleGFtcGxlYnVja2V0OmRhdGFzZXQwMDE6b3NzOi8vZXhhbXBsZWJ1Y2tldC9zYW1wbGVvYmplY3QxLmpwZw==\\",\\n  \\"RequestId\\": \\"1B3D5E0A-D8B8-4DA0-8127-ED32C851****\\",\\n  \\"Files\\": [\\n    {\\n      \\"OwnerId\\": \\"\\",\\n      \\"ProjectName\\": \\"\\",\\n      \\"DatasetName\\": \\"\\",\\n      \\"ObjectType\\": \\"\\",\\n      \\"ObjectId\\": \\"\\",\\n      \\"UpdateTime\\": \\"\\",\\n      \\"CreateTime\\": \\"\\",\\n      \\"URI\\": \\"\\",\\n      \\"OSSURI\\": \\"\\",\\n      \\"Filename\\": \\"\\",\\n      \\"MediaType\\": \\"\\",\\n      \\"ContentType\\": \\"\\",\\n      \\"Size\\": 0,\\n      \\"FileHash\\": \\"\\",\\n      \\"FileModifiedTime\\": \\"\\",\\n      \\"FileCreateTime\\": \\"\\",\\n      \\"FileAccessTime\\": \\"\\",\\n      \\"ProduceTime\\": \\"\\",\\n      \\"LatLong\\": \\"\\",\\n      \\"Timezone\\": \\"\\",\\n      \\"Addresses\\": [\\n        {\\n          \\"Language\\": \\"\\",\\n          \\"AddressLine\\": \\"\\",\\n          \\"Country\\": \\"\\",\\n          \\"Province\\": \\"\\",\\n          \\"City\\": \\"\\",\\n          \\"District\\": \\"\\",\\n          \\"Township\\": \\"\\"\\n        }\\n      ],\\n      \\"TravelClusterId\\": \\"\\",\\n      \\"Orientation\\": 0,\\n      \\"Figures\\": [\\n        {\\n          \\"FigureId\\": \\"\\",\\n          \\"FigureConfidence\\": 0,\\n          \\"FigureClusterId\\": \\"\\",\\n          \\"FigureClusterConfidence\\": 0,\\n          \\"FigureType\\": \\"\\",\\n          \\"Age\\": 0,\\n          \\"AgeSD\\": 0,\\n          \\"Gender\\": \\"\\",\\n          \\"GenderConfidence\\": 0,\\n          \\"Emotion\\": \\"\\",\\n          \\"EmotionConfidence\\": 0,\\n          \\"FaceQuality\\": 0,\\n          \\"Boundary\\": {\\n            \\"Width\\": 0,\\n            \\"Height\\": 0,\\n            \\"Left\\": 0,\\n            \\"Top\\": 0,\\n            \\"Polygon\\": [\\n              {\\n                \\"X\\": 0,\\n                \\"Y\\": 0\\n              }\\n            ]\\n          },\\n          \\"Mouth\\": \\"\\",\\n          \\"MouthConfidence\\": 0,\\n          \\"Beard\\": \\"\\",\\n          \\"BeardConfidence\\": 0,\\n          \\"Hat\\": \\"\\",\\n          \\"HatConfidence\\": 0,\\n          \\"Mask\\": \\"\\",\\n          \\"MaskConfidence\\": 0,\\n          \\"Glasses\\": \\"\\",\\n          \\"GlassesConfidence\\": 0,\\n          \\"Sharpness\\": 0,\\n          \\"Attractive\\": 0,\\n          \\"HeadPose\\": {\\n            \\"Pitch\\": 0,\\n            \\"Roll\\": 0,\\n            \\"Yaw\\": 0\\n          }\\n        }\\n      ],\\n      \\"FigureCount\\": 0,\\n      \\"Labels\\": [\\n        {\\n          \\"Language\\": \\"\\",\\n          \\"LabelName\\": \\"\\",\\n          \\"LabelLevel\\": 0,\\n          \\"LabelConfidence\\": 0,\\n          \\"ParentLabelName\\": \\"\\",\\n          \\"CentricScore\\": 0\\n        }\\n      ],\\n      \\"Title\\": \\"\\",\\n      \\"ImageWidth\\": 0,\\n      \\"ImageHeight\\": 0,\\n      \\"EXIF\\": \\"\\",\\n      \\"ImageScore\\": {\\n        \\"OverallQualityScore\\": 0\\n      },\\n      \\"CroppingSuggestions\\": [\\n        {\\n          \\"AspectRatio\\": \\"\\",\\n          \\"Confidence\\": 0,\\n          \\"Boundary\\": {\\n            \\"Width\\": 0,\\n            \\"Height\\": 0,\\n            \\"Left\\": 0,\\n            \\"Top\\": 0,\\n            \\"Polygon\\": [\\n              {\\n                \\"X\\": 0,\\n                \\"Y\\": 0\\n              }\\n            ]\\n          }\\n        }\\n      ],\\n      \\"OCRContents\\": [\\n        {\\n          \\"Language\\": \\"\\",\\n          \\"Contents\\": \\"\\",\\n          \\"Confidence\\": 0,\\n          \\"Boundary\\": {\\n            \\"Width\\": 0,\\n            \\"Height\\": 0,\\n            \\"Left\\": 0,\\n            \\"Top\\": 0,\\n            \\"Polygon\\": [\\n              {\\n                \\"X\\": 0,\\n                \\"Y\\": 0\\n              }\\n            ]\\n          }\\n        }\\n      ],\\n      \\"VideoWidth\\": 0,\\n      \\"VideoHeight\\": 0,\\n      \\"VideoStreams\\": [\\n        {\\n          \\"Index\\": 0,\\n          \\"Language\\": \\"\\",\\n          \\"CodecName\\": \\"\\",\\n          \\"CodecLongName\\": \\"\\",\\n          \\"Profile\\": \\"\\",\\n          \\"CodecTimeBase\\": \\"\\",\\n          \\"CodecTagString\\": \\"\\",\\n          \\"CodecTag\\": \\"\\",\\n          \\"Width\\": 0,\\n          \\"Height\\": 0,\\n          \\"HasBFrames\\": 0,\\n          \\"SampleAspectRatio\\": \\"\\",\\n          \\"DisplayAspectRatio\\": \\"\\",\\n          \\"PixelFormat\\": \\"\\",\\n          \\"Level\\": 0,\\n          \\"FrameRate\\": \\"\\",\\n          \\"AverageFrameRate\\": \\"\\",\\n          \\"TimeBase\\": \\"\\",\\n          \\"StartTime\\": 0,\\n          \\"Duration\\": 0,\\n          \\"Bitrate\\": 0,\\n          \\"FrameCount\\": 0,\\n          \\"Rotate\\": \\"\\",\\n          \\"BitDepth\\": 0,\\n          \\"ColorSpace\\": \\"\\",\\n          \\"ColorRange\\": \\"\\",\\n          \\"ColorTransfer\\": \\"\\",\\n          \\"ColorPrimaries\\": \\"\\"\\n        }\\n      ],\\n      \\"Subtitles\\": [\\n        {\\n          \\"Index\\": 0,\\n          \\"Language\\": \\"\\",\\n          \\"CodecName\\": \\"\\",\\n          \\"CodecLongName\\": \\"\\",\\n          \\"CodecTagString\\": \\"\\",\\n          \\"CodecTag\\": \\"\\",\\n          \\"StartTime\\": 0,\\n          \\"Duration\\": 0,\\n          \\"Bitrate\\": 0,\\n          \\"Content\\": \\"\\",\\n          \\"Width\\": 0,\\n          \\"Height\\": 0\\n        }\\n      ],\\n      \\"AudioStreams\\": [\\n        {\\n          \\"Index\\": 0,\\n          \\"Language\\": \\"\\",\\n          \\"CodecName\\": \\"\\",\\n          \\"CodecLongName\\": \\"\\",\\n          \\"CodecTimeBase\\": \\"\\",\\n          \\"CodecTagString\\": \\"\\",\\n          \\"CodecTag\\": \\"\\",\\n          \\"TimeBase\\": \\"\\",\\n          \\"StartTime\\": 0,\\n          \\"Duration\\": 0,\\n          \\"Bitrate\\": 0,\\n          \\"FrameCount\\": 0,\\n          \\"Lyric\\": \\"\\",\\n          \\"SampleFormat\\": \\"\\",\\n          \\"SampleRate\\": 0,\\n          \\"Channels\\": 0,\\n          \\"ChannelLayout\\": \\"\\"\\n        }\\n      ],\\n      \\"Artist\\": \\"\\",\\n      \\"AlbumArtist\\": \\"\\",\\n      \\"AudioCovers\\": [\\n        {\\n          \\"ImageWidth\\": 0,\\n          \\"ImageHeight\\": 0,\\n          \\"EXIF\\": \\"\\",\\n          \\"ImageScore\\": {\\n            \\"OverallQualityScore\\": 0\\n          },\\n          \\"CroppingSuggestions\\": [\\n            {\\n              \\"AspectRatio\\": \\"\\",\\n              \\"Confidence\\": 0\\n            }\\n          ],\\n          \\"OCRContents\\": [\\n            {\\n              \\"Language\\": \\"\\",\\n              \\"Contents\\": \\"\\",\\n              \\"Confidence\\": 0\\n            }\\n          ]\\n        }\\n      ],\\n      \\"Composer\\": \\"\\",\\n      \\"Performer\\": \\"\\",\\n      \\"Language\\": \\"\\",\\n      \\"Album\\": \\"\\",\\n      \\"PageCount\\": 0,\\n      \\"ETag\\": \\"\\",\\n      \\"CacheControl\\": \\"\\",\\n      \\"ContentDisposition\\": \\"\\",\\n      \\"ContentEncoding\\": \\"\\",\\n      \\"ContentLanguage\\": \\"\\",\\n      \\"AccessControlAllowOrigin\\": \\"\\",\\n      \\"AccessControlRequestMethod\\": \\"\\",\\n      \\"ServerSideEncryptionCustomerAlgorithm\\": \\"\\",\\n      \\"ServerSideEncryption\\": \\"\\",\\n      \\"ServerSideDataEncryption\\": \\"\\",\\n      \\"ServerSideEncryptionKeyId\\": \\"\\",\\n      \\"OSSStorageClass\\": \\"\\",\\n      \\"OSSCRC64\\": \\"\\",\\n      \\"ObjectACL\\": \\"\\",\\n      \\"ContentMd5\\": \\"\\",\\n      \\"OSSUserMeta\\": {\\n        \\"test\\": \\"test\\",\\n        \\"test2\\": 1\\n      },\\n      \\"OSSTaggingCount\\": 0,\\n      \\"OSSTagging\\": {\\n        \\"test\\": \\"test\\",\\n        \\"test2\\": 1\\n      },\\n      \\"OSSExpiration\\": \\"\\",\\n      \\"OSSVersionId\\": \\"\\",\\n      \\"OSSDeleteMarker\\": \\"\\",\\n      \\"OSSObjectType\\": \\"\\",\\n      \\"CustomId\\": \\"\\",\\n      \\"CustomLabels\\": {\\n        \\"test\\": \\"test\\",\\n        \\"test2\\": 1\\n      },\\n      \\"StreamCount\\": 0,\\n      \\"ProgramCount\\": 0,\\n      \\"FormatName\\": \\"\\",\\n      \\"FormatLongName\\": \\"\\",\\n      \\"StartTime\\": 0,\\n      \\"Bitrate\\": 0,\\n      \\"Duration\\": 0,\\n      \\"SemanticSimilarity\\": 0,\\n      \\"SemanticTypes\\": [\\n        \\"\\"\\n      ],\\n      \\"Elements\\": [\\n        {\\n          \\"ElementContents\\": [\\n            {\\n              \\"Type\\": \\"\\",\\n              \\"Content\\": \\"\\",\\n              \\"URL\\": \\"\\"\\n            }\\n          ]\\n        }\\n      ],\\n      \\"OCRTexts\\": \\"\\"\\n    }\\n  ],\\n  \\"TotalHits\\": 0\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '模糊查询',
      'description' => '- **请确保在使用该接口前，已充分了解智能媒体管理产品的收费方式和[价格](~~477042~~)**。

- 调用该接口前，请确保您已通过绑定方式（[CreateBinding](~~478202~~)）或者主动索引（[IndexFileMeta](~~478166~~)或者[BatchIndexFileMeta](~~478167~~)）方式将文件索引到数据集（Dataset）中。

- 返回结果仅为示例，根据[工作流模板配置](~~466304~~)不同，获取到的文件元数据信息的类别和包含的内容均有可能与示例不同。如果有疑问，请使用钉钉搜索钉钉群号31690030817加入钉钉群进行反馈。

- 参与搜索的字段请参考[字段和操作符的支持列表](~~252856~~)。',
    ),
    'CreateFigureClusteringTask' => 
    array (
      'summary' => '创建一个人物人脸聚类任务，通过智能算法，可以在您已索引到数据集的图片中，将属于不同人物的人脸进行聚类分组。',
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
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'create',
        'abilityTreeCode' => '116906',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREimm3DNGQD',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ProjectName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '项目名称，获取方式请参见[创建项目](~~478153~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'immtest',
          ),
        ),
        1 => 
        array (
          'name' => 'DatasetName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据集名称，获取方式请参见[创建数据集](~~478160~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'dataset001',
          ),
        ),
        2 => 
        array (
          'name' => 'UserData',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用户自定义信息，在异步消息通知中会为您返回，用于方便您系统内对消息通知进行关联处理。最大长度为2048字节。',
            'type' => 'string',
            'required' => false,
            'example' => '{"ID": "user1","Name": "test-user1","Avatar": "http://example.com?id=user1"}',
          ),
        ),
        3 => 
        array (
          'name' => 'Tags',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '自定义标签，用于对异步任务进行搜索、过滤。',
            'type' => 'object',
            'required' => false,
            'example' => '{"test": "val1"}',
          ),
        ),
        4 => 
        array (
          'name' => 'Notification',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '消息通知配置，详细内容请单击Notification查看，异步通知消息格式请参见[异步通知消息格式](~~471456~~)。',
            'required' => false,
            '$ref' => '#/components/schemas/Notification',
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
            'description' => '人脸聚类任务信息。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '当次请求的Request ID。',
                'type' => 'string',
                'example' => '1B3D5E0A-D8B8-4DA0-8127-ED32C851****',
              ),
              'TaskId' => 
              array (
                'description' => '任务ID。',
                'type' => 'string',
                'example' => 'formatconvert-00bec802-073a-4b61-ba3b-39bc****',
              ),
              'EventId' => 
              array (
                'description' => '事件ID。',
                'type' => 'string',
                'example' => '0ED-1Bz8z71k5TtsUejT4UJ16****',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"1B3D5E0A-D8B8-4DA0-8127-ED32C851****\\",\\n  \\"TaskId\\": \\"formatconvert-00bec802-073a-4b61-ba3b-39bc****\\",\\n  \\"EventId\\": \\"0ED-1Bz8z71k5TtsUejT4UJ16****\\"\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '创建人物人脸聚类任务',
      'description' => '- **请确保在使用该接口前，已充分了解智能媒体管理产品的收费方式和[价格](~~477042~~)。**

- 调用该接口前，请确保您已通过绑定方式（[CreateBinding](~~CreateBinding~~)）或者主动索引（[IndexFileMeta](~~IndexFileMeta~~)或者[BatchIndexFileMeta](~~BatchIndexFileMeta~~)）方式将文件索引到数据集（[CreateDataset](~~CreateDataset~~)）中。

- 每次调用该接口，会增量对数据集（[CreateDataset](~~CreateDataset~~)）内的文件进行处理。您可以根据新增文件情况，定期调用该接口对新文件进行处理。

- 聚类完成后，您可以通过[GetFigureCluster](~~GetFigureCluster~~)或者[BatchGetFigureCluster](~~BatchGetFigureCluster~~)接口获取特定的分组信息，也可通过[QueryFigureClusters](~~QueryFigureClusters~~)查询和列出数据集下的分组。

- 从数据集中删除文件，会导致人脸聚类发生变化。当一个聚类中所有人脸所在的图片都被删除时，该聚类分组就会被删除。

- 该接口为异步接口，获取任务开始执行后，任务信息只保存7天，超过7天则无法再获取。调用[GetTask](~~GetTask~~)或[ListTasks](~~ListTasks~~)接口获取返回的TaskId，查看任务信息。也可以通过设置[Notification](~~611278~~)消息通知参数，通过消息通知获取任务信息。',
    ),
    'CreateFigureClustersMergingTask' => 
    array (
      'summary' => '将两个或两个以上人物聚类分组合并为一个人物聚类分组。',
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
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'create',
        'abilityTreeCode' => '117038',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREimm3DNGQD',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ProjectName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '项目名称，获取方式请参见[创建项目](~~478153~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'immtest',
          ),
        ),
        1 => 
        array (
          'name' => 'DatasetName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据集名称, 获取方式请参见[创建数据集](~~478160~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'dataset001',
          ),
        ),
        2 => 
        array (
          'name' => 'From',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '源cluster',
            'description' => '源聚类分组ID，From和Froms至少有一个有值，并且不允许同时有值。',
            'type' => 'string',
            'required' => false,
            'example' => 'Cluster-2ab85905-23ba-4632-b2d8-1c21cfe****',
          ),
        ),
        3 => 
        array (
          'name' => 'To',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '目的cluster',
            'description' => '目的聚类分组ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'Cluster-4a3a71c1-c092-4788-8826-2f65d17****',
          ),
        ),
        4 => 
        array (
          'name' => 'UserData',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用户自定义信息，在异步消息通知中会为您返回，用于方便您系统内对消息通知进行关联处理。最大长度为2048字节。',
            'type' => 'string',
            'required' => false,
            'example' => '{"ID": "user1","Name": "test-user1","Avatar": "http://example.com?id=user1"}',
          ),
        ),
        5 => 
        array (
          'name' => 'Tags',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '自定义标签，用于对异步任务进行搜索、过滤。',
            'type' => 'object',
            'required' => false,
            'example' => '{"key":"val"}',
          ),
        ),
        6 => 
        array (
          'name' => 'Froms',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '源聚类分组ID列表，From和Froms至少有一个有值，并且不允许同时有值。长度不超过100。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '单个源聚类分组ID。',
              'type' => 'string',
              'required' => false,
              'example' => 'Cluster-2ab85905-23ba-4632-b2d8-1c21cfe****
',
            ),
            'required' => false,
          ),
        ),
        7 => 
        array (
          'name' => 'Notification',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '消息通知配置，详细内容请单击Notification查看，异步通知消息格式请参见[异步通知消息格式](~~471456~~)。',
            'required' => false,
            '$ref' => '#/components/schemas/Notification',
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
            'description' => '响应结构体。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '当次请求的Request ID。',
                'type' => 'string',
                'example' => 'CA995EFD-083D-4F40-BE8A-BDF75FF****',
              ),
              'TaskId' => 
              array (
                'description' => '任务ID。',
                'type' => 'string',
                'example' => '92376fbb-171f-4259-913f-705f7ee0****',
              ),
              'EventId' => 
              array (
                'description' => '事件ID。',
                'type' => 'string',
                'example' => '0ED-1Bz8z71k5TtsUejT4UJ16E****',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"CA995EFD-083D-4F40-BE8A-BDF75FF****\\",\\n  \\"TaskId\\": \\"92376fbb-171f-4259-913f-705f7ee0****\\",\\n  \\"EventId\\": \\"0ED-1Bz8z71k5TtsUejT4UJ16E****\\"\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '合并人物聚类',
      'description' => '- **请确保在使用该接口前，已充分了解智能媒体管理产品的收费方式和[价格](~~477042~~)。**
- 调用该接口前，请确保您已通过创建人物人脸聚类任务（[CreateFigureClusteringTask](~~478180~~)）将数据集中的所有人脸都进行过聚类。
- 将无关的分组进行合并，合并后会影响目标分组的特征值，导致创建人物人脸聚类任务对增量数据可能出现分组不准确的情况。
- 该接口为异步接口，获取任务开始执行后，任务信息只保存7天，超过7天则无法再获取。调用[GetTask](~~478241~~)或[ListTasks](~~478242~~)接口获取返回的`TaskId`，查看任务信息。也可以通过设置[Notification](~~471456~~)消息通知参数，通过消息通知获取任务信息。',
    ),
    'GetFigureCluster' => 
    array (
      'summary' => '获取人脸分组的基本信息，包括创建时间、照片数量、分组封面等信息。',
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
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'get',
        'abilityTreeCode' => '103841',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREimm3DNGQD',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ProjectName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '项目名称，获取方式请参见[CreateProject](~~CreateProject~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'immtest',
          ),
        ),
        1 => 
        array (
          'name' => 'DatasetName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据集名称，获取方式请参见[CreateDataset](~~CreateDataset~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'dataset001',
          ),
        ),
        2 => 
        array (
          'name' => 'ObjectId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '聚类分组的对象ID。获取方式请参见[QueryFigureClusters](~~QueryFigureClusters~~)返回的人脸分组信息。',
            'type' => 'string',
            'required' => true,
            'example' => 'Cluster-1f2e1a2c-d5ee-4bc5-84f6-fef94ea****',
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
            'description' => '响应结构体',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '当次请求的Request ID。',
                'type' => 'string',
                'example' => '5F74C5C9-5AC0-49F9-914D-E01589D3****',
              ),
              'FigureCluster' => 
              array (
                'description' => '该聚类分组的具体信息。',
                '$ref' => '#/components/schemas/FigureCluster',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"5F74C5C9-5AC0-49F9-914D-E01589D3****\\",\\n  \\"FigureCluster\\": {\\n    \\"OwnerId\\": \\"\\",\\n    \\"ProjectName\\": \\"\\",\\n    \\"DatasetName\\": \\"\\",\\n    \\"ObjectType\\": \\"\\",\\n    \\"ObjectId\\": \\"\\",\\n    \\"UpdateTime\\": \\"\\",\\n    \\"CreateTime\\": \\"\\",\\n    \\"Name\\": \\"\\",\\n    \\"Gender\\": \\"\\",\\n    \\"FaceCount\\": 0,\\n    \\"ImageCount\\": 0,\\n    \\"VideoCount\\": 0,\\n    \\"AverageAge\\": 0,\\n    \\"MinAge\\": 0,\\n    \\"MaxAge\\": 0,\\n    \\"Cover\\": {\\n      \\"OwnerId\\": \\"\\",\\n      \\"ProjectName\\": \\"\\",\\n      \\"DatasetName\\": \\"\\",\\n      \\"ObjectType\\": \\"\\",\\n      \\"ObjectId\\": \\"\\",\\n      \\"UpdateTime\\": \\"\\",\\n      \\"CreateTime\\": \\"\\",\\n      \\"URI\\": \\"\\",\\n      \\"OSSURI\\": \\"\\",\\n      \\"Filename\\": \\"\\",\\n      \\"MediaType\\": \\"\\",\\n      \\"ContentType\\": \\"\\",\\n      \\"Size\\": 0,\\n      \\"FileHash\\": \\"\\",\\n      \\"FileModifiedTime\\": \\"\\",\\n      \\"FileCreateTime\\": \\"\\",\\n      \\"FileAccessTime\\": \\"\\",\\n      \\"ProduceTime\\": \\"\\",\\n      \\"LatLong\\": \\"\\",\\n      \\"Timezone\\": \\"\\",\\n      \\"Addresses\\": [\\n        {\\n          \\"Language\\": \\"\\",\\n          \\"AddressLine\\": \\"\\",\\n          \\"Country\\": \\"\\",\\n          \\"Province\\": \\"\\",\\n          \\"City\\": \\"\\",\\n          \\"District\\": \\"\\",\\n          \\"Township\\": \\"\\"\\n        }\\n      ],\\n      \\"TravelClusterId\\": \\"\\",\\n      \\"Orientation\\": 0,\\n      \\"Figures\\": [\\n        {\\n          \\"FigureId\\": \\"\\",\\n          \\"FigureConfidence\\": 0,\\n          \\"FigureClusterId\\": \\"\\",\\n          \\"FigureClusterConfidence\\": 0,\\n          \\"FigureType\\": \\"\\",\\n          \\"Age\\": 0,\\n          \\"AgeSD\\": 0,\\n          \\"Gender\\": \\"\\",\\n          \\"GenderConfidence\\": 0,\\n          \\"Emotion\\": \\"\\",\\n          \\"EmotionConfidence\\": 0,\\n          \\"FaceQuality\\": 0,\\n          \\"Boundary\\": {\\n            \\"Width\\": 0,\\n            \\"Height\\": 0,\\n            \\"Left\\": 0,\\n            \\"Top\\": 0,\\n            \\"Polygon\\": [\\n              {\\n                \\"X\\": 0,\\n                \\"Y\\": 0\\n              }\\n            ]\\n          },\\n          \\"Mouth\\": \\"\\",\\n          \\"MouthConfidence\\": 0,\\n          \\"Beard\\": \\"\\",\\n          \\"BeardConfidence\\": 0,\\n          \\"Hat\\": \\"\\",\\n          \\"HatConfidence\\": 0,\\n          \\"Mask\\": \\"\\",\\n          \\"MaskConfidence\\": 0,\\n          \\"Glasses\\": \\"\\",\\n          \\"GlassesConfidence\\": 0,\\n          \\"Sharpness\\": 0,\\n          \\"Attractive\\": 0,\\n          \\"HeadPose\\": {\\n            \\"Pitch\\": 0,\\n            \\"Roll\\": 0,\\n            \\"Yaw\\": 0\\n          }\\n        }\\n      ],\\n      \\"FigureCount\\": 0,\\n      \\"Labels\\": [\\n        {\\n          \\"Language\\": \\"\\",\\n          \\"LabelName\\": \\"\\",\\n          \\"LabelLevel\\": 0,\\n          \\"LabelConfidence\\": 0,\\n          \\"ParentLabelName\\": \\"\\",\\n          \\"CentricScore\\": 0\\n        }\\n      ],\\n      \\"Title\\": \\"\\",\\n      \\"ImageWidth\\": 0,\\n      \\"ImageHeight\\": 0,\\n      \\"EXIF\\": \\"\\",\\n      \\"ImageScore\\": {\\n        \\"OverallQualityScore\\": 0\\n      },\\n      \\"CroppingSuggestions\\": [\\n        {\\n          \\"AspectRatio\\": \\"\\",\\n          \\"Confidence\\": 0,\\n          \\"Boundary\\": {\\n            \\"Width\\": 0,\\n            \\"Height\\": 0,\\n            \\"Left\\": 0,\\n            \\"Top\\": 0,\\n            \\"Polygon\\": [\\n              {\\n                \\"X\\": 0,\\n                \\"Y\\": 0\\n              }\\n            ]\\n          }\\n        }\\n      ],\\n      \\"OCRContents\\": [\\n        {\\n          \\"Language\\": \\"\\",\\n          \\"Contents\\": \\"\\",\\n          \\"Confidence\\": 0,\\n          \\"Boundary\\": {\\n            \\"Width\\": 0,\\n            \\"Height\\": 0,\\n            \\"Left\\": 0,\\n            \\"Top\\": 0,\\n            \\"Polygon\\": [\\n              {\\n                \\"X\\": 0,\\n                \\"Y\\": 0\\n              }\\n            ]\\n          }\\n        }\\n      ],\\n      \\"VideoWidth\\": 0,\\n      \\"VideoHeight\\": 0,\\n      \\"VideoStreams\\": [\\n        {\\n          \\"Index\\": 0,\\n          \\"Language\\": \\"\\",\\n          \\"CodecName\\": \\"\\",\\n          \\"CodecLongName\\": \\"\\",\\n          \\"Profile\\": \\"\\",\\n          \\"CodecTimeBase\\": \\"\\",\\n          \\"CodecTagString\\": \\"\\",\\n          \\"CodecTag\\": \\"\\",\\n          \\"Width\\": 0,\\n          \\"Height\\": 0,\\n          \\"HasBFrames\\": 0,\\n          \\"SampleAspectRatio\\": \\"\\",\\n          \\"DisplayAspectRatio\\": \\"\\",\\n          \\"PixelFormat\\": \\"\\",\\n          \\"Level\\": 0,\\n          \\"FrameRate\\": \\"\\",\\n          \\"AverageFrameRate\\": \\"\\",\\n          \\"TimeBase\\": \\"\\",\\n          \\"StartTime\\": 0,\\n          \\"Duration\\": 0,\\n          \\"Bitrate\\": 0,\\n          \\"FrameCount\\": 0,\\n          \\"Rotate\\": \\"\\",\\n          \\"BitDepth\\": 0,\\n          \\"ColorSpace\\": \\"\\",\\n          \\"ColorRange\\": \\"\\",\\n          \\"ColorTransfer\\": \\"\\",\\n          \\"ColorPrimaries\\": \\"\\"\\n        }\\n      ],\\n      \\"Subtitles\\": [\\n        {\\n          \\"Index\\": 0,\\n          \\"Language\\": \\"\\",\\n          \\"CodecName\\": \\"\\",\\n          \\"CodecLongName\\": \\"\\",\\n          \\"CodecTagString\\": \\"\\",\\n          \\"CodecTag\\": \\"\\",\\n          \\"StartTime\\": 0,\\n          \\"Duration\\": 0,\\n          \\"Bitrate\\": 0,\\n          \\"Content\\": \\"\\",\\n          \\"Width\\": 0,\\n          \\"Height\\": 0\\n        }\\n      ],\\n      \\"AudioStreams\\": [\\n        {\\n          \\"Index\\": 0,\\n          \\"Language\\": \\"\\",\\n          \\"CodecName\\": \\"\\",\\n          \\"CodecLongName\\": \\"\\",\\n          \\"CodecTimeBase\\": \\"\\",\\n          \\"CodecTagString\\": \\"\\",\\n          \\"CodecTag\\": \\"\\",\\n          \\"TimeBase\\": \\"\\",\\n          \\"StartTime\\": 0,\\n          \\"Duration\\": 0,\\n          \\"Bitrate\\": 0,\\n          \\"FrameCount\\": 0,\\n          \\"Lyric\\": \\"\\",\\n          \\"SampleFormat\\": \\"\\",\\n          \\"SampleRate\\": 0,\\n          \\"Channels\\": 0,\\n          \\"ChannelLayout\\": \\"\\"\\n        }\\n      ],\\n      \\"Artist\\": \\"\\",\\n      \\"AlbumArtist\\": \\"\\",\\n      \\"AudioCovers\\": [\\n        {\\n          \\"ImageWidth\\": 0,\\n          \\"ImageHeight\\": 0,\\n          \\"EXIF\\": \\"\\",\\n          \\"ImageScore\\": {\\n            \\"OverallQualityScore\\": 0\\n          },\\n          \\"CroppingSuggestions\\": [\\n            {\\n              \\"AspectRatio\\": \\"\\",\\n              \\"Confidence\\": 0\\n            }\\n          ],\\n          \\"OCRContents\\": [\\n            {\\n              \\"Language\\": \\"\\",\\n              \\"Contents\\": \\"\\",\\n              \\"Confidence\\": 0\\n            }\\n          ]\\n        }\\n      ],\\n      \\"Composer\\": \\"\\",\\n      \\"Performer\\": \\"\\",\\n      \\"Language\\": \\"\\",\\n      \\"Album\\": \\"\\",\\n      \\"PageCount\\": 0,\\n      \\"ETag\\": \\"\\",\\n      \\"CacheControl\\": \\"\\",\\n      \\"ContentDisposition\\": \\"\\",\\n      \\"ContentEncoding\\": \\"\\",\\n      \\"ContentLanguage\\": \\"\\",\\n      \\"AccessControlAllowOrigin\\": \\"\\",\\n      \\"AccessControlRequestMethod\\": \\"\\",\\n      \\"ServerSideEncryptionCustomerAlgorithm\\": \\"\\",\\n      \\"ServerSideEncryption\\": \\"\\",\\n      \\"ServerSideDataEncryption\\": \\"\\",\\n      \\"ServerSideEncryptionKeyId\\": \\"\\",\\n      \\"OSSStorageClass\\": \\"\\",\\n      \\"OSSCRC64\\": \\"\\",\\n      \\"ObjectACL\\": \\"\\",\\n      \\"ContentMd5\\": \\"\\",\\n      \\"OSSUserMeta\\": {\\n        \\"test\\": \\"test\\",\\n        \\"test2\\": 1\\n      },\\n      \\"OSSTaggingCount\\": 0,\\n      \\"OSSTagging\\": {\\n        \\"test\\": \\"test\\",\\n        \\"test2\\": 1\\n      },\\n      \\"OSSExpiration\\": \\"\\",\\n      \\"OSSVersionId\\": \\"\\",\\n      \\"OSSDeleteMarker\\": \\"\\",\\n      \\"OSSObjectType\\": \\"\\",\\n      \\"CustomId\\": \\"\\",\\n      \\"CustomLabels\\": {\\n        \\"test\\": \\"test\\",\\n        \\"test2\\": 1\\n      },\\n      \\"StreamCount\\": 0,\\n      \\"ProgramCount\\": 0,\\n      \\"FormatName\\": \\"\\",\\n      \\"FormatLongName\\": \\"\\",\\n      \\"StartTime\\": 0,\\n      \\"Bitrate\\": 0,\\n      \\"Duration\\": 0,\\n      \\"SemanticSimilarity\\": 0,\\n      \\"SemanticTypes\\": [\\n        \\"\\"\\n      ],\\n      \\"Elements\\": [\\n        {\\n          \\"ElementContents\\": [\\n            {\\n              \\"Type\\": \\"\\",\\n              \\"Content\\": \\"\\",\\n              \\"URL\\": \\"\\"\\n            }\\n          ]\\n        }\\n      ],\\n      \\"OCRTexts\\": \\"\\"\\n    },\\n    \\"BaseImages\\": [\\n      {\\n        \\"OwnerId\\": \\"\\",\\n        \\"ProjectName\\": \\"\\",\\n        \\"DatasetName\\": \\"\\",\\n        \\"ObjectType\\": \\"\\",\\n        \\"ObjectId\\": \\"\\",\\n        \\"UpdateTime\\": \\"\\",\\n        \\"CreateTime\\": \\"\\",\\n        \\"URI\\": \\"\\",\\n        \\"OSSURI\\": \\"\\",\\n        \\"Filename\\": \\"\\",\\n        \\"MediaType\\": \\"\\",\\n        \\"ContentType\\": \\"\\",\\n        \\"Size\\": 0,\\n        \\"FileHash\\": \\"\\",\\n        \\"FileModifiedTime\\": \\"\\",\\n        \\"FileCreateTime\\": \\"\\",\\n        \\"FileAccessTime\\": \\"\\",\\n        \\"ProduceTime\\": \\"\\",\\n        \\"LatLong\\": \\"\\",\\n        \\"Timezone\\": \\"\\",\\n        \\"Addresses\\": [\\n          {\\n            \\"Language\\": \\"\\",\\n            \\"AddressLine\\": \\"\\",\\n            \\"Country\\": \\"\\",\\n            \\"Province\\": \\"\\",\\n            \\"City\\": \\"\\",\\n            \\"District\\": \\"\\",\\n            \\"Township\\": \\"\\"\\n          }\\n        ],\\n        \\"TravelClusterId\\": \\"\\",\\n        \\"Orientation\\": 0,\\n        \\"Figures\\": [\\n          {\\n            \\"FigureId\\": \\"\\",\\n            \\"FigureConfidence\\": 0,\\n            \\"FigureClusterId\\": \\"\\",\\n            \\"FigureClusterConfidence\\": 0,\\n            \\"FigureType\\": \\"\\",\\n            \\"Age\\": 0,\\n            \\"AgeSD\\": 0,\\n            \\"Gender\\": \\"\\",\\n            \\"GenderConfidence\\": 0,\\n            \\"Emotion\\": \\"\\",\\n            \\"EmotionConfidence\\": 0,\\n            \\"FaceQuality\\": 0,\\n            \\"Mouth\\": \\"\\",\\n            \\"MouthConfidence\\": 0,\\n            \\"Beard\\": \\"\\",\\n            \\"BeardConfidence\\": 0,\\n            \\"Hat\\": \\"\\",\\n            \\"HatConfidence\\": 0,\\n            \\"Mask\\": \\"\\",\\n            \\"MaskConfidence\\": 0,\\n            \\"Glasses\\": \\"\\",\\n            \\"GlassesConfidence\\": 0,\\n            \\"Sharpness\\": 0,\\n            \\"Attractive\\": 0,\\n            \\"HeadPose\\": {\\n              \\"Pitch\\": 0,\\n              \\"Roll\\": 0,\\n              \\"Yaw\\": 0\\n            }\\n          }\\n        ],\\n        \\"FigureCount\\": 0,\\n        \\"Labels\\": [\\n          {\\n            \\"Language\\": \\"\\",\\n            \\"LabelName\\": \\"\\",\\n            \\"LabelLevel\\": 0,\\n            \\"LabelConfidence\\": 0,\\n            \\"ParentLabelName\\": \\"\\",\\n            \\"CentricScore\\": 0\\n          }\\n        ],\\n        \\"Title\\": \\"\\",\\n        \\"ImageWidth\\": 0,\\n        \\"ImageHeight\\": 0,\\n        \\"EXIF\\": \\"\\",\\n        \\"ImageScore\\": {\\n          \\"OverallQualityScore\\": 0\\n        },\\n        \\"CroppingSuggestions\\": [\\n          {\\n            \\"AspectRatio\\": \\"\\",\\n            \\"Confidence\\": 0\\n          }\\n        ],\\n        \\"OCRContents\\": [\\n          {\\n            \\"Language\\": \\"\\",\\n            \\"Contents\\": \\"\\",\\n            \\"Confidence\\": 0\\n          }\\n        ],\\n        \\"VideoWidth\\": 0,\\n        \\"VideoHeight\\": 0,\\n        \\"VideoStreams\\": [\\n          {\\n            \\"Index\\": 0,\\n            \\"Language\\": \\"\\",\\n            \\"CodecName\\": \\"\\",\\n            \\"CodecLongName\\": \\"\\",\\n            \\"Profile\\": \\"\\",\\n            \\"CodecTimeBase\\": \\"\\",\\n            \\"CodecTagString\\": \\"\\",\\n            \\"CodecTag\\": \\"\\",\\n            \\"Width\\": 0,\\n            \\"Height\\": 0,\\n            \\"HasBFrames\\": 0,\\n            \\"SampleAspectRatio\\": \\"\\",\\n            \\"DisplayAspectRatio\\": \\"\\",\\n            \\"PixelFormat\\": \\"\\",\\n            \\"Level\\": 0,\\n            \\"FrameRate\\": \\"\\",\\n            \\"AverageFrameRate\\": \\"\\",\\n            \\"TimeBase\\": \\"\\",\\n            \\"StartTime\\": 0,\\n            \\"Duration\\": 0,\\n            \\"Bitrate\\": 0,\\n            \\"FrameCount\\": 0,\\n            \\"Rotate\\": \\"\\",\\n            \\"BitDepth\\": 0,\\n            \\"ColorSpace\\": \\"\\",\\n            \\"ColorRange\\": \\"\\",\\n            \\"ColorTransfer\\": \\"\\",\\n            \\"ColorPrimaries\\": \\"\\"\\n          }\\n        ],\\n        \\"Subtitles\\": [\\n          {\\n            \\"Index\\": 0,\\n            \\"Language\\": \\"\\",\\n            \\"CodecName\\": \\"\\",\\n            \\"CodecLongName\\": \\"\\",\\n            \\"CodecTagString\\": \\"\\",\\n            \\"CodecTag\\": \\"\\",\\n            \\"StartTime\\": 0,\\n            \\"Duration\\": 0,\\n            \\"Bitrate\\": 0,\\n            \\"Content\\": \\"\\",\\n            \\"Width\\": 0,\\n            \\"Height\\": 0\\n          }\\n        ],\\n        \\"AudioStreams\\": [\\n          {\\n            \\"Index\\": 0,\\n            \\"Language\\": \\"\\",\\n            \\"CodecName\\": \\"\\",\\n            \\"CodecLongName\\": \\"\\",\\n            \\"CodecTimeBase\\": \\"\\",\\n            \\"CodecTagString\\": \\"\\",\\n            \\"CodecTag\\": \\"\\",\\n            \\"TimeBase\\": \\"\\",\\n            \\"StartTime\\": 0,\\n            \\"Duration\\": 0,\\n            \\"Bitrate\\": 0,\\n            \\"FrameCount\\": 0,\\n            \\"Lyric\\": \\"\\",\\n            \\"SampleFormat\\": \\"\\",\\n            \\"SampleRate\\": 0,\\n            \\"Channels\\": 0,\\n            \\"ChannelLayout\\": \\"\\"\\n          }\\n        ],\\n        \\"Artist\\": \\"\\",\\n        \\"AlbumArtist\\": \\"\\",\\n        \\"AudioCovers\\": [\\n          {\\n            \\"ImageWidth\\": 0,\\n            \\"ImageHeight\\": 0,\\n            \\"EXIF\\": \\"\\",\\n            \\"CroppingSuggestions\\": [],\\n            \\"OCRContents\\": []\\n          }\\n        ],\\n        \\"Composer\\": \\"\\",\\n        \\"Performer\\": \\"\\",\\n        \\"Language\\": \\"\\",\\n        \\"Album\\": \\"\\",\\n        \\"PageCount\\": 0,\\n        \\"ETag\\": \\"\\",\\n        \\"CacheControl\\": \\"\\",\\n        \\"ContentDisposition\\": \\"\\",\\n        \\"ContentEncoding\\": \\"\\",\\n        \\"ContentLanguage\\": \\"\\",\\n        \\"AccessControlAllowOrigin\\": \\"\\",\\n        \\"AccessControlRequestMethod\\": \\"\\",\\n        \\"ServerSideEncryptionCustomerAlgorithm\\": \\"\\",\\n        \\"ServerSideEncryption\\": \\"\\",\\n        \\"ServerSideDataEncryption\\": \\"\\",\\n        \\"ServerSideEncryptionKeyId\\": \\"\\",\\n        \\"OSSStorageClass\\": \\"\\",\\n        \\"OSSCRC64\\": \\"\\",\\n        \\"ObjectACL\\": \\"\\",\\n        \\"ContentMd5\\": \\"\\",\\n        \\"OSSUserMeta\\": {\\n          \\"test\\": \\"test\\",\\n          \\"test2\\": 1\\n        },\\n        \\"OSSTaggingCount\\": 0,\\n        \\"OSSTagging\\": {\\n          \\"test\\": \\"test\\",\\n          \\"test2\\": 1\\n        },\\n        \\"OSSExpiration\\": \\"\\",\\n        \\"OSSVersionId\\": \\"\\",\\n        \\"OSSDeleteMarker\\": \\"\\",\\n        \\"OSSObjectType\\": \\"\\",\\n        \\"CustomId\\": \\"\\",\\n        \\"CustomLabels\\": {\\n          \\"test\\": \\"test\\",\\n          \\"test2\\": 1\\n        },\\n        \\"StreamCount\\": 0,\\n        \\"ProgramCount\\": 0,\\n        \\"FormatName\\": \\"\\",\\n        \\"FormatLongName\\": \\"\\",\\n        \\"StartTime\\": 0,\\n        \\"Bitrate\\": 0,\\n        \\"Duration\\": 0,\\n        \\"SemanticSimilarity\\": 0,\\n        \\"SemanticTypes\\": [\\n          \\"\\"\\n        ],\\n        \\"Elements\\": [\\n          {\\n            \\"ElementContents\\": [\\n              {\\n                \\"Type\\": \\"\\",\\n                \\"Content\\": \\"\\",\\n                \\"URL\\": \\"\\"\\n              }\\n            ]\\n          }\\n        ],\\n        \\"OCRTexts\\": \\"\\"\\n      }\\n    ],\\n    \\"CustomId\\": \\"\\",\\n    \\"CustomLabels\\": {\\n      \\"test\\": \\"test\\",\\n      \\"test2\\": 1\\n    },\\n    \\"MetaLockVersion\\": 0\\n  }\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '获取人物人脸的聚类信息',
      'description' => '- **请确保在使用该接口前，已充分了解智能媒体管理产品的收费方式和[价格](~~477042~~)。**

- 调用该接口前，请确保您已通过创建人脸聚类任务（[CreateFigureClusteringTask](~~CreateFigureClusteringTask~~)）将数据集（[CreateDataset](~~CreateDataset~~)）中所有人脸进行分组。',
    ),
    'QueryFigureClusters' => 
    array (
      'summary' => '根据条件查询人物聚类及其信息。',
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
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'list',
        'abilityTreeCode' => '117066',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREimm3DNGQD',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ProjectName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '项目名称，获取方式请参见[创建项目](~~478153~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'test-project',
          ),
        ),
        1 => 
        array (
          'name' => 'DatasetName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据集名称，获取方式请参见[创建数据集](~~478160~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'test-dataset',
          ),
        ),
        2 => 
        array (
          'name' => 'Sort',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '排序字段',
            'description' => '排序字段。默认为空，表示按照分组ID排序。',
            'type' => 'string',
            'required' => false,
            'enumValueTitles' => 
            array (
              'ImageCount' => '照片数量',
              'VideoCount' => '视频数量',
              'ProjectName' => '项目名称',
              'DatasetName' => '数据集名称',
              'CreateTime' => '分组创建时间',
              'UpdateTime' => '分组更新时间',
              'Gender' => '性别',
              'FaceCount' => '人脸数量',
              'Name' => '分组名称',
            ),
            'example' => 'ImageCount',
          ),
        ),
        3 => 
        array (
          'name' => 'Order',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '升降序',
            'description' => '排序方式。默认为asc。',
            'type' => 'string',
            'required' => false,
            'enumValueTitles' => 
            array (
              'asc' => '升序排序',
              'desc' => '降序排序',
            ),
            'example' => 'asc',
          ),
        ),
        4 => 
        array (
          'name' => 'CustomLabels',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '自定义标签查询条件。',
            'type' => 'string',
            'required' => false,
            'example' => 'key=value',
          ),
        ),
        5 => 
        array (
          'name' => 'MaxResults',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '本次读取的最大数据记录数量，取值范围为0~100。
不设置此参数或者设置为0时，则默认值为100。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '100',
          ),
        ),
        6 => 
        array (
          'name' => 'NextToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '翻页标记，置空表示从头开始。',
            'type' => 'string',
            'required' => false,
            'example' => '10',
          ),
        ),
        7 => 
        array (
          'name' => 'CreateTimeRange',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '人脸聚类分组生成的时间范围。',
            'required' => false,
            '$ref' => '#/components/schemas/TimeRange',
          ),
        ),
        8 => 
        array (
          'name' => 'UpdateTimeRange',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '人脸聚类分组更新的时间范围。',
            'required' => false,
            '$ref' => '#/components/schemas/TimeRange',
          ),
        ),
        9 => 
        array (
          'name' => 'WithTotalCount',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否返回当前查询条件下的所有人脸分组的数量。默认为false，表示不返回分组的数量。',
            'type' => 'boolean',
            'required' => false,
            'enumValueTitles' => 
            array (
            ),
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
            'description' => '响应结构体。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '当次请求的Request ID。',
                'type' => 'string',
                'example' => 'CA995EFD-083D-4F40-BE8A-BDF75FFF****',
              ),
              'NextToken' => 
              array (
                'description' => '翻页标记。',
                'type' => 'string',
                'example' => '10',
              ),
              'FigureClusters' => 
              array (
                'description' => '该聚类分组列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '该聚类分组具体信息。',
                  '$ref' => '#/components/schemas/FigureCluster',
                ),
              ),
              'TotalCount' => 
              array (
                'description' => '当前查询条件下的所有人脸分组数量。',
                'type' => 'integer',
                'format' => 'int64',
                'required' => false,
                'example' => '100',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"CA995EFD-083D-4F40-BE8A-BDF75FFF****\\",\\n  \\"NextToken\\": \\"10\\",\\n  \\"FigureClusters\\": [\\n    {\\n      \\"OwnerId\\": \\"\\",\\n      \\"ProjectName\\": \\"\\",\\n      \\"DatasetName\\": \\"\\",\\n      \\"ObjectType\\": \\"\\",\\n      \\"ObjectId\\": \\"\\",\\n      \\"UpdateTime\\": \\"\\",\\n      \\"CreateTime\\": \\"\\",\\n      \\"Name\\": \\"\\",\\n      \\"Gender\\": \\"\\",\\n      \\"FaceCount\\": 0,\\n      \\"ImageCount\\": 0,\\n      \\"VideoCount\\": 0,\\n      \\"AverageAge\\": 0,\\n      \\"MinAge\\": 0,\\n      \\"MaxAge\\": 0,\\n      \\"Cover\\": {\\n        \\"OwnerId\\": \\"\\",\\n        \\"ProjectName\\": \\"\\",\\n        \\"DatasetName\\": \\"\\",\\n        \\"ObjectType\\": \\"\\",\\n        \\"ObjectId\\": \\"\\",\\n        \\"UpdateTime\\": \\"\\",\\n        \\"CreateTime\\": \\"\\",\\n        \\"URI\\": \\"\\",\\n        \\"OSSURI\\": \\"\\",\\n        \\"Filename\\": \\"\\",\\n        \\"MediaType\\": \\"\\",\\n        \\"ContentType\\": \\"\\",\\n        \\"Size\\": 0,\\n        \\"FileHash\\": \\"\\",\\n        \\"FileModifiedTime\\": \\"\\",\\n        \\"FileCreateTime\\": \\"\\",\\n        \\"FileAccessTime\\": \\"\\",\\n        \\"ProduceTime\\": \\"\\",\\n        \\"LatLong\\": \\"\\",\\n        \\"Timezone\\": \\"\\",\\n        \\"Addresses\\": [\\n          {\\n            \\"Language\\": \\"\\",\\n            \\"AddressLine\\": \\"\\",\\n            \\"Country\\": \\"\\",\\n            \\"Province\\": \\"\\",\\n            \\"City\\": \\"\\",\\n            \\"District\\": \\"\\",\\n            \\"Township\\": \\"\\"\\n          }\\n        ],\\n        \\"TravelClusterId\\": \\"\\",\\n        \\"Orientation\\": 0,\\n        \\"Figures\\": [\\n          {\\n            \\"FigureId\\": \\"\\",\\n            \\"FigureConfidence\\": 0,\\n            \\"FigureClusterId\\": \\"\\",\\n            \\"FigureClusterConfidence\\": 0,\\n            \\"FigureType\\": \\"\\",\\n            \\"Age\\": 0,\\n            \\"AgeSD\\": 0,\\n            \\"Gender\\": \\"\\",\\n            \\"GenderConfidence\\": 0,\\n            \\"Emotion\\": \\"\\",\\n            \\"EmotionConfidence\\": 0,\\n            \\"FaceQuality\\": 0,\\n            \\"Boundary\\": {\\n              \\"Width\\": 0,\\n              \\"Height\\": 0,\\n              \\"Left\\": 0,\\n              \\"Top\\": 0,\\n              \\"Polygon\\": [\\n                {\\n                  \\"X\\": 0,\\n                  \\"Y\\": 0\\n                }\\n              ]\\n            },\\n            \\"Mouth\\": \\"\\",\\n            \\"MouthConfidence\\": 0,\\n            \\"Beard\\": \\"\\",\\n            \\"BeardConfidence\\": 0,\\n            \\"Hat\\": \\"\\",\\n            \\"HatConfidence\\": 0,\\n            \\"Mask\\": \\"\\",\\n            \\"MaskConfidence\\": 0,\\n            \\"Glasses\\": \\"\\",\\n            \\"GlassesConfidence\\": 0,\\n            \\"Sharpness\\": 0,\\n            \\"Attractive\\": 0,\\n            \\"HeadPose\\": {\\n              \\"Pitch\\": 0,\\n              \\"Roll\\": 0,\\n              \\"Yaw\\": 0\\n            }\\n          }\\n        ],\\n        \\"FigureCount\\": 0,\\n        \\"Labels\\": [\\n          {\\n            \\"Language\\": \\"\\",\\n            \\"LabelName\\": \\"\\",\\n            \\"LabelLevel\\": 0,\\n            \\"LabelConfidence\\": 0,\\n            \\"ParentLabelName\\": \\"\\",\\n            \\"CentricScore\\": 0\\n          }\\n        ],\\n        \\"Title\\": \\"\\",\\n        \\"ImageWidth\\": 0,\\n        \\"ImageHeight\\": 0,\\n        \\"EXIF\\": \\"\\",\\n        \\"ImageScore\\": {\\n          \\"OverallQualityScore\\": 0\\n        },\\n        \\"CroppingSuggestions\\": [\\n          {\\n            \\"AspectRatio\\": \\"\\",\\n            \\"Confidence\\": 0,\\n            \\"Boundary\\": {\\n              \\"Width\\": 0,\\n              \\"Height\\": 0,\\n              \\"Left\\": 0,\\n              \\"Top\\": 0,\\n              \\"Polygon\\": [\\n                {\\n                  \\"X\\": 0,\\n                  \\"Y\\": 0\\n                }\\n              ]\\n            }\\n          }\\n        ],\\n        \\"OCRContents\\": [\\n          {\\n            \\"Language\\": \\"\\",\\n            \\"Contents\\": \\"\\",\\n            \\"Confidence\\": 0,\\n            \\"Boundary\\": {\\n              \\"Width\\": 0,\\n              \\"Height\\": 0,\\n              \\"Left\\": 0,\\n              \\"Top\\": 0,\\n              \\"Polygon\\": [\\n                {\\n                  \\"X\\": 0,\\n                  \\"Y\\": 0\\n                }\\n              ]\\n            }\\n          }\\n        ],\\n        \\"VideoWidth\\": 0,\\n        \\"VideoHeight\\": 0,\\n        \\"VideoStreams\\": [\\n          {\\n            \\"Index\\": 0,\\n            \\"Language\\": \\"\\",\\n            \\"CodecName\\": \\"\\",\\n            \\"CodecLongName\\": \\"\\",\\n            \\"Profile\\": \\"\\",\\n            \\"CodecTimeBase\\": \\"\\",\\n            \\"CodecTagString\\": \\"\\",\\n            \\"CodecTag\\": \\"\\",\\n            \\"Width\\": 0,\\n            \\"Height\\": 0,\\n            \\"HasBFrames\\": 0,\\n            \\"SampleAspectRatio\\": \\"\\",\\n            \\"DisplayAspectRatio\\": \\"\\",\\n            \\"PixelFormat\\": \\"\\",\\n            \\"Level\\": 0,\\n            \\"FrameRate\\": \\"\\",\\n            \\"AverageFrameRate\\": \\"\\",\\n            \\"TimeBase\\": \\"\\",\\n            \\"StartTime\\": 0,\\n            \\"Duration\\": 0,\\n            \\"Bitrate\\": 0,\\n            \\"FrameCount\\": 0,\\n            \\"Rotate\\": \\"\\",\\n            \\"BitDepth\\": 0,\\n            \\"ColorSpace\\": \\"\\",\\n            \\"ColorRange\\": \\"\\",\\n            \\"ColorTransfer\\": \\"\\",\\n            \\"ColorPrimaries\\": \\"\\"\\n          }\\n        ],\\n        \\"Subtitles\\": [\\n          {\\n            \\"Index\\": 0,\\n            \\"Language\\": \\"\\",\\n            \\"CodecName\\": \\"\\",\\n            \\"CodecLongName\\": \\"\\",\\n            \\"CodecTagString\\": \\"\\",\\n            \\"CodecTag\\": \\"\\",\\n            \\"StartTime\\": 0,\\n            \\"Duration\\": 0,\\n            \\"Bitrate\\": 0,\\n            \\"Content\\": \\"\\",\\n            \\"Width\\": 0,\\n            \\"Height\\": 0\\n          }\\n        ],\\n        \\"AudioStreams\\": [\\n          {\\n            \\"Index\\": 0,\\n            \\"Language\\": \\"\\",\\n            \\"CodecName\\": \\"\\",\\n            \\"CodecLongName\\": \\"\\",\\n            \\"CodecTimeBase\\": \\"\\",\\n            \\"CodecTagString\\": \\"\\",\\n            \\"CodecTag\\": \\"\\",\\n            \\"TimeBase\\": \\"\\",\\n            \\"StartTime\\": 0,\\n            \\"Duration\\": 0,\\n            \\"Bitrate\\": 0,\\n            \\"FrameCount\\": 0,\\n            \\"Lyric\\": \\"\\",\\n            \\"SampleFormat\\": \\"\\",\\n            \\"SampleRate\\": 0,\\n            \\"Channels\\": 0,\\n            \\"ChannelLayout\\": \\"\\"\\n          }\\n        ],\\n        \\"Artist\\": \\"\\",\\n        \\"AlbumArtist\\": \\"\\",\\n        \\"AudioCovers\\": [\\n          {\\n            \\"ImageWidth\\": 0,\\n            \\"ImageHeight\\": 0,\\n            \\"EXIF\\": \\"\\",\\n            \\"ImageScore\\": {\\n              \\"OverallQualityScore\\": 0\\n            },\\n            \\"CroppingSuggestions\\": [\\n              {\\n                \\"AspectRatio\\": \\"\\",\\n                \\"Confidence\\": 0\\n              }\\n            ],\\n            \\"OCRContents\\": [\\n              {\\n                \\"Language\\": \\"\\",\\n                \\"Contents\\": \\"\\",\\n                \\"Confidence\\": 0\\n              }\\n            ]\\n          }\\n        ],\\n        \\"Composer\\": \\"\\",\\n        \\"Performer\\": \\"\\",\\n        \\"Language\\": \\"\\",\\n        \\"Album\\": \\"\\",\\n        \\"PageCount\\": 0,\\n        \\"ETag\\": \\"\\",\\n        \\"CacheControl\\": \\"\\",\\n        \\"ContentDisposition\\": \\"\\",\\n        \\"ContentEncoding\\": \\"\\",\\n        \\"ContentLanguage\\": \\"\\",\\n        \\"AccessControlAllowOrigin\\": \\"\\",\\n        \\"AccessControlRequestMethod\\": \\"\\",\\n        \\"ServerSideEncryptionCustomerAlgorithm\\": \\"\\",\\n        \\"ServerSideEncryption\\": \\"\\",\\n        \\"ServerSideDataEncryption\\": \\"\\",\\n        \\"ServerSideEncryptionKeyId\\": \\"\\",\\n        \\"OSSStorageClass\\": \\"\\",\\n        \\"OSSCRC64\\": \\"\\",\\n        \\"ObjectACL\\": \\"\\",\\n        \\"ContentMd5\\": \\"\\",\\n        \\"OSSUserMeta\\": {\\n          \\"test\\": \\"test\\",\\n          \\"test2\\": 1\\n        },\\n        \\"OSSTaggingCount\\": 0,\\n        \\"OSSTagging\\": {\\n          \\"test\\": \\"test\\",\\n          \\"test2\\": 1\\n        },\\n        \\"OSSExpiration\\": \\"\\",\\n        \\"OSSVersionId\\": \\"\\",\\n        \\"OSSDeleteMarker\\": \\"\\",\\n        \\"OSSObjectType\\": \\"\\",\\n        \\"CustomId\\": \\"\\",\\n        \\"CustomLabels\\": {\\n          \\"test\\": \\"test\\",\\n          \\"test2\\": 1\\n        },\\n        \\"StreamCount\\": 0,\\n        \\"ProgramCount\\": 0,\\n        \\"FormatName\\": \\"\\",\\n        \\"FormatLongName\\": \\"\\",\\n        \\"StartTime\\": 0,\\n        \\"Bitrate\\": 0,\\n        \\"Duration\\": 0,\\n        \\"SemanticSimilarity\\": 0,\\n        \\"SemanticTypes\\": [\\n          \\"\\"\\n        ],\\n        \\"Elements\\": [\\n          {\\n            \\"ElementContents\\": [\\n              {\\n                \\"Type\\": \\"\\",\\n                \\"Content\\": \\"\\",\\n                \\"URL\\": \\"\\"\\n              }\\n            ]\\n          }\\n        ],\\n        \\"OCRTexts\\": \\"\\"\\n      },\\n      \\"BaseImages\\": [\\n        {\\n          \\"OwnerId\\": \\"\\",\\n          \\"ProjectName\\": \\"\\",\\n          \\"DatasetName\\": \\"\\",\\n          \\"ObjectType\\": \\"\\",\\n          \\"ObjectId\\": \\"\\",\\n          \\"UpdateTime\\": \\"\\",\\n          \\"CreateTime\\": \\"\\",\\n          \\"URI\\": \\"\\",\\n          \\"OSSURI\\": \\"\\",\\n          \\"Filename\\": \\"\\",\\n          \\"MediaType\\": \\"\\",\\n          \\"ContentType\\": \\"\\",\\n          \\"Size\\": 0,\\n          \\"FileHash\\": \\"\\",\\n          \\"FileModifiedTime\\": \\"\\",\\n          \\"FileCreateTime\\": \\"\\",\\n          \\"FileAccessTime\\": \\"\\",\\n          \\"ProduceTime\\": \\"\\",\\n          \\"LatLong\\": \\"\\",\\n          \\"Timezone\\": \\"\\",\\n          \\"Addresses\\": [\\n            {\\n              \\"Language\\": \\"\\",\\n              \\"AddressLine\\": \\"\\",\\n              \\"Country\\": \\"\\",\\n              \\"Province\\": \\"\\",\\n              \\"City\\": \\"\\",\\n              \\"District\\": \\"\\",\\n              \\"Township\\": \\"\\"\\n            }\\n          ],\\n          \\"TravelClusterId\\": \\"\\",\\n          \\"Orientation\\": 0,\\n          \\"Figures\\": [\\n            {\\n              \\"FigureId\\": \\"\\",\\n              \\"FigureConfidence\\": 0,\\n              \\"FigureClusterId\\": \\"\\",\\n              \\"FigureClusterConfidence\\": 0,\\n              \\"FigureType\\": \\"\\",\\n              \\"Age\\": 0,\\n              \\"AgeSD\\": 0,\\n              \\"Gender\\": \\"\\",\\n              \\"GenderConfidence\\": 0,\\n              \\"Emotion\\": \\"\\",\\n              \\"EmotionConfidence\\": 0,\\n              \\"FaceQuality\\": 0,\\n              \\"Mouth\\": \\"\\",\\n              \\"MouthConfidence\\": 0,\\n              \\"Beard\\": \\"\\",\\n              \\"BeardConfidence\\": 0,\\n              \\"Hat\\": \\"\\",\\n              \\"HatConfidence\\": 0,\\n              \\"Mask\\": \\"\\",\\n              \\"MaskConfidence\\": 0,\\n              \\"Glasses\\": \\"\\",\\n              \\"GlassesConfidence\\": 0,\\n              \\"Sharpness\\": 0,\\n              \\"Attractive\\": 0,\\n              \\"HeadPose\\": {\\n                \\"Pitch\\": 0,\\n                \\"Roll\\": 0,\\n                \\"Yaw\\": 0\\n              }\\n            }\\n          ],\\n          \\"FigureCount\\": 0,\\n          \\"Labels\\": [\\n            {\\n              \\"Language\\": \\"\\",\\n              \\"LabelName\\": \\"\\",\\n              \\"LabelLevel\\": 0,\\n              \\"LabelConfidence\\": 0,\\n              \\"ParentLabelName\\": \\"\\",\\n              \\"CentricScore\\": 0\\n            }\\n          ],\\n          \\"Title\\": \\"\\",\\n          \\"ImageWidth\\": 0,\\n          \\"ImageHeight\\": 0,\\n          \\"EXIF\\": \\"\\",\\n          \\"ImageScore\\": {\\n            \\"OverallQualityScore\\": 0\\n          },\\n          \\"CroppingSuggestions\\": [\\n            {\\n              \\"AspectRatio\\": \\"\\",\\n              \\"Confidence\\": 0\\n            }\\n          ],\\n          \\"OCRContents\\": [\\n            {\\n              \\"Language\\": \\"\\",\\n              \\"Contents\\": \\"\\",\\n              \\"Confidence\\": 0\\n            }\\n          ],\\n          \\"VideoWidth\\": 0,\\n          \\"VideoHeight\\": 0,\\n          \\"VideoStreams\\": [\\n            {\\n              \\"Index\\": 0,\\n              \\"Language\\": \\"\\",\\n              \\"CodecName\\": \\"\\",\\n              \\"CodecLongName\\": \\"\\",\\n              \\"Profile\\": \\"\\",\\n              \\"CodecTimeBase\\": \\"\\",\\n              \\"CodecTagString\\": \\"\\",\\n              \\"CodecTag\\": \\"\\",\\n              \\"Width\\": 0,\\n              \\"Height\\": 0,\\n              \\"HasBFrames\\": 0,\\n              \\"SampleAspectRatio\\": \\"\\",\\n              \\"DisplayAspectRatio\\": \\"\\",\\n              \\"PixelFormat\\": \\"\\",\\n              \\"Level\\": 0,\\n              \\"FrameRate\\": \\"\\",\\n              \\"AverageFrameRate\\": \\"\\",\\n              \\"TimeBase\\": \\"\\",\\n              \\"StartTime\\": 0,\\n              \\"Duration\\": 0,\\n              \\"Bitrate\\": 0,\\n              \\"FrameCount\\": 0,\\n              \\"Rotate\\": \\"\\",\\n              \\"BitDepth\\": 0,\\n              \\"ColorSpace\\": \\"\\",\\n              \\"ColorRange\\": \\"\\",\\n              \\"ColorTransfer\\": \\"\\",\\n              \\"ColorPrimaries\\": \\"\\"\\n            }\\n          ],\\n          \\"Subtitles\\": [\\n            {\\n              \\"Index\\": 0,\\n              \\"Language\\": \\"\\",\\n              \\"CodecName\\": \\"\\",\\n              \\"CodecLongName\\": \\"\\",\\n              \\"CodecTagString\\": \\"\\",\\n              \\"CodecTag\\": \\"\\",\\n              \\"StartTime\\": 0,\\n              \\"Duration\\": 0,\\n              \\"Bitrate\\": 0,\\n              \\"Content\\": \\"\\",\\n              \\"Width\\": 0,\\n              \\"Height\\": 0\\n            }\\n          ],\\n          \\"AudioStreams\\": [\\n            {\\n              \\"Index\\": 0,\\n              \\"Language\\": \\"\\",\\n              \\"CodecName\\": \\"\\",\\n              \\"CodecLongName\\": \\"\\",\\n              \\"CodecTimeBase\\": \\"\\",\\n              \\"CodecTagString\\": \\"\\",\\n              \\"CodecTag\\": \\"\\",\\n              \\"TimeBase\\": \\"\\",\\n              \\"StartTime\\": 0,\\n              \\"Duration\\": 0,\\n              \\"Bitrate\\": 0,\\n              \\"FrameCount\\": 0,\\n              \\"Lyric\\": \\"\\",\\n              \\"SampleFormat\\": \\"\\",\\n              \\"SampleRate\\": 0,\\n              \\"Channels\\": 0,\\n              \\"ChannelLayout\\": \\"\\"\\n            }\\n          ],\\n          \\"Artist\\": \\"\\",\\n          \\"AlbumArtist\\": \\"\\",\\n          \\"AudioCovers\\": [\\n            {\\n              \\"ImageWidth\\": 0,\\n              \\"ImageHeight\\": 0,\\n              \\"EXIF\\": \\"\\",\\n              \\"CroppingSuggestions\\": [],\\n              \\"OCRContents\\": []\\n            }\\n          ],\\n          \\"Composer\\": \\"\\",\\n          \\"Performer\\": \\"\\",\\n          \\"Language\\": \\"\\",\\n          \\"Album\\": \\"\\",\\n          \\"PageCount\\": 0,\\n          \\"ETag\\": \\"\\",\\n          \\"CacheControl\\": \\"\\",\\n          \\"ContentDisposition\\": \\"\\",\\n          \\"ContentEncoding\\": \\"\\",\\n          \\"ContentLanguage\\": \\"\\",\\n          \\"AccessControlAllowOrigin\\": \\"\\",\\n          \\"AccessControlRequestMethod\\": \\"\\",\\n          \\"ServerSideEncryptionCustomerAlgorithm\\": \\"\\",\\n          \\"ServerSideEncryption\\": \\"\\",\\n          \\"ServerSideDataEncryption\\": \\"\\",\\n          \\"ServerSideEncryptionKeyId\\": \\"\\",\\n          \\"OSSStorageClass\\": \\"\\",\\n          \\"OSSCRC64\\": \\"\\",\\n          \\"ObjectACL\\": \\"\\",\\n          \\"ContentMd5\\": \\"\\",\\n          \\"OSSUserMeta\\": {\\n            \\"test\\": \\"test\\",\\n            \\"test2\\": 1\\n          },\\n          \\"OSSTaggingCount\\": 0,\\n          \\"OSSTagging\\": {\\n            \\"test\\": \\"test\\",\\n            \\"test2\\": 1\\n          },\\n          \\"OSSExpiration\\": \\"\\",\\n          \\"OSSVersionId\\": \\"\\",\\n          \\"OSSDeleteMarker\\": \\"\\",\\n          \\"OSSObjectType\\": \\"\\",\\n          \\"CustomId\\": \\"\\",\\n          \\"CustomLabels\\": {\\n            \\"test\\": \\"test\\",\\n            \\"test2\\": 1\\n          },\\n          \\"StreamCount\\": 0,\\n          \\"ProgramCount\\": 0,\\n          \\"FormatName\\": \\"\\",\\n          \\"FormatLongName\\": \\"\\",\\n          \\"StartTime\\": 0,\\n          \\"Bitrate\\": 0,\\n          \\"Duration\\": 0,\\n          \\"SemanticSimilarity\\": 0,\\n          \\"SemanticTypes\\": [\\n            \\"\\"\\n          ],\\n          \\"Elements\\": [\\n            {\\n              \\"ElementContents\\": [\\n                {\\n                  \\"Type\\": \\"\\",\\n                  \\"Content\\": \\"\\",\\n                  \\"URL\\": \\"\\"\\n                }\\n              ]\\n            }\\n          ],\\n          \\"OCRTexts\\": \\"\\"\\n        }\\n      ],\\n      \\"CustomId\\": \\"\\",\\n      \\"CustomLabels\\": {\\n        \\"test\\": \\"test\\",\\n        \\"test2\\": 1\\n      },\\n      \\"MetaLockVersion\\": 0\\n    }\\n  ],\\n  \\"TotalCount\\": 100\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '查询人物聚类',
      'description' => '- **请确保在使用该接口前，已充分了解智能媒体管理产品的收费方式和[价格](~~477042~~)。**

-  调用该接口前，请确保您已通过创建人脸聚类任务（[CreateFigureClusteringTask](~~CreateFigureClusteringTask~~)）将数据集（[CreateDataset](~~CreateDataset~~)）中所有人脸进行分组。',
    ),
    'BatchGetFigureCluster' => 
    array (
      'summary' => '批量获取人物聚类及其信息。',
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
        'operationType' => 'get',
        'abilityTreeCode' => '166908',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREimm3DNGQD',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ProjectName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '项目名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'test-project',
          ),
        ),
        1 => 
        array (
          'name' => 'DatasetName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据集名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'test-dataset',
          ),
        ),
        2 => 
        array (
          'name' => 'ObjectIds',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '分组对象ID数组。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '分组对象ID。',
              'type' => 'string',
              'required' => false,
              'example' => 'Cluster-99b1c333-86dc-45da-8c6****',
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
                'example' => 'CA995EFD-083D-4F40-BE8A-BDF75FFF****',
              ),
              'FigureClusters' => 
              array (
                'description' => '该聚类分组列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '该聚类分组具体信息。',
                  '$ref' => '#/components/schemas/FigureCluster',
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"CA995EFD-083D-4F40-BE8A-BDF75FFF****\\",\\n  \\"FigureClusters\\": [\\n    {\\n      \\"OwnerId\\": \\"\\",\\n      \\"ProjectName\\": \\"\\",\\n      \\"DatasetName\\": \\"\\",\\n      \\"ObjectType\\": \\"\\",\\n      \\"ObjectId\\": \\"\\",\\n      \\"UpdateTime\\": \\"\\",\\n      \\"CreateTime\\": \\"\\",\\n      \\"Name\\": \\"\\",\\n      \\"Gender\\": \\"\\",\\n      \\"FaceCount\\": 0,\\n      \\"ImageCount\\": 0,\\n      \\"VideoCount\\": 0,\\n      \\"AverageAge\\": 0,\\n      \\"MinAge\\": 0,\\n      \\"MaxAge\\": 0,\\n      \\"Cover\\": {\\n        \\"OwnerId\\": \\"\\",\\n        \\"ProjectName\\": \\"\\",\\n        \\"DatasetName\\": \\"\\",\\n        \\"ObjectType\\": \\"\\",\\n        \\"ObjectId\\": \\"\\",\\n        \\"UpdateTime\\": \\"\\",\\n        \\"CreateTime\\": \\"\\",\\n        \\"URI\\": \\"\\",\\n        \\"OSSURI\\": \\"\\",\\n        \\"Filename\\": \\"\\",\\n        \\"MediaType\\": \\"\\",\\n        \\"ContentType\\": \\"\\",\\n        \\"Size\\": 0,\\n        \\"FileHash\\": \\"\\",\\n        \\"FileModifiedTime\\": \\"\\",\\n        \\"FileCreateTime\\": \\"\\",\\n        \\"FileAccessTime\\": \\"\\",\\n        \\"ProduceTime\\": \\"\\",\\n        \\"LatLong\\": \\"\\",\\n        \\"Timezone\\": \\"\\",\\n        \\"Addresses\\": [\\n          {\\n            \\"Language\\": \\"\\",\\n            \\"AddressLine\\": \\"\\",\\n            \\"Country\\": \\"\\",\\n            \\"Province\\": \\"\\",\\n            \\"City\\": \\"\\",\\n            \\"District\\": \\"\\",\\n            \\"Township\\": \\"\\"\\n          }\\n        ],\\n        \\"TravelClusterId\\": \\"\\",\\n        \\"Orientation\\": 0,\\n        \\"Figures\\": [\\n          {\\n            \\"FigureId\\": \\"\\",\\n            \\"FigureConfidence\\": 0,\\n            \\"FigureClusterId\\": \\"\\",\\n            \\"FigureClusterConfidence\\": 0,\\n            \\"FigureType\\": \\"\\",\\n            \\"Age\\": 0,\\n            \\"AgeSD\\": 0,\\n            \\"Gender\\": \\"\\",\\n            \\"GenderConfidence\\": 0,\\n            \\"Emotion\\": \\"\\",\\n            \\"EmotionConfidence\\": 0,\\n            \\"FaceQuality\\": 0,\\n            \\"Boundary\\": {\\n              \\"Width\\": 0,\\n              \\"Height\\": 0,\\n              \\"Left\\": 0,\\n              \\"Top\\": 0,\\n              \\"Polygon\\": [\\n                {\\n                  \\"X\\": 0,\\n                  \\"Y\\": 0\\n                }\\n              ]\\n            },\\n            \\"Mouth\\": \\"\\",\\n            \\"MouthConfidence\\": 0,\\n            \\"Beard\\": \\"\\",\\n            \\"BeardConfidence\\": 0,\\n            \\"Hat\\": \\"\\",\\n            \\"HatConfidence\\": 0,\\n            \\"Mask\\": \\"\\",\\n            \\"MaskConfidence\\": 0,\\n            \\"Glasses\\": \\"\\",\\n            \\"GlassesConfidence\\": 0,\\n            \\"Sharpness\\": 0,\\n            \\"Attractive\\": 0,\\n            \\"HeadPose\\": {\\n              \\"Pitch\\": 0,\\n              \\"Roll\\": 0,\\n              \\"Yaw\\": 0\\n            }\\n          }\\n        ],\\n        \\"FigureCount\\": 0,\\n        \\"Labels\\": [\\n          {\\n            \\"Language\\": \\"\\",\\n            \\"LabelName\\": \\"\\",\\n            \\"LabelLevel\\": 0,\\n            \\"LabelConfidence\\": 0,\\n            \\"ParentLabelName\\": \\"\\",\\n            \\"CentricScore\\": 0\\n          }\\n        ],\\n        \\"Title\\": \\"\\",\\n        \\"ImageWidth\\": 0,\\n        \\"ImageHeight\\": 0,\\n        \\"EXIF\\": \\"\\",\\n        \\"ImageScore\\": {\\n          \\"OverallQualityScore\\": 0\\n        },\\n        \\"CroppingSuggestions\\": [\\n          {\\n            \\"AspectRatio\\": \\"\\",\\n            \\"Confidence\\": 0,\\n            \\"Boundary\\": {\\n              \\"Width\\": 0,\\n              \\"Height\\": 0,\\n              \\"Left\\": 0,\\n              \\"Top\\": 0,\\n              \\"Polygon\\": [\\n                {\\n                  \\"X\\": 0,\\n                  \\"Y\\": 0\\n                }\\n              ]\\n            }\\n          }\\n        ],\\n        \\"OCRContents\\": [\\n          {\\n            \\"Language\\": \\"\\",\\n            \\"Contents\\": \\"\\",\\n            \\"Confidence\\": 0,\\n            \\"Boundary\\": {\\n              \\"Width\\": 0,\\n              \\"Height\\": 0,\\n              \\"Left\\": 0,\\n              \\"Top\\": 0,\\n              \\"Polygon\\": [\\n                {\\n                  \\"X\\": 0,\\n                  \\"Y\\": 0\\n                }\\n              ]\\n            }\\n          }\\n        ],\\n        \\"VideoWidth\\": 0,\\n        \\"VideoHeight\\": 0,\\n        \\"VideoStreams\\": [\\n          {\\n            \\"Index\\": 0,\\n            \\"Language\\": \\"\\",\\n            \\"CodecName\\": \\"\\",\\n            \\"CodecLongName\\": \\"\\",\\n            \\"Profile\\": \\"\\",\\n            \\"CodecTimeBase\\": \\"\\",\\n            \\"CodecTagString\\": \\"\\",\\n            \\"CodecTag\\": \\"\\",\\n            \\"Width\\": 0,\\n            \\"Height\\": 0,\\n            \\"HasBFrames\\": 0,\\n            \\"SampleAspectRatio\\": \\"\\",\\n            \\"DisplayAspectRatio\\": \\"\\",\\n            \\"PixelFormat\\": \\"\\",\\n            \\"Level\\": 0,\\n            \\"FrameRate\\": \\"\\",\\n            \\"AverageFrameRate\\": \\"\\",\\n            \\"TimeBase\\": \\"\\",\\n            \\"StartTime\\": 0,\\n            \\"Duration\\": 0,\\n            \\"Bitrate\\": 0,\\n            \\"FrameCount\\": 0,\\n            \\"Rotate\\": \\"\\",\\n            \\"BitDepth\\": 0,\\n            \\"ColorSpace\\": \\"\\",\\n            \\"ColorRange\\": \\"\\",\\n            \\"ColorTransfer\\": \\"\\",\\n            \\"ColorPrimaries\\": \\"\\"\\n          }\\n        ],\\n        \\"Subtitles\\": [\\n          {\\n            \\"Index\\": 0,\\n            \\"Language\\": \\"\\",\\n            \\"CodecName\\": \\"\\",\\n            \\"CodecLongName\\": \\"\\",\\n            \\"CodecTagString\\": \\"\\",\\n            \\"CodecTag\\": \\"\\",\\n            \\"StartTime\\": 0,\\n            \\"Duration\\": 0,\\n            \\"Bitrate\\": 0,\\n            \\"Content\\": \\"\\",\\n            \\"Width\\": 0,\\n            \\"Height\\": 0\\n          }\\n        ],\\n        \\"AudioStreams\\": [\\n          {\\n            \\"Index\\": 0,\\n            \\"Language\\": \\"\\",\\n            \\"CodecName\\": \\"\\",\\n            \\"CodecLongName\\": \\"\\",\\n            \\"CodecTimeBase\\": \\"\\",\\n            \\"CodecTagString\\": \\"\\",\\n            \\"CodecTag\\": \\"\\",\\n            \\"TimeBase\\": \\"\\",\\n            \\"StartTime\\": 0,\\n            \\"Duration\\": 0,\\n            \\"Bitrate\\": 0,\\n            \\"FrameCount\\": 0,\\n            \\"Lyric\\": \\"\\",\\n            \\"SampleFormat\\": \\"\\",\\n            \\"SampleRate\\": 0,\\n            \\"Channels\\": 0,\\n            \\"ChannelLayout\\": \\"\\"\\n          }\\n        ],\\n        \\"Artist\\": \\"\\",\\n        \\"AlbumArtist\\": \\"\\",\\n        \\"AudioCovers\\": [\\n          {\\n            \\"ImageWidth\\": 0,\\n            \\"ImageHeight\\": 0,\\n            \\"EXIF\\": \\"\\",\\n            \\"ImageScore\\": {\\n              \\"OverallQualityScore\\": 0\\n            },\\n            \\"CroppingSuggestions\\": [\\n              {\\n                \\"AspectRatio\\": \\"\\",\\n                \\"Confidence\\": 0\\n              }\\n            ],\\n            \\"OCRContents\\": [\\n              {\\n                \\"Language\\": \\"\\",\\n                \\"Contents\\": \\"\\",\\n                \\"Confidence\\": 0\\n              }\\n            ]\\n          }\\n        ],\\n        \\"Composer\\": \\"\\",\\n        \\"Performer\\": \\"\\",\\n        \\"Language\\": \\"\\",\\n        \\"Album\\": \\"\\",\\n        \\"PageCount\\": 0,\\n        \\"ETag\\": \\"\\",\\n        \\"CacheControl\\": \\"\\",\\n        \\"ContentDisposition\\": \\"\\",\\n        \\"ContentEncoding\\": \\"\\",\\n        \\"ContentLanguage\\": \\"\\",\\n        \\"AccessControlAllowOrigin\\": \\"\\",\\n        \\"AccessControlRequestMethod\\": \\"\\",\\n        \\"ServerSideEncryptionCustomerAlgorithm\\": \\"\\",\\n        \\"ServerSideEncryption\\": \\"\\",\\n        \\"ServerSideDataEncryption\\": \\"\\",\\n        \\"ServerSideEncryptionKeyId\\": \\"\\",\\n        \\"OSSStorageClass\\": \\"\\",\\n        \\"OSSCRC64\\": \\"\\",\\n        \\"ObjectACL\\": \\"\\",\\n        \\"ContentMd5\\": \\"\\",\\n        \\"OSSUserMeta\\": {\\n          \\"test\\": \\"test\\",\\n          \\"test2\\": 1\\n        },\\n        \\"OSSTaggingCount\\": 0,\\n        \\"OSSTagging\\": {\\n          \\"test\\": \\"test\\",\\n          \\"test2\\": 1\\n        },\\n        \\"OSSExpiration\\": \\"\\",\\n        \\"OSSVersionId\\": \\"\\",\\n        \\"OSSDeleteMarker\\": \\"\\",\\n        \\"OSSObjectType\\": \\"\\",\\n        \\"CustomId\\": \\"\\",\\n        \\"CustomLabels\\": {\\n          \\"test\\": \\"test\\",\\n          \\"test2\\": 1\\n        },\\n        \\"StreamCount\\": 0,\\n        \\"ProgramCount\\": 0,\\n        \\"FormatName\\": \\"\\",\\n        \\"FormatLongName\\": \\"\\",\\n        \\"StartTime\\": 0,\\n        \\"Bitrate\\": 0,\\n        \\"Duration\\": 0,\\n        \\"SemanticSimilarity\\": 0,\\n        \\"SemanticTypes\\": [\\n          \\"\\"\\n        ],\\n        \\"Elements\\": [\\n          {\\n            \\"ElementContents\\": [\\n              {\\n                \\"Type\\": \\"\\",\\n                \\"Content\\": \\"\\",\\n                \\"URL\\": \\"\\"\\n              }\\n            ]\\n          }\\n        ],\\n        \\"OCRTexts\\": \\"\\"\\n      },\\n      \\"BaseImages\\": [\\n        {\\n          \\"OwnerId\\": \\"\\",\\n          \\"ProjectName\\": \\"\\",\\n          \\"DatasetName\\": \\"\\",\\n          \\"ObjectType\\": \\"\\",\\n          \\"ObjectId\\": \\"\\",\\n          \\"UpdateTime\\": \\"\\",\\n          \\"CreateTime\\": \\"\\",\\n          \\"URI\\": \\"\\",\\n          \\"OSSURI\\": \\"\\",\\n          \\"Filename\\": \\"\\",\\n          \\"MediaType\\": \\"\\",\\n          \\"ContentType\\": \\"\\",\\n          \\"Size\\": 0,\\n          \\"FileHash\\": \\"\\",\\n          \\"FileModifiedTime\\": \\"\\",\\n          \\"FileCreateTime\\": \\"\\",\\n          \\"FileAccessTime\\": \\"\\",\\n          \\"ProduceTime\\": \\"\\",\\n          \\"LatLong\\": \\"\\",\\n          \\"Timezone\\": \\"\\",\\n          \\"Addresses\\": [\\n            {\\n              \\"Language\\": \\"\\",\\n              \\"AddressLine\\": \\"\\",\\n              \\"Country\\": \\"\\",\\n              \\"Province\\": \\"\\",\\n              \\"City\\": \\"\\",\\n              \\"District\\": \\"\\",\\n              \\"Township\\": \\"\\"\\n            }\\n          ],\\n          \\"TravelClusterId\\": \\"\\",\\n          \\"Orientation\\": 0,\\n          \\"Figures\\": [\\n            {\\n              \\"FigureId\\": \\"\\",\\n              \\"FigureConfidence\\": 0,\\n              \\"FigureClusterId\\": \\"\\",\\n              \\"FigureClusterConfidence\\": 0,\\n              \\"FigureType\\": \\"\\",\\n              \\"Age\\": 0,\\n              \\"AgeSD\\": 0,\\n              \\"Gender\\": \\"\\",\\n              \\"GenderConfidence\\": 0,\\n              \\"Emotion\\": \\"\\",\\n              \\"EmotionConfidence\\": 0,\\n              \\"FaceQuality\\": 0,\\n              \\"Mouth\\": \\"\\",\\n              \\"MouthConfidence\\": 0,\\n              \\"Beard\\": \\"\\",\\n              \\"BeardConfidence\\": 0,\\n              \\"Hat\\": \\"\\",\\n              \\"HatConfidence\\": 0,\\n              \\"Mask\\": \\"\\",\\n              \\"MaskConfidence\\": 0,\\n              \\"Glasses\\": \\"\\",\\n              \\"GlassesConfidence\\": 0,\\n              \\"Sharpness\\": 0,\\n              \\"Attractive\\": 0,\\n              \\"HeadPose\\": {\\n                \\"Pitch\\": 0,\\n                \\"Roll\\": 0,\\n                \\"Yaw\\": 0\\n              }\\n            }\\n          ],\\n          \\"FigureCount\\": 0,\\n          \\"Labels\\": [\\n            {\\n              \\"Language\\": \\"\\",\\n              \\"LabelName\\": \\"\\",\\n              \\"LabelLevel\\": 0,\\n              \\"LabelConfidence\\": 0,\\n              \\"ParentLabelName\\": \\"\\",\\n              \\"CentricScore\\": 0\\n            }\\n          ],\\n          \\"Title\\": \\"\\",\\n          \\"ImageWidth\\": 0,\\n          \\"ImageHeight\\": 0,\\n          \\"EXIF\\": \\"\\",\\n          \\"ImageScore\\": {\\n            \\"OverallQualityScore\\": 0\\n          },\\n          \\"CroppingSuggestions\\": [\\n            {\\n              \\"AspectRatio\\": \\"\\",\\n              \\"Confidence\\": 0\\n            }\\n          ],\\n          \\"OCRContents\\": [\\n            {\\n              \\"Language\\": \\"\\",\\n              \\"Contents\\": \\"\\",\\n              \\"Confidence\\": 0\\n            }\\n          ],\\n          \\"VideoWidth\\": 0,\\n          \\"VideoHeight\\": 0,\\n          \\"VideoStreams\\": [\\n            {\\n              \\"Index\\": 0,\\n              \\"Language\\": \\"\\",\\n              \\"CodecName\\": \\"\\",\\n              \\"CodecLongName\\": \\"\\",\\n              \\"Profile\\": \\"\\",\\n              \\"CodecTimeBase\\": \\"\\",\\n              \\"CodecTagString\\": \\"\\",\\n              \\"CodecTag\\": \\"\\",\\n              \\"Width\\": 0,\\n              \\"Height\\": 0,\\n              \\"HasBFrames\\": 0,\\n              \\"SampleAspectRatio\\": \\"\\",\\n              \\"DisplayAspectRatio\\": \\"\\",\\n              \\"PixelFormat\\": \\"\\",\\n              \\"Level\\": 0,\\n              \\"FrameRate\\": \\"\\",\\n              \\"AverageFrameRate\\": \\"\\",\\n              \\"TimeBase\\": \\"\\",\\n              \\"StartTime\\": 0,\\n              \\"Duration\\": 0,\\n              \\"Bitrate\\": 0,\\n              \\"FrameCount\\": 0,\\n              \\"Rotate\\": \\"\\",\\n              \\"BitDepth\\": 0,\\n              \\"ColorSpace\\": \\"\\",\\n              \\"ColorRange\\": \\"\\",\\n              \\"ColorTransfer\\": \\"\\",\\n              \\"ColorPrimaries\\": \\"\\"\\n            }\\n          ],\\n          \\"Subtitles\\": [\\n            {\\n              \\"Index\\": 0,\\n              \\"Language\\": \\"\\",\\n              \\"CodecName\\": \\"\\",\\n              \\"CodecLongName\\": \\"\\",\\n              \\"CodecTagString\\": \\"\\",\\n              \\"CodecTag\\": \\"\\",\\n              \\"StartTime\\": 0,\\n              \\"Duration\\": 0,\\n              \\"Bitrate\\": 0,\\n              \\"Content\\": \\"\\",\\n              \\"Width\\": 0,\\n              \\"Height\\": 0\\n            }\\n          ],\\n          \\"AudioStreams\\": [\\n            {\\n              \\"Index\\": 0,\\n              \\"Language\\": \\"\\",\\n              \\"CodecName\\": \\"\\",\\n              \\"CodecLongName\\": \\"\\",\\n              \\"CodecTimeBase\\": \\"\\",\\n              \\"CodecTagString\\": \\"\\",\\n              \\"CodecTag\\": \\"\\",\\n              \\"TimeBase\\": \\"\\",\\n              \\"StartTime\\": 0,\\n              \\"Duration\\": 0,\\n              \\"Bitrate\\": 0,\\n              \\"FrameCount\\": 0,\\n              \\"Lyric\\": \\"\\",\\n              \\"SampleFormat\\": \\"\\",\\n              \\"SampleRate\\": 0,\\n              \\"Channels\\": 0,\\n              \\"ChannelLayout\\": \\"\\"\\n            }\\n          ],\\n          \\"Artist\\": \\"\\",\\n          \\"AlbumArtist\\": \\"\\",\\n          \\"AudioCovers\\": [\\n            {\\n              \\"ImageWidth\\": 0,\\n              \\"ImageHeight\\": 0,\\n              \\"EXIF\\": \\"\\",\\n              \\"CroppingSuggestions\\": [],\\n              \\"OCRContents\\": []\\n            }\\n          ],\\n          \\"Composer\\": \\"\\",\\n          \\"Performer\\": \\"\\",\\n          \\"Language\\": \\"\\",\\n          \\"Album\\": \\"\\",\\n          \\"PageCount\\": 0,\\n          \\"ETag\\": \\"\\",\\n          \\"CacheControl\\": \\"\\",\\n          \\"ContentDisposition\\": \\"\\",\\n          \\"ContentEncoding\\": \\"\\",\\n          \\"ContentLanguage\\": \\"\\",\\n          \\"AccessControlAllowOrigin\\": \\"\\",\\n          \\"AccessControlRequestMethod\\": \\"\\",\\n          \\"ServerSideEncryptionCustomerAlgorithm\\": \\"\\",\\n          \\"ServerSideEncryption\\": \\"\\",\\n          \\"ServerSideDataEncryption\\": \\"\\",\\n          \\"ServerSideEncryptionKeyId\\": \\"\\",\\n          \\"OSSStorageClass\\": \\"\\",\\n          \\"OSSCRC64\\": \\"\\",\\n          \\"ObjectACL\\": \\"\\",\\n          \\"ContentMd5\\": \\"\\",\\n          \\"OSSUserMeta\\": {\\n            \\"test\\": \\"test\\",\\n            \\"test2\\": 1\\n          },\\n          \\"OSSTaggingCount\\": 0,\\n          \\"OSSTagging\\": {\\n            \\"test\\": \\"test\\",\\n            \\"test2\\": 1\\n          },\\n          \\"OSSExpiration\\": \\"\\",\\n          \\"OSSVersionId\\": \\"\\",\\n          \\"OSSDeleteMarker\\": \\"\\",\\n          \\"OSSObjectType\\": \\"\\",\\n          \\"CustomId\\": \\"\\",\\n          \\"CustomLabels\\": {\\n            \\"test\\": \\"test\\",\\n            \\"test2\\": 1\\n          },\\n          \\"StreamCount\\": 0,\\n          \\"ProgramCount\\": 0,\\n          \\"FormatName\\": \\"\\",\\n          \\"FormatLongName\\": \\"\\",\\n          \\"StartTime\\": 0,\\n          \\"Bitrate\\": 0,\\n          \\"Duration\\": 0,\\n          \\"SemanticSimilarity\\": 0,\\n          \\"SemanticTypes\\": [\\n            \\"\\"\\n          ],\\n          \\"Elements\\": [\\n            {\\n              \\"ElementContents\\": [\\n                {\\n                  \\"Type\\": \\"\\",\\n                  \\"Content\\": \\"\\",\\n                  \\"URL\\": \\"\\"\\n                }\\n              ]\\n            }\\n          ],\\n          \\"OCRTexts\\": \\"\\"\\n        }\\n      ],\\n      \\"CustomId\\": \\"\\",\\n      \\"CustomLabels\\": {\\n        \\"test\\": \\"test\\",\\n        \\"test2\\": 1\\n      },\\n      \\"MetaLockVersion\\": 0\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '批量获取人脸聚类',
    ),
    'UpdateFigureCluster' => 
    array (
      'summary' => '更新一个人脸聚类分组的信息，可以更新分组的名称、标签等信息。',
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
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'update',
        'abilityTreeCode' => '103839',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREimm3DNGQD',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ProjectName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '项目名称，获取方式请参见[创建项目](~~478153~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'test-project',
          ),
        ),
        1 => 
        array (
          'name' => 'DatasetName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据集名称，获取方式请参见[创建数据集](~~478160~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'test-dataset',
          ),
        ),
        2 => 
        array (
          'name' => 'FigureCluster',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '该聚类分组具体信息。',
            'required' => true,
            '$ref' => '#/components/schemas/FigureClusterForReq',
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
            'description' => '响应结构体。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '当次请求的Request ID。',
                'type' => 'string',
                'example' => '5F74C5C9-5AC0-49F9-914D-E01589D3****',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"5F74C5C9-5AC0-49F9-914D-E01589D3****\\"\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '更新人物聚类',
      'description' => '- **请确保在使用该接口前，已充分了解智能媒体管理产品的收费方式和[价格](~~477042~~)。**

- 调用该接口前，请确保您已通过创建人物人脸聚类任务（[CreateFigureClusteringTask](~~478180~~)）将数据集中的所有人脸都进行过聚类。

- 当前仅支持修改分组的封面、名称、标签信息。

- 更新完成后，您可以通过[GetFigureCluster](~~478182~~)或者[BatchGetFigureCluster](~~2248450~~)接口获取更新后的分组信息。',
    ),
    'SearchImageFigureCluster' => 
    array (
      'summary' => '查询指定图片中所有人脸所在的人物聚类列表，每个人物聚类中包含人脸框，相似度等信息。',
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
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'list',
        'chargeType' => 'free',
        'abilityTreeCode' => '160046',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREimm3DNGQD',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ProjectName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '项目名称，获取方式请参见[创建项目](~~478153~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'test-project',
          ),
        ),
        1 => 
        array (
          'name' => 'DatasetName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据集名称，获取方式请参见[创建数据集](~~478160~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'test-dataset',
          ),
        ),
        2 => 
        array (
          'name' => 'SourceURI',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '图片的OSS地址。

OSS地址规则为`oss://${Bucket}/${Object}`，其中`${Bucket}`为和当前项目处于同一区域(Region)的OSS Bucket名称，`${Object}`为包含文件扩展名的文件完整路径。',
            'type' => 'string',
            'required' => false,
            'example' => 'oss://test-bucket/test-object',
          ),
        ),
        3 => 
        array (
          'name' => 'CredentialConfig',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '链式授权配置，非必填。更多信息，请参见[使用链式授权访问其他实体资源](~~465340~~)。',
            'required' => false,
            '$ref' => '#/components/schemas/CredentialConfig',
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
            'description' => '响应结构体。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'C2734912-E6D5-052C-AC67-6A9FD02*****',
              ),
              'Clusters' => 
              array (
                'description' => '搜索出的人脸分组数组。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '人脸分组信息。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Boundary' => 
                    array (
                      'description' => '人脸框信息。',
                      '$ref' => '#/components/schemas/Boundary',
                    ),
                    'ClusterId' => 
                    array (
                      'description' => '和该人脸框中的人脸相似的人脸分组ID。',
                      'type' => 'string',
                      'example' => 'Cluster-ca730577-06b1-42c7-a25b-8f2c7******',
                    ),
                    'Similarity' => 
                    array (
                      'description' => '人脸和挑选出的人脸分组的相似度，该值越大则相似度越高，取值范围为0～1。',
                      'type' => 'number',
                      'format' => 'float',
                      'example' => '0.87413794',
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"C2734912-E6D5-052C-AC67-6A9FD02*****\\",\\n  \\"Clusters\\": [\\n    {\\n      \\"Boundary\\": {\\n        \\"Width\\": 0,\\n        \\"Height\\": 0,\\n        \\"Left\\": 0,\\n        \\"Top\\": 0,\\n        \\"Polygon\\": [\\n          {\\n            \\"X\\": 0,\\n            \\"Y\\": 0\\n          }\\n        ]\\n      },\\n      \\"ClusterId\\": \\"Cluster-ca730577-06b1-42c7-a25b-8f2c7******\\",\\n      \\"Similarity\\": 0.87413794\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '查询图片人脸所属聚类',
      'description' => '- **请确保在使用该接口前，已充分了解智能媒体管理产品的收费方式和[价格](~~88317~~)。**
- 调用该接口前，请确保您已通过创建人物人脸聚类任务（[CreateFigureClusteringTask](~~478180~~)）将数据集中的所有人脸都进行过聚类。',
    ),
    'CreateFacesSearchingTask' => 
    array (
      'summary' => '从媒体集中搜索与指定图片或人脸ID最相似的前N张图片，并返回相应人脸ID及边界框，返回结果按照相似度降序排列。',
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
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'list',
        'abilityTreeCode' => '160409',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREimmQ9NXNO',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ProjectName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '项目名称，获取方式请参见[创建项目](~~478153~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'test-project',
          ),
        ),
        1 => 
        array (
          'name' => 'DatasetName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据集名称, 获取方式请参见[创建数据集](~~478160~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'test-dataset',
          ),
        ),
        2 => 
        array (
          'name' => 'UserData',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用户自定义信息，在异步消息通知中会为您返回，用于方便您系统内对消息通知进行关联处理。最大长度为2048字节。',
            'type' => 'string',
            'required' => false,
            'example' => '{"ID": "testuid","Name": "test-user","Avatar": "http://test.com/testuid"}',
          ),
        ),
        3 => 
        array (
          'name' => 'Sources',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '图片列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '图片对象。',
              'type' => 'object',
              'properties' => 
              array (
                'URI' => 
                array (
                  'description' => '图片的OSS地址。

OSS地址规则为oss://${Bucket}/${Object}，其中`${Bucket}`为和当前项目处于同一区域(Region)的OSS Bucket名称，`${Object}`为包含文件扩展名的文件完整路径。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'oss://test-bucket/test-object',
                ),
              ),
              'required' => false,
            ),
            'required' => false,
          ),
        ),
        4 => 
        array (
          'name' => 'MaxResult',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '最相似的N个人脸，取值范围为0~100，默认值为5。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '100',
          ),
        ),
        5 => 
        array (
          'name' => 'Notification',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '消息通知配置，详细内容请单击Notification查看，异步通知消息格式请参见[异步通知消息格式](~~471456~~)。',
            'required' => false,
            '$ref' => '#/components/schemas/Notification',
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
                'example' => 'B1E79399-05F7-06D8-95FE-EBE17BA*****',
              ),
              'TaskId' => 
              array (
                'description' => '任务ID。',
                'type' => 'string',
                'example' => 'CreateFacesSearchingTask-00bec802-073a-4b61-ba*****',
              ),
              'EventId' => 
              array (
                'description' => '事件ID。',
                'type' => 'string',
                'example' => '0ED-1Bz8z71k5TtsUejT4UJ16****',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"B1E79399-05F7-06D8-95FE-EBE17BA*****\\",\\n  \\"TaskId\\": \\"CreateFacesSearchingTask-00bec802-073a-4b61-ba*****\\",\\n  \\"EventId\\": \\"0ED-1Bz8z71k5TtsUejT4UJ16****\\"\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '创建相似人脸图片检索任务',
      'description' => '- **请确保在使用该接口前，已充分了解智能媒体管理产品的收费方式和[价格](~~477042~~)**。
- 对于每一个输入的图片，只会选取图片中人脸框范围最大的人脸进行人脸搜索。人脸框检测结果与[DetectImageFaces](~~444162~~)一致。
- 该接口为异步接口，获取任务开始执行后，任务信息只保存7天，超过7天则无法再获取。调用[GetTask](~~478241~~)或[ListTasks](~~478242~~)接口获取返回的`TaskId`，查看任务信息。也可以通过设置[Notification](~~471456~~)消息通知参数，通过消息通知获取任务信息。',
    ),
    'CreateLocationDateClusteringTask' => 
    array (
      'summary' => '时空聚类功能，可以将您已索引到数据集内的图片、视频等携带了拍摄时间、拍摄地点信息等文件，按照时间、地理位置进行分类。这些分类可以理解为用户的一次旅行所拍摄的内容（它们时间接近、地点接近），也可以理解为用户在不同生活、工作地的拍摄内容。通过获取、分析这些分类所在地点、所经历的时间范围，可以为用户提供媒体文件归类、精选、生成照片视频故事等能力。',
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
      'operationType' => 'write',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'create',
        'abilityTreeCode' => '157768',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREimmPECUUL',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ProjectName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '项目名称，获取方式请参见[创建项目](~~478153~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'test-project',
          ),
        ),
        1 => 
        array (
          'name' => 'DatasetName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据集名称，获取方式请参见[创建数据集](~~478160~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'test-dataset',
          ),
        ),
        2 => 
        array (
          'name' => 'UserData',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用户自定义信息，在异步消息通知中会为您返回，用于方便您系统内对消息通知进行关联处理。最大长度为2048字节。',
            'type' => 'string',
            'required' => false,
            'example' => 'test-data',
          ),
        ),
        3 => 
        array (
          'name' => 'Tags',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '自定义标签，用于对异步任务进行搜索、过滤。',
            'type' => 'object',
            'required' => false,
            'example' => '{
      "User": "Jane"
}',
          ),
        ),
        4 => 
        array (
          'name' => 'DateOptions',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '日期聚类设置。
><notice>调整该设置对您数据集`Dataset`内已有的时空聚类也会产生影响。></notice>',
            'type' => 'object',
            'properties' => 
            array (
              'GapDays' => 
              array (
                'description' => '单个时空分组中，最大允许间隔的天数，取值范围为0~99999。

例如，用户3月4-5日和3月7日均有照片，但3月6日未产生照片。但我们推测其3月4-7日均应归属于同一次旅行，则将该字段设置为`1天`，即允许3月6日这类`1天`的间隔前后被归类为同一次时空聚类中。

推荐设置为0-3。',
                'type' => 'integer',
                'format' => 'int64',
                'required' => true,
                'example' => '1',
              ),
              'MinDays' => 
              array (
                'description' => '单个时空分组中，最少包含的天数，取值范围为1~99999。少于该天数的聚类不会被检测和存储。

例如，不希望产生的分组中包含1日游，则该参数设置为2。',
                'type' => 'integer',
                'format' => 'int64',
                'required' => true,
                'example' => '1',
              ),
              'MaxDays' => 
              array (
                'description' => '单个时空分组中，最多包含的天数，取值范围为1~99999。多于该天数的聚类不会被检测和存储。

例如，用户在某地连续超过15天都产生了照片，则可能该地是定居地，而不是旅行，希望时空聚类中不包括这段时间和地点，则将该参数设置为15。',
                'type' => 'integer',
                'format' => 'int64',
                'required' => true,
                'example' => '15',
              ),
            ),
            'required' => true,
          ),
        ),
        5 => 
        array (
          'name' => 'LocationOptions',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '位置聚类设置。
><notice>调整该设置对您数据集`Dataset`内已有的时空聚类也会产生影响。></notice>',
            'type' => 'object',
            'properties' => 
            array (
              'LocationDateClusterLevels' => 
              array (
                'description' => '分组的行政级别列表。可多选。

例如用户上传了3月3日-3月5日在杭州的照片，3月6日-3月8日在嘉兴的照片。且该参数填写了`["city", "province"]`，则生成的时空聚类包括：

- 3月3日-3月5日，杭州
- 3月6日-3月8日，嘉兴
- 3月3日-3月8日，浙江',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '分组的行政级别。',
                  'type' => 'string',
                  'required' => true,
                  'enumValueTitles' => 
                  array (
                    'country' => '国家或地区',
                    'province' => '省',
                    'city' => '市',
                    'district' => '区',
                    'township' => '街道',
                  ),
                  'example' => 'province',
                  'enum' => 
                  array (
                  ),
                ),
                'required' => true,
              ),
            ),
            'required' => true,
          ),
        ),
        6 => 
        array (
          'name' => 'Notification',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '消息通知配置，详细内容请单击Notification查看，异步通知消息格式请参见[异步通知消息格式](~~471456~~)。',
            'required' => false,
            '$ref' => '#/components/schemas/Notification',
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
            'description' => '时空聚类任务信息。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '当次请求的Request ID。',
                'type' => 'string',
                'example' => 'B121940C-9794-4EE3-8D6E-F8EC525F****',
              ),
              'TaskId' => 
              array (
                'description' => '任务ID。',
                'type' => 'string',
                'example' => 'LocationDateClustering-c10dce07-1de7-4da7-abee-1a3aba7****',
              ),
              'EventId' => 
              array (
                'description' => '事件ID。',
                'type' => 'string',
                'example' => '25B-1W2ChgujA3Q8MbBY6mSp2mh****',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"B121940C-9794-4EE3-8D6E-F8EC525F****\\",\\n  \\"TaskId\\": \\"LocationDateClustering-c10dce07-1de7-4da7-abee-1a3aba7****\\",\\n  \\"EventId\\": \\"25B-1W2ChgujA3Q8MbBY6mSp2mh****\\"\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '创建时空聚类任务',
      'description' => '* **请确保在使用该接口前，已充分了解智能媒体管理产品的收费方式和[价格](~~477042~~)**。


* 调用该接口前，请确保您已通过绑定方式（[CreateBinding](~~478202~~)）或者主动索引（[IndexFileMeta](~~478166~~)或者[BatchIndexFileMeta](~~478167~~)）方式将文件索引到数据集（Dataset）中。
*  每次调用该接口，会**增量**对数据集`Dataset`内的文件进行处理。您可以根据新增文件情况，定期调用该接口对新文件进行处理。
*  聚类完成后，您可以通过[QueryLocationDateClusters](~~478189~~)接口获取聚类结果。
*  从数据集中删除文件，不会导致时空聚类发生变化。如果需要删除已有的时空聚类，需要调用[DeleteLocationDateCluster](~~478191~~)接口。 
*  该接口为异步接口，获取任务开始执行后，任务信息只保存7天，超过7天则无法再获取。调用[GetTask](~~GetTask~~)或[ListTasks](~~ListTasks~~)接口获取返回的`TaskId`，查看任务信息。也可以通过设置[Notification](~~611278~~)消息通知参数，通过消息通知获取任务信息。',
    ),
    'QueryLocationDateClusters' => 
    array (
      'summary' => '查询时空聚类列表信息，支持多种条件，详情请参考请求参数。',
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
        'operationType' => 'list',
        'abilityTreeCode' => '157769',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREimmPECUUL',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ProjectName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '项目名称，获取方式请参见[创建项目](~~478153~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'test-project',
          ),
        ),
        1 => 
        array (
          'name' => 'DatasetName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据集名称，获取方式请参见[创建数据集](~~478160~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'test-dataset',
          ),
        ),
        2 => 
        array (
          'name' => 'ObjectId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '要查询的分组ID。如果您需要获得某个特定时空聚类分组的信息，则传入该参数。否则留空，通过其他参数查询符合匹配条件的分组。',
            'type' => 'string',
            'required' => false,
            'example' => 'location-date-cluster-71dd4f32-9597-4085-a2ab-3a7b0fd0aff9',
          ),
        ),
        3 => 
        array (
          'name' => 'Title',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '时空聚类的标题，模糊匹配。',
            'type' => 'string',
            'required' => false,
            'example' => '杭州',
          ),
        ),
        4 => 
        array (
          'name' => 'Address',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '地址信息。',
            'required' => false,
            '$ref' => '#/components/schemas/Address',
          ),
        ),
        5 => 
        array (
          'name' => 'LocationDateClusterLevels',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '要查询的时空聚类分组的行政级别。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '分组行政级别。',
              'type' => 'string',
              'required' => false,
              'enumValueTitles' => 
              array (
                'country' => '国家或地区',
                ' province' => '省',
                ' district' => '区',
                ' city' => '市',
                'township' => '街道',
              ),
              'example' => 'province',
            ),
            'required' => false,
          ),
        ),
        6 => 
        array (
          'name' => 'LocationDateClusterStartTimeRange',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '分组起始时间的范围。',
            'required' => false,
            '$ref' => '#/components/schemas/TimeRange',
          ),
        ),
        7 => 
        array (
          'name' => 'LocationDateClusterEndTimeRange',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '分组结束时间的范围。',
            'required' => false,
            '$ref' => '#/components/schemas/TimeRange',
          ),
        ),
        8 => 
        array (
          'name' => 'CreateTimeRange',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '时空聚类分组生成的时间范围。',
            'required' => false,
            '$ref' => '#/components/schemas/TimeRange',
          ),
        ),
        9 => 
        array (
          'name' => 'UpdateTimeRange',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '时空聚类分组更新的时间范围。',
            'required' => false,
            '$ref' => '#/components/schemas/TimeRange',
          ),
        ),
        10 => 
        array (
          'name' => 'NextToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '翻页标记。',
            'type' => 'string',
            'required' => false,
            'example' => 'MzQNjmY2MzYxNhNjk2ZNjEu****',
          ),
        ),
        11 => 
        array (
          'name' => 'MaxResults',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '每页显示数量，取值范围为\\[1,100]，默认值为20。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '20',
          ),
        ),
        12 => 
        array (
          'name' => 'CustomLabels',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '自定义标签查询条件。',
            'type' => 'string',
            'required' => false,
            'example' => 'key=value',
          ),
        ),
        13 => 
        array (
          'name' => 'Sort',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '排序字段。',
            'type' => 'string',
            'required' => false,
            'enumValueTitles' => 
            array (
              'LocationDateClusterEndTime' => '时空聚类分组的结束时间',
              'CreateTime' => '时空聚类分组的创建时间',
              'UpdateTime' => '时空聚类分组的更新时间',
              'LocationDateClusterStartTime' => '【默认】时空聚类分组的开始时间',
            ),
            'example' => 'LocationDateClusterStartTime',
          ),
        ),
        14 => 
        array (
          'name' => 'Order',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '排序顺序。',
            'type' => 'string',
            'required' => false,
            'enumValueTitles' => 
            array (
              'asc' => '【默认】升序',
              'desc' => '降序',
            ),
            'example' => 'asc',
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
                'example' => '7055FCF7-4D7B-098E-BD4D-DD2932B0****',
              ),
              'LocationDateClusters' => 
              array (
                'description' => '时空分组列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '时空聚类信息。',
                  '$ref' => '#/components/schemas/LocationDateCluster',
                ),
              ),
              'NextToken' => 
              array (
                'description' => '翻页标记。',
                'type' => 'string',
                'example' => 'MzQNjmY2MzYxNhNjk2ZNjEu****',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"7055FCF7-4D7B-098E-BD4D-DD2932B0****\\",\\n  \\"LocationDateClusters\\": [\\n    {\\n      \\"Title\\": \\"\\",\\n      \\"LocationDateClusterLevel\\": \\"\\",\\n      \\"LocationDateClusterStartTime\\": \\"\\",\\n      \\"LocationDateClusterEndTime\\": \\"\\",\\n      \\"Addresses\\": [\\n        {\\n          \\"Language\\": \\"\\",\\n          \\"AddressLine\\": \\"\\",\\n          \\"Country\\": \\"\\",\\n          \\"Province\\": \\"\\",\\n          \\"City\\": \\"\\",\\n          \\"District\\": \\"\\",\\n          \\"Township\\": \\"\\"\\n        }\\n      ],\\n      \\"ObjectId\\": \\"\\",\\n      \\"UpdateTime\\": \\"\\",\\n      \\"CreateTime\\": \\"\\",\\n      \\"CustomId\\": \\"\\",\\n      \\"CustomLabels\\": {\\n        \\"test\\": \\"test\\",\\n        \\"test2\\": 1\\n      }\\n    }\\n  ],\\n  \\"NextToken\\": \\"MzQNjmY2MzYxNhNjk2ZNjEu****\\"\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '查询时空聚类',
      'description' => '- **请确保在使用该接口前，已充分了解智能媒体管理产品的收费方式和[价格](~~477042~~)**。

- 调用该接口前，请先通过[CreateLocationDateClusteringTask](~~478188~~)接口进行时空聚类。',
    ),
    'UpdateLocationDateCluster' => 
    array (
      'summary' => '更新一个时空聚类的信息。',
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
      ),
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'update',
        'abilityTreeCode' => '157778',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREimmPECUUL',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ProjectName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '项目名称，获取方式请参见[创建项目](~~478153~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'test-project',
          ),
        ),
        1 => 
        array (
          'name' => 'DatasetName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据集名称，获取方式请参见[创建数据集](~~478160~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'test-dataset',
          ),
        ),
        2 => 
        array (
          'name' => 'ObjectId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '需要更新的分组的ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'location-date-cluster-71dd4f32-9597-4085-a2ab-3a7b0fd0aff9',
          ),
        ),
        3 => 
        array (
          'name' => 'Title',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分组的标题。您可以为该分组设定一个标题，供展示和搜索。最大1024字节。',
            'type' => 'string',
            'required' => false,
            'example' => '杭州一日游',
          ),
        ),
        4 => 
        array (
          'name' => 'CustomId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '该文件的自定义ID。该文件索引到数据集后，作为该行元数据的属性存储，用于和您的业务系统进行关联、对应。您可以根据业务需求传入该值，例如将某个URI关联到您系统内的某个ID。推荐传入全局唯一的值。最大1024字节。',
            'type' => 'string',
            'required' => false,
            'example' => 'member-id-0001',
          ),
        ),
        5 => 
        array (
          'name' => 'CustomLabels',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '文件自定义标签列表。储存您业务自定义的键名、键值对信息，用于在查询时可以据此为筛选项进行检索。最多100组。',
            'type' => 'object',
            'required' => false,
            'example' => '{
      "UserScore": "5"
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
            'title' => 'Schema of Response',
            'description' => '响应结构体。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '52B017A8-FEF5-0A61-BAEE-234A8AD8****',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"52B017A8-FEF5-0A61-BAEE-234A8AD8****\\"\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '更新时空聚类',
      'description' => '- **请确保在使用该接口前，已充分了解智能媒体管理产品的收费方式和[价格](~~477042~~)**。

- 调用该接口前，请先通过[CreateLocationDateClusteringTask](~~478188~~)接口进行时空聚类。',
    ),
    'DeleteLocationDateCluster' => 
    array (
      'summary' => '删除一个时空聚类。',
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
      ),
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'delete',
        'abilityTreeCode' => '158363',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREimmPECUUL',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ProjectName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '项目名称，获取方式请参见[创建项目](~~478153~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'test-project',
          ),
        ),
        1 => 
        array (
          'name' => 'DatasetName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据集名称，获取方式请参见[创建数据集](~~478160~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'test-dataset',
          ),
        ),
        2 => 
        array (
          'name' => 'ObjectId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '需要删除的分组的ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'location-date-cluster-71dd4f32-9597-4085-a2ab-3a7b0fd0aff9',
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
            'description' => '响应结构体。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'B121940C-9794-4EE3-8D6E-F8EC525F****',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"B121940C-9794-4EE3-8D6E-F8EC525F****\\"\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '删除时空聚类分组',
      'description' => '- **请确保在使用该接口前，已充分了解智能媒体管理产品的收费方式和[价格](~~477042~~)**。

- 调用该接口前，请先通过[CreateLocationDateClusteringTask](~~478188~~)接口进行时空聚类。

- 无论删除的时空聚类分组ID是否存在，均会返回删除成功。',
    ),
    'CreateStory' => 
    array (
      'summary' => '创建一个故事。',
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
      'operationType' => 'write',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'create',
        'abilityTreeCode' => '103261',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREimmPQ568C',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ProjectName',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '项目名称。获取方式请参见[创建项目](~~478153~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'test-project',
          ),
        ),
        1 => 
        array (
          'name' => 'DatasetName',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '数据集名称。获取方式请参见[创建数据集](~~478160~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'test-dataset',
          ),
        ),
        2 => 
        array (
          'name' => 'ObjectId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '故事对象ID。该参数不是必填参数。如果为空，IMM会为生成的故事创建一个ID，该ID是故事的唯一标识符，可用于对该故事的查询、更新等操作。ID也可由用户生成，生成之后通过该参数传入，IMM可记录下用户传入的ID作为该故事的唯一标识。如果传入已存在的ID，则会更新该ID对应的故事。',
            'type' => 'string',
            'required' => false,
            'example' => 'id1',
          ),
        ),
        3 => 
        array (
          'name' => 'StoryType',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '故事类型，指定需要生成相册故事的类型。具体类型描述和可取值请参见[故事类型和子类型](~~475311~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'PeopleMemory',
          ),
        ),
        4 => 
        array (
          'name' => 'StorySubType',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '故事子类型，指定需要生成的相册故事的子类型，具体类型描述和可取值请参见[故事类型和子类型](~~475311~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'Solo',
          ),
        ),
        5 => 
        array (
          'name' => 'StoryStartTime',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '待创建故事的照片集合的开始时间。与StoryEndTime共同组成时间区间，IMM会根据该时间区间来筛选候选照片生成故事。该参数是一个RFC3339时间格式的字符串。',
            'type' => 'string',
            'required' => false,
            'example' => '2016-12-30T16:00:00Z',
          ),
        ),
        6 => 
        array (
          'name' => 'StoryEndTime',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '待创建故事的照片集合的结束时间。与StoryStartTime共同组成时间区间，IMM会根据该时间区间来筛选候选照片生成故事。该参数是一个RFC3339时间格式的字符串。',
            'type' => 'string',
            'required' => false,
            'example' => '2021-12-30T16:00:00Z',
          ),
        ),
        7 => 
        array (
          'name' => 'StoryName',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '故事名称。',
            'type' => 'string',
            'required' => false,
            'example' => 'name1',
          ),
        ),
        8 => 
        array (
          'name' => 'MinFileCount',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '生成的故事中包含的照片文件最小个数，实际生成的故事照片数量会在MinFileCount和MaxFileCount之间。该参数取值为大于1的整数，若待生成故事的候选照片集中的可用照片张数小于该参数，则会返回空故事。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1',
          ),
        ),
        9 => 
        array (
          'name' => 'MaxFileCount',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '生成的故事中包含的照片文件最大个数，生成的故事照片数量会在MinFileCount和MaxFileCount之间。该参数取值范围为大于MinFileCount的整数。（为保证故事生成的效果，算法内部会将最大数量限制在1500，当MaxFileCount大于1500时，该参数没有效果）',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '3',
          ),
        ),
        10 => 
        array (
          'name' => 'NotifyTopicName',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '异步反向通知的TopicName。',
            'type' => 'string',
            'required' => false,
            'example' => 'test-topic',
          ),
        ),
        11 => 
        array (
          'name' => 'CustomLabels',
          'in' => 'formData',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '自定义标签。该标签标记了用户对该故事自定义的信息，可作检索使用。',
            'type' => 'object',
            'required' => false,
            'example' => '{"Bucket": "examplebucket"}',
          ),
        ),
        12 => 
        array (
          'name' => 'CustomId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '自定义ID。用户自定义的生成故事的标识（可与ObjectID不相同），可供用户后期对故事进行检索、排序等。',
            'type' => 'string',
            'required' => false,
            'example' => 'test',
          ),
        ),
        13 => 
        array (
          'name' => 'Address',
          'in' => 'formData',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '待生成故事的地址信息。IMM会根据该参数标识出的地址位置信息，筛选拍摄地符合该地址信息的照片生成故事，该参数在故事类型为旅行故事（TravelMemory）时生效。

> 根据相关规定，无法在中国香港、中国澳门、中国台湾及海外提供将中国内地的GPS信息解析为地址的能力。
>',
            'required' => false,
            '$ref' => '#/components/schemas/AddressForStory',
          ),
        ),
        14 => 
        array (
          'name' => 'Tags',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '此参数提供一种标签机制，可在以下场景中使用：

- 设置自定义数据，这些数据会在MNS消息中返回。

- 作为搜索条件搜索任务。

- 作为变量在TargetURI中使用。',
            'type' => 'object',
            'required' => false,
            'example' => '{"key":"val"}',
          ),
        ),
        15 => 
        array (
          'name' => 'UserData',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用户自定义信息，在异步消息通知中会为您返回，用于方便您系统内对消息通知进行关联处理。最大长度为2048字节。',
            'type' => 'string',
            'required' => false,
            'example' => '{"ID": "testuid","Name": "test-user","Avatar": "http://test.com/testuid"}',
          ),
        ),
        16 => 
        array (
          'name' => 'Notification',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '消息通知配置，详细内容请单击Notification查看，异步通知消息格式请参见[异步通知消息格式](~~471456~~)。',
            'required' => false,
            '$ref' => '#/components/schemas/Notification',
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
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '当次请求的Request ID。',
                'type' => 'string',
                'example' => '1B3D5E0A-D8B8-4DA0-8127-ED32C851****',
              ),
              'TaskId' => 
              array (
                'description' => '任务ID。',
                'type' => 'string',
                'example' => 'CreateStory-4ef6ff43-edf3-4612-9cc4-0c7f9e19****',
              ),
              'EventId' => 
              array (
                'description' => '事件ID。',
                'type' => 'string',
                'example' => '392-1CqzvESGTEeNZ2OWFbRKIM****',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"1B3D5E0A-D8B8-4DA0-8127-ED32C851****\\",\\n  \\"TaskId\\": \\"CreateStory-4ef6ff43-edf3-4612-9cc4-0c7f9e19****\\",\\n  \\"EventId\\": \\"392-1CqzvESGTEeNZ2OWFbRKIM****\\"\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '创建故事',
      'description' => '- **请确保在使用该接口前，已充分了解智能媒体管理产品的收费方式和[价格](~~477042~~)。**
- 调用该接口前，请确保您已通过绑定方式（[CreateBinding](~~478202~~)）或者主动索引（[IndexFileMeta](~~478166~~)或者[BatchIndexFileMeta](~~478167~~)）方式将文件索引到数据集（Dataset）中。
- 该接口为异步接口，任务开始执行后，任务信息只保存7天，超过7天则无法再获取。调用[GetTask](~~478241~~)或者[ListTasks](~~478242~~)接口获取返回的TaskId，查看任务信息。也可以通过设置[Notification](~~611278~~)消息通知参数，通过消息通知获取任务信息。',
    ),
    'QueryStories' => 
    array (
      'summary' => '根据条件查询故事及其信息。',
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
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'list',
        'abilityTreeCode' => '102513',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREimmPQ568C',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ProjectName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '项目名称。获取方式请参见[创建项目](~~478153~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'test-project',
          ),
        ),
        1 => 
        array (
          'name' => 'DatasetName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据集名称。获取方式请参见[创建数据集](~~478160~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'test-dataset',
          ),
        ),
        2 => 
        array (
          'name' => 'ObjectId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '故事对象ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'id1',
          ),
        ),
        3 => 
        array (
          'name' => 'StoryName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '故事名称。',
            'type' => 'string',
            'required' => false,
            'example' => 'name1',
          ),
        ),
        4 => 
        array (
          'name' => 'StoryType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '故事类型。可取值请参见[故事类型和子类型](~~475311~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'TimeMemory',
          ),
        ),
        5 => 
        array (
          'name' => 'StorySubType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '故事子类型。可取值请参见[故事类型和子类型](~~475311~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'SeasonHighlights',
          ),
        ),
        6 => 
        array (
          'name' => 'FigureClusterIds',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '人物聚类的ID列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '人物聚类的ID。',
              'type' => 'string',
              'required' => false,
              'example' => 'Cluster-773d9c7e-3fd4-480c-a24b-30a82****',
            ),
            'required' => false,
          ),
        ),
        7 => 
        array (
          'name' => 'CreateTimeRange',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '创建故事时间范围。',
            'required' => false,
            '$ref' => '#/components/schemas/TimeRange',
          ),
        ),
        8 => 
        array (
          'name' => 'StoryStartTimeRange',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '创建故事照片或视频的开始时间范围。',
            'required' => false,
            '$ref' => '#/components/schemas/TimeRange',
          ),
        ),
        9 => 
        array (
          'name' => 'StoryEndTimeRange',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '创建故事照片或视频的结束时间范围。',
            'required' => false,
            '$ref' => '#/components/schemas/TimeRange',
          ),
        ),
        10 => 
        array (
          'name' => 'NextToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '在查询结果过多需要翻页时使用，标记当前开始读取的位置，置空表示从头开始；翻页读取时，则需传入上次调用该接口返回的NextToken值。',
            'type' => 'string',
            'required' => false,
            'example' => 'MTIzNDU2Nzg6aW1tdGVzdDpleGFtcGxlYnVja2V0OmRhdGFzZXQwMDE6b3NzOi8vZXhhbXBsZWJ1Y2tldC9zYW1wbGVvYmplY3QxLmpw****',
          ),
        ),
        11 => 
        array (
          'name' => 'MaxResults',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '本次读取的最大数据记录数量。取值范围为[1,100]。默认值为100。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '10',
          ),
        ),
        12 => 
        array (
          'name' => 'CustomLabels',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '自定义标签键值对。查询满足此标签对的故事。',
            'type' => 'string',
            'required' => false,
            'example' => 'key=value',
          ),
        ),
        13 => 
        array (
          'name' => 'WithEmptyStories',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否返回空故事。取值范围如下：

- true（默认）：返回空故事。

- false：不返会空故事。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
          ),
        ),
        14 => 
        array (
          'name' => 'Sort',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '排序字段，取值范围如下：

- CreateTime：按故事创建时间排序。

- StoryName：按故事名称排序。

- StoryStartTime：按故事开始时间排序

- StoryEndTime：按故事结束时间排序。
',
            'type' => 'string',
            'required' => false,
            'example' => 'CreateTime',
          ),
        ),
        15 => 
        array (
          'name' => 'Order',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '排序方式。取值范围如下：

- asc：升序。

- desc：降序。',
            'type' => 'string',
            'required' => false,
            'example' => 'asc',
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
                'description' => '当次请求的Request ID。',
                'type' => 'string',
                'example' => '2C5C1E0F-D8B8-4DA0-8127-EC32C771****',
              ),
              'Stories' => 
              array (
                'description' => '查询的故事列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '故事详细信息。',
                  '$ref' => '#/components/schemas/Story',
                ),
              ),
              'NextToken' => 
              array (
                'description' => '表示当前调用返回读取到的位置，空代表数据已经读取完毕。',
                'type' => 'string',
                'example' => 'MTIzNDU2Nzg6aW1tdGVzdDpleGFtcGxlYnVja2V0OmRhdGFzZXQwMDE6b3NzOi8vZXhhbXBsZWJ1Y2tldC9zYW1wbGVvYmplY3Qx****',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"2C5C1E0F-D8B8-4DA0-8127-EC32C771****\\",\\n  \\"Stories\\": [\\n    {\\n      \\"OwnerId\\": \\"\\",\\n      \\"ProjectName\\": \\"\\",\\n      \\"DatasetName\\": \\"\\",\\n      \\"ObjectId\\": \\"\\",\\n      \\"ObjectType\\": \\"\\",\\n      \\"UpdateTime\\": \\"\\",\\n      \\"CreateTime\\": \\"\\",\\n      \\"StoryName\\": \\"\\",\\n      \\"StoryType\\": \\"\\",\\n      \\"StorySubType\\": \\"\\",\\n      \\"StoryStartTime\\": \\"\\",\\n      \\"StoryEndTime\\": \\"\\",\\n      \\"Files\\": [\\n        {\\n          \\"OwnerId\\": \\"\\",\\n          \\"ProjectName\\": \\"\\",\\n          \\"DatasetName\\": \\"\\",\\n          \\"ObjectType\\": \\"\\",\\n          \\"ObjectId\\": \\"\\",\\n          \\"UpdateTime\\": \\"\\",\\n          \\"CreateTime\\": \\"\\",\\n          \\"URI\\": \\"\\",\\n          \\"OSSURI\\": \\"\\",\\n          \\"Filename\\": \\"\\",\\n          \\"MediaType\\": \\"\\",\\n          \\"ContentType\\": \\"\\",\\n          \\"Size\\": 0,\\n          \\"FileHash\\": \\"\\",\\n          \\"FileModifiedTime\\": \\"\\",\\n          \\"FileCreateTime\\": \\"\\",\\n          \\"FileAccessTime\\": \\"\\",\\n          \\"ProduceTime\\": \\"\\",\\n          \\"LatLong\\": \\"\\",\\n          \\"Timezone\\": \\"\\",\\n          \\"Addresses\\": [\\n            {\\n              \\"Language\\": \\"\\",\\n              \\"AddressLine\\": \\"\\",\\n              \\"Country\\": \\"\\",\\n              \\"Province\\": \\"\\",\\n              \\"City\\": \\"\\",\\n              \\"District\\": \\"\\",\\n              \\"Township\\": \\"\\"\\n            }\\n          ],\\n          \\"TravelClusterId\\": \\"\\",\\n          \\"Orientation\\": 0,\\n          \\"Figures\\": [\\n            {\\n              \\"FigureId\\": \\"\\",\\n              \\"FigureConfidence\\": 0,\\n              \\"FigureClusterId\\": \\"\\",\\n              \\"FigureClusterConfidence\\": 0,\\n              \\"FigureType\\": \\"\\",\\n              \\"Age\\": 0,\\n              \\"AgeSD\\": 0,\\n              \\"Gender\\": \\"\\",\\n              \\"GenderConfidence\\": 0,\\n              \\"Emotion\\": \\"\\",\\n              \\"EmotionConfidence\\": 0,\\n              \\"FaceQuality\\": 0,\\n              \\"Boundary\\": {\\n                \\"Width\\": 0,\\n                \\"Height\\": 0,\\n                \\"Left\\": 0,\\n                \\"Top\\": 0,\\n                \\"Polygon\\": [\\n                  {\\n                    \\"X\\": 0,\\n                    \\"Y\\": 0\\n                  }\\n                ]\\n              },\\n              \\"Mouth\\": \\"\\",\\n              \\"MouthConfidence\\": 0,\\n              \\"Beard\\": \\"\\",\\n              \\"BeardConfidence\\": 0,\\n              \\"Hat\\": \\"\\",\\n              \\"HatConfidence\\": 0,\\n              \\"Mask\\": \\"\\",\\n              \\"MaskConfidence\\": 0,\\n              \\"Glasses\\": \\"\\",\\n              \\"GlassesConfidence\\": 0,\\n              \\"Sharpness\\": 0,\\n              \\"Attractive\\": 0,\\n              \\"HeadPose\\": {\\n                \\"Pitch\\": 0,\\n                \\"Roll\\": 0,\\n                \\"Yaw\\": 0\\n              }\\n            }\\n          ],\\n          \\"FigureCount\\": 0,\\n          \\"Labels\\": [\\n            {\\n              \\"Language\\": \\"\\",\\n              \\"LabelName\\": \\"\\",\\n              \\"LabelLevel\\": 0,\\n              \\"LabelConfidence\\": 0,\\n              \\"ParentLabelName\\": \\"\\",\\n              \\"CentricScore\\": 0\\n            }\\n          ],\\n          \\"Title\\": \\"\\",\\n          \\"ImageWidth\\": 0,\\n          \\"ImageHeight\\": 0,\\n          \\"EXIF\\": \\"\\",\\n          \\"ImageScore\\": {\\n            \\"OverallQualityScore\\": 0\\n          },\\n          \\"CroppingSuggestions\\": [\\n            {\\n              \\"AspectRatio\\": \\"\\",\\n              \\"Confidence\\": 0,\\n              \\"Boundary\\": {\\n                \\"Width\\": 0,\\n                \\"Height\\": 0,\\n                \\"Left\\": 0,\\n                \\"Top\\": 0,\\n                \\"Polygon\\": [\\n                  {\\n                    \\"X\\": 0,\\n                    \\"Y\\": 0\\n                  }\\n                ]\\n              }\\n            }\\n          ],\\n          \\"OCRContents\\": [\\n            {\\n              \\"Language\\": \\"\\",\\n              \\"Contents\\": \\"\\",\\n              \\"Confidence\\": 0,\\n              \\"Boundary\\": {\\n                \\"Width\\": 0,\\n                \\"Height\\": 0,\\n                \\"Left\\": 0,\\n                \\"Top\\": 0,\\n                \\"Polygon\\": [\\n                  {\\n                    \\"X\\": 0,\\n                    \\"Y\\": 0\\n                  }\\n                ]\\n              }\\n            }\\n          ],\\n          \\"VideoWidth\\": 0,\\n          \\"VideoHeight\\": 0,\\n          \\"VideoStreams\\": [\\n            {\\n              \\"Index\\": 0,\\n              \\"Language\\": \\"\\",\\n              \\"CodecName\\": \\"\\",\\n              \\"CodecLongName\\": \\"\\",\\n              \\"Profile\\": \\"\\",\\n              \\"CodecTimeBase\\": \\"\\",\\n              \\"CodecTagString\\": \\"\\",\\n              \\"CodecTag\\": \\"\\",\\n              \\"Width\\": 0,\\n              \\"Height\\": 0,\\n              \\"HasBFrames\\": 0,\\n              \\"SampleAspectRatio\\": \\"\\",\\n              \\"DisplayAspectRatio\\": \\"\\",\\n              \\"PixelFormat\\": \\"\\",\\n              \\"Level\\": 0,\\n              \\"FrameRate\\": \\"\\",\\n              \\"AverageFrameRate\\": \\"\\",\\n              \\"TimeBase\\": \\"\\",\\n              \\"StartTime\\": 0,\\n              \\"Duration\\": 0,\\n              \\"Bitrate\\": 0,\\n              \\"FrameCount\\": 0,\\n              \\"Rotate\\": \\"\\",\\n              \\"BitDepth\\": 0,\\n              \\"ColorSpace\\": \\"\\",\\n              \\"ColorRange\\": \\"\\",\\n              \\"ColorTransfer\\": \\"\\",\\n              \\"ColorPrimaries\\": \\"\\"\\n            }\\n          ],\\n          \\"Subtitles\\": [\\n            {\\n              \\"Index\\": 0,\\n              \\"Language\\": \\"\\",\\n              \\"CodecName\\": \\"\\",\\n              \\"CodecLongName\\": \\"\\",\\n              \\"CodecTagString\\": \\"\\",\\n              \\"CodecTag\\": \\"\\",\\n              \\"StartTime\\": 0,\\n              \\"Duration\\": 0,\\n              \\"Bitrate\\": 0,\\n              \\"Content\\": \\"\\",\\n              \\"Width\\": 0,\\n              \\"Height\\": 0\\n            }\\n          ],\\n          \\"AudioStreams\\": [\\n            {\\n              \\"Index\\": 0,\\n              \\"Language\\": \\"\\",\\n              \\"CodecName\\": \\"\\",\\n              \\"CodecLongName\\": \\"\\",\\n              \\"CodecTimeBase\\": \\"\\",\\n              \\"CodecTagString\\": \\"\\",\\n              \\"CodecTag\\": \\"\\",\\n              \\"TimeBase\\": \\"\\",\\n              \\"StartTime\\": 0,\\n              \\"Duration\\": 0,\\n              \\"Bitrate\\": 0,\\n              \\"FrameCount\\": 0,\\n              \\"Lyric\\": \\"\\",\\n              \\"SampleFormat\\": \\"\\",\\n              \\"SampleRate\\": 0,\\n              \\"Channels\\": 0,\\n              \\"ChannelLayout\\": \\"\\"\\n            }\\n          ],\\n          \\"Artist\\": \\"\\",\\n          \\"AlbumArtist\\": \\"\\",\\n          \\"AudioCovers\\": [\\n            {\\n              \\"ImageWidth\\": 0,\\n              \\"ImageHeight\\": 0,\\n              \\"EXIF\\": \\"\\",\\n              \\"ImageScore\\": {\\n                \\"OverallQualityScore\\": 0\\n              },\\n              \\"CroppingSuggestions\\": [\\n                {\\n                  \\"AspectRatio\\": \\"\\",\\n                  \\"Confidence\\": 0\\n                }\\n              ],\\n              \\"OCRContents\\": [\\n                {\\n                  \\"Language\\": \\"\\",\\n                  \\"Contents\\": \\"\\",\\n                  \\"Confidence\\": 0\\n                }\\n              ]\\n            }\\n          ],\\n          \\"Composer\\": \\"\\",\\n          \\"Performer\\": \\"\\",\\n          \\"Language\\": \\"\\",\\n          \\"Album\\": \\"\\",\\n          \\"PageCount\\": 0,\\n          \\"ETag\\": \\"\\",\\n          \\"CacheControl\\": \\"\\",\\n          \\"ContentDisposition\\": \\"\\",\\n          \\"ContentEncoding\\": \\"\\",\\n          \\"ContentLanguage\\": \\"\\",\\n          \\"AccessControlAllowOrigin\\": \\"\\",\\n          \\"AccessControlRequestMethod\\": \\"\\",\\n          \\"ServerSideEncryptionCustomerAlgorithm\\": \\"\\",\\n          \\"ServerSideEncryption\\": \\"\\",\\n          \\"ServerSideDataEncryption\\": \\"\\",\\n          \\"ServerSideEncryptionKeyId\\": \\"\\",\\n          \\"OSSStorageClass\\": \\"\\",\\n          \\"OSSCRC64\\": \\"\\",\\n          \\"ObjectACL\\": \\"\\",\\n          \\"ContentMd5\\": \\"\\",\\n          \\"OSSUserMeta\\": {\\n            \\"test\\": \\"test\\",\\n            \\"test2\\": 1\\n          },\\n          \\"OSSTaggingCount\\": 0,\\n          \\"OSSTagging\\": {\\n            \\"test\\": \\"test\\",\\n            \\"test2\\": 1\\n          },\\n          \\"OSSExpiration\\": \\"\\",\\n          \\"OSSVersionId\\": \\"\\",\\n          \\"OSSDeleteMarker\\": \\"\\",\\n          \\"OSSObjectType\\": \\"\\",\\n          \\"CustomId\\": \\"\\",\\n          \\"CustomLabels\\": {\\n            \\"test\\": \\"test\\",\\n            \\"test2\\": 1\\n          },\\n          \\"StreamCount\\": 0,\\n          \\"ProgramCount\\": 0,\\n          \\"FormatName\\": \\"\\",\\n          \\"FormatLongName\\": \\"\\",\\n          \\"StartTime\\": 0,\\n          \\"Bitrate\\": 0,\\n          \\"Duration\\": 0,\\n          \\"SemanticSimilarity\\": 0,\\n          \\"SemanticTypes\\": [\\n            \\"\\"\\n          ],\\n          \\"Elements\\": [\\n            {\\n              \\"ElementContents\\": [\\n                {\\n                  \\"Type\\": \\"\\",\\n                  \\"Content\\": \\"\\",\\n                  \\"URL\\": \\"\\"\\n                }\\n              ]\\n            }\\n          ],\\n          \\"OCRTexts\\": \\"\\"\\n        }\\n      ],\\n      \\"Cover\\": {\\n        \\"OwnerId\\": \\"\\",\\n        \\"ProjectName\\": \\"\\",\\n        \\"DatasetName\\": \\"\\",\\n        \\"ObjectType\\": \\"\\",\\n        \\"ObjectId\\": \\"\\",\\n        \\"UpdateTime\\": \\"\\",\\n        \\"CreateTime\\": \\"\\",\\n        \\"URI\\": \\"\\",\\n        \\"OSSURI\\": \\"\\",\\n        \\"Filename\\": \\"\\",\\n        \\"MediaType\\": \\"\\",\\n        \\"ContentType\\": \\"\\",\\n        \\"Size\\": 0,\\n        \\"FileHash\\": \\"\\",\\n        \\"FileModifiedTime\\": \\"\\",\\n        \\"FileCreateTime\\": \\"\\",\\n        \\"FileAccessTime\\": \\"\\",\\n        \\"ProduceTime\\": \\"\\",\\n        \\"LatLong\\": \\"\\",\\n        \\"Timezone\\": \\"\\",\\n        \\"Addresses\\": [\\n          {\\n            \\"Language\\": \\"\\",\\n            \\"AddressLine\\": \\"\\",\\n            \\"Country\\": \\"\\",\\n            \\"Province\\": \\"\\",\\n            \\"City\\": \\"\\",\\n            \\"District\\": \\"\\",\\n            \\"Township\\": \\"\\"\\n          }\\n        ],\\n        \\"TravelClusterId\\": \\"\\",\\n        \\"Orientation\\": 0,\\n        \\"Figures\\": [\\n          {\\n            \\"FigureId\\": \\"\\",\\n            \\"FigureConfidence\\": 0,\\n            \\"FigureClusterId\\": \\"\\",\\n            \\"FigureClusterConfidence\\": 0,\\n            \\"FigureType\\": \\"\\",\\n            \\"Age\\": 0,\\n            \\"AgeSD\\": 0,\\n            \\"Gender\\": \\"\\",\\n            \\"GenderConfidence\\": 0,\\n            \\"Emotion\\": \\"\\",\\n            \\"EmotionConfidence\\": 0,\\n            \\"FaceQuality\\": 0,\\n            \\"Mouth\\": \\"\\",\\n            \\"MouthConfidence\\": 0,\\n            \\"Beard\\": \\"\\",\\n            \\"BeardConfidence\\": 0,\\n            \\"Hat\\": \\"\\",\\n            \\"HatConfidence\\": 0,\\n            \\"Mask\\": \\"\\",\\n            \\"MaskConfidence\\": 0,\\n            \\"Glasses\\": \\"\\",\\n            \\"GlassesConfidence\\": 0,\\n            \\"Sharpness\\": 0,\\n            \\"Attractive\\": 0,\\n            \\"HeadPose\\": {\\n              \\"Pitch\\": 0,\\n              \\"Roll\\": 0,\\n              \\"Yaw\\": 0\\n            }\\n          }\\n        ],\\n        \\"FigureCount\\": 0,\\n        \\"Labels\\": [\\n          {\\n            \\"Language\\": \\"\\",\\n            \\"LabelName\\": \\"\\",\\n            \\"LabelLevel\\": 0,\\n            \\"LabelConfidence\\": 0,\\n            \\"ParentLabelName\\": \\"\\",\\n            \\"CentricScore\\": 0\\n          }\\n        ],\\n        \\"Title\\": \\"\\",\\n        \\"ImageWidth\\": 0,\\n        \\"ImageHeight\\": 0,\\n        \\"EXIF\\": \\"\\",\\n        \\"ImageScore\\": {\\n          \\"OverallQualityScore\\": 0\\n        },\\n        \\"CroppingSuggestions\\": [\\n          {\\n            \\"AspectRatio\\": \\"\\",\\n            \\"Confidence\\": 0\\n          }\\n        ],\\n        \\"OCRContents\\": [\\n          {\\n            \\"Language\\": \\"\\",\\n            \\"Contents\\": \\"\\",\\n            \\"Confidence\\": 0\\n          }\\n        ],\\n        \\"VideoWidth\\": 0,\\n        \\"VideoHeight\\": 0,\\n        \\"VideoStreams\\": [\\n          {\\n            \\"Index\\": 0,\\n            \\"Language\\": \\"\\",\\n            \\"CodecName\\": \\"\\",\\n            \\"CodecLongName\\": \\"\\",\\n            \\"Profile\\": \\"\\",\\n            \\"CodecTimeBase\\": \\"\\",\\n            \\"CodecTagString\\": \\"\\",\\n            \\"CodecTag\\": \\"\\",\\n            \\"Width\\": 0,\\n            \\"Height\\": 0,\\n            \\"HasBFrames\\": 0,\\n            \\"SampleAspectRatio\\": \\"\\",\\n            \\"DisplayAspectRatio\\": \\"\\",\\n            \\"PixelFormat\\": \\"\\",\\n            \\"Level\\": 0,\\n            \\"FrameRate\\": \\"\\",\\n            \\"AverageFrameRate\\": \\"\\",\\n            \\"TimeBase\\": \\"\\",\\n            \\"StartTime\\": 0,\\n            \\"Duration\\": 0,\\n            \\"Bitrate\\": 0,\\n            \\"FrameCount\\": 0,\\n            \\"Rotate\\": \\"\\",\\n            \\"BitDepth\\": 0,\\n            \\"ColorSpace\\": \\"\\",\\n            \\"ColorRange\\": \\"\\",\\n            \\"ColorTransfer\\": \\"\\",\\n            \\"ColorPrimaries\\": \\"\\"\\n          }\\n        ],\\n        \\"Subtitles\\": [\\n          {\\n            \\"Index\\": 0,\\n            \\"Language\\": \\"\\",\\n            \\"CodecName\\": \\"\\",\\n            \\"CodecLongName\\": \\"\\",\\n            \\"CodecTagString\\": \\"\\",\\n            \\"CodecTag\\": \\"\\",\\n            \\"StartTime\\": 0,\\n            \\"Duration\\": 0,\\n            \\"Bitrate\\": 0,\\n            \\"Content\\": \\"\\",\\n            \\"Width\\": 0,\\n            \\"Height\\": 0\\n          }\\n        ],\\n        \\"AudioStreams\\": [\\n          {\\n            \\"Index\\": 0,\\n            \\"Language\\": \\"\\",\\n            \\"CodecName\\": \\"\\",\\n            \\"CodecLongName\\": \\"\\",\\n            \\"CodecTimeBase\\": \\"\\",\\n            \\"CodecTagString\\": \\"\\",\\n            \\"CodecTag\\": \\"\\",\\n            \\"TimeBase\\": \\"\\",\\n            \\"StartTime\\": 0,\\n            \\"Duration\\": 0,\\n            \\"Bitrate\\": 0,\\n            \\"FrameCount\\": 0,\\n            \\"Lyric\\": \\"\\",\\n            \\"SampleFormat\\": \\"\\",\\n            \\"SampleRate\\": 0,\\n            \\"Channels\\": 0,\\n            \\"ChannelLayout\\": \\"\\"\\n          }\\n        ],\\n        \\"Artist\\": \\"\\",\\n        \\"AlbumArtist\\": \\"\\",\\n        \\"AudioCovers\\": [\\n          {\\n            \\"ImageWidth\\": 0,\\n            \\"ImageHeight\\": 0,\\n            \\"EXIF\\": \\"\\",\\n            \\"CroppingSuggestions\\": [],\\n            \\"OCRContents\\": []\\n          }\\n        ],\\n        \\"Composer\\": \\"\\",\\n        \\"Performer\\": \\"\\",\\n        \\"Language\\": \\"\\",\\n        \\"Album\\": \\"\\",\\n        \\"PageCount\\": 0,\\n        \\"ETag\\": \\"\\",\\n        \\"CacheControl\\": \\"\\",\\n        \\"ContentDisposition\\": \\"\\",\\n        \\"ContentEncoding\\": \\"\\",\\n        \\"ContentLanguage\\": \\"\\",\\n        \\"AccessControlAllowOrigin\\": \\"\\",\\n        \\"AccessControlRequestMethod\\": \\"\\",\\n        \\"ServerSideEncryptionCustomerAlgorithm\\": \\"\\",\\n        \\"ServerSideEncryption\\": \\"\\",\\n        \\"ServerSideDataEncryption\\": \\"\\",\\n        \\"ServerSideEncryptionKeyId\\": \\"\\",\\n        \\"OSSStorageClass\\": \\"\\",\\n        \\"OSSCRC64\\": \\"\\",\\n        \\"ObjectACL\\": \\"\\",\\n        \\"ContentMd5\\": \\"\\",\\n        \\"OSSUserMeta\\": {\\n          \\"test\\": \\"test\\",\\n          \\"test2\\": 1\\n        },\\n        \\"OSSTaggingCount\\": 0,\\n        \\"OSSTagging\\": {\\n          \\"test\\": \\"test\\",\\n          \\"test2\\": 1\\n        },\\n        \\"OSSExpiration\\": \\"\\",\\n        \\"OSSVersionId\\": \\"\\",\\n        \\"OSSDeleteMarker\\": \\"\\",\\n        \\"OSSObjectType\\": \\"\\",\\n        \\"CustomId\\": \\"\\",\\n        \\"CustomLabels\\": {\\n          \\"test\\": \\"test\\",\\n          \\"test2\\": 1\\n        },\\n        \\"StreamCount\\": 0,\\n        \\"ProgramCount\\": 0,\\n        \\"FormatName\\": \\"\\",\\n        \\"FormatLongName\\": \\"\\",\\n        \\"StartTime\\": 0,\\n        \\"Bitrate\\": 0,\\n        \\"Duration\\": 0,\\n        \\"SemanticSimilarity\\": 0,\\n        \\"SemanticTypes\\": [\\n          \\"\\"\\n        ],\\n        \\"Elements\\": [\\n          {\\n            \\"ElementContents\\": [\\n              {\\n                \\"Type\\": \\"\\",\\n                \\"Content\\": \\"\\",\\n                \\"URL\\": \\"\\"\\n              }\\n            ]\\n          }\\n        ],\\n        \\"OCRTexts\\": \\"\\"\\n      },\\n      \\"FigureClusterIds\\": [\\n        \\"\\"\\n      ],\\n      \\"CustomId\\": \\"\\",\\n      \\"CustomLabels\\": {\\n        \\"test\\": \\"test\\",\\n        \\"test2\\": 1\\n      },\\n      \\"Addresses\\": [\\n        {\\n          \\"Language\\": \\"\\",\\n          \\"AddressLine\\": \\"\\",\\n          \\"Country\\": \\"\\",\\n          \\"Province\\": \\"\\",\\n          \\"City\\": \\"\\",\\n          \\"District\\": \\"\\",\\n          \\"Township\\": \\"\\"\\n        }\\n      ]\\n    }\\n  ],\\n  \\"NextToken\\": \\"MTIzNDU2Nzg6aW1tdGVzdDpleGFtcGxlYnVja2V0OmRhdGFzZXQwMDE6b3NzOi8vZXhhbXBsZWJ1Y2tldC9zYW1wbGVvYmplY3Qx****\\"\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '查询故事',
      'description' => '- **请确保在使用该接口前，已充分了解智能媒体管理产品的收费方式和[价格](~~477042~~)。**
- 调用该接口前，请确保您已通过绑定方式（[CreateBinding](~~478202~~)）或者主动索引（[IndexFileMeta](~~478166~~)或者[BatchIndexFileMeta](~~478167~~)）方式将文件索引到数据集（Dataset）中。
- 调用该接口前，请确保已经使用[创建故事](~~478193~~)或者[创建自定义故事](~~478196~~)接口生成过相册故事。',
    ),
    'GetStory' => 
    array (
      'summary' => '获取一个故事的信息。',
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
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'get',
        'abilityTreeCode' => '102496',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREimmPQ568C',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ProjectName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '项目名称。获取方式请参见[创建项目](~~478153~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'test-project',
          ),
        ),
        1 => 
        array (
          'name' => 'DatasetName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据集名称。获取方式请参见[创建数据集](~~478160~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'test-dataset',
          ),
        ),
        2 => 
        array (
          'name' => 'ObjectId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定要获取信息的故事对象ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'id1',
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
                'description' => '当次请求的Request ID。',
                'type' => 'string',
                'example' => '1B3D5E0A-D8B8-4DA0-8127-ED32C851****',
              ),
              'Story' => 
              array (
                'description' => '故事详细信息。',
                '$ref' => '#/components/schemas/Story',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"1B3D5E0A-D8B8-4DA0-8127-ED32C851****\\",\\n  \\"Story\\": {\\n    \\"OwnerId\\": \\"\\",\\n    \\"ProjectName\\": \\"\\",\\n    \\"DatasetName\\": \\"\\",\\n    \\"ObjectId\\": \\"\\",\\n    \\"ObjectType\\": \\"\\",\\n    \\"UpdateTime\\": \\"\\",\\n    \\"CreateTime\\": \\"\\",\\n    \\"StoryName\\": \\"\\",\\n    \\"StoryType\\": \\"\\",\\n    \\"StorySubType\\": \\"\\",\\n    \\"StoryStartTime\\": \\"\\",\\n    \\"StoryEndTime\\": \\"\\",\\n    \\"Files\\": [\\n      {\\n        \\"OwnerId\\": \\"\\",\\n        \\"ProjectName\\": \\"\\",\\n        \\"DatasetName\\": \\"\\",\\n        \\"ObjectType\\": \\"\\",\\n        \\"ObjectId\\": \\"\\",\\n        \\"UpdateTime\\": \\"\\",\\n        \\"CreateTime\\": \\"\\",\\n        \\"URI\\": \\"\\",\\n        \\"OSSURI\\": \\"\\",\\n        \\"Filename\\": \\"\\",\\n        \\"MediaType\\": \\"\\",\\n        \\"ContentType\\": \\"\\",\\n        \\"Size\\": 0,\\n        \\"FileHash\\": \\"\\",\\n        \\"FileModifiedTime\\": \\"\\",\\n        \\"FileCreateTime\\": \\"\\",\\n        \\"FileAccessTime\\": \\"\\",\\n        \\"ProduceTime\\": \\"\\",\\n        \\"LatLong\\": \\"\\",\\n        \\"Timezone\\": \\"\\",\\n        \\"Addresses\\": [\\n          {\\n            \\"Language\\": \\"\\",\\n            \\"AddressLine\\": \\"\\",\\n            \\"Country\\": \\"\\",\\n            \\"Province\\": \\"\\",\\n            \\"City\\": \\"\\",\\n            \\"District\\": \\"\\",\\n            \\"Township\\": \\"\\"\\n          }\\n        ],\\n        \\"TravelClusterId\\": \\"\\",\\n        \\"Orientation\\": 0,\\n        \\"Figures\\": [\\n          {\\n            \\"FigureId\\": \\"\\",\\n            \\"FigureConfidence\\": 0,\\n            \\"FigureClusterId\\": \\"\\",\\n            \\"FigureClusterConfidence\\": 0,\\n            \\"FigureType\\": \\"\\",\\n            \\"Age\\": 0,\\n            \\"AgeSD\\": 0,\\n            \\"Gender\\": \\"\\",\\n            \\"GenderConfidence\\": 0,\\n            \\"Emotion\\": \\"\\",\\n            \\"EmotionConfidence\\": 0,\\n            \\"FaceQuality\\": 0,\\n            \\"Boundary\\": {\\n              \\"Width\\": 0,\\n              \\"Height\\": 0,\\n              \\"Left\\": 0,\\n              \\"Top\\": 0,\\n              \\"Polygon\\": [\\n                {\\n                  \\"X\\": 0,\\n                  \\"Y\\": 0\\n                }\\n              ]\\n            },\\n            \\"Mouth\\": \\"\\",\\n            \\"MouthConfidence\\": 0,\\n            \\"Beard\\": \\"\\",\\n            \\"BeardConfidence\\": 0,\\n            \\"Hat\\": \\"\\",\\n            \\"HatConfidence\\": 0,\\n            \\"Mask\\": \\"\\",\\n            \\"MaskConfidence\\": 0,\\n            \\"Glasses\\": \\"\\",\\n            \\"GlassesConfidence\\": 0,\\n            \\"Sharpness\\": 0,\\n            \\"Attractive\\": 0,\\n            \\"HeadPose\\": {\\n              \\"Pitch\\": 0,\\n              \\"Roll\\": 0,\\n              \\"Yaw\\": 0\\n            }\\n          }\\n        ],\\n        \\"FigureCount\\": 0,\\n        \\"Labels\\": [\\n          {\\n            \\"Language\\": \\"\\",\\n            \\"LabelName\\": \\"\\",\\n            \\"LabelLevel\\": 0,\\n            \\"LabelConfidence\\": 0,\\n            \\"ParentLabelName\\": \\"\\",\\n            \\"CentricScore\\": 0\\n          }\\n        ],\\n        \\"Title\\": \\"\\",\\n        \\"ImageWidth\\": 0,\\n        \\"ImageHeight\\": 0,\\n        \\"EXIF\\": \\"\\",\\n        \\"ImageScore\\": {\\n          \\"OverallQualityScore\\": 0\\n        },\\n        \\"CroppingSuggestions\\": [\\n          {\\n            \\"AspectRatio\\": \\"\\",\\n            \\"Confidence\\": 0,\\n            \\"Boundary\\": {\\n              \\"Width\\": 0,\\n              \\"Height\\": 0,\\n              \\"Left\\": 0,\\n              \\"Top\\": 0,\\n              \\"Polygon\\": [\\n                {\\n                  \\"X\\": 0,\\n                  \\"Y\\": 0\\n                }\\n              ]\\n            }\\n          }\\n        ],\\n        \\"OCRContents\\": [\\n          {\\n            \\"Language\\": \\"\\",\\n            \\"Contents\\": \\"\\",\\n            \\"Confidence\\": 0,\\n            \\"Boundary\\": {\\n              \\"Width\\": 0,\\n              \\"Height\\": 0,\\n              \\"Left\\": 0,\\n              \\"Top\\": 0,\\n              \\"Polygon\\": [\\n                {\\n                  \\"X\\": 0,\\n                  \\"Y\\": 0\\n                }\\n              ]\\n            }\\n          }\\n        ],\\n        \\"VideoWidth\\": 0,\\n        \\"VideoHeight\\": 0,\\n        \\"VideoStreams\\": [\\n          {\\n            \\"Index\\": 0,\\n            \\"Language\\": \\"\\",\\n            \\"CodecName\\": \\"\\",\\n            \\"CodecLongName\\": \\"\\",\\n            \\"Profile\\": \\"\\",\\n            \\"CodecTimeBase\\": \\"\\",\\n            \\"CodecTagString\\": \\"\\",\\n            \\"CodecTag\\": \\"\\",\\n            \\"Width\\": 0,\\n            \\"Height\\": 0,\\n            \\"HasBFrames\\": 0,\\n            \\"SampleAspectRatio\\": \\"\\",\\n            \\"DisplayAspectRatio\\": \\"\\",\\n            \\"PixelFormat\\": \\"\\",\\n            \\"Level\\": 0,\\n            \\"FrameRate\\": \\"\\",\\n            \\"AverageFrameRate\\": \\"\\",\\n            \\"TimeBase\\": \\"\\",\\n            \\"StartTime\\": 0,\\n            \\"Duration\\": 0,\\n            \\"Bitrate\\": 0,\\n            \\"FrameCount\\": 0,\\n            \\"Rotate\\": \\"\\",\\n            \\"BitDepth\\": 0,\\n            \\"ColorSpace\\": \\"\\",\\n            \\"ColorRange\\": \\"\\",\\n            \\"ColorTransfer\\": \\"\\",\\n            \\"ColorPrimaries\\": \\"\\"\\n          }\\n        ],\\n        \\"Subtitles\\": [\\n          {\\n            \\"Index\\": 0,\\n            \\"Language\\": \\"\\",\\n            \\"CodecName\\": \\"\\",\\n            \\"CodecLongName\\": \\"\\",\\n            \\"CodecTagString\\": \\"\\",\\n            \\"CodecTag\\": \\"\\",\\n            \\"StartTime\\": 0,\\n            \\"Duration\\": 0,\\n            \\"Bitrate\\": 0,\\n            \\"Content\\": \\"\\",\\n            \\"Width\\": 0,\\n            \\"Height\\": 0\\n          }\\n        ],\\n        \\"AudioStreams\\": [\\n          {\\n            \\"Index\\": 0,\\n            \\"Language\\": \\"\\",\\n            \\"CodecName\\": \\"\\",\\n            \\"CodecLongName\\": \\"\\",\\n            \\"CodecTimeBase\\": \\"\\",\\n            \\"CodecTagString\\": \\"\\",\\n            \\"CodecTag\\": \\"\\",\\n            \\"TimeBase\\": \\"\\",\\n            \\"StartTime\\": 0,\\n            \\"Duration\\": 0,\\n            \\"Bitrate\\": 0,\\n            \\"FrameCount\\": 0,\\n            \\"Lyric\\": \\"\\",\\n            \\"SampleFormat\\": \\"\\",\\n            \\"SampleRate\\": 0,\\n            \\"Channels\\": 0,\\n            \\"ChannelLayout\\": \\"\\"\\n          }\\n        ],\\n        \\"Artist\\": \\"\\",\\n        \\"AlbumArtist\\": \\"\\",\\n        \\"AudioCovers\\": [\\n          {\\n            \\"ImageWidth\\": 0,\\n            \\"ImageHeight\\": 0,\\n            \\"EXIF\\": \\"\\",\\n            \\"ImageScore\\": {\\n              \\"OverallQualityScore\\": 0\\n            },\\n            \\"CroppingSuggestions\\": [\\n              {\\n                \\"AspectRatio\\": \\"\\",\\n                \\"Confidence\\": 0\\n              }\\n            ],\\n            \\"OCRContents\\": [\\n              {\\n                \\"Language\\": \\"\\",\\n                \\"Contents\\": \\"\\",\\n                \\"Confidence\\": 0\\n              }\\n            ]\\n          }\\n        ],\\n        \\"Composer\\": \\"\\",\\n        \\"Performer\\": \\"\\",\\n        \\"Language\\": \\"\\",\\n        \\"Album\\": \\"\\",\\n        \\"PageCount\\": 0,\\n        \\"ETag\\": \\"\\",\\n        \\"CacheControl\\": \\"\\",\\n        \\"ContentDisposition\\": \\"\\",\\n        \\"ContentEncoding\\": \\"\\",\\n        \\"ContentLanguage\\": \\"\\",\\n        \\"AccessControlAllowOrigin\\": \\"\\",\\n        \\"AccessControlRequestMethod\\": \\"\\",\\n        \\"ServerSideEncryptionCustomerAlgorithm\\": \\"\\",\\n        \\"ServerSideEncryption\\": \\"\\",\\n        \\"ServerSideDataEncryption\\": \\"\\",\\n        \\"ServerSideEncryptionKeyId\\": \\"\\",\\n        \\"OSSStorageClass\\": \\"\\",\\n        \\"OSSCRC64\\": \\"\\",\\n        \\"ObjectACL\\": \\"\\",\\n        \\"ContentMd5\\": \\"\\",\\n        \\"OSSUserMeta\\": {\\n          \\"test\\": \\"test\\",\\n          \\"test2\\": 1\\n        },\\n        \\"OSSTaggingCount\\": 0,\\n        \\"OSSTagging\\": {\\n          \\"test\\": \\"test\\",\\n          \\"test2\\": 1\\n        },\\n        \\"OSSExpiration\\": \\"\\",\\n        \\"OSSVersionId\\": \\"\\",\\n        \\"OSSDeleteMarker\\": \\"\\",\\n        \\"OSSObjectType\\": \\"\\",\\n        \\"CustomId\\": \\"\\",\\n        \\"CustomLabels\\": {\\n          \\"test\\": \\"test\\",\\n          \\"test2\\": 1\\n        },\\n        \\"StreamCount\\": 0,\\n        \\"ProgramCount\\": 0,\\n        \\"FormatName\\": \\"\\",\\n        \\"FormatLongName\\": \\"\\",\\n        \\"StartTime\\": 0,\\n        \\"Bitrate\\": 0,\\n        \\"Duration\\": 0,\\n        \\"SemanticSimilarity\\": 0,\\n        \\"SemanticTypes\\": [\\n          \\"\\"\\n        ],\\n        \\"Elements\\": [\\n          {\\n            \\"ElementContents\\": [\\n              {\\n                \\"Type\\": \\"\\",\\n                \\"Content\\": \\"\\",\\n                \\"URL\\": \\"\\"\\n              }\\n            ]\\n          }\\n        ],\\n        \\"OCRTexts\\": \\"\\"\\n      }\\n    ],\\n    \\"Cover\\": {\\n      \\"OwnerId\\": \\"\\",\\n      \\"ProjectName\\": \\"\\",\\n      \\"DatasetName\\": \\"\\",\\n      \\"ObjectType\\": \\"\\",\\n      \\"ObjectId\\": \\"\\",\\n      \\"UpdateTime\\": \\"\\",\\n      \\"CreateTime\\": \\"\\",\\n      \\"URI\\": \\"\\",\\n      \\"OSSURI\\": \\"\\",\\n      \\"Filename\\": \\"\\",\\n      \\"MediaType\\": \\"\\",\\n      \\"ContentType\\": \\"\\",\\n      \\"Size\\": 0,\\n      \\"FileHash\\": \\"\\",\\n      \\"FileModifiedTime\\": \\"\\",\\n      \\"FileCreateTime\\": \\"\\",\\n      \\"FileAccessTime\\": \\"\\",\\n      \\"ProduceTime\\": \\"\\",\\n      \\"LatLong\\": \\"\\",\\n      \\"Timezone\\": \\"\\",\\n      \\"Addresses\\": [\\n        {\\n          \\"Language\\": \\"\\",\\n          \\"AddressLine\\": \\"\\",\\n          \\"Country\\": \\"\\",\\n          \\"Province\\": \\"\\",\\n          \\"City\\": \\"\\",\\n          \\"District\\": \\"\\",\\n          \\"Township\\": \\"\\"\\n        }\\n      ],\\n      \\"TravelClusterId\\": \\"\\",\\n      \\"Orientation\\": 0,\\n      \\"Figures\\": [\\n        {\\n          \\"FigureId\\": \\"\\",\\n          \\"FigureConfidence\\": 0,\\n          \\"FigureClusterId\\": \\"\\",\\n          \\"FigureClusterConfidence\\": 0,\\n          \\"FigureType\\": \\"\\",\\n          \\"Age\\": 0,\\n          \\"AgeSD\\": 0,\\n          \\"Gender\\": \\"\\",\\n          \\"GenderConfidence\\": 0,\\n          \\"Emotion\\": \\"\\",\\n          \\"EmotionConfidence\\": 0,\\n          \\"FaceQuality\\": 0,\\n          \\"Mouth\\": \\"\\",\\n          \\"MouthConfidence\\": 0,\\n          \\"Beard\\": \\"\\",\\n          \\"BeardConfidence\\": 0,\\n          \\"Hat\\": \\"\\",\\n          \\"HatConfidence\\": 0,\\n          \\"Mask\\": \\"\\",\\n          \\"MaskConfidence\\": 0,\\n          \\"Glasses\\": \\"\\",\\n          \\"GlassesConfidence\\": 0,\\n          \\"Sharpness\\": 0,\\n          \\"Attractive\\": 0,\\n          \\"HeadPose\\": {\\n            \\"Pitch\\": 0,\\n            \\"Roll\\": 0,\\n            \\"Yaw\\": 0\\n          }\\n        }\\n      ],\\n      \\"FigureCount\\": 0,\\n      \\"Labels\\": [\\n        {\\n          \\"Language\\": \\"\\",\\n          \\"LabelName\\": \\"\\",\\n          \\"LabelLevel\\": 0,\\n          \\"LabelConfidence\\": 0,\\n          \\"ParentLabelName\\": \\"\\",\\n          \\"CentricScore\\": 0\\n        }\\n      ],\\n      \\"Title\\": \\"\\",\\n      \\"ImageWidth\\": 0,\\n      \\"ImageHeight\\": 0,\\n      \\"EXIF\\": \\"\\",\\n      \\"ImageScore\\": {\\n        \\"OverallQualityScore\\": 0\\n      },\\n      \\"CroppingSuggestions\\": [\\n        {\\n          \\"AspectRatio\\": \\"\\",\\n          \\"Confidence\\": 0\\n        }\\n      ],\\n      \\"OCRContents\\": [\\n        {\\n          \\"Language\\": \\"\\",\\n          \\"Contents\\": \\"\\",\\n          \\"Confidence\\": 0\\n        }\\n      ],\\n      \\"VideoWidth\\": 0,\\n      \\"VideoHeight\\": 0,\\n      \\"VideoStreams\\": [\\n        {\\n          \\"Index\\": 0,\\n          \\"Language\\": \\"\\",\\n          \\"CodecName\\": \\"\\",\\n          \\"CodecLongName\\": \\"\\",\\n          \\"Profile\\": \\"\\",\\n          \\"CodecTimeBase\\": \\"\\",\\n          \\"CodecTagString\\": \\"\\",\\n          \\"CodecTag\\": \\"\\",\\n          \\"Width\\": 0,\\n          \\"Height\\": 0,\\n          \\"HasBFrames\\": 0,\\n          \\"SampleAspectRatio\\": \\"\\",\\n          \\"DisplayAspectRatio\\": \\"\\",\\n          \\"PixelFormat\\": \\"\\",\\n          \\"Level\\": 0,\\n          \\"FrameRate\\": \\"\\",\\n          \\"AverageFrameRate\\": \\"\\",\\n          \\"TimeBase\\": \\"\\",\\n          \\"StartTime\\": 0,\\n          \\"Duration\\": 0,\\n          \\"Bitrate\\": 0,\\n          \\"FrameCount\\": 0,\\n          \\"Rotate\\": \\"\\",\\n          \\"BitDepth\\": 0,\\n          \\"ColorSpace\\": \\"\\",\\n          \\"ColorRange\\": \\"\\",\\n          \\"ColorTransfer\\": \\"\\",\\n          \\"ColorPrimaries\\": \\"\\"\\n        }\\n      ],\\n      \\"Subtitles\\": [\\n        {\\n          \\"Index\\": 0,\\n          \\"Language\\": \\"\\",\\n          \\"CodecName\\": \\"\\",\\n          \\"CodecLongName\\": \\"\\",\\n          \\"CodecTagString\\": \\"\\",\\n          \\"CodecTag\\": \\"\\",\\n          \\"StartTime\\": 0,\\n          \\"Duration\\": 0,\\n          \\"Bitrate\\": 0,\\n          \\"Content\\": \\"\\",\\n          \\"Width\\": 0,\\n          \\"Height\\": 0\\n        }\\n      ],\\n      \\"AudioStreams\\": [\\n        {\\n          \\"Index\\": 0,\\n          \\"Language\\": \\"\\",\\n          \\"CodecName\\": \\"\\",\\n          \\"CodecLongName\\": \\"\\",\\n          \\"CodecTimeBase\\": \\"\\",\\n          \\"CodecTagString\\": \\"\\",\\n          \\"CodecTag\\": \\"\\",\\n          \\"TimeBase\\": \\"\\",\\n          \\"StartTime\\": 0,\\n          \\"Duration\\": 0,\\n          \\"Bitrate\\": 0,\\n          \\"FrameCount\\": 0,\\n          \\"Lyric\\": \\"\\",\\n          \\"SampleFormat\\": \\"\\",\\n          \\"SampleRate\\": 0,\\n          \\"Channels\\": 0,\\n          \\"ChannelLayout\\": \\"\\"\\n        }\\n      ],\\n      \\"Artist\\": \\"\\",\\n      \\"AlbumArtist\\": \\"\\",\\n      \\"AudioCovers\\": [\\n        {\\n          \\"ImageWidth\\": 0,\\n          \\"ImageHeight\\": 0,\\n          \\"EXIF\\": \\"\\",\\n          \\"CroppingSuggestions\\": [],\\n          \\"OCRContents\\": []\\n        }\\n      ],\\n      \\"Composer\\": \\"\\",\\n      \\"Performer\\": \\"\\",\\n      \\"Language\\": \\"\\",\\n      \\"Album\\": \\"\\",\\n      \\"PageCount\\": 0,\\n      \\"ETag\\": \\"\\",\\n      \\"CacheControl\\": \\"\\",\\n      \\"ContentDisposition\\": \\"\\",\\n      \\"ContentEncoding\\": \\"\\",\\n      \\"ContentLanguage\\": \\"\\",\\n      \\"AccessControlAllowOrigin\\": \\"\\",\\n      \\"AccessControlRequestMethod\\": \\"\\",\\n      \\"ServerSideEncryptionCustomerAlgorithm\\": \\"\\",\\n      \\"ServerSideEncryption\\": \\"\\",\\n      \\"ServerSideDataEncryption\\": \\"\\",\\n      \\"ServerSideEncryptionKeyId\\": \\"\\",\\n      \\"OSSStorageClass\\": \\"\\",\\n      \\"OSSCRC64\\": \\"\\",\\n      \\"ObjectACL\\": \\"\\",\\n      \\"ContentMd5\\": \\"\\",\\n      \\"OSSUserMeta\\": {\\n        \\"test\\": \\"test\\",\\n        \\"test2\\": 1\\n      },\\n      \\"OSSTaggingCount\\": 0,\\n      \\"OSSTagging\\": {\\n        \\"test\\": \\"test\\",\\n        \\"test2\\": 1\\n      },\\n      \\"OSSExpiration\\": \\"\\",\\n      \\"OSSVersionId\\": \\"\\",\\n      \\"OSSDeleteMarker\\": \\"\\",\\n      \\"OSSObjectType\\": \\"\\",\\n      \\"CustomId\\": \\"\\",\\n      \\"CustomLabels\\": {\\n        \\"test\\": \\"test\\",\\n        \\"test2\\": 1\\n      },\\n      \\"StreamCount\\": 0,\\n      \\"ProgramCount\\": 0,\\n      \\"FormatName\\": \\"\\",\\n      \\"FormatLongName\\": \\"\\",\\n      \\"StartTime\\": 0,\\n      \\"Bitrate\\": 0,\\n      \\"Duration\\": 0,\\n      \\"SemanticSimilarity\\": 0,\\n      \\"SemanticTypes\\": [\\n        \\"\\"\\n      ],\\n      \\"Elements\\": [\\n        {\\n          \\"ElementContents\\": [\\n            {\\n              \\"Type\\": \\"\\",\\n              \\"Content\\": \\"\\",\\n              \\"URL\\": \\"\\"\\n            }\\n          ]\\n        }\\n      ],\\n      \\"OCRTexts\\": \\"\\"\\n    },\\n    \\"FigureClusterIds\\": [\\n      \\"\\"\\n    ],\\n    \\"CustomId\\": \\"\\",\\n    \\"CustomLabels\\": {\\n      \\"test\\": \\"test\\",\\n      \\"test2\\": 1\\n    },\\n    \\"Addresses\\": [\\n      {\\n        \\"Language\\": \\"\\",\\n        \\"AddressLine\\": \\"\\",\\n        \\"Country\\": \\"\\",\\n        \\"Province\\": \\"\\",\\n        \\"City\\": \\"\\",\\n        \\"District\\": \\"\\",\\n        \\"Township\\": \\"\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '获取故事信息',
      'description' => '- **请确保在使用该接口前，已充分了解智能媒体管理产品的收费方式和[价格](~~477042~~)。**
- 调用该接口前，请确保您已通过绑定方式（[CreateBinding](~~478202~~)）或者主动索引（[IndexFileMeta](~~478166~~)或者[BatchIndexFileMeta](~~478167~~)）方式将文件索引到数据集（Dataset）中。
- 调用该接口前，请确保已经使用[创建故事](~~478193~~)或者[创建自定义故事](~~478196~~)接口生成过相册故事。',
    ),
    'CreateCustomizedStory' => 
    array (
      'summary' => '使用选择的图片和视频创建一个故事。',
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
        'operationType' => 'create',
        'abilityTreeCode' => '156038',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREimmPQ568C',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ProjectName',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '项目名称。获取方式请参见[创建项目](~~478153~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'immtest',
          ),
        ),
        1 => 
        array (
          'name' => 'DatasetName',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '数据集名称。获取方式请参见[创建数据集](~~478160~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'dataset001',
          ),
        ),
        2 => 
        array (
          'name' => 'StoryType',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '故事类型，指定需要生成相册故事的类型。具体类型描述和可取值请参见[故事类型和子类型](~~475311~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'PeopleMemory',
          ),
        ),
        3 => 
        array (
          'name' => 'StorySubType',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '故事子类型，指定需要生成的相册故事的子类型，具体类型描述和可取值请参见[故事类型和子类型](~~475311~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'Solo',
          ),
        ),
        4 => 
        array (
          'name' => 'StoryName',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '故事名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'name1',
          ),
        ),
        5 => 
        array (
          'name' => 'Cover',
          'in' => 'formData',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '故事封面。用户可以指定一个图片作为自定义故事的封面。',
            'type' => 'object',
            'properties' => 
            array (
              'URI' => 
              array (
                'description' => '故事封面图片的地址。',
                'type' => 'string',
                'required' => true,
                'example' => 'oss://test-bucket/test-object.jpg',
              ),
            ),
            'required' => true,
          ),
        ),
        6 => 
        array (
          'name' => 'Files',
          'in' => 'formData',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '自定义故事的文件列表，每个自定义故事最多支持100个文件。',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'URI' => 
                array (
                  'description' => '故事文件列表地址。',
                  'type' => 'string',
                  'required' => true,
                  'example' => '[
      {
            "URI": "oss://test-bucket/test-object_1.jpg"
      },
{
            "URI": "oss://test-bucket/test-object_2.jpg"
      }
]',
                ),
              ),
              'required' => true,
            ),
            'required' => true,
          ),
        ),
        7 => 
        array (
          'name' => 'CustomLabels',
          'in' => 'formData',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '自定义标签。该标签标记了用户对该故事自定义的信息，可作检索使用。',
            'type' => 'object',
            'required' => false,
            'example' => '{
      "MyStoryLabel": "HolidayStory"
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
            'title' => 'Schema of Response',
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'BC91D091-D49F-0ACD-95D5-F0621045****',
              ),
              'ObjectId' => 
              array (
                'description' => '对象ID。',
                'type' => 'string',
                'example' => '563062c0b085733f34ab****',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"BC91D091-D49F-0ACD-95D5-F0621045****\\",\\n  \\"ObjectId\\": \\"563062c0b085733f34ab****\\"\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '创建自定义故事',
      'description' => '- **请确保在使用该接口前，已充分了解智能媒体管理产品的收费方式和[价格](~~477042~~)。**
- 调用该接口前，请确保您已通过绑定方式（[CreateBinding](~~478202~~)）或者主动索引（[IndexFileMeta](~~478166~~)或者[BatchIndexFileMeta](~~478167~~)）方式将文件索引到数据集（Dataset）中。',
    ),
    'UpdateStory' => 
    array (
      'summary' => '更新故事信息，例如重命名，修改封面等。',
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
      ),
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'update',
        'abilityTreeCode' => '123272',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREimmPQ568C',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ProjectName',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '项目名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'immtest',
          ),
        ),
        1 => 
        array (
          'name' => 'DatasetName',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '数据集名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'testdata',
          ),
        ),
        2 => 
        array (
          'name' => 'ObjectId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '故事ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'testid',
          ),
        ),
        3 => 
        array (
          'name' => 'StoryName',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '故事名称。',
            'type' => 'string',
            'required' => false,
            'example' => 'newstory',
          ),
        ),
        4 => 
        array (
          'name' => 'Cover',
          'in' => 'formData',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '封面图片。',
            'type' => 'object',
            'properties' => 
            array (
              'URI' => 
              array (
                'description' => '图片文件的存储位置。

OSS地址规则为oss://${Bucket}/${Object}，其中`${Bucket}`为和当前项目处于同一区域(Region)的OSS Bucket名称，`${Object}`为包含文件扩展名的文件完整路径。',
                'type' => 'string',
                'required' => false,
                'example' => 'oss://test-bucket/test-object',
              ),
            ),
            'required' => false,
          ),
        ),
        5 => 
        array (
          'name' => 'CustomLabels',
          'in' => 'formData',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '自定义标签，最多支持100个。',
            'type' => 'object',
            'required' => false,
            'example' => '{"key": "value"}',
          ),
        ),
        6 => 
        array (
          'name' => 'CustomId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '自定义ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'test',
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
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '6E93D6C9-5AC0-49F9-914D-E02678D3****',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"6E93D6C9-5AC0-49F9-914D-E02678D3****\\"\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '更新故事',
    ),
    'AddStoryFiles' => 
    array (
      'summary' => '向故事中添加文件。',
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
      ),
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'none',
        'abilityTreeCode' => '142648',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREimmPQ568C',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ProjectName',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => 'A short description of struct',
            'description' => '项目名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'test-project',
          ),
        ),
        1 => 
        array (
          'name' => 'DatasetName',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '数据集名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'test-dataset',
          ),
        ),
        2 => 
        array (
          'name' => 'ObjectId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '故事ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'testid',
          ),
        ),
        3 => 
        array (
          'name' => 'Files',
          'in' => 'formData',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '要添加的文件列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '文件信息。',
              'type' => 'object',
              'properties' => 
              array (
                'URI' => 
                array (
                  'description' => '文件的存储位置。

OSS地址规则为oss://${Bucket}/${Object}，其中`${Bucket}`为和当前项目处于同一区域(Region)的OSS Bucket名称，`${Object}`为包含文件扩展名的文件完整路径。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'oss://test-bucket/test-object',
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
                'example' => '6E93D6C9-5AC0-49F9-914D-E02678D3****',
              ),
              'Files' => 
              array (
                'description' => '添加的文件列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '文件信息。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'URI' => 
                    array (
                      'description' => '文件地址。

地址规则为`oss://{bucketname}/{objectname}`，其中`bucketname`为和当前项目处于同一地域的OSS Bucket名称，`objectname`为包含文件名称的文件路径。',
                      'type' => 'string',
                      'example' => 'oss://test-bucket/test-object',
                    ),
                    'ErrorCode' => 
                    array (
                      'description' => '错误码。',
                      'type' => 'string',
                      'example' => 'ResourceNotFound',
                    ),
                    'ErrorMessage' => 
                    array (
                      'description' => '错误信息。',
                      'type' => 'string',
                      'example' => 'The specified resource %s is not found.',
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"6E93D6C9-5AC0-49F9-914D-E02678D3****\\",\\n  \\"Files\\": [\\n    {\\n      \\"URI\\": \\"oss://test-bucket/test-object\\",\\n      \\"ErrorCode\\": \\"ResourceNotFound\\",\\n      \\"ErrorMessage\\": \\"The specified resource %s is not found.\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '添加故事文件',
    ),
    'RemoveStoryFiles' => 
    array (
      'summary' => '从故事中删除文件。',
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
      ),
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'update',
        'abilityTreeCode' => '142653',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREimmPQ568C',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ProjectName',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => 'A short description of struct',
            'description' => '项目名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'immtest',
          ),
        ),
        1 => 
        array (
          'name' => 'DatasetName',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '数据集名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'testdataset',
          ),
        ),
        2 => 
        array (
          'name' => 'ObjectId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '故事ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'testid',
          ),
        ),
        3 => 
        array (
          'name' => 'Files',
          'in' => 'formData',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '需要删除的文件列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '文件信息。',
              'type' => 'object',
              'properties' => 
              array (
                'URI' => 
                array (
                  'description' => '文件的存储位置。

OSS地址规则为oss://${Bucket}/${Object}，其中`${Bucket}`为和当前项目处于同一区域(Region)的OSS Bucket名称，`${Object}`为包含文件扩展名的文件完整路径。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'oss://test-bucket/test-object',
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
                'example' => '6E93D6C9-5AC0-49F9-914D-E02678D3****',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"6E93D6C9-5AC0-49F9-914D-E02678D3****\\"\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '从故事中删除文件',
    ),
    'DeleteStory' => 
    array (
      'summary' => '删除故事。',
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
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'delete',
        'abilityTreeCode' => '102497',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREimmPQ568C',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ProjectName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '项目名称。获取方式请参见[创建项目](~~478153~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'test-project',
          ),
        ),
        1 => 
        array (
          'name' => 'DatasetName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据集名称。获取方式请参见[创建数据集](~~478160~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'test-dataset',
          ),
        ),
        2 => 
        array (
          'name' => 'ObjectId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定要删除的故事对象ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'id1',
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
                'description' => '当次请求的Request ID。',
                'type' => 'string',
                'example' => '1B3D5E0A-D8B8-4DA0-8127-ED32C851****',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"1B3D5E0A-D8B8-4DA0-8127-ED32C851****\\"\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '删除故事',
      'description' => '- **请确保在使用该接口前，已充分了解智能媒体管理产品的收费方式和[价格](~~477042~~)。**
- 调用该接口前，请确保您已通过绑定方式（[CreateBinding](~~478202~~)）或者主动索引（[IndexFileMeta](~~478166~~)或者[BatchIndexFileMeta](~~478167~~)）方式将文件索引到数据集（Dataset）中。
- 调用该接口前，请确保已经使用[创建故事](~~478193~~)或者[创建自定义故事](~~478196~~)接口生成过相册故事。',
    ),
    'CreateSimilarImageClusteringTask' => 
    array (
      'summary' => '相似图片聚类功能，可以将您已索引到数据集内的图片按照相似度生成聚类，用于图片去重、选优等场景，例如可以通过该功能筛选相册中连拍的图片。',
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
      'operationType' => 'write',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'create',
        'abilityTreeCode' => '161810',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREimm8BY6HG',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ProjectName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '项目名称，获取方式请参见[创建项目](~~478153~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'test-project',
          ),
        ),
        1 => 
        array (
          'name' => 'DatasetName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据集名称，获取方式请参见[创建数据集](~~478160~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'test-dataset',
          ),
        ),
        2 => 
        array (
          'name' => 'UserData',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用户自定义信息，在异步消息通知中会为您返回，方便您系统内对消息通知进行关联处理。最大长度为2048字节。',
            'type' => 'string',
            'required' => false,
            'example' => 'test-data',
          ),
        ),
        3 => 
        array (
          'name' => 'Tags',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '自定义标签，用于对异步任务进行搜索、过滤。',
            'type' => 'object',
            'required' => false,
            'example' => '{
      "User": "Jane"
}',
          ),
        ),
        4 => 
        array (
          'name' => 'Notification',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '消息通知配置，详细内容请单击Notification查看，异步通知消息格式请参见[异步通知消息格式](~~471456~~)。',
            'required' => false,
            '$ref' => '#/components/schemas/Notification',
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
            'description' => '相似图片聚类任务信息。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '1B3D5E0A-D8B8-4DA0-8127-ED32C851****',
              ),
              'TaskId' => 
              array (
                'description' => '任务ID。',
                'type' => 'string',
                'example' => 'SimilarImageClustering-48d0a0f3-8459-47f4-b8af-ff49c64****',
              ),
              'EventId' => 
              array (
                'description' => '事件ID。',
                'type' => 'string',
                'example' => '3BF-1UhtFyrua71eOkFlqYq23Co****',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"1B3D5E0A-D8B8-4DA0-8127-ED32C851****\\",\\n  \\"TaskId\\": \\"SimilarImageClustering-48d0a0f3-8459-47f4-b8af-ff49c64****\\",\\n  \\"EventId\\": \\"3BF-1UhtFyrua71eOkFlqYq23Co****\\"\\n}","type":"json"}]',
      'title' => '创建相似图片聚类任务',
      'description' => '* **请确保在使用该接口前，已充分了解智能媒体管理产品的收费方式和[价格](~~477042~~)**。

* 调用该接口前，请确保您已通过绑定方式（[CreateBinding](~~478202~~)）或者主动索引（[IndexFileMeta](~~478166~~)或者[BatchIndexFileMeta](~~478167~~)）方式将文件索引到数据集（Dataset）中。

*  每次调用该接口，会**增量**对数据集`Dataset`内的文件进行处理。您可以根据新增文件情况，定期调用该接口对新文件进行处理。

*  聚类完成后，您可以通过[QuerySimilarImageClusters](~~611304~~)接口获取聚类结果。

*  每组相似图片聚类限制图片数量不低于2张。从数据集（Dataset）中删除文件，会导致相似图片聚类发生变化。当您从数据集（Dataset）中删除图片导致聚类中图片数小于2张时，该聚类会自动删除。

*  该接口为异步接口，获取任务开始执行后，任务信息只保存7天，超过7天则无法再获取。调用[GetTask](~~GetTask~~)或[ListTasks](~~ListTasks~~)接口获取返回的`TaskId`，查看任务信息。也可以通过设置[Notification](~~611278~~)消息通知参数，通过消息通知获取任务信息。',
    ),
    'QuerySimilarImageClusters' => 
    array (
      'summary' => '查询相似图片聚类列表信息。',
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
        'operationType' => 'list',
        'abilityTreeCode' => '161811',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREimm8BY6HG',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ProjectName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '项目名称，获取方式请参见[创建项目](~~478153~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'test-project',
          ),
        ),
        1 => 
        array (
          'name' => 'DatasetName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据集名称，获取方式请参见[创建数据集](~~478160~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'test-dataset',
          ),
        ),
        2 => 
        array (
          'name' => 'NextToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '翻页标记。

当文件总数大于设置的MaxResults时，用于翻页的Token。从NextToken开始按字典序返回文件信息列表。

> 在一次查询中首次调用此接口时，将此值设置为空。',
            'type' => 'string',
            'required' => false,
            'example' => 'CAESEgoQCg4KClVwZGF0ZVRpbWUQARgBIs8ECgkAAJLUwUCAQ****',
          ),
        ),
        3 => 
        array (
          'name' => 'MaxResults',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '返回聚类列表中最大任务数量。取值范围为（0，100 ]，默认值为100。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '20',
          ),
        ),
        4 => 
        array (
          'name' => 'CustomLabels',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '自定义标签，用于根据标签过滤任务。',
            'type' => 'string',
            'required' => false,
            'example' => '{"key": "val"}',
          ),
        ),
        5 => 
        array (
          'name' => 'Sort',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '排序字段，可选值如下：

- CreateTime：分类的创建时间。

- UpdateTime：分类的更新时间（默认）。',
            'type' => 'string',
            'required' => false,
            'enumValueTitles' => 
            array (
            ),
            'example' => 'UpdateTime',
          ),
        ),
        6 => 
        array (
          'name' => 'Order',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '排序方式。取值范围如下：

- asc：升序。
- desc：降序（默认）。',
            'type' => 'string',
            'required' => false,
            'example' => 'asc',
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
                'example' => 'CA995EFD-083D-4F40-BE8A-BDF75FFF****
',
              ),
              'SimilarImageClusters' => 
              array (
                'description' => '相似图片分类列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '相似图片分类具体信息。',
                  '$ref' => '#/components/schemas/SimilarImageCluster',
                ),
              ),
              'NextToken' => 
              array (
                'description' => '翻页标记。当聚类列表总数大于设置的MaxResults时，用于翻页的Token。符合条件的聚类列表未全部返回时，此参数才有值。

下一次查询聚类时将此值作为NextToken传入，将后续的聚类列表返回。',
                'type' => 'string',
                'example' => 'CAESEgoQCg4KClVwZGF0ZVRpbWUQARgBIs8ECgkAAJLUwUCAQ****',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"CA995EFD-083D-4F40-BE8A-BDF75FFF****\\\\n\\",\\n  \\"SimilarImageClusters\\": [\\n    {\\n      \\"ObjectId\\": \\"\\",\\n      \\"UpdateTime\\": \\"\\",\\n      \\"CreateTime\\": \\"\\",\\n      \\"CustomLabels\\": {\\n        \\"test\\": \\"test\\",\\n        \\"test2\\": 1\\n      },\\n      \\"Files\\": [\\n        {\\n          \\"URI\\": \\"\\",\\n          \\"ImageScore\\": 0\\n        }\\n      ]\\n    }\\n  ],\\n  \\"NextToken\\": \\"CAESEgoQCg4KClVwZGF0ZVRpbWUQARgBIs8ECgkAAJLUwUCAQ****\\"\\n}","type":"json"}]',
      'title' => '查询相似图片聚类',
      'description' => '- **请确保在使用该接口前，已充分了解智能媒体管理产品的收费方式和[价格](~~477042~~)**。

- 调用该接口前，请先通过[CreateSimilarImageClusteringTask](~~611302~~)接口对数据集中的图片进行相似图片聚类。',
    ),
    'CreateBinding' => 
    array (
      'summary' => '创建数据集（Dataset）和对象存储（OSS）Bucket的绑定关系，自动同步全量和增量文件并为其索引。',
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
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'create',
        'abilityTreeCode' => '18909',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREimmSZD9WY',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ProjectName',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'ProjectName',
            'description' => '项目名称，获取方式请参见[创建项目](~~478153~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'test-project',
          ),
        ),
        1 => 
        array (
          'name' => 'DatasetName',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'DatasetName',
            'description' => '数据集名称，获取方式请参见[创建数据集](~~478160~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'test-dataset',
          ),
        ),
        2 => 
        array (
          'name' => 'URI',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'URI',
            'description' => '数据集绑定的对象存储（OSS） Bucket URI。

对象存储（OSS） Bucket URI 的格式为oss://${Bucket}，其中`${Bucket}`为和当前项目处于同一地域的 OSS Bucket 名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'oss://test-bucket',
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
            'description' => '响应结构体。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '5F74C5C9-5AC0-49F9-914D-E01589D3****',
              ),
              'Binding' => 
              array (
                'description' => '绑定信息。',
                '$ref' => '#/components/schemas/Binding',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"5F74C5C9-5AC0-49F9-914D-E01589D3****\\",\\n  \\"Binding\\": {\\n    \\"ProjectName\\": \\"\\",\\n    \\"DatasetName\\": \\"\\",\\n    \\"URI\\": \\"\\",\\n    \\"State\\": \\"\\",\\n    \\"Phase\\": \\"\\",\\n    \\"Detail\\": \\"\\",\\n    \\"CreateTime\\": \\"\\",\\n    \\"UpdateTime\\": \\"\\",\\n    \\"Reason\\": \\"\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '创建绑定任务',
      'description' => '**请确保在使用该接口前，已充分了解 IMM 产品的收费方式和[价格](https://help.aliyun.com/document_detail/477042.html?spm=a2c4g.475816.0.0.21db309dumhJPw)。**

在创建绑定关系前，请确保已经创建对应的项目和数据集。

* [创建项目](~~478153~~)
* [创建数据集](~~478160~~)

> 数据绑定将使用创建项目或数据集时所指定的[工作流模板](~~466304~~)对文件进行处理。


绑定关系创建后，智能媒体管理（IMM）会先对对象存储 （OSS） Bucket中的已有数据进行全量扫描，并抽取文件元数据信息进行索引。完成后，继续对 OSS中新增的文件进行准实时的增量追踪扫描、抽取以及索引。通过此方式为文件建立索引后，您可以使用文件查询API（例如[SimpleQuery](~~478175~~)）对文件进行查询、管理和统计。',
    ),
    'GetBinding' => 
    array (
      'summary' => '查询指定的数据集和对象存储（OSS）Bucket绑定关系详情。',
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
        'operationType' => 'get',
        'abilityTreeCode' => '33029',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREimmSZD9WY',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ProjectName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '项目名称，获取方式请参见[创建项目](~~478153~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'test-project',
          ),
        ),
        1 => 
        array (
          'name' => 'DatasetName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据集名称，获取方式请参见[创建数据集](~~478160~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'test-dataset',
          ),
        ),
        2 => 
        array (
          'name' => 'URI',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据集绑定的对象存储（OSS） Bucket URI。

对象存储（OSS） Bucket URI 的格式为oss://${Bucket}，其中`${Bucket}`为和当前项目处于同一地域的 OSS Bucket 名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'oss://test-bucket',
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
            'description' => '响应结构体。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'AEFCD467-C928-4A36-951A-6EB5A592****',
              ),
              'Binding' => 
              array (
                'description' => '绑定关系信息。',
                '$ref' => '#/components/schemas/Binding',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"AEFCD467-C928-4A36-951A-6EB5A592****\\",\\n  \\"Binding\\": {\\n    \\"ProjectName\\": \\"\\",\\n    \\"DatasetName\\": \\"\\",\\n    \\"URI\\": \\"\\",\\n    \\"State\\": \\"\\",\\n    \\"Phase\\": \\"\\",\\n    \\"Detail\\": \\"\\",\\n    \\"CreateTime\\": \\"\\",\\n    \\"UpdateTime\\": \\"\\",\\n    \\"Reason\\": \\"\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '查询绑定关系信息',
      'description' => '- **请确保在使用该接口前，已充分了解智能媒体管理产品的收费方式和[价格](~~477042~~)。**
- 请确保已经通过[CreateBinding](~~478202~~)接口创建对应的绑定关系。',
    ),
    'ListBindings' => 
    array (
      'summary' => '查询数据集和对象存储（OSS）Bucket绑定关系列表。',
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
      'systemTags' => 
      array (
        'operationType' => 'list',
        'abilityTreeCode' => '10879',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREimmSZD9WY',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ProjectName',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'A short description of struct',
            'description' => '项目名称，获取方式请参见[创建项目](~~478153~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'test-project',
          ),
        ),
        1 => 
        array (
          'name' => 'DatasetName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据集名称，获取方式请参见[创建数据集](~~478160~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'test-dataset',
          ),
        ),
        2 => 
        array (
          'name' => 'MaxResults',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '- 返回绑定关系的最大个数，取值范围为0~200。
- 不设置此参数或者设置为0时，则默认值为100。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '20',
          ),
        ),
        3 => 
        array (
          'name' => 'NextToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '- 当绑定关系总数大于设置的MaxResults时，用于翻页的token。
- 从NextToken开始按字典序返回绑定关系信息列表。
- 第一次调用此接口时，设置为空。',
            'type' => 'string',
            'required' => false,
            'example' => 'immtest:dataset001:examplebucket01',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => '响应结构体',
            'description' => '响应结构体。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'EFDFD356-C928-4A36-951A-6EB5A592****',
              ),
              'NextToken' => 
              array (
                'description' => '- 当绑定关系总数大于设置的MaxResults时，用于翻页的token。
- 下一次列出绑定关系信息时以此值为NextToken，将未返回的结果返回。
- 当绑定关系未全部返回时，此参数才有值。',
                'type' => 'string',
                'example' => 'immtest:dataset001:examplebucket01',
              ),
              'Bindings' => 
              array (
                'description' => '数据集和OSS Bucket绑定关系信息的列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '数据集和OSS Bucket绑定关系信息的结构体。',
                  '$ref' => '#/components/schemas/Binding',
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"EFDFD356-C928-4A36-951A-6EB5A592****\\",\\n  \\"NextToken\\": \\"immtest:dataset001:examplebucket01\\",\\n  \\"Bindings\\": [\\n    {\\n      \\"ProjectName\\": \\"\\",\\n      \\"DatasetName\\": \\"\\",\\n      \\"URI\\": \\"\\",\\n      \\"State\\": \\"\\",\\n      \\"Phase\\": \\"\\",\\n      \\"Detail\\": \\"\\",\\n      \\"CreateTime\\": \\"\\",\\n      \\"UpdateTime\\": \\"\\",\\n      \\"Reason\\": \\"\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '查询绑定关系列表',
      'description' => '**请确保在使用该接口前，已充分了解智能媒体管理产品的收费方式和[价格](~~477042~~)。**',
    ),
    'DeleteBinding' => 
    array (
      'summary' => '删除数据集和对象存储（OSS）Bucket绑定任务。',
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
      'operationType' => 'write',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'delete',
        'abilityTreeCode' => '38133',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREimmSZD9WY',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ProjectName',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'A short description of struct',
            'description' => '项目名称，获取方式请参见[创建项目](~~478153~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'test-project',
          ),
        ),
        1 => 
        array (
          'name' => 'DatasetName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据集名称，获取方式请参见[创建数据集](~~478160~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'test-dataset',
          ),
        ),
        2 => 
        array (
          'name' => 'URI',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据集绑定的对象存储（OSS） Bucket URI。

对象存储（OSS） Bucket URI 的格式为oss://${Bucket}，其中`${Bucket}`为和当前项目处于同一地域的 OSS Bucket 名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'oss://test-bucket',
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
                'example' => 'ACDFE467-C817-4B36-951A-6EB5A592****',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"ACDFE467-C817-4B36-951A-6EB5A592****\\"\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '删除绑定任务',
      'description' => '- **请确保在使用该接口前，已充分了解智能媒体管理产品的收费方式和[价格](~~477042~~)。**
- 删除绑定关系会导致OSS Bucket新增的变更不会同步到数据集，请谨慎操作。',
    ),
    'AttachOSSBucket' => 
    array (
      'summary' => '将OSS Bucket与IMM Project绑定，可以通过OSS x-oss-process方式使用IMM的数据处理能力。',
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
      'systemTags' => 
      array (
        'operationType' => 'create',
        'abilityTreeCode' => '135038',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREimmKH590Y',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ProjectName',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '项目名称',
            'description' => '项目名称，获取方式请参见[创建项目](~~478153~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'immtest',
          ),
        ),
        1 => 
        array (
          'name' => 'OSSBucket',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '和当前项目处于同一地域(Region)的OSS Bucket名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'examplebucket',
          ),
        ),
        2 => 
        array (
          'name' => 'Description',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '绑定的描述信息。长度为1~128个字符，默认值为空。',
            'type' => 'string',
            'required' => false,
            'example' => 'test-attachment',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => '响应结构体',
            'description' => '响应结构体',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'RequestId',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '5F74C5C9-5AC0-49F9-914D-E01589D3****',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"5F74C5C9-5AC0-49F9-914D-E01589D3****\\"\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '绑定对象存储桶',
      'description' => '- **请确保在使用该接口前，已充分了解智能媒体管理产品的收费方式和[价格](~~88317~~)。**
- 该接口是通过OSS x-oss-process方式使用IMM数据处理能力的前置条件，详见[x-oss-process使用指南](~~2391270~~)
- 调用该接口前，请确保当前Region已经存在可用的项目（Project），详见[项目管理](~~478152~~)。',
    ),
    'DetachOSSBucket' => 
    array (
      'summary' => '解除项目与OSS Bucket的绑定关系。',
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
        'operationType' => 'delete',
        'abilityTreeCode' => '135041',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREimmKH590Y',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'OSSBucket',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '需要解绑的OSS Bucket名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'examplebucket',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => '响应结构体',
            'description' => '响应结构体',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'RequestId',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '5F74C5C9-5AC0-49F9-914D-E01589D3****',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"5F74C5C9-5AC0-49F9-914D-E01589D3****\\"\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '解绑对象存储桶',
      'description' => '- **请确保在使用该接口前，已充分了解智能媒体管理产品的收费方式和[价格](~~88317~~)。**
- 调用该接口前，请确保已经调用[绑定对象存储桶](~~478206~~)将项目和OSS Bucket进行过绑定。',
    ),
    'GetOSSBucketAttachment' => 
    array (
      'summary' => '获取同一地域下与指定OSS Bucket绑定的项目的项目名称。',
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
        'operationType' => 'get',
        'abilityTreeCode' => '135040',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREimmKH590Y',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'OSSBucket',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'OSS Bucket名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'examplebucket',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => '响应结构体',
            'description' => '响应结构体',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'RequestId',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '5F74C5C9-5AC0-49F9-914D-E01589D3****',
              ),
              'ProjectName' => 
              array (
                'description' => '绑定的项目名称。',
                'type' => 'string',
                'example' => 'immtest',
              ),
              'Description' => 
              array (
                'description' => '数据集描述。',
                'type' => 'string',
                'example' => '"数据集"',
              ),
              'CreateTime' => 
              array (
                'description' => '数据集的创建时间。',
                'type' => 'string',
                'example' => '""2023-12-19T17:29:34.790931971+08:00"',
              ),
              'UpdateTime' => 
              array (
                'description' => '数据集更新时间。',
                'type' => 'string',
                'example' => '"2023-12-19T17:29:34.790931971+08:00"',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"5F74C5C9-5AC0-49F9-914D-E01589D3****\\",\\n  \\"ProjectName\\": \\"immtest\\",\\n  \\"Description\\": \\"\\\\\\"数据集\\\\\\"\\",\\n  \\"CreateTime\\": \\"\\\\\\"\\\\\\"2023-12-19T17:29:34.790931971+08:00\\\\\\"\\",\\n  \\"UpdateTime\\": \\"\\\\\\"2023-12-19T17:29:34.790931971+08:00\\\\\\"\\"\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '获取对象存储桶绑定信息',
      'description' => '- **请确保在使用该接口前，已充分了解智能媒体管理产品的收费方式和[价格](~~477042~~)。**
- 调用该接口前，请确保已经调用[绑定对象存储桶](~~478206~~)将项目和OSS Bucket进行过绑定。',
    ),
    'EncodeBlindWatermark' => 
    array (
      'summary' => '将特定的文本信息嵌入到图片中，而这些信息在视觉观察下是不可见的。由于这些水印在视觉上是隐蔽的，它们不会影响图片的美观性或原始信息的传递，但可以通过 CreateDecodeBlindWatermarkTask 接口提取出来。',
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
      ),
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'none',
        'riskType' => 'none',
        'chargeType' => 'free',
        'abilityTreeCode' => '199817',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREimmSCVT08',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ProjectName',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'A short description of struct',
            'description' => '项目名称，获取方式请参见[创建项目](~~478153~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'test-project',
          ),
        ),
        1 => 
        array (
          'name' => 'SourceURI',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '图片的OSS URI。

OSS地址规则为oss://${Bucket}/${Object}，其中`${Bucket}`为和当前项目处于同一区域(Region)的OSS Bucket名称，`${Object}`为包含文件扩展名的文件完整路径。

支持图片格式：jpg, png, bmp, tiff, webp

图片大小限制：长宽最小80px ，最大10000px',
            'type' => 'string',
            'required' => true,
            'example' => 'oss://test-bucket/test-object.jpg',
          ),
        ),
        2 => 
        array (
          'name' => 'TargetURI',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '输出图片存储的OSS地址。

OSS地址规则为oss://${Bucket}/${Object}，其中`${Bucket}`为和当前项目处于同一区域(Region)的OSS Bucket名称，`${Object}`为包含文件扩展名的文件完整路径。',
            'type' => 'string',
            'required' => true,
            'example' => 'oss://test-bucket/target-object.jpg',
          ),
        ),
        3 => 
        array (
          'name' => 'Content',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '作为水印的文字内容，最多256个字符。',
            'type' => 'string',
            'required' => false,
            'example' => '阿里云版权所有',
          ),
        ),
        4 => 
        array (
          'name' => 'StrengthLevel',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '水印添加强度，强度越高，加水印后的图像抵抗攻击性能越强，但引起的失真越明显，默认值为low，可取值为[low, medium, high]。',
            'type' => 'string',
            'required' => false,
            'enumValueTitles' => 
            array (
              'high' => 'high',
              'low' => 'low',
              'medium' => 'medium',
            ),
            'example' => 'low',
          ),
        ),
        5 => 
        array (
          'name' => 'ImageQuality',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '仅输入图片格式为jpg时生效。

携带水印信息的输出图片的存储质量，默认值为90，取值范围为70~100。
质量越高，图片尺寸越大，水印解析质量越高。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '90',
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
                'description' => '当次请求的Request ID。',
                'type' => 'string',
                'example' => '8E0DD64B-28C6-4653-8FF7-93E4C234BCF0',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"8E0DD64B-28C6-4653-8FF7-93E4C234BCF0\\"\\n}","type":"json"}]',
      'title' => '添加图片盲水印',
      'description' => '- 请确保在使用该接口前，已充分了解智能媒体管理产品的收费方式和价格。

- 请确保已在智能媒体管理上正确创建了项目（ Project ），创建方式请参见[创建项目](~~478153~~)。

- 当前仅支持将文字作为盲水印添加到图片中。

- 输出图片格式与输入图片相同。

- 当添加盲水印的图片经过一定程度的攻击后，例如压缩、缩放、裁剪、旋转、色彩变换等，仍然可以提取出水印内容。

- 不支持纯黑、纯白的图片，以及分辨率过低（<200px *200px，非严格参数）的图片',
    ),
    'CreateDecodeBlindWatermarkTask' => 
    array (
      'summary' => '解析由IMM添加的盲水印，可提取使用新版和旧版 EncodeBlindWatermark 接口添加的水印内容。解析出的水印内容可通过 GetDecodeBlindWatermarkResult 接口获取，或从异步通知消息中获取。',
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
      ),
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'create',
        'riskType' => 'none',
        'chargeType' => 'free',
        'abilityTreeCode' => '200063',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREimmSCVT08',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ProjectName',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'A short description of struct',
            'description' => '项目名称，获取方式请参见[创建项目](~~478153~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'immtest',
          ),
        ),
        1 => 
        array (
          'name' => 'SourceURI',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '图片的OSS地址。

OSS地址规则为`oss://<bucket>/<object>`，其中`<bucket>`为和当前项目处于同一地域的OSS Bucket名称，`<object>`为包含文件扩展名的文件完整路径。',
            'type' => 'string',
            'required' => true,
            'example' => 'oss://target/sampleobject.jpg',
          ),
        ),
        2 => 
        array (
          'name' => 'StrengthLevel',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '水印添加强度，强度越高，加水印后的图像抵抗攻击性能越强，但引起的失真越明显，默认值为low，可取值为[low, medium, high]。',
            'type' => 'string',
            'required' => false,
            'example' => 'low',
          ),
        ),
        3 => 
        array (
          'name' => 'WatermarkType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '嵌入的水印类型，可选值：text

（图片水印类型暂不支持，因此当前只能为text）',
            'type' => 'string',
            'required' => false,
            'enumValueTitles' => 
            array (
              'text' => 'text',
            ),
            'example' => 'text',
          ),
        ),
        4 => 
        array (
          'name' => 'TargetURI',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '旧版盲水印[DecodeBlindWatermark](~~444166~~)接口中的参数，解析盲水印后图片保存到的 OSS URI。

OSS地址规则为`oss://<bucket>/<object>`，其中`<bucket>`为和当前项目处于同一地域的OSS Bucket名称，`<object>`为包含文件扩展名的文件完整路径。',
            'type' => 'string',
            'required' => false,
            'example' => 'oss://target/targetobject.jpg',
          ),
        ),
        5 => 
        array (
          'name' => 'ImageQuality',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '旧版盲水印[DecodeBlindWatermark](~~444166~~)接口中的参数，输出图片的质量，默认值为90，取值范围为70~100。

质量越高，图片尺寸越大，水印解析质量越高',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '90',
          ),
        ),
        6 => 
        array (
          'name' => 'Model',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '旧版盲水印[DecodeBlindWatermark](~~444166~~)接口中的参数，水印算法模型，可选值包括FFT、FFT_FULL、DWT和DWT_IBG，其中默认参数为 FFT。

当参数为空时，表示新版，否则，则认为是旧版',
            'type' => 'string',
            'required' => false,
            'enumValueTitles' => 
            array (
              'DWT' => 'DWT',
              'FFT_FULL' => 'FFT_FULL',
              'FFT' => 'FFT',
              'DWT_IBG' => 'DWT_IBG',
            ),
            'example' => 'FFT',
          ),
        ),
        7 => 
        array (
          'name' => 'OriginalImageURI',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '旧版盲水印[DecodeBlindWatermark](~~444166~~)接口中的参数，添加盲水印前图片的OSS URI。

当Model参数为DWT和DWT_IBG时无需设置此参数。

OSS地址规则为oss://${bucket}/${object}，其中${bucket}为和当前项目处于同OSS地址规则为`oss://<bucket>/<object>`，其中`<bucket>`为和当前项目处于同一地域的OSS Bucket名称，`<object>`为包含文件扩展名的文件完整路径。',
            'type' => 'string',
            'required' => false,
            'example' => 'oss://imm-test/testcases/watermarktestbefore.jpg',
          ),
        ),
        8 => 
        array (
          'name' => 'Notification',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '消息通知配置，详细内容请单击 Notification 查看，异步通知消息格式请参见[异步通知消息格式](~~471456~~)。',
            'required' => false,
            '$ref' => '#/components/schemas/Notification',
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
                'description' => '当次请求的Request ID。',
                'type' => 'string',
                'example' => '4A7A2D0E-D8B8-4DA0-8127-EB32C6600ADE',
              ),
              'EventId' => 
              array (
                'description' => '事件ID。',
                'type' => 'string',
                'example' => '27C-1jyAP5qQI7RoI8lFFwvMrWtl0ft',
              ),
              'TaskId' => 
              array (
                'description' => '任务ID。',
                'type' => 'string',
                'example' => 'DecodeBlindWatermark-78ac8f3b-59e0-45a6-9b67-32168c3f22b9',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"4A7A2D0E-D8B8-4DA0-8127-EB32C6600ADE\\",\\n  \\"EventId\\": \\"27C-1jyAP5qQI7RoI8lFFwvMrWtl0ft\\",\\n  \\"TaskId\\": \\"DecodeBlindWatermark-78ac8f3b-59e0-45a6-9b67-32168c3f22b9\\"\\n}","type":"json"}]',
      'title' => '创建解析盲水印任务',
      'description' => '- 请确保在使用该接口前，已充分了解智能媒体管理产品的收费方式和价格。

- 请确保已在智能媒体管理上正确创建了项目（ Project ），创建方式请参见[创建项目](~~478153~~)。

- 当添加盲水印的图片经过一定程度的攻击后，例如压缩、缩放、裁剪、旋转、色彩变换等，仍然可以提取出水印内容。

- 此接口兼容旧版的盲水印功能，部分接口参数为旧版[DecodeBlindWatermark](~~444166~~)接口的参数。

- 该接口为异步接口，获取任务开始执行后，任务信息只保存 7 天，超过 7 天则无法再获取。调用 [GetTask](~~478241~~) 或 [ListTasks](~~478242~~) 接口获取返回的TaskId，查看任务信息。也可以通过设置 [Notification](~~611278~~) 消息通知参数，通过消息通知获取任务信息。',
    ),
    'GetDecodeBlindWatermarkResult' => 
    array (
      'summary' => '获取解析图片盲水印任务的结果。',
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
        'operationType' => 'none',
        'riskType' => 'none',
        'abilityTreeCode' => '204408',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREimmSCVT08',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ProjectName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '项目名称，获取方式请见[创建项目](~~478153~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'immtest',
          ),
        ),
        1 => 
        array (
          'name' => 'TaskType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '任务类型。',
            'type' => 'string',
            'required' => true,
            'enumValueTitles' => 
            array (
              'DecodeBlindWatermark' => 'DecodeBlindWatermark',
            ),
            'example' => 'DecodeBlindWatermark',
          ),
        ),
        2 => 
        array (
          'name' => 'TaskId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '任务 ID，获取方式请参见创建提取图片盲水印任务的返回参数。',
            'type' => 'string',
            'required' => true,
            'example' => 'DecodeBlindWatermark-c09b0943-ed79-4983-8dbe-7a882574****',
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
            'description' => '提取水印结果',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '当次请求的 Request ID。',
                'type' => 'string',
                'example' => '93126E40-0296-4129-95E3-AFAC709372E5',
              ),
              'ProjectName' => 
              array (
                'description' => '项目名称。',
                'type' => 'string',
                'example' => 'test-project',
              ),
              'EventId' => 
              array (
                'description' => '事件ID。',
                'type' => 'string',
                'example' => '2C2-1I0EG57VR37J4rQ8oKG6C9*****',
              ),
              'Status' => 
              array (
                'description' => '任务运行状态。',
                'type' => 'string',
                'example' => 'Succeeded',
              ),
              'Code' => 
              array (
                'description' => '任务错误码。',
                'type' => 'string',
                'example' => 'ResourceNotFound',
              ),
              'Message' => 
              array (
                'description' => '任务错误消息。',
                'type' => 'string',
                'example' => 'The specified resource project is not found.',
              ),
              'StartTime' => 
              array (
                'description' => '任务开始时间。',
                'type' => 'string',
                'example' => '2024-03-03T09:44:31.029Z',
              ),
              'EndTime' => 
              array (
                'description' => '任务结束时间。',
                'type' => 'string',
                'example' => '2024-03-03T09:45:56.87Z',
              ),
              'UserData' => 
              array (
                'description' => '用户自定义信息。',
                'type' => 'string',
                'example' => '{"ID": "user1","Name": "test-user1","Avatar": "http://example.com?id=user1"}',
              ),
              'TaskType' => 
              array (
                'description' => '任务类型。',
                'type' => 'string',
                'example' => 'DecodeBlindWatermark',
              ),
              'TaskId' => 
              array (
                'description' => '任务ID。',
                'type' => 'string',
                'example' => 'DecodeBlindWatermark-c09b0943-ed79-4983-8dbe-7a882574****',
              ),
              'Content' => 
              array (
                'description' => '水印内容',
                'type' => 'string',
                'example' => '阿里云版权所有',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"93126E40-0296-4129-95E3-AFAC709372E5\\",\\n  \\"ProjectName\\": \\"test-project\\",\\n  \\"EventId\\": \\"2C2-1I0EG57VR37J4rQ8oKG6C9*****\\",\\n  \\"Status\\": \\"Succeeded\\",\\n  \\"Code\\": \\"ResourceNotFound\\",\\n  \\"Message\\": \\"The specified resource project is not found.\\",\\n  \\"StartTime\\": \\"2024-03-03T09:44:31.029Z\\",\\n  \\"EndTime\\": \\"2024-03-03T09:45:56.87Z\\",\\n  \\"UserData\\": \\"{\\\\\\"ID\\\\\\": \\\\\\"user1\\\\\\",\\\\\\"Name\\\\\\": \\\\\\"test-user1\\\\\\",\\\\\\"Avatar\\\\\\": \\\\\\"http://example.com?id=user1\\\\\\"}\\",\\n  \\"TaskType\\": \\"DecodeBlindWatermark\\",\\n  \\"TaskId\\": \\"DecodeBlindWatermark-c09b0943-ed79-4983-8dbe-7a882574****\\",\\n  \\"Content\\": \\"阿里云版权所有\\"\\n}","type":"json"}]',
      'title' => '获取解析盲水印任务结果',
      'description' => '- 在调用该接口前，请确保已在智能媒体管理上正确创建了项目（ Project ），创建方式请参见[创建项目](~~478153~~)。
- 在调用该接口前，请确认已创建提取图片盲水印任务，并获取该任务的`TaskId`。',
    ),
    'DetectImageLabels' => 
    array (
      'summary' => '检测图片中的场景、物体和事件标签信息。场景信息包括：自然景观、生活场景、灾难场景等大类；事件信息包括：才艺、办公、表演、生产等大类；物体信息包括：餐具、电子产品、家具、交通工具等大类。图片标签检测目前支持的标签种类包含三十多个分类、数千个标签。',
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
        'operationType' => 'none',
        'abilityTreeCode' => '82228',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREimmELX4L2',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ProjectName',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '项目名称',
            'description' => '项目名称，获取方式请参见[创建项目](~~478153~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'test-project',
          ),
        ),
        1 => 
        array (
          'name' => 'SourceURI',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'SourceURI',
            'description' => '图片的OSS URI。

OSS地址规则为oss://${Bucket}/${Object}，其中`${Bucket}`为和当前项目处于同一区域(Region)的OSS Bucket名称，`${Object}`为包含文件扩展名的文件完整路径。',
            'type' => 'string',
            'required' => true,
            'example' => 'oss://test-bucket/test-object.jpg',
          ),
        ),
        2 => 
        array (
          'name' => 'Threshold',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'Threshold',
            'description' => '标签置信度过滤阈值，返回结果不包含置信度小于该设定阈值的标签。取值范围为0~1。如果不配置，则使用算法内部的默认值。',
            'type' => 'number',
            'format' => 'float',
            'required' => false,
            'example' => '0.7',
          ),
        ),
        3 => 
        array (
          'name' => 'CredentialConfig',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '链式授权配置，非必填。更多信息，请参见[使用链式授权访问其他实体资源](~~465340~~)。',
            'required' => false,
            '$ref' => '#/components/schemas/CredentialConfig',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => '图片检测结果',
            'description' => '图片检测结果。',
            'type' => 'object',
            'properties' => 
            array (
              'Labels' => 
              array (
                'title' => '内容标签列表',
                'description' => '内容标签列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '内容标签识别结果列表。',
                  '$ref' => '#/components/schemas/Label',
                ),
              ),
              'RequestId' => 
              array (
                'title' => '请求唯一ID',
                'description' => '当次请求的Request ID。',
                'type' => 'string',
                'example' => '91AC8C98-0F36-49D2-8290-742E24DF1F69',
              ),
            ),
          ),
        ),
        500 => 
        array (
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Labels\\": [\\n    {\\n      \\"Language\\": \\"\\",\\n      \\"LabelName\\": \\"\\",\\n      \\"LabelLevel\\": 0,\\n      \\"LabelConfidence\\": 0,\\n      \\"ParentLabelName\\": \\"\\",\\n      \\"CentricScore\\": 0\\n    }\\n  ],\\n  \\"RequestId\\": \\"91AC8C98-0F36-49D2-8290-742E24DF1F69\\"\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '检测图片中的标签信息',
      'description' => '- **请确保在使用该接口前，已充分了解智能媒体管理产品的收费方式和[价格](~~477042~~)**。
- 请确保已在智能媒体管理上正确创建了项目（[Project](~~478273~~)），创建方式请参见[创建项目](~~478153~~)。
- 该接口的功能说明请参看[图片标签检测](~~477179~~)。
- 该接口支持的输入图片见[图片限制](~~475569~~)。',
    ),
    'DetectImageScore' => 
    array (
      'summary' => '以主观美学为准评估图片的视觉质量，同时考虑构图、亮度、对比度、色彩、清晰度等多方面因素的影响。该功能返回一个范围为0-1的图片质量得分，得分越高则表示图片的视觉质量越高。',
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
        'operationType' => 'none',
        'abilityTreeCode' => '129324',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREimmEAXWFI',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ProjectName',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '项目名称',
            'description' => '项目名称，获取方式请参见[创建项目](~~477051~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'test-project',
          ),
        ),
        1 => 
        array (
          'name' => 'SourceURI',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '源图片的OSS地址。

OSS地址规则为oss://${Bucket}/${Object}，其中`${Bucket}`为和当前项目处于同一区域（Region）的OSS Bucket 名称，`${Object}`为包含文件扩展名的文件完整路径。',
            'type' => 'string',
            'required' => false,
            'example' => 'oss://examplebucket/sampleobject.jpg',
          ),
        ),
        2 => 
        array (
          'name' => 'CredentialConfig',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '链式授权配置，非必填。更多信息，请参见[使用链式授权访问其他实体资源](~~465340~~)。',
            'required' => false,
            '$ref' => '#/components/schemas/CredentialConfig',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => '响应结构体',
            'description' => '图片质量的评估结果。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'RequestId',
                'description' => '当次请求的Request ID。',
                'type' => 'string',
                'example' => '6E93D6C9-5AC0-49F9-914D-E02678D3****',
              ),
              'ImageScore' => 
              array (
                'description' => '图片的分数。',
                'type' => 'object',
                'properties' => 
                array (
                  'OverallQualityScore' => 
                  array (
                    'description' => '图片视觉质量的综合得分。',
                    'type' => 'number',
                    'format' => 'float',
                    'example' => '0.6',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"6E93D6C9-5AC0-49F9-914D-E02678D3****\\",\\n  \\"ImageScore\\": {\\n    \\"OverallQualityScore\\": 0.6\\n  }\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '获取图片分数',
      'description' => '- **请确保在使用该接口前，已充分了解智能媒体管理产品的收费方式和[价格](~~88317~~)。**
- 调用该接口前，请确保当前Region已经存在可用的项目（[Project](~~478273~~)），详见[项目管理](~~478152~~)。
- 该功能支持的输入图片详见[图片限制](~~475569~~)。',
    ),
    'DetectImageCodes' => 
    array (
      'summary' => '识别指定图像中的条码和二维码。',
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
        'operationType' => 'none',
        'abilityTreeCode' => '142280',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREimmSL7X1M',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ProjectName',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '项目名称',
            'description' => '项目名称，获取方式请参见[创建项目](~~478153~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'test-project',
          ),
        ),
        1 => 
        array (
          'name' => 'SourceURI',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'SourceURI',
            'description' => '文件的存储位置。

OSS地址规则为oss://${Bucket}/${Object}，其中`${Bucket}`为和当前项目处于同一区域(Region)的OSS Bucket名称，`${Object}`为包含文件扩展名的文件完整路径。',
            'type' => 'string',
            'required' => true,
            'example' => 'oss://test-bucket/test-object.jpg',
          ),
        ),
        2 => 
        array (
          'name' => 'CredentialConfig',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '链式授权配置，非必填。更多信息，请参见[使用链式授权访问其他实体资源](~~465340~~)。',
            'required' => false,
            '$ref' => '#/components/schemas/CredentialConfig',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => '图片二维码检测结果',
            'description' => '响应结构体',
            'type' => 'object',
            'properties' => 
            array (
              'Codes' => 
              array (
                'title' => '二维码检测结果',
                'description' => '二维码/条码信息列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '二维码/条码详细信息。',
                  '$ref' => '#/components/schemas/Codes',
                ),
                'required' => true,
                'minItems' => 0,
              ),
              'RequestId' => 
              array (
                'title' => '请求唯一ID',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '6E93D6C9-5AC0-49F9-914D-E02678D3****',
              ),
            ),
          ),
        ),
        500 => 
        array (
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Codes\\": [\\n    {\\n      \\"Content\\": \\"\\",\\n      \\"Confidence\\": 0,\\n      \\"Boundary\\": {\\n        \\"Width\\": 0,\\n        \\"Height\\": 0,\\n        \\"Left\\": 0,\\n        \\"Top\\": 0,\\n        \\"Polygon\\": [\\n          {\\n            \\"X\\": 0,\\n            \\"Y\\": 0\\n          }\\n        ]\\n      },\\n      \\"Type\\": \\"\\"\\n    }\\n  ],\\n  \\"RequestId\\": \\"6E93D6C9-5AC0-49F9-914D-E02678D3****\\"\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '图片二维码检测',
      'description' => '- 该接口支持的输入图片编码格式见[图片限制](~~475569~~)。',
    ),
    'DetectImageFaces' => 
    array (
      'summary' => '检测指定图像中的人脸边界信息、属性信息、质量信息。边界信息（Boundary）包括：顶点Y坐标距离顶端距离（Top）、顶点X坐标距离左端距离（Left）、高度（Height）、宽度（Width）；属性信息包括：年龄（Age）、年龄标准差（AgeSD）、性别（Gender）、心情（Emotion）、是否张口（Mouth）、是否有胡子（Beard）、是否有帽子（Hat）、是否带口罩（Mask）、是否戴眼镜（Glasses）、头部朝向（HeadPose）、人脸吸引力（Attractive）及上述各属性的置信度；质量信息包括：人脸质量分（FaceQuality）、人脸清晰度（Sharpness）。',
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
      'systemTags' => 
      array (
        'operationType' => 'none',
        'abilityTreeCode' => '129323',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREimmU4U2B0',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ProjectName',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '项目名称',
            'description' => '项目名称，获取方式请参见[创建项目](~~478153~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'test-project',
          ),
        ),
        1 => 
        array (
          'name' => 'SourceURI',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '文件的OSS存储地址。

OSS地址规则为oss://${Bucket}/${Object}，其中`${Bucket}`为和当前项目处于同一区域(Region)的OSS Bucket名称，`${Object}`为包含文件扩展名的文件完整路径。',
            'type' => 'string',
            'required' => false,
            'example' => 'oss://test-bucket/test-object.jpg',
          ),
        ),
        2 => 
        array (
          'name' => 'CredentialConfig',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '链式授权配置，非必填。更多信息，请参见[使用链式授权访问其他实体资源](~~465340~~)。',
            'required' => false,
            '$ref' => '#/components/schemas/CredentialConfig',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => '响应结构体',
            'description' => '响应结构体',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'RequestId',
                'description' => '当次请求的Request ID。',
                'type' => 'string',
                'example' => '6E93D6C9-5AC0-49F9-914D-E02678D3****',
              ),
              'Faces' => 
              array (
                'description' => '图片人脸信息列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '人脸详细信息。',
                  '$ref' => '#/components/schemas/Figure',
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"6E93D6C9-5AC0-49F9-914D-E02678D3****\\",\\n  \\"Faces\\": [\\n    {\\n      \\"FigureId\\": \\"\\",\\n      \\"FigureConfidence\\": 0,\\n      \\"FigureClusterId\\": \\"\\",\\n      \\"FigureClusterConfidence\\": 0,\\n      \\"FigureType\\": \\"\\",\\n      \\"Age\\": 0,\\n      \\"AgeSD\\": 0,\\n      \\"Gender\\": \\"\\",\\n      \\"GenderConfidence\\": 0,\\n      \\"Emotion\\": \\"\\",\\n      \\"EmotionConfidence\\": 0,\\n      \\"FaceQuality\\": 0,\\n      \\"Boundary\\": {\\n        \\"Width\\": 0,\\n        \\"Height\\": 0,\\n        \\"Left\\": 0,\\n        \\"Top\\": 0,\\n        \\"Polygon\\": [\\n          {\\n            \\"X\\": 0,\\n            \\"Y\\": 0\\n          }\\n        ]\\n      },\\n      \\"Mouth\\": \\"\\",\\n      \\"MouthConfidence\\": 0,\\n      \\"Beard\\": \\"\\",\\n      \\"BeardConfidence\\": 0,\\n      \\"Hat\\": \\"\\",\\n      \\"HatConfidence\\": 0,\\n      \\"Mask\\": \\"\\",\\n      \\"MaskConfidence\\": 0,\\n      \\"Glasses\\": \\"\\",\\n      \\"GlassesConfidence\\": 0,\\n      \\"Sharpness\\": 0,\\n      \\"Attractive\\": 0,\\n      \\"HeadPose\\": {\\n        \\"Pitch\\": 0,\\n        \\"Roll\\": 0,\\n        \\"Yaw\\": 0\\n      }\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '通过AI模型能力检测图片中的人脸以及人脸信息',
      'description' => '- **请确保在使用该接口前，已充分了解智能媒体管理产品的收费方式和[价格](~~477042~~)**。
- 该接口支持的输入图片编码格式请参见[图片限制](~~475569~~)。',
    ),
    'DetectImageCropping' => 
    array (
      'summary' => '通过AI模型能力在给定的目标图片比例下检测出视觉效果较好的裁剪框区域。',
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
        'operationType' => 'none',
        'abilityTreeCode' => '133405',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREimm1NT5J6',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ProjectName',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '项目名称',
            'description' => '项目名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'immtest',
          ),
        ),
        1 => 
        array (
          'name' => 'SourceURI',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'SourceURI',
            'description' => '图片的OSS地址。

OSS地址规则为oss://${Bucket}/${Object}，其中`${Bucket}`为和当前项目处于同一区域(Region)的OSS Bucket名称，`${Object}`为包含文件扩展名的文件完整路径。',
            'type' => 'string',
            'required' => false,
            'example' => 'oss://imm-test/testcases/facetest.jpg',
          ),
        ),
        2 => 
        array (
          'name' => 'AspectRatios',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '裁剪比例列表。最多可设置5个比例，单个裁剪比例要求如下。

- 比例必须为整数比例，取值范围为（0，20）。

- 比例范围必须控制在\\[0.5，2]之间。

- 不填写此参数时，默认按照`["auto"]`处理。

> 以下情况会出现报错提示：<br>-设置的比例大于5个。<br>-传入的列表为空。<br>-比例不为整数，例如`4.1:3`。<br>-比例范围小于0.5或大于2。',
            'type' => 'string',
            'required' => false,
            'example' => '["1:1"]',
          ),
        ),
        3 => 
        array (
          'name' => 'CredentialConfig',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '链式授权配置，非必填。更多信息，请参见[使用链式授权访问其他实体资源](~~465340~~)。',
            'required' => false,
            '$ref' => '#/components/schemas/CredentialConfig',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => '图片裁剪结果',
            'description' => '图片裁剪结果。',
            'type' => 'object',
            'properties' => 
            array (
              'Croppings' => 
              array (
                'title' => '图片裁剪结果',
                'description' => '图片裁剪数组信息。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '图片的裁剪详细信息。',
                  '$ref' => '#/components/schemas/CroppingSuggestion',
                ),
              ),
              'RequestId' => 
              array (
                'title' => '请求唯一ID',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '91AC8C98-0F36-49D2-8290-742E24D*****',
              ),
            ),
          ),
        ),
        500 => 
        array (
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Croppings\\": [\\n    {\\n      \\"AspectRatio\\": \\"\\",\\n      \\"Confidence\\": 0,\\n      \\"Boundary\\": {\\n        \\"Width\\": 0,\\n        \\"Height\\": 0,\\n        \\"Left\\": 0,\\n        \\"Top\\": 0,\\n        \\"Polygon\\": [\\n          {\\n            \\"X\\": 0,\\n            \\"Y\\": 0\\n          }\\n        ]\\n      }\\n    }\\n  ],\\n  \\"RequestId\\": \\"91AC8C98-0F36-49D2-8290-742E24D*****\\"\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '通过AI模型能力在给定的目标图片比例下检测出视觉效果较好的裁剪框区域',
    ),
    'AddImageMosaic' => 
    array (
      'summary' => '在一张图片的一个或多个特定区域内添加多种形状的马赛克、高斯模糊或纯色块，并将填充后的图片保存到指定的OSS文件对象地址。该功能主要用于隐私保护。',
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
      ),
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'none',
        'abilityTreeCode' => '147967',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREimmQT4435',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ProjectName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '项目名称，获取方式请参见[创建项目](~~478153~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'test-project',
          ),
        ),
        1 => 
        array (
          'name' => 'SourceURI',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '源图片的OSS地址。

OSS地址规则为oss://${Bucket}/${Object}，其中`${Bucket}`为和当前项目处于同一区域(Region)的OSS Bucket名称，`${Object}`为包含文件扩展名的文件完整路径。

支持的图片格式：jpg，png，tiff，jp2，bmp。',
            'type' => 'string',
            'required' => true,
            'example' => 'oss://examplebucket/sampleobject.jpg',
          ),
        ),
        2 => 
        array (
          'name' => 'TargetURI',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '输出图片存储的OSS地址。

OSS地址规则为oss://${Bucket}/${Object}，其中`${Bucket}`为和当前项目处于同一区域(Region)的OSS Bucket名称，`${Object}`为包含文件扩展名的文件完整路径。',
            'type' => 'string',
            'required' => true,
            'example' => 'oss://examplebucket/outputImage.jpg',
          ),
        ),
        3 => 
        array (
          'name' => 'ImageFormat',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '图片保存时的编码格式。可取值为jpg、png、webp，默认与输入图片编码格式相同。',
            'type' => 'string',
            'required' => false,
            'enumValueTitles' => 
            array (
              'jpg' => 'jpg',
              'png' => 'png',
              'webp' => 'webp',
            ),
            'example' => 'jpg',
          ),
        ),
        4 => 
        array (
          'name' => 'Quality',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '输出图片的压缩质量，仅限jpg和webp图片格式。设置范围为0~100，默认为80。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '80',
          ),
        ),
        5 => 
        array (
          'name' => 'Targets',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '处理框及操作类别参数数组。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '处理框及操作类别参数。',
              'type' => 'object',
              'properties' => 
              array (
                'Type' => 
                array (
                  'description' => '添加的马赛克类型。可取值如下：
- square：方形的马赛克
- diamond：菱形的马赛克
- hexagon：正六边形的马赛克
- blur：高斯模糊
- pure：纯色块',
                  'type' => 'string',
                  'required' => true,
                  'example' => 'square',
                ),
                'Boundary' => 
                array (
                  'description' => '处理框位置信息。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'ReferPos' => 
                    array (
                      'description' => '处理框在图片上的基准位置。可取值如下：
- topright：右上方
- topleft（默认）：左上方
- bottomright：右下方
- bottomleft：左下方',
                      'type' => 'string',
                      'required' => false,
                      'example' => 'topleft',
                    ),
                    'X' => 
                    array (
                      'description' => '处理框相较于基准点的水平偏移，不同取值的含义如下：
- 取值为大于等于0的整数：表示距离基准位置的横向距离，单位为px。
- 取值为小数：表示横向距离像素值与图片整体宽度的比值，取值范围为\\[0,1)。',
                      'type' => 'number',
                      'format' => 'float',
                      'required' => true,
                      'example' => '0',
                    ),
                    'Y' => 
                    array (
                      'description' => '处理框相较于基准点的垂直偏移，不同取值的含义如下：
- 取值为大于等于0的整数：表示距离基准位置的纵向距离，单位为px。
- 取值为小数：表示纵向距离像素值与图片整体高度的比值，取值范围为\\[0,1)。',
                      'type' => 'number',
                      'format' => 'float',
                      'required' => true,
                      'example' => '0',
                    ),
                    'Height' => 
                    array (
                      'description' => '处理框的高，不同取值的含义如下：
- 取值为大于等于0的整数：表示处理框高度，单位为px。
- 取值为小数：表示框纵向长度像素值与图片整体高度的比值，取值范围为\\[0,1)。',
                      'type' => 'number',
                      'format' => 'float',
                      'required' => true,
                      'example' => '200',
                    ),
                    'Width' => 
                    array (
                      'description' => '处理框的宽，不同取值的含义如下：
- 取值为大于等于0的整数：表示处理框宽度，单位为px。
- 取值为小数：表示框横向长度像素值与图片整体宽度的比值，取值范围为\\[0,1)。',
                      'type' => 'number',
                      'format' => 'float',
                      'required' => true,
                      'example' => '200',
                    ),
                  ),
                  'required' => true,
                ),
                'MosaicRadius' => 
                array (
                  'description' => '马赛克小块的半径大小。默认值为5，单位为px。
> 该参数对于添加高斯模糊与纯色块不生效。',
                  'type' => 'integer',
                  'format' => 'int32',
                  'required' => false,
                  'example' => '5',
                ),
                'BlurRadius' => 
                array (
                  'description' => '高斯模糊的模糊半径，取值范围为1~50，默认值为3，单位为px。
> 该参数仅在添加高斯模糊时生效。',
                  'type' => 'integer',
                  'format' => 'int32',
                  'required' => false,
                  'example' => '3',
                ),
                'Sigma' => 
                array (
                  'description' => '高斯模糊的标准差，取值必须大于0，默认值为5。

> 该参数仅在添加高斯模糊时生效。',
                  'type' => 'integer',
                  'format' => 'int32',
                  'required' => false,
                  'example' => '5',
                ),
                'Color' => 
                array (
                  'description' => '纯色块的颜色，支持`#FFFFFF`形式与预设的`red`、`white`等关键字。默认值为#FFFFFF，即白色。
> 该参数仅在添加纯色块时生效。',
                  'type' => 'string',
                  'required' => false,
                  'example' => '#FFFFFF',
                ),
              ),
              'required' => false,
            ),
            'required' => true,
          ),
        ),
        6 => 
        array (
          'name' => 'CredentialConfig',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '链式授权配置，非必填。更多信息，请参见[使用链式授权访问其他实体资源](~~465340~~)。',
            'required' => false,
            '$ref' => '#/components/schemas/CredentialConfig',
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
                'example' => 'CA995EFD-083D-4F40-BE8A-BDF75FF*****',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"CA995EFD-083D-4F40-BE8A-BDF75FF*****\\"\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '添加图片马赛克',
      'description' => '- **请确保在使用该接口前，已充分了解智能媒体管理产品的收费方式和[价格](~~88317~~)。**
- 调用该接口前，请确保当前Region已经存在可用的项目（Project），详见[项目管理](~~478152~~)。
- 该接口支持的输入图片编码格式为jpg与png，单边长不超过30000像素，总像素不超过2.5亿像素。',
    ),
    'CreateImageToPDFTask' => 
    array (
      'summary' => '将多张图片转换为单个PDF文件，并保存到指定的OSS文件对象地址。',
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
      ),
      'operationType' => 'write',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'create',
        'abilityTreeCode' => '147624',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREimmEPY4NE',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ProjectName',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'A short description of struct',
            'description' => '项目名称，获取方式请参见[创建项目](~~478153~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'test-project',
          ),
        ),
        1 => 
        array (
          'name' => 'Sources',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '输入图片列表，转换顺序为输入列表URI的顺序。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '输入图片信息。',
              'type' => 'object',
              'properties' => 
              array (
                'URI' => 
                array (
                  'description' => '源图片的OSS地址。

OSS地址规则为oss://${Bucket}/${Object}，其中`${Bucket}`为和当前项目处于同一区域(Region)的OSS Bucket名称，`${Object}`为包含文件扩展名的文件完整路径。

支持的图片格式：jpg、jp2、png、tiff、webp、bmp、svg。',
                  'type' => 'string',
                  'required' => true,
                  'example' => 'oss://examplebucket/sampleobject.jpg',
                ),
                'Rotate' => 
                array (
                  'description' => '图片旋转角度。可取值如下：

- 0（默认）
- 90
- 180
- 270',
                  'type' => 'integer',
                  'format' => 'int64',
                  'required' => false,
                  'example' => '90',
                ),
              ),
              'required' => false,
            ),
            'required' => true,
            'minItems' => 1,
          ),
        ),
        2 => 
        array (
          'name' => 'TargetURI',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '输出图片存储的OSS地址。

OSS地址规则为oss://${bucketname}/${objectname}，其中${bucketname}为和当前项目处于同一地域的OSS Bucket名称，${objectname}为包含文件名称的文件路径。',
            'type' => 'string',
            'required' => true,
            'example' => 'oss://examplebucket/outputDocument.pdf',
          ),
        ),
        3 => 
        array (
          'name' => 'UserData',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用户自定义信息，在异步消息通知中会为您返回，用于方便您系统内对消息通知进行关联处理。最大长度为2048字节。',
            'type' => 'string',
            'required' => false,
            'example' => 'test-data',
          ),
        ),
        4 => 
        array (
          'name' => 'CredentialConfig',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '链式授权配置。更多信息，请参见[使用链式授权访问其他实体资源](~~465340~~)。',
            'required' => false,
            '$ref' => '#/components/schemas/CredentialConfig',
          ),
        ),
        5 => 
        array (
          'name' => 'Tags',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '自定义标签，用于对异步任务进行搜索、过滤。',
            'type' => 'object',
            'required' => false,
            'example' => '{
      "User": "Jane"
}',
          ),
        ),
        6 => 
        array (
          'name' => 'Notification',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '消息通知配置，详细内容请单击Notification查看，异步通知消息格式请参见[异步通知消息格式](~~471456~~)。',
            'required' => false,
            '$ref' => '#/components/schemas/Notification',
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
                'example' => 'EC564A9A-BA5C-4499-A087-D9B9E76E*****',
              ),
              'EventId' => 
              array (
                'description' => '事件ID。',
                'type' => 'string',
                'example' => '0ED-1Bz8z71k5TtsUejT4UJ16Es*****',
              ),
              'TaskId' => 
              array (
                'description' => '任务ID。',
                'type' => 'string',
                'example' => 'ImageToPDF-cbe6ae3e-f8dc-4566-9da7-535d5d*****',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"EC564A9A-BA5C-4499-A087-D9B9E76E*****\\",\\n  \\"EventId\\": \\"0ED-1Bz8z71k5TtsUejT4UJ16Es*****\\",\\n  \\"TaskId\\": \\"ImageToPDF-cbe6ae3e-f8dc-4566-9da7-535d5d*****\\"\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '创建图片转PDF任务',
      'description' => '- **请确保在使用该接口前，已充分了解智能媒体管理产品的收费方式和[价格](~~88317~~)。**
- 调用该接口前，请确保当前Region已经存在可用的项目（Project），详见[项目管理](~~478152~~)。
- 该接口最大支持输入100张图片。
- 该接口为异步接口，获取任务开始执行后，任务信息只保存7天，超过7天则无法再获取。调用[GetTask](~~478241~~)或[ListTasks](~~478242~~)接口获取返回的`TaskId`，查看任务信息。也可以通过设置[Notification](~~471456~~)消息通知参数，通过消息通知获取任务信息。',
    ),
    'CreateImageSplicingTask' => 
    array (
      'summary' => '将多张图片按设定的规则拼接成一张图片，并保存到指定的OSS文件对象地址。',
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
      ),
      'operationType' => 'write',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'create',
        'abilityTreeCode' => '144838',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREimm4NW8UR',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ProjectName',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'A short description of struct',
            'description' => '项目名称，获取方式请参见[创建项目](~~478153~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'test-project',
          ),
        ),
        1 => 
        array (
          'name' => 'Sources',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '输入图片列表，拼接顺序为输入列表URI顺序。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '输入图片信息。',
              'type' => 'object',
              'properties' => 
              array (
                'URI' => 
                array (
                  'description' => '源图片的OSS地址。

OSS地址规则为oss://${Bucket}/${Object}，其中`${Bucket}`为和当前项目处于同一区域(Region)的OSS Bucket名称，`${Object}`为包含文件扩展名的文件完整路径。

支持的图片格式：jpg、png。',
                  'type' => 'string',
                  'required' => true,
                  'example' => 'oss://examplebucket/sampleobject.jpg',
                ),
                'Rotate' => 
                array (
                  'description' => '图片旋转角度。可取值如下：

- 0（默认）
- 90
- 180
- 270',
                  'type' => 'integer',
                  'format' => 'int64',
                  'required' => false,
                  'example' => '90',
                ),
              ),
              'required' => false,
            ),
            'required' => true,
            'minItems' => 1,
          ),
        ),
        2 => 
        array (
          'name' => 'TargetURI',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '输出图片存储的OSS地址。

OSS地址规则为oss://${bucketname}/${objectname}，其中${bucketname}为和当前项目处于同一地域的OSS Bucket名称，${objectname}为包含文件名称的文件路径。',
            'type' => 'string',
            'required' => true,
            'example' => 'oss://examplebucket/outputImage.jpg',
          ),
        ),
        3 => 
        array (
          'name' => 'ImageFormat',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '输出图片的压缩格式。可取值如下：

- jpg（默认）
- png
- webp',
            'type' => 'string',
            'required' => false,
            'enumValueTitles' => 
            array (
              'jpg' => 'jpg',
              'png' => 'png',
              'webp' => 'webp',
            ),
            'example' => 'jpg',
          ),
        ),
        4 => 
        array (
          'name' => 'Quality',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '输出图片压缩质量，仅对jpg和webp图片格式生效。取值范围为0~100，默认值为80。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '80',
          ),
        ),
        5 => 
        array (
          'name' => 'Direction',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '图片拼接方法。可取值如下：

- vertical（默认）：垂直方向拓展，所有被拼接图片需要对齐宽度。
- horizontal：水平方向拓展，所有被拼接图片需要对齐高度。',
            'type' => 'string',
            'required' => false,
            'example' => 'vertical',
          ),
        ),
        6 => 
        array (
          'name' => 'ScaleType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '被拼接图片在对齐宽度或高度时的缩放方式。可取值如下：

- fit（默认）：缩放并不保留黑边（仅等比缩放）。
- stretch：拉伸以填满。
- horizon：仅垂直拉伸。
- vertical：仅水平拉伸。',
            'type' => 'string',
            'required' => false,
            'example' => 'stretch',
          ),
        ),
        7 => 
        array (
          'name' => 'Align',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '被拼接图片宽或高需要对齐的像素值。取值范围为1~4096。

- 当参数**Direction**取值为`vertical`时，此参数表示对齐宽度的像素值。
- 当参数**Direction**取值为`horizontal`时，此参数表示对齐高度的像素值。

> 若不填写此参数（默认），则默认与拼接的第一张图片的宽或高一致。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '192',
          ),
        ),
        8 => 
        array (
          'name' => 'Padding',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '拼接后图片中子图的间隔，默认值为0，单位为px。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '2',
          ),
        ),
        9 => 
        array (
          'name' => 'Margin',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '拼接后图片的空白边缘，默认值为0，单位为px。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '2',
          ),
        ),
        10 => 
        array (
          'name' => 'BackgroundColor',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '参数`Padding`与`Margin`对应区域的填充颜色，支持`#FFFFFF`形式与预设的`red`、`alpha`等关键字。',
            'type' => 'string',
            'required' => false,
            'example' => 'red',
          ),
        ),
        11 => 
        array (
          'name' => 'UserData',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用户自定义信息，在异步消息通知中会为您返回，用于方便您系统内对消息通知进行关联处理。最大长度为2048字节。',
            'type' => 'string',
            'required' => false,
            'example' => 'test-data',
          ),
        ),
        12 => 
        array (
          'name' => 'CredentialConfig',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '链式授权配置。更多信息，请参见[使用链式授权访问其他实体资源](~~465340~~)。',
            'required' => false,
            '$ref' => '#/components/schemas/CredentialConfig',
          ),
        ),
        13 => 
        array (
          'name' => 'Tags',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '自定义标签，用于对异步任务进行搜索、过滤。',
            'type' => 'object',
            'required' => false,
            'example' => '{
      "User": "Jane"
}',
          ),
        ),
        14 => 
        array (
          'name' => 'Notification',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '消息通知配置，详细内容请单击Notification查看，异步通知消息格式请参见[异步通知消息格式](~~471456~~)。',
            'required' => false,
            '$ref' => '#/components/schemas/Notification',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '图片拼接结果。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '94D6F994-E298-037E-8E8B-0090F27*****',
              ),
              'EventId' => 
              array (
                'description' => '事件ID。',
                'type' => 'string',
                'example' => '10C-1R6p7Km0H5Ieg38LKXTIvw*****',
              ),
              'TaskId' => 
              array (
                'description' => '任务ID。',
                'type' => 'string',
                'example' => 'ImageSplicing-537cc157-7645-444a-a631-c8db4d02*****',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"94D6F994-E298-037E-8E8B-0090F27*****\\",\\n  \\"EventId\\": \\"10C-1R6p7Km0H5Ieg38LKXTIvw*****\\",\\n  \\"TaskId\\": \\"ImageSplicing-537cc157-7645-444a-a631-c8db4d02*****\\"\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '创建图片拼接任务',
      'description' => '- **请确保在使用该接口前，已充分了解智能媒体管理产品的收费方式和[价格](~~88317~~)。**
- 调用该接口前，请确保当前Region已经存在可用的项目（Project），详见[项目管理](~~478152~~)。
- 该接口最大支持拼接10张图片，每张图片的单边长不能超过32876像素，总像素不能超过10亿像素。
- 该接口为异步接口，获取任务开始执行后，任务信息只保存7天，超过7天则无法再获取。调用[GetTask](~~478241~~)或[ListTasks](~~478242~~)接口获取返回的`TaskId`，查看任务信息。也可以通过设置[Notification](~~471456~~)消息通知参数，通过消息通知获取任务信息。',
    ),
    'CompareImageFaces' => 
    array (
      'summary' => '比较两张图片中最大的人脸的相似度。最大的人脸指的是图片经人脸检测后，所有人脸框中面积最大的。',
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
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'none',
        'abilityTreeCode' => '160091',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREimmE6F82K',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ProjectName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '项目名称，获取方式请参见[创建项目](~~478153~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'test-project',
          ),
        ),
        1 => 
        array (
          'name' => 'CredentialConfig',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '链式授权配置，非必填。更多信息，请参见[使用链式授权访问其他实体资源](~~465340~~)。',
            'required' => false,
            '$ref' => '#/components/schemas/CredentialConfig',
          ),
        ),
        2 => 
        array (
          'name' => 'Source',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '对比的两张图片地址。',
            'type' => 'object',
            'properties' => 
            array (
              'URI1' => 
              array (
                'description' => '图片的OSS地址。

地址规则为`oss://<bucket>/<object>`，其中`<bucket>`为和当前项目处于同一地域的OSS Bucket名称，`<object>`为包含文件扩展名的文件完整路径。',
                'type' => 'string',
                'required' => false,
                'example' => 'oss://test-bucket/test-object1',
              ),
              'URI2' => 
              array (
                'description' => '图片的OSS地址。

地址规则为`oss://<bucket>/<object>`，其中`<bucket>`为和当前项目处于同一地域的OSS Bucket名称，`<object>`为包含文件扩展名的文件完整路径。',
                'type' => 'string',
                'required' => false,
                'example' => 'oss://test-bucket/test-object2',
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
            'description' => '响应结构体。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '当次请求的Request ID。',
                'type' => 'string',
                'example' => 'F73AC982-2B9E-4ECD-AED5-F8331C5******',
              ),
              'Similarity' => 
              array (
                'description' => '人脸相似度，该值越大则人脸相似度越高，取值范围为0～1。',
                'type' => 'number',
                'format' => 'float',
                'example' => '0.8848152756690983',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"F73AC982-2B9E-4ECD-AED5-F8331C5******\\",\\n  \\"Similarity\\": 0.8848152756690983\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '图片人脸相似度比对',
      'description' => '- **请确保在使用该接口前，已充分了解智能媒体管理产品的收费方式和[价格](~~88317~~)。**
- 对于输入的图片，只会选取图片中人脸框范围最大的人脸进行人脸比较。人脸框检测结果与[DetectImageFaces](~~478213~~)一致。',
    ),
    'DetectImageBodies' => 
    array (
      'summary' => '检测图片中的人体信息，包含置信度，人体边框等信息。',
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
        'operationType' => 'none',
        'abilityTreeCode' => '143909',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREimm0QJK19',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ProjectName',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '项目名称',
            'description' => '项目名称，获取方式请参见[创建项目](~~478153~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'test-project',
          ),
        ),
        1 => 
        array (
          'name' => 'SourceURI',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'SourceURI',
            'description' => '文件的OSS存储地址。

OSS地址规则为oss://${Bucket}/${Object}，其中`${Bucket}`为和当前项目处于同一区域(Region)的OSS Bucket名称，`${Object}`为包含文件扩展名的文件完整路径。',
            'type' => 'string',
            'required' => false,
            'example' => 'oss://test-bucket/test-object.jpg',
          ),
        ),
        2 => 
        array (
          'name' => 'Sensitivity',
          'in' => 'query',
          'allowEmptyValue' => true,
          'schema' => 
          array (
            'description' => '灵敏度。取值范围为0~1，默认值为0.6。灵敏度值越大，检测出的内容越多。',
            'type' => 'number',
            'format' => 'float',
            'required' => false,
            'example' => '0.6',
          ),
        ),
        3 => 
        array (
          'name' => 'CredentialConfig',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '链式授权配置，非必填。更多信息，请参见[使用链式授权访问其他实体资源](~~465340~~)。',
            'required' => false,
            '$ref' => '#/components/schemas/CredentialConfig',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => '图片裁剪结果',
            'description' => '图片检测结果。',
            'type' => 'object',
            'properties' => 
            array (
              'Bodies' => 
              array (
                'title' => '图片裁剪结果',
                'description' => '人体信息列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '人体详细信息。',
                  '$ref' => '#/components/schemas/Body',
                ),
              ),
              'RequestId' => 
              array (
                'title' => '请求唯一ID',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '501339F9-4B70-0CE2-AB8C-866C********',
              ),
            ),
          ),
        ),
        500 => 
        array (
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Bodies\\": [\\n    {\\n      \\"Confidence\\": 0,\\n      \\"Boundary\\": {\\n        \\"Width\\": 0,\\n        \\"Height\\": 0,\\n        \\"Left\\": 0,\\n        \\"Top\\": 0,\\n        \\"Polygon\\": [\\n          {\\n            \\"X\\": 0,\\n            \\"Y\\": 0\\n          }\\n        ]\\n      }\\n    }\\n  ],\\n  \\"RequestId\\": \\"501339F9-4B70-0CE2-AB8C-866C********\\"\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '检测图片中的人体',
      'description' => '- 在调用该接口前，请确保已在智能媒体管理上正确创建了项目（Project），获取方式请参见[创建项目](~~478153~~)。
- 该接口支持的输入图片编码格式请参见[图片限制](~~475569~~)。',
    ),
    'DetectImageCars' => 
    array (
      'summary' => '检测指定图像中的车辆边界信息、车辆属性信息、车牌信息。车辆属性信息包括：车辆颜色（CarColor）、车辆类型（CarType）；车牌信息包括：车牌识别内容（Content）、车牌框信息（Boundary）。',
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
        'operationType' => 'none',
        'abilityTreeCode' => '172472',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREimmIT7OSY',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ProjectName',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '项目名称',
            'description' => '项目名称，获取方式请参见[创建项目](~~478153~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'test-project',
          ),
        ),
        1 => 
        array (
          'name' => 'SourceURI',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'SourceURI',
            'description' => '文件的OSS存储地址。

OSS地址规则为oss://${Bucket}/${Object}，其中`${Bucket}`为和当前项目处于同一区域(Region)的OSS Bucket名称，`${Object}`为包含文件扩展名的文件完整路径。',
            'type' => 'string',
            'required' => true,
            'example' => 'oss://test-bucket/test-object.jpg',
          ),
        ),
        2 => 
        array (
          'name' => 'CredentialConfig',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '链式授权配置，非必填。更多信息，请参见[使用链式授权访问其他实体资源](~~465340~~)。',
            'required' => false,
            '$ref' => '#/components/schemas/CredentialConfig',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => '图片二维码检测结果',
            'description' => '响应结构体。',
            'type' => 'object',
            'properties' => 
            array (
              'Cars' => 
              array (
                'title' => '二维码检测结果',
                'description' => '车辆信息列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '车辆详细信息。',
                  '$ref' => '#/components/schemas/Car',
                ),
                'required' => true,
                'minItems' => 0,
              ),
              'RequestId' => 
              array (
                'title' => '请求唯一ID',
                'description' => '当次请求的Request ID。',
                'type' => 'string',
                'example' => 'A8745209-DD0E-027E-8ABA-085E0C******',
              ),
            ),
          ),
        ),
        500 => 
        array (
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Cars\\": [\\n    {\\n      \\"LicensePlates\\": [\\n        {\\n          \\"Content\\": \\"川A0123\\",\\n          \\"Boundary\\": {\\n            \\"Width\\": 0,\\n            \\"Height\\": 0,\\n            \\"Left\\": 0,\\n            \\"Top\\": 0,\\n            \\"Polygon\\": [\\n              {\\n                \\"X\\": 0,\\n                \\"Y\\": 0\\n              }\\n            ]\\n          },\\n          \\"Confidence\\": 0\\n        }\\n      ],\\n      \\"CarType\\": \\"\\",\\n      \\"CarTypeConfidence\\": 0,\\n      \\"CarColor\\": \\"\\",\\n      \\"CarColorConfidence\\": 0,\\n      \\"Boundary\\": {\\n        \\"Width\\": 0,\\n        \\"Height\\": 0,\\n        \\"Left\\": 0,\\n        \\"Top\\": 0,\\n        \\"Polygon\\": [\\n          {\\n            \\"X\\": 0,\\n            \\"Y\\": 0\\n          }\\n        ]\\n      },\\n      \\"Confidence\\": 0\\n    }\\n  ],\\n  \\"RequestId\\": \\"A8745209-DD0E-027E-8ABA-085E0C******\\"\\n}","type":"json"}]',
      'title' => '检测图片中的车辆信息',
      'description' => '- 该接口支持的输入图片编码格式请参见[图片限制](https://help.aliyun.com/document_detail/475569.html?spm=a2c4g.611302.0.0.7f371b2erm2dxG#a6ec99e06ahno)。',
    ),
    'CreateMediaConvertTask' => 
    array (
      'summary' => '创建一个异步的媒体转码任务，提供媒体转码、媒体拼接、视频截帧、视频转动图等相关音视频媒体文件处理能力。',
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
      'operationType' => 'write',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'create',
        'abilityTreeCode' => '132611',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREimmCUOMK0',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ProjectName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '项目名称，获取方式请参见[创建项目](~~478153~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'test-project',
          ),
        ),
        1 => 
        array (
          'name' => 'Sources',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '媒体文件列表。若列表元素大于1个则表示开启Concat（拼接）功能，Concat顺序为输入视频文件URI的顺序。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '源媒体文件。',
              'type' => 'object',
              'properties' => 
              array (
                'URI' => 
                array (
                  'description' => 'OSS地址规则为`oss://${Bucket}/${Object}`，其中`${Bucket}`为和当前项目处于同一区域(Region)的OSS Bucket名称，`${Object}`为包含文件扩展名的文件完整路径。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'oss://test-bucket/test-object',
                ),
                'StartTime' => 
                array (
                  'description' => '媒体转码开始时间，单位为秒。取值范围如下：
- 0（默认）：从媒体起始时间开始转码。
- n（大于0）：从媒体起始时间n秒后开始转码。',
                  'type' => 'number',
                  'format' => 'double',
                  'required' => false,
                  'example' => '0',
                ),
                'Duration' => 
                array (
                  'description' => '媒体转码时长。单位为秒，默认值为0，表示到视频结束时间。',
                  'type' => 'number',
                  'format' => 'double',
                  'required' => false,
                  'example' => '0',
                ),
                'Subtitles' => 
                array (
                  'description' => '添加字幕列表，默认为空。
',
                  'type' => 'array',
                  'items' => 
                  array (
                    'description' => '字幕信息。',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'URI' => 
                      array (
                        'description' => 'OSS地址规则为`oss://${Bucket}/${Object}`，其中`${Bucket}`为和当前项目处于同一区域(Region)的OSS Bucket名称，`${Object}`为包含文件扩展名的文件完整路径。
支持的字幕格式为：srt，vtt，mov_text，ass，dvd_sub，pgs。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'oss://test-bucket/test-object
',
                      ),
                      'TimeOffset' => 
                      array (
                        'description' => '字幕延迟时间，单位为秒，默认为0。',
                        'type' => 'number',
                        'format' => 'double',
                        'required' => false,
                        'example' => '10.5',
                      ),
                      'Language' => 
                      array (
                        'description' => '字幕语言，参考标准为ISO 639-2，默认为空。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'eng',
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
        2 => 
        array (
          'name' => 'Targets',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '媒体处理任务列表，支持配置多任务。',
            'type' => 'array',
            'items' => 
            array (
              'description' => 'Targets数组元素的详细信息。',
              'type' => 'object',
              'properties' => 
              array (
                'URI' => 
                array (
                  'description' => '媒体转码输出文件的OSS地址。

OSS地址规则为`oss://${Bucket}/${Object}`，其中`${Bucket}`为和当前项目处于同一区域(Region)的OSS Bucket名称，`${Object}`为包含文件扩展名的文件完整路径。
- 当**URI**存在拓展名时转码输出的媒体文件OSS地址均为**URI**，若输出文件为多个会存在覆盖的情况。
- 当**URI**不存在拓展名时转码输出的媒体文件OSS地址由**URI**、**Container**与**Segment**参数共同决定，例如**URI**为`oss://examplebucket/outputVideo`：
   -  当**Container**为`mp4`，**Segment**为空时，生成媒体文件的OSS地址为`oss://examplebucket/outputVideo.mp4`。
   -  当**Container**为`ts`，**Segment**中**Format**为`hls`时，将产生OSS地址为`oss://examplebucket/outputVideo.m3u8`的m3u8文件以及多个拥有`oss://examplebucket/outputVideo`前缀的ts文件。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'oss://test-bucket/test-target-object.mp4',
                ),
                'Container' => 
                array (
                  'description' => '媒体容器类型。可选容器类型如下：
- 音视频容器：mp4、mkv、mov、asf、avi、mxf、ts、flv
- 音频容器：mp3、aac、flac、oga、ac3、opus
><notice>Container与URI参数需要同时设置。若只进行字幕提取，截帧，截雪碧图或媒体转动图，则需要将Container与URI同时设为空值，此时设置的Segment，Video，Audio和Speed等参数无意义。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'mp4',
                ),
                'Speed' => 
                array (
                  'description' => '媒体倍速播放设置，取值范围为\\[0.5,2]，默认为1.0。
> 转码后媒体文件与源媒体文件默认播放速度的比值，非倍速转码。',
                  'type' => 'number',
                  'format' => 'float',
                  'required' => false,
                  'example' => '1.0',
                ),
                'Segment' => 
                array (
                  'description' => '媒体切片设置，默认不进行切片。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Format' => 
                    array (
                      'description' => '媒体切片方式。取值范围如下：
- hls
- dash',
                      'type' => 'string',
                      'required' => false,
                      'example' => 'hls',
                    ),
                    'Duration' => 
                    array (
                      'description' => '切片长度。单位为秒。',
                      'type' => 'number',
                      'format' => 'double',
                      'required' => false,
                      'example' => '30',
                    ),
                    'StartNumber' => 
                    array (
                      'description' => '起始序号，仅支持hls，默认为0。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'required' => false,
                      'example' => '5',
                    ),
                  ),
                  'required' => false,
                ),
                'Video' => 
                array (
                  'description' => '视频处理参数配置。
><notice>当Video为空值时，会将第一路视频流（若存在）直接拷贝到输出文件。',
                  'required' => false,
                  '$ref' => '#/components/schemas/TargetVideo',
                ),
                'Audio' => 
                array (
                  'description' => '音频处理参数配置。
><notice>当Audio为空值时，会将第一路音频流（若存在）直接拷贝到输出文件。',
                  'required' => false,
                  '$ref' => '#/components/schemas/TargetAudio',
                ),
                'Subtitle' => 
                array (
                  'description' => '字幕处理参数配置。
><notice>当Subtitle为空值时，会将第一路字幕流（若存在）直接拷贝到输出文件。',
                  'required' => false,
                  '$ref' => '#/components/schemas/TargetSubtitle',
                ),
                'Image' => 
                array (
                  'description' => '截帧，截雪碧图，媒体转动图参数配置。',
                  'required' => false,
                  '$ref' => '#/components/schemas/TargetImage',
                ),
                'StripMetadata' => 
                array (
                  'description' => '去除媒体文件metadata，如`title`、`album`等，默认为false。',
                  'type' => 'boolean',
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
          'name' => 'UserData',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用户自定义信息，在异步消息通知中会为您返回，用于方便您系统内对消息通知进行关联处理。最大长度为2048字节。',
            'type' => 'string',
            'required' => false,
            'example' => '{"ID": "testuid","Name": "test-user","Avatar": "http://test.com/testuid"}',
          ),
        ),
        4 => 
        array (
          'name' => 'Tags',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '自定义标签，用于对异步任务进行搜索、过滤。',
            'type' => 'object',
            'required' => false,
            'example' => '{"test":"val1"}',
          ),
        ),
        5 => 
        array (
          'name' => 'CredentialConfig',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '链式授权配置。更多信息，请参见[使用链式授权访问其他实体资源](~~465340~~)。',
            'required' => false,
            '$ref' => '#/components/schemas/CredentialConfig',
          ),
        ),
        6 => 
        array (
          'name' => 'Notification',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '消息通知配置，详细内容请单击Notification查看，异步通知消息格式请参见[异步通知消息格式](~~471456~~)。',
            'required' => false,
            '$ref' => '#/components/schemas/Notification',
          ),
        ),
        7 => 
        array (
          'name' => 'AlignmentIndex',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '在进行媒体拼接时，主媒体文件（提供`Video`、`Audio`中默认转码参数，包括分辨率、帧率等）在拼接列表中的序号，默认为0（对齐拼接列表中第一个媒体文件）。',
            'type' => 'integer',
            'format' => 'int32',
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
            'title' => '响应结构体',
            'description' => '响应结构体',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => '请求 ID',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'CA995EFD-083D-4F40-BE8A-BDF75FFFE0B6',
              ),
              'EventId' => 
              array (
                'description' => '事件ID。',
                'type' => 'string',
                'example' => '0ED-1Bz8z71k5TtsUejT4UJ16Es****',
              ),
              'TaskId' => 
              array (
                'description' => '任务ID。',
                'type' => 'string',
                'example' => 'MediaConvert-adb1ee28-c4c9-42a7-9f54-3b8eadcb****',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"CA995EFD-083D-4F40-BE8A-BDF75FFFE0B6\\",\\n  \\"EventId\\": \\"0ED-1Bz8z71k5TtsUejT4UJ16Es****\\",\\n  \\"TaskId\\": \\"MediaConvert-adb1ee28-c4c9-42a7-9f54-3b8eadcb****\\"\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '创建媒体转码任务',
      'description' => '- **请确保在使用该接口前，已充分了解智能媒体管理产品的收费方式和[价格](~~88317~~)。**
- 调用该接口前，请确保当前Region已经存在可用的项目（Project），详见[项目管理](~~478152~~)。
- 使用该接口进行媒体转码时，默认只处理一路视频/音频/字幕流，同时支持配置处理的视频/音频/字幕流数量。
- 使用该接口进行媒体拼接时，最大支持的媒体数量为11个，此时配置的转码、截帧等参数将作用于拼接后媒体数据。
- 该接口为异步接口，获取任务开始执行后，任务信息只保存7天，超过7天则无法再获取。调用[GetTask](~~478241~~)或[ListTasks](~~478242~~)接口获取返回的`TaskId`，查看任务信息。也可以通过设置[Notification](~~471456~~)消息通知参数，通过消息通知获取任务信息。',
    ),
    'DetectMediaMeta' => 
    array (
      'summary' => '获取媒体文件元信息，包括媒体格式信息和媒体流信息。',
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
      'operationType' => 'write',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'none',
        'abilityTreeCode' => '161491',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREimmGWMCEO',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ProjectName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '项目名称，获取方式请参见[创建项目](~~478153~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'test-project',
          ),
        ),
        1 => 
        array (
          'name' => 'SourceURI',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '媒体文件的OSS地址。

OSS地址规则为oss://${Bucket}/${Object}，其中`${Bucket}`为和当前项目处于同一区域(Region)的OSS Bucket名称，`${Object}`为包含文件扩展名的文件完整路径。',
            'type' => 'string',
            'required' => false,
            'example' => 'oss://examplebucket/sampleobject.mp4',
          ),
        ),
        2 => 
        array (
          'name' => 'CredentialConfig',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '链式授权配置，非必填。更多信息，请参见[使用链式授权访问其他实体资源](~~465340~~)。',
            'required' => false,
            '$ref' => '#/components/schemas/CredentialConfig',
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
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '2213B1A9-EB3D-4666-84E0-24980BC*****',
              ),
              'Language' => 
              array (
                'description' => '视频中使用的语言，参考标准为ISO 639-2。',
                'type' => 'string',
                'example' => 'eng',
              ),
              'Title' => 
              array (
                'description' => '媒体文件标题。',
                'type' => 'string',
                'example' => 'test',
              ),
              'VideoStreams' => 
              array (
                'description' => '视频流数组。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '视频流信息。',
                  '$ref' => '#/components/schemas/VideoStream',
                ),
              ),
              'AudioStreams' => 
              array (
                'description' => '音频流数组。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '音频流信息。',
                  '$ref' => '#/components/schemas/AudioStream',
                ),
              ),
              'Subtitles' => 
              array (
                'description' => '字幕流数组。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '字幕流信息。',
                  '$ref' => '#/components/schemas/SubtitleStream',
                ),
              ),
              'StreamCount' => 
              array (
                'description' => '媒体流数量。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '2',
              ),
              'ProgramCount' => 
              array (
                'description' => '节目数量。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '2',
              ),
              'FormatName' => 
              array (
                'description' => '格式名称。',
                'type' => 'string',
                'example' => 'mov,mp4,m4a,3gp,3g2,mj2',
              ),
              'FormatLongName' => 
              array (
                'description' => '格式名称的全称。',
                'type' => 'string',
                'example' => 'QuickTime / MOV',
              ),
              'Size' => 
              array (
                'description' => '媒体文件大小，单位为字节。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '25115517',
              ),
              'StartTime' => 
              array (
                'description' => '媒体的起始播放时间。',
                'type' => 'number',
                'format' => 'double',
                'example' => '0.000000',
              ),
              'Bitrate' => 
              array (
                'description' => '媒体文件的码率，单位为比特每秒（bit/s）。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '13164131',
              ),
              'Artist' => 
              array (
                'description' => '艺术家。',
                'type' => 'string',
                'example' => 'unable',
              ),
              'AlbumArtist' => 
              array (
                'description' => '演唱者。',
                'type' => 'string',
                'example' => 'unable',
              ),
              'Composer' => 
              array (
                'description' => '作曲家。',
                'type' => 'string',
                'example' => 'unable',
              ),
              'Performer' => 
              array (
                'description' => '演奏者。',
                'type' => 'string',
                'example' => 'unable',
              ),
              'Album' => 
              array (
                'description' => '专辑。',
                'type' => 'string',
                'example' => 'unable',
              ),
              'Duration' => 
              array (
                'description' => '视频的总时长，单位为秒（s）。',
                'type' => 'number',
                'format' => 'double',
                'example' => '15.263000',
              ),
              'ProduceTime' => 
              array (
                'description' => '视频拍摄时间，参考标准为RFC3339Nano。',
                'type' => 'string',
                'example' => '2022-04-24T02:39:57Z',
              ),
              'LatLong' => 
              array (
                'description' => '中心地理坐标点，是一个经纬度值。
格式为纬度,经度，纬度在前，经度在后，且纬度范围为\\[-90,+90]，经度范围为\\[-180,+180]。例如35.8,-45.91。',
                'type' => 'string',
                'example' => '+120.029003,+30.283095',
              ),
              'VideoWidth' => 
              array (
                'description' => '媒体文件中视频画面的宽度，单位为像素（px）。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '1080',
              ),
              'VideoHeight' => 
              array (
                'description' => '媒体文件中视频画面的高度，单位为像素（px）。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '1920',
              ),
              'Addresses' => 
              array (
                'description' => '视频地理位置检测结果。

只有视频中包含地理位置信息时，此参数才有值。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '位置详细信息。',
                  '$ref' => '#/components/schemas/Address',
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"2213B1A9-EB3D-4666-84E0-24980BC*****\\",\\n  \\"Language\\": \\"eng\\",\\n  \\"Title\\": \\"test\\",\\n  \\"VideoStreams\\": [\\n    {\\n      \\"Index\\": 0,\\n      \\"Language\\": \\"\\",\\n      \\"CodecName\\": \\"\\",\\n      \\"CodecLongName\\": \\"\\",\\n      \\"Profile\\": \\"\\",\\n      \\"CodecTimeBase\\": \\"\\",\\n      \\"CodecTagString\\": \\"\\",\\n      \\"CodecTag\\": \\"\\",\\n      \\"Width\\": 0,\\n      \\"Height\\": 0,\\n      \\"HasBFrames\\": 0,\\n      \\"SampleAspectRatio\\": \\"\\",\\n      \\"DisplayAspectRatio\\": \\"\\",\\n      \\"PixelFormat\\": \\"\\",\\n      \\"Level\\": 0,\\n      \\"FrameRate\\": \\"\\",\\n      \\"AverageFrameRate\\": \\"\\",\\n      \\"TimeBase\\": \\"\\",\\n      \\"StartTime\\": 0,\\n      \\"Duration\\": 0,\\n      \\"Bitrate\\": 0,\\n      \\"FrameCount\\": 0,\\n      \\"Rotate\\": \\"\\",\\n      \\"BitDepth\\": 0,\\n      \\"ColorSpace\\": \\"\\",\\n      \\"ColorRange\\": \\"\\",\\n      \\"ColorTransfer\\": \\"\\",\\n      \\"ColorPrimaries\\": \\"\\"\\n    }\\n  ],\\n  \\"AudioStreams\\": [\\n    {\\n      \\"Index\\": 0,\\n      \\"Language\\": \\"\\",\\n      \\"CodecName\\": \\"\\",\\n      \\"CodecLongName\\": \\"\\",\\n      \\"CodecTimeBase\\": \\"\\",\\n      \\"CodecTagString\\": \\"\\",\\n      \\"CodecTag\\": \\"\\",\\n      \\"TimeBase\\": \\"\\",\\n      \\"StartTime\\": 0,\\n      \\"Duration\\": 0,\\n      \\"Bitrate\\": 0,\\n      \\"FrameCount\\": 0,\\n      \\"Lyric\\": \\"\\",\\n      \\"SampleFormat\\": \\"\\",\\n      \\"SampleRate\\": 0,\\n      \\"Channels\\": 0,\\n      \\"ChannelLayout\\": \\"\\"\\n    }\\n  ],\\n  \\"Subtitles\\": [\\n    {\\n      \\"Index\\": 0,\\n      \\"Language\\": \\"\\",\\n      \\"CodecName\\": \\"\\",\\n      \\"CodecLongName\\": \\"\\",\\n      \\"CodecTagString\\": \\"\\",\\n      \\"CodecTag\\": \\"\\",\\n      \\"StartTime\\": 0,\\n      \\"Duration\\": 0,\\n      \\"Bitrate\\": 0,\\n      \\"Content\\": \\"\\",\\n      \\"Width\\": 0,\\n      \\"Height\\": 0\\n    }\\n  ],\\n  \\"StreamCount\\": 2,\\n  \\"ProgramCount\\": 2,\\n  \\"FormatName\\": \\"mov,mp4,m4a,3gp,3g2,mj2\\",\\n  \\"FormatLongName\\": \\"QuickTime / MOV\\",\\n  \\"Size\\": 25115517,\\n  \\"StartTime\\": 0,\\n  \\"Bitrate\\": 13164131,\\n  \\"Artist\\": \\"unable\\",\\n  \\"AlbumArtist\\": \\"unable\\",\\n  \\"Composer\\": \\"unable\\",\\n  \\"Performer\\": \\"unable\\",\\n  \\"Album\\": \\"unable\\",\\n  \\"Duration\\": 15.263,\\n  \\"ProduceTime\\": \\"2022-04-24T02:39:57Z\\",\\n  \\"LatLong\\": \\"+120.029003,+30.283095\\",\\n  \\"VideoWidth\\": 1080,\\n  \\"VideoHeight\\": 1920,\\n  \\"Addresses\\": [\\n    {\\n      \\"Language\\": \\"\\",\\n      \\"AddressLine\\": \\"\\",\\n      \\"Country\\": \\"\\",\\n      \\"Province\\": \\"\\",\\n      \\"City\\": \\"\\",\\n      \\"District\\": \\"\\",\\n      \\"Township\\": \\"\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '获取媒体文件元信息',
      'description' => '- **请确保在使用该接口前，已充分了解智能媒体管理产品的收费方式和[价格](~~88317~~)。**
- 调用该接口前，请确保当前Region已经存在可用的项目（Project），详见[项目管理](~~478152~~)。',
    ),
    'CreateVideoLabelClassificationTask' => 
    array (
      'summary' => '检测视频内容的场景、物体和事件标签信息。场景信息包括：自然景观、生活场景、灾难场景等大类；事件信息包括：才艺、办公、表演、生产等大类；物体信息包括：餐具、电子产品、家具、交通工具等大类。视频标签检测目前支持的标签种类包含三十多个分类、数千个标签。',
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
        'operationType' => 'create',
        'abilityTreeCode' => '157766',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREimmQZSDER',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ProjectName',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '项目名称',
            'description' => '项目名称，获取方式请参见[创建项目](~~478153~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'immtest',
          ),
        ),
        1 => 
        array (
          'name' => 'SourceURI',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'SourceURI',
            'description' => '视频的OSS URI。

OSS地址规则为oss://${Bucket}/${Object}，其中`${Bucket}`为和当前项目处于同一区域(Region)的OSS Bucket名称，`${Object}`为包含文件扩展名的文件完整路径。',
            'type' => 'string',
            'required' => true,
            'example' => 'oss://bucket1/object.mp4',
          ),
        ),
        2 => 
        array (
          'name' => 'UserData',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'UserData',
            'description' => '用户自定义信息，在异步消息通知中会为您返回，用于方便您系统内对消息通知进行关联处理。最大长度为2048字节。',
            'type' => 'string',
            'required' => false,
            'example' => '{
      "ID": "testuid",
      "Name": "test-user",
      "Avatar": "http://test.com/testuid"
}',
          ),
        ),
        3 => 
        array (
          'name' => 'Tags',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '自定义标签，用于对异步任务进行搜索、过滤。',
            'type' => 'object',
            'required' => false,
            'example' => '{"test":"val1"}',
          ),
        ),
        4 => 
        array (
          'name' => 'CredentialConfig',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '链式授权配置，非必填。更多信息，请参见[使用链式授权访问其他实体资源](~~465340~~)。',
            'required' => false,
            '$ref' => '#/components/schemas/CredentialConfig',
          ),
        ),
        5 => 
        array (
          'name' => 'Notification',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '消息通知配置，详细内容请单击Notification查看，异步通知消息格式请参见[异步通知消息格式](~~471456~~)。',
            'required' => false,
            '$ref' => '#/components/schemas/Notification',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => '图片检测结果',
            'description' => '创建视频标签检测任务的响应结构体。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => '请求唯一Id',
                'description' => '当次请求的Request ID。',
                'type' => 'string',
                'example' => 'CA995EFD-083D-4F40-BE8A-BDF75FFFE0B6',
              ),
              'EventId' => 
              array (
                'title' => '事件Id',
                'description' => '当次任务的Event ID。可使用[事件总线EventBridge](https://www.aliyun.com/product/aliware/eventbridge)服务查询该ID获取任务信息通知。',
                'type' => 'string',
                'example' => '03F-1Qt1Yn5RZZ0Zh3ZdYlDblv7****',
              ),
              'TaskId' => 
              array (
                'title' => '任务唯一ID',
                'description' => '当次任务的Task ID。可使用[GetTask](~~GetTask~~)接口查看任务信息或[GetVideoLabelClassificationResult](~~478224~~)接口获取视频标签检测任务的结果。',
                'type' => 'string',
                'example' => 'VideoLabelClassification-2f157087-91df-4fda-8c3e-232407ec*****',
              ),
            ),
          ),
        ),
        500 => 
        array (
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"CA995EFD-083D-4F40-BE8A-BDF75FFFE0B6\\",\\n  \\"EventId\\": \\"03F-1Qt1Yn5RZZ0Zh3ZdYlDblv7****\\",\\n  \\"TaskId\\": \\"VideoLabelClassification-2f157087-91df-4fda-8c3e-232407ec*****\\"\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '创建视频标签检测任务',
      'description' => '- **请确保在使用该接口前，已充分了解智能媒体管理产品的收费方式和[价格](~~477042~~)**。
- 在调用该接口前，请确保已在智能媒体管理上正确创建了项目（[Project](~~478273~~)），创建方式请参见[创建项目](~~478153~~)。
- 该接口的功能说明参见[视频标签检测](~~477189~~)。
- 该接口支持MP4、MPEG-TS、MKV、MOV、AVI、FLV、M3U8等多种视频格式。
- 该接口为异步接口，获取任务开始执行后，任务信息只保存7天，超过7天则无法再获取。调用[GetTask](~~478241~~)或[ListTasks](~~478242~~)接口获取返回的`TaskId`，查看任务信息。也可以通过设置[Notification](~~471456~~)消息通知参数，通过消息通知获取任务信息。',
    ),
    'GetVideoLabelClassificationResult' => 
    array (
      'summary' => '获取视频标签检测任务的结果。',
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
        'operationType' => 'get',
        'abilityTreeCode' => '157767',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREimmQZSDER',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ProjectName',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '项目名称',
            'description' => '项目名称，获取方式请参见[创建项目](~~478153~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'immtest',
          ),
        ),
        1 => 
        array (
          'name' => 'TaskType',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'TaskType',
            'description' => '任务类型。',
            'type' => 'string',
            'required' => true,
            'example' => 'VideoLabelClassification',
          ),
        ),
        2 => 
        array (
          'name' => 'TaskId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'TaskId',
            'description' => '任务ID，获取方式请参见[创建视频标签检测任务](~~478223~~)的返回参数。',
            'type' => 'string',
            'required' => true,
            'example' => 'VideoLabelClassification-2f157087-91df-4fda-8c3e-232407ec****',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => '图片检测结果',
            'description' => '视频标签检测结果。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => '请求唯一Id',
                'description' => '当次请求的Request ID。',
                'type' => 'string',
                'example' => '7F84C6D9-5AC0-49F9-914D-F02678E3****',
              ),
              'ProjectName' => 
              array (
                'title' => '项目名称',
                'description' => '项目名称。',
                'type' => 'string',
                'example' => 'immtest',
              ),
              'EventId' => 
              array (
                'title' => '事件Id',
                'description' => '事件ID。',
                'type' => 'string',
                'example' => '2F6-1Bz99Xi93EnRpNEyLudILJm****',
              ),
              'Status' => 
              array (
                'title' => '任务运行状态',
                'description' => '任务运行状态。',
                'type' => 'string',
                'example' => 'Succeeded',
              ),
              'Code' => 
              array (
                'title' => '任务错误码',
                'description' => '任务错误码。',
                'type' => 'string',
                'example' => 'ResourceNotFound',
              ),
              'Message' => 
              array (
                'title' => '任务错误消息',
                'description' => '任务错误消息。',
                'type' => 'string',
                'example' => 'The specified resource project is not found.',
              ),
              'StartTime' => 
              array (
                'title' => '任务开始时间',
                'description' => '任务开始时间。',
                'type' => 'string',
                'example' => '2021-12-24T03:00:38.892462383Z',
              ),
              'EndTime' => 
              array (
                'title' => '任务结束时间',
                'description' => '任务结束时间。',
                'type' => 'string',
                'example' => '2021-12-24T03:00:42.134971294Z',
              ),
              'UserData' => 
              array (
                'title' => '用户自定义信息',
                'description' => '用户自定义信息。',
                'type' => 'string',
                'example' => '{"ID": "user1","Name": "test-user1","Avatar": "http://example.com?id=user1"}',
              ),
              'TaskType' => 
              array (
                'title' => '任务类型',
                'description' => '任务类型。',
                'type' => 'string',
                'example' => 'VideoLabelClassification',
              ),
              'TaskId' => 
              array (
                'title' => '任务唯一ID',
                'description' => '任务ID。',
                'type' => 'string',
                'example' => 'VideoLabelClassification-2f157087-91df-4fda-8c3e-232407ec****',
              ),
              'Labels' => 
              array (
                'title' => '标签列表',
                'description' => '标签列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '标签信息。',
                  '$ref' => '#/components/schemas/Label',
                ),
              ),
            ),
          ),
        ),
        500 => 
        array (
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"7F84C6D9-5AC0-49F9-914D-F02678E3****\\",\\n  \\"ProjectName\\": \\"immtest\\",\\n  \\"EventId\\": \\"2F6-1Bz99Xi93EnRpNEyLudILJm****\\",\\n  \\"Status\\": \\"Succeeded\\",\\n  \\"Code\\": \\"ResourceNotFound\\",\\n  \\"Message\\": \\"The specified resource project is not found.\\",\\n  \\"StartTime\\": \\"2021-12-24T03:00:38.892462383Z\\",\\n  \\"EndTime\\": \\"2021-12-24T03:00:42.134971294Z\\",\\n  \\"UserData\\": \\"{\\\\\\"ID\\\\\\": \\\\\\"user1\\\\\\",\\\\\\"Name\\\\\\": \\\\\\"test-user1\\\\\\",\\\\\\"Avatar\\\\\\": \\\\\\"http://example.com?id=user1\\\\\\"}\\",\\n  \\"TaskType\\": \\"VideoLabelClassification\\",\\n  \\"TaskId\\": \\"VideoLabelClassification-2f157087-91df-4fda-8c3e-232407ec****\\",\\n  \\"Labels\\": [\\n    {\\n      \\"Language\\": \\"\\",\\n      \\"LabelName\\": \\"\\",\\n      \\"LabelLevel\\": 0,\\n      \\"LabelConfidence\\": 0,\\n      \\"ParentLabelName\\": \\"\\",\\n      \\"CentricScore\\": 0\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '获取视频标签检测任务',
      'description' => '- 在调用该接口前，请确保已在智能媒体管理上正确创建了项目（[Project](~~478273~~)），创建方式请参见[创建项目](~~478153~~)。
- 在调用该接口前，请确认已创建[视频标签检测任务](~~478223~~)，并获取该任务的`TaskId`。',
    ),
    'GenerateVideoPlaylist' => 
    array (
      'summary' => '创建边转边播播放列表能够将视频文件生成m3u8文件。生成播放列表后即时播放，并根据播放进度实施按需转码，相比离线转码能极大减少了转码等待时间并大幅度降低了转码和存储开销。',
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
      ),
      'operationType' => 'write',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'none',
        'abilityTreeCode' => '161492',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREimmCUOMK0',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ProjectName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '项目名称，获取方式请参见[创建项目](~~478153~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'immtest',
          ),
        ),
        1 => 
        array (
          'name' => 'UserData',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用户自定义信息，在异步消息通知中会返回，方便您在系统内对消息通知进行关联处理。最大长度为 2048 字节。',
            'type' => 'string',
            'required' => false,
            'example' => '{"ID": "user1","Name": "test-user1","Avatar": "http://example.com?id=user1"}',
          ),
        ),
        2 => 
        array (
          'name' => 'SourceURI',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '视频的OSS地址。

OSS 地址规则为oss://${Bucket}/${Object}，其中${Bucket}为和当前项目处于同一区域(Region)的 OSS Bucket 名称，${Object}为包含文件扩展名的文件完整路径。
> 只支持OSS标准存储Bucket。
> 不支持设置了防盗链白名单访问bucket。',
            'type' => 'string',
            'required' => true,
            'example' => 'oss://test-bucket/test-source-object/video.mp4',
          ),
        ),
        3 => 
        array (
          'name' => 'SourceStartTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '生成播放列表的起始时间点，单位为秒（s）。取值范围如下：

- 0（默认）或不填表示从源视频起始时间点开始。

- 大于0表示从源视频所设置的时间点开始。

>通过与参数**SourceDuration**一同设置可以对源视频的部分内容生成播放列表。',
            'type' => 'number',
            'format' => 'float',
            'required' => false,
            'example' => '0',
          ),
        ),
        4 => 
        array (
          'name' => 'SourceDuration',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '生成播放列表的持续时间。单位为秒（s），取值范围如下：

- 0（默认）或不填表示持续到源视频结尾。

- 大于0表示从生成播放列表的起始时间点持续所设置的时长。

> 当设定参数所对应的时间点超过源视频结尾时按默认值处理。',
            'type' => 'number',
            'format' => 'float',
            'required' => false,
            'example' => '0',
          ),
        ),
        5 => 
        array (
          'name' => 'SourceSubtitles',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '添加字幕列表，默认为空。最大支持2个。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '字幕信息。',
              'type' => 'object',
              'properties' => 
              array (
                'URI' => 
                array (
                  'description' => '被嵌入字幕的OSS地址。

OSS地址规则为oss://${Bucket}/${Object}，其中${Bucket}为和当前项目处于同一区域(Region)的OSS Bucket名称，${Object}为文件的完整路径。
> 参数**MasterURI**必须不为空，并且被嵌入字幕的OSS地址`oss://${Bucket}/${Object}`必须处于参数**MasterURI**所在目录或它的子目录。',
                  'type' => 'string',
                  'required' => true,
                  'example' => 'oss://test-bucket/test-object/subtitle/eng.vtt',
                ),
                'Language' => 
                array (
                  'description' => '字幕语言，参考标准为 ISO 639-2，默认为空。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'eng',
                ),
              ),
              'required' => false,
            ),
            'required' => false,
          ),
        ),
        6 => 
        array (
          'name' => 'MasterURI',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'Master Playlist的OSS地址。

OSS地址规则为oss://${Bucket}/${Object}，其中${Bucket}为和当前项目处于同一区域(Region)的OSS Bucket名称，${Object}为带".m3u8"后缀名的文件完整路径。
> 如果Playlist有字幕输入或有多Target输出，MasterURI为必填，并且字幕URI或Target URI必须处于MasterURI所在目录或子目录。',
            'type' => 'string',
            'required' => false,
            'example' => 'oss://test-bucket/test-object/master.m3u8',
          ),
        ),
        7 => 
        array (
          'name' => 'Targets',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '边转边播播放列表数组，数组长度最大为6。每个Target对应至多一个视频Media Playlist和一个或多个字幕Media Playlist
> 如果配置了大于一个Target，参数**MasterURI**必须不为空。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '边转边播任务详细信息。',
              'type' => 'object',
              'properties' => 
              array (
                'URI' => 
                array (
                  'description' => '边转边播输出文件的OSS地址前缀，输出文件包括m3u8文件和ts文件。

OSS地址规则为oss://${Bucket}/${Object}，其中${Bucket}为和当前项目处于同一地域的OSS Bucket名称，${Object}为不包含文件扩展名的文件完整路径前缀。

- 示例：URI为oss://test-bucket/test-object/output-video，则将产生一个oss://test-bucket/test-object/output-video.m3u8文件以及多个oss://test-bucket/test-object/output-video-${token}-${index}.ts文件，其中${token}为根据转码参数生成的唯一字符串，在API返回结果中包含了${token}参数。${index}为生成的从0开始编号的ts文件序号。

> 如果参数**MasterURI**不为空，URI地址必须处于参数**MasterURI**所在目录或它的子目录。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'oss://test-bucket/test-object/output-video',
                ),
                'Video' => 
                array (
                  'description' => '视频处理参数配置，空值（默认）表示禁用视频处理，输出ts文件中将不包含视频流。
> 同一Target内的Video和Subtitle字段互斥。如果设置了Video字段会忽略Subtile字段。',
                  'required' => false,
                  '$ref' => '#/components/schemas/TargetVideo',
                ),
                'Audio' => 
                array (
                  'description' => '音频处理参数配置，空值（默认）表示禁用音频处理，输出ts文件中将不包含音频流。
> 同一Target内的Audio和Subtitle字段互斥。如果设置了Audio字段会忽略Subtile字段。Audio和Video可以同时设置，Audio表示输出视频中的音频信息。也可以只设置Audio，只生成音频信息。',
                  'required' => false,
                  '$ref' => '#/components/schemas/TargetAudio',
                ),
                'Subtitle' => 
                array (
                  'description' => '字幕处理参数配置。
> 同一Target内的Subtile和Video或Audio字段互斥，只有单独设置Subtile才能生成字幕。',
                  'required' => false,
                  '$ref' => '#/components/schemas/TargetSubtitle',
                ),
                'TranscodeAhead' => 
                array (
                  'description' => '触发边转边播时向前转码的ts文件数量。默认向前转码2分钟时长的视频。

- 示例：**Duraiton**为10，则**TranscodeAhead**默认为12。您可以指定该参数控制异步向前转码的数量，取值范围为[10,30]。',
                  'type' => 'integer',
                  'format' => 'int32',
                  'required' => false,
                  'example' => '12',
                ),
                'Duration' => 
                array (
                  'description' => '单个ts文件的播放时长。单位为秒（s），默认为10，取值范围为[5,15]。',
                  'type' => 'number',
                  'format' => 'float',
                  'required' => false,
                  'example' => '10',
                ),
                'InitialTranscode' => 
                array (
                  'description' => '初始转码时长，单位为秒（s），默认值为30。

- 当所设置的时长为0时，不预装。
- 当所设置的时长小于0或超过源视频长度时，将初始转码整段视频。
- 当所设置的时长位于ts文件中间时，将持续转码到ts文件结束位置。

> 该参数主要用于加快视频初次播放的等待时间，提升播放体验。若您需要替换传统VOD业务场景则可尝试初始转码整段视频。',
                  'type' => 'number',
                  'format' => 'float',
                  'required' => false,
                  'example' => '30',
                ),
                'InitialSegments' => 
                array (
                  'description' => '初始转码ts文件时长数组，数组长度最大为6，默认为空，与参数**Duration**独立。',
                  'type' => 'array',
                  'items' => 
                  array (
                    'description' => '初始转码ts文件时长，取值范围为[1,**Duration**]，

- 示例：初始转码ts时长数组为`[2, 2, 4, 4, 8, 8]`，则序号为0的ts时长为2，序号为1的ts时长为2，序号为2的ts时长为4，序号为3的ts时长为4，序号为4的ts时长为8，序号为5的ts时长为8。
> 自定义更小的初始转码ts文件时长可以让视频加载更加流畅。',
                    'type' => 'number',
                    'format' => 'float',
                    'required' => false,
                    'example' => '[2, 2, 4, 4, 8, 8]',
                  ),
                  'required' => false,
                ),
                'Tags' => 
                array (
                  'description' => '为生成的ts文件添加OSS对象[标签](~~106678~~)。可以使用OSS标签来控制OSS文件的生命周期。
> 当前标签值与上一级中定义的Tags取并集作为当前Target的标签值。如有同名，取当前值。',
                  'type' => 'object',
                  'required' => false,
                  'additionalProperties' => 
                  array (
                    'type' => 'string',
                    'example' => '{\\"key1\\":\\"value1\\"}',
                    'description' => '标签值。',
                  ),
                ),
              ),
              'required' => false,
            ),
            'required' => true,
          ),
        ),
        8 => 
        array (
          'name' => 'Tags',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '为生成的ts文件添加OSS对象[标签](~~106678~~)。可以使用标签来控制OSS文件的生命周期。',
            'type' => 'object',
            'required' => false,
            'additionalProperties' => 
            array (
              'type' => 'string',
              'description' => '标签值。',
              'example' => '{"key1": "value1", "key2": "value2"}',
            ),
            'example' => '{"key1": "value1", "key2": "value2"}',
          ),
        ),
        9 => 
        array (
          'name' => 'CredentialConfig',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '链式授权配置，非必填。更多信息，请参见[使用链式授权访问其他实体资源](~~465340~~)。',
            'required' => false,
            '$ref' => '#/components/schemas/CredentialConfig',
          ),
        ),
        10 => 
        array (
          'name' => 'Notification',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '消息通知配置，详细内容请单击Notification查看，异步通知消息格式请参见[异步通知消息格式](~~471456~~)。',
            'required' => false,
            '$ref' => '#/components/schemas/Notification',
          ),
        ),
        11 => 
        array (
          'name' => 'OverwritePolicy',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '当Media Playlist存在时的覆盖策略，取值范围：

- overwrite（默认）：覆盖已经存在的Media Playlist。
- skip-existing：跳过生成，保留已经存在的Media Playlist。',
            'type' => 'string',
            'required' => false,
            'example' => 'overwrite',
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
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'CA995EFD-083D-4F40-BE8A-BDF75FFF*****',
              ),
              'Duration' => 
              array (
                'description' => '输出视频总时长。',
                'type' => 'number',
                'format' => 'float',
                'example' => '1082',
              ),
              'Token' => 
              array (
                'description' => 'Master Playlist的Token。',
                'type' => 'string',
                'example' => '92376fbb-171f-4259-913f-705f7ee0****',
              ),
              'MasterURI' => 
              array (
                'description' => 'Master Playlist的OSS地址。',
                'type' => 'string',
                'example' => 'oss://test-bucket/test-object/master.m3u8',
              ),
              'VideoPlaylist' => 
              array (
                'description' => '视频Media Playlist文件列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '视频Media Playlist文件信息。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Token' => 
                    array (
                      'description' => '视频Media Playlist生成的Token。可以使用该参数组装成ts文件生成的地址。
>  根据返回的Token值，可以拼接出转码生成的ts地址。拼接格式为：oss://${Bucket}/${Object}-${Token}-${Index}.ts，其中oss://${Bucket}/${Object}为输入参数的Target URI地址，${Token}为返回的参数，${Index}为ts的序号。',
                      'type' => 'string',
                      'example' => 'affe0c6042f09722fec95a21b8b******',
                    ),
                    'URI' => 
                    array (
                      'description' => '视频Media Playlist的OSS地址。',
                      'type' => 'string',
                      'example' => 'oss://test-bucket/test-object/output-video.m3u8',
                    ),
                    'Resolution' => 
                    array (
                      'description' => '视频分辨率。',
                      'type' => 'string',
                      'example' => '640x480',
                    ),
                    'FrameRate' => 
                    array (
                      'description' => '视频帧率。',
                      'type' => 'string',
                      'example' => '25/1',
                    ),
                  ),
                ),
              ),
              'AudioPlaylist' => 
              array (
                'description' => '音频Media Playlist文件列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '音频Media Playlist文件信息。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Token' => 
                    array (
                      'description' => '音频Media Playlist生成的Token。可以使用该参数组装成ts文件生成的地址。',
                      'type' => 'string',
                      'example' => 'affe0c6042f09722fec95a21b8b******',
                    ),
                    'URI' => 
                    array (
                      'description' => '音频Media Playlist的OSS地址。',
                      'type' => 'string',
                      'example' => 'oss://test-bucket/test-object/output-audio.m3u8',
                    ),
                    'Channels' => 
                    array (
                      'description' => '音频声道数量。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '1',
                    ),
                  ),
                ),
              ),
              'SubtitlePlaylist' => 
              array (
                'description' => '字幕Media Playlist文件列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '字幕Media Playlist文件信息。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Token' => 
                    array (
                      'description' => '字幕Media Playlist生成的Token。可以使用该参数组装成字幕文件生成的地址。
>  根据返回的Token值，可以拼接出转码生成的字幕文件地址。拼接格式为：oss://${Bucket}/${Object}-${Token}_${Index}.ts，其中oss://${Bucket}/${Object}为输入参数的Subtitle URI地址，${Token}为返回的参数，${Index}为字幕的序号。',
                      'type' => 'string',
                      'example' => 'affe0c6042f09722fec95a21b8b******',
                    ),
                    'URI' => 
                    array (
                      'description' => '字幕Media Playlist的OSS地址。',
                      'type' => 'string',
                      'example' => 'oss://test-bucket/test-object/output-subtitle.m3u8',
                    ),
                    'Language' => 
                    array (
                      'description' => '字幕流的语言。
> 语言来源于SourceURI源视频的字幕流信息。如果源视频不存在语言信息，返回空值。',
                      'type' => 'string',
                      'example' => 'eng',
                    ),
                    'Index' => 
                    array (
                      'description' => '字幕流编号，从0开始。',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"CA995EFD-083D-4F40-BE8A-BDF75FFF*****\\",\\n  \\"Duration\\": 1082,\\n  \\"Token\\": \\"92376fbb-171f-4259-913f-705f7ee0****\\",\\n  \\"MasterURI\\": \\"oss://test-bucket/test-object/master.m3u8\\",\\n  \\"VideoPlaylist\\": [\\n    {\\n      \\"Token\\": \\"affe0c6042f09722fec95a21b8b******\\",\\n      \\"URI\\": \\"oss://test-bucket/test-object/output-video.m3u8\\",\\n      \\"Resolution\\": \\"640x480\\",\\n      \\"FrameRate\\": \\"25/1\\"\\n    }\\n  ],\\n  \\"AudioPlaylist\\": [\\n    {\\n      \\"Token\\": \\"affe0c6042f09722fec95a21b8b******\\",\\n      \\"URI\\": \\"oss://test-bucket/test-object/output-audio.m3u8\\",\\n      \\"Channels\\": 1\\n    }\\n  ],\\n  \\"SubtitlePlaylist\\": [\\n    {\\n      \\"Token\\": \\"affe0c6042f09722fec95a21b8b******\\",\\n      \\"URI\\": \\"oss://test-bucket/test-object/output-subtitle.m3u8\\",\\n      \\"Language\\": \\"eng\\",\\n      \\"Index\\": 1\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '生成边转边播播放列表',
      'description' => '- **请确保在使用该接口前，已充分了解智能媒体管理产品的收费方式和[价格](~~88317~~)。**
- 调用该接口前，请确保当前Region已经存在可用的项目（Project），详见[项目管理](~~478152~~)。
- 使用该接口时，默认只处理一路视频/音频/字幕流，同时支持配置处理的视频/音频/字幕流数量。
- 该接口同时能支持生成Media playlist和Master playlist，请注意文档参数说明。
- 该接口为同步接口。播放或预转时才会触发同步或异步转码。可以通过设置[Notification](~~471456~~)消息通知参数，通过消息通知获取转码任务结果。
- 该接口的功能说明参见[边转边播](~~477192~~)。
- OSS的数据处理能力也提供了生成播放列表功能，但只提供生成Media Playlist且参数进行了简化。详情参见OSS数据处理能力[生成播放列表](~~2709281~~)。',
    ),
    'GenerateWebofficeToken' => 
    array (
      'summary' => '获取Weboffice访问凭证。Weboffice提供文档的在线协作功能，包括文档预览、文档编辑，多人协作等，支持协作记录，支持多版本，支持版本回滚等。',
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
      'operationType' => 'write',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'none',
        'abilityTreeCode' => '161499',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREimm4TQO1Z',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ProjectName',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '项目名称',
            'description' => '项目名称，获取方式请参见[创建项目](~~478153~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'test-project',
          ),
        ),
        1 => 
        array (
          'name' => 'SourceURI',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '预览编辑地址',
            'description' => '待预览或编辑文档的OSS地址。

OSS地址规则为`oss://${Bucket}/${Object}`，其中`Bucket`为和当前项目处于同一地域的OSS Bucket名称，`Object`为包含文件扩展名的文件完整路径。',
            'type' => 'string',
            'required' => true,
            'example' => 'oss://test-bucket/test-object.docx',
          ),
        ),
        2 => 
        array (
          'name' => 'Filename',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '文件名，必须带文件名后缀，默认是 SourceUri 的最后一级',
            'description' => '文件名称，必须包含文件扩展名。默认为参数**SourceURI**的最后一级。

支持的文件拓展名（其中PDF只支持预览）：

- 文字文档（Word）：doc、docx、txt、dot、wps、wpt、dotx、docm、dotm、rtf
- 演示文档（PPT）：ppt、pptx、pptm、ppsx、ppsm、pps、potx、potm、dpt、dps
- 表格文档（Excel）：et、xls、xlt、xlsx、xlsm、xltx、xltm、csv
- PDF 文档：pdf',
            'type' => 'string',
            'required' => false,
            'example' => 'test-Object.pptx',
          ),
        ),
        3 => 
        array (
          'name' => 'CachePreview',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '缓存预览标识',
            'description' => '缓存预览标识：

-  true：开启后，文档预览时将不再更新协同编辑内容，适用于仅预览的场景。
-  false：关闭时，默认采用协同预览，及预览时候可以同步更新协同编辑内容。

><notice>缓存预览和非缓存预览的单价不同，详情请查看计费项说明。></notice>',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true、false',
          ),
        ),
        4 => 
        array (
          'name' => 'Referer',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'oss 防盗链 referer',
            'description' => 'OSS防盗链。IMM需要从OSS中获取源文件，如果OSS进行了防盗链设置，IMM需要将对应的头部传给OSS才能获取源文件。
> 如果访问文档所在的Bucket设置了Referer，请设置此参数。',
            'type' => 'string',
            'required' => false,
            'example' => '*',
          ),
        ),
        5 => 
        array (
          'name' => 'UserData',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '用户自定义数据，在消息通知中返回',
            'description' => '用户自定义信息，在异步消息通知中会为您返回，用于方便您系统内对消息通知进行关联处理。最大长度为2048字节。',
            'type' => 'string',
            'required' => false,
            'example' => '{
      "id": "test-id",
      "name": "test-name"
}',
          ),
        ),
        6 => 
        array (
          'name' => 'PreviewPages',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '预览前几页',
            'description' => '限制只能预览前几页，默认不限制。最大不能超过5000',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '5',
          ),
        ),
        7 => 
        array (
          'name' => 'Password',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '文件密码',
            'description' => '文档的打开密码。
>如果需要预览或编辑有密码的文档，请设置此参数。',
            'type' => 'string',
            'required' => false,
            'example' => '123456',
          ),
        ),
        8 => 
        array (
          'name' => 'ExternalUploaded',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '是否支持外部上传',
            'description' => '是否支持直接上传文档到OSS。可取值如下：

- true：支持，上传的文档将覆盖原文档生成新版本。仅当文档处于关闭状态时才可上传，文档处于打开状态时，新的保存会覆盖掉上传的文件。
- false（默认）：不支持，上传文档是非预期行为，会返回错误。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        9 => 
        array (
          'name' => 'NotifyTopicName',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'mns 消息通知 topic',
            'description' => '支持将一些事件以 MNS 消息的方式通知给客户。该参数为 MNS 异步消息通知的 topic。',
            'type' => 'string',
            'required' => false,
            'example' => 'test-topic',
          ),
        ),
        10 => 
        array (
          'name' => 'Hidecmb',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '隐藏工具栏，预览模式下使用',
            'description' => '是否隐藏工具栏，文档预览模式下支持设置此参数。可取值如下：

- false（默认）：不隐藏工具栏。

- true：隐藏工具栏。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        11 => 
        array (
          'name' => 'Permission',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'title' => '权限',
            'description' => '用户权限信息，以JSON格式表示。

用户权限包括如下选项：

每个选项的类型均为Boolean，默认值均为false，可选值为true和false。

- Readonly（可选）：预览模式。

- Rename（可选）：重命名文件权限，只提供消息通知功能，重命名事件会发送到MNS中。

- History（可选）：查看历史版本的权限。

- Copy（可选）：拷贝权限。

- Export（可选）：导出PDF权限。

- Print（可选）：打印权限。


>PDF仅支持预览功能，因此必须将” Readonly“参数设置为true。
>

> 若要使用多版本功能，必须先在OSS中开通多版本功能，然后将 ”History“参数设置为true。
>',
            'required' => false,
            '$ref' => '#/components/schemas/WebofficePermission',
          ),
        ),
        12 => 
        array (
          'name' => 'User',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'title' => '用户',
            'description' => '用户信息。可以传业务的用户信息，WebOffice页面会进行显示，如无特殊要求可填入"Unknown"。如果不传入此字段，用户信息会默认显示为“Unknown”。',
            'required' => false,
            '$ref' => '#/components/schemas/WebofficeUser',
          ),
        ),
        13 => 
        array (
          'name' => 'Watermark',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'title' => '水印',
            'description' => '水印信息。该水印在前端生成，并没有写入到源文档中，同一个文档传入不同的参数会得到不同的水印。',
            'required' => false,
            '$ref' => '#/components/schemas/WebofficeWatermark',
          ),
        ),
        14 => 
        array (
          'name' => 'CredentialConfig',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '链式授权配置，非必填。更多信息，请参见[使用链式授权访问其他实体资源](~~465340~~)。',
            'required' => false,
            '$ref' => '#/components/schemas/CredentialConfig',
          ),
        ),
        15 => 
        array (
          'name' => 'Notification',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => 'Notification 消息通知配置，详细内容请单击Notification查看，异步通知消息格式请参见[异步通知消息格式](~~471456~~)。

> 文件保存和文件重命名时会有消息通知。',
            'required' => false,
            '$ref' => '#/components/schemas/Notification',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => '文档转换任务',
            'description' => 'Weboffice 访问凭证。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => '请求 id',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '1759315A-CB33-0A75-A72B-62D7********',
              ),
              'WebofficeURL' => 
              array (
                'title' => '预览编辑地址',
                'description' => 'Weboffice 入口 URL。在线预览或者编辑文档。
> 无法通过浏览器直接打开，需要配合Weboffice JS-SDK，和访问凭证（AccessToken）一起才可以预览或编辑文档。更多信息，请参见[快速入门](~~468066~~)。',
                'type' => 'string',
                'example' => 'https://office-cn-shanghai.imm.aliyuncs.com/office/s/dd221b2cdb44fb66e9070d1d70a8b9bbb6d6fff7?_w_tokentype=1',
              ),
              'AccessToken' => 
              array (
                'title' => 'access token',
                'description' => 'Weboffice 访问凭证。',
                'type' => 'string',
                'example' => '2d73dd5d87524c5e8a194c3eb5********',
              ),
              'RefreshToken' => 
              array (
                'title' => 'refresh token',
                'description' => 'Weboffice 刷新凭证。',
                'type' => 'string',
                'example' => 'e374995ec532432bb678074d36********',
              ),
              'AccessTokenExpiredTime' => 
              array (
                'title' => 'access token 过期时间',
                'description' => '访问凭证的过期时间。过期时间30分钟。',
                'type' => 'string',
                'example' => '2021-08-30T13:13:11.347146982Z',
              ),
              'RefreshTokenExpiredTime' => 
              array (
                'title' => 'refresh token 过期时间',
                'description' => '刷新凭证的过期时间。过期时间 1 天。',
                'type' => 'string',
                'example' => '2021-08-31T12:43:11.347146982Z',
              ),
            ),
          ),
        ),
        500 => 
        array (
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"1759315A-CB33-0A75-A72B-62D7********\\",\\n  \\"WebofficeURL\\": \\"https://office-cn-shanghai.imm.aliyuncs.com/office/s/dd221b2cdb44fb66e9070d1d70a8b9bbb6d6fff7?_w_tokentype=1\\",\\n  \\"AccessToken\\": \\"2d73dd5d87524c5e8a194c3eb5********\\",\\n  \\"RefreshToken\\": \\"e374995ec532432bb678074d36********\\",\\n  \\"AccessTokenExpiredTime\\": \\"2021-08-30T13:13:11.347146982Z\\",\\n  \\"RefreshTokenExpiredTime\\": \\"2021-08-31T12:43:11.347146982Z\\"\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '获取Weboffice凭证',
      'description' => '- **请确保在使用该接口前，已充分了解智能媒体管理产品的收费方式和[价格](~~477042~~)**。

- 访问凭证过期时间为30分钟，刷新凭证过期时间为1天。
- 返回的过期时间为UTC时间，和北京时间有8小时的时差。
- 支持的输入文件格式：
    - 文字文档（Word）：doc、docx、txt、dot、wps、wpt、dotx、docm、dotm、rtf。
    - 演示文档（PPT）：ppt、pptx、pptm、ppsx、ppsm、pps、potx、potm、dpt、dps。
    - 表格文档（Excel）：et、xls、xlt、xlsx、xlsm、xltx、xltm、csv
    - PDF 文档：pdf。
- 支持最大的文件200MB。
- 支持最大的文档页数 5000 页。
- 2023-12-01之前创建的项目，按照文档打开次数计费。当前按照API接口调用次数计费。如需切换成新的计费模式，创建新的项目即可，但需要注意，一次API调用只能给一个用户使用，若重复使用，则只有最后一个用户可以正常访问，其余用户的访问权限将被回收。
>PDF仅支持预览功能，因此必须将” Readonly“参数设置为true。
>

> 若要使用多版本功能，必须先在OSS中开通多版本功能，然后将 ”History“参数设置为true。
>',
      'responseParamsDescription' => '**常见错误**

ProjectName对应的项目未找到，请到新版本IMM控制台检查地域下该项目是否存在。
```
{
    "Code": "ResourceNotFound",
    "Message": "The specified resource acs:imm::xxx:project/xxx is not found"
}
```

User参数是必填参数，请检查该参数是否填写。
```
{
    "Code": "InvalidArgument.User",
    "Message": "The parameter User is required but not provided"
}
```

User参数不正确，请检查该参数值是否是正确的JSON格式。
```
{
    "Code": "InvalidJSON parsing error, User",
    "Message": "Specified parameter JSON parsing error, User is not valid."
}
```

Permission参数不正确，请检查该参数值是否是正确的JSON格式。
```
{
    "Code": "InvalidJSON parsing error, Permission",
    "Message": "Specified parameter JSON parsing error, Permission is not valid."
}
```

Watermark参数不正确，请检查该参数值是否是正确的JSON格式。
```
{
    "Code": "InvalidJSON parsing error, Watermark",
    "Message": "Specified parameter JSON parsing error, Watermark is not valid."
}
```

PreviewPages参数格式不正确，请检查PreviewPages参数值。
``` 
{
    "Code": "InvalidPreviewPages",
    "Message": "Specified parameter PreviewPages is not valid."
}
```

SourceURI对应的OSS文件不存在，请检查Bucket下该文件是否存在。
```
{
    "Code": "ResourceNotFound",
    "Message": "The specified resource oss://xx is not found"
}
```',
      'extraInfo' => '###  相关文档   
  - 关于OSS多版本的介绍，请参见[OSS版本控制概述](https://help.aliyun.com/zh/oss/user-guide/overview-78?spm=a2c4g.11186623.0.0.29d91d94zxAKSU)',
    ),
    'RefreshWebofficeToken' => 
    array (
      'summary' => '刷新Weboffice访问凭证。Weboffice访问凭证有效期是30分钟，过期会失效，无法继续访问Weboffice。如果要继续访问Weboffice，可以使用这个接口刷新Weboffice访问凭证，即获取一个新的凭证，新的凭证过期时间也是30分钟。',
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
      'operationType' => 'write',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'none',
        'abilityTreeCode' => '39679',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREimm4TQO1Z',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ProjectName',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '项目名称',
            'description' => '项目名称，获取方式请参见[创建项目](~~478153~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'test-project',
          ),
        ),
        1 => 
        array (
          'name' => 'AccessToken',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'access token',
            'description' => 'Weboffice 访问凭证。通过[GenerateWebofficeToken](~~478226~~)接口或者[RefreshWebofficeToken](~~478227~~)接口获取。',
            'type' => 'string',
            'required' => true,
            'example' => '99d1b8b478b641c1b3372f5bd6********',
          ),
        ),
        2 => 
        array (
          'name' => 'RefreshToken',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'refresh token',
            'description' => 'Weboffice 刷新凭证。通过[GenerateWebofficeToken](~~478226~~)接口或者[RefreshWebofficeToken](~~478227~~)接口获取。',
            'type' => 'string',
            'required' => true,
            'example' => 'a730ae0d7c6a487d87c661d199********',
          ),
        ),
        3 => 
        array (
          'name' => 'CredentialConfig',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '链式授权配置，非必填。更多信息，请参见[使用链式授权访问其他实体资源](~~465340~~)。',
            'required' => false,
            '$ref' => '#/components/schemas/CredentialConfig',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => '文档转换任务',
            'description' => 'Weboffice 访问凭证',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => '请求 Id',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '501339F9-4B70-0CE2-AB8C-866C********',
              ),
              'RefreshToken' => 
              array (
                'title' => 'refresh token',
                'description' => 'Weboffice 刷新凭证。',
                'type' => 'string',
                'example' => '72a52ab3702a4123ab5594671a********',
              ),
              'AccessToken' => 
              array (
                'title' => 'access token',
                'description' => 'Weboffice 访问凭证。',
                'type' => 'string',
                'example' => '4996466c690a4902846ce00f96********',
              ),
              'RefreshTokenExpiredTime' => 
              array (
                'title' => 'refresh token 过期时间',
                'description' => '刷新凭证的过期时间。过期时间 1 天。',
                'type' => 'string',
                'example' => '2021-09-01T12:37:28.950065359Z',
              ),
              'AccessTokenExpiredTime' => 
              array (
                'title' => 'access token 过期时间',
                'description' => '访问凭证的过期时间。过期时间30分钟。',
                'type' => 'string',
                'example' => '2021-08-31T13:07:28.950065359Z',
              ),
            ),
          ),
        ),
        500 => 
        array (
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"501339F9-4B70-0CE2-AB8C-866C********\\",\\n  \\"RefreshToken\\": \\"72a52ab3702a4123ab5594671a********\\",\\n  \\"AccessToken\\": \\"4996466c690a4902846ce00f96********\\",\\n  \\"RefreshTokenExpiredTime\\": \\"2021-09-01T12:37:28.950065359Z\\",\\n  \\"AccessTokenExpiredTime\\": \\"2021-08-31T13:07:28.950065359Z\\"\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '刷新Weboffice凭证',
      'description' => '**请确保在使用该接口前，已充分了解智能媒体管理产品的收费方式和[价格](~~477042~~)**。

- 访问凭证过期时间为 30 分钟，刷新凭证过期时间为 1 天。
- 返回的过期时间为 UTC 时间，和北京时间有 8 小时的时差。',
    ),
    'CreateOfficeConversionTask' => 
    array (
      'summary' => '创建文档转换任务。支持文档格式转换，将存储在对象存储中的文档（Word、PPT、Excel、PDF）转成图片，文本，或者PDF。',
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
      'operationType' => 'write',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'create',
        'abilityTreeCode' => '129600',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREimmV2RAAA',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ProjectName',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '项目名称',
            'description' => '项目名称，获取方式请参见[创建项目](~~478153~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'test-project',
          ),
        ),
        1 => 
        array (
          'name' => 'SourceURI',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '文档转换输入文件地址',
            'description' => '源数据的存储地址。

OSS地址规则为oss://${Bucket}/${Object}，其中`${Bucket}`为和当前项目处于同一区域(Region)的OSS Bucket名称，`${Object}`为包含文件扩展名的文件完整路径。',
            'type' => 'string',
            'required' => true,
            'example' => 'oss://test-bucket/test-object',
          ),
        ),
        2 => 
        array (
          'name' => 'TargetURI',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '文档转换输出地址模式',
            'description' => '文档转换输出地址模板。

地址规则为`oss://{bucket}/{tags.custom}/{dirname}/{barename}.{autoext}`。更多信息，请参见[TargetURI模板](~~465762~~)。

> 和 TargetURIPrefix 二者至少需要填一个。',
            'type' => 'string',
            'required' => false,
            'example' => 'oss://{bucket}/{tags.custom}/{dirname}/{barename}.{autoext}',
          ),
        ),
        3 => 
        array (
          'name' => 'TargetURIPrefix',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '文档转换输出文件地址前缀',
            'description' => '文档转换后输出文件的存储地址前缀。

规则为oss://${Bucket}/，其中`${Bucket}`为和当前项目处于同一区域(Region)的OSS Bucket名称。

> 和 TargetURI 二者至少需要填一个。',
            'type' => 'string',
            'required' => false,
            'example' => 'oss://test-bucket/',
          ),
        ),
        4 => 
        array (
          'name' => 'SourceType',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '输入文件格式，默认使用文件名后缀小写格式',
            'description' => '源数据的后缀类型。默认根据OSS对象的后缀名确定源数据的类型。当OSS对象没有后缀名时，可以设置此参数，可选值如下。

- 文字文档（Word）：doc、docx、wps、wpss、docm、dotm、dot、dotx、html

- 演示文档（PPT）：pptx、ppt、pot、potx、pps、ppsx、dps、dpt、pptm、potm、ppsm、dpss

- 表格文档（Excel）：xls、xlt、et、ett、xlsx、xltx、csv、xlsb、xlsm、xltm、ets

- PDF文档：pdf',
            'type' => 'string',
            'required' => false,
            'example' => 'doc',
          ),
        ),
        5 => 
        array (
          'name' => 'TargetType',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '输出文件格式',
            'description' => '转换输出的目标文件类型。包括如下选项：

- png：转换为PNG格式的图片文件。
- jpg：转换为JPG格式的图片文件。
- pdf：转换为PDF文件。
- txt：转换为只包含文本内容的文件，主要用于提取文件的文本内容。源数据类型只支持演示文档、文字文档和表格文档。表格文档转换结果生成一个txt文件，sheet相关的变量设置不生效。',
            'type' => 'string',
            'required' => true,
            'example' => 'png',
          ),
        ),
        6 => 
        array (
          'name' => 'UserData',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '用户自定义数据，在消息通知中返回',
            'description' => '用户自定义信息，在异步消息通知中会为您返回，用于方便您系统内对消息通知进行关联处理。最大长度为2048字节。',
            'type' => 'string',
            'required' => false,
            'example' => '{
      "id": "test-id",
      "name": "test-name"
}',
          ),
        ),
        7 => 
        array (
          'name' => 'Tags',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'title' => '用户自定义标签',
            'description' => '自定义标签信息，字典格式。用于搜索任务。',
            'type' => 'object',
            'required' => false,
            'example' => '{
      "key": "value"
}',
          ),
        ),
        8 => 
        array (
          'name' => 'StartPage',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '转换起始页，从 1 开始，包含起始页，默认从第一页开始转换，表格转图片时需要指定 SheetIndex 才有效',
            'description' => '文档转换的起始页，默认值为1。
>如果源文件为表格文档需要指定工作表页码（SheetIndex）。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1',
          ),
        ),
        9 => 
        array (
          'name' => 'EndPage',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '转换终止页，包含终止页，默认转换到最后一页，表格转图片时需要指定 SheetIndex 才有效',
            'description' => '文档转换的结束页，默认值为-1，表示转换所有页。
>- 如果源文件为表格文档需要指定工作表页码（SheetIndex）。
>- 如果页码太多，建议分批转换，否则可能会导致转换超时。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '-1',
          ),
        ),
        10 => 
        array (
          'name' => 'Password',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '文档密码',
            'description' => '文档的打开密码。如果需要转换有密码的文档，请设置此参数。',
            'type' => 'string',
            'required' => false,
            'example' => '123456',
          ),
        ),
        11 => 
        array (
          'name' => 'ScalePercentage',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '缩放参数，允许范围 20~200，100代表不缩放，小于100表示缩小，大于100表示放大，默认不缩放',
            'description' => '文档缩放比例，取值范围为20~200，默认值为100，表示不缩放。
> 小于100表示缩小，大于100表示放大。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '100',
          ),
        ),
        12 => 
        array (
          'name' => 'Quality',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '质量参数，范围是0-100，越大质量越好，默认系统自动选择适合的分辨率',
            'description' => '转换文件的质量，取值范围为0（质量最差，性能最好）~100（质量最好，性能最差）。默认情况下，系统会根据文档内容，在质量和性能中权衡，设置合适的值。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '60',
          ),
        ),
        13 => 
        array (
          'name' => 'Pages',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '指定转换页码，优先级高于 StartPage/EndPage，格式：多个页码用 “," 拼接，连续页码用 "-" 连接，样例参考: 1,2-4,7',
            'description' => '指定转换页码。优先级高于参数StartPage和参数EndPage。格式如下：

- 多个页码用半角逗号（,）隔开，例如1,2。

- 连续页码用短划线（-）连接，例如1,2-4,7。',
            'type' => 'string',
            'required' => false,
            'example' => '1,2-4,7',
          ),
        ),
        14 => 
        array (
          'name' => 'MaxSheetRow',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '表格转图片的最大行数，在 LongPicture 为 true 时生效，默认转所有行',
            'description' => '表格文档转换为图片的最大行数，默认转换所有行。
>当参数**LongPicture**取值为`true`时，此参数生效。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '10',
          ),
        ),
        15 => 
        array (
          'name' => 'MaxSheetColumn',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '表格转图片的最大列数，在 LongPicture 为 true 时生效，默认转所有列',
            'description' => '表格文档转换为图片的最大列数，默认转换所有列。
>当参数**LongPicture**取值为`true`时，此参数生效。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '10',
          ),
        ),
        16 => 
        array (
          'name' => 'SheetCount',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '表格转图片参数，指定转换表格中的 sheet 数量，默认转换所有 sheet',
            'description' => '表格文档中转换为图片的工作表（sheet）的数量，默认转换所有工作表。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1',
          ),
        ),
        17 => 
        array (
          'name' => 'SheetIndex',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '表格转图片参数，指定转换哪一个 sheet，从 1 开始，默认从起始页开始转',
            'description' => '表格文档中转换为图片的工作表（sheet）的页码，取值范围为1~最后一个sheet页。默认转换起始页为1。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1',
          ),
        ),
        18 => 
        array (
          'name' => 'FitToWidth',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '表格转图片参数，是否将所有列输出到一张图片，默认为否',
            'description' => '表格文档转换为图片或者PDF文件时，是否将所有列输出到一张图片或者PDF页面。取值范围如下：

- false（默认）：否。输出成多张图片，多张PDF页面。

- true：是。输出成一张图片，一张PDF页面。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        19 => 
        array (
          'name' => 'FitToHeight',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '表格转图片参数，是否将所有行输出到一张图片，默认为否',
            'description' => '表格文档转换为图片或者PDF文件时，是否将所有行输出到一张图片或者PDF页面。取值范围如下：

- false（默认）：否。输出成多张图片，多张PDF页面。

- true：是。输出成一张图片，一张PDF页面。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        20 => 
        array (
          'name' => 'FirstPage',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '表格转图片参数，是否只返回表格的第一张图片，默认为否',
            'description' => '表格文档转换为图片时，是否只返回转换结果的第一张图片（图片包含的行数和列数为自动切割的结果）。取值范围如下：

- false（默认）：否。返回所有图片。

- true：是。只返回第一张图片（提取缩略图）。

>仅当参数**LongPicture**取值为`true`时，此参数生效。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        21 => 
        array (
          'name' => 'PaperSize',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '表格转图片纸张大小，支持 A4/A2/A0，默认A4，配合 FitToHeight 或 FitToWidth 一起使用才有效',
            'description' => '表格文档转换为图片时的纸张大小（输出图片可以类比为在纸张上面打印）。取值范围如下：

- A0

- A2

- A4（默认）

> 需配合参数**FitToHeight**和参数**FitToWidth**一起使用，此参数才能生效。',
            'type' => 'string',
            'required' => false,
            'example' => 'A4',
          ),
        ),
        22 => 
        array (
          'name' => 'PaperHorizontal',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '表格转图片纸张是否水平放置，默认为否',
            'description' => '表格文档转换为图片时纸张是否水平放置（输出图片可以类比为在纸张上面打印）。取值范围如下：

- false（默认）：否。垂直放置。

- true：是。水平放置。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        23 => 
        array (
          'name' => 'TrimPolicy',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'title' => '表格瘦身',
            'description' => '表格文档转换的瘦身策略。比如表格中有很多没有内容的行列，在没有瘦身策略的情况下，可能会输出很多空白。',
            'required' => false,
            '$ref' => '#/components/schemas/TrimPolicy',
          ),
        ),
        24 => 
        array (
          'name' => 'ShowComments',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '文字转图片，是否显示批注，目前只支持文字转图片时携带批注，默认不显示批注',
            'description' => '文字文档转换为图片时，是否显示批注。取值范围如下：

- false（默认）：否。不显示批注。

- true：是。显示批注。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        25 => 
        array (
          'name' => 'LongPicture',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '转图片时是否转换成一张长图，最多支持将 20 页合成一张长图，超过可能报错，默认为不转成长图',
            'description' => '文档转换为图片时是否转换为一张长图。取值范围如下：

- false（默认）：否。转换成多张图。

- true：是。转换成一张长图。

> 最多支持将20页文档合成一张长图，超过该页数的转换任务可能会报错。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        26 => 
        array (
          'name' => 'ImageDPI',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '输出图片 DPI，允许范围 96-600，默认 96',
            'description' => '输出图片DPI，取值范围为96~600，默认值为96。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '96',
          ),
        ),
        27 => 
        array (
          'name' => 'LongText',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '转文本时是否转换成长文本，默认每页是个独立的文本',
            'description' => '文档转换为文本时是否转换为长文本文件。取值范围如下：

- false（默认）：否。每页文档转换为独立的文本文件。

- true：是。所有内容都放到一个文本文件中。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        28 => 
        array (
          'name' => 'HoldLineFeed',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '转文本时是否保留文档中的换行符，默认不保留',
            'description' => '文档转换为文本时是否保留文档中的换行符。取值范围如下：

- false（默认）：否。不保留换行符。

- true：是。保留换行符。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        29 => 
        array (
          'name' => 'CredentialConfig',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '链式授权配置，非必填。更多信息，请参见[使用链式授权访问其他实体资源](~~465340~~)。',
            'required' => false,
            '$ref' => '#/components/schemas/CredentialConfig',
          ),
        ),
        30 => 
        array (
          'name' => 'Notification',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '消息通知配置，详细内容请单击Notification查看，异步通知消息格式请参见[异步通知消息格式](~~471456~~)。',
            'required' => false,
            '$ref' => '#/components/schemas/Notification',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => '文档转换任务',
            'description' => '异步任务响应。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => '请求 id',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'FF3B7D81-66AE-47E0-BF69-157DCF18*****',
              ),
              'TaskId' => 
              array (
                'title' => '任务 id',
                'description' => '任务ID。',
                'type' => 'string',
                'example' => 'formatconvert-00bec802-073a-4b61-ba3b-39bc2fdd*****',
              ),
              'EventId' => 
              array (
                'description' => '事件ID。',
                'type' => 'string',
                'example' => '2C2-1I0EG57VR37J4rQ8oKG6C9*****',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"FF3B7D81-66AE-47E0-BF69-157DCF18*****\\",\\n  \\"TaskId\\": \\"formatconvert-00bec802-073a-4b61-ba3b-39bc2fdd*****\\",\\n  \\"EventId\\": \\"2C2-1I0EG57VR37J4rQ8oKG6C9*****\\"\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '创建文档转换任务',
      'description' => '- **请确保在使用该接口前，已充分了解智能媒体管理产品的收费方式和[价格](~~477042~~)**
- 支持的输入文件格式：
    - 文字文档（Word）：doc、docx、wps、wpss、docm、dotm、dot、dotx、html。
    - 演示文档（PPT）：pptx、ppt、pot、potx、pps、ppsx、dps、dpt、pptm、potm、ppsm、dpss。
    - 表格文档（Excel）：xls、xlt、et、ett、xlsx、xltx、csv、xlsb、xlsm、xltm、ets。
    - PDF 文档：pdf。
- 支持的输出文件格式：
    - 图片：png、jpg。
    - 文本：txt。
    - PDF：pdf。
- 单文件大小限制200MB以内。
- 支持最长的转换时间120秒，如果文件比较大或者文件内容本身比较复杂，可能会导致转换超时。

- 任务开始执行后，任务信息只保存7天，超过7天则无法再获取。您可以通过以下几种方式及时获取任务信息：
    - 调用[GetTask](~~GetTask~~)或[ListTasks](~~ListTasks~~)接口获取返回的`TaskId`，查看任务信息。
    - 在与智能媒体管理相同的地域下开通MNS服务，并配置订阅关系，及时获取任务信息通知，异步通知消息格式请参见[异步通知消息格式](~~471456~~)。关于MNS SDK的更多信息，请参见[接收和删除消息](~~32449~~)。
    - 在与智能媒体管理相同的地域下开通RocketMQ服务，并创建RocketMQ 4.0实例、Topic、Group，及时获取任务信息通知，异步通知消息格式请参见[异步通知消息格式](~~471456~~)。关于RocketMQ使用的更多信息，请参见[快速使用HTTP协议的SDK收发普通消息](https://help.aliyun.com/document_detail/169009.html)。
    - 在与智能媒体管理相同的地域下开通并接入[事件总线EventBridge](https://www.aliyun.com/product/aliware/eventbridge)服务，及时获取任务信息通知。更多信息，请参见[智能媒体管理IMM事件](~~205730~~)。',
    ),
    'ExtractDocumentText' => 
    array (
      'summary' => '提取文档文件正文中的文本。',
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
        'operationType' => 'none',
        'abilityTreeCode' => '173181',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREimmMBRC1J',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ProjectName',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '项目名称',
            'description' => '项目名称，获取方式请参见[创建项目](~~477051~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'immtest',
          ),
        ),
        1 => 
        array (
          'name' => 'SourceURI',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '文档转换输入文件地址',
            'description' => '源数据的存储地址。

OSS地址规则为oss://${Bucket}/${Object}，其中`${Bucket}`为和当前项目处于同一区域(Region)的OSS Bucket名称，`${Object}`为包含文件扩展名的文件完整路径。',
            'type' => 'string',
            'required' => true,
            'example' => 'oss://test-bucket/test-object',
          ),
        ),
        2 => 
        array (
          'name' => 'SourceType',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '输入文件格式，默认使用文件名后缀小写格式',
            'description' => '源数据的后缀类型。默认根据输入对象的后缀名确定源数据的类型。当输入对象没有后缀名时，可以设置此参数，可选值如下。

- 文字文档（Word）：doc、docx、wps、wpss、docm、dotm、dot、dotx、html
- 演示文档（PPT）：pptx、ppt、pot、potx、pps、ppsx、dps、dpt、pptm、potm、ppsm、dpss
- 表格文档（Excel）：xls、xlt、et、ett、xlsx、xltx、csv、xlsb、xlsm、xltm、ets
- PDF文档：pdf',
            'type' => 'string',
            'required' => false,
            'example' => 'docx',
          ),
        ),
        3 => 
        array (
          'name' => 'CredentialConfig',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'title' => '授权配置',
            'description' => '链式授权配置，非必填。更多信息，请参见[使用链式授权访问其他实体资源](~~465340~~)。',
            'required' => false,
            '$ref' => '#/components/schemas/CredentialConfig',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => '图片裁剪结果',
            'description' => '响应体结构。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => '请求唯一ID',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '94D6F994-E298-037E-8E8B-0090F27*****',
              ),
              'DocumentText' => 
              array (
                'title' => '文档的文本正文内容',
                'description' => '文档的文本正文内容。',
                'type' => 'string',
                'example' => '测试内容。',
              ),
            ),
          ),
        ),
        500 => 
        array (
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"94D6F994-E298-037E-8E8B-0090F27*****\\",\\n  \\"DocumentText\\": \\"测试内容。\\"\\n}","type":"json"}]',
      'title' => '文档正文提取',
      'description' => '- **请确保在使用该接口前，已充分了解智能媒体管理产品的收费方式和[价格](~~88317~~)。**

- 调用该接口前，请确保当前Region已经存在可用的项目（[Project](~~478273~~)），详见[项目管理](~~478152~~)。

- 支持常见的Word、Excel、PPT、PDF、TXT文档。

- 文件大小最大不超过200 MB。提取后的纯文本文件大小不超过2 MB（约合60万中文字）。

><notice>当文档格式较为复杂，或正文量过大时，可能出现超时错误。在此类场景建议使用 [CreateOfficeConversionTask](478228) 接口，并将输出格式指定为 txt 来实现类似功能。></notice>',
    ),
    'CreateFileCompressionTask' => 
    array (
      'summary' => '文件压缩任务可以将您的多个文件，打包为zip等压缩包。您提交任务后会异步打包文件，将结果存储到指定位置。在打包时支持对文件进行重命名操作，您可以自定义文件打包规则以及输出的压缩包名称。',
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
      'operationType' => 'write',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'create',
        'abilityTreeCode' => '156182',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREimmSETH07',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ProjectName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '项目名称，获取方式请参见[创建项目](~~478153~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'test-project',
          ),
        ),
        1 => 
        array (
          'name' => 'Sources',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '待压缩的文件列表和打包规则描述。


> 与参数SourceManifestURI二选一。Sources支持最多100条打包规则，超长请使用参数SourceManifestURI。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '待打包的文件的OSS地址和对应的打包规则描述。',
              'type' => 'object',
              'properties' => 
              array (
                'URI' => 
                array (
                  'description' => '待压缩的目录或文件的OSS地址。

OSS地址规则为oss://${Bucket}/${Object}，其中`${Bucket}`为和当前项目处于同一区域(Region)的OSS Bucket名称，`${Object}` 说明如下：

- 压缩目录时，`${Object}`为目录名称。

- 压缩文件时，`${Object}`为包含文件扩展名的文件完整路径。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'oss://test-bucket/test-object',
                ),
                'Alias' => 
                array (
                  'description' => '重定向待压缩文件在压缩包中的文件路径或重命名文件。

- 不填写该参数。保留源目录结构进行压缩，例如源文件地址为`oss://test-bucket/test-dir/test-object.doc`，则压缩包中文件路径为`/test-dir/test-object.doc`。

- 重命名文件。重命名压缩包中的文件名称，例如源文件地址为`oss://test-bucket/test-object.jpg`，指定参数**Alias**为`test-rename-object.jpg`，则压缩包中文件名称为`test-rename-object.jpg`。

- 重新指定源文件在压缩包中的文件路径。例如源目录地址为`oss://test-bucket/test-dir/`，指定参数**Alias**为`/new-dir/`，则源目录下所有文件都会被压缩到路径`/new-dir/`中。

- 指定为`/`，去除源目录结构。

>请避免在重命名过程中出现重名文件的情况，出现此情况时压缩包内的重名文件可能无法解压（取决于您使用的解压程序）。',
                  'type' => 'string',
                  'required' => false,
                  'example' => '/new-dir/',
                ),
                'Mode' => 
                array (
                  'description' => '指定打包规则的匹配模式，包括`prefix`（表示前缀模式）和`fullname`（表示精准匹配），默认为`prefix`。

+ `prefix`：前缀模式，解析该条打包规则时，前缀模式匹配所有符合规则的文件。
+ `fullname`：精准匹配，按照规则精准匹配文件，只会匹配到一个文件。',
                  'type' => 'string',
                  'required' => false,
                  'enumValueTitles' => 
                  array (
                    'prefix' => 'prefix',
                    'fullname' => 'fullname',
                  ),
                  'example' => 'fullname',
                ),
              ),
              'required' => false,
            ),
            'required' => false,
          ),
        ),
        2 => 
        array (
          'name' => 'CredentialConfig',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '链式授权配置，非必填。更多信息，请参见[使用链式授权访问其他实体资源](~~465340~~)。',
            'required' => false,
            '$ref' => '#/components/schemas/CredentialConfig',
          ),
        ),
        3 => 
        array (
          'name' => 'SourceManifestURI',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '文件清单存储的地址。文件清单将Sources结构以JSON格式存储在OSS上，适用于打包文件较多的情况。

> 与参数`Sources`二选一。其中`URI`参数必填，`Alias`参数选填，该文件内部结构示例：
```
[{"URI":"oss://<bucket>/<object>", "Alias":"/new-dir/new-name"}]
```',
            'type' => 'string',
            'required' => false,
            'example' => 'oss://test-bucket/test-object.json',
          ),
        ),
        4 => 
        array (
          'name' => 'TargetURI',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '输出文件的OSS地址。压缩文件将以该路径中的文件名称命名，例如`name.zip`。

OSS地址规则为oss://${Bucket}/${Object}，其中`${Bucket}`为和当前项目处于同一区域(Region)的OSS Bucket名称，`${Object}`为包含文件扩展名的文件完整路径。',
            'type' => 'string',
            'required' => true,
            'example' => 'oss://test-bucket/test-target-object.zip',
          ),
        ),
        5 => 
        array (
          'name' => 'CompressedFormat',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '文件打包压缩类型，默认值为zip。

> 目前仅支持zip格式。',
            'type' => 'string',
            'required' => false,
            'enumValueTitles' => 
            array (
            ),
            'example' => 'zip',
          ),
        ),
        6 => 
        array (
          'name' => 'UserData',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用户自定义信息，在异步消息通知中会为您返回，方便您系统内对消息通知进行关联处理。最大长度为2048字节。',
            'type' => 'string',
            'required' => false,
            'example' => 'test-data',
          ),
        ),
        7 => 
        array (
          'name' => 'Notification',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '消息通知配置，详细内容请单击Notification查看，异步通知消息格式请参见[异步通知消息格式](~~471456~~)。',
            'required' => false,
            '$ref' => '#/components/schemas/Notification',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => '响应结构体',
            'description' => '响应结构体',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => '请求 ID',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'EC564A9A-BA5C-4499-A087-D9B9E76E*****',
              ),
              'EventId' => 
              array (
                'description' => '事件ID。',
                'type' => 'string',
                'example' => '0ED-1Bz8z71k5TtsUejT4UJ16Es*****',
              ),
              'TaskId' => 
              array (
                'description' => '任务ID。',
                'type' => 'string',
                'example' => 'FileCompression-3579a380-6f7a-4a9d-b9d2-65996*****',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"EC564A9A-BA5C-4499-A087-D9B9E76E*****\\",\\n  \\"EventId\\": \\"0ED-1Bz8z71k5TtsUejT4UJ16Es*****\\",\\n  \\"TaskId\\": \\"FileCompression-3579a380-6f7a-4a9d-b9d2-65996*****\\"\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '创建文件压缩任务',
      'description' => '> 接口公测中，如有任何使用问题，请使用钉钉搜索钉钉群号 31690030817 加入钉钉群进行反馈。
* **请确保在使用该接口前，已充分了解智能媒体管理产品的收费方式和[价格](~~477042~~)**。

* 文件数量限制：最多支持打包8万个文件。

* 文件大小限制：打包压缩前所有文件大小不超过200 GB。

* 该功能支持OSS上的标准存储类型文件，如需要打包压缩其他类型文件，请先[转化文件的存储类型](~~90090~~)。

*  该接口为异步接口，获取任务开始执行后，任务信息只保存7天，超过7天则无法再获取。调用[GetTask](~~GetTask~~)或[ListTasks](~~ListTasks~~)接口获取返回的`TaskId`，查看任务信息。也可以通过设置[Notification](~~611278~~)消息通知参数，通过消息通知获取任务信息。',
      'requestParamsDescription' => '#### 典型场景中打包规则举例

对于如下示例的文件结构，对一些经典的场景示例说明：

```
（bucket）
├── test-dir1
│   ├── file1.txt
│   ├── file2.doc
│   ├── file3.png
│   └── my-file.json
└── test-dir2
    ├── AAA
    │   └── file.txt
    ├── AAA
    ├── file6.doc
    ├── file7.doc
    └── file8.doc
```

##### 对指定文件夹进行打包

打包`test-dir1`下的所有文件打包到指定目录`test-dir`中，打包规则：

```json
[
    {
        "URI"   : "oss://bucket/test-dir1/",
        "Alias" : "/test-dir/"
    }
]
```

生成的压缩包结构为：

```
.
└── test-dir
    ├── file1.txt
    ├── file2.doc
    ├── file3.png
    └── my-file.json
```

##### 对指定前缀进行打包

打包前缀为`test-dir1/file`下的所有文件打包到指定目录`test-dir`中，打包规则：

```json
[
    {
        "URI"   : "oss://bucket/test-dir1/file",
        "Alias" : "/test-dir/"
    }
]
```

生成的压缩包结构为：

```
.
└── test-dir
    ├── file1.txt
    ├── file2.doc
    └── file3.png
```

注意，如果使用前缀模式进行打包，会将同名的文件夹/文件同时打包进压缩包，例如：

```json
[
    {
        "URI"   : "oss://bucket/test-dir2/AAA",
        "Alias" : "/AAA/"
    }
]
```

生成的压缩包结构为：

```
.
└── AAA
    ├── AAA
    └── file.txt
```

##### 对指定的文件进行打包

如果不想使用前缀模式，可以通过设置`mode`参数准确的打包指定的文件：

```json
[
    {
        "URI"   : "oss://bucket/test-dir2/AAA",
        "Alias" : "AAA",
        "mode"  : "fullname",
    },
    {
        "URI"   : "oss://bucket/test-dir1/",
        "Alias" : "/test-dir1/",
        "mode"  : "fullname",
    }
]
```

生成的压缩包结构为：

```
.
├── AAA
└── test-dir1
```',
    ),
    'CreateArchiveFileInspectionTask' => 
    array (
      'summary' => '创建压缩包预览解析任务支持获取压缩包内的文件列表信息。该功能无需解压压缩包，就可以获取压缩包内的文件列表信息。',
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
      'operationType' => 'write',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'create',
        'abilityTreeCode' => '157951',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREimm2Z44LQ',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ProjectName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '项目名称，获取方式请参见[创建项目](~~478153~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'test-project',
          ),
        ),
        1 => 
        array (
          'name' => 'CredentialConfig',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '链式授权配置，非必填。更多信息，请参见[使用链式授权访问其他实体资源](~~465340~~)。',
            'required' => false,
            '$ref' => '#/components/schemas/CredentialConfig',
          ),
        ),
        2 => 
        array (
          'name' => 'Password',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '文件压缩密码。文件压缩时如果加密压缩时，查看压缩包内信息需要提供压缩密码。',
            'type' => 'string',
            'required' => false,
            'example' => '123456',
          ),
        ),
        3 => 
        array (
          'name' => 'UserData',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用户自定义信息，在异步消息通知中会为您返回，方便您系统内对消息通知进行关联处理。最大长度为2048字节。',
            'type' => 'string',
            'required' => false,
            'example' => 'test-data',
          ),
        ),
        4 => 
        array (
          'name' => 'SourceURI',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '压缩文件存放的位置。

OSS地址规则为oss://${Bucket}/${Object}，其中`${Bucket}`为和当前项目处于同一区域(Region)的OSS Bucket名称，`${Object}`为包含文件扩展名的文件完整路径。',
            'type' => 'string',
            'required' => false,
            'example' => 'oss://bucket/test-object.zip',
          ),
        ),
        5 => 
        array (
          'name' => 'Notification',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '消息通知配置，详细内容请单击Notification查看，异步通知消息格式请参见[异步通知消息格式](~~471456~~)。',
            'deprecated' => false,
            'required' => false,
            '$ref' => '#/components/schemas/Notification',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => '响应结构体',
            'description' => '响应结构体',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => '请求 ID',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'EC564A9A-BA5C-4499-A087-D9B9E76E*****',
              ),
              'EventId' => 
              array (
                'description' => '事件ID。',
                'type' => 'string',
                'example' => '0ED-1Bz8z71k5TtsUejT4UJ16Es*****',
              ),
              'TaskId' => 
              array (
                'description' => '任务ID。',
                'type' => 'string',
                'example' => 'ArchiveFileInspection-8475218e-d86e-4c66-b3cf-50e74d6c****',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"EC564A9A-BA5C-4499-A087-D9B9E76E*****\\",\\n  \\"EventId\\": \\"0ED-1Bz8z71k5TtsUejT4UJ16Es*****\\",\\n  \\"TaskId\\": \\"ArchiveFileInspection-8475218e-d86e-4c66-b3cf-50e74d6c****\\"\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '创建压缩包预览解析任务',
      'description' => '> 接口公测中，如有任何使用问题，请使用钉钉搜索钉钉群号 31690030817 加入钉钉群进行反馈。
* **请确保在使用该接口前，已充分了解智能媒体管理产品的收费方式和[价格](~~477042~~)**。

* 文件数量限制：最多支持包含8万个文件的压缩包。

* 文件大小限制：zip和rar格式最多支持200 GB，7z格式最多支持50 GB。

*  该接口为异步接口，获取任务开始执行后，任务信息只保存7天，超过7天则无法再获取。调用[GetTask](~~GetTask~~)或[ListTasks](~~ListTasks~~)接口获取返回的`TaskId`，查看任务信息。也可以通过设置[Notification](~~611278~~)消息通知参数，通过消息通知获取任务信息。',
      'requestParamsDescription' => '* 创建压缩包预览解析任务请设置`Notification`中的`ExtendedMessageURI`参数，用于获取压缩包内文件列表信息。生成的打包文件列表信息如下所示：

```json
{
  "Password" : "压缩包的密码",
  "IsEncryption": "true/false, 压缩包是否加密",
  "ArchiveFiles": [
    {
      "PathName": "文件相对于压缩包的路径，例如./test-dir/test.txt",
      "Reason": "如果预览失败，该文件预览失败的原因",
      "IsFolder": "true/false，该文件是否是文件夹",
      "PackedSize": "压缩包内文件大小",
      "UnPackedSize": "解压后文件大小",
      "FileAccessTime": "文件时间信息",
    },
    {
      "PathName": "./test-dir/",
      "Reason": "",
      "IsFolder": "true",
      "PackedSize": "0",
      "UnPackedSize": "0",
      "FileAccessTime": "2023-07-21T09:46:35Z",
    },
  ]
}
```',
    ),
    'CreateFileUncompressionTask' => 
    array (
      'summary' => '创建解压缩任务可以将您压缩包内的指定文件解压缩到特定位置，也可以将压缩包完整解压。目前支持的压缩格式包括Zip、RAR和7z。',
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
      'operationType' => 'write',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'create',
        'abilityTreeCode' => '157566',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREimm2Z44LQ',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ProjectName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '项目名称，获取方式请参见[创建项目](~~478153~~)。',
            'type' => 'string',
            'required' => true,
            'example' => ' test-project',
          ),
        ),
        1 => 
        array (
          'name' => 'CredentialConfig',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '链式授权配置，非必填。更多信息，请参见[使用链式授权访问其他实体资源](~~465340~~)。',
            'required' => false,
            '$ref' => '#/components/schemas/CredentialConfig',
          ),
        ),
        2 => 
        array (
          'name' => 'Password',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '压缩包加密的密码。',
            'type' => 'string',
            'required' => false,
            'example' => '123456',
          ),
        ),
        3 => 
        array (
          'name' => 'UserData',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用户自定义信息，在异步消息通知中会为您返回，方便您系统内对消息通知进行关联处理。最大长度为2048字节。',
            'type' => 'string',
            'required' => false,
            'example' => 'test-data',
          ),
        ),
        4 => 
        array (
          'name' => 'SelectedFiles',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '需要解压的文件列表，该参数为空时表示解压整个压缩包。默认为空。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '需要解压的文件名，相对压缩包根目录的路径值。',
              'type' => 'string',
              'required' => false,
              'example' => 'test-dir/test.jpg',
            ),
            'required' => false,
          ),
        ),
        5 => 
        array (
          'name' => 'SourceURI',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '压缩文件存放的OSS地址。

OSS地址规则为oss://${Bucket}/${Object}，其中`${Bucket}`为和当前项目处于同一区域(Region)的OSS Bucket名称，`${Object}`为包含文件扩展名的文件完整路径。',
            'type' => 'string',
            'required' => true,
            'example' => 'oss://test-bucket/test-object.zip',
          ),
        ),
        6 => 
        array (
          'name' => 'Notification',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '消息通知配置，详细内容请单击Notification查看，异步通知消息格式请参见[异步通知消息格式](~~471456~~)。',
            'required' => false,
            '$ref' => '#/components/schemas/Notification',
          ),
        ),
        7 => 
        array (
          'name' => 'TargetURI',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '解压文件的目标OSS地址。被选中的文件或压缩包会解压到该地址下。

OSS地址规则为oss://${Bucket}/${Object}，其中`${Bucket}`为和当前项目处于同一区域(Region)的OSS Bucket名称，`${Object}`为包含文件扩展名的文件完整路径。',
            'type' => 'string',
            'required' => false,
            'example' => 'oss://test-bucket/test-dir/',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => '响应结构体',
            'description' => '响应结构体',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => '请求 ID',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'EC564A9A-BA5C-4499-A087-D9B9E76E*****',
              ),
              'EventId' => 
              array (
                'description' => '事件ID。',
                'type' => 'string',
                'example' => '0ED-1Bz8z71k5TtsUejT4UJ16Es*****',
              ),
              'TaskId' => 
              array (
                'description' => '任务ID。',
                'type' => 'string',
                'example' => 'FileUncompression-16ab5dd6-af02-480e-9ed7-a8d51b1*****',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"EC564A9A-BA5C-4499-A087-D9B9E76E*****\\",\\n  \\"EventId\\": \\"0ED-1Bz8z71k5TtsUejT4UJ16Es*****\\",\\n  \\"TaskId\\": \\"FileUncompression-16ab5dd6-af02-480e-9ed7-a8d51b1*****\\"\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '创建解压缩任务',
      'description' => '> 接口公测中，如有任何使用问题，请使用钉钉搜索钉钉群号 31690030817 加入钉钉群进行反馈。
* **请确保在使用该接口前，已充分了解智能媒体管理产品的收费方式和[价格](~~477042~~)**。

* 文件数量限制：最多支持打包8万个文件。

* 文件大小限制：zip和rar格式最多支持200 GB，7z格式最多支持50 GB。

* 文件解压缩任务的处理方式为流式解压，在处理的过程中边解压边输出文件。如果在解压过程中有部分文件损坏导致解压操作中止，已解压生成的文件不会被删除。

*  该接口为异步接口，获取任务开始执行后，任务信息只保存7天，超过7天则无法再获取。调用[GetTask](~~GetTask~~)或[ListTasks](~~ListTasks~~)接口获取返回的`TaskId`，查看任务信息。也可以通过设置[Notification](~~611278~~)消息通知参数，通过消息通知获取任务信息。',
      'requestParamsDescription' => '创建解压缩任务请如果需要获取具体解压信息，请设置`Notification`中的`ExtendedMessageURI`参数。该文件中包含的信息结构如下所示：

```json
{
  "Password" : "压缩包的密码",
  "IsEncryption": "true/false, 压缩包是否加密",
  "ArchiveFiles": [
    {
      "URI": "解压后的文件地址，例oss://test-bucket/test-dir/test.txt",
      "PathName": "文件相对于压缩包的路径，例如./test.txt",
      "Reason": "如果预览失败，该文件预览失败的原因",
      "IsFolder": "true/false，该文件是否是文件夹",
      "PackedSize": "压缩包内文件大小",
      "UnPackedSize": "解压后文件大小",
      "FileAccessTime": "文件时间信息",
    },
    {
      "URI": "oss://test-bucket/test-dir/text.doc",
      "PathName": "./text.doc",
      "Reason": "",
      "IsFolder": "true",
      "PackedSize": "102",
      "UnPackedSize": "150",
      "FileAccessTime": "2023-07-21T09:46:35Z",
    },
  ]
}
```',
    ),
    'CreateCompressPointCloudTask' => 
    array (
      'summary' => '点云压缩功能可以将OSS中的点云数据进行压缩处理，减少网络数据传输。',
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
        'operationType' => 'create',
        'abilityTreeCode' => '145992',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREimm0H0W4Y',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ProjectName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '项目名称，获取方式请参见[创建项目](~~478153~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'test-project',
          ),
        ),
        1 => 
        array (
          'name' => 'SourceURI',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'A short description of struct',
            'description' => '点云文件的OSS地址。

OSS地址规则为oss://${Bucket}/${Object}，其中`${Bucket}`为和当前项目处于同一区域(Region)的OSS Bucket名称，`${Object}`为包含文件扩展名的文件完整路径。',
            'type' => 'string',
            'required' => true,
            'example' => 'oss://test/src/test.pcd',
          ),
        ),
        2 => 
        array (
          'name' => 'TargetURI',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '压缩后输出文件的OSS地址。

OSS地址规则为oss://${Bucket}/${Object}，其中`${Bucket}`为和当前项目处于同一区域(Region)的OSS Bucket名称，`${Object}`为包含文件扩展名的文件完整路径。',
            'type' => 'string',
            'required' => true,
            'example' => 'oss://test/tgt',
          ),
        ),
        3 => 
        array (
          'name' => 'PointCloudFileFormat',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '点云文件格式。当前只支持PCD格式，默认值为pcd。',
            'type' => 'string',
            'required' => false,
            'example' => 'pcd',
            'default' => 'pcd',
            'enum' => 
            array (
              0 => 'pcd',
            ),
          ),
        ),
        4 => 
        array (
          'name' => 'CompressMethod',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '压缩算法名称。取值如下：

- octree：八叉树

- kdtree：K-d树',
            'type' => 'string',
            'required' => true,
            'example' => 'octree',
            'enum' => 
            array (
              0 => 'octree',
              1 => 'kdtree',
            ),
          ),
        ),
        5 => 
        array (
          'name' => 'PointCloudFields',
          'in' => 'query',
          'allowEmptyValue' => false,
          'style' => 'json',
          'schema' => 
          array (
            'description' => '参与压缩的PCD属性字段以及压缩顺序，压缩完成后以此顺序进行解压数据。

- 若采用PCL库Octree压缩，则支持\\["xyz"]

- 若采用Draco库Kdtree压缩，则支持\\["xyz"]或者\\["xyz", "intensity"]',
            'type' => 'array',
            'items' => 
            array (
              'description' => '参与压缩的PCD属性字段值。可选参数为：

- xyz

- intensity',
              'type' => 'string',
              'required' => false,
              'example' => '["xyz"]',
            ),
            'required' => true,
          ),
        ),
        6 => 
        array (
          'name' => 'KdtreeOption',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => 'Kdtree压缩参数。',
            'required' => false,
            '$ref' => '#/components/schemas/KdtreeOption',
          ),
        ),
        7 => 
        array (
          'name' => 'OctreeOption',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => 'Octree压缩参数。',
            'required' => false,
            '$ref' => '#/components/schemas/OctreeOption',
          ),
        ),
        8 => 
        array (
          'name' => 'UserData',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用户自定义信息，在异步消息通知中会为您返回，方便您系统内对消息通知进行关联处理。最大长度为2048字节。',
            'type' => 'string',
            'required' => false,
            'example' => '{"ID": "user1","Name": "test-user1","Avatar": "http://example.com?id=user1"}',
          ),
        ),
        9 => 
        array (
          'name' => 'Tags',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '自定义标签，用于对异步任务进行搜索、过滤。',
            'type' => 'object',
            'required' => false,
            'example' => '{"LabelKey": "Value"}',
          ),
        ),
        10 => 
        array (
          'name' => 'CredentialConfig',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '链式授权配置，非必填。更多信息，请参见[使用链式授权访问其他实体资源](~~465340~~)。',
            'required' => false,
            '$ref' => '#/components/schemas/CredentialConfig',
          ),
        ),
        11 => 
        array (
          'name' => 'Notification',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '消息通知配置，详细内容请单击Notification查看，异步通知消息格式请参见[异步通知消息格式](~~471456~~)。',
            'required' => false,
            '$ref' => '#/components/schemas/Notification',
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
                'example' => 'CA995EFD-083D-4F40-BE8A-BDF75FFF****',
              ),
              'TaskId' => 
              array (
                'description' => '任务ID。',
                'type' => 'string',
                'example' => 'PointCloudCompress-badda57d-a3ab-4e6d-938f-49b77ce****',
              ),
              'EventId' => 
              array (
                'description' => '事件ID。',
                'type' => 'string',
                'example' => '0B7-1LR4Wcue1aBhk2xT85MfL*****',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"CA995EFD-083D-4F40-BE8A-BDF75FFF****\\",\\n  \\"TaskId\\": \\"PointCloudCompress-badda57d-a3ab-4e6d-938f-49b77ce****\\",\\n  \\"EventId\\": \\"0B7-1LR4Wcue1aBhk2xT85MfL*****\\"\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '创建点云压缩任务',
      'description' => '* **请确保在使用该接口前，已充分了解智能媒体管理产品的收费方式和[价格](~~477042~~)**。

* 文件格式限制：当前仅支持PCD格式的点云文件。

*  该接口为异步接口，获取任务开始执行后，任务信息只保存7天，超过7天则无法再获取。调用[GetTask](~~GetTask~~)或[ListTasks](~~ListTasks~~)接口获取返回的`TaskId`，查看任务信息。也可以通过设置[Notification](~~611278~~)消息通知参数，通过消息通知获取任务信息。',
    ),
    'DetectTextAnomaly' => 
    array (
      'summary' => '检测指定文本内容中是否包含色情、广告、灌水、涉政、辱骂等违规信息。',
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
      'systemTags' => 
      array (
        'operationType' => 'none',
        'abilityTreeCode' => '130698',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREimmUCA5MV',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ProjectName',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '项目名称',
            'description' => '项目名称，获取方式请参见[创建项目](~~478153~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'immtest',
          ),
        ),
        1 => 
        array (
          'name' => 'Content',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '待检测文本，最长10,000个字符（包含标点），只支持检测中文文本。',
            'type' => 'string',
            'required' => true,
            'example' => 'content',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => '响应结构体',
            'description' => '响应结构体',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'RequestId',
                'description' => '当次请求的Request ID。',
                'type' => 'string',
                'example' => '91AC8C98-0F36-49D2-8290-742E24DF*****',
              ),
              'Suggestion' => 
              array (
                'description' => '文本内容是否合规。返回值如下：

- pass：合规。

- block：不合规。
',
                'type' => 'string',
                'enumValueTitles' => 
                array (
                  'pass' => '合规',
                  'block' => '不合规',
                ),
                'example' => 'pass',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"91AC8C98-0F36-49D2-8290-742E24DF*****\\",\\n  \\"Suggestion\\": \\"pass\\"\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '文本合规检测',
      'description' => '- **请确保在使用该接口前，已充分了解智能媒体管理产品的收费方式和[价格](~~477042~~)**。
> 文本合规检测只支持识别中文。',
    ),
    'CreateImageModerationTask' => 
    array (
      'summary' => '检测图片内容是否合规。包括色情内容、暴恐涉政、不良场景、logo、图文违规这几种检测场景。',
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
        'operationType' => 'create',
        'abilityTreeCode' => '130695',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREimmRIZXZT',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ProjectName',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '项目名称',
            'description' => '项目名称，获取方式请参见[创建项目](~~478153~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'test-project',
          ),
        ),
        1 => 
        array (
          'name' => 'UserData',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用户自定义信息，在异步消息通知中会为您返回，方便您系统内对消息通知进行关联处理。最大长度为2048字节。',
            'type' => 'string',
            'required' => false,
            'example' => 'test-data',
          ),
        ),
        2 => 
        array (
          'name' => 'SourceURI',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '图片的OSS地址。

OSS地址规则为`oss://<Bucket>/<Object>`，其中`<Bucket>`为和当前项目处于同一地域(Region)的OSS Bucket名称，`<Object>`为包含文件扩展名的文件完整路径。',
            'type' => 'string',
            'required' => true,
            'example' => 'oss://test-bucket/test-object',
          ),
        ),
        3 => 
        array (
          'name' => 'Tags',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '自定义标签，用于对异步任务进行搜索、过滤。',
            'type' => 'object',
            'required' => false,
            'example' => '{
      "User": "Jane"
}',
          ),
        ),
        4 => 
        array (
          'name' => 'CredentialConfig',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '链式授权配置，非必填。更多信息，请参见[使用链式授权访问其他实体资源](~~465340~~)。',
            'required' => false,
            '$ref' => '#/components/schemas/CredentialConfig',
          ),
        ),
        5 => 
        array (
          'name' => 'Scenes',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '图片检测场景。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '指定图片检测场景，取值如下：
- porn：智能鉴黄。
 
- terrorism：暴恐涉政。
 
- live：不良场景。
 
- logo：logo。
 
- ad：图文违规。
> 如果不指定检测场景，则默认进行`porn`、`terrorism`、`ad`三个场景检测。',
              'type' => 'string',
              'required' => false,
              'enumValueTitles' => 
              array (
                'ad' => '图文违规',
                'terrorism' => '暴恐涉政',
                'logo' => '包含logo',
                'live' => '不良场景',
                'porn' => '鉴黄',
              ),
              'example' => 'porn',
            ),
            'required' => false,
          ),
        ),
        6 => 
        array (
          'name' => 'Interval',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '截帧频率，GIF图、长图检测专用。默认值为1。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '2',
          ),
        ),
        7 => 
        array (
          'name' => 'MaxFrames',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '最大截帧数量，GIF图、长图检测专用，默认值为1。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '10',
          ),
        ),
        8 => 
        array (
          'name' => 'Notification',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '消息通知配置，详细内容请单击Notification查看，异步通知消息格式请参见[异步通知消息格式](~~471456~~)。',
            'required' => false,
            '$ref' => '#/components/schemas/Notification',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => '响应结构体',
            'description' => '响应结构体。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'RequestId',
                'description' => '当次请求的Request ID。',
                'type' => 'string',
                'example' => '1B3D5E0A-D8B8-4DA0-8127-ED32C851****',
              ),
              'TaskId' => 
              array (
                'description' => '任务ID。',
                'type' => 'string',
                'example' => 'ImageModeration-179ef4f8-d583-4f0c-a293-7c0889c*****',
              ),
              'EventId' => 
              array (
                'description' => '事件ID。',
                'type' => 'string',
                'example' => '2E6-1I0FGn0zFnl5AflRfhzClma*****',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"1B3D5E0A-D8B8-4DA0-8127-ED32C851****\\",\\n  \\"TaskId\\": \\"ImageModeration-179ef4f8-d583-4f0c-a293-7c0889c*****\\",\\n  \\"EventId\\": \\"2E6-1I0FGn0zFnl5AflRfhzClma*****\\"\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '创建图片合规检测任务',
      'description' => '* **请确保在使用该接口前，已充分了解智能媒体管理产品的收费方式和[价格](~~477042~~)。**
* 检测结果通过异步消息通知返回。异步消息通知Suggestion字段取值范围：
  - pass：通过，未检测到不合规内容。
  - block：检测到不合规内容，Categories字段为不合规分类，分类详情请参见内容安全检测结果。
  - review：需要人工二次审核，人工审核完成后会再发一条异步消息通知告知人工审核结果。
* 图片要求：
  - 图片链接支持以下协议：HTTP和HTTPS。
  - 图片支持以下格式：PNG、JPG、JPEG、BMP、GIF、WEBP。
  - 图片大小限制为20 MB以内（适用于同步和异步调用），高度或者宽度不能超过30,000像素（px），且图像总像素不超过2.5亿（px）。其中，GIF格式的图片，图像总像素不超过4,194,304（px），高度或者宽度不能超过30,000像素（px）。
  - 图片下载时间限制为3秒内，如果下载时间超过3秒，返回下载超时。
  - 图片像素建议不低于256*256（px），像素过低可能会影响识别效果。
  - 图片检测接口的响应时间依赖图片的下载时间。请保证被检测图片所在的存储服务稳定可靠，建议您使用阿里云OSS存储或者CDN缓存等。
* 该接口为异步接口，获取任务开始执行后，任务信息只保存7天，超过7天则无法再获取。调用[GetTask](~~GetTask~~)或[ListTasks](~~ListTasks~~)接口获取返回的`TaskId`，查看任务信息。也可以通过设置[Notification](~~611278~~)消息通知参数，通过消息通知获取任务信息。
> 异步消息通知Suggestion字段取值范围：
> - pass：通过，未检测到不合规内容。
> - block：检测到不合规内容，Categories字段为不合规分类，分类详情请参见内容安全检测结果。
> - review：需要人工二次审核，人工审核完成后会再发一条异步消息通知告知人工审核结果。',
    ),
    'CreateVideoModerationTask' => 
    array (
      'summary' => '检测视频中的风险或违规内容，具体包括以下场景：视频智能鉴黄、视频暴恐涉政、视频图文违规、视频不良场景、视频logo。',
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
        'operationType' => 'create',
        'abilityTreeCode' => '130694',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREimmO3TV2W',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ProjectName',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '项目名称',
            'description' => '项目名称，获取方式请参见[创建项目](~~478153~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'immtest',
          ),
        ),
        1 => 
        array (
          'name' => 'UserData',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用户自定义信息，在异步消息通知中会为您返回，用于方便您系统内对消息通知进行关联处理。最大长度为2048字节。',
            'type' => 'string',
            'required' => false,
            'example' => '{"ID": "user1","Name": "test-user1","Avatar": "http://example.com?id=user1"}',
          ),
        ),
        2 => 
        array (
          'name' => 'SourceURI',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '视频的OSS地址。

OSS地址规则为oss://${Bucket}/${Object}，其中`${Bucket}`为和当前项目处于同一区域(Region)的OSS Bucket名称，`${Object}`为包含文件扩展名的文件完整路径。',
            'type' => 'string',
            'required' => true,
            'example' => 'oss://test-bucket/test-object',
          ),
        ),
        3 => 
        array (
          'name' => 'Tags',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '自定义标签信息，用于搜索任务。',
            'type' => 'object',
            'required' => false,
            'example' => '{"test": "val1"}',
          ),
        ),
        4 => 
        array (
          'name' => 'CredentialConfig',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '链式授权配置，非必填。更多信息，请参见[使用链式授权访问其他实体资源](~~465340~~)。',
            'required' => false,
            '$ref' => '#/components/schemas/CredentialConfig',
          ),
        ),
        5 => 
        array (
          'name' => 'Scenes',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '视频检测场景。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '指定视频检测场景。取值如下：

- porn：视频智能鉴黄。

- terrorism：视频暴恐涉政。

- live：视频不良场景。

- logo：视频logo。

- ad：视频图文违规。

> 如果不指定视频检测场景，则默认进行`porn`、`terrorism`、`ad`三个场景检测。',
              'type' => 'string',
              'required' => false,
              'enumValueTitles' => 
              array (
                'ad' => '视频图文违规',
                'terrorism' => '视频暴恐涉政',
                'logo' => '视频logo',
                'live' => '视频不良场景',
                'porn' => '视频智能鉴黄',
              ),
              'example' => 'porn',
            ),
            'required' => false,
          ),
        ),
        6 => 
        array (
          'name' => 'Interval',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '视频截帧间隔，单位为秒。取值范围为1~600，默认值为1。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1',
          ),
        ),
        7 => 
        array (
          'name' => 'MaxFrames',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '系统对本次检测的视频进行截帧的张数上限。取值范围为5~3600，默认值为200。
',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '200',
          ),
        ),
        8 => 
        array (
          'name' => 'Notification',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '消息通知配置，详细内容请单击Notification查看，异步通知消息格式请参见[异步通知消息格式](~~471456~~)元数据索引一栏。',
            'required' => false,
            '$ref' => '#/components/schemas/Notification',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => '响应结构体',
            'description' => '响应结构体',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'RequestId',
                'description' => '当次请求的Request ID。',
                'type' => 'string',
                'example' => '1B3D5E0A-D8B8-4DA0-8127-ED32C851****',
              ),
              'TaskId' => 
              array (
                'description' => '任务ID。',
                'type' => 'string',
                'example' => 'VideoModeration-9442a216-4691-4a48-846d-76daccaf*****',
              ),
              'EventId' => 
              array (
                'description' => '事件ID。',
                'type' => 'string',
                'example' => '2E6-1I0FGn0zFnl5AflRfhzClma*****',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"1B3D5E0A-D8B8-4DA0-8127-ED32C851****\\",\\n  \\"TaskId\\": \\"VideoModeration-9442a216-4691-4a48-846d-76daccaf*****\\",\\n  \\"EventId\\": \\"2E6-1I0FGn0zFnl5AflRfhzClma*****\\"\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '创建视频合规检测任务',
      'description' => '- **请确保在使用该接口前，已充分了解智能媒体管理产品的收费方式和[价格](~~88317~~)。**
- 检测结果通过异步消息通知返回。异步消息通知Suggestion字段取值范围：
  - pass：通过，未检测到不合规内容。
  - block：检测到不合规内容，Categories字段为不合规分类，分类详情请参见[内容安全检测结果](~~477109~~)。
  - review：需要人工二次审核，人工审核完成后会再发一条异步消息通知告知人工审核结果。
- 视频截帧要求：
  - 视频帧链接支持以下协议：HTTP和HTTPS。
  - 视频帧支持以下格式：PNG、JPG、JPEG、BMP、GIF、WEBP。
  - 视频帧大小限制为10 MB以内。
  - 视频帧像素建议不低于256*256（px），像素过低可能会影响识别效果。
  - 视频检测接口的响应时间依赖视频帧的下载时间。请保证被检测视频帧所在的存储服务稳定可靠，建议您使用阿里云OSS存储或者CDN缓存等。
- 该接口为异步接口，获取任务开始执行后，任务信息只保存7天，超过7天则无法再获取。调用[GetTask](~~478241~~)或[ListTasks](~~478242~~)接口获取返回的`TaskId`，查看任务信息。也可以通过设置[Notification](~~471456~~)消息通知参数，通过消息通知获取任务信息。',
    ),
    'GetImageModerationResult' => 
    array (
      'summary' => '获取图片合规检测任务。',
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
        'operationType' => 'get',
        'abilityTreeCode' => '173754',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREimmRIZXZT',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ProjectName',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '项目名称',
            'description' => '项目名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'test-project',
          ),
        ),
        1 => 
        array (
          'name' => 'TaskType',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'TaskType',
            'description' => '任务类型。',
            'type' => 'string',
            'required' => true,
            'example' => 'ImageModeration',
          ),
        ),
        2 => 
        array (
          'name' => 'TaskId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'TaskId',
            'description' => '任务ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'ImageModeration-ff207203-3f93-4645-a041-7b8f0f******',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => '图片检测结果',
            'description' => '图片检测结果。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => '请求唯一Id',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'E6A120B1-BEB3-0F63-A7C2-0783B6******',
              ),
              'ProjectName' => 
              array (
                'title' => '项目名称',
                'description' => '项目名称。',
                'type' => 'string',
                'example' => 'test-project',
              ),
              'EventId' => 
              array (
                'title' => '事件Id',
                'description' => '事件ID。',
                'type' => 'string',
                'example' => '1B6-1XBMX3BixLMILvXVGtlkr******',
              ),
              'Status' => 
              array (
                'title' => '任务运行状态',
                'description' => '任务运行状态。取值范围如下：

- Running：任务运行中。
- Succeeded：任务执行完成，成功。
- Failed：任务执行完成，失败。',
                'type' => 'string',
                'example' => 'Succeeded',
              ),
              'Code' => 
              array (
                'title' => '任务错误码',
                'description' => '任务错误码。',
                'type' => 'string',
                'example' => 'ResourceNotFound',
              ),
              'Message' => 
              array (
                'title' => '任务错误消息',
                'description' => '任务错误消息。',
                'type' => 'string',
                'example' => 'The specified resource TaskId is not found.',
              ),
              'StartTime' => 
              array (
                'title' => '任务开始时间',
                'description' => '任务开始时间。',
                'type' => 'string',
                'example' => '2023-04-03T09:44:31.029Z',
              ),
              'EndTime' => 
              array (
                'title' => '任务结束时间',
                'description' => '任务结束时间。',
                'type' => 'string',
                'example' => '2023-04-03T09:44:32Z',
              ),
              'UserData' => 
              array (
                'title' => '用户自定义信息',
                'description' => '用户自定义信息。',
                'type' => 'string',
                'example' => '{
      "fileId": "123"
}',
              ),
              'TaskType' => 
              array (
                'title' => '任务类型',
                'description' => '任务类型。',
                'type' => 'string',
                'example' => 'ImageModeration',
              ),
              'TaskId' => 
              array (
                'title' => '任务唯一ID',
                'description' => '任务ID。',
                'type' => 'string',
                'example' => 'ImageModeration-ff207203-3f93-4645-a041-7b8f0f******',
              ),
              'ModerationResult' => 
              array (
                'description' => '合规检测结果。',
                'type' => 'object',
                'properties' => 
                array (
                  'URI' => 
                  array (
                    'description' => 'OSS文件的存储位置。
存储位置的地址规则为oss://${bucketname}/${objectname}，其中bucketname为和当前项目处于同一地域的OSS Bucket名称，objectname为文件路径。
',
                    'type' => 'string',
                    'example' => 'oss://test-bucket/test-object',
                  ),
                  'Suggestion' => 
                  array (
                    'description' => '建议您执行的操作，取值包括：

- pass：图片正常，无需进行其余操作。

- review：检测结果不确定，需要进行人工审核。

- block：图片违规，建议执行进一步操作（如直接删除或做限制处理）。',
                    'type' => 'string',
                    'example' => 'block',
                  ),
                  'Categories' => 
                  array (
                    'description' => '类⽬列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '类目。',
                      'type' => 'string',
                      'example' => 'porn',
                    ),
                  ),
                  'Frames' => 
                  array (
                    'description' => '视频、动图检测帧相关信息。',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'TotalCount' => 
                      array (
                        'description' => '检测的总帧数。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'example' => '30',
                      ),
                      'BlockFrames' => 
                      array (
                        'description' => '违规的帧。',
                        'type' => 'array',
                        'items' => 
                        array (
                          'description' => '违规的帧信息。',
                          'type' => 'object',
                          'properties' => 
                          array (
                            'Rate' => 
                            array (
                              'description' => '违规的置信度。',
                              'type' => 'number',
                              'format' => 'double',
                              'example' => '30',
                            ),
                            'Offset' => 
                            array (
                              'description' => '帧的偏移量。',
                              'type' => 'integer',
                              'format' => 'int32',
                              'example' => '2',
                            ),
                            'Label' => 
                            array (
                              'description' => '违规的标签。',
                              'type' => 'string',
                              'example' => '{
      "test": "val"
}',
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
        500 => 
        array (
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"E6A120B1-BEB3-0F63-A7C2-0783B6******\\",\\n  \\"ProjectName\\": \\"test-project\\",\\n  \\"EventId\\": \\"1B6-1XBMX3BixLMILvXVGtlkr******\\",\\n  \\"Status\\": \\"Succeeded\\",\\n  \\"Code\\": \\"ResourceNotFound\\",\\n  \\"Message\\": \\"The specified resource TaskId is not found.\\",\\n  \\"StartTime\\": \\"2023-04-03T09:44:31.029Z\\",\\n  \\"EndTime\\": \\"2023-04-03T09:44:32Z\\",\\n  \\"UserData\\": \\"{\\\\n      \\\\\\"fileId\\\\\\": \\\\\\"123\\\\\\"\\\\n}\\",\\n  \\"TaskType\\": \\"ImageModeration\\",\\n  \\"TaskId\\": \\"ImageModeration-ff207203-3f93-4645-a041-7b8f0f******\\",\\n  \\"ModerationResult\\": {\\n    \\"URI\\": \\"oss://test-bucket/test-object\\",\\n    \\"Suggestion\\": \\"block\\",\\n    \\"Categories\\": [\\n      \\"porn\\"\\n    ],\\n    \\"Frames\\": {\\n      \\"TotalCount\\": 30,\\n      \\"BlockFrames\\": [\\n        {\\n          \\"Rate\\": 30,\\n          \\"Offset\\": 2,\\n          \\"Label\\": \\"{\\\\n      \\\\\\"test\\\\\\": \\\\\\"val\\\\\\"\\\\n}\\"\\n        }\\n      ]\\n    }\\n  }\\n}","type":"json"}]',
      'title' => '获取图片合规检测任务',
    ),
    'GetVideoModerationResult' => 
    array (
      'summary' => '获取视频合规检测任务。',
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
        'operationType' => 'get',
        'abilityTreeCode' => '173750',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREimmO3TV2W',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ProjectName',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '项目名称',
            'description' => '项目名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'test-project',
          ),
        ),
        1 => 
        array (
          'name' => 'TaskType',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'TaskType',
            'description' => '任务类型。',
            'type' => 'string',
            'required' => true,
            'example' => 'VideoModeration',
          ),
        ),
        2 => 
        array (
          'name' => 'TaskId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'TaskId',
            'description' => '任务ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'VideoModeration-d0f0df1d-531d-4ab4-b353-e7f475******',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => '图片检测结果',
            'description' => '视频检测结果。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => '请求唯一Id',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'VideoModeration-d0f0df1d-531d-4ab4-b353-e7f475******',
              ),
              'ProjectName' => 
              array (
                'title' => '项目名称',
                'description' => '项目名称。',
                'type' => 'string',
                'example' => 'test-project',
              ),
              'EventId' => 
              array (
                'title' => '事件Id',
                'description' => '事件ID。',
                'type' => 'string',
                'example' => '05C-1XBQvsG2Tn5kBx2dUWo43******',
              ),
              'Status' => 
              array (
                'title' => '任务运行状态',
                'description' => '任务运行状态。取值范围如下：

- Running：任务运行中。
- Succeeded：任务执行完成，成功。
- Failed：任务执行完成，失败。',
                'type' => 'string',
                'example' => 'Succeeded',
              ),
              'Code' => 
              array (
                'title' => '任务错误码',
                'description' => '任务错误码。',
                'type' => 'string',
                'example' => 'ResourceNotFound',
              ),
              'Message' => 
              array (
                'title' => '任务错误消息',
                'description' => '任务错误消息。',
                'type' => 'string',
                'example' => 'The specified resource TaskId is not found.',
              ),
              'StartTime' => 
              array (
                'title' => '任务开始时间',
                'description' => '任务开始时间。',
                'type' => 'string',
                'example' => '2023-04-03T10:20:41.432Z',
              ),
              'EndTime' => 
              array (
                'title' => '任务结束时间',
                'description' => '任务结束时间。',
                'type' => 'string',
                'example' => '2023-04-03T10:20:56.87Z',
              ),
              'UserData' => 
              array (
                'title' => '用户自定义信息',
                'description' => '用户自定义信息。',
                'type' => 'string',
              ),
              'TaskType' => 
              array (
                'title' => '任务类型',
                'description' => '任务类型。',
                'type' => 'string',
                'example' => 'VideoModeration',
              ),
              'TaskId' => 
              array (
                'title' => '任务唯一ID',
                'description' => '任务ID。',
                'type' => 'string',
                'example' => 'VideoModeration-d0f0df1d-531d-4ab4-b353-e7f4750******',
              ),
              'ModerationResult' => 
              array (
                'description' => '合规检测详情。',
                'type' => 'object',
                'properties' => 
                array (
                  'URI' => 
                  array (
                    'description' => '文件URI。
OSS文件的存储地址。地址规则为`oss://${bucketname}/${objectname}`，其中`bucketname`为和当前项目处于同一地域的OSS Bucket名称，`objectname`为文件路径。',
                    'type' => 'string',
                    'example' => 'oss://test-bucket/test-object',
                  ),
                  'Suggestion' => 
                  array (
                    'description' => '审核结果建议。取值：

- **block**：违规。
- **review**：疑似。
- **pass**：通过。',
                    'type' => 'string',
                    'example' => 'block',
                  ),
                  'Categories' => 
                  array (
                    'description' => '类⽬列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '类目信息。',
                      'type' => 'string',
                      'example' => 'porn',
                    ),
                  ),
                  'Frames' => 
                  array (
                    'description' => '视频、动图检测帧相关信息。',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'TotalCount' => 
                      array (
                        'description' => '检测的总帧数。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'example' => '12',
                      ),
                      'BlockFrames' => 
                      array (
                        'description' => '违规的帧。',
                        'type' => 'array',
                        'items' => 
                        array (
                          'description' => '违规的帧信息。',
                          'type' => 'object',
                          'properties' => 
                          array (
                            'Rate' => 
                            array (
                              'description' => '违规的置信度。',
                              'type' => 'number',
                              'format' => 'double',
                              'example' => '10',
                            ),
                            'Offset' => 
                            array (
                              'description' => '帧的偏移量。',
                              'type' => 'integer',
                              'format' => 'int32',
                              'example' => '1',
                            ),
                            'Label' => 
                            array (
                              'description' => '违规的标签。',
                              'type' => 'string',
                              'example' => '{"teat":"val"}',
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
        500 => 
        array (
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"VideoModeration-d0f0df1d-531d-4ab4-b353-e7f475******\\",\\n  \\"ProjectName\\": \\"test-project\\",\\n  \\"EventId\\": \\"05C-1XBQvsG2Tn5kBx2dUWo43******\\",\\n  \\"Status\\": \\"Succeeded\\",\\n  \\"Code\\": \\"ResourceNotFound\\",\\n  \\"Message\\": \\"The specified resource TaskId is not found.\\",\\n  \\"StartTime\\": \\"2023-04-03T10:20:41.432Z\\",\\n  \\"EndTime\\": \\"2023-04-03T10:20:56.87Z\\",\\n  \\"UserData\\": \\"\\",\\n  \\"TaskType\\": \\"VideoModeration\\",\\n  \\"TaskId\\": \\"VideoModeration-d0f0df1d-531d-4ab4-b353-e7f4750******\\",\\n  \\"ModerationResult\\": {\\n    \\"URI\\": \\"oss://test-bucket/test-object\\",\\n    \\"Suggestion\\": \\"block\\",\\n    \\"Categories\\": [\\n      \\"porn\\"\\n    ],\\n    \\"Frames\\": {\\n      \\"TotalCount\\": 12,\\n      \\"BlockFrames\\": [\\n        {\\n          \\"Rate\\": 10,\\n          \\"Offset\\": 1,\\n          \\"Label\\": \\"{\\\\\\"teat\\\\\\":\\\\\\"val\\\\\\"}\\"\\n        }\\n      ]\\n    }\\n  }\\n}","type":"json"}]',
      'title' => '获取视频合规检测任务',
    ),
    'GetTask' => 
    array (
      'summary' => '该接口用于主动查询指定的异步任务信息。IMM支持多种异步数据处理能力，每种能力有各自创建任务的接口，例如创建人物人脸聚类任务CreateFigureClusteringTask、创建文件压缩任务CreateFileCompressionTask等。本接口为通用接口，可以通过任务ID和类型来查询异步任务的详细信息。',
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
        'operationType' => 'get',
        'abilityTreeCode' => '106466',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREimmTGV2Z7',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ProjectName',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '项目名称',
            'description' => '项目名称，获取方式请参见[创建项目](~~478153~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'immtest',
          ),
        ),
        1 => 
        array (
          'name' => 'TaskType',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'TaskType',
            'description' => '任务的类型。取值范围请参见[任务类型列表](~~475313~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'FileCompression',
          ),
        ),
        2 => 
        array (
          'name' => 'TaskId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'TaskId',
            'description' => '需要查询的任务ID，该值在创建任务时作为返回参数。',
            'type' => 'string',
            'required' => true,
            'example' => 'FileCompression-2f157087-91df-4fda-8c3e-232407ec*****',
          ),
        ),
        3 => 
        array (
          'name' => 'RequestDefinition',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否需要返回创建任务的初始请求参数，默认值为False。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'True',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => '图片检测结果',
            'description' => '查询到指定任务的详细信息。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => '请求唯一Id',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '2C5C1E0F-D8B8-4DA0-8127-EC32C771****',
              ),
              'ProjectName' => 
              array (
                'title' => '项目名称',
                'description' => '项目名称。',
                'type' => 'string',
                'example' => 'test-project',
              ),
              'EventId' => 
              array (
                'title' => '事件Id',
                'description' => '事件ID。',
                'type' => 'string',
                'example' => '2F6-1Bz99Xi93EnRpNEyLudILJm****',
              ),
              'Status' => 
              array (
                'title' => '任务运行状态',
                'description' => '任务运行状态。取值范围如下：

- Running：任务运行中。

- Succeeded：任务执行完成，成功。

- Failed：任务执行完成，失败。',
                'type' => 'string',
                'example' => 'Running',
              ),
              'Code' => 
              array (
                'title' => '任务错误码',
                'description' => '任务错误码。',
                'type' => 'string',
                'example' => 'ResourceNotFound',
              ),
              'Message' => 
              array (
                'title' => '任务错误消息',
                'description' => '任务错误消息。',
                'type' => 'string',
                'example' => 'The specified resource project is not found.',
              ),
              'StartTime' => 
              array (
                'title' => '任务开始时间',
                'description' => '任务开始时间。',
                'type' => 'string',
                'example' => '2021-12-24T03:01:41.662060377Z',
              ),
              'EndTime' => 
              array (
                'title' => '任务结束时间',
                'description' => '任务结束时间。',
                'type' => 'string',
                'example' => '2021-12-24T03:01:49.480109219Z',
              ),
              'UserData' => 
              array (
                'title' => '用户自定义信息',
                'description' => '用户自定义信息。',
                'type' => 'string',
                'example' => '{"ID": "user1","Name": "test-user1","Avatar": "http://example.com?id=user1"}',
              ),
              'TaskType' => 
              array (
                'title' => '任务类型',
                'description' => '任务的类型。取值范围请参见[任务类型列表](~~475313~~)。',
                'type' => 'string',
                'example' => 'FileCompression',
              ),
              'TaskId' => 
              array (
                'title' => '任务唯一ID',
                'description' => '任务ID。',
                'type' => 'string',
                'example' => 'c2b277b9-0d30-4882-ad6d-ad661382****',
              ),
              'Tags' => 
              array (
                'description' => '任务标签。用户在创建任务时传入的“Tag”标签。',
                'type' => 'object',
                'example' => '{"test": "val1"}',
              ),
              'TaskRequestDefinition' => 
              array (
                'description' => '创建任务的初始请求参数。',
                'type' => 'string',
                'example' => '{
	"ProjectName":"test-project",
	"CompressedFormat":"zip",
	"TargetURI":"oss://test-bucket/output/test.zip",
	"Sources":[{"URI":"oss://test-bucket/input/test.jpg"}]
}',
              ),
              'Progress' => 
              array (
                'description' => '任务进度。取值范围为0~100，单位为百分比（%）。

> 该参数仅在任务运行状态`State`为`Running`时有意义。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '100',
              ),
            ),
          ),
        ),
        500 => 
        array (
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"2C5C1E0F-D8B8-4DA0-8127-EC32C771****\\",\\n  \\"ProjectName\\": \\"test-project\\",\\n  \\"EventId\\": \\"2F6-1Bz99Xi93EnRpNEyLudILJm****\\",\\n  \\"Status\\": \\"Running\\",\\n  \\"Code\\": \\"ResourceNotFound\\",\\n  \\"Message\\": \\"The specified resource project is not found.\\",\\n  \\"StartTime\\": \\"2021-12-24T03:01:41.662060377Z\\",\\n  \\"EndTime\\": \\"2021-12-24T03:01:49.480109219Z\\",\\n  \\"UserData\\": \\"{\\\\\\"ID\\\\\\": \\\\\\"user1\\\\\\",\\\\\\"Name\\\\\\": \\\\\\"test-user1\\\\\\",\\\\\\"Avatar\\\\\\": \\\\\\"http://example.com?id=user1\\\\\\"}\\",\\n  \\"TaskType\\": \\"FileCompression\\",\\n  \\"TaskId\\": \\"c2b277b9-0d30-4882-ad6d-ad661382****\\",\\n  \\"Tags\\": {\\n    \\"test\\": \\"val1\\"\\n  },\\n  \\"TaskRequestDefinition\\": \\"{\\\\n\\\\t\\\\\\"ProjectName\\\\\\":\\\\\\"test-project\\\\\\",\\\\n\\\\t\\\\\\"CompressedFormat\\\\\\":\\\\\\"zip\\\\\\",\\\\n\\\\t\\\\\\"TargetURI\\\\\\":\\\\\\"oss://test-bucket/output/test.zip\\\\\\",\\\\n\\\\t\\\\\\"Sources\\\\\\":[{\\\\\\"URI\\\\\\":\\\\\\"oss://test-bucket/input/test.jpg\\\\\\"}]\\\\n}\\",\\n  \\"Progress\\": 100\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '获取任务信息',
      'description' => '**请确保在使用该接口前，已充分了解智能媒体管理产品的收费方式和[价格](~~477042~~)**。',
    ),
    'ListTasks' => 
    array (
      'summary' => '该接口提供通过多种条件查询任务列表的功能。通过该接口可以查询指定时间范围内的任务、或者通过创建任务时指定的Tag搜索任务等。',
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
        'operationType' => 'list',
        'abilityTreeCode' => '106467',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREimmTGV2Z7',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ProjectName',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '项目名称',
            'description' => '项目名称，获取方式请参见[创建项目](~~478153~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'test-project',
          ),
        ),
        1 => 
        array (
          'name' => 'TaskTypes',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '查询的任务类型列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '任务类型。取值范围请参见[任务类型列表](~~475313~~)。',
              'type' => 'string',
              'required' => false,
              'example' => '["OfficeConversion","VideoLabelClassification"]',
            ),
            'required' => false,
          ),
        ),
        2 => 
        array (
          'name' => 'NextToken',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'NextToken',
            'description' => '翻页标记。

当文件总数大于设置的MaxResults时，用于翻页的Token。从NextToken开始按字典序返回文件信息列表。

> 在一次查询中首次调用此接口时，将此值设置为空。',
            'type' => 'string',
            'required' => false,
            'example' => 'MTIzNDU2Nzg6aW1tdGVzdDpleGFtcGxlYnVja2V0OmRhdGFzZXQwMDE6b3NzOi8vZXhhbXBsZWJ1Y2tldC9zYW1wbGVvYmplY3QxLmpwZw==',
          ),
        ),
        3 => 
        array (
          'name' => 'MaxResults',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'MaxResults',
            'description' => '返回结果列表中最大任务数量。取值范围为（0，100 ]，默认值为100。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1',
          ),
        ),
        4 => 
        array (
          'name' => 'TagSelector',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '自定义任务标签。在创建任务时如果指定了“Tag”参数，可以通过此参数进行搜索。',
            'type' => 'string',
            'required' => false,
            'example' => 'test=val1',
          ),
        ),
        5 => 
        array (
          'name' => 'Sort',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '返回的任务信息列表排序规则。取值范围如下：

- TaskId（默认）：任务ID。

- StartTime：任务开始时间。

- EndTime：任务结束时间。',
            'type' => 'string',
            'required' => false,
            'example' => 'TaskId',
          ),
        ),
        6 => 
        array (
          'name' => 'Order',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '排序方式。取值范围如下：

- ASC（默认）：升序

- DES：降序',
            'type' => 'string',
            'required' => false,
            'enumValueTitles' => 
            array (
              'ASC' => '升序',
              'DES' => '降序',
            ),
            'example' => 'ASC',
          ),
        ),
        7 => 
        array (
          'name' => 'Status',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '任务运行状态。取值范围如下：

- Running：任务运行中。

- Succeeded：任务执行完成，成功。

- Failed：任务执行完成，失败。',
            'type' => 'string',
            'required' => false,
            'enumValueTitles' => 
            array (
              'Succeeded' => '任务执行完成，成功',
              'Failed' => '任务执行完成，失败',
              'Running' => '任务运行中',
            ),
            'example' => 'Succeeded',
          ),
        ),
        8 => 
        array (
          'name' => 'StartTimeRange',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '任务开始的时间范围。可筛选某段时间内开始执行的任务。',
            'required' => false,
            '$ref' => '#/components/schemas/TimeRange',
          ),
        ),
        9 => 
        array (
          'name' => 'EndTimeRange',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '任务结束的时间范围。可筛选某段时间内结束执行的任务。',
            'required' => false,
            '$ref' => '#/components/schemas/TimeRange',
          ),
        ),
        10 => 
        array (
          'name' => 'RequestDefinition',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否需要返回创建任务的初始请求参数，默认值为False。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'True',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => '图片检测结果',
            'description' => '符合条件的任务列表。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => '请求唯一Id',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '9847E7D0-A9A3-0053-84C6-BA16FFFA726E',
              ),
              'ProjectName' => 
              array (
                'title' => '项目名称',
                'description' => '项目名称。',
                'type' => 'string',
                'example' => 'immtest',
              ),
              'NextToken' => 
              array (
                'title' => '翻页标记',
                'description' => '翻页标记。当任务列表总数大于设置的MaxResults时，用于翻页的Token。符合条件的任务列表未全部返回时，此参数才有值。

下一次列出任务列表时将此值作为NextToken传入，将后续的任务列表返回。',
                'type' => 'string',
                'example' => 'MTIzNDU2Nzg6aW1tdGVzdDpleGFtcGxlYnVja2V0OmRhdGFzZXQwMDE6b3NzOi8vZXhhbXBsZWJ1Y2tldC9zYW1wbGVvYmplY3QxLmpwZw==',
              ),
              'MaxResults' => 
              array (
                'title' => '最大结果数量',
                'description' => '本次返回的任务列表长度。',
                'type' => 'string',
                'example' => '1',
              ),
              'Tasks' => 
              array (
                'title' => '任务信息',
                'description' => '任务信息列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '任务的详细信息。',
                  '$ref' => '#/components/schemas/TaskInfo',
                ),
              ),
            ),
          ),
        ),
        500 => 
        array (
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"9847E7D0-A9A3-0053-84C6-BA16FFFA726E\\",\\n  \\"ProjectName\\": \\"immtest\\",\\n  \\"NextToken\\": \\"MTIzNDU2Nzg6aW1tdGVzdDpleGFtcGxlYnVja2V0OmRhdGFzZXQwMDE6b3NzOi8vZXhhbXBsZWJ1Y2tldC9zYW1wbGVvYmplY3QxLmpwZw==\\",\\n  \\"MaxResults\\": \\"1\\",\\n  \\"Tasks\\": [\\n    {\\n      \\"Status\\": \\"\\",\\n      \\"Code\\": \\"\\",\\n      \\"Message\\": \\"\\",\\n      \\"StartTime\\": \\"\\",\\n      \\"EndTime\\": \\"\\",\\n      \\"UserData\\": \\"\\",\\n      \\"TaskType\\": \\"\\",\\n      \\"TaskId\\": \\"\\",\\n      \\"Tags\\": {\\n        \\"test\\": \\"test\\",\\n        \\"test2\\": 1\\n      },\\n      \\"TaskRequestDefinition\\": \\"\\",\\n      \\"Progress\\": 0\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '查询任务列表',
      'description' => '**请确保在使用该接口前，已充分了解智能媒体管理产品的收费方式和[价格](~~477042~~)**。',
    ),
    'CreateTrigger' => 
    array (
      'summary' => '创建触发器任务，可通过OSS等事件源触发IMM数据处理，支持选择多种数据处理模板，对图片、视频、文档等媒体文件执行相应的处理。',
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
        'operationType' => 'create',
        'riskType' => 'none',
        'chargeType' => 'paid',
        'abilityTreeCode' => '135761',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREimmJ1ILHI',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ProjectName',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '项目名称，获取方式请参见[创建项目](~~478153~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'test-project',
          ),
        ),
        1 => 
        array (
          'name' => 'Input',
          'in' => 'formData',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '输入的数据源配置。',
            'required' => true,
            '$ref' => '#/components/schemas/Input',
          ),
        ),
        2 => 
        array (
          'name' => 'Actions',
          'in' => 'formData',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '处理模板列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '模版信息。',
              'type' => 'object',
              'properties' => 
              array (
                'Name' => 
                array (
                  'description' => '模板名字。',
                  'type' => 'string',
                  'required' => true,
                  'example' => 'doc/convert',
                ),
                'Parameters' => 
                array (
                  'description' => '模板参数列表。',
                  'type' => 'array',
                  'items' => 
                  array (
                    'description' => '模版参数。',
                    'type' => 'string',
                    'required' => false,
                    'example' => 'pages=3',
                  ),
                  'required' => false,
                ),
                'FastFailPolicy' => 
                array (
                  'description' => '快速失败执行策略配置。',
                  'required' => false,
                  '$ref' => '#/components/schemas/FastFailPolicy',
                ),
              ),
              'required' => false,
            ),
            'required' => true,
          ),
        ),
        3 => 
        array (
          'name' => 'Notification',
          'in' => 'formData',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '消息通知对象，支持多种消息中间件，消息格式详情请见异步通知消息格式，请选择其中一种方式接收消息，使用方式如下所示：

在与智能媒体管理相同的地域下开通并接入事件总线EventBridge服务，及时获取任务信息通知。更多信息，请参见智能媒体管理IMM事件。 在与智能媒体管理相同的地域下开通MNS服务，并配置订阅关系。',
            'type' => 'object',
            'properties' => 
            array (
              'MNS' => 
              array (
                'description' => 'MNS通知参数对象。',
                'required' => false,
                '$ref' => '#/components/schemas/MNS',
              ),
            ),
            'required' => false,
          ),
        ),
        4 => 
        array (
          'name' => 'Tags',
          'in' => 'formData',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '自定义标签，用于对异步任务进行搜索、过滤。',
            'type' => 'object',
            'required' => false,
            'example' => '{"key":"val"}',
          ),
        ),
        5 => 
        array (
          'name' => 'ServiceRole',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '服务角色，授权给IMM服务以访问其他云资源（例如OSS）的权限，默认值为AliyunIMMBatchTriggerRole。

如果要自定义服务角色，您可以通过RAM控制台创建普通服务角色并为角色授权。具体操作，请分别参见[创建普通服务角色](~~116800~~)和[为角色授权](~~116147~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'AliyunIMMBatchTriggerRole',
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
                'description' => '请求的ID。',
                'type' => 'string',
                'example' => 'EC564A9A-BA5C-4499-A087-D9B9E76E*****',
              ),
              'Id' => 
              array (
                'description' => '数据接入ID。',
                'type' => 'string',
                'example' => 'trigger-9f72636a-0f0c-4baf-ae78-38b27b******',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"EC564A9A-BA5C-4499-A087-D9B9E76E*****\\",\\n  \\"Id\\": \\"trigger-9f72636a-0f0c-4baf-ae78-38b27b******\\"\\n}","type":"json"}]',
      'title' => '创建触发器',
      'description' => '创建触发器任务，如果需要通过[对象存储数据处理方式](~~99372~~)进行数据处理，请确保已经完成了[绑定对象存储桶](~~478206~~)的操作。',
    ),
    'SuspendTrigger' => 
    array (
      'summary' => '将一个 Running（正在执行）状态的触发器暂停。',
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
        'abilityTreeCode' => '135764',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREimmJ1ILHI',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ProjectName',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '项目名称，获取方式请参见[创建项目](~~478153~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'test-project',
          ),
        ),
        1 => 
        array (
          'name' => 'Id',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '数据接入ID，获取方式请参见[创建触发器](~~479912~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'trigger-9f72636a-0f0c-4baf-ae78-38b27b******',
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
                'example' => '0BC1F0C9-8E99-46C6-B502-10DED******',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"0BC1F0C9-8E99-46C6-B502-10DED******\\"\\n}","type":"json"}]',
      'title' => '暂停触发器',
      'description' => '任务状态 Running（正在执行）时，可以暂停任务。如果想继续执行，需要调用[ResumeTrigger](~~479919~~)接口。',
    ),
    'ResumeTrigger' => 
    array (
      'summary' => '将一个Suspended（暂停）或Failed（失败）状态的触发器恢复。',
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
        'abilityTreeCode' => '135767',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREimmJ1ILHI',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ProjectName',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '项目名称，获取方式请参见[创建项目](~~478153~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'test-project',
          ),
        ),
        1 => 
        array (
          'name' => 'Id',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '数据接入ID，获取方式请参见[创建触发器](~~479912~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'trigger-9f72636a-0f0c-4baf-ae78-38b27b******',
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
                'example' => 'FEDC9B1F-30F2-4C1F-8ED2-B7860187****',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"FEDC9B1F-30F2-4C1F-8ED2-B7860187****\\"\\n}","type":"json"}]',
      'title' => '恢复触发器',
      'description' => '只有Suspended（暂停），Failed（失败）状态的触发器可以恢复，恢复后继续执行未完成的任务。',
    ),
    'UpdateTrigger' => 
    array (
      'summary' => '更新触发器信息，如输入的数据源配置、数据处理的配置、触发器标签等信息。',
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
        'riskType' => 'none',
        'chargeType' => 'free',
        'abilityTreeCode' => '135765',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREimmJ1ILHI',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ProjectName',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '项目名称，获取方式请参见[创建项目](~~478153~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'test-project',
          ),
        ),
        1 => 
        array (
          'name' => 'Id',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '数据接入ID，获取方式请参见[创建触发器](~~479912~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'trigger-9f72636a-0f0c-4baf-ae78-38b27b******',
          ),
        ),
        2 => 
        array (
          'name' => 'Input',
          'in' => 'formData',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '输入的数据源配置。',
            'required' => false,
            '$ref' => '#/components/schemas/Input',
          ),
        ),
        3 => 
        array (
          'name' => 'Actions',
          'in' => 'formData',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '处理模板列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '模版信息。',
              'type' => 'object',
              'properties' => 
              array (
                'Name' => 
                array (
                  'description' => '模版名称。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'doc/convert',
                ),
                'Parameters' => 
                array (
                  'description' => '模版参数列表。',
                  'type' => 'array',
                  'items' => 
                  array (
                    'description' => '模版参数。',
                    'type' => 'string',
                    'required' => false,
                    'example' => 'pages=3',
                  ),
                  'required' => false,
                ),
              ),
              'required' => false,
            ),
            'required' => false,
          ),
        ),
        4 => 
        array (
          'name' => 'Tags',
          'in' => 'formData',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '自定义标签，用于对异步任务进行搜索、过滤。',
            'type' => 'object',
            'required' => false,
            'example' => '{"test": "val1"}',
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
                'example' => '5A022F78-B9A8-4ACC-BB6B-B35975******',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"5A022F78-B9A8-4ACC-BB6B-B35975******\\"\\n}","type":"json"}]',
      'title' => '更新触发器',
      'description' => '- 只有Ready（就绪）和Failed（失败）状态的触发器任务可以更新，更新不会改变任务状态。
- 更新完成后，之前未完成的触发器任务不再执行，您可以调用[ResumeTrigger](~~ResumeTrigger~~)接口恢复此触发器任务的执行。',
    ),
    'GetTrigger' => 
    array (
      'summary' => '获取触发器信息。',
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
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'get',
        'abilityTreeCode' => '135766',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREimmJ1ILHI',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ProjectName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '项目名称，获取方式请参见[创建项目](~~478153~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'test-project',
          ),
        ),
        1 => 
        array (
          'name' => 'Id',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'A short description of struct',
            'description' => '数据接入ID，获取方式请参见[创建触发器](~~479912~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'trigger-9f72636a-0f0c-4baf-ae78-38b27b******',
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
              'Trigger' => 
              array (
                'description' => '数据接入信息。',
                '$ref' => '#/components/schemas/DataIngestion',
              ),
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '4A7A2D0E-D8B8-4DA0-8127-EB32C6******',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Trigger\\": {\\n    \\"Id\\": \\"\\",\\n    \\"Input\\": {\\n      \\"OSS\\": {\\n        \\"Bucket\\": \\"\\",\\n        \\"Prefix\\": \\"\\",\\n        \\"MatchExpressions\\": [\\n          \\"\\"\\n        ]\\n      }\\n    },\\n    \\"Actions\\": [\\n      {\\n        \\"Name\\": \\"\\",\\n        \\"Parameters\\": [\\n          \\"\\"\\n        ],\\n        \\"FastFailPolicy\\": {\\n          \\"Action\\": \\"abort\\"\\n        }\\n      }\\n    ],\\n    \\"Notification\\": {\\n      \\"Endpoint\\": \\"\\",\\n      \\"Topic\\": \\"\\",\\n      \\"MNS\\": {\\n        \\"TopicName\\": \\"\\",\\n        \\"Endpoint\\": \\"\\"\\n      },\\n      \\"RocketMQ\\": {\\n        \\"Endpoint\\": \\"\\",\\n        \\"TopicName\\": \\"\\",\\n        \\"InstanceId\\": \\"\\"\\n      }\\n    },\\n    \\"Statistic\\": {\\n      \\"SubmitSuccess\\": 0,\\n      \\"SubmitFailure\\": 0,\\n      \\"SkipFiles\\": 0\\n    },\\n    \\"State\\": \\"\\",\\n    \\"Marker\\": \\"\\",\\n    \\"CreateTime\\": \\"\\",\\n    \\"UpdateTime\\": \\"\\",\\n    \\"Tags\\": {\\n      \\"test\\": \\"test\\",\\n      \\"test2\\": 1\\n    },\\n    \\"Error\\": \\"\\",\\n    \\"Phase\\": \\"IncrementalScanning\\",\\n    \\"ServiceRole\\": \\"AliyunIMMBatchTriggerRole\\"\\n  },\\n  \\"RequestId\\": \\"4A7A2D0E-D8B8-4DA0-8127-EB32C6******\\"\\n}","type":"json"}]',
      'title' => '获取触发器信息',
    ),
    'ListTriggers' => 
    array (
      'summary' => '查询触发器任务列表，支持排序，支持按照任务标签，任务状态等条件查询。',
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
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'list',
        'abilityTreeCode' => '135763',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREimmJ1ILHI',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ProjectName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '项目名称，获取方式请参见[创建项目](~~478153~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'test-project',
          ),
        ),
        1 => 
        array (
          'name' => 'State',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '任务状态：

- Ready：任务就绪，刚创建的任务处于Ready状态。
- Running：正在执行，正常执行的任务状态。
- Failed：任务失败，任务执行出错，且无法自动恢复。
- Suspended：任务暂停。
- Succeeded：任务执行完成。',
            'type' => 'string',
            'required' => false,
            'example' => 'Succeeded',
          ),
        ),
        2 => 
        array (
          'name' => 'Sort',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '排序字段，取值范围如下：

- CreateTime：按任务创建时间排序。

- UpdateTime：按任务更新时间排序。',
            'type' => 'string',
            'required' => false,
            'example' => '2020-11-11T06:51:17.5Z
',
          ),
        ),
        3 => 
        array (
          'name' => 'Order',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '排序方式，默认值为DESC。

- ASC：升序
- DESC：降序',
            'type' => 'string',
            'required' => false,
            'example' => 'ASC',
          ),
        ),
        4 => 
        array (
          'name' => 'TagSelector',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '自定义任务标签。在创建任务时如果指定了“Tags”参数，可以通过此参数进行搜索。',
            'type' => 'string',
            'required' => false,
            'example' => 'test=val1',
          ),
        ),
        5 => 
        array (
          'name' => 'NextToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '翻页标记。

当文件总数大于设置的MaxResults时，用于翻页的Token。从NextToken开始按字典序返回文件信息列表。

第一次调用此接口时，设置为空。',
            'type' => 'string',
            'required' => false,
            'example' => 'MTIzNDU2Nzg6aW1tdGVzdDpleGFtcGxlYnVja2V0OmRhdGFzZXQwMDE6b3NzOi8vZXhhbXBsZWJ1Y2tldC9zYW1wbGVvYmplY3QxLmpwZw==',
          ),
        ),
        6 => 
        array (
          'name' => 'MaxResults',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '返回文件的最大个数，取值范围为0~100。

不设置此参数或者设置为0时，则默认值为100。',
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
              'Triggers' => 
              array (
                'description' => '触发器列表',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '任务信息。',
                  '$ref' => '#/components/schemas/DataIngestion',
                ),
              ),
              'NextToken' => 
              array (
                'description' => '翻页标记。

当文件总数大于设置的MaxResults时，用于翻页的Token。从NextToken开始按字典序返回文件信息列表。

第一次调用此接口时，设置为空。',
                'type' => 'string',
                'example' => 'MTIzNDU2Nzg6aW1tdGVzdDpleGFtcGxlYnVja2V0OmRhdGFzZXQwMDE6b3NzOi8vZXhhbXBsZWJ1Y2tldC9zYW1wbGVvYmplY3QxLmpwZw==',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'F480BFAF-E778-5079-93AD-1E4631******',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Triggers\\": [\\n    {\\n      \\"Id\\": \\"\\",\\n      \\"Input\\": {\\n        \\"OSS\\": {\\n          \\"Bucket\\": \\"\\",\\n          \\"Prefix\\": \\"\\",\\n          \\"MatchExpressions\\": [\\n            \\"\\"\\n          ]\\n        }\\n      },\\n      \\"Actions\\": [\\n        {\\n          \\"Name\\": \\"\\",\\n          \\"Parameters\\": [\\n            \\"\\"\\n          ],\\n          \\"FastFailPolicy\\": {\\n            \\"Action\\": \\"abort\\"\\n          }\\n        }\\n      ],\\n      \\"Notification\\": {\\n        \\"Endpoint\\": \\"\\",\\n        \\"Topic\\": \\"\\",\\n        \\"MNS\\": {\\n          \\"TopicName\\": \\"\\",\\n          \\"Endpoint\\": \\"\\"\\n        },\\n        \\"RocketMQ\\": {\\n          \\"Endpoint\\": \\"\\",\\n          \\"TopicName\\": \\"\\",\\n          \\"InstanceId\\": \\"\\"\\n        }\\n      },\\n      \\"Statistic\\": {\\n        \\"SubmitSuccess\\": 0,\\n        \\"SubmitFailure\\": 0,\\n        \\"SkipFiles\\": 0\\n      },\\n      \\"State\\": \\"\\",\\n      \\"Marker\\": \\"\\",\\n      \\"CreateTime\\": \\"\\",\\n      \\"UpdateTime\\": \\"\\",\\n      \\"Tags\\": {\\n        \\"test\\": \\"test\\",\\n        \\"test2\\": 1\\n      },\\n      \\"Error\\": \\"\\",\\n      \\"Phase\\": \\"IncrementalScanning\\",\\n      \\"ServiceRole\\": \\"AliyunIMMBatchTriggerRole\\"\\n    }\\n  ],\\n  \\"NextToken\\": \\"MTIzNDU2Nzg6aW1tdGVzdDpleGFtcGxlYnVja2V0OmRhdGFzZXQwMDE6b3NzOi8vZXhhbXBsZWJ1Y2tldC9zYW1wbGVvYmplY3QxLmpwZw==\\",\\n  \\"RequestId\\": \\"F480BFAF-E778-5079-93AD-1E4631******\\"\\n}","type":"json"}]',
      'title' => '查询触发器列表',
    ),
    'DeleteTrigger' => 
    array (
      'summary' => '删除指定的触发器。',
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
        'abilityTreeCode' => '135762',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREimmJ1ILHI',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ProjectName',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '项目名称，获取方式请参见[创建项目](~~478153~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'test-project',
          ),
        ),
        1 => 
        array (
          'name' => 'Id',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => 'A short description of struct',
            'description' => '数据接入ID，获取方式请参见[创建触发器](~~479912~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'trigger-9f72636a-0f0c-4baf-ae78-38b27b******',
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
                'example' => 'FEDC9B1F-30F2-4C1F-8ED2-B7860187****',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"FEDC9B1F-30F2-4C1F-8ED2-B7860187****\\"\\n}","type":"json"}]',
      'title' => '删除触发器',
      'description' => '当任务状态处于Ready（就绪），Failed（失败），Suspended（暂停），Succeeded（完成）时可以删除，正在Running（执行）的任务不能删除。',
    ),
    'CreateBatch' => 
    array (
      'summary' => '创建一个批处理任务，指定存储内已存在的若干文件，对其批量执行指定操作，如转码、格式转换等。',
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
        'operationType' => 'create',
        'riskType' => 'none',
        'chargeType' => 'paid',
        'abilityTreeCode' => '131090',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREimmTATRRB',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ProjectName',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '项目名称，获取方式请参见[创建项目](~~478153~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'test-project',
          ),
        ),
        1 => 
        array (
          'name' => 'Input',
          'in' => 'formData',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '输入的数据源配置。',
            'required' => true,
            '$ref' => '#/components/schemas/Input',
          ),
        ),
        2 => 
        array (
          'name' => 'Actions',
          'in' => 'formData',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '处理模板列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '处理模板。',
              'type' => 'object',
              'properties' => 
              array (
                'Name' => 
                array (
                  'description' => '模板名字。',
                  'type' => 'string',
                  'required' => true,
                  'example' => 'doc/convert',
                ),
                'Parameters' => 
                array (
                  'description' => '模板参数列表。',
                  'type' => 'array',
                  'items' => 
                  array (
                    'description' => '模板参数。',
                    'type' => 'string',
                    'required' => false,
                    'example' => 'pages=3',
                  ),
                  'required' => false,
                ),
                'FastFailPolicy' => 
                array (
                  'description' => '快速失败执行策略配置。',
                  'required' => false,
                  '$ref' => '#/components/schemas/FastFailPolicy',
                ),
              ),
              'required' => false,
            ),
            'required' => true,
          ),
        ),
        3 => 
        array (
          'name' => 'Notification',
          'in' => 'formData',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '消息通知对象，支持多种消息中间件，消息格式详情请见异步通知消息格式，请选择其中一种方式接收消息，使用方式如下所示：

在与智能媒体管理相同的地域下开通并接入事件总线EventBridge服务，及时获取任务信息通知。更多信息，请参见智能媒体管理IMM事件。
在与智能媒体管理相同的地域下开通MNS服务，并配置订阅关系。',
            'type' => 'object',
            'properties' => 
            array (
              'MNS' => 
              array (
                'description' => 'MNS通知参数对象。',
                'required' => false,
                '$ref' => '#/components/schemas/MNS',
              ),
            ),
            'required' => false,
          ),
        ),
        4 => 
        array (
          'name' => 'Tags',
          'in' => 'formData',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '自定义标签，用于对异步任务进行搜索、过滤。',
            'type' => 'object',
            'required' => false,
            'example' => '{"key": "val"}
',
          ),
        ),
        5 => 
        array (
          'name' => 'ServiceRole',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '服务角色，授权给IMM服务以访问其他云资源（例如OSS）的权限，默认值为AliyunIMMBatchTriggerRole。

如果要自定义服务角色，您可以通过RAM控制台创建普通服务角色并为角色授权。具体操作，请分别参见[创建普通服务角色](~~116800~~)和[为角色授权](~~116147~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'AliyunIMMBatchTriggerRole',
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
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'EC564A9A-BA5C-4499-A087-D9B9E76E*****',
              ),
              'Id' => 
              array (
                'description' => '批处理任务ID。',
                'type' => 'string',
                'example' => 'batch-4eb9223f-3e88-42d3-a578-3f2852******',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"EC564A9A-BA5C-4499-A087-D9B9E76E*****\\",\\n  \\"Id\\": \\"batch-4eb9223f-3e88-42d3-a578-3f2852******\\"\\n}","type":"json"}]',
      'title' => '创建批处理任务',
      'description' => '创建批处理任务，如果需要通过[对象存储数据处理方式](~~99372~~)进行数据处理，请确保已经完成了[绑定对象存储桶](~~478206~~)的操作。',
    ),
    'SuspendBatch' => 
    array (
      'summary' => '将一个 Running（正在执行）的批处理任务暂停。',
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
        'abilityTreeCode' => '131169',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREimmTATRRB',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ProjectName',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '项目名称，获取方式请参见[创建项目](~~478153~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'test-project',
          ),
        ),
        1 => 
        array (
          'name' => 'Id',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '批处理任务ID，获取方式请参见[创建批处理](~~606694~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'batch-4eb9223f-3e88-42d3-a578-3f2852******',
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
                'example' => 'EC564A9A-BA5C-4499-A087-D9B9E76E*****',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"EC564A9A-BA5C-4499-A087-D9B9E76E*****\\"\\n}","type":"json"}]',
      'title' => '暂停批处理任务',
      'description' => '任务状态 Running（正在执行）时，可以暂停任务。如果想继续执行，需要调用[ResumeBatch](~~ResumeBatch~~)接口。',
    ),
    'ResumeBatch' => 
    array (
      'summary' => '将一个Suspend（暂停）或Failed（失败）的批处理任务恢复。',
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
        'abilityTreeCode' => '131172',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREimmTATRRB',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ProjectName',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '项目名称，获取方式请参见[创建项目](~~478153~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'test-project',
          ),
        ),
        1 => 
        array (
          'name' => 'Id',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '批处理任务ID，获取方式请参见[创建批处理](~~606694~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'batch-4eb9223f-3e88-42d3-a578-3f2852******',
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
                'example' => 'D2C628B8-35DF-473C-8A41-757F30******',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"D2C628B8-35DF-473C-8A41-757F30******\\"\\n}","type":"json"}]',
      'title' => '恢复批处理任务',
      'description' => '只有Suspended（暂停），Failed（失败）状态的批处理任务可以恢复，恢复后继续执行未完成的任务。',
    ),
    'UpdateBatch' => 
    array (
      'summary' => '更新批处理任务信息，如输入的数据源配置、数据处理的配置、批处理任务标签等信息。',
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
        'riskType' => 'none',
        'chargeType' => 'free',
        'abilityTreeCode' => '131143',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREimmTATRRB',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ProjectName',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '项目名称，获取方式请参见[创建项目](~~478153~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'test-project',
          ),
        ),
        1 => 
        array (
          'name' => 'Id',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '批处理任务ID，获取方式请参见[创建批处理](~~606694~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'batch-4eb9223f-3e88-42d3-a578-3f2852******',
          ),
        ),
        2 => 
        array (
          'name' => 'Input',
          'in' => 'formData',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '输入的数据源配置。',
            'required' => false,
            '$ref' => '#/components/schemas/Input',
          ),
        ),
        3 => 
        array (
          'name' => 'Actions',
          'in' => 'formData',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '处理模板列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '模板信息。',
              'type' => 'object',
              'properties' => 
              array (
                'Name' => 
                array (
                  'description' => '模板名称。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'doc/convert',
                ),
                'Parameters' => 
                array (
                  'description' => '模版参数列表。',
                  'type' => 'array',
                  'items' => 
                  array (
                    'description' => '模版参数。',
                    'type' => 'string',
                    'required' => false,
                    'example' => 'pages=3',
                  ),
                  'required' => false,
                ),
              ),
              'required' => false,
            ),
            'required' => false,
          ),
        ),
        4 => 
        array (
          'name' => 'Tags',
          'in' => 'formData',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '自定义标签，用于对异步任务进行搜索、过滤。',
            'type' => 'object',
            'required' => false,
            'example' => '{"key":"val"}',
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
                'example' => 'CB4D73A3-BAF4-4A9D-A631-15F219AF****',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"CB4D73A3-BAF4-4A9D-A631-15F219AF****\\"\\n}","type":"json"}]',
      'title' => '更新批处理任务',
      'description' => '- 更新批处理任务时，当批处理任务状态处于Ready（就绪）或Failed（失败）时可以更新，更新时不会改变当前的任务状态。
- 更新完成后，之前未完成的批处理任务不会继续自动执行，您可以调用[ResumeBatch](~~479914~~)接口恢复此批处理任务的执行。',
    ),
    'ListBatches' => 
    array (
      'summary' => '查询批处理任务列表，支持排序，支持按照任务标签，任务状态等条件查询。',
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
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'list',
        'abilityTreeCode' => '131116',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREimmTATRRB',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ProjectName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '项目名称，获取方式请参见[创建项目](~~478153~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'test-project',
          ),
        ),
        1 => 
        array (
          'name' => 'State',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '批处理任务状态：

- Ready：任务就绪，刚创建的任务处于Ready状态。
- Running：正在执行，正常执行的任务状态。
- Failed：任务失败，任务执行出错，且无法自动恢复。
- Suspended：任务暂停。
- Succeeded：任务执行完成。',
            'type' => 'string',
            'required' => false,
            'example' => 'Succeed',
          ),
        ),
        2 => 
        array (
          'name' => 'Sort',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '排序字段，取值范围如下：

- CreateTime：按任务创建时间排序。

- UpdateTime：按任务更新时间排序。',
            'type' => 'string',
            'required' => false,
            'example' => '2020-11-11T06:51:17.5Z',
          ),
        ),
        3 => 
        array (
          'name' => 'Order',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '排序方式。取值范围如下：

- ASC（默认）：升序

- DES：降序',
            'type' => 'string',
            'required' => false,
            'example' => 'ASC',
          ),
        ),
        4 => 
        array (
          'name' => 'TagSelector',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '自定义任务标签。在创建任务时如果指定了“Tags”参数，可以通过此参数进行搜索。',
            'type' => 'string',
            'required' => false,
            'example' => 'test=val1',
          ),
        ),
        5 => 
        array (
          'name' => 'NextToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '翻页标记。

当文件总数大于设置的MaxResults时，用于翻页的Token。从NextToken开始按字典序返回文件信息列表。

第一次调用此接口时，设置为空。',
            'type' => 'string',
            'required' => false,
            'example' => 'MTIzNDU2Nzg6aW1tdGVzdDpleGFtcGxlYnVja2V0OmRhdGFzZXQwMDE6b3NzOi8vZXhhbXBsZWJ1Y2tldC9zYW1wbGVvYmplY3QxLmpwZw==',
          ),
        ),
        6 => 
        array (
          'name' => 'MaxResults',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '返回文件的最大个数，取值范围为0~100。

不设置此参数或者设置为0时，则默认值为100。',
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
              'Batches' => 
              array (
                'description' => '批处理任务列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '批处理任务信息。',
                  '$ref' => '#/components/schemas/DataIngestion',
                ),
              ),
              'NextToken' => 
              array (
                'description' => '翻页标记。

当文件总数大于设置的MaxResults时，用于翻页的Token。从NextToken开始按字典序返回文件信息列表。

第一次调用此接口时，设置为空。',
                'type' => 'string',
                'example' => 'MTIzNDU2Nzg6aW1tdGVzdDpleGFtcGxlYnVja2V0OmRhdGFzZXQwMDE6b3NzOi8vZXhhbXBsZWJ1Y2tldC9zYW1wbGVvYmplY3QxLmpw****',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'FEDC9B1F-30F2-4C1F-8ED2-B7860187****',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Batches\\": [\\n    {\\n      \\"Id\\": \\"\\",\\n      \\"Input\\": {\\n        \\"OSS\\": {\\n          \\"Bucket\\": \\"\\",\\n          \\"Prefix\\": \\"\\",\\n          \\"MatchExpressions\\": [\\n            \\"\\"\\n          ]\\n        }\\n      },\\n      \\"Actions\\": [\\n        {\\n          \\"Name\\": \\"\\",\\n          \\"Parameters\\": [\\n            \\"\\"\\n          ],\\n          \\"FastFailPolicy\\": {\\n            \\"Action\\": \\"abort\\"\\n          }\\n        }\\n      ],\\n      \\"Notification\\": {\\n        \\"Endpoint\\": \\"\\",\\n        \\"Topic\\": \\"\\",\\n        \\"MNS\\": {\\n          \\"TopicName\\": \\"\\",\\n          \\"Endpoint\\": \\"\\"\\n        },\\n        \\"RocketMQ\\": {\\n          \\"Endpoint\\": \\"\\",\\n          \\"TopicName\\": \\"\\",\\n          \\"InstanceId\\": \\"\\"\\n        }\\n      },\\n      \\"Statistic\\": {\\n        \\"SubmitSuccess\\": 0,\\n        \\"SubmitFailure\\": 0,\\n        \\"SkipFiles\\": 0\\n      },\\n      \\"State\\": \\"\\",\\n      \\"Marker\\": \\"\\",\\n      \\"CreateTime\\": \\"\\",\\n      \\"UpdateTime\\": \\"\\",\\n      \\"Tags\\": {\\n        \\"test\\": \\"test\\",\\n        \\"test2\\": 1\\n      },\\n      \\"Error\\": \\"\\",\\n      \\"Phase\\": \\"IncrementalScanning\\",\\n      \\"ServiceRole\\": \\"AliyunIMMBatchTriggerRole\\"\\n    }\\n  ],\\n  \\"NextToken\\": \\"MTIzNDU2Nzg6aW1tdGVzdDpleGFtcGxlYnVja2V0OmRhdGFzZXQwMDE6b3NzOi8vZXhhbXBsZWJ1Y2tldC9zYW1wbGVvYmplY3QxLmpw****\\",\\n  \\"RequestId\\": \\"FEDC9B1F-30F2-4C1F-8ED2-B7860187****\\"\\n}","type":"json"}]',
      'title' => '查询批处理任务列表',
    ),
    'GetBatch' => 
    array (
      'summary' => '获取批处理任务信息。',
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
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'get',
        'abilityTreeCode' => '131105',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREimmTATRRB',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ProjectName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '项目名称，获取方式请参见[创建项目](~~478153~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'test-project',
          ),
        ),
        1 => 
        array (
          'name' => 'Id',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'A short description of struct',
            'description' => '批处理任务ID，获取方式请参见[创建批处理](~~606694~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'batch-4eb9223f-3e88-42d3-a578-3f2852******',
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
              'Batch' => 
              array (
                'description' => '批处理任务信息。',
                '$ref' => '#/components/schemas/DataIngestion',
              ),
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '6E93D6C9-5AC0-49F9-914D-E02678D3****',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Batch\\": {\\n    \\"Id\\": \\"\\",\\n    \\"Input\\": {\\n      \\"OSS\\": {\\n        \\"Bucket\\": \\"\\",\\n        \\"Prefix\\": \\"\\",\\n        \\"MatchExpressions\\": [\\n          \\"\\"\\n        ]\\n      }\\n    },\\n    \\"Actions\\": [\\n      {\\n        \\"Name\\": \\"\\",\\n        \\"Parameters\\": [\\n          \\"\\"\\n        ],\\n        \\"FastFailPolicy\\": {\\n          \\"Action\\": \\"abort\\"\\n        }\\n      }\\n    ],\\n    \\"Notification\\": {\\n      \\"Endpoint\\": \\"\\",\\n      \\"Topic\\": \\"\\",\\n      \\"MNS\\": {\\n        \\"TopicName\\": \\"\\",\\n        \\"Endpoint\\": \\"\\"\\n      },\\n      \\"RocketMQ\\": {\\n        \\"Endpoint\\": \\"\\",\\n        \\"TopicName\\": \\"\\",\\n        \\"InstanceId\\": \\"\\"\\n      }\\n    },\\n    \\"Statistic\\": {\\n      \\"SubmitSuccess\\": 0,\\n      \\"SubmitFailure\\": 0,\\n      \\"SkipFiles\\": 0\\n    },\\n    \\"State\\": \\"\\",\\n    \\"Marker\\": \\"\\",\\n    \\"CreateTime\\": \\"\\",\\n    \\"UpdateTime\\": \\"\\",\\n    \\"Tags\\": {\\n      \\"test\\": \\"test\\",\\n      \\"test2\\": 1\\n    },\\n    \\"Error\\": \\"\\",\\n    \\"Phase\\": \\"IncrementalScanning\\",\\n    \\"ServiceRole\\": \\"AliyunIMMBatchTriggerRole\\"\\n  },\\n  \\"RequestId\\": \\"6E93D6C9-5AC0-49F9-914D-E02678D3****\\"\\n}","type":"json"}]',
      'title' => '获取批处理任务信息',
    ),
    'DeleteBatch' => 
    array (
      'summary' => '删除指定的一个批处理任务。',
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
        'abilityTreeCode' => '131141',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREimmTATRRB',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ProjectName',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '项目名称，获取方式请参见[创建项目](~~478153~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'test-project',
          ),
        ),
        1 => 
        array (
          'name' => 'Id',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => 'A short description of struct',
            'description' => '批处理任务ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'batch-4eb9223f-3e88-42d3-a578-3f2852******',
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
                'example' => '91AC8C98-0F36-49D2-8290-742E24******',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"91AC8C98-0F36-49D2-8290-742E24******\\"\\n}","type":"json"}]',
      'title' => '删除批处理任务',
      'description' => '- 删除批处理任务时，当任务状态处于Ready（就绪），Failed（失败），Suspended（暂停），Succeeded（完成）时可以删除，其他运行中的状态禁止删除。
- 删除批处理任务时，可以先通过[GetBatch](~~479922~~)查询批处理任务状态，确保能够顺利删除任务。',
    ),
    'DetectImageTexts' => 
    array (
      'summary' => '图片文本识别，将图片上的文字内容智能识别成为可编辑的文本。',
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
      'operationType' => 'write',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'none',
        'riskType' => 'none',
        'chargeType' => 'paid',
        'abilityTreeCode' => '207351',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREimmYZZZWM',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ProjectName',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '项目名称',
            'description' => '项目名称，获取方式请参见[创建项目](~~478153~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'test-project',
          ),
        ),
        1 => 
        array (
          'name' => 'SourceURI',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'SourceURI',
            'description' => '文件的存储位置。

OSS 地址规则为 oss://${Bucket}/${Object}，其中${Bucket}为和当前项目处于同一区域(Region)的 OSS Bucket 名称，${Object}为包含文件扩展名的文件完整路径。',
            'type' => 'string',
            'required' => true,
            'example' => 'oss://test-bucket/test-object.jpg',
          ),
        ),
        2 => 
        array (
          'name' => 'CredentialConfig',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '链式授权配置，非必填。更多信息，请参见[使用链式授权访问其他实体资源](~~465340~~)。',
            'required' => false,
            '$ref' => '#/components/schemas/CredentialConfig',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => '图片二维码检测结果',
            'description' => '图片文本识别结果。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => '请求唯一ID',
                'description' => '请求唯一ID。',
                'type' => 'string',
                'example' => '1B3D5E0A-D8B8-4DA0-8127-ED32C851****',
              ),
              'OCRTexts' => 
              array (
                'title' => 'OCR文本全文，由OCRContents拼接而成。',
                'description' => 'OCR文本全文，由OCRContents拼接而成。',
                'type' => 'string',
                'example' => '智能媒体管理。',
              ),
              'OCRContents' => 
              array (
                'title' => 'OCR文本片段列表',
                'description' => 'OCR文本片段列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '识别出来的图片中的文字块列表，每个元素包含一个文字块的内容、位置等信息。',
                  '$ref' => '#/components/schemas/OCRContents',
                ),
              ),
            ),
          ),
        ),
        500 => 
        array (
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"1B3D5E0A-D8B8-4DA0-8127-ED32C851****\\",\\n  \\"OCRTexts\\": \\"智能媒体管理。\\",\\n  \\"OCRContents\\": [\\n    {\\n      \\"Language\\": \\"\\",\\n      \\"Contents\\": \\"\\",\\n      \\"Confidence\\": 0,\\n      \\"Boundary\\": {\\n        \\"Width\\": 0,\\n        \\"Height\\": 0,\\n        \\"Left\\": 0,\\n        \\"Top\\": 0,\\n        \\"Polygon\\": [\\n          {\\n            \\"X\\": 0,\\n            \\"Y\\": 0\\n          }\\n        ]\\n      }\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '图片文本识别',
      'description' => '- **请确保在使用该接口前，已充分了解智能媒体管理产品的收费方式和[价格](~~477042~~)**。
- 图片大小不超过20M。
- 图片最短边不小于20px，最长边不超过30,000px。
- 图片的纵横比小于1:2。
- 图片文字不建议小于15px*15px（如果小于，则识别率较低）。',
    ),
  ),
  'endpoints' => 
  array (
    0 => 
    array (
      'regionId' => 'cn-beijing-gov-1',
      'endpoint' => 'imm-vpc.cn-beijing-gov-1.aliyuncs.com',
    ),
    1 => 
    array (
      'regionId' => 'cn-beijing',
      'endpoint' => 'imm.cn-beijing.aliyuncs.com',
    ),
    2 => 
    array (
      'regionId' => 'cn-zhangjiakou',
      'endpoint' => 'imm.cn-zhangjiakou.aliyuncs.com',
    ),
    3 => 
    array (
      'regionId' => 'cn-hangzhou',
      'endpoint' => 'imm.cn-hangzhou.aliyuncs.com',
    ),
    4 => 
    array (
      'regionId' => 'cn-shanghai',
      'endpoint' => 'imm.cn-shanghai.aliyuncs.com',
    ),
    5 => 
    array (
      'regionId' => 'cn-shenzhen',
      'endpoint' => 'imm.cn-shenzhen.aliyuncs.com',
    ),
    6 => 
    array (
      'regionId' => 'cn-north-2-gov-1',
      'endpoint' => 'imm.cn-north-2-gov-1.aliyuncs.com',
    ),
    7 => 
    array (
      'regionId' => 'eu-west-1',
      'endpoint' => 'imm.eu-west-1.aliyuncs.com',
    ),
    8 => 
    array (
      'regionId' => 'eu-central-1',
      'endpoint' => 'imm.eu-central-1.aliyuncs.com',
    ),
    9 => 
    array (
      'regionId' => 'cn-qingdao',
      'endpoint' => 'imm.cn-qingdao.aliyuncs.com',
    ),
    10 => 
    array (
      'regionId' => 'cn-guangzhou',
      'endpoint' => 'imm.cn-guangzhou.aliyuncs.com',
    ),
    11 => 
    array (
      'regionId' => 'cn-chengdu',
      'endpoint' => 'imm.cn-chengdu.aliyuncs.com',
    ),
    12 => 
    array (
      'regionId' => 'ap-southeast-1',
      'endpoint' => 'imm.ap-southeast-1.aliyuncs.com',
    ),
    13 => 
    array (
      'regionId' => 'ap-southeast-5',
      'endpoint' => 'imm.ap-southeast-5.aliyuncs.com',
    ),
    14 => 
    array (
      'regionId' => 'us-east-1',
      'endpoint' => 'imm.us-east-1.aliyuncs.com',
    ),
    15 => 
    array (
      'regionId' => 'us-west-1',
      'endpoint' => 'imm.us-west-1.aliyuncs.com',
    ),
    16 => 
    array (
      'regionId' => 'cn-hongkong',
      'endpoint' => 'imm.cn-hongkong.aliyuncs.com',
    ),
    17 => 
    array (
      'regionId' => 'ap-south-1',
      'endpoint' => 'imm.ap-south-1.aliyuncs.com',
    ),
    18 => 
    array (
      'regionId' => 'ap-southeast-2',
      'endpoint' => 'imm.ap-southeast-2.aliyuncs.com',
    ),
  ),
);
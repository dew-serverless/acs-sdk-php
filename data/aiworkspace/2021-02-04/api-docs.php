<?php return array (
  'version' => '1.0',
  'info' => 
  array (
    'style' => 'ROA',
    'product' => 'AIWorkSpace',
    'version' => '2021-02-04',
  ),
  'directories' => 
  array (
    0 => 
    array (
      'id' => 170489,
      'title' => '镜像',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'AddImage',
        1 => 'AddImageLabels',
        2 => 'GetImage',
        3 => 'ListImageLabels',
        4 => 'ListImages',
        5 => 'RemoveImage',
        6 => 'PublishImage',
        7 => 'RemoveImageLabels',
      ),
    ),
    1 => 
    array (
      'id' => 170510,
      'title' => '工作空间',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateWorkspace',
        1 => 'ListWorkspaces',
        2 => 'GetWorkspace',
        3 => 'DeleteWorkspace',
        4 => 'UpdateWorkspace',
        5 => 'GetDefaultWorkspace',
        6 => 'UpdateDefaultWorkspace',
        7 => 'GetPermission',
        8 => 'ListPermissions',
        9 => 'ListWorkspaceUsers',
        10 => 'CreateMember',
        11 => 'ListMembers',
        12 => 'GetMember',
        13 => 'DeleteMembers',
        14 => 'AddMemberRole',
        15 => 'RemoveMemberRole',
        16 => 'CreateWorkspaceResource',
        17 => 'DeleteWorkspaceResource',
        18 => 'UpdateWorkspaceResource',
        19 => 'ListResources',
        20 => 'ListQuotas',
      ),
    ),
    2 => 
    array (
      'id' => 172452,
      'title' => '数据集',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateDataset',
        1 => 'GetDataset',
        2 => 'UpdateDataset',
        3 => 'PublishDataset',
        4 => 'ListDatasets',
        5 => 'DeleteDataset',
        6 => 'CreateDatasetLabels',
        7 => 'DeleteDatasetLabels',
      ),
    ),
    3 => 
    array (
      'id' => 172645,
      'title' => '代码配置',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateCodeSource',
        1 => 'DeleteCodeSource',
        2 => 'PublishCodeSource',
        3 => 'GetCodeSource',
        4 => 'ListCodeSources',
      ),
    ),
    4 => 
    array (
      'id' => 172713,
      'title' => '模型',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateModel',
        1 => 'UpdateModel',
        2 => 'GetModel',
        3 => 'ListModels',
        4 => 'DeleteModel',
        5 => 'CreateModelVersion',
        6 => 'UpdateModelVersion',
        7 => 'GetModelVersion',
        8 => 'ListModelVersions',
        9 => 'DeleteModelVersion',
        10 => 'CreateModelLabels',
        11 => 'DeleteModelLabels',
        12 => 'CreateModelVersionLabels',
        13 => 'DeleteModelVersionLabels',
      ),
    ),
    5 => 
    array (
      'id' => 180985,
      'title' => '其他',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'ListProducts',
        1 => 'CreateProductOrders',
        2 => 'ListServiceTemplates',
        3 => 'GetServiceTemplate',
      ),
    ),
  ),
  'components' => 
  array (
    'schemas' => 
    array (
      'CodeSourceItem' => 
      array (
        'title' => '代码源配置的内容',
        'description' => '一个CodeSource的描述，用于ListCodeSources',
        'type' => 'object',
        'properties' => 
        array (
          'CodeSourceId' => 
          array (
            'title' => '代码源ID',
            'type' => 'string',
            'example' => 'code-20210111103721-85qz78ia96lu',
          ),
          'DisplayName' => 
          array (
            'title' => '代码源配置的名字',
            'type' => 'string',
            'example' => 'MyCodeSourceName1',
          ),
          'Description' => 
          array (
            'title' => '代码源详细描述',
            'type' => 'string',
            'example' => 'code source of dlc examples',
          ),
          'CodeRepo' => 
          array (
            'title' => '代码仓库地址',
            'type' => 'string',
            'example' => 'https://code.aliyun.com/pai-dlc/examples.git',
          ),
          'CodeBranch' => 
          array (
            'title' => '代码分支',
            'type' => 'string',
            'example' => 'master',
          ),
          'CodeCommit' => 
          array (
            'title' => '代码Commit ID',
            'type' => 'string',
            'example' => '44da109b59f8596152987eaa8f3b2487bb72ea63',
          ),
          'CodeRepoUserName' => 
          array (
            'title' => '访问代码仓库的用户名',
            'type' => 'string',
            'example' => 'user',
          ),
          'CodeRepoAccessToken' => 
          array (
            'title' => '访问代码仓库所用的AccessToken',
            'type' => 'string',
          ),
          'Accessibility' => 
          array (
            'title' => '表示代码是否是工作空间下公开的,可选值PRIVATE,PUBLIC',
            'type' => 'string',
            'example' => 'PUBLIC',
          ),
          'UserId' => 
          array (
            'title' => '代码源配置的用户ID',
            'type' => 'string',
            'example' => '1157290171663117',
          ),
          'WorkspaceId' => 
          array (
            'title' => '工作空间ID',
            'type' => 'string',
            'example' => '1234',
          ),
          'GmtCreateTime' => 
          array (
            'title' => '创建时间',
            'type' => 'string',
            'example' => '2021-01-18T12:52:15Z',
          ),
          'GmtModifyTime' => 
          array (
            'title' => '修改时间',
            'type' => 'string',
            'example' => '2021-01-18T12:52:15Z',
          ),
          'MountPath' => 
          array (
            'title' => '代码Mount路径',
            'type' => 'string',
            'example' => '/root/code/',
          ),
        ),
      ),
      'Collection' => 
      array (
        'title' => 'A short description of struct',
        'type' => 'object',
        'properties' => 
        array (
          'CollectionName' => 
          array (
            'title' => 'Collection名称，全局唯一',
            'type' => 'string',
            'example' => 'AI4D',
          ),
          'GmtCreateTime' => 
          array (
            'title' => '创建时间',
            'type' => 'string',
            'example' => '2021-01-21T17:12:35Z',
          ),
          'GmtModifiedTime' => 
          array (
            'title' => '最后更新时间',
            'type' => 'string',
            'example' => '2021-01-21T17:12:35Z',
          ),
          'UserId' => 
          array (
            'title' => '创建Collection的用户ID',
            'type' => 'string',
            'example' => '155770209******',
          ),
          'OwnerId' => 
          array (
            'title' => '云账号ID',
            'type' => 'string',
            'example' => '155770209******',
          ),
        ),
      ),
      'Dataset' => 
      array (
        'title' => 'A short description of struct',
        'description' => '数据集属性。',
        'type' => 'object',
        'properties' => 
        array (
          'DatasetId' => 
          array (
            'title' => 'Dataset Id',
            'description' => '数据集ID。',
            'type' => 'string',
            'example' => 'd-c0h44g3****j8o4348',
          ),
          'UserId' => 
          array (
            'title' => 'User Id',
            'description' => '用户ID。',
            'type' => 'string',
            'example' => '2485765****023475',
          ),
          'OwnerId' => 
          array (
            'title' => 'Owner Id',
            'description' => '主账户ID。',
            'type' => 'string',
            'example' => '1631044****3440',
          ),
          'Name' => 
          array (
            'title' => 'Name',
            'description' => '数据集名称。',
            'type' => 'string',
            'example' => 'myName',
          ),
          'Labels' => 
          array (
            'title' => 'Labels',
            'description' => '标签列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '标签。',
              'example' => '{"Key": "env", "Value": "test"}',
              '$ref' => '#/components/schemas/Label',
            ),
          ),
          'DataSourceType' => 
          array (
            'title' => 'DataSourceType',
            'description' => '数据源类型。',
            'type' => 'string',
            'enumValueTitles' => 
            array (
              'NAS' => 'NAS',
              'OSS' => 'OSS',
            ),
            'example' => 'NAS',
          ),
          'Uri' => 
          array (
            'title' => 'Uri',
            'description' => 'Uri样例：

- 数据源类型为OSS：

`oss://bucket.endpoint/object`

- 数据源类型为NAS：

通用型NAS格式为：

`nas://<nasfisid>.region/subpath/to/dir/`

CPFS1.0：

`nas://<cpfs-fsid>.region/subpath/to/dir/`

CPFS2.0：

`nas://<cpfs-fsid>.region/<protocolserviceid>/`

CPFS1.0和CPFS2.0根据fsid的格式来区分
CPFS1.0 格式为cpfs-<8位ascii字符>
CPFS2.0 格式为cpfs-<16为ascii字符>',
            'type' => 'string',
            'example' => 'nas://09f****f2.cn-hangzhou/',
          ),
          'GmtCreateTime' => 
          array (
            'title' => 'GmtCreateTime',
            'description' => '创建时间。',
            'type' => 'string',
            'example' => '2021-01-21T17:12:35.232Z',
          ),
          'GmtModifiedTime' => 
          array (
            'title' => 'GmtModifiedTime',
            'description' => '更新时间。',
            'type' => 'string',
            'example' => '2021-01-21T17:12:35.232Z',
          ),
          'DataType' => 
          array (
            'title' => 'DataType',
            'description' => '数据类型，默认为COMMON。

- COMMON
普通
- PIC
图片
- TEXT
文本
- VIDEO
视频
- AUDIO
音频',
            'type' => 'string',
            'enumValueTitles' => 
            array (
              'VIDEO' => 'VIDEO',
              'COMMON' => 'COMMON',
              'TEXT' => 'TEXT',
              'PIC' => 'PIC',
              'AUDIO' => 'AUDIO',
            ),
            'example' => 'COMMON',
          ),
          'Property' => 
          array (
            'title' => 'Property',
            'description' => '数据集属性。

- FILE
文件
- DIRECTORY
文件夹',
            'type' => 'string',
            'enumValueTitles' => 
            array (
              'DIRECTORY' => 'DIRECTORY',
              'FILE' => 'FILE',
            ),
            'example' => 'DIRECTORY',
          ),
          'SourceType' => 
          array (
            'title' => 'SourceType',
            'description' => '来源类型，默认为USER。

- USER
来自用户
- ITAG
来自标注平台ITAG
- PAI\\_PUBLIC\\_DATASET
PAI公开数据集',
            'type' => 'string',
            'enumValueTitles' => 
            array (
              'PAI_PUBLIC_DATASET' => 'PAI_PUBLIC_DATASET',
              'ITAG' => 'ITAG',
              'USER' => 'USER',
            ),
            'example' => 'USER',
          ),
          'SourceId' => 
          array (
            'title' => 'SourceId',
            'description' => '来源ID。',
            'type' => 'string',
            'example' => 'jdnhf***fnrimv',
          ),
          'Description' => 
          array (
            'title' => 'Description',
            'description' => '描述。',
            'type' => 'string',
            'example' => '用于标注的数据。',
          ),
          'WorkspaceId' => 
          array (
            'title' => 'WorkspaceId',
            'description' => '数据集所在工作空间ID。',
            'type' => 'string',
            'example' => '478**',
          ),
          'Options' => 
          array (
            'title' => 'Options',
            'description' => '扩展字段（选项），JsonString类型。
当DLC使用数据集时，可通过配置mountPath字段指定数据集默认挂载路径。',
            'type' => 'string',
            'example' => '{
  "mountPath": "/mnt/data/"
}',
          ),
          'Accessibility' => 
          array (
            'title' => 'Accessibility',
            'description' => '工作空间可见度。默认为PRIVATE，表示工作空间内自己以及管理员可见。PUBLIC为工作空间所有用户可见。',
            'type' => 'string',
            'enumValueTitles' => 
            array (
              'PUBLIC' => 'PUBLIC',
              'PRIVATE' => 'PRIVATE',
            ),
            'example' => 'PRIVATE',
          ),
          'ProviderType' => 
          array (
            'title' => 'ProviderType',
            'description' => 'ProviderType',
            'type' => 'string',
            'example' => 'Ecs',
          ),
        ),
      ),
      'DatasetLabel' => 
      array (
        'title' => 'A short description of struct',
        'type' => 'object',
        'properties' => 
        array (
          'Key' => 
          array (
            'title' => 'Key',
            'type' => 'string',
          ),
          'Value' => 
          array (
            'title' => 'Value',
            'type' => 'string',
          ),
        ),
      ),
      'Experiment' => 
      array (
        'title' => 'A short description of struct',
        'description' => '实验',
        'type' => 'object',
        'properties' => 
        array (
          'ExperimentId' => 
          array (
            'title' => 'ExperimentId',
            'type' => 'string',
          ),
          'Name' => 
          array (
            'title' => 'Name',
            'type' => 'string',
          ),
          'WorkspaceId' => 
          array (
            'title' => 'WorkspaceId',
            'type' => 'string',
          ),
          'ArtifactUri' => 
          array (
            'title' => 'ArtifactUri',
            'type' => 'string',
          ),
          'TensorboardLogUri' => 
          array (
            'title' => 'TensorboardLogUri',
            'type' => 'string',
          ),
          'Labels' => 
          array (
            'title' => 'Labels',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'object',
            ),
          ),
          'UserId' => 
          array (
            'title' => 'UserId',
            'type' => 'string',
          ),
          'OwnerId' => 
          array (
            'title' => 'OwnerId',
            'type' => 'string',
          ),
          'GmtCreateTime' => 
          array (
            'title' => 'GmtCreatedTime',
            'type' => 'string',
          ),
          'GmtModifiedTime' => 
          array (
            'title' => 'GmtModifiedTime',
            'type' => 'string',
          ),
        ),
      ),
      'ExperimentLabel' => 
      array (
        'title' => 'A short description of struct',
        'description' => '实验标签',
        'type' => 'object',
        'properties' => 
        array (
          'Key' => 
          array (
            'title' => 'Key of Experiment Label',
            'type' => 'string',
            'example' => 'key',
          ),
          'Value' => 
          array (
            'title' => 'Value of Experiment Label',
            'type' => 'string',
            'example' => 'value',
          ),
          'GmtCreateTime' => 
          array (
            'title' => 'Create time',
            'type' => 'string',
            'example' => '2023-12-27T03:30:04Z',
          ),
          'GmtModifiedTime' => 
          array (
            'title' => 'Modified time',
            'type' => 'string',
            'example' => '2023-12-27T03:30:04Z',
          ),
          'ExperimentId' => 
          array (
            'title' => 'ExperimentId',
            'type' => 'string',
            'example' => 'exp-890waerw09a0f',
          ),
        ),
      ),
      'Label' => 
      array (
        'title' => 'A short description of struct',
        'description' => '标签结构。',
        'type' => 'object',
        'properties' => 
        array (
          'Key' => 
          array (
            'title' => '标签的key',
            'description' => '标签的key。长度限制128字节，不支持“=”与“,”。',
            'type' => 'string',
            'example' => 'env',
          ),
          'Value' => 
          array (
            'title' => '标签的value',
            'description' => '标签的value。长度限制128字节，不支持“=”与“,”。',
            'type' => 'string',
            'example' => 'test',
          ),
        ),
      ),
      'LabelInfo' => 
      array (
        'title' => 'A short description of struct',
        'description' => 'TrialLabelInfo',
        'type' => 'object',
        'properties' => 
        array (
          'Key' => 
          array (
            'title' => 'Key of Label',
            'type' => 'string',
            'example' => 'key',
          ),
          'Value' => 
          array (
            'title' => 'Value of Label',
            'type' => 'string',
            'example' => 'value',
          ),
        ),
      ),
      'Model' => 
      array (
        'title' => 'A short description of struct',
        'description' => '模型。',
        'type' => 'object',
        'properties' => 
        array (
          'ModelId' => 
          array (
            'title' => '模型ID',
            'description' => '模型ID。',
            'type' => 'string',
            'example' => 'model-1123*****',
          ),
          'ModelName' => 
          array (
            'title' => '模型名字',
            'description' => '模型名称。',
            'type' => 'string',
            'example' => '情感分析',
          ),
          'GmtCreateTime' => 
          array (
            'title' => '创建时间',
            'description' => '创建模型UTC时间，格式iso8601。',
            'type' => 'string',
            'example' => '2021-01-21T17:12:35Z',
          ),
          'GmtModifiedTime' => 
          array (
            'title' => '最后更新时间',
            'description' => '最后更新模型UTC时间，格式iso8601。',
            'type' => 'string',
            'example' => '2021-01-21T17:12:35Z',
          ),
          'WorkspaceId' => 
          array (
            'title' => '工作空间ID',
            'description' => '工作空间ID。',
            'type' => 'string',
            'example' => '234**',
          ),
          'UserId' => 
          array (
            'title' => '创建模型的用户ID',
            'description' => '用户ID。',
            'type' => 'string',
            'example' => '1557702098******',
          ),
          'OwnerId' => 
          array (
            'title' => '云账号ID',
            'description' => '主账号ID',
            'type' => 'string',
            'example' => '1557702098******',
          ),
          'ModelDescription' => 
          array (
            'title' => '模型的描述',
            'description' => '模型描述。',
            'type' => 'string',
            'example' => '情感分析。',
          ),
          'Accessibility' => 
          array (
            'title' => '可见性',
            'description' => '工作空间可见度。默认为PRIVATE，表示工作空间内自己以及管理员可见。PUBLIC为工作空间所有用户可见。',
            'type' => 'string',
            'enumValueTitles' => 
            array (
              'PUBLIC' => 'PUBLIC',
              'PRIVATE' => 'PRIVATE',
            ),
            'example' => 'PUBLIC',
          ),
          'LatestVersion' => 
          array (
            'title' => '最新版本',
            'description' => '模型最新版本。',
            '$ref' => '#/components/schemas/ModelVersion',
          ),
          'Labels' => 
          array (
            'title' => '标签列表',
            'description' => '标签列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '标签。',
              '$ref' => '#/components/schemas/Label',
            ),
          ),
          'OrderNumber' => 
          array (
            'title' => '模型序号',
            'description' => '模型序号',
            'type' => 'integer',
            'format' => 'int64',
            'example' => '101',
          ),
          'Origin' => 
          array (
            'title' => '模型源',
            'description' => '模型源。描述源模型所属社区或组织，如ModelScope，HuggingFace等。',
            'type' => 'string',
            'example' => 'ModelScope',
          ),
          'Domain' => 
          array (
            'title' => '领域',
            'description' => '领域。描述模型解决问题所属领域，如nlp（自然语言处理），cv（计算机视觉）等。',
            'type' => 'string',
            'example' => 'nlp',
          ),
          'Task' => 
          array (
            'title' => '任务',
            'description' => '任务。描述模型解决的具体问题，如text-classification（文本分类）等。',
            'type' => 'string',
            'example' => 'text-classifiaction',
          ),
          'ModelDoc' => 
          array (
            'title' => '模型介绍文档',
            'description' => '模型介绍文档。',
            'type' => 'string',
            'example' => 'https://***.md',
          ),
          'Provider' => 
          array (
            'title' => '模型提供者',
            'description' => '模型提供者。',
            'type' => 'string',
            'example' => 'pai',
          ),
          'ExtraInfo' => 
          array (
            'title' => '其它信息',
            'description' => '其它信息。',
            'type' => 'object',
            'example' => '{
	"RatingCount": 2866,
	"Rating": 4.94,
	"FavoriteCount": 34992,
	"CommentCount": 754,
	"CoverUris": ["https://e***u.oss-cn-hangzhou.aliyuncs.com/drea***w.png"],
	"TippedAmountCount": 32,
	"DownloadCount": 606056
}',
          ),
          'ModelType' => 
          array (
            'title' => '模型类型',
            'description' => '模型类型。如Checkpoint，LoRA等。',
            'type' => 'string',
            'example' => 'Checkpoint',
          ),
        ),
      ),
      'ModelVersion' => 
      array (
        'title' => 'A short description of struct',
        'description' => '模型版本。',
        'type' => 'object',
        'properties' => 
        array (
          'VersionName' => 
          array (
            'title' => '版本名，模型下唯一',
            'description' => '模型版本，模型下唯一。若不填，则默认`0.1.0`为第一个版本，之后子版本号加1，如第二个版本将默认为`0.2.0`。

版本号由主版本号，子版本号，阶段版本号组成，由`.`分割，其中主版本号，子版本号为数字，阶段版本号以数字开头，接`_`加字母组成。如：1.1.0 或 2.3.4_beta。

正则表达参考：`"^\\\\d+\\\\.\\\\d+\\\\.\\\\d+(_\\\\w+)?$"`',
            'type' => 'string',
            'example' => '0.1.0',
          ),
          'GmtCreateTime' => 
          array (
            'title' => '创建时间',
            'description' => '创建模型UTC时间，格式iso8601。',
            'type' => 'string',
            'example' => '2021-01-21T17:12:35Z',
          ),
          'GmtModifiedTime' => 
          array (
            'title' => '最后更新时间',
            'description' => '最后更新模型UTC时间，格式iso8601。',
            'type' => 'string',
            'example' => '2021-01-21T17:12:35Z',
          ),
          'UserId' => 
          array (
            'title' => '创建模型版本的用户ID',
            'description' => '用户ID。',
            'type' => 'string',
            'example' => '155770209******',
          ),
          'OwnerId' => 
          array (
            'title' => '云账号ID',
            'description' => '主账号ID。',
            'type' => 'string',
            'example' => '155770209******',
          ),
          'Uri' => 
          array (
            'title' => '版本的URI',
            'description' => '模型版本Uri，即模型存储位置。可以为模型的http(s)地址，如：`https://myweb.com/mymodel.tar.gz`；若模型在OSS中，格式为`oss://<bucket>.<endpoint>/object`，endpoint可以在OSS控制台查询，样例：`oss://mybucket.oss-cn-beijing.aliyuncs.com/mypath/`。',
            'type' => 'string',
            'example' => 'oss://mybucket.oss-cn-beijing.aliyuncs.com/mypath/',
          ),
          'VersionDescription' => 
          array (
            'title' => '版本的描述',
            'description' => '模型版本描述。',
            'type' => 'string',
            'example' => '情感分析。',
          ),
          'Labels' => 
          array (
            'title' => '标签列表',
            'description' => '标签列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '标签。',
              '$ref' => '#/components/schemas/Label',
            ),
          ),
          'FormatType' => 
          array (
            'title' => '模型格式',
            'description' => '模型格式。
- OfflineModel
- SavedModel
- Keras H5
- Frozen Pb
- Caffe Prototxt
- TorchScript
- XGBoost
- PMML
- AlinkModel
- ONNX',
            'type' => 'string',
            'enumValueTitles' => 
            array (
              'OfflineModel' => 'OfflineModel',
              'SavedModel' => 'SavedModel',
              'Keras H5' => 'Keras H5',
              'Frozen Pb' => 'Frozen Pb',
              'Caffe Prototxt' => 'Caffe Prototxt',
              'TorchScript' => 'TorchScript',
              'XGBoost' => 'XGBoost',
              'PMML' => 'PMML',
              'AlinkModel' => 'AlinkModel',
              'ONNX' => 'ONNX',
            ),
            'example' => 'SavedModel',
          ),
          'FrameworkType' => 
          array (
            'title' => '模型框架',
            'description' => '模型框架。
- Pytorch
- XGBoost
- Keras
- Caffe
- Alink
- Xflow
- TensorFlow',
            'type' => 'string',
            'enumValueTitles' => 
            array (
              'Pytorch' => 'Pytorch',
              'XGBoost' => 'XGBoost',
              'Keras' => 'Keras',
              'Caffe' => 'Caffe',
              'Alink' => 'Alink',
              'Xflow' => 'Xflow',
              'TensorFlow' => 'TensorFlow',
            ),
            'example' => 'TensorFlow',
          ),
          'Options' => 
          array (
            'title' => '扩展字段',
            'description' => '扩展字段。JsonString类型。',
            'type' => 'string',
            'example' => '{}',
          ),
          'Metrics' => 
          array (
            'title' => '指标',
            'description' => '模型指标。',
            'type' => 'object',
            'example' => '{
  "Results": [{
    "Dataset": {
      "DatasetId": "d-sdkjanksaklerhfd"
    },
    "Metrics": {
      "cer": 0.175
    }
  }, {
    "Dataset": {
      "Uri": "oss://xxxx/"
    },
    "Metrics": {
      "cer": 0.172
    }
  }]
}',
          ),
          'TrainingSpec' => 
          array (
            'title' => '训练配置',
            'description' => '训练配置。用于微调，增量训练的配置。',
            'type' => 'object',
            'example' => '{}',
          ),
          'InferenceSpec' => 
          array (
            'title' => '下游配置',
            'description' => '描述如何应用于下游的推理应用：如描述EAS的processor/container等，如：
`{
    "processor": "tensorflow_gpu_1.12"
}`',
            'type' => 'object',
            'example' => '{
	"processor": "tensorflow_gpu_1.12"
}',
          ),
          'EvaluationSpec' => 
          array (
            'title' => '评测配置',
            'description' => '评测配置',
            'type' => 'object',
          ),
          'SourceType' => 
          array (
            'title' => '来源类型',
            'description' => '模型来源类型，默认为Custom。

- Custom
自定义
- PAIFlow
PAI工作流
- TrainingService
PAI训练服务',
            'type' => 'string',
            'enumValueTitles' => 
            array (
              'PAIFlow' => 'PAIFlow',
              'Custom' => 'Custom',
              'TrainingService' => 'TrainingService',
            ),
            'example' => 'PAIFlow',
          ),
          'SourceId' => 
          array (
            'title' => '来源ID',
            'description' => '来源ID。

* 来源类型为Custom时，该字段不做限制。

* 来源为PAIFlow，TrainingService时，格式为 
```
region=<region_id>,workspaceId=<workspace_id>,kind=<kind>,id=<id>
```
region 为阿里云区域 id；workspacceId 为工作空间 id；kind 为类型，取值：PipelineRun（PAIFlow工作流），ServiceJob（训练服务）；id 为唯一标识。',
            'type' => 'string',
            'example' => 'region=cn-shanghai,workspaceId=13**,kind=PipelineRun,id=run-sakdb****jdf',
          ),
          'ApprovalStatus' => 
          array (
            'title' => '准入状态',
            'description' => '准入状态，取值如下：
- Pending：待定。
- Approved：允许上线。
- Rejected：不允许上线。',
            'type' => 'string',
            'example' => 'Approved',
          ),
          'ExtraInfo' => 
          array (
            'title' => '其它信息',
            'description' => '其它信息。',
            'type' => 'object',
            'example' => '{
	"CoverUris": ["https://e***u.oss-cn-hangzhou.aliyuncs.com/st****017.preview.png"],
	"TrainedWords": ["albedo_overlord"]
}',
          ),
        ),
      ),
      'ServiceTemplate' => 
      array (
        'title' => 'A short description of struct',
        'description' => '服务模版。',
        'type' => 'object',
        'properties' => 
        array (
          'ServiceTemplateId' => 
          array (
            'title' => '服务模版ID',
            'description' => '服务模版ID。',
            'type' => 'string',
            'example' => 'st-asdkjf**skdhh',
          ),
          'ServiceTemplateName' => 
          array (
            'title' => '服务模版名称',
            'description' => '服务模版名称。',
            'type' => 'string',
            'example' => 'foo',
          ),
          'GmtCreateTime' => 
          array (
            'title' => '创建时间',
            'description' => '创建时间。',
            'type' => 'string',
            'example' => '2021-01-21T17:12:35Z',
          ),
          'GmtModifiedTime' => 
          array (
            'title' => '更新时间',
            'description' => '更新时间。',
            'type' => 'string',
            'example' => '2021-01-21T17:12:35Z',
          ),
          'UserId' => 
          array (
            'title' => '创建者ID',
            'description' => '创建者ID。',
            'type' => 'string',
            'example' => '155770209****904',
          ),
          'OwnerId' => 
          array (
            'title' => '主账号ID',
            'description' => '主账号ID。',
            'type' => 'string',
            'example' => '155770209****904',
          ),
          'OrderNumber' => 
          array (
            'title' => '序号',
            'description' => '序号。',
            'type' => 'integer',
            'format' => 'int64',
            'example' => '1',
          ),
          'Provider' => 
          array (
            'title' => '提供者',
            'description' => '提供者。',
            'type' => 'string',
            'example' => 'pai',
          ),
          'ServiceTemplateDoc' => 
          array (
            'title' => '服务模版文档',
            'description' => '服务模版文档。',
            'type' => 'string',
            'example' => 'https://***.md',
          ),
          'ServiceTemplateDescription' => 
          array (
            'title' => '描述',
            'description' => '描述。',
            'type' => 'string',
            'example' => '这里是一个描述。',
          ),
          'InferenceSpec' => 
          array (
            'title' => '模版配置',
            'description' => '模版配置。',
            'type' => 'object',
            'example' => '{     "processor": "tensorflow_gpu_1.12" }',
          ),
          'Labels' => 
          array (
            'title' => '标签列表',
            'description' => '标签列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '标签。',
              '$ref' => '#/components/schemas/Label',
            ),
          ),
        ),
      ),
      'Trial' => 
      array (
        'title' => 'A short description of struct',
        'description' => 'Trial',
        'type' => 'object',
        'properties' => 
        array (
          'Name' => 
          array (
            'title' => 'Name',
            'type' => 'string',
          ),
          'TrialId' => 
          array (
            'title' => 'TrialId',
            'type' => 'string',
          ),
          'SourceType' => 
          array (
            'title' => 'SourceType',
            'type' => 'string',
          ),
          'SourceId' => 
          array (
            'title' => 'SourceId',
            'type' => 'string',
          ),
          'WorkspaceId' => 
          array (
            'title' => 'WorkspaceId',
            'type' => 'string',
          ),
          'ExperimentId' => 
          array (
            'title' => 'ExperimentId',
            'type' => 'string',
          ),
          'Labels' => 
          array (
            'title' => 'Labels',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'object',
            ),
          ),
          'UserId' => 
          array (
            'title' => 'UserId',
            'type' => 'string',
          ),
          'OwnerId' => 
          array (
            'title' => 'OwnerId',
            'type' => 'string',
          ),
          'GmtCreateTime' => 
          array (
            'title' => 'GmtCreateTime',
            'type' => 'string',
          ),
          'GmtModifiedTime' => 
          array (
            'title' => 'GmtModifiedTime',
            'type' => 'string',
          ),
          'Accessibility' => 
          array (
            'title' => 'Accessibility',
            'type' => 'string',
          ),
        ),
      ),
      'TrialLabel' => 
      array (
        'title' => 'A short description of struct',
        'description' => 'TrialLabel',
        'type' => 'object',
        'properties' => 
        array (
          'Key' => 
          array (
            'title' => 'Key of Trial Label',
            'type' => 'string',
            'example' => 'key',
          ),
          'Value' => 
          array (
            'title' => 'Value of Trial Label',
            'type' => 'string',
            'example' => 'value',
          ),
          'GmtCreateTime' => 
          array (
            'title' => 'Create time',
            'type' => 'string',
            'example' => '2023-12-27T03:30:04Z',
          ),
          'GmtModifiedTime' => 
          array (
            'title' => 'Modified time',
            'type' => 'string',
            'example' => '2023-12-27T03:30:04Z',
          ),
          'TrialId' => 
          array (
            'title' => 'trl-v0fw9a0sd8f9af',
            'type' => 'string',
          ),
        ),
      ),
    ),
  ),
  'apis' => 
  array (
    'AddImage' => 
    array (
      'summary' => '添加自定义镜像到工作空间。',
      'path' => '/api/v1/images',
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
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '请求结构体。',
            'type' => 'object',
            'properties' => 
            array (
              'Name' => 
              array (
                'title' => '镜像名称',
                'description' => '镜像名称。命名规则如下：
- 长度为1~50个英文字符。
- 支持小写字母、数字和短横线（-），以字母开头。
- 工作空间内可重复。',
                'type' => 'string',
                'required' => true,
                'example' => 'nlp-compression',
              ),
              'Description' => 
              array (
                'title' => '镜像描述',
                'description' => '镜像的描述信息。',
                'type' => 'string',
                'required' => false,
                'example' => 'NLP模型压缩训练镜像',
              ),
              'ImageUri' => 
              array (
                'title' => '镜像地址',
                'description' => '镜像地址，可以重复。关于如何查看镜像地址，详情请参见[ListImage](~~449118~~)。',
                'type' => 'string',
                'required' => true,
                'example' => 'registry.cn-hangzhou.aliyuncs.com/pai-compression/nlp:gpu',
              ),
              'Labels' => 
              array (
                'title' => '镜像标签，是个数组',
                'description' => '镜像标签，是个数组，数组每一项包含key和value两个字段。
官方镜像有如下标签：system.official=true
目前支持添加的键如下：

- system.chipType
- system.dsw.cudaVersion
- system.dsw.fromImageId
- system.dsw.fromInstanceId
- system.dsw.id
- system.dsw.os
- system.dsw.osVersion
- system.dsw.resourceType
- system.dsw.rootImageId
- system.dsw.stage
- system.dsw.tag
- system.dsw.type
- system.framework
- system.origin
- system.pythonVersion
- system.source
- system.supported.dlc
- system.supported.dsw',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '标签。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Key' => 
                    array (
                      'title' => 'Key',
                      'description' => '标签的键。',
                      'type' => 'string',
                      'required' => false,
                      'example' => 'system.chipType',
                    ),
                    'Value' => 
                    array (
                      'title' => 'Value',
                      'description' => '标签的值。',
                      'type' => 'string',
                      'required' => false,
                      'example' => 'GPU',
                    ),
                  ),
                  'required' => false,
                ),
                'required' => false,
              ),
              'WorkspaceId' => 
              array (
                'title' => '工作空间id',
                'description' => '镜像所属的工作空间ID。如何获取工作空间ID，请参见[ListWorkspaces](~~449124~~)。',
                'type' => 'string',
                'required' => false,
                'example' => '15******45',
              ),
              'Accessibility' => 
              array (
                'title' => '可见性 Public 公有 Private 私有',
                'description' => '镜像的可见性，目前支持：

- PUBLIC：当前工作空间所有成员都可以操作。
- PRIVATE：只有创建者可以操作。',
                'type' => 'string',
                'required' => false,
                'example' => 'PUBLIC',
              ),
              'Size' => 
              array (
                'description' => '镜像大小，单位为GB。',
                'type' => 'integer',
                'format' => 'int32',
                'required' => false,
                'example' => '2',
              ),
              'ImageId' => 
              array (
                'description' => '镜像Id，如果不填，系统会自动生成。
格式为image-18位大小写英文字母或者数字。',
                'type' => 'string',
                'required' => false,
                'example' => 'image-k83*****cv',
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
            'description' => '返回结构体。

',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '5A14FA81-DD4E-******-6343FE44B941',
              ),
              'ImageId' => 
              array (
                'title' => '镜像 id',
                'description' => '镜像ID。',
                'type' => 'string',
                'example' => 'image-4c62******53uor',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"5A14FA81-DD4E-******-6343FE44B941\\",\\n  \\"ImageId\\": \\"image-4c62******53uor\\"\\n}","type":"json"}]',
      'title' => '添加镜像',
    ),
    'AddImageLabels' => 
    array (
      'summary' => '为镜像添加标签。',
      'path' => '/api/v1/images/{ImageId}/labels',
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
          'name' => 'ImageId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '镜像Id',
            'description' => '镜像ID。如何获取镜像ID，请参见[ListImages](~~449118~~)  。',
            'type' => 'string',
            'required' => true,
            'example' => 'image-4c62******53uor
',
          ),
        ),
        1 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'title' => '数据',
            'description' => '镜像标签。',
            'type' => 'object',
            'properties' => 
            array (
              'Labels' => 
              array (
                'title' => '标签',
                'description' => '镜像标签列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '镜像标签。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Key' => 
                    array (
                      'title' => 'Key',
                      'description' => '标签的键，目前允许添加的键如下

- system.chipType
- system.dsw.cudaVersion
- system.dsw.fromImageId
- system.dsw.fromInstanceId
- system.dsw.id
- system.dsw.os
- system.dsw.osVersion
- system.dsw.resourceType
- system.dsw.rootImageId
- system.dsw.stage
- system.dsw.tag
- system.dsw.type
- system.framework
- system.origin
- system.pythonVersion
- system.source
- system.supported.dlc
- system.supported.dsw',
                      'type' => 'string',
                      'required' => false,
                      'example' => 'system.chipType',
                    ),
                    'Value' => 
                    array (
                      'title' => 'Value',
                      'description' => '标签的值。',
                      'type' => 'string',
                      'required' => false,
                      'example' => 'GPU',
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
            'description' => '返回结构体。

',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '5A14FA81-DD4E-******-6343FE44B941',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"5A14FA81-DD4E-******-6343FE44B941\\"\\n}","type":"json"}]',
      'title' => '添加镜像标签',
    ),
    'GetImage' => 
    array (
      'summary' => '获取镜像详情。',
      'path' => '/api/v1/images/{ImageId}',
      'methods' => 
      array (
        0 => 'get',
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
          'name' => 'ImageId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '镜像id',
            'description' => '镜像ID。如何获取镜像ID，请参见[ListImages](~~449118~~)  。',
            'type' => 'string',
            'required' => true,
            'example' => 'image-4c62******53uor',
          ),
        ),
        1 => 
        array (
          'name' => 'Verbose',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '是否显示非必要信息：Labels',
            'description' => '是否显示非必要信息，非必要信息目前包含Labels。
取值如下：
- false（默认值）：不显示非必要信息。
- true：显示非必要信息。',
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
            'description' => '返回结构体。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '5A14FA81-DD4E-******-6343FE44B941',
              ),
              'GmtCreateTime' => 
              array (
                'title' => '创建 UTC 时间，日期格式 iso8601',
                'description' => '镜像的创建UTC时间，格式ISO8601。',
                'type' => 'string',
                'example' => '2021-01-21T17:12:35.232Z',
              ),
              'GmtModifiedTime' => 
              array (
                'title' => '创建 UTC 时间，日期格式 iso8601',
                'description' => '镜像的修改UTC时间，格式ISO8601。',
                'type' => 'string',
                'example' => '2021-01-21T17:12:35.232Z',
              ),
              'Name' => 
              array (
                'title' => '镜像名称',
                'description' => '镜像名称。',
                'type' => 'string',
                'example' => 'nlp-compression
',
              ),
              'Description' => 
              array (
                'title' => '描述',
                'description' => '镜像描述。',
                'type' => 'string',
                'example' => 'NLP模型压缩训练镜像
',
              ),
              'ImageUri' => 
              array (
                'title' => '镜像地址，包含版本号',
                'description' => '镜像地址，包含版本号。',
                'type' => 'string',
                'example' => 'registry.cn-hangzhou.aliyuncs.******ession/nlp:gpu
',
              ),
              'UserId' => 
              array (
                'title' => '创建人',
                'description' => '创建镜像的UID。',
                'type' => 'string',
                'example' => '15577******8921',
              ),
              'ParentUserId' => 
              array (
                'title' => '创建人父账户',
                'description' => '创建者的阿里云账号。',
                'type' => 'string',
                'example' => '15577******8921',
              ),
              'Labels' => 
              array (
                'title' => '镜像标签',
                'description' => '镜像标签列表，数组类型，数组每一项包含Key和Value两个字段。
官方镜像带有标签：key为system.official；value为true。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '镜像标签。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Key' => 
                    array (
                      'title' => 'Key',
                      'description' => '标签的键。',
                      'type' => 'string',
                      'example' => 'system.chipType
',
                    ),
                    'Value' => 
                    array (
                      'title' => 'Value',
                      'description' => '标签的值。',
                      'type' => 'string',
                      'example' => 'GPU',
                    ),
                  ),
                ),
              ),
              'WorkspaceId' => 
              array (
                'title' => '工作空间id',
                'description' => '镜像所属的工作空间ID。',
                'type' => 'string',
                'example' => '15945',
              ),
              'Accessibility' => 
              array (
                'title' => '可见性',
                'description' => '镜像的可见性，可能值：
- PUBLIC：当前工作空间所有成员都可以操作。
- PRIVATE：只有创建者可以操作。',
                'type' => 'string',
                'example' => 'PUBLIC',
              ),
              'Size' => 
              array (
                'description' => '镜像大小，单位为GB。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '10',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"5A14FA81-DD4E-******-6343FE44B941\\",\\n  \\"GmtCreateTime\\": \\"2021-01-21T17:12:35.232Z\\",\\n  \\"GmtModifiedTime\\": \\"2021-01-21T17:12:35.232Z\\",\\n  \\"Name\\": \\"nlp-compression\\\\n\\",\\n  \\"Description\\": \\"NLP模型压缩训练镜像\\\\n\\",\\n  \\"ImageUri\\": \\"registry.cn-hangzhou.aliyuncs.******ession/nlp:gpu\\\\n\\",\\n  \\"UserId\\": \\"15577******8921\\",\\n  \\"ParentUserId\\": \\"15577******8921\\",\\n  \\"Labels\\": [\\n    {\\n      \\"Key\\": \\"system.chipType\\\\n\\",\\n      \\"Value\\": \\"GPU\\"\\n    }\\n  ],\\n  \\"WorkspaceId\\": \\"15945\\",\\n  \\"Accessibility\\": \\"PUBLIC\\",\\n  \\"Size\\": 10\\n}","type":"json"}]',
      'title' => '获取镜像',
    ),
    'ListImageLabels' => 
    array (
      'summary' => '获取镜像标签列表。',
      'path' => '/api/v1/image/labels',
      'methods' => 
      array (
        0 => 'get',
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
          'name' => 'LabelKeys',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '标签列表，以逗号分隔',
            'description' => '标签键的列表，以半角逗号（,）分隔。
系统标签以system开头，与LabelFilter分别独立生效。',
            'type' => 'string',
            'required' => false,
            'example' => 'system.framework,system.official',
          ),
        ),
        1 => 
        array (
          'name' => 'LabelFilter',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'image过滤条件，获取满足条件的image的所有label',
            'description' => '标签过滤条件，多个条件以逗号分隔。
单个条件过滤格式为`key=value`。
与LabelKeys分别独立生效。',
            'type' => 'string',
            'required' => false,
            'example' => 'system.framework=XGBoost 1.6.0,system.official=true',
          ),
        ),
        2 => 
        array (
          'name' => 'ImageId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '镜像id',
            'description' => '镜像ID。如何获取镜像ID，请参见[ListImages](~~449118~~)  。',
            'type' => 'string',
            'required' => false,
            'example' => 'image-4c62******53uor
',
          ),
        ),
        3 => 
        array (
          'name' => 'WorkspaceId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '工作空间id',
            'description' => '工作空间ID。如何获取工作空间ID，请参见[ListWorkspaces](~~449124~~)。',
            'type' => 'string',
            'required' => false,
            'example' => '12345',
          ),
        ),
        4 => 
        array (
          'name' => 'Region',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '地域',
            'description' => '镜像所属地域。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-shanghai',
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
            'description' => '返回结构体。

',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '5A14FA81-DD4E-******-6343FE44B941',
              ),
              'Labels' => 
              array (
                'title' => '镜像标签',
                'description' => '镜像标签列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '镜像标签。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Key' => 
                    array (
                      'title' => '键',
                      'description' => '标签的键。',
                      'type' => 'string',
                      'example' => 'system.chipType',
                    ),
                    'Value' => 
                    array (
                      'title' => '值',
                      'description' => '标签的值。',
                      'type' => 'string',
                      'example' => 'GPU',
                    ),
                  ),
                ),
              ),
              'TotalCount' => 
              array (
                'title' => '符合过滤条件的数量',
                'description' => '符合过滤条件的镜像标签列表数量。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '2',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"5A14FA81-DD4E-******-6343FE44B941\\",\\n  \\"Labels\\": [\\n    {\\n      \\"Key\\": \\"system.chipType\\",\\n      \\"Value\\": \\"GPU\\"\\n    }\\n  ],\\n  \\"TotalCount\\": 2\\n}","type":"json"}]',
      'title' => '获取镜像标签列表',
    ),
    'ListImages' => 
    array (
      'summary' => '获取镜像列表。',
      'path' => '/api/v1/images',
      'methods' => 
      array (
        0 => 'get',
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
          'name' => 'Name',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '镜像名称，支持模糊搜索',
            'description' => '镜像名称，支持模糊搜索。',
            'type' => 'string',
            'required' => false,
            'example' => 'tensorflow_2.9',
          ),
        ),
        1 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '分页，从1开始，默认1',
            'description' => '镜像列表的页码。起始值为1，默认为1。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        2 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '页大小，默认20',
            'description' => '分页查询时设置的每页行数。默认为20。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '20',
          ),
        ),
        3 => 
        array (
          'name' => 'SortBy',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '排序字段',
            'description' => '分页查询时的排序字段。目前GmtCreateTime字段用于排序。',
            'type' => 'string',
            'required' => false,
            'example' => 'GmtCreateTime',
          ),
        ),
        4 => 
        array (
          'name' => 'Order',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '排序方向： ASC - 升序 DESC - 降序',
            'description' => '分页查询时，对指定的排序字段进行升序或降序，与SortBy结合使用。默认ASC。
- ASC：升序。
- DESC：降序。',
            'type' => 'string',
            'required' => false,
            'example' => 'DESC',
          ),
        ),
        5 => 
        array (
          'name' => 'Labels',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '过滤值 以逗号分隔',
            'description' => '标签过滤条件，多个条件以半角逗号（,）分隔。
单个条件过滤格式为`Key=Value`。
Key支持如下值：

- system.chipType
- system.dsw.cudaVersion
- system.dsw.fromImageId
- system.dsw.fromInstanceId
- system.dsw.id
- system.dsw.os
- system.dsw.osVersion
- system.dsw.resourceType
- system.dsw.rootImageId
- system.dsw.stage
- system.dsw.tag
- system.dsw.type
- system.framework
- system.origin
- system.pythonVersion
- system.source
- system.supported.dlc
- system.supported.dsw',
            'type' => 'string',
            'required' => false,
            'example' => 'system.framework=XGBoost 1.6.0,system.official=true
',
          ),
        ),
        6 => 
        array (
          'name' => 'Verbose',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '是否显示非必要信息：Labels',
            'description' => '是否显示非必要信息，非必要信息目前包含Labels。取值如下：

- true：包含非必要信息。
- false：不包含非必要信息。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
          ),
        ),
        7 => 
        array (
          'name' => 'WorkspaceId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '工作空间id',
            'description' => '工作空间ID。如何获取工作空间ID，请参见[ListWorkspaces](~~449124~~)。',
            'type' => 'string',
            'required' => false,
            'example' => '20******55',
          ),
        ),
        8 => 
        array (
          'name' => 'UserId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '创建者',
            'description' => '创建者的阿里云账号UID。',
            'type' => 'string',
            'required' => false,
            'example' => '155**********904',
          ),
        ),
        9 => 
        array (
          'name' => 'ParentUserId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '创建者的阿里云账号UID。',
            'type' => 'string',
            'required' => false,
            'example' => '155**********904',
          ),
        ),
        10 => 
        array (
          'name' => 'Query',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '模糊搜索镜像名称以及描述。',
            'type' => 'string',
            'required' => false,
            'example' => 'name',
          ),
        ),
        11 => 
        array (
          'name' => 'Accessibility',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '镜像的可见性，目前只对自定义镜像生效。

- PUBLIC表示公开。
- PRIVATE表示私有。',
            'type' => 'string',
            'required' => false,
            'example' => 'PUBLIC',
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
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '5A14FA81-DD4E-******-6343FE44B941',
              ),
              'TotalCount' => 
              array (
                'title' => '总数',
                'description' => '返回的镜像总量。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '2',
              ),
              'Images' => 
              array (
                'title' => '镜像列表',
                'description' => '镜像列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '镜像详情。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Name' => 
                    array (
                      'title' => '镜像名称',
                      'description' => '镜像名称。',
                      'type' => 'string',
                      'example' => 'tensorflow_2.9',
                    ),
                    'GmtCreateTime' => 
                    array (
                      'title' => '创建 UTC 时间，日期格式 iso8601',
                      'description' => '创建UTC时间，日期格式为ISO8601。',
                      'type' => 'string',
                      'example' => '2021-01-21T17:12:35.232Z',
                    ),
                    'Description' => 
                    array (
                      'title' => '镜像描述',
                      'description' => '镜像描述。',
                      'type' => 'string',
                      'example' => 'desc',
                    ),
                    'ImageUri' => 
                    array (
                      'title' => '镜像地址，包含版本号',
                      'description' => '镜像地址，包含版本号。',
                      'type' => 'string',
                      'example' => 'registry-vpc.cn-shanghai.aliyuncs.com/******/pai:python_3.8.10-tensorflow_2.9.0',
                    ),
                    'Labels' => 
                    array (
                      'title' => '镜像标签，是个map',
                      'description' => '镜像标签列表。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '镜像标签。',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'Key' => 
                          array (
                            'title' => 'Key',
                            'description' => '标签的键。',
                            'type' => 'string',
                            'example' => 'system.chipType',
                          ),
                          'Value' => 
                          array (
                            'title' => 'Value',
                            'description' => '标签的值。',
                            'type' => 'string',
                            'example' => 'GPU',
                          ),
                        ),
                      ),
                    ),
                    'ImageId' => 
                    array (
                      'title' => '镜像id',
                      'description' => '镜像ID。',
                      'type' => 'string',
                      'example' => 'image-tzi7f9******s45t',
                    ),
                    'Accessibility' => 
                    array (
                      'title' => '可见性',
                      'description' => '镜像的可见性，可能值：
- PUBLIC：当前工作空间所有成员都可以操作。
- PRIVATE：只有创建者可以操作。',
                      'type' => 'string',
                      'example' => 'PUBLIC',
                    ),
                    'GmtModifiedTime' => 
                    array (
                      'title' => '修改时间',
                      'description' => '修改UTC时间，格式为ISO8601。',
                      'type' => 'string',
                      'example' => '2021-01-21T17:12:35.232Z
',
                    ),
                    'UserId' => 
                    array (
                      'title' => '创建人',
                      'description' => '创建者的阿里云账号UID。',
                      'type' => 'string',
                      'example' => '155**********904',
                    ),
                    'ParentUserId' => 
                    array (
                      'title' => '父创建人',
                      'description' => '创建者的阿里云账号UID。',
                      'type' => 'string',
                      'example' => '155**********904',
                    ),
                    'WorkspaceId' => 
                    array (
                      'title' => '工作空间id',
                      'description' => '工作空间ID。',
                      'type' => 'string',
                      'example' => '20******55',
                    ),
                    'Size' => 
                    array (
                      'description' => '镜像大小，单位为GB。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '2',
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"5A14FA81-DD4E-******-6343FE44B941\\",\\n  \\"TotalCount\\": 2,\\n  \\"Images\\": [\\n    {\\n      \\"Name\\": \\"tensorflow_2.9\\",\\n      \\"GmtCreateTime\\": \\"2021-01-21T17:12:35.232Z\\",\\n      \\"Description\\": \\"desc\\",\\n      \\"ImageUri\\": \\"registry-vpc.cn-shanghai.aliyuncs.com/******/pai:python_3.8.10-tensorflow_2.9.0\\",\\n      \\"Labels\\": [\\n        {\\n          \\"Key\\": \\"system.chipType\\",\\n          \\"Value\\": \\"GPU\\"\\n        }\\n      ],\\n      \\"ImageId\\": \\"image-tzi7f9******s45t\\",\\n      \\"Accessibility\\": \\"PUBLIC\\",\\n      \\"GmtModifiedTime\\": \\"2021-01-21T17:12:35.232Z\\\\n\\",\\n      \\"UserId\\": \\"155**********904\\",\\n      \\"ParentUserId\\": \\"155**********904\\",\\n      \\"WorkspaceId\\": \\"20******55\\",\\n      \\"Size\\": 2\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '获取镜像列表',
    ),
    'RemoveImage' => 
    array (
      'summary' => '删除镜像。',
      'path' => '/api/v1/images/{ImageId}',
      'methods' => 
      array (
        0 => 'delete',
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
          'name' => 'ImageId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '镜像 id',
            'description' => '镜像ID。如何获取镜像ID，请参见[ListImages](~~449118~~)  。',
            'type' => 'string',
            'required' => true,
            'example' => 'image-rbv******c9ks92',
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
            'description' => '返回结构体。

',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '5A14FA81-DD4E-******-6343FE44B941',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"5A14FA81-DD4E-******-6343FE44B941\\"\\n}","type":"json"}]',
      'title' => '删除镜像',
    ),
    'PublishImage' => 
    array (
      'summary' => '发布镜像，把镜像的可见性从PRIVATE变为PUBLIC。',
      'path' => '/api/v1/images/{ImageId}/publish',
      'methods' => 
      array (
        0 => 'put',
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
          'name' => 'ImageId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '镜像Id',
            'description' => '镜像ID。如何获取镜像ID，请参见[ListImages](~~449118~~)  。',
            'type' => 'string',
            'required' => true,
            'example' => 'image-dk******fa',
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
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'A0F049F0-8D69-5BAC-8F10-B******A34C',
              ),
              'ImageId' => 
              array (
                'title' => '镜像 id',
                'description' => '镜像ID。',
                'type' => 'string',
                'example' => 'image-dk******fa',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"A0F049F0-8D69-5BAC-8F10-B******A34C\\",\\n  \\"ImageId\\": \\"image-dk******fa\\"\\n}","type":"json"}]',
      'title' => '发布镜像',
    ),
    'RemoveImageLabels' => 
    array (
      'summary' => '移除镜像标签。',
      'path' => '/api/v1/images/{ImageId}/labels/{LabelKey}',
      'methods' => 
      array (
        0 => 'delete',
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
          'name' => 'ImageId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '镜像 Id',
            'description' => '镜像ID。如何获取镜像ID，请参见[ListImages](~~449118~~)  。',
            'type' => 'string',
            'required' => true,
            'example' => 'image-d8df******dsjfd',
          ),
        ),
        1 => 
        array (
          'name' => 'LabelKey',
          'in' => 'path',
          'schema' => 
          array (
            'title' => 'label 的 key',
            'description' => 'label 的 key',
            'type' => 'string',
            'required' => true,
            'example' => 'key1',
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
            'description' => '返回结构体。

',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '5A14FA81-DD4E-******-6343FE44B941',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"5A14FA81-DD4E-******-6343FE44B941\\"\\n}","type":"json"}]',
      'title' => '移除镜像标签',
    ),
    'CreateWorkspace' => 
    array (
      'summary' => '创建工作空间。',
      'path' => '/api/v1/workspaces',
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
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '请求结构体。',
            'type' => 'object',
            'properties' => 
            array (
              'WorkspaceName' => 
              array (
                'title' => '名字 3-23 个字符, 需要字母开头，只能包含字母下划线和数字，region内唯一',
                'description' => '工作空间名称。格式如下：
- 长度为3~23 个字符，可以包含字母、下划线或数字。
- 必须以大小写字母开头。
- 当前地域内唯一。',
                'type' => 'string',
                'required' => true,
                'example' => 'workspace_example',
              ),
              'Description' => 
              array (
                'title' => '描述，最多80个字符',
                'description' => '工作空间描述，不超过80个字符。',
                'type' => 'string',
                'required' => true,
                'example' => '这是一个工作空间描述示例。',
              ),
              'DisplayName' => 
              array (
                'title' => '显示名称',
                'description' => '建议基于业务属性命名，便于标识工作空间用途。如果不配置，默认为工作空间名称。',
                'type' => 'string',
                'required' => false,
                'example' => 'demo工作空间',
              ),
              'EnvTypes' => 
              array (
                'title' => '环境列表',
                'description' => '工作空间包含的环境：
- 简单模式只有生产环境（prod）。
- 标准模式包含开发环境（dev）和生产环境（prod）。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '环境类型，取值如下：

- dev：开发环境。
- prod：生产环境。',
                  'type' => 'string',
                  'required' => true,
                  'example' => 'dev',
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
            'description' => '返回结构体。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => '请求 id',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '1e195c5116124202371861018d5bde',
              ),
              'WorkspaceId' => 
              array (
                'title' => '工作空间 id',
                'description' => '工作空间ID。',
                'type' => 'string',
                'example' => '1234',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"1e195c5116124202371861018d5bde\\",\\n  \\"WorkspaceId\\": \\"1234\\"\\n}","type":"json"}]',
      'title' => '创建工作空间',
    ),
    'ListWorkspaces' => 
    array (
      'summary' => '获取某个地域下的工作空间列表。',
      'path' => '/api/v1/workspaces',
      'methods' => 
      array (
        0 => 'get',
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
        'abilityTreeCode' => '14203',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATURElearnZBMZHZ',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '分页，从1开始，默认1',
            'description' => '工作空间列表的页码。起始值为1，默认为1。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1',
          ),
        ),
        1 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '页大小，默认20',
            'description' => '分页查询时设置的每页行数，默认为20。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '20',
          ),
        ),
        2 => 
        array (
          'name' => 'SortBy',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '排序字段：CreateTime',
            'description' => '分页查询时的排序字段，默认使用GmtCreateTime。取值如下。
* GmtCreateTime（默认值）：按创建时间。
* GmtModifiedTime：按修改时间。',
            'type' => 'string',
            'required' => false,
            'example' => 'GmtCreateTime',
          ),
        ),
        3 => 
        array (
          'name' => 'Order',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '排序方向： ASC - 升序 DESC - 降序',
            'description' => '分页查询时，对指定的排序字段进行升序或降序。取值如下：
* ASC（默认值）：升序。
* DESC ：降序。',
            'type' => 'string',
            'required' => false,
            'example' => 'ASC',
          ),
        ),
        4 => 
        array (
          'name' => 'WorkspaceName',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '工作空间名字',
            'description' => '工作空间名称。',
            'type' => 'string',
            'required' => false,
            'example' => 'abc',
          ),
        ),
        5 => 
        array (
          'name' => 'ModuleList',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '逗号分割的模块列表，目前填入PAI',
            'description' => '逗号分割的模块列表。默认值：PAI。',
            'type' => 'string',
            'required' => false,
            'example' => 'PAI',
          ),
        ),
        6 => 
        array (
          'name' => 'Status',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '状态',
            'description' => '工作空间状态，目前支持如下值：

- ENABLED：正常。
- INITIALIZING：初始化中。
- FAILURE：失败。
- DISABLED：手动禁用。
- FROZEN：欠费冻结。
- UPDATING：项目更新中。',
            'type' => 'string',
            'required' => false,
            'example' => 'ENABLED',
          ),
        ),
        7 => 
        array (
          'name' => 'Option',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '逗号分隔的选项',
            'description' => '选项，取值如下：
* GetWorkspaces（默认值）：获取工作空间列表，会返回Workspaces。
* GetResourceLimits：获取资源限制，会返回ResourceLimits。',
            'type' => 'string',
            'required' => false,
            'example' => 'GetWorkspaces',
          ),
        ),
        8 => 
        array (
          'name' => 'Verbose',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '是否显示详细信息，默认true',
            'description' => '是否显示工作空间详细信息。取值如下：
- false（默认值）：不显示。
- true：显示。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
          ),
        ),
        9 => 
        array (
          'name' => 'Fields',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'GetWorkspaceFields的Field字段',
            'description' => '工作空间详情的返回字段列表。用于限定返回结果中的工作空间属性。
多个属性用半角逗号（,）分隔。目前只支持Id，表示工作空间ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'Id',
          ),
        ),
        10 => 
        array (
          'name' => 'WorkspaceIds',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '工作空间id列表',
            'description' => '工作空间ID列表。多个工作空间ID用半角逗号（,）分隔。',
            'type' => 'string',
            'required' => false,
            'example' => '123,234',
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
              'RequestId' => 
              array (
                'title' => '请求 id',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '8D7B2E70-F770-505B-A672-09F1D8F2EC1E',
              ),
              'Workspaces' => 
              array (
                'title' => '工作空间列表',
                'description' => '工作空间详情列表，当Option为GetWorkspaces时会返回该列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '工作空间详情。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'WorkspaceId' => 
                    array (
                      'title' => '工作空间 id',
                      'description' => '工作空间ID。',
                      'type' => 'string',
                      'example' => '123',
                    ),
                    'WorkspaceName' => 
                    array (
                      'title' => '工作空间名字',
                      'description' => '工作空间名称。',
                      'type' => 'string',
                      'example' => 'workspace-example',
                    ),
                    'GmtCreateTime' => 
                    array (
                      'title' => '创建 UTC 时间，日期格式 iso8601',
                      'description' => '工作空间创建时间。以ISO8601为标准，并使用UTC+0时间，格式为yyyy-MM-ddTHH:mm:ss.SSSZ。',
                      'type' => 'string',
                      'example' => '2021-01-21T17:12:35.232Z',
                    ),
                    'GmtModifiedTime' => 
                    array (
                      'title' => '修改 UTC 时间，日期格式 iso8601',
                      'description' => '工作空间修改时间。以ISO8601为标准，并使用UTC+0时间，格式为yyyy-MM-ddTHH:mmZ。',
                      'type' => 'string',
                      'example' => '2021-01-21T17:12:35.232Z',
                    ),
                    'Description' => 
                    array (
                      'title' => '描述',
                      'description' => '工作空间描述。',
                      'type' => 'string',
                      'example' => 'workspace description example',
                    ),
                    'Creator' => 
                    array (
                      'title' => '创建人',
                      'description' => '创建者用户ID。',
                      'type' => 'string',
                      'example' => '122424353535',
                    ),
                    'EnvTypes' => 
                    array (
                      'title' => '环境，用作判断简单模式还是标准模式',
                      'description' => '工作空间包含的环境列表。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '工作空间包含的环境，可能值：

- 简单模式只有生产环境（prod）。
- 标准模式包含开发环境（dev）和生产环境（prod）。',
                        'type' => 'string',
                        'example' => 'prod',
                      ),
                    ),
                    'Status' => 
                    array (
                      'title' => '工作空间状态',
                      'description' => '工作空间状态。',
                      'type' => 'string',
                      'example' => 'ENABLED',
                    ),
                    'AdminNames' => 
                    array (
                      'title' => '管理员名字',
                      'description' => '管理员账户名称列表。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '管理员账户名称。',
                        'type' => 'string',
                        'example' => 'demo_test@***.aliyunid.com',
                      ),
                    ),
                    'IsDefault' => 
                    array (
                      'title' => '是否为默认工作空间',
                      'description' => '是否为默认工作空间。',
                      'type' => 'boolean',
                      'example' => 'false',
                    ),
                    'ExtraInfos' => 
                    array (
                      'title' => '附加信息',
                      'description' => '扩展信息，目前包含TenantId，代表租户ID。',
                      'type' => 'object',
                      'example' => '{"TenantId": "4286******98"}',
                    ),
                  ),
                ),
              ),
              'TotalCount' => 
              array (
                'title' => '符合过滤条件的作业数量',
                'description' => '符合查询条件的工作空间总数。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '1',
              ),
              'ResourceLimits' => 
              array (
                'title' => '资源限制',
                'description' => '用户在一个工作空间内允许开通的资源类型和数量限制，当Option为GetResourceLimits时会返回该列表。
目前支持的资源类型包括：
* MaxCompute_share：MaxCompute后付费。
* MaxCompute_isolate：MaxCompute预付费。
* DLC_share：DLC后付费。
* PAI_isolate：PAI预付费。
* PAI_share：PAI后付费。
* DataWorks_isolate：Dataworks预付费。
* DataWorks_share：Dataworks后付费。
',
                'type' => 'object',
                'example' => '{
   "MaxCompute_share": 1,
   "MaxCompute_isolate": 1,
   "DLC_share": 1
}',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"8D7B2E70-F770-505B-A672-09F1D8F2EC1E\\",\\n  \\"Workspaces\\": [\\n    {\\n      \\"WorkspaceId\\": \\"123\\",\\n      \\"WorkspaceName\\": \\"workspace-example\\",\\n      \\"GmtCreateTime\\": \\"2021-01-21T17:12:35.232Z\\",\\n      \\"GmtModifiedTime\\": \\"2021-01-21T17:12:35.232Z\\",\\n      \\"Description\\": \\"workspace description example\\",\\n      \\"Creator\\": \\"122424353535\\",\\n      \\"EnvTypes\\": [\\n        \\"prod\\"\\n      ],\\n      \\"Status\\": \\"ENABLED\\",\\n      \\"AdminNames\\": [\\n        \\"demo_test@***.aliyunid.com\\"\\n      ],\\n      \\"IsDefault\\": false,\\n      \\"ExtraInfos\\": {\\n        \\"TenantId\\": \\"4286******98\\"\\n      }\\n    }\\n  ],\\n  \\"TotalCount\\": 1,\\n  \\"ResourceLimits\\": {\\n    \\"MaxCompute_share\\": 1,\\n    \\"MaxCompute_isolate\\": 1,\\n    \\"DLC_share\\": 1\\n  }\\n}","type":"json"}]',
      'title' => '获取工作空间列表',
      'description' => '您可以通过option参数指定不同的查询选项，来获取不同的工作空间相关信息。',
    ),
    'GetWorkspace' => 
    array (
      'summary' => '获取工作空间详细信息。',
      'path' => '/api/v1/workspaces/{WorkspaceId}',
      'methods' => 
      array (
        0 => 'get',
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
        'abilityTreeCode' => '14101',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATURElearnZBMZHZ',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'WorkspaceId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '工作空间ID。如何获取工作空间ID，请参见 [ListWorkspaces](~~449124~~)。',
            'type' => 'string',
            'required' => true,
            'example' => '12345',
          ),
        ),
        1 => 
        array (
          'name' => 'Verbose',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否显示工作空间Owner等补充信息。取值如下：
- false（默认值）：不显示补充信息。
- true：显示补充信息。',
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
            'description' => '返回结构体。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => '请求 id',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'A0F049F0-8D69-5BAC-8F10-B4DED1B5A34C',
              ),
              'WorkspaceId' => 
              array (
                'title' => '工作空间 id',
                'description' => '工作空间ID。',
                'type' => 'string',
                'example' => '1234',
              ),
              'WorkspaceName' => 
              array (
                'title' => '项目空间名称， region 内唯一',
                'description' => '工作空间名称。',
                'type' => 'string',
                'example' => 'workspace-example',
              ),
              'GmtCreateTime' => 
              array (
                'title' => '创建 UTC 时间，日期格式 iso8601',
                'description' => '工作空间创建UTC时间，时间格式为ISO8601。',
                'type' => 'string',
                'example' => '2021-01-21T17:12:35.232Z',
              ),
              'GmtModifiedTime' => 
              array (
                'title' => '修改 UTC 时间，日期格式 iso8601',
                'description' => '工作空间修改UTC时间，时间格式为ISO8601。',
                'type' => 'string',
                'example' => '2021-01-21T17:12:35.232Z',
              ),
              'DisplayName' => 
              array (
                'title' => '显示名称',
                'description' => '工作空间显示名称。',
                'type' => 'string',
                'example' => 'workspace-example',
              ),
              'Description' => 
              array (
                'title' => '描述',
                'description' => '工作空间描述。',
                'type' => 'string',
                'example' => 'workspace description example',
              ),
              'EnvTypes' => 
              array (
                'title' => '环境，用作判断简单模式还是标准模式',
                'description' => '工作空间包含的环境，取值如下：

* 简单模式只有生产环境（prod）。
* 标准模式包含开发环境（dev）和生产环境（prod）。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '环境类型，可能值：

dev：开发环境。
prod：生产环境。',
                  'type' => 'string',
                  'example' => 'prod',
                ),
              ),
              'Creator' => 
              array (
                'title' => '创建人',
                'description' => '创建者用户ID。',
                'type' => 'string',
                'example' => '1157******94123',
              ),
              'Status' => 
              array (
                'title' => '工作空间状态',
                'description' => '工作空间状态，可能值：

ENABLED：正常。
INITIALIZING：初始化中。
FAILURE：失败。
DISABLED：手动禁用。
FROZEN：欠费冻结。
UPDATING：项目更新中。',
                'type' => 'string',
                'example' => 'ENABLED',
              ),
              'AdminNames' => 
              array (
                'title' => '管理员账户',
                'description' => '管理员账户名称列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '管理员账户名称。当Verbose为true时显示。',
                  'type' => 'string',
                  'example' => 'demo_test@***.aliyunid.com',
                ),
              ),
              'IsDefault' => 
              array (
                'title' => '是否为默认工作空间',
                'description' => '是否为默认工作空间，可能值：
- false：不是默认工作空间。
- true：是默认工作空间。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'ExtraInfos' => 
              array (
                'title' => '附加信息',
                'description' => '附加信息，目前包含TenantId（租户ID）。',
                'type' => 'object',
                'example' => '{"TenantId": "4286******98"}',
              ),
              'Owner' => 
              array (
                'description' => '工作空间所有者ID，当Verbose为true时显示。',
                'type' => 'object',
                'properties' => 
                array (
                  'UserKp' => 
                  array (
                    'description' => '用户UID。',
                    'type' => 'string',
                    'example' => '1157******94123',
                  ),
                  'UserId' => 
                  array (
                    'description' => '用户ID。',
                    'type' => 'string',
                    'example' => '1157******94123',
                  ),
                  'UserName' => 
                  array (
                    'description' => '用户名。',
                    'type' => 'string',
                    'example' => 'mings****t',
                  ),
                  'DisplayName' => 
                  array (
                    'description' => '显示名。',
                    'type' => 'string',
                    'example' => 'mings****t',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"A0F049F0-8D69-5BAC-8F10-B4DED1B5A34C\\",\\n  \\"WorkspaceId\\": \\"1234\\",\\n  \\"WorkspaceName\\": \\"workspace-example\\",\\n  \\"GmtCreateTime\\": \\"2021-01-21T17:12:35.232Z\\",\\n  \\"GmtModifiedTime\\": \\"2021-01-21T17:12:35.232Z\\",\\n  \\"DisplayName\\": \\"workspace-example\\",\\n  \\"Description\\": \\"workspace description example\\",\\n  \\"EnvTypes\\": [\\n    \\"prod\\"\\n  ],\\n  \\"Creator\\": \\"1157******94123\\",\\n  \\"Status\\": \\"ENABLED\\",\\n  \\"AdminNames\\": [\\n    \\"demo_test@***.aliyunid.com\\"\\n  ],\\n  \\"IsDefault\\": true,\\n  \\"ExtraInfos\\": {\\n    \\"TenantId\\": \\"4286******98\\"\\n  },\\n  \\"Owner\\": {\\n    \\"UserKp\\": \\"1157******94123\\",\\n    \\"UserId\\": \\"1157******94123\\",\\n    \\"UserName\\": \\"mings****t\\",\\n    \\"DisplayName\\": \\"mings****t\\"\\n  }\\n}","type":"json"}]',
      'title' => '获取工作空间',
    ),
    'DeleteWorkspace' => 
    array (
      'summary' => '删除工作空间，关联的资源不会释放，需要您自已释放。',
      'path' => '/api/v1/workspaces/{WorkspaceId}',
      'methods' => 
      array (
        0 => 'delete',
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
          'name' => 'WorkspaceId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '工作空间id',
            'description' => '工作空间ID。如何获取工作空间ID，请参见[ListWorkspaces](~~449124~~)。',
            'type' => 'string',
            'required' => true,
            'example' => '123',
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
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '5A14FA81-DD4E-******-6343FE44B941',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"5A14FA81-DD4E-******-6343FE44B941\\"\\n}","type":"json"}]',
      'title' => '删除工作空间',
    ),
    'UpdateWorkspace' => 
    array (
      'summary' => '更新工作空间名称和描述信息。',
      'path' => '/api/v1/workspaces/{WorkspaceId}',
      'methods' => 
      array (
        0 => 'put',
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
          'name' => 'WorkspaceId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '项目空间 id',
            'description' => '工作空间ID。如何获取工作空间ID，请参见[ListWorkspaces](~~449124~~)。',
            'type' => 'string',
            'required' => true,
            'example' => '123',
          ),
        ),
        1 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '请求结构。',
            'type' => 'object',
            'properties' => 
            array (
              'DisplayName' => 
              array (
                'title' => '显示名称',
                'description' => '工作空间显示名称，格式如下。
- 长度为3~23 个字符，可以包含字母、下划线或数字。
- 必须以大小字母开头。
- 当前地域内唯一。',
                'type' => 'string',
                'required' => false,
                'example' => 'workspace-example',
              ),
              'Description' => 
              array (
                'title' => '描述',
                'description' => '工作空间描述信息。',
                'type' => 'string',
                'required' => false,
                'example' => '这是一个示例工作空间。',
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
              'RequestId' => 
              array (
                'title' => '请求 id',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '5A14FA81-DD4E-******-6343FE44B941',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"5A14FA81-DD4E-******-6343FE44B941\\"\\n}","type":"json"}]',
      'title' => '更新工作空间',
    ),
    'GetDefaultWorkspace' => 
    array (
      'summary' => '获取默认工作空间详情。',
      'path' => '/api/v1/defaultWorkspaces',
      'methods' => 
      array (
        0 => 'get',
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
          'name' => 'Verbose',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否显示默认工作空间的详细信息，目前详细信息包含阶段列表详情（Conditions）。取值如下。
- false（默认值）：不显示详细信息。
- true：显示详细信息。',
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
            'description' => '返回结构体。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '5A14FA81-DD4E-******-6343FE44B941',
              ),
              'WorkspaceId' => 
              array (
                'title' => '工作空间 ID',
                'description' => '工作空间ID。',
                'type' => 'string',
                'example' => '1234',
              ),
              'WorkspaceName' => 
              array (
                'title' => '项目空间名称， region 内唯一',
                'description' => '工作空间名称， 同地域内唯一。',
                'type' => 'string',
                'example' => 'workspace-example',
              ),
              'GmtCreateTime' => 
              array (
                'title' => '创建 UTC 时间，日期格式 iso8601',
                'description' => '创建UTC时间，时间格式为ISO8601。',
                'type' => 'string',
                'example' => '2021-01-21T17:12:35.232Z',
              ),
              'GmtModifiedTime' => 
              array (
                'title' => '修改 UTC 时间，日期格式 iso8601',
                'description' => '修改UTC时间，时间格式为ISO8601。',
                'type' => 'string',
                'example' => '2021-01-21T17:12:35.232Z',
              ),
              'DisplayName' => 
              array (
                'title' => '显示名称',
                'description' => '工作空间显示名称。',
                'type' => 'string',
                'example' => 'workspace-example',
              ),
              'Description' => 
              array (
                'title' => '描述',
                'description' => '工作空间描述。',
                'type' => 'string',
                'example' => 'workspace description example',
              ),
              'EnvTypes' => 
              array (
                'title' => '环境，用作判断简单模式还是标准模式，含义见',
                'description' => '工作空间包含的环境，取值如下：
* 简单模式只有生产环境（prod）。
* 标准模式包含开发环境（dev）和生产环境（prod）。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '工作空间包含的环境，可能值：

- dev：开发环境。
- prod：生产环境。',
                  'type' => 'string',
                  'example' => 'prod',
                ),
              ),
              'Creator' => 
              array (
                'title' => '创建人',
                'description' => '创建者的阿里云账号UID。',
                'type' => 'string',
                'example' => '17915******4216
',
              ),
              'Owner' => 
              array (
                'title' => '拥有者',
                'description' => '创建者的阿里云账号UID。',
                'type' => 'object',
                'properties' => 
                array (
                  'UserId' => 
                  array (
                    'title' => '用户id',
                    'description' => '用户UID。',
                    'type' => 'string',
                    'example' => '17915******4216',
                  ),
                  'UserName' => 
                  array (
                    'title' => '用户名',
                    'description' => '用户名。',
                    'type' => 'string',
                    'example' => 'username',
                  ),
                  'UserKp' => 
                  array (
                    'title' => '用户kp',
                    'description' => '用户UID。',
                    'type' => 'string',
                    'example' => '17915******4216',
                  ),
                ),
              ),
              'Status' => 
              array (
                'title' => '工作空间状态',
                'description' => '工作空间状态，可能值：

- ENABLED：正常。
- INITIALIZING：初始化中。
- FAILURE：失败。
- DISABLED：手动禁用。
- FROZEN：欠费冻结。
- UPDATING：项目更新中。',
                'type' => 'string',
                'example' => 'ENABLED',
              ),
              'Conditions' => 
              array (
                'title' => '任务详情 创建默认工作空间会有多个任务依次进行，如果一个任务未开始，不会显示在任务详情里。',
                'description' => '默认工作空间创建流程的阶段列表详情。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '默认工作空间创建流程的阶段详情。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Type' => 
                    array (
                      'title' => '类型',
                      'description' => '任务类型，可能值：

- CREATING：创建中。
- WORKSPACE_CREATED：工作空间创建完成。
- MEMBERS_ADDED：成员添加完成。
- ENABLED：总体完成。',
                      'type' => 'string',
                      'example' => 'CREATING ',
                    ),
                    'Code' => 
                    array (
                      'title' => '返回码，正常是200，其他都是错误',
                      'description' => '返回码。200表示返回正常，其他表示返回异常。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '200',
                    ),
                    'Message' => 
                    array (
                      'title' => '消息',
                      'description' => '请求返回的错误消息。当返回码为200时，该字段为空。',
                      'type' => 'string',
                      'example' => 'Create Failed',
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"5A14FA81-DD4E-******-6343FE44B941\\",\\n  \\"WorkspaceId\\": \\"1234\\",\\n  \\"WorkspaceName\\": \\"workspace-example\\",\\n  \\"GmtCreateTime\\": \\"2021-01-21T17:12:35.232Z\\",\\n  \\"GmtModifiedTime\\": \\"2021-01-21T17:12:35.232Z\\",\\n  \\"DisplayName\\": \\"workspace-example\\",\\n  \\"Description\\": \\"workspace description example\\",\\n  \\"EnvTypes\\": [\\n    \\"prod\\"\\n  ],\\n  \\"Creator\\": \\"17915******4216\\\\n\\",\\n  \\"Owner\\": {\\n    \\"UserId\\": \\"17915******4216\\",\\n    \\"UserName\\": \\"username\\",\\n    \\"UserKp\\": \\"17915******4216\\"\\n  },\\n  \\"Status\\": \\"ENABLED\\",\\n  \\"Conditions\\": [\\n    {\\n      \\"Type\\": \\"CREATING \\",\\n      \\"Code\\": 200,\\n      \\"Message\\": \\"Create Failed\\"\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '获取默认工作空间',
    ),
    'UpdateDefaultWorkspace' => 
    array (
      'summary' => '将某个工作空间指定为默认工作空间。',
      'path' => '/api/v1/defaultWorkspaces',
      'methods' => 
      array (
        0 => 'put',
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
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '请求结构体。',
            'type' => 'object',
            'properties' => 
            array (
              'WorkspaceId' => 
              array (
                'title' => '显示名称',
                'description' => '工作空间ID。如何获取工作空间ID，请参见 [ListWorkspaces](~~449124~~)。',
                'type' => 'string',
                'required' => false,
                'example' => '12345',
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
              'RequestId' => 
              array (
                'title' => '请求 id',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '17915******4216',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"17915******4216\\"\\n}","type":"json"}]',
      'title' => '指定默认工作空间',
    ),
    'GetPermission' => 
    array (
      'summary' => '获取工作空间的权限。',
      'path' => '/api/v1/workspaces/{WorkspaceId}/permissions/{PermissionCode}',
      'methods' => 
      array (
        0 => 'get',
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
        'abilityTreeCode' => '14248',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATURElearnZBMZHZ',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'WorkspaceId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '工作空间 id',
            'description' => '工作空间ID。如何获取工作空间ID，请参见 [ListWorkspaces](~~449124~~)。',
            'type' => 'string',
            'required' => true,
            'example' => '123',
          ),
        ),
        1 => 
        array (
          'name' => 'PermissionCode',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '权限 code',
            'description' => '权限点的名字，region内唯一。权限点介绍，请参见[角色及权限列表](https://pai.console.aliyun.com/?spm=api-workbench.API%20Explorer.0.0.7a862392uO09Se&regionId=cn-shanghai#/workspace/permission)。 如何获取权限点名称，请参见[ListPermissions](~~449132~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'PaiDLC:GetTensorboard
',
          ),
        ),
        2 => 
        array (
          'name' => 'Accessibility',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '待鉴权实例的可见性 PUBLIC表示当前工作空间所有人都可以访问 PRIVATE表示只有Owner可以访问',
            'description' => '访问类型，取值如下。

- PUBLIC：当前工作空间所有成员都可以访问。
- PRIVATE：只有创建者可以访问。',
            'type' => 'string',
            'required' => false,
            'example' => 'PUBLIC',
          ),
        ),
        3 => 
        array (
          'name' => 'Creator',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '创建者',
            'description' => '工作空间权限创建者的阿里云账号UID。',
            'type' => 'string',
            'required' => false,
            'example' => '17915******4216',
          ),
        ),
        4 => 
        array (
          'name' => 'Resource',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
          ),
        ),
        5 => 
        array (
          'name' => 'Option',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
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
              'RequestId' => 
              array (
                'title' => '请求 id',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '5A14FA81-DD4E-******-6343FE44B941',
              ),
              'PermissionCode' => 
              array (
                'title' => '权限',
                'description' => '权限点的名字，同地域内唯一。权限点介绍，请参见[角色及权限列表](https://pai.console.aliyun.com/?spm=api-workbench.API%20Explorer.0.0.7a862392uO09Se&regionId=cn-shanghai#/workspace/permission)。',
                'type' => 'string',
                'example' => 'PaiDLC:ListJobs',
              ),
              'PermissionRules' => 
              array (
                'description' => '权限规则列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '权限规则。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Accessibility' => 
                    array (
                      'title' => '待鉴权实例的可见性 PUBLIC表示当前工作空间所有人都可以访问 PRIVATE表示只有Owner可以访问',
                      'description' => '访问类型，可能值：

- PUBLIC：当前工作空间所有成员都可以操作。
- PRIVATE：只有创建者可以操作。
- ANY：创建者和非创建者都可以操作。',
                      'type' => 'string',
                      'example' => 'PRIVATE',
                    ),
                    'EntityAccessType' => 
                    array (
                      'title' => '存取类型 CREATOR 代表能看自已创建的 OTHERS 代表可以看别人创建的 ALL代表所有',
                      'description' => '存取类型。
当Accessibility为PUBLIC，所有用户都能操作，此值无效；
当Accessibility为PRIVATE，EntityAccessType支持如下值：
- CREATOR：只有创建者可以操作。
- ANY：创建者和非创建者都可以操作。',
                      'type' => 'string',
                      'example' => 'CREATOR',
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"5A14FA81-DD4E-******-6343FE44B941\\",\\n  \\"PermissionCode\\": \\"PaiDLC:ListJobs\\",\\n  \\"PermissionRules\\": [\\n    {\\n      \\"Accessibility\\": \\"PRIVATE\\",\\n      \\"EntityAccessType\\": \\"CREATOR\\"\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '获取工作空间的权限',
    ),
    'ListPermissions' => 
    array (
      'summary' => '获取用户在工作空间内的权限列表。',
      'path' => '/api/v1/workspaces/{WorkspaceId}/permissions',
      'methods' => 
      array (
        0 => 'get',
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
        'abilityTreeCode' => '14249',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATURElearnZBMZHZ',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'WorkspaceId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '工作空间 id',
            'description' => '工作空间ID。如何获取工作空间ID，请参见 [ListWorkspaces](~~449124~~)。',
            'type' => 'string',
            'required' => true,
            'example' => '123',
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
              'RequestId' => 
              array (
                'title' => '请求 id',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '2AE63638-5420-56DC-B******8174039A0',
              ),
              'Permissions' => 
              array (
                'title' => '权限列表',
                'description' => '权限列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '权限。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'PermissionCode' => 
                    array (
                      'title' => '权限 code',
                      'description' => '权限点的名字，同地域内唯一。权限点介绍，请参见[角色及权限列表](https://pai.console.aliyun.com/?spm=api-workbench.API%20Explorer.0.0.7a862392uO09Se&regionId=cn-shanghai#/workspace/permission)。
例如示例值PaiDLC:GetTensorboard，指的是页面中DLC功能模块的查看Tensorboard详情权限。',
                      'type' => 'string',
                      'example' => 'PaiDLC:GetTensorboard',
                    ),
                    'PermissionRules' => 
                    array (
                      'description' => '权限规则列表。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '权限规则。',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'Accessibility' => 
                          array (
                            'title' => '待鉴权实例的可见性 PUBLIC表示当前工作空间所有人都可以访问 PRIVATE表示只有Owner可以访问',
                            'description' => '访问类型，可能值：

- PUBLIC：当前工作空间所有成员都可以操作。
- PRIVATE：只有创建者可以操作。
- ANY：创建者和非创建者都可以操作。',
                            'type' => 'string',
                            'example' => 'PRIVATE',
                          ),
                          'EntityAccessType' => 
                          array (
                            'title' => '存取类型 CREATOR 代表能看自已创建的 OTHERS 代表可以看别人创建的 ALL代表所有',
                            'description' => '存取类型。
当Accessibility为PUBLIC，所有用户都能操作，此值无效；
当Accessibility为PRIVATE，EntityAccessType支持如下值：
- CREATOR：只有创建者可以操作。
- ANY：创建者和非创建者都可以操作。',
                            'type' => 'string',
                            'example' => 'CREATOR',
                          ),
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'TotalCount' => 
              array (
                'title' => '符合过滤条件的数量',
                'description' => '符合过滤条件的数量。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '1',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"2AE63638-5420-56DC-B******8174039A0\\",\\n  \\"Permissions\\": [\\n    {\\n      \\"PermissionCode\\": \\"PaiDLC:GetTensorboard\\",\\n      \\"PermissionRules\\": [\\n        {\\n          \\"Accessibility\\": \\"PRIVATE\\",\\n          \\"EntityAccessType\\": \\"CREATOR\\"\\n        }\\n      ]\\n    }\\n  ],\\n  \\"TotalCount\\": 1\\n}","type":"json"}]',
      'title' => '获取工作空间的权限列表',
    ),
    'ListWorkspaceUsers' => 
    array (
      'summary' => '列出未加入工作空间的用户列表，这些用户可被加入工作空间成为成员。',
      'path' => '/api/v1/workspaces/{WorkspaceId}/users',
      'methods' => 
      array (
        0 => 'get',
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
          'name' => 'WorkspaceId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '工作空间 id',
            'description' => '工作空间ID。如何获取工作空间ID，请参见 [ListWorkspaces](~~449124~~)。',
            'type' => 'string',
            'required' => false,
            'example' => '12345',
          ),
        ),
        1 => 
        array (
          'name' => 'UserName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '支持添加为工作空间成员的用户显示名称。',
            'type' => 'string',
            'required' => false,
            'example' => 'doctest****',
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
              'RequestId' => 
              array (
                'title' => '请求 id',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '1e195c5116124202371861018d5bde',
              ),
              'TotalCount' => 
              array (
                'title' => '符合过滤条件的用户数量',
                'description' => '符合过滤条件的用户数量。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '2',
              ),
              'Users' => 
              array (
                'title' => '用户列表',
                'description' => '用户列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '用户。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'UserId' => 
                    array (
                      'title' => '用户 id',
                      'description' => '用户ID。',
                      'type' => 'string',
                      'example' => '1611******3000',
                    ),
                    'UserName' => 
                    array (
                      'title' => '用户名',
                      'description' => '用户名。',
                      'type' => 'string',
                      'example' => 'she******mo',
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"1e195c5116124202371861018d5bde\\",\\n  \\"TotalCount\\": 2,\\n  \\"Users\\": [\\n    {\\n      \\"UserId\\": \\"1611******3000\\",\\n      \\"UserName\\": \\"she******mo\\"\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '获取工作空间用户列表',
    ),
    'CreateMember' => 
    array (
      'summary' => '添加用户到工作空间，作为工作空间的成员，可以添加多个用户为成员。',
      'path' => '/api/v1/workspaces/{WorkspaceId}/members',
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
          'name' => 'WorkspaceId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '工作空间 id',
            'description' => '工作空间ID。如何获取工作空间ID，请参见[ListWorkspaces](~~449124~~)。',
            'type' => 'string',
            'required' => true,
            'example' => '123',
          ),
        ),
        1 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '请求结构体。',
            'type' => 'object',
            'properties' => 
            array (
              'Members' => 
              array (
                'title' => '用户列表',
                'description' => '成员列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '成员详情。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'UserId' => 
                    array (
                      'title' => '用户 id',
                      'description' => '成员ID列表，多个成员ID以半角逗号（,）分隔。如何获取成员ID，请参见[ListMembers](~~449135~~)。',
                      'type' => 'string',
                      'required' => true,
                      'example' => '145883-21513926******88039,145883-2769726******87513',
                    ),
                    'Roles' => 
                    array (
                      'title' => '角色列表',
                      'description' => '角色列表。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '角色名。角色名和权限的对应关系，请参见[角色及权限列表](https://pai.console.aliyun.com/?regionId=cn-shanghai#/workspace/permission)。
支持以下角色名：
- PAI.AlgoDeveloper：算法开发。
- PAI.AlgoOperator：算法运维。
- PAI.LabelManager：标注管理员。
- PAI.MaxComputeDeveloper：MaxCompute开发。
- PAI.WorkspaceAdmin：管理员。
- PAI.WorkspaceGuest：访客。
- PAI.WorkspaceOwner：负责人。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'PAI.AlgoDeveloper',
                      ),
                      'required' => true,
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
            'description' => '返回结构体。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => '请求 id',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'DA869D1B-035A-43B2-ACC1-C56681BD9FAA',
              ),
              'Members' => 
              array (
                'title' => '成员列表',
                'description' => '成员列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '成员详情。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'UserId' => 
                    array (
                      'title' => '用户 id',
                      'description' => '用户ID。',
                      'type' => 'string',
                      'example' => '21513926******88039
',
                    ),
                    'Roles' => 
                    array (
                      'title' => '角色列表',
                      'description' => '角色列表。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '角色名。角色名和权限的对应关系，请参见[角色及权限列表](https://pai.console.aliyun.com/?regionId=cn-shanghai#/workspace/permission)。
角色名可能值：

- PAI.AlgoDeveloper：算法开发
- PAI.AlgoOperator：算法运维
- PAI.LabelManager：标注管理员
- PAI.MaxComputeDeveloper：MaxCompute开发
- PAI.WorkspaceAdmin：管理员
- PAI.WorkspaceGuest：访客
- PAI.WorkspaceOwner：负责人',
                        'type' => 'string',
                        'example' => 'PAI.AlgoDeveloper',
                      ),
                    ),
                    'DisplayName' => 
                    array (
                      'title' => '成员显示名',
                      'description' => '显示名。',
                      'type' => 'string',
                      'example' => 'myDisplayName',
                    ),
                    'MemberId' => 
                    array (
                      'title' => '成员 id',
                      'description' => '成员ID。',
                      'type' => 'string',
                      'example' => '145883-21513926******88039
',
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"DA869D1B-035A-43B2-ACC1-C56681BD9FAA\\",\\n  \\"Members\\": [\\n    {\\n      \\"UserId\\": \\"21513926******88039\\\\n\\",\\n      \\"Roles\\": [\\n        \\"PAI.AlgoDeveloper\\"\\n      ],\\n      \\"DisplayName\\": \\"myDisplayName\\",\\n      \\"MemberId\\": \\"145883-21513926******88039\\\\n\\"\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '工作空间添加成员',
    ),
    'ListMembers' => 
    array (
      'summary' => '获取工作空间的成员列表。',
      'path' => '/api/v1/workspaces/{WorkspaceId}/members',
      'methods' => 
      array (
        0 => 'get',
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
          'name' => 'WorkspaceId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '工作空间 id',
            'description' => '工作空间ID。如何获取工作空间ID，请参见[ListWorkspaces](~~449124~~)。',
            'type' => 'string',
            'required' => true,
            'example' => '123',
          ),
        ),
        1 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '分页，从1开始，默认1',
            'description' => '工作空间列表的页码。起始值为1，默认为1。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1',
          ),
        ),
        2 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '页大小，默认20',
            'description' => '分页查询时设置的每页行数。默认为20。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '20',
          ),
        ),
        3 => 
        array (
          'name' => 'Roles',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'Role 过滤列表，逗号分隔',
            'description' => '使用角色过滤成员，多个角色以半角逗号（,）分隔。
支持以下角色名：
- PAI.AlgoDeveloper：算法开发。
- PAI.AlgoOperator：算法运维。
- PAI.LabelManager：标注管理员。
- PAI.MaxComputeDeveloper：MaxCompute开发。
- PAI.WorkspaceAdmin：管理员。
- PAI.WorkspaceGuest：访客。
- PAI.WorkspaceOwner：负责人。',
            'type' => 'string',
            'required' => false,
            'example' => 'PAI.AlgoDeveloper',
          ),
        ),
        4 => 
        array (
          'name' => 'MemberName',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '成员名',
            'description' => '成员名，支持模糊匹配。',
            'type' => 'string',
            'required' => false,
            'example' => 'zhangsan',
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
              'RequestId' => 
              array (
                'title' => '请求 id',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E',
              ),
              'Members' => 
              array (
                'title' => '成员列表',
                'description' => '成员列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '成员详情。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'UserId' => 
                    array (
                      'title' => '用户 id',
                      'description' => '用户ID。',
                      'type' => 'string',
                      'example' => '215139******88039',
                    ),
                    'MemberName' => 
                    array (
                      'title' => '云账号用户名',
                      'description' => '用户名。',
                      'type' => 'string',
                      'example' => 'user1',
                    ),
                    'GmtCreateTime' => 
                    array (
                      'title' => '创建 UTC 时间，日期格式 iso8601',
                      'description' => '创建UTC时间，时间格式为ISO8601。',
                      'type' => 'string',
                      'example' => '2021-01-21T17:12:35.232Z',
                    ),
                    'Roles' => 
                    array (
                      'title' => '角色列表',
                      'description' => '角色列表。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '角色名。角色名和权限的对应关系，请参见[角色与权限列表](https://pai.console.aliyun.com/?regionId=cn-shanghai#/workspace/permission)。

角色名可能值：

- PAI.AlgoDeveloper：算法开发。
- PAI.AlgoOperator：算法运维。
- PAI.LabelManager：标注管理员。
- PAI.MaxComputeDeveloper：MaxCompute开发。
- PAI.WorkspaceAdmin：管理员。
- PAI.WorkspaceGuest：访客。
- PAI.WorkspaceOwner：负责人。',
                        'type' => 'string',
                        'example' => 'PAI.AlgoDeveloper',
                      ),
                    ),
                    'DisplayName' => 
                    array (
                      'title' => '成员显示名',
                      'description' => '成员显示名。',
                      'type' => 'string',
                      'example' => 'myDisplayName',
                    ),
                    'MemberId' => 
                    array (
                      'title' => '成员 id',
                      'description' => '成员ID。',
                      'type' => 'string',
                      'example' => '14588*****51688039',
                    ),
                  ),
                ),
              ),
              'TotalCount' => 
              array (
                'title' => '符合过滤条件的数量',
                'description' => '符合过滤条件的成员数量。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '1',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E\\",\\n  \\"Members\\": [\\n    {\\n      \\"UserId\\": \\"215139******88039\\",\\n      \\"MemberName\\": \\"user1\\",\\n      \\"GmtCreateTime\\": \\"2021-01-21T17:12:35.232Z\\",\\n      \\"Roles\\": [\\n        \\"PAI.AlgoDeveloper\\"\\n      ],\\n      \\"DisplayName\\": \\"myDisplayName\\",\\n      \\"MemberId\\": \\"14588*****51688039\\"\\n    }\\n  ],\\n  \\"TotalCount\\": 1\\n}","type":"json"}]',
      'title' => '获取工作空间的成员列表',
    ),
    'GetMember' => 
    array (
      'summary' => '获取工作空间的成员。',
      'path' => '/api/v1/workspaces/{WorkspaceId}/member',
      'methods' => 
      array (
        0 => 'get',
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
        'abilityTreeCode' => '36846',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATURElearnZBMZHZ',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'WorkspaceId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '工作空间 id',
            'description' => '工作空间ID。如何获取工作空间ID，请参见 [ListWorkspaces](~~449124~~)。',
            'type' => 'string',
            'required' => true,
            'example' => '145883',
          ),
        ),
        1 => 
        array (
          'name' => 'UserId',
          'in' => 'query',
          'allowEmptyValue' => false,
          'schema' => 
          array (
            'title' => '用户id',
            'description' => '用户UID。如何查看用户UID，请参见 [ListWorkspaceUsers](~~449133~~)。
UserId与MemberId必须指定一个，不能同时指定。',
            'type' => 'string',
            'required' => false,
            'example' => '21513926******88039',
          ),
        ),
        2 => 
        array (
          'name' => 'MemberId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '成员UID。UserId与MemberId必须指定一个，不能同时指定。',
            'type' => 'string',
            'required' => false,
            'example' => '145883-21513926******88039',
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
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '5A14FA81-DD4E-******-6343FE44B941',
              ),
              'UserId' => 
              array (
                'title' => '用户 id',
                'description' => '用户ID。',
                'type' => 'string',
                'example' => '21513926******88039',
              ),
              'MemberName' => 
              array (
                'title' => '云账号用户名',
                'description' => '用户名。',
                'type' => 'string',
                'example' => 'user1',
              ),
              'GmtCreateTime' => 
              array (
                'title' => '创建 UTC 时间，日期格式 iso8601',
                'description' => '创建UTC时间，时间格式为ISO8601。',
                'type' => 'string',
                'example' => '2021-01-21T17:12:35.232Z',
              ),
              'Roles' => 
              array (
                'title' => '角色列表',
                'description' => '角色列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '角色名。角色名和权限的对应关系，请参见[角色及权限列表](https://pai.console.aliyun.com/?spm=api-workbench.API%20Explorer.0.0.7a862392uO09Se&regionId=cn-shanghai#/workspace/permission)。
角色名可能值：

- PAI.AlgoDeveloper：算法开发。
- PAI.AlgoOperator：算法运维。
- PAI.LabelManager：标注管理员。
- PAI.MaxComputeDeveloper：MaxCompute开发。
- PAI.WorkspaceAdmin：管理员。
- PAI.WorkspaceGuest：访客。
- PAI.WorkspaceOwner：负责人。',
                  'type' => 'string',
                  'example' => 'myRole1',
                ),
              ),
              'DisplayName' => 
              array (
                'title' => '成员显示名',
                'description' => '成员显示名。',
                'type' => 'string',
                'example' => 'myDisplayName',
              ),
              'MemberId' => 
              array (
                'title' => '成员 id',
                'description' => '成员ID。',
                'type' => 'string',
                'example' => '145883-21513926******88039
',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"5A14FA81-DD4E-******-6343FE44B941\\",\\n  \\"UserId\\": \\"21513926******88039\\",\\n  \\"MemberName\\": \\"user1\\",\\n  \\"GmtCreateTime\\": \\"2021-01-21T17:12:35.232Z\\",\\n  \\"Roles\\": [\\n    \\"myRole1\\"\\n  ],\\n  \\"DisplayName\\": \\"myDisplayName\\",\\n  \\"MemberId\\": \\"145883-21513926******88039\\\\n\\"\\n}","type":"json"}]',
      'title' => '获取工作空间的成员',
    ),
    'DeleteMembers' => 
    array (
      'summary' => '删除工作空间的成员。',
      'path' => '/api/v1/workspaces/{WorkspaceId}/members',
      'methods' => 
      array (
        0 => 'delete',
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
          'name' => 'WorkspaceId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '工作空间 id',
            'description' => '工作空间ID。如何获取工作空间ID，请参见 [ListWorkspaces](~~449124~~)。',
            'type' => 'string',
            'required' => true,
            'example' => '145883',
          ),
        ),
        1 => 
        array (
          'name' => 'MemberIds',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '需要删除的成员 Id 列表，以逗号分隔',
            'description' => '成员ID列表，多个成员ID以半角逗号（,）分隔。如何获取成员ID，请参见[ListMembers](~~449135~~)。',
            'type' => 'string',
            'required' => true,
            'example' => '145883-21513926******88039,145883-2769726******87513',
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
              'RequestId' => 
              array (
                'title' => '请求 id',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'D5BFFEE3-6025-443F-8A03-02D619B5C4B9',
              ),
              'Code' => 
              array (
                'description' => '请求失败时返回的错误代码。',
                'type' => 'string',
                'example' => '100600017',
              ),
              'Message' => 
              array (
                'description' => '请求失败时的返回信息。',
                'type' => 'string',
                'example' => 'Owner not allowed to delete',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"D5BFFEE3-6025-443F-8A03-02D619B5C4B9\\",\\n  \\"Code\\": \\"100600017\\",\\n  \\"Message\\": \\"Owner not allowed to delete\\"\\n}","type":"json"}]',
      'title' => '工作空间删除成员	',
    ),
    'AddMemberRole' => 
    array (
      'summary' => '为工作空间内的成员添加某个角色，使其拥有角色的权限。',
      'path' => '/api/v1/workspaces/{WorkspaceId}/members/{MemberId}/roles/{RoleName}',
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
          'name' => 'WorkspaceId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '工作空间 id',
            'description' => '工作空间ID。如何获取工作空间ID，请参见 [ListWorkspaces](~~449124~~)。',
            'type' => 'string',
            'required' => true,
            'example' => '145883',
          ),
        ),
        1 => 
        array (
          'name' => 'MemberId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '成员 id',
            'description' => '成员ID。如何获取成员ID，请参见[ListMembers](~~449135~~)。',
            'type' => 'string',
            'required' => true,
            'example' => '145883-215139******688039',
          ),
        ),
        2 => 
        array (
          'name' => 'RoleName',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '角色',
            'description' => '角色名。角色名和权限的对应关系，请参见[角色及权限列表](https://pai.console.aliyun.com/?spm=api-workbench.API%20Explorer.0.0.7a862392uO09Se&regionId=cn-shanghai#/workspace/permission) 。
支持以下角色名：

- PAI.AlgoDeveloper：算法开发。
- PAI.AlgoOperator：算法运维。
- PAI.LabelManager：标注管理员。
- PAI.MaxComputeDeveloper：MaxCompute开发。
- PAI.WorkspaceAdmin：管理员。
- PAI.WorkspaceGuest：访客。
- PAI.WorkspaceOwner：负责人。',
            'type' => 'string',
            'required' => true,
            'example' => 'PAI.AlgoDeveloper',
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
              'RequestId' => 
              array (
                'title' => '请求 id',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '5A14FA81-DD4E-******-6343FE44B941',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"5A14FA81-DD4E-******-6343FE44B941\\"\\n}","type":"json"}]',
      'title' => '成员添加角色',
    ),
    'RemoveMemberRole' => 
    array (
      'summary' => '删除工作空间内的成员角色。',
      'path' => '/api/v1/workspaces/{WorkspaceId}/members/{MemberId}/roles/{RoleName}',
      'methods' => 
      array (
        0 => 'delete',
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
          'name' => 'WorkspaceId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '工作空间 id',
            'description' => '工作空间ID。如何获取工作空间ID，请参见 [ListWorkspaces](~~449124~~)。',
            'type' => 'string',
            'required' => true,
            'example' => '145883',
          ),
        ),
        1 => 
        array (
          'name' => 'MemberId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '成员 id',
            'description' => '成员ID。如何获取成员ID，请参见[ListMembers](~~449135~~)。',
            'type' => 'string',
            'required' => true,
            'example' => '145883-21513926******88039',
          ),
        ),
        2 => 
        array (
          'name' => 'RoleName',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '角色',
            'description' => '角色名。角色名和权限的对应关系，请参见[角色及权限列表](https://pai.console.aliyun.com/?spm=api-workbench.API%20Explorer.0.0.7a862392uO09Se&regionId=cn-shanghai#/workspace/permission) 。
支持以下角色名：

- PAI.AlgoDeveloper：算法开发。
- PAI.AlgoOperator：算法运维。
- PAI.LabelManager：标注管理员。
- PAI.MaxComputeDeveloper：MaxCompute开发。
- PAI.WorkspaceAdmin：管理员。
- PAI.WorkspaceGuest：访客。
- PAI.WorkspaceOwner：负责人。',
            'type' => 'string',
            'required' => true,
            'example' => 'PAI.AlgoDeveloper',
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
              'RequestId' => 
              array (
                'title' => '请求 id',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '5A14FA81-DD4E-******-6343FE44B941',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"5A14FA81-DD4E-******-6343FE44B941\\"\\n}","type":"json"}]',
      'title' => '成员删除角色	',
    ),
    'CreateWorkspaceResource' => 
    array (
      'summary' => '添加资源引用到工作空间。',
      'path' => '/api/v1/workspaces/{WorkspaceId}/resources',
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
          'name' => 'WorkspaceId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '工作空间 id',
            'description' => '工作空间ID。如何获取工作空间ID，请参见 [ListWorkspaces](~~449124~~)。',
            'type' => 'string',
            'required' => true,
            'example' => '123',
          ),
        ),
        1 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '请求结构体。',
            'type' => 'object',
            'properties' => 
            array (
              'Resources' => 
              array (
                'title' => '资源列表',
                'description' => '资源列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '资源信息。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Name' => 
                    array (
                      'title' => '资源名 长度需要在3到27个字符 region内唯一',
                      'description' => '资源名。格式如下。
- 长度为3~28个字符，以字母开头，只能包含字母、数字和下划线（_）。
- 同地域内唯一。',
                      'type' => 'string',
                      'required' => true,
                      'example' => 'ResourceName',
                    ),
                    'ProductType' => 
                    array (
                      'title' => '产品类型， 支持PAI，MaxCompute',
                      'description' => '**该字段已废弃，将会下线，请使用ResourceType字段**',
                      'type' => 'string',
                      'required' => false,
                      'example' => 'MaxCompute',
                    ),
                    'EnvType' => 
                    array (
                      'title' => '环境， 支持dev（开发）、prod（生产）',
                      'description' => '环境类型， 取值如下：
- dev：开发环境。
- prod：生产环境。',
                      'type' => 'string',
                      'required' => true,
                      'example' => 'prod',
                    ),
                    'WorkspaceId' => 
                    array (
                      'title' => '所属的工作空间 id',
                      'description' => '所属的工作空间ID。如何获取工作空间ID，请参见 [ListWorkspaces](~~449124~~)。',
                      'type' => 'string',
                      'required' => true,
                      'example' => '123',
                    ),
                    'IsDefault' => 
                    array (
                      'title' => '是否默认资源 每个类型都有一个默认的资源',
                      'description' => '是否为默认资源（每种资源类型有一个默认的资源）。取值如下：
- false（默认值）：不是默认资源。
- true：是默认资源。',
                      'type' => 'boolean',
                      'required' => false,
                      'example' => 'false',
                    ),
                    'Quotas' => 
                    array (
                      'description' => '资源配额列表，目前只有MaxCompute资源有资源配额。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '资源配额详情。',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'Id' => 
                          array (
                            'title' => '配额名称',
                            'description' => '资源配额ID。如何获取资源配额ID，请参见[ListQuotas](~~449144~~)。',
                            'type' => 'string',
                            'required' => true,
                            'example' => '232892******92912',
                          ),
                        ),
                        'required' => false,
                      ),
                      'required' => false,
                    ),
                    'Spec' => 
                    array (
                      'description' => '资源规格说明，JSON格式。',
                      'type' => 'object',
                      'required' => false,
                      'example' => '对于MaxCompute {"Endpoint": "odps.alibaba-inc.com", "Project": "mignshi"}',
                    ),
                    'GroupName' => 
                    array (
                      'title' => '分组名，主账户内唯一 一个 GroupName 下可能有一个 dev 资源和一个 prod 资源',
                      'description' => '资源分组名，主账户内唯一。',
                      'type' => 'string',
                      'required' => false,
                      'example' => 'groupName',
                    ),
                    'ResourceType' => 
                    array (
                      'description' => '资源类型列表。取值如下：

- MaxCompute：大数据计算服务资源。
- ECS：通用计算资源
- Lingjun：灵骏智算资源
- ACS：ACS计算资源
- FLINK：Flink资源。',
                      'type' => 'string',
                      'required' => false,
                      'example' => 'MaxCompute',
                    ),
                    'Labels' => 
                    array (
                      'description' => '资源标签数组。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '资源标签。',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'Key' => 
                          array (
                            'description' => '标签的Key。',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'system.support.eas',
                          ),
                          'Value' => 
                          array (
                            'description' => '标签的Value。',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'true',
                          ),
                        ),
                        'required' => false,
                      ),
                      'required' => false,
                    ),
                  ),
                  'required' => true,
                ),
                'required' => true,
              ),
              'Option' => 
              array (
                'description' => '创建行为，取值如下：

- CreateAndAttach：创建资源并绑定到工作空间。
- Attach：绑定资源到工作空间。',
                'type' => 'string',
                'required' => false,
                'example' => 'CreateAndAttach',
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
              'RequestId' => 
              array (
                'title' => '请求 id',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '1e195c5116124202371861018d5bde',
              ),
              'Resources' => 
              array (
                'title' => '资源集合',
                'description' => '资源集合',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '资源详情。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Id' => 
                    array (
                      'title' => '资源Id',
                      'description' => '资源ID。',
                      'type' => 'string',
                      'example' => '1234',
                    ),
                  ),
                ),
              ),
              'TotalCount' => 
              array (
                'title' => '总数',
                'description' => '资源总数。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '1',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"1e195c5116124202371861018d5bde\\",\\n  \\"Resources\\": [\\n    {\\n      \\"Id\\": \\"1234\\"\\n    }\\n  ],\\n  \\"TotalCount\\": 1\\n}","type":"json"}]',
      'title' => '创建工作空间的资源',
    ),
    'DeleteWorkspaceResource' => 
    array (
      'summary' => '删除工作空间对资源的引用，不会删除底层的资源。',
      'path' => '/api/v1/workspaces/{WorkspaceId}/resources',
      'methods' => 
      array (
        0 => 'delete',
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
          'name' => 'ProductType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '**该字段已废弃，将会下线，请使用ResourceType字段**',
            'type' => 'string',
            'required' => false,
            'example' => 'DLC',
          ),
        ),
        1 => 
        array (
          'name' => 'GroupName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源分组名。如果获取资源分组名，请参见[ListResources](~~449143~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'group',
          ),
        ),
        2 => 
        array (
          'name' => 'WorkspaceId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '工作空间ID。如何获取工作空间ID，请参见 [ListWorkspaces](~~449124~~)。',
            'type' => 'string',
            'required' => true,
            'example' => '123',
          ),
        ),
        3 => 
        array (
          'name' => 'Option',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '删除行为，取值如下：

- DetachAndDelete（默认值）：与工作空间解绑并删除资源（默认值）。
- Detach：与工作空间解绑。',
            'type' => 'string',
            'required' => false,
            'example' => 'DetachAndDelete',
          ),
        ),
        4 => 
        array (
          'name' => 'ResourceType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源类型列表。取值如下：

- ECS：通用计算资源
- Lingjun：灵骏智算资源
- ACS：ACS计算资源
- FLINK：Flink资源。
- MaxCompute： MaxCompute资源，目前只支持Option为Detach，不支持DetachAndDelete。',
            'type' => 'string',
            'required' => false,
            'example' => 'DLC',
          ),
        ),
        5 => 
        array (
          'name' => 'Labels',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '标签列表，以逗号分隔。',
            'type' => 'string',
            'required' => false,
            'example' => 'system.supported.eas=true',
          ),
        ),
        6 => 
        array (
          'name' => 'ResourceIds',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '逗号分隔的多个资源ID，这多个资源ID的GroupName必须一致
GroupName与ResourceIds不能都为空，可以两项都不为空。',
            'type' => 'string',
            'required' => false,
            'example' => 'Resource-dks******jkf,Resource-adf******dss',
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
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '5A14FA81-DD4E-******-6343FE44B941',
              ),
              'ResourceIds' => 
              array (
                'description' => '受影响的资源Id列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '受影响的资源Id。',
                  'type' => 'string',
                  'example' => 'Resource-dks******jkf',
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"5A14FA81-DD4E-******-6343FE44B941\\",\\n  \\"ResourceIds\\": [\\n    \\"Resource-dks******jkf\\"\\n  ]\\n}","type":"json"}]',
      'title' => '删除工作空间的资源',
    ),
    'UpdateWorkspaceResource' => 
    array (
      'summary' => '更新工作空间的资源。',
      'path' => '/api/v1/workspaces/{WorkspaceId}/resources',
      'methods' => 
      array (
        0 => 'put',
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
          'name' => 'WorkspaceId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '工作空间 id',
            'description' => '工作空间ID。如何获取工作空间ID，请参见 [ListWorkspaces](~~449124~~)。',
            'type' => 'string',
            'required' => true,
            'example' => '123',
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
              'IsDefault' => 
              array (
                'title' => '是否默认资源实例，目前只能填 true，不支持填 false',
                'description' => '是否为默认资源，目前该参数只支持传入true，暂不支持false。',
                'type' => 'boolean',
                'required' => false,
                'example' => 'true',
              ),
              'ProductType' => 
              array (
                'description' => '**该字段已废弃，将会下线，请使用ResourceType字段**',
                'type' => 'string',
                'required' => false,
                'example' => 'MaxCompute',
              ),
              'GroupName' => 
              array (
                'description' => '分组名。',
                'type' => 'string',
                'required' => false,
                'example' => 'group-kjds******sd',
              ),
              'ResourceType' => 
              array (
                'description' => '资源类型列表。取值如下：

- MaxCompute：大数据计算服务资源。
- ECS：通用计算资源
- Lingjun：灵骏智算资源
- ACS：ACS计算资源
- FLINK：Flink资源。',
                'type' => 'string',
                'required' => false,
                'example' => 'MaxCompute',
              ),
              'Labels' => 
              array (
                'description' => '资源标签集合。如果有多个标签，只有同时具备这些标签的资源才会被返回。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '资源标签。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Key' => 
                    array (
                      'description' => '标签的键。',
                      'type' => 'string',
                      'required' => false,
                      'example' => 'system.******',
                    ),
                    'Value' => 
                    array (
                      'description' => '标签的值。',
                      'type' => 'string',
                      'required' => false,
                      'example' => 'True',
                    ),
                  ),
                  'required' => false,
                ),
                'required' => false,
              ),
              'ResourceIds' => 
              array (
                'description' => '资源ID集合。

GroupName与ResourceIds不能都为空，但可以都不为空；如果都不为空，集合内每个资源ID的GroupName必须一致。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '资源ID。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'Resource-dks******jkf',
                ),
                'required' => false,
              ),
              'Spec' => 
              array (
                'description' => '资源的规格。',
                'type' => 'object',
                'required' => false,
                'example' => '{
      "clusterType": "share"
}',
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
              'RequestId' => 
              array (
                'title' => '请求 id',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '5A14FA81-DD4E-******-6343FE44B941',
              ),
              'ResourceIds' => 
              array (
                'description' => '本次更新的资源ID集合。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '这次更新的资源ID。',
                  'type' => 'string',
                  'example' => 'Resource-dks******jkf
',
                ),
                'example' => 'Resource-dks******jkf',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"5A14FA81-DD4E-******-6343FE44B941\\",\\n  \\"ResourceIds\\": [\\n    \\"Resource-dks******jkf\\\\n\\"\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<UpdateWorkspaceResourceResponse>\\n    <RequestId>1e195c5116124202371861018d5bde</RequestId>\\n</UpdateWorkspaceResourceResponse>","errorExample":""}]',
      'title' => '更新工作空间的资源',
    ),
    'ListResources' => 
    array (
      'summary' => '获取工作空间内已关联的资源列表。',
      'path' => '/api/v1/resources',
      'methods' => 
      array (
        0 => 'get',
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
          'name' => 'WorkspaceId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '工作空间 id',
            'description' => '工作空间ID。如何获取工作空间ID，请参见 [ListWorkspaces](~~449124~~)。
- 对于ListResourceByWorkspace，该参数必填。
- 对于ListResource，该参数无需配置。',
            'type' => 'string',
            'required' => false,
            'example' => '123',
          ),
        ),
        1 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '分页，从1开始，默认1',
            'description' => '资源列表的页码，起始值为1，默认为1。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1',
          ),
        ),
        2 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '页大小，默认20',
            'description' => '分页查询时设置的每页行数，默认为20。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '20',
          ),
        ),
        3 => 
        array (
          'name' => 'ProductTypes',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '逗号分隔的产品类型，可选值 MaxCompute，DLC',
            'description' => '**该字段已废弃，将会下线，请使用ResourceType字段**',
            'type' => 'string',
            'required' => false,
            'example' => 'MaxCompute',
          ),
        ),
        4 => 
        array (
          'name' => 'GroupName',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '资源的group名字',
            'description' => '资源分组名。如何获取资源分组名，请参见[ListResources](~~449143~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'group',
          ),
        ),
        5 => 
        array (
          'name' => 'ResourceName',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '资源的名字',
            'description' => '资源名。格式为：
- 长度为3~28个字符
- 同地域内唯一。',
            'type' => 'string',
            'required' => false,
            'example' => 'resource',
          ),
        ),
        6 => 
        array (
          'name' => 'Option',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '选项，目前支持 ListResourceByWorkspace    列举某个工作空间的资源 GetResource                       获取所有工作空间下的资源 GetResourceGroup               获取所有工作空间下的资源组 ListResourceSummaryByWorkspaces  列举一组工作空间的资源汇总',
            'description' => '选项，取值如下：

- ListResourceByWorkspace（默认值）：获取工作空间的资源列表。
- ListResource：获取用户的资源列表。',
            'type' => 'string',
            'required' => false,
            'example' => 'ListResourceByWorkspace',
          ),
        ),
        7 => 
        array (
          'name' => 'Verbose',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否展示详细信息，目前详细信息包含字段Quotas。取值如下：
- true（默认值）：表示展示详细信息。
- false：表示不展示详细信息。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
          ),
        ),
        8 => 
        array (
          'name' => 'ResourceTypes',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源类型列表。取值如下：

- MaxCompute：大数据计算服务资源。
- ECS：通用计算资源
- Lingjun：灵骏智算资源
- ACS：ACS计算资源
- FLINK：Flink资源。',
            'type' => 'string',
            'required' => false,
            'example' => 'MaxCompute',
          ),
        ),
        9 => 
        array (
          'name' => 'QuotaIds',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'QuotaId集合，用逗号分割。只有同时具有这些QuotaId的资源才会被返回。


> 目前只有ResourceTypes=ACS的资源才支持用该参数过滤。
>',
            'type' => 'string',
            'required' => false,
            'example' => 'quota-k******da,quota-cd******w',
          ),
        ),
        10 => 
        array (
          'name' => 'Labels',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'Label过滤条件集合，多个条件用逗号分隔。只有同时满足这些标签的资源才会被返回。

目前只有ProductType=ACS的资源才支持用该参数过滤。',
            'type' => 'string',
            'required' => false,
            'example' => 'system.supported.dsw=true,system.supported.dlc=true',
          ),
        ),
        11 => 
        array (
          'name' => 'VerboseFields',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '逗号分隔的集合，表明要返回的字段。

目前支持
- Quota
- Label
- IsDefault',
            'type' => 'string',
            'required' => false,
            'example' => 'Quota,IsDefault',
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
              'RequestId' => 
              array (
                'title' => '请求 id',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '1e195c5116124202371861018d5bde',
              ),
              'Resources' => 
              array (
                'title' => '资源列表',
                'description' => '资源列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '资源信息。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Id' => 
                    array (
                      'title' => '资源 id',
                      'description' => '资源ID。',
                      'type' => 'string',
                      'example' => '123',
                    ),
                    'Name' => 
                    array (
                      'title' => '资源名 长度需要在3到27个字符 region内唯一',
                      'description' => '资源名。',
                      'type' => 'string',
                      'example' => 'ResourceName',
                    ),
                    'ProductType' => 
                    array (
                      'title' => '产品类型， 支持PAI，MaxCompute',
                      'description' => '**该字段已废弃，将会下线，请使用ResourceType字段**',
                      'type' => 'string',
                      'example' => 'MaxCompute',
                    ),
                    'EnvType' => 
                    array (
                      'title' => '环境， 支持dev（开发）、prod（生产）',
                      'description' => '环境类型，可能值：
-  dev：开发环境。
- prod：生产环境。',
                      'type' => 'string',
                      'example' => 'prod',
                    ),
                    'WorkspaceId' => 
                    array (
                      'title' => '所属的工作空间 id',
                      'description' => '所属的工作空间ID。',
                      'type' => 'string',
                      'example' => '123',
                    ),
                    'IsDefault' => 
                    array (
                      'title' => '是否默认资源 每个类型都有一个默认的资源',
                      'description' => '是否为默认资源，每种资源类型都有一个默认的资源。可能值：
- true：是默认资源。
- false：不是默认资源。',
                      'type' => 'boolean',
                      'example' => 'true',
                    ),
                    'Quotas' => 
                    array (
                      'description' => '配额列表。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '配额信息。',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'Name' => 
                          array (
                            'title' => '配额名称',
                            'description' => '配额名称。',
                            'type' => 'string',
                            'example' => 'QuotaName',
                          ),
                          'ProductCode' => 
                          array (
                            'title' => '商品 code',
                            'description' => '产品名，可能值：
- PAI_isolate：pai预付费资源组（pai cpu）。
- PAI_share：pai后付费资源组（pai gpu）。
- MaxCompute_share：MaxCompute后付费资源组。
- MaxCompute_isolate：MaxCompute预付费资源组。
- DataWorks_isolate：DataWorks预付费资源组。
- DataWorks_share：DataWorks后付费资源组。
- DLC_share：DLC后付费资源组。',
                            'type' => 'string',
                            'example' => 'MaxCompute_isolate',
                          ),
                          'QuotaType' => 
                          array (
                            'title' => '产品类型， 支持PAI，MaxCompute',
                            'description' => '资源配额类型， 可能值：
- PAI
- MaxCompute
- DLC',
                            'type' => 'string',
                            'example' => 'MaxCompute',
                          ),
                          'Mode' => 
                          array (
                            'title' => '模式 isolate 预付费 share 后付费 develop 开发模式',
                            'description' => '付费模式，可能值：

- isolate：预付费。
- share：后付费。',
                            'type' => 'string',
                            'example' => 'isolate',
                          ),
                          'Specs' => 
                          array (
                            'title' => '规格描述列表',
                            'description' => '规格描述列表。',
                            'type' => 'array',
                            'items' => 
                            array (
                              'description' => '规格描述信息。',
                              'type' => 'object',
                              'properties' => 
                              array (
                                'Name' => 
                                array (
                                  'title' => '规格名字',
                                  'description' => '规格名字。',
                                  'type' => 'string',
                                  'example' => 'cu',
                                ),
                                'Value' => 
                                array (
                                  'title' => '规格描述',
                                  'description' => '规格描述。',
                                  'type' => 'string',
                                  'example' => '11500',
                                ),
                              ),
                            ),
                            'example' => '{\\"cu\\":\\"11500\\",\\"minCu\\":\\"2300\\",\\"parentId\\":\\"0\\"}',
                          ),
                          'CardType' => 
                          array (
                            'title' => '卡类型，支持cpu、gpu',
                            'description' => '卡类型，可能值：
- CPU
- GPU',
                            'type' => 'string',
                            'example' => 'CPU',
                          ),
                          'Id' => 
                          array (
                            'title' => '配额id',
                            'description' => '资源配额ID。',
                            'type' => 'string',
                            'example' => '123',
                          ),
                          'DisplayName' => 
                          array (
                            'description' => '资源配额别名。',
                            'type' => 'string',
                            'example' => '默认后付费Quota',
                          ),
                        ),
                      ),
                    ),
                    'Spec' => 
                    array (
                      'title' => '对于MaxCompute是个json，有如下key： Endpoint Project',
                      'description' => '规格说明。',
                      'type' => 'object',
                      'example' => '对于MaxCompute {"Endpoint": "odps.alibaba-inc.com", "Project": "mignshi"}',
                    ),
                    'GroupName' => 
                    array (
                      'title' => '分组名，主账户内唯一 一个 GroupName 下可能有一个 dev 资源和一个 prod 资源',
                      'description' => '资源分组名，主账户内唯一。',
                      'type' => 'string',
                      'example' => 'groupName',
                    ),
                    'GmtCreateTime' => 
                    array (
                      'title' => '创建 UTC 时间，日期格式 iso8601',
                      'description' => '创建UTC时间，时间格式为ISO8601。',
                      'type' => 'string',
                      'example' => '2021-01-21T17:12:35.232Z',
                    ),
                    'Executor' => 
                    array (
                      'description' => '该字段无效，已废弃。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'OwnerId' => 
                        array (
                          'description' => '该字段无效，已废弃。',
                          'type' => 'string',
                          'example' => '110973******7793',
                        ),
                      ),
                    ),
                    'Encryption' => 
                    array (
                      'description' => '加密信息，目前只对MaxCompute资源有效。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Enabled' => 
                        array (
                          'description' => '是否加密。',
                          'type' => 'boolean',
                          'example' => 'false',
                        ),
                        'Algorithm' => 
                        array (
                          'description' => '加密算法。',
                          'type' => 'string',
                          'example' => 'AESCTR',
                        ),
                        'Key' => 
                        array (
                          'description' => '加密主键。',
                          'type' => 'string',
                          'example' => 'DEFAULT',
                        ),
                      ),
                    ),
                    'ResourceType' => 
                    array (
                      'description' => '资源类型，可能值：

- MaxCompute：大数据计算服务资源。
- DLC：云原生资源。
- FLINK：Flink资源。',
                      'type' => 'string',
                      'example' => 'MaxCompute',
                    ),
                    'Labels' => 
                    array (
                      'description' => '标签集合。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '标签。',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'Key' => 
                          array (
                            'description' => '标签的Key。',
                            'type' => 'string',
                            'example' => 'system.supported.dsw',
                          ),
                          'Value' => 
                          array (
                            'description' => '标签的Value。',
                            'type' => 'string',
                            'example' => 'true',
                          ),
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'TotalCount' => 
              array (
                'title' => '符合过滤条件的作业数量',
                'description' => '符合过滤条件的资源数量。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '2',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"1e195c5116124202371861018d5bde\\",\\n  \\"Resources\\": [\\n    {\\n      \\"Id\\": \\"123\\",\\n      \\"Name\\": \\"ResourceName\\",\\n      \\"ProductType\\": \\"MaxCompute\\",\\n      \\"EnvType\\": \\"prod\\",\\n      \\"WorkspaceId\\": \\"123\\",\\n      \\"IsDefault\\": true,\\n      \\"Quotas\\": [\\n        {\\n          \\"Name\\": \\"QuotaName\\",\\n          \\"ProductCode\\": \\"MaxCompute_isolate\\",\\n          \\"QuotaType\\": \\"MaxCompute\\",\\n          \\"Mode\\": \\"isolate\\",\\n          \\"Specs\\": [\\n            {\\n              \\"Name\\": \\"cu\\",\\n              \\"Value\\": \\"11500\\"\\n            }\\n          ],\\n          \\"CardType\\": \\"CPU\\",\\n          \\"Id\\": \\"123\\",\\n          \\"DisplayName\\": \\"默认后付费Quota\\"\\n        }\\n      ],\\n      \\"Spec\\": {\\n        \\"test\\": \\"test\\",\\n        \\"test2\\": 1\\n      },\\n      \\"GroupName\\": \\"groupName\\",\\n      \\"GmtCreateTime\\": \\"2021-01-21T17:12:35.232Z\\",\\n      \\"Executor\\": {\\n        \\"OwnerId\\": \\"110973******7793\\"\\n      },\\n      \\"Encryption\\": {\\n        \\"Enabled\\": false,\\n        \\"Algorithm\\": \\"AESCTR\\",\\n        \\"Key\\": \\"DEFAULT\\"\\n      },\\n      \\"ResourceType\\": \\"MaxCompute\\",\\n      \\"Labels\\": [\\n        {\\n          \\"Key\\": \\"system.supported.dsw\\",\\n          \\"Value\\": \\"true\\"\\n        }\\n      ]\\n    }\\n  ],\\n  \\"TotalCount\\": 2\\n}","errorExample":""},{"type":"xml","example":"<ListResourcesResponse>\\n    <RequestId>1e195c5116124202371861018d5bde</RequestId>\\n    <Resources>\\n        <id>123</id>\\n        <Name>ResourceName</Name>\\n        <ProductType>MaxCompute</ProductType>\\n        <EnvType>prod</EnvType>\\n        <WorkspaceId>123</WorkspaceId>\\n        <IsDefault>true</IsDefault>\\n        <Quotas>\\n            <Name>QuotaName</Name>\\n            <ProductCode>MaxCompute_isolate</ProductCode>\\n            <QuotaType>MaxCompute</QuotaType>\\n            <Mode>develop</Mode>\\n            <Specs>\\n                <Name>quota</Name>\\n                <Value>{\\\\\\"cu\\\\\\":\\\\\\"11500\\\\\\",\\\\\\"minCu\\\\\\":\\\\\\"2300\\\\\\",\\\\\\"parentId\\\\\\":\\\\\\"0\\\\\\"}</Value>\\n            </Specs>\\n            <CardType>cpu</CardType>\\n            <Id>123</Id>\\n        </Quotas>\\n        <GroupName>groupName</GroupName>\\n        <GmtCreateTime>2021-01-21T17:12:35.232Z</GmtCreateTime>\\n        <ResourceSummary>\\n            <ProductType>DLC</ProductType>\\n            <Count>2</Count>\\n        </ResourceSummary>\\n    </Resources>\\n    <TotalCount>2</TotalCount>\\n</ListResourcesResponse>","errorExample":""}]',
      'title' => '获取工作空间的资源列表',
    ),
    'ListQuotas' => 
    array (
      'summary' => '获取资源配额列表。',
      'path' => '/api/v1/quotas',
      'methods' => 
      array (
        0 => 'get',
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
          'name' => 'Name',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '名字，支持模糊搜索',
            'description' => '资源配额名称，支持模糊搜索。',
            'type' => 'string',
            'required' => false,
            'example' => 'quota-name',
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
              'RequestId' => 
              array (
                'title' => '请求 id',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E',
              ),
              'Quotas' => 
              array (
                'title' => '配额列表',
                'description' => '资源配额列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '资源配额详情。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'QuotaType' => 
                    array (
                      'title' => '产品类型， 支持PAI，MaxCompute',
                      'description' => '资源配额类型，可能值：

- PAI：表示MaxCompute的GPU资源组集群。',
                      'type' => 'string',
                      'example' => 'PAI',
                    ),
                    'Mode' => 
                    array (
                      'title' => '模式  isolate 预付费  share 后付费  develop 开发模式',
                      'description' => '付费模式，可能值：

- isolate：预付费。
- share：后付费。',
                      'type' => 'string',
                      'example' => 'isolate',
                    ),
                    'ProductCode' => 
                    array (
                      'title' => '产品代码',
                      'description' => '产品名，可能值：
- PAI_isolate：pai预付费资源组（pai cpu）。
- PAI_share：pai后付费资源组（pai gpu）。',
                      'type' => 'string',
                      'example' => 'PAI_share',
                    ),
                    'Name' => 
                    array (
                      'title' => 'quota名字',
                      'description' => '配额名称。',
                      'type' => 'string',
                      'example' => 'quota-name',
                    ),
                    'Specs' => 
                    array (
                      'title' => '规格描述列表',
                      'description' => '规格描述列表。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '规格描述。',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'Name' => 
                          array (
                            'title' => '规格名',
                            'description' => '规格名。',
                            'type' => 'string',
                            'example' => 'cu',
                          ),
                          'Value' => 
                          array (
                            'title' => '规格描述',
                            'description' => '规格值。',
                            'type' => 'string',
                            'example' => '11500',
                          ),
                          'Type' => 
                          array (
                            'title' => '类型，可为空',
                            'description' => '类型，可为空。',
                            'type' => 'string',
                            'example' => 'string',
                          ),
                        ),
                      ),
                      'example' => '{\\"cu\\":\\"11500\\",\\"minCu\\":\\"2300\\",\\"parentId\\":\\"0\\"}',
                    ),
                    'Id' => 
                    array (
                      'title' => 'quota的id',
                      'description' => '配额的ID。',
                      'type' => 'string',
                      'example' => '1828233',
                    ),
                    'DisplayName' => 
                    array (
                      'description' => '资源配额别名。',
                      'type' => 'string',
                      'example' => '默认Quota。',
                    ),
                  ),
                ),
              ),
              'TotalCount' => 
              array (
                'title' => '符合过滤条件的数量',
                'description' => '符合过滤条件的资源配额数量。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '1',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E\\",\\n  \\"Quotas\\": [\\n    {\\n      \\"QuotaType\\": \\"PAI\\",\\n      \\"Mode\\": \\"isolate\\",\\n      \\"ProductCode\\": \\"PAI_share\\",\\n      \\"Name\\": \\"quota-name\\",\\n      \\"Specs\\": [\\n        {\\n          \\"Name\\": \\"cu\\",\\n          \\"Value\\": \\"11500\\",\\n          \\"Type\\": \\"string\\"\\n        }\\n      ],\\n      \\"Id\\": \\"1828233\\",\\n      \\"DisplayName\\": \\"默认Quota。\\"\\n    }\\n  ],\\n  \\"TotalCount\\": 1\\n}","errorExample":""},{"type":"xml","example":"<ListQuotasResponse>\\n    <RequestId>473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E</RequestId>\\n    <Quotas>\\n        <QuotaType>MaxCompute</QuotaType>\\n        <Mode>isolate</Mode>\\n        <ProductCode>MaxCompute_share</ProductCode>\\n        <Name>quota-name</Name>\\n        <Specs>\\n            <Name>name</Name>\\n            <Value>{\\\\\\"cu\\\\\\":\\\\\\"11500\\\\\\",\\\\\\"minCu\\\\\\":\\\\\\"2300\\\\\\",\\\\\\"parentId\\\\\\":\\\\\\"0\\\\\\"}</Value>\\n            <Type>abc</Type>\\n        </Specs>\\n        <Id>1828233</Id>\\n    </Quotas>\\n    <TotalCount>2</TotalCount>\\n</ListQuotasResponse>","errorExample":""}]',
      'title' => '获取MaxCompute GPU资源组的资源配额列表',
    ),
    'CreateDataset' => 
    array (
      'summary' => '调用CreateDataset创建一个数据集。',
      'path' => '/api/v1/datasets',
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
        'chargeType' => 'free',
        'abilityTreeCode' => '48562',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATURElearnTXMM8C',
        ),
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
              'Name' => 
              array (
                'title' => 'Name',
                'description' => '数据集的名称。命名规则如下：
- 以小写字母、大写字母、数字或中文开头。
- 可以包含下划线（_）或短划线（-）。
- 长度为1~127个字符。',
                'type' => 'string',
                'required' => true,
                'enumValueTitles' => 
                array (
                ),
                'example' => 'myName',
              ),
              'Property' => 
              array (
                'title' => 'Property',
                'description' => '数据集的属性。支持以下取值：
- FILE：文件。
- DIRECTORY：文件夹。',
                'type' => 'string',
                'required' => true,
                'enumValueTitles' => 
                array (
                  'DIRECTORY' => 'DIRECTORY',
                  'FILE' => 'FILE',
                ),
                'example' => 'DIRECTORY',
              ),
              'DataSourceType' => 
              array (
                'title' => 'DataSourceType',
                'description' => '数据源类型。支持以下取值：
- OSS：阿里云对象存储（OSS）。
- NAS：阿里云文件存储（NAS）。',
                'type' => 'string',
                'required' => true,
                'enumValueTitles' => 
                array (
                  'NAS' => 'NAS',
                  'OSS' => 'OSS',
                ),
                'example' => 'NAS',
              ),
              'Uri' => 
              array (
                'title' => 'Uri',
                'description' => 'Uri配置样例如下：
- 数据源类型为OSS：`oss://bucket.endpoint/object`
- 数据源类型为NAS：
通用型NAS格式为：`nas://<nasfisid>.region/subpath/to/dir/`；
CPFS1.0：`nas://<cpfs-fsid>.region/subpath/to/dir/`；
CPFS2.0：`nas://<cpfs-fsid>.region/<protocolserviceid>/`。
CPFS1.0和CPFS2.0根据fsid的格式来区分：CPFS1.0 格式为cpfs-<8位ASCII字符>；CPFS2.0 格式为cpfs-<16位ASCII字符>。',
                'type' => 'string',
                'required' => true,
                'example' => 'nas://09f****f2.cn-hangzhou/',
              ),
              'DataType' => 
              array (
                'title' => 'DataType',
                'description' => '数据集类型，默认为COMMON。支持以下取值：
- COMMON：普通。
- PIC：图片。
- TEXT：文本。
- VIDEO：视频。
- AUDIO：音频。',
                'type' => 'string',
                'required' => false,
                'enumValueTitles' => 
                array (
                  'VIDEO' => 'VIDEO',
                  'COMMON' => 'COMMON',
                  'TEXT' => 'TEXT',
                  'PIC' => 'PIC',
                  'AUDIO' => 'AUDIO',
                ),
                'example' => 'COMMON',
              ),
              'Labels' => 
              array (
                'title' => 'Labels',
                'description' => '标签列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '为数据集添加的标签。',
                  'required' => false,
                  '$ref' => '#/components/schemas/Label',
                ),
                'required' => false,
              ),
              'SourceType' => 
              array (
                'title' => 'SourceType',
                'description' => '数据来源类型，默认为USER。支持以下取值：
- PAI-PUBLIC-DATASET：PAI公共数据集。
- ITAG：iTAG模块标注结果生成的数据集。
- USER：用户注册的数据集。',
                'type' => 'string',
                'required' => false,
                'enumValueTitles' => 
                array (
                  'PAI_PUBLIC_DATASET' => 'PAI_PUBLIC_DATASET',
                  'ITAG' => 'ITAG',
                  'USER' => 'USER',
                ),
                'example' => 'USER',
              ),
              'SourceId' => 
              array (
                'title' => 'SourceId',
                'description' => '数据来源ID。
- 当SourceType为USER时，SourceId支持自定义。
- 当SourceType为ITAG时，即iTAG模块标注结果生成的数据集时，SourceId为ITAG的任务ID。
- 当SourceType为PAI_PUBLIC_DATASET时，即使用PAI公共数据集创建的数据集时，SourceId默认为空。',
                'type' => 'string',
                'required' => false,
                'example' => 'jdnhf***fnrimv',
              ),
              'Description' => 
              array (
                'title' => 'Description',
                'description' => '对数据集进行自定义描述，以区分不同的数据集。',
                'type' => 'string',
                'required' => false,
                'example' => '用于标注的数据。',
              ),
              'WorkspaceId' => 
              array (
                'title' => 'WorkspaceId',
                'description' => '数据集所在工作空间ID。如何获取工作空间ID，请参见[ListWorkspaces](~~449124~~)。
如果不配置该参数，则会使用默认工作空间；如果默认工作空间不存在，则会报错。',
                'type' => 'string',
                'required' => false,
                'example' => '478**',
              ),
              'Options' => 
              array (
                'title' => 'Options',
                'description' => '扩展字段，JsonString类型。
当DLC使用数据集时，可通过配置mountPath字段指定数据集默认挂载路径。',
                'type' => 'string',
                'required' => false,
                'example' => '{
  "mountPath": "/mnt/data/"
}',
              ),
              'Accessibility' => 
              array (
                'title' => 'Accessibility',
                'description' => '工作空间可见度。支持以下取值：
- PRIVATE（默认值）：表示工作空间内自己以及管理员可见。
- PUBLIC为：工作空间所有用户可见。',
                'type' => 'string',
                'required' => false,
                'enumValueTitles' => 
                array (
                  'PUBLIC' => 'PUBLIC',
                  'PRIVATE' => 'PRIVATE',
                ),
                'example' => 'PRIVATE',
              ),
              'ProviderType' => 
              array (
                'title' => 'ProviderType',
                'description' => '数据集的数据源来源类型，支持配置的类型如下：
- Ecs（默认值）
- Lingjun',
                'type' => 'string',
                'required' => false,
                'example' => 'Ecs',
              ),
              'Provider' => 
              array (
                'type' => 'string',
                'required' => false,
              ),
              'UserId' => 
              array (
                'title' => '数据集所有者',
                'type' => 'string',
                'required' => false,
                'example' => '29884000000186970',
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
            'description' => '返回体。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'B2C51F93-1C07-5477-9705-5FDB****F19F',
              ),
              'DatasetId' => 
              array (
                'description' => '数据集ID。',
                'type' => 'string',
                'example' => 'd-rbvg5*****jhc9ks92',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"B2C51F93-1C07-5477-9705-5FDB****F19F\\",\\n  \\"DatasetId\\": \\"d-rbvg5*****jhc9ks92\\"\\n}","type":"json"}]',
      'title' => '创建数据集',
    ),
    'GetDataset' => 
    array (
      'summary' => '获取数据集。',
      'path' => '/api/v1/datasets/{DatasetId}',
      'methods' => 
      array (
        0 => 'get',
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
          'name' => 'DatasetId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => 'Dataset Id',
            'description' => '数据集ID。如何获取数据集ID，详情请参见[ListDatasets](~~457222~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'd-rbvg5wz****c9ks92',
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
            'description' => '返回结果。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '5A14FA81-DD4E-******-6343FE44B941',
              ),
              'DatasetId' => 
              array (
                'description' => '数据集ID。',
                'type' => 'string',
                'example' => 'd-rbvg5wz****c9ks92',
              ),
              'Name' => 
              array (
                'description' => '数据集名称。',
                'type' => 'string',
                'example' => 'myName',
              ),
              'Description' => 
              array (
                'description' => '描述。',
                'type' => 'string',
                'example' => '用于标注的数据。',
              ),
              'GmtCreateTime' => 
              array (
                'description' => '创建时间。',
                'type' => 'string',
                'example' => '2021-01-30T12:51:33.028Z',
              ),
              'GmtModifiedTime' => 
              array (
                'description' => '更新时间。',
                'type' => 'string',
                'example' => '2021-01-30T12:51:33.028Z',
              ),
              'UserId' => 
              array (
                'description' => '数据集所属用户ID。',
                'type' => 'string',
                'example' => '2485765****023475',
              ),
              'OwnerId' => 
              array (
                'description' => '主账户ID。',
                'type' => 'string',
                'example' => '1631044****3440',
              ),
              'Property' => 
              array (
                'description' => '数据集属性。可能值：
- FILE：文件。
- DIRECTORY：文件夹。',
                'type' => 'string',
                'enumValueTitles' => 
                array (
                  'DIRECTORY' => 'DIRECTORY',
                  'FILE' => 'FILE',
                ),
                'example' => 'DIRECTORY',
              ),
              'DataSourceType' => 
              array (
                'description' => '数据源类型。可能值：
- OSS：阿里云对象存储（OSS）。
- NAS：阿里云文件存储（NAS）。',
                'type' => 'string',
                'enumValueTitles' => 
                array (
                  'NAS' => 'NAS',
                  'OSS' => 'OSS',
                ),
                'example' => 'NAS',
              ),
              'Uri' => 
              array (
                'description' => 'Uri样例，可能值：
- 数据源类型为OSS：`oss://bucket.endpoint/object`。
- 数据源类型为NAS：
通用型NAS格式为：`nas://<nasfisid>.region/subpath/to/dir/`；
CPFS1.0：`nas://<cpfs-fsid>.region/subpath/to/dir/`；
CPFS2.0：`nas://<cpfs-fsid>.region/<protocolserviceid>/`；
CPFS1.0和CPFS2.0根据fsid的格式来区分：
CPFS1.0 格式为cpfs-<8位ascii字符>；
CPFS2.0 格式为cpfs-<16为ascii字符>。',
                'type' => 'string',
                'example' => 'nas://09f****f2.cn-hangzhou/',
              ),
              'Labels' => 
              array (
                'description' => '标签列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '为数据集添加的标签。',
                  'example' => '{"Key": "env", "Value": "test"}',
                  '$ref' => '#/components/schemas/Label',
                ),
              ),
              'DataType' => 
              array (
                'description' => '数据类型，可能值：

- COMMON：普通。
- PIC：图片。
- TEXT：文本。
- VIDEO：视频。
- AUDIO：音频。',
                'type' => 'string',
                'enumValueTitles' => 
                array (
                  'VIDEO' => 'VIDEO',
                  'COMMON' => 'COMMON',
                  'TEXT' => 'TEXT',
                  'PIC' => 'PIC',
                  'AUDIO' => 'AUDIO',
                ),
                'example' => 'COMMON',
              ),
              'SourceType' => 
              array (
                'description' => '数据来源类型，可能值：
- PAI-PUBLIC-DATASET：PAI公共数据集。
- ITAG：iTAG模块标注结果生成的数据集。
- USER：用户注册的数据集。',
                'type' => 'string',
                'enumValueTitles' => 
                array (
                  'PAI_PUBLIC_DATASET' => 'PAI_PUBLIC_DATASET',
                  'ITAG' => 'ITAG',
                  'USER' => 'USER',
                ),
                'example' => 'USER',
              ),
              'SourceId' => 
              array (
                'description' => '数据来源ID，可能值：
- 当SourceType为USER时，SourceId支持自定义。
- 当SourceType为ITAG时，即iTAG模块标注结果生成的数据集时，SourceId为ITAG的任务ID。
- 当SourceType为PAI_PUBLIC_DATASET时，即使用PAI公共数据集创建的数据集时，SourceId默认为空。',
                'type' => 'string',
                'example' => 'jdnhf***fnrimv',
              ),
              'WorkspaceId' => 
              array (
                'description' => '数据集所在工作空间ID。',
                'type' => 'string',
                'example' => '478**',
              ),
              'Options' => 
              array (
                'description' => '扩展字段，JsonString类型。
当DLC使用数据集时，可通过配置mountPath字段指定数据集默认挂载路径。',
                'type' => 'string',
                'example' => '{
  "mountPath": "/mnt/data/"
}',
              ),
              'Accessibility' => 
              array (
                'description' => '工作空间可见度。可能值：
- PRIVATE：表示工作空间内自己以及管理员可见。
- PUBLIC：为工作空间所有用户可见。',
                'type' => 'string',
                'enumValueTitles' => 
                array (
                  'PUBLIC' => 'PUBLIC',
                  'PRIVATE' => 'PRIVATE',
                ),
                'example' => 'PRIVATE',
              ),
              'ProviderType' => 
              array (
                'description' => '数据集的数据源来源类型。取值如下：
- Ecs （默认）
- Lingjun',
                'type' => 'string',
                'example' => 'Ecs',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"5A14FA81-DD4E-******-6343FE44B941\\",\\n  \\"DatasetId\\": \\"d-rbvg5wz****c9ks92\\",\\n  \\"Name\\": \\"myName\\",\\n  \\"Description\\": \\"用于标注的数据。\\",\\n  \\"GmtCreateTime\\": \\"2021-01-30T12:51:33.028Z\\",\\n  \\"GmtModifiedTime\\": \\"2021-01-30T12:51:33.028Z\\",\\n  \\"UserId\\": \\"2485765****023475\\",\\n  \\"OwnerId\\": \\"1631044****3440\\",\\n  \\"Property\\": \\"DIRECTORY\\",\\n  \\"DataSourceType\\": \\"NAS\\",\\n  \\"Uri\\": \\"nas://09f****f2.cn-hangzhou/\\",\\n  \\"Labels\\": [\\n    {\\n      \\"Key\\": \\"\\",\\n      \\"Value\\": \\"\\"\\n    }\\n  ],\\n  \\"DataType\\": \\"COMMON\\",\\n  \\"SourceType\\": \\"USER\\",\\n  \\"SourceId\\": \\"jdnhf***fnrimv\\",\\n  \\"WorkspaceId\\": \\"478**\\",\\n  \\"Options\\": \\"{\\\\n  \\\\\\"mountPath\\\\\\": \\\\\\"/mnt/data/\\\\\\"\\\\n}\\",\\n  \\"Accessibility\\": \\"PRIVATE\\",\\n  \\"ProviderType\\": \\"Ecs\\"\\n}","type":"json"}]',
      'title' => '获取数据集',
    ),
    'UpdateDataset' => 
    array (
      'summary' => '更新数据集，支持更新名称，描述等。',
      'path' => '/api/v1/datasets/{DatasetId}',
      'methods' => 
      array (
        0 => 'put',
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
          'name' => 'DatasetId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '数据集ID。如何获取数据集ID，详情请参见[ListDatasets](~~457222~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'd-rbvg5wz****c9ks92',
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
              'Name' => 
              array (
                'description' => '数据集名称。如何获取数据集名称，详情请参见[ListDatasets](~~457222~~)。',
                'type' => 'string',
                'required' => false,
                'example' => 'myName',
              ),
              'Description' => 
              array (
                'description' => '描述。',
                'type' => 'string',
                'required' => false,
                'example' => '用于标注的数据。',
              ),
              'Options' => 
              array (
                'description' => '扩展字段，JsonString类型。
当DLC使用数据集时，可通过配置mountPath字段指定数据集默认挂载路径。',
                'type' => 'string',
                'required' => false,
                'example' => '{
  "mountPath": "/mnt/data/"
}',
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
            'description' => '返回体。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '5A14FA81-DD4E-******-6343FE44B941',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"5A14FA81-DD4E-******-6343FE44B941\\"\\n}","type":"json"}]',
      'title' => '更新数据集',
    ),
    'PublishDataset' => 
    array (
      'summary' => '将私有数据集在工作空间内公开。',
      'path' => '/api/v1/datasets/{DatasetId}/publish',
      'methods' => 
      array (
        0 => 'put',
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
          'name' => 'DatasetId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '数据集ID。如何获取数据集ID，详情请参见[ListDatasets](~~457222~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'd-rbvg5w****c9ks92',
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
            'description' => '返回体。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'A0F049F0-8D69-5BAC-8F10-B******A34C',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"A0F049F0-8D69-5BAC-8F10-B******A34C\\"\\n}","type":"json"}]',
      'title' => '发布数据集',
    ),
    'ListDatasets' => 
    array (
      'summary' => '获取某个工作空间下的数据集列表。',
      'path' => '/api/v1/datasets',
      'methods' => 
      array (
        0 => 'get',
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
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据集列表的页码。起始值为1，默认为1。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        1 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页查询时设置的每页行数。默认为10。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '10',
          ),
        ),
        2 => 
        array (
          'name' => 'Order',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页查询时，对指定的排序字段进行升序或降序。默认值为ASC。
- ASC：升序。
- DESC：降序。',
            'type' => 'string',
            'required' => false,
            'enumValueTitles' => 
            array (
              'ASC' => 'ASC',
              'DESC' => 'DESC',
            ),
            'example' => 'ASC',
          ),
        ),
        3 => 
        array (
          'name' => 'Name',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据集名称，支持根据数据集名称模糊搜索。',
            'type' => 'string',
            'required' => false,
            'example' => 'myName',
          ),
        ),
        4 => 
        array (
          'name' => 'Properties',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据集属性，多项之间使用半角逗号（,）分隔。支持以下取值：
- DIRECTORY：文件夹。
- FILE：文件。',
            'type' => 'string',
            'required' => false,
            'enumValueTitles' => 
            array (
              'DIRECTORY' => 'DIRECTORY',
              'FILE' => 'FILE',
            ),
            'example' => 'FILE',
          ),
        ),
        5 => 
        array (
          'name' => 'DataSourceTypes',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据源类型，多项之间使用半角逗号分隔。支持以下取值：
- NAS：数据存储为阿里云文件存储（NAS）。
- OSS：数据存储为阿里云对象存储（OSS）。',
            'type' => 'string',
            'required' => false,
            'enumValueTitles' => 
            array (
              'NAS' => 'NAS',
              'OSS' => 'OSS',
            ),
            'example' => 'OSS',
          ),
        ),
        6 => 
        array (
          'name' => 'DataTypes',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据集类型，多项之间使用半角逗号（,）分隔。支持以下取值：
- VIDEO：视频。
- COMMON：通用。
- TEXT：文本。
- PIC：图片。
- AUDIO：音频。',
            'type' => 'string',
            'required' => false,
            'enumValueTitles' => 
            array (
              'VIDEO' => 'VIDEO',
              'COMMON' => 'COMMON',
              'TEXT' => 'TEXT',
              'PIC' => 'PIC',
              'AUDIO' => 'AUDIO',
            ),
            'example' => 'COMMON,TEXT',
          ),
        ),
        7 => 
        array (
          'name' => 'SourceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据来源ID。
- 当SourceTypes为USER时，SourceId支持自定义。
- 当SourceTypes为ITAG时，即iTAG模块标注结果生成的数据集时，SourceId为ITAG的任务ID。
- 当SourceTypes为PAI_PUBLIC_DATASET时，即使用PAI公共数据集创建的数据集时，SourceId默认为空。',
            'type' => 'string',
            'required' => false,
            'example' => 'd-rbvg5wzljzjhc9ks92',
          ),
        ),
        8 => 
        array (
          'name' => 'SourceTypes',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '来源类型，多项之间使用半角逗号分隔。支持以下取值：
- PAI-PUBLIC-DATASET：PAI公共数据集。
- ITAG：iTAG模块标注结果生成的数据集。
- USER：用户注册的数据集。',
            'type' => 'string',
            'required' => false,
            'enumValueTitles' => 
            array (
              'PAI_PUBLIC_DATASET' => 'PAI_PUBLIC_DATASET',
              'ITAG' => 'ITAG',
              'USER' => 'USER',
            ),
            'example' => 'USER,ITAG',
          ),
        ),
        9 => 
        array (
          'name' => 'WorkspaceId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'Workspace Id',
            'description' => '数据集所在工作空间ID。如何获取工作空间ID，请参见[ListWorkspaces](~~449124~~)。
如果不配置该参数，则会使用默认工作空间；如果默认工作空间不存在，则会报错。',
            'type' => 'string',
            'required' => false,
            'example' => '324**',
          ),
        ),
        10 => 
        array (
          'name' => 'Label',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据集标签，用于过滤数据集列表。标签Key或Value中，有指定字符串的，都会被过滤出来。',
            'type' => 'string',
            'required' => false,
            'example' => 'test',
          ),
        ),
        11 => 
        array (
          'name' => 'Provider',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
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
            'description' => '返回体。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '5A14FA81-DD4E-******-6343FE44B941',
              ),
              'Datasets' => 
              array (
                'description' => '数据集列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '数据集。',
                  '$ref' => '#/components/schemas/Dataset',
                ),
              ),
              'TotalCount' => 
              array (
                'description' => '总数。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '15',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"5A14FA81-DD4E-******-6343FE44B941\\",\\n  \\"Datasets\\": [\\n    {\\n      \\"DatasetId\\": \\"d-c0h44g3wlwkj8o4348\\",\\n      \\"UserId\\": \\"\\",\\n      \\"OwnerId\\": \\"\\",\\n      \\"Name\\": \\"\\",\\n      \\"Labels\\": [\\n        {\\n          \\"Key\\": \\"\\",\\n          \\"Value\\": \\"\\"\\n        }\\n      ],\\n      \\"DataSourceType\\": \\"OSS URL\\",\\n      \\"Uri\\": \\"oss://xxx\\",\\n      \\"GmtCreateTime\\": \\"\\",\\n      \\"GmtModifiedTime\\": \\"\\",\\n      \\"DataType\\": \\"COMMON PIC TEXT VIDEO AUDIO\\",\\n      \\"Property\\": \\"FILE DIRECTORY TABULAR\\",\\n      \\"SourceType\\": \\"USER ITAG  PAI_PUBLIC_DATASET\\",\\n      \\"SourceId\\": \\"Source Id\\",\\n      \\"Description\\": \\"\\",\\n      \\"WorkspaceId\\": \\"Workspace Id\\",\\n      \\"Options\\": \\"jsonstring\\",\\n      \\"Accessibility\\": \\"PRIVATE PUBLIC\\",\\n      \\"ProviderType\\": \\"Ecs\\"\\n    }\\n  ],\\n  \\"TotalCount\\": 15\\n}","type":"json"}]',
      'title' => '获取数据集列表',
    ),
    'DeleteDataset' => 
    array (
      'summary' => '删除数据集。',
      'path' => '/api/v1/datasets/{DatasetId}',
      'methods' => 
      array (
        0 => 'delete',
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
          'name' => 'DatasetId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '数据集ID。如何获取数据集ID，详情请参见[ListDatasets](~~457222~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'd-rbvg5wzlj****9ks92',
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
            'description' => '返回体。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'A0F049F0-8D69-5BAC-8F10-B******A34C',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"A0F049F0-8D69-5BAC-8F10-B******A34C\\"\\n}","type":"json"}]',
      'title' => '删除数据集',
    ),
    'CreateDatasetLabels' => 
    array (
      'summary' => '为数据集打标签。',
      'path' => '/api/v1/datasets/{DatasetId}/labels',
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
          'name' => 'DatasetId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => 'Dataset Id',
            'description' => '数据集ID。如何获取数据集ID，详情请参见[ListDatasets](~~457222~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'd-lfd60v0p****ujtsdx',
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
              'Labels' => 
              array (
                'description' => '标签列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '为数据集添加的标签。',
                  'required' => false,
                  '$ref' => '#/components/schemas/Label',
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
            'description' => '返回体。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'A083731B-4973-54D1-B324-E53****4DD44',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"A083731B-4973-54D1-B324-E53****4DD44\\"\\n}","type":"json"}]',
      'title' => '创建数据集标签',
      'description' => '调用此接口时，需要注意：

- 标签键和值是非空字符串，且长度不能大于128。
- 标签键不能以 aliyun、acs、http://、https:// 开头。
',
    ),
    'DeleteDatasetLabels' => 
    array (
      'summary' => '删除数据集标签。',
      'path' => '/api/v1/datasets/{DatasetId}/labels',
      'methods' => 
      array (
        0 => 'delete',
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
          'name' => 'DatasetId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => 'DatasetId',
            'description' => '数据集ID。如何获取数据集ID，详情请参见[ListDatasets](~~457222~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'd-rbvg5****jhc9ks92',
          ),
        ),
        1 => 
        array (
          'name' => 'LabelKeys',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '标签的键值。如何查询标签的键值，详情请参见[GetDataset](~~457218~~)。多项标签使用半角逗号（,）分隔。',
            'type' => 'string',
            'required' => false,
            'example' => 'key1,key2',
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
            'description' => '返回体。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '64B50C1D-D4C2-560C-86A3-A6ED****16D',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"64B50C1D-D4C2-560C-86A3-A6ED****16D\\"\\n}","type":"json"}]',
      'title' => '删除数据集标签',
    ),
    'CreateCodeSource' => 
    array (
      'summary' => '创建代码配置到PAI，支持配置Git的代码分支与CommitId。创建完成后，可以在DLC作业中引用。',
      'path' => '/api/v1/codesources',
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
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '请求结构。',
            'type' => 'object',
            'properties' => 
            array (
              'WorkspaceId' => 
              array (
                'title' => '工作空间ID',
                'description' => '工作空间ID。如何获取工作空间ID，请参见[ListWorkspaces](~~449124~~)。',
                'type' => 'string',
                'required' => true,
                'example' => '1234',
              ),
              'DisplayName' => 
              array (
                'title' => '代码源配置名称',
                'description' => '代码配置名称。',
                'type' => 'string',
                'required' => true,
                'example' => 'MyCodeSource1',
              ),
              'Description' => 
              array (
                'title' => '代码源详细描述',
                'description' => '代码配置的描述信息，便于区分不同的代码配置。',
                'type' => 'string',
                'required' => false,
                'example' => 'code source of dlc examples',
              ),
              'CodeRepo' => 
              array (
                'title' => '代码仓库地址',
                'description' => '代码仓库地址。',
                'type' => 'string',
                'required' => false,
                'example' => 'https://code.aliyun.com/******',
              ),
              'CodeRepoUserName' => 
              array (
                'title' => '代码仓库的用户名',
                'description' => '代码仓库的用户名。',
                'type' => 'string',
                'required' => false,
                'example' => 'use***',
              ),
              'CodeRepoAccessToken' => 
              array (
                'title' => '代码仓库访问Token',
                'description' => '代码仓库访问Token。',
                'type' => 'string',
                'required' => false,
                'example' => '***',
              ),
              'CodeBranch' => 
              array (
                'title' => '代码分支',
                'description' => '代码分支。',
                'type' => 'string',
                'required' => false,
                'example' => 'master',
              ),
              'MountPath' => 
              array (
                'title' => '代码本地挂载目录，默认挂载到/root/code/下',
                'description' => '代码本地挂载目录，默认挂载到/root/code/下。',
                'type' => 'string',
                'required' => false,
                'example' => '/root/code/code-source-1',
              ),
              'Accessibility' => 
              array (
                'title' => '代码是否是本工作空间内公开的，可选值PRIVATE、PUBLIC',
                'description' => '代码配置的可见性，取值如下。
- PUBLIC：在此工作空间中，对所有人可见。
- PRIVATE：在此工作空间中，仅对您和管理员可见。',
                'type' => 'string',
                'required' => false,
                'enumValueTitles' => 
                array (
                  'PUBLIC' => 'PUBLIC',
                  'PRIVATE' => 'PRIVATE',
                ),
                'example' => 'PRIVATE',
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
              'CodeSourceId' => 
              array (
                'title' => '创建的代码源配置的ID',
                'description' => '创建的代码配置的ID。',
                'type' => 'string',
                'example' => 'code-20********',
              ),
              'RequestId' => 
              array (
                'title' => '请求ID',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '473469C7-AA6F-4DC5-B3DB-A3**********',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"CodeSourceId\\": \\"code-20********\\",\\n  \\"RequestId\\": \\"473469C7-AA6F-4DC5-B3DB-A3**********\\"\\n}","type":"json"}]',
      'title' => '创建代码配置',
    ),
    'DeleteCodeSource' => 
    array (
      'summary' => '指定ID，删除一个代码配置。',
      'path' => '/api/v1/codesources/{CodeSourceId}',
      'methods' => 
      array (
        0 => 'delete',
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
        'operationType' => 'delete',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'CodeSourceId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '待删除的代码源配置',
            'description' => '待删除的代码配置ID。如何获取代码配置ID，请参见[ListCodeSources](~~459922~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'code-20210111103721-85qz78ia96lu',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '返回结构体。',
            'type' => 'object',
            'properties' => 
            array (
              'CodeSourceId' => 
              array (
                'title' => '被删除的代码源配置ID',
                'description' => '被删除的代码源配置ID。',
                'type' => 'string',
                'example' => 'code-20210111103721-85qz78ia96lu',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '5A14FA81-DD4E-******-6343FE44B941',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"CodeSourceId\\": \\"code-20210111103721-85qz78ia96lu\\",\\n  \\"RequestId\\": \\"5A14FA81-DD4E-******-6343FE44B941\\"\\n}","type":"json"}]',
      'title' => '删除代码配置',
    ),
    'PublishCodeSource' => 
    array (
      'summary' => '发布私有的代码配置到工作空间公开可见。',
      'path' => '/api/v1/codesources/{CodeSourceId}/publish',
      'methods' => 
      array (
        0 => 'put',
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
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'CodeSourceId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '待删除的代码源配置',
            'description' => '待发布的代码源配置ID。如何获取代码配置ID，请参见[ListCodeSources](~~459922~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'code-a797*******',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '返回结构体。',
            'type' => 'object',
            'properties' => 
            array (
              'CodeSourceId' => 
              array (
                'title' => '被删除的代码源配置ID',
                'description' => '发布成功的代码源配置ID。',
                'type' => 'string',
                'example' => 'code-a797*******',
              ),
              'RequestId' => 
              array (
                'description' => '请求的ID。用于定位日志，排查问题。',
                'type' => 'string',
                'example' => '5A14FA81-DD4E-******-6343FE44B941',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"CodeSourceId\\": \\"code-a797*******\\",\\n  \\"RequestId\\": \\"5A14FA81-DD4E-******-6343FE44B941\\"\\n}","type":"json"}]',
      'title' => '发布代码配置',
    ),
    'GetCodeSource' => 
    array (
      'summary' => '获取一个代码配置的详细信息。',
      'path' => '/api/v1/codesources/{CodeSourceId}',
      'methods' => 
      array (
        0 => 'get',
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
          'name' => 'CodeSourceId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '代码源配置ID',
            'description' => '代码源配置ID。如何获取代码配置ID，请参见[ListCodeSources](~~459922~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'code-202**********',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '返回结构体。',
            'type' => 'object',
            'properties' => 
            array (
              'CodeSourceId' => 
              array (
                'title' => '代码源配置ID',
                'description' => '代码源配置ID。',
                'type' => 'string',
                'example' => 'code-202**********',
              ),
              'DisplayName' => 
              array (
                'title' => '代码源配置名字',
                'description' => '代码源配置名字。',
                'type' => 'string',
                'example' => 'MyCodeSource1',
              ),
              'Description' => 
              array (
                'title' => '详细描述',
                'description' => '代码配置的详细描述。',
                'type' => 'string',
                'example' => 'This is my data source 1.',
              ),
              'CodeRepo' => 
              array (
                'title' => '代码仓库地址',
                'description' => '代码仓库地址。',
                'type' => 'string',
                'example' => 'https://code.aliyun.com/pai-dlc/examples.git',
              ),
              'CodeBranch' => 
              array (
                'title' => '代码仓库分支',
                'description' => '代码仓库分支。',
                'type' => 'string',
                'example' => 'master',
              ),
              'CodeCommit' => 
              array (
                'title' => '代码Commit',
                'description' => '代码CommitId。',
                'type' => 'string',
                'example' => '44da10***********',
              ),
              'CodeRepoUserName' => 
              array (
                'title' => '代码仓库的用户名',
                'description' => '代码仓库的用户名。',
                'type' => 'string',
                'example' => 'user1',
              ),
              'CodeRepoAccessToken' => 
              array (
                'title' => '访问代码仓库的token',
                'description' => '访问代码仓库的Token。',
                'type' => 'string',
                'example' => 'xxxx',
              ),
              'MountPath' => 
              array (
                'title' => '代码本地挂载目录，默认挂载到/root/code/下',
                'description' => '代码的本地挂载目录。',
                'type' => 'string',
                'example' => '/root/code',
              ),
              'Accessibility' => 
              array (
                'title' => '代码是否是本工作空间内公开的，可选值PRIVATE、PUBLIC',
                'description' => '代码配置的可见性，可能值：
- PRIVATE：在此工作空间中，仅对您和管理员可见。
- PUBLIC： 在此工作空间中，对所有人可见。',
                'type' => 'string',
                'enumValueTitles' => 
                array (
                  'PUBLIC' => 'PUBLIC',
                  'PRIVATE' => 'PRIVATE',
                ),
                'example' => 'PRIVATE',
              ),
              'UserId' => 
              array (
                'title' => '代码配置源的创建者ID',
                'description' => '代码配置源的创建者ID。',
                'type' => 'string',
                'example' => '1722********',
              ),
              'WorkspaceId' => 
              array (
                'title' => '工作空间ID',
                'description' => '工作空间ID。',
                'type' => 'string',
                'example' => '1234',
              ),
              'GmtCreateTime' => 
              array (
                'title' => '创建时间',
                'description' => '代码配置创建时间，时间格式为ISO8601。',
                'type' => 'string',
                'example' => '2021-01-12T23:36:01.123Z',
              ),
              'GmtModifyTime' => 
              array (
                'title' => '修改时间',
                'description' => '代码配置修改时间。时间格式为ISO8601。',
                'type' => 'string',
                'example' => '2021-01-12T23:36:01.123Z',
              ),
              'RequestId' => 
              array (
                'title' => '请求ID',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '5A14FA81-DD4E-******-6343FE44B941',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"CodeSourceId\\": \\"code-202**********\\",\\n  \\"DisplayName\\": \\"MyCodeSource1\\",\\n  \\"Description\\": \\"This is my data source 1.\\",\\n  \\"CodeRepo\\": \\"https://code.aliyun.com/pai-dlc/examples.git\\",\\n  \\"CodeBranch\\": \\"master\\",\\n  \\"CodeCommit\\": \\"44da10***********\\",\\n  \\"CodeRepoUserName\\": \\"user1\\",\\n  \\"CodeRepoAccessToken\\": \\"xxxx\\",\\n  \\"MountPath\\": \\"/root/code\\",\\n  \\"Accessibility\\": \\"PRIVATE\\",\\n  \\"UserId\\": \\"1722********\\",\\n  \\"WorkspaceId\\": \\"1234\\",\\n  \\"GmtCreateTime\\": \\"2021-01-12T23:36:01.123Z\\",\\n  \\"GmtModifyTime\\": \\"2021-01-12T23:36:01.123Z\\",\\n  \\"RequestId\\": \\"5A14FA81-DD4E-******-6343FE44B941\\"\\n}","type":"json"}]',
      'title' => '获取代码配置',
    ),
    'ListCodeSources' => 
    array (
      'summary' => '查询代码配置列表，支持分页、排序和按条件过滤。',
      'path' => '/api/v1/codesources',
      'methods' => 
      array (
        0 => 'get',
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
          'name' => 'DisplayName',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '代码源显示名称，支持模糊匹配',
            'description' => '代码配置的显示名称，支持模糊匹配。',
            'type' => 'string',
            'required' => false,
            'example' => 'MyDataSource',
          ),
        ),
        1 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '取第几页的数据',
            'description' => '代码配置列表的页码。起始值为1，默认值为1。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        2 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '分页大小',
            'description' => '分页查询时设置的每页行数。默认为20。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '10',
          ),
        ),
        3 => 
        array (
          'name' => 'SortBy',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '用于排序的字段名，可选字段名："DisplayName" "GmtCreateTime" "GmtModifyTime"',
            'description' => '用于排序的字段名，取值如下：
- GmtModifyTime：代码源修改时间。
- DisplayName：展示名称。
- CodeSourceId：代码源ID。
- GmtCreateTime（默认值）：代码源创建时间。',
            'type' => 'string',
            'required' => false,
            'enumValueTitles' => 
            array (
              'GmtModifyTime' => 'GmtModifyTime',
              'DisplayName' => 'DisplayName',
              'CodeSourceId' => 'CodeSourceId',
              'GmtCreateTime' => 'GmtCreateTime',
            ),
            'example' => 'GmtModifyTime',
          ),
        ),
        4 => 
        array (
          'name' => 'Order',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '排序顺序, 枚举值 desc 或者 asc',
            'description' => '分页查询时，对指定的排序字段进行升序或降序，取值如下：
- ASC（默认值）：升序。
- DESC：降序。',
            'type' => 'string',
            'required' => false,
            'enumValueTitles' => 
            array (
              'asc' => 'asc',
              'desc' => 'desc',
            ),
            'example' => 'desc',
          ),
        ),
        5 => 
        array (
          'name' => 'WorkspaceId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '工作空间ID',
            'description' => '工作空间ID。如何获取工作空间ID，请参见[ListWorkspaces](~~449124~~)。',
            'type' => 'string',
            'required' => false,
            'example' => '1234',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '返回结构体。',
            'type' => 'object',
            'properties' => 
            array (
              'CodeSources' => 
              array (
                'title' => '代码源配置列表',
                'description' => '代码源配置列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '代码配置详情。',
                  '$ref' => '#/components/schemas/CodeSourceItem',
                ),
              ),
              'TotalCount' => 
              array (
                'title' => '符合过滤条件的代码源配置的总数量',
                'description' => '符合过滤条件的代码源配置的总数量。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '2',
              ),
              'RequestId' => 
              array (
                'title' => '请求Id',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '5A14FA81-DD4E-******-6343FE44B941',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"CodeSources\\": [\\n    {\\n      \\"CodeSourceId\\": \\"code-20210111103721-85qz78ia96lu\\",\\n      \\"DisplayName\\": \\"MyCodeSourceName1\\",\\n      \\"Description\\": \\"code source of dlc examples\\",\\n      \\"CodeRepo\\": \\"https://code.aliyun.com/pai-dlc/examples.git\\",\\n      \\"CodeBranch\\": \\"master\\",\\n      \\"CodeCommit\\": \\"44da109b59f8596152987eaa8f3b2487bb72ea63\\",\\n      \\"CodeRepoUserName\\": \\"user\\",\\n      \\"CodeRepoAccessToken\\": \\"\\",\\n      \\"Accessibility\\": \\"PUBLIC\\",\\n      \\"UserId\\": \\"1157290171663117\\",\\n      \\"WorkspaceId\\": \\"1234\\",\\n      \\"GmtCreateTime\\": \\"2021-01-18T12:52:15Z\\",\\n      \\"GmtModifyTime\\": \\"2021-01-18T12:52:15Z\\",\\n      \\"MountPath\\": \\"/root/code/\\"\\n    }\\n  ],\\n  \\"TotalCount\\": 2,\\n  \\"RequestId\\": \\"5A14FA81-DD4E-******-6343FE44B941\\"\\n}","type":"json"}]',
      'title' => '获取代码配置列表',
    ),
    'CreateModel' => 
    array (
      'summary' => '创建模型。模型是模型版本的集合，创建模型时需要指定模型名称，描述等信息。',
      'path' => '/api/v1/models',
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
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '请求体。',
            'type' => 'object',
            'properties' => 
            array (
              'ModelName' => 
              array (
                'title' => 'ModelName',
                'description' => '模型名称，长度为1~127个字符。',
                'type' => 'string',
                'required' => true,
                'example' => '新闻分类',
              ),
              'Labels' => 
              array (
                'title' => 'Labels',
                'description' => '标签列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '标签。',
                  'required' => false,
                  '$ref' => '#/components/schemas/Label',
                ),
                'required' => false,
              ),
              'ModelDescription' => 
              array (
                'title' => 'ModelDescription',
                'description' => '模型描述，用于区分不同的模型。',
                'type' => 'string',
                'required' => false,
                'example' => '新闻分类。',
              ),
              'WorkspaceId' => 
              array (
                'title' => 'WorkspaceId',
                'description' => '工作空间ID。如何获取工作空间ID，请参见[ListWorkspaces](~~449124~~)。',
                'type' => 'string',
                'required' => false,
                'example' => '796**',
              ),
              'Accessibility' => 
              array (
                'title' => 'Accessibility',
                'description' => '工作空间可见度，取值如下。
- PRIVATE（默认值）：在此工作空间中，仅对您和管理员可见。
- PUBLIC：在此工作空间中，对所有人可见。',
                'type' => 'string',
                'required' => false,
                'enumValueTitles' => 
                array (
                  'PUBLIC' => 'PUBLIC',
                  'PRIVATE' => 'PRIVATE',
                ),
                'example' => 'PRIVATE',
              ),
              'Origin' => 
              array (
                'title' => '模型源',
                'description' => '模型源。描述源模型所属社区或组织，如ModelScope，HuggingFace等。',
                'type' => 'string',
                'required' => false,
                'example' => 'ModelScope',
              ),
              'Domain' => 
              array (
                'title' => '领域',
                'description' => '领域。描述模型解决问题所属领域。例如：nlp（自然语言处理）、cv（计算机视觉）等。',
                'type' => 'string',
                'required' => false,
                'example' => 'nlp',
              ),
              'Task' => 
              array (
                'title' => '模型任务',
                'description' => '任务。描述模型解决的具体问题。例如：text-classification（文本分类）等。',
                'type' => 'string',
                'required' => false,
                'example' => 'text-classification',
              ),
              'ModelDoc' => 
              array (
                'title' => '模型介绍文档',
                'description' => '模型文档。',
                'type' => 'string',
                'required' => false,
                'example' => 'https://*.md',
              ),
              'OrderNumber' => 
              array (
                'title' => '序号',
                'description' => '模型序号。可用于自定义排序。',
                'type' => 'integer',
                'format' => 'int64',
                'required' => false,
                'example' => '0',
              ),
              'ModelType' => 
              array (
                'title' => '模型类型',
                'description' => '模型类型。如Checkpoint，LoRA等。',
                'type' => 'string',
                'required' => false,
                'example' => 'Checkpoint',
              ),
              'ExtraInfo' => 
              array (
                'title' => '其它信息',
                'description' => '模型的其它信息。',
                'type' => 'object',
                'required' => false,
                'example' => '{
	"RatingCount": 2866,
	"Rating": 4.94,
	"FavoriteCount": 34992,
	"CommentCount": 754,
	"CoverUris": ["https://e***u.oss-cn-hangzhou.aliyuncs.com/drea***w.png"],
	"TippedAmountCount": 32,
	"DownloadCount": 606056
}',
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
            'description' => '返回体。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '9DAD3112-AE22-5563-9A02-5C7E8****E35',
              ),
              'ModelId' => 
              array (
                'description' => '模型ID。',
                'type' => 'string',
                'example' => 'model-rbvg5wzljz****ks92',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"9DAD3112-AE22-5563-9A02-5C7E8****E35\\",\\n  \\"ModelId\\": \\"model-rbvg5wzljz****ks92\\"\\n}","type":"json"}]',
      'title' => '创建模型',
    ),
    'UpdateModel' => 
    array (
      'summary' => '更新模型的基本配置信息。',
      'path' => '/api/v1/models/{ModelId}',
      'methods' => 
      array (
        0 => 'put',
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
          'name' => 'ModelId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '模型ID',
            'description' => '模型ID。如何获取模型ID，请参见[ListModels](~~461944~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'model-rbvg5wz******ks92',
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
              'ModelName' => 
              array (
                'title' => '模型名称',
                'description' => '模型名称，长度为1~127个字符。',
                'type' => 'string',
                'required' => false,
                'example' => '新闻分类',
              ),
              'ModelDescription' => 
              array (
                'title' => '模型描述',
                'description' => '模型描述。',
                'type' => 'string',
                'required' => false,
                'example' => '新闻分类。',
              ),
              'Accessibility' => 
              array (
                'title' => '可见度',
                'description' => '工作空间可见度，取值如下。
- PRIVATE：在此工作空间中，仅对您和管理员可见。
- PUBLIC：在此工作空间中，对所有人可见。',
                'type' => 'string',
                'required' => false,
                'example' => 'PUBLIC',
              ),
              'Origin' => 
              array (
                'title' => '模型源',
                'description' => '模型源。描述源模型所属社区或组织，如ModelScope，HuggingFace等。',
                'type' => 'string',
                'required' => false,
                'example' => 'ModelScope',
              ),
              'Domain' => 
              array (
                'title' => '领域',
                'description' => '领域。描述模型解决问题所属领域。例如：nlp（自然语言处理）、cv（计算机视觉）等。',
                'type' => 'string',
                'required' => false,
                'example' => 'nlp',
              ),
              'Task' => 
              array (
                'title' => '模型任务',
                'description' => '任务。描述模型解决的具体问题。例如：text-classification（文本分类）等。',
                'type' => 'string',
                'required' => false,
                'example' => 'text-classification',
              ),
              'ModelDoc' => 
              array (
                'title' => '模型介绍文档',
                'description' => '模型文档。',
                'type' => 'string',
                'required' => false,
                'example' => 'https://*.md',
              ),
              'OrderNumber' => 
              array (
                'title' => '序号',
                'description' => '模型序号。可用于自定义排序。',
                'type' => 'integer',
                'format' => 'int64',
                'required' => false,
                'example' => '0',
              ),
              'ModelType' => 
              array (
                'title' => '模型类型',
                'description' => '模型类型。如Checkpoint，LoRA等。',
                'type' => 'string',
                'required' => false,
                'example' => 'Checkpoint',
              ),
              'ExtraInfo' => 
              array (
                'title' => '其它信息',
                'description' => '模型的其它信息。',
                'type' => 'object',
                'required' => false,
                'example' => '{
	"RatingCount": 2866,
	"Rating": 4.94,
	"FavoriteCount": 34992,
	"CommentCount": 754,
	"CoverUris": ["https://e***u.oss-cn-hangzhou.aliyuncs.com/drea***w.png"],
	"TippedAmountCount": 32,
	"DownloadCount": 606056
}',
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
            'description' => '返回体。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'A0F049F0-8D69-5BAC-8F10-B******A34C',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"A0F049F0-8D69-5BAC-8F10-B******A34C\\"\\n}","type":"json"}]',
      'title' => '更新模型',
    ),
    'GetModel' => 
    array (
      'summary' => '获取指定模型详情信息。',
      'path' => '/api/v1/models/{ModelId}',
      'methods' => 
      array (
        0 => 'get',
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
          'name' => 'ModelId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => 'Model Id',
            'description' => '模型ID。如何获取模型ID，请参见[ListModels](~~461944~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'model-rbvg5****c9ks92',
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
            'description' => '返回体。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '5A14FA81-DD4E-******-6343FE44B941',
              ),
              'ModelId' => 
              array (
                'title' => '模型ID',
                'description' => '模型ID。',
                'type' => 'string',
                'example' => 'model-rbvg5wzljz****ks92',
              ),
              'ModelName' => 
              array (
                'title' => '模型名称',
                'description' => '模型名称。',
                'type' => 'string',
                'example' => '情感分析',
              ),
              'ModelDescription' => 
              array (
                'title' => '模型描述',
                'description' => '模型描述。',
                'type' => 'string',
                'example' => '通用情感分析。',
              ),
              'GmtCreateTime' => 
              array (
                'title' => '创建时间',
                'description' => '创建模型UTC时间，格式ISO8601。',
                'type' => 'string',
                'example' => '2021-01-30T12:51:33.028Z',
              ),
              'GmtModifiedTime' => 
              array (
                'title' => '最后更新时间',
                'description' => '最后更新模型UTC时间，格式ISO8601。',
                'type' => 'string',
                'example' => '2021-01-30T12:51:33.028Z',
              ),
              'UserId' => 
              array (
                'title' => '创建模型的用户ID',
                'description' => '用户ID。',
                'type' => 'string',
                'example' => '1234567890******',
              ),
              'OwnerId' => 
              array (
                'title' => '云账号ID',
                'description' => '阿里云账号ID。',
                'type' => 'string',
                'example' => '1234567890******',
              ),
              'Origin' => 
              array (
                'title' => '模型源',
                'description' => '模型源。描述源模型所属社区或组织，例如：ModelScope，HuggingFace等。',
                'type' => 'string',
                'example' => 'ModelScope',
              ),
              'Provider' => 
              array (
                'title' => '提供者',
                'description' => '提供者。',
                'type' => 'string',
                'example' => 'pai',
              ),
              'Domain' => 
              array (
                'title' => '领域',
                'description' => '领域。描述模型解决问题所属领域。例如：nlp（自然语言处理）、cv（计算机视觉）等。',
                'type' => 'string',
                'example' => 'cv',
              ),
              'Task' => 
              array (
                'title' => '任务',
                'description' => '任务。描述模型解决的具体问题，例如：text-classification（文本分类）等。',
                'type' => 'string',
                'example' => 'text-classification',
              ),
              'ModelDoc' => 
              array (
                'title' => '模型文档',
                'description' => '模型文档。',
                'type' => 'string',
                'example' => 'https://***.md',
              ),
              'Labels' => 
              array (
                'title' => '模型的标签',
                'description' => '模型的标签列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '标签。',
                  '$ref' => '#/components/schemas/Label',
                ),
              ),
              'WorkspaceId' => 
              array (
                'title' => '工作空间ID',
                'description' => '工作空间ID。',
                'type' => 'string',
                'example' => '234**',
              ),
              'Accessibility' => 
              array (
                'title' => '可见性',
                'description' => '工作空间可见性，可能值为：
- PRIVATE：在此工作空间中，仅对您和管理员可见。
- PUBLIC：在此工作空间中，对所有人可见。',
                'type' => 'string',
                'example' => 'PUBLIC',
              ),
              'LatestVersion' => 
              array (
                'title' => '模型的最新版本',
                'description' => '模型的最新版本。',
                '$ref' => '#/components/schemas/ModelVersion',
              ),
              'ModelType' => 
              array (
                'title' => '模型类型',
                'description' => '模型类型。',
                'type' => 'string',
                'example' => 'Checkpoint',
              ),
              'ExtraInfo' => 
              array (
                'title' => '其它信息',
                'description' => '模型的其它信息。',
                'type' => 'object',
                'example' => '{
	"RatingCount": 2866,
	"Rating": 4.94,
	"FavoriteCount": 34992,
	"CommentCount": 754,
	"CoverUris": ["https://e***u.oss-cn-hangzhou.aliyuncs.com/drea***w.png"],
	"TippedAmountCount": 32,
	"DownloadCount": 606056
}',
              ),
              'OrderNumber' => 
              array (
                'title' => '序号',
                'description' => '序号。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '1',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"5A14FA81-DD4E-******-6343FE44B941\\",\\n  \\"ModelId\\": \\"model-rbvg5wzljz****ks92\\",\\n  \\"ModelName\\": \\"情感分析\\",\\n  \\"ModelDescription\\": \\"通用情感分析。\\",\\n  \\"GmtCreateTime\\": \\"2021-01-30T12:51:33.028Z\\",\\n  \\"GmtModifiedTime\\": \\"2021-01-30T12:51:33.028Z\\",\\n  \\"UserId\\": \\"1234567890******\\",\\n  \\"OwnerId\\": \\"1234567890******\\",\\n  \\"Origin\\": \\"ModelScope\\",\\n  \\"Provider\\": \\"pai\\",\\n  \\"Domain\\": \\"cv\\",\\n  \\"Task\\": \\"text-classification\\",\\n  \\"ModelDoc\\": \\"https://***.md\\",\\n  \\"Labels\\": [\\n    {\\n      \\"Key\\": \\"\\",\\n      \\"Value\\": \\"\\"\\n    }\\n  ],\\n  \\"WorkspaceId\\": \\"234**\\",\\n  \\"Accessibility\\": \\"PUBLIC\\",\\n  \\"LatestVersion\\": {\\n    \\"VersionName\\": \\"1.0.0\\",\\n    \\"GmtCreateTime\\": \\"2021-01-21T17:12:35Z\\",\\n    \\"GmtModifiedTime\\": \\"2021-01-21T17:12:35Z\\",\\n    \\"UserId\\": \\"155770209******\\",\\n    \\"OwnerId\\": \\"155770209******\\",\\n    \\"Uri\\": \\"oss://bucket/path-to-model\\",\\n    \\"VersionDescription\\": \\"\\",\\n    \\"Labels\\": [\\n      {\\n        \\"Key\\": \\"\\",\\n        \\"Value\\": \\"\\"\\n      }\\n    ],\\n    \\"FormatType\\": \\"SavedModel\\",\\n    \\"FrameworkType\\": \\"TensorFlow\\",\\n    \\"Options\\": \\"\\",\\n    \\"Metrics\\": {\\n      \\"test\\": \\"test\\",\\n      \\"test2\\": 1\\n    },\\n    \\"TrainingSpec\\": {\\n      \\"test\\": \\"test\\",\\n      \\"test2\\": 1\\n    },\\n    \\"InferenceSpec\\": {\\n      \\"test\\": \\"test\\",\\n      \\"test2\\": 1\\n    },\\n    \\"EvaluationSpec\\": {\\n      \\"test\\": \\"test\\",\\n      \\"test2\\": 1\\n    },\\n    \\"SourceType\\": \\"\\",\\n    \\"SourceId\\": \\"\\",\\n    \\"ApprovalStatus\\": \\"\\",\\n    \\"ExtraInfo\\": {\\n      \\"test\\": \\"test\\",\\n      \\"test2\\": 1\\n    }\\n  },\\n  \\"ModelType\\": \\"Checkpoint\\",\\n  \\"ExtraInfo\\": {\\n    \\"RatingCount\\": 2866,\\n    \\"Rating\\": 4.94,\\n    \\"FavoriteCount\\": 34992,\\n    \\"CommentCount\\": 754,\\n    \\"CoverUris\\": [\\n      \\"https://e***u.oss-cn-hangzhou.aliyuncs.com/drea***w.png\\"\\n    ],\\n    \\"TippedAmountCount\\": 32,\\n    \\"DownloadCount\\": 606056\\n  },\\n  \\"OrderNumber\\": 1\\n}","type":"json"}]',
      'title' => '获取模型',
    ),
    'ListModels' => 
    array (
      'summary' => '获取模型列表。',
      'path' => '/api/v1/models',
      'methods' => 
      array (
        0 => 'get',
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
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '页数',
            'description' => '模型列表的页码。起始值为1，默认为1。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        1 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '每页大小',
            'description' => '分页查询时设置的每页显示的模型数量，默认为10。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '10',
          ),
        ),
        2 => 
        array (
          'name' => 'Order',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '顺序',
            'description' => '分页查询时，对指定的排序字段进行升序或降序。默认ASC。
- ASC：升序。
- DESC：降序。',
            'type' => 'string',
            'required' => false,
            'example' => 'DESC',
          ),
        ),
        3 => 
        array (
          'name' => 'SortBy',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '排序依据',
            'description' => '分页查询时的排序字段。目前使用GmtCreateTime字段用于排序。',
            'type' => 'string',
            'required' => false,
            'example' => 'GmtCreateTime',
          ),
        ),
        4 => 
        array (
          'name' => 'WorkspaceId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '工作空间ID',
            'description' => '配置工作空间ID，返回列表中只获取该工作空间内的模型列表。如何获取工作空间ID，请参见[ListWorkspaces](~~449124~~)。',
            'type' => 'string',
            'required' => false,
            'example' => '324**',
          ),
        ),
        5 => 
        array (
          'name' => 'ModelName',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '模型名称',
            'description' => '配置模型名称，用来过滤获取的模型列表。',
            'type' => 'string',
            'required' => false,
            'example' => '情感分析',
          ),
        ),
        6 => 
        array (
          'name' => 'Label',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '标签',
            'description' => '标签串。用于列表过滤，标签中key或value中，有指定字符串的，都会被过滤出来。',
            'type' => 'string',
            'required' => false,
            'example' => 'key1',
          ),
        ),
        7 => 
        array (
          'name' => 'Provider',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '模型提供者',
            'description' => '提供者。指定提供者，则只返回该提供者公开的模型。不填则返回用户自己的模型。',
            'type' => 'string',
            'required' => false,
            'example' => 'pai',
          ),
        ),
        8 => 
        array (
          'name' => 'Domain',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '领域',
            'description' => '配置领域来过滤该领域内的模型列表。例如：nlp（自然语言处理）、cv（计算机视觉）等。',
            'type' => 'string',
            'required' => false,
            'example' => 'nlp',
          ),
        ),
        9 => 
        array (
          'name' => 'Task',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '模型任务',
            'description' => '配置任务来过滤属于该任务类型的模型列表。例如：text-classification（文本分类）等。',
            'type' => 'string',
            'required' => false,
            'example' => 'text-classification',
          ),
        ),
        10 => 
        array (
          'name' => 'Origin',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '模型源',
            'description' => '配置模型源，来过滤属于该社区或组织的模型列表。例如ModelScope，HuggingFace等。',
            'type' => 'string',
            'required' => false,
            'example' => 'ModelScope',
          ),
        ),
        11 => 
        array (
          'name' => 'Query',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '筛选请求串',
            'description' => '配置查询条件。ModelName、Domain、Task、LabelKey、LabelValue相似匹配。
例如输入为nlp，则ModelName、Domain、Task、LabelKey、LabelValue中匹配的模型都会返回。',
            'type' => 'string',
            'required' => false,
            'example' => 'nlp',
          ),
        ),
        12 => 
        array (
          'name' => 'ModelType',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '模型类型',
            'description' => '模型类型',
            'type' => 'string',
            'required' => false,
            'example' => 'Endpoint',
          ),
        ),
        13 => 
        array (
          'name' => 'Collections',
          'in' => 'query',
          'allowEmptyValue' => false,
          'schema' => 
          array (
            'title' => '模型所在Collection，支持填写多个，用英文逗号分割',
            'description' => '模型所在Collection，支持填写多个，用英文逗号分割',
            'type' => 'string',
            'required' => false,
            'example' => 'AI4D,QuickStart',
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
            'description' => '返回体。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '5A14FA81-DD4E-******-6343FE44B941',
              ),
              'Models' => 
              array (
                'title' => '模型列表',
                'description' => '模型列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '模型。',
                  '$ref' => '#/components/schemas/Model',
                ),
              ),
              'TotalCount' => 
              array (
                'title' => '总数',
                'description' => '模型总数。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '15',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"5A14FA81-DD4E-******-6343FE44B941\\",\\n  \\"Models\\": [\\n    {\\n      \\"ModelId\\": \\"model-1123*****\\",\\n      \\"ModelName\\": \\"\\",\\n      \\"GmtCreateTime\\": \\"2021-01-21T17:12:35Z\\",\\n      \\"GmtModifiedTime\\": \\"2021-01-21T17:12:35Z\\",\\n      \\"WorkspaceId\\": \\"234**\\",\\n      \\"UserId\\": \\"1557702098******\\",\\n      \\"OwnerId\\": \\"1557702098******\\",\\n      \\"ModelDescription\\": \\"\\",\\n      \\"Accessibility\\": \\"PUBLIC\\",\\n      \\"LatestVersion\\": {\\n        \\"VersionName\\": \\"1.0.0\\",\\n        \\"GmtCreateTime\\": \\"2021-01-21T17:12:35Z\\",\\n        \\"GmtModifiedTime\\": \\"2021-01-21T17:12:35Z\\",\\n        \\"UserId\\": \\"155770209******\\",\\n        \\"OwnerId\\": \\"155770209******\\",\\n        \\"Uri\\": \\"oss://bucket/path-to-model\\",\\n        \\"VersionDescription\\": \\"\\",\\n        \\"Labels\\": [\\n          {\\n            \\"Key\\": \\"\\",\\n            \\"Value\\": \\"\\"\\n          }\\n        ],\\n        \\"FormatType\\": \\"SavedModel\\",\\n        \\"FrameworkType\\": \\"TensorFlow\\",\\n        \\"Options\\": \\"\\",\\n        \\"Metrics\\": {\\n          \\"test\\": \\"test\\",\\n          \\"test2\\": 1\\n        },\\n        \\"TrainingSpec\\": {\\n          \\"test\\": \\"test\\",\\n          \\"test2\\": 1\\n        },\\n        \\"InferenceSpec\\": {\\n          \\"test\\": \\"test\\",\\n          \\"test2\\": 1\\n        },\\n        \\"EvaluationSpec\\": {\\n          \\"test\\": \\"test\\",\\n          \\"test2\\": 1\\n        },\\n        \\"SourceType\\": \\"\\",\\n        \\"SourceId\\": \\"\\",\\n        \\"ApprovalStatus\\": \\"\\",\\n        \\"ExtraInfo\\": {\\n          \\"test\\": \\"test\\",\\n          \\"test2\\": 1\\n        }\\n      },\\n      \\"Labels\\": [\\n        {\\n          \\"Key\\": \\"\\",\\n          \\"Value\\": \\"\\"\\n        }\\n      ],\\n      \\"OrderNumber\\": 101,\\n      \\"Origin\\": \\"ModelScope\\",\\n      \\"Domain\\": \\"cv\\",\\n      \\"Task\\": \\"text-classifiaction\\",\\n      \\"ModelDoc\\": \\"https://***.md\\",\\n      \\"Provider\\": \\"pai\\",\\n      \\"ExtraInfo\\": {\\n        \\"test\\": \\"test\\",\\n        \\"test2\\": 1\\n      },\\n      \\"ModelType\\": \\"Checkpoint\\"\\n    }\\n  ],\\n  \\"TotalCount\\": 15\\n}","type":"json"}]',
      'title' => '获取模型列表',
    ),
    'DeleteModel' => 
    array (
      'summary' => '删除模型。',
      'path' => '/api/v1/models/{ModelId}',
      'methods' => 
      array (
        0 => 'delete',
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
          'name' => 'ModelId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '模型ID',
            'description' => '模型ID。如何获取模型ID，请参见[ListModels](~~461944~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'model-rbvg5wzl****ks92',
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
            'description' => '返回体。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '5A14FA81-DD4E-******-6343FE44B941',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"5A14FA81-DD4E-******-6343FE44B941\\"\\n}","type":"json"}]',
      'title' => '删除模型',
    ),
    'CreateModelVersion' => 
    array (
      'summary' => '为指定模型新增版本。',
      'path' => '/api/v1/models/{ModelId}/versions',
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
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '请求体。',
            'type' => 'object',
            'properties' => 
            array (
              'VersionName' => 
              array (
                'title' => '模型版本，模型下唯一。',
                'description' => '模型版本，模型下唯一。如果不填写该参数，则默认**0.1.0**为第一个版本。之后子版本号依次加1，例如：第二个版本号默认为**0.2.0**。
版本号由主版本号、子版本号和阶段版本号组成，通过半角句号（.）分隔。其中：主版本号、子版本号为数字，阶段版本号以数字开头，下划线和字母组成。例如：版本号为1.1.0或2.3.4_beta。',
                'type' => 'string',
                'required' => false,
                'example' => '0.1.0',
              ),
              'Uri' => 
              array (
                'title' => '版本Uri',
                'description' => '模型版本URI，即模型存储位置。模型地址类型如下：
- 模型的HTTP（S）地址，例如：`https://myweb.com/mymodel.tar.gz`。
- 如果模型存储在OSS中，格式为`oss://<bucket>.<endpoint>/object`。其中endpoint配置，请参见[访问域名和数据中心](~~31837~~)，例如：`oss://mybucket.oss-cn-beijing.aliyuncs.com/mypath/`。',
                'type' => 'string',
                'required' => true,
                'example' => 'oss://mybucket.oss-cn-beijing.aliyuncs.com/mypath/',
              ),
              'Labels' => 
              array (
                'title' => '标签',
                'description' => '标签列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '标签。',
                  'required' => false,
                  '$ref' => '#/components/schemas/Label',
                ),
                'required' => false,
              ),
              'VersionDescription' => 
              array (
                'title' => '版本描述',
                'description' => '模型版本描述。',
                'type' => 'string',
                'required' => false,
                'example' => '情感分析。',
              ),
              'FormatType' => 
              array (
                'title' => '模型类型',
                'description' => '模型格式，取值如下：
- OfflineModel
- SavedModel
- Keras H5
- Frozen Pb
- Caffe Prototxt
- TorchScript
- XGBoost
- PMML
- AlinkModel
- ONNX',
                'type' => 'string',
                'required' => false,
                'enumValueTitles' => 
                array (
                  'OfflineModel' => 'OfflineModel',
                  'SavedModel' => 'SavedModel',
                  'Keras H5' => 'Keras H5',
                  'Frozen Pb' => 'Frozen Pb',
                  'Caffe Prototxt' => 'Caffe Prototxt',
                  'TorchScript' => 'TorchScript',
                  'XGBoost' => 'XGBoost',
                  'PMML' => 'PMML',
                  'AlinkModel' => 'AlinkModel',
                  'ONNX' => 'ONNX',
                ),
                'example' => 'SavedModel',
              ),
              'FrameworkType' => 
              array (
                'title' => '模型框架',
                'description' => '模型框架，取值如下：
- Pytorch
-XGBoost
- Keras
- Caffe
- Alink
- Xflow
- TensorFlow',
                'type' => 'string',
                'required' => false,
                'enumValueTitles' => 
                array (
                  'Pytorch' => 'Pytorch',
                  'XGBoost' => 'XGBoost',
                  'Keras' => 'Keras',
                  'Caffe' => 'Caffe',
                  'Alink' => 'Alink',
                  'Xflow' => 'Xflow',
                  'TensorFlow' => 'TensorFlow',
                ),
                'example' => 'TensorFlow',
              ),
              'Options' => 
              array (
                'title' => '扩展字段',
                'description' => '扩展字段。JsonString类型。',
                'type' => 'string',
                'required' => false,
                'example' => '{}',
              ),
              'Metrics' => 
              array (
                'title' => '指标',
                'description' => '模型指标。
序列化后长度限制为8192。',
                'type' => 'object',
                'required' => false,
                'example' => '{
  "Results": [{
    "Dataset": {
      "DatasetId": "d-sdkjanksaklerhfd"
    },
    "Metrics": {
      "cer": 0.175
    }
  }, {
    "Dataset": {
      "Uri": "oss://xxxx/"
    },
    "Metrics": {
      "cer": 0.172
    }
  }]
}',
              ),
              'TrainingSpec' => 
              array (
                'title' => '训练配置',
                'description' => '训练配置。用于微调、增量训练的配置。',
                'type' => 'object',
                'required' => false,
                'example' => '{}',
              ),
              'InferenceSpec' => 
              array (
                'title' => '描述如何应用于下游的推理应用',
                'description' => '描述如何应用于下游的推理服务：例如描述EAS的processor、container等。例如：
`{
    "processor": "tensorflow_gpu_1.12"
}`',
                'type' => 'object',
                'required' => false,
                'example' => '{
    "processor": "tensorflow_gpu_1.12"
}',
              ),
              'EvaluationSpec' => 
              array (
                'title' => '评测配置',
                'description' => '评测配置。',
                'type' => 'object',
                'required' => false,
                'example' => '{}',
              ),
              'SourceType' => 
              array (
                'title' => '来源类型',
                'description' => '模型来源类型，取值如下：
- Custom（默认值）：自定义。
- PAIFlow：PAI工作流。
- TrainingService：PAI训练服务。',
                'type' => 'string',
                'required' => false,
                'enumValueTitles' => 
                array (
                  'PAIFlow' => 'PAIFlow',
                  'Custom' => 'Custom',
                  'TrainingService' => 'TrainingService',
                ),
                'example' => 'PAIFlow',
              ),
              'SourceId' => 
              array (
                'title' => '来源ID',
                'description' => '来源ID。
* 来源类型为Custom时，该字段不做限制。
* 来源为PAIFlow、TrainingService时，格式为 
```
region=<region_id>,workspaceId=<workspace_id>,kind=<kind>,id=<id>
```
其中：
- region为阿里云区域ID。
- workspaceId为工作空间ID。
- kind：为类型。取值：PipelineRun（PAIFlow工作流）；ServiceJob（训练服务）。
- id：为唯一标识。',
                'type' => 'string',
                'required' => false,
                'example' => 'region=cn-shanghai,workspaceId=13**,kind=PipelineRun,id=run-sakdb****jdf',
              ),
              'ApprovalStatus' => 
              array (
                'title' => '准入状态',
                'description' => '准入状态，取值如下：
- Pending：待定。
- Approved：允许上线。
- Rejected：不允许上线。',
                'type' => 'string',
                'required' => false,
                'example' => 'Approved',
              ),
              'ExtraInfo' => 
              array (
                'title' => '其它信息',
                'description' => '其它信息。',
                'type' => 'object',
                'required' => false,
                'example' => '{
	"CoverUris": ["https://e***u.oss-cn-hangzhou.aliyuncs.com/st****017.preview.png"],
	"TrainedWords": ["albedo_overlord"]
}',
              ),
            ),
            'required' => false,
          ),
        ),
        1 => 
        array (
          'name' => 'ModelId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '模型ID',
            'description' => '模型ID。如何获取模型ID，请参见[ListModels](~~461944~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'model-dfs1****5c',
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
            'description' => '返回体。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '21645FCD-BAB9-5742-89AE-AEB27****B2E',
              ),
              'VersionName' => 
              array (
                'title' => '模型名称',
                'description' => '模型版本。',
                'type' => 'string',
                'example' => '0.1.0',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"21645FCD-BAB9-5742-89AE-AEB27****B2E\\",\\n  \\"VersionName\\": \\"0.1.0\\"\\n}","type":"json"}]',
      'title' => '创建模型版本',
    ),
    'UpdateModelVersion' => 
    array (
      'summary' => '更新模型版本。',
      'path' => '/api/v1/models/{ModelId}/versions/{VersionName}',
      'methods' => 
      array (
        0 => 'put',
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
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '请求体。',
            'type' => 'object',
            'properties' => 
            array (
              'VersionDescription' => 
              array (
                'title' => '模型版本描述',
                'description' => '模型版本描述。',
                'type' => 'string',
                'required' => false,
                'example' => '通用情感分析。',
              ),
              'Metrics' => 
              array (
                'title' => '指标',
                'description' => '模型指标。
序列化后长度限制为8192。',
                'type' => 'object',
                'required' => false,
                'example' => '{
  "Results": [{
    "Dataset": {
      "DatasetId": "d-sdkjanksaklerhfd"
    },
    "Metrics": {
      "cer": 0.175
    }
  }, {
    "Dataset": {
      "Uri": "oss://xxxx/"
    },
    "Metrics": {
      "cer": 0.172
    }
  }]
}',
              ),
              'TrainingSpec' => 
              array (
                'title' => '描述训练配置',
                'description' => '训练配置。用于微调，增量训练的配置。',
                'type' => 'object',
                'required' => false,
                'example' => '{}',
              ),
              'InferenceSpec' => 
              array (
                'title' => '描述下游的推理应用',
                'description' => '描述如何应用于下游的推理应用：例如描述EAS的processor、container等。例如：
`{
    "processor": "tensorflow_gpu_1.12"
}`。',
                'type' => 'object',
                'required' => false,
                'example' => '{
	"processor": "tensorflow_gpu_1.12"
}',
              ),
              'EvaluationSpec' => 
              array (
                'title' => '评测配置',
                'description' => '评测配置。',
                'type' => 'object',
                'required' => false,
                'example' => '{}',
              ),
              'Options' => 
              array (
                'title' => '扩展字段。',
                'description' => '扩展字段，JsonString类型。',
                'type' => 'string',
                'required' => false,
                'example' => '{}',
              ),
              'SourceType' => 
              array (
                'title' => '来源类型',
                'description' => '模型来源类型，取值如下：
- Custom（默认值）：自定义。
- PAIFlow：PAI工作流。
- TrainingService：PAI训练服务。',
                'type' => 'string',
                'required' => false,
                'enumValueTitles' => 
                array (
                  'PAIFlow' => 'PAIFlow',
                  'Custom' => 'Custom',
                  'TrainingService' => 'TrainingService',
                ),
                'example' => 'PAIFlow',
              ),
              'SourceId' => 
              array (
                'title' => '来源ID',
                'description' => '来源ID。
* 来源类型为Custom时，该字段不做限制。
* 来源为PAIFlow、TrainingService时，格式为 
```
region=<region_id>,workspaceId=<workspace_id>,kind=<kind>,id=<id>
```
其中：
- region为阿里云区域ID。
- workspaceId为工作空间ID。
- kind：为类型。取值：PipelineRun（PAIFlow工作流）；ServiceJob（训练服务）。
- id：为唯一标识。',
                'type' => 'string',
                'required' => false,
                'example' => 'region=cn-shanghai,workspaceId=13**,kind=PipelineRun,id=run-sakdb****jdf',
              ),
              'ApprovalStatus' => 
              array (
                'title' => '准入状态',
                'description' => '准入状态，取值如下：
- Pending：待定。
- Approved：允许上线。
- Rejected：不允许上线。',
                'type' => 'string',
                'required' => false,
                'example' => 'Approved',
              ),
              'ExtraInfo' => 
              array (
                'title' => '其它信息',
                'description' => '其它信息。',
                'type' => 'object',
                'required' => false,
                'example' => '{
	"CoverUris": ["https://e***u.oss-cn-hangzhou.aliyuncs.com/st****017.preview.png"],
	"TrainedWords": ["albedo_overlord"]
}',
              ),
            ),
            'required' => false,
          ),
        ),
        1 => 
        array (
          'name' => 'ModelId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '模型ID',
            'description' => '模型ID。如何获取模型ID，请参见[ListModels](~~461944~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'model-dfs1****5c',
          ),
        ),
        2 => 
        array (
          'name' => 'VersionName',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '模型版本',
            'description' => '模型版本。',
            'type' => 'string',
            'required' => true,
            'example' => '0.1.0',
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
            'description' => '返回体。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'D5BFFEE3-6025-443F-8A03-02D61***C4B9',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"D5BFFEE3-6025-443F-8A03-02D61***C4B9\\"\\n}","type":"json"}]',
      'title' => '更新模型版本',
    ),
    'GetModelVersion' => 
    array (
      'summary' => '获取模型版本。',
      'path' => '/api/v1/models/{ModelId}/versions/{VersionName}',
      'methods' => 
      array (
        0 => 'get',
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
          'name' => 'ModelId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '模型ID',
            'description' => '模型ID。如何获取模型ID，请参见[ListModels](~~461944~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'model-rbvg5wzljz****ks92',
          ),
        ),
        1 => 
        array (
          'name' => 'VersionName',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '模型版本',
            'description' => '模型版本。',
            'type' => 'string',
            'required' => true,
            'example' => '1.0.1',
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
            'description' => '返回体。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => '请求ID',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '5A14FA81-DD4E-******-6343FE44B941',
              ),
              'GmtCreateTime' => 
              array (
                'title' => '创建时间',
                'description' => '创建模型UTC时间，格式ISO8601。',
                'type' => 'string',
                'example' => '2021-01-30T12:51:33.028Z',
              ),
              'GmtModifiedTime' => 
              array (
                'title' => '最后更新时间',
                'description' => '最后更新模型UTC时间，格式ISO8601。',
                'type' => 'string',
                'example' => '2021-01-30T12:51:33.028Z',
              ),
              'UserId' => 
              array (
                'title' => '创建者ID',
                'description' => '用户ID。',
                'type' => 'string',
                'example' => '1234567890******',
              ),
              'OwnerId' => 
              array (
                'title' => '云账号ID',
                'description' => '阿里云账号ID。',
                'type' => 'string',
                'example' => '1234567890******',
              ),
              'Uri' => 
              array (
                'title' => '模型Uri',
                'description' => '模型版本URI，即模型存储位置。可能值为：
- 模型的HTTP（S）地址，例如：`https://myweb.com/mymodel.tar.gz`。
- 如果模型存储在OSS中，格式为`oss://<bucket>.<endpoint>/object`。其中endpoint配置，请参见[访问域名和数据中心](~~31837~~)，例如：`oss://mybucket.oss-cn-beijing.aliyuncs.com/mypath/`。',
                'type' => 'string',
                'example' => 'oss://t***.cn-beijing.oss.aliyuncs.com/mod**/',
              ),
              'Labels' => 
              array (
                'title' => '模型版本标签',
                'description' => '模型版本标签列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '标签。',
                  '$ref' => '#/components/schemas/Label',
                ),
              ),
              'Options' => 
              array (
                'title' => '扩展字段',
                'description' => '扩展字段。JsonString类型。',
                'type' => 'string',
                'example' => '{}',
              ),
              'VersionName' => 
              array (
                'title' => '版本名',
                'description' => '模型版本。',
                'type' => 'string',
                'example' => '0.1.0',
              ),
              'VersionDescription' => 
              array (
                'title' => '版本描述',
                'description' => '模型版本描述。',
                'type' => 'string',
                'example' => '通用情感分析。',
              ),
              'TrainingSpec' => 
              array (
                'title' => '训练配置',
                'description' => '训练配置。用于微调，增量训练的配置。',
                'type' => 'object',
                'example' => '{}',
              ),
              'InferenceSpec' => 
              array (
                'title' => '下游部署配置',
                'description' => '描述如何应用于下游的推理服务：例如描述EAS的processor、container等。',
                'type' => 'object',
                'example' => '{
    "Processor": "tensorflow_gpu_1.12"
}',
              ),
              'FormatType' => 
              array (
                'title' => '模型格式',
                'description' => '模型格式，可能值：
- OfflineModel
- SavedModel
- Keras H5
- Frozen Pb
- Caffe Prototxt
- TorchScript
- XGBoost
- PMML
- AlinkModel
- ONNX',
                'type' => 'string',
                'enumValueTitles' => 
                array (
                  'OfflineModel' => 'OfflineModel',
                  'SavedModel' => 'SavedModel',
                  'Keras H5' => 'Keras H5',
                  'Frozen Pb' => 'Frozen Pb',
                  'Caffe Prototxt' => 'Caffe Prototxt',
                  'TorchScript' => 'TorchScript',
                  'XGBoost' => 'XGBoost',
                  'PMML' => 'PMML',
                  'AlinkModel' => 'AlinkModel',
                  'ONNX' => 'ONNX',
                ),
                'example' => 'SavedModel',
              ),
              'FrameworkType' => 
              array (
                'title' => '模型框架',
                'description' => '模型框架，可能值：
- Pytorch
-XGBoost
- Keras
- Caffe
- Alink
- Xflow
- TensorFlow',
                'type' => 'string',
                'enumValueTitles' => 
                array (
                  'Pytorch' => 'Pytorch',
                  'XGBoost' => 'XGBoost',
                  'Keras' => 'Keras',
                  'Caffe' => 'Caffe',
                  'Alink' => 'Alink',
                  'Xflow' => 'Xflow',
                  'TensorFlow' => 'TensorFlow',
                ),
                'example' => 'TensorFlow',
              ),
              'SourceType' => 
              array (
                'title' => '来源类型',
                'description' => '模型来源类型，可能值：
- Custom：自定义。
- PAIFlow：PAI工作流。
- TrainingService：PAI训练服务。',
                'type' => 'string',
                'enumValueTitles' => 
                array (
                  'PAIFlow' => 'PAIFlow',
                  'Custom' => 'Custom',
                  'TrainingService' => 'TrainingService',
                ),
                'example' => 'PAIFlow',
              ),
              'SourceId' => 
              array (
                'title' => '来源ID',
                'description' => '来源ID。
* 来源类型为Custom时，该字段不做限制。
* 来源为PAIFlow、TrainingService时，格式为 
```
region=<region_id>,workspaceId=<workspace_id>,kind=<kind>,id=<id>
```
其中：
- region为阿里云区域ID。
- workspaceId为工作空间ID。
- kind：为类型。取值：PipelineRun（PAIFlow工作流）；ServiceJob（训练服务）。
- id：为唯一标识。',
                'type' => 'string',
                'example' => 'region=cn-shanghai,workspaceId=13**,kind=PipelineRun,id=run-sakdb****jdf',
              ),
              'ApprovalStatus' => 
              array (
                'title' => '准入状态',
                'description' => '准入状态，取值如下：
- Pending：待定。
- Approved：允许上线。
- Rejected：不允许上线。',
                'type' => 'string',
                'example' => 'Approved',
              ),
              'ExtraInfo' => 
              array (
                'title' => '其它信息',
                'description' => '其它信息。',
                'type' => 'object',
                'example' => '{
	"CoverUris": ["https://e***u.oss-cn-hangzhou.aliyuncs.com/st****017.preview.png"],
	"TrainedWords": ["albedo_overlord"]
}',
              ),
              'EvaluationSpec' => 
              array (
                'title' => '评测配置',
                'description' => '评测配置',
                'type' => 'object',
                'example' => '{}',
              ),
              'Metrics' => 
              array (
                'title' => '指标',
                'description' => '指标',
                'type' => 'object',
                'example' => '{}',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"5A14FA81-DD4E-******-6343FE44B941\\",\\n  \\"GmtCreateTime\\": \\"2021-01-30T12:51:33.028Z\\",\\n  \\"GmtModifiedTime\\": \\"2021-01-30T12:51:33.028Z\\",\\n  \\"UserId\\": \\"1234567890******\\",\\n  \\"OwnerId\\": \\"1234567890******\\",\\n  \\"Uri\\": \\"oss://t***.cn-beijing.oss.aliyuncs.com/mod**/\\",\\n  \\"Labels\\": [\\n    {\\n      \\"Key\\": \\"\\",\\n      \\"Value\\": \\"\\"\\n    }\\n  ],\\n  \\"Options\\": \\"{}\\",\\n  \\"VersionName\\": \\"0.1.0\\",\\n  \\"VersionDescription\\": \\"通用情感分析。\\",\\n  \\"TrainingSpec\\": {},\\n  \\"InferenceSpec\\": {\\n    \\"Processor\\": \\"tensorflow_gpu_1.12\\"\\n  },\\n  \\"FormatType\\": \\"SavedModel\\",\\n  \\"FrameworkType\\": \\"TensorFlow\\",\\n  \\"SourceType\\": \\"PAIFlow\\",\\n  \\"SourceId\\": \\"region=cn-shanghai,workspaceId=13**,kind=PipelineRun,id=run-sakdb****jdf\\",\\n  \\"ApprovalStatus\\": \\"Approved\\",\\n  \\"ExtraInfo\\": {\\n    \\"CoverUris\\": [\\n      \\"https://e***u.oss-cn-hangzhou.aliyuncs.com/st****017.preview.png\\"\\n    ],\\n    \\"TrainedWords\\": [\\n      \\"albedo_overlord\\"\\n    ]\\n  },\\n  \\"EvaluationSpec\\": {},\\n  \\"Metrics\\": {}\\n}","type":"json"}]',
      'title' => '获取模型版本',
    ),
    'ListModelVersions' => 
    array (
      'summary' => '获取模型版本列表。',
      'path' => '/api/v1/models/{ModelId}/versions',
      'methods' => 
      array (
        0 => 'get',
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
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '页数',
            'description' => '模型版本列表的页码。起始值为1，默认为1。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        1 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '每页大小',
            'description' => '分页查询时设置的每页行数。默认为10。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '10',
          ),
        ),
        2 => 
        array (
          'name' => 'Order',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '顺序',
            'description' => '分页查询时，对指定的排序字段进行升序或降序。默认ASC。
- ASC：升序。
- DESC：降序。',
            'type' => 'string',
            'required' => false,
            'example' => 'DESC',
          ),
        ),
        3 => 
        array (
          'name' => 'SortBy',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '排序依据',
            'description' => '分页查询时的排序字段。目前GmtCreateTime字段用于排序。',
            'type' => 'string',
            'required' => false,
            'example' => 'GmtCreateTime',
          ),
        ),
        4 => 
        array (
          'name' => 'VersionName',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '模型版本名称',
            'description' => '配置模型版本名称，来过滤模型版本列表。',
            'type' => 'string',
            'required' => false,
            'example' => '1.0.1',
          ),
        ),
        5 => 
        array (
          'name' => 'FormatType',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '模型格式类型',
            'description' => '配置模型格式，来过滤模型版本列表。取值如下：
- OfflineModel
- SavedModel
- Keras H5
- Frozen Pb
- Caffe Prototxt
- TorchScript
- XGBoost
- PMML
- AlinkModel
- ONNX',
            'type' => 'string',
            'required' => false,
            'enumValueTitles' => 
            array (
              'OfflineModel' => 'OfflineModel',
              'SavedModel' => 'SavedModel',
              'Keras H5' => 'Keras H5',
              'Frozen Pb' => 'Frozen Pb',
              'Caffe Prototxt' => 'Caffe Prototxt',
              'TorchScript' => 'TorchScript',
              'XGBoost' => 'XGBoost',
              'PMML' => 'PMML',
              'AlinkModel' => 'AlinkModel',
              'ONNX' => 'ONNX',
            ),
            'example' => 'SavedModel',
          ),
        ),
        6 => 
        array (
          'name' => 'FrameworkType',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '模型框架',
            'description' => '配置模型框架，来过滤模型版本列表，取值如下：
- Pytorch
-XGBoost
- Keras
- Caffe
- Alink
- Xflow
- TensorFlow',
            'type' => 'string',
            'required' => false,
            'enumValueTitles' => 
            array (
              'Pytorch' => 'Pytorch',
              'XGBoost' => 'XGBoost',
              'Keras' => 'Keras',
              'Caffe' => 'Caffe',
              'Alink' => 'Alink',
              'Xflow' => 'Xflow',
              'TensorFlow' => 'TensorFlow',
            ),
            'example' => 'TensorFlow',
          ),
        ),
        7 => 
        array (
          'name' => 'ModelId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '模型ID',
            'description' => '模型ID。如何获取模型ID，请参见[ListModels](~~461944~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'model-dajbueh******',
          ),
        ),
        8 => 
        array (
          'name' => 'SourceType',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '来源类型',
            'description' => '根据模型来源类型，来过滤模型版本列表。取值如下：
- Custom（默认值）：自定义。
- PAIFlow：PAI工作流。
- TrainingService：PAI训练服务。',
            'type' => 'string',
            'required' => false,
            'enumValueTitles' => 
            array (
              'PAIFlow' => 'PAIFlow',
              'Custom' => 'Custom',
              'TrainingService' => 'TrainingService',
            ),
            'example' => 'PAIFlow',
          ),
        ),
        9 => 
        array (
          'name' => 'SourceId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '来源ID',
            'description' => '来源ID。
* 来源类型为Custom时，该字段不做限制。
* 来源为PAIFlow、TrainingService时，格式为 
```
region=<region_id>,workspaceId=<workspace_id>,kind=<kind>,id=<id>
```
其中：
- region为阿里云区域ID。
- workspacceId为工作空间ID。
- kind：为类型。取值：PipelineRun（PAIFlow工作流）；ServiceJob（训练服务）。
- id：为唯一标识。',
            'type' => 'string',
            'required' => false,
            'example' => 'region=cn-shanghai,workspaceId=13**,kind=PipelineRun,id=run-sakdb****jdf',
          ),
        ),
        10 => 
        array (
          'name' => 'Label',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '标签串',
            'description' => '标签串。用于列表过滤，标签中Key或Value中，有指定字符串的，都会被过滤出来。',
            'type' => 'string',
            'required' => false,
            'example' => 'key1',
          ),
        ),
        11 => 
        array (
          'name' => 'ApprovalStatus',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '准入状态',
            'description' => '根据准入状态来过滤模型版本列表，取值如下：
- Pending：待定。
- Approved：允许上线。
- Rejected：不允许上线。',
            'type' => 'string',
            'required' => false,
            'example' => 'Approved',
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
            'description' => '返回体。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '473469C7-AA6F-4DC5-B3DB-A3DC***3C83E',
              ),
              'Versions' => 
              array (
                'title' => '模型版本列表',
                'description' => '模型版本列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '模型版本。',
                  '$ref' => '#/components/schemas/ModelVersion',
                ),
              ),
              'TotalCount' => 
              array (
                'title' => '总数',
                'description' => '模型版本列表总数。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '15',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"473469C7-AA6F-4DC5-B3DB-A3DC***3C83E\\",\\n  \\"Versions\\": [\\n    {\\n      \\"VersionName\\": \\"1.0.0\\",\\n      \\"GmtCreateTime\\": \\"2021-01-21T17:12:35Z\\",\\n      \\"GmtModifiedTime\\": \\"2021-01-21T17:12:35Z\\",\\n      \\"UserId\\": \\"155770209******\\",\\n      \\"OwnerId\\": \\"155770209******\\",\\n      \\"Uri\\": \\"oss://bucket/path-to-model\\",\\n      \\"VersionDescription\\": \\"\\",\\n      \\"Labels\\": [\\n        {\\n          \\"Key\\": \\"\\",\\n          \\"Value\\": \\"\\"\\n        }\\n      ],\\n      \\"FormatType\\": \\"SavedModel\\",\\n      \\"FrameworkType\\": \\"TensorFlow\\",\\n      \\"Options\\": \\"\\",\\n      \\"Metrics\\": {\\n        \\"test\\": \\"test\\",\\n        \\"test2\\": 1\\n      },\\n      \\"TrainingSpec\\": {\\n        \\"test\\": \\"test\\",\\n        \\"test2\\": 1\\n      },\\n      \\"InferenceSpec\\": {\\n        \\"test\\": \\"test\\",\\n        \\"test2\\": 1\\n      },\\n      \\"EvaluationSpec\\": {\\n        \\"test\\": \\"test\\",\\n        \\"test2\\": 1\\n      },\\n      \\"SourceType\\": \\"\\",\\n      \\"SourceId\\": \\"\\",\\n      \\"ApprovalStatus\\": \\"\\",\\n      \\"ExtraInfo\\": {\\n        \\"test\\": \\"test\\",\\n        \\"test2\\": 1\\n      }\\n    }\\n  ],\\n  \\"TotalCount\\": 15\\n}","type":"json"}]',
      'title' => '获取模型版本列表',
    ),
    'DeleteModelVersion' => 
    array (
      'summary' => '删除模型版本。',
      'path' => '/api/v1/models/{ModelId}/versions/{VersionName}',
      'methods' => 
      array (
        0 => 'delete',
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
          'name' => 'ModelId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '模型ID',
            'description' => '模型ID。如何获取模型ID，请参见[ListModels](~~461944~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'model-rbvg5wzljz****ks92',
          ),
        ),
        1 => 
        array (
          'name' => 'VersionName',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '模型版本',
            'description' => '模型版本。',
            'type' => 'string',
            'required' => true,
            'example' => '0.1.1',
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
            'description' => '返回体。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '5A14FA81-DD4E-******-6343FE44B941',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"5A14FA81-DD4E-******-6343FE44B941\\"\\n}","type":"json"}]',
      'title' => '删除模型版本',
    ),
    'CreateModelLabels' => 
    array (
      'summary' => '为模型创建标签。',
      'path' => '/api/v1/models/{ModelId}/labels',
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
          'name' => 'ModelId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '模型ID',
            'description' => '模型ID。如何获取模型ID，请参见[ListModels](~~461944~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'model-1dkasjfhds23dft',
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
              'Labels' => 
              array (
                'description' => '标签列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '标签。',
                  'required' => false,
                  '$ref' => '#/components/schemas/Label',
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
            'description' => '返回体。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'F81D9EC0-1872-50F5-A96C-A0647D****1D',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"F81D9EC0-1872-50F5-A96C-A0647D****1D\\"\\n}","type":"json"}]',
      'title' => '创建模型标签',
    ),
    'DeleteModelLabels' => 
    array (
      'summary' => '删除模型标签。',
      'path' => '/api/v1/models/{ModelId}/labels',
      'methods' => 
      array (
        0 => 'delete',
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
          'name' => 'ModelId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '模型ID',
            'description' => '模型ID。如何获取模型ID，请参见[ListModels](~~461944~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'model-d8dfd****sjfd',
          ),
        ),
        1 => 
        array (
          'name' => 'LabelKeys',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '需要删除的标签Keys',
            'description' => '需要删除的标签键。多项之间使用半角逗号（,）分隔。',
            'type' => 'string',
            'required' => false,
            'example' => 'key1,key2',
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
            'description' => '返回体。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '5A14FA81-DD4E-******-6343FE44B941',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"5A14FA81-DD4E-******-6343FE44B941\\"\\n}","type":"json"}]',
      'title' => '删除模型标签',
    ),
    'CreateModelVersionLabels' => 
    array (
      'summary' => '为模型版本创建标签。',
      'path' => '/api/v1/models/{ModelId}/versions/{VersionName}/labels',
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
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '请求体。',
            'type' => 'object',
            'properties' => 
            array (
              'Labels' => 
              array (
                'title' => '版本标签',
                'description' => '标签列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '标签。',
                  'required' => false,
                  '$ref' => '#/components/schemas/Label',
                ),
                'required' => false,
              ),
            ),
            'required' => false,
          ),
        ),
        1 => 
        array (
          'name' => 'ModelId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '模型ID',
            'description' => '模型ID。如何获取模型ID，请参见[ListModels](~~461944~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'model-rbvg5wzljz****ks92',
          ),
        ),
        2 => 
        array (
          'name' => 'VersionName',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '模型版本',
            'description' => '模型版本。',
            'type' => 'string',
            'required' => true,
            'example' => '0.1.1',
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
            'description' => '返回体。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '5A14FA81-DD4E-******-6343FE44B941',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"5A14FA81-DD4E-******-6343FE44B941\\"\\n}","type":"json"}]',
      'title' => '创建模型版本标签',
    ),
    'DeleteModelVersionLabels' => 
    array (
      'summary' => '删除模型版本标签。',
      'path' => '/api/v1/models/{ModelId}/versions/{VersionName}/labels',
      'methods' => 
      array (
        0 => 'delete',
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
          'name' => 'ModelId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '模型ID',
            'description' => '模型ID。如何获取模型ID，请参见[ListModels](~~461944~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'model-d8dfd****sjfd',
          ),
        ),
        1 => 
        array (
          'name' => 'VersionName',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '模型版本',
            'description' => '模型版本。',
            'type' => 'string',
            'required' => true,
            'example' => '0.1.1',
          ),
        ),
        2 => 
        array (
          'name' => 'LabelKeys',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '版本标签Keys',
            'description' => '需要删除的标签键。多项之间使用半角逗号（,）分隔。',
            'type' => 'string',
            'required' => false,
            'example' => 'key1,key2',
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
            'description' => '返回体。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '5A14FA81-DD4E-******-6343FE44B941',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"5A14FA81-DD4E-******-6343FE44B941\\"\\n}","type":"json"}]',
      'title' => '删除模型版本标签',
    ),
    'ListProducts' => 
    array (
      'summary' => '列举产品',
      'path' => '/api/v1/products',
      'methods' => 
      array (
        0 => 'get',
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
          'name' => 'ProductCodes',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '逗号分割的商品 code',
            'type' => 'string',
            'required' => false,
            'example' => 'PAI_isolate',
          ),
        ),
        1 => 
        array (
          'name' => 'ServiceCodes',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '逗号分割的服务 code',
            'type' => 'string',
            'example' => 'oss',
          ),
        ),
        2 => 
        array (
          'name' => 'Verbose',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'boolean',
            'default' => 'false',
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
              'RequestId' => 
              array (
                'title' => '请求 id',
                'type' => 'string',
                'example' => '1e195c5116124202371861018d5bde',
              ),
              'Products' => 
              array (
                'title' => '产品列表',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'PurchaseUrl' => 
                    array (
                      'title' => '购买链接',
                      'type' => 'string',
                      'example' => 'https://common-buy.aliy',
                    ),
                    'ProductCode' => 
                    array (
                      'title' => '商品 code',
                      'type' => 'string',
                      'example' => 'DataWorks_isolate',
                    ),
                    'IsPurchased' => 
                    array (
                      'title' => '是否已购买',
                      'type' => 'boolean',
                      'example' => 'true',
                    ),
                    'HasPermissionToPurchase' => 
                    array (
                      'title' => 'Whether user has permission to purchase',
                      'type' => 'boolean',
                    ),
                    'ProductInstanceId' => 
                    array (
                      'type' => 'string',
                    ),
                  ),
                ),
              ),
              'Services' => 
              array (
                'title' => '服务列表',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'IsOpen' => 
                    array (
                      'title' => '是否开通',
                      'type' => 'boolean',
                      'example' => 'true',
                    ),
                    'OpenUrl' => 
                    array (
                      'title' => '开通链接',
                      'type' => 'string',
                    ),
                    'ServiceCode' => 
                    array (
                      'title' => '服务Code',
                      'type' => 'string',
                      'example' => 'oss',
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '',
    ),
    'CreateProductOrders' => 
    array (
      'summary' => '购买产品，目前只支持购买DataWorks后付费、OSS后付费、PAI后付费、MaxCompute后付费。',
      'path' => '/api/v1/productorders',
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
        'abilityTreeCode' => '75124',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATURElearnOTS2AE',
        ),
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
            'description' => '购买请求',
            'type' => 'object',
            'properties' => 
            array (
              'AutoPay' => 
              array (
                'title' => '是否自动购买所有产品',
                'description' => '是否自动购买（支付）Products参数中传入的所有产品。
- true：自动支付。
- false：不自动支付。',
                'type' => 'boolean',
                'required' => false,
                'example' => 'true',
              ),
              'Products' => 
              array (
                'description' => '需要购买的产品列表，使用逗号分割。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '需要购买的产品。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'AutoRenew' => 
                    array (
                      'description' => '是否自动续费。
- true：自动续费。
- false：不自动续费。',
                      'type' => 'boolean',
                      'required' => false,
                      'enumValueTitles' => 
                      array (
                        'true' => 'true',
                        'false' => 'false',
                      ),
                      'example' => 'true',
                    ),
                    'ProductCode' => 
                    array (
                      'description' => '产品code，目前支持的如下code：

- DataWorks_share：Dataworks后付费商品。
- MaxCompute_share：MaxCompute后付费商品。
- PAI_share：PAI后付费商品。
- OSS_share：OSS后付费商品。',
                      'type' => 'string',
                      'required' => false,
                      'enumValueTitles' => 
                      array (
                        'MaxCompute_share' => 'MaxCompute_share',
                        'OSS_share' => 'OSS_share',
                        'DataWorks_share' => 'DataWorks_share',
                        'PAI_share' => 'PAI_share',
                      ),
                      'example' => 'DataWorks_share',
                    ),
                    'ChargeType' => 
                    array (
                      'description' => '付费类型，目前支持POSTPAY。',
                      'type' => 'string',
                      'required' => false,
                      'enumValueTitles' => 
                      array (
                        'POSTPAY' => 'POSTPAY',
                      ),
                      'example' => 'POSTPAY',
                    ),
                    'OrderType' => 
                    array (
                      'description' => '订单类型，目前只支持BUY。',
                      'type' => 'string',
                      'required' => false,
                      'enumValueTitles' => 
                      array (
                        'BUY' => 'BUY',
                      ),
                      'example' => 'BUY',
                    ),
                    'PricingCycle' => 
                    array (
                      'description' => '计价单位，目前支持如下值
- Month：按月计价，DataWorks_share只支持Month。
- Hour：按小时计价，OSS_share、MaxCompute_share只支持Hour。',
                      'type' => 'string',
                      'required' => false,
                      'enumValueTitles' => 
                      array (
                        'Month' => 'Month',
                        'Hour' => 'Hour',
                      ),
                      'example' => 'Month',
                    ),
                    'Duration' => 
                    array (
                      'description' => '购买时长，与pricingCycle配合使用，目前只支持1。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'required' => false,
                      'example' => '1',
                    ),
                    'InstanceProperties' => 
                    array (
                      'description' => '实例属性信息列表。
- DataWorks_share：
[ {
"Code": "region",
"Value": "cn-shanghai"
}
]
- OSS_share：
[ {
"Code": "commodity_type",
"Value": "oss",
"Name": "对象存储OSS"
},
{
"Code": "ord_time",
"Value": "1:Hour",
"Name": "1小时"
}
]
- PAI_share: 无
- 国内bid MaxCompute_share：
[
{
"Code": "region",
"Value": "cn-hangzhou"
},
{
"Code": "odps_specification_type",
"Value": "OdpsStandard"
},
{
"Code": "ord_time",
"Value": "1:Hour"
}
]
- 国际bid MaxCompute_share：
[
{
"Code": "region",
"Value": "cn-hangzhou"
},
{
"Code": "ord_time",
"Value": "1:Hour"
}
]',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '实例属性信息。',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'Code' => 
                          array (
                            'description' => '实例属性Code。',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'commodity_type。',
                          ),
                          'Name' => 
                          array (
                            'description' => '实例属性Name。',
                            'type' => 'string',
                            'required' => false,
                            'example' => '对象存储OSS。',
                          ),
                          'Value' => 
                          array (
                            'description' => '实例属性Value。',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'oss。',
                          ),
                        ),
                        'required' => false,
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
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求 ID',
                'type' => 'string',
                'example' => 'ksdjf-jksd-*****slkdjf',
              ),
              'OrderId' => 
              array (
                'title' => '订单id',
                'description' => '购买订单ID。',
                'type' => 'string',
                'example' => '210292536260646',
              ),
              'Message' => 
              array (
                'title' => '消息',
                'description' => '购买返回消息。',
                'type' => 'string',
                'example' => '正常',
              ),
              'BuyProductRequestId' => 
              array (
                'title' => '产品购买请求id',
                'description' => '产品购买请求ID。',
                'type' => 'string',
                'example' => '3ed6a882-0d85-4dd8-ad36-cd8d74ab9fdb',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"ksdjf-jksd-*****slkdjf\\",\\n  \\"OrderId\\": \\"210292536260646\\",\\n  \\"Message\\": \\"正常\\",\\n  \\"BuyProductRequestId\\": \\"3ed6a882-0d85-4dd8-ad36-cd8d74ab9fdb\\"\\n}","errorExample":""},{"type":"xml","example":"<CreateProductOrdersResponse>\\n    <requestId>473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E</requestId>\\n    <OrderId>210292536260646</OrderId>\\n    <Message>正常</Message>\\n    <BuyProductRequestId>3ed6a882-0d85-4dd8-ad36-cd8d74ab9fdb</BuyProductRequestId>\\n</CreateProductOrdersResponse>","errorExample":""}]',
    ),
    'ListServiceTemplates' => 
    array (
      'summary' => '获取服务模板列表，目前只支持pai平台提供服务模板。',
      'path' => '/api/v1/servicetemplates',
      'methods' => 
      array (
        0 => 'get',
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
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '页数',
            'description' => '页数。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        1 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '每页大小',
            'description' => '每页大小。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '10',
          ),
        ),
        2 => 
        array (
          'name' => 'Order',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '顺序',
            'description' => '顺序。',
            'type' => 'string',
            'required' => false,
            'enumValueTitles' => 
            array (
              'ASC' => 'ASC',
              'DESC' => 'DESC',
            ),
            'example' => 'DESC',
          ),
        ),
        3 => 
        array (
          'name' => 'SortBy',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '排序依据',
            'description' => '排序依据。',
            'type' => 'string',
            'required' => false,
            'enumValueTitles' => 
            array (
              'OrderNumber' => 'OrderNumber',
              'GmtCreateTime' => 'GmtCreateTime',
              'GmtModifiedTime' => 'GmtModifiedTime',
            ),
            'example' => 'GmtCreateTime',
          ),
        ),
        4 => 
        array (
          'name' => 'ServiceTemplateName',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '服务模版名称',
            'description' => '服务模板名称。',
            'type' => 'string',
            'required' => false,
            'example' => 'stable_diffusion_aigc',
          ),
        ),
        5 => 
        array (
          'name' => 'Label',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '标签',
            'description' => '模糊搜索匹配Label key与value。',
            'type' => 'string',
            'required' => false,
            'example' => 'aigc',
          ),
        ),
        6 => 
        array (
          'name' => 'Provider',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '模型提供者',
            'description' => '提供者。获取pai平台提供的服务模板，则本字段填"pai"。',
            'type' => 'string',
            'required' => false,
            'example' => 'pai',
          ),
        ),
        7 => 
        array (
          'name' => 'Query',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '筛选请求串',
            'description' => '筛选请求串，模糊搜索匹配ServiceTemplateName，Label key与value。',
            'type' => 'string',
            'required' => false,
            'example' => 'aigc',
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
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '40325405-579C-4D82****',
              ),
              'ServiceTemplates' => 
              array (
                'title' => '服务模版列表',
                'description' => '服务模版列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '服务模板对象。',
                  '$ref' => '#/components/schemas/ServiceTemplate',
                ),
              ),
              'TotalCount' => 
              array (
                'title' => '总数',
                'description' => '总数。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '15',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"40325405-579C-4D82****\\",\\n  \\"ServiceTemplates\\": [\\n    {\\n      \\"ServiceTemplateId\\": \\"st-asdkjf**skdhh\\",\\n      \\"ServiceTemplateName\\": \\"foo\\",\\n      \\"GmtCreateTime\\": \\"2021-01-21T17:12:35Z\\",\\n      \\"GmtModifiedTime\\": \\"2021-01-21T17:12:35Z\\",\\n      \\"UserId\\": \\"155770209****904\\",\\n      \\"OwnerId\\": \\"155770209****904\\",\\n      \\"OrderNumber\\": 1,\\n      \\"Provider\\": \\"pai\\",\\n      \\"ServiceTemplateDoc\\": \\"https://***.md\\",\\n      \\"ServiceTemplateDescription\\": \\"这里是一个描述。\\",\\n      \\"InferenceSpec\\": {\\n        \\"processor\\": \\"tensorflow_gpu_1.12\\"\\n      },\\n      \\"Labels\\": [\\n        {\\n          \\"Key\\": \\"\\",\\n          \\"Value\\": \\"\\"\\n        }\\n      ]\\n    }\\n  ],\\n  \\"TotalCount\\": 15\\n}","type":"json"}]',
      'title' => '获取服务模板列表',
    ),
    'GetServiceTemplate' => 
    array (
      'summary' => '获取服务模板详情。目前只支持pai提供的服务模板。',
      'path' => '/api/v1/servicetemplates/{ServiceTemplateId}',
      'methods' => 
      array (
        0 => 'get',
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
          'name' => 'ServiceTemplateId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '服务模版ID',
            'description' => '服务模版ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'st-rbvg5wzl****c9ks92',
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
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '40325405-579C-4D82****',
              ),
              'ServiceTemplateId' => 
              array (
                'title' => '服务模版ID',
                'description' => '服务模版ID。',
                'type' => 'string',
                'example' => 'st-rbvg5wzlj****9ks92',
              ),
              'ServiceTemplateName' => 
              array (
                'title' => '名称',
                'description' => '名称。',
                'type' => 'string',
                'example' => 'stable_diffusion_aigc',
              ),
              'ServiceTemplateDescription' => 
              array (
                'title' => '描述',
                'description' => '描述。',
                'type' => 'string',
                'example' => 'stable diffusion 1.5',
              ),
              'GmtCreateTime' => 
              array (
                'title' => '创建时间',
                'description' => '创建时间。',
                'type' => 'string',
                'example' => '2021-01-30T12:51:33.028Z',
              ),
              'GmtModifiedTime' => 
              array (
                'title' => '最后更新时间',
                'description' => '最后更新时间。',
                'type' => 'string',
                'example' => '2021-01-30T12:51:33.028Z',
              ),
              'UserId' => 
              array (
                'title' => '创建者ID',
                'description' => '创建者ID。',
                'type' => 'string',
                'example' => '1234567890******',
              ),
              'OwnerId' => 
              array (
                'title' => '云账号ID',
                'description' => '云账号ID。',
                'type' => 'string',
                'example' => '1234567890******',
              ),
              'Provider' => 
              array (
                'title' => '提供者',
                'description' => '提供者。',
                'type' => 'string',
                'example' => 'pai',
              ),
              'ServiceTemplateDoc' => 
              array (
                'title' => '文档',
                'description' => '介绍文档。',
                'type' => 'string',
                'example' => 'https://***.md',
              ),
              'Labels' => 
              array (
                'title' => '标签',
                'description' => '标签列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '标签。',
                  '$ref' => '#/components/schemas/Label',
                ),
              ),
              'InferenceSpec' => 
              array (
                'title' => '模版配置',
                'description' => '模版配置。',
                'type' => 'object',
                'example' => '{
      "processor": "tensorflow_gpu_1.12"
}',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"40325405-579C-4D82****\\",\\n  \\"ServiceTemplateId\\": \\"st-rbvg5wzlj****9ks92\\",\\n  \\"ServiceTemplateName\\": \\"stable_diffusion_aigc\\",\\n  \\"ServiceTemplateDescription\\": \\"stable diffusion 1.5\\",\\n  \\"GmtCreateTime\\": \\"2021-01-30T12:51:33.028Z\\",\\n  \\"GmtModifiedTime\\": \\"2021-01-30T12:51:33.028Z\\",\\n  \\"UserId\\": \\"1234567890******\\",\\n  \\"OwnerId\\": \\"1234567890******\\",\\n  \\"Provider\\": \\"pai\\",\\n  \\"ServiceTemplateDoc\\": \\"https://***.md\\",\\n  \\"Labels\\": [\\n    {\\n      \\"Key\\": \\"\\",\\n      \\"Value\\": \\"\\"\\n    }\\n  ],\\n  \\"InferenceSpec\\": {\\n    \\"processor\\": \\"tensorflow_gpu_1.12\\"\\n  }\\n}","type":"json"}]',
      'title' => '获取服务模板',
    ),
  ),
  'endpoints' => 
  array (
    0 => 
    array (
      'regionId' => 'cn-shanghai-finance-1',
      'endpoint' => 'aiworkspace.cn-shanghai-finance-1.aliyuncs.com',
    ),
    1 => 
    array (
      'regionId' => 'cn-beijing',
      'endpoint' => 'aiworkspace.cn-beijing.aliyuncs.com',
    ),
    2 => 
    array (
      'regionId' => 'cn-hangzhou',
      'endpoint' => 'aiworkspace.cn-hangzhou.aliyuncs.com',
    ),
    3 => 
    array (
      'regionId' => 'cn-shanghai',
      'endpoint' => 'aiworkspace.cn-shanghai.aliyuncs.com',
    ),
    4 => 
    array (
      'regionId' => 'cn-shenzhen',
      'endpoint' => 'aiworkspace.cn-shenzhen.aliyuncs.com',
    ),
    5 => 
    array (
      'regionId' => 'cn-hongkong',
      'endpoint' => 'aiworkspace.cn-hongkong.aliyuncs.com',
    ),
    6 => 
    array (
      'regionId' => 'ap-southeast-1',
      'endpoint' => 'aiworkspace.ap-southeast-1.aliyuncs.com',
    ),
    7 => 
    array (
      'regionId' => 'ap-southeast-3',
      'endpoint' => 'aiworkspace.ap-southeast-3.aliyuncs.com',
    ),
    8 => 
    array (
      'regionId' => 'ap-southeast-5',
      'endpoint' => 'aiworkspace.ap-southeast-5.aliyuncs.com',
    ),
    9 => 
    array (
      'regionId' => 'us-east-1',
      'endpoint' => 'aiworkspace.us-east-1.aliyuncs.com',
    ),
    10 => 
    array (
      'regionId' => 'us-west-1',
      'endpoint' => 'aiworkspace.us-west-1.aliyuncs.com',
    ),
    11 => 
    array (
      'regionId' => 'eu-central-1',
      'endpoint' => 'aiworkspace.eu-central-1.aliyuncs.com',
    ),
    12 => 
    array (
      'regionId' => 'ap-south-1',
      'endpoint' => 'aiworkspace.ap-south-1.aliyuncs.com',
    ),
    13 => 
    array (
      'regionId' => 'cn-wulanchabu',
      'endpoint' => 'aiworkspace.cn-wulanchabu.aliyuncs.com',
    ),
    14 => 
    array (
      'regionId' => 'cn-heyuan',
      'endpoint' => 'aiworkspace.cn-heyuan.aliyuncs.com',
    ),
  ),
);
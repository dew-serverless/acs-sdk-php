<?php return [
    'version' => '1.0',
    'info' => [
        'style' => 'RPC',
        'product' => 'viapi-regen',
        'version' => '2021-11-19',
    ],
    'directories' => [
        [
            'id' => 0,
            'title' => '其它',
            'type' => 'directory',
            'children' => [
                'CreateDataset',
                'CreateLabelset',
                'CreateService',
                'CreateTrainTask',
                'CreateWorkspace',
                'DebugService',
                'DeleteDataset',
                'DeleteLabelset',
                'DeleteService',
                'DeleteTrainTask',
                'DeleteWorkspace',
                'DownloadLabelFile',
                'GetDataset',
                'GetLabelDetail',
                'GetLabelset',
                'GetService',
                'GetTrainModel',
                'GetTrainTask',
                'GetTrainTaskEstimatedTime',
                'GetUploadPolicy',
                'GetWorkspace',
                'ListDatasetDatas',
                'ListDatasets',
                'ListLabelsetDatas',
                'ListLabelsets',
                'ListServices',
                'ListTrainTasks',
                'ListWorkspaces',
                'SetDatasetUserOssPath',
                'StartService',
                'StartTrainTask',
                'StopService',
                'StopTrainTask',
                'UpdateDataset',
                'UpdateLabelset',
                'UpdateService',
                'UpdateTrainTask',
                'UpdateWorkspace',
                'CreateTagTask',
                'DeleteLabelsetData',
                'GetDiffCountLabelsetAndDataset',
                'DownloadFileNameList',
                'CustomizeClassifyImage',
                'CustomizeDetectImage',
                'CustomizeInstanceSegmentImage',
                'GetServiceQps',
                'GetServiceInvoke',
                'DownloadDataset',
                'DeleteDataReflowData',
                'ListDataReflowDatas',
                'DisableDataReflow',
                'ExportDataReflowDataList',
                'EnableDataReflow',
                'GetUserInfo',
                'CheckDatasetOssBucketCORS',
            ],
        ],
    ],
    'components' => [
        'schemas' => [],
    ],
    'apis' => [
        'CreateDataset' => [
            'methods' => [
                'post',
                'get',
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
                    'name' => 'WorkspaceId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '空间id',
                        'description' => '工作空间ID。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '63',
                    ],
                ],
                [
                    'name' => 'Name',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '数据集名称',
                        'description' => '数据集名称。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'test2',
                    ],
                ],
                [
                    'name' => 'Description',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '描述',
                        'description' => '数据集描述。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'test2',
                    ],
                ],
                [
                    'name' => 'Type',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '类型',
                        'description' => '数据集归属类型。取值如下：'."\n"
                            ."\n"
                            .'- ALIYUN： 用户选择自己本地的文件上传'."\n"
                            .'- USER：用户选择自己OSS的数据上传',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'ALIYUN',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '每个请求分配唯一的服务器请求ID。',
                                'type' => 'string',
                                'example' => 'F1138931-D4AE-0471-A8C9-0814D7513C2D',
                            ],
                            'Data' => [
                                'description' => '出参数据实体。',
                                'type' => 'object',
                                'properties' => [
                                    'Id' => [
                                        'description' => '数据集ID。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '148',
                                    ],
                                    'GmtCreate' => [
                                        'description' => '创建时间。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '1634199437188',
                                    ],
                                    'Name' => [
                                        'description' => '数据集名称。',
                                        'type' => 'string',
                                        'example' => 'test2',
                                    ],
                                    'Description' => [
                                        'description' => '数据集描述。',
                                        'type' => 'string',
                                        'example' => 'test2',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"F1138931-D4AE-0471-A8C9-0814D7513C2D\\",\\n  \\"Data\\": {\\n    \\"Id\\": 148,\\n    \\"GmtCreate\\": 1634199437188,\\n    \\"Name\\": \\"test2\\",\\n    \\"Description\\": \\"test2\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<CreateDatasetResponse>\\n    <RequestId>F1138931-D4AE-0471-A8C9-0814D7513C2D</RequestId>\\n    <Data>\\n        <Id>148</Id>\\n        <GmtCreate>1634199437188</GmtCreate>\\n        <Name>test2</Name>\\n        <Description>test2</Description>\\n    </Data>\\n</CreateDatasetResponse>","errorExample":""}]',
            'title' => '创建数据集',
            'summary' => '创建数据集CreateDataset的语法及示例。',
            'description' => '## 功能描述'."\n"
                .'通过生产空间ID，创建生产空间下的新数据集。'."\n"
                ."\n"
                .'> - 您可以进入[在线咨询](https://www.aliyun.com/core/online-consult?from=aZgW6LJHr2)获取在线人工帮助。'."\n"
                .'- 阿里云视觉智能开放平台视觉AI能力API接入、接口使用或问题咨询等，请通过钉钉群（23109592）加入阿里云视觉智能开放平台咨询群联系我们。'."\n"
                ."\n"
                .'## 接入指引'."\n"
                .'1. 注册阿里云账号：打开[阿里云官网](https://www.aliyun.com)，在阿里云官网右上角，单击**立即注册**，按照操作提示完成账号注册。'."\n"
                .'2. 开通能力：请确保您已开通自学习服务，若未开通服务请[立即开通](https://common-buy.aliyun.com/?commodityCode=viapi_selflearning_public_cn)。'."\n"
                .'3. 创建AccessKey：请确保您已[创建AccessKey](~~175144~~)，如果您使用的是子账号AccessKey，您需要给子账号赋予AliyunVIAPIFullAccess权限，具体操作，请参见[RAM授权](~~145025~~)。'."\n"
                .'4. 在线调试（可选）：您可以通过[OpenAPI Explorer](https://next.api.aliyun.com/api/viapi-regen/2021-11-19/CreateDataset?lang=JAVA&sdkStyle=old)在线调试能力，查看完整的调用示例代码及SDK依赖信息，也可以下载完整的工程。'."\n"
                .'5. 开发接入步骤：    '."\n"
                .'- 在[SDK总览](~~145033~~)中选择您要接入使用的SDK语言。'."\n"
                .'- 在对应语言的SDK文档中找到AI类目为自学习（viapi-regen）类目的SDK包进行安装。'."\n"
                .'- 参考文档中提供的示例代码进行适当修改后调用。'."\n"
                ."\n"
                .'6. 客户端直接调用：该能力常用的客户端调用方式包括以下几种。'."\n"
                .'- [Web前端直接调用](~~467779~~)'."\n"
                .'- [小程序场景下直接调用](~~467780~~)'."\n"
                .'- [Android端直接调用](~~467781~~)'."\n"
                .'- [iOS端直接调用](~~467782~~)',
            'responseParamsDescription' => '## SDK参考'."\n"
                .'阿里云视觉AI自学习类目下的创建数据集能力推荐使用SDK调用，支持多种编程语言，调用时请选择AI类目为自学习（viapi-regen）的SDK包，文件参数通过SDK调用可支持本地文件及任意URL，具体可参见[SDK总览](~~145033~~)。',
            'extraInfo' => '## 错误码'."\n"
                .'关于创建数据集的错误码，详情请参见[常见错误码](~~441239~~)。'."\n"
                ."\n"
                .'## 安全声明'."\n"
                .'- 请确保上传的图片或文件来源符合相应的法律法规。'."\n"
                .'- 通过体验调试上传的临时文件有效期为1小时，在24小时后会被系统自动清理删除。',
        ],
        'CreateLabelset' => [
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
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'DatasetId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '数据集ID。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '120',
                    ],
                ],
                [
                    'name' => 'Name',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '标注名称。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'test3',
                    ],
                ],
                [
                    'name' => 'Description',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '标注描述。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'test3',
                    ],
                ],
                [
                    'name' => 'PreLabelId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '预标注标识。仅在`Type=USE_LABEL_SYSTEM`时生效。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '123',
                    ],
                ],
                [
                    'name' => 'Type',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '标注类型。取值如下：'."\n"
                            ."\n"
                            .'- UPLOAD_FILE：上传标注文件'."\n"
                            .'- SELECT_FILE：选择标注文件'."\n"
                            .'- USE_LABEL_SYSTEM：选择标注系统'."\n",
                        'type' => 'string',
                        'required' => true,
                        'example' => 'UPLOAD_FILE',
                    ],
                ],
                [
                    'name' => 'ObjectKey',
                    'in' => 'formData',
                    'schema' => [
                        'description' => 'Object名。使用UTF-8编码；长度在1-1023之间；不能以“/”“\\”开头。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'daily/label/120/1634196189161_1631762324685_1631174016651_small.csv',
                    ],
                ],
                [
                    'name' => 'UserOssUrl',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '用户选择的OSS路径。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'oss://regen-test-bucket/jhdtest/picture/',
                    ],
                ],
                [
                    'name' => 'TagSettings',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '打标设置。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '{"tags":["红绿灯","信号灯"]}',
                    ],
                ],
                [
                    'name' => 'TagUserList',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '打标人列表。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '["123123434341","3423423424324"]',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '每个请求分配唯一的服务器请求ID。',
                                'type' => 'string',
                                'example' => 'F2C4BA2A-C1A5-0565-BFE9-28A1FE7C6CE3',
                            ],
                            'Data' => [
                                'description' => '出参数据实体。',
                                'type' => 'object',
                                'properties' => [
                                    'Id' => [
                                        'description' => '标注ID。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '229',
                                    ],
                                    'GmtCreate' => [
                                        'description' => '创建时间。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '1634196198553',
                                    ],
                                    'Name' => [
                                        'description' => '标注名称。',
                                        'type' => 'string',
                                        'example' => 'test3',
                                    ],
                                    'Description' => [
                                        'description' => '标注描述。',
                                        'type' => 'string',
                                        'example' => 'test3',
                                    ],
                                    'LabelType' => [
                                        'description' => '标注类型。取值如下：'."\n"
                                            ."\n"
                                            .'- UPLOAD_FILE：上传标注文件'."\n"
                                            .'- SELECT_FILE：选择标注文件'."\n"
                                            .'- USE_LABEL_SYSTEM：选择标注系统',
                                        'type' => 'string',
                                        'example' => 'UPLOAD_FILE',
                                    ],
                                    'Status' => [
                                        'description' => '标注状态。取值如下：'."\n"
                                            ."\n"
                                            .'- FILE_CHECKING：文件格式校验中'."\n"
                                            ."\n"
                                            .'- FILE_CHECK_SUCCESS：文件格式校验成功'."\n"
                                            ."\n"
                                            .'- FILE_CHECK_FAIL：文件格式校验失败',
                                        'type' => 'string',
                                        'example' => 'FILE_CHECKING',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"F2C4BA2A-C1A5-0565-BFE9-28A1FE7C6CE3\\",\\n  \\"Data\\": {\\n    \\"Id\\": 229,\\n    \\"GmtCreate\\": 1634196198553,\\n    \\"Name\\": \\"test3\\",\\n    \\"Description\\": \\"test3\\",\\n    \\"LabelType\\": \\"UPLOAD_FILE\\",\\n    \\"Status\\": \\"FILE_CHECKING\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<CreateLabelsetResponse>\\n    <RequestId>F2C4BA2A-C1A5-0565-BFE9-28A1FE7C6CE3</RequestId>\\n    <Data>\\n        <Id>229</Id>\\n        <GmtCreate>1634196198553</GmtCreate>\\n        <Name>test3</Name>\\n        <Description>test3</Description>\\n        <LabelType>UPLOAD_FILE</LabelType>\\n        <Status>FILE_CHECKING</Status>\\n    </Data>\\n</CreateLabelsetResponse>","errorExample":""}]',
            'title' => '创建标注集',
            'summary' => '创建标注集CreateLabelset的语法及示例。',
            'description' => '## 功能描述'."\n"
                .'通过数据集ID，为此数据集创建新的标注。'."\n"
                ."\n"
                .'> - 您可以进入[在线咨询](https://www.aliyun.com/core/online-consult?from=aZgW6LJHr2)获取在线人工帮助。'."\n"
                .'- 阿里云视觉智能开放平台视觉AI能力API接入、接口使用或问题咨询等，请通过钉钉群（23109592）加入阿里云视觉智能开放平台咨询群联系我们。'."\n"
                ."\n"
                .'## 接入指引'."\n"
                .'1. 注册阿里云账号：打开[阿里云官网](https://www.aliyun.com)，在阿里云官网右上角，单击**立即注册**，按照操作提示完成账号注册。'."\n"
                .'2. 开通能力：请确保您已开通自学习服务，若未开通服务请[立即开通](https://common-buy.aliyun.com/?commodityCode=viapi_selflearning_public_cn)。'."\n"
                .'3. 创建AccessKey：请确保您已[创建AccessKey](~~175144~~)，如果您使用的是子账号AccessKey，您需要给子账号赋予AliyunVIAPIFullAccess权限，具体操作，请参见[RAM授权](~~145025~~)。'."\n"
                .'4. 在线调试（可选）：您可以通过[OpenAPI Explorer](https://next.api.aliyun.com/api/viapi-regen/2021-11-19/CreateLabelset?lang=JAVA&sdkStyle=old)在线调试能力，查看完整的调用示例代码及SDK依赖信息，也可以下载完整的工程。'."\n"
                .'5. 开发接入步骤：    '."\n"
                .'- 在[SDK总览](~~145033~~)中选择您要接入使用的SDK语言。'."\n"
                .'- 在对应语言的SDK文档中找到AI类目为自学习（viapi-regen）类目的SDK包进行安装。'."\n"
                .'- 参考文档中提供的示例代码进行适当修改后调用。'."\n"
                ."\n"
                .'6. 客户端直接调用：该能力常用的客户端调用方式包括以下几种。'."\n"
                .'- [Web前端直接调用](~~467779~~)'."\n"
                .'- [小程序场景下直接调用](~~467780~~)'."\n"
                .'- [Android端直接调用](~~467781~~)'."\n"
                .'- [iOS端直接调用](~~467782~~)',
            'responseParamsDescription' => '## SDK参考'."\n"
                .'阿里云视觉AI自学习类目下的创建标注集能力推荐使用SDK调用，支持多种编程语言，调用时请选择AI类目为自学习（viapi-regen）的SDK包，文件参数通过SDK调用可支持本地文件及任意URL，具体可参见[SDK总览](~~145033~~)。',
            'extraInfo' => '## 错误码'."\n"
                .'关于创建标注集的错误码，详情请参见[常见错误码](~~441239~~)。'."\n"
                .'## 安全声明'."\n"
                .'- 请确保上传的图片或文件来源符合相应的法律法规。'."\n"
                .'- 通过体验调试上传的临时文件有效期为1小时，在24小时后会被系统自动清理删除。',
        ],
        'CreateService' => [
            'methods' => [
                'post',
                'get',
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
                    'name' => 'TrainTaskId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '训练任务ID，用以标识唯一训练任务。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '58',
                    ],
                ],
                [
                    'name' => 'Name',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '发布服务名称。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'test3',
                    ],
                ],
                [
                    'name' => 'Description',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '发布服务描述。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'test3',
                    ],
                ],
                [
                    'name' => 'AuthorizationType',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '授权类型。取值：'."\n"
                            .'- PUBLIC：指当前服务可被任何账号调用访问。'."\n"
                            .'- DESIGNATED_ACCOUNT：指当前服务只能被指定的账户访问。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'DESIGNATED_ACCOUNT',
                    ],
                ],
                [
                    'name' => 'AuthorizedAccount',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '授权账号，可以指定允许访问当前服务的账户。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '1716735326807772,1219984605228589',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '每个请求分配唯一的服务器请求ID。',
                                'type' => 'string',
                                'example' => '776E3AEA-938D-079F-91BB-7D783AE60265',
                            ],
                            'Data' => [
                                'description' => '出参数据实体。',
                                'type' => 'object',
                                'properties' => [
                                    'Id' => [
                                        'description' => '服务ID。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '28',
                                    ],
                                    'GmtCreate' => [
                                        'description' => '创建时间。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '1634106777620',
                                    ],
                                    'ServiceName' => [
                                        'description' => '服务名称。',
                                        'type' => 'string',
                                        'example' => 'test3',
                                    ],
                                    'ServiceDescription' => [
                                        'description' => '服务描述。',
                                        'type' => 'string',
                                        'example' => 'test3',
                                    ],
                                    'Status' => [
                                        'description' => '服务当前状态。取值如下：'."\n"
                                            ."\n"
                                            .'- INIT：初始化'."\n"
                                            ."\n"
                                            .'- STARTING：开始运行'."\n"
                                            ."\n"
                                            .'- RUNNING：运行'."\n"
                                            ."\n"
                                            .'- START_FAIL：启动失败'."\n"
                                            ."\n"
                                            .'- STOPPING：停止运行',
                                        'type' => 'string',
                                        'example' => 'INIT',
                                    ],
                                    'AuthorizationType' => [
                                        'description' => '授权类型。取值：'."\n"
                                            .'- PUBLIC：指当前服务可被任何账号调用访问。'."\n"
                                            .'- DESIGNATED_ACCOUNT：指当前服务只能被指定的账户访问。',
                                        'type' => 'string',
                                        'example' => 'DESIGNATED_ACCOUNT',
                                    ],
                                    'AuthorizedAccount' => [
                                        'description' => '授权账号。',
                                        'type' => 'string',
                                        'example' => '1716735326807772,1219984605228589',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"776E3AEA-938D-079F-91BB-7D783AE60265\\",\\n  \\"Data\\": {\\n    \\"Id\\": 28,\\n    \\"GmtCreate\\": 1634106777620,\\n    \\"ServiceName\\": \\"test3\\",\\n    \\"ServiceDescription\\": \\"test3\\",\\n    \\"Status\\": \\"INIT\\",\\n    \\"AuthorizationType\\": \\"DESIGNATED_ACCOUNT\\",\\n    \\"AuthorizedAccount\\": \\"1716735326807772,1219984605228589\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<CreateServiceResponse>\\n    <RequestId>776E3AEA-938D-079F-91BB-7D783AE60265</RequestId>\\n    <Data>\\n        <Id>28</Id>\\n        <GmtCreate>1634106777620</GmtCreate>\\n        <ServiceName>test3</ServiceName>\\n        <ServiceDescription>test3</ServiceDescription>\\n        <Status>INIT</Status>\\n        <AuthorizationType>DESIGNATED_ACCOUNT</AuthorizationType>\\n        <AuthorizedAccount>1716735326807772,1219984605228589</AuthorizedAccount>\\n    </Data>\\n</CreateServiceResponse>","errorExample":""}]',
            'title' => '创建服务',
            'summary' => '创建服务CreateService的语法及示例。',
            'description' => '## 功能描述'."\n"
                .'通过训练任务ID，输入服务名称和接口地址发布新服务。'."\n"
                ."\n"
                .'> - 您可以进入[在线咨询](https://www.aliyun.com/core/online-consult?from=aZgW6LJHr2)获取在线人工帮助。'."\n"
                .'- 阿里云视觉智能开放平台视觉AI能力API接入、接口使用或问题咨询等，请通过钉钉群（23109592）加入阿里云视觉智能开放平台咨询群联系我们。'."\n"
                ."\n"
                .'## 接入指引'."\n"
                .'1. 注册阿里云账号：打开[阿里云官网](https://www.aliyun.com)，在阿里云官网右上角，单击**立即注册**，按照操作提示完成账号注册。'."\n"
                .'2. 开通能力：请确保您已开通自学习服务，若未开通服务请[立即开通](https://common-buy.aliyun.com/?commodityCode=viapi_selflearning_public_cn)。'."\n"
                .'3. 创建AccessKey：请确保您已[创建AccessKey](~~175144~~)，如果您使用的是子账号AccessKey，您需要给子账号赋予AliyunVIAPIFullAccess权限，具体操作，请参见[RAM授权](~~145025~~)。'."\n"
                .'4. 在线调试（可选）：您可以通过[OpenAPI Explorer](https://next.api.aliyun.com/api/viapi-regen/2021-11-19/CreateService?lang=JAVA&sdkStyle=old)在线调试能力，查看完整的调用示例代码及SDK依赖信息，也可以下载完整的工程。'."\n"
                .'5. 开发接入步骤：    '."\n"
                .'- 在[SDK总览](~~145033~~)中选择您要接入使用的SDK语言。'."\n"
                .'- 在对应语言的SDK文档中找到AI类目为自学习（viapi-regen）类目的SDK包进行安装。'."\n"
                .'- 参考文档中提供的示例代码进行适当修改后调用。'."\n"
                ."\n"
                .'6. 客户端直接调用：该能力常用的客户端调用方式包括以下几种。'."\n"
                .'- [Web前端直接调用](~~467779~~)'."\n"
                .'- [小程序场景下直接调用](~~467780~~)'."\n"
                .'- [Android端直接调用](~~467781~~)'."\n"
                .'- [iOS端直接调用](~~467782~~)',
            'responseParamsDescription' => '## SDK参考'."\n"
                .'阿里云视觉AI自学习类目下的创建服务能力推荐使用SDK调用，支持多种编程语言，调用时请选择AI类目为自学习（viapi-regen）的SDK包，文件参数通过SDK调用可支持本地文件及任意URL，具体可参见[SDK总览](~~145033~~)。',
            'extraInfo' => '## 错误码'."\n"
                .'关于创建服务的错误码，详情请参见[常见错误码](~~441239~~)。'."\n"
                ."\n"
                .'## 安全声明'."\n"
                .'- 请确保上传的图片或文件来源符合相应的法律法规。'."\n"
                .'- 通过体验调试上传的临时文件有效期为1小时，在24小时后会被系统自动清理删除。',
        ],
        'CreateTrainTask' => [
            'methods' => [
                'post',
                'get',
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
                    'name' => 'WorkspaceId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '工作空间ID。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '63',
                    ],
                ],
                [
                    'name' => 'Name',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '新建训练任务名称。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'test3',
                    ],
                ],
                [
                    'name' => 'DatasetIds',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '多训练集数据集ID的集合。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '558,549',
                    ],
                ],
                [
                    'name' => 'LabelIds',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '多训练集标注集ID的集合。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '971,955',
                    ],
                ],
                [
                    'name' => 'Description',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '新建训练任务描述。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'test3',
                    ],
                ],
                [
                    'name' => 'PreTrainTaskId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '基于之前的训练任务ID。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '132',
                    ],
                ],
                [
                    'name' => 'TrainMode',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '训练模型。取值如下 ：'."\n"
                            ."\n"
                            .'- **COMMON**：均衡'."\n"
                            .'- **HIGH_ACC**：高精度'."\n"
                            .'- **HIGH_PERF**：高性能',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'COMMON',
                    ],
                ],
                [
                    'name' => 'AdvancedParameters',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '- **Epoch**：学习轮数'."\n"
                            .'- **Lr**：学习率'."\n"
                            .'- **height**：图片高'."\n"
                            .'- **width**：图片宽'."\n"
                            .'- **ValidationDatasetId**：验证数据集ID'."\n"
                            .'- **ValidationLabelId**：验证标注集ID'."\n"
                            .'- **TestDatasetId**：测试数据集ID'."\n"
                            .'- **TestLabelId**：测试标注集ID',
                        'type' => 'string',
                        'required' => false,
                        'example' => '{ 		"Epoch": 23, 		"Lr": 0.5, 		"height": "23", 		"width": "32", 		"ValidationDatasetId": 948, 		"ValidationLabelId": 1266, 		"TestDatasetId": 948, 		"TestLabelId": 1266 	}',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '每个请求分配唯一的服务器请求ID。',
                                'type' => 'string',
                                'example' => '7E55AE6C-F870-0BE4-9265-E0D9FCB1B2CB',
                            ],
                            'Data' => [
                                'description' => '出参数据实体。',
                                'type' => 'object',
                                'properties' => [
                                    'Id' => [
                                        'description' => '数据集ID。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '70',
                                    ],
                                    'GmtCreate' => [
                                        'description' => '创建时间。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '1634276162828',
                                    ],
                                    'TaskName' => [
                                        'description' => '任务名称。',
                                        'type' => 'string',
                                        'example' => 'test3',
                                    ],
                                    'Description' => [
                                        'description' => '任务描述。',
                                        'type' => 'string',
                                        'example' => 'test3',
                                    ],
                                    'DatasetId' => [
                                        'description' => '数据集ID。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '120',
                                    ],
                                    'DatasetName' => [
                                        'description' => '数据集名称。',
                                        'type' => 'string',
                                        'example' => 'test1',
                                    ],
                                    'LabelId' => [
                                        'description' => '标注ID。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '229',
                                    ],
                                    'LabelName' => [
                                        'description' => '标注名称。',
                                        'type' => 'string',
                                        'example' => 'test3',
                                    ],
                                    'TrainMode' => [
                                        'description' => '训练模型。训练类型取值如下：'."\n"
                                            ."\n"
                                            .'- **COMMON**：均衡'."\n"
                                            .'- **HIGH_ACC**：高精度'."\n"
                                            .'- **HIGH_PERF**：高性能',
                                        'type' => 'string',
                                        'example' => 'COMMON',
                                    ],
                                    'RelyOnTaskId' => [
                                        'description' => '基于之前的训练任务ID。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '213',
                                    ],
                                    'RelyOnTaskName' => [
                                        'description' => '基于之前的训练任务名称。',
                                        'type' => 'string',
                                        'example' => '任务213',
                                    ],
                                    'AdvancedParameters' => [
                                        'description' => '- **Epoch**：学习轮数'."\n"
                                            .'- **Lr**：学习率'."\n"
                                            .'- **height**：图片高'."\n"
                                            .'- **width**：图片宽'."\n"
                                            .'- **ValidationDatasetId**：验证数据集ID'."\n"
                                            .'- **ValidationLabelId**：验证标注集ID'."\n"
                                            .'- **TestDatasetId**：测试数据集ID'."\n"
                                            .'- **TestLabelId**：测试标注集ID',
                                        'type' => 'string',
                                        'example' => '{\\"TestLabelId\\":1266,\\"TestDatasetId\\":948,\\"Lr\\":0.5,\\"width\\":\\"32\\",\\"ValidationLabelId\\":1266,\\"Epoch\\":23,\\"ValidationDatasetId\\":948,\\"height\\":\\"23\\"}',
                                    ],
                                    'TrainStatus' => [
                                        'description' => '训练状态。取值如下：'."\n"
                                            ."\n"
                                            .'- **INIT**：未训练'."\n"
                                            .'- **PREPARING**：准备中'."\n"
                                            .'- **TRAINING**：训练中'."\n"
                                            .'- **TRAIN_SUCCESS**：训练成功'."\n"
                                            .'- **TRAIN_FAIL**：训练失败',
                                        'type' => 'string',
                                        'example' => 'INIT',
                                    ],
                                    'ModelId' => [
                                        'description' => '模型ID。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '123',
                                    ],
                                    'ModelEffect' => [
                                        'description' => '模型效果。',
                                        'type' => 'string',
                                        'example' => '[{"id": "TOP1_ACC", "name": "top1准确率", "value": 100.0}, {"id": "TOP5_ACC", "name": "top5准确率", "value": 100.0}]',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"7E55AE6C-F870-0BE4-9265-E0D9FCB1B2CB\\",\\n  \\"Data\\": {\\n    \\"Id\\": 70,\\n    \\"GmtCreate\\": 1634276162828,\\n    \\"TaskName\\": \\"test3\\",\\n    \\"Description\\": \\"test3\\",\\n    \\"DatasetId\\": 120,\\n    \\"DatasetName\\": \\"test1\\",\\n    \\"LabelId\\": 229,\\n    \\"LabelName\\": \\"test3\\",\\n    \\"TrainMode\\": \\"COMMON\\",\\n    \\"RelyOnTaskId\\": 213,\\n    \\"RelyOnTaskName\\": \\"任务213\\",\\n    \\"AdvancedParameters\\": \\"{\\\\\\\\\\\\\\"TestLabelId\\\\\\\\\\\\\\":1266,\\\\\\\\\\\\\\"TestDatasetId\\\\\\\\\\\\\\":948,\\\\\\\\\\\\\\"Lr\\\\\\\\\\\\\\":0.5,\\\\\\\\\\\\\\"width\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"32\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"ValidationLabelId\\\\\\\\\\\\\\":1266,\\\\\\\\\\\\\\"Epoch\\\\\\\\\\\\\\":23,\\\\\\\\\\\\\\"ValidationDatasetId\\\\\\\\\\\\\\":948,\\\\\\\\\\\\\\"height\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"23\\\\\\\\\\\\\\"}\\",\\n    \\"TrainStatus\\": \\"INIT\\",\\n    \\"ModelId\\": 123,\\n    \\"ModelEffect\\": \\"[{\\\\\\"id\\\\\\": \\\\\\"TOP1_ACC\\\\\\", \\\\\\"name\\\\\\": \\\\\\"top1准确率\\\\\\", \\\\\\"value\\\\\\": 100.0}, {\\\\\\"id\\\\\\": \\\\\\"TOP5_ACC\\\\\\", \\\\\\"name\\\\\\": \\\\\\"top5准确率\\\\\\", \\\\\\"value\\\\\\": 100.0}]\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<CreateTrainTaskResponse>\\n    <RequestId>7E55AE6C-F870-0BE4-9265-E0D9FCB1B2CB</RequestId>\\n    <Data>\\n        <Id>70</Id>\\n        <GmtCreate>1634276162828</GmtCreate>\\n        <TaskName>test3</TaskName>\\n        <Description>test3</Description>\\n        <DatasetId>120</DatasetId>\\n        <DatasetName>test1</DatasetName>\\n        <LabelId>229</LabelId>\\n        <LabelName>test3</LabelName>\\n        <TrainMode>COMMON</TrainMode>\\n        <RelyOnTaskId>213</RelyOnTaskId>\\n        <RelyOnTaskName>任务213</RelyOnTaskName>\\n        <AdvancedParameters>{\\"TestLabelId\\":1266,\\"TestDatasetId\\":948,\\"Lr\\":0.5,\\"width\\":\\"32\\",\\"ValidationLabelId\\":1266,\\"Epoch\\":23,\\"ValidationDatasetId\\":948,\\"height\\":\\"23\\"}</AdvancedParameters>\\n        <TrainStatus>INIT</TrainStatus>\\n        <ModelId>123</ModelId>\\n        <ModelEffect>[{\\"id\\": \\"TOP1_ACC\\", \\"name\\": \\"top1准确率\\", \\"value\\": 100.0}, {\\"id\\": \\"TOP5_ACC\\", \\"name\\": \\"top5准确率\\", \\"value\\": 100.0}]</ModelEffect>\\n    </Data>\\n</CreateTrainTaskResponse>","errorExample":""}]',
            'title' => '创建训练任务',
            'summary' => '创建训练任务CreateTrainTask的语法及示例。',
            'description' => '## 功能描述'."\n"
                .'通过生产空间ID，输入名称和描述，选择数据集、标注和训练模式，创建在此生产空间下的新训练任务。'."\n"
                ."\n"
                .'> - 您可以进入[在线咨询](https://www.aliyun.com/core/online-consult?from=aZgW6LJHr2)获取在线人工帮助。'."\n"
                .'- 阿里云视觉智能开放平台视觉AI能力API接入、接口使用或问题咨询等，请通过钉钉群（23109592）加入阿里云视觉智能开放平台咨询群联系我们。'."\n"
                ."\n"
                .'## 接入指引'."\n"
                .'1. 注册阿里云账号：打开[阿里云官网](https://www.aliyun.com)，在阿里云官网右上角，单击**立即注册**，按照操作提示完成账号注册。'."\n"
                .'2. 开通能力：请确保您已开通自学习服务，若未开通服务请[立即开通](https://common-buy.aliyun.com/?commodityCode=viapi_selflearning_public_cn)。'."\n"
                .'3. 创建AccessKey：请确保您已[创建AccessKey](~~175144~~)，如果您使用的是子账号AccessKey，您需要给子账号赋予AliyunVIAPIFullAccess权限，具体操作，请参见[RAM授权](~~145025~~)。'."\n"
                .'4. 在线调试（可选）：您可以通过[OpenAPI Explorer](https://next.api.aliyun.com/api/viapi-regen/2021-11-19/CreateTrainTask?lang=JAVA&sdkStyle=old)在线调试能力，查看完整的调用示例代码及SDK依赖信息，也可以下载完整的工程。'."\n"
                .'5. 开发接入步骤：    '."\n"
                .'- 在[SDK总览](~~145033~~)中选择您要接入使用的SDK语言。'."\n"
                .'- 在对应语言的SDK文档中找到AI类目为自学习（viapi-regen）类目的SDK包进行安装。'."\n"
                .'- 参考文档中提供的示例代码进行适当修改后调用。'."\n"
                ."\n"
                .'6. 客户端直接调用：该能力常用的客户端调用方式包括以下几种。'."\n"
                .'- [Web前端直接调用](~~467779~~)'."\n"
                .'- [小程序场景下直接调用](~~467780~~)'."\n"
                .'- [Android端直接调用](~~467781~~)'."\n"
                .'- [iOS端直接调用](~~467782~~)',
            'responseParamsDescription' => '## SDK参考'."\n"
                .'阿里云视觉AI自学习类目下的创建训练任务能力推荐使用SDK调用，支持多种编程语言，调用时请选择AI类目为自学习（viapi-regen）的SDK包，文件参数通过SDK调用可支持本地文件及任意URL，具体可参见[SDK总览](~~145033~~)。',
            'extraInfo' => '## 错误码'."\n"
                .'关于创建训练任务的错误码，详情请参见[常见错误码](~~441239~~)。'."\n"
                ."\n"
                .'## 安全声明'."\n"
                .'- 请确保上传的图片或文件来源符合相应的法律法规。'."\n"
                .'- 通过体验调试上传的临时文件有效期为1小时，在24小时后会被系统自动清理删除。',
        ],
        'CreateWorkspace' => [
            'methods' => [
                'post',
                'get',
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
                    'name' => 'Name',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '新建空间名称。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'wyqtest',
                    ],
                ],
                [
                    'name' => 'Description',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '新建空间描述。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'wyqtest',
                    ],
                ],
                [
                    'name' => 'Type',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '生产空间类型。取值如下：'."\n"
                            ."\n"
                            .'- COMMON_CLASSIFY：通用分类'."\n"
                            .'- COMMON_DETECT：通用检测'."\n"
                            .'- COMMON_INSTANCE_SEGMENT：通用实例分割',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'COMMON_CLASSIFY',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '每个请求分配唯一的服务器请求ID。',
                                'type' => 'string',
                                'example' => 'DBECB972-A04A-090F-89BB-960316F8B071',
                            ],
                            'Data' => [
                                'description' => '出参数据实体。',
                                'type' => 'object',
                                'properties' => [
                                    'Id' => [
                                        'description' => '空间ID。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '78',
                                    ],
                                    'GmtCreate' => [
                                        'description' => '创建时间。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '1634262448874',
                                    ],
                                    'Name' => [
                                        'description' => '空间名称。',
                                        'type' => 'string',
                                        'example' => 'wyqtest',
                                    ],
                                    'Description' => [
                                        'description' => '空间描述。',
                                        'type' => 'string',
                                        'example' => 'wyqtest',
                                    ],
                                    'Type' => [
                                        'description' => '生产空间类型。取值如下：'."\n"
                                            ."\n"
                                            .'- COMMON_CLASSIFY：通用分类'."\n"
                                            .'- COMMON_DETECT：通用检测'."\n"
                                            .'- COMMON_INSTANCE_SEGMENT：通用实例分割',
                                        'type' => 'string',
                                        'example' => 'COMMON_CLASSIFY',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"DBECB972-A04A-090F-89BB-960316F8B071\\",\\n  \\"Data\\": {\\n    \\"Id\\": 78,\\n    \\"GmtCreate\\": 1634262448874,\\n    \\"Name\\": \\"wyqtest\\",\\n    \\"Description\\": \\"wyqtest\\",\\n    \\"Type\\": \\"COMMON_CLASSIFY\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<CreateWorkspaceResponse>\\n    <RequestId>DBECB972-A04A-090F-89BB-960316F8B071</RequestId>\\n    <Data>\\n        <Id>78</Id>\\n        <GmtCreate>1634262448874</GmtCreate>\\n        <Name>wyqtest</Name>\\n        <Description>wyqtest</Description>\\n        <Type>COMMON_CLASSIFY</Type>\\n    </Data>\\n</CreateWorkspaceResponse>","errorExample":""}]',
            'title' => '创建生产空间',
            'summary' => '创建生产空间CreateWorkspace的语法及示例。',
            'description' => '## 功能描述'."\n"
                .'通过选择生产空间类型，输入空间名称和空间描述创建新的生产空间。'."\n"
                ."\n"
                .'> - 您可以进入[在线咨询](https://www.aliyun.com/core/online-consult?from=aZgW6LJHr2)获取在线人工帮助。'."\n"
                .'- 阿里云视觉智能开放平台视觉AI能力API接入、接口使用或问题咨询等，请通过钉钉群（23109592）加入阿里云视觉智能开放平台咨询群联系我们。'."\n"
                ."\n"
                .'## 接入指引'."\n"
                .'1. 注册阿里云账号：打开[阿里云官网](https://www.aliyun.com)，在阿里云官网右上角，单击**立即注册**，按照操作提示完成账号注册。'."\n"
                .'2. 开通能力：请确保您已开通自学习服务，若未开通服务请[立即开通](https://common-buy.aliyun.com/?commodityCode=viapi_selflearning_public_cn)。'."\n"
                .'3. 创建AccessKey：请确保您已[创建AccessKey](~~175144~~)，如果您使用的是子账号AccessKey，您需要给子账号赋予AliyunVIAPIFullAccess权限，具体操作，请参见[RAM授权](~~145025~~)。'."\n"
                .'4. 在线调试（可选）：您可以通过[OpenAPI Explorer](https://next.api.aliyun.com/api/viapi-regen/2021-11-19/CreateWorkspace?lang=JAVA&sdkStyle=old)在线调试能力，查看完整的调用示例代码及SDK依赖信息，也可以下载完整的工程。'."\n"
                .'5. 开发接入步骤：    '."\n"
                .'- 在[SDK总览](~~145033~~)中选择您要接入使用的SDK语言。'."\n"
                .'- 在对应语言的SDK文档中找到AI类目为自学习（viapi-regen）类目的SDK包进行安装。'."\n"
                .'- 参考文档中提供的示例代码进行适当修改后调用。'."\n"
                ."\n"
                .'6. 客户端直接调用：该能力常用的客户端调用方式包括以下几种。'."\n"
                .'- [Web前端直接调用](~~467779~~)'."\n"
                .'- [小程序场景下直接调用](~~467780~~)'."\n"
                .'- [Android端直接调用](~~467781~~)'."\n"
                .'- [iOS端直接调用](~~467782~~)',
            'responseParamsDescription' => '## SDK参考'."\n"
                .'阿里云视觉AI自学习类目下的创建生产空间能力推荐使用SDK调用，支持多种编程语言，调用时请选择AI类目为自学习（viapi-regen）的SDK包，文件参数通过SDK调用可支持本地文件及任意URL，具体可参见[SDK总览](~~145033~~)。',
            'extraInfo' => '## 错误码'."\n"
                .'关于创建生产空间的错误码，详情请参见[常见错误码](~~441239~~)。'."\n"
                ."\n"
                .'## 安全声明'."\n"
                .'- 请确保上传的图片或文件来源符合相应的法律法规。'."\n"
                .'- 通过体验调试上传的临时文件有效期为1小时，在24小时后会被系统自动清理删除。',
        ],
        'DebugService' => [
            'methods' => [
                'post',
                'get',
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
                    'name' => 'Id',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '服务ID。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '21',
                    ],
                ],
                [
                    'name' => 'Param',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '入参数据。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '{"requestId":"5D772EB9","imageUrl":"https://dha-regen-prod.oss-cn-shanghai-internal.aliyuncs.com/daily/service/21/1634091028077_alpha_7101_0.png?Expires=1634091088&amp;OSSAccessKeyId=LTAI5tEQPn4obqpuvGEg****&amp;Signature=E9%2FtRKgNOV6O%2Bb3GtoFqhLe9VuU%3D"}',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '每个请求分配唯一的服务器请求ID。',
                                'type' => 'string',
                                'example' => '46621149',
                            ],
                            'Data' => [
                                'description' => '结果信息。',
                                'type' => 'string',
                                'example' => '{"requestId": "0CF29CA9", "data": {"category": "\\u732b", "score": 0.7035083174705505}, "errorcode": "0", "errormessage": "success"}',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"46621149\\",\\n  \\"Data\\": \\"{\\\\\\"requestId\\\\\\": \\\\\\"0CF29CA9\\\\\\", \\\\\\"data\\\\\\": {\\\\\\"category\\\\\\": \\\\\\"\\\\\\\\u732b\\\\\\", \\\\\\"score\\\\\\": 0.7035083174705505}, \\\\\\"errorcode\\\\\\": \\\\\\"0\\\\\\", \\\\\\"errormessage\\\\\\": \\\\\\"success\\\\\\"}\\"\\n}","errorExample":""},{"type":"xml","example":"<DebugServiceResponse>\\n    <RequestId>46621149</RequestId>\\n    <Data>{\\"requestId\\": \\"0CF29CA9\\", \\"data\\": {\\"category\\": \\"\\\\u732b\\", \\"score\\": 0.7035083174705505}, \\"errorcode\\": \\"0\\", \\"errormessage\\": \\"success\\"}</Data>\\n</DebugServiceResponse>","errorExample":""}]',
            'title' => '请求服务获取结果',
            'summary' => '标注请求服务获取结果DebugService的语法及示例。',
            'description' => '## 功能描述'."\n"
                .'上传图片，调用服务，返回运行结果和置信率。'."\n"
                ."\n"
                .'> - 您可以进入[在线咨询](https://www.aliyun.com/core/online-consult?from=aZgW6LJHr2)获取在线人工帮助。'."\n"
                .'- 阿里云视觉智能开放平台视觉AI能力API接入、接口使用或问题咨询等，请通过钉钉群（23109592）加入阿里云视觉智能开放平台咨询群联系我们。'."\n"
                ."\n"
                .'## 接入指引'."\n"
                .'1. 注册阿里云账号：打开[阿里云官网](https://www.aliyun.com)，在阿里云官网右上角，单击**立即注册**，按照操作提示完成账号注册。'."\n"
                .'2. 开通能力：请确保您已开通自学习服务，若未开通服务请[立即开通](https://common-buy.aliyun.com/?commodityCode=viapi_selflearning_public_cn)。'."\n"
                .'3. 创建AccessKey：请确保您已[创建AccessKey](~~175144~~)，如果您使用的是子账号AccessKey，您需要给子账号赋予AliyunVIAPIFullAccess权限，具体操作，请参见[RAM授权](~~145025~~)。'."\n"
                .'4. 在线调试（可选）：您可以通过[OpenAPI Explorer](https://next.api.aliyun.com/api/viapi-regen/2021-11-19/DebugService?lang=JAVA&sdkStyle=old)在线调试能力，查看完整的调用示例代码及SDK依赖信息，也可以下载完整的工程。'."\n"
                .'5. 开发接入步骤：    '."\n"
                .'- 在[SDK总览](~~145033~~)中选择您要接入使用的SDK语言。'."\n"
                .'- 在对应语言的SDK文档中找到AI类目为自学习（viapi-regen）类目的SDK包进行安装。'."\n"
                .'- 参考文档中提供的示例代码进行适当修改后调用。'."\n"
                ."\n"
                .'6. 客户端直接调用：该能力常用的客户端调用方式包括以下几种。'."\n"
                .'- [Web前端直接调用](~~467779~~)'."\n"
                .'- [小程序场景下直接调用](~~467780~~)'."\n"
                .'- [Android端直接调用](~~467781~~)'."\n"
                .'- [iOS端直接调用](~~467782~~)',
            'responseParamsDescription' => '## SDK参考'."\n"
                .'阿里云视觉AI自学习类目下的请求服务获取结果能力推荐使用SDK调用，支持多种编程语言，调用时请选择AI类目为自学习（viapi-regen）的SDK包，文件参数通过SDK调用可支持本地文件及任意URL，具体可参见[SDK总览](~~145033~~)。',
            'extraInfo' => '## 错误码'."\n"
                .'关于请求服务获取结果的错误码，详情请参见[常见错误码](~~441239~~)。'."\n"
                ."\n"
                .'## 安全声明'."\n"
                .'- 请确保上传的图片或文件来源符合相应的法律法规。'."\n"
                .'- 通过体验调试上传的临时文件有效期为1小时，在24小时后会被系统自动清理删除。',
        ],
        'DeleteDataset' => [
            'methods' => [
                'post',
                'get',
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
                    'name' => 'Id',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '数据集ID。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '147',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '每个请求分配唯一的服务器请求ID。',
                                'type' => 'string',
                                'example' => '09F9AD81-3443-0CE5-87D2-808777B2F758',
                            ],
                            'Data' => [
                                'description' => '出参数据实体。',
                                'type' => 'object',
                                'properties' => [
                                    'Id' => [
                                        'description' => '数据集ID。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '147',
                                    ],
                                    'GmtCreate' => [
                                        'description' => '创建时间。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '1631762186000',
                                    ],
                                    'Name' => [
                                        'description' => '数据集名称。',
                                        'type' => 'string',
                                        'example' => 'test',
                                    ],
                                    'Description' => [
                                        'description' => '数据集描述。',
                                        'type' => 'string',
                                        'example' => 'test',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"09F9AD81-3443-0CE5-87D2-808777B2F758\\",\\n  \\"Data\\": {\\n    \\"Id\\": 147,\\n    \\"GmtCreate\\": 1631762186000,\\n    \\"Name\\": \\"test\\",\\n    \\"Description\\": \\"test\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DeleteDatasetResponse>\\n    <RequestId>09F9AD81-3443-0CE5-87D2-808777B2F758</RequestId>\\n    <Data>\\n        <Id>147</Id>\\n        <GmtCreate>1631762186000</GmtCreate>\\n        <Name>test</Name>\\n        <Description>test</Description>\\n    </Data>\\n</DeleteDatasetResponse>","errorExample":""}]',
            'title' => '删除数据集',
            'summary' => '删除数据集DeleteDataset的语法及示例。',
            'description' => '## 功能描述'."\n"
                .'根据数据集ID删除数据集。'."\n"
                ."\n"
                .'> - 您可以进入[在线咨询](https://www.aliyun.com/core/online-consult?from=aZgW6LJHr2)获取在线人工帮助。'."\n"
                .'- 阿里云视觉智能开放平台视觉AI能力API接入、接口使用或问题咨询等，请通过钉钉群（23109592）加入阿里云视觉智能开放平台咨询群联系我们。'."\n"
                ."\n"
                .'## 接入指引'."\n"
                .'1. 注册阿里云账号：打开[阿里云官网](https://www.aliyun.com)，在阿里云官网右上角，单击**立即注册**，按照操作提示完成账号注册。'."\n"
                .'2. 开通能力：请确保您已开通自学习服务，若未开通服务请[立即开通](https://common-buy.aliyun.com/?commodityCode=viapi_selflearning_public_cn)。'."\n"
                .'3. 创建AccessKey：请确保您已[创建AccessKey](~~175144~~)，如果您使用的是子账号AccessKey，您需要给子账号赋予AliyunVIAPIFullAccess权限，具体操作，请参见[RAM授权](~~145025~~)。'."\n"
                .'4. 在线调试（可选）：您可以通过[OpenAPI Explorer](https://next.api.aliyun.com/api/viapi-regen/2021-11-19/DeleteDataset?lang=JAVA&sdkStyle=old)在线调试能力，查看完整的调用示例代码及SDK依赖信息，也可以下载完整的工程。'."\n"
                .'5. 开发接入步骤：    '."\n"
                .'- 在[SDK总览](~~145033~~)中选择您要接入使用的SDK语言。'."\n"
                .'- 在对应语言的SDK文档中找到AI类目为自学习（viapi-regen）类目的SDK包进行安装。'."\n"
                .'- 参考文档中提供的示例代码进行适当修改后调用。'."\n"
                ."\n"
                .'6. 客户端直接调用：该能力常用的客户端调用方式包括以下几种。'."\n"
                .'- [Web前端直接调用](~~467779~~)'."\n"
                .'- [小程序场景下直接调用](~~467780~~)'."\n"
                .'- [Android端直接调用](~~467781~~)'."\n"
                .'- [iOS端直接调用](~~467782~~)',
            'responseParamsDescription' => '## SDK参考'."\n"
                .'阿里云视觉AI自学习类目下的删除数据集能力推荐使用SDK调用，支持多种编程语言，调用时请选择AI类目为自学习（viapi-regen）的SDK包，文件参数通过SDK调用可支持本地文件及任意URL，具体可参见[SDK总览](~~145033~~)。',
            'extraInfo' => '## 错误码'."\n"
                .'关于删除数据集的错误码，详情请参见[常见错误码](~~441239~~)。'."\n"
                .'## 安全声明'."\n"
                .'- 请确保上传的图片或文件来源符合相应的法律法规。'."\n"
                .'- 通过体验调试上传的临时文件有效期为1小时，在24小时后会被系统自动清理删除。',
        ],
        'DeleteLabelset' => [
            'methods' => [
                'post',
                'get',
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
                    'name' => 'Id',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '标注ID。'."\n",
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '228',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '每个请求分配唯一的服务器请求ID。',
                                'type' => 'string',
                                'example' => '438CF366-4E53-029D-A8FB-29EB2AB694A7',
                            ],
                            'Data' => [
                                'description' => '出参数据实体。',
                                'type' => 'object',
                                'properties' => [
                                    'Id' => [
                                        'description' => '标注ID。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '228',
                                    ],
                                    'GmtCreate' => [
                                        'description' => '创建时间。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '1633745786000',
                                    ],
                                    'Name' => [
                                        'description' => '标注名称。',
                                        'type' => 'string',
                                        'example' => 'test3',
                                    ],
                                    'Description' => [
                                        'description' => '标注描述。',
                                        'type' => 'string',
                                        'example' => 'test3',
                                    ],
                                    'LabelType' => [
                                        'description' => '标注类型。取值如下：'."\n"
                                            ."\n"
                                            .'- UPLOAD_FILE：上传标注文件'."\n"
                                            .'- SELECT_FILE：选择标注文件'."\n"
                                            .'- USE_LABEL_SYSTEM：选择标注系统',
                                        'type' => 'string',
                                        'example' => 'UPLOAD_FILE',
                                    ],
                                    'Status' => [
                                        'description' => '标注状态。取值如下：'."\n"
                                            ."\n"
                                            .'- FILE_CHECKING：文件格式校验中'."\n"
                                            .'- FILE_CHECK_SUCCESS：文件格式校验成功'."\n"
                                            .'- FILE_CHECK_FAIL：文件格式校验失败',
                                        'type' => 'string',
                                        'example' => 'FILE_CHECK_SUCCESS',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"438CF366-4E53-029D-A8FB-29EB2AB694A7\\",\\n  \\"Data\\": {\\n    \\"Id\\": 228,\\n    \\"GmtCreate\\": 1633745786000,\\n    \\"Name\\": \\"test3\\",\\n    \\"Description\\": \\"test3\\",\\n    \\"LabelType\\": \\"UPLOAD_FILE\\",\\n    \\"Status\\": \\"FILE_CHECK_SUCCESS\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DeleteLabelsetResponse>\\n    <RequestId>438CF366-4E53-029D-A8FB-29EB2AB694A7</RequestId>\\n    <Data>\\n        <Id>228</Id>\\n        <GmtCreate>1633745786000</GmtCreate>\\n        <Name>test3</Name>\\n        <Description>test3</Description>\\n        <LabelType>UPLOAD_FILE</LabelType>\\n        <Status>FILE_CHECK_SUCCESS</Status>\\n    </Data>\\n</DeleteLabelsetResponse>","errorExample":""}]',
            'title' => '删除标注',
            'summary' => '删除标注DeleteLabelset的语法及示例。',
            'description' => '## 功能描述'."\n"
                .'根据标注ID删除标注集。'."\n"
                ."\n"
                .'> - 您可以进入[在线咨询](https://www.aliyun.com/core/online-consult?from=aZgW6LJHr2)获取在线人工帮助。'."\n"
                .'- 阿里云视觉智能开放平台视觉AI能力API接入、接口使用或问题咨询等，请通过钉钉群（23109592）加入阿里云视觉智能开放平台咨询群联系我们。'."\n"
                ."\n"
                .'## 接入指引'."\n"
                .'1. 注册阿里云账号：打开[阿里云官网](https://www.aliyun.com)，在阿里云官网右上角，单击**立即注册**，按照操作提示完成账号注册。'."\n"
                .'2. 开通能力：请确保您已开通自学习服务，若未开通服务请[立即开通](https://common-buy.aliyun.com/?commodityCode=viapi_selflearning_public_cn)。'."\n"
                .'3. 创建AccessKey：请确保您已[创建AccessKey](~~175144~~)，如果您使用的是子账号AccessKey，您需要给子账号赋予AliyunVIAPIFullAccess权限，具体操作，请参见[RAM授权](~~145025~~)。'."\n"
                .'4. 在线调试（可选）：您可以通过[OpenAPI Explorer](https://next.api.aliyun.com/api/viapi-regen/2021-11-19/DeleteLabelset?lang=JAVA&sdkStyle=old)在线调试能力，查看完整的调用示例代码及SDK依赖信息，也可以下载完整的工程。'."\n"
                .'5. 开发接入步骤：    '."\n"
                .'- 在[SDK总览](~~145033~~)中选择您要接入使用的SDK语言。'."\n"
                .'- 在对应语言的SDK文档中找到AI类目为自学习（viapi-regen）类目的SDK包进行安装。'."\n"
                .'- 参考文档中提供的示例代码进行适当修改后调用。'."\n"
                ."\n"
                .'6. 客户端直接调用：该能力常用的客户端调用方式包括以下几种。'."\n"
                .'- [Web前端直接调用](~~467779~~)'."\n"
                .'- [小程序场景下直接调用](~~467780~~)'."\n"
                .'- [Android端直接调用](~~467781~~)'."\n"
                .'- [iOS端直接调用](~~467782~~)',
            'responseParamsDescription' => '## SDK参考'."\n"
                .'阿里云视觉AI自学习类目下的删除标注能力推荐使用SDK调用，支持多种编程语言，调用时请选择AI类目为自学习（viapi-regen）的SDK包，文件参数通过SDK调用可支持本地文件及任意URL，具体可参见[SDK总览](~~145033~~)。',
            'extraInfo' => '## 错误码'."\n"
                .'关于删除标注的错误码，详情请参见[常见错误码](~~441239~~)。'."\n"
                ."\n"
                .'## 安全声明'."\n"
                .'- 请确保上传的图片或文件来源符合相应的法律法规。'."\n"
                .'- 通过体验调试上传的临时文件有效期为1小时，在24小时后会被系统自动清理删除。',
        ],
        'DeleteService' => [
            'methods' => [
                'post',
                'get',
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
                    'name' => 'Id',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '服务ID，用以标识唯一服务。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '28',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '每个请求分配唯一的服务器请求ID。',
                                'type' => 'string',
                                'example' => 'E8917726-EA0B-0847-8885-FD4491E71CE0',
                            ],
                            'Data' => [
                                'description' => '出参数据实体。',
                                'type' => 'object',
                                'properties' => [
                                    'Id' => [
                                        'description' => '服务ID。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '28',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"E8917726-EA0B-0847-8885-FD4491E71CE0\\",\\n  \\"Data\\": {\\n    \\"Id\\": 28\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DeleteServiceResponse>\\n    <RequestId>E8917726-EA0B-0847-8885-FD4491E71CE0</RequestId>\\n    <Data>\\n        <Id>28</Id>\\n    </Data>\\n</DeleteServiceResponse>","errorExample":""}]',
            'title' => '删除服务',
            'summary' => '删除服务DeleteService的语法及示例。',
            'description' => '## 功能描述'."\n"
                .'根据服务ID删除服务。'."\n"
                ."\n"
                .'> - 您可以进入[在线咨询](https://www.aliyun.com/core/online-consult?from=aZgW6LJHr2)获取在线人工帮助。'."\n"
                .'- 阿里云视觉智能开放平台视觉AI能力API接入、接口使用或问题咨询等，请通过钉钉群（23109592）加入阿里云视觉智能开放平台咨询群联系我们。'."\n"
                ."\n"
                .'## 接入指引'."\n"
                .'1. 注册阿里云账号：打开[阿里云官网](https://www.aliyun.com)，在阿里云官网右上角，单击**立即注册**，按照操作提示完成账号注册。'."\n"
                .'2. 开通能力：请确保您已开通自学习服务，若未开通服务请[立即开通](https://common-buy.aliyun.com/?commodityCode=viapi_selflearning_public_cn)。'."\n"
                .'3. 创建AccessKey：请确保您已[创建AccessKey](~~175144~~)，如果您使用的是子账号AccessKey，您需要给子账号赋予AliyunVIAPIFullAccess权限，具体操作，请参见[RAM授权](~~145025~~)。'."\n"
                .'4. 在线调试（可选）：您可以通过[OpenAPI Explorer](https://next.api.aliyun.com/api/viapi-regen/2021-11-19/DeleteService?lang=JAVA&sdkStyle=old)在线调试能力，查看完整的调用示例代码及SDK依赖信息，也可以下载完整的工程。'."\n"
                .'5. 开发接入步骤：    '."\n"
                .'- 在[SDK总览](~~145033~~)中选择您要接入使用的SDK语言。'."\n"
                .'- 在对应语言的SDK文档中找到AI类目为自学习（viapi-regen）类目的SDK包进行安装。'."\n"
                .'- 参考文档中提供的示例代码进行适当修改后调用。'."\n"
                ."\n"
                .'6. 客户端直接调用：该能力常用的客户端调用方式包括以下几种。'."\n"
                .'- [Web前端直接调用](~~467779~~)'."\n"
                .'- [小程序场景下直接调用](~~467780~~)'."\n"
                .'- [Android端直接调用](~~467781~~)'."\n"
                .'- [iOS端直接调用](~~467782~~)',
            'responseParamsDescription' => '## SDK参考'."\n"
                .'阿里云视觉AI自学习类目下的删除服务能力推荐使用SDK调用，支持多种编程语言，调用时请选择AI类目为自学习（viapi-regen）的SDK包，文件参数通过SDK调用可支持本地文件及任意URL，具体可参见[SDK总览](~~145033~~)。',
            'extraInfo' => '## 错误码'."\n"
                .'关于删除服务的错误码，详情请参见[常见错误码](~~441239~~)。'."\n"
                ."\n"
                .'## 安全声明'."\n"
                .'- 请确保上传的图片或文件来源符合相应的法律法规。'."\n"
                .'- 通过体验调试上传的临时文件有效期为1小时，在24小时后会被系统自动清理删除。',
        ],
        'DeleteTrainTask' => [
            'methods' => [
                'post',
                'get',
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
                    'name' => 'Id',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '训练任务ID。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '68',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '每个请求分配唯一的服务器请求ID。',
                                'type' => 'string',
                                'example' => '910D87D5-4498-0845-8DA9-DCDC6D661097',
                            ],
                            'Data' => [
                                'description' => '出参数据实体。',
                                'type' => 'object',
                                'properties' => [
                                    'Id' => [
                                        'description' => '训练任务ID。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '68',
                                    ],
                                    'GmtCreate' => [
                                        'description' => '创建时间。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '1631762402000',
                                    ],
                                    'TaskName' => [
                                        'description' => '任务名称。',
                                        'type' => 'string',
                                        'example' => 'test1',
                                    ],
                                    'Description' => [
                                        'description' => '任务描述。',
                                        'type' => 'string',
                                        'example' => 'test1',
                                    ],
                                    'DatasetId' => [
                                        'description' => '数据集ID。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '120',
                                    ],
                                    'DatasetName' => [
                                        'description' => '数据集名称。',
                                        'type' => 'string',
                                        'example' => 'test1',
                                    ],
                                    'LabelId' => [
                                        'description' => '标注ID。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '188',
                                    ],
                                    'LabelName' => [
                                        'description' => '标注名字。',
                                        'type' => 'string',
                                        'example' => 'test2',
                                    ],
                                    'TrainMode' => [
                                        'description' => '训练模型。取值如下 ：'."\n"
                                            ."\n"
                                            .'- COMMON：均衡'."\n"
                                            ."\n"
                                            .'- HIGH_ACC：高精度'."\n"
                                            ."\n"
                                            .'- HIGH_PERF：高性能',
                                        'type' => 'string',
                                        'example' => 'COMMON',
                                    ],
                                    'TrainStatus' => [
                                        'description' => '训练状态。取值如下：'."\n"
                                            ."\n"
                                            .'- INIT：未训练'."\n"
                                            ."\n"
                                            .'- PREPARING：准备中'."\n"
                                            ."\n"
                                            .'- TRAINING：训练中'."\n"
                                            ."\n"
                                            .'- TRAIN_SUCCESS：训练成功'."\n"
                                            ."\n"
                                            .'- TRAIN_FAIL：训练失败',
                                        'type' => 'string',
                                        'example' => 'TRAIN_SUCCESS',
                                    ],
                                    'ModelId' => [
                                        'description' => '模型ID。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '29',
                                    ],
                                    'ModelEffect' => [
                                        'description' => '模型效果。',
                                        'type' => 'string',
                                        'example' => '[{"id": "TOP1_ACC", "name": "top1准确率", "value": 100.0}, {"id": "TOP5_ACC", "name": "top5准确率", "value": 100.0}]',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"910D87D5-4498-0845-8DA9-DCDC6D661097\\",\\n  \\"Data\\": {\\n    \\"Id\\": 68,\\n    \\"GmtCreate\\": 1631762402000,\\n    \\"TaskName\\": \\"test1\\",\\n    \\"Description\\": \\"test1\\",\\n    \\"DatasetId\\": 120,\\n    \\"DatasetName\\": \\"test1\\",\\n    \\"LabelId\\": 188,\\n    \\"LabelName\\": \\"test2\\",\\n    \\"TrainMode\\": \\"COMMON\\",\\n    \\"TrainStatus\\": \\"TRAIN_SUCCESS\\",\\n    \\"ModelId\\": 29,\\n    \\"ModelEffect\\": \\"[{\\\\\\"id\\\\\\": \\\\\\"TOP1_ACC\\\\\\", \\\\\\"name\\\\\\": \\\\\\"top1准确率\\\\\\", \\\\\\"value\\\\\\": 100.0}, {\\\\\\"id\\\\\\": \\\\\\"TOP5_ACC\\\\\\", \\\\\\"name\\\\\\": \\\\\\"top5准确率\\\\\\", \\\\\\"value\\\\\\": 100.0}]\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DeleteTrainTaskResponse>\\n    <RequestId>910D87D5-4498-0845-8DA9-DCDC6D661097</RequestId>\\n    <Data>\\n        <Id>68</Id>\\n        <GmtCreate>1631762402000</GmtCreate>\\n        <TaskName>test1</TaskName>\\n        <Description>test1</Description>\\n        <DatasetId>120</DatasetId>\\n        <DatasetName>test1</DatasetName>\\n        <LabelId>188</LabelId>\\n        <LabelName>test2</LabelName>\\n        <TrainMode>COMMON</TrainMode>\\n        <TrainStatus>TRAIN_SUCCESS</TrainStatus>\\n        <ModelId>29</ModelId>\\n        <ModelEffect>[{\\"id\\": \\"TOP1_ACC\\", \\"name\\": \\"top1准确率\\", \\"value\\": 100.0}, {\\"id\\": \\"TOP5_ACC\\", \\"name\\": \\"top5准确率\\", \\"value\\": 100.0}]</ModelEffect>\\n    </Data>\\n</DeleteTrainTaskResponse>","errorExample":""}]',
            'title' => '删除训练任务',
            'summary' => '删除训练任务。',
            'description' => '## 功能描述'."\n"
                .'根据训练任务ID删除训练任务。'."\n"
                ."\n"
                .'> - 您可以进入[在线咨询](https://www.aliyun.com/core/online-consult?from=aZgW6LJHr2)获取在线人工帮助。'."\n"
                .'- 阿里云视觉智能开放平台视觉AI能力API接入、接口使用或问题咨询等，请通过钉钉群（23109592）加入阿里云视觉智能开放平台咨询群联系我们。'."\n"
                ."\n"
                .'## 接入指引'."\n"
                .'1. 注册阿里云账号：打开[阿里云官网](https://www.aliyun.com)，在阿里云官网右上角，单击**立即注册**，按照操作提示完成账号注册。'."\n"
                .'2. 开通能力：请确保您已开通自学习服务，若未开通服务请[立即开通](https://common-buy.aliyun.com/?commodityCode=viapi_selflearning_public_cn)。'."\n"
                .'3. 创建AccessKey：请确保您已[创建AccessKey](~~175144~~)，如果您使用的是子账号AccessKey，您需要给子账号赋予AliyunVIAPIFullAccess权限，具体操作，请参见[RAM授权](~~145025~~)。'."\n"
                .'4. 在线调试（可选）：您可以通过[OpenAPI Explorer](https://next.api.aliyun.com/api/viapi-regen/2021-11-19/DeleteTrainTask?lang=JAVA&sdkStyle=old)在线调试能力，查看完整的调用示例代码及SDK依赖信息，也可以下载完整的工程。'."\n"
                .'5. 开发接入步骤：    '."\n"
                .'- 在[SDK总览](~~145033~~)中选择您要接入使用的SDK语言。'."\n"
                .'- 在对应语言的SDK文档中找到AI类目为自学习（viapi-regen）类目的SDK包进行安装。'."\n"
                .'- 参考文档中提供的示例代码进行适当修改后调用。'."\n"
                ."\n"
                .'6. 客户端直接调用：该能力常用的客户端调用方式包括以下几种。'."\n"
                .'- [Web前端直接调用](~~467779~~)'."\n"
                .'- [小程序场景下直接调用](~~467780~~)'."\n"
                .'- [Android端直接调用](~~467781~~)'."\n"
                .'- [iOS端直接调用](~~467782~~)',
            'responseParamsDescription' => '## SDK参考'."\n"
                .'阿里云视觉AI自学习类目下的删除训练任务能力推荐使用SDK调用，支持多种编程语言，调用时请选择AI类目为自学习（viapi-regen）的SDK包，文件参数通过SDK调用可支持本地文件及任意URL，具体可参见[SDK总览](~~145033~~)。',
            'extraInfo' => '## 错误码'."\n"
                .'关于删除训练任务的错误码，详情请参见[常见错误码](~~441239~~)。'."\n"
                ."\n"
                .'## 安全声明'."\n"
                .'- 请确保上传的图片或文件来源符合相应的法律法规。'."\n"
                .'- 通过体验调试上传的临时文件有效期为1小时，在24小时后会被系统自动清理删除。',
        ],
        'DeleteWorkspace' => [
            'methods' => [
                'post',
                'get',
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
                    'name' => 'Id',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '生产空间ID。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '78',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '每个请求分配唯一的服务器请求ID。',
                                'type' => 'string',
                                'example' => '3AA3469E-9CB3-08CB-AA0E-A6F26B4CCB93',
                            ],
                            'Data' => [
                                'description' => '出参数据实体。',
                                'type' => 'object',
                                'properties' => [
                                    'Id' => [
                                        'description' => '生产空间ID。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '78',
                                    ],
                                    'GmtCreate' => [
                                        'description' => '创建时间。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '1634262448874',
                                    ],
                                    'Name' => [
                                        'description' => '生产空间名称。',
                                        'type' => 'string',
                                        'example' => 'wyqtest',
                                    ],
                                    'Description' => [
                                        'description' => '生产空间描述。',
                                        'type' => 'string',
                                        'example' => 'wyqtest',
                                    ],
                                    'Type' => [
                                        'description' => '生产空间类型。取值如下：'."\n"
                                            ."\n"
                                            .'- COMMON_CLASSIFY：通用分类'."\n"
                                            .'- COMMON_DETECT：通用检测'."\n"
                                            .'- COMMON_INSTANCE_SEGMENT：通用实例分割',
                                        'type' => 'string',
                                        'example' => 'COMMON_CLASSIFY',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"3AA3469E-9CB3-08CB-AA0E-A6F26B4CCB93\\",\\n  \\"Data\\": {\\n    \\"Id\\": 78,\\n    \\"GmtCreate\\": 1634262448874,\\n    \\"Name\\": \\"wyqtest\\",\\n    \\"Description\\": \\"wyqtest\\",\\n    \\"Type\\": \\"COMMON_CLASSIFY\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DeleteWorkspaceResponse>\\n    <RequestId>3AA3469E-9CB3-08CB-AA0E-A6F26B4CCB93</RequestId>\\n    <Data>\\n        <Id>78</Id>\\n        <GmtCreate>1634262448874</GmtCreate>\\n        <Name>wyqtest</Name>\\n        <Description>wyqtest</Description>\\n        <Type>COMMON_CLASSIFY</Type>\\n    </Data>\\n</DeleteWorkspaceResponse>","errorExample":""}]',
            'title' => '删除生产空间',
            'summary' => '删除生产空间DeleteWorkspace的语法及示例。',
            'description' => '## 功能描述'."\n"
                .'根据生产空间ID删除生产空间。'."\n"
                ."\n"
                .'> - 您可以进入[在线咨询](https://www.aliyun.com/core/online-consult?from=aZgW6LJHr2)获取在线人工帮助。'."\n"
                .'- 阿里云视觉智能开放平台视觉AI能力API接入、接口使用或问题咨询等，请通过钉钉群（23109592）加入阿里云视觉智能开放平台咨询群联系我们。'."\n"
                ."\n"
                .'## 接入指引'."\n"
                .'1. 注册阿里云账号：打开[阿里云官网](https://www.aliyun.com)，在阿里云官网右上角，单击**立即注册**，按照操作提示完成账号注册。'."\n"
                .'2. 开通能力：请确保您已开通自学习服务，若未开通服务请[立即开通](https://common-buy.aliyun.com/?commodityCode=viapi_selflearning_public_cn)。'."\n"
                .'3. 创建AccessKey：请确保您已[创建AccessKey](~~175144~~)，如果您使用的是子账号AccessKey，您需要给子账号赋予AliyunVIAPIFullAccess权限，具体操作，请参见[RAM授权](~~145025~~)。'."\n"
                .'4. 在线调试（可选）：您可以通过[OpenAPI Explorer](https://next.api.aliyun.com/api/viapi-regen/2021-11-19/DeleteWorkspace)在线调试能力，查看完整的调用示例代码及SDK依赖信息，也可以下载完整的工程。'."\n"
                .'5. 开发接入步骤：    '."\n"
                .'- 在[SDK总览](~~145033~~)中选择您要接入使用的SDK语言。'."\n"
                .'- 在对应语言的SDK文档中找到AI类目为自学习（viapi-regen）类目的SDK包进行安装。'."\n"
                .'- 参考文档中提供的示例代码进行适当修改后调用。'."\n"
                ."\n"
                .'6. 客户端直接调用：该能力常用的客户端调用方式包括以下几种。'."\n"
                .'- [Web前端直接调用](~~467779~~)'."\n"
                .'- [小程序场景下直接调用](~~467780~~)'."\n"
                .'- [Android端直接调用](~~467781~~)'."\n"
                .'- [iOS端直接调用](~~467782~~)',
            'responseParamsDescription' => '## SDK参考'."\n"
                .'阿里云视觉AI自学习类目下的删除生产空间能力推荐使用SDK调用，支持多种编程语言，调用时请选择AI类目为自学习（viapi-regen）的SDK包，文件参数通过SDK调用可支持本地文件及任意URL，具体可参见[SDK总览](~~145033~~)。',
            'extraInfo' => '## 错误码'."\n"
                .'关于删除生产空间的错误码，详情请参见[常见错误码](~~441239~~)。'."\n"
                ."\n"
                .'## 安全声明'."\n"
                .'- 请确保上传的图片或文件来源符合相应的法律法规。'."\n"
                .'- 通过体验调试上传的临时文件有效期为1小时，在24小时后会被系统自动清理删除。',
        ],
        'DownloadLabelFile' => [
            'methods' => [
                'post',
                'get',
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
                    'name' => 'LabelId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '标注ID。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '228',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '每个请求分配唯一的服务器请求ID。',
                                'type' => 'string',
                                'example' => '47109F76-8BF9-078A-83DB-1622E811646D',
                            ],
                            'Data' => [
                                'description' => '出参数据实体。',
                                'type' => 'object',
                                'properties' => [
                                    'OssHttpUrl' => [
                                        'description' => 'OSS URL根目录。',
                                        'type' => 'string',
                                        'example' => 'https://dha-regen-prod.oss-cn-shanghai.aliyuncs.com/daily/label/120/1634104295573_1631762324685_1631174016651_small.csv?Expires=1634203288&OSSAccessKeyId=LTAI5tEQPn4obqpuvGEg****&Signature=9KWRL9YzY2eu%2FN5OFXYbZaN865o%3D',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"47109F76-8BF9-078A-83DB-1622E811646D\\",\\n  \\"Data\\": {\\n    \\"OssHttpUrl\\": \\"https://dha-regen-prod.oss-cn-shanghai.aliyuncs.com/daily/label/120/1634104295573_1631762324685_1631174016651_small.csv?Expires=1634203288&OSSAccessKeyId=LTAI5tEQPn4obqpuvGEg****&Signature=9KWRL9YzY2eu%2FN5OFXYbZaN865o%3D\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DownloadLabelFileResponse>\\n    <RequestId>47109F76-8BF9-078A-83DB-1622E811646D</RequestId>\\n    <Data>\\n        <OssHttpUrl>https://dha-regen-prod.oss-cn-shanghai.aliyuncs.com/daily/label/120/1634104295573_1631762324685_1631174016651_small.csv?Expires=1634203288&amp;OSSAccessKeyId=LTAI5tEQPn4obqpuvGEg****&amp;Signature=9KWRL9YzY2eu%2FN5OFXYbZaN865o%3D</OssHttpUrl>\\n    </Data>\\n</DownloadLabelFileResponse>","errorExample":""}]',
            'title' => '下载标注文件',
            'summary' => '下载标注文件。',
            'description' => '## 功能描述'."\n"
                .'根据标注ID下载标注文件。'."\n"
                ."\n"
                .'> - 您可以进入[在线咨询](https://www.aliyun.com/core/online-consult?from=aZgW6LJHr2)获取在线人工帮助。'."\n"
                .'- 阿里云视觉智能开放平台视觉AI能力API接入、接口使用或问题咨询等，请通过钉钉群（23109592）加入阿里云视觉智能开放平台咨询群联系我们。'."\n"
                ."\n"
                .'## 接入指引'."\n"
                .'1. 注册阿里云账号：打开[阿里云官网](https://www.aliyun.com)，在阿里云官网右上角，单击**立即注册**，按照操作提示完成账号注册。'."\n"
                .'2. 开通能力：请确保您已开通自学习服务，若未开通服务请[立即开通](https://common-buy.aliyun.com/?commodityCode=viapi_selflearning_public_cn)。'."\n"
                .'3. 创建AccessKey：请确保您已[创建AccessKey](~~175144~~)，如果您使用的是子账号AccessKey，您需要给子账号赋予AliyunVIAPIFullAccess权限，具体操作，请参见[RAM授权](~~145025~~)。'."\n"
                .'4. 在线调试（可选）：您可以通过[OpenAPI Explorer](https://next.api.aliyun.com/api/viapi-regen/2021-11-19/DownloadLabelFile?lang=JAVA&sdkStyle=old)在线调试能力，查看完整的调用示例代码及SDK依赖信息，也可以下载完整的工程。'."\n"
                .'5. 开发接入步骤：    '."\n"
                .'- 在[SDK总览](~~145033~~)中选择您要接入使用的SDK语言。'."\n"
                .'- 在对应语言的SDK文档中找到AI类目为自学习（viapi-regen）类目的SDK包进行安装。'."\n"
                .'- 参考文档中提供的示例代码进行适当修改后调用。'."\n"
                ."\n"
                .'6. 客户端直接调用：该能力常用的客户端调用方式包括以下几种。'."\n"
                .'- [Web前端直接调用](~~467779~~)'."\n"
                .'- [小程序场景下直接调用](~~467780~~)'."\n"
                .'- [Android端直接调用](~~467781~~)'."\n"
                .'- [iOS端直接调用](~~467782~~)',
            'responseParamsDescription' => '## SDK参考'."\n"
                .'阿里云视觉AI自学习类目下的下载标注文件能力推荐使用SDK调用，支持多种编程语言，调用时请选择AI类目为自学习（viapi-regen）的SDK包，文件参数通过SDK调用可支持本地文件及任意URL，具体可参见[SDK总览](~~145033~~)。',
            'extraInfo' => '## 错误码'."\n"
                .'关于下载标注文件的错误码，详情请参见[常见错误码](~~441239~~)。'."\n"
                ."\n"
                .'## 安全声明'."\n"
                .'- 请确保上传的图片或文件来源符合相应的法律法规。'."\n"
                .'- 通过体验调试上传的临时文件有效期为1小时，在24小时后会被系统自动清理删除。',
        ],
        'GetDataset' => [
            'methods' => [
                'post',
                'get',
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
                    'name' => 'Id',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '数据集ID。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '296',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '每个请求分配唯一的服务器请求ID。',
                                'type' => 'string',
                                'example' => '8D41EDD3-36D1-0408-94C9-8EEEA7F2FFE7',
                            ],
                            'Data' => [
                                'description' => '出参数据实体。',
                                'type' => 'object',
                                'properties' => [
                                    'Id' => [
                                        'description' => '数据集ID。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '296',
                                    ],
                                    'OwnerType' => [
                                        'description' => '数据集归属。取值如下：'."\n"
                                            ."\n"
                                            .'- ALIYUN：用户选择自己本地的文件上传'."\n"
                                            ."\n"
                                            .'- USER：用户选择自己OSS的数据上传',
                                        'type' => 'string',
                                        'example' => 'ALIYUN',
                                    ],
                                    'OssUrl' => [
                                        'description' => '数据集存放的OSS路径。',
                                        'type' => 'string',
                                        'example' => 'oss://viapi-regen-hangzhou-prod/daily/data/296/',
                                    ],
                                    'GmtCreate' => [
                                        'description' => '创建时间。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '1631762186000',
                                    ],
                                    'Name' => [
                                        'description' => '数据集名称。',
                                        'type' => 'string',
                                        'example' => 'fenlei',
                                    ],
                                    'Description' => [
                                        'description' => '数据集描述。',
                                        'type' => 'string',
                                        'example' => 'test12',
                                    ],
                                    'Total' => [
                                        'description' => '数据集中数据总数。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '147',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"8D41EDD3-36D1-0408-94C9-8EEEA7F2FFE7\\",\\n  \\"Data\\": {\\n    \\"Id\\": 296,\\n    \\"OwnerType\\": \\"ALIYUN\\",\\n    \\"OssUrl\\": \\"oss://viapi-regen-hangzhou-prod/daily/data/296/\\",\\n    \\"GmtCreate\\": 1631762186000,\\n    \\"Name\\": \\"fenlei\\",\\n    \\"Description\\": \\"test12\\",\\n    \\"Total\\": 147\\n  }\\n}","errorExample":""},{"type":"xml","example":"<GetDatasetResponse>\\n    <RequestId>8D41EDD3-36D1-0408-94C9-8EEEA7F2FFE7</RequestId>\\n    <Data>\\n        <Id>296</Id>\\n        <OwnerType>ALIYUN</OwnerType>\\n        <OssUrl>oss://viapi-regen-hangzhou-prod/daily/data/296/</OssUrl>\\n        <GmtCreate>1631762186000</GmtCreate>\\n        <Name>fenlei</Name>\\n        <Description>test12</Description>\\n        <Total>147</Total>\\n    </Data>\\n</GetDatasetResponse>","errorExample":""}]',
            'title' => '获得数据集',
            'summary' => '获得数据集GetDataset的语法及示例。',
            'description' => '## 功能描述'."\n"
                .'根据数据集ID查看数据集的详细情况。'."\n"
                ."\n"
                .'> - 您可以进入[在线咨询](https://www.aliyun.com/core/online-consult?from=aZgW6LJHr2)获取在线人工帮助。'."\n"
                .'- 阿里云视觉智能开放平台视觉AI能力API接入、接口使用或问题咨询等，请通过钉钉群（23109592）加入阿里云视觉智能开放平台咨询群联系我们。'."\n"
                ."\n"
                .'## 接入指引'."\n"
                .'1. 注册阿里云账号：打开[阿里云官网](https://www.aliyun.com)，在阿里云官网右上角，单击**立即注册**，按照操作提示完成账号注册。'."\n"
                .'2. 开通能力：请确保您已开通自学习服务，若未开通服务请[立即开通](https://common-buy.aliyun.com/?commodityCode=viapi_selflearning_public_cn)。'."\n"
                .'3. 创建AccessKey：请确保您已[创建AccessKey](~~175144~~)，如果您使用的是子账号AccessKey，您需要给子账号赋予AliyunVIAPIFullAccess权限，具体操作，请参见[RAM授权](~~145025~~)。'."\n"
                .'4. 在线调试（可选）：您可以通过[OpenAPI Explorer](https://next.api.aliyun.com/api/viapi-regen/2021-11-19/GetDataset?lang=JAVA&sdkStyle=old)在线调试能力，查看完整的调用示例代码及SDK依赖信息，也可以下载完整的工程。'."\n"
                .'5. 开发接入步骤：    '."\n"
                .'- 在[SDK总览](~~145033~~)中选择您要接入使用的SDK语言。'."\n"
                .'- 在对应语言的SDK文档中找到AI类目为自学习（viapi-regen）类目的SDK包进行安装。'."\n"
                .'- 参考文档中提供的示例代码进行适当修改后调用。'."\n"
                ."\n"
                .'6. 客户端直接调用：该能力常用的客户端调用方式包括以下几种。'."\n"
                .'- [Web前端直接调用](~~467779~~)'."\n"
                .'- [小程序场景下直接调用](~~467780~~)'."\n"
                .'- [Android端直接调用](~~467781~~)'."\n"
                .'- [iOS端直接调用](~~467782~~)',
            'responseParamsDescription' => '## SDK参考'."\n"
                .'阿里云视觉AI自学习类目下的获得数据集能力推荐使用SDK调用，支持多种编程语言，调用时请选择AI类目为自学习（viapi-regen）的SDK包，文件参数通过SDK调用可支持本地文件及任意URL，具体可参见[SDK总览](~~145033~~)。',
            'extraInfo' => '## 错误码'."\n"
                .'关于获得数据集的错误码，详情请参见[常见错误码](~~441239~~)。'."\n"
                .'## 安全声明'."\n"
                .'- 请确保上传的图片或文件来源符合相应的法律法规。'."\n"
                .'- 通过体验调试上传的临时文件有效期为1小时，在24小时后会被系统自动清理删除。',
        ],
        'GetLabelDetail' => [
            'methods' => [
                'post',
                'get',
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
                    'name' => 'Id',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '标注集ID。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '1205',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'AC07015E-C8D6-1A03-AAA8-C023B09B917A',
                            ],
                            'Data' => [
                                'description' => '返回的结果数据内容。',
                                'type' => 'object',
                                'properties' => [
                                    'LabelInfo' => [
                                        'description' => '返回前台JSON串。'."\n"
                                            .'- dataVolume：标注的照片总数量。'."\n"
                                            .'- labelCount：标签分类详情。'."\n"
                                            .'- detectionFrameQuantity：检测框总数量。'."\n"
                                            .'- detectionFrameLabelCount：检测框分布数量。',
                                        'type' => 'string',
                                        'example' => '{\\"dataVolume\\":101,\\"detectionFrameLabelCount\\":{\\"honglvdeng\\":116},\\"detectionFrameQuantity\\":116}"',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"AC07015E-C8D6-1A03-AAA8-C023B09B917A\\",\\n  \\"Data\\": {\\n    \\"LabelInfo\\": \\"{\\\\\\\\\\\\\\"dataVolume\\\\\\\\\\\\\\":101,\\\\\\\\\\\\\\"detectionFrameLabelCount\\\\\\\\\\\\\\":{\\\\\\\\\\\\\\"honglvdeng\\\\\\\\\\\\\\":116},\\\\\\\\\\\\\\"detectionFrameQuantity\\\\\\\\\\\\\\":116}\\\\\\"\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<GetLabelDetailResponse>\\n    <RequestId>AC07015E-C8D6-1A03-AAA8-C023B09B917A</RequestId>\\n    <Data>\\n        <LabelInfo>{\\\\\\"dataVolume\\\\\\":147,\\\\\\"labelCount\\\\\\":{\\\\\\"鸟\\\\\\":147}}</LabelInfo>\\n    </Data>\\n</GetLabelDetailResponse>","errorExample":""}]',
            'title' => '获取标注信息',
            'summary' => '获取标注信息。',
            'description' => '## 功能描述'."\n"
                .'统计标注的标签以及数量。'."\n"
                ."\n"
                .'> - 您可以进入[在线咨询](https://www.aliyun.com/core/online-consult?from=aZgW6LJHr2)获取在线人工帮助。'."\n"
                .'- 阿里云视觉智能开放平台视觉AI能力API接入、接口使用或问题咨询等，请通过钉钉群（23109592）加入阿里云视觉智能开放平台咨询群联系我们。'."\n"
                ."\n"
                .'## 接入指引'."\n"
                .'1. 注册阿里云账号：打开[阿里云官网](https://www.aliyun.com)，在阿里云官网右上角，单击**立即注册**，按照操作提示完成账号注册。'."\n"
                .'2. 开通能力：请确保您已开通自学习服务，若未开通服务请[立即开通](https://common-buy.aliyun.com/?commodityCode=viapi_selflearning_public_cn)。'."\n"
                .'3. 创建AccessKey：请确保您已[创建AccessKey](~~175144~~)，如果您使用的是子账号AccessKey，您需要给子账号赋予AliyunVIAPIFullAccess权限，具体操作，请参见[RAM授权](~~145025~~)。'."\n"
                .'4. 在线调试（可选）：您可以通过[OpenAPI Explorer](https://next.api.aliyun.com/api/viapi-regen/2021-11-19/GetLabelDetail?lang=JAVA&sdkStyle=old)在线调试能力，查看完整的调用示例代码及SDK依赖信息，也可以下载完整的工程。'."\n"
                .'5. 开发接入步骤：    '."\n"
                .'- 在[SDK总览](~~145033~~)中选择您要接入使用的SDK语言。'."\n"
                .'- 在对应语言的SDK文档中找到AI类目为自学习（viapi-regen）类目的SDK包进行安装。'."\n"
                .'- 参考文档中提供的示例代码进行适当修改后调用。'."\n"
                ."\n"
                .'6. 客户端直接调用：该能力常用的客户端调用方式包括以下几种。'."\n"
                .'- [Web前端直接调用](~~467779~~)'."\n"
                .'- [小程序场景下直接调用](~~467780~~)'."\n"
                .'- [Android端直接调用](~~467781~~)'."\n"
                .'- [iOS端直接调用](~~467782~~)',
            'responseParamsDescription' => '### LabelInfo参数说明'."\n"
                .'自学习包括三种生产空间类型，每一种类型对应的LabelInfo参数值也不同，详情请参见以下代码示例：'."\n"
                .'- 通用分类：`{\\"dataVolume\\":147,\\"labelCount\\":{\\"鸟\\":147}}`'."\n"
                .'- 通用检测：`{\\"dataVolume\\":101,\\"detectionFrameLabelCount\\":{\\"honglvdeng\\":116},\\"detectionFrameQuantity\\":116}`'."\n"
                .'- 通用分割：`{\\"dataVolume\\":101,\\"detectionFrameLabelCount\\":{\\"honglvdeng\\":116},\\"detectionFrameQuantity\\":116}`'."\n"
                ."\n"
                .'## SDK参考'."\n"
                .'阿里云视觉AI自学习类目下的获取标注标签详情能力推荐使用SDK调用，支持多种编程语言，调用时请选择AI类目为自学习（viapi-regen）的SDK包，文件参数通过SDK调用可支持本地文件及任意URL，具体可参见[SDK总览](~~145033~~)。',
            'extraInfo' => '## 错误码'."\n"
                .'关于获取标注标签详情的错误码，详情请参见[常见错误码](~~441239~~)。'."\n"
                ."\n"
                .'## 安全声明'."\n"
                .'- 请确保上传的图片或文件来源符合相应的法律法规。'."\n"
                .'- 通过体验调试上传的临时文件有效期为1小时，在24小时后会被系统自动清理删除。',
        ],
        'GetLabelset' => [
            'methods' => [
                'post',
                'get',
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
                    'name' => 'Id',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '标注ID。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '188',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '每个请求分配唯一的服务器请求ID。',
                                'type' => 'string',
                                'example' => '6670C3CC-BD5D-01A5-9371-2D4F82E98FF1',
                            ],
                            'Data' => [
                                'description' => '出参数据实体。',
                                'type' => 'object',
                                'properties' => [
                                    'Id' => [
                                        'description' => '标注ID。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '833',
                                    ],
                                    'GmtCreate' => [
                                        'description' => '创建时间。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '1662605747000',
                                    ],
                                    'Name' => [
                                        'description' => '标记名称。',
                                        'type' => 'string',
                                        'example' => '回流数据集',
                                    ],
                                    'Description' => [
                                        'description' => '标记描述。',
                                        'type' => 'string',
                                        'example' => 'test2',
                                    ],
                                    'LabelType' => [
                                        'description' => '标注类型。取值如下：'."\n"
                                            ."\n"
                                            .'- UPLOAD_FILE（上传标注文件）'."\n"
                                            .'- SELECT_FILE（选择标注文件）'."\n"
                                            .'- USE_LABEL_SYSTEM（选择标注系统）',
                                        'type' => 'string',
                                        'example' => 'USE_LABEL_SYSTEM',
                                    ],
                                    'TagUserList' => [
                                        'description' => '当前标注的打标人。仅在`LabelType=USE_LABEL_SYSTEM`时存在。',
                                        'type' => 'string',
                                        'example' => '["278166737224834274"]',
                                    ],
                                    'Tags' => [
                                        'description' => '当前标注的标签名称。',
                                        'type' => 'string',
                                        'example' => '["红绿灯","信号灯"]',
                                    ],
                                    'SubTaskPackageSize' => [
                                        'description' => '当前标注子任务包大小。仅在`LabelType=USE_LABEL_SYSTEM`时存在。',
                                        'type' => 'string',
                                        'example' => '20',
                                    ],
                                    'Status' => [
                                        'description' => '标注状态。取值如下：'."\n"
                                            ."\n"
                                            .'- FILE_CHECKING（文件格式校验中）'."\n"
                                            .'- FILE_CHECK_SUCCESS（文件格式校验成功）'."\n"
                                            .'- FILE_CHECK_FAIL（文件格式校验失败）'."\n",
                                        'type' => 'string',
                                        'example' => 'TAG_FINISHED',
                                    ],
                                    'Total' => [
                                        'description' => '标注数据的数量。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '30',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"6670C3CC-BD5D-01A5-9371-2D4F82E98FF1\\",\\n  \\"Data\\": {\\n    \\"Id\\": 833,\\n    \\"GmtCreate\\": 1662605747000,\\n    \\"Name\\": \\"回流数据集\\",\\n    \\"Description\\": \\"test2\\",\\n    \\"LabelType\\": \\"USE_LABEL_SYSTEM\\",\\n    \\"TagUserList\\": \\"[\\\\\\"278166737224834274\\\\\\"]\\",\\n    \\"Tags\\": \\"[\\\\\\"红绿灯\\\\\\",\\\\\\"信号灯\\\\\\"]\\",\\n    \\"SubTaskPackageSize\\": \\"20\\",\\n    \\"Status\\": \\"TAG_FINISHED\\",\\n    \\"Total\\": 30\\n  }\\n}","errorExample":""},{"type":"xml","example":"<GetLabelsetResponse>\\n    <RequestId>6670C3CC-BD5D-01A5-9371-2D4F82E98FF1</RequestId>\\n    <Data>\\n        <Status>TAG_FINISHED</Status>\\n        <GmtCreate>1662605747000</GmtCreate>\\n        <SubTaskPackageSize>20</SubTaskPackageSize>\\n        <Description>test2</Description>\\n        <LabelType>USE_LABEL_SYSTEM</LabelType>\\n        <Total>30</Total>\\n        <TagUserList>[\\"278166737224834274\\"]</TagUserList>\\n        <Id>833</Id>\\n        <Tags>[\\"红绿灯\\",\\"信号灯\\"]</Tags>\\n        <Name>回流数据集</Name>\\n    </Data>\\n</GetLabelsetResponse>","errorExample":""}]',
            'title' => '获取标注',
            'summary' => '获取标注。',
            'description' => '## 功能描述'."\n"
                .'根据标注ID查看标注集的详细情况。'."\n"
                ."\n"
                .'> - 您可以进入[在线咨询](https://www.aliyun.com/core/online-consult?from=aZgW6LJHr2)获取在线人工帮助。'."\n"
                .'- 阿里云视觉智能开放平台视觉AI能力API接入、接口使用或问题咨询等，请通过钉钉群（23109592）加入阿里云视觉智能开放平台咨询群联系我们。'."\n"
                ."\n"
                .'## 接入指引'."\n"
                .'1. 注册阿里云账号：打开[阿里云官网](https://www.aliyun.com)，在阿里云官网右上角，单击**立即注册**，按照操作提示完成账号注册。'."\n"
                .'2. 开通能力：请确保您已开通自学习服务，若未开通服务请[立即开通](https://common-buy.aliyun.com/?commodityCode=viapi_selflearning_public_cn)。'."\n"
                .'3. 创建AccessKey：请确保您已[创建AccessKey](~~175144~~)，如果您使用的是子账号AccessKey，您需要给子账号赋予AliyunVIAPIFullAccess权限，具体操作，请参见[RAM授权](~~145025~~)。'."\n"
                .'4. 在线调试（可选）：您可以通过[OpenAPI Explorer](https://next.api.aliyun.com/api/viapi-regen/2021-11-19/GetLabelset?lang=JAVA&sdkStyle=old)在线调试能力，查看完整的调用示例代码及SDK依赖信息，也可以下载完整的工程。'."\n"
                .'5. 开发接入步骤：    '."\n"
                .'- 在[SDK总览](~~145033~~)中选择您要接入使用的SDK语言。'."\n"
                .'- 在对应语言的SDK文档中找到AI类目为自学习（viapi-regen）类目的SDK包进行安装。'."\n"
                .'- 参考文档中提供的示例代码进行适当修改后调用。'."\n"
                ."\n"
                .'6. 客户端直接调用：该能力常用的客户端调用方式包括以下几种。'."\n"
                .'- [Web前端直接调用](~~467779~~)'."\n"
                .'- [小程序场景下直接调用](~~467780~~)'."\n"
                .'- [Android端直接调用](~~467781~~)'."\n"
                .'- [iOS端直接调用](~~467782~~)',
            'responseParamsDescription' => '## SDK参考'."\n"
                .'阿里云视觉AI自学习类目下的获得标注能力推荐使用SDK调用，支持多种编程语言，调用时请选择AI类目为自学习（viapi-regen）的SDK包，文件参数通过SDK调用可支持本地文件及任意URL，具体可参见[SDK总览](~~145033~~)。',
            'extraInfo' => '## 错误码'."\n"
                .'关于获得标注的错误码，详情请参见[常见错误码](~~441239~~)。'."\n"
                ."\n"
                .'## 安全声明'."\n"
                .'- 请确保上传的图片或文件来源符合相应的法律法规。'."\n"
                .'- 通过体验调试上传的临时文件有效期为1小时，在24小时后会被系统自动清理删除。',
        ],
        'GetService' => [
            'methods' => [
                'post',
                'get',
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
                    'name' => 'Id',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '服务ID，用以标识唯一服务。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '4',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '每个请求分配唯一的服务器请求ID。',
                                'type' => 'string',
                                'example' => 'BAFD3138-AF5B-0193-A155-32C16CA895AE',
                            ],
                            'Data' => [
                                'description' => '出参数据实体。',
                                'type' => 'object',
                                'properties' => [
                                    'Id' => [
                                        'description' => '服务ID。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '4',
                                    ],
                                    'GmtCreate' => [
                                        'description' => '创建时间。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '1631505139000',
                                    ],
                                    'ServiceName' => [
                                        'description' => '服务名称。',
                                        'type' => 'string',
                                        'example' => 'QSL测试',
                                    ],
                                    'ServiceDescription' => [
                                        'description' => '服务描述。',
                                        'type' => 'string',
                                        'example' => 'SQL测试描述',
                                    ],
                                    'Status' => [
                                        'description' => '服务当前状态，服务状态取值如下：'."\n"
                                            ."\n"
                                            .'- **INIT**：初始化'."\n"
                                            .'- **STARTING**：开始运行'."\n"
                                            .'- **RUNNING**：运行'."\n"
                                            .'- **START_FAIL**：启动失败'."\n"
                                            .'- **STOPPING**：停止运行'."\n",
                                        'type' => 'string',
                                        'example' => 'INIT',
                                    ],
                                    'ServiceId' => [
                                        'description' => '接口鉴权密钥。',
                                        'type' => 'string',
                                        'example' => 'b66e91b46a05afa3b07c4dcaafb9****',
                                    ],
                                    'InputParams' => [
                                        'description' => '入参。',
                                        'type' => 'string',
                                        'example' => '[{"name": "requestId", "desc": "请求ID，用于问题排查", "example": "D6319603-9DD1-45ae-950E-FCA36EB6DFA7"}, {"name": "imageUrl", "desc": "需要传上海OSS内网地址", "example": "https://viapi-test.oss-cn-shanghai-internal.aliyuncs.com/regen/test.jpeg"}]',
                                    ],
                                    'OutputParams' => [
                                        'description' => '出参。',
                                        'type' => 'string',
                                        'example' => '[{"name": "category", "desc": "分类", "example": "black"}, {"name": "score", "desc": "置信度", "example": "0.8801174759864807"}]',
                                    ],
                                    'Errorcodes' => [
                                        'description' => '错误码。',
                                        'type' => 'string',
                                        'example' => '[{"errorcode": "0", "errormessage": "success", "description": "成功"}, {"errorcode": "401", "errormessage": "parse json error", "description": "解析输入的json出错"}, {"errorcode": "402", "errormessage": "download data error", "description": "下载图片出错"}, {"errorcode": "500", "errormessage": "pre processing error", "description": "算法前处理错误"}, {"errorcode": "501", "errormessage": "inference error", "description": "算法推理错误"}, {"errorcode": "502", "errormessage": "post processing error", "description": "算法后处理错误"}]',
                                    ],
                                    'InputExample' => [
                                        'description' => '入参示例。',
                                        'type' => 'string',
                                        'example' => '{"requestId": "D6319603-9DD1-45ae-950E-FCA36EB6DFA7", "imageUrl":"https://viapi-test.oss-cn-shanghai-internal.aliyuncs.com/regen/test.jpeg"}',
                                    ],
                                    'OutputExample' => [
                                        'description' => '出参示例。',
                                        'type' => 'string',
                                        'example' => '{"right": "{\'requestId\': \'D6319603-9DD1-45ae-950E-FCA36EB6DFA7\', \'data\': {\'category\': \'black\', \'score\': 0.8801174759864807}, \'errorcode\': \'0\', \'errormessage\': \'success\'}", "wrong": "{\'requestId\': \'D6319603-9DD1-45ae-950E-FCA36EB6DFA7\', \'errorcode\': \'402\', \'errormessage\': \'download data error\'}"',
                                    ],
                                    'DataReflowInfo' => [
                                        'description' => '数据回流信息。',
                                        'type' => 'object',
                                        'properties' => [
                                            'DataReflowCount' => [
                                                'description' => '当前服务回流数据总量。',
                                                'type' => 'integer',
                                                'format' => 'int64',
                                                'example' => '193',
                                            ],
                                            'DataReflowRate' => [
                                                'description' => '数据回流率。',
                                                'type' => 'integer',
                                                'format' => 'int64',
                                                'example' => '100',
                                            ],
                                            'DataReflowOssPath' => [
                                                'description' => '数据回流路径。',
                                                'type' => 'string',
                                                'example' => 'oss://regen-test-bucket/jhdtest/检测/回流2/',
                                            ],
                                            'EnableDataReflowFlag' => [
                                                'description' => '数据回流开关标识。',
                                                'type' => 'boolean',
                                                'example' => 'true',
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"BAFD3138-AF5B-0193-A155-32C16CA895AE\\",\\n  \\"Data\\": {\\n    \\"Id\\": 4,\\n    \\"GmtCreate\\": 1631505139000,\\n    \\"ServiceName\\": \\"QSL测试\\",\\n    \\"ServiceDescription\\": \\"SQL测试描述\\",\\n    \\"Status\\": \\"INIT\\",\\n    \\"ServiceId\\": \\"b66e91b46a05afa3b07c4dcaafb9****\\",\\n    \\"InputParams\\": \\"[{\\\\\\"name\\\\\\": \\\\\\"requestId\\\\\\", \\\\\\"desc\\\\\\": \\\\\\"请求ID，用于问题排查\\\\\\", \\\\\\"example\\\\\\": \\\\\\"D6319603-9DD1-45ae-950E-FCA36EB6DFA7\\\\\\"}, {\\\\\\"name\\\\\\": \\\\\\"imageUrl\\\\\\", \\\\\\"desc\\\\\\": \\\\\\"需要传上海OSS内网地址\\\\\\", \\\\\\"example\\\\\\": \\\\\\"https://viapi-test.oss-cn-shanghai-internal.aliyuncs.com/regen/test.jpeg\\\\\\"}]\\",\\n    \\"OutputParams\\": \\"[{\\\\\\"name\\\\\\": \\\\\\"category\\\\\\", \\\\\\"desc\\\\\\": \\\\\\"分类\\\\\\", \\\\\\"example\\\\\\": \\\\\\"black\\\\\\"}, {\\\\\\"name\\\\\\": \\\\\\"score\\\\\\", \\\\\\"desc\\\\\\": \\\\\\"置信度\\\\\\", \\\\\\"example\\\\\\": \\\\\\"0.8801174759864807\\\\\\"}]\\",\\n    \\"Errorcodes\\": \\"[{\\\\\\"errorcode\\\\\\": \\\\\\"0\\\\\\", \\\\\\"errormessage\\\\\\": \\\\\\"success\\\\\\", \\\\\\"description\\\\\\": \\\\\\"成功\\\\\\"}, {\\\\\\"errorcode\\\\\\": \\\\\\"401\\\\\\", \\\\\\"errormessage\\\\\\": \\\\\\"parse json error\\\\\\", \\\\\\"description\\\\\\": \\\\\\"解析输入的json出错\\\\\\"}, {\\\\\\"errorcode\\\\\\": \\\\\\"402\\\\\\", \\\\\\"errormessage\\\\\\": \\\\\\"download data error\\\\\\", \\\\\\"description\\\\\\": \\\\\\"下载图片出错\\\\\\"}, {\\\\\\"errorcode\\\\\\": \\\\\\"500\\\\\\", \\\\\\"errormessage\\\\\\": \\\\\\"pre processing error\\\\\\", \\\\\\"description\\\\\\": \\\\\\"算法前处理错误\\\\\\"}, {\\\\\\"errorcode\\\\\\": \\\\\\"501\\\\\\", \\\\\\"errormessage\\\\\\": \\\\\\"inference error\\\\\\", \\\\\\"description\\\\\\": \\\\\\"算法推理错误\\\\\\"}, {\\\\\\"errorcode\\\\\\": \\\\\\"502\\\\\\", \\\\\\"errormessage\\\\\\": \\\\\\"post processing error\\\\\\", \\\\\\"description\\\\\\": \\\\\\"算法后处理错误\\\\\\"}]\\",\\n    \\"InputExample\\": \\"{\\\\\\"requestId\\\\\\": \\\\\\"D6319603-9DD1-45ae-950E-FCA36EB6DFA7\\\\\\", \\\\\\"imageUrl\\\\\\":\\\\\\"https://viapi-test.oss-cn-shanghai-internal.aliyuncs.com/regen/test.jpeg\\\\\\"}\\",\\n    \\"OutputExample\\": \\"{\\\\\\"right\\\\\\": \\\\\\"{\'requestId\': \'D6319603-9DD1-45ae-950E-FCA36EB6DFA7\', \'data\': {\'category\': \'black\', \'score\': 0.8801174759864807}, \'errorcode\': \'0\', \'errormessage\': \'success\'}\\\\\\", \\\\\\"wrong\\\\\\": \\\\\\"{\'requestId\': \'D6319603-9DD1-45ae-950E-FCA36EB6DFA7\', \'errorcode\': \'402\', \'errormessage\': \'download data error\'}\\\\\\"\\",\\n    \\"DataReflowInfo\\": {\\n      \\"DataReflowCount\\": 193,\\n      \\"DataReflowRate\\": 100,\\n      \\"DataReflowOssPath\\": \\"oss://regen-test-bucket/jhdtest/检测/回流2/\\",\\n      \\"EnableDataReflowFlag\\": true\\n    }\\n  }\\n}","errorExample":""},{"type":"xml","example":"<GetServiceResponse>\\n    <RequestId>BAFD3138-AF5B-0193-A155-32C16CA895AE</RequestId>\\n    <Data>\\n        <Id>4</Id>\\n        <GmtCreate>1631505139000</GmtCreate>\\n        <ServiceName>QSL测试</ServiceName>\\n        <ServiceDescription>SQL测试描述</ServiceDescription>\\n        <Status>INIT</Status>\\n        <ServiceId>b66e91b46a05afa3b07c4dcaafb9****</ServiceId>\\n        <InputParams>[{\\"name\\": \\"requestId\\", \\"desc\\": \\"请求ID，用于问题排查\\", \\"example\\": \\"D6319603-9DD1-45ae-950E-FCA36EB6DFA7\\"}, {\\"name\\": \\"imageUrl\\", \\"desc\\": \\"需要传上海OSS内网地址\\", \\"example\\": \\"https://viapi-test.oss-cn-shanghai-internal.aliyuncs.com/regen/test.jpeg\\"}]</InputParams>\\n        <OutputParams>[{\\"name\\": \\"category\\", \\"desc\\": \\"分类\\", \\"example\\": \\"black\\"}, {\\"name\\": \\"score\\", \\"desc\\": \\"置信度\\", \\"example\\": \\"0.8801174759864807\\"}]</OutputParams>\\n        <Errorcodes>[{\\"errorcode\\": \\"0\\", \\"errormessage\\": \\"success\\", \\"description\\": \\"成功\\"}, {\\"errorcode\\": \\"401\\", \\"errormessage\\": \\"parse json error\\", \\"description\\": \\"解析输入的json出错\\"}, {\\"errorcode\\": \\"402\\", \\"errormessage\\": \\"download data error\\", \\"description\\": \\"下载图片出错\\"}, {\\"errorcode\\": \\"500\\", \\"errormessage\\": \\"pre processing error\\", \\"description\\": \\"算法前处理错误\\"}, {\\"errorcode\\": \\"501\\", \\"errormessage\\": \\"inference error\\", \\"description\\": \\"算法推理错误\\"}, {\\"errorcode\\": \\"502\\", \\"errormessage\\": \\"post processing error\\", \\"description\\": \\"算法后处理错误\\"}]</Errorcodes>\\n        <InputExample>{\\"requestId\\": \\"D6319603-9DD1-45ae-950E-FCA36EB6DFA7\\", \\"imageUrl\\":\\"https://viapi-test.oss-cn-shanghai-internal.aliyuncs.com/regen/test.jpeg\\"}</InputExample>\\n        <OutputExample>{\\"right\\": \\"{\'requestId\': \'D6319603-9DD1-45ae-950E-FCA36EB6DFA7\', \'data\': {\'category\': \'black\', \'score\': 0.8801174759864807}, \'errorcode\': \'0\', \'errormessage\': \'success\'}\\", \\"wrong\\": \\"{\'requestId\': \'D6319603-9DD1-45ae-950E-FCA36EB6DFA7\', \'errorcode\': \'402\', \'errormessage\': \'download data error\'}\\"</OutputExample>\\n        <DataReflowInfo>\\n            <DataReflowCount>193</DataReflowCount>\\n            <DataReflowRate>100</DataReflowRate>\\n            <DataReflowOssPath>oss://regen-test-bucket/jhdtest/检测/回流2/</DataReflowOssPath>\\n            <EnableDataReflowFlag>true</EnableDataReflowFlag>\\n        </DataReflowInfo>\\n    </Data>\\n</GetServiceResponse>","errorExample":""}]',
            'title' => '获取服务信息',
            'summary' => '获取服务信息。',
            'description' => '## 功能描述'."\n"
                .'通过服务ID，查看服务详情。'."\n"
                ."\n"
                .'> - 您可以进入[在线咨询](https://www.aliyun.com/core/online-consult?from=aZgW6LJHr2)获取在线人工帮助。'."\n"
                .'- 阿里云视觉智能开放平台视觉AI能力API接入、接口使用或问题咨询等，请通过钉钉群（23109592）加入阿里云视觉智能开放平台咨询群联系我们。'."\n"
                ."\n"
                .'## 接入指引'."\n"
                .'1. 注册阿里云账号：打开[阿里云官网](https://www.aliyun.com)，在阿里云官网右上角，单击**立即注册**，按照操作提示完成账号注册。'."\n"
                .'2. 开通能力：请确保您已开通自学习服务，若未开通服务请[立即开通](https://common-buy.aliyun.com/?commodityCode=viapi_selflearning_public_cn)。'."\n"
                .'3. 创建AccessKey：请确保您已[创建AccessKey](~~175144~~)，如果您使用的是子账号AccessKey，您需要给子账号赋予AliyunVIAPIFullAccess权限，具体操作，请参见[RAM授权](~~145025~~)。'."\n"
                .'4. 在线调试（可选）：您可以通过[OpenAPI Explorer](https://next.api.aliyun.com/api/viapi-regen/2021-11-19/GetService?lang=JAVA&sdkStyle=old)在线调试能力，查看完整的调用示例代码及SDK依赖信息，也可以下载完整的工程。'."\n"
                .'5. 开发接入步骤：    '."\n"
                .'- 在[SDK总览](~~145033~~)中选择您要接入使用的SDK语言。'."\n"
                .'- 在对应语言的SDK文档中找到AI类目为自学习（viapi-regen）类目的SDK包进行安装。'."\n"
                .'- 参考文档中提供的示例代码进行适当修改后调用。'."\n"
                ."\n"
                .'6. 客户端直接调用：该能力常用的客户端调用方式包括以下几种。'."\n"
                .'- [Web前端直接调用](~~467779~~)'."\n"
                .'- [小程序场景下直接调用](~~467780~~)'."\n"
                .'- [Android端直接调用](~~467781~~)'."\n"
                .'- [iOS端直接调用](~~467782~~)',
            'responseParamsDescription' => '## SDK参考'."\n"
                .'阿里云视觉AI自学习类目下的获取服务能力推荐使用SDK调用，支持多种编程语言，调用时请选择AI类目为自学习（viapi-regen）的SDK包，文件参数通过SDK调用可支持本地文件及任意URL，具体可参见[SDK总览](~~145033~~)。',
            'extraInfo' => '## 错误码'."\n"
                .'关于获取服务的错误码，详情请参见[常见错误码](~~441239~~)。'."\n"
                ."\n"
                .'## 安全声明'."\n"
                .'- 请确保上传的图片或文件来源符合相应的法律法规。'."\n"
                .'- 通过体验调试上传的临时文件有效期为1小时，在24小时后会被系统自动清理删除。',
        ],
        'GetTrainModel' => [
            'methods' => [
                'post',
                'get',
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
                    'name' => 'Id',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '训练任务ID。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '52',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '63CB30AA-224C-05CA-B9EB-24CEA68B5E71',
                            ],
                            'Data' => [
                                'description' => '返回的结果数据内容。',
                                'type' => 'object',
                                'properties' => [
                                    'SimpleEvaluate' => [
                                        'description' => 'JSON串，返回模型效果信息。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '[     {         "id":"TOP1_ACC",         "name":"top1准确率",         "value":100     },     {         "id":"TOP5_ACC",         "name":"top5准确率",         "value":100     }',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"63CB30AA-224C-05CA-B9EB-24CEA68B5E71\\",\\n  \\"Data\\": {\\n    \\"SimpleEvaluate\\": 0\\n  }\\n}","errorExample":""},{"type":"xml","example":"<GetTrainModelResponse>\\n    <RequestId>63CB30AA-224C-05CA-B9EB-24CEA68B5E71</RequestId>\\n    <Data>\\n        <SimpleEvaluate>[{\\"id\\": \\"TOP1_ACC\\", \\"name\\": \\"top1准确率\\", \\"value\\": 100.0}, {\\"id\\": \\"TOP5_ACC\\", \\"name\\": \\"top5准确率\\", \\"value\\": 100.0}]</SimpleEvaluate>\\n    </Data>\\n</GetTrainModelResponse>","errorExample":""}]',
            'title' => '获取训练模型',
            'summary' => '获取训练模型GetTrainModel的语法及示例。',
            'description' => '## 功能描述'."\n"
                .'通过训练任务ID，获取训练模型。'."\n"
                ."\n"
                .'> - 您可以进入[在线咨询](https://www.aliyun.com/core/online-consult?from=aZgW6LJHr2)获取在线人工帮助。'."\n"
                .'- 阿里云视觉智能开放平台视觉AI能力API接入、接口使用或问题咨询等，请通过钉钉群（23109592）加入阿里云视觉智能开放平台咨询群联系我们。'."\n"
                ."\n"
                .'## 接入指引'."\n"
                .'1. 注册阿里云账号：打开[阿里云官网](https://www.aliyun.com)，在阿里云官网右上角，单击**立即注册**，按照操作提示完成账号注册。'."\n"
                .'2. 开通能力：请确保您已开通自学习服务，若未开通服务请[立即开通](https://common-buy.aliyun.com/?commodityCode=viapi_selflearning_public_cn)。'."\n"
                .'3. 创建AccessKey：请确保您已[创建AccessKey](~~175144~~)，如果您使用的是子账号AccessKey，您需要给子账号赋予AliyunVIAPIFullAccess权限，具体操作，请参见[RAM授权](~~145025~~)。'."\n"
                .'4. 在线调试（可选）：您可以通过[OpenAPI Explorer](https://next.api.aliyun.com/api/viapi-regen/2021-11-19/GetTrainModel?lang=JAVA&sdkStyle=old)在线调试能力，查看完整的调用示例代码及SDK依赖信息，也可以下载完整的工程。'."\n"
                ."\n"
                .'5. 开发接入步骤：    '."\n"
                .'- 在[SDK总览](~~145033~~)中选择您要接入使用的SDK语言。'."\n"
                .'- 在对应语言的SDK文档中找到AI类目为自学习（viapi-regen）类目的SDK包进行安装。'."\n"
                .'- 参考文档中提供的示例代码进行适当修改后调用。'."\n"
                ."\n"
                .'6. 客户端直接调用：该能力常用的客户端调用方式包括以下几种。'."\n"
                .'- [Web前端直接调用](~~467779~~)'."\n"
                .'- [小程序场景下直接调用](~~467780~~)'."\n"
                .'- [Android端直接调用](~~467781~~)'."\n"
                .'- [iOS端直接调用](~~467782~~)',
            'responseParamsDescription' => '## SDK参考'."\n"
                .'阿里云视觉AI自学习类目下的获取训练模型能力推荐使用SDK调用，支持多种编程语言，调用时请选择AI类目为自学习（viapi-regen）的SDK包，文件参数通过SDK调用可支持本地文件及任意URL，具体可参见[SDK总览](~~145033~~)。',
            'extraInfo' => '## 错误码'."\n"
                .'关于获取训练模型的错误码，详情请参见[常见错误码](~~441239~~)。'."\n"
                ."\n"
                .'## 安全声明'."\n"
                .'- 请确保上传的图片或文件来源符合相应的法律法规。'."\n"
                .'- 通过体验调试上传的临时文件有效期为1小时，在24小时后会被系统自动清理删除。',
        ],
        'GetTrainTask' => [
            'methods' => [
                'post',
                'get',
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
                    'name' => 'Id',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '训练任务ID。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '43',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '每个请求分配唯一的服务器请求ID。',
                                'type' => 'string',
                                'example' => '8DA0CC03-B391-0E58-90AA-03CFCDD9434B',
                            ],
                            'Data' => [
                                'description' => '出参数据实体。',
                                'type' => 'object',
                                'properties' => [
                                    'Id' => [
                                        'description' => '训练任务ID。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '43',
                                    ],
                                    'GmtCreate' => [
                                        'description' => '创建时间。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '1631762402000',
                                    ],
                                    'TaskName' => [
                                        'description' => '任务名称。',
                                        'type' => 'string',
                                        'example' => 'test1',
                                    ],
                                    'Description' => [
                                        'description' => '任务描述。',
                                        'type' => 'string',
                                        'example' => 'test1',
                                    ],
                                    'DatasetId' => [
                                        'description' => '数据集ID。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '120',
                                    ],
                                    'DatasetName' => [
                                        'description' => '数据集名称。',
                                        'type' => 'string',
                                        'example' => 'test1',
                                    ],
                                    'LabelId' => [
                                        'description' => '标注ID。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '188',
                                    ],
                                    'LabelName' => [
                                        'description' => '标注名字。',
                                        'type' => 'string',
                                        'example' => 'test2',
                                    ],
                                    'TrainMode' => [
                                        'description' => '训练模型。取值如下 ：'."\n"
                                            ."\n"
                                            .'- COMMON：均衡'."\n"
                                            ."\n"
                                            .'- HIGH_ACC：高精度'."\n"
                                            ."\n"
                                            .'- HIGH_PERF：高性能',
                                        'type' => 'string',
                                        'example' => 'COMMON',
                                    ],
                                    'TrainStatus' => [
                                        'description' => '训练状态。取值如下：'."\n"
                                            ."\n"
                                            .'- INIT：未训练'."\n"
                                            ."\n"
                                            .'- PREPARING：准备中'."\n"
                                            ."\n"
                                            .'- TRAINING：训练中'."\n"
                                            ."\n"
                                            .'- TRAIN_SUCCESS：训练成功'."\n"
                                            ."\n"
                                            .'- TRAIN_FAIL：训练失败',
                                        'type' => 'string',
                                        'example' => 'TRAIN_SUCCESS',
                                    ],
                                    'ModelId' => [
                                        'description' => '模型ID。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '14',
                                    ],
                                    'ModelEffect' => [
                                        'description' => '模型效果。',
                                        'type' => 'string',
                                        'example' => '[{"id": "TOP1_ACC", "name": "top1准确率", "value": 100.0}, {"id": "TOP5_ACC", "name": "top5准确率", "value": 100.0}]',
                                    ],
                                    'FailureReason' => [
                                        'description' => '训练任务失败原因。',
                                        'type' => 'string',
                                        'example' => 'STOP',
                                    ],
                                    'TrainUseTime' => [
                                        'description' => '训练任务耗时。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '17100',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"8DA0CC03-B391-0E58-90AA-03CFCDD9434B\\",\\n  \\"Data\\": {\\n    \\"Id\\": 43,\\n    \\"GmtCreate\\": 1631762402000,\\n    \\"TaskName\\": \\"test1\\",\\n    \\"Description\\": \\"test1\\",\\n    \\"DatasetId\\": 120,\\n    \\"DatasetName\\": \\"test1\\",\\n    \\"LabelId\\": 188,\\n    \\"LabelName\\": \\"test2\\",\\n    \\"TrainMode\\": \\"COMMON\\",\\n    \\"TrainStatus\\": \\"TRAIN_SUCCESS\\",\\n    \\"ModelId\\": 14,\\n    \\"ModelEffect\\": \\"[{\\\\\\"id\\\\\\": \\\\\\"TOP1_ACC\\\\\\", \\\\\\"name\\\\\\": \\\\\\"top1准确率\\\\\\", \\\\\\"value\\\\\\": 100.0}, {\\\\\\"id\\\\\\": \\\\\\"TOP5_ACC\\\\\\", \\\\\\"name\\\\\\": \\\\\\"top5准确率\\\\\\", \\\\\\"value\\\\\\": 100.0}]\\",\\n    \\"FailureReason\\": \\"STOP\\",\\n    \\"TrainUseTime\\": 17100\\n  }\\n}","errorExample":""},{"type":"xml","example":"<GetTrainTaskResponse>\\n    <RequestId>8DA0CC03-B391-0E58-90AA-03CFCDD9434B</RequestId>\\n    <Data>\\n        <Id>43</Id>\\n        <GmtCreate>1631762402000</GmtCreate>\\n        <TaskName>test1</TaskName>\\n        <Description>test1</Description>\\n        <DatasetId>120</DatasetId>\\n        <DatasetName>test1</DatasetName>\\n        <LabelId>188</LabelId>\\n        <LabelName>test2</LabelName>\\n        <TrainMode>COMMON</TrainMode>\\n        <TrainStatus>TRAIN_SUCCESS</TrainStatus>\\n        <ModelId>14</ModelId>\\n        <ModelEffect>[{\\"id\\": \\"TOP1_ACC\\", \\"name\\": \\"top1准确率\\", \\"value\\": 100.0}, {\\"id\\": \\"TOP5_ACC\\", \\"name\\": \\"top5准确率\\", \\"value\\": 100.0}]</ModelEffect>\\n        <FailureReason>STOP</FailureReason>\\n        <TrainUseTime>17100</TrainUseTime>\\n    </Data>\\n</GetTrainTaskResponse>","errorExample":""}]',
            'title' => '获得训练任务',
            'summary' => '获得训练任务GetTrainTask的语法及示例。',
            'description' => '## 功能描述'."\n"
                .'根据训练任务ID查看训练任务的详细情况。'."\n"
                ."\n"
                .'> - 您可以进入[在线咨询](https://www.aliyun.com/core/online-consult?from=aZgW6LJHr2)获取在线人工帮助。'."\n"
                .'- 阿里云视觉智能开放平台视觉AI能力API接入、接口使用或问题咨询等，请通过钉钉群（23109592）加入阿里云视觉智能开放平台咨询群联系我们。'."\n"
                ."\n"
                .'## 接入指引'."\n"
                .'1. 注册阿里云账号：打开[阿里云官网](https://www.aliyun.com)，在阿里云官网右上角，单击**立即注册**，按照操作提示完成账号注册。'."\n"
                .'2. 开通能力：请确保您已开通自学习服务，若未开通服务请[立即开通](https://common-buy.aliyun.com/?commodityCode=viapi_selflearning_public_cn)。'."\n"
                .'3. 创建AccessKey：请确保您已[创建AccessKey](~~175144~~)，如果您使用的是子账号AccessKey，您需要给子账号赋予AliyunVIAPIFullAccess权限，具体操作，请参见[RAM授权](~~145025~~)。'."\n"
                .'4. 在线调试（可选）：您可以通过[OpenAPI Explorer](https://next.api.aliyun.com/api/viapi-regen/2021-11-19/GetTrainTask?lang=JAVA&sdkStyle=old)在线调试能力，查看完整的调用示例代码及SDK依赖信息，也可以下载完整的工程。'."\n"
                ."\n"
                .'5. 开发接入步骤：    '."\n"
                .'- 在[SDK总览](~~145033~~)中选择您要接入使用的SDK语言。'."\n"
                .'- 在对应语言的SDK文档中找到AI类目为自学习（viapi-regen）类目的SDK包进行安装。'."\n"
                .'- 参考文档中提供的示例代码进行适当修改后调用。'."\n"
                ."\n"
                .'6. 客户端直接调用：该能力常用的客户端调用方式包括以下几种。'."\n"
                .'- [Web前端直接调用](~~467779~~)'."\n"
                .'- [小程序场景下直接调用](~~467780~~)'."\n"
                .'- [Android端直接调用](~~467781~~)'."\n"
                .'- [iOS端直接调用](~~467782~~)',
            'responseParamsDescription' => '## SDK参考'."\n"
                .'阿里云视觉AI自学习类目下的获得训练任务能力推荐使用SDK调用，支持多种编程语言，调用时请选择AI类目为自学习（viapi-regen）的SDK包，文件参数通过SDK调用可支持本地文件及任意URL，具体可参见[SDK总览](~~145033~~)。',
            'extraInfo' => '## 错误码'."\n"
                .'关于获得训练任务的错误码，详情请参见[常见错误码](~~441239~~)。'."\n"
                ."\n"
                .'## 安全声明'."\n"
                .'- 请确保上传的图片或文件来源符合相应的法律法规。'."\n"
                .'- 通过体验调试上传的临时文件有效期为1小时，在24小时后会被系统自动清理删除。',
        ],
        'GetTrainTaskEstimatedTime' => [
            'methods' => [
                'post',
                'get',
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
                    'name' => 'Id',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '训练任务ID。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '127',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '每个请求分配唯一的服务器请求ID。',
                                'type' => 'string',
                                'example' => 'AD721805-2A34-090D-9C24-E4F5110A980D',
                            ],
                            'Data' => [
                                'description' => '出参数据实体。',
                                'type' => 'object',
                                'properties' => [
                                    'EstimatedTime' => [
                                        'description' => '训练耗时。',
                                        'type' => 'string',
                                        'example' => '2:23:34',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"AD721805-2A34-090D-9C24-E4F5110A980D\\",\\n  \\"Data\\": {\\n    \\"EstimatedTime\\": \\"2:23:34\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<GetTrainTaskEstimatedTimeResponse>\\n    <RequestId>AD721805-2A34-090D-9C24-E4F5110A980D</RequestId>\\n    <Data>\\n        <EstimatedTime>2:23:34</EstimatedTime>\\n    </Data>\\n</GetTrainTaskEstimatedTimeResponse>","errorExample":""}]',
            'title' => '获取训练任务剩余时间',
            'summary' => '获取训练任务剩余时间GetTrainTaskEstimatedTime的语法及示例。',
            'description' => '## 功能描述'."\n"
                .'根据训练任务ID查看此训练任务的剩余时间。'."\n"
                ."\n"
                .'> - 您可以进入[在线咨询](https://www.aliyun.com/core/online-consult?from=aZgW6LJHr2)获取在线人工帮助。'."\n"
                .'- 阿里云视觉智能开放平台视觉AI能力API接入、接口使用或问题咨询等，请通过钉钉群（23109592）加入阿里云视觉智能开放平台咨询群联系我们。'."\n"
                ."\n"
                .'## 接入指引'."\n"
                .'1. 注册阿里云账号：打开[阿里云官网](https://www.aliyun.com)，在阿里云官网右上角，单击**立即注册**，按照操作提示完成账号注册。'."\n"
                .'2. 开通能力：请确保您已开通自学习服务，若未开通服务请[立即开通](https://common-buy.aliyun.com/?commodityCode=viapi_selflearning_public_cn)。'."\n"
                .'3. 创建AccessKey：请确保您已[创建AccessKey](~~175144~~)，如果您使用的是子账号AccessKey，您需要给子账号赋予AliyunVIAPIFullAccess权限，具体操作，请参见[RAM授权](~~145025~~)。'."\n"
                .'4. 在线调试（可选）：您可以通过[OpenAPI Explorer](https://next.api.aliyun.com/api/viapi-regen/2021-11-19/GetTrainTaskEstimatedTime?lang=JAVA&sdkStyle=old)在线调试能力，查看完整的调用示例代码及SDK依赖信息，也可以下载完整的工程。'."\n"
                ."\n"
                .'5. 开发接入步骤：    '."\n"
                .'- 在[SDK总览](~~145033~~)中选择您要接入使用的SDK语言。'."\n"
                .'- 在对应语言的SDK文档中找到AI类目为自学习（viapi-regen）类目的SDK包进行安装。'."\n"
                .'- 参考文档中提供的示例代码进行适当修改后调用。'."\n"
                ."\n"
                .'6. 客户端直接调用：该能力常用的客户端调用方式包括以下几种。'."\n"
                .'- [Web前端直接调用](~~467779~~)'."\n"
                .'- [小程序场景下直接调用](~~467780~~)'."\n"
                .'- [Android端直接调用](~~467781~~)'."\n"
                .'- [iOS端直接调用](~~467782~~)',
            'responseParamsDescription' => '## SDK参考'."\n"
                .'阿里云视觉AI自学习类目下的获取训练任务剩余时间能力推荐使用SDK调用，支持多种编程语言，调用时请选择AI类目为自学习（viapi-regen）的SDK包，文件参数通过SDK调用可支持本地文件及任意URL，具体可参见[SDK总览](~~145033~~)。',
            'extraInfo' => '## 错误码'."\n"
                .'关于获取训练任务剩余时间的错误码，详情请参见[常见错误码](~~441239~~)。'."\n"
                ."\n"
                .'## 安全声明'."\n"
                .'- 请确保上传的图片或文件来源符合相应的法律法规。'."\n"
                .'- 通过体验调试上传的临时文件有效期为1小时，在24小时后会被系统自动清理删除。',
        ],
        'GetUploadPolicy' => [
            'methods' => [
                'post',
                'get',
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
                    'name' => 'Id',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '服务ID。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '21',
                    ],
                ],
                [
                    'name' => 'FileName',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '文件名称。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'alpha_7101_0.png',
                    ],
                ],
                [
                    'name' => 'Type',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '上传策略类型。取值如下：'."\n"
                            ."\n"
                            .'- `DATASET_UPLOAD_POLICY`：数据集上传策略'."\n"
                            ."\n"
                            .'- ` LABELSET_UPLOAD_POLICY`：标注上传策略'."\n"
                            ."\n"
                            .'- `SERVICE_VERIFY_DATA_UPLOAD_POLICY`：服务校验上传策略',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'SERVICE_VERIFY_DATA_UPLOAD_POLICY',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '每个请求分配唯一的服务器请求ID。',
                                'type' => 'string',
                                'example' => '4EA7EC9E-E571-0A48-BB70-66EB3A5DDE4A',
                            ],
                            'Data' => [
                                'description' => '出参数据实体。',
                                'type' => 'object',
                                'properties' => [
                                    'AccessId' => [
                                        'description' => '密钥ID。',
                                        'type' => 'string',
                                        'example' => 'LTAI5tEQPn4obqpuvGEg****',
                                    ],
                                    'Policy' => [
                                        'description' => '授权策略。',
                                        'type' => 'string',
                                        'example' => 'eyJleHBpcmF0aW9uIjoiMjAyMS0xMC0xM1QxMToxMTo0OS4yMTBaIiwiY29uZGl0aW9ucyI6W1siY29udGVudC1sZW5ndGgtcmFuZ2UiLDAsNTI0Mjg4MDAwXSx7ImtleSI6ImRhaWx5L3NlcnZpY2UvMjEvMTYzNDExOTkwOTIxMF9hbHBoYV83MTAxXzAucG5nIn1dfQ==',
                                    ],
                                    'Signature' => [
                                        'description' => '签名。',
                                        'type' => 'string',
                                        'example' => 'https://dha-regen-prod.oss-cn-shanghai.aliyuncs.com/daily/service/21/1634119909210_alpha_7101_0.png?Expires=1634119969&OSSAccessKeyId=LTAI5tEQPn4obqpuvGEg****&Signature=aglOPPZihml%2Fhe3GAMkS9zqovog%3D',
                                    ],
                                    'ObjectKey' => [
                                        'description' => 'Object名，使用UTF-8编码，长度在1-1023之间，不能以“/”“\\”开头。',
                                        'type' => 'string',
                                        'example' => 'daily/service/21/1634119909210_alpha_7101_0.png',
                                    ],
                                    'FileName' => [
                                        'description' => '文件名称。',
                                        'type' => 'string',
                                        'example' => '1634119909210_alpha_7101_0.png',
                                    ],
                                    'BucketName' => [
                                        'description' => '存储空间名称。',
                                        'type' => 'string',
                                        'example' => 'dha-regen-prod',
                                    ],
                                    'Endpoint' => [
                                        'description' => '选择登录的访问域名。',
                                        'type' => 'string',
                                        'example' => 'https://dha-regen-prod.oss-cn-shanghai.aliyuncs.com',
                                    ],
                                    'OriginalFilename' => [
                                        'description' => '文件原有名称。',
                                        'type' => 'string',
                                        'example' => '1634119909210_alpha_7101_0.png',
                                    ],
                                    'SignedHttpUrl' => [
                                        'description' => '临时授权的URL。',
                                        'type' => 'string',
                                        'example' => 'https://dha-regen-prod.oss-cn-shanghai.aliyuncs.com/daily/service/21/1634119909210_alpha_7101_0.png?Expires=1634119969&OSSAccessKeyId=LTAI5tEQPn4obqpuvGEg****&Signature=aglOPPZihml%2Fhe3GAMkS9zqovog%3D',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"4EA7EC9E-E571-0A48-BB70-66EB3A5DDE4A\\",\\n  \\"Data\\": {\\n    \\"AccessId\\": \\"LTAI5tEQPn4obqpuvGEg****\\",\\n    \\"Policy\\": \\"eyJleHBpcmF0aW9uIjoiMjAyMS0xMC0xM1QxMToxMTo0OS4yMTBaIiwiY29uZGl0aW9ucyI6W1siY29udGVudC1sZW5ndGgtcmFuZ2UiLDAsNTI0Mjg4MDAwXSx7ImtleSI6ImRhaWx5L3NlcnZpY2UvMjEvMTYzNDExOTkwOTIxMF9hbHBoYV83MTAxXzAucG5nIn1dfQ==\\",\\n    \\"Signature\\": \\"https://dha-regen-prod.oss-cn-shanghai.aliyuncs.com/daily/service/21/1634119909210_alpha_7101_0.png?Expires=1634119969&OSSAccessKeyId=LTAI5tEQPn4obqpuvGEg****&Signature=aglOPPZihml%2Fhe3GAMkS9zqovog%3D\\",\\n    \\"ObjectKey\\": \\"daily/service/21/1634119909210_alpha_7101_0.png\\",\\n    \\"FileName\\": \\"1634119909210_alpha_7101_0.png\\",\\n    \\"BucketName\\": \\"dha-regen-prod\\",\\n    \\"Endpoint\\": \\"https://dha-regen-prod.oss-cn-shanghai.aliyuncs.com\\",\\n    \\"OriginalFilename\\": \\"1634119909210_alpha_7101_0.png\\",\\n    \\"SignedHttpUrl\\": \\"https://dha-regen-prod.oss-cn-shanghai.aliyuncs.com/daily/service/21/1634119909210_alpha_7101_0.png?Expires=1634119969&OSSAccessKeyId=LTAI5tEQPn4obqpuvGEg****&Signature=aglOPPZihml%2Fhe3GAMkS9zqovog%3D\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<GetUploadPolicyResponse>\\n    <RequestId>4EA7EC9E-E571-0A48-BB70-66EB3A5DDE4A</RequestId>\\n    <Data>\\n        <AccessId>LTAI5tEQPn4obqpuvGEg****</AccessId>\\n        <Policy>eyJleHBpcmF0aW9uIjoiMjAyMS0xMC0xM1QxMToxMTo0OS4yMTBaIiwiY29uZGl0aW9ucyI6W1siY29udGVudC1sZW5ndGgtcmFuZ2UiLDAsNTI0Mjg4MDAwXSx7ImtleSI6ImRhaWx5L3NlcnZpY2UvMjEvMTYzNDExOTkwOTIxMF9hbHBoYV83MTAxXzAucG5nIn1dfQ==</Policy>\\n        <Signature>https://dha-regen-prod.oss-cn-shanghai.aliyuncs.com/daily/service/21/1634119909210_alpha_7101_0.png?Expires=1634119969&amp;OSSAccessKeyId=LTAI5tEQPn4obqpuvGEg****&amp;Signature=aglOPPZihml%2Fhe3GAMkS9zqovog%3D</Signature>\\n        <ObjectKey>daily/service/21/1634119909210_alpha_7101_0.png</ObjectKey>\\n        <FileName>1634119909210_alpha_7101_0.png</FileName>\\n        <BucketName>dha-regen-prod</BucketName>\\n        <Endpoint>https://dha-regen-prod.oss-cn-shanghai.aliyuncs.com</Endpoint>\\n        <OriginalFilename>1634119909210_alpha_7101_0.png</OriginalFilename>\\n        <SignedHttpUrl>https://dha-regen-prod.oss-cn-shanghai.aliyuncs.com/daily/service/21/1634119909210_alpha_7101_0.png?Expires=1634119969&amp;OSSAccessKeyId=LTAI5tEQPn4obqpuvGEg****&amp;Signature=aglOPPZihml%2Fhe3GAMkS9zqovog%3D</SignedHttpUrl>\\n    </Data>\\n</GetUploadPolicyResponse>","errorExample":""}]',
            'title' => '获得上传凭证',
            'summary' => '获得上传凭证GetUploadPolicy的语法及示例。',
            'description' => '## 功能描述'."\n"
                .'获取OSS上传凭证。'."\n"
                ."\n"
                .'> - 您可以进入[在线咨询](https://www.aliyun.com/core/online-consult?from=aZgW6LJHr2)获取在线人工帮助。'."\n"
                .'- 阿里云视觉智能开放平台视觉AI能力API接入、接口使用或问题咨询等，请通过钉钉群（23109592）加入阿里云视觉智能开放平台咨询群联系我们。'."\n"
                ."\n"
                .'## 接入指引'."\n"
                .'1. 注册阿里云账号：打开[阿里云官网](https://www.aliyun.com)，在阿里云官网右上角，单击**立即注册**，按照操作提示完成账号注册。'."\n"
                .'2. 开通能力：请确保您已开通自学习服务，若未开通服务请[立即开通](https://common-buy.aliyun.com/?commodityCode=viapi_selflearning_public_cn)。'."\n"
                .'3. 创建AccessKey：请确保您已[创建AccessKey](~~175144~~)，如果您使用的是子账号AccessKey，您需要给子账号赋予AliyunVIAPIFullAccess权限，具体操作，请参见[RAM授权](~~145025~~)。'."\n"
                .'4. 在线调试（可选）：您可以通过[OpenAPI Explorer](https://next.api.aliyun.com/api/viapi-regen/2021-11-19/GetUploadPolicy?lang=JAVA&sdkStyle=old)在线调试能力，查看完整的调用示例代码及SDK依赖信息，也可以下载完整的工程。'."\n"
                .'5. 开发接入步骤：'."\n"
                .'- 在[SDK总览](~~145033~~)中选择您要接入使用的SDK语言。'."\n"
                .'- 在对应语言的SDK文档中找到AI类目为自学习（viapi-regen）的SDK包进行安装。'."\n"
                .'- 参考文档中提供的示例代码进行适当修改后调用。'."\n"
                ."\n"
                .'6. 客户端直接调用：该能力常用的客户端调用方式包括以下几种。'."\n"
                .'- [Web前端直接调用](~~467779~~)'."\n"
                .'- [小程序场景下直接调用](~~467780~~)'."\n"
                .'- [Android端直接调用](~~467781~~)'."\n"
                .'- [iOS端直接调用](~~467782~~)'."\n",
            'responseParamsDescription' => '## SDK参考'."\n"
                .'阿里云视觉AI能力推荐使用SDK调用，支持多种编程语言，文件参数通过SDK调用可支持本地文件及任意URL，具体可参见[SDK总览](~~145033~~)。',
            'extraInfo' => '## 错误码'."\n"
                .'关于获得上传凭证的错误码，详情请参见[常见错误码](~~441239~~)。'."\n"
                ."\n"
                .'## 安全声明'."\n"
                .'- 请确保上传的图片或文件来源符合相应的法律法规。'."\n"
                .'- 通过体验调试上传的临时文件有效期为1小时，在24小时后会被系统自动清理删除。',
        ],
        'GetWorkspace' => [
            'methods' => [
                'post',
                'get',
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
                    'name' => 'Id',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '生产空间ID。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '70',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '每个请求分配唯一的服务器请求ID。',
                                'type' => 'string',
                                'example' => '96AE7FBF-3E7D-0595-B999-78B31B8C2619',
                            ],
                            'Data' => [
                                'description' => '出参数据实体。',
                                'type' => 'object',
                                'properties' => [
                                    'Id' => [
                                        'description' => '生产空间ID。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '70',
                                    ],
                                    'GmtCreate' => [
                                        'description' => '创建时间。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '1631762186000',
                                    ],
                                    'Name' => [
                                        'description' => '生产空间名称。',
                                        'type' => 'string',
                                        'example' => 'test1',
                                    ],
                                    'Description' => [
                                        'description' => '生产空间描述。',
                                        'type' => 'string',
                                        'example' => 'test1',
                                    ],
                                    'Type' => [
                                        'description' => '生产空间类型。取值如下：'."\n"
                                            ."\n"
                                            .'- COMMON_CLASSIFY：通用分类'."\n"
                                            .'- COMMON_DETECT：通用检测'."\n"
                                            .'- COMMON_INSTANCE_SEGMENT：通用实例分割',
                                        'type' => 'string',
                                        'example' => 'COMMON_CLASSIFY',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"96AE7FBF-3E7D-0595-B999-78B31B8C2619\\",\\n  \\"Data\\": {\\n    \\"Id\\": 70,\\n    \\"GmtCreate\\": 1631762186000,\\n    \\"Name\\": \\"test1\\",\\n    \\"Description\\": \\"test1\\",\\n    \\"Type\\": \\"COMMON_CLASSIFY\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<GetWorkspaceResponse>\\n    <RequestId>96AE7FBF-3E7D-0595-B999-78B31B8C2619</RequestId>\\n    <Data>\\n        <Id>70</Id>\\n        <GmtCreate>1631762186000</GmtCreate>\\n        <Name>test1</Name>\\n        <Description>test1</Description>\\n        <Type>COMMON_CLASSIFY</Type>\\n    </Data>\\n</GetWorkspaceResponse>","errorExample":""}]',
            'title' => '获得工作空间',
            'summary' => '获得工作空间GetWorkspace的语法及示例。',
            'description' => '## 功能描述'."\n"
                .'根据工作空间ID查看工作空间的详细情况。'."\n"
                ."\n"
                .'> - 您可以进入[在线咨询](https://www.aliyun.com/core/online-consult?from=aZgW6LJHr2)获取在线人工帮助。'."\n"
                .'- 阿里云视觉智能开放平台视觉AI能力API接入、接口使用或问题咨询等，请通过钉钉群（23109592）加入阿里云视觉智能开放平台咨询群联系我们。'."\n"
                ."\n"
                .'## 接入指引'."\n"
                .'1. 注册阿里云账号：打开[阿里云官网](https://www.aliyun.com)，在阿里云官网右上角，单击**立即注册**，按照操作提示完成账号注册。'."\n"
                .'2. 开通能力：请确保您已开通自学习服务，若未开通服务请[立即开通](https://common-buy.aliyun.com/?commodityCode=viapi_selflearning_public_cn)。'."\n"
                .'3. 创建AccessKey：请确保您已[创建AccessKey](~~175144~~)，如果您使用的是子账号AccessKey，您需要给子账号赋予AliyunVIAPIFullAccess权限，具体操作，请参见[RAM授权](~~145025~~)。'."\n"
                .'4. 在线调试（可选）：您可以通过[OpenAPI Explorer](https://next.api.aliyun.com/api/viapi-regen/2021-11-19/GetWorkspace?lang=JAVA&sdkStyle=old)在线调试能力，查看完整的调用示例代码及SDK依赖信息，也可以下载完整的工程。'."\n"
                .'5. 开发接入步骤：    '."\n"
                .'- 在[SDK总览](~~145033~~)中选择您要接入使用的SDK语言。'."\n"
                .'- 在对应语言的SDK文档中找到AI类目为自学习（viapi-regen）类目的SDK包进行安装。'."\n"
                .'- 参考文档中提供的示例代码进行适当修改后调用。'."\n"
                ."\n"
                .'6. 客户端直接调用：该能力常用的客户端调用方式包括以下几种。'."\n"
                .'- [Web前端直接调用](~~467779~~)'."\n"
                .'- [小程序场景下直接调用](~~467780~~)'."\n"
                .'- [Android端直接调用](~~467781~~)'."\n"
                .'- [iOS端直接调用](~~467782~~)',
            'responseParamsDescription' => '## SDK参考'."\n"
                .'阿里云视觉AI自学习类目下的获得工作空间能力推荐使用SDK调用，支持多种编程语言，调用时请选择AI类目为自学习（viapi-regen）的SDK包，文件参数通过SDK调用可支持本地文件及任意URL，具体可参见[SDK总览](~~145033~~)。',
            'extraInfo' => '## 错误码'."\n"
                .'关于获得工作空间的错误码，详情请参见[常见错误码](~~441239~~)。'."\n"
                .'## 安全声明'."\n"
                .'- 请确保上传的图片或文件来源符合相应的法律法规。'."\n"
                .'- 通过体验调试上传的临时文件有效期为1小时，在24小时后会被系统自动清理删除。',
        ],
        'ListDatasetDatas' => [
            'methods' => [
                'post',
                'get',
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
                    'name' => 'CurrentPage',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '当前页数。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '每页总共多少数据。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '10',
                    ],
                ],
                [
                    'name' => 'DatasetId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '数据集ID。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '120',
                    ],
                ],
                [
                    'name' => 'Identity',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '文件标识（支持模糊搜索）。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '猫',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '每个请求分配唯一的服务器请求ID。',
                                'type' => 'string',
                                'example' => 'EF6CCDDD-D5AA-09AD-B596-4413F2E4B162',
                            ],
                            'Data' => [
                                'description' => '出参数据实体。',
                                'type' => 'object',
                                'properties' => [
                                    'CurrentPage' => [
                                        'description' => '当前页数。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '1',
                                    ],
                                    'PageSize' => [
                                        'description' => '每页数据显示条数。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '10',
                                    ],
                                    'TotalPage' => [
                                        'description' => '总页数。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '20',
                                    ],
                                    'TotalCount' => [
                                        'description' => '总数据量。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '200',
                                    ],
                                    'Elements' => [
                                        'description' => '数据集列表中数据集合。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '标注中的数据值。',
                                            'type' => 'object',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"EF6CCDDD-D5AA-09AD-B596-4413F2E4B162\\",\\n  \\"Data\\": {\\n    \\"CurrentPage\\": 1,\\n    \\"PageSize\\": 10,\\n    \\"TotalPage\\": 20,\\n    \\"TotalCount\\": 200,\\n    \\"Elements\\": [\\n      {\\n        \\"test\\": \\"test\\",\\n        \\"test2\\": 1\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<ListDatasetDatasResponse>\\n    <RequestId>EF6CCDDD-D5AA-09AD-B596-4413F2E4B162</RequestId>\\n    <Data>\\n        <CurrentPage>1</CurrentPage>\\n        <PageSize>10</PageSize>\\n        <TotalPage>20</TotalPage>\\n        <TotalCount>200</TotalCount>\\n        <Elements>\\n            <identity>dataset_small/alpha_7101_0.png</identity>\\n            <thumbPath>https://dha-regen-prod.oss-cn-shanghai.aliyuncs.com/daily/data/120/dataset_small/alpha_7101_0.png?Expires=1634204118&amp;OSSAccessKeyId=LTAI5tEQPn4obqpuvGEg****&amp;Signature=TaA%2FU2VvDbFW55rcKZmyBtDY4A8%3D&amp;x-oss-process=image%2Fresize%2Cm_lfit%2Cw_200%2Ch_200%2Climit_1%2Fauto-orient%2C1%2Fquality%2Cq_90</thumbPath>\\n            <ossPath>https://dha-regen-prod.oss-cn-shanghai.aliyuncs.com/daily/data/120/dataset_small/alpha_7101_0.png?Expires=1634204118&amp;OSSAccessKeyId=LTAI5tEQPn4obqpuvGEg****&amp;Signature=mZ58gWrC6nbRsak%2B2O1bwPWAZr4%3D</ossPath>\\n        </Elements>\\n        <Elements>\\n            <identity>dataset_small/alpha_15926_1.png</identity>\\n            <thumbPath>https://dha-regen-prod.oss-cn-shanghai.aliyuncs.com/daily/data/120/dataset_small/alpha_15926_1.png?Expires=1634204118&amp;OSSAccessKeyId=LTAI5tEQPn4obqpuvGEg****Signature=hvsN0QB5SSunKw458mmU%2BPrbodQ%3D&amp;x-oss-process=image%2Fresize%2Cm_lfit%2Cw_200%2Ch_200%2Climit_1%2Fauto-orient%2C1%2Fquality%2Cq_90</thumbPath>\\n            <ossPath>https://dha-regen-prod.oss-cn-shanghai.aliyuncs.com/daily/data/120/dataset_small/alpha_15926_1.png?Expires=1634204118&amp;OSSAccessKeyId=LTAI5tEQPn4obqpuvGEg****&amp;Signature=%2FE6AeDAEFwg1iLzUjl5ITWA6YUc%3D</ossPath>\\n        </Elements>\\n        <Elements>\\n            <identity>dataset_small/alpha_5152_1.png</identity>\\n            <thumbPath>https://dha-regen-prod.oss-cn-shanghai.aliyuncs.com/daily/data/120/dataset_small/alpha_5152_1.png?Expires=1634204118&amp;OSSAccessKeyId=LTAI5tEQPn4obqpuvGEg****&amp;Signature=kxi5fzDX9M%2FEj4dydPQSjUV%2B2XA%3D&amp;x-oss-process=image%2Fresize%2Cm_lfit%2Cw_200%2Ch_200%2Climit_1%2Fauto-orient%2C1%2Fquality%2Cq_90</thumbPath>\\n            <ossPath>https://dha-regen-prod.oss-cn-shanghai.aliyuncs.com/daily/data/120/dataset_small/alpha_5152_1.png?Expires=1634204118&amp;OSSAccessKeyId=LTAI5tEQPn4obqpuvGEg****&amp;Signature=YJeGou7%2FWKU7zcMuCLykrv%2FUHMA%3D</ossPath>\\n        </Elements>\\n        <Elements>\\n            <identity>dataset_small/alpha_5954_1.png</identity>\\n            <thumbPath>https://dha-regen-prod.oss-cn-shanghai.aliyuncs.com/daily/data/120/dataset_small/alpha_5954_1.png?Expires=1634204118&amp;OSSAccessKeyId=LTAI5tEQPn4obqpuvGEg****&amp;Signature=nNWV70qWsxWzPI5wstCFDlrHPoc%3D&amp;x-oss-process=image%2Fresize%2Cm_lfit%2Cw_200%2Ch_200%2Climit_1%2Fauto-orient%2C1%2Fquality%2Cq_90</thumbPath>\\n            <ossPath>https://dha-regen-prod.oss-cn-shanghai.aliyuncs.com/daily/data/120/dataset_small/alpha_5954_1.png?Expires=1634204118&amp;OSSAccessKeyId=LTAI5tEQPn4obqpuvGEg****&amp;Signature=QerQed0R5dubNtyNd85NDQbDLYc%3D</ossPath>\\n        </Elements>\\n        <Elements>\\n            <identity>dataset_small/alpha_19306_1.png</identity>\\n            <thumbPath>https://dha-regen-prod.oss-cn-shanghai.aliyuncs.com/daily/data/120/dataset_small/alpha_19306_1.png?Expires=1634204118&amp;OSSAccessKeyId=LTAI5tEQPn4obqpuvGEg****&amp;Signature=Qu6xvU4eisGjXzVffiERLRo5eCc%3D&amp;x-oss-process=image%2Fresize%2Cm_lfit%2Cw_200%2Ch_200%2Climit_1%2Fauto-orient%2C1%2Fquality%2Cq_90</thumbPath>\\n            <ossPath>https://dha-regen-prod.oss-cn-shanghai.aliyuncs.com/daily/data/120/dataset_small/alpha_19306_1.png?Expires=1634204118&amp;OSSAccessKeyId=LTAI5tEQPn4obqpuvGEg****&amp;Signature=R%2FQzx8OqpFYNUyyRGzp2coY2MtU%3D</ossPath>\\n        </Elements>\\n        <Elements>\\n            <identity>dataset_small/alpha_2988_1.png</identity>\\n            <thumbPath>https://dha-regen-prod.oss-cn-shanghai.aliyuncs.com/daily/data/120/dataset_small/alpha_2988_1.png?Expires=1634204118&amp;OSSAccessKeyId=LTAI5tEQPn4obqpuvGEg****&amp;Signature=6NE%2BN8ixZlv8vQrvdRsMOynyPfM%3D&amp;x-oss-process=image%2Fresize%2Cm_lfit%2Cw_200%2Ch_200%2Climit_1%2Fauto-orient%2C1%2Fquality%2Cq_90</thumbPath>\\n            <ossPath>https://dha-regen-prod.oss-cn-shanghai.aliyuncs.com/daily/data/120/dataset_small/alpha_2988_1.png?Expires=1634204118&amp;OSSAccessKeyId=LTAI5tEQPn4obqpuvGEg****&amp;Signature=fSSrNM7Prmeplx7vJ7rp5GT2ODs%3D</ossPath>\\n        </Elements>\\n        <Elements>\\n            <identity>dataset_small/alpha_13694_1.png</identity>\\n            <thumbPath>https://dha-regen-prod.oss-cn-shanghai.aliyuncs.com/daily/data/120/dataset_small/alpha_13694_1.png?Expires=1634204118&amp;OSSAccessKeyId=LTAI5tEQPn4obqpuvGEg****&amp;Signature=7eGRk0HrqdT5z7IlAAk2RSCs4CY%3D&amp;x-oss-process=image%2Fresize%2Cm_lfit%2Cw_200%2Ch_200%2Climit_1%2Fauto-orient%2C1%2Fquality%2Cq_90</thumbPath>\\n            <ossPath>https://dha-regen-prod.oss-cn-shanghai.aliyuncs.com/daily/data/120/dataset_small/alpha_13694_1.png?Expires=1634204118&amp;OSSAccessKeyId=LTAI5tEQPn4obqpuvGEg****Signature=kKA69vNssLSQIvwFO7UoabwE8uI%3D</ossPath>\\n        </Elements>\\n        <Elements>\\n            <identity>dataset_small/alpha_1902_1.png</identity>\\n            <thumbPath>https://dha-regen-prod.oss-cn-shanghai.aliyuncs.com/daily/data/120/dataset_small/alpha_1902_1.png?Expires=1634204118&amp;OSSAccessKeyId=LTAI5tEQPn4obqpuvGEg****&amp;Signature=VYmbFzTRHLSnMfh8sCdOTaxgG8o%3D&amp;x-oss-process=image%2Fresize%2Cm_lfit%2Cw_200%2Ch_200%2Climit_1%2Fauto-orient%2C1%2Fquality%2Cq_90</thumbPath>\\n            <ossPath>https://dha-regen-prod.oss-cn-shanghai.aliyuncs.com/daily/data/120/dataset_small/alpha_1902_1.png?Expires=1634204118&amp;OSSAccessKeyId=LTAI5tEQPn4obqpuvGEg****&amp;Signature=XYagnxfXf3dKKiaYJ2fDSgv%2BqzA%3D</ossPath>\\n        </Elements>\\n        <Elements>\\n            <identity>dataset_small/alpha_9088_1.png</identity>\\n            <thumbPath>https://dha-regen-prod.oss-cn-shanghai.aliyuncs.com/daily/data/120/dataset_small/alpha_9088_1.png?Expires=1634204118&amp;OSSAccessKeyId=LTAI5tEQPn4obqpuvGEg****&amp;Signature=g1h72fNL716Cd4WsrKs9sYGDilg%3D&amp;x-oss-process=image%2Fresize%2Cm_lfit%2Cw_200%2Ch_200%2Climit_1%2Fauto-orient%2C1%2Fquality%2Cq_90</thumbPath>\\n            <ossPath>https://dha-regen-prod.oss-cn-shanghai.aliyuncs.com/daily/data/120/dataset_small/alpha_9088_1.png?Expires=1634204118&amp;OSSAccessKeyId=LTAI5tEQPn4obqpuvGEg****&amp;Signature=Fqp9R%2BgRtQsLgOqFac9q5wAbhPc%3D</ossPath>\\n        </Elements>\\n        <Elements>\\n            <identity>dataset_small/alpha_8088_1.png</identity>\\n            <thumbPath>https://dha-regen-prod.oss-cn-shanghai.aliyuncs.com/daily/data/120/dataset_small/alpha_8088_1.png?Expires=1634204118&amp;OSSAccessKeyId=LTAI5tEQPn4obqpuvGEg****&amp;Signature=4E5HtozWJ0YvR0toyNRQDsTyPq0%3D&amp;x-oss-process=image%2Fresize%2Cm_lfit%2Cw_200%2Ch_200%2Climit_1%2Fauto-orient%2C1%2Fquality%2Cq_90</thumbPath>\\n            <ossPath>https://dha-regen-prod.oss-cn-shanghai.aliyuncs.com/daily/data/120/dataset_small/alpha_8088_1.png?Expires=1634204118&amp;OSSAccessKeyId=LTAI5tEQPn4obqpuvGEg****&amp;Signature=3q2%2BEU1%2FgqVrKsKC9DN1rORrwWo%3D</ossPath>\\n        </Elements>\\n    </Data>\\n</ListDatasetDatasResponse>","errorExample":""}]',
            'title' => '查看数据集数据',
            'summary' => '查看数据集数据。',
            'description' => '## 功能描述'."\n"
                .'通过数据ID查看数据集详细数据。'."\n"
                ."\n"
                .'> - 您可以进入[在线咨询](https://www.aliyun.com/core/online-consult?from=aZgW6LJHr2)获取在线人工帮助。'."\n"
                .'- 阿里云视觉智能开放平台视觉AI能力API接入、接口使用或问题咨询等，请通过钉钉群（23109592）加入阿里云视觉智能开放平台咨询群联系我们。'."\n"
                ."\n"
                .'## 接入指引'."\n"
                .'1. 注册阿里云账号：打开[阿里云官网](https://www.aliyun.com)，在阿里云官网右上角，单击**立即注册**，按照操作提示完成账号注册。'."\n"
                .'2. 开通能力：请确保您已开通自学习服务，若未开通服务请[立即开通](https://common-buy.aliyun.com/?commodityCode=viapi_selflearning_public_cn)。'."\n"
                .'3. 创建AccessKey：请确保您已[创建AccessKey](~~175144~~)，如果您使用的是子账号AccessKey，您需要给子账号赋予AliyunVIAPIFullAccess权限，具体操作，请参见[RAM授权](~~145025~~)。'."\n"
                .'4. 在线调试（可选）：您可以通过[OpenAPI Explorer](https://next.api.aliyun.com/api/viapi-regen/2021-11-19/ListDatasetDatas?lang=JAVA&sdkStyle=old)在线调试能力，查看完整的调用示例代码及SDK依赖信息，也可以下载完整的工程。'."\n"
                .'5. 开发接入步骤：    '."\n"
                .'- 在[SDK总览](~~145033~~)中选择您要接入使用的SDK语言。'."\n"
                .'- 在对应语言的SDK文档中找到AI类目为自学习（viapi-regen）类目的SDK包进行安装。'."\n"
                .'- 参考文档中提供的示例代码进行适当修改后调用。'."\n"
                ."\n"
                .'6. 客户端直接调用：该能力常用的客户端调用方式包括以下几种。'."\n"
                .'- [Web前端直接调用](~~467779~~)'."\n"
                .'- [小程序场景下直接调用](~~467780~~)'."\n"
                .'- [Android端直接调用](~~467781~~)'."\n"
                .'- [iOS端直接调用](~~467782~~)',
            'responseParamsDescription' => '## Elements字段参数说明'."\n"
                .'| 字段    | 类型   | 是否必须   | 示例值|    描述                                      |'."\n"
                .'| ------------------------ | -------- | ------------- | --------------------- | ---------------------------------------- |'."\n"
                .'|identity   | String |       否       |  dataset_small/alpha_7101_0.png           | 文件标识。                              |'."\n"
                .'| thumbPath                           |  String  |      否         |            https://dha-regen-prod.oss-cn-shanghai.aliyuncs.com/daily/data/120/dataset_small/alpha_7101_0.png?Expires=1634204118&OSSAccessKeyId=LTAI5tEQPn4obqpuvGEg****&Signature=TaA%2FU2VvDbFW55rcKZmyBtDY4A8%3D&x-oss-process=image%2Fresize%2Cm_lfit%2Cw_200%2Ch_200%2Climit_1%2Fauto-orient%2C1%2Fquality%2Cq_90            | oss存储图片缩略图地址。                                  |'."\n"
                .'| ossPath        |  String  |      否         | https://dha-regen-prod.oss-cn-shanghai.aliyuncs.com/daily/data/120/dataset_small/alpha_7101_0.png?Expires=1634204118&OSSAccessKeyId=LTAI5tEQPn4obqpuvGEg****&Signature=mZ58gWrC6nbRsak%2B2O1bwPWAZr4%3D | oss存储地址。                              |'."\n"
                ."\n"
                .'## SDK参考'."\n"
                .'阿里云视觉AI自学习类目下的数据集数据列表能力推荐使用SDK调用，支持多种编程语言，调用时请选择AI类目为自学习（viapi-regen）的SDK包，文件参数通过SDK调用可支持本地文件及任意URL，具体可参见[SDK总览](~~145033~~)。'."\n",
            'extraInfo' => '## 错误码'."\n"
                .'关于数据集数据列表的错误码，详情请参见[常见错误码](~~441239~~)。'."\n"
                ."\n"
                .'## 安全声明'."\n"
                .'- 请确保上传的图片或文件来源符合相应的法律法规。'."\n"
                .'- 通过体验调试上传的临时文件有效期为1小时，在24小时后会被系统自动清理删除。',
        ],
        'ListDatasets' => [
            'methods' => [
                'post',
                'get',
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
                    'name' => 'CurrentPage',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '当前页数。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '每页数据显示条数。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '10',
                    ],
                ],
                [
                    'name' => 'WorkspaceId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '生产空间ID。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '63',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '每个请求分配唯一的服务器请求ID。',
                                'type' => 'string',
                                'example' => 'F32D7E93-9C55-151E-9C60-B746A4A5B7FE',
                            ],
                            'Data' => [
                                'description' => '出参数据实体。',
                                'type' => 'object',
                                'properties' => [
                                    'CurrentPage' => [
                                        'description' => '当前页数。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '1',
                                    ],
                                    'PageSize' => [
                                        'description' => '每页数据显示条数。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '10',
                                    ],
                                    'TotalPage' => [
                                        'description' => '总页数。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '1',
                                    ],
                                    'TotalCount' => [
                                        'description' => '总数据量。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '1',
                                    ],
                                    'Elements' => [
                                        'description' => '数据集列表中数据集合。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '标注中的数据值。',
                                            'type' => 'object',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"F32D7E93-9C55-151E-9C60-B746A4A5B7FE\\",\\n  \\"Data\\": {\\n    \\"CurrentPage\\": 1,\\n    \\"PageSize\\": 10,\\n    \\"TotalPage\\": 1,\\n    \\"TotalCount\\": 1,\\n    \\"Elements\\": [\\n      {\\n        \\"test\\": \\"test\\",\\n        \\"test2\\": 1\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<ListDatasetsResponse>\\n    <RequestId>F32D7E93-9C55-151E-9C60-B746A4A5B7FE</RequestId>\\n    <Data>\\n        <CurrentPage>1</CurrentPage>\\n        <PageSize>10</PageSize>\\n        <TotalPage>1</TotalPage>\\n        <TotalCount>1</TotalCount>\\n        <Elements>\\n            <ownerType>ALIYUN</ownerType>\\n            <total>2000</total>\\n            <ossUrl>oss://dha-regen-hangzhou-prod/prod/data/374/</ossUrl>\\n            <name>标注测试2</name>\\n            <description>描述21</description>\\n            <id>374</id>\\n            <gmtCreate>1638860548000</gmtCreate>\\n        </Elements>\\n    </Data>\\n</ListDatasetsResponse>","errorExample":""}]',
            'title' => '数据集列表',
            'summary' => '数据集列表ListDatasets的语法及示例。',
            'description' => '## 功能描述'."\n"
                .'根据生产空间ID查看空间下数据集列表信息，分页展示。'."\n"
                ."\n"
                .'> - 您可以进入[在线咨询](https://www.aliyun.com/core/online-consult?from=aZgW6LJHr2)获取在线人工帮助。'."\n"
                .'- 阿里云视觉智能开放平台视觉AI能力API接入、接口使用或问题咨询等，请通过钉钉群（23109592）加入阿里云视觉智能开放平台咨询群联系我们。'."\n"
                ."\n"
                .'## 接入指引'."\n"
                .'1. 注册阿里云账号：打开[阿里云官网](https://www.aliyun.com)，在阿里云官网右上角，单击**立即注册**，按照操作提示完成账号注册。'."\n"
                .'2. 开通能力：请确保您已开通自学习服务，若未开通服务请[立即开通](https://common-buy.aliyun.com/?commodityCode=viapi_selflearning_public_cn)。'."\n"
                .'3. 创建AccessKey：请确保您已[创建AccessKey](~~175144~~)，如果您使用的是子账号AccessKey，您需要给子账号赋予AliyunVIAPIFullAccess权限，具体操作，请参见[RAM授权](~~145025~~)。'."\n"
                .'4. 在线调试（可选）：您可以通过[OpenAPI Explorer](https://next.api.aliyun.com/api/viapi-regen/2021-11-19/ListDatasets?lang=JAVA&sdkStyle=old)在线调试能力，查看完整的调用示例代码及SDK依赖信息，也可以下载完整的工程。'."\n"
                .'5. 开发接入步骤：    '."\n"
                .'- 在[SDK总览](~~145033~~)中选择您要接入使用的SDK语言。'."\n"
                .'- 在对应语言的SDK文档中找到AI类目为自学习（viapi-regen）类目的SDK包进行安装。'."\n"
                .'- 参考文档中提供的示例代码进行适当修改后调用。'."\n"
                ."\n"
                .'6. 客户端直接调用：该能力常用的客户端调用方式包括以下几种。'."\n"
                .'- [Web前端直接调用](~~467779~~)'."\n"
                .'- [小程序场景下直接调用](~~467780~~)'."\n"
                .'- [Android端直接调用](~~467781~~)'."\n"
                .'- [iOS端直接调用](~~467782~~)',
            'responseParamsDescription' => '## Elements字段参数说明'."\n"
                .'| 字段 	| 类型 	| 是否必须 | 示例值 	| 描述 |'."\n"
                .'| ---------- | -------- | ------------- | ---------- |------------ |'."\n"
                .'| name 	| String | 否 |  test1 |	数据集名称。 |'."\n"
                .'| description | String 	| 否  |   test1 	| 数据集描述。 |'."\n"
                .'| id |	 Long 	| 否 |   120 |	 数据集ID。 |'."\n"
                .'| gmtCreate 	| Long 	| 否 |   1631762186000 	  | 创建时间。 |'."\n"
                .'|total 	| Long 	| 否 |   2000  | 数据集中数据总数。 |'."\n"
                .'|ownerType 	| String 	| 否 |  ALIYUN   | 数据集归属。ALIYUN（用户选择自己本地的文件上传），USER（用户选择自己OSS的数据上传）。 |'."\n"
                .'|ossUrl 	| String 	| 否 |  oss://dha-regen-hangzhou-prod/prod/data/374/   |  OSS URL根目录。 |'."\n"
                ."\n"
                .'## SDK参考'."\n"
                .'阿里云视觉AI自学习类目下的数据集列表能力推荐使用SDK调用，支持多种编程语言，调用时请选择AI类目为自学习（viapi-regen）的SDK包，文件参数通过SDK调用可支持本地文件及任意URL，具体可参见[SDK总览](~~145033~~)。'."\n",
            'extraInfo' => '## 错误码'."\n"
                .'关于数据集列表的错误码，详情请参见[常见错误码](~~441239~~)。'."\n"
                ."\n"
                .'## 安全声明'."\n"
                .'- 请确保上传的图片或文件来源符合相应的法律法规。'."\n"
                .'- 通过体验调试上传的临时文件有效期为1小时，在24小时后会被系统自动清理删除。',
        ],
        'ListLabelsetDatas' => [
            'methods' => [
                'post',
                'get',
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
                    'name' => 'CurrentPage',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '当前页数。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '每页显示数据条数。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '10',
                    ],
                ],
                [
                    'name' => 'LabelId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '标注ID，用来标识标注的唯一性，通过标注ID查询对应数据。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '219',
                    ],
                ],
                [
                    'name' => 'Name',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '标注数据筛选的字段。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'image',
                    ],
                ],
                [
                    'name' => 'Operation',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '标注数据筛选的条件。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'LIKE',
                    ],
                ],
                [
                    'name' => 'Value',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '标注数据筛选的值。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'IsAbandon',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '是否查看废弃的标注数据。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '06281237-1FA1-09E3-95AC-FE4C95300508',
                            ],
                            'Data' => [
                                'description' => '返回的结果数据内容。',
                                'type' => 'object',
                                'properties' => [
                                    'CurrentPage' => [
                                        'description' => '当前页数。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '1',
                                    ],
                                    'PageSize' => [
                                        'description' => '每页显示数据条数。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '10',
                                    ],
                                    'TotalPage' => [
                                        'description' => '总页数。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '20',
                                    ],
                                    'TotalCount' => [
                                        'description' => '总数据量。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '200',
                                    ],
                                    'Elements' => [
                                        'description' => '返回的标注集中的数据结果。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '标注中的数据值。',
                                            'type' => 'object',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"06281237-1FA1-09E3-95AC-FE4C95300508\\",\\n  \\"Data\\": {\\n    \\"CurrentPage\\": 1,\\n    \\"PageSize\\": 10,\\n    \\"TotalPage\\": 20,\\n    \\"TotalCount\\": 200,\\n    \\"Elements\\": [\\n      {\\n        \\"test\\": \\"test\\",\\n        \\"test2\\": 1\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<ListLabelsetDatasResponse>\\n    <RequestId>ADA2A7FD-6A97-4D5F-8781-FEC2DEF28418</RequestId>\\n    <Data>\\n        <TotalCount>200</TotalCount>\\n        <PageSize>10</PageSize>\\n        <TotalPage>20</TotalPage>\\n        <CurrentPage>1</CurrentPage>\\n        <Elements>\\n            <showColumns>\\n                <dataSetName>鸟100_19.jpg</dataSetName>\\n                <name>image</name>\\n                <thumbPath>https://viapi-regen-hangzhou-prod.oss-cn-hangzhou.aliyuncs.com/daily/data/296/%E9%B8%9F100_19.jpg?Expires=1651211694&amp;OSSAccessKeyId=LTAI5tMANw98BWLM7sTN****&amp;Signature=QlELJ%2Fl2wRoR4ay%2BKOMrH9evwIA%3D&amp;x-oss-process=image%2Fresize%2Cm_lfit%2Cw_150%2Ch_84%2Climit_1%2Fauto-orient%2C1%2Fquality%2Cq_90</thumbPath>\\n                <type>IMAGE</type>\\n                <value>https://viapi-regen-hangzhou-prod.oss-cn-hangzhou.aliyuncs.com/daily/data/296/%E9%B8%9F100_19.jpg?Expires=1651211694&amp;OSSAccessKeyId=LTAI5tMANw98BWLM7sTN****&amp;Signature=m8ZyAwJGiB5q0%2F0u88QaAPLGzHw%3D</value>\\n            </showColumns>\\n            <showColumns>\\n                <name>label</name>\\n                <type>TEXT</type>\\n                <value>鸟</value>\\n            </showColumns>\\n        </Elements>\\n    </Data>\\n</ListLabelsetDatasResponse>","errorExample":""}]',
            'title' => '标注集数据列表',
            'summary' => '标注集数据列表ListLabelsetDatas的语法及示例。',
            'description' => '## 功能描述'."\n"
                .'通过标注ID查看标注集详细数据。'."\n"
                ."\n"
                .'> - 您可以进入[在线咨询](https://www.aliyun.com/core/online-consult?from=aZgW6LJHr2)获取在线人工帮助。'."\n"
                .'- 阿里云视觉智能开放平台视觉AI能力API接入、接口使用或问题咨询等，请通过钉钉群（23109592）加入阿里云视觉智能开放平台咨询群联系我们。'."\n"
                ."\n"
                .'## 接入指引'."\n"
                .'1. 注册阿里云账号：打开[阿里云官网](https://www.aliyun.com)，在阿里云官网右上角，单击**立即注册**，按照操作提示完成账号注册。'."\n"
                .'2. 开通能力：请确保您已开通自学习服务，若未开通服务请[立即开通](https://common-buy.aliyun.com/?commodityCode=viapi_selflearning_public_cn)。'."\n"
                .'3. 创建AccessKey：请确保您已[创建AccessKey](~~175144~~)，如果您使用的是子账号AccessKey，您需要给子账号赋予AliyunVIAPIFullAccess权限，具体操作，请参见[RAM授权](~~145025~~)。'."\n"
                .'4. 在线调试（可选）：您可以通过[OpenAPI Explorer](https://next.api.aliyun.com/api/viapi-regen/2021-11-19/ListLabelsetDatas?lang=JAVA&sdkStyle=old)在线调试能力，查看完整的调用示例代码及SDK依赖信息，也可以下载完整的工程。'."\n"
                .'5. 开发接入步骤：    '."\n"
                .'- 在[SDK总览](~~145033~~)中选择您要接入使用的SDK语言。'."\n"
                .'- 在对应语言的SDK文档中找到AI类目为自学习（viapi-regen）类目的SDK包进行安装。'."\n"
                .'- 参考文档中提供的示例代码进行适当修改后调用。'."\n"
                ."\n"
                .'6. 客户端直接调用：该能力常用的客户端调用方式包括以下几种。'."\n"
                .'- [Web前端直接调用](~~467779~~)'."\n"
                .'- [小程序场景下直接调用](~~467780~~)'."\n"
                .'- [Android端直接调用](~~467781~~)'."\n"
                .'- [iOS端直接调用](~~467782~~)',
            'responseParamsDescription' => '## Elements字段参数说明'."\n"
                ."\n"
                .'| 字段                 | 类型   | 是否必须   | 示例值                      | 描述                                                         |'."\n"
                .'| -------------------- | ------ | -------- | --------------------------- | ------------------------------------------------------------ |'."\n"
                .'| name      | string | 是       | image                      |标注名称。 |'."\n"
                .'| thumbPath | string | 否       |https://viapi-regen-hangzhou-prod.oss-cn-hangzhou.aliyuncs.com/daily/data/296/%E9%B8%9F100_19.jpg?Expires=1651211694&OSSAccessKeyId=LTAI5tMANw98BWLM7sTN****&Signature=QlELJ%2Fl2wRoR4ay%2BKOMrH9evwIA%3D&x-oss-process=image%2Fresize%2Cm_lfit%2Cw_150%2Ch_84%2Climit_1%2Fauto-orient%2C1%2Fquality%2Cq_90                         |图片缩略图地址。 |'."\n"
                .'|type                 | string   | 是       | TEXT            | 标注类型。支持"IMAGE","TEXT"两种类型。                         |'."\n"
                .'| value| string | 是       | 鸟 | 数据在OSS中的地址或者标注信息。             |'."\n"
                .'|dataSetName| string | 是       | 鸟100_19.jpg | 标注对应的数据集名称。           |'."\n"
                ."\n"
                .'## SDK参考'."\n"
                .'阿里云视觉AI自学习类目下的标注集数据列表能力推荐使用SDK调用，支持多种编程语言，调用时请选择AI类目为自学习（viapi-regen）的SDK包，文件参数通过SDK调用可支持本地文件及任意URL，具体可参见[SDK总览](~~145033~~)。',
            'extraInfo' => '## 错误码'."\n"
                .'关于标注集数据列表的错误码，详情请参见[常见错误码](~~441239~~)。'."\n"
                ."\n"
                .'## 安全声明'."\n"
                .'- 请确保上传的图片或文件来源符合相应的法律法规。'."\n"
                .'- 通过体验调试上传的临时文件有效期为1小时，在24小时后会被系统自动清理删除。',
        ],
        'ListLabelsets' => [
            'methods' => [
                'post',
                'get',
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
                    'name' => 'CurrentPage',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '当前页数。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '每页数据显示条数。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '10',
                    ],
                ],
                [
                    'name' => 'DatasetId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '数据集ID。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '137',
                    ],
                ],
                [
                    'name' => 'Status',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '标注状态。取值如下：'."\n"
                            .'- **FILE_CHECKING**：文件格式校验中'."\n"
                            .'- **FILE_CHECK_SUCCESS**：文件格式校验成功'."\n"
                            .'- **FILE_CHECK_FAIL**：文件格式校验失败'."\n"
                            .'- **TAG_SYSTEM_INIT**：标注系统初始化中'."\n"
                            .'- **TAGGING**：标注中'."\n"
                            .'- **TAG_FINISHED**：标注完成',
                        'type' => 'string',
                        'required' => false,
                        'example' => '["FILE_CHECKING","FILE_CHECK_SUCCESS"]',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '每个请求分配唯一的服务器请求ID。',
                                'type' => 'string',
                                'example' => '638E7B41-5327-0B79-A3A5-390278D7625F',
                            ],
                            'Data' => [
                                'description' => '出参数据实体。',
                                'type' => 'object',
                                'properties' => [
                                    'CurrentPage' => [
                                        'description' => '当前页数。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '1',
                                    ],
                                    'PageSize' => [
                                        'description' => '每页数据显示条数。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '10',
                                    ],
                                    'TotalPage' => [
                                        'description' => '总页数。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '1',
                                    ],
                                    'TotalCount' => [
                                        'description' => '总数据量。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '2',
                                    ],
                                    'Elements' => [
                                        'description' => '返回的标注集中的数据结果。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '标注中的数据值。',
                                            'type' => 'object',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"638E7B41-5327-0B79-A3A5-390278D7625F\\",\\n  \\"Data\\": {\\n    \\"CurrentPage\\": 1,\\n    \\"PageSize\\": 10,\\n    \\"TotalPage\\": 1,\\n    \\"TotalCount\\": 2,\\n    \\"Elements\\": [\\n      {\\n        \\"test\\": \\"test\\",\\n        \\"test2\\": 1\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<ListLabelsetsResponse>\\n    <RequestId>638E7B41-5327-0B79-A3A5-390278D7625F</RequestId>\\n    <Data>\\n        <CurrentPage>1</CurrentPage>\\n        <PageSize>10</PageSize>\\n        <TotalPage>1</TotalPage>\\n        <TotalCount>2</TotalCount>\\n        <Elements>\\n            <labelType>UPLOAD_FILE</labelType>\\n            <name>标注测试2</name>\\n            <description>标注测试2</description>\\n            <id>219</id>\\n            <gmtCreate>1633747459000</gmtCreate>\\n            <status>FILE_CHECK_SUCCESS</status>\\n            <unmarkedQuantity>0</unmarkedQuantity>\\n            <markedQuantity>20</markedQuantity>\\n            <total>20</total>\\n            <PreLabelName>测试时间数据集2</PreLabelName>\\n        </Elements>\\n        <Elements>\\n            <labelType>UPLOAD_FILE</labelType>\\n            <name>标注测试</name>\\n            <description>标注测试描述</description>\\n            <id>218</id>\\n            <gmtCreate>1633745786000</gmtCreate>\\n            <status>FILE_CHECK_SUCCESS</status>\\n            <unmarkedQuantity>0</unmarkedQuantity>\\n            <markedQuantity>10</markedQuantity>\\n            <total>10</total>\\n            <PreLabelName>测试时间数据集</PreLabelName>\\n        </Elements>\\n    </Data>\\n</ListLabelsetsResponse>","errorExample":""}]',
            'title' => '标注集列表',
            'summary' => '标注集列表ListLabelsets的语法及示例。',
            'description' => '## 功能描述'."\n"
                .'根据数据集ID查看数据集下标注集详细数据。'."\n"
                ."\n"
                .'> - 您可以进入[在线咨询](https://www.aliyun.com/core/online-consult?from=aZgW6LJHr2)获取在线人工帮助。'."\n"
                .'- 阿里云视觉智能开放平台视觉AI能力API接入、接口使用或问题咨询等，请通过钉钉群（23109592）加入阿里云视觉智能开放平台咨询群联系我们。'."\n"
                ."\n"
                .'## 接入指引'."\n"
                .'1. 注册阿里云账号：打开[阿里云官网](https://www.aliyun.com)，在阿里云官网右上角，单击**立即注册**，按照操作提示完成账号注册。'."\n"
                .'2. 开通能力：请确保您已开通自学习服务，若未开通服务请[立即开通](https://common-buy.aliyun.com/?commodityCode=viapi_selflearning_public_cn)。'."\n"
                .'3. 创建AccessKey：请确保您已[创建AccessKey](~~175144~~)，如果您使用的是子账号AccessKey，您需要给子账号赋予AliyunVIAPIFullAccess权限，具体操作，请参见[RAM授权](~~145025~~)。'."\n"
                .'4. 在线调试（可选）：您可以通过[OpenAPI Explorer](https://next.api.aliyun.com/api/viapi-regen/2021-11-19/ListLabelsets?lang=JAVA)在线调试能力，查看完整的调用示例代码及SDK依赖信息，也可以下载完整的工程。'."\n"
                .'5. 开发接入步骤：    '."\n"
                .'- 在[SDK总览](~~145033~~)中选择您要接入使用的SDK语言。'."\n"
                .'- 在对应语言的SDK文档中找到AI类目为自学习（viapi-regen）类目的SDK包进行安装。'."\n"
                .'- 参考文档中提供的示例代码进行适当修改后调用。'."\n"
                ."\n"
                .'6. 客户端直接调用：该能力常用的客户端调用方式包括以下几种。'."\n"
                .'- [Web前端直接调用](~~467779~~)'."\n"
                .'- [小程序场景下直接调用](~~467780~~)'."\n"
                .'- [Android端直接调用](~~467781~~)'."\n"
                .'- [iOS端直接调用](~~467782~~)'."\n",
            'responseParamsDescription' => '## Elements字段参数说明'."\n"
                .'| 字段 	| 类型 	| 是否必须 | 描述 |'."\n"
                .'| ---------- | -------- | ------------- | ------------ |'."\n"
                .'| labelType   | String | 否  |标注类型。取值：**UPLOAD_FILE**（上传标注文件），**SELECT_FILE**（选择标注文件），**USE_LABEL_SYSTEM**（选择标注系统）。|'."\n"
                .'|name          | String |否  |标注名称。|'."\n"
                .'|description  | String|否   |标注描述。|'."\n"
                .'|id                 | Long |否   |标注集ID。 |'."\n"
                .'|gmtCreate   | Long | 否  |创建时间。 |'."\n"
                .'|status          | String| 否|标注状态。取值：**FILE_CHECKING**（文件格式校验中），**FILE_CHECK_SUCCESS**（文件格式校验成功），**FILE_CHECK_FAIL**（文件格式校验失败）。|'."\n"
                .'|total   	   |Long   | 否	|当前标注集数据量。|'."\n"
                .'|tagUserList   | String| 否  |需要更新打标人时，使用标注系统进行标注，仅在`LabelType=USE_LABEL_SYSTEM`下生效。 |'."\n"
                .'|markedQuantity          | Long| 否|已标注数量。|'."\n"
                .'|unmarkedQuantity  	   |Long   | 否	|未标注数量。|'."\n"
                .'|PreLabelName  	   |String | 否	|预标注名称。|'."\n"
                .'## SDK参考'."\n"
                .'阿里云视觉AI自学习类目下的标注集列表能力推荐使用SDK调用，支持多种编程语言，调用时请选择AI类目为自学习（viapi-regen）的SDK包，文件参数通过SDK调用可支持本地文件及任意URL，具体可参见[SDK总览](~~145033~~)。'."\n",
            'extraInfo' => '## 错误码'."\n"
                .'关于标注集列表的错误码，详情请参见[常见错误码](~~441239~~)。'."\n"
                ."\n"
                .'## 安全声明'."\n"
                .'- 请确保上传的图片或文件来源符合相应的法律法规。'."\n"
                .'- 通过体验调试上传的临时文件有效期为1小时，在24小时后会被系统自动清理删除。',
        ],
        'ListServices' => [
            'methods' => [
                'post',
                'get',
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
                    'name' => 'CurrentPage',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '当前页数。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '每页数据显示条数。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '10',
                    ],
                ],
                [
                    'name' => 'WorkspaceId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '生产空间ID，用以标识唯一生产空间。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '63',
                    ],
                ],
                [
                    'name' => 'Id',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '服务ID，用以标识唯一服务。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '21',
                    ],
                ],
                [
                    'name' => 'Name',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '服务名称（支持模糊搜索）。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => 'test',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '每个请求分配唯一的服务器请求ID。',
                                'type' => 'string',
                                'example' => 'C3CEBC54-BCB4-0CEC-8E57-418517898C03',
                            ],
                            'Data' => [
                                'description' => '出参数据实体。',
                                'type' => 'object',
                                'properties' => [
                                    'CurrentPage' => [
                                        'description' => '当前页数。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '1',
                                    ],
                                    'PageSize' => [
                                        'description' => '每页数据显示条数。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '10',
                                    ],
                                    'TotalPage' => [
                                        'description' => '总页数。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '1',
                                    ],
                                    'TotalCount' => [
                                        'description' => '总数据量。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '2',
                                    ],
                                    'Elements' => [
                                        'description' => '服务列表中数据集合。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '标注中的数据值。',
                                            'type' => 'object',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"C3CEBC54-BCB4-0CEC-8E57-418517898C03\\",\\n  \\"Data\\": {\\n    \\"CurrentPage\\": 1,\\n    \\"PageSize\\": 10,\\n    \\"TotalPage\\": 1,\\n    \\"TotalCount\\": 2,\\n    \\"Elements\\": [\\n      {\\n        \\"test\\": \\"test\\",\\n        \\"test2\\": 1\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<ListServicesResponse>\\n    <RequestId>C3CEBC54-BCB4-0CEC-8E57-418517898C03</RequestId>\\n    <Data>\\n        <CurrentPage>1</CurrentPage>\\n        <PageSize>10</PageSize>\\n        <TotalPage>1</TotalPage>\\n        <TotalCount>2</TotalCount>\\n        <Elements>\\n            <serviceDescription>test</serviceDescription>\\n            <id>21</id>\\n            <gmtCreate>1631773630000</gmtCreate>\\n            <serviceName>test</serviceName>\\n            <status>RUNNING</status>\\n            <authorizationType>DESIGNATED_ACCOUNT</authorizationType>\\n            <authorizedAccount>1716735326807772,1319860643305711</authorizedAccount>\\n        </Elements>\\n    </Data>\\n</ListServicesResponse>","errorExample":""}]',
            'title' => '服务数据列表',
            'summary' => '服务数据列表ListServices的语法及示例。',
            'description' => '## 功能描述'."\n"
                .'通过空间ID查看服务数据详细数据。'."\n"
                ."\n"
                .'> - 您可以进入[在线咨询](https://www.aliyun.com/core/online-consult?from=aZgW6LJHr2)获取在线人工帮助。'."\n"
                .'- 阿里云视觉智能开放平台视觉AI能力API接入、接口使用或问题咨询等，请通过钉钉群（23109592）加入阿里云视觉智能开放平台咨询群联系我们。'."\n"
                ."\n"
                .'## 接入指引'."\n"
                .'1. 注册阿里云账号：打开[阿里云官网](https://www.aliyun.com)，在阿里云官网右上角，单击**立即注册**，按照操作提示完成账号注册。'."\n"
                .'2. 开通能力：请确保您已开通自学习服务，若未开通服务请[立即开通](https://common-buy.aliyun.com/?commodityCode=viapi_selflearning_public_cn)。'."\n"
                .'3. 创建AccessKey：请确保您已[创建AccessKey](~~175144~~)，如果您使用的是子账号AccessKey，您需要给子账号赋予AliyunVIAPIFullAccess权限，具体操作，请参见[RAM授权](~~145025~~)。'."\n"
                .'4. 在线调试（可选）：您可以通过[OpenAPI Explorer](https://next.api.aliyun.com/api/viapi-regen/2021-11-19/ListServices?lang=JAVA&sdkStyle=old)在线调试能力，查看完整的调用示例代码及SDK依赖信息，也可以下载完整的工程。'."\n"
                .'5. 开发接入步骤：    '."\n"
                .'- 在[SDK总览](~~145033~~)中选择您要接入使用的SDK语言。'."\n"
                .'- 在对应语言的SDK文档中找到AI类目为自学习（viapi-regen）类目的SDK包进行安装。'."\n"
                .'- 参考文档中提供的示例代码进行适当修改后调用。'."\n"
                ."\n"
                .'6. 客户端直接调用：该能力常用的客户端调用方式包括以下几种。'."\n"
                .'- [Web前端直接调用](~~467779~~)'."\n"
                .'- [小程序场景下直接调用](~~467780~~)'."\n"
                .'- [Android端直接调用](~~467781~~)'."\n"
                .'- [iOS端直接调用](~~467782~~)',
            'responseParamsDescription' => '## Elements字段参数说明'."\n"
                .'| 字段    | 类型   | 是否必须   | 示例值|    描述                                      |'."\n"
                .'| ------------------------ | -------- | ------------- | --------------------- | ---------------------------------------- |'."\n"
                .'|serviceDescription 	| String |       是       |  test          | 服务描述。                              |'."\n"
                .'|id                           |  Long  |      是	       |            21            | 服务ID。                                  |'."\n"
                .'|gmtCreate      	|  Long  |      是	       |1631773630000 | 创建时间。                              |'."\n"
                .'|serviceName  	| String  |     是        |           test           | 服务名称。                              |'."\n"
                .'|status	                | String  |     是        |RUNNING    | 服务当前状态。服务状态：INIT（初始化），STARTING（开始运行），RUNNING（运行），START_FAIL（启动失败），STOPPING（停止运行）。 |'."\n"
                .'|authorizationType	                | String  |     否        |DESIGNATED_ACCOUNT    | 授权类型。取值：PUBLIC（指当前服务可被任何账号调用访问），DESIGNATED_ACCOUNT（指当前服务只能被指定的账户访问）。 |'."\n"
                .'|authorizedAccount	                | String  |     否        |1716735326807772,1319860643305711    | 授权账号。多个账号用半角逗号（,）分隔，只在授权类型是`DESIGNATED_ACCOUNT`下生效。 |'."\n"
                ."\n"
                .'## SDK参考'."\n"
                .'阿里云视觉AI自学习类目下的服务数据列表能力推荐使用SDK调用，支持多种编程语言，调用时请选择AI类目为自学习（viapi-regen）的SDK包，文件参数通过SDK调用可支持本地文件及任意URL，具体可参见[SDK总览](~~145033~~)。'."\n",
            'extraInfo' => '## 错误码'."\n"
                .'关于服务数据列表的错误码，详情请参见[常见错误码](~~441239~~)。'."\n"
                ."\n"
                .'## 安全声明'."\n"
                .'- 请确保上传的图片或文件来源符合相应的法律法规。'."\n"
                .'- 通过体验调试上传的临时文件有效期为1小时，在24小时后会被系统自动清理删除。',
        ],
        'ListTrainTasks' => [
            'methods' => [
                'post',
                'get',
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
                    'name' => 'CurrentPage',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '当前页数。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '每页数据显示条数。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '10',
                    ],
                ],
                [
                    'name' => 'Status',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '训练任务状态。'."\n"
                            ."\n"
                            .'- **INIT**：未训练'."\n"
                            .'- **PREPARING**：准备中'."\n"
                            .'- **TRAINING**：训练中'."\n"
                            .'- **TRAIN_SUCCESS**：训练成功'."\n"
                            .'- **TRAIN_FAIL**：训练失败',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'PREPARING',
                    ],
                ],
                [
                    'name' => 'WorkspaceId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '生产空间ID。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '63',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '每个请求分配唯一的服务器请求ID。',
                                'type' => 'string',
                                'example' => 'F8B71CDB-5DE9-0ACB-8D0F-FCEFBFF6B473',
                            ],
                            'Data' => [
                                'description' => '出参数据实体。',
                                'type' => 'object',
                                'properties' => [
                                    'CurrentPage' => [
                                        'description' => '当前页数。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '1',
                                    ],
                                    'PageSize' => [
                                        'description' => '每页数据显示条数。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '10',
                                    ],
                                    'TotalPage' => [
                                        'description' => '总页数。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '1',
                                    ],
                                    'TotalCount' => [
                                        'description' => '总数据量。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '2',
                                    ],
                                    'Elements' => [
                                        'description' => '训练任务列表中数据集合。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '标注中的数据值。',
                                            'type' => 'object',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"F8B71CDB-5DE9-0ACB-8D0F-FCEFBFF6B473\\",\\n  \\"Data\\": {\\n    \\"CurrentPage\\": 1,\\n    \\"PageSize\\": 10,\\n    \\"TotalPage\\": 1,\\n    \\"TotalCount\\": 2,\\n    \\"Elements\\": [\\n      {\\n        \\"test\\": \\"test\\",\\n        \\"test2\\": 1\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<ListTrainTasksResponse>\\n    <RequestId>F8B71CDB-5DE9-0ACB-8D0F-FCEFBFF6B473</RequestId>\\n    <Data>\\n        <CurrentPage>1</CurrentPage>\\n        <PageSize>10</PageSize>\\n        <TotalPage>1</TotalPage>\\n        <TotalCount>2</TotalCount>\\n        <Elements>\\n            <labelId>228</labelId>\\n            <modelId>29</modelId>\\n            <trainStatus>TRAIN_SUCCESS</trainStatus>\\n            <datasetName>test1</datasetName>\\n            <datasetId>120</datasetId>\\n            <description>test3描述</description>\\n            <taskName>test3</taskName>\\n            <id>68</id>\\n            <gmtCreate>1634111691000</gmtCreate>\\n            <labelName>test3</labelName>\\n            <modelEffect>[{\\"id\\": \\"TOP1_ACC\\", \\"name\\": \\"top1准确率\\", \\"value\\": 100.0}, {\\"id\\": \\"TOP5_ACC\\", \\"name\\": \\"top5准确率\\", \\"value\\": 100.0}]</modelEffect>\\n            <trainMode>COMMON</trainMode>\\n        </Elements>\\n        <Elements>\\n            <modelId>14</modelId>\\n            <trainStatus>TRAIN_SUCCESS</trainStatus>\\n            <datasetName>test1</datasetName>\\n            <description>test1</description>\\n            <gmtCreate>1631762402000</gmtCreate>\\n            <modelEffect>[{\\"id\\": \\"TOP1_ACC\\", \\"name\\": \\"top1准确率\\", \\"value\\": 100.0}, {\\"id\\": \\"TOP5_ACC\\", \\"name\\": \\"top5准确率\\", \\"value\\": 100.0}]</modelEffect>\\n            <trainMode>COMMON</trainMode>\\n            <labelId>188</labelId>\\n            <datasetId>120</datasetId>\\n            <taskName>test1</taskName>\\n            <id>43</id>\\n            <labelName>test2</labelName>\\n            <serviceId>21</serviceId>\\n        </Elements>\\n    </Data>\\n</ListTrainTasksResponse>","errorExample":""}]',
            'title' => '训练任务列表',
            'summary' => '训练任务列表ListTrainTasks的语法及示例。',
            'description' => '## 功能描述'."\n"
                .'通过生产空间ID查看此空间下训练任务详细数据。'."\n"
                ."\n"
                .'> - 您可以进入[在线咨询](https://www.aliyun.com/core/online-consult?from=aZgW6LJHr2)获取在线人工帮助。'."\n"
                .'- 阿里云视觉智能开放平台视觉AI能力API接入、接口使用或问题咨询等，请通过钉钉群（23109592）加入阿里云视觉智能开放平台咨询群联系我们。'."\n"
                ."\n"
                .'## 接入指引'."\n"
                .'1. 注册阿里云账号：打开[阿里云官网](https://www.aliyun.com)，在阿里云官网右上角，单击**立即注册**，按照操作提示完成账号注册。'."\n"
                .'2. 开通能力：请确保您已开通自学习服务，若未开通服务请[立即开通](https://common-buy.aliyun.com/?commodityCode=viapi_selflearning_public_cn)。'."\n"
                .'3. 创建AccessKey：请确保您已[创建AccessKey](~~175144~~)，如果您使用的是子账号AccessKey，您需要给子账号赋予AliyunVIAPIFullAccess权限，具体操作，请参见[RAM授权](~~145025~~)。'."\n"
                .'4. 在线调试（可选）：您可以通过[OpenAPI Explorer](https://next.api.aliyun.com/api/viapi-regen/2021-11-19/ListTrainTasks?lang=JAVA&sdkStyle=old)在线调试能力，查看完整的调用示例代码及SDK依赖信息，也可以下载完整的工程。'."\n"
                ."\n"
                .'5. 开发接入步骤：    '."\n"
                .'- 在[SDK总览](~~145033~~)中选择您要接入使用的SDK语言。'."\n"
                .'- 在对应语言的SDK文档中找到AI类目为自学习（viapi-regen）类目的SDK包进行安装。'."\n"
                .'- 参考文档中提供的示例代码进行适当修改后调用。'."\n"
                ."\n"
                .'6. 客户端直接调用：该能力常用的客户端调用方式包括以下几种。'."\n"
                .'- [Web前端直接调用](~~467779~~)'."\n"
                .'- [小程序场景下直接调用](~~467780~~)'."\n"
                .'- [Android端直接调用](~~467781~~)'."\n"
                .'- [iOS端直接调用](~~467782~~)',
            'responseParamsDescription' => '## Elements字段参数说明'."\n"
                .'| 字段    | 类型   | 是否必须   | 示例值|    描述                                      |'."\n"
                .'| ------------------------ | -------- | ------------- | --------------------- | ---------------------------------------- |'."\n"
                .'|labelId   | Long |       否       |  228           | 标注ID。                              |'."\n"
                .'|modelId                           |  Long  |      否         |            229            | 模型ID。                                  |'."\n"
                .'|trainStatus        |  String  |      否         | TRAIN_SUCCESS | 训练状态。取值如下：**INIT**：未训练；**PREPARING**：准备中；**TRAINING**：训练中；**TRAIN_SUCCESS**：训练成功；**TRAIN_FAIL**：训练失败。                              |'."\n"
                .'|datasetName   | String |       否       |  test1           | 数据集名称。                              |'."\n"
                .'|datasetId                           |  Long  |      否         |            120            | 数据集ID。                                  |'."\n"
                .'|description        |  String  |      否         | test3描述 | 训练任务描述。                              |'."\n"
                .'|taskName   | String |       否       |  test3           | 训练任务名称。                              |'."\n"
                .'|id                           |  Long  |      否         |            68            | 服务ID。                                  |'."\n"
                .'|gmtCreate        |  Long  |      否         | 1634111691000 | 创建时间。                              |'."\n"
                .'|labelName   | String |       否       |  test3           | 标注名称。                              |'."\n"
                .'|modelEffect                           |  String  |      否         |            [{"id":"TOP1_ACC","name":"top1准确率", "value":100.0}, "id":"TOP5_ACC","name":"top5准确率","value":100.0}]            | 模型效果。                                  |'."\n"
                .'|trainMode        |  String  |      否         | COMMON | 训练模型。取值如下 ：**COMMON**：均衡；**HIGH_ACC**：高精度；**HIGH_PERF**：高性能。                              |'."\n"
                .'|advancedParameters   | String |       否       |{\\"TestLabelId\\":1266,\\"TestDatasetId\\":948,\\"Lr\\":0.5,\\"width\\":\\"32\\",\\"ValidationLabelId\\":1266,\\"Epoch\\":23,\\"ValidationDatasetId\\":948,\\"height\\":\\"23\\"}           |**Epoch**（学习轮数）、**Lr**（学习率）、**height**（图片高）、**width**（图片宽）、**ValidationDatasetId**（验证数据集）、**IDValidationLabelId**（验证标注集ID）、**TestDatasetId**（测试数据集ID）、**TestLabelId**（测试标注集ID）                              |'."\n"
                .'|serviceId                           |  Long  |      否         |            443            | 服务ID。                                  |'."\n"
                .'|trainUseTime        |  Long  |      否         | 1260898| 训练耗时。                              |'."\n"
                .'|failureReason| String |       否       |  失败原因           | 训练失败原因。                              |'."\n"
                .'|PreTrainTaskId| Long|       否       |  213           |基于之前的训练任务ID。                             |'."\n"
                .'|PreTrainTaskName| String |       否       |  任务213           | 基于之前的训练任务名称。                              |'."\n"
                .'|PreTrainTaskFlag| Boolean|       否       |  true           | 是否基于之前的训练任务开关。                              |'."\n"
                ."\n"
                .'## SDK参考'."\n"
                .'阿里云视觉AI自学习类目下的训练任务列表能力推荐使用SDK调用，支持多种编程语言，调用时请选择AI类目为自学习（viapi-regen）的SDK包，文件参数通过SDK调用可支持本地文件及任意URL，具体可参见[SDK总览](~~145033~~)。',
            'extraInfo' => '## 错误码'."\n"
                .'关于训练任务列表的错误码，详情请参见[常见错误码](~~441239~~)。'."\n"
                ."\n"
                .'## 安全声明'."\n"
                .'- 请确保上传的图片或文件来源符合相应的法律法规。'."\n"
                .'- 通过体验调试上传的临时文件有效期为1小时，在24小时后会被系统自动清理删除。',
        ],
        'ListWorkspaces' => [
            'methods' => [
                'post',
                'get',
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
                    'name' => 'CurrentPage',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '当前页数。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '每页数据显示条数。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '10',
                    ],
                ],
                [
                    'name' => 'Name',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '生产空间名称（支持模糊搜索）。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'test',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '每个请求分配唯一的服务器请求ID。',
                                'type' => 'string',
                                'example' => '63DBD066-6374-0C1B-9E4D-9DDAEEA9CC73',
                            ],
                            'Data' => [
                                'description' => '出参数据实体。',
                                'type' => 'object',
                                'properties' => [
                                    'CurrentPage' => [
                                        'description' => '当前页数。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '1',
                                    ],
                                    'PageSize' => [
                                        'description' => '每页数据显示条数。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '10',
                                    ],
                                    'TotalPage' => [
                                        'description' => '总页数。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '4',
                                    ],
                                    'TotalCount' => [
                                        'description' => '总数据量。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '31',
                                    ],
                                    'Elements' => [
                                        'description' => '工作空间列表中数据集合。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '生产空间列表中数据集合。',
                                            'type' => 'object',
                                            'properties' => [
                                                'Id' => [
                                                    'description' => '生产空间ID。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '78',
                                                ],
                                                'GmtCreate' => [
                                                    'description' => '创建时间。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '1634262449000',
                                                ],
                                                'Name' => [
                                                    'description' => '生产空间名称。',
                                                    'type' => 'string',
                                                    'example' => 'wyqtest',
                                                ],
                                                'Description' => [
                                                    'description' => '生产空间描述。',
                                                    'type' => 'string',
                                                    'example' => 'wyqtest描述',
                                                ],
                                                'Type' => [
                                                    'description' => '生产空间类型。取值如下：'."\n"
                                                        ."\n"
                                                        .'- COMMON_CLASSIFY：通用分类'."\n"
                                                        .'- COMMON_DETECT：通用检测'."\n"
                                                        .'- COMMON\\_INSTANCE_SEGMENT：通用实例分割',
                                                    'type' => 'string',
                                                    'example' => 'COMMON_CLASSIFY',
                                                ],
                                                'TransferState' => [
                                                    'description' => '迁移至新版自学习空间的状态。TRANSFER_SUCCESS代表迁移成功，如果未迁移则不返回**TransferState**参数。',
                                                    'type' => 'string',
                                                    'example' => 'TRANSFER_SUCCESS',
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
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"63DBD066-6374-0C1B-9E4D-9DDAEEA9CC73\\",\\n  \\"Data\\": {\\n    \\"CurrentPage\\": 1,\\n    \\"PageSize\\": 10,\\n    \\"TotalPage\\": 4,\\n    \\"TotalCount\\": 31,\\n    \\"Elements\\": [\\n      {\\n        \\"Id\\": 78,\\n        \\"GmtCreate\\": 1634262449000,\\n        \\"Name\\": \\"wyqtest\\",\\n        \\"Description\\": \\"wyqtest描述\\",\\n        \\"Type\\": \\"COMMON_CLASSIFY\\",\\n        \\"TransferState\\": \\"TRANSFER_SUCCESS\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<ListWorkspacesResponse>\\n    <RequestId>63DBD066-6374-0C1B-9E4D-9DDAEEA9CC73</RequestId>\\n    <Data>\\n        <CurrentPage>1</CurrentPage>\\n        <PageSize>10</PageSize>\\n        <TotalPage>4</TotalPage>\\n        <TotalCount>31</TotalCount>\\n        <Elements>\\n            <Id>78</Id>\\n            <GmtCreate>1634262449000</GmtCreate>\\n            <Name>wyqtest</Name>\\n            <Description>wyqtest描述</Description>\\n            <Type>COMMON_CLASSIFY</Type>\\n            <TransferState>TRANSFER_SUCCESS</TransferState>\\n        </Elements>\\n    </Data>\\n</ListWorkspacesResponse>","errorExample":""}]',
            'title' => '生产空间列表',
            'summary' => '生产空间列表ListWorkspaces的语法及示例。',
            'description' => '## 功能描述'."\n"
                .'根据RegionID查看区域下生产空间的详细数据。'."\n"
                ."\n"
                .'> - 您可以进入[在线咨询](https://www.aliyun.com/core/online-consult?from=aZgW6LJHr2)获取在线人工帮助。'."\n"
                .'- 阿里云视觉智能开放平台视觉AI能力API接入、接口使用或问题咨询等，请通过钉钉群（23109592）加入阿里云视觉智能开放平台咨询群联系我们。'."\n"
                ."\n"
                .'## 接入指引'."\n"
                .'1. 注册阿里云账号：打开[阿里云官网](https://www.aliyun.com)，在阿里云官网右上角，单击**立即注册**，按照操作提示完成账号注册。'."\n"
                .'2. 开通能力：请确保您已开通自学习服务，若未开通服务请[立即开通](https://common-buy.aliyun.com/?commodityCode=viapi_selflearning_public_cn)。'."\n"
                .'3. 创建AccessKey：请确保您已[创建AccessKey](~~175144~~)，如果您使用的是子账号AccessKey，您需要给子账号赋予AliyunVIAPIFullAccess权限，具体操作，请参见[RAM授权](~~145025~~)。'."\n"
                .'4. 在线调试（可选）：您可以通过[OpenAPI Explorer](https://next.api.aliyun.com/api/viapi-regen/2021-11-19/ListWorkspaces?lang=JAVA&sdkStyle=old)在线调试能力，查看完整的调用示例代码及SDK依赖信息，也可以下载完整的工程。'."\n"
                .'5. 开发接入步骤：    '."\n"
                .'- 在[SDK总览](~~145033~~)中选择您要接入使用的SDK语言。'."\n"
                .'- 在对应语言的SDK文档中找到AI类目为自学习（viapi-regen）类目的SDK包进行安装。'."\n"
                .'- 参考文档中提供的示例代码进行适当修改后调用。'."\n"
                ."\n"
                .'6. 客户端直接调用：该能力常用的客户端调用方式包括以下几种。'."\n"
                .'- [Web前端直接调用](~~467779~~)'."\n"
                .'- [小程序场景下直接调用](~~467780~~)'."\n"
                .'- [Android端直接调用](~~467781~~)'."\n"
                .'- [iOS端直接调用](~~467782~~)',
            'responseParamsDescription' => '## SDK参考'."\n"
                .'阿里云视觉AI自学习类目下的生产空间列表能力推荐使用SDK调用，支持多种编程语言，调用时请选择AI类目为自学习（viapi-regen）的SDK包，文件参数通过SDK调用可支持本地文件及任意URL，具体可参见[SDK总览](~~145033~~)。',
            'extraInfo' => '## 错误码'."\n"
                .'关于生产空间列表的错误码，详情请参见[常见错误码](~~441239~~)。'."\n"
                .'## 安全声明'."\n"
                .'- 请确保上传的图片或文件来源符合相应的法律法规。'."\n"
                .'- 通过体验调试上传的临时文件有效期为1小时，在24小时后会被系统自动清理删除。',
        ],
        'SetDatasetUserOssPath' => [
            'methods' => [
                'post',
                'get',
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
                    'name' => 'DatasetId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '数据集ID。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '424',
                    ],
                ],
                [
                    'name' => 'UserOssUrl',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '用户指定的OSS路径。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'oss://regen-test-bucket/yangTest/',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '每个请求分配唯一的服务器请求ID。',
                                'type' => 'string',
                                'example' => '68B3B582-0FCF-16CE-8F7F-884625D8AEE7',
                            ],
                            'Data' => [
                                'description' => '接口返回实体。',
                                'type' => 'object',
                                'properties' => [
                                    'Id' => [
                                        'description' => '数据集ID。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '424',
                                    ],
                                    'OssUrl' => [
                                        'description' => '用户指定的OSS路径。',
                                        'type' => 'string',
                                        'example' => '"oss://regen-test-bucket/yangTest/"',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"68B3B582-0FCF-16CE-8F7F-884625D8AEE7\\",\\n  \\"Data\\": {\\n    \\"Id\\": 424,\\n    \\"OssUrl\\": \\"\\\\\\"oss://regen-test-bucket/yangTest/\\\\\\"\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<SetDatasetUserOssPathResponse>\\n    <RequestId>68B3B582-0FCF-16CE-8F7F-884625D8AEE7</RequestId>\\n    <Data>\\n        <Id>424</Id>\\n        <OssUrl>oss://regen-test-bucket/yangTest/</OssUrl>\\n    </Data>\\n</SetDatasetUserOssPathResponse>","errorExample":""}]',
            'title' => '设置数据集OSS路径',
            'summary' => '设置数据集OSS路径。',
            'description' => '## 功能描述'."\n"
                .'使用用户指定的OSS路径，上传其中的文件。'."\n"
                ."\n"
                .'> - 您可以进入[在线咨询](https://www.aliyun.com/core/online-consult?from=aZgW6LJHr2)获取在线人工帮助。'."\n"
                .'- 阿里云视觉智能开放平台视觉AI能力API接入、接口使用或问题咨询等，请通过钉钉群（23109592）加入阿里云视觉智能开放平台咨询群联系我们。'."\n"
                ."\n"
                .'## 接入指引'."\n"
                .'1. 注册阿里云账号：打开[阿里云官网](https://www.aliyun.com)，在阿里云官网右上角，单击**立即注册**，按照操作提示完成账号注册。'."\n"
                .'2. 开通能力：请确保您已开通自学习服务，若未开通服务请[立即开通](https://common-buy.aliyun.com/?commodityCode=viapi_selflearning_public_cn)。'."\n"
                .'3. 创建AccessKey：请确保您已[创建AccessKey](~~175144~~)，如果您使用的是子账号AccessKey，您需要给子账号赋予AliyunVIAPIFullAccess权限，具体操作，请参见[RAM授权](~~145025~~)。'."\n"
                .'4. 在线调试（可选）：您可以通过[OpenAPI Explorer](https://next.api.aliyun.com/api/viapi-regen/2021-11-19/SetDatasetUserOssPath?lang=JAVA&sdkStyle=old)在线调试能力，查看完整的调用示例代码及SDK依赖信息，也可以下载完整的工程。'."\n"
                .'5. 开发接入步骤：    '."\n"
                .'- 在[SDK总览](~~145033~~)中选择您要接入使用的SDK语言。'."\n"
                .'- 在对应语言的SDK文档中找到AI类目为自学习（viapi-regen）类目的SDK包进行安装。'."\n"
                .'- 参考文档中提供的示例代码进行适当修改后调用。'."\n"
                ."\n"
                .'6. 客户端直接调用：该能力常用的客户端调用方式包括以下几种。'."\n"
                .'- [Web前端直接调用](~~467779~~)'."\n"
                .'- [小程序场景下直接调用](~~467780~~)'."\n"
                .'- [Android端直接调用](~~467781~~)'."\n"
                .'- [iOS端直接调用](~~467782~~)',
            'responseParamsDescription' => '## Data字段参数说明'."\n"
                .'| 字段 	| 类型 	| 是否必须 |    描述            |'."\n"
                .'| ----------  | ----------- | ------------ |------------------- |'."\n"
                .'| Id     	| Long      | 是            |	数据集ID。 |'."\n"
                .'| OssUrl   | String 	| 是  	  | 用户指定的OSS路径。 |'."\n"
                ."\n"
                .'## SDK参考'."\n"
                .'阿里云视觉AI自学习类目下的使用OSS路径上传数据集能力推荐使用SDK调用，支持多种编程语言，调用时请选择AI类目为自学习（viapi-regen）的SDK包，文件参数通过SDK调用可支持本地文件及任意URL，具体可参见[SDK总览](~~145033~~)。'."\n",
            'extraInfo' => '## 错误码'."\n"
                .'关于使用OSS路径上传数据集的错误码，详情请参见[常见错误码](~~441239~~)。'."\n"
                ."\n"
                .'## 安全声明'."\n"
                .'- 请确保上传的图片或文件来源符合相应的法律法规。'."\n"
                .'- 通过体验调试上传的临时文件有效期为1小时，在24小时后会被系统自动清理删除。',
        ],
        'StartService' => [
            'methods' => [
                'post',
                'get',
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
                    'name' => 'Id',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '服务ID，用以标识唯一服务。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '22',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '047BA921-06DE-0DC4-8433-BAB26A4F3133',
                            ],
                            'Data' => [
                                'description' => '返回的结果数据内容。'."\n"
                                    ."\n\n"
                                    ."\n\n"
                                    ."\n\n"
                                    ."\n\n"
                                    ."\n\n"
                                    ."\n\n"
                                    ."\n\n"
                                    ."\n\n"
                                    ."\n\n"
                                    ."\n\n"
                                    ."\n\n"
                                    ."\n\n",
                                'type' => 'object',
                                'properties' => [
                                    'Id' => [
                                        'description' => '服务ID。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '22',
                                    ],
                                    'GmtCreate' => [
                                        'description' => '创建时间。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '1626434355778',
                                    ],
                                    'ServiceName' => [
                                        'description' => '服务名称。',
                                        'type' => 'string',
                                        'example' => '日常服务测试',
                                    ],
                                    'ServiceDescription' => [
                                        'description' => '服务描述。',
                                        'type' => 'string',
                                        'example' => '日常服务测试描述',
                                    ],
                                    'Status' => [
                                        'description' => '服务当前状态。取值如下：'."\n"
                                            ."\n"
                                            .'- INIT：初始化'."\n"
                                            ."\n"
                                            .'- STARTING：开始运行'."\n"
                                            ."\n"
                                            .'- RUNNING：运行'."\n"
                                            ."\n"
                                            .'- START_FAIL：启动失败'."\n"
                                            ."\n"
                                            .'- STOPPING：停止运行',
                                        'type' => 'string',
                                        'example' => 'STARTING',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"047BA921-06DE-0DC4-8433-BAB26A4F3133\\",\\n  \\"Data\\": {\\n    \\"Id\\": 22,\\n    \\"GmtCreate\\": 1626434355778,\\n    \\"ServiceName\\": \\"日常服务测试\\",\\n    \\"ServiceDescription\\": \\"日常服务测试描述\\",\\n    \\"Status\\": \\"STARTING\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<StartServiceResponse>\\n    <RequestId>047BA921-06DE-0DC4-8433-BAB26A4F3133</RequestId>\\n    <Data>\\n        <Id>22</Id>\\n        <GmtCreate>1626434355778</GmtCreate>\\n        <ServiceName>日常服务测试</ServiceName>\\n        <ServiceDescription>日常服务测试描述</ServiceDescription>\\n        <Status>STARTING</Status>\\n    </Data>\\n</StartServiceResponse>","errorExample":""}]',
            'title' => '启动服务',
            'summary' => '启动服务StartService的语法及示例。',
            'description' => '## 功能描述'."\n"
                .'通过服务ID，调用阿里云EAS接口，启动服务，并锁定服务资源。'."\n"
                ."\n"
                .'> - 您可以进入[在线咨询](https://www.aliyun.com/core/online-consult?from=aZgW6LJHr2)获取在线人工帮助。'."\n"
                .'- 阿里云视觉智能开放平台视觉AI能力API接入、接口使用或问题咨询等，请通过钉钉群（23109592）加入阿里云视觉智能开放平台咨询群联系我们。'."\n"
                ."\n"
                .'## 接入指引'."\n"
                .'1. 注册阿里云账号：打开[阿里云官网](https://www.aliyun.com)，在阿里云官网右上角，单击**立即注册**，按照操作提示完成账号注册。'."\n"
                .'2. 开通能力：请确保您已开通自学习服务，若未开通服务请[立即开通](https://common-buy.aliyun.com/?commodityCode=viapi_selflearning_public_cn)。'."\n"
                .'3. 创建AccessKey：请确保您已[创建AccessKey](~~175144~~)，如果您使用的是子账号AccessKey，您需要给子账号赋予AliyunVIAPIFullAccess权限，具体操作，请参见[RAM授权](~~145025~~)。'."\n"
                .'4. 在线调试（可选）：您可以通过[OpenAPI Explorer](https://next.api.aliyun.com/api/viapi-regen/2021-11-19/StartService?lang=JAVA&sdkStyle=old)在线调试能力，查看完整的调用示例代码及SDK依赖信息，也可以下载完整的工程。'."\n"
                .'5. 开发接入步骤：    '."\n"
                .'- 在[SDK总览](~~145033~~)中选择您要接入使用的SDK语言。'."\n"
                .'- 在对应语言的SDK文档中找到AI类目为自学习（viapi-regen）类目的SDK包进行安装。'."\n"
                .'- 参考文档中提供的示例代码进行适当修改后调用。'."\n"
                ."\n"
                .'6. 客户端直接调用：该能力常用的客户端调用方式包括以下几种。'."\n"
                .'- [Web前端直接调用](~~467779~~)'."\n"
                .'- [小程序场景下直接调用](~~467780~~)'."\n"
                .'- [Android端直接调用](~~467781~~)'."\n"
                .'- [iOS端直接调用](~~467782~~)',
            'responseParamsDescription' => '## SDK参考'."\n"
                .'阿里云视觉AI自学习类目下的启动服务能力推荐使用SDK调用，支持多种编程语言，调用时请选择AI类目为自学习（viapi-regen）的SDK包，文件参数通过SDK调用可支持本地文件及任意URL，具体可参见[SDK总览](~~145033~~)。',
            'extraInfo' => '## 错误码'."\n"
                .'关于启动服务的错误码，详情请参见[常见错误码](~~441239~~)。'."\n"
                ."\n"
                .'## 安全声明'."\n"
                .'- 请确保上传的图片或文件来源符合相应的法律法规。'."\n"
                .'- 通过体验调试上传的临时文件有效期为1小时，在24小时后会被系统自动清理删除。',
        ],
        'StartTrainTask' => [
            'methods' => [
                'post',
                'get',
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
                    'name' => 'Id',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '训练任务ID。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '68',
                    ],
                ],
                [
                    'name' => 'ForceStartFlag',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '是否跳过数据量校验强制开启任务。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                    ],
                ],
                [
                    'name' => 'RelyOnTaskId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '数据集标识。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '123',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '每个请求分配唯一的服务器请求ID。',
                                'type' => 'string',
                                'example' => 'E59736FC-B481-07AC-87B5-68F389477861',
                            ],
                            'Data' => [
                                'description' => '出参数据实体。',
                                'type' => 'object',
                                'properties' => [
                                    'Id' => [
                                        'description' => '训练任务ID。'."\n",
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '68',
                                    ],
                                    'CheckResult' => [
                                        'description' => '- **labelInfo**：标签分布情况。'."\n"
                                            .'- **labelName**：检查不符合规范的标签名称。'."\n"
                                            .'- **minCount**：标签的数量最低标准。'."\n"
                                            .'- **labelType**：图片数量、标注框数量、标注轮廓数量。',
                                        'type' => 'object',
                                        'example' => 'String	{\\"labelInfo\\":{\\"狗\\":1,\\"猫\\":59},\\"labelName\\":\\"[\\\\\\"狗\\\\\\"]\\",\\"labelType\\":\\"图片数量\\",\\"minCount\\":\\"20\\"}',
                                    ],
                                    'GmtCreate' => [
                                        'description' => '创建时间。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '1634106778000',
                                    ],
                                    'TaskName' => [
                                        'description' => '任务名称。',
                                        'type' => 'string',
                                        'example' => '训练任务名称',
                                    ],
                                    'Description' => [
                                        'description' => '任务描述。',
                                        'type' => 'string',
                                        'example' => '训练任务描述',
                                    ],
                                    'DatasetId' => [
                                        'description' => '数据集ID。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '120',
                                    ],
                                    'DatasetName' => [
                                        'description' => '数据集名称。',
                                        'type' => 'string',
                                        'example' => '猫狗数据集名称',
                                    ],
                                    'LabelId' => [
                                        'description' => '标注ID。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '228',
                                    ],
                                    'LabelName' => [
                                        'description' => '标注名称。',
                                        'type' => 'string',
                                        'example' => '猫狗数据集标注',
                                    ],
                                    'TrainMode' => [
                                        'description' => '训练模型。训练类型取值如下 ：'."\n"
                                            ."\n"
                                            .'- **COMMON**：均衡'."\n"
                                            .'- **HIGH_ACC**：高精度'."\n"
                                            .'- **HIGH_PERF**：高性能',
                                        'type' => 'string',
                                        'example' => 'COMMON',
                                    ],
                                    'TrainStatus' => [
                                        'description' => '训练状态。取值如下：'."\n"
                                            ."\n"
                                            .'- **INIT**：未训练'."\n"
                                            .'- **PREPARING**：准备中'."\n"
                                            .'- **TRAINING**：训练中'."\n"
                                            .'- **TRAIN_SUCCESS**：训练成功'."\n"
                                            .'- **TRAIN_FAIL**：训练失败',
                                        'type' => 'string',
                                        'example' => 'PREPARING',
                                    ],
                                    'ModelId' => [
                                        'description' => '模型ID。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '123',
                                    ],
                                    'ModelEffect' => [
                                        'description' => '模型效果。',
                                        'type' => 'string',
                                        'example' => '[{\\"id\\": \\"TOP1_ACC\\", \\"name\\": \\"top1准确率\\", \\"value\\": 100.0}, {\\"id\\": \\"TOP5_ACC\\", \\"name\\": \\"top5准确率\\", \\"value\\": 100.0}]',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"E59736FC-B481-07AC-87B5-68F389477861\\",\\n  \\"Data\\": {\\n    \\"Id\\": 68,\\n    \\"CheckResult\\": {\\n      \\"test\\": \\"test\\",\\n      \\"test2\\": 1\\n    },\\n    \\"GmtCreate\\": 1634106778000,\\n    \\"TaskName\\": \\"训练任务名称\\",\\n    \\"Description\\": \\"训练任务描述\\",\\n    \\"DatasetId\\": 120,\\n    \\"DatasetName\\": \\"猫狗数据集名称\\",\\n    \\"LabelId\\": 228,\\n    \\"LabelName\\": \\"猫狗数据集标注\\",\\n    \\"TrainMode\\": \\"COMMON\\",\\n    \\"TrainStatus\\": \\"PREPARING\\",\\n    \\"ModelId\\": 123,\\n    \\"ModelEffect\\": \\"[{\\\\\\\\\\\\\\"id\\\\\\\\\\\\\\": \\\\\\\\\\\\\\"TOP1_ACC\\\\\\\\\\\\\\", \\\\\\\\\\\\\\"name\\\\\\\\\\\\\\": \\\\\\\\\\\\\\"top1准确率\\\\\\\\\\\\\\", \\\\\\\\\\\\\\"value\\\\\\\\\\\\\\": 100.0}, {\\\\\\\\\\\\\\"id\\\\\\\\\\\\\\": \\\\\\\\\\\\\\"TOP5_ACC\\\\\\\\\\\\\\", \\\\\\\\\\\\\\"name\\\\\\\\\\\\\\": \\\\\\\\\\\\\\"top5准确率\\\\\\\\\\\\\\", \\\\\\\\\\\\\\"value\\\\\\\\\\\\\\": 100.0}]\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<StartTrainTaskResponse>\\n    <code>200</code>\\n    <data>\\n        <RequestId>13A5EFE4-D3A5-1E7C-A0C6-B1ECC71DB24A</RequestId>\\n        <Data>\\n            <CheckResult>{\\"labelInfo\\":{\\"狗\\":1,\\"猫\\":59},\\"labelName\\":\\"[\\\\\\"狗\\\\\\"]\\",\\"labelType\\":\\"图片数量\\",\\"minCount\\":\\"20\\"}</CheckResult>\\n        </Data>\\n        <Code>200</Code>\\n    </data>\\n    <httpStatusCode>200</httpStatusCode>\\n    <requestId>13A5EFE4-D3A5-1E7C-A0C6-B1ECC71DB24A</requestId>\\n    <successResponse>true</successResponse>\\n</StartTrainTaskResponse>","errorExample":""}]',
            'title' => '开启训练任务',
            'summary' => '开启训练任务StartTrainTask的语法及示例。',
            'description' => '## 功能描述'."\n"
                .'根据训练任务ID开启未训练的训练任务。'."\n"
                ."\n"
                .'> - 您可以进入[在线咨询](https://www.aliyun.com/core/online-consult?from=aZgW6LJHr2)获取在线人工帮助。'."\n"
                .'- 阿里云视觉智能开放平台视觉AI能力API接入、接口使用或问题咨询等，请通过钉钉群（23109592）加入阿里云视觉智能开放平台咨询群联系我们。'."\n"
                ."\n"
                .'## 接入指引'."\n"
                .'1. 注册阿里云账号：打开[阿里云官网](https://www.aliyun.com)，在阿里云官网右上角，单击**立即注册**，按照操作提示完成账号注册。'."\n"
                .'2. 开通能力：请确保您已开通自学习服务，若未开通服务请[立即开通](https://common-buy.aliyun.com/?commodityCode=viapi_selflearning_public_cn)。'."\n"
                .'3. 创建AccessKey：请确保您已[创建AccessKey](~~175144~~)，如果您使用的是子账号AccessKey，您需要给子账号赋予AliyunVIAPIFullAccess权限，具体操作，请参见[RAM授权](~~145025~~)。'."\n"
                .'4. 在线调试（可选）：您可以通过[OpenAPI Explorer](https://next.api.aliyun.com/api/viapi-regen/2021-11-19/StartTrainTask?lang=JAVA&sdkStyle=old)在线调试能力，查看完整的调用示例代码及SDK依赖信息，也可以下载完整的工程。'."\n"
                .'5. 开发接入步骤：    '."\n"
                .'- 在[SDK总览](~~145033~~)中选择您要接入使用的SDK语言。'."\n"
                .'- 在对应语言的SDK文档中找到AI类目为自学习（viapi-regen）类目的SDK包进行安装。'."\n"
                .'- 参考文档中提供的示例代码进行适当修改后调用。'."\n"
                ."\n"
                .'6. 客户端直接调用：该能力常用的客户端调用方式包括以下几种。'."\n"
                .'- [Web前端直接调用](~~467779~~)'."\n"
                .'- [小程序场景下直接调用](~~467780~~)'."\n"
                .'- [Android端直接调用](~~467781~~)'."\n"
                .'- [iOS端直接调用](~~467782~~)',
            'responseParamsDescription' => '## SDK参考'."\n"
                .'阿里云视觉AI自学习类目下的开启训练任务能力推荐使用SDK调用，支持多种编程语言，调用时请选择AI类目为自学习（viapi-regen）的SDK包，文件参数通过SDK调用可支持本地文件及任意URL，具体可参见[SDK总览](~~145033~~)。',
            'extraInfo' => '## 错误码'."\n"
                .'关于开启训练任务的错误码，详情请参见[常见错误码](~~441239~~)。'."\n"
                ."\n"
                .'## 安全声明'."\n"
                .'- 请确保上传的图片或文件来源符合相应的法律法规。'."\n"
                .'- 通过体验调试上传的临时文件有效期为1小时，在24小时后会被系统自动清理删除。',
        ],
        'StopService' => [
            'methods' => [
                'post',
                'get',
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
                    'name' => 'Id',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '服务ID，用来标识唯一服务。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '22',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '每个请求分配唯一的服务器请求ID。',
                                'type' => 'string',
                                'example' => '65D559AA-2E27-0597-9733-69810820E334',
                            ],
                            'Data' => [
                                'description' => '出参数据实体。',
                                'type' => 'object',
                                'properties' => [
                                    'Id' => [
                                        'description' => '服务ID。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '22',
                                    ],
                                    'GmtCreate' => [
                                        'description' => '创建时间。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '1626434355778',
                                    ],
                                    'ServiceName' => [
                                        'description' => '服务名称'."\n",
                                        'type' => 'string',
                                        'example' => 'AT服务测试',
                                    ],
                                    'ServiceDescription' => [
                                        'description' => '服务描述。',
                                        'type' => 'string',
                                        'example' => 'AT服务测试',
                                    ],
                                    'Status' => [
                                        'description' => '服务当前状态。取值如下：'."\n"
                                            ."\n"
                                            .'- INIT：未启动'."\n"
                                            .'- STARTING：启动中'."\n"
                                            .'- RUNNING：运行中'."\n"
                                            .'- START_FAIL：启动失败'."\n"
                                            .'- STOPPING：停止中',
                                        'type' => 'string',
                                        'example' => 'STOPPING',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"65D559AA-2E27-0597-9733-69810820E334\\",\\n  \\"Data\\": {\\n    \\"Id\\": 22,\\n    \\"GmtCreate\\": 1626434355778,\\n    \\"ServiceName\\": \\"AT服务测试\\",\\n    \\"ServiceDescription\\": \\"AT服务测试\\",\\n    \\"Status\\": \\"STOPPING\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<StopServiceResponse>\\n    <RequestId>65D559AA-2E27-0597-9733-69810820E334</RequestId>\\n    <Data>\\n        <Id>22</Id>\\n        <GmtCreate>1626434355778</GmtCreate>\\n        <ServiceName>AT服务测试</ServiceName>\\n        <ServiceDescription>AT服务测试</ServiceDescription>\\n        <Status>STOPPING</Status>\\n    </Data>\\n</StopServiceResponse>","errorExample":""}]',
            'title' => '停止服务',
            'summary' => '停止服务StopService的语法及示例。',
            'description' => '## 功能描述'."\n"
                .'通过服务ID，调用阿里云EAS接口，停止服务，并结算库存。'."\n"
                ."\n"
                .'> - 您可以进入[在线咨询](https://www.aliyun.com/core/online-consult?from=aZgW6LJHr2)获取在线人工帮助。'."\n"
                .'- 阿里云视觉智能开放平台视觉AI能力API接入、接口使用或问题咨询等，请通过钉钉群（23109592）加入阿里云视觉智能开放平台咨询群联系我们。'."\n"
                ."\n"
                .'## 接入指引'."\n"
                .'1. 注册阿里云账号：打开[阿里云官网](https://www.aliyun.com)，在阿里云官网右上角，单击**立即注册**，按照操作提示完成账号注册。'."\n"
                .'2. 开通能力：请确保您已开通自学习服务，若未开通服务请[立即开通](https://common-buy.aliyun.com/?commodityCode=viapi_selflearning_public_cn)。'."\n"
                .'3. 创建AccessKey：请确保您已[创建AccessKey](~~175144~~)，如果您使用的是子账号AccessKey，您需要给子账号赋予AliyunVIAPIFullAccess权限，具体操作，请参见[RAM授权](~~145025~~)。'."\n"
                .'4. 在线调试（可选）：您可以通过[OpenAPI Explorer](https://next.api.aliyun.com/api/viapi-regen/2021-11-19/StopService?lang=JAVA&sdkStyle=old)在线调试能力，查看完整的调用示例代码及SDK依赖信息，也可以下载完整的工程。'."\n"
                .'5. 开发接入步骤：   '."\n"
                .'- 在[SDK总览](~~145033~~)中选择您要接入使用的SDK语言。'."\n"
                .'- 在对应语言的SDK文档中找到AI类目为自学习（viapi-regen）类目的SDK包进行安装。'."\n"
                .'- 参考文档中提供的示例代码进行适当修改后调用。'."\n"
                ."\n"
                .'6. 客户端直接调用：该能力常用的客户端调用方式包括以下几种。'."\n"
                .'- [Web前端直接调用](~~467779~~)'."\n"
                .'- [小程序场景下直接调用](~~467780~~)'."\n"
                .'- [Android端直接调用](~~467781~~)'."\n"
                .'- [iOS端直接调用](~~467782~~)',
            'responseParamsDescription' => '## SDK参考'."\n"
                .'阿里云视觉AI自学习类目下的停止服务能力推荐使用SDK调用，支持多种编程语言，调用时请选择AI类目为自学习（viapi-regen）的SDK包，文件参数通过SDK调用可支持本地文件及任意URL，具体可参见[SDK总览](~~145033~~)。',
            'extraInfo' => '## 错误码'."\n"
                .'关于停止服务的错误码，详情请参见[常见错误码](~~441239~~)。'."\n"
                ."\n"
                .'## 安全声明'."\n"
                .'- 请确保上传的图片或文件来源符合相应的法律法规。'."\n"
                .'- 通过体验调试上传的临时文件有效期为1小时，在24小时后会被系统自动清理删除。',
        ],
        'StopTrainTask' => [
            'methods' => [
                'post',
                'get',
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
                    'name' => 'Id',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '训练任务ID。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '68',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '每个请求分配唯一的服务器请求ID。',
                                'type' => 'string',
                                'example' => 'E4CD2E3E-4484-08E7-9FBA-087D49FA95BD',
                            ],
                            'Data' => [
                                'description' => '出参数据实体。',
                                'type' => 'object',
                                'properties' => [
                                    'Id' => [
                                        'description' => '服务ID。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '68',
                                    ],
                                    'GmtCreate' => [
                                        'description' => '创建时间。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '1634106778000',
                                    ],
                                    'TaskName' => [
                                        'description' => '任务名称。',
                                        'type' => 'string',
                                        'example' => 'test3',
                                    ],
                                    'Description' => [
                                        'description' => '任务描述。',
                                        'type' => 'string',
                                        'example' => 'test3',
                                    ],
                                    'DatasetId' => [
                                        'description' => '数据集ID。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '120',
                                    ],
                                    'DatasetName' => [
                                        'description' => '数据集名称。',
                                        'type' => 'string',
                                        'example' => 'test1',
                                    ],
                                    'LabelId' => [
                                        'description' => '标注ID。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '228',
                                    ],
                                    'LabelName' => [
                                        'description' => '标注名称。',
                                        'type' => 'string',
                                        'example' => 'test3',
                                    ],
                                    'TrainMode' => [
                                        'description' => '训练模型。取值如下 ：'."\n"
                                            ."\n"
                                            .'- COMMON：均衡'."\n"
                                            ."\n"
                                            .'- HIGH_ACC：高精度'."\n"
                                            ."\n"
                                            .'- HIGH_PERF：高性能',
                                        'type' => 'string',
                                        'example' => 'COMMON',
                                    ],
                                    'TrainStatus' => [
                                        'description' => '训练状态。取值如下：'."\n"
                                            ."\n"
                                            .'- INIT：未训练'."\n"
                                            ."\n"
                                            .'- PREPARING：准备中'."\n"
                                            ."\n"
                                            .'- TRAINING：训练中'."\n"
                                            ."\n"
                                            .'- TRAIN_SUCCESS：训练成功'."\n"
                                            ."\n"
                                            .'- TRAIN_FAIL：训练失败',
                                        'type' => 'string',
                                        'example' => 'TRAIN_FAIL',
                                    ],
                                    'ModelId' => [
                                        'description' => '模型ID。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '123',
                                    ],
                                    'ModelEffect' => [
                                        'description' => '模型效果。',
                                        'type' => 'string',
                                        'example' => '[{"id": "TOP1_ACC", "name": "top1准确率", "value": 100.0}, {"id": "TOP5_ACC", "name": "top5准确率", "value": 100.0}]',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"E4CD2E3E-4484-08E7-9FBA-087D49FA95BD\\",\\n  \\"Data\\": {\\n    \\"Id\\": 68,\\n    \\"GmtCreate\\": 1634106778000,\\n    \\"TaskName\\": \\"test3\\",\\n    \\"Description\\": \\"test3\\",\\n    \\"DatasetId\\": 120,\\n    \\"DatasetName\\": \\"test1\\",\\n    \\"LabelId\\": 228,\\n    \\"LabelName\\": \\"test3\\",\\n    \\"TrainMode\\": \\"COMMON\\",\\n    \\"TrainStatus\\": \\"TRAIN_FAIL\\",\\n    \\"ModelId\\": 123,\\n    \\"ModelEffect\\": \\"[{\\\\\\"id\\\\\\": \\\\\\"TOP1_ACC\\\\\\", \\\\\\"name\\\\\\": \\\\\\"top1准确率\\\\\\", \\\\\\"value\\\\\\": 100.0}, {\\\\\\"id\\\\\\": \\\\\\"TOP5_ACC\\\\\\", \\\\\\"name\\\\\\": \\\\\\"top5准确率\\\\\\", \\\\\\"value\\\\\\": 100.0}]\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<StopTrainTaskResponse>\\n    <RequestId>E4CD2E3E-4484-08E7-9FBA-087D49FA95BD</RequestId>\\n    <Data>\\n        <Id>68</Id>\\n        <GmtCreate>1634106778000</GmtCreate>\\n        <TaskName>test3</TaskName>\\n        <Description>test3</Description>\\n        <DatasetId>120</DatasetId>\\n        <DatasetName>test1</DatasetName>\\n        <LabelId>228</LabelId>\\n        <LabelName>test3</LabelName>\\n        <TrainMode>COMMON</TrainMode>\\n        <TrainStatus>TRAIN_FAIL</TrainStatus>\\n        <ModelId>123</ModelId>\\n        <ModelEffect>[{\\"id\\": \\"TOP1_ACC\\", \\"name\\": \\"top1准确率\\", \\"value\\": 100.0}, {\\"id\\": \\"TOP5_ACC\\", \\"name\\": \\"top5准确率\\", \\"value\\": 100.0}]</ModelEffect>\\n    </Data>\\n</StopTrainTaskResponse>","errorExample":""}]',
            'title' => '停止训练任务接口',
            'summary' => '停止训练任务接口StopTrainTask的语法及示例。',
            'description' => '## 功能描述'."\n"
                .'根据训练任务ID停止正在训练中的训练任务。'."\n"
                ."\n"
                .'> - 您可以进入[在线咨询](https://www.aliyun.com/core/online-consult?from=aZgW6LJHr2)获取在线人工帮助。'."\n"
                .'- 阿里云视觉智能开放平台视觉AI能力API接入、接口使用或问题咨询等，请通过钉钉群（23109592）加入阿里云视觉智能开放平台咨询群联系我们。'."\n"
                ."\n"
                .'## 接入指引'."\n"
                .'1. 注册阿里云账号：打开[阿里云官网](https://www.aliyun.com)，在阿里云官网右上角，单击**立即注册**，按照操作提示完成账号注册。'."\n"
                .'2. 开通能力：请确保您已开通自学习服务，若未开通服务请[立即开通](https://common-buy.aliyun.com/?commodityCode=viapi_selflearning_public_cn)。'."\n"
                .'3. 创建AccessKey：请确保您已[创建AccessKey](~~175144~~)，如果您使用的是子账号AccessKey，您需要给子账号赋予AliyunVIAPIFullAccess权限，具体操作，请参见[RAM授权](~~145025~~)。'."\n"
                .'4. 在线调试（可选）：您可以通过[OpenAPI Explorer](https://next.api.aliyun.com/api/viapi-regen/2021-11-19/StopTrainTask?lang=JAVA&sdkStyle=old)在线调试能力，查看完整的调用示例代码及SDK依赖信息，也可以下载完整的工程。'."\n"
                ."\n"
                .'5. 开发接入步骤：    '."\n"
                .'- 在[SDK总览](~~145033~~)中选择您要接入使用的SDK语言。'."\n"
                .'- 在对应语言的SDK文档中找到AI类目为自学习（viapi-regen）类目的SDK包进行安装。'."\n"
                .'- 参考文档中提供的示例代码进行适当修改后调用。'."\n"
                ."\n"
                .'6. 客户端直接调用：该能力常用的客户端调用方式包括以下几种。'."\n"
                .'- [Web前端直接调用](~~467779~~)'."\n"
                .'- [小程序场景下直接调用](~~467780~~)'."\n"
                .'- [Android端直接调用](~~467781~~)'."\n"
                .'- [iOS端直接调用](~~467782~~)',
            'responseParamsDescription' => '## SDK参考'."\n"
                .'阿里云视觉AI自学习类目下的停止训练任务接口能力推荐使用SDK调用，支持多种编程语言，调用时请选择AI类目为自学习（viapi-regen）的SDK包，文件参数通过SDK调用可支持本地文件及任意URL，具体可参见[SDK总览](~~145033~~)。',
            'extraInfo' => '## 错误码'."\n"
                .'关于停止训练任务的错误码，详情请参见[常见错误码](~~441239~~)。'."\n"
                ."\n"
                .'## 安全声明'."\n"
                .'- 请确保上传的图片或文件来源符合相应的法律法规。'."\n"
                .'- 通过体验调试上传的临时文件有效期为1小时，在24小时后会被系统自动清理删除。',
        ],
        'UpdateDataset' => [
            'methods' => [
                'post',
                'get',
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
                    'name' => 'Id',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '数据集ID。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '120',
                    ],
                ],
                [
                    'name' => 'Name',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '数据集名称。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'test1',
                    ],
                ],
                [
                    'name' => 'Description',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '数据集描述。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'test12',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '每个请求分配唯一的服务器请求ID。',
                                'type' => 'string',
                                'example' => '2F7B883D-2BBD-0600-B3F4-25D11957E449',
                            ],
                            'Data' => [
                                'description' => '出参数据实体。',
                                'type' => 'object',
                                'properties' => [
                                    'Id' => [
                                        'description' => '数据集ID。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '120',
                                    ],
                                    'GmtCreate' => [
                                        'description' => '创建时间。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '1631762186000',
                                    ],
                                    'Name' => [
                                        'description' => '数据集名称。',
                                        'type' => 'string',
                                        'example' => 'test1',
                                    ],
                                    'Description' => [
                                        'description' => '数据集描述。',
                                        'type' => 'string',
                                        'example' => 'test12',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"2F7B883D-2BBD-0600-B3F4-25D11957E449\\",\\n  \\"Data\\": {\\n    \\"Id\\": 120,\\n    \\"GmtCreate\\": 1631762186000,\\n    \\"Name\\": \\"test1\\",\\n    \\"Description\\": \\"test12\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<UpdateDatasetResponse>\\n    <RequestId>2F7B883D-2BBD-0600-B3F4-25D11957E449</RequestId>\\n    <Data>\\n        <Id>120</Id>\\n        <GmtCreate>1631762186000</GmtCreate>\\n        <Name>test1</Name>\\n        <Description>test12</Description>\\n    </Data>\\n</UpdateDatasetResponse>","errorExample":""}]',
            'title' => '更新数据集',
            'summary' => '更新数据集UpdateDataset的语法及示例。',
            'description' => '## 功能描述'."\n"
                .'根据数据集ID更新数据集的名称和描述。'."\n"
                ."\n"
                .'> - 您可以进入[在线咨询](https://www.aliyun.com/core/online-consult?from=aZgW6LJHr2)获取在线人工帮助。'."\n"
                .'- 阿里云视觉智能开放平台视觉AI能力API接入、接口使用或问题咨询等，请通过钉钉群（23109592）加入阿里云视觉智能开放平台咨询群联系我们。'."\n"
                ."\n"
                .'## 接入指引'."\n"
                .'1. 注册阿里云账号：打开[阿里云官网](https://www.aliyun.com)，在阿里云官网右上角，单击**立即注册**，按照操作提示完成账号注册。'."\n"
                .'2. 开通能力：请确保您已开通自学习服务，若未开通服务请[立即开通](https://common-buy.aliyun.com/?commodityCode=viapi_selflearning_public_cn)。'."\n"
                .'3. 创建AccessKey：请确保您已[创建AccessKey](~~175144~~)，如果您使用的是子账号AccessKey，您需要给子账号赋予AliyunVIAPIFullAccess权限，具体操作，请参见[RAM授权](~~145025~~)。'."\n"
                .'4. 在线调试（可选）：您可以通过[OpenAPI Explorer](https://next.api.aliyun.com/api/viapi-regen/2021-11-19/UpdateDataset?lang=JAVA&sdkStyle=old)在线调试能力，查看完整的调用示例代码及SDK依赖信息，也可以下载完整的工程。'."\n"
                .'5. 开发接入步骤：    '."\n"
                .'- 在[SDK总览](~~145033~~)中选择您要接入使用的SDK语言。'."\n"
                .'- 在对应语言的SDK文档中找到AI类目为自学习（viapi-regen）类目的SDK包进行安装。'."\n"
                .'- 参考文档中提供的示例代码进行适当修改后调用。'."\n"
                ."\n"
                .'6. 客户端直接调用：该能力常用的客户端调用方式包括以下几种。'."\n"
                .'- [Web前端直接调用](~~467779~~)'."\n"
                .'- [小程序场景下直接调用](~~467780~~)'."\n"
                .'- [Android端直接调用](~~467781~~)'."\n"
                .'- [iOS端直接调用](~~467782~~)',
            'responseParamsDescription' => '## SDK参考'."\n"
                .'阿里云视觉AI自学习类目下的更新数据集能力推荐使用SDK调用，支持多种编程语言，调用时请选择AI类目为自学习（viapi-regen）的SDK包，文件参数通过SDK调用可支持本地文件及任意URL，具体可参见[SDK总览](~~145033~~)。',
            'extraInfo' => '## 错误码'."\n"
                .'关于更新数据集的错误码，详情请参见[常见错误码](~~441239~~)。'."\n"
                .'## 安全声明'."\n"
                .'- 请确保上传的图片或文件来源符合相应的法律法规。'."\n"
                .'- 通过体验调试上传的临时文件有效期为1小时，在24小时后会被系统自动清理删除。',
        ],
        'UpdateLabelset' => [
            'methods' => [
                'post',
                'get',
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
                    'name' => 'Id',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '标注集ID。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '188',
                    ],
                ],
                [
                    'name' => 'Name',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '标注集名称。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'test2',
                    ],
                ],
                [
                    'name' => 'UserOssUrl',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '用户标注文件OSS的路径。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'oss://regen-test-bucket/jhdtest/分割/标注/label.csv',
                    ],
                ],
                [
                    'name' => 'Description',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '标注集描述。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'test2',
                    ],
                ],
                [
                    'name' => 'ObjectKey',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '文件路径。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'jhdtest/分割/标注/label.csv',
                    ],
                ],
                [
                    'name' => 'TagUserList',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '需要更新打标人时，使用标注系统进行标注，仅在`LabelType=USE_LABEL_SYSTEM`下生效。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '["123123434341","3423423424324"]',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '每个请求分配唯一的服务器请求ID。',
                                'type' => 'string',
                                'example' => '0F4A8D73-BC91-0DFA-91D1-77083C4DB14F',
                            ],
                            'Data' => [
                                'description' => '出参数据实体。',
                                'type' => 'object',
                                'properties' => [
                                    'Id' => [
                                        'description' => '标注集ID。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '188',
                                    ],
                                    'GmtCreate' => [
                                        'description' => '创建时间。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '1633745786000',
                                    ],
                                    'Name' => [
                                        'description' => '标注名称。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => 'test2',
                                    ],
                                    'Description' => [
                                        'description' => '标注描述。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => 'test2',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"0F4A8D73-BC91-0DFA-91D1-77083C4DB14F\\",\\n  \\"Data\\": {\\n    \\"Id\\": 188,\\n    \\"GmtCreate\\": 1633745786000,\\n    \\"Name\\": 0,\\n    \\"Description\\": 0\\n  }\\n}","errorExample":""},{"type":"xml","example":"<UpdateLabelsetResponse>\\n    <RequestId>0F4A8D73-BC91-0DFA-91D1-77083C4DB14F</RequestId>\\n    <Data>\\n        <Description>test2</Description>\\n        <Id>188</Id>\\n        <Name>test2</Name>\\n        <GmtCreate>1633745786000</GmtCreate>\\n    </Data>\\n</UpdateLabelsetResponse>","errorExample":""}]',
            'title' => '更新标注集',
            'summary' => '更新标注集UpdateLabelset的语法及示例。',
            'description' => '## 功能描述'."\n"
                .'根据标注集ID更新标注集的名称和描述。'."\n"
                ."\n"
                .'> - 您可以进入[在线咨询](https://www.aliyun.com/core/online-consult?from=aZgW6LJHr2)获取在线人工帮助。'."\n"
                .'- 阿里云视觉智能开放平台视觉AI能力API接入、接口使用或问题咨询等，请通过钉钉群（23109592）加入阿里云视觉智能开放平台咨询群联系我们。'."\n"
                ."\n"
                .'## 接入指引'."\n"
                .'1. 注册阿里云账号：打开[阿里云官网](https://www.aliyun.com)，在阿里云官网右上角，单击**立即注册**，按照操作提示完成账号注册。'."\n"
                .'2. 开通能力：请确保您已开通自学习服务，若未开通服务请[立即开通](https://common-buy.aliyun.com/?commodityCode=viapi_selflearning_public_cn)。'."\n"
                .'3. 创建AccessKey：请确保您已[创建AccessKey](~~175144~~)，如果您使用的是子账号AccessKey，您需要给子账号赋予AliyunVIAPIFullAccess权限，具体操作，请参见[RAM授权](~~145025~~)。'."\n"
                .'4. 在线调试（可选）：您可以通过[OpenAPI Explorer](https://next.api.aliyun.com/api/viapi-regen/2021-11-19/UpdateLabelset?lang=JAVA&sdkStyle=old)在线调试能力，查看完整的调用示例代码及SDK依赖信息，也可以下载完整的工程。'."\n"
                ."\n"
                .'5. 开发接入步骤：    '."\n"
                .'- 在[SDK总览](~~145033~~)中选择您要接入使用的SDK语言。'."\n"
                .'- 在对应语言的SDK文档中找到AI类目为自学习（viapi-regen）类目的SDK包进行安装。'."\n"
                .'- 参考文档中提供的示例代码进行适当修改后调用。'."\n"
                ."\n"
                .'6. 客户端直接调用：该能力常用的客户端调用方式包括以下几种。'."\n"
                .'- [Web前端直接调用](~~467779~~)'."\n"
                .'- [小程序场景下直接调用](~~467780~~)'."\n"
                .'- [Android端直接调用](~~467781~~)'."\n"
                .'- [iOS端直接调用](~~467782~~)',
            'responseParamsDescription' => '## SDK参考'."\n"
                .'阿里云视觉AI自学习类目下的更新标注集能力推荐使用SDK调用，支持多种编程语言，调用时请选择AI类目为自学习（viapi-regen）的SDK包，文件参数通过SDK调用可支持本地文件及任意URL，具体可参见[SDK总览](~~145033~~)。',
            'extraInfo' => '## 错误码'."\n"
                .'关于更新标注集的错误码，详情请参见[常见错误码](~~441239~~)。'."\n"
                .'## 安全声明'."\n"
                .'- 请确保上传的图片或文件来源符合相应的法律法规。'."\n"
                .'- 通过体验调试上传的临时文件有效期为1小时，在24小时后会被系统自动清理删除。',
        ],
        'UpdateService' => [
            'methods' => [
                'post',
                'get',
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
                    'name' => 'Id',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '服务ID，用以标识唯一服务。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '28',
                    ],
                ],
                [
                    'name' => 'Name',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '服务名称。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'test3',
                    ],
                ],
                [
                    'name' => 'Description',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '服务描述。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'test3描述',
                    ],
                ],
                [
                    'name' => 'AuthorizationType',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '授权类型。取值：'."\n"
                            ."\n"
                            .'- PUBLIC：指当前服务可被任何账号调用访问。'."\n"
                            .'- DESIGNATED_ACCOUNT：指当前服务只能被指定的账户访问。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'DESIGNATED_ACCOUNT',
                    ],
                ],
                [
                    'name' => 'AuthorizedAccount',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '授权账号，可以指定允许访问当前服务的账户。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '1716735326807772,1219984605228589',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '每个请求分配唯一的服务器请求ID。',
                                'type' => 'string',
                                'example' => '9982B171-4B2D-08B8-8C54-CDA8550D1742',
                            ],
                            'Data' => [
                                'description' => '出参数据实体。',
                                'type' => 'object',
                                'properties' => [
                                    'Id' => [
                                        'description' => '服务ID。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '28',
                                    ],
                                    'GmtCreate' => [
                                        'description' => '创建时间。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '1634106777620',
                                    ],
                                    'ServiceName' => [
                                        'description' => '服务名称。',
                                        'type' => 'string',
                                        'example' => 'test3',
                                    ],
                                    'ServiceDescription' => [
                                        'description' => '服务描述。',
                                        'type' => 'string',
                                        'example' => 'test3描述',
                                    ],
                                    'AuthorizationType' => [
                                        'description' => '授权类型。取值：'."\n"
                                            ."\n"
                                            .'- PUBLIC：指当前服务可被任何账号调用访问。'."\n"
                                            .'- DESIGNATED_ACCOUNT：指当前服务只能被指定的账户访问。',
                                        'type' => 'string',
                                        'example' => 'DESIGNATED_ACCOUNT',
                                    ],
                                    'AuthorizedAccount' => [
                                        'description' => '授权账号。',
                                        'type' => 'string',
                                        'example' => '1716735326807772,1219984605228589',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"9982B171-4B2D-08B8-8C54-CDA8550D1742\\",\\n  \\"Data\\": {\\n    \\"Id\\": 28,\\n    \\"GmtCreate\\": 1634106777620,\\n    \\"ServiceName\\": \\"test3\\",\\n    \\"ServiceDescription\\": \\"test3描述\\",\\n    \\"AuthorizationType\\": \\"DESIGNATED_ACCOUNT\\",\\n    \\"AuthorizedAccount\\": \\"1716735326807772,1219984605228589\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<UpdateServiceResponse>\\n    <RequestId>9982B171-4B2D-08B8-8C54-CDA8550D1742</RequestId>\\n    <Data>\\n        <Id>28</Id>\\n        <GmtCreate>1634106777620</GmtCreate>\\n        <ServiceName>test3</ServiceName>\\n        <ServiceDescription>test3描述</ServiceDescription>\\n        <AuthorizationType>DESIGNATED_ACCOUNT</AuthorizationType>\\n        <AuthorizedAccount>1716735326807772,1219984605228589</AuthorizedAccount>\\n    </Data>\\n</UpdateServiceResponse>","errorExample":""}]',
            'title' => '更新服务',
            'summary' => '更新服务UpdateService的语法及示例。',
            'description' => '## 功能描述'."\n"
                .'根据服务ID修改对应服务名称。'."\n"
                ."\n"
                .'> - 您可以进入[在线咨询](https://www.aliyun.com/core/online-consult?from=aZgW6LJHr2)获取在线人工帮助。'."\n"
                .'- 阿里云视觉智能开放平台视觉AI能力API接入、接口使用或问题咨询等，请通过钉钉群（23109592）加入阿里云视觉智能开放平台咨询群联系我们。'."\n"
                ."\n"
                .'## 接入指引'."\n"
                .'1. 注册阿里云账号：打开[阿里云官网](https://www.aliyun.com)，在阿里云官网右上角，单击**立即注册**，按照操作提示完成账号注册。'."\n"
                .'2. 开通能力：请确保您已开通自学习服务，若未开通服务请[立即开通](https://common-buy.aliyun.com/?commodityCode=viapi_selflearning_public_cn)。'."\n"
                .'3. 创建AccessKey：请确保您已[创建AccessKey](~~175144~~)，如果您使用的是子账号AccessKey，您需要给子账号赋予AliyunVIAPIFullAccess权限，具体操作，请参见[RAM授权](~~145025~~)。'."\n"
                .'4. 在线调试（可选）：您可以通过[OpenAPI Explorer](https://next.api.aliyun.com/api/viapi-regen/2021-11-19/UpdateService?lang=JAVA&sdkStyle=old)在线调试能力，查看完整的调用示例代码及SDK依赖信息，也可以下载完整的工程。'."\n"
                ."\n"
                .'5. 开发接入步骤：    '."\n"
                .'- 在[SDK总览](~~145033~~)中选择您要接入使用的SDK语言。'."\n"
                .'- 在对应语言的SDK文档中找到AI类目为自学习（viapi-regen）类目的SDK包进行安装。'."\n"
                .'- 参考文档中提供的示例代码进行适当修改后调用。'."\n"
                ."\n"
                .'6. 客户端直接调用：该能力常用的客户端调用方式包括以下几种。'."\n"
                .'- [Web前端直接调用](~~467779~~)'."\n"
                .'- [小程序场景下直接调用](~~467780~~)'."\n"
                .'- [Android端直接调用](~~467781~~)'."\n"
                .'- [iOS端直接调用](~~467782~~)',
            'responseParamsDescription' => '## SDK参考'."\n"
                .'阿里云视觉AI自学习类目下的更新服务能力推荐使用SDK调用，支持多种编程语言，调用时请选择AI类目为自学习（viapi-regen）的SDK包，文件参数通过SDK调用可支持本地文件及任意URL，具体可参见[SDK总览](~~145033~~)。',
            'extraInfo' => '## 错误码'."\n"
                .'关于更新服务的错误码，详情请参见[常见错误码](~~441239~~)。'."\n"
                ."\n"
                .'## 安全声明'."\n"
                .'- 请确保上传的图片或文件来源符合相应的法律法规。'."\n"
                .'- 通过体验调试上传的临时文件有效期为1小时，在24小时后会被系统自动清理删除。',
        ],
        'UpdateTrainTask' => [
            'methods' => [
                'post',
                'get',
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
                    'name' => 'Id',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '训练任务ID。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '43',
                    ],
                ],
                [
                    'name' => 'Name',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '训练任务名称。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'test1',
                    ],
                ],
                [
                    'name' => 'DatasetIds',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '多训练集数据集ID的集合。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '558,549',
                    ],
                ],
                [
                    'name' => 'LabelIds',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '多训练集标注集ID的集合。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '971,955',
                    ],
                ],
                [
                    'name' => 'PreTrainTaskId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '基于之前的训练任务ID。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '456',
                    ],
                ],
                [
                    'name' => 'PreTrainTaskFlag',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '是否基于之前的训练任务。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                    ],
                ],
                [
                    'name' => 'Description',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '训练任务描述。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'test1',
                    ],
                ],
                [
                    'name' => 'TrainMode',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '训练模型。取值如下 ：'."\n"
                            ."\n"
                            .'- **COMMON**：均衡'."\n"
                            .'- **HIGH_ACC**：高精度'."\n"
                            .'- **HIGH_PERF**：高性能',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'COMMON,HIGH_ACC,HIGH_PERF',
                    ],
                ],
                [
                    'name' => 'AdvancedParameters',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '- **Epoch**：学习轮数'."\n"
                            .'- **Lr**：学习率'."\n"
                            .'- **height**：图片高'."\n"
                            .'- **width**：图片宽'."\n"
                            .'- **ValidationDatasetId**：验证数据集ID'."\n"
                            .'- **ValidationLabelId**：验证标注集ID'."\n"
                            .'- **TestDatasetId**：测试数据集ID'."\n"
                            .'- **TestLabelId**：测试标注集ID',
                        'type' => 'string',
                        'required' => false,
                        'example' => '{ "Epoch": 23, "Lr": 0.5, "height": "23", "width": "32", "ValidationDatasetId": 948, "ValidationLabelId": 1266, "TestDatasetId": 948, "TestLabelId": 1266 }',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '每个请求分配唯一的服务器请求ID。',
                                'type' => 'string',
                                'example' => '6CED723E-067B-040A-A14F-59B2D9283E9B',
                            ],
                            'Data' => [
                                'description' => '出参数据实体。',
                                'type' => 'object',
                                'properties' => [
                                    'Id' => [
                                        'description' => '训练任务ID。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '43',
                                    ],
                                    'GmtCreate' => [
                                        'description' => '创建时间。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '1631762402000',
                                    ],
                                    'TaskName' => [
                                        'description' => '任务名称。',
                                        'type' => 'string',
                                        'example' => 'test1',
                                    ],
                                    'Description' => [
                                        'description' => '任务描述。',
                                        'type' => 'string',
                                        'example' => 'test1',
                                    ],
                                    'DatasetId' => [
                                        'description' => '数据集ID。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '120',
                                    ],
                                    'DatasetName' => [
                                        'description' => '数据集名称。',
                                        'type' => 'string',
                                        'example' => 'test1',
                                    ],
                                    'LabelId' => [
                                        'description' => '标注ID。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '188',
                                    ],
                                    'LabelName' => [
                                        'description' => '标注名字。',
                                        'type' => 'string',
                                        'example' => 'test2',
                                    ],
                                    'TrainMode' => [
                                        'description' => '训练模型。取值如下 ：'."\n"
                                            ."\n"
                                            .'- **COMMON**：均衡'."\n"
                                            .'- **HIGH_ACC**：高精度'."\n"
                                            .'- **HIGH_PERF**：高性能',
                                        'type' => 'string',
                                        'example' => 'COMMON',
                                    ],
                                    'AdvancedParameters' => [
                                        'description' => '- **Epoch**：学习轮数'."\n"
                                            .'- **Lr**：学习率'."\n"
                                            .'- **height**：图片高'."\n"
                                            .'- **width**：图片宽'."\n"
                                            .'- **ValidationDatasetId**：验证数据集ID'."\n"
                                            .'- **ValidationLabelId**：验证标注集ID'."\n"
                                            .'- **TestDatasetId**：测试数据集ID'."\n"
                                            .'- **TestLabelId**：测试标注集ID',
                                        'type' => 'string',
                                        'example' => '{\\"TestLabelId\\":1266,\\"TestDatasetId\\":948,\\"Lr\\":0.5,\\"width\\":\\"32\\",\\"ValidationLabelId\\":1266,\\"Epoch\\":23,\\"ValidationDatasetId\\":948,\\"height\\":\\"23\\"}',
                                    ],
                                    'TrainStatus' => [
                                        'description' => '训练状态。取值如下：'."\n"
                                            ."\n"
                                            .'- **INIT**：未训练'."\n"
                                            .'- **PREPARING**：准备中'."\n"
                                            .'- **TRAINING**：训练中'."\n"
                                            .'- **TRAIN_SUCCESS**：训练成功'."\n"
                                            .'- **TRAIN_FAIL**：训练失败',
                                        'type' => 'string',
                                        'example' => 'TRAIN_SUCCESS',
                                    ],
                                    'ModelId' => [
                                        'description' => '模型ID。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '14',
                                    ],
                                    'ModelEffect' => [
                                        'description' => '模型效果。',
                                        'type' => 'string',
                                        'example' => '[{"id": "TOP1_ACC", "name": "top1准确率", "value": 100.0}, {"id": "TOP5_ACC", "name": "top5准确率", "value": 100.0}]',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"6CED723E-067B-040A-A14F-59B2D9283E9B\\",\\n  \\"Data\\": {\\n    \\"Id\\": 43,\\n    \\"GmtCreate\\": 1631762402000,\\n    \\"TaskName\\": \\"test1\\",\\n    \\"Description\\": \\"test1\\",\\n    \\"DatasetId\\": 120,\\n    \\"DatasetName\\": \\"test1\\",\\n    \\"LabelId\\": 188,\\n    \\"LabelName\\": \\"test2\\",\\n    \\"TrainMode\\": \\"COMMON\\",\\n    \\"AdvancedParameters\\": \\"{\\\\\\\\\\\\\\"TestLabelId\\\\\\\\\\\\\\":1266,\\\\\\\\\\\\\\"TestDatasetId\\\\\\\\\\\\\\":948,\\\\\\\\\\\\\\"Lr\\\\\\\\\\\\\\":0.5,\\\\\\\\\\\\\\"width\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"32\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"ValidationLabelId\\\\\\\\\\\\\\":1266,\\\\\\\\\\\\\\"Epoch\\\\\\\\\\\\\\":23,\\\\\\\\\\\\\\"ValidationDatasetId\\\\\\\\\\\\\\":948,\\\\\\\\\\\\\\"height\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"23\\\\\\\\\\\\\\"}\\",\\n    \\"TrainStatus\\": \\"TRAIN_SUCCESS\\",\\n    \\"ModelId\\": 14,\\n    \\"ModelEffect\\": \\"[{\\\\\\"id\\\\\\": \\\\\\"TOP1_ACC\\\\\\", \\\\\\"name\\\\\\": \\\\\\"top1准确率\\\\\\", \\\\\\"value\\\\\\": 100.0}, {\\\\\\"id\\\\\\": \\\\\\"TOP5_ACC\\\\\\", \\\\\\"name\\\\\\": \\\\\\"top5准确率\\\\\\", \\\\\\"value\\\\\\": 100.0}]\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<UpdateTrainTaskResponse>\\n    <RequestId>6CED723E-067B-040A-A14F-59B2D9283E9B</RequestId>\\n    <Data>\\n        <Id>43</Id>\\n        <GmtCreate>1631762402000</GmtCreate>\\n        <TaskName>test1</TaskName>\\n        <Description>test1</Description>\\n        <DatasetId>120</DatasetId>\\n        <DatasetName>test1</DatasetName>\\n        <LabelId>188</LabelId>\\n        <LabelName>test2</LabelName>\\n        <TrainMode>COMMON</TrainMode>\\n        <TrainStatus>TRAIN_SUCCESS</TrainStatus>\\n        <AdvancedParameters>{\\"TestLabelId\\":1266,\\"TestDatasetId\\":948,\\"Lr\\":0.5,\\"width\\":\\"32\\",\\"ValidationLabelId\\":1266,\\"Epoch\\":23,\\"ValidationDatasetId\\":948,\\"height\\":\\"23\\"}</AdvancedParameters>\\n        <ModelId>14</ModelId>\\n        <ModelEffect>[{\\"id\\": \\"TOP1_ACC\\", \\"name\\": \\"top1准确率\\", \\"value\\": 100.0}, {\\"id\\": \\"TOP5_ACC\\", \\"name\\": \\"top5准确率\\", \\"value\\": 100.0}]</ModelEffect>\\n    </Data>\\n</UpdateTrainTaskResponse>","errorExample":""}]',
            'title' => '更新训练任务',
            'summary' => '更新训练任务UpdateTrainTask的语法及示例。',
            'description' => '## 功能描述'."\n"
                .'根据训练任务ID更新对应训练任务的名称、描述、以及高级参数。'."\n"
                ."\n"
                .'> - 您可以进入[在线咨询](https://www.aliyun.com/core/online-consult?from=aZgW6LJHr2)获取在线人工帮助。'."\n"
                .'- 阿里云视觉智能开放平台视觉AI能力API接入、接口使用或问题咨询等，请通过钉钉群（23109592）加入阿里云视觉智能开放平台咨询群联系我们。'."\n"
                ."\n"
                .'## 接入指引'."\n"
                .'1. 注册阿里云账号：打开[阿里云官网](https://www.aliyun.com)，在阿里云官网右上角，单击**立即注册**，按照操作提示完成账号注册。'."\n"
                .'2. 开通能力：请确保您已开通自学习服务，若未开通服务请[立即开通](https://common-buy.aliyun.com/?commodityCode=viapi_selflearning_public_cn)。'."\n"
                .'3. 创建AccessKey：请确保您已[创建AccessKey](~~175144~~)，如果您使用的是子账号AccessKey，您需要给子账号赋予AliyunVIAPIFullAccess权限，具体操作，请参见[RAM授权](~~145025~~)。'."\n"
                .'4. 在线调试（可选）：您可以通过[OpenAPI Explorer](https://next.api.aliyun.com/api/viapi-regen/2021-11-19/UpdateTrainTask?lang=JAVA&sdkStyle=old)在线调试能力，查看完整的调用示例代码及SDK依赖信息，也可以下载完整的工程。'."\n"
                .'5. 开发接入步骤：    '."\n"
                .'- 在[SDK总览](~~145033~~)中选择您要接入使用的SDK语言。'."\n"
                .'- 在对应语言的SDK文档中找到AI类目为自学习（viapi-regen）类目的SDK包进行安装。'."\n"
                .'- 参考文档中提供的示例代码进行适当修改后调用。'."\n"
                ."\n"
                .'6. 客户端直接调用：该能力常用的客户端调用方式包括以下几种。'."\n"
                .'- [Web前端直接调用](~~467779~~)'."\n"
                .'- [小程序场景下直接调用](~~467780~~)'."\n"
                .'- [Android端直接调用](~~467781~~)'."\n"
                .'- [iOS端直接调用](~~467782~~)',
            'responseParamsDescription' => '## SDK参考'."\n"
                .'阿里云视觉AI自学习类目下的更新训练任务能力推荐使用SDK调用，支持多种编程语言，调用时请选择AI类目为自学习（viapi-regen）的SDK包，文件参数通过SDK调用可支持本地文件及任意URL，具体可参见[SDK总览](~~145033~~)。',
            'extraInfo' => '## 错误码'."\n"
                .'关于更新训练任务的错误码，详情请参见[常见错误码](~~441239~~)。'."\n"
                ."\n"
                .'## 安全声明'."\n"
                .'- 请确保上传的图片或文件来源符合相应的法律法规。'."\n"
                .'- 通过体验调试上传的临时文件有效期为1小时，在24小时后会被系统自动清理删除。',
        ],
        'UpdateWorkspace' => [
            'methods' => [
                'post',
                'get',
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
                    'name' => 'Id',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '生产空间ID。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '78',
                    ],
                ],
                [
                    'name' => 'Name',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '生产空间名称。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'WYQTEST',
                    ],
                ],
                [
                    'name' => 'Description',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '生产空间描述。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'WYQTEST描述',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '每个请求分配唯一的服务器请求ID。',
                                'type' => 'string',
                                'example' => '55927643-E937-038B-819F-77BD3DE7FB79',
                            ],
                            'Data' => [
                                'description' => '出参数据实体。',
                                'type' => 'object',
                                'properties' => [
                                    'Id' => [
                                        'description' => '生产空间ID。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '78',
                                    ],
                                    'GmtCreate' => [
                                        'description' => '创建时间。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '1634262448874',
                                    ],
                                    'Name' => [
                                        'description' => '生产空间名称。',
                                        'type' => 'string',
                                        'example' => 'WYQTEST',
                                    ],
                                    'Description' => [
                                        'description' => '生产空间描述。',
                                        'type' => 'string',
                                        'example' => 'WYQTEST描述',
                                    ],
                                    'Type' => [
                                        'description' => '生产空间类型。类型取值如下：'."\n"
                                            ."\n"
                                            .'- COMMON_CLASSIFY：通用分类'."\n"
                                            .'- COMMON_DETECT：通用检测'."\n"
                                            .'- COMMON_INSTANCE_SEGMENT：通用实例分割',
                                        'type' => 'string',
                                        'example' => 'COMMON_CLASSIFY',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"55927643-E937-038B-819F-77BD3DE7FB79\\",\\n  \\"Data\\": {\\n    \\"Id\\": 78,\\n    \\"GmtCreate\\": 1634262448874,\\n    \\"Name\\": \\"WYQTEST\\",\\n    \\"Description\\": \\"WYQTEST描述\\",\\n    \\"Type\\": \\"COMMON_CLASSIFY\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<UpdateWorkspaceResponse>\\n    <RequestId>55927643-E937-038B-819F-77BD3DE7FB79</RequestId>\\n    <Data>\\n        <Id>78</Id>\\n        <GmtCreate>1634262448874</GmtCreate>\\n        <Name>WYQTEST</Name>\\n        <Description>WYQTEST描述</Description>\\n        <Type>COMMON_CLASSIFY</Type>\\n    </Data>\\n</UpdateWorkspaceResponse>","errorExample":""}]',
            'title' => '更新生产空间',
            'summary' => '更新生产空间UpdateWorkspace的语法及示例。',
            'description' => '## 功能描述'."\n"
                .'根据生产空间ID更新生产空间的名称和描述。'."\n"
                ."\n"
                .'> - 您可以进入[在线咨询](https://www.aliyun.com/core/online-consult?from=aZgW6LJHr2)获取在线人工帮助。'."\n"
                .'- 阿里云视觉智能开放平台视觉AI能力API接入、接口使用或问题咨询等，请通过钉钉群（23109592）加入阿里云视觉智能开放平台咨询群联系我们。'."\n"
                ."\n"
                .'## 接入指引'."\n"
                .'1. 注册阿里云账号：打开[阿里云官网](https://www.aliyun.com)，在阿里云官网右上角，单击**立即注册**，按照操作提示完成账号注册。'."\n"
                .'2. 开通能力：请确保您已开通自学习服务，若未开通服务请[立即开通](https://common-buy.aliyun.com/?commodityCode=viapi_selflearning_public_cn)。'."\n"
                .'3. 创建AccessKey：请确保您已[创建AccessKey](~~175144~~)，如果您使用的是子账号AccessKey，您需要给子账号赋予AliyunVIAPIFullAccess权限，具体操作，请参见[RAM授权](~~145025~~)。'."\n"
                .'4. 在线调试（可选）：您可以通过[OpenAPI Explorer](https://next.api.aliyun.com/api/viapi-regen/2021-11-19/UpdateWorkspace?lang=JAVA&sdkStyle=old)在线调试能力，查看完整的调用示例代码及SDK依赖信息，也可以下载完整的工程。'."\n"
                .'5. 开发接入步骤：    '."\n"
                .'- 在[SDK总览](~~145033~~)中选择您要接入使用的SDK语言。'."\n"
                .'- 在对应语言的SDK文档中找到AI类目为自学习（viapi-regen）类目的SDK包进行安装。'."\n"
                .'- 参考文档中提供的示例代码进行适当修改后调用。'."\n"
                ."\n"
                .'6. 客户端直接调用：该能力常用的客户端调用方式包括以下几种。'."\n"
                .'- [Web前端直接调用](~~467779~~)'."\n"
                .'- [小程序场景下直接调用](~~467780~~)'."\n"
                .'- [Android端直接调用](~~467781~~)'."\n"
                .'- [iOS端直接调用](~~467782~~)',
            'responseParamsDescription' => '## SDK参考'."\n"
                .'阿里云视觉AI自学习类目下的更新生产空间能力推荐使用SDK调用，支持多种编程语言，调用时请选择AI类目为自学习（viapi-regen）的SDK包，文件参数通过SDK调用可支持本地文件及任意URL，具体可参见[SDK总览](~~145033~~)。',
            'extraInfo' => '## 错误码'."\n"
                .'关于更新生产空间的错误码，详情请参见[常见错误码](~~441239~~)。'."\n"
                ."\n"
                .'## 安全声明'."\n"
                .'- 请确保上传的图片或文件来源符合相应的法律法规。'."\n"
                .'- 通过体验调试上传的临时文件有效期为1小时，在24小时后会被系统自动清理删除。',
        ],
        'CreateTagTask' => [
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
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'LabelsetId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '标注集ID。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '549',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '每个请求分配唯一的服务器请求ID。',
                                'type' => 'string',
                                'example' => '2a78486316511158013162460e50bc',
                            ],
                            'Data' => [
                                'description' => '接口返回实体。',
                                'type' => 'object',
                                'properties' => [
                                    'Id' => [
                                        'description' => '标注集ID。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '549',
                                    ],
                                    'GmtCreate' => [
                                        'description' => '创建时间。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '1651115634000',
                                    ],
                                    'Name' => [
                                        'description' => '标注数据集名称。',
                                        'type' => 'string',
                                        'example' => 'QS测试',
                                    ],
                                    'Description' => [
                                        'description' => '标注描述。',
                                        'type' => 'string',
                                        'example' => 'QS描述',
                                    ],
                                    'LabelType' => [
                                        'description' => '标注类型。',
                                        'type' => 'string',
                                        'example' => 'USE_LABEL_SYSTEM',
                                    ],
                                    'Status' => [
                                        'description' => '标注状态。',
                                        'type' => 'string',
                                        'example' => 'TAG_SYSTEM_INIT',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"2a78486316511158013162460e50bc\\",\\n  \\"Data\\": {\\n    \\"Id\\": 549,\\n    \\"GmtCreate\\": 1651115634000,\\n    \\"Name\\": \\"QS测试\\",\\n    \\"Description\\": \\"QS描述\\",\\n    \\"LabelType\\": \\"USE_LABEL_SYSTEM\\",\\n    \\"Status\\": \\"TAG_SYSTEM_INIT\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<CreateTagTaskResponse>\\n    <RequestId>2a78486316511158013162460e50bc</RequestId>\\n    <Data>\\n        <Id>549</Id>\\n        <GmtCreate>1651115634000</GmtCreate>\\n        <Name>QS测试</Name>\\n        <Description>QS描述</Description>\\n        <LabelType>USE_LABEL_SYSTEM</LabelType>\\n        <Status>TAG_SYSTEM_INIT</Status>\\n    </Data>\\n</CreateTagTaskResponse>","errorExample":""}]',
            'title' => '创建标注任务',
            'summary' => '创建标注任务CreateTagTask的语法及示例。',
            'description' => '## 功能描述'."\n"
                .'当前标注任务标注成功后，单独对数据集进行新增数据，可调用此接口进行继续标注，不需要重新创建新的标注任务。'."\n"
                ."\n"
                .'> - 您可以进入[在线咨询](https://www.aliyun.com/core/online-consult?from=aZgW6LJHr2)获取在线人工帮助。'."\n"
                .'- 阿里云视觉智能开放平台视觉AI能力API接入、接口使用或问题咨询等，请通过钉钉群（23109592）加入阿里云视觉智能开放平台咨询群联系我们。'."\n"
                ."\n"
                .'## 接入指引'."\n"
                .'1. 注册阿里云账号：打开[阿里云官网](https://www.aliyun.com)，在阿里云官网右上角，单击**立即注册**，按照操作提示完成账号注册。'."\n"
                .'2. 开通能力：请确保您已开通自学习服务，若未开通服务请[立即开通](https://common-buy.aliyun.com/?commodityCode=viapi_selflearning_public_cn)。'."\n"
                .'3. 创建AccessKey：请确保您已[创建AccessKey](~~175144~~)，如果您使用的是子账号AccessKey，您需要给子账号赋予AliyunVIAPIFullAccess权限，具体操作，请参见[RAM授权](~~145025~~)。'."\n"
                .'4. 在线调试（可选）：您可以通过[OpenAPI Explorer](https://next.api.aliyun.com/api/viapi-regen/2021-11-19/CreateTagTask?lang=JAVA&sdkStyle=old)在线调试能力，查看完整的调用示例代码及SDK依赖信息，也可以下载完整的工程。'."\n"
                .'5. 开发接入步骤：    '."\n"
                .'- 在[SDK总览](~~145033~~)中选择您要接入使用的SDK语言。'."\n"
                .'- 在对应语言的SDK文档中找到AI类目为自学习（viapi-regen）类目的SDK包进行安装。'."\n"
                .'- 参考文档中提供的示例代码进行适当修改后调用。'."\n"
                ."\n"
                .'6. 客户端直接调用：该能力常用的客户端调用方式包括以下几种。'."\n"
                .'- [Web前端直接调用](~~467779~~)'."\n"
                .'- [小程序场景下直接调用](~~467780~~)'."\n"
                .'- [Android端直接调用](~~467781~~)'."\n"
                .'- [iOS端直接调用](~~467782~~)',
            'responseParamsDescription' => '## SDK参考'."\n"
                .'阿里云视觉AI自学习类目下的创建标注任务能力推荐使用SDK调用，支持多种编程语言，调用时请选择AI类目为自学习（viapi-regen）的SDK包，文件参数通过SDK调用可支持本地文件及任意URL，具体可参见[SDK总览](~~145033~~)。',
            'extraInfo' => '## 错误码'."\n"
                .'关于创建标注任务的错误码，详情请参见[常见错误码](~~441239~~)。'."\n"
                ."\n"
                .'## 安全声明'."\n"
                .'- 请确保上传的图片或文件来源符合相应的法律法规。'."\n"
                .'- 通过体验调试上传的临时文件有效期为1小时，在24小时后会被系统自动清理删除。',
        ],
        'DeleteLabelsetData' => [
            'methods' => [
                'post',
                'get',
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
                    'name' => 'LabelId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '标注集ID。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '549',
                    ],
                ],
                [
                    'name' => 'Id',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '标注集内每行数据对应的ID。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '1651115727749000',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '每个请求分配唯一的服务器请求ID。',
                                'type' => 'string',
                                'example' => '2a78486316511165094166037e1a6e',
                            ],
                            'Data' => [
                                'description' => '接口返回实体。',
                                'type' => 'object',
                                'properties' => [
                                    'Id' => [
                                        'description' => '标注集ID。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '294',
                                    ],
                                    'GmtCreate' => [
                                        'description' => '创建时间。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '1651197861000',
                                    ],
                                    'Name' => [
                                        'description' => '标注集名称。',
                                        'type' => 'string',
                                        'example' => 'fenlei',
                                    ],
                                    'Description' => [
                                        'description' => '标注描述。',
                                        'type' => 'string',
                                        'example' => '描述',
                                    ],
                                    'LabelType' => [
                                        'description' => '标注类型。取值如下：'."\n"
                                            ."\n"
                                            .'- UPLOAD_FILE：上传标注文件'."\n"
                                            ."\n"
                                            .'- SELECT_FILE：选择标注文件'."\n"
                                            ."\n"
                                            .'- USE_LABEL_SYSTEM：选择标注系统'."\n",
                                        'type' => 'string',
                                        'example' => 'UPLOAD_FILE',
                                    ],
                                    'Status' => [
                                        'description' => '标注状态。取值如下：'."\n"
                                            ."\n"
                                            .'- FILE_CHECKING：文件格式校验中'."\n"
                                            ."\n"
                                            .'- FILE_CHECK_SUCCESS：文件格式校验成功'."\n"
                                            ."\n"
                                            .'- FILE_CHECK_FAIL：文件格式校验失败'."\n"
                                            ."\n"
                                            .'- TAG_SYSTEM_INIT：标注系统初始化中'."\n"
                                            ."\n"
                                            .'- TAGGING：标注中'."\n"
                                            ."\n"
                                            .'- TAG_FINISHED：标注完成'."\n"
                                            ."\n"
                                            .'- TAG_FAILED：标注失败',
                                        'type' => 'string',
                                        'example' => 'FILE_CHECK_SUCCESS',
                                    ],
                                    'Total' => [
                                        'description' => '标注数量。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '180',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"2a78486316511165094166037e1a6e\\",\\n  \\"Data\\": {\\n    \\"Id\\": 294,\\n    \\"GmtCreate\\": 1651197861000,\\n    \\"Name\\": \\"fenlei\\",\\n    \\"Description\\": \\"描述\\",\\n    \\"LabelType\\": \\"UPLOAD_FILE\\",\\n    \\"Status\\": \\"FILE_CHECK_SUCCESS\\",\\n    \\"Total\\": 180\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DeleteLabelsetDataResponse>\\n    <RequestId>2a78486316511165094166037e1a6e</RequestId>\\n    <Data>\\n        <Id>294</Id>\\n        <GmtCreate>1651197861000</GmtCreate>\\n        <Name>fenlei</Name>\\n        <Description>描述</Description>\\n        <LabelType>UPLOAD_FILE</LabelType>\\n        <Status>FILE_CHECK_SUCCESS</Status>\\n        <Total>180</Total>\\n    </Data>\\n</DeleteLabelsetDataResponse>","errorExample":""}]',
            'title' => '删除标注集内的数据',
            'summary' => '删除标注集内的数据DeleteLabelsetData的语法及示例。',
            'description' => '## 功能描述'."\n"
                .'在标注数据查看列表页删除单行数据。'."\n"
                ."\n"
                .'> - 您可以进入[在线咨询](https://www.aliyun.com/core/online-consult?from=aZgW6LJHr2)获取在线人工帮助。'."\n"
                .'- 阿里云视觉智能开放平台视觉AI能力API接入、接口使用或问题咨询等，请通过钉钉群（23109592）加入阿里云视觉智能开放平台咨询群联系我们。'."\n"
                ."\n"
                .'## 接入指引'."\n"
                .'1. 注册阿里云账号：打开[阿里云官网](https://www.aliyun.com)，在阿里云官网右上角，单击**立即注册**，按照操作提示完成账号注册。'."\n"
                .'2. 开通能力：请确保您已开通自学习服务，若未开通服务请[立即开通](https://common-buy.aliyun.com/?commodityCode=viapi_selflearning_public_cn)。'."\n"
                .'3. 创建AccessKey：请确保您已[创建AccessKey](~~175144~~)，如果您使用的是子账号AccessKey，您需要给子账号赋予AliyunVIAPIFullAccess权限，具体操作，请参见[RAM授权](~~145025~~)。'."\n"
                .'4. 在线调试（可选）：您可以通过[OpenAPI Explorer](https://next.api.aliyun.com/api/viapi-regen/2021-11-19/DeleteLabelsetData?lang=JAVA&sdkStyle=old)在线调试能力，查看完整的调用示例代码及SDK依赖信息，也可以下载完整的工程。'."\n"
                .'5. 开发接入步骤：    '."\n"
                .'- 在[SDK总览](~~145033~~)中选择您要接入使用的SDK语言。'."\n"
                .'- 在对应语言的SDK文档中找到AI类目为自学习（viapi-regen）类目的SDK包进行安装。'."\n"
                .'- 参考文档中提供的示例代码进行适当修改后调用。'."\n"
                ."\n"
                .'6. 客户端直接调用：该能力常用的客户端调用方式包括以下几种。'."\n"
                .'- [Web前端直接调用](~~467779~~)'."\n"
                .'- [小程序场景下直接调用](~~467780~~)'."\n"
                .'- [Android端直接调用](~~467781~~)'."\n"
                .'- [iOS端直接调用](~~467782~~)',
            'responseParamsDescription' => '## SDK参考'."\n"
                .'阿里云视觉AI自学习类目下的删除标注集内的数据能力推荐使用SDK调用，支持多种编程语言，调用时请选择AI类目为自学习（viapi-regen）的SDK包，文件参数通过SDK调用可支持本地文件及任意URL，具体可参见[SDK总览](~~145033~~)。',
            'extraInfo' => '## 错误码'."\n"
                .'关于删除标注集内的数据的错误码，详情请参见[常见错误码](~~441239~~)。'."\n"
                .'## 安全声明'."\n"
                .'- 请确保上传的图片或文件来源符合相应的法律法规。'."\n"
                .'- 通过体验调试上传的临时文件有效期为1小时，在24小时后会被系统自动清理删除。',
        ],
        'GetDiffCountLabelsetAndDataset' => [
            'methods' => [
                'post',
                'get',
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
                    'name' => 'LabelsetId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '标注集ID。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '549',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '每个请求分配唯一的服务器请求ID。',
                                'type' => 'string',
                                'example' => '2a78486316511165094166037e1a6e',
                            ],
                            'Data' => [
                                'description' => '接口返回实体。',
                                'type' => 'object',
                                'properties' => [
                                    'DiffCount' => [
                                        'description' => '标注集和数量集的数值差。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '4',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"2a78486316511165094166037e1a6e\\",\\n  \\"Data\\": {\\n    \\"DiffCount\\": 4\\n  }\\n}","errorExample":""},{"type":"xml","example":"<GetDiffCountLabelsetAndDatasetResponse>\\n    <RequestId>2a78486316511165094166037e1a6e</RequestId>\\n    <Data>\\n        <DiffCount>4</DiffCount>\\n    </Data>\\n</GetDiffCountLabelsetAndDatasetResponse>","errorExample":""}]',
            'title' => '获取数据集和标注集的数量差',
            'summary' => '获取数据集和标注集的数量差GetDiffCountLabelsetAndDataset的语法及示例。',
            'description' => '## 功能描述'."\n"
                .'标注完成后二次点击标注的时候获取数据集和标注集的数量差。'."\n"
                ."\n"
                .'> - 您可以进入[在线咨询](https://www.aliyun.com/core/online-consult?from=aZgW6LJHr2)获取在线人工帮助。'."\n"
                .'- 阿里云视觉智能开放平台视觉AI能力API接入、接口使用或问题咨询等，请通过钉钉群（23109592）加入阿里云视觉智能开放平台咨询群联系我们。'."\n"
                ."\n"
                .'## 接入指引'."\n"
                .'1. 注册阿里云账号：打开[阿里云官网](https://www.aliyun.com)，在阿里云官网右上角，单击**立即注册**，按照操作提示完成账号注册。'."\n"
                .'2. 开通能力：请确保您已开通[分割抠图服务](https://vision.aliyun.com/imageseg)，若未开通服务请[立即开通](https://common-buy.aliyun.com/?commodityCode=viapi_imageseg_public_cn#/open)。'."\n"
                .'3. 创建AccessKey：请确保您已[创建AccessKey](~~175144~~)，如果您使用的是子账号AccessKey，您需要给子账号赋予AliyunVIAPIFullAccess权限，具体操作，请参见[RAM授权](~~145025~~)。'."\n"
                .'4. 在线调试（可选）：您可以通过[OpenAPI Explorer](https://next.api.aliyun.com/api/viapi-regen/2021-11-19/GetDiffCountLabelsetAndDataset?lang=JAVA&sdkStyle=old)在线调试能力，查看完整的调用示例代码及SDK依赖信息，也可以下载完整的工程。'."\n"
                ."\n"
                .'5. 开发接入步骤：   '."\n"
                .'- 在[SDK总览](~~145033~~)中选择您要接入使用的SDK语言。'."\n"
                .'- 在对应语言的SDK文档中找到AI类目为自学习（viapi-regen）类目的SDK包进行安装。'."\n"
                .'- 参考文档中提供的示例代码进行适当修改后调用。'."\n"
                ."\n"
                .'6. 客户端直接调用：该能力常用的客户端调用方式包括以下几种。'."\n"
                .'- [Web前端直接调用](~~467779~~)'."\n"
                .'- [小程序场景下直接调用](~~467780~~)'."\n"
                .'- [Android端直接调用](~~467781~~)'."\n"
                .'- [iOS端直接调用](~~467782~~)',
            'responseParamsDescription' => '## SDK参考'."\n"
                .'阿里云视觉AI自学习类目下的获取数据集和标注集的数量差能力推荐使用SDK调用，支持多种编程语言，调用时请选择AI类目为自学习（viapi-regen）的SDK包，文件参数通过SDK调用可支持本地文件及任意URL，具体可参见[SDK总览](~~145033~~)。',
            'extraInfo' => '## 错误码'."\n"
                .'关于获取数据集和标注集的数量差的错误码，详情请参见[常见错误码](~~441239~~)。'."\n"
                ."\n"
                .'## 安全声明'."\n"
                .'- 请确保上传的图片或文件来源符合相应的法律法规。'."\n"
                .'- 通过体验调试上传的临时文件有效期为1小时，在24小时后会被系统自动清理删除。',
        ],
        'DownloadFileNameList' => [
            'methods' => [
                'post',
                'get',
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
                    'name' => 'DatasetId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '空间id',
                        'description' => '数据集ID。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '808',
                    ],
                ],
                [
                    'name' => 'Identity',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '数据集名称',
                        'description' => '文件名称（支持模糊搜索）。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'jpg',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '每个请求分配唯一的服务器请求ID。',
                                'type' => 'string',
                                'example' => '3E9ADFE6-3424-1425-9C76-18EA9402A46F',
                            ],
                            'Data' => [
                                'description' => '出参数据实体。',
                                'type' => 'object',
                                'properties' => [
                                    'OssHttpUrl' => [
                                        'description' => '下载文件的OSS URL。',
                                        'type' => 'string',
                                        'example' => 'https://viapi-regen-hangzhou-prod.oss-cn-hangzhou.aliyuncs.com/prod/data/808/dataFileNames/%E8%BF%AD%E4%BB%A3%E5%85%AB%E6%9C%9F%E6%B5%8B%E8%AF%95_dataFileNames.txt?Expires=1660630152&OSSAccessKeyId=LTAI5t69vTgbfYeAKcsT****&Signature=YZr2sRpi5gWtsitFFmlVS1%2FFf0U%3D',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"3E9ADFE6-3424-1425-9C76-18EA9402A46F\\",\\n  \\"Data\\": {\\n    \\"OssHttpUrl\\": \\"https://viapi-regen-hangzhou-prod.oss-cn-hangzhou.aliyuncs.com/prod/data/808/dataFileNames/%E8%BF%AD%E4%BB%A3%E5%85%AB%E6%9C%9F%E6%B5%8B%E8%AF%95_dataFileNames.txt?Expires=1660630152&OSSAccessKeyId=LTAI5t69vTgbfYeAKcsT****&Signature=YZr2sRpi5gWtsitFFmlVS1%2FFf0U%3D\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DownloadFileNameListResponse>\\n    <RequestId>3E9ADFE6-3424-1425-9C76-18EA9402A46F</RequestId>\\n    <Data>\\n        <OssHttpUrl>https://viapi-regen-hangzhou-prod.oss-cn-hangzhou.aliyuncs.com/prod/data/808/dataFileNames/%E8%BF%AD%E4%BB%A3%E5%85%AB%E6%9C%9F%E6%B5%8B%E8%AF%95_dataFileNames.txt?Expires=1660630152&amp;OSSAccessKeyId=LTAI5t69vTgbfYeAKcsT****&amp;Signature=YZr2sRpi5gWtsitFFmlVS1%2FFf0U%3D</OssHttpUrl>\\n    </Data>\\n</DownloadFileNameListResponse>","errorExample":""}]',
            'title' => '下载数据集文件名称列表',
            'summary' => '数据集列表ListDatasets的语法及示例。',
            'description' => '## 功能描述'."\n"
                .'根据输入参数，下载对应的数据集文件名称列表。'."\n"
                ."\n"
                .'> - 您可以进入[在线咨询](https://www.aliyun.com/core/online-consult?from=aZgW6LJHr2)获取在线人工帮助。'."\n"
                .'- 阿里云视觉智能开放平台视觉AI能力API接入、接口使用或问题咨询等，请通过钉钉群（23109592）加入阿里云视觉智能开放平台咨询群联系我们。'."\n"
                ."\n"
                .'## 接入指引'."\n"
                .'1. 注册阿里云账号：打开[阿里云官网](https://www.aliyun.com)，在阿里云官网右上角，单击**立即注册**，按照操作提示完成账号注册。'."\n"
                .'2. 开通能力：请确保您已开通自学习服务，若未开通服务请[立即开通](https://common-buy.aliyun.com/?commodityCode=viapi_selflearning_public_cn)。'."\n"
                .'3. 创建AccessKey：请确保您已[创建AccessKey](~~175144~~)，如果您使用的是子账号AccessKey，您需要给子账号赋予AliyunVIAPIFullAccess权限，具体操作，请参见[RAM授权](~~145025~~)。'."\n"
                .'4. 在线调试（可选）：您可以通过[OpenAPI Explorer](https://next.api.aliyun.com/api/viapi-regen/2021-11-19/DownloadFileNameList?lang=JAVA&sdkStyle=old)在线调试能力，查看完整的调用示例代码及SDK依赖信息，也可以下载完整的工程。'."\n"
                .'5. 开发接入步骤：    '."\n"
                .'- 在[SDK总览](~~145033~~)中选择您要接入使用的SDK语言。'."\n"
                .'- 在对应语言的SDK文档中找到AI类目为自学习（viapi-regen）类目的SDK包进行安装。'."\n"
                .'- 参考文档中提供的示例代码进行适当修改后调用。'."\n"
                ."\n"
                .'6. 客户端直接调用：该能力常用的客户端调用方式包括以下几种。'."\n"
                .'- [Web前端直接调用](~~467779~~)'."\n"
                .'- [小程序场景下直接调用](~~467780~~)'."\n"
                .'- [Android端直接调用](~~467781~~)'."\n"
                .'- [iOS端直接调用](~~467782~~)',
            'responseParamsDescription' => '## SDK参考'."\n"
                .'阿里云视觉AI自学习类目下的下载数据集文件名称列表能力推荐使用SDK调用，支持多种编程语言，调用时请选择AI类目为自学习（viapi-regen）的SDK包，文件参数通过SDK调用可支持本地文件及任意URL，具体可参见[SDK总览](~~145033~~)。',
            'extraInfo' => '## 错误码'."\n"
                .'关于下载数据集文件名称列表的错误码，详情请参见[常见错误码](~~441239~~)。'."\n"
                ."\n"
                .'## 安全声明'."\n"
                .'- 请确保上传的图片或文件来源符合相应的法律法规。'."\n"
                .'- 通过体验调试上传的临时文件有效期为1小时，在24小时后会被系统自动清理删除。',
        ],
        'CustomizeClassifyImage' => [
            'summary' => '自学习分类CustomizeClassifyImage的语法及示例。',
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
                    'name' => 'ImageUrl',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '图像URL地址。推荐使用上海地域的OSS链接，对于文件在本地或者非上海地域OSS链接的情况，请参见[文件URL处理](~~155645~~)。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'https://viapi-regen-shanghai-prod-public.oss-cn-shanghai-internal.aliyuncs.com/example/common_classify/****.jpg',
                        'isFileTransferUrl' => true,
                    ],
                ],
                [
                    'name' => 'ServiceId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '自学习服务的**ServiceId**字段。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'db9616e093e6c7c668bc9ddab6aa****',
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
                                'example' => 'D6319603-9DD1-45ae-950E-FCA36EB6DFA7',
                            ],
                            'Data' => [
                                'description' => '返回的结果数据内容。',
                                'type' => 'object',
                                'properties' => [
                                    'Category' => [
                                        'description' => '根据数据集自学习训练得出的分类结果。',
                                        'type' => 'string',
                                        'example' => 'black',
                                    ],
                                    'Score' => [
                                        'description' => '置信度。',
                                        'type' => 'number',
                                        'format' => 'float',
                                        'example' => '0.8801174759864807',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"D6319603-9DD1-45ae-950E-FCA36EB6DFA7\\",\\n  \\"Data\\": {\\n    \\"Category\\": \\"black\\",\\n    \\"Score\\": 0.8801174759864807\\n  }\\n}","errorExample":""},{"type":"xml","example":"<CustomizeClassifyImageResponse>\\n    <RequestId>D6319603-9DD1-45ae-950E-FCA36EB6DFA7</RequestId>\\n    <Data>\\n        <Category>black</Category>\\n        <Score>0.8801175</Score>\\n    </Data>\\n</CustomizeClassifyImageResponse>","errorExample":""}]',
            'title' => '自学习分类',
            'description' => '## 功能描述'."\n"
                .'根据输入的图像，输出图像中物体的分类。'."\n"
                ."\n"
                .'> - 您可以进入[在线咨询](https://www.aliyun.com/core/online-consult?from=aZgW6LJHr2)获取在线人工帮助。'."\n"
                .'- 阿里云视觉智能开放平台视觉AI能力API接入、接口使用或问题咨询等，请通过钉钉群（23109592）加入阿里云视觉智能开放平台咨询群联系我们。'."\n"
                ."\n"
                .'## 接入指引'."\n"
                .'1. 注册阿里云账号：打开[阿里云官网](https://www.aliyun.com)，在阿里云官网右上角，单击**立即注册**，按照操作提示完成账号注册。'."\n"
                .'2. 开通能力：请确保您已开通自学习服务，若未开通服务请[立即开通](https://common-buy.aliyun.com/?commodityCode=viapi_selflearning_public_cn)。'."\n"
                .'3. 创建AccessKey：请确保您已[创建AccessKey](~~175144~~)，如果您使用的是子账号AccessKey，您需要给子账号赋予AliyunVIAPIFullAccess权限，具体操作，请参见[RAM授权](~~145025~~)。'."\n"
                .'4. 在线调试（可选）：您可以通过[OpenAPI Explorer](https://next.api.aliyun.com/api/viapi-regen/2021-11-19/CustomizeClassifyImage?lang=JAVA&sdkStyle=old)在线调试能力，查看完整的调用示例代码及SDK依赖信息，也可以下载完整的工程。'."\n"
                ."\n"
                .'5. 开发接入步骤：    '."\n"
                .'- 在[SDK总览](~~145033~~)中选择您要接入使用的SDK语言。'."\n"
                .'- 在对应语言的SDK文档中找到AI类目为自学习（viapi-regen）类目的SDK包进行安装。'."\n"
                .'- 参考文档中提供的示例代码进行适当修改后调用。'."\n"
                ."\n"
                .'6. 客户端直接调用：该能力常用的客户端调用方式包括以下几种。'."\n"
                .'- [Web前端直接调用](~~467779~~)'."\n"
                .'- [小程序场景下直接调用](~~467780~~)'."\n"
                .'- [Android端直接调用](~~467781~~)'."\n"
                .'- [iOS端直接调用](~~467782~~)'."\n"
                ."\n"
                .'## 输入限制'."\n"
                ."\n"
                .'- 图像格式：JPEG、JPG、PNG、BMP、WEBP。'."\n"
                .'- 图像大小：不超过3 MB。'."\n"
                .'- URL地址中不能包含中文字符。',
            'responseParamsDescription' => '## SDK参考'."\n"
                .'阿里云视觉AI自学习类目下的自学习分类能力推荐使用SDK调用，支持多种编程语言，调用时请选择AI类目为自学习（viapi-regen）的SDK包，文件参数通过SDK调用可支持本地文件及任意URL，具体可参见[SDK总览](~~145033~~)。',
            'extraInfo' => '## 错误码'."\n"
                .'关于自学习分类的错误码，详情请参见[常见错误码](~~441239~~)。'."\n"
                ."\n"
                .'## 安全声明'."\n"
                .'- 请确保上传的图片或文件来源符合相应的法律法规。'."\n"
                .'- 通过体验调试上传的临时文件有效期为1小时，在24小时后会被系统自动清理删除。',
        ],
        'CustomizeDetectImage' => [
            'summary' => '自学习检测CustomizeDetectImage的语法及示例。',
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
                    'name' => 'ImageUrl',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '图像URL地址。推荐使用上海地域的OSS链接，对于文件在本地或者非上海地域OSS链接的情况，请参见[文件URL处理](~~155645~~)。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'https://viapi-regen-shanghai-prod-public.oss-cn-shanghai-internal.aliyuncs.com/example/common_classify/****.jpg',
                        'isFileTransferUrl' => true,
                    ],
                ],
                [
                    'name' => 'ServiceId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '自学习服务的**ServiceId**字段。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'db9616e093e6c7c668bc9ddab6aa****',
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
                                'example' => '7445026B-243E-1F9D-9EEB-A6C7032B50E8',
                            ],
                            'Data' => [
                                'description' => '返回的结果数据内容。',
                                'type' => 'object',
                                'properties' => [
                                    'Elements' => [
                                        'description' => '检测结果列表。',
                                        'type' => 'array',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"7445026B-243E-1F9D-9EEB-A6C7032B50E8\\",\\n  \\"Data\\": {\\n    \\"Elements\\": [\\n      {\\n        \\"Boxes\\": {\\n          \\"X\\": 286,\\n          \\"Y\\": 195,\\n          \\"Width\\": 286,\\n          \\"Height\\": 188\\n        },\\n        \\"Score\\": 0.9054347276687622,\\n        \\"Category\\": \\"car\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<CustomizeDetectImageResponse>\\n    <RequestId>7445026B-243E-1F9D-9EEB-A6C7032B50E8</RequestId>\\n    <Data>\\n        <Elements>\\n            <Score>0.9054347276687622</Score>\\n            <Category>car</Category>\\n            <Boxes>\\n                <X>286</X>\\n                <Y>195</Y>\\n                <Height>286</Height>\\n                <Width>188</Width>\\n            </Boxes>\\n        </Elements>\\n        <Elements>\\n            <Score>0.8531613349914551</Score>\\n            <Category>car</Category>\\n            <Boxes>\\n                <X>591</X>\\n                <Y>178</Y>\\n                <Height>591</Height>\\n                <Width>84</Width>\\n            </Boxes>\\n        </Elements>\\n    </Data>\\n</CustomizeDetectImageResponse>","errorExample":""}]',
            'title' => '自学习检测',
            'description' => '## 功能描述'."\n"
                .'根据输入的图像，输出图像中物体的位置和分类。'."\n"
                ."\n"
                .'> - 您可以进入[在线咨询](https://www.aliyun.com/core/online-consult?from=aZgW6LJHr2)获取在线人工帮助。'."\n"
                .'- 阿里云视觉智能开放平台视觉AI能力API接入、接口使用或问题咨询等，请通过钉钉群（23109592）加入阿里云视觉智能开放平台咨询群联系我们。'."\n"
                ."\n"
                .'## 接入指引'."\n"
                .'1. 注册阿里云账号：打开[阿里云官网](https://www.aliyun.com)，在阿里云官网右上角，单击**立即注册**，按照操作提示完成账号注册。'."\n"
                .'2. 开通能力：请确保您已开通自学习服务，若未开通服务请[立即开通](https://common-buy.aliyun.com/?commodityCode=viapi_selflearning_public_cn)。'."\n"
                .'3. 创建AccessKey：请确保您已[创建AccessKey](~~175144~~)，如果您使用的是子账号AccessKey，您需要给子账号赋予AliyunVIAPIFullAccess权限，具体操作，请参见[RAM授权](~~145025~~)。'."\n"
                .'4. 在线调试（可选）：您可以通过[OpenAPI Explorer](https://next.api.aliyun.com/api/viapi-regen/2021-11-19/CustomizeDetectImage?lang=JAVA&sdkStyle=old)在线调试能力，查看完整的调用示例代码及SDK依赖信息，也可以下载完整的工程。'."\n"
                .'5. 开发接入步骤：    '."\n"
                .'- 在[SDK总览](~~145033~~)中选择您要接入使用的SDK语言。'."\n"
                .'- 在对应语言的SDK文档中找到AI类目为自学习（viapi-regen）类目的SDK包进行安装。'."\n"
                .'- 参考文档中提供的示例代码进行适当修改后调用。'."\n"
                ."\n"
                .'6. 客户端直接调用：该能力常用的客户端调用方式包括以下几种。'."\n"
                .'- [Web前端直接调用](~~467779~~)'."\n"
                .'- [小程序场景下直接调用](~~467780~~)'."\n"
                .'- [Android端直接调用](~~467781~~)'."\n"
                .'- [iOS端直接调用](~~467782~~)'."\n"
                ."\n"
                .'## 输入限制'."\n"
                ."\n"
                .'- 图像格式：JPEG、JPG、PNG、BMP、WEBP。'."\n"
                .'- 图像大小：不超过3 MB。'."\n"
                .'- URL地址中不能包含中文字符。',
            'responseParamsDescription' => '## SDK参考'."\n"
                .'阿里云视觉AI自学习类目下的自学习检测能力推荐使用SDK调用，支持多种编程语言，调用时请选择AI类目为自学习（viapi-regen）的SDK包，文件参数通过SDK调用可支持本地文件及任意URL，具体可参见[SDK总览](~~145033~~)。',
            'extraInfo' => '## 错误码'."\n"
                .'关于自学习检测的错误码，详情请参见[常见错误码](~~441239~~)。'."\n"
                ."\n\n"
                .'## 安全声明'."\n"
                .'- 请确保上传的图片或文件来源符合相应的法律法规。'."\n"
                .'- 通过体验调试上传的临时文件有效期为1小时，在24小时后会被系统自动清理删除。',
        ],
        'CustomizeInstanceSegmentImage' => [
            'summary' => '自学习分割CustomizeInstanceSegmentImage的语法及示例。',
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
                    'name' => 'ImageUrl',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '图像URL地址。推荐使用上海地域的OSS链接，对于文件在本地或者非上海地域OSS链接的情况，请参见[文件URL处理](~~155645~~)。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'https://viapi-regen-shanghai-prod-public.oss-cn-shanghai-internal.aliyuncs.com/example/common_classify/****.jpg',
                        'isFileTransferUrl' => true,
                    ],
                ],
                [
                    'name' => 'ServiceId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '自学习服务的**ServiceId**字段。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'db9616e093e6c7c668bc9ddab6aa****',
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
                                'example' => 'AB3F19AE-F3D3-5EEE-97AF-57B7397B5C9B',
                            ],
                            'Data' => [
                                'description' => '返回的结果数据内容。',
                                'type' => 'object',
                                'properties' => [
                                    'Elements' => [
                                        'description' => '检测结果列表。',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'Boxes' => [
                                                    'description' => '检测框区域。',
                                                    'type' => 'object',
                                                    'properties' => [
                                                        'X' => [
                                                            'description' => '检测框X坐标。',
                                                            'type' => 'integer',
                                                            'format' => 'int32',
                                                            'example' => '822',
                                                        ],
                                                        'Y' => [
                                                            'description' => '检测框Y坐标。',
                                                            'type' => 'integer',
                                                            'format' => 'int32',
                                                            'example' => '480',
                                                        ],
                                                        'Width' => [
                                                            'description' => '检测框宽度，单位：像素。',
                                                            'type' => 'integer',
                                                            'format' => 'int32',
                                                            'example' => '822',
                                                        ],
                                                        'Height' => [
                                                            'description' => '检测框高度，单位：像素。',
                                                            'type' => 'integer',
                                                            'format' => 'int32',
                                                            'example' => '1094',
                                                        ],
                                                    ],
                                                ],
                                                'Score' => [
                                                    'description' => '置信度。',
                                                    'type' => 'number',
                                                    'format' => 'float',
                                                    'example' => '0.6564025282859802',
                                                ],
                                                'Category' => [
                                                    'description' => '根据数据集自学习训练得出的分类结果。',
                                                    'type' => 'string',
                                                    'example' => '气球',
                                                ],
                                                'Mask' => [
                                                    'description' => 'RLE编码区域。',
                                                    'type' => 'object',
                                                    'properties' => [
                                                        'Sizes' => [
                                                            'description' => 'RLE编码区域的高度和宽度。第一个元素是高度，第二个元素是宽度，单位：像素。',
                                                            'type' => 'array',
                                                            'items' => [
                                                                'description' => 'RLE编码区域的高度和宽度。第一个元素是高度，第二个元素是宽度，单位：像素。',
                                                                'type' => 'integer',
                                                                'format' => 'int32',
                                                                'example' => '[2019, 2048]',
                                                            ],
                                                        ],
                                                        'Counts' => [
                                                            'description' => 'RLE编码字符串。',
                                                            'type' => 'string',
                                                            'example' => 'UPf1c1Zm1;E;F:E;G9E:G9E;_Oa0_O`0A`0E;I7I8H7H8H9G9F:F9G:D;E;E;D<E;E;F:E;F:F9H****',
                                                        ],
                                                    ],
                                                ],
                                                'Contours' => [
                                                    'description' => '轮廓区域。',
                                                    'type' => 'array',
                                                    'items' => [
                                                        'type' => 'object',
                                                        'properties' => [
                                                            'X' => [
                                                                'description' => '轮廓点的X坐标。',
                                                                'type' => 'integer',
                                                                'format' => 'int32',
                                                                'example' => '1394',
                                                            ],
                                                            'Y' => [
                                                                'description' => '轮廓点的Y坐标。',
                                                                'type' => 'integer',
                                                                'format' => 'int32',
                                                                'example' => '510',
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
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"AB3F19AE-F3D3-5EEE-97AF-57B7397B5C9B\\",\\n  \\"Data\\": {\\n    \\"Elements\\": [\\n      {\\n        \\"Boxes\\": {\\n          \\"X\\": 822,\\n          \\"Y\\": 480,\\n          \\"Width\\": 822,\\n          \\"Height\\": 1094\\n        },\\n        \\"Score\\": 0.6564025282859802,\\n        \\"Category\\": \\"气球\\",\\n        \\"Mask\\": {\\n          \\"Sizes\\": [\\n            0\\n          ],\\n          \\"Counts\\": \\"UPf1c1Zm1;E;F:E;G9E:G9E;_Oa0_O`0A`0E;I7I8H7H8H9G9F:F9G:D;E;E;D<E;E;F:E;F:F9H****\\"\\n        },\\n        \\"Contours\\": [\\n          {\\n            \\"X\\": 1394,\\n            \\"Y\\": 510\\n          }\\n        ]\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<CustomizeInstanceSegmentImageResponse>\\n    <RequestId>AB3F19AE-F3D3-5EEE-97AF-57B7397B5C9B</RequestId>\\n    <Data>\\n        <Elements>\\n            <Score>0.6564025282859802</Score>\\n            <Category>气球</Category>\\n            <Contours>\\n                <X>1394</X>\\n                <Y>510</Y>\\n            </Contours>\\n            <Contours>\\n                <X>1311</X>\\n                <Y>519</Y>\\n            </Contours>\\n            <Contours>\\n                <X>1233</X>\\n                <Y>535</Y>\\n            </Contours>\\n            <Contours>\\n                <X>1193</X>\\n                <Y>564</Y>\\n            </Contours>\\n            <Mask>\\n                <Sizes>2019</Sizes>\\n                <Sizes>2048</Sizes>\\n                <Counts>[UPf1c1Zm1;E;F:E;G9E:G9E;_Oa0_O`0A`0E;I7I8H7H8H9G9F:F9G:D;E;E;D&lt;E;E;F:E;F:F9H****]NU9jd1\\\\Od0]Oc0\\\\O&gt;B&gt;B=C=D&lt;D;D?B&gt;B=C=D&lt;eMabT&gt;</Counts>\\n            </Mask>\\n            <Boxes>\\n                <X>822</X>\\n                <Y>480</Y>\\n                <Height>822</Height>\\n                <Width>1094</Width>\\n            </Boxes>\\n        </Elements>\\n    </Data>\\n</CustomizeInstanceSegmentImageResponse>","errorExample":""}]',
            'title' => '自学习分割',
            'description' => '## 功能描述'."\n"
                .'根据输入的图像，输出图像中物体的轮廓和分类。'."\n"
                ."\n"
                .'> - 您可以进入[在线咨询](https://www.aliyun.com/core/online-consult?from=aZgW6LJHr2)获取在线人工帮助。'."\n"
                .'- 阿里云视觉智能开放平台视觉AI能力API接入、接口使用或问题咨询等，请通过钉钉群（23109592）加入阿里云视觉智能开放平台咨询群联系我们。'."\n"
                ."\n"
                .'## 接入指引'."\n"
                .'1. 注册阿里云账号：打开[阿里云官网](https://www.aliyun.com)，在阿里云官网右上角，单击**立即注册**，按照操作提示完成账号注册。'."\n"
                .'2. 开通能力：请确保您已开通自学习服务，若未开通服务请[立即开通](https://common-buy.aliyun.com/?commodityCode=viapi_selflearning_public_cn)。'."\n"
                .'3. 创建AccessKey：请确保您已[创建AccessKey](~~175144~~)，如果您使用的是子账号AccessKey，您需要给子账号赋予AliyunVIAPIFullAccess权限，具体操作，请参见[RAM授权](~~145025~~)。'."\n"
                .'4. 在线调试（可选）：您可以通过[OpenAPI Explorer](https://next.api.aliyun.com/api/viapi-regen/2021-11-19/CustomizeInstanceSegmentImage?lang=JAVA&sdkStyle=old)在线调试能力，查看完整的调用示例代码及SDK依赖信息，也可以下载完整的工程。'."\n"
                .'5. 开发接入：能力支持SDK方式调用，您可以选择合适的开发语言进行接入，具体操作，请参见[SDK总览](~~145033~~)。'."\n"
                ."\n"
                .'5. 开发接入步骤：    '."\n"
                .'- 在[SDK总览](~~145033~~)中选择您要接入使用的SDK语言。'."\n"
                .'- 在对应语言的SDK文档中找到AI类目为自学习（viapi-regen）类目的SDK包进行安装。'."\n"
                .'- 参考文档中提供的示例代码进行适当修改后调用。'."\n"
                ."\n"
                .'6. 客户端直接调用：该能力常用的客户端调用方式包括以下几种。'."\n"
                .'- [Web前端直接调用](~~467779~~)'."\n"
                .'- [小程序场景下直接调用](~~467780~~)'."\n"
                .'- [Android端直接调用](~~467781~~)'."\n"
                .'- [iOS端直接调用](~~467782~~)'."\n"
                ."\n"
                .'## 输入限制'."\n"
                ."\n"
                .'- 图像格式：JPEG、JPG、PNG、BMP、WEBP。'."\n"
                .'- 图像大小：不超过3 MB。'."\n"
                .'- URL地址中不能包含中文字符。',
            'responseParamsDescription' => '## SDK参考'."\n"
                .'阿里云视觉AI自学习类目下的自学习分割能力推荐使用SDK调用，支持多种编程语言，调用时请选择AI类目为自学习（viapi-regen）的SDK包，文件参数通过SDK调用可支持本地文件及任意URL，具体可参见[SDK总览](~~145033~~)。',
            'extraInfo' => '## 错误码'."\n"
                .'关于获取标注标签详情的错误码，详情请参见[常见错误码](~~441239~~)。'."\n"
                ."\n"
                .'## 安全声明'."\n"
                .'- 请确保上传的图片或文件来源符合相应的法律法规。'."\n"
                .'- 通过体验调试上传的临时文件有效期为1小时，在24小时后会被系统自动清理删除。',
        ],
        'GetServiceQps' => [
            'methods' => [
                'post',
                'get',
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
                    'name' => 'Id',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '服务ID，用以标识唯一服务。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '126',
                    ],
                ],
                [
                    'name' => 'StartTime',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '开始时间。'."\n"
                            ."\n"
                            .'> - 开始时间不能大于结束时间。'."\n"
                            .'- 开始时间和结束时间的间隔不能大于365天。'."\n"
                            .'- 若输入参数中的开始时间为空，结束时间不为空，会查询结束时间前7天内的服务的调用情况。'."\n"
                            .'- 若输入参数中的开始时间不为空，结束时间为空，会查询开始时间后7天内的服务的调用情况。'."\n"
                            .'- 若开始时间和结束时间都为空，会查询当前时间前7天内的服务的调用情况。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '1653494400000',
                    ],
                ],
                [
                    'name' => 'EndTime',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '结束时间。'."\n"
                            ."\n"
                            .'> - 结束时间不能小于开始时间。'."\n"
                            .'- 开始时间和结束时间的间隔不能大于365天。'."\n"
                            .'- 若输入参数中的开始时间为空，结束时间不为空，会查询结束时间前7天内的服务的调用情况。'."\n"
                            .'- 若输入参数中的开始时间不为空，结束时间为空，会查询开始时间后7天内的服务的调用情况。'."\n"
                            .'- 若开始时间和结束时间都为空，会查询当前时间前7天内的服务的调用情况。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '1661270399000',
                    ],
                ],
                [
                    'name' => 'CallerParentIdList',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'description' => '当前服务的调用者ID（阿里云账号ID）。',
                        'type' => 'array',
                        'items' => [
                            'description' => '当前服务的调用者ID（阿里云账号ID）。',
                            'type' => 'string',
                            'required' => false,
                            'example' => '171673532680****,121998460522****',
                        ],
                        'required' => false,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '接口返回参数。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '每个请求分配唯一的服务器请求ID。',
                                'type' => 'string',
                                'example' => '4EC52691-F5E8-01C7-945E-7DDBA72BCBFB',
                            ],
                            'Data' => [
                                'description' => '返回的结果数据内容。',
                                'type' => 'object',
                                'properties' => [
                                    'UserQps' => [
                                        'description' => '服务在一个时间段内的QPS情况。',
                                        'type' => 'object',
                                        'example' => '{     "171673532680****":[{"dateTime":1661247217888,"maxQps":2}],     "121998460522****":[{"dateTime":1661247217888,"maxQps":3}]   }',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"4EC52691-F5E8-01C7-945E-7DDBA72BCBFB\\",\\n  \\"Data\\": {\\n    \\"UserQps\\": {\\n      \\"171673532680****\\": [\\n        {\\n          \\"dateTime\\": 1661247217888,\\n          \\"maxQps\\": 2\\n        }\\n      ],\\n      \\"121998460522****\\": [\\n        {\\n          \\"dateTime\\": 1661247217888,\\n          \\"maxQps\\": 3\\n        }\\n      ]\\n    }\\n  }\\n}","errorExample":""},{"type":"xml","example":"<GetServiceQpsResponse>\\n    <RequestId>4EC52691-F5E8-01C7-945E-7DDBA72BCBFB</RequestId>\\n    <Data>\\n        <UserQps>\\n            <171673532680****>\\n                <dateTime>1661247217888</dateTime>\\n                <maxQps>2</maxQps>\\n            </171673532680****>\\n            <121998460522****>\\n                <dateTime>1661247217888</dateTime>\\n                <maxQps>3</maxQps>\\n            </121998460522****>\\n        </UserQps>\\n    </Data>\\n    <Code>200</Code>\\n</GetServiceQpsResponse>","errorExample":""}]',
            'title' => '获取服务QPS',
            'summary' => '获取服务QPS。',
            'description' => '## 功能描述'."\n"
                .'根据输入参数，获取相应服务在某个时间段内的QPS情况。'."\n"
                ."\n"
                .'> - 您可以进入[在线咨询](https://www.aliyun.com/core/online-consult?from=aZgW6LJHr2)获取在线人工帮助。'."\n"
                .'- 阿里云视觉智能开放平台视觉AI能力API接入、接口使用或问题咨询等，请通过钉钉群（23109592）加入阿里云视觉智能开放平台咨询群联系我们。'."\n"
                ."\n"
                .'## 接入指引'."\n"
                .'1. 注册阿里云账号：打开[阿里云官网](https://www.aliyun.com)，在阿里云官网右上角，单击**立即注册**，按照操作提示完成账号注册。'."\n"
                .'2. 开通能力：请确保您已开通自学习服务，若未开通服务请[立即开通](https://common-buy.aliyun.com/?commodityCode=viapi_selflearning_public_cn)。'."\n"
                .'3. 创建AccessKey：请确保您已[创建AccessKey](~~175144~~)，如果您使用的是子账号AccessKey，您需要给子账号赋予AliyunVIAPIFullAccess权限，具体操作，请参见[RAM授权](~~145025~~)。'."\n"
                .'4. 在线调试（可选）：您可以通过[OpenAPI Explorer](https://next.api.aliyun.com/api/viapi-regen/2021-11-19/GetServiceQps?lang=JAVA&sdkStyle=old)在线调试能力，查看完整的调用示例代码及SDK依赖信息，也可以下载完整的工程。'."\n"
                .'5. 开发接入步骤：    '."\n"
                .'- 在[SDK总览](~~145033~~)中选择您要接入使用的SDK语言。'."\n"
                .'- 在对应语言的SDK文档中找到AI类目为自学习（viapi-regen）类目的SDK包进行安装。'."\n"
                .'- 参考文档中提供的示例代码进行适当修改后调用。'."\n"
                ."\n"
                .'6. 客户端直接调用：该能力常用的客户端调用方式包括以下几种。'."\n"
                .'- [Web前端直接调用](~~467779~~)'."\n"
                .'- [小程序场景下直接调用](~~467780~~)'."\n"
                .'- [Android端直接调用](~~467781~~)'."\n"
                .'- [iOS端直接调用](~~467782~~)',
            'responseParamsDescription' => '## SDK参考'."\n"
                .'阿里云视觉AI自学习类目下的获取服务调用QPS情况能力推荐使用SDK调用，支持多种编程语言，调用时请选择AI类目为自学习（viapi-regen）的SDK包，文件参数通过SDK调用可支持本地文件及任意URL，具体可参见[SDK总览](~~145033~~)。',
            'extraInfo' => '## 错误码'."\n"
                .'关于获取服务调用QPS情况的错误码，详情请参见[常见错误码](~~441239~~)。'."\n"
                ."\n"
                .'## 安全声明'."\n"
                .'- 请确保上传的图片或文件来源符合相应的法律法规。'."\n"
                .'- 通过体验调试上传的临时文件有效期为1小时，在24小时后会被系统自动清理删除。',
        ],
        'GetServiceInvoke' => [
            'methods' => [
                'post',
                'get',
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
                    'name' => 'Id',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '服务ID，用以标识唯一服务。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '126',
                    ],
                ],
                [
                    'name' => 'StartTime',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '开始时间。'."\n"
                            .'> - 开始时间不能大于结束时间。'."\n"
                            .'- 开始时间和结束时间的间隔不能大于365天。'."\n"
                            .'- 若输入参数中的开始时间为空，结束时间不为空，会查询结束时间前7天内的服务的调用情况。'."\n"
                            .'- 若输入参数中的开始时间不为空，结束时间为空，会查询开始时间后7天内的服务的调用情况。'."\n"
                            .'- 若开始时间和结束时间都为空，会查询当前时间前7天内的服务的调用情况。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '1653494400000',
                    ],
                ],
                [
                    'name' => 'EndTime',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '结束时间。'."\n"
                            ."\n"
                            .'> - 结束时间不能小于开始时间。'."\n"
                            .'- 开始时间和结束时间的间隔不能大于365天。'."\n"
                            .'- 若输入参数中的开始时间为空，结束时间不为空，会查询结束时间前7天内的服务的调用情况。'."\n"
                            .'- 若输入参数中的开始时间不为空，结束时间为空，会查询开始时间后7天内的服务的调用情况。'."\n"
                            .'- 若开始时间和结束时间都为空，会查询当前时间前7天内的服务的调用情况。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '1661270399000',
                    ],
                ],
                [
                    'name' => 'CallerParentIdList',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'description' => '当前服务的调用者ID（阿里云账号ID）。',
                        'type' => 'array',
                        'items' => [
                            'description' => '当前服务的调用者ID（阿里云账号ID）。',
                            'type' => 'string',
                            'required' => false,
                            'example' => '171673532680****,121998460522****',
                        ],
                        'required' => false,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '接口返回参数。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'A7AAA063-55EA-0BF7-AE90-678E08CDCDFF',
                            ],
                            'Data' => [
                                'description' => '返回的结果数据内容。',
                                'type' => 'object',
                                'properties' => [
                                    'UserInvoke' => [
                                        'description' => '服务在一个时间段内的调用量情况。',
                                        'type' => 'object',
                                        'example' => '"171673532680****":[{"dateTime":1661247217888,"invoke":20}], "121998460522****":[{"dateTime":1661247217888,"invoke":20}]',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"A7AAA063-55EA-0BF7-AE90-678E08CDCDFF\\",\\n  \\"Data\\": {\\n    \\"UserInvoke\\": {\\n      \\"test\\": \\"test\\",\\n      \\"test2\\": 1\\n    }\\n  }\\n}","errorExample":""},{"type":"xml","example":"<GetServiceInvokeResponse>\\n    <RequestId>A7AAA063-55EA-0BF7-AE90-678E08CDCDFF</RequestId>\\n    <Data>\\n        <UserInvoke>\\n            <171673532680****>\\n                <dateTime>1661247217888</dateTime>\\n                <invoke>20</invoke>\\n            </171673532680****>\\n            <121998460522****>\\n                <dateTime>1661247217888</dateTime>\\n                <invoke>20</invoke>\\n            </121998460522****>\\n        </UserInvoke>\\n    </Data>\\n    <Code>200</Code>\\n</GetServiceInvokeResponse>","errorExample":""}]',
            'title' => '获取服务调用量',
            'summary' => '获取服务调用量。',
            'description' => '## 功能描述'."\n"
                .'根据输入参数，获取相应服务在某个时间段内的调用量情况。'."\n"
                ."\n"
                .'> - 您可以进入[在线咨询](https://www.aliyun.com/core/online-consult?from=aZgW6LJHr2)获取在线人工帮助。'."\n"
                .'- 阿里云视觉智能开放平台视觉AI能力API接入、接口使用或问题咨询等，请通过钉钉群（23109592）加入阿里云视觉智能开放平台咨询群联系我们。'."\n"
                ."\n"
                .'## 接入指引'."\n"
                .'1. 注册阿里云账号：打开[阿里云官网](https://www.aliyun.com)，在阿里云官网右上角，单击**立即注册**，按照操作提示完成账号注册。'."\n"
                .'2. 开通能力：请确保您已开通自学习服务，若未开通服务请[立即开通](https://common-buy.aliyun.com/?commodityCode=viapi_selflearning_public_cn)。'."\n"
                .'3. 创建AccessKey：请确保您已[创建AccessKey](~~175144~~)，如果您使用的是子账号AccessKey，您需要给子账号赋予AliyunVIAPIFullAccess权限，具体操作，请参见[RAM授权](~~145025~~)。'."\n"
                .'4. 在线调试（可选）：您可以通过[OpenAPI Explorer](https://next.api.aliyun.com/api/viapi-regen/2021-11-19/GetServiceInvoke?lang=JAVA&sdkStyle=old)在线调试能力，查看完整的调用示例代码及SDK依赖信息，也可以下载完整的工程。'."\n"
                .'5. 开发接入步骤：    '."\n"
                .'- 在[SDK总览](~~145033~~)中选择您要接入使用的SDK语言。'."\n"
                .'- 在对应语言的SDK文档中找到AI类目为自学习（viapi-regen）类目的SDK包进行安装。'."\n"
                .'- 参考文档中提供的示例代码进行适当修改后调用。'."\n"
                ."\n"
                .'6. 客户端直接调用：该能力常用的客户端调用方式包括以下几种。'."\n"
                .'- [Web前端直接调用](~~467779~~)'."\n"
                .'- [小程序场景下直接调用](~~467780~~)'."\n"
                .'- [Android端直接调用](~~467781~~)'."\n"
                .'- [iOS端直接调用](~~467782~~)',
            'requestParamsDescription' => '无',
            'responseParamsDescription' => '## SDK参考'."\n"
                .'阿里云视觉AI自学习类目下的获取服务调用量能力推荐使用SDK调用，支持多种编程语言，调用时请选择AI类目为自学习（viapi-regen）的SDK包，文件参数通过SDK调用可支持本地文件及任意URL，具体可参见[SDK总览](~~145033~~)。',
            'extraInfo' => '## 错误码'."\n"
                .'关于获取服务调用量的错误码，详情请参见[常见错误码](~~441239~~)。'."\n"
                ."\n"
                .'## 安全声明'."\n"
                .'- 请确保上传的图片或文件来源符合相应的法律法规。'."\n"
                .'- 通过体验调试上传的临时文件有效期为1小时，在24小时后会被系统自动清理删除。',
        ],
        'DownloadDataset' => [
            'methods' => [
                'post',
                'get',
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
                    'name' => 'DatasetId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '空间id',
                        'description' => '数据集ID。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '455',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '接口返回参数。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '每个请求分配唯一的服务器请求ID。',
                                'type' => 'string',
                                'example' => '2F41B093-558B-04DB-B58D-1E40419593E2',
                            ],
                            'Data' => [
                                'description' => '返回的结果数据内容。',
                                'type' => 'object',
                                'properties' => [
                                    'OssHttpUrl' => [
                                        'description' => '下载文件的OSS URL。',
                                        'type' => 'string',
                                        'example' => 'https://viapi-regen-hangzhou-prod.oss-cn-hangzhou.aliyuncs.com/daily/data/455/dataSignatureUrl/test6_dataSignatureUrl.txt?Expires=1661332164&OSSAccessKeyId=LTAI5tMANw98BWLM7sTN****&Signature=M4R2e5RIaVhDVoBDhXa%2FjS0gf90%3D',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"2F41B093-558B-04DB-B58D-1E40419593E2\\",\\n  \\"Data\\": {\\n    \\"OssHttpUrl\\": \\"https://viapi-regen-hangzhou-prod.oss-cn-hangzhou.aliyuncs.com/daily/data/455/dataSignatureUrl/test6_dataSignatureUrl.txt?Expires=1661332164&OSSAccessKeyId=LTAI5tMANw98BWLM7sTN****&Signature=M4R2e5RIaVhDVoBDhXa%2FjS0gf90%3D\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DownloadDatasetResponse>\\n    <code>200</code>\\n    <data>\\n        <RequestId>2F41B093-558B-04DB-B58D-1E40419593E2</RequestId>\\n        <Data>\\n            <OssHttpUrl>https://viapi-regen-hangzhou-prod.oss-cn-hangzhou.aliyuncs.com/daily/data/455/dataSignatureUrl/test6_dataSignatureUrl.txt?Expires=1661332164&amp;OSSAccessKeyId=LTAI5tMANw98BWLM7sTN****&amp;Signature=M4R2e5RIaVhDVoBDhXa%2FjS0gf90%3D</OssHttpUrl>\\n        </Data>\\n        <Code>200</Code>\\n    </data>\\n    <httpStatusCode>200</httpStatusCode>\\n    <requestId>2F41B093-558B-04DB-B58D-1E40419593E2</requestId>\\n    <successResponse>true</successResponse>\\n</DownloadDatasetResponse>","errorExample":""}]',
            'title' => '下载数据集',
            'summary' => '下载数据集。',
            'description' => '## 功能描述'."\n"
                .'根据输入参数，下载相应的数据集签名OSS路径名称列表（有效期为七天）。'."\n"
                ."\n"
                .'> - 您可以进入[在线咨询](https://www.aliyun.com/core/online-consult?from=aZgW6LJHr2)获取在线人工帮助。'."\n"
                .'- 阿里云视觉智能开放平台视觉AI能力API接入、接口使用或问题咨询等，请通过钉钉群（23109592）加入阿里云视觉智能开放平台咨询群联系我们。'."\n"
                ."\n"
                .'## 接入指引'."\n"
                .'1. 注册阿里云账号：打开[阿里云官网](https://www.aliyun.com)，在阿里云官网右上角，单击**立即注册**，按照操作提示完成账号注册。'."\n"
                .'2. 开通能力：请确保您已开通自学习服务，若未开通服务请[立即开通](https://common-buy.aliyun.com/?commodityCode=viapi_selflearning_public_cn)。'."\n"
                .'3. 创建AccessKey：请确保您已[创建AccessKey](~~175144~~)，如果您使用的是子账号AccessKey，您需要给子账号赋予AliyunVIAPIFullAccess权限，具体操作，请参见[RAM授权](~~145025~~)。'."\n"
                .'4. 在线调试（可选）：您可以通过[OpenAPI Explorer](https://next.api.aliyun.com/api/viapi-regen/2021-11-19/DownloadDataset?lang=JAVA&sdkStyle=old)在线调试能力，查看完整的调用示例代码及SDK依赖信息，也可以下载完整的工程。'."\n"
                ."\n"
                .'5. 开发接入步骤：    '."\n"
                .'- 在[SDK总览](~~145033~~)中选择您要接入使用的SDK语言。'."\n"
                .'- 在对应语言的SDK文档中找到AI类目为自学习（viapi-regen）类目的SDK包进行安装。'."\n"
                .'- 参考文档中提供的示例代码进行适当修改后调用。'."\n"
                ."\n"
                .'6. 客户端直接调用：该能力常用的客户端调用方式包括以下几种。'."\n"
                .'- [Web前端直接调用](~~467779~~)'."\n"
                .'- [小程序场景下直接调用](~~467780~~)'."\n"
                .'- [Android端直接调用](~~467781~~)'."\n"
                .'- [iOS端直接调用](~~467782~~)',
            'responseParamsDescription' => '## SDK参考'."\n"
                .'阿里云视觉AI自学习类目下的下载数据集签名路径列表能力推荐使用SDK调用，支持多种编程语言，调用时请选择AI类目为自学习（viapi-regen）的SDK包，文件参数通过SDK调用可支持本地文件及任意URL，具体可参见[SDK总览](~~145033~~)。',
            'extraInfo' => '## 错误码'."\n"
                .'关于下载数据集签名路径列表的错误码，详情请参见[常见错误码](~~441239~~)。'."\n"
                ."\n"
                .'## 安全声明'."\n"
                .'- 请确保上传的图片或文件来源符合相应的法律法规。'."\n"
                .'- 通过体验调试上传的临时文件有效期为1小时，在24小时后会被系统自动清理删除。',
        ],
        'DeleteDataReflowData' => [
            'methods' => [
                'post',
                'get',
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
                    'name' => 'ServiceId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '服务ID。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '432',
                    ],
                ],
                [
                    'name' => 'Id',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '回流数据ID。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '1663653105292000',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '1',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '每个请求分配唯一的服务器请求ID。',
                                'type' => 'string',
                                'example' => 'DBEADF14-1B61-5BB2-B65B-4314F339B62A',
                            ],
                            'Data' => [
                                'description' => '返回的结果数据内容。',
                                'type' => 'object',
                                'properties' => [
                                    'Id' => [
                                        'description' => '回流数据ID。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '1663653105292000',
                                    ],
                                    'ServiceId' => [
                                        'description' => '服务ID。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '432',
                                    ],
                                    'Status' => [
                                        'description' => '数据状态。'."\n"
                                            .'- **SAVED**：正常'."\n"
                                            .'- **DELETED**：删除',
                                        'type' => 'string',
                                        'example' => 'DELETED',
                                    ],
                                    'GmtModified' => [
                                        'description' => '回流数据删除时间。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '1663657637368',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"DBEADF14-1B61-5BB2-B65B-4314F339B62A\\",\\n  \\"Data\\": {\\n    \\"Id\\": 1663653105292000,\\n    \\"ServiceId\\": 432,\\n    \\"Status\\": \\"DELETED\\",\\n    \\"GmtModified\\": 1663657637368\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DeleteDataReflowDataResponse>\\n    <RequestId>DBEADF14-1B61-5BB2-B65B-4314F339B62A</RequestId>\\n    <Data>\\n        <Id>1663653105292000</Id>\\n        <ServiceId>432</ServiceId>\\n        <Status>DELETED</Status>\\n        <GmtModified>1663657637368</GmtModified>\\n    </Data>\\n</DeleteDataReflowDataResponse>","errorExample":""}]',
            'title' => '删除回流数据',
            'summary' => '本文介绍删除回流数据DeleteDataReflowData的语法及示例。',
            'description' => '## 功能描述'."\n"
                .'根据输入参数，删除相应的回流数据。'."\n"
                ."\n"
                .'> - 您可以进入[在线咨询](https://www.aliyun.com/core/online-consult?from=aZgW6LJHr2)获取在线人工帮助。'."\n"
                .'- 阿里云视觉智能开放平台视觉AI能力API接入、接口使用或问题咨询等，请通过钉钉群（23109592）加入阿里云视觉智能开放平台咨询群联系我们。'."\n"
                ."\n"
                .'## 接入指引'."\n"
                .'1. 注册阿里云账号：打开[阿里云官网](https://www.aliyun.com)，在阿里云官网右上角，单击**立即注册**，按照操作提示完成账号注册。'."\n"
                .'2. 开通能力：请确保您已开通自学习服务，若未开通服务请[立即开通](https://common-buy.aliyun.com/?commodityCode=viapi_selflearning_public_cn)。'."\n"
                .'3. 创建AccessKey：请确保您已[创建AccessKey](~~175144~~)，如果您使用的是子账号AccessKey，您需要给子账号赋予AliyunVIAPIFullAccess权限，具体操作，请参见[RAM授权](~~145025~~)。'."\n"
                .'4. 在线调试（可选）：您可以通过[OpenAPI Explorer](https://next.api.aliyun.com/api/viapi-regen/2021-11-19/DeleteDataReflowData?lang=JAVA&sdkStyle=old)在线调试能力，查看完整的调用示例代码及SDK依赖信息，也可以下载完整的工程。'."\n"
                .'5. 开发接入步骤：    '."\n"
                .'- 在[SDK总览](~~145033~~)中选择您要接入使用的SDK语言。'."\n"
                .'- 在对应语言的SDK文档中找到AI类目为自学习（viapi-regen）类目的SDK包进行安装。'."\n"
                .'- 参考文档中提供的示例代码进行适当修改后调用。'."\n"
                ."\n"
                .'6. 客户端直接调用：该能力常用的客户端调用方式包括以下几种。'."\n"
                .'- [Web前端直接调用](~~467779~~)'."\n"
                .'- [小程序场景下直接调用](~~467780~~)'."\n"
                .'- [Android端直接调用](~~467781~~)'."\n"
                .'- [iOS端直接调用](~~467782~~)',
            'responseParamsDescription' => '## SDK参考'."\n"
                .'阿里云视觉AI自学习类目下的删除回流数据能力推荐使用SDK调用，支持多种编程语言，调用时请选择AI类目为自学习（viapi-regen）的SDK包，文件参数通过SDK调用可支持本地文件及任意URL，具体可参见[SDK总览](~~145033~~)。',
            'extraInfo' => '## 错误码'."\n"
                .'关于删除回流数据的错误码，详情请参见[常见错误码](~~441239~~)。'."\n"
                ."\n"
                .'## 安全声明'."\n"
                .'- 请确保上传的图片或文件来源符合相应的法律法规。'."\n"
                .'- 通过体验调试上传的临时文件有效期为1小时，在24小时后会被系统自动清理删除。',
        ],
        'ListDataReflowDatas' => [
            'methods' => [
                'post',
                'get',
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
                    'name' => 'CurrentPage',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '当前页码。默认为第1页。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '每页展示的数据条数。默认为每页10条数据。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '10',
                    ],
                ],
                [
                    'name' => 'ServiceId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '服务ID。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '432',
                    ],
                ],
                [
                    'name' => 'StartTime',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '开始时间。'."\n"
                            .'> - StartTime不能大于EndTime。'."\n"
                            .'- 当StartTime为空，EndTime不为空时，会导出EndTime前7天的回流数据。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '1663084800000',
                    ],
                ],
                [
                    'name' => 'EndTime',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '结束时间。'."\n"
                            ."\n"
                            .'> - EndTime不能小于StartTime。'."\n"
                            .'- 当EndTime为空，StartTime不为空时，会导出StartTime后7天的回流数据。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '1663689599000',
                    ],
                ],
                [
                    'name' => 'Category',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '标签（支持模糊搜索）。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Test',
                    ],
                ],
                [
                    'name' => 'ImageName',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '文件名称（支持模糊搜索）。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '1716735326807772/275742949931921578/KiMRW_1663653105196.jpg',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '每个请求分配唯一的服务器请求ID。',
                                'type' => 'string',
                                'example' => '2BB7D6DC-4F64-5D2F-824A-F7F5AD3233CE',
                            ],
                            'Data' => [
                                'description' => '返回的结果数据内容。',
                                'type' => 'object',
                                'properties' => [
                                    'CurrentPage' => [
                                        'description' => '当前页码。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '1',
                                    ],
                                    'PageSize' => [
                                        'description' => '每页展示的数据条数。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '10',
                                    ],
                                    'TotalPage' => [
                                        'description' => '总共页码数。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '20',
                                    ],
                                    'TotalCount' => [
                                        'description' => '总共数据条数。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '193',
                                    ],
                                    'Elements' => [
                                        'description' => '回流数据。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '回流数据。',
                                            'type' => 'object',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"2BB7D6DC-4F64-5D2F-824A-F7F5AD3233CE\\",\\n  \\"Data\\": {\\n    \\"CurrentPage\\": 1,\\n    \\"PageSize\\": 10,\\n    \\"TotalPage\\": 20,\\n    \\"TotalCount\\": 193,\\n    \\"Elements\\": [\\n      {\\n        \\"test\\": \\"test\\",\\n        \\"test2\\": 1\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<ListDataReflowDatasResponse>\\n    <RequestId>2BB7D6DC-4F64-5D2F-824A-F7F5AD3233CE</RequestId>\\n    <Data>\\n        <CurrentPage>1</CurrentPage>\\n        <PageSize>10</PageSize>\\n        <TotalPage>20</TotalPage>\\n        <TotalCount>193</TotalCount>\\n        <Elements>\\n            <result>[{\\"boxes\\":{\\"x\\":413,\\"width\\":98,\\"y\\":189,\\"height\\":413},\\"score\\":0.8668825030326843,\\"category\\":\\"car\\"}]</result>\\n            <imageName>1716735326807772/275742949931921578/KiMRW_1663653105196.jpg</imageName>\\n            <imageUrl>https://regen-test-bucket.oss-cn-hangzhou.aliyuncs.com/jhdtest/%E6%A3%80%E6%B5%8B/%E5%9B%9E%E6%B5%812/1716735326807772/275742949931921578/KiMRW_1663653105196.jpg?Expires=1663743719&amp;OSSAccessKeyId=STS.NTvBpuVu46BQC8TFUFoaL****&amp;Signature=1FgBAVPDE9PBGh85mdUGo41cBBw%3D&amp;security-token=CAIS%2FwF1q6Ft5B2yfSjIr5fDCcrBu6oVgYC6QR7lolUTY%2B5gnJfAgTz2IH9NdXlvCe4ZsvU%2BlW1T6%2FYTlqxNarZ9ZBRTkg%2FXM8wFnzm6aq%2Ft5uaXj9Vd%2BrDHdEGXDxnkprywB8zyUNLafNq0dlnAjVUd6LDmdDKkLTfHWN%2Fz%2FvwBVNkMWRSiZjdrHcpfIhAYyPUXLnzML%2F2gQHWI6yjydBM341Qj0j4ks%2FrvmpLDtUDk4QekmrNPlePYOYO5asRgBpB7Xuqu0fZ%2BHqi7i3EJukgVpPkp0P0VqGqc44HMGSpY5xSXLuzK89R3LRV0aaU8F6NKpeX4ied%2FvuHDcyNSMOPUuosagAEK4AcaF3HL1V1VVyAb%2FeVSCqamZKxAI3CdCjZwEPMf4Vn%2FgdYJfiwhsy0d3TIeNzoFOxJMpTY11eUFZT6EZgSF6XaSx1lLP8dEQgC8p0I67VTDda9cb3ieW2ICgoSNGuZhDU6enBkYIvhQhAQWznv3n%2FwVDxZ8SXUnuJM7xNSB5g%3****</imageUrl>\\n            <id>1663653105292000</id>\\n            <thumbPath>https://regen-test-bucket.oss-cn-hangzhou.aliyuncs.com/jhdtest/%E6%A3%80%E6%B5%8B/%E5%9B%9E%E6%B5%812/1716735326807772/275742949931921578/KiMRW_1663653105196.jpg?Expires=1663743719&amp;OSSAccessKeyId=STS.NU5TWFHuBvQG91zzqAwW9****&amp;Signature=A%2BtgARoFiZn0hmxCorGAawWa5Z4%3D&amp;x-oss-process=image%2Fresize%2Cm_lfit%2Ch_84%2Climit_1%2Fauto-orient%2C1%2Fquality%2Cq_90&amp;security-token=CAIS%2FwF1q6Ft5B2yfSjIr5aAH%2B3ypapjwZOsOxfLnnEUe9gV2Pb8lzz2IH9NdXlvCe4ZsvU%2BlW1T6%2FYTlqxNarZ9ZBRonQ%2FXM8wFnzm6aq%2Ft5uaXj9Vd%2BrDHdEGXDxnkprywB8zyUNLafNq0dlnAjVUd6LDmdDKkLTfHWN%2Fz%2FvwBVNkMWRSiZjdrHcpfIhAYyPUXLnzML%2F2gQHWI6yjydBM341Qj0j4ks%2FrvmpLDtUDk4QekmrNPlePYOYO5asRgBpB7Xuqu0fZ%2BHqi7i3EJukgVpPkp0P0VqGqc44HMGSpY5xSXLuzK89R3LRV0aaU8F6NKpeX4ied%2FvuHDcyNSMOPUuosagAE3AEIIYGytKNYglv9YcngtRsvBsMcpm%2FcGzi24vwgDTPY8cZwtzd%2FOAFGR8e5GiqZmBOLdKqSvYkIZu29QWXKEnT5vd7DPtFwRQ8vSL%2BEGXGLLOarY%2BfCvo2HICKTI1WQ6CHhvOOronJi3EHCJCXlJw%2FH72aymsSjfERAeUu9D2g%3****</thumbPath>\\n            <gmtCreate>1663653105285</gmtCreate>\\n            <status>SAVED</status>\\n        </Elements>\\n    </Data>\\n</ListDataReflowDatasResponse>","errorExample":""}]',
            'title' => '回流数据列表',
            'summary' => '本文介绍回流数据列表ListDataReflowDatas的语法及示例。',
            'description' => '## 功能描述'."\n"
                .'根据输入参数，查询当前服务的回流数据。'."\n"
                ."\n"
                .'> - 您可以进入[在线咨询](https://www.aliyun.com/core/online-consult?from=aZgW6LJHr2)获取在线人工帮助。'."\n"
                .'- 阿里云视觉智能开放平台视觉AI能力API接入、接口使用或问题咨询等，请通过钉钉群（23109592）加入阿里云视觉智能开放平台咨询群联系我们。'."\n"
                ."\n"
                .'## 接入指引'."\n"
                .'1. 注册阿里云账号：打开[阿里云官网](https://www.aliyun.com)，在阿里云官网右上角，单击**立即注册**，按照操作提示完成账号注册。'."\n"
                .'2. 开通能力：请确保您已开通自学习服务，若未开通服务请[立即开通](https://common-buy.aliyun.com/?commodityCode=viapi_selflearning_public_cn)。'."\n"
                .'3. 创建AccessKey：请确保您已[创建AccessKey](~~175144~~)，如果您使用的是子账号AccessKey，您需要给子账号赋予AliyunVIAPIFullAccess权限，具体操作，请参见[RAM授权](~~145025~~)。'."\n"
                .'4. 在线调试（可选）：您可以通过[OpenAPI Explorer](https://next.api.aliyun.com/api/viapi-regen/2021-11-19/ListDataReflowDatas?lang=JAVA&sdkStyle=old)在线调试能力，查看完整的调用示例代码及SDK依赖信息，也可以下载完整的工程。'."\n"
                .'5. 开发接入步骤：    '."\n"
                .'- 在[SDK总览](~~145033~~)中选择您要接入使用的SDK语言。'."\n"
                .'- 在对应语言的SDK文档中找到AI类目为自学习（viapi-regen）类目的SDK包进行安装。'."\n"
                .'- 参考文档中提供的示例代码进行适当修改后调用。'."\n"
                ."\n"
                .'6. 客户端直接调用：该能力常用的客户端调用方式包括以下几种。'."\n"
                .'- [Web前端直接调用](~~467779~~)'."\n"
                .'- [小程序场景下直接调用](~~467780~~)'."\n"
                .'- [Android端直接调用](~~467781~~)'."\n"
                .'- [iOS端直接调用](~~467782~~)',
            'responseParamsDescription' => '## Elements字段参数说明'."\n"
                .'| 字段 	| 类型 	| 是否必须 | 描述 |'."\n"
                .'| ---------- | -------- | ------------- | ------------ |'."\n"
                .'|imageName   | String |否  |图片名称。|'."\n"
                .'|imageUrl          | String |否  |图片OSS签名地址（有效期为24小时）。|'."\n"
                .'|thumbPath  | String|否   |缩略图OSS签名地址（有效期为24小时）。|'."\n"
                .'|result                 | Long |否   |调用算法的结果数据。 |'."\n"
                .'|id   | Long |否  |回流数据ID。 |'."\n"
                .'|status          | String|否|数据状态。取值：**SAVED**（正常），**DELETED**（删除）。|'."\n"
                .'|gmtCreate   	   |Long   |否	|回流数据入库时间。|'."\n"
                ."\n"
                .'## SDK参考'."\n"
                .'阿里云视觉AI自学习类目下的回流数据列表能力推荐使用SDK调用，支持多种编程语言，调用时请选择AI类目为自学习（viapi-regen）的SDK包，文件参数通过SDK调用可支持本地文件及任意URL，具体可参见[SDK总览](~~145033~~)。',
            'extraInfo' => '## 错误码'."\n"
                .'关于回流数据列表的错误码，详情请参见[常见错误码](~~441239~~)。'."\n"
                ."\n"
                .'## 安全声明'."\n"
                .'- 请确保上传的图片或文件来源符合相应的法律法规。'."\n"
                .'- 通过体验调试上传的临时文件有效期为1小时，在24小时后会被系统自动清理删除。',
        ],
        'DisableDataReflow' => [
            'methods' => [
                'post',
                'get',
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
                    'name' => 'ServiceId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '服务ID。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '456',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '每个请求分配唯一的服务器请求ID。',
                                'type' => 'string',
                                'example' => 'B44B8F1C-C97D-5C81-966A-5EE8D76F5CC9',
                            ],
                            'Data' => [
                                'description' => '返回的结果数据内容。',
                                'type' => 'object',
                                'properties' => [
                                    'ServiceId' => [
                                        'description' => '服务ID。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '456',
                                    ],
                                    'EnableDataReflowFlag' => [
                                        'description' => '数据回流开关标识。',
                                        'type' => 'boolean',
                                        'example' => 'false',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"B44B8F1C-C97D-5C81-966A-5EE8D76F5CC9\\",\\n  \\"Data\\": {\\n    \\"ServiceId\\": 456,\\n    \\"EnableDataReflowFlag\\": false\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DisableDataReflowResponse>\\n    <RequestId>B44B8F1C-C97D-5C81-966A-5EE8D76F5CC9</RequestId>\\n    <Data>\\n        <ServiceId>456</ServiceId>\\n        <EnableDataReflowFlag>false</EnableDataReflowFlag>\\n    </Data>\\n</DisableDataReflowResponse>","errorExample":""}]',
            'title' => '关闭数据回流',
            'summary' => '本文介绍关闭数据回流DisableDataReflow的语法及示例。',
            'description' => '## 功能描述'."\n"
                .'根据输入参数，关闭相应服务的数据回流。'."\n"
                ."\n"
                .'> - 您可以进入[在线咨询](https://www.aliyun.com/core/online-consult?from=aZgW6LJHr2)获取在线人工帮助。'."\n"
                .'- 阿里云视觉智能开放平台视觉AI能力API接入、接口使用或问题咨询等，请通过钉钉群（23109592）加入阿里云视觉智能开放平台咨询群联系我们。'."\n"
                ."\n"
                .'## 接入指引'."\n"
                .'1. 注册阿里云账号：打开[阿里云官网](https://www.aliyun.com)，在阿里云官网右上角，单击**立即注册**，按照操作提示完成账号注册。'."\n"
                .'2. 开通能力：请确保您已开通自学习服务，若未开通服务请[立即开通](https://common-buy.aliyun.com/?commodityCode=viapi_selflearning_public_cn)。'."\n"
                .'3. 创建AccessKey：请确保您已[创建AccessKey](~~175144~~)，如果您使用的是子账号AccessKey，您需要给子账号赋予AliyunVIAPIFullAccess权限，具体操作，请参见[RAM授权](~~145025~~)。'."\n"
                .'4. 在线调试（可选）：您可以通过[OpenAPI Explorer](https://next.api.aliyun.com/api/viapi-regen/2021-11-19/DisableDataReflow?lang=JAVA&sdkStyle=old)在线调试能力，查看完整的调用示例代码及SDK依赖信息，也可以下载完整的工程。'."\n"
                .'5. 开发接入步骤：  '."\n"
                .'- 在[SDK总览](~~145033~~)中选择您要接入使用的SDK语言。'."\n"
                .'- 在对应语言的SDK文档中找到AI类目为自学习（viapi-regen）类目的SDK包进行安装。'."\n"
                .'- 参考文档中提供的示例代码进行适当修改后调用。'."\n"
                ."\n"
                .'6. 客户端直接调用：该能力常用的客户端调用方式包括以下几种。'."\n"
                .'- [Web前端直接调用](~~467779~~)'."\n"
                .'- [小程序场景下直接调用](~~467780~~)'."\n"
                .'- [Android端直接调用](~~467781~~)'."\n"
                .'- [iOS端直接调用](~~467782~~)',
            'responseParamsDescription' => '## SDK参考'."\n"
                .'阿里云视觉AI自学习类目下的关闭数据回流能力推荐使用SDK调用，支持多种编程语言，调用时请选择AI类目为自学习（viapi-regen）的SDK包，文件参数通过SDK调用可支持本地文件及任意URL，具体可参见[SDK总览](~~145033~~)。',
            'extraInfo' => '## 错误码'."\n"
                .'关于关闭数据回流的错误码，详情请参见[常见错误码](~~441239~~)。'."\n"
                ."\n"
                .'## 安全声明'."\n"
                .'- 请确保上传的图片或文件来源符合相应的法律法规。'."\n"
                .'- 通过体验调试上传的临时文件有效期为1小时，在24小时后会被系统自动清理删除。',
        ],
        'ExportDataReflowDataList' => [
            'methods' => [
                'post',
                'get',
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
                    'name' => 'ServiceId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '空间id',
                        'description' => '服务ID。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '432',
                    ],
                ],
                [
                    'name' => 'StartTime',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '开始时间。'."\n"
                            ."\n"
                            .'> - StartTime不能大于EndTime。'."\n"
                            .'- 当StartTime为空，EndTime不为空时，会导出EndTime前7天的回流数据。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '1663084800000',
                    ],
                ],
                [
                    'name' => 'EndTime',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '结束时间。'."\n"
                            ."\n"
                            .'> - EndTime不能小于StartTime。'."\n"
                            .'- 当EndTime为空，StartTime不为空时，会导出StartTime后7天的回流数据。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '1663689599000',
                    ],
                ],
                [
                    'name' => 'ImageName',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '文件名称（支持模糊搜索）。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'TestName',
                    ],
                ],
                [
                    'name' => 'Category',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '标签（支持模糊搜索）。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Test',
                    ],
                ],
                [
                    'name' => 'FileType',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '导出文件类型。'."\n"
                            ."\n"
                            .'- **ONLY_IMAGE**（仅图片）：导出.txt格式文件，内容为图片的OSS签名路径（有效期为7天）。'."\n"
                            .'- **IMAGE_AND_LABEL**（图片+标注）：导出.csv格式文件，导出的文件支持标注本地文件上传。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'ONLY_IMAGE',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '每个请求分配唯一的服务器请求ID。',
                                'type' => 'string',
                                'example' => '4B27B05F-6F29-50AB-8382-43E6DDDC4666',
                            ],
                            'Data' => [
                                'description' => '返回的结果数据内容。',
                                'type' => 'object',
                                'properties' => [
                                    'OssHttpUrl' => [
                                        'description' => '下载文件的OSS URL。',
                                        'type' => 'string',
                                        'example' => 'https://viapi-regen-hangzhou-prod.oss-cn-hangzhou.aliyuncs.com/prod/service/432/dataReflow/dataReflow.txt?Expires=1663741242&OSSAccessKeyId=LTAI5t69vTgbfYeAKcsT****&Signature=nCl3dGW8WhHYBqDYJwzREZSSXFo%3D',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"4B27B05F-6F29-50AB-8382-43E6DDDC4666\\",\\n  \\"Data\\": {\\n    \\"OssHttpUrl\\": \\"https://viapi-regen-hangzhou-prod.oss-cn-hangzhou.aliyuncs.com/prod/service/432/dataReflow/dataReflow.txt?Expires=1663741242&OSSAccessKeyId=LTAI5t69vTgbfYeAKcsT****&Signature=nCl3dGW8WhHYBqDYJwzREZSSXFo%3D\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<ExportDataReflowDataListResponse>\\n    <RequestId>4B27B05F-6F29-50AB-8382-43E6DDDC4666</RequestId>\\n    <Data>\\n        <OssHttpUrl>https://viapi-regen-hangzhou-prod.oss-cn-hangzhou.aliyuncs.com/prod/service/432/dataReflow/dataReflow.txt?Expires=1663741242&amp;OSSAccessKeyId=LTAI5t69vTgbfYeAKcsT****&amp;Signature=nCl3dGW8WhHYBqDYJwzREZSSXFo%3D</OssHttpUrl>\\n    </Data>\\n</ExportDataReflowDataListResponse>","errorExample":""}]',
            'title' => '导出回流数据',
            'summary' => '本文介绍导出回流数据ExportDataReflowDataList的语法及示例。',
            'description' => '## 功能描述'."\n"
                .'根据输入参数，导出相应的回流数据。'."\n"
                ."\n"
                .'> - 您可以进入[在线咨询](https://www.aliyun.com/core/online-consult?from=aZgW6LJHr2)获取在线人工帮助。'."\n"
                .'- 阿里云视觉智能开放平台视觉AI能力API接入、接口使用或问题咨询等，请通过钉钉群（23109592）加入阿里云视觉智能开放平台咨询群联系我们。'."\n"
                ."\n"
                .'## 接入指引'."\n"
                .'1. 注册阿里云账号：打开[阿里云官网](https://www.aliyun.com)，在阿里云官网右上角，单击**立即注册**，按照操作提示完成账号注册。'."\n"
                .'2. 开通能力：请确保您已开通自学习服务，若未开通服务请[立即开通](https://common-buy.aliyun.com/?commodityCode=viapi_selflearning_public_cn)。'."\n"
                .'3. 创建AccessKey：请确保您已[创建AccessKey](~~175144~~)，如果您使用的是子账号AccessKey，您需要给子账号赋予AliyunVIAPIFullAccess权限，具体操作，请参见[RAM授权](~~145025~~)。'."\n"
                .'4. 在线调试（可选）：您可以通过[OpenAPI Explorer](https://next.api.aliyun.com/api/viapi-regen/2021-11-19/ExportDataReflowDataList?lang=JAVA&sdkStyle=old)在线调试能力，查看完整的调用示例代码及SDK依赖信息，也可以下载完整的工程。'."\n"
                .'5. 开发接入步骤：    '."\n"
                .'- 在[SDK总览](~~145033~~)中选择您要接入使用的SDK语言。'."\n"
                .'- 在对应语言的SDK文档中找到AI类目为自学习（viapi-regen）类目的SDK包进行安装。'."\n"
                .'- 参考文档中提供的示例代码进行适当修改后调用。'."\n"
                ."\n"
                .'6. 客户端直接调用：该能力常用的客户端调用方式包括以下几种。'."\n"
                .'- [Web前端直接调用](~~467779~~)'."\n"
                .'- [小程序场景下直接调用](~~467780~~)'."\n"
                .'- [Android端直接调用](~~467781~~)'."\n"
                .'- [iOS端直接调用](~~467782~~)',
            'responseParamsDescription' => '## SDK参考'."\n"
                .'阿里云视觉AI自学习类目下的导出回流数据能力推荐使用SDK调用，支持多种编程语言，调用时请选择AI类目为自学习（viapi-regen）的SDK包，文件参数通过SDK调用可支持本地文件及任意URL，具体可参见[SDK总览](~~145033~~)。',
            'extraInfo' => '## 错误码'."\n"
                .'关于导出回流数据的错误码，详情请参见[常见错误码](~~441239~~)。'."\n"
                ."\n"
                .'## 安全声明'."\n"
                .'- 请确保上传的图片或文件来源符合相应的法律法规。'."\n"
                .'- 通过体验调试上传的临时文件有效期为1小时，在24小时后会被系统自动清理删除。',
        ],
        'EnableDataReflow' => [
            'methods' => [
                'post',
                'get',
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
                    'name' => 'ServiceId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '服务ID。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '456',
                    ],
                ],
                [
                    'name' => 'DataReflowRate',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '数据回流率。取值范围为\\[1,100]。'."\n"
                            .'- 当前服务第一次开启数据回流时，且DataReflowRate为空，会提示报错。'."\n"
                            .'- 当前服务不是第一次开启数据回流时，且DataReflowRate为空，当前服务的回流率为上一次设置的回流率。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '100',
                    ],
                ],
                [
                    'name' => 'DataReflowOssPath',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '回流路径。回流数据存放路径：**回流路径/${调用主账号id}/${调用子账号id}/${随机文件名}**',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'oss://regen-test-bucket/jhdtest/检测/回流目录/',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '每个请求分配唯一的服务器请求ID。',
                                'type' => 'string',
                                'example' => 'B44B8F1C-C97D-5C81-966A-5EE8D76F5CC9',
                            ],
                            'Data' => [
                                'description' => '返回的结果数据内容。',
                                'type' => 'object',
                                'properties' => [
                                    'ServiceId' => [
                                        'description' => '服务ID。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '456',
                                    ],
                                    'EnableDataReflowFlag' => [
                                        'description' => '数据回流开关标识。',
                                        'type' => 'boolean',
                                        'example' => 'true',
                                    ],
                                    'DataReflowRate' => [
                                        'description' => '数据回流率。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '100',
                                    ],
                                    'DataReflowOssPath' => [
                                        'description' => '回流路径。',
                                        'type' => 'string',
                                        'example' => 'oss://regen-test-bucket/jhdtest/检测/回流目录/',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"B44B8F1C-C97D-5C81-966A-5EE8D76F5CC9\\",\\n  \\"Data\\": {\\n    \\"ServiceId\\": 456,\\n    \\"EnableDataReflowFlag\\": true,\\n    \\"DataReflowRate\\": 100,\\n    \\"DataReflowOssPath\\": \\"oss://regen-test-bucket/jhdtest/检测/回流目录/\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<EnableDataReflowResponse>\\n    <RequestId>B44B8F1C-C97D-5C81-966A-5EE8D76F5CC9</RequestId>\\n    <Data>\\n        <ServiceId>456</ServiceId>\\n        <EnableDataReflowFlag>true</EnableDataReflowFlag>\\n        <DataReflowRate>100</DataReflowRate>\\n        <DataReflowOssPath>oss://regen-test-bucket/jhdtest/检测/回流目录/</DataReflowOssPath>\\n    </Data>\\n</EnableDataReflowResponse>","errorExample":""}]',
            'title' => '开启数据回流',
            'summary' => '本文介绍开启数据回流EnableDataReflow的语法及示例。',
            'description' => '## 功能描述'."\n"
                .'根据输入参数，开启相应服务的数据回流。'."\n"
                ."\n"
                .'> - 您可以进入[在线咨询](https://www.aliyun.com/core/online-consult?from=aZgW6LJHr2)获取在线人工帮助。'."\n"
                .'- 阿里云视觉智能开放平台视觉AI能力API接入、接口使用或问题咨询等，请通过钉钉群（23109592）加入阿里云视觉智能开放平台咨询群联系我们。'."\n"
                ."\n"
                .'## 接入指引'."\n"
                .'1. 注册阿里云账号：打开[阿里云官网](https://www.aliyun.com)，在阿里云官网右上角，单击**立即注册**，按照操作提示完成账号注册。'."\n"
                .'2. 开通能力：请确保您已开通自学习服务，若未开通服务请[立即开通](https://common-buy.aliyun.com/?commodityCode=viapi_selflearning_public_cn)。'."\n"
                .'3. 创建AccessKey：请确保您已[创建AccessKey](~~175144~~)，如果您使用的是子账号AccessKey，您需要给子账号赋予AliyunVIAPIFullAccess权限，具体操作，请参见[RAM授权](~~145025~~)。'."\n"
                .'4. 在线调试（可选）：您可以通过[OpenAPI Explorer](https://next.api.aliyun.com/api/viapi-regen/2021-11-19/EnableDataReflow?lang=JAVA&sdkStyle=old)在线调试能力，查看完整的调用示例代码及SDK依赖信息，也可以下载完整的工程。'."\n"
                .'5. 开发接入步骤：    '."\n"
                .'- 在[SDK总览](~~145033~~)中选择您要接入使用的SDK语言。'."\n"
                .'- 在对应语言的SDK文档中找到AI类目为自学习（viapi-regen）类目的SDK包进行安装。'."\n"
                .'- 参考文档中提供的示例代码进行适当修改后调用。'."\n"
                ."\n"
                .'6. 客户端直接调用：该能力常用的客户端调用方式包括以下几种。'."\n"
                .'- [Web前端直接调用](~~467779~~)'."\n"
                .'- [小程序场景下直接调用](~~467780~~)'."\n"
                .'- [Android端直接调用](~~467781~~)'."\n"
                .'- [iOS端直接调用](~~467782~~)',
            'responseParamsDescription' => '## SDK参考'."\n"
                .'阿里云视觉AI自学习类目下的开启数据回流能力推荐使用SDK调用，支持多种编程语言，调用时请选择AI类目为自学习（viapi-regen）的SDK包，文件参数通过SDK调用可支持本地文件及任意URL，具体可参见[SDK总览](~~145033~~)。',
            'extraInfo' => '## 错误码'."\n"
                .'关于开启数据回流的错误码，详情请参见[常见错误码](~~441239~~)。'."\n"
                ."\n"
                .'## 安全声明'."\n"
                .'- 请确保上传的图片或文件来源符合相应的法律法规。'."\n"
                .'- 通过体验调试上传的临时文件有效期为1小时，在24小时后会被系统自动清理删除。',
        ],
        'GetUserInfo' => [
            'methods' => [
                'post',
                'get',
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
            'parameters' => [],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '接口返回值。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '每个请求分配唯一的服务器请求ID。',
                                'type' => 'string',
                                'example' => 'ADCD28CC-16DD-0EFC-9A1E-43B518E351C4',
                            ],
                            'Data' => [
                                'description' => '返回的结果数据内容。',
                                'type' => 'object',
                                'properties' => [
                                    'ParentUid' => [
                                        'description' => '用户主账号ID。',
                                        'type' => 'string',
                                        'example' => '1420754889803588',
                                    ],
                                    'UserType' => [
                                        'description' => '用户类型。'."\n"
                                            ."\n"
                                            .'- COMMON_USER：普通用户。'."\n"
                                            .'- INTERNAL_USER：内部用户。',
                                        'type' => 'string',
                                        'example' => 'INTERNAL_USER',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"ADCD28CC-16DD-0EFC-9A1E-43B518E351C4\\",\\n  \\"Data\\": {\\n    \\"ParentUid\\": \\"1420754889803588\\",\\n    \\"UserType\\": \\"INTERNAL_USER\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<GetUserInfoResponse>\\n    <RequestId>ADCD28CC-16DD-0EFC-9A1E-43B518E351C4</RequestId>\\n    <Data>\\n        <ParentUid>1420754889803588</ParentUid>\\n        <UserType>INTERNAL_USER</UserType>\\n    </Data>\\n</GetUserInfoResponse>","errorExample":""}]',
            'title' => '获取用户信息',
            'summary' => '本文介绍获取用户信息GetUserInfo的语法及示例。',
            'description' => '## 功能描述'."\n"
                .'获取用户信息。'."\n"
                ."\n"
                .'> - 您可以进入[在线咨询](https://www.aliyun.com/core/online-consult?from=aZgW6LJHr2)获取在线人工帮助。'."\n"
                .'- 阿里云视觉智能开放平台视觉AI能力API接入、接口使用或问题咨询等，请通过钉钉群（23109592）加入阿里云视觉智能开放平台咨询群联系我们。'."\n"
                ."\n"
                .'## 接入指引'."\n"
                .'1. 注册阿里云账号：打开[阿里云官网](https://www.aliyun.com)，在阿里云官网右上角，单击**立即注册**，按照操作提示完成账号注册。'."\n"
                .'2. 开通能力：请确保您已开通自学习服务，若未开通服务请[立即开通](https://common-buy.aliyun.com/?commodityCode=viapi_selflearning_public_cn)。'."\n"
                .'3. 创建AccessKey：请确保您已[创建AccessKey](~~175144~~)，如果您使用的是子账号AccessKey，您需要给子账号赋予AliyunVIAPIFullAccess权限，具体操作，请参见[RAM授权](~~145025~~)。'."\n"
                .'4. 在线调试（可选）：您可以通过[OpenAPI Explorer](https://next.api.aliyun.com/api/viapi-regen/2021-11-19/GetUserInfo?lang=JAVA)在线调试能力，查看完整的调用示例代码及SDK依赖信息，也可以下载完整的工程。'."\n"
                .'5. 开发接入步骤：'."\n"
                .'- 在[SDK总览](~~145033~~)中选择您要接入使用的SDK语言。'."\n"
                .'- 在对应语言的SDK文档中找到AI类目为自学习（viapi-regen）的SDK包进行安装。'."\n"
                .'- 参考文档中提供的示例代码进行适当修改后调用。'."\n"
                ."\n"
                .'6. 客户端直接调用：该能力常用的客户端调用方式包括以下几种。'."\n"
                .'- [Web前端直接调用](~~467779~~)'."\n"
                .'- [小程序场景下直接调用](~~467780~~)'."\n"
                .'- [Android端直接调用](~~467781~~)'."\n"
                .'- [iOS端直接调用](~~467782~~)'."\n",
            'responseParamsDescription' => '## SDK参考'."\n"
                .'阿里云视觉AI能力推荐使用SDK调用，支持多种编程语言，文件参数通过SDK调用可支持本地文件及任意URL，具体可参见[SDK总览](~~145033~~)。',
            'extraInfo' => '## 错误码'."\n"
                .'关于获取用户信息的错误码，详情请参见[常见错误码](~~441239~~)。'."\n"
                ."\n"
                .'## 安全声明'."\n"
                .'- 请确保上传的图片或文件来源符合相应的法律法规。'."\n"
                .'- 通过体验调试上传的临时文件有效期为1小时，在24小时后会被系统自动清理删除。',
        ],
        'CheckDatasetOssBucketCORS' => [
            'methods' => [
                'post',
                'get',
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
                    'name' => 'LabelsetId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '空间id',
                        'description' => '标注集ID。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '625',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '接口返回值。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '每个请求分配唯一的服务器请求ID。',
                                'type' => 'string',
                                'example' => 'ADCD28CC-16DD-0EFC-9A1E-43B518E351C4',
                            ],
                            'Data' => [
                                'description' => '返回的结果数据内容。',
                                'type' => 'object',
                                'properties' => [
                                    'SetOssBucketCORSFlag' => [
                                        'description' => '标注集对应的数据集所使用的用户OSS bucket跨域规则是否满足要求。'."\n"
                                            .'- true：跨域规则满足要求。'."\n"
                                            .'- false：没有设置跨域规则，或者设置的跨域规则不满足要求。',
                                        'type' => 'boolean',
                                        'example' => 'false',
                                    ],
                                    'OssBucketCORSConfigUrl' => [
                                        'description' => '设置跨域规则的URL。'."\n"
                                            .'用户可以单击此URL前去设置OSS Bucket的跨域规则。',
                                        'type' => 'string',
                                        'example' => 'https://oss.console.aliyun.com/bucket/oss-cn-hangzhou/yize-test-bucket/data-security/cors',
                                    ],
                                    'Bucket' => [
                                        'description' => '标注集对应的数据集所用的OSS Bucket名称。',
                                        'type' => 'string',
                                        'example' => 'yize-test-bucket',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"ADCD28CC-16DD-0EFC-9A1E-43B518E351C4\\",\\n  \\"Data\\": {\\n    \\"SetOssBucketCORSFlag\\": false,\\n    \\"OssBucketCORSConfigUrl\\": \\"https://oss.console.aliyun.com/bucket/oss-cn-hangzhou/yize-test-bucket/data-security/cors\\",\\n    \\"Bucket\\": \\"yize-test-bucket\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<CheckDatasetOssBucketCORSResponse>\\n    <RequestId>ADCD28CC-16DD-0EFC-9A1E-43B518E351C4</RequestId>\\n    <Data>\\n        <SetOssBucketCORSFlag>false</SetOssBucketCORSFlag>\\n        <OssBucketCORSConfigUrl>https://oss.console.aliyun.com/bucket/oss-cn-hangzhou/yize-test-bucket/data-security/cors</OssBucketCORSConfigUrl>\\n        <Bucket>yize-test-bucket</Bucket>\\n    </Data>\\n</CheckDatasetOssBucketCORSResponse>","errorExample":""}]',
            'title' => '检查用户OSS Bucket的跨域规则',
            'summary' => '本文介绍检查用户OSS Bucket的跨域规则CheckDatasetOssBucketCORS的语法及示例。',
            'description' => '## 功能描述'."\n"
                .'通过标注集ID，检查对应数据集所使用的用户OSS Bucket的跨域规则是否满足要求。'."\n"
                ."\n"
                .'> - 您可以进入[在线咨询](https://www.aliyun.com/core/online-consult?from=aZgW6LJHr2)获取在线人工帮助。'."\n"
                .'- 阿里云视觉智能开放平台视觉AI能力API接入、接口使用或问题咨询等，请通过钉钉群（23109592）加入阿里云视觉智能开放平台咨询群联系我们。'."\n"
                ."\n"
                .'## 接入指引'."\n"
                .'1. 注册阿里云账号：打开[阿里云官网](https://www.aliyun.com)，在阿里云官网右上角，单击**立即注册**，按照操作提示完成账号注册。'."\n"
                .'2. 开通能力：请确保您已开通自学习服务，若未开通服务请[立即开通](https://common-buy.aliyun.com/?commodityCode=viapi_selflearning_public_cn)。'."\n"
                .'3. 创建AccessKey：请确保您已[创建AccessKey](~~175144~~)，如果您使用的是子账号AccessKey，您需要给子账号赋予AliyunVIAPIFullAccess权限，具体操作，请参见[RAM授权](~~145025~~)。'."\n"
                .'4. 在线调试（可选）：您可以通过[OpenAPI Explorer](https://next.api.aliyun.com/api/viapi-regen/2021-11-19/CheckDatasetOssBucketCORS?lang=JAVA)在线调试能力，查看完整的调用示例代码及SDK依赖信息，也可以下载完整的工程。'."\n"
                .'5. 开发接入步骤：'."\n"
                .'- 在[SDK总览](~~145033~~)中选择您要接入使用的SDK语言。'."\n"
                .'- 在对应语言的SDK文档中找到AI类目为自学习（viapi-regen）类目的SDK包进行安装。'."\n"
                .'- 参考文档中提供的示例代码进行适当修改后调用。'."\n"
                ."\n"
                .'6. 客户端直接调用：该能力常用的客户端调用方式包括以下几种。'."\n"
                .'- [Web前端直接调用](~~467779~~)'."\n"
                .'- [小程序场景下直接调用](~~467780~~)'."\n"
                .'- [Android端直接调用](~~467781~~)'."\n"
                .'- [iOS端直接调用](~~467782~~)',
            'responseParamsDescription' => '## SDK参考'."\n"
                .'阿里云视觉AI自学习类目下的检查用户OSS Bucket的跨域规则能力推荐使用SDK调用，支持多种编程语言，调用时请选择AI类目为自学习（viapi-regen）的SDK包，文件参数通过SDK调用可支持本地文件及任意URL，具体可参见[SDK总览](~~145033~~)。',
            'extraInfo' => '## 错误码'."\n"
                .'关于检查用户OSS Bucket的跨域规则的错误码，详情请参见[常见错误码](~~441239~~)。'."\n"
                ."\n"
                .'## 安全声明'."\n"
                .'- 请确保上传的图片或文件来源符合相应的法律法规。'."\n"
                .'- 通过体验调试上传的临时文件有效期为1小时，在24小时后会被系统自动清理删除。',
        ],
    ],
    'endpoints' => [
        [
            'regionId' => 'cn-hangzhou',
            'endpoint' => 'viapi-regen.cn-hangzhou.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shanghai',
            'endpoint' => 'viapi-regen.cn-shanghai.aliyuncs.com',
        ],
    ],
];
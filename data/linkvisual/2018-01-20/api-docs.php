<?php return array (
  'version' => '1.0',
  'info' => 
  array (
    'style' => 'RPC',
    'product' => 'Linkvisual',
    'version' => '2018-01-20',
  ),
  'directories' => 
  array (
    0 => 
    array (
      'id' => 65321,
      'title' => '事件',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'AddEventRecordPlanDevice',
        1 => 'CreateEventRecordPlan',
        2 => 'DeleteEventRecordPlan',
        3 => 'DeleteEventRecordPlanDevice',
        4 => 'QueryDeviceEventPicture',
      ),
    ),
    1 => 
    array (
      'id' => 65327,
      'title' => '时间模板',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateTimeTemplate',
        1 => 'DeleteTimeTemplate',
        2 => 'UpdateTimeTemplate',
        3 => 'QueryTimeTemplateDetail',
      ),
    ),
    2 => 
    array (
      'id' => 65339,
      'title' => '设备',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'AddFaceDeviceGroup',
        1 => 'AddFaceDeviceToDeviceGroup',
        2 => 'DeleteFaceDeviceGroup',
        3 => 'SetDevicePictureLifeCycle',
        4 => 'StopLiveStreaming',
        5 => 'QueryDeviceEvent',
        6 => 'QueryDevicePictureFile',
        7 => 'QueryDevicePictureLifeCycle',
        8 => 'QueryDeviceVodUrlByTime',
        9 => 'QueryFaceAllDeviceGroup',
        10 => 'QueryFaceDeviceGroupsByDevice',
        11 => 'QueryLiveStreaming',
        12 => 'QueryVoiceIntercom',
        13 => 'RemoveFaceDeviceFromDeviceGroup',
      ),
    ),
    3 => 
    array (
      'id' => 65364,
      'title' => '用户',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'AddFaceUserGroup',
        1 => 'AddFaceUserToUserGroup',
        2 => 'DeleteFaceUserGroup',
        3 => 'UpdateFaceUserGroupAndDeviceGroupRelation',
        4 => 'UpdateFaceUser',
        5 => 'QueryFaceAllUserGroupAndDeviceGroupRelation',
        6 => 'QueryFaceUserGroupAndDeviceGroupRelation',
        7 => 'QueryFaceUserIdByCustomUserId',
        8 => 'QueryFaceAllUserGroup',
        9 => 'QueryFaceAllUserIdsByGroupId',
        10 => 'QueryFaceCustomUserIdByUserId',
        11 => 'QueryFaceUser',
        12 => 'QueryFaceUserGroup',
        13 => 'RemoveFaceUserFromUserGroup',
      ),
    ),
    4 => 
    array (
      'id' => 65379,
      'title' => '人脸',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'AddFaceUser',
        1 => 'AddFaceUserGroupAndDeviceGroupRelation',
        2 => 'AddFaceUserPicture',
        3 => 'DeleteFaceUser',
        4 => 'DeleteFaceUserGroupAndDeviceGroupRelation',
        5 => 'DeleteFaceUserPicture',
        6 => 'CheckFaceUserDoExistOnDevice',
        7 => 'ClearFaceDeviceDB',
        8 => 'DetectUserFaceByUrl',
      ),
    ),
    5 => 
    array (
      'id' => 65389,
      'title' => '图片搜索',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreatePictureSearchApp',
        1 => 'CreatePictureSearchJob',
        2 => 'UpdatePictureSearchApp',
        3 => 'QueryPictureSearchAiboxes',
        4 => 'QueryPictureSearchApps',
        5 => 'QueryPictureSearchDevices',
        6 => 'QueryPictureSearchJob',
        7 => 'QueryPictureSearchJobResult',
        8 => 'GetPictureSearchJobStatus',
        9 => 'QueryPictureFiles',
        10 => 'BindPictureSearchAppWithDevices',
        11 => 'UnbindPictureSearchAppWithDevices',
        12 => 'PictureSearchPicture',
        13 => 'TriggerCapturePicture',
      ),
    ),
    6 => 
    array (
      'id' => 65418,
      'title' => '录像',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateRecordPlan',
        1 => 'AddRecordPlanDevice',
        2 => 'DeleteRecordPlan',
        3 => 'DeleteRecordPlanDevice',
        4 => 'SetDeviceRecordLifeCycle',
        5 => 'StopTriggeredRecord',
        6 => 'UpdateEventRecordPlan',
        7 => 'UpdateRecordPlan',
        8 => 'QueryRecord',
        9 => 'QueryRecordByRecordId',
        10 => 'QueryRecordPlanDetail',
        11 => 'QueryRecordPlanDeviceByDevice',
        12 => 'QueryRecordPlanDeviceByPlan',
        13 => 'QueryRecordPlans',
        14 => 'QueryRecordUrl',
        15 => 'QueryTimeTemplate',
        16 => 'QueryDeviceEventRecord',
        17 => 'QueryDeviceVodUrl',
        18 => 'QueryMonthRecord',
        19 => 'QueryDeviceRecordLifeCycle',
        20 => 'QueryEventRecordPlanDetail',
        21 => 'QueryEventRecordPlanDeviceByDevice',
        22 => 'QueryEventRecordPlanDeviceByPlan',
        23 => 'QueryEventRecordPlans',
        24 => 'TriggerRecord',
      ),
    ),
    7 => 
    array (
      'id' => 177204,
      'title' => '其他',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'QueryDevicePictureByList',
        1 => 'TransferDeviceInstance',
        2 => 'QueryRecordDownloadUrl',
        3 => 'CreateLocalFileUploadJob',
        4 => 'DeleteLocalFileUploadJob',
        5 => 'QueryLocalFileUploadJob',
        6 => 'QueryFaceUserBatch',
        7 => 'QueryFaceUserByName',
        8 => 'DeleteRecord',
        9 => 'QueryRecordUrlByTime',
        10 => 'QueryCarProcessEvents',
        11 => 'DeletePicture',
      ),
    ),
    8 => 
    array (
      'id' => 0,
      'title' => '其它',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'UpdateInstanceInternetProtocol',
        1 => 'CreateRecordDownloadByTimeJob',
        2 => 'QueryRecordDownloadJobById',
        3 => 'QueryRecordDownloadJobList',
        4 => 'CreateLocalRecordDownloadByTimeJob',
        5 => 'BatchQueryVisionDeviceInfo',
        6 => 'CreateRtmpDevice',
        7 => 'DeleteRtmpDevice',
        8 => 'DeleteRtmpKey',
        9 => 'QueryRtmpKey',
        10 => 'QueryVisionDeviceInfo',
        11 => 'UpdateRtmpKey',
        12 => 'CreateGbDevice',
        13 => 'DeleteGbDevice',
        14 => 'EnableGbSubDevice',
        15 => 'QueryGbSubDeviceList',
        16 => 'RefreshGbSubDeviceList',
        17 => 'UpdateGbDevice',
        18 => 'CreateStreamPushJob',
        19 => 'CreateStreamSnapshotJob',
        20 => 'DeleteStreamPushJob',
        21 => 'DeleteStreamSnapshotJob',
        22 => 'QueryStreamPushJob',
        23 => 'QueryStreamPushJobList',
        24 => 'QueryStreamSnapshotJob',
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
    'AddEventRecordPlanDevice' => 
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
      ),
      'systemTags' => 
      array (
        'operationType' => 'create',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'IotInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。

您可在物联网平台控制台的**实例概览**页面，查看当前实例的**ID**。若有ID值，必须传入该ID值，否则调用会失败。

> 如果公共实例没有ID值，请参见[如何获取实例ID](~~267533~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'iot-cn-n6w1y59****',
          ),
        ),
        1 => 
        array (
          'name' => 'ProductKey',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'IPC设备所属产品的ProductKey。
您可以在物联网平台控制台**产品**页查看或调用[QueryProductList](~~69271~~)查看当前账号下所有产品的信息。
><notice> 如果传入该参数，需同时传入**DeviceName**。
></notice>',
            'type' => 'string',
            'required' => false,
            'example' => 'a1BwAGV****',
          ),
        ),
        2 => 
        array (
          'name' => 'DeviceName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'IPC设备的设备名称。
您可以在物联网平台控制台的**设备**页查看**DeviceName**。
><notice> 如果传入该参数，需同时传入**ProductKey**。
></notice>',
            'type' => 'string',
            'required' => false,
            'example' => 'camera1',
          ),
        ),
        3 => 
        array (
          'name' => 'IotId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'IPC设备的设备ID。物联网平台为该设备颁发的ID，设备的唯一标识符。可调用物联网平台[QueryDeviceDetail](~~69594~~)查询。

><notice> 如果传入该参数，则无需传入**ProductKey**和**DeviceName**。**IotId**作为设备唯一标识符，和**ProductKey**与**DeviceName**的组合是一一对应的关系。如果您同时传入**IotId**和**ProductKey**与**DeviceName**的组合，则以**IotId**为准。
></notice>',
            'type' => 'string',
            'required' => false,
            'example' => 'zLZyi6aOLyOSHa9hsPyD00****',
          ),
        ),
        4 => 
        array (
          'name' => 'StreamType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '码流类型：
- **0**（默认）：主码流。
- **1**：辅码流。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '0',
            'default' => '0',
          ),
        ),
        5 => 
        array (
          'name' => 'PlanId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '智能告警事件录像计划ID。可调用[QueryEventRecordPlans](~~107907~~)查询。',
            'type' => 'string',
            'required' => true,
            'example' => '5b60bf0dd55944c19d7817442bc9****',
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
              'Code' => 
              array (
                'description' => '接口返回码：

- **200**：表示成功。
- 其它：表示错误码。错误码详情，请参见[错误码](~~145071~~)。',
                'type' => 'string',
                'example' => '200',
              ),
              'RequestId' => 
              array (
                'description' => '阿里云为该请求生成的唯一标识符。',
                'type' => 'string',
                'example' => '06DC77A0-4622-42DB-9EE0-25FIOHS82JK1',
              ),
              'ErrorMessage' => 
              array (
                'description' => '调用失败时，返回的出错信息。',
                'type' => 'string',
                'example' => 'request forbidden',
              ),
              'Success' => 
              array (
                'description' => '是否调用成功：
- **true**：调用成功。
- **false**：调用失败。
',
                'type' => 'boolean',
                'example' => 'true',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"200\\",\\n  \\"RequestId\\": \\"06DC77A0-4622-42DB-9EE0-25FIOHS82JK1\\",\\n  \\"ErrorMessage\\": \\"request forbidden\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<AddEventRecordPlanDeviceResponse>\\n<RequestId>06DC77A0-4622-42DB-9EE0-25FIOHS82JK1</RequestId>\\n<Code>200</Code>\\n<Success>true</Success>\\n</AddEventRecordPlanDeviceResponse>","errorExample":""}]',
      'title' => '新增事件联动计划关联摄像头',
      'summary' => '调用该接口为IPC设备添加智能告警事件录像计划。',
      'requestParamsDescription' => '调用API时，除了本文介绍的该API的特有请求参数，还需传入公共请求参数。公共请求参数说明，请参见[公共参数](~~141505~~)文档。',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'CreateEventRecordPlan' => 
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
      ),
      'operationType' => 'readAndWrite',
      'systemTags' => 
      array (
        'operationType' => 'create',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Name',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '录像计划名称。

名称长度小于48个字符，可以包含英文字母、数字和特殊字符：短划线（-）、下划线（_）、at（@）、英文句号（.）、英文冒号（:）。

',
            'type' => 'string',
            'required' => true,
            'example' => 'plan1',
          ),
        ),
        1 => 
        array (
          'name' => 'EventTypes',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '智能告警事件类型：

- 设置为全部智能告警事件：0。
- 设置为多个智能告警事件：输入智能告警事件对应的序号，并用英文逗号（,）分隔，例如：`10001,10002`。
>设置多个智能告警事件时，单次最多支持设置10个。

请在物联网平台控制台，**产品详情**页面的**功能定义**页签，查看全部智能告警事件类型。详细信息，请参考[查看智能告警事件类型](~~207701~~)。',
            'type' => 'string',
            'required' => false,
            'example' => '1',
            'default' => '1',
          ),
        ),
        2 => 
        array (
          'name' => 'PreRecordDuration',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '预录时长，单位为秒，默认值为0，最大值为10。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '5',
            'default' => '0',
          ),
        ),
        3 => 
        array (
          'name' => 'RecordDuration',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '录像时长，单位为秒，包括预录时长，取值范围10~60。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'example' => '10',
          ),
        ),
        4 => 
        array (
          'name' => 'TemplateId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '时间模板ID。可调用[QueryTimeTemplate](~~107890~~)查询。',
            'type' => 'string',
            'required' => true,
            'example' => 'fc82774fa749485bad7d719f9670****',
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
              'Code' => 
              array (
                'description' => '接口返回码：

- **200**：表示成功。
- 其它：表示错误码。错误码详情，请参见[错误码](~~145071~~)。',
                'type' => 'string',
                'example' => '200',
              ),
              'Data' => 
              array (
                'description' => '录像计划ID。',
                'type' => 'string',
                'example' => 'fc82774fa749485bad7d719f9670****',
              ),
              'ErrorMessage' => 
              array (
                'description' => '调用失败时，返回的出错信息。',
                'type' => 'string',
                'example' => 'product is not active.',
              ),
              'RequestId' => 
              array (
                'description' => '阿里云为该请求生成的唯一标识符。',
                'type' => 'string',
                'example' => 'a195f615-8c64-4cc6-af57-2f42c6cca15c',
              ),
              'Success' => 
              array (
                'description' => '是否调用成功：
- **true**：调用成功。
- **false**：调用失败。',
                'type' => 'boolean',
                'example' => 'true',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"200\\",\\n  \\"Data\\": \\"fc82774fa749485bad7d719f9670****\\",\\n  \\"ErrorMessage\\": \\"product is not active.\\",\\n  \\"RequestId\\": \\"a195f615-8c64-4cc6-af57-2f42c6cca15c\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<CreateEventRecordPlanResponse>  \\n<RequestId>a195f615-8c64-4cc6-af57-2f42c6cca15c</RequestId>\\n<Data>fc82774fa749485bad7d719f9670****</Data>\\n<Code>200</Code>\\n<Success>true</Success>\\n</CreateEventRecordPlanResponse>  ","errorExample":""}]',
      'title' => '创建事件联动录像计划',
      'summary' => '调用该接口创建智能告警事件录像计划。',
      'requestParamsDescription' => '调用API时，除了本文介绍的该API的特有请求参数，还需传入公共请求参数。公共请求参数说明，请参见[公共参数](~~141505~~)文档。',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DeleteEventRecordPlan' => 
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
      ),
      'operationType' => 'readAndWrite',
      'systemTags' => 
      array (
        'operationType' => 'delete',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'PlanId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '智能告警事件录像计划ID。可调用[QueryEventRecordPlans](~~107907~~)查询。',
            'type' => 'string',
            'required' => true,
            'example' => '2e34a1989aa54debac22358aca7f****',
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
              'Code' => 
              array (
                'description' => '调用失败时，返回的错误码。更多信息，请参见[错误码](~~145071~~)。
',
                'type' => 'string',
                'example' => '200',
              ),
              'RequestId' => 
              array (
                'description' => '阿里云为该请求生成的唯一标识符。
',
                'type' => 'string',
                'example' => '438A20F2-AFF2-4CAC-89F9-3378EAA133BD',
              ),
              'ErrorMessage' => 
              array (
                'description' => '调用失败时，返回的出错信息。',
                'type' => 'string',
                'example' => 'tenant auth error',
              ),
              'Success' => 
              array (
                'description' => '是否调用成功：
- **true**：调用成功。
- **false**：调用失败。',
                'type' => 'boolean',
                'example' => 'true',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"200\\",\\n  \\"RequestId\\": \\"438A20F2-AFF2-4CAC-89F9-3378EAA133BD\\",\\n  \\"ErrorMessage\\": \\"tenant auth error\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<DeleteEventRecordPlanResponse>\\n<RequestId>438A20F2-AFF2-4CAC-89F9-3378EAA133BD</RequestId>\\n<Code>200</Code>\\n<Success>true</Success>\\n<DeleteEventRecordPlanResponse>","errorExample":""}]',
      'title' => '删除事件联动录像计划',
      'summary' => '调用该接口删除智能事件录像计划。',
      'requestParamsDescription' => '调用API时，除了本文介绍的该API的特有请求参数，还需传入公共请求参数。公共请求参数说明，请参见[公共参数](~~141505~~)文档。',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DeleteEventRecordPlanDevice' => 
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
      ),
      'systemTags' => 
      array (
        'operationType' => 'delete',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'IotInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。

您可在物联网平台控制台的**实例概览**页面，查看当前实例的**ID**。若有ID值，必须传入该ID值，否则调用会失败。

> 如果公共实例没有ID值，请参见[如何获取实例ID](~~267533~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'iot-cn-n6w1y59****',
          ),
        ),
        1 => 
        array (
          'name' => 'ProductKey',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'IPC设备所属产品的ProductKey。
您可以在物联网平台控制台**产品**页查看或调用[QueryProductList](~~69271~~)查看当前账号下所有产品的信息。
><notice> 如果传入该参数，需同时传入**DeviceName**。
></notice>',
            'type' => 'string',
            'required' => false,
            'example' => 'a1BwAGV****',
          ),
        ),
        2 => 
        array (
          'name' => 'DeviceName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'IPC设备的设备名称。
您可以在物联网平台控制台的**设备**页查看**DeviceName**。
><notice> 如果传入该参数，需同时传入**ProductKey**。
></notice>',
            'type' => 'string',
            'required' => false,
            'example' => 'camera1',
          ),
        ),
        3 => 
        array (
          'name' => 'IotId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'IPC设备的设备ID。物联网平台为该设备颁发的ID，设备的唯一标识符。

可调用物联网平台[QueryDeviceDetail](~~69594~~)查询。',
            'type' => 'string',
            'required' => false,
            'example' => 'zLZyi6aOLyOSHa9hsPyD00****',
          ),
        ),
        4 => 
        array (
          'name' => 'StreamType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '码流类型：
- **0**（默认）：主码流。
- **1**：辅码流。
',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '0',
            'default' => '0',
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
              'Code' => 
              array (
                'description' => '接口返回码：

- **200**：表示成功。
- 其它：表示错误码。错误码详情，请参见[错误码](~~145071~~)。',
                'type' => 'string',
                'example' => '200',
              ),
              'RequestId' => 
              array (
                'description' => '阿里云为该请求生成的唯一标识符。',
                'type' => 'string',
                'example' => '06DC77A0-4622-42DB-9EE0-25FIOHS82JK1',
              ),
              'ErrorMessage' => 
              array (
                'description' => '调用失败时，返回的出错信息。',
                'type' => 'string',
                'example' => 'tenant auth error',
              ),
              'Success' => 
              array (
                'description' => '是否调用成功：
- **true**：调用成功。
- **false**：调用失败。
',
                'type' => 'boolean',
                'example' => 'true',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"200\\",\\n  \\"RequestId\\": \\"06DC77A0-4622-42DB-9EE0-25FIOHS82JK1\\",\\n  \\"ErrorMessage\\": \\"tenant auth error\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<DeleteEventRecordPlanDeviceResponse>\\n<RequestId>06DC77A0-4622-42DB-9EE0-25FIOHS82JK1</RequestId>\\n<Code>200</Code>\\n<Success>true</Success>\\n</DeleteEventRecordPlanDeviceResponse>","errorExample":""}]',
      'title' => '删除事件联动录像计划摄像头',
      'summary' => '调用该接口删除智能告警事件录像计划关联的IPC设备。',
      'requestParamsDescription' => '调用API时，除了本文介绍的该API的特有请求参数，还需传入公共请求参数。公共请求参数说明，请参见[公共参数](~~141505~~)文档。',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'QueryDeviceEventPicture' => 
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
      ),
      'systemTags' => 
      array (
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ProductKey',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'IPC设备所属产品的ProductKey。
您可以在物联网平台控制台**产品**页查看或调用[QueryProductList](~~69271~~)查看当前账号下所有产品的信息。
><notice> 如果传入该参数，需同时传入**DeviceName**。
></notice>',
            'type' => 'string',
            'required' => false,
            'example' => 'a1BwAGV****',
          ),
        ),
        1 => 
        array (
          'name' => 'DeviceName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'IPC设备的设备名称。
您可以在物联网平台控制台的**设备**页查看**DeviceName**。
><notice> 如果传入该参数，需同时传入**ProductKey**。
></notice>',
            'type' => 'string',
            'required' => false,
            'example' => 'camera1',
          ),
        ),
        2 => 
        array (
          'name' => 'IotId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'IPC设备的设备ID。物联网平台为该设备颁发的ID，设备的唯一标识符。可调用物联网平台[QueryDeviceDetail](~~69594~~)查询。

><notice> 如果传入该参数，则无需传入**ProductKey**和**DeviceName**。**IotId**作为设备唯一标识符，和**ProductKey**与**DeviceName**的组合是一一对应的关系。如果您同时传入**IotId**和**ProductKey**与**DeviceName**的组合，则以**IotId**为准。
></notice>',
            'type' => 'string',
            'required' => false,
            'example' => 'zLZyi6aOLyOSHa9hsPyD00****',
          ),
        ),
        3 => 
        array (
          'name' => 'EventId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '智能告警事件ID。通过[QueryDeviceEvent](~~107916~~)接口获取。',
            'type' => 'string',
            'required' => true,
            'example' => 'ae6b74f1dc7d402****32c21018****f1608036****71',
          ),
        ),
        4 => 
        array (
          'name' => 'IotInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。您可在物联网平台控制台的**实例概览**页面，查看当前实例的**ID**。

><notice>
- 若有ID值，必须传入该ID值，否则调用会失败。
- 若无<props="intl"><ph>**实例概览**页面或</ph></props>ID值，则无需传入。

></notice>

实例的更多信息，请参见[实例概述](~~356505~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'iot-cn-n6w1y*****',
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
              'Code' => 
              array (
                'description' => '接口返回码：

- **200**：表示成功。
- 其它：表示错误码。错误码详情，请参见[错误码](~~145071~~)。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Data' => 
              array (
                'description' => '图片地址。',
                'type' => 'string',
                'example' => 'oss://***/***.jpg',
              ),
              'ErrorMessage' => 
              array (
                'description' => '调用失败时，返回的出错信息。',
                'type' => 'string',
                'example' => 'product is not active',
              ),
              'RequestId' => 
              array (
                'description' => '阿里云为该请求生成的唯一标识符。',
                'type' => 'string',
                'example' => '06DC77A0-4622-42DB-9EE0-25FIOHS82JK1',
              ),
              'Success' => 
              array (
                'description' => '是否调用成功：
- **true**：调用成功。
- **false**：调用失败。',
                'type' => 'boolean',
                'example' => 'true',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": 200,\\n  \\"Data\\": \\"oss://***/***.jpg\\",\\n  \\"ErrorMessage\\": \\"product is not active\\",\\n  \\"RequestId\\": \\"06DC77A0-4622-42DB-9EE0-25FIOHS82JK1\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<QueryDeviceEventPictureResponse>\\n  <RequestId>06DC77A0-4622-42DB-9EE0-25FIOHS82JK1</RequestId>\\n  <Code>200</Code>\\n  <Success>true</Success>\\n  <Data>\\n      oss://***/***.jpg\\n  </Data>\\n</QueryDeviceEventPictureResponse>","errorExample":""}]',
      'title' => '获取事件截图',
      'summary' => '调用该接口，获取触发智能告警事件时，IPC设备拍摄上传的图片。',
      'requestParamsDescription' => '调用API时，除了本文介绍的该API的特有请求参数，还需传入公共请求参数。公共请求参数说明，请参见[公共参数](~~141505~~)文档。',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'CreateTimeTemplate' => 
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
      ),
      'operationType' => 'readAndWrite',
      'systemTags' => 
      array (
        'operationType' => 'create',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'TimeSections',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '时间范围列表。',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'DayOfWeek' => 
                array (
                  'description' => '每周的周几，取值范围0~6，表示周日~周六。',
                  'type' => 'integer',
                  'format' => 'int32',
                  'required' => false,
                  'example' => '0',
                ),
                'Begin' => 
                array (
                  'description' => '每天开始的时间，取值范围为0~86399，单位为秒。',
                  'type' => 'integer',
                  'format' => 'int32',
                  'required' => false,
                  'example' => '20000',
                ),
                'End' => 
                array (
                  'description' => '每天结束的时间，取值范围为1~86399，单位为秒。',
                  'type' => 'integer',
                  'format' => 'int32',
                  'required' => false,
                  'example' => '60000',
                ),
              ),
              'required' => false,
            ),
            'required' => false,
            'maxItems' => 1000,
          ),
        ),
        1 => 
        array (
          'name' => 'Name',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '时间模板名称。

名称长度小于48个字符，可以包含英文字母、数字和特殊字符：短划线（-）、下划线（_）、at（@）、英文句号（.）、英文冒号（:）。

',
            'type' => 'string',
            'required' => true,
            'example' => 'example',
          ),
        ),
        2 => 
        array (
          'name' => 'AllDay',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否7天*24小时录像：
- 1：是。
- 0：否，需要配置TimeSections.N.DayOfWeek、TimeSections.N.Begin和TimeSections.N.End参数。
',
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
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'description' => '接口返回码：

- **200**：表示成功。
- 其它：表示错误码。错误码详情，请参见[错误码](~~145071~~)。',
                'type' => 'string',
                'example' => '200',
              ),
              'Data' => 
              array (
                'description' => '时间模板ID。',
                'type' => 'string',
                'example' => '38c94f874f2e4ce3b4b6da36****5213',
              ),
              'ErrorMessage' => 
              array (
                'description' => '调用失败时，返回的出错信息。',
                'type' => 'string',
                'example' => 'tenant auth error',
              ),
              'RequestId' => 
              array (
                'description' => '阿里云为该请求生成的唯一标识符。',
                'type' => 'string',
                'example' => '06DC77A0-4622-42DB-9EE0-25FIOHS82JK1',
              ),
              'Success' => 
              array (
                'description' => '是否调用成功：
- **true**：调用成功。
- **false**：调用失败。
',
                'type' => 'boolean',
                'example' => 'true',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"200\\",\\n  \\"Data\\": \\"38c94f874f2e4ce3b4b6da36****5213\\",\\n  \\"ErrorMessage\\": \\"tenant auth error\\",\\n  \\"RequestId\\": \\"06DC77A0-4622-42DB-9EE0-25FIOHS82JK1\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<CreateTimeTemplateResponse>\\n<RequestId>AD8BAA6B-1197-48DC-A42B-F5986ADF9BFE</RequestId>\\n<Data>38c94f874f2e4ce3b4b6da3****65213</Data>\\n<Code>200</Code>\\n<Success>true</Success>\\n</CreateTimeTemplateResponse>","errorExample":""}]',
      'title' => 'CreateTimeTemplate',
      'summary' => '调用该接口创建时间模板。',
      'requestParamsDescription' => '调用API时，除了本文介绍的该API的特有请求参数，还需传入公共请求参数。公共请求参数说明，请参见[公共参数](~~141505~~)文档。

**时间模板配置示例**

 示例一：每周内某一段连续时间。例如每周六08:00到周日17:00录像。

    ```
    http(s)://linkvisual.cn-shanghai.aliyuncs.com/?Action=CreateTimeTemplate
    &Name=example
    &AllDay=0
    &TimeSections=[{"DayOfWeek":6, "Begin":28800, "End":86399}, {"DayOfWeek":0,"Begin":0, "End":61200}]
    &<公共请求参数>
    ```

示例二：每周7*24小时录像。

    ```
    http(s)://linkvisual.cn-shanghai.aliyuncs.com/?Action=CreateTimeTemplate
    &Name=example
    &AllDay=1
    &<公共请求参数>
    ```

示例三：每周某天内分时段。例如每周一的08:00到11:00和13:00到18:00录像。

    ```
    http(s)://linkvisual.cn-shanghai.aliyuncs.com/?Action=CreateTimeTemplate
    &Name=example
    &AllDay=0
    &TimeSections=[{"DayOfWeek":1, "Begin":28800, "End":39600}, {"DayOfWeek":1, "Begin":46800, "End":64800}]
    &<公共请求参数>
    ```',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DeleteTimeTemplate' => 
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
      ),
      'systemTags' => 
      array (
        'operationType' => 'delete',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'TemplateId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '时间模板ID。可调用[QueryTimeTemplate](~~107890~~)查询。',
            'type' => 'string',
            'required' => true,
            'example' => '36f06322442e4e3f85a5ae8862c9****',
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
              'Code' => 
              array (
                'description' => '调用失败时，返回的错误码。更多信息，请参见[错误码](~~145071~~)。',
                'type' => 'string',
                'example' => '200',
              ),
              'RequestId' => 
              array (
                'description' => '阿里云为该请求生成的唯一标识符。',
                'type' => 'string',
                'example' => '06DC77A0-4622-42DB-9EE0-25FIOHS82JK1',
              ),
              'ErrorMessage' => 
              array (
                'description' => '调用失败时，返回的出错信息。',
                'type' => 'string',
                'example' => 'RAM system auth error.',
              ),
              'Success' => 
              array (
                'description' => '是否调用成功：
- **true**：调用成功。
- **false**：调用失败。
',
                'type' => 'boolean',
                'example' => 'true',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"200\\",\\n  \\"RequestId\\": \\"06DC77A0-4622-42DB-9EE0-25FIOHS82JK1\\",\\n  \\"ErrorMessage\\": \\"RAM system auth error.\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<DeleteTimeTemplateResponse>\\r\\n    <RequestId>06DC77A0-4622-42DB-9EE0-25FIOHS82JK1</RequestId>\\r\\n    <code>200</code>\\r\\n    <Success>true</Success>\\r\\n</DeleteTimeTemplateResponse>","errorExample":""}]',
      'title' => '删除时间模板',
      'summary' => '调用该接口删除时间模板。',
      'requestParamsDescription' => '调用API时，除了本文介绍的该API的特有请求参数，还需传入公共请求参数。公共请求参数说明，请参见[公共参数](~~141505~~)文档。',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'UpdateTimeTemplate' => 
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
      ),
      'operationType' => 'readAndWrite',
      'systemTags' => 
      array (
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'TimeSections',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '时间区间列表。',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'DayOfWeek' => 
                array (
                  'description' => '每周的周几，取值范围0~6，表示周日~周六。',
                  'type' => 'integer',
                  'format' => 'int32',
                  'required' => false,
                  'example' => '0',
                ),
                'Begin' => 
                array (
                  'description' => '每天开始的时间，取值范围0~86399，单位为秒。',
                  'type' => 'integer',
                  'format' => 'int32',
                  'required' => false,
                  'example' => '20000',
                ),
                'End' => 
                array (
                  'description' => '每天结束的时间，取值范围1~86399，单位为秒。',
                  'type' => 'integer',
                  'format' => 'int32',
                  'required' => false,
                  'example' => '60000',
                ),
              ),
              'required' => false,
            ),
            'required' => false,
            'maxItems' => 1000,
          ),
        ),
        1 => 
        array (
          'name' => 'TemplateId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '时间模板ID。可调用[QueryTimeTemplate](~~107890~~)查询。',
            'type' => 'string',
            'required' => true,
            'example' => 'fc82774fa749485bad7d719f9670****',
          ),
        ),
        2 => 
        array (
          'name' => 'Name',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '时间模板名称。

名称长度小于48个字符，可以包含英文字母、数字和特殊字符：短划线（-）、下划线（_）、at（@）、英文句号（.）、英文冒号（:）。',
            'type' => 'string',
            'required' => false,
            'example' => 'test',
          ),
        ),
        3 => 
        array (
          'name' => 'AllDay',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否7天*24小时录像：

- 1：是。
- 0：否，详细配置请查看TimeSections.N.DayOfWeek、TimeSections.N.Begin和TimeSections.N.End参数。',
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
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'description' => '接口返回码：

- **200**：表示成功。
- 其它：表示错误码。错误码详情，请参见[错误码](~~145071~~)。',
                'type' => 'string',
                'example' => '200',
              ),
              'RequestId' => 
              array (
                'description' => '阿里云为该请求生成的唯一标识符。
',
                'type' => 'string',
                'example' => '06DC77A0-4622-42DB-9EE0-25FIOHS82JK1',
              ),
              'ErrorMessage' => 
              array (
                'description' => '调用失败时，返回的出错信息。',
                'type' => 'string',
                'example' => 'tenant auth error',
              ),
              'Success' => 
              array (
                'description' => '是否调用成功：
- **true**：调用成功。
- **false**：调用失败。',
                'type' => 'boolean',
                'example' => 'true',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"200\\",\\n  \\"RequestId\\": \\"06DC77A0-4622-42DB-9EE0-25FIOHS82JK1\\",\\n  \\"ErrorMessage\\": \\"tenant auth error\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<UpdateTimeTemplateResponse>\\r\\n    <RequestId>06DC77A0-4622-42DB-9EE0-25FIOHS82JK1</RequestId>\\r\\n    <Code>200</Code>\\r\\n    <Success>true</Success>\\r\\n</UpdateTimeTemplateResponse>","errorExample":""}]',
      'title' => 'UpdateTimeTemplate',
      'summary' => '调用该接口更新时间模板。',
      'requestParamsDescription' => '调用API时，除了本文介绍的该API的特有请求参数，还需传入公共请求参数。公共请求参数说明，请参见[公共参数](~~141505~~)文档。',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'QueryTimeTemplateDetail' => 
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
      ),
      'operationType' => 'readAndWrite',
      'systemTags' => 
      array (
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'TemplateId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '时间模板ID。可调用[QueryTimeTemplate](~~107890~~)查询。',
            'type' => 'string',
            'required' => true,
            'example' => '36f06322442e4e3f85a5ae8862c9****',
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
              'Code' => 
              array (
                'description' => '接口返回码：

- **200**：表示成功。
- 其它：表示错误码。错误码详情，请参见[错误码](~~145071~~)。',
                'type' => 'string',
                'example' => '200',
              ),
              'RequestId' => 
              array (
                'description' => '阿里云为该请求生成的唯一标识符。',
                'type' => 'string',
                'example' => '06DC77A0-4622-42DB-9EE0-25FIOHS82JK1',
              ),
              'ErrorMessage' => 
              array (
                'description' => '调用失败时，返回的出错信息。',
                'type' => 'string',
                'example' => 'template owner error',
              ),
              'Success' => 
              array (
                'description' => '是否调用成功：
- **true**：调用成功。
- **false**：调用失败。
',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Data' => 
              array (
                'description' => '调用成功时，返回时间模板信息。',
                'type' => 'object',
                'properties' => 
                array (
                  'AllDay' => 
                  array (
                    'description' => '是否7天*24小时录像：

- **1**：是。
- **0**：否，详细配置请查看**TimeSectionList**参数。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '0',
                  ),
                  'Default' => 
                  array (
                    'description' => '是否是默认模板：

- **1**：默认模板。
- **0**：自定义模板。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                  'Name' => 
                  array (
                    'description' => '时间模板名称。',
                    'type' => 'string',
                    'example' => 'test',
                  ),
                  'TemplateId' => 
                  array (
                    'description' => '时间模板ID。',
                    'type' => 'string',
                    'example' => '36f06322442e4e3f85a5ae8862c9****',
                  ),
                  'TimeSectionList' => 
                  array (
                    'description' => '时间模板信息。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'End' => 
                        array (
                          'description' => '每天结束的时间，单位为秒。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '60000',
                        ),
                        'DayOfWeek' => 
                        array (
                          'description' => '时间。取值0~6，表示周日~周六。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '0',
                        ),
                        'Begin' => 
                        array (
                          'description' => '每天开始的时间，单位为秒。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '20000',
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
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"200\\",\\n  \\"RequestId\\": \\"06DC77A0-4622-42DB-9EE0-25FIOHS82JK1\\",\\n  \\"ErrorMessage\\": \\"template owner error\\",\\n  \\"Success\\": true,\\n  \\"Data\\": {\\n    \\"AllDay\\": 0,\\n    \\"Default\\": 1,\\n    \\"Name\\": \\"test\\",\\n    \\"TemplateId\\": \\"36f06322442e4e3f85a5ae8862c9****\\",\\n    \\"TimeSectionList\\": [\\n      {\\n        \\"End\\": 60000,\\n        \\"DayOfWeek\\": 0,\\n        \\"Begin\\": 20000\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<QueryTimeTemplateDetailResponse>\\n<RequestId>06DC77A0-4622-42DB-9EE0-25FIOHS82JK1</RequestId>\\n<Data>\\n    <AllDay>0</AllDay>\\n    <Default>0</Default>\\n    <TemplateId>36f06322442e4e3f85a5ae8862c9****</TemplateId>\\n    <Name>test</Name>\\n    <TimeSectionList>\\n        <DayOfWeek>0</DayOfWeek>\\n        <Begin>20000</Begin>\\n        <End>60000</End>\\n    </TimeSectionList>\\n</Data>\\n<Code>200</Code>\\n<Success>true</Success>\\n</QueryTimeTemplateDetailResponse>","errorExample":""}]',
      'title' => '查询时间模板详情',
      'summary' => '调用该接口查询指定时间模板的详情信息。',
      'requestParamsDescription' => '调用API时，除了本文介绍的该API的特有请求参数，还需传入公共请求参数。公共请求参数说明，请参见[公共参数](~~141505~~)文档。',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'AddFaceDeviceGroup' => 
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
      ),
      'systemTags' => 
      array (
        'operationType' => 'create',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'IsolationId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '业务隔离ID，用于同一个阿里云账号下不同业务应用之间的数据隔离，支持英文大小写字母、数字。

例如，您在A地区和B地区，均有人脸识别业务，那么可设置不同的业务隔离ID，区分A、B地区的人脸识别业务。

><notice>
请妥善保存业务隔离ID值，以便后续调用此业务隔离区其它接口时使用。
></notice>',
            'type' => 'string',
            'required' => true,
            'example' => 'ZheJiangHZ',
          ),
        ),
        1 => 
        array (
          'name' => 'DeviceGroupName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '设备组名称，请自定义参数值，长度不超过128个字符。',
            'type' => 'string',
            'required' => true,
            'example' => 'TestDeviceGroup',
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
              'Code' => 
              array (
                'description' => '接口返回码：
- **200**：表示成功。
- 其它：表示错误码。错误码详情，请参见[错误码](~~288314~~)。',
                'type' => 'string',
                'example' => '200',
              ),
              'ErrorMessage' => 
              array (
                'description' => '调用失败时，返回的出错信息。',
                'type' => 'string',
                'example' => 'group already exist',
              ),
              'RequestId' => 
              array (
                'description' => '阿里云为该请求生成的唯一标识符。',
                'type' => 'string',
                'example' => '0A13279A-5640-45E7-87AA-83750541AD0E',
              ),
              'Success' => 
              array (
                'description' => '是否调用成功：
- **true**：表示调用成功。
- **false**：表示调用失败。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Data' => 
              array (
                'description' => '调用成功时，返回的数据。',
                'type' => 'object',
                'properties' => 
                array (
                  'DeviceGroupId' => 
                  array (
                    'description' => '系统为该设备组生成的唯一ID。

> 在人脸底库服务的其它接口调用中，会使用**DeviceGroupId**，请妥善保存。',
                    'type' => 'string',
                    'example' => 'jvkv****',
                  ),
                  'ModifiedTime' => 
                  array (
                    'description' => '添加设备组的时间。',
                    'type' => 'string',
                    'example' => '2020-11-20 18:59:01',
                  ),
                  'DeviceGroupName' => 
                  array (
                    'description' => '设备组名称。',
                    'type' => 'string',
                    'example' => 'TestDeviceGroup',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"200\\",\\n  \\"ErrorMessage\\": \\"group already exist\\",\\n  \\"RequestId\\": \\"0A13279A-5640-45E7-87AA-83750541AD0E\\",\\n  \\"Success\\": true,\\n  \\"Data\\": {\\n    \\"DeviceGroupId\\": \\"jvkv****\\",\\n    \\"ModifiedTime\\": \\"2020-11-20 18:59:01\\",\\n    \\"DeviceGroupName\\": \\"TestDeviceGroup\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<AddFaceDeviceGroupResponse>\\n    <RequestId>0A13279A-5640-45E7-87AA-83750541AD0E</RequestId>\\n    <Data>\\n        <ModifiedTime>2020-11-20 18:59:01</ModifiedTime>\\n        <DeviceGroupName>TestDeviceGroup</DeviceGroupName>\\n        <DeviceGroupId>kvjy****</DeviceGroupId>\\n    </Data>\\n    <Code>200</Code>\\n    <Success>true</Success>\\n</AddFaceDeviceGroupResponse>","errorExample":""}]',
      'title' => '添加设备分组',
      'summary' => '调用该接口创建人脸底库设备组。',
      'description' => '## 使用说明

- 单个阿里云账号调用该接口的每秒请求数（QPS）最大限制为100。

    > RAM用户共享阿里云账号配额。

- 调用该接口后，系统会返回设备组的ID（**DeviceGroupId**），建议保存该值到本地，以便后续调用其它接口时使用。',
      'requestParamsDescription' => ' 调用API时，除了本文介绍的该API的特有请求参数，还需传入公共请求参数。公共请求参数说明，请参见[公共参数文档](~~288312~~)。',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'AddFaceDeviceToDeviceGroup' => 
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
      ),
      'systemTags' => 
      array (
        'operationType' => 'create',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'IsolationId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '隔离Id',
            'type' => 'string',
            'required' => true,
            'example' => 'TestIsolationId',
          ),
        ),
        1 => 
        array (
          'name' => 'IotInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例化Id',
            'type' => 'string',
            'required' => false,
            'example' => 'TestInstanceId',
          ),
        ),
        2 => 
        array (
          'name' => 'ProductKey',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '产品Key',
            'type' => 'string',
            'required' => true,
            'example' => 'a1Tp7KYZHHK',
          ),
        ),
        3 => 
        array (
          'name' => 'DeviceName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '设备名称
',
            'type' => 'string',
            'required' => true,
            'example' => 'TestDevice',
          ),
        ),
        4 => 
        array (
          'name' => 'DeviceGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '设备组Id(调用AddFaceDeviceGroup接口时获得)',
            'type' => 'string',
            'required' => true,
            'example' => 'kvjyhurc',
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
              'Code' => 
              array (
                'description' => '错误码
',
                'type' => 'string',
                'example' => '200',
              ),
              'ErrorMessage' => 
              array (
                'description' => '错误描述',
                'type' => 'string',
                'example' => 'success',
              ),
              'RequestId' => 
              array (
                'description' => '请求Id',
                'type' => 'string',
                'example' => '0A13279A-5640-45E7-87AA-83750541AD0E',
              ),
              'Success' => 
              array (
                'description' => '是否成功',
                'type' => 'boolean',
                'example' => 'true',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"200\\",\\n  \\"ErrorMessage\\": \\"success\\",\\n  \\"RequestId\\": \\"0A13279A-5640-45E7-87AA-83750541AD0E\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<RequestId>0A13279A-5640-45E7-87AA-83750541AD0E</RequestId>\\n<ErrorMessage>success</ErrorMessage>\\n<Code>200</Code>\\n<Success>true</Success>","errorExample":""}]',
      'title' => '将设备加入设备分组',
      'summary' => '将设备加入设备分组。',
      'requestParamsDescription' => '1. IsolationId解释：用于租户下不同应用之间的数据隔离。如某用户在浙江、陕西都有业务，则可以为浙江和西安的业务分别创建两个隔离Id;
2. IotInstanceId解释：物联网平台的实例Id。',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DeleteFaceDeviceGroup' => 
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
      ),
      'systemTags' => 
      array (
        'operationType' => 'delete',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'IsolationId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '隔离Id',
            'type' => 'string',
            'required' => true,
            'example' => 'TestIsolationId',
          ),
        ),
        1 => 
        array (
          'name' => 'DeviceGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '设备组Id',
            'type' => 'string',
            'required' => true,
            'example' => 'qaf2tihq',
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
              'Code' => 
              array (
                'description' => '错误码',
                'type' => 'string',
                'example' => '200',
              ),
              'ErrorMessage' => 
              array (
                'description' => '错误描述',
                'type' => 'string',
                'example' => 'success',
              ),
              'RequestId' => 
              array (
                'description' => '请求Id',
                'type' => 'string',
                'example' => '0A13279A-5640-45E7-87AA-83750541AD0E',
              ),
              'Success' => 
              array (
                'description' => '是否成功',
                'type' => 'boolean',
                'example' => 'true',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"200\\",\\n  \\"ErrorMessage\\": \\"success\\",\\n  \\"RequestId\\": \\"0A13279A-5640-45E7-87AA-83750541AD0E\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<RequestId>0A13279A-5640-45E7-87AA-83750541AD0E</RequestId>\\n<ErrorMessage>success</ErrorMessage>\\n<Code>200</Code>\\n<Success>true</Success>","errorExample":""}]',
      'title' => '删除设备分组',
      'summary' => '删除设备分组。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'SetDevicePictureLifeCycle' => 
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
      ),
      'systemTags' => 
      array (
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'IotInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。

您可在物联网平台控制台的**实例概览**页面，查看当前实例的**ID**。若有ID值，必须传入该ID值，否则调用会失败。

> 如果公共实例没有ID值，请参见[如何获取实例ID](~~267533~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'iot-cn-n6w1y59****',
          ),
        ),
        1 => 
        array (
          'name' => 'ProductKey',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'IPC设备所属产品的ProductKey。

您可以在物联网平台控制台**产品**页查看或调用[QueryProductList](~~69271~~)查看当前账号下所有产品的信息。

><notice> 如果传入该参数，需同时传入**DeviceName**。
></notice>',
            'type' => 'string',
            'required' => false,
            'example' => 'a1BwAGV****',
          ),
        ),
        2 => 
        array (
          'name' => 'DeviceName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'IPC设备的设备名称。
您可以在物联网平台控制台的**设备**页查看**DeviceName**。
><notice> 如果传入该参数，需同时传入**ProductKey**。
></notice>',
            'type' => 'string',
            'required' => false,
            'example' => 'camera1',
          ),
        ),
        3 => 
        array (
          'name' => 'IotId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'IPC设备的设备ID。物联网平台为该设备颁发的ID，设备的唯一标识符。可调用物联网平台[QueryDeviceDetail](~~69594~~)查询。

><notice> 如果传入该参数，则无需传入**ProductKey**和**DeviceName**。**IotId**作为设备唯一标识符，和**ProductKey**与**DeviceName**的组合是一一对应的关系。如果您同时传入**IotId**和**ProductKey**与**DeviceName**的组合，则以**IotId**为准。
></notice>',
            'type' => 'string',
            'required' => false,
            'example' => 'C47T6xwp6ms4bNlkHR****c300',
          ),
        ),
        4 => 
        array (
          'name' => 'Day',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '图片在云端的存储周期，单位为天。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'example' => '7',
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
              'Code' => 
              array (
                'description' => '接口返回码：

- **200**：表示成功。
- 其它：表示错误码。错误码详情，请参见[错误码](~~145071~~)。',
                'type' => 'string',
                'example' => '200',
              ),
              'RequestId' => 
              array (
                'description' => '阿里云为该请求生成的唯一标识符。',
                'type' => 'string',
                'example' => '449ECE75-A36A-4ACE-B253-147C78C440C5',
              ),
              'ErrorMessage' => 
              array (
                'description' => '调用失败时，返回的出错信息。',
                'type' => 'string',
                'example' => 'tenant auth error',
              ),
              'Success' => 
              array (
                'description' => '是否调用成功：

- **true**：调用成功。
- **false**：调用失败。',
                'type' => 'boolean',
                'example' => 'true',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"200\\",\\n  \\"RequestId\\": \\"449ECE75-A36A-4ACE-B253-147C78C440C5\\",\\n  \\"ErrorMessage\\": \\"tenant auth error\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<SetDevicePictureLifeCycleResponse>\\n<RequestId>449ECE75-A36A-4ACE-B253-147C78C440C5</RequestId>\\n<Code>200</Code>\\n<Success>true</Success>\\n</SetDevicePictureLifeCycleResponse>","errorExample":""}]',
      'title' => '设置设备云存储图片生命周期',
      'summary' => '调用该接口设置IPC设备的云存储图片生命周期。',
      'description' => '> 设置云存储图片生命周期前，默认图片在云端永久存储。',
      'requestParamsDescription' => '调用API时，除了本文介绍的该API的特有请求参数，还需传入公共请求参数。公共请求参数说明，请参见[公共参数](~~141505~~)文档。',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'StopLiveStreaming' => 
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
      ),
      'systemTags' => 
      array (
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'IotId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'IPC设备的设备ID。物联网平台为该设备颁发的ID，设备的唯一标识符。可调用物联网平台[QueryDeviceDetail](~~69594~~)查询。

><notice> 如果传入该参数，则无需传入**ProductKey**和**DeviceName**。**IotId**作为设备唯一标识符，和**ProductKey**与**DeviceName**的组合是一一对应的关系。如果您同时传入**IotId**和**ProductKey**与**DeviceName**的组合，则以**IotId**为准。
></notice>',
            'type' => 'string',
            'required' => false,
            'example' => 'C47T6xwp6ms4bNlkHRWCg4****',
          ),
        ),
        1 => 
        array (
          'name' => 'ProductKey',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'IPC设备所属产品的ProductKey。
您可以在物联网平台控制台**产品**页查看或调用[QueryProductList](~~69271~~)查看当前账号下所有产品的信息。
><notice> 如果传入该参数，需同时传入**DeviceName**。
></notice>',
            'type' => 'string',
            'required' => false,
            'example' => 'a1BwAGV****',
          ),
        ),
        2 => 
        array (
          'name' => 'DeviceName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'IPC设备的设备名称。
您可以在物联网平台控制台的**设备**页查看**DeviceName**。
><notice> 如果传入该参数，需同时传入**ProductKey**。
></notice>',
            'type' => 'string',
            'required' => false,
            'example' => 'camera1',
          ),
        ),
        3 => 
        array (
          'name' => 'StreamType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '码流类型：
- **0**（默认）：主码流。
- **1**：辅码流。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '0',
            'default' => '0',
          ),
        ),
        4 => 
        array (
          'name' => 'IotInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。您可在物联网平台控制台的**实例概览**页面，查看当前实例的**ID**。

><notice>
- 若有ID值，必须传入该ID值，否则调用会失败。
- 若无<props="intl"><ph>**实例概览**页面或</ph></props>ID值，则无需传入。

></notice>

实例的更多信息，请参见[实例概述](~~356505~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'iot-cn-n6w1y59****',
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
              'Code' => 
              array (
                'description' => '接口返回码：

- **200**：表示成功。
- 其它：表示错误码。错误码详情，请参见[错误码](~~145071~~)。',
                'type' => 'string',
                'example' => '200',
              ),
              'RequestId' => 
              array (
                'description' => '阿里云为该请求生成的唯一标识符。',
                'type' => 'string',
                'example' => '06DC77A0-4622-42DB-9EE0-25FIOHS82JK1',
              ),
              'ErrorMessage' => 
              array (
                'description' => '调用失败时，返回的出错信息。',
                'type' => 'string',
                'example' => 'tenant auth error',
              ),
              'Success' => 
              array (
                'description' => '是否调用成功：
- **true**：调用成功。
- **false**：调用失败。',
                'type' => 'boolean',
                'example' => 'true',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"200\\",\\n  \\"RequestId\\": \\"06DC77A0-4622-42DB-9EE0-25FIOHS82JK1\\",\\n  \\"ErrorMessage\\": \\"tenant auth error\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<StopLiveStreamingResponse>\\r\\n    <RequestId>06DC77A0-4622-42DB-9EE0-25FIOHS82JK1</RequestId>\\r\\n    <Code>200</Code>\\r\\n    <Success>true</Success>\\r\\n</StopLiveStreamingResponse>","errorExample":""}]',
      'title' => 'StopLiveStreaming',
      'summary' => '调用该接口停止IPC设备推流。',
      'description' => '## 使用说明

- 调用该接口前，您需要在IPC设备端实现标识符为**StopPushStreaming**的停止直播物模型服务。若未在IPC设备端实现该服务，或IPC设备收到该服务调用后未正常响应，则IPC设备不会停止推流。物模型的详细信息，请参见[什么是物模型](~~73727~~)。
- 当IPC设备端无人观看时，无需额外调用该接口，物联网平台会自动触发停止设备推流。
- 触发录像事件的过程中，调用该接口会造成录像文件间断，请您谨慎使用。',
      'requestParamsDescription' => '调用API时，除了本文介绍的该API的特有请求参数，还需传入公共请求参数。公共请求参数说明，请参见[公共参数](~~141505~~)文档。
',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'QueryDeviceEvent' => 
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
      ),
      'systemTags' => 
      array (
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ProductKey',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'IPC设备所属产品的ProductKey。
您可以在物联网平台控制台**产品**页查看或调用[QueryProductList](~~69271~~)查看当前账号下所有产品的信息。
><notice> 如果传入该参数，需同时传入**DeviceName**。
></notice>',
            'type' => 'string',
            'required' => false,
            'example' => 'a1BwAGV****',
          ),
        ),
        1 => 
        array (
          'name' => 'DeviceName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'IPC设备的设备名称。
您可以在物联网平台控制台的**设备**页查看**DeviceName**。
><notice> 如果传入该参数，需同时传入**ProductKey**。
></notice>',
            'type' => 'string',
            'required' => false,
            'example' => 'camera1',
          ),
        ),
        2 => 
        array (
          'name' => 'IotId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'IPC设备的设备ID。物联网平台为该设备颁发的ID，设备的唯一标识符。可调用物联网平台[QueryDeviceDetail](~~69594~~)查询。

><notice> 如果传入该参数，则无需传入**ProductKey**和**DeviceName**。**IotId**作为设备唯一标识符，和**ProductKey**与**DeviceName**的组合是一一对应的关系。如果您同时传入**IotId**和**ProductKey**与**DeviceName**的组合，则以**IotId**为准。
></notice>',
            'type' => 'string',
            'required' => false,
            'example' => 'zLZyi6aOLyOSHa9hsPyD00****',
          ),
        ),
        3 => 
        array (
          'name' => 'EventType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '智能告警事件类型：
- 设置为全部智能告警事件：0。
- 设置为单个智能告警事件：输入智能告警事件对应的序号，例如：10001。

请在物联网平台控制台，**产品详情**页面的**功能定义**页签，查看全部智能告警事件类型。详细信息，请参考[查看智能告警事件类型](~~207701~~)。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '0',
          ),
        ),
        4 => 
        array (
          'name' => 'BeginTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询范围起始时间，格式为13位时间戳，单位为毫秒。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'example' => '1539507310000',
          ),
        ),
        5 => 
        array (
          'name' => 'EndTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询范围结束时间，格式为13位时间戳，单位为毫秒。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'example' => '1539607310000',
          ),
        ),
        6 => 
        array (
          'name' => 'CurrentPage',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定从返回结果中的第几页开始显示。页数从1开始排序。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        7 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '每页显示的条数。最小值为1，最大值为50，默认值为10。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '10',
          ),
        ),
        8 => 
        array (
          'name' => 'IotInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。

<props="china">您可在物联网平台控制台的**实例概览**页面，查看当前实例的**ID**。若有ID值，必须传入该ID值，否则调用会失败。</props>

<props="china">
> 如果公共实例没有ID值，请参见[如何获取实例ID](~~267533~~)。</props>

<props="intl">无需传入此参数。</props>',
            'type' => 'string',
            'required' => false,
            'example' => 'iot-cn-n6w1y****',
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
              'Code' => 
              array (
                'description' => '接口返回码：

- **200**：表示成功。
- 其它：表示错误码。错误码详情，请参见[错误码](~~145071~~)。',
                'type' => 'string',
                'example' => '200',
              ),
              'RequestId' => 
              array (
                'description' => '阿里云为该请求生成的唯一标识符。',
                'type' => 'string',
                'example' => '06DC77A0-4622-42DB-9EE0-25FIOHS82JK1',
              ),
              'ErrorMessage' => 
              array (
                'description' => '调用失败时，返回的出错信息。',
                'type' => 'string',
                'example' => 'request forbidden',
              ),
              'Success' => 
              array (
                'description' => '是否调用成功：
- **true**：调用成功。
- **false**：调用失败。
',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Data' => 
              array (
                'description' => '查询结果。',
                'type' => 'object',
                'properties' => 
                array (
                  'PageSize' => 
                  array (
                    'description' => '每页显示的记录数。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '10',
                  ),
                  'PageCount' => 
                  array (
                    'description' => '总页数。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                  'Total' => 
                  array (
                    'description' => '总条数。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '2',
                  ),
                  'Page' => 
                  array (
                    'description' => '当前页面号。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                  'List' => 
                  array (
                    'description' => '返回的智能告警事件列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'EventId' => 
                        array (
                          'description' => '智能告警事件ID。',
                          'type' => 'string',
                          'example' => 'ae6b74f1dc7d****85d32c210185967f_16080****9471',
                        ),
                        'EventTime' => 
                        array (
                          'description' => '智能告警事件发生时间。',
                          'type' => 'string',
                          'example' => '2020-12-15 20:40:49',
                        ),
                        'EventType' => 
                        array (
                          'description' => '智能告警事件类型。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '1',
                        ),
                        'EventPicId' => 
                        array (
                          'description' => '智能告警事件对应的图片ID。',
                          'type' => 'string',
                          'example' => 'aEtMSm9****ORTFxcGpTbDZ****6eTk0',
                        ),
                        'EventDesc' => 
                        array (
                          'description' => '智能告警事件描述。',
                          'type' => 'string',
                          'example' => '移动侦测',
                        ),
                        'EventData' => 
                        array (
                          'description' => '智能告警事件附加信息。',
                          'type' => 'string',
                          'example' => '{}',
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
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"200\\",\\n  \\"RequestId\\": \\"06DC77A0-4622-42DB-9EE0-25FIOHS82JK1\\",\\n  \\"ErrorMessage\\": \\"request forbidden\\",\\n  \\"Success\\": true,\\n  \\"Data\\": {\\n    \\"PageSize\\": 10,\\n    \\"PageCount\\": 1,\\n    \\"Total\\": 2,\\n    \\"Page\\": 1,\\n    \\"List\\": [\\n      {\\n        \\"EventId\\": \\"ae6b74f1dc7d****85d32c210185967f_16080****9471\\",\\n        \\"EventTime\\": \\"2020-12-15 20:40:49\\",\\n        \\"EventType\\": 1,\\n        \\"EventPicId\\": \\"aEtMSm9****ORTFxcGpTbDZ****6eTk0\\",\\n        \\"EventDesc\\": \\"移动侦测\\",\\n        \\"EventData\\": \\"{}\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<QueryDeviceEventResponse> \\n<RequestId>1FCB5660-020D-40A5-9313-F4F4F493A41F</RequestId>\\n<Data>\\n    <PageSize>10</PageSize>\\n    <PageCount>1</PageCount>\\n    <Total>2</Total>\\n    <Page>1</Page>\\n    <List>\\n        <EventDesc>移动侦测</EventDesc>\\n        <EventType>1</EventType>\\n        <EventTime>2020-12-15 20:40:49</EventTime>\\n        <EventId>ae6b74f1dc7d40218****85967f_1608****471</EventId>\\n        <EventPicId>aEtMSm9****ORTFxcGpTbDZ****6eTk0</EventPicId>\\n        <EventData>{}</EventData>\\n    </List>\\n    <List>\\n        <EventDesc>移动侦测</EventDesc>\\n        <EventType>1</EventType>\\n        <EventTime>2020-12-15 20:40:29</EventTime>\\n        <EventId>5650d1cdc****8504520e037b2c_16****9466</EventId>\\n        <EventPicId>adsvtMSm9****ORTFkjfdmskDZ****6eTk0</EventPicId>\\n        <EventData>{}</EventData>\\n    </List>\\n    <Code>200</Code>\\n    <Success>true</Success>\\n</Data>\\n</QueryDeviceEventResponse> ","errorExample":""}]',
      'title' => '查询设备事件列表',
      'summary' => '调用该接口查询IPC设备的智能告警事件列表。',
      'requestParamsDescription' => '调用API时，除了本文介绍的该API的特有请求参数，还需传入公共请求参数。公共请求参数说明，请参见[公共参数](~~141505~~)文档。
',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'QueryDevicePictureFile' => 
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
      ),
      'systemTags' => 
      array (
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ProductKey',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'IPC设备所属产品的ProductKey。
您可以在物联网平台控制台**产品**页查看或调用[QueryProductList](~~69271~~)查看当前账号下所有产品的信息。
><notice> 如果传入该参数，需同时传入**DeviceName**。
></notice>',
            'type' => 'string',
            'required' => false,
            'example' => 'a1BwAGV****',
          ),
        ),
        1 => 
        array (
          'name' => 'DeviceName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'IPC设备的设备名称。
您可以在物联网平台控制台的**设备**页查看**DeviceName**。
><notice> 如果传入该参数，需同时传入**ProductKey**。
></notice>',
            'type' => 'string',
            'required' => false,
            'example' => 'camera1',
          ),
        ),
        2 => 
        array (
          'name' => 'IotId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'IPC设备的设备ID。物联网平台为该设备颁发的ID，设备的唯一标识符。可调用物联网平台[QueryDeviceDetail](~~69594~~)查询。

><notice> 如果传入该参数，则无需传入**ProductKey**和**DeviceName**。**IotId**作为设备唯一标识符，和**ProductKey**与**DeviceName**的组合是一一对应的关系。如果您同时传入**IotId**和**ProductKey**与**DeviceName**的组合，则以**IotId**为准。
></notice>',
            'type' => 'string',
            'required' => false,
            'example' => 'zLZyi6aOLyOSHa9hsPyD00****',
          ),
        ),
        3 => 
        array (
          'name' => 'CaptureId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '抓图事件发生时，生成的图片ID：
- 主动触发抓图时，图片ID请参见[TriggerCapturePicture](~~107914~~)。
- 智能告警事件触发抓图时，图片ID请参见[QueryDeviceEvent](~~107916~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'fdc576d03c094faea9fa10fbf48c****',
          ),
        ),
        4 => 
        array (
          'name' => 'ThumbWidth',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定目标缩放图的宽度，单位为px，取值范围为1~4096。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '100',
            'default' => '0',
          ),
        ),
        5 => 
        array (
          'name' => 'ExpireTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '图片URL的失效时间，单位为分钟，取值范围为1~43200。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '60',
            'default' => '0',
          ),
        ),
        6 => 
        array (
          'name' => 'PictureType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '图片类型：

- **0**：缩略图
- **1**：原图 
- **2**（默认）：全部
',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
            'default' => '2',
          ),
        ),
        7 => 
        array (
          'name' => 'IotInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。您可在物联网平台控制台的**实例概览**页面，查看当前实例的**ID**。

><notice>
- 若有ID值，必须传入该ID值，否则调用会失败。
- 若无<props="intl"><ph>**实例概览**页面或</ph></props>ID值，则无需传入。

></notice>

实例的更多信息，请参见[实例概述](~~356505~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'iot-cn-n6w1y******',
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
              'Code' => 
              array (
                'description' => '接口返回码：

- **200**：表示成功。
- 其它：表示错误码。错误码详情，请参见[错误码](~~145071~~)。',
                'type' => 'string',
                'example' => '200',
              ),
              'RequestId' => 
              array (
                'description' => '阿里云为该请求生成的唯一标识符。',
                'type' => 'string',
                'example' => '06DC77A0-4622-42DB-9EE0-25FIOHS82JK1',
              ),
              'ErrorMessage' => 
              array (
                'description' => '调用失败时，返回的出错信息。',
                'type' => 'string',
                'example' => 'request forbidden',
              ),
              'Success' => 
              array (
                'description' => '是否调用成功：
- **true**：调用成功。
- **false**：调用失败。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Data' => 
              array (
                'description' => '响应结果。',
                'type' => 'object',
                'properties' => 
                array (
                  'PicId' => 
                  array (
                    'description' => '图片ID。',
                    'type' => 'string',
                    'example' => 'R****bVhsNCjMjIy',
                  ),
                  'PicUrl' => 
                  array (
                    'description' => '图片URL。',
                    'type' => 'string',
                    'example' => 'https://link-vision-picture-sh.oss-cn-shanghai.aliyuncs.com/E***3D',
                  ),
                  'PicCreateTime' => 
                  array (
                    'description' => '图片创建时间，格式为13位时间戳，单位为毫秒。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1632453652222',
                  ),
                  'ThumbUrl' => 
                  array (
                    'description' => '缩略图URL。',
                    'type' => 'string',
                    'example' => 'https://link-vision-picture-sh.oss-cn-shanghai.aliyuncs.com/E***2Cq_90',
                  ),
                  'IotId' => 
                  array (
                    'description' => 'IPC设备的设备ID。',
                    'type' => 'string',
                    'example' => '1CJ0***kQi1000000',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"200\\",\\n  \\"RequestId\\": \\"06DC77A0-4622-42DB-9EE0-25FIOHS82JK1\\",\\n  \\"ErrorMessage\\": \\"request forbidden\\",\\n  \\"Success\\": true,\\n  \\"Data\\": {\\n    \\"PicId\\": \\"R****bVhsNCjMjIy\\",\\n    \\"PicUrl\\": \\"https://link-vision-picture-sh.oss-cn-shanghai.aliyuncs.com/E***3D\\",\\n    \\"PicCreateTime\\": 1632453652222,\\n    \\"ThumbUrl\\": \\"https://link-vision-picture-sh.oss-cn-shanghai.aliyuncs.com/E***2Cq_90\\",\\n    \\"IotId\\": \\"1CJ0***kQi1000000\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<QueryDevicePictureFileResponse>\\n<RequestId>B6E3F040-F2FD-5B6C-89B2-C3B58D22A5A0</RequestId>\\n<Data>\\n    <IotId>1CJ0***kQi1000000</IotId>\\n    <ThumbUrl>https://link-vision-picture-sh.oss-cn-shanghai.aliyuncs.com/E***2Cq_90</ThumbUrl>\\n    <PicUrl>https://link-vision-picture-sh.oss-cn-shanghai.aliyuncs.com/E***3D</PicUrl>\\n    <PicCreateTime>1632453652222</PicCreateTime>\\n    <PicId>R****bVhsNCjMjIy</PicId>\\n</Data>\\n<Code>200</Code>\\n<Success>true</Success>\\n</QueryDevicePictureFileResponse>","errorExample":""}]',
      'title' => '查询设备图片信息',
      'summary' => '调用该接口查询IPC设备获取的图片信息。',
      'requestParamsDescription' => '调用API时，除了本文介绍的该API的特有请求参数，还需传入公共请求参数。公共请求参数说明，请参见[公共参数](~~141505~~)文档。',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'QueryDevicePictureLifeCycle' => 
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
      ),
      'operationType' => 'readAndWrite',
      'systemTags' => 
      array (
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'IotId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'IPC设备的设备ID。物联网平台为该设备颁发的ID，设备的唯一标识符。

可调用物联网平台[QueryDeviceDetail](~~69594~~)查询。',
            'type' => 'string',
            'required' => true,
            'example' => 'C47T6xwp6ms4bNlkHRWCg4****',
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
              'Code' => 
              array (
                'description' => '接口返回码：

- **200**：表示成功。
- 其它：表示错误码。错误码详情，请参见[错误码](~~145071~~)。',
                'type' => 'string',
                'example' => '200',
              ),
              'RequestId' => 
              array (
                'description' => '阿里云为该请求生成的唯一标识符。',
                'type' => 'string',
                'example' => '0E2244FD-0AC9-4AB4-A8F0-729D78BE1D77',
              ),
              'ErrorMessage' => 
              array (
                'description' => '调用失败时，返回的出错信息。',
                'type' => 'string',
                'example' => 'tenant auth error',
              ),
              'Success' => 
              array (
                'description' => '是否调用成功：

- **true**：调用成功。
- **false**：调用失败。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Data' => 
              array (
                'description' => '查询结果。',
                'type' => 'object',
                'properties' => 
                array (
                  'Day' => 
                  array (
                    'description' => '图片在云端的存储天数。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '7',
                  ),
                  'IotId' => 
                  array (
                    'description' => '设备ID。',
                    'type' => 'string',
                    'example' => 'C47T6xwp6ms4bNlkHRWCg4****',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"200\\",\\n  \\"RequestId\\": \\"0E2244FD-0AC9-4AB4-A8F0-729D78BE1D77\\",\\n  \\"ErrorMessage\\": \\"tenant auth error\\",\\n  \\"Success\\": true,\\n  \\"Data\\": {\\n    \\"Day\\": 7,\\n    \\"IotId\\": \\"C47T6xwp6ms4bNlkHRWCg4****\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<QueryDevicePictureLifeCycleResponse>\\n<RequestId>0E2244FD-0AC9-4AB4-A8F0-729D78BE1D77</RequestId>\\n<Data>\\n    <IotId>C47T6xwp6ms4bNlkHRWCg4****</IotId>\\n    <Day>7</Day>\\n</Data>\\n<Code>200</Code>\\n<Success>true</Success>\\n</QueryDevicePictureLifeCycleResponse>","errorExample":""}]',
      'title' => '获取设备云存储图片生命周期',
      'summary' => '调用该接口查询IPC设备的云存储图片生命周期。',
      'requestParamsDescription' => '调用API时，除了本文介绍的该API的特有请求参数，还需传入公共请求参数。公共请求参数说明，请参见[公共参数](~~141505~~)文档。',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'QueryDeviceVodUrlByTime' => 
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
      ),
      'systemTags' => 
      array (
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Scheme',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '协议类型：
- **rtmp**：RTMP协议。
- **flv**：HTTP-FLV协议。
- **hls**：HLS协议。
 > HLS协议使用限制详细内容，请参见[云端开发](~~208584~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'rtmp',
            'default' => 'rtmp',
          ),
        ),
        1 => 
        array (
          'name' => 'SeekTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '相对于录像开始时间**BeginTime**的偏移量，单位为秒，默认值为0。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '2147483648',
            'minimum' => '0',
            'example' => '0',
            'default' => '0',
          ),
        ),
        2 => 
        array (
          'name' => 'IotInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。您可在物联网平台控制台的**实例概览**页面，查看当前实例的**ID**。

><notice>
- 若有ID值，必须传入该ID值，否则调用会失败。
- 若无<props="intl"><ph>**实例概览**页面或</ph></props>ID值，则无需传入。

></notice>

实例的更多信息，请参见[实例概述](~~356505~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'iot-cn-n6w1y****',
          ),
        ),
        3 => 
        array (
          'name' => 'ProductKey',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'IPC设备所属产品的ProductKey。
您可以在物联网平台控制台**产品**页查看或调用[QueryProductList](~~69271~~)查看当前账号下所有产品的信息。
><notice> 如果传入该参数，需同时传入**DeviceName**。
></notice>',
            'type' => 'string',
            'required' => false,
            'example' => 'a1BwAGV****',
          ),
        ),
        4 => 
        array (
          'name' => 'DeviceName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'IPC设备的设备名称。
您可以在物联网平台控制台的**设备**页查看**DeviceName**。
><notice> 如果传入该参数，需同时传入**ProductKey**。
></notice>',
            'type' => 'string',
            'required' => false,
            'example' => 'camera1',
          ),
        ),
        5 => 
        array (
          'name' => 'EnableStun',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'boolean',
            'required' => false,
            'default' => 'false',
          ),
        ),
        6 => 
        array (
          'name' => 'ShouldEncrypt',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否加密：
- **true**：加密。
- **false**（默认）：不加密。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
            'default' => 'false',
          ),
        ),
        7 => 
        array (
          'name' => 'BeginTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '录像开始时间，格式为10位时间戳，单位为秒。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'maximum' => '2147483648',
            'minimum' => '0',
            'example' => '1508200012',
          ),
        ),
        8 => 
        array (
          'name' => 'IotId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'IPC设备的设备ID。物联网平台为该设备颁发的ID，设备的唯一标识符。可调用物联网平台[QueryDeviceDetail](~~69594~~)查询。

><notice> 如果传入该参数，则无需传入**ProductKey**和**DeviceName**。**IotId**作为设备唯一标识符，和**ProductKey**与**DeviceName**的组合是一一对应的关系。如果您同时传入**IotId**和**ProductKey**与**DeviceName**的组合，则以**IotId**为准。
></notice>',
            'type' => 'string',
            'required' => false,
            'example' => 'C47T6xwp6ms4bNlkHRWCg4****',
          ),
        ),
        9 => 
        array (
          'name' => 'UrlValidDuration',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'URL有效期，取值范围为10~14400，单位为秒。默认值为10。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '60',
          ),
        ),
        10 => 
        array (
          'name' => 'PlayUnLimited',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '播放地址是否可以无限次使用：

- **true**：10秒内可无限次使用。
- **false**（默认）：仅可使用一次。
',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
            'default' => 'false',
          ),
        ),
        11 => 
        array (
          'name' => 'EndTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '录像结束时间，格式为10位时间戳，单位为秒。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'maximum' => '2147483648',
            'minimum' => '0',
            'example' => '1582420940',
          ),
        ),
        12 => 
        array (
          'name' => 'EncryptType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '加密类型。目前仅支持I帧加密，取值为0。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '2147483648',
            'minimum' => '0',
            'example' => '0',
            'default' => '0',
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
              'Code' => 
              array (
                'description' => '接口返回码：

- **200**：表示成功。
- 其它：表示错误码。错误码详情，请参见[错误码](~~145071~~)。',
                'type' => 'string',
                'example' => '200',
              ),
              'ErrorMessage' => 
              array (
                'description' => '调用失败时，返回的出错信息。
',
                'type' => 'string',
                'example' => 'tenant auth error',
              ),
              'RequestId' => 
              array (
                'description' => '阿里云为该请求生成的唯一标识符。',
                'type' => 'string',
                'example' => '06DC77A0-4622-42DB-9EE0-25FIOHS82JK1',
              ),
              'Success' => 
              array (
                'description' => '是否调用成功：
- **true**：调用成功。
- **false**：调用失败。
',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Data' => 
              array (
                'description' => '返回信息。',
                'type' => 'object',
                'properties' => 
                array (
                  'DecryptKey' => 
                  array (
                    'description' => '解密密钥。
设置**ShouldEncrypt**参数为**true**时，生成解密密钥。',
                    'type' => 'string',
                    'example' => '{"iv": "MDEy****OTo7PD0+Pw==","key": "eA2r****fHjOmnyBfQ=="}',
                  ),
                  'StunInfo' => 
                  array (
                    'type' => 'string',
                  ),
                  'VodUrl' => 
                  array (
                    'description' => '本地录像播放地址。',
                    'type' => 'string',
                    'example' => 'https://iotx-vision-vod-vpc-hz-pre.aliyun-inc.com/vod/device/localrecord/flv/play/1****668.flv?token=e9****a9e14482c56be52&session=470e****3d015',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"200\\",\\n  \\"RequestId\\": \\"06DC77A0-4622-42DB-9EE0-25FIOHS82JK1\\",\\n  \\"ErrorMessage\\": \\"tenant auth error\\",\\n  \\"Success\\": true,\\n  \\"Data\\": {\\n    \\"VodUrl\\": \\"https://iotx-vision-vod-vpc-hz-pre.aliyun-inc.com/vod/device/localrecord/flv/play/1****668.flv?token=e9****a9e14482c56be52&session=470e****3d015\\",\\n    \\"DecryptKey\\": \\"{\\\\\\"iv\\\\\\": \\\\\\"MDEy****OTo7PD0+Pw==\\\\\\",\\\\\\"key\\\\\\": \\\\\\"eA2r****fHjOmnyBfQ==\\\\\\"}\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<QueryDeviceVodUrlByTimeResponse>\\n<RequestId>06DC77A0-4622-42DB-9EE0-25FIOHS82JK1</RequestId>\\n<DecryptKey>\\n    <iv>MDEy****OTo7PD0+Pw==</iv>\\n    <key>eA2r****fHjOmnyBfQ==</key>\\n</DecryptKey>\\n<Data>\\n    <VodUrl>https://iotx-vision-vod-vpc-hz-pre.aliyun-inc.com/vod/device/localrecord/flv/play/1****668.flv?token=e9****a9e14482c56be52&amp;session=470e****3d015</VodUrl>\\n</Data>\\n<Code>200</Code>\\n<Success>true</Success>\\n</QueryDeviceVodUrlByTimeResponse>","errorExample":""}]',
      'title' => '按时间查询设备直播URL',
      'summary' => '调用该接口，获取本地NVR设备或IPC设备存储卡中，指定录像时间范围的录像文件播放地址。',
      'description' => '## 使用限制

仅支持IPC设备直连物联网平台场景。',
      'requestParamsDescription' => '调用API时，除了本文介绍的该API的特有请求参数，还需传入公共请求参数。公共请求参数说明，请参见[公共参数](~~141505~~)文档。',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'QueryFaceAllDeviceGroup' => 
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
      ),
      'systemTags' => 
      array (
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'IsolationId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '隔离Id',
            'type' => 'string',
            'required' => true,
            'example' => 'TestIsolationId',
          ),
        ),
        1 => 
        array (
          'name' => 'IotInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例Id
',
            'type' => 'string',
            'required' => false,
            'example' => 'TestIotInstanceId',
          ),
        ),
        2 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页大小',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'example' => '20',
          ),
        ),
        3 => 
        array (
          'name' => 'PageNo',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页号',
            'type' => 'integer',
            'format' => 'int32',
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
              'Code' => 
              array (
                'description' => '错误码',
                'type' => 'string',
                'example' => '200',
              ),
              'ErrorMessage' => 
              array (
                'description' => '错误描述',
                'type' => 'string',
                'example' => 'success',
              ),
              'RequestId' => 
              array (
                'description' => '请求Id',
                'type' => 'string',
                'example' => '0A13279A-5640-45E7-87AA-83750541AD0E',
              ),
              'Success' => 
              array (
                'description' => '是否成功',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Data' => 
              array (
                'description' => '接口返回信息',
                'type' => 'object',
                'properties' => 
                array (
                  'PageNo' => 
                  array (
                    'description' => '分页号',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                  'PageSize' => 
                  array (
                    'description' => '分页大小',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '20',
                  ),
                  'Total' => 
                  array (
                    'description' => '设备组总数',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '100',
                  ),
                  'DeviceGroupList' => 
                  array (
                    'description' => '设备组列表',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'DeviceGroupId' => 
                        array (
                          'description' => '设备组Id',
                          'type' => 'string',
                          'example' => 'wy250q0m',
                        ),
                        'ModifiedTime' => 
                        array (
                          'description' => '修改时间',
                          'type' => 'string',
                          'example' => '2020-05-12 17:19:29',
                        ),
                        'DeviceGroupName' => 
                        array (
                          'description' => '设备组名称',
                          'type' => 'string',
                          'example' => 'TestDeviceGroupName',
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
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"200\\",\\n  \\"ErrorMessage\\": \\"success\\",\\n  \\"RequestId\\": \\"0A13279A-5640-45E7-87AA-83750541AD0E\\",\\n  \\"Success\\": true,\\n  \\"Data\\": {\\n    \\"PageNo\\": 1,\\n    \\"PageSize\\": 20,\\n    \\"Total\\": 100,\\n    \\"DeviceGroupList\\": [\\n      {\\n        \\"DeviceGroupId\\": \\"wy250q0m\\",\\n        \\"ModifiedTime\\": \\"2020-05-12 17:19:29\\",\\n        \\"DeviceGroupName\\": \\"TestDeviceGroupName\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<RequestId>0A13279A-5640-45E7-87AA-83750541AD0E</RequestId>\\n<Data>\\n    <PageSize>20</PageSize>\\n    <Total>100</Total>\\n    <DeviceGroupList>\\n        <ModifiedTime>2020-05-12 17:19:29</ModifiedTime>\\n        <DeviceGroupName>TestDeviceGroupName</DeviceGroupName>\\n        <DeviceGroupId>wy250q0m</DeviceGroupId>\\n    </DeviceGroupList>\\n    <PageNo>1</PageNo>\\n</Data>\\n<ErrorMessage>success</ErrorMessage>\\n<Code>200</Code>\\n<Success>true</Success>","errorExample":""}]',
      'title' => '查询所有设备分组',
      'summary' => '查询所有设备分组。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'QueryFaceDeviceGroupsByDevice' => 
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
      ),
      'systemTags' => 
      array (
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'IsolationId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '隔离Id',
            'type' => 'string',
            'required' => true,
            'example' => 'TestIsolationId',
          ),
        ),
        1 => 
        array (
          'name' => 'IotInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例Id',
            'type' => 'string',
            'required' => true,
            'example' => 'TestIotInstanceId',
          ),
        ),
        2 => 
        array (
          'name' => 'ProductKey',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '产品Key',
            'type' => 'string',
            'required' => true,
            'example' => 'TestProductKey',
          ),
        ),
        3 => 
        array (
          'name' => 'DeviceName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '设备名',
            'type' => 'string',
            'required' => true,
            'example' => 'TestDeviceName',
          ),
        ),
        4 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页大小',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'example' => '20',
          ),
        ),
        5 => 
        array (
          'name' => 'PageNo',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页号',
            'type' => 'integer',
            'format' => 'int32',
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
              'Code' => 
              array (
                'description' => '错误码',
                'type' => 'string',
                'example' => '200',
              ),
              'ErrorMessage' => 
              array (
                'description' => '错误码描述',
                'type' => 'string',
                'example' => 'success',
              ),
              'RequestId' => 
              array (
                'description' => '请求Id',
                'type' => 'string',
                'example' => '0A13279A-5640-45E7-87AA-83750541AD0E',
              ),
              'Success' => 
              array (
                'description' => '接口调用是否成功',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Data' => 
              array (
                'description' => '接口返回值',
                'type' => 'object',
                'properties' => 
                array (
                  'PageNo' => 
                  array (
                    'description' => '分页号',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                  'PageSize' => 
                  array (
                    'description' => '分页大小',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '20',
                  ),
                  'Total' => 
                  array (
                    'description' => '设备组总数',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '5',
                  ),
                  'DeviceGroupList' => 
                  array (
                    'description' => '设备组列表',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'DeviceGroupId' => 
                        array (
                          'description' => '设备组Id',
                          'type' => 'string',
                          'example' => 'TestDeviceGroupId',
                        ),
                        'ModifiedTime' => 
                        array (
                          'description' => '修改时间',
                          'type' => 'string',
                          'example' => '2020-05-12 17:12:37',
                        ),
                        'DeviceGroupName' => 
                        array (
                          'description' => '设备组名称',
                          'type' => 'string',
                          'example' => 'TestDeviceGroupName',
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
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"200\\",\\n  \\"ErrorMessage\\": \\"success\\",\\n  \\"RequestId\\": \\"0A13279A-5640-45E7-87AA-83750541AD0E\\",\\n  \\"Success\\": true,\\n  \\"Data\\": {\\n    \\"PageNo\\": 1,\\n    \\"PageSize\\": 20,\\n    \\"Total\\": 5,\\n    \\"DeviceGroupList\\": [\\n      {\\n        \\"DeviceGroupId\\": \\"TestDeviceGroupId\\",\\n        \\"ModifiedTime\\": \\"2020-05-12 17:12:37\\",\\n        \\"DeviceGroupName\\": \\"TestDeviceGroupName\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<RequestId>0A13279A-5640-45E7-87AA-83750541AD0E</RequestId>\\n<Data>\\n    <PageSize>20</PageSize>\\n    <Total>5</Total>\\n    <DeviceGroupList>\\n        <ModifiedTime>2020-05-12 17:12:37</ModifiedTime>\\n        <DeviceGroupName>TestDeviceGroupName</DeviceGroupName>\\n        <DeviceGroupId>TestDeviceGroupId</DeviceGroupId>\\n    </DeviceGroupList>\\n    <PageNo>1</PageNo>\\n</Data>\\n<ErrorMessage>success</ErrorMessage>\\n<Code>200</Code>\\n<Success>true</Success>","errorExample":""}]',
      'title' => '查询设备所在的设备分组',
      'summary' => '查询设备所在的设备分组。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'QueryLiveStreaming' => 
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
      ),
      'systemTags' => 
      array (
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Scheme',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '播放协议类型：

- **rtmp**（默认）：RTMP协议。
- **hls**：HLS协议。
- **flv**：HTTP-FLV协议。',
            'type' => 'string',
            'required' => false,
            'example' => 'rtmp',
            'default' => 'rtmp',
          ),
        ),
        1 => 
        array (
          'name' => 'IotInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。您可在物联网平台控制台的**实例概览**页面，查看当前实例的**ID**。

><notice>
- 若有ID值，必须传入该ID值，否则调用会失败。
- 若无<props="intl"><ph>**实例概览**页面或</ph></props>ID值，则无需传入。

></notice>

实例的更多信息，请参见[实例概述](~~356505~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'iot-cn-n6w1y59****',
          ),
        ),
        2 => 
        array (
          'name' => 'ProductKey',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'IPC设备所属产品的ProductKey。
您可以在物联网平台控制台**产品**页查看或调用[QueryProductList](~~69271~~)查看当前账号下所有产品的信息。
><notice> 如果传入该参数，需同时传入**DeviceName**。
></notice>',
            'type' => 'string',
            'required' => false,
            'example' => 'a1BwAGV****',
          ),
        ),
        3 => 
        array (
          'name' => 'DeviceName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'IPC设备的设备名称。
您可以在物联网平台控制台的**设备**页查看**DeviceName**。
><notice> 如果传入该参数，需同时传入**ProductKey**。
></notice>',
            'type' => 'string',
            'required' => false,
            'example' => 'camera1',
          ),
        ),
        4 => 
        array (
          'name' => 'EnableStun',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'boolean',
            'required' => false,
            'default' => 'false',
          ),
        ),
        5 => 
        array (
          'name' => 'StreamType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '码流类型：
- **0**（默认）：主码流。
- **1**：辅码流。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '0',
            'default' => '0',
          ),
        ),
        6 => 
        array (
          'name' => 'CacheDuration',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '视频缓存数据时长，取值范围为0~10000，单位为毫秒，默认值为0。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '10000',
            'minimum' => '0',
            'example' => '0',
            'default' => '0',
          ),
        ),
        7 => 
        array (
          'name' => 'IotId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'IPC设备的设备ID。物联网平台为该设备颁发的ID，设备的唯一标识符。可调用物联网平台[QueryDeviceDetail](~~69594~~)查询。

><notice> 如果传入该参数，则无需传入**ProductKey**和**DeviceName**。**IotId**作为设备唯一标识符，和**ProductKey**与**DeviceName**的组合是一一对应的关系。如果您同时传入**IotId**和**ProductKey**与**DeviceName**的组合，则以**IotId**为准。
></notice>',
            'type' => 'string',
            'required' => false,
            'example' => 'C47T6xwp6ms4bNlkHRWCg4****',
          ),
        ),
        8 => 
        array (
          'name' => 'ShouldEncrypt',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否加密：

- **true**：加密。
- **false**（默认）：不加密。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
            'default' => 'false',
          ),
        ),
        9 => 
        array (
          'name' => 'UrlValidDuration',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'URL有效期，取值范围为10~14400，单位为秒。默认值为10。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '60',
          ),
        ),
        10 => 
        array (
          'name' => 'PlayUnLimited',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '播放地址在有效期内是否允许无限次使用：
- **true**：允许。
- **false**（默认）：不允许。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
            'default' => 'false',
          ),
        ),
        11 => 
        array (
          'name' => 'EncryptType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '加密类型：
- **1**（默认）：关键帧加密。
- **0**：不加密。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
            'default' => '0',
          ),
        ),
        12 => 
        array (
          'name' => 'ForceIFrame',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否给设备下发强制I帧指令：

- **true**：下发。
- **false**（默认）：不下发。',
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
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'description' => '接口返回码：

- **200**：表示成功。
- 其它：表示错误码。错误码详情，请参见[错误码](~~145071~~)。',
                'type' => 'string',
                'example' => '200',
              ),
              'ErrorMessage' => 
              array (
                'description' => '调用失败时，返回的出错信息。',
                'type' => 'string',
                'example' => 'stream push failed',
              ),
              'RequestId' => 
              array (
                'description' => '阿里云为该请求生成的唯一标识符。',
                'type' => 'string',
                'example' => '06DC77A0-4622-42DB-9EE0-25FIOHS82JK1',
              ),
              'Success' => 
              array (
                'description' => '是否调用成功：
- **true**：调用成功。
- **false**：调用失败。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Data' => 
              array (
                'description' => '播放地址信息。',
                'type' => 'object',
                'properties' => 
                array (
                  'Path' => 
                  array (
                    'description' => '直播播放地址。
>播放地址有效期为10秒。',
                    'type' => 'string',
                    'example' => 'rtmp://47.100.***.***:8000/live?token=dc1****120ce394ef94974/Eb****6RBe8l4_0',
                  ),
                  'RelayDecryptKey' => 
                  array (
                    'type' => 'string',
                  ),
                  'StunInfo' => 
                  array (
                    'type' => 'string',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"200\\",\\n  \\"ErrorMessage\\": \\"stream push failed\\",\\n  \\"RequestId\\": \\"06DC77A0-4622-42DB-9EE0-25FIOHS82JK1\\",\\n  \\"Success\\": true,\\n  \\"Data\\": {\\n    \\"Path\\": \\"rtmp://47.100.***.***:8000/live?token=dc1****120ce394ef94974/Eb****6RBe8l4_0\\",\\n    \\"RelayDecryptKey\\": \\"\\",\\n    \\"StunInfo\\": \\"\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<QueryLiveStreamingResponse>\\n<RequestId>01155F78-1A0B-57BE-8349-591341CA7DFC</RequestId>\\n<Data>\\n    <Path>rtmp://47.100.***.***:8000/live?token=dc1****120ce394ef94974/Eb****6RBe8l4_0</Path>\\n    <DecryptKey>\\n        <iv>MDEy****OTo7PD0+Pw==</iv>\\n        <key>eA2r****fHjOmnyBfQ==</key>\\n    </DecryptKey>\\n</Data>\\n<Code>200</Code>\\n<Success>true</Success>\\n</QueryLiveStreamingResponse>","errorExample":""}]',
      'title' => 'QueryLiveStreaming',
      'summary' => '调用该接口获取IPC设备的直播开播地址。',
      'requestParamsDescription' => '调用API时，除了本文介绍的该API的特有请求参数，还需传入公共请求参数。公共请求参数说明，请参见[公共参数](~~141505~~)文档。',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'QueryVoiceIntercom' => 
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
      ),
      'systemTags' => 
      array (
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Scheme',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '语音对讲的连接协议类型。可取值：

- **ws**：表示WebSocket连接协议。Web端实现语音对讲能力时，调用本接口获取的Web语音通话地址。<props="china"><ph>Web端与设备端实现语音对讲能力的详细说明，请参见[Web语音对讲集成说明](~~2545966~~)。</ph></props>
- **rtmp**（默认）：Android和iOS应用端播放器实现语音对讲时，调用本接口获取的对应语音通话地址。Android和iOS应用端与设备端实现语音对讲能力的详细说明，请参见[Android语音对讲](~~260925~~)和[iOS语音对讲](~~253953~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'rtmp',
            'default' => 'rtmp',
          ),
        ),
        1 => 
        array (
          'name' => 'IotInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。您可在物联网平台控制台的**实例概览**页面，查看当前实例的**ID**。

><notice>
- 若有ID值，必须传入该**ID**值，否则调用会失败。
- 若无**实例概览**页面或**ID**值，则无需传入。

></notice>

实例的更多信息，请参见[实例概述](~~356505~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'iot-cn-n6w1y*****',
          ),
        ),
        2 => 
        array (
          'name' => 'ProductKey',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'IPC设备所属产品的**ProductKey**。
您可以在物联网平台控制台**产品**页面或调用接口[QueryProductList](~~69271~~)查看当前账号下所有产品的信息。
><notice> 如果传入该参数，需同时传入**DeviceName**。
></notice>',
            'type' => 'string',
            'required' => false,
            'example' => 'a1BwAGV****',
          ),
        ),
        3 => 
        array (
          'name' => 'DeviceName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'IPC设备的设备名称。
您可以在物联网平台控制台的**设备**页面查看**DeviceName**。
><notice> 如果传入该参数，需同时传入**ProductKey**。
></notice>',
            'type' => 'string',
            'required' => false,
            'example' => 'camera1',
          ),
        ),
        4 => 
        array (
          'name' => 'IotId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'IPC设备的设备ID。物联网平台为该设备颁发的ID，设备的唯一标识符。可调用接口[QueryDeviceDetail](~~69594~~)查询。

><notice> **IotId**作为设备唯一标识符，和**ProductKey**与**DeviceName**的组合是一一对应的关系。如果传入该参数，则无需传入**ProductKey**和**DeviceName**。如果您同时传入**IotId**和**ProductKey**与**DeviceName**的组合，则以**IotId**为准。
></notice>',
            'type' => 'string',
            'required' => false,
            'example' => 'C47T6xwp6ms4bNlkHRWCg4****',
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
              'Code' => 
              array (
                'description' => '接口返回码：

- **200**：表示成功。
- 其它：表示错误码。错误码详情，请参见[错误码](~~145071~~)。',
                'type' => 'string',
                'example' => '200',
              ),
              'ErrorMessage' => 
              array (
                'description' => '调用失败时，返回的出错信息。',
                'type' => 'string',
                'example' => 'tenant auth error',
              ),
              'RequestId' => 
              array (
                'description' => '阿里云为该请求生成的唯一标识符。
',
                'type' => 'string',
                'example' => '06DC77A0-4622-42DB-9EE0-25FIOHS82JK1',
              ),
              'Success' => 
              array (
                'description' => '是否调用成功：
- **true**：调用成功。
- **false**：调用失败。
',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Data' => 
              array (
                'description' => '语音对讲地址信息。',
                'type' => 'object',
                'properties' => 
                array (
                  'Url' => 
                  array (
                    'description' => '语音对讲地址。',
                    'type' => 'string',
                    'example' => 'rtmp://***.***.***.***:8000/talk?token=********',
                  ),
                  'CryptoKey' => 
                  array (
                    'description' => '解密参数。',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'Key' => 
                      array (
                        'description' => '解密密钥。',
                        'type' => 'string',
                        'example' => 'bPvz6tnfonP1E+********v2Q==',
                      ),
                      'Iv' => 
                      array (
                        'description' => '解密向量。',
                        'type' => 'string',
                        'example' => 'MDEyMzQ1Njc4********0+Pw==',
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
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"200\\",\\n  \\"ErrorMessage\\": \\"tenant auth error\\",\\n  \\"RequestId\\": \\"06DC77A0-4622-42DB-9EE0-25FIOHS82JK1\\",\\n  \\"Success\\": true,\\n  \\"Data\\": {\\n    \\"Url\\": \\"rtmp://***.***.***.***:8000/talk?token=********\\",\\n    \\"CryptoKey\\": {\\n      \\"Key\\": \\"bPvz6tnfonP1E+********v2Q==\\",\\n      \\"Iv\\": \\"MDEyMzQ1Njc4********0+Pw==\\"\\n    }\\n  }\\n}","errorExample":""},{"type":"xml","example":"<QueryVoiceIntercomResponse>\\n<RequestId>06DC77A0-4622-42DB-9EE0-25FIOHS82JK1</RequestId>\\n<Data>\\n    <Url>rtmp://***.***.***.***:8000/talk?token=********</Url>\\n    <CryptoKey>\\n        <Iv>MDEyMzQ1Njc4****0+Pw==</Iv>\\n        <Key>bPvz6tnfonP1E+****2Q==</Key>\\n    </CryptoKey>\\n</Data>\\n<Code>200</Code>\\n<Success>true</Success>\\n</QueryVoiceIntercomResponse>","errorExample":""}]',
      'title' => '请求语音对讲地址',
      'summary' => '调用该接口获取IPC设备的语音对讲地址。',
      'requestParamsDescription' => '调用API时，除了本文介绍的该API的特有请求参数，还需传入公共请求参数。公共请求参数说明，请参见[公共参数](~~141505~~)文档。
',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'RemoveFaceDeviceFromDeviceGroup' => 
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
      ),
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'IsolationId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '隔离Id',
            'type' => 'string',
            'required' => true,
            'example' => 'TestIsolationId',
          ),
        ),
        1 => 
        array (
          'name' => 'IotInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例Id',
            'type' => 'string',
            'required' => false,
            'example' => 'TestIotInstanceId',
          ),
        ),
        2 => 
        array (
          'name' => 'ProductKey',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '物联网平台产品Key',
            'type' => 'string',
            'required' => true,
            'example' => 'TestProductKey',
          ),
        ),
        3 => 
        array (
          'name' => 'DeviceName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '设备名称',
            'type' => 'string',
            'required' => true,
            'example' => 'TestDeviceName',
          ),
        ),
        4 => 
        array (
          'name' => 'DeviceGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '设备组Id',
            'type' => 'string',
            'required' => true,
            'example' => 'TestDeviceGroupId',
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
              'Code' => 
              array (
                'description' => '错误码',
                'type' => 'string',
                'example' => '200',
              ),
              'ErrorMessage' => 
              array (
                'description' => '错误描述',
                'type' => 'string',
                'example' => 'success',
              ),
              'RequestId' => 
              array (
                'description' => '请求Id',
                'type' => 'string',
                'example' => '0A13279A-5640-45E7-87AA-83750541AD0E',
              ),
              'Success' => 
              array (
                'description' => '是否成功',
                'type' => 'boolean',
                'example' => 'true',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"200\\",\\n  \\"ErrorMessage\\": \\"success\\",\\n  \\"RequestId\\": \\"0A13279A-5640-45E7-87AA-83750541AD0E\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<RequestId>0A13279A-5640-45E7-87AA-83750541AD0E</RequestId>\\n<ErrorMessage>success</ErrorMessage>\\n<Code>200</Code>\\n<Success>true</Success>","errorExample":""}]',
      'title' => '将设备移出设备分组',
      'summary' => '将设备移出设备分组。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'AddFaceUserGroup' => 
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
      ),
      'systemTags' => 
      array (
        'operationType' => 'create',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'IsolationId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '业务隔离ID，用于同一个阿里云账号下不同业务应用之间的数据隔离，支持英文大小写字母、数字。

例如，您在A地区和B地区，均有人脸识别业务，那么可设置不同的业务隔离ID，区分A、B地区的人脸识别业务。

><notice>
请妥善保存业务隔离ID值，以便后续调用此业务隔离区其它接口时使用。
></notice>',
            'type' => 'string',
            'required' => true,
            'example' => 'ZheJiangHZ',
          ),
        ),
        1 => 
        array (
          'name' => 'UserGroupName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用户组名称，请自定义参数值，长度不超过128个字符。',
            'type' => 'string',
            'required' => true,
            'example' => 'TestUserGroup',
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
              'Code' => 
              array (
                'description' => '接口返回码：
- **200**：表示成功。
- 其它：表示错误码。错误码详情，请参见[错误码](~~288314~~)。',
                'type' => 'string',
                'example' => '200',
              ),
              'ErrorMessage' => 
              array (
                'description' => '调用失败时，返回的出错信息。',
                'type' => 'string',
                'example' => 'group already exist',
              ),
              'RequestId' => 
              array (
                'description' => '阿里云为该请求生成的唯一标识符。',
                'type' => 'string',
                'example' => '0A13279A-5640-45E7-87AA-83750541AD0E',
              ),
              'Success' => 
              array (
                'description' => '是否调用成功：
- **true**：表示调用成功。
- **false**：表示调用失败。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Data' => 
              array (
                'description' => '调用成功时，返回的数据。',
                'type' => 'object',
                'properties' => 
                array (
                  'UserGroupName' => 
                  array (
                    'description' => '用户组名称。',
                    'type' => 'string',
                    'example' => 'TestUserGroup',
                  ),
                  'ModifiedTime' => 
                  array (
                    'description' => '添加用户组的时间。',
                    'type' => 'string',
                    'example' => '2020-11-20 18:59:01',
                  ),
                  'UserGroupId' => 
                  array (
                    'description' => '系统为该用户组生成的ID。

> 在人脸底库服务的其它接口调用中，会使用**UserGroupId**，请妥善保存。',
                    'type' => 'string',
                    'example' => 'kvjy****',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"200\\",\\n  \\"ErrorMessage\\": \\"group already exist\\",\\n  \\"RequestId\\": \\"0A13279A-5640-45E7-87AA-83750541AD0E\\",\\n  \\"Success\\": true,\\n  \\"Data\\": {\\n    \\"UserGroupName\\": \\"TestUserGroup\\",\\n    \\"ModifiedTime\\": \\"2020-11-20 18:59:01\\",\\n    \\"UserGroupId\\": \\"kvjy****\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<AddFaceUserGroupResponse>\\n    <RequestId>0A13279A-5640-45E7-87AA-83750541AD0E</RequestId>\\n    <Data>\\n        <ModifiedTime>2020-11-20 18:59:01</ModifiedTime>\\n        <UserGroupName>TestUserGroup</UserGroupName>\\n        <UserGroupId>kvjy****</UserGroupId>\\n    </Data>\\n    <Code>200</Code>\\n    <Success>true</Success>\\n</AddFaceUserGroupResponse>","errorExample":""}]',
      'title' => '添加用户组',
      'summary' => '调用该接口创建用户组。',
      'description' => '## 使用说明

- 单个阿里云账号调用该接口的每秒请求数（QPS）最大限制为100。

    > RAM用户共享阿里云账号配额。

- 调用该接口后，系统会返回用户组的ID（**UserGroupId**），建议保存该值到本地，以便后续调用其它接口时使用。',
      'requestParamsDescription' => ' 调用API时，除了本文介绍的该API的特有请求参数，还需传入公共请求参数。公共请求参数说明，请参见[公共参数文档](~~288312~~)。',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'AddFaceUserToUserGroup' => 
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
      ),
      'systemTags' => 
      array (
        'operationType' => 'create',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'IsolationId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '业务隔离ID，用于同一个阿里云账号下不同业务应用之间的数据隔离。

><notice>
用户和用户组，必须在同一个隔离ID下。请与调用[AddFaceUser](~~288338~~)接口添加用户，和调用[AddFaceUserGroup](~~288341~~)接口创建用户组时设置的**IsolationId**保持一致。
></notice>',
            'type' => 'string',
            'required' => true,
            'example' => 'ZheJiangHZ',
          ),
        ),
        1 => 
        array (
          'name' => 'UserId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用户ID。请传入在调用[AddFaceUser](~~288338~~)接口添加用户后，获取并保存到本地的用户ID。',
            'type' => 'string',
            'required' => true,
            'example' => '3mtjaqebeq4d****',
          ),
        ),
        2 => 
        array (
          'name' => 'UserGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用户组ID。请传入在调用[AddFaceUserGroup](~~288341~~)接口创建用户组后，获取并保存到本地的用户组ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'kvjy****',
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
              'Code' => 
              array (
                'description' => '接口返回码：
- **200**：表示成功。
- 其它：表示错误码。错误码详情，请参见[错误码](~~288314~~)。',
                'type' => 'string',
                'example' => '200',
              ),
              'ErrorMessage' => 
              array (
                'description' => '调用失败时，返回的出错信息。',
                'type' => 'string',
                'example' => 'face user not exist',
              ),
              'RequestId' => 
              array (
                'description' => '阿里云为该请求生成的唯一标识符。',
                'type' => 'string',
                'example' => '0A13279A-5640-45E7-87AA-83750541AD0E',
              ),
              'Success' => 
              array (
                'description' => '是否调用成功：
- **true**：表示调用成功。
- **false**：表示调用失败。',
                'type' => 'boolean',
                'example' => 'true',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"200\\",\\n  \\"ErrorMessage\\": \\"face user not exist\\",\\n  \\"RequestId\\": \\"0A13279A-5640-45E7-87AA-83750541AD0E\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<AddFaceUserToUserGroupResponse>\\r\\n      <RequestId>0A13279A-5640-45E7-87AA-83750541AD0E</RequestId>\\r\\n      <Code>200</Code>\\r\\n      <Success>true</Success>\\r\\n</AddFaceUserToUserGroupResponse>","errorExample":""}]',
      'title' => '将用户添加到用户组',
      'summary' => '调用该接口将用户添加到用户组。',
      'description' => '## 限制条件
单个阿里云账号调用该接口的每秒请求数（QPS）最大限制为100。
    > RAM用户共享阿里云账号配额。',
      'requestParamsDescription' => ' 调用API时，除了本文介绍的该API的特有请求参数，还需传入公共请求参数。公共请求参数说明，请参见[公共参数文档](~~288312~~)。',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DeleteFaceUserGroup' => 
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
      ),
      'systemTags' => 
      array (
        'operationType' => 'delete',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'IsolationId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '业务隔离ID，用于隔离同一个阿里云账号下不同业务应用之间的数据。请与调用[AddFaceUserGroup](~~288341~~)接口添加用户时设置的**IsolationId**保持一致。',
            'type' => 'string',
            'required' => true,
            'example' => 'ZheJiangHZ',
          ),
        ),
        1 => 
        array (
          'name' => 'UserGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用户组ID。请传入在调用[AddFaceUserGroup](~~288341~~)接口添加用户组后，获取并保存到本地的用户组ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'kvjy****',
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
              'Code' => 
              array (
                'description' => '接口返回码：
- **200**：表示成功。
- 其它：表示错误码。错误码详情，请参见[错误码](~~288314~~)。',
                'type' => 'string',
                'example' => '200',
              ),
              'ErrorMessage' => 
              array (
                'description' => '调用失败时，返回的出错信息。',
                'type' => 'string',
                'example' => 'face group not exist',
              ),
              'RequestId' => 
              array (
                'description' => '阿里云为该请求生成的唯一标识符。',
                'type' => 'string',
                'example' => '0A13279A-5640-45E7-87AA-83750541AD0E',
              ),
              'Success' => 
              array (
                'description' => '是否调用成功：
- **true**：表示调用成功。
- **false**：表示调用失败。',
                'type' => 'boolean',
                'example' => 'true',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"200\\",\\n  \\"ErrorMessage\\": \\"face group not exist\\",\\n  \\"RequestId\\": \\"0A13279A-5640-45E7-87AA-83750541AD0E\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<DeleteFaceUserGroupResponse>\\r\\n\\t<RequestId>0A13279A-5640-45E7-87AA-83750541AD0E</RequestId>\\r\\n\\t<Code>200</Code>\\r\\n\\t<Success>true</Success>\\r\\n</DeleteFaceUserGroupResponse>","errorExample":""}]',
      'title' => 'DeleteFaceUserGroup',
      'summary' => '调用该接口删除指定的用户组。',
      'description' => '## 限制条件
单个阿里云账号调用该接口的每秒请求数（QPS）最大限制为100。
    > RAM用户共享阿里云账号配额。',
      'requestParamsDescription' => ' 调用API时，除了本文介绍的该API的特有请求参数，还需传入公共请求参数。公共请求参数说明，请参见[公共参数文档](~~288312~~)。',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'UpdateFaceUserGroupAndDeviceGroupRelation' => 
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
      ),
      'systemTags' => 
      array (
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'IsolationId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '业务隔离ID，用于隔离同一个阿里云账号下不同业务应用之间的数据。请与调用[AddFaceUserGroupAndDeviceGroupRelation](~~288342~~)接口，添加用户组与设备组之间的人脸同步关系时设置的**IsolationId**保持一致。',
            'type' => 'string',
            'required' => true,
            'example' => 'ZheJiangHZ',
          ),
        ),
        1 => 
        array (
          'name' => 'ControlId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用户组与设备组同步关系控制ID。请传入调用[AddFaceUserGroupAndDeviceGroupRelation](~~288342~~)接口，添加用户组与设备组之间的人脸同步关系时，获取并保存到本地的**ControlId**值。',
            'type' => 'string',
            'required' => true,
            'example' => 'qcb2yea4ha4d****',
          ),
        ),
        2 => 
        array (
          'name' => 'Relation',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '人脸同步关系。当前仅支持设置为**SYNC_INFO_PICTURE**，表示同步用户照片和用户信息。',
            'type' => 'string',
            'required' => true,
            'example' => 'SYNC_INFO_PICTURE',
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
              'Code' => 
              array (
                'description' => '接口返回码：
- **200**：表示成功。
- 其它：表示错误码。错误码详情，请参见[错误码](~~288314~~)。',
                'type' => 'string',
                'example' => '200',
              ),
              'RequestId' => 
              array (
                'description' => '阿里云为该请求生成的唯一标识符。',
                'type' => 'string',
                'example' => '0A13279A-5640-45E7-87AA-83750541AD0E',
              ),
              'ErrorMessage' => 
              array (
                'description' => '调用失败时，返回的出错信息。',
                'type' => 'string',
                'example' => 'access control not exist',
              ),
              'Success' => 
              array (
                'description' => '是否调用成功：
- **true**：表示调用成功。
- **false**：表示调用失败。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Data' => 
              array (
                'description' => '调用成功时，返回的数据。',
                'type' => 'object',
                'properties' => 
                array (
                  'ControlId' => 
                  array (
                    'description' => '用户组与设备组同步关系控制ID。',
                    'type' => 'string',
                    'example' => 'qcb2yea4ha4d****',
                  ),
                  'ModifiedTime' => 
                  array (
                    'description' => '最后一次更新用户组与设备组之间的人脸同步关系时间。',
                    'type' => 'string',
                    'example' => '2020-04-25 19:29:30',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"200\\",\\n  \\"RequestId\\": \\"0A13279A-5640-45E7-87AA-83750541AD0E\\",\\n  \\"ErrorMessage\\": \\"access control not exist\\",\\n  \\"Success\\": true,\\n  \\"Data\\": {\\n    \\"ControlId\\": \\"qcb2yea4ha4d****\\",\\n    \\"ModifiedTime\\": \\"2020-04-25 19:29:30\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<UpdateFaceUserGroupAndDeviceGroupRelationResponse>\\r\\n\\t<RequestId>0A13279A-5640-45E7-87AA-83750541AD0E</RequestId>\\r\\n\\t<Data>\\r\\n\\t\\t<ModifiedTime>2020-04-25 19:29:30</ModifiedTime>\\r\\n\\t\\t<ControlId>qcb2yea4ha4d****</ControlId>\\r\\n\\t</Data>\\r\\n\\t<Code>200</Code>\\r\\n\\t<Success>true</Success>\\r\\n</UpdateFaceUserGroupAndDeviceGroupRelationResponse>","errorExample":""}]',
      'title' => '更新设备组、用户组人脸同步关系',
      'summary' => '调用该接口，更新用户组与设备组之间的人脸同步关系。',
      'description' => '## 限制条件
单个阿里云账号调用该接口的每秒请求数（QPS）最大限制为100。
    > RAM用户共享阿里云账号配额。',
      'requestParamsDescription' => ' 调用API时，除了本文介绍的该API的特有请求参数，还需传入公共请求参数。公共请求参数说明，请参见[公共参数文档](~~288312~~)。',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'UpdateFaceUser' => 
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
      ),
      'systemTags' => 
      array (
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'IsolationId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '隔离ID。
<br>用于租户下不同应用之间的数据隔离。如某用户在浙江、陕西都有业务，则可以为浙江和西安的业务分别创建两个隔离ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'TestIsolati****',
          ),
        ),
        1 => 
        array (
          'name' => 'UserId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用户ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'tibce3fsgqel****',
          ),
        ),
        2 => 
        array (
          'name' => 'Name',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用户名。',
            'type' => 'string',
            'required' => false,
            'example' => 'ZhangSan',
          ),
        ),
        3 => 
        array (
          'name' => 'Params',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用户信息。',
            'type' => 'string',
            'required' => false,
            'example' => '{"age":28, "sex":"male"}',
          ),
        ),
        4 => 
        array (
          'name' => 'FacePicUrl',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '图片URL下载地址，目前支持JPG、JPEG格式图片。',
            'type' => 'string',
            'required' => false,
            'example' => 'https://test.com/test.jpg',
          ),
        ),
        5 => 
        array (
          'name' => 'CustomUserId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '该参数为调用者业务系统中，用户的唯一ID，如身份证号、学号等。',
            'type' => 'string',
            'required' => false,
            'example' => '52242819650301xxxx',
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
              'Code' => 
              array (
                'description' => '错误码。',
                'type' => 'string',
                'example' => '200',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '0A13279A-5640-45E7-87AA-83750541AD0E',
              ),
              'ErrorMessage' => 
              array (
                'description' => '错误描述。',
                'type' => 'string',
                'example' => 'success',
              ),
              'Success' => 
              array (
                'description' => '是否成功。',
                'type' => 'boolean',
                'example' => 'true',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"200\\",\\n  \\"RequestId\\": \\"0A13279A-5640-45E7-87AA-83750541AD0E\\",\\n  \\"ErrorMessage\\": \\"success\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<UpdateFaceUserResponse>\\n    <RequestId>0A13279A-5640-45E7-87AA-83750541AD0E</RequestId>\\n    <ErrorMessage>success</ErrorMessage>\\n    <Code>200</Code>\\n    <Success>true</Success>\\n</UpdateFaceUserResponse>","errorExample":""}]',
      'title' => '更新用户信息',
      'summary' => '更新用户信息。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'QueryFaceAllUserGroupAndDeviceGroupRelation' => 
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
      ),
      'systemTags' => 
      array (
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'IsolationId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '隔离ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'Isolati***',
          ),
        ),
        1 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页大小。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'example' => '20',
          ),
        ),
        2 => 
        array (
          'name' => 'PageNo',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页号。',
            'type' => 'integer',
            'format' => 'int32',
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
              'Code' => 
              array (
                'description' => '错误码。',
                'type' => 'string',
                'example' => '200',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '0A13279A-5640-45E7-87AA-83750541AD0E',
              ),
              'ErrorMessage' => 
              array (
                'description' => '错误描述。',
                'type' => 'string',
                'example' => 'success',
              ),
              'Success' => 
              array (
                'description' => '接口调用是否成功。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Data' => 
              array (
                'description' => '接口返回值。',
                'type' => 'object',
                'properties' => 
                array (
                  'PageSize' => 
                  array (
                    'description' => '分页大小。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '20',
                  ),
                  'Total' => 
                  array (
                    'description' => '总数。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '10',
                  ),
                  'Page' => 
                  array (
                    'description' => '分页号。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                  'List' => 
                  array (
                    'description' => '用户组、设备组人脸同步关系列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'DeviceGroupId' => 
                        array (
                          'description' => '设备组ID。',
                          'type' => 'string',
                          'example' => 'TestDeviceGro****',
                        ),
                        'ControlId' => 
                        array (
                          'description' => '用户组、设备组同步关系控制ID。',
                          'type' => 'string',
                          'example' => 'ni1iyxqry0j0****',
                        ),
                        'ModifiedTime' => 
                        array (
                          'description' => '修改时间。',
                          'type' => 'string',
                          'example' => '2020-05-12 17:12:37',
                        ),
                        'ControlType' => 
                        array (
                          'description' => '人脸同步关系（同步用户照片和用户信息）。',
                          'type' => 'string',
                          'example' => 'SYNC_INFO_PICTURE',
                        ),
                        'UserGroupId' => 
                        array (
                          'description' => '用户组ID。',
                          'type' => 'string',
                          'example' => 'TestUserGro****',
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
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"200\\",\\n  \\"RequestId\\": \\"0A13279A-5640-45E7-87AA-83750541AD0E\\",\\n  \\"ErrorMessage\\": \\"success\\",\\n  \\"Success\\": true,\\n  \\"Data\\": {\\n    \\"PageSize\\": 20,\\n    \\"Total\\": 10,\\n    \\"Page\\": 1,\\n    \\"List\\": [\\n      {\\n        \\"DeviceGroupId\\": \\"TestDeviceGro****\\",\\n        \\"ControlId\\": \\"ni1iyxqry0j0****\\",\\n        \\"ModifiedTime\\": \\"2020-05-12 17:12:37\\",\\n        \\"ControlType\\": \\"SYNC_INFO_PICTURE\\",\\n        \\"UserGroupId\\": \\"TestUserGro****\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<QueryFaceAllUserGroupAndDeviceGroupRelationResponse>\\n\\t<RequestId>0A13279A-5640-45E7-87AA-83750541AD0E</RequestId>\\n\\t<Data>\\n\\t\\t<PageSize>20</PageSize>\\n\\t\\t<Total>10</Total>\\n\\t\\t<Page>1</Page>\\n\\t\\t<List>\\n\\t\\t\\t<ControlType>SYNC_INFO_PICTURE</ControlType>\\n\\t\\t\\t<ModifiedTime>2020-05-12 17:12:37</ModifiedTime>\\n\\t\\t\\t<DeviceGroupId>TestDeviceGro****</DeviceGroupId>\\n\\t\\t\\t<ControlId>ni1iyxqry0j0****</ControlId>\\n\\t\\t\\t<UserGroupId>TestUserGro****</UserGroupId>\\n\\t\\t</List>\\n\\t</Data>\\n\\t<ErrorMessage>success</ErrorMessage>\\n\\t<Code>200</Code>\\n\\t<Success>true</Success>\\n</QueryFaceAllUserGroupAndDeviceGroupRelationResponse>","errorExample":""}]',
      'title' => '查询已添加人脸同步关系的用户组和设备组',
      'summary' => '查询已添加人脸同步关系的用户组和设备组。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'QueryFaceUserGroupAndDeviceGroupRelation' => 
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
      ),
      'systemTags' => 
      array (
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'IsolationId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '隔离Id',
            'type' => 'string',
            'required' => true,
            'example' => 'TestIsolationId',
          ),
        ),
        1 => 
        array (
          'name' => 'ControlId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用户组、设备组人脸同步关系控制Id',
            'type' => 'string',
            'required' => true,
            'example' => 'ni1iyxqry0j03plv',
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
              'Code' => 
              array (
                'description' => '错误码',
                'type' => 'string',
                'example' => '200',
              ),
              'RequestId' => 
              array (
                'description' => '请求Id',
                'type' => 'string',
                'example' => '0A13279A-5640-45E7-87AA-83750541AD0E',
              ),
              'ErrorMessage' => 
              array (
                'description' => '错误描述',
                'type' => 'string',
                'example' => 'success',
              ),
              'Success' => 
              array (
                'description' => '接口调用是否成功',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Data' => 
              array (
                'description' => '接口调用返回值',
                'type' => 'object',
                'properties' => 
                array (
                  'DeviceGroupId' => 
                  array (
                    'description' => '设备组Id',
                    'type' => 'string',
                    'example' => 'TestDeviceGroupId',
                  ),
                  'ControlId' => 
                  array (
                    'description' => '用户组、设备组人脸同步关系控制Id',
                    'type' => 'string',
                    'example' => 'ni1iyxqry0j03plv',
                  ),
                  'ModifiedTime' => 
                  array (
                    'description' => '修改时间',
                    'type' => 'string',
                    'example' => '2020-05-12 17:12:37',
                  ),
                  'ControlType' => 
                  array (
                    'description' => '人脸同步关系',
                    'type' => 'string',
                    'example' => 'SYNC_INFO_PICTURE',
                  ),
                  'UserGroupId' => 
                  array (
                    'description' => '用户组Id',
                    'type' => 'string',
                    'example' => 'TestUserGroupId',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"200\\",\\n  \\"RequestId\\": \\"0A13279A-5640-45E7-87AA-83750541AD0E\\",\\n  \\"ErrorMessage\\": \\"success\\",\\n  \\"Success\\": true,\\n  \\"Data\\": {\\n    \\"DeviceGroupId\\": \\"TestDeviceGroupId\\",\\n    \\"ControlId\\": \\"ni1iyxqry0j03plv\\",\\n    \\"ModifiedTime\\": \\"2020-05-12 17:12:37\\",\\n    \\"ControlType\\": \\"SYNC_INFO_PICTURE\\",\\n    \\"UserGroupId\\": \\"TestUserGroupId\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<RequestId>0A13279A-5640-45E7-87AA-83750541AD0E</RequestId>\\n<Data>\\n    <ModifiedTime>2020-05-12 17:12:37</ModifiedTime>\\n    <DeviceGroupId>TestDeviceGroupId</DeviceGroupId>\\n    <UserGroupId>TestUserGroupId</UserGroupId>\\n    <ControlType>SYNC_INFO_PICTURE</ControlType>\\n    <ControlId>ni1iyxqry0j03plv</ControlId>\\n</Data>\\n<ErrorMessage>success</ErrorMessage>\\n<Code>200</Code>\\n<Success>true</Success>","errorExample":""}]',
      'title' => '查询用户组、设备组人脸同步关系',
      'summary' => '查询用户组、设备组人脸同步关系。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'QueryFaceUserIdByCustomUserId' => 
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
      ),
      'systemTags' => 
      array (
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'IsolationId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '隔离Id',
            'type' => 'string',
            'required' => true,
            'example' => 'TestIsolationId',
          ),
        ),
        1 => 
        array (
          'name' => 'CustomUserId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '调用者系统中的用户Id',
            'type' => 'string',
            'required' => true,
            'example' => 'TestCustomUserId',
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
              'Code' => 
              array (
                'description' => '错误码',
                'type' => 'string',
                'example' => '200',
              ),
              'RequestId' => 
              array (
                'description' => '请求Id',
                'type' => 'string',
                'example' => '0A13279A-5640-45E7-87AA-83750541AD0E',
              ),
              'ErrorMessage' => 
              array (
                'description' => '错误描述',
                'type' => 'string',
                'example' => 'success',
              ),
              'Success' => 
              array (
                'description' => '接口调用是否成功',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Data' => 
              array (
                'description' => '接口返回值',
                'type' => 'object',
                'properties' => 
                array (
                  'Params' => 
                  array (
                    'description' => '用户参数',
                    'type' => 'string',
                    'example' => '{"age":28, "sex":"male"}',
                  ),
                  'CustomUserId' => 
                  array (
                    'description' => '调用者系统中的用户Id',
                    'type' => 'string',
                    'example' => 'TestCustomUserId',
                  ),
                  'Name' => 
                  array (
                    'description' => '用户名',
                    'type' => 'string',
                    'example' => 'TestName',
                  ),
                  'UserId' => 
                  array (
                    'description' => '用户Id',
                    'type' => 'string',
                    'example' => 'TestUserId',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"200\\",\\n  \\"RequestId\\": \\"0A13279A-5640-45E7-87AA-83750541AD0E\\",\\n  \\"ErrorMessage\\": \\"success\\",\\n  \\"Success\\": true,\\n  \\"Data\\": {\\n    \\"Params\\": \\"{\\\\\\"age\\\\\\":28, \\\\\\"sex\\\\\\":\\\\\\"male\\\\\\"}\\",\\n    \\"CustomUserId\\": \\"TestCustomUserId\\",\\n    \\"Name\\": \\"TestName\\",\\n    \\"UserId\\": \\"TestUserId\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<RequestId>0A13279A-5640-45E7-87AA-83750541AD0E</RequestId>\\n<Data>\\n    <UserId>TestUserId</UserId>\\n    <Params>{\\"age\\":28, \\"sex\\":\\"male\\"}</Params>\\n    <CustomUserId>TestCustomUserId</CustomUserId>\\n    <Name>TestName</Name>\\n</Data>\\n<ErrorMessage>success</ErrorMessage>\\n<Code>200</Code>\\n<Success>true</Success>","errorExample":""}]',
      'title' => '查询人脸底库同步服务中的用户ID',
      'summary' => '根据调用者系统中的用户Id查询人脸底库同步服务中的用户Id。',
    ),
    'QueryFaceAllUserGroup' => 
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
      ),
      'systemTags' => 
      array (
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'IsolationId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '隔离Id',
            'type' => 'string',
            'required' => true,
            'example' => 'TestIsolationId',
          ),
        ),
        1 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页大小',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'maximum' => '100',
            'minimum' => '1',
            'example' => '20',
          ),
        ),
        2 => 
        array (
          'name' => 'PageNo',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页号',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'maximum' => '1000',
            'minimum' => '1',
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
              'Code' => 
              array (
                'description' => '错误码',
                'type' => 'string',
                'example' => '200',
              ),
              'ErrorMessage' => 
              array (
                'description' => '错误描述',
                'type' => 'string',
                'example' => 'success',
              ),
              'RequestId' => 
              array (
                'description' => '请求Id',
                'type' => 'string',
                'example' => '0A13279A-5640-45E7-87AA-83750541AD0E',
              ),
              'Success' => 
              array (
                'description' => '是否成功',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Data' => 
              array (
                'description' => '接口返回值',
                'type' => 'object',
                'properties' => 
                array (
                  'PageNo' => 
                  array (
                    'description' => '分页号',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                  'PageSize' => 
                  array (
                    'description' => '分页大小',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '20',
                  ),
                  'Total' => 
                  array (
                    'description' => '用户组总数',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '100',
                  ),
                  'UserGroupList' => 
                  array (
                    'description' => '用户组信息列表',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'UserGroupName' => 
                        array (
                          'description' => '用户组名称',
                          'type' => 'string',
                          'example' => 'TestUserGroupName',
                        ),
                        'ModifiedTime' => 
                        array (
                          'description' => '最近修改时间',
                          'type' => 'string',
                          'example' => '2020-05-12 17:12:37',
                        ),
                        'UserGroupId' => 
                        array (
                          'description' => '用户组Id',
                          'type' => 'string',
                          'example' => 'dmjpxfdk',
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
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"200\\",\\n  \\"ErrorMessage\\": \\"success\\",\\n  \\"RequestId\\": \\"0A13279A-5640-45E7-87AA-83750541AD0E\\",\\n  \\"Success\\": true,\\n  \\"Data\\": {\\n    \\"PageNo\\": 1,\\n    \\"PageSize\\": 20,\\n    \\"Total\\": 100,\\n    \\"UserGroupList\\": [\\n      {\\n        \\"UserGroupName\\": \\"TestUserGroupName\\",\\n        \\"ModifiedTime\\": \\"2020-05-12 17:12:37\\",\\n        \\"UserGroupId\\": \\"dmjpxfdk\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<RequestId>0A13279A-5640-45E7-87AA-83750541AD0E</RequestId>\\n<Data>\\n    <PageSize>20</PageSize>\\n    <UserGroupList>\\n        <ModifiedTime>2020-05-12 17:12:37</ModifiedTime>\\n        <UserGroupName>TestUserGroupName</UserGroupName>\\n        <UserGroupId>dmjpxfdk</UserGroupId>\\n    </UserGroupList>\\n    <Total>100</Total>\\n    <PageNo>1</PageNo>\\n</Data>\\n<ErrorMessage>success</ErrorMessage>\\n<Code>200</Code>\\n<Success>true</Success>","errorExample":""}]',
      'title' => '查询所有用户分组',
      'summary' => '查询所有用户分组。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'QueryFaceAllUserIdsByGroupId' => 
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
      ),
      'systemTags' => 
      array (
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'IsolationId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '隔离Id',
            'type' => 'string',
            'required' => true,
            'example' => 'TestIsolationId',
          ),
        ),
        1 => 
        array (
          'name' => 'UserGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用户组Id',
            'type' => 'string',
            'required' => true,
            'example' => 'TestUserGroupId',
          ),
        ),
        2 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页大小',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'example' => '20',
          ),
        ),
        3 => 
        array (
          'name' => 'PageNo',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页号',
            'type' => 'integer',
            'format' => 'int32',
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
              'Code' => 
              array (
                'description' => '错误码',
                'type' => 'string',
                'example' => '200',
              ),
              'RequestId' => 
              array (
                'description' => '请求Id',
                'type' => 'string',
                'example' => '0A13279A-5640-45E7-87AA-83750541AD0E',
              ),
              'ErrorMessage' => 
              array (
                'description' => '错误描述',
                'type' => 'string',
                'example' => 'success',
              ),
              'Success' => 
              array (
                'description' => '是否成功',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Data' => 
              array (
                'description' => '接口返回值',
                'type' => 'object',
                'properties' => 
                array (
                  'PageSize' => 
                  array (
                    'description' => '分页大小',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '20',
                  ),
                  'Total' => 
                  array (
                    'description' => '用户总数',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '100',
                  ),
                  'Page' => 
                  array (
                    'description' => '分页号',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                  'List' => 
                  array (
                    'description' => '用户信息列表',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Params' => 
                        array (
                          'description' => '用户参数',
                          'type' => 'string',
                          'example' => '{"age":28, "sex":"male"}',
                        ),
                        'CustomUserId' => 
                        array (
                          'description' => '调用者服务中的用户Id',
                          'type' => 'string',
                          'example' => 'TestCustomUserId',
                        ),
                        'Name' => 
                        array (
                          'description' => '用户名',
                          'type' => 'string',
                          'example' => 'TestName',
                        ),
                        'UserId' => 
                        array (
                          'description' => '用户Id',
                          'type' => 'string',
                          'example' => 'TestUserId',
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
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"200\\",\\n  \\"RequestId\\": \\"0A13279A-5640-45E7-87AA-83750541AD0E\\",\\n  \\"ErrorMessage\\": \\"success\\",\\n  \\"Success\\": true,\\n  \\"Data\\": {\\n    \\"PageSize\\": 20,\\n    \\"Total\\": 100,\\n    \\"Page\\": 1,\\n    \\"List\\": [\\n      {\\n        \\"Params\\": \\"{\\\\\\"age\\\\\\":28, \\\\\\"sex\\\\\\":\\\\\\"male\\\\\\"}\\",\\n        \\"CustomUserId\\": \\"TestCustomUserId\\",\\n        \\"Name\\": \\"TestName\\",\\n        \\"UserId\\": \\"TestUserId\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<RequestId>0A13279A-5640-45E7-87AA-83750541AD0E</RequestId>\\n<Data>\\n    <PageSize>20</PageSize>\\n    <Total>100</Total>\\n    <Page>1</Page>\\n    <List>\\n        <Params>{\\"age\\":28, \\"sex\\":\\"male\\"}</Params>\\n        <CustomUserId>TestCustomUserId</CustomUserId>\\n        <UserId>TestUserId</UserId>\\n        <Name>TestName</Name>\\n    </List>\\n</Data>\\n<ErrorMessage>success</ErrorMessage>\\n<Code>200</Code>\\n<Success>true</Success>","errorExample":""}]',
      'title' => '查询用户组下的所有用户',
      'summary' => '查询用户组下的所有用户。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'QueryFaceCustomUserIdByUserId' => 
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
      ),
      'systemTags' => 
      array (
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'IsolationId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '隔离Id',
            'type' => 'string',
            'required' => true,
            'example' => 'TestIsolationId',
          ),
        ),
        1 => 
        array (
          'name' => 'UserId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用户Id',
            'type' => 'string',
            'required' => true,
            'example' => 'TestUserId',
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
              'Code' => 
              array (
                'description' => '错误码',
                'type' => 'string',
                'example' => '200',
              ),
              'Data' => 
              array (
                'description' => '调用者系统中的用户Id',
                'type' => 'string',
                'example' => 'TestCustomUserId',
              ),
              'ErrorMessage' => 
              array (
                'description' => '错误描述',
                'type' => 'string',
                'example' => 'success',
              ),
              'RequestId' => 
              array (
                'description' => '请求Id',
                'type' => 'string',
                'example' => '0A13279A-5640-45E7-87AA-83750541AD0E',
              ),
              'Success' => 
              array (
                'description' => '是否成功',
                'type' => 'boolean',
                'example' => 'true',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"200\\",\\n  \\"Data\\": \\"TestCustomUserId\\",\\n  \\"ErrorMessage\\": \\"success\\",\\n  \\"RequestId\\": \\"0A13279A-5640-45E7-87AA-83750541AD0E\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<RequestId>0A13279A-5640-45E7-87AA-83750541AD0E</RequestId>\\n<Data>TestCustomUserId</Data>\\n<ErrorMessage>success</ErrorMessage>\\n<Code>200</Code>\\n<Success>true</Success>","errorExample":""}]',
      'title' => '查询调用者服务中的用户 ID',
      'summary' => '根据人脸底库同步服务用户 ID 查询调用者服务中的用户 ID。',
    ),
    'QueryFaceUser' => 
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
      ),
      'systemTags' => 
      array (
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'IsolationId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '隔离Id',
            'type' => 'string',
            'required' => true,
            'example' => 'TestIsolationId',
          ),
        ),
        1 => 
        array (
          'name' => 'UserId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用户Id',
            'type' => 'string',
            'required' => true,
            'example' => 'TestUserId',
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
              'Code' => 
              array (
                'description' => '错误码',
                'type' => 'string',
                'example' => '200',
              ),
              'RequestId' => 
              array (
                'description' => '请求Id',
                'type' => 'string',
                'example' => '0A13279A-5640-45E7-87AA-83750541AD0E',
              ),
              'ErrorMessage' => 
              array (
                'description' => '错误描述',
                'type' => 'string',
                'example' => 'success',
              ),
              'Success' => 
              array (
                'description' => '接口调用是否成功',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Data' => 
              array (
                'description' => '接口返回值',
                'type' => 'object',
                'properties' => 
                array (
                  'Params' => 
                  array (
                    'description' => '用户参数',
                    'type' => 'string',
                    'example' => '{"age":28, "sex":"male"}',
                  ),
                  'CustomUserId' => 
                  array (
                    'description' => '调用者系统中的用户Id',
                    'type' => 'string',
                    'example' => 'TestCustomUserId',
                  ),
                  'Name' => 
                  array (
                    'description' => '用户名',
                    'type' => 'string',
                    'example' => 'TestName',
                  ),
                  'UserId' => 
                  array (
                    'description' => '用户Id',
                    'type' => 'string',
                    'example' => 'TestUserId',
                  ),
                  'FacePicList' => 
                  array (
                    'description' => '人脸照片信息列表',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'FaceUrl' => 
                        array (
                          'description' => '照片Url',
                          'type' => 'string',
                          'example' => 'https://test.com/xxx.jpg',
                        ),
                        'FaceMd5' => 
                        array (
                          'description' => '照片MD5值',
                          'type' => 'string',
                          'example' => 'TestFaceMd5',
                        ),
                        'FeatureDTOList' => 
                        array (
                          'description' => '人脸特征值列表',
                          'type' => 'array',
                          'items' => 
                          array (
                            'type' => 'object',
                            'properties' => 
                            array (
                              'AlgorithmName' => 
                              array (
                                'description' => '算法名',
                                'type' => 'string',
                                'example' => 'TestAlgorithmName',
                              ),
                              'AlgorithmVersion' => 
                              array (
                                'description' => '算法版本',
                                'type' => 'string',
                                'example' => 'TestAlgorithmVersion',
                              ),
                              'AlgorithmProvider' => 
                              array (
                                'description' => '算法提供者',
                                'type' => 'string',
                                'example' => 'TestAlgorithmProvider',
                              ),
                              'ErrorMessage' => 
                              array (
                                'description' => '错误描述',
                                'type' => 'string',
                                'example' => 'success',
                              ),
                              'ErrorCode' => 
                              array (
                                'description' => '错误码',
                                'type' => 'string',
                                'example' => '200',
                              ),
                              'FaceMd5' => 
                              array (
                                'description' => '人脸MD5
',
                                'type' => 'string',
                                'example' => 'TestFaceMd5',
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
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"200\\",\\n  \\"RequestId\\": \\"0A13279A-5640-45E7-87AA-83750541AD0E\\",\\n  \\"ErrorMessage\\": \\"success\\",\\n  \\"Success\\": true,\\n  \\"Data\\": {\\n    \\"Params\\": \\"{\\\\\\"age\\\\\\":28, \\\\\\"sex\\\\\\":\\\\\\"male\\\\\\"}\\",\\n    \\"CustomUserId\\": \\"TestCustomUserId\\",\\n    \\"Name\\": \\"TestName\\",\\n    \\"UserId\\": \\"TestUserId\\",\\n    \\"FacePicList\\": [\\n      {\\n        \\"FaceUrl\\": \\"https://test.com/xxx.jpg\\",\\n        \\"FaceMd5\\": \\"TestFaceMd5\\",\\n        \\"FeatureDTOList\\": [\\n          {\\n            \\"AlgorithmName\\": \\"TestAlgorithmName\\",\\n            \\"AlgorithmVersion\\": \\"TestAlgorithmVersion\\",\\n            \\"AlgorithmProvider\\": \\"TestAlgorithmProvider\\",\\n            \\"ErrorMessage\\": \\"success\\",\\n            \\"ErrorCode\\": \\"200\\",\\n            \\"FaceMd5\\": \\"TestFaceMd5\\"\\n          }\\n        ]\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<RequestId>0A13279A-5640-45E7-87AA-83750541AD0E</RequestId>\\n<Data>\\n    <UserId>TestUserId</UserId>\\n    <Params>{\\"age\\":28, \\"sex\\":\\"male\\"}</Params>\\n    <CustomUserId>TestCustomUserId</CustomUserId>\\n    <FacePicList>\\n        <FaceMd5>TestFaceMd5</FaceMd5>\\n        <FaceUrl>https://test.com/xxx.jpg</FaceUrl>\\n    </FacePicList>\\n    <FacePicList>\\n        <FeatureDTOList>\\n            <AlgorithmVersion>TestAlgorithmVersion</AlgorithmVersion>\\n            <ErrorCode>200</ErrorCode>\\n            <AlgorithmProvider>TestAlgorithmProvider</AlgorithmProvider>\\n            <ErrorMessage>success</ErrorMessage>\\n            <FaceMd5>TestFaceMd5</FaceMd5>\\n            <AlgorithmName>TestAlgorithmName</AlgorithmName>\\n        </FeatureDTOList>\\n    </FacePicList>\\n    <Name>TestName</Name>\\n</Data>\\n<ErrorMessage>success</ErrorMessage>\\n<Code>200</Code>\\n<Success>true</Success>","errorExample":""}]',
      'title' => '查询用户详细信息',
      'summary' => '查询用户详细信息。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'QueryFaceUserGroup' => 
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
      ),
      'systemTags' => 
      array (
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'IsolationId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '隔离Id',
            'type' => 'string',
            'required' => true,
            'example' => 'TestIsolationId',
          ),
        ),
        1 => 
        array (
          'name' => 'UserId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用户Id',
            'type' => 'string',
            'required' => true,
            'example' => 'TestUserId',
          ),
        ),
        2 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页大小',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'maximum' => '100',
            'minimum' => '1',
            'example' => '20',
          ),
        ),
        3 => 
        array (
          'name' => 'PageNo',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页号',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'maximum' => '100',
            'minimum' => '1',
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
              'Code' => 
              array (
                'description' => '错误码',
                'type' => 'string',
                'example' => '200',
              ),
              'ErrorMessage' => 
              array (
                'description' => '错误描述',
                'type' => 'string',
                'example' => 'success',
              ),
              'RequestId' => 
              array (
                'description' => '请求Id',
                'type' => 'string',
                'example' => '0A13279A-5640-45E7-87AA-83750541AD0E',
              ),
              'Success' => 
              array (
                'description' => '是否成功',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Data' => 
              array (
                'description' => '接口返回值',
                'type' => 'object',
                'properties' => 
                array (
                  'PageNo' => 
                  array (
                    'description' => '分页号',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                  'PageSize' => 
                  array (
                    'description' => '分页大小',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '20',
                  ),
                  'Total' => 
                  array (
                    'description' => '用户组总数',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '5',
                  ),
                  'UserGroupList' => 
                  array (
                    'description' => '用户组列表',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'UserGroupName' => 
                        array (
                          'description' => '用户组名称',
                          'type' => 'string',
                          'example' => 'TestUserGroupName',
                        ),
                        'ModifiedTime' => 
                        array (
                          'description' => '修改时间',
                          'type' => 'string',
                          'example' => '2020-05-12 17:12:37',
                        ),
                        'UserGroupId' => 
                        array (
                          'description' => '用户组Id',
                          'type' => 'string',
                          'example' => 'TestUserGroupId',
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
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"200\\",\\n  \\"ErrorMessage\\": \\"success\\",\\n  \\"RequestId\\": \\"0A13279A-5640-45E7-87AA-83750541AD0E\\",\\n  \\"Success\\": true,\\n  \\"Data\\": {\\n    \\"PageNo\\": 1,\\n    \\"PageSize\\": 20,\\n    \\"Total\\": 5,\\n    \\"UserGroupList\\": [\\n      {\\n        \\"UserGroupName\\": \\"TestUserGroupName\\",\\n        \\"ModifiedTime\\": \\"2020-05-12 17:12:37\\",\\n        \\"UserGroupId\\": \\"TestUserGroupId\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<RequestId>0A13279A-5640-45E7-87AA-83750541AD0E</RequestId>\\n<Data>\\n    <PageSize>20</PageSize>\\n    <UserGroupList>\\n        <ModifiedTime>2020-05-12 17:12:37</ModifiedTime>\\n        <UserGroupName>TestUserGroupName</UserGroupName>\\n        <UserGroupId>TestUserGroupId</UserGroupId>\\n    </UserGroupList>\\n    <Total>5</Total>\\n    <PageNo>1</PageNo>\\n</Data>\\n<ErrorMessage>success</ErrorMessage>\\n<Code>200</Code>\\n<Success>true</Success>","errorExample":""}]',
      'title' => '查询用户所在的用户组',
      'summary' => '查询用户所在的用户组。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'RemoveFaceUserFromUserGroup' => 
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
      ),
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'IsolationId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '隔离Id',
            'type' => 'string',
            'required' => true,
            'example' => 'TestIsolationId',
          ),
        ),
        1 => 
        array (
          'name' => 'UserId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用户Id',
            'type' => 'string',
            'required' => true,
            'example' => 'TestUserId',
          ),
        ),
        2 => 
        array (
          'name' => 'UserGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用户组Id',
            'type' => 'string',
            'required' => true,
            'example' => 'TestUserGroupId',
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
              'Code' => 
              array (
                'description' => '错误码',
                'type' => 'string',
                'example' => '200',
              ),
              'ErrorMessage' => 
              array (
                'description' => '错误描述',
                'type' => 'string',
                'example' => 'success',
              ),
              'RequestId' => 
              array (
                'description' => '请求Id',
                'type' => 'string',
                'example' => '0A13279A-5640-45E7-87AA-83750541AD0E',
              ),
              'Success' => 
              array (
                'description' => '是否成功',
                'type' => 'boolean',
                'example' => 'true',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"200\\",\\n  \\"ErrorMessage\\": \\"success\\",\\n  \\"RequestId\\": \\"0A13279A-5640-45E7-87AA-83750541AD0E\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<RequestId>0A13279A-5640-45E7-87AA-83750541AD0E</RequestId>\\n<ErrorMessage>success</ErrorMessage>\\n<Code>200</Code>\\n<Success>true</Success>","errorExample":""}]',
      'title' => '将用户从用户分组中移除',
      'summary' => '将用户从用户分组中移除。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'AddFaceUser' => 
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
      ),
      'systemTags' => 
      array (
        'operationType' => 'create',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'IsolationId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '业务隔离ID，用于同一个阿里云账号下不同业务应用之间的数据隔离，支持英文大小写字母、数字。

例如，您在A地区和B地区，均有人脸识别业务，那么可设置不同的业务隔离ID，区分A、B地区的人脸识别业务。

><notice>
请妥善保存业务隔离ID值，以便后续调用此业务隔离区其它接口时使用。
></notice>
',
            'type' => 'string',
            'required' => true,
            'example' => 'ZheJiangHZ',
          ),
        ),
        1 => 
        array (
          'name' => 'FacePicUrl',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用户的人脸图片URL下载地址，目前仅支持JPEG和JPG格式的图片，且图片URL不能包含中文。',
            'type' => 'string',
            'required' => true,
            'example' => 'https://example.com/test.jpeg',
          ),
        ),
        2 => 
        array (
          'name' => 'CustomUserId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用户身份识别ID，支持英文大写字母和数字。

建议您设置为该用户的身份证号、学号等。',
            'type' => 'string',
            'required' => true,
            'example' => '1234567890',
          ),
        ),
        3 => 
        array (
          'name' => 'Name',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用户名。支持中文、英文字母大小写、数字、下划线（_）和短划线（-），长度不超过64个字符。',
            'type' => 'string',
            'required' => false,
            'example' => 'Tony',
          ),
        ),
        4 => 
        array (
          'name' => 'Params',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用户参数，请自定义。',
            'type' => 'string',
            'required' => false,
            'example' => '{"key1":"value1", "key2":"value2"}',
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
              'Code' => 
              array (
                'description' => '接口返回码：
- **200**：表示成功。
- 其它：表示错误码。错误码详情，请参见[错误码](~~288314~~)。',
                'type' => 'string',
                'example' => '200',
              ),
              'RequestId' => 
              array (
                'description' => '阿里云为该请求生成的唯一标识符。',
                'type' => 'string',
                'example' => '0A13279A-5640-45E7-87AA-83750541AD0E',
              ),
              'ErrorMessage' => 
              array (
                'description' => '调用失败时，返回的出错信息。',
                'type' => 'string',
                'example' => 'face user already exist',
              ),
              'Success' => 
              array (
                'description' => '是否调用成功：
- **true**：表示调用成功。
- **false**：表示调用失败。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Data' => 
              array (
                'description' => '调用成功时，返回的数据。',
                'type' => 'object',
                'properties' => 
                array (
                  'Params' => 
                  array (
                    'description' => '自定义的用户参数。',
                    'type' => 'string',
                    'example' => '{"key1":"value1", "key2":"value2"}',
                  ),
                  'CustomUserId' => 
                  array (
                    'description' => '用户身份识别ID。',
                    'type' => 'string',
                    'example' => '1234567890',
                  ),
                  'Name' => 
                  array (
                    'description' => '用户名。',
                    'type' => 'string',
                    'example' => 'Tony',
                  ),
                  'UserId' => 
                  array (
                    'description' => '系统为本次添加的用户生成的ID。

> 在人脸底库服务的其它接口调用中，会使用**UserId**，请妥善保存。
',
                    'type' => 'string',
                    'example' => '3mtjaqebeq4d****',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"200\\",\\n  \\"RequestId\\": \\"0A13279A-5640-45E7-87AA-83750541AD0E\\",\\n  \\"ErrorMessage\\": \\"face user already exist\\",\\n  \\"Success\\": true,\\n  \\"Data\\": {\\n    \\"Params\\": \\"{\\\\\\"key1\\\\\\":\\\\\\"value1\\\\\\", \\\\\\"key2\\\\\\":\\\\\\"value2\\\\\\"}\\",\\n    \\"CustomUserId\\": \\"1234567890\\",\\n    \\"Name\\": \\"Tony\\",\\n    \\"UserId\\": \\"3mtjaqebeq4d****\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<AddFaceUserResponse>\\n    <RequestId>0A13279A-5640-45E7-87AA-83750541AD0E</RequestId>\\n    <Data>\\n        <UserId>3mtjaqebeq4d****</UserId>\\n        <CustomUserId>1234567890</CustomUserId>\\n        <Name>Tony</Name>\\n    </Data>\\n    <Code>200</Code>\\n    <Success>true</Success>\\n</AddFaceUserResponse>","errorExample":""}]',
      'title' => '向人脸管理服务添加一个用户',
      'summary' => '调用该接口向人脸底库添加一个用户。',
      'description' => '## 使用说明

- 单个阿里云账号调用该接口的每秒请求数（QPS）最大限制为100。

    > RAM用户共享阿里云账号配额。

- 请提前为用户的人脸图片，配置URL下载地址。

    > 当前仅支持JPEG和JPG格式的图片，且图片URL中不能包含中文。

- 调用该接口后，系统会返回用户ID（**UserId**），建议保存该值到本地，以便后续调用其它接口时使用。',
      'requestParamsDescription' => ' 调用API时，除了本文介绍的该API的特有请求参数，还需传入公共请求参数。公共请求参数说明，请参见[公共参数文档](~~288312~~)。',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'AddFaceUserGroupAndDeviceGroupRelation' => 
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
      ),
      'systemTags' => 
      array (
        'operationType' => 'create',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'IsolationId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '隔离Id',
            'type' => 'string',
            'required' => true,
            'example' => 'TestIsolationId',
          ),
        ),
        1 => 
        array (
          'name' => 'IotInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例Id',
            'type' => 'string',
            'required' => false,
            'example' => 'TestInstanceId',
          ),
        ),
        2 => 
        array (
          'name' => 'UserGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用户组Id',
            'type' => 'string',
            'required' => true,
            'example' => 'avjyxurd',
          ),
        ),
        3 => 
        array (
          'name' => 'DeviceGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '设备组Id',
            'type' => 'string',
            'required' => true,
            'example' => 'kvjyhurc',
          ),
        ),
        4 => 
        array (
          'name' => 'Relation',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '人脸同步关系',
            'type' => 'string',
            'required' => true,
            'example' => 'SYNC_INFO_PICTURE',
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
              'Code' => 
              array (
                'description' => '错误码',
                'type' => 'string',
                'example' => '200',
              ),
              'RequestId' => 
              array (
                'description' => '请求Id',
                'type' => 'string',
                'example' => '0A13279A-5640-45E7-87AA-83750541AD0E',
              ),
              'ErrorMessage' => 
              array (
                'description' => '错误描述',
                'type' => 'string',
                'example' => 'success',
              ),
              'Success' => 
              array (
                'description' => '是否成功',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Data' => 
              array (
                'description' => '人脸同步关系信息',
                'type' => 'object',
                'properties' => 
                array (
                  'ControlId' => 
                  array (
                    'description' => '关联控制Id',
                    'type' => 'string',
                    'example' => 'qcb2yea4ha4dxmly',
                  ),
                  'ModifiedTime' => 
                  array (
                    'description' => '修改时间',
                    'type' => 'string',
                    'example' => '2020-11-20 18:59:01',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"200\\",\\n  \\"RequestId\\": \\"0A13279A-5640-45E7-87AA-83750541AD0E\\",\\n  \\"ErrorMessage\\": \\"success\\",\\n  \\"Success\\": true,\\n  \\"Data\\": {\\n    \\"ControlId\\": \\"qcb2yea4ha4dxmly\\",\\n    \\"ModifiedTime\\": \\"2020-11-20 18:59:01\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<RequestId>0A13279A-5640-45E7-87AA-83750541AD0E</RequestId>\\n<Data>\\n    <ModifiedTime>2020-11-20 18:59:01</ModifiedTime>\\n    <ControlId>qcb2yea4ha4dxmly</ControlId>\\n</Data>\\n<ErrorMessage>success</ErrorMessage>\\n<Code>200</Code>\\n<Success>true</Success>","errorExample":""}]',
      'title' => '用户组、设备组添加人脸同步关系',
      'summary' => '用户组、设备组添加人脸同步关系。',
      'requestParamsDescription' => '1. IsolationId解释：用于租户下不同应用之间的数据隔离。如某用户在浙江、陕西都有业务，则可以为浙江和西安的业务分别创建两个隔离Id
2. IotInstanceId解释：物联网平台实例Id
',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'AddFaceUserPicture' => 
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
      ),
      'systemTags' => 
      array (
        'operationType' => 'create',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'IsolationId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '业务隔离ID，用于隔离同一个阿里云账号下不同业务应用之间的数据。请与调用[AddFaceUser](~~288338~~)接口添加用户时设置的**IsolationId**保持一致。',
            'type' => 'string',
            'required' => true,
            'example' => 'ZheJiangHZ',
          ),
        ),
        1 => 
        array (
          'name' => 'UserId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用户ID。请传入在调用[AddFaceUser](~~288338~~)接口添加用户后，获取并保存到本地的**UserId**值。',
            'type' => 'string',
            'required' => true,
            'example' => '3mtjaqebeq4d****',
          ),
        ),
        2 => 
        array (
          'name' => 'FacePicUrl',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用户的人脸图片URL下载地址，当前仅支持JPEG和JPG格式的图片，且图片URL中不能包含中文。',
            'type' => 'string',
            'required' => true,
            'example' => 'https://example.com/test.jpeg',
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
              'Code' => 
              array (
                'description' => '接口返回码：
- **200**：表示成功。
- 其它：表示错误码。错误码详情，请参见[错误码](~~288314~~)。',
                'type' => 'string',
                'example' => '200',
              ),
              'Data' => 
              array (
                'description' => '调用成功时，返回的用户人脸图片唯一标识符。

> 在人脸底库服务的其它接口调用中，会使用人脸图片唯一标识符，请妥善保存。',
                'type' => 'object',
                'example' => '1bb580ef7****',
              ),
              'ErrorMessage' => 
              array (
                'description' => '调用失败时，返回的出错信息。',
                'type' => 'string',
                'example' => 'face user not exist',
              ),
              'RequestId' => 
              array (
                'description' => '阿里云为该请求生成的唯一标识符。',
                'type' => 'string',
                'example' => '4de2c367-c1db-417c-aa15-8c585e595d92',
              ),
              'Success' => 
              array (
                'description' => '是否调用成功：
- **true**：表示调用成功。
- **false**：表示调用失败。',
                'type' => 'boolean',
                'example' => 'true',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"200\\",\\n  \\"Data\\": {\\n    \\"test\\": \\"test\\",\\n    \\"test2\\": 1\\n  },\\n  \\"ErrorMessage\\": \\"face user not exist\\",\\n  \\"RequestId\\": \\"4de2c367-c1db-417c-aa15-8c585e595d92\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<AddFaceUserPictureResponse>\\r\\n\\t<RequestId>4de2c367-c1db-417c-aa15-8c585e595d92</RequestId>\\r\\n\\t<Data>1bb580ef7****</Data>\\r\\n\\t<Code>200</Code>\\r\\n\\t<Success>true</Success>\\r\\n</AddFaceUserPictureResponse>","errorExample":""}]',
      'title' => 'AddFaceUserPicture',
      'summary' => '调用该接口，为人脸底库中的用户增加一张人脸图片。',
      'description' => '## 使用说明

- 单个阿里云账号调用该接口的每秒请求数（QPS）最大限制为100。

    > RAM用户共享阿里云账号配额。

- 请提前为用户的人脸图片，配置URL下载地址。

    > 当前仅支持JPEG和JPG格式的图片，且图片URL中不能包含中文。

- 调用该接口后，系统会返回用户人脸图片的唯一标识符（**Data**），建议保存该值到本地，以便后续调用其它接口时使用。',
      'requestParamsDescription' => '调用API时，除了本文介绍的该API的特有请求参数，还需传入公共请求参数。公共请求参数说明，请参见[公共参数文档](~~288312~~)。',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DeleteFaceUser' => 
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
      ),
      'systemTags' => 
      array (
        'operationType' => 'delete',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'IsolationId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '业务隔离Id',
            'type' => 'string',
            'required' => true,
            'example' => 'ZheJiangHzXiHu',
          ),
        ),
        1 => 
        array (
          'name' => 'UserId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '人脸服务内部用户唯一Id',
            'type' => 'string',
            'required' => true,
            'example' => '3mtjaqebeq4dulcy',
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
              'Code' => 
              array (
                'description' => '错误码',
                'type' => 'string',
                'example' => '200',
              ),
              'RequestId' => 
              array (
                'description' => '请求Id',
                'type' => 'string',
                'example' => '0A13279A-5640-45E7-87AA-83750541AD0E',
              ),
              'ErrorMessage' => 
              array (
                'description' => '错误码描述信息',
                'type' => 'string',
                'example' => 'success',
              ),
              'Success' => 
              array (
                'description' => '是否成功',
                'type' => 'boolean',
                'example' => 'true',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"200\\",\\n  \\"RequestId\\": \\"0A13279A-5640-45E7-87AA-83750541AD0E\\",\\n  \\"ErrorMessage\\": \\"success\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<RequestId>0A13279A-5640-45E7-87AA-83750541AD0E</RequestId>\\n<ErrorMessage>success</ErrorMessage>\\n<Code>200</Code>\\n<Success>true</Success>","errorExample":""}]',
      'title' => '向人脸管理服务删除一个用户',
      'summary' => '向人脸管理服务删除一个用户。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DeleteFaceUserGroupAndDeviceGroupRelation' => 
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
      ),
      'systemTags' => 
      array (
        'operationType' => 'delete',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'IsolationId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '业务隔离ID，用于隔离同一个阿里云账号下不同业务应用之间的数据。请与调用[AddFaceUserGroupAndDeviceGroupRelation](~~288342~~)接口，添加用户组与设备组之间的人脸同步关系时设置的**IsolationId**保持一致。',
            'type' => 'string',
            'required' => true,
            'example' => 'ZheJiangHZ',
          ),
        ),
        1 => 
        array (
          'name' => 'ControlId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用户组与设备组同步关系控制ID。请传入调用[AddFaceUserGroupAndDeviceGroupRelation](~~288342~~)接口，添加用户组与设备组之间的人脸同步关系时，获取并保存到本地的**ControlId**参数值。',
            'type' => 'string',
            'required' => true,
            'example' => 'qcb2yea4ha4d****',
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
              'Code' => 
              array (
                'description' => '接口返回码：
- **200**：表示成功。
- 其它：表示错误码。错误码详情，请参见[错误码](~~288314~~)。',
                'type' => 'string',
                'example' => '200',
              ),
              'RequestId' => 
              array (
                'description' => '阿里云为该请求生成的唯一标识符。',
                'type' => 'string',
                'example' => '0A13279A-5640-45E7-87AA-83750541AD0E',
              ),
              'ErrorMessage' => 
              array (
                'description' => '调用失败时，返回的出错信息。',
                'type' => 'string',
                'example' => 'access control not exist',
              ),
              'Success' => 
              array (
                'description' => '是否调用成功：
- **true**：表示调用成功。
- **false**：表示调用失败。',
                'type' => 'boolean',
                'example' => 'true',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"200\\",\\n  \\"RequestId\\": \\"0A13279A-5640-45E7-87AA-83750541AD0E\\",\\n  \\"ErrorMessage\\": \\"access control not exist\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<DeleteFaceUserGroupAndDeviceGroupRelationResponse>\\n\\t<RequestId>0A13279A-5640-45E7-87AA-83750541AD0E</RequestId>\\n\\t<Code>200</Code>\\n\\t<Success>true</Success>\\n</DeleteFaceUserGroupAndDeviceGroupRelationResponse>","errorExample":""}]',
      'title' => '删除用户组和设备组的人脸同步关系',
      'summary' => '调用该接口，删除用户组与设备组之间的人脸同步关系。',
      'description' => '## 限制条件
单个阿里云账号调用该接口的每秒请求数（QPS）最大限制为100。
    > RAM用户共享阿里云账号配额。',
      'requestParamsDescription' => ' 调用API时，除了本文介绍的该API的特有请求参数，还需传入公共请求参数。公共请求参数说明，请参见[公共参数文档](~~288312~~)。',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DeleteFaceUserPicture' => 
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
      ),
      'systemTags' => 
      array (
        'operationType' => 'delete',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'IsolationId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '业务隔离ID，用于隔离同一个阿里云账号下不同业务应用之间的数据。请与调用[AddFaceUser](~~288338~~)接口添加用户时设置的**IsolationId**保持一致。',
            'type' => 'string',
            'required' => true,
            'example' => 'ZheJiangHZ',
          ),
        ),
        1 => 
        array (
          'name' => 'UserId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用户ID。请传入在调用[AddFaceUser](~~288338~~)接口添加用户后，获取并保存到本地的**UserId**值。',
            'type' => 'string',
            'required' => true,
            'example' => '3mtjaqebeq4d****',
          ),
        ),
        2 => 
        array (
          'name' => 'FacePicMd5',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用户人脸图片的唯一标识符。请传入在调用[AddFaceUserPicutre](~~312040~~)接口为用户添加人脸图片后，获取并保存到本地的**Data**值。',
            'type' => 'string',
            'required' => true,
            'example' => '1bb580ef7****',
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
              'Code' => 
              array (
                'description' => '接口返回码：
- **200**：表示成功。
- 其它：表示错误码。错误码详情，请参见[错误码](~~288314~~)。',
                'type' => 'string',
                'example' => '200',
              ),
              'RequestId' => 
              array (
                'description' => '阿里云为该请求生成的唯一标识符。',
                'type' => 'string',
                'example' => '4de2c367-c1db-417c-aa15-8c585e595d92',
              ),
              'ErrorMessage' => 
              array (
                'description' => '调用失败时，返回的出错信息。',
                'type' => 'string',
                'example' => 'face user not exist',
              ),
              'Success' => 
              array (
                'description' => '是否调用成功：
- **true**：表示调用成功。
- **false**：表示调用失败。',
                'type' => 'boolean',
                'example' => 'true',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"200\\",\\n  \\"RequestId\\": \\"4de2c367-c1db-417c-aa15-8c585e595d92\\",\\n  \\"ErrorMessage\\": \\"face user not exist\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<DeleteFaceUserPictureResponse>\\r\\n\\t<RequestId>4de2c367-c1db-417c-aa15-8c585e595d92</RequestId>\\r\\n\\t<Code>200</Code>\\r\\n\\t<Success>true</Success>\\r\\n</DeleteFaceUserPictureResponse>","errorExample":""}]',
      'title' => 'DeleteFaceUserPicture',
      'summary' => '调用该接口，从人脸底库的用户中删除指定的人脸图片。',
      'description' => '## 限制条件
单个阿里云账号调用该接口的每秒请求数（QPS）最大限制为100。
    > RAM用户共享阿里云账号配额。',
      'requestParamsDescription' => ' 调用API时，除了本文介绍的该API的特有请求参数，还需传入公共请求参数。公共请求参数说明，请参见[公共参数文档](~~288312~~)。',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'CheckFaceUserDoExistOnDevice' => 
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
      ),
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'IsolationId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '隔离Id',
            'type' => 'string',
            'required' => true,
            'example' => 'a103lZ86ovStDMnU',
          ),
        ),
        1 => 
        array (
          'name' => 'IotInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '隔离Id',
            'type' => 'string',
            'required' => false,
            'example' => 'TestIotInstanceId',
          ),
        ),
        2 => 
        array (
          'name' => 'UserId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用户Id',
            'type' => 'string',
            'required' => true,
            'example' => 'tibce3fsgqelezk8',
          ),
        ),
        3 => 
        array (
          'name' => 'ProductKey',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '物联网平台产品Key',
            'type' => 'string',
            'required' => true,
            'example' => 'a1654Sr4Y3f',
          ),
        ),
        4 => 
        array (
          'name' => 'DeviceName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '设备名称',
            'type' => 'string',
            'required' => true,
            'example' => 'TestDeviceName',
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
              'Code' => 
              array (
                'description' => '错误码',
                'type' => 'string',
                'example' => '200',
              ),
              'ErrorMessage' => 
              array (
                'description' => '错误信息',
                'type' => 'string',
                'example' => 'success',
              ),
              'RequestId' => 
              array (
                'description' => '请求Id',
                'type' => 'string',
                'example' => '0A13279A-5640-45E7-87AA-83750541AD0E',
              ),
              'Success' => 
              array (
                'description' => '是否成功',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Data' => 
              array (
                'description' => '检查返回信息',
                'type' => 'object',
                'properties' => 
                array (
                  'DoExist' => 
                  array (
                    'description' => '指定用户是否人脸同步成功',
                    'type' => 'boolean',
                    'example' => 'true',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"200\\",\\n  \\"ErrorMessage\\": \\"success\\",\\n  \\"RequestId\\": \\"0A13279A-5640-45E7-87AA-83750541AD0E\\",\\n  \\"Success\\": true,\\n  \\"Data\\": {\\n    \\"DoExist\\": true\\n  }\\n}","errorExample":""},{"type":"xml","example":"<RequestId>0A13279A-5640-45E7-87AA-83750541AD0E</RequestId>\\n<Data>\\n    <DoExist>true</DoExist>\\n</Data>\\n<ErrorMessage>success</ErrorMessage>\\n<Code>200</Code>\\n<Success>true</Success>","errorExample":""}]',
      'title' => '检查指定用户是否在设备上同步人脸成功',
      'summary' => '检查指定用户是否在设备上同步人脸成功。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ClearFaceDeviceDB' => 
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
      ),
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'IsolationId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '业务隔离ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'ZheJiangHZ',
          ),
        ),
        1 => 
        array (
          'name' => 'IotInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。

您可在物联网平台控制台的**实例概览**页面，查看当前实例的**ID**。若有ID值，必须传入该ID值，否则调用会失败。

> 如果公共实例没有ID值，请参见[如何获取实例ID](~~267533~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'iot_instc_pu****_c*-v64********',
          ),
        ),
        2 => 
        array (
          'name' => 'ProductKey',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'V系列边缘一体机对应的设备所属产品唯一标识。在边缘计算控制台V系列边缘一体机的**主机详情**页面**基本信息**页签，找到**视频网关**信息，获取**ProductKey**值。',
            'type' => 'string',
            'required' => true,
            'example' => 'a1Wmy******',
          ),
        ),
        3 => 
        array (
          'name' => 'DeviceName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'V系列边缘一体机对应的设备名称。在边缘计算控制台V系列边缘一体机的**主机详情**页面**基本信息**页签，找到**视频网关**信息，获取**DeviceName**值。',
            'type' => 'string',
            'required' => true,
            'example' => 'TestDevice_1',
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
              'Code' => 
              array (
                'description' => '接口返回码：
- **200**：表示成功。
- 其它：表示错误码。错误码详情，请参见[错误码](~~288314~~)。',
                'type' => 'string',
                'example' => '200',
              ),
              'Data' => 
              array (
                'description' => '调用成功时，返回空值，表示该V系列边缘一体机指定隔离ID下的人脸底库已清空。',
                'type' => 'object',
                'example' => '""',
              ),
              'ErrorMessage' => 
              array (
                'description' => '调用失败时，返回的出错信息。',
                'type' => 'string',
                'example' => 'device not found',
              ),
              'RequestId' => 
              array (
                'description' => '阿里云为该请求生成的唯一标识符。',
                'type' => 'string',
                'example' => '0A13279A-5640-45E7-87AA-83750541AD0E',
              ),
              'Success' => 
              array (
                'description' => '是否调用成功：
- **true**：表示调用成功。
- **false**：表示调用失败。',
                'type' => 'boolean',
                'example' => 'true',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"200\\",\\n  \\"Data\\": \\"\\",\\n  \\"ErrorMessage\\": \\"device not found\\",\\n  \\"RequestId\\": \\"0A13279A-5640-45E7-87AA-83750541AD0E\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<ClearFaceDeviceDBResponse>\\r\\n\\t<RequestId>0A13279A-5640-45E7-87AA-83750541AD0E</RequestId>\\r\\n\\t<Data/>\\r\\n\\t<Code>200</Code>\\r\\n\\t<Success>true</Success>\\r\\n</ClearFaceDeviceDBResponse>","errorExample":""}]',
      'title' => '清空设备人脸库',
      'summary' => '调用该接口，清空V系列边缘一体机的指定业务隔离ID下所有人脸底库。',
      'description' => '## 限制条件
单个阿里云账号调用该接口的每秒请求数（QPS）最大限制为100。
    > RAM用户共享阿里云账号配额。',
      'requestParamsDescription' => ' 调用API时，除了本文介绍的该API的特有请求参数，还需传入公共请求参数。公共请求参数说明，请参见[公共参数文档](~~288312~~)。',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DetectUserFaceByUrl' => 
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
      ),
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'FacePicUrl',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '待检测的图片URL，目前仅支持JPEG格式的图片。',
            'type' => 'string',
            'required' => true,
            'example' => 'http://xxx.xxx.com/xxx/face/1.jpg',
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
              'Code' => 
              array (
                'description' => '调用失败时，返回的错误码。更多信息，请参见[错误码](~~145071~~)。',
                'type' => 'string',
                'example' => '200',
              ),
              'ErrorMessage' => 
              array (
                'description' => '调用失败时，返回的出错信息。',
                'type' => 'string',
                'example' => 'can not find this face',
              ),
              'RequestId' => 
              array (
                'description' => '阿里云为该请求生成的唯一标识符。',
                'type' => 'string',
                'example' => 'df554760-7ccd-11eb-9a25-8f6d8670ef61',
              ),
              'Success' => 
              array (
                'description' => '是否调用成功：
- **true**：调用成功。
- **false**：调用失败。
',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Data' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'data' => 
                  array (
                    'description' => '响应结果。
> 仅当存在人脸数据时才会返回Data。

',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'BlurScore' => 
                        array (
                          'description' => '人脸模糊度得分。得分的取值范围为0~1。
> 数值越高表示人脸图片质量越高。',
                          'type' => 'number',
                          'format' => 'float',
                          'example' => '0.795382022857666',
                        ),
                        'Gender' => 
                        array (
                          'description' => '检测图片中人脸的性别：
- 0：未知
- 1：男性
- 2：女性',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '1',
                        ),
                        'OcclusionScore' => 
                        array (
                          'description' => '人脸遮挡得分。得分的取值范围为0~1。
> 数值越高表示人脸图片质量越高。',
                          'type' => 'number',
                          'format' => 'float',
                          'example' => '0.9867380261421204',
                        ),
                        'GoodForLibrary' => 
                        array (
                          'description' => '是否适合收录入人脸底库：
- ture：适合
- false：不适合',
                          'type' => 'boolean',
                          'example' => 'true',
                        ),
                        'GoodForRecognition' => 
                        array (
                          'description' => '是否适合用于人脸检测：

- true：适合
- false：不适合

> 若值为false，建议更换原图片，重新调用该接口。否则可能引起人脸识别结果不准确。',
                          'type' => 'boolean',
                          'example' => 'true',
                        ),
                        'Age' => 
                        array (
                          'description' => '人脸的年龄。

> 0表示未检测到人脸的年龄。
',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '20',
                        ),
                        'FaceProbability' => 
                        array (
                          'description' => '图片是人脸的概率。
> 数值越高表示图片是人脸的概率越高。',
                          'type' => 'number',
                          'format' => 'float',
                          'example' => '0.9999769926071167',
                        ),
                        'PoseScore' => 
                        array (
                          'description' => '人脸角度得分。得分的取值范围为0~1。

> 数值越高表示人脸图片质量越高。',
                          'type' => 'number',
                          'format' => 'float',
                          'example' => '0.9167874261423875',
                        ),
                        'FaceRects' => 
                        array (
                          'type' => 'object',
                          'properties' => 
                          array (
                            'FaceRectsData' => 
                            array (
                              'type' => 'array',
                              'items' => 
                              array (
                                'description' => '人脸在图片中位置的人脸矩形框。返回值依次是`left, top, width, height`，是原图的相对值。

例如，原图为100*200像素，那么：

- `[left*100，top*200]`：表示人脸矩形框左上角的绝对坐标。
- `width*100`：表示人脸矩形框的宽度。
- `height*200`：表示人脸矩形框的高度。',
                                'type' => 'string',
                                'example' => '0.2045450061559677,0.04829550161957741,0.6136360168457031, 0.8153409957885742',
                              ),
                            ),
                          ),
                        ),
                        'Landmarks' => 
                        array (
                          'type' => 'object',
                          'properties' => 
                          array (
                            'LandmarksData' => 
                            array (
                              'type' => 'array',
                              'items' => 
                              array (
                                'description' => '通过人脸特征提取算法，提取到的长度为512的特征向量。',
                                'type' => 'string',
                                'example' => '[-0.06833600252866745,0.0014270000392571092,             -0.003713000100106001, 0.06218799948692322,......,0.1001330018043518           ]',
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
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"200\\",\\n  \\"ErrorMessage\\": \\"can not find this face\\",\\n  \\"RequestId\\": \\"df554760-7ccd-11eb-9a25-8f6d8670ef61\\",\\n  \\"Success\\": true,\\n  \\"Data\\": {\\n    \\"data\\": [\\n      {\\n        \\"BlurScore\\": 0.795382022857666,\\n        \\"Gender\\": 1,\\n        \\"OcclusionScore\\": 0.9867380261421204,\\n        \\"GoodForLibrary\\": true,\\n        \\"GoodForRecognition\\": true,\\n        \\"Age\\": 20,\\n        \\"FaceProbability\\": 0.9999769926071167,\\n        \\"PoseScore\\": 0.9167874261423875,\\n        \\"FaceRects\\": {\\n          \\"FaceRectsData\\": [\\n            \\"0.2045450061559677,0.04829550161957741,0.6136360168457031, 0.8153409957885742\\"\\n          ]\\n        },\\n        \\"Landmarks\\": {\\n          \\"LandmarksData\\": [\\n            \\"[-0.06833600252866745,0.0014270000392571092,             -0.003713000100106001, 0.06218799948692322,......,0.1001330018043518           ]\\"\\n          ]\\n        }\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DetectUserFaceByUrlResponse>\\n<RequestId>df554760-7ccd-11eb-9a25-8f6d8670ef61</RequestId>\\n<Data>\\n    <data>\\n        <GoodForRecognition>true</GoodForRecognition>\\n        <GoodForLibrary>true</GoodForLibrary>\\n        <PoseScore>0.9167874261423875</PoseScore>\\n        <OcclusionScore>0.9867380261421204</OcclusionScore>\\n        <Gender>1</Gender>\\n        <BlurScore>0.795382022857666</BlurScore>\\n        <Age>20</Age>\\n        <FaceProbability>0.9999769926071167</FaceProbability>\\n        <FaceRects>\\n            <FaceRectsData>0.2045450061559677,0.04829550161957741,0.6136360168457031, 0.8153409957885742</FaceRectsData>\\n        </FaceRects>\\n        <Landmarks>\\n            <LandmarksData>[-0.06833600252866745,0.0014270000392571092,-0.003713000100106001, 0.06218799948692322,......,0.1001330018043518]</LandmarksData>\\n        </Landmarks>\\n    </data>\\n</Data>\\n<Code>200</Code>\\n<Success>true</Success>\\n</DetectUserFaceByUrlResponse>","errorExample":""}]',
      'title' => 'DetectUserFaceByUrl',
      'summary' => '调用该接口检测人脸。',
      'requestParamsDescription' => '调用API时，除了本文介绍的该API的特有请求参数，还需传入公共请求参数。公共请求参数说明，请参见[公共参数](~~141505~~)文档。
',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'CreatePictureSearchApp' => 
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
      ),
      'systemTags' => 
      array (
        'operationType' => 'create',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Name',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '以图搜图应用实例的名称。 

支持中文汉字、英文大小写字母、数字、下划线（_）和短划线（-），长度不超过64个字符，一个汉字算2个字符。',
            'type' => 'string',
            'required' => true,
            'example' => '以图搜图',
          ),
        ),
        1 => 
        array (
          'name' => 'Desc',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '以图搜图应用实例的描述信息。

支持中文汉字、英文大小写字母、数字、下划线（_）和短划线（-），长度不超过1024个字符，一个汉字算2个字符。',
            'type' => 'string',
            'required' => true,
            'example' => '以图搜图Demo',
          ),
        ),
        2 => 
        array (
          'name' => 'IotInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。

您可在物联网平台控制台的**实例概览**页面，查看当前实例的**ID**。若有ID值，必须传入该ID值，否则调用会失败。

> 如果公共实例没有ID值，请参见[如何获取实例ID](~~267533~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'iot_instc_pu****_c*-v64********',
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
              'Code' => 
              array (
                'description' => '接口返回码：
- **200**：表示成功。
- 其它：表示错误码。错误码详情，请参见[错误码](~~288314~~)。',
                'type' => 'string',
                'example' => '200',
              ),
              'Data' => 
              array (
                'description' => '以图搜图应用实例ID。',
                'type' => 'string',
                'example' => '5a502d3fbab8410e8fd4be9037c7****',
              ),
              'ErrorMessage' => 
              array (
                'description' => '调用失败时，返回的出错信息。',
                'type' => 'string',
                'example' => 'Name is mandatory for this action.',
              ),
              'RequestId' => 
              array (
                'description' => '阿里云为该请求生成的唯一标识符。',
                'type' => 'string',
                'example' => '3A754C90-1286-4C2C-A3BA-8BF5BAD4BF76',
              ),
              'Success' => 
              array (
                'description' => '是否调用成功：
- **true**：调用成功。
- **false**：调用失败。
',
                'type' => 'boolean',
                'example' => 'true',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"200\\",\\n  \\"Data\\": \\"5a502d3fbab8410e8fd4be9037c7****\\",\\n  \\"ErrorMessage\\": \\"Name is mandatory for this action.\\",\\n  \\"RequestId\\": \\"3A754C90-1286-4C2C-A3BA-8BF5BAD4BF76\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<CreatePictureSearchAppResponse>\\n<RequestId>3A754C90-1286-4C2C-A3BA-8BF5BAD4BF76</RequestId>\\n<Data>5a502d3fbab8410e8fd4be9037c7****</Data>\\n<Code>200</Code>\\n<Success>true</Success>\\n</CreatePictureSearchAppResponse>","errorExample":""}]',
      'title' => 'CreatePictureSearchApp',
      'summary' => '调用该接口创建以图搜图应用实例。',
      'description' => '## 限制条件
单个阿里云账号调用该接口的每秒请求数（QPS）最大限制为100。
    > RAM用户共享阿里云账号配额。',
      'requestParamsDescription' => '调用API时，除了本文介绍的该API的特有请求参数，还需传入公共请求参数。公共请求参数说明，请参见[公共参数文档](~~288312~~)。',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'CreatePictureSearchJob' => 
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
      ),
      'systemTags' => 
      array (
        'operationType' => 'create',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'AppInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '以图搜图应用实例ID。可调用[QueryPictureSearchApps](~~206608~~)查询。',
            'type' => 'string',
            'required' => true,
            'example' => '3e429560124b44b685095df81a27****',
          ),
        ),
        1 => 
        array (
          'name' => 'SearchPicUrl',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '待检索图片的地址。',
            'type' => 'string',
            'required' => true,
            'example' => 'http://xxx.xxx/1.jpg',
          ),
        ),
        2 => 
        array (
          'name' => 'StartTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '检索范围起始时间，格式为13位时间戳，单位为毫秒。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'maximum' => '9999999999999',
            'minimum' => '0',
            'example' => '1614227915000',
          ),
        ),
        3 => 
        array (
          'name' => 'EndTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '检索范围结束时间，格式为13位时间戳，单位为毫秒。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'maximum' => '9999999999999',
            'minimum' => '0',
            'example' => '1614327915000',
          ),
        ),
        4 => 
        array (
          'name' => 'Threshold',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '人脸检索阈值。取值范围为0~1。

为保证检索结果的准确性，推荐设置该参数在0.3~0.6之间。',
            'type' => 'number',
            'format' => 'float',
            'required' => true,
            'example' => '0.5',
          ),
        ),
        5 => 
        array (
          'name' => 'BodyThreshold',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '人体检索阈值。取值范围为0~1。

为保证检索结果的准确性，推荐设置该参数大于等于0.8。若不设置，则取值为Threshold参数的值。',
            'type' => 'number',
            'format' => 'float',
            'required' => false,
            'maximum' => '1',
            'minimum' => '0',
            'example' => '0.9',
            'default' => '0.8',
          ),
        ),
        6 => 
        array (
          'name' => 'PictureSearchType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '检索类型：

- 1：人脸
- 0：人体

默认为1。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '10',
            'minimum' => '0',
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
              'Code' => 
              array (
                'description' => '调用失败时，返回的错误码。更多信息，请参见[错误码](~~145071~~)。
',
                'type' => 'string',
                'example' => '200',
              ),
              'Data' => 
              array (
                'description' => '以图搜图任务ID。',
                'type' => 'string',
                'example' => '71632df011294a85910c566e7181****',
              ),
              'ErrorMessage' => 
              array (
                'description' => '调用失败时，返回的出错信息。',
                'type' => 'string',
                'example' => 'The request has failed due to a temporary failure of the server.',
              ),
              'RequestId' => 
              array (
                'description' => '阿里云为该请求生成的唯一标识符。
',
                'type' => 'string',
                'example' => 'FAEBE068-07DE-4B88-AC2A-51FC2B556211',
              ),
              'Success' => 
              array (
                'description' => '是否调用成功：
- **true**：调用成功。
- **false**：调用失败。
',
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
            'errorCode' => 'Forbidden.RiskControl',
            'errorMessage' => 'Your account is at risk. Contact customer support for more details.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"200\\",\\n  \\"Data\\": \\"71632df011294a85910c566e7181****\\",\\n  \\"ErrorMessage\\": \\"The request has failed due to a temporary failure of the server.\\",\\n  \\"RequestId\\": \\"FAEBE068-07DE-4B88-AC2A-51FC2B556211\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<CreatePictureSearchJobResponse>\\n<RequestId>DB14A78C-6F64-40D0-8C03-46E8D57A8FC8</RequestId>\\n<Data>71632df011294a85910c566e7181****</Data>\\n<Code>200</Code>\\n<Success>true</Success>\\n</CreatePictureSearchJobResponse>","errorExample":""}]',
      'title' => '创建图片搜索作业',
      'summary' => '调用该接口创建一体化以图搜图任务。',
      'description' => '一体化以图搜图，指在搜图时，同时检索人脸和人体特征。
> 该功能需要在V系列边缘一体机上部署人脸和人体检测算法。',
      'requestParamsDescription' => '调用API时，除了本文介绍的该API的特有请求参数，还需传入公共请求参数。公共请求参数说明，请参见[公共参数](~~141505~~)文档。',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'UpdatePictureSearchApp' => 
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
      ),
      'systemTags' => 
      array (
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'AppInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '以图搜图应用实例ID。可调用[QueryPictureSearchApps](206608)查询。',
            'type' => 'string',
            'required' => true,
            'example' => '3e429560124b44b685095df81a27****',
          ),
        ),
        1 => 
        array (
          'name' => 'Name',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '以图搜图应用实例的名称。 

支持中文汉字、英文大小写、数字、下划线（_）和短划线（-），不超过64个字符（一个中文汉字算2个字符）。
',
            'type' => 'string',
            'required' => true,
            'example' => '新以图搜图',
          ),
        ),
        2 => 
        array (
          'name' => 'Description',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '以图搜图应用实例的描述信息。

支持中文汉字、英文大小写、数字、下划线（_）和短划线（-），不超过1024个字符（一个中文汉字算2个字符）。',
            'type' => 'string',
            'required' => true,
            'example' => '以图搜图Demo2',
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
              'Code' => 
              array (
                'description' => '调用失败时，返回的错误码。更多信息，请参见[错误码](~~145071~~)。
',
                'type' => 'string',
                'example' => '200',
              ),
              'ErrorMessage' => 
              array (
                'description' => '调用失败时，返回的出错信息。',
                'type' => 'string',
                'example' => 'Description is mandatory for this action.',
              ),
              'RequestId' => 
              array (
                'description' => '阿里云为该请求生成的唯一标识符。',
                'type' => 'string',
                'example' => 'CC6B9D69-627C-4C9D-AEAA-0BC08AB6DBED',
              ),
              'Success' => 
              array (
                'description' => '是否调用成功：
- **true**：调用成功。
- **false**：调用失败。
',
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
            'errorCode' => 'Forbidden.RiskControl',
            'errorMessage' => 'Your account is at risk. Contact customer support for more details.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"200\\",\\n  \\"ErrorMessage\\": \\"Description is mandatory for this action.\\",\\n  \\"RequestId\\": \\"CC6B9D69-627C-4C9D-AEAA-0BC08AB6DBED\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<UpdatePictureSearchAppResponse>\\n<RequestId>CC6B9D69-627C-4C9D-AEAA-0BC08AB6DBED</RequestId>\\n<Code>200</Code>\\n<Success>true</Success>\\n</UpdatePictureSearchAppResponse>","errorExample":""}]',
      'title' => '升级图片搜索应用',
      'summary' => '调用该接口修改以图搜图应用实例的信息。',
      'requestParamsDescription' => '调用API时，除了本文介绍的该API的特有请求参数，还需传入公共请求参数。公共请求参数说明，请参见[公共参数](~~141505~~)文档。',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'QueryPictureSearchAiboxes' => 
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
      ),
      'systemTags' => 
      array (
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'AppInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '以图搜图应用实例ID。可调用[QueryPictureSearchApps](~~206608~~)接口查询。',
            'type' => 'string',
            'required' => true,
            'example' => '5a502d3fbab8410e8fd4be9037c7****',
          ),
        ),
        1 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '返回结果中，每页显示的记录数量。最大取值30，最小取值1，默认取值为10。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'maximum' => '50',
            'minimum' => '1',
            'example' => '10',
          ),
        ),
        2 => 
        array (
          'name' => 'CurrentPage',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定从返回结果中的第几页开始显示。最小取值为1。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'maximum' => '100',
            'minimum' => '1',
            'example' => '1',
          ),
        ),
        3 => 
        array (
          'name' => 'IotInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。

您可在物联网平台控制台的**实例概览**页面，查看您的实例ID。

> 如果公共实例没有ID，请参见[如何获取实例ID](~~267533~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'iot_instc_pu****_c*-v64********',
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
              'Code' => 
              array (
                'description' => '接口返回码：
- **200**：表示成功。
- 其它：表示错误码。错误码详情，请参见[错误码](~~288314~~)。',
                'type' => 'string',
                'example' => '200',
              ),
              'ErrorMessage' => 
              array (
                'description' => '调用失败时，返回的出错信息。',
                'type' => 'string',
                'example' => 'Specified parameter CurrentPage is not valid.',
              ),
              'RequestId' => 
              array (
                'description' => '阿里云为该请求生成的唯一标识符。',
                'type' => 'string',
                'example' => 'DF7DC571-FE48-4C25-8BE0-B13C3038C85B',
              ),
              'Success' => 
              array (
                'description' => '是否调用成功：
- **true**：表示调用成功。
- **false**：表示调用失败。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Data' => 
              array (
                'description' => '调用成功时，返回的数据。',
                'type' => 'object',
                'properties' => 
                array (
                  'CurrentPage' => 
                  array (
                    'description' => '当前页码。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                  'PageSize' => 
                  array (
                    'description' => '返回结果中每页显示的记录数量。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '10',
                  ),
                  'Total' => 
                  array (
                    'description' => '总记录条数。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                  'PageCount' => 
                  array (
                    'description' => '总页数。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                  'PageData' => 
                  array (
                    'description' => 'V系列边缘一体机列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'NickName' => 
                        array (
                          'description' => 'V系列边缘一体机对应的设备别名。',
                          'type' => 'string',
                          'example' => 'box015',
                        ),
                        'IotId' => 
                        array (
                          'description' => 'V系列边缘一体机对应的设备ID。',
                          'type' => 'string',
                          'example' => 'VrJwPGjC1sJlqPjZA3cxg4****',
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
            'errorCode' => 'Forbidden.RiskControl',
            'errorMessage' => 'Your account is at risk. Contact customer support for more details.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"200\\",\\n  \\"ErrorMessage\\": \\"Specified parameter CurrentPage is not valid.\\",\\n  \\"RequestId\\": \\"DF7DC571-FE48-4C25-8BE0-B13C3038C85B\\",\\n  \\"Success\\": true,\\n  \\"Data\\": {\\n    \\"CurrentPage\\": 1,\\n    \\"PageSize\\": 10,\\n    \\"Total\\": 1,\\n    \\"PageCount\\": 1,\\n    \\"PageData\\": [\\n      {\\n        \\"NickName\\": \\"box015\\",\\n        \\"IotId\\": \\"VrJwPGjC1sJlqPjZA3cxg4****\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<QueryPictureSearchAiboxesResponse>\\r\\n  <RequestId>DF7DC571-FE48-4C25-8BE0-B13C3038C85B</RequestId>\\r\\n  <Data>\\r\\n        <PageSize>10</PageSize>\\r\\n        <PageCount>1</PageCount>\\r\\n        <CurrentPage>1</CurrentPage>\\r\\n        <Total>1</Total>\\r\\n        <PageData>\\r\\n              <IotId>VrJwPGjC1sJlqPjZA3cxg4****</IotId>\\r\\n              <NickName>camera1</NickName>\\r\\n        </PageData>\\r\\n  </Data>\\r\\n  <Code>200</Code>\\r\\n  <Success>true</Success>\\r\\n</QueryPictureSearchAiboxesResponse>","errorExample":""}]',
      'title' => '查询图片搜索',
      'summary' => '调用该接口，查询以图搜图应用实例绑定的V系列边缘一体机列表。',
      'requestParamsDescription' => '调用API时，除了本文介绍的该API的特有请求参数，还需传入公共请求参数。公共请求参数说明，请参见[公共参数文档](~~288312~~)。',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'QueryPictureSearchApps' => 
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
      ),
      'systemTags' => 
      array (
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '返回结果中，每页显示的记录数量。最大取值50，最小取值1，默认取值为20。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'maximum' => '20',
            'minimum' => '1',
            'example' => '20',
          ),
        ),
        1 => 
        array (
          'name' => 'CurrentPage',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定从返回结果中的第几页开始显示。最小取值为1。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'maximum' => '10000',
            'minimum' => '1',
            'example' => '1',
          ),
        ),
        2 => 
        array (
          'name' => 'IotInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。

您可在物联网平台控制台的**实例概览**页面，查看当前实例的**ID**。若有ID值，必须传入该ID值，否则调用会失败。

> 如果公共实例没有ID值，请参见[如何获取实例ID](~~267533~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'iot_instc_pu****_c*-v64********',
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
              'Code' => 
              array (
                'description' => '接口返回码：
- **200**：表示成功。
- 其它：表示错误码。错误码详情，请参见[错误码](~~288314~~)。',
                'type' => 'string',
                'example' => '200',
              ),
              'ErrorMessage' => 
              array (
                'description' => '调用失败时，返回的出错信息。',
                'type' => 'string',
                'example' => 'Specified parameter CurrentPage is not valid.',
              ),
              'RequestId' => 
              array (
                'description' => '阿里云为该请求生成的唯一标识符。',
                'type' => 'string',
                'example' => '2C794BB1-0494-4E4E-AACF-174F04CD1F10',
              ),
              'Success' => 
              array (
                'description' => '是否调用成功：
- **true**：调用成功。
- **false**：调用失败。
',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Data' => 
              array (
                'description' => '调用成功时，返回的数据。',
                'type' => 'object',
                'properties' => 
                array (
                  'CurrentPage' => 
                  array (
                    'description' => ' 当前页码。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                  'PageSize' => 
                  array (
                    'description' => '返回结果中，每页显示的记录数量。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '20',
                  ),
                  'Total' => 
                  array (
                    'description' => '已创建的以图搜图应用实例总数量。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '2',
                  ),
                  'PageCount' => 
                  array (
                    'description' => '总页数。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                  'PageData' => 
                  array (
                    'description' => '以图搜图应用实例列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'AppInstanceId' => 
                        array (
                          'description' => '以图搜图应用实例ID。',
                          'type' => 'string',
                          'example' => '3e429560124b44b685095df81a27****',
                        ),
                        'ModifiedTime' => 
                        array (
                          'description' => '修改以图搜图应用实例的13位时间戳，单位为毫秒。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1614328081000',
                        ),
                        'Description' => 
                        array (
                          'description' => '以图搜图应用实例的描述信息。',
                          'type' => 'string',
                          'example' => '以图搜图Demo2',
                        ),
                        'Version' => 
                        array (
                          'description' => '以图搜图应用实例模板的版本号。',
                          'type' => 'string',
                          'example' => '1.0.0',
                        ),
                        'CreateTime' => 
                        array (
                          'description' => '创建以图搜图应用实例的13位时间戳，单位为毫秒。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1614327915000',
                        ),
                        'AppTemplateId' => 
                        array (
                          'description' => '以图搜图应用实例模板ID。',
                          'type' => 'string',
                          'example' => '7b50e7acb2574a789226099300cc****',
                        ),
                        'Name' => 
                        array (
                          'description' => '以图搜图应用实例的名称。',
                          'type' => 'string',
                          'example' => '新以图搜图',
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
            'errorCode' => 'Forbidden.RiskControl',
            'errorMessage' => 'Your account is at risk. Contact customer support for more details.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"200\\",\\n  \\"ErrorMessage\\": \\"Specified parameter CurrentPage is not valid.\\",\\n  \\"RequestId\\": \\"2C794BB1-0494-4E4E-AACF-174F04CD1F10\\",\\n  \\"Success\\": true,\\n  \\"Data\\": {\\n    \\"CurrentPage\\": 1,\\n    \\"PageSize\\": 20,\\n    \\"Total\\": 2,\\n    \\"PageCount\\": 1,\\n    \\"PageData\\": [\\n      {\\n        \\"AppInstanceId\\": \\"3e429560124b44b685095df81a27****\\",\\n        \\"ModifiedTime\\": 1614328081000,\\n        \\"Description\\": \\"以图搜图Demo2\\",\\n        \\"Version\\": \\"1.0.0\\",\\n        \\"CreateTime\\": 1614327915000,\\n        \\"AppTemplateId\\": \\"7b50e7acb2574a789226099300cc****\\",\\n        \\"Name\\": \\"新以图搜图\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<QueryPictureSearchAppsResponse>\\n<RequestId>2C794BB1-0494-4E4E-AACF-174F04CD1F10</RequestId>\\n<Data>\\n    <PageCount>1</PageCount>\\n    <PageSize>20</PageSize>\\n    <PageData>\\n        <AppTemplateId>7b50e7acb2574a789226099300cc****</AppTemplateId>\\n        <AppInstanceId>5a502d3fbab8410e8fd4be9037c7****</AppInstanceId>\\n        <Description>1</Description>\\n        <ModifiedTime>1614325136000</ModifiedTime>\\n        <Version>1.0.0</Version>\\n        <CreateTime>1614325136000</CreateTime>\\n        <Name>11</Name>\\n    </PageData>\\n    <PageData>\\n        <AppTemplateId>7b50e7acb2574a789226099300cc****</AppTemplateId>\\n        <AppInstanceId>3e429560124b44b685095df81a27****</AppInstanceId>\\n        <Description>以图搜图Demo2</Description>\\n        <ModifiedTime>1614328081000</ModifiedTime>\\n        <Version>1.0.0</Version>\\n        <CreateTime>1614327915000</CreateTime>\\n        <Name>新以图搜图</Name>\\n    </PageData>\\n    <CurrentPage>1</CurrentPage>\\n    <Total>2</Total>\\n</Data>\\n<Code>200</Code>\\n<Success>true</Success>\\n</QueryPictureSearchAppsResponse>","errorExample":""}]',
      'title' => 'QueryPictureSearchApps',
      'summary' => '调用该接口，查询已创建的以图搜图应用实例列表。',
      'description' => '## 限制条件
单个阿里云账号调用该接口的每秒请求数（QPS）最大限制为100。
    > RAM用户共享阿里云账号配额。',
      'requestParamsDescription' => '调用API时，除了本文介绍的该API的特有请求参数，还需传入公共请求参数。公共请求参数说明，请参见[公共参数文档](~~288312~~)。',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'QueryPictureSearchDevices' => 
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
      ),
      'systemTags' => 
      array (
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'AppInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '以图搜图应用实例ID。可调用[QueryPictureSearchApps](~~206608~~)查询。',
            'type' => 'string',
            'required' => true,
            'example' => '5a502d3fbab8410e8fd4be9037c7****',
          ),
        ),
        1 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '每页显示的条数。最小值为1，最大值为50，默认值为10。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'maximum' => '20',
            'example' => '10',
          ),
        ),
        2 => 
        array (
          'name' => 'CurrentPage',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定从返回结果中的第几页开始显示。页数从1开始排序。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'minimum' => '1',
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
              'Code' => 
              array (
                'description' => '调用失败时，返回的错误码。更多信息，请参见[错误码](~~145071~~)。',
                'type' => 'string',
                'example' => '200',
              ),
              'ErrorMessage' => 
              array (
                'description' => '调用失败时，返回的出错信息。',
                'type' => 'string',
                'example' => 'Specified parameter CurrentPage is not valid.',
              ),
              'RequestId' => 
              array (
                'description' => '阿里云为该请求生成的唯一标识符。',
                'type' => 'string',
                'example' => 'DF7DC571-FE48-4C25-8BE0-B13C3038C85B',
              ),
              'Success' => 
              array (
                'description' => '是否调用成功：
- **true**：调用成功。
- **false**：调用失败。
',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Data' => 
              array (
                'description' => '响应结果。',
                'type' => 'object',
                'properties' => 
                array (
                  'CurrentPage' => 
                  array (
                    'description' => ' 当前页面号。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                  'PageSize' => 
                  array (
                    'description' => '返回结果中每页显示的记录数量。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '10',
                  ),
                  'Total' => 
                  array (
                    'description' => '总条数。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                  'PageCount' => 
                  array (
                    'description' => '总页数。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                  'PageData' => 
                  array (
                    'description' => '应用列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'NickName' => 
                        array (
                          'description' => '设备别名。

> 仅IPC设备会返回此参数。
',
                          'type' => 'string',
                          'example' => 'camera1',
                        ),
                        'IotId' => 
                        array (
                          'description' => '设备ID。
',
                          'type' => 'string',
                          'example' => 'VrJwPGjC1sJlqPjZA3cxg4****',
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
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"200\\",\\n  \\"ErrorMessage\\": \\"Specified parameter CurrentPage is not valid.\\",\\n  \\"RequestId\\": \\"DF7DC571-FE48-4C25-8BE0-B13C3038C85B\\",\\n  \\"Success\\": true,\\n  \\"Data\\": {\\n    \\"CurrentPage\\": 1,\\n    \\"PageSize\\": 10,\\n    \\"Total\\": 1,\\n    \\"PageCount\\": 1,\\n    \\"PageData\\": [\\n      {\\n        \\"NickName\\": \\"camera1\\",\\n        \\"IotId\\": \\"VrJwPGjC1sJlqPjZA3cxg4****\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<QueryPictureSearchDevicesResponse>\\n<RequestId>DF7DC571-FE48-4C25-8BE0-B13C3038C85B</RequestId>\\n<Data>\\n    <PageCount>1</PageCount>\\n    <PageSize>1</PageSize>\\n    <PageData>\\n        <IotId>VrJwPGjC1sJlqPjZA3cxg4****</IotId>\\n        <NickName>camera1</NickName>\\n    </PageData>\\n    <CurrentPage>1</CurrentPage>\\n    <Total>1</Total>\\n</Data>\\n<Code>200</Code>\\n<Success>true</Success>\\n</QueryPictureSearchDevicesResponse>","errorExample":""}]',
      'title' => '查询图片搜索设备',
      'summary' => '调用该接口，查询以图搜图应用实例绑定的设备列表。',
      'requestParamsDescription' => '调用API时，除了本文介绍的该API的特有请求参数，还需传入公共请求参数。公共请求参数说明，请参见[公共参数](~~141505~~)文档。',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'QueryPictureSearchJob' => 
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
      ),
      'systemTags' => 
      array (
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'AppInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '以图搜图应用实例ID。可调用[QueryPictureSearchApps](~~206608~~)查询。',
            'type' => 'string',
            'required' => true,
            'example' => 'fdc576d03c094faea9fa10fbf48c****',
          ),
        ),
        1 => 
        array (
          'name' => 'JobStatus',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '任务状态：
- 0：初始化
- 1：无数据
- 2：运行中
- 3：运行成功
- 4：运行失败

若不设置此参数，表示选择所有状态。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '10',
            'minimum' => '0',
            'example' => '3',
          ),
        ),
        2 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '每页显示的条数。最小值为1，最大值为50，默认值为10。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'maximum' => '20',
            'minimum' => '1',
            'example' => '10',
          ),
        ),
        3 => 
        array (
          'name' => 'CurrentPage',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定从返回结果中的第几页开始显示。页数从1开始排序。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'maximum' => '10000',
            'minimum' => '1',
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
              'Code' => 
              array (
                'description' => '调用失败时，返回的错误码。更多信息，请参见[错误码](~~145071~~)。',
                'type' => 'string',
                'example' => '200',
              ),
              'ErrorMessage' => 
              array (
                'description' => '调用失败时，返回的出错信息。',
                'type' => 'string',
                'example' => 'Specified access key is not found.',
              ),
              'RequestId' => 
              array (
                'description' => '阿里云为该请求生成的唯一标识符。',
                'type' => 'string',
                'example' => '8FAF4001-2A53-46DF-B83E-306B8070E131',
              ),
              'Success' => 
              array (
                'description' => '是否调用成功：
- **true**：调用成功。
- **false**：调用失败。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Data' => 
              array (
                'description' => '响应结果。',
                'type' => 'object',
                'properties' => 
                array (
                  'CurrentPage' => 
                  array (
                    'description' => '当前页面号。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                  'PageSize' => 
                  array (
                    'description' => '每页显示的条数。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '10',
                  ),
                  'Total' => 
                  array (
                    'description' => '总条数。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '2',
                  ),
                  'PageCount' => 
                  array (
                    'description' => '总页数。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                  'PageData' => 
                  array (
                    'description' => '应用列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'EndTime' => 
                        array (
                          'description' => '检索范围结束时间，格式为13位时间戳，单位为毫秒。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1614850763692',
                        ),
                        'StartTime' => 
                        array (
                          'description' => '检索范围起始时间，格式为13位时间戳，单位为毫秒。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1614814763692',
                        ),
                        'JobStatus' => 
                        array (
                          'description' => '任务状态：
- 0：初始化
- 1：无数据
- 2：运行中
- 3：运行成功
- 4：运行失败',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '3',
                        ),
                        'SearchPicUrl' => 
                        array (
                          'description' => '检索的图片地址。',
                          'type' => 'string',
                          'example' => 'http://xxx.xxx.com/1.jpg',
                        ),
                        'CreateTime' => 
                        array (
                          'description' => '创建以图搜图任务的时间，格式为13位时间戳，单位为毫秒。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1614850763000',
                        ),
                        'JobId' => 
                        array (
                          'description' => '以图搜图任务ID。',
                          'type' => 'string',
                          'example' => 'b3786935a71442efae014c7b2212****',
                        ),
                        'Threshold' => 
                        array (
                          'description' => '检索相似度。',
                          'type' => 'number',
                          'format' => 'float',
                          'example' => '0.5',
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
            'errorCode' => 'Forbidden.RiskControl',
            'errorMessage' => 'Your account is at risk. Contact customer support for more details.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"200\\",\\n  \\"ErrorMessage\\": \\"Specified access key is not found.\\",\\n  \\"RequestId\\": \\"8FAF4001-2A53-46DF-B83E-306B8070E131\\",\\n  \\"Success\\": true,\\n  \\"Data\\": {\\n    \\"CurrentPage\\": 1,\\n    \\"PageSize\\": 10,\\n    \\"Total\\": 2,\\n    \\"PageCount\\": 1,\\n    \\"PageData\\": [\\n      {\\n        \\"EndTime\\": 1614850763692,\\n        \\"StartTime\\": 1614814763692,\\n        \\"JobStatus\\": 3,\\n        \\"SearchPicUrl\\": \\"http://xxx.xxx.com/1.jpg\\",\\n        \\"CreateTime\\": 1614850763000,\\n        \\"JobId\\": \\"b3786935a71442efae014c7b2212****\\",\\n        \\"Threshold\\": 0.5\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<QueryPictureSearchJobResponse>\\n<RequestId>8FAF4001-2A53-46DF-B83E-306B8070E131</RequestId>\\n<Data>\\n    <PageSize>10</PageSize>\\n    <PageCount>1</PageCount>\\n    <CurrentPage>1</CurrentPage>\\n    <Total>1</Total>\\n    <PageData>\\n        <JobStatus>3</JobStatus>\\n        <EndTime>1614850763692</EndTime>\\n        <CreateTime>1614850763000</CreateTime>\\n        <StartTime>1614814763692</StartTime>\\n        <SearchPicUrl>http://xxx.xxx.com/1.jpg</SearchPicUrl>\\n        <JobId>b3786935a71442efae014c7b2212****</JobId>\\n        <Threshold>0.5</Threshold>\\n    </PageData>\\n</Data>\\n<Code>200</Code>\\n<Success>true</Success>\\n</QueryPictureSearchJobResponse>","errorExample":""}]',
      'title' => '查询图片搜索作业',
      'summary' => '调用该接口，查询一体化以图搜图任务列表。',
      'description' => '一体化以图搜图，表示搜图时，同时检索人脸和人体。
> 该功能需要在V系列边缘一体机上部署人脸和人体检测算法。',
      'requestParamsDescription' => '调用API时，除了本文介绍的该API的特有请求参数，还需传入公共请求参数。公共请求参数说明，请参见[公共参数](~~141505~~)文档。',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'QueryPictureSearchJobResult' => 
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
      ),
      'systemTags' => 
      array (
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'AppInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '以图搜图应用实例ID。可调用[QueryPictureSearchApps](~~206608~~)查询。',
            'type' => 'string',
            'required' => true,
            'example' => 'fdc576d03c094faea9fa10fbf48c****',
          ),
        ),
        1 => 
        array (
          'name' => 'JobId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '一体化以图搜图任务ID。可调用[QueryPictureSearchJob](~~206778~~)查询。',
            'type' => 'string',
            'required' => true,
            'example' => 'b7e501d0d2524a4caeb50df3282a****',
          ),
        ),
        2 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '每页显示的条数。最小值为1，最大值为50，默认值为10。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'maximum' => '20',
            'minimum' => '1',
            'example' => '10',
          ),
        ),
        3 => 
        array (
          'name' => 'CurrentPage',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定从返回结果中的第几页开始显示。页数从1开始排序。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'maximum' => '10000',
            'minimum' => '1',
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
              'Code' => 
              array (
                'description' => '调用失败时，返回的错误码。更多信息，请参见[错误码](~~145071~~)。',
                'type' => 'string',
                'example' => '200',
              ),
              'ErrorMessage' => 
              array (
                'description' => '调用失败时，返回的出错信息。',
                'type' => 'string',
                'example' => 'AppInstanceId is mandatory for this action.',
              ),
              'RequestId' => 
              array (
                'description' => '阿里云为该请求生成的唯一标识符。',
                'type' => 'string',
                'example' => 'a06c4750-7cce-11eb-8010-557d50136505',
              ),
              'Success' => 
              array (
                'description' => '是否调用成功：
- **true**：调用成功。
- **false**：调用失败。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Data' => 
              array (
                'description' => '响应结果。',
                'type' => 'object',
                'properties' => 
                array (
                  'CurrentPage' => 
                  array (
                    'description' => '当前页面号。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                  'PageSize' => 
                  array (
                    'description' => '每页显示的条数。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '10',
                  ),
                  'Total' => 
                  array (
                    'description' => '总条数。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                  'PageCount' => 
                  array (
                    'description' => '总页数。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                  'PageData' => 
                  array (
                    'description' => '查询结果。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'PicUrl' => 
                        array (
                          'description' => '待检索图片的地址。',
                          'type' => 'string',
                          'example' => 'https://xxx.xxx.xxx.com/xxx',
                        ),
                        'EventTime' => 
                        array (
                          'description' => '创建事件的时间，格式为毫秒级的13位时间戳，单位为毫秒。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1614333155075',
                        ),
                        'GatewayIotId' => 
                        array (
                          'description' => 'V系列边缘一体机的IotId。',
                          'type' => 'string',
                          'example' => 'pZJUqijOyfpFOOGNPF7S00****',
                        ),
                        'VectorId' => 
                        array (
                          'description' => '图片特征ID。',
                          'type' => 'string',
                          'example' => 'vectorId86d9a5c32b9947278e526c2eef8a****',
                        ),
                        'DeviceNickName' => 
                        array (
                          'description' => '设备别名。

> 若设备未设置设备别名，则不返回此参数。
',
                          'type' => 'string',
                          'example' => 'camera1',
                        ),
                        'Threshold' => 
                        array (
                          'description' => '人脸相似度。',
                          'type' => 'number',
                          'format' => 'float',
                          'example' => '0.5',
                        ),
                        'IotId' => 
                        array (
                          'description' => '查询的设备的IotId。',
                          'type' => 'string',
                          'example' => '5RUngwC1RknD4lPiHgH300****',
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
            'errorCode' => 'Forbidden.RiskControl',
            'errorMessage' => 'Your account is at risk. Contact customer support for more details.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"200\\",\\n  \\"ErrorMessage\\": \\"AppInstanceId is mandatory for this action.\\",\\n  \\"RequestId\\": \\"a06c4750-7cce-11eb-8010-557d50136505\\",\\n  \\"Success\\": true,\\n  \\"Data\\": {\\n    \\"CurrentPage\\": 1,\\n    \\"PageSize\\": 10,\\n    \\"Total\\": 1,\\n    \\"PageCount\\": 1,\\n    \\"PageData\\": [\\n      {\\n        \\"PicUrl\\": \\"https://xxx.xxx.xxx.com/xxx\\",\\n        \\"EventTime\\": 1614333155075,\\n        \\"GatewayIotId\\": \\"pZJUqijOyfpFOOGNPF7S00****\\",\\n        \\"VectorId\\": \\"vectorId86d9a5c32b9947278e526c2eef8a****\\",\\n        \\"DeviceNickName\\": \\"camera1\\",\\n        \\"Threshold\\": 0.5,\\n        \\"IotId\\": \\"5RUngwC1RknD4lPiHgH300****\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<QueryPictureSearchJobResultResponse>\\n<RequestId>a06c4750-7cce-11eb-8010-557d50136505</RequestId>\\n<Data>\\n    <PageSize>10</PageSize>\\n    <PageCount>1</PageCount>\\n    <CurrentPage>1</CurrentPage>\\n    <Total>1</Total>\\n    <PageData>\\n        <IotId>5RUngwC1RknD4lPiHgH300****</IotId>\\n        <EventTime>1614333155075</EventTime>\\n        <DeviceNickName>camera1</DeviceNickName>\\n        <GatewayIotId>pZJUqijOyfpFOOGNPF7S00****</GatewayIotId>\\n        <PicUrl>https://xxx.xxx.xxx.com/xxx</PicUrl>\\n        <Threshold>0.5</Threshold>\\n        <VectorId>vectorId86d9a5c32b9947278e526c2eef8a****</VectorId>\\n    </PageData>\\n</Data>\\n<Code>200</Code>\\n<Success>true</Success>\\n</QueryPictureSearchJobResultResponse>","errorExample":""}]',
      'title' => '查询图片搜索作业结果',
      'summary' => '调用该接口，查询一体化以图搜图任务的图片检索结果。',
      'requestParamsDescription' => '调用API时，除了本文介绍的该API的特有请求参数，还需传入公共请求参数。公共请求参数说明，请参见[公共参数](~~141505~~)文档。',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'GetPictureSearchJobStatus' => 
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
      ),
      'systemTags' => 
      array (
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'AppInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '以图搜图应用实例ID。可调用[QueryPictureSearchApps](~~206608~~)查询。',
            'type' => 'string',
            'required' => true,
            'example' => '892f97c9518548469d319d955d98****',
          ),
        ),
        1 => 
        array (
          'name' => 'JobId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '以图搜图任务ID。可调用[QueryPictureSearchJob](~~206778~~)查询。',
            'type' => 'string',
            'required' => true,
            'example' => 'b3786935a71442efae014c7b2212****',
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
              'Code' => 
              array (
                'description' => '调用失败时，返回的错误码。更多信息，请参见[错误码](~~145071~~)。',
                'type' => 'string',
                'example' => '200',
              ),
              'ErrorMessage' => 
              array (
                'description' => '调用失败时，返回的出错信息。',
                'type' => 'string',
                'example' => 'Specified access key is not found.',
              ),
              'RequestId' => 
              array (
                'description' => '阿里云为该请求生成的唯一标识符。',
                'type' => 'string',
                'example' => '2c7def10-7cce-11eb-8e79-959f4f722f76',
              ),
              'Success' => 
              array (
                'description' => '是否调用成功：
- **true**：调用成功。
- **false**：调用失败。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Data' => 
              array (
                'description' => '响应结果。',
                'type' => 'object',
                'properties' => 
                array (
                  'EndTime' => 
                  array (
                    'description' => '检索范围结束时间。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1614850763692',
                  ),
                  'StartTime' => 
                  array (
                    'description' => '检索范围起始时间，格式为13位时间戳，单位为毫秒。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1614814763692',
                  ),
                  'JobStatus' => 
                  array (
                    'description' => '任务状态：
- 0：初始化
- 1：无数据
- 2：运行中
- 3：运行成功
- 4：运行失败',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '3',
                  ),
                  'SearchPicUrl' => 
                  array (
                    'description' => '检索图片的地址。',
                    'type' => 'string',
                    'example' => 'http://XXX.XXX.com/1.jpg',
                  ),
                  'CreateTime' => 
                  array (
                    'description' => '创建以图搜图任务的时间。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1614850763000',
                  ),
                  'JobId' => 
                  array (
                    'description' => '以图搜图任务ID。',
                    'type' => 'string',
                    'example' => 'b3786935a71442efae014c7b2212****',
                  ),
                  'Threshold' => 
                  array (
                    'description' => '检索相似度。',
                    'type' => 'number',
                    'format' => 'float',
                    'example' => '0.5',
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
            'errorCode' => 'Forbidden.RiskControl',
            'errorMessage' => 'Your account is at risk. Contact customer support for more details.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"200\\",\\n  \\"ErrorMessage\\": \\"Specified access key is not found.\\",\\n  \\"RequestId\\": \\"2c7def10-7cce-11eb-8e79-959f4f722f76\\",\\n  \\"Success\\": true,\\n  \\"Data\\": {\\n    \\"EndTime\\": 1614850763692,\\n    \\"StartTime\\": 1614814763692,\\n    \\"JobStatus\\": 3,\\n    \\"SearchPicUrl\\": \\"http://XXX.XXX.com/1.jpg\\",\\n    \\"CreateTime\\": 1614850763000,\\n    \\"JobId\\": \\"b3786935a71442efae014c7b2212****\\",\\n    \\"Threshold\\": 0.5\\n  }\\n}","errorExample":""},{"type":"xml","example":"<GetPictureSearchJobStatusResponse>\\n<RequestId>2c7def10-7cce-11eb-8e79-959f4f722f76</RequestId>\\n<Data>\\n    <JobStatus>3</JobStatus>\\n    <EndTime>1614850763692</EndTime>\\n    <CreateTime>1614850763000</CreateTime>\\n    <StartTime>1614814763692</StartTime>\\n    <SearchPicUrl>http://XXX.XXX.com/1.jpg</SearchPicUrl>\\n    <JobId>b3786935a71442efae014c7b2212****</JobId>\\n    <Threshold>0.5</Threshold>\\n</Data>\\n<Code>200</Code>\\n<Success>true</Success>\\n</GetPictureSearchJobStatusResponse>\\n","errorExample":""}]',
      'title' => '获取图片搜索任务状态',
      'summary' => '调用该接口获取一体化以图搜图任务的状态。',
      'description' => '一体化以图搜图，表示搜图时，同时检索人脸和人体特征。

> 该功能需要在V系列边缘一体机上部署人脸和人体检测算法。',
      'requestParamsDescription' => '调用API时，除了本文介绍的该API的特有请求参数，还需传入公共请求参数。公共请求参数说明，请参见[公共参数](~~141505~~)文档。',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'QueryPictureFiles' => 
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
      ),
      'systemTags' => 
      array (
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ProductKey',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'IPC设备所属产品的ProductKey。
您可以在物联网平台控制台**产品**页查看或调用[QueryProductList](~~69271~~)查看当前账号下所有产品的信息。
><notice> 如果传入该参数，需同时传入**DeviceName**。
></notice>',
            'type' => 'string',
            'required' => false,
            'example' => 'a1BwAGV****',
          ),
        ),
        1 => 
        array (
          'name' => 'DeviceName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'IPC设备的设备名称。
您可以在物联网平台控制台的**设备**页查看**DeviceName**。
><notice> 如果传入该参数，需同时传入**ProductKey**。
></notice>',
            'type' => 'string',
            'required' => false,
            'example' => 'camera1',
          ),
        ),
        2 => 
        array (
          'name' => 'IotId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'IPC设备的设备ID。物联网平台为该设备颁发的ID，设备的唯一标识符。可调用物联网平台[QueryDeviceDetail](~~69594~~)查询。

><notice> 如果传入该参数，则无需传入**ProductKey**和**DeviceName**。**IotId**作为设备唯一标识符，和**ProductKey**与**DeviceName**的组合是一一对应的关系。如果您同时传入**IotId**和**ProductKey**与**DeviceName**的组合，则以**IotId**为准。
></notice>',
            'type' => 'string',
            'required' => false,
            'example' => 'zLZyi6aOLyOSHa9hsPyD00****',
          ),
        ),
        3 => 
        array (
          'name' => 'BeginTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '检索范围起始时间，格式为13位时间戳，单位为毫秒。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'example' => '1615357669000',
          ),
        ),
        4 => 
        array (
          'name' => 'EndTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '检索范围结束时间，格式为13位时间戳，单位为毫秒。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'example' => '1615444063000',
          ),
        ),
        5 => 
        array (
          'name' => 'CurrentPage',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定从返回结果中的第几页开始显示。页数从1开始排序。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        6 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '每页显示的条数。默认值为10，最大值为50。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '10',
          ),
        ),
        7 => 
        array (
          'name' => 'PictureType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '图片类型：

- **0**：缩略图。 
- **1**：原图。
- **2**（默认）：全部。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '2',
          ),
        ),
        8 => 
        array (
          'name' => 'PictureSource',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '图片来源：

- **0**（默认）：全部事件。
- **1**：告警事件抓图。
- **2**：主动抓图。
- **3**：其他。
- **4**：云端截图。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '0',
          ),
        ),
        9 => 
        array (
          'name' => 'IotInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。您可在物联网平台控制台的**实例概览**页面，查看当前实例的**ID**。

><notice>
- 若有ID值，必须传入该ID值，否则调用会失败。
- 若无<props="intl"><ph>**实例概览**页面或</ph></props>ID值，则无需传入。

></notice>

实例的更多信息，请参见[实例概述](~~356505~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'iot-cn-n6w1y****',
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
              'Code' => 
              array (
                'description' => '接口返回码：

- **200**：表示成功。
- 其它：表示错误码。错误码详情，请参见[错误码](~~145071~~)。',
                'type' => 'string',
                'example' => '200',
              ),
              'RequestId' => 
              array (
                'description' => '阿里云为该请求生成的唯一标识符。',
                'type' => 'string',
                'example' => '06DC77A0-4622-42DB-9EE0-25FIOHS82JK1',
              ),
              'ErrorMessage' => 
              array (
                'description' => '调用失败时，返回的出错信息。',
                'type' => 'string',
                'example' => 'product is not active.',
              ),
              'Success' => 
              array (
                'description' => '是否调用成功：
- **true**：调用成功。
- **false**：调用失败。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Data' => 
              array (
                'description' => '响应结果。',
                'type' => 'object',
                'properties' => 
                array (
                  'Page' => 
                  array (
                    'description' => '当前页面号。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                  'PageSize' => 
                  array (
                    'description' => '每页显示的条数。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '10',
                  ),
                  'List' => 
                  array (
                    'description' => '返回的图片列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'PicId' => 
                        array (
                          'description' => '图片ID。',
                          'type' => 'string',
                          'example' => 'pZJUqijOyfpFOOGNP******',
                        ),
                        'PicUrl' => 
                        array (
                          'description' => '图片URL。

> URL有效期为1小时。',
                          'type' => 'string',
                          'example' => 'http://***_normal.jpg',
                        ),
                        'PicCreateTime' => 
                        array (
                          'description' => '图片创建的时间，格式为13位时间戳，单位为毫秒。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1543458157522',
                        ),
                        'ThumbUrl' => 
                        array (
                          'description' => '缩略图URL。

> URL有效期为1小时。',
                          'type' => 'string',
                          'example' => 'http://***.jpg',
                        ),
                        'IotId' => 
                        array (
                          'description' => 'IPC设备的设备ID。',
                          'type' => 'string',
                          'example' => 'zLZyi6aOLyOSHa9hsPyD00****',
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
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"200\\",\\n  \\"RequestId\\": \\"06DC77A0-4622-42DB-9EE0-25FIOHS82JK1\\",\\n  \\"ErrorMessage\\": \\"product is not active.\\",\\n  \\"Success\\": true,\\n  \\"Data\\": {\\n    \\"Page\\": 1,\\n    \\"PageSize\\": 10,\\n    \\"List\\": [\\n      {\\n        \\"PicId\\": \\"pZJUqijOyfpFOOGNP******\\",\\n        \\"PicUrl\\": \\"http://***_normal.jpg\\",\\n        \\"PicCreateTime\\": 1543458157522,\\n        \\"ThumbUrl\\": \\"http://***.jpg\\",\\n        \\"IotId\\": \\"zLZyi6aOLyOSHa9hsPyD00****\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":" <QueryPictureFilesResponse>\\n    <RequestId>06DC77A0-4622-42DB-9EE0-25FIOHS82JK1</RequestId>\\n    <Data>\\n        <PageSize>10</PageSize>\\n        <Page>1</Page>\\n        <List>\\n            <IotId>zLZyi6aOLyOSHa9hsPyD00****</IotId>\\n            <ThumbUrl>http://***.jpg</ThumbUrl>\\n            <PicUrl>http://***_normal.jpg</PicUrl>\\n            <PicId>pZJUqijOyfpFOOGNP******</PicId>\\n            <PicCreateTime>1543458157522</PicCreateTime>\\n        </List>\\n    </Data>\\n    <Code>200</Code>\\n    <Success>true</Success>\\n</QueryPictureFilesResponse>","errorExample":""}]',
      'title' => '获取图片列表',
      'summary' => '调用该接口获取图片列表。',
      'description' => '## QPS限制

单个阿里云账号调用该接口的每秒请求数（QPS）最大限制为500。

> 单个阿里云账号下的所有RAM用户共享该阿里云账号的配额。',
      'requestParamsDescription' => '调用API时，除了本文介绍的该API的特有请求参数，还需传入公共请求参数。公共请求参数说明，请参见[公共参数](~~141505~~)文档。',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'BindPictureSearchAppWithDevices' => 
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
      ),
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'AppInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '以图搜图应用实例ID，可调用[QueryPictureSearchApps](~~206608~~)查询。',
            'type' => 'string',
            'required' => true,
            'example' => '5a502d3fbab8410e8fd4be9037c7****',
          ),
        ),
        1 => 
        array (
          'name' => 'IotInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。

- 企业版实例：必须传入此参数。您可在物联网平台控制台的**实例概览**页面，查看您的企业版实例ID。
- 公共实例：无需传入此参数。',
            'type' => 'string',
            'required' => false,
            'example' => 'iot-060a****',
          ),
        ),
        2 => 
        array (
          'name' => 'DeviceIotIds',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '设备IotId列表。支持传入V系列边缘一体机或摄像机的IotId。

IotId是物联网平台为设备颁发的ID，设备的唯一标识符。
可调用物联网平台[QueryDeviceDetail](~~69594~~)查询。

单次最多可填写20个设备IotId。',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'string',
            ),
            'required' => true,
            'example' => 'VrJwPGjC1sJlqPjZA3cxg4****',
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
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'description' => '调用失败时，返回的错误码。更多信息，请参见[错误码](~~145071~~)。',
                'type' => 'string',
                'example' => '200',
              ),
              'ErrorMessage' => 
              array (
                'description' => '调用失败时，返回的出错信息。',
                'type' => 'string',
                'example' => 'iotIdList is error',
              ),
              'RequestId' => 
              array (
                'description' => '阿里云为该请求生成的唯一标识符。',
                'type' => 'string',
                'example' => 'B8A4153B-4F18-49B1-90C0-C9194866FF88',
              ),
              'Success' => 
              array (
                'description' => '是否调用成功：
- **true**：调用成功。
- **false**：调用失败。
',
                'type' => 'boolean',
                'example' => 'true',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"200\\",\\n  \\"ErrorMessage\\": \\"iotIdList is error\\",\\n  \\"RequestId\\": \\"B8A4153B-4F18-49B1-90C0-C9194866FF88\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<BindPictureSearchAppWithDevicesResponse>\\n<RequestId>B8A4153B-4F18-49B1-90C0-C9194866FF88</RequestId>\\n<Code>200</Code>\\n<Success>true</Success>\\n</BindPictureSearchAppWithDevicesResponse>","errorExample":""}]',
      'title' => '将图片搜索应用程序与设备绑定',
      'summary' => '调用该接口可用以图搜图实例批量绑定设备。',
      'description' => '## 使用限制
如果在企业版实例中调用该接口，请求参数**IotInstanceId**必须填写。否则，调用接口会失败。',
      'requestParamsDescription' => '调用API时，除了本文介绍的该API的特有请求参数，还需传入公共请求参数。公共请求参数说明，请参见[公共参数](~~141505~~)文档。
',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'UnbindPictureSearchAppWithDevices' => 
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
      ),
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'AppInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '以图搜图应用实例ID。可调用[QueryPictureSearchApps](~~206608~~)查询。',
            'type' => 'string',
            'required' => true,
            'example' => '5a502d3fbab8410e8fd4be9037c7****',
          ),
        ),
        1 => 
        array (
          'name' => 'IotInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。

- 企业版实例：必须传入此参数。您可在物联网平台控制台的**实例概览**页面，查看您的企业版实例ID。
- 公共实例：无需传入此参数。
',
            'type' => 'string',
            'required' => false,
            'example' => 'iot-060a****',
          ),
        ),
        2 => 
        array (
          'name' => 'DeviceIotIds',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '设备IotId列表。支持传入V系列边缘一体机或摄像头的IotId。

IotId是物联网平台为该设备颁发的ID，设备的唯一标识符。可调用物联网平台[QueryDeviceDetail](~~69594~~)查询。

单次最多可填写20个设备IotId。',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'string',
            ),
            'required' => true,
            'example' => 'VrJwPGjC1sJlqPjZA3cxg4****',
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
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'description' => '调用失败时，返回的错误码。更多信息，请参见[错误码](~~145071~~)。',
                'type' => 'string',
                'example' => '200',
              ),
              'ErrorMessage' => 
              array (
                'description' => '调用失败时，返回的出错信息。',
                'type' => 'string',
                'example' => 'iotIdList is error',
              ),
              'RequestId' => 
              array (
                'description' => '阿里云为该请求生成的唯一标识符。',
                'type' => 'string',
                'example' => 'E779C673-E8E8-41F0-883E-7D9275DF733C',
              ),
              'Success' => 
              array (
                'description' => '是否调用成功：
- **true**：调用成功。
- **false**：调用失败。
',
                'type' => 'boolean',
                'example' => 'true',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"200\\",\\n  \\"ErrorMessage\\": \\"iotIdList is error\\",\\n  \\"RequestId\\": \\"E779C673-E8E8-41F0-883E-7D9275DF733C\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<UnbindPictureSearchAppWithDevicesResponse>\\n<RequestId>E779C673-E8E8-41F0-883E-7D9275DF733C</RequestId>\\n<Code>200</Code>\\n<Success>true</Success>\\n</UnbindPictureSearchAppWithDevicesResponse>","errorExample":""}]',
      'title' => '解绑图片搜索应用程序与设备',
      'summary' => '调用该接口，批量解绑以图搜图应用实例关联的设备。',
      'description' => '## 使用限制
如果在企业版实例中调用该接口，请求参数**IotInstanceId**必须填写。否则，调用接口会失败。',
      'requestParamsDescription' => '调用API时，除了本文介绍的该API的特有请求参数，还需传入公共请求参数。公共请求参数说明，请参见[公共参数](~~141505~~)文档。',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'PictureSearchPicture' => 
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
      ),
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'AppInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '以图搜图应用实例ID。可调用[QueryPictureSearchApps](~~206608~~)查询。',
            'type' => 'string',
            'required' => true,
            'example' => '5a502d3fbab8410e8fd4be9037c7****',
          ),
        ),
        1 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '每页显示的条数。最大取值10。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'maximum' => '20',
            'example' => '10',
          ),
        ),
        2 => 
        array (
          'name' => 'CurrentPage',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定从返回结果中的第几页开始显示。页数从1开始排序。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'minimum' => '1',
            'example' => '1',
          ),
        ),
        3 => 
        array (
          'name' => 'SearchPicUrl',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '待检索图片的地址。',
            'type' => 'string',
            'required' => true,
            'example' => ' http://***.***/2393.jpg',
          ),
        ),
        4 => 
        array (
          'name' => 'StartTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '检索范围起始时间，格式为13位时间戳，单位为毫秒。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'example' => '1614297000000',
          ),
        ),
        5 => 
        array (
          'name' => 'EndTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '检索范围结束时间，格式为13位时间戳，单位为毫秒。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'example' => '1614850651299',
          ),
        ),
        6 => 
        array (
          'name' => 'Threshold',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '检索阈值。取值范围0~1。

> 建议设置检索阈值大于等于0.3，以保证与检测对象匹配。
',
            'type' => 'number',
            'format' => 'float',
            'required' => true,
            'example' => '0.5',
          ),
        ),
        7 => 
        array (
          'name' => 'ContainPicUrl',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '响应结果包含照片。

> 当前设置为ture或false均返回响应结果。
',
            'type' => 'boolean',
            'required' => true,
            'example' => 'true',
          ),
        ),
        8 => 
        array (
          'name' => 'PictureSearchType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '检索类型：
- **1**（默认）：人脸
- **0**：人体
',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '10',
            'minimum' => '0',
            'example' => '1',
            'default' => '1',
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
              'Code' => 
              array (
                'description' => '调用失败时，返回的错误码。更多信息，请参见[错误码](~~145071~~)。',
                'type' => 'string',
                'example' => '200',
              ),
              'ErrorMessage' => 
              array (
                'description' => '调用失败时，返回的出错信息。',
                'type' => 'string',
                'example' => 'Specified parameter CurrentPage is not valid.',
              ),
              'RequestId' => 
              array (
                'description' => '阿里云为该请求生成的唯一标识符。',
                'type' => 'string',
                'example' => '3ddd5f30-7ccd-11eb-b164-bfd389491534',
              ),
              'Success' => 
              array (
                'description' => '是否调用成功：

- true：调用成功。
- false：调用失败。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Data' => 
              array (
                'description' => '响应信息。',
                'type' => 'object',
                'properties' => 
                array (
                  'CurrentPage' => 
                  array (
                    'description' => '当前页面号。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                  'PageSize' => 
                  array (
                    'description' => '每页显示的条数。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '10',
                  ),
                  'Total' => 
                  array (
                    'description' => '总条数。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                  'PageCount' => 
                  array (
                    'description' => '总页数。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                  'PageData' => 
                  array (
                    'description' => '应用列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'PicUrl' => 
                        array (
                          'description' => '图片地址。',
                          'type' => 'string',
                          'example' => 'https://XXX.XXX/XXX',
                        ),
                        'EventTime' => 
                        array (
                          'description' => '创建事件的时间，格式为毫秒级的13位时间戳。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1614500317482',
                        ),
                        'GatewayIotId' => 
                        array (
                          'description' => 'V系列边缘一体机的IotId。',
                          'type' => 'string',
                          'example' => 'pZJUqijOyfpFOOGNPF7S00****',
                        ),
                        'VectorId' => 
                        array (
                          'description' => '图片特征ID。',
                          'type' => 'string',
                          'example' => 'vectorId86d9a5c32b9947278e526c2eef8a****',
                        ),
                        'Threshold' => 
                        array (
                          'description' => '人脸相似度。',
                          'type' => 'number',
                          'format' => 'float',
                          'example' => '0.5',
                        ),
                        'VectorType' => 
                        array (
                          'description' => '图片特征类型：
- 0：人体。
- 1：人脸。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '1',
                        ),
                        'IotId' => 
                        array (
                          'description' => '查询的设备的IotId。',
                          'type' => 'string',
                          'example' => '5RUngwC1RknD4lPiHgH300****',
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
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"200\\",\\n  \\"ErrorMessage\\": \\"Specified parameter CurrentPage is not valid.\\",\\n  \\"RequestId\\": \\"3ddd5f30-7ccd-11eb-b164-bfd389491534\\",\\n  \\"Success\\": true,\\n  \\"Data\\": {\\n    \\"CurrentPage\\": 1,\\n    \\"PageSize\\": 10,\\n    \\"Total\\": 1,\\n    \\"PageCount\\": 1,\\n    \\"PageData\\": [\\n      {\\n        \\"PicUrl\\": \\"https://XXX.XXX/XXX\\",\\n        \\"EventTime\\": 1614500317482,\\n        \\"GatewayIotId\\": \\"pZJUqijOyfpFOOGNPF7S00****\\",\\n        \\"VectorId\\": \\"vectorId86d9a5c32b9947278e526c2eef8a****\\",\\n        \\"Threshold\\": 0.5,\\n        \\"VectorType\\": 1,\\n        \\"IotId\\": \\"5RUngwC1RknD4lPiHgH300****\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<PictureSearchPictureResponse>\\n<RequestId>3ddd5f30-7ccd-11eb-b164-bfd389491534</RequestId>\\n<Data>\\n    <PageSize>10</PageSize>\\n    <PageCount>1</PageCount>\\n    <CurrentPage>1</CurrentPage>\\n    <Total>1</Total>\\n    <PageData>\\n        <IotId>5RUngwC1RknD4lPiHgH300****</IotId>\\n        <VectorType>1</VectorType>\\n        <EventTime>1614500317482</EventTime>\\n        <GatewayIotId>pZJUqijOyfpFOOGNPF7S00****</GatewayIotId>\\n        <PicUrl>https://XXX.XXX/XXX</PicUrl>\\n        <Threshold>0.5</Threshold>\\n        <VectorId>vectorId86d9a5c32b9947278e526c2eef8a****</VectorId>\\n    </PageData>\\n</Data>\\n<Code>200</Code>\\n<Success>true</Success>\\n</PictureSearchPictureResponse>","errorExample":""}]',
      'title' => '图片搜索',
      'summary' => '调用该接口启动以图搜图应用实例，进行图片检索。',
      'requestParamsDescription' => '调用API时，除了本文介绍的该API的特有请求参数，还需传入公共请求参数。公共请求参数说明，请参见[公共参数](~~141505~~)文档。',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'TriggerCapturePicture' => 
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
      ),
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ProductKey',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'IPC设备所属产品的ProductKey。
您可以在物联网平台控制台**产品**页查看或调用[QueryProductList](~~69271~~)查看当前账号下所有产品的信息。
><notice> 如果传入该参数，需同时传入**DeviceName**。
></notice>',
            'type' => 'string',
            'required' => false,
            'example' => 'a1BwAGV****',
          ),
        ),
        1 => 
        array (
          'name' => 'DeviceName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'IPC设备的设备名称。
您可以在物联网平台控制台的**设备**页查看**DeviceName**。
><notice> 如果传入该参数，需同时传入**ProductKey**。
></notice>',
            'type' => 'string',
            'required' => false,
            'example' => 'camera1',
          ),
        ),
        2 => 
        array (
          'name' => 'IotId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'IPC设备的设备ID。物联网平台为该设备颁发的ID，设备的唯一标识符。可调用物联网平台[QueryDeviceDetail](~~69594~~)查询。

><notice> 如果传入该参数，则无需传入**ProductKey**和**DeviceName**。**IotId**作为设备唯一标识符，和**ProductKey**与**DeviceName**的组合是一一对应的关系。如果您同时传入**IotId**和**ProductKey**与**DeviceName**的组合，则以**IotId**为准。
></notice>',
            'type' => 'string',
            'required' => false,
            'example' => 'zLZyi6aOLyOSHa9hsPyD00****',
          ),
        ),
        3 => 
        array (
          'name' => 'IotInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。

<props="china">您可在物联网平台控制台的**实例概览**页面，查看当前实例的**ID**。若有ID值，必须传入该ID值，否则调用会失败。</props>

<props="china">
> 如果公共实例没有ID值，请参见[如何获取实例ID](~~267533~~)。</props>

<props="intl">无需传入此参数。</props>',
            'type' => 'string',
            'required' => false,
            'example' => 'iot-cn-n6w1y59****',
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
              'Code' => 
              array (
                'description' => '接口返回码：

- **200**：表示成功。
- 其它：表示错误码。错误码详情，请参见[错误码](~~145071~~)。',
                'type' => 'string',
                'example' => '200',
              ),
              'Data' => 
              array (
                'description' => 'IPC设备拍摄图片后，为图片生成的图片ID。

>IPC设备成功上传图片后，图片ID生效。',
                'type' => 'string',
                'example' => 'eventPicId_12****',
              ),
              'ErrorMessage' => 
              array (
                'description' => '调用失败时，返回的出错信息。',
                'type' => 'string',
                'example' => 'request forbidden',
              ),
              'RequestId' => 
              array (
                'description' => '阿里云为该请求生成的唯一标识符。',
                'type' => 'string',
                'example' => '06DC77A0-4622-42DB-9EE0-25FIOHS82JK1',
              ),
              'Success' => 
              array (
                'description' => '是否调用成功：
- **true**：调用成功。
- **false**：调用失败。
',
                'type' => 'boolean',
                'example' => 'true',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"200\\",\\n  \\"Data\\": \\"eventPicId_12****\\",\\n  \\"ErrorMessage\\": \\"request forbidden\\",\\n  \\"RequestId\\": \\"06DC77A0-4622-42DB-9EE0-25FIOHS82JK1\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<TriggerCapturePictureResponse>\\n<RequestId>06DC77A0-4622-42DB-9EE0-25FIOHS82JK1</RequestId>\\n<Data>eventPicId_12****</Data>\\n<Code>200</Code>\\n<Success>true</Success>\\n</TriggerCapturePictureResponse>","errorExample":""}]',
      'title' => '主动触发抓图',
      'summary' => '调用该接口主动触发IPC设备拍摄图片并上传至云端。',
      'requestParamsDescription' => '调用API时，除了本文介绍的该API的特有请求参数，还需传入公共请求参数。公共请求参数说明，请参见[公共参数](~~141505~~)文档。',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'CreateRecordPlan' => 
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
      ),
      'operationType' => 'readAndWrite',
      'systemTags' => 
      array (
        'operationType' => 'create',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Name',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '录像计划名称。

名称长度小于48个字符，可以包含英文字母、数字和特殊字符：短划线（-）、下划线（_）、at（@）、英文句号（.）、英文冒号（:）。',
            'type' => 'string',
            'required' => true,
            'example' => 'plan1',
          ),
        ),
        1 => 
        array (
          'name' => 'TemplateId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '录像计划对应的时间模板ID，可调用[CreateTimeTemplate](~~107888~~)查询。',
            'type' => 'string',
            'required' => true,
            'example' => '36f06322442e4e3f85a5ae8862c9****',
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
              'Code' => 
              array (
                'description' => '调用失败时，返回的错误码。更多信息，请参见[错误码](~~145071~~)。',
                'type' => 'string',
                'example' => '200',
              ),
              'Data' => 
              array (
                'description' => '录像计划ID。',
                'type' => 'string',
                'example' => '5b60bf0dd55944c19d7817442bc9****',
              ),
              'ErrorMessage' => 
              array (
                'description' => '调用失败时，返回的出错信息。',
                'type' => 'string',
                'example' => 'tenant auth error',
              ),
              'RequestId' => 
              array (
                'description' => '阿里云为该请求生成的唯一标识符。',
                'type' => 'string',
                'example' => '06DC77A0-4622-42DB-9EE0-25FIOHS82JK1',
              ),
              'Success' => 
              array (
                'description' => '是否调用成功：
- **true**：调用成功。
- **false**：调用失败。
',
                'type' => 'boolean',
                'example' => 'true',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"200\\",\\n  \\"Data\\": \\"5b60bf0dd55944c19d7817442bc9****\\",\\n  \\"ErrorMessage\\": \\"tenant auth error\\",\\n  \\"RequestId\\": \\"06DC77A0-4622-42DB-9EE0-25FIOHS82JK1\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<CreateRecordPlanResponse>\\n<RequestId>06DC77A0-4622-42DB-9EE0-25FIOHS82JK1</RequestId>\\n<Data>5b60bf0dd55944c19d7817442bc9****</Data>\\n<Code>200</Code>\\n<Success>true</Success>\\n</CreateRecordPlanResponse>","errorExample":""}]',
      'title' => '创建录像计划',
      'summary' => '调用该接口，根据时间模板创建录像计划。',
      'requestParamsDescription' => '调用API时，除了本文介绍的该API的特有请求参数，还需传入公共请求参数。公共请求参数说明，请参见[公共参数](~~141505~~)文档。',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'AddRecordPlanDevice' => 
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
      ),
      'systemTags' => 
      array (
        'operationType' => 'create',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'IotInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。

您可在物联网平台控制台的**实例概览**页面，查看当前实例的**ID**。若有ID值，必须传入该ID值，否则调用会失败。

> 如果公共实例没有ID值，请参见[如何获取实例ID](~~267533~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'iot-cn-n6w1y59****',
          ),
        ),
        1 => 
        array (
          'name' => 'ProductKey',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'IPC设备所属产品的ProductKey。
您可以在物联网平台控制台**产品**页查看或调用[QueryProductList](~~69271~~)查看当前账号下所有产品的信息。
><notice> 如果传入该参数，需同时传入**DeviceName**。
></notice>',
            'type' => 'string',
            'required' => false,
            'example' => 'a1BwAGV****',
          ),
        ),
        2 => 
        array (
          'name' => 'DeviceName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'IPC设备的设备名称。
您可以在物联网平台控制台的**设备**页查看**DeviceName**。
><notice> 如果传入该参数，需同时传入**ProductKey**。
></notice>',
            'type' => 'string',
            'required' => false,
            'example' => 'camera1',
          ),
        ),
        3 => 
        array (
          'name' => 'IotId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'IPC设备的设备ID。物联网平台为该设备颁发的ID，设备的唯一标识符。可调用物联网平台[QueryDeviceDetail](~~69594~~)查询。

><notice> 如果传入该参数，则无需传入**ProductKey**和**DeviceName**。**IotId**作为设备唯一标识符，和**ProductKey**与**DeviceName**的组合是一一对应的关系。如果您同时传入**IotId**和**ProductKey**与**DeviceName**的组合，则以**IotId**为准。
></notice>',
            'type' => 'string',
            'required' => false,
            'example' => 'zLZyi6aOLyOSHa9hsPyD00****',
          ),
        ),
        4 => 
        array (
          'name' => 'StreamType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '码流类型：

- **0**（默认）：主码流。
- **1**：辅码流。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'example' => '0',
          ),
        ),
        5 => 
        array (
          'name' => 'PlanId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '录像计划ID。可调用[QueryRecordPlans](~~107896~~)查询。',
            'type' => 'string',
            'required' => true,
            'example' => '5b60bf0dd55944c19d7817442bc9****',
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
              'Code' => 
              array (
                'description' => '接口返回码：

- **200**：表示成功。
- 其它：表示错误码。错误码详情，请参见[错误码](~~145071~~)。',
                'type' => 'string',
                'example' => '200',
              ),
              'RequestId' => 
              array (
                'description' => '阿里云为该请求生成的唯一标识符。',
                'type' => 'string',
                'example' => '06DC77A0-4622-42DB-9EE0-25FIOHS82JK1',
              ),
              'ErrorMessage' => 
              array (
                'description' => '调用失败时，返回的出错信息。',
                'type' => 'string',
                'example' => 'tenant auth error',
              ),
              'Success' => 
              array (
                'description' => '是否调用成功：
- **true**：调用成功。
- **false**：调用失败。
',
                'type' => 'boolean',
                'example' => 'true',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"200\\",\\n  \\"RequestId\\": \\"06DC77A0-4622-42DB-9EE0-25FIOHS82JK1\\",\\n  \\"ErrorMessage\\": \\"tenant auth error\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<AddRecordPlanDeviceResponse>\\r\\n    <RequestId>06DC77A0-4622-42DB-9EE0-25FIOHS82JK1</RequestId>\\r\\n    <code>200</code>\\r\\n    <Success>true</Success>\\r\\n</AddRecordPlanDeviceResponse>","errorExample":""}]',
      'title' => '为录像计划添加摄像头',
      'summary' => '调用该接口为IPC设备添加连续录像计划。',
      'requestParamsDescription' => '调用API时，除了本文介绍的该API的特有请求参数，还需传入公共请求参数。公共请求参数说明，请参见[公共参数](~~141505~~)文档。',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DeleteRecordPlan' => 
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
      ),
      'operationType' => 'readAndWrite',
      'systemTags' => 
      array (
        'operationType' => 'delete',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'PlanId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '录像计划ID。可调用[QueryRecordPlans](~~107896~~)查询。',
            'type' => 'string',
            'required' => true,
            'example' => '6c5a397bc17c4b48ace86f0f0c30****',
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
              'Code' => 
              array (
                'description' => '调用失败时，返回的错误码。更多信息，请参见[错误码](~~145071~~)。',
                'type' => 'string',
                'example' => '200',
              ),
              'RequestId' => 
              array (
                'description' => '阿里云为该请求生成的唯一标识符。',
                'type' => 'string',
                'example' => '06DC77A0-4622-42DB-9EE0-25FIOHS82JK1',
              ),
              'ErrorMessage' => 
              array (
                'description' => '调用失败时，返回的出错信息。',
                'type' => 'string',
                'example' => 'request forbidden.',
              ),
              'Success' => 
              array (
                'description' => '是否调用成功：
- **true**：调用成功。
- **false**：调用失败。
',
                'type' => 'boolean',
                'example' => 'true',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"200\\",\\n  \\"RequestId\\": \\"06DC77A0-4622-42DB-9EE0-25FIOHS82JK1\\",\\n  \\"ErrorMessage\\": \\"request forbidden.\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<DeleteRecordPlanResponse>\\n<RequestId>06DC77A0-4622-42DB-9EE0-25FIOHS82JK1</RequestId>\\n<Code>200</Code>\\n<Success>true</Success>\\n</DeleteRecordPlanResponse>","errorExample":""}]',
      'title' => '删除录像计划',
      'summary' => '调用该接口删除录像计划。',
      'requestParamsDescription' => '调用API时，除了本文介绍的该API的特有请求参数，还需传入公共请求参数。公共请求参数说明，请参见[公共参数](~~141505~~)文档。',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DeleteRecordPlanDevice' => 
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
      ),
      'systemTags' => 
      array (
        'operationType' => 'delete',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'IotInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。

您可在物联网平台控制台的**实例概览**页面，查看当前实例的**ID**。若有ID值，必须传入该ID值，否则调用会失败。

> 如果公共实例没有ID值，请参见[如何获取实例ID](~~267533~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'iot-cn-n6w1y59****',
          ),
        ),
        1 => 
        array (
          'name' => 'ProductKey',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'IPC设备所属产品的ProductKey。
您可以在物联网平台控制台**产品**页查看或调用[QueryProductList](~~69271~~)查看当前账号下所有产品的信息。
><notice> 如果传入该参数，需同时传入**DeviceName**。
></notice>',
            'type' => 'string',
            'required' => false,
            'example' => 'a1BwAGV****',
          ),
        ),
        2 => 
        array (
          'name' => 'DeviceName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'IPC设备的设备名称。
您可以在物联网平台控制台的**设备**页查看**DeviceName**。
><notice> 如果传入该参数，需同时传入**ProductKey**。
></notice>',
            'type' => 'string',
            'required' => false,
            'example' => 'camera1',
          ),
        ),
        3 => 
        array (
          'name' => 'IotId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'IPC设备的设备ID。物联网平台为该设备颁发的ID，设备的唯一标识符。可调用物联网平台[QueryDeviceDetail](~~69594~~)查询。

><notice> 如果传入该参数，则无需传入**ProductKey**和**DeviceName**。**IotId**作为设备唯一标识符，和**ProductKey**与**DeviceName**的组合是一一对应的关系。如果您同时传入**IotId**和**ProductKey**与**DeviceName**的组合，则以**IotId**为准。
></notice>',
            'type' => 'string',
            'required' => false,
            'example' => 'zLZyi6aOLyOSHa9hsPyD00****',
          ),
        ),
        4 => 
        array (
          'name' => 'StreamType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '码流类型：

- **0**：主码流。
- **1**：辅码流。
',
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
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'description' => '调用失败时，返回的错误码。更多信息，请参见[错误码](~~145071~~)。',
                'type' => 'string',
                'example' => '200',
              ),
              'RequestId' => 
              array (
                'description' => '阿里云为该请求生成的唯一标识符。',
                'type' => 'string',
                'example' => '06DC77A0-4622-42DB-9EE0-25FIOHS82JK1',
              ),
              'ErrorMessage' => 
              array (
                'description' => '调用失败时，返回的错误信息。',
                'type' => 'string',
                'example' => 'tenant auth error',
              ),
              'Success' => 
              array (
                'description' => '是否调用成功：
- **true**：调用成功。
- **false**：调用失败。
',
                'type' => 'boolean',
                'example' => 'true',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"200\\",\\n  \\"RequestId\\": \\"06DC77A0-4622-42DB-9EE0-25FIOHS82JK1\\",\\n  \\"ErrorMessage\\": \\"tenant auth error\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<DeleteRecordPlanDeviceResponse>\\n<RequestId>06DC77A0-4622-42DB-9EE0-25FIOHS82JK1</RequestId>\\n<Code>200</Code>\\n<Success>true</Success>\\n</DeleteRecordPlanDeviceResponse>","errorExample":""}]',
      'title' => '删除录像计划执行设备',
      'summary' => '调用该接口删除IPC设备关联的录像计划。',
      'requestParamsDescription' => '调用API时，除了本文介绍的该API的特有请求参数，还需传入公共请求参数。公共请求参数说明，请参见[公共参数](~~141505~~)文档。',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'SetDeviceRecordLifeCycle' => 
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
      ),
      'systemTags' => 
      array (
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'IotInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。您可在物联网平台控制台的**实例概览**页面，查看当前实例的**ID**。

><notice>
- 若有ID值，必须传入该ID值，否则调用会失败。
- 若无<props="intl"><ph>**实例概览**页面或</ph></props>ID值，则无需传入。

></notice>

实例的更多信息，请参见[实例概述](~~356505~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'iot-cn-n6w1y59****',
          ),
        ),
        1 => 
        array (
          'name' => 'ProductKey',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'IPC设备所属产品的ProductKey。
您可以在物联网平台控制台**产品**页查看或调用[QueryProductList](~~69271~~)查看当前账号下所有产品的信息。
><notice> 如果传入该参数，需同时传入**DeviceName**。
></notice>',
            'type' => 'string',
            'required' => false,
            'example' => 'a1BwAGV****',
          ),
        ),
        2 => 
        array (
          'name' => 'DeviceName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'IPC设备的设备名称。
您可以在物联网平台控制台的**设备**页查看**DeviceName**。
><notice> 如果传入该参数，需同时传入**ProductKey**。
></notice>',
            'type' => 'string',
            'required' => false,
            'example' => 'camera1',
          ),
        ),
        3 => 
        array (
          'name' => 'IotId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'IPC设备的设备ID。物联网平台为该设备颁发的ID，设备的唯一标识符。可调用物联网平台[QueryDeviceDetail](~~69594~~)查询。

><notice> 如果传入该参数，则无需传入**ProductKey**和**DeviceName**。**IotId**作为设备唯一标识符，和**ProductKey**与**DeviceName**的组合是一一对应的关系。如果您同时传入**IotId**和**ProductKey**与**DeviceName**的组合，则以**IotId**为准。
></notice>',
            'type' => 'string',
            'required' => false,
            'example' => 'd7XmBoJhAr88C6PelXDF00****',
          ),
        ),
        4 => 
        array (
          'name' => 'Day',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '录像生命周期，即录像文件在云端保存的天数。

> 您需要设置录像生命周期大于0，才可使用视频服务提供的其他录像功能。录像生命周期最大可设置为3650天。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'example' => '7',
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
              'Code' => 
              array (
                'description' => '接口返回码：

- **200**：表示成功。
- 其它：表示错误码。错误码详情，请参见[错误码](~~145071~~)。',
                'type' => 'string',
                'example' => '200',
              ),
              'RequestId' => 
              array (
                'description' => '阿里云为该请求生成的唯一标识符。',
                'type' => 'string',
                'example' => '06DC77A0-4622-42DB-9EE0-25FIOHS82JK1',
              ),
              'ErrorMessage' => 
              array (
                'description' => '调用失败时，返回的出错信息。',
                'type' => 'string',
                'example' => 'InvalidParameter',
              ),
              'Success' => 
              array (
                'description' => '是否调用成功：
- **true**：调用成功。
- **false**：调用失败。',
                'type' => 'boolean',
                'example' => 'true',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"200\\",\\n  \\"RequestId\\": \\"06DC77A0-4622-42DB-9EE0-25FIOHS82JK1\\",\\n  \\"ErrorMessage\\": \\"InvalidParameter\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<SetDeviceRecordLifeCycleResponse>\\n<RequestId>06DC77A0-4622-42DB-9EE0-25FIOHS82JK1</RequestId>\\n<Code>200</Code>\\n<Success>true</Success>\\n</SetDeviceRecordLifeCycleResponse>","errorExample":""}]',
      'title' => '设置设备录像在云上的存储生命周期',
      'summary' => '调用该接口，设置IPC设备的录像生命周期，即录像文件在云端存储的天数。',
      'requestParamsDescription' => '调用API时，除了本文介绍的该API的特有请求参数，还需传入公共请求参数。公共请求参数说明，请参见[公共参数](~~141505~~)文档。',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'StopTriggeredRecord' => 
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
      ),
      'systemTags' => 
      array (
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'IotInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。

您可在物联网平台控制台的**实例概览**页面，查看当前实例的**ID**。若有ID值，必须传入该ID值，否则调用会失败。

> 如果公共实例没有ID值，请参见[如何获取实例ID](~~267533~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'iot-cn-n6w1y59****',
          ),
        ),
        1 => 
        array (
          'name' => 'ProductKey',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'IPC设备所属产品的ProductKey。
您可以在物联网平台控制台**产品**页查看或调用[QueryProductList](~~69271~~)查看当前账号下所有产品的信息。
><notice> 如果传入该参数，需同时传入**DeviceName**。
></notice>',
            'type' => 'string',
            'required' => false,
            'example' => 'a1BwAGV****',
          ),
        ),
        2 => 
        array (
          'name' => 'DeviceName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'IPC设备的设备名称。
您可以在物联网平台控制台的**设备**页查看**DeviceName**。
><notice> 如果传入该参数，需同时传入**ProductKey**。
></notice>',
            'type' => 'string',
            'required' => false,
            'example' => 'camera1',
          ),
        ),
        3 => 
        array (
          'name' => 'RecordId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '录像ID。可调用[TriggerRecord](~~107915~~)查询。',
            'type' => 'string',
            'required' => true,
            'example' => 'fc82774fa749485bad7d719f9670****',
          ),
        ),
        4 => 
        array (
          'name' => 'IotId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'IPC设备的设备ID。物联网平台为该设备颁发的ID，设备的唯一标识符。可调用物联网平台[QueryDeviceDetail](~~69594~~)查询。

><notice> 如果传入该参数，则无需传入**ProductKey**和**DeviceName**。**IotId**作为设备唯一标识符，和**ProductKey**与**DeviceName**的组合是一一对应的关系。如果您同时传入**IotId**和**ProductKey**与**DeviceName**的组合，则以**IotId**为准。
></notice>IPC的设备ID。物联网平台为该设备颁发的ID，设备的唯一标识符。

可调用物联网平台[QueryDeviceDetail](~~69594~~)查询。',
            'type' => 'string',
            'required' => false,
            'example' => 'C47T6xwp6ms4bNlkHRWCg4****',
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
              'Code' => 
              array (
                'description' => '接口返回码：

- **200**：表示成功。
- 其它：表示错误码。错误码详情，请参见[错误码](~~145071~~)。',
                'type' => 'string',
                'example' => '200',
              ),
              'RequestId' => 
              array (
                'description' => '阿里云为该请求生成的唯一标识符。
',
                'type' => 'string',
                'example' => '06DC77A0-4622-42DB-9EE0-25FIOHS82JK1',
              ),
              'ErrorMessage' => 
              array (
                'description' => '调用失败时，返回的出错信息。',
                'type' => 'string',
                'example' => 'tenant auth error',
              ),
              'Success' => 
              array (
                'description' => '是否调用成功：
- **true**：调用成功。
- **false**：调用失败。
',
                'type' => 'boolean',
                'example' => 'true',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"200\\",\\n  \\"RequestId\\": \\"06DC77A0-4622-42DB-9EE0-25FIOHS82JK1\\",\\n  \\"ErrorMessage\\": \\"tenant auth error\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<StopTriggeredRecordResponse>\\n<RequestId>06DC77A0-4622-42DB-9EE0-25FIOHS82JK1</RequestId>\\n<Code>200</Code>\\n<Success>true</Success>\\n</StopTriggeredRecordResponse>","errorExample":""}]',
      'title' => '停止主动触发录像',
      'summary' => '调用该接口使IPC设备停止主动触发录像。',
      'requestParamsDescription' => '调用API时，除了本文介绍的该API的特有请求参数，还需传入公共请求参数。公共请求参数说明，请参见[公共参数](~~141505~~)文档。
',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'UpdateEventRecordPlan' => 
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
      ),
      'operationType' => 'readAndWrite',
      'systemTags' => 
      array (
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'PlanId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '智能告警事件录像计划ID。可调用[QueryEventRecordPlans](~~107907~~)查询。',
            'type' => 'string',
            'required' => true,
            'example' => '5b60bf0dd55944c19d7817442bc9****',
          ),
        ),
        1 => 
        array (
          'name' => 'Name',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '智能告警事件录像名称。

名称长度小于48个字符，可以包含英文字母、数字和特殊字符：短划线（-）、下划线（_）、at（@）、英文句号（.）、英文冒号（:）。
',
            'type' => 'string',
            'required' => true,
            'example' => 'record1',
          ),
        ),
        2 => 
        array (
          'name' => 'EventTypes',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '智能告警事件类型：

- 设置为全部智能告警事件：0。
- 设置为多个智能告警事件：输入智能告警事件对应的序号，并用英文逗号（,）分隔，例如：`10001,10002`。
>设置多个智能告警事件时，单次最多支持设置10个。

请在物联网平台控制台，**产品详情**页面的**功能定义**页签，查看全部智能告警事件类型。详细信息，请参考[查看智能告警事件类型](~~207701~~)。',
            'type' => 'string',
            'required' => false,
            'example' => '1',
            'default' => '1',
          ),
        ),
        3 => 
        array (
          'name' => 'PreRecordDuration',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '预录时长，取值范围0~10，单位为秒。

>设备具备预录功能时，才可生成预录时长，否则，预录时长为0。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '10',
            'default' => '0',
          ),
        ),
        4 => 
        array (
          'name' => 'RecordDuration',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '录像时长，包括预录时长，取值范围10~60，单位为秒。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'example' => '30',
          ),
        ),
        5 => 
        array (
          'name' => 'TemplateId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '时间模板ID。可调用[QueryTimeTemplate](~~107890~~)查询。',
            'type' => 'string',
            'required' => true,
            'example' => '36f06322442e4e3f85a5ae8862c9****',
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
              'Code' => 
              array (
                'description' => '接口返回码：

- **200**：表示成功。
- 其它：表示错误码。错误码详情，请参见[错误码](~~145071~~)。',
                'type' => 'string',
                'example' => '200',
              ),
              'RequestId' => 
              array (
                'description' => '阿里云为该请求生成的唯一标识符。',
                'type' => 'string',
                'example' => '06DC77A0-4622-42DB-9EE0-25FIOHS82JK1',
              ),
              'ErrorMessage' => 
              array (
                'description' => '调用失败时，返回的出错信息。',
                'type' => 'string',
                'example' => 'tenant auth error',
              ),
              'Success' => 
              array (
                'description' => '是否调用成功：
- **true**：调用成功。
- **false**：调用失败。
',
                'type' => 'boolean',
                'example' => 'true',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"200\\",\\n  \\"RequestId\\": \\"06DC77A0-4622-42DB-9EE0-25FIOHS82JK1\\",\\n  \\"ErrorMessage\\": \\"tenant auth error\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<UpdateEventRecordPlanResponse>\\n<RequestId>06DC77A0-4622-42DB-9EE0-25FIOHS82JK1</RequestId>\\n<Code>200</Code>\\n<Success>true</Success>\\n</UpdateEventRecordPlanResponse>","errorExample":""}]',
      'title' => '更新事件联动录像计划',
      'summary' => '调用该接口更新智能告警事件录像计划。',
      'requestParamsDescription' => '调用API时，除了本文介绍的该API的特有请求参数，还需传入公共请求参数。公共请求参数说明，请参见[公共参数](~~141505~~)文档。
',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'UpdateRecordPlan' => 
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
      ),
      'operationType' => 'readAndWrite',
      'systemTags' => 
      array (
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'PlanId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '录像计划ID。可调用[QueryRecordPlans](~~107896~~)查询。',
            'type' => 'string',
            'required' => true,
            'example' => '6c5a397bc17c4b48ace86f0f0c30****',
          ),
        ),
        1 => 
        array (
          'name' => 'Name',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '录像计划名称。

名称长度小于48个字符，可以包含英文字母、数字和特殊字符：短划线（-）、下划线（_）、at（@）、英文句号（.）、英文冒号（:）。',
            'type' => 'string',
            'required' => true,
            'example' => 'test1',
          ),
        ),
        2 => 
        array (
          'name' => 'TemplateId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '录像计划要关联的时间模板ID。可调用[QueryTimeTemplate](~~107890~~)查询。',
            'type' => 'string',
            'required' => true,
            'example' => '36f06322442e4e3f85a5ae8862c9****',
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
              'Code' => 
              array (
                'description' => '调用失败时，返回的错误码。更多信息，请参见[错误码](~~145071~~)。
',
                'type' => 'string',
                'example' => '200',
              ),
              'RequestId' => 
              array (
                'description' => '阿里云为该请求生成的唯一标识符。',
                'type' => 'string',
                'example' => '06DC77A0-4622-42DB-9EE0-25FIOHS82JK1',
              ),
              'ErrorMessage' => 
              array (
                'description' => '调用失败时，返回的出错信息。',
                'type' => 'string',
                'example' => 'tenant auth error.',
              ),
              'Success' => 
              array (
                'description' => '是否调用成功：
- **true**：调用成功。
- **false**：调用失败。
',
                'type' => 'boolean',
                'example' => 'true',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"200\\",\\n  \\"RequestId\\": \\"06DC77A0-4622-42DB-9EE0-25FIOHS82JK1\\",\\n  \\"ErrorMessage\\": \\"tenant auth error.\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<UpdateRecordPlanResponse>\\n<RequestId>B68F5C11-4844-4A34-872B-313986482C06</RequestId>\\n<Code>200</Code>\\n<Success>true</Success>\\n</UpdateRecordPlanResponse>","errorExample":""}]',
      'title' => '更新录像计划',
      'summary' => '调用该接口更新录像计划。',
      'requestParamsDescription' => '调用API时，除了本文介绍的该API的特有请求参数，还需传入公共请求参数。公共请求参数说明，请参见[公共参数](~~141505~~)文档。',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'QueryRecord' => 
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
      ),
      'systemTags' => 
      array (
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ProductKey',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'IPC设备所属产品的ProductKey。
您可以在物联网平台控制台**产品**页查看或调用[QueryProductList](~~69271~~)查看当前账号下所有产品的信息。
><notice> 如果传入该参数，需同时传入**DeviceName**。
></notice>',
            'type' => 'string',
            'required' => false,
            'example' => 'a1BwAGV****',
          ),
        ),
        1 => 
        array (
          'name' => 'DeviceName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'IPC设备的设备名称。
您可以在物联网平台控制台的**设备**页查看**DeviceName**。
><notice> 如果传入该参数，需同时传入**ProductKey**。
></notice>',
            'type' => 'string',
            'required' => false,
            'example' => 'camera1',
          ),
        ),
        2 => 
        array (
          'name' => 'IotId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'IPC设备的设备ID。物联网平台为该设备颁发的ID，设备的唯一标识符。可调用物联网平台[QueryDeviceDetail](~~69594~~)查询。

><notice> 如果传入该参数，则无需传入**ProductKey**和**DeviceName**。**IotId**作为设备唯一标识符，和**ProductKey**与**DeviceName**的组合是一一对应的关系。如果您同时传入**IotId**和**ProductKey**与**DeviceName**的组合，则以**IotId**为准。
></notice>',
            'type' => 'string',
            'required' => false,
            'example' => 'C47T6xwp6ms4bNlkHRWCg4****',
          ),
        ),
        3 => 
        array (
          'name' => 'StreamType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '码流类型：
- **0**（默认）：主码流。
- **1**：辅码流。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
            'default' => '0',
          ),
        ),
        4 => 
        array (
          'name' => 'BeginTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询范围开始时间，格式为10位时间戳，单位为秒。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'example' => '1508200012',
          ),
        ),
        5 => 
        array (
          'name' => 'EndTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询范围结束时间，格式为10位时间戳，单位为秒。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'example' => '1582420940',
          ),
        ),
        6 => 
        array (
          'name' => 'RecordType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '录像类型：

- **0**：连续录像。
- **1**：智能告警事件录像。
- **2**（默认）：主动录像。

当该参数值置空时，返回全部录像类型。

',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        7 => 
        array (
          'name' => 'CurrentPage',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定从返回结果第几页开始显示，默认值为1。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        8 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '每页显示的条数。默认值为10，最大值为50。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '10',
          ),
        ),
        9 => 
        array (
          'name' => 'NeedSnapshot',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否需要缩略图：

- **true**：需要。
- **false**（默认）：不需要。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
            'default' => 'false',
          ),
        ),
        10 => 
        array (
          'name' => 'IotInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。您可在物联网平台控制台的**实例概览**页签，查看当前实例的ID。

><notice>
- 若有ID值，必须传入该**ID**值，否则调用会失败。
- 若无ID值，则无需传入。

></notice>

实例的更多信息，请参见[实例概述](~~356505~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'iot-060a****',
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
              'Code' => 
              array (
                'description' => '接口返回码：

- **200**：表示成功。
- 其它：表示错误码。错误码详情，请参见[错误码](~~145071~~)。',
                'type' => 'string',
                'example' => '200',
              ),
              'RequestId' => 
              array (
                'description' => '阿里云为该请求生成的唯一标识符。
',
                'type' => 'string',
                'example' => '06DC77A0-4622-42DB-9EE0-25FIOHS82JK1',
              ),
              'ErrorMessage' => 
              array (
                'description' => '调用失败时，返回的出错信息。',
                'type' => 'string',
                'example' => 'tenant auth error.',
              ),
              'Success' => 
              array (
                'description' => '是否调用成功：
- **true**：调用成功。
- **false**：调用失败。
',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Data' => 
              array (
                'description' => '查询结果。',
                'type' => 'object',
                'properties' => 
                array (
                  'Page' => 
                  array (
                    'description' => '当前页码。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                  'PageSize' => 
                  array (
                    'description' => '每页显示的条数。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '10',
                  ),
                  'List' => 
                  array (
                    'description' => '返回的录像列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'SnapshotUrl' => 
                        array (
                          'description' => '缩略图地址。',
                          'type' => 'string',
                          'example' => 'https://lin****/****2Cq_90',
                        ),
                        'EndTime' => 
                        array (
                          'description' => '录像结束时间。',
                          'type' => 'string',
                          'example' => '2018-09-10 00:00:30',
                        ),
                        'EventType' => 
                        array (
                          'description' => '录像类型（**RecordType**）为**智能告警事件录像**时返回该参数，表示录像对应的事件类型。

例如：**1**表示移动侦测事件。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '1',
                        ),
                        'RecordType' => 
                        array (
                          'description' => '录像类型：

- **0**：连续录像。
- **1**：智能告警事件录像。
- **2**：主动录像。
',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '1',
                        ),
                        'StreamType' => 
                        array (
                          'description' => '码流类型：
- **0**：主码流。
- **1**：辅码流。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '1',
                        ),
                        'BeginTime' => 
                        array (
                          'description' => '录像开始时间。',
                          'type' => 'string',
                          'example' => '2018-09-10 00:00:00',
                        ),
                        'FileName' => 
                        array (
                          'description' => '录像文件名。',
                          'type' => 'string',
                          'example' => 'file1',
                        ),
                        'VideoFrameNumber' => 
                        array (
                          'description' => '录像文件的视频帧数。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '1352',
                        ),
                        'FileSize' => 
                        array (
                          'description' => '录像文件大小，单位为字节。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '204800',
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
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"200\\",\\n  \\"RequestId\\": \\"06DC77A0-4622-42DB-9EE0-25FIOHS82JK1\\",\\n  \\"ErrorMessage\\": \\"tenant auth error.\\",\\n  \\"Success\\": true,\\n  \\"Data\\": {\\n    \\"Page\\": 1,\\n    \\"PageSize\\": 10,\\n    \\"List\\": [\\n      {\\n        \\"SnapshotUrl\\": \\"https://lin****/****2Cq_90\\",\\n        \\"EndTime\\": \\"2018-09-10 00:00:30\\",\\n        \\"EventType\\": 1,\\n        \\"RecordType\\": 1,\\n        \\"StreamType\\": 1,\\n        \\"BeginTime\\": \\"2018-09-10 00:00:00\\",\\n        \\"FileName\\": \\"file1\\",\\n        \\"VideoFrameNumber\\": 1352,\\n        \\"FileSize\\": 204800\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<QueryRecordResponse>\\n<RequestId>06DC77A0-4622-42DB-9EE0-25FIOHS82JK1</RequestId>\\n<Data>\\n    <PageSize>10</PageSize>\\n    <Page>1</Page>\\n    <List>\\n        <StreamType>1</StreamType>\\n        <EventType>1</EventType>\\n        <VideoFrameNumber>1352</VideoFrameNumber>\\n        <RecordType>1</RecordType>\\n        <EndTime>2018-09-10 00:00:30</EndTime>\\n        <SnapshotUrl>https://lin****/****2Cq_90</SnapshotUrl>\\n        <FileName>file1</FileName>\\n        <BeginTime>2018-09-10 00:00:00</BeginTime>\\n        <FileSize>204800</FileSize>\\n    </List>\\n</Data>\\n<Code>200</Code>\\n<Success>true</Success>\\n</QueryRecordResponse>","errorExample":""}]',
      'title' => '查询录像列表',
      'summary' => '调用该接口查询云端录像列表。',
      'description' => '## QPS限制

单个阿里云账号调用该接口的每秒请求数（QPS）最大限制为250。

> 单个阿里云账号下的所有RAM用户共享该阿里云账号的配额。',
      'requestParamsDescription' => '调用API时，除了本文介绍的该API的特有请求参数，还需传入公共请求参数。公共请求参数说明，请参见[公共参数](~~141505~~)文档。
',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'QueryRecordByRecordId' => 
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
      ),
      'systemTags' => 
      array (
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ProductKey',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'IPC设备所属产品的ProductKey。
您可以在物联网平台控制台**产品**页查看或调用[QueryProductList](~~69271~~)查看当前账号下所有产品的信息。
><notice> 如果传入该参数，需同时传入**DeviceName**。
></notice>',
            'type' => 'string',
            'required' => false,
            'example' => 'a1BwAGV****',
          ),
        ),
        1 => 
        array (
          'name' => 'DeviceName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'IPC设备的设备名称。
您可以在物联网平台控制台的**设备**页查看**DeviceName**。
><notice> 如果传入该参数，需同时传入**ProductKey**。
></notice>',
            'type' => 'string',
            'required' => false,
            'example' => 'camera1',
          ),
        ),
        2 => 
        array (
          'name' => 'IotId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'IPC设备的设备ID。物联网平台为该设备颁发的ID，设备的唯一标识符。可调用物联网平台[QueryDeviceDetail](~~69594~~)查询。

><notice> 如果传入该参数，则无需传入**ProductKey**和**DeviceName**。**IotId**作为设备唯一标识符，和**ProductKey**与**DeviceName**的组合是一一对应的关系。如果您同时传入**IotId**和**ProductKey**与**DeviceName**的组合，则以**IotId**为准。
></notice>',
            'type' => 'string',
            'required' => false,
            'example' => 'zLZyi6aOLyOSHa9hsPyD00****',
          ),
        ),
        3 => 
        array (
          'name' => 'RecordId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '录像文件ID。可调用[QueryRecord](~~107922~~)查询。',
            'type' => 'string',
            'required' => true,
            'example' => '2c5bf5b6a8704bd3a6a1517fd125****',
          ),
        ),
        4 => 
        array (
          'name' => 'IotInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。

<props="china">您可在物联网平台控制台的**实例概览**页面，查看当前实例的**ID**。若有ID值，必须传入该ID值，否则调用会失败。</props>

<props="china">
> 如果公共实例没有ID值，请参见[如何获取实例ID](~~267533~~)。</props>

<props="intl">无需传入此参数。</props>',
            'type' => 'string',
            'required' => false,
            'example' => 'iot-060a01****',
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
              'Code' => 
              array (
                'description' => '接口返回码：

- **200**：表示成功。
- 其它：表示错误码。错误码详情，请参见[错误码](~~145071~~)。',
                'type' => 'string',
                'example' => '200',
              ),
              'RequestId' => 
              array (
                'description' => '阿里云为该请求生成的唯一标识符。',
                'type' => 'string',
                'example' => 'F46E12A5-633D-4761-80F2-285752A052D5',
              ),
              'ErrorMessage' => 
              array (
                'description' => '调用失败时，返回的出错信息。',
                'type' => 'string',
                'example' => 'RecordId is mandatory for this action.',
              ),
              'Success' => 
              array (
                'description' => '是否调用成功：
- **true**：调用成功。
- **false**：调用失败。
',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Data' => 
              array (
                'description' => '返回信息。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'EndTime' => 
                    array (
                      'description' => '录像结束时间。',
                      'type' => 'string',
                      'example' => '2020-10-12 14:07:31',
                    ),
                    'FileName' => 
                    array (
                      'description' => '录像文件名。',
                      'type' => 'string',
                      'example' => 'test',
                    ),
                    'VodUrl' => 
                    array (
                      'description' => '录像文件的URL。',
                      'type' => 'string',
                      'example' => 'https://iotx-vision-vod-vpc-hz-pre.aliyun-inc.com/vod/device/localrecord/flv/play/1****668.flv?token=e9****a9e14482c56be52&session=470e****3d015',
                    ),
                    'BeginTime' => 
                    array (
                      'description' => '录像开始时间。',
                      'type' => 'string',
                      'example' => '2020-10-12 14:07:20',
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
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"200\\",\\n  \\"RequestId\\": \\"F46E12A5-633D-4761-80F2-285752A052D5\\",\\n  \\"ErrorMessage\\": \\"RecordId is mandatory for this action.\\",\\n  \\"Success\\": true,\\n  \\"Data\\": [\\n    {\\n      \\"EndTime\\": \\"2020-10-12 14:07:31\\",\\n      \\"FileName\\": \\"test\\",\\n      \\"VodUrl\\": \\"https://iotx-vision-vod-vpc-hz-pre.aliyun-inc.com/vod/device/localrecord/flv/play/1****668.flv?token=e9****a9e14482c56be52&session=470e****3d015\\",\\n      \\"BeginTime\\": \\"2020-10-12 14:07:20\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<QueryRecordByRecordIdResponse>\\n<RequestId>F46E12A5-633D-4761-80F2-285752A052D5</RequestId>\\n<Data>\\n    <EndTime>2020-10-12 14:07:31</EndTime>\\n    <FileName>test</FileName>\\n    <BeginTime>2020-10-12 14:07:20</BeginTime>\\n    <VodUrl>https://iotx-vision-vod-vpc-hz-pre.aliyun-inc.com/vod/device/localrecord/flv/play/1****668.flv?token=e9****a9e14482c56be52&session=470e****3d015</VodUrl>\\n</Data>\\n<Code>200</Code>\\n<Success>true</Success>\\n</QueryRecordByRecordIdResponse>","errorExample":""}]',
      'title' => '通过设备和录像id查询录像信息',
      'summary' => '调用该接口通过录像文件ID查询录像文件URL。',
      'requestParamsDescription' => '调用API时，除了本文介绍的该API的特有请求参数，还需传入公共请求参数。公共请求参数说明，请参见[公共参数](~~141505~~)文档。
',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'QueryRecordPlanDetail' => 
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
      ),
      'operationType' => 'readAndWrite',
      'systemTags' => 
      array (
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'PlanId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '录像计划ID。可调用[QueryRecordPlans](~~107896~~)查询。',
            'type' => 'string',
            'required' => true,
            'example' => '5b60bf0dd55944c19d7817442bc9****',
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
              'Code' => 
              array (
                'description' => '调用失败时，返回的错误码。更多信息，请参见[错误码](~~145071~~)。',
                'type' => 'string',
                'example' => '200',
              ),
              'RequestId' => 
              array (
                'description' => '阿里云为该请求生成的唯一标识符。',
                'type' => 'string',
                'example' => '06DC77A0-4622-42DB-9EE0-25FIOHS82JK1',
              ),
              'ErrorMessage' => 
              array (
                'description' => '调用失败时，返回的出错信息。',
                'type' => 'string',
                'example' => 'tenant auth error',
              ),
              'Success' => 
              array (
                'description' => '是否调用成功：
- **true**：调用成功。
- **false**：调用失败。
',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Data' => 
              array (
                'description' => '录像计划详细信息。',
                'type' => 'object',
                'properties' => 
                array (
                  'PlanId' => 
                  array (
                    'description' => '录像计划ID。',
                    'type' => 'string',
                    'example' => '5b60bf0dd55944c19d7817442bc9****',
                  ),
                  'Name' => 
                  array (
                    'description' => '录像计划模板名称。',
                    'type' => 'string',
                    'example' => 'test',
                  ),
                  'TemplateId' => 
                  array (
                    'description' => '录像计划的时间模板ID。',
                    'type' => 'string',
                    'example' => '693e244a038f4255bb2f5db32874****',
                  ),
                  'TemplateInfo' => 
                  array (
                    'description' => '时间模板信息。',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'AllDay' => 
                      array (
                        'description' => '是否7天*24小时录像：

- 1：7天*24小时录像。
- 0：非7天*24小时录像。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'example' => '1',
                      ),
                      'Default' => 
                      array (
                        'description' => '模板类型：
- **1**：默认模板
- **0**：自定义模板',
                        'type' => 'integer',
                        'format' => 'int32',
                        'example' => '1',
                      ),
                      'Name' => 
                      array (
                        'description' => '时间模板名称。',
                        'type' => 'string',
                        'example' => 'test',
                      ),
                      'TemplateId' => 
                      array (
                        'description' => '时间模板ID。',
                        'type' => 'string',
                        'example' => '693e244a038f4255bb2f5db32874****',
                      ),
                      'TimeSectionList' => 
                      array (
                        'description' => '时间模板信息。',
                        'type' => 'array',
                        'items' => 
                        array (
                          'type' => 'object',
                          'properties' => 
                          array (
                            'End' => 
                            array (
                              'description' => '每天结束的时间，取值范围1~86399，单位为秒。',
                              'type' => 'integer',
                              'format' => 'int32',
                              'example' => '20000',
                            ),
                            'DayOfWeek' => 
                            array (
                              'description' => '每周的周几，取值范围0~6，表示周日~周六。',
                              'type' => 'integer',
                              'format' => 'int32',
                              'example' => '0',
                            ),
                            'Begin' => 
                            array (
                              'description' => '每天开始的时间，取值范围0~86399，单位为秒。',
                              'type' => 'integer',
                              'format' => 'int32',
                              'example' => '6000',
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
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"200\\",\\n  \\"RequestId\\": \\"06DC77A0-4622-42DB-9EE0-25FIOHS82JK1\\",\\n  \\"ErrorMessage\\": \\"tenant auth error\\",\\n  \\"Success\\": true,\\n  \\"Data\\": {\\n    \\"PlanId\\": \\"5b60bf0dd55944c19d7817442bc9****\\",\\n    \\"Name\\": \\"test\\",\\n    \\"TemplateId\\": \\"693e244a038f4255bb2f5db32874****\\",\\n    \\"TemplateInfo\\": {\\n      \\"AllDay\\": 1,\\n      \\"Default\\": 1,\\n      \\"Name\\": \\"test\\",\\n      \\"TemplateId\\": \\"693e244a038f4255bb2f5db32874****\\",\\n      \\"TimeSectionList\\": [\\n        {\\n          \\"End\\": 20000,\\n          \\"DayOfWeek\\": 0,\\n          \\"Begin\\": 6000\\n        }\\n      ]\\n    }\\n  }\\n}","errorExample":""},{"type":"xml","example":"<QueryRecordPlanDetailResponse>\\n<RequestId>06DC77A0-4622-42DB-9EE0-25FIOHS82JK1</RequestId>\\n<Data>\\n    <PlanId>5b60bf0dd55944c19d7817442bc9****</PlanId>\\n    <TemplateId>693e244a038f4255bb2f5db32874****</TemplateId>\\n    <Name>test</Name>\\n    <TemplateInfo>\\n        <AllDay>0</AllDay>\\n        <Default>0</Default>\\n        <TemplateId>693e244a038f4255bb2f5db32874****</TemplateId>\\n        <Name>test</Name>\\n        <TimeSectionList>\\n            <DayOfWeek>0</DayOfWeek>\\n            <Begin>6000</Begin>\\n            <End>20000</End>\\n        </TimeSectionList>\\n    </TemplateInfo>\\n</Data>\\n<Code>200</Code>\\n<Success>true</Success>\\n</QueryRecordPlanDetailResponse>","errorExample":""}]',
      'title' => '查询录像计划详情',
      'summary' => '调用该接口查询录像计划详情。',
      'requestParamsDescription' => '调用API时，除了本文介绍的该API的特有请求参数，还需传入公共请求参数。公共请求参数说明，请参见[公共参数](~~141505~~)文档。',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'QueryRecordPlanDeviceByDevice' => 
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
      ),
      'systemTags' => 
      array (
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'IotInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。

您可在物联网平台控制台的**实例概览**页面，查看当前实例的**ID**。若有ID值，必须传入该ID值，否则调用会失败。

> 如果公共实例没有ID值，请参见[如何获取实例ID](~~267533~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'iot-cn-n6w1y59****',
          ),
        ),
        1 => 
        array (
          'name' => 'ProductKey',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'IPC设备所属产品的ProductKey。
您可以在物联网平台控制台**产品**页查看或调用[QueryProductList](~~69271~~)查看当前账号下所有产品的信息。
><notice> 如果传入该参数，需同时传入**DeviceName**。
></notice>',
            'type' => 'string',
            'required' => false,
            'example' => 'a1BwAGV****',
          ),
        ),
        2 => 
        array (
          'name' => 'DeviceName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'IPC设备的设备名称。
您可以在物联网平台控制台的**设备**页查看**DeviceName**。
><notice> 如果传入该参数，需同时传入**ProductKey**。
></notice>',
            'type' => 'string',
            'required' => false,
            'example' => 'camera1',
          ),
        ),
        3 => 
        array (
          'name' => 'IotId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'IPC设备的设备ID。物联网平台为该设备颁发的ID，设备的唯一标识符。可调用物联网平台[QueryDeviceDetail](~~69594~~)查询。

><notice> 如果传入该参数，则无需传入**ProductKey**和**DeviceName**。**IotId**作为设备唯一标识符，和**ProductKey**与**DeviceName**的组合是一一对应的关系。如果您同时传入**IotId**和**ProductKey**与**DeviceName**的组合，则以**IotId**为准。
></notice>',
            'type' => 'string',
            'required' => false,
            'example' => 'zLZyi6aOLyOSHa9hsPyD00****',
          ),
        ),
        4 => 
        array (
          'name' => 'StreamType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '码流类型：
- **0**：主码流
- **1**：辅码流',
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
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'description' => '调用失败时，返回的错误码。',
                'type' => 'string',
                'example' => '200',
              ),
              'RequestId' => 
              array (
                'description' => '阿里云为该请求生成的唯一标识符。',
                'type' => 'string',
                'example' => '06DC77A0-4622-42DB-9EE0-25FIOHS82JK1',
              ),
              'ErrorMessage' => 
              array (
                'description' => '调用失败时，返回的出错信息。',
                'type' => 'string',
                'example' => 'tenant auth error',
              ),
              'Success' => 
              array (
                'description' => '是否调用成功：
- **true**：调用成功。
- **false**：调用失败。
',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Data' => 
              array (
                'description' => '录像计划信息。',
                'type' => 'object',
                'properties' => 
                array (
                  'PlanId' => 
                  array (
                    'description' => '录像计划ID。',
                    'type' => 'string',
                    'example' => '5b60bf0dd55944c19d7817442bc9****',
                  ),
                  'Name' => 
                  array (
                    'description' => '录像计划模板名称。',
                    'type' => 'string',
                    'example' => 'test',
                  ),
                  'TemplateId' => 
                  array (
                    'description' => '录像计划关联的时间模板ID。',
                    'type' => 'string',
                    'example' => '693e244a038f4255bb2f5db32874****',
                  ),
                  'TemplateInfo' => 
                  array (
                    'description' => '时间模板信息。',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'AllDay' => 
                      array (
                        'description' => '是否7天*24小时录像：

- 1：是。
- 0：否，详细配置请查看TimeSectionList参数。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'example' => '1',
                      ),
                      'Default' => 
                      array (
                        'description' => '模板类型：
- **1**：默认模板
- **0**：自定义模板',
                        'type' => 'integer',
                        'format' => 'int32',
                        'example' => '0',
                      ),
                      'Name' => 
                      array (
                        'description' => '时间模板名称。',
                        'type' => 'string',
                        'example' => 'test',
                      ),
                      'TemplateId' => 
                      array (
                        'description' => '时间模板ID。',
                        'type' => 'string',
                        'example' => '693e244a038f4255bb2f5db32874****',
                      ),
                      'TimeSectionList' => 
                      array (
                        'description' => '时间模板信息。',
                        'type' => 'array',
                        'items' => 
                        array (
                          'type' => 'object',
                          'properties' => 
                          array (
                            'End' => 
                            array (
                              'description' => '每天结束的时间，取值范围1~86399，单位为秒。',
                              'type' => 'integer',
                              'format' => 'int32',
                              'example' => '20000',
                            ),
                            'DayOfWeek' => 
                            array (
                              'description' => '每周的周几，取值范围0~6，表示周日~周六。',
                              'type' => 'integer',
                              'format' => 'int32',
                              'example' => '0',
                            ),
                            'Begin' => 
                            array (
                              'description' => '每天开始的时间，取值范围0~86399，单位为秒。',
                              'type' => 'integer',
                              'format' => 'int32',
                              'example' => '6000',
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
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"200\\",\\n  \\"RequestId\\": \\"06DC77A0-4622-42DB-9EE0-25FIOHS82JK1\\",\\n  \\"ErrorMessage\\": \\"tenant auth error\\",\\n  \\"Success\\": true,\\n  \\"Data\\": {\\n    \\"PlanId\\": \\"5b60bf0dd55944c19d7817442bc9****\\",\\n    \\"Name\\": \\"test\\",\\n    \\"TemplateId\\": \\"693e244a038f4255bb2f5db32874****\\",\\n    \\"TemplateInfo\\": {\\n      \\"AllDay\\": 1,\\n      \\"Default\\": 0,\\n      \\"Name\\": \\"test\\",\\n      \\"TemplateId\\": \\"693e244a038f4255bb2f5db32874****\\",\\n      \\"TimeSectionList\\": [\\n        {\\n          \\"End\\": 20000,\\n          \\"DayOfWeek\\": 0,\\n          \\"Begin\\": 6000\\n        }\\n      ]\\n    }\\n  }\\n}","errorExample":""},{"type":"xml","example":"<QueryRecordPlanByDeviceResponse> \\n<RequestId>06DC77A0-4622-42DB-9EE0-25FIOHS82JK1</RequestId>\\n<Data>\\n    <PlanId>5b60bf0dd55944c19d7817442bc9****</PlanId>\\n    <TemplateId>693e244a038f4255bb2f5db32874****</TemplateId>\\n    <Name>test</Name>\\n    <TemplateInfo>\\n        <AllDay>0</AllDay>\\n        <Default>0</Default>\\n        <TemplateId>693e244a038f4255bb2f5db32874****</TemplateId>\\n        <Name>test</Name>\\n        <TimeSectionList>\\n            <DayOfWeek>0</DayOfWeek>\\n            <Begin>6000</Begin>\\n            <End>20000</End>\\n        </TimeSectionList>\\n    </TemplateInfo>\\n</Data>\\n<Code>200</Code>\\n<Success>true</Success>\\n</QueryRecordPlanByDeviceResponse> ","errorExample":""}]',
      'title' => '根据设备查询录像计划',
      'summary' => '调用该接口根据IPC的设备ID，查询该视频设备的录像计划。',
      'requestParamsDescription' => '调用API时，除了本文介绍的该API的特有请求参数，还需传入公共请求参数。公共请求参数说明，请参见[公共参数](~~141505~~)文档。
',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'QueryRecordPlanDeviceByPlan' => 
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
      ),
      'operationType' => 'readAndWrite',
      'systemTags' => 
      array (
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'PlanId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '录像计划ID。可调用[QueryRecordPlans](~~107896~~)查询。',
            'type' => 'string',
            'required' => true,
            'example' => '5b60bf0dd55944c19d7817442bc9****',
          ),
        ),
        1 => 
        array (
          'name' => 'CurrentPage',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定从返回结果中的第几页开始显示。页数从1开始排序。',
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
            'description' => '每页显示的条数。最小值为1，最大值为50，默认值为10。',
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
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'description' => '调用失败时，返回的错误码。更多信息，请参见[错误码](~~145071~~)。',
                'type' => 'string',
                'example' => '200',
              ),
              'RequestId' => 
              array (
                'description' => '阿里云为该请求生成的唯一标识符。
',
                'type' => 'string',
                'example' => '06DC77A0-4622-42DB-9EE0-25FIOHS82JK1',
              ),
              'ErrorMessage' => 
              array (
                'description' => '调用失败时，返回的出错信息。',
                'type' => 'string',
                'example' => 'tenant auth error',
              ),
              'Success' => 
              array (
                'description' => '是否调用成功：
- **true**：调用成功。
- **false**：调用失败。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Data' => 
              array (
                'description' => '查询结果。',
                'type' => 'object',
                'properties' => 
                array (
                  'PageSize' => 
                  array (
                    'description' => '每页显示的条数。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '10',
                  ),
                  'Total' => 
                  array (
                    'description' => '总条数。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                  'PageCount' => 
                  array (
                    'description' => '总页数。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                  'Page' => 
                  array (
                    'description' => '当前页面号。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                  'List' => 
                  array (
                    'description' => '返回的模板列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'StreamType' => 
                        array (
                          'description' => '码流类型：
- **0**：主码流
- **1**：辅码流',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '1',
                        ),
                        'IotId' => 
                        array (
                          'description' => '设备ID。',
                          'type' => 'string',
                          'example' => 'zLZyi6aOLyOSHa9hsPyD00****',
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
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"200\\",\\n  \\"RequestId\\": \\"06DC77A0-4622-42DB-9EE0-25FIOHS82JK1\\",\\n  \\"ErrorMessage\\": \\"tenant auth error\\",\\n  \\"Success\\": true,\\n  \\"Data\\": {\\n    \\"PageSize\\": 10,\\n    \\"Total\\": 1,\\n    \\"PageCount\\": 1,\\n    \\"Page\\": 1,\\n    \\"List\\": [\\n      {\\n        \\"StreamType\\": 1,\\n        \\"IotId\\": \\"zLZyi6aOLyOSHa9hsPyD00****\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<QueryRecordPlanDeviceResponse> \\n    <RequestId>06DC77A0-4622-42DB-9EE0-25FIOHS82JK1</RequestId>\\n    <code>200</code>\\n    <Success>true</Success>\\n    <Data>\\n        <Total>2</Total>\\n        <PageCount>1</PageCount>\\n        <PageSize>10</PageSize>\\n        <Page>1</Page>\\n        <List>\\n            <IotId>zLZyi6aOLyOSHa9hsPyD00****</IotId>\\n            <StreamType>1</StreamType>\\n        </List>\\n        <List>\\n            <IotId>C47T6xwp6ms4bNlkHRWCg4****</IotId>\\n            <StreamType>1</StreamType>\\n        </List>\\n    </Data>\\n</QueryRecordPlanDeviceResponse>    ","errorExample":""}]',
      'title' => '查询录像计划关联设备列表',
      'summary' => '调用该接口查询录像计划关联的设备。',
      'requestParamsDescription' => '调用API时，除了本文介绍的该API的特有请求参数，还需传入公共请求参数。公共请求参数说明，请参见[公共参数](~~141505~~)文档。',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'QueryRecordPlans' => 
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
      ),
      'operationType' => 'readAndWrite',
      'systemTags' => 
      array (
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'CurrentPage',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定从返回结果中的第几页开始显示。页数从1开始排序。',
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
            'description' => '每页显示的条数。最小值1，最大值50，默认值10。',
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
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'description' => '调用失败时，返回的错误码。更多信息，请参见[错误码](~~145071~~)。',
                'type' => 'string',
                'example' => '200',
              ),
              'RequestId' => 
              array (
                'description' => '阿里云为该请求生成的唯一标识符。',
                'type' => 'string',
                'example' => '06DC77A0-4622-42DB-9EE0-25FIOHS82JK1',
              ),
              'ErrorMessage' => 
              array (
                'description' => '调用失败时，返回的出错信息。',
                'type' => 'string',
                'example' => 'tenant auth error',
              ),
              'Success' => 
              array (
                'description' => '是否调用成功：
- **true**：调用成功。
- **false**：调用失败。
',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Data' => 
              array (
                'description' => '查询信息。',
                'type' => 'object',
                'properties' => 
                array (
                  'PageSize' => 
                  array (
                    'description' => '每页显示的记录数。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '10',
                  ),
                  'PageCount' => 
                  array (
                    'description' => '总页数。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                  'Total' => 
                  array (
                    'description' => '查询到的录像计划的总记录数。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '2',
                  ),
                  'Page' => 
                  array (
                    'description' => '当前页面号。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                  'List' => 
                  array (
                    'description' => '返回的录像计划模板列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'PlanId' => 
                        array (
                          'description' => '录像计划ID。',
                          'type' => 'string',
                          'example' => '6c5a397bc17c4b48ace86f0f0c30****',
                        ),
                        'Name' => 
                        array (
                          'description' => '录像计划名称。',
                          'type' => 'string',
                          'example' => 'plan1',
                        ),
                        'TemplateId' => 
                        array (
                          'description' => '录像计划对应的时间模板ID。',
                          'type' => 'string',
                          'example' => '693e244a038f4255bb2f5db32874****',
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
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"200\\",\\n  \\"RequestId\\": \\"06DC77A0-4622-42DB-9EE0-25FIOHS82JK1\\",\\n  \\"ErrorMessage\\": \\"tenant auth error\\",\\n  \\"Success\\": true,\\n  \\"Data\\": {\\n    \\"PageSize\\": 10,\\n    \\"PageCount\\": 1,\\n    \\"Total\\": 2,\\n    \\"Page\\": 1,\\n    \\"List\\": [\\n      {\\n        \\"PlanId\\": \\"6c5a397bc17c4b48ace86f0f0c30****\\",\\n        \\"Name\\": \\"plan1\\",\\n        \\"TemplateId\\": \\"693e244a038f4255bb2f5db32874****\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<QueryRecordPlansResponse>\\n<RequestId>11A0BBA2-92B6-4EEF-8542-DBCA40E94611</RequestId>\\n<Data>\\n    <PageSize>10</PageSize>\\n    <PageCount>1</PageCount>\\n    <Total>2</Total>\\n    <Page>1</Page>\\n    <List>\\n        <PlanId>6c5a397bc17c4b48ace86f0f0c30****</PlanId>\\n        <TemplateId>693e244a038f4255bb2f5db32874****</TemplateId>\\n        <Name>plan1</Name>\\n    </List>\\n    <List>\\n        <PlanId>5b60bf0dd55944c19d7817442bc9****</PlanId>\\n        <TemplateId>693e244a038f4255bb2f5db32874****</TemplateId>\\n        <Name>plan2</Name>\\n    </List>\\n</Data>\\n<Code>200</Code>\\n<Success>true</Success>\\n</QueryRecordPlansResponse>","errorExample":""}]',
      'title' => '查询录像计划列表',
      'summary' => '调用该接口查询录像计划列表。',
      'requestParamsDescription' => '调用API时，除了本文介绍的该API的特有请求参数，还需传入公共请求参数。公共请求参数说明，请参见[公共参数](~~141505~~)文档。',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'QueryRecordUrl' => 
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
      ),
      'systemTags' => 
      array (
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'FileName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '云端录像文件名，可调用[QueryRecord](~~107922~~)查询。',
            'type' => 'string',
            'required' => true,
            'example' => 'file1',
          ),
        ),
        1 => 
        array (
          'name' => 'SeekTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '录像播放偏移时间，单位秒。默认值为0。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '0',
            'default' => '0',
          ),
        ),
        2 => 
        array (
          'name' => 'IotInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。

<props="china">您可在物联网平台控制台的**实例概览**页面，查看当前实例的**ID**。若有ID值，必须传入该ID值，否则调用会失败。</props>

<props="china">
> 如果公共实例没有ID值，请参见[如何获取实例ID](~~267533~~)。</props>

<props="intl">无需传入此参数。</props>',
            'type' => 'string',
            'required' => false,
            'example' => 'iot-cn-n6w1y****',
          ),
        ),
        3 => 
        array (
          'name' => 'ProductKey',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'IPC设备所属产品的ProductKey。
您可以在物联网平台控制台**产品**页查看或调用[QueryProductList](~~69271~~)查看当前账号下所有产品的信息。
><notice> 如果传入该参数，需同时传入**DeviceName**。
></notice>',
            'type' => 'string',
            'required' => false,
            'example' => 'a1BwAGV****',
          ),
        ),
        4 => 
        array (
          'name' => 'DeviceName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'IPC设备的设备名称。
您可以在物联网平台控制台的**设备**页查看**DeviceName**。
><notice> 如果传入该参数，需同时传入**ProductKey**。
></notice>',
            'type' => 'string',
            'required' => false,
            'example' => 'camera1',
          ),
        ),
        5 => 
        array (
          'name' => 'IotId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'IPC设备的设备ID。物联网平台为该设备颁发的ID，设备的唯一标识符。可调用物联网平台[QueryDeviceDetail](~~69594~~)查询。

><notice> 如果传入该参数，则无需传入**ProductKey**和**DeviceName**。**IotId**作为设备唯一标识符，和**ProductKey**与**DeviceName**的组合是一一对应的关系。如果您同时传入**IotId**和**ProductKey**与**DeviceName**的组合，则以**IotId**为准。
></notice>',
            'type' => 'string',
            'required' => false,
            'example' => 'VrJwPGjC1sJlqPjZA3cxg4****',
          ),
        ),
        6 => 
        array (
          'name' => 'UrlValidDuration',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'URL有效期，单位秒，取值范围10~3600，单位秒。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '3600',
            'minimum' => '10',
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
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'description' => '接口返回码：

- **200**：表示成功。
- 其它：表示错误码。错误码详情，请参见[错误码](~~145071~~)。',
                'type' => 'string',
                'example' => '200',
              ),
              'Data' => 
              array (
                'description' => '录像文件的URL。URL包含鉴权信息，且无法重复使用。',
                'type' => 'string',
                'example' => 'https://linkvisual.aliyun.com/ddsffa****.m3u8',
              ),
              'ErrorMessage' => 
              array (
                'description' => '调用失败时，返回的出错信息。',
                'type' => 'string',
                'example' => 'tenant auth error',
              ),
              'RequestId' => 
              array (
                'description' => '阿里云为该请求生成的唯一标识符。',
                'type' => 'string',
                'example' => '06DC77A0-4622-42DB-9EE0-25FIOHS82JK1',
              ),
              'Success' => 
              array (
                'description' => '是否调用成功：
- **true**：调用成功。
- **false**：调用失败。',
                'type' => 'boolean',
                'example' => 'true',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"200\\",\\n  \\"Data\\": \\"https://linkvisual.aliyun.com/ddsffa****.m3u8\\",\\n  \\"ErrorMessage\\": \\"tenant auth error\\",\\n  \\"RequestId\\": \\"06DC77A0-4622-42DB-9EE0-25FIOHS82JK1\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<QueryRecordUrlResponse>\\n<RequestId>06DC77A0-4622-42DB-9EE0-25FIOHS82JK1</RequestId>\\n<Data>https://linkvisual.aliyun.com/ddsffa****.m3u8</Data>\\n<Code>200</Code>\\n<Success>true</Success>\\n</QueryRecordUrlResponse>","errorExample":""}]',
      'title' => '查询录像播放地址',
      'summary' => '调用该接口查询云端录像文件的播放地址。',
      'requestParamsDescription' => '调用API时，除了本文介绍的该API的特有请求参数，还需传入公共请求参数。公共请求参数说明，请参见[公共参数](~~141505~~)文档。',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'QueryTimeTemplate' => 
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
      ),
      'systemTags' => 
      array (
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'CurrentPage',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定从返回结果中的第几页开始显示。页数从1开始排序。',
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
            'description' => '每页显示的条数。最小值为1，最大值为50，默认值为10。',
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
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'description' => '调用失败时，返回的错误码。更多信息，请参见[错误码](~~145071~~)。
',
                'type' => 'string',
                'example' => '200',
              ),
              'RequestId' => 
              array (
                'description' => '阿里云为该请求生成的唯一标识符。',
                'type' => 'string',
                'example' => '06DC77A0-4622-42DB-9EE0-25FIOHS82JK1',
              ),
              'ErrorMessage' => 
              array (
                'description' => '调用失败时，返回的出错信息。',
                'type' => 'string',
                'example' => 'tenant auth error',
              ),
              'Success' => 
              array (
                'description' => '是否调用成功：
- **true**：调用成功。
- **false**：调用失败。
',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Data' => 
              array (
                'description' => '调用成功时，返回时间模板信息。',
                'type' => 'object',
                'properties' => 
                array (
                  'PageSize' => 
                  array (
                    'description' => '每页显示的条数。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '10',
                  ),
                  'Total' => 
                  array (
                    'description' => '总条数。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                  'PageCount' => 
                  array (
                    'description' => '总页数。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                  'Page' => 
                  array (
                    'description' => '当前页面号。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                  'List' => 
                  array (
                    'description' => '返回的模板列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'AllDay' => 
                        array (
                          'description' => '是否7天*24小时录像：

- 1：是。
- 0：否，详细配置请查看TimeSectionList参数。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '1',
                        ),
                        'Default' => 
                        array (
                          'description' => '是否是默认模板：

- **1**：默认模板。
- **0**：自定义模板。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '1',
                        ),
                        'Name' => 
                        array (
                          'description' => '时间模板名称。',
                          'type' => 'string',
                          'example' => 'exampleName',
                        ),
                        'TemplateId' => 
                        array (
                          'description' => '时间模板ID。',
                          'type' => 'string',
                          'example' => 'adxxx',
                        ),
                        'TimeSectionList' => 
                        array (
                          'description' => '时间模板信息。',
                          'type' => 'array',
                          'items' => 
                          array (
                            'type' => 'object',
                            'properties' => 
                            array (
                              'End' => 
                              array (
                                'description' => '每天结束的时间，单位为秒。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '60000',
                              ),
                              'DayOfWeek' => 
                              array (
                                'description' => '每周的周几，取值范围0~6，表示周日~周六。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '0',
                              ),
                              'Begin' => 
                              array (
                                'description' => '每天开始的时间，单位为秒。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '20000',
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
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"200\\",\\n  \\"RequestId\\": \\"06DC77A0-4622-42DB-9EE0-25FIOHS82JK1\\",\\n  \\"ErrorMessage\\": \\"tenant auth error\\",\\n  \\"Success\\": true,\\n  \\"Data\\": {\\n    \\"PageSize\\": 10,\\n    \\"Total\\": 1,\\n    \\"PageCount\\": 1,\\n    \\"Page\\": 1,\\n    \\"List\\": [\\n      {\\n        \\"AllDay\\": 1,\\n        \\"Default\\": 1,\\n        \\"Name\\": \\"exampleName\\",\\n        \\"TemplateId\\": \\"adxxx\\",\\n        \\"TimeSectionList\\": [\\n          {\\n            \\"End\\": 60000,\\n            \\"DayOfWeek\\": 0,\\n            \\"Begin\\": 20000\\n          }\\n        ]\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<QueryTimeTemplateResponse>\\n<RequestId>06DC77A0-4622-42DB-9EE0-25FIOHS82JK1</RequestId>\\n<Data>\\n    <Total>2</Total>\\n    <PageCount>1</PageCount>\\n    <Page>1</Page>\\n    <PageSize>10</PageSize>\\n    <List>\\n        <TemplateId>joijoz***</TemplateId>\\n        <Name>testtime1</Name>\\n        <AllDay>0</AllDay>\\n        <Default>0</Default>\\n        <TimeSectionList>\\n            <DayOfWeek>0</DayOfWeek>\\n            <Begin>20000</Begin>\\n            <End>60000</End>\\n        </TimeSectionList>\\n        <TimeSectionList>\\n            <DayOfWeek>1</DayOfWeek>\\n            <Begin>20000</Begin>\\n            <End>60000</End>\\n        </TimeSectionList>\\n    </List>\\n    <List>\\n        <TemplateId>joijoz***</TemplateId>\\n        <Name>testtime2</Name>\\n        <AllDay>0</AllDay>\\n        <Default>0</Default>\\n        <TimeSectionList>\\n            <DayOfWeek>1</DayOfWeek>\\n            <Begin>20000</Begin>\\n            <End>60000</End>\\n        </TimeSectionList>\\n        <TimeSectionList>\\n            <DayOfWeek>2</DayOfWeek>\\n            <Begin>20000</Begin>\\n            <End>60000</End>\\n        </TimeSectionList>\\n    </List>\\n</Data>\\n</QueryTimeTemplateResponse>","errorExample":""}]',
      'title' => '查询设备录像在云上的存储生命周期',
      'summary' => '调用该接口查询设备的时间模板信息。',
      'requestParamsDescription' => '调用API时，除了本文介绍的该API的特有请求参数，还需传入公共请求参数。公共请求参数说明，请参见[公共参数](~~141505~~)文档。',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'QueryDeviceEventRecord' => 
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
      ),
      'systemTags' => 
      array (
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ProductKey',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'IPC设备所属产品的ProductKey。
您可以在物联网平台控制台**产品**页查看或调用[QueryProductList](~~69271~~)查看当前账号下所有产品的信息。
><notice> 如果传入该参数，需同时传入**DeviceName**。
></notice>',
            'type' => 'string',
            'required' => false,
            'example' => 'a1BwAGV****',
          ),
        ),
        1 => 
        array (
          'name' => 'DeviceName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'IPC设备的设备名称。
您可以在物联网平台控制台的**设备**页查看**DeviceName**。
><notice> 如果传入该参数，需同时传入**ProductKey**。
></notice>',
            'type' => 'string',
            'required' => false,
            'example' => 'camera1',
          ),
        ),
        2 => 
        array (
          'name' => 'IotId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'IPC设备的设备ID。物联网平台为该设备颁发的ID，设备的唯一标识符。可调用物联网平台[QueryDeviceDetail](~~69594~~)查询。

><notice> 如果传入该参数，则无需传入**ProductKey**和**DeviceName**。**IotId**作为设备唯一标识符，和**ProductKey**与**DeviceName**的组合是一一对应的关系。如果您同时传入**IotId**和**ProductKey**与**DeviceName**的组合，则以**IotId**为准。
></notice>',
            'type' => 'string',
            'required' => false,
            'example' => 'zLZyi6aOLyOSHa9hsPyD00****',
          ),
        ),
        3 => 
        array (
          'name' => 'EventId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '智能告警事件ID。可通过[QueryDeviceEvent](~~107916~~)接口获取。',
            'type' => 'string',
            'required' => true,
            'example' => '907084996e1d44788d0*****43906_160803*****37',
          ),
        ),
        4 => 
        array (
          'name' => 'IotInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。

<props="china">您可在物联网平台控制台的**实例概览**页面，查看当前实例的**ID**。若有ID值，必须传入该ID值，否则调用会失败。</props>

<props="china">
> 如果公共实例没有ID值，请参见[如何获取实例ID](~~267533~~)。</props>

<props="intl">无需传入此参数。</props>',
            'type' => 'string',
            'required' => false,
            'example' => 'iot-cn-n6w1****z0t',
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
              'Code' => 
              array (
                'description' => '接口返回码：

- **200**：表示成功。
- 其它：表示错误码。错误码详情，请参见[错误码](~~145071~~)。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'RequestId' => 
              array (
                'description' => '阿里云为该请求生成的唯一标识符。',
                'type' => 'string',
                'example' => '06DC77A0-4622-42DB-9EE0-25FIOHS82JK1',
              ),
              'ErrorMessage' => 
              array (
                'description' => '调用失败时，返回的出错信息。',
                'type' => 'string',
                'example' => 'tenant auth error',
              ),
              'Success' => 
              array (
                'description' => '是否调用成功：
- **true**：调用成功。
- **false**：调用失败。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Data' => 
              array (
                'description' => '查询结果。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'EndTime' => 
                    array (
                      'description' => '录像结束时间。',
                      'type' => 'string',
                      'example' => '2021-09-08 15:56:32',
                    ),
                    'FileName' => 
                    array (
                      'description' => '录像文件名。',
                      'type' => 'string',
                      'example' => 'file1',
                    ),
                    'VodUrl' => 
                    array (
                      'description' => '录像文件的URL。

> URL中包含鉴权信息，且单次有效，不可重复使用。',
                      'type' => 'string',
                      'example' => 'rtmp://****/****.mp4',
                    ),
                    'BeginTime' => 
                    array (
                      'description' => '录像开始时间。',
                      'type' => 'string',
                      'example' => '2021-09-08 15:55:35',
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
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": 200,\\n  \\"RequestId\\": \\"06DC77A0-4622-42DB-9EE0-25FIOHS82JK1\\",\\n  \\"ErrorMessage\\": \\"tenant auth error\\",\\n  \\"Success\\": true,\\n  \\"Data\\": [\\n    {\\n      \\"EndTime\\": \\"2021-09-08 15:56:32\\",\\n      \\"FileName\\": \\"file1\\",\\n      \\"VodUrl\\": \\"rtmp://****/****.mp4\\",\\n      \\"BeginTime\\": \\"2021-09-08 15:55:35\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<QueryDeviceEventRecordResponse>\\n<RequestId>06DC77A0-4622-42DB-9EE0-25FIOHS82JK1</RequestId>\\n<Data>\\n    <EndTime>2021-09-08 15:56:32</EndTime>\\n    <FileName>file1</FileName>\\n    <BeginTime>2021-09-08 15:55:35</BeginTime>\\n    <VodUrl>rtmp://****/****.mp4</VodUrl>\\n</Data>\\n<Code>200</Code>\\n<Success>true</Success>\\n</QueryDeviceEventRecordResponse>","errorExample":""}]',
      'title' => '获取事件录像',
      'summary' => '调用该接口获取IPC设备的指定智能告警事件，对应的录像文件URL。',
      'requestParamsDescription' => '调用API时，除了本文介绍的该API的特有请求参数，还需传入公共请求参数。公共请求参数说明，请参见[公共参数](~~141505~~)文档。',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'QueryDeviceVodUrl' => 
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
      ),
      'systemTags' => 
      array (
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'FileName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '录像文件名。可调用物联网平台提供的[InvokeThingService](~~69584~~)查询，其中请求参数示例，请参见下方的**请求参数补充说明**。

> 录像文件名长度不得超过180个字符。',
            'type' => 'string',
            'required' => true,
            'example' => 'file1',
          ),
        ),
        1 => 
        array (
          'name' => 'Scheme',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '协议类型：
- **rtmp**：RTMP协议。
- **flv**：HTTP-FLV协议。
- **hls**：HLS协议。
 > HLS协议使用限制详细内容，请参见[云端开发](~~208584~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'rtmp',
          ),
        ),
        2 => 
        array (
          'name' => 'SeekTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '相对于录像开始时间**BeginTime**的偏移量，单位为秒，默认值为0。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '0',
            'default' => '0',
          ),
        ),
        3 => 
        array (
          'name' => 'IotInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。您可在物联网平台控制台的**实例概览**页面，查看当前实例的**ID**。

><notice>
- 若有ID值，必须传入该ID值，否则调用会失败。
- 若无<props="intl"><ph>**实例概览**页面或</ph></props>ID值，则无需传入。

></notice>

实例的更多信息，请参见[实例概述](~~356505~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'iot-cn-n6w1y59****',
          ),
        ),
        4 => 
        array (
          'name' => 'ProductKey',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'IPC设备所属产品的ProductKey。
您可以在物联网平台控制台**产品**页查看或调用[QueryProductList](~~69271~~)查看当前账号下所有产品的信息。
><notice> 如果传入该参数，需同时传入**DeviceName**。
></notice>',
            'type' => 'string',
            'required' => false,
            'example' => 'a1BwAGV****',
          ),
        ),
        5 => 
        array (
          'name' => 'DeviceName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'IPC设备的设备名称。
您可以在物联网平台控制台的**设备**页查看**DeviceName**。
><notice> 如果传入该参数，需同时传入**ProductKey**。
></notice>',
            'type' => 'string',
            'required' => false,
            'example' => 'camera1',
          ),
        ),
        6 => 
        array (
          'name' => 'EnableStun',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'boolean',
            'required' => false,
            'default' => 'false',
          ),
        ),
        7 => 
        array (
          'name' => 'ShouldEncrypt',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否加密：
- **true**：加密
- **false**（默认）：不加密',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
            'default' => 'false',
          ),
        ),
        8 => 
        array (
          'name' => 'IotId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'IPC设备的设备ID。物联网平台为该设备颁发的ID，设备的唯一标识符。可调用物联网平台[QueryDeviceDetail](~~69594~~)查询。

><notice> 如果传入该参数，则无需传入**ProductKey**和**DeviceName**。**IotId**作为设备唯一标识符，和**ProductKey**与**DeviceName**的组合是一一对应的关系。如果您同时传入**IotId**和**ProductKey**与**DeviceName**的组合，则以**IotId**为准。
></notice>',
            'type' => 'string',
            'required' => false,
            'example' => 'zLZyi6aOLyOSHa9hsPyD00****',
          ),
        ),
        9 => 
        array (
          'name' => 'UrlValidDuration',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'URL有效期，取值范围为10~14400，单位为秒。默认值为10。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '60',
          ),
        ),
        10 => 
        array (
          'name' => 'PlayUnLimited',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '播放地址是否可以无限次使用：
- **true**：10秒内可无限次使用。
- **false**（默认）：仅可使用一次。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
            'default' => 'false',
          ),
        ),
        11 => 
        array (
          'name' => 'EncryptType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '加密类型。目前仅支持I帧加密，取值为0。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '0',
            'default' => '0',
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
              'Code' => 
              array (
                'description' => '接口返回码：

- **200**：表示成功。
- 其它：表示错误码。错误码详情，请参见[错误码](~~145071~~)。',
                'type' => 'string',
                'example' => '200',
              ),
              'ErrorMessage' => 
              array (
                'description' => '调用失败时，返回的出错信息。',
                'type' => 'string',
                'example' => 'product is not active.',
              ),
              'RequestId' => 
              array (
                'description' => '阿里云为该请求生成的唯一标识符。',
                'type' => 'string',
                'example' => '06DC77A0-4622-42DB-9EE0-25FIOHS82JK1',
              ),
              'Success' => 
              array (
                'description' => '是否调用成功：
- **true**：调用成功。
- **false**：调用失败。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Data' => 
              array (
                'description' => '查询结果。',
                'type' => 'object',
                'properties' => 
                array (
                  'DecryptKey' => 
                  array (
                    'description' => '解密密钥。
设置**ShouldEncrypt**参数为**true**时，生成解密密钥。',
                    'type' => 'string',
                    'example' => '{"iv": "MDEy****OTo7PD0+Pw==","key": "eA2r****fHjOmnyBfQ=="}',
                  ),
                  'StunInfo' => 
                  array (
                    'type' => 'string',
                  ),
                  'VodUrl' => 
                  array (
                    'description' => '本地录像URL。',
                    'type' => 'string',
                    'example' => 'rtmp://***/***.mp4',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"200\\",\\n  \\"RequestId\\": \\"06DC77A0-4622-42DB-9EE0-25FIOHS82JK1\\",\\n  \\"ErrorMessage\\": \\"product is not active.\\",\\n  \\"Success\\": true,\\n  \\"Data\\": {\\n    \\"VodUrl\\": \\"rtmp://***/***.mp4\\",\\n    \\"DecryptKey\\": \\"{\\\\\\"iv\\\\\\": \\\\\\"MDEy****OTo7PD0+Pw==\\\\\\",\\\\\\"key\\\\\\": \\\\\\"eA2r****fHjOmnyBfQ==\\\\\\"}\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<QueryDeviceVodUrlResponse>\\n<RequestId>06DC77A0-4622-42DB-9EE0-25FIOHS82JK1</RequestId>\\n<Data>\\n    <DecryptKey>\\n        <iv>MDEy****OTo7PD0+Pw==</iv>\\n        <key>eA2r****fHjOmnyBfQ==</key>\\n    </DecryptKey>\\n    <VodUrl>rtmp://***/***.mp4</VodUrl>\\n</Data>\\n<Code>200</Code>\\n<Success>true</Success>\\n</QueryDeviceVodUrlResponse>","errorExample":""}]',
      'title' => '查询本地录像列表',
      'summary' => '调用该接口，获取本地NVR设备或IPC设备的存储卡中，指定录像文件名的录像文件URL。',
      'requestParamsDescription' => '## 请求参数补充说明
InvokeThingService接口请求参数示例如下，详细信息，请参见[本地录像播放](~~208584~~)。
```
https://iot.cn-shanghai.aliyuncs.com/?Action=InvokeThingService
&ProductKey=a1BwAGV****
&DeviceName=device1
&Identifier=QueryRecordList  //服务的标识符
&Args={                      //要启用服务的入参信息，数据格式为JSON String
        "BeginTime":10,      //录像文件查询范围的起始时间，单位为秒，取值范围为0~2147483647
        "Type":0,            //录像类型。0表示计划录像，1表示报警录像，2表示主动录像，99表示所有录像
        "QuerySize":2,       //查询记录数，取值范围为0~128
        "EndTime":1541662222 //录像文件查询范围的结束时间，单位为秒，取值范围为0~2147483647
}
&<公共请求参数>
```',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'QueryMonthRecord' => 
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
      ),
      'systemTags' => 
      array (
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ProductKey',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'IPC设备所属产品的ProductKey。
您可以在物联网平台控制台**产品**页查看或调用[QueryProductList](~~69271~~)查看当前账号下所有产品的信息。
><notice> 如果传入该参数，需同时传入**DeviceName**。
></notice>',
            'type' => 'string',
            'required' => false,
            'example' => 'a1BwAGV****',
          ),
        ),
        1 => 
        array (
          'name' => 'DeviceName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'IPC设备的设备名称。
您可以在物联网平台控制台的**设备**页查看**DeviceName**。
><notice> 如果传入该参数，需同时传入**ProductKey**。
></notice>',
            'type' => 'string',
            'required' => false,
            'example' => 'camera1',
          ),
        ),
        2 => 
        array (
          'name' => 'IotId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'IPC设备的设备ID。物联网平台为该设备颁发的ID，设备的唯一标识符。可调用物联网平台[QueryDeviceDetail](~~69594~~)查询。

><notice> 如果传入该参数，则无需传入**ProductKey**和**DeviceName**。**IotId**作为设备唯一标识符，和**ProductKey**与**DeviceName**的组合是一一对应的关系。如果您同时传入**IotId**和**ProductKey**与**DeviceName**的组合，则以**IotId**为准。
></notice>',
            'type' => 'string',
            'required' => false,
            'example' => 'VrJwPGjC1sJlqPjZA3cxg4****',
          ),
        ),
        3 => 
        array (
          'name' => 'Month',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '要查询的月份，格式为YYYYMM。',
            'type' => 'string',
            'required' => true,
            'example' => '201901',
          ),
        ),
        4 => 
        array (
          'name' => 'IotInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。

<props="china">您可在物联网平台控制台的**实例概览**页面，查看当前实例的**ID**。若有ID值，必须传入该ID值，否则调用会失败。</props>

<props="china">
> 如果公共实例没有ID值，请参见[如何获取实例ID](~~267533~~)。</props>

<props="intl">无需传入此参数。</props>',
            'type' => 'string',
            'required' => false,
            'example' => 'iot-cn-n6w1y****',
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
              'Code' => 
              array (
                'description' => '接口返回码：

- **200**：表示成功。
- 其它：表示错误码。错误码详情，请参见[错误码](~~145071~~)。',
                'type' => 'string',
                'example' => '200',
              ),
              'Data' => 
              array (
                'description' => '返回数据的长度为当月天数，每位数据表示当天是否有录像信息，其中：

- **1**：有录像。
- **0**：未录像。',
                'type' => 'string',
                'example' => '110111111011111001111100111110',
              ),
              'ErrorMessage' => 
              array (
                'description' => '调用失败时，返回的出错信息。',
                'type' => 'string',
                'example' => 'tenant auth error.',
              ),
              'RequestId' => 
              array (
                'description' => '阿里云为该请求生成的唯一标识符。',
                'type' => 'string',
                'example' => '06DC77A0-4622-42DB-9EE0-25FIOHS82JK1',
              ),
              'Success' => 
              array (
                'description' => '是否调用成功：
- **true**：调用成功。
- **false**：调用失败。',
                'type' => 'boolean',
                'example' => 'true',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"200\\",\\n  \\"Data\\": \\"110111111011111001111100111110\\",\\n  \\"ErrorMessage\\": \\"tenant auth error.\\",\\n  \\"RequestId\\": \\"06DC77A0-4622-42DB-9EE0-25FIOHS82JK1\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<QueryMonthRecordResponse>\\n<RequestId>06DC77A0-4622-42DB-9EE0-25FIOHS82JK1</RequestId>\\n<Data>110111111011111001111100111110</Data>\\n<Code>200</Code>\\n<Success>true</Success>\\n</QueryMonthRecordResponse>","errorExample":""}]',
      'title' => '查询月录像',
      'summary' => '调用该接口，查询IPC设备某月份的每一天是否有录像。',
      'requestParamsDescription' => '调用API时，除了本文介绍的该API的特有请求参数，还需传入公共请求参数。公共请求参数说明，请参见[公共参数](~~141505~~)文档。
',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'QueryDeviceRecordLifeCycle' => 
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
      ),
      'operationType' => 'readAndWrite',
      'systemTags' => 
      array (
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'DeviceList',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => 'IPC设备的IotId列表。IotId是物联网平台为该设备颁发的ID，设备的唯一标识符。

可调用物联网平台[QueryDeviceDetail](~~69594~~)查询。',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'string',
            ),
            'required' => true,
            'example' => '["C47T6xwp6ms4bNlkHRWCg4****", "d7XmBoJhAr88C6PelXDF00****"]',
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
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'description' => '接口返回码：

- **200**：表示成功。
- 其它：表示错误码。错误码详情，请参见[错误码](~~145071~~)。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'RequestId' => 
              array (
                'description' => '阿里云为该请求生成的唯一标识符。',
                'type' => 'string',
                'example' => '06DC77A0-4622-42DB-9EE0-25FIOHS82JK1',
              ),
              'ErrorMessage' => 
              array (
                'description' => '调用失败时，返回的出错信息。',
                'type' => 'string',
                'example' => 'InvalidParameters',
              ),
              'Success' => 
              array (
                'description' => '是否调用成功：

- **true**：调用成功。
- **false**：调用失败。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Data' => 
              array (
                'description' => '查询结果。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Day' => 
                    array (
                      'description' => 'IPC的录像生命周期。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '7',
                    ),
                    'IotId' => 
                    array (
                      'description' => '设备ID。',
                      'type' => 'string',
                      'example' => 'C47T6xwp6ms4bNlkHRWCg4****',
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
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": 200,\\n  \\"RequestId\\": \\"06DC77A0-4622-42DB-9EE0-25FIOHS82JK1\\",\\n  \\"ErrorMessage\\": \\"InvalidParameters\\",\\n  \\"Success\\": true,\\n  \\"Data\\": [\\n    {\\n      \\"Day\\": 7,\\n      \\"IotId\\": \\"C47T6xwp6ms4bNlkHRWCg4****\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<QueryDeviceRecordLifeCycleResponse>\\n    <RequestId>06DC77A0-4622-42DB-9EE0-25FIOHS82JK1</RequestId>\\n    <Data>\\n        <IotId>C47T6xwp6ms4bNlkHRWCg4****</IotId>\\n        <Day>7</Day>\\n    </Data>\\n    <ErrorMessage>InvalidParameters</ErrorMessage>\\n    <Code>200</Code>\\n    <Success>true</Success>\\n</QueryDeviceRecordLifeCycleResponse>","errorExample":""}]',
      'title' => '获取设备云存储录像生命周期',
      'summary' => '调用该接口，获取IPC设备在云端保存录像文件的时间，即录像生命周期。',
      'requestParamsDescription' => '调用API时，除了本文介绍的该API的特有请求参数，还需传入公共请求参数。公共请求参数说明，请参见[公共参数](~~141505~~)文档。',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'QueryEventRecordPlanDetail' => 
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
      ),
      'operationType' => 'readAndWrite',
      'systemTags' => 
      array (
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'PlanId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '智能告警事件录像计划ID。可调用[QueryEventRecordPlans](~~107907~~)查询。',
            'type' => 'string',
            'required' => true,
            'example' => '5b60bf0dd55944c19d7817442bc9****',
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
              'Code' => 
              array (
                'description' => '调用失败时，返回的错误码。更多信息，请参见[错误码](~~145071~~)。',
                'type' => 'string',
                'example' => '200',
              ),
              'RequestId' => 
              array (
                'description' => '阿里云为该请求生成的唯一标识符。',
                'type' => 'string',
                'example' => '06DC77A0-4622-42DB-9EE0-25FIOHS82JK1',
              ),
              'ErrorMessage' => 
              array (
                'description' => '调用失败时，返回的出错信息。',
                'type' => 'string',
                'example' => 'tenant auth error',
              ),
              'Success' => 
              array (
                'description' => '是否调用成功：
- **true**：调用成功。
- **false**：调用失败。
',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Data' => 
              array (
                'description' => '智能告警事件录像计划详情。',
                'type' => 'object',
                'properties' => 
                array (
                  'PreRecordDuration' => 
                  array (
                    'description' => '预录时长，单位为秒。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '30',
                  ),
                  'Name' => 
                  array (
                    'description' => '智能告警事件录像名称。',
                    'type' => 'string',
                    'example' => 'record1',
                  ),
                  'PlanId' => 
                  array (
                    'description' => '智能告警事件录像计划ID。',
                    'type' => 'string',
                    'example' => '5b60bf0dd55944c19d7817442bc9****',
                  ),
                  'TemplateId' => 
                  array (
                    'description' => '时间模板ID。',
                    'type' => 'string',
                    'example' => '36f06322442e4e3f85a5ae8862c9****',
                  ),
                  'RecordDuration' => 
                  array (
                    'description' => '录像时长，包括预录时长。单位为秒。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '120',
                  ),
                  'TemplateInfo' => 
                  array (
                    'description' => '时间模板详情。',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'AllDay' => 
                      array (
                        'description' => '是否7天*24小时录像：

- 1：是。
- 0：否，详细配置请查看TimeSectionList参数。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'example' => '0',
                      ),
                      'Default' => 
                      array (
                        'description' => '模板类型：
- 1：默认模板
- 0：自定义模板',
                        'type' => 'integer',
                        'format' => 'int32',
                        'example' => '0',
                      ),
                      'Name' => 
                      array (
                        'description' => '时间模板名称。',
                        'type' => 'string',
                        'example' => 'temp1',
                      ),
                      'TemplateId' => 
                      array (
                        'description' => '时间模板ID。',
                        'type' => 'string',
                        'example' => '36f06322442e4e3f85a5ae8862c9****',
                      ),
                      'TimeSectionList' => 
                      array (
                        'description' => 'AllDay为0时，时间模板的详细信息。',
                        'type' => 'array',
                        'items' => 
                        array (
                          'type' => 'object',
                          'properties' => 
                          array (
                            'End' => 
                            array (
                              'description' => '每天结束的时间，取值范围1~86399，单位为秒。',
                              'type' => 'integer',
                              'format' => 'int32',
                              'example' => '20000',
                            ),
                            'DayOfWeek' => 
                            array (
                              'description' => '每周的周几，取值范围0~6，表示周日~周六。',
                              'type' => 'integer',
                              'format' => 'int32',
                              'example' => '0',
                            ),
                            'Begin' => 
                            array (
                              'description' => '每天开始的时间，取值范围0~86399，单位为秒。',
                              'type' => 'integer',
                              'format' => 'int32',
                              'example' => '6000',
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
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"200\\",\\n  \\"RequestId\\": \\"06DC77A0-4622-42DB-9EE0-25FIOHS82JK1\\",\\n  \\"ErrorMessage\\": \\"tenant auth error\\",\\n  \\"Success\\": true,\\n  \\"Data\\": {\\n    \\"PreRecordDuration\\": 30,\\n    \\"Name\\": \\"record1\\",\\n    \\"PlanId\\": \\"5b60bf0dd55944c19d7817442bc9****\\",\\n    \\"TemplateId\\": \\"36f06322442e4e3f85a5ae8862c9****\\",\\n    \\"RecordDuration\\": 120,\\n    \\"TemplateInfo\\": {\\n      \\"AllDay\\": 0,\\n      \\"Default\\": 0,\\n      \\"Name\\": \\"temp1\\",\\n      \\"TemplateId\\": \\"36f06322442e4e3f85a5ae8862c9****\\",\\n      \\"TimeSectionList\\": [\\n        {\\n          \\"End\\": 20000,\\n          \\"DayOfWeek\\": 0,\\n          \\"Begin\\": 6000\\n        }\\n      ]\\n    }\\n  }\\n}","errorExample":""},{"type":"xml","example":"<QueryEventRecordPlanDetailResponse> \\n<RequestId>06DC77A0-4622-42DB-9EE0-25FIOHS82JK1</RequestId>\\n<Data>\\n    <RecordDuration>120</RecordDuration>\\n    <PlanId>5b60bf0dd55944c19d7817442bc9****</PlanId>\\n    <PreRecordDuration>30</PreRecordDuration>\\n    <TemplateId>36f06322442e4e3f85a5ae8862c9****</TemplateId>\\n    <Name>record1</Name>\\n    <TemplateInfo>\\n        <AllDay>0</AllDay>\\n        <Default>0</Default>\\n        <TemplateId>36f06322442e4e3f85a5ae8862c9****</TemplateId>\\n        <Name>temp1</Name>\\n        <TimeSectionList>\\n            <DayOfWeek>0</DayOfWeek>\\n            <Begin>6000</Begin>\\n            <End>20000</End>\\n        </TimeSectionList>\\n        <TimeSectionList>\\n            <DayOfWeek>5</DayOfWeek>\\n            <Begin>0</Begin>\\n            <End>40000</End>\\n        </TimeSectionList>\\n    </TemplateInfo>\\n</Data>\\n<Code>200</Code>\\n<Success>true</Success>\\n</QueryEventRecordPlanDetailResponse> ","errorExample":""}]',
      'title' => '查询事件联动录像计划详情',
      'summary' => '调用该接口查询智能告警事件录像计划详情。',
      'requestParamsDescription' => '调用API时，除了本文介绍的该API的特有请求参数，还需传入公共请求参数。公共请求参数说明，请参见[公共参数](~~141505~~)文档。',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'QueryEventRecordPlanDeviceByDevice' => 
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
      ),
      'systemTags' => 
      array (
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'IotInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。

您可在物联网平台控制台的**实例概览**页面，查看当前实例的**ID**。若有ID值，必须传入该ID值，否则调用会失败。

> 如果公共实例没有ID值，请参见[如何获取实例ID](~~267533~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'iot-cn-n6w1y59****',
          ),
        ),
        1 => 
        array (
          'name' => 'ProductKey',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'IPC设备所属产品的ProductKey。
您可以在物联网平台控制台**产品**页查看或调用[QueryProductList](~~69271~~)查看当前账号下所有产品的信息。
><notice> 如果传入该参数，需同时传入**DeviceName**。
></notice>',
            'type' => 'string',
            'required' => false,
            'example' => 'a1BwAGV****',
          ),
        ),
        2 => 
        array (
          'name' => 'DeviceName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'IPC设备的设备名称。
您可以在物联网平台控制台的**设备**页查看**DeviceName**。
><notice> 如果传入该参数，需同时传入**ProductKey**。
></notice>',
            'type' => 'string',
            'required' => false,
            'example' => 'camera1',
          ),
        ),
        3 => 
        array (
          'name' => 'IotId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'IPC设备的设备ID。物联网平台为该设备颁发的ID，设备的唯一标识符。可调用物联网平台[QueryDeviceDetail](~~69594~~)查询。

><notice> 如果传入该参数，则无需传入**ProductKey**和**DeviceName**。**IotId**作为设备唯一标识符，和**ProductKey**与**DeviceName**的组合是一一对应的关系。如果您同时传入**IotId**和**ProductKey**与**DeviceName**的组合，则以**IotId**为准。
></notice>',
            'type' => 'string',
            'required' => false,
            'example' => 'zLZyi6aOLyOSHa9hsPyD00****',
          ),
        ),
        4 => 
        array (
          'name' => 'StreamType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '码流类型：
- **0**（默认）：主码流
- **1**：辅码流
',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '0',
            'default' => '0',
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
              'Code' => 
              array (
                'description' => '接口返回码：

- **200**：表示成功。
- 其它：表示错误码。错误码详情，请参见[错误码](~~145071~~)。',
                'type' => 'string',
                'example' => '200',
              ),
              'RequestId' => 
              array (
                'description' => '阿里云为该请求生成的唯一标识符。',
                'type' => 'string',
                'example' => '06DC77A0-4622-42DB-9EE0-25FIOHS82JK1',
              ),
              'ErrorMessage' => 
              array (
                'description' => '调用失败时，返回的出错信息。',
                'type' => 'string',
                'example' => 'tenant auth error',
              ),
              'Success' => 
              array (
                'description' => '是否调用成功：
- **true**：调用成功。
- **false**：调用失败。
',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Data' => 
              array (
                'description' => '查询结果。',
                'type' => 'object',
                'properties' => 
                array (
                  'PreRecordDuration' => 
                  array (
                    'description' => '预录时长，单位为秒。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '5',
                  ),
                  'Name' => 
                  array (
                    'description' => '智能告警事件录像名称。',
                    'type' => 'string',
                    'example' => 'planAA',
                  ),
                  'PlanId' => 
                  array (
                    'description' => '智能告警事件录像计划ID。',
                    'type' => 'string',
                    'example' => '5b60bf0dd55944c19d7817442bc9****',
                  ),
                  'TemplateId' => 
                  array (
                    'description' => '时间模板ID。',
                    'type' => 'string',
                    'example' => '36f06322442e4e3f85a5ae8862c9****',
                  ),
                  'RecordDuration' => 
                  array (
                    'description' => '录像时长，包括预录时长，单位为秒。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '120',
                  ),
                  'TemplateInfo' => 
                  array (
                    'description' => '时间模板详情。',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'AllDay' => 
                      array (
                        'description' => '是否7天*24小时录像：

- **1**：是。
- **0**：否，详细配置请查看**TimeSectionList**参数。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'example' => '0',
                      ),
                      'Default' => 
                      array (
                        'description' => '时间模板类型：
- **1**：默认模板
- **0**：自定义模板',
                        'type' => 'integer',
                        'format' => 'int32',
                        'example' => '0',
                      ),
                      'Name' => 
                      array (
                        'description' => '时间模板名称。',
                        'type' => 'string',
                        'example' => 'testtime1',
                      ),
                      'TemplateId' => 
                      array (
                        'description' => '时间模板ID。',
                        'type' => 'string',
                        'example' => '36f06322442e4e3f85a5ae8862c9****',
                      ),
                      'TimeSectionList' => 
                      array (
                        'description' => '时间模板列表。',
                        'type' => 'array',
                        'items' => 
                        array (
                          'type' => 'object',
                          'properties' => 
                          array (
                            'End' => 
                            array (
                              'description' => '每天结束的时间，取值范围1~86399，单位为秒。',
                              'type' => 'integer',
                              'format' => 'int32',
                              'example' => '86399',
                            ),
                            'DayOfWeek' => 
                            array (
                              'description' => '每周的周几，取值范围0~6，表示周日~周六。',
                              'type' => 'integer',
                              'format' => 'int32',
                              'example' => '0',
                            ),
                            'Begin' => 
                            array (
                              'description' => '每天开始的时间，取值范围0~86399，单位为秒。',
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
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"200\\",\\n  \\"RequestId\\": \\"06DC77A0-4622-42DB-9EE0-25FIOHS82JK1\\",\\n  \\"ErrorMessage\\": \\"tenant auth error\\",\\n  \\"Success\\": true,\\n  \\"Data\\": {\\n    \\"PreRecordDuration\\": 5,\\n    \\"Name\\": \\"planAA\\",\\n    \\"PlanId\\": \\"5b60bf0dd55944c19d7817442bc9****\\",\\n    \\"TemplateId\\": \\"36f06322442e4e3f85a5ae8862c9****\\",\\n    \\"RecordDuration\\": 120,\\n    \\"TemplateInfo\\": {\\n      \\"AllDay\\": 0,\\n      \\"Default\\": 0,\\n      \\"Name\\": \\"testtime1\\",\\n      \\"TemplateId\\": \\"36f06322442e4e3f85a5ae8862c9****\\",\\n      \\"TimeSectionList\\": [\\n        {\\n          \\"End\\": 86399,\\n          \\"DayOfWeek\\": 0,\\n          \\"Begin\\": 0\\n        }\\n      ]\\n    }\\n  }\\n}","errorExample":""},{"type":"xml","example":"<QueryEventRecordPlanByDeviceResponse>   \\n    <RequestId>06DC77A0-4622-42DB-9EE0-25FIOHS82JK1</RequestId>\\n    <Data>\\n        <PlanId>5b60bf0dd55944c19d7817442bc9****</PlanId>\\n        <Name>planAA</Name>\\n        <PreRecordDuration>5</PreRecordDuration>\\n        <RecordDuration>120</RecordDuration>\\n        <TemplateId>36f06322442e4e3f85a5ae8862c9****</TemplateId>\\n        <TemplateInfo>\\n            <TemplateId>36f06322442e4e3f85a5ae8862c9****</TemplateId>\\n            <Name>testtime1</Name>\\n            <AllDay>0</AllDay>\\n            <Default>0</Default>\\n            <TimeSectionList>\\n                <DayOfWeek>1</DayOfWeek>\\n                <Begin>0</Begin>\\n                <End>86399</End>\\n            </TimeSectionList>\\n            <TimeSectionList>\\n                <DayOfWeek>5</DayOfWeek>\\n                <Begin>0</Begin>\\n                <End>40000</End>\\n            </TimeSectionList>\\n        </TemplateInfo>\\n    </Data>\\n    <Code>200</Code>\\n    <Success>true</Success>\\n</QueryEventRecordPlanByDeviceResponse>","errorExample":""}]',
      'title' => '根据设备查询事件联动录像计划',
      'summary' => '调用该接口，根据IPC的设备ID查询智能告警事件录像计划。',
      'requestParamsDescription' => '调用API时，除了本文介绍的该API的特有请求参数，还需传入公共请求参数。公共请求参数说明，请参见[公共参数](~~141505~~)文档。',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'QueryEventRecordPlanDeviceByPlan' => 
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
      ),
      'operationType' => 'readAndWrite',
      'systemTags' => 
      array (
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'PlanId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '智能告警事件录像计划ID。可调用[QueryEventRecordPlans](~~107907~~)查询。',
            'type' => 'string',
            'required' => true,
            'example' => '5b60bf0dd55944c19d7817442bc9****',
          ),
        ),
        1 => 
        array (
          'name' => 'CurrentPage',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定从返回结果中的第几页开始显示，默认值1。',
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
            'description' => '每页显示的条数。最小值为1，最大值为50，默认值为10。',
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
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'description' => '调用失败时，返回的错误码。更多信息，请参见[错误码](~~145071~~)。',
                'type' => 'string',
                'example' => '200',
              ),
              'RequestId' => 
              array (
                'description' => '阿里云为该请求生成的唯一标识符。
',
                'type' => 'string',
                'example' => '06DC77A0-4622-42DB-9EE0-25FIOHS82JK1',
              ),
              'ErrorMessage' => 
              array (
                'description' => '调用失败时，返回的出错信息。',
                'type' => 'string',
                'example' => 'tenant auth error',
              ),
              'Success' => 
              array (
                'description' => '是否调用成功：
- **true**：调用成功。
- **false**：调用失败。
',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Data' => 
              array (
                'description' => '查询结果。',
                'type' => 'object',
                'properties' => 
                array (
                  'PageSize' => 
                  array (
                    'description' => '每页显示的条数。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '10',
                  ),
                  'Total' => 
                  array (
                    'description' => '总条数。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '2',
                  ),
                  'PageCount' => 
                  array (
                    'description' => '总页数。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                  'Page' => 
                  array (
                    'description' => '当前页面号。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                  'List' => 
                  array (
                    'description' => '设备信息。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'StreamType' => 
                        array (
                          'description' => '码流类型：
- **0**：主码流
- **1**：辅码流
',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '1',
                        ),
                        'IotId' => 
                        array (
                          'description' => '摄像头的设备ID。',
                          'type' => 'string',
                          'example' => 'P7WqhWvhplhHlWPO9Op5g4****',
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
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"200\\",\\n  \\"RequestId\\": \\"06DC77A0-4622-42DB-9EE0-25FIOHS82JK1\\",\\n  \\"ErrorMessage\\": \\"tenant auth error\\",\\n  \\"Success\\": true,\\n  \\"Data\\": {\\n    \\"PageSize\\": 10,\\n    \\"Total\\": 2,\\n    \\"PageCount\\": 1,\\n    \\"Page\\": 1,\\n    \\"List\\": [\\n      {\\n        \\"StreamType\\": 1,\\n        \\"IotId\\": \\"P7WqhWvhplhHlWPO9Op5g4****\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<QueryEventRecordPlanDeviceByPlanResponse>    \\n    <RequestId>06DC77A0-4622-42DB-9EE0-25FIOHS82JK1</RequestId>\\n    <Success>true</Success>\\n    <Data>\\n        <Total>2</Total>\\n        <PageCount>1</PageCount>\\n        <Page>1</Page>\\n        <PageSize>10</PageSize>\\n        <List>\\n            <IotId>P7WqhWvhplhHlWPO9Op5g4****</IotId>\\n            <StreamType>1</StreamType>\\n        </List>\\n        <List>\\n            <IotId>C47T6xwp6ms4bNlkHRWCg4****</IotId>\\n            <StreamType>1</StreamType>\\n        </List>\\n    </Data>\\n</QueryEventRecordPlanDeviceByPlanResponse>   ","errorExample":""}]',
      'title' => '查询事件联动录像计划摄像头列表',
      'summary' => '调用该接口，查询智能告警事件录像计划，关联的摄像头列表。',
      'requestParamsDescription' => '调用API时，除了本文介绍的该API的特有请求参数，还需传入公共请求参数。公共请求参数说明，请参见[公共参数](~~141505~~)文档。',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'QueryEventRecordPlans' => 
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
      ),
      'operationType' => 'readAndWrite',
      'systemTags' => 
      array (
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'CurrentPage',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定从返回结果中的第几页开始显示，默认值为1。',
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
            'description' => '每页显示的条数。最小值为1，最大值为50，默认值为10。',
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
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'description' => '调用失败时，返回的错误码。更多信息，请参见[错误码](~~145071~~)。',
                'type' => 'string',
                'example' => '200',
              ),
              'RequestId' => 
              array (
                'description' => '阿里云为该请求生成的唯一标识符。',
                'type' => 'string',
                'example' => '06DC77A0-4622-42DB-9EE0-25FIOHS82JK1',
              ),
              'ErrorMessage' => 
              array (
                'description' => '调用失败时，返回的出错信息。',
                'type' => 'string',
                'example' => 'tenant auth error',
              ),
              'Success' => 
              array (
                'description' => '是否调用成功：
- **true**：调用成功。
- **false**：调用失败。
',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Data' => 
              array (
                'description' => '查询结果。',
                'type' => 'object',
                'properties' => 
                array (
                  'PageSize' => 
                  array (
                    'description' => '每页显示的条数。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '10',
                  ),
                  'PageCount' => 
                  array (
                    'description' => '总页数。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                  'Total' => 
                  array (
                    'description' => '总条数。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                  'Page' => 
                  array (
                    'description' => '当前页面号。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                  'List' => 
                  array (
                    'description' => '智能告警事件录像计划列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'EventType' => 
                        array (
                          'description' => '智能告警事件类型。请在物联网平台控制台，**产品详情**页面的**功能定义**页签，找到**智能告警**，查看全部智能告警事件类型。

详细信息，请参考[智能告警事件](~~207701~~)。',
                          'type' => 'string',
                          'example' => '1',
                        ),
                        'RecordDuration' => 
                        array (
                          'description' => '录像时长，包括预录时长，单位为秒。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '60',
                        ),
                        'PreRecordDuration' => 
                        array (
                          'description' => '预录时长，单位为秒。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '5',
                        ),
                        'PlanId' => 
                        array (
                          'description' => '智能告警事件录像计划ID。',
                          'type' => 'string',
                          'example' => '5b60bf0dd55944c19d7817442bc9****',
                        ),
                        'Name' => 
                        array (
                          'description' => '智能告警事件录像名称。',
                          'type' => 'string',
                          'example' => 'test',
                        ),
                        'TemplateId' => 
                        array (
                          'description' => '时间模板ID。',
                          'type' => 'string',
                          'example' => '36f06322442e4e3f85a5ae8862c9****',
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
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"200\\",\\n  \\"RequestId\\": \\"06DC77A0-4622-42DB-9EE0-25FIOHS82JK1\\",\\n  \\"ErrorMessage\\": \\"tenant auth error\\",\\n  \\"Success\\": true,\\n  \\"Data\\": {\\n    \\"PageSize\\": 10,\\n    \\"PageCount\\": 1,\\n    \\"Total\\": 1,\\n    \\"Page\\": 1,\\n    \\"List\\": [\\n      {\\n        \\"EventType\\": \\"1\\",\\n        \\"RecordDuration\\": 60,\\n        \\"PreRecordDuration\\": 5,\\n        \\"PlanId\\": \\"5b60bf0dd55944c19d7817442bc9****\\",\\n        \\"Name\\": \\"test\\",\\n        \\"TemplateId\\": \\"36f06322442e4e3f85a5ae8862c9****\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<QueryEventRecordPlansResponse>   \\n    <RequestId>06DC77A0-4622-42DB-9EE0-25FIOHS82JK1</RequestId>\\n    <Success>true</Success>\\n    <Data>\\n        <Total>1</Total>\\n        <PageCount>1</PageCount>\\n        <Page>1</Page>\\n        <PageSize>10</PageSize>\\n        <List>\\n            <PlanId>5b60bf0dd55944c19d7817442bc9****</PlanId>\\n            <Name>planAA</Name>\\n            <PreRecordDuration>5</PreRecordDuration>\\n            <RecordDuration>60</RecordDuration>\\n            <TemplateId>36f06322442e4e3f85a5ae8862c9****</TemplateId>\\n        </List>\\n    </Data>\\n</QueryEventRecordPlansResponse>","errorExample":""}]',
      'title' => '查询事件录像计划列表',
      'summary' => '调用该接口查询智能告警事件录像计划列表。',
      'requestParamsDescription' => '调用API时，除了本文介绍的该API的特有请求参数，还需传入公共请求参数。公共请求参数说明，请参见[公共参数](~~141505~~)文档。',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'TriggerRecord' => 
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
      ),
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ProductKey',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'IPC设备所属产品的ProductKey。
您可以在物联网平台控制台**产品**页查看或调用[QueryProductList](~~69271~~)查看当前账号下所有产品的信息。
><notice> 如果传入该参数，需同时传入**DeviceName**。
></notice>',
            'type' => 'string',
            'required' => false,
            'example' => 'a1BwAGV****',
          ),
        ),
        1 => 
        array (
          'name' => 'DeviceName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'IPC设备的设备名称。
您可以在物联网平台控制台的**设备**页查看**DeviceName**。
><notice> 如果传入该参数，需同时传入**ProductKey**。
></notice>',
            'type' => 'string',
            'required' => false,
            'example' => 'camera1',
          ),
        ),
        2 => 
        array (
          'name' => 'IotId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'IPC设备的设备ID。物联网平台为该设备颁发的ID，设备的唯一标识符。可调用物联网平台[QueryDeviceDetail](~~69594~~)查询。

><notice> 如果传入该参数，则无需传入**ProductKey**和**DeviceName**。**IotId**作为设备唯一标识符，和**ProductKey**与**DeviceName**的组合是一一对应的关系。如果您同时传入**IotId**和**ProductKey**与**DeviceName**的组合，则以**IotId**为准。
></notice>',
            'type' => 'string',
            'required' => false,
            'example' => 'zLZyi6aOLyOSHa****yD000100',
          ),
        ),
        3 => 
        array (
          'name' => 'StreamType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '码流类型：
- **0**（默认）：主码流。
- **1**：辅码流。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '0',
            'default' => '0',
          ),
        ),
        4 => 
        array (
          'name' => 'PreRecordDuration',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '预录时长，取值范围0~10，单位为秒。

>设备具备预录功能时，才可生成预录时长，否则，预录时长为0。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '5',
          ),
        ),
        5 => 
        array (
          'name' => 'RecordDuration',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '录像时长，包括预录时长，取值范围10~7200，单位为秒。

> 单个录像文件长度最大为30分钟，当录像时长大于30分钟时，会自动切割成多个录像文件。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'example' => '60',
          ),
        ),
        6 => 
        array (
          'name' => 'IotInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。

<props="china">您可在物联网平台控制台的**实例概览**页面，查看当前实例的**ID**。若有ID值，必须传入该ID值，否则调用会失败。</props>

<props="china">
> 如果公共实例没有ID值，请参见[如何获取实例ID](~~267533~~)。</props>

<props="intl">无需传入此参数。</props>',
            'type' => 'string',
            'required' => false,
            'example' => 'iot-cn-n6w1y5****0t',
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
              'Code' => 
              array (
                'description' => '接口返回码：

- **200**：表示成功。
- 其它：表示错误码。错误码详情，请参见[错误码](~~145071~~)。',
                'type' => 'string',
                'example' => '200',
              ),
              'Data' => 
              array (
                'description' => 'IPC设备获取的录像上传后，生成的录像文件ID。',
                'type' => 'string',
                'example' => 'fc82774fa749485bad7d719f9670****',
              ),
              'ErrorMessage' => 
              array (
                'description' => '调用失败时，返回的出错信息。',
                'type' => 'string',
                'example' => 'tenant auth error',
              ),
              'RequestId' => 
              array (
                'description' => '阿里云为该请求生成的唯一标识符。',
                'type' => 'string',
                'example' => '06DC77A0-4622-42DB-9EE0-25FIOHS82JK1',
              ),
              'Success' => 
              array (
                'description' => '是否调用成功：
- **true**：调用成功。
- **false**：调用失败。
',
                'type' => 'boolean',
                'example' => 'true',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"200\\",\\n  \\"Data\\": \\"fc82774fa749485bad7d719f9670****\\",\\n  \\"ErrorMessage\\": \\"tenant auth error\\",\\n  \\"RequestId\\": \\"06DC77A0-4622-42DB-9EE0-25FIOHS82JK1\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<TriggerRecordResponse>\\n    <RequestId>06DC77A0-4622-42DB-9EE0-25FIOHS82JK1</RequestId>\\n    <Data>fc82774fa749485bad7d719f9670****</Data>\\n    <Code>200</Code>\\n    <Success>true</Success>\\n</TriggerRecordResponse>","errorExample":""}]',
      'title' => '触发录像',
      'summary' => '调用该接口立即触发指定IPC设备开始录像，并上传录像文件至云端。',
      'requestParamsDescription' => '调用API时，除了本文介绍的该API的特有请求参数，还需传入公共请求参数。公共请求参数说明，请参见[公共参数](~~141505~~)文档。
',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'QueryDevicePictureByList' => 
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
      ),
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ProductKey',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'IPC设备所属产品的ProductKey。
您可以在物联网平台控制台**产品**页查看或调用[QueryProductList](~~69271~~)查看当前账号下所有产品的信息。
><notice> 如果传入该参数，需同时传入**DeviceName**。
></notice>',
            'type' => 'string',
            'required' => false,
            'example' => 'a1BwAGV****',
          ),
        ),
        1 => 
        array (
          'name' => 'DeviceName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'IPC设备的设备名称。
您可以在物联网平台控制台的**设备**页查看**DeviceName**。
><notice> 如果传入该参数，需同时传入**ProductKey**。
></notice>',
            'type' => 'string',
            'required' => false,
            'example' => 'camera1',
          ),
        ),
        2 => 
        array (
          'name' => 'IotId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'IPC设备的设备ID。物联网平台为该设备颁发的ID，设备的唯一标识符。可调用物联网平台[QueryDeviceDetail](~~69594~~)查询。

><notice> 如果传入该参数，则无需传入**ProductKey**和**DeviceName**。**IotId**作为设备唯一标识符，和**ProductKey**与**DeviceName**的组合是一一对应的关系。如果您同时传入**IotId**和**ProductKey**与**DeviceName**的组合，则以**IotId**为准。
></notice>',
            'type' => 'string',
            'required' => false,
            'example' => '1CJ0****e7qiq8VkQi1000000',
          ),
        ),
        3 => 
        array (
          'name' => 'ThumbWidth',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定目标缩放图的宽度，单位为px，取值范围为1~4096。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '100',
            'default' => '0',
          ),
        ),
        4 => 
        array (
          'name' => 'ExpireTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '图片URL的失效时间，单位为分钟。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '60',
            'default' => '0',
          ),
        ),
        5 => 
        array (
          'name' => 'PictureType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '图片类型：

- **0**：缩略图。
- **1**：原图。 
- **2**（默认）：全部。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '2',
            'default' => '2',
          ),
        ),
        6 => 
        array (
          'name' => 'IotInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。

<props="china">您可在物联网平台控制台的**实例概览**页面，查看当前实例的**ID**。若有ID值，必须传入该ID值，否则调用会失败。</props>

<props="china">
> 如果公共实例没有ID值，请参见[如何获取实例ID](~~267533~~)。</props>

<props="intl">无需传入此参数。</props>',
            'type' => 'string',
            'required' => false,
            'example' => 'iot-cn-n6w1y******',
          ),
        ),
        7 => 
        array (
          'name' => 'PictureIdList',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '图片ID列表。图片ID由调用[TriggerCapturePicture](~~107914~~)时生成。

> 单次调用最多支持输入50个图片ID。
',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'string',
            ),
            'required' => true,
            'example' => 'cFc5MzZ****npYT1***TDFzX1hrVzA0Z****',
            'maxItems' => 50,
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
              'Code' => 
              array (
                'description' => '接口返回码：

- **200**：表示成功。
- 其它：表示错误码。错误码详情，请参见[错误码](~~145071~~)。',
                'type' => 'string',
                'example' => '200',
              ),
              'ErrorMessage' => 
              array (
                'description' => '调用失败时，返回的出错信息。',
                'type' => 'string',
                'example' => 'request forbidden',
              ),
              'RequestId' => 
              array (
                'description' => '阿里云为该请求生成的唯一标识符。',
                'type' => 'string',
                'example' => '06DC77A0-4622-42DB-9EE0-25FIOHS82JK1',
              ),
              'Success' => 
              array (
                'description' => '是否调用成功：
- **true**：调用成功。
- **false**：调用失败。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Data' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'picData' => 
                  array (
                    'description' => '响应结果。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'PicId' => 
                        array (
                          'description' => '图片ID。',
                          'type' => 'string',
                          'example' => 'RW****HFRO****jUyMjIy',
                        ),
                        'PicUrl' => 
                        array (
                          'description' => '图片URL。',
                          'type' => 'string',
                          'example' => 'https://link-vision-picture-sh.oss-cn-shanghai.aliyuncs.com/EbOEp****%3D',
                        ),
                        'PicCreateTime' => 
                        array (
                          'description' => '图片创建时间，格式为13位时间戳，单位为毫秒。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1632453652222',
                        ),
                        'ThumbUrl' => 
                        array (
                          'description' => '缩略图URL。',
                          'type' => 'string',
                          'example' => 'https://link-vision-picture-sh.oss-cn-shanghai.aliyuncs.com/EbOEpDE****%2Cq_90',
                        ),
                        'IotId' => 
                        array (
                          'description' => 'IPC设备的设备ID。',
                          'type' => 'string',
                          'example' => '1CJ0****e7qiq8VkQi1000000',
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
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"200\\",\\n  \\"ErrorMessage\\": \\"request forbidden\\",\\n  \\"RequestId\\": \\"06DC77A0-4622-42DB-9EE0-25FIOHS82JK1\\",\\n  \\"Success\\": true,\\n  \\"Data\\": {\\n    \\"picData\\": [\\n      {\\n        \\"PicId\\": \\"RW****HFRO****jUyMjIy\\",\\n        \\"PicUrl\\": \\"https://link-vision-picture-sh.oss-cn-shanghai.aliyuncs.com/EbOEp****%3D\\",\\n        \\"PicCreateTime\\": 1632453652222,\\n        \\"ThumbUrl\\": \\"https://link-vision-picture-sh.oss-cn-shanghai.aliyuncs.com/EbOEpDE****%2Cq_90\\",\\n        \\"IotId\\": \\"1CJ0****e7qiq8VkQi1000000\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<QueryDevicePictureByListResponse>\\n<RequestId>B68F5AC3-F1AF-5C4A-8170-913F4FDDE2B8</RequestId>\\n<Data>\\n    <picData>\\n        <IotId>1CJ03rzf****Qi1000000</IotId>\\n        <ThumbUrl>https://link-vision-picture-sh.oss-cn-shanghai.aliyuncs.com/EbOEpDE****%2Cq_90</ThumbUrl>\\n        <PicUrl>https://link-vision-picture-sh.oss-cn-shanghai.aliyuncs.com/EbOEp****%3D</PicUrl>\\n        <PicCreateTime>1632453652222</PicCreateTime>\\n        <PicId>RW****HFRO****jUyMjIy</PicId>\\n    </picData>\\n    <picData>\\n        <IotId>1CJ03rzf****Qi1000000</IotId>\\n        <ThumbUrl>https://link-vision-picture-sh.oss-cn-shanghai.aliyuncs.com/EbOEpDEUQ****uality%2Cq_90</ThumbUrl>\\n        <PicUrl>https://link-vision-picture-sh.oss-cn-shanghai.aliyuncs.com/EbO****%3D</PicUrl>\\n        <PicCreateTime>1632454869397</PicCreateTime>\\n        <PicId>RWJ****OSHFZm****Mzk3</PicId>\\n    </picData>\\n</Data>\\n<Code>200</Code>\\n<Success>true</Success>\\n</QueryDevicePictureByListResponse>","errorExample":""}]',
      'title' => 'QueryDevicePictureByList',
      'summary' => '，根据图片ID列表，获取图片地址。',
      'requestParamsDescription' => '调用API时，除了本文介绍的该API的特有请求参数，还需传入公共请求参数。公共请求参数说明，请参见[公共参数](~~141505~~)文档。',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'TransferDeviceInstance' => 
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
      ),
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'DeviceNameList',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '待迁移的设备名称列表。最多包含100个设备名称。',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'string',
            ),
            'required' => true,
            'example' => 'RepeatList',
            'maxItems' => 100,
          ),
        ),
        1 => 
        array (
          'name' => 'ProductKey',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '设备所属产品的ProductKey，创建产品时，物联网平台为该产品生成的唯一标识。',
            'type' => 'string',
            'required' => true,
            'example' => 'a1BwAGV****',
          ),
        ),
        2 => 
        array (
          'name' => 'SourceInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '设备所属的源实例ID：

- 公共实例ID：iotx-oxssharez200。
    > 目前仅支持华东2（上海）地域，其实例ID为iotx-oxssharez200。

- 企业版实例ID：登录物联网平台控制台，在**实例概览**页面，单击实例名称，在**实例详情**页面的**实例基本信息**中查看**实例ID**。',
            'type' => 'string',
            'required' => false,
            'example' => 'iotx-oxssharez200',
          ),
        ),
        3 => 
        array (
          'name' => 'TargetInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '设备迁移的目标实例ID。目标实例仅支持企业版实例。

您可登录物联网平台控制台，在**实例概览**页面，单击实例名称，在**实例详情**页面的**实例基本信息**中查看**实例ID**。
',
            'type' => 'string',
            'required' => true,
            'example' => 'iot-060***',
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
              'Code' => 
              array (
                'description' => '接口返回码：

- **200**：表示成功。
- 其它：表示错误码。错误码详情，请参见[错误码](~~145071~~)。',
                'type' => 'string',
                'example' => '200',
              ),
              'RequestId' => 
              array (
                'description' => '阿里云为该请求生成的唯一标识符。',
                'type' => 'string',
                'example' => '27AF2E38-12ED-4F67-BD20-36E812CD7A42',
              ),
              'ErrorMessage' => 
              array (
                'description' => '调用失败时，返回的出错信息。',
                'type' => 'string',
                'example' => '来源实例和目标实例不能相同',
              ),
              'Success' => 
              array (
                'description' => '是否调用成功：
- **true**：调用成功。
- **false**：调用失败。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Data' => 
              array (
                'description' => '查询结果。',
                'type' => 'object',
                'properties' => 
                array (
                  'SuccessList' => 
                  array (
                    'description' => '迁移成功的设备列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'DeviceName' => 
                        array (
                          'description' => '设备名称。',
                          'type' => 'string',
                          'example' => 'e598798j****',
                        ),
                        'Message' => 
                        array (
                          'description' => '迁移成功的描述信息。',
                          'type' => 'string',
                          'example' => 'success',
                        ),
                      ),
                    ),
                  ),
                  'FailedList' => 
                  array (
                    'description' => '迁移失败的设备列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'DeviceName' => 
                        array (
                          'description' => '设备名称。',
                          'type' => 'string',
                          'example' => 'e5jdfalekj****',
                        ),
                        'Message' => 
                        array (
                          'description' => '迁移失败的描述信息。',
                          'type' => 'string',
                          'example' => '设备已经转移或不属于来源实例',
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
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"200\\",\\n  \\"RequestId\\": \\"27AF2E38-12ED-4F67-BD20-36E812CD7A42\\",\\n  \\"ErrorMessage\\": \\"来源实例和目标实例不能相同\\",\\n  \\"Success\\": true,\\n  \\"Data\\": {\\n    \\"SuccessList\\": [\\n      {\\n        \\"DeviceName\\": \\"e598798j****\\",\\n        \\"Message\\": \\"success\\"\\n      }\\n    ],\\n    \\"FailedList\\": [\\n      {\\n        \\"DeviceName\\": \\"e5jdfalekj****\\",\\n        \\"Message\\": \\"设备已经转移或不属于来源实例\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<TransferDeviceInstanceResponse>\\n<RequestId>F1F1CD2E-0918-4804-9D44-8C3EE26DD3B5</RequestId>\\n<Data>\\n    <SuccessList>\\n        <Message>success</Message>\\n        <DeviceName>QYA1</DeviceName>\\n    </SuccessList>\\n    <SuccessList>\\n        <Message>success</Message>\\n        <DeviceName>QYA2</DeviceName>\\n    </SuccessList>\\n</Data>\\n<Code>200</Code>\\n<Success>true</Success>\\n</TransferDeviceInstanceResponse>","errorExample":""}]',
      'title' => 'TransferDeviceInstance',
      'summary' => '，迁移设备所在的实例。',
      'description' => '调用该接口迁移设备所在的实例前，请您联系技术支持人员进行迁移方案评估，防止迁移后功能无法使用。

**前提条件**

- 被迁移的设备已开通视频服务功能。
    -  公共实例的设备：登录物联网平台控制台，单击**公共实例**。在左侧菜单栏，选择**视频服务** > **接入服务**。在**接入服务**页面，单击**产品管理**页签。确认待迁移设备所在产品，对应**已开通/未开通状态**列为**已开通**。
    -  企业版实例的设备：已启用视频服务。
- 设备分发任务已经完成。详细信息，请参考[CreateDeviceDistributeJob](~~199390~~)或[设备分发](~~143450~~)。
- 确保摄像头设备已配置图片生命周期。若摄像头设备未配置图片生命周期，调用该接口后，会自动设置图片生命周期为180天。详细信息，请参考[SetDevicePictureLifeCycle](~~107880~~)。

**背景信息**
- 若迁移的源实例与目标实例类型不同，迁移前请了解实例的计费方式。计费方式详细内容，请参考[计费概述](~~124250~~)。
- 迁移过程中，设备会离线，设备数量越多迁移时间越长，在此期间设备产生的数据无法保留。



',
      'requestParamsDescription' => '调用API时，除了本文介绍的该API的特有请求参数，还需传入公共请求参数。公共请求参数说明，请参见[公共参数](~~141505~~)文档。',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'QueryRecordDownloadUrl' => 
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
      ),
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'FileName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '录像文件名。可调用[QueryRecord](~~107922~~)查询。',
            'type' => 'string',
            'required' => true,
            'example' => '1623999491_LYPsmZGeEN8GdKzMtYNiBXXXXXXXXX_0/c0064411-2065-400a-a13e-********',
          ),
        ),
        1 => 
        array (
          'name' => 'IotInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。

<props="china">您可在物联网平台控制台的**实例概览**页面，查看当前实例的**ID**。若有ID值，必须传入该ID值，否则调用会失败。</props>

<props="china">
> 如果公共实例没有ID值，请参见[如何获取实例ID](~~267533~~)。</props>

<props="intl">无需传入此参数。</props>',
            'type' => 'string',
            'required' => false,
            'example' => 'iot-cn-n6w1y59****',
          ),
        ),
        2 => 
        array (
          'name' => 'ProductKey',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'IPC设备所属产品的ProductKey。
您可以在物联网平台控制台**产品**页查看或调用[QueryProductList](~~69271~~)查看当前账号下所有产品的信息。
><notice> 如果传入该参数，需同时传入**DeviceName**。
></notice>',
            'type' => 'string',
            'required' => false,
            'example' => 'a1BwAGV****',
          ),
        ),
        3 => 
        array (
          'name' => 'DeviceName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'IPC设备的设备名称。
您可以在物联网平台控制台的**设备**页查看**DeviceName**。
><notice> 如果传入该参数，需同时传入**ProductKey**。
></notice>',
            'type' => 'string',
            'required' => false,
            'example' => 'camera1',
          ),
        ),
        4 => 
        array (
          'name' => 'IotId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'IPC设备的设备ID。物联网平台为该设备颁发的ID，设备的唯一标识符。可调用物联网平台[QueryDeviceDetail](~~69594~~)查询。

><notice> 如果传入该参数，则无需传入**ProductKey**和**DeviceName**。**IotId**作为设备唯一标识符，和**ProductKey**与**DeviceName**的组合是一一对应的关系。如果您同时传入**IotId**和**ProductKey**与**DeviceName**的组合，则以**IotId**为准。
></notice>',
            'type' => 'string',
            'required' => false,
            'example' => 'C47T6xwp6ms4bNlkHRWR****',
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
              'Code' => 
              array (
                'description' => '接口返回码：

- **200**：表示成功。
- 其它：表示错误码。错误码详情，请参见[错误码](~~145071~~)。',
                'type' => 'string',
                'example' => '200',
              ),
              'ErrorMessage' => 
              array (
                'description' => '调用失败时，返回的出错信息。',
                'type' => 'string',
                'example' => 'XXX is mandatory for this action',
              ),
              'RequestId' => 
              array (
                'description' => '阿里云为该请求生成的唯一标识符。',
                'type' => 'string',
                'example' => '06DC77A0-4622-42DB-9EE0-25FIOHS82JK1',
              ),
              'Success' => 
              array (
                'description' => '是否调用成功：
- **true**：调用成功。
- **false**：调用失败。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Data' => 
              array (
                'description' => '查询结果。',
                'type' => 'object',
                'properties' => 
                array (
                  'Status' => 
                  array (
                    'description' => '录像文件的生成状态：

- **-1**：录像文件生成异常。
- **0**：录像文件已生成完毕。
- **1**：录像文件正在生成中。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '0',
                  ),
                  'Url' => 
                  array (
                    'description' => '录像文件的下载地址。

当**Status**为0且**Progress**为100时，该字段才有效。',
                    'type' => 'string',
                    'example' => 'https://link-vision-storage-online.oss-cn-shanghai.aliyuncs.com/transcode%2Fgk-********.mp4?OSSAccessKeyId=LTA*****TTTTTTTT&Expires=16****804&Signature=****',
                  ),
                  'Progress' => 
                  array (
                    'description' => '录像文件的生成进度，取值范围为0~100。',
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
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"200\\",\\n  \\"ErrorMessage\\": \\"XXX is mandatory for this action\\",\\n  \\"RequestId\\": \\"06DC77A0-4622-42DB-9EE0-25FIOHS82JK1\\",\\n  \\"Success\\": true,\\n  \\"Data\\": {\\n    \\"Status\\": 0,\\n    \\"Url\\": \\"https://link-vision-storage-online.oss-cn-shanghai.aliyuncs.com/transcode%2Fgk-********.mp4?OSSAccessKeyId=LTA*****TTTTTTTT&Expires=16****804&Signature=****\\",\\n    \\"Progress\\": 0\\n  }\\n}","errorExample":""},{"type":"xml","example":"<QueryRecordDownloadUrlResponse>\\n<RequestId>06DC77A0-4622-42DB-9EE0-25FIOHS82JK1</RequestId>\\n<Data>\\n    <Status>0</Status>\\n    <Progress>0</Progress>\\n    <Url>https://link-vision-storage-online.oss-cn-shanghai.aliyuncs.com/transcode%2Fgk-********.mp4?OSSAccessKeyId=LTA*****TTTTTTTT&amp;Expires=16****804&amp;Signature=****</Url>\\n</Data>\\n<Code>200</Code>\\n<Success>true</Success>\\n</QueryRecordDownloadUrlResponse>","errorExample":""}]',
      'title' => 'QueryRecordDownloadUrl',
      'summary' => '请求云端录像文件的下载地址。',
      'description' => '## 使用说明
云端录像文件生成过程耗时较长，需要您轮询该接口获取进度，当进度完成后才会生成下载地址。',
      'requestParamsDescription' => '调用API时，除了本文介绍的该API的特有请求参数，还需传入公共请求参数。公共请求参数说明，请参见[公共参数](~~141505~~)文档。',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'CreateLocalFileUploadJob' => 
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
      ),
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'TimeSlot',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '时段列表。',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'EndTime' => 
                array (
                  'description' => '上传本地录像的结束时间，格式为10位时间戳，单位为秒。
>单次本地录像上传任务的最大时间范围为1小时。',
                  'type' => 'integer',
                  'format' => 'int32',
                  'required' => true,
                  'example' => '1631019775',
                ),
                'StartTime' => 
                array (
                  'description' => '上传本地录像的开始时间，格式为10位时间戳，单位为秒。
>单次本地录像上传任务的最大时间范围为1小时。',
                  'type' => 'integer',
                  'format' => 'int32',
                  'required' => true,
                  'example' => '1631019675',
                ),
                'ProductKey' => 
                array (
                  'description' => '视频设备所属产品的ProductKey。
您可以在物联网平台控制台**产品**页查看或调用[QueryProductList](~~69271~~)查看当前账号下所有产品的信息。
><notice> 如果传入该参数，需同时传入**DeviceName**。
></notice>',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'a1BwAGV****',
                ),
                'DeviceName' => 
                array (
                  'description' => '视频设备的设备名称。
您可以在物联网平台控制台的**设备**页查看**DeviceName**。
><notice> 如果传入该参数，需同时传入**ProductKey**。
></notice>',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'camera1',
                ),
                'IotId' => 
                array (
                  'description' => '视频设备的设备ID。物联网平台为该设备颁发的ID，设备的唯一标识符。可调用物联网平台[QueryDeviceDetail](~~69594~~)查询。

><notice> 如果传入该参数，则无需传入**ProductKey**和**DeviceName**。**IotId**作为设备唯一标识符，和**ProductKey**与**DeviceName**的组合是一一对应的关系。如果您同时传入**IotId**和**ProductKey**与**DeviceName**的组合，则以**IotId**为准。
></notice>',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'd7XmBoJhAr88C6PelXDF00****',
                ),
              ),
              'required' => false,
            ),
            'required' => false,
            'maxItems' => 200,
          ),
        ),
        1 => 
        array (
          'name' => 'IotInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。您可在物联网平台控制台的**实例概览**页面，查看当前实例的**ID**。

><notice>
- 若有ID值，必须传入该ID值，否则调用会失败。
- 若无<props="intl"><ph>**实例概览**页面或</ph></props>ID值，则无需传入。

></notice>

实例的更多信息，请参见[实例概述](~~356505~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'iot-cn-n6w1y59****',
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
              'Code' => 
              array (
                'description' => '接口返回码：

- **200**：表示成功。
- 其它：表示错误码。错误码详情，请参见[错误码](~~145071~~)。',
                'type' => 'string',
                'example' => '200',
              ),
              'ErrorMessage' => 
              array (
                'description' => '调用失败时，返回的出错信息。',
                'type' => 'string',
                'example' => 'InvalidParameter',
              ),
              'RequestId' => 
              array (
                'description' => '阿里云为该请求生成的唯一标识符。',
                'type' => 'string',
                'example' => '06DC77A0-4622-42DB-9EE0-25FIOHS82JK1',
              ),
              'Success' => 
              array (
                'description' => '是否调用成功：
- **true**：调用成功。
- **false**：调用失败。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Data' => 
              array (
                'description' => '查询结果。',
                'type' => 'object',
                'properties' => 
                array (
                  'JobId' => 
                  array (
                    'description' => '本地录像上传任务ID。
>请您妥善保存**JobId**。录像上传任务完成后，需使用**JobId**查询本地录像上传任务结果：[QueryLocalFileUploadJob](~~363004~~)。您也可以根据需要， 使用**JobId**停止本地录像上传任务：[DeleteLocalFileUploadJob](~~363003~~)。
',
                    'type' => 'string',
                    'example' => '1ec1a2****d0435fbc0****34f6f139d',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"200\\",\\n  \\"ErrorMessage\\": \\"InvalidParameter\\",\\n  \\"RequestId\\": \\"06DC77A0-4622-42DB-9EE0-25FIOHS82JK1\\",\\n  \\"Success\\": true,\\n  \\"Data\\": {\\n    \\"JobId\\": \\"1ec1a2****d0435fbc0****34f6f139d\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<CreateLocalFileUploadJobResponse>\\n<RequestId>06DC77A0-4622-42DB-9EE0-25FIOHS82JK1</RequestId>\\n<Data>\\n    <JobId>1ec1a2****d0435fbc0****34f6f139d</JobId>\\n</Data>\\n<Code>200</Code>\\n<Success>true</Success>\\n</CreateLocalFileUploadJobResponse>","errorExample":""}]',
      'title' => 'CreateLocalFileUploadJob',
      'summary' => '调用该接口用于创建本地录像上传任务。',
      'description' => '单次本地录像上传任务最多支持上传200个文件，即TimeSlot列表最大取值为200。',
      'requestParamsDescription' => ' 调用API时，除了本文介绍的该API的特有请求参数，还需传入公共请求参数。公共请求参数说明，请参见[公共参数](~~141505~~)文档。',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DeleteLocalFileUploadJob' => 
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
      ),
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'IotInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。

您可在物联网平台控制台的**实例概览**页面，查看当前实例的**ID**。若有ID值，必须传入该ID值，否则调用会失败。

> 如果公共实例没有ID值，请参见[如何获取实例ID](~~267533~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'iot-cn-n6w1y59****',
          ),
        ),
        1 => 
        array (
          'name' => 'JobId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '本地录像上传任务ID，由创建本地录像上传任务[CreateLocalFileUploadJob](~~363002~~)生成。',
            'type' => 'string',
            'required' => true,
            'example' => '1ec1a2****d0435fbc0****34f6f139d',
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
              'Code' => 
              array (
                'description' => '接口返回码：

- **200**：表示成功。
- 其它：表示错误码。错误码详情，请参见[错误码](~~145071~~)。',
                'type' => 'string',
                'example' => '200',
              ),
              'Data' => 
              array (
                'description' => '该返回参数置空。',
                'type' => 'object',
                'example' => ' {}',
              ),
              'ErrorMessage' => 
              array (
                'description' => '调用失败时，返回的出错信息。',
                'type' => 'string',
                'example' => 'tenant auth error',
              ),
              'RequestId' => 
              array (
                'description' => '阿里云为该请求生成的唯一标识符。',
                'type' => 'string',
                'example' => '06DC77A0-4622-42DB-9EE0-25FIOHS82JK1',
              ),
              'Success' => 
              array (
                'description' => '是否调用成功：
- **true**：调用成功。
- **false**：调用失败。',
                'type' => 'boolean',
                'example' => 'true',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"200\\",\\n  \\"Data\\": {},\\n  \\"ErrorMessage\\": \\"tenant auth error\\",\\n  \\"RequestId\\": \\"06DC77A0-4622-42DB-9EE0-25FIOHS82JK1\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<DeleteLocalFileUploadJobResponse>\\n<RequestId>06DC77A0-4622-42DB-9EE0-25FIOHS82JK1</RequestId>\\n<Data><Data/>\\n<Code>200</Code>\\n<Success>true</Success>\\n</DeleteLocalFileUploadJobResponse>","errorExample":""}]',
      'title' => '停止本地录像上传任务',
      'summary' => '调用该接口停止本地录像上传任务。',
      'description' => '停止本地录像上传任务后，已经创建的录像文件不会删除。',
      'requestParamsDescription' => ' 调用API时，除了本文介绍的该API的特有请求参数，还需传入公共请求参数。公共请求参数说明，请参见[公共参数](~~141505~~)文档。',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'QueryLocalFileUploadJob' => 
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
      ),
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'IotInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。

您可在物联网平台控制台的**实例概览**页面，查看当前实例的**ID**。若有ID值，必须传入该ID值，否则调用会失败。

> 如果公共实例没有ID值，请参见[如何获取实例ID](~~267533~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'iot-cn-n6w1y59****',
          ),
        ),
        1 => 
        array (
          'name' => 'JobId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '本地录像上传任务ID。通过[CreateLocalFileUploadJob](~~363002~~)创建。',
            'type' => 'string',
            'required' => true,
            'example' => '1ec1a****5d0435fbc0****34f6f139d',
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
              'Code' => 
              array (
                'description' => '接口返回码：

- **200**：表示成功。
- 其它：表示错误码。错误码详情，请参见[错误码](~~145071~~)。',
                'type' => 'string',
                'example' => '200',
              ),
              'ErrorMessage' => 
              array (
                'description' => '调用失败时，返回的出错信息。',
                'type' => 'string',
                'example' => 'tenant auth error',
              ),
              'RequestId' => 
              array (
                'description' => '阿里云为该请求生成的唯一标识符。',
                'type' => 'string',
                'example' => '449ECE75-A36A-4ACE-B253-147C78C440C5',
              ),
              'Success' => 
              array (
                'description' => '是否调用成功：
- **true**：调用成功。
- **false**：调用失败。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Data' => 
              array (
                'description' => '查询结果。',
                'type' => 'object',
                'properties' => 
                array (
                  'Status' => 
                  array (
                    'description' => '录像上传任务状态：

- 0：任务初始化中。
- 1：任务执行中。
- 2：任务执行完成。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '2',
                  ),
                  'ResultList' => 
                  array (
                    'description' => '任务列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'SlotEndTime' => 
                        array (
                          'description' => '录像上传任务结束时间。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '1634746054',
                        ),
                        'ProductKey' => 
                        array (
                          'description' => '视频设备所属产品的ProductKey。',
                          'type' => 'string',
                          'example' => 'g2****Q6ggK',
                        ),
                        'DeviceName' => 
                        array (
                          'description' => '视频设备的设备名称。',
                          'type' => 'string',
                          'example' => 'gb_hik_IPC',
                        ),
                        'SlotStartTime' => 
                        array (
                          'description' => '录像上传任务开始时间。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '1634745754',
                        ),
                        'Code' => 
                        array (
                          'description' => '录像上传任务状态码：

- 200：正常。
- 9201 ：设备不在线。请上线设备后重试。
- 9409 ：无云存储配额。请检查云存储配额后重试。
- 9417：设备、网络或其它异常。请您重试，或检查设备和网络状态。
- 9435 ：录像文件不存在。请确保视频设备本地存证录像文件，然后重试。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '9201',
                        ),
                        'SlotStatus' => 
                        array (
                          'description' => '**SlotStartTime**和**SlotEndTime**的时间段内，录像上传任务的执行状态：
- 0：任务初始化中。
- 1：任务执行中。
- 2：任务执行完成。
- 3：任务执行异常。
- 4：任务主动结束。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '3',
                        ),
                        'IotId' => 
                        array (
                          'description' => '视频设备的设备ID。物联网平台为该设备颁发的ID，设备的唯一标识符。',
                          'type' => 'string',
                          'example' => 'IQ9mO4tvMnAj****QUdcg2n400',
                        ),
                        'FileList' => 
                        array (
                          'description' => '录像文件列表。',
                          'type' => 'array',
                          'items' => 
                          array (
                            'type' => 'object',
                            'properties' => 
                            array (
                              'FileName' => 
                              array (
                                'description' => '录像文件名。',
                                'type' => 'string',
                                'example' => 'video1',
                              ),
                              'FileStartTime' => 
                              array (
                                'description' => '录像文件开始时间。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1634747054',
                              ),
                              'FileEndTime' => 
                              array (
                                'description' => '录像文件结束时间。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1634746054',
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
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"200\\",\\n  \\"ErrorMessage\\": \\"tenant auth error\\",\\n  \\"RequestId\\": \\"449ECE75-A36A-4ACE-B253-147C78C440C5\\",\\n  \\"Success\\": true,\\n  \\"Data\\": {\\n    \\"Status\\": 2,\\n    \\"ResultList\\": [\\n      {\\n        \\"SlotEndTime\\": 1634746054,\\n        \\"ProductKey\\": \\"g2****Q6ggK\\",\\n        \\"DeviceName\\": \\"gb_hik_IPC\\",\\n        \\"SlotStartTime\\": 1634745754,\\n        \\"Code\\": 9201,\\n        \\"SlotStatus\\": 3,\\n        \\"IotId\\": \\"IQ9mO4tvMnAj****QUdcg2n400\\",\\n        \\"FileList\\": [\\n          {\\n            \\"FileName\\": \\"video1\\",\\n            \\"FileStartTime\\": 1634747054,\\n            \\"FileEndTime\\": 1634746054\\n          }\\n        ]\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<QueryLocalFileUploadJobResponse>\\n<RequestId>F9220B6D-E9BD-166E-B103-22ECF0B64393</RequestId>\\n<Data>\\n    <Status>2</Status>\\n    <ResultList>\\n        <IotId>IQ9mO4tvM****kQRQUdcg2n400</IotId>\\n        <SlotStartTime>1634745754</SlotStartTime>\\n        <FileList>\\n            <FileEndTime>1634746054</FileEndTime>\\n            <FileName>video1</FileName>\\n            <FileStartTime>1634747054</FileStartTime>\\n        </FileList>\\n        <SlotStatus>3</SlotStatus>\\n        <SlotEndTime>1634746054</SlotEndTime>\\n        <Code>200</Code>\\n        <ProductKey>g2n4DLQ6ggK</ProductKey>\\n        <DeviceName>gb_hik_IPC</DeviceName>\\n    </ResultList>\\n    <ResultList>\\n        <IotId>kIDFJy49n****aSSxtqvg2n400</IotId>\\n        <SlotStartTime>1634745754</SlotStartTime>\\n        <SlotStatus>3</SlotStatus>\\n        <SlotEndTime>1634746054</SlotEndTime>\\n        <Code>9201</Code>\\n        <ProductKey>g2n4DLQ6ggK</ProductKey>\\n        <DeviceName>hik_nvr_39_IPC</DeviceName>\\n    </ResultList>\\n    <ResultList>\\n        <IotId>JWNQ5oTFzU5****BJZKJg2n400</IotId>\\n        <SlotStartTime>1634745754</SlotStartTime>\\n        <SlotStatus>3</SlotStatus>\\n        <SlotEndTime>1634752834</SlotEndTime>\\n        <Code>9201</Code>\\n        <ProductKey>g2n4DLQ6ggK</ProductKey>\\n        <DeviceName>hik_nvr_33_</DeviceName>\\n    </ResultList>\\n</Data>\\n<Code>200</Code>\\n<Success>true</Success>\\n</QueryLocalFileUploadJobResponse>","errorExample":""}]',
      'title' => '查询本地录像上传任务结果',
      'summary' => '查询本地录像上传任务结果。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'QueryFaceUserBatch' => 
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
      ),
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'UserIdList',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '用户ID列表。请传入在调用[AddFaceUser](~~288338~~)接口添加用户后，获取并保存到本地的用户ID。',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'string',
            ),
            'required' => true,
            'example' => '["xqymlby****4whye","6qyyb69zqara****","64nbfx8****hzmy4"]',
            'maxItems' => 50,
          ),
        ),
        1 => 
        array (
          'name' => 'IsolationId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '业务隔离ID，用于隔离同一个阿里云账号下不同业务应用之间的数据。请与调用[AddFaceUser](~~288338~~)接口添加用户时设置的**IsolationId**保持一致。',
            'type' => 'string',
            'required' => true,
            'example' => 'ZheJiangHZ',
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
              'Code' => 
              array (
                'description' => '接口返回码：

- **200**：表示成功。
- 其它：表示错误码。错误码详情，请参见[错误码](~~145071~~)。',
                'type' => 'string',
                'example' => '200',
              ),
              'RequestId' => 
              array (
                'description' => '阿里云为该请求生成的唯一标识符。',
                'type' => 'string',
                'example' => '0A13279A-5640-45E7-87AA-83750541AD0E',
              ),
              'ErrorMessage' => 
              array (
                'description' => '调用失败时，返回的出错信息。',
                'type' => 'string',
                'example' => 'face user not exist',
              ),
              'Success' => 
              array (
                'description' => '是否调用成功：
- **true**：调用成功。
- **false**：调用失败。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Data' => 
              array (
                'description' => '调用成功时，返回的数据。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Params' => 
                    array (
                      'description' => '自定义的用户参数。',
                      'type' => 'string',
                      'example' => '{"key1":"value1", "key2":"value2"}',
                    ),
                    'CustomUserId' => 
                    array (
                      'description' => '用户身份识别ID。',
                      'type' => 'string',
                      'example' => '1234567890',
                    ),
                    'CreateTime' => 
                    array (
                      'description' => '用户创建人脸数据的13位时间戳，单位为毫秒。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1636427314000',
                    ),
                    'UserId' => 
                    array (
                      'description' => '用户ID。',
                      'type' => 'string',
                      'example' => '3mtjaqebeq4d****',
                    ),
                    'Name' => 
                    array (
                      'description' => '用户名。',
                      'type' => 'string',
                      'example' => 'Tony',
                    ),
                    'ModifyTime' => 
                    array (
                      'description' => '用户最后一次修改人脸数据的13位时间戳，单位为毫秒。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1636436864000',
                    ),
                    'FacePicList' => 
                    array (
                      'description' => '用户的人脸图片信息列表。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'type' => 'object',
                        'properties' => 
                        array (
                          'FaceUrl' => 
                          array (
                            'description' => '用户的人脸图片URL地址。',
                            'type' => 'string',
                            'example' => 'https://example.com/test.jpeg',
                          ),
                          'FaceMd5' => 
                          array (
                            'description' => '用户人脸图片的MD5值。						',
                            'type' => 'string',
                            'example' => 'TestFaceMd5',
                          ),
                          'FeatureDTOList' => 
                          array (
                            'description' => '人脸特征值列表。',
                            'type' => 'array',
                            'items' => 
                            array (
                              'type' => 'object',
                              'properties' => 
                              array (
                                'AlgorithmName' => 
                                array (
                                  'description' => '算法名。',
                                  'type' => 'string',
                                  'example' => 'TestAlgorithmName',
                                ),
                                'AlgorithmVersion' => 
                                array (
                                  'description' => '算法版本。',
                                  'type' => 'string',
                                  'example' => 'TestAlgorithmVersion',
                                ),
                                'AlgorithmProvider' => 
                                array (
                                  'description' => '算法提供者。',
                                  'type' => 'string',
                                  'example' => 'TestAlgorithmProvider',
                                ),
                                'ErrorMessage' => 
                                array (
                                  'description' => '算法执行出错时，返回的错误信息。',
                                  'type' => 'string',
                                  'example' => 'parameter error',
                                ),
                                'ErrorCode' => 
                                array (
                                  'description' => '算法返回码：

- **200**：表示成功。
- 其它：表示错误码。错误码详情，请参见[错误码](~~288314~~)。',
                                  'type' => 'string',
                                  'example' => '200',
                                ),
                                'FaceMd5' => 
                                array (
                                  'description' => '人脸特征的MD5值。',
                                  'type' => 'string',
                                  'example' => 'TestFaceMd5',
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
      ),
      'errorCodes' => 
      array (
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'Forbidden.RiskControl',
            'errorMessage' => 'Your account is at risk. Contact customer support for more details.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"200\\",\\n  \\"RequestId\\": \\"0A13279A-5640-45E7-87AA-83750541AD0E\\",\\n  \\"ErrorMessage\\": \\"face user not exist\\",\\n  \\"Success\\": true,\\n  \\"Data\\": [\\n    {\\n      \\"Params\\": \\"{\\\\\\"key1\\\\\\":\\\\\\"value1\\\\\\", \\\\\\"key2\\\\\\":\\\\\\"value2\\\\\\"}\\",\\n      \\"CustomUserId\\": \\"1234567890\\",\\n      \\"CreateTime\\": 1636427314000,\\n      \\"UserId\\": \\"3mtjaqebeq4d****\\",\\n      \\"Name\\": \\"Tony\\",\\n      \\"ModifyTime\\": 1636436864000,\\n      \\"FacePicList\\": [\\n        {\\n          \\"FaceUrl\\": \\"https://example.com/test.jpeg\\",\\n          \\"FaceMd5\\": \\"TestFaceMd5\\",\\n          \\"FeatureDTOList\\": [\\n            {\\n              \\"AlgorithmName\\": \\"TestAlgorithmName\\",\\n              \\"AlgorithmVersion\\": \\"TestAlgorithmVersion\\",\\n              \\"AlgorithmProvider\\": \\"TestAlgorithmProvider\\",\\n              \\"ErrorMessage\\": \\"parameter error\\",\\n              \\"ErrorCode\\": \\"200\\",\\n              \\"FaceMd5\\": \\"TestFaceMd5\\"\\n            }\\n          ]\\n        }\\n      ]\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<QueryFaceUserBatchResponse>\\n<RequestId>0A13279A-5640-45E7-87AA-83750541AD0E</RequestId>\\n<Data>\\n    <ModifyTime>1636436864000</ModifyTime>\\n    <UserId>3mtjaqebeq4d****</UserId>\\n    <CreateTime>1636427314000</CreateTime>\\n    <Params>{\\"key1\\":\\"value1\\", \\"key2\\":\\"value2\\"}</Params>\\n    <CustomUserId>63f45472c2bf4cfa98b56****49238fa</CustomUserId>\\n    <Name>Tony</Name>\\n    <FacePicList>\\n        <FaceMd5>TestFaceMd5</FaceMd5>\\n        <FaceUrl>https://example.com/test.jpeg</FaceUrl>\\n        <FeatureDTOList>\\n            <AlgorithmVersion>TestAlgorithmVersion</AlgorithmVersion>\\n            <ErrorCode>200</ErrorCode>\\n            <AlgorithmProvider>TestAlgorithmProvider</AlgorithmProvider>\\n            <FaceMd5>TestFaceMd5</FaceMd5>\\n            <AlgorithmName>TestAlgorithmName</AlgorithmName>\\n        </FeatureDTOList>\\n    </FacePicList>\\n</Data>\\n<Code>200</Code>\\n<Success>true</Success>\\n</QueryFaceUserBatchResponse>","errorExample":""}]',
      'title' => 'QueryFaceUserBatch',
      'summary' => '根据用户ID列表批量获取用户信息。',
      'description' => '## 使用说明

- 单个阿里云账号调用该接口的每秒请求数（QPS）最大限制为100。

    > RAM用户共享阿里云账号配额。',
      'requestParamsDescription' => '调用API时，除了本文介绍的该API的特有请求参数，还需传入公共请求参数。公共请求参数说明，请参见[公共参数](~~288312~~)文档。',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'QueryFaceUserByName' => 
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
      ),
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'IsolationId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '业务隔离ID，用于隔离同一个阿里云账号下不同业务应用之间的数据。请与调用[AddFaceUser](~~288338~~)接口添加用户时设置的**IsolationId**保持一致。',
            'type' => 'string',
            'required' => true,
            'example' => 'ZheJiangHZ',
          ),
        ),
        1 => 
        array (
          'name' => 'Name',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用户名。支持中文、英文字母大小写、数字、下划线（_）和短划线（-），长度不超过64个字符。

支持模糊匹配，若不填，则为全量匹配。',
            'type' => 'string',
            'required' => false,
            'example' => 'Tony',
          ),
        ),
        2 => 
        array (
          'name' => 'Params',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用户参数，请自定义。

支持匹配搜索，但不支持模糊匹配。',
            'type' => 'string',
            'required' => false,
            'example' => '{"key1":"value1", "key2":"value2"}',
          ),
        ),
        3 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '返回结果中，每页显示的记录数量。最大取值50，最小取值1。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'maximum' => '50',
            'minimum' => '1',
            'example' => '10',
          ),
        ),
        4 => 
        array (
          'name' => 'PageNo',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定从返回结果中的第几页开始显示。最小取值为1。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'maximum' => '1000000',
            'minimum' => '1',
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
              'Code' => 
              array (
                'description' => '接口返回码：

- **200**：表示成功。
- 其它：表示错误码。错误码详情，请参见[错误码](~~145071~~)。',
                'type' => 'string',
                'example' => '200',
              ),
              'RequestId' => 
              array (
                'description' => '阿里云为该请求生成的唯一标识符。',
                'type' => 'string',
                'example' => '0A13279A-5640-45E7-87AA-83750541AD0E',
              ),
              'ErrorMessage' => 
              array (
                'description' => '调用失败时，返回的出错信息。',
                'type' => 'string',
                'example' => 'face user not exist',
              ),
              'Success' => 
              array (
                'description' => '是否调用成功：
- **true**：调用成功。
- **false**：调用失败。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Data' => 
              array (
                'description' => '调用成功时，返回的数据。',
                'type' => 'object',
                'properties' => 
                array (
                  'PageSize' => 
                  array (
                    'description' => '每页显示的条数。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '15',
                  ),
                  'Total' => 
                  array (
                    'description' => '总条数。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '8',
                  ),
                  'Page' => 
                  array (
                    'description' => '当前页面号。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                  'List' => 
                  array (
                    'description' => '调用成功时，返回的人脸信息列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Params' => 
                        array (
                          'description' => '自定义的用户参数。',
                          'type' => 'string',
                          'example' => '{"key1":"value1", "key2":"value2"}',
                        ),
                        'CustomUserId' => 
                        array (
                          'description' => '用户身份识别ID。',
                          'type' => 'string',
                          'example' => '1234567890',
                        ),
                        'CreateTime' => 
                        array (
                          'description' => '创建人脸数据的的13位时间戳，单位为毫秒。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1636427314000',
                        ),
                        'UserId' => 
                        array (
                          'description' => '用户ID。',
                          'type' => 'string',
                          'example' => '3mtjaqebeq4d****',
                        ),
                        'Name' => 
                        array (
                          'description' => '用户名。',
                          'type' => 'string',
                          'example' => 'Tony',
                        ),
                        'ModifyTime' => 
                        array (
                          'description' => '最后一次修改人脸数据的时间戳，单位为毫秒。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1636436864000',
                        ),
                        'FacePicList' => 
                        array (
                          'description' => '用户的人脸图片信息列表。',
                          'type' => 'array',
                          'items' => 
                          array (
                            'type' => 'object',
                            'properties' => 
                            array (
                              'FaceUrl' => 
                              array (
                                'description' => '用户的人脸图片URL地址。',
                                'type' => 'string',
                                'example' => 'https://example.com/test.jpeg',
                              ),
                              'FaceMd5' => 
                              array (
                                'description' => '用户人脸图片的MD5值。',
                                'type' => 'string',
                                'example' => 'TestFaceMd5',
                              ),
                              'FeatureDTOList' => 
                              array (
                                'description' => '人脸特征值列表。',
                                'type' => 'array',
                                'items' => 
                                array (
                                  'type' => 'object',
                                  'properties' => 
                                  array (
                                    'AlgorithmName' => 
                                    array (
                                      'description' => '算法名。',
                                      'type' => 'string',
                                      'example' => 'TestAlgorithmName',
                                    ),
                                    'AlgorithmVersion' => 
                                    array (
                                      'description' => '算法版本。',
                                      'type' => 'string',
                                      'example' => 'TestAlgorithmVersion',
                                    ),
                                    'AlgorithmProvider' => 
                                    array (
                                      'description' => '算法提供者。',
                                      'type' => 'string',
                                      'example' => 'TestAlgorithmProvider',
                                    ),
                                    'ErrorMessage' => 
                                    array (
                                      'description' => '算法执行出错时，返回的错误信息。',
                                      'type' => 'string',
                                      'example' => 'parameter error',
                                    ),
                                    'ErrorCode' => 
                                    array (
                                      'description' => '算法返回码：

- **200**：表示成功。
- 其它：表示错误码。错误码详情，请参见[错误码](~~288314~~)。',
                                      'type' => 'string',
                                      'example' => '200',
                                    ),
                                    'FaceMd5' => 
                                    array (
                                      'description' => '人脸特征的MD5值。',
                                      'type' => 'string',
                                      'example' => 'TestFaceMd5',
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
          ),
        ),
      ),
      'errorCodes' => 
      array (
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'Forbidden.RiskControl',
            'errorMessage' => 'Your account is at risk. Contact customer support for more details.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"200\\",\\n  \\"RequestId\\": \\"0A13279A-5640-45E7-87AA-83750541AD0E\\",\\n  \\"ErrorMessage\\": \\"face user not exist\\",\\n  \\"Success\\": true,\\n  \\"Data\\": {\\n    \\"PageSize\\": 15,\\n    \\"Total\\": 8,\\n    \\"Page\\": 1,\\n    \\"List\\": [\\n      {\\n        \\"Params\\": \\"{\\\\\\"key1\\\\\\":\\\\\\"value1\\\\\\", \\\\\\"key2\\\\\\":\\\\\\"value2\\\\\\"}\\",\\n        \\"CustomUserId\\": \\"1234567890\\",\\n        \\"CreateTime\\": 1636427314000,\\n        \\"UserId\\": \\"3mtjaqebeq4d****\\",\\n        \\"Name\\": \\"Tony\\",\\n        \\"ModifyTime\\": 1636436864000,\\n        \\"FacePicList\\": [\\n          {\\n            \\"FaceUrl\\": \\"https://example.com/test.jpeg\\",\\n            \\"FaceMd5\\": \\"TestFaceMd5\\",\\n            \\"FeatureDTOList\\": [\\n              {\\n                \\"AlgorithmName\\": \\"TestAlgorithmName\\",\\n                \\"AlgorithmVersion\\": \\"TestAlgorithmVersion\\",\\n                \\"AlgorithmProvider\\": \\"TestAlgorithmProvider\\",\\n                \\"ErrorMessage\\": \\"parameter error\\",\\n                \\"ErrorCode\\": \\"200\\",\\n                \\"FaceMd5\\": \\"TestFaceMd5\\"\\n              }\\n            ]\\n          }\\n        ]\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<QueryFaceUserByNameResponse>\\n<RequestId>0A13279A-5640-45E7-87AA-83750541AD0E</RequestId>\\n<Data>\\n    <PageSize>15</PageSize>\\n    <Total>1</Total>\\n    <Page>1</Page>\\n    <List>\\n        <ModifyTime>1636436864000</ModifyTime>\\n        <UserId>3mtjaqebeq4d****</UserId>\\n        <CreateTime>1636427314000</CreateTime>\\n        <Params>{\\"key1\\":\\"value1\\", \\"key2\\":\\"value2\\"}</Params>\\n        <CustomUserId>1234567890</CustomUserId>\\n        <Name>Tony</Name>\\n        <FacePicList>\\n            <FaceMd5>TestFaceMd5</FaceMd5>\\n            <FaceUrl>https://example.com/test.jpeg</FaceUrl>\\n            <FeatureDTOList>\\n                <AlgorithmVersion>TestAlgorithmVersion</AlgorithmVersion>\\n                <ErrorCode>200</ErrorCode>\\n                <AlgorithmProvider>TestAlgorithmProvider</AlgorithmProvider>\\n                <FaceMd5>TestFaceMd5</FaceMd5>\\n                <AlgorithmName>TestAlgorithmName</AlgorithmName>\\n            </FeatureDTOList>\\n        </FacePicList>\\n    </List>\\n</Data>\\n<Code>200</Code>\\n<Success>true</Success>\\n</QueryFaceUserByNameResponse>","errorExample":""}]',
      'title' => '	通过人脸名称查找人脸数据',
      'summary' => '通过人脸名称查找人脸数据。',
      'description' => '## 使用说明

- 单个阿里云账号调用该接口的每秒请求数（QPS）最大限制为100。

    > RAM用户共享阿里云账号配额。',
      'requestParamsDescription' => '调用API时，除了本文介绍的该API的特有请求参数，还需传入公共请求参数。公共请求参数说明，请参见[公共参数](~~288312~~)文档。',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DeleteRecord' => 
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
      ),
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'FileNameList',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '待删除的录像文件名列表。录像文件名可使用[QueryRecord](~~107922~~)获取。

> 单次最多支持删除50个的录像文件。',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'string',
            ),
            'required' => true,
            'example' => 'file1',
            'maxItems' => 50,
          ),
        ),
        1 => 
        array (
          'name' => 'IotInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。您可在物联网平台控制台的**实例概览**页面，查看当前实例的**ID**。

><notice>
- 若有ID值，必须传入该ID值，否则调用会失败。
- 若无<props="intl"><ph>**实例概览**页面或</ph></props>ID值，则无需传入。

></notice>

实例的更多信息，请参见[实例概述](~~356505~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'iot-060a****',
          ),
        ),
        2 => 
        array (
          'name' => 'ProductKey',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'IPC设备所属产品的ProductKey。
您可以在物联网平台控制台**产品**页查看或调用[QueryProductList](~~69271~~)查看当前账号下所有产品的信息。
><notice> 如果传入该参数，需同时传入**DeviceName**。
></notice>',
            'type' => 'string',
            'required' => false,
            'example' => 'a1BwAGV****',
          ),
        ),
        3 => 
        array (
          'name' => 'DeviceName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'IPC设备的设备名称。
您可以在物联网平台控制台的**设备**页查看**DeviceName**。
><notice> 如果传入该参数，需同时传入**ProductKey**。
></notice>',
            'type' => 'string',
            'required' => false,
            'example' => 'camera1',
          ),
        ),
        4 => 
        array (
          'name' => 'IotId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'IPC设备的设备ID。物联网平台为该设备颁发的ID，设备的唯一标识符。可调用物联网平台[QueryDeviceDetail](~~69594~~)查询。

><notice> 如果传入该参数，则无需传入**ProductKey**和**DeviceName**。**IotId**作为设备唯一标识符，和**ProductKey**与**DeviceName**的组合是一一对应的关系。如果您同时传入**IotId**和**ProductKey**与**DeviceName**的组合，则以**IotId**为准。
></notice>',
            'type' => 'string',
            'required' => false,
            'example' => 'd7XmBoJhAr88C6PelXDF00****',
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
              'Code' => 
              array (
                'description' => '接口返回码：

- **200**：表示成功。
- 其它：表示错误码。错误码详情，请参见[错误码](~~145071~~)。',
                'type' => 'string',
                'example' => '200',
              ),
              'ErrorMessage' => 
              array (
                'description' => '调用失败时，返回的出错信息。',
                'type' => 'string',
                'example' => 'tenant auth error.',
              ),
              'RequestId' => 
              array (
                'description' => '阿里云为该请求生成的唯一标识符。',
                'type' => 'string',
                'example' => '0A13279A-5640-45E7-87AA-83750541AD0E',
              ),
              'Success' => 
              array (
                'description' => '是否调用成功：
- **true**：调用成功。
- **false**：调用失败。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Data' => 
              array (
                'description' => '响应信息。',
                'type' => 'object',
                'properties' => 
                array (
                  'DeletedCount' => 
                  array (
                    'description' => '成功删除的录像文件数量。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '3',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"200\\",\\n  \\"ErrorMessage\\": \\"tenant auth error.\\",\\n  \\"RequestId\\": \\"0A13279A-5640-45E7-87AA-83750541AD0E\\",\\n  \\"Success\\": true,\\n  \\"Data\\": {\\n    \\"DeletedCount\\": 3\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DeleteRecordResponse>\\n<RequestId>0A13279A-5640-45E7-87AA-83750541AD0E</RequestId>\\n<Data>\\n    <DeletedCount>3</DeletedCount>\\n</Data>\\n<Code>200</Code>\\n<Success>true</Success>\\n</DeleteRecordResponse>","errorExample":""}]',
      'title' => '删除云端存储的录像文件',
      'summary' => '删除云端存储的录像文件。',
      'requestParamsDescription' => ' 调用API时，除了本文介绍的该API的特有请求参数，还需传入公共请求参数。公共请求参数说明，请参见[公共参数](~~141505~~)文档。',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'QueryRecordUrlByTime' => 
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
      ),
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'IotInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。

您可在物联网平台控制台的**实例概览**页面，查看当前实例的**ID**。若有ID值，必须传入该ID值，否则调用会失败。

> 如果公共实例没有ID值，请参见[如何获取实例ID](~~267533~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'iot-060a****',
          ),
        ),
        1 => 
        array (
          'name' => 'ProductKey',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'IPC设备所属产品的ProductKey。
您可以在物联网平台控制台**产品**页查看或调用[QueryProductList](~~69271~~)查看当前账号下所有产品的信息。
><notice> 如果传入该参数，需同时传入**DeviceName**。
></notice>',
            'type' => 'string',
            'required' => false,
            'example' => 'a1BwAGV****',
          ),
        ),
        2 => 
        array (
          'name' => 'DeviceName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'IPC设备的设备名称。
您可以在物联网平台控制台的**设备**页查看**DeviceName**。
><notice> 如果传入该参数，需同时传入**ProductKey**。
></notice>',
            'type' => 'string',
            'required' => false,
            'example' => 'camera1',
          ),
        ),
        3 => 
        array (
          'name' => 'IotId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'IPC设备的设备ID。物联网平台为该设备颁发的ID，设备的唯一标识符。可调用物联网平台[QueryDeviceDetail](~~69594~~)查询。

><notice> 如果传入该参数，则无需传入**ProductKey**和**DeviceName**。**IotId**作为设备唯一标识符，和**ProductKey**与**DeviceName**的组合是一一对应的关系。如果您同时传入**IotId**和**ProductKey**与**DeviceName**的组合，则以**IotId**为准。
></notice>',
            'type' => 'string',
            'required' => false,
            'example' => 'd7XmBoJhAr88C6PelXDF00****',
          ),
        ),
        4 => 
        array (
          'name' => 'StreamType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '码流类型：

- **0**（默认）：主码流
- **1**：辅码流',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '0',
            'default' => '0',
          ),
        ),
        5 => 
        array (
          'name' => 'BeginTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询范围起始时间，格式为10位时间戳，单位为秒。

最小取值为0，最大取值为2147483647。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'maximum' => '2147483647',
            'minimum' => '0',
            'example' => '1638675381',
          ),
        ),
        6 => 
        array (
          'name' => 'EndTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询范围结束时间，格式为10位时间戳，单位为秒。

最小取值为0，最大取值为2147483647。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'maximum' => '2147483647',
            'minimum' => '0',
            'example' => '1638866820',
          ),
        ),
        7 => 
        array (
          'name' => 'UrlValidDuration',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'URL有效期，取值范围为10~3600，单位为秒。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '3600',
            'minimum' => '10',
            'example' => '200',
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
              'Code' => 
              array (
                'description' => '接口返回码：

- **200**：表示成功。
- 其它：表示错误码。错误码详情，请参见[错误码](~~145071~~)。',
                'type' => 'string',
                'example' => '200',
              ),
              'Data' => 
              array (
                'description' => '录像文件的URL。URL包含鉴权信息，且无法重复使用。

录像文件的URL对应指定时间范围内所有的录像文件，将所有录像文件合并播放。
',
                'type' => 'string',
                'example' => 'https://linkvisual.aliyun.com/ddsffa****.m3u8',
              ),
              'ErrorMessage' => 
              array (
                'description' => '调用失败时，返回的出错信息。',
                'type' => 'string',
                'example' => 'tenant auth error',
              ),
              'RequestId' => 
              array (
                'description' => '阿里云为该请求生成的唯一标识符。',
                'type' => 'string',
                'example' => '06DC77A0-4622-42DB-9EE0-25FIOHS82JK1',
              ),
              'Success' => 
              array (
                'description' => '是否调用成功：
- **true**：调用成功。
- **false**：调用失败。',
                'type' => 'boolean',
                'example' => 'true',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"200\\",\\n  \\"Data\\": \\"https://linkvisual.aliyun.com/ddsffa****.m3u8\\",\\n  \\"ErrorMessage\\": \\"tenant auth error\\",\\n  \\"RequestId\\": \\"06DC77A0-4622-42DB-9EE0-25FIOHS82JK1\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<QueryRecordUrlByTimeResponse>\\n<RequestId>06DC77A0-4622-42DB-9EE0-25FIOHS82JK1</RequestId>\\n<Data>https://linkvisual.aliyun.com/ddsffa****.m3u8</Data>\\n<Code>200</Code>\\n<Success>true</Success>\\n</QueryRecordUrlByTimeResponse>","errorExample":""}]',
      'title' => 'QueryRecordUrlByTime',
      'summary' => '获取指定时间范围内的录像文件的播放URL。',
      'requestParamsDescription' => '调用API时，除了本文介绍的该API的特有请求参数，还需传入公共请求参数。公共请求参数说明，请参见[公共参数](~~141505~~)文档。',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'QueryCarProcessEvents' => 
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
      ),
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'IotInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。您可在物联网平台控制台的**实例概览**页面，查看当前实例的**ID**。

><notice>
- 若有ID值，必须传入该ID值，否则调用会失败。
- 若无<props="intl"><ph>**实例概览**页面或</ph></props>ID值，则无需传入。

></notice>

实例的更多信息，请参见[实例概述](~~356505~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'iotx-oxsshare****',
          ),
        ),
        1 => 
        array (
          'name' => 'SubIotId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'IPC设备的设备ID。物联网平台为该设备颁发的ID，设备的唯一标识符。可调用物联网平台[QueryDeviceDetail](~~69594~~)查询。

><notice> 如果传入该参数，则无需传入**ProductKey**和**DeviceName**。**IotId**作为设备唯一标识符，和**ProductKey**与**DeviceName**的组合是一一对应的关系。如果您同时传入**IotId**和**ProductKey**与**DeviceName**的组合，则以**IotId**为准。
></notice>',
            'type' => 'string',
            'required' => false,
            'example' => 'ImP6ECd1aQ****CAfWTO000101',
          ),
        ),
        2 => 
        array (
          'name' => 'SubProductKey',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'IPC设备所属产品的ProductKey。
您可以在物联网平台控制台**产品**页查看或调用[QueryProductList](~~69271~~)查看当前账号下所有产品的信息。
><notice> 如果传入该参数，需同时传入**DeviceName**。
></notice>',
            'type' => 'string',
            'required' => false,
            'example' => 'a1Duh0F****',
          ),
        ),
        3 => 
        array (
          'name' => 'SubDeviceName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'IPC设备的设备名称。
您可以在物联网平台控制台的**设备**页查看**DeviceName**。
><notice> 如果传入该参数，需同时传入**ProductKey**。
></notice>',
            'type' => 'string',
            'required' => false,
            'example' => 'car_test',
          ),
        ),
        4 => 
        array (
          'name' => 'BeginTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询范围起始时间，格式为13位时间戳，单位为毫秒。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'maximum' => '10000000000000',
            'minimum' => '0',
            'example' => '1646288487368',
          ),
        ),
        5 => 
        array (
          'name' => 'EndTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询范围结束时间，格式为13位时间戳，单位为毫秒。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'maximum' => '10000000000000',
            'minimum' => '0',
            'example' => '1646288488368',
          ),
        ),
        6 => 
        array (
          'name' => 'CurrentPage',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定从返回结果中的第几页开始显示。页数从1开始排序。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'maximum' => '10000',
            'minimum' => '1',
            'example' => '1',
          ),
        ),
        7 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '每页显示的条数。最小值为1，最大值为20，默认值为10。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'maximum' => '50',
            'minimum' => '1',
            'example' => '10',
          ),
        ),
        8 => 
        array (
          'name' => 'PlateNo',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '车牌号码。最大支持输入15个字符。',
            'type' => 'string',
            'required' => false,
            'example' => '浙AM****',
          ),
        ),
        9 => 
        array (
          'name' => 'ActionType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '车辆的动作类型，包含以下三种类型：

- **1**：进入
- **2**：停留
-  **3**：离开',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '100',
            'minimum' => '0',
            'example' => '2',
          ),
        ),
        10 => 
        array (
          'name' => 'AreaIndex',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'IPC设备的检测框。您可调用[InvokeThingService](~~69584~~)查询检测框数量。其中**identifier**设置为**QueryAlgoTaskDetails**。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '10',
            'minimum' => '0',
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
              'Code' => 
              array (
                'description' => '接口返回码：

- **200**：表示成功。
- 其它：表示错误码。错误码详情，请参见[错误码](~~288314~~)。',
                'type' => 'string',
                'example' => '200',
              ),
              'ErrorMessage' => 
              array (
                'description' => '调用失败时，返回的出错信息。',
                'type' => 'string',
                'example' => 'Specified access key is not found.',
              ),
              'RequestId' => 
              array (
                'description' => '阿里云为该请求生成的唯一标识符。',
                'type' => 'string',
                'example' => '8B8E77F0-7713-0139-A3D6-93482A025D45',
              ),
              'Success' => 
              array (
                'description' => '是否调用成功：
- **true**：调用成功。
- **false**：调用失败。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Data' => 
              array (
                'description' => '调用成功时，返回的数据。',
                'type' => 'object',
                'properties' => 
                array (
                  'CurrentPage' => 
                  array (
                    'description' => '当前页码。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                  'PageSize' => 
                  array (
                    'description' => '每页显示的条数。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '10',
                  ),
                  'Total' => 
                  array (
                    'description' => '车辆识别事件总数。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '50',
                  ),
                  'PageCount' => 
                  array (
                    'description' => '总页数。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                  'PageData' => 
                  array (
                    'description' => '返回的智能告警事件列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'EventPicUrl' => 
                        array (
                          'description' => '智能告警事件照片URL地址。',
                          'type' => 'string',
                          'example' => 'https://example.com/test.jpg',
                        ),
                        'EventTime' => 
                        array (
                          'description' => '事件发生的时间戳，单位为毫秒。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1646288428361',
                        ),
                        'ActionType' => 
                        array (
                          'description' => '车辆的动作类型。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '1',
                        ),
                        'Confidence' => 
                        array (
                          'description' => '识别是车辆的自信度。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '63',
                        ),
                        'SubProductKey' => 
                        array (
                          'description' => 'IPC设备的ProductKey。',
                          'type' => 'string',
                          'example' => 'a1Duh0F****',
                        ),
                        'EventId' => 
                        array (
                          'description' => '智能告警事件ID。',
                          'type' => 'string',
                          'example' => 'dailyb3d6658d9****',
                        ),
                        'SubIotId' => 
                        array (
                          'description' => 'IPC设备的设备ID。',
                          'type' => 'string',
                          'example' => 'ImP6ECd1aQxio9CAfWTO****',
                        ),
                        'AreaIndex' => 
                        array (
                          'description' => 'IPC设备识别检测框的数量。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '0',
                        ),
                        'EventType' => 
                        array (
                          'description' => '智能告警事件类型：

- 设置为全部智能告警事件：0。
- 设置为多个智能告警事件：输入智能告警事件对应的序号，并用英文逗号（,）分隔，例如：`10001,10002`。
>设置多个智能告警事件时，单次最多支持设置10个。

请在物联网平台控制台，**产品详情**页面的**功能定义**页签，查看全部智能告警事件类型。详细信息，请参考[查看智能告警事件类型](~~207701~~)。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '10005',
                        ),
                        'EventPicId' => 
                        array (
                          'description' => '智能告警事件照片ID。',
                          'type' => 'string',
                          'example' => 'SU5LT2pXaUM4MV****Nzg',
                        ),
                        'TaskId' => 
                        array (
                          'description' => '车辆检测事件的任务ID。',
                          'type' => 'string',
                          'example' => 'daily55617e7653354490938d****',
                        ),
                        'SubDeviceName' => 
                        array (
                          'description' => 'IPC设备的DeviceName。',
                          'type' => 'string',
                          'example' => 'car_test',
                        ),
                        'IotId' => 
                        array (
                          'description' => 'V系列边缘一体机的设备IotId。',
                          'type' => 'string',
                          'example' => 'gl9kLgp0UsPSCcIM8EAY00****',
                        ),
                        'SubDeviceNickName' => 
                        array (
                          'description' => 'IPC设备的DeviceNickName。',
                          'type' => 'string',
                          'example' => '测试车辆',
                        ),
                        'PlateNo' => 
                        array (
                          'description' => '车牌号。',
                          'type' => 'string',
                          'example' => '浙A6****',
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
            'errorCode' => 'iot.lv.requestError',
            'errorMessage' => 'Request error',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'iot.lv.requestParamError',
            'errorMessage' => 'Request parameter error.',
          ),
          1 => 
          array (
            'errorCode' => 'iot.lv.requestAuthError',
            'errorMessage' => 'Request auth error.',
          ),
          2 => 
          array (
            'errorCode' => 'iot.lv.requestTimeError',
            'errorMessage' => 'Request time error.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"200\\",\\n  \\"ErrorMessage\\": \\"Specified access key is not found.\\",\\n  \\"RequestId\\": \\"8B8E77F0-7713-0139-A3D6-93482A025D45\\",\\n  \\"Success\\": true,\\n  \\"Data\\": {\\n    \\"CurrentPage\\": 1,\\n    \\"PageSize\\": 10,\\n    \\"Total\\": 50,\\n    \\"PageCount\\": 1,\\n    \\"PageData\\": [\\n      {\\n        \\"EventPicUrl\\": \\"https://example.com/test.jpg\\",\\n        \\"EventTime\\": 1646288428361,\\n        \\"ActionType\\": 1,\\n        \\"Confidence\\": 63,\\n        \\"SubProductKey\\": \\"a1Duh0F****\\",\\n        \\"EventId\\": \\"dailyb3d6658d9****\\",\\n        \\"SubIotId\\": \\"ImP6ECd1aQxio9CAfWTO****\\",\\n        \\"AreaIndex\\": 0,\\n        \\"EventType\\": 10005,\\n        \\"EventPicId\\": \\"SU5LT2pXaUM4MV****Nzg\\",\\n        \\"TaskId\\": \\"daily55617e7653354490938d****\\",\\n        \\"SubDeviceName\\": \\"car_test\\",\\n        \\"IotId\\": \\"gl9kLgp0UsPSCcIM8EAY00****\\",\\n        \\"SubDeviceNickName\\": \\"测试车辆\\",\\n        \\"PlateNo\\": \\"浙A6****\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<QueryCarProcessEventsResponse>\\n<RequestId>8B8E77F0-7713-0139-A3D6-93482A025D45</RequestId>\\n<Data>\\n    <PageSize>10</PageSize>\\n    <PageCount>1</PageCount>\\n    <CurrentPage>1</CurrentPage>\\n    <Total>50</Total>\\n    <PageData>\\n        <TaskId>daily55617e7653354490938d****</TaskId>\\n        <ActionType>1</ActionType>\\n        <EventType>10005</EventType>\\n        <SubIotId>ImP6ECd1aQxio9CAfWTO****</SubIotId>\\n        <SubDeviceNickName>测试车辆</SubDeviceNickName>\\n        <EventPicId>SU5LT2pXaUM4MV****Nzg</EventPicId>\\n        <IotId>gl9kLgp0UsPSCcIM8EAY00****</IotId>\\n        <EventPicUrl>https://example.com/test.jpg</EventPicUrl>\\n        <Confidence>63</Confidence>\\n        <SubProductKey>a1Duh0F****</SubProductKey>\\n        <EventTime>1646288428361</EventTime>\\n        <SubDeviceName>car_test</SubDeviceName>\\n        <EventId>dailyb3d6658d9****</EventId>\\n        <AreaIndex>0</AreaIndex>\\n        <PlateNo>浙A6****</PlateNo>\\n    </PageData>\\n</Data>\\n<Code>200</Code>\\n<Success>true</Success>\\n</QueryCarProcessEventsResponse>","errorExample":""}]',
      'title' => 'QueryCarProcessEvents',
      'summary' => '调用该接口查询车辆作业的智能告警事件列表。',
      'description' => '## 使用说明
单个阿里云账号调用改接口的每秒请求数（QOS）最大限制为10。  
> RAM用户共享阿里云账号配额。',
      'requestParamsDescription' => ' 调用API时，除了本文介绍的该API的特有请求参数，还需传入公共请求参数。公共请求参数说明，请参见[公共参数](~~288312~~)文档。',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DeletePicture' => 
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
      ),
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'PictureIdList',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '图片ID列表。图片ID由调用[TriggerCapturePicture](~~107914~~)时生成。

> 单次调用最多支持输入50个图片ID。
',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'string',
            ),
            'required' => true,
            'example' => 'cFc5MzZ****npYT1***TDFzX1hrVzA0Z****',
            'maxItems' => 100,
          ),
        ),
        1 => 
        array (
          'name' => 'ProductKey',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'IPC设备所属产品的ProductKey。
您可以在物联网平台控制台**产品**页查看或调用[QueryProductList](~~69271~~)查看当前账号下所有产品的信息。
><notice> 如果传入该参数，需同时传入**DeviceName**。
></notice>',
            'type' => 'string',
            'required' => false,
            'example' => 'a1BwAGV****',
          ),
        ),
        2 => 
        array (
          'name' => 'DeviceName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'IPC设备的设备名称。
您可以在物联网平台控制台的**设备**页查看**DeviceName**。
><notice> 如果传入该参数，需同时传入**ProductKey**。
></notice>',
            'type' => 'string',
            'required' => false,
            'example' => 'camera1',
          ),
        ),
        3 => 
        array (
          'name' => 'IotId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'IPC设备的设备ID。物联网平台为该设备颁发的ID，设备的唯一标识符。可调用物联网平台[QueryDeviceDetail](~~69594~~)查询。

><notice> 如果传入该参数，则无需传入**ProductKey**和**DeviceName**。**IotId**作为设备唯一标识符，和**ProductKey**与**DeviceName**的组合是一一对应的关系。如果您同时传入**IotId**和**ProductKey**与**DeviceName**的组合，则以**IotId**为准。
></notice>',
            'type' => 'string',
            'required' => false,
            'example' => '1CJ0****e7qiq8VkQi1000000',
          ),
        ),
        4 => 
        array (
          'name' => 'IotInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。您可在物联网平台控制台的**实例概览**页面，查看当前实例的**ID**。

><notice>
- 若有ID值，必须传入该ID值，否则调用会失败。
- 若无<props="intl"><ph>**实例概览**页面或</ph></props>ID值，则无需传入。

></notice>

实例的更多信息，请参见[实例概述](~~356505~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'iot-cn-n6w1y******',
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
              'Code' => 
              array (
                'description' => '接口返回码：

- **200**：表示成功。
- 其它：表示错误码。错误码详情，请参见[错误码](~~145071~~)。',
                'type' => 'string',
                'example' => '200',
              ),
              'ErrorMessage' => 
              array (
                'description' => '调用失败时，返回的出错信息。',
                'type' => 'string',
                'example' => 'request forbidden',
              ),
              'RequestId' => 
              array (
                'description' => '阿里云为该请求生成的唯一标识符。',
                'type' => 'string',
                'example' => '06DC77A0-4622-42DB-9EE0-25FIOHS82JK1',
              ),
              'Success' => 
              array (
                'description' => '是否调用成功：
- **true**：调用成功。
- **false**：调用失败。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Data' => 
              array (
                'description' => '响应结果。',
                'type' => 'object',
                'properties' => 
                array (
                  'DeletedCount' => 
                  array (
                    'description' => '成功删除的云端图片数量。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '3',
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
            'errorCode' => 'iot.lv.requestError',
            'errorMessage' => 'Request error',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'iot.lv.requestParamError',
            'errorMessage' => 'Request parameter error.',
          ),
          1 => 
          array (
            'errorCode' => 'iot.lv.requestAuthError',
            'errorMessage' => 'Request auth error.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"200\\",\\n  \\"ErrorMessage\\": \\"request forbidden\\",\\n  \\"RequestId\\": \\"06DC77A0-4622-42DB-9EE0-25FIOHS82JK1\\",\\n  \\"Success\\": true,\\n  \\"Data\\": {\\n    \\"DeletedCount\\": 3\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DeletePictureResponse>\\n    <RequestId>06DC77A0-4622-42DB-9EE0-25FIOHS82JK1</RequestId>\\n    <Data>\\n        <DeletedCount>3</DeletedCount>\\n    </Data>\\n    <Code>200</Code>\\n    <Success>true</Success>\\n</DeletePictureResponse>","errorExample":""}]',
      'title' => 'DeletePicture',
      'summary' => '调用该接口，批量删除指定IPC设备下指定图片ID的云端图片。',
      'requestParamsDescription' => '调用API时，除了本文介绍的该API的特有请求参数，还需传入公共请求参数。公共请求参数说明，请参见[公共参数](~~141505~~)文档。',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'UpdateInstanceInternetProtocol' => 
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
      ),
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'IotInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。您可在物联网平台控制台的**实例概览**页面，查看当前实例的**ID**。

><notice>
- 若有ID值，必须传入该ID值，否则调用会失败。
- 若无<props="intl"><ph>**实例概览**页面或</ph></props>ID值，则无需传入。

></notice>

实例的更多信息，请参见[实例概述](~~356505~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'iot-cn-n6w1y59****',
          ),
        ),
        1 => 
        array (
          'name' => 'IpVersion',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'IP协议版本：
- IPv4（默认）
- IPv6

> 当IP协议版本设置为IPv6，流媒体相关地址会修改为IPv4/IPv6双栈地址，请确保您的设备和应用端已完成IPv6相关设置，否则会出现播放画面加载失败等异常情况。',
            'type' => 'string',
            'required' => true,
            'example' => 'IPv4',
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
              'Code' => 
              array (
                'description' => '接口返回码：

- **200**：表示成功。
- 其它：表示错误码。错误码详情，请参见[错误码](~~145071~~)。',
                'type' => 'string',
                'example' => '200',
              ),
              'Data' => 
              array (
                'description' => '响应结果。',
                'type' => 'object',
                'example' => '无',
              ),
              'ErrorMessage' => 
              array (
                'description' => '调用失败时，返回的出错信息。',
                'type' => 'string',
                'example' => 'InvalidParameter',
              ),
              'RequestId' => 
              array (
                'description' => '阿里云为该请求生成的唯一标识符。',
                'type' => 'string',
                'example' => '06DC77A0-4622-42DB-9EE0-25FIOHS82JK1',
              ),
              'Success' => 
              array (
                'description' => '是否调用成功：
- **true**：调用成功。
- **false**：调用失败。',
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
            'errorCode' => 'iot.lv.requestError',
            'errorMessage' => 'Request error',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'iot.lv.requestParamError',
            'errorMessage' => 'Request parameter error.',
          ),
          1 => 
          array (
            'errorCode' => 'iot.lv.requestAuthError',
            'errorMessage' => 'Request auth error.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"200\\",\\n  \\"Data\\": {\\n    \\"test\\": \\"test\\",\\n    \\"test2\\": 1\\n  },\\n  \\"ErrorMessage\\": \\"InvalidParameter\\",\\n  \\"RequestId\\": \\"06DC77A0-4622-42DB-9EE0-25FIOHS82JK1\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<UpdateInstanceInternetProtocolResponse>\\n    <RequestId>06DC77A0-4622-42DB-9EE0-25FIOHS82JK1</RequestId>\\n    <Code>200</Code>\\n    <Success>true</Success>\\n</UpdateInstanceInternetProtocolResponse>","errorExample":""}]',
      'title' => 'UpdateInstanceInternetProtocol',
      'summary' => '调用该接口设置实例支持的IP协议版本。',
      'requestParamsDescription' => '调用API时，除了本文介绍的该API的特有请求参数，还需传入公共请求参数。公共请求参数说明，请参见[公共参数](~~141505~~)文档。',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'CreateRecordDownloadByTimeJob' => 
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
      ),
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'IotInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。您可在物联网平台控制台的**实例概览**页签，查看当前实例的ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'iot-******',
          ),
        ),
        1 => 
        array (
          'name' => 'ProductKey',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '视频设备所属产品的**ProductKey**。

您可以在[物联网平台控制台](https://iot.console.aliyun.com/product)的**产品**页面或调用[QueryProductList](~~69271~~)接口，查看当前实例下所有产品的信息。

><notice> 如果传入该参数，需同时传入**DeviceName**。
></notice>',
            'type' => 'string',
            'required' => false,
            'example' => 'a1Bw******',
          ),
        ),
        2 => 
        array (
          'name' => 'DeviceName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '视频设备的设备名称。您可以在[物联网平台控制台](https://iot.console.aliyun.com/devices)的**设备**页面，或调用[QueryDevice](~~69905~~)接口查看指定产品下设备的**DeviceName**。

><notice> 如果传入该参数，需同时传入**ProductKey**。
></notice>',
            'type' => 'string',
            'required' => false,
            'example' => 'Device01',
          ),
        ),
        3 => 
        array (
          'name' => 'StreamType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '码流类型。可选：

- **0**（默认）：主码流。
- **1**：辅码流。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '0',
            'default' => '0',
          ),
        ),
        4 => 
        array (
          'name' => 'BeginTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '开始时间，格式为10位的时间戳，单位为秒。取值范围0~2147483647。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'maximum' => '2147483648',
            'minimum' => '0',
            'example' => '1900000000',
          ),
        ),
        5 => 
        array (
          'name' => 'RecordType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '录像类型。可选：

- **0**：连续录像。
- **1**：事件录像。
- **2**：主动录像。
- **4**：本地上云录像。
- **为空**：表示全部录像。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '0',
          ),
        ),
        6 => 
        array (
          'name' => 'IotId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '视频设备的设备ID。可调用[QueryDeviceDetail](~~69594~~)接口查询。

><notice> **IotId**作为设备唯一标识符，和**ProductKey**与**DeviceName**组合是一一对应的关系。如果传入该参数，则无需传入**ProductKey**和**DeviceName**。如果您同时传入**IotId**和**ProductKey**与**DeviceName**组合，则以**IotId**为准。
></notice>',
            'type' => 'string',
            'required' => false,
            'example' => 'C47T6xwp6ms4bNlkHRWCg4****',
          ),
        ),
        7 => 
        array (
          'name' => 'EndTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '结束时间，格式为10位的时间戳，单位为秒。取值范围为0~2147483647，必须大于开始时间**BeginTime**。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'maximum' => '9999999999999',
            'minimum' => '0',
            'example' => '2100000000',
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
              'Code' => 
              array (
                'description' => '调用结果状态码：

- 调用成功，返回200。
- 调用失败，返回错误码。详细信息，请参见下文**错误码**。',
                'type' => 'string',
                'example' => '400',
              ),
              'ErrorMessage' => 
              array (
                'description' => '调用失败时，返回的出错信息。',
                'type' => 'string',
                'example' => 'Record not exist.',
              ),
              'RequestId' => 
              array (
                'description' => '阿里云为该请求生成的唯一标识符。',
                'type' => 'string',
                'example' => 'E55***B7-4***-4***-8***-D3******F565',
              ),
              'Success' => 
              array (
                'description' => '是否调用成功。
- **true**：调用成功。
- **false**：调用失败。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Data' => 
              array (
                'description' => '调用成功，返回的数据。',
                'type' => 'object',
                'properties' => 
                array (
                  'JobId' => 
                  array (
                    'description' => '任务ID。',
                    'type' => 'string',
                    'example' => 'w2s******',
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
            'errorCode' => 'iot.vision.RecordNotExist',
            'errorMessage' => 'Record not exist.',
          ),
          1 => 
          array (
            'errorCode' => 'iot.vision.DownloadJobError',
            'errorMessage' => 'Download job error.',
          ),
          2 => 
          array (
            'errorCode' => 'iot.vision.ConcurrencyExceedLimit',
            'errorMessage' => 'Concurrency exceed the limit.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'iot.lv.requestParamError',
            'errorMessage' => 'Request parameter error.',
          ),
          1 => 
          array (
            'errorCode' => 'iot.lv.requestAuthError',
            'errorMessage' => 'Request auth error.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"400\\",\\n  \\"ErrorMessage\\": \\"Record not exist.\\",\\n  \\"RequestId\\": \\"E55***B7-4***-4***-8***-D3******F565\\",\\n  \\"Success\\": true,\\n  \\"Data\\": {\\n    \\"JobId\\": \\"w2s******\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<CreateRecordDownloadByTimeJobResponse>\\n<RequestId>E55***B7-4***-4***-8***-D3******F565</RequestId>\\n<Data>\\n    <JobId>w2s******</JobId>\\n</Data>\\n<Code>200</Code>\\n<Success>true</Success>\\n</CreateRecordDownloadByTimeJobResponse>","errorExample":""}]',
      'title' => 'CreateRecordDownloadByTimeJob',
      'summary' => '调用该接口创建按时间下载云端录像的任务。',
      'description' => '## 使用限制

- 单次按时间下载时长限制：30分钟。
- 下载时间精度： 下载时间范围精度在10秒内。例如截取选择下载20秒数据， 可能会出现最多下载了30秒数据的情况。
- 单次按时间下载录像文件数量限制：100。
- 下载任务和文件最多保存时长为1天, 超时后可重新下载。
- 单实例最多同时支持下载并发限制为10路（下载完成不计入）。
- 若音视频编码参数发生改变，默认下载的录像为前半段录像。
- 若下载录像时间存在重叠，云端会对数据重叠部分去重。


## QPS限制

单个阿里云账号调用该接口的每秒请求数（QPS）最大限制为50。

> 单个阿里云账号下的所有RAM用户共享该阿里云账号的配额。',
      'requestParamsDescription' => '调用API时，除了本文介绍的该API的特有请求参数，还需传入公共请求参数。公共请求参数说明，请参见[公共参数](~~141505~~)。',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'QueryRecordDownloadJobById' => 
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
      ),
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'IotInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。您可在物联网平台控制台的**实例概览**页签，查看当前实例的ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'Iot-r******',
          ),
        ),
        1 => 
        array (
          'name' => 'JobId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '云端录像下载任务的ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'w2s******',
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
              'Code' => 
              array (
                'description' => '调用结果状态码：

- 调用成功，返回200。
- 调用失败，返回错误码。详细信息，请参见下文**错误码**。',
                'type' => 'string',
                'example' => '400',
              ),
              'ErrorMessage' => 
              array (
                'description' => '调用失败时，返回的出错信息。',
                'type' => 'string',
                'example' => 'Request failed.',
              ),
              'RequestId' => 
              array (
                'description' => '阿里云为该请求生成的唯一标识符。',
                'type' => 'string',
                'example' => 'E55***B7-4***-4***-8***-D3******F565',
              ),
              'Success' => 
              array (
                'description' => '是否调用成功。
- **true**：调用成功。
- **false**：调用失败。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Data' => 
              array (
                'description' => '调用成功，返回的数据。',
                'type' => 'object',
                'properties' => 
                array (
                  'Status' => 
                  array (
                    'description' => '录像文件的生成状态。

- **-1**：录像文件生成异常。
- **0**：录像文件已生成完毕。
- **1**：录像文件正在生成中。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '-1',
                  ),
                  'EndTime' => 
                  array (
                    'description' => '查询范围结束时间，格式为10位时间戳，单位为秒。 取值范围为0~2147483647。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '2100000000',
                  ),
                  'Type' => 
                  array (
                    'description' => '下载类型。

- **1**：按文件下载。
- **2**：设备云端录像按时间范围下载。
- **3**：设备本地录像按时间范围下载。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                  'Progress' => 
                  array (
                    'description' => '录像文件生成进度，范围为0~100。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '90',
                  ),
                  'RecordType' => 
                  array (
                    'description' => '录像类型。

- **0**：连续录像。
- **1**：事件录像。
- **2**：主动录像。
- **4**：本地上云录像。
- **99**：混合类型。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '0',
                  ),
                  'StreamType' => 
                  array (
                    'description' => '码流类型。

- **0**：主码流。
- **1**：辅码流。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '0',
                  ),
                  'BeginTime' => 
                  array (
                    'description' => '查询范围起始时间，格式为10位的时间戳，单位为秒。取值范围为0~2147483647。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1900000000',
                  ),
                  'Url' => 
                  array (
                    'description' => '云端录像下载地址，有效期为1小时。',
                    'type' => 'string',
                    'example' => 'http://*********',
                  ),
                  'JobErrorCode' => 
                  array (
                    'description' => '任务异常原因，当**Status**为**-1**时返回异常信息：

- **9441**：网络异常。
- **9442**：音视频数据错误。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '9441',
                  ),
                  'FileName' => 
                  array (
                    'description' => '文件名，**Type**为1时，显示该参数。',
                    'type' => 'string',
                    'example' => 'testfile',
                  ),
                  'IotId' => 
                  array (
                    'description' => '设备ID。',
                    'type' => 'string',
                    'example' => 'C47T6xwp6ms4bNlkHRWCg4****',
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
            'errorCode' => 'iot.vision.JobNotExist',
            'errorMessage' => 'Job not exist or expired.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'iot.lv.requestParamError',
            'errorMessage' => 'Request parameter error.',
          ),
          1 => 
          array (
            'errorCode' => 'iot.lv.requestAuthError',
            'errorMessage' => 'Request auth error.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"400\\",\\n  \\"ErrorMessage\\": \\"Request failed.\\",\\n  \\"RequestId\\": \\"E55***B7-4***-4***-8***-D3******F565\\",\\n  \\"Success\\": true,\\n  \\"Data\\": {\\n    \\"Status\\": -1,\\n    \\"EndTime\\": 2100000000,\\n    \\"Type\\": 1,\\n    \\"Progress\\": 90,\\n    \\"RecordType\\": 0,\\n    \\"StreamType\\": 0,\\n    \\"BeginTime\\": 1900000000,\\n    \\"Url\\": \\"http://*********\\",\\n    \\"JobErrorCode\\": 9441,\\n    \\"FileName\\": \\"testfile\\",\\n    \\"IotId\\": \\"C47T6xwp6ms4bNlkHRWCg4****\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<QueryRecordDownloadJobByIdResponse>\\n<RequestId>E55***B7-4***-4***-8***-D3******F565</RequestId>\\n<Data>\\n    <Status>-1</Status>\\n    <IotId>C47T6xwp6ms4bNlkHRWCg4****</IotId>\\n    <StreamType>0</StreamType>\\n    <Progress>90</Progress>\\n    <Type>1</Type>\\n    <RecordType>0</RecordType>\\n    <EndTime>2100000000</EndTime>\\n    <JobErrorCode>9441</JobErrorCode>\\n    <FileName>testfile</FileName>\\n    <BeginTime>1900000000</BeginTime>\\n    <Url>http://*********</Url>\\n</Data>\\n<Code>200</Code>\\n<Success>true</Success>\\n</QueryRecordDownloadJobByIdResponse>","errorExample":""}]',
      'title' => 'QueryRecordDownloadJobById',
      'summary' => '调用该接口按任务ID查询云端录像下载任务的详细信息，包括起始时间、录像进度、录像类型和下载地址等。',
      'description' => '## 使用限制

获取到的录像下载地址有效期为1小时。

## QPS限制

单个阿里云账号调用该接口的每秒请求数（QPS）最大限制为50。

> 单个阿里云账号下的所有RAM用户共享该阿里云账号的配额。',
      'requestParamsDescription' => ' 调用API时，除了本文介绍的该API的特有请求参数，还需传入公共请求参数。公共请求参数说明，请参见[公共参数](~~141505~~)。',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'QueryRecordDownloadJobList' => 
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
      ),
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'IotInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。您可在物联网平台控制台的**实例概览**页签，查看当前实例的ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'iot-2w******',
          ),
        ),
        1 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定返回结果中每页显示的设备数量，最大值是50。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'maximum' => '50',
            'minimum' => '1',
            'example' => '1',
          ),
        ),
        2 => 
        array (
          'name' => 'ProductKey',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '视频设备所属产品的**ProductKey**。

您可以在[物联网平台控制台](https://iot.console.aliyun.com/product)的**产品**页面或调用[QueryProductList](~~69271~~)接口，查看当前实例下所有产品的信息。

><notice> 如果传入该参数，需同时传入**DeviceName**。
></notice>',
            'type' => 'string',
            'required' => false,
            'example' => 'a1Bw******',
          ),
        ),
        3 => 
        array (
          'name' => 'DeviceName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '视频设备的设备名称。您可以在[物联网平台控制台](https://iot.console.aliyun.com/devices)的**设备**页面，或调用[QueryDevice](~~69905~~)接口查看指定产品下设备的**DeviceName**。

><notice> 如果传入该参数，需同时传入**ProductKey**。
></notice>',
            'type' => 'string',
            'required' => false,
            'example' => 'Device01',
          ),
        ),
        4 => 
        array (
          'name' => 'IotId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '视频设备的设备ID。可调用[QueryDeviceDetail](~~69594~~)接口查询。

><notice> **IotId**作为设备唯一标识符，和**ProductKey**与**DeviceName**组合是一一对应的关系。如果传入该参数，则无需传入**ProductKey**和**DeviceName**。如果您同时传入**IotId**和**ProductKey**与**DeviceName**组合，则以**IotId**为准。
></notice>',
            'type' => 'string',
            'required' => false,
            'example' => 'C47T6xwp6ms4bNlkHRWCg4****',
          ),
        ),
        5 => 
        array (
          'name' => 'CurrentPage',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定从返回结果中的第几页开始显示。默认页数从1开始排序。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'minimum' => '1',
            'example' => '1',
            'default' => '1',
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
              'Code' => 
              array (
                'description' => '调用结果状态码：

- 调用成功，返回200。
- 调用失败，返回错误码。详细信息，请参见下文**错误码**。',
                'type' => 'string',
                'example' => '400',
              ),
              'ErrorMessage' => 
              array (
                'description' => '调用失败时，返回的出错信息。',
                'type' => 'string',
                'example' => 'iot.vision.RequestFailed',
              ),
              'RequestId' => 
              array (
                'description' => '阿里云为该请求生成的唯一标识符。',
                'type' => 'string',
                'example' => 'E55***B7-4***-4***-8***-D3******F565',
              ),
              'Success' => 
              array (
                'description' => '是否调用成功。
- **true**：调用成功。
- **false**：调用失败。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Data' => 
              array (
                'description' => '调用成功后，返回的任务列表。',
                'type' => 'object',
                'properties' => 
                array (
                  'Total' => 
                  array (
                    'description' => '任务总数。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                  'JobList' => 
                  array (
                    'description' => '云端录像下载任务的详细信息。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Status' => 
                        array (
                          'description' => '录像文件的生成状态。

- **-1**：录像文件生成异常。
- **0**：录像文件已生成完毕。
- **1**：录像文件正在生成中。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '-1',
                        ),
                        'Type' => 
                        array (
                          'description' => '下载类型。

- **1**：按文件下载。
- **2**：设备云端录像按时间范围下载。
- **3**：设备本地录像按时间范围下载。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '1',
                        ),
                        'Progress' => 
                        array (
                          'description' => '录像文件生成进度，范围为0~100。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '90',
                        ),
                        'RecordType' => 
                        array (
                          'description' => '录像类型。

- **0**：连续录像。
- **1**：事件录像。
- **2**：主动录像。
- **4**：本地上云录像。
- **99**：混合类型。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '0',
                        ),
                        'BeginTime' => 
                        array (
                          'description' => '查询范围起始时间，格式为10位的时间戳，单位为秒。取值范围为0~2147483647。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '1900000000',
                        ),
                        'Url' => 
                        array (
                          'description' => '云端录像下载地址，有效期为1小时。',
                          'type' => 'string',
                          'example' => 'http://*********',
                        ),
                        'FileName' => 
                        array (
                          'description' => '文件名，**Type**为1时，显示该参数。',
                          'type' => 'string',
                          'example' => 'testfile',
                        ),
                        'EndTime' => 
                        array (
                          'description' => '查询范围结束时间，格式为10位时间戳，单位为秒。 取值范围为0~2147483647。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '2100000000',
                        ),
                        'StreamType' => 
                        array (
                          'description' => '码流类型。

- **0**：主码流。
- **1**：辅码流。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '0',
                        ),
                        'JobId' => 
                        array (
                          'description' => '任务ID。',
                          'type' => 'string',
                          'example' => 'w2s******',
                        ),
                        'JobErrorCode' => 
                        array (
                          'description' => '任务异常原因，当**Status**为**-1**时返回异常信息：

- **9441**：网络异常。
- **9442**：音视频数据错误。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '9441',
                        ),
                        'IotId' => 
                        array (
                          'description' => '设备ID。',
                          'type' => 'string',
                          'example' => 'C47T6xwp6ms4bNlkHRWCg4****',
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
            'errorCode' => 'iot.vision.RequestFailed',
            'errorMessage' => 'Request failed.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'iot.lv.requestParamError',
            'errorMessage' => 'Request parameter error.',
          ),
          1 => 
          array (
            'errorCode' => 'iot.lv.requestAuthError',
            'errorMessage' => 'Request auth error.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"400\\",\\n  \\"ErrorMessage\\": \\"iot.vision.RequestFailed\\",\\n  \\"RequestId\\": \\"E55***B7-4***-4***-8***-D3******F565\\",\\n  \\"Success\\": true,\\n  \\"Data\\": {\\n    \\"Total\\": 1,\\n    \\"JobList\\": [\\n      {\\n        \\"Status\\": -1,\\n        \\"Type\\": 1,\\n        \\"Progress\\": 90,\\n        \\"RecordType\\": 0,\\n        \\"BeginTime\\": 1900000000,\\n        \\"Url\\": \\"http://*********\\",\\n        \\"FileName\\": \\"testfile\\",\\n        \\"EndTime\\": 2100000000,\\n        \\"StreamType\\": 0,\\n        \\"JobId\\": \\"w2s******\\",\\n        \\"JobErrorCode\\": 9441,\\n        \\"IotId\\": \\"C47T6xwp6ms4bNlkHRWCg4****\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<QueryRecordDownloadJobListResponse>\\n<RequestId>E55***B7-4***-4***-8***-D3******F565</RequestId>\\n<Data>\\n    <Total>1</Total>\\n    <JobList>\\n        <Status>-1</Status>\\n        <IotId>C47T6xwp6ms4bNlkHRWCg4****</IotId>\\n        <StreamType>0</StreamType>\\n        <Type>1</Type>\\n        <Progress>90</Progress>\\n        <RecordType>0</RecordType>\\n        <EndTime>2100000000</EndTime>\\n        <FileName>testfile</FileName>\\n        <JobErrorCode>9441</JobErrorCode>\\n        <BeginTime>1900000000</BeginTime>\\n        <JobId>w2s******</JobId>\\n        <Url>http://*********</Url>\\n    </JobList>\\n</Data>\\n<Code>200</Code>\\n<Success>true</Success>\\n</QueryRecordDownloadJobListResponse>","errorExample":""}]',
      'title' => 'QueryRecordDownloadJobList',
      'summary' => '调用该接口查询云端录像下载任务的列表。',
      'description' => '## 使用限制

获取到的录像下载地址有效期为1小时。

## QPS限制

单个阿里云账号调用该接口的每秒请求数（QPS）最大限制为50。

> 单个阿里云账号下的所有RAM用户共享该阿里云账号的配额。',
      'requestParamsDescription' => '  调用API时，除了本文介绍的该API的特有请求参数，还需传入公共请求参数。公共请求参数说明，请参见[公共参数](~~141505~~)。',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'CreateLocalRecordDownloadByTimeJob' => 
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
      ),
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'IotInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。您可在物联网平台控制台的**实例概览**页签，查看当前实例的ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'iot-******',
          ),
        ),
        1 => 
        array (
          'name' => 'ProductKey',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '视频设备所属产品的**ProductKey**。

您可以在物联网平台控制台的**产品**页面或调用[QueryProductList](~~69271~~)接口，查看当前实例下所有产品的信息。

><notice>如果传入该参数，需同时传入**DeviceName**。
></notice>',
            'type' => 'string',
            'required' => false,
            'example' => 'a1Bw******',
          ),
        ),
        2 => 
        array (
          'name' => 'DeviceName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '视频设备的设备名称。您可以在物联网平台控制台的**设备**页面，或调用[QueryDevice](~~69905~~)接口查看指定产品下设备的**DeviceName**。


><notice>如果传入该参数，需同时传入**ProductKey**。
></notice>',
            'type' => 'string',
            'required' => false,
            'example' => 'Device01',
          ),
        ),
        3 => 
        array (
          'name' => 'Speed',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '设备上传倍速。 默认值**1.0**，取值范围为**0.125**~**8.0**。',
            'type' => 'number',
            'format' => 'float',
            'required' => false,
            'example' => '1.0',
            'default' => '1.0',
          ),
        ),
        4 => 
        array (
          'name' => 'BeginTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '开始时间，格式为10位的时间戳，单位为秒。取值范围0~2147483647。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'maximum' => '2147483648',
            'minimum' => '0',
            'example' => '1900000000',
          ),
        ),
        5 => 
        array (
          'name' => 'IotId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '视频设备的设备ID。可调用[QueryDeviceDetail](~~69594~~)接口查询。

><notice>
**IotId**作为设备唯一标识符，和**ProductKey**与**DeviceName**组合是一一对应的关系。如果传入该参数，则无需传入**ProductKey**和**DeviceName**。如果您同时传入**IotId**和**ProductKey**与**DeviceName**组合，则以**IotId**为准。
></notice>',
            'type' => 'string',
            'required' => false,
            'example' => 'C47T6xwp6ms4bNlkHRWCg4****',
          ),
        ),
        6 => 
        array (
          'name' => 'EndTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '结束时间，格式为10位的时间戳，单位为秒。取值范围为0~2147483647，必须大于开始时间**BeginTime**。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'maximum' => '9999999999999',
            'minimum' => '0',
            'example' => '2100000000',
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
              'Code' => 
              array (
                'description' => '调用结果状态码：

- 调用成功，返回200。
- 调用失败，返回错误码。详细信息，请参见下文**错误码**。',
                'type' => 'string',
                'example' => '400',
              ),
              'ErrorMessage' => 
              array (
                'description' => '调用失败时，返回的出错信息。',
                'type' => 'string',
                'example' => 'Download job error.',
              ),
              'RequestId' => 
              array (
                'description' => '阿里云为该请求生成的唯一标识符。',
                'type' => 'string',
                'example' => 'E55***B7-4***-4***-8***-D3******F565',
              ),
              'Success' => 
              array (
                'description' => '是否调用成功。

- **true**：调用成功。
- **false**：调用失败。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Data' => 
              array (
                'description' => '调用成功，返回的数据。',
                'type' => 'object',
                'properties' => 
                array (
                  'JobId' => 
                  array (
                    'description' => '任务ID。',
                    'type' => 'string',
                    'example' => 'w2s******',
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
            'errorCode' => 'iot.vision.DownloadJobError',
            'errorMessage' => 'Download job error.',
          ),
          1 => 
          array (
            'errorCode' => 'iot.vision.ConcurrencyExceedLimit',
            'errorMessage' => 'Concurrency exceed the limit.',
          ),
          2 => 
          array (
            'errorCode' => 'iot.vision.StreamPushFailed',
            'errorMessage' => 'Stream push failed.',
          ),
          3 => 
          array (
            'errorCode' => 'iot.vision.DeviceOffline',
            'errorMessage' => 'Device is offline.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'iot.lv.requestParamError',
            'errorMessage' => 'Request parameter error.',
          ),
          1 => 
          array (
            'errorCode' => 'iot.lv.requestAuthError',
            'errorMessage' => 'Request auth error.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"400\\",\\n  \\"ErrorMessage\\": \\"Download job error.\\",\\n  \\"RequestId\\": \\"E55***B7-4***-4***-8***-D3******F565\\",\\n  \\"Success\\": true,\\n  \\"Data\\": {\\n    \\"JobId\\": \\"w2s******\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<CreateLocalRecordDownloadByTimeJobResponse>\\n<RequestId>E55***B7-4***-4***-8***-D3******F565</RequestId>\\n<Data>\\n    <JobId>w2s******</JobId>\\n</Data>\\n<Code>200</Code>\\n<Success>true</Success>\\n</CreateLocalRecordDownloadByTimeJobResponse>","errorExample":""}]',
      'title' => 'CreateLocalRecordDownloadByTimeJob',
      'summary' => '调用该接口创建按时间下载本地录像的任务。',
      'description' => '## 使用限制

- 单次按时间下载时长限制：30分钟。
- 下载任务和文件最多保存时长为1天, 超时后可重新下载。
- 单实例最多同时支持下载并发限制为10路（下载完成不计入）。
- 若音视频编码参数发生变化，默认下载的录像为前半段录像。
- 由于设备上行网络波动可能引起链路异常断开或者设备主动丢数据，上传和下载的录像可能为不完整的录像文件。
- 下载的录像数据由设备推流逻辑实现决定，若推流数据异常可能出现下载录像时长与任务设置时间段不一致的情况。

## QPS限制

单个阿里云账号调用该接口的每秒请求数（QPS）最大限制为50。

> 单个阿里云账号下的所有RAM用户共享该阿里云账号的配额。',
      'requestParamsDescription' => '调用API时，除了本文介绍的该API的特有请求参数，还需传入公共请求参数。公共请求参数说明，请参见[公共参数](~~141505~~)。',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'BatchQueryVisionDeviceInfo' => 
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
      ),
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ProductKey',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
          ),
        ),
        1 => 
        array (
          'name' => 'IotInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
            'required' => true,
          ),
        ),
        2 => 
        array (
          'name' => 'DeviceNameList',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'type' => 'array',
            'items' => 
            array (
              'type' => 'string',
            ),
            'required' => false,
            'maxItems' => 50,
          ),
        ),
        3 => 
        array (
          'name' => 'IotIdList',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'type' => 'array',
            'items' => 
            array (
              'type' => 'string',
            ),
            'required' => false,
            'maxItems' => 50,
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
              'Code' => 
              array (
                'type' => 'string',
              ),
              'ErrorMessage' => 
              array (
                'type' => 'string',
              ),
              'RequestId' => 
              array (
                'type' => 'string',
              ),
              'Success' => 
              array (
                'type' => 'boolean',
              ),
              'Data' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'DeviceInfoList' => 
                  array (
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Description' => 
                        array (
                          'type' => 'string',
                        ),
                        'DeviceType' => 
                        array (
                          'type' => 'integer',
                          'format' => 'int32',
                        ),
                        'IotId' => 
                        array (
                          'type' => 'string',
                        ),
                        'GbDeviceInfo' => 
                        array (
                          'type' => 'object',
                          'properties' => 
                          array (
                            'GbId' => 
                            array (
                              'type' => 'string',
                            ),
                            'Password' => 
                            array (
                              'type' => 'string',
                            ),
                            'NickName' => 
                            array (
                              'type' => 'string',
                            ),
                            'SubProductKey' => 
                            array (
                              'type' => 'string',
                            ),
                            'DeviceProtocol' => 
                            array (
                              'type' => 'integer',
                              'format' => 'int32',
                            ),
                            'NetProtocol' => 
                            array (
                              'type' => 'integer',
                              'format' => 'int32',
                            ),
                          ),
                        ),
                        'RtmpDeviceInfo' => 
                        array (
                          'type' => 'object',
                          'properties' => 
                          array (
                            'StreamStatus' => 
                            array (
                              'type' => 'integer',
                              'format' => 'int32',
                            ),
                            'PushKeyExpireTime' => 
                            array (
                              'type' => 'integer',
                              'format' => 'int32',
                            ),
                            'StreamName' => 
                            array (
                              'type' => 'string',
                            ),
                            'PushAuthKey' => 
                            array (
                              'type' => 'string',
                            ),
                            'PullAuthKey' => 
                            array (
                              'type' => 'string',
                            ),
                            'PullKeyExpireTime' => 
                            array (
                              'type' => 'integer',
                              'format' => 'int32',
                            ),
                            'PushUrlSample' => 
                            array (
                              'type' => 'string',
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
      'errorCodes' => 
      array (
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'iot.vision.RequestParameterError',
            'errorMessage' => 'Request parameter error:%s',
          ),
          1 => 
          array (
            'errorCode' => 'iot.vision.RequestError',
            'errorMessage' => 'Request error.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'iot.vision.RequestForbidden',
            'errorMessage' => 'Request forbidden.',
          ),
        ),
        429 => 
        array (
          0 => 
          array (
            'errorCode' => 'iot.vision.RequestTrafficControl',
            'errorMessage' => 'Request traffic control.',
          ),
        ),
      ),
    ),
    'CreateRtmpDevice' => 
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
      ),
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'PullKeyExpireTime',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'default' => '3600',
          ),
        ),
        1 => 
        array (
          'name' => 'Description',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
          ),
        ),
        2 => 
        array (
          'name' => 'ProductKey',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
            'required' => true,
          ),
        ),
        3 => 
        array (
          'name' => 'DeviceName',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
          ),
        ),
        4 => 
        array (
          'name' => 'IotInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
            'required' => true,
          ),
        ),
        5 => 
        array (
          'name' => 'PushKeyExpireTime',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'default' => '3600',
          ),
        ),
        6 => 
        array (
          'name' => 'PushAuthKey',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
          ),
        ),
        7 => 
        array (
          'name' => 'PullAuthKey',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
          ),
        ),
        8 => 
        array (
          'name' => 'SubStreamName',
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
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'type' => 'string',
              ),
              'ErrorMessage' => 
              array (
                'type' => 'string',
              ),
              'RequestId' => 
              array (
                'type' => 'string',
              ),
              'Success' => 
              array (
                'type' => 'boolean',
              ),
              'Data' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'DeviceName' => 
                  array (
                    'type' => 'string',
                  ),
                  'StreamName' => 
                  array (
                    'type' => 'string',
                  ),
                  'IotId' => 
                  array (
                    'type' => 'string',
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
            'errorCode' => 'iot.vision.RequestParameterError',
            'errorMessage' => 'Request parameter error:%s',
          ),
          1 => 
          array (
            'errorCode' => 'iot.vision.DeviceNameDuplicate',
            'errorMessage' => 'Device name duplicate.',
          ),
          2 => 
          array (
            'errorCode' => 'iot.vision.StreamNameDuplicate',
            'errorMessage' => 'Stream name duplicate.',
          ),
          3 => 
          array (
            'errorCode' => 'iot.vision.RequestError',
            'errorMessage' => 'Request error.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'iot.vision.RequestForbidden',
            'errorMessage' => 'Request forbidden.',
          ),
        ),
        429 => 
        array (
          0 => 
          array (
            'errorCode' => 'iot.vision.RequestTrafficControl',
            'errorMessage' => 'Request traffic control.',
          ),
        ),
      ),
    ),
    'DeleteRtmpDevice' => 
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
      ),
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ProductKey',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
          ),
        ),
        1 => 
        array (
          'name' => 'DeviceName',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
          ),
        ),
        2 => 
        array (
          'name' => 'IotId',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
          ),
        ),
        3 => 
        array (
          'name' => 'IotInstanceId',
          'in' => 'query',
          'schema' => 
          array (
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
              'Code' => 
              array (
                'type' => 'string',
              ),
              'ErrorMessage' => 
              array (
                'type' => 'string',
              ),
              'RequestId' => 
              array (
                'type' => 'string',
              ),
              'Success' => 
              array (
                'type' => 'boolean',
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
            'errorCode' => 'iot.vision.RequestParameterError',
            'errorMessage' => 'Request parameter error:%s',
          ),
          1 => 
          array (
            'errorCode' => 'iot.vision.RequestError',
            'errorMessage' => 'Request error.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'iot.vision.RequestForbidden',
            'errorMessage' => 'Request forbidden.',
          ),
        ),
        429 => 
        array (
          0 => 
          array (
            'errorCode' => 'iot.vision.RequestTrafficControl',
            'errorMessage' => 'Request traffic control.',
          ),
        ),
      ),
    ),
    'DeleteRtmpKey' => 
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
      ),
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Type',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'maximum' => '1',
            'minimum' => '0',
          ),
        ),
        1 => 
        array (
          'name' => 'ProductKey',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
          ),
        ),
        2 => 
        array (
          'name' => 'DeviceName',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
          ),
        ),
        3 => 
        array (
          'name' => 'IotId',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
          ),
        ),
        4 => 
        array (
          'name' => 'IotInstanceId',
          'in' => 'query',
          'schema' => 
          array (
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
              'Code' => 
              array (
                'type' => 'string',
              ),
              'ErrorMessage' => 
              array (
                'type' => 'string',
              ),
              'RequestId' => 
              array (
                'type' => 'string',
              ),
              'Success' => 
              array (
                'type' => 'boolean',
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
            'errorCode' => 'iot.vision.RequestParameterError',
            'errorMessage' => 'Request parameter error:%s',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'iot.vision.RequestForbidden',
            'errorMessage' => 'Request forbidden.',
          ),
        ),
        429 => 
        array (
          0 => 
          array (
            'errorCode' => 'iot.vision.RequestTrafficControl',
            'errorMessage' => 'Request traffic control.',
          ),
        ),
      ),
    ),
    'QueryRtmpKey' => 
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
      ),
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ProductKey',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
          ),
        ),
        1 => 
        array (
          'name' => 'DeviceName',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
          ),
        ),
        2 => 
        array (
          'name' => 'IotId',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
          ),
        ),
        3 => 
        array (
          'name' => 'IotInstanceId',
          'in' => 'query',
          'schema' => 
          array (
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
              'Code' => 
              array (
                'type' => 'string',
              ),
              'ErrorMessage' => 
              array (
                'type' => 'string',
              ),
              'RequestId' => 
              array (
                'type' => 'string',
              ),
              'Success' => 
              array (
                'type' => 'boolean',
              ),
              'Data' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'PullAuthKey' => 
                  array (
                    'type' => 'string',
                  ),
                  'PullKeyExpireTime' => 
                  array (
                    'type' => 'integer',
                    'format' => 'int32',
                  ),
                  'PushKeyExpireTime' => 
                  array (
                    'type' => 'integer',
                    'format' => 'int32',
                  ),
                  'StreamName' => 
                  array (
                    'type' => 'string',
                  ),
                  'PushAuthKey' => 
                  array (
                    'type' => 'string',
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
            'errorCode' => 'iot.vision.RequestParameterError',
            'errorMessage' => 'Request parameter error:%s',
          ),
          1 => 
          array (
            'errorCode' => 'iot.vision.RtmpKeyNotSet',
            'errorMessage' => 'Rtmp key not set.',
          ),
          2 => 
          array (
            'errorCode' => 'iot.vision.RequestError',
            'errorMessage' => 'Request error.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'iot.vision.RequestForbidden',
            'errorMessage' => 'Request forbidden.',
          ),
        ),
        429 => 
        array (
          0 => 
          array (
            'errorCode' => 'iot.vision.RequestTrafficControl',
            'errorMessage' => 'Request traffic control.',
          ),
        ),
      ),
    ),
    'QueryVisionDeviceInfo' => 
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
      ),
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ProductKey',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
          ),
        ),
        1 => 
        array (
          'name' => 'DeviceName',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
          ),
        ),
        2 => 
        array (
          'name' => 'IotId',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
          ),
        ),
        3 => 
        array (
          'name' => 'IotInstanceId',
          'in' => 'query',
          'schema' => 
          array (
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
              'Code' => 
              array (
                'type' => 'string',
              ),
              'ErrorMessage' => 
              array (
                'type' => 'string',
              ),
              'RequestId' => 
              array (
                'type' => 'string',
              ),
              'Success' => 
              array (
                'type' => 'boolean',
              ),
              'Data' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'Description' => 
                  array (
                    'type' => 'string',
                  ),
                  'DeviceType' => 
                  array (
                    'type' => 'integer',
                    'format' => 'int32',
                  ),
                  'GbDeviceInfo' => 
                  array (
                    'type' => 'object',
                    'properties' => 
                    array (
                      'GbId' => 
                      array (
                        'type' => 'string',
                      ),
                      'Password' => 
                      array (
                        'type' => 'string',
                      ),
                      'NickName' => 
                      array (
                        'type' => 'string',
                      ),
                      'SubProductKey' => 
                      array (
                        'type' => 'string',
                      ),
                      'DeviceProtocol' => 
                      array (
                        'type' => 'integer',
                        'format' => 'int32',
                      ),
                      'NetProtocol' => 
                      array (
                        'type' => 'integer',
                        'format' => 'int32',
                      ),
                    ),
                  ),
                  'RtmpDeviceInfo' => 
                  array (
                    'type' => 'object',
                    'properties' => 
                    array (
                      'StreamStatus' => 
                      array (
                        'type' => 'integer',
                        'format' => 'int32',
                      ),
                      'PushKeyExpireTime' => 
                      array (
                        'type' => 'integer',
                        'format' => 'int32',
                      ),
                      'StreamName' => 
                      array (
                        'type' => 'string',
                      ),
                      'PushAuthKey' => 
                      array (
                        'type' => 'string',
                      ),
                      'PullAuthKey' => 
                      array (
                        'type' => 'string',
                      ),
                      'PullKeyExpireTime' => 
                      array (
                        'type' => 'integer',
                        'format' => 'int32',
                      ),
                      'PushUrlSample' => 
                      array (
                        'type' => 'string',
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
            'errorCode' => 'iot.vision.RequestParameterError',
            'errorMessage' => 'Request parameter error:%s',
          ),
          1 => 
          array (
            'errorCode' => 'iot.vision.RequestError',
            'errorMessage' => 'Request error.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'iot.vision.RequestForbidden',
            'errorMessage' => 'Request forbidden.',
          ),
        ),
        429 => 
        array (
          0 => 
          array (
            'errorCode' => 'iot.vision.RequestTrafficControl',
            'errorMessage' => 'Request traffic control.',
          ),
        ),
      ),
    ),
    'UpdateRtmpKey' => 
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
      ),
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'PullKeyExpireTime',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
          ),
        ),
        1 => 
        array (
          'name' => 'ProductKey',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
          ),
        ),
        2 => 
        array (
          'name' => 'DeviceName',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
          ),
        ),
        3 => 
        array (
          'name' => 'IotInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
            'required' => true,
          ),
        ),
        4 => 
        array (
          'name' => 'PushKeyExpireTime',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
          ),
        ),
        5 => 
        array (
          'name' => 'PushAuthKey',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
          ),
        ),
        6 => 
        array (
          'name' => 'IotId',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
          ),
        ),
        7 => 
        array (
          'name' => 'PullAuthKey',
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
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'type' => 'string',
              ),
              'ErrorMessage' => 
              array (
                'type' => 'string',
              ),
              'RequestId' => 
              array (
                'type' => 'string',
              ),
              'Success' => 
              array (
                'type' => 'boolean',
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
            'errorCode' => 'iot.vision.RequestParameterError',
            'errorMessage' => 'Request parameter error:%s',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'iot.vision.RequestForbidden',
            'errorMessage' => 'Request forbidden.',
          ),
        ),
        429 => 
        array (
          0 => 
          array (
            'errorCode' => 'iot.vision.RequestTrafficControl',
            'errorMessage' => 'Request traffic control.',
          ),
        ),
      ),
    ),
    'CreateGbDevice' => 
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
      ),
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Description',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
          ),
        ),
        1 => 
        array (
          'name' => 'ProductKey',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
            'required' => true,
          ),
        ),
        2 => 
        array (
          'name' => 'DeviceName',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
          ),
        ),
        3 => 
        array (
          'name' => 'GbId',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
            'required' => true,
          ),
        ),
        4 => 
        array (
          'name' => 'Password',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
            'required' => true,
          ),
        ),
        5 => 
        array (
          'name' => 'IotInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
            'required' => true,
          ),
        ),
        6 => 
        array (
          'name' => 'DeviceType',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'default' => '1',
          ),
        ),
        7 => 
        array (
          'name' => 'SubProductKey',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
          ),
        ),
        8 => 
        array (
          'name' => 'MediaNetProtocol',
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
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'type' => 'string',
              ),
              'ErrorMessage' => 
              array (
                'type' => 'string',
              ),
              'RequestId' => 
              array (
                'type' => 'string',
              ),
              'Success' => 
              array (
                'type' => 'boolean',
              ),
              'Data' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'DeviceName' => 
                  array (
                    'type' => 'string',
                  ),
                  'IotId' => 
                  array (
                    'type' => 'string',
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
            'errorCode' => 'iot.common.RamActionPermissionDeny',
            'errorMessage' => 'You do not have the RAM permission.',
          ),
          1 => 
          array (
            'errorCode' => 'iot.vision.GbServiceNotEnabled',
            'errorMessage' => 'The GB28181 service has not been enabled.',
          ),
          2 => 
          array (
            'errorCode' => 'iot.vision.GbIdDuplicate',
            'errorMessage' => 'The GB28181 deviceId is duplicated.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'iot.lv.requestAuthError',
            'errorMessage' => 'Request auth error.',
          ),
          1 => 
          array (
            'errorCode' => 'iot.lv.requestParamError',
            'errorMessage' => 'Request parameter error.',
          ),
        ),
      ),
    ),
    'DeleteGbDevice' => 
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
      ),
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ProductKey',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
          ),
        ),
        1 => 
        array (
          'name' => 'DeviceName',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
          ),
        ),
        2 => 
        array (
          'name' => 'IotId',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
          ),
        ),
        3 => 
        array (
          'name' => 'IotInstanceId',
          'in' => 'query',
          'schema' => 
          array (
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
              'Code' => 
              array (
                'type' => 'string',
              ),
              'ErrorMessage' => 
              array (
                'type' => 'string',
              ),
              'RequestId' => 
              array (
                'type' => 'string',
              ),
              'Success' => 
              array (
                'type' => 'boolean',
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
            'errorCode' => 'iot.common.RamActionPermissionDeny',
            'errorMessage' => 'You do not have the RAM permission.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'iot.lv.requestParamError',
            'errorMessage' => 'Request parameter error.',
          ),
          1 => 
          array (
            'errorCode' => 'iot.lv.requestAuthError',
            'errorMessage' => 'Request auth error.',
          ),
        ),
      ),
    ),
    'EnableGbSubDevice' => 
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
      ),
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'SubDeviceId',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
            'required' => true,
          ),
        ),
        1 => 
        array (
          'name' => 'ProductKey',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
          ),
        ),
        2 => 
        array (
          'name' => 'DeviceName',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
          ),
        ),
        3 => 
        array (
          'name' => 'IotId',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
          ),
        ),
        4 => 
        array (
          'name' => 'IotInstanceId',
          'in' => 'query',
          'schema' => 
          array (
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
              'Code' => 
              array (
                'type' => 'string',
              ),
              'ErrorMessage' => 
              array (
                'type' => 'string',
              ),
              'RequestId' => 
              array (
                'type' => 'string',
              ),
              'Success' => 
              array (
                'type' => 'boolean',
              ),
              'Data' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'DeviceName' => 
                  array (
                    'type' => 'string',
                  ),
                  'ProductKey' => 
                  array (
                    'type' => 'string',
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
            'errorCode' => 'iot.common.RamActionPermissionDeny',
            'errorMessage' => 'You do not have the RAM permission.',
          ),
          1 => 
          array (
            'errorCode' => 'iot.vision.GbServiceNotEnabled',
            'errorMessage' => 'The GB28181 service has not been enabled.',
          ),
          2 => 
          array (
            'errorCode' => 'iot.vision.GbIdDuplicate',
            'errorMessage' => 'The GB28181 deviceId is duplicated.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'iot.lv.requestAuthError',
            'errorMessage' => 'Request auth error.',
          ),
          1 => 
          array (
            'errorCode' => 'iot.lv.requestParamError',
            'errorMessage' => 'Request parameter error.',
          ),
        ),
      ),
    ),
    'QueryGbSubDeviceList' => 
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
      ),
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '100',
            'minimum' => '1',
            'default' => '10',
          ),
        ),
        1 => 
        array (
          'name' => 'ProductKey',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
          ),
        ),
        2 => 
        array (
          'name' => 'DeviceName',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
          ),
        ),
        3 => 
        array (
          'name' => 'IotId',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
          ),
        ),
        4 => 
        array (
          'name' => 'IotInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
            'required' => true,
          ),
        ),
        5 => 
        array (
          'name' => 'PageStart',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '512',
            'minimum' => '1',
            'default' => '1',
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
              'Code' => 
              array (
                'type' => 'string',
              ),
              'ErrorMessage' => 
              array (
                'type' => 'string',
              ),
              'RequestId' => 
              array (
                'type' => 'string',
              ),
              'Success' => 
              array (
                'type' => 'boolean',
              ),
              'Data' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'Total' => 
                  array (
                    'type' => 'integer',
                    'format' => 'int32',
                  ),
                  'GbSubDeviceList' => 
                  array (
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'ProductKey' => 
                        array (
                          'type' => 'string',
                        ),
                        'DeviceName' => 
                        array (
                          'type' => 'string',
                        ),
                        'DeviceId' => 
                        array (
                          'type' => 'string',
                        ),
                        'DeviceEnable' => 
                        array (
                          'type' => 'integer',
                          'format' => 'int32',
                        ),
                        'IotId' => 
                        array (
                          'type' => 'string',
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
            'errorCode' => 'iot.common.RamActionPermissionDeny',
            'errorMessage' => 'You do not have the RAM permission.',
          ),
          1 => 
          array (
            'errorCode' => 'iot.vision.GbServiceNotEnabled',
            'errorMessage' => 'The GB28181 service has not been enabled.',
          ),
          2 => 
          array (
            'errorCode' => 'iot.vision.GbIdDuplicate',
            'errorMessage' => 'The GB28181 deviceId is duplicated.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'iot.lv.requestAuthError',
            'errorMessage' => 'Request auth error.',
          ),
          1 => 
          array (
            'errorCode' => 'iot.lv.requestParamError',
            'errorMessage' => 'Request parameter error.',
          ),
        ),
      ),
    ),
    'RefreshGbSubDeviceList' => 
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
      ),
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ProductKey',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
          ),
        ),
        1 => 
        array (
          'name' => 'DeviceName',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
          ),
        ),
        2 => 
        array (
          'name' => 'IotId',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
          ),
        ),
        3 => 
        array (
          'name' => 'IotInstanceId',
          'in' => 'query',
          'schema' => 
          array (
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
              'Code' => 
              array (
                'type' => 'string',
              ),
              'ErrorMessage' => 
              array (
                'type' => 'string',
              ),
              'RequestId' => 
              array (
                'type' => 'string',
              ),
              'Success' => 
              array (
                'type' => 'boolean',
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
            'errorCode' => 'iot.common.RamActionPermissionDeny',
            'errorMessage' => 'You do not have the RAM permission.',
          ),
          1 => 
          array (
            'errorCode' => 'iot.vision.GbServiceNotEnabled',
            'errorMessage' => 'The GB28181 service has not been enabled.',
          ),
          2 => 
          array (
            'errorCode' => 'iot.vision.GbIdDuplicate',
            'errorMessage' => 'The GB28181 deviceId is duplicated.',
          ),
          3 => 
          array (
            'errorCode' => 'iot.vision.RefreshTooFrequently',
            'errorMessage' => 'Refresh too frequently.',
          ),
          4 => 
          array (
            'errorCode' => 'iot.vision.DeviceOffline',
            'errorMessage' => 'Device is offline.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'iot.lv.requestAuthError',
            'errorMessage' => 'Request auth error.',
          ),
          1 => 
          array (
            'errorCode' => 'iot.lv.requestParamError',
            'errorMessage' => 'Request parameter error.',
          ),
        ),
      ),
    ),
    'UpdateGbDevice' => 
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
      ),
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Description',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
          ),
        ),
        1 => 
        array (
          'name' => 'ProductKey',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
          ),
        ),
        2 => 
        array (
          'name' => 'GbId',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
          ),
        ),
        3 => 
        array (
          'name' => 'DeviceName',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
          ),
        ),
        4 => 
        array (
          'name' => 'Password',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
          ),
        ),
        5 => 
        array (
          'name' => 'IotInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
            'required' => true,
          ),
        ),
        6 => 
        array (
          'name' => 'IotId',
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
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'type' => 'string',
              ),
              'ErrorMessage' => 
              array (
                'type' => 'string',
              ),
              'RequestId' => 
              array (
                'type' => 'string',
              ),
              'Success' => 
              array (
                'type' => 'boolean',
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
            'errorCode' => 'iot.common.RamActionPermissionDeny',
            'errorMessage' => 'You do not have the RAM permission.',
          ),
          1 => 
          array (
            'errorCode' => 'iot.vision.GbIdDuplicate',
            'errorMessage' => 'The GB28181 deviceId is duplicated.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'iot.lv.requestParamError',
            'errorMessage' => 'Request parameter error.',
          ),
          1 => 
          array (
            'errorCode' => 'iot.lv.requestAuthError',
            'errorMessage' => 'Request auth error.',
          ),
        ),
      ),
    ),
    'CreateStreamPushJob' => 
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
      ),
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ProductKey',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '设备所属产品的**ProductKey**。
您可以在物联网平台控制台**产品**页查看或调用[QueryProductList](~~69271~~)查看当前账号下所有产品的信息。
><notice> 如果传入该参数，需同时传入**DeviceName**。
></notice>',
            'type' => 'string',
            'required' => false,
            'example' => 'a1BwAGV****',
          ),
        ),
        1 => 
        array (
          'name' => 'DeviceName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '设备的名称。
您可以在物联网平台控制台的**设备**页查看**DeviceName**。
><notice> 如果传入该参数，需同时传入**ProductKey**。
></notice>',
            'type' => 'string',
            'required' => false,
            'example' => 'camera1',
          ),
        ),
        2 => 
        array (
          'name' => 'IotId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '设备的设备ID。物联网平台为该设备颁发的ID，设备的唯一标识符。可调用物联网平台[QueryDeviceDetail](~~69594~~)查询。

><notice> **IotId**作为设备唯一标识符，和**ProductKey**与**DeviceName**组合是一一对应的关系。如果传入该参数，则无需传入**ProductKey**和**DeviceName**。如果您同时传入**IotId**和**ProductKey**与**DeviceName**组合，则以**IotId**为准。
></notice>',
            'type' => 'string',
            'required' => false,
            'example' => 'd7XmBoJhAr88C6PelXDF00****',
          ),
        ),
        3 => 
        array (
          'name' => 'IotInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。您可在物联网平台控制台的**实例概览**页签，查看当前实例的ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'iot-cn-n6w1y59****',
          ),
        ),
        4 => 
        array (
          'name' => 'StreamType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '码流类型。

- **0**（默认）：主码流 。
- **1**：辅码流。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '0',
            'default' => '0',
          ),
        ),
        5 => 
        array (
          'name' => 'PushUrl',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '推流地址，限制长度为500个字节。',
            'type' => 'string',
            'required' => true,
            'example' => 'rtmp://****',
          ),
        ),
        6 => 
        array (
          'name' => 'JobType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '推流任务类型。

- **1**（默认）：持续型任务。
- **2**：触发式任务，中断后结束。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
            'default' => '1',
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
              'Code' => 
              array (
                'description' => '接口返回码：

- **200**：表示成功。
- 其它：表示错误码。错误码详情，请参见[错误码](~~145071~~)。',
                'type' => 'string',
                'example' => '403',
              ),
              'ErrorMessage' => 
              array (
                'description' => '调用失败时，返回的出错信息。',
                'type' => 'string',
                'example' => 'Request forbidden.',
              ),
              'RequestId' => 
              array (
                'description' => '阿里云为该请求生成的唯一标识符。',
                'type' => 'string',
                'example' => 'E55***B7-4***-4***-8***-D3******F565',
              ),
              'Success' => 
              array (
                'description' => '是否调用成功：
- **true**：调用成功。
- **false**：调用失败。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Data' => 
              array (
                'description' => '调用成功返回的结果。',
                'type' => 'object',
                'properties' => 
                array (
                  'JobId' => 
                  array (
                    'description' => '任务ID。',
                    'type' => 'string',
                    'example' => '23***********',
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
            'errorCode' => 'iot.vision.RequestParamError',
            'errorMessage' => 'Request parameter error.',
          ),
          1 => 
          array (
            'errorCode' => 'iot.vision.RequestFailed',
            'errorMessage' => 'Request failed.',
          ),
          2 => 
          array (
            'errorCode' => 'iot.vision.StreamPushFailed',
            'errorMessage' => 'Stream push failed.',
          ),
          3 => 
          array (
            'errorCode' => 'iot.vision.DeviceOffline',
            'errorMessage' => 'Device is offline.',
          ),
          4 => 
          array (
            'errorCode' => 'iot.vision.DeviceNotStreaming',
            'errorMessage' => 'Device is not streaming.',
          ),
          5 => 
          array (
            'errorCode' => 'iot.vision.ConcurrencyExceedLimit',
            'errorMessage' => 'Concurrency exceed the limit.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'iot.vision.RequestAuthFailed',
            'errorMessage' => 'Request auth failed.',
          ),
          1 => 
          array (
            'errorCode' => 'iot.vision.RequestForbidden',
            'errorMessage' => 'Request forbidden.',
          ),
        ),
        429 => 
        array (
          0 => 
          array (
            'errorCode' => 'iot.vision.RequestTrafficControl',
            'errorMessage' => 'Request traffic control.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"403\\",\\n  \\"ErrorMessage\\": \\"Request forbidden.\\",\\n  \\"RequestId\\": \\"E55***B7-4***-4***-8***-D3******F565\\",\\n  \\"Success\\": true,\\n  \\"Data\\": {\\n    \\"JobId\\": \\"23***********\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<CreateStreamPushJobResponse>\\n<RequestId>E55***B7-4***-4***-8***-D3******F565</RequestId>\\n<Data>\\n    <JobId>23***********</JobId>\\n</Data>\\n<Code>200</Code>\\n<Success>true</Success>\\n</CreateStreamPushJobResponse>","errorExample":""}]',
      'title' => 'CreateStreamPushJob',
      'summary' => '调用接口CreateStreamPushJob创建视频推流任务。',
      'description' => '## QPS限制

单个阿里云账号调用该接口的每秒请求数（QPS）最大限制为50。

> 单个阿里云账号下的所有RAM用户共享该阿里云账号的配额。',
      'requestParamsDescription' => '调用API时，除了本文介绍的该API的特有请求参数，还需传入公共请求参数。公共请求参数说明，请参见[公共参数](~~141505~~)文档。',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'CreateStreamSnapshotJob' => 
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
      ),
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ProductKey',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '设备所属产品的**ProductKey**。
您可以在物联网平台控制台**产品**页查看或调用[QueryProductList](~~69271~~)查看当前账号下所有产品的信息。
><notice> 如果传入该参数，需同时传入**DeviceName**。
></notice>',
            'type' => 'string',
            'required' => false,
            'example' => 'a1BwAGV****',
          ),
        ),
        1 => 
        array (
          'name' => 'DeviceName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '设备的设备名称。
您可以在物联网平台控制台的**设备**页查看**DeviceName**。
><notice> 如果传入该参数，需同时传入**ProductKey**。
></notice>',
            'type' => 'string',
            'required' => false,
            'example' => 'camera1',
          ),
        ),
        2 => 
        array (
          'name' => 'IotId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '设备的设备ID。物联网平台为该设备颁发的ID，设备的唯一标识符。可调用物联网平台[QueryDeviceDetail](~~69594~~)查询。

><notice> **IotId**作为设备唯一标识符，和**ProductKey**与**DeviceName**组合是一一对应的关系。如果传入该参数，则无需传入**ProductKey**和**DeviceName**。如果您同时传入**IotId**和**ProductKey**与**DeviceName**组合，则以**IotId**为准。
></notice>',
            'type' => 'string',
            'required' => false,
            'example' => 'd7XmBoJhAr88C6PelXDF00****',
          ),
        ),
        3 => 
        array (
          'name' => 'IotInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。您可在物联网平台控制台的**实例概览**页签，查看当前实例的ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'iot-cn-n6w1y59****',
          ),
        ),
        4 => 
        array (
          'name' => 'StreamType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '码流类型。

- **0**（默认）：主码流 。
- **1**：辅码流。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '0',
            'default' => '0',
          ),
        ),
        5 => 
        array (
          'name' => 'SnapshotInterval',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '截图时间的间隔，时间设置范围为60秒~1800秒。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'maximum' => '1800',
            'minimum' => '60',
            'example' => '600',
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
              'Code' => 
              array (
                'description' => '接口返回码：

- **200**：表示成功。
- 其它：表示错误码。错误码详情，请参见[错误码](~~145071~~)。',
                'type' => 'string',
                'example' => '403',
              ),
              'ErrorMessage' => 
              array (
                'description' => '调用失败时，返回的出错信息。',
                'type' => 'string',
                'example' => 'Request auth failed.',
              ),
              'RequestId' => 
              array (
                'description' => '阿里云为该请求生成的唯一标识符。',
                'type' => 'string',
                'example' => 'E55***B7-4***-4***-8***-D3******F565',
              ),
              'Success' => 
              array (
                'description' => '是否调用成功：
- **true**：调用成功。
- **false**：调用失败。',
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
            'errorCode' => 'iot.vision.RequestFailed',
            'errorMessage' => 'Request failed.',
          ),
          1 => 
          array (
            'errorCode' => 'iot.vision.RequestParamError',
            'errorMessage' => 'Request parameter error.',
          ),
          2 => 
          array (
            'errorCode' => 'iot.vision.NoStorageQuota',
            'errorMessage' => 'No storage quota.',
          ),
          3 => 
          array (
            'errorCode' => 'iot.vision.RequestError',
            'errorMessage' => 'Request error.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'iot.vision.RequestAuthFailed',
            'errorMessage' => 'Request auth failed.',
          ),
          1 => 
          array (
            'errorCode' => 'iot.vision.RequestForbidden',
            'errorMessage' => 'Request forbidden.',
          ),
        ),
        429 => 
        array (
          0 => 
          array (
            'errorCode' => 'iot.vision.RequestTrafficControl',
            'errorMessage' => 'Request traffic control.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"403\\",\\n  \\"ErrorMessage\\": \\"Request auth failed.\\",\\n  \\"RequestId\\": \\"E55***B7-4***-4***-8***-D3******F565\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<CreateStreamSnapshotJobResponse>\\n<RequestId>E55***B7-4***-4***-8***-D3******F565</RequestId>\\n<Code>200</Code>\\n<Success>true</Success>\\n</CreateStreamSnapshotJobResponse>","errorExample":""}]',
      'title' => 'CreateStreamSnapshotJob',
      'summary' => '调用接口CreateStreamSnapshotJob设置云端截图任务。',
      'description' => '## QPS限制

单个阿里云账号调用该接口的每秒请求数（QPS）最大限制为50。

> 单个阿里云账号下的所有RAM用户共享该阿里云账号的配额。',
      'requestParamsDescription' => '调用API时，除了本文介绍的该API的特有请求参数，还需传入公共请求参数。公共请求参数说明，请参见[公共参数](~~141505~~)文档。',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DeleteStreamPushJob' => 
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
      ),
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ProductKey',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '设备所属产品的ProductKey。
您可以在物联网平台控制台**产品**页查看或调用[QueryProductList](~~69271~~)查看当前账号下所有产品的信息。
><notice> 如果传入该参数，需同时传入**DeviceName**。
></notice>',
            'type' => 'string',
            'required' => false,
            'example' => 'a1BwAGV****',
          ),
        ),
        1 => 
        array (
          'name' => 'DeviceName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '设备的设备名称。
您可以在物联网平台控制台的**设备**页查看**DeviceName**。
><notice> 如果传入该参数，需同时传入**ProductKey**。
></notice>',
            'type' => 'string',
            'required' => false,
            'example' => 'camera1',
          ),
        ),
        2 => 
        array (
          'name' => 'JobId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '任务ID。',
            'type' => 'string',
            'required' => true,
            'example' => '23******',
          ),
        ),
        3 => 
        array (
          'name' => 'IotId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '设备的设备ID。物联网平台为该设备颁发的ID，设备的唯一标识符。可调用物联网平台[QueryDeviceDetail](~~69594~~)查询。

><notice> **IotId**作为设备唯一标识符，和**ProductKey**与**DeviceName**组合是一一对应的关系。如果传入该参数，则无需传入**ProductKey**和**DeviceName**。如果您同时传入**IotId**和**ProductKey**与**DeviceName**组合，则以**IotId**为准。
></notice>',
            'type' => 'string',
            'required' => false,
            'example' => 'd7XmBoJhAr88C6PelXDF00****',
          ),
        ),
        4 => 
        array (
          'name' => 'IotInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。您可在物联网平台控制台的**实例概览**页签，查看当前实例的ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'iot-cn-n6w1y59****',
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
              'Code' => 
              array (
                'description' => '接口返回码：

- **200**：表示成功。
- 其它：表示错误码。错误码详情，请参见[错误码](~~145071~~)。',
                'type' => 'string',
                'example' => '400',
              ),
              'ErrorMessage' => 
              array (
                'description' => '调用失败时，返回的出错信息。',
                'type' => 'string',
                'example' => 'Request parameter error.',
              ),
              'RequestId' => 
              array (
                'description' => '阿里云为该请求生成的唯一标识符。',
                'type' => 'string',
                'example' => 'E55***B7-4***-4***-8***-D3******F565',
              ),
              'Success' => 
              array (
                'description' => '是否调用成功：
- **true**：调用成功。
- **false**：调用失败。',
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
            'errorCode' => 'iot.vision.RequestParamError',
            'errorMessage' => 'Request parameter error.',
          ),
          1 => 
          array (
            'errorCode' => 'iot.vision.RequestFailed',
            'errorMessage' => 'Request failed.',
          ),
          2 => 
          array (
            'errorCode' => 'iot.vision.RequestError',
            'errorMessage' => 'Request error.',
          ),
          3 => 
          array (
            'errorCode' => 'iot.vision.JobNotExist',
            'errorMessage' => 'Job not exist or expired.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'iot.vision.RequestAuthFailed',
            'errorMessage' => 'Request auth failed.',
          ),
          1 => 
          array (
            'errorCode' => 'iot.vision.RequestForbidden',
            'errorMessage' => 'Request forbidden.',
          ),
        ),
        429 => 
        array (
          0 => 
          array (
            'errorCode' => 'iot.vision.RequestTrafficControl',
            'errorMessage' => 'Request traffic control.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"400\\",\\n  \\"ErrorMessage\\": \\"Request parameter error.\\",\\n  \\"RequestId\\": \\"E55***B7-4***-4***-8***-D3******F565\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<DeleteStreamPushJobResponse>\\n<RequestId>E55***B7-4***-4***-8***-D3******F565</RequestId>\\n<Code>200</Code>\\n<Success>true</Success>\\n</DeleteStreamPushJobResponse>","errorExample":""}]',
      'title' => 'DeleteStreamPushJob',
      'summary' => '调用接口DeleteStreamPushJob删除视频推流任务。',
      'description' => '## QPS限制

单个阿里云账号调用该接口的每秒请求数（QPS）最大限制为50。

> 单个阿里云账号下的所有RAM用户共享该阿里云账号的配额。',
      'requestParamsDescription' => '调用API时，除了本文介绍的该API的特有请求参数，还需传入公共请求参数。公共请求参数说明，请参见[公共参数](~~141505~~)文档。',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DeleteStreamSnapshotJob' => 
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
      ),
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ProductKey',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '设备所属产品的**ProductKey**。
您可以在物联网平台控制台**产品**页查看或调用[QueryProductList](~~69271~~)查看当前账号下所有产品的信息。
><notice> 如果传入该参数，需同时传入**DeviceName**。
></notice>',
            'type' => 'string',
            'required' => false,
            'example' => 'a1BwAGV****',
          ),
        ),
        1 => 
        array (
          'name' => 'DeviceName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '设备的设备名称。
您可以在物联网平台控制台的**设备**页查看**DeviceName**。
><notice> 如果传入该参数，需同时传入**ProductKey**。
></notice>',
            'type' => 'string',
            'required' => false,
            'example' => 'camera1',
          ),
        ),
        2 => 
        array (
          'name' => 'IotId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '设备的设备ID。物联网平台为该设备颁发的ID，设备的唯一标识符。可调用物联网平台[QueryDeviceDetail](~~69594~~)查询。

><notice> **IotId**作为设备唯一标识符，和**ProductKey**与**DeviceName**组合是一一对应的关系。如果传入该参数，则无需传入**ProductKey**和**DeviceName**。如果您同时传入**IotId**和**ProductKey**与**DeviceName**组合，则以**IotId**为准。
></notice>',
            'type' => 'string',
            'required' => false,
            'example' => 'd7XmBoJhAr88C6PelXDF00****',
          ),
        ),
        3 => 
        array (
          'name' => 'IotInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。您可在物联网平台控制台的**实例概览**页签，查看当前实例的ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'iot-cn-n6w1y59****',
          ),
        ),
        4 => 
        array (
          'name' => 'StreamType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '码流类型。

- **0**（默认）：主码流 。
- **1**：辅码流。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '0',
            'default' => '0',
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
              'Code' => 
              array (
                'description' => '接口返回码：

- **200**：表示成功。
- 其它：表示错误码。错误码详情，请参见[错误码](~~145071~~)。',
                'type' => 'string',
                'example' => '400',
              ),
              'ErrorMessage' => 
              array (
                'description' => '调用失败时，返回的出错信息。',
                'type' => 'string',
                'example' => 'Request parameter error.',
              ),
              'RequestId' => 
              array (
                'description' => '阿里云为该请求生成的唯一标识符。',
                'type' => 'string',
                'example' => 'E55***B7-4***-4***-8***-D3******F565',
              ),
              'Success' => 
              array (
                'description' => '是否调用成功：
- **true**：调用成功。
- **false**：调用失败。',
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
            'errorCode' => 'iot.vision.RequestParamError',
            'errorMessage' => 'Request parameter error.',
          ),
          1 => 
          array (
            'errorCode' => 'iot.vision.RequestFailed',
            'errorMessage' => 'Request failed.',
          ),
          2 => 
          array (
            'errorCode' => 'iot.vision.RequestError',
            'errorMessage' => 'Request error.',
          ),
          3 => 
          array (
            'errorCode' => 'iot.vision.JobNotExist',
            'errorMessage' => 'Job not exist or expired.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'iot.vision.RequestAuthFailed',
            'errorMessage' => 'Request auth failed.',
          ),
          1 => 
          array (
            'errorCode' => 'iot.vision.RequestForbidden',
            'errorMessage' => 'Request forbidden.',
          ),
        ),
        429 => 
        array (
          0 => 
          array (
            'errorCode' => 'iot.vision.RequestTrafficControl',
            'errorMessage' => 'Request traffic control.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"400\\",\\n  \\"ErrorMessage\\": \\"Request parameter error.\\",\\n  \\"RequestId\\": \\"E55***B7-4***-4***-8***-D3******F565\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<DeleteStreamSnapshotJobResponse>\\n<RequestId>E55***B7-4***-4***-8***-D3******F565</RequestId>\\n<Code>200</Code>\\n<Success>true</Success>\\n</DeleteStreamSnapshotJobResponse>","errorExample":""}]',
      'title' => 'DeleteStreamSnapshotJob',
      'summary' => '调用接口DeleteStreamSnapshotJob删除视频截图任务。',
      'description' => '## QPS限制

单个阿里云账号调用该接口的每秒请求数（QPS）最大限制为50。

> 单个阿里云账号下的所有RAM用户共享该阿里云账号的配额。',
      'requestParamsDescription' => '调用API时，除了本文介绍的该API的特有请求参数，还需传入公共请求参数。公共请求参数说明，请参见[公共参数](~~141505~~)文档。',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'QueryStreamPushJob' => 
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
      ),
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ProductKey',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '设备所属产品的**ProductKey**。
您可以在物联网平台控制台**产品**页查看或调用[QueryProductList](~~69271~~)查看当前账号下所有产品的信息。
><notice> 如果传入该参数，需同时传入**DeviceName**。
></notice>',
            'type' => 'string',
            'required' => false,
            'example' => 'a1BwAGV****',
          ),
        ),
        1 => 
        array (
          'name' => 'DeviceName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '设备的设备名称。
您可以在物联网平台控制台的**设备**页查看**DeviceName**。
><notice> 如果传入该参数，需同时传入**ProductKey**。
></notice>',
            'type' => 'string',
            'required' => false,
            'example' => 'camera1',
          ),
        ),
        2 => 
        array (
          'name' => 'JobId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '任务ID。',
            'type' => 'string',
            'required' => true,
            'example' => '23*********',
          ),
        ),
        3 => 
        array (
          'name' => 'IotId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '设备的设备ID。物联网平台为该设备颁发的ID，设备的唯一标识符。可调用物联网平台[QueryDeviceDetail](~~69594~~)查询。

><notice> **IotId**作为设备唯一标识符，和**ProductKey**与**DeviceName**组合是一一对应的关系。如果传入该参数，则无需传入**ProductKey**和**DeviceName**。如果您同时传入**IotId**和**ProductKey**与**DeviceName**组合，则以**IotId**为准。
></notice>',
            'type' => 'string',
            'required' => false,
            'example' => 'd7XmBoJhAr88C6PelXDF00****',
          ),
        ),
        4 => 
        array (
          'name' => 'IotInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。您可在物联网平台控制台的**实例概览**页签，查看当前实例的ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'iot-cn-n6w1y59****',
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
              'Code' => 
              array (
                'description' => '接口返回码：

- **200**：表示成功。
- 其它：表示错误码。错误码详情，请参见[错误码](~~145071~~)。',
                'type' => 'string',
                'example' => '400',
              ),
              'ErrorMessage' => 
              array (
                'description' => '调用失败时，返回的出错信息。',
                'type' => 'string',
                'example' => 'Request parameter error.',
              ),
              'RequestId' => 
              array (
                'description' => '阿里云为该请求生成的唯一标识符。',
                'type' => 'string',
                'example' => 'E55***B7-4***-4***-8***-D3******F565',
              ),
              'Success' => 
              array (
                'description' => '是否调用成功：
- **true**：调用成功。
- **false**：调用失败。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Data' => 
              array (
                'description' => '调用成功返回的结果。',
                'type' => 'object',
                'properties' => 
                array (
                  'JobType' => 
                  array (
                    'description' => '推流任务类型。

- **1**：持续型任务。
- **2**：触发式任务，中断后结束。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                  'PushUrl' => 
                  array (
                    'description' => '推流地址。',
                    'type' => 'string',
                    'example' => 'rtmp://****',
                  ),
                  'StreamType' => 
                  array (
                    'description' => '码流类型。

- **0**：主码流 。
- **1**：辅码流。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                  'CreateTime' => 
                  array (
                    'description' => '任务创建时间，单位为秒。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1581595942',
                  ),
                  'PushStatus' => 
                  array (
                    'description' => '当前推流状态。

- **1**：正在推流。
- **2**：等待推流。
- **3**：推流结束。',
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
      'errorCodes' => 
      array (
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'iot.vision.RequestParamError',
            'errorMessage' => 'Request parameter error.',
          ),
          1 => 
          array (
            'errorCode' => 'iot.vision.RequestFailed',
            'errorMessage' => 'Request failed.',
          ),
          2 => 
          array (
            'errorCode' => 'iot.vision.RequestError',
            'errorMessage' => 'Request error.',
          ),
          3 => 
          array (
            'errorCode' => 'iot.vision.JobNotExist',
            'errorMessage' => 'Job not exist or expired.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'iot.vision.RequestAuthFailed',
            'errorMessage' => 'Request auth failed.',
          ),
          1 => 
          array (
            'errorCode' => 'iot.vision.RequestForbidden',
            'errorMessage' => 'Request forbidden.',
          ),
        ),
        429 => 
        array (
          0 => 
          array (
            'errorCode' => 'iot.vision.RequestTrafficControl',
            'errorMessage' => 'Request traffic control.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"400\\",\\n  \\"ErrorMessage\\": \\"Request parameter error.\\",\\n  \\"RequestId\\": \\"E55***B7-4***-4***-8***-D3******F565\\",\\n  \\"Success\\": true,\\n  \\"Data\\": {\\n    \\"JobType\\": 1,\\n    \\"PushUrl\\": \\"rtmp://****\\",\\n    \\"StreamType\\": 1,\\n    \\"CreateTime\\": 1581595942,\\n    \\"PushStatus\\": 1\\n  }\\n}","errorExample":""},{"type":"xml","example":"<QueryStreamPushJobResponse>\\n<RequestId>E55***B7-4***-4***-8***-D3******F565</RequestId>\\n<Data>\\n    <PushStatus>1</PushStatus>\\n    <StreamType>1</StreamType>\\n    <JobType>1</JobType>\\n    <CreateTime>1581595942</CreateTime>\\n    <PushUrl>rtmp://****</PushUrl>\\n</Data>\\n<Code>200</Code>\\n<Success>true</Success>\\n</QueryStreamPushJobResponse>","errorExample":""}]',
      'title' => 'QueryStreamPushJob',
      'summary' => '调用接口QueryStreamPushJob查询视频推流任务详情：创建时间、当前推流状态、任务类型、推流地址等。',
      'description' => '## QPS限制

单个阿里云账号调用该接口的每秒请求数（QPS）最大限制为50。

> 单个阿里云账号下的所有RAM用户共享该阿里云账号的配额。',
      'requestParamsDescription' => '调用API时，除了本文介绍的该API的特有请求参数，还需传入公共请求参数。公共请求参数说明，请参见[公共参数](~~141505~~)文档。',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'QueryStreamPushJobList' => 
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
      ),
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定返回结果中每页显示的记录数量，最大值是100，默认值是10。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '100',
            'minimum' => '1',
            'example' => '10',
            'default' => '10',
          ),
        ),
        1 => 
        array (
          'name' => 'ProductKey',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '设备所属产品的**ProductKey**。
您可以在物联网平台控制台**产品**页查看或调用[QueryProductList](~~69271~~)查看当前账号下所有产品的信息。
><notice> 如果传入该参数，需同时传入**DeviceName**。
></notice>',
            'type' => 'string',
            'required' => false,
            'example' => 'a1BwAGV****',
          ),
        ),
        2 => 
        array (
          'name' => 'DeviceName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '设备的设备名称。
您可以在物联网平台控制台的**设备**页查看**DeviceName**。
><notice> 如果传入该参数，需同时传入**ProductKey**。
></notice>',
            'type' => 'string',
            'required' => false,
            'example' => 'camera1',
          ),
        ),
        3 => 
        array (
          'name' => 'IotId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '设备的设备ID。物联网平台为该设备颁发的ID，设备的唯一标识符。可调用物联网平台[QueryDeviceDetail](~~69594~~)查询。

><notice> **IotId**作为设备唯一标识符，和**ProductKey**与**DeviceName**组合是一一对应的关系。如果传入该参数，则无需传入**ProductKey**和**DeviceName**。如果您同时传入**IotId**和**ProductKey**与**DeviceName**组合，则以**IotId**为准。
></notice>',
            'type' => 'string',
            'required' => false,
            'example' => 'd7XmBoJhAr88C6PelXDF00****',
          ),
        ),
        4 => 
        array (
          'name' => 'IotInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。您可在物联网平台控制台的**实例概览**页签，查看当前实例的ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'iot-cn-n6w1y59****',
          ),
        ),
        5 => 
        array (
          'name' => 'CurrentPage',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定显示返回结果中的第几页的内容。默认值是起始页码1。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'minimum' => '1',
            'example' => '1',
            'default' => '1',
          ),
        ),
        6 => 
        array (
          'name' => 'JobType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '推流任务类型。

- **1**（默认）：持续型任务。
- **2**：触发式任务，中断后结束。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
            'default' => '1',
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
              'Code' => 
              array (
                'description' => '接口返回码：

- **200**：表示成功。
- 其它：表示错误码。错误码详情，请参见[错误码](~~145071~~)。',
                'type' => 'string',
                'example' => '400',
              ),
              'ErrorMessage' => 
              array (
                'description' => '调用失败时，返回的出错信息。',
                'type' => 'string',
                'example' => 'Request parameter error.',
              ),
              'RequestId' => 
              array (
                'description' => '阿里云为该请求生成的唯一标识符。',
                'type' => 'string',
                'example' => 'E55***B7-4***-4***-8***-D3******F565',
              ),
              'Success' => 
              array (
                'description' => '是否调用成功：
- **true**：调用成功。
- **false**：调用失败。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Data' => 
              array (
                'description' => '调用成功返回的结果。',
                'type' => 'object',
                'properties' => 
                array (
                  'Total' => 
                  array (
                    'description' => '总任务数量。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '10',
                  ),
                  'JobList' => 
                  array (
                    'description' => '任务列表信息。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'PushUrl' => 
                        array (
                          'description' => '推流地址。',
                          'type' => 'string',
                          'example' => 'rtmp://****',
                        ),
                        'StreamType' => 
                        array (
                          'description' => '码流类型。

- **0**：主码流 。
- **1**：辅码流。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '0',
                        ),
                        'JobId' => 
                        array (
                          'description' => '任务ID。',
                          'type' => 'string',
                          'example' => '23********',
                        ),
                        'CreateTime' => 
                        array (
                          'description' => '任务创建时间，单位为秒。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '1581595942',
                        ),
                        'PushStatus' => 
                        array (
                          'description' => '当前推流状态。

- **1**：正在推流。
- **2**：等待推流。
- **3**：推流结束。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '1',
                        ),
                        'JobType' => 
                        array (
                          'description' => '推流任务类型。

- **1**：持续型任务。
- **2**：触发式任务，中断后结束。',
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
      ),
      'errorCodes' => 
      array (
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'iot.vision.RequestParamError',
            'errorMessage' => 'Request parameter error.',
          ),
          1 => 
          array (
            'errorCode' => 'iot.vision.RequestFailed',
            'errorMessage' => 'Request failed.',
          ),
          2 => 
          array (
            'errorCode' => 'iot.vision.RequestError',
            'errorMessage' => 'Request error.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'iot.vision.RequestAuthFailed',
            'errorMessage' => 'Request auth failed.',
          ),
          1 => 
          array (
            'errorCode' => 'iot.vision.RequestForbidden',
            'errorMessage' => 'Request forbidden.',
          ),
        ),
        429 => 
        array (
          0 => 
          array (
            'errorCode' => 'iot.vision.RequestTrafficControl',
            'errorMessage' => 'Request traffic control.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"400\\",\\n  \\"ErrorMessage\\": \\"Request parameter error.\\",\\n  \\"RequestId\\": \\"E55***B7-4***-4***-8***-D3******F565\\",\\n  \\"Success\\": true,\\n  \\"Data\\": {\\n    \\"Total\\": 10,\\n    \\"JobList\\": [\\n      {\\n        \\"PushUrl\\": \\"rtmp://****\\",\\n        \\"StreamType\\": 0,\\n        \\"JobId\\": \\"23********\\",\\n        \\"CreateTime\\": 1581595942,\\n        \\"PushStatus\\": 1,\\n        \\"JobType\\": 1\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<QueryStreamPushJobListResponse>\\n<RequestId>E55***B7-4***-4***-8***-D3******F565</RequestId>\\n<Data>\\n    <Total>1</Total>\\n    <JobList>\\n        <PushStatus>1</PushStatus>\\n        <StreamType>0</StreamType>\\n        <JobType>1</JobType>\\n        <CreateTime>1581595942</CreateTime>\\n        <PushUrl>rtmp://****</PushUrl>\\n        <JobId>23********</JobId>\\n    </JobList>\\n</Data>\\n<Code>200</Code>\\n<Success>true</Success>\\n</QueryStreamPushJobListResponse>","errorExample":""}]',
      'title' => 'QueryStreamPushJobList',
      'summary' => '调用接口QueryStreamPushJobList查询视频推流任务列表及详情：创建时间、当前推流状态、任务类型、推流地址等。',
      'description' => '## QPS限制

单个阿里云账号调用该接口的每秒请求数（QPS）最大限制为50。

> 单个阿里云账号下的所有RAM用户共享该阿里云账号的配额。',
      'requestParamsDescription' => '调用API时，除了本文介绍的该API的特有请求参数，还需传入公共请求参数。公共请求参数说明，请参见[公共参数](~~141505~~)文档。',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'QueryStreamSnapshotJob' => 
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
      ),
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ProductKey',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '设备所属产品的ProductKey。
您可以在物联网平台控制台**产品**页查看或调用[QueryProductList](~~69271~~)查看当前账号下所有产品的信息。
><notice> 如果传入该参数，需同时传入**DeviceName**。
></notice>',
            'type' => 'string',
            'required' => false,
            'example' => 'a1BwAGV****',
          ),
        ),
        1 => 
        array (
          'name' => 'DeviceName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '设备的设备名称。
您可以在物联网平台控制台的**设备**页查看**DeviceName**。
><notice> 如果传入该参数，需同时传入**ProductKey**。
></notice>',
            'type' => 'string',
            'required' => false,
            'example' => 'camera1',
          ),
        ),
        2 => 
        array (
          'name' => 'IotId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '设备的设备ID。物联网平台为该设备颁发的ID，设备的唯一标识符。可调用物联网平台[QueryDeviceDetail](~~69594~~)查询。

><notice> **IotId**作为设备唯一标识符，和**ProductKey**与**DeviceName**组合是一一对应的关系。如果传入该参数，则无需传入**ProductKey**和**DeviceName**。如果您同时传入**IotId**和**ProductKey**与**DeviceName**组合，则以**IotId**为准。
></notice>',
            'type' => 'string',
            'required' => false,
            'example' => 'd7XmBoJhAr88C6PelXDF00****',
          ),
        ),
        3 => 
        array (
          'name' => 'IotInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。您可在物联网平台控制台的**实例概览**页签，查看当前实例的ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'iot-cn-n6w1y59****',
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
              'Code' => 
              array (
                'description' => '接口返回码：

- **200**：表示成功。
- 其它：表示错误码。错误码详情，请参见[错误码](~~145071~~)。',
                'type' => 'string',
                'example' => '403',
              ),
              'ErrorMessage' => 
              array (
                'description' => '调用失败时，返回的出错信息。',
                'type' => 'string',
                'example' => 'Request forbidden.',
              ),
              'RequestId' => 
              array (
                'description' => '阿里云为该请求生成的唯一标识符。',
                'type' => 'string',
                'example' => 'E55***B7-4***-4***-8***-D3******F565',
              ),
              'Success' => 
              array (
                'description' => '是否调用成功：
- **true**：调用成功。
- **false**：调用失败。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Data' => 
              array (
                'description' => '调用成功返回的结果。',
                'type' => 'object',
                'properties' => 
                array (
                  'JobList' => 
                  array (
                    'description' => '任务信息。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'StreamType' => 
                        array (
                          'description' => '码流类型。

- **0**：主码流 。
- **1**：辅码流。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '0',
                        ),
                        'SnapshotInterval' => 
                        array (
                          'description' => '截图时间的间隔。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '600',
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
            'errorCode' => 'iot.vision.RequestParamError',
            'errorMessage' => 'Request parameter error.',
          ),
          1 => 
          array (
            'errorCode' => 'iot.vision.RequestFailed',
            'errorMessage' => 'Request failed.',
          ),
          2 => 
          array (
            'errorCode' => 'iot.vision.RequestError',
            'errorMessage' => 'Request error.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'iot.vision.RequestAuthFailed',
            'errorMessage' => 'Request auth failed.',
          ),
          1 => 
          array (
            'errorCode' => 'iot.vision.RequestForbidden',
            'errorMessage' => 'Request forbidden.',
          ),
        ),
        429 => 
        array (
          0 => 
          array (
            'errorCode' => 'iot.vision.RequestTrafficControl',
            'errorMessage' => 'Request traffic control.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"403\\",\\n  \\"ErrorMessage\\": \\"Request forbidden.\\",\\n  \\"RequestId\\": \\"E55***B7-4***-4***-8***-D3******F565\\",\\n  \\"Success\\": true,\\n  \\"Data\\": {\\n    \\"JobList\\": [\\n      {\\n        \\"StreamType\\": 0,\\n        \\"SnapshotInterval\\": 600\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<QueryStreamSnapshotJobResponse>\\n<RequestId>E55***B7-4***-4***-8***-D3******F565</RequestId>\\n<Data>\\n    <JobList>\\n        <SnapshotInterval>600</SnapshotInterval>\\n        <StreamType>0</StreamType>\\n    </JobList>\\n</Data>\\n<Code>200</Code>\\n<Success>true</Success>\\n</QueryStreamSnapshotJobResponse>","errorExample":""}]',
      'title' => 'QueryStreamSnapshotJob',
      'summary' => '调用接口QueryStreamSnapshotJob查询云端截图任务列表及详情：截图时间的间隔、码流类型。',
      'description' => '## QPS限制

单个阿里云账号调用该接口的每秒请求数（QPS）最大限制为50。

> 单个阿里云账号下的所有RAM用户共享该阿里云账号的配额。',
      'requestParamsDescription' => '调用API时，除了本文介绍的该API的特有请求参数，还需传入公共请求参数。公共请求参数说明，请参见[公共参数](~~141505~~)文档。',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
  ),
  'endpoints' => 
  array (
    0 => 
    array (
      'regionId' => 'cn-qingdao',
      'endpoint' => 'linkvisual.aliyuncs.com',
    ),
    1 => 
    array (
      'regionId' => 'cn-beijing',
      'endpoint' => 'linkvisual.aliyuncs.com',
    ),
    2 => 
    array (
      'regionId' => 'cn-zhangjiakou',
      'endpoint' => 'linkvisual.aliyuncs.com',
    ),
    3 => 
    array (
      'regionId' => 'cn-huhehaote',
      'endpoint' => 'linkvisual.aliyuncs.com',
    ),
    4 => 
    array (
      'regionId' => 'cn-hangzhou',
      'endpoint' => 'linkvisual.cn-hangzhou.aliyuncs.com',
    ),
    5 => 
    array (
      'regionId' => 'cn-shanghai',
      'endpoint' => 'linkvisual.cn-shanghai.aliyuncs.com',
    ),
    6 => 
    array (
      'regionId' => 'cn-shenzhen',
      'endpoint' => 'linkvisual.aliyuncs.com',
    ),
    7 => 
    array (
      'regionId' => 'cn-hongkong',
      'endpoint' => 'linkvisual.aliyuncs.com',
    ),
    8 => 
    array (
      'regionId' => 'ap-northeast-1',
      'endpoint' => 'linkvisual.ap-northeast-1.aliyuncs.com',
    ),
    9 => 
    array (
      'regionId' => 'ap-southeast-1',
      'endpoint' => 'linkvisual.aliyuncs.com',
    ),
    10 => 
    array (
      'regionId' => 'ap-southeast-2',
      'endpoint' => 'linkvisual.aliyuncs.com',
    ),
    11 => 
    array (
      'regionId' => 'ap-southeast-3',
      'endpoint' => 'linkvisual.aliyuncs.com',
    ),
    12 => 
    array (
      'regionId' => 'ap-southeast-5',
      'endpoint' => 'linkvisual.aliyuncs.com',
    ),
    13 => 
    array (
      'regionId' => 'us-east-1',
      'endpoint' => 'linkvisual.aliyuncs.com',
    ),
    14 => 
    array (
      'regionId' => 'us-west-1',
      'endpoint' => 'linkvisual.aliyuncs.com',
    ),
    15 => 
    array (
      'regionId' => 'eu-west-1',
      'endpoint' => 'linkvisual.aliyuncs.com',
    ),
    16 => 
    array (
      'regionId' => 'eu-central-1',
      'endpoint' => 'linkvisual.aliyuncs.com',
    ),
    17 => 
    array (
      'regionId' => 'ap-south-1',
      'endpoint' => 'linkvisual.aliyuncs.com',
    ),
    18 => 
    array (
      'regionId' => 'me-east-1',
      'endpoint' => 'linkvisual.aliyuncs.com',
    ),
  ),
);